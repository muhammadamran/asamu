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
   <a href="#" class="active"><i>Digital Logistic Partner</i></a>
   <a href="#" class="right"><i class="fa fa-envelope"></i> Email Address</a>
   <a href="#" class="right"><i class="fa fa-phone"></i> Phone Number</a>
</div>
<!-- End Top Header -->
<header id="header" class="d-flex align-items-center">
   <div class="container d-flex justify-content-between">
      <div id="logo">
         <!-- Uncomment below if you prefer to use an image logo -->
         <a href="index.html"><img src="<?= base_url('modes/images/asamu/asamu-logo2.png'); ?>" alt=""></a>
      </div>
      <nav id="navbar" class="navbar">
         <ul>
            <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
            <li><a class="nav-link scrollto" href="#about">About</a></li>
            <li><a class="nav-link scrollto" href="#services">Services</a></li>
            <li><a class="nav-link scrollto " href="#portfolio">Portfolio</a></li>
            <li><a class="nav-link scrollto" href="#team">Team</a></li>
            <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>
               <ul>
                  <li><a href="#">Drop Down 1</a></li>
                  <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                     <ul>
                        <li><a href="#">Deep Drop Down 1</a></li>
                        <li><a href="#">Deep Drop Down 2</a></li>
                        <li><a href="#">Deep Drop Down 3</a></li>
                        <li><a href="#">Deep Drop Down 4</a></li>
                        <li><a href="#">Deep Drop Down 5</a></li>
                     </ul>
                  </li>
                  <li><a href="#">Drop Down 2</a></li>
                  <li><a href="#">Drop Down 3</a></li>
                  <li><a href="#">Drop Down 4</a></li>
               </ul>
            </li>
            <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
         </ul>
         <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>
   </div>
</header>