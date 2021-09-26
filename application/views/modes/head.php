<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="utf-8" />
   <meta http-equiv="X-UA-Compatible" content="IE=edge" />
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
   <meta name="keywords" content="Logistics, Perusahaan, Jasa, Freigth,Freigth Forwading, Company, Branch, Pelabuhan, Bandara" />
   <meta name="description" content="" />
   <meta name="author" content="Hellos-ID" />
   <link rel="shortcut icon" href="<?= base_url('modes/images/asamu/logo.png'); ?>" type="">
   <title>Asamu Solusi | Strong Business Partner, Highly Focused with Your Target</title>
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
</head>

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

<body>