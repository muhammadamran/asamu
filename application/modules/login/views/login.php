<!DOCTYPE html>
<html lang="en">
<head>
	<title>Silahkan Login</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="description" content="DashboardKit is made using Bootstrap 5 design framework. Download the free admin template & use it for your project.">
	<meta name="keywords" content="DashboardKit, Dashboard Kit, Dashboard UI Kit, Bootstrap 5, Admin Template, Admin Dashboard, CRM, CMS, Free Bootstrap Admin Template">
	<meta name="author" content="DashboardKit ">
	<!-- Favicon icon -->
	<link rel="icon" href="<?= base_url('assets/images/sericon1.png')?>" type="image/x-icon">
	<!-- font css -->
	<link rel="stylesheet" href="<?= base_url('assets/fonts/feather.css')?>">
	<link rel="stylesheet" href="<?= base_url('assets/fonts/fontawesome.css')?>">
	<link rel="stylesheet" href="<?= base_url('assets/fonts/material.css')?>">
	<!-- vendor css -->
	<link rel="stylesheet" href="<?= base_url('assets/css/style.css')?>" id="main-style-link">
    <link rel="stylesheet" href="<?= base_url('assets/plugins/toastr/toastr.min.css')?>">
</head>
<body>
	<!-- NOTIFIKASI TOAST -->
	<?php if ($this->session->flashdata('f_sigin')): ?>
	<script type="text/javascript">
		window.onload = function(){
			document.getElementById('clickButtonWarning').click();
		}
		function warning() {
			toastr.warning("Maaf username atau password anda salah, Silahkan Coba Lagi!","Informasi", {
				'closeButton': true,
				'newestOnTop': false,
				'progressBar': true,
				'positionClass': "toast-top-right"
			})
		}
	</script>
	<button type="button" id="clickButtonWarning" class="btn btn-sm btn-warning" onclick="warning()" style="display:none">warning</button>
	<?php endif; ?>

	<?php if ($this->session->flashdata('f_role')): ?>
	<script type="text/javascript">
		window.onload = function(){
			document.getElementById('clickButtonError').click();
		}
		function error() {
			toastr.error("Maaf username atau password anda salah, Silahkan Coba Lagi!","Informasi", {
				'closeButton': true,
				'newestOnTop': false,
				'progressBar': true,
				'positionClass': "toast-top-right"
			})
		}
	</script>
	<button type="button" id="clickButtonError" class="btn btn-sm btn-error" onclick="error()" style="display:none">error</button>
	<?php endif; ?>

	<?php if ($this->session->flashdata('n_role')): ?>
	<script type="text/javascript">
		window.onload = function(){
			document.getElementById('clickButtonn_role').click();
		}
		function n_role() {
			toastr.error("Maaf Anda tidak memiliki akses untuk masuk ke sistem ini!","Informasi", {
				'closeButton': true,
				'newestOnTop': false,
				'progressBar': true,
				'positionClass': "toast-top-right"
			})
		}
	</script>
	<button type="button" id="clickButtonn_role" class="btn btn-sm btn-danger" onclick="n_role()" style="display:none">n_role</button>
	<?php endif; ?>

	<?php if ($this->session->flashdata('n_session')): ?>
	<script type="text/javascript">
		window.onload = function(){
			document.getElementById('clickButtonn_session').click();
		}
		function n_session() {
			toastr.error("Silahkan mulai sesi anda terlebih dahulu, silahkan login!","Informasi", {
				'closeButton': true,
				'newestOnTop': false,
				'progressBar': true,
				'positionClass': "toast-top-right"
			})
		}
	</script>
	<button type="button" id="clickButtonn_session" class="btn btn-sm btn-danger" onclick="n_session()" style="display:none">n_session</button>
	<?php endif; ?>

	<?php if ($this->session->flashdata('n_unonaktif')): ?>
	<script type="text/javascript">
		window.onload = function(){
			document.getElementById('clickButtonn_unonaktif').click();
		}
		function n_unonaktif() {
			toastr.error("Maaf username anda saat ini Non-Aktif, silahkan hubungi Administrator!","Informasi", {
				'closeButton': true,
				'newestOnTop': false,
				'progressBar': true,
				'positionClass': "toast-top-right"
			})
		}
	</script>
	<button type="button" id="clickButtonn_unonaktif" class="btn btn-sm btn-danger" onclick="n_unonaktif()" style="display:none">n_unonaktif</button>
	<?php endif; ?>
	<!-- END NOTIFIKASI TOAST -->
	<!-- [ auth-signin ] start -->
	<div class="auth-wrapper">
		<div class="auth-content">
			<div class="card">
				<div class="row align-items-center text-center">
					<form action="<?= base_url('login/aksi_login'); ?>" method="POST">
						<div class="col-md-12">
							<div class="card-body">
								<img src="<?= base_url('assets/images/logo-dark-svg.png')?>" alt="" class="img-fluid mb-4">
								<h4 class="mb-3 f-w-400">Login</h4>
								<div class="input-group mb-3">
									<span class="input-group-text"><i data-feather="user"></i></span>
									<input type="text" class="form-control" name="username" placeholder="Username" required>
								</div>
								<div class="input-group mb-4">
									<span class="input-group-text"><i data-feather="lock"></i></span>
									<input type="password" id="myInput" class="form-control" name="password" placeholder="Password" required>
								</div>
								<div class="form-group text-left mt-2">
									<div class="form-check">
										<input type="checkbox" class="form-check-input" onclick="myFunction()" id="customCheck1">
										<label class="form-check-label" for="flexCheckChecked">
											Show Password
										</label>
									</div>
								</div>
								<div class="form-group text-left mt-2">
									<div class="form-check">
										<input class="form-check-input" type="checkbox" value="" id="flexCheckChecked1" checked>
										<label class="form-check-label" for="flexCheckChecked1">
											Remember me
										</label>
									</div>
								</div>
								<button class="btn btn-block btn-primary mb-4" name="submit">Login</button>
								<div style="text-align:center">
									<small><b>&copy; Copyright 2021 - <?= date('Y') ?> <br>Design By Bank Sampah</b><br>Version 1.0</small>
								</div>
								<hr>
								<p class="mb-0 text-muted">Buka Website <a href="<?= base_url('whome'); ?>" target="_blank" class="f-w-400">Klik disini</a></p>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<!-- [ auth-signin ] end -->
	<!-- Script Show Hidden Password -->
	<script>
	function myFunction() {
		var x = document.getElementById("myInput");
		if (x.type === "password") {
			x.type = "text";
		} else {
			x.type = "password";
		}
	}
	</script>
	<!-- End Script Show Hidden Password -->
	<!-- Required Js -->
	<script src="<?= base_url('assets/js/vendor-all.min.js')?>"></script>
	<script src="<?= base_url('assets/js/plugins/bootstrap.min.js')?>"></script>
	<script src="<?= base_url('assets/js/plugins/feather.min.js')?>"></script>
	<script src="<?= base_url('assets/js/pcoded.min.js')?>"></script>
	<script src="<?= base_url('assets/plugins/toastr/toastr.min.js')?>"></script>
</body>
</html>
