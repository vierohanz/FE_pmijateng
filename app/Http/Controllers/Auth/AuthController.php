<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    protected $api_url_v1;

    public function __construct(){
        $this->api_url_v1 = config('app.api_url_v1');
    }
    
    public function register(RegisterRequest $request): RedirectResponse
    {
        $response = Http::post($this->api_url_v1 . 'register', $request->validated());

        if ($response->successful()) {
            Session::put('access_token', $response['access_token']);
            Session::put('user', $response['data']);

            return redirect()->route('index')->with(['message' => 'Selamat Datang '.$request->name.' Kami telah mengirimkan verifikasi email ke email anda']);
        } else {
            return back()->withErrors('Gagal membuat akun');
        }
    }

    public function login(LoginRequest $request) : RedirectResponse
    {
        $response = Http::post($this->api_url_v1 . 'login', $request->validated());

        if ($response->successful()) {
            Session::put('access_token', $response['access_token']);
            Session::put('user', $response['data']);

            return redirect()->route('index')->with(['message' => 'Selamat Datang Kembali '.session('user')['name']]);
        } else {
            return back()->withErrors('Username atau Password Salah');
        }

    }

    public function logout(): RedirectResponse
    {
        try {
            $token = Session::get('access_token');

            Http::withToken($token)->post($this->api_url_v1 . 'logout');
            session()->invalidate();
            session()->flush();

            return redirect()->route('index');
        } catch (\Throwable $th) {
            return redirect()->route('index')->withErrors('Error... Coba Lagi Nanti');
        }
    }
}
