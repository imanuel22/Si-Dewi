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
    <a href="/admin/profil-desa/{{$desa['id']}}/edit">edit</a>

    <h2 class="mb-2 text-lg font-semibold text-gray-900 dark:text-white">informasi desa</h2>
        <table>
            @if ($informasi['no_telp'])  
                <tr>
                    <td>No Telephone</td>
                    <td> : </td>
                    <td>{{$informasi['no_telp']}}</td>
                </tr>
            @endif
            @if ($informasi['no_wa'])    
                <tr>
                    <td>No WA</td>
                    <td> : </td>
                    <td>{{$informasi['no_wa']}}</td>
                </tr>
            @endif 
            @if ($informasi['facebook'])
            <tr>
                <td>Facebook</td>
                <td> : </td>
                <td>{{$informasi['facebook']}}</td>
            </tr>
            @endif
            @if ($informasi['instagram'])
            <tr>
                <td>Instagram</td>
                <td> : </td>
                <td>{{$informasi['instagram']}}</td>
            </tr>
            @endif
            @if ($informasi['website'])
            <tr>
                <td>Website</td>
                <td> : </td>
                <td>{{$informasi['website']}}</td>
            </tr>
            @endif
            @if ($informasi['email'])
            <tr>
                <td>Email</td>
                <td> : </td>
                <td>{{$informasi['email']}}</td>
            </tr>
            @endif
        </table>
    </ul>
</div>
@endsection
