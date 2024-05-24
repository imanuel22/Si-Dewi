<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<body>
<<<<<<< HEAD
    <div class="container h-screen w-screen">
=======
    <div class="container h-screen">


>>>>>>> 543c42943469df9b17b3c98fb9ed18ee8e2dbb66
        <div class="relative h-screen w-screen">
            <nav class="sticky top-0 z-50 mx-72 bg-transparent   border-gray-200 font-bold">
                <div class="max-w-screen-xl flex items-center justify-between mx-auto p-4">
                    <a href="/" class="flex items-center space-x-3 rtl:space-x-reverse">
                        <img src="{{ asset('storage/img/logoM.png') }}" class="h-12" alt="Logo" />
                        <span
                            class="self-center text-2xl grechen-fuemen-regular whitespace-nowrap dark:text-white">Sidewi
                        </span>
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
            <!-- Gambar Latar Belakang -->
            <img src="{{ asset('storage/img/background.jpg') }}" class="absolute inset-0 w-full h-full object-cover"
                alt="" style="width: 100vw;">

            <!-- Overlay Gelap (Opsional) -->
            <div class="absolute inset-0 bg-black opacity-50"></div>

            <!-- Konten Teks di Atas Gambar -->
            <div
                class="relative z-10 flex flex-col justify-center pl-80 h-full text-white text-4xl poppins-bold tracking-normal">
                <div>
                    <h1>EXPLORE BALI</h1>
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
        </div>
</body>

</html>
