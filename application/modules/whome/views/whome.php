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
<section class="about_section layout_padding-bottom">
   <div class="container">
      <div class="row">
         <div class="col-md-5 ">
            <div class="img-box aos-animate" data-aos="zoom-out" data-aos-delay="300">
               <img src="<?= base_url('modes/images/about-img.jpg'); ?>" alt="" style="max-height: 435px;">
            </div>
         </div>
         <div class="col-md-7">
            <div class="detail-box">
               <div class="heading_container">
                  <h2>
                     About <span>Us</span>
                  </h2>
               </div>
               <p>
                  There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration
                  in some form, by injected humour, or randomised words which don't look even slightly believable. If you
                  are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in
                  the middle of text. All
               </p>
               <a href="">
                  Read More
               </a>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- End About Company -->
<!-- Services -->
<section class="service_section layout_padding" style="background-image: url(<?= base_url('modes/images/asamu/bg-2.png'); ?>);">
   <div class="service_container">
      <div class="container ">
         <div class="heading_container heading_center">
            <h2>
               Our <span>Services</span>
            </h2>
            <p>
               There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration
            </p>
         </div>
         <div class="row">
            <div class="col-sm-6 col-lg-4 ">
               <div class="box ">
                  <div class="img-box">
                     <img src="<?= base_url('modes/images/s1.png'); ?>" alt="">
                  </div>
                  <div class="detail-box">
                     <h5>
                        Oil & Gas Production
                     </h5>
                     <p>
                        fact that a reader will be distracted by the readable content of a page when looking at its layout.
                        The
                        point of using
                     </p>
                     <a href="">
                        Read More
                        <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
                     </a>
                  </div>
               </div>
            </div>
            <div class="col-sm-6 col-lg-4 ">
               <div class="box ">
                  <div class="img-box">
                     <img src="<?= base_url('modes/images/s2.png'); ?>" alt="">
                  </div>
                  <div class="detail-box">
                     <h5>
                        Mechanical Engineering
                     </h5>
                     <p>
                        fact that a reader will be distracted by the readable content of a page when looking at its layout.
                        The
                        point of using
                     </p>
                     <a href="">
                        Read More
                        <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
                     </a>
                  </div>
               </div>
            </div>
            <div class="col-sm-6 col-lg-4 ">
               <div class="box ">
                  <div class="img-box">
                     <img src="<?= base_url('modes/images/s3.png'); ?>" alt="">
                  </div>
                  <div class="detail-box">
                     <h5>
                        Chemical Research
                     </h5>
                     <p>
                        fact that a reader will be distracted by the readable content of a page when looking at its layout.
                        The
                        point of using
                     </p>
                     <a href="">
                        Read More
                        <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
                     </a>
                  </div>
               </div>
            </div>
            <div class="col-sm-6 col-lg-4 ">
               <div class="box ">
                  <div class="img-box">
                     <img src="<?= base_url('modes/images/s3.png'); ?>" alt="">
                  </div>
                  <div class="detail-box">
                     <h5>
                        Chemical Research
                     </h5>
                     <p>
                        fact that a reader will be distracted by the readable content of a page when looking at its layout.
                        The
                        point of using
                     </p>
                     <a href="">
                        Read More
                        <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
                     </a>
                  </div>
               </div>
            </div>
            <div class="col-sm-6 col-lg-4 ">
               <div class="box ">
                  <div class="img-box">
                     <img src="<?= base_url('modes/images/s4.png'); ?>" alt="">
                  </div>
                  <div class="detail-box">
                     <h5>
                        Power & Energy
                     </h5>
                     <p>
                        fact that a reader will be distracted by the readable content of a page when looking at its layout.
                        The
                        point of using
                     </p>
                     <a href="">
                        Read More
                        <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
                     </a>
                  </div>
               </div>
            </div>
            <div class="col-sm-6 col-lg-4 ">
               <div class="box ">
                  <div class="img-box">
                     <img src="<?= base_url('modes/images/s5.png'); ?>" alt="">
                  </div>
                  <div class="detail-box">
                     <h5>
                        Civil Engineering
                     </h5>
                     <p>
                        fact that a reader will be distracted by the readable content of a page when looking at its layout.
                        The
                        point of using
                     </p>
                     <a href="">
                        Read More
                        <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
                     </a>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- End Services -->
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
<!-- Contact us -->
<section class="contact_section">
   <div class="container-fluid">
      <div class="row">
         <div class="col-lg-4 col-md-5 offset-md-1">
            <div class="heading_container">
               <h2>
                  Send us an <span>email</span>
               </h2>
               <p>Let's Get In Touch! - <small style="font-size: 10px;font-weight:700;">I’d be happy to help and provide a solution for you</small></p>
            </div>
         </div>
      </div>
      <div class="row">
         <div class="col-lg-4 col-md-5 offset-md-1">
            <div class="form_container">
               <form action="">
                  <div>
                     <input type="text" placeholder="Your Name" />
                  </div>
                  <div>
                     <input type="text" placeholder="Phone Number" />
                  </div>
                  <div>
                     <input type="email" placeholder="Email" />
                  </div>
                  <div>
                     <input type="text" class="message-box" placeholder="Message" />
                  </div>
                  <div class="btn_box">
                     <button>
                        SEND
                     </button>
                  </div>
               </form>
            </div>
         </div>
         <div class="col-lg-7 col-md-6 px-0">
            <div class="map_container">
               <div class="map">
                  <!-- <div id="googleMap"></div> -->
                  <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d495.72377043043747!2d106.803621!3d-6.291287!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f1e6f0a64c15%3A0x623a0f8bf591c886!2sTalavera%20Office%20Park!5e0!3m2!1sen!2sid!4v1632832899417!5m2!1sen!2sid" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- End Contact us -->