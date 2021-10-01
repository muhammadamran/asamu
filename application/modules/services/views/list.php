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
                            <h5 class="m-b-10">Page List Services</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#!">Modules</a></li>
                            <li class="breadcrumb-item"><a href="#!">Services</a></li>
                            <li class="breadcrumb-item">List Services</li>
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
        <!-- SERVICES HOME -->
        <div class="row">
            <!-- [ table ] start -->
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="background: linear-gradient(298deg, #150757, #150757, #150757);">
                        <h4 style="color: #fff;">[Tables] Data Services Section Home </h4>
                        <span class="d-block m-t-5"><small style="color: #fff;">Last update - </small><code><?= tanggal_indo(date('d-m-Y'), true) ?></code> </span>
                    </div>
                    <div class="card-body table-border-style">
                        <!-- Add Data Services Section Home -->
                        <?php if ($t_title == '1') { ?>
                            <button type="button" class="btn btn-sm btn-icon btn-success" data-toggle="modal" data-target="#" disabled><i data-feather="check-circle"></i> Add Data</button>
                        <?php } else { ?>
                            <button type="button" class="btn btn-sm btn-icon btn-success" data-toggle="modal" data-target="#ADDSHOME"><i data-feather="check-circle"></i> Add Data</button>
                        <?php } ?>
                        <div id="ADDSHOME" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" style="background: linear-gradient(45deg, rgb(174 176 255 / 0%), rgb(174, 176, 255));">
                            <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content">
                                    <div class="modal-header" style="background: linear-gradient(298deg, #150757, #150757, #150757);">
                                        <h2 class="modal-title" id="exampleModalCenterTitle" style="color:#fff">Add Data [Services Section Home]</h2>
                                        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <form method="POST" action="<?= base_url('services/addingssh') ?>" enctype="multipart/form-data">
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
                                                    <textarea type="text" name="detail" class="form-control" id="Detail" placeholder="Detail" required></textarea>
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
                        <!-- End Add Data Services Section Home -->
                        <hr>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Title One</th>
                                        <th>Title Two</th>
                                        <th>Detail</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php if ($services_thome) : $no = 0;
                                        foreach ($services_thome as $row_sh) : $no++; ?>
                                            <tr>
                                                <td><?= $no ?></td>
                                                <?php if ($row_sh['title_one'] == NULL) { ?>
                                                    <td><i style="color: red;">NULL</i></td>
                                                <?php } else { ?>
                                                    <td><?= $row_sh['title_one']; ?></td>
                                                <?php } ?>
                                                <?php if ($row_sh['title_two'] == NULL) { ?>
                                                    <td><i style="color: red;">NULL</i></td>
                                                <?php } else { ?>
                                                    <td><?= $row_sh['title_two']; ?></td>
                                                <?php } ?>
                                                <?php if ($row_sh['detail'] == NULL) { ?>
                                                    <td><i style="color: red;">NULL</i></td>
                                                <?php } else { ?>
                                                    <td><?= $row_sh['detail']; ?></td>
                                                <?php } ?>
                                                <td>
                                                    <button class="btn btn-sm btn-warning dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Action</button>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="#!" data-toggle="modal" data-target="#HDetail<?= $row_sh['id_services_home']; ?>"><i class="fa fa-eye"></i> Detail</a>
                                                        <a class="dropdown-item" href="#!" data-toggle="modal" data-target="#HEdit<?= $row_sh['id_services_home']; ?>"><i class="fa fa-edit"></i> Edit</a>
                                                        <a class="dropdown-item" href="#!" data-toggle="modal" data-target="#HDelete<?= $row_sh['id_services_home']; ?>"><i class="fa fa-trash"></i> Delete</a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <!-- Detail -->
                                            <div id="HDetail<?= $row_sh['id_services_home']; ?>" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                                <div class="modal-dialog modal-lg" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header" style="background: linear-gradient(298deg, #150757, #150757, #150757);">
                                                            <h2 class="modal-title" id="exampleModalCenterTitle" style="color:#fff">Detail [Services Section Home] - ID <?= $row_sh['id_services_home']; ?></h2>
                                                            <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="row">
                                                                <div class="form-group col-md-6">
                                                                    <label class="form-label" for="Title One">Title One</label>
                                                                    <input type="text" name="title_one" class="form-control" id="Title One" value="<?= $row_sh['title_one']; ?>" placeholder="Title One" readonly>
                                                                </div>
                                                                <div class="form-group col-md-6">
                                                                    <label class="form-label" for="Title Two">Title Two</label>
                                                                    <input type="text" name="title_two" class="form-control" id="Title Two" value="<?= $row_sh['title_two']; ?>" placeholder="Title Two" readonly>
                                                                </div>
                                                                <div class="form-group col-md-12">
                                                                    <label class="form-label" for="Detail">Detail</label>
                                                                    <textarea type="text" name="detail" class="form-control" id="Detail" placeholder="Detail" readonly><?= $row_sh['detail']; ?></textarea>
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
                                            <div id="HEdit<?= $row_sh['id_services_home']; ?>" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                                <div class="modal-dialog modal-lg" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header" style="background: linear-gradient(298deg, #150757, #150757, #150757);">
                                                            <h2 class="modal-title" id="exampleModalCenterTitle" style="color:#fff">Edit [Services Section Home] - ID <?= $row_sh['id_services_home']; ?></h2>
                                                            <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <form method="POST" action="<?= base_url('services/updatingssh') ?>" enctype="multipart/form-data">
                                                            <div class="modal-body">
                                                                <div class="row">
                                                                    <div class="form-group col-md-6">
                                                                        <label class="form-label" for="Title One">Title One</label>
                                                                        <input type="text" name="title_one" class="form-control" id="Title One" value="<?= $row_sh['title_one']; ?>" placeholder="Title One">
                                                                    </div>
                                                                    <div class="form-group col-md-6">
                                                                        <label class="form-label" for="Title Two">Title Two</label>
                                                                        <input type="text" name="title_two" class="form-control" id="Title Two" value="<?= $row_sh['title_two']; ?>" placeholder="Title Two">
                                                                    </div>
                                                                    <div class="form-group col-md-12">
                                                                        <label class="form-label" for="Detail">Detail</label>
                                                                        <textarea type="text" name="detail" class="form-control" id="Detail" placeholder="Detail"><?= $row_sh['detail']; ?></textarea>
                                                                        <input type="hidden" name="created_date" value="<?= date('Y-m-d h:m:i') ?>">
                                                                        <input type="hidden" name="created_by" value="<?= $this->session->userdata('username'); ?>">
                                                                        <input type="hidden" name="id_services_home" class="form-control" value="<?= $row_sh['id_services_home']; ?>">
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
                                            <!-- Delete  -->
                                            <div id="HDelete<?= $row_sh['id_services_home']; ?>" class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" style="background: linear-gradient(45deg, #f44336a1, #f44336a1);">
                                                <div class="modal-dialog modal-dialog-centered" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header" style="background: linear-gradient(298deg, #150757, #150757, #150757);">
                                                            <h6 class="modal-title" id="exampleModalCenterTitle" style="color:#fff">Delete Data [Services Section Home] - ID <?= $row_sh['id_services_home']; ?></h6>
                                                            <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <form method="POST" action="<?= base_url('services/deletelssh') ?>" enctype="multipart/form-data">
                                                            <div class="modal-body">
                                                                <div class="row">
                                                                    <div class="form-group col-md-12">
                                                                        <h5>Are you sure you want to delete this?</h5>
                                                                        <input type="hidden" name="id_services_home" class="form-control" value="<?= $row_sh['id_services_home']; ?>">
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
                                            <td colspan="5">
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
            <!-- [ table ] start -->
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header" style="background: linear-gradient(298deg, #150757, #150757, #150757);">
                        <h4 style="color: #fff;">[Tables] Data P1 Services </h4>
                        <span class="d-block m-t-5"><small style="color: #fff;">Last update - </small><code><?= tanggal_indo(date('d-m-Y'), true) ?></code> </span>
                    </div>
                    <div class="card-body table-border-style">
                        <!-- Add Data P1 Services -->
                        <?php if ($pone_title == '1') { ?>
                            <button type="button" class="btn btn-sm btn-icon btn-success" data-toggle="modal" data-target="#" disabled><i data-feather="check-circle"></i> Add Data</button>
                        <?php } else { ?>
                            <button type="button" class="btn btn-sm btn-icon btn-success" data-toggle="modal" data-target="#PONE"><i data-feather="check-circle"></i> Add Data</button>
                        <?php } ?>
                        <div id="PONE" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" style="background: linear-gradient(45deg, rgb(174 176 255 / 0%), rgb(174, 176, 255));">
                            <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content">
                                    <div class="modal-header" style="background: linear-gradient(298deg, #150757, #150757, #150757);">
                                        <h2 class="modal-title" id="exampleModalCenterTitle" style="color:#fff">Add Data [P1 Services]</h2>
                                        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <form method="POST" action="<?= base_url('services/addingpsh') ?>" enctype="multipart/form-data">
                                        <div class="modal-body">
                                            <div class="row">
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
                        <!-- End Add Data P1 Services -->
                        <hr>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Title</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php if ($services_pone) : $no = 0;
                                        foreach ($services_pone as $row_pone) : $no++; ?>
                                            <tr>
                                                <td><?= $no ?></td>
                                                <?php if ($row_pone['title'] == NULL) { ?>
                                                    <td><i style="color: red;">NULL</i></td>
                                                <?php } else { ?>
                                                    <td><?= $row_pone['title']; ?></td>
                                                <?php } ?>
                                                <td>
                                                    <button class="btn btn-sm btn-warning dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Action</button>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="#!" data-toggle="modal" data-target="#P1Detail<?= $row_pone['id_services_home']; ?>"><i class="fa fa-eye"></i> Detail</a>
                                                        <a class="dropdown-item" href="#!" data-toggle="modal" data-target="#P1Edit<?= $row_pone['id_services_home']; ?>"><i class="fa fa-edit"></i> Edit</a>
                                                        <a class="dropdown-item" href="#!" data-toggle="modal" data-target="#P1Delete<?= $row_pone['id_services_home']; ?>"><i class="fa fa-trash"></i> Delete</a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <!-- Detail -->
                                            <div id="P1Detail<?= $row_pone['id_services_home']; ?>" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                                <div class="modal-dialog modal-lg" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header" style="background: linear-gradient(298deg, #150757, #150757, #150757);">
                                                            <h2 class="modal-title" id="exampleModalCenterTitle" style="color:#fff">Detail [P1 Services] - ID <?= $row_pone['id_services_home']; ?></h2>
                                                            <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="row">
                                                                <div class="form-group col-md-12">
                                                                    <label class="form-label" for="Title">Title</label>
                                                                    <input type="text" name="title" class="form-control" id="Title" placeholder="Title" value="<?= $row_pone['title']; ?>" readonly>
                                                                </div>
                                                                <div class="form-group col-md-12">
                                                                    <label class="form-label" for="Detail">Detail</label>
                                                                    <textarea type="text" name="detail" class="texteditor" id="Detail" placeholder="Detail" readonly><?= $row_pone['detail']; ?></textarea>
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
                                            <div id="P1Edit<?= $row_pone['id_services_home']; ?>" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                                <div class="modal-dialog modal-lg" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header" style="background: linear-gradient(298deg, #150757, #150757, #150757);">
                                                            <h2 class="modal-title" id="exampleModalCenterTitle" style="color:#fff">Edit [P1 Services] - ID <?= $row_pone['id_services_home']; ?></h2>
                                                            <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <form method="POST" action="<?= base_url('services/updatingssh') ?>" enctype="multipart/form-data">
                                                            <div class="modal-body">
                                                                <div class="row">
                                                                    <div class="form-group col-md-12">
                                                                        <label class="form-label" for="Title">Title</label>
                                                                        <input type="text" name="title" class="form-control" id="Title" placeholder="Title" value="<?= $row_pone['title']; ?>">
                                                                    </div>
                                                                    <div class="form-group col-md-12">
                                                                        <label class="form-label" for="Detail">Detail</label>
                                                                        <textarea type="text" name="detail" class="texteditor" id="Detail" placeholder="Detail"><?= $row_pone['detail']; ?></textarea>
                                                                        <input type="hidden" name="created_date" value="<?= date('Y-m-d h:m:i') ?>">
                                                                        <input type="hidden" name="created_by" value="<?= $this->session->userdata('username'); ?>">
                                                                        <input type="hidden" name="id_services_home" value="<?= $row_pone['id_services_home']; ?>">
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
                                            <!-- Delete  -->
                                            <div id="P1Delete<?= $row_pone['id_services_home']; ?>" class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" style="background: linear-gradient(45deg, #f44336a1, #f44336a1);">
                                                <div class="modal-dialog modal-dialog-centered" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header" style="background: linear-gradient(298deg, #150757, #150757, #150757);">
                                                            <h6 class="modal-title" id="exampleModalCenterTitle" style="color:#fff">Delete Data [P1 Services] - ID <?= $row_pone['id_services_home']; ?></h6>
                                                            <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <form method="POST" action="<?= base_url('services/deletelpsh') ?>" enctype="multipart/form-data">
                                                            <div class="modal-body">
                                                                <div class="row">
                                                                    <div class="form-group col-md-12">
                                                                        <h5>Are you sure you want to delete this?</h5>
                                                                        <input type="hidden" name="id_services_home" class="form-control" value="<?= $row_pone['id_services_home']; ?>">
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
                                            <td colspan="3">
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
            <!-- [ table ] start -->
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header" style="background: linear-gradient(298deg, #150757, #150757, #150757);">
                        <h4 style="color: #fff;">[Tables] Data P2 Services </h4>
                        <span class="d-block m-t-5"><small style="color: #fff;">Last update - </small><code><?= tanggal_indo(date('d-m-Y'), true) ?></code> </span>
                    </div>
                    <div class="card-body table-border-style">
                        <!-- Add Data P2 Services -->
                        <?php if ($ptwo_title == '1') { ?>
                            <button type="button" class="btn btn-sm btn-icon btn-success" data-toggle="modal" data-target="#" disabled><i data-feather="check-circle"></i> Add Data</button>
                        <?php } else { ?>
                            <button type="button" class="btn btn-sm btn-icon btn-success" data-toggle="modal" data-target="#PONETWO"><i data-feather="check-circle"></i> Add Data</button>
                        <?php } ?>
                        <div id="PONETWO" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" style="background: linear-gradient(45deg, rgb(174 176 255 / 0%), rgb(174, 176, 255));">
                            <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content">
                                    <div class="modal-header" style="background: linear-gradient(298deg, #150757, #150757, #150757);">
                                        <h2 class="modal-title" id="exampleModalCenterTitle" style="color:#fff">Add Data [P2 Services]</h2>
                                        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <form method="POST" action="<?= base_url('services/addingpshtwo') ?>" enctype="multipart/form-data">
                                        <div class="modal-body">
                                            <div class="row">
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
                        <!-- End Add Data P2 Services -->
                        <hr>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Title</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php if ($services_ptwo) : $no = 0;
                                        foreach ($services_ptwo as $row_ptwo) : $no++; ?>
                                            <tr>
                                                <td><?= $no ?></td>
                                                <?php if ($row_ptwo['title'] == NULL) { ?>
                                                    <td><i style="color: red;">NULL</i></td>
                                                <?php } else { ?>
                                                    <td><?= $row_ptwo['title']; ?></td>
                                                <?php } ?>
                                                <td>
                                                    <button class="btn btn-sm btn-warning dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Action</button>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="#!" data-toggle="modal" data-target="#P2Detail<?= $row_ptwo['id_services_home']; ?>"><i class="fa fa-eye"></i> Detail</a>
                                                        <a class="dropdown-item" href="#!" data-toggle="modal" data-target="#P2Edit<?= $row_ptwo['id_services_home']; ?>"><i class="fa fa-edit"></i> Edit</a>
                                                        <a class="dropdown-item" href="#!" data-toggle="modal" data-target="#P2Delete<?= $row_ptwo['id_services_home']; ?>"><i class="fa fa-trash"></i> Delete</a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <!-- Detail -->
                                            <div id="P2Detail<?= $row_ptwo['id_services_home']; ?>" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                                <div class="modal-dialog modal-lg" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header" style="background: linear-gradient(298deg, #150757, #150757, #150757);">
                                                            <h2 class="modal-title" id="exampleModalCenterTitle" style="color:#fff">Detail [P2 Services] - ID <?= $row_ptwo['id_services_home']; ?></h2>
                                                            <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="row">
                                                                <div class="form-group col-md-12">
                                                                    <label class="form-label" for="Title">Title</label>
                                                                    <input type="text" name="title" class="form-control" id="Title" placeholder="Title" value="<?= $row_ptwo['title']; ?>" readonly>
                                                                </div>
                                                                <div class="form-group col-md-12">
                                                                    <label class="form-label" for="Detail">Detail</label>
                                                                    <textarea type="text" name="detail" class="texteditor" id="Detail" placeholder="Detail" readonly><?= $row_ptwo['detail']; ?></textarea>
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
                                            <div id="P2Edit<?= $row_ptwo['id_services_home']; ?>" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                                <div class="modal-dialog modal-lg" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header" style="background: linear-gradient(298deg, #150757, #150757, #150757);">
                                                            <h2 class="modal-title" id="exampleModalCenterTitle" style="color:#fff">Edit [P2 Services] - ID <?= $row_ptwo['id_services_home']; ?></h2>
                                                            <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <form method="POST" action="<?= base_url('services/updatingssh') ?>" enctype="multipart/form-data">
                                                            <div class="modal-body">
                                                                <div class="row">
                                                                    <div class="form-group col-md-12">
                                                                        <label class="form-label" for="Title">Title</label>
                                                                        <input type="text" name="title" class="form-control" id="Title" placeholder="Title" value="<?= $row_ptwo['title']; ?>">
                                                                    </div>
                                                                    <div class="form-group col-md-12">
                                                                        <label class="form-label" for="Detail">Detail</label>
                                                                        <textarea type="text" name="detail" class="texteditor" id="Detail" placeholder="Detail"><?= $row_ptwo['detail']; ?></textarea>
                                                                        <input type="hidden" name="created_date" value="<?= date('Y-m-d h:m:i') ?>">
                                                                        <input type="hidden" name="created_by" value="<?= $this->session->userdata('username'); ?>">
                                                                        <input type="hidden" name="id_services_home" value="<?= $row_ptwo['id_services_home']; ?>">
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
                                            <!-- Delete  -->
                                            <div id="P2Delete<?= $row_ptwo['id_services_home']; ?>" class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" style="background: linear-gradient(45deg, #f44336a1, #f44336a1);">
                                                <div class="modal-dialog modal-dialog-centered" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header" style="background: linear-gradient(298deg, #150757, #150757, #150757);">
                                                            <h6 class="modal-title" id="exampleModalCenterTitle" style="color:#fff">Delete Data [P2 Services] - ID <?= $row_ptwo['id_services_home']; ?></h6>
                                                            <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <form method="POST" action="<?= base_url('services/deletelpsh') ?>" enctype="multipart/form-data">
                                                            <div class="modal-body">
                                                                <div class="row">
                                                                    <div class="form-group col-md-12">
                                                                        <h5>Are you sure you want to delete this?</h5>
                                                                        <input type="hidden" name="id_services_home" class="form-control" value="<?= $row_ptwo['id_services_home']; ?>">
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
                                            <td colspan="3">
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
        <!-- END SERVICES HOME -->
        <!-- LIST SERVICES -->
        <div class="row">
            <!-- [ table ] start -->
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="background: linear-gradient(298deg, #150757, #150757, #150757);">
                        <h4 style="color: #fff;">[Tables] Data List Services </h4>
                        <span class="d-block m-t-5"><small style="color: #fff;">Last update - </small><code><?= tanggal_indo(date('d-m-Y'), true) ?></code> </span>
                    </div>
                    <div class="card-body table-border-style">
                        <!-- Add Data List Services -->
                        <button type="button" class="btn btn-sm btn-icon btn-success" data-toggle="modal" data-target="#exampleModalCenter"><i data-feather="check-circle"></i> Add Data</button>
                        <div id="exampleModalCenter" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" style="background: linear-gradient(45deg, rgb(174 176 255 / 0%), rgb(174, 176, 255));">
                            <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content">
                                    <div class="modal-header" style="background: linear-gradient(298deg, #150757, #150757, #150757);">
                                        <h2 class="modal-title" id="exampleModalCenterTitle" style="color:#fff">Add Data [List Services]</h2>
                                        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <form method="POST" action="<?= base_url('services/addinglservices') ?>" enctype="multipart/form-data">
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="form-group col-md-12">
                                                    <label class="form-label" for="Services Name">Services Name</label>
                                                    <input type="text" name="name_services" class="form-control" id="Services Name" placeholder="Services Name" required>
                                                </div>
                                                <div class="form-group col-md-12">
                                                    <label class="form-label" for="Slogan Services">Slogan Services</label>
                                                    <input type="text" name="slogan" class="form-control" id="Slogan Services" placeholder="Slogan Services" required>
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
                        <!-- End Add Data List Services -->
                        <hr>
                        <div class="table-responsive">
                            <table id="example" class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Services Name</th>
                                        <th>Slogan Services</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php if ($list_services) : $no = 0;
                                        foreach ($list_services as $row) : $no++; ?>
                                            <tr>
                                                <td><?= $no ?></td>
                                                <?php if ($row['name_services'] == NULL) { ?>
                                                    <td><i style="color: red;">NULL</i></td>
                                                <?php } else { ?>
                                                    <td><?= $row['name_services']; ?></td>
                                                <?php } ?>
                                                <?php if ($row['slogan'] == NULL) { ?>
                                                    <td><i style="color: red;">NULL</i></td>
                                                <?php } else { ?>
                                                    <td><?= $row['slogan']; ?></td>
                                                <?php } ?>
                                                <td>
                                                    <button class="btn btn-sm btn-warning dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Action</button>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="#!" data-toggle="modal" data-target="#Detail<?= $row['id_services']; ?>"><i class="fa fa-eye"></i> Detail</a>
                                                        <a class="dropdown-item" href="#!" data-toggle="modal" data-target="#Edit<?= $row['id_services']; ?>"><i class="fa fa-edit"></i> Edit</a>
                                                        <a class="dropdown-item" href="#!" data-toggle="modal" data-target="#Delete<?= $row['id_services']; ?>"><i class="fa fa-trash"></i> Delete</a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <!-- Detail -->
                                            <div id="Detail<?= $row['id_services']; ?>" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                                <div class="modal-dialog modal-lg" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header" style="background: linear-gradient(298deg, #150757, #150757, #150757);">
                                                            <h2 class="modal-title" id="exampleModalCenterTitle" style="color:#fff">Detail [List Services] - ID <?= $row['id_services']; ?></h2>
                                                            <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="row">
                                                                <div class="form-group col-md-12">
                                                                    <label class="form-label" for="Services Name">Services Name</label>
                                                                    <input type="text" name="name_services" class="form-control" id="Services Name" placeholder="Services Name" value="<?= $row['name_services']; ?>" readonly>
                                                                </div>
                                                                <div class="form-group col-md-12">
                                                                    <label class="form-label" for="Slogan Services">Slogan Services</label>
                                                                    <input type="text" name="slogan" class="form-control" id="Slogan Services" placeholder="Slogan Services" value="<?= $row['slogan']; ?>" readonly>
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
                                            <div id="Edit<?= $row['id_services']; ?>" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                                <div class="modal-dialog modal-lg" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header" style="background: linear-gradient(298deg, #150757, #150757, #150757);">
                                                            <h2 class="modal-title" id="exampleModalCenterTitle" style="color:#fff">Edit [List Services] - ID <?= $row['id_services']; ?></h2>
                                                            <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <form method="POST" action="<?= base_url('services/updatinglservices') ?>" enctype="multipart/form-data">
                                                            <div class="modal-body">
                                                                <div class="row">
                                                                    <div class="form-group col-md-12">
                                                                        <label class="form-label" for="Services Name">Services Name</label>
                                                                        <input type="text" name="name_services" class="form-control" id="Services Name" placeholder="Services Name" value="<?= $row['name_services']; ?>">
                                                                    </div>
                                                                    <div class="form-group col-md-12">
                                                                        <label class="form-label" for="Slogan Services">Slogan Services</label>
                                                                        <input type="text" name="slogan" class="form-control" id="Slogan Services" placeholder="Slogan Services" value="<?= $row['slogan']; ?>">
                                                                        <input type="hidden" name="id_services" class="form-control" value="<?= $row['id_services']; ?>">
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
                                            <!-- Delete  -->
                                            <div id="Delete<?= $row['id_services']; ?>" class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" style="background: linear-gradient(45deg, #f44336a1, #f44336a1);">
                                                <div class="modal-dialog modal-dialog-centered" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header" style="background: linear-gradient(298deg, #150757, #150757, #150757);">
                                                            <h6 class="modal-title" id="exampleModalCenterTitle" style="color:#fff">Delete Data [List Services] - ID <?= $row['id_services']; ?></h6>
                                                            <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <form method="POST" action="<?= base_url('services/deletelservices') ?>" enctype="multipart/form-data">
                                                            <div class="modal-body">
                                                                <div class="row">
                                                                    <div class="form-group col-md-12">
                                                                        <h5>Are you sure you want to delete this?</h5>
                                                                        <input type="hidden" name="id_services" class="form-control" value="<?= $row['id_services']; ?>">
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
                                            <td colspan="3">
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
        <!-- END LIST SERVICES -->
        <!-- [ Main Content ] end -->
    </div>
</section>
<!-- [ Main Content ] end -->
<script type="text/javascript" src="<?= base_url('modes/ckeditor/ckeditor.js'); ?>"></script>
<script type="text/javascript" src="<?= base_url('modes/ckeditor/adapters/jquery.js'); ?>"></script>
<script type="text/javascript">
    $('textarea.texteditor').ckeditor();
</script>