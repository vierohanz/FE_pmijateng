<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;
use Laravel\Socialite\Facades\Socialite;

class SocialController extends Controller
{
    protected $api_url_v1;

    public function __construct()
    {
        $this->api_url_v1 = config('app.api_url_v1');
    }

    public function redirect()
    {
        return Socialite::driver('google')
            ->redirect();
    }

    public function googleCallback()
    {
        $googleUser = Socialite::driver('google')->user();
        $password = Str::random(24);

        // Send POST request to API endpoint
        $response = Http::post($this->api_url_v1 . 'registerSocial', [
            'email' => $googleUser->email,
            'name' => $googleUser->name,
            'phone' => $googleUser->phone ?? '',
            'password' => $password,
        ]);

        // Return response from API to client
        if ($response->successful()) {
            // Store access token in session
            $accessToken = $response->json()['access_token'];
            Session::put('access_token', $accessToken);

            Session::put('user', $response['data']);

            return redirect()->route('index')->with(['add' => 'Selamat Datang ' . $googleUser->name]);
        } else {
            return back()->with('error', 'Gagal membuat akun');
        }
    }

    public function twitterRedirect()
    {
        return Socialite::driver('twitter')->redirect();
    }

    public function twitterCallback()
    {
        $twitterUser = Socialite::driver('twitter')->user();
        $password = Str::random(24);

        // Send POST request to API endpoint
        $response = Http::post($this->api_url_v1 . 'registerSocial', [
            'email' => $twitterUser->email,
            'name' => $twitterUser->name,
            'phone' => $twitterUser->phone ?? '',
            'password' => $password,
        ]);

        // Return response from API to client
        if ($response->successful()) {
            // Store access token in session
            $accessToken = $response->json()['access_token'];
            Session::put('access_token', $accessToken);

            Session::put('user', $response['data']);

            return redirect('/homeRegister')->with(['add' => 'Selamat Datang ' . $twitterUser->name]);
        } else {
            return back()->with('error', 'Gagal membuat akun');
        }
    }
}
