@extends('superadmin.layouts.main')

@section('main')

@if (session()->has('message'))
<div id="toast-success" class="flex items-center w-full max-w-xs p-4 mb-4 text-gray-500 bg-white rounded-lg shadow dark:text-gray-400 dark:bg-gray-800" role="alert">
    <div class="inline-flex items-center justify-center flex-shrink-0 w-8 h-8 text-green-500 bg-green-100 rounded-lg dark:bg-green-800 dark:text-green-200">
        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
            <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"/>
        </svg>
        <span class="sr-only">Check icon</span>
    </div>
    <div class="ms-3 text-sm font-normal">{{session('message')}}</div>
    <button type="button" class="ms-auto -mx-1.5 -my-1.5 bg-white text-gray-400 hover:text-gray-900 rounded-lg focus:ring-2 focus:ring-gray-300 p-1.5 hover:bg-gray-100 inline-flex items-center justify-center h-8 w-8 dark:text-gray-500 dark:hover:text-white dark:bg-gray-800 dark:hover:bg-gray-700" data-dismiss-target="#toast-success" aria-label="Close">
        <span class="sr-only">Close</span>
        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
        </svg>
    </button>
</div>
    
@endif


<h1 class="mb-3">table desa wisata</h1>
    <a href="/superadmin/desa/create" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Add +</a>
<div class="relative overflow-x-auto mt-5">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    No
                </th>
                <th scope="col" class="px-6 py-3">
                    Nama
                </th>
                <th scope="col" class="px-6 py-3">
                    gambar
                </th>
                <th scope="col" class="px-6 py-3">
                    alamat
                </th>
                <th scope="col" class="px-6 py-3">
                    kategori
                </th>
                <th scope="col" class="px-6 py-3">
                    kabupaten
                </th>
                <th scope="col" class="px-6 py-3">
                    createdAt
                </th>
                <th scope="col" class="px-6 py-3">
                    updatedAt
                </th>
                <th scope="col" class="px-6 py-3">
                    Action
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($desawisata as $row)
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{$loop->iteration}}
                    </th>
                    <td class="px-6 py-4">
                        {{$row['nama']}}
                    </td>
                    <td class="px-6 py-4">
                        {{-- <img src="http://localhost:3000/uploads/desawisata/{{$row['gambar']}}" alt="{{$row['gambar']}}"> --}}
                    </td>
                    <td class="px-6 py-4">
                        {{$row['alamat']}}
                    </td>
                    <td class="px-6 py-4">
                        {{$row['kategori']}}
                    </td>
                    <td class="px-6 py-4">
                        {{$row['kabupaten']}}
                    </td>
                    <td class="px-6 py-4">
                        {{$row['createdAt']}}
                    </td>
                    <td class="px-6 py-4">
                        {{$row['updatedAt']}}
                    </td>
                    <td class="px-6 py-4 flex">
                        {{-- <a href="/superadmin/desa/create" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">S</a> --}}
                        <a href="/superadmin/desa/{{$row['id']}}/edit" class=" text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">E</a>
                        <form action="/superadmin/desa/{{$row['id']}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit" onclick="confirm('yakin')" class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">D</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection