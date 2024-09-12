<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\ForgotPasswordRequest;

class ForgotPasswordController extends Controller
{
    public function __invoke(ForgotPasswordRequest $request): RedirectResponse
    {
        $api_url_v1 = config('app.api_url_v1');

        $response = Http::post($api_url_v1 . 'forgotPassword', $request->validated());

        if ($response->successful()) {
            notify()->success('Link Reset Password berhasil di kirim', 'Success');
            return back();
        } else {
            notify()->error('Link Reset Password Gagal di kirim, Coba Lagi', 'Error');
            return back();
        }
    }
}
