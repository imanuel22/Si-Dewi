<div class="md:w-5/6 mt-8 mx-6 md:mx-8">
    @if ($desa)
    <div class=" grid  grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
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

    </div>
    <div class="flex justify-center mt-10">
     {{ $desa->links() }}
    </div>
    @else
        <div class="text-center">
            Tidak ada
        </div>
    @endif
    {{-- @if ($destinasi)
        @foreach ($destinasi as $row)
            <div class="w-full bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
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
        {{ $destinasi->links() }}
    @else
        <div class="text-center">
            Tidak ada
        </div>
    @endif --}}
</div>
