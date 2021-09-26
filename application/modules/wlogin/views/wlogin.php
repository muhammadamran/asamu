<!--Inner Header Start-->
   <section class="wf100 p100 inner-header">
      <div class="container">
         <h1>Profile</h1>
         <ul>
            <li><a href="#"><i class="fa fa-home"></i> Beranda </a></li>
            <li><a href="#"><i class="fa fa-user"></i>  Profile </a></li>
         </ul>
      </div>
   </section>
<!--Inner Header End-->
<!-- NOTIFIKASI TOAST -->
   <?php if ($this->session->flashdata('f_sigin')): ?>
   <script type="text/javascript">
      window.onload = function(){
         document.getElementById('clickButtonWarning').click();
      }
      function warning() {
         toastr.warning("Maaf nama pengguna atau kata sandi Anda salah, silakan coba lagi!","Information", {
            'closeButton': true,
            'newestOnTop': false,
            'progressBar': true,
            'positionClass': "toast-top-right"
         })
      }
   </script>
   <button type="button" id="clickButtonWarning" class="btn btn-sm btn-warning" onclick="warning()" style="display:none">warning</button>
   <?php endif; ?>

   <?php if ($this->session->flashdata('f_role')): ?>
   <script type="text/javascript">
      window.onload = function(){
         document.getElementById('clickButtonError').click();
      }
      function error() {
         toastr.error("Sorry your username or password is wrong, Please Try Again!","Information", {
            'closeButton': true,
            'newestOnTop': false,
            'progressBar': true,
            'positionClass': "toast-top-right"
         })
      }
   </script>
   <button type="button" id="clickButtonError" class="btn btn-sm btn-error" onclick="error()" style="display:none">error</button>
   <?php endif; ?>
