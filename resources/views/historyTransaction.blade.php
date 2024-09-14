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
                        </button>
                    </li>
                    <li>
                        <button data-status="success"
                            class="status-button px-6 py-2 bg-gray-200 text-gray-800 font-poppins font-normal xl:font-medium rounded-xl">Selesai</button>
                    </li>
                    <li>
                        <button data-status="pending"
                            class="status-button px-6 py-2 bg-gray-200 text-gray-800 font-poppins font-normal xl:font-medium rounded-xl">Proses</button>
                    </li>
                    <li>
                        <button data-status="failed"
                            class="status-button px-6 py-2 bg-gray-200 text-gray-800 font-poppins font-normal xl:font-medium rounded-xl">Gagal</button>
                    </li>
                </ul>
            </div>


            <!-- Card List -->
            <div class="space-y-4" id="card-list">
                @if (is_array($bookings) && count($bookings) > 0)
                    @foreach ($bookings as $booking)
                        <!-- Card 1 -->
                        <a href="{{ route('detailTransaction', ['user_email' => $booking['user_email'], 'id' => $booking['id']]) }} "
                            class="">
                            <div class="card flex flex-col md:flex-row items-start bg-white p-4 mt-4 hover:scale-95 transition-all duration-300 rounded-lg shadow-md"
                                data-status="{{ $booking['transaction_status'] }}">
                                <img class="w-full md:w-52 h-44 bg-cover bg-no-repeat rounded-md  md:mr-4"
                                    src="{{ $booking['room_image'] }}" alt="Image Meeting Room">
                                <div class="flex h-44 justify-between items-start w-full">
                                    <div>
                                        <h2 class="text-xl font-semibold font-poppins text-black">
                                            {{ str_replace('_', ' ', $booking['room_type']) ?? 'default' }}</h2>
                                        <h3 class="text-s font-semibold font-poppins text-gray">
                                            {{ str_replace('_', ' ', $booking['channel']) ?? 'default' }}</h3>
                                        <p class="text-lg font-poppins text-black">{{ $booking['order_id'] }}</p>
                                        <p class="text-base xl:text-lg font-poppins text-black mt-2"></p>
                                    </div>
                                    <div class="text-right flex flex-col justify-between h-full ">
                                        <p class="text-sm text-gray-400 whitespace-nowrap">
                                            {{ $booking['transaction_date'] }}
                                        </p>
                                        <span
                                            class="justify-center items-center flex px-3 py-1 rounded-full text-sm
                                            {{ $booking['transaction_status'] === 'success' ? 'bg-green-500 text-white' : '' }}
                                            {{ $booking['transaction_status'] === 'pending' ? 'bg-yellow-300 text-white' : '' }}
                                            {{ $booking['transaction_status'] === 'failed' ? 'bg-red-500 text-white' : '' }}">
                                            {{ ucfirst($booking['transaction_status']) }}
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    @endforeach
                @else
                    <p class="text-center">Tidak ada pemesanan</p>
                @endif
            </div>
        </div>
    </div>
@endsection
