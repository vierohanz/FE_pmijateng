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
        $response = Session::get('user');

        if (!$token) {
            return redirect()->route('login')->withErrors(['error' => 'Silahkan Login Terlebih dahulu']);
        }

        if (!$response) {
            try {
                $apiResponse = Http::withToken($token)->get($api_url_v1 . 'me');

                if ($apiResponse->successful()) {
                    // Store the response in session
                    Session::put('user', $apiResponse->json());
                } else {
                    return redirect()->route('login')->withErrors(['error' => 'Silahkan Login Terlebih dahulu']);
                }

            } catch (\Throwable $th) {
                return redirect()->route('login')->withErrors(['error' => 'Silahkan Login Terlebih dahulu']);
            }
        }

        return $next($request);
    }
}

