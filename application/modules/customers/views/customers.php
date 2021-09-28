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
                            <h5 class="m-b-10">Page Customers</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#!">Register Customers</a></li>
                            <li class="breadcrumb-item">Customers</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ breadcrumb ] end -->
        <!-- [ Main Content ] start -->
        <div class="row">
            <!-- [ table ] start -->
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="background: linear-gradient(298deg, #150757, #150757, #150757);">
                        <h4 style="color: #fff;">[Tables] Data Customers </h4>
                        <span class="d-block m-t-5"><small style="color: #fff;">Last update - </small><code><?= tanggal_indo(date('d-m-Y'), true) ?></code> </span>
                    </div>
                    <div class="card-body table-border-style">
                        <div class="table-responsive">
                            <table id="example" class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Full Name</th>
                                        <th>Company Name</th>
                                        <th>Phone Number</th>
                                        <th>Country</th>
                                        <th>Industry Type</th>
                                        <th>Sales Person</th>
                                        <th>Created Date</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php if ($data_customers) : $no = 0;
                                        foreach ($data_customers as $row) : $no++; ?>
                                            <tr>
                                                <td><?= $no ?></td>
                                                <td><?= $row['full_name']; ?></td>
                                                <td><?= $row['company_name']; ?></td>
                                                <td><?= $row['code_phone']; ?><?= $row['phone']; ?></td>
                                                <td><?= $row['country']; ?></td>
                                                <td><?= $row['industry_type']; ?></td>
                                                <td><?= $row['sales_person']; ?></td>
                                                <td><?= $row['created_date']; ?></td>
                                            </tr>
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
<script type="text/javascript">
    function DeleteData(id_site) {
        var r = confirm("Are you sure you want to delete this?");
        if (r == true) {
            location.href = "notes/delete/" + id_site;
        }
    }
</script>