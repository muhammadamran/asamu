<div class="main-container">
	<div class="pd-ltr-20 xs-pd-20-10">
		<div class="min-height-200px">
			<div class="page-header">
				<div class="row">
					<div class="col-md-12 col-sm-12">
						<div class="title">
							<h4><i class="micon dw dw-lighthouse" style="font-weight: 800;"></i> Log</h4>
						</div>
						<nav aria-label="breadcrumb" role="navigation">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="<?= base_url()?>home">Home</a></li>
								<li class="breadcrumb-item active" aria-current="page">Log</li>
							</ol>
						</nav>
					</div>
				</div>
			</div>
			<div class="row clearfix">
				<div class="col-lg-12 col-md-12 col-sm-12 mb-30">
					<form action="<?= base_url('dosen/mreguler/approve');?>" method="POST" id="Approve">
						<div class="pd-20 card-box">
							<h5 class="h4 text-blue mb-20">Log Aktifitas</h5>
							<hr>
							<div class="table-responsive">
								<table id="TableLog" class="table">
									<thead>
										<tr style="background-color:#eee;" align="center">
											<th>#</th>
											<th>ID</th>
											<th>Username</th>
											<th>Transaksi</th>
											<th>Modul</th>
											<th>Tanggal Transaksi</th>
										</tr>
									</thead>
									<tbody>
										<?php if ($dataLog): $no = 1; foreach ($dataLog as $row): ?>
											<tr>
												<td>
													<?= $no;?>.
												</td>
												<td>
													<?= $row['id'];?>
												</td>
												<td>
													<?= $row['user_name'];?>
												</td>
												<td>
													<?= $row['transaksi'];?>
												</td>
												<td>
													<?= $row['modul'];?>
												</td>
												<td>
													<?= $row['created_date'];?>
												</td>
											</tr>
											<?php 
											$no++; 
										endforeach 
										?>
										<?php else: ?>
											<tr>
												<td colspan="6">
													<center>
														<img src="<?= base_url('assets/vendors/images/svg/empty-animate.svg') ?>" style="width: 350px; height: 100%">
													</center>
												</td>
											</tr>
										<?php endif ?>
									</tbody>
								</table>
							</div>
						</div>
					</form>
				</div>
			</div>
			<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
			<script type="text/javascript" language="javascript">
				$(document).ready(function() {
					$('#TableLog').DataTable({
						responsive: true,
						retrieve: true,
						searching: true,
						paging: true,
                        dom: 'Bfrtip',
						buttons: [
						'copy', 'excel', 'print'
						],
						order: [
						[5, 10, 25, 50, 100, 200, -1],
						[5, 10, 25, 50, 100, 200, "All"]
						],
						aLengthMenu: [
						[5, 10, 25, 50, 100, 200, -1],
						[5, 10, 25, 50, 100, 200, "All"]
						],
					});
				});
			</script>
		</div>