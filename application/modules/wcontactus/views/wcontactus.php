<link rel="stylesheet" href="<?= base_url('assets/web/css/style.css'); ?>">
<!-- HEADER -->
<div class="breadcrumb-area bg-img bg-black-overlay section-padding-130 hero-image">
   <div class="container">
      <div class="row justify-content-center">
         <div class="col-12 col-sm-9 col-xl-6">
            <div class="breadcrumb-content text-center">
               <div class="heading_container heading_center">
                  <h2>
                     CONTACT <span>US</span>
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
<!-- CONTACT US -->
<section class="contact_section" style="margin-bottom: -75px">
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
                  <?= $maps; ?>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- End CONTACT US -->