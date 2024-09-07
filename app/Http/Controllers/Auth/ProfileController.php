<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\ChangePasswordRequest;
use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Session;

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
        $response = Http::withtoken($this->token)->put($this->api_url_v1 . 'updateProfile', $request->validated());

        if ($response->successful()) {
            session::forget('user');
            session::put('user', $response['data']);
            notify()->info('Profil Berhasil Di Update', 'Update');
            return redirect()->route('account');
        } else {
            notify()->error('Gagal Menyimpan Profil', 'Error');
            return back();
        }
    }

    public function updatePassword(ChangePasswordRequest $request): RedirectResponse
    {
        $response = Http::withtoken($this->token)->put($this->api_url_v1 . 'updatePassword', $request->validated());

        if ($response->successful()) {
            session::forget('access_token');
            Session::put('access_token', $response['access_token']);
            notify()->info('Password Berhasil Di Ubah', 'Update');
            return back();
        } else {

            notify()->error('Gagal Mengubah Password', 'Error');
            return back();
        }
    }
}
