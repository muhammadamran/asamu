<!-- Subcribe -->
<section class="info_section layout_padding2" style="background-image: url(<?= base_url('modes/images/asamu/bg-3.png'); ?>);">
   <div class="container">
      <div class="row">
         <div class="col-md-6 col-lg-6 info_col">
            <div class="info_contact">
               <h4>
                  Get Free Weekly Latest Export Import News
               </h4>
               <p>
                  Subscribe for the latest news on trade lanes, customs and tariff changes, and expert economic insight.
               </p>
            </div>
         </div>
         <div class="col-md-6 col-lg-6 info_col ">
            <h4>
               Subscribe
            </h4>
            <form action="#">
               <input type="text" placeholder="Enter email" />
               <button type="submit">
                  Subscribe
               </button>
            </form>
         </div>
      </div>
   </div>
</section>
<!-- End Subcribe -->
<section class="info_section layout_padding2">
   <div class="container">
      <div class="row">
         <div class="col-md-6 col-lg-3 info_col">
            <div class="info_detail">
               <style>
                  .footer-asamu-logo {
                     padding: 10px 10px 10px 10px;
                     background: #fff;
                     border-radius: 0px;
                  }
               </style>
               <h4 class="footer-asamu-logo">
                  <img src="<?= base_url('modes/images/asamu/logo/' . $logo); ?>" style="width: 100%;height: auto;">
               </h4>
               <p align="justify" style="margin-bottom: 5px">
                  <?= $address; ?>
               </p>
               <b style="font-size: 10px;"><i>" <?= $slogan; ?>"</i></b>
               <div class="info_social">
                  <a href="<?= $facebook; ?>" target="_blank">
                     <i class="fa fa-facebook" aria-hidden="true"></i>
                  </a>
                  <a href="<?= $twitter; ?>" target="_blank">
                     <i class="fa fa-twitter" aria-hidden="true"></i>
                  </a>
                  <a href="<?= $linked; ?>" target="_blank">
                     <i class="fa fa-linkedin" aria-hidden="true"></i>
                  </a>
                  <a href="<?= $instagram; ?>" target="_blank">
                     <i class="fa fa-instagram" aria-hidden="true"></i>
                  </a>
                  <a href="<?= $youtube; ?>" target="_blank">
                     <i class="fa fa-youtube" aria-hidden="true"></i>
                  </a>
                  <a href="<?= $google; ?>" target="_blank">
                     <i class="fa fa-google" aria-hidden="true"></i>
                  </a>
               </div>
            </div>
         </div>
         <div class="col-md-6 col-lg-3 info_col">
            <div class="info_link_box">
               <h4>
                  Company
               </h4>
               <div class="info_links">
                  <a class="active" href="<?= base_url(''); ?>">
                     About Asamu Solusi Mandiri
                  </a>
                  <a class="" href="service.html">
                     Vision & Mission
                  </a>
               </div>
            </div>
         </div>
         <div class="col-md-6 col-lg-3 info_col">
            <div class="info_contact">
               <h4>
                  Services
               </h4>
               <div class="info_links">
                  <a class="active" href="<?= base_url(''); ?>">
                     About Asamu Solusi Mandiri
                  </a>
                  <a class="" href="service.html">
                     Vision & Mission
                  </a>
               </div>
            </div>
         </div>
         <div class="col-md-6 col-lg-3 info_col">
            <div class="info_contact">
               <h4>
                  Team
               </h4>
               <div class="info_links">
                  <a class="active" href="<?= base_url(''); ?>">
                     Team of Expert
                  </a>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<footer id="footer">
   <div class="container">
      <div class="copyright">
         &copy; Copyright 2021 - <?= date('Y'); ?> <strong><?= $name; ?></strong>. All Rights Reserved
      </div>
      <div class="credits">
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
</footer><!-- End Footer -->
<a href="#" class="back-to-top d-flex align-items-center justify-content-center active"><i class="bi bi-arrow-up-short"></i></a>
<!-- <script type="text/javascript" src="<?= base_url('modes/js/jquery-3.4.1.min.js'); ?>"></script> -->
<!-- <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script> -->
<script type="text/javascript" src="<?= base_url('modes/js/bootstrap.js'); ?>"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<!-- <script type="text/javascript" src="<?= base_url('modes/js/custom.js'); ?>"></script> -->
<!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap"></script> -->
<!-- INBASE ASSETS -->
<script src="<?= base_url('modes/inbase/vendor/aos/aos.js'); ?>"></script>
<script src="<?= base_url('modes/inbase/vendor/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
<script src="<?= base_url('modes/inbase/vendor/glightbox/js/glightbox.min.js'); ?>"></script>
<script src="<?= base_url('modes/inbase/vendor/isotope-layout/isotope.pkgd.min.js'); ?>"></script>
<script src="<?= base_url('modes/inbase/vendor/php-email-form/validate.js'); ?>"></script>
<script src="<?= base_url('modes/inbase/vendor/swiper/swiper-bundle.min.js'); ?>"></script>
<script src="<?= base_url('modes/inbase/js/main.js'); ?>"></script>
</body>

</html>