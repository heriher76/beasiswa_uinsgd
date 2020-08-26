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
			<?php echo $this->session->flashdata('direct4_success'); ?>
			<?php echo $this->session->flashdata('upload_foto_keterangan_kepemilikan_rumah_success'); ?>
			<?php echo $this->session->flashdata('upload_foto_keterangan_kepemilikan_rumah_error'); ?>
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

							<p>Silahkan klik tabs Edit Data Kondisi Rumah dibawah, jika ada kesalahan/data anda belum diisi</p>
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
							<a href="<?=base_url('C_mhs/step4'); ?>" class="btn btnn active activee">4</a> <span class="glyphicon glyphicon-arrow-right"></span>
							<a href="<?=base_url('C_mhs/step5'); ?>" class="btn btnn">5</a> <span class="glyphicon glyphicon-arrow-right"></span>
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
								<a href="<?=base_url('C_mhs/step4'); ?>" class="btn btnn active activee">4</a>
								<br><br><!-- <center><span class="glyphicon glyphicon-arrow-down"></center> -->
								<a href="<?=base_url('C_mhs/step5'); ?>" class="btn btnn">5</a>
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
							<h3><span class="label label-default">Tahap 4 Data Kondisi Rumah</span></h3>
								<br>
								<a class="btn btn-success" href="#edit" data-toggle="tab"><i class="glyphicon glyphicon-pencil"></i> Edit Data Kondisi Rumah</a>
								<br><br>
								<ul class="nav nav-tabs" style="border: none;">
									<!-- <li><a href="#data" data-toggle="tab">Data Identitas Diri</a></li> -->
									<li></li>
								</ul>

							<div class="tab-content">
								<div class="tab-pane active" id="data">
									<?php foreach ($data_diri as $value) { ?>

									<!--Data Kondisi Rumah-->
									<table class="table">
										<tr>
											<td>Luas Rumah</td>
											<td>:</td>
											<td><?php
												if($value->luas_rumah == '1'){
													echo "> 120 Meter Persegi";
												}else if($value->luas_rumah == '2'){
													echo "81 - 120 Meter Persegi";
												}else if($value->luas_rumah == '3'){
													echo "41 - 80 Meter Persegi";
												}else if($value->luas_rumah == '4'){
													echo "< 40 Meter Persegi atau Tidak Memiliki Rumah";
												}
											?></td>
											<td><b class="asterik">*</b></td>
										</tr>

										<tr>
											<td>Pajak Bumi Bangunan</td>
											<td>:</td>
											<td><?php
												if($value->pbb == '1'){
													echo "> 100.000";
												}else if($value->pbb == '2'){
													echo "76.000 - 100.000";
												}else if($value->pbb == '3'){
													echo "26.000 - 75.000";
												}else if($value->pbb == '4'){
													echo "< 25.000";
												}
											?></td>
											<td><b class="asterik">*</b></td>
										</tr>

										<tr>
											<td>Rekening Listrik/Bulan</td>
											<td>:</td>
											<td><?php
												if($value->rek_listrik_per_bulan == '1'){
													echo "> 100.000";
												}else if($value->rek_listrik_per_bulan == '2'){
													echo "76.000 - 100.000";
												}else if($value->rek_listrik_per_bulan == '3'){
													echo "26.000 - 75.000";
												}else if($value->rek_listrik_per_bulan == '4'){
													echo "< 25.000";
												}
											?></td>
											<td><b class="asterik">*</b></td>
										</tr>

										<tr>
											<td>Kepemilikan Rumah</td>
											<td>:</td>
											<td><?php echo $value->kepemilikan_rumah; ?></td>
											<td><b class="asterik">*</b></td>
										</tr>

										<tr>
											<td>Jenis Dinding Tempat Tinggal</td>
											<td>:</td>
											<td><?php echo $value->jenis_dinding; ?></td>
											<td><b class="asterik">*</b></td>
										</tr>

										<tr>
											<td>Fasilitas Toilet</td>
											<td>:</td>
											<td><?php echo $value->fasilitas_jamban; ?></td>
											<td><b class="asterik">*</b></td>
										</tr>

										<tr>
											<td>Sumber Penerangan</td>
											<td>:</td>
											<td><?php echo $value->sumber_penerangan; ?></td>
											<td><b class="asterik">*</b></td>
										</tr>

										<tr>
											<td>Sumber Air</td>
											<td>:</td>
											<td><?php echo $value->sumber_air; ?></td>
											<td><b class="asterik">*</b></td>
										</tr>

										<tr>
											<td>Bahan Bakar Dapur</td>
											<td>:</td>
											<td><?php echo $value->bahan_bakar_dapur; ?></td>
											<td><b class="asterik">*</b></td>
										</tr>

										<tr>
											<td>Jarak Rumah dari Pusat Kota/Kabupaten</td>
											<td>:</td>
											<td><?php echo $value->jarak; ?> KM</td>
											<td><b class="asterik">*</b></td>
										</tr>

										<tr>
											<td>Kondisi Jalan Menuju Rumah</td>
											<td>:</td>
											<td><?php echo $value->kondisi_jalan; ?></td>
											<td><b class="asterik">*</b></td>
										</tr>

										<tr>
											<td>Mata Pencaharian Setempat Pada Umumnya</td>
											<td>:</td>
											<td><?php echo $value->mata_pencaharian; ?></td>
											<td><b class="asterik">*</b></td>
										</tr>

										<tr>
											<td>Upload Foto Surat Keterangan Kepemilikan Rumah</td>
											<td>:</td>
											<td> </td>
											<td><b class="asterik">*</b></td>
										</tr>
									</table>
									<!--End Data Kondisi Rumah-->
								</div> <!--End class="tab-pane" id="data"-->

								<div class="tab-pane" id="edit">

									<form action="<?=base_url('C_mhs/direct4'); ?>" method="POST">
										<div class="form-group">
											<label>Luas Rumah <i class="asterik">*</i></label>
											<select class="form-control input" required="required" name="luas_rumah">
												<?php if($value->luas_rumah == null || $value->luas_rumah == '0') { ?>
													<option value="">-Pilih SalahSatu-</option>
													<option value="1">> 120 Meter Persegi</option>
													<option value="2">81 - 120 Meter Persegi</option>
													<option value="3">41 - 80 Meter Persegi</option>
													<option value="4">< 40 Meter Persegi atau Tidak Memiliki Rumah</option>
												<?php }else{ ?>
													<option value="<?php echo $value->luas_rumah; ?>"><?php
														if($value->luas_rumah == '1'){
															echo "> 120 Meter Persegi";
														}else if($value->luas_rumah == '2'){
															echo "81 - 120 Meter Persegi";
														}else if($value->luas_rumah == '3'){
															echo "41 - 80 Meter Persegi";
														}else if($value->luas_rumah == '4'){
															echo "< 40 Meter Persegi atau Tidak Memiliki Rumah";
														}
													?></option>
													<option value="">--</option>
													<option value="1">> 120 Meter Persegi</option>
													<option value="4">< 40 Meter Persegi</option>
													<option value="3">41 - 80 Meter Persegi</option>
													<option value="2">81 - 120 Meter Persegi</option>
												<?php } ?>
											</select>
										</div>

										<div class="form-group">
											<label>Pajak Bumi Bangunan (PBB) <i class="asterik">*</i></label>
											<select class="form-control input" required="required" name="pbb">
												<?php if($value->pbb == null || $value->pbb == '0') { ?>
													<option value="">-Pilih SalahSatu-</option>
													<option value="3">26.000 - 75.000</option>
													<option value="2">76.000 - 100.000</option>
													<option value="4">< 25.000</option>
													<option value="1">> 100.000</option>
												<?php }else{ ?>
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
													<option value="">--</option>
													<option value="3">26.000 - 75.000</option>
													<option value="2">76.000 - 100.000</option>
													<option value="4">< 25.000</option>
													<option value="1">> 100.000</option>
												<?php } ?>
											</select>
										</div>

										<div class="form-group">
											<label>Rekening Listrik Per Bulan <i class="asterik">*</i></label>
											<select class="form-control input" required="required" name="rek_listrik_per_bulan">
												<?php if($value->rek_listrik_per_bulan == null || $value->rek_listrik_per_bulan == '0') { ?>
													<option value="">-Pilih SalahSatu-</option>
													<option value="4">< 25.000</option>
													<option value="2">76.000 - 100.000</option>
													<option value="1">> 100.000</option>
													<option value="3">26.000 - 75.000</option>

												<?php }else{ ?>
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
													<option value="">--</option>
													<option value="4">< 25.000</option>
													<option value="2">76.000 - 100.000</option>
													<option value="1">> 100.000</option>
													<option value="3">26.000 - 75.000</option>
												<?php } ?>
											</select>
										</div>

										<div class="form-group">
											<label>Kepemilikan Rumah <i class="asterik">*</i></label>
											<select class="form-control input" required="required" name="kepemilikan_rumah">
												<?php if($value->kepemilikan_rumah == null) { ?>
													<option value="">-Pilih SalahSatu-</option>
													<option value="Sendiri">Sendiri</option>
													<option value="Ngontrak">Ngontrak</option>
													<option value="Menumpang">Menumpang</option>
													<option value="Lain - Lain">Lain - Lain</option>
												<?php }else{ ?>
													<option value="<?php echo $value->kepemilikan_rumah; ?>"><?php echo $value->kepemilikan_rumah; ?></option>
													<option value="">--</option>
													<option value="Sendiri">Sendiri</option>
													<option value="Ngontrak">Ngontrak</option>
													<option value="Menumpang">Menumpang</option>
													<option value="Lain - Lain">Lain - Lain</option>
												<?php } ?>
											</select>
										</div>

										<div class="form-group">
											<label>Jenis Dinding Tempat Tinggal <i class="asterik">*</i></label>
											<select class="form-control input" required="required" name="jenis_dinding">
												<?php if($value->jenis_dinding == null) { ?>
													<option value="">-Pilih SalahSatu-</option>
													<option value="Bata">Bata</option>
													<option value="Bilik">Bilik</option>
													<option value="Kayu">Kayu</option>
													<option value="Lain - Lain">Lain - Lain</option>
												<?php }else{ ?>
													<option value="<?php echo $value->jenis_dinding; ?>"><?php echo $value->jenis_dinding; ?></option>
													<option value="">--</option>
													<option value="Bata">Bata</option>
													<option value="Bilik">Bilik</option>
													<option value="Kayu">Kayu</option>
													<option value="Lain - Lain">Lain - Lain</option>
												<?php } ?>
											</select>
										</div>

										<div class="form-group">
											<label>Fasilitas Toilet <i class="asterik">*</i></label>
											<select class="form-control input" required="required" name="fasilitas_jamban">
												<?php if($value->fasilitas_jamban == null) { ?>
													<option value="">-Pilih SalahSatu-</option>
													<option value="Di dalam">Di dalam</option>
													<option value="Di luar">Di luar</option>
													<option value="Tidak Punya">Tidak Punya</option>
													<option value="Lain - Lain">Lain - Lain</option>
												<?php }else{ ?>
													<option value="<?php echo $value->fasilitas_jamban; ?>"><?php echo $value->fasilitas_jamban; ?></option>
													<option value="">--</option>
													<option value="Di dalam">Di dalam</option>
													<option value="Di luar">Di luar</option>
													<option value="Tidak Punya">Tidak Punya</option>
													<option value="Lain - Lain">Lain - Lain</option>
												<?php } ?>
											</select>
										</div>

										<div class="form-group">
											<label>Sumber Penerangan <i class="asterik">*</i></label>
											<select class="form-control input" required="required" name="sumber_penerangan">
												<?php if($value->sumber_penerangan == null) { ?>
													<option value="">-Pilih SalahSatu-</option>
													<option value="PLN">PLN</option>
													<option value="Diesel">Diesel</option>
													<option value="Tidak Ada Listrik">Tidak Ada Listrik</option>
													<option value="Lain - Lain">Lain - Lain</option>
												<?php }else{ ?>
													<option value="<?php echo $value->sumber_penerangan; ?>"><?php echo $value->sumber_penerangan; ?></option>
													<option value="">--</option>
													<option value="PLN">PLN</option>
													<option value="Diesel">Diesel</option>
													<option value="Tidak Ada Listrik">Tidak Ada Listrik</option>
													<option value="Lain - Lain">Lain - Lain</option>
												<?php } ?>
											</select>
										</div>

										<div class="form-group">
											<label>Sumber Air <i class="asterik">*</i></label>
											<select class="form-control input" required="required" name="sumber_air">
												<?php if($value->sumber_air == null) { ?>
													<option value="">-Pilih SalahSatu-</option>
													<option value="PDAM">PDAM</option>
													<option value="Sungai">Sungai</option>
													<option value="Sumur Pompa">Sumur Pompa</option>
													<option value="Lain - Lain">Lain - Lain</option>
												<?php }else{ ?>
													<option value="<?php echo $value->sumber_air; ?>"><?php echo $value->sumber_air; ?></option>
													<option value="">--</option>
													<option value="PDAM">PDAM</option>
													<option value="Sungai">Sungai</option>
													<option value="Sumur Pompa">Sumur Pompa</option>
													<option value="Lain - Lain">Lain - Lain</option>
												<?php } ?>
											</select>
										</div>

										<div class="form-group">
											<label>Bahan Bakar Dapur <i class="asterik">*</i></label>
											<select class="form-control input" required="required" name="bahan_bakar_dapur">
												<?php if($value->bahan_bakar_dapur == null) { ?>
													<option value="">-Pilih SalahSatu-</option>
													<option value="Gas">Gas</option>
													<option value="Kayu Bakar">Kayu Bakar</option>
													<option value="Lain - Lain">Lain - Lain</option>
												<?php }else{ ?>
													<option value="<?php echo $value->bahan_bakar_dapur; ?>"><?php echo $value->bahan_bakar_dapur; ?></option>
													<option value="">--</option>
													<option value="Gas">Gas</option>
													<option value="Kayu Bakar">Kayu Bakar</option>
													<option value="Lain - Lain">Lain - Lain</option>
												<?php } ?>
											</select>
										</div>

										<div class="form-group">
											<label>Jarak Rumah dari Pusat Kota/Kabupaten <i class="asterik">*</i></label>
											<?php if($value->jarak == NULL) { ?>
												<input type="number" name="jarak" class="form-control input" required="required" placeholder="Berapa KM">
											<?php }else{ ?>
												<input type="number" name="jarak" class="form-control input" required="required" placeholder="Berapa KM" value="<?php echo $value->jarak; ?>">
											<?php } ?>
										</div>

										<div class="form-group">
											<label>Kondisi Jalan Menuju Rumah <i class="asterik">*</i></label>
											<select class="form-control input" required="required" name="kondisi_jalan">
												<?php if($value->kondisi_jalan == null) { ?>
													<option value="">-Pilih SalahSatu-</option>
													<option value="Aspal">Aspal</option>
													<option value="Batu">Batu</option>
													<option value="Tanah">Tanah</option>
													<option value="Rusak Parah">Rusak Parah</option>
												<?php }else{ ?>
													<option value="<?php echo $value->kondisi_jalan; ?>"><?php echo $value->kondisi_jalan; ?></option>
													<option value="">--</option>
													<option value="Aspal">Aspal</option>
													<option value="Batu">Batu</option>
													<option value="Tanah">Tanah</option>
													<option value="Rusak Parah">Rusak Parah</option>
												<?php } ?>
											</select>
										</div>

										<div class="form-group">
											<label>Mata Pencaharian Masyarakat Setempat Pada Umumnya <i class="asterik">*</i></label>
											<select class="form-control input" required="required" name="mata_pencaharian">
												<?php if($value->mata_pencaharian == null) { ?>
													<option value="">-Pilih SalahSatu-</option>
													<option value="Petani">Petani</option>
													<option value="Wiraswasta">Wiraswasta</option>
													<option value="Buruh Lepas">Buruh Lepas</option>
													<option value="PNS">PNS</option>
													<option value="Lain - Lain">Lain - Lain</option>
												<?php }else{ ?>
													<option value="<?php echo $value->mata_pencaharian; ?>"><?php echo $value->mata_pencaharian; ?></option>
													<option value="">--</option>
													<option value="Petani">Petani</option>
													<option value="Wiraswasta">Wiraswasta</option>
													<option value="Buruh Lepas">Buruh Lepas</option>
													<option value="PNS">PNS</option>
													<option value="Lain - Lain">Lain - Lain</option>
												<?php } ?>
											</select>
										</div>

										<div class="form-group">
											<label>Foto Surat Keterangan Kepemilikan Rumah</label>
											<br/>
											<input type="checkbox" name="ubah_foto_keterangan_kepemilikan_rumah" value="3">&nbsp;&nbsp;Ceklis, Jika Ingin mengubah Foto Surat Keterangan Kepemilikan Rumah
											<input type="file" class="form-control" name="foto_keterangan_kepemilikan_rumah">
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
								<a href="<?=base_url('C_mhs/step3'); ?>" class="btn btn-primary">
									<i class="fa fa-check-circle-o"></i>
									&laquo; Tahap 3
								</a>
							</div>

							<div class="float-right">
								<a href="<?=base_url('C_mhs/step5'); ?>" class="btn btn-primary">
									<i class="fa fa-check-circle-o"></i>
									Tahap 5 &raquo;
								</a>
							</div>
						</div>
					</div> <!--End class="panel panel-primary"-->
				</div> <!--End class="panel group"-->
			</div> <!--End Class="row"-->
		</div> <!--End class="container col-md-8"-->
		<div class="col-md-12 panel-footer" style="background-color: #00a65a !important; width: 100%; left: 0px;">
			<div class="footer text-center" style="color:grey; font-size: 12px;">
				<?php $this->load->view('project_bidikmisi/footer/footer'); ?>
			</div>
		</div>
	</body>
</html>
