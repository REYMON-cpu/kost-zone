@extends('layouts.app')

@section('content')
<h2 class="text-center fw-bold mb-4">DAFTAR KOST</h2>

<div class="row">
    @foreach ($kosts as $kost)
        <div class="col-md-4 mb-4">
            <div class="kost-card">
                <img src="{{ asset('storage/'.($kost->images->first()->image_path ?? 'default.jpg')) }}">

                <div class="p-3">
                    <h5 class="fw-bold">{{ $kost->nama_kost }}</h5>
                    <p class="text-success mb-1">
                        Rp {{ number_format($kost->harga) }} / bulan
                    </p>
                    <a href="/kost/{{ $kost->id }}" class="btn btn-primary btn-sm w-100">
                        Detail
                    </a>
                </div>
            </div>
        </div>
    @endforeach
</div>
@endsection
