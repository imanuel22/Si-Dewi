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
