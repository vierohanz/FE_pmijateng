<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Session;
use App\Http\Requests\ProfileUpdateRequest;
use App\Http\Requests\ChangePasswordRequest;
use Illuminate\Http\Client\RequestException;

class ProfileController extends Controller
{
    protected $api_url_v1;
    protected $token;

    public function __construct()
    {
        $this->api_url_v1 = config('app.api_url_v1');
        $this->token = Session::get('access_token');
    }

    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        try {
            $response = Http::withtoken($this->token)->put($this->api_url_v1 . 'updateProfile', $request->validated());

            if ($response->successful()) {
                session::forget('user');
                session::put('user', $response['data']);
                notify()->info('Profil Berhasil Di Update', 'Update');
                return redirect()->route('account');
            } else {
                $errorMessage = $response->json('error') ?? $response->json('message') ?? 'Gagal Mengubah Profil';
                notify()->error($errorMessage, 'Error');
                return back();
            }
        } catch (RequestException $e) {
            $errorMessage = 'Koneksi timeout saat mencoba menghubungi server. Silakan coba lagi nanti.';
            notify()->error($errorMessage, 'Error');
            return back();

        } catch (\Exception $e) {
            $errorMessage = 'Gagal Mengubah Profil, Menunggu Server';
            notify()->error($errorMessage, 'Error');
            return back();
        }

    }

    public function updatePassword(ChangePasswordRequest $request): RedirectResponse
    {
        try {
            $response = Http::withtoken($this->token)->put($this->api_url_v1 . 'updatePassword', $request->validated());

            if ($response->successful()) {
                session::forget('access_token');
                Session::put('access_token', $response['access_token']);
                notify()->info('Password Berhasil Di Ubah', 'Update');
                return back();
            } else {
                $errorMessage = $response->json('error') ?? $response->json('message') ?? 'Gagal Mengubah Password';
                notify()->error($errorMessage, 'Error');
                return back();
            }
        } catch (RequestException $e) {
                $errorMessage = 'Koneksi timeout saat mencoba menghubungi server. Silakan coba lagi nanti.';
                notify()->error($errorMessage, 'Error');
                return back();

        } catch (\Exception $e) {
            $errorMessage = 'Gagal Mengubah Password, Menunggu Server';
            notify()->error($errorMessage, 'Error');
            return back();
        }
        

    }

    public function forgetPassword()
    {
        return view('forgetPassword');
    }
}
