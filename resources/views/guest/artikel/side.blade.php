<div class="grid grid-cols-1 row-start-2 md:w-5/6 mt-4 md:mx-8">
    <aside class="sidebar">
        <div class="flex md:order-2">
            <form action="/jelajahi/filter" method="get">
                <button type="button" data-collapse-toggle="navbar-search" aria-controls="navbar-search"
                    aria-expanded="false"
                    class="md:hidden text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 focus:outline-none focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 rounded-lg text-sm p-2.5 me-1">
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                    </svg>
                    <span class="sr-only">Search</span>
                </button>
                <div class="relative hidden md:block">
                    <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                        <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                        </svg>
                        <span class="sr-only">Search icon</span>
                    </div>
                    <input type="text" id="search-navbar" name="search"
                        class="block 2xl:w-96 md:w-80 p-2 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Search..." value="{{ request()->get('search') }}">
                </div>
            </form>
        </div>
        <div class="border-2 border-gray-400 bg-primary-200 text-white p-4 mt-4">
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
            @endforeach
    </aside>
</div>
