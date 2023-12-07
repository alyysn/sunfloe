<div id="hilang">
	<?= $this->session->flashdata('alert')?>
</div>
<a href="<?=base_url('admin/kategori/tambah')?>" class="btn btn-primary mb-2">tambah kategori</a>
<table class="table text-nowrap mb-0 align-middle">
	<tbody>
		<tr>
			<th>#</th>
			<th>name</th>
			<th>Action</th>
		</tr>
		<tr>
			<?php $no=1; foreach ($kategori as $ya) { ?>
			<td><?=$no?></td>
			<td><?= $ya['nama_kategori'] ?></td>
			</td>
			<td>
				<button type="button" class="btn btn-light md2" data-bs-toggle="modal"
					data-bs-target="#edit<?= $ya['kategori_id']?>">
					<i class='ti ti-edit'></i>
				</button>

				<div class="modal fade" id="edit<?= $ya['kategori_id']?>" tabindex="-1"
					aria-labelledby="exampleModalLabel" aria-hidden="true">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title" id="exampleModalLabel">edit kategori</h5>
								<button type="button" class="btn-close" data-bs-dismiss="modal"
									aria-label="Close"></button>
							</div>
							<div class="modal-body">
								<form action="<?= base_url('admin/kategori/update')?>" method="post">
									<input type="hidden" name="kategori_id" value="<?= $ya['kategori_id']?>">
									<div class="mb-3">
										<label class="form-label">Nama kategori</label>
										<input type="text" class="form-control" name="nama_kategori"
											value="<?= $ya['nama_kategori'] ?>">
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
				<a onClick="return confirm ('Apakah anda yakin?')"
					href="<?= base_url('admin/kategori/delete/'.$ya['kategori_id'])?>">
					<button class="btn btn-dark">
						<i class="ti ti-trash"></i>
					</button>
				</a>
			</td>
		</tr>
		<?php $no++; } ?>
	</tbody>
</table>
</div>
