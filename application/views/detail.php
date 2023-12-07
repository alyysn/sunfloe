<div class="container-fluid py-4 page-header">
	<div class="container text-center py-5">
		<h1 class="display-3 text-white mb-4 animated slideInDown"><?= $konten->nama_kategori ?></h1>
		<nav aria-label="breadcrumb animated slideInDown">
			<ol class="breadcrumb justify-content-center mb-0">
				<li class="breadcrumb-item active" aria-current="page"><?=$konten->judul?></li>
			</ol>
		</nav>
	</div>
</div>
<div class="container-fluid py-5">
	<div class="container py-5">
		<div class="mb-4">
			<h3 href="#" class="h1 display-5"><?=  $konten->judul ?></h3>
		</div>
		<div class="row g-4">
			<div class="col-lg-12">
				<div class="position-relative rounded overflow-hidden mb-3">
					<img src="<?= base_url('assets/upload/konten/'.$konten->foto)?>"
						class="img-zoomin img-fluid rounded w-100" alt="">
					<div class="position-absolute text-white px-4 py-2 bg-primary rounded"
						style="top: 20px; right: 20px;">
						<?= $konten->nama_kategori ?>
					</div>
				</div>
				<div class="d-flex center-content-between mx-5">
					<i class="fa fa-clock text-dark link-hover mx-2"><?=$konten-> tanggal;?></i>
					<i class="fa fa-user text-dark link-hover mx-2"></i><?= $konten-> username;?></a>
				</div>
				<p class="my-4"><?=  $konten->keterangan ?>
				</p>
				<div>
					<a href="<?= base_url('beranda')?>" class="btn btn-outline-primary">kembali</a>
				</div>
			</div>
			<!-- <div class="col-lg-4 bg-light">
				<div class="row g-8">
					<div class="col-12 ">
						<h6 class="section-title bg-white text-start text-primary pe-3 mb-2 mt-">tags</h6>
						<div class="tags-block">
							<?php foreach ($kategori as $oo) { ?>
							<a href=" <?= base_url('beranda/kategori/'.$oo['kategori_id']) ?>"
								class="btn btn-outline-secondary rounded-pill py-2 mt-3 px-3"><?= $oo['nama_kategori'] ?></a>
							<?php } ?>
						</div>

						<h6 class="mt-5 mb-4 section-title bg-white text-start text-primary pe-3">Recent Post</h6>
						<?php foreach ($recentPost as $yoo) { ?>
						<div class="row g-2 align-items-center features-item">
							<div class="col-2">
								<div class="rounded position-relative">
									<div class="overflow-hidden rounded">
										<img src="<?= base_url('assets/upload/konten/'.$yoo['foto'])?>"
											class="img-zoomin img-fluid rounded-circle w-100" alt="">
									</div>
								</div>
							</div>
							<div class="col-8">
								<div class="features-content d-flex flex-column">
								</div>
								<div class="media-body">
									<h6 class="mt-0"><a
											href="<?= base_url('beranda/artikel/'.$yoo['slug'])?>"><?= $yoo['judul'] ?></a>
									</h6>
									<div class="blog-meta">
										<ul class="list-inline">
											<li><?= date('d', strtotime($yoo['tanggal']))?>days ago</li>
											<li><span>by</span> <a
													href="<?php $konfig->instagram ?>"><?= $yoo['username'] ?></a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<?php } ?>

						<h6 class="mt-5 mb-4 section-title bg-white text-start text-primary pe-3">leave a comment</h6>
						<div id="hilang">
							<?= $this->session->flashdata('alert')?>
						</div>
						<div class="col-12">
							<form action="<?= base_url('beranda/detail')?>" method="post">
								<div class="row g-3">
									<div class="col-md-6">
										<div class="form-floating">
											<input type="text" class="form-control" id="name" placeholder="Your Name"
												name="nama">
											<label for="name">Your Name</label>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-floating">
											<input type="email" class="form-control" id="email" placeholder="Your Email"
												name="email">
											<label for="email">Your Email</label>
										</div>
									</div>
									<div class="col-12">
										<div class="form-floating">
											<textarea class="form-control" placeholder="Leave a message here"
												id="message" style="height: 250px" name="isi_saran"></textarea>
											<label for="message">Message</label>
										</div>
									</div>
									<div class="col-12">
										<button class="btn btn-secondary rounded-pill py-1 px-3" type="submit">Send
											Message</button>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div> -->
		</div>
	</div>
</div>
