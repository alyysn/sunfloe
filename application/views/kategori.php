<div class="container-fluid py-4 page-header mb-5">
	<div class="container text-center py-5">
		<h1 class="display-3 text-white mb-4 animated slideInDown"><?= $nama_kategori ?></h1>
	</div>
</div>
<section class="site-section" id="blog-section">
	<div class="container">
		<div class="row g-5">
			<div class="col-lg-8 mb-t mb-lg-0 wow fadeIn" data-wow-delay="0.5s">
				<?php foreach ($konten as $yoo) { ?>
				<div class="row g-4 align-items-center">
					<div class="col-sm-4">
						<img class="img-fluid rounded" src="<?= base_url('assets/upload/konten/'.$yoo['foto'])?>"
							alt="">
					</div>
					<div class="col-sm-8">
						<h2 class="text-dark mb-3 mt-5"><?= $yoo['judul'] ?></h2>
						<div class="meta mb-4"><?= $yoo['nama'] ?> <span class="mx-2">&bullet;</span>
							<?= $yoo['tanggal'] ?><span class="mx-2">&bullet;</span> <a
								href="<?= base_url('beranda/kategori/'.$yoo['kategori_id']) ?>"><?= $yoo['nama_kategori'] ?></a>
						</div>
						<p><?php $this->load->helper('text');
						$string = $yoo['keterangan'];
						$string = word_limiter($string,24);
						echo $string; ?></p>

						<p><a href="<?= base_url('beranda/artikel/'.$yoo['slug'])?>">Continue Reading...</a></p>
					</div>
				</div>
				<?php } ?>
			</div>
			<div class="col-lg-4 col-12 mx-auto">
				<form action="<?= base_url('beranda')?>" method="post">
					<h6 class="section-title bg-white text-start text-primary pe-3">search</h6>
					<div class="input-group mb-4 ">
						<input type="text" class="form-control" placeholder="search keyword" autocomplete="off"
							autofocus name="keyword">
						<input class="btn btn-secondary" type="submit" name="submit"></input>
					</div>
				</form>

				<h6 class="section-title bg-white text-start text-primary pe-3 mb-2">tags</h6>
				<div class="tags-block">
					<?php foreach ($kategori as $oo) { ?>
					<a href=" <?= base_url('beranda/kategori/'.$oo['kategori_id']) ?>"
						class="btn btn-outline-secondary rounded-pill py-2 mt-3 px-3"><?= $oo['nama_kategori'] ?></a>
					<?php } ?>

				</div>

				<h6 class="mt-5 mb-3 section-title bg-white text-start text-primary pe-3">Recent Post</h6>
				<?php foreach ($recentPost as $yoo) { ?>
				<div class="row g-2 align-items-center features-item">
					<div class="col-2">
						<div class="rounded-circle position-relative">
							<div class="overflow-hidden rounded-circle">
								<img src="<?= base_url('assets/upload/konten/'.$yoo['foto'])?>"
									class="img-zoomin img-fluid rounded-circle w-100" alt="">
							</div>

						</div>
					</div>
					<div class="col-8">
						<div class="features-content d-flex flex-column mb-2">
							<a href="<?= base_url('beranda/artikel/'.$yoo['slug'])?>" class="h6">
								<?= $yoo['judul'] ?>
							</a>
							<small class="text-body d-block mb-3"><i
									class="fas fa-calendar-alt me-1"></i><?= date('d F Y', strtotime($yoo['tanggal']))?></small>
						</div>
					</div>
				</div>
				<?php } ?>
			</div>
		</div>
	</div>
</section>


