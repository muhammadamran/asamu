 <!--Header Start-->
 <header class="header-style-3 wf100">
   <!-- TOP NAV -->
   <div class="topbar">
      <div class="container">
         <div class="row">
            <div class="col-md-6">
               <?php if ($this->session->userdata('address') == NULL ) { ?>
                  <p><i class="fas fa-map-marker-alt"></i> Indonesia</p>
               <?php } else { ?>
                  <p><i class="fas fa-map-marker-alt"></i> <?= $this->session->userdata('address');?></p>
               <?php } ?>
            </div>
            <div class="col-md-6">
               <ul class="topbar-social">
                  <li class="social-links"> 
                     <a href="<?= $this->session->userdata('facebook');?>" target="_blank">
                        <i class="fab fa-facebook-f"></i>
                     </a> 
                     <a href="<?= $this->session->userdata('twitter');?>" target="_blank">
                        <i class="fab fa-twitter"></i>
                     </a> 
                     <a href="<?= $this->session->userdata('linked');?>" target="_blank">
                        <i class="fab fa-linkedin-in"></i>
                     </a> 
                     <a href="<?= $this->session->userdata('google');?>" target="_blank">
                        <i class="fab fa-google-plus-g"></i>
                     </a> 
                     <a href="<?= $this->session->userdata('instagram');?>" target="_blank">
                        <i class="fab fa-instagram"></i>
                     </a> 
                     <a href="<?= $this->session->userdata('youtube');?>" target="_blank">
                        <i class="fab fa-youtube"></i>
                     </a> 
                  </li>
                  <?php if ($this->session->userdata('role') != NULL) { ?>
                     <li> 
                        <a class="acclink" href="#!"><i class="fa fa-lock" style="font-size: auto;"></i> Role : <?= $this->session->userdata('role') ?></a> 
                     </li>
                  <?php } else { ?>
                     <li> <a class="acclink" href="<?= base_url('wlogin');?>"><i class="far fa-user-circle"></i> My Account</a> </li>
                  <?php } ?>
               </ul>
            </div>
         </div>
      </div>
   </div>
   <!-- END TOP NAV -->
   <!-- LOGO -->
   <?php if ($this->session->userdata('address') == NULL ) { ?>
      <div class="h3-logo-row">
         <div class="container">
            <div class="row">
               <div class="col-md-3 col-sm-4">
                  <div class="logo"><a href="index-2.html"><img src="<?= base_url ('assuts/images/logo-bank.png');?>" alt=""></a></div>
               </div>
               <div class="col-md-4 col-sm-8">
               </div>
               <div class="col-md-5 col-sm-12">
                  <form class="search-form">
                     <input class="form-control" type="search" placeholder="Cari Data" aria-label="Search">
                     <button class="sbtn" type="submit"><i class="fas fa-search"></i></button>
                  </form>
               </div>
            </div>
         </div>
      </div>
   <?php } else { ?>
      <div class="h3-logo-row">
         <div class="container">
            <div class="row">
               <div class="col-md-3 col-sm-4">
                  <div class="logo"><a href="index-2.html"><img src="<?= base_url ('assuts/images/logo-bank.png');?>" alt=""></a></div>
               </div>
               <div class="col-md-4 col-sm-8">
                  <ul class="header-contact">
                     <li><i class="fas fa-phone"></i> <?= $this->session->userdata('telp') ?></li>
                     <li><i class="fas fa-envelope"></i> <?= $this->session->userdata('email') ?></li>
                  </ul>
               </div>
               <div class="col-md-5 col-sm-12">
                  <a class="con-btn" href="#"><i class="fa fa-bell" aria-hidden="true"></i> 0</a>
                  <form class="search-form">
                     <input class="form-control" type="search" placeholder="Cari Data" aria-label="Search">
                     <button class="sbtn" type="submit"><i class="fas fa-search"></i></button>
                  </form>
               </div>
            </div>
         </div>
      </div>
   <?php } ?>
   <!-- END LOGO -->
   <!-- MENU -->
   <div class="navrow">
      <div class="container">
         <div class="row">
            <div class="col-md-12">
               <nav class="navbar navbar-expand-lg">
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <i class="fas fa-bars"></i> </button>
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                     <ul class="navbar-nav mr-auto">
                        <li class="nav-item"> <a class="nav-link" href="<?= base_url('whome');?>">Beranda</a> </li>
                        <li class="nav-item"> <a class="nav-link" href="<?= base_url('wedukasi');?>">Edukasi</a> </li>
                        <?php if ($this->session->userdata('role') == 'masyarakat') { ?>
                           <li class="nav-item"> <a class="nav-link" href="<?= base_url('wlapor');?>">Penukaran</a> </li>
                           <li class="nav-item"> <a class="nav-link" href="<?= base_url('wtransaksi');?>">Transaksi</a> </li>
                        <?php } ?>
                        <?php if ($this->session->userdata('role') == 'petugas') { ?>
                           <li class="nav-item"> <a class="nav-link" href="<?= base_url('wpenjemputan');?>">Penjemputan</a> </li>
                        <?php } ?>
                        <li class="nav-item"> <a class="nav-link" href="<?= base_url('wkontak');?>">Kontak</a> </li>
                        <?php if ($this->session->userdata('role') != NULL) { ?>
                           <li class="nav-item dropdown">
                              <a class="nav-link dropdown-toggle" href="#!"  role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="fa fa-user-circle"></i> Hai, <?= $this->session->userdata('full_name') ?></a>
                              <ul class="dropdown-menu" >
                                 <?php if ($this->session->userdata('role') == 'admin') { ?>
                                    <li><a href="<?= base_url('home');?>" target="_blank">Site Admin</a> </li>
                                 <?php } ?>
                                 <li><a href="<?= base_url('wprofile');?>">Lihat Profile</a> </li>
                                 <li><a href="<?= base_url('wlogin/logout');?>">Logout</a> </li>
                              </ul>
                           </li>
                        <?php } ?>
                     </ul>
                  </div>
               </nav>
            </div>
         </div>
      </div>
   </div>
   <!-- END MENU -->
</header>
<!--Header End-->