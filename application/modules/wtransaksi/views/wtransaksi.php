<link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">
<!--Inner Header Start-->
<!-- <section class="wf100 p100 inner-header">
   <div class="container">
      <h1>Pentransaksian</h1>
      <ul>
         <li><a href="#"><i class="fa fa-home"></i> Beranda </a></li>
         <li><a href="#"><i class="fa fa-map"></i>  Pentransaksian <?= $this->session->userdata('name'); ?> </a></li>
      </ul>
   </div> -->
</section>
<!--Inner Header End-->
<section class="contact-page wf100 p80">
   <div class="container">
      <div class="row">
         <div class="col-md-1"></div>
         <div class="col-lg-12">
               <div class="card">
                  <div class="card-header">
                     <h2 style="margin:0;">
                        Saldo kamu 
                        <button type="button" class="btn btn-secondary pull-right"  data-toggle="modal" data-target="#tariksaldo">Tarik Saldo</button>
                        <button type="button" class="btn btn-secondary pull-right"  data-toggle="modal" data-target="#penarikan">History Tarik Saldo</button>
                        <button type="button" class="btn btn-secondary pull-right"  data-toggle="modal" data-target="#transaksi">Lihat Transaksi</button>
                     </h2>
                     <div id="tariksaldo" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="tariksaldoTitle" aria-hidden="true" style="background: linear-gradient(45deg, #79ccb880, #79ccb880);">
                        <div class="modal-dialog modal-lg" role="document">
                           <div class="modal-content">
                              <div class="modal-header" style="background: linear-gradient(45deg, #1f3d40, #1f3d40);">
                                 <h2 class="modal-title" id="tariksaldoTitle" style="color:#fff">Tarik Saldo</h2>
                                 <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <form method="POST" action="<?= base_url('wtransaksi/tarik')?>" enctype="multipart/form-data">
                                 <div class="modal-body">
                                    <div class="row">
                                          <div class="form-group col-md-12">
                                             <label class="form-label" for="Nominal">Nominal</label>
                                             <span>Maksimal tarik saldo adalah Rp <?= number_format($saldo,2,',','.') ?></span>
                                             <input type="number" name="nominal" class="form-control" max="<?= $saldo ?>" value="0">
                                          </div>
                                    </div>
                                 </div>
                                 <div class="modal-footer">
                                    <button type="button" class="btn btn-sm btn-danger" data-dismiss="modal">Tutup</button>
                                    <button type="submit" class="btn btn-sm btn-success">Save</button>
                                 </div>
                              </form>
                           </div>
                        </div>
                     </div>
                     <div id="transaksi" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="transaksiTitle" aria-hidden="true" style="background: linear-gradient(45deg, #79ccb880, #79ccb880);">
                        <div class="modal-dialog modal-lg" role="document">
                           <div class="modal-content">
                              <div class="modal-header" style="background: linear-gradient(45deg, #1f3d40, #1f3d40);">
                                 <h2 class="modal-title" id="transaksiTitle" style="color:#fff">History Transaksi</h2>
                                 <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body">
                                 <table id="example-history" class="table">
                                    <thead>
                                          <tr>
                                             <th>#</th>
                                             <th>Tipe</th>
                                             <th>Nominal</th>
                                             <th>Deskripsi</th>
                                             <th>Tanggal</th>
                                          </tr>
                                    </thead>
                                    <tbody>
                                       <?php 
                                          if ($cashflow): 
                                             $no = 0; 
                                             for ($i=0; $i < count($cashflow); $i++) { 
                                             $no++;
                                       ?>
                                          <tr>
                                             <td><?= $no; ?></td>
                                             <td><?= $cashflow[$i]["tipe_cashflow"] == 'in' ? 'Pemasukan' : 'Pengeluaran'; ?></td>
                                             <td>Rp <?= number_format($cashflow[$i]["nominal_cashflow"],2,',','.'); ?></td>
                                             <td><?= $cashflow[$i]["deskripsi_cashflow"]; ?></td>
                                             <td><?= tanggal_indo($cashflow[$i]["tanggal_cashflow"]); ?></td>
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
                        </div>
                     </div>
                     <div id="penarikan" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="penarikanTitle" aria-hidden="true" style="background: linear-gradient(45deg, #79ccb880, #79ccb880);">
                        <div class="modal-dialog modal-lg" role="document">
                           <div class="modal-content">
                              <div class="modal-header" style="background: linear-gradient(45deg, #1f3d40, #1f3d40);">
                                 <h2 class="modal-title" id="penarikanTitle" style="color:#fff">History Tarik Saldo</h2>
                                 <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body">
                                 <table id="example-history" class="table">
                                    <thead>
                                          <tr>
                                             <th>#</th>
                                             <th>Nominal</th>
                                             <th>Tanggal Pengajuan</th>
                                             <th>Diambil oleh</th>
                                             <th>Diambil tanggal</th>
                                             <th>Status</th>
                                          </tr>
                                    </thead>
                                    <tbody>
                                       <?php 
                                          if ($tarik): 
                                             $no = 0; 
                                             for ($i=0; $i < count($tarik); $i++) { 
                                             $no++;
                                       ?>
                                          <tr>
                                             <td><?= $no; ?></td>
                                             <td>Rp <?= number_format($tarik[$i]["nominal"],2,',','.'); ?></td>
                                             <td><?= tanggal_indo($tarik[$i]["tanggal"]); ?></td>
                                             <td><?= $tarik[$i]['pengambil'] ? $tarik[$i]['pengambil'] : '-' ?></td>
                                             <td><?= $tarik[$i]["tanggal_ambil"] ? tanggal_indo($tarik[$i]["tanggal_ambil"]) : '-'; ?></td>
                                             <td style="<?= $tarik[$i]['status'] == '3' ? 'color:green;' : ($tarik[$i]['status'] == '4' ? 'color:red' : '') ?>"><?= $tarik[$i]['status'] == '1' ? 'Pengajuan' : ($tarik[$i]['status'] == '2' ? 'Menunggu Pencairan' : ($tarik[$i]['status'] == '4' ? 'Ditolak' : 'Dicairkan')) ?></td>
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
                        </div>
                     </div>
                  </div>
                  <div class="card-body">
                     <h3>Rp <?= number_format($saldo,2,',','.') ?></h3>
                  </div>
               </div>
         </div>
         <div class="col-md-12">
            <div class="row" style="padding:10px 15px;overflow:auto;">
               <div class="table-responsive">
                  <table id="example-cashflow" class="table">
                     <thead>
                           <tr>
                              <th>#</th>
                              <th>Jenis</th>
                              <th>Nama</th>
                              <th>Harga Satuan</th>
                              <th>Berat</th>
                              <th>Berat setelah ditimbang</th>
                              <th>Total Harga</th>
                              <th>Waktu</th>
                              <th>Aksi</th>
                           </tr>
                     </thead>
                     <tbody>
                        <?php 
                           if ($transaksi): 
                              $no = 0; 
                              for ($i=0; $i < count($transaksi); $i++) { 
                              $no++;
                        ?>
                           <tr>
                              <td><?= $no; ?></td>
                              <td><?= $transaksi[$i]["tipe"]; ?></td>
                              <td><?= $transaksi[$i]["jenis_sampah"]; ?></td>
                              <td><?= $transaksi[$i]["berat"]; ?> g</td>
                              <td>Rp <?= number_format($transaksi[$i]["harga_sampah"],2,',','.'); ?></td>
                              <td><?= $transaksi[$i]["berat_real"]; ?> g</td>
                              <td>Rp <?= number_format($transaksi[$i]["harga_real_sampah"],2,',','.'); ?></td>
                              <td><?= tanggal_indo($transaksi[$i]["tgl_laporan"]); ?></td>
                              <?php if ($transaksi[$i]['status'] == '1') { ?>
                                 <td style="text-align: center;"><i class="fa fa-ban" aria-hidden="true"></i> Belum di Take</td>
                              <?php } else if ($transaksi[$i]['status'] == '2') { ?>
                                 <td style="color:orange;text-align: center;"><i class="fa fa-check" aria-hidden="true"></i> <i>Proses jemput oleh <br><small><?= $transaksi[$i]['petugas']; ?></small></i></td>
                              <?php } else if ($transaksi[$i]['status'] == '3') { ?>
                                 <td style="color:green;text-align: center;"><i class="fa fa-check" aria-hidden="true"></i> <i>Barang sesuai dan Diambil oleh <br><small><?= $transaksi[$i]['petugas']; ?></small></i></td>
                              <?php } else if ($transaksi[$i]['status'] == '4') { ?>
                                 <td style="color:red;text-align: center;"><i class="fa fa-check" aria-hidden="true"></i> <i>Barang tidak sesuai</i></td>
                              <?php } ?>
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
         </div>
      </div>
   </div>
</section>
<!--Causes End--> 
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
      $('#example-history').DataTable( {
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