<?php
	$this->load->view('project_bidikmisi/header/mahasiswa/header');
?>

<!DOCTYPE html>
<html>
<style type="text/css">
	.main-footer {
		font-size: 15px;
		margin-top: 0px;
	}
	.btnn {
		border-radius:50%;
	}
</style>
	<body>
		<div class="notif notifikasi col-md-offset-8">
			<?php echo $this->session->flashdata('direct5_success'); ?>
		</div>

		<div class="container col-md-8">
			<br>
			<div class="row">
				<div class="panel group col-md-offset-1">

					<div class="alert alert-warning alert-dismissible" role="alert">
					  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					  <strong>Perhatian!</strong>
					  <div class="penting">
								<p>Tanda Asterik (*) Wajib diisi</p>
							</div>

							<p>Silahkan klik tabs <b>Edit Data Sekolah</b> dibawah, jika ada kesalahan/data anda belum diisi</p>
							<p>Jika sudah diisi Silahkan klik Tombol Lanjut</p>
					</div>
					<br>

					<div class="panel panel-success">
						<div class="panel-heading hidden-xs">
							<!--Sidebar-->
							<center>
							<a href="<?=base_url('C_mhs'); ?>" class="btn btnn">1</a> <span class="glyphicon glyphicon-arrow-right"></span>
							<a href="<?=base_url('C_mhs/step2'); ?>" class="btn btnn">2</a> <span class="glyphicon glyphicon-arrow-right"></span>
							<a href="<?=base_url('C_mhs/step3'); ?>" class="btn btnn">3</a> <span class="glyphicon glyphicon-arrow-right"></span>
							<a href="<?=base_url('C_mhs/step4'); ?>" class="btn btnn">4</a> <span class="glyphicon glyphicon-arrow-right"></span>
							<a href="<?=base_url('C_mhs/step5'); ?>" class="btn btnn active activee">5</a> <span class="glyphicon glyphicon-arrow-right"></span>
							<a href="<?=base_url('C_mhs/step6'); ?>" class="btn btnn">6</a> <span class="glyphicon glyphicon-arrow-right"></span>
							<a href="<?=base_url('C_mhs/step7'); ?>" class="btn btnn">7</a> <span class="glyphicon glyphicon-arrow-right"></span>
							<a href="<?=base_url('C_mhs/step8'); ?>" class="btn btnn">8</a> <span class="glyphicon glyphicon-arrow-right"></span>
							<a href="<?=base_url('C_mhs/step9'); ?>" class="btn btnn">9</a> <span class="glyphicon glyphicon-arrow-right"></span>
							<a href="<?=base_url('C_mhs/step10'); ?>" class="btn btnn">10</a> <span class="glyphicon glyphicon-arrow-right"></span>
							<a href="<?=base_url('C_mhs/step11'); ?>" class="btn btnn">11</a>
							</center>
							<!--End Sidebar-->
						</div>

						<div class="panel-body">
							<div class="col-xs-2 hidden-sm hidden-md hidden-lg" style="outline: 2px solid #CCC; outline-offset: 1px; padding-left: 8px;">
								<br>
								<a href="<?=base_url('C_mhs'); ?>" class="btn btnn">1</a></span>
								<br><br><!-- <center><span class="glyphicon glyphicon-arrow-down"></center> -->
								<a href="<?=base_url('C_mhs/step2'); ?>" class="btn btnn">2</a>
								<br><br><!-- <center><span class="glyphicon glyphicon-arrow-down"></center> -->
								<a href="<?=base_url('C_mhs/step3'); ?>" class="btn btnn">3</a>
								<br><br><!-- <center><span class="glyphicon glyphicon-arrow-down"></center> -->
								<a href="<?=base_url('C_mhs/step4'); ?>" class="btn btnn">4</a>
								<br><br><!-- <center><span class="glyphicon glyphicon-arrow-down"></center> -->
								<a href="<?=base_url('C_mhs/step5'); ?>" class="btn btnn active activee">5</a>
								<br><br><!-- <center><span class="glyphicon glyphicon-arrow-down"></center> -->
								<a href="<?=base_url('C_mhs/step6'); ?>" class="btn btnn">6</a>
								<br><br><!-- <center><span class="glyphicon glyphicon-arrow-down"></center> -->
								<a href="<?=base_url('C_mhs/step7'); ?>" class="btn btnn">7</a>
								<br><br><!-- <center><span class="glyphicon glyphicon-arrow-down"></center> -->
								<a href="<?=base_url('C_mhs/step8'); ?>" class="btn btnn">8</a>
								<br><br><!-- <center><span class="glyphicon glyphicon-arrow-down"></center> -->
								<a href="<?=base_url('C_mhs/step9'); ?>" class="btn btnn">9</a>
								<br><br><!-- <center><span class="glyphicon glyphicon-arrow-down"></center> -->
								<a href="<?=base_url('C_mhs/step10'); ?>" class="btn btnn">10</a>
								<br><br><!-- <center><span class="glyphicon glyphicon-arrow-down"></center> -->
								<a href="<?=base_url('C_mhs/step11'); ?>" class="btn btnn">11</a>
								<br><br>
							</div>
							<div class="col-xs-10 col-md-12">
							<h3><span class="label label-default">Tahap 5 Data Sekolah</span></h3>
								<br>
								<a class="btn btn-success" href="#edit" data-toggle="tab"><i class="glyphicon glyphicon-pencil"></i> Edit Data Sekolah</a>
								<br><br>
								<ul class="nav nav-tabs" style="border: none;">
									<!-- <li><a href="#data" data-toggle="tab">Data Identitas Diri</a></li> -->
									<li></li>
								</ul>

							<div class="tab-content">
								<div class="tab-pane active" id="data">
									<?php foreach ($data_diri as $value) { ?>
										<!--Data Sekolah-->
										<table class="table">
											<tr>
												<td>Alamat Sekolah</td>
												<td>:</td>
												<td><?php echo $value->alamat_sekolah; ?></td>
												<td><i class="asterik">*</i></td>
											</tr>

											<tr>
												<td>RT Sekolah</td>
												<td>:</td>
												<td><?php echo $value->rt_5; ?></td>
												<td><i class="asterik">*</i></td>
											</tr>

											<tr>
												<td>RW Sekolah</td>
												<td>:</td>
												<td><?php echo $value->rw_5; ?></td>
												<td><i class="asterik">*</i></td>
											</tr>

											<tr>
												<td>Provinsi Sekolah</td>
												<td>:</td>
												<td><?php
														if($value->prov_sekolah == '0' || $value->prov_sekolah == null){
															echo "";
														}

														foreach ($propinsi as $x_prov) {
															if($value->prov_sekolah == $x_prov->id_propinsi){
																echo $x_prov->nama_propinsi;
															}
														}
													?></td>
												<td><i class="asterik">*</i></td>
											</tr>

											<tr>
												<td>Kab/Kota Sekolah</td>
												<td>:</td>
												<td><?php
														if($value->kab_kota_sekolah == '0' || $value->kab_kota_sekolah == null){
															echo "";
														}

														foreach($kota as $x_kab_kota){
														if($value->kab_kota_sekolah == $x_kab_kota->id_kota){
															echo $x_kab_kota->nama_kota;
														}
													}
													?></td>
													<td><i class="asterik">*</i></td>
											</tr>

											<tr>
												<td>Kecamatan Sekolah</td>
												<td>:</td>
												<td><?php echo $value->kecamatan_5; ?></td>
												<td><i class="asterik">*</i></td>
											</tr>

											<tr>
												<td>Kelurahan Sekolah</td>
												<td>:</td>
												<td><?php echo $value->kelurahan_5; ?></td>
												<td><i class="asterik">*</i></td>
											</tr>

											<tr>
												<td>Nama Sekolah</td>
												<td>:</td>
												<td><?php echo $value->nama_sekolah; ?></td>
												<td><i class="asterik">*</i></td>
											</tr>

											<tr>
												<td>Tahun Lulus</td>
												<td>:</td>
												<td><?php
														if($value->tahun_lulus == null || $value->tahun_lulus == '0') {
															echo "";
														}else{
															echo $value->tahun_lulus;
														}
													?>
												</td>
												<td><i class="asterik">*</i></td>
											</tr>

											<tr>
												<td>Jurusan Sekolah</td>
												<td>:</td>
												<td><?php echo $value->jurusan_sekolah; ?></td>
												<td><i class="asterik">*</i></td>
											</tr>

											<tr>
												<td>Rerata Nilai UN</td>
												<td>:</td>
												<td><?php
													if($value->rerata_nilai_un == '1'){
														echo "< 7.00";
													}else if($value->rerata_nilai_un == '2'){
														echo "7.00 - 8.00";
													}else if($value->rerata_nilai_un == '3'){
														echo "8.10 - 9.00";
													}else if($value->rerata_nilai_un == '4'){
														echo "> 9.00";
													}
												?></td>
												<td><i class="asterik">*</i></td>
											</tr>

											<tr>
												<td>Rerata Nilai Raport</td>
												<td>:</td>
												<td><?php
													if($value->rerata_nilai_raport == '1'){
														echo "< 7.00";
													}else if($value->rerata_nilai_raport == '2'){
														echo "7.00 - 8.00";
													}else if($value->rerata_nilai_raport == '3'){
														echo "8.10 - 9.00";
													}else if($value->rerata_nilai_raport == '4'){
														echo "> 9.00";
													}
												?></td>
												<td><i class="asterik">*</i></td>
											</tr>

											<tr>
												<td>Prestasi Akademik</td>
												<td>:</td>
												<td><?php
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
												?></td>
												<td><i class="asterik">*</i></td>
											</tr>

											<tr>
												<td>Keterangan Prestasi Akedemik</td>
												<td>:</td>
												<td><?php echo $value->ket_prestasi_akademik; ?></td>
											</tr>

											<tr>
												<td>Prestasi Non Akademik</td>
												<td>:</td>
												<td><?php
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
												?></td>
												<td><i class="asterik">*</i></td>
											</tr>

											<tr>
												<td>Keterangan Prestasi Non Akedemik</td>
												<td>:</td>
												<td><?php echo $value->ket_prestasi_non_akademik; ?></td>
											</tr>
										</table>
										<!--End Data Sekolah-->
									</div> <!--End class="tab-pane" id="data"-->

									<div class="tab-pane" id="edit">
										<form action="<?=base_url('C_mhs/direct5'); ?>" method="POST">
											<div class="form-group">
												<label>Alamat Sekolah <i class="asterik">*</i></label>
												<textarea class="form-control input" type="text" name="alamat_sekolah" placeholder="Alamat Sekolah Anda" required="required"><?php echo $value->alamat_sekolah; ?></textarea>
											</div>

											<div class="form-group">
												<label>RT Sekolah <i class="asterik">*</i></label>
												<input class="form-control input" type="number" name="rt_5" placeholder="Rukun Tetangga" required="required" value="<?php echo $value->rt_5; ?>">
											</div>

											<div class="form-group">
												<label>RW Sekolah <i class="asterik">*</i></label>
												<input class="form-control input" type="number" name="rw_5" placeholder="Rukun Warga" required="required" value="<?php echo $value->rw_5; ?>">
											</div>

											<div class="form-group">
												<label>Provinsi Sekolah <i class="asterik">*</i></label>
												<select class="form-control input" required="required" name="provinsi_sekolah" id="provinsi3">
													<?php
													if($value->prov_sekolah == null || $value->prov_sekolah == '0') { ?>
														<option value="">-Pilih SalahSatu-</option>
														<?php
															//melakukan looping dari fungsi index di controller C_mhs
															foreach($propinsi as $data){
																echo "<option value='".$data->id_propinsi."'>".$data->nama_propinsi."</option>";
															}
														}else{
														?>
														<?php foreach ($propinsi as $x_prov) {
															if($value->prov_sekolah == $x_prov->id_propinsi){
														?>
															<option value="<?php echo $x_prov->id_propinsi; ?>">
																<?php
																		echo $x_prov->nama_propinsi;
																		}
																	}
																?>
															</option>
															<option value="">--</option>
														<?php
															//melakukan looping dari fungsi index di controller C_mhs
															foreach($propinsi as $data){
																echo "<option value='".$data->id_propinsi."'>".$data->nama_propinsi."</option>";
															}
														}
													?>
												</select>
											</div>

											<div class="form-group">
												<label>Kab/Kota Sekolah <i class="asterik">*</i></label>
												<?php if($value->kab_kota_sekolah == null || $value->kab_kota_sekolah == '0') { ?>
													<select class="form-control input" required="required" name="kab_kota_sekolah" id="kota3">
														<option value="">-Pilih SalahSatu-</option>
													</select>
													<div id="loading3">
														<img src="<?=base_url('assets/img/loading.gif'); ?>"><small>Loading..</small>
													</div>
												<?php }else{ ?>
													<select class="form-control input" required="required" name="kab_kota_sekolah" id="kota3">
												<?php
													foreach ($kota as $x_kota) {
														if($value->kab_kota_sekolah == $x_kota->id_kota) {
												?>
														<option value="<?php echo $x_kota->id_kota; ?>">
														<?php
																	echo $x_kota->nama_kota;
																}
															}
														?>
														</option>
														<option value="">--</option>
													</select>
													<div id="loading3">
														<img src="<?=base_url('assets/img/loading.gif'); ?>"><small>Loading..</small>
													</div>
												<?php } ?>
											</div>

											<div class="form-group">
												<label>Kecamatan Sekolah <i class="asterik">*</i></label>
												<input class="form-control input" type="text" name="kecamatan_5" placeholder="Kecamatan Sekolah Anda" required="required" value="<?php echo $value->kecamatan_5; ?>">
											</div>

											<div class="form-group">
												<label>Kelurahan Sekolah <i class="asterik">*</i></label>
												<input class="form-control input" type="text" name="kelurahan_5" placeholder="Kelurahan Sekolah Anda" required="required" value="<?php echo $value->kelurahan_5; ?>">
											</div>

											<div class="form-group">
												<label>Nama Sekolah <i class="asterik">*</i></label>
												<textarea class="form-control input" type="text" name="nama_sekolah" placeholder="Nama Sekolah Anda" required="required"><?php echo $value->nama_sekolah; ?></textarea>
											</div>

											<div class="form-group">
												<label>Tahun Lulus <i class="asterik">*</i></label>
												<select class="form-control input" required="required" name="tahun_lulus">
													<?php if($value->tahun_lulus == null || $value->tahun_lulus == '0') { ?>
														<option value="">-Pilih SalahSatu-</option>
														<?php foreach($tahun_lulus as $x_tahun) { ?>
														<option value="<?php echo $x_tahun->tahun_lulus; ?>"><?php echo $x_tahun->tahun_lulus; ?></option>
														<?php } ?>
													<?php }else { ?>
														<option value="<?php echo $value->tahun_lulus; ?>"><?php echo $value->tahun_lulus; ?></option>
														<option value="">--</option>
														<?php foreach($tahun_lulus as $x_tahun) { ?>
														<option value="<?php echo $x_tahun->tahun_lulus; ?>"><?php echo $x_tahun->tahun_lulus; ?></option>
														<?php } ?>
													<?php } ?>
												</select>
											</div>

											<div class="form-group">
												<label>Jurusan Sekolah <i class="asterik">*</i></label>
												<select class="form-control input" required="required" name="jurusan_sekolah">
													<?php if($value->jurusan_sekolah == null) { ?>
														<option value="">-Pilih SalahSatu-</option>
														<option value="IPA">IPA</option>
														<option value="IPS">IPS</option>
														<option value="Bahasa">Bahasa</option>
														<option value="Teknik">Teknik</option>
														<option value="Pertanian">Pertanian</option>
														<option value="Ekonomi">Ekonomi</option>
														<option value="Seni">Seni</option>
														<option value="Pariwisata">Pariwisata</option>
														<option value="Agama">Agama</option>
														<option value="Lain - Lain">Lain - Lain</option>
													<?php }else{ ?>
														<option value="<?php echo $value->jurusan_sekolah; ?>"><?php echo $value->jurusan_sekolah; ?></option>
														<option value="">--</option>
														<option value="IPA">IPA</option>
														<option value="IPS">IPS</option>
														<option value="Bahasa">Bahasa</option>
														<option value="Teknik">Teknik</option>
														<option value="Pertanian">Pertanian</option>
														<option value="Ekonomi">Ekonomi</option>
														<option value="Seni">Seni</option>
														<option value="Pariwisata">Pariwisata</option>
														<option value="Agama">Agama</option>
														<option value="Lain - Lain">Lain - Lain</option>
													<?php } ?>
												</select>
											</div>

											<div class="form-group">
												<label>Rerata Nilai UN <i class="asterik">*</i></label>
												<select class="form-control input" required="required" name="rerata_nilai_un">
													<?php if($value->rerata_nilai_un == null || $value->rerata_nilai_un == '0') { ?>
														<option value="">-Pilih SalahSatu-</option>
														<option value="1">< 7.00</option>
														<option value="4">> 9.00</option>
														<option value="3">8.10 - 9.00</option>
														<option value="2">7.00 - 8.00</option>
													<?php }else{ ?>
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
														<option value="">--</option>
														<option value="1">< 7.00</option>
														<option value="4">> 9.00</option>
														<option value="3">8.10 - 9.00</option>
														<option value="2">7.00 - 8.00</option>
													<?php } ?>
												</select>
											</div>

											<div class="form-group">
												<label>Rerata Nilai Raport <i class="asterik">*</i></label>
												<select class="form-control input" required="required" name="rerata_nilai_raport">
													<?php if($value->rerata_nilai_raport == null || $value->rerata_nilai_raport == '0') { ?>
														<option value="">-Pilih SalahSatu-</option>
														<option value="2">7.00 - 8.00</option>
														<option value="1">< 7.00</option>
														<option value="4">> 9.00</option>
														<option value="3">8.10 - 9.00</option>
													<?php }else{ ?>
														<option value="<?php echo $value->rerata_nilai_raport; ?>"><?php
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
														<option value="">--</option>
														<option value="2">7.00 - 8.00</option>
														<option value="1">< 7.00</option>
														<option value="4">> 9.00</option>
														<option value="3">8.10 - 9.00</option>
													<?php } ?>
												</select>
											</div>

											<div class="form-group">
												<label>Prestasi Akademik <i class="asterik">*</i></label>
												<select class="form-control input" required="required" name="prestasi_akademik">
													<?php if($value->prestasi_akademik == null) { ?>
															<option value="">-Pilih SalahSatu-</option>
															<option value="0">Tidak Ada Prestasi</option>
															<option value="4">Tingkat Internasional</option>
															<option value="2">Tingkat Regional</option>
															<option value="1">Tingkat Lokal</option>
															<option value="3">Tingkat Nasional</option>
														<?php }else{ ?>
															<option value="<?php echo $value->prestasi_akademik; ?>">
																<?php
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
																?>
														</option>
														<option value="">--</option>
														<option value="0">Tidak Ada Prestasi</option>
														<option value="4">Tingkat Internasional</option>
														<option value="2">Tingkat Regional</option>
														<option value="1">Tingkat Lokal</option>
														<option value="3">Tingkat Nasional</option>
													<?php } ?>
												</select>
											</div>

											<div class="form-group">
												<label>Keterangan Prestasi Akademik</label>
												<textarea placeholder="Silahkan Isi Keterangan Prestasi Akademik Anda (Jika Memiliki Prestasi Akademik)" value="<?php echo $value->ket_prestasi_akademik?>" class="form-control" name="ket_prestasi_akademik"><?php echo $value->ket_prestasi_akademik; ?></textarea>
											</div>

											<div class="form-group">
												<label>Prestasi Non Akademik <i class="asterik">*</i></label>
												<select class="form-control input" required="required" name="prestasi_non_akademik">
													<?php if($value->prestasi_non_akademik == null) { ?>
														<option value="">-Pilih SalahSatu-</option>
														<option value="0">Tidak Ada Prestasi</option>
														<option value="2">Tingkat Regional</option>
														<option value="1">Tingkat Lokal</option>
														<option value="4">Tingkat Internasional</option>
														<option value="3">Tingkat Nasional</option>
													<?php }else{ ?>
														<option value="<?php echo $value->prestasi_non_akademik; ?>">
															<?php
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
															?>
														</option>
														<option value="">--</option>
														<option value="0">Tidak Ada Prestasi</option>
														<option value="2">Tingkat Regional</option>
														<option value="1">Tingkat Lokal</option>
														<option value="4">Tingkat Internasional</option>
														<option value="3">Tingkat Nasional</option>
													<?php } ?>
												</select>
											</div>

											<div class="form-group">
												<label>Keterangan Prestasi Non Akademik</label>
												<textarea placeholder="Silahkan Isi Keterangan Prestasi Non Akademik Anda (Jika Memiliki Prestasi Non Akademik)" value="<?php echo $value->ket_prestasi_non_akademik?>" class="form-control" name="ket_prestasi_non_akademik"><?php echo $value->ket_prestasi_non_akademik; ?></textarea>
											</div>

											<div class="text-center">
												<button type="submit" class="btn btn-success">
												<span class="glyphicon glyphicon-ok"></span>
													Simpan
												</button>
											</div>
										</form>
									</div> <!--End class="tab-pane" id="edit"-->
								<?php } ?>
							</div> <!--End class="tab-content"-->
						</div>
						</div> <!--End class="panel-body"-->

						<div class="panel-footer padding-mack">
							<div class="float-left">
								<a href="<?=base_url('C_mhs/step4'); ?>" class="btn btn-primary">
									<i class="fa fa-check-circle-o"></i>
									&laquo; Tahap 4
								</a>
							</div>

							<div class="float-right">
								<a href="<?=base_url('C_mhs/step6'); ?>" class="btn btn-primary">
									<i class="fa fa-check-circle-o"></i>
									Tahap 6 &raquo;
								</a>
							</div>
						</div>
					</div> <!--End class="panel panel-primary"-->

				</div> <!--End class="panel group"-->
			</div> <!--End class="row"-->
		</div> <!--End class="container col-md-8"-->
		<div class="col-md-12 panel-footer" style="background-color: #00a65a !important; width: 100%; left: 0px;">
			<div class="footer text-center" style="color:grey; font-size: 12px;">
				<?php $this->load->view('project_bidikmisi/footer/footer'); ?>
			</div>
		</div>
	</body>
</html>
