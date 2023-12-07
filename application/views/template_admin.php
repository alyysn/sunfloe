<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?= $judul_halaman ?></title>
	<link rel="shortcut icon" type="image/png"
		href="<?= site_url('assets/Modernize/src/') ?>/assets/images/logos/favicon.png" />
	<link rel="stylesheet" href="<?= site_url('assets/Modernize/src/') ?>/assets/css/styles.min.css" />
	<script src="https://cdn.tiny.cloud/1/z0fevln7qrpoufyy6auvdn7pxqbvqyo1m2i1cf4x5e08g34c/tinymce/6/tinymce.min.js"
		referrerpolicy="origin"></script>
	<script src="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css"></script>
	<script src="https://cdn.tiny.cloud/1/aq37vou6o6fl7r2lfo92721t18z6173r03hevnh6qpu52i0f/tinymce/6/tinymce.min.js"
		referrerpolicy="origin"></script>

	<link rel="stylesheet" href="path/to/owl.carousel.min.css">
	<link rel="stylesheet" href="path/to/owl.theme.default.min.css">
	<script src="path/to/jquery.min.js"></script>
	<script src="path/to/owl.carousel.min.js"></script>

	<!-- Place the following <script> and <textarea> tags your HTML's <body> -->
	<script>
		tinymce.init({
			selector: 'textarea',
			plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount',
			toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table | align lineheight | numlist bullist indent outdent | emoticons charmap | removeformat',
		});

	</script>

</head>

