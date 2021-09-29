<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="description" content="DashboardKit is made using Bootstrap 5 design framework. Download the free admin template & use it for your project.">
	<meta name="keywords" content="DashboardKit, Dashboard Kit, Dashboard UI Kit, Bootstrap 5, Admin Template, Admin Dashboard, CRM, CMS, Free Bootstrap Admin Template">
	<meta name="author" content="DashboardKit ">
	<link rel="shortcut icon" href="<?= base_url('modes/images/asamu/icon/' . $icon); ?>" type="">
	<title>CMS | <?= $title; ?></title>
	<link rel="stylesheet" href="<?= base_url('assets/fonts/feather.css') ?>">
	<link rel="stylesheet" href="<?= base_url('assets/fonts/fontawesome.css') ?>">
	<link rel="stylesheet" href="<?= base_url('assets/fonts/material.css') ?>">
	<link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>" id="main-style-link">
	<link rel="stylesheet" href="<?= base_url('assets/plugins/toastr/toastr.min.css') ?>">
</head>
<style type="text/css">
	.star {
		animation: star 10s ease-out infinite;
	}

	.wars {
		animation: wars 10s ease-out infinite;
	}

	.byline span {
		animation: spin-letters 10s linear infinite;
	}

	.byline {
		animation: move-byline 10s linear infinite;
	}

	@keyframes star {
		0% {
			opacity: 0;
			transform: scale(1.5) translateY(-0.75em);
		}

		20% {
			opacity: 1;
		}

		89% {
			opacity: 1;
			transform: scale(1);
		}

		100% {
			opacity: 0;
			transform: translateZ(-1000em);
		}
	}

	@keyframes wars {
		0% {
			opacity: 0;
			transform: scale(1.5) translateY(0.5em);
		}

		20% {
			opacity: 1;
		}

		90% {
			opacity: 1;
			transform: scale(1);
		}

		100% {
			opacity: 0;
			transform: translateZ(-1000em);
		}
	}

	@keyframes spin-letters {

		0%,
		10% {
			opacity: 0;
			transform: rotateY(90deg);
		}

		30% {
			opacity: 1;
		}

		70%,
		86% {
			transform: rotateY(0);
			opacity: 1;
		}

		95%,
		100% {
			opacity: 0;
		}
	}

	@keyframes move-byline {
		0% {
			transform: translateZ(5em);
		}

		100% {
			transform: translateZ(0);
		}
	}

	.starwars-demo {
		perspective: 800px;
		transform-style: preserve3d;
	}

	html {
		height: 100%;
	}

	body {
		margin: 0;
	}

	.bg {
		animation: slide 3s ease-in-out infinite alternate;
		background-image: linear-gradient(-60deg, #aeb0ff 50%, #150757 25%, #150757 25%);
		bottom: 0;
		left: -50%;
		opacity: .5;
		position: fixed;
		right: -50%;
		top: 0;
		z-index: -1;
	}

	.bg2 {
		animation-direction: alternate-reverse;
		animation-duration: 4s;
	}

	.bg3 {
		animation-duration: 5s;
	}

	.content {
		background-color: rgba(255, 255, 255, .8);
		border-radius: .25em;
		box-shadow: 0 0 .25em rgba(0, 0, 0, .25);
		box-sizing: border-box;
		left: 50%;
		padding: 10vmin;
		position: fixed;
		text-align: center;
		top: 50%;
		transform: translate(-50%, -50%);
	}

	h1 {
		font-family: monospace;
	}

	@keyframes slide {
		0% {
			transform: translateX(-25%);
		}

		100% {
			transform: translateX(25%);
		}
	}

	.starwars-demo {
		height: 17em;
		left: 50%;
		position: absolute;
		top: 53%;
		transform: translate(-50%, -50%);
		width: 34em;
	}

	.byline span {
		display: inline-block;
	}

	img {
		width: 100%;
		display: block;
		margin-left: auto;
		margin-right: auto;
	}

	.star,
	.wars,
	.byline {
		position: absolute;
	}

	.star {
		top: -12.75em;
	}

	.wars {
		bottom: -0.5em;
	}

	.byline {
		color: #fff;
		font-family: "Poppins", sans-serif;
		font-size: 2.10em;
		text-align: center;
		text-transform: uppercase;
		top: 20%;
		color: #12316E;
	}

	@media only screen and (max-width: 600px) {
		.starwars-demo {
			font-size: 10px;
		}
	}

	@media only screen and (max-width: 480px) {
		.starwars-demo {
			font-size: 7px;
		}
	}

	.card {
		position: relative;
		display: flex;
		flex-direction: column;
		min-width: 0;
		word-wrap: break-word;
		background-color: #ffffffd6;
		background-clip: border-box;
		border: 0px solid rgba(0, 0, 0, 0.125);
		border-radius: 4px;
	}
</style>

<body>
	<div class="bg"></div>
	<div class="bg bg2"></div>
	<div class="bg bg3"></div>
	<div class="starwars-demo">
		<!-- <h2 class="byline" id="byline">ASAMU SOLUSI MANDIRI</h2> -->
	</div>
	<!-- NOTIFIKASI TOAST -->
	<?php if ($this->session->flashdata('f_sigin')) : ?>
		<script type="text/javascript">
			window.onload = function() {
				document.getElementById('clickButtonWarning').click();
			}

			function warning() {
				toastr.warning("Sorry, your username or password is wrong, please try again!", "Information", {
					'closeButton': true,
					'newestOnTop': false,
					'progressBar': true,
					'positionClass': "toast-top-right"
				})
			}
		</script>
		<button type="button" id="clickButtonWarning" class="btn btn-sm btn-warning" onclick="warning()" style="display:none">warning</button>
	<?php endif; ?>

	<?php if ($this->session->flashdata('f_role')) : ?>
		<script type="text/javascript">
			window.onload = function() {
				document.getElementById('clickButtonError').click();
			}

			function error() {
				toastr.error("Sorry, your username or password is wrong, please try again!", "Information", {
					'closeButton': true,
					'newestOnTop': false,
					'progressBar': true,
					'positionClass': "toast-top-right"
				})
			}
		</script>
		<button type="button" id="clickButtonError" class="btn btn-sm btn-error" onclick="error()" style="display:none">error</button>
	<?php endif; ?>

	<?php if ($this->session->flashdata('n_role')) : ?>
		<script type="text/javascript">
			window.onload = function() {
				document.getElementById('clickButtonn_role').click();
			}

			function n_role() {
				toastr.error("Sorry you don't have access to this system!", "Information", {
					'closeButton': true,
					'newestOnTop': false,
					'progressBar': true,
					'positionClass': "toast-top-right"
				})
			}
		</script>
		<button type="button" id="clickButtonn_role" class="btn btn-sm btn-danger" onclick="n_role()" style="display:none">n_role</button>
	<?php endif; ?>

	<?php if ($this->session->flashdata('n_session')) : ?>
		<script type="text/javascript">
			window.onload = function() {
				document.getElementById('clickButtonn_session').click();
			}

			function n_session() {
				toastr.error("Please start your session first, please login!", "Information", {
					'closeButton': true,
					'newestOnTop': false,
					'progressBar': true,
					'positionClass': "toast-top-right"
				})
			}
		</script>
		<button type="button" id="clickButtonn_session" class="btn btn-sm btn-danger" onclick="n_session()" style="display:none">n_session</button>
	<?php endif; ?>

	<?php if ($this->session->flashdata('n_unonaktif')) : ?>
		<script type="text/javascript">
			window.onload = function() {
				document.getElementById('clickButtonn_unonaktif').click();
			}

			function n_unonaktif() {
				toastr.error("Sorry, your username is currently inactive, please contact the administrator!", "Information", {
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
								<img src="<?= base_url('modes/images/asamu/logo/' . $logo); ?>" alt="" class="img-fluid mb-2">
								<hr>
								<small class="mb-1"><i>Start your session</i></small>
								<br><br>
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
								<button class="btn btn-block btn-primary mb-4" name="submit">LOGIN</button>
								<div style="text-align:center">
									<style>
										.hellos:hover {
											font-weight: 800;
											/* text-shadow: -1px 3px 1px black; */
											color: #058ccd;
										}
									</style>
									<small>
										<b>&copy; Copyright 2021 - <?= date('Y') ?> <br>
											<a class="hellos" href="http://hellos-id.com/" target="_blank">
												Design by <font style="text-transform: uppercase;font-weight:800;">Hellos</font><sup style="font-weight:800;">ID</sup>
											</a><br>
											Version 1.0
									</small>
								</div>
								<hr>
								<style>
									p {
										margin-top: 0;
										margin-bottom: -2rem;
									}
								</style>
								<p class="mb-00 text-muted">Visit Website <a href="<?= base_url('whome'); ?>" target="_blank" class="f-w-400"><i class="fa fa-globe"></i> Click here</a></p>
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
	<!-- Color -->
	<script type="text/javascript">
		var byline = document.getElementById('byline');
		bylineText = byline.innerHTML;
		bylineArr = bylineText.split('');
		byline.innerHTML = '';
		var span;
		var letter;

		for (i = 0; i < bylineArr.length; i++) {
			span = document.createElement("span");
			letter = document.createTextNode(bylineArr[i]);
			if (bylineArr[i] == ' ') {
				byline.appendChild(letter);
			} else {
				span.appendChild(letter);
				byline.appendChild(span);
			}
		}
	</script>
	<!-- Required Js -->
	<script src="<?= base_url('assets/js/vendor-all.min.js') ?>"></script>
	<script src="<?= base_url('assets/js/plugins/bootstrap.min.js') ?>"></script>
	<script src="<?= base_url('assets/js/plugins/feather.min.js') ?>"></script>
	<script src="<?= base_url('assets/js/pcoded.min.js') ?>"></script>
	<script src="<?= base_url('assets/plugins/toastr/toastr.min.js') ?>"></script>
</body>

</html>