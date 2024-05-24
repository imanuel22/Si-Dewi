@extends('components.layout')

@section('main')

<h1 class="">table desa wisata</h1>
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
                    ketegori
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
                        <img src="localhost:3000/uploads/resource/desawisata/{{$row['gambar']}}" alt="">
                    </td>
                    <td class="px-6 py-4">
                        $2999
                    </td>
                </tr>
            @endforeach
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    Apple MacBook Pro 17"
                </th>
                <td class="px-6 py-4">
                    Silver
                </td>
                <td class="px-6 py-4">
                    Laptop
                </td>
                <td class="px-6 py-4">
                    $2999
                </td>
            </tr>
            
        </tbody>
    </table>
</div>

@endsection