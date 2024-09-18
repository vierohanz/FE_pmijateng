<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;

class ReviewStar extends Controller
{
    protected $api_url_v1;
    protected $api_url_v2;

    public function __construct()
    {
        $this->api_url_v1 = config('app.api_url_v1');
        $this->api_url_v2 = config('app.api_url_v2');
    }

    public function postReview(Request $request)
    {
        // Validasi input
        $request->validate([
            'review' => 'required|string',
            'score' => 'required|integer|min:1|max:5',
            'user_email' => 'required|email',
            'user_transaction_id' => 'required|string',
        ]);

        try {
            // Kirim review ke API
            $response = Http::post($this->api_url_v1 . 'review/postReview', [
                'review' => $request->input('review'),
                'score' => $request->input('score'),
                'user_email' => $request->input('user_email'),
                'user_transaction_id' => $request->input('user_transaction_id'),
            ]);

            if ($response->successful()) {
                return response()->json([
                    'message' => 'Ulasan berhasil dikirim!',
                    'data' => $response->json(),
                ]);
            } else {
                $errorMessage = $response->json('error') ?? $response->json('message') ?? 'Gagal mengirim ulasan, coba lagi nanti.';
                return response()->json(['error' => $errorMessage], 400);
            }
        } catch (\Exception $e) {
            return response()->json(['error' => 'Terjadi kesalahan: ' . $e->getMessage()], 500);
        }
    }
}
