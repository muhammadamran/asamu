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
                            <h5 class="m-b-10">Page Edukasi</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#!">Transaksi</a></li>
                            <li class="breadcrumb-item">Edukasi</li>
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
                <p style="color: #000;">Data Edukasi sudah <b>aktif</b> di sistem, pastikan status tidak ada yang <b>aktif</b>!</p>
                </div>
            </div>
        <?php endif; ?>
        <!-- [ Main Content ] start -->
        <div class="row">
            <!-- [ table ] start -->
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="background: linear-gradient(45deg, #1f3d40, #1f3d40);">
                        <h4 style="color: #fff;">[Tables] Data Edukasi </h4>
                        <span class="d-block m-t-5"><small style="color: #fff;">Last update - </small><code><?= tanggal_indo(date('d-m-Y'),true) ?></code> </span>
                    </div>
                    <div class="card-body table-border-style">
                        <!-- Add Data Edukasi -->
                            <button type="button" class="btn btn-sm btn-icon btn-success" data-toggle="modal" data-target="#exampleModalCenter"><i data-feather="check-circle"></i> Tambah Data</button>
                            <div id="exampleModalCenter" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" style="background: linear-gradient(45deg, #79ccb880, #79ccb880);">
                                <div class="modal-dialog modal-lg" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header" style="background: linear-gradient(45deg, #1f3d40, #1f3d40);">
                                            <h2 class="modal-title" id="exampleModalCenterTitle" style="color:#fff">Add Data [Edukasi]</h2>
                                            <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <form method="POST" action="<?= base_url('edukasi/adding')?>" enctype="multipart/form-data">
                                            <div class="modal-body">
                                                <div class="row">
                                                    <div class="form-group col-md-12">
                                                        <label class="form-label" for="Judul Edukasi">Judul Edukasi</label>
                                                        <input type="text" name="judul" class="form-control" id="Judul" placeholder="Judul Edukasi" required>
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label class="form-label" for="Jenis Edukasi">Jenis Edukasi</label>
                                                        <select name="jenis_sampah" class="form-control" id="Jenis Edukasi" required>
                                                            <option value="">-- Pilih Jenis Edukasi --</option>
                                                            <option value="Anorganik">Anorganik</option>
                                                            <option value="Organik">Organik</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label class="form-label" for="Foto">Foto</label>
                                                        <input type="file" name="foto" class="form-control" id="Foto" placeholder="Foto" required>
                                                        <small style="color: red;"><i> Format File : JPG | JPEG | PNG</i></small>
                                                        <br>
                                                        <small style="color: red;"><i> Jika Anda memiliki file yang ingin Anda unggah, pastikan file tersebut di bawah Maksimum 2MB</i></small>
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label class="form-label" for="Status Edukasi">Status Edukasi</label>
                                                        <select name="status" class="form-control" id="Status Edukasi" required>
                                                            <option value="">-- Pilih Status Edukasi --</option>
                                                            <option value="1">Aktif</option>
                                                            <option value="2">Non-Aktif</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group col-md-12">
                                                        <label class="form-label" for="Galeri">Galeri</label>
                                                        <div class="custom-file">
                                                            <input type="file" class="form-control" name="pic[]" required  multiple />
                                                        </div>
                                                        <small style="color: red;"><i> Input Gambar lebih dari 1 File!, "CTRL + Pilih File"</i></small>
                                                    </div>
                                                    <div class="form-group col-md-12">
                                                        <label class="form-label" for="Tanggal Edukasi">Tanggal Edukasi</label>
                                                        <input type="datetime-local" name="tgl_education" class="form-control" id="Tanggal Edukasi" placeholder="Tanggal Edukasi" required>
                                                    </div>
                                                    <div class="form-group col-md-12">
                                                        <label class="form-label" for="Deskripsi">Deskripsi</label>
                                                        <textarea type="text" name="description" class="form-control" id="Deskripsi" placeholder="Deskripsi"></textarea>
                                                    </div>
                                                    <div class="form-group col-md-12">
                                                        <label class="form-label" for="Remaks">Remaks</label>
                                                        <textarea type="text" name="remaks" class="form-control" id="Remaks" placeholder="Remaks"></textarea>
                                                        <input type="hidden" name="created_date" value="<?= date('Y-m-d h:m:i') ?>">
                                                        <input type="hidden" name="created_by" value="<?= $this->session->userdata('full_name'); ?>">
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
                        <!-- End Add Data Edukasi -->
                        <hr>
                        <div class="table-responsive">
                            <table id="example" class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Judul</th>
                                        <th>Jenis</th>
                                        <th style="text-align: center;">Foto</th>
                                        <th>Tanggal Edukasi</th>
                                        <th>Deskripsi</th>
                                        <th>Dibuat Tanggal</th>
                                        <th style="text-align: center;">Status</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php if ($data_edukasi): $no = 0; foreach ($data_edukasi as $row): $no++;?>
                                        <tr>
                                            <td><?= $no ?></td>
                                            <?php if ($row['judul'] == NULL) { ?>
                                                <td><i style="color: red;">NULL</i></td>
                                            <?php } else { ?>
                                                <td><?= $row['judul']; ?></td>
                                            <?php } ?>
                                            <?php if ($row['jenis_sampah'] == NULL) { ?>
                                                <td><i style="color: red;">NULL</i></td>
                                            <?php } else { ?>
                                                <td><?= $row['jenis_sampah']; ?></td>
                                            <?php } ?>
                                            <?php if ($row['foto'] == NULL) { ?>
                                                <td style="display:block;text-align:center;">
                                                    <img src="<?= base_url('assuts/images/aboutpic5.jpg');?>" style="width: 35px;height: 35px;">
                                                </td>
                                            <?php } else { ?>
                                                <td style="display:block;text-align:center;">
                                                    <img src="<?= base_url('upload/edukasi/'.$row['foto']);?>" style="width: 35px;height: 35px;border-radius: 50%;">
                                                </td>
                                            <?php } ?>
                                            <?php if ($row['tgl_education'] == NULL) { ?>
                                                <td><i style="color: red;">NULL</i></td>
                                            <?php } else { ?>
                                                <td><?= $row['tgl_education']; ?></td>
                                            <?php } ?>
                                            <?php if ($row['description'] == NULL) { ?>
                                                <td><i style="color: red;">NULL</i></td>
                                            <?php } else { ?>
                                            <?php
                                                $num_char = 10;
                                                $potong = $row['description'];
                                                $deskripsion = substr($potong, 0, $num_char) . '...';
                                             ?>
                                                <td><?= $deskripsion; ?></td>
                                            <?php } ?>
                                            <td><?= $row['created_date']; ?></td>
                                            <!-- STATUS -->
                                            <?php if ($row['status'] == '1') { ?>
                                                <td style="text-align: center;"><i class="fa fa-check" aria-hidden="true"></i> Aktif</td>
                                            <?php } else if ($row['status'] == '2') { ?>
                                                <td style="color:red;text-align: center;"><i class="fa fa-ban" aria-hidden="true"></i> <i>Non-Aktif</i></td>
                                            <?php } ?>
                                            <td>
                                                <button class="btn btn-sm btn-warning dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Aksi</button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="#!" data-toggle="modal" data-target="#Detail<?= $row['id_education']; ?>"><i class="fa fa-eye"></i> Detail</a>
                                                    <a class="dropdown-item" href="#!" data-toggle="modal" data-target="#Edit<?= $row['id_education']; ?>"><i class="fa fa-edit"></i> Edit</a>
                                                    <a class="dropdown-item" href="#!" data-toggle="modal" data-target="#CahngeFoto<?= $row['id_education']; ?>"><i class="fa fa-image"></i> Ganti Foto</a>
                                                    <?php if ($row['status'] == '1') { ?>
                                                        <a class="dropdown-item" href="#!" data-toggle="modal" data-target="#Non-Aktif<?= $row['id_education']; ?>"><i class="fa fa-ban" aria-hidden="true"></i> Non-Aktif</a>
                                                    <?php } else if ($row['status'] == '2') { ?>
                                                        <a class="dropdown-item" href="#!" data-toggle="modal" data-target="#Aktif<?= $row['id_education']; ?>"><i class="fa fa-check" aria-hidden="true"></i> Aktif</a>
                                                    <?php } ?>
                                                    <a class="dropdown-item" href="#!" data-toggle="modal" data-target="#Delete<?= $row['id_education']; ?>"><i class="fa fa-trash"></i> Hapus</a>
                                                </div>
                                            </td>
                                        </tr>
                                        <!-- Detail -->
                                            <div id="Detail<?= $row['id_education']; ?>" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                                <div class="modal-dialog modal-lg" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header" style="background: linear-gradient(45deg, #1f3d40, #1f3d40);">
                                                            <h2 class="modal-title" id="exampleModalCenterTitle" style="color:#fff">Detail [Edukasi] - ID <?= $row['id_education']; ?></h2>
                                                            <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <form method="POST" action="<?= base_url('users/changepass')?>" enctype="multipart/form-data">
                                                            <div class="modal-body">
                                                                <div class="row">
                                                                    <div class="form-group col-md-6">
                                                                        <center>
                                                                            <?php if ($row['foto'] == NULL) { ?>
                                                                                <img src="<?= base_url('assuts/images/aboutpic5.jpg');?>" style="width: 144px;height: 144px;">
                                                                            <?php } else { ?>
                                                                                <img src="<?= base_url('upload/edukasi/'.$row['foto']);?>" style="width: 100%;height: 100%;">
                                                                            <?php } ?>
                                                                        </center>
                                                                    </div>
                                                                    <div class="form-group col-md-6">
                                                                        <label class="form-label" for="Status edukasi">Status edukasi</label>
                                                                        <select name="status" class="form-control" id="Status edukasi" readonly>
                                                                            <?php if ($row['status'] == '1') { ?>
                                                                                <option value="1">Aktif</option>
                                                                            <?php } else if ($row['status'] == '2') { ?>
                                                                                <option value="2">Non-Aktif</option>
                                                                            <?php } ?>
                                                                            <option value="">-- Pilih Status edukasi --</option>
                                                                            <option value="1">Aktif</option>
                                                                            <option value="2">Non-Aktif</option>
                                                                        </select>
                                                                        <label class="form-label" for="Tanggal Upload">Tanggal Upload</label>
                                                                        <input type="text" name="created_date" class="form-control" id="Tanggal Upload" value="<?= $row['created_date']; ?>" placeholder="Tanggal Upload" readonly>
                                                                        <label class="form-label" for="remaks">Remaks</label>
                                                                        <textarea type="text" name="description" class="form-control" id="description" placeholder="remaks" readonly><?= $row['remaks']; ?></textarea>
                                                                    </div>
                                                                    <div class="form-group col-md-6">
                                                                        <div class="form-group col-md-12">
                                                                            <label class="form-label" for="Judul Edukasi">Judul Edukasi</label>
                                                                            <input type="text" name="judul" class="form-control" id="Judul" value="<?= $row['judul']; ?>" placeholder="Judul Edukasi" readonly>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group col-md-6">
                                                                        <label class="form-label" for="Jenis Edukasi">Jenis Edukasi</label>
                                                                        <input type="text" name="jenis_sampah" class="form-control" id="Jenis Edukasi" value="<?= $row['jenis_sampah']; ?>" placeholder="Jenis Sampah" readonly>
                                                                    </div>
                                                                    <div class="form-group col-md-6">
                                                                        <label class="form-label" for="Tanggal Edukasi">Tanggal Edukasi</label>
                                                                        <input type="text" name="tgl_education" class="form-control" id="Tanggal Edukasi" value="<?= $row['tgl_education']; ?>" placeholder="Tanggal Edukasi" readonly>
                                                                    </div>
                                                                    <div class="form-group col-md-12">
                                                                        <label class="form-label" for="Deskripsi">Deskripsi</label>
                                                                        <textarea type="text" name="description" class="form-control" id="Deskripsi" placeholder="Deskripsi" readonly><?= $row['description']; ?></textarea>
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
                                            <div id="Edit<?= $row['id_education']; ?>" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                                <div class="modal-dialog modal-lg" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header" style="background: linear-gradient(45deg, #1f3d40, #1f3d40);">
                                                            <h2 class="modal-title" id="exampleModalCenterTitle" style="color:#fff">Edit [Edukasi] - ID <?= $row['id_education']; ?></h2>
                                                            <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <form method="POST" action="<?= base_url('edukasi/updating')?>" enctype="multipart/form-data">
                                                            <div class="modal-body">
                                                                <div class="row">
                                                                    <div class="form-group col-md-6">
                                                                        <center>
                                                                            <?php if ($row['foto'] == NULL) { ?>
                                                                                <img src="<?= base_url('assuts/images/aboutpic5.jpg');?>" style="width: 144px;height: 144px;">
                                                                            <?php } else { ?>
                                                                                <img src="<?= base_url('upload/edukasi/'.$row['foto']);?>" style="width: 100%;height: 100%;">
                                                                            <?php } ?>
                                                                        </center>
                                                                    </div>
                                                                    <div class="form-group col-md-6">
                                                                        <label class="form-label" for="Status edukasi">Status edukasi</label>
                                                                        <select name="status" class="form-control" id="Status edukasi" readonly>
                                                                            <?php if ($row['status'] == '1') { ?>
                                                                                <option value="1">Aktif</option>
                                                                            <?php } else if ($row['status'] == '2') { ?>
                                                                                <option value="2">Non-Aktif</option>
                                                                            <?php } ?>
                                                                            <option value="">-- Pilih Status edukasi --</option>
                                                                            <option value="1">Aktif</option>
                                                                            <option value="2">Non-Aktif</option>
                                                                        </select>
                                                                        <label class="form-label" for="Tanggal Registrasi">Tanggal Upload</label>
                                                                        <input type="text" class="form-control" id="Tanggal Registrasi" value="<?= $row['created_date']; ?>" placeholder="Tanggal Registrasi" readonly>
                                                                        <label class="form-label" for="Remaks">Remaks</label>
                                                                        <textarea type="text" name="remaks" class="form-control" id="Remaks" placeholder="Remaks"><?= $row['remaks']; ?></textarea>
                                                                        <input type="hidden" name="created_date" value="<?= date('Y-m-d h:m:i') ?>">
                                                                        <input type="hidden" name="id_education" value="<?= $row['id_education']; ?>">
                                                                    </div>
                                                                    <div class="form-group col-md-6">
                                                                        <div class="form-group col-md-12">
                                                                            <label class="form-label" for="Judul Edukasi">Judul Edukasi</label>
                                                                            <input type="text" name="judul" class="form-control" id="Judul" value="<?= $row['judul']; ?>" placeholder="Judul Edukasi" required>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group col-md-6">
                                                                        <label class="form-label" for="Jenis Edukasi">Jenis Edukasi</label>
                                                                        <select name="jenis_sampah" class="form-control" id="Jenis Edukasi" required>
                                                                            <option value="Anorganik" <?= $row['jenis_sampah'] == 'Anorganik' ? 'selected' : '' ?>>Anorganik</option>
                                                                            <option value="Organik" <?= $row['jenis_sampah'] == 'Organik' ? 'selected' : '' ?>>Organik</option>
                                                                        </select>
                                                                    </div>
                                                                    <div class="form-group col-md-6">
                                                                        <label class="form-label" for="Tanggal Edukasi">Tanggal Edukasi</label>
                                                                        <input type="datetime-local" name="tgl_education" class="form-control" id="Tanggal Edukasi" value="<?= $row['tgl_education']; ?>" placeholder="Tanggal Edukasi" required>
                                                                    </div>
                                                                    <div class="form-group col-md-12">
                                                                        <label class="form-label" for="Deskripsi">Deskripsi</label>
                                                                        <textarea type="text" name="description" class="form-control" id="Deskripsi" placeholder="Deskripsi"><?= $row['description']; ?></textarea>
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
                                            <div id="CahngeFoto<?= $row['id_education']; ?>" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                                <div class="modal-dialog modal-lg" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header" style="background: linear-gradient(45deg, #1f3d40, #1f3d40);">
                                                            <h2 class="modal-title" id="exampleModalCenterTitle" style="color:#fff">Ganti Foto [Edukasi] - ID <?= $row['id_education']; ?></h2>
                                                            <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <form method="POST" action="<?= base_url('edukasi/changefoto')?>" enctype="multipart/form-data">
                                                            <div class="modal-body">
                                                                <div class="row">
                                                                    <div class="form-group col-md-6">
                                                                        <center>
                                                                            <?php if ($row['foto'] == NULL) { ?>
                                                                                <img src="<?= base_url('assuts/images/aboutpic5.jpg');?>" style="width: 144px;height: 144px;">
                                                                            <?php } else { ?>
                                                                                <img src="<?= base_url('upload/edukasi/'.$row['foto']);?>" style="width: 100%;height: 100%;">
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
                                                                        <label class="form-label" for="Status edukasi">Status edukasi</label>
                                                                        <select name="status" class="form-control" id="Status edukasi" readonly>
                                                                            <?php if ($row['status'] == '1') { ?>
                                                                                <option value="1">Aktif</option>
                                                                            <?php } else if ($row['status'] == '2') { ?>
                                                                                <option value="2">Non-Aktif</option>
                                                                            <?php } ?>
                                                                            <option value="">-- Pilih Status edukasi --</option>
                                                                            <option value="1">Aktif</option>
                                                                            <option value="2">Non-Aktif</option>
                                                                        </select>
                                                                        <label class="form-label" for="Tanggal Registrasi">Tanggal Upload</label>
                                                                        <input type="text" name="created_date" class="form-control" id="Tanggal Upload" value="<?= $row['created_date']; ?>" placeholder="Tanggal Upload" readonly>
                                                                        <label class="form-label" for="Remaks">Remaks</label>
                                                                        <textarea type="text" name="remaks" class="form-control" id="Remaks" placeholder="Remaks" readonly><?= $row['remaks']; ?></textarea>
                                                                        <input type="hidden" name="id_education" class="form-control" value="<?= $row['id_education']; ?>">
                                                                    </div>
                                                                    <div class="form-group col-md-6">
                                                                        <div class="form-group col-md-12">
                                                                            <label class="form-label" for="Judul Edukasi">Judul Edukasi</label>
                                                                            <input type="text" name="judul" class="form-control" id="Judul" value="<?= $row['judul']; ?>" placeholder="Judul Edukasi" readonly>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group col-md-6">
                                                                        <label class="form-label" for="Tanggal Edukasi">Tanggal Edukasi</label>
                                                                        <input type="text" name="tgl_education" class="form-control" id="Tanggal Edukasi" value="<?= $row['tgl_education']; ?>" placeholder="Tanggal Edukasi" readonly>
                                                                    </div>
                                                                    <div class="form-group col-md-12">
                                                                        <label class="form-label" for="Deskripsi">Deskripsi</label>
                                                                        <textarea type="text" name="description" class="form-control" id="Deskripsi" placeholder="Deskripsi" readonly><?= $row['description']; ?></textarea>
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
                                            <div id="Non-Aktif<?= $row['id_education']; ?>" class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" style="background: linear-gradient(45deg, #f44336a1, #f44336a1);">
                                                <div class="modal-dialog modal-dialog-centered" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header" style="background: linear-gradient(45deg, #1f3d40, #1f3d40);">
                                                            <h6 class="modal-title" id="exampleModalCenterTitle" style="color:#fff">Non-Aktif [Edukasi] - ID <?= $row['id_education']; ?></h6>
                                                            <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <form method="POST" action="<?= base_url('edukasi/nonaktif')?>" enctype="multipart/form-data">
                                                            <div class="modal-body">
                                                                <div class="row">
                                                                    <div class="form-group col-md-12">
                                                                        <h5>Apa kamu yakin ingin Non-Aktif Edukasi?</h5>
                                                                        <h5><b><?= $row['judul']; ?></b></h5>
                                                                        <hr>
                                                                        <div class="form-group col-md-12">
                                                                            <center>
                                                                                <?php if ($row['foto'] == NULL) { ?>
                                                                                    <img src="<?= base_url('assuts/images/aboutpic5.jpg');?>" style="width: 144px;height: 144px;">
                                                                                <?php } else { ?>
                                                                                    <img src="<?= base_url('upload/edukasi/'.$row['foto']);?>" style="width: 100%;height: 100%;">
                                                                                <?php } ?>
                                                                            </center>
                                                                        </div>
                                                                        <input type="hidden" name="status" class="form-control" value="2">
                                                                        <input type="hidden" name="id_education" class="form-control" value="<?= $row['id_education']; ?>">
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
                                            <div id="Aktif<?= $row['id_education']; ?>" class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" style="background: linear-gradient(45deg, #f44336a1, #f44336a1);">
                                                <div class="modal-dialog modal-dialog-centered" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header" style="background: linear-gradient(45deg, #1f3d40, #1f3d40);">
                                                            <h6 class="modal-title" id="exampleModalCenterTitle" style="color:#fff">Aktif [Edukasi] - ID <?= $row['id_education']; ?></h6>
                                                            <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <form method="POST" action="<?= base_url('edukasi/aktif')?>" enctype="multipart/form-data">
                                                            <div class="modal-body">
                                                                <div class="row">
                                                                    <div class="form-group col-md-12">
                                                                        <h5>Apa kamu yakin ingin Aktif edukasi?</h5>
                                                                        <h5><b><?= $row['judul']; ?></b></h5>
                                                                        <hr>
                                                                        <div class="form-group col-md-12">
                                                                            <center>
                                                                                <?php if ($row['foto'] == NULL) { ?>
                                                                                    <img src="<?= base_url('assuts/images/aboutpic5.jpg');?>" style="width: 144px;height: 144px;">
                                                                                <?php } else { ?>
                                                                                    <img src="<?= base_url('upload/edukasi/'.$row['foto']);?>" style="width: 100%;height: 100%;">
                                                                                <?php } ?>
                                                                            </center>
                                                                        </div>
                                                                        <input type="hidden" name="status" class="form-control" value="1">
                                                                        <input type="hidden" name="id_education" class="form-control" value="<?= $row['id_education']; ?>">
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
                                            <div id="Delete<?= $row['id_education']; ?>" class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" style="background: linear-gradient(45deg, #f44336a1, #f44336a1);">
                                                <div class="modal-dialog modal-dialog-centered" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header" style="background: linear-gradient(45deg, #1f3d40, #1f3d40);">
                                                            <h6 class="modal-title" id="exampleModalCenterTitle" style="color:#fff">Hapus Data [Edukasi] - ID <?= $row['id_education']; ?></h6>
                                                            <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <form method="POST" action="<?= base_url('edukasi/delete')?>" enctype="multipart/form-data">
                                                            <div class="modal-body">
                                                                <div class="row">
                                                                    <div class="form-group col-md-12">
                                                                        <h5>Apa kamu yakin ingin menghapus ini?</h5>
                                                                        <h5><b><?= $row['judul']; ?></b></h5>
                                                                        <hr>
                                                                        <div class="form-group col-md-12">
                                                                            <center>
                                                                                <?php if ($row['foto'] == NULL) { ?>
                                                                                    <img src="<?= base_url('assuts/images/aboutpic5.jpg');?>" style="width: 144px;height: 144px;">
                                                                                <?php } else { ?>
                                                                                    <img src="<?= base_url('upload/edukasi/'.$row['foto']);?>" style="width: 100%;height: 100%;">
                                                                                <?php } ?>
                                                                            </center>
                                                                        </div>
                                                                        <input type="hidden" name="id_education" class="form-control" value="<?= $row['id_education']; ?>">
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