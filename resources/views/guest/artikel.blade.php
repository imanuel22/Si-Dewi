<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>





  
@yield('container')

<body class="">
    <div class="container-fluid">
        @include('partials.navbar')
        <div class="Navbar mb-10">
        {{-- Navbar start --}}
        {{-- <nav class="sticky top-0 border-gray-200 bg-gray-50 dark:bg-gray-800 dark:border-gray-700 x2l:px-44 md:px-20 sm:px-20">
            <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
            <a href="#" class="flex items-center space-x-3 rtl:space-x-reverse">
                  <img src="{{ asset('storage/img/logoM.png') }}" class="h-8" alt="Flowbite Logo" />
                <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Si Dewi</span>
            </a>
            <button data-collapse-toggle="navbar-solid-bg" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm
             text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400
              dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-solid-bg" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
                </svg>
            </button>
            <div class="hidden w-full md:block md:w-auto" id="navbar-solid-bg">
                <ul class="flex flex-col font-medium mt-4 rounded-lg bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0
                 md:border-0 md:bg-transparent dark:bg-gray-800 md:dark:bg-transparent dark:border-gray-700">
                <li class="lg:mx-7">
                    <a href="{{url('/')}}" class="block py-2 px-3 md:p-0 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 
                    md:dark:text-blue-500 dark:bg-blue-600 md:dark:bg-transparent" aria-current="page">Home</a>
                </li>
                <li class="lg:px-7">
                    <a href="{{url('/artikel')}}" class="block py-2 px-3 md:p-0 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0
                     md:hover:text-blue-700 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white 
                     md:dark:hover:bg-transparent">Artikel</a>
                </li>
                <li class="lg:pl-7">
                    <a href="{{url('/event')}}" class="block py-2 px-3 md:p-0 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0
                     md:hover:text-blue-700 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white
                      md:dark:hover:bg-transparent">Event</a>
                </li>
                </ul>
            </div>
            </div>
        </nav> --}}
        </div>
        {{-- Navbar End --}}
        {{-- content Start --}}
        {{-- artikel start --}}
        <div class="flex justify-center s:flex-col sm:flex-row  mx-auto ">
            <div class="flex-1 md:ml-20 sm:ml-20 lg:ml-20 x2l:ml-44 mr-5 mb-0 rounded-lg mt-8 s:items-center s:justify-center s:mx-auto s:w-52 ">
                <div class="flex items-center mb-4">
                    <h5 class="text-xl font-bold leading-none text-gray-900">List Berita</h5>
                </div>
                <div class="flow-root   ">
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
                            <li class="pt-3 pb-0 sm:pt-4">
                                <div class="flex items-center ">
                                    <div class="flex-1 min-w-0 ms-4">
                                        <p class="text-md font-medium text-gray-900 truncate ">
                                            artikel 6
                                        </p>
                                        <p class="text-md text-gray-500 truncate">
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil, ipsum magni! Unde!
                                        </p>
                                    </div>
                                </div>
                            </li>
                            <li class="pt-3 pb-0 sm:pt-4">
                                <div class="flex items-center ">
                                    <div class="flex-1 min-w-0 ms-4">
                                        <p class="text-md font-medium text-gray-900 truncate ">
                                            artikel 7
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
            {{-- artikel end --}}
            {{-- card  start   --}}
            <div class="grid lg:grid-cols-2  sm:grid-rows-3 gap-y-5 gap-x-5 x2l:mr-44 lg:mr-20 sm:mr-20 ml-5 mt-9 sm:grid-cols-1 sm:auto-rows-min sm:overflow-scroll">
                <div class="mx-auto w-64 h-48 overflow-hidden">
                    <a href="#" class="">
                        <img class="rounded object-cover w-full h-full" src="{{ asset('storage/img/bg.jpg') }}" alt="" />
                    </a>
                </div>
                <div class="mx-auto w-64 h-48 overflow-hidden">
                    <a href="#" class="">
                        <img class="rounded object-cover w-full h-full" src="{{ asset('storage/img/background.jpg') }}" alt="" />
                    </a>
                </div>
                <div class="mx-auto w-64 h-48 overflow-hidden">
                    <a href="#" class="">
                        <img class="rounded object-cover w-full h-full" src="{{ asset('storage/img/background.jpg') }}" alt="" />
                    </a>
                </div>
                <div class="mx-auto w-64 h-48 overflow-hidden">
                    <a href="#" class="">
                        <img class="rounded object-cover w-full h-full" src="{{ asset('storage/img/background.jpg') }}" alt="" />
                    </a>
                </div>
                <div class="mx-auto w-64 h-48 overflow-hidden">
                    <a href="#" class="">
                        <img class="rounded object-cover w-full h-full" src="{{ asset('storage/img/background.jpg') }}" alt="" />
                    </a>
                </div>
                <div class="mx-auto w-64 h-48 overflow-hidden">
                    <a href="#" class="">
                        <img class="rounded object-cover w-full h-full" src="{{ asset('storage/img/background.jpg') }}" alt="" />
                    </a>
                </div>
                
            </div>
        </div>
        {{-- card end --}}
        {{-- content End --}}
        {{-- footer start --}}
        
        <div class="mt-28">  
            <footer class="bg-white dark:bg-gray-900">
                <div class="mx-auto w-full max-w-screen-xl p-4 py-6 lg:py-8">
                    <div class="md:flex md:justify-between">
                    <div class="mb-6 md:mb-0">
                        <a href="https://flowbite.com/" class="flex items-center">
                            <img src="{{ asset('storage/img/logoM.png') }}" class="h-8 me-3" alt="FlowBite Logo" />
                            <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Si Dewi</span>
                        </a>
                    </div>
                    <div class="grid grid-cols-2 gap-8 sm:gap-6 sm:grid-cols-3">
                        <div>
                            <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Resources</h2>
                            <ul class="text-gray-500 dark:text-gray-400 font-medium">
                                <li class="mb-4">
                                    <a href="https://flowbite.com/" class="hover:underline">Flowbite</a>
                                </li>
                                <li>
                                    <a href="https://tailwindcss.com/" class="hover:underline">Tailwind CSS</a>
                                </li>
                            </ul>
                        </div>
                        <div>
                            <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Follow us</h2>
                            <ul class="text-gray-500 dark:text-gray-400 font-medium">
                                <li class="mb-4">
                                    <a href="https://github.com/themesberg/flowbite" class="hover:underline ">Github</a>
                                </li>
                                <li>
                                    <a href="https://discord.gg/4eeurUVvTy" class="hover:underline">Discord</a>
                                </li>
                            </ul>
                        </div>
                        <div>
                            <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Legal</h2>
                            <ul class="text-gray-500 dark:text-gray-400 font-medium">
                                <li class="mb-4">
                                    <a href="#" class="hover:underline">Privacy Policy</a>
                                </li>
                                <li>
                                    <a href="#" class="hover:underline">Terms &amp; Conditions</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />
                <div class="sm:flex sm:items-center sm:justify-between">
                    <span class="text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2023 <a href="https://flowbite.com/" class="hover:underline">Flowbite™</a>. All Rights Reserved.
                    </span>
                    <div class="flex mt-4 sm:justify-center sm:mt-0">
                        <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                            <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 8 19">
                                    
                                </svg>
                            <span class="sr-only">Facebook page</span>
                        </a>
                        <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white ms-5">
                            <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 21 16">
                                   
                                </svg>
                            <span class="sr-only">Discord community</span>
                        </a>
                        <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white ms-5">
                            <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 17">
                               
                            </svg>
                            <span class="sr-only">Twitter page</span>
                        </a>
                        <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white ms-5">
                            <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                    
                            </svg>
                            <span class="sr-only">GitHub account</span>
                        </a>
                        <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white ms-5">
                            <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                
                            </svg>
                            <span class="sr-only">Dribbble account</span>
                        </a>
                    </div>
                </div>
                </div>
            </footer>
        </div>
        {{-- footer end --}}

    </div>
    
</body>

</html>
