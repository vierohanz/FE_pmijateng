@extends('navbar')
@section('content')
@vite('resources/js/index.js')

    <!-- Content Home-->
    <div id="home" class="grid grid-cols-1 -mt-36 xl:grid-cols-2 gap-4 h-114 bg-landing_page bg-cover bg-no-repeat">
        <div  class="flex mt-56 z-10 xl:mt-0 flex-col items-center justify-center ">
            <p  data-aos="fade-right" class="font-josefinSans font-bold text-6xl sm:text-7xl lg:text-7xl 2xl:text-9xl text-white z-10">Find Your</p>
            <p data-aos="fade-up" class="font-josefinSans font-bold text-6xl sm:text-7xl lg:text-7xl 2xl:text-9xl mt-7 text-white">Ideal Rooms</p>
        </div>
        <div class=" bg-no-repeat flex space-x-9 md:space-x-14 grid-cols-2 justify-center items-center">
            <a href="#" data-aos="fade-up">
                <div class="bg-red-500 ls:w-40 sm:w-48 lg:w-60 h-52 rounded-3xl p-2 hover:scale-110 transition-all duration-300">
                    <div class="bg-our_rooms bg-cover h-32 w-full rounded-3xl"></div>
                    <div class="flex justify-center items-center h-16 space-x-3">
                        <p class="font-poppins font-semibold text-lg text-white">Our Rooms</p>
                        <div class="w-8 h-8 bg-white rounded-lg flex justify-center items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="25px" height="25px" class="ionicon" viewBox="0 0 512 512"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="48" d="M268 112l144 144-144 144M392 256H100"/></svg>
                        </div>
                    </div>
                </div>
            </a>
            <a href="#" data-aos="fade-down">
                <div class="bg-red-500 ls:w-40 sm:w-48 lg:w-60 h-52 rounded-3xl p-2 hover:scale-110 transition-all duration-300">
                    <div class="bg-package bg-cover h-32 w-full rounded-3xl"></div>
                    <div class="flex justify-center items-center h-16 space-x-3">
                        <p class="font-poppins font-semibold text-lg text-white">Our Package</p>
                        <div class="w-8 h-8 bg-white rounded-lg flex justify-center items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="25px" height="25px" class="ionicon" viewBox="0 0 512 512"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="48" d="M268 112l144 144-144 144M392 256H100"/></svg>
                        </div>
                    </div>
                </div>
            </a>
        </div>
    </div>

    <!-- Book Now -->
    <div class="h-48 hidden lg:grid grid-cols-5 items-center justify-between mx-3  rounded-2xl bg-red-600 px-5 my-3">
        <div class="col-span-1  font-poppins font-bold text-white ls:text-xl md:text-2xl xl:text-3xl space-y-4 flex-col text-end w-60 lg:pr-20 xl:pr-5 justify-start">
            <p>Book now</p>
            <p>your ideal</p>
            <p>room</p>
        </div>

        <div class="col-span-4 grid grid-cols-4 gap-5 items-center space-x-9">
           <div class="text-white text-start">
                <label for="arrival-date" class="block text-lg font-poppins font-semibold ">Arrival date</label>
                <div class="flex items-center border-b-2 border-white">
                    <input type="text" id="arrival-date" class="w-full text-white bg-transparent text-center text-lg focus:outline-none placeholder:text-white"  placeholder="dd/mm/yy"/>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 ml-2 cursor-pointer">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 9V3.75m7.5 5.25V3.75M3 12.75h18M4.5 21h15a1.5 1.5 0 001.5-1.5v-15a1.5 1.5 0 00-1.5-1.5h-15A1.5 1.5 0 003 4.5v15a1.5 1.5 0 001.5 1.5z" />
                    </svg>
                </div>
            </div>

            <div class="text-white text-start">
                <label for="departure-date" class="block text-lg font-poppins font-semibold">Departure date</label>
                <div class="flex items-center border-b-2 border-white">
                    <input type="text" id="departure-date" class="w-full text-white bg-transparent text-center text-lg focus:outline-none placeholder:text-white"  placeholder="dd/mm/yy"/>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 ml-2 cursor-pointer">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 9V3.75m7.5 5.25V3.75M3 12.75h18M4.5 21h15a1.5 1.5 0 001.5-1.5v-15a1.5 1.5 0 00-1.5-1.5h-15A1.5 1.5 0 003 4.5v15a1.5 1.5 0 001.5 1.5z" />
                    </svg>
                </div>
            </div>

            <div class="text-white text-start">
                <label for="guests" class="block text-lg font-poppins font-semibold">Number of guests</label>
                <div class="flex justify-center border-b-2 items-start">
                    <button id="decrement" class="bg-transparent text-white font-extrabold text-lg   px-3  rounded-lg bg-gray-200">-</button>
                    <input type="text" id="guests" value="4" class="w-full bg-transparent border-white text-center text-lg focus:outline-none" readonly />
                    <button id="increment" class="bg-transparent text-white font-extrabold text-lg  px-2 rounded-lg bg-gray-200 ">+</button>
                </div>
            </div>

            <!-- Book Now Button -->
            <div class=" flex justify-center items-center">
                <button class="bg-white border-custom-secondary border-2 text-custom-secondary font-poppins font-bold py-2 px-6 rounded-full hover:scale-110 transition-all duration-200 hover:bg-custom-secondary hover:text-custom-primary">BOOK NOW</button>
            </div>
        </div>
    </div>

    <!-- Rooms -->
    <div id="rooms" class="grid grid-cols-5 h-100 xl:h-110 w-full mt-14">
        <div  class="col-span-2 px-7 py-2 border-t-4 border-b-4 border-custom-primary flex flex-col justify-between h-full">
            <div data-aos="fade-right" class="my-2 w-3/4 h-1/3 bg-rooms_1 bg-cover rounded-lg bg-center"></div>
            <div  class="my-2 w-full h-36 text-start">
                <p data-aos="fade-down" class="font-judson text-xl xl:text-5xl text-black font-medium">Award <span class="font-freehand text-xl xl:text-5xl text-custom-primary font-bold">Winning</span></p>
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
                <div data-aos="fade-down" id="carousel" class="relative carousel carousel-center rounded-box w-full space-x-4 p-2 xl:p-4 overflow-x-auto">
                    <div class="carousel-item" data-description="This is our luxurious room with a king-sized bed and modern amenities. The spacious layout is adorned with elegant furnishings that create a warm and inviting atmosphere. ">
                        <img class="rounded-box h-52 xl:h-97 bg-corousel_1 bg-center bg-cover w-80 xl:w-104"  />
                    </div>
                    <div class="carousel-item" class="font-poppins font-base text-5xl" data-description="Our room features a stunning bathroom, equipped with all the essentials you need. The bathroom boasts a spacious layout with elegant marble countertops and modern fixtures that create a sophisticated atmosphere.">
                        <img class="rounded-box h-52 xl:h-97 bg-corousel_2 bg-center bg-cover w-80 xl:w-104" />
                    </div>
                    <div class="carousel-item" data-description="Our room features a stunning bathroom, equipped with all the essentials you need. The spacious layout allows for ease of movement, while the elegant design incorporates modern fixtures and luxurious finishes">
                        <img  class="rounded-box h-52 xl:h-97 bg-corousel_3 bg-center bg-cover w-80 xl:w-104" />
                    </div>
                    <div class="carousel-item" data-description="An elegant room with a peaceful ambiance for your relaxation. The soft, muted colors create a soothing atmosphere, inviting you to unwind after a long day. ">
                        <img  class=" rounded-box h-52 xl:h-97 bg-corousel_4 bg-center bg-cover w-80 xl:w-104" />
                    </div>
                </div>
                <div id="description" class="p-4 text-left">
                    <p id="carousel-text" class=" font-poppins text-xs xl:text-xl text-black font-medium">
                        This is our luxurious room with a king-sized bed and modern amenities.
                    </p>
                    <button class="mt-4 px-4 py-2 bg-red-600 text-white rounded-md font-medium hover:scale-110 transition-all duration-300">View More</button>
                </div>

            </div>
        </div>
    </div>

