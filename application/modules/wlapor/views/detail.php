<section class="wf100 p100 inner-header">
   <div class="container">
      <h1>Lapor <?= $this->session->userdata('name'); ?></h1>
      <ul>
         <li><a href="#"><i class="fa fa-home"></i> Beranda </a></li>
         <li><a href="#"><i class="fa fa-exclamation-circle" aria-hidden="true"></i>  Lapor </a> </li>
         <li><a href="#"><i class="fa fa-file" aria-hidden="true"></i>  Detail </a></li>
         <li><a href="#"><i class="fa fa-user" aria-hidden="true"></i>  <?= $pelapor ?> </a></li>
      </ul>
   </div>
</section>
<section class="wf100 p80 blog">
   <div class="blog-details">
      <div class="container">
         <div class="row">
            <div class="col-lg-12 col-md-12">
               <style type="text/css">
                  .btn-custom {
                      font-size: 10px;
                      line-height: 0;
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
               <span class="btn btn-sm btn-custom">
                  <a href="<?= base_url('wlapor/list/'.$this->session->userdata('username'));?>" style="color: #fff"><i class="fa fa-eye"></i> Lihat List</a>
               </span>
               <br><br>
               <!--Blog Single Content Start-->
               <div class="blog-single-content">
                  <h3><?= $judul_laporan; ?></h3>
                  <ul class="post-meta">
                     <li><i class="fas fa-user-circle"></i> <?= $pelapor; ?></li>
                     <?php
                     $tgl_laporan = substr($tgl_laporan,0,10); 
                     $tgl_laporan_jam = substr($tgl_laporan,11); 
                     ?>
                     <li><i class="fas fa-calendar-alt"></i> <?= tanggal_indo($tgl_laporan) ?> <?= $tgl_laporan_jam ?></li>
                     <!-- <li><i class="fas fa-comments"></i> 134 Comments</li> -->
                     <!-- <li class="tags"><i class="fas fa-tags"></i> <a href="#">Plant</a> <a href="#">Trees</a> <a href="#">Water</a> <a href="#">Recycling</a></li> -->
                  </ul>
                  <p><?= $deskripsi_laporan; ?></p>
                  <ul class="small-gallery">
                     <?php if ($data_laporan_gambar): $no = 0; foreach ($data_laporan_gambar as $row): $no++;?>
                        <?php 
                           if (!empty($row['gambar'])) {
                           $json = json_decode($row['gambar']); 
                           for ($i=0; $i < count($json); $i++) { 
                        ?>
                           <li> <img src="<?= base_url().'upload/lapor/'.$json[$i];?>" alt=""> </li>
                        <?php } } else { echo '-'; } ?>
                     <?php endforeach ?>
                     <?php else: ?>
                     <?php endif ?>
                  </ul>
               </div>
               <!--Blog Single Content End--> 
            </div>
         </div>
      </div>
   </div>
</section>