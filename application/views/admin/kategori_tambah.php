<div class="card-header d-flex justify-content-between align-items-center mb-2">
	<h5 class="mb-2">Tambah kategori</h5>
</div>
<form action="<?= site_url('admin/kategori/simpan')?>" method="post">
	<div class="mb-3">
		<label class="col-form-label">nama kategori:</label>
		<input type="text" class="form-control" name="nama_kategori" required>
	</div>
    <button type="submit" class="btn btn-primary">Simpan</button>
</form>
