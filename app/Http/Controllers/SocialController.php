<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Http\Client\RequestException;

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
        try {
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

                notify()->success('Selamat Datang ' . implode(' ', array_slice(explode(' ', session('user')['name'] ?? 'default'), 0, 2)), 'Success');

                return redirect()->route('index')->with(['add' => 'Selamat Datang ' . $googleUser->name]);
            } else {
                $errorMessage = $response->json('error') ?? $response->json('message') ?? 'Gagal membuat akun';
                notify()->error($errorMessage, 'Error');
                return back();
            }
            
        }
        catch (RequestException $e) {
            $errorMessage = 'Koneksi timeout saat mencoba menghubungi server. Silakan coba lagi nanti.';
            notify()->error($errorMessage, 'Error');
            return back();
    
        } catch (\Exception $e) {
            $errorMessage =  $errorMessage = $response->json('error') ?? $response->json('message') ?? 'Register Gagal Coba Lagi';
            notify()->error($errorMessage, 'Error');
            return back();
        }
    
    }

    public function twitterRedirect()
    {
        return Socialite::driver('twitter')->redirect();
    }

    public function twitterCallback()
    {
        try {
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

                notify()->success('Selamat Datang ' . implode(' ', array_slice(explode(' ', session('user')['name'] ?? 'default'), 0, 2)), 'Success');

                return redirect('/homeRegister')->with(['add' => 'Selamat Datang ' . $twitterUser->name]);
            } else {
                $errorMessage = $response->json('error') ?? $response->json('message') ?? 'Gagal membuat akun';
                notify()->error($errorMessage, 'Error');
                return back();
            }
        }
        catch (RequestException $e) {
            $errorMessage = 'Koneksi timeout saat mencoba menghubungi server. Silakan coba lagi nanti.';
            notify()->error($errorMessage, 'Error');
            return back();
    
        } catch (\Exception $e) {
            $errorMessage = $errorMessage = $response->json('error') ?? $response->json('message') ?? 'Register Gagal Coba Lagi';
            notify()->error($errorMessage, 'Error');
            return back();
        }
    }
}
