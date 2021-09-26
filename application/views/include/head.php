<!DOCTYPE html>
<html lang="en">
<head>
    <title><?= $this->session->userdata('title');?></title>
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
    <!-- Toastr -->
    <link rel="stylesheet" href="<?= base_url('assets/plugins/toastr/toastr.min.css')?>">
    <!-- SweetAlerts -->
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/plugins/sweetalert2/sweetalert2.css');?>">
	<script src="<?= base_url('assets/plugins/sweet/sweetalert2.all.js')?>"></script>
	<script src="<?= base_url('assets/plugins/sweet/sweetalert2.all.min.js')?>"></script>
	<script src="<?= base_url('assets/plugins/sweet/sweetalert2.js')?>"></script>
	<script src="<?= base_url('assets/plugins/sweet/sweetalert2.min.js')?>"></script>
	<!-- DATATABLES -->
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.7.1/css/buttons.dataTables.min.css">
	<!-- END DATATABLES -->
	</head>
<?php
	date_default_timezone_set("Asia/Jakarta");
?>
<?php
function tanggal_indo($tanggal, $cetak_hari = false)
{
	$hari = array ( 1 =>    
		'Senin',
		'Selasa',
		'Rabu',
		'Kamis',
		'Jumat',
		'Sabtu',
		'Minggu'
	);
	$bulan = array (1 =>   
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
	$tgl_indo = $split[2] . ' ' . $bulan[ (int)$split[1] ] . ' ' . $split[0];

	if ($cetak_hari) {
		$num = date('N', strtotime($tanggal));
		return $hari[$num] . ', ' . $tgl_indo;
	}
	return $tgl_indo;
}
// FORMAT RUPIAH
function Rupiah($angka){
    $hasil = "Rp. " . number_format($angka,2,',','.');
    return $hasil;
}
?>
<body class="">
	<!-- [ Pre-loader ] start -->
	<div class="loader-bg">
		<div class="loader-track">
			<div class="loader-fill"></div>
		</div>
	</div>
	<!-- [ Pre-loader ] End -->