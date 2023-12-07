<div id="hilang">
	<?= $this->session->flashdata('alert')?>
</div>
<form action="<?= base_url('admin/konfigurasi/update')?>" method="post">
	<div class="mb-3">
		<label class="form-label">judul</label>
		<input type="text" class="form-control" name="judul" value="<?= $konfig->judul_website; ?>">
	</div>
	<div class="mb-3">
		<label class="form-label">profile</label>
		<input type="text" class="form-control" name="profil_website" value="<?= $konfig->profil_website; ?>">
	</div>
	<div class="mb-3">
		<label class="form-label">Facebook</label>
		<input type="text" class="form-control" name="facebook" value="<?= $konfig->facebook; ?>">
	</div>
	<div class="mb-3">
		<label class="form-label">instagram</label>
		<input type="text" class="form-control" name="instagram" value="<?= $konfig->instagram; ?>">
	</div>
	<div class="mb-3">
		<label class="form-label">Email</label>
		<input type="text" class="form-control" name="email" value="<?= $konfig->email; ?>">
	</div>
	<div class="mb-3">
		<label class="form-label">Alamat</label>
		<input type="text" class="form-control" name="alamat" value="<?= $konfig->alamat; ?>">
	</div>
	<div class="mb-3">
		<label class="form-label">No Whatsapp</label>
		<input type="text" class="form-control" name="no_wa" value="<?= $konfig->no_wa; ?>">
	</div>
	</div>
	<div class="modal-footer">
		<button type="submit" class="btn btn-primary mb-3">simpan</button>
	</div>
</form>
