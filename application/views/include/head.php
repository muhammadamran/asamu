<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="description" content="DashboardKit is made using Bootstrap 5 design framework. Download the free admin template & use it for your project.">
	<meta name="keywords" content="DashboardKit, Dashboard Kit, Dashboard UI Kit, Bootstrap 5, Admin Template, Admin Dashboard, CRM, CMS, Free Bootstrap Admin Template">
	<meta name="author" content="DashboardKit ">
	<!-- Favicon icon -->
	<link rel="shortcut icon" href="<?= base_url('modes/images/asamu/icon/' . $icon); ?>" type="">
	<title>CMS | <?= $title; ?></title>
	<!-- font css -->
	<link rel="stylesheet" href="<?= base_url('assets/fonts/feather.css') ?>">
	<link rel="stylesheet" href="<?= base_url('assets/fonts/fontawesome.css') ?>">
	<link rel="stylesheet" href="<?= base_url('assets/fonts/material.css') ?>">
	<!-- vendor css -->
	<link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>" id="main-style-link">
	<!-- Toastr -->
	<link rel="stylesheet" href="<?= base_url('assets/plugins/toastr/toastr.min.css') ?>">
	<!-- SweetAlerts -->
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/plugins/sweetalert2/sweetalert2.css'); ?>">
	<script src="<?= base_url('assets/plugins/sweet/sweetalert2.all.js') ?>"></script>
	<script src="<?= base_url('assets/plugins/sweet/sweetalert2.all.min.js') ?>"></script>
	<script src="<?= base_url('assets/plugins/sweet/sweetalert2.js') ?>"></script>
	<script src="<?= base_url('assets/plugins/sweet/sweetalert2.min.js') ?>"></script>
	<!-- DATATABLES -->
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.7.1/css/buttons.dataTables.min.css">
	<!-- END DATATABLES -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
</head>
<style>
	.preloader {
		position: fixed;
		top: 0;
		left: 0;
		width: 100%;
		height: 100%;
		z-index: 9999;
		background-color: #fff;
	}

	.preloader .loading {
		position: absolute;
		left: 50%;
		top: 50%;
		transform: translate(-50%, -50%);
		font: 14px arial;
	}

	.line-1 {
		position: relative;
		top: 50%;
		width: 24em;
		margin: 0 auto;
		border-right: 2px solid rgba(255, 255, 255, .75);
		font-size: 180%;
		text-align: center;
		white-space: nowrap;
		overflow: hidden;
		transform: translateY(-50%);
	}

	/* Animation */
	.anim-typewriter {
		animation: typewriter 4s steps(44) 1s 1 normal both,
			blinkTextCursor 500ms steps(44) infinite normal;
	}

	@keyframes typewriter {
		from {
			width: 0;
		}

		to {
			width: 24em;
		}
	}

	@keyframes blinkTextCursor {
		from {
			border-right-color: rgba(255, 255, 255, .75);
		}

		to {
			border-right-color: transparent;
		}
	}

	.load {
		font-weight: 700;
		font-family: "Poppins", sans-serif;
		font-size: 16px;
		text-transform: uppercase;
	}
</style>
<?php
date_default_timezone_set("Asia/Jakarta");
?>
<?php
function tanggal_indo($tanggal, $cetak_hari = false)
{
	$hari = array(
		1 =>
		'Senin',
		'Selasa',
		'Rabu',
		'Kamis',
		'Jumat',
		'Sabtu',
		'Minggu'
	);
	$bulan = array(
		1 =>
		'Januari',
		'Februari',
		'Maret',
		'April',
		'Mei',
		'Juni',
		'Juli',
		'Agustus',
		'September',
		'Oktober',
		'November',
		'Desember'
	);
	$split    = explode('-', $tanggal);
	$tgl_indo = $split[2] . ' ' . $bulan[(int)$split[1]] . ' ' . $split[0];

	if ($cetak_hari) {
		$num = date('N', strtotime($tanggal));
		return $hari[$num] . ', ' . $tgl_indo;
	}
	return $tgl_indo;
}
// FORMAT RUPIAH
function Rupiah($angka)
{
	$hasil = "Rp. " . number_format($angka, 2, ',', '.');
	return $hasil;
}
?>
<script>
	$(document).ready(function() {
		$(".preloader").delay(2000).fadeOut();
	})
</script>

<body class="">
	<!-- [ Pre-loader ] start -->
	<div class="preloader">
		<div class="loading">
			<div class="heading_container heading_center">
				<img src="<?= base_url('modes/images/asamu/loader/' . $loader); ?>" width="200">
				<br>
				<!-- <label style="font-weight:700"></label> -->
				<br>
				<p class="line-1 anim-typewriter load">CMS | <?= $tloader; ?></p>
			</div>
		</div>
	</div>
	<!-- [ Pre-loader ] End -->