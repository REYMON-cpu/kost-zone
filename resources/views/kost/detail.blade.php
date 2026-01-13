@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-6">
        <img src="{{ asset('storage/'.$kost->images->first()->image_path) }}"
             class="img-fluid kost-detail-img">
    </div>

    <div class="col-md-6">
        <h3 class="fw-bold">{{ $kost->nama_kost }}</h3>
        <h4 class="text-success">
            Rp {{ number_format($kost->harga) }} / bulan
        </h4>

        <hr>

        <p>{{ $kost->spesifikasi }}</p>

        <p class="mt-3">
            <strong>Pemilik:</strong> {{ $kost->user->name }}<br>
            <strong>Kontak:</strong> {{ $kost->user->phone }}
        </p>

        <a href="/" class="btn btn-secondary mt-3">Kembali</a>
    </div>
</div>
@endsection
