@extends('guest.layouts.main')
@section('main')
    <div class="flex  mb-10">

        <div class="hidden md:block rounded-r-2xl rounded-t-none bg-white h-full w-1/6 drop-shadow pb-2">
            <div class="py-8 ">
                <form action="{{ route('jelajahi.filter') }}" method="GET">
                    <h3 class="mb-4 text-center text-2xl font-bold text-gray-900 dark:text-white">Kategori Desa</h3>
                    <div class="flex flex-col justify-center px-4">
                        <ul class="w-full text-lg font-medium text-gray-900 bg-white dark:text-white">
                            <li class="w-full  border-gray-200 rounded-t-lg dark:border-gray-600">
                                <div class="flex items-center ps-3">
                                    <input id="vue-checkbox" type="checkbox" name="kategori[]" value="Maju"
                                        {{ in_array('Maju', $selectedKategori) ? 'checked' : '' }}
                                        onchange="document.querySelector('form').submit()"
                                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                    <label for="vue-checkbox"
                                        class="w-full py-3 ms-2 font-medium text-gray-900 dark:text-gray-300">Maju</label>
                                </div>
                            </li>
                            <li class="w-full  border-gray-200 rounded-t-lg dark:border-gray-600">
                                <div class="flex items-center ps-3">
                                    <input id="react-checkbox" type="checkbox" name="kategori[]" value="Berkembang"
                                        {{ in_array('Berkembang', $selectedKategori) ? 'checked' : '' }}
                                        onchange="document.querySelector('form').submit()"
                                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                    <label for="react-checkbox"
                                        class="w-full py-3 ms-2  font-medium text-gray-900 dark:text-gray-300">Berkembang</label>
                                </div>
                            </li>
                            <li class="w-full  border-gray-200 rounded-t-lg dark:border-gray-600">
                                <div class="flex items-center ps-3">
                                    <input id="angular-checkbox" type="checkbox" name="kategori[]" value="Mandiri"
                                        {{ in_array('Mandiri', $selectedKategori) ? 'checked' : '' }}
                                        onchange="document.querySelector('form').submit()"
                                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                    <label for="angular-checkbox"
                                        class="w-full py-3 ms-2  font-medium text-gray-900 dark:text-gray-300">Mandiri</label>
                                </div>
                            </li>
                            <li class="w-full  border-gray-200 rounded-t-lg dark:border-gray-600">
                                <div class="flex items-center ps-3">
                                    <input id="laravel-checkbox" type="checkbox" name="kategori[]" value="Rintisan"
                                        {{ in_array('Rintisan', $selectedKategori) ? 'checked' : '' }}
                                        onchange="document.querySelector('form').submit()"
                                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                    <label for="laravel-checkbox"
                                        class="w-full py-3 ms-2  font-medium text-gray-900 dark:text-gray-300">Rintisan</label>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <hr class="my-5">
                    <h3 class=" mb-4 text-center text-2xl font-bold text-gray-900 dark:text-white">Kabupaten</h3>
                    <div class="flex flex-col justify-center  px-4">
                        <ul class="w-full text-lg font-medium text-gray-900 bg-white dark:text-white">
                            <li class="w-full ">
                                <div class="flex items-center ps-3">
                                    <input id="badung-checkbox" type="checkbox" name="kabupaten[]" value="Badung"
                                        {{ in_array('Badung', $selectedKabupaten) ? 'checked' : '' }}
                                        onchange="document.querySelector('form').submit()"
                                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                    <label for="badung-checkbox"
                                        class="w-full py-3 ms-2  font-medium text-gray-900 dark:text-gray-300">Badung</label>
                                </div>
                            </li>
                            <li class="w-full ">
                                <div class="flex items-center ps-3">
                                    <input id="bangli-checkbox" type="checkbox" name="kabupaten[]" value="Bangli"
                                        {{ in_array('Bangli', $selectedKabupaten) ? 'checked' : '' }}
                                        onchange="document.querySelector('form').submit()"
                                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                    <label for="bangli-checkbox"
                                        class="w-full py-3 ms-2  font-medium text-gray-900 dark:text-gray-300">Bangli</label>
                                </div>
                            </li>
                            <li class="w-full ">
                                <div class="flex items-center ps-3">
                                    <input id="buleleng-checkbox" type="checkbox" name="kabupaten[]" value="Buleleng"
                                        {{ in_array('Buleleng', $selectedKabupaten) ? 'checked' : '' }}
                                        onchange="document.querySelector('form').submit()"
                                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                    <label for="buleleng-checkbox"
                                        class="w-full py-3 ms-2  font-medium text-gray-900 dark:text-gray-300">Buleleng</label>
                                </div>
                            </li>
                            <li class="w-full ">
                                <div class="flex items-center ps-3">
                                    <input id="denpasar-checkbox" type="checkbox" name="kabupaten[]" value="Denpasar"
                                        {{ in_array('Denpasar', $selectedKabupaten) ? 'checked' : '' }}
                                        onchange="document.querySelector('form').submit()"
                                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                    <label for="denpasar-checkbox"
                                        class="w-full py-3 ms-2  font-medium text-gray-900 dark:text-gray-300">Denpasar</label>
                                </div>
                            </li>
                            <li class="w-full ">
                                <div class="flex items-center ps-3">
                                    <input id="gianyar-checkbox" type="checkbox" name="kabupaten[]" value="Gianyar"
                                        {{ in_array('Gianyar', $selectedKabupaten) ? 'checked' : '' }}
                                        onchange="document.querySelector('form').submit()"
                                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                    <label for="gianyar-checkbox"
                                        class="w-full py-3 ms-2  font-medium text-gray-900 dark:text-gray-300">Gianyar</label>
                                </div>
                            </li>
                            <li class="w-full ">
                                <div class="flex items-center ps-3">
                                    <input id="jembrana-checkbox" type="checkbox" name="kabupaten[]" value="Jembrana"
                                        {{ in_array('Jembrana', $selectedKabupaten) ? 'checked' : '' }}
                                        onchange="document.querySelector('form').submit()"
                                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                    <label for="jembrana-checkbox"
                                        class="w-full py-3 ms-2  font-medium text-gray-900 dark:text-gray-300">Jembrana</label>
                                </div>
                            </li>
                            <li class="w-full ">
                                <div class="flex items-center ps-3">
                                    <input id="karangasem-checkbox" type="checkbox" name="kabupaten[]"
                                        value="Karangasem"
                                        {{ in_array('Karangasem', $selectedKabupaten) ? 'checked' : '' }}
                                        onchange="document.querySelector('form').submit()"
                                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                    <label for="karangasem-checkbox"
                                        class="w-full py-3 ms-2  font-medium text-gray-900 dark:text-gray-300">Karangasem</label>
                                </div>
                            </li>
                            <li class="w-full ">
                                <div class="flex items-center ps-3">
                                    <input id="klungkung-checkbox" type="checkbox" name="kabupaten[]" value="Klungkung"
                                        {{ in_array('Klungkung', $selectedKabupaten) ? 'checked' : '' }}
                                        onchange="document.querySelector('form').submit()"
                                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                    <label for="klungkung-checkbox"
                                        class="w-full py-3 ms-2  font-medium text-gray-900 dark:text-gray-300">Klungkung</label>
                                </div>
                            </li>
                            <li class="w-full ">
                                <div class="flex items-center ps-3">
                                    <input id="tabanan-checkbox" type="checkbox" name="kabupaten[]" value="Tabanan"
                                        {{ in_array('Tabanan', $selectedKabupaten) ? 'checked' : '' }}
                                        onchange="document.querySelector('form').submit()"
                                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                    <label for="tabanan-checkbox"
                                        class="w-full py-3 ms-2  font-medium text-gray-900 dark:text-gray-300">Tabanan</label>
                                </div>
                            </li>
                        </ul>
                    </div>
                </form>
            </div>
        </div>
        {{-- <div class="form-container py-2 mt-1">
            <form action="{{ route('jelajahi.filter') }}" method="GET">
                <div class="mb-3">
                    <h3>kategori</h3>
                    <input type="checkbox" name="kategori[]" value="Berkembang"
                        {{ in_array('Berkembang', $selectedKategori) ? 'checked' : '' }}
                        onchange="document.querySelector('form').submit()"> Berkembang<br>
                    <input type="checkbox" name="kategori[]" value="Maju"
                        {{ in_array('Maju', $selectedKategori) ? 'checked' : '' }}
                        onchange="document.querySelector('form').submit()"> Maju<br>
                    <input type="checkbox" name="kategori[]" value="Mandiri"
                        {{ in_array('Mandiri', $selectedKategori) ? 'checked' : '' }}
                        onchange="document.querySelector('form').submit()"> Mandiri<br>
                    <input type="checkbox" name="kategori[]" value="Rintisan"
                        {{ in_array('Rintisan', $selectedKategori) ? 'checked' : '' }}
                        onchange="document.querySelector('form').submit()"> Rintisan<br>
                </div>

                <div class="mb-3">

                    <h3>kabupaten</h3>
                    <input type="checkbox" name="kabupaten[]" value="Badung"
                        {{ in_array('Badung', $selectedKabupaten) ? 'checked' : '' }}
                        onchange="document.querySelector('form').submit()"> Badung<br>
                    <input type="checkbox" name="kabupaten[]" value="Bangli"
                        {{ in_array('Bangli', $selectedKabupaten) ? 'checked' : '' }}
                        onchange="document.querySelector('form').submit()"> Bangli<br>
                    <input type="checkbox" name="kabupaten[]" value="Buleleng"
                        {{ in_array('Buleleng', $selectedKabupaten) ? 'checked' : '' }}
                        onchange="document.querySelector('form').submit()"> Buleleng<br>
                    <input type="checkbox" name="kabupaten[]" value="Denpasar"
                        {{ in_array('Denpasar', $selectedKabupaten) ? 'checked' : '' }}
                        onchange="document.querySelector('form').submit()"> Denpasar<br>
                    <input type="checkbox" name="kabupaten[]" value="Gianyar"
                        {{ in_array('Gianyar', $selectedKabupaten) ? 'checked' : '' }}
                        onchange="document.querySelector('form').submit()"> Gianyar<br>
                    <input type="checkbox" name="kabupaten[]" value="Jembrana"
                        {{ in_array('Jembrana', $selectedKabupaten) ? 'checked' : '' }}
                        onchange="document.querySelector('form').submit()"> Jembrana<br>
                    <input type="checkbox" name="kabupaten[]" value="Karangasem"
                        {{ in_array('Karangasem', $selectedKabupaten) ? 'checked' : '' }}
                        onchange="document.querySelector('form').submit()"> Karangasem<br>
                    <input type="checkbox" name="kabupaten[]" value="Klungkung"
                        {{ in_array('Klungkung', $selectedKabupaten) ? 'checked' : '' }}
                        onchange="document.querySelector('form').submit()"> Klungkung<br>
                    <input type="checkbox" name="kabupaten[]" value="Tabanan"
                        {{ in_array('Tabanan', $selectedKabupaten) ? 'checked' : '' }}
                        onchange="document.querySelector('form').submit()"> Tabanan<br>
                </div>


                <label for="simple-search" class="sr-only">Search</label>
                <div class="relative w-full">
                    <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                    </div>
                    <input type="text" id="simple-search" name="search"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Search Village Destination Here..." value="{{ request()->get('search') }}" />
                </div>
                <button type="submit"
                    class="p-2.5 ms-2 text-sm font-medium text-white bg-secondary rounded-lg border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                    </svg>
                    <span class="sr-only">Search</span>
                </button>
            </form>
        </div> --}}

        <div class="md:w-5/6 mt-8 mx-6 md:mx-8 grid  grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            @if ($desa)
                @foreach ($desa as $row)
                    <div class=" bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                        <a href="/desa/{{ $row['id'] }}">
                            <img class="rounded-t-lg h-64 relative"
                                src="{{ env('APP_API_URL') }}/uploads/destinasiwisata/{{ $row['gambar'] }}"
                                alt="{{ $row['nama'] }}" />
                        </a>
                        <div class="m-5 h-fit">
                            <a href="#">
                                <h5 class="mb-1 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                                    {{ $row['nama'] }}</h5>
                            </a>
                            <p class="mb-1 font-normal text-gray-700 dark:text-gray-400 break-words">
                                {{ \Illuminate\Support\Str::limit($row['deskripsi'], 100) }}</p>
                        </div>
                    </div>
                @endforeach
            @else
                <div class="text-center">
                    Tidak ada
                </div>
            @endif
            @if ($destinasi)
                @foreach ($destinasi as $row)
                    <div
                        class="w-full bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                        <a href="/desa/{{ $row['id'] }}">
                            <img class="rounded-t-lg h-64 relative"
                                src="{{ env('APP_API_URL') }}/uploads/destinasiwisata/{{ $row['gambar'] }}"
                                alt="{{ $row['nama'] }}" />
                        </a>
                        <div class="m-5 h-fit">
                            <a href="#">
                                <h5 class="mb-1 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                                    {{ $row['nama'] }}</h5>
                            </a>
                            <p class="mb-1 font-normal text-gray-700 dark:text-gray-400 break-words">
                                {{ \Illuminate\Support\Str::limit($row['deskripsi'], 100) }}</p>
                        </div>
                    </div>
                @endforeach
            @else
                <div class="text-center">
                    Tidak ada
                </div>
            @endif
        </div>
    </div>

@endsection
