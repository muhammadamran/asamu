<link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">
<!--Inner Header Start-->
<!-- <section class="wf100 p100 inner-header">
   <div class="container">
      <h1>Penjemputan</h1>
      <ul>
         <li><a href="#"><i class="fa fa-home"></i> Beranda </a></li>
         <li><a href="#"><i class="fa fa-map"></i>  Penjemputan <?= $this->session->userdata('name'); ?> </a></li>
      </ul>
   </div> -->
</section>
<!--Inner Header End-->
<section class="contact-page wf100 p80">
   <div class="container">
      <div class="row">
         <div class="col-md-1"></div>
         <div class="col-md-12">
            <div class="row" style="padding:10px 15px;overflow:auto;">
               <div class="table-responsive">
                  <table id="example-cashflow" class="table">
                     <thead>
                           <tr>
                              <th>#</th>
                              <th>Jenis</th>
                              <th>Nama</th>
                              <th>Harga</th>
                              <th>Waktu</th>
                              <th>Aksi</th>
                           </tr>
                     </thead>
                     <tbody>
                        <?php 
                           if ($jemput): 
                              $no = 0; 
                              for ($i=0; $i < count($jemput); $i++) { 
                              $no++;
                        ?>
                           <tr>
                              <td><?= $no; ?></td>
                              <td><?= $jemput[$i]["tipe"]; ?></td>
                              <td><?= $jemput[$i]["jenis_sampah"]; ?></td>
                              <td>Rp <?= number_format($jemput[$i]["harga_sampah"],2,',','.'); ?></td>
                              <td><?= tanggal_indo($jemput[$i]["tgl_laporan"]); ?></td>
                              <td>
                                 <form method="POST" action="<?= base_url('wpenjemputan/ambil')?>" enctype="multipart/form-data">
                                    <input type="hidden" name="id_laporan" value="<?= $jemput[$i]["id_laporan"]; ?>">
                                    <input type="hidden" name="pelapor" value="<?= $jemput[$i]["pelapor"]; ?>">
                                    <input type="number" name="berat_real" placeholder="Berat setelah ditimbang" class="form-control" style="margin-bottom:5px">
                                    <input type="number" name="harga_real_sampah" placeholder="Harga setelah ditimbang" class="form-control" style="margin-bottom:5px">
                                    <select name="status" class="form-control" style="margin-bottom:5px">
                                       <option value="">-- Pilih Status --</option>
                                       <option value="3">Sesuai</option>
                                       <option value="4">Tidak Sesuai</option>
                                    </select>
                                    <button type="submit" class="btn btn-sm btn-warning">Ambil</button>
                                 </form>
                              </td>
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
   } );
</script>