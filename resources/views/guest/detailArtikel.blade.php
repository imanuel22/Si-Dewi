@extends('guest.layouts.main')

@section('main')
    <div class="container-fluid ">
        {{-- content Start --}}
        <div class="container-fluid mx-auto">
            {{-- artikel start --}}
            @include('guest.detailArtikel.recent_post')
            {{-- side --}}
            <div class="grid grid-cols-1 row-start-2">
                <aside class="sidebar">
                    @include('guest.detailArtikel.filter')
                    @include('guest.detailArtikel.side')
                </aside>
            </div>
        </div>
    </div>
@endsection
