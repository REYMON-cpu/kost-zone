@extends('layouts.app')

@section('content')

<h3 class="section-title">DAFTAR KOST</h3>

<div class="filter-bar">
    Filter Harga | Lokasi | Tipe &gt;&gt;&gt;
</div>

<div class="row">
@foreach ($kosts as $kost)
    <div class="col-md-3 mb-4">
        <div class="kost-box">
            <div class="kost-location">
                {{ $kost->kecamatan }}, {{ $kost->kota }}
            </div>

            <div class="kost-info">
                <small>Fasilitas Utama :</small><br>
                <small>Pembayaran : {{ ucfirst($kost->pembayaran) }}</small>
            </div>

            <h5 class="kost-name">{{ $kost->nama_kost }}</h5>

            <p class="kost-price">
                Rp. {{ number_format($kost->harga) }}
            </p>

            <div class="kost-meta">
                {{ strtoupper($kost->tipe_kost) }} |
                {{ $kost->max_penghuni }} ORANG
            </div>

            <a href="/kost/{{ $kost->id }}" class="kost-detail-btn">
                Detail
            </a>
        </div>
    </div>
@endforeach
</div>

@endsection
