<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Profile</title>

    @vite('resources/css/app.css')
    @vite('resources/js/profile.js')
    <link rel="stylesheet" href="{{ asset('css/toastr.min.css') }}">
</head>

<body>
    <div class="grid grid-cols-1 md:grid-cols-10 h-auto md:h-screen w-full">
        <!-- Sidebar -->
        <div class="col-span-3  bg-[#DA251D] flex-col justify-start pb-10 items-center flex pt-10 md:pt-14 px-4">

            <div class="w-36 md:w-60 h-36 md:h-60 bg-black bg-cover border-2 border-white rounded-full cursor-pointer"
                id="profilePicture"></div>
            <input type="file" id="fileInput" class="hidden" accept="image/*">

            <div class="w-full mt-4 justify-center items-center flex flex-col">
                <p class="font-poppins text-xl md:text-2xl font-semibold text-white">{{ session('user')['name'] }}</p>
                <p class="font-poppins text-lg md:text-xl font-normal text-white">{{ session('user')['email'] }}</p>
            </div>

            <div class="h-1 w-full bg-white my-6 md:my-10"></div>
            <div class="w-full px-8 md:px-12 mb-4">
                <a href="{{ route('account') }}"
                    class="w-full bg-red-500 flex items-center px-5 hover:scale-105 duration-300 transition-all rounded-xl space-x-4 md:space-x-5 h-12 md:h-16">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="#fff" class="ionicon w-8 md:w-12 h-8 md:h-12"
                        viewBox="0 0 512 512">
                        <path stroke="#fff"
                            d="M258.9 48C141.92 46.42 46.42 141.92 48 258.9c1.56 112.19 92.91 203.54 205.1 205.1 117 1.6 212.48-93.9 210.88-210.88C462.44 140.91 371.09 49.56 258.9 48zm126.42 327.25a4 4 0 01-6.14-.32 124.27 124.27 0 00-32.35-29.59C321.37 329 289.11 320 256 320s-65.37 9-90.83 25.34a124.24 124.24 0 00-32.35 29.58 4 4 0 01-6.14.32A175.32 175.32 0 0180 259c-1.63-97.31 78.22-178.76 175.57-179S432 158.81 432 256a175.32 175.32 0 01-46.68 119.25z" />
                        <path fill="#fff"
                            d="M256 144c-19.72 0-37.55 7.39-50.22 20.82s-19 32-17.57 51.93C191.11 256 221.52 288 256 288s64.83-32 67.79-71.24c1.48-19.74-4.8-38.14-17.68-51.82C293.39 151.44 275.59 144 256 144z" />
                    </svg>
                    <p class="font-poppins text-base md:text-xl font-medium text-white">Account</p>
                </a>
            </div>

            <div class="w-full px-8 md:px-12 mb-4">
                <a href="{{ route('historyTransaction') }}"
                    class="w-full bg-red-500 flex items-center px-5 hover:scale-105 duration-300 transition-all rounded-xl space-x-4 md:space-x-5 h-12 md:h-16">
                    <svg xmlns="http://www.w3.org/2000/svg" class="ionicon w-8 md:w-12 h-8 md:h-12"
                        viewBox="0 0 512 512">
                        <rect x="32" y="80" width="448" height="256" rx="16" ry="16"
                            transform="rotate(180 256 208)" fill="none" stroke="#fff" stroke-linejoin="round"
                            stroke-width="32" />
                        <path fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="32" d="M64 384h384M96 432h320" />
                        <circle cx="256" cy="208" r="80" fill="none" stroke="#fff"
                            stroke-linecap="round" stroke-linejoin="round" stroke-width="32" />
                        <path
                            d="M480 160a80 80 0 01-80-80M32 160a80 80 0 0080-80M480 256a80 80 0 00-80 80M32 256a80 80 0 0180 80"
                            fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="32" />
                    </svg>
                    <p class="font-poppins text-base md:text-xl font-medium text-white">Transaction</p>
                </a>
            </div>
            <div class="w-full px-8 md:px-12 mb-4">
                <a href="{{ route('account') }}"
                    class="w-full bg-red-500 flex items-center px-5 hover:scale-105 duration-300 transition-all rounded-xl space-x-4 md:space-x-5 h-12 md:h-16">
                    <svg xmlns="http://www.w3.org/2000/svg" class="ionicon w-8 md:w-12 h-8 md:h-12"
                        viewBox="0 0 512 512">
                        <path d="M256 80a176 176 0 10176 176A176 176 0 00256 80z" fill="none" stroke="#fff"
                            stroke-miterlimit="10" stroke-width="32" />
                        <path
                            d="M200 202.29s.84-17.5 19.57-32.57C230.68 160.77 244 158.18 256 158c10.93-.14 20.69 1.67 26.53 4.45 10 4.76 29.47 16.38 29.47 41.09 0 26-17 37.81-36.37 50.8S251 281.43 251 296"
                            fill="none" stroke="#fff" stroke-linecap="round" stroke-miterlimit="10"
                            stroke-width="28" />
                        <circle cx="250" cy="348" r="20" stroke="#fff" fill="#fff" />
                    </svg>
                    <p class="font-poppins text-base md:text-xl font-medium text-white">Information</p>
                </a>
            </div>
            <div class="w-full px-8 md:px-12 mt-7">
                <form method="POST" action="{{ route('signOut') }}">
                @csrf
                    <button type="submit"
                        class="w-full bg-red-800 flex px-5 items-center hover:scale-105 duration-300 transition-all rounded-xl space-x-4 md:space-x-5 h-12 md:h-16">
                        <svg xmlns="http://www.w3.org/2000/svg" class="ionicon w-8 md:w-12 h-8 md:h-12"
                            viewBox="0 0 512 512">
                            <path
                                d="M304 336v40a40 40 0 01-40 40H104a40 40 0 01-40-40V136a40 40 0 0140-40h152c22.09 0 48 17.91 48 40v40M368 336l80-80-80-80M176 256h256"
                                fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="32" />
                        </svg>
                        <p class="font-poppins text-base md:text-xl font-medium text-white">Log out</p>
                    </button>
                </form>
            </div>
        </div>

        <div class="col-span-7 p-4 md:p-5 bg-white w-full">
            @yield('content')
        </div>
    </div>
</body>

</html>
