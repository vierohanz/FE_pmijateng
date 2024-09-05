<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
</head>

<body>
    <div>
        <nav class="w-full h-24 bg-white fixed grid grid-cols-2 px-32 shadow-lg z-50">
            <div class="row-span-1 w-full h-full flex space-x-2 items-center justify-start">
                <div class="flex-col justify-end items-end text-end">
                    <p class="font-poppins font-bold text-custom-primary text-xl">PUSDIKLAT</p>
                    <p class="font-poppins font-normal text-custom-secondary text-sm">Provinsi Jawa Tengah</p>
                </div>
                <div class="h-3/4 w-2 bg-custom-primary"></div>
                <div class="flex">
                    <div class="bg-logo_pmi bg-cover h-16 w-16"></div>
                    <div class="ml-3 font-poppins text-black font-bold text-sm">
                        <p>Palang</p>
                        <p>Merah</p>
                        <p>Indonesia</p>
                    </div>
                </div>
            </div>
            <div class="flex items-center justify-end space-x-4">
                <!-- Step 1: Active -->
                <div class="flex items-center">
                    <div
                        class="relative flex items-center justify-center w-8 h-8 rounded-full  bg-custom-primary text-white">
                        1
                    </div>
                    <p class="ml-2 font-medium text-gray-800">Pesan</p>
                </div>
                <div class="w-16 h-px bg-gray-400"></div>
                <!-- Step 2 -->
                <div class="flex items-center">
                    <div class="flex items-center justify-center w-8 h-8 rounded-full bg-gray-500 text-white">
                        2
                    </div>
                    <p class="ml-2 font-medium text-gray-800">Bayar</p>
                </div>
                <div class="w-16 h-px bg-gray-400"></div>
                <!-- Step 3 -->
                <div class="flex items-center">
                    <div class="flex items-center justify-center w-8 h-8 rounded-full bg-gray-500 text-white">
                        3
                    </div>
                    <p class="ml-2 font-medium text-gray-800">Bukti Pembayaran</p>
                </div>
            </div>
        </nav>

        {{-- body --}}
        <div>
            @yield('content')
        </div>
    </div>
</body>

</html>
