@extends('topbarPayment')
@section('content')
    @vite('resources/js/checkout.js')
    @vite('resources/css/app.css')

    <div class="w-full h-auto pt-9 xl:pt-12 bg-white">
        <div class="px-4 md:px-16 lg:px-32 xl:px-48 flex justify-center items-center">
            <p class="font-poppins font-bold text-2xl md:text-3xl lg:text-4xl text-black">Form Pemesanan</p>
        </div>
    @if (isset($room['room_data']['room_type']))
        <form id="booking-form">
            @csrf
            <div class="px-4 md:px-16 lg:px-32 xl:px-48 py-10 bg-white w-full h-full">
                <div class="bg-gray-100 w-full h-full rounded-badge px-6 md:px-8 lg:px-10 py-10 flex-col flex space-y-8">
                    <div>
                        <p class="font-poppins font-semibold text-black text-base md:text-lg">Jumlah Ruangan</p>
                        <input id="amount_room" type="number" name="amount" min="1"
                            class="w-full mt-2 px-4 text-base md:text-lg text-black font-poppins font-normal rounded-2xl h-12 md:h-14 bg-white border-2 border-transparent focus:border-[#DA251D] focus:outline-none focus:ring-0 focus:ring-offset-0"
                            placeholder="Masukkan jumlah Ruangan">
                    </div>

                    <div>
                        <p for="tanggal-masuk" class="font-poppins font-semibold text-black text-base md:text-lg">Tanggal masuk
                        </p>
                        <input id="tanggal-masuk" name="start_date" type="text" placeholder="dd/mm/yy"
                            class="w-full mt-2 px-4 text-base md:text-lg text-black font-poppins font-normal rounded-2xl h-12 md:h-14 bg-white border-2 border-transparent focus:border-[#DA251D] focus:outline-none focus:ring-0 focus:ring-offset-0">
                    </div>

                    <div>
                        <p for="tanggal-keluar" class="font-poppins font-semibold text-black text-base md:text-lg">Tanggal
                            keluar</p>
                        <input id="tanggal-keluar" name="end_date" type="text" placeholder="dd/mm/yy"
                            class="w-full mt-2 px-4 text-base md:text-lg text-black font-poppins font-normal rounded-2xl h-12 md:h-14 bg-white border-2 border-transparent focus:border-[#DA251D] focus:outline-none focus:ring-0 focus:ring-offset-0">
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2">
                        <div class="text-start flex-col justify-start space-y-2 items-center">
                            <p class="font-poppins text-base md:text-lg font-semibold text-black">Harga kamar</p>
                            <p class="font-poppins text-sm font-normal text-black">*(1x) {{ $room['room_data']['room_type'] }} (1 malam)</p>
                            <input type="hidden" name="room_type_id" value="{{ $room['room_data']['id'] }}">
                        </div>
                        <div class="flex justify-end text-end items-center">
                            <p class="font-poppins text-lg md:text-xl font-bold text-black">Rp {{ $room['room_data']['price'] }}</p>
                            <input type="hidden" id="room_price" value="{{ $room['room_data']['price'] }}">
                        </div>
                    </div>

                    <hr class=" bg-black border-black">

                    <div class="grid grid-cols-1 md:grid-cols-2">
                        <div class="text-start flex-col justify-start space-y-2 items-center">
                            <p class="font-poppins text-base md:text-lg font-semibold text-black">Harga total</p>
                        </div>
                        <div class="flex justify-end text-end items-center">
                            <p id="total-price" class="font-poppins text-lg md:text-xl font-bold text-black">Rp </p>
                        </div>
                    </div>

                    <div class="w-full flex justify-center items-center">
                        <button type="submit"
                            class="w-3/4 hover:scale-105 transition-all duration-300 h-14 md:h-16 flex justify-center items-center mt-6 rounded-2xl bg-custom-primary text-lg md:text-xl font-poppins text-white font-semibold">Lanjutkan</button>
                    </div>
                </div>
            </div>
            <input type="hidden" value="{{ session('user')['email'] }}" readonly name="user_email">
            <input type="hidden" value="{{ session('user')['phone'] }}" readonly name="phone">
            <input type="hidden" value="{{ session('user')['name'] }}" readonly name="name">
            <input type="hidden" value="{{ $api_url_v1 }}" readonly name="api_url_v1">
        </form>
    @else
        <form id="booking-package-form">
            @csrf
            <div class="px-4 md:px-16 lg:px-32 xl:px-48 py-10 bg-white w-full h-full">
                <div class="bg-gray-100 w-full h-full rounded-badge px-6 md:px-8 lg:px-10 py-10 flex-col flex space-y-8">
                    <div>
                        <p class="font-poppins font-semibold text-black text-base md:text-lg">Banyak orang</p>
                        @foreach($room as $item)
                        <input type="number" id="person-count" name="person_count" min="{{ $item['min_person_quantity'] }}"
                            class="w-full mt-2 px-4 text-base md:text-lg text-black font-poppins font-normal rounded-2xl h-12 md:h-14 bg-white border-2 border-transparent focus:border-[#DA251D] focus:outline-none focus:ring-0 focus:ring-offset-0"
                            placeholder="Masukkan jumlah orang">
                        @endforeach
                    </div>

                    <div>
                        <p for="tanggal-masuk" class="font-poppins font-semibold text-black text-base md:text-lg">Tanggal masuk
                        </p>
                        <input id="tanggal-masuk" name="start_date" type="text" placeholder="dd/mm/yy"
                            class="w-full mt-2 px-4 text-base md:text-lg text-black font-poppins font-normal rounded-2xl h-12 md:h-14 bg-white border-2 border-transparent focus:border-[#DA251D] focus:outline-none focus:ring-0 focus:ring-offset-0">
                    </div>

                    <div>
                        <p for="tanggal-keluar" class="font-poppins font-semibold text-black text-base md:text-lg">Tanggal
                            keluar</p>
                        <input id="tanggal-keluar" name="end_date" type="text" placeholder="dd/mm/yy"
                            class="w-full mt-2 px-4 text-base md:text-lg text-black font-poppins font-normal rounded-2xl h-12 md:h-14 bg-white border-2 border-transparent focus:border-[#DA251D] focus:outline-none focus:ring-0 focus:ring-offset-0">
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2">
                    @foreach($room as $item)
                        <div class="text-start flex-col justify-start space-y-2 items-center">
                            <p class="font-poppins text-base md:text-lg font-semibold text-black">Harga kamar</p>
                            <p class="font-poppins text-sm font-normal text-black">*(1x) {{ $item['name'] }} (1 malam)</p>
                            <input type="hidden" name="package_id" value="{{ $item['id'] }}">
                        </div>
                        <div class="flex justify-end text-end items-center">
                            <input id ="price_per_person" type="hidden" value="{{ $item['price_per_person'] ?? 0 }}" readonly>
                            <p class="font-poppins text-lg md:text-xl font-bold text-black">Rp {{ $item['price_per_person'] ?? 0}}</p>
                        </div>
                    @endforeach
                    </div>

                    <hr class=" bg-black border-black">

                    <div class="grid grid-cols-1 md:grid-cols-2">
                        <div class="text-start flex-col justify-start space-y-2 items-center">
                            <p class="font-poppins text-base md:text-lg font-semibold text-black">Harga total</p>
                        </div>
                        <div class="flex justify-end text-end items-center">
                            <p id="total-price-package"  class="font-poppins text-lg md:text-xl font-bold text-black">Rp </p>
                        </div>
                    </div>

                    <div class="w-full flex justify-center items-center">
                        <button type="submit"
                            class="w-3/4 hover:scale-105 transition-all duration-300 h-14 md:h-16 flex justify-center items-center mt-6 rounded-2xl bg-custom-primary text-lg md:text-xl font-poppins text-white font-semibold">Lanjutkan</button>
                    </div>
                </div>
            </div>
            <input type="hidden" value="{{ session('user')['email'] }}" readonly name="user_email">
            <input type="hidden" value="{{ session('user')['phone'] }}" readonly name="phone">
            <input type="hidden" value="{{ session('user')['name'] }}" readonly name="name">
            <input type="hidden" value="{{ $api_url_v1 }}" readonly name="api_url_v1">
        </form>
    @endif
        <script src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key="{{ config('services.midtrans.clientKey') }}"></script>
    @endsection
