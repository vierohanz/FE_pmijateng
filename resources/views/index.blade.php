@extends('navbar')
@section('content')
@vite('resources/js/landing_page.js')
<!-- Content Home-->
    <div id="home" class="grid grid-cols-1 -mt-36 xl:grid-cols-2 gap-4 h-114 bg-landing_page bg-cover bg-no-repeat">
        <div data-aos="fade-zoom" class="flex mt-56 xl:mt-0 flex-col items-center justify-center ">
            <p class="font-josefinSans font-bold text-6xl sm:text-7xl lg:text-7xl 2xl:text-9xl text-white">Find Your</p>
            <p class="font-josefinSans font-bold text-6xl sm:text-7xl lg:text-7xl 2xl:text-9xl mt-7 text-white">Ideal Rooms</p>
        </div>
        <div class=" bg-no-repeat flex space-x-9 md:space-x-14 grid-cols-2 justify-center items-center">
            <a href="#">
                <div class="bg-red-500 ls:w-40 sm:w-48 lg:w-60 h-52 rounded-3xl p-2">
                    <div class="bg-our_rooms bg-cover h-32 w-full rounded-3xl"></div>
                    <div class="flex justify-center items-center h-16 space-x-3">
                        <p class="font-poppins font-semibold text-lg text-white">Our Rooms</p>
                        <div class="w-8 h-8 bg-white rounded-lg flex justify-center items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="25px" height="25px" class="ionicon" viewBox="0 0 512 512"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="48" d="M268 112l144 144-144 144M392 256H100"/></svg>
                        </div>
                    </div>
                </div>
            </a>
            <a href="#">
                <div class="bg-red-500 ls:w-40 sm:w-48 lg:w-60 h-52 rounded-3xl p-2">
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

<!-- Content Keunggulan -->
    <div  class="-mt-28 mx-4 lg:-mt-40 2xl:-mt-48 lg:mx-5 2xl:mx-0  h-48 bg-promote bg-contain bg-center bg-no-repeat"></div>

