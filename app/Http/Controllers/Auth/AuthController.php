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

    public function __construct()
    {
        $this->api_url_v1 = config('app.api_url_v1');
    }

    public function register(RegisterRequest $request): RedirectResponse
    {
        $response = Http::post($this->api_url_v1 . 'register', $request->validated());

        if ($response->successful()) {
            Session::put('access_token', $response['access_token']);
            Session::put('user', $response['data']);
            notify()->success($request->name . 'Kami telah mengirimkan verifikasi email ke email anda', 'Success');
            return redirect()->route('index');
        } else {
<<<<<<< HEAD
            notify()->error('Gagal membuat akun', 'Error');

            return back();
=======
            return back()->withErrors('Gagal Membuat Akun');
>>>>>>> 1ea7ae1e8881c597ca29b628f4f05989695611c1
        }
    }

    public function login(LoginRequest $request): RedirectResponse
    {
        $response = Http::post($this->api_url_v1 . 'login', $request->validated());

        if ($response->successful()) {
            Session::put('access_token', $response['access_token']);
            Session::put('user', $response['data']);
            notify()->success('Selamat Datang ' . implode(' ', array_slice(explode(' ', session('user')['name'] ?? 'default'), 0, 2)), 'Success');
            return redirect()->route('index');
        } else {
<<<<<<< HEAD
            return back()->withErrors([
                'credentials' => 'Email atau password salah',
            ]);
=======
            return back()->withErrors('Email atau Password Salah');
>>>>>>> 1ea7ae1e8881c597ca29b628f4f05989695611c1
        }
    }

    public function logout(): RedirectResponse
    {
        try {
            $token = Session::get('access_token');

            Http::withToken($token)->post($this->api_url_v1 . 'logout');
            session()->invalidate();
            session()->flush();
            notify()->success('Berhasil logout', 'Success');
            return redirect()->route('index');
        } catch (\Throwable $th) {
            notify()->error('Error... Coba Lagi Nanti', 'Error');
            return redirect()->route('index');
        }
    }
}
