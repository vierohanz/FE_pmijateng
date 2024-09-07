<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;

class OrderController extends Controller
{
    public function __invoke()
    {
            $user_email = session('user')['email'] ?? null;
            $api_url_v1 = config('app.api_url_v1');
            $bookings = [];

            $response = Http::get($api_url_v1 . 'user_transaction/getUserTransaction', [
                'user_email' => $user_email,
            ]);

            if ($response->successful()) {
                $bookings = $response->json();
                
            } elseif ($response->status() == 401) {
                return redirect()->route('register')->withErrors(['error' => 'Email Anda tidak terdaftar.']);
                
            }
            // dd($bookings);
            
            return view('historyTransaction', ['bookings' => $bookings]);
    }
}
