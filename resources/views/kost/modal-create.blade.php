<div class="modal fade" id="tambahKost">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <form method="POST" action="/kost/store" enctype="multipart/form-data">
                @csrf
                <div class="modal-header">
                    <h5>Tambah Kost</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <div class="modal-body">
                    <input class="form-control mb-2" name="nama_kost" placeholder="Nama Kost">
                    <select class="form-control mb-2" name="tipe_kost">
                        <option value="campuran">Campuran</option>
                        <option value="putra">Putra</option>
                        <option value="putri">Putri</option>
                    </select>
                    <input class="form-control mb-2" name="harga" placeholder="Harga">
                    <textarea class="form-control mb-2" name="spesifikasi" placeholder="Spesifikasi"></textarea>
                    <input type="file" class="form-control" name="images[]" multiple>
                </div>

                <div class="modal-footer">
                    <button class="btn btn-success">Tambah</button>
                </div>
            </form>
        </div>
    </div>
</div>
