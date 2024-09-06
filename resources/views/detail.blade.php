<!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Detail</title>
        @vite('resources/js/detail.js')
        @vite('resources/css/app.css')
    </head>

    <body class="overflow-x-hidden">
        {{-- corousel --}}
        <div class="w-full bg-white">
            <div id="default-carousel" class="relative h-104 xl:h-114 w-full" data-carousel="slide">
                <div class="relative h-full w-full overflow-hidden rounded-b-badge shadow-lg">
                    <!-- Carousel Items -->
                    @foreach ($room['room_images'] as $index => $image )
                        <div class="{{ $loop->first ? 'block' : 'hidden' }} duration-700 ease-in-out" data-carousel-item>
                            <img src="{{ $image }}" alt="Image Meeting Room" class="absolute block w-full h-full object-cover">
                        </div>
                    @endforeach

                    <!-- Carousel Indicators -->
                    <div class="absolute z-30 flex -translate-x-1/2 bottom-12 left-1/2 space-x-3 rtl:space-x-reverse">
                        @foreach ($room['room_images'] as $index => $image)
                            <button type="button" class="w-3 h-3 rounded-full" aria-current="{{ $loop->first ? 'true' : 'false' }}" aria-label="Slide {{ $index + 1 }}" data-carousel-slide-to="{{ $index }}">
                            </button>
                        @endforeach
                    </div>
                </div>
                <!-- Slider controls -->
                <button type="button"
                    class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-14 cursor-pointer group focus:outline-none"
                    data-carousel-prev>
                    <span
                        class="inline-flex items-center justify-center w-16 h-16 rounded-full bg-white/30  group-hover:bg-white/50  group-focus:ring-4 group-focus:ring-white  group-focus:outline-none">
                        <svg class="w-4 h-4 text-white  rtl:rotate-180" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M5 1 1 5l4 4" />
                        </svg>
                        <span class="sr-only">Previous</span>
                    </span>
                </button>
                <button type="button"
                    class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-14 cursor-pointer group focus:outline-none"
                    data-carousel-next>
                    <span
                        class="inline-flex items-center justify-center w-16 h-16 rounded-full bg-white/30  group-hover:bg-white/50  group-focus:ring-4 group-focus:ring-white  group-focus:outline-none">
                        <svg class="w-4 h-4 text-white  rtl:rotate-180" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 9 4-4-4-4" />
                        </svg>
                        <span class="sr-only">Next</span>
                    </span>
                </button>
            </div>

            {{-- Corousel horizontal --}}
            <div class="h-80 xl:h-100 pl-6 w-full bg-white mt-8">
    <div id="bounceMeeting" class="carousel carousel-center bg-white rounded-box w-full space-x-7">
        @foreach ($room['room_images'] as $index => $image)
            <div class="carousel-item w-108 h-64 xl:h-96">
                <img src="{{ $image }}" alt="Image Meeting Room {{ $index + 1 }}" class="rounded-box w-112 h-full bg-cover bg-center">
            </div>
        @endforeach
    </div>
