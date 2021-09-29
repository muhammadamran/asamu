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
                            <h5 class="m-b-10">Page Sliders</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#!">Modules</a></li>
                            <li class="breadcrumb-item"><a href="#!">Content All in One</a></li>
                            <li class="breadcrumb-item">Sliders</li>
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
        <!-- [ Main Content ] start -->
        <div class="row">
            <!-- [ table ] start -->
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="background: linear-gradient(298deg, #150757, #150757, #150757);">
                        <h4 style="color: #fff;">[Tables] Data Sliders </h4>
                        <span class="d-block m-t-5"><small style="color: #fff;">Last update - </small><code><?= tanggal_indo(date('d-m-Y'), true) ?></code> </span>
                    </div>
                    <div class="card-body table-border-style">
                        <!-- Add Data sliders -->
                        <button type="button" class="btn btn-sm btn-icon btn-success" data-toggle="modal" data-target="#exampleModalCenter"><i data-feather="check-circle"></i> Add Data</button>
                        <div id="exampleModalCenter" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" style="background: linear-gradient(45deg, rgb(174 176 255 / 0%), rgb(174, 176, 255));">
                            <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content">
                                    <div class="modal-header" style="background: linear-gradient(298deg, #150757, #150757, #150757);">
                                        <h2 class="modal-title" id="exampleModalCenterTitle" style="color:#fff">Add Data [Sliders]</h2>
                                        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <form method="POST" action="<?= base_url('sliders/adding') ?>" enctype="multipart/form-data">
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="form-group col-md-6">
                                                    <label class="form-label" for="Photo">Photo</label>
                                                    <input type="file" name="photo" class="form-control" id="Photo" placeholder="Photo" required>
                                                    <small style="color: red;"><i> Format File : JPG | JPEG | PNG</i></small>
                                                    <br>
                                                    <small style="color: red;"><i> If you have a file that you want to upload, make sure it is under Maximum 2MB</i></small>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label class="form-label" for="Status Slider">Status Sliders</label>
                                                    <select name="status" class="form-control" id="Status Sliders" required>
                                                        <option value="">-- Select Status Sliders --</option>
                                                        <option value="1">Active</option>
                                                        <option value="2">Non-Active</option>
                                                    </select>
                                                </div>
                                                <div class="form-group col-md-12">
                                                    <label class="form-label" for="Slogan 1">Slogan 1</label>
                                                    <input type="text" name="slogan_one" class="form-control" id="Slogan 1" placeholder="Slogan 1" required>
                                                </div>
                                                <div class="form-group col-md-12">
                                                    <label class="form-label" for="Slogan 2">Slogan 2</label>
                                                    <input type="text" name="slogan_two" class="form-control" id="Slogan 2" placeholder="Slogan 2" required>
                                                </div>
                                                <div class="form-group col-md-12">
                                                    <label class="form-label" for="Remaks">Remaks</label>
                                                    <textarea type="text" name="remaks" class="form-control" id="Remaks" placeholder="Remaks"></textarea>
                                                    <input type="hidden" name="created_date" value="<?= date('Y-m-d h:m:i') ?>">
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
                                        <th>Slogan One</th>
                                        <th>Slogan Two</th>
                                        <th>Remaks</th>
                                        <th>Created Date</th>
                                        <th style="text-align: center;">Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php if ($data_sliders) : $no = 0;
                                        foreach ($data_sliders as $row) : $no++; ?>
                                            <tr>
                                                <td><?= $no ?></td>
                                                <?php if ($row['photo'] == NULL) { ?>
                                                    <td style="display:block;text-align:center;">
                                                        <img src="<?= base_url('assuts/images/aboutpic5.jpg'); ?>" style="width: 35px;height: 35px;">
                                                    </td>
                                                <?php } else { ?>
                                                    <td style="display:block;text-align:center;">
                                                        <img src="<?= base_url('modes/images/sliders/' . $row['photo']); ?>" style="width: 35px;height: 35px;border-radius: 50%;">
                                                    </td>
                                                <?php } ?>
                                                <?php if ($row['slogan_one'] == NULL) { ?>
                                                    <td><i style="color: red;">NULL</i></td>
                                                <?php } else { ?>
                                                    <td><?= $row['slogan_one']; ?></td>
                                                <?php } ?>
                                                <?php if ($row['slogan_two'] == NULL) { ?>
                                                    <td><i style="color: red;">NULL</i></td>
                                                <?php } else { ?>
                                                    <td><?= $row['slogan_two']; ?></td>
                                                <?php } ?>
                                                <?php if ($row['remaks'] == NULL) { ?>
                                                    <td><i style="color: red;">NULL</i></td>
                                                <?php } else { ?>
                                                    <td><?= $row['remaks']; ?></td>
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
                                                        <a class="dropdown-item" href="#!" data-toggle="modal" data-target="#Detail<?= $row['id_sliders']; ?>"><i class="fa fa-eye"></i> Detail</a>
                                                        <a class="dropdown-item" href="#!" data-toggle="modal" data-target="#Edit<?= $row['id_sliders']; ?>"><i class="fa fa-edit"></i> Edit</a>
                                                        <a class="dropdown-item" href="#!" data-toggle="modal" data-target="#ChangePhoto<?= $row['id_sliders']; ?>"><i class="fa fa-image"></i> Change Photo</a>
                                                        <?php if ($row['status'] == '1') { ?>
                                                            <a class="dropdown-item" href="#!" data-toggle="modal" data-target="#Non-Active<?= $row['id_sliders']; ?>"><i class="fa fa-ban" aria-hidden="true"></i> Non-Active</a>
                                                        <?php } else if ($row['status'] == '2') { ?>
                                                            <a class="dropdown-item" href="#!" data-toggle="modal" data-target="#Active<?= $row['id_sliders']; ?>"><i class="fa fa-check" aria-hidden="true"></i> Active</a>
                                                        <?php } ?>
                                                        <a class="dropdown-item" href="#!" data-toggle="modal" data-target="#Delete<?= $row['id_sliders']; ?>"><i class="fa fa-trash"></i> Delete</a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <!-- Detail -->
                                            <div id="Detail<?= $row['id_sliders']; ?>" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                                <div class="modal-dialog modal-lg" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header" style="background: linear-gradient(298deg, #150757, #150757, #150757);">
                                                            <h2 class="modal-title" id="exampleModalCenterTitle" style="color:#fff">Detail [Sliders] - ID <?= $row['id_sliders']; ?></h2>
                                                            <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <form method="POST" action="<?= base_url('users/changepass') ?>" enctype="multipart/form-data">
                                                            <div class="modal-body">
                                                                <div class="row">
                                                                    <div class="form-group col-md-6">
                                                                        <center>
                                                                            <?php if ($row['photo'] == NULL) { ?>
                                                                                <img src="<?= base_url('assuts/images/aboutpic5.jpg'); ?>" style="width: 144px;height: 144px;">
                                                                            <?php } else { ?>
                                                                                <img src="<?= base_url('modes/images/sliders/' . $row['photo']); ?>" style="width: 100%;height: 100%;">
                                                                            <?php } ?>
                                                                        </center>
                                                                    </div>
                                                                    <div class="form-group col-md-6">
                                                                        <label class="form-label" for="Status Sliders">Status Sliders</label>
                                                                        <select name="status" class="form-control" id="Status Sliders" readonly>
                                                                            <?php if ($row['status'] == '1') { ?>
                                                                                <option value="1">Active</option>
                                                                            <?php } else if ($row['status'] == '2') { ?>
                                                                                <option value="2">Non-Active</option>
                                                                            <?php } ?>
                                                                            <option value="">-- Select Status Sliders --</option>
                                                                            <option value="1">Active</option>
                                                                            <option value="2">Non-Active</option>
                                                                        </select>
                                                                        <label class="form-label" for="Date Upload">Date Upload</label>
                                                                        <input type="text" name="created_date" class="form-control" id="Date Upload" value="<?= $row['created_date']; ?>" placeholder="Date Upload" readonly>
                                                                        <label class="form-label" for="Remaks">Remaks</label>
                                                                        <textarea type="text" name="remaks" class="form-control" id="Remaks" placeholder="Remaks" readonly><?= $row['remaks']; ?></textarea>
                                                                    </div>
                                                                    <div class="form-group col-md-12">
                                                                        <label class="form-label" for="Slogan 1">Slogan 1</label>
                                                                        <input type="text" name="slogan_one" class="form-control" id="Slogan 1" placeholder="Slogan 1" value="<?= $row['slogan_one']; ?>" readonly>
                                                                    </div>
                                                                    <div class="form-group col-md-12">
                                                                        <label class="form-label" for="Slogan 2">Slogan 2</label>
                                                                        <input type="text" name="slogan_two" class="form-control" id="Slogan 2" placeholder="Slogan 2" value="<?= $row['slogan_two']; ?>" readonly>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-sm btn-warning" data-dismiss="modal">Close</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Detail -->
                                            <!-- Edit -->
                                            <div id="Edit<?= $row['id_sliders']; ?>" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                                <div class="modal-dialog modal-lg" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header" style="background: linear-gradient(298deg, #150757, #150757, #150757);">
                                                            <h2 class="modal-title" id="exampleModalCenterTitle" style="color:#fff">Edit [Sliders] - ID <?= $row['id_sliders']; ?></h2>
                                                            <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <form method="POST" action="<?= base_url('sliders/updating') ?>" enctype="multipart/form-data">
                                                            <div class="modal-body">
                                                                <div class="row">
                                                                    <div class="form-group col-md-6">
                                                                        <center>
                                                                            <?php if ($row['photo'] == NULL) { ?>
                                                                                <img src="<?= base_url('assuts/images/aboutpic5.jpg'); ?>" style="width: 144px;height: 144px;">
                                                                            <?php } else { ?>
                                                                                <img src="<?= base_url('modes/images/sliders/' . $row['photo']); ?>" style="width: 100%;height: 100%;">
                                                                            <?php } ?>
                                                                        </center>
                                                                    </div>
                                                                    <div class="form-group col-md-6">
                                                                        <label class="form-label" for="Status Sliders">Status Sliders</label>
                                                                        <select name="status" class="form-control" id="Status Sliders" readonly>
                                                                            <?php if ($row['status'] == '1') { ?>
                                                                                <option value="1">Active</option>
                                                                            <?php } else if ($row['status'] == '2') { ?>
                                                                                <option value="2">Non-Active</option>
                                                                            <?php } ?>
                                                                            <option value="">-- Select Status Sliders --</option>
                                                                            <option value="1">Active</option>
                                                                            <option value="2">Non-Active</option>
                                                                        </select>
                                                                        <label class="form-label" for="Date Upload">Date Upload</label>
                                                                        <input type="text" class="form-control" id="Date Upload" value="<?= $row['created_date']; ?>" placeholder="Date Upload" readonly>
                                                                        <label class="form-label" for="Remaks">Remaks</label>
                                                                        <textarea type="text" name="remaks" class="form-control" id="Remaks" placeholder="Remaks"><?= $row['remaks']; ?></textarea>
                                                                        <input type="hidden" name="created_date" value="<?= date('Y-m-d h:m:i') ?>">
                                                                        <input type="hidden" name="id_sliders" value="<?= $row['id_sliders']; ?>">
                                                                    </div>
                                                                    <div class="form-group col-md-12">
                                                                        <label class="form-label" for="Slogan 1">Slogan 1</label>
                                                                        <input type="text" name="slogan_one" class="form-control" id="Slogan 1" placeholder="Slogan 1" value="<?= $row['slogan_one']; ?>" required>
                                                                    </div>
                                                                    <div class="form-group col-md-12">
                                                                        <label class="form-label" for="Slogan 2">Slogan 2</label>
                                                                        <input type="text" name="slogan_two" class="form-control" id="Slogan 2" placeholder="Slogan 2" value="<?= $row['slogan_two']; ?>" required>
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
                                            <div id="ChangePhoto<?= $row['id_sliders']; ?>" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                                <div class="modal-dialog modal-lg" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header" style="background: linear-gradient(298deg, #150757, #150757, #150757);">
                                                            <h2 class="modal-title" id="exampleModalCenterTitle" style="color:#fff">Change Photo [Slider] - ID <?= $row['id_sliders']; ?></h2>
                                                            <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <form method="POST" action="<?= base_url('sliders/changephoto') ?>" enctype="multipart/form-data">
                                                            <div class="modal-body">
                                                                <div class="row">
                                                                    <div class="form-group col-md-6">
                                                                        <center>
                                                                            <?php if ($row['photo'] == NULL) { ?>
                                                                                <img src="<?= base_url('assuts/images/aboutpic5.jpg'); ?>" style="width: 144px;height: 144px;">
                                                                            <?php } else { ?>
                                                                                <img src="<?= base_url('modes/images/sliders/' . $row['photo']); ?>" style="width: 100%;height: 100%;">
                                                                            <?php } ?>
                                                                        </center>
                                                                    </div>
                                                                    <div class="form-group col-md-6">
                                                                        <label class="form-label" for="Photo">Photo</label>
                                                                        <input type="file" name="photo" class="form-control" id="Photo" placeholder="Photo" required>
                                                                        <small style="color: red;"><i> Format File : JPG | JPEG | PNG</i></small>
                                                                        <br>
                                                                        <small style="color: red;"><i> If you have a file that you want to upload, make sure it is under Maximum 2MB</i></small>
                                                                        <br>
                                                                        <label class="form-label" for="Status Sliders">Status Sliders</label>
                                                                        <select name="status" class="form-control" id="Status Sliders" readonly>
                                                                            <?php if ($row['status'] == '1') { ?>
                                                                                <option value="1">Active</option>
                                                                            <?php } else if ($row['status'] == '2') { ?>
                                                                                <option value="2">Non-Active</option>
                                                                            <?php } ?>
                                                                            <option value="">-- Select Status Slider --</option>
                                                                            <option value="1">Active</option>
                                                                            <option value="2">Non-Active</option>
                                                                        </select>
                                                                        <label class="form-label" for="Date Upload">Date Upload</label>
                                                                        <input type="text" name="created_date" class="form-control" id="Date Upload" value="<?= $row['created_date']; ?>" placeholder="Date Upload" readonly>
                                                                        <label class="form-label" for="Remaks">Remaks</label>
                                                                        <textarea type="text" name="remaks" class="form-control" id="Remaks" placeholder="Remaks" readonly><?= $row['remaks']; ?></textarea>
                                                                        <input type="hidden" name="id_sliders" class="form-control" value="<?= $row['id_sliders']; ?>">
                                                                    </div>
                                                                    <div class="form-group col-md-12">
                                                                        <label class="form-label" for="Slogan 1">Slogan 1</label>
                                                                        <input type="text" name="slogan_one" class="form-control" id="Slogan 1" placeholder="Slogan 1" value="<?= $row['slogan_one']; ?>" readonly>
                                                                    </div>
                                                                    <div class="form-group col-md-12">
                                                                        <label class="form-label" for="Slogan 2">Slogan 2</label>
                                                                        <input type="text" name="slogan_two" class="form-control" id="Slogan 2" placeholder="Slogan 2" value="<?= $row['slogan_two']; ?>" readonly>
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
                                            <div id="Non-Active<?= $row['id_sliders']; ?>" class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" style="background: linear-gradient(45deg, #f44336a1, #f44336a1);">
                                                <div class="modal-dialog modal-dialog-centered" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header" style="background: linear-gradient(298deg, #150757, #150757, #150757);">
                                                            <h6 class="modal-title" id="exampleModalCenterTitle" style="color:#fff">Non-Active [Sliders] - ID <?= $row['id_sliders']; ?></h6>
                                                            <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <form method="POST" action="<?= base_url('sliders/nonactive') ?>" enctype="multipart/form-data">
                                                            <div class="modal-body">
                                                                <div class="row">
                                                                    <div class="form-group col-md-12">
                                                                        <h5>Are you sure you want to deactivate the sliders?</h5>
                                                                        <hr>
                                                                        <div class="form-group col-md-12">
                                                                            <center>
                                                                                <?php if ($row['photo'] == NULL) { ?>
                                                                                    <img src="<?= base_url('assuts/images/aboutpic5.jpg'); ?>" style="width: 144px;height: 144px;">
                                                                                <?php } else { ?>
                                                                                    <img src="<?= base_url('modes/images/sliders/' . $row['photo']); ?>" style="width: 100%;height: 100%;">
                                                                                <?php } ?>
                                                                            </center>
                                                                        </div>
                                                                        <input type="hidden" name="status" class="form-control" value="2">
                                                                        <input type="hidden" name="id_sliders" class="form-control" value="<?= $row['id_sliders']; ?>">
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
                                            <div id="Active<?= $row['id_sliders']; ?>" class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" style="background: linear-gradient(45deg, #f44336a1, #f44336a1);">
                                                <div class="modal-dialog modal-dialog-centered" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header" style="background: linear-gradient(298deg, #150757, #150757, #150757);">
                                                            <h6 class="modal-title" id="exampleModalCenterTitle" style="color:#fff">Active [Sliders] - ID <?= $row['id_sliders']; ?></h6>
                                                            <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <form method="POST" action="<?= base_url('sliders/active') ?>" enctype="multipart/form-data">
                                                            <div class="modal-body">
                                                                <div class="row">
                                                                    <div class="form-group col-md-12">
                                                                        <h5>Are you sure you want to Activate the sliders?</h5>
                                                                        <hr>
                                                                        <div class="form-group col-md-12">
                                                                            <center>
                                                                                <?php if ($row['photo'] == NULL) { ?>
                                                                                    <img src="<?= base_url('assuts/images/aboutpic5.jpg'); ?>" style="width: 144px;height: 144px;">
                                                                                <?php } else { ?>
                                                                                    <img src="<?= base_url('modes/images/sliders/' . $row['photo']); ?>" style="width: 100%;height: 100%;">
                                                                                <?php } ?>
                                                                            </center>
                                                                        </div>
                                                                        <input type="hidden" name="status" class="form-control" value="1">
                                                                        <input type="hidden" name="id_sliders" class="form-control" value="<?= $row['id_sliders']; ?>">
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
                                            <div id="Delete<?= $row['id_sliders']; ?>" class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" style="background: linear-gradient(45deg, #f44336a1, #f44336a1);">
                                                <div class="modal-dialog modal-dialog-centered" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header" style="background: linear-gradient(298deg, #150757, #150757, #150757);">
                                                            <h6 class="modal-title" id="exampleModalCenterTitle" style="color:#fff">Delete Data [Sliders] - ID <?= $row['id_sliders']; ?></h6>
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
                                                                                    <img src="<?= base_url('assuts/images/aboutpic5.jpg'); ?>" style="width: 144px;height: 144px;">
                                                                                <?php } else { ?>
                                                                                    <img src="<?= base_url('modes/images/sliders/' . $row['photo']); ?>" style="width: 100%;height: 100%;">
                                                                                <?php } ?>
                                                                            </center>
                                                                        </div>
                                                                        <input type="hidden" name="id_sliders" class="form-control" value="<?= $row['id_sliders']; ?>">
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