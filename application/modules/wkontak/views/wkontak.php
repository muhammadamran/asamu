<!--Inner Header Start-->
<section class="wf100 p100 inner-header">
   <div class="container">
      <h1>Kontak</h1>
      <ul>
         <li><a href="#"><i class="fa fa-home"></i> Beranda </a></li>
         <li><a href="#"><i class="fa fa-map"></i>  Kontak <?= $this->session->userdata('name'); ?> </a></li>
      </ul>
   </div>
</section>
<!--Inner Header End-->
<section class="contact-page wf100 p80">
   <div class="container">
      <div class="row">
         <div class="col-md-1"></div>
         <div class="col-md-12">
            <div class="google-map">
               <div class="contact-map-info">
                  <address>
                     <ul>
                        <li>
                           <strong class="add-title">Alamat:</strong>
                           <?= $address; ?>
                        </li>
                        <li>
                           <strong class="add-title">Hubungi:</strong>
                           <p><strong>Telepon:</strong> <?= $telp; ?></p>
                           <p><strong>Fax:</strong> <?= $fax; ?></p>
                        </li>
                        <li>
                           <strong class="add-title">Informasi Lebih Lanjut:</strong>
                           <p><strong>Email:</strong> <?= $email; ?></p>
                        </li>
                     </ul>
                  </address>
               </div>
               <?= $maps; ?>
            </div>
         </div>
      </div>
   </div>
</section>
<!--Causes End--> 