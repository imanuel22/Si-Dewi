@extends('guest.layouts.main')

@section('main')
        <div class="inset-0 bg-black opacity-70"> </div>
        <img src="{{ env('APP_API_URL') }}/uploads/destinasiwisata/{{ $destinasi['gambar'] }}"
            alt="{{ $destinasi['nama'] }}" class=" bg-slate-500 inset-0 w-full h-screen object-cover" style="width: 100vw;">
        {{-- background --}}
        {{-- content --}}
        <div class=" sm:container -mt-20 drop-shadow text-justify  mx-auto">
            <div class="flex gap-8">
                {{-- Deskripsi Destinasi --}}
                <div class="mb-2 bg-white w-3/5  rounded-2xl p-8 h-fit ">
                    <div class="flex justify-between items-center">
                        <div class="">
                            <h1 class="text-5xl font-bold max-w-2xl">{{ $destinasi['nama'] }} </h1>
                            <p class="font-semibold mt-1 ">{{ $desa['nama'] }} /
                                {{ $destinasi['id_kategoridestinasi'] }}
                            </p>
                        </div>
                        <div class="star flex flex-col items-center">
                            <div class="flex gap-1">
                                <svg class="w-6 h-6 text-yellow-400 dark:text-white" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                                    viewBox="0 0 24 24">
                                    <path
                                        d="M13.849 4.22c-.684-1.626-3.014-1.626-3.698 0L8.397 8.387l-4.552.361c-1.775.14-2.495 2.331-1.142 3.477l3.468 2.937-1.06 4.392c-.413 1.713 1.472 3.067 2.992 2.149L12 19.35l3.897 2.354c1.52.918 3.405-.436 2.992-2.15l-1.06-4.39 3.468-2.938c1.353-1.146.633-3.336-1.142-3.477l-4.552-.36-1.754-4.17Z" />
                                </svg>
                            </div>
                            <h1 class="text-center text-l mt-1 font-bold">4.5/5 (100)</h1>
                        </div>
                    </div>
                    <div class="deskripsi">
                        <div class="mt-5 max-w-full">
                            <p class="break-words">{{ $destinasi['deskripsi'] }}</p>
                        </div>
                    </div>
                    @if (!empty($fasilitas))
                        <div class="fasilitas mt-10">
                            <h1 class="text-4xl text-center font-bold">
                                Fasilitas
                            </h1>
                            <div class="grid grid-cols-4 gap-5">
                                @foreach ($fasilitas as $row)
                                    <div
                                        class="bg-primary-200 hover:bg-cyan-700 text-white font-semibold text-xl text-center my-10 border p-3 rounded-3xl flex justify-center items-center">
                                        {{ $row['nama'] }}
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    @endif
                    <div class="mt-5 text-justify px-1 mx-auto">
                        <h1 class="font-semibold text-xl">Lokasi Destinasi</h1>
                        <p class="text-xl">{{ $desa['alamat'] }} / {{ $desa['kabupaten'] }} </p>
                        @if (isset($desa['maps'][1]))
                            <div class="relative mt-3" style="height: 300px;">
                                <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15777.346005471349!2d{{ explode(',', $desa['maps'])[1] }}!3d{{ explode(',', $desa['maps'])[0] }}!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zOeKdu-OpzOyYoiAtIDE1NSwgNDEuMjMgU08sIFRyYW5zYWN0aW9uIENodW5rcyBSZWQsIE1vYmlsZSBLaW5nZG9tLCBTYW5zIFJvYWQ!5e0!3m2!1sen!2sid!4v1623872036346!5m2!1sen!2sid"
                                    width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
                                    referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                        @endif
                    </div>
                </div>
                {{-- Card Kanan --}}
                <div class="mb-2  w-2/5 ">
                    {{-- Rating --}}
                    <div class=" bg-white rounded-2xl">
                        <div class="p-10">
                            <h1 class="text-3xl font-bold">Review</h1>
                            <ul class="max-w-md divide-y divide-gray-200 dark:divide-gray-700 mt-5">
                                @foreach ($review as $row)
                                    <li class="py-3 sm:pb-4">
                                        <div class="flex items-center space-x-4 rtl:space-x-reverse">
                                            <div class="flex-shrink-0">
                                                <img class="w-8 h-8 rounded-full"
                                                    src="/docs/images/people/profile-picture-1.jpg" alt="Neil image">
                                            </div>
                                            <div class="flex-1 min-w-0">
                                                <p class="text-sm font-medium text-gray-900 truncate dark:text-white">
                                                    {{ $row['id_akun'] }}
                                                <p class="text-sm text-gray-500 truncate dark:text-gray-400">
                                                    01-01-2024
                                                </p>
                                            </div>
                                            <div
                                                class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">
                                                @php
                                                    $rating = $row['rating'];
                                                    $fullStars = floor($rating / 2);
                                                    $halfStar = $rating % 2 >= 1 ? 1 : 0;
                                                    $emptyStars = 5 - $fullStars - $halfStar;
                                                @endphp

                                                {{-- Bintang Penuh --}}
                                                @for ($i = 0; $i < $fullStars; $i++)
                                                    <svg class="w-5 h-5 text-yellow-400 dark:text-white"
                                                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                        width="24" height="24" fill="currentColor"
                                                        viewBox="0 0 24 24">
                                                        <path
                                                            d="M13.849 4.22c-.684-1.626-3.014-1.626-3.698 0L8.397 8.387l-4.552.361c-1.775.14-2.495 2.331-1.142 3.477l3.468 2.937-1.06 4.392c-.413 1.713 1.472 3.067 2.992 2.149L12 19.35l3.897 2.354c1.52.918 3.405-.436 2.992-2.15l-1.06-4.39 3.468-2.938c1.353-1.146.633-3.336-1.142-3.477l-4.552-.36-1.754-4.17Z" />
                                                    </svg>
                                                @endfor

                                                {{-- Setengah Bintang --}}
                                                @if ($halfStar)
                                                    <svg class="w-5 h-5 " aria-hidden="true"
                                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        fill="currentColor" viewBox="0 0 24 24">
                                                        <defs>
                                                            <linearGradient id="half-yellow-gray" x1="0"
                                                                x2="1" y1="0" y2="0">
                                                                <stop offset="50%" stop-color="#eab308" />
                                                                <stop offset="50%" stop-color="#9ca3af" />
                                                            </linearGradient>
                                                        </defs>
                                                        <path fill="url(#half-yellow-gray)"
                                                            d="M13.849 4.22c-.684-1.626-3.014-1.626-3.698 0L8.397 8.387l-4.552.361c-1.775.14-2.495 2.331-1.142 3.477l3.468 2.937-1.06 4.392c-.413 1.713 1.472 3.067 2.992 2.149L12 19.35l3.897 2.354c1.52.918 3.405-.436 2.992-2.15l-1.06-4.39 3.468-2.938c1.353-1.146.633-3.336-1.142-3.477l-4.552-.36-1.754-4.17Z" />
                                                    </svg>
                                                @endif

                                                {{-- Bintang Kosong --}}
                                                @for ($i = 0; $i < $emptyStars; $i++)
                                                    <svg class="w-5 h-5 text-gray-400 dark:text-gray-600"
                                                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                        width="24" height="24" fill="currentColor"
                                                        viewBox="0 0 24 24">
                                                        <path
                                                            d="M13.849 4.22c-.684-1.626-3.014-1.626-3.698 0L8.397 8.387l-4.552.361c-1.775.14-2.495 2.331-1.142 3.477l3.468 2.937-1.06 4.392c-.413 1.713 1.472 3.067 2.992 2.149L12 19.35l3.897 2.354c1.52.918 3.405-.436 2.992-2.15l-1.06-4.39 3.468-2.938c1.353-1.146.633-3.336-1.142-3.477l-4.552-.36-1.754-4.17Z" />
                                                    </svg>
                                                @endfor


                                            </div>
                                        </div>
                                        <div class=" komentar mt-3">
                                            <p>{{ $row['review'] }}</p>
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    {{-- Destinasi Lainnya --}}
                    <div class=" bg-white rounded-2xl mt-8">
                        <div class="p-8">
                            <h1 class="text-2xl font-bold">Destinasi Lainnya</h1>
                            <div id="indicators-carousel" class="relative w-full mt-5" data-carousel="static">
                                <!-- Carousel wrapper -->
                                <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
                                    @foreach ($listdestinasi as $index => $row)
                                        @if (is_array($row) && isset($row['gambar'], $row['nama']))
                                            <div class="hidden duration-700 ease-in-out"
                                                data-carousel-item="{{ $index == 0 ? 'active' : '' }}">
                                                <a href="#" class="group relative block h-96  text-white">

                                                    <div class="relative flex h-96 transform items-end transition-transform group-hover:-translate-y-2 "
                                                        style="background-image: url('{{ env('APP_API_URL') }}/uploads/destinasiwisata/{{ $row['gambar'] }}'); background-size: cover; background-position: center;">
                                                        <div
                                                            class="absolute inset-0 bg-gradient-to-t from-black to-transparent opacity-40">
                                                        </div>
                                                        <div
                                                            class="p-4 !pt-0 z-10 transition-opacity group-hover:absolute group-hover:opacity-0 sm:p-6 lg:p-8">
                                                            <h2 class="mb-6 text-4xl font-bold sm:text-3xl">
                                                                {{ $row['nama'] }}</h2>
                                                        </div>
                                                        <div
                                                            class="absolute p-4 opacity-0 transition-opacity group-hover:relative group-hover:opacity-100 sm:p-6 lg:p-8 w-full">
                                                            <h3 class="mt-4 text-xl font-medium sm:text-2xl">
                                                                {{ $row['nama'] }}</h3>

                                                            <p class="mt-4 text-sm sm:text-base break-words w-full">
                                                                {{ \Illuminate\Support\Str::limit($row['deskripsi'], 100) }}
                                                            </p>
                                                            <p class="mt-4 font-bold">Read more</p>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        @endif
                                    @endforeach
                                </div>
                                <!-- Slider indicators -->
                                {{-- <div
                                    class="absolute z-30 flex -translate-x-1/2 space-x-3 rtl:space-x-reverse bottom-5 left-1/2">
                                    @foreach ($listdestinasi as $index => $row)
                                        @if (is_array($row))
                                            <button type="button"
                                                class="w-3 h-3 rounded-full {{ $index == 0 ? 'bg-white' : '' }}"
                                                aria-current="{{ $index == 0 ? 'true' : 'false' }}"
                                                aria-label="Slide {{ (int) $index + 1 }}"
                                                data-carousel-slide-to="{{ $index }}"></button>
                                        @endif
                                    @endforeach
                                </div> --}}
                                <!-- Slider controls -->
                                <button type="button"
                                    class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                                    data-carousel-prev>
                                    <span
                                        class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                                        <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180"
                                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                            viewBox="0 0 6 10">
                                            <path stroke="currentColor" stroke-linecap="round"
                                                stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4" />
                                        </svg>
                                        <span class="sr-only">Previous</span>
                                    </span>
                                </button>
                                <button type="button"
                                    class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                                    data-carousel-next>
                                    <span
                                        class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                                        <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180"
                                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                            viewBox="0 0 6 10">
                                            <path stroke="currentColor" stroke-linecap="round"
                                                stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
                                        </svg>
                                        <span class="sr-only">Next</span>
                                    </span>
                                </button>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
