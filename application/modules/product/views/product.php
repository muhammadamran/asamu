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
                            <h5 class="m-b-10">Page Product</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#!">Modules</a></li>
                            <li class="breadcrumb-item"><a href="#!">Content All in One</a></li>
                            <li class="breadcrumb-item">Product</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ breadcrumb ] end -->
        <?php if ($this->session->flashdata('filed')) : ?>
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
                    <h4 style="color: #000;"><i class="fa fa-info-circle"></i> Information!</h4>
                    <hr>
                    <p style="color: #000;">User Management Data is <b>active</b> in the system, make sure none of the status is <b>active</b>!</p>
                </div>
            </div>
        <?php endif; ?>

        <?php if ($this->session->flashdata('any_data')) : ?>
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
                    <h4 style="color: #000;"><i class="fa fa-info-circle"></i> Information!</h4>
                    <hr>
                    <p style="color: #000;"><b>Active view status can not be more than one!!</b></p>
                </div>
            </div>
        <?php endif; ?>
        <!-- [ Main Content ] start -->
        <!-- PRODUCT -->
        <div class="row">
            <!-- [ table ] start -->
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="background: linear-gradient(298deg, #150757, #150757, #150757);">
                        <h4 style="color: #fff;">[Tables] Data Product </h4>
                        <span class="d-block m-t-5"><small style="color: #fff;">Last update - </small><code><?= tanggal_indo(date('d-m-Y'), true) ?></code> </span>
                    </div>
                    <div class="card-body table-border-style">
                        <!-- Add Data sliders -->
                        <button type="button" class="btn btn-sm btn-icon btn-success" data-toggle="modal" data-target="#exampleModalCenter"><i data-feather="check-circle"></i> Add Data</button>
                        <div id="exampleModalCenter" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" style="background: linear-gradient(45deg, rgb(174 176 255 / 0%), rgb(174, 176, 255));">
                            <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content">
                                    <div class="modal-header" style="background: linear-gradient(298deg, #150757, #150757, #150757);">
                                        <h2 class="modal-title" id="exampleModalCenterTitle" style="color:#fff">Add Data [Product]</h2>
                                        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <form method="POST" action="<?= base_url('product/adding') ?>" enctype="multipart/form-data">
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="form-group col-md-6">
                                                    <label class="form-label" for="Title One">Title One</label>
                                                    <input type="text" name="title_one" class="form-control" id="Title One" placeholder="Title One" required>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label class="form-label" for="Title Two">Title Two</label>
                                                    <input type="text" name="title_two" class="form-control" id="Title Two" placeholder="Title Two" required>
                                                </div>
                                                <div class="form-group col-md-12">
                                                    <label class="form-label" for="Detail">Detail</label>
                                                    <textarea type="text" name="detail" class="form-control" id="Detail" placeholder="Detail"></textarea>
                                                    <input type="hidden" name="created_date" value="<?= date('Y-m-d h:m:i') ?>">
                                                    <input type="hidden" name="created_by" value="<?= $this->session->userdata('username'); ?>">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-sm btn-danger" data-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-save"></i> Save</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- End Add Data slider -->
                        <hr>
                        <div class="table-responsive">
                            <table id="example" class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Title 1</th>
                                        <th>Title 2</th>
                                        <th>Created Date</th>
                                        <th style="text-align: center;">Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php if ($data_product) : $no = 0;
                                        foreach ($data_product as $row) : $no++; ?>
                                            <tr>
                                                <td><?= $no ?></td>
                                                <?php if ($row['title_one'] == NULL) { ?>
                                                    <td><i style="color: red;">NULL</i></td>
                                                <?php } else { ?>
                                                    <td><?= $row['title_one']; ?></td>
                                                <?php } ?>
                                                <?php if ($row['title_two'] == NULL) { ?>
                                                    <td><i style="color: red;">NULL</i></td>
                                                <?php } else { ?>
                                                    <td><?= $row['title_two']; ?></td>
                                                <?php } ?>
                                                <td><?= $row['created_date']; ?></td>
                                                <!-- STATUS -->
                                                <?php if ($row['status'] == '1') { ?>
                                                    <td style="text-align: center;"><i class="fa fa-check" aria-hidden="true"></i> Active</td>
                                                <?php } else if ($row['status'] == '2') { ?>
                                                    <td style="color:red;text-align: center;"><i class="fa fa-ban" aria-hidden="true"></i> <i>Non-Active</i></td>
                                                <?php } ?>
                                                <td>
                                                    <button class="btn btn-sm btn-warning dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Action</button>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="#!" data-toggle="modal" data-target="#Detail<?= $row['id_product']; ?>"><i class="fa fa-eye"></i> Detail</a>
                                                        <a class="dropdown-item" href="#!" data-toggle="modal" data-target="#Edit<?= $row['id_product']; ?>"><i class="fa fa-edit"></i> Edit</a>
                                                        <?php if ($row['status'] == '1') { ?>
                                                            <a class="dropdown-item" href="#!" data-toggle="modal" data-target="#Non-Active<?= $row['id_product']; ?>"><i class="fa fa-ban" aria-hidden="true"></i> Non-Active</a>
                                                        <?php } else if ($row['status'] == '2') { ?>
                                                            <a class="dropdown-item" href="#!" data-toggle="modal" data-target="#Active<?= $row['id_product']; ?>"><i class="fa fa-check" aria-hidden="true"></i> Active</a>
                                                        <?php } ?>
                                                        <a class="dropdown-item" href="#!" data-toggle="modal" data-target="#Delete<?= $row['id_product']; ?>"><i class="fa fa-trash"></i> Delete</a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <!-- Detail -->
                                            <div id="Detail<?= $row['id_product']; ?>" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                                <div class="modal-dialog modal-lg" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header" style="background: linear-gradient(298deg, #150757, #150757, #150757);">
                                                            <h2 class="modal-title" id="exampleModalCenterTitle" style="color:#fff">Detail [About Asamu Solusi Mandiri] - ID <?= $row['id_product']; ?></h2>
                                                            <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="row">
                                                                <div class="form-group col-md-12">
                                                                    <center>
                                                                        <?php if ($row['photo'] == NULL) { ?>
                                                                            <img src="https://karangsari-sukodono.lumajangkab.go.id/assets-front/images/image-not-found.jpg" style="width: 144px;height: 144px;">
                                                                        <?php } else { ?>
                                                                            <img src="<?= base_url('modes/images/about/photo/' . $row['photo']); ?>" style="width: 30%;height: auto;">
                                                                        <?php } ?>
                                                                    </center>
                                                                </div>
                                                                <div class="form-group col-md-12">
                                                                    <label class="form-label" for="Title">Title</label>
                                                                    <input type="text" name="title" class="form-control" id="Title" placeholder="Title" value="<?= $row['title']; ?>" readonly>
                                                                </div>
                                                                <div class="form-group col-md-12">
                                                                    <label class="form-label" for="Detail">Detail</label>
                                                                    <textarea type="text" name="detail" class="texteditor" id="Detail" placeholder="Detail" readonly><?= $row['detail']; ?></textarea>
                                                                    <input type="hidden" name="created_date" value="<?= date('Y-m-d h:m:i') ?>">
                                                                    <input type="hidden" name="created_by" value="<?= $this->session->userdata('username'); ?>">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-sm btn-warning" data-dismiss="modal">Close</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Detail -->
                                            <!-- Edit -->
                                            <div id="Edit<?= $row['id_product']; ?>" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                                <div class="modal-dialog modal-lg" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header" style="background: linear-gradient(298deg, #150757, #150757, #150757);">
                                                            <h2 class="modal-title" id="exampleModalCenterTitle" style="color:#fff">Edit [About Asamu Solusi Mandiri] - ID <?= $row['id_product']; ?></h2>
                                                            <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <form method="POST" action="<?= base_url('aboutus/updating') ?>" enctype="multipart/form-data">
                                                            <div class="modal-body">
                                                                <div class="row">
                                                                    <div class="form-group col-md-12">
                                                                        <center>
                                                                            <?php if ($row['photo'] == NULL) { ?>
                                                                                <img src="https://karangsari-sukodono.lumajangkab.go.id/assets-front/images/image-not-found.jpg" style="width: 144px;height: 144px;">
                                                                            <?php } else { ?>
                                                                                <img src="<?= base_url('modes/images/about/photo/' . $row['photo']); ?>" style="width: 30%;height: auto;">
                                                                            <?php } ?>
                                                                        </center>
                                                                    </div>
                                                                    <div class="form-group col-md-12">
                                                                        <label class="form-label" for="Title">Title</label>
                                                                        <input type="text" name="title" class="form-control" id="Title" placeholder="Title" value="<?= $row['title']; ?>">
                                                                    </div>
                                                                    <div class="form-group col-md-12">
                                                                        <label class="form-label" for="Detail">Detail</label>
                                                                        <textarea type="text" name="detail" class="texteditor" id="Detail" placeholder="Detail"><?= $row['detail']; ?></textarea>
                                                                        <input type="hidden" name="created_date" value="<?= date('Y-m-d h:m:i') ?>">
                                                                        <input type="hidden" name="created_by" value="<?= $this->session->userdata('username'); ?>">
                                                                        <input type="hidden" name="id_product" value="<?= $row['id_product']; ?>">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-sm btn-warning" data-dismiss="modal">Close</button>
                                                                <button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-save"></i> Update</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Edit -->
                                            <!-- Non-Active -->
                                            <div id="Non-Active<?= $row['id_product']; ?>" class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" style="background: linear-gradient(45deg, #f44336a1, #f44336a1);">
                                                <div class="modal-dialog modal-dialog-centered" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header" style="background: linear-gradient(298deg, #150757, #150757, #150757);">
                                                            <h6 class="modal-title" id="exampleModalCenterTitle" style="color:#fff">Non-Active [About Asamu Solusi Mandiri] - ID <?= $row['id_product']; ?></h6>
                                                            <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <form method="POST" action="<?= base_url('aboutus/nonactive') ?>" enctype="multipart/form-data">
                                                            <div class="modal-body">
                                                                <div class="row">
                                                                    <div class="form-group col-md-12">
                                                                        <h5>Are you sure you want to deactivate the data?</h5>
                                                                        <hr>
                                                                        <div class="form-group col-md-12">
                                                                            <center>
                                                                                <?php if ($row['photo'] == NULL) { ?>
                                                                                    <img src="https://karangsari-sukodono.lumajangkab.go.id/assets-front/images/image-not-found.jpg" style="width: 144px;height: 144px;">
                                                                                <?php } else { ?>
                                                                                    <img src="<?= base_url('modes/images/about/photo/' . $row['photo']); ?>" style="width: 30%;height: auto;">
                                                                                <?php } ?>
                                                                            </center>
                                                                        </div>
                                                                        <input type="hidden" name="status" class="form-control" value="2">
                                                                        <input type="hidden" name="id_product" class="form-control" value="<?= $row['id_product']; ?>">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-sm btn-warning" data-dismiss="modal">No</button>
                                                                <button type="submit" class="btn btn-sm btn-danger">Yes</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Non-Active -->
                                            <!-- Active -->
                                            <div id="Active<?= $row['id_product']; ?>" class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" style="background: linear-gradient(45deg, #f44336a1, #f44336a1);">
                                                <div class="modal-dialog modal-dialog-centered" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header" style="background: linear-gradient(298deg, #150757, #150757, #150757);">
                                                            <h6 class="modal-title" id="exampleModalCenterTitle" style="color:#fff">Active [About Asamu Solusi Mandiri] - ID <?= $row['id_product']; ?></h6>
                                                            <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <form method="POST" action="<?= base_url('aboutus/active') ?>" enctype="multipart/form-data">
                                                            <div class="modal-body">
                                                                <div class="row">
                                                                    <div class="form-group col-md-12">
                                                                        <h5>Are you sure you want to Activate the data?</h5>
                                                                        <hr>
                                                                        <div class="form-group col-md-12">
                                                                            <center>
                                                                                <?php if ($row['photo'] == NULL) { ?>
                                                                                    <img src="https://karangsari-sukodono.lumajangkab.go.id/assets-front/images/image-not-found.jpg" style="width: 144px;height: 144px;">
                                                                                <?php } else { ?>
                                                                                    <img src="<?= base_url('modes/images/about/photo/' . $row['photo']); ?>" style="width: 30%;height: auto;">
                                                                                <?php } ?>
                                                                            </center>
                                                                        </div>
                                                                        <input type="hidden" name="status" class="form-control" value="1">
                                                                        <input type="hidden" name="id_product" class="form-control" value="<?= $row['id_product']; ?>">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-sm btn-warning" data-dismiss="modal">No</button>
                                                                <button type="submit" class="btn btn-sm btn-danger">Yes</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Aktif -->
                                            <!-- Delete  -->
                                            <div id="Delete<?= $row['id_product']; ?>" class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" style="background: linear-gradient(45deg, #f44336a1, #f44336a1);">
                                                <div class="modal-dialog modal-dialog-centered" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header" style="background: linear-gradient(298deg, #150757, #150757, #150757);">
                                                            <h6 class="modal-title" id="exampleModalCenterTitle" style="color:#fff">Delete Data [About Asamu Solusi Mandiri] - ID <?= $row['id_product']; ?></h6>
                                                            <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <form method="POST" action="<?= base_url('sliders/delete') ?>" enctype="multipart/form-data">
                                                            <div class="modal-body">
                                                                <div class="row">
                                                                    <div class="form-group col-md-12">
                                                                        <h5>Are you sure you want to delete this?</h5>
                                                                        <hr>
                                                                        <div class="form-group col-md-12">
                                                                            <center>
                                                                                <?php if ($row['photo'] == NULL) { ?>
                                                                                    <img src="https://karangsari-sukodono.lumajangkab.go.id/assets-front/images/image-not-found.jpg" style="width: 144px;height: 144px;">
                                                                                <?php } else { ?>
                                                                                    <img src="<?= base_url('modes/images/about/photo/' . $row['photo']); ?>" style="width: 30%;height: auto;">
                                                                                <?php } ?>
                                                                            </center>
                                                                        </div>
                                                                        <input type="hidden" name="id_product" class="form-control" value="<?= $row['id_product']; ?>">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-sm btn-warning" data-dismiss="modal">No</button>
                                                                <button type="submit" class="btn btn-sm btn-danger">Yes</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Delete -->
                                        <?php endforeach ?>
                                    <?php else : ?>
                                        <tr>
                                            <td colspan="6">
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
        <!-- END PRODUCT -->
        <!-- LIST PRODUCT -->
        <div class="row">
            <!-- [ table ] start -->
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="background: linear-gradient(298deg, #150757, #150757, #150757);">
                        <h4 style="color: #fff;">[Tables] Data About Asamu Solusi Mandiri </h4>
                        <span class="d-block m-t-5"><small style="color: #fff;">Last update - </small><code><?= tanggal_indo(date('d-m-Y'), true) ?></code> </span>
                    </div>
                    <div class="card-body table-border-style">
                        <!-- Add Data sliders -->
                        <button type="button" class="btn btn-sm btn-icon btn-success" data-toggle="modal" data-target="#exampleModalCenter"><i data-feather="check-circle"></i> Add Data</button>
                        <div id="exampleModalCenter" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" style="background: linear-gradient(45deg, rgb(174 176 255 / 0%), rgb(174, 176, 255));">
                            <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content">
                                    <div class="modal-header" style="background: linear-gradient(298deg, #150757, #150757, #150757);">
                                        <h2 class="modal-title" id="exampleModalCenterTitle" style="color:#fff">Add Data [About Asamu Solusi Mandiri]</h2>
                                        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <form method="POST" action="<?= base_url('aboutus/adding') ?>" enctype="multipart/form-data">
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="form-group col-md-12">
                                                    <label class="form-label" for="Photo">Photo</label>
                                                    <input type="file" name="photo" class="form-control" id="Photo" placeholder="Photo" required>
                                                    <small style="color: red;"><i> Format File : JPG | JPEG | PNG</i></small>
                                                    <br>
                                                    <small style="color: red;"><i> If you have a file that you want to upload, make sure it is under Maximum 2MB</i></small>
                                                </div>
                                                <div class="form-group col-md-12">
                                                    <label class="form-label" for="Title">Title</label>
                                                    <input type="text" name="title" class="form-control" id="Title" placeholder="Title" required>
                                                </div>
                                                <div class="form-group col-md-12">
                                                    <label class="form-label" for="Detail">Detail</label>
                                                    <textarea type="text" name="detail" class="texteditor" id="Detail" placeholder="Detail"></textarea>
                                                    <input type="hidden" name="created_date" value="<?= date('Y-m-d h:m:i') ?>">
                                                    <input type="hidden" name="created_by" value="<?= $this->session->userdata('username'); ?>">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-sm btn-danger" data-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-save"></i> Save</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- End Add Data slider -->
                        <hr>
                        <div class="table-responsive">
                            <table id="example" class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th style="text-align: center;">Photo</th>
                                        <th>Title</th>
                                        <!-- <th>Detail</th> -->
                                        <th>Created Date</th>
                                        <th style="text-align: center;">Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php if ($data_product) : $no = 0;
                                        foreach ($data_product as $row) : $no++; ?>
                                            <tr>
                                                <td><?= $no ?></td>
                                                <?php if ($row['photo'] == NULL) { ?>
                                                    <td style="display:block;text-align:center;">
                                                        <img src="https://karangsari-sukodono.lumajangkab.go.id/assets-front/images/image-not-found.jpg" style="width: 35px;height: 35px;">
                                                    </td>
                                                <?php } else { ?>
                                                    <td style="display:block;text-align:center;">
                                                        <img src="<?= base_url('modes/images/about/photo/' . $row['photo']); ?>" style="width: 35px;height: 35px;border-radius: 50%;">
                                                    </td>
                                                <?php } ?>
                                                <?php if ($row['title'] == NULL) { ?>
                                                    <td><i style="color: red;">NULL</i></td>
                                                <?php } else { ?>
                                                    <td><?= $row['title']; ?></td>
                                                <?php } ?>
                                                <!-- <?php if ($row['detail'] == NULL) { ?>
                                                    <td><i style="color: red;">NULL</i></td>
                                                <?php } else { ?>
                                                    <?php
                                                            $num_char = 20;
                                                            $text = $row['detail'];
                                                            $show = substr($text, 0, $num_char) . '...';
                                                    ?>
                                                    <td><?= $show; ?></td>
                                                <?php } ?> -->
                                                <td><?= $row['created_date']; ?></td>
                                                <!-- STATUS -->
                                                <?php if ($row['status'] == '1') { ?>
                                                    <td style="text-align: center;"><i class="fa fa-check" aria-hidden="true"></i> Active</td>
                                                <?php } else if ($row['status'] == '2') { ?>
                                                    <td style="color:red;text-align: center;"><i class="fa fa-ban" aria-hidden="true"></i> <i>Non-Active</i></td>
                                                <?php } ?>
                                                <td>
                                                    <button class="btn btn-sm btn-warning dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Action</button>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="#!" data-toggle="modal" data-target="#Detail<?= $row['id_product']; ?>"><i class="fa fa-eye"></i> Detail</a>
                                                        <a class="dropdown-item" href="#!" data-toggle="modal" data-target="#Edit<?= $row['id_product']; ?>"><i class="fa fa-edit"></i> Edit</a>
                                                        <a class="dropdown-item" href="#!" data-toggle="modal" data-target="#ChangePhoto<?= $row['id_product']; ?>"><i class="fa fa-image"></i> Change Photo</a>
                                                        <?php if ($row['status'] == '1') { ?>
                                                            <a class="dropdown-item" href="#!" data-toggle="modal" data-target="#Non-Active<?= $row['id_product']; ?>"><i class="fa fa-ban" aria-hidden="true"></i> Non-Active</a>
                                                        <?php } else if ($row['status'] == '2') { ?>
                                                            <a class="dropdown-item" href="#!" data-toggle="modal" data-target="#Active<?= $row['id_product']; ?>"><i class="fa fa-check" aria-hidden="true"></i> Active</a>
                                                        <?php } ?>
                                                        <a class="dropdown-item" href="#!" data-toggle="modal" data-target="#Delete<?= $row['id_product']; ?>"><i class="fa fa-trash"></i> Delete</a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <!-- Detail -->
                                            <div id="Detail<?= $row['id_product']; ?>" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                                <div class="modal-dialog modal-lg" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header" style="background: linear-gradient(298deg, #150757, #150757, #150757);">
                                                            <h2 class="modal-title" id="exampleModalCenterTitle" style="color:#fff">Detail [About Asamu Solusi Mandiri] - ID <?= $row['id_product']; ?></h2>
                                                            <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="row">
                                                                <div class="form-group col-md-12">
                                                                    <center>
                                                                        <?php if ($row['photo'] == NULL) { ?>
                                                                            <img src="https://karangsari-sukodono.lumajangkab.go.id/assets-front/images/image-not-found.jpg" style="width: 144px;height: 144px;">
                                                                        <?php } else { ?>
                                                                            <img src="<?= base_url('modes/images/about/photo/' . $row['photo']); ?>" style="width: 30%;height: auto;">
                                                                        <?php } ?>
                                                                    </center>
                                                                </div>
                                                                <div class="form-group col-md-12">
                                                                    <label class="form-label" for="Title">Title</label>
                                                                    <input type="text" name="title" class="form-control" id="Title" placeholder="Title" value="<?= $row['title']; ?>" readonly>
                                                                </div>
                                                                <div class="form-group col-md-12">
                                                                    <label class="form-label" for="Detail">Detail</label>
                                                                    <textarea type="text" name="detail" class="texteditor" id="Detail" placeholder="Detail" readonly><?= $row['detail']; ?></textarea>
                                                                    <input type="hidden" name="created_date" value="<?= date('Y-m-d h:m:i') ?>">
                                                                    <input type="hidden" name="created_by" value="<?= $this->session->userdata('username'); ?>">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-sm btn-warning" data-dismiss="modal">Close</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Detail -->
                                            <!-- Edit -->
                                            <div id="Edit<?= $row['id_product']; ?>" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                                <div class="modal-dialog modal-lg" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header" style="background: linear-gradient(298deg, #150757, #150757, #150757);">
                                                            <h2 class="modal-title" id="exampleModalCenterTitle" style="color:#fff">Edit [About Asamu Solusi Mandiri] - ID <?= $row['id_product']; ?></h2>
                                                            <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <form method="POST" action="<?= base_url('aboutus/updating') ?>" enctype="multipart/form-data">
                                                            <div class="modal-body">
                                                                <div class="row">
                                                                    <div class="form-group col-md-12">
                                                                        <center>
                                                                            <?php if ($row['photo'] == NULL) { ?>
                                                                                <img src="https://karangsari-sukodono.lumajangkab.go.id/assets-front/images/image-not-found.jpg" style="width: 144px;height: 144px;">
                                                                            <?php } else { ?>
                                                                                <img src="<?= base_url('modes/images/about/photo/' . $row['photo']); ?>" style="width: 30%;height: auto;">
                                                                            <?php } ?>
                                                                        </center>
                                                                    </div>
                                                                    <div class="form-group col-md-12">
                                                                        <label class="form-label" for="Title">Title</label>
                                                                        <input type="text" name="title" class="form-control" id="Title" placeholder="Title" value="<?= $row['title']; ?>">
                                                                    </div>
                                                                    <div class="form-group col-md-12">
                                                                        <label class="form-label" for="Detail">Detail</label>
                                                                        <textarea type="text" name="detail" class="texteditor" id="Detail" placeholder="Detail"><?= $row['detail']; ?></textarea>
                                                                        <input type="hidden" name="created_date" value="<?= date('Y-m-d h:m:i') ?>">
                                                                        <input type="hidden" name="created_by" value="<?= $this->session->userdata('username'); ?>">
                                                                        <input type="hidden" name="id_product" value="<?= $row['id_product']; ?>">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-sm btn-warning" data-dismiss="modal">Close</button>
                                                                <button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-save"></i> Update</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Edit -->
                                            <!-- Change Photo -->
                                            <div id="ChangePhoto<?= $row['id_product']; ?>" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                                <div class="modal-dialog modal-lg" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header" style="background: linear-gradient(298deg, #150757, #150757, #150757);">
                                                            <h2 class="modal-title" id="exampleModalCenterTitle" style="color:#fff">Change Photo [About Asamu Solusi Mandiri] - ID <?= $row['id_product']; ?></h2>
                                                            <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <form method="POST" action="<?= base_url('aboutus/changephoto') ?>" enctype="multipart/form-data">
                                                            <div class="modal-body">
                                                                <div class="row">
                                                                    <div class="form-group col-md-12">
                                                                        <center>
                                                                            <?php if ($row['photo'] == NULL) { ?>
                                                                                <img src="https://karangsari-sukodono.lumajangkab.go.id/assets-front/images/image-not-found.jpg" style="width: 144px;height: 144px;">
                                                                            <?php } else { ?>
                                                                                <img src="<?= base_url('modes/images/about/photo/' . $row['photo']); ?>" style="width: 30%;height: auto;">
                                                                            <?php } ?>
                                                                        </center>
                                                                    </div>
                                                                    <div class="form-group col-md-12">
                                                                        <label class="form-label" for="Photo">Photo</label>
                                                                        <input type="file" name="photo" class="form-control" id="Photo" placeholder="Photo" required>
                                                                        <small style="color: red;"><i> Format File : JPG | JPEG | PNG</i></small>
                                                                        <br>
                                                                        <small style="color: red;"><i> If you have a file that you want to upload, make sure it is under Maximum 2MB</i></small>
                                                                    </div>
                                                                    <div class="form-group col-md-12">
                                                                        <label class="form-label" for="Title">Title</label>
                                                                        <input type="text" name="title" class="form-control" id="Title" placeholder="Title" value="<?= $row['title']; ?>" readonly>
                                                                    </div>
                                                                    <div class="form-group col-md-12">
                                                                        <label class="form-label" for="Detail">Detail</label>
                                                                        <textarea type="text" name="detail" class="texteditor" id="Detail" placeholder="Detail" readonly><?= $row['detail']; ?></textarea>
                                                                        <input type="hidden" name="created_date" value="<?= date('Y-m-d h:m:i') ?>">
                                                                        <input type="hidden" name="created_by" value="<?= $this->session->userdata('username'); ?>">
                                                                        <input type="hidden" name="id_product" value="<?= $row['id_product']; ?>">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-sm btn-warning" data-dismiss="modal">Close</button>
                                                                <button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-save"></i> Change Photo</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Change Photo -->
                                            <!-- Non-Active -->
                                            <div id="Non-Active<?= $row['id_product']; ?>" class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" style="background: linear-gradient(45deg, #f44336a1, #f44336a1);">
                                                <div class="modal-dialog modal-dialog-centered" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header" style="background: linear-gradient(298deg, #150757, #150757, #150757);">
                                                            <h6 class="modal-title" id="exampleModalCenterTitle" style="color:#fff">Non-Active [About Asamu Solusi Mandiri] - ID <?= $row['id_product']; ?></h6>
                                                            <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <form method="POST" action="<?= base_url('aboutus/nonactive') ?>" enctype="multipart/form-data">
                                                            <div class="modal-body">
                                                                <div class="row">
                                                                    <div class="form-group col-md-12">
                                                                        <h5>Are you sure you want to deactivate the data?</h5>
                                                                        <hr>
                                                                        <div class="form-group col-md-12">
                                                                            <center>
                                                                                <?php if ($row['photo'] == NULL) { ?>
                                                                                    <img src="https://karangsari-sukodono.lumajangkab.go.id/assets-front/images/image-not-found.jpg" style="width: 144px;height: 144px;">
                                                                                <?php } else { ?>
                                                                                    <img src="<?= base_url('modes/images/about/photo/' . $row['photo']); ?>" style="width: 30%;height: auto;">
                                                                                <?php } ?>
                                                                            </center>
                                                                        </div>
                                                                        <input type="hidden" name="status" class="form-control" value="2">
                                                                        <input type="hidden" name="id_product" class="form-control" value="<?= $row['id_product']; ?>">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-sm btn-warning" data-dismiss="modal">No</button>
                                                                <button type="submit" class="btn btn-sm btn-danger">Yes</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Non-Active -->
                                            <!-- Active -->
                                            <div id="Active<?= $row['id_product']; ?>" class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" style="background: linear-gradient(45deg, #f44336a1, #f44336a1);">
                                                <div class="modal-dialog modal-dialog-centered" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header" style="background: linear-gradient(298deg, #150757, #150757, #150757);">
                                                            <h6 class="modal-title" id="exampleModalCenterTitle" style="color:#fff">Active [About Asamu Solusi Mandiri] - ID <?= $row['id_product']; ?></h6>
                                                            <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <form method="POST" action="<?= base_url('aboutus/active') ?>" enctype="multipart/form-data">
                                                            <div class="modal-body">
                                                                <div class="row">
                                                                    <div class="form-group col-md-12">
                                                                        <h5>Are you sure you want to Activate the data?</h5>
                                                                        <hr>
                                                                        <div class="form-group col-md-12">
                                                                            <center>
                                                                                <?php if ($row['photo'] == NULL) { ?>
                                                                                    <img src="https://karangsari-sukodono.lumajangkab.go.id/assets-front/images/image-not-found.jpg" style="width: 144px;height: 144px;">
                                                                                <?php } else { ?>
                                                                                    <img src="<?= base_url('modes/images/about/photo/' . $row['photo']); ?>" style="width: 30%;height: auto;">
                                                                                <?php } ?>
                                                                            </center>
                                                                        </div>
                                                                        <input type="hidden" name="status" class="form-control" value="1">
                                                                        <input type="hidden" name="id_product" class="form-control" value="<?= $row['id_product']; ?>">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-sm btn-warning" data-dismiss="modal">No</button>
                                                                <button type="submit" class="btn btn-sm btn-danger">Yes</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Aktif -->
                                            <!-- Delete  -->
                                            <div id="Delete<?= $row['id_product']; ?>" class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" style="background: linear-gradient(45deg, #f44336a1, #f44336a1);">
                                                <div class="modal-dialog modal-dialog-centered" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header" style="background: linear-gradient(298deg, #150757, #150757, #150757);">
                                                            <h6 class="modal-title" id="exampleModalCenterTitle" style="color:#fff">Delete Data [About Asamu Solusi Mandiri] - ID <?= $row['id_product']; ?></h6>
                                                            <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <form method="POST" action="<?= base_url('sliders/delete') ?>" enctype="multipart/form-data">
                                                            <div class="modal-body">
                                                                <div class="row">
                                                                    <div class="form-group col-md-12">
                                                                        <h5>Are you sure you want to delete this?</h5>
                                                                        <hr>
                                                                        <div class="form-group col-md-12">
                                                                            <center>
                                                                                <?php if ($row['photo'] == NULL) { ?>
                                                                                    <img src="https://karangsari-sukodono.lumajangkab.go.id/assets-front/images/image-not-found.jpg" style="width: 144px;height: 144px;">
                                                                                <?php } else { ?>
                                                                                    <img src="<?= base_url('modes/images/about/photo/' . $row['photo']); ?>" style="width: 30%;height: auto;">
                                                                                <?php } ?>
                                                                            </center>
                                                                        </div>
                                                                        <input type="hidden" name="id_product" class="form-control" value="<?= $row['id_product']; ?>">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-sm btn-warning" data-dismiss="modal">No</button>
                                                                <button type="submit" class="btn btn-sm btn-danger">Yes</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Delete -->
                                        <?php endforeach ?>
                                    <?php else : ?>
                                        <tr>
                                            <td colspan="7">
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
        <!-- END LIST PRODUCT -->
        <!-- [ Main Content ] end -->
    </div>
</section>
<!-- [ Main Content ] end -->
<script type="text/javascript" src="<?= base_url('modes/ckeditor/ckeditor.js'); ?>"></script>
<script type="text/javascript" src="<?= base_url('modes/ckeditor/adapters/jquery.js'); ?>"></script>
<script type="text/javascript">
    $('textarea.texteditor').ckeditor();
</script>