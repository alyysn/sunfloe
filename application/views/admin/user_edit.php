<div class="card-header d-flex justify-content-between align-items-center">
	<h5 class="mb-0">edit user</h5>
</div>
<div class="card-body">
	<form action="<?= base_url('admin/user/update_data')?>" method="post">
		<input type="hidden" name="id" value="<?=$ya['user_id']?>">
		<div class="mb-3">
			<label class="form-label">username</label>
			<input type="text" class="form-control" name="username" value="<?= $ya['username']?>" readonly>
		</div>
		<div class="mb-3">
			<label class="form-label">nama</label>
			<input type="text" class="form-control" name="nama" value="<?= $ya['nama']?>">
		</div>
		<div class="mb-3">
			<label class="form-label">Level</label>
			<select class="form-select" name="level">
				<option value="User" <?php if($ya['level']=='admin'){echo "selected";} ?>>Admin</option>
				<option value="Admin" <?php if($ya['level']=='pengguna'){echo "selected";}?>>Pengguna</option>
			</select>
		</div>
		<button type="submit" class="btn btn-primary" name="update">update</button>
</div>
</form>
</div>