</div>


            {{-- title and price --}}
            <div class="h-44 px-6 xl:px-12 w-full  grid grid-cols-2">
                <div class="col-span-1 gap-2 flex-col flex items-start justify-start">
                    <p class="font-josefinSans font-bold text-xl xl:text-5xl text-black">{{ $room['room_data']['room_type'] }}</p>
                    <div class="flex">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="#DA251D" viewBox="0 0 24 24"
                            class="w-3 h-3 xl:w-6 xl:h-6 ml-2">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="#DA251D" viewBox="0 0 24 24"
                            class="w-3 h-3 xl:w-6 xl:h-6 ml-2">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="#DA251D" viewBox="0 0 24 24"
                            class="w-3 h-3 xl:w-6 xl:h-6 ml-2">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="#DA251D" viewBox="0 0 24 24"
                            class="w-3 h-3 xl:w-6 xl:h-6 ml-2">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="#DA251D" viewBox="0 0 24 24"
                            class="w-3 h-3 xl:w-6 xl:h-6 ml-2">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                        </svg>
                    </div>

                </div>
                <div class="col-span-1 flex-col flex justify-start items-end gap-4">
                    <p class="font-poppins font-medium text-black text-sm xl:text-xl">Harga/kamar/malam mulai dari</p>
                    <div
                        class="w-40 xl:w-72 h-10 xl:h-20 rounded-full border-2 items-center justify-center flex border-custom-primary ">
                        <svg xmlns="http://www.w3.org/2000/svg" class="ionicon" height="32px" width="32px"
                            viewBox="0 0 512 512">
                            <rect x="32" y="80" width="448" height="256" rx="16" ry="16"
                                transform="rotate(180 256 208)" fill="none" stroke="#DA251D"
                                stroke-linejoin="round" stroke-width="32" />
                            <path fill="none" stroke="#DA251D" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="32" d="M64 384h384M96 432h320" />
                            <circle cx="256" cy="208" r="80" fill="none" stroke="#DA251D"
                                stroke-linecap="round" stroke-linejoin="round" stroke-width="32" />
                            <path
                                d="M480 160a80 80 0 01-80-80M32 160a80 80 0 0080-80M480 256a80 80 0 00-80 80M32 256a80 80 0 0180 80"
                                fill="none" stroke="#DA251D" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="32" />
                        </svg>
                        <p class="ml-2 font-poppins text-custom-primary text-base xl:text-2xl font-semibold">Rp {{(int)  $room['room_data']['price'] }}
                        </p>
                    </div>
                </div>
            </div>

            {{-- description --}}
            <div class="w-full px-6 xl:px-12">
                <p class="font-poppins text-black text-xl leading-10 text-justify  font-medium">The room is
                {{ $room['room_data']['description'] }}
                </p>

            </div>

            {{-- facilities --}}
            <div class="mt-20 w-full px-6 xl:px-12 flex-col flex ">
                <div class="flex justify-start items-start">
                    <p class="font-josefinSans text-custom-primary font-bold text-2xl xl:text-4xl">Facility</p>
                </div>
                <div class="grid grid-cols-3 mt-12">
                    <div class="col-span-1 flex gap-3 flex-col items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="#C13333"
                            class="ionicon w-16 h-16 xl:w-28 xl:h-28" viewBox="0 0 512 512">
                            <path
                                d="M336 256c-20.56 0-40.44-9.18-56-25.84-15.13-16.25-24.37-37.92-26-61-1.74-24.62 5.77-47.26 21.14-63.76S312 80 336 80c23.83 0 45.38 9.06 60.7 25.52 15.47 16.62 23 39.22 21.26 63.63-1.67 23.11-10.9 44.77-26 61C376.44 246.82 356.57 256 336 256zm66-88zM467.83 432H204.18a27.71 27.71 0 01-22-10.67 30.22 30.22 0 01-5.26-25.79c8.42-33.81 29.28-61.85 60.32-81.08C264.79 297.4 299.86 288 336 288c36.85 0 71 9 98.71 26.05 31.11 19.13 52 47.33 60.38 81.55a30.27 30.27 0 01-5.32 25.78A27.68 27.68 0 01467.83 432zM147 260c-35.19 0-66.13-32.72-69-72.93-1.42-20.6 5-39.65 18-53.62 12.86-13.83 31-21.45 51-21.45s38 7.66 50.93 21.57c13.1 14.08 19.5 33.09 18 53.52-2.87 40.2-33.8 72.91-68.93 72.91zM212.66 291.45c-17.59-8.6-40.42-12.9-65.65-12.9-29.46 0-58.07 7.68-80.57 21.62-25.51 15.83-42.67 38.88-49.6 66.71a27.39 27.39 0 004.79 23.36A25.32 25.32 0 0041.72 400h111a8 8 0 007.87-6.57c.11-.63.25-1.26.41-1.88 8.48-34.06 28.35-62.84 57.71-83.82a8 8 0 00-.63-13.39c-1.57-.92-3.37-1.89-5.42-2.89z" />
                        </svg>
                        <p class="font-poppins text-xl text-custom-secondary font-semibold">{{ $room['room_data']['capacity'] }} Guest </p>
                    </div>
                    <div class="col-span-1 gap-3 flex flex-col items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="ionicon w-16 h-16 xl:w-28 xl:h-28"
                            viewBox="0 0 512 512">
                            <path fill="none" stroke="#C13333" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="32"
                                d="M304 416V304h112M314.2 314.23L432 432M208 96v112H96M197.8 197.77L80 80M416 208H304V96M314.23 197.8L432 80M96 304h112v112M197.77 314.2L80 432" />
                        </svg>
                        <p class="font-poppins text-xl text-custom-secondary font-semibold">35 Square </p>
                    </div>
                    <div class="col-span-1 gap-3 flex flex-col items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="#C13333"
                            class="ionicon w-16 h-16 xl:w-28 xl:h-28" viewBox="0 0 512 512">
                            <path
                                d="M256 118a22 22 0 01-22-22V48a22 22 0 0144 0v48a22 22 0 01-22 22zM256 486a22 22 0 01-22-22v-48a22 22 0 0144 0v48a22 22 0 01-22 22zM369.14 164.86a22 22 0 01-15.56-37.55l33.94-33.94a22 22 0 0131.11 31.11l-33.94 33.94a21.93 21.93 0 01-15.55 6.44zM108.92 425.08a22 22 0 01-15.55-37.56l33.94-33.94a22 22 0 1131.11 31.11l-33.94 33.94a21.94 21.94 0 01-15.56 6.45zM464 278h-48a22 22 0 010-44h48a22 22 0 010 44zM96 278H48a22 22 0 010-44h48a22 22 0 010 44zM403.08 425.08a21.94 21.94 0 01-15.56-6.45l-33.94-33.94a22 22 0 0131.11-31.11l33.94 33.94a22 22 0 01-15.55 37.56zM142.86 164.86a21.89 21.89 0 01-15.55-6.44l-33.94-33.94a22 22 0 0131.11-31.11l33.94 33.94a22 22 0 01-15.56 37.55zM256 358a102 102 0 11102-102 102.12 102.12 0 01-102 102z" />
                        </svg>
                        <p class="font-poppins text-base xl:text-xl text-custom-secondary font-semibold">Sunrise Place
                        </p>
                    </div>
                </div>
                <div class="grid grid-cols-3 mt-28">
                    <div class="col-span-1 flex gap-3 flex-col items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="#C13333"
                            class="ionicon w-16 h-16 xl:w-28 xl:h-28" viewBox="0 0 512 512">
                            <path
                                d="M432 230.7a79.44 79.44 0 00-32-6.7H112a79.51 79.51 0 00-32 6.69A80.09 80.09 0 0032 304v112a16 16 0 0032 0v-8a8.1 8.1 0 018-8h368a8.1 8.1 0 018 8v8a16 16 0 0032 0V304a80.09 80.09 0 00-48-73.3zM376 80H136a56 56 0 00-56 56v72a4 4 0 005.11 3.84A95.5 95.5 0 01112 208h4.23a4 4 0 004-3.55A32 32 0 01152 176h56a32 32 0 0131.8 28.45 4 4 0 004 3.55h24.46a4 4 0 004-3.55A32 32 0 01304 176h56a32 32 0 0131.8 28.45 4 4 0 004 3.55h4.2a95.51 95.51 0 0126.89 3.85A4 4 0 00432 208v-72a56 56 0 00-56-56z" />
                        </svg>
                        <p class="font-poppins text-xl text-custom-secondary font-semibold">King Size</p>
                    </div>
                    <div class="col-span-1 gap-3 flex flex-col items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="#C13333"
                            class="ionicon w-16 h-16 xl:w-28 xl:h-28" viewBox="0 0 512 512">
                            <path
                                d="M346.65 304.3a136 136 0 00-180.71 0 21 21 0 1027.91 31.38 94 94 0 01124.89 0 21 21 0 0027.91-31.4z" />
                            <path
                                d="M256.28 183.7a221.47 221.47 0 00-151.8 59.92 21 21 0 1028.68 30.67 180.28 180.28 0 01246.24 0 21 21 0 1028.68-30.67 221.47 221.47 0 00-151.8-59.92z" />
                            <path
                                d="M462 175.86a309 309 0 00-411.44 0 21 21 0 1028 31.29 267 267 0 01355.43 0 21 21 0 0028-31.31z" />
                            <circle cx="256.28" cy="393.41" r="32" />
                        </svg>
                        <p class="font-poppins text-xl text-custom-secondary font-semibold">Free Wifi</p>
                    </div>
                    <div class="col-span-1 gap-3 flex flex-col items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="#C13333"
                            class="ionicon w-16 h-16 xl:w-28 xl:h-28" viewBox="0 0 512 512">
                            <path
                                d="M480 448h-12a4 4 0 01-4-4V273.51a4 4 0 00-5.24-3.86 104.92 104.92 0 01-28.32 4.78c-1.18 0-2.3.05-3.4.05a108.22 108.22 0 01-52.85-13.64 8.23 8.23 0 00-8 0 108.18 108.18 0 01-52.84 13.64 106.11 106.11 0 01-52.46-13.79 8.21 8.21 0 00-8.09 0 108.14 108.14 0 01-53.16 13.8 106.19 106.19 0 01-52.77-14 8.25 8.25 0 00-8.16 0 106.19 106.19 0 01-52.77 14c-1.09 0-2.19 0-3.37-.05h-.06a104.91 104.91 0 01-29.28-5.09 4 4 0 00-5.23 3.8V444a4 4 0 01-4 4H32.5c-8.64 0-16.1 6.64-16.48 15.28A16 16 0 0032 480h447.5c8.64 0 16.1-6.64 16.48-15.28A16 16 0 00480 448zm-256-68a4 4 0 01-4 4h-88a4 4 0 01-4-4v-64a12 12 0 0112-12h72a12 12 0 0112 12zm156 68h-72a4 4 0 01-4-4V316a12 12 0 0112-12h56a12 12 0 0112 12v128a4 4 0 01-4 4zM492.57 170.28l-42.92-98.49C438.41 47.62 412.74 32 384.25 32H127.7c-28.49 0-54.16 15.62-65.4 39.79l-42.92 98.49c-9 19.41 2.89 39.34 2.9 39.35l.28.45c.49.78 1.36 2 1.89 2.78.05.06.09.13.14.2l5 6.05a7.45 7.45 0 00.6.65l5 4.83.42.36a69.65 69.65 0 009.39 6.78v.05a74 74 0 0036 10.67h2.47a76.08 76.08 0 0051.89-20.31l.33-.31a7.94 7.94 0 0110.89 0l.33.31a77.3 77.3 0 00104.46 0 8 8 0 0110.87 0 77.31 77.31 0 00104.21.23 7.88 7.88 0 0110.71 0 76.81 76.81 0 0052.31 20.08h2.49a71.35 71.35 0 0035-10.7c.95-.57 1.86-1.17 2.78-1.77A71.33 71.33 0 00488 212.17l1.74-2.63q.26-.4.48-.84c1.66-3.38 10.56-20.76 2.35-38.42z" />
                        </svg>
                        <p class="font-poppins text-xl text-custom-secondary font-semibold">Cake Shop</p>
                    </div>
                </div>
            </div>

            {{-- Checkout --}}
            <div class="h-48 flex flex-col w-full mt-16 px-28">
                <div class="flex w-full bg-custom-primary h-2 "></div>
                <div class="w-full flex items-center justify-end ">
                    <a href="{{ route('topbar') }}"
                        class="h-16 items-center justify-center text-xl hover:scale-110 duration-300 transition-all font-poppins font-semibold text-white flex w-72 bg-custom-primary mt-5 rounded-2xl">Checkout</a>
                </div>
            </div>
        </div>
    </body>

    </html>