<!-- Content Event -->
    <div id="excellence" class="bg-custom-third  lg:mt-20 lg:p-14 pl-14 pr-14 pb-7 pt-8">
        <div data-aos="fade-zoom" class="flex flex-col items-center ">
            <p class="font-poppins font-bold text-custom-secondary text-2xl md:text-4xl lg:text-5xl">Why We Are Best ?</p>
            <p class="font-poppins font-normal text-custom-fourth mt-3 text-md md:text-xl lg:text-2xl w-full lg:w-104 text-center mx-auto">We're the best for easy ticket buying and great customer service with the latest tech.</p>
        </div>
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:pr-48 lg:pl-48 pt-20">
            <div data-aos="fade-right" class=" shadow-lg shadow-custom-primary rounded-2xl bg-gradient-to-l from-custom-primary to-custom-secondary h-80 flex flex-col items-center justify-center text-white font-bold">
                <div class="h-1/2 relative  w-full flex">
                    <div class="w-1/2 "></div>
                    <div class="w-64  h-64 lg:w-56 lg:h-56 2xl:w-80 2xl:h-80 absolute -bottom-3 lg:-bottom-1 xl:-bottom-2 2xl:-bottom-14 xs:left-48 ls:left-56 sm:left-99 md:left-104 lg:left-48 xl:left-80 2xl:left-99 transform -translate-x-1/2  bg-lock bg-contain bg-no-repeat"></div>
                </div>
                <div class="h-1/2  w-full px-3">
                    <p class="p-2 font-poppins font-bold text-2xl md:text-3xl lg:text-2xl 2xl:text-3xl text-white">SECURE</p>
                    <p class="pl-2 mr-6  2xl:mr-32  font-poppins font-normal text-lg md:text-2xl lg:text-lg 2xl:text-xl text-white">The application is equipped with a strong security system.</p>
                </div>
            </div>
            <div data-aos="fade-left" class=" shadow-lg shadow-custom-primary rounded-2xl bg-gradient-to-r from-custom-primary to-custom-secondary h-80 flex flex-col items-center justify-center text-white font-bold mt-5 md:mt-0">
                <div class="h-1/2 relative  w-full flex">
                    <div class="w-1/2 "></div>
                    <div class=" w-64 h-64 lg:w-56 lg:h-56 2xl:w-80 2xl:h-80 absolute -bottom-7 lg:-bottom-2 xl:-bottom-2 2xl:-bottom-14 xs:left-48 ls:left-56 sm:left-99 md:left-104 lg:left-52 xl:left-80 2xl:left-100 transform -translate-x-1/2  bg-rocket bg-contain bg-no-repeat"></div>
                </div>
                <div class="h-1/2  w-full px-3">
                    <p class="p-2 font-poppins font-bold text-2xl md:text-3xl lg:text-2xl 2xl:text-3xl text-white">FAST RESPON</p>
                    <p class="pl-2 mr-6 2xl:mr-32  font-poppins font-normal text-lg md:text-2xl lg:text-lg 2xl:text-xl text-white">Experience fast response times with our service.</p>
                </div>
            </div>
            <div data-aos="fade-right" class="mt-5 md:mt-0 shadow-lg shadow-custom-primary rounded-2xl bg-gradient-to-l from-custom-primary to-custom-secondary h-80 flex flex-col items-center justify-center text-white font-bold">
                <div class="h-1/2 relative  w-full flex">
                    <div class="w-1/2 "></div>
                    <div class=" w-64 h-64 lg:w-56 lg:h-56 2xl:w-80 2xl:h-80 absolute -bottom-6 lg:-bottom-2 xl:-bottom-2 2xl:-bottom-24 xs:left-44 ls:left-56 sm:left-99 md:left-104 lg:left-48 xl:left-80 2xl:left-99 transform -translate-x-1/2 bg-globe bg-contain bg-no-repeat"></div>
                </div>
                <div class="h-1/2  w-full px-3">
                    <p class="p-2 font-poppins font-bold text-2xl md:text-3xl lg:text-2xl 2xl:text-3xl text-white">WIDE RANGE EVENT</p>
                    <p class="pl-2 mr-6 2xl:mr-32  font-poppins font-normal text-lg md:text-2xl lg:text-base 2xl:text-xl text-white">we offer tickets to a diverse array of events to suit all interests</p>
                </div>
            </div>
            <div data-aos="fade-left" class="shadow-lg shadow-custom-primary rounded-2xl bg-gradient-to-r from-custom-primary to-custom-secondary h-80 flex flex-col items-center justify-center text-white font-bold mt-5 md:mt-0">
                <div class="h-1/2 relative  w-full flex">
                    <div class="w-1/2 "></div>
                    <div class=" w-48 h-48 lg:w-42 lg:h-42 2xl:w-72 2xl:h-72 absolute xs:bottom-2 ls:bottom-2  lg:bottom-4 xl:bottom-2 2xl:-bottom-16 xs:left-56 ls:left-64 sm:left-100 md:left-104 lg:left-56 xl:left-80 2xl:left-101 transform -translate-x-1/2  bg-idea bg-contain bg-no-repeat"></div>
                </div>
                <div class="h-1/2  w-full px-3">
                    <p class="p-2 font-poppins font-bold text-2xl md:text-3xl lg:text-2xl 2xl:text-3xl text-white">INNOVATIVE TECHNOLOGY</p>
                    <p class="pl-2 mr-6 2xl:mr-32  font-poppins font-normal text-lg md:text-2xl lg:text-base 2xl:text-xl text-white">We leverage technology to provide ticket buying </p>
                </div>
            </div>
        </div>
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#F1F1F1" fill-opacity="1" d="M0,64L48,64C96,64,192,64,288,85.3C384,107,480,149,576,192C672,235,768,277,864,266.7C960,256,1056,192,1152,181.3C1248,171,1344,213,1392,234.7L1440,256L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z"></path>
    </svg>

