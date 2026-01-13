<div class="modal fade" id="authModal">
<div class="modal-dialog">
<div class="modal-content">

<div class="modal-header">
<h5>Daftar / Login</h5>
<button class="btn-close" data-bs-dismiss="modal"></button>
</div>

<div class="modal-body">
<ul class="nav nav-tabs">
<li class="nav-item">
<button class="nav-link active" data-bs-toggle="tab" data-bs-target="#daftar">Daftar</button>
</li>
<li class="nav-item">
<button class="nav-link" data-bs-toggle="tab" data-bs-target="#login">Login</button>
</li>
</ul>

<div class="tab-content mt-3">

<div class="tab-pane fade show active" id="daftar">
<form method="POST" action="/register">
@csrf
<input class="form-control mb-2" name="name" placeholder="Nama">
<input class="form-control mb-2" name="email" placeholder="Email">
<input class="form-control mb-2" name="phone" placeholder="No HP">
<input type="password" class="form-control mb-2" name="password" placeholder="Password">
<button class="btn btn-warning w-100">Daftar</button>
</form>
</div>

<div class="tab-pane fade" id="login">
<form method="POST" action="/login">
@csrf
<input class="form-control mb-2" name="email" placeholder="Email">
<input type="password" class="form-control mb-2" name="password" placeholder="Password">
<button class="btn btn-warning w-100">Login</button>
</form>
</div>

</div>
</div>
</div>
</div>
</div>
