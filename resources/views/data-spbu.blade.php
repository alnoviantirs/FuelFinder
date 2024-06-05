<!-- resources/views/data-spbu.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>SPBU Data</h1>
    
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama SPBU</th>
                <th>Alamat</th>
                <th>Latitude</th>
                <th>Longitude</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($spbues as $spbu)
                <tr>
                    <td>{{ $spbu->id }}</td>
                    <td>{{ $spbu->namaspbu }}</td>
                    <td>{{ $spbu->alamat }}</td>
                    <td>{{ $spbu->latitude }}</td>
                    <td>{{ $spbu->longitude }}</td>
                    <td>
                        <a href="{{ route('spbus.show', $spbu->id) }}">View</a>
                        <!-- Tambahkan tombol Edit dan Delete jika diperlukan -->
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
