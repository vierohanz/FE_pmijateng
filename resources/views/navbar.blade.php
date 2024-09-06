<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    @vite('resources/js/navbar.js')
</head>

<body class="bg-white overflow-x-hidden">
    <div>
        <!-- NAVBAR -->
        <div class="flex items-center justify-center h-36 z-50">
            <header class="w-12/13 fixed z-50">
                <nav
                    class="w-full h-24 drop-shadow-lg flex items-center bg-[#F9F9F9] justify-between px-9 rounded-full ">
                    <!-- Logo -->
                    <div class="text-black flex items-center text-lg font-semibold p-2 rounded">
                        <div class="bg-logo_pmi bg-cover h-16 w-16 "> </div>
                        <div class="ml-3 font-poppins font-bold text-sm">
                            <p>Palang</p>
                            <p>Merah</p>
                            <p>Indonesia</p>
                        </div>
                    </div>

                    <!-- Navigation Links -->
                    <div class="xl:flex hidden space-x-12 justify-center items-center ">
                        <a href="#home"
                            class="relative inline-block font-poppins text-black font-semibold text-lg transition-all duration-300 ease-in-out hover:scale-105 hover:text-red-500 group">
                            Home
                            <span
                                class="absolute left-0 bottom-0 h-0.5 bg-red-500 transition-all duration-300 ease-in-out w-0 group-hover:w-full"></span>
                        </a>

                        <a href="#rooms"
                            class="relative inline-block font-poppins text-black font-semibold text-lg transition-all duration-300 ease-in-out hover:scale-105 hover:text-red-500 group">
                            Rooms
                            <span
                                class="absolute left-0 bottom-0 h-0.5 bg-red-500 transition-all duration-300 ease-in-out w-0 group-hover:w-full"></span>
                        </a>
                        <a href="#meetingRooms"
                            class="relative inline-block font-poppins text-black font-semibold text-lg transition-all duration-300 ease-in-out hover:scale-105 hover:text-red-500 group">
                            Meeting rooms
                            <span
                                class="absolute left-0 bottom-0 h-0.5 bg-red-500 transition-all duration-300 ease-in-out w-0 group-hover:w-full"></span>
                        </a>
                        <a href="#services"
                            class="relative inline-block font-poppins text-black font-semibold text-lg transition-all duration-300 ease-in-out hover:scale-105 hover:text-red-500 group">
                            Services
                            <span
                                class="absolute left-0 bottom-0 h-0.5 bg-red-500 transition-all duration-300 ease-in-out w-0 group-hover:w-full"></span>
                        </a>
                        <a href="#about_us"
                            class="relative inline-block font-poppins text-black font-semibold text-lg transition-all duration-300 ease-in-out hover:scale-105 hover:text-red-500 group">
                            About
                            <span
                                class="absolute left-0 bottom-0 h-0.5 bg-red-500 transition-all duration-300 ease-in-out w-0 group-hover:w-full"></span>
                        </a>
                        <a href="#contact"
                            class="relative inline-block font-poppins text-black font-semibold text-lg transition-all duration-300 ease-in-out hover:scale-105 hover:text-red-500 group">
                            Contact
                            <span
                                class="absolute left-0 bottom-0 h-0.5 bg-red-500 transition-all duration-300 ease-in-out w-0 group-hover:w-full"></span>
                        </a>
                        <div
                            class=" bg-red-500 cursor-pointer animate-bounce p-4 rounded-full hover:bg-red-700 duration-300 transition-all">
                            <a href="#"
                                class="relative inline-block font-poppins text-sm text-white font-semibold text-lg transition-all duration-300 ease-in-out ">
                                Book your room
                            </a>
                        </div>
                    </div>


                    <div>
                        <div>
                            @if (session()->has('access_token'))
                                <a href="{{ route('signIn') }}"
                                    class="xl:flex hidden  hover:no-underline rounded-xl bg-[#F9F9F9] border-2 hover:bg-custom-primary hover:text-[#F9F9F9] hover:scale-110 transition-all duration-300 text-custom-primary border-custom-primary py-2 px-9 font-poppins text-lg xl:text-xl font-bold  flex space-x-2 gap-2 justify-center items-center">
                                    Login
                                </a>
                            @else
                                <a href="{{ route('account') }}"
                                    class=" hover:no-underline hover:text-custom-primary hover:fill-custom-primary flex space-x-2 gap-2 justify-center items-center">
                                    <input id="fileInput" accept="image/*" style="display: none;">
                                    <div id="profilePicture" id="fileInput" accept="image/*"
                                        class="bg-profile  hidden xl:flex bg-cover w-12 h-12 rounded-full bg-no-repeat">
                                    </div>
                                    <div>
                                        <p
                                            class="font-poppins text-black font-semibold xs:text-base hidden xl:flex flex-col">
                                            Hello</p>
                                        <p
                                            class="font-poppins text-custom-primary font-bold xs:text-base hidden xl:flex flex-col">
                                            Hannan</p>
                                    </div>
                                </a>
                            @endif
                        </div>
                        <button id="toggle-button" class="ml-4 block xl:hidden">
                            <svg xmlns="http://www.w3.org/2000/svg" class="ionicon" width="25px" height="25px"
                                viewBox="0 0 512 512">
                                <path fill="#000" stroke="#000" stroke-linecap="round" stroke-miterlimit="10"
                                    stroke-width="48" d="M88 152h336M88 256h336M88 360h336" />
                            </svg>
                        </button>
                    </div>
                </nav>

                <!-- Toggle mobile humberger -->
                <div id="sidebar"
                    class="z-50 transform -translate-x-full transition-transform duration-300 ease-in-out fixed top-0 left-0 h-full w-64 bg-white text-white sidebar lg:hidden">
                    <div class="h-56 bg-bg_toggler p-5">
                        <div class="h-24 bg-profile border-2 bg-cover bottom-0 p-8 rounded-full w-24"></div>
                        <p class="font-poppins font-semibold text-2xl mt-3">Bio One</p>
                        <p class="font-poppins font-normal text-lg">Welcome back</p>
                    </div>
                    <ul class="font-poppins font-semibold text-custom-fourth px-2 py-1">
                        <a href="#home"
                            class="group hover:bg-custom-primary active:text-white text-black hover:text-white transition-colors duration-300 rounded-lg">
                            <li x-data x-on:click.prevent="$el.scrollIntoView({ behavior: 'smooth', block: 'start' })"
                                class="p-4 flex items-center gap-3 mt-1 group-hover:bg-custom-primary group-hover:text-white active:text-white text-black transition-colors duration-300 rounded-lg">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18px" height="18px"
                                    class="ionicon transition-colors duration-300 group-hover:fill-white group-active:fill-white"
                                    viewBox="0 0 512 512">
                                    <path
                                        d="M261.56 101.28a8 8 0 00-11.06 0L66.4 277.15a8 8 0 00-2.47 5.79L63.9 448a32 32 0 0032 32H192a16 16 0 0016-16V328a8 8 0 018-8h80a8 8 0 018 8v136a16 16 0 0016 16h96.06a32 32 0 0032-32V282.94a8 8 0 00-2.47-5.79z" />
                                    <path
                                        d="M490.91 244.15l-74.8-71.56V64a16 16 0 00-16-16h-48a16 16 0 00-16 16v32l-57.92-55.38C272.77 35.14 264.71 32 256 32c-8.68 0-16.72 3.14-22.14 8.63l-212.7 203.5c-6.22 6-7 15.87-1.34 22.37A16 16 0 0043 267.56L250.5 69.28a8 8 0 0111.06 0l207.52 198.28a16 16 0 0022.59-.44c6.14-6.36 5.63-16.86-.76-22.97z" />
                                </svg>
                                <span>Home</span>
                            </li>
                        </a>
                        <a href="#rooms"
                            class="group hover:bg-custom-primary active:text-white text-black hover:text-white transition-colors duration-300 rounded-lg">
                            <li x-data x-on:click.prevent="$el.scrollIntoView({ behavior: 'smooth', block: 'start' })"
                                class="p-4 flex items-center gap-3 mt-1 hover:bg-custom-primary hover:text-white active:text-white text-black hover:fill-white transition-colors duration-300 rounded-lg">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18px" height="18px"
                                    class="ionicon transition-colors duration-300 group-hover:fill-white group-active:fill-white"
                                    viewBox="0 0 512 512">
                                    <path
                                        d="M320 32H192a32 32 0 00-32 32v412a4 4 0 004 4h184a4 4 0 004-4V64a32 32 0 00-32-32zM464 192h-72a8 8 0 00-8 8v272a8 8 0 008 8h80a24 24 0 0024-24V224a32 32 0 00-32-32zM48 128a32 32 0 00-32 32v296a24 24 0 0024 24h80a8 8 0 008-8V136a8 8 0 00-8-8z" />
                                </svg>
                                <span>Rooms</span>
                            </li>
                        </a>
                        <a href="#meetingRooms"
                            class="group hover:bg-custom-primary active:text-white text-black hover:text-white transition-colors duration-300 rounded-lg">
                            <li x-data x-on:click.prevent="$el.scrollIntoView({ behavior: 'smooth', block: 'start' })"
                                class="p-4 flex items-center gap-3 mt-1 hover:bg-custom-primary hover:text-white active:text-white text-black hover:fill-white transition-colors duration-300 rounded-lg">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18px" height="18px"
                                    class="ionicon transition-colors duration-300 group-hover:fill-white group-active:fill-white"
                                    viewBox="0 0 512 512">
                                    <path
                                        d="M258.9 48C141.92 46.42 46.42 141.92 48 258.9c1.56 112.19 92.91 203.54 205.1 205.1 117 1.6 212.48-93.9 210.88-210.88C462.44 140.91 371.09 49.56 258.9 48zm-3.68 152.11c.21-1.2.44-2.4.71-3.59a66.46 66.46 0 0116.29-31.21c12.89-13.73 31.16-21.31 51.45-21.31a74.05 74.05 0 0125.06 4.26 66.69 66.69 0 0126.27 17.2 68.15 68.15 0 0118 42.14 78.46 78.46 0 010 11.4 86.19 86.19 0 01-8.2 31q-.76 1.59-1.59 3.15c-1.11 2.07-2.3 4.1-3.58 6.06a79.47 79.47 0 01-8.63 11c-13.12 14-29.92 21.73-47.31 21.73a59.61 59.61 0 01-19.17-3.18 63.47 63.47 0 01-6.1-2.43 70.76 70.76 0 01-22.07-16.12 83.76 83.76 0 01-22-51.32q-.27-3.88-.18-7.68a75.62 75.62 0 011.05-11.08zm-149.73 24.34a59.87 59.87 0 015.2-20.64 56.76 56.76 0 012.78-5.3 54.49 54.49 0 017.19-9.56 55.62 55.62 0 0114-10.82 56.84 56.84 0 018.11-3.64 63.85 63.85 0 0133.35-2.39 57 57 0 0130.78 17 57.86 57.86 0 0115.41 38.62c.05 2.11 0 4.23-.15 6.38a71.58 71.58 0 01-6 23.84 69.49 69.49 0 01-5.73 10.42 65.39 65.39 0 01-15.76 16.57c-1.5 1.07-3.06 2.07-4.67 3.07a54.21 54.21 0 01-10 4.65 49.31 49.31 0 01-16.2 2.76c-.93 0-1.86 0-2.78-.08a47.6 47.6 0 01-5.48-.62 51.19 51.19 0 01-5.35-1.23 53.54 53.54 0 01-7.72-2.89c-.84-.39-1.66-.8-2.48-1.23-18-9.49-31.57-29.16-34.23-52.12-.12-1.05-.22-2.1-.29-3.16a66.59 66.59 0 01.02-9.63zm53.92 178.6a177.27 177.27 0 01-61.94-70.65 4 4 0 011.62-5.26C117.67 316.69 141.4 311 163.82 311c17 0 30.7 2 42.69 5.88a8 8 0 012.59 13.77c-23.35 19-38.4 42.54-45.47 70.75a2.77 2.77 0 01-4.22 1.65zM256 432a175.12 175.12 0 01-65.7-12.72 4 4 0 01-2.4-4.46c.4-2.05.84-3.92 1.23-5.48 7.12-28.43 24.76-52 51-68.18 23.29-14.35 53-22.25 83.52-22.25 31.16 0 60 7.58 83.48 21.91a2.72 2.72 0 01.91 3.67A176.1 176.1 0 01256 432z" />
                                    <path
                                        d="M161 295.28a47.6 47.6 0 01-5.48-.62 47.6 47.6 0 005.48.62zM134.64 178.13a55.62 55.62 0 00-14 10.82 54.49 54.49 0 00-7.19 9.56 54.49 54.49 0 017.19-9.56 55.62 55.62 0 0114-10.82zM216.17 257.89a71.58 71.58 0 006-23.84c.15-2.15.2-4.27.15-6.38q.08 3.15-.15 6.38a71.58 71.58 0 01-6 23.84zM134.64 178.13a56.84 56.84 0 018.11-3.64 56.84 56.84 0 00-8.11 3.64zM150.21 293.43a53.54 53.54 0 01-7.72-2.89 53.54 53.54 0 007.72 2.89zM105.78 237.19c2.66 23 16.26 42.63 34.23 52.12-18.01-9.49-31.57-29.16-34.23-52.12zM254.34 219a83.76 83.76 0 0022 51.32 70.76 70.76 0 0022.07 16.12 70.76 70.76 0 01-22.07-16.12 83.76 83.76 0 01-22-51.32q-.27-3.88-.18-7.68-.09 3.75.18 7.68zM304.5 288.82a63.47 63.47 0 01-6.1-2.43 63.47 63.47 0 006.1 2.43zM255.93 196.54a66.46 66.46 0 0116.29-31.21 66.46 66.46 0 00-16.29 31.21zM375 165.46a68.15 68.15 0 0118 42.14 68.15 68.15 0 00-18-42.14 66.69 66.69 0 00-26.27-17.2 66.69 66.69 0 0126.27 17.2zM393 219a86.19 86.19 0 01-8.2 31 86.19 86.19 0 008.2-31zM254.16 211.27a75.62 75.62 0 011.06-11.14 75.62 75.62 0 00-1.06 11.14zM383.19 253.16zM206.88 189.05a57.86 57.86 0 0115.41 38.62 57.86 57.86 0 00-15.41-38.62 57 57 0 00-30.78-17 57 57 0 0130.78 17zM190 288a54.21 54.21 0 01-10 4.65 54.21 54.21 0 0010-4.65zM105.49 224.45a59.87 59.87 0 015.2-20.64 59.87 59.87 0 00-5.2 20.64zM194.68 284.88C193.17 286 191.61 287 190 288c1.61-1 3.17-2 4.68-3.12zM216.17 257.89a69.49 69.49 0 01-5.73 10.42 69.49 69.49 0 005.73-10.42zM110.69 203.81a56.76 56.76 0 012.78-5.3 56.76 56.76 0 00-2.78 5.3zM194.68 284.88a65.39 65.39 0 0015.76-16.57 65.39 65.39 0 01-15.76 16.57z" />
                                </svg>
                                <span>Meeting Rooms</span>
                            </li>
                        </a>

                        <a href="#services"
                            class="group hover:bg-custom-primary active:text-white text-black hover:text-white transition-colors duration-300 rounded-lg">
                            <li
                                class="flex items-center gap-3 p-4 mt-1 hover:bg-custom-primary active:text-white text-black hover:text-white hover:fill-white transition-colors duration-300 rounded-lg">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18px" height="18px"
                                    class="ionicon transition-colors duration-300 group-hover:fill-white group-active:fill-white"
                                    viewBox="0 0 512 512">
                                    <path
                                        d="M96 32a16 16 0 00-16 16v416a16 16 0 0016 16h320a16 16 0 0016-16V48a16 16 0 00-16-16zm32 32h256v48H128zm256 352H128V128h256z" />
                                </svg>
                                <span>Services</span>
                            </li>
                        </a>

                        <a href="#about_us"
                            class="group hover:bg-custom-primary active:text-white text-black hover:text-white transition-colors duration-300 rounded-lg">
                            <li
                                class="flex items-center gap-3 p-4 mt-1 hover:bg-custom-primary active:text-white text-black hover:text-white hover:fill-white transition-colors duration-300 rounded-lg">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18px" height="18px"
                                    class="ionicon transition-colors duration-300 group-hover:fill-white group-active:fill-white"
                                    viewBox="0 0 512 512">
                                    <path
                                        d="M208 512a24.84 24.84 0 01-23.34-16l-39.84-103.6a16.06 16.06 0 00-9.19-9.19L32 343.34a25 25 0 010-46.68l103.6-39.84a16.06 16.06 0 009.19-9.19L184.66 144a25 25 0 0146.68 0l39.84 103.6a16.06 16.06 0 009.19 9.19l103 39.63a25.49 25.49 0 0116.63 24.1 24.82 24.82 0 01-16 22.82l-103.6 39.84a16.06 16.06 0 00-9.19 9.19L231.34 496A24.84 24.84 0 01208 512zm66.85-254.84zM88 176a14.67 14.67 0 01-13.69-9.4l-16.86-43.84a7.28 7.28 0 00-4.21-4.21L9.4 101.69a14.67 14.67 0 010-27.38l43.84-16.86a7.31 7.31 0 004.21-4.21L74.16 9.79A15 15 0 0186.23.11a14.67 14.67 0 0115.46 9.29l16.86 43.84a7.31 7.31 0 004.21 4.21l43.84 16.86a14.67 14.67 0 010 27.38l-43.84 16.86a7.28 7.28 0 00-4.21 4.21l-16.86 43.84A14.67 14.67 0 0188 176zM400 256a16 16 0 01-14.93-10.26l-22.84-59.37a8 8 0 00-4.6-4.6l-59.37-22.84a16 16 0 010-29.86l59.37-22.84a8 8 0 004.6-4.6l22.67-58.95a16.45 16.45 0 0113.17-10.57 16 16 0 0116.86 10.15l22.84 59.37a8 8 0 004.6 4.6l59.37 22.84a16 16 0 010 29.86l-59.37 22.84a8 8 0 00-4.6 4.6l-22.84 59.37A16 16 0 01400 256z" />
                                </svg>
                                <span>About</span>
                            </li>
                        </a>

                        <a href="#contact"
                            class="group hover:bg-custom-primary active:text-white text-black hover:text-white transition-colors duration-300 rounded-lg">
                            <li
                                class="flex items-center gap-3 p-4 mt-1 hover:bg-custom-primary active:text-white text-black hover:text-white hover:fill-white transition-colors duration-300 rounded-lg">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18px" height="18px"
                                    class="ionicon transition-colors duration-300 group-hover:fill-white group-active:fill-white"
                                    viewBox="0 0 512 512">
                                    <path
                                        d="M255.88 48.11C141.25 48 48 139.83 48 254.33c0 58.12 22.18 106.65 59.5 144.82q6.31 6.37 13.09 12.17a191.89 191.89 0 00118.16 48.46c2.53.15 5.06.22 7.59.22s5.07-.07 7.59-.22A191.89 191.89 0 00391.4 411.33q6.78-5.8 13.09-12.17C441.82 361 464 312.45 464 254.33 464 139.83 370.51 48.11 255.88 48.11zM212 352.33l-89-94 26.57-25.17L211.5 298.8 361.43 149.33 388 176z" />
                                </svg>
                                <span>Contact</span>
                            </li>
                        </a>

                        <a href="{{ route('profile') }}"
                            class="group hover:bg-custom-primary active:text-white text-black hover:text-white transition-colors duration-300 rounded-lg">
                            <li
                                class="flex items-center gap-3 p-4 mt-1 hover:bg-custom-primary active:text-white text-black hover:text-white hover:fill-white transition-colors duration-300 rounded-lg">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18px" height="18px"
                                    class="ionicon transition-colors duration-300 group-hover:fill-white group-active:fill-white"
                                    viewBox="0 0 512 512">
                                    <path
                                        d="M332.64 64.58C313.18 43.57 286 32 256 32c-30.16 0-57.43 11.5-76.8 32.38-19.58 21.11-29.12 49.8-26.88 80.78C156.76 206.28 203.27 256 256 256s99.16-49.71 103.67-110.82c2.27-30.7-7.33-59.33-27.03-80.6zM432 480H80a31 31 0 01-24.2-11.13c-6.5-7.77-9.12-18.38-7.18-29.11C57.06 392.94 83.4 353.61 124.8 326c36.78-24.51 83.37-38 131.2-38s94.42 13.5 131.2 38c41.4 27.6 67.74 66.93 76.18 113.75 1.94 10.73-.68 21.34-7.18 29.11A31 31 0 01432 480z" />
                                </svg>
                                <span>Profile</span>
                            </li>
                        </a>
                        <a href="{{ route('signIn') }}"
                            class="group hover:bg-custom-primary active:text-white text-black hover:text-white transition-colors duration-300 rounded-lg">
                            <li
                                class="flex items-center gap-3 p-4 mt-1 hover:bg-custom-primary active:text-white text-black hover:text-white hover:fill-white transition-colors duration-300 rounded-lg">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18px" height="18px"
                                    class="ionicon transition-colors duration-300 group-hover:fill-white group-active:fill-white"
                                    viewBox="0 0 512 512">
                                    <path
                                        d="M392 80H232a56.06 56.06 0 00-56 56v104h153.37l-52.68-52.69a16 16 0 0122.62-22.62l80 80a16 16 0 010 22.62l-80 80a16 16 0 01-22.62-22.62L329.37 272H176v104c0 32.05 33.79 56 64 56h152a56.06 56.06 0 0056-56V136a56.06 56.06 0 00-56-56zM80 240a16 16 0 000 32h96v-32z" />
                                </svg>
                                <span>Sign In</span>
                            </li>
                        </a>
                    </ul>
                </div>
            </header>
        </div>
    </div>
    @yield('content')
    </div>
    </div>
</body>
