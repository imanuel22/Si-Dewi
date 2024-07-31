@extends('superadmin.layouts.main')

@section('main')
    <div class="mx-4 mt-20">
        <h2 class="mb-3  font-bold tracking-tight text-gray-500 ">Admin / Dashboard </h2>
        <div class="flex justify-between">
            <h1 class=" text-3xl font-semibold tracking-tight text-gray-900 dark:text-white"> Dashboard</h1>
        </div>
        <a href="#"
            class="mt-10 block w-60 p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white"> Total Desa :
                {{ $desa_count }}
            </h5>
        </a>


        {{-- <div class="">
            <p>count desa di Badung: {{ $desa_per_kabupaten['Badung'] }}</p>
            <p>count desa di Bangli: {{ $desa_per_kabupaten['Bangli'] }}</p>
            <p>count desa di Jembrana: {{ $desa_per_kabupaten['Jembrana'] }}</p>
            <p>count desa di Klungkung: {{ $desa_per_kabupaten['Klungkung'] }}</p>
            <p>count desa di Karangasem: {{ $desa_per_kabupaten['Karangasem'] }}</p>
            <p>count desa di Gianyar: {{ $desa_per_kabupaten['Gianyar'] }}</p>
            <p>count desa di Tabanan: {{ $desa_per_kabupaten['Tabanan'] }}</p>
            <p>count desa di Denpasar: {{ $desa_per_kabupaten['Denpasar'] }}</p>
            <p>count desa di Buleleng: {{ $desa_per_kabupaten['Buleleng'] }}</p>
        </div> --}}
        <div class="grid sm:grid-cols-2 mt-10">
            <div class="w-2/4">
                <canvas id="myChart"></canvas>
            </div>
            <div class="w-full">
                <canvas id="myChart2"></canvas>
            </div>
        </div>
        <div class="grid sm:grid-cols-2 mt-10">
            <div class="">
                <h1 class="text-3xl font-semibold text-center my-5"  >Destinasi Dengan Review Terbaik</h1>

                <div class="grid grid-cols-1 gap-4 md:grid-cols-3">

                    @foreach ($review as $index => $row)
                        <a href="/desa/{{ $row['destination']['id_desawisata'] }}/destinasi/{{ $row['destination']['id'] }}"
                            class="relative block text-white group" style="height:12rem">
                            <div class="relative flex items-end h-full transition-transform transform shadow-lg rounded-xl group-hover:-translate-y-2"
                                style="background-image: url('{{ env('APP_API_URL') }}/resource/destinasiwisata/{{ $row['destination']['gambar'] }}'); background-size: cover; background-position: center;">
                                <div class="flex absolute p-1 m-2 text-xl font-bold text-yellow-500l top-5 right-5">
                                    @php
                                        $rating = round($row['averageRating'] * 2) / 2;
                                        $fullStars = floor($rating);
                                        $halfStar = $rating - $fullStars >= 0.5 ? 1 : 0;
                                        $emptyStars = 5 - $fullStars - $halfStar;
                                    @endphp

                                    {{-- Bintang Penuh --}}
                                    @for ($i = 0; $i < $fullStars; $i++)
                                        <svg class="w-5 h-5 text-yellow-400 dark:text-white" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            fill="currentColor" viewBox="0 0 24 24">
                                            <path
                                                d="M13.849 4.22c-.684-1.626-3.014-1.626-3.698 0L8.397 8.387l-4.552.361c-1.775.14-2.495 2.331-1.142 3.477l3.468 2.937-1.06 4.392c-.413 1.713 1.472 3.067 2.992 2.149L12 19.35l3.897 2.354c1.52.918 3.405-.436 2.992-2.15l-1.06-4.39 3.468-2.938c1.353-1.146.633-3.336-1.142-3.477l-4.552-.36-1.754-4.17Z" />
                                        </svg>
                                    @endfor

                                    {{-- Setengah Bintang --}}
                                    @if ($halfStar)
                                        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                            width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                            <defs>
                                                <linearGradient id="half-yellow-gray" x1="0" x2="1"
                                                    y1="0" y2="0">
                                                    <stop offset="50%" stop-color="#eab308" />
                                                    <stop offset="50%" stop-color="#9ca3af" />
                                                </linearGradient>
                                            </defs>
                                            <path fill="url(#half-yellow-gray)"
                                                d="M13.849 4.22c-.684-1.626-3.014-1.626-3.698 0L8.397 8.387l-4.552.361c-1.775.14-2.495 2.331-1.142 3.477l3.468 2.937-1.06 4.392c-.413 1.713 1.472 3.067 2.992 2.149L12 19.35l3.897 2.354c1.52.918 3.405-.436 2.992-2.15l-1.06-4.39 3.468-2.938c1.353-1.146.633-3.336-1.142-3.477l-4.552-.36-1.754-4.17Z" />
                                        </svg>
                                    @endif

                                    {{-- Bintang Kosong --}}
                                    @for ($i = 0; $i < $emptyStars; $i++)
                                        <svg class="w-5 h-5 text-gray-400 dark:text-gray-600" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            fill="currentColor" viewBox="0 0 24 24">
                                            <path
                                                d="M13.849 4.22c-.684-1.626-3.014-1.626-3.698 0L8.397 8.387l-4.552.361c-1.775.14-2.495 2.331-1.142 3.477l3.468 2.937-1.06 4.392c-.413 1.713 1.472 3.067 2.992 2.149L12 19.35l3.897 2.354c1.52.918 3.405-.436 2.992-2.15l-1.06-4.39 3.468-2.938c1.353-1.146.633-3.336-1.142-3.477l-4.552-.36-1.754-4.17Z" />
                                        </svg>
                                    @endfor
                                    {{-- ⭐️ {{ Str::limit($row['averageRating'], 3, '') }} --}}
                                </div>
                                <div
                                    class="absolute inset-0 transition-opacity bg-gradient-to-t from-black to-transparent opacity-20 group-hover:opacity-50">
                                </div>
                                <div
                                    class="p-4 !pt-0 z-10 transition-opacity group-hover:absolute group-hover:opacity-0 sm:p-6 lg:p-8">
                                    <h2 class="mt-4 text-3xl font-bold sm:text-3xl">{{ $row['destination']['nama'] }}
                                    </h2>
                                </div>
                                <div
                                    class="absolute z-20 w-full p-4 transition-opacity opacity-0 group-hover:opacity-100 sm:p-6 lg:p-8">
                                    <h3 class="mt-4 text-xl font-medium sm:text-2xl">{{ $row['destination']['nama'] }}
                                    </h3>
                                    <p
                                        class="mt-4 text-sm sm:text-base break-words w-full {{ $loop->first ? 'block' : 'hidden' }}">
                                        {{ \Illuminate\Support\Str::limit($row['destination']['deskripsi'], 100) }}
                                    </p>
                                    <p class="mt-4 font-bold">Read more</p>
                                </div>
                            </div>
                        </a>
                    @endforeach
                </div>
            </div>
            <div class="">
                <h1 class="text-3xl font-semibold text-center my-5">Berita Terbaru</h1>
                <div class="grid grid-cols-1 sm:grid-cols-3 gap-6 ">
                    <!-- Card 1 -->
                    @foreach ($berita as $row)
                        <a href="/artikel/{{ $row['id'] }}" class="relative block text-white group"
                            style="height: 12rem">
                            <div class="relative flex items-end h-full transition-transform transform rounded-xl group-hover:-translate-y-2"
                                style="background-image: url('{{ env('APP_API_URL') }}/resource/berita/{{ $row['gambar'] }}'); background-size: cover; background-position: center;">
                                <div
                                    class="absolute inset-0 transition-opacity bg-gradient-to-t from-black to-transparent opacity-20 group-hover:opacity-50">
                                </div>
                                <div
                                    class="p-4 !pt-0 z-10 transition-opacity group-hover:absolute group-hover:opacity-0 sm:p-6 lg:p-8">
                                    <h2 class="mt-4 text-3xl font-bold sm:text-3xl">{{ $row['judul'] }}</h2>
                                </div>
                                <div
                                    class="absolute z-20 w-full p-4 transition-opacity opacity-0 group-hover:opacity-100 sm:p-6 lg:p-8">
                                    <h3 class="mt-4 text-xl font-medium sm:text-2xl">{{ $row['judul'] }}</h3>
                                    <p class="w-full mt-4 text-sm break-words sm:text-base">
                                        {{ \Illuminate\Support\Str::limit($row['isi_berita'], 100) }}
                                    </p>
                                    <p class="mt-4 font-bold">Read more</p>
                                </div>
                            </div>
                        </a>
                    @endforeach
                </div>
            </div>
        </div>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        const ctx = document.getElementById('myChart').getContext('2d');
        new Chart(ctx, {
            type: 'pie',
            data: {
                labels: [
                    'Badung',
                    'Bangli',
                    'Jembrana',
                    'Klungkung',
                    'Karangasem',
                    'Gianyar',
                    'Tabanan',
                    'Denpasar',
                    'Buleleng',
                ],
                datasets: [{
                    label: 'Banyak Desa per Kabupaten',
                    data: [
                        {{ $desa_per_kabupaten['Badung'] }},
                        {{ $desa_per_kabupaten['Bangli'] }},
                        {{ $desa_per_kabupaten['Jembrana'] }},
                        {{ $desa_per_kabupaten['Klungkung'] }},
                        {{ $desa_per_kabupaten['Karangasem'] }},
                        {{ $desa_per_kabupaten['Gianyar'] }},
                        {{ $desa_per_kabupaten['Tabanan'] }},
                        {{ $desa_per_kabupaten['Denpasar'] }},
                        {{ $desa_per_kabupaten['Buleleng'] }},
                    ],
                    backgroundColor: [
                        '#FF6384',
                        '#36A2EB',
                        '#FFCE56',
                        '#FF9F40',
                        '#4BC0C0',
                        '#9966FF',
                        '#FF6384',
                        '#36A2EB',
                        '#FFCE56',
                    ],
                    borderColor: [
                        '#ffffff',
                        '#ffffff',
                        '#ffffff',
                        '#ffffff',
                        '#ffffff',
                        '#ffffff',
                        '#ffffff',
                        '#ffffff',
                        '#ffffff',
                    ],
                    borderWidth: 2,
                    hoverOffset: 8,
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        position: 'top',
                    },
                    tooltip: {
                        callbacks: {
                            label: function(context) {
                                let label = context.label || '';
                                if (label) {
                                    label += ': ';
                                }
                                if (context.raw !== null) {
                                    label += context.raw;
                                }
                                return label;
                            }
                        }
                    },
                    title: {
                        display: true,
                        text: 'Banyak Desa per Kabupaten di Bali',
                        font: {
                            size: 18
                        }
                    }
                }
            }
        });
        </script>
    <script>
        const bar = document.getElementById('myChart2');
        new Chart(bar, {
            type: 'bar',
            data: {

                datasets: [{
                    label: 'Banyak Desa per Kabupaten',
                    data: [
                        {{ $desa_per_kabupaten['Badung'] }},
                        {{ $desa_per_kabupaten['Bangli'] }},
                        {{ $desa_per_kabupaten['Jembrana'] }},
                        {{ $desa_per_kabupaten['Klungkung'] }},
                        {{ $desa_per_kabupaten['Karangasem'] }},
                        {{ $desa_per_kabupaten['Gianyar'] }},
                        {{ $desa_per_kabupaten['Tabanan'] }},
                        {{ $desa_per_kabupaten['Denpasar'] }},
                        {{ $desa_per_kabupaten['Buleleng'] }},

                    ],
                    labels: [
                        'Badung',
                        'Bangli',
                        'Jembrana',
                        'Klungkung',
                        'Karangasem',
                        'Gianyar',
                        'Tabanan',
                        'Denpasar',
                        'Buleleng',
                    ],
                    borderWidth: 1,
                    hoverOffset: 5,
                    // options: {
                    //     scales: {
                    //         y: {
                    //             beginAtZero: true
                    //         }
                    //     }
                    // },
                }]
            },
            options: {

            }
        });
    </script>
@endsection
