<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<body>
    <div class="container-fluid h-screen">
        {{-- @include('partials.navbar') --}}
        <div class="form-container py-2 mt-1">
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


        </div>

        <div class="container mx-auto px-24 mt-5">
            <div class="flex flex-wrap -mx-4">
                @if ($desa)

                    @foreach ($desa as $row)
                        <div class="w-full md:w-1/2 lg:w-1/4 px-4 mb-8">
                            <div
                                class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                                <a href="#">
                                    <img class="rounded-t-lg" src="{{ asset('storage/img/tanahlot.jpg') }}"
                                        alt="" />
                                </a>
                                <div class="p-6">
                                    <a href="/desa/{{ $row['id'] }}">
                                        <h5
                                            class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                                            {{ $row['nama'] }}</h5>
                                        {{ $row['kategori'] }}</h5>
                                        {{ $row['kabupaten'] }}</h5>
                                    </a>
                                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                                        {{ Str::limit($row['deskripsi'], 500, '...') }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif
                @if ($destinasi)
                    @foreach ($destinasi as $row)
                        <div class="w-full md:w-1/2 lg:w-1/4 px-4 mb-8">
                            <div
                                class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                                <a href="#">
                                    <img class="rounded-t-lg" src="{{ asset('storage/img/tanahlot.jpg') }}"
                                        alt="" />
                                </a>
                                <div class="p-6">
                                    <a href="/desa/{{ $row['id'] }}">
                                        <h5
                                            class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                                            {{ $row['nama'] }}</h5>
                                        {{ $row['id_desawisata'] }}</h5>

                                    </a>
                                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                                        {{ Str::limit($row['deskripsi'], 500, '...') }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>



    </div>

    @include('partials.footer')
</body>
<script>
    AOS.init();
</script>

</html>
