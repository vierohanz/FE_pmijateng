<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up</title>
    @vite('resources/css/app.css')
    @vite('resources/js/signUp.js')
    @include('notify::components.notify')
    @notifyCss

</head>

<body class="overflow-x-hidden">
    <x:notify::notify />
    <div class="notify-container">
        <x:notify::notify />
    </div>
    <div class="w-full bg-[#EFEFEF] py-10 px-5 xl:py-24 xl:px-56">
        <div class="h-full w-full grid grid-cols-1 xl:grid-cols-5 bg-[#DA251D] rounded-badge shadow-2xl">
            <div
                class="h-full w-full col-span-1 xl:col-span-3 animate-slide-out bg-custom-third rounded-badge p-6 grid grid-rows-10">
                <div class="row-span-9 w-full h-full py-5 flex flex-col justify-center items-center">
                    <form action="{{ route('signUp') }}" method="POST"
                        class="flex flex-col items-center w-full max-w-md">
                        @csrf
                        <p class="font-josefinSans font-bold text-4xl text-custom-secondary">Sign Up</p>
                        <p class="font-poppins mt-2 font-normal text-xl text-gray-400">Fill an input form below</p>

                        <div class="mt-9 w-full">
                            @foreach (['name' => 'Name', 'email' => 'Email', 'password' => 'Password', 'password_confirmation' => 'Password Confirmation'] as $field => $label)
                                <div class="mt-4">
                                    <label
                                        class="font-poppins font-medium text-black text-lg">{{ $label }}</label>
                                    <input
                                        type="{{ $field === 'password' || $field === 'password_confirmation' ? 'password' : 'text' }}"
                                        name="{{ $field }}"
                                        class="w-full px-4 text-lg text-black font-poppins font-normal rounded-2xl h-14 bg-gray-100 border-2 border-transparent focus:border-[#DA251D] focus:outline-none focus:ring-0 focus:ring-offset-0">
                                    @if ($errors->has($field))
                                        <p class="text-red-500 text-sm mt-1">{{ $errors->first($field) }}</p>
                                    @endif
                                </div>
                            @endforeach
                        </div>

                        <div class="mt-4 w-full">
                            <img src="{{ captcha_src() }}" alt="captcha" class="w-full  mb-2">
                            <input type="text" name="captcha"
                                class="form-control focus:outline-none focus:ring-0 focus:ring-offset-0 focus:border-[#DA251D] text-black font-poppins w-full @error('captcha') is-invalid @enderror"
                                placeholder="insert the sum result above">
                            @error('captcha')
                                <span class="text-red-500 text-sm">{{ $message }}</span>
                            @enderror
                        </div>

                        <button id="reset-password-btn" type="submit"
                            class="w-full h-16 bg-[#DA251D] flex justify-center items-center text-white font-josefinSans font-bold text-xl rounded-2xl my-5 hover:scale-105 transition-all duration-300">
                            Sign Up
                        </button>


                    </form>
                </div>
            </div>

            <div
                class="h-full hidden xl:flex col-span-2 rounded-r-badge p-9 bg-[#DA251D] flex-col items-center justify-center">
                <p class="font-poppins font-extrabold text-5xl text-white text-center">Welcome Back!</p>
                <p class="mt-7 font-poppins font-normal text-2xl text-white text-center">To keep connected with us,
                    please enter your account.</p>
                <div class="w-64 h-16 mt-10">
                    <a href="{{ route('signIn') }}" onclick="this.querySelector('div').classList.add('animate-click');">
                        <div
                            class="border-2 border-custom-third flex items-center justify-center rounded-badge w-full h-full">
                            <p class="font-poppins font-bold text-lg text-white">Sign In</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>

    @notifyJs
</body>

</html>
