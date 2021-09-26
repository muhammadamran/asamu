<!doctype html>
<html lang="en">
<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <meta name="description" content="">
   <meta name="author" content="">
   <link rel="icon" href="<?= base_url('assuts/images/sericon1.png');?>">
   <title><?= $this->session->userdata('title');?></title>
   <!-- CSS FILES START -->
   <link href="<?= base_url('assuts/css/custom.css');?>" rel="stylesheet">
   <link href="<?= base_url('assuts/css/color.css');?>" rel="stylesheet">
   <link href="<?= base_url('assuts/css/responsive.css');?>" rel="stylesheet">
   <link href="<?= base_url('assuts/css/owl.carousel.min.css');?>" rel="stylesheet">
   <link href="<?= base_url('assuts/css/bootstrap.min.css');?>" rel="stylesheet">
   <link href="<?= base_url('assuts/css/prettyPhoto.css');?>" rel="stylesheet">
   <link href="<?= base_url('assuts/css/all.min.css');?>" rel="stylesheet">
   <!-- CSS FILES End -->
   <!-- Toastr -->
   <link rel="stylesheet" href="<?= base_url('assets/plugins/toastr/toastr.min.css');?>">
   <!-- SweetAlerts -->
   <link rel="stylesheet" type="text/css" href="<?= base_url('assets/plugins/sweetalert2/sweetalert2.css');?>">
   <script src="<?= base_url('assets/plugins/sweet/sweetalert2.all.js');?>"></script>
   <script src="<?= base_url('assets/plugins/sweet/sweetalert2.all.min.js');?>"></script>
   <script src="<?= base_url('assets/plugins/sweet/sweetalert2.js');?>"></script>
   <script src="<?= base_url('assets/plugins/sweet/sweetalert2.min.js');?>"></script>
   <!-- Themefisher Icon font -->
  <link rel="stylesheet" href="<?= base_url('assuts/webfonts/style.css');?>">
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
<body>
   <div class="wrapper home3">