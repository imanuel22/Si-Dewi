@extends('guest.layouts.main')

@section('main')
    <div class="container-fluid ">
        {{-- content Start --}}
        <div class="container-fluid mx-auto">
            {{-- artikel start --}}
            @include('guest.artikel.recent_post')
            {{-- side --}}
            <div class="grid grid-cols-1 row-start-2 md:w-5/6 mt-1 md:mx-8">
                <aside class="sidebar">
                    @include('guest.artikel.filter')
                    @include('guest.artikel.side')
                </aside>
            </div>
        </div>
    </div>
@endsection
