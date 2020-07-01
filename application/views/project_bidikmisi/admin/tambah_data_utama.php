<?php
$this->load->view('project_bidikmisi/header/admin/header');
?>
<!DOCTYPE html>
<html>
<body>
	<div class="content-wrapper">
		<!-- Content Header (Page header) -->
		<section class="content-header">
			<h1>
				<i class="fa fa-tachometer" aria-hidden="true"></i> Data User
			</h1>
		</section>

		<section class="content">
			<div class="row">
				<div class="col-md-12">
					<div class="box">
						<div class="box-header">
							<h3 class="box-title"></h3>
							<div class="col-md-2" style="padding: 0;">
								<button class="form-control btn btn-primary" data-toggle="modal" data-target="#view-tambah-data-utama"><i class="glyphicon glyphicon-plus-sign"></i> Tambah Admin</button>
							</div>
						</div>

						<div class="box-body">
							<form action="<?=base_url('Auth1/insert_utama'); ?>" method="POST">
								<div id="view-tambah-data-utama" class="modal fade" role="dialog">
									<div class="modal-dialog">
										<div class="modal-content">
											<div class="modal-header">
												<button type="button" class="close" data-dismiss="modal">&times;</button>
												<h4 class="modal-title">Tambah Data Admin/Executive</h4>
											</div>

											<div class="modal-body">
												<div class="form-group">
													<label>Nama Lengkap</label>
													<input type="text" required="required" class="form-control" name="nama_lengkap" placeholder="Nama Lengkap">
												</div>

												<div class="form-group">
													<label>Username</label>
													<input type="text" name="username" required="required" class="form-control" placeholder="Username">
												</div>

												<div class="form-group">
													<label>Password</label>
													<input type="password" name="password" class="form-control" required="required" placeholder="password">
												</div>

												<div class="form-group">
													<label>Konfirmasi Password</label>
													<input type="password" name="confirm_password" class="form-control" required="required" placeholder="password">
												</div>

												<div class="form-group">
													<label>Level</label>
													<select class="form-control" name="level" required="required">
														<option value="">-Pilih SalahSatu-</option>
														<option value="0">EXECUTIVE</option>
														<option value="1">ADMINISTRATOR</option>
													</select>
												</div>
											</div>

											<div class="modal-footer">
												<button type="submit" class="btn btn-primary">Tambah</button>
												<button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
											</div>
										</div>
									</div>
								</div>
							</form>

							<table id="tabel_utama" class="display table table-responsive table-bordered table-striped" style="width:100%;">
								<thead style="font-size: 15px;">
									<tr>
										<th>No</th>
										<th>Nama Lengkap</th>
										<th>Level</th>
										<th>Action</th>
									</tr>
								</thead>

                                <tbody style="font-size: 14px;">
									<?php
										$no = 1;
										foreach($data as $value) {
									?>
									<tr>
										<td><?php echo $no++; ?></td>
										<td><?php echo $value->nama_lengkap; ?></td>
										<td><?php
										if($value->level == 1) {
											echo "ADMIN";
										}else if($value->level == 0){
											echo "EXECUTIVE";
										}
										?></td>
										<td>
											<a class="btn btn-primary" href="<?=base_url().'Auth1/edit/'.sha1(md5(sha1(md5(sha1($value->id))))); ?>">
												<span class="glyphicon glyphicon-edit"></span>
													Edit
												</a>
												<a href="<?=base_url().'Auth1/delete/'.sha1(md5(sha1(md5(sha1($value->id))))); ?>" class="btn btn-danger" onclick="javascript: return confirm('Anda yakin hapus data ?')">
												<span class="glyphicon glyphicon-erase"></span>
												Hapus
												</a>
										</td>
									</tr>
									<?php } ?>
								</tbody>
								<tfoot style="font-size: 15px;">
									<tr>
										<th>No</th>
										<th>Nama Lengkap</th>
										<th>Level</th>
										<th>Action</th>
									</tr>
								</tfoot>
							</table>
						</div>

					</div>
				</div>
			</div>
		</section>
	</div>
	<!--end wrapper-->
	<div class="col-md-12 panel-footer" style="background-color: #00a65a !important; width: 100%; left: 0px;">
		<div class="footer text-center" style="color:grey; font-size: 12px;">
			<?php $this->load->view('project_bidikmisi/footer/footer'); ?>
		</div>
	</div>

	<style type="text/css">
		.main-footer {
			background-color: #00a65a !important; left: 0px;
			padding: 0 !important;
		}
	</style>

</body>
</html>
