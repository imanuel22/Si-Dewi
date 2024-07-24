@extends('guest.layouts.main')
@section('main')
    <div class="inset-0 bg-black opacity-70"> </div>
    <img src="{{ env('APP_API_URL') }}/uploads/desawisata/{{ $desa['gambar'] }}" alt=""
        class=" inset-0 w-full h-full object-cover" style="width: 100vw;">

    {{-- background --}}
    {{-- content --}}

    <div class=" mt-6 xl:mx-56 p-4 xl:px-0 ">
        <div class="gap-6 sm:flex">
            <div class="sm:w-4/6 bg-white rounded-2xl p-6 h-fit">
                <div class="mb-2">
                    <h1 class="text-5xl font-bold">{{ $desa['nama'] }}</h1>
                </div>
                <div class="text-xl text-gray-600 mb-1">
                    <p class="font-semibold "><span class="text-green-700 ">{{ $desa['kategori'] }} </span> /
                        {{ $desa['kabupaten'] }}
                    </p>
                </div>
                <div class="mt-5 max-w-full">
                    <p class="break-words">{{ $desa['deskripsi'] }}</p>
                </div>
            </div>
            <div class="sm:w-2/6 ">
                <div class="bg-white rounded-2xl p-6 mb-6">
                    <h1 class="text-xl font-semibold"> CONTACT & SOCIAL MEDIA</h1>
                    <div class="flex gap-3 mt-2">
                        <a href="">
                            <svg class="w-10 h-10 text-gray-800 dark:text-white" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                                viewBox="0 0 24 24">
                                <path fill="currentColor" fill-rule="evenodd"
                                    d="M12 4a8 8 0 0 0-6.895 12.06l.569.718-.697 2.359 2.32-.648.379.243A8 8 0 1 0 12 4ZM2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10a9.96 9.96 0 0 1-5.016-1.347l-4.948 1.382 1.426-4.829-.006-.007-.033-.055A9.958 9.958 0 0 1 2 12Z"
                                    clip-rule="evenodd" />
                                <path fill="currentColor"
                                    d="M16.735 13.492c-.038-.018-1.497-.736-1.756-.83a1.008 1.008 0 0 0-.34-.075c-.196 0-.362.098-.49.291-.146.217-.587.732-.723.886-.018.02-.042.045-.057.045-.013 0-.239-.093-.307-.123-1.564-.68-2.751-2.313-2.914-2.589-.023-.04-.024-.057-.024-.057.005-.021.058-.074.085-.101.08-.079.166-.182.249-.283l.117-.14c.121-.14.175-.25.237-.375l.033-.066a.68.68 0 0 0-.02-.64c-.034-.069-.65-1.555-.715-1.711-.158-.377-.366-.552-.655-.552-.027 0 0 0-.112.005-.137.005-.883.104-1.213.311-.35.22-.94.924-.94 2.16 0 1.112.705 2.162 1.008 2.561l.041.06c1.161 1.695 2.608 2.951 4.074 3.537 1.412.564 2.081.63 2.461.63.16 0 .288-.013.4-.024l.072-.007c.488-.043 1.56-.599 1.804-1.276.192-.534.243-1.117.115-1.329-.088-.144-.239-.216-.43-.308Z" />
                            </svg>

                        </a>
                        <a href="">
                            <svg class="w-10 h-10 text-gray-800 dark:text-white" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                                viewBox="0 0 24 24">
                                <path fill="currentColor" fill-rule="evenodd"
                                    d="M3 8a5 5 0 0 1 5-5h8a5 5 0 0 1 5 5v8a5 5 0 0 1-5 5H8a5 5 0 0 1-5-5V8Zm5-3a3 3 0 0 0-3 3v8a3 3 0 0 0 3 3h8a3 3 0 0 0 3-3V8a3 3 0 0 0-3-3H8Zm7.597 2.214a1 1 0 0 1 1-1h.01a1 1 0 1 1 0 2h-.01a1 1 0 0 1-1-1ZM12 9a3 3 0 1 0 0 6 3 3 0 0 0 0-6Zm-5 3a5 5 0 1 1 10 0 5 5 0 0 1-10 0Z"
                                    clip-rule="evenodd" />
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="bg-white rounded-2xl p-6">
                    <h1 class="text-xl font-semibold"> Lokasi Desa</h1>
                    <p class="text-lg">{{ $desa['alamat'] }} / {{ $desa['kabupaten'] }} </p>
                    <div class=" h-full mt-4 sm:container  text-justify px-1 w-full mx-auto ">
                        @if (isset($desa['maps'][1]))
                            <div class="relative " style="height: 300px;">
                                <iframe class="rounded-2xl"
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15777.346005471349!2d{{ explode(',', $desa['maps'])[1] }}!3d{{ explode(',', $desa['maps'])[0] }}!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zOeKdu-OpzOyYoiAtIDE1NSwgNDEuMjMgU08sIFRyYW5zYWN0aW9uIENodW5rcyBSZWQsIE1vYmlsZSBLaW5nZG9tLCBTYW5zIFJvYWQ!5e0!3m2!1sen!2sid!4v1623872036346!5m2!1sen!2sid"
                                    width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
                                    referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                        @else
                            <div class="relative" style="height: 300px;">

                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
        {{-- tab --}}
        <div class=" mb-4 mt-10 top-0  border-b border-gray-200 dark:border-gray-700 sm:container  text-justify px-1 ">
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
                        class="bg-secondary inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300"
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

        <div id="default-styled-tab-content ">
            <div class="hidden  rounded-lg  bg-white p-6 dark:bg-gray-800 " id="styled-profile" role="tabpanel"
                aria-labelledby="profile-tab">
                <header class=" pt-3  ">
                    <h2 class="text-4xl font-bold ">Destinasi Wisata</h2>
                    <p class="my-4 max-w-5xl ">
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Itaque praesentium cumque iure
                        dicta incidunt est ipsam, officia dolor fugit natus?
                    </p>
                </header>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    @foreach ($destinasi as $row)
                        <a href="/desa/{{ $row['id_desawisata'] }}/destinasi/{{ $row['id'] }}"
                            class="group relative block text-white">
                            <div class="relative flex h-96 transform items-end transition-transform group-hover:-translate-y-2"
                                style="background-image: url('{{ env('APP_API_URL') }}/uploads/destinasiwisata/{{ $row['gambar'] }}'); background-size: cover; background-position: center;">
                                <div
                                    class="absolute inset-0 bg-gradient-to-t from-black to-transparent opacity-20 transition-opacity group-hover:opacity-50">
                                </div>
                                <div
                                    class="p-4 !pt-0 z-10 transition-opacity group-hover:absolute group-hover:opacity-0 sm:p-6 lg:p-8">
                                    <h2 class="mt-4 text-3xl font-bold sm:text-3xl">{{ $row['nama'] }}</h2>
                                </div>
                                <div
                                    class="absolute p-4 opacity-0 transition-opacity group-hover:opacity-100 sm:p-6 lg:p-8 w-full z-20">
                                    <h3 class="mt-4 text-xl font-medium sm:text-2xl">{{ $row['nama'] }}</h3>
                                    <p class="mt-4 text-sm sm:text-base break-words w-full">
                                        {{ \Illuminate\Support\Str::limit($row['deskripsi'], 100) }}
                                    </p>
                                    <p class="mt-4 font-bold">Read more</p>
                                </div>
                            </div>
                        </a>
                    @endforeach
                </div>
            </div>
            <div class="hidden p-6 rounded-lg bg-gray-50 dark:bg-gray-800" id="styled-dashboard" role="tabpanel"
                aria-labelledby="dashboard-tab">
                <header class=" pt-3  ">
                    <h2 class="text-4xl font-bold ">Akomodasi Wisata</h2>
                    <p class="my-4 max-w-5xl ">
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Itaque praesentium cumque iure
                        dicta incidunt est ipsam, officia dolor fugit natus?
                    </p>
                </header>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    @foreach ($akomodasi as $row)
                        <a href="/desa/{{ $row['id_desawisata'] }}/destinasi/{{ $row['id'] }}"
                            class="group relative block text-white ">
                            <div class="relative flex h-96 transform items-end transition-transform group-hover:-translate-y-2"
                                style="background-image: url('{{ env('APP_API_URL') }}/uploads/akomodasi/{{ $row['gambar'] }}'); background-size: cover; background-position: center;">
                                <div
                                    class="absolute inset-0 bg-gradient-to-t from-black to-transparent opacity-20 transition-opacity group-hover:opacity-50">
                                </div>
                                <div
                                    class="p-4 !pt-0 z-10 transition-opacity group-hover:absolute group-hover:opacity-0 sm:p-6 lg:p-8">
                                    <p class="mt-4 text-xl font-medium ">{{ $row['kategori'] }}</p>
                                    <h2 class="mt-2 text-3xl font-bold ">{{ $row['nama'] }}</h2>
                                </div>
                                <div
                                    class="absolute p-4 opacity-0 transition-opacity group-hover:opacity-100 sm:p-6 lg:p-8 w-full z-20">
                                    <h3 class="mt-4 text-xl font-medium sm:text-2xl">{{ $row['nama'] }}</h3>
                                    <p class="mt-4 text-sm sm:text-base break-words w-full">

                                    </p>
                                    <p class="mt-4 font-bold">Read more</p>
                                </div>
                            </div>
                        </a>
                    @endforeach
                </div>
            </div>
            <div class="hidden p-6 rounded-lg bg-gray-50 dark:bg-gray-800" id="styled-settings" role="tabpanel"
                aria-labelledby="settings-tab">
                <header class=" pt-3  ">
                    <h2 class="text-4xl font-bold ">Produk</h2>
                    <p class="my-4 max-w-5xl ">
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Itaque praesentium cumque iure
                        dicta incidunt est ipsam, officia dolor fugit natus?
                    </p>
                </header>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    @foreach ($produk as $row)
                        <a href="/desa/{{ $row['id_desawisata'] }}/produk/{{ $row['id'] }}"
                            class="group relative block text-white ">
                            <div class="relative flex h-96 transform items-end transition-transform group-hover:-translate-y-2"
                                style="background-image: url('{{ env('APP_API_URL') }}/uploads/produk/{{ $row['gambar'] }}'); background-size: cover; background-position: center;">
                                <div
                                    class="absolute inset-0 bg-gradient-to-t from-black to-transparent opacity-20 transition-opacity group-hover:opacity-50">
                                </div>
                                <div
                                    class="p-4 !pt-0 z-10 transition-opacity group-hover:absolute group-hover:opacity-0 sm:p-6 lg:p-8">
                                    <h2 class="mt-2 text-3xl font-bold ">{{ $row['nama'] }}</h2>
                                </div>
                                <div
                                    class="absolute p-4 opacity-0 transition-opacity group-hover:opacity-100 sm:p-6 lg:p-8 w-full z-20">
                                    <h3 class="mt-4 text-xl font-medium sm:text-2xl">{{ $row['nama'] }}</h3>
                                    <p class="mt-4 text-sm sm:text-base break-words w-full">
                                        {{ \Illuminate\Support\Str::limit($row['deskripsi'], 100) }}
                                    </p>
                                    <p class="mt-4 font-bold">Read more</p>
                                </div>
                            </div>
                        </a>
                    @endforeach
                </div>
            </div>
            <div class="hidden p-6 rounded-lg bg-gray-50 dark:bg-gray-800" id="styled-contacts" role="tabpanel"
                aria-labelledby="contacts-tab">
                <header class=" pt-3  ">
                    <h2 class="text-4xl font-bold ">Produk</h2>
                    <p class="my-4 max-w-5xl ">
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Itaque praesentium cumque iure
                        dicta incidunt est ipsam, officia dolor fugit natus?
                    </p>
                </header>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    @foreach ($paket as $row)
                    <a href="/desa/{{ $row['id_desawisata'] }}/paketwisata/{{ $row['id'] }}"
                    class="group relative block text-white ">
                    <div class="relative flex h-96 transform items-end transition-transform group-hover:-translate-y-2"
                        style="background-image: url('{{ env('APP_API_URL') }}/uploads/produk/{{ $row['gambar'] }}'); background-size: cover; background-position: center;">
                        <div
                            class="absolute inset-0 bg-gradient-to-t from-black to-transparent opacity-20 transition-opacity group-hover:opacity-50">
                        </div>
                        <div
                            class="p-4 !pt-0 z-10 transition-opacity group-hover:absolute group-hover:opacity-0 sm:p-6 lg:p-8">
                            <h2 class="mt-2 text-3xl font-bold ">{{ $row['nama'] }}</h2>
                        </div>
                        <div
                            class="absolute p-4 opacity-0 transition-opacity group-hover:opacity-100 sm:p-6 lg:p-8 w-full z-20">
                            <h3 class="mt-4 text-xl font-medium sm:text-2xl">{{ $row['nama'] }}</h3>
                            <p class="mt-4 text-sm sm:text-base break-words w-full">
                                {{ \Illuminate\Support\Str::limit($row['deskripsi'], 100) }}
                            </p>
                            <p class="mt-4 font-bold">Read more</p>
                        </div>
                    </div>
                </a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    {{-- tab --}}
@endsection
