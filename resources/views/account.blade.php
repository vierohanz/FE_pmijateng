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
                                    <p class="text-sm text-green-500">Email anda sudah terverifikasi </p>
                                </div> 
                            @else
                                <!-- Container for Resend Verification Email Button -->
                                <div class="flex justify-end items-center mt-2 space-x-2">
                                    <p class="text-sm text-red-500">Email anda belum diverifikasi, </p>
                                    <button type="button" id="resendVerification" class="text-sm text-red-500 hover:underline">
                                    Kirim Ulang Verifikasi Email
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

    @if (Session::has('add'))
        <!-- Initialize Toastr for success message -->
        <script>
            toastr.options = {
                "positionClass": "toast-bottom-right",
                "preventDuplicates": true,
                "progressBar": true,
                "timeOut": "5000",
                "debug": true,
                "newestOnTop": false,
                "progressBar": true,
                "positionClass": "toast-bottom-right",
                "preventDuplicates": true,

            };
            toastr.success("{{ Session::get('add') }}", "{{ Session::get('title') }}");
        </script>
    @elseif (Session::has('update'))
        <!-- Initialize Toastr for info message -->
        <script>
            toastr.options = {
                "positionClass": "toast-bottom-right",
                "preventDuplicates": true,
                "progressBar": true,
                "timeOut": "5000",
                "debug": true,
                "newestOnTop": false,
                "progressBar": true,
                "positionClass": "toast-bottom-right",
                "preventDuplicates": true,

            };
            toastr.info("{{ Session::get('update') }}", "{{ Session::get('title') }}");
        </script>
    @elseif (Session::has('delete'))
        <!-- Initialize Toastr for delete success message -->
        <script>
            toastr.options = {
                "positionClass": "toast-bottom-right",
                "preventDuplicates": true,
                "progressBar": true,
                "timeOut": "5000",
                "debug": true,
                "newestOnTop": false,
                "progressBar": true,
                "positionClass": "toast-bottom-right",
                "preventDuplicates": true,


            };
            toastr.success("{{ Session::get('delete') }}", "{{ Session::get('title') }}");
        </script>
    @elseif (Session::has('error'))
        <!-- Initialize Toastr for error message -->
        <script>
            toastr.options = {
                "positionClass": "toast-bottom-right",
                "preventDuplicates": true,
                "progressBar": true,
                "timeOut": "5000",
                "debug": true,
                "newestOnTop": false,
                "progressBar": true,
                "positionClass": "toast-bottom-right",
                "preventDuplicates": true,
            };
            toastr.error("{{ Session::get('error') }}", "{{ Session::get('title') }}");
        </script>
    @endif

    <script>
        document.getElementById('resendVerification').addEventListener('click', function() {
            fetch('/resend-verification', {
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}',
                    'Content-Type': 'application/json',
                },
                body: JSON.stringify({})
            })
            .then(response => response.json())
            .then(data => {
                toastr.success('Verification email has been sent.');
            })
            .catch(error => {
                console.error('Error:', error);
                toastr.error('There was an error sending the verification email.');
            });
        });
    </script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css"
        integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"
        integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
@endsection
