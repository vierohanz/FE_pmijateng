<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Client\RequestException;
use App\Http\Requests\EmailVerificationRequest;

class EmailVerificationController extends Controller
{
    public function __invoke(): JsonResponse
    {
        try {
            $api_url_v1 = config('app.api_url_v1');
            $token = Session::get('access_token');
            $response = Http::withToken($token)->post($api_url_v1 . 'sendEmailVerif');

            if ($response->successful()) {
                notify()->success('Verif Email Berhasil Di Kirim', 'Success');
                return response()->json(['message' => 'Verification email has been sent.']);
            } else {
                $errorMessage = $response->json('error') ?? $response->json('message') ?? 'Verif Email Gagal Di Kirim, Coba Lagi';
                notify()->error($errorMessage, 'Error');
                return response()->json(['message' => $errorMessage], $response->status());
            }

        } catch (RequestException $e) {
            $errorMessage = 'Koneksi timeout saat mencoba menghubungi server. Silakan coba lagi nanti.';
            notify()->error($errorMessage, 'Error');
            return response()->json(['message' => $errorMessage], 504);

        } catch (\Exception $e) {
            $errorMessage =  'Verif Email Gagal Di Kirim, Menunggu Server';
            notify()->error($errorMessage, 'Error');
            return response()->json(['message' => $errorMessage], 500);
        }
    }
}
