@extends('admin.layouts.app')
@section('content')

<head>
<!-- Leaflet CSS -->
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY="
crossorigin=""/>

<!-- Leaflet JS -->
<script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
  integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo="
  crossorigin=""></script>

<!-- Leaflet MarkerCluster JS -->
<script src="https://unpkg.com/leaflet.markercluster@1.4.1/dist/leaflet.markercluster.js"></script>

<!-- Leaflet MarkerCluster CSS -->
<link rel="stylesheet" href="https://unpkg.com/leaflet.markercluster@1.4.1/dist/MarkerCluster.css" />
<link rel="stylesheet" href="https://unpkg.com/leaflet.markercluster@1.4.1/dist/MarkerCluster.Default.css" />
</head>

<h3 class="mx-3 mt-3 mb-3">Map: Data of SARS-CoV-2</h3>

<body>
    <div class="mx-3" id="map" style="height: 600px;"></div>

    <script>
        var map = L.map('map').setView([20, 10], 3);
        
        L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
            maxZoom: 19,
            attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
        }).addTo(map);

        // Cluster group
        var markers = L.markerClusterGroup();

        @foreach ($sarsData as $s)
            var marker = L.marker([{{ $s->longitude_decimal }}, {{ $s->latitude_decimal }}])
                .bindPopup('Country: {{ $s->name_of_country }}' + '<br>Station name: {{ $s->station_name }}' + '<br>Date of Sample Preparation: {{ $s->date_of_sample_preparation }}');
            markers.addLayer(marker);
        @endforeach
        
        map.addLayer(markers);
    </script>
</body>


@endsection