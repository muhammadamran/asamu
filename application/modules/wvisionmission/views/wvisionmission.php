<link rel="stylesheet" href="<?= base_url('assets/web/css/animate.css'); ?>" />
<link href="<?= base_url('assets/web/css/owl.carousel.css'); ?>" rel="stylesheet">
<link href="<?= base_url('assets/web/css/owl.theme.css'); ?>" rel="stylesheet">
<!-- <link rel="stylesheet" href="<?= base_url('assets/web/css/bootstrap.min.css'); ?>"> -->
<link rel="stylesheet" href="<?= base_url('assets/web/css/hover-min.css'); ?>">
<link rel="stylesheet" href="<?= base_url('assets/web/css/flag-icon.min.css'); ?>">
<link rel="stylesheet" href="<?= base_url('assets/web/css/style.css'); ?>">
<link rel="stylesheet" href="<?= base_url('assets/web/css/elegant_icon.css'); ?>">
<script src="<?= base_url('assets/web/js/jquery-3.2.1.min.js'); ?>"></script>
<link rel="stylesheet" href="<?= base_url('assets/web/fonts/font-awesome/css/font-awesome.min.css'); ?>">
<style>
   .hero-image {
      background-image: url("<?= base_url('modes/images/asamu/bg.png') ?>"), url("<?= base_url('modes/images/asamu/bg.png') ?>");
      background-color: #090078;
      background-position: center;
      background-repeat: no-repeat;
      background-size: cover;
      padding: 82px;
   }

   #headingOne {
      background: #150757;
   }

   #headingOne:hover {
      background: #aeb0ff;
   }

   #VM {
      font-weight: 700;
      text-transform: uppercase;
      color: #fff;
   }

   .TVM {
      text-align: center;
      font-family: monospace;
      font-size: 15px;
   }
</style>
<!-- HEADER -->
<div class="breadcrumb-area bg-img bg-black-overlay section-padding-130 hero-image">
   <div class="container">
      <div class="row justify-content-center">
         <div class="col-12 col-sm-9 col-xl-6">
            <div class="breadcrumb-content text-center">
               <div class="heading_container heading_center">
                  <h2>
                     VISION & <span>MISSION</span>
                  </h2>
                  <p>
                     There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration
                  </p>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<!-- END HEADER -->
<div class="padding-tb-100px" style="background: linear-gradient(67deg, transparent, #aeb0ff, transparent);">
   <div class="container">
      <div class="row">
         <div class="col-lg-8">
            <div id="accordion" class="nile-accordion sm-mb-45px">
               <div class="card">
                  <div class="card-header" id="headingOne">
                     <h5 class="mb-0">
                        <button class="btn btn-block btn-link active" id="VM" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne"><i class="fa fa-info-circle"></i> Vision</button>
                     </h5>
                  </div>
                  <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                     <div class="card-body">
                        <blockquote>
                           <font class="TVM"><?= $vision; ?></font>
                        </blockquote>
                     </div>
                  </div>
               </div>
               <div class="card">
                  <div class="card-header" id="headingOne">
                     <h5 class="mb-0">
                        <button class="btn btn-block btn-link active" id="VM" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne"><i class="fa fa-info-circle"></i> Mission</button>
                     </h5>
                  </div>
                  <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                     <div class="card-body">
                        <blockquote>
                           <font class="TVM"><?= $mission; ?></font>
                        </blockquote>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-lg-4">
            <div class="contact-modal">
               <div class="background-main-color">
                  <div class="padding-30px">
                     <div class="img-box aos-animate" data-aos="zoom-out" data-aos-delay="300">
                        <img src="<?= base_url('modes/images/about/photo/' . $a_photo); ?>" alt="" style="max-height: 435px;">
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<script src="<?= base_url('assets/web/js/YouTubePopUp.jquery.js'); ?>"></script>
<script src="<?= base_url('assets/web/js/owl.carousel.min.js'); ?>"></script>
<script src="<?= base_url('assets/web/js/imagesloaded.min.js'); ?>"></script>
<script src="<?= base_url('assets/web/js/custom.js'); ?>"></script>
<script src="<?= base_url('assets/web/js/popper.min.js'); ?>"></script>
<script src="<?= base_url('assets/web/js/bootstrap.min.js'); ?>"></script>