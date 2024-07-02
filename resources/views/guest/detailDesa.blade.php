<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
</head>

<body>
    {{-- container start --}}
    <div class="container-fluid h-screen">
        {{-- navbar start --}}
        @include('partials.navbar')
        {{-- navbar end --}}
        {{-- background --}}
        <div class="inset-0 bg-black opacity-70"> </div>
            <img src="{{ asset('storage/img/testpict.png') }}" alt="" class=" inset-0 w-full h-full object-cover"  style="width: 100vw;">       
        
        {{-- background --}}
        {{-- content --}}
        <div class=" mt-10 h-screen w-screen">
            
            <div class="mx-72 mb-48 mt-36 text-justify flex grid-cols-2 gap-2 space-x-28 ">
                <div>
                    <div class="">
                        <h1 class="text-4xl font-bold">Desa Kintamani</h1>
                    </div>
                    <div class="text-xl text-gray-600 mb-1">
                        Kategori : <span class="text-green-700">Desa Maju</span>
                        <br>
                        
                    </div>
                    <div class="">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corrupti cupiditate, culpa ipsa cum inventore,
                        hic impedit in iste tempora voluptatum dolores. Maiores aut incidunt quia facilis, eius vero hic labore
                        unde, aperiam ullam placeat! Harum distinctio aliquam voluptatibus, delectus, deleniti, necessitatibus
                        error dolorum culpa esse perferendis consectetur a incidunt ratione nobis aperiam magni qui ab sequi quo
                        similique voluptatem consequatur dicta? Rerum architecto recusandae vitae esse atque fuga error quidem
                        minus, voluptates fugit. Expedita ut illum unde itaque excepturi, ducimus laborum perspiciatis
                        dignissimos. Eveniet, aliquam ullam voluptatum repudiandae suscipit maiores quos voluptatibus eum ipsam
                        quas deserunt rem iure consequatur at!
                    </div>
                </div>
                
                <div class="text-xl text-gray-600 mb-1">
                    <!-- <div>Lokasi Desa Wisata</div> -->
                    <div>Alamat   : Jln. Abcd No.02</div>
                    <iframe class="border-8 border-lime-700 border-double"
                            src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d7649.1466877873545!2d115.16821926787577!3d-8.803455159068722!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sid!2sid!4v1716778086056!5m2!1sid!2sid"
                            width="600" height="350" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
            <div>
                {{-- tab --}}
                <div
                    class="mx-72 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <div class="sm:hidden">
                        <label for="tabs" class="sr-only">Select tab</label>
                        <select id="tabs"
                            class="bg-gray-50 border-0 border-b border-gray-200 text-gray-900 text-sm rounded-t-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option>Destinasi</option>
                            <option>Akomodasi</option>
                            <option>Paket Wisata</option>
                            <option>Produk</option>
                        </select>
                    </div>
                    <ul class="hidden text-sm font-medium text-center text-gray-500 divide-x divide-gray-200 rounded-lg sm:flex dark:divide-gray-600 dark:text-gray-400 rtl:divide-x-reverse"
                        id="fullWidthTab" data-tabs-toggle="#fullWidthTabContent" role="tablist">
                        <li class="w-full">
                            <button id="destinasi-tab" data-tabs-target="#destinasi" type="button" role="tab"
                                aria-controls="destinasi" aria-selected="true"
                                class="inline-block w-full p-4 rounded-ss-lg text-white bg-green-400 hover:bg-green-500 focus:outline-none hover:text-white dark:bg-green-700 dark:hover:bg-green-600"
                                style="color: var(--text-color);">
                                Destinasi
                            </button>
                        </li>
                        <li class="w-full">
                            <button id="akomodasi-tab" data-tabs-target="#akomodasi" type="button" role="tab"
                                aria-controls="akomodasi" aria-selected="false"
                                class="inline-block w-full p-4 text-white bg-green-400 hover:bg-green-500 focus:outline-none hover:text-white dark:bg-green-700 dark:hover:bg-green-600"
                                style="color: var(--text-color);">
                                Akomodasi
                            </button>
                        </li>
                        <li class="w-full">
                            <button id="pawi-tab" data-tabs-target="#pawi" type="button" role="tab" aria-controls="pawi"
                                aria-selected="false"
                                class="inline-block w-full p-4 rounded-se-lg text-white bg-green-400 hover:bg-green-500 focus:outline-none hover:text-white dark:bg-green-700 dark:hover:bg-green-600"
                                style="color: var(--text-color);">
                                Paket Wisata
                            </button>
                        </li>
                        <li class="w-full">
                            <button id="produk-tab" data-tabs-target="#produk" type="button" role="tab"
                                aria-controls="produk" aria-selected="false"
                                class="inline-block w-full p-4 rounded-se-lg text-white bg-green-400 hover:bg-green-500 focus:outline-none hover:text-white dark:bg-green-700 dark:hover:bg-green-600"
                                style="color: var(--text-color);">
                                Produk
                            </button>
                        </li>
                    </ul>

                    <script>
                        const tabs = document.querySelectorAll('[role="tab"]');
                        tabs.forEach(tab => {
                            tab.addEventListener('click', () => {
                                // Update 'aria-selected' attribute for all tabs
                                tabs.forEach(t => t.setAttribute('aria-selected', 'false'));
                                tab.setAttribute('aria-selected', 'true');

                                // Update text color for all tabs
                                tabs.forEach(t => {
                                    if (t.getAttribute('aria-selected') === 'true') {
                                        t.style.setProperty('--text-color', 'white'); // warna teks untuk tab yang dipilih
                                    } else {
                                        t.style.setProperty('--text-color', 'gray'); // warna teks untuk tab yang tidak dipilih
                                    }
                                });
                            });
                        });

                        // Simulate a click on the default tab when the page loads
                        window.onload = function() {
                            document.getElementById('destinasi-tab').click();
                        };
                    </script>

                    <div id="fullWidthTabContent" class="border-t border-gray-200 dark:border-gray-600">
                        <div class="hidden p-4 bg-white rounded-lg md:p-8 dark:bg-gray-800" id="destinasi"
                            role="tabpanel" aria-labelledby="destinasi-tab">
                            <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
                                <div>
                                    <img class="h-auto max-w-full rounded-lg"
                                        src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image.jpg" alt="">
                                    <h1 class="text-center text-2xl font-bold">Judul Destinasi 1</h1>
                                    <p class="pl-3 text-justify">Lorem ipsum dolor sit amet consectetur adipisicing
                                        elit. Corporis amet tempora voluptate accusamus mollitia excepturi nesciunt
                                        aspernatur,
                                        doloribus sequi ad vel odio distinctio ab nihil et officiis numquam beatae iste
                                        saepe. Adipisci, eveniet aperiam. Placeat delectus quasi voluptates minima alias
                                        earum nisi,
                                        veritatis quas provident beatae modi? Ullam, perferendis sit?</p>
                                </div>
                                <div>
                                    <img class="h-auto max-w-full rounded-lg"
                                        src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-1.jpg" alt="">
                                    <h1 class="text-center text-2xl font-bold">Judul Destinasi 2</h1>
                                    <p class="pl-3 text-justify">Lorem ipsum dolor sit amet consectetur adipisicing
                                        elit. Corporis amet tempora voluptate accusamus mollitia excepturi nesciunt
                                        aspernatur,
                                        doloribus sequi ad vel odio distinctio ab nihil et officiis numquam beatae iste
                                        saepe. Adipisci, eveniet aperiam. Placeat delectus quasi voluptates minima alias
                                        earum nisi,
                                        veritatis quas provident beatae modi? Ullam, perferendis sit?</p>
                                </div>
                                <div>
                                    <img class="h-auto max-w-full rounded-lg"
                                        src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-2.jpg" alt="">
                                    <h1 class="text-center text-2xl font-bold">Judul Destinasi 3</h1>
                                    <p class="pl-3 text-justify">Lorem ipsum dolor sit amet consectetur adipisicing
                                        elit. Corporis amet tempora voluptate accusamus mollitia excepturi nesciunt
                                        aspernatur,
                                        doloribus sequi ad vel odio distinctio ab nihil et officiis numquam beatae iste
                                        saepe. Adipisci, eveniet aperiam. Placeat delectus quasi voluptates minima alias
                                        earum nisi,
                                        veritatis quas provident beatae modi? Ullam, perferendis sit?</p>
                                </div>
                                <div>
                                    <img class="h-auto max-w-full rounded-lg"
                                        src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-3.jpg" alt="">
                                    <h1 class="text-center text-2xl font-bold">Judul Destinasi 4</h1>
                                    <p class="pl-3 text-justify">Lorem ipsum dolor sit amet consectetur adipisicing
                                        elit. Corporis amet tempora voluptate accusamus mollitia excepturi nesciunt
                                        aspernatur,
                                        doloribus sequi ad vel odio distinctio ab nihil et officiis numquam beatae iste
                                        saepe. Adipisci, eveniet aperiam. Placeat delectus quasi voluptates minima alias
                                        earum nisi,
                                        veritatis quas provident beatae modi? Ullam, perferendis sit?</p>
                                </div>
                                <div>
                                    <img class="h-auto max-w-full rounded-lg"
                                        src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-4.jpg" alt="">
                                    <h1 class="text-center text-2xl font-bold">Judul Destinasi 5</h1>
                                    <p class="pl-3 text-justify">Lorem ipsum dolor sit amet consectetur adipisicing
                                        elit. Corporis amet tempora voluptate accusamus mollitia excepturi nesciunt
                                        aspernatur,
                                        doloribus sequi ad vel odio distinctio ab nihil et officiis numquam beatae iste
                                        saepe. Adipisci, eveniet aperiam. Placeat delectus quasi voluptates minima alias
                                        earum nisi,
                                        veritatis quas provident beatae modi? Ullam, perferendis sit?</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="fullWidthTabContent" class="border-t border-gray-200 dark:border-gray-600">
                        <div class="hidden p-4 bg-white rounded-lg md:p-8 dark:bg-gray-800" id="akomodasi"
                            role="tabpanel" aria-labelledby="akomodasi-tab">
                            <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
                                <div>
                                    <img class="h-auto max-w-full rounded-lg"
                                        src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image.jpg" alt="">
                                    <h1 class="text-center text-2xl font-bold">Judul akomodasi 1</h1>
                                    <p class="pl-3 text-justify">Lorem ipsum dolor sit amet consectetur adipisicing
                                        elit. Corporis amet tempora voluptate accusamus mollitia excepturi nesciunt
                                        aspernatur,
                                        doloribus sequi ad vel odio distinctio ab nihil et officiis numquam beatae iste
                                        saepe. Adipisci, eveniet aperiam. Placeat delectus quasi voluptates minima alias
                                        earum nisi,
                                        veritatis quas provident beatae modi? Ullam, perferendis sit?</p>
                                </div>
                                <div>
                                    <img class="h-auto max-w-full rounded-lg"
                                        src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-1.jpg" alt="">
                                    <h1 class="text-center text-2xl font-bold">Judul akomodasi 2</h1>
                                    <p class="pl-3 text-justify">Lorem ipsum dolor sit amet consectetur adipisicing
                                        elit. Corporis amet tempora voluptate accusamus mollitia excepturi nesciunt
                                        aspernatur,
                                        doloribus sequi ad vel odio distinctio ab nihil et officiis numquam beatae iste
                                        saepe. Adipisci, eveniet aperiam. Placeat delectus quasi voluptates minima alias
                                        earum nisi,
                                        veritatis quas provident beatae modi? Ullam, perferendis sit?</p>
                                </div>
                                <div>
                                    <img class="h-auto max-w-full rounded-lg"
                                        src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-2.jpg" alt="">
                                    <h1 class="text-center text-2xl font-bold">Judul akomodasi 3</h1>
                                    <p class="pl-3 text-justify">Lorem ipsum dolor sit amet consectetur adipisicing
                                        elit. Corporis amet tempora voluptate accusamus mollitia excepturi nesciunt
                                        aspernatur,
                                        doloribus sequi ad vel odio distinctio ab nihil et officiis numquam beatae iste
                                        saepe. Adipisci, eveniet aperiam. Placeat delectus quasi voluptates minima alias
                                        earum nisi,
                                        veritatis quas provident beatae modi? Ullam, perferendis sit?</p>
                                </div>
                                <div>
                                    <img class="h-auto max-w-full rounded-lg"
                                        src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-3.jpg" alt="">
                                    <h1 class="text-center text-2xl font-bold">Judul akomodasi 4</h1>
                                    <p class="pl-3 text-justify">Lorem ipsum dolor sit amet consectetur adipisicing
                                        elit. Corporis amet tempora voluptate accusamus mollitia excepturi nesciunt
                                        aspernatur,
                                        doloribus sequi ad vel odio distinctio ab nihil et officiis numquam beatae iste
                                        saepe. Adipisci, eveniet aperiam. Placeat delectus quasi voluptates minima alias
                                        earum nisi,
                                        veritatis quas provident beatae modi? Ullam, perferendis sit?</p>
                                </div>
                                <div>
                                    <img class="h-auto max-w-full rounded-lg"
                                        src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-4.jpg" alt="">
                                    <h1 class="text-center text-2xl font-bold">Judul akomodasi 5</h1>
                                    <p class="pl-3 text-justify">Lorem ipsum dolor sit amet consectetur adipisicing
                                        elit. Corporis amet tempora voluptate accusamus mollitia excepturi nesciunt
                                        aspernatur,
                                        doloribus sequi ad vel odio distinctio ab nihil et officiis numquam beatae iste
                                        saepe. Adipisci, eveniet aperiam. Placeat delectus quasi voluptates minima alias
                                        earum nisi,
                                        veritatis quas provident beatae modi? Ullam, perferendis sit?</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="fullWidthTabContent" class="border-t border-gray-200 dark:border-gray-600">
                        <div class="hidden p-4 bg-white rounded-lg md:p-8 dark:bg-gray-800" id="pawi" role="tabpanel"
                            aria-labelledby="pawi-tab">
                            <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
                                <div>
                                    <img class="h-auto max-w-full rounded-lg"
                                        src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image.jpg" alt="">
                                    <h1 class="text-center text-2xl font-bold">Judul paket wisata 1</h1>
                                    <p class="pl-3 text-justify">Lorem ipsum dolor sit amet consectetur adipisicing
                                        elit. Corporis amet tempora voluptate accusamus mollitia excepturi nesciunt
                                        aspernatur,
                                        doloribus sequi ad vel odio distinctio ab nihil et officiis numquam beatae iste
                                        saepe. Adipisci, eveniet aperiam. Placeat delectus quasi voluptates minima alias
                                        earum nisi,
                                        veritatis quas provident beatae modi? Ullam, perferendis sit?</p>
                                </div>
                                <div>
                                    <img class="h-auto max-w-full rounded-lg"
                                        src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-1.jpg" alt="">
                                    <h1 class="text-center text-2xl font-bold">Judul paket wisata 2</h1>
                                    <p class="pl-3 text-justify">Lorem ipsum dolor sit amet consectetur adipisicing
                                        elit. Corporis amet tempora voluptate accusamus mollitia excepturi nesciunt
                                        aspernatur,
                                        doloribus sequi ad vel odio distinctio ab nihil et officiis numquam beatae iste
                                        saepe. Adipisci, eveniet aperiam. Placeat delectus quasi voluptates minima alias
                                        earum nisi,
                                        veritatis quas provident beatae modi? Ullam, perferendis sit?</p>
                                </div>
                                <div>
                                    <img class="h-auto max-w-full rounded-lg"
                                        src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-2.jpg" alt="">
                                    <h1 class="text-center text-2xl font-bold">Judul paket wisata 3</h1>
                                    <p class="pl-3 text-justify">Lorem ipsum dolor sit amet consectetur adipisicing
                                        elit. Corporis amet tempora voluptate accusamus mollitia excepturi nesciunt
                                        aspernatur,
                                        doloribus sequi ad vel odio distinctio ab nihil et officiis numquam beatae iste
                                        saepe. Adipisci, eveniet aperiam. Placeat delectus quasi voluptates minima alias
                                        earum nisi,
                                        veritatis quas provident beatae modi? Ullam, perferendis sit?</p>
                                </div>
                                <div>
                                    <img class="h-auto max-w-full rounded-lg"
                                        src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-3.jpg" alt="">
                                    <h1 class="text-center text-2xl font-bold">Judul paket wisata 4</h1>
                                    <p class="pl-3 text-justify">Lorem ipsum dolor sit amet consectetur adipisicing
                                        elit. Corporis amet tempora voluptate accusamus mollitia excepturi nesciunt
                                        aspernatur,
                                        doloribus sequi ad vel odio distinctio ab nihil et officiis numquam beatae iste
                                        saepe. Adipisci, eveniet aperiam. Placeat delectus quasi voluptates minima alias
                                        earum nisi,
                                        veritatis quas provident beatae modi? Ullam, perferendis sit?</p>
                                </div>
                                <div>
                                    <img class="h-auto max-w-full rounded-lg"
                                        src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-4.jpg" alt="">
                                    <h1 class="text-center text-2xl font-bold">Judul paket wisata 5</h1>
                                    <p class="pl-3 text-justify">Lorem ipsum dolor sit amet consectetur adipisicing
                                        elit. Corporis amet tempora voluptate accusamus mollitia excepturi nesciunt
                                        aspernatur,
                                        doloribus sequi ad vel odio distinctio ab nihil et officiis numquam beatae iste
                                        saepe. Adipisci, eveniet aperiam. Placeat delectus quasi voluptates minima alias
                                        earum nisi,
                                        veritatis quas provident beatae modi? Ullam, perferendis sit?</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="fullWidthTabContent" class="border-t border-gray-200 dark:border-gray-600">
                        <div class="hidden p-4 bg-white rounded-lg md:p-8 dark:bg-gray-800" id="produk" role="tabpanel"
                            aria-labelledby="produk-tab">
                            <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
                                <div>
                                    <img class="h-auto max-w-full rounded-lg"
                                        src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image.jpg" alt="">
                                    <h1 class="text-center text-2xl font-bold">Judul produk</h1>
                                    <p class="pl-3 text-justify">Lorem ipsum dolor sit amet consectetur adipisicing
                                        elit. Corporis amet tempora voluptate accusamus mollitia excepturi nesciunt
                                        aspernatur,
                                        doloribus sequi ad vel odio distinctio ab nihil et officiis numquam beatae iste
                                        saepe. Adipisci, eveniet aperiam. Placeat delectus quasi voluptates minima alias
                                        earum nisi,
                                        veritatis quas provident beatae modi? Ullam, perferendis sit?</p>
                                </div>
                                <div>
                                    <img class="h-auto max-w-full rounded-lg"
                                        src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-1.jpg" alt="">
                                    <h1 class="text-center text-2xl font-bold">Judul produk 2</h1>
                                    <p class="pl-3 text-justify">Lorem ipsum dolor sit amet consectetur adipisicing
                                        elit. Corporis amet tempora voluptate accusamus mollitia excepturi nesciunt
                                        aspernatur,
                                        doloribus sequi ad vel odio distinctio ab nihil et officiis numquam beatae iste
                                        saepe. Adipisci, eveniet aperiam. Placeat delectus quasi voluptates minima alias
                                        earum nisi,
                                        veritatis quas provident beatae modi? Ullam, perferendis sit?</p>
                                </div>
                                <div>
                                    <img class="h-auto max-w-full rounded-lg"
                                        src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-2.jpg" alt="">
                                    <h1 class="text-center text-2xl font-bold">Judul produk 3</h1>
                                    <p class="pl-3 text-justify">Lorem ipsum dolor sit amet consectetur adipisicing
                                        elit. Corporis amet tempora voluptate accusamus mollitia excepturi nesciunt
                                        aspernatur,
                                        doloribus sequi ad vel odio distinctio ab nihil et officiis numquam beatae iste
                                        saepe. Adipisci, eveniet aperiam. Placeat delectus quasi voluptates minima alias
                                        earum nisi,
                                        veritatis quas provident beatae modi? Ullam, perferendis sit?</p>
                                </div>
                                <div>
                                    <img class="h-auto max-w-full rounded-lg"
                                        src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-3.jpg" alt="">
                                    <h1 class="text-center text-2xl font-bold">Judul produk 4</h1>
                                    <p class="pl-3 text-justify">Lorem ipsum dolor sit amet consectetur adipisicing
                                        elit. Corporis amet tempora voluptate accusamus mollitia excepturi nesciunt
                                        aspernatur,
                                        doloribus sequi ad vel odio distinctio ab nihil et officiis numquam beatae iste
                                        saepe. Adipisci, eveniet aperiam. Placeat delectus quasi voluptates minima alias
                                        earum nisi,
                                        veritatis quas provident beatae modi? Ullam, perferendis sit?</p>
                                </div>
                                <div>
                                    <img class="h-auto max-w-full rounded-lg"
                                        src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-4.jpg" alt="">
                                    <h1 class="text-center text-2xl font-bold">Judul produk 5</h1>
                                    <p class="pl-3 text-justify">Lorem ipsum dolor sit amet consectetur adipisicing
                                        elit. Corporis amet tempora voluptate accusamus mollitia excepturi nesciunt
                                        aspernatur,
                                        doloribus sequi ad vel odio distinctio ab nihil et officiis numquam beatae iste
                                        saepe. Adipisci, eveniet aperiam. Placeat delectus quasi voluptates minima alias
                                        earum nisi,
                                        veritatis quas provident beatae modi? Ullam, perferendis sit?</p>
                                </div>
                            </div>
                        </div>

                {{-- tab --}}  
            </div>
        {{-- content end --}}
    </div>
    @include('partials.footer')
    {{-- container end --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
</body>

</html>