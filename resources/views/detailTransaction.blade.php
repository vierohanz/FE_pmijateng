@extends('profile')
@section('content')
    @vite('resources/js/detailTransaction.js')
    @vite('resources/css/app.css')
    <div class="h-full p-4 md:p-5 bg-white">
        <div class="p-4 md:p-5 bg-gray-100 rounded-lg">
            <div class="h-auto md:h-36 rounded-xl w-full bg-red-500 grid grid-cols-1 md:grid-cols-2 gap-4 md:gap-0">
                <div class="flex-col flex p-5 justify-center items-start space-y-2">
                    <p class="font-poppins font-bold text-white text-2xl" id="status-text">
                        {{ $transaction['payment_information']['payment_status'] }}</p>
                    <p id="text-information" class="font-poppins font-normal text-white text-lg md:text-l"></p>
                </div>
                <div class="flex justify-center md:justify-end pr-5 p-2 items-center text-white">
                    <div class="h-24 w-24 rounded-full bg-yellow-400 justify-center flex items-center" id="icon-container">
                    </div>
                </div>
            </div>
            <div class="justify-center my-6 flex flex-col items-center">
                <p id="order-id" class="font-poppins text-black font-semibold text-lg md:text-xl">
                    {{ $transaction['order_id'] }}</p>
                <button id="copy-button" class="font-poppins text-blue-500 font-semibold cursor-pointer">
                    Salin
                </button>
            </div>
            <div class="h-auto  mt-10 w-full grid grid-cols-1 md:grid-cols-6 gap-4">
                <div class="col-span-1 h-full md:col-span-2 bg-black">
                    <img src="{{ $transaction['room_detail']['room_image'] }}" class="bg-cover h-full w-full bg-center">
                </div>
                <div class="col-span-1 md:col-span-4 pl-0 md:pl-1 grid grid-rows-4 space-y-4">
                    <div class="row-span-1 grid grid-cols-3 gap-4">
                        <div class="flex flex-col justify-center items-start space-y-2">
                            <p class="text-gray-400 text-lg md:text-xl font-poppins font-semibold">Check-in</p>
                            <p class="text-black font-poppins text-md md:text-lg font-medium">{{ $transaction['check_in'] }}
                            </p>
                            <p class="text-gray-400 text-lg md:text-xl font-poppins font-medium">14:00</p>
                        </div>
                        <div class="flex justify-center items-center">
                            <p class="bg-red-500 text-white font-poppins font-semibold rounded-full py-2 px-10">
                                {{ $transaction['total_night'] }}
                                Malam</p>
                        </div>
                        <div class="flex flex-col justify-center items-end space-y-2">
                            <p class="text-gray-400 text-lg md:text-xl font-poppins font-semibold">Check-out</p>
                            <p class="text-black font-poppins text-md md:text-lg font-medium">
                                {{ $transaction['check_out'] }}</p>
                            <p class="text-gray-400 text-lg md:text-xl font-poppins font-medium">14:00</p>
                        </div>
                    </div>
                    <div class="row-span-3 bg-white rounded-lg shadow-lg p-4">
                        <div class="border-b pb-2 mb-4">
                            <h2 class="text-xl text-black font-poppins font-semibold">Informasi Ruangan</h2>
                        </div>
                        <div class="mb-4">
                            <p class="font-semibold font-poppins text-black text-lg">
                                {{ $transaction['room_detail']['room_type'] }}</p>
                            <p class="text-gray-500 font-poppins text-base">type :
                                {{ $transaction['payment_information']['channel'] }}</p>
                            <p class="text-gray-500 font-poppins text-base">
                                {{ $transaction['payment_information']['room_per_night_price'] }}</p>
                            <p class="font-semibold font-poppins text-black text-lg">Nama Ruangan :</p>
                            @forelse ($transaction['room_detail']['room_name'] as $item)
                                <p class="text-gray-500 font-poppins text-base">
                                    {{ $item }}</p>
                            @empty
                                <p class="text-gray-500 font-poppins text-base"></p>
                            @endforelse
                        </div>
                        <div class="mb-4">
                            <h3 class="font-semibold font-poppins text-black text-lg">Keuntungan</h3>
                            <p class="text-gray-500 font-poppins text-base">Parkir, Air minum, Kopi & Teh, WiFi Gratis</p>
                        </div>
                        <p class="font-semibold font-poppins text-gray-500 text-lg">Semua permintaan khusus tergantung
                            persediaan saat kedatangan.</p>
                    </div>
                </div>
            </div>
            <div class="h-auto mt-5 w-full grid grid-cols-1 lg:grid-cols-3 gap-6 rounded-lg">
                <div class="bg-white p-4 rounded-lg shadow">
                    <div class="flex items-center space-x-2 mb-4">
                        <svg class="w-6 h-6 text-red-500" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 2a10 10 0 1 0 10 10A10 10 0 0 0 12 2zm1 17h-2v-2h2zm0-4h-2V7h2z" />
                        </svg>
                        <h2 class="font-semibold text-xl font-poppins text-black">Informasi Tamu</h2>
                    </div>
                    <p class="font-poppins text-gray-500 text-base font-base">Tamu utama</p>
                    <p class="font-poppins text-black text-base font-semibold">
                        {{ $transaction['guest_information']['user_name'] }}</p>
                    <p class="font-poppins text-black text-base font-semibold">
                        {{ $transaction['guest_information']['phone'] }}
                    </p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow">
                    <div class="flex items-center space-x-2 mb-4">
                        <svg class="w-6 h-6 text-red-500" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M12 2A10 10 0 1 0 22 12A10 10 0 0 0 12 2Zm0 18a8 8 0 1 1 8-8a8.01 8.01 0 0 1-8 8Zm1-8h2v6h-2Zm-2 0H9v6h2Zm2-4v2h-2V8Zm-2 0v2h-2V8Zm2 0h2v2h-2Z" />
                        </svg>
                        <h2 class="font-semibold text-xl font-poppins text-black">Kebijakan pembatalan</h2>
                    </div>
                    <p class="font-poppins text-gray-500 text-base font-base">Tidak datang pada tanggal check-in dianggap
                        sebagai No-Show dan akan dikenai biaya sebesar 100% dari nominal pesanan (kebijakan hotel).</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow">
                    <h2 class="font-semibold text-xl font-poppins text-black mb-4">Informasi Pembayaran</h2>
                    <div class="flex justify-between items-center mb-2">
                        <p class="font-poppins text-gray-500 text-base">
                            {{ $transaction['guest_information']['room_booked'] }} kamar x
                            {{ $transaction['total_night'] }} malam</p>
                        <p class="font-semibold font-poppins text-black text-base">
                            {{ $transaction['payment_information']['total_price'] }}</p>
                    </div>
                    <div class="flex justify-between items-center mb-2">
                        <p class="font-poppins text-gray-500 text-base">Pajak dan Biaya Lainnya</p>
                        <p class="font-semibold font-poppins text-black text-base">Rp. 0</p>
                    </div>
                    <div class="flex justify-between items-center mb-4 border-t pt-2">
                        <p class="font-poppins text-black text-base font-semibold">Total Harga</p>
                        <p class="font-semibold font-poppins text-black text-base">
                            {{ $transaction['payment_information']['total_price'] }}</p>
                    </div>
                    <div class="flex justify-between items-center mt-4">
                        <p class="font-poppins text-gray-500 text-base">ID Pesan</p>
                        <p class="font-poppins text-gray-500 text-base">{{ $transaction['order_id'] }}</p>
                    </div>
                    <div class="flex justify-between items-center mt-4">
                        <p class="font-poppins text-gray-500 text-base font-base">Dipesan Pada</p>
                        <p class="font-poppins text-gray-500 text-base font-base">Sementara default menunggu backend
                            11-08-2024 17:30</p>
                    </div>

                </div>
            </div>
            <div class="h-16 mt-6 mb-2 w-full flex justify-end items-center">
                @if ($transaction['payment_information']['payment_status'] === 'pending')
                    <div class="h-16 mt-6 w-full flex justify-end items-center">
                        <a id="payment-button"
                            class="cursor-pointer h-full w-56 bg-red-500 flex justify-center items-center font-poppins text-white font-semibold text-xl hover:scale-105 transition-all duration-300 rounded-3xl ">
                            Payment
                        </a>
                        <script src="https://app.sandbox.midtrans.com/snap/snap.js"
                            data-client-key="{{ config('services.midtrans.clientKey') }}"></script>
                    </div>
                @endif
            </div>

            <div id="reviewSection"
                class="p-4 w-full md:w-1/2 mt-5 bg-white mx-auto rounded-lg shadow-md grid grid-rows-6 gap-4">
                <div class="row-span-2 h-full w-full">
                    <p class="font-poppins font-semibold text-2xl text-black">Berikan ulasan</p>
                </div>
                <div class="row-span-4 h-full w-full grid gap-4 grid-cols-6">
                    <div class="col-span-1 bg-detail_transaction bg-contain bg-center bg-no-repeat"></div>
                    <div class="col-span-5 grid-rows-3 grid h-full w-full">
                        <div class="flex items-center space-x-1">
                            <!-- Star Ratings -->
                            @for ($i = 1; $i <= 5; $i++)
                                <svg id="star{{ $i }}" class="w-8 h-8 text-gray-400 cursor-pointer fill-current"
                                    onmouseover="highlightStars({{ $i }})" onmouseout="resetStars()"
                                    onclick="rateStar({{ $i }})">
                                    <path
                                        d="M12 2l3.09 6.26L22 9.27l-5 4.87L18.18 21 12 17.27 5.82 21 7 14.14l-5-4.87 6.91-1.01L12 2z" />
                                </svg>
                            @endfor
                        </div>

                        <div class="row-span-2 w-full flex justify-center items-center">
                            <!-- Review Input -->
                            <input type="text" name="review" placeholder="Tuliskan ulasan Anda"
                                class="h-full w-full px-4 text-lg text-black font-poppins font-normal rounded-lg bg-white border-2 border-gray-200 focus:border-[#F05252] outline-none focus:outline-none focus:ring-0 focus:ring-offset-0">
                        </div>
                    </div>
                </div>
                <div class="h-12 w-full flex justify-end items-center">
                    <button type="button" id="submitReviewBtn"
                        class="px-4 py-2 autofill:border-none autofill:bg-none bg-red-500 text-white font-poppins text-base font-semibold rounded-lg hover:scale-105 transition-all duration-200 ">
                        Submit Review
                    </button>
                </div>
                <div class="h-1 w-full bg-gray-300"></div>
                <div class="flex flex-col">
                    <div id="reviewScore" class="flex items-center"></div> <!-- Update div ini -->
                    <p id="reviewText" class="mt-1 font-poppins text-gray-400 font-medium"></p>
                </div>
            </div>

        </div>
    </div>
    <script>
        // Mendapatkan access token dari session PHP dan menyimpannya di sessionStorage
        const accessToken = "{{ session('access_token') }}";

        if (accessToken) {
            sessionStorage.setItem("access_token", accessToken);
            console.log("Access Token disimpan di sessionStorage:", accessToken);
        }
    </script>
    <script>
        document.getElementById('payment-button').addEventListener('click', function() {
            var snapToken = `{{ $transaction['payment_information']['snap_token'] }}`;
            snap.pay(snapToken, {
                onSuccess: function(result) {
                    console.log('Payment Success:', result);
                    location.reload();
                },
                onPending: function(result) {
                    console.log('Payment Pending:', result);
                    location.reload();
                },
                onError: function(result) {
                    console.log('Payment Error:', result);
                    location.reload();
                },
                onClose: function() {
                    location.reload();
                }
            });
        });
    </script>
@endsection
