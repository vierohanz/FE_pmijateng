<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Profile</title>

    @vite('resources/css/app.css')
    @vite('resources/js/profile.js')
</head>

<body>
    <div class="grid grid-cols-1 md:grid-cols-10 h-auto md:h-screen w-full">
        <!-- Sidebar -->
        <div class="col-span-3 bg-[#DA251D] flex-col justify-start pb-10 items-center flex pt-10 md:pt-14 px-4">

            <div class="w-48 md:w-72 h-48 md:h-72 bg-profile bg-cover border-2 border-white rounded-full cursor-pointer"
                id="profilePicture"></div>
            <input type="file" id="fileInput" class="hidden" accept="image/*">

            <div class="w-full mt-4 justify-center items-center flex flex-col">
                <p class="font-poppins text-xl md:text-2xl font-semibold text-white">Rais Hannan Rizanto</p>
                <p class="font-poppins text-lg md:text-xl font-normal text-white">rizantohannan@gmail.com</p>
            </div>

            <div class="h-1 w-full bg-white my-6 md:my-10"></div>
            <div class="w-full px-8 md:px-12 mb-4">
                <a href="#"
                    class="w-full bg-red-500 flex items-center px-5 hover:scale-105 duration-300 transition-all rounded-xl space-x-4 md:space-x-5 h-12 md:h-16">
                    <svg xmlns="http://www.w3.org/2000/svg" class="ionicon w-8 md:w-12 h-8 md:h-12"
                        viewBox="0 0 512 512">
                        <rect x="32" y="80" width="448" height="256" rx="16" ry="16"
                            transform="rotate(180 256 208)" fill="none" stroke="#fff" stroke-linejoin="round"
                            stroke-width="32" />
                        <path fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="32" d="M64 384h384M96 432h320" />
                        <circle cx="256" cy="208" r="80" fill="none" stroke="#fff"
                            stroke-linecap="round" stroke-linejoin="round" stroke-width="32" />
                        <path
                            d="M480 160a80 80 0 01-80-80M32 160a80 80 0 0080-80M480 256a80 80 0 00-80 80M32 256a80 80 0 0180 80"
                            fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="32" />
                    </svg>
                    <p class="font-poppins text-base md:text-xl font-medium text-white">Transaction</p>
                </a>
            </div>
            <div class="w-full px-8 md:px-12">
                <a href="#"
                    class="w-full bg-red-500 flex px-5 items-center hover:scale-105 duration-300 transition-all rounded-xl space-x-4 md:space-x-5 h-12 md:h-16">
                    <svg xmlns="http://www.w3.org/2000/svg" class="ionicon w-8 md:w-12 h-8 md:h-12"
                        viewBox="0 0 512 512">
                        <path d="M256 80a176 176 0 10176 176A176 176 0 00256 80z" fill="none" stroke="#fff"
                            stroke-miterlimit="10" stroke-width="32" />
                        <path
                            d="M200 202.29s.84-17.5 19.57-32.57C230.68 160.77 244 158.18 256 158c10.93-.14 20.69 1.67 26.53 4.45 10 4.76 29.47 16.38 29.47 41.09 0 26-17 37.81-36.37 50.8S251 281.43 251 296"
                            fill="none" stroke="#fff" stroke-linecap="round" stroke-miterlimit="10"
                            stroke-width="28" />
                        <circle cx="250" cy="348" r="20" stroke="#fff" fill="#fff" />
                    </svg>
                    <p class="font-poppins text-base md:text-xl font-medium text-white">Information</p>
                </a>
            </div>
        </div>

        <div class="col-span-7 p-4 md:p-5 bg-white">
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
    </div>

    <script>
        const profilePicture = document.getElementById('profilePicture');
        const fileInput = document.getElementById('fileInput');

        // Function to load image from LocalStorage
        function loadProfilePicture() {
            const savedImage = localStorage.getItem('profileImage');
            if (savedImage) {
                profilePicture.style.backgroundImage = `url(${savedImage})`;
            }
        }

        // Load profile picture on page load
        window.onload = function() {
            loadProfilePicture();
        };

        // Add click event to trigger file input when profile picture is clicked
        profilePicture.addEventListener('click', () => {
            fileInput.click();
        });

        // Handle file input change event
        fileInput.addEventListener('change', function(event) {
            const file = event.target.files[0];

            if (file) {
                const reader = new FileReader();

                reader.onload = function(e) {
                    const imageUrl = e.target.result;

                    // Update the profile picture
                    profilePicture.style.backgroundImage = `url(${imageUrl})`;

                    // Save the image URL to LocalStorage
                    localStorage.setItem('profileImage', imageUrl);
                };

                reader.readAsDataURL(file);
            }
        });
    </script>
</body>

</html>
