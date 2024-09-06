@extends('profile')
@section('content')
    @vite('resources/js/historyTransaction.js')
    @vite('resources/css/app.css')

    <div class="col-span-7 h-screen p-4 md:p-5 bg-white">
        <div class="p-4 md:p-5 bg-gray-100 rounded-lg">
            <!-- Status Tabs -->
            <div class="flex justify-start space-x-2 mb-6 ">
                <button data-status="all" class="status-button px-6 py-2 bg-red-500 text-white rounded-md">Semua
                    Status</button>
                <button data-status="completed"
                    class="status-button px-6 py-2 bg-gray-200 text-gray-800 rounded-md">Selesai</button>
                <button data-status="in-progress"
                    class="status-button px-6 py-2 bg-gray-200 text-gray-800 rounded-md">Proses</button>
                <button data-status="verification"
                    class="status-button px-6 py-2 bg-gray-200 text-gray-800 rounded-md">Verifikasi</button>
            </div>

            <!-- Card List -->
            <div class="space-y-4" id="card-list">
                <!-- Card 1 -->
                <div class="card flex-row flex items-start bg-white p-4 rounded-lg shadow-md" data-status="completed">
                    <img class="w-32 h-32 bg-cover bg-no-repeat bg-corousel_2 rounded-md mr-4">
                    <div class="flex justify-between items-start h-32 w-full ">
                        <div>
                            <h2 class="text-lg font-semibold">Midle meeting room</h2>
                            <p class="text-sm text-gray-500">xxxxxx (kode pemesanan)</p>
                            <p class="text-sm text-gray-600 mt-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                Sed
                                do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        </div>
                        <div class="text-right flex flex-col justify-between h-full ">
                            <p class="text-sm text-gray-400">07/12/2023</p>
                            <span class="bg-green-500 text-white px-3 py-1 rounded-full text-sm">Selesai</span>
                        </div>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="card flex-row flex items-start bg-white p-4 rounded-lg shadow-md" data-status="completed">
                    <img class="w-32 h-32 bg-cover bg-no-repeat bg-corousel_2 rounded-md mr-4">
                    <div class="flex justify-between items-start h-32 w-full ">
                        <div>
                            <h2 class="text-lg font-semibold">Midle meeting room</h2>
                            <p class="text-sm text-gray-500">xxxxxx (kode pemesanan)</p>
                            <p class="text-sm text-gray-600 mt-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                Sed
                                do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        </div>
                        <div class="text-right flex flex-col justify-between h-full ">
                            <p class="text-sm text-gray-400">07/12/2023</p>
                            <span class="bg-green-500 text-white px-3 py-1 rounded-full text-sm">Selesai</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
