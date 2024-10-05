@extends('Admin.layouts.main')

@section('main')
    @if (session()->has('message'))
        <div id="toast-success"
            class="fixed z-50 flex items-center w-full max-w-xs p-4 mb-4 text-gray-500 transition-all duration-500 ease-in-out transform translate-y-4 bg-white rounded-lg shadow opacity-0 dark:text-gray-400 dark:bg-gray-800 bottom-14 right-14"
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
            <div class="text-sm font-normal ms-3">{{ session('message') }}</div>
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
        <h2 class="mb-3 font-bold tracking-tight text-gray-500 ">Akomodasi / Table </h2>
        <div class="flex justify-between">
            <h1 class="text-3xl font-semibold tracking-tight text-gray-900  dark:text-white"> Akomodasi Wisata</h1>
            <a href="/admin/akomodasi/create"
                class="text-white bg-primary-200 hover:bg-primary-100 focus:ring-4 focus:ring-teal-200 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-primary-200 darl:hover:bg-primary-100  dark:focus:ring-teal-200 focus:outline-none ">Tambah
                +</a>
        </div>
        <div class="relative p-3 mt-5 overflow-x-auto bg-white border-gray-200 rounded-lg shadow">
            <table id="myTable" class="w-full text-sm text-left text-gray-500 rtl:text-right dark:text-gray-400 table-fixed">
                <thead class="text-xs text-gray-700 uppercase dark:bg-gray-700 dark:text-gray-400">
                    <tr class="border">
                        <th scope="col" class="w-12 px-6 py-3 text-center border">No</th>
                        <th scope="col" class="w-1/6 px-6 py-3 text-center border">Nama</th>
                        <th scope="col" class="w-3/6 px-6 py-3 text-center border">Gambar</th>
                        <th scope="col" class="w-1/6 px-6 py-3 text-center border">Kategori</th>
                        <th scope="col" class="w-1/6 px-6 py-3 text-center border">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($akomodasi as $row)
                    <tr class="bg-white dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 border whitespace-nowrap dark:text-white">
                            {{ $loop->iteration }}
                        </th>
                        <td class="px-6 py-4 text-center border font-bold text-black">
                            {{ $row['nama'] }}
                        </td>
                        <td class="flex justify-center py-4 text-center border">
                            <img class="h-60 w-auto object-cover" src="{{ env('APP_API_URL') }}/resource/akomodasi/{{ $row['gambar'] }}" alt="{{ $row['gambar'] }}">
                        </td>
                        <td class="px-6 py-4 text-center border font-bold">
                            @php
                                $bgColor = 'bg-white';
                                if ($row['kategori'] == 'Hotel') {
                                    $bgColor = 'text-white bg-red-700 hover:bg-red-800 focus:outline-none focus:ring-4 focus:ring-red-300 font-medium rounded-full text-sm px-5 py-2.5 text-center me-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900';
                                } elseif ($row['kategori'] == 'Penginapan') {
                                    $bgColor = 'text-white bg-green-700 hover:bg-green-800 focus:outline-none focus:ring-4 focus:ring-green-300 font-medium rounded-full text-sm px-5 py-2.5 text-center me-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800';
                                } elseif ($row['kategori'] == 'Villa') {
                                    $bgColor = 'text-white bg-yellow-400 hover:bg-yellow-500 focus:outline-none focus:ring-4 focus:ring-yellow-300 font-medium rounded-full text-sm px-5 py-2.5 text-center me-2 mb-2 dark:focus:ring-yellow-900';
                                }
                            @endphp
                            <div class="{{ $bgColor }} p-4 rounded-3xl">
                                {{ $row['kategori'] }}
                            </div>
                        </td>
                        <td class="px-6 py-4 border">
                            <div class="flex justify-center">
                                <a href="/admin/akomodasi/{{ $row['id'] }}/edit" class="focus:outline-none text-white bg-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:focus:ring-yellow-900">
                                    <svg class="w-6 h-6 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                        <path fill-rule="evenodd" d="M11.32 6.176H5c-1.105 0-2 .949-2 2.118v10.588C3 20.052 3.895 21 5 21h11c1.105 0 2-.948 2-2.118v-7.75l-3.914 4.144A2.46 2.46 0 0 1 12.81 16l-2.681.568c-1.75.37-3.292-1.263-2.942-3.115l.536-2.839c.097-.512.335-.983.684-1.352l2.914-3.086Z" clip-rule="evenodd" />
                                        <path fill-rule="evenodd" d="M19.846 4.318a2.148 2.148 0 0 0-.437-.692 2.014 2.014 0 0 0-.654-.463 1.92 1.92 0 0 0-1.544 0 2.014 2.014 0 0 0-.654.463l-.546.578 2.852 3.02.546-.579a2.14 2.14 0 0 0 .437-.692 2.244 2.244 0 0 0 0-1.635ZM17.45 8.721 14.597 5.7 9.82 10.76a.54.54 0 0 0-.137.27l-.536 2.84c-.07.37.239.696.588.622l2.682-.567a.492.492 0 0 0 .255-.145l4.778-5.06Z" clip-rule="evenodd" />
                                    </svg>
                                </a>
                                <form action="/admin/akomodasi/{{ $row['id'] }}" method="post" class="delete-form">
                                    @csrf
                                    @method('DELETE')
                                    <button type="button" class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900 delete-button">
                                        <svg class="w-6 h-6 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                            <path fill-rule="evenodd" d="M8.586 2.586A2 2 0 0 1 10 2h4a2 2 0 0 1 2 2v2h3a1 1 0 1 1 0 2v12a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V8a1 1 0 0 1 0-2h3V4a2 2 0 0 1 .586-1.414ZM10 6h4V4h-4v2Zm1 4a1 1 0 1 0-2 0v8a1 1 0 1 0 2 0v-8Zm4 0a1 1 0 1 0-2 0v8a1 1 0 1 0 2 0v-8Z" clip-rule="evenodd" />
                                        </svg>
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

        </div>

    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var toast = document.getElementById('toast-success');
            if (toast) {
                // Animasi muncul
                setTimeout(function() {
                    toast.classList.remove('opacity-0', 'translate-y-4');
                }, 100); // Sedikit delay untuk memastikan animasi terlihat

                // Animasi hilang setelah 5 detik
                setTimeout(function() {
                    toast.classList.add('opacity-0', 'translate-y-4');
                    setTimeout(function() {
                        toast.remove();
                    }, 500); // Durasi yang sesuai dengan `transition-all duration-500`
                }, 5000);
            }
        });
    </script>
