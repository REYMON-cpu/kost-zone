@extends('layouts.app')

@section('content')
<div class="grid grid-cols-1 md:grid-cols-4 gap-6">
    @foreach($kosts as $kost)
    <div class="bg-white rounded-xl shadow-sm overflow-hidden border">
        <div class="bg-orange-400 h-40"></div>
        
        <div class="bg-blue-700 text-white text-[10px] px-3 py-1 uppercase font-bold text-center">
            {{ $kost->kecamatan }}, {{ $kost->kota }}
        </div>

        <div class="p-4">
            <h3 class="font-bold text-gray-800 uppercase">{{ $kost->nama }}</h3> <div class="flex gap-2 my-2 text-[10px] font-bold">
                <span class="border-2 border-black rounded-full px-3 py-0.5">{{ $kost->tipe }}</span> <span class="border-2 border-black rounded-full px-3 py-0.5">{{ $kost->kapasitas }} ORANG</span>
            </div>

            <div class="text-xs text-gray-600 mb-4">
                <p>Fasilitas Utama :</p> <p>Pembayaran : {{ $kost->pembayaran }}</p>
            </div>

            <div class="text-lg font-bold">
                Rp. {{ number_format($kost->harga, 0, ',', '.') }} </div>
        </div>
    </div>
    @endforeach
</div>
@endsection