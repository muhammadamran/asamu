<style type="text/css">
   /*tambahan*/
   .card-user {
       background: white;
       box-shadow: 0 0 10px 0 rgba(51,51,51,0.19);
       margin-bottom: 20px;
   }

   .card-user .user-thumbnail {
       position: relative;
       height: 100px;
       background-color: #333;
       background-size: cover !important;
       background-position: center center;
   }

   .card-user.has-cover .user-thumbnail:before {
       content: "";
       position: absolute;
       width: 100%;
       height: 100%;
       top: 0;
       left: 0;
       background: rgba(0,0,0,0.35);
   }

   .card-user .user-body {
       margin-top: -55px;
       padding: 15px;
       position: relative;
   }

   .card-user .user-body .change-cover {
       z-index: 10;
       position: absolute;
       border-radius: 5px;
       padding: 5px 10px;
       background: rgba(0,0,0,0.75);
       color: #000;
       top: 10px;
       color: #fff;
       display: none;
       font-size: 12px;
       -webkit-transition: 0.35s all ease;
       -o-transition: 0.35s all ease;
       transition: 0.35s all ease;
   }

   .card-user .user-body .change-cover:hover,.card-user .user-body .change-cover:focus {
       background: #000;
       text-decoration: none;
   }

   .card-user .user-body:hover .change-cover,.card-user .user-body:focus .change-cover {
       display: block;
   }

   .card-user .user-stat {
       font-size: 12px;
   }

   .card-user .user-stat span {
       font-size: 22px;
       font-weight: 600;
   }

   .card-user .user-stat a {
       text-decoration: none;
       color: #000;
   }

   @media (min-width:992px) {
       .card-user .user-stat a {
           color: #fff;
       };
   }

   .card-user .user-stat a,.card-user .user-stat:hover a,.card-user .user-stat:focus a {
       text-decoration: none;
       color: #000;
   }

   @media (min-width:992px) {
       .card-user .user-stat a,.card-user .user-stat:hover a,.card-user .user-stat:focus a {
           color: #fff;
       };
   }

   .card-user .user-general-information {
       padding-left: 90px;
   }

   .card-user .user-general-information .user-avatar {
       margin-left: -90px;
       float: left;
   }

   .card-user .user-general-information .user-avatar img {
       margin: auto;
       width: 80px;
       height: 80px;
   }

   .card-user .user-general-information .user-avatar:hover>.change,.card-user .user-general-information .user-avatar:focus>.change {
       display: block;
   }

   .card-user .user-general-information .user-avatar:hover .change-cover,.card-user .user-general-information .user-avatar:focus .change-cover {
       display: none !important;
   }

   .card-user .user-general-information .user-avatar>.change {
       display: none;
       position: absolute;
       top: 4px;
       bottom: 4px;
       left: 4px;
       right: 4px;
       border-radius: 50%;
       background: rgba(0,0,0,0.5);
       color: #fff;
       text-align: center;
       font-size: 12px;
       line-height: 30px;
   }

   .card-user .user-general-information .user-name,.card-user .user-general-information .user-aliasname {
       overflow: hidden;
       text-overflow: ellipsis;
       white-space: nowrap;
       line-height: 40px;
   }

   .card-user .user-general-information .user-name {
       font-size: 14px;
       font-weight: 600;
   }

   @media (min-width:768px) {
       .card-user .user-general-information .user-name {
           font-size: 20px;
       };
   }

   .card-user .user-general-information .user-name,.card-user .user-general-information .user-name a {
       color: #fff;
   }

   .card-user .user-general-information .user-name a,.card-user .user-general-information .user-name:hover a,.card-user .user-general-information .user-name:focus a {
       text-decoration: none;
   }

   .card-user .user-general-information .user-aliasname {
       color: #777;
   }

   .card-user .user-general-information .btn-edit-profile {
       padding: 3px;
       margin-top: 10px;
       margin-left: 10px;
       float: right;
   }

   .card-user .user-complaint-information {
       margin-top: 20px;
   }

   .card-user.is-single {
       position: relative;
       box-shadow: none;
       margin-bottom: 150px;
       background: #333 center center;
       background-color: #555;
       background-size: cover;
   }

   .card-user.is-single.is-user {
       background-image: url('../themes/lapor/assets/images/user-cover.png');
   }

   .card-user.is-single.is-government {
       background-image: url('../themes/lapor/assets/images/gov-cover.png');
   }

   .card-user.is-single.has-cover:before {
       content: "";
       position: absolute;
       width: 100%;
       height: 100%;
       top: 0;
       left: 0;
       background: -webkit-linear-gradient(-148deg,rgba(0,0,0,0.25),rgba(0,0,0,0.5));
       background: -o-linear-gradient(-148deg,rgba(0,0,0,0.25),rgba(0,0,0,0.5));
       background: -moz-linear-gradient(-148deg,rgba(0,0,0,0.25),rgba(0,0,0,0.5));
       background: linear-gradient(to -148deg,rgba(0,0,0,0.25),rgba(0,0,0,0.5));
   }

   @media (min-width:768px) {
       .card-user.is-single {
           margin-bottom: 100px;
       };
   }

   @media (min-width:992px) {
       .card-user.is-single {
           margin-bottom: 40px;
       };
   }

   .card-user.is-single .user-body {
       margin: 0;
       padding: 0;
   }

   .card-user.is-single .user-body .container {
       position: relative;
       min-height: 300px;
   }

   @media (min-width:768px) {
       .card-user.is-single .user-body .container {
           min-height: 350px;
       };
   }

   .card-user.is-single .user-general-information {
       position: absolute;
       height: 100%;
       width: 100%;
       bottom: 0;
       left: 0;
       color: #fff;
       -webkit-display: flex;
       -moz-display: flex;
       -o-display: flex;
       display: flex;
       -webkit-justify-content: center;
       -moz-justify-content: center;
       -o-justify-content: center;
       justify-content: center;
       -webkit-flex-direction: column;
       -moz-flex-direction: column;
       -o-flex-direction: column;
       flex-direction: column;
       -webkit-align-items: center;
       -moz-align-items: center;
       -o-align-items: center;
       align-items: center;
       text-align: left;
       padding: 20px;
   }

   @media (min-width:768px) {
       .card-user.is-single .user-general-information {
           padding: 0;
           padding-left: 200px;
           min-height: 120px;
           -webkit-align-items: inherit;
           -moz-align-items: inherit;
           -o-align-items: inherit;
           align-items: inherit;
           -webkit-justify-content: flex-end;
           -moz-justify-content: flex-end;
           -o-justify-content: flex-end;
           justify-content: flex-end;
       };
   }

   .card-user.is-single .user-general-information a {
       color: #fff;
   }

   .card-user.is-single .user-general-information a:hover,.card-user.is-single .user-general-information a:focus {
       color: #fff;
       text-decoration: none;
   }

   .card-user.is-single .user-general-information .user-avatar {
       position: relative;
       z-index: 1;
       margin-left: 0;
       margin-top: 0;
   }

   @media (min-width:768px) {
       .card-user.is-single .user-general-information .user-avatar {
           margin-top: 50px;
           margin-left: -180px;
           position: absolute;
       };
   }

   @media (min-width:992px) {
       .card-user.is-single .user-general-information .user-avatar {
           margin-top: 30px;
       };
   }

   .card-user.is-single .user-general-information .user-avatar img {
       width: 100px;
       height: 100px;
       -webkit-box-shadow: 0 10px 20px rgba(0,0,0,0.1);
       box-shadow: 0 10px 20px rgba(0,0,0,0.1);
       border-width: 4px;
   }

   @media (min-width:768px) {
       .card-user.is-single .user-general-information .user-avatar img {
           width: 160px;
           height: 160px;
       };
   }

   .card-user.is-single .user-general-information .user-name {
       margin-top: 10px;
       text-align: center;
       line-height: inherit;
       text-overflow: inherit;
       white-space: normal;
   }

   @media (min-width:768px) {
       .card-user.is-single .user-general-information .user-name {
           margin-top: 0;
           text-align: left;
           font-size: 26px;
       };
   }

   .card-user.is-single .user-general-information .user-description {
       max-height: 40px;
       display: none !important;
   }

   @media (min-width:992px) {
       .card-user.is-single .user-general-information .user-description {
           display: block !important;
       };
   }

   .card-user.is-single .user-general-information .user-meta {
       text-align: left;
       font-size: 12px;
   }

   @media (min-width:768px) {
       .card-user.is-single .user-general-information .user-meta {
           font-size: inherit;
       };
   }

   .card-user.is-single .user-site-information {
       position: absolute;
       width: 100%;
       background: #fafafa;
       top: 100%;
       left: 0;
       padding: 20px;
       text-align: center;
   }

   @media (min-width:768px) {
       .card-user.is-single .user-site-information {
           padding-left: 200px;
       };
   }

   @media (min-width:992px) {
       .card-user.is-single .user-site-information {
           bottom: 20px;
           top: initial;
           right: 0px;
           left: auto;
           color: #fff;
           background: transparent;
           padding: 0;
       };
   }

   .card-user.is-single .user-site-information .btn-follow {
       color: #000;
       background-color: transparent;
       border-color: #000;
       margin-top: 10px;
       padding-right: 0px;
       padding-left: 0px;
   }

   .card-user.is-single .user-site-information .btn-follow:focus,.card-user.is-single .user-site-information .btn-follow.focus {
       color: #000;
       background-color: rgba(0,0,0,0);
       border-color: #000;
   }

   .card-user.is-single .user-site-information .btn-follow:hover {
       color: #000;
       background-color: rgba(0,0,0,0);
       border-color: #000;
   }

   .card-user.is-single .user-site-information .btn-follow:active,.card-user.is-single .user-site-information .btn-follow.active,.open>.dropdown-toggle.card-user.is-single .user-site-information .btn-follow {
       color: #000;
       background-color: rgba(0,0,0,0);
       border-color: #000;
   }

   .card-user.is-single .user-site-information .btn-follow:active:hover,.card-user.is-single .user-site-information .btn-follow.active:hover,.open>.dropdown-toggle.card-user.is-single .user-site-information .btn-follow:hover,.card-user.is-single .user-site-information .btn-follow:active:focus,.card-user.is-single .user-site-information .btn-follow.active:focus,.open>.dropdown-toggle.card-user.is-single .user-site-information .btn-follow:focus,.card-user.is-single .user-site-information .btn-follow:active.focus,.card-user.is-single .user-site-information .btn-follow.active.focus,.open>.dropdown-toggle.card-user.is-single .user-site-information .btn-follow.focus {
       color: #000;
       background-color: rgba(0,0,0,0);
       border-color: #000;
   }

   .card-user.is-single .user-site-information .btn-follow:active,.card-user.is-single .user-site-information .btn-follow.active,.open>.dropdown-toggle.card-user.is-single .user-site-information .btn-follow {
       background-image: none;
   }

   .card-user.is-single .user-site-information .btn-follow.disabled:hover,.card-user.is-single .user-site-information .btn-follow[disabled]:hover,fieldset[disabled] .card-user.is-single .user-site-information .btn-follow:hover,.card-user.is-single .user-site-information .btn-follow.disabled:focus,.card-user.is-single .user-site-information .btn-follow[disabled]:focus,fieldset[disabled] .card-user.is-single .user-site-information .btn-follow:focus,.card-user.is-single .user-site-information .btn-follow.disabled.focus,.card-user.is-single .user-site-information .btn-follow[disabled].focus,fieldset[disabled] .card-user.is-single .user-site-information .btn-follow.focus {
       background-color: transparent;
       border-color: #000;
   }

   .card-user.is-single .user-site-information .btn-follow .badge {
       color: transparent;
       background-color: #000;
   }

   @media (min-width:768px) {
       .card-user.is-single .user-site-information .btn-follow {
           margin-top: 0;
       };
   }

   @media (min-width:992px) {
       .card-user.is-single .user-site-information .btn-follow {
           margin-top: 0;
           color: #fff;
           background-color: transparent;
           border-color: #fff;
       }

       .card-user.is-single .user-site-information .btn-follow:focus,.card-user.is-single .user-site-information .btn-follow.focus {
           color: #fff;
           background-color: rgba(0,0,0,0);
           border-color: #bfbfbf;
       }

       .card-user.is-single .user-site-information .btn-follow:hover {
           color: #fff;
           background-color: rgba(0,0,0,0);
           border-color: #e0e0e0;
       }

       .card-user.is-single .user-site-information .btn-follow:active,.card-user.is-single .user-site-information .btn-follow.active,.open>.dropdown-toggle.card-user.is-single .user-site-information .btn-follow {
           color: #fff;
           background-color: rgba(0,0,0,0);
           border-color: #e0e0e0;
       }

       .card-user.is-single .user-site-information .btn-follow:active:hover,.card-user.is-single .user-site-information .btn-follow.active:hover,.open>.dropdown-toggle.card-user.is-single .user-site-information .btn-follow:hover,.card-user.is-single .user-site-information .btn-follow:active:focus,.card-user.is-single .user-site-information .btn-follow.active:focus,.open>.dropdown-toggle.card-user.is-single .user-site-information .btn-follow:focus,.card-user.is-single .user-site-information .btn-follow:active.focus,.card-user.is-single .user-site-information .btn-follow.active.focus,.open>.dropdown-toggle.card-user.is-single .user-site-information .btn-follow.focus {
           color: #fff;
           background-color: rgba(0,0,0,0);
           border-color: #bfbfbf;
       }

       .card-user.is-single .user-site-information .btn-follow:active,.card-user.is-single .user-site-information .btn-follow.active,.open>.dropdown-toggle.card-user.is-single .user-site-information .btn-follow {
           background-image: none;
       }

       .card-user.is-single .user-site-information .btn-follow.disabled:hover,.card-user.is-single .user-site-information .btn-follow[disabled]:hover,fieldset[disabled] .card-user.is-single .user-site-information .btn-follow:hover,.card-user.is-single .user-site-information .btn-follow.disabled:focus,.card-user.is-single .user-site-information .btn-follow[disabled]:focus,fieldset[disabled] .card-user.is-single .user-site-information .btn-follow:focus,.card-user.is-single .user-site-information .btn-follow.disabled.focus,.card-user.is-single .user-site-information .btn-follow[disabled].focus,fieldset[disabled] .card-user.is-single .user-site-information .btn-follow.focus {
           background-color: transparent;
           border-color: #fff;
       }

       .card-user.is-single .user-site-information .btn-follow .badge {
           color: transparent;
           background-color: #fff;
       }

       .card-user.is-single .user-site-information .btn-follow:hover,.card-user.is-single .user-site-information .btn-follow:focus {
           background: #fff;
           border-color: #fff;
           color: #d0021b;
           -webkit-box-shadow: 0 5px 20px rgba(0,0,0,0.3);
           box-shadow: 0 5px 20px rgba(0,0,0,0.3);
       };
   }

   @media (min-width:992px) {
       .card-user.is-user .user-general-information {
           padding-right: 400px;
       };
   }

   @media (min-width:992px) {
       .card-user.is-user .user-site-information {
           width: 400px;
       };
   }

   .card-user.is-user:before {
       background: -webkit-linear-gradient(-148deg,rgba(245,81,95,0.75),rgba(159,4,112,0.75));
       background: -o-linear-gradient(-148deg,rgba(245,81,95,0.75),rgba(159,4,112,0.75));
       background: -moz-linear-gradient(-148deg,rgba(245,81,95,0.75),rgba(159,4,112,0.75));
       background: linear-gradient(to -148deg,rgba(245,81,95,0.75),rgba(159,4,112,0.75));
   }

   @media (min-width:992px) {
       .card-user.is-government .user-general-information {
           padding-right: 280px;
       };
   }

   @media (min-width:992px) {
       .card-user.is-government .user-site-information {
           width: 350px;
       };
   }

   .img-circle {
      border-radius: 50%;
   }
