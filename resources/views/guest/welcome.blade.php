@extends('guest.layouts.main')

@section('main')
    <!-- Gambar Latar Belakang -->
    <div class="mix-blend-screen inset-0 bg-black opacity-50"></div>
    <img src="{{ asset('desa.jpg') }}" class="inset-0 w-full h-full object-cover" alt="" style="width: 100vw;">

    <!-- Overlay Gelap (Opsional) -->

    <!-- Konten Teks di Atas Gambar -->

    <div class="absolute top-0 flex flex-col justify-center pl-80 h-full text-white text-4xl poppins-bold tracking-normal">
        <div>
            <h1>EXPLORE BALIs </h1>
        </div>
        <div>
            <h1>WHERE CULTURE MEETS PARADISE</h1>
        </div>
        <div class="absolute flex justify-end  bg-transparent h-96 w-full">
            <div class="absolute bottom-0 right-0">
                <a href="/jelajahi"
                    class="text-white bg-gradient-to-r from-cyan-400 via-cyan-500 to-cyan-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none
                         focus:ring-cyan-300 dark:focus:ring-cyan-800 shadow-lg shadow-cyan-500/50 dark:shadow-lg dark:shadow-cyan-800/80 font-medium rounded-full text-sm px-10 py-2.5 text-center">
                    Explore</a>

            </div>
        </div>
    </div>


    <div class="bg-white p-4 rounded-lg shadow-md w-screen">
        <div class="grid grid-cols-2 gap-4 mr-5 ml-7">
            <!-- Kolom Pertama: Judul dan Deskripsi -->
            <div class="pl-10">
                <h1 class="text-2xl font-semibold mb-4">Distribution Map</h1>
                <p class="text-gray-600 nunito-regulermb-4">Find tourist villages based on the distribution map
                    of districts and cities in Bali.</p>
            </div>
            <!-- Kolom Kedua: Card per Kabupaten -->
            <style>
                .horizontal-scroll::-webkit-scrollbar {
                    display: none;
                }
            </style>
            <div class="w-full overflow-x-scroll horizontal-scroll" style="scrollbar-color: transparent transparent;">
                <div class="flex flex-col justify-between gap-4">
                    <div class="flex flex-row space-x-4 wraper">
                        <div
                            class=" wrapp max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                            <a href="#">
                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                                    Noteworthy technology acquisitions 2021</h5>
                            </a>
                            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest
                                enterprise technology acquisitions of 2021 so far, in reverse chronological
                                order.
                            </p>
                            <a href="/jelajahi?kabupaten=Badung"
                                class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                Kabupaten Badung
                                <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                                </svg>
                            </a>
                        </div>
                        <div
                            class="wrapp max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                            <a href="#">
                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                                    Noteworthy technology acquisitions 2021</h5>
                            </a>
                            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest
                                enterprise technology acquisitions of 2021 so far, in reverse chronological
                                order.
                            </p>
                            <a href="/jelajahi?kabupaten=Gianyar"
                                class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                Kabupaten Gianyar
                                <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                                </svg>
                            </a>
                        </div>
                        <div
                            class="wrapp max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                            <a href="#">
                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                                    Noteworthy technology acquisitions 2021</h5>
                            </a>
                            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest
                                enterprise technology acquisitions of 2021 so far, in reverse chronological
                                order.
                            </p>
                            <a href="/jelajahi?kabupaten=Tabanan"
                                class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                Kabupaten Tabanan
                                <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                                </svg>
                            </a>
                        </div>
                        <div
                            class="wrapp max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                            <a href="#">
                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                                    Noteworthy technology acquisitions 2021</h5>
                            </a>
                            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest
                                enterprise technology acquisitions of 2021 so far, in reverse chronological
                                order.
                            </p>
                            <a href="/jelajahi?kabupaten=Denpasar"
                                class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                Kabupaten Denpasar
                                <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                                </svg>
                            </a>
                        </div>
                        <div
                            class="wrapp max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                            <a href="#">
                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                                    Noteworthy technology acquisitions 2021</h5>
                            </a>
                            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest
                                enterprise technology acquisitions of 2021 so far, in reverse chronological
                                order.
                            </p>
                            <a href="/jelajahi?kabupaten=Tabanan"
                                class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                Kabupaten Tabanan
                                <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-secondary pl-15"
        style="display: flex; flex-direction: column; justify-content: flex-start; align-items: center; text-align: center;">
        <div>
            <h1 class="text-2xl font-semibold mb-2 mt-7 text-white">Favorite Destination</h1>
            <p class="mb-8 text-white">Find tourist villages based on the distribution map of
                districts and cities in Bali.</p>
        </div>
        <div class="container w-full max-w-5xl">

            <div class="flex gap-4">
                @foreach ($review as $row)
                    <div class="bg-gray-200 ">
                        <div class="text-yellow-500 text-2xl font-bold">⭐️ {{ $row['averageRating'] }}</div>
                        <p> {{ $row['destination']['nama'] }}</p>
                        <img src="{{ env('APP_API_URL') }}/resource/destinasiwisata/{{ $row['destination']['gambar'] }}"
                            alt="">

                    </div>
                @endforeach
            </div>




            <div class="flex flex-col space-y-4">
                <!-- Top row -->
                <div class="flex space-x-4">
                    <!-- Large section on the left -->
                    <div class="bg-gray-200 w-3/4 h-60 p-4">
                        <div class="text-yellow-500 text-2xl font-bold">⭐️ 4.5</div>
                        <div class="text-bottom">Desa Wisata Penglipuran</div>
                        <img class="h-auto max-w-xl" src="/docs/images/examples/image-1@2x.jpg" alt="image description">
                    </div>
                    <!-- Smaller section on the right -->
                    <div class="bg-gray-200 w-1/4 h-60 p-4">
                        <!-- Your content here -->
                    </div>
                </div>
                <!-- Bottom row -->
                <div class="flex space-x-4">
                    <!-- Three equal-sized sections -->
                    <div class="bg-gray-200 w-1/3 h-60 p-4">
                        <img src="" alt="">
                    </div>
                    <div class="bg-gray-200 w-1/3 h-60 p-4">
                        <!-- Your content here -->
                    </div>
                    <div class="bg-gray-200 w-1/3 h-60 p-4">
                        <!-- Your content here -->
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-secondary pl-15"
        style="display: flex; flex-direction: column; justify-content: flex-start; align-items: center; height: 50vh; text-align: center;">
        <div>
            <h1 class="text-2xl font-semibold mb-2 mt-7 text-white">News Update</h1>
            <p class="mb-8 text-white">Find tourist villages based on the distribution map of
                districts and cities in Bali.</p>
        </div>

        <div class="flex space-x-4 ">
            <!-- Card 1 -->
            @foreach ($berita as $row)
                <a href="/artikel/{{ $row['id'] }}">
                    <div data-aos=""
                        class="bg-white shadow-lg rounded-lg p-6 max-w-80 transform transition-transform duration-300 hover:-translate-y-3">
                        <h2 class="text-lg font-semibold mb-2">{{ $row['judul'] }}</h2>
                        <p class="text-gray-700">
                            {{ Str::limit($row['isi_berita'], 500, '...') }}
                        </p>
                    </div>
                </a>
            @endforeach

        </div>
        <a href="/artikel"
            class="mt-4 bg-blue-500 text-white px-8 py-2 rounded-full hover:bg-blue-600 transition-colors duration-300"
            style="background-color: #00C2CC; border-color: #00C2CC; hover:bg-opacity-80;">
            Read More <i class="fas fa-arrow-right ml-5"></i>
        </a>
    </div>
@endsection
