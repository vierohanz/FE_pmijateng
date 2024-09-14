<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Client\RequestException;

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

                if ($response->failed()) {
                    return [
                        'response' => [],
                        'response2' => $response2->json(),
                        'error' => 'API request failed with status: ' . $response->status() . ' and ' . $response2->status(),
                    ];
                } elseif ($response2->failed()) {
                    return [
                        'response' => $response->json(),
                        'response2' => [],
                        'error' => 'API request failed with status: ' . $response->status() . ' and ' . $response2->status(),
                    ];
                }

                return [
                    'response' => $response->json(),
                    'response2' => $response2->json(),
                ];
            });
        } catch (\Exception $e) {
            return [
                'response' => [],
                'response2' => [],
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
        try {
            $api_url_v1 = config('app.api_url_v1');
            // Validasi input
            $request->validate([
                'start_date' => 'required|date',
                'end_date' => 'required|date|after:start_date',
                'amount' => 'required|integer|min:1',
            ]);

            $startDate = $request->input('start_date');
            $endDate = $request->input('end_date');
            $amount = $request->input('amount');

            $availableRooms = [];

            $responseData = cache()->remember('roomData', 60, function () {
                $api_url_v1 = config('app.api_url_v1');
                $response = Http::timeout(20)->get($api_url_v1 . 'room_type/getAll');
                $response2 = Http::timeout(20)->get($api_url_v1 . 'packages/getAll');

                if ($response->failed()) {
                    return [
                        'response' => [],
                        'response2' => $response2->json(),
                    ];
                } elseif ($response2->failed()) {
                    return [
                        'response' => $response->json(),
                        'response2' => [],
                    ];
                }

                return [
                    'response' => $response->json(),
                    'response2' => $response2->json(),
                ];
            });

            $meetingRooms = isset($responseData['response']) ? array_filter($responseData['response'], fn($meetingRoom) => !in_array($meetingRoom['id'], [1, 2])) : [];
            $rooms = isset($responseData['response']) ? array_filter($responseData['response'], fn($room) => in_array($room['id'], [1, 2])) : [];
            $packageRooms = $responseData['response2'] ?? [];

            $url =  $api_url_v1 . "booking/availableRoomOnDate?start_date={$startDate}&end_date={$endDate}&amount={$amount}";

            $response_available = Http::get($url);

            if ($response_available->successful()) {
                $availableRooms = $response_available->json();

                session(['availableRooms' => $availableRooms]);

                notify()->success( 'Menemukan ruangan tersedia','Sukses');
                return view('index', compact('availableRooms', 'meetingRooms', 'packageRooms', 'rooms'));
            } else{
                $errorMessage = $response_available->json()[0] ?? $response_available->json('error') ?? $response_available->json('message') ?? 'Gagal menemukan ruangan tersedia';
                notify()->error($errorMessage, 'Error');
                return view('index', compact('availableRooms', 'meetingRooms', 'packageRooms', 'rooms'));
            }
            
        } catch (RequestException $e) {
            $errorMessage = 'Koneksi timeout saat mencoba menghubungi server. Silakan coba lagi nanti.';
            notify()->error($errorMessage, 'Error');
            return back();

        } catch (\Exception $e) {
            $errorMessage =  'Gagal menemukan ruangan tersedia';
            notify()->error($errorMessage, 'Error');
            return back();
        }
    }
}
