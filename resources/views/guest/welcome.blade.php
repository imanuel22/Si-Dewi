<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<body>
    <div class="container-fluid h-screen">
        @include('partials.navbar')
        <div class="h-screen bg-slate-700">

            <!-- Gambar Latar Belakang -->
            <img src="{{ asset('storage\img\background.jpg') }}" class=" inset-0 w-full h-full object-cover"
                alt="" style="width: 100vw;">

            <!-- Overlay Gelap (Opsional) -->
            <div class="absolute inset-0 bg-black opacity-50"></div>

            <!-- Konten Teks di Atas Gambar -->
            <div
                class="absolute top-0 flex flex-col justify-center pl-80 h-full text-white text-4xl poppins-bold tracking-normal">
                <div>
                    <h1>EXPLORE BALIs </h1>
                </div>
                <div>
                    <h1>WHERE CULTURE MEETS PARADISE</h1>
                </div>
            </div>
            <div class="bg-white p-4 rounded-lg shadow-md w-screen">
                <div class="grid grid-cols-2 gap-4 mr-5 ml-7">
                    <!-- Kolom Pertama: Judul dan Deskripsi -->
                    <div class="pl-10">
                        <h1 class="text-2xl font-semibold mb-4">Distribution Map</h1>
                        <p class="text-gray-600 nunito-regulermb-4">Find tourist villages based on the distribution map
                            of districts and cities in Bali.</p>
                    </div>
                    <!-- Kolom Kedua: Card per Kabupaten -->
                    <div class="flex flex-col justify-between   ">
                        <div class="flex flex-row space-x-4">
                            <div
                                class="max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                                <a href="#">
                                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                                        Noteworthy technology acquisitions 2021</h5>
                                </a>
                                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest
                                    enterprise technology acquisitions of 2021 so far, in reverse chronological order.
                                </p>
                                <a href="#"
                                    class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                    Kabupaten Badung
                                    <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                                    </svg>
                                </a>
                            </div>
                            <div
                                class="max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                                <a href="#">
                                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                                        Noteworthy technology acquisitions 2021</h5>
                                </a>
                                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest
                                    enterprise technology acquisitions of 2021 so far, in reverse chronological order.
                                </p>
                                <a href="#"
                                    class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                    Kabupaten Gianyar
                                    <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                                    </svg>
                                </a>
                            </div>
                            <div
                                class="max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                                <a href="#">
                                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                                        Noteworthy technology acquisitions 2021</h5>
                                </a>
                                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest
                                    enterprise technology acquisitions of 2021 so far, in reverse chronological order.
                                </p>
                                <a href="#"
                                    class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                    Kabupaten Tabanan
                                    <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bg-secondary pl-15"
                style="display: flex; flex-direction: column; justify-content: flex-start; align-items: center; height: 100vh; text-align: center;">
                <div>
                    <h1 class="text-2xl font-semibold mb-2 mt-7 text-white">Favorite Destination</h1>
                    <p class="text-gray-600 mb-8 text-white">Find tourist villages based on the distribution map of
                        districts and cities in Bali.</p>
                </div>
                <div class="container w-full max-w-5xl">
                    <div class="flex flex-col space-y-4">
                        <!-- Top row -->
                        <div class="flex space-x-4">
                            <!-- Large section on the left -->
                            <div class="bg-gray-200 w-3/4 h-60 p-4">
                                <!-- Your content here -->
                                <div class="text-yellow-500 text-2xl font-bold">⭐️ 4.5</div>
                                <div>Your destination overview here!</div>
                            </div>
                            <!-- Smaller section on the right -->
                            <div class="bg-gray-200 w-1/4 h-60 p-4">
                                <!-- Your content here -->
                            </div>
                        </div>
                        <!-- Bottom row -->
                        <div class="flex space-x-4">
                            <!-- Three equal-sized sections -->
                            <div class="bg-gray-200 w-1/3 h-60 p-4">
                                <img src="" alt="">
                            </div>
                            <div class="bg-gray-200 w-1/3 h-60 p-4">
                                <!-- Your content here -->
                            </div>
                            <div class="bg-gray-200 w-1/3 h-60 p-4">
                                <!-- Your content here -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="bg-secondary pl-15"
                style="display: flex; flex-direction: column; justify-content: flex-start; align-items: center; height: 50vh; text-align: center;">
                <div>
                    <h1 class="text-2xl font-semibold mb-2 mt-7 text-white">News Update</h1>
                    <p class="text-gray-600 mb-8 text-white">Find tourist villages based on the distribution map of
                        districts and cities in Bali.</p>
                </div>

                <div class="flex space-x-4">
                    <!-- Card 1 -->
                    <div
                        class="bg-white shadow-lg rounded-lg p-6 max-w-80 transform transition-transform duration-300 hover:-translate-y-3">
                        <h2 class="text-lg font-semibold mb-2">Card Title 1</h2>
                        <p class="text-gray-700">
                            This is a detailed description for the first card. It provides an overview of the content
                            and purpose of this card,
                            offering insights and valuable information that can help the reader understand more about
                            the topic being presented.
                            The description aims to be informative, engaging, and comprehensive, ensuring that all key
                            points are covered in a clear and concise manner.
                            Whether it is about news, updates, or other important information,
                            this card aims to deliver the message effectively and efficiently.
                        </p>
                    </div>
                    <!-- Card 2 -->
                    <div
                        class="bg-white shadow-lg rounded-lg p-6 max-w-80 transform transition-transform duration-300 hover:-translate-y-3">
                        <h2 class="text-lg font-semibold mb-2">Card Title 2</h2>
                        <p class="text-gray-700">
                            This is a detailed description for the first card. It provides an overview of the content
                            and purpose of this card,
                            offering insights and valuable information that can help the reader understand more about
                            the topic being presented.
                            The description aims to be informative, engaging, and comprehensive, ensuring that all key
                            points are covered in a clear and concise manner.
                            Whether it is about news, updates, or other important information,
                            this card aims to deliver the message effectively and efficiently.
                        </p>
                    </div>
                    <!-- Card 3 -->
                    <div
                        class="bg-white shadow-lg rounded-lg p-6 max-w-80 transform transition-transform duration-300 hover:-translate-y-3">
                        <h2 class="text-lg font-semibold mb-2">Card Title 3</h2>
                        <p class="text-gray-700">
                            This is a detailed description for the first card. It provides an overview of the content
                            and purpose of this card,
                            offering insights and valuable information that can help the reader understand more about
                            the topic being presented.
                            The description aims to be informative, engaging, and comprehensive, ensuring that all key
                            points are covered in a clear and concise manner.
                            Whether it is about news, updates, or other important information,
                            this card aims to deliver the message effectively and efficiently.
                        </p>
                    </div>
                </div>
                <button class="mt-4 bg-blue-500 text-white px-8 py-2 rounded-full hover:bg-blue-600 transition-colors duration-300" style="background-color: #00C2CC; border-color: #00C2CC; hover:bg-opacity-80;">
                    Read More <i class="fas fa-arrow-right ml-5"></i>
                </button>


            </div>
{{-- footer start --}}

<div class="mt-28 bg-slate-800">
    <footer class="bg-slate-900 ">
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
