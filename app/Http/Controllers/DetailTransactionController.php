<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Client\RequestException;

class DetailTransactionController extends Controller
{
    public function __invoke(Request $request)
    {
        try {
            $api_url_v1 = config('app.api_url_v1');
            $userEmail = $request->query('user_email');
            $id = $request->query('id');
            $api_url_v2 = config('app.api_url_v2');
            $token = Session::get('access_token');

            $response = Http::withToken($token)->get($api_url_v2 . 'user_transaction/detail', [
                'user_email' => $userEmail,
                'id' => $id,
            ]);

            if ($response->successful()) {
                $transaction = [];
                $transaction = $response->json();

                $transaction['check_in'] = Carbon::parse($transaction['check_in'])->translatedFormat('d F Y');
                $transaction['check_out'] = Carbon::parse($transaction['check_out'])->translatedFormat('d F Y');
                return view('detailTransaction', ['transaction' => $transaction]);
            } else {
                $errorMessage =  $response->json('error') ?? $response->json('message') ?? 'Gagal Mendapatkan Detail Transaksi, Coba lagi';
                notify()->error('Gagal Mendapatkan Detail Transaksi, Coba lagi', 'Error');
                return redirect()->route('historyTransaction');
            }      

        } catch (RequestException $e) {
            $errorMessage = 'Koneksi timeout saat mencoba menghubungi server. Silakan coba lagi nanti.';
            notify()->error($errorMessage, 'Error');
            return redirect()->route('historyTransaction');

        } catch (\Exception $e) {
            $errorMessage ='Gagal Mendapatkan Detail Transaksi, Menunggu Server';
            notify()->error($errorMessage, 'Error');
            return redirect()->route('historyTransaction');
        }

    }
}
