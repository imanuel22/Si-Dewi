{{-- <nav class="fixed z-10 top-0 bg-transparent backdrop-blur-md shadow-md x2l:px-44 md:px-20 sm:px-20 w-screen">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
    <a href="#" class="flex items-center space-x-3 rtl:space-x-reverse">
          <img src="{{ asset('storage/img/logo.png') }}" class="h-8" alt="Flowbite Logo" />
        <span class="self-center text-2xl grechen-fuemen-regular font-semibold whitespace-nowrap dark:text-white">Si Dewi</span>
    </a>
    <button data-collapse-toggle="navbar-solid-bg" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm
     text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400
      dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-solid-bg" aria-expanded="false">
        <span class="sr-only">Open main menu</span>
        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
        </svg>
    </button>
    <div class="w-full  md:block md:w-auto bg-blend-difference mix-blend-difference text-slate-950 " id="navbar-solid-bg">
        <ul class="flex flex-col font-medium mt-4 rounded-lg md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0
         md:border-0 md:bg-transparent dark:bg-gray-800 md:dark:bg-transparent dark:border-gray-700 ">
        <li class="lg:mx-7 ">
            <a href="{{url('/')}}" class="block text- py-2 px-3 md:p-0 text-white  bg-blue-700 rounded md:bg-transparent md:dark:bg-transparent hover:bg-gray-100 md:hover:bg-transparent md:border-0
            md:hover:text-blue-700  md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-gray-900
            md:dark:hover:bg-transparent mix-blend-lighten" aria-current="page">Home</a>
        </li>
        <li class="lg:px-7">
            <a href="{{url('/artikel')}}" class="block py-2 px-3 md:p-0 text-white rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0
             md:hover:text-blue-700  md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-gray-900
             md:dark:hover:bg-transparent">Artikel</a>
         </li>
        <li class="lg:pl-7">
            <a href="{{url('/event')}}" class="block py-2 px-3 md:p-0 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0
             md:hover:text-blue-700 text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-gray-900
              md:dark:hover:bg-transparent">Event</a>
        </li>
        </ul>
    </div>
    </div>
</nav> --}}

<nav class="bg-secondary  text-white sticky top-0 z-10 ">
    <div class="xl:mx-56 p-4 xl:px-0 ">
        <div class="max-w-screen flex flex-wrap items-center justify-between mx-auto ">
            <a href="https://flowbite.com/" class="flex items-center space-x-3 rtl:space-x-reverse">
                <img src="{{ asset('img/logo_notext.png') }}" class="h-12" alt="Logo" />
                <span class="self-center text-2xl grechen-fuemen-regular font-semibold whitespace-nowrap">Si Dewi</span>
            </a>
            <div class="flex md:order-2">
                <form action="/jelajahi/filter" method="get">
                    <button type="button" data-collapse-toggle="navbar-search" aria-controls="navbar-search"
                        aria-expanded="false"
                        class="md:hidden text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 focus:outline-none focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 rounded-lg text-sm p-2.5 me-1">
                        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                        </svg>
                        <span class="sr-only">Search</span>
                    </button>
                    <div class="relative hidden md:block">
                        <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                            </svg>
                            <span class="sr-only">Search icon</span>
                        </div>
                        <input type="text" id="search-navbar" name="search"
                            class="block w-full p-2 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Search...">
                    </div>
                    <button data-collapse-toggle="navbar-search" type="button"
                        class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                        aria-controls="navbar-search" aria-expanded="false">
                        <span class="sr-only">Open main menu</span>
                        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 17 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M1 1h15M1 7h15M1 13h15" />
                        </svg>
                    </button>
                </form>
            </div>
            <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-search">
                <div class="relative mt-3 md:hidden">
                    <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                        <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                        </svg>
                    </div>
                    <input type="text" id="search-navbar"
                        class="block w-full p-2 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Search...">
                </div>
                <ul
                    class="flex flex-col p-4 md:p-0 mt-4 font-medium border border-gray-100 rounded-lg md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0">
                    <li>
                        <a href="{{ url('/') }}" class="block py-2 px-3 rounded md:bg-transparent"
                            aria-current="page">Home</a>
                    </li>
                    <li>
                        <a href="{{ url('/jelajahi') }}"
                            class="block py-2 px-3 rounded hover:bg-gray-100 md:hover:bg-transparent">Desa Wisata</a>
                    </li>
                    <li>
                        <a href="{{ url('/artikel') }}"
                            class="block py-2 px-3 rounded hover:bg-gray-100 md:hover:bg-transparent">Artikel</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>
