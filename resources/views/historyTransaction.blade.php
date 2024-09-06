@extends('profile')
@section('content')
    @vite('resources/js/historyTransaction.js')
    @vite('resources/css/app.css')

    <div class="col-span-7 h-full p-4 md:p-5 bg-white">
        <div class="p-4 md:p-5 bg-gray-100 rounded-lg">
            <!-- Status Tabs -->
            <div class="mb-6">
                <ul class="flex flex-wrap justify-start space-x-2">
                    <li>
                        <button data-status="all"
                            class="status-button px-6 py-2 bg-custom-primary font-poppins font-normal xl:font-medium text-white rounded-xl">Semua
                            Status</button>
                    </li>
                    <li>
                        <button data-status="completed"
                            class="status-button px-6 py-2 bg-gray-200 text-gray-800 font-poppins font-normal xl:font-medium rounded-xl">Selesai</button>
                    </li>
                    <li>
                        <button data-status="in-progress"
                            class="status-button px-6 py-2 bg-gray-200 text-gray-800 font-poppins font-normal xl:font-medium rounded-xl">Proses</button>
                    </li>
                    <li>
                        <button data-status="verification"
                            class="status-button px-6 py-2 bg-gray-200 text-gray-800 font-poppins font-normal xl:font-medium rounded-xl">Verifikasi</button>
                    </li>
                </ul>
            </div>


            <!-- Card List -->
            <div class="space-y-4" id="card-list">
                <!-- Card 1 -->
                <div class="card flex flex-col md:flex-row items-start bg-white p-4 rounded-lg shadow-md"
                    data-status="completed">
                    <img class="w-full md:w-52 h-44 bg-cover bg-no-repeat bg-corousel_2 rounded-md  md:mr-4">
                    <div class="flex h-44 justify-between items-start w-full">
                        <div>
                            <h2 class="text-xl font-semibold font-poppins text-black">Midle meeting room</h2>
                            <p class="text-lg font-poppins text-black">xxxxxx (kode pemesanan)</p>
                            <p class="text-base xl:text-lg font-poppins text-black mt-2">Lorem ipsum dolor sit amet,
                                consectetur
                                adipiscing elit. Sed
                                do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        </div>
                        <div class="text-right flex flex-col justify-between h-full ">
                            <p class="text-sm text-gray-400">07/12/2023</p>
                            <span
                                class="justify-center items-center flex bg-green-500 text-white px-3 py-1 rounded-full text-sm">Selesai</span>
                        </div>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="card flex flex-col md:flex-row items-start bg-white p-4 rounded-lg shadow-md"
                    data-status="completed">
                    <img class="w-full md:w-52 h-44 bg-cover bg-no-repeat bg-corousel_2 rounded-md  md:mr-4">
                    <div class="flex h-44 justify-between items-start w-full">
                        <div>
                            <h2 class="text-xl font-semibold font-poppins text-black">Midle meeting room</h2>
                            <p class="text-lg font-poppins text-black">xxxxxx (kode pemesanan)</p>
                            <p class="text-base xl:text-lg font-poppins text-black mt-2">Lorem ipsum dolor sit amet,
                                consectetur
                                adipiscing elit. Sed
                                do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        </div>
                        <div class="text-right flex flex-col justify-between h-full ">
                            <p class="text-sm text-gray-400">07/12/2023</p>
                            <span
                                class="justify-center items-center flex bg-green-500 text-white px-3 py-1 rounded-full text-sm">Selesai</span>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
@endsection
