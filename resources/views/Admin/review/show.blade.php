@extends('Admin.layouts.main')

@section('main')
    @if (session()->has('message'))
        <div id="toast-success"
            class="flex items-center w-full max-w-xs p-4 mb-4 text-gray-500 bg-white rounded-lg shadow dark:text-gray-400 dark:bg-gray-800 fixed bottom-14 right-14 opacity-0 transform translate-y-4 transition-all duration-500 ease-in-out"
            role="alert">
            <div
                class="inline-flex items-center justify-center flex-shrink-0 w-8 h-8 text-green-500 bg-green-100 rounded-lg dark:bg-green-800 dark:text-green-200">
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                    viewBox="0 0 20 20">
                    <path
                        d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                </svg>
                <span class="sr-only">Check icon</span>
            </div>
            <div class="ms-3 text-sm font-normal">{{ session('message') }}</div>
            <button type="button"
                class="ms-auto -mx-1.5 -my-1.5 bg-white text-gray-400 hover:text-gray-900 rounded-lg focus:ring-2 focus:ring-gray-300 p-1.5 hover:bg-gray-100 inline-flex items-center justify-center h-8 w-8 dark:text-gray-500 dark:hover:text-white dark:bg-gray-800 dark:hover:bg-gray-700"
                data-dismiss-target="#toast-success" aria-label="Close">
                <span class="sr-only">Close</span>
                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 14 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                </svg>
            </button>
        </div>
    @endif


    <div class="mx-4">
        <h2 class="mb-3 font-bold tracking-tight text-gray-500">Destinasi Wisata / Ulasan</h2>

        <div class="flex justify-between">
            <p class="text-3xl font-semibold tracking-tight text-gray-900 dark:text-white">Wisata Tari Pendet</p>
        </div>
        <h2 class="mb-5 font-bold tracking-tight text-gray-500">Tari Kesenian</h2>
        {{-- <h3>dibuat oleh desa {{ $destinasi['id_desawisata'] }}</h3> --}}
        {{-- <p>type {{ $destinasi['id_kategoridestinasi'] }}</p> --}}
        {{-- <div
            class="mt-8 mb-5 block p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700 max-w-full overflow-hidden">
            <img src="{{ $destinasi['gambar'] }}" alt="{{ $destinasi['nama'] }}" width="300" height="200"
                class="block mx-auto">
            <div class="mt-5 max-w-full">
                <p class="break-words">{{ $destinasi['deskripsi'] }}</p>
                <p class="flex justify-end">{{ $destinasi['updatedAt'] }}</p>
            </div>
        </div> --}}
        <div class="relative overflow-x-auto mt-5">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            No
                        </th>
                        <th scope="col" class="px-6 py-3 text-center">
                            akun
                        </th>
                        <th scope="col" class="px-6 py-3 text-center">
                            rating
                        </th>
                        <th scope="col" class="px-6 py-3">
                            review
                        </th>
                        {{-- <th scope="col" class="px-6 py-3">
                            createdAt
                        </th>
                        <th scope="col" class="px-6 py-3">
                            updatedAt
                        </th> --}}
                        <th scope="col" class="px-6 py-3 text-center">
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($review as $row)
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <th scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{ $loop->iteration }}
                            </th>
                            <td class="px-6 py-4 text-center">
                                {{ $row['id_akun'] }}
                            </td>
                            <td class="px-6 py-4 text-center">
                                {{ $row['rating'] }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $row['review'] }}
                            </td>
                            {{-- <td class="px-6 py-4">
                                {{ $row['createdAt'] }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $row['updatedAt'] }}
                            </td> --}}
                            <td class="px-6 py-4 flex justify-center">
                                {{-- <a href="/superadmin/desa/create" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">S</a> --}}
                                <form action="/admin/review/{{ $row['id'] }}" method="post">
                                    @csrf
                                    <input type="hidden" name="id" value="{{ $row['id_destinasiwisata'] }}">
                                    @method('PATCH')
                                    <button type="submit" onclick="confirm('yakin')" name="setujui" value="1"
                                        class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-900"><svg
                                            class="w-6 h-6 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                            width="24" height="24" fill="none" viewBox="0 0 24 24">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="3" d="M5 11.917 9.724 16.5 19 7.5" />
                                        </svg>
                                    </button>
                                    <button type="submit" onclick="confirm('yakin')" name="setujui" value="0"
                                        class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900"><svg
                                            class="w-6 h-6 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                            width="24" height="24" fill="none" viewBox="0 0 24 24">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="3" d="M6 18 17.94 6M18 18 6.06 6" />
                                        </svg>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
