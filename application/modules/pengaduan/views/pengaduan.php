<link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">
<!-- [ Main Content ] start -->
<section class="pc-container">
    <div class="pcoded-content">
        <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h5 class="m-b-10">Page Pengaduan</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#!">Transaksi</a></li>
                            <li class="breadcrumb-item">Pengaduan</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ breadcrumb ] end -->
        <?php if ($this->session->flashdata('filed')): ?>
            <style>
                .alert {
                    display: flex;
                    padding: 40px 12px 38px;
                    margin-bottom: -30px;
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
                    padding: 0px 10px 0px 0px;
                }
            </style>
            <div class="row alert">
                <div class="col-lg-12 alert-danger">
                <h4 style="color: #000;"><i class="fa fa-info-circle"></i> Informasi!</h4><hr>
                <p style="color: #000;">Data Galeri sudah <b>aktif</b> di sistem, pastikan status tidak ada yang <b>aktif</b>!</p>
                </div>
            </div>
        <?php endif; ?>
        <!-- [ Main Content ] start -->
        <div class="row">
            <!-- [ table ] start -->
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="background: linear-gradient(45deg, #1f3d40, #1f3d40);">
                        <h4 style="color: #fff;">[Tables] Data Pengaduan </h4>
                        <span class="d-block m-t-5"><small style="color: #fff;">Last update - </small><code><?= tanggal_indo(date('d-m-Y'),true) ?></code> </span>
                    </div>
                    <div class="card-body table-border-style">
                        <div class="table-responsive">
                            <table id="example" class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Judul Laporan</th>
                                        <th>Jenis Sampah</th>
                                        <th>Harga</th>
                                        <th>Tanggal Laporan</th>
                                        <!-- <th>Lokasi Laporan</th> -->
                                        <th style="text-align: center;">Status</th>
                                        <th>Petugas</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php if ($data_laporan): $no = 0; foreach ($data_laporan as $row): $no++;?>
                                        <tr>
                                            <td><?= $no ?></td>
                                            <?php if ($row['judul_laporan'] == NULL) { ?>
                                                <td><i style="color: red;">NULL</i></td>
                                            <?php } else { ?>
                                                <td><?= $row['judul_laporan']; ?></td>
                                            <?php } ?>
                                            <?php if ($row['jenis_sampah'] == NULL) { ?>
                                                <td><i style="color: red;">NULL</i></td>
                                            <?php } else { ?>
                                                <td><?= $row['jenis_sampah']; ?></td>
                                            <?php } ?>
                                            <?php if ($row['harga_sampah'] == NULL) { ?>
                                                <td><i style="color: red;">NULL</i></td>
                                            <?php } else { ?>
                                                <td>Rp <?= number_format($row['harga_sampah'],2,',','.'); ?></td>
                                            <?php } ?>
                                            <td><?= tanggal_indo($row['tgl_laporan']); ?></td>
                                            <!-- <?php if ($row['lokasi_laporan'] == NULL) { ?>
                                                <td><i style="color: red;">NULL</i></td>
                                            <?php } else { ?>
                                                <td><?= $row['lokasi_laporan']; ?></td>
                                            <?php } ?> -->
                                            <!-- STATUS -->
                                            <?php if ($row['status'] == '1') { ?>
                                                <td style="text-align: center;"><i class="fa fa-ban" aria-hidden="true"></i> Belum di Take</td>
                                            <?php } else if ($row['status'] == '2') { ?>
                                                <td style="color:orange;text-align: center;"><i class="fa fa-check" aria-hidden="true"></i> <i>Proses jemput oleh <br><small><?= $row['petugas']; ?></small></i></td>
                                            <?php } else if ($row['status'] == '3') { ?>
                                                <td style="color:green;text-align: center;"><i class="fa fa-check" aria-hidden="true"></i> <i>Barang sesuai dan Diambil oleh <br><small><?= $row['petugas']; ?></small></i></td>
                                            <?php } else if ($row['status'] == '4') { ?>
                                                <td style="color:red;text-align: center;"><i class="fa fa-check" aria-hidden="true"></i> <i>Barang tidak sesuai</i></td>
                                            <?php } ?>
                                            <?php if ($row['petugas']) { ?>
                                                <td style="text-align: center;"><?= $row['petugas'] ?></td>
                                            <?php } else { ?>
                                                <td style="text-align: center;">
                                                    <form method="POST" action="<?= base_url('pengaduan/set_petugas')?>">
                                                        <input type="hidden" name="id_laporan" value="<?= $row['id_laporan'] ?>">
                                                        <select name="petugas">
                                                            <?php for ($i=0; $i < count($data_petugas); $i++) { ?>
                                                                <option value="">-- Pilih Petugas --</option>
                                                                <option value="<?= $data_petugas[$i]['username'] ?>"><?= $data_petugas[$i]['username'] ?></option>
                                                            <?php } ?>
                                                        </select>
                                                        <button type="submit" class="btn btn-sm btn-warning">Submit</button>
                                                    </form>
                                                </td>
                                            <?php } ?>
                                            <td>
                                                <button class="btn btn-sm btn-warning dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Aksi</button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="#!" data-toggle="modal" data-target="#Detail<?= $row['id_laporan']; ?>"><i class="fa fa-eye"></i> Detail</a>
                                                </div>
                                            </td>
                                        </tr>
                                        <!-- Detail -->
                                            <div id="Detail<?= $row['id_laporan']; ?>" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                                <div class="modal-dialog modal-lg" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header" style="background: linear-gradient(45deg, #1f3d40, #1f3d40);">
                                                            <h2 class="modal-title" id="exampleModalCenterTitle" style="color:#fff">Detail [Pengaduan] - ID <?= $row['id_laporan']; ?></h2>
                                                            <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <form method="POST" action="<?= base_url('users/changepass')?>" enctype="multipart/form-data">
                                                            <div class="modal-body">
                                                                <div class="row">
                                                                    <div class="form-group col-md-12">
                                                                        <div style="display: inline-flex;/* justify-content: inherit; *//* align-items: baseline; */height: 500px;margin-bottom: -241px;">
                                                                            <?php 
                                                                               if (!empty($row['gambar'])) {
                                                                               $json = json_decode($row['gambar']); 
                                                                               for ($i=0; $i < count($json); $i++) { 
                                                                            ?>
                                                                               <img src="<?= base_url().'upload/lapor/'.$json[$i];?>" alt="" style="width: 50%;height: 50%;">
                                                                            <?php } } else { echo '-'; } ?>
                                                                        </div>
                                                                    </div>
                                                                    <?php if ($row['status'] == '1') { ?>
                                                                        <div style="margin-bottom: 15px;"><i class="fa fa-ban" aria-hidden="true"></i> Belum di Take</div>
                                                                    <?php } else if ($row['status'] == '2') { ?>
                                                                        <div style="color:orange;margin-bottom: 15px;"><i class="fa fa-check" aria-hidden="true"></i> <i>Proses jemput oleh <br><small><?= $row['petugas']; ?></small></i></div>
                                                                    <?php } else if ($row['status'] == '3') { ?>
                                                                        <div style="color:green;margin-bottom: 15px;"><i class="fa fa-check" aria-hidden="true"></i> <i>Barang sesuai dan Diambil oleh <br><small><?= $row['petugas']; ?></small></i></div>
                                                                    <?php } else if ($row['status'] == '4') { ?>
                                                                        <div style="color:red;margin-bottom: 15px;"><i class="fa fa-check" aria-hidden="true"></i> <i>Barang tidak sesuai</i></div>
                                                                    <?php } ?>
                                                                    <hr>
                                                                    <div class="form-group col-md-6">
                                                                        <label class="form-label" for="Judul Laporan">Judul Laporan</label>
                                                                        <input type="text" name="tipe" class="form-control" id="Tanggal Registrasi" value="<?= $row['judul_laporan']; ?>" placeholder="Tanggal Registrasi" readonly>
                                                                    </div>
                                                                    <div class="form-group col-md-6">
                                                                        <label class="form-label" for="Pelapor">Pelapor</label>
                                                                        <input type="text" name="tipe" class="form-control" id="Tanggal Registrasi" value="<?= $row['pelapor']; ?>" placeholder="Tanggal Registrasi" readonly>
                                                                    </div>
                                                                    <div class="form-group col-md-4">
                                                                        <label class="form-label" for="Tipe Laporan">Tipe Laporan</label>
                                                                        <input type="text" name="tipe" class="form-control" id="Tanggal Registrasi" value="<?= $row['tipe']; ?>" placeholder="Tanggal Registrasi" readonly>
                                                                    </div>
                                                                    <div class="form-group col-md-4">
                                                                        <label class="form-label" for="Jenis Sampah">Jenis Sampah</label>
                                                                        <input type="text" name="tipe" class="form-control" id="Tanggal Registrasi" value="<?= $row['jenis_sampah']; ?>" placeholder="Tanggal Registrasi" readonly>
                                                                    </div>
                                                                    <div class="form-group col-md-4">
                                                                        <label class="form-label" for="Harga Sampah">Harga Sampah</label>
                                                                        <input type="text" name="tipe" class="form-control" id="Tanggal Registrasi" value="<?= "Rp. " . number_format($row['harga_sampah'],2,',','.'); ?>" placeholder="Tanggal Registrasi" readonly>
                                                                    </div>


                                                                    <div class="form-group col-md-6">
                                                                        <label class="form-label" for="Tanggal Laporan">Tanggal Laporan</label>
                                                                        <input type="text" name="tipe" class="form-control" id="Tanggal Registrasi" value="<?= tanggal_indo($row['tgl_laporan']); ?>" placeholder="Tanggal Registrasi" readonly>
                                                                    </div>
                                                                    <div class="form-group col-md-6">
                                                                        <label class="form-label" for="Lokasi Sampah">Lokasi Sampah</label>
                                                                        <input type="text" name="tipe" class="form-control" id="Tanggal Registrasi" value="<?= $row['lokasi_laporan']; ?>" placeholder="Tanggal Registrasi" readonly>
                                                                    </div>
                                                                    <div class="form-group col-md-6">
                                                                        <label class="form-label" for="No. Telepon">No. Telepon</label>
                                                                        <input type="text" name="tipe" class="form-control" id="Tanggal Registrasi" value="<?= $row['NoHP']; ?>" placeholder="Tanggal Registrasi" readonly>
                                                                    </div>
                                                                    <div class="form-group col-md-6">
                                                                        <label class="form-label" for="Email">Email</label>
                                                                        <input type="text" name="tipe" class="form-control" id="Tanggal Registrasi" value="<?= $row['Email']; ?>" placeholder="Tanggal Registrasi" readonly>
                                                                    </div>
                                                                    <div class="form-group col-md-4">
                                                                        <label class="form-label" for="Berat">Berat (per gram)</label>
                                                                        <input type="text" name="tipe" class="form-control" value="<?= $row['berat']; ?>" placeholder="Berat" readonly>
                                                                    </div>
                                                                    <div class="form-group col-md-4">
                                                                        <label class="form-label" for="Berat setelah ditimbang">Berat setelah ditimbang (per gram)</label>
                                                                        <input type="text" name="tipe" class="form-control" value="<?= $row['berat_real']; ?>" placeholder="Berat setelah ditimbang" readonly>
                                                                    </div>
                                                                    <div class="form-group col-md-4">
                                                                        <label class="form-label" for="Total Harga">Total Harga</label>
                                                                        <input type="text" name="tipe" class="form-control" value="Rp <?= number_format($row['harga_real_sampah'],2,',','.'); ?>" placeholder="Total Harga" readonly>
                                                                    </div>

                                                                    <div class="form-group col-md-12">
                                                                        <label class="form-label" for="Deskripsi Laporan">Deskripsi Laporan</label>
                                                                        <textarea type="text" name="Deskripsi Laporan" class="form-control" id="Deskripsi Laporan" placeholder="Deskripsi Laporan" readonly><?= $row['deskripsi_laporan']; ?></textarea>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-sm btn-warning" data-dismiss="modal">Tutup</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        <!-- End Detail -->
                                        <!-- Edit -->
                                            <div id="Edit<?= $row['id_laporan']; ?>" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                                <div class="modal-dialog modal-lg" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header" style="background: linear-gradient(45deg, #1f3d40, #1f3d40);">
                                                            <h2 class="modal-title" id="exampleModalCenterTitle" style="color:#fff">Edit [Galeri] - ID <?= $row['id_laporan']; ?></h2>
                                                            <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <form method="POST" action="<?= base_url('galeri/updating')?>" enctype="multipart/form-data">
                                                            <div class="modal-body">
                                                                <div class="row">
                                                                    <div class="form-group col-md-6">
                                                                        <center>
                                                                            <?php if ($row['foto'] == NULL) { ?>
                                                                                <img src="<?= base_url('assuts/images/aboutpic5.jpg');?>" style="width: 144px;height: 144px;">
                                                                            <?php } else { ?>
                                                                                <img src="<?= base_url('upload/galeri/'.$row['foto']);?>" style="width: 100%;height: 100%;">
                                                                            <?php } ?>
                                                                        </center>
                                                                    </div>
                                                                    <div class="form-group col-md-6">
                                                                        <label class="form-label" for="Status Galeri">Status Galeri</label>
                                                                        <select name="status" class="form-control" id="Status Galeri" readonly>
                                                                            <?php if ($row['status'] == '1') { ?>
                                                                                <option value="1">Aktif</option>
                                                                            <?php } else if ($row['status'] == '2') { ?>
                                                                                <option value="2">Non-Aktif</option>
                                                                            <?php } ?>
                                                                            <option value="">-- Pilih Status Galeri --</option>
                                                                            <option value="1">Aktif</option>
                                                                            <option value="2">Non-Aktif</option>
                                                                        </select>
                                                                        <label class="form-label" for="Tanggal Registrasi">Tanggal Upload</label>
                                                                        <input type="text" class="form-control" id="Tanggal Registrasi" value="<?= $row['created_date']; ?>" placeholder="Tanggal Registrasi" readonly>
                                                                        <label class="form-label" for="Remaks">Remaks</label>
                                                                        <textarea type="text" name="remaks" class="form-control" id="Remaks" placeholder="Remaks"><?= $row['remaks']; ?></textarea>
                                                                        <input type="hidden" name="created_date" value="<?= date('Y-m-d h:m:i') ?>">
                                                                        <input type="hidden" name="id_laporan" value="<?= $row['id_laporan']; ?>">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-sm btn-warning" data-dismiss="modal">Tutup</button>
                                                                <button type="submit" class="btn btn-sm btn-info">Update</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        <!-- End Edit -->
                                        <!-- Cahnge Foto -->
                                            <div id="CahngeFoto<?= $row['id_laporan']; ?>" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                                <div class="modal-dialog modal-lg" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header" style="background: linear-gradient(45deg, #1f3d40, #1f3d40);">
                                                            <h2 class="modal-title" id="exampleModalCenterTitle" style="color:#fff">Ganti Foto [Galeri] - ID <?= $row['id_laporan']; ?></h2>
                                                            <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <form method="POST" action="<?= base_url('galeri/changefoto')?>" enctype="multipart/form-data">
                                                            <div class="modal-body">
                                                                <div class="row">
                                                                    <div class="form-group col-md-6">
                                                                        <center>
                                                                            <?php if ($row['foto'] == NULL) { ?>
                                                                                <img src="<?= base_url('assuts/images/aboutpic5.jpg');?>" style="width: 144px;height: 144px;">
                                                                            <?php } else { ?>
                                                                                <img src="<?= base_url('upload/galeri/'.$row['foto']);?>" style="width: 100%;height: 100%;">
                                                                            <?php } ?>
                                                                        </center>
                                                                    </div>
                                                                    <div class="form-group col-md-6">
                                                                        <label class="form-label" for="Foto">Foto</label>
                                                                        <input type="file" name="foto" class="form-control" id="Foto" placeholder="Foto" required>
                                                                        <small style="color: red;"><i> Format File : JPG | JPEG | PNG</i></small>
                                                                        <br>
                                                                        <small style="color: red;"><i> Jika Anda memiliki file yang ingin Anda unggah, pastikan file tersebut di bawah Maksimum 2MB</i></small>
                                                                        <br>
                                                                        <label class="form-label" for="Status Galeri">Status Galeri</label>
                                                                        <select name="status" class="form-control" id="Status Galeri" readonly>
                                                                            <?php if ($row['status'] == '1') { ?>
                                                                                <option value="1">Aktif</option>
                                                                            <?php } else if ($row['status'] == '2') { ?>
                                                                                <option value="2">Non-Aktif</option>
                                                                            <?php } ?>
                                                                            <option value="">-- Pilih Status Galeri --</option>
                                                                            <option value="1">Aktif</option>
                                                                            <option value="2">Non-Aktif</option>
                                                                        </select>
                                                                        <label class="form-label" for="Tanggal Registrasi">Tanggal Upload</label>
                                                                        <input type="text" name="created_date" class="form-control" id="Tanggal Registrasi" value="<?= $row['created_date']; ?>" placeholder="Tanggal Registrasi" readonly>
                                                                        <label class="form-label" for="Remaks">Remaks</label>
                                                                        <textarea type="text" name="remaks" class="form-control" id="Remaks" placeholder="Remaks" readonly><?= $row['remaks']; ?></textarea>
                                                                        <input type="hidden" name="id_laporan" class="form-control" value="<?= $row['id_laporan']; ?>">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-sm btn-warning" data-dismiss="modal">Tutup</button>
                                                                <button type="submit" class="btn btn-sm btn-info">Ganti Foto</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        <!-- End Cahnge Foto -->
                                        <!-- Non-Aktif -->
                                            <div id="Non-Aktif<?= $row['id_laporan']; ?>" class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" style="background: linear-gradient(45deg, #f44336a1, #f44336a1);">
                                                <div class="modal-dialog modal-dialog-centered" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header" style="background: linear-gradient(45deg, #1f3d40, #1f3d40);">
                                                            <h6 class="modal-title" id="exampleModalCenterTitle" style="color:#fff">Non-Aktif [Galeri] - ID <?= $row['id_laporan']; ?></h6>
                                                            <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <form method="POST" action="<?= base_url('galeri/nonaktif')?>" enctype="multipart/form-data">
                                                            <div class="modal-body">
                                                                <div class="row">
                                                                    <div class="form-group col-md-12">
                                                                        <h5>Apa kamu yakin ingin Non-Aktif Galeri?</h5>
                                                                        <hr>
                                                                        <div class="form-group col-md-12">
                                                                            <center>
                                                                                <?php if ($row['foto'] == NULL) { ?>
                                                                                    <img src="<?= base_url('assuts/images/aboutpic5.jpg');?>" style="width: 144px;height: 144px;">
                                                                                <?php } else { ?>
                                                                                    <img src="<?= base_url('upload/galeri/'.$row['foto']);?>" style="width: 100%;height: 100%;">
                                                                                <?php } ?>
                                                                            </center>
                                                                        </div>
                                                                        <input type="hidden" name="status" class="form-control" value="2">
                                                                        <input type="hidden" name="id_laporan" class="form-control" value="<?= $row['id_laporan']; ?>">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-sm btn-warning" data-dismiss="modal">Tidak</button>
                                                                <button type="submit" class="btn btn-sm btn-danger">Ya</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        <!-- End Non-Aktif -->
                                        <!-- Aktif -->
                                            <div id="Aktif<?= $row['id_laporan']; ?>" class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" style="background: linear-gradient(45deg, #f44336a1, #f44336a1);">
                                                <div class="modal-dialog modal-dialog-centered" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header" style="background: linear-gradient(45deg, #1f3d40, #1f3d40);">
                                                            <h6 class="modal-title" id="exampleModalCenterTitle" style="color:#fff">Aktif [Galeri] - ID <?= $row['id_laporan']; ?></h6>
                                                            <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <form method="POST" action="<?= base_url('galeri/aktif')?>" enctype="multipart/form-data">
                                                            <div class="modal-body">
                                                                <div class="row">
                                                                    <div class="form-group col-md-12">
                                                                        <h5>Apa kamu yakin ingin Aktif Galeri?</h5>
                                                                        <hr>
                                                                        <div class="form-group col-md-12">
                                                                            <center>
                                                                                <?php if ($row['foto'] == NULL) { ?>
                                                                                    <img src="<?= base_url('assuts/images/aboutpic5.jpg');?>" style="width: 144px;height: 144px;">
                                                                                <?php } else { ?>
                                                                                    <img src="<?= base_url('upload/galeri/'.$row['foto']);?>" style="width: 100%;height: 100%;">
                                                                                <?php } ?>
                                                                            </center>
                                                                        </div>
                                                                        <input type="hidden" name="status" class="form-control" value="1">
                                                                        <input type="hidden" name="id_laporan" class="form-control" value="<?= $row['id_laporan']; ?>">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-sm btn-warning" data-dismiss="modal">Tidak</button>
                                                                <button type="submit" class="btn btn-sm btn-danger">Ya</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        <!-- End Aktif -->
                                        <!-- Delete  -->
                                            <div id="Delete<?= $row['id_laporan']; ?>" class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" style="background: linear-gradient(45deg, #f44336a1, #f44336a1);">
                                                <div class="modal-dialog modal-dialog-centered" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header" style="background: linear-gradient(45deg, #1f3d40, #1f3d40);">
                                                            <h6 class="modal-title" id="exampleModalCenterTitle" style="color:#fff">Hapus Data [Galeri] - ID <?= $row['id_laporan']; ?></h6>
                                                            <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <form method="POST" action="<?= base_url('galeri/delete')?>" enctype="multipart/form-data">
                                                            <div class="modal-body">
                                                                <div class="row">
                                                                    <div class="form-group col-md-12">
                                                                        <h5>Apa kamu yakin ingin menghapus ini?</h5>
                                                                        <hr>
                                                                        <div class="form-group col-md-12">
                                                                            <center>
                                                                                <?php if ($row['foto'] == NULL) { ?>
                                                                                    <img src="<?= base_url('assuts/images/aboutpic5.jpg');?>" style="width: 144px;height: 144px;">
                                                                                <?php } else { ?>
                                                                                    <img src="<?= base_url('upload/galeri/'.$row['foto']);?>" style="width: 100%;height: 100%;">
                                                                                <?php } ?>
                                                                            </center>
                                                                        </div>
                                                                        <input type="hidden" name="id_laporan" class="form-control" value="<?= $row['id_laporan']; ?>">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-sm btn-warning" data-dismiss="modal">Tidak</button>
                                                                <button type="submit" class="btn btn-sm btn-danger">Ya</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        <!-- End Delete -->
                                    <?php endforeach ?>
                                    <?php else: ?>
                                        <tr>
                                            <td colspan="8">
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
            <!-- [ table ] end -->
        </div>
        <!-- [ Main Content ] end -->
    </div>
</section>
<!-- [ Main Content ] end -->
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