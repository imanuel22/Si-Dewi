<div class="px-36">
    <div class="grid grid-cols-3 gap-4">
        <div class="grid grid-cols-1 gap-4 col-span-2 row-start-2 mx-auto mb-10 md:w-full">
            @foreach ($berita as $row)
                <a href="/artikel/{{ $row['id'] }}">
                    <div
                        class=" bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                        <article class="">
                            <div class="border-black">
                                <div class="">
                                    <img width="1200"
                                        src="{{ env('APP_API_URL') }}/resource/berita/{{ $row['gambar'] }}"
                                        alt="{{ $row['judul'] }}">
                                </div>

                                <div class="headlightfont-normal text-gray-700 dark:text-gray-400 break-words p-5 pt-7">
                                    <h5 class="pt-blog-title font-bold"><a
                                            href="/berita/{{ $row['slug'] }}">{{ $row['judul'] }}</a>
                                    </h5>
                                    <p>{{ Str::limit($row['isi_berita'], 500) }}</p>
                                </div>
                            </div>
                        </article>
                    </div>
                </a>
            @endforeach
        </div>
