<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;

class DetailTransactionController extends Controller
{
    public function __invoke(Request $request)
    {
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
        } else {
            return redirect()->route('historyTransaction')->with(['error', 'Failed to get transaction detail']);
        }

        return view('detailTransaction', ['transaction' => $transaction]);
    }
}
