@extends('Admin.layouts.main')

@section('main')
    <h1>halaman desa</h1>

    {{$desa['kategori']}} / {{$desa['kabupaten']}}
    <a href="/admin/profil-desa/{{$desa['id']}}/edit">edit</a>
    <div class="border mt-3 p-3">
        <h2>{{$desa['nama']}}</h2>
        <img src="{{$desa['gambar']}}" alt="{{$desa['nama']}}" width="300" height="200">
        <p>{{$desa['alamat']}}</p>
        <p>{{$desa['deskripsi']}}</p>
    </div>
@endsection
