@extends('layouts.app')

@section('content')
<div class="container">
    <h3>Edit Kost</h3>

    <form method="POST" action="/kost/update/{{ $kost->id }}">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label>Nama Kost</label>
            <input type="text" name="nama_kost" class="form-control" value="{{ $kost->nama_kost }}" required>
        </div>

        <div class="mb-3">
            <label>Harga</label>
            <input type="number" name="harga" class="form-control" value="{{ $kost->harga }}" required>
        </div>

        <div class="mb-3">
            <label>Spesifikasi</label>
            <textarea name="spesifikasi" class="form-control">{{ $kost->spesifikasi }}</textarea>
        </div>

        <button class="btn btn-primary">Update</button>
        <a href="/owner/dashboard" class="btn btn-secondary">Batal</a>
    </form>
</div>
@endsection
