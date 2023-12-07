<div id="hilang">
	<?= $this->session->flashdata('alert')?>
</div>
<a href="<?=base_url('admin/user/tambah')?>" class="btn btn-primary mb-2">tambah user</a>
<table class="table text-nowrap mb-0 align-middle" id="mmm">
	<tbody>
		<tr>
			<th>#</th>
			<th>Username</th>
			<th>name</th>
			<th>level</th>
			<th>Action</th>
		</tr>
		<tr>
			<?php $no=1; foreach ($userr as $ya) { ?>
			<td><?=$no?></td>
			<td><?= $ya['username'] ?></td>
			<td><?= $ya['nama'] ?></td>
			<td><?= $ya['level'] ?></div>
			</td>
			<td>
				<button type="button" class="btn btn-light md2" data-bs-toggle="modal"
					data-bs-target="#edit<?= $ya['user_id']?>">
					<i class='ti ti-edit'></i>
				</button>

				<div class="modal fade" id="edit<?= $ya['user_id']?>" tabindex="-1" aria-labelledby="exampleModalLabel"
					aria-hidden="true">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title" id="exampleModalLabel">edit user</h5>
								<button type="button" class="btn-close" data-bs-dismiss="modal"
									aria-label="Close"></button>
							</div>
							<div class="modal-body">
								<form action="<?= base_url('admin/user/update')?>" method="post">
									<input type="hidden" name="user_id" value="<?= $ya['user_id']?>">
									<div class="mb-3">
										<label class="form-label">Nama</label>
										<input type="text" class="form-control" name="nama" value="<?= $ya['nama'] ?>">
									</div>
									<div class="mb-3">
										<label class="form-label">Username</label>
										<input type="number" class="form-control" name="username"
											value="<?= $ya['username'] ?>" readonly>
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
					href="<?= base_url('admin/user/delete/'.$ya['user_id'])?>">
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
