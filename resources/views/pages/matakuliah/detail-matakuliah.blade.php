@extends('layouts.template')
{{-- untuk memanggil content --}}
@section('content')
    <div class = "container mt-2">
        <h2>Detail Data Mata Kuliah</h2>
        <div class= "card">
            <div class="card-header">Detail data Mata Kuliah</div>
            <div class="card-body">
                <p>Kode Matakuliah : {{$detailMatakuliah->kode_matakuliah}}</p>
                <p>Nama Matakuliah : {{$detailMatakuliah->nama_matakuliah}}</p>
                <p>SKS : {{$detailMatakuliah->sks}}</p>
            </div>
        </div>
    </div>
@endsection