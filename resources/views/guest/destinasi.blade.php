@extends('guest.layouts.main')

@section('main')
        <div class="inset-0 bg-black opacity-70"> </div>
        <img src="{{ env('APP_API_URL') }}/uploads/destinasiwisata/{{ $destinasi['gambar'] }}"
            alt="{{ $destinasi['nama'] }}" class=" bg-slate-500 inset-0 w-full h-96 object-cover">
        {{-- background --}}
        {{-- content --}}
        <div class=" sm:container -mt-20 drop-shadow text-justify  mx-auto">
            <div class="flex gap-8">
                {{-- Deskripsi Destinasi --}}
                @include('guest.destinasi.deskripsi')
                {{-- Card Kanan --}}
                <div class="mb-2  w-2/5 ">
                    {{-- Rating --}}
                   @include('guest.destinasi.rating')
                    {{-- Destinasi Lainnya --}}
                   @include('guest.destinasi.destinasi_lainnya')
                </div>
            </div>
        </div>
@endsection
