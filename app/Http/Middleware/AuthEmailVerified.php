<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Symfony\Component\HttpFoundation\Response;

class AuthEmailVerified
{
    public function handle(Request $request, Closure $next): Response
    {
        $user = Session::get('user');
        

        if (!isset($user['email_verified_at']) || $user['email_verified_at'] === null) {
            notify()->error('Silahkan Verifikasi Email Anda Terlebih dahulu', 'Error');
            return redirect()->route('account');
        }

        return $next($request);
    }
}
