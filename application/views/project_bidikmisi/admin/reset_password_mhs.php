<?php
$this->load->view('project_bidikmisi/header/admin/header');
?>
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			<i class="fa fa-tachometer" aria-hidden="true"></i> Reset Password Mahasiswa
		</h1>
	</section>

	<section class="content">
		<div class="row">
			<div class="col-md-12">
				<div class="box">
					<div class="box-header">
						<h3 class="box-title"></h3>
					</div>

					<div class="box-body">
						<form action="<?=base_url('Auth1/reset_password_mhs'); ?>" method="POST" autocomplete="off">
							<div class="form-group">
								<label>No Pendaftaran</label>
								<input type="text" name="no_pendaftaran" class="form-control" placeholder="No Pendaftaran Mahasiswa" required="required">
							</div>

							<div class="form-group">
								<label>Password Baru</label>
								<input type="password" name="password_baru" required="required" class="form-control" placeholder="Password Mahasiswa">
							</div>

							<div class="form-group">
								<label>Konfirmasi Password Baru</label>
								<input type="password" name="confirm_password" class="form-control" required="required" placeholder="Konfirmasi Password Baru">
							</div>


							<button class="btn btn-primary" style="float:right;" type="submit">
							<span class="glyphicon glyphicon-ok"></span>
								Simpan
							</button>
						</form>
					</div>
				</div>
			</div>
			<div class="col-md-4"></div>
		</div>
	</section>
</div>
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
