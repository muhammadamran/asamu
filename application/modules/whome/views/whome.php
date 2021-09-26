<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
   window.onload = function () {

   var chart = new CanvasJS.Chart("chartContainer", {
      exportEnabled: true,
      animationEnabled: true,
      title:{
         text: "Chart <?= $this->session->userdata('title');?>"
      },
      legend:{
         cursor: "pointer",
         itemclick: explodePie
      },
      data: [{
         type: "pie",
         showInLegend: true,
         toolTipContent: "{name}: <strong>{y}</strong>",
         indexLabel: "{name} {y}",
         dataPoints: [
            { y: <?= $total_anorganik; ?>, name: "Anorganik" },
            { y: <?= $total_organik; ?>, name: "Organik" }
         ]
      }]
   });
   chart.render();
   }

   function explodePie (e) {
      if(typeof (e.dataSeries.dataPoints[e.dataPointIndex].exploded) === "undefined" || !e.dataSeries.dataPoints[e.dataPointIndex].exploded) {
         e.dataSeries.dataPoints[e.dataPointIndex].exploded = true;
      } else {
         e.dataSeries.dataPoints[e.dataPointIndex].exploded = false;
      }
      e.chart.render();

   }
</script>
<!--Slider Start-->
   <section id="home-slider" class="owl-carousel owl-theme wf100">
   <?php if ($data_slider): $no = 0; foreach ($data_slider as $row_slider): $no++;?>
      <div class="item">
         <div class="slider-caption h3slider">
            <div class="container">
               <strong><?= $row_slider['slogan_one'];?></strong>
               <h1><?= $row_slider['slogan_two'];?> </h1>
            </div>
         </div>
         <img src="<?= base_url('upload/slider/'.$row_slider['foto']);?>" alt=""> 
      </div>
   <?php endforeach ?>
   <?php else: ?>
   <?php endif ?>
   </section>
<!--Slider End--> 
<!--Service Area Start-->
   <section class="services-area wf100">
      <?php if (!$this->session->userdata('role')) { ?>
         <h3 style="padding: 25px;text-align:center;">Apakah anda memiliki sampah yang dapat ditukar? <a href="<?= base_url('wlogin') ?>">Klik disini</a>.</h3>
      <?php } ?>
      <div class="container">
         <ul>
            <!--box  start-->
            <li>
               <div class="sinfo">
                  <img src="<?= base_url('assuts/images/sericon1.png');?>" alt="">
                  <h6>Recycling</h6>
                  <p>Waste Management</p>
               </div>
            </li>
            <!--box  end--> 
            <!--box  start-->
            <li>
               <div class="sinfo">
                  <img src="<?= base_url('assuts/images/sericon2.png');?>" alt="">
                  <h6>Wind Energy</h6>
                  <p>Polar, Prevailing, Tropical</p>
               </div>
            </li>
            <!--box  end--> 
            <!--box  start-->
            <li>
               <div class="sinfo">
                  <img src="<?= base_url('assuts/images/sericon3.png');?>" alt="">
                  <h6>Pure Water</h6>
                  <p>Save Water Resources</p>
               </div>
            </li>
            <!--box  end--> 
            <!--box  start-->
            <li>
               <div class="sinfo">
                  <img src="<?= base_url('assuts/images/sericon4.png');?>" alt="">
                  <h6>Solar Panels</h6>
                  <p>Save Natural Engery</p>
               </div>
            </li>
            <!--box  end--> 
            <!--box  start-->
            <li>
               <div class="sinfo">
                  <img src="<?= base_url('assuts/images/sericon5.png');?>" alt="">
                  <h6>Forest Planting</h6>
                  <p>Make Plants Alive for Life</p>
               </div>
            </li>
            <!--box  end-->
         </ul>
      </div>
   </section>
<!--Service Area End--> 
<!--About Section Start-->
   <section class="h3-about wf100 p80">
      <h3 style="padding: 10px 25px 40px;text-align:center;">Apakah anda sudah mengetahui sampah apa saja yang dapat dikelola? <a href="<?= base_url('wedukasi') ?>">Klik disini</a>.</h3>
      <div class="container">
         <div class="row">
            <div class="col-md-6">
               <div class="h3-aboutxt">
                  <h1>Data <span><?= $this->session->userdata('title');?></span> Services</h1>
                  <p align="justify"> Bank sampah adalah suatu tempat yang digunakan untuk mengumpulkan sampah yang sudah dipilah-pilah. Hasil dari pengumpulan sampah yang sudah dipilah akan disetorkan ke tempat pembuatan kerajinan dari sampah atau ke tempat pengepul sampah.</p>
                  <p><i class="fa fa-users"></i> Masyarakat &nbsp;&nbsp; <i class="fa fa-recycle"></i> <?= $this->session->userdata('title');?>  &nbsp;&nbsp; <i class="fa fa-user"></i> Petugas &nbsp;&nbsp; <i class="fa fa-desktop"></i> System </p>
                  <ul class="counter">
                     <li>
                        <p class="counter-count"><?= $total_edukasi; ?></p>
                        <p class="ctxt">Edukasi</p>
                     </li>
                     <li>
                        <p class="counter-count"><?= $total_pengguna; ?></p>
                        <p class="ctxt">Pengguna</p>
                     </li>
                     <li>
                        <p class="counter-count"><?= $total_laporan; ?></p>
                        <p class="ctxt">Laporan Sampah</p>
                     </li>
                  </ul>
               </div>
            </div>
            <div class="col-md-6">
               <div id="chartContainer"></div>
               <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
            </div>
         </div>
      </div>
   </section>
