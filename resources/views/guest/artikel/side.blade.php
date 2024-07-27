
        <div class=" bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 p-4 mt-4 hidden md:block">
            <h2 class="widget-title font-bold pb-2">Recent posts</h2>
            @foreach ($berita as $row)
                <div class="pt-footer-recent-post">
                    <div class="pt-footer-recent-post-media">
                        <a href="/artikel/{{ $row['id'] }}">
                            <img src="{{ env('APP_API_URL') }}/resource/berita/{{ $row['gambar'] }}" alt="{{ $row['judul'] }}">
                        </a>
                    </div>
                    <div class="pt-footer-recent-post-info">
                        <h6><a href="/artikel/{{ $row['id'] }}">{{ $row['judul'] }}</a>
                        </h6>
                        <a href="#" class="pt-post-date">
                            <i class="far fa-calendar-alt"></i>{{ $row['createdAt'] }} </a>
                    </div>
                </div>
                <hr class="my-4">
            @endforeach
