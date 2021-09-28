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
                    <h4 style="color: #000;"><i class="fa fa-info-circle"></i> Informasi!</h4>
                    <hr>
                    <p style="color: #000;">Data Setting Site sudah <b>aktif</b> di sistem, pastikan status tidak ada yang <b>aktif</b>!</p>
                </div>
            </div>
        <?php endif; ?>
        <!-- [ Main Content ] start -->
        <?php if ($data_site == NULL) { ?>
            <div class="row">
                <!-- [ form-element ] start -->
                <div class="col-sm-8">
                    <div class="card">
                        <div class="card-header" style="background: linear-gradient(298deg, #150757, #150757, #150757)">
                            <h5 style="color: #fff;">Simpan Setting Site</h5>
                        </div>
                        <div class="card-header" style="background: linear-gradient(298deg, #150757, #150757, #150757)">
                            <h5 style="color: #fff;"><i class="fa fa-home"></i> Update Setting Site</h5>
                        </div>
                        <form method="POST" action="<?= base_url('site/adding') ?>" enctype="multipart/form-data">
                            <div class="card-body">
                                <div class="row">
                                    <div class="form-group col-md-4">
                                        <label class="form-label" for="Title">Title</label>
                                        <input type="text" name="title" class="form-control" id="Title" placeholder="Title" required>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label class="form-label" for="Slogan">Slogan</label>
                                        <textarea name="slogan" class="form-control" id="Slogan" placeholder="Slogan"></textarea>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label class="form-label" for="Motto">Motto</label>
                                        <textarea name="motto" class="form-control" id="Motto" placeholder="Motto"></textarea>
                                    </div>
                                    <div class="form-group col-md-12" style="background: linear-gradient(298deg, #150757, #150757, #150757);">
                                        <hr>
                                        <h5 style="color: #fff;"><i class="fa fa-building"></i> Information Company</h5>
                                        <hr>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label class="form-label" for="Company Name">Company Name</label>
                                        <input type="text" name="name" class="form-control" id="Company Name" placeholder="Company Name" required>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label class="form-label" for="Company Address">Company Address</label>
                                        <textarea name="address" class="form-control" id="Company Address" placeholder="Company Address"></textarea>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label class="form-label" for="Email">Email</label>
                                        <input type="email" name="email" class="form-control" id="Email" placeholder="Email" required>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label class="form-label" for="Telephone">Telephone</label>
                                        <input type="text" name="telp" class="form-control" id="Telephone" placeholder="Telephone" required>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label class="form-label" for="Fax">Fax</label>
                                        <input type="text" name="fax" class="form-control" id="Fax" placeholder="Fax" required>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label class="form-label" for="Vision">Vision</label>
                                        <textarea name="vision" class="form-control" id="Vision" placeholder="Vision"></textarea>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label class="form-label" for="Mission">Mission</label>
                                        <textarea name="mission" class="form-control" id="Mission" placeholder="Mission"></textarea>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label class="form-label" for="URL Maps">URL Maps</label>
                                        <textarea name="maps" class="form-control" id="URL Maps" placeholder="URL Maps"></textarea>
                                    </div>
                                    <div class="form-group col-md-12" style="background: linear-gradient(298deg, #150757, #150757, #150757);">
                                        <hr>
                                        <h5 style="color: #fff;"><i class="fa fa-link"></i> Social Media Information</h5>
                                        <span class="d-block m-t-5"><small style="color: #fff;">Make sure the URL use - </small><code>http://</code> <small style="color: #fff;">or</small> <code>https://</code><code>Ex: https://facebook.com</code> </span>
                                        <hr>
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
                                    <!-- <div class="form-group col-md-12" style="background: linear-gradient(298deg, #150757, #150757, #150757);">
                                        <hr>
                                        <h5 style="color: #fff;"><b style="font-size: 20px;font-weight:800">#</b> Informasi Footer</h5>
                                        <hr>
                                    </div> -->
                                    <div class="form-group col-md-12">
                                        <!-- <label class="form-label" for="Footer">Footer</label> -->
                                        <!-- <textarea name="footer" class="form-control" id="Footer" placeholder="Footer"></textarea> -->
                                        <input type="hidden" name="created_date" value="<?= date('Y-m-d h:m:i') ?>">
                                        <input type="hidden" name="status" value="1">
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-info mr-2"><i class="fa fa-save"></i> Simpan</button>
                                <a href="<?= base_url('site'); ?>" class="btn btn-warning"><i class="fas fa-sync"></i> Reset</a>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card">
                        <div class="card-header" style="background: linear-gradient(298deg, #150757, #150757, #150757)">
                            <h5 style="color: #fff;"><i class="fa fa-images"></i> Icon | Company Logo | Loader</h5>
                        </div>
                        <div class="card-body">
                            <!-- Icon -->
                            <form method="POST" action="<?= base_url('site/iconsave') ?>" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label class="form-label"><u>Icon</u> </label>
                                    <div class="input-group">
                                        <img src="https://media.istockphoto.com/vectors/image-preview-icon-picture-placeholder-for-website-or-uiux-design-vector-id1222357475?k=20&m=1222357475&s=170667a&w=0&h=YGycIDbBRAWkZaSvdyUFvotdGfnKhkutJhMOZtIoUKY=" style="width: 120px;height: auto;margin-bottom: 8px;" alt="" srcset="">
                                        <input type="file" name="icon" required>
                                        <hr>
                                        <button class="btn btn-primary"><i class="fa fa-save"></i> Save Icon</button>
                                    </div>
                                </div>
                            </form>
                            <!-- End Icon -->
                            <hr>
                            <!-- Company Logo -->
                            <form method="POST" action="<?= base_url('site/logosave') ?>" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label class="form-label"><u>Company Logo</u> </label>
                                    <div class="input-group">
                                        <img src="https://media.istockphoto.com/vectors/image-preview-icon-picture-placeholder-for-website-or-uiux-design-vector-id1222357475?k=20&m=1222357475&s=170667a&w=0&h=YGycIDbBRAWkZaSvdyUFvotdGfnKhkutJhMOZtIoUKY=" style="width: 120px;height: auto;margin-bottom: 8px;" alt="" srcset="">
                                        <input type="file" name="logo" required>
                                        <hr>
                                        <button class="btn btn-primary"><i class="fa fa-save"></i> Save Logo</button>
                                    </div>
                                </div>
                            </form>
                            <!-- End Company Logo -->
                            <hr>
                            <!-- Loader -->
                            <form method="POST" action="<?= base_url('site/loadersave') ?>" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label class="form-label"><u>Loader Logo</u> </label>
                                    <div class="input-group">
                                        <img src="https://media.istockphoto.com/vectors/image-preview-icon-picture-placeholder-for-website-or-uiux-design-vector-id1222357475?k=20&m=1222357475&s=170667a&w=0&h=YGycIDbBRAWkZaSvdyUFvotdGfnKhkutJhMOZtIoUKY=" style="width: 120px;height: auto;margin-bottom: 8px;" alt="" srcset="">
                                        <input type="file" name="loader" required>
                                        <hr>
                                        <div class="form-group">
                                            <div class="input-group">
                                                <input type="text" name="tloader" class="form-control" id="Text Loader" placeholder="Text Loader" required>
                                            </div>
                                            <br>
                                            <button class="btn btn-primary"><i class="fa fa-save"></i> Save Loader</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <!-- End Loader -->
                        </div>
                    </div>
                </div>
                <!-- [ form-element ] end -->
            </div>
        <?php } else { ?>
            <div class="row">
                <!-- [ form-element ] start -->
                <div class="col-sm-8">
                    <div class="card">
                        <div class="card-header" style="background: linear-gradient(298deg, #150757, #150757, #150757)">
                            <h5 style="color: #fff;"><i class="fa fa-home"></i> Update Setting Site</h5>
                        </div>
                        <form method="POST" action="<?= base_url('site/updating') ?>" enctype="multipart/form-data">
                            <div class="card-body">
                                <div class="row">
                                    <div class="form-group col-md-4">
                                        <label class="form-label" for="Title">Title</label>
                                        <input type="text" name="title" class="form-control" id="Title" value="<?= $title ?>" placeholder="Title" required>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label class="form-label" for="Slogan">Slogan</label>
                                        <textarea name="slogan" class="form-control" id="Slogan" placeholder="Slogan"><?= $slogan; ?></textarea>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label class="form-label" for="Motto">Motto</label>
                                        <textarea name="motto" class="form-control" id="Motto" placeholder="Motto"><?= $motto; ?></textarea>
                                    </div>
                                    <div class="form-group col-md-12" style="background: linear-gradient(298deg, #150757, #150757, #150757);">
                                        <hr>
                                        <h5 style="color: #fff;"><i class="fa fa-building"></i> Information Company</h5>
                                        <hr>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label class="form-label" for="Company Name">Company Name</label>
                                        <input type="text" name="name" class="form-control" id="Company Name" value="<?= $name ?>" placeholder="Company Name" required>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label class="form-label" for="Company Address">Company Address</label>
                                        <textarea name="address" class="form-control" id="Company Address" placeholder="Company Address"><?= $address; ?></textarea>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label class="form-label" for="Email">Email</label>
                                        <input type="email" name="email" class="form-control" id="Email" value="<?= $email ?>" placeholder="Email" required>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label class="form-label" for="Telephone">Telephone</label>
                                        <input type="text" name="telp" class="form-control" id="Telephone" value="<?= $telp ?>" placeholder="Telephone" required>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label class="form-label" for="Fax">Fax</label>
                                        <input type="text" name="fax" class="form-control" id="Fax" value="<?= $fax ?>" placeholder="Fax" required>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label class="form-label" for="Vision">Vision</label>
                                        <textarea name="vision" class="form-control" id="Vision" placeholder="Vision"><?= $vision; ?></textarea>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label class="form-label" for="Mission">Mission</label>
                                        <textarea name="mission" class="form-control" id="Mission" placeholder="Mission"><?= $mission; ?></textarea>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label class="form-label" for="URL Maps">URL Maps</label>
                                        <textarea name="maps" class="form-control" id="URL Maps" placeholder="URL Maps"><?= $maps; ?></textarea>
                                    </div>
                                    <div class="form-group col-md-12" style="background: linear-gradient(298deg, #150757, #150757, #150757);">
                                        <hr>
                                        <h5 style="color: #fff;"><i class="fa fa-link"></i> Social Media Information</h5>
                                        <span class="d-block m-t-5"><small style="color: #fff;">Make sure the URL use - </small><code>http://</code> <small style="color: #fff;">or</small> <code>https://</code><code>Ex: https://facebook.com</code> </span>
                                        <hr>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label class="form-label" for="Facebook">Facebook</label>
                                        <input type="text" name="facebook" class="form-control" id="Facebook" value="<?= $facebook ?>" placeholder="Facebook" required>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label class="form-label" for="Instagram">Instagram</label>
                                        <input type="text" name="instagram" class="form-control" id="Instagram" value="<?= $instagram ?>" placeholder="Instagram" required>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label class="form-label" for="YouTube">YouTube</label>
                                        <input type="text" name="youtube" class="form-control" id="YouTube" value="<?= $youtube ?>" placeholder="YouTube" required>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label class="form-label" for="Twitter">Twitter</label>
                                        <input type="text" name="twitter" class="form-control" id="Twitter" value="<?= $twitter ?>" placeholder="Twitter" required>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label class="form-label" for="LinkedID">LinkedID</label>
                                        <input type="text" name="linked" class="form-control" id="LinkedID" value="<?= $linked ?>" placeholder="LinkedID" required>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label class="form-label" for="Google+">Google+</label>
                                        <input type="text" name="google" class="form-control" id="Google+" value="<?= $google ?>" placeholder="Google+" required>
                                    </div>
                                    <!-- <div class="form-group col-md-12" style="background: linear-gradient(298deg, #150757, #150757, #150757);">
                                        <hr>
                                        <h5 style="color: #fff;"><b style="font-size: 20px;font-weight:800">#</b> Informasi Footer</h5>
                                        <hr>
                                    </div> -->
                                    <div class="form-group col-md-12">
                                        <!-- <label class="form-label" for="Footer">Footer</label> -->
                                        <!-- <textarea name="footer" class="form-control" id="Footer" placeholder="Footer"><?= $footer; ?></textarea> -->
                                        <input type="hidden" name="created_date" value="<?= date('Y-m-d h:m:i') ?>">
                                        <input type="hidden" name="id_site" value="<?= $id_site ?>">
                                        <input type="hidden" name="status" value="1">
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary mr-2"><i class="fa fa-save"></i> Update</button>
                                <a href="<?= base_url('site'); ?>" class="btn btn-warning"><i class="fas fa-sync"></i> Reset</a>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card">
                        <div class="card-header" style="background: linear-gradient(298deg, #150757, #150757, #150757)">
                            <h5 style="color: #fff;"><i class="fa fa-images"></i> Icon | Company Logo | Loader</h5>
                        </div>
                        <div class="card-body">
                            <!-- Icon -->
                            <form method="POST" action="<?= base_url('site/iconupdate') ?>" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label class="form-label"><u>Icon</u> </label>
                                    <div class="input-group">
                                        <?php if ($icon == NULL) { ?>
                                            <img src="https://media.istockphoto.com/vectors/image-preview-icon-picture-placeholder-for-website-or-uiux-design-vector-id1222357475?k=20&m=1222357475&s=170667a&w=0&h=YGycIDbBRAWkZaSvdyUFvotdGfnKhkutJhMOZtIoUKY=" style="width: 120px;height: auto;margin-bottom: 8px;" alt="" srcset="">
                                        <?php } else { ?>
                                            <img src="<?= base_url('modes/images/asamu/icon/' . $icon); ?>" alt="" srcset="">
                                        <?php } ?>
                                        <input type="file" name="icon" required>
                                        <input type="hidden" name="id_site" value="<?= $id_site ?>">
                                        <hr>
                                        <button class="btn btn-primary"><i class="fa fa-save"></i> Update Icon</button>
                                    </div>
                                </div>
                            </form>
                            <!-- End Icon -->
                            <hr>
                            <!-- Company Logo -->
                            <form method="POST" action="<?= base_url('site/logoupdate') ?>" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label class="form-label"><u>Company Logo</u> </label>
                                    <div class="input-group">
                                        <?php if ($logo == NULL) { ?>
                                            <img src="https://media.istockphoto.com/vectors/image-preview-icon-picture-placeholder-for-website-or-uiux-design-vector-id1222357475?k=20&m=1222357475&s=170667a&w=0&h=YGycIDbBRAWkZaSvdyUFvotdGfnKhkutJhMOZtIoUKY=" style="width: 120px;height: auto;margin-bottom: 8px;" alt="" srcset="">
                                        <?php } else { ?>
                                            <img src="<?= base_url('modes/images/asamu/logo/' . $logo); ?>" alt="" srcset="">
                                        <?php } ?>
                                        <input type="file" name="logo" required>
                                        <input type="hidden" name="id_site" value="<?= $id_site ?>">
                                        <hr>
                                        <button class="btn btn-primary"><i class="fa fa-save"></i> Update Logo</button>
                                    </div>
                                </div>
                            </form>
                            <!-- End Company Logo -->
                            <hr>
                            <!-- Loader -->
                            <form method="POST" action="<?= base_url('site/loaderupdate') ?>" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label class="form-label"><u>Loader Logo</u> </label>
                                    <div class="input-group">
                                        <?php if ($loader == NULL) { ?>
                                            <img src="https://media.istockphoto.com/vectors/image-preview-icon-picture-placeholder-for-website-or-uiux-design-vector-id1222357475?k=20&m=1222357475&s=170667a&w=0&h=YGycIDbBRAWkZaSvdyUFvotdGfnKhkutJhMOZtIoUKY=" style="width: 120px;height: auto;margin-bottom: 8px;" alt="" srcset="">
                                        <?php } else { ?>
                                            <img src="<?= base_url('modes/images/asamu/loader/' . $loader); ?>" alt="" srcset="">
                                        <?php } ?>
                                        <input type="file" name="loader" required>
                                        <input type="hidden" name="id_site" value="<?= $id_site ?>">
                                        <hr>
                                        <div class="form-group">
                                            <div class="input-group">
                                                <input type="text" name="tloader" class="form-control" id="Text Loader" value="<?= $tloader ?>" placeholder="Text Loader" required>
                                            </div>
                                            <br>
                                            <button class="btn btn-primary"><i class="fa fa-save"></i> Update Loader</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <!-- End Loader -->
                        </div>
                    </div>
                </div>
                <!-- [ form-element ] end -->
            </div>
        <?php } ?>
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