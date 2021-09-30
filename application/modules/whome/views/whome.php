<!-- Slider -->
<div id="carousel" class="carousel slide" data-ride="carousel">
   <ol class="carousel-indicators">
      <?php if ($sliders) : $no = 0;
         foreach ($sliders as $row) : $no++; ?>
            <?php if ($no == 1) { ?>
               <li data-target="#carousel" data-slide-to="<?= $no; ?>" class="active"></li>
            <?php } else { ?>
               <li data-target="#carousel" data-slide-to="<?= $no; ?>" class=""></li>
            <?php } ?>
         <?php endforeach ?>
      <?php else : ?>
         <li data-target="#carousel" data-slide-to="0" class="active"></li>
      <?php endif ?>
   </ol>
   <div class="carousel-inner">
      <?php if ($sliders) : $no = 0;
         foreach ($sliders as $row) : $no++; ?>
            <?php if ($no == 1) { ?>
               <div class="carousel-item active">
                  <img src="<?= base_url('modes/images/sliders/' . $row['photo']); ?>" alt="Carousel Image">
                  <div class="carousel-caption">
                     <p class="animated fadeInRight"><?= $row['slogan_one']; ?></p>
                     <h1 class="animated fadeInLeft"><?= $row['slogan_two']; ?></h1>
                     <a class="btn animated fadeInUp" href="#!">Get Started</a>
                  </div>
               </div>
            <?php } else { ?>
               <div class="carousel-item">
                  <img src="<?= base_url('modes/images/sliders/' . $row['photo']); ?>" alt="Carousel Image">
                  <div class="carousel-caption">
                     <p class="animated fadeInRight"><?= $row['slogan_one']; ?></p>
                     <h1 class="animated fadeInLeft"><?= $row['slogan_two']; ?></h1>
                     <a class="btn animated fadeInUp" href="#!">Get Started</a>
                  </div>
               </div>
            <?php } ?>
         <?php endforeach ?>
      <?php else : ?>
         <div class="carousel-item active">
            <img src="https://karangsari-sukodono.lumajangkab.go.id/assets-front/images/image-not-found.jpg" alt="Carousel Image">
            <div class="carousel-caption">
               <p class="animated fadeInRight">-</p>
               <h1 class="animated fadeInLeft">-</h1>
               <a class="btn animated fadeInUp" href="#!">Get Started</a>
            </div>
         </div>
      <?php endif ?>
   </div>
   <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
   </a>
   <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
   </a>
</div>
<!-- End Slider -->
<!-- About Company -->
<section class="about_section layout_padding-bottom" style="margin-top: 60px;">
   <div class="container">
      <div class="row">
         <div class="col-md-5 ">
            <div class="img-box aos-animate" data-aos="zoom-out" data-aos-delay="300">
               <img src="<?= base_url('modes/images/about/photo/' . $a_photo); ?>" alt="" style="max-height: 435px;">
            </div>
         </div>
         <div class="col-md-7">
            <div class="detail-box">
               <div class="heading_container">
                  <h2>
                     <?= $a_title; ?>
                  </h2>
               </div>
               <p align="justify">
                  <?= $a_detail; ?>
               </p>
               <a href="<?= base_url('wabout'); ?>">
                  Read More
               </a>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- End About Company -->
