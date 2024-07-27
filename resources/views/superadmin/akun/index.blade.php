@extends('superadmin.layouts.main')
@section('main')
    @if (session()->has('message'))
        <div id="toast-success"
            class="flex z-50 items-center w-full max-w-xs p-4 mb-4 text-gray-500 bg-white rounded-lg shadow dark:text-gray-400 dark:bg-gray-800 fixed bottom-14 right-14 opacity-0 transform translate-y-4 transition-all duration-500 ease-in-out"
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
        <h2 class="mb-3  font-bold tracking-tight text-gray-500 ">Akun / Table </h2>
        <div class="flex justify-between">
            <p class=" text-3xl font-semibold tracking-tight text-gray-900 dark:text-white"> Table Akun
            </p>
            <a href="/superadmin/akun/create"
                class="text-white bg-primary-200 hover:bg-primary-100 focus:ring-4 focus:ring-teal-200 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-primary-200 darl:hover:bg-primary-100  dark:focus:ring-teal-200 focus:outline-none ">Tambah
                +</a>
        </div>
        <div class="relative overflow-x-auto mt-5 bg-white border-gray-200 rounded-lg shadow p-3">
            <table id="myTable" class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs  text-gray-700 uppercase  dark:bg-gray-700 dark:text-gray-400">
                    <tr class="border">
                        <th scope="col" class="px-6 py-3 text-center border w-12">
                            No
                        </th>
                        <th scope="col" class="px-6 py-3 text-center border">
                            Nama
                        </th>
                        <th scope="col" class="px-6 py-3 text-center border">
                            Foto
                        </th>

                        <th scope="col" class="px-6 py-3 text-center border">
                            email
                        </th>
                        <th scope="col" class="px-6 py-3 text-center border">
                            role
                        </th>
                        {{-- <th scope="col" class="px-6 py-3 text-center border">
                            createdAt
                        </th>
                        <th scope="col" class="px-6 py-3 text-center border">
                            updatedAt
                        </th> --}}
                        <th scope="col" class="px-6 py-3 text-center border">
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($akun as $row)
                        <tr class="bg-white dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                            <th scope="row"
                                class="border px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{ $loop->iteration }}
                            </th>
                            <td class="border px-6 py-4 text-center">
                                {{ $row['nama'] }}
                            </td>
                            <td class="border py-4 text-center">
                                <div class="flex justify-center">
                                    <img class="max-h-40 w-40 rounded-full"
                                        src="{{ env('APP_API_URL') }}/resource/akun/{{ $row['foto'] }}"
                                        alt="{{ $row['nama'] }}">
                                </div>
                            </td>
                            <td class="border px-6 py-4 text-center">
                                {{ $row['email'] }}
                            </td>
                            <td class="border px-6 py-4 text-center">
                                {{ $row['role'] }}
                            </td>
                            {{-- <td class="border px-6 py-4 text-center">
                                {{ $row['createdAt'] }}
                            </td>
                            <td class="border px-6 py-4 text-center">
                                {{ $row['updatedAt'] }}
                            </td> --}}
                            <td class="border px-6 py-4 ">
                                {{-- <a href="/superadmin/akun/create" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">S</a> --}}
                                <div class=" flex justify-center items-center">
                                    <form action="/superadmin/akun/{{ $row['id'] }}" method="post"
                                        onsubmit="return confirm('yakin')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"
                                            class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900"><svg
                                                class="w-6 h-6 text-white" aria-hidden="true"
                                                xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                fill="currentColor" viewBox="0 0 24 24">
                                                <path fill-rule="evenodd"
                                                    d="M8.586 2.586A2 2 0 0 1 10 2h4a2 2 0 0 1 2 2v2h3a1 1 0 1 1 0 2v12a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V8a1 1 0 0 1 0-2h3V4a2 2 0 0 1 .586-1.414ZM10 6h4V4h-4v2Zm1 4a1 1 0 1 0-2 0v8a1 1 0 1 0 2 0v-8Zm4 0a1 1 0 1 0-2 0v8a1 1 0 1 0 2 0v-8Z"
                                                    clip-rule="evenodd" />
                                            </svg></button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
