<div class="px-36 mt-4">
    <div class="grid grid-cols-3 gap-4">
        <div class="grid grid-cols-1 col-span-2 row-start-2 gap-4 mx-auto mb-10 md:w-full">
                    <div class="bg-white border border-gray-200 rounded-lg shadow  dark:bg-gray-800 dark:border-gray-700">
                        <article class="">
                            <div class="border-black">
                                <div class="">
                                    <img width="1200"
                                        src="{{ env('APP_API_URL') }}/resource/berita/{{ $berita['gambar'] }}"
                                        alt="{{ $berita['judul'] }}">
                                </div>

                                <div class="p-5 text-gray-700 break-words headlightfont-normal dark:text-gray-400 pt-7">
                                    <div class="flex flex-row gap-4">
                                        {{-- <div class="">
                                            <a href="#" class="pt-person">
                                                <i class="fa-solid fa-user-tie"></i>{{$berita['akun'] }} 
                                            </a>
                                        </div> --}}
                                        <div class="">
                                            <a href="#" class="pt-post-date">
                                                <i class="far fa-calendar-alt"></i>{{Str::limit($berita['createdAt'], 10, ' ') }} 
                                            </a>
                                        </div>
                                    </div>
                                    
                                    <h5 class="font-bold pt-blog-title"><a
                                            href="/berita/{{ $berita['slug'] }}">{{ $berita['judul'] }}</a>
                                    </h5>
                                    <p>{{ Str::limit($berita['isi_berita'], 500) }}</p>
                                </div>
                            </div>
                        </article>
                    </div>
        </div>
