<div class="lg:block p-4 my-4 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 ">
    <h2 class="pb-2 font-bold widget-title">Recent posts</h2>
        <div class="pt-footer-recent-post">
            <div class="pt-footer-recent-post-media">
                <a href="/artikel/{{ $berita['id'] }}">
                    <img src="{{ env('APP_API_URL') }}/resource/berita/{{ $berita['gambar'] }}" alt="{{ $berita['judul'] }}">
                </a>
            </div>
            <div class="pt-footer-recent-post-info">
                <h6><a href="/artikel/{{ $berita['id'] }}">{{ $berita['judul'] }}</a>
                </h6>
                <a href="#" class="pt-post-date">
                    <i class="far fa-calendar-alt"></i>{{ $berita['createdAt'] }} </a>
            </div>
        </div>
        <hr class="my-4">
</div>
