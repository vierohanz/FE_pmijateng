<?php

namespace App\Http\Controllers\Auth;

use App\Http\Requests\LoginRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\RegisterRequest;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Client\RequestException;

class AuthController extends Controller
{
    protected $api_url_v1;

    public function __construct()
    {
        $this->api_url_v1 = config('app.api_url_v1');
    }

    public function register(RegisterRequest $request): RedirectResponse
    {
        try {
            $response = Http::post($this->api_url_v1 . 'register', $request->validated());

            if ($response->successful()) {
                Session::put('access_token', $response['access_token']);
                Session::put('user', $response['data']);
                notify()->success($request->name . 'Kami telah mengirimkan verifikasi email ke email anda', 'Success');
                return redirect()->route('index');
            } else {
                $errorMessage = $response->json('error') ?? $response->json('message') ?? 'Gagal membuat akun';
                notify()->error($errorMessage, 'Error');
                return back();
            }

        } catch (RequestException $e) {
            $errorMessage = 'Koneksi timeout saat mencoba menghubungi server. Silakan coba lagi nanti.';
            notify()->error($errorMessage, 'Error');
            return back();
        } catch (\Exception $e) {
            $errorMessage = $errorMessage = $response->json('error') ?? $response->json('message') ?? 'Register Gagal Coba Lagi';
            notify()->error($errorMessage, 'Error');
            return back();
        }

    }

    public function login(LoginRequest $request): RedirectResponse
    {
        try {
            $response = Http::post($this->api_url_v1 . 'login', $request->validated());

            if ($response->successful()) {
                Session::put('access_token', $response['access_token']);
                Session::put('user', $response['data']);
                notify()->success('Selamat Datang ' . implode(' ', array_slice(explode(' ', session('user')['name'] ?? 'default'), 0, 2)), 'Success');
                return redirect()->route('index');
            } else {
                // Handle error response from the API
                $errorMessage = $response->json('error') ?? $response->json('message') ?? 'Gagal Login';
                notify()->error($errorMessage, 'Error');
                return back();
            }
        } catch (RequestException $e) {
            $errorMessage = 'Koneksi timeout saat mencoba menghubungi server. Silakan coba lagi nanti.';
            notify()->error($errorMessage, 'Error');
            return back();

        } catch (\Exception $e) {
            $errorMessage = $errorMessage = $response->json('error') ?? $response->json('message') ?? 'Login Gagal Coba Lagi';
            notify()->error($errorMessage, 'Error');
            return back();
        }

    }

    public function logout(): RedirectResponse
    {
        try {
            $token = Session::get('access_token');

            $response = Http::withToken($token)->post($this->api_url_v1 . 'logout');

            if ($response->successful()) {
                session()->invalidate();
                session()->flush();
                notify()->success('Berhasil logout', 'Success');
                return redirect()->route('index');
            } else {
                $errorMessage = $response->json('error') ?? $response->json('message') ?? 'Gagal Login';
                notify()->error($errorMessage, 'Error');
                return back();
            }

        } catch (\Throwable $th) {
            notify()->error('Error... Coba Lagi Nanti', 'Error');
            return redirect()->route('index');
        } catch (RequestException $e) {
            $errorMessage = 'Koneksi timeout saat mencoba menghubungi server. Silakan coba lagi nanti.'; 
            notify()->error($errorMessage, 'Error');
            return back();

        } catch (\Exception $e) {
            $errorMessage = $errorMessage = $response->json('error') ?? $response->json('message') ?? 'Logout Gagal Coba Lagi';
            notify()->error($errorMessage, 'Error');
            return back();
        }
    }
}
