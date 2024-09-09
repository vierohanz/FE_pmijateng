@extends('profile')
@section('content')
    @vite('resources/js/account.js')
    @vite('resources/css/app.css')

    <div class="col-span-7 h-screen p-4 md:p-5 bg-white">
        <div class="w-full h-full mx-auto bg-gray-100 shadow-md rounded-lg p-4 md:p-6">
            <!-- Form Fields -->
            <form method="POST" action="{{ route('updateProfile') }}">
                @csrf
                <div class="mt-8 space-y-6">
                    <div>
                        <label class="block text-gray-700 font-semibold font-poppins text-lg mb-2">Name</label>
                        <input type="text" value="{{ session('user')['name'] }}" name="name"
                            class="w-full mt-2 px-4 text-base md:text-lg text-black font-poppins font-normal rounded-2xl h-12 md:h-14 bg-white border-2 border-transparent focus:border-[#DA251D] focus:outline-none focus:ring-0 focus:ring-offset-0">
                    </div>

                    <div>
                        <label class="block text-gray-700 font-semibold font-poppins text-lg mb-2">Email Address</label>
                        <input type="text" value="{{ session('user')['email'] }}" name="email" disabled
                            class="w-full mt-2 px-4 text-base md:text-lg text-black font-poppins font-normal rounded-2xl h-12 md:h-14 bg-white border-2 border-transparent focus:border-[#DA251D] focus:outline-none focus:ring-0 focus:ring-offset-0">

                        @if (session('user')['email_verified_at'] != null)
                            <div class="flex justify-end items-center mt-2 space-x-2">
                                <p class="text-sm text-green-500 font-poppins font-medium">Email anda sudah terverifikasi
                                </p>
                            </div>
                        @else
                            <!-- Container for Resend Verification Email Button -->
                            <div class="flex justify-end items-center mt-2 space-x-2">
                                <p class="text-sm text-custom-primary">Email anda belum diverifikasi, </p>
                                <button type="button" id="resendVerification"
                                    class="text-sm font-poppins font-semibold text-custom-primary hover:text-red-900 transition-all duration-300">
                                    Verifikasi Email
                                </button>
                                </div>
                            @endif

                    </div>

                    <div>
                        <label class="block text-gray-700 font-semibold font-poppins text-lg mb-2">Phone</label>
                        <input type="text" value="{{ session('user')['phone'] ?? '' }}" name="phone"
                            class="w-full mt-2 px-4 text-base md:text-lg text-black font-poppins font-normal rounded-2xl h-12 md:h-14 bg-white border-2 border-transparent focus:border-[#DA251D] focus:outline-none focus:ring-0 focus:ring-offset-0">
                    </div>
                </div>

                <div class="mt-6 flex justify-end">
                    <button type="submit"
                        class="px-6 py-2 text-white hover:scale-105 duration-300 transition-all bg-red-500 hover:bg-red-600 rounded-lg focus:outline-none focus:ring-2 focus:ring-offset-2 font-poppins font-semibold focus:ring-red-500">
                        Save Changes
                    </button>
                </div>
            </form>
        </div>

    </div>
@endsection
