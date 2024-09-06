@extends('profile')
@section('content')
    @vite('resources/js/account.js')
    @vite('resources/css/app.css')

    <div class="col-span-7 h-screen p-4 md:p-5 bg-white">
        <div class="w-full h-full mx-auto bg-gray-100 shadow-md rounded-lg p-4 md:p-6">
            <!-- Form Fields -->
            <div class="mt-8 space-y-6">
                <div>
                    <label class="block text-gray-700 font-semibold font-poppins text-lg mb-2">Name</label>
                    <input type="text"
                        class="w-full mt-2 px-4 text-base md:text-lg text-black font-poppins font-normal rounded-2xl h-12 md:h-14 bg-white border-2 border-transparent focus:border-[#DA251D] focus:outline-none focus:ring-0 focus:ring-offset-0">
                </div>

                <div>
                    <label class="block text-gray-700 font-semibold font-poppins text-lg mb-2">Email Address</label>
                    <input type="text"
                        class="w-full mt-2 px-4 text-base md:text-lg text-black font-poppins font-normal rounded-2xl h-12 md:h-14 bg-white border-2 border-transparent focus:border-[#DA251D] focus:outline-none focus:ring-0 focus:ring-offset-0">
                </div>

                <div>
                    <label class="block text-gray-700 font-semibold font-poppins text-lg mb-2">Username</label>
                    <input type="text"
                        class="w-full mt-2 px-4 text-base md:text-lg text-black font-poppins font-normal rounded-2xl h-12 md:h-14 bg-white border-2 border-transparent focus:border-[#DA251D] focus:outline-none focus:ring-0 focus:ring-offset-0">
                </div>

                <div>
                    <label class="block text-gray-700 font-semibold font-poppins text-lg mb-2">Password</label>
                    <input type="password"
                        class="w-full mt-2 px-4 text-base md:text-lg text-black font-poppins font-normal rounded-2xl h-12 md:h-14 bg-white border-2 border-transparent focus:border-[#DA251D] focus:outline-none focus:ring-0 focus:ring-offset-0">
                </div>

                <div>
                    <label class="block text-gray-700 font-semibold font-poppins text-lg mb-2">Birth Date</label>
                    <input id="birth-day" type="text" placeholder="dd/mm/yy"
                        class="w-full mt-2 px-4 text-base md:text-lg text-black font-poppins font-normal rounded-2xl h-12 md:h-14 bg-white border-2 border-transparent focus:border-[#DA251D] focus:outline-none focus:ring-0 focus:ring-offset-0">

                </div>
            </div>

            <div class="mt-6 flex justify-end">
                <button
                    class="px-6 py-2 text-white hover:scale-105 duration-300 transition-all bg-red-500 hover:bg-red-600 rounded-lg focus:outline-none focus:ring-2 focus:ring-offset-2 font-poppins font-semibold focus:ring-red-500">
                    Save Changes
                </button>
            </div>
        </div>
    </div>
@endsection
