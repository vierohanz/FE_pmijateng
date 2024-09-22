<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Profile</title>

    @vite('resources/css/app.css')
    @vite('resources/js/profile.js')
    @include('notify::components.notify')

    @notifyCss
</head>

<body>
    <x:notify::notify />
    <div class="grid  grid-cols-1 xl:grid-cols-10 h-auto md:h-screen w-full">
        <!-- Sidebar -->
        <div class="col-span-3  bg-[#E02424] flex-col justify-start pb-10 items-center flex pt-1 md:pt-8 px-5">
            <div class="w-full pb-9  pl-4 pt-5 xl:pt-0">
                <a href="{{ route('index') }}"
                    class=" font-poppins text-white text-lg hover:text-xl transition-all duration-300 font-semibold ">Back</a>
            </div>

            <div class="w-36 md:w-60 h-36 md:h-60 bg-black bg-cover bg-center border-2 border-white rounded-full cursor-pointer"
                id="profilePicture" id="profileDisplay">
            </div>
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
                    <p class="font-poppins text-base md:text-xl font-medium text-white">Akun</p>
                </a>
            </div>
            <div class="w-full px-8 md:px-12 mb-4">
                <a href="{{ route('changePassword') }}"
                    class="w-full bg-red-500 flex items-center  px-5 hover:scale-105 duration-300 transition-all rounded-xl space-x-4 md:space-x-5 h-12 md:h-16">
                    <svg xmlns="http://www.w3.org/2000/svg" class="ionicon w-8 md:w-12 h-8 md:h-12"
                        viewBox="0 0 512 512">
                        <path
                            d="M218.1 167.17c0 13 0 25.6 4.1 37.4-43.1 50.6-156.9 184.3-167.5 194.5a20.17 20.17 0 00-6.7 15c0 8.5 5.2 16.7 9.6 21.3 6.6 6.9 34.8 33 40 28 15.4-15 18.5-19 24.8-25.2 9.5-9.3-1-28.3 2.3-36s6.8-9.2 12.5-10.4 15.8 2.9 23.7 3c8.3.1 12.8-3.4 19-9.2 5-4.6 8.6-8.9 8.7-15.6.2-9-12.8-20.9-3.1-30.4s23.7 6.2 34 5 22.8-15.5 24.1-21.6-11.7-21.8-9.7-30.7c.7-3 6.8-10 11.4-11s25 6.9 29.6 5.9c5.6-1.2 12.1-7.1 17.4-10.4 15.5 6.7 29.6 9.4 47.7 9.4 68.5 0 124-53.4 124-119.2S408.5 48 340 48s-121.9 53.37-121.9 119.17zM400 144a32 32 0 11-32-32 32 32 0 0132 32z"
                            fill="none" stroke="#fff" stroke-linejoin="round" stroke-width="32" />
                    </svg>
                    <p class="font-poppins text-base md:text-xl font-medium text-white">Ubah Password</p>
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
                    <p class="font-poppins text-base md:text-xl font-medium text-white">Transaksi</p>
                </a>
            </div>
            <div class="w-full px-8 md:px-12 mt-7">
                <form method="POST" action="{{ route('signOut') }}">
                    @csrf
                    <button type="submit"
                        class="w-full bg-red-500 flex px-5 items-center hover:scale-105 duration-300 transition-all rounded-xl space-x-4 md:space-x-5 h-12 md:h-16">
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
    @notifyJs
</body>

</html>
