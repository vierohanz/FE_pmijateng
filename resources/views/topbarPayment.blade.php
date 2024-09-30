<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="{{ asset('images/logo1.png') }}">
    <title>PUSDIKLAT PMI</title>
    @vite('resources/css/app.css')
    @vite('resources/js/topbarPayment.js')

</head>

<body class="bg-white">
    <div>
        <nav class="w-full h-24 bg-white fixed grid grid-cols-2 px-4 sm:px-8 md:px-16 lg:px-32 shadow-lg z-50">
            <!-- Logo and Title Section -->
            <div class="row-span-1 w-full h-full flex space-x-2 items-center justify-start">
                <div class="hidden xl:flex flex-col justify-end items-end text-end">
                    <p class="font-poppins font-bold text-red-600 text-base sm:text-lg md:text-xl">PUSDIKLAT</p>
                    <p class="font-poppins font-normal text-custom-secondary text-xs sm:text-sm">Provinsi Jawa Tengah
                    </p>
                </div>
                <div class="h-3/4 hidden xl:flex w-2 bg-red-600"></div>
                <div class="flex">
                    <div class="bg-logo_pmi bg-cover h-12 w-12 sm:h-14 sm:w-14 md:h-16 md:w-16"></div>
                    <div
                        class="ml-3 hidden xl:flex flex-col font-poppins text-black font-bold text-xs sm:text-sm md:text-base">
                        <p>Palang</p>
                        <p>Merah</p>
                        <p>Indonesia</p>
                    </div>
                </div>
            </div>
            <!-- Steps Section -->
            <div class="flex items-center justify-end space-x-2 sm:space-x-4">
                <!-- Step 1: Active -->
                <div class="flex items-center">
                    <div
                        class="relative flex items-center justify-center w-6 h-6 sm:w-8 sm:h-8 rounded-full bg-red-600 text-white">
                        1
                    </div>
                    <p class="ml-2 text-gray-800 text-xs sm:text-sm font-medium">Pesan</p>
                </div>
                <div class="w-8 sm:w-16 h-px bg-gray-400"></div>
                <!-- Step 2 -->
                <div class="flex items-center">
                    <div id="step-2"
                        class="flex items-center step-package justify-center w-6 h-6 sm:w-8 sm:h-8 rounded-full bg-gray-500 text-white">
                        2
                    </div>
                    <p class="ml-2 text-gray-800 text-xs sm:text-sm font-medium">Bayar</p>
                </div>
                <div class="w-8 sm:w-16 h-px bg-gray-400"></div>
                <!-- Step 3 -->
                <div class="flex items-center">
                    <div
                        class="flex items-center justify-center w-6 h-6 sm:w-8 sm:h-8 rounded-full bg-gray-500 text-white">
                        3
                    </div>
                    <p class="ml-2 text-gray-800 text-xs sm:text-sm font-medium">Bukti Pembayaran</p>
                </div>
            </div>
        </nav>
        <!-- Body Section -->
        <div class="pt-28 sm:pt-32">
            @yield('content')
        </div>
    </div>
</body>

</html>
