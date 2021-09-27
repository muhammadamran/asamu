<!-- [ Mobile header ] start -->
<div class="pc-mob-header pc-header">
	<div class="pcm-logo">
		<img src="<?= base_url('modes/images/asamu/asamu-logo2.png') ?>" alt="" class="logo logo-lg">
	</div>
	<div class="pcm-toolbar">
		<a href="#!" class="pc-head-link" id="mobile-collapse">
			<div class="hamburger hamburger--arrowturn">
				<div class="hamburger-box">
					<div class="hamburger-inner"></div>
				</div>
			</div>
		</a>
		<a href="#!" class="pc-head-link" id="headerdrp-collapse">
			<i data-feather="align-right"></i>
		</a>
		<a href="#!" class="pc-head-link" id="header-collapse">
			<i data-feather="more-vertical"></i>
		</a>
	</div>
</div>
<!-- [ Mobile header ] End -->
<!-- [ Header ] start -->
<header class="pc-header ">
	<div class="header-wrapper">
		<div class="mr-auto pc-mob-drp">
			<ul class="list-unstyled">
				<li class="dropdown pc-h-item">
					<a class="pc-head-link active dropdown-toggle arrow-none mr-0" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
						<i class="fa fa-lock" style="font-size: 14px;"></i>&nbsp; Active Role : <?= $this->session->userdata('role'); ?>
					</a>
				</li>
			</ul>
		</div>
		<div class="ml-auto">
			<ul class="list-unstyled">
				<li class="dropdown pc-h-item">
					<a class="pc-head-link dropdown-toggle arrow-none mr-0" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
						<i class="material-icons-two-tone">search</i>
					</a>
					<div class="dropdown-menu dropdown-menu-right pc-h-dropdown drp-search">
						<form class="px-3">
							<div class="form-group mb-0 d-flex align-items-center">
								<i data-feather="search"></i>&nbsp;&nbsp;&nbsp;
								<input type="search" class="form-control border-0 shadow-none" placeholder="Search here. . .">
							</div>
						</form>
					</div>
				</li>
				<li class="dropdown pc-h-item">
					<a class="pc-head-link dropdown-toggle arrow-none mr-0" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
						<?php
						$cek_profile = $this->session->userdata('profile');
						?>
						<?php if ($cek_profile == NULL) { ?>
							<img src="<?= base_url('assets/images/user/User_Circle.png') ?>" alt="user-image" class="user-avtar">
						<?php } else { ?>
							<img src="<?= base_url('assets/images/user/' . $this->session->userdata('profile')); ?>" alt="user-image" class="user-avtar">
						<?php } ?>
						<span>
							<span class="user-name"><?= $this->session->userdata('username'); ?></span>
							<span class="user-desc"><?= $this->session->userdata('job_position'); ?></span>
						</span>
					</a>
					<div class="dropdown-menu dropdown-menu-right pc-h-dropdown">
						<a href="<?= base_url('profile') ?>" class="dropdown-item">
							<i class="material-icons-two-tone">account_circle</i>
							<span>My Account</span>
						</a>
						<a href="<?= base_url('login/logout') ?>" class="dropdown-item">
							<i class="material-icons-two-tone">chrome_reader_mode</i>
							<span>Logout</span>
						</a>
					</div>
				</li>
			</ul>
		</div>

	</div>
</header>
<!-- [ Header ] end -->