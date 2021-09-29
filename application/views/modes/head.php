<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="utf-8" />
   <meta http-equiv="X-UA-Compatible" content="IE=edge" />
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
   <meta name="keywords" content="Logistics, Perusahaan, Jasa, Freigth,Freigth Forwading, Company, Branch, Pelabuhan, Bandara" />
   <meta name="description" content="" />
   <meta name="author" content="Hellos-ID" />
   <link rel="shortcut icon" href="<?= base_url('modes/images/asamu/icon/' . $icon); ?>" type="">
   <title><?= $title; ?></title>
   <!-- <title>PT. Asamu Solusi Mandiri - Strong Business Partner, Highly Focused with Your Target</title> -->
   <link rel="stylesheet" type="text/css" href="<?= base_url('modes/css/bootstrap.css'); ?>" />
   <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">
   <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
   <link href="<?= base_url('modes/css/font-awesome.min.css'); ?>" rel="stylesheet" />
   <link href="<?= base_url('modes/css/style.css'); ?>" rel="stylesheet" />
   <link href="<?= base_url('modes/css/responsive.css'); ?>" rel="stylesheet" />
   <!-- INBASE ASSETS -->
   <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800|Montserrat:300,400,700" rel="stylesheet">
   <link href="<?= base_url('modes/inbase/vendor/aos/aos.css'); ?>" rel="stylesheet">
   <link href="<?= base_url('modes/inbase/vendor/bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet">
   <link href="<?= base_url('modes/inbase/vendor/bootstrap-icons/bootstrap-icons.css'); ?>" rel="stylesheet">
   <link href="<?= base_url('modes/inbase/vendor/boxicons/css/boxicons.min.css'); ?>" rel="stylesheet">
   <link href="<?= base_url('modes/inbase/vendor/glightbox/css/glightbox.min.css'); ?>" rel="stylesheet">
   <link href="<?= base_url('modes/inbase/vendor/swiper/swiper-bundle.min.css'); ?>" rel="stylesheet">
   <link href="<?= base_url('modes/inbase/css/style.css'); ?>" rel="stylesheet">
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
</head>
<style type="text/css">
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

   .hero-image {
      background-image: url("<?= base_url('modes/images/asamu/bg.png') ?>"), url("<?= base_url('modes/images/asamu/bg.png') ?>");
      background-color: #090078;
      background-position: center;
      background-repeat: no-repeat;
      background-size: cover;
      padding: 82px;
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

<body>
   <!-- [ Pre-loader ] start -->
   <div class="preloader">
      <div class="loading">
         <div class="heading_container heading_center">
            <img src="<?= base_url('modes/images/asamu/loader/' . $loader); ?>" width="200">
            <br>
            <!-- <label style="font-weight:700"></label> -->
            <p class="line-1 anim-typewriter load"><?= $tloader; ?></p>
         </div>
      </div>
   </div>
   <!-- [ Pre-loader ] End -->