@endsection

<!-- Include external scripts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="https://cdn.datatables.net/2.0.8/js/dataTables.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
    /*! DataTables Tailwind CSS integration */
    (function(factory) {
        if (typeof define === 'function' && define.amd) {
            define(['jquery', 'datatables.net'], function($) {
                return factory($, window, document);
            });
        } else if (typeof exports === 'object') {
            var jq = require('jquery');
            var cjsRequires = function(root, $) {
                if (!$.fn.dataTable) {
                    require('datatables.net')(root, $);
                }
            };

            if (typeof window === 'undefined') {
                module.exports = function(root, $) {
                    root = root || window;
                    $ = $ || jq(root);
                    cjsRequires(root, $);
                    return factory($, root, root.document);
                };
            } else {
                cjsRequires(window, jq);
                module.exports = factory(jq, window, window.document);
            }
        } else {
            factory(jQuery, window, document);
        }
    }(function($, window, document) {
        'use strict';
        var DataTable = $.fn.dataTable;

        // Extend DataTables defaults for Tailwind CSS
        $.extend(true, DataTable.defaults, { renderer: 'tailwindcss' });
        $.extend(true, DataTable.ext.classes, {
            container: "dt-container dt-tailwindcss",
            search: { input: "border bg-gray-100 ..." },
            length: { select: "border px-3 py-2 ..." },
          
            table: 'dataTable min-w-full text-sm align-middle whitespace-nowrap',
            thead: { row: 'dark:border-gray-700/50', cell: 'border px-3 py-4 text-center' },
            tbody: { cell: 'border text-center' },
        });

        // Renderer for Tailwind CSS paging button
        DataTable.ext.renderer.pagingButton.tailwindcss = function(settings, buttonType, content, active, disabled) {
            var classes = settings.oClasses.paging;
            var btnClasses = [classes.button];
            btnClasses.push(active ? classes.active : classes.notActive);
            btnClasses.push(disabled ? classes.notEnabled : classes.enabled);

            var a = $('<a>', { href: disabled ? null : '#', class: btnClasses.join(' ') }).html(content);
            return { display: a, clicker: a };
        };

        return DataTable;
    }));

    // Initialize DataTable
    $(document).ready(function() {
        var table = new DataTable('#myTable');

        // Re-attach SweetAlert event listener on table draw (pagination, etc.)
        table.on('draw.dt', function() {
            attachDeleteEvent();
        });

        // Initial attachment of delete buttons
        attachDeleteEvent();
    });

    // Function to attach SweetAlert to delete buttons
    function attachDeleteEvent() {
        const swalWithTailwindButtons = Swal.mixin({
            customClass: {
                confirmButton: 'bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 mx-2 rounded',
                cancelButton: 'bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 mx-2 rounded'
            },
            buttonsStyling: false
        });

        var deleteButtons = document.querySelectorAll('.delete-button');

        deleteButtons.forEach(function(button) {
            button.removeEventListener('click', handleDeleteEvent); // Ensure no duplicate listeners
            button.addEventListener('click', handleDeleteEvent);
        });

        function handleDeleteEvent() {
            var form = this.closest('.delete-form');
            swalWithTailwindButtons.fire({
                title: "Yakin menghapus data?",
                text: "Data yang sudah dihapus tidak bisa dikembalikan!",
                icon: "warning",
                showCancelButton: true,
                cancelButtonText: "Tidak, batal!",
                confirmButtonText: "Ya, hapus!",
                reverseButtons: true
            }).then((result) => {
                if (result.isConfirmed) {
                    swalWithTailwindButtons.fire({
                        title: "Deleted!",
                        text: "Data telah dihapus.",
                        icon: "success"
                    }).then(() => {
                        form.submit();
                    });
                } else if (result.dismiss === Swal.DismissReason.cancel) {
                    swalWithTailwindButtons.fire({
                        title: "Cancelled",
                        text: "Data batal dihapus",
                        icon: "error"
                    });
                }
            });
        }
    }

    // Toast notification animation
    document.addEventListener('DOMContentLoaded', function() {
        var toast = document.getElementById('toast-success');
        if (toast) {
            setTimeout(function() {
                toast.classList.remove('opacity-0', 'translate-y-4');
            }, 100);

            setTimeout(function() {
                toast.classList.add('opacity-0', 'translate-y-4');
                setTimeout(function() {
                    toast.remove();
                }, 500);
            }, 5000);
        }
    });
</script>