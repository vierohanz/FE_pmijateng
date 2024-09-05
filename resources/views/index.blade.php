@extends('navbar')
@section('content')
    @vite('resources/js/index.js')

    <!-- Content Home-->
    <div id="home" class="grid grid-cols-1 -mt-36 xl:grid-cols-2 gap-4 h-114 bg-landing_page bg-cover bg-no-repeat">
        <div class="flex mt-56 z-10 xl:mt-0 flex-col items-center justify-center ">
            <p data-aos="fade-right"
                class="font-josefinSans font-bold text-6xl sm:text-7xl lg:text-7xl 2xl:text-9xl text-white z-10">Find Your
            </p>
            <p data-aos="fade-up"
                class="font-josefinSans font-bold text-6xl sm:text-7xl lg:text-7xl 2xl:text-9xl mt-7 text-white">Ideal Rooms
            </p>
        </div>
        <div class=" bg-no-repeat flex space-x-9 md:space-x-14 grid-cols-2 justify-center items-center">
            <a href="#meetingRooms" data-aos="fade-up">
                <div
                    class="bg-red-500 ls:w-40 sm:w-48 lg:w-60 h-52 rounded-3xl p-2 hover:scale-110 transition-all duration-300">
                    <div class="bg-our_rooms bg-cover h-32 w-full rounded-3xl"></div>
                    <div class="flex justify-center items-center h-16 space-x-3">
                        <p class="font-poppins font-semibold text-lg text-white">Our Rooms</p>
                        <div class="w-8 h-8 bg-white rounded-lg flex justify-center items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="25px" height="25px" class="ionicon"
                                viewBox="0 0 512 512">
                                <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="48" d="M268 112l144 144-144 144M392 256H100" />
                            </svg>
                        </div>
                    </div>
                </div>
            </a>
            <a href="#packageRooms" data-aos="fade-down">
                <div
                    class="bg-red-500 ls:w-40 sm:w-48 lg:w-60 h-52 rounded-3xl p-2 hover:scale-110 transition-all duration-300">
                    <div class="bg-package bg-cover h-32 w-full rounded-3xl"></div>
                    <div class="flex justify-center items-center h-16 space-x-3">
                        <p class="font-poppins font-semibold text-lg text-white">Our Package</p>
                        <div class="w-8 h-8 bg-white rounded-lg flex justify-center items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="25px" height="25px" class="ionicon"
                                viewBox="0 0 512 512">
                                <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="48" d="M268 112l144 144-144 144M392 256H100" />
                            </svg>
                        </div>
                    </div>
                </div>
            </a>
        </div>
    </div>

    <!-- Book Now -->
    <div class="h-48 hidden lg:grid grid-cols-5 items-center justify-between mx-3  rounded-2xl bg-red-600 px-5 my-3">
        <div
            class="col-span-1  font-poppins font-bold text-white ls:text-xl md:text-2xl xl:text-3xl space-y-4 flex-col text-end w-60 lg:pr-20 xl:pr-5 justify-start">
            <p>Book now</p>
            <p>your ideal</p>
            <p>room</p>
        </div>

        <div class="col-span-4 grid grid-cols-4 gap-5 items-center space-x-9">
            <div class="text-white text-start">
                <label for="arrival-date" class="block text-lg font-poppins font-semibold ">Arrival date</label>
                <div class="flex items-center border-b-2 border-white">
                    <input type="text" id="arrival-date"
                        class="w-full text-white bg-transparent text-center border-none text-lg focus:outline-none placeholder:text-white"
                        placeholder="dd/mm/yy" />
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6 ml-2 cursor-pointer">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M8.25 9V3.75m7.5 5.25V3.75M3 12.75h18M4.5 21h15a1.5 1.5 0 001.5-1.5v-15a1.5 1.5 0 00-1.5-1.5h-15A1.5 1.5 0 003 4.5v15a1.5 1.5 0 001.5 1.5z" />
                    </svg>
                </div>
            </div>

            <div class="text-white text-start">
                <label for="departure-date" class="block text-lg font-poppins font-semibold">Departure date</label>
                <div class="flex items-center border-b-2 border-white">
                    <input type="text" id="departure-date"
                        class="w-full text-white bg-transparent border-none text-center text-lg focus:outline-none placeholder:text-white"
                        placeholder="dd/mm/yy" />
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6 ml-2 cursor-pointer">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M8.25 9V3.75m7.5 5.25V3.75M3 12.75h18M4.5 21h15a1.5 1.5 0 001.5-1.5v-15a1.5 1.5 0 00-1.5-1.5h-15A1.5 1.5 0 003 4.5v15a1.5 1.5 0 001.5 1.5z" />
                    </svg>
                </div>
            </div>

            <div class="text-white text-start">
                <label for="guests" class="block text-lg font-poppins font-semibold">Number of guests</label>
                <div class="flex justify-center border-b-2 items-start">
                    <button id="decrement"
                        class="bg-transparent text-white font-extrabold text-lg   px-3  rounded-lg bg-gray-200">-</button>
                    <input type="text" id="guests" value="1"
                        class="w-full border-none bg-transparent border-white text-center text-lg focus:outline-none"
                        readonly />
                    <button id="increment"
                        class="bg-transparent text-white font-extrabold text-lg  px-2 rounded-lg bg-gray-200 ">+</button>
                </div>
            </div>

            <!-- Book Now Button -->
            <div class=" flex justify-center items-center">
                <button
                    class="bg-white border-custom-secondary border-2 text-custom-secondary font-poppins font-bold py-2 px-6 rounded-full hover:scale-110 transition-all duration-200 hover:bg-custom-secondary hover:text-custom-primary">BOOK
                    NOW</button>
            </div>
        </div>
    </div>

    <!-- Rooms -->
    <div id="rooms" class="grid grid-cols-5 h-100 xl:h-110 w-full mt-14">
        <div class="col-span-2 px-7 py-2 border-t-4 border-b-4 border-custom-primary flex flex-col justify-between h-full">
            <div data-aos="fade-right" class="my-2 w-3/4 h-1/3 bg-rooms_1 bg-cover rounded-lg bg-center"></div>
            <div class="my-2 w-full h-36 text-start">
                <p data-aos="fade-down" class="font-judson text-xl xl:text-5xl text-black font-medium">Award <span
                        class="font-freehand text-xl xl:text-5xl text-custom-primary font-bold">Winning</span></p>
                <p data-aos="fade-right" class="font-judson text-xl xl:text-5xl text-black font-medium">style and</p>
                <p data-aos="fade-right" class="font-judson text-xl xl:text-5xl text-black font-medium">comfort</p>
            </div>
            <div data-aos="fade-left" class="my-2 w-3/4 h-1/3 bg-rooms_2 bg-cover rounded-lg bg-center ml-auto"></div>
        </div>
        <div class="col-span-3 flex border-t-4 border-b-4 border-custom-primary">
            <div class="w-1 h-full">
                <div class="h-24 xl:h-44 w-full bg-custom-primary"></div>
                <p class="rotate-90 font-judson font-bold text-3xl text-custom-primary my-2">Rooms</p>
                <div class="mt-24 h-64 xl:h-97 w-full bg-custom-primary"></div>
            </div>
            <div class="w-full h-full ml-2 xl:ml-5 my-2 xl:my-5">
                <div data-aos="fade-left" class="text-left p-4">
                    <h2 class="text-xl xl:text-3xl font-bold font-judson text-custom-primary">OUR ROOMS</h2>
                </div>
                <div data-aos="fade-down" id="carousel"
                    class="relative carousel carousel-center rounded-box w-full space-x-4 p-2 xl:p-4 overflow-x-auto">
                    <div class="carousel-item"
                        data-description="This is our luxurious room with a king-sized bed and modern amenities. The spacious layout is adorned with elegant furnishings that create a warm and inviting atmosphere. ">
                        <img class="rounded-box h-52 xl:h-97 bg-corousel_1 bg-center bg-cover w-80 xl:w-104" />
                    </div>
                    <div class="carousel-item" class="font-poppins font-base text-5xl"
                        data-description="Our room features a stunning bathroom, equipped with all the essentials you need. The bathroom boasts a spacious layout with elegant marble countertops and modern fixtures that create a sophisticated atmosphere.">
                        <img class="rounded-box h-52 xl:h-97 bg-corousel_2 bg-center bg-cover w-80 xl:w-104" />
                    </div>
                    <div class="carousel-item"
                        data-description="Our room features a stunning bathroom, equipped with all the essentials you need. The spacious layout allows for ease of movement, while the elegant design incorporates modern fixtures and luxurious finishes">
                        <img class="rounded-box h-52 xl:h-97 bg-corousel_3 bg-center bg-cover w-80 xl:w-104" />
                    </div>
                    <div class="carousel-item"
                        data-description="An elegant room with a peaceful ambiance for your relaxation. The soft, muted colors create a soothing atmosphere, inviting you to unwind after a long day. ">
                        <img class=" rounded-box h-52 xl:h-97 bg-corousel_4 bg-center bg-cover w-80 xl:w-104" />
                    </div>
                </div>
                <div id="description" class="p-4 text-left">
                    <p id="carousel-text" class=" font-poppins text-xs xl:text-xl text-black font-medium">
                        This is our luxurious room with a king-sized bed and modern amenities.
                    </p>
                    <button
                        class="mt-4 px-4 py-2 bg-red-600 text-white rounded-md font-medium hover:scale-110 transition-all duration-300">View
                        More</button>
                </div>

            </div>
        </div>
    </div>

    {{-- Meeting rooms --}}
    <div id="meetingRooms" class="h-108 mt-16  w-full overflow-hidden">
        <div class="pl-7">
            <p data-aos="fade-right" class="font-freehand font-bold text-custom-primary text-3xl lg:text-5xl">Meeting
                <span data-aos="fade-up" class="font-judson text-3xl lg:text-5xl font-bold text-black">Rooms</span>
            </p>
        </div>
        <div data-aos="fade-left" class=" mt-10 w-full h-104 pl-5 overflow-x-auto overflow-hidden no-scrollbar"
            id="bounceMeeting">
            <div class="flex space-x-8 snap-x snap-mandatory mt-3">
                <a href="{{ route('detail') }}" class="hover:scale-105  duration-150 transition-all ml-3">
                    <div
                        class="relative flex flex-col mt-6 text-gray-700 border-2 border-gray-100 bg-white shadow-md bg-clip-border rounded-xl w-96">
                        <div
                            class="p relative h-56 mx-4 -mt-6 overflow-hidden text-white shadow-lg bg-clip-border bg-rooms_1 rounded-xl bg-blue-gray-500 shadow-blue-gray-500/40">
                        </div>
                        <div class="p-6 ">
                            <h5
                                class="block mb-2 font-sans text-xl antialiased font-semibold leading-snug tracking-normal text-blue-gray-900">
                                UI/UX Review Check
                            </h5>
                            <p class="block font-sans text-base antialiased font-light leading-relaxed text-inherit">
                                The place is close to Barceloneta Beach and bus stop just 2 min by walk
                                and near to "Naviglio" where you can enjoy the main night life in
                                Barcelona.
                            </p>
                        </div>
                        <div class="p-6 pt-0">
                            <button
                                class="align-middle select-none font-sans font-bold text-center uppercase  disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-xs py-3 px-6 rounded-lg bg-custom-primary text-white shadow-md shadow-gray-900/10 hover:scale-110 transition-all duration-300 hover:shadow-gray-900/20 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none"
                                type="button">
                                Read More
                            </button>
                        </div>
                    </div>
                </a>
                <a href="#" class="hover:scale-105 duration-150 transition-all ml-3">
                    <div
                        class="relative flex flex-col mt-6 text-gray-700 border-2 border-gray-100 bg-white shadow-md bg-clip-border rounded-xl w-96">
                        <div
                            class="p relative h-56 mx-4 -mt-6 overflow-hidden text-white shadow-lg bg-clip-border bg-rooms_1 rounded-xl bg-blue-gray-500 shadow-blue-gray-500/40">
                        </div>
                        <div class="p-6">
                            <h5
                                class="block mb-2 font-sans text-xl antialiased font-semibold leading-snug tracking-normal text-blue-gray-900">
                                UI/UX Review Check
                            </h5>
                            <p class="block font-sans text-base antialiased font-light leading-relaxed text-inherit">
                                The place is close to Barceloneta Beach and bus stop just 2 min by walk
                                and near to "Naviglio" where you can enjoy the main night life in
                                Barcelona.
                            </p>
                        </div>
                        <div class="p-6 pt-0">
                            <button
                                class="align-middle select-none font-sans font-bold text-center uppercase  disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-xs py-3 px-6 rounded-lg bg-custom-primary text-white shadow-md shadow-gray-900/10 hover:scale-110 transition-all duration-300 hover:shadow-gray-900/20 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none"
                                type="button">
                                Read More
                            </button>
                        </div>
                    </div>
                </a>
                <a href="#" class="hover:scale-105 duration-150 transition-all ml-3">
                    <div
                        class="relative flex flex-col mt-6 text-gray-700 border-2 border-gray-100 bg-white shadow-md bg-clip-border rounded-xl w-96">
                        <div
                            class="p relative h-56 mx-4 -mt-6 overflow-hidden text-white shadow-lg bg-clip-border bg-rooms_1 rounded-xl bg-blue-gray-500 shadow-blue-gray-500/40">
                        </div>
                        <div class="p-6">
                            <h5
                                class="block mb-2 font-sans text-xl antialiased font-semibold leading-snug tracking-normal text-blue-gray-900">
                                UI/UX Review Check
                            </h5>
                            <p class="block font-sans text-base antialiased font-light leading-relaxed text-inherit">
                                The place is close to Barceloneta Beach and bus stop just 2 min by walk
                                and near to "Naviglio" where you can enjoy the main night life in
                                Barcelona.
                            </p>
                        </div>
                        <div class="p-6 pt-0">
                            <button
                                class="align-middle select-none font-sans font-bold text-center uppercase  disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-xs py-3 px-6 rounded-lg bg-custom-primary text-white shadow-md shadow-gray-900/10 hover:scale-110 transition-all duration-300 hover:shadow-gray-900/20 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none"
                                type="button">
                                Read More
                            </button>
                        </div>
                    </div>
                </a>
                <a href="#" class="hover:scale-105 duration-150 transition-all ml-3">
                    <div
                        class="relative flex flex-col mt-6 text-gray-700 border-2 border-gray-100 bg-white shadow-md bg-clip-border rounded-xl w-96">
                        <div
                            class="p relative h-56 mx-4 -mt-6 overflow-hidden text-white shadow-lg bg-clip-border bg-rooms_1 rounded-xl bg-blue-gray-500 shadow-blue-gray-500/40">
                        </div>
                        <div class="p-6">
                            <h5
                                class="block mb-2 font-sans text-xl antialiased font-semibold leading-snug tracking-normal text-blue-gray-900">
                                UI/UX Review Check
                            </h5>
                            <p class="block font-sans text-base antialiased font-light leading-relaxed text-inherit">
                                The place is close to Barceloneta Beach and bus stop just 2 min by walk
                                and near to "Naviglio" where you can enjoy the main night life in
                                Barcelona.
                            </p>
                        </div>
                        <div class="p-6 pt-0">
                            <button
                                class="align-middle select-none font-sans font-bold text-center uppercase  disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-xs py-3 px-6 rounded-lg bg-custom-primary text-white shadow-md shadow-gray-900/10 hover:scale-110 transition-all duration-300 hover:shadow-gray-900/20 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none"
                                type="button">
                                Read More
                            </button>
                        </div>
                    </div>
                </a>
                <a href="#" class="hover:scale-105 duration-150 transition-all ml-3">
                    <div
                        class="relative flex flex-col mt-6 text-gray-700 border-2 border-gray-100 bg-white shadow-md bg-clip-border rounded-xl w-96">
                        <div
                            class="p relative h-56 mx-4 -mt-6 overflow-hidden text-white shadow-lg bg-clip-border bg-rooms_1 rounded-xl bg-blue-gray-500 shadow-blue-gray-500/40">
                        </div>
                        <div class="p-6">
                            <h5
                                class="block mb-2 font-sans text-xl antialiased font-semibold leading-snug tracking-normal text-blue-gray-900">
                                UI/UX Review Check
                            </h5>
                            <p class="block font-sans text-base antialiased font-light leading-relaxed text-inherit">
                                The place is close to Barceloneta Beach and bus stop just 2 min by walk
                                and near to "Naviglio" where you can enjoy the main night life in
                                Barcelona.
                            </p>
                        </div>
                        <div class="p-6 pt-0">
                            <button
                                class="align-middle select-none font-sans font-bold text-center uppercase  disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-xs py-3 px-6 rounded-lg bg-custom-primary text-white shadow-md shadow-gray-900/10 hover:scale-110 transition-all duration-300 hover:shadow-gray-900/20 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none"
                                type="button">
                                Read More
                            </button>
                        </div>
                    </div>
                </a>
                <a href="#" class="hover:scale-105 duration-150 transition-all ml-3">
                    <div
                        class="relative flex flex-col mt-6 text-gray-700 border-2 border-gray-100 bg-white shadow-md bg-clip-border rounded-xl w-96">
                        <div
                            class="p relative h-56 mx-4 -mt-6 overflow-hidden text-white shadow-lg bg-clip-border bg-rooms_1 rounded-xl bg-blue-gray-500 shadow-blue-gray-500/40">
                        </div>
                        <div class="p-6">
                            <h5
                                class="block mb-2 font-sans text-xl antialiased font-semibold leading-snug tracking-normal text-blue-gray-900">
                                UI/UX Review Check
                            </h5>
                            <p class="block font-sans text-base antialiased font-light leading-relaxed text-inherit">
                                The place is close to Barceloneta Beach and bus stop just 2 min by walk
                                and near to "Naviglio" where you can enjoy the main night life in
                                Barcelona.
                            </p>
                        </div>
                        <div class="p-6 pt-0">
                            <button
                                class="align-middle select-none font-sans font-bold text-center uppercase  disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-xs py-3 px-6 rounded-lg bg-custom-primary text-white shadow-md shadow-gray-900/10 hover:scale-110 transition-all duration-300 hover:shadow-gray-900/20 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none"
                                type="button">
                                Read More
                            </button>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>

    {{-- Package rooms --}}
    <div id="packageRooms" class="h-108 mt-1  w-full overflow-hidden">
        <div class="pl-7">
            <p data-aos="fade-right" class="font-freehand font-bold text-custom-primary text-3xl lg:text-5xl">Package
                <span class="font-judson text-3xl lg:text-5xl font-bold text-black">Rooms</span>
            </p>
        </div>
        <div data-aos="fade-left" class=" mt-10 w-full h-104 pl-5 overflow-x-auto overflow-hidden no-scrollbar"
            id="bouncePackage">
            <div class="flex space-x-8 snap-x snap-mandatory mt-3">
                <a href="#" class="hover:scale-105 duration-150 transition-all ml-3">
                    <div
                        class="relative flex flex-col mt-6 text-gray-700 border-2 border-gray-100 bg-white shadow-md bg-clip-border rounded-xl w-96">
                        <div
                            class="p relative h-56 mx-4 -mt-6 overflow-hidden text-white shadow-lg bg-clip-border bg-rooms_1 rounded-xl bg-blue-gray-500 shadow-blue-gray-500/40">
                        </div>
                        <div class="p-6">
                            <h5
                                class="block mb-2 font-sans text-xl antialiased font-semibold leading-snug tracking-normal text-blue-gray-900">
                                UI/UX Review Check
                            </h5>
                            <p class="block font-sans text-base antialiased font-light leading-relaxed text-inherit">
                                The place is close to Barceloneta Beach and bus stop just 2 min by walk
                                and near to "Naviglio" where you can enjoy the main night life in
                                Barcelona.
                            </p>
                        </div>
                        <div class="p-6 pt-0">
                            <button
                                class="align-middle select-none font-sans font-bold text-center uppercase  disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-xs py-3 px-6 rounded-lg bg-custom-primary text-white shadow-md shadow-gray-900/10 hover:scale-110 transition-all duration-300 hover:shadow-gray-900/20 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none"
                                type="button">
                                Read More
                            </button>
                        </div>
                    </div>
                </a>
                <a href="#" class="hover:scale-105 duration-150 transition-all ml-3">
                    <div
                        class="relative flex flex-col mt-6 text-gray-700 border-2 border-gray-100 bg-white shadow-md bg-clip-border rounded-xl w-96">
                        <div
                            class="p relative h-56 mx-4 -mt-6 overflow-hidden text-white shadow-lg bg-clip-border bg-rooms_1 rounded-xl bg-blue-gray-500 shadow-blue-gray-500/40">
                        </div>
                        <div class="p-6">
                            <h5
                                class="block mb-2 font-sans text-xl antialiased font-semibold leading-snug tracking-normal text-blue-gray-900">
                                UI/UX Review Check
                            </h5>
                            <p class="block font-sans text-base antialiased font-light leading-relaxed text-inherit">
                                The place is close to Barceloneta Beach and bus stop just 2 min by walk
                                and near to "Naviglio" where you can enjoy the main night life in
                                Barcelona.
                            </p>
                        </div>
                        <div class="p-6 pt-0">
                            <button
                                class="align-middle select-none font-sans font-bold text-center uppercase  disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-xs py-3 px-6 rounded-lg bg-custom-primary text-white shadow-md shadow-gray-900/10 hover:scale-110 transition-all duration-300 hover:shadow-gray-900/20 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none"
                                type="button">
                                Read More
                            </button>
                        </div>
                    </div>
                </a>

                <a href="#" class="hover:scale-105 duration-150 transition-all ml-3">
                    <div
                        class="relative flex flex-col mt-6 text-gray-700 border-2 border-gray-100 bg-white shadow-md bg-clip-border rounded-xl w-96">
                        <div
                            class="p relative h-56 mx-4 -mt-6 overflow-hidden text-white shadow-lg bg-clip-border bg-rooms_1 rounded-xl bg-blue-gray-500 shadow-blue-gray-500/40">
                        </div>
                        <div class="p-6">
                            <h5
                                class="block mb-2 font-sans text-xl antialiased font-semibold leading-snug tracking-normal text-blue-gray-900">
                                UI/UX Review Check
                            </h5>
                            <p class="block font-sans text-base antialiased font-light leading-relaxed text-inherit">
                                The place is close to Barceloneta Beach and bus stop just 2 min by walk
                                and near to "Naviglio" where you can enjoy the main night life in
                                Barcelona.
                            </p>
                        </div>
                        <div class="p-6 pt-0">
                            <button
                                class="align-middle select-none font-sans font-bold text-center uppercase  disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-xs py-3 px-6 rounded-lg bg-custom-primary text-white shadow-md shadow-gray-900/10 hover:scale-110 transition-all duration-300 hover:shadow-gray-900/20 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none"
                                type="button">
                                Read More
                            </button>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>

    {{-- our services --}}
    <div id="services" class="h-124 xl:h-101 mt-10 w-full">
        <div data-aos="fade-zoom" class="grid grid-cols-8 items-center">
            <div class="col-span-2 xl:col-span-2 h-1 w-full bg-custom-primary"></div>
            <div class="col-span-3 xl:col-span-1 flex justify-center">
                <p class="font-judson  text-2xl xl:text-4xl text-black font-bold text-center">Our Services</p>
            </div>
            <div class="col-span-3 xl:col-span-5 h-1 w-full bg-custom-primary"></div>
        </div>
        <div class="h-116 w-full mt-10 grid grid-rows-4 xl:grid-cols-4 gap-4 p-10 justify-items-center">
            <div
                class="shadow-lg bg-[#D9D9D9] rounded-3xl hover:bg-custom-primary text-custom-primary fill-custom-primary hover:fill-custom-third hover:text-custom-third transition-all duration-300 aspect-square h-60 xl:h-80 flex-col gap-3 flex justify-center items-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="ionicon w-[80px] h-[80px] xl:w-[170px] xl:h-[170px]"
                    viewBox="0 0 512 512">
                    <path
                        d="M392 208h-24v-5.74A63.93 63.93 0 00321.65 96a111 111 0 00-27.59-47.29A108.62 108.62 0 00216 16c-29.91 0-57.78 12.28-79 34.68a56 56 0 00-67.51 77.54A63.91 63.91 0 0080 231.39V440a56.06 56.06 0 0056 56h176a56.06 56.06 0 0056-56v-8h24a72.08 72.08 0 0072-72v-80a72.08 72.08 0 00-72-72zM176 416a16 16 0 01-32 0V256a16 16 0 0132 0zm64 0a16 16 0 01-32 0V256a16 16 0 0132 0zm64 0a16 16 0 01-32 0V256a16 16 0 0132 0zm16-224c-8.33 0-20.55-5.18-26.69-11.31A16 16 0 00282 176H160a16 16 0 00-15 10.53c-6.83 18.68-23.6 21.47-33 21.47a32 32 0 010-64c.09 0 9.12.34 16.4 5.8a16 16 0 1019.2-25.6A63.69 63.69 0 00112 112a63.55 63.55 0 00-14 1.57A24 24 0 01120 80a23.78 23.78 0 0119.38 9.84 51.35 51.35 0 014.71 7.9A16 16 0 00176 96c0-6.77-3.61-15.17-10.76-25-.46-.63-1-1.25-1.45-1.86C178.39 55.44 196.64 48 216 48a76.86 76.86 0 0155.23 23.18A80.2 80.2 0 01292.61 142a16 16 0 0012.73 18.71 16.29 16.29 0 003 .28 16 16 0 0015.7-13 111.78 111.78 0 001.96-19.42 32 32 0 01-6 63.43zm112 168a40 40 0 01-40 40h-24V240h24a40 40 0 0140 40z" />
                </svg>
                <p class="font-judson font-semibold text-xl xl:text-3xl">Delicious Food</p>
            </div>
            <div
                class="shadow-lg bg-[#D9D9D9] rounded-3xl hover:bg-custom-primary text-custom-primary fill-custom-primary hover:fill-custom-third hover:text-custom-third transition-all duration-300 aspect-square h-60 xl:h-80 flex-col gap-3 flex justify-center items-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="ionicon w-[80px] h-[80px] xl:w-[170px] xl:h-[170px]"
                    viewBox="0 0 512 512">
                    <path
                        d="M357.57 223.94a79.48 79.48 0 0056.58-23.44l77-76.95c6.09-6.09 6.65-16 .85-22.39a16 16 0 00-23.17-.56l-68.63 68.58a12.29 12.29 0 01-17.37 0c-4.79-4.78-4.53-12.86.25-17.64l68.33-68.33a16 16 0 00-.56-23.16A15.62 15.62 0 00440.27 56a16.71 16.71 0 00-11.81 4.9l-68.27 68.26a12.29 12.29 0 01-17.37 0c-4.78-4.78-4.53-12.86.25-17.64l68.33-68.31a16 16 0 00-.56-23.16A15.62 15.62 0 00400.26 16a16.73 16.73 0 00-11.81 4.9L311.5 97.85a79.49 79.49 0 00-23.44 56.59v8.23a16 16 0 01-4.69 11.33l-35.61 35.62a4 4 0 01-5.66 0L68.82 36.33a16 16 0 00-22.58-.06C31.09 51.28 23 72.47 23 97.54c-.1 41.4 21.66 89 56.79 124.08l85.45 85.45A64.79 64.79 0 00211 326a64 64 0 0016.21-2.08 16.24 16.24 0 014.07-.53 15.93 15.93 0 0110.83 4.25l11.39 10.52a16.12 16.12 0 014.6 11.23v5.54a47.73 47.73 0 0013.77 33.65l90.05 91.57.09.1a53.29 53.29 0 0075.36-75.37L302.39 269.9a4 4 0 010-5.66L338 228.63a16 16 0 0111.32-4.69z" />
                    <path
                        d="M211 358a97.32 97.32 0 01-68.36-28.25l-13.86-13.86a8 8 0 00-11.3 0l-85 84.56c-15.15 15.15-20.56 37.45-13.06 59.29a30.63 30.63 0 001.49 3.6C31 484 50.58 496 72 496a55.68 55.68 0 0039.64-16.44L225 365.66a4.69 4.69 0 001.32-3.72v-.26a4.63 4.63 0 00-5.15-4.27A97.09 97.09 0 01211 358z" />
                </svg>
                <p class="font-judson font-semibold text-xl xl:text-3xl">Restaurant</p>
            </div>
            <div
                class="shadow-lg bg-[#D9D9D9] rounded-3xl hover:bg-custom-primary text-custom-primary fill-custom-primary hover:fill-custom-third hover:text-custom-third transition-all duration-300 aspect-square h-60 xl:h-80 flex-col gap-3 flex justify-center items-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="ionicon w-[80px] h-[80px] xl:w-[170px] xl:h-[170px]"
                    viewBox="0 0 512 512">
                    <path
                        d="M388 448a92 92 0 1192-92 92.1 92.1 0 01-92 92zm0-152a60 60 0 1060 60 60.07 60.07 0 00-60-60zM124 448a92 92 0 1192-92 92.1 92.1 0 01-92 92zm0-152a60 60 0 1060 60 60.07 60.07 0 00-60-60zM320 128a31.89 31.89 0 0032-32.1A31.55 31.55 0 00320.2 64a32 32 0 10-.2 64z" />
                    <path
                        d="M367.55 192h-43.76a4 4 0 01-3.51-2.08l-31.74-58.17a31 31 0 00-49.38-7.75l-69.86 70.4a32.56 32.56 0 00-9.3 22.4c0 17.4 12.6 23.6 18.5 27.1 28.5 16.42 48.57 28.43 59.58 35.1a4 4 0 011.92 3.41v69.12c0 8.61 6.62 16 15.23 16.43A16 16 0 00272 352v-86a16 16 0 00-6.66-13l-37-26.61a4 4 0 01-.58-6l42-44.79a4 4 0 016.42.79L298 215.77a16 16 0 0014 8.23h56a16 16 0 0016-16.77c-.42-8.61-7.84-15.23-16.45-15.23z" />
                </svg>
                <p class="font-judson font-semibold text-xl xl:text-3xl">Fitness</p>
            </div>
            <div
                class="shadow-lg bg-[#D9D9D9] rounded-3xl hover:bg-custom-primary text-custom-primary fill-custom-primary hover:fill-custom-third hover:text-custom-third transition-all duration-300 aspect-square h-60 xl:h-80 flex-col gap-3 flex justify-center items-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="ionicon w-[80px] h-[80px] xl:w-[170px] xl:h-[170px]"
                    viewBox="0 0 512 512">
                    <path
                        d="M429.55 119.49a16 16 0 00-17.06-7.1c-18.64 4.19-37.06 9-54.73 14.22-35.06 10.39-69.33 23.92-107.85 42.59-18.62 9.05-26 13.35-48 26.13l-4.5 2.67c-32.95 19-57.09 40-73.79 64.29C105.29 288.89 96 320 96 354.64c0 40.74 15.71 77.1 44.24 102.37C169 482.52 209.06 496 256 496c46.76 0 86.89-14.33 116-41.43 28.35-26.35 44-63.39 44-104.29 0-25-6.19-47-12.17-68.22-12.59-44.69-23.46-83.29 24.71-144.13a16 16 0 001.01-18.44zM219 119.55C168.46 92.08 101.46 80.69 98.63 80.22A16 16 0 0081 90.55a16.47 16.47 0 003.79 16.84c31.84 33.78 32.86 68.79 28.65 104.63a4.45 4.45 0 002.5 4.54 4.44 4.44 0 005.08-.9c16.39-16.51 36.37-31.52 60.4-45.39l4.48-2.6C208 154.8 216.23 150 236 140.41l2.69-1.3a4 4 0 00.64-6.83A178.59 178.59 0 00219 119.55zM234.26 91.45c3.44 1.87 7.09 4 10.9 6.29a189.31 189.31 0 0129.57 22.39 4 4 0 004.28.76 672 672 0 0169.65-25q7-2.07 14.08-4a4 4 0 002.53-5.62c-8.27-16.83-14.67-28.9-15.15-29.79A16 16 0 00336 48c-1.91 0-33.28.36-76.87 21.3a279 279 0 00-26.39 14.51 4 4 0 00.22 6.94zM209.33 60.79c7.3-4.77 14.74-9.22 22.25-13.31a2 2 0 00.24-3.36c-26-19.57-49.73-27-51.15-27.42a16 16 0 00-17.56 5.82 217.63 217.63 0 00-19.28 32.38 2 2 0 001.29 2.81c13.61 3.57 29.4 8.29 45.61 14.29a2 2 0 001.79-.2z" />
                </svg>
                <p class="font-judson font-semibold text-xl xl:text-3xl">Beauty Spa</p>
            </div>
        </div>
    </div>

    {{-- Our Gallery --}}
    <div class="h-96 xl:h-110 mt-10 w-full">
        <div data-aos="fade-zoom" class="grid grid-cols-9 items-center">
            <div class="col-span-2 xl:col-span-2 h-1 w-full bg-custom-primary"></div>
            <div class="col-span-3 xl:col-span-1 flex justify-center">
                <p class="font-judson  text-2xl xl:text-4xl text-black font-bold text-center">Our Gallery</p>
            </div>
            <div class="col-span-4 xl:col-span-6 h-1 w-full bg-custom-primary"></div>
        </div>
        <div class="grid mt-10 h-80 xl:h-108 grid-cols-3 gap-5 p-5">
            <div data-aos="fade-right" class="shadow-lg carousel-item">
                <img class="h-full w-full bg-cover bg-center bg-gallery_1">
            </div>
            <div class="h-full w-full grid grid-rows-2 gap-5">
                <div data-aos="fade-down" class="shadow-lg carousel-item">
                    <img class="h-full w-full bg-cover bg-center bg-gallery_2">
                </div>
                <div data-aos="fade-up" class="shadow-lg carousel-item">
                    <img class=" h-full w-full bg-cover bg-center bg-gallery_3">
                </div>
            </div>
            <div data-aos="fade-left" class="shadow-lg carousel-item">
                <img class="h-full w-full bg-cover bg-center bg-gallery_4">
            </div>
        </div>
    </div>

    {{-- About us --}}
    <div id="about_us" class="h-108 w-full  mt-16">
        <div class="h-10 w-full pl-5 xl:pl-7">
            <p class="font-freehand text-custom-primary font-bold text-3xl xl:text-5xl">About Us</p>
        </div>
        <div class="grid grid-cols-12 h-full gap-7 p-5 mt-12">
            <div data-aos="fade-right"
                class="ml-2 col-span-3 h-52 xl:h-full w-full bg-yellow-300 p-5 bg-about bg-cover bg-center trapezoid">
            </div>
            <div data-aos="fade-down" class="bg-custom-primary h-52 xl:h-full w-3 xl:w-20"></div>
            <div
                class="col-span-8 h-full  space-y-16 w-full xl:pl-5  xl:pr-52 flex flex-col justify-start xl:justify-center items-start leading-8">
                <p data-aos="fade-down" class="font-poppins text-custom-primary text-xs xl:text-5xl font-bold">PUSDIKLAT
                    PMI JATENG</p>
                <p data-aos="fade-up" class="font-poppins font-semibold text-xs xl:text-2xl  text-black leading-loose">
                    GEDUNG DIKLAT PMI PROVINSI JAWA TENGAH Terletak di kawasan perbukitan di Kota Semarang yang memiliki
                    suasana nyaman dan jauh dari kebisingan kota, sehingga cocok digunakan untuk tempat rapat, pendidikan,
                    pelatihan, seminar, dan lainnya. lingkungan Gedung Diklat yang Hijau dan rumah belajar memiliki beragam
                    fasilitas yang tersedia serta pilihan menu hidangan yang ditawarkan berinovasi sehat dan lezat</p>
            </div>
        </div>
    </div>

    {{-- --}}
    <div data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine" id="contact"
        class="hidden xl:flex bg-footer h-104 w-full mt-48 justify-center items-center  flex-col">
        <div class="w-28 h-28 xl:w-48 xl:h-48 bg-admin rounded-full"></div>
        <p class="font-judson font-semibold text-xl xl:text-4xl text-yellow-400 mt-4">Admin PMI</p>
        <p class="font-poppins font-semibold text-lg xl:text-xl px-104 text-center text-custom-third mt-4">Menginap di
            Pusdiklat sangatlah nyaman, tenang, dan banyak tukang cimol</p>
        <p class="font-poppins font-semibold text-lg xl:text-xl text-center mt-8 text-custom-third">PT. Menyala Polines</p>
    </div>

    {{-- footer --}}
    <footer data-aos="fade-left" data-aos-offset="300" data-aos-easing="ease-in-sine" class="w-full bg-gray-800">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div
                class="grid grid-cols-2 sm:grid-cols-4 lg:grid-cols-6 gap-3 md:gap-8 py-10 max-sm:max-w-sm max-sm:mx-auto gap-y-8">
                <div class="col-span-full mb-10 lg:col-span-2 lg:mb-0  h-fit  items-center flex">
                    <div class="bg-logo_pmi bg-cover h-32 w-32 "> </div>
                    <div
                        class="ml-3 font-poppins text-custom-third justify-center items-start flex flex-col font-bold text-3xl">
                        <p>Palang</p>
                        <p>Merah</p>
                        <p>Indonesia</p>
                    </div>
                </div>
                <div class="lg:mx-auto text-left ">
                    <h4 class="text-xl text-custom-third font-medium mb-7">Pagedone</h4>
                    <ul class="text-sm  transition-all duration-500">
                        <li class="mb-6"><a href="#home"
                                class="text-white hover:text-custom-primary text-lg">Home</a></li>
                        <li class="mb-6"><a href="#rooms"
                                class=" text-white hover:text-custom-primary text-lg">Rooms</a></li>
                        <li class="mb-6"><a href="#meetingRooms"
                                class=" text-white hover:text-custom-primary text-lg">Meeting rooms</a></li>
                        <li class="mb-6"><a href="#services"
                                class=" text-white hover:text-custom-primary text-lg">Services</a></li>
                        <li class="mb-6"><a href="#about_us"
                                class=" text-white hover:text-custom-primary text-lg">About</a></li>
                        <li><a href="#contact" class=" text-white hover:text-custom-primary text-lg">Contact</a></li>

                    </ul>
                </div>
                <div class="lg:mx-auto text-left ">
                    <h4 class="text-xl text-custom-third font-medium mb-7">Products</h4>
                    <ul class="text-sm  transition-all duration-500">
                        <li class="mb-6"><a href="https://www.figma.com/"
                                class="text-white  hover:text-custom-primary text-lg">Figma UI System</a></li>
                        <li class="mb-6"><a href="https://ionic.io/ionicons"
                                class=" text-white  hover:text-custom-primary text-lg">IonIcon</a></li>
                        <li class="mb-6"><a href="https://tailwindcss.com/"
                                class=" text-white  hover:text-custom-primary text-lg">Tailwind</a></li>
                        <li><a href="https://michalsnik.github.io/aos/"
                                class=" text-white  hover:text-custom-primary text-lg">Components Library</a></li>
                    </ul>
                </div>
                <div class="lg:mx-auto text-left">
                    <h4 class="text-xl text-custom-third font-medium mb-7">Resources</h4>
                    <ul class="text-sm  transition-all duration-500">
                        <li class="mb-6"><a href="" class="text-white text-lg">FAQs</a></li>
                        <li class="mb-6"><a href="" class=" text-white text-lg">Quick Start</a></li>
                        <li class="mb-6"><a href="" class=" text-white text-lg">Documentation</a></li>
                        <li><a href="" class=" text-white text-lg">User Guide</a></li>
                    </ul>
                </div>

            </div>
            <div class="py-7 border-t border-gray-200">
                <div class="flex items-center justify-center flex-col lg:justify-between lg:flex-row">
                    <span class="text-sm text-gray-500 ">©<a href="https://pagedone.io/">pagedone</a> 2024, All rights
                        reserved.</span>
                    <div class="flex mt-4 space-x-4 sm:justify-center lg:mt-0 ">
                        <a href="javascript:;"
                            class="w-9 h-9 rounded-full bg-gray-700 flex justify-center items-center hover:bg-custom-primary">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20"
                                fill="none">
                                <g id="Social Media">
                                    <path id="Vector"
                                        d="M11.3214 8.93666L16.4919 3.05566H15.2667L10.7772 8.16205L7.1914 3.05566H3.05566L8.47803 10.7774L3.05566 16.9446H4.28097L9.022 11.552L12.8088 16.9446H16.9446L11.3211 8.93666H11.3214ZM9.64322 10.8455L9.09382 10.0765L4.72246 3.95821H6.60445L10.1322 8.8959L10.6816 9.66481L15.2672 16.083H13.3852L9.64322 10.8458V10.8455Z"
                                        fill="white" />
                                </g>
                            </svg>
                        </a>
                        <a href="javascript:;"
                            class="w-9 h-9 rounded-full bg-gray-700 flex justify-center items-center hover:bg-custom-primary">
                            <svg class="w-[1.25rem] h-[1.125rem] text-white" viewBox="0 0 15 15" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M4.70975 7.93663C4.70975 6.65824 5.76102 5.62163 7.0582 5.62163C8.35537 5.62163 9.40721 6.65824 9.40721 7.93663C9.40721 9.21502 8.35537 10.2516 7.0582 10.2516C5.76102 10.2516 4.70975 9.21502 4.70975 7.93663ZM3.43991 7.93663C3.43991 9.90608 5.05982 11.5025 7.0582 11.5025C9.05658 11.5025 10.6765 9.90608 10.6765 7.93663C10.6765 5.96719 9.05658 4.37074 7.0582 4.37074C5.05982 4.37074 3.43991 5.96719 3.43991 7.93663ZM9.97414 4.22935C9.97408 4.39417 10.0236 4.55531 10.1165 4.69239C10.2093 4.82946 10.3413 4.93633 10.4958 4.99946C10.6503 5.06259 10.8203 5.07916 10.9844 5.04707C11.1484 5.01498 11.2991 4.93568 11.4174 4.81918C11.5357 4.70268 11.6163 4.55423 11.649 4.39259C11.6817 4.23095 11.665 4.06339 11.6011 3.91109C11.5371 3.7588 11.4288 3.6286 11.2898 3.53698C11.1508 3.44536 10.9873 3.39642 10.8201 3.39635H10.8197C10.5955 3.39646 10.3806 3.48424 10.222 3.64043C10.0635 3.79661 9.97434 4.00843 9.97414 4.22935ZM4.21142 13.5892C3.52442 13.5584 3.15101 13.4456 2.90286 13.3504C2.57387 13.2241 2.33914 13.0738 2.09235 12.8309C1.84555 12.588 1.69278 12.3569 1.56527 12.0327C1.46854 11.7882 1.3541 11.4201 1.32287 10.7431C1.28871 10.0111 1.28189 9.79119 1.28189 7.93669C1.28189 6.08219 1.28927 5.86291 1.32287 5.1303C1.35416 4.45324 1.46944 4.08585 1.56527 3.84069C1.69335 3.51647 1.84589 3.28513 2.09235 3.04191C2.3388 2.79869 2.57331 2.64813 2.90286 2.52247C3.1509 2.42713 3.52442 2.31435 4.21142 2.28358C4.95417 2.24991 5.17729 2.24319 7.0582 2.24319C8.9391 2.24319 9.16244 2.25047 9.90582 2.28358C10.5928 2.31441 10.9656 2.42802 11.2144 2.52247C11.5434 2.64813 11.7781 2.79902 12.0249 3.04191C12.2717 3.2848 12.4239 3.51647 12.552 3.84069C12.6487 4.08513 12.7631 4.45324 12.7944 5.1303C12.8285 5.86291 12.8354 6.08219 12.8354 7.93669C12.8354 9.79119 12.8285 10.0105 12.7944 10.7431C12.7631 11.4201 12.6481 11.7881 12.552 12.0327C12.4239 12.3569 12.2714 12.5882 12.0249 12.8309C11.7784 13.0736 11.5434 13.2241 11.2144 13.3504C10.9663 13.4457 10.5928 13.5585 9.90582 13.5892C9.16306 13.6229 8.93994 13.6296 7.0582 13.6296C5.17645 13.6296 4.95395 13.6229 4.21142 13.5892ZM4.15307 1.03424C3.40294 1.06791 2.89035 1.18513 2.4427 1.3568C1.9791 1.53408 1.58663 1.77191 1.19446 2.1578C0.802277 2.54369 0.56157 2.93108 0.381687 3.38797C0.207498 3.82941 0.0885535 4.3343 0.0543922 5.07358C0.0196672 5.81402 0.0117188 6.05074 0.0117188 7.93663C0.0117188 9.82252 0.0196672 10.0592 0.0543922 10.7997C0.0885535 11.539 0.207498 12.0439 0.381687 12.4853C0.56157 12.9419 0.802334 13.3297 1.19446 13.7155C1.58658 14.1012 1.9791 14.3387 2.4427 14.5165C2.89119 14.6881 3.40294 14.8054 4.15307 14.839C4.90479 14.8727 5.1446 14.8811 7.0582 14.8811C8.9718 14.8811 9.212 14.8732 9.96332 14.839C10.7135 14.8054 11.2258 14.6881 11.6737 14.5165C12.137 14.3387 12.5298 14.1014 12.9219 13.7155C13.3141 13.3296 13.5543 12.9419 13.7347 12.4853C13.9089 12.0439 14.0284 11.539 14.062 10.7997C14.0962 10.0587 14.1041 9.82252 14.1041 7.93663C14.1041 6.05074 14.0962 5.81402 14.062 5.07358C14.0278 4.33424 13.9089 3.82913 13.7347 3.38797C13.5543 2.93135 13.3135 2.5443 12.9219 2.1578C12.5304 1.7713 12.137 1.53408 11.6743 1.3568C11.2258 1.18513 10.7135 1.06735 9.96388 1.03424C9.21256 1.00058 8.97236 0.992188 7.05876 0.992188C5.14516 0.992188 4.90479 1.00002 4.15307 1.03424Z"
                                    fill="currentColor" />
                            </svg>
                        </a>
                        <a href="javascript:;"
                            class="w-9 h-9 rounded-full bg-gray-700 flex justify-center items-center hover:bg-custom-primary">
                            <svg class="w-[1rem] h-[1rem] text-white" viewBox="0 0 13 12" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M2.8794 11.5527V3.86835H0.318893V11.5527H2.87967H2.8794ZM1.59968 2.81936C2.4924 2.81936 3.04817 2.2293 3.04817 1.49188C3.03146 0.737661 2.4924 0.164062 1.61666 0.164062C0.74032 0.164062 0.167969 0.737661 0.167969 1.49181C0.167969 2.22923 0.723543 2.8193 1.5829 2.8193H1.59948L1.59968 2.81936ZM4.29668 11.5527H6.85698V7.26187C6.85698 7.03251 6.87369 6.80255 6.94134 6.63873C7.12635 6.17968 7.54764 5.70449 8.25514 5.70449C9.18141 5.70449 9.55217 6.4091 9.55217 7.44222V11.5527H12.1124V7.14672C12.1124 4.78652 10.8494 3.68819 9.16483 3.68819C7.78372 3.68819 7.17715 4.45822 6.84014 4.98267H6.85718V3.86862H4.29681C4.33023 4.5895 4.29661 11.553 4.29661 11.553L4.29668 11.5527Z"
                                    fill="currentColor" />
                            </svg>
                        </a>
                        <a href="javascript:;"
                            class="w-9 h-9 rounded-full bg-gray-700 flex justify-center items-center hover:bg-custom-primary">
                            <svg class="w-[1.25rem] h-[0.875rem] text-white" viewBox="0 0 16 12" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M13.9346 1.13529C14.5684 1.30645 15.0665 1.80588 15.2349 2.43896C15.5413 3.58788 15.5413 5.98654 15.5413 5.98654C15.5413 5.98654 15.5413 8.3852 15.2349 9.53412C15.0642 10.1695 14.5661 10.669 13.9346 10.8378C12.7886 11.1449 8.19058 11.1449 8.19058 11.1449C8.19058 11.1449 3.59491 11.1449 2.44657 10.8378C1.81277 10.6666 1.31461 10.1672 1.14622 9.53412C0.839844 8.3852 0.839844 5.98654 0.839844 5.98654C0.839844 5.98654 0.839844 3.58788 1.14622 2.43896C1.31695 1.80353 1.81511 1.30411 2.44657 1.13529C3.59491 0.828125 8.19058 0.828125 8.19058 0.828125C8.19058 0.828125 12.7886 0.828125 13.9346 1.13529ZM10.541 5.98654L6.72178 8.19762V3.77545L10.541 5.98654Z"
                                    fill="currentColor" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
@endsection
