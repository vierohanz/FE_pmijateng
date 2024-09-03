<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\EmailVerificationRequest;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;

class EmailVerificationController extends Controller
{
    public function __invoke(EmailVerificationRequest $request)
    {
        $api_url_v1 = config('app.api_url_v1');
        $token = Session::get('access_token');

        $response = Http::withToken($token)->post($api_url_v1 . 'sendEmailVerif' , $request->validated());

        if ($response->successful()) {

            return back()->with('status', 'Berhasil Mengirim Verifikasi Email');
        } else {

            return back()->withErrors('Gagal Mengirim Verifikasi Email');
        }
    }
}
