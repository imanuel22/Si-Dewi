<div class="mb-2 bg-white  sm:w-4/6   rounded-2xl p-8 h-fit ">
    <div class="flex justify-between items-center">
        <div class="">
            <h1 class="text-5xl font-bold max-w-2xl">{{ $akomodasi['nama'] }} </h1>
            <p class="font-semibold mt-1 ">{{ $desa['nama'] }} / {{ $desa['kabupaten'] }}
            </p>
        </div>
        <div class="star flex flex-col items-center">
            <div class=" flex gap-1">
                <h2 class="text-center text-l mt-1 font-bold">Best Seller</h2>
            </div>
        </div>
    </div>
    <div class="mt-10"><h1 class="text-xl font-semibold">Lokasi Desa</h1>
        <p class="text-lg">{{ $desa['alamat'] }} / {{ $desa['kabupaten'] }}</p>
        <div class="h-full mt-4 sm:container text-justify px-1 w-full mx-auto">
            <div id="map" class="relative h-64 z-0"></div>
        </div>
    </div>
</div>
<script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Initialize the map
            var map = L.map('map').setView([{{ $desa['maps'] }}], 15);

            // Add a tile layer to the map
            L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
            }).addTo(map);

            // Add a marker to the map
            L.marker([{{ $desa['maps'] }}]).addTo(map)
                .bindPopup('Lokasi Desa')
                .openPopup();
        });
    </script>