<!-- Popular Event -->
    <div>
        <div class="mt-16 lg:mt-14 relative flex flex-col items-center justify-center">
            <div data-aos="fade-zoom" class="w-full border-l-12 border-custom-secondary pl-12">
                <p class="font-poppins font-bold text-2xl md:text-4xl lg:text-5xl 2xl:text-5xl text-custom-secondary">POPULAR EVENT</p>
                <p class="font-poppins font-normal text-md md:text-xl lg:text-2xl text-custom-fourth mr-40 lg:mr-108 2xl:mr-117">Discover the hottest event tickets in town now</p>
            </div>
            <div data-aos="fade-right" class="h-72 2xl:h-108 w-80 2xl:w-116 rounded-lg 2xl:left-96 bottom-14 2xl:bottom-20 shadow-lg shadow-custom-primary bg-custom-fourth absolute"></div>
            <div data-aos="fade-right" id="controls-carousel" class="relative w-full pr-5 2xl:pr-64 pl-5 2xl:pl-52 pt-20 2xl:pt-44" data-carousel="static">
                <div class="relative h-80 overflow-hidden rounded-lg md:h-108">
                    <div class="hidden duration-700 flex flex-col justify-end items-center ease-in-out bg-corousel_1 bg-cover bg-center bg-no-repeat" data-carousel-item="">
                        <div class="absolute z-10 xs:h-20 2xl:h-40 w-full bg-black opacity-40"></div>
                        <p class="font-poppins z-20 font-semibold text-white xs:text-lg 2xl:text-3xl">Vina Wahins Concert</p>
                        <p class="font-poppins xs:pb-2 2xl:pb-9 xs:mt-1 2xl:mt-3 z-20 font-normal mx-4 2xl:mx-96  text-center text-white xs:text-sm 2xl:text-xl">Join us for an unforgettable Vina Wahins in Jakarta, featuring all his greatest hits</p>
                    </div>
                    <div class="hidden duration-700 flex flex-col justify-end items-center ease-in-out bg-corousel_2 bg-cover bg-center bg-no-repeat" data-carousel-item="">
                        <div class="absolute z-10 xs:h-20 2xl:h-40 w-full bg-black opacity-40"></div>
                        <p class="font-poppins z-20 font-semibold text-white xs:text-lg 2xl:text-3xl">Benny Backman Concert</p>
                        <p class="font-poppins xs:pb-2 2xl:pb-9 xs:mt-1 2xl:mt-3 z-20 font-normal mx-4 2xl:mx-96 text-center text-white xs:text-sm 2xl:text-xl">Join us for an unforgettable Benny concert in Jakarta, featuring all his greatest hits</p>
                    </div>
                    <div class="hidden duration-700 flex flex-col justify-end items-center ease-in-out bg-corousel_3 bg-cover bg-center bg-no-repeat" data-carousel-item="">
                        <div class="absolute z-10 xs:h-20 2xl:h-40 w-full bg-black opacity-40"></div>
                        <p class="font-poppins z-20 font-semibold text-white xs:text-lg 2xl:text-3xl">Beno Fikri Concert</p>
                        <p class="font-poppins xs:pb-2 2xl:pb-9 xs:mt-1 2xl:mt-3 z-20 font-normal mx-4 2xl:mx-96 text-center text-white xs:text-sm 2xl:text-xl">Join us for an unforgettable Beno Fikri in Jakarta, featuring all his greatest hits</p>
                    </div>
                    <div class="hidden duration-700 flex flex-col justify-end items-center ease-in-out bg-corousel_4 bg-cover bg-center bg-no-repeat" data-carousel-item="">
                        <div class="absolute z-10 xs:h-20 2xl:h-40 w-full bg-black opacity-40"></div>
                        <p class="font-poppins z-20 font-semibold text-white xs:text-lg 2xl:text-3xl">Buddies Beby Concert</p>
                        <p class="font-poppins xs:pb-2 2xl:pb-9 xs:mt-1 2xl:mt-3 z-20 font-normal mx-4 2xl:mx-96  text-center text-white xs:text-sm 2xl:text-xl">Join us for an unforgettable Buddies Beby in Jakarta, featuring all his greatest hits</p>
                    </div>
                    <div class="hidden duration-700 flex flex-col justify-end items-center ease-in-out bg-corousel_5 bg-cover bg-center bg-no-repeat" data-carousel-item="">
                        <div class="absolute z-10 xs:h-20 2xl:h-40 w-full bg-black opacity-40"></div>
                        <p class="font-poppins z-20 font-semibold text-white xs:text-lg 2xl:text-3xl">Revano Concert</p>
                        <p class="font-poppins xs:pb-2 2xl:pb-9 xs:mt-1 2xl:mt-3 z-20 font-normal mx-4 2xl:mx-96  text-center text-white xs:text-sm 2xl:text-xl">Join us for an unforgettable Revano in Jakarta, featuring all his greatest hits</p>
                    </div>
                </div>
                <button type="button" class="absolute top-60 sm:top-96 2xl:top-100 left-0 ml-4 2xl:left-64 w-12 h-12 transform -translate-y-1/2 z-30 flex items-center justify-center text-white" data-carousel-prev>
                    <svg class="w-7 h-7 2xl:w-12 2xl:h-12 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
                    </svg>
                    <span class="sr-only">Previous</span>
                </button>
                <button type="button" class="absolute top-60 sm:top-96 2xl:top-100 right-0 mr-4 2xl:right-80 w-12 h-12 transform -translate-y-1/2 z-30 flex items-center justify-center text-white" data-carousel-next>
                    <svg class="w-7 h-7 2xl:w-12 2xl:h-12 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                    </svg>
                    <span class="sr-only">Next</span>
                </button>
            </div>
        </div>
    </div>



    <!-- About Us -->
    <div id="aboutus" class="xs:h-140 md:h-112 w-full xs:-mt-36 2xl:mt-5 bg-custom-third pt-8 px-4 ">
        <div data-aos="fade-zoom" class="flex flex-col items-center ">
            <p class="font-poppins font-bold text-custom-secondary text-2xl md:text-4xl lg:text-5xl">About Us</p>
            <p class="font-poppins font-normal text-custom-fourth mt-3 text-md md:text-xl lg:text-2xl w-full lg:w-104 text-center mx-auto">Our dedicated team is passionate about making your event extraordinary</p>
        </div>
        <div class="grid grid-cols-1  md:grid-cols-3 gap-12 lg:pr-48 lg:pl-48 pt-20">
            <div data-aos="fade-right" class="relative ">
                <div  class="shadow-lg bg-hannan  shadow-custom-secondary bg-cover bg-center rounded-2xl xs:h-96 2xl:h-99 flex flex-col items-center justify-center text-white font-bold"></div>
                <div class="h-14 rounded-lg bg-custom-secondary absolute inset-x-8 -mt-7 z-10 flex items-center justify-center shadow-sm shadow-custom-secondary">
                    <p class="font-poppins font-semibold text-white xs:text-2xl md:text-base 2xl:text-2xl py-1 ">Rais Hannan R</p>
                </div>
            </div>
            <div data-aos="fade-right" class="relative">
                <div  class="shadow-lg bg-rayhan  shadow-custom-secondary bg-cover bg-center rounded-2xl xs:h-96 2xl:h-99 flex flex-col items-center justify-center text-white font-bold"></div>
                <div class="h-14 rounded-lg bg-custom-secondary absolute inset-x-8 -mt-7 z-10 flex items-center justify-center shadow-sm shadow-custom-secondary">
                    <p class="font-poppins font-semibold text-white xs:text-2xl md:text-base 2xl:text-2xl py-1 flex justify-center items-center text-center">M Rayhan Maulana</p>
                </div>
            </div>
            <div data-aos="fade-right" class="relative">
                <div  class="shadow-lg bg-rakha  shadow-custom-secondary bg-cover bg-center rounded-2xl xs:h-96 2xl:h-99 flex flex-col items-center justify-center text-white font-bold"></div>
                <div class="h-14 rounded-lg bg-custom-secondary absolute inset-x-8 -mt-7 z-10 flex items-center justify-center shadow-sm shadow-custom-secondary">
                    <p class="font-poppins font-semibold text-white xs:text-2xl md:text-base 2xl:text-2xl py-1 ">Rakha Yuda W</p>
                </div>
            </div>
        </div>
    </div>

  <!-- Footer -->
    <footer data-aos="fade-zoom" class="h-96 w-full bg-footer bg-cover bg-center p-8">
        <div class="flex justify-center">
            <p class="font-popins text-white font-bold text-3xl ">Contact Us</p>
        </div>
        <div class=" flex justify-center items-center">
            <div class="mt-6 xs:w-52 2xl:w-94 h-1 bg-custom-secondary"></div>
        </div>
        <div class=" flex justify-center items-center">
            <p class="text-center font-poppins font-normal text-xl xs:mx-5 2xl:mx-101 mt-4 text-white">If you need assistance, feel free to contact me anytime. I'm here to help!</p>
        </div>
        <div class="flex xs:flex-col 2xl:flex-row justify-between items-center h-12 xs:mx-2 2xl:mx-101 mt-12">
            <div class="w-1/2 h-full  justify-center items-center flex gap-2">
                <a href="#">
                    <div class="bg-mail bg-contain h-7 flex items-center w-10 bg-no-repeat mr-2"></div>
                </a>
                <a href="#">
                    <div class="bg-instagram bg-contain h-7 flex items-center w-10 bg-no-repeat"></div>
                </a>
                <a href="#">
                    <div class="bg-facebook bg-contain h-7 flex items-center w-10 bg-no-repeat"></div>
                </a>
                <a href="#">
                    <div class="bg-wa bg-contain h-7 flex items-center w-10 bg-no-repeat"></div>
                </a>
            </div>
            <div class="w-1/2 h-full ">
                <a href="#">
                    <div class=" h-full xs:mx-2 xs:mt-4 2xl:mx-20 hover:bg-cyan-300 transition-colors duration-300 bg-custom-secondary flex justify-center items-center rounded-xl">
                        <p class="text-white font-poppins font-semibold">Chat Me</p>
                    </div>
                </a>
            </div>
        </div>
   </footer>
@endsection
