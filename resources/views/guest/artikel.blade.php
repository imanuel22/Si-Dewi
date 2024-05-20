<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>

<body>
    <div class="container-fluid">
        <div class="Navbar mb-10">
        {{-- Navbar start --}}
        <nav class="sticky top-0 z-50 mx-72 bg-transparent   border-gray-200 font-bold">
            <div class="max-w-screen-xl flex items-center justify-between mx-auto p-4">
                <a href="/" class="flex items-center space-x-3 rtl:space-x-reverse">
                    <img src="{{ asset('storage/img/logoM.png') }}" class="h-12" alt="Logo" />
                    <span class="self-center text-2xl font-semibold whitespace-nowrap text-slate-700 dark:text-white">Si Dewi  </span>
                </a>
                <button data-collapse-toggle="navbar-default" type="button"
                    class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                    aria-controls="navbar-default" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 17 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M1 1h15M1 7h15M1 13h15" />
                    </svg>
                </button>
                <div class=" hidden w-full md:block md:w-auto" id="navbar-default">
                    <ul
                        class="poppins-bold flex flex-col p-4 md:p-0 mt-4 border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 rtl:space-x-reverse md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                        <li>
                            <a href="#"
                                class=" block py-2 px-3 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 dark:text-white md:dark:text-blue-500"
                                aria-current="page">Home</a>
                        </li>
                        <li>
                            <a href="#"
                                class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Desa</a>
                        </li>
                        <li>
                            <a href="#"
                                class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Artikel</a>
                        </li>
                        <li>
                            <a href="#"
                                class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Event</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
        {{-- Navbar End --}}

        {{-- content Start --}}
        <div class="flex justify-center  flex-row mx-auto">
            <div class="flex-1 w-32 ml-72 mr-5 p-4 bg-white border border-gray-200 rounded-lg shadow sm:p-8">
                <div class="flex items-center justify-between mb-4">
                    <h5 class="text-xl font-bold leading-none text-gray-900">List Berita</h5>
                </div>
                <div class="flow-root">
                        <ul role="list" class="divide-y divide-gray-200">
                            <li class="py-3 sm:py-4">
                                <div class="flex items-center">
                                    <div class="flex-1 min-w-0 ms-4">
                                        <p class="text-md font-medium text-gray-900 truncate">
                                            artikel 1
                                        </p>
                                        <p class="text-md text-gray-500 truncate">
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis commodi ipsam quibusdam.
                                        </p>
                                    </div>
                                </div>
                            </li>
                            <li class="py-3 sm:py-4">
                                <div class="flex items-center ">
                                    <div class="flex-1 min-w-0 ms-4">
                                        <p class="text-md font-medium text-gray-900 truncate">
                                            artikel 2
                                        </p>
                                        <p class="text-md text-gray-500 truncate">
                                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptate a sint pariatur.
                                        </p>
                                    </div>
                                </div>
                            </li>
                            <li class="py-3 sm:py-4">
                                <div class="flex items-center">
                                    <div class="flex-1 min-w-0 ms-4">
                                        <p class="text-md font-medium text-gray-900 truncate ">
                                            artikel 3
                                        </p>
                                        <p class="text-md text-gray-500 truncate">
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis rerum fugit at.
                                        </p>
                                    </div>
                                </div>
                            </li>
                            <li class="py-3 sm:py-4">
                                <div class="flex items-center ">
                                    <div class="flex-1 min-w-0 ms-4">
                                        <p class="text-md font-medium text-gray-900 truncate ">
                                            artikel 4
                                        </p>
                                        <p class="text-md text-gray-500 truncate">
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab dicta quia ipsam.
                                        </p>
                                    </div>
                                </div>
                            </li>
                            <li class="pt-3 pb-0 sm:pt-4">
                                <div class="flex items-center ">
                                    <div class="flex-1 min-w-0 ms-4">
                                        <p class="text-md font-medium text-gray-900 truncate ">
                                            artikel 5
                                        </p>
                                        <p class="text-md text-gray-500 truncate">
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil, ipsum magni! Unde!
                                        </p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
            </div>
            <div class=""></div>
            <div class="grid grid-cols-2 gap-y-5 gap-x-5 mr-72 ml-5 ">
                <div class="mx-auto w-80 h-40 overflow-hidden bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <a href="#" class="">
                        <img class="rounded-t-lg" src="{{ asset('storage/img/background.jpg') }}" alt="" />
                    </a>
                </div>
                <div class="mx-auto w-80 h-40 overflow-hidden bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <a href="#" class="">
                        <img class="rounded-t-lg" src="{{ asset('storage/img/background.jpg') }}" alt="" />
                    </a>
                </div>
                <div class="mx-auto w-80 h-40 overflow-hidden bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <a href="#" class="">
                        <img class="rounded-t-lg" src="{{ asset('storage/img/background.jpg') }}" alt="" />
                    </a>
                </div>
                <div class="mx-auto w-80 h-40 overflow-hidden bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <a href="#" class="">
                        <img class="rounded-t-lg" src="{{ asset('storage/img/background.jpg') }}" alt="" />
                    </a>
                </div>
                <div class="mx-auto w-80 h-40 overflow-hidden bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <a href="#" class="">
                        <img class="rounded-t-lg" src="{{ asset('storage/img/background.jpg') }}" alt="" />
                    </a>
                </div>
                </div>
            </div>
        
        </div>
        {{-- content End --}}
        
    </div>
</body>

</html>
