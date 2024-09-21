<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Forget Password</title>
    @vite('resources/css/app.css')
    @vite('resources/js/forgetPassword.js')
    @include('notify::components.notify')

    @notifyCss
</head>

<body class="flex justify-center h-screen w-full bg-gray-100 items-center">
    <x:notify::notify />

    <div class="h-auto w-full max-w-4xl bg-white rounded-3xl flex flex-col shadow-2xl p-6">
        <a href="{{ route('signIn') }}"
            class="w-fit cursor-pointer font-poppins font-semibold text-lg text-red-500 hover:scale-105 transition-all duration-300">
            Back</a>
        <div class="grid md:grid-cols-2 grid-cols-1 h-full py-8 px-5 gap-7">
            <div class="bg-reset_pw bg-contain bg-no-repeat bg-center h-64 w-full hidden md:block"></div>
            <div class="flex flex-col items-center">
                <p class="font-poppins text-3xl font-bold text-black mb-6">Reset Password</p>

                <!-- Form Input Email -->
                <form class="w-full flex flex-col items-center" method="POST" action="{{ route('forgetPassword') }}">
                    @csrf
                    <input type="email" name="email" placeholder="Email"
                        class="w-full px-4 text-lg text-black font-poppins font-normal rounded-2xl h-14 bg-white  border-2 border-gray-300 focus:border-[#F05252] focus:outline-none focus:ring-0 focus:ring-offset-0">
                    @if ($errors->has('email'))
                        <p class="text-red-500 text-sm mt-1">{{ $errors->first('email') }}</p>
                    @elseif($errors->has('credentials'))
                        <p class="text-red-500 text-sm  mt-1">{{ $errors->first('credentials') }} </p>
                    @endif
                    <button id="reset-password-btn" type="submit"
                        class="mt-5 hover:scale-105 transition-all duration-300 w-full max-w-sm px-4 py-3 rounded-xl bg-cus text-white font-poppins font-semibold text-lg">
                        Send
                    </button>
                </form>
            </div>
        </div>
    </div>

    @notifyJs
</body>

</html>
