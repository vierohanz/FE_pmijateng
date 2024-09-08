<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;

class BookingController extends Controller
{
    protected $api_url_v1;

    public function __construct(){
        $this->api_url_v1 = config('app.api_url_v1');
    }

    public function showRoom($id)
    {
        $response = Http::get($this->api_url_v1 . 'room_type/getDetail', [
            'id' => $id,
        ]);

        $room = $response->json();

        return view('detail', ['room' => $room]);
    }

    public function showPackage($id)
    {
        $response = Http::get($this->api_url_v1 . 'packages/getDetail', [
            'id' => $id,
        ]);

        $packages = $response->json();
        
        
        return view('detailPackage', ['packages' => $packages]);
    }

    public function checkOut($id)
    {
        $response = Http::get($this->api_url_v1 . 'room_type/getDetail', [
            'id' => $id,
        ]);

        $room = $response->json();

        return view('checkout', ['room' => $room, 'api_url_v1' => $this->api_url_v1]);
    }

    public function checkOutPackage($id)
    {
        $response = Http::get($this->api_url_v1 . 'packages/getDetail', [
            'id' => $id,
        ]);

        $room = $response->json();

        return view('checkout', ['room' => $room, 'api_url_v1' => $this->api_url_v1]);
    }

}
