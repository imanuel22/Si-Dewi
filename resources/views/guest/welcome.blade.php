@extends('guest.layouts.main')

@section('main')
    <!-- Gambar Latar Belakang -->
    <div class="mix-blend-screen inset-0 bg-black opacity-50"></div>
    <img src="{{ asset('desa.jpg') }}" class="inset-0 w-full h-screen object-cover" alt="">
    <!-- Overlay Gelap (Opsional) -->

    <!-- Konten Teks di Atas Gambar -->
    <div
        class="absolute top-0 flex flex-col justify-center -m-20 pl-80 h-screen text-white text-6xl poppins-bold tracking-normal">
        <div>
            <h1>EXPLORE BALI </h1>
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


    <div class="bg-white">
        <div class="xl:ms-56 p-4 xl:px-0 pt-5 grid grid-cols-1 sm:grid-cols-3 gap-4">
            <!-- Kolom Pertama: Judul dan Deskripsi -->
            <div class="">
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
            <div class="col-span-2 w-full overflow-x-scroll horizontal-scroll "
                style="scrollbar-color: transparent transparent;">
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
                            <a href="/jelajahi/filter?kabupaten%5B%5D=Badung"
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
                            class=" wrapp max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                            <a href="#">
                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                                    Noteworthy technology acquisitions 2021</h5>
                            </a>
                            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest
                                enterprise technology acquisitions of 2021 so far, in reverse chronological
                                order.
                            </p>
                            <a href="/jelajahi/filter?kabupaten%5B%5D=Badung"
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
                            class=" wrapp max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                            <a href="#">
                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                                    Noteworthy technology acquisitions 2021</h5>
                            </a>
                            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest
                                enterprise technology acquisitions of 2021 so far, in reverse chronological
                                order.
                            </p>
                            <a href="/jelajahi/filter?kabupaten%5B%5D=Badung"
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
                            class=" wrapp max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                            <a href="#">
                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                                    Noteworthy technology acquisitions 2021</h5>
                            </a>
                            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest
                                enterprise technology acquisitions of 2021 so far, in reverse chronological
                                order.
                            </p>
                            <a href="/jelajahi/filter?kabupaten%5B%5D=Badung"
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
                            <a href="/jelajahi/filter?kabupaten%5B%5D=Gianyar"
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
                            <a href="/jelajahi/filter?kabupaten%5B%5D=Tabanan"
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
                            <a href="/jelajahi/filter?kabupaten%5B%5D=Denpasar"
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
                            <a href="/jelajahi/filter?kabupaten%5B%5D=Tabanan"
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

    <div class="bg-secondary mt-5">
        <div class="xl:mx-56 p-4 xl:px-0 py-10 text-white ">
            <div class="py-5">
                <h2 class="text-4xl font-bold text-center  mb-4">Favorite Destination</h2>
                <p class="text-center text-xl mb-8">Find tourist villages based on the distribution map of districts and
                    cities
                    in Bali.</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
                @foreach ($review as $index => $row)
                    @if ($index == 0)
                        <a
                            href="/desa/{{ $row['destination']['id_desawisata'] }}/destinasi/{{ $row['destination']['id'] }}">
                            <div
                                class="lg:col-span-2 lg:row-span-2 relative bg-gray-800 rounded-lg shadow-lg overflow-hidden">
                                <img src="{{ env('APP_API_URL') }}/resource/destinasiwisata/{{ $row['destination']['gambar'] }}"
                                    alt="{{ $row['destination']['nama'] }}" class="w-full h-full object-cover">
                                <div
                                    class="absolute top-0 right-0 m-2 bg-white bg-opacity-75 text-yellow-500 text-xl font-bold rounded-full p-1">
                                    ⭐️ {{ Str::limit($row['averageRating'], 3, '') }}
                                </div>
                                <div class="absolute bottom-0 left-0 w-full bg-black bg-opacity-75 text-white p-2">
                                    <p class="text-lg font-bold">{{ $row['destination']['nama'] }}</p>
                                </div>
                            </div>
                        </a>
                    @else
                        <a
                            href="/desa/{{ $row['destination']['id_desawisata'] }}/destinasi/{{ $row['destination']['id'] }}">
                            <div class="relative bg-gray-800 rounded-lg shadow-lg overflow-hidden">
                                <img src="{{ env('APP_API_URL') }}/resource/destinasiwisata/{{ $row['destination']['gambar'] }}"
                                    alt="{{ $row['destination']['nama'] }}" class="w-full h-64 object-cover">
                                <div
                                    class="absolute top-0 right-0 m-2 bg-white bg-opacity-75 text-yellow-500 text-xl font-bold rounded-full p-1">
                                    ⭐️ {{ Str::limit($row['averageRating'], 3, '') }}
                                </div>
                                <div class="absolute bottom-0 left-0 w-full bg-black bg-opacity-75 text-white p-2">
                                    <p class="text-lg font-bold">{{ $row['destination']['nama'] }}</p>
                                </div>
                            </div>
                        </a>
                    @endif
                @endforeach
            </div>
        </div>
    </div>
    <div class="bg-secondary h-96">
        <div>
            <h1 class="text-4xl text-center font-semibold mb-2 pt-10 text-white">News Update</h1>
            <p class="mb-8 text-center text-xl text-white">Find tourist villages based on the distribution map of
                districts and cities in Bali.</p>
        </div>
    </div>
    <div class="xl:mx-56 p-4 xl:px-0 py-10  -mt-40 ">
        <div class="grid grid-cols-3 gap-4 ">
            <!-- Card 1 -->
            @foreach ($berita as $row)
                <div class="relative bg-white rounded-lg shadow-lg overflow-hidden">
                    <a href="/artikel/{{ $row['id'] }}">
                        <div data-aos=""
                            class="shadow-lg rounded-lg p-6 max-w-80 transform transition-transform duration-300 hover:-translate-y-3">
                            <h2 class="text-lg font-semibold mb-2">{{ $row['judul'] }}</h2>
                            <p class="text-gray-700">
                                {{ Str::limit($row['isi_berita'], 500, '...') }}
                            </p>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
        <div class="flex justify-center mt-5">
            <a href="/artikel"
                class="mt-4 bg-primary text-white px-8 py-2 rounded-full hover:bg-opacity-90 transition-colors duration-300">
                Read More <i class="fas fa-arrow-right ml-5"></i>
            </a>
        </div>
    </div>
@endsection
