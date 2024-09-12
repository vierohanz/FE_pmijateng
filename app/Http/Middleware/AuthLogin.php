<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;
use Symfony\Component\HttpFoundation\Response;

class AuthLogin
{
    public function handle(Request $request, Closure $next): Response
    {
        $token = Session::get('access_token');
        $api_url_v1 = config('app.api_url_v1');

        if (!$token) {
            notify()->error('Silahkan Login Terlebih dahulu', 'Error');
            return redirect()->route('signIn')->withErrors('Silahkan Login Terlebih dahulu');
        }

        try {
            $apiResponse = Http::withToken($token)->get($api_url_v1 . 'me');

            if ($apiResponse->successful()) {
                Session::put('user', $apiResponse->json());
            } else {
                notify()->error('Silahkan Login Terlebih dahulu', 'Error');
                return redirect()->route('signIn');
            }
        } catch (\Throwable $th) {
            notify()->error('Silahkan Login Terlebih dahulu', 'Error');
            return redirect()->route('signIn');
        }

        return $next($request);
    }
}
