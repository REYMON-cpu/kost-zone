<div class="modal fade" id="detailKost{{ $kost->id }}">
<div class="modal-dialog modal-lg">
<div class="modal-content">

<div class="modal-header">
<h5>{{ $kost->nama_kost }}</h5>
<button class="btn-close" data-bs-dismiss="modal"></button>
</div>

<div class="modal-body">

<div id="carousel{{ $kost->id }}" class="carousel slide" data-bs-ride="carousel">
<div class="carousel-inner">
@foreach($kost->images as $index => $img)
<div class="carousel-item {{ $index == 0 ? 'active' : '' }}">
<img src="{{ asset('storage/'.$img->image_path) }}" class="d-block w-100">
</div>
@endforeach
</div>
</div>

<p class="mt-3">{{ $kost->spesifikasi }}</p>
<p><strong>Harga:</strong> Rp {{ number_format($kost->harga) }}</p>

<a href="https://wa.me/{{ $kost->user->phone }}" class="btn btn-success">
Hubungi Pemilik
</a>

</div>
</div>
</div>
</div>
