@extends('guest.layouts.main')
@section('main')
    <div class="inset-0 bg-black opacity-70"> </div>
    <img src="{{ env('APP_API_URL') }}/uploads/produk/{{ $produk['gambar'] }}" alt="{{ $produk['nama'] }}"
        class=" bg-slate-500 inset-0 w-full h-96 object-cover" style="width: 100vw;">
    {{-- background --}}
    {{-- content --}}
    <div class=" sm:container -mt-10 drop-shadow text-justify  mx-auto">
        <div class="flex gap-6">
            {{-- Deskripsi produk --}}
            @include('guest.produk.deskripsi')
            {{-- Card Kanan --}}
            <div class="mb-2  w-2/6 ">
                @include('guest.produk.harga')
                {{-- produk Lainnya --}}
                @include('guest.produk.produk_lainnya')
            </div>
        </div>
    </div>
@endsection
