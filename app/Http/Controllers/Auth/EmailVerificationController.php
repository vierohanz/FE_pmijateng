<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Session;
use App\Http\Requests\EmailVerificationRequest;

class EmailVerificationController extends Controller
{
    public function __invoke(EmailVerificationRequest $request): RedirectResponse
    {
        $api_url_v1 = config('app.api_url_v1');
        $token = Session::get('access_token');

        $response = Http::withToken($token)->post($api_url_v1 . 'sendEmailVerif', $request->validated());

        if ($response->successful()) {

            return back()->with(['add' => 'Berhasil Mengirim Verifikasi Email', 'title' => 'Success']);
        } else {

            return back()->with(['error' => 'Gagal Mengirim Verifikasi Email', 'title' => 'Error']);
        }
    }
}
