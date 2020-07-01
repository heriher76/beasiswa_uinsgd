<?php
	$this->load->view('project_bidikmisi/header/mahasiswa/header');
?>
<!DOCTYPE html>
<html>
	<body>
		<div class="container col-md-8">
			<br>
			<div class="row">
				<div class="panel panel-success col-md-offset-1">
					<div class="panel-heading">
						<h3>Ganti Password</h3>
					</div>

					<div class="panel-body">
						<form action="<?=base_url('C_mhs/change_password'); ?>" method="POST">
							<div class="form-group">
								<label>Password Baru</label>
								<input type="password" class="form-control input" placeholder="Password Baru Anda" name="password_baru" required="required">
							</div>

							<div class="form-group">
								<label>Konfirmasi Password Baru</label>
								<input type="password" class="form-control input" placeholder="Konfirmasi Password Baru Anda" name="konfirmasi_password_baru" required="required">
							</div>

							<div class="text-right">
								<button type="submit" class="btn btn-primary">
								<span class="glyphicon glyphicon-ok"></span>
									Simpan
								</button>
							</div>
						</form>
					</div>
				</div>

			</div> <!--End class="row"-->
		</div> <!--End class="container col-md-8"-->
		<div class="col-md-12 panel-footer" style="background-color: #00a65a !important; width: 100%; left: 0px;">
			<div class="footer text-center" style="color:grey; font-size: 12px;">
				<?php $this->load->view('project_bidikmisi/footer/footer'); ?>
			</div>
		</div>
	</body>
</html>