<body>
	<!--  Body Wrapper -->
	<div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
		data-sidebar-position="fixed" data-header-position="fixed">
		<!-- Sidebar Start -->
		<aside class="left-sidebar">
			<!-- Sidebar scroll-->
			<div>
				<div class="brand-logo d-flex align-items-center justify-content-between">
					<span>
						<a href="<?= base_url(); ?>">
							<h4 class="app-brand-text demo menu-text fw-bolder">Admin Ku</h4>
						</a>
					</span>
					<div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
						<i class="ti ti-x fs-8"></i>
					</div>
				</div>
				<!-- Sidebar navigation-->
				<nav class="sidebar-nav scroll-sidebar" data-simplebar="">
					<ul id="sidebarnav">
						<li class="sidebar-item">
							<a class="sidebar-link" href="<?= site_url('admin/beranda') ?>" aria-expanded="false">
								<span>
									<i class="ti ti-layout-dashboard"></i>
								</span>
								<span class="hide-menu">Dashboard</span>
							</a>
						</li>
						<li class="sidebar-item">
							<?php if ($this->session->userdata('level')=='admin'){?>
							<a class="sidebar-link" href="<?= site_url('admin/caraousel') ?>" aria-expanded="false">
								<span>
									<i class="ti ti-article"></i>
								</span>
								<span class="hide-menu">carousel</span>
							</a>
						</li>
						<?php } ?>
						<?php if ($this->session->userdata('level')=='admin'){?>
						<li class="sidebar-item">
							<a class="sidebar-link" href="<?= site_url('admin/kategori') ?>" aria-expanded="false">
								<span>
									<i class="ti ti-alert-circle"></i>
								</span>
								<span class="hide-menu">kategori</span>
							</a>
						</li>
						<?php } ?>
						<?php if ($this->session->userdata('level')=='admin'){?>
						<li class="sidebar-item">
							<a class="sidebar-link" href="<?= site_url('admin/konfigurasi') ?>" aria-expanded="false">
								<span>
									<i class="ti ti-cards"></i>
								</span>
								<span class="hide-menu">konfigurasi</span>
							</a>
						</li>
						<?php } ?>
						<li class="sidebar-item">
							<a class="sidebar-link" href="<?= site_url('admin/konten') ?>" aria-expanded="false">
								<span>
									<i class="ti ti-file-description"></i>
								</span>
								<span class="hide-menu">konten</span>
							</a>
						</li>
						<li class="sidebar-item">
							<a class="sidebar-link" href="<?= base_url('admin/galery') ?>">
								<span>
									<i class="ti ti-file"></i>
								</span>
								<span class="hide-menu">galeri</span>
							</a>
						</li><?php if ($this->session->userdata('level')=='admin'){?>
						<li class="sidebar-item">
							<a class="sidebar-link" href="<?= site_url('admin/saran') ?>" aria-expanded="false">
								<span>
									<i class="ti ti-image"></i>
								</span>
								<span class="hide-menu">saran</span>
							</a>
						</li>
						<li class="sidebar-item">
							<a class="sidebar-link" href="<?= site_url('admin/user') ?>" aria-expanded="false">
								<span>
									<i class="ti ti-user"></i>
								</span>
								<span class="hide-menu">user</span>
							</a>
						</li>
						<?php } ?>

				</nav>
				<!-- End Sidebar navigation -->
			</div>
			<!-- End Sidebar scroll-->
		</aside>
		<!--  Sidebar End -->
		<!--  Main wrapper -->
		<div class="body-wrapper">
			<!--  Header Start -->
			<header class="app-header">
				<nav class="navbar navbar-expand-lg navbar-light">
					<ul class="navbar-nav">
						<li class="nav-item d-block d-xl-none">
							<a class="nav-link sidebartoggler nav-icon-hover" id="headerCollapse"
								href="javascript:void(0)">
								<i class="ti ti-menu-2"></i>
							</a>
						</li>
					</ul>
					<div class="navbar-collapse justify-content-end px-0" id="navbarNav">
						<ul class="navbar-nav flex-row ms-auto align-items-center justify-content-end">
							<li class="nav-item dropdown">
								<a class="nav-link nav-icon-hover" href="javascript:void(0)" id="drop2"
									data-bs-toggle="dropdown" aria-expanded="false">
									<img src="<?= site_url('assets/Modernize/src/') ?>/assets/images/profile/user-1.jpg"
										alt="" width="35" height="35" class="rounded-circle">
								</a>
								<div class="dropdown-menu dropdown-menu-end dropdown-menu-animate-up"
									aria-labelledby="drop2">
									<div class="message-body">
										<a href="javascript:void(0)"
											class="d-flex align-items-center gap-2 dropdown-item">
											<i class="ti ti-user fs-6"></i>
											<p class="mb-0 fs-3"><?= $this->session->userdata('nama');?></p>
										</a>
										<a href="<?= base_url('auth/logout')?>"
											class="btn btn-outline-primary mx-3 mt-2 d-block">Logout</a>
										<?php if ($this->session->userdata('level')=='admin'){?>
										<a href="<?= base_url('admin/RecentLogin')?>"
											class="btn btn-outline-primary mx-3 mt-2 d-block">riwayat login</a>
										<?php } ?>
									</div>
								</div>
							</li>
						</ul>
					</div>
				</nav>
			</header>
			<!--  Header End -->
			<div class="container-fluid">
				<!--  Row 1 -->
				<div class="col-lg-12">
					<div class="row">
						<div class="col-lg-12">
							<!-- Yearly Breakup -->
							<div class="card overflow-hidden">
								<div class="card-body p-4">
									<?= $contents; ?>
								</div>
							</div>
						</div>
						<div class="py-6 px-6 text-center">
							<p class="mb-0 fs-4">Design and Developed by <a target="_blank"
									class="pe-1 text-primary text-decoration-underline">aliyaa</a></p>
						</div>
					</div>
				</div>
			</div>
			<script src="<?= site_url('assets/Modernize/src/') ?>/assets/libs/jquery/dist/jquery.min.js"></script>
			<script
				src="<?= site_url('assets/Modernize/src/') ?>/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js">
			</script>
			<script src="<?= site_url('assets/Modernize/src/') ?>/assets/js/sidebarmenu.js"></script>
			<script src="<?= site_url('assets/Modernize/src/') ?>/assets/js/app.min.js"></script>
			<script src="<?= site_url('assets/Modernize/src/') ?>/assets/libs/apexcharts/dist/apexcharts.min.js">
			</script>
			<script src="<?= site_url('assets/Modernize/src/') ?>/assets/libs/simplebar/dist/simplebar.js"></script>
			<script src="<?= site_url('assets/Modernize/src/') ?>/assets/js/dashboard.js"></script>
			<script>
				$('#hilang').delay('slow').slideDown('slow').delay(1000).slideUp(600);

			</script>
			<script>
				tinymce.init({
					selector: 'textarea',
					plugins: 'ai tinycomments mentions anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount checklist mediaembed casechange export formatpainter pageembed permanentpen footnotes advtemplate advtable advcode editimage tableofcontents mergetags powerpaste tinymcespellchecker autocorrect a11ychecker typography inlinecss',
					toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table mergetags | align lineheight | tinycomments | checklist numlist bullist indent outdent | emoticons charmap | removeformat',
					tinycomments_mode: 'embedded',
					tinycomments_author: 'Author name',
					mergetags_list: [{
							value: 'First.Name',
							title: 'First Name'
						},
						{
							value: 'Email',
							title: 'Email'
						},
					],
					ai_request: (request, respondWith) => respondWith.string(() => Promise.reject(
						"See docs to implement AI Assistant"))
				});

			</script>
			<script>
				new DataTable('#mmm');

			</script>
			<scrip src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></scrip>
			<script src="https://code.jquery.com/jquery-3.7.0.js"></script>
			<script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js"></script>

</body>

</html>
