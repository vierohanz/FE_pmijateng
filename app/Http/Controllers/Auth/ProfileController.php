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

    public function __construct(){
        $this->api_url_v1 = config('app.api_url_v1');
        $this->token = Session::get('access_token');
    }

    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        $response = Http::withtoken($this->token)->put($this->api_url_v1 . 'updateProfile', $request->validated());

        if ($response->successful()) {
            session::forget('user');
            session::put('user', $response['data']);

            return redirect()->route('account')->with('message', 'Profil Berhasil Di Update');
        } else {

            return back()->withErrors('Gagal Menyimpan Profil');
        }
    }

    public function updatePassword(ChangePasswordRequest $request): RedirectResponse
    {   
        $response = Http::withtoken($this->token)->put($this->api_url_v1 . 'updatePassword', $request->validated());

        if ($response->successful()) {
            session::forget('access_token');
            Session::put('access_token', $response['access_token']);

            return back()->with('message', 'Password Berhasil Di Ubah');
        } else {

            return back()->withErrors('Gagal Mengubah Password');
        }
    }
}
