@extends('profile')
@section('content')
    @vite('resources/js/detailTransaction.js')
    @vite('resources/css/app.css')
    <div class="h-full p-4 md:p-5 bg-white">
        <div class="p-4 md:p-5 bg-gray-100 rounded-lg">
            <div class="h-auto md:h-36 rounded-xl w-full bg-custom-primary grid grid-cols-1 md:grid-cols-2 gap-4 md:gap-0">
                <div class="flex-col flex p-5 justify-center items-start space-y-2">
                    <p class="font-poppins font-bold text-white text-2xl" id="status-text">Selesai</p>
                    <p class="font-poppins font-normal text-white text-lg md:text-xl pr-0 md:pr-48">Pesanan telah selesai.
                        Kami tunggu pesanan berikutnya</p>
                </div>
                <div class="flex justify-center md:justify-end pr-5 p-2 items-center text-white">
                    <div class="h-24 w-24 rounded-full bg-yellow-400 justify-center flex items-center" id="icon-container">
                    </div>
                </div>
            </div>
            <div class="justify-center my-6 flex flex-col items-center">
                <p id="order-id" class="font-poppins text-black font-semibold text-lg md:text-xl">ID Pesanan 1278928334</p>
                <button id="copy-button" class="font-poppins text-blue-500 font-semibold cursor-pointer">
                    Salin
                </button>
            </div>
            <div class="h-auto mt-10 w-full grid grid-cols-1 md:grid-cols-6 gap-4">
                <div class="col-span-1 md:col-span-2 bg-black">
                    <img class="bg-corousel_1 bg-cover h-full w-full bg-center">
                </div>
                <div class="col-span-1 md:col-span-4 pl-0 md:pl-1 grid grid-rows-4 space-y-4">
                    <div class="row-span-1 grid grid-cols-3 gap-4">
                        <div class="flex flex-col justify-center items-start space-y-2">
                            <p class="text-gray-400 text-lg md:text-xl font-poppins font-semibold">Check-in</p>
                            <p class="text-black font-poppins text-md md:text-lg font-medium">27 Januari 2024</p>
                            <p class="text-gray-400 text-lg md:text-xl font-poppins font-medium">14:00</p>
                        </div>
                        <div class="flex justify-center items-center">
                            <p class="bg-custom-primary text-white font-poppins font-semibold rounded-full py-2 px-10">1
                                Malam</p>
                        </div>
                        <div class="flex flex-col justify-center items-end space-y-2">
                            <p class="text-gray-400 text-lg md:text-xl font-poppins font-semibold">Check-out</p>
                            <p class="text-black font-poppins text-md md:text-lg font-medium">28 Januari 2024</p>
                            <p class="text-gray-400 text-lg md:text-xl font-poppins font-medium">14:00</p>
                        </div>
                    </div>
                    <div class="row-span-3 bg-white rounded-lg shadow-lg p-4">
                        <div class="border-b pb-2 mb-4">
                            <h2 class="text-xl text-black font-poppins font-semibold">Informasi Ruangan</h2>
                        </div>
                        <div class="mb-4">
                            <p class="font-semibold font-poppins text-black text-lg">1 X Twin Room</p>
                            <p class="text-gray-500 font-poppins text-base">Pemandangan Kota | 18 m²/194 ft² | Bebas asap
                                rokok | 2 kasur twin</p>
                        </div>
                        <div class="mb-4">
                            <h3 class="font-semibold font-poppins text-black text-lg">Keuntungan</h3>
                            <p class="text-gray-500 font-poppins text-base">Parkir, Air minum, Kopi & Teh, WiFi Gratis</p>
                        </div>
                        <div class="mb-4">
                            <h3 class="font-semibold font-poppins text-black text-lg">Permintaan Khusus</h3>
                            <p class="text-gray-500 font-poppins text-base">Saya ingin kamar bebas asap rokok</p>
                            <p class="text-gray-500 font-poppins text-base">Saya ingin view menghadap kolam</p>
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
                    <p class="font-poppins text-black text-base font-semibold">Dandy hutomo</p>
                    <p class="mt-4 font-poppins text-gray-500 text-base font-base">Tamu yang terdaftar</p>
                    <p class="font-poppins text-black text-base font-semibold">2 Dewasa</p>
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
                        <p class="font-poppins text-gray-500 text-base">1 kamar x 1 malam</p>
                        <p class="font-semibold font-poppins text-black text-base">IDR 300.000,00</p>
                    </div>
                    <div class="flex justify-between items-center mb-2">
                        <p class="font-poppins text-gray-500 text-base">Pajak dan Biaya Lainnya</p>
                        <p class="font-semibold font-poppins text-black text-base">IDR 27.000,00</p>
                    </div>
                    <div class="flex justify-between items-center mb-4 border-t pt-2">
                        <p class="font-poppins text-black text-base font-semibold">Total Harga</p>
                        <p class="font-semibold font-poppins text-black text-base">IDR 327.000,00</p>
                    </div>
                    <p class="font-poppins text-gray-500 text-base mb-2">Metode pembayaran</p>
                    <p class="font-semibold font-poppins text-black">Bank Mandiri</p>
                    <div class="flex justify-between items-center mt-4">
                        <p class="font-poppins text-gray-500 text-base">ID Pesan</p>
                        <p class="font-poppins text-gray-500 text-base">1278928334</p>
                    </div>
                    <div class="flex justify-between items-center mt-4">
                        <p class="font-poppins text-gray-500 text-base font-base">Dipesan Pada</p>
                        <p class="font-poppins text-gray-500 text-base font-base">11-08-2024 17:30</p>
                    </div>
                    <div class="flex justify-between items-center">
                        <p class="font-poppins text-gray-500 text-base font-base">Dibayar Pada</p>
                        <p class="font-poppins text-gray-500 text-base font-base">11-08-2024 18:56</p>
                    </div>

                </div>
            </div>
            <div class="h-16 mt-6 w-full flex justify-end items-center">
                <a href=""
                    class="cursor-pointer h-full w-56 bg-custom-primary flex justify-center items-center font-poppins text-white font-semibold text-xl hover:scale-105 transition-all duration-300 rounded-3xl ">
                    Payment
                </a>
            </div>
        </div>
    </div>
@endsection
