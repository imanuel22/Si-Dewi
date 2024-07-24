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
    @include('guest.destinasi.map')
</div>
