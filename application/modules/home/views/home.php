<!-- [ Main Content ] start -->
<div class="pc-container">
    <div class="pcoded-content">
        <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <div class="page-header-title">
                            <h5 class="m-b-10">Dashboard <?= $this->session->userdata('role');?></h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?= base_url('home')?>">Home</a></li>
                            <li class="breadcrumb-item">Dashboard <?= $this->session->userdata('role');?></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ breadcrumb ] end -->
        <!-- [ Main Content ] start -->
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h2 style="margin:0;">
                            Cash Bank Sampah 
                            <button type="button" class="btn btn-secondary pull-right"  data-toggle="modal" data-target="#exampleModalCenter">TAMBAH DEPOSIT</button>
                        </h2>
                        <div id="exampleModalCenter" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" style="background: linear-gradient(45deg, #79ccb880, #79ccb880);">
                            <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content">
                                    <div class="modal-header" style="background: linear-gradient(45deg, #1f3d40, #1f3d40);">
                                        <h2 class="modal-title" id="exampleModalCenterTitle" style="color:#fff">Tambah Deposit</h2>
                                        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <form method="POST" action="<?= base_url('home/deposit')?>" enctype="multipart/form-data">
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="form-group col-md-12">
                                                    <label class="form-label" for="Nominal">Nominal</label>
                                                    <input type="number" name="nominal" class="form-control" value="0">
                                                </div>
                                                <div class="form-group col-md-12">
                                                    <label class="form-label" for="Asal Dana">Asal Dana</label>
                                                    <input type="text" name="asal_dana" class="form-control">
                                                </div>
                                                <div class="form-group col-md-12">
                                                    <label class="form-label" for="Tanggal">Tanggal</label>
                                                    <input type="date" name="tanggal" class="form-control">
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
                    </div>
                    <div class="card-body">
                        <h3>Rp <?= number_format(($deposit->total - $pembayaran->total),2,',','.') ?></h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h2 style="margin:0;">Cashflow</h2>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example-home" class="table">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Tipe</th>
                                        <th>Nominal</th>
                                        <th>Asal Dana</th>
                                        <th>Deskripsi</th>
                                        <th>Tanggal</th>
                                    </tr>   
                                </thead>
                                <tbody>
                                    <?php for ($i=0; $i < count($cashflow); $i++) { ?>
                                        <tr>
                                            <td><?= $cashflow[$i]->id_cashflow ?></td>
                                            <td><?= $cashflow[$i]->tipe_cashflow ?></td>
                                            <td>Rp <?= number_format($cashflow[$i]->nominal_cashflow,2,',','.') ?></td>
                                            <td><?= $cashflow[$i]->asal_dana_cashflow ?></td>
                                            <td><?= $cashflow[$i]->deskripsi_cashflow ?></td>
                                            <td><?= $cashflow[$i]->tanggal_cashflow ? tanggal_indo($cashflow[$i]->tanggal_cashflow) : '-' ?></td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                        <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
                        <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
                        <script src="https://cdn.datatables.net/buttons/1.7.1/js/dataTables.buttons.min.js"></script>
                        <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
                        <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
                        <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
                        <script src="https://cdn.datatables.net/buttons/1.7.1/js/buttons.html5.min.js"></script>
                        <script src="https://cdn.datatables.net/buttons/1.7.1/js/buttons.print.min.js"></script>
                        <script src="https://cdn.datatables.net/select/1.3.3/js/dataTables.select.min.js"></script>
                        <script type="text/javascript" language="javascript" >
                            $(document).ready(function() {
                                $('#example-home').DataTable( {
                                    dom: 'Bfrtip',
                                    buttons: [
                                        'csv',
                                        'excel',
                                        'pdf',
                                        {
                                            extend: 'print',
                                            text: 'Print',
                                            exportOptions: {
                                                modifier: {
                                                    selected: null
                                                }
                                            }
                                        }
                                    ],
                                    select: true
                                } );
                            } );
                        </script>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ Main Content ] end -->
    </div>
</div>
<!-- [ Main Content ] end -->