</style>
<!--Inner Header Start-->
<section class="wf100 p100 inner-header">
   <div class="container">
      <h1>Lapor <?= $this->session->userdata('name'); ?></h1>
      <ul>
         <li><a href="#"><i class="fa fa-home"></i> Beranda </a></li>
         <li><a href="#"><i class="fa fa-exclamation-circle" aria-hidden="true"></i>  Lapor </a></li>
      </ul>
   </div>
</section>
<section class="wf100 p80">
   <div class="container">
      <div class="row">
         <div class="col-md-8">
            <?php if ($this->session->flashdata('success')): ?>
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
                     <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
                     <h4 style="color: #fff;"><i class="fa fa-info-circle"></i> Informasi!</h4><hr>
                     <p style="color: #fff;">Laporan anda berhasil disimpan!</p>
                  </div>
               </div>
               <hr>
            <?php endif; ?>
            <div class="donations">
               <h4 style="text-transform: uppercase;">Sampaikan Laporan Anda</h4>
               <hr>
               <form action="<?= base_url('wlapor/laporannew'); ?>" enctype="multipart/form-data" method="POST">
                  <ul class="radio-boxes">
                     <li>
                        <div class="radio custom">
                           <b>Pilih Tipe Laporan: &nbsp;&nbsp;</b>
                        </div>
                     </li>
                     <li>
                        <div class="radio custom">
                           <input name="tipe" id="d1" type="radio" value="Anorganik" class="css-radio" onchange="onChangeType(this)">
                           <label for="d1" class="css-label">Anorganik</label>
                        </div>
                     </li>
                     <li>
                        <div class="radio custom">
                           <input name="tipe" id="d2" type="radio" value="Organik" class="css-radio" onchange="onChangeType(this)">
                           <label for="d2" class="css-label">Organik</label>
                        </div>
                     </li>
                  </ul>
                  <div class="your-comments wf100">
                    <div id="sampah-organik" style="display:none;">
                        <h4>Jenis Organik</h4>
                        <select class="form-control" onchange="onChangeSampah(this)">
                            <option value="">-- Pilih Jenis Sampah --</option>
                            <?php for ($i=0; $i < count($organik); $i++) { ?>
                                <option value="<?= htmlspecialchars(json_encode($organik[$i])) ?>"><?= $organik[$i]->nama_sampah ?> ( Rp <?= number_format($organik[$i]->harga_sampah,2,',','.') ?> )</option>
                            <?php } ?>
                        </select>
                        <br>
                    </div>
                    <div id="sampah-anorganik" style="display:none;">
                        <h4>Jenis Anorganik</h4>
                        <select class="form-control" onchange="onChangeSampah(this)">
                            <option value="">-- Pilih Jenis Sampah --</option>
                            <?php for ($i=0; $i < count($anorganik); $i++) { ?>
                                <option value="<?= htmlspecialchars(json_encode($anorganik[$i])) ?>"><?= $anorganik[$i]->nama_sampah ?> ( Rp <?= number_format($anorganik[$i]->harga_sampah,2,',','.') ?> )</option>
                            <?php } ?>
                        </select>
                        <br>
                    </div>
                    <input id="nama_sampah" name="nama_sampah" type="hidden" value="">
                    <input id="harga_sampah" name="harga_sampah" type="hidden" value="">
                    <script>
                        function onChangeType(e) {
                            const value = e.value
                            if (value == 'Anorganik') {
                                document.getElementById('sampah-organik').style.display = 'none'
                                document.getElementById('sampah-anorganik').style.display = 'block'
                            } else {
                                document.getElementById('sampah-organik').style.display = 'block'
                                document.getElementById('sampah-anorganik').style.display = 'none'
                            }
                        }
                        function onChangeSampah(e) {
                            const value = e.value
                            if (value) {
                                result = JSON.parse(value)
                                if (result && result.nama_sampah && result.harga_sampah) {
                                    document.getElementById('nama_sampah').value = result.nama_sampah
                                    document.getElementById('harga_sampah').value = result.harga_sampah
                                }
                            }
                        }
                    </script>
                     <h4>Perkiraan berat (per gram)</h4>
                     <input type="number" name="berat" class="form-control" placeholder="Ketik Perkiraan berat untuk <?= $this->session->userdata('name'); ?>" required>
                     <input type="hidden" name="lokasi_laporan" class="form-control" value="<?= !empty($user) ? $user->address.($user->city ? ', '.$user->city : '') : '' ?>" readonly>
                     <br>
                     <h4>Deskripsi Laporan</h4>
                     <textarea class="form-control" name="deskripsi_laporan" placeholder="Ketik Deskripsi Laporan untuk <?= $this->session->userdata('name'); ?>" required></textarea>
                     <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox4" value="option2" required>
                        <label class="form-check-label" for="inlineCheckbox4">Saya setuju dengan ketentuan <?= $this->session->userdata('name');?></label>
                     </div>
                  </div>
                  <div class="wf100 donator-details">
                     <h4>Akun Penyampai Laporan</h4>
                     <ul>
                        <li class="half pr15">
                           <input name="pelapor" placeholder="Nama Lengkap" value="<?= $this->session->userdata('full_name'); ?>" class="form-control" readonly>
                           <input type="hidden" name="id_members" value="<?= $this->session->userdata('id_members'); ?>" class="form-control" readonly>
                           <input type="hidden" name="created_date" value="<?= date('Y-m-d h:i:m');?>" class="form-control" readonly>
                           <input type="hidden" name="created_by" value="<?= $this->session->userdata('username'); ?>" class="form-control" readonly>
                           <input type="hidden" name="tgl_laporan" value="<?= date('Y-m-d');?>" required>
                           <input type="hidden" name="judul_laporan" value="Penukaran sampah dari <?= $this->session->userdata('name'); ?>" required>
                        </li>
                        <li class="half pl15">
                           <input name="NoHP" placeholder="No. Handphone" value="<?= $this->session->userdata('telp'); ?>"class="form-control" required>
                        </li>
                        <li class="half pr15">
                           <input name="Email" placeholder="Alamat Email" value="<?= $this->session->userdata('email'); ?>" class="form-control" required>
                        </li>
                        <li class="half pl15">
                           <div>
                              Bukti Lapangan <small> Input lebih dari 1</small>
                           </div>
                           <hr>
                           <input type="file" name="pic[]" required  multiple />
                        </li>
                        <li class="half pl15">
                           <input value="Kirim Laporan" type="submit">
                        </li>
                     </ul>
                  </div>
               </form>
            </div>
         </div>
         <div class="col-md-4">
            <div class="visible hidden-xs hidden-sm">
                <div class="card card-user">
                    <div class="user-thumbnail" style="background: linear-gradient(45deg, #20b1aa, #027371);"></div>
                    <div class="user-body">
                        <div class="user-general-information">
                            <div class="user-avatar">
                                 <?php 
                                    $cek_gender = $this->session->userdata('gender');
                                    $cek_profile = $this->session->userdata('profile');
                                 ?>
                                 <?php if ($cek_gender == NULL) { ?>
                                    <?php if ($cek_profile == NULL) { ?>
                                       <img src="https://ia601009.us.archive.org/13/items/HeaderIconUser/Header-Icon-User.png" class="img-responsive img-circle">
                                    <?php } else { ?>
                                       <img src="<?= base_url('assets/images/user/'.$this->session->userdata('profile'));?>" class="img-responsive img-circle">
                                    <?php } ?>
                                 <?php } else if ($cek_gender == 'Pria') { ?>
                                    <!-- PRIA -->
                                    <?php if ($cek_profile == NULL) { ?>
                                       <img src="https://assets.webiconspng.com/uploads/2016/11/avatar_business_costume_male_man_office_work_icon_628289.png" class="img-responsive img-circle">
                                    <?php } else { ?>
                                       <img src="<?= base_url('assets/images/user/'.$this->session->userdata('profile'));?>" class="img-responsive img-circle">
                                    <?php } ?>
                                 <?php } else if ($cek_gender == 'Wanita') { ?>
                                    <!-- WNITA -->
                                    <?php if ($cek_profile == NULL) { ?>
                                       <img src="https://cdn1.iconfinder.com/data/icons/user-pictures/100/female1-512.png" class="img-responsive img-circle">
                                    <?php } else { ?>
                                       <img src="<?= base_url('assets/images/user/'.$this->session->userdata('profile'));?>" class="img-responsive img-circle">
                                    <?php } ?>
                                 <?php } ?>
                            </div>
                            <div class="user-name"><a href="#!"><?= $this->session->userdata('full_name'); ?></a></div>
                            <div class="user-aliasname">
                                <?= $this->session->userdata('username'); ?>
                            </div>
                        </div>
                        <div class="user-complaint-information text-center">
                            <div class="row">
                                <div class="col-xs-12 col-md-12 user-stat">
                                <style type="text/css">
                                    .a {
                                        padding: 5px 5px;
                                        font-size: 10px;
                                        line-height: 0;
                                        border-radius: 50%;
                                        color: #fff;
                                        background-color: #0e8b87;
                                        border-color: #0b8582;
                                    }
                                    .btn-custom {
                                        padding: 5px 5px;
                                        font-size: 8px;
                                        line-height: 0;
                                        border-radius: 50%;
                                        color: #fff;
                                        background-color: #0e8b87;
                                        border-color: #0b8582;
                                    }
                                    .btn-custom:hover {
                                        color: #fff;
                                        background-color: #255f5d;
                                        border-color: #255f5d;
                                    }
                                </style>
                                 <h5>
                                    Laporan anda 
                                    <span class="btn btn-sm btn-custom" target="_blank">
                                        <a href="<?= base_url('wlapor/list/'.$this->session->userdata('username'));?>"><i class="fa fa-share" style="font-size: 10px;"></i></a>
                                    </span>
                                </h5>
                                 <hr>
                                </div>
                                <div class="col-xs-4 col-md-4 user-stat">
                                    Laporan<br>
                                    <span><?= $laporan_a; ?></span>
                                </div>

                                <div class="col-xs-4 col-md-4 user-stat">
                                    Diproses<br>
                                    <span><?= $laporan_b; ?></span>
                                </div>
                                <div class="col-xs-4 col-md-4 user-stat">
                                    Selesai<br>
                                    <span><?= $laporan_c; ?></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>                            
            </div>
         </div>
      </div>
   </div>
</section>