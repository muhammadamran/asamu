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
                            <h5 class="m-b-10">Page Setting Site</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#!">Administration Tools</a></li>
                            <li class="breadcrumb-item">Setting Site</li>
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
                <p style="color: #000;">Data Setting Site sudah <b>aktif</b> di sistem, pastikan status tidak ada yang <b>aktif</b>!</p>
                </div>
            </div>
        <?php endif; ?>
        <!-- [ Main Content ] start -->
        <div class="row">
            <!-- [ table ] start -->
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="background: linear-gradient(45deg, #1f3d40, #1f3d40);">
                        <h4 style="color: #fff;">[Tables] Data Setting Site </h4>
                        <span class="d-block m-t-5"><small style="color: #fff;">Last update - </small><code><?= tanggal_indo(date('d-m-Y'),true) ?></code> </span>
                    </div>
                    <div class="card-body table-border-style">
                        <!-- Add Data Setting Site -->
                            <button type="button" class="btn btn-sm btn-icon btn-success" data-toggle="modal" data-target="#exampleModalCenter"><i data-feather="check-circle"></i> Tambah Data</button>
                            <div id="exampleModalCenter" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                <div class="modal-dialog modal-lg" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header" style="background: linear-gradient(45deg, #1f3d40, #1f3d40);">
                                            <h2 class="modal-title" id="exampleModalCenterTitle" style="color:#fff">Add Data [Setting Site]</h2>
                                            <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <form method="POST" action="<?= base_url('site/adding')?>" enctype="multipart/form-data">
                                            <div class="modal-body">
                                                <div class="row">
                                                    <!-- <div class="form-group col-md-6">
                                                        <label class="form-label" for="File">Icon</label>
                                                        <input type="file" name="icon" class="form-control" id="File" placeholder="File">
                                                        <small style="color: red;"><i> If you have a file that you want to upload, make sure the file is below the Maximum 2MB</i></small>
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label class="form-label" for="File">Logo</label>
                                                        <input type="file" name="logo" class="form-control" id="File" placeholder="File">
                                                        <small style="color: red;"><i> If you have a file that you want to upload, make sure the file is below the Maximum 2MB</i></small>
                                                    </div> -->
                                                    <div class="form-group col-md-6">
                                                        <label class="form-label" for="Slogan">Slogan</label>
                                                        <textarea name="slogan" class="form-control" id="Slogan" placeholder="Slogan"></textarea>
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label class="form-label" for="Motto">Motto</label>
                                                        <textarea name="motto" class="form-control" id="Motto" placeholder="Motto"></textarea>
                                                    </div>
                                                    <div class="form-group col-md-12" style="background-color: #1f3d40;">
                                                        <hr><h5 style="color: #fff;"><i class="fa fa-building"></i> Informasi Perusahaan</h5><hr>
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label class="form-label" for="Nama Perusahaan">Nama Perusahaan</label>
                                                        <input type="text" name="name" class="form-control" id="Nama Perusahaan" placeholder="Nama Perusahaan" required>
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label class="form-label" for="Alamat Perusahaan">Alamat Perusahaan</label>
                                                        <textarea name="address" class="form-control" id="Alamat Perusahaan" placeholder="Alamat Perusahaan"></textarea>
                                                    </div>
                                                    <div class="form-group col-md-4">
                                                        <label class="form-label" for="Email">Email</label>
                                                        <input type="email" name="email" class="form-control" id="Email" placeholder="Email" required>
                                                    </div>
                                                    <div class="form-group col-md-4">
                                                        <label class="form-label" for="Telepon">Telepon</label>
                                                        <input type="text" name="telp" class="form-control" id="Telepon" placeholder="Telepon" required>
                                                    </div>
                                                    <div class="form-group col-md-4">
                                                        <label class="form-label" for="Fax">Fax</label>
                                                        <input type="text" name="fax" class="form-control" id="Fax" placeholder="Fax" required>
                                                    </div>
                                                    <div class="form-group col-md-12">
                                                        <label class="form-label" for="URL Maps">URL Maps</label>
                                                        <textarea name="maps" class="form-control" id="URL Maps" placeholder="URL Maps"></textarea>
                                                    </div>
                                                    <div class="form-group col-md-12" style="background-color: #1f3d40;">
                                                        <hr><h5 style="color: #fff;"><i class="fa fa-link"></i> Informasi Sosial Media</h5><hr>
                                                    </div>
                                                    <div class="form-group col-md-4">
                                                        <label class="form-label" for="Facebook">Facebook</label>
                                                        <input type="text" name="facebook" class="form-control" id="Facebook" placeholder="Facebook" required>
                                                    </div>
                                                    <div class="form-group col-md-4">
                                                        <label class="form-label" for="Instagram">Instagram</label>
                                                        <input type="text" name="instagram" class="form-control" id="Instagram" placeholder="Instagram" required>
                                                    </div>
                                                    <div class="form-group col-md-4">
                                                        <label class="form-label" for="YouTube">YouTube</label>
                                                        <input type="text" name="youtube" class="form-control" id="YouTube" placeholder="YouTube" required>
                                                    </div>
                                                    <div class="form-group col-md-4">
                                                        <label class="form-label" for="Twitter">Twitter</label>
                                                        <input type="text" name="twitter" class="form-control" id="Twitter" placeholder="Twitter" required>
                                                    </div>
                                                    <div class="form-group col-md-4">
                                                        <label class="form-label" for="LinkedID">LinkedID</label>
                                                        <input type="text" name="linked" class="form-control" id="LinkedID" placeholder="LinkedID" required>
                                                    </div>
                                                    <div class="form-group col-md-4">
                                                        <label class="form-label" for="Google+">Google+</label>
                                                        <input type="text" name="google" class="form-control" id="Google+" placeholder="Google+" required>
                                                    </div>
                                                    <div class="form-group col-md-12" style="background-color: #1f3d40;">
                                                        <hr><h5 style="color: #fff;"><b style="font-size: 20px;font-weight:800">#</b> Informasi Footer</h5><hr>
                                                    </div>
                                                    <div class="form-group col-md-12">
                                                        <label class="form-label" for="Footer">Footer</label>
                                                        <textarea name="footer" class="form-control" id="Footer" placeholder="Footer"></textarea>
                                                        <input type="hidden" name="created_date" value="<?= date('Y-m-d h:m:i') ?>">
                                                        <input type="hidden" name="status" value="1">
                                                    </div>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-sm btn-danger" data-dismiss="modal"><i class="fa fa-closed"></i> Close</button>
                                                <button type="submit" class="btn btn-sm btn-success"><i class="fa fa-save"></i> Save</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        <!-- End Add Data Setting Site -->
                        <hr>
                        <div class="table-responsive">
                            <table id="example" class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Slogran</th>
                                        <th>Motto</th>
                                        <th>Nama Perusahaan</th>
                                        <th>Alamat</th>
                                        <th>Email</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php if ($data_site): $no = 0; foreach ($data_site as $row): $no++;?>
                                        <tr>
                                            <td><?= $no ?></td>
                                            <!-- SLOGAN -->
                                            <?php if ($row['slogan'] == NULL) { ?>
                                                <td style="color:red"> <i>Empty data</i></td>
                                            <?php } else { ?>
                                                <td><?= $row['slogan']; ?></td>
                                            <?php } ?>
                                            <!-- MOTTO -->
                                            <?php if ($row['motto'] == NULL) { ?>
                                                <td style="color:red"> <i>Empty data</i></td>
                                            <?php } else { ?>
                                                <td><?= $row['motto']; ?></td>
                                            <?php } ?>
                                            <!-- NAMA PERUSAHAAN -->
                                            <?php if ($row['name'] == NULL) { ?>
                                                <td style="color:red"> <i>Empty data</i></td>
                                            <?php } else { ?>
                                                <td><?= $row['name']; ?></td>
                                            <?php } ?>
                                            <!-- ALAMAT PERUSAHAAN -->
                                            <?php if ($row['address'] == NULL) { ?>
                                                <td style="color:red"> <i>Empty data</i></td>
                                            <?php } else { ?>
                                                <td><?= $row['address']; ?></td>
                                            <?php } ?>
                                            <!-- EMAIL -->
                                            <?php if ($row['email'] == NULL) { ?>
                                                <td style="color:red"> <i>Empty data</i></td>
                                            <?php } else { ?>
                                                <td><?= $row['email']; ?></td>
                                            <?php } ?>
                                            <!-- TELEPON -->
                                            <!-- <?php if ($row['telp'] == NULL) { ?>
                                                <td style="color:red"> <i>Empty data</i></td>
                                            <?php } else { ?>
                                                <td><?= $row['telp']; ?></td>
                                            <?php } ?> -->
                                            <!-- FAX -->
                                            <!-- <?php if ($row['fax'] == NULL) { ?>
                                                <td style="color:red"> <i>Empty data</i></td>
                                            <?php } else { ?>
                                                <td><?= $row['fax']; ?></td>
                                            <?php } ?> -->
                                            <!-- URL MAPS -->
                                            <!-- <?php if ($row['maps'] == NULL) { ?>
                                                <td style="color:red"> <i>Empty data</i></td>
                                            <?php } else { ?>
                                                <td><?= $row['maps']; ?></td>
                                            <?php } ?> -->
                                            <!-- FACEBOOK -->
                                            <!-- <?php if ($row['facebook'] == NULL) { ?>
                                                <td style="color:red"> <i>Empty data</i></td>
                                            <?php } else { ?>
                                                <td><?= $row['facebook']; ?></td>
                                            <?php } ?> -->
                                            <!-- INSTAGRAM -->
                                            <!-- <?php if ($row['instagram'] == NULL) { ?>
                                                <td style="color:red"> <i>Empty data</i></td>
                                            <?php } else { ?>
                                                <td><?= $row['instagram']; ?></td>
                                            <?php } ?> -->
                                            <!-- YOUTUBE -->
                                            <!-- <?php if ($row['youtube'] == NULL) { ?>
                                                <td style="color:red"> <i>Empty data</i></td>
                                            <?php } else { ?>
                                                <td><?= $row['address']; ?></td>
                                            <?php } ?> -->
                                            <!-- TWITTER -->
                                            <!-- <?php if ($row['twitter'] == NULL) { ?>
                                                <td style="color:red"> <i>Empty data</i></td>
                                            <?php } else { ?>
                                                <td><?= $row['twitter']; ?></td>
                                            <?php } ?> -->
                                            <!-- LINKED -->
                                            <!-- <?php if ($row['linked'] == NULL) { ?>
                                                <td style="color:red"> <i>Empty data</i></td>
                                            <?php } else { ?>
                                                <td><?= $row['linked']; ?></td>
                                            <?php } ?> -->
                                            <!-- GOOGLE+ -->
                                            <!-- <?php if ($row['google'] == NULL) { ?>
                                                <td style="color:red"> <i>Empty data</i></td>
                                            <?php } else { ?>
                                                <td><?= $row['google']; ?></td>
                                            <?php } ?> -->
                                            <!-- FOOTER -->
                                            <!-- <?php if ($row['footer'] == NULL) { ?>
                                                <td style="color:red"> <i>Empty data</i></td>
                                            <?php } else { ?>
                                                <td><?= $row['footer']; ?></td>
                                            <?php } ?> -->
                                            <!-- STATUS -->
                                            <?php if ($row['status'] == NULL) { ?>
                                                <td style="color:red"> <i>Empty data</i></td>
                                            <?php } else { ?>
                                                <td><?= $row['status']; ?></td>
                                            <?php } ?>
                                            <td>
                                                <button class="btn btn-sm btn-warning dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Action</button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="#!" data-toggle="modal" data-target="#Edit<?= $row['id_site']; ?>"><i class="fa fa-eye"></i> Detail</a>
                                                    <a class="dropdown-item" href="#!" data-toggle="modal" data-target="#Edit<?= $row['id_site']; ?>"><i class="fa fa-edit"></i> Edit</a>
                                                    <a class="dropdown-item" onclick="DeleteData(<?= $row['id_site'];?>)"  data-toggle="tooltip" title="Delete (<?= $row['id_site'];?>)"><i class="fa fa-trash"></i> Delete</a>
                                                </div>
                                            </td>
                                        </tr>
                                        <!-- Edit Data Notes -->
                                            <div id="Edit<?= $row['id_site']; ?>" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                                <div class="modal-dialog modal-lg" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header" style="background: linear-gradient(45deg, #1f3d40, #1f3d40);">
                                                            <h2 class="modal-title" id="exampleModalCenterTitle" style="color:#fff">Edit Data [Setting Site] - ID <?= $row['id_site']; ?></h2>
                                                            <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <form method="POST" action="<?= base_url('notes/edit')?>" enctype="multipart/form-data">
                                                            <div class="modal-body">
                                                                <div class="row">
                                                                    <div class="form-group col-md-12">
                                                                        <style>
                                                                            .picture-view {
                                                                                width: 120px;
                                                                                height: 120px;
                                                                                border-radius: 100%;
                                                                            }
                                                                        </style>
                                                                        <center>
                                                                            <img src="assets/images/logo-svg.png" class="picture-view" alt="">
                                                                        </center>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <hr>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-sm btn-danger" data-dismiss="modal"><i class="fa fa-closed"></i> Close</button>
                                                                <button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-save"></i> Update</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        <!-- End Edit Data Notes -->
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
<script type="text/javascript">
    function DeleteData(id_site) {
        var r = confirm("Are you sure you want to delete this?");
        if (r == true) {
        location.href = "notes/delete/" + id_site;
        }
    }
</script>