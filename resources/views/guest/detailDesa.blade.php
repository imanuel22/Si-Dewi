@extends('guest.layouts.main')
@section('main')
    <div class="inset-0 bg-black opacity-70"> </div>
    <img src="{{ env('APP_API_URL') }}/uploads/desawisata/{{ $desa['gambar'] }}" alt=""
        class=" inset-0 w-full h-full object-cover" style="width: 100vw;">
    {{-- background --}}
    {{-- content --}}
    <div class="mt-6 xl:mx-56 p-4 xl:px-0 ">
        <div class="gap-6 sm:flex">
            @include('guest.desa.deskripsi')
            <div class="sm:w-2/6 ">
                @include('guest.desa.contact')
                @include('guest.desa.map')
            </div>
        </div>
        {{-- tab --}}
        @include('guest.desa.nav_tab')

        <div id="default-styled-tab-content ">
            @include('guest.desa.tab_destinasi')
            @include('guest.desa.tab_akomodasi')
            @include('guest.desa.tab_produk')
            @include('guest.desa.tab_paket')
        </div>
    </div>
    {{-- tab --}}
@endsection
