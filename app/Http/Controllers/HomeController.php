<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class HomeController extends Controller
{
    public function __invoke()
    {
        // Ambil data dari session untuk availableRooms
        $availableRooms = session('availableRooms', []);

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

        // Pastikan untuk memeriksa apakah kunci ada sebelum mengaksesnya
        $rooms = isset($responseData['response']) ? array_filter($responseData['response'], fn($room) => in_array($room['id'], [1, 2])) : [];
        $meetingRooms = isset($responseData['response']) ? array_filter($responseData['response'], fn($meetingRoom) => !in_array($meetingRoom['id'], [1, 2])) : [];
        $packageRooms = $responseData['response2'] ?? []; // Menggunakan null coalescing operator

        return view('index', compact('availableRooms', 'rooms', 'meetingRooms', 'packageRooms'));
    }

    public function availableRooms(Request $request)
    {
        // Validasi input
        $request->validate([
            'start_date' => 'required|date',
            'end_date' => 'required|date|after:start_date',
            'amount' => 'required|integer|min:1',
        ]);

        $startDate = $request->input('start_date');
        $endDate = $request->input('end_date');
        $amount = $request->input('amount');

        $url = "http://dashboard.palmerinjateng.id/api/v1/booking/availableRoomOnDate?start_date={$startDate}&end_date={$endDate}&amount={$amount}";

        $response = Http::get($url);

        if ($response->successful()) {
            $availableRooms = $response->json();

            session(['availableRooms' => $availableRooms]);

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

            $meetingRooms = isset($responseData['response']) ? array_filter($responseData['response'], fn($meetingRoom) => !in_array($meetingRoom['id'], [1, 2])) : [];
            $packageRooms = $responseData['response2'] ?? [];
            return view('index', compact('availableRooms', 'meetingRooms', 'packageRooms'));
        }

        return back()->with('error', 'Failed to retrieve available rooms.');
    }
}
