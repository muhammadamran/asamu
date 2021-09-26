<script src="https://use.fontawesome.com/07323268fb.js"></script>
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">
<section class="wf100 p100 inner-header">
   <div class="container">
      <h1>Profile anda <?= $this->session->userdata('full_name'); ?></h1>
      <ul>
         <li><a href="#"><i class="fa fa-home"></i> Beranda </a></li>
         <li><a href="#"><i class="fa fa-user" aria-hidden="true"></i>  Profile </a></li>
      </ul>
   </div>
</section>
<section class="wf100 p80-40 blog">
   <div class="causes-grid">
      <div class="container">
         <div class="row">
            <div class="col-md-4 col-sm-6">
               <!--campaign box start-->
               <div class="campaign-box">
                  <div class="campaign-thumb"> 
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
                  <div class="campaign-txt">
                     <h5>
                        <a href="#">
                           <?= $this->session->userdata('full_name'); ?>
                        </a>
                     </h5>
                     <hr>
                     <label>Alamat: <?= $this->session->userdata('address'); ?></label>
                     <br>
                     <label>Email: <?= $this->session->userdata('email'); ?></label>
                     <br>
                     <label>Telepon: <?= $this->session->userdata('phone'); ?></label>
                  </div>
                  <a href="#" class="dbutton"><?= $this->session->userdata('role'); ?></a> 
               </div>
               <!--campaign box end--> 
            </div>
            <div class="col-md-8 col-sm-6">
               <!--campaign box start-->
               <div class="campaign-box">
                  <div class="campaign-txt">
                     <h5 style="display:flex;justify-content:space-between;">
                        <a href="#">
                           Perbarui Profile
                        </a>
                        <?php if ($this->session->userdata('role') == 'masyarakat') { ?>
                           <!-- <button type="button" class="btn btn-sm btn-icon btn-success" data-toggle="modal" data-target="#cashflow-modal"><i data-feather="check-circle"></i> Cashflow</button> -->
                        <?php } ?>
                     </h5>
                     <div id="cashflow-modal" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="cashflow-modalTitle" aria-hidden="true" style="background: linear-gradient(45deg, #79ccb880, #79ccb880);">
                        <div class="modal-dialog modal-lg" role="document">
                           <div class="modal-content">
                              <div class="modal-header" style="background: linear-gradient(45deg, #1f3d40, #1f3d40);">
                                 <h2 class="modal-title" id="cashflow-modalTitle" style="color:#fff">
                                    Cashflow Kamu
                                    <div style="font-size:18px;letter-spacing:1px;">Total Saldo : Rp <?= number_format($total_saldo,2,',','.') ?></div>
                                 </h2>
                                 <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body">
                                 <div class="row" style="padding:10px 15px;max-height:400px;overflow:auto;">
                                    <div class="table-responsive">
                                       <table id="example-cashflow" class="table">
                                          <thead>
                                                <tr>
                                                   <th>#</th>
                                                   <th>Jenis</th>
                                                   <th>Nama</th>
                                                   <th>Harga</th>
                                                   <th>Status</th>
                                                   <th>Waktu</th>
                                                </tr>
                                          </thead>
                                          <tbody>
                                             <?php 
                                                if ($list_saldo): 
                                                   $no = 0; 
                                                   for ($i=0; $i < count($list_saldo); $i++) { 
                                                   $no++;
                                             ?>
                                                <tr>
                                                   <td><?= $no; ?></td>
                                                   <td><?= $list_saldo[$i]["tipe"]; ?></td>
                                                   <td><?= $list_saldo[$i]["jenis_sampah"]; ?></td>
                                                   <td>Rp <?= number_format($list_saldo[$i]["harga_sampah"],2,',','.'); ?></td>
                                                   <td>
                                                      <?php
                                                         if ($list_saldo[$i]["status"] == '1') {
                                                            echo 'Belum di Take';
                                                         } else if ($list_saldo[$i]["status"] == '2') {
                                                            echo 'Proses jemput oleh '.$list_saldo[$i]["petugas"];
                                                         } else if ($list_saldo[$i]["status"] == '3') {
                                                            echo 'Dijemput oleh '.$list_saldo[$i]["petugas"];
                                                         }
                                                      ?>
                                                   </td>
                                                   <td><?= tanggal_indo($list_saldo[$i]["tgl_laporan"]); ?></td>
                                                </tr>
                                             <?php } ?>
                                             <?php else: ?>
                                                <tr>
                                                   <td colspan="5">
                                                         <center>
                                                            <label><i class="fa fa-search"></i> Data not found</label>
                                                         </center>
                                                   </td>
                                                </tr>
                                             <?php endif ?>
                                          </tbody>
                                       </table>
                                    </div>
                                 </div>
                                 <div class="modal-footer">
                                    <button type="button" class="btn btn-sm btn-danger" data-dismiss="modal">Tutup</button>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <hr>
                     <?php if ($this->session->flashdata('success')) : ?>
                        <div class="card-content">
                           <div class="alert alert-success">
                              <i class="icon-info"></i> Data <b>Bershasil</b> simpan!, Silahkan <b>Logout</b> dan login kembali untuk merefresh data anda!
                           </div>
                        </div>
                     <?php endif; ?>
                     <form method="POST" action="<?= base_url('wprofile/updating')?>" enctype="multipart/form-data">
                        <div class="form-row">
                           <div class="form-group col-md-6">
                              <label>Username</label>
                              <input type="text" class="form-control" placeholder="Username" name="username" value="<?= $this->session->userdata('username'); ?>" readonly>
                           </div>
                           <div class="form-group col-md-6">
                              <label>Hak Akses</label>
                              <input type="text" class="form-control" placeholder="Username" value="<?= $this->session->userdata('role'); ?>" readonly>
                           </div>
                        </div>
                        <div class="form-row">
                           <div class="form-group col-md-4">
                              <label>Nama Lengkap</label>
                              <input type="text" class="form-control" placeholder="Nama Lengkap" name="full_name" value="<?= $this->session->userdata('full_name'); ?>">
                           </div>
                           <div class="form-group col-md-4">
                              <label>Jenis Kelamin</label>
                              <?php if ($this->session->userdata('gender') == NULL) { ?>
                                 <select class="form-control" name="gender">
                                    <option value="">-- Pilih Jenis Kelamin --</option>
                                    <option value="Pria">Pria</option>
                                    <option value="Wanita">Wanita</option>
                                 </select>
                              <?php } else { ?>
                                 <select class="form-control" name="gender">
                                    <option value="<?= $this->session->userdata('gender'); ?>"><?= $this->session->userdata('gender'); ?></option>
                                    <option value="">-- Pilih Jenis Kelamin --</option>
                                    <option value="Pria">Pria</option>
                                    <option value="Wanita">Wanita</option>
                                 </select>
                              <?php } ?>
                           </div>
                           <div class="form-group col-md-4">
                              <label>Agama</label>
                              <?php if ($this->session->userdata('religion') == NULL) { ?>
                                 <select class="form-control" name="religion">
                                    <option value="">-- Pilih Agama --</option>
                                    <option value="Islam">Islam</option>
                                    <option value="Protestan">Protestan</option>
                                    <option value="Katolik">Katolik</option>
                                    <option value="Hindu">Hindu</option>
                                    <option value="Buddha">Buddha</option>
                                    <option value="Konghuchu">Konghuchu</option>
                                 </select>
                              <?php } else { ?>
                                 <select class="form-control" name="religion">
                                    <option value="<?= $this->session->userdata('religion'); ?>"><?= $this->session->userdata('religion'); ?></option>
                                    <option value="">-- Pilih Agama --</option>
                                    <option value="Islam">Islam</option>
                                    <option value="Protestan">Protestan</option>
                                    <option value="Katolik">Katolik</option>
                                    <option value="Hindu">Hindu</option>
                                    <option value="Buddha">Buddha</option>
                                    <option value="Konghuchu">Konghuchu</option>
                                 </select>
                              <?php } ?>
                           </div>
                        </div>
                        <div class="form-row">
                           <div class="form-group col-md-4">
                              <label>Tempat Lahir</label>
                              <input type="text" class="form-control" placeholder="Tempat Lahir" name="placebrithday" value="<?= $this->session->userdata('placebrithday'); ?>">
                           </div>
                           <div class="form-group col-md-4">
                              <label>Tanggal Lahir</label>
                              <input type="date" id="tgl_lahir" class="form-control" placeholder="Tanggal Lahir" name="brithday" value="<?= $this->session->userdata('brithday'); ?>">
                           </div>
                           <div class="form-group col-md-4">
                              <label>Usia</label>
                              <input type="text" id="umur" class="form-control" name="age" placeholder="Usia" value="<?= $this->session->userdata('age'); ?>">
                           </div>
                        </div>
                        <div class="form-group">
                           <label>Alamat</label>
                           <textarea class="form-control" name="address" placeholder="Alamat Lengkap" rows="8" cols="80"><?= $this->session->userdata('address'); ?></textarea>
                        </div>
                        <div class="form-row">
                           <div class="form-group col-md-4">
                              <label>Kota</label>
                              <input type="text" class="form-control" placeholder="Kota" name="city" value="<?= $this->session->userdata('city'); ?>">
                           </div>
                           <div class="form-group col-md-4">
                              <label>Email</label>
                              <input type="email" class="form-control" placeholder="Email" name="email" value="<?= $this->session->userdata('email'); ?>">
                           </div>
                           <div class="form-group col-md-4">
                              <label>No.Telepon</label>
                              <input type="text" class="form-control" placeholder="No.Telepon" name="phone" value="<?= $this->session->userdata('phone'); ?>">
                           </div>
                        </div>
                        <button type="submit" class="btn btn-success">Update Profile</button>
                     </form>
                  </div>
               </div>
               <!--campaign box end--> 
            </div>
         </div>
      </div>
   </div>
</section>
<!-- Cek Usia -->
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.7.1/js/dataTables.buttons.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.7.1/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.7.1/js/buttons.print.min.js"></script>
<script src="https://cdn.datatables.net/select/1.3.3/js/dataTables.select.min.js"></script>

<script type="text/javascript" language="javascript" >
   $(document).ready(function() {
      $('#example-cashflow').DataTable( {
            dom: 'Bfrtip',
            buttons: [
               // 'csv',
               // 'excel',
               // 'pdf',
               // {
               //    extend: 'print',
               //    text: 'Print',
               //    exportOptions: {
               //          modifier: {
               //             selected: null
               //          }
               //    }
               // }
            ],
            select: true
      } );
   } );
</script>