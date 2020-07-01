<?php
$r1 = 'yatimpiatu';
$r2 = 'masihada';
$r3 = 'yatim';
$r4 = 'piatu';
$r5 = 'lulus';
$r6 = 'tlulus';
$r7 = 'pasantren';
$r8 = 'tpasantren';
$r9 = 'sudah_pemberkasan';
$r10 = 'belum_pemberkasan';

$param1 = 'data_peserta';
$param2 = 'data_peserta_lulus';
$param3 = 'data_peserta_tdk_lulus';
$param4 = 'data_peserta_verifikasi';
$param5 = 'data_peserta_pending';
$param6 = 'data_peserta_ortumeninggal';
$param7 = 'data_peserta_ortumasihada';
$param8 = 'data_peserta_ayahmeninggal';
$param9 = 'data_peserta_ibumeninggal';
$param10 = 'data_peserta_psantren';
$param11 = 'data_peserta_tdkpsantren';
$param12 = 'data_peserta_sudah_pemberkasan';
$param13 = 'data_peserta_belum_pemberkasan';
$this->load->view('project_bidikmisi/header/admin/header'); ?>
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			<i class="fa fa-tachometer" aria-hidden="true"></i> Cetak dan Export Data Peserta
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
							<form action="<?=base_url('Auth1/cetak_report'); ?>" method="POST" target="_blank">
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
									<option value="<?php echo $r9; ?>">Print Data Sudah Pemberkasan</option>
									<option value="<?php echo $r10; ?>">Print Data Belum Pemberkasan</option>
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
						<form action="<?=base_url('Auth1/cetak_daerah'); ?>" method="POST" target="_blank">
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
						<form action="<?=base_url('Auth1/cetak_th'); ?>" method="POST" target="_blank">
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
						<form action="<?=base_url('Auth1/cetak_fk'); ?>" method="POST" target="_blank">
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

			<div class="col-md-6">
				<div class="box">
					<div class="box-header">
						<h3 class="box-title">Cetak Berdasarkan Jurusan</h3>
					</div>

					<div class="box-body">
						<form action="<?=base_url('Auth1/cetak_j'); ?>" method="POST" target="_blank">
							<div class="from-group">
								<select class="form-control" required="required" name="jurusan">
									<option value="">-Pilih SalahSatu-</option>
									<?php
									//melakukan looping dari fungsi index di controller Auth1
									foreach($jurusan as $j){
										echo "<option value='".$j->id_jurusan."'>".$j->nama_jurusan."</option>";
									}
									?>
								</select>
							</div>

							<button type="submit" class="btn btn-primary" style="margin-top: 20px; float:right;">Cetak</button>
						</form>
					</div>
				</div>
			</div>

			<div class="col-md-6">
				<div class="box">
					<div class="box-header">
						<h3 class="box-title">Export Excel</h3>
					</div>

					<div class="box-body">
						<div class="from-group">
							<form action="<?=base_url('Auth1/export_excel'); ?>" method="POST" target="_blank">
    							<select class="form-control" target="_blank" required="required" name="export">
    							    <option value="">-Pilih SalahSatu-</option>
    							    <option value="<?php echo $param1; ?>">Export Data Peserta</option>
    							    <option value="<?php echo $param2; ?>">Export Data Peserta Lulus</option>
    							    <option value="<?php echo $param3; ?>">Export Data Peserta Tidak Lulus</option>
    							    <option value="<?php echo $param4; ?>">Export Data Peserta Verifikasi</option>
    							    <option value="<?php echo $param5; ?>">Export Data Peserta Pending</option>
    							    <option value="<?php echo $param6; ?>">Export Data Peserta Ortu Meninggal</option>
    							    <option value="<?php echo $param7; ?>">Export Data Peserta Ortu Masih Ada</option>
    							    <option value="<?php echo $param8; ?>">Export Data Peserta Ayah Meninggal</option>
    							    <option value="<?php echo $param9; ?>">Export Data Peserta Ibu Meninggal</option>
    							    <option value="<?php echo $param10; ?>">Export Data Peserta Pernah Pesantren</option>
    							    <option value="<?php echo $param11; ?>">Export Data Peserta Tidak Pernah Pesantren</option>
									<option value="<?php echo $param12; ?>">Export Data Peserta Sudah Pemberkasan</option>
									<option value="<?php echo $param13; ?>">Export Data Peserta Belum Pemberkasan</option>
    							</select>

    							<button type="submit" class="btn btn-success" style="margin-top: 20px; float:right;">Export</button>
							</form>
						</div>
					</div>
				</div>
			</div>

			<div class="col-md-6">
				<div class="box">
					<div class="box-header">
						<h3 class="box-title">Export Berdasarkan Fakultas</h3>
					</div>

					<div class="box-body">
						<form action="<?=base_url('Auth1/export_excel2'); ?>" method="POST" target="_blank">
							<div class="from-group">
								<select class="form-control" required="required" name="fakultas">
									<option value="">-Pilih SalahSatu-</option>
									<?php
												//melakukan looping dari fungsi index di controller Auth1
									foreach($fakultas as $fk){
										echo "<option value='".$fk->id_fakultas."'>".$fk->nama_fakultas."</option>";
									}
									?>
								</select>
							</div>

							<button type="submit" class="btn btn-success" style="margin-top: 20px; float:right;">Export</button>
						</form>
					</div>
				</div>
			</div>

			<div class="col-md-6">
				<div class="box">
					<div class="box-header">
						<h3 class="box-title">Export  Berdasarkan Jurusan</h3>
					</div>

					<div class="box-body">
						<form action="<?=base_url('Auth1/export_excel3'); ?>" method="POST" target="_blank">
							<div class="from-group">
								<select class="form-control" required="required" name="jurusan">
									<option value="">-Pilih SalahSatu-</option>
									<?php
									//melakukan looping dari fungsi index di controller Auth1
									foreach($jurusan as $j){
										echo "<option value='".$j->id_jurusan."'>".$j->nama_jurusan."</option>";
									}
									?>
								</select>
							</div>

							<button type="submit" class="btn btn-success" style="margin-top: 20px; float:right;">Export</button>
						</form>
					</div>
				</div>
			</div>

			<div class="col-md-6">
				<div class="box">
					<div class="box-header">
						<h3 class="box-title">Export Excel Per-Tahun</h3>
					</div>

					<div class="box-body">
						<form action="<?=base_url('Auth1/export_excel4'); ?>" method="POST" target="_blank">
							<div class="from-group">
								<input type="number" class="form-control" placeholder="Masukan Tahun" required="required" name="tahun">
							</div>

							<button type="submit" class="btn btn-success" style="margin-top: 20px; float:right;">Export</button>
						</form>
					</div>
				</div>
			</div>

			<div class="col-md-6">
				<div class="box">
					<div class="box-header">
						<h3 class="box-title">Export Excel Per-Kecamatan</h3>
					</div>

					<div class="box-body">
						<form action="<?=base_url('Auth1/export_excel5'); ?>" method="POST" target="_blank">
							<div class="from-group">
							    <select name="kecamatan" class="form-control" required="required">
							        <option value="">-Pilih SalahSatu-</option>
							        <?php foreach($data_kecamatan as $value) { ?>
							            <option value="<?php echo $value->kecamatan_2?>"><?php echo $value->kecamatan_2; ?></option>
							        <?php } ?>
							    </select>
							</div>

							<button type="submit" class="btn btn-success" style="margin-top: 20px; float:right;">Export</button>
						</form>
					</div>
				</div>
			</div>

			<div class="col-md-6">
				<div class="box">
					<div class="box-header">
						<h3 class="box-title">Export Excel Per-Kelurahan</h3>
					</div>

					<div class="box-body">
						<form action="<?=base_url('Auth1/export_excel6'); ?>" method="POST" target="_blank">
							<div class="from-group">
								<select name="kelurahan" class="form-control" required="required">
							        <option value="">-Pilih SalahSatu-</option>
							        <?php foreach($data_kelurahan as $value) { ?>
							            <option value="<?php echo $value->kelurahan_2?>"><?php echo $value->kelurahan_2; ?></option>
							        <?php } ?>
							    </select>
							</div>

							<button type="submit" class="btn btn-success" style="margin-top: 20px; float:right;">Export</button>
						</form>
					</div>
				</div>
			</div>

			<div class="col-md-6">
				<div class="box">
					<div class="box-header">
						<h3 class="box-title">Export Report Bidikmisi Per-Angkatan</h3>
					</div>

					<div class="box-body">
						<form action="<?=base_url('Admin/excel1'); ?>" method="POST" target="_blank">
							<div class="form-group">
								<input type="number" required="required" name="angkatan" class="form-control" placeholder="Ex : 2015 atau 2016">
							</div>

							<button type="submit" class="btn btn-success" style="margin-top: 5px; float:right;">Export</button>
						</form>
					</div>
				</div>
			</div>

			<div class="col-md-6">
				<div class="box">
					<div class="box-header">
						<h3 class="box-title">Export Report Bidikmisi Per-Fakultas</h3>
					</div>

					<div class="box-body">
						<form action="<?=base_url('Admin/excel2'); ?>" method="POST" target="_blank">
							<div class="from-group">
								<select class="form-control" required="required" name="fakultas">
									<option value="">-Pilih SalahSatu-</option>
									<?php
										//melakukan looping dari fungsi index di controller Auth1
									foreach($fakultas as $fk){
										echo "<option value='".$fk->id_fakultas."'>".$fk->nama_fakultas."</option>";
									}
									?>
								</select>
							</div>

							<button type="submit" class="btn btn-success" style="margin-top: 20px; float:right;">Export</button>
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
