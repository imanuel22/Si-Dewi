<div class="flex justify-center">
    <div class="p-10 flex justify-center justify-items-center w-7/12">
        <article>
            <div class="grid justify-items-center bg-white border border-gray-200 rounded-lg shadow  dark:bg-gray-800 dark:border-gray-700">
                <div class="overflow-hidden">
                    <div class="h-3/4">
                        <img width="1100"
                        src="{{ env('APP_API_URL') }}/resource/berita/{{ $berita['gambar'] }}"
                        alt="{{ $berita['judul'] }}">
                    </div>
                </div>
                <div class="p-5 text-gray-700 break-words headlightfont-normal dark:text-gray-400 pt-7">
                    <h5 class="font-bold pt-blog-title"><a
                            href="/berita/{{ $berita['slug'] }}">{{ $berita['judul'] }}</a>
                    </h5>
                    <p>{{ Str::limit($berita['isi_berita'], 500) }}</p>
                </div>
            </div>
        </article>
    </div>
</div>    
