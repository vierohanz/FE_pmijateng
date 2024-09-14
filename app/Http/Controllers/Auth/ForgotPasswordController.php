<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\ForgotPasswordRequest;
use Illuminate\Http\Client\RequestException;

class ForgotPasswordController extends Controller
{
    public function __invoke(ForgotPasswordRequest $request): RedirectResponse
    {
        try {
            $api_url_v1 = config('app.api_url_v1');

            $response = Http::post($api_url_v1 . 'forgotPassword', $request->validated());

            if ($response->successful()) {
                notify()->success('Link Reset Password berhasil di kirim', 'Success');
                return back();
            } else {
                $errorMessage = $response->json('error') ?? $response->json('message') ?? 'Link Reset Password Gagal di kirim, Coba Lagi';
                notify()->error($errorMessage, 'Error');
                return back();
            }
        } catch (RequestException $e) {
            $errorMessage = 'Koneksi timeout saat mencoba menghubungi server. Silakan coba lagi nanti.';
            notify()->error($errorMessage, 'Error');
            return back(); 

        } catch (\Exception $e) {
            $errorMessage = $errorMessage = $response->json('error') ?? $response->json('message') ?? 'Link Reset Password Gagal di kirim, Coba Lagi';
            notify()->error($errorMessage, 'Error');
            return back();
        }
        
        
    }
}