<!--About Section End--> 
<!--Current Projects Start-->
   <section class="our-core-projects wf100 p80 current-projects">
      <div class="container">
         <div class="row">
            <div class="col-lg-12">
            <div class="h3-stitle">
                  <h1>Edukasi</h1>
                  <p> Edukasi terkait <?= $this->session->userdata('title');?>. </p>
               </div>
            </div>
         </div>
         <div class="row">
            <div class="col-md-12">
               <div class="tab-content" id="myTabContent">
                  <!--WildLife Slider Start-->
                  <div class="tab-pane fade show active" id="wildlife" role="tabpanel" aria-labelledby="wildlife-tab">
                     <div class="cpro-slider owl-carousel owl-theme">
                        <?php if ($data_edukasi): $no = 0; foreach ($data_edukasi as $row_edukasi): $no++;?>
                        <!--Pro Box-->
                        <div class="item">
                           <div class="pro-box">
                              <img src="<?= base_url('upload/edukasi/'.$row_edukasi['foto']);?>" alt="" style="height: 350px;">
                              <h5><?= $row_edukasi['judul'];?></h5>
                              <div class="pro-hover">
                                 <h6><?= $row_edukasi['judul'];?></h6>
                                 <?php
                                    $num_char = 90;
                                    $potong = $row_edukasi['description'];
                                    $deskripsion = substr($potong, 0, $num_char) . '...';
                                 ?>
                                 <p><?= $deskripsion; ?></p>
                                 <?php
                                 $tgl_educationn = substr($row_edukasi['tgl_education'],0,10); 
                                 $tgl_educationn_jam = substr($row_edukasi['tgl_education'],11); 
                                 ?>
                                 <small><i class="fas fa-calendar-alt"></i> <?= tanggal_indo($tgl_educationn) ?> <?= $tgl_educationn_jam ?></small>
                                 <br>
                                 <a href="<?= base_url('wedukasi/detail/'.$row_edukasi['id_education']);?>" target="_blank"><i class="fa fa-eye"></i> Lihat detail</a> 
                              </div>
                           </div>
                        </div>
                        <!--Pro Box End--> 
                        <?php endforeach ?>
                        <?php else: ?>
                        <?php endif ?>
                     </div>
                  </div>
                  <!--WildLife Slider End--> 
               </div>
            </div>
         </div>
      </div>
   </section>
<!--Current Projects End--> 
<!--Current Projects Start-->
   <section class=" wf100 p80 current-projects">
      <div class="container">
         <div class="row">
            <div class="col-lg-12">
            <div class="h3-stitle">
                  <h1 style="color: #000;">Galeri <?= $this->session->userdata('title');?></h1>
                  <!-- <p> We are working on different projects related with Eco, and we are providing all kinds of Eco-Friendly and Environmental Services. </p> -->
               </div>
            </div>
         </div>
         <div class="row">
            <div class="col-md-12">
               <div class="tab-content" id="myTabContent">
                  <!--WildLife Slider Start-->
                  <div class="tab-pane fade show active" id="wildlife" role="tabpanel" aria-labelledby="wildlife-tab">
                     <div class="cpro-slider owl-carousel owl-theme">
                     <?php if ($data_galeri): $no = 0; foreach ($data_galeri as $row_galeri): $no++;?>
                        <!--Pro Box-->
                        <div class="item">
                           <div class="pro-box">
                              <img src="<?= base_url('upload/galeri/'.$row_galeri['foto']);?>" alt="" style="width: 100%;height: 250px;"> 
                              <h5><?= $row_galeri['remaks'] ?></h5>
                              <div class="pro-hover">
                                 <h6><?= $row_galeri['remaks'] ?></h6>
                                 <p> <small><i class="fa fa-calendar"></i> <?= $row_galeri['created_date'] ?></small></p>
                                 <a href="#" data-toggle="modal" data-target="#exampleModalCenter<?= $row_galeri['id_gallery']; ?>"> <i class="fas fa-search"></i> Lihat Gambar </a> 
                              </div>
                           </div>
                        </div>
                        <!--Pro Box End--> 
                     <?php endforeach ?>
                     <?php else: ?>
                     <?php endif ?>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
<!--Current Projects End--> 
<!--InstaGram Start 7 -->
      <?php if ($data_galeri): $no = 0; foreach ($data_galeri as $row_galeri): $no++;?>
      <!-- Modal Galeri -->
            <style>
               .modal-content-custom {
                  position: relative;
                  display: -ms-flexbox;
                  display: flex;
                  -ms-flex-direction: column;
                  flex-direction: column;
                  width: 100%;
                  pointer-events: auto;
                  background-color: transparent;
                  background-clip: padding-box;
                  border-radius: .3rem;
                  outline: 0;
               }
               .modal-footer-custom {
                  display: -ms-flexbox;
                  display: flex;
                  -ms-flex-align: center;
                  align-items: center;
                  -ms-flex-pack: end;
                  justify-content: flex-end;
                  padding: 1rem;
               }
               .img-modal {
                  display: block;
                  height: auto;
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
            <div id="exampleModalCenter<?= $row_galeri['id_gallery']; ?>" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" style="background: linear-gradient(45deg, #00000080, #00000080);">
               <div class="modal-dialog modal-lg" role="document">
                  <div class="modal-content-custom">
                     <div class="modal-footer-custom">
                        <span class="closebtn" data-dismiss="modal">&times;</span> 
                     </div>
                     <center>
                        <img src="<?= base_url('upload/galeri/'.$row_galeri['foto']);?>" class="img-modal" style="width: 50%;display: block;align-items:center" alt=""> 
                     </center>
                  </div>
               </div>
            </div>
      <!-- End Modal Galeri -->
      <?php endforeach ?>
      <?php else: ?>
      <?php endif ?>
<!--InstaGram End-->