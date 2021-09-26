         <?php
            $actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
         ?>
         <!--Footer Start-->
         <?php if ($this->session->userdata('title') == NULL) { ?>
            <footer class="h3footer wf100">
               <div class="container">
                  <div class="row"> 
                     <!--Footer Subscribe Sekarang-->
                        <div class="col-md-4 col-sm-12">
                        </div>
                        <div class="col-md-4 col-sm-12">
                           <!-- NOTIFIKASI -->
                           <?php if ($this->session->flashdata('subscribe')): ?>
                              <style>
                                 .alert {
                                    display: flex;
                                    padding: 10px 10px 38px;
                                    left: 3px;
                                    margin-bottom: -30px;
                                 }
                                 .alert-success {
                                    background-color: #20b1aa;
                                    border-radius: 7px;
                                    padding: 15px 5px 0 15px;
                                 }
                                 .alert-warning {
                                    background-color: #f9a938;
                                    border-radius: 7px;
                                    padding: 15px 5px 0 15px;
                                 }
                                 .alert-danger {
                                    background-color: #dc3545;
                                    border-radius: 7px;
                                    padding: 15px 5px 0 15px;
                                 }
                                 .closebtn {
                                    margin-left: 15px;
                                    color: white;
                                    font-weight: bold;
                                    float: right;
                                    font-size: 22px;
                                    line-height: 20px;
                                    cursor: pointer;
                                    transition: 0.3s;
                                 }
                              </style>
                              <div class="row alert">
                                 <div class="col-lg-12 alert-success">
                                    <h4 style="color: #fff;"><i class="fa fa-info-circle"></i> Informasi!</h4><hr>
                                    <p style="color: #fff;">Terimakasih atas subscribe anda!</p>
                                 </div>
                              </div>
                           <?php endif; ?>
                           <?php if ($this->session->flashdata('gagal')): ?>
                              <style>
                                 .alert {
                                    display: flex;
                                    padding: 10px 10px 38px;
                                    left: 3px;
                                    margin-bottom: -30px;
                                 }
                                 .alert-success {
                                    background-color: #20b1aa;
                                    border-radius: 7px;
                                    padding: 15px 5px 0 15px;
                                 }
                                 .alert-warning {
                                    background-color: #f9a938;
                                    border-radius: 7px;
                                    padding: 15px 5px 0 15px;
                                 }
                                 .alert-danger {
                                    background-color: #dc3545;
                                    border-radius: 7px;
                                    padding: 15px 5px 0 15px;
                                 }
                                 .closebtn {
                                    margin-left: 15px;
                                    color: white;
                                    font-weight: bold;
                                    float: right;
                                    font-size: 22px;
                                    line-height: 20px;
                                    cursor: pointer;
                                    transition: 0.3s;
                                 }
                              </style>
                              <div class="row alert">
                                 <div class="col-lg-12 alert-danger">
                                    <h4 style="color: #fff;"><i class="fa fa-info-circle"></i> Informasi!</h4><hr>
                                    <p style="color: #fff;">Mohon maaf, Email anda sudah terdaftar!</p>
                                 </div>
                              </div>
                           <?php endif; ?>
                           <!-- END NOTIFIKASI -->
                           <!-- <div class="footer-widget">
                              <h3>Subscribe Sekarang</h3>
                              <div class="newsletter">
                                 <form action="<?php // base_url('subscribe/adding');?>" method="POST">
                                    <ul>
                                       <li>
                                          <input type="text" name="name" placeholder="Nama Lengkap" required>
                                       </li>
                                       <li>
                                          <input type="text" name="email" placeholder="Alamat Email" required>
                                          <input type="hidden" name="created_date" value="<?php // date('Y-m-d h:m:i') ?>">
                                          <input type="hidden" name="urlpage" value="<?php // $actual_link ?>">
                                       </li>
                                       <li>
                                          <style>
                                             .subscribe {
                                                width: 100%;
                                                border-radius: 0px;
                                                color: #fff;
                                                background: #20b1aa;
                                                cursor: pointer;
                                                background: #20b1aa;
                                                color: #fff;
                                                text-transform: uppercase;
                                                font-family: 'Poppins', sans-serif;
                                                font-weight: 600;
                                                height: 50px;
                                                line-height: 50px;
                                                border: 0px;
                                                border-radius: 0;
                                                padding: 0 20px;
                                             }
                                             .subscribe:hover {
                                                width: 100%;
                                                border-radius: 0px;
                                                color: #fff;
                                                background: #037f79;
                                                cursor: pointer;
                                                background: #037f79;
                                                color: #fff;
                                                text-transform: uppercase;
                                                font-family: 'Poppins', sans-serif;
                                                font-weight: 600;
                                                height: 50px;
                                                line-height: 50px;
                                                border: 0px;
                                                border-radius: 0;
                                                padding: 0 20px;
                                             }
                                          </style>
                                          <button type="submit" class="subscribe">Subscribe</button>
                                       </li>
                                    </ul>
                                 </form>
                              </div>
                           </div> -->
                        </div>
                        <div class="col-md-4 col-sm-12">
                        </div>
                     <!--Footer Subscribe Sekarang End--> 
                  </div>
                  <div class="row footer-copyr">
                     <div class="col-md-4 col-sm-4"> <img src="<?= base_url('assets/images/logo-svg.png')?>" alt=""> </div>
                     <div class="col-md-8 col-sm-8">
                           <p><a href="#" style="color: #fff"><?= $this->session->userdata('footer');?></a></p>
                        </div>
                  </div>
               </div>
            </footer>
         <?php } else { ?>
            <footer class="h3footer wf100">
               <div class="container">
                  <div class="row"> 
                     <!--Footer Title & Motto--> 
                        <div class="col-md-6 col-sm-6">
                           <div class="footer-widget">
                              <h3><?= $this->session->userdata('title');?></h3>
                              <p> <?= $this->session->userdata('motto');?></p>
                           </div>
                        </div>
                     <!--Footer Title & Motto End --> 
                     <!--Footer Subscribe Sekarang-->
                        <div class="col-md-6 col-sm-12">
                           <!-- NOTIFIKASI -->
                           <?php if ($this->session->flashdata('subscribe')): ?>
                              <style>
                                 .alert {
                                    display: flex;
                                    padding: 10px 10px 38px;
                                    left: 3px;
                                    margin-bottom: -30px;
                                 }
                                 .alert-success {
                                    background-color: #20b1aa;
                                    border-radius: 7px;
                                    padding: 15px 5px 0 15px;
                                 }
                                 .alert-warning {
                                    background-color: #f9a938;
                                    border-radius: 7px;
                                    padding: 15px 5px 0 15px;
                                 }
                                 .alert-danger {
                                    background-color: #dc3545;
                                    border-radius: 7px;
                                    padding: 15px 5px 0 15px;
                                 }
                                 .closebtn {
                                    margin-left: 15px;
                                    color: white;
                                    font-weight: bold;
                                    float: right;
                                    font-size: 22px;
                                    line-height: 20px;
                                    cursor: pointer;
                                    transition: 0.3s;
                                 }
                              </style>
                              <div class="row alert">
                                 <div class="col-lg-12 alert-success">
                                    <h4 style="color: #fff;"><i class="fa fa-info-circle"></i> Informasi!</h4><hr>
                                    <p style="color: #fff;">Terimakasih atas subscribe anda!</p>
                                 </div>
                              </div>
                           <?php endif; ?>
                           <?php if ($this->session->flashdata('gagal')): ?>
                              <style>
                                 .alert {
                                    display: flex;
                                    padding: 10px 10px 38px;
                                    left: 3px;
                                    margin-bottom: -30px;
                                 }
                                 .alert-success {
                                    background-color: #20b1aa;
                                    border-radius: 7px;
                                    padding: 15px 5px 0 15px;
                                 }
                                 .alert-warning {
                                    background-color: #f9a938;
                                    border-radius: 7px;
                                    padding: 15px 5px 0 15px;
                                 }
                                 .alert-danger {
                                    background-color: #dc3545;
                                    border-radius: 7px;
                                    padding: 15px 5px 0 15px;
                                 }
                                 .closebtn {
                                    margin-left: 15px;
                                    color: white;
                                    font-weight: bold;
                                    float: right;
                                    font-size: 22px;
                                    line-height: 20px;
                                    cursor: pointer;
                                    transition: 0.3s;
                                 }
                              </style>
                              <div class="row alert">
                                 <div class="col-lg-12 alert-danger">
                                    <h4 style="color: #fff;"><i class="fa fa-info-circle"></i> Informasi!</h4><hr>
                                    <p style="color: #fff;">Mohon maaf, Email anda sudah terdaftar!</p>
                                 </div>
                              </div>
                           <?php endif; ?>
                           <!-- END NOTIFIKASI -->
                           <!-- <div class="footer-widget">
                              <h3>Subscribe Sekarang</h3>
                              <div class="newsletter">
                                 <form action="<?php // base_url('subscribe/adding');?>" method="POST">
                                    <ul>
                                       <li>
                                          <input type="text" name="name" placeholder="Nama Lengkap" required>
                                       </li>
                                       <li>
                                          <input type="text" name="email" placeholder="Alamat Email" required>
                                          <input type="hidden" name="created_date" value="<?php // date('Y-m-d h:m:i') ?>">
                                          <input type="hidden" name="urlpage" value="<?php // $actual_link ?>">
                                       </li>
                                       <li>
                                          <style>
                                             .subscribe {
                                                width: 100%;
                                                border-radius: 0px;
                                                color: #fff;
                                                background: #20b1aa;
                                                cursor: pointer;
                                                background: #20b1aa;
                                                color: #fff;
                                                text-transform: uppercase;
                                                font-family: 'Poppins', sans-serif;
                                                font-weight: 600;
                                                height: 50px;
                                                line-height: 50px;
                                                border: 0px;
                                                border-radius: 0;
                                                padding: 0 20px;
                                             }
                                             .subscribe:hover {
                                                width: 100%;
                                                border-radius: 0px;
                                                color: #fff;
                                                background: #037f79;
                                                cursor: pointer;
                                                background: #037f79;
                                                color: #fff;
                                                text-transform: uppercase;
                                                font-family: 'Poppins', sans-serif;
                                                font-weight: 600;
                                                height: 50px;
                                                line-height: 50px;
                                                border: 0px;
                                                border-radius: 0;
                                                padding: 0 20px;
                                             }
                                          </style>
                                          <button type="submit" class="subscribe">Subscribe</button>
                                       </li>
                                    </ul>
                                 </form>
                              </div>
                           </div> -->
                        </div>
                     <!--Footer Subscribe Sekarang End--> 
                  </div>
                  <div class="row footer-copyr">
                     <div class="col-md-4 col-sm-4"> <img src="<?= base_url('assets/images/logo-svg.png')?>" alt=""> </div>
                     <div class="col-md-8 col-sm-8">
                           <p><a href="#" style="color: #fff"><?= $this->session->userdata('footer');?></a></p>
                        </div>
                  </div>
               </div>
            </footer>
         <?php } ?>
         <!--Footer End--> 
      </div>
      <!-- JS Files Start  --> 
      <script src="<?= base_url('assuts/js/jquery-3.3.1.min.js');?>"></script> 
      <script src="<?= base_url('assuts/js/jquery-migrate-1.4.1.min.js');?>"></script> 
      <script src="<?= base_url('assuts/js/popper.min.js');?>"></script> 
      <script src="<?= base_url('assuts/js/bootstrap.min.js');?>"></script> 
      <script src="<?= base_url('assuts/js/owl.carousel.min.js');?>"></script> 
      <script src="<?= base_url('assuts/js/jquery.prettyPhoto.js');?>"></script> 
      <script src="<?= base_url('assuts/js/isotope.min.js');?>"></script> 
      <script src="<?= base_url('assuts/js/custom.js');?>"></script>

      <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
      <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
      <script src="https://cdn.datatables.net/buttons/1.7.1/js/dataTables.buttons.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
      <script src="https://cdn.datatables.net/buttons/1.7.1/js/buttons.html5.min.js"></script>
      <script src="https://cdn.datatables.net/buttons/1.7.1/js/buttons.print.min.js"></script>
      <script src="https://cdn.datatables.net/select/1.3.3/js/dataTables.select.min.js"></script>
   </body>
</html>