<!-- END NOTIFIKASI TOAST --> 
<!--Causes Start-->
   <section class="wf100 p80">
      <div class="container">
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
         <?php if ($this->session->flashdata('wl_success')): ?>
            <div class="row alert">
               <div class="col-lg-8 alert-success">
                  <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
                  <h4 style="color: #fff;"><i class="fa fa-info-circle"></i> Informasi!</h4><hr>
                  <p style="color: #fff;">Akun anda telah berhasil dibuat, silahkan login ke akun anda!</p>
               </div>
            </div>
         <?php endif; ?>
         <?php if ($this->session->flashdata('wl_warning')): ?>
            <div class="row alert">
               <div class="col-lg-8 alert-warning">
                  <h4 style="color: #000;"><i class="fa fa-info-circle"></i> Informasi!</h4><hr>
                  <p style="color: #000;">Data Anda sudah tersedia di sistem, pastikan email dan username Anda tidak terdaftar!</p>
               </div>
            </div>
         <?php endif; ?>
         <?php if ($this->session->flashdata('wl_danger')): ?>
            <div class="row alert">
               <div class="col-lg-8 alert-danger">
                  <h4 style="color: #fff;"><i class="fa fa-info-circle"></i> Informasi!</h4><hr>
                  <p style="color: #fff;">Terjadi kesalahan saat mendaftarkan akun Anda, silakan periksa lagi!</p>
               </div>
            </div>
         <?php endif; ?>
         <div class="row">
            <div class="col-lg-8">
               <div class="myaccount-form">
                  <h3>Daftar Akun</h3>
                  <form action="<?= base_url('wlogin/registration');?>" method="POST">
                     <ul class="row">
                        <li class="col-md-6">
                           <div class="input-group">
                              <input type="hidden" class="form-control" name="role" value="masyarakat">
                              <input type="text" class="form-control" name="full_name" placeholder="Nama Lengkap" required>
                           </div>
                        </li>
                        <li class="col-md-6">
                           <div class="input-group">
                              <input type="text" class="form-control" name="phone" placeholder="No. Handphone" required>
                           </div>
                        </li>
                        <li class="col-md-6">
                           <div class="input-group">
                              <input type="email" class="form-control" name="email" placeholder="Alamat Email" required>
                           </div>
                        </li>
                        <li class="col-md-6">
                           <div class="input-group">
                              <input type="text" class="form-control" name="username" placeholder="Username" required>
                              <input type="hidden" class="form-control" name="kode" value="N-REG-<?= date('my') ?>-<?= substr(uniqid(),5); ?>">
                           </div>
                        </li>
                        <li class="col-md-6">
                           <div class="input-group">
                              <input type="password" id="Password" class="form-control" name="password" placeholder="Password" required>
                           </div>
                        </li>
                        <li class="col-md-6">
                           <div class="input-group">
                              <input type="password" id="ConfirmPassword" name="confirm_passww" class="form-control" name="confirm_password" placeholder="Konfirmasi Password" required>
                           </div>
                           <div class="input-group">
                              <span id="CheckPasswordMatch" style="margin-top: -35px;font-style:italic;"></span>
                           </div>
                        </li>
                        <li class="col-md-12" style="margin-top: -20px;">
                           <div class="input-group form-check">
                              <input type="checkbox" class="form-check-input" id="exampleCheck1" required>
                              <label class="form-check-label" for="exampleCheck1">Saya setuju dengan Ketentuan <a href="#">Layanan & Kebijakan Privasi</a></label>
                           </div>
                        </li>
                        <li class="col-md-12">
                           <button class="register">Daftar Akun</button>
                        </li>
                     </ul>
                  </form>
               </div>
            </div>
            <div class="col-lg-4">
               <div class="login-box">
                  <h3>Login Bank Sampah <hr style="color: #fff;"></h3>
                  <form action="<?= base_url('wlogin/aksi_login'); ?>" method="POST">
                     <div class="input-group">
                        <input type="text" class="form-control" name="username" placeholder="Username/Email" required>
                     </div>
                     <div class="input-group">
                        <input type="password" id="myInput" class="form-control" name="password" placeholder="Password" required>
                     </div>
                     <div class="input-group" style="margin-top: -25px;left: 26px;">
                        <input type="checkbox" onclick="myFunction()" class="custom-control-input" id="customCheck1">
                        <label class="custom-control-label" for="customCheck1">Show Password</label>
                     </div>
                     <div class="input-group" style="margin-top: -25px;left: 26px;">
                        <input type="checkbox" class="custom-control-input" id="customCheck2">
                        <label class="custom-control-label" for="customCheck2">Remember Me</label>
                     </div>
                     <div class="input-group">
                        <button class="login-btn" name="submit">Login</button>
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </div>
   </section>
<!--Causes End--> 
<!-- Validate Password And Confirm Password -->
   <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
   <script>
   $(document).ready(function () {
      $("#ConfirmPassword").on('keyup', function(){
      var password = $("#Password").val();
      var confirmPassword = $("#ConfirmPassword").val();
      if (password != confirmPassword)
         $("#CheckPasswordMatch").html("Kata sandi tidak sama!").css("color","red");
      else
         $("#CheckPasswordMatch").html("Kata sandi sama!").css("color","green");
      });
   });
   </script>
<!-- End Validate Password And Confirm Password -->
<!-- Script Show Hidden Password -->
   <script>
      function myFunction() {
         var x = document.getElementById("myInput");
         if (x.type === "password") {
            x.type = "text";
         } else {
            x.type = "password";
         }
      }
   </script>
<!-- End Script Show Hidden Password -->
<!-- Required Js -->
<script src="<?= base_url('assets/js/vendor-all.min.js')?>"></script>
<script src="<?= base_url('assets/js/plugins/bootstrap.min.js')?>"></script>
<script src="<?= base_url('assets/js/plugins/feather.min.js')?>"></script>
<script src="<?= base_url('assets/js/pcoded.min.js')?>"></script>
<script src="<?= base_url('assets/plugins/toastr/toastr.min.js')?>"></script>