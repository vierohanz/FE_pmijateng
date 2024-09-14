<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;

class OrderController extends Controller
{
    public function __invoke()
    {
        $user_email = session('user')['email'] ?? null;
        $api_url_v2 = config('app.api_url_v2');
        $token = Session::get('access_token');

        $bookings = [];

        $response = Http::withtoken($token)->get($api_url_v2 . 'user_transaction/getUserTransaction', [
            'user_email' => $user_email,
        ]);

        if ($response->successful()) {
            $bookings = $response->json();
        } elseif ($response->status() == 401) {
            $errorMessage = $response->json('error') ?? $response->json('message') ?? 'Email tidak terdaftar atau tidak tersedia';
            notify()->error($errorMessage, 'Error');
            return redirect()->route('register');
        }

        return view('historyTransaction', ['bookings' => $bookings]);
    }
}
