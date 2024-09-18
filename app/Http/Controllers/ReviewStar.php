<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;

class ReviewStar extends Controller
{
    public function postReview(Request $request)
    {
        try {
            // URL API yang diambil dari file konfigurasi
            $api_url_v1 = config('app.api_url_v1');

            // Mendapatkan access token dari session
            $token = Session::get('access_token');

            // Mengambil userTransactionId dan userEmail dari request (bisa dari URL atau form)
            $userTransactionId = $request->input('user_transaction_id');
            $userEmail = Session::get('user_email');
            $review = $request->input('review');
            $score = $request->input('score');

            // Membuat POST request ke API untuk mengirimkan review
            $response = Http::withToken($token)->post($api_url_v1 . '/review/postReview', [
                'user_transaction_id' => $userTransactionId,
                'user_email' => $userEmail,
                'review' => $review,
                'score' => $score,
            ]);

            // Mengecek apakah request berhasil
            if ($response->successful()) {
                notify()->success("Review berhasil dikirim", 'Success');
                return redirect()->route('historyTransaction'); // Arahkan kembali ke halaman riwayat transaksi
            } else {
                // Jika request gagal, ambil kode status dan isi body error dari respons API
                $statusCode = $response->status();
                $errorBody = $response->body(); // Mendapatkan keseluruhan body response

                // Kamu juga bisa mengambil JSON response jika tersedia
                $errorJson = $response->json();

                // Menampilkan pesan error (termasuk kode status dan body error)
                notify()->error("Error: $statusCode - $errorBody", 'Error');
                return redirect()->route('historyTransaction');
            }
        } catch (\Exception $e) {
            // Penanganan error umum
            $errorMessage = 'Terjadi kesalahan saat mengirimkan review, coba lagi nanti.';
            notify()->error($errorMessage, 'Error');
            return redirect()->route('historyTransaction');
        }
    }
}
