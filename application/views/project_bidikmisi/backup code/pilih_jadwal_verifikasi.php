<?php
	$this->load->view('project_bidikmisi/header/mahasiswa/header_mhs');
?>

<!DOCTYPE html>
<html>
	<body>
		<div class="container">
			<div class="row">
				<div class="wrapper">

					<?php
						$this->load->view('project_bidikmisi/mahasiswa/navbar_mhs');
					?>
					
					<form action="<?=base_url('C_mhs/step10'); ?>">
						<!--Pilih Jadwal Verifikasi-->
						<div class="col-md-12">
							<div class="text-center mb-4">
								<div class="col-md-12">
									<div id="pilih-jadwal">
										<h2><b>Pilih Jadwal Verifikasi</b></h2>
										<hr style="height:5px;" color="#073763">
									</div>

									<div class="alert alert-info">
										<p>Keterangan</p>
										<p>-----------------</p>
										<p>Silahkan Pilih Jadwal Verifikasi</p>
									</div>
								</div>
							</div>

							<div class="clear"></div>

							<!--button-->
							<div id="button-all">
								<a class="btn btn-info" href="<?=base_url('C_mhs'); ?>" style="margin-right:20px; " value="Kembali" type="submit">
									<i class="fa fa-check-circle-o"></i>
									&laquo; Kembali
								</a>

								<button class="btn btn-primary" style="margin-right:20px; " value="Lanjut" type="submit">
									<i class="fa fa-check-circle-o"></i>
									Lanjut &raquo;
								</button>
							</div>
							<!--End button-->	
						</div>
						<!--End Pilih Jadwal Verifikasi-->

						<div class="clear"></div>
					</form>
				</div>
			</div>
		</div>
	</body>
</html>

<?php
	$this->load->view('project_bidikmisi/footer/footer');
?>