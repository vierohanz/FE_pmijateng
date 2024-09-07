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

            return redirect()->route('account')->with(['update' => 'Profil Berhasil Di Update', 'title' => "Update"]);
        } else {

            return back()->with(['error' => 'Gagal Menyimpan Profil', 'title' => 'Error']);
        }
    }

    public function updatePassword(ChangePasswordRequest $request): RedirectResponse
    {
        $response = Http::withtoken($this->token)->put($this->api_url_v1 . 'updatePassword', $request->validated());

        if ($response->successful()) {
            session::forget('access_token');
            Session::put('access_token', $response['access_token']);

            return back()->with(['update' => 'Password Berhasil Di Ubah', 'title' => 'Update']);
        } else {
            return back()->with(['error' => 'Gagal Mengubah Password', 'title' => 'Error']);
        }
    }
}
