@extends('adminlte::page')

@section('title', 'Data SPBU')

@section('content_header')
<div class="card bg-primary text-white">
    <div class="card-body text-center">
        <h1>DATA LOKASI SPBU DI BANDUNG</h1>
        <br>
        <h3>{{ \App\Models\SPBU::count() }} Lokasi</h3>
    </div>
    
@stop

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    @if (session('success_message'))
                        <div class="alert alert-success">
                            {{session('success_message')}}
                        </div>
                    @endif

                    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
                            integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY="
                            crossorigin=""/>

                        <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
                            integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo="
                            crossorigin=""></script>
                    <!-- Elemen untuk peta -->
                    <div id="map" style="width:100%; height:500px;"></div>

                    <style>
                        #map { width: 100%;
                        height: 500px;
                        top: 0; /* Adjust this value based on your layout and preferences */ }
                    </style>
                    <!-- Akhir Elemen untuk peta -->
                    <br>

                    <table class="table table-hover table-bordered table-striped" id="example2"">
                        <thead>
                            <tr>
                                <th>Nama SPBU</th>
                                <th>Alamat SPBU</th>
                                <th>Jam Operasional</th>
                                <th>Jenis Bahan Bakar</th>
                                <th>Telepon</th>
                                <th>Fasilitas</th>
                                <th>Latitude</th>
                                <th>Longitude</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($spbus as $key => $spbu)
                                <tr>
                                    <td>{{$spbu->namaspbu}}</td>
                                    <td>{{$spbu->alamat}}</td>
                                    <td>{{$spbu->jam_operasional}}</td>
                                    <td>{{$spbu->jenis_bahan_bakar}}</td>
                                    <td>{{$spbu->telepon}}</td>
                                    <td>{{$spbu->fasilitas}}</td>
                                    <td>{{$spbu->latitude}}</td>
                                    <td>{{$spbu->longitude}}</td>
                                    <td>
                                        <a href="{{ route('spbus.edit', $spbu->id) }}" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a>
                                        <button class="btn btn-danger btn-sm" onclick="deleteSpbu({{ $spbu->id }})"><i class="fas fa-trash-alt"></i></button>
                    
                                        <!-- Form for delete -->
                                        <form id="deleteForm_{{$spbu->id}}" action="{{ route('spbus.destroy', $spbu->id) }}" method="POST" style="display: none;">
                                            @csrf
                                            @method('DELETE')
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    
                    <p class="mb-0"></p>
                </div>
            </div>
        </div>
    </div>
@stop

@push('js')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        // Inisialisasi peta menggunakan Leaflet
        var map = L.map('map').setView([-6.2088, 106.8456], 13); // Set initial view to a default location (e.g., Jakarta)
    
        // Menambahkan layer peta dari Google Maps menggunakan Leaflet
        L.tileLayer('https://{s}.google.com/vt?/lyrs=p&x={x}&y={y}&z={z}', {
            maxZoom: 19,
            subdomains: ['mt0', 'mt1', 'mt2', 'mt3']
        }).addTo(map);
    
        // Menambahkan marker untuk setiap SPBU di dalam database
        @foreach ($spbus as $spbu)
            var marker = L.marker([{{ $spbu->latitude }}, {{ $spbu->longitude }}]).addTo(map);
            marker.bindPopup("<b>{{ $spbu->namaspbu }}</b><br>Alamat : {{ $spbu->alamat }}<br>Jam Operasional : {{ $spbu->jam_operasional }}<br>Jenis Bahan Bakar : {{ $spbu->jenis_bahan_bakar }}<br>Telepon : {{ $spbu->telepon }}<br>Fasilitas : {{ $spbu->fasilitas }}<br>latitude : {{ $spbu->latitude }}<br>Longitude : {{ $spbu->longitude }}").openPopup();
        @endforeach
    
        // Menangkap event klik pada peta
        map.on('click', function onMapClick(e) {
            // Mendapatkan koordinat dari event klik
            var lat = e.latlng.lat;
            var lng = e.latlng.lng;
    
            // Mengisi nilai input latitude dan longitude
            document.getElementById('InputLatitude').value = lat;
            document.getElementById('InputLongitude').value = lng;
        });
    </script>

    <script>
        function deleteSpbu(spbuId) {
            Swal.fire({
                title: 'Apakah Anda yakin?',
                text: 'Anda tidak dapat mengembalikan data yang sudah dihapus!',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#d33',
                cancelButtonColor: '#3085d6',
                confirmButtonText: 'Ya, hapus!',
            }).then((result) => {
                if (result.isConfirmed) {
                    // Trigger the form submission for delete
                    document.getElementById('deleteForm_' + spbuId).submit();
                }
            });
        }
    </script>
@endpush
