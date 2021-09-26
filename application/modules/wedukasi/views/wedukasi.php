<!--Inner Header Start-->
   <section class="wf100 p100 inner-header">
      <div class="container">
         <h1>Edukasi</h1>
         <ul>
            <li><a href="#"><i class="fa fa-home"></i> Beranda </a></li>
            <li><a href="#"><i class="fa fa-book"></i>  Edukasi </a></li>
         </ul>
      </div>
   </section>
<!--Inner Header End-->
   <section class="wf100 p80 events">
      <div class="event-posts">
         <div class="container">
            <div class="row">
               <!--Blog Post Start-->
               <?php if ($data_edukasi): $no = 0; foreach ($data_edukasi as $row_edukasi): $no++;?>
                  <div class="col-md-4 col-sm-6">
                     <div class="event-post">
                        <div class="event-thumb">
                           <a href="<?= base_url('wedukasi/detail/'.$row_edukasi['id_education']);?>"><i class="fas fa-link"></i></a> <img src="<?= base_url('upload/edukasi/'.$row_edukasi['foto']);?>" alt="">
                           <ul class="post-meta">
                              <?php
                              $tgl_educationn = substr($row_edukasi['tgl_education'],0,10); 
                              $tgl_educationn_jam = substr($row_edukasi['tgl_education'],11); 
                              ?>
                              <li><i class="fas fa-calendar-alt"></i> <?= tanggal_indo($tgl_educationn) ?></li>
                              <li><i class="fas fa-clock"></i> <?= $tgl_educationn_jam ?></li>
                           </ul>
                        </div>
                        <div class="event-txt">
                           <h6 style="
                              font-size:16px;
                              letter-spacing:.5px;
                              background-color:#e5e5e5;
                              border-radius:15px;
                              width:90px;
                              text-align:center;
                              padding-top:5px;
                              padding-bottom:5px;">
                              <a href="#"><?= $row_edukasi['jenis_sampah'];?></a>
                           </h6>
                           <h5><a href="#"><?= $row_edukasi['judul'];?></a></h5>
                           <?php
                              $num_char = 90;
                              $potong = $row_edukasi['description'];
                              $deskripsion = substr($potong, 0, $num_char) . '...';
                           ?>
                           <p><i class="fas fa-comments"></i> <?= $deskripsion; ?> </p>
                        </div>
                     </div>
                  </div>
               <?php endforeach ?>
               <?php else: ?>
               <?php endif ?>
               <!--Blog Post End-->
            </div>
         </div>
      </div>
   </section>
<!--Causes End--> 