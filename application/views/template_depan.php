<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title><?= $judul; ?></title>
	<meta content="width=device-width, initial-scale=1.0" name="viewport">
	<meta content="" name="keywords">
	<meta content="" name="description">

	<!-- Favicon -->
	<link href="img/favicon.ico" rel="icon">

	<!-- Google Web Fonts -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link
		href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:wght@700&family=Open+Sans:wght@400;500;600&display=swap"
		rel="stylesheet">

	<!-- Icon Font Stylesheet -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

	<!-- Libraries Stylesheet -->
	<link href="<?= base_url('assets/depan/')?>lib/animate/animate.min.css" rel="stylesheet">
	<link href="<?= base_url('assets/depan/')?>lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
	<link href="<?= base_url('assets/depan/')?>lib/lightbox/css/lightbox.min.css" rel="stylesheet">

	<!-- Customized Bootstrap Stylesheet -->
	<link href="<?= base_url('assets/depan/')?>css/bootstrap.min.css" rel="stylesheet">

	<!-- Template Stylesheet -->
	<link href="<?= base_url('assets/depan/')?>css/style.css" rel="stylesheet">
</head>

<body>
	<!-- Spinner Start -->
	<div id="spinner"
		class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
		<div class="spinner-border text-primary" role="status" style="width: 3rem; height: 3rem;"></div>
	</div>
	<!-- Spinner End -->

	<!-- Navbar Start -->
	<nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top px-4 px-lg-5">
		<a href="<?= base_url() ?>" class="navbar-brand d-flex align-items-center">
			<h3 class="m-0"><?= $konfig->judul_website; ?></h3>
		</a>
		<button type="button" class="navbar-toggler me-0" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarCollapse">
			<div class="navbar-nav ms-auto p-4 p-lg-0">
				<a href="<?= base_url() ?>" class="nav-item nav-link">Home</a>
				<div class="nav-item dropdown">
					<ul href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">content</ul>
					<div class="dropdown-menu bg-light mb-2">
						<?php foreach ($kategori as $oo) { ?>
						<li><a href=" <?= base_url('beranda/kategori/'.$oo['kategori_id']) ?>"
								class=""><?= $oo['nama_kategori'] ?></a>
						</li>
						<?php } ?>
					</div>
				</div>
				<a href="<?= base_url('beranda/galery/') ?>" class="nav-item nav-link">galeri</a>
				<a href="<?= base_url('beranda/saran/') ?>" class="nav-item nav-link">contact</a>
				<a href="<?= base_url('auth')?>" class="nav-item nav-link text-secondary">login</a>
			</div>
			<div class="border-start ps-4 d-none d-lg-block">
				<button type="button" class="btn btn-sm p-0"><i class="fa fa-search"></i></button>
			</div>
		</div>
	</nav>
	<!-- Navbar End -->


	<!-- Carousel Start -->
	<?= $contents; ?>


	<!-- Footer Start -->
	<div class="container-fluid bg-dark footer mt-5 py-5 wow fadeIn" data-wow-delay="0.1s">
		<div class="container py-5">
			<div class="row g-12">
				<div class="col-lg-4 col-md-6">
					<h5 class="text-white mb-3"><?= $konfig->judul_website; ?></h5>
					<p class="mb-2"><?= $konfig->profil_website; ?></p>
					<p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i><?= $konfig->alamat; ?></p>
					<p class="mb-2"><i class="fa fa-envelope me-3"></i><?= $konfig->email; ?></p>
				</div>
				<div class="col-lg-4 col-md-6">
					<h5 class="text-white mb-4">Quick Links</h5>
					<a class="btn btn-link" href="<?= base_url() ?>">Home</a>
					<?php foreach ($kategori as $oo) { ?>
					<a href=" <?= base_url('beranda/kategori/'.$oo['kategori_id']) ?>"
						class="btn btn-link"><?= $oo['nama_kategori'] ?></a>
					<?php } ?>
				</div>

				<div class="col-lg-4 col-md-6">
					<h5 class="text-white mb-4">Social Media</h5>
					<div class="d-flex pt-3 mb-3">
						<a class="btn btn-square btn-secondary rounded-circle me-2"
							href="https://x.com/potatochikenn?t=u_8a7H_0wo5b98-6GVCQoA&s=08"><i
								class="fab fa-twitter"></i></a>
						<a class="btn btn-square btn-secondary rounded-circle me-2" href="<?= $konfig->instagram; ?>"><i
								class="fab fa-instagram"></i></a>
						<a class="btn btn-square btn-secondary rounded-circle me-2" href="<?= $konfig->no_wa; ?>"><i
								class="fab fa-whatsapp"></i></a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Footer End -->


	<!-- Copyright Start -->
	<div class="container-fluid bg-secondary text-body copyright py-4">
		<div class="container">
			<div class="row">
				<div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
					&copy; <a class="fw-semi-bold" href="#">aliyaa</a>, All Right Reserved.
				</div>
				<div class="col-md-6 text-center text-md-end">
					<!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
					Designed By <a class="fw-semi-bold" href="https://htmlcodex.com">HTML Codex</a>
				</div>
			</div>
		</div>
	</div>
	<!-- Copyright End -->


	<!-- Back to Top -->
	<a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i
			class="bi bi-arrow-up"></i></a>


	<!-- JavaScript Libraries -->
	<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
	<script src="<?= base_url('assets/depan/')?>lib/wow/wow.min.js"></script>
	<script src="<?= base_url('assets/depan/')?>lib/easing/easing.min.js"></script>
	<script src="<?= base_url('assets/depan/')?>lib/waypoints/waypoints.min.js"></script>
	<script src="<?= base_url('assets/depan/')?>lib/owlcarousel/owl.carousel.min.js"></script>
	<script src="<?= base_url('assets/depan/')?>lib/counterup/counterup.min.js"></script>
	<script src="<?= base_url('assets/depan/')?>lib/parallax/parallax.min.js"></script>
	<script src="<?= base_url('assets/depan/')?>lib/lightbox/js/lightbox.min.js"></script>

	<script>
		$('#hilang').delay('slow').slideDown('slow').delay(1000).slideUp(600);

	</script>

	<!-- Template Javascript -->
	<script src="<?= base_url('assets/depan/')?>js/main.js"></script>
</body>

</html>
