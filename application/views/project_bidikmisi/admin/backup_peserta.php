<?php $this->load->view('project_bidikmisi/header/admin/header'); ?>
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			<i class="fa fa-tachometer" aria-hidden="true"></i> Konfigurasi Data Peserta
		</h1>
	</section>

	<section class="content" style="height: 520px;">
		<div class="row">
			<div class="col-md-6">
				<div class="box">
					<div class="box-header">
						<h3 class="box-title">Mengambil Data Peserta Dari Data PMB</h3>
					</div>

					<div class="box-body">
						<center>
							<button data-target="#confirm-pmb" data-toggle="modal" type="submit" class="btn btn-primary">
							    <i class="fa fa-download"></i>
							    Ambil Data
							</button>
						</center>
					</div>

				</div>
			</div>
			<div class="col-md-6">
				<div class="box">
					<div class="box-header">
						<h3 class="box-title">Backup Data Peserta</h3>
					</div>

					<div class="box-body">
						<center>
							<button class="btn btn-danger" data-target="#confirm" data-toggle="modal" type="submit" class="btn btn-danger"><i class="fa fa-database"></i>  Backup Data</button>
						</center>
					</div>

				</div>
			</div>
		</div>
	</section>
</div>
<!--end wrapper-->

<!--Modal Confirm Data PMB-->
<div class="modal fade" id="confirm-pmb" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title">Anda yakin ingin mengambil data PMB ?</h4>
			</div>

			<div class="modal-body">
			</div>

			<form role="form" action="<?=base_url('Auth1/getAPI'); ?>">
				<div class="modal-footer">
					<button type="submit" class="btn btn-primary">Ya</button>
					<button type="button" class="btn btn-default" data-dismiss="modal">Tidak</button>
				</div>
			</form>
		</div>
	</div>
</div>
<!--End Modal Confirm PMB-->

<!--Modal Confirm Hapus-->
<div class="modal fade" id="confirm" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title">Anda yakin ingin Backup Data ?</h4>
			</div>

			<form role="form" method="POST" action="<?=base_url('Auth1/backup'); ?>">
				<div class="modal-footer">
					<button type="submit" class="btn btn-danger">Ya</button>
					<button type="button" class="btn btn-default" data-dismiss="modal">Tidak</button>
				</div>
			</form>
		</div>
	</div>
</div>
<!--End Modal Confirm Hapus-->

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
