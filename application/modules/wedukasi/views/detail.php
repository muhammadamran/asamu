<section class="wf100 p100 inner-header">
   <div class="container">
      <h1><?= $judul; ?></h1>
      <ul>
         <li><a href="#"><i class="fa fa-home"></i> Beranda </a></li>
         <li><a href="#"><i class="fa fa-book"></i>  Edukasi </a></li>
      </ul>
   </div>
</section>
<section class="wf100 p80 blog">
   <div class="blog-details">
      <div class="container">
         <div class="row">
            <div class="col-lg-12 col-md-12">
               <!--Blog Single Content Start-->
               <div class="blog-single-content">
                  <div class="blog-single-thumb"><img src="<?= base_url('upload/edukasi/'.$foto);?>" alt=""></div>
                  <h6 style="
                     font-size:16px;
                     letter-spacing:.5px;
                     background-color:#e5e5e5;
                     border-radius:15px;
                     width:90px;
                     text-align:center;
                     padding-top:5px;
                     padding-bottom:5px;">
                     <?= $jenis_sampah;?>
                  </h6>
                  <h3><?= $judul; ?></h3>
                  <ul class="post-meta">
                     <li><i class="fas fa-user-circle"></i> <?= $created_by; ?></li>
                     <?php
                     $tgl_educationn = substr($tgl_education,0,10); 
                     $tgl_educationn_jam = substr($tgl_education,11); 
                     ?>
                     <li><i class="fas fa-calendar-alt"></i> <?= tanggal_indo($tgl_educationn) ?> <?= $tgl_educationn_jam ?></li>
                     <!-- <li><i class="fas fa-comments"></i> 134 Comments</li> -->
                     <!-- <li class="tags"><i class="fas fa-tags"></i> <a href="#">Plant</a> <a href="#">Trees</a> <a href="#">Water</a> <a href="#">Recycling</a></li> -->
                  </ul>
                  <p><?= $description; ?></p>
                  <ul class="small-gallery">
                     <?php if ($data_edukasi_galey): $no = 0; foreach ($data_edukasi_galey as $row): $no++;?>
                        <?php 
                           if (!empty($row['gambar'])) {
                           $json = json_decode($row['gambar']); 
                           for ($i=0; $i < count($json); $i++) { 
                        ?>
                           <li> <img src="<?= base_url().'upload/edukasi/galeri/'.$json[$i];?>" alt=""> </li>
                        <?php } } else { echo '-'; } ?>
                     <?php endforeach ?>
                     <?php else: ?>
                     <?php endif ?>
                  </ul>
                  <!--Related Posts Start-->
                  <div class="wf100 related-posts">
                     <h4>Edukasi Terkait</h4>
                     <ul>
                        <?php if ($data_edukasi): $no = 0; foreach ($data_edukasi as $row_edukasi): $no++;?>
                        <li>
                           <div class="rp-box">
                              <h6> <a href="<?= base_url('wedukasi/detail/'.$row_edukasi['id_education']);?>"><?= $row_edukasi['judul'];?></a> </h6>
                              <ul class="post-meta">
                                 <?php
                                 $tgl_educationn = substr($row_edukasi['tgl_education'],0,10); 
                                 $tgl_educationn_jam = substr($row_edukasi['tgl_education'],11); 
                                 ?>
                                 <li> <a href="<?= base_url('wedukasi/detail/'.$row_edukasi['id_education']);?>"><i class="fas fa-calendar-alt"></i> <?= tanggal_indo($tgl_educationn) ?> <?= $tgl_educationn_jam ?></a> </li>
                              </ul>
                           </div>
                        </li>
                        <?php endforeach ?>
                        <?php else: ?>
                        <?php endif ?>
                     </ul>
                  </div>
                  <!--Related Posts End--> 
               </div>
               <!--Blog Single Content End--> 
            </div>
         </div>
      </div>
   </div>
</section>