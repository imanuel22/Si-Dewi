<div class="px-36 mt-4">
    <div class="grid grid-cols-3 gap-4">
        <div class="grid grid-cols-1 col-span-2 row-start-2 gap-4 mx-auto mb-10">
                    <div class=>
                        <article class="">
                            <div class="bg-white border border-gray-200 rounded-lg shadow  dark:bg-gray-800 dark:border-gray-700">
                                <div class="">
                                    <img class="h-64 w-full relative"
                                        src="{{ env('APP_API_URL') }}/resource/berita/{{ $berita['gambar'] }}"
                                        alt="{{ $berita['judul'] }}">
                                </div>

                                <div class="p-5 text-gray-700 break-words headlightfont-normal dark:text-gray-400 pt-7">
                                    <div class="flex flex-row gap-4">
                                        <div class="">
                                            <a href="#" class="pt-person">
                                                <i class="fa-solid fa-user-tie"></i> 
                                                Admin
                                            </a>
                                        </div>
                                        <div class="">
                                            <a href="#" class="pt-post-date">
                                                <i class="far fa-calendar-alt mr-1 mb-3"></i>
                                                {{Str::limit($berita['createdAt'], 10, ' ') }} 
                                            </a>
                                        </div>
                                    </div>
                                    
                                    <h1 class="font-bold">{{ $berita['judul'] }}</h1>
                                    <br>
                                    <p>{{$berita['isi_berita'] }}</p>
                                </div>
                            </div>
                        </article>
                    </div>
        </div>
