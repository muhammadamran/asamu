<!-- [ navigation menu ] start -->
<nav class="pc-sidebar ">
	<div class="navbar-wrapper">
		<div class="m-header">
			<a href="<?= base_url('home')?>" class="b-brand">
				<!-- ========   change your logo hear   ============ -->
				<img src="<?= base_url('assets/images/logo-svg.png')?>" alt="" class="logo logo-lg" style="width: 190px;">
				<img src="<?= base_url('assets/images/logo-sm.svg')?>" alt="" class="logo logo-sm">
			</a>
		</div>
		<div class="navbar-content">
			<ul class="pc-navbar">
				<style>
					.visit {
						margin-top: -10px;
						background: #20c997;
					}
					.visit-bar {
						margin-top: 0px;
						background: #20c997;
						color: #000;
					}
				</style>
				<li class="pc-item visit">
					<a href="<?= base_url('whome')?>" class="pc-link visit-bar" target="_blank" style="background: #20c997;color: #000;margin-top: 0px;"><i class="fa fa-globe"></i> <span class="pc-mtext">Lihat Website</span></a>
				</li>
				<li class="pc-item pc-caption">
					<label>Menu</label>
				</li>
				<li class="pc-item <?= $this->uri->segment(1) == "home" ? "active" : ""; ?>">
					<a href="<?= base_url('home')?>" class="pc-link "><span class="pc-micon"><i class="material-icons-two-tone">home</i></span><span class="pc-mtext">Dashboard</span></a>
				</li>
				<li class="pc-item pc-caption">
					<label>Transaksi</label>
					<span>Form Transaksi</span>
				</li>
				<li class="pc-item pc-hasmenu <?= $this->uri->segment(1) == "edukasi" && $this->uri->segment(1) == "galeri" && $this->uri->segment(1) == "slider" ? "active pc-trigger" : ""; ?>">
					<a href="#!" class="pc-link "><span class="pc-micon"><i class="material-icons-two-tone">list_alt</i></span><span class="pc-mtext">Forms</span><span class="pc-arrow"><i data-feather="chevron-right"></i></span></a>
					<ul class="pc-submenu">
						<li class="pc-item <?= $this->uri->segment(1) == "edukasi" ? "active" : ""; ?>"><a class="pc-link" href="<?= base_url('edukasi')?>">Edukasi</a></li>
						<li class="pc-item <?= $this->uri->segment(1) == "slider" ? "active" : ""; ?>"><a class="pc-link" href="<?= base_url('slider')?>">Slider</a></li>
						<li class="pc-item <?= $this->uri->segment(1) == "galeri" ? "active" : ""; ?>"><a class="pc-link" href="<?= base_url('galeri')?>">Galeri</a></li>
					</ul>
				</li>
				<li class="pc-item pc-hasmenu <?= $this->uri->segment(1) == "sampah" && $this->uri->segment(1) == "pengaduan" ? "active pc-trigger" : ""; ?>">
					<a href="#!" class="pc-link "><span class="pc-micon"><i class="material-icons-two-tone">report</i></span><span class="pc-mtext">Penukaran</span><span class="pc-arrow"><i data-feather="chevron-right"></i></span></a>
					<ul class="pc-submenu">
						<!-- <li class="pc-item <?php // $this->uri->segment(1) == "sampah" ? "active" : ""; ?>"><a class="pc-link" href="<?php // base_url('sampah')?>">Sampah Masuk</a></li> -->
						<li class="pc-item <?= $this->uri->segment(1) == "pengaduan" ? "active" : ""; ?>"><a class="pc-link" href="<?= base_url('pengaduan')?>">Pengaduan</a></li>
						<li class="pc-item <?= $this->uri->segment(1) == "penarikan" ? "active" : ""; ?>"><a class="pc-link" href="<?= base_url('penarikan')?>">Penarikan Saldo</a></li>
					</ul>
				</li>
				<li class="pc-item pc-caption">
					<label>Administrator Tools</label>
				</li>
				<!-- <li class="pc-item <?php // $this->uri->segment(1) == "subscribe" ? "active" : ""; ?>">
					<a href="<?php // base_url('subscribe')?>" class="pc-link "><span class="pc-micon"><i class="material-icons-two-tone">bubble_chart</i></span><span class="pc-mtext">Subscribe</span></a>
				</li> -->
				<li class="pc-item <?= $this->uri->segment(1) == "jenis" ? "active" : ""; ?>">
					<a href="<?= base_url('jenis')?>" class="pc-link "><span class="pc-micon"><i class="material-icons-two-tone">group</i></span><span class="pc-mtext">Jenis Sampah</span></a>
				</li>
				<li class="pc-item <?= $this->uri->segment(1) == "users" ? "active" : ""; ?>">
					<a href="<?= base_url('users')?>" class="pc-link "><span class="pc-micon"><i class="material-icons-two-tone">group</i></span><span class="pc-mtext">Manajemen Users</span></a>
				</li>
				<li class="pc-item <?= $this->uri->segment(1) == "site" ? "active" : ""; ?>">
					<a href="<?= base_url('site')?>" class="pc-link "><span class="pc-micon"><i class="material-icons-two-tone">build</i></span><span class="pc-mtext">Setting Site</span></a>
				</li>
			</ul>
			<br><br>
			<div style="text-align:center">
				<small><b>&copy; Copyright 2021 - <?= date('Y') ?> <br>Design By Bank Sampah</b><br>Version 1.0</small>
			</div>
		</div>
	</div>
	<hr>
</nav>
<!-- [ navigation menu ] end -->