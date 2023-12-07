<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login</title>
	<link rel="shortcut icon" type="image/png" href="<?= site_url('assets/Modernize/src/')?>" />
	<link rel="stylesheet" href="<?= site_url('assets/Modernize/src/')?>/assets/css/styles.min.css" />
</head>

<body>
	<!--  Body Wrapper -->
	<div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
		data-sidebar-position="fixed" data-header-position="fixed">
		<div
			class="position-relative overflow-hidden radial-gradient min-vh-100 d-flex align-items-center justify-content-center">
			<div class="d-flex align-items-center justify-content-center w-100">
				<div class="row justify-content-center w-100">
					<div class="col-md-8 col-lg-6 col-xxl-3">
						<div class="card mb-0">
							<div class="card-body">
								<h4 class="row justify-content-center w-100">Login</h4>
								<form action="<?= base_url('auth/login')?>" method="post">
									<div id="hilang">
										<?= $this->session->flashdata('alert')?>
									</div>
									<div class="mb-3">
										<label class="form-label">Username</label>
										<input type="text" class="form-control" name="username">
									</div>
									<div class="mb-4">
										<label class="form-label">Password</label>
										<input type="password" class="form-control" name="password">
									</div>
									<div class="mb-3">
										<button class="btn btn-primary w-100 py-8 fs-4 mb-4 rounded-2"
											type="submit">login</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script src="<?= site_url('assets/Modernize/src/')?>/assets/libs/jquery/dist/jquery.min.js"></script>
	<script src="<?= site_url('assets/Modernize/src/')?>/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js">
	</script>
</body>

</html>
