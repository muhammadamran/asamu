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
                            <h5 class="m-b-10">Page Manage Users</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#!">Administration Tools</a></li>
                            <li class="breadcrumb-item">Manage Users</li>
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
                        <h4 style="color: #fff;">[Tables] Data Manage Users </h4>
                        <span class="d-block m-t-5"><small style="color: #fff;">Last update - </small><code><?= tanggal_indo(date('d-m-Y'), true) ?></code> </span>
                    </div>
                    <div class="card-body table-border-style">
                        <!-- Add Data Manage Users -->
                        <button type="button" class="btn btn-sm btn-icon btn-success" data-toggle="modal" data-target="#exampleModalCenter"><i data-feather="check-circle"></i> Add Data</button>
                        <div id="exampleModalCenter" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" style="background: linear-gradient(45deg, rgb(174 176 255 / 0%), rgb(174, 176, 255));">
                            <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content">
                                    <div class="modal-header" style="background: linear-gradient(298deg, #150757, #150757, #150757);">
                                        <h2 class="modal-title" id="exampleModalCenterTitle" style="color:#fff">Add Data [Manage Users]</h2>
                                        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <form method="POST" action="<?= base_url('users/registration') ?>" enctype="multipart/form-data">
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="form-group col-md-6">
                                                    <label class="form-label" for="Full Name">Full Name</label>
                                                    <input type="text" name="full_name" class="form-control" id="Full Name" placeholder="Full Name" required>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label class="form-label" for="Role">Role</label>
                                                    <select name="role" class="form-control" id="Role" required>
                                                        <option value="">-- Select Role Users --</option>
                                                        <option value="admin">admin</option>
                                                        <!-- <option value="petugas">petugas</option> -->
                                                        <!-- <option value="masyarakat">masyarakat</option> -->
                                                    </select>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label class="form-label" for="Username">Username</label>
                                                    <input type="text" name="username" class="form-control" id="Username" placeholder="Username" required>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label class="form-label" for="Password">Password</label>
                                                    <input type="text" name="password" class="form-control" id="Password" value="changeme" readonly>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label class="form-label" for="Email Address">Email Address</label>
                                                    <input type="email" name="email" class="form-control" id="Email Address" placeholder="Email Address" required>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label class="form-label" for="No. Handphone">No. Handphone</label>
                                                    <input type="text" name="phone" class="form-control" id="No. Handphone" placeholder="No. Handphone" required>
                                                    <input type="hidden" name="created_date" value="<?= date('Y-m-d h:m:i') ?>">
                                                    <input type="hidden" name="status" value="1">
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
                        <!-- End Add Data Manajemen Users -->
                        <hr>
                        <div class="table-responsive">
                            <table id="example" class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th style="text-align: center;">Profile</th>
                                        <th>Username</th>
                                        <th>Full Name</th>
                                        <th style="text-align: center;">No. Handphone</th>
                                        <th>Email</th>
                                        <th style="text-align: center;">Status</th>
                                        <th style="text-align: center;">Role</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php if ($data_users) : $no = 0;
                                        foreach ($data_users as $row) : $no++; ?>
                                            <tr>
                                                <td><?= $no ?></td>
                                                <?php if ($row['profile'] == NULL) { ?>
                                                    <td style="display:block;text-align:center;">
                                                        <img src="<?= base_url('assets/images/user/User_Circle.png'); ?>" style="width: 35px;height: 35px;">
                                                    </td>
                                                <?php } else { ?>
                                                    <td style="display:block;text-align:center;">
                                                        <img src="<?= base_url('assets/images/user/' . $row['profile']); ?>" style="width: 35px;height: 35px;border-radius: 50%;">
                                                    </td>
                                                <?php } ?>
                                                <td><?= $row['username']; ?></td>
                                                <td><?= $row['full_name']; ?></td>
                                                <td style="text-align: center;"><?= $row['phone']; ?></td>
                                                <td><?= $row['email']; ?></td>
                                                <!-- STATUS -->
                                                <?php if ($row['status'] == '1') { ?>
                                                    <td style="text-align: center;"><i class="fa fa-check" aria-hidden="true"></i> Active</td>
                                                <?php } else if ($row['status'] == '2') { ?>
                                                    <td style="color:red;text-align: center;"><i class="fa fa-ban" aria-hidden="true"></i> <i>Non-Active</i></td>
                                                <?php } ?>
                                                <td style="text-align: center;"><?= $row['role']; ?></td>
                                                <td>
                                                    <button class="btn btn-sm btn-warning dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Action</button>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="#!" data-toggle="modal" data-target="#Detail<?= $row['id_employee']; ?>"><i class="fa fa-eye"></i> Detail</a>
                                                        <a class="dropdown-item" href="#!" data-toggle="modal" data-target="#ERole<?= $row['id_employee']; ?>"><i class="fa fa-edit"></i> Change Role</a>
                                                        <a class="dropdown-item" href="#!" data-toggle="modal" data-target="#ChangePass<?= $row['id_employee']; ?>"><i class="fa fa-lock"></i> Change Password</a>
                                                        <?php if ($row['status'] == '1') { ?>
                                                            <a class="dropdown-item" href="#!" data-toggle="modal" data-target="#Non-Active<?= $row['id_employee']; ?>"><i class="fa fa-ban" aria-hidden="true"></i> Non-Active</a>
                                                        <?php } else if ($row['status'] == '2') { ?>
                                                            <a class="dropdown-item" href="#!" data-toggle="modal" data-target="#Active<?= $row['id_employee']; ?>"><i class="fa fa-check" aria-hidden="true"></i> Active</a>
                                                        <?php } ?>
                                                        <a class="dropdown-item" href="#!" data-toggle="modal" data-target="#Delete<?= $row['id_employee']; ?>"><i class="fa fa-trash"></i> Delete</a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <!-- Detail -->
                                            <div id="Detail<?= $row['id_employee']; ?>" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                                <div class="modal-dialog modal-lg" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header" style="background: linear-gradient(298deg, #150757, #150757, #150757);">
                                                            <h2 class="modal-title" id="exampleModalCenterTitle" style="color:#fff">Detail [Manage Users] - ID <?= $row['id_employee']; ?></h2>
                                                            <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <form method="POST" action="<?= base_url('users/changepass') ?>" enctype="multipart/form-data">
                                                            <div class="modal-body">
                                                                <div class="row">
                                                                    <div class="form-group col-md-6">
                                                                        <center>
                                                                            <?php if ($row['profile'] == NULL) { ?>
                                                                                <img src="<?= base_url('assets/images/user/User_Circle.png'); ?>" style="width: 144px;height: 144px;">
                                                                            <?php } else { ?>
                                                                                <img src="<?= base_url('assets/images/user/' . $row['profile']); ?>" style="width: 144px;height: 144px;border-radius: 50%;">
                                                                            <?php } ?>
                                                                        </center>
                                                                    </div>
                                                                    <div class="form-group col-md-6">
                                                                        <label class="form-label" for="Full Name">Full Name</label>
                                                                        <input type="text" name="full_name" class="form-control" id="Full Name" value="<?= $row['full_name']; ?>" placeholder="Full Name" readonly>
                                                                        <label class="form-label" for="Role">Role</label>
                                                                        <select name="role" class="form-control" id="Role" readonly>
                                                                            <option value="<?= $row['role']; ?>"><?= $row['role']; ?></option>
                                                                            <option value="">-- Select Role Users --</option>
                                                                            <option value="admin">admin</option>
                                                                            <!-- <option value="petugas">petugas</option> -->
                                                                        </select>
                                                                    </div>
                                                                    <div class="form-group col-md-6">
                                                                        <label class="form-label" for="Username">Username</label>
                                                                        <input type="text" name="username" class="form-control" id="Username" value="<?= $row['username']; ?>" placeholder="Username" readonly>
                                                                    </div>
                                                                    <div class="form-group col-md-6">
                                                                        <label class="form-label" for="Password">Password</label>
                                                                        <input type="password" name="password" class="form-control" id="Password" value="<?= $row['password']; ?>" placeholder="Input New Password" readonly>
                                                                    </div>
                                                                    <div class="form-group col-md-4">
                                                                        <label class="form-label" for="Place Birthday">Place Birthday</label>
                                                                        <input type="text" name="placebirthday" class="form-control" id="Place Birthday" value="<?= $row['placebirthday']; ?>" placeholder="Place Birthday" readonly>
                                                                    </div>
                                                                    <div class="form-group col-md-4">
                                                                        <label class="form-label" for="Date Birthday">Date Birthday</label>
                                                                        <input type="date" name="birthday" class="form-control" id="Date Birthday" value="<?= $row['birthday']; ?>" placeholder="Date Birthday" readonly>
                                                                    </div>
                                                                    <div class="form-group col-md-4">
                                                                        <label class="form-label" for="Usia">Usia</label>
                                                                        <input type="text" name="age" class="form-control" id="Usia" value="<?= $row['age']; ?>" placeholder="Usia" readonly>
                                                                    </div>
                                                                    <div class="form-group col-md-6">
                                                                        <label class="form-label" for="Gender">Gender</label>
                                                                        <select name="gender" class="form-control" id="Gender" readonly>
                                                                            <option value="<?= $row['gender']; ?>"><?= $row['gender']; ?></option>
                                                                            <option value="">-- Select Gender --</option>
                                                                            <option value="Male">Male</option>
                                                                            <option value="Female">Female</option>
                                                                        </select>
                                                                    </div>
                                                                    <div class="form-group col-md-6">
                                                                        <label class="form-label" for="Religion">Religion</label>
                                                                        <select name="religion" class="form-control" id="Religion" readonly>
                                                                            <option value="<?= $row['religion']; ?>"><?= $row['religion']; ?></option>
                                                                            <option value="">-- Select Religion --</option>
                                                                            <option value="Islam">Islam</option>
                                                                            <option value="Protestant">Protestant</option>
                                                                            <option value="Catholic">Catholic</option>
                                                                            <option value="Hindu">Hindu</option>
                                                                            <option value="Buddha">Buddha</option>
                                                                        </select>
                                                                    </div>
                                                                    <div class="form-group col-md-6">
                                                                        <label class="form-label" for="Email Address">Email Address</label>
                                                                        <input type="email" name="email" class="form-control" id="Email Address" value="<?= $row['email']; ?>" placeholder="Email Address" readonly>
                                                                    </div>
                                                                    <div class="form-group col-md-6">
                                                                        <label class="form-label" for="No. Handphone">No. Handphone</label>
                                                                        <input type="text" name="phone" class="form-control" id="No. Handphone" value="<?= $row['phone']; ?>" placeholder="No. Handphone" readonly>
                                                                    </div>
                                                                    <div class="form-group col-md-6">
                                                                        <label class="form-label" for="Alamat Saat Ini">Alamat Saat Ini</label>
                                                                        <textarea name="address" class="form-control" id="Alamat Saat Ini" placeholder="Alamat Saat Ini" readonly><?= $row['address']; ?></textarea>
                                                                    </div>
                                                                    <div class="form-group col-md-6">
                                                                        <label class="form-label" for="City">City</label>
                                                                        <input type="text" name="city" class="form-control" id="City" value="<?= $row['city']; ?>" placeholder="City" readonly>
                                                                    </div>
                                                                    <div class="form-group col-md-6">
                                                                        <label class="form-label" for="Status Users">Status Users</label>
                                                                        <?php if ($row['status'] == '1') { ?>
                                                                            <input type="text" name="status" class="form-control" id="Status Users" value="Aktif" placeholder="Status Users" readonly>
                                                                        <?php } else if ($row['status'] == '2') { ?>
                                                                            <input type="text" name="status" class="form-control" id="Status Users" value="Non-Aktif" placeholder="Status Users" readonly>
                                                                        <?php } ?>
                                                                    </div>
                                                                    <div class="form-group col-md-6">
                                                                        <label class="form-label" for="Registration Date">Registration Date</label>
                                                                        <input type="text" name="created_date" class="form-control" id="Registration Date" value="<?= $row['created_date']; ?>" placeholder="Registration Date" readonly>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <hr>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-sm btn-warning" data-dismiss="modal">Close</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Detail -->
                                            <!-- Edit Role -->
                                            <div id="ERole<?= $row['id_employee']; ?>" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                                <div class="modal-dialog modal-lg" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header" style="background: linear-gradient(298deg, #150757, #150757, #150757);">
                                                            <h2 class="modal-title" id="exampleModalCenterTitle" style="color:#fff">Change Role [Manage Users] - ID <?= $row['id_employee']; ?></h2>
                                                            <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <form method="POST" action="<?= base_url('users/changerole') ?>" enctype="multipart/form-data">
                                                            <div class="modal-body">
                                                                <div class="row">
                                                                    <div class="form-group col-md-6">
                                                                        <label class="form-label" for="Full Name">Full Name</label>
                                                                        <input type="text" name="full_name" class="form-control" id="Full Name" value="<?= $row['full_name']; ?>" placeholder="Full Name" readonly>
                                                                    </div>
                                                                    <div class="form-group col-md-6">
                                                                        <label class="form-label" for="Role">Role</label>
                                                                        <select name="role" class="form-control" id="Role" required>
                                                                            <option value="<?= $row['role']; ?>"><?= $row['role']; ?></option>
                                                                            <option value="">-- Select Role Users --</option>
                                                                            <option value="admin">admin</option>
                                                                            <!-- <option value="petugas">petugas</option> -->
                                                                            <!-- <option value="masyarakat">masyarakat</option> -->
                                                                        </select>
                                                                    </div>
                                                                    <div class="form-group col-md-6">
                                                                        <label class="form-label" for="Username">Username</label>
                                                                        <input type="text" name="username" class="form-control" id="Username" value="<?= $row['username']; ?>" placeholder="Username" readonly>
                                                                    </div>
                                                                    <div class="form-group col-md-6">
                                                                        <label class="form-label" for="Password">Password</label>
                                                                        <input type="password" name="password" class="form-control" id="Password" value="<?= $row['password']; ?>" placeholder="Input New Password" readonly>
                                                                    </div>
                                                                    <div class="form-group col-md-6">
                                                                        <label class="form-label" for="Email Address">Email Address</label>
                                                                        <input type="email" name="email" class="form-control" id="Email Address" value="<?= $row['email']; ?>" placeholder="Email Address" readonly>
                                                                    </div>
                                                                    <div class="form-group col-md-6">
                                                                        <label class="form-label" for="No. Handphone">No. Handphone</label>
                                                                        <input type="text" name="phone" class="form-control" id="No. Handphone" value="<?= $row['phone']; ?>" placeholder="No. Handphone" readonly>
                                                                        <input type="hidden" name="created_date" value="<?= date('Y-m-d h:m:i') ?>">
                                                                        <input type="hidden" name="status" value="1">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <hr>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-sm btn-warning" data-dismiss="modal">Close</button>
                                                                <button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-save"></i> Update</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Edit Role -->
                                            <!-- ChangePass -->
                                            <div id="ChangePass<?= $row['id_employee']; ?>" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                                <div class="modal-dialog modal-lg" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header" style="background: linear-gradient(298deg, #150757, #150757, #150757);">
                                                            <h2 class="modal-title" id="exampleModalCenterTitle" style="color:#fff">Change Password [Manage Users] - ID <?= $row['id_employee']; ?></h2>
                                                            <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <form method="POST" action="<?= base_url('users/changepass') ?>" enctype="multipart/form-data">
                                                            <div class="modal-body">
                                                                <div class="row">
                                                                    <div class="form-group col-md-6">
                                                                        <label class="form-label" for="Full Name">Full Name</label>
                                                                        <input type="text" name="full_name" class="form-control" id="Full Name" value="<?= $row['full_name']; ?>" placeholder="Full Name" readonly>
                                                                    </div>
                                                                    <div class="form-group col-md-6">
                                                                        <label class="form-label" for="Role">Role</label>
                                                                        <select name="role" class="form-control" id="Role" readonly>
                                                                            <option value="<?= $row['role']; ?>"><?= $row['role']; ?></option>
                                                                            <option value="">-- Select Role Users --</option>
                                                                            <option value="admin">admin</option>
                                                                            <!-- <option value="petugas">petugas</option> -->
                                                                            <!-- <option value="masyarakat">masyarakat</option> -->
                                                                        </select>
                                                                    </div>
                                                                    <div class="form-group col-md-6">
                                                                        <label class="form-label" for="Username">Username</label>
                                                                        <input type="text" name="username" class="form-control" id="Username" value="<?= $row['username']; ?>" placeholder="Username" readonly>
                                                                    </div>
                                                                    <div class="form-group col-md-6">
                                                                        <label class="form-label" for="Password">Password</label>
                                                                        <input type="password" id="myInput" name="password" class="form-control" id="Password" placeholder="Input New Password" required>
                                                                        <div class="form-check">
                                                                            <input type="checkbox" class="form-check-input" onclick="myFunction()" id="customCheck1">
                                                                            <label class="form-check-label" for="flexCheckChecked">
                                                                                Show Password
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group col-md-6">
                                                                        <label class="form-label" for="Email Address">Email Address</label>
                                                                        <input type="email" name="email" class="form-control" id="Email Address" value="<?= $row['email']; ?>" placeholder="Email Address" readonly>
                                                                    </div>
                                                                    <div class="form-group col-md-6">
                                                                        <label class="form-label" for="No. Handphone">No. Handphone</label>
                                                                        <input type="text" name="phone" class="form-control" id="No. Handphone" value="<?= $row['phone']; ?>" placeholder="No. Handphone" readonly>
                                                                        <input type="hidden" name="created_date" value="<?= date('Y-m-d h:m:i') ?>">
                                                                        <input type="hidden" name="status" value="1">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <hr>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-sm btn-warning" data-dismiss="modal">Close</button>
                                                                <button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-save"></i> Update</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End ChangePass -->
                                            <!-- Non-Active -->
                                            <div id="Non-Active<?= $row['id_employee']; ?>" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                                <div class="modal-dialog modal-lg" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header" style="background: linear-gradient(298deg, #150757, #150757, #150757);">
                                                            <h2 class="modal-title" id="exampleModalCenterTitle" style="color:#fff">Non-Active [Manajemen Users] - ID <?= $row['id_employee']; ?></h2>
                                                            <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <form method="POST" action="<?= base_url('users/nonactive') ?>" enctype="multipart/form-data">
                                                            <div class="modal-body">
                                                                <div class="row">
                                                                    <div class="form-group col-md-12">
                                                                        <h5>Are you sure you do Non-Active Users?</h5>
                                                                        <hr>
                                                                        <div style="text-align:center">
                                                                            <label class="form-label">ID.<?= $row['id_employee']; ?> - <?= $row['username']; ?></label><br>
                                                                            <label class="form-label"><?= $row['full_name']; ?></label><br>
                                                                        </div>
                                                                        <input type="hidden" name="username" class="form-control" value="<?= $row['username']; ?>">
                                                                        <input type="hidden" name="status" class="form-control" value="2">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <hr>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-sm btn-warning" data-dismiss="modal">Close</button>
                                                                <button type="submit" class="btn btn-sm btn-primary">Non-Active</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Non-Active -->
                                            <!-- Active -->
                                            <div id="Active<?= $row['id_employee']; ?>" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                                <div class="modal-dialog modal-lg" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header" style="background: linear-gradient(298deg, #150757, #150757, #150757);">
                                                            <h2 class="modal-title" id="exampleModalCenterTitle" style="color:#fff">Active [Manage Users] - ID <?= $row['id_employee']; ?></h2>
                                                            <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <form method="POST" action="<?= base_url('users/active') ?>" enctype="multipart/form-data">
                                                            <div class="modal-body">
                                                                <div class="row">
                                                                    <div class="form-group col-md-12">
                                                                        <h5>Are you sure you are Active Users?</h5>
                                                                        <hr>
                                                                        <div style="text-align:center">
                                                                            <label class="form-label">ID.<?= $row['id_employee']; ?> - <?= $row['username']; ?></label><br>
                                                                            <label class="form-label"><?= $row['full_name']; ?></label><br>
                                                                        </div>
                                                                        <input type="hidden" name="username" class="form-control" value="<?= $row['username']; ?>">
                                                                        <input type="hidden" name="status" class="form-control" value="1">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <hr>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-sm btn-warning" data-dismiss="modal">Close</button>
                                                                <button type="submit" class="btn btn-sm btn-primary">Active</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Active -->
                                            <!-- Delete  -->
                                            <div id="Delete<?= $row['id_employee']; ?>" class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" style="background: linear-gradient(45deg, #f44336a1, #f44336a1);">
                                                <div class="modal-dialog modal-dialog-centered" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header" style="background: linear-gradient(298deg, #150757, #150757, #150757);">
                                                            <h6 class="modal-title" id="exampleModalCenterTitle" style="color:#fff">Delete Data [Manage Users] - ID <?= $row['id_employee']; ?></h6>
                                                            <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <form method="POST" action="<?= base_url('users/delete') ?>" enctype="multipart/form-data">
                                                            <div class="modal-body">
                                                                <div class="row">
                                                                    <div class="form-group col-md-12">
                                                                        <h5>Apa are you sure you want to delete this Users?</h5>
                                                                        <hr>
                                                                        <div style="text-align:center">
                                                                            <label class="form-label">ID.<?= $row['id_employee']; ?> - <?= $row['username']; ?></label><br>
                                                                            <label class="form-label"><?= $row['full_name']; ?></label><br>
                                                                        </div>
                                                                        <input type="hidden" name="username" class="form-control" value="<?= $row['username']; ?>">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <hr>
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