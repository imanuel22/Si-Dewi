<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
</head>

<body>
    {{-- container start --}}
    <div class="container-fluid h-screen">
        {{-- navbar start --}}

        @include('partials.navbar')

        {{-- navbar end --}}
        {{-- background --}}
        <div class="inset-0 bg-black opacity-70"> </div>
        <img src="{{ asset('storage/img/testpict.png') }}" alt="" class=" inset-0 w-full h-full object-cover"
            style="width: 100vw;">

        {{-- background --}}
        {{-- content --}}

        <div class=" sm:container mt-36 text-justify px-1 w-full mx-auto ">
            <div class="">
                <div class="">
                    <h1 class="text-4xl font-bold">{{ $desa['nama'] }}</h1>
                </div>
                <div class="text-xl text-gray-600 mb-1">
                    Kategori : <span class="text-green-700">{{ $desa['kategori'] }}</span>
                    <br>
                </div>
                <div class="">
                    {{ $desa['deskripsi'] }}
                </div>
            </div>
            <br>
            <div class="w-full h-96">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5144.066257606532!2d115.15765092578037!3d-8.800860606502953!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd244c13ee9d753%3A0x6c05042449b50f81!2sPoliteknik%20Negeri%20Bali!5e0!3m2!1sid!2sid!4v1719463096558!5m2!1sid!2sid"
                    width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
        <div>
            {{-- tab --}}
            <div
                class="mb-4 mt-8 top-0  border-b border-gray-200 dark:border-gray-700 sm:container  text-justify px-1 w-full mx-auto ">
                <ul class="flex flex-wrap -mb-px text-sm font-medium text-center" id="default-styled-tab"
                    data-tabs-toggle="#default-styled-tab-content"
                    data-tabs-active-classes="text-purple-600 hover:text-purple-600 dark:text-purple-500 dark:hover:text-purple-500 border-purple-600 dark:border-purple-500"
                    data-tabs-inactive-classes="dark:border-transparent text-gray-500 hover:text-gray-600 dark:text-gray-400 border-gray-100 hover:border-gray-300 dark:border-gray-700 dark:hover:text-gray-300"
                    role="tablist">
                    <li class="me-2" role="presentation">
                        <button class="inline-block p-4 border-b-2 rounded-t-lg" id="profile-styled-tab"
                            data-tabs-target="#styled-profile" type="button" role="tab" aria-controls="profile"
                            aria-selected="false">Destinasi</button>
                    </li>
                    <li class="me-2" role="presentation">
                        <button
                            class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300"
                            id="dashboard-styled-tab" data-tabs-target="#styled-dashboard" type="button" role="tab"
                            aria-controls="dashboard" aria-selected="false">Akomodasi</button>
                    </li>
                    <li class="me-2" role="presentation">
                        <button
                            class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300"
                            id="settings-styled-tab" data-tabs-target="#styled-settings" type="button" role="tab"
                            aria-controls="settings" aria-selected="false">Produk</button>
                    </li>
                    <li role="presentation">
                        <button
                            class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300"
                            id="contacts-styled-tab" data-tabs-target="#styled-contacts" type="button" role="tab"
                            aria-controls="contacts" aria-selected="false">Paket Wisata</button>
                    </li>
                </ul>
            </div>
            <div>
                <div id="default-styled-tab-content"
                    class="sm:container  text-justify px-1 w-full mx-auto bg-secondary">
                    <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800 " id="styled-profile" role="tabpanel"
                        aria-labelledby="profile-tab">
                        <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                            @foreach ($destinasi as $row)
                                <div
                                    class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                                    <a href="/desa/{{ $row['id_desawisata'] }}/destinasi/{{ $row['id'] }}">
                                        <img class="rounded-t-lg"
                                            src="{{ env('APP_API_URL') }}/uploads/destinasiwisata/{{ $row['gambar'] }}"
                                            alt="" />
                                    </a>
                                    <div class="p-5">
                                        <a href="/desa/{{ $row['id_desawisata'] }}/destinasi/{{ $row['id'] }}">
                                            <h5
                                                class="mb-2 text-xl font-bold tracking-tight text-gray-900 dark:text-white">
                                                {{ $row['nama'] }}</h5>
                                        </a>
                                        <a href="/desa/{{ $row['id_desawisata'] }}/destinasi/{{ $row['id'] }}">
                                            <h5
                                                class="mb-2 text-sm font-bold tracking-tight text-green-700 dark:text-white">
                                                {{ $row['id_kategoridestinasi'] }}</h5>
                                        </a>
                                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                                            {{ Str::limit($row['deskripsi'], 100, '...') }}</p>
                                        <a href="/desa/{{ $row['id_desawisata'] }}/destinasi/{{ $row['id'] }}"
                                            class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                            Read more
                                            <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true"
                                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                                <path stroke="currentColor" stroke-linecap="round"
                                                    stroke-linejoin="round" stroke-width="2"
                                                    d="M1 5h12m0 0L9 1m4 4L9 9" />
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            @endforeach

                        </div>


                    </div>
                    <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="styled-dashboard" role="tabpanel"
                        aria-labelledby="dashboard-tab">
                        <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                            @foreach ($akomodasi as $row)
                                <div
                                    class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                                    <a href="/desa/{{ $row['id_desawisata'] }}/akomodasi/{{ $row['id'] }}">
                                        <img class="rounded-t-lg"
                                            src="{{ env('APP_API_URL') }}/uploads/akomodasi/{{ $row['gambar'] }}"
                                            alt="" />
                                    </a>
                                    <div class="p-5">
                                        <a href="/desa/{{ $row['id_desawisata'] }}/akomodasi/{{ $row['id'] }}">
                                            <h5
                                                class="mb-2 text-xl font-bold tracking-tight text-gray-900 dark:text-white">
                                                {{ $row['nama'] }}</h5>
                                        </a>
                                        <a href="/desa/{{ $row['id_desawisata'] }}/akomodasi/{{ $row['id'] }}">
                                            <h5
                                                class="mb-2 text-sm font-bold tracking-tight text-green-700 dark:text-white">
                                                {{ $row['kategori'] }}</h5>
                                        </a>
                                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                                            {{-- {{ Str::limit($row['deskripsi'], 100, '...') }}</p> --}}
                                            <a href="/desa/{{ $row['id_desawisata'] }}/akomodasi/{{ $row['id'] }}"
                                                class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                                Read more
                                                <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true"
                                                    xmlns="http://www.w3.org/2000/svg" fill="none"
                                                    viewBox="0 0 14 10">
                                                    <path stroke="currentColor" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-width="2"
                                                        d="M1 5h12m0 0L9 1m4 4L9 9" />
                                                </svg>
                                            </a>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="styled-settings"
                        role="tabpanel" aria-labelledby="settings-tab">
                        <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                            @foreach ($produk as $row)
                                <div
                                    class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                                    <a href="/desa/{{ $row['id_desawisata'] }}/produk/{{ $row['id'] }}">
                                        <img class="rounded-t-lg"
                                            src="{{ env('APP_API_URL') }}/uploads/produk/{{ $row['gambar'] }}"
                                            alt="" />
                                    </a>
                                    <div class="p-5">
                                        <a href="/desa/{{ $row['id_desawisata'] }}/produk/{{ $row['id'] }}">
                                            <h5
                                                class="mb-2 text-xl font-bold tracking-tight text-gray-900 dark:text-white">
                                                {{ $row['nama'] }}</h5>
                                        </a>
                                        <a href="/desa/{{ $row['id_desawisata'] }}/produk/{{ $row['id'] }}">
                                            <h5
                                                class="mb-2 text-sm font-bold tracking-tight text-green-700 dark:text-white">
                                                {{ $row['harga'] }}</h5>
                                        </a>
                                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                                            {{ Str::limit($row['deskripsi'], 100, '...') }}</p>
                                        <a href="/desa/{{ $row['id_desawisata'] }}/produk/{{ $row['id'] }}"
                                            class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                            Read more
                                            <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true"
                                                xmlns="http://www.w3.org/2000/svg" fill="none"
                                                viewBox="0 0 14 10">
                                                <path stroke="currentColor" stroke-linecap="round"
                                                    stroke-linejoin="round" stroke-width="2"
                                                    d="M1 5h12m0 0L9 1m4 4L9 9" />
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="styled-contacts"
                        role="tabpanel" aria-labelledby="contacts-tab">
                        <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                            @foreach ($paket as $row)
                                <div
                                    class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                                    <a href="/desa/{{ $row['id_desawisata'] }}/paket/{{ $row['id'] }}">
                                        <img class="rounded-t-lg"
                                            src="{{ env('APP_API_URL') }}/uploads/paketwisata/{{ $row['gambar'] }}"
                                            alt="" />
                                    </a>
                                    <div class="p-5">
                                        <a href="/desa/{{ $row['id_desawisata'] }}/paket/{{ $row['id'] }}">
                                            <h5
                                                class="mb-2 text-xl font-bold tracking-tight text-gray-900 dark:text-white">
                                                {{ $row['nama'] }}</h5>
                                        </a>
                                        <a href="/desa/{{ $row['id_desawisata'] }}/paket/{{ $row['id'] }}">
                                            <h5
                                                class="mb-2 text-sm font-bold tracking-tight text-green-700 dark:text-white">
                                                {{ $row['harga'] }}</h5>
                                        </a>
                                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                                            {{ Str::limit($row['deskripsi'], 100, '...') }}</p>
                                        <a href="/desa/{{ $row['id_desawisata'] }}/paket/{{ $row['id'] }}"
                                            class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                            Read more
                                            <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true"
                                                xmlns="http://www.w3.org/2000/svg" fill="none"
                                                viewBox="0 0 14 10">
                                                <path stroke="currentColor" stroke-linecap="round"
                                                    stroke-linejoin="round" stroke-width="2"
                                                    d="M1 5h12m0 0L9 1m4 4L9 9" />
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>

            {{-- tab --}}

        </div>
        {{-- content end --}}

        @include('partials.footer')
        {{-- container end --}}
        <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
</body>

</html>
