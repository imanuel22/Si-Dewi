<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css"  rel="stylesheet" />
</head>
<body>
    {{-- container start --}}
    <div class="container h-screen">
        {{-- navbar start --}}
        <div class="navbar">
            <nav class="sticky top-0 bg-transparent z-50  x2l:px-44 md:px-20 sm:px-20">
                <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
                <a href="#" class="flex items-center space-x-3 rtl:space-x-reverse">
                      <img src="{{ asset('storage/img/logoM.png') }}" class="h-8" alt="Flowbite Logo" />
                    <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Si Dewi</span>
                </a>
                <button data-collapse-toggle="navbar-solid-bg" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-solid-bg" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
                    </svg>
                </button>
                <div class="hidden w-full md:block md:w-auto" id="navbar-solid-bg">
                    <ul class="flex flex-col font-medium mt-4 rounded-lg bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-transparent dark:bg-gray-800 md:dark:bg-transparent dark:border-gray-700">
                    <li class="lg:mx-7">
                        <a href="#" class="block py-2 px-3 md:p-0 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:dark:text-blue-500 dark:bg-blue-600 md:dark:bg-transparent" aria-current="page">Home</a>
                    </li>
                    <li class="lg:px-7">
                        <a href="#" class="block py-2 px-3 md:p-0 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Artikel</a>
                    </li>
                    <li class="lg:pl-7">
                        <a href="#" class="block py-2 px-3 md:p-0 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Event</a>
                    </li>
                    </ul>
                </div>
                </div>
            </nav>
        </div> 
        {{-- navbar end --}}
        {{-- background --}}
        <div class="img "> 
            <img src="{{ asset('storage/img/testpict.png') }}" alt="" class="absolute inset-0 w-full h-full object-cover">
            <div class="absolute inset-0 bg-black opacity-50"></div>
        </div>
        {{-- background --}}
        {{-- content --}}
        <div class=" mt-10 h-screen w-screen ">
            <div class="des">
            </div>

        </div>
        <div class=" mt-10 h-screen w-screen">
            <div class="kon">
                <h1 class="text-2xl font-bold mb-4 text-center">Desa Kintamani</h1>
                    </div>
                    <div class= "mx-72 mb-48 text-justify ">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corrupti cupiditate, culpa ipsa cum inventore, hic impedit in iste tempora voluptatum dolores. Maiores aut incidunt quia facilis, eius vero hic labore unde, aperiam ullam placeat! Harum distinctio aliquam voluptatibus, delectus, deleniti, necessitatibus error dolorum culpa esse perferendis consectetur a incidunt ratione nobis aperiam magni qui ab sequi quo similique voluptatem consequatur dicta? Rerum architecto recusandae vitae esse atque fuga error quidem minus, voluptates fugit. Expedita ut illum unde itaque excepturi, ducimus laborum perspiciatis dignissimos. Eveniet, aliquam ullam voluptatum repudiandae suscipit maiores quos voluptatibus eum ipsam quas deserunt rem iure consequatur at!
                    </div>
                <div>
                {{-- tab --}}
                    

                        <div class="mx-72 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                            <div class="sm:hidden">
                                <label for="tabs" class="sr-only">Select tab</label>
                                <select id="tabs" class="bg-gray-50 border-0 border-b border-gray-200 text-gray-900 text-sm rounded-t-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                    <option>Destinasi</option>
                                    <option>Akomodasi</option>
                                    <option>Paket Wisata</option>
                                    <option>Produk</option>
                                </select>
                            </div>
                            <ul class="hidden text-sm font-medium text-center text-gray-500 divide-x divide-gray-200 rounded-lg sm:flex dark:divide-gray-600 dark:text-gray-400 rtl:divide-x-reverse" id="fullWidthTab" data-tabs-toggle="#fullWidthTabContent" role="tablist">
                                <li class="w-full">
                                    <button id="destinasi-tab" data-tabs-target="#destinasi" type="button" role="tab" aria-controls="destinasi" aria-selected="true" class="inline-block w-full p-4 rounded-ss-lg bg-gray-50 hover:bg-gray-100 focus:outline-none dark:bg-gray-700 dark:hover:bg-gray-600">Destinasi</button>
                                </li>
                                <li class="w-full">
                                    <button id="akomodasi-tab" data-tabs-target="#akomodasi" type="button" role="tab" aria-controls="akomodasi" aria-selected="false" class="inline-block w-full p-4 bg-gray-50 hover:bg-gray-100 focus:outline-none dark:bg-gray-700 dark:hover:bg-gray-600">Akomodasi</button>
                                </li>
                                <li class="w-full">
                                    <button id="pawi-tab" data-tabs-target="#pawi" type="button" role="tab" aria-controls="pawi" aria-selected="false" class="inline-block w-full p-4 rounded-se-lg bg-gray-50 hover:bg-gray-100 focus:outline-none dark:bg-gray-700 dark:hover:bg-gray-600">Paket Wisata</button>
                                </li>
                                <li class="w-full">
                                    <button id="produk-tab" data-tabs-target="#produk" type="button" role="tab" aria-controls="produk" aria-selected="false" class="inline-block w-full p-4 rounded-se-lg bg-gray-50 hover:bg-gray-100 focus:outline-none dark:bg-gray-700 dark:hover:bg-gray-600">Produk</button>
                                </li>
                            </ul>
                            <div id="fullWidthTabContent" class="border-t border-gray-200 dark:border-gray-600">
                                <div class="hidden p-4 bg-white rounded-lg md:p-8 dark:bg-gray-800" id="destinasi" role="tabpanel" aria-labelledby="destinasi-tab">
                                        <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
                                            <div>
                                                <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image.jpg" alt="">
                                                <p class="pl-3 text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis amet tempora voluptate accusamus mollitia excepturi nesciunt aspernatur, doloribus sequi ad vel odio distinctio ab nihil et officiis numquam beatae iste saepe. Adipisci, eveniet aperiam. Placeat delectus quasi voluptates minima alias earum nisi, veritatis quas provident beatae modi? Ullam, perferendis sit?</p>
                                            </div>
                                            <div>
                                                <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-1.jpg" alt="">
                                            </div>
                                            <div>
                                                <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-2.jpg" alt="">
                                            </div>
                                            <div>
                                                <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-3.jpg" alt="">
                                            </div>
                                            <div>
                                                <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-4.jpg" alt="">
                                            </div>
                                        </div>
                                </div>
                                <div class="hidden p-4 bg-white rounded-lg md:p-8 dark:bg-gray-800" id="akomodasi" role="tabpanel" aria-labelledby="akomodasi-tab">
                                        <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
                                            <div>
                                                <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image.jpg" alt="">
                                                <p class="pl-3 text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis amet tempora voluptate accusamus mollitia excepturi nesciunt aspernatur, doloribus sequi ad vel odio distinctio ab nihil et officiis numquam beatae iste saepe. Adipisci, eveniet aperiam. Placeat delectus quasi voluptates minima alias earum nisi, veritatis quas provident beatae modi? Ullam, perferendis sit?</p>
                                            </div>
                                            <div>
                                                <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-1.jpg" alt="">
                                            </div>
                                            <div>
                                                <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-2.jpg" alt="">
                                            </div>
                                            <div>
                                                <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-3.jpg" alt="">
                                            </div>
                                            <div>
                                                <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-4.jpg" alt="">
                                            </div>
                                        </div>
                                </div>
                                <div class="hidden p-4 bg-white rounded-lg dark:bg-gray-800" id="pawi" role="tabpanel" aria-labelledby="pawi-tab">
                                    <div id="accordion-flush" data-accordion="collapse" data-active-classes="bg-white dark:bg-gray-800 text-gray-900 dark:text-white" data-inactive-classes="text-gray-500 dark:text-gray-400">
                                        <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
                                            <div>
                                                <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image.jpg" alt="">
                                                <p class="pl-3 text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis amet tempora voluptate accusamus mollitia excepturi nesciunt aspernatur, doloribus sequi ad vel odio distinctio ab nihil et officiis numquam beatae iste saepe. Adipisci, eveniet aperiam. Placeat delectus quasi voluptates minima alias earum nisi, veritatis quas provident beatae modi? Ullam, perferendis sit?</p>
                                            </div>
                                            <div>
                                                <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-1.jpg" alt="">
                                            </div>
                                            <div>
                                                <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-2.jpg" alt="">
                                            </div>
                                            <div>
                                                <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-3.jpg" alt="">
                                            </div>
                                            <div>
                                                <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-4.jpg" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="hidden p-4 bg-white rounded-lg dark:bg-gray-800" id="produk" role="tabpanel" aria-labelledby="produk-tab">
                                    <div id="accordion-flush" data-accordion="collapse" data-active-classes="bg-white dark:bg-gray-800 text-gray-900 dark:text-white" data-inactive-classes="text-gray-500 dark:text-gray-400">
                                        <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
                                            <div>
                                                <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image.jpg" alt="">
                                                <p class="pl-3 text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis amet tempora voluptate accusamus mollitia excepturi nesciunt aspernatur, doloribus sequi ad vel odio distinctio ab nihil et officiis numquam beatae iste saepe. Adipisci, eveniet aperiam. Placeat delectus quasi voluptates minima alias earum nisi, veritatis quas provident beatae modi? Ullam, perferendis sit?</p>
                                            </div>
                                            <div>
                                                <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-1.jpg" alt="">
                                            </div>
                                            <div>
                                                <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-2.jpg" alt="">
                                            </div>
                                            <div>
                                                <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-3.jpg" alt="">
                                            </div>
                                            <div>
                                                <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-4.jpg" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                {{-- tab --}}  
            </div>
        {{-- content end --}}
    </div>              
    {{-- container end --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
</body>
</html>