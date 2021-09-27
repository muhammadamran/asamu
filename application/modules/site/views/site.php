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
                                        <h5 style="color: #fff;"><i class="fa fa-building"></i> Informasi Perusahaan</h5>
                                        <hr>
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
                                        <h5 style="color: #fff;"><i class="fa fa-link"></i> Informasi Sosial Media</h5>
                                        <hr>
                                        <span class="d-block m-t-5"><small style="color: #fff;">Last update - </small><code><?= tanggal_indo(date('d-m-Y'), true) ?></code> </span>
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
                            <h5 style="color: #fff;"><i class="fa fa-images"></i> Foto</h5>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label class="form-label"><u>Icon</u> </label>
                                <div class="input-group">
                                    <img src="<?= base_url('assets/images/sericon1.png'); ?>" alt="" srcset="">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="form-label"><u>Logo Perusahaan</u> </label>
                                <div class="input-group">
                                    <img src="<?= base_url('assets/images/logo-dark-svg.png'); ?>" alt="" srcset="">
                                </div>
                            </div>
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
                                        <h5 style="color: #fff;"><i class="fa fa-building"></i> Informasi Perusahaan</h5>
                                        <hr>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label class="form-label" for="Nama Perusahaan">Nama Perusahaan</label>
                                        <input type="text" name="name" class="form-control" id="Nama Perusahaan" value="<?= $name ?>" placeholder="Nama Perusahaan" required>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label class="form-label" for="Alamat Perusahaan">Alamat Perusahaan</label>
                                        <textarea name="address" class="form-control" id="Alamat Perusahaan" placeholder="Alamat Perusahaan"><?= $address; ?></textarea>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label class="form-label" for="Email">Email</label>
                                        <input type="email" name="email" class="form-control" id="Email" value="<?= $email ?>" placeholder="Email" required>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label class="form-label" for="Telepon">Telepon</label>
                                        <input type="text" name="telp" class="form-control" id="Telepon" value="<?= $telp ?>" placeholder="Telepon" required>
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
                                        <h5 style="color: #fff;"><i class="fa fa-link"></i> Informasi Sosial Media</h5>
                                        <span class="d-block m-t-5"><small style="color: #fff;">Pastikan URL menggunakan - </small><code>http:// atau https://</code><br><code>Ex: https://facebook.com</code> </span>
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
                                <button type="submit" class="btn btn-info mr-2"><i class="fa fa-save"></i> Update</button>
                                <a href="<?= base_url('site'); ?>" class="btn btn-warning"><i class="fas fa-sync"></i> Reset</a>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card">
                        <div class="card-header" style="background: linear-gradient(298deg, #150757, #150757, #150757)">
                            <h5 style="color: #fff;"><i class="fa fa-images"></i> Foto</h5>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label class="form-label"><u>Icon</u> </label>
                                <div class="input-group">
                                    <img src="<?= base_url('assets/images/sericon1.png'); ?>" alt="" srcset="">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="form-label"><u>Logo Perusahaan</u> </label>
                                <div class="input-group">
                                    <img src="<?= base_url('assets/images/logo-dark-svg.png'); ?>" alt="" srcset="">
                                </div>
                            </div>
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