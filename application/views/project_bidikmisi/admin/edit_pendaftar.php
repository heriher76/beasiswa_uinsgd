<?php
	$this->load->view('project_bidikmisi/header/admin/header');
?>
<!DOCTYPE html>
<html>
	<div class="content-wrapper">
	<!-- Content Header (Page header) -->
		<section class="content-header">
			<h1>
				<i class="fa fa-tachometer" aria-hidden="true"></i> Edit Data Peserta
			</h1>
		</section>

		<?php foreach ($user as $value) { ?>
		<section class="content">
			<div class="row">
				<div class="col-md-12">
					<div class="box">
						<div class="box-header">
							<h3 class="box-title">Data Peserta <?php echo $value->nama_mahasiswa; ?></h3>
						</div>

						<div class="box-body">
							<form action="<?=base_url('Auth1/edit_pendaftar'); ?>" method="POST">
								<input type="hidden" value="<?php echo $value->no_pendaftaran; ?>" name="no_pendaftaran">
								<div class="form-group">
									<label>No Pendaftaran</label>
									<input class="form-control" type="text" disabled="disabled" value="<?php echo $value->no_pendaftaran; ?>">
								</div>

								<div class="form-group">
									<label>Nama Mahasiswa</label>
									<input class="form-control" type="text" disabled="disabled" value="<?php echo $value->nama_mahasiswa; ?>">
								</div>

								<div class="form-group">
									<label>Fakultas</label>
									<select class="form-control" required="required" name="fakultas" id="fakultas4">
										<?php if($value->fakultas == null || $value->jurusan == '0') { ?>
										<option value="">-Pilih SalahSatu-</option>
											<?php
											//melakukan looping dari fungsi index di controller C_mhs
												foreach($fakultas as $data){
													echo "<option value='".$data->id_fakultas."'>".$data->nama_fakultas."</option>";
												}
											?>
										<?php }else{ ?>
											<?php foreach($fakultas as $x_fak) {
												if($value->fakultas == $x_fak->id_fakultas){ ?>
											<option value="<?php echo $x_fak->id_fakultas; ?>">
												<?php
													echo $x_fak->nama_fakultas;
												}
											} ?></option>
											<option value="">--</option>
											<?php
											//melakukan looping dari fungsi index di controller C_mhs
												foreach($fakultas as $data){
													echo "<option value='".$data->id_fakultas."'>".$data->nama_fakultas."</option>";
												}
											}
											?>
									</select>
								</div>

								<div class="form-group">
									<label>Jurusan</label>
									<?php if($value->jurusan == null || $value->jurusan == '0') { ?>
										<select class="form-control" required="required" name="jurusan" id="jurusan4">
											<option value="">-Pilih SalahSatu-</option>
										</select>
										<div id="loading5">
											<img src="<?=base_url('assets/img/loading.gif'); ?>"><small>Loading..</small>
										</div>
									<?php }else{ ?>
										<select required="required" class="form-control" name="jurusan" id="jurusan4">
											<?php foreach($jurusan as $x_jur) {
												if($value->jurusan == $x_jur->id_jurusan){
											?>
											<option value="<?php echo $x_jur->id_jurusan; ?>">
											<?php
														echo $x_jur->nama_jurusan;
													}
												}
												?>
											</option>
											<option value="">--</option>
										</select>
										<div id="loading12">
											<img src="<?=base_url('assets/img/loading.gif'); ?>"><small>Loading..</small>
										</div>
									<?php } ?>
								</div>

								<div class="form-group">
									<label>Status Almarhum Ayah</label>
									<br/>
									<?php if($value->almarhum == 40) { ?>
										<input type="checkbox" checked="checked" id="checkbox1" value="40" name="almarhum">
										<label for="checkbox1" class="input">
											Almarhum
										</label>
									<?php }else if($value->almarhum != 40) { ?>
										<input type="checkbox" id="checkbox2" value="40" name="almarhum">
										<label for="checkbox2" class="input">
											Almarhum
										</label>
									<?php } ?>
								</div>

								<div class="form-group">
									<label>Status Almarhum Ibu</label>
									<br/>
									<?php if($value->almarhumah == 20) { ?>
										<input type="checkbox" checked="checked" id="checkbox3" value="20" name="almarhumah">
										<label for="checkbox3" class="input">
											Almarhumah
										</label>
									<?php }else if($value->almarhumah != 20) { ?>
										<input type="checkbox" id="checkbox4" value="20" name="almarhumah">
										<label for="checkbox4" class="input">
											Almarhumah
										</label>
									<?php } ?>
								</div>

								<div class="form-group">
									<label>Pekerjaan Ayah</label>
									<select class="form-control input" required="required" name="pekerjaan_ayah">
										<option value="<?php echo $value->pekerjaan_ayah; ?>"><?php
											if($value->pekerjaan_ayah == '1'){
												echo "PNS/TNI/POLRI";
											}else if($value->pekerjaan_ayah == '2'){
												echo "Wiraswasta";
											}else if($value->pekerjaan_ayah == '3'){
												echo "Tukang";
											}else if($value->pekerjaan_ayah == '4'){
												echo "Buruh Tani/Petani";
											}
											?></option>
										<option>--</option>
										<option value="1">PNS/TNI/POLRI</option>
										<option value="2">Wiraswasta</option>
										<option value="3">Tukang</option>
										<option value="4">Buruh Tani/Petani</option>
									</select>
								</div>

								<div class="form-group">
									<label>Pendidikan Ayah</label>
									<select class="form-control input" required="required" name="pendidikan_ayah">
										<option value="<?php echo $value->pendidikan_ayah; ?>"><?php
											if($value->pendidikan_ayah == '1'){
												echo "> Sarjana";
											}else if($value->pendidikan_ayah == '2'){
												echo "SLTA/Sederajat";
											}else if($value->pendidikan_ayah == '3'){
												echo "SLTP/Sederajat";
											}else if($value->pendidikan_ayah == '4'){
												echo "SD/Tidak Sekolah";
											}
										?></option>
										<option>--</option>
										<option value="1">>Sarjana</option>
										<option value="2">SLTA/Sederajat</option>
										<option value="3">SLTP/Sederajat</option>
										<option value="4">SD/Tidak Sekolah</option>
									</select>
								</div>

								<div class="form-group">
									<label>Penghasilan Ayah</label>
									<select class="form-control input" required="required" name="penghasilan_ayah">
										<option value="<?php echo $value->penghasilan_ayah?>"><?php
											if($value->penghasilan_ayah == '1'){
												echo "1.001.000 s/d 1.200.000";
											}else if($value->penghasilan_ayah == '2'){
												echo "751.000 s/d 1.000.000";
											}else if($value->penghasilan_ayah == '3'){
												echo "501.000 s/d 750.000";
											}else if($value->penghasilan_ayah == '4'){
												echo "< 500.000";
											}
										?></option>
										<option>--</option>
										<option value="1">1.001.000 s/d 1.200.000</option>
										<option value="2">751.000 s/d 1.000.000</option>
										<option value="3">501.000 s/d 750.000</option>
										<option value="4">< 500.000</option>
									</select>
								</div>

								<div class="form-group">
									<label>Penghasilan Ibu</label>
									<select class="form-control input" required="required" name="penghasilan_ibu">
										<option value="<?php echo $value->penghasilan_ibu?>"><?php
											if($value->penghasilan_ibu == '1'){
												echo "1.001.000 s/d 1.200.000";
											}else if($value->penghasilan_ibu == '2'){
												echo "751.000 s/d 1.000.000";
											}else if($value->penghasilan_ibu == '3'){
												echo "501.000 s/d 750.000";
											}else if($value->penghasilan_ibu == '4'){
												echo "< 500.000";
											}
										?></option>
										<option>--</option>
										<option value="1">1.001.000 s/d 1.200.000</option>
										<option value="2">751.000 s/d 1.000.000</option>
										<option value="3">501.000 s/d 750.000</option>
										<option value="4">< 500.000</option>
									</select>
								</div>

								<div class="form-group">
									<label>Tanggungan Ortu</label>
									<select class="form-control input" required="required" name="saudara_kandung">
										<option value="<?php echo $value->jumlah_saudara_kandung_tang_ortu; ?>"><?php
											if($value->jumlah_saudara_kandung_tang_ortu == '1'){
												echo "< 3 Orang";
											}else if($value->jumlah_saudara_kandung_tang_ortu == '2'){
												echo "4 - 6 Orang";
											}else if($value->jumlah_saudara_kandung_tang_ortu == '3'){
												echo "7 - 8 Orang";
											}else if($value->jumlah_saudara_kandung_tang_ortu == '4'){
												echo "> 8 Orang";
											}
										?></option>
										<option>--</option>
										<option value="1">< 3 Orang</option>
										<option value="2">4 - 6 Orang</option>
										<option value="3">7 - 8 Orang</option>
										<option value="4">> 8 Orang</option>
									</select>
								</div>

								<div class="form-group">
									<label>Luas Rumah</label>
									<select class="form-control input" required="required" name="luas_rumah">
										<option value="<?php echo $value->luas_rumah; ?>"><?php
											if($value->luas_rumah == '1'){
												echo "> 120 Meter Persegi";
											}else if($value->luas_rumah == '2'){
												echo "81 - 120 Meter Persegi";
											}else if($value->luas_rumah == '3'){
												echo "41 - 80 Meter Persegi";
											}else if($value->luas_rumah == '4'){
												echo "< 40 Meter Persegi";
											}
										?></option>
										<option>--</option>
										<option value="1">> 120 Meter Persegi</option>
										<option value="2">81 - 120 Meter Persegi</option>
										<option value="3">41 - 80 Meter Persegi</option>
										<option value="4">< 40 Meter Persegi</option>
									</select>
								</div>

								<div class="form-group">
									<label>Pajak Bumi Bangunan (PBB)</label>
									<select class="form-control input" required="required" name="pbb">
										<option value="<?php echo $value->pbb; ?>"><?php
											if($value->pbb == '1'){
												echo "> 100.000";
											}else if($value->pbb == '2'){
												echo "76.000 - 100.000";
											}else if($value->pbb == '3'){
												echo "26.000 - 75.000";
											}else if($value->pbb == '4'){
												echo "< 25.000";
											}
										?></option>
										<option>--</option>
										<option value="1">> 100.000</option>
										<option value="2">76.000 - 100.000</option>
										<option value="3">26.000 - 75.000</option>
										<option value="4">< 25.000</option>
									</select>
								</div>

								<div class="form-group">
									<label>Rekening Listrik Perbulan</label>
									<select class="form-control input" required="required" name="rek_listrik_per_bulan">
										<option value="<?php echo $value->rek_listrik_per_bulan; ?>"><?php
											if($value->rek_listrik_per_bulan == '1'){
												echo "> 100.000";
											}else if($value->rek_listrik_per_bulan == '2'){
												echo "76.000 - 100.000";
											}else if($value->rek_listrik_per_bulan == '3'){
												echo "26.000 - 75.000";
											}else if($value->rek_listrik_per_bulan == '4'){
												echo "< 25.000";
											}
										?></option>
										<option>--</option>
										<option value="1">> 100.000</option>
										<option value="2">76.000 - 100.000</option>
										<option value="3">26.000 - 75.000</option>
										<option value="4">< 25.000</option>
									</select>
								</div>

								<div class="form-group">
									<label>Rerata Nilai UN</label>
									<select class="form-control input" required="required" name="rerata_nilai_un">
										<option value="<?php echo $value->rerata_nilai_un; ?>"><?php
											if($value->rerata_nilai_un == '1'){
												echo "< 7.00";
											}else if($value->rerata_nilai_un == '2'){
												echo "7.00 - 8.00";
											}else if($value->rerata_nilai_un == '3'){
												echo "8.10 - 9.00";
											}else if($value->rerata_nilai_un == '4'){
												echo "> 9.00";
											}
										?></option>
										<option>--</option>
										<option value="1">< 7.00</option>
										<option value="2">7.00 - 8.00</option>
										<option value="3">8.10 - 9.00</option>
										<option value="4">> 9.00</option>
									</select>
								</div>

								<div class="form-group">
									<label>Rerata Nilai Raport Sekolah</label>
									<select class="form-control input" required="required" name="rerata_nilai_raport">
										<option value="<?php echo $value->rerata_nilai_raport; ?>"><?php
											if($value->rerata_nilai_raport == '1'){
												echo "< 7.00";
											}else if($value->rerata_nilai_raport == '2'){
												echo "7.00 - 8.00";
											}else if($value->rerata_nilai_raport == '3'){
												echo "8.10 - 9.00";
											}else if($value->rerata_nilai_raport == '4'){
												echo "> 9.00";
											}
										?></option>
										<option>--</option>
										<option value="1">< 7.00</option>
										<option value="2">7.00 - 8.00</option>
										<option value="3">8.10 - 9.00</option>
										<option value="4">> 9.00</option>
									</select>
								</div>

								<div class="form-group">
									<label>Prestasi Akademik</label>
									<select class="form-control input" required="required" name="prestasi_akademik">
										<option value="<?php echo $value->prestasi_akademik; ?>"><?php
											if($value->prestasi_akademik == '0'){
												echo "Tidak Ada Prestasi";
											}else if($value->prestasi_akademik == '1'){
												echo "Tingkat Lokal";
											}else if($value->prestasi_akademik == '2'){
												echo "Tingkat Regional";
											}else if($value->prestasi_akademik == '3'){
												echo "Tingkat Nasional";
											}else if($value->prestasi_akademik == '4'){
												echo "Tingkat Internasional";
											}
										?></option>
										<option>--</option>
										<option value="0">Tidak Ada Prestasi</option>
										<option value="1">Tingkat Lokal</option>
										<option value="2">Tingkat Regional</option>
										<option value="3">Tingkat Nasional</option>
										<option value="4">Tingkat Internasional</option>
									</select>
								</div>

								<div class="form-group">
									<label>Prestasi Non Akademik</label>
									<select class="form-control input" required="required" name="prestasi_non_akademik">
										<option value="<?php echo $value->prestasi_non_akademik; ?>"><?php
											if($value->prestasi_non_akademik == '0'){
												echo "Tidak Ada Prestasi";
											}else if($value->prestasi_non_akademik == '1'){
												echo "Tingkat Lokal";
											}else if($value->prestasi_non_akademik == '2'){
												echo "Tingkat Regional";
											}else if($value->prestasi_non_akademik == '3'){
												echo "Tingkat Nasional";
											}else if($value->prestasi_non_akademik == '4'){
												echo "Tingkat Internasional";
											}
										?></option>
										<option>--</option>
										<option value="0">Tidak Ada Prestasi</option>
										<option value="1">Tingkat Lokal</option>
										<option value="2">Tingkat Regional</option>
										<option value="3">Tingkat Nasional</option>
										<option value="4">Tingkat Internasional</option>
									</select>
								</div>

								<button type="submit" class="btn btn-primary" style="float: right;">
								<span class="glyphicon glyphicon-ok"></span>
									Simpan
								</button>
							</form>
						<?php } ?>
						</div>
					</div>
				</div>
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
</html>
