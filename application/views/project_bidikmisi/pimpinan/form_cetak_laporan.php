<?php 
$r1 = 'yatimpiatu';
$r2 = 'masihada';
$r3 = 'yatim';
$r4 = 'piatu';
$r5 = 'lulus';
$r6 = 'tlulus';
$r7 = 'pasantren';
$r8 = 'tpasantren';
$this->load->view('project_bidikmisi/header/pimpinan/head'); ?>
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			<i class="fa fa-tachometer" aria-hidden="true"></i> Cetak Data Peserta
		</h1>
	</section>

	<section class="content">
		<div class="row">
			<div class="col-md-6">
				<div class="box">
					<div class="box-header">
						<h3 class="box-title">Cetak Report Peserta</h3>
					</div>
					
					<div class="box-body">
						<div class="from-group">
							<form action="<?=base_url('Auth0/cetak_report'); ?>" method="POST" target="_blank">
    							<select class="form-control" target="_blank" required="required" name="cetak">
    							    <option value="">-Pilih SalahSatu-</option>
    							    <option value="<?php echo $r1; ?>">Print Data Orangtua Meninggal</option>
    							    <option value="<?php echo $r2; ?>">Print Data Orangtua Masih ada</option>
    							    <option value="<?php echo $r3; ?>">Print Data Ayah Meninggal</option>
    							    <option value="<?php echo $r4; ?>">Print Data Ibu Meninggal</option>
    							    <option value="<?php echo $r5; ?>">Print Data Peserta Lulus</option>
    							    <option value="<?php echo $r6; ?>">Print Data Pesarta Tidak Lulus</option>
    							    <option value="<?php echo $r7; ?>">Print Data Pernah Pasantren</option>
    							    <option value="<?php echo $r8; ?>">Print Data Tidak Pernah Pasantren</option>
    							</select>
    							
    							<button type="submit" class="btn btn-primary" style="margin-top: 20px; float:right;">Cetak</button>
							</form>
						</div>
					</div>
				</div>
			</div>

			<div class="col-md-6">
				<div class="box">
					<div class="box-header">
						<h3 class="box-title">Cetak Berdasarkan Provinsi</h3>
					</div>

					<div class="box-body">
						<form action="<?=base_url('Auth0/cetak_daerah'); ?>" method="POST" target="_blank">
							<div class="from-group">
								<select class="form-control" required="required" name="provinsi" id="provinsi10">
									<option value="">-Pilih SalahSatu-</option>
									<?php
												//melakukan looping dari fungsi index di controller Auth1
									foreach($provinsi as $data){
										echo "<option value='".$data->id_propinsi."'>".$data->nama_propinsi."</option>";
									}
									?>
								</select>
							</div>
							<br>
							<div class="from-group">
								<select required="required" class="form-control input" name="kota" id="kota_kota">
									<option value="">-Pilih SalahSatu-</option>
								</select>
								<div id="loadingloli">
									<img src="<?=base_url('assets/img/loading.gif'); ?>"><small>Loading..</small>
								</div>
							</div>

							<button type="submit" class="btn btn-primary" style="margin-top: 20px; float:right;">Cetak</button>
						</form>
					</div>
				</div>
			</div>

		</div>

		<div class="row">
			<div class="col-md-6">
				<div class="box">
					<div class="box-header">
						<h3 class="box-title">Cetak Berdasarkan Tahun</h3>
					</div>

					<div class="box-body">
						<form action="<?=base_url('Auth0/cetak_th'); ?>" method="POST" target="_blank">
							<div class="from-group">
								<input type="number" class="form-control" name="tahun" placeholder="Masukan Tahun" required="
								required">
							</div>

							<button type="submit" class="btn btn-primary" style="margin-top: 20px; float:right;">Cetak</button>
						</form>
					</div>
				</div>
			</div>

			<div class="col-md-6">
				<div class="box">
					<div class="box-header">
						<h3 class="box-title">Cetak Berdasarkan Fakultas</h3>
					</div>

					<div class="box-body">
						<form action="<?=base_url('Auth0/cetak_fk'); ?>" method="POST" target="_blank">
							<div class="from-group">
								<select class="form-control" required="required" name="fakultas" id="provinsi10">
									<option value="">-Pilih SalahSatu-</option>
									<?php
												//melakukan looping dari fungsi index di controller Auth1
									foreach($fakultas as $fk){
										echo "<option value='".$fk->id_fakultas."'>".$fk->nama_fakultas."</option>";
									}
									?>
								</select>
							</div>

							<button type="submit" class="btn btn-primary" style="margin-top: 20px; float:right;">Cetak</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>
<!--end wrapper-->


<?php
$this->load->view('project_bidikmisi/footer/footer');
?>
</body>
</html>