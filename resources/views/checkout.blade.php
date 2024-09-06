@extends('topbarPayment')
@section('content')
    @vite('resources/js/checkout.js')
    @vite('resources/css/app.css')

    <div class="w-full h-auto pt-9 xl:pt-12 bg-white">
        <div class="px-4 md:px-16 lg:px-32 xl:px-48 flex justify-center items-center">
            <p class="font-poppins font-bold text-2xl md:text-3xl lg:text-4xl text-black">Form Pemesanan</p>
        </div>
        <div class="px-4 md:px-16 lg:px-32 xl:px-48 py-10 bg-white w-full h-full">
            <div class="bg-gray-100 w-full h-full rounded-badge px-6 md:px-8 lg:px-10 py-10 flex-col flex space-y-8">
                <div>
                    <p class="font-poppins font-semibold text-black text-base md:text-lg">Banyak orang</p>
                    <input type="number" name="people" min="1"
                        class="w-full mt-2 px-4 text-base md:text-lg text-black font-poppins font-normal rounded-2xl h-12 md:h-14 bg-white border-2 border-transparent focus:border-[#DA251D] focus:outline-none focus:ring-0 focus:ring-offset-0"
                        placeholder="Masukkan jumlah orang">
                </div>

                <div>
                    <p for="tanggal-masuk" class="font-poppins font-semibold text-black text-base md:text-lg">Tanggal masuk
                    </p>
                    <input id="tanggal-masuk" type="text" placeholder="dd/mm/yy"
                        class="w-full mt-2 px-4 text-base md:text-lg text-black font-poppins font-normal rounded-2xl h-12 md:h-14 bg-white border-2 border-transparent focus:border-[#DA251D] focus:outline-none focus:ring-0 focus:ring-offset-0">
                </div>

                <div>
                    <p for="tanggal-keluar" class="font-poppins font-semibold text-black text-base md:text-lg">Tanggal
                        keluar</p>
                    <input id="tanggal-keluar" type="text" placeholder="dd/mm/yy"
                        class="w-full mt-2 px-4 text-base md:text-lg text-black font-poppins font-normal rounded-2xl h-12 md:h-14 bg-white border-2 border-transparent focus:border-[#DA251D] focus:outline-none focus:ring-0 focus:ring-offset-0">
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2">
                    <div class="text-start flex-col justify-start space-y-2 items-center">
                        <p class="font-poppins text-base md:text-lg font-semibold text-black">Harga kamar</p>
                        <p class="font-poppins text-sm font-normal text-black">*(1x) Premier Deluxe King Bed (1 malam)</p>
                    </div>
                    <div class="flex justify-end text-end items-center">
                        <p class="font-poppins text-lg md:text-xl font-bold text-black">Rp 300.000</p>
                    </div>
                </div>

                <hr class=" bg-black border-black">

                <div class="grid grid-cols-1 md:grid-cols-2">
                    <div class="text-start flex-col justify-start space-y-2 items-center">
                        <p class="font-poppins text-base md:text-lg font-semibold text-black">Harga total</p>
                    </div>
                    <div class="flex justify-end text-end items-center">
                        <p class="font-poppins text-lg md:text-xl font-bold text-black">Rp 300.000</p>
                    </div>
                </div>

                <div class="w-full flex justify-center items-center">
                    <a href=""
                        class="w-3/4 hover:scale-105 transition-all duration-300 h-14 md:h-16 flex justify-center items-center mt-6 rounded-2xl bg-custom-primary text-lg md:text-xl font-poppins text-white font-semibold">Lanjutkan</a>
                </div>
            </div>
        </div>
    @endsection
