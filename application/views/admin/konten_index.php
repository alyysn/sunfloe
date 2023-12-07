<div id="hilang">
	<?= $this->session->flashdata('alert')?>
</div>
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary mb-2" data-bs-toggle="modal" data-bs-target="#exampleModal">
	Tambah konten
</button>
<a href="" class="btn-btn danger"></a>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Tambah konten</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
				<form action="<?= base_url('admin/konten/simpan')?>" method="post" enctype="multipart/form-data">
					<div class="mb-3">
						<label class="form-label">judul</label>
						<input type="text" class="form-control" name="judul">
					</div>
					<div class="mb-3">
						<label class="form-label">Nama Kategori</label>
						<select name="kategori_id" class="form-control">
							<?php foreach ($kategori as $ya) { ?>
							<option value="<?= $ya['kategori_id']?>"><?= $ya['nama_kategori'] ?></option>
							<?php } ?>
						</select>
					</div>
					<div class="mb-3">
						<label class="form-label">keterangan</label>
						<textarea type="text" class="form-control" name="keterangan"></textarea>
					</div>
					<div class="mb-3">
						<label class="form-label">foto</label>
						<input type="file" class="form-control" name="foto" accept="image/png, image/jpeg">
					</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
				<button type="submit" class="btn btn-primary">simpan</button>
			</div>
			</form>
		</div>
	</div>
</div>
<table class="table text-nowrap mb-0 align-middle">
	<tbody>
		<tr>
			<th>#</th>
			<th>judul</th>
			<th>kategori</th>
			<th>tanggal</th>
			<th>creator</th>
			<th>foto</th>
			<th>Action</th>
		</tr>
		<tr>
			<?php $no=1; foreach ($konten as $ya) { ?>
			<td><?=$no?></td>
			<td><?= $ya['judul'] ?></td>
			<td><?= $ya['nama_kategori'] ?></td>
			<td><?= $ya['tanggal'] ?></td>
			<td><?= $ya['username'] ?></td>
			<td>
				<a href="<?= base_url('assets/upload/konten/'.$ya['foto'])?>" target="_blank">
					<i class='ti ti-search'>lihat foto</i>
				</a>
			</td>
			<td><a onClick="return confirm ('Apakah anda yakin?')"
					href="<?= base_url('admin/konten/delete/'.$ya['foto'])?>">
					<button class="btn btn-dark">
						<i class="ti ti-trash"></i>
					</button>
				</a>
				<!-- Button trigger modal -->
				<button type="button" class="btn btn-light md2 " data-bs-toggle="modal"
					data-bs-target="#konten<?=$no; ?>">
					<i class="ti ti-edit"></i>
				</button>
				<a href="" class="btn-btn danger"></a>


				<!-- Modal -->
				<div class="modal fade" id="konten<?=$no; ?>" tabindex="-1" aria-labelledby="exampleModalLabel"
					aria-hidden="true">
					<div class="modal-dialog modal-lg">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title" id="exampleModalLabel"><?= $ya['judul'] ?></h5>
								<button type="button" class="btn-close" data-bs-dismiss="modal"
									aria-label="Close"></button>
							</div>
							<div class="modal-body">
								<form action="<?= base_url('admin/konten/update')?>" method="post"
									enctype="multipart/form-data">
									<input type="hidden" value="<?= $ya['foto'] ?>" name="nama_foto">
									<div class="mb-3">
										<label class="form-label">judul</label>
										<input type="text" class="form-control" name="judul" value="<?= $ya['judul'] ?>">
									</div>
									<div class="mb-3">
										<label class="form-label">Nama Kategori</label>
										<select name="kategori_id" class="form-control">
											<?php foreach ($kategori as $ok) { ?>
											<option <?php if($ok['kategori_id']==$ya['kategori_id']){
												echo"selected";} ?> value="<?= $ok['kategori_id']?>"><?= $ok['nama_kategori'] ?>
											</option>
											<?php } ?>
										</select>
									</div>
									<div class="mb-3">
										<label class="form-label">keterangan</label>
										<textarea type="text" class="form-control" name="keterangan"><?= $ya['keterangan'] ?></textarea>
									</div>
									<div class="mb-3">
										<label class="form-label">foto</label>
										<input type="file" class="form-control" name="foto"
											accept="image/png, image/jpeg">
									</div>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
								<button type="submit" class="btn btn-primary">simpan</button>
							</div>
							</form>
						</div>
					</div>
				</div>
			</td>


		</tr>
		<?php $no++; } ?>
	</tbody>
</table>
</div>
