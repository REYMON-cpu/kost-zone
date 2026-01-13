@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-between mb-3">
    <h3 class="fw-bold">Dashboard Owner</h3>
    <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#addKost">
        Tambah Kost
    </button>
</div>

<table class="table table-bordered">
    <thead class="table-dark">
        <tr>
            <th>Nama Kost</th>
            <th>Harga</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($kosts as $kost)
        <tr>
            <td>{{ $kost->nama_kost }}</td>
            <td>Rp {{ number_format($kost->harga) }}</td>
            <td>
                <a href="/kost/edit/{{ $kost->id }}" class="btn btn-warning btn-sm">
                    Edit
                </a>

                <form action="/kost/delete/{{ $kost->id }}" method="POST" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger btn-sm"
                        onclick="return confirm('Hapus kost ini?')">
                        Hapus
                    </button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
