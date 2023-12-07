<div id="hilang">
	<?= $this->session->flashdata('alert')?>
</div>
<h5 class="mb-2">input foto</h5>
<form action="<?= site_url('admin/caraousel/simpan')?>" method="post" enctype="multipart/form-data">
	<div class="mb-3">
		<label class="col-form-label">judul</label>
		<input type="text" class="form-control" name="judul" placeholder="judul foto">
	</div>
	<div class="input-group mb-3">
		<input type="file" class="form-control" name="foto">
		<label class="input-group-text">pilih foto dengan ukuran (1:3)</label>
	</div>
	<button type="submit" class="btn btn-primary">Simpan</button>
</form>

<?php foreach ($caraousel as $ya) {?>
<div class="col-md-12 mt-3">
	<img src="<?= base_url('assets/upload/caraousel/'.$ya['foto'])?>" class="card-img-top">
	<div class="card-body">
		<h5 class="card-title"><?= $ya['judul'] ?> </h5>
		<a onClick="return confirm ('Apakah anda yakin?')" href="<?= base_url('admin/caraousel/delete/'.$ya['foto'])?>">
			<button class="btn btn-dark">
				<i class="ti ti-trash"></i>
			</button>
		</a>
	</div>
</div>
<?php } ?>
