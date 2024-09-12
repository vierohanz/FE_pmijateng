<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Session;
use App\Http\Requests\EmailVerificationRequest;
use Illuminate\Http\JsonResponse;

class EmailVerificationController extends Controller
{
    public function __invoke(): JsonResponse
    {
        $api_url_v1 = config('app.api_url_v1');
        $token = Session::get('access_token');
        $response = Http::withToken($token)->post($api_url_v1 . 'sendEmailVerif');

        if ($response->successful()) {
            notify()->success('Verif Email Berhasil Di Kirim', 'Success');
            return response()->json(['message' => 'Verification email has been sent.']);
        } else {
            notify()->error('Verif Email Gagal Di Kirim, Coba Lagi', 'Error');
            return response()->json(['message' => 'Failed to send verification email.'], $response->status());
        }
        
    }
}
