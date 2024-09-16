<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign In</title>
    @vite('resources/css/app.css')
    @vite('resources/js/signIn.js')
    @include('notify::components.notify')
    @notifyCss
</head>

<body class="overflow-x-hidden bg-white">
    <x:notify::notify />
    <div class="notify-container">
        <x:notify::notify />
    </div>
    <div class=" w-full bg-[#EFEFEF] py-10 px-5 xl:py-24 xl:px-56">
        <div class="h-full w-full grid grid-cols-1 xl:grid-cols-5 bg-[#DA251D] rounded-badge shadow-2xl">
            <div
                class="h-full hidden xl:flex col-span-2 rounded-l-badge p-7 bg-[#DA251D] flex-col items-center justify-cente">
                <div class="w-full ">
                    <a href="{{ route('index') }}"
                        class=" font-poppins text-white text-lg hover:text-xl transition-all duration-300 font-semibold">Back</a>
                </div>
                <div
                    class="h-full hidden xl:flex col-span-2 rounded-l-badge p-9 bg-[#DA251D] flex-col items-center justify-center">
                    <p class="font-poppins font-extrabold text-5xl text-white text-center">Hallo, Kawan!</p>
                    <p class="mt-7 font-poppins font-normal text-2xl text-white text-center">Tolong buat akun terlebih
                        dahulu
                        sebelum melanjutkan.</p>
                    <div class="w-64 h-16 mt-10">
                        <a href="{{ route('signUp') }}"
                            onclick="this.querySelector('div').classList.add('animate-click');">
                            <div
                                class="border-2 border-custom-third flex items-center justify-center rounded-badge w-full h-full">
                                <p class="font-poppins font-bold text-lg text-white">Sign Up</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div
                class="h-full w-full col-span-1 xl:col-span-3 animate-slide-in bg-custom-third rounded-badge p-6 grid grid-rows-10">
                <div class="row-span-1 w-full h-full flex space-x-2 items-center justify-end">
                    <div class="flex-col justify-end items-end text-end">
                        <p class="font-poppins font-bold text-custom-primary text-xl">PUSDIKLAT</p>
                        <p class="font-poppins font-normal text-custom-secondary text-sm">Provinsi Jawa Tengah</p>
                    </div>
                    <div class="h-full w-2 bg-custom-primary"></div>
                    <div class="flex">
                        <div class="bg-logo_pmi bg-cover h-16 w-16"></div>
                        <div class="ml-3 font-poppins text-black font-bold text-sm">
                            <p>Palang</p>
                            <p>Merah</p>
                            <p>Indonesia</p>
                        </div>
                    </div>
                </div>
                <div class="row-span-9 w-full h-full py-10 justify-center items-start flex">
                    <form action="{{ route('signIn') }}" method="POST"
                        class="flex flex-col items-center w-full max-w-md">
                        @csrf

                        <p class="font-josefinSans font-bold text-4xl text-custom-secondary">Sign In</p>
                        <p class="font-poppins mt-2 font-normal text-xl text-gray-400">Masukkan email dan password</p>
                        <div class="mt-9 w-full xl:w-97">
                            <div class="">
                                <p class="font-poppins font-medium text-black text-lg">Email</p>
                                <input type="text" name="email"
                                    class="autofill:border-none autofill:bg-none w-full px-4 text-lg text-black font-poppins font-normal rounded-2xl h-14 bg-gray-100 border-2 border-transparent focus:border-[#DA251D] focus:outline-none focus:ring-0 focus:ring-offset-0">
                                @if ($errors->has('email'))
                                    <p class="text-red-500 text-sm mt-1">{{ $errors->first('email') }}</p>
                                @elseif($errors->has('credentials'))
                                    <p class="text-red-500 text-sm  mt-1">{{ $errors->first('credentials') }}
                                    </p>
                                @endif
                            </div>
                            <div class="mt-4">
                                <p class="font-poppins font-medium text-black text-lg">Password</p>
                                <input type="password" name="password"
                                    class="w-full px-4 text-lg text-black font-poppins font-normal rounded-2xl h-14 bg-gray-100 border-2 border-transparent focus:border-[#DA251D] focus:outline-none focus:ring-0 focus:ring-offset-0">
                                @if ($errors->has('password'))
                                    <p class="text-red-500 text-sm mt-1">{{ $errors->first('password') }}</p>
                                @elseif($errors->has('credentials'))
                                    <p class="text-red-500 text-sm  mt-1">{{ $errors->first('credentials') }}
                                    </p>
                                @endif
                            </div>
                        </div>
                        <div class="flex flex-row  justify-between mt-4 w-full">
                            <label class="relative inline-flex items-center cursor-pointer select-none">
                                <input type="checkbox" value="" class="sr-only peer">
                                <div
                                    class="w-5 h-5 bg-white border-2 rounded-md  border-[#DA251D] peer peer-checked:border-0 peer-checked:bg-[#DA251D]">
                                    <img class=" peer-checked:block "
                                        src="https://raw.githubusercontent.com/Loopple/loopple-public-assets/main/motion-tailwind/img/icons/check.png"
                                        alt="tick">
                                </div>
                                <span class="ml-3 text-base font-medium text-black">Remember me</span>
                            </label>
                            <a href="{{ route('forgetPassword') }}"
                                class="mt-2 sm:mt-0 text-base font-medium text-[#DA251D] hover:scale-110 transition-all duration-300">Lupa
                                password?</a>
                        </div>
                        <div class="mt-4 w-full">
                            <img src="{{ captcha_src() }}" alt="captcha" class="w-full">
                            <input type="text" name="captcha"
                                class="form-control focus:outline-none focus:ring-0 focus:ring-offset-0 focus:border-[#DA251D] text-black font-poppins w-full @error('captcha') is-invalid @enderror"
                                placeholder="masukkan">
                            @error('captcha')
                                <span class="text-red-500 text-sm">{{ $message }}</span>
                            @enderror
                        </div>

                        <button type="submit" id="reset-password-btn"
                            class="w-full h-16 bg-[#DA251D] flex justify-center items-center text-white font-josefinSans font-bold text-xl rounded-2xl my-5 hover:scale-105 transition-all duration-300">
                            Sign In
                        </button>
                        <div class="h-1 flex justify-between w-full items-center ">
                            <div class="w-full h-1 bg-gray-200"></div>
                            <p class="mx-2 font-poppins font-medium ">or</p>
                            <div class="w-full h-1 bg-gray-200"></div>
                        </div>
                        <a href="{{ route('google.redirect') }}"
                            class="flex h-16 w-full mt-4 bg-[#F4F7FE] rounded-2xl justify-center items-center hover:scale-105 transition-all duration-300">
                            <div class="bg-google bg-contain bg-no-repeat h-7 w-10"></div>
                            <span class="font-normal text-black font-poppins text-base rounded-2xl ml-4">Login With
                                Google</span>
                        </a>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @notifyJs

</body>

</html>
