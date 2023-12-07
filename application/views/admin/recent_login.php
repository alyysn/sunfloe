
<table class="table text-nowrap mb-0 align-middle">
	<tbody>
		<tr>
			<th>#</th>
			<th>Username</th>
			<th>jam</th>
			<th>tanggal</th>
			<th>status</th>
		</tr>
		<tr>
			<?php $no=1; foreach ($recentLog as $ya) { ?>
			<td><?=$no?></td>
			<td><?= $ya['username'] ?></td>
			<td><?= $ya['waktu'] ?></td>
			<td><?= $ya['tanggal'] ?></td>
            <td><?= $ya['status'] ?></td>
		</tr>
		<?php $no++; } ?>
	</tbody>
</table>
</div>
