@extends('profile')
@section('content')
    @vite('resources/js/changePassword.js')
    @vite('resources/css/app.css')
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <div class="col-span-7 h-screen p-4 md:p-5 bg-white">
        <div class="w-full h-full mx-auto bg-gray-100 shadow-md rounded-lg p-4 md:p-6">
            <!-- Form Fields -->
            <form method="POST" action="{{ route('updatePassword') }}">
                @csrf
                <div class="mt-8 space-y-6">
                    <div>
                        <label class="block text-gray-700 font-semibold font-poppins text-lg mb-2">Password</label>
                        <div class="relative">
                            <input type="password" id="password" name="current_password"
                                class="w-full mt-2 px-4 text-base md:text-lg text-black font-poppins font-normal rounded-2xl h-12 md:h-14 bg-white border-2 border-transparent focus:border-[#F05252] focus:outline-none focus:ring-0 focus:ring-offset-0">
                            <button type="button" class="absolute inset-y-0 right-0 pr-3 flex items-center text-gray-600"
                                onclick="togglePasswordVisibility('password')">
                                <span id="password-eye" class="material-icons">visibility</span>
                            </button>
                        </div>
                    </div>
                    <div>
                        <label class="block text-gray-700 font-semibold font-poppins text-lg mb-2">Password baru</label>
                        <div class="relative">
                            <input type="password" id="new-password" name="password"
                                class="w-full mt-2 px-4 text-base md:text-lg text-black font-poppins font-normal rounded-2xl h-12 md:h-14 bg-white border-2 border-transparent focus:border-[#F05252] focus:outline-none focus:ring-0 focus:ring-offset-0">
                            <button type="button" class="absolute inset-y-0 right-0 pr-3 flex items-center text-gray-600"
                                onclick="togglePasswordVisibility('new-password')">
                                <span id="new-password-eye" class="material-icons">visibility</span>
                            </button>
                        </div>
                    </div>
                    <div>
                        <label class="block text-gray-700 font-semibold font-poppins text-lg mb-2">Konfirmasi
                            password</label>
                        <input type="password" id="confirm-password" name="password_confirmation"
                            class="w-full mt-2 px-4 text-base md:text-lg text-black font-poppins font-normal rounded-2xl h-12 md:h-14 bg-white border-2 border-transparent focus:border-[#F05252] focus:outline-none focus:ring-0 focus:ring-offset-0">
                        @error('password_confirmation')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mt-6 flex justify-end">
                        <button type="submit"
                            class="px-6 py-2 text-white hover:scale-105 duration-300 transition-all bg-red-500 hover:bg-red-600 rounded-lg focus:outline-none focus:ring-2 focus:ring-offset-2 font-poppins font-semibold focus:ring-red-500">
                            Save Changes
                        </button>
                    </div>
                </div>
        </div>


        </form>
    </div>
    </div>
@endsection
