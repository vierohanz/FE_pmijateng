<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class HomeController extends Controller
{
    public function __invoke()
    {
        try {
            $responseData = cache()->remember('roomData', 60, function () {
                $api_url_v1 = config('app.api_url_v1');

                $response = Http::timeout(20)->get($api_url_v1 . 'room_type/getAll');
                $response2 = Http::timeout(20)->get($api_url_v1 . 'packages/getAll');

                if ($response->failed() || $response2->failed()) {
                    return [
                        'response' => [],
                        'response2' => [],
                    ];
                }

                return [
                    'response' => $response->json(),
                    'response2' => $response2->json(),
                ];
            });
        } catch (\Illuminate\Http\Client\RequestException $e) {
            return [
                'response' => [],
                'response2' => [],
                'error' => 'Request failed: ' . $e->getMessage(), 
            ];
        }

        $rooms = array_filter($responseData['response'], fn($room) => in_array($room['id'], [1, 2]));
        $meetingRooms = array_filter($responseData['response'], fn($meetingRoom) => !in_array($meetingRoom['id'], [1, 2]));
        $packageRooms = $responseData['response2'];

        return view('index', ['rooms' => $rooms, 'meetingRooms' => $meetingRooms, 'packageRooms' => $packageRooms]); 
    }
    
}
