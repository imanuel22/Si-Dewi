@php
    use App\Helpers\MapHelper;

    $dmsString = $desa['maps'];
    $coordinates = ['latitude' => null, 'longitude' => null];

    if (MapHelper::isDmsFormat($dmsString)) {
        $coordinates = MapHelper::parseDmsCoordinates($dmsString);
    } else {
        // Assume the coordinates are in decimal format, split by comma or space
        [$latitude, $longitude] = explode(',', $dmsString);
        $latitude = trim($latitude);
        $longitude = trim($longitude);

        $coordinates['latitude'] = $latitude;
        $coordinates['longitude'] = $longitude;
    }

    $latitude = $coordinates['latitude'];
    $longitude = $coordinates['longitude'];

@endphp
{{-- @dd($desa['maps']) --}}
<div class="bg-white rounded-2xl p-6 h-96 flex flex-col">
    <h1 class="text-xl font-semibold">Lokasi Desa</h1>
    <p class="text-lg">{{ $desa['alamat'] }} / {{ $desa['kabupaten'] }}</p>
    <div class="flex-grow mt-4 sm:container text-justify px-1 w-full mx-auto">
        <div id="map" class="relative h-full z-0"></div>
    </div>
</div>
<script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Initialize the map
        var map = L.map('map').setView([{{ $desa['maps'] }}], 13);

        // Add a tile layer to the map
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(map);

        // Add a marker to the map
        L.marker([{{ $latitude }}, {{ $longitude }}]).addTo(map)
            .bindPopup('Lokasi Desa')
            .openPopup();
    });
</script>
