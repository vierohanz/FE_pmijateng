<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;

class BookingController extends Controller
{
    protected $api_url_v1;
    protected $api_url_v2;

    public function __construct()
    {
        $this->api_url_v1 = config('app.api_url_v1');
        $this->api_url_v2 = config('app.api_url_v2');
    }

    public function showRoom($id)
    {
        try {
            $response = Http::get($this->api_url_v1 . 'room_type/getDetail', [
                'id' => $id,
            ]);

            if ($response->successful()){
                $room = $response->json();
                return view('detail', ['room' => $room]);
            }else{
                $errorMessage = $errorMessage = $response->json('error') ?? $response->json('message') ?? 'Gagal menemukan ruangan, coba lagi nanti';
                notify()->error( $errorMessage, 'Error');
                return back();
            }
        }
        catch (\Exception $e) {
            $errorMessage = $errorMessage = $response->json('error') ?? $response->json('message') ?? 'Gagal menemukan ruangan, coba lagi nanti';
            notify()->error( $errorMessage, 'Error');
            return back();
        }
        
    }

    public function showPackage($id)
    {
        try {
            $response = Http::get($this->api_url_v1 . 'packages/getDetail', [
                'id' => $id,
            ]);

            if ($response->successful()){
                $packages = $response->json();
                return view('detailPackage', ['packages' => $packages]);
            } else {
                $errorMessage = $errorMessage = $response->json('error') ?? $response->json('message') ?? 'Gagal menemukan paket';
                notify()->error( $errorMessage, 'Error');
                return back();
            }
        }
        catch (\Exception $e) {
            $errorMessage =  $errorMessage = $response->json('error') ?? $response->json('message') ?? 'Gagal menemukan paket';
            notify()->error( $errorMessage, 'Error');
            return back();
        }
    }

    public function checkOut($id)
    {
        try {
            $response = Http::get($this->api_url_v1 . 'room_type/getDetail', [
                'id' => $id,
            ]);

            if ($response->successful()){
                $room = $response->json();
                return view('checkout', ['room' => $room, 'api_url_v1' => $this->api_url_v1, 'api_url_v2' => $this->api_url_v2]);
            }
        } catch (\Exception $e) {
            $errorMessage =  $errorMessage = $response->json('error') ?? $response->json('message') ?? 'Gagal melakukan checkout, coba lagi nanti';
            notify()->error( $errorMessage, 'Error');
            return back();
        }
    }

    public function checkOutPackage($id)
    {
        try {
            $response = Http::get($this->api_url_v1 . 'packages/getDetail', [
                'id' => $id,
            ]);

            if ($response->successful()){
                $room = $response->json();
                return view('checkout', ['room' => $room, 'api_url_v1' => $this->api_url_v1, 'api_url_v2' => $this->api_url_v2]);
            }
        } catch (\Exception $e) {
            $errorMessage =  $errorMessage = $response->json('error') ?? $response->json('message') ?? 'Gagal melakukan checkout, coba lagi nanti';
            notify()->error( $errorMessage, 'Error');
            return back();
        }
        
    }
}
