@extends('layouts.app')

@section('content')

<h3>OWNER DASHBOARD</h3>

<a href="/logout" class="btn btn-dark btn-sm">KELUAR</a>
<a href="#" class="btn btn-outline-dark btn-sm">EDIT</a>
<a href="#" class="btn btn-outline-dark btn-sm">TAMBAH</a>

<hr>

<div class="row">
@foreach ($kosts as $kost)
    <div class="col-md-3 mb-4">
        <div class="kost-box">
            <h5>{{ $kost->nama_kost }}</h5>
            <p>Rp. {{ number_format($kost->harga) }}</p>
            <p>{{ strtoupper($kost->tipe_kost) }} | {{ $kost->max_penghuni }} ORANG</p>
        </div>
    </div>
@endforeach
</div>

@endsection
