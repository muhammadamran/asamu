<style>
   .navbar-custom {
      overflow: hidden;
      background-color: #150757;
      /* position: sticky; */
      /* position: -webkit-sticky; */
      padding: 0 20px;
      top: 0;
      z-index: -9999;
      font-size: 12px;
      font-family: "Poppins", sans-serif;
      max-width: auto;
   }

   .navbar-custom a {
      float: left;
      display: block;
      color: white;
      text-align: center;
      padding: 8px 20px;
      text-decoration: none;
   }

   .navbar-custom a.right {
      float: right;
   }

   .navbar-custom a:hover {
      background-color: #1d0a75;
      color: #fff;
      text-shadow: -1px 3px 1px black;
      /* text-decoration: revert; */
      text-transform: uppercase;
   }

   .navbar-custom a.active {
      background-color: #1d0a75;
      color: white;
      text-transform: capitalize;
      text-shadow: -2px 1px 1px black;
   }

   .navbar-custom a.active:hover {
      background-color: #1d0a75;
      color: white;
      text-transform: uppercase;
      text-shadow: -2px 1px 1px black;
   }

   @media screen and (max-width: 600px) {
      .navbar-custom a {
         float: none;
         width: 100%;
      }
   }

   @media screen and (max-width: 500px) {
      .navbar-custom a {
         float: none;
         width: 100%;
      }
   }

   .logo-asamu {
      width: 65%;
      height: auto;
   }
</style>
<!-- Top Header -->
<div class="navbar-custom">
   <a href="#" class="active"><i><?= $motto; ?></i></a>
   <a href="mailto:<?= $email; ?>" rel="noopener" class="right"><i class="fa fa-envelope"></i> <?= $email; ?></a>
   <a href="tel:<?= $telp; ?>" rel="noopener" class="right"><i class="fa fa-phone"></i> <?= $telp; ?></a>
</div>
<!-- End Top Header -->
<header id="header" class="d-flex align-items-center">
   <div class="container d-flex justify-content-between">
      <div id="logo">
         <a href="<?= base_url(''); ?>"><img src="<?= base_url('modes/images/asamu/logo/' . $logo); ?>" alt=""></a>
      </div>
      <nav id="navbar" class="navbar">
         <ul>
            <li>
               <a class="nav-link scrollto <?= $this->uri->segment(1) == "whome" || $this->uri->segment(1) == "" ? "active" : ""; ?>" href="<?= base_url(''); ?>">Home</a>
            </li>
            <li class="dropdown"><a class="nav-link scrollto <?= $this->uri->segment(1) == "wabout" || $this->uri->segment(1) == "wvisionmission" ? "active" : ""; ?>" href="<?= base_url(''); ?>" href="#"><span>Company</span> <i class="bi bi-chevron-down"></i></a>
               <ul>
                  <li><a class="<?= $this->uri->segment(1) == "wabout" ? "active" : ""; ?>" href="<?= base_url('wabout'); ?>">About Asamu Solusi Mandiri</a></li>
                  <li><a class="<?= $this->uri->segment(1) == "wvisionmission" ? "active" : ""; ?>" href="<?= base_url('wvisionmission'); ?>">Vision & Mission</a></li>
               </ul>
            </li>
            <li class="dropdown"><a class="nav-link scrollto <?= $this->uri->segment(1) == "wservices" ? "active" : ""; ?>" href="<?= base_url(''); ?>" href="#"><span>Services</span> <i class="bi bi-chevron-down"></i></a>
               <ul>
                  <li><a href="<?= base_url('wservices'); ?>">Air Cargo & Air Courier</a></li>
                  <li><a href="<?= base_url('wservices'); ?>">Ocean FCL & LCL</a></li>
                  <li><a href="<?= base_url('wservices'); ?>">Project Shipment</a></li>
                  <li><a href="<?= base_url('wservices'); ?>">Customs Clearance</a></li>
                  <li><a href="<?= base_url('wservices'); ?>">Alibaba Gold Supplier</a></li>
               </ul>
            </li>
            <li class="dropdown"><a class="nav-link scrollto <?= $this->uri->segment(1) == "wteam" ? "active" : ""; ?>" href="<?= base_url(''); ?>" href="#"><span>Team</span> <i class="bi bi-chevron-down"></i></a>
               <ul>
                  <li><a class="<?= $this->uri->segment(1) == "wteam" ? "active" : ""; ?>" href="<?= base_url('wteam'); ?>">Team of Expert</a></li>
               </ul>
            </li>
            <li><a class="nav-link scrollto <?= $this->uri->segment(1) == "wcontactus" ? "active" : ""; ?>" href="<?= base_url('wcontactus'); ?>">Contact Us</a></li>
            <li class="dropdown">
               <a href="#">
                  <span><i class="fa fa-globe" style="font-size: 16px;"></i> &nbsp; <img src="https://lipis.github.io/flag-icon-css/flags/4x3/gb.svg" style="width: 20px;margin-bottom: 4px;" alt="" srcset=""></span>
               </a>
               <ul>
                  <li>
                     <a href="#">
                        <img src="https://lipis.github.io/flag-icon-css/flags/4x3/id.svg" style="width: 20px;margin-bottom: -1px;margin-right: 110px;" alt="" srcset="">
                     </a>
                  </li>
               </ul>
            </li>
            <style>
               .get-login {
                  color: #ffffff;
                  font-weight: 500;
                  background-color: #058ccd;
                  padding: 7px 12px;
                  /* box-shadow: 0px 4px 4px rgb(0 0 0 / 30%); */
                  border: 0;
                  /* border-radius: 10px 0 10px 0; */
                  border-color: #058ccd;
               }

               .get-login:hover {
                  color: #ffffff;
                  font-weight: 500;
                  background-color: #058ccd;
                  padding: 7px 12px;
                  box-shadow: 4px 3px 0px rgb(24 29 44);
                  border: 0;
                  /* border-radius: 10px 0 10px 0; */
                  border-color: #058ccd;
               }
            </style>
            <li><a class="nav-link scrollto <?= $this->uri->segment(1) == "company" && $this->uri->segment(1) == "galeri" && $this->uri->segment(1) == "slider" ? "active" : ""; ?>" href="#contact"><button class="get-login"><i class="fa fa-user" style="font-size: 16px;"></i> Login</button></a></li>
            <style>
               .get-started {
                  color: #ffffff;
                  font-weight: 500;
                  background-color: #150757;
                  padding: 7px 12px;
                  box-shadow: 0px 4px 4px rgb(0 0 0 / 30%);
                  border: 0;
                  border-radius: 10px 0 10px 0;
                  border-color: #150757;
               }

               .get-started:hover {
                  color: #ffffff;
                  font-weight: 500;
                  background-color: #150757;
                  padding: 7px 12px;
                  box-shadow: 4px 3px 0px rgb(24 29 44);
                  border: 0;
                  border-radius: 10px 0 10px 0;
                  border-color: #150757;
               }
            </style>
            <li><a class="nav-link scrollto <?= $this->uri->segment(1) == "company" && $this->uri->segment(1) == "galeri" && $this->uri->segment(1) == "slider" ? "active" : ""; ?>" href="#contact"><button class="get-started">Get Started</button></a></li>
         </ul>
         <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>
   </div>
</header>