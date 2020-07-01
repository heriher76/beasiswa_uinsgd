<?php
	$this->load->view('project_bidikmisi/header/admin/header');
?>
	<div class="content-wrapper">
		<!-- Content Header (Page header) -->
		<section class="content-header">
			<h1>
				Insert Data Manual
			</h1>
		</section>

		<section class="content">
			<div class="row">
				<div class="col-md-12">
					<div class="box">
						<div class="box-header">
							<h3 class="box-title">Form Insert Data Manual</h3>
						</div>
						<div class="box-body">
							<form action="<?=base_url('Auth1/insert_manual'); ?>" method="POST" autocomplete="off">
								<div class="form-group">
									<label>No Pendaftaran</label>
									<input class="form-control" type="text" placeholder="No Pendaftaran" name="no_pendaftaran" required="required">
								</div>

								<div class="form-group">
									<label>Jenis Kelamin</label>
									<select name="jenis_kelamin" required="required" class="form-control">
										<option value="">- Pilih Salah Satu -</option>
										<option value="Laki - Laki">Laki - Laki</option>
										<option value="Perempuan">Perempuan</option>
									</select>
								</div>

								<div class="form-group">
									<label>Nama Mahasiswa</label>
									<input class="form-control" type="text" placeholder="Nama Mahasiswa" name="nama_mahasiswa" required="required">
								</div>

								<div class="form-group">
									<label for="tanggal">Tanggal Lahir</label>
									<input class="form-control tanggal" type="text" placeholder="Contoh : 1998-12-05" name="tgl_lahir" required="required">
								</div>

								<div class="form-group">
									<label>Jalur Pendaftaran</label>
									<select name="jalur_pendaftaran" class="form-control" required="required">
										<option value="">-Pilih SalahSatu-</option>
										<option value="MANDIRI-TERTULIS">MANDIRI-TERTULIS</option>
										<option value="SNMPTN">SNMPTN</option>
										<option value="MANDIRI-PRESTASI">MANDIRI-PRESTASI</option>
										<option value="SPAN-PTKIN">SPAN-PTKIN</option>
										<option value="UM-PTKIN">UM-PTKIN</option>
										<option value="SBMPTN">SBMPTN</option>
									</select>
								</div>

								<div class="form-group">
									<label>Fakultas</label>
									<select class="form-control" required="required" name="fakultas" id="fakultas3">
										<option value="">-Pilih SalahSatu-</option>
										<?php
										//melakukan looping dari fungsi index di controller Auth1
											foreach($fakultas as $data){
												echo "<option value='".$data->id_fakultas."'>".$data->nama_fakultas."</option>";
											}
										?>
									</select>
								</div>

								<div class="form-group">
									<label>Jurusan</label>
									<select class="form-control" required="required" name="jurusan" id="jurusan3">
										<option value="">-Pilih SalahSatu-</option>
									</select>
									<div id="loading11">
										<img src="<?=base_url('assets/img/loading.gif'); ?>"><small>Loading..</small>
									</div>
								</div>

								<div class="form-group">
									<label>Kategori UKT</label>
									<select name="kategori" class="form-control" required="required">
											<option value="">-Pilih SalahSatu-</option>
											<option value="K1">K1</option>
											<option value="K2">K2</option>
											<option value="K3">K3</option>
											<option value="K4">K4</option>
											<option value="K5">K5</option>
											<option value="K6">K6</option>
											<option value="K7">K7</option>
									</select>
								</div>

								<button style="float: right;" type="submit" class="btn btn-primary">
								<span class="glyphicon glyphicon-ok"></span>
									Simpan
								</button>
							</form>
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
