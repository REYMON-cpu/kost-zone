@extends('layout')

@section('content')

<nav class="navbar bg-light px-4">
<span class="fw-bold">Kost Zone</span>
<div>
<button class="btn btn-link" data-bs-toggle="modal" data-bs-target="#ketentuanModal">Ketentuan</button>
<button class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#authModal">Daftar / Login</button>
</div>
</nav>

<div class="bg-warning text-center py-5">
<h1>Kost Zone</h1>
<p>Temukan Kost Impianmu</p>
</div>

<div class="container my-4">
<div class="row g-4">
@foreach($kosts as $kost)
<div class="col-md-3">
<div class="card h-100">
<div class="bg-warning" style="height:150px"></div>
<div class="card-body">
<small>{{ $kost->kecamatan }}, {{ $kost->kabupaten }}</small>
<h6>{{ ucfirst($kost->tipe_kost) }}</h6>
<p>{{ $kost->pembayaran }}</p>
<strong>Rp {{ number_format($kost->harga) }}</strong>
</div>
<button class="btn btn-outline-warning"
data-bs-toggle="modal"
data-bs-target="#detailKost{{ $kost->id }}">
Detail
</button>
</div>
</div>

@include('kost.modal-detail')

@endforeach
</div>

<div class="mt-4">
{{ $kosts->links() }}
</div>
</div>

@include('auth.modal')
@include('landing.ketentuan')

<footer class="text-center py-3 mt-5 bg-light">
<p>Dibuat oleh Tim Kost Zone</p>
</footer>

@endsection
