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

    <div class="h-116 mt-16  w-full pl-7 overflow-hidden">
        <div>
            <p class="font-freehand font-bold text-custom-primary text-5xl">Meeting <span class="font-judson text-5xl font-bold text-black">Rooms</span></p>
        </div>
        <div class=" mt-10 w-full h-104 overflow-x-auto overflow-hidden no-scrollbar">
            <div class="flex space-x-4 snap-x snap-mandatory">
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

            </div>
        </div>
    </div>
@endsection
