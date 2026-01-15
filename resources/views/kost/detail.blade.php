@extends('layouts.app')

@section('content')

<h2>{{ $kost->nama_kost }}</h2>
<h3 class="text-success">
    Rp. {{ number_format($kost->harga) }}
</h3>

<button class="btn btn-dark mb-3">Hubungi Pemilik</button>

<p>
    <strong>Tipe:</strong>
    {{ ucfirst($kost->tipe_kost) }} |
    Maks {{ $kost->max_penghuni }} orang
</p>

<p><strong>Lokasi:</strong> {{ $kost->kecamatan }}, {{ $kost->kota }}</p>

<p><strong>Pembayaran:</strong> {{ ucfirst($kost->pembayaran) }}</p>

<p><strong>Spesifikasi:</strong></p>
<ul>
    <li>{{ $kost->spesifikasi }}</li>
</ul>

<a href="/" class="btn btn-secondary">Kembali</a>

@endsection