{{-- Meeting rooms --}}
    <div id="meetingRooms" class="h-108 mt-16  w-full overflow-hidden">
        <div class="pl-7">
            <p data-aos="fade-right" class="font-freehand font-bold text-custom-primary text-3xl lg:text-5xl">Meeting <span data-aos="fade-up" class="font-judson text-3xl lg:text-5xl font-bold text-black">Rooms</span></p>
        </div>
        <div data-aos="fade-left" class=" mt-10 w-full h-104 pl-5 overflow-x-auto overflow-hidden no-scrollbar" id="bounceMeeting">
            <div class="flex space-x-8 snap-x snap-mandatory mt-3">
                <a href="#" class="hover:scale-105 duration-150 transition-all ml-3">
                    <div class="relative flex flex-col mt-6 text-gray-700 border-2 border-gray-100 bg-white shadow-md bg-clip-border rounded-xl w-96">
                        <div class="p relative h-56 mx-4 -mt-6 overflow-hidden text-white shadow-lg bg-clip-border bg-rooms_1 rounded-xl bg-blue-gray-500 shadow-blue-gray-500/40"></div>
                        <div class="p-6">
                            <h5 class="block mb-2 font-sans text-xl antialiased font-semibold leading-snug tracking-normal text-blue-gray-900">
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
                    <div class="relative flex flex-col mt-6 text-gray-700 border-2 border-gray-100 bg-white shadow-md bg-clip-border rounded-xl w-96">
                        <div class="p relative h-56 mx-4 -mt-6 overflow-hidden text-white shadow-lg bg-clip-border bg-rooms_1 rounded-xl bg-blue-gray-500 shadow-blue-gray-500/40"></div>
                        <div class="p-6">
                            <h5 class="block mb-2 font-sans text-xl antialiased font-semibold leading-snug tracking-normal text-blue-gray-900">
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
                    <div class="relative flex flex-col mt-6 text-gray-700 border-2 border-gray-100 bg-white shadow-md bg-clip-border rounded-xl w-96">
                        <div class="p relative h-56 mx-4 -mt-6 overflow-hidden text-white shadow-lg bg-clip-border bg-rooms_1 rounded-xl bg-blue-gray-500 shadow-blue-gray-500/40"></div>
                        <div class="p-6">
                            <h5 class="block mb-2 font-sans text-xl antialiased font-semibold leading-snug tracking-normal text-blue-gray-900">
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
                    <div class="relative flex flex-col mt-6 text-gray-700 border-2 border-gray-100 bg-white shadow-md bg-clip-border rounded-xl w-96">
                        <div class="p relative h-56 mx-4 -mt-6 overflow-hidden text-white shadow-lg bg-clip-border bg-rooms_1 rounded-xl bg-blue-gray-500 shadow-blue-gray-500/40"></div>
                        <div class="p-6">
                            <h5 class="block mb-2 font-sans text-xl antialiased font-semibold leading-snug tracking-normal text-blue-gray-900">
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
                    <div class="relative flex flex-col mt-6 text-gray-700 border-2 border-gray-100 bg-white shadow-md bg-clip-border rounded-xl w-96">
                        <div class="p relative h-56 mx-4 -mt-6 overflow-hidden text-white shadow-lg bg-clip-border bg-rooms_1 rounded-xl bg-blue-gray-500 shadow-blue-gray-500/40"></div>
                        <div class="p-6">
                            <h5 class="block mb-2 font-sans text-xl antialiased font-semibold leading-snug tracking-normal text-blue-gray-900">
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
                    <div class="relative flex flex-col mt-6 text-gray-700 border-2 border-gray-100 bg-white shadow-md bg-clip-border rounded-xl w-96">
                        <div class="p relative h-56 mx-4 -mt-6 overflow-hidden text-white shadow-lg bg-clip-border bg-rooms_1 rounded-xl bg-blue-gray-500 shadow-blue-gray-500/40"></div>
                        <div class="p-6">
                            <h5 class="block mb-2 font-sans text-xl antialiased font-semibold leading-snug tracking-normal text-blue-gray-900">
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
     <div class="h-108 mt-1  w-full overflow-hidden">
        <div class="pl-7">
            <p data-aos="fade-right" class="font-freehand font-bold text-custom-primary text-3xl lg:text-5xl">Package <span class="font-judson text-3xl lg:text-5xl font-bold text-black">Rooms</span></p>
        </div>
        <div data-aos="fade-left" class=" mt-10 w-full h-104 pl-5 overflow-x-auto overflow-hidden no-scrollbar" id="bouncePackage">
            <div class="flex space-x-8 snap-x snap-mandatory mt-3">
                <a href="#" class="hover:scale-105 duration-150 transition-all ml-3">
                    <div class="relative flex flex-col mt-6 text-gray-700 border-2 border-gray-100 bg-white shadow-md bg-clip-border rounded-xl w-96">
                        <div class="p relative h-56 mx-4 -mt-6 overflow-hidden text-white shadow-lg bg-clip-border bg-rooms_1 rounded-xl bg-blue-gray-500 shadow-blue-gray-500/40"></div>
                        <div class="p-6">
                            <h5 class="block mb-2 font-sans text-xl antialiased font-semibold leading-snug tracking-normal text-blue-gray-900">
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
                    <div class="relative flex flex-col mt-6 text-gray-700 border-2 border-gray-100 bg-white shadow-md bg-clip-border rounded-xl w-96">
                        <div class="p relative h-56 mx-4 -mt-6 overflow-hidden text-white shadow-lg bg-clip-border bg-rooms_1 rounded-xl bg-blue-gray-500 shadow-blue-gray-500/40"></div>
                        <div class="p-6">
                            <h5 class="block mb-2 font-sans text-xl antialiased font-semibold leading-snug tracking-normal text-blue-gray-900">
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
                    <div class="relative flex flex-col mt-6 text-gray-700 border-2 border-gray-100 bg-white shadow-md bg-clip-border rounded-xl w-96">
                        <div class="p relative h-56 mx-4 -mt-6 overflow-hidden text-white shadow-lg bg-clip-border bg-rooms_1 rounded-xl bg-blue-gray-500 shadow-blue-gray-500/40"></div>
                        <div class="p-6">
                            <h5 class="block mb-2 font-sans text-xl antialiased font-semibold leading-snug tracking-normal text-blue-gray-900">
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
    <div class="h-124 xl:h-101 mt-10 w-full">
        <div class="grid grid-cols-8 items-center">
            <div class="col-span-2 xl:col-span-2 h-1 w-full bg-custom-primary"></div>
            <div class="col-span-3 xl:col-span-1 flex justify-center">
                <p class="font-judson  text-2xl xl:text-4xl text-black font-bold text-center">Our Services</p>
            </div>
            <div class="col-span-3 xl:col-span-5 h-1 w-full bg-custom-primary"></div>
        </div>
        <div class="h-116 w-full mt-10 grid grid-rows-4 xl:grid-cols-4 gap-4 p-10 justify-items-center">
            <div class="bg-[#D9D9D9] rounded-3xl hover:bg-custom-primary text-custom-primary fill-custom-primary hover:fill-custom-third hover:text-custom-third transition-all duration-300 aspect-square h-60 xl:h-80 flex-col gap-3 flex justify-center items-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="ionicon w-[80px] h-[80px] xl:w-[170px] xl:h-[170px]"  viewBox="0 0 512 512"><path d="M392 208h-24v-5.74A63.93 63.93 0 00321.65 96a111 111 0 00-27.59-47.29A108.62 108.62 0 00216 16c-29.91 0-57.78 12.28-79 34.68a56 56 0 00-67.51 77.54A63.91 63.91 0 0080 231.39V440a56.06 56.06 0 0056 56h176a56.06 56.06 0 0056-56v-8h24a72.08 72.08 0 0072-72v-80a72.08 72.08 0 00-72-72zM176 416a16 16 0 01-32 0V256a16 16 0 0132 0zm64 0a16 16 0 01-32 0V256a16 16 0 0132 0zm64 0a16 16 0 01-32 0V256a16 16 0 0132 0zm16-224c-8.33 0-20.55-5.18-26.69-11.31A16 16 0 00282 176H160a16 16 0 00-15 10.53c-6.83 18.68-23.6 21.47-33 21.47a32 32 0 010-64c.09 0 9.12.34 16.4 5.8a16 16 0 1019.2-25.6A63.69 63.69 0 00112 112a63.55 63.55 0 00-14 1.57A24 24 0 01120 80a23.78 23.78 0 0119.38 9.84 51.35 51.35 0 014.71 7.9A16 16 0 00176 96c0-6.77-3.61-15.17-10.76-25-.46-.63-1-1.25-1.45-1.86C178.39 55.44 196.64 48 216 48a76.86 76.86 0 0155.23 23.18A80.2 80.2 0 01292.61 142a16 16 0 0012.73 18.71 16.29 16.29 0 003 .28 16 16 0 0015.7-13 111.78 111.78 0 001.96-19.42 32 32 0 01-6 63.43zm112 168a40 40 0 01-40 40h-24V240h24a40 40 0 0140 40z"/></svg>
                <p class="font-judson font-semibold text-xl xl:text-3xl">Delicious Food</p>
            </div>
            <div class="bg-[#D9D9D9] rounded-3xl hover:bg-custom-primary text-custom-primary fill-custom-primary hover:fill-custom-third hover:text-custom-third transition-all duration-300 aspect-square h-60 xl:h-80 flex-col gap-3 flex justify-center items-center">
                <svg xmlns="http://www.w3.org/2000/svg"  class="ionicon w-[80px] h-[80px] xl:w-[170px] xl:h-[170px]" viewBox="0 0 512 512"><path d="M357.57 223.94a79.48 79.48 0 0056.58-23.44l77-76.95c6.09-6.09 6.65-16 .85-22.39a16 16 0 00-23.17-.56l-68.63 68.58a12.29 12.29 0 01-17.37 0c-4.79-4.78-4.53-12.86.25-17.64l68.33-68.33a16 16 0 00-.56-23.16A15.62 15.62 0 00440.27 56a16.71 16.71 0 00-11.81 4.9l-68.27 68.26a12.29 12.29 0 01-17.37 0c-4.78-4.78-4.53-12.86.25-17.64l68.33-68.31a16 16 0 00-.56-23.16A15.62 15.62 0 00400.26 16a16.73 16.73 0 00-11.81 4.9L311.5 97.85a79.49 79.49 0 00-23.44 56.59v8.23a16 16 0 01-4.69 11.33l-35.61 35.62a4 4 0 01-5.66 0L68.82 36.33a16 16 0 00-22.58-.06C31.09 51.28 23 72.47 23 97.54c-.1 41.4 21.66 89 56.79 124.08l85.45 85.45A64.79 64.79 0 00211 326a64 64 0 0016.21-2.08 16.24 16.24 0 014.07-.53 15.93 15.93 0 0110.83 4.25l11.39 10.52a16.12 16.12 0 014.6 11.23v5.54a47.73 47.73 0 0013.77 33.65l90.05 91.57.09.1a53.29 53.29 0 0075.36-75.37L302.39 269.9a4 4 0 010-5.66L338 228.63a16 16 0 0111.32-4.69z"/><path d="M211 358a97.32 97.32 0 01-68.36-28.25l-13.86-13.86a8 8 0 00-11.3 0l-85 84.56c-15.15 15.15-20.56 37.45-13.06 59.29a30.63 30.63 0 001.49 3.6C31 484 50.58 496 72 496a55.68 55.68 0 0039.64-16.44L225 365.66a4.69 4.69 0 001.32-3.72v-.26a4.63 4.63 0 00-5.15-4.27A97.09 97.09 0 01211 358z"/></svg>
                <p class="font-judson font-semibold text-xl xl:text-3xl">Restaurant</p>
            </div>
            <div class="bg-[#D9D9D9] rounded-3xl hover:bg-custom-primary text-custom-primary fill-custom-primary hover:fill-custom-third hover:text-custom-third transition-all duration-300 aspect-square h-60 xl:h-80 flex-col gap-3 flex justify-center items-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="ionicon w-[80px] h-[80px] xl:w-[170px] xl:h-[170px]" viewBox="0 0 512 512"><path d="M388 448a92 92 0 1192-92 92.1 92.1 0 01-92 92zm0-152a60 60 0 1060 60 60.07 60.07 0 00-60-60zM124 448a92 92 0 1192-92 92.1 92.1 0 01-92 92zm0-152a60 60 0 1060 60 60.07 60.07 0 00-60-60zM320 128a31.89 31.89 0 0032-32.1A31.55 31.55 0 00320.2 64a32 32 0 10-.2 64z"/><path d="M367.55 192h-43.76a4 4 0 01-3.51-2.08l-31.74-58.17a31 31 0 00-49.38-7.75l-69.86 70.4a32.56 32.56 0 00-9.3 22.4c0 17.4 12.6 23.6 18.5 27.1 28.5 16.42 48.57 28.43 59.58 35.1a4 4 0 011.92 3.41v69.12c0 8.61 6.62 16 15.23 16.43A16 16 0 00272 352v-86a16 16 0 00-6.66-13l-37-26.61a4 4 0 01-.58-6l42-44.79a4 4 0 016.42.79L298 215.77a16 16 0 0014 8.23h56a16 16 0 0016-16.77c-.42-8.61-7.84-15.23-16.45-15.23z"/></svg>
                <p class="font-judson font-semibold text-xl xl:text-3xl">Fitness</p>
            </div>
            <div class="bg-[#D9D9D9] rounded-3xl hover:bg-custom-primary text-custom-primary fill-custom-primary hover:fill-custom-third hover:text-custom-third transition-all duration-300 aspect-square h-60 xl:h-80 flex-col gap-3 flex justify-center items-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="ionicon w-[80px] h-[80px] xl:w-[170px] xl:h-[170px]" viewBox="0 0 512 512"><path d="M429.55 119.49a16 16 0 00-17.06-7.1c-18.64 4.19-37.06 9-54.73 14.22-35.06 10.39-69.33 23.92-107.85 42.59-18.62 9.05-26 13.35-48 26.13l-4.5 2.67c-32.95 19-57.09 40-73.79 64.29C105.29 288.89 96 320 96 354.64c0 40.74 15.71 77.1 44.24 102.37C169 482.52 209.06 496 256 496c46.76 0 86.89-14.33 116-41.43 28.35-26.35 44-63.39 44-104.29 0-25-6.19-47-12.17-68.22-12.59-44.69-23.46-83.29 24.71-144.13a16 16 0 001.01-18.44zM219 119.55C168.46 92.08 101.46 80.69 98.63 80.22A16 16 0 0081 90.55a16.47 16.47 0 003.79 16.84c31.84 33.78 32.86 68.79 28.65 104.63a4.45 4.45 0 002.5 4.54 4.44 4.44 0 005.08-.9c16.39-16.51 36.37-31.52 60.4-45.39l4.48-2.6C208 154.8 216.23 150 236 140.41l2.69-1.3a4 4 0 00.64-6.83A178.59 178.59 0 00219 119.55zM234.26 91.45c3.44 1.87 7.09 4 10.9 6.29a189.31 189.31 0 0129.57 22.39 4 4 0 004.28.76 672 672 0 0169.65-25q7-2.07 14.08-4a4 4 0 002.53-5.62c-8.27-16.83-14.67-28.9-15.15-29.79A16 16 0 00336 48c-1.91 0-33.28.36-76.87 21.3a279 279 0 00-26.39 14.51 4 4 0 00.22 6.94zM209.33 60.79c7.3-4.77 14.74-9.22 22.25-13.31a2 2 0 00.24-3.36c-26-19.57-49.73-27-51.15-27.42a16 16 0 00-17.56 5.82 217.63 217.63 0 00-19.28 32.38 2 2 0 001.29 2.81c13.61 3.57 29.4 8.29 45.61 14.29a2 2 0 001.79-.2z"/></svg>
                <p class="font-judson font-semibold text-xl xl:text-3xl">Beauty Spa</p>
            </div>
        </div>
    </div>
    <div class="h-110 w-full bg-red-500">

    </div>


@endsection