<!-- Product -->
<section class="testimonial lazy-bg bg-loaded" style="background-image: url(<?= base_url('modes/images/asamu/bgg.png'); ?>);">
   <div class="container text-white text-primary">
      <div class="heading_container heading_center">
         <h2>
            <?= $p_title_one; ?> <span><?= $p_title_two; ?></span>
         </h2>
         <p>
            <?= $p_detail; ?>
         </p>
      </div>
      <hr>
      <div class="row" style="margin-top: 50px">
         <!-- IF 1 = 12; IF 2 = 6; IF 3 = 4; IF 5 = 3; IF 6 = 4-->
         <style>
            .lp-back {
               width: 100px;
               height: 100px;
               background: #eee;
               border-radius: 100%;
               z-index: -9999;
            }
         </style>
         <?php if ($lp_product) : $no = 0;
            foreach ($lp_product as $row_lproduct) : $no++; ?>
               <?php if ($t_lproduct == '1') { ?>
                  <div class="col-lg-12 text-center">
                     <div class="icon-box text-center effect mb-0">
                        <img src="<?= base_url('modes/images/product/photo/' . $row_lproduct['photo']); ?>" alt="" class="lp-back">
                        <h2 class="product-home"><?= $row_lproduct['title']; ?></h2>
                        <p class="lead-home"><?= $row_lproduct['detail']; ?></p>
                     </div>
                  </div>
               <?php } else if ($t_lproduct == '2') { ?>
                  <div class="col-lg-6 text-center">
                     <div class="icon-box text-center effect mb-0">
                        <img src="<?= base_url('modes/images/product/photo/' . $row_lproduct['photo']); ?>" alt="" class="lp-back">
                        <h2 class="product-home"><?= $row_lproduct['title']; ?></h2>
                        <p class="lead-home"><?= $row_lproduct['detail']; ?></p>
                     </div>
                  </div>
               <?php } else if ($t_lproduct == '3') { ?>
                  <div class="col-lg-4 text-center">
                     <div class="icon-box text-center effect mb-0">
                        <img src="<?= base_url('modes/images/product/photo/' . $row_lproduct['photo']); ?>" alt="" class="lp-back">
                        <h2 class="product-home"><?= $row_lproduct['title']; ?></h2>
                        <p class="lead-home"><?= $row_lproduct['detail']; ?></p>
                     </div>
                  </div>
               <?php } else { ?>
                  <div class="col-lg-4 text-center">
                     <div class="icon-box text-center effect mb-0">
                        <img src="<?= base_url('modes/images/product/photo/' . $row_lproduct['photo']); ?>" alt="" class="lp-back">
                        <h2 class="product-home"><?= $row_lproduct['title']; ?></h2>
                        <p class="lead-home"><?= $row_lproduct['detail']; ?></p>
                     </div>
                  </div>
               <?php }  ?>
            <?php endforeach ?>
         <?php else : ?>
            <div class="col-lg-12 text-center">
               <div class="icon-box text-center effect mb-0">
                  <img src="https://karangsari-sukodono.lumajangkab.go.id/assets-front/images/image-not-found.jpg" alt="">
                  <h2 class="product-home">-</h2>
                  <p class="lead-home">-</p>
               </div>
            </div>
         <?php endif ?>
      </div>
   </div>
</section>
<!-- End Product -->
<!-- Services -->
<section class="about_section layout_padding-bottom">
   <div class="container">
      <div class="heading_container heading_center" style="margin-bottom: 50px">
         <h2>
            Our <span>Services</span>
         </h2>
         <p>
            There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration
         </p>
      </div>
      <div class="row">
         <div class="col-md-7">
            <div class="detail-box">
               <div class="heading_container">
                  <h2>
                     About
                  </h2>
               </div>
               <p align="justify">
                  There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration
                  in some form, by injected humour, or randomised words which don't look even slightly believable. If you
                  are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in
                  the middle of text. All
               </p>
            </div>
            <div class="detail-box">
               <div class="heading_container">
                  <h2>
                     About
                  </h2>
               </div>
               <p align="justify">
                  There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration
                  in some form, by injected humour, or randomised words which don't look even slightly believable. If you
                  are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in
                  the middle of text. All
               </p>
            </div>
         </div>
         <div class="col-md-5 ">
            <div id="carousel" class="services-home slide" data-ride="carousel">
               <ol class="carousel-indicators">
                  <?php if ($sliders) : $no = 0;
                     foreach ($sliders as $row) : $no++; ?>
                        <?php if ($no == 1) { ?>
                           <li data-target="#carousel" data-slide-to="<?= $no; ?>" class="active"></li>
                        <?php } else { ?>
                           <li data-target="#carousel" data-slide-to="<?= $no; ?>" class=""></li>
                        <?php } ?>
                     <?php endforeach ?>
                  <?php else : ?>
                     <li data-target="#carousel" data-slide-to="0" class="active"></li>
                  <?php endif ?>
               </ol>
               <div class="services-inner">
                  <?php if ($sliders) : $no = 0;
                     foreach ($sliders as $row) : $no++; ?>
                        <?php if ($no == 1) { ?>
                           <div class="carousel-item active">
                              <img src="<?= base_url('modes/images/sliders/' . $row['photo']); ?>" alt="Carousel Image">
                              <div class="services-caption">
                                 <h4 class="animated fadeInLeft" style="text-transform: uppercase;font-weight:600"><?= $row['slogan_two']; ?></h4>
                                 <p class="animated fadeInRight" style="margin-top: -18px;margin-bottom: 35px"><?= $row['slogan_one']; ?></p>
                                 <a class="btn animated fadeInUp" href="#!">Learn more</a>
                              </div>
                           </div>
                        <?php } else { ?>
                           <div class="carousel-item">
                              <img src="<?= base_url('modes/images/sliders/' . $row['photo']); ?>" alt="Carousel Image">
                              <div class="services-caption">
                                 <h4 class="animated fadeInLeft" style="text-transform: uppercase;font-weight:600"><?= $row['slogan_two']; ?></h4>
                                 <p class="animated fadeInRight" style="margin-top: -18px;margin-bottom: 35px"><?= $row['slogan_one']; ?></p>
                                 <a class="btn animated fadeInUp" href="#!">Learn more</a>
                              </div>
                           </div>
                        <?php } ?>
                     <?php endforeach ?>
                  <?php else : ?>
                     <div class="carousel-item active">
                        <img src="https://karangsari-sukodono.lumajangkab.go.id/assets-front/images/image-not-found.jpg" alt="Carousel Image">
                        <div class="services-caption">
                           <h4 class="animated fadeInLeft" style="text-transform: uppercase;font-weight:600">-</h4>
                           <p class="animated fadeInRight" style="margin-top: -18px;margin-bottom: 35px">-</p>
                           <a class="btn animated fadeInUp" href="#!">Learn more</a>
                        </div>
                     </div>
                  <?php endif ?>
               </div>
               <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
               </a>
               <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
               </a>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- End Services -->
