@extends('guest.layouts.main')

@section('main')
    <div class="container-fluid ">
        {{-- content Start --}}
        <div class="container-fluid mx-auto">
            {{-- artikel start --}}
            @include('guest.artikel.recent_post')
                    {{-- side --}}
                    @include('guest.artikel.side')
        </div>
    </div>
@endsection
