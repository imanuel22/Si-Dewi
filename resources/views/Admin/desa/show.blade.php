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


<div class="border mt-3 p-3">
    <h2 class="mb-2 text-lg font-semibold text-gray-900 dark:text-white">informasi desa</h2>
    @if (!$informasi)
    <a href="/admin/informasi/create">add</a>

    @else
    @foreach ($informasi as $row)
    <a href="/admin/informasi/{{$row['id']}}/edit">edit</a>

    <table>
        @if ($row['no_telp'])  
            <tr>
                <td>No Telephone</td>
                <td> : </td>
                <td>{{$row['no_telp']}}</td>
            </tr>
        @endif
        @if ($row['no_wa'])    
            <tr>
                <td>No WA</td>
                <td> : </td>
                <td>{{$row['no_wa']}}</td>
            </tr>
        @endif 
        @if ($row['facebook'])
        <tr>
            <td>Facebook</td>
            <td> : </td>
            <td>{{$row['facebook']}}</td>
        </tr>
        @endif
        @if ($row['instagram'])
        <tr>
            <td>Instagram</td>
            <td> : </td>
            <td>{{$row['instagram']}}</td>
        </tr>
        @endif
        @if ($row['website'])
        <tr>
            <td>Website</td>
            <td> : </td>
            <td>{{$row['website']}}</td>
        </tr>
        @endif
        @if ($row['email'])
        <tr>
            <td>Email</td>
            <td> : </td>
            <td>{{$row['email']}}</td>
        </tr>
        @endif
    </table>
    @endforeach
    
    @endif
</div>
@endsection