<!-- Cont -->
<section class="why_us_section layout_padding">
   <div class="why_bg_box">
      <img src="<?= base_url('modes/images/asamu/bg-1.png'); ?>" alt="">
   </div>
   <div class="why_us_container">
      <div class="container">
         <div class="box_container">
            <div class="row">
               <div class="col-sm-6 col-md-3">
                  <div class="box">
                     <div class="num-box">
                        <span id="countDay" class="count" data-toggle="counter-up">
                           3850
                        </span>
                     </div>
                     <h5>
                        Hours Of Work
                     </h5>
                  </div>
               </div>
               <div class="col-sm-6 col-md-3">
                  <div class="box">
                     <div class="num-box">
                        <span id="countSec" class="count">
                           219
                        </span>
                     </div>
                     <h5>
                        Projects Completed
                     </h5>
                  </div>
               </div>
               <div class="col-sm-6 col-md-3">
                  <div class="box">
                     <div class="num-box">
                        <span id="countMin" class="count">
                           16
                        </span>
                     </div>
                     <h5>
                        Industries Served
                     </h5>
                  </div>
               </div>
               <div class="col-sm-6 col-md-3">
                  <div class="box">
                     <div class="num-box">
                        <span id="countHour" class="count">
                           198
                        </span>
                     </div>
                     <h5>
                        Satisfied Clients
                     </h5>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- End Cont -->
<!-- Our Clients -->
<section id="clients" class="section-bg">
   <div class="container">
      <div class="heading_container heading_center">
         <h2>
            Our <span>Services</span>
         </h2>
         <p>
            There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration
         </p>
      </div>
      <br>
      <div class="row no-gutters clients-wrap clearfix wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
         <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="client-logo"> <img src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1559460149/abof.png" class="img-fluid" alt=""> </div>
         </div>
         <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="client-logo"> <img src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1559460224/cropped-cropped-20170720-lucuLogo-squ2-e1500543540803.png" class="img-fluid" alt=""> </div>
         </div>
         <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="client-logo"> <img src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1559460269/104840a62d46c05d285762857fecb61a.png" class="img-fluid" alt=""> </div>
         </div>
         <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="client-logo"> <img src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1559460358/client-4.png" class="img-fluid" alt=""> </div>
         </div>
         <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="client-logo"> <img src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1559460379/client-5.png" class="img-fluid" alt=""> </div>
         </div>
         <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="client-logo"> <img src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1559460398/client-6.png" class="img-fluid" alt=""> </div>
         </div>
         <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="client-logo"> <img src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1559460418/client-7.png" class="img-fluid" alt=""> </div>
         </div>
         <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="client-logo"> <img src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1559460418/client-7.png" class="img-fluid" alt=""> </div>
         </div>
      </div>
   </div>
</section>
<!-- End Our Clients -->