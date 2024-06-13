@extends('Admin.layouts.main')

@section('main')
    
    <h1>Destinasi</h1>
    <div class="flex">

        <a href="/admin/destinasi" class=" text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">back</a>
        <a href="/admin/destinasi/{{$destinasi['id']}}/edit" class=" text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Edit</a>
        <form action="/admin/destinasi/{{$destinasi['id']}}" method="post" onsubmit="return confirm('yakin')">
        @csrf
        @method('DELETE')
        <button type="submit"class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">Delete</button>
        </form>
    </div>

    <h3>dibuat oleh desa {{$destinasi['id_desawisata']}}</h3>
    <p>type {{$destinasi['id_kategoridestinasi']}}</p>
    <p>dipublis tanggal {{$destinasi['createdAt']}}</p>
    <p>diupdate tanggal {{$destinasi['updatedAt']}}</p>
    <div class="border p-3 mt-3">
        <h2>{{$destinasi['nama']}}</h2>
        <img src="{{$destinasi['gambar']}}" alt="{{$destinasi['nama']}}" width="300" height="200">
        <p>{{$destinasi['deskripsi']}}</p>
    </div>

    <div class="border mt-3 p-3">
        <h2>Review</h2>
    
        
    </div>
@endsection