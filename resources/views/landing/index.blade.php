@extends('layouts.app')

@section('content')
<div class="filter">
    <select><option>Harga</option></select>
    <select><option>Lokasi</option></select>
    <select><option>Tipe</option></select>
</div>

<div class="kost-grid">
@foreach ($kosts as $kost)
    <div class="kost-card">
        <p class="lokasi">{{ $kost->kecamatan }}, {{ $kost->kota }}</p>

        <p><strong>Fasilitas Utama:</strong></p>
        <p>Pembayaran: {{ $kost->pembayaran }}</p>

        <h3>{{ $kost->nama }}</h3>
        <h4>Rp. {{ number_format($kost->harga) }}</h4>

        <p>{{ $kost->tipe }} · {{ $kost->kapasitas }} Orang</p>

        <a href="{{ route('kost.show', $kost->id) }}" class="btn">
            Detail
        </a>
    </div>
@endforeach
</div>
@endsection
