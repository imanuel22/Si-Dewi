<div class="px-36">
    <div class="grid grid-cols-3 gap-4">
        <div class="grid grid-cols-1 col-span-2 row-start-2 gap-4 mx-auto mb-10 md:w-full">
            @foreach ($berita as $row)
                        <a href="/artikel/{{ $row['id'] }}">
                        <article class="">
                            <div class="bg-white border border-gray-200 rounded-lg shadow  dark:bg-gray-800 dark:border-gray-700 mb-4">
                                <div class="">
                                    <img class="w-full relative"
                                        src="{{ env('APP_API_URL') }}/resource/berita/{{ $row['gambar'] }}"
                                        alt="{{ $row['judul'] }}">
                                </div>

                                <div class="p-5 text-gray-700 break-words headlightfont-normal dark:text-gray-400 pt-7">
                                    <h5 class="font-bold pt-blog-title"><a
                                            href="/artikel/{{ $row['id'] }}">{{ $row['judul'] }}</a>
                                    </h5>
                                    <p>{{ Str::limit($row['isi_berita'], 500) }}</p>
                                </div>
                            </div>
                        </a>
                        </article>
            @endforeach
<<<<<<< HEAD
            {{ $berita->links() }}
=======
            <div class="d">
                {{ $berita->links() }}

            </div>
>>>>>>> cd0c20a1b7e7d70f53cae2ba9e010a937d082702
        </div>
