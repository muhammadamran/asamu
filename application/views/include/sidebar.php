<!-- [ navigation menu ] start -->
<nav class="pc-sidebar ">
	<div class="navbar-wrapper">
		<div class="m-header">
			<a href="<?= base_url('home') ?>" class="b-brand">
				<!-- ========   change your logo hear   ============ -->
				<img src="<?= base_url('modes/images/asamu/asamu-logo2.png') ?>" alt="" class="logo logo-lg" style="width: 190px;">
				<img src="<?= base_url('modes/images/asamu/asamu-logo2.png') ?>" alt="" class="logo logo-sm">
			</a>
		</div>
		<div class="navbar-content">
			<ul class="pc-navbar">
				<style>
					.visit {
						margin-top: -10px;
						background: #150757;
						color: #fff;
					}

					.visit-bar {
						margin-top: 0px;
						background: #150757;
						color: #fff;
					}
				</style>
				<li class="pc-item visit">
					<a href="<?= base_url('whome') ?>" class="pc-link visit-bar" target="_blank" style="background: #150757;color: #fff;margin-top: 0px;"><i class="fa fa-globe"></i> <span class="pc-mtext">Visit Website</span></a>
				</li>
				<li class="pc-item pc-caption">
					<label>Menu</label>
				</li>
				<li class="pc-item <?= $this->uri->segment(1) == "home" ? "active" : ""; ?>">
					<a href="<?= base_url('home') ?>" class="pc-link "><span class="pc-micon"><i class="material-icons-two-tone">home</i></span><span class="pc-mtext">Dashboard</span></a>
				</li>
				<li class="pc-item pc-caption">
					<label>Modules</label>
					<span>Form Modules</span>
				</li>
				<!-- All Content -->
				<li class="pc-item pc-hasmenu">
					<a href="#!" class="pc-link "><span class="pc-micon"><i class="material-icons-two-tone">list_alt</i></span><span class="pc-mtext">Conctent All in One</span><span class="pc-arrow"><i data-feather="chevron-right"></i></span></a>
					<ul class="pc-submenu">
						<li class="pc-item <?= $this->uri->segment(1) == "sliders" ? "active" : ""; ?>"><a class="pc-link" href="<?= base_url('sliders') ?>">Sliders</a></li>
						<li class="pc-item <?= $this->uri->segment(1) == "clients" ? "active" : ""; ?>"><a class="pc-link" href="<?= base_url('clients') ?>">Clients</a></li>
						<li class="pc-item <?= $this->uri->segment(1) == "counters" ? "active" : ""; ?>"><a class="pc-link" href="<?= base_url('counters') ?>">Counters</a></li>
						<li class="pc-item <?= $this->uri->segment(1) == "background" ? "active" : ""; ?>"><a class="pc-link" href="<?= base_url('background') ?>">Background</a></li>
					</ul>
				</li>
				<!-- Company -->
				<li class="pc-item pc-hasmenu">
					<a href="#!" class="pc-link "><span class="pc-micon"><i class="material-icons-two-tone">list_alt</i></span><span class="pc-mtext">Company</span><span class="pc-arrow"><i data-feather="chevron-right"></i></span></a>
					<ul class="pc-submenu">
						<li class="pc-item <?= $this->uri->segment(1) == "aboutus" ? "active" : ""; ?>"><a class="pc-link" href="<?= base_url('aboutus') ?>">About Asamu Solusi Mandiri</a></li>
						<li class="pc-item <?= $this->uri->segment(1) == "visionmission" ? "active" : ""; ?>"><a class="pc-link" href="<?= base_url('visionmission') ?>">Vision & Mission</a></li>
					</ul>
				</li>
				<!-- Services -->
				<li class="pc-item pc-hasmenu">
					<a href="#!" class="pc-link "><span class="pc-micon"><i class="material-icons-two-tone">list_alt</i></span><span class="pc-mtext">Services</span><span class="pc-arrow"><i data-feather="chevron-right"></i></span></a>
					<ul class="pc-submenu">
						<li class="pc-item <?= $this->uri->segment(2) == "services_list" ? "active" : ""; ?>"><a class="pc-link" href="<?= base_url('services/services_list') ?>">List Services</a></li>
						<li class="pc-item <?= $this->uri->segment(2) == "services_content" ? "active" : ""; ?>"><a class="pc-link" href="<?= base_url('services/services_content') ?>">Content Services</a></li>
					</ul>
				</li>
				<li class="pc-item pc-caption">
					<label>Register Customers</label>
				</li>
				<li class="pc-item <?= $this->uri->segment(1) == "customers" ? "active" : ""; ?>">
					<a href="<?= base_url('customers') ?>" class="pc-link "><span class="pc-micon"><i class="material-icons-two-tone">groups</i></span><span class="pc-mtext">Customers</span></a>
				</li>
				<li class="pc-item pc-caption">
					<label>Administrator Tools</label>
				</li>
				<li class="pc-item <?= $this->uri->segment(1) == "subscribe" ? "active" : ""; ?>">
					<a href="<?= base_url('subscribe') ?>" class="pc-link "><span class="pc-micon"><i class="material-icons-two-tone">bubble_chart</i></span><span class="pc-mtext">Subscribe</span></a>
				</li>
				<li class="pc-item <?= $this->uri->segment(1) == "users" ? "active" : ""; ?>">
					<a href="<?= base_url('users') ?>" class="pc-link "><span class="pc-micon"><i class="material-icons-two-tone">group</i></span><span class="pc-mtext">Manage Users</span></a>
				</li>
				<li class="pc-item <?= $this->uri->segment(1) == "site" ? "active" : ""; ?>">
					<a href="<?= base_url('site') ?>" class="pc-link "><span class="pc-micon"><i class="material-icons-two-tone">build</i></span><span class="pc-mtext">Setting Site</span></a>
				</li>
			</ul>
			<hr>
			<div style="text-align:center">
				Designed by
				<style>
					.hellos:hover {
						font-weight: 800;
						text-shadow: -1px 3px 1px black;
						color: #fff;
					}
				</style>
				<a class="hellos" href="http://hellos-id.com/" target="_blank">
					<font style="text-transform: uppercase;font-weight:800;">Hellos</font><sup style="font-weight:800;">ID</sup>
				</a>
			</div>
		</div>
	</div>
	<hr>
</nav>
<!-- [ navigation menu ] end -->