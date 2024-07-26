@extends('guest.layouts.main')

@section('main')
<body class="bg-slate-200">
    <div class="container-fluid ">
        {{-- content Start --}}
        <div class="container-fluid mx-auto">
            {{-- artikel start --}}
            <div class="p-36">
                <div class="grid grid-cols-3 gap-4">
                    <div class="grid grid-cols-1 gap-4 col-span-2 row-start-2 mx-auto w-full">
                        @foreach ($berita as $row)
                            <a href="/artikel/{{ $row['id'] }}">
                                <div class="border-2 border-gray-400 bg-primary">
                                    <article class="">
                                        <div class="border-black">
                                            <div class="image-card">
                                                <img width="1000" height="600"
                                                    src=""{{ env('APP_API_URL') }}/resource/artikel/{{ $row['berita']['gambar'] }}"" class=""
                                                    alt="">
                                            </div>
                                            <div class="headlight text-white p-5 pt-7">
                                                <h5 class="pt-blog-title font-bold"><a
                                                        href="/berita/{{ $row['slug'] }}">{{ $row['judul'] }}</a>
                                                </h5>
                                                <p>{{ $row['isi_berita'] }}</p>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                            </a>
                        @endforeach


                    </div>
                    {{-- side --}}
                    <div class="grid grid-cols-1 gap-4 row-start-2 ml-20">
                        <aside class="sidebar">
                            <div class="border-2 bg-primary border-gray-400 p-4">
                                <form role="search"
                                    class="wp-block-search__button-outside wp-block-search__text-button wp-block-search">
                                    <div class="wp-block-search__inside-wrapper ">
                                        <input type="search" class="w-72 " name="s" value=""
                                            placeholder="" required="">
                                        <button type="submit"
                                            class="pl-2 text-white wp-block-search__button wp-element-button">Search</button>
                                    </div>
                                </form>
                            </div>
                            <div class="border-2 border-gray-400 bg-primary text-white p-4 mt-4">
                                <h2 class="widget-title font-bold pb-2">Recent posts</h2>
                                @foreach ($berita as $row)
                                    <div class="pt-footer-recent-post">
                                        <div class="pt-footer-recent-post-media">
                                            <a href="/artikel/{{ $row['id'] }}">
                                                <img src="https://blog.prydwen.gg/wp-content/uploads/2024/06/blog23-100x100.jpg"
                                                    alt=""></a>
                                        </div>
                                        <div class="pt-footer-recent-post-info">
                                            <h6><a href="/artikel/{{ $row['id'] }}">{{ $row['judul'] }}</a>
                                            </h6>
                                            <a href="https://blog.prydwen.gg/2024/06/07/" class="pt-post-date">
                                                <i class="far fa-calendar-alt"></i>{{ $row['createdAt'] }} </a>
                                        </div>

                                    </div>
                                @endforeach
                        </aside>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
