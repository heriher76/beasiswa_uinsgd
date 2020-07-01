<?php $this->load->view('project_bidikmisi/header/admin/header'); ?>
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			<i aria-hidden="true"></i> Setting Kuota
		</h1>
	</section>

	<section class="content">
		<div class="row">
			<div class="col-md-12">
				<div class="box">
					<div class="box-header">
						<h3 class="box-title">Data Kuota Pendaftar</h3>
					</div>

					<div class="box-body">
						<button class="btn btn-success" data-toggle="modal" data-target="#view-edit-all" type="submit">
							<span class="glyphicon glyphicon-edit"></span>
							Edit Semua Kuota
						</button>
						<br/>
						<br/>
						<table id="data_kuota" class="display table table-responsive table-bordered table-striped" style="width:100%;">
							<thead>
								<tr>
									<th>No</th>
									<th>Fakultas</th>
									<th>Kuota</th>
									<th>Aksi</th>
								</tr>
							</thead>
							<tbody>
								<?php
								$no = 1;
								foreach($kuota as $value) {
									?>
									<tr>
										<td><?php echo $no++; ?></td>
										<td><?php echo $value->fakultas; ?></td>
										<td><?php echo $value->kuota; ?></td>
										<td>
											<a class="btn btn-success col-md-6" data-toggle="modal" data-target="#<?php echo $value->id_fakultas; ?>" type="submit">
												<span class="glyphicon glyphicon-edit"></span>
												Edit
											</a>
										</td>
										<?php } ?>
									</tr>
								</tbody>
								<tfoot>
									<tr>
										<th>No</th>
										<th>Fakultas</th>
										<th>Kuota</th>
										<th>Aksi</th>
									</tr>
								</tfoot>
							</table>
						</div>
					</div>
				</div>
			</div>

			<!--Modal Edit Data Kuota USHULUDDIN-->
			<form action="<?=base_url('Auth1/edit_kuota_ushuluddin'); ?>" method="POST">
				<div id="10" class="modal fade" role="dialog">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal">&times;</button>
								<h4 class="modal-title">Edit Data Kuota Fakultas USHLUDDIN</h4>
							</div>

							<div class="modal-body">
								<input type="hidden" value="10" name="id_fakultas">
								<div class="form-group">
									<label>Fakultas USHULUDDIN</label>
									<input class="form-control" type="number" required="required" name="ushuluddin" placeholder="USHULUDDIN">
								</div>
							</div>

							<div class="modal-footer">
								<button type="submit" class="btn btn-primary">Simpan</button>
								<button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
							</div>
						</div>
					</div>
				</div>
			</form>
			<!--End Modal Edit Data Kuota USHULUDDIN-->

			<!--Modal Edit Data Kuota TARBIYAH-->
			<form action="<?=base_url('Auth1/edit_kuota_tarbiyah'); ?>" method="POST">
				<div id="20" class="modal fade" role="dialog">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal">&times;</button>
								<h4 class="modal-title">Edit Data Kuota Fakultas TARBIYAH DAN KEGURUAN</h4>
							</div>

							<div class="modal-body">
								<input type="hidden" value="20" name="id_fakultas">
								<div class="form-group">
									<label>Fakultas TARBIYAH DAN KEGURUAN</label>
									<input class="form-control" type="number" required="required" name="tarbiyah" placeholder="TARBIYAH DAN KEGURUAN">
								</div>
							</div>

							<div class="modal-footer">
								<button type="submit" class="btn btn-primary">Simpan</button>
								<button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
							</div>
						</div>
					</div>
				</div>
			</form>
			<!--End Modal Edit Data Kuota TARBIYAH-->

			<!--Modal Edit Data Kuota SYARKUM-->
			<form action="<?=base_url('Auth1/edit_kuota_syarkum'); ?>" method="POST">
				<div id="30" class="modal fade" role="dialog">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal">&times;</button>
								<h4 class="modal-title">Edit Data Kuota Fakultas</h4>
							</div>

							<div class="modal-body">
								<input type="hidden" value="30" name="id_fakultas">
								<div class="form-group">
									<label>Fakultas SYARIAH DAN HUKUM</label>
									<input class="form-control" type="number" required="required" name="syarkum" placeholder="SYARIAH DAN HUKUM">
								</div>
							</div>

							<div class="modal-footer">
								<button type="submit" class="btn btn-primary">Simpan</button>
								<button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
							</div>
						</div>
					</div>
				</div>
			</form>
			<!--End Modal Edit Data Kuota SYARKUM-->

			<!--Modal Edit Data Kuota DAKWAH DAN KOMUNIKASI-->
			<form action="<?=base_url('Auth1/edit_kuota_dakom'); ?>" method="POST">
				<div id="40" class="modal fade" role="dialog">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal">&times;</button>
								<h4 class="modal-title">Edit Data Kuota Fakultas DAKWAH DAN KOMUNIKASI</h4>
							</div>

							<div class="modal-body">
								<input type="hidden" value="40" name="id_fakultas">
								<div class="form-group">
									<label>Fakultas DAKWAH DAN KOMUNIKASI</label>
									<input class="form-control" type="number" required="required" name="dakom" placeholder="DAKWAH DAN KOMUNIKASI">
								</div>
							</div>

							<div class="modal-footer">
								<button type="submit" class="btn btn-primary">Simpan</button>
								<button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
							</div>
						</div>
					</div>
				</div>
			</form>
			<!--End Modal Edit Data Kuota DAKWAH DAN KOMUNIKASI-->

			<!--Modal Edit Data Kuota ADAB DAN HUMANIORA-->
			<form action="<?=base_url('Auth1/edit_kuota_adhum'); ?>" method="POST">
				<div id="50" class="modal fade" role="dialog">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal">&times;</button>
								<h4 class="modal-title">Edit Data Kuota Fakultas ADAB DAN HUMANIORA</h4>
							</div>

							<div class="modal-body">
								<input type="hidden" value="50" name="id_fakultas">
								<div class="form-group">
									<label>Fakultas ADAB DAN HUMANIORA</label>
									<input class="form-control" type="number" required="required" name="adhum" placeholder="ADAB DAN HUMANIORA">
								</div>
							</div>

							<div class="modal-footer">
								<button type="submit" class="btn btn-primary">Simpan</button>
								<button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
							</div>
						</div>
					</div>
				</div>
			</form>
			<!--End Modal Edit Data Kuota ADAB DAN HUMANIORA-->

			<!--Modal Edit Data Kuota PSIKOLOGI-->
			<form action="<?=base_url('Auth1/edit_kuota_psikologi'); ?>" method="POST">
				<div id="60" class="modal fade" role="dialog">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal">&times;</button>
								<h4 class="modal-title">Edit Data Kuota Fakultas PSIKOLOGI</h4>
							</div>

							<div class="modal-body">
								<input type="hidden" value="60" name="id_fakultas">
								<div class="form-group">
									<label>Fakultas PSIKOLOGI</label>
									<input class="form-control" type="number" required="required" name="psikologi" placeholder="PSIKOLOGI">
								</div>
							</div>

							<div class="modal-footer">
								<button type="submit" class="btn btn-primary">Simpan</button>
								<button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
							</div>
						</div>
					</div>
				</div>
			</form>
			<!--End Modal Edit Data Kuota PSIKOLOGI-->

			<!--Modal Edit Data Kuota SAINS DAN TEKNOLOGI-->
			<form action="<?=base_url('Auth1/edit_kuota_sainstek'); ?>" method="POST">
				<div id="70" class="modal fade" role="dialog">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal">&times;</button>
								<h4 class="modal-title">Edit Data Kuota Fakultas SAINS DAN TEKNOLOGI</h4>
							</div>

							<div class="modal-body">
								<input type="hidden" value="70" name="id_fakultas">
								<div class="form-group">
									<label>Fakultas SAINS DAN TEKNOLOGI</label>
									<input class="form-control" type="number" required="required" name="sainstek" placeholder="SAINS DAN TEKNOLOGI">
								</div>
							</div>

							<div class="modal-footer">
								<button type="submit" class="btn btn-primary">Simpan</button>
								<button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
							</div>
						</div>
					</div>
				</div>
			</form>
			<!--End Modal Edit Data Kuota SAINS DAN TEKNOLOGI-->

			<!--Modal Edit Data Kuota ILMU SOSIAL DAN ILMU POLITIK-->
			<form action="<?=base_url('Auth1/edit_kuota_fisip'); ?>" method="POST">
				<div id="80" class="modal fade" role="dialog">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal">&times;</button>
								<h4 class="modal-title">Edit Data Kuota Fakultas ILMU SOSIAL DAN ILMU POLITIK</h4>
							</div>

							<div class="modal-body">
								<input type="hidden" value="80" name="id_fakultas">
								<div class="form-group">
									<label>Fakultas ILMU SOSIAL DAN ILMU POLITIK</label>
									<input class="form-control" type="number" required="required" name="fisip" placeholder="ILMU SOSIAL DAN ILMU POLITIK">
								</div>
							</div>

							<div class="modal-footer">
								<button type="submit" class="btn btn-primary">Simpan</button>
								<button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
							</div>
						</div>
					</div>
				</div>
			</form>
			<!--End Modal Edit Data Kuota ILMU SOSIAL DAN ILMU POLITIK-->

			<!--Modal Edit Data Kuota Ekonomi dan Bisnis Islam-->
			<form action="<?=base_url('Auth1/edit_kuota_ekonomi'); ?>" method="POST">
				<div id="9" class="modal fade" role="dialog">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal">&times;</button>
								<h4 class="modal-title">Edit Data Kuota Fakultas Ekonomi dan Bisnis Islam</h4>
							</div>

							<div class="modal-body">
								<input type="hidden" value="9" name="id_fakultas">
								<div class="form-group">
									<label>Fakultas Ekonomi dan Bisnis Islam</label>
									<input class="form-control" type="number" required="required" name="ekonomi" placeholder="Ekonomi dan Bisnis Islam">
								</div>
							</div>

							<div class="modal-footer">
								<button type="submit" class="btn btn-primary">Simpan</button>
								<button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
							</div>
						</div>
					</div>
				</div>
			</form>
			<!--End Modal Edit Data Kuota Ekonomi dan Bisnis Islam-->

			<!--Modal Edit Data Kuota Semua Fakultas-->
			<form action="<?=base_url('Auth1/edit_kuota_all'); ?>" method="POST">
				<div id="view-edit-all" class="modal fade" role="dialog">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal">&times;</button>
								<h4 class="modal-title">Edit Data Kuota Fakultas</h4>
							</div>

							<div class="modal-body">
								<div class="form-group">
									<label>Kuota untuk Semua Fakultas</label>
									<input class="form-control" type="number" required="required" name="all" placeholder="Kuota Semua Fakultas">
								</div>
							</div>

							<div class="modal-footer">
								<button type="submit" class="btn btn-primary">Simpan</button>
								<button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
							</div>
						</div>
					</div>
				</div>
			</form>
			<!--End Modal Edit Data Kuota Semua Fakultas-->

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
