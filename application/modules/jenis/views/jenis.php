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
                            <h5 class="m-b-10">Page Jenis</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#!">Transaksi</a></li>
                            <li class="breadcrumb-item">Jenis</li>
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
                <p style="color: #000;">Data Jenis sudah <b>aktif</b> di sistem, pastikan status tidak ada yang <b>aktif</b>!</p>
                </div>
            </div>
        <?php endif; ?>
        <!-- [ Main Content ] start -->
        <div class="row">
            <!-- [ table ] start -->
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="background: linear-gradient(45deg, #1f3d40, #1f3d40);">
                        <h4 style="color: #fff;">[Tables] Data Jenis </h4>
                        <span class="d-block m-t-5"><small style="color: #fff;">Last update - </small><code><?= tanggal_indo(date('d-m-Y'),true) ?></code> </span>
                    </div>
                    <div class="card-body table-border-style">
                        <!-- Add Data Jenis -->
                            <button type="button" class="btn btn-sm btn-icon btn-success" data-toggle="modal" data-target="#exampleModalCenter"><i data-feather="check-circle"></i> Tambah Data</button>
                            <div id="exampleModalCenter" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" style="background: linear-gradient(45deg, #79ccb880, #79ccb880);">
                                <div class="modal-dialog modal-lg" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header" style="background: linear-gradient(45deg, #1f3d40, #1f3d40);">
                                            <h2 class="modal-title" id="exampleModalCenterTitle" style="color:#fff">Add Data [Galeri]</h2>
                                            <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <form method="POST" action="<?= base_url('jenis/adding')?>" enctype="multipart/form-data">
                                            <div class="modal-body">
                                                <div class="row">
                                                    <div class="form-group col-md-6">
                                                        <label class="form-label" for="Jenis Sampah">Jenis Sampah</label>
                                                        <select name="jenis_sampah" class="form-control">
                                                            <option value="Organik">Organik</option>
                                                            <option value="Anorganik">Anorganik</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label class="form-label" for="Nama Sampah">Nama Sampah</label>
                                                        <input type="text" name="nama_sampah" class="form-control">
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label class="form-label" for="Harga Sampah">Harga Sampah</label>
                                                        <input type="number" name="harga_sampah" class="form-control">
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
                        <!-- End Add Data Jenis -->
                        <hr>
                        <div class="table-responsive">
                            <table id="example" class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Jenis</th>
                                        <th>Nama</th>
                                        <th>Harga</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php if ($data_jenis): $no = 0; foreach ($data_jenis as $row): $no++;?>
                                        <tr>
                                            <td><?= $no ?></td>
                                            <?php if ($row['jenis_sampah'] == NULL) { ?>
                                                <td><i style="color: red;">NULL</i></td>
                                            <?php } else { ?>
                                                <td><?= $row['jenis_sampah']; ?></td>
                                            <?php } ?>
                                            <?php if ($row['nama_sampah'] == NULL) { ?>
                                                <td><i style="color: red;">NULL</i></td>
                                            <?php } else { ?>
                                                <td><?= $row['nama_sampah']; ?></td>
                                            <?php } ?>
                                            <?php if ($row['harga_sampah'] == NULL) { ?>
                                                <td><i style="color: red;">NULL</i></td>
                                            <?php } else { ?>
                                                <td>Rp <?= number_format($row['harga_sampah'],2,',','.'); ?></td>
                                            <?php } ?>
                                            <td>
                                                <button class="btn btn-sm btn-warning dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Aksi</button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="#!" data-toggle="modal" data-target="#Edit<?= $row['id_sampah']; ?>"><i class="fa fa-edit"></i> Edit</a>
                                                    <a class="dropdown-item" href="#!" data-toggle="modal" data-target="#Delete<?= $row['id_sampah']; ?>"><i class="fa fa-trash"></i> Hapus</a>
                                                </div>
                                            </td>
                                        </tr>
                                        <!-- Edit -->
                                            <div id="Edit<?= $row['id_sampah']; ?>" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                                <div class="modal-dialog modal-lg" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header" style="background: linear-gradient(45deg, #1f3d40, #1f3d40);">
                                                            <h2 class="modal-title" id="exampleModalCenterTitle" style="color:#fff">Edit [Galeri] - ID <?= $row['id_sampah']; ?></h2>
                                                            <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <form method="POST" action="<?= base_url('jenis/updating')?>" enctype="multipart/form-data">
                                                            <div class="modal-body">
                                                                <div class="row">
                                                                    <div class="form-group col-md-6">
                                                                        <label class="form-label" for="Jenis Sampah">Jenis Sampah</label>
                                                                        <select name="jenis_sampah" class="form-control">
                                                                            <option value="Organik" <?= $row['jenis_sampah'] == 'Organik' ? 'selected' : ''; ?>>Organik</option>
                                                                            <option value="Anorganik" <?= $row['jenis_sampah'] == 'Anorganik' ? 'selected' : ''; ?>>Anorganik</option>
                                                                        </select>
                                                                    </div>
                                                                    <div class="form-group col-md-6">
                                                                        <label class="form-label" for="Nama Sampah">Nama Sampah</label>
                                                                        <input type="text" name="nama_sampah" value="<?= $row['nama_sampah']; ?>" class="form-control">
                                                                    </div>
                                                                    <div class="form-group col-md-6">
                                                                        <label class="form-label" for="Harga Sampah">Harga Sampah</label>
                                                                        <input type="number" name="harga_sampah" value="<?= $row['harga_sampah']; ?>" class="form-control">
                                                                        <input type="hidden" name="created_date" value="<?= date('Y-m-d h:m:i') ?>">
                                                                        <input type="hidden" name="id_sampah" value="<?= $row['id_sampah']; ?>">
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
                                        <!-- Delete  -->
                                            <div id="Delete<?= $row['id_sampah']; ?>" class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" style="background: linear-gradient(45deg, #f44336a1, #f44336a1);">
                                                <div class="modal-dialog modal-dialog-centered" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header" style="background: linear-gradient(45deg, #1f3d40, #1f3d40);">
                                                            <h6 class="modal-title" id="exampleModalCenterTitle" style="color:#fff">Hapus Data [Galeri] - ID <?= $row['id_sampah']; ?></h6>
                                                            <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <form method="POST" action="<?= base_url('jenis/delete')?>" enctype="multipart/form-data">
                                                            <div class="modal-body">
                                                                <div class="row">
                                                                    <div class="form-group col-md-12">
                                                                        <h5>Apa kamu yakin ingin menghapus ini?</h5>
                                                                        <input type="hidden" name="id_sampah" class="form-control" value="<?= $row['id_sampah']; ?>">
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