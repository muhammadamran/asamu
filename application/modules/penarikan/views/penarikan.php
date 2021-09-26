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
                            <h5 class="m-b-10">Page Penarikan Saldo</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#!">Transaksi</a></li>
                            <li class="breadcrumb-item">Penarikan Saldo</li>
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
                <p style="color: #000;">Data Penarikan Saldo sudah <b>aktif</b> di sistem, pastikan status tidak ada yang <b>aktif</b>!</p>
                </div>
            </div>
        <?php endif; ?>
        <!-- [ Main Content ] start -->
        <div class="row">
            <!-- [ table ] start -->
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="background: linear-gradient(45deg, #1f3d40, #1f3d40);">
                        <h4 style="color: #fff;">[Tables] Data Penarikan Saldo </h4>
                        <span class="d-block m-t-5"><small style="color: #fff;">Last update - </small><code><?= tanggal_indo(date('d-m-Y'),true) ?></code> </span>
                    </div>
                    <div class="card-body table-border-style">
                        <hr>
                        <div class="table-responsive">
                            <table id="example" class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Diajukan oleh</th>
                                        <th>Nominal</th>
                                        <th>Tanggal</th>
                                        <th>Diambil oleh</th>
                                        <th>Diambil tanggal</th>
                                        <th>Status</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php if ($withdraw): $no = 0; foreach ($withdraw as $row): $no++;?>
                                        <tr>
                                            <td><?= $no ?></td>
                                            <?php if ($row['pelapor'] == NULL) { ?>
                                                <td><i style="color: red;">NULL</i></td>
                                            <?php } else { ?>
                                                <td><?= $row['pelapor']; ?></td>
                                            <?php } ?>
                                            <?php if ($row['nominal'] == NULL) { ?>
                                                <td><i style="color: red;">NULL</i></td>
                                            <?php } else { ?>
                                                <td>Rp <?= number_format($row['nominal'],2,',','.'); ?></td>
                                            <?php } ?>
                                            <?php if ($row['tanggal'] == NULL) { ?>
                                                <td><i style="color: red;">NULL</i></td>
                                            <?php } else { ?>
                                                <td><?= tanggal_indo($row['tanggal']); ?></td>
                                            <?php } ?>
                                            <?php if ($row['pengambil'] == NULL) { ?>
                                                <td><i style="color: red;">NULL</i></td>
                                            <?php } else { ?>
                                                <td><?= $row['pengambil']; ?></td>
                                            <?php } ?>
                                            <?php if ($row['tanggal_ambil'] == NULL) { ?>
                                                <td><i style="color: red;">NULL</i></td>
                                            <?php } else { ?>
                                                <td><?= date('d F Y H:i:s', strtotime($row['tanggal_ambil'])); ?></td>
                                            <?php } ?>
                                            <td style="<?= $row['status'] == '3' ? 'color:green;' : ($row['status'] == '4' ? 'color:red' : '') ?>"><?= $row['status'] == '1' ? 'Pengajuan' : ($row['status'] == '2' ? 'Menunggu Pencairan' : ($row['status'] == '4' ? 'Ditolak' : 'Dicairkan')) ?></td>
                                            <td>
                                                <?php if ($row['status'] == '1') { ?>
                                                    <form method="POST" action="<?= base_url('penarikan/proses')?>" enctype="multipart/form-data" style="margin-bottom:5px;">
                                                        <input type="hidden" name="id_withdraw" value="<?= $row["id_withdraw"]; ?>">
                                                        <input type="hidden" name="status" value="2">
                                                        <button type="submit" class="btn btn-sm btn-primary">Lanjut Proses</button>
                                                    </form>
                                                    <form method="POST" action="<?= base_url('penarikan/proses')?>" enctype="multipart/form-data">
                                                        <input type="hidden" name="id_withdraw" value="<?= $row["id_withdraw"]; ?>">
                                                        <input type="hidden" name="status" value="4">
                                                        <button type="submit" class="btn btn-sm btn-danger">Tolak</button>
                                                    </form>
                                                <?php } else if ($row['status'] == '2') { ?>
                                                    <form method="POST" action="<?= base_url('penarikan/proses')?>" enctype="multipart/form-data">
                                                        <input type="hidden" name="id_withdraw" value="<?= $row["id_withdraw"]; ?>">
                                                        <input type="hidden" name="status" value="3">
                                                        <input type="hidden" name="pelapor" value="<?= $row['pelapor'] ?>">
                                                        <input type="hidden" name="nominal" value="<?= $row['nominal'] ?>">
                                                        <input type="text" name="pengambil" placeholder="Nama pengambil" class="form-control" style="margin-bottom:5px;">
                                                        <button class="btn btn-sm btn-primary" type="submit">Cairkan</button>
                                                    </form>
                                                <?php } else { echo '-'; }?>
                                            </td>
                                        </tr>
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