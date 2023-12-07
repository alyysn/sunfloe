<div class="card-header d-flex justify-content-between align-items-center mb-2">
	<h5 class="mb-2">Tambah user</h5>
</div>
<form action="<?= site_url('admin/user/simpan')?>" method="post">
	<div class="mb-3">
		<label class="col-form-label">nama:</label>
		<input type="text" class="form-control" name="nama" autocomplete="nama" required>
	</div>
	<div class="mb-3">
		<label class="col-form-label">username:</label>
		<input type="text" class="form-control" name="username" autocomplete="username" required>
	</div>
	<div class="mb-3">
		<label class="col-form-label">password:</label>
		<input type="password" class="form-control" name="password" autocomplete="password" required>
	</div>
	<div class="mb-3">
		<label class="col-form-label">level:</label>
		<select name="level" class="form-control" autocomplete="level">
			<option value="admin" type="text">admin</option>
			<option value="pengguna">pengguna</option>
		</select>
	</div>
    <button type="submit" class="btn btn-primary">Simpan</button>
</form>
