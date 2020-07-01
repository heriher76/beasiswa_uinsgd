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
		<script type="text/javascript">
				//check keterangan
				function proses(){
					var keterangan=document.getElementById("pekerjaan_ayah").value;
					var keterangan_pns = document.getElementById("keterangan_pns");
					var keterangan_wiraswasta = document.getElementById("keterangan_wiraswasta");
					var keterangan_tukang = document.getElementById("keterangan_tukang");

					if(keterangan=="1"){
						keterangan_wiraswasta.style.display = "none";
						keterangan_tukang.style.display = "none";
						keterangan_pns.style.display = "block";
					}else if(keterangan=="2"){
						keterangan_wiraswasta.style.display = "block";
						keterangan_tukang.style.display = "none";
						keterangan_pns.style.display = "none";
					}else if(keterangan=="3"){
						keterangan_wiraswasta.style.display = "none";
						keterangan_tukang.style.display = "block";
						keterangan_pns.style.display = "none";
					}else{
						keterangan_wiraswasta.style.display = "none";
						keterangan_tukang.style.display = "none";
						keterangan_pns.style.display = "none";
					}
				}

				function proses2(){
					var keterangan=document.getElementById("pekerjaan_ibu").value;
					var keterangan_pns2 = document.getElementById("keterangan_pns2");
					var keterangan_wiraswasta2 = document.getElementById("keterangan_wiraswasta2");

					if(keterangan=="PNS/TNI/POLRI"){
						keterangan_pns2.style.display = "block";
						keterangan_wiraswasta2.style.display = "none";
					}else if(keterangan=="Wiraswasta"){
						keterangan_pns2.style.display = "none";
						keterangan_wiraswasta2.style.display = "block";
					}else{
						keterangan_pns2.style.display = "none";
						keterangan_wiraswasta2.style.display = "none";
					}
				}
				//End check keterangan
			</script>

			<div class="notif notifikasi col-md-offset-8">
				<?php echo $this->session->flashdata('direct3_success'); ?>
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

	    						<p>Silahkan isi data orang tua anda, jika ada kesalahan/belum terisi silahkan klik tabs <b>Edit Data Orang Tua</b> dibawah.</p>
	    						<p>Jika orang tua anda sudah almarhum/almarhumah silahkan edit, dibawah nama orang tua anda silahkan ceklis bagian almarhum/almarhumah. </p>
	    						<p>Jika sudah diisi Silahkan klik Tombol Lanjut</p>
						</div>
						<br>

						<div class="panel panel-success">
							<div class="panel-heading hidden-xs">
								<!--Sidebar-->
								<center>
								<a href="<?=base_url('C_mhs'); ?>" class="btn btnn">1</a> <span class="glyphicon glyphicon-arrow-right"></span>
								<a href="<?=base_url('C_mhs/step2'); ?>" class="btn btnn">2</a> <span class="glyphicon glyphicon-arrow-right"></span>
								<a href="<?=base_url('C_mhs/step3'); ?>" class="btn btnn active activee">3</a> <span class="glyphicon glyphicon-arrow-right"></span>
								<a href="<?=base_url('C_mhs/step4'); ?>" class="btn btnn">4</a> <span class="glyphicon glyphicon-arrow-right"></span>
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
									<a href="<?=base_url('C_mhs/step3'); ?>" class="btn btnn active activee">3</a>
									<br><br><!-- <center><span class="glyphicon glyphicon-arrow-down"></center> -->
									<a href="<?=base_url('C_mhs/step4'); ?>" class="btn btnn">4</a>
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
								<h3><span class="label label-default">Tahap 3 Data Orang Tua</span></h3>
								<br>
								<a class="btn btn-success" href="#edit" data-toggle="tab"><i class="glyphicon glyphicon-pencil"></i> Edit Data Orang Tua</a>
								<br><br>
								<ul class="nav nav-tabs" style="border: none;">
									<!-- <li><a href="#data" data-toggle="tab">Data Identitas Diri</a></li> -->
									<li></li>
								</ul>

								<div class="tab-content">
									<div class="tab-pane active" id="data">
										<?php foreach($data_diri as $value) { ?>
										<table class="table">
											<tr>
												<td>Nama Ayah</td>
												<td>:</td>
												<td><?php echo $value->nama_ayah; ?>
												<?php
												if($value->almarhum == '40'){
													echo "(Almarhum)";
												}else if($value->almarhum == null || $value->almarhum == '0'){
													echo "";
												}
												?></td>
												<td><b class="asterik">*</b></td>
											</tr>

											<tr>
												<td>Nama Ibu</td>
												<td>:</td>
												<td><?php echo $value->nama_ibu; ?>
												<?php
												if($value->almarhumah == '20'){
													echo "(Almarhumah)";
												}else if($value->almarhumah == null || $value->almarhumah == '0'){
													echo "";
												}
												?></td>
												<td><b class="asterik">*</b></td>
											</tr>

											<tr>
												<td>Alamat Orang Tua</td>
												<td>:</td>
												<td><?php echo $value->alamat_ortu; ?></td>
												<td><b class="asterik">*</b></td>
											</tr>

											<tr>
												<td>RT Orang Tua</td>
												<td>:</td>
												<td><?php echo $value->rt_3; ?></td>
												<td><b class="asterik">*</b></td>
											</tr>

											<tr>
												<td>RW Orang Tua</td>
												<td>:</td>
												<td><?php echo $value->rw_3; ?></td>
												<td><b class="asterik">*</b></td>
											</tr>

											<tr>
												<td>Provinsi Orang Tua</td>
												<td>:</td>
												<td><?php
												foreach ($propinsi as $x_prov) {
													if($value->provinsi_ortu == $x_prov->id_propinsi){
														echo $x_prov->nama_propinsi;
													}
												}
												?></td>
												<td><b class="asterik">*</b></td>
											</tr>

											<tr>
												<td>Kab/Kota Orang Tua</td>
												<td>:</td>
												<td><?php
												foreach($kota as $x_kab_kota){
													if($value->kab_kota_ortu == $x_kab_kota->id_kota){
														echo $x_kab_kota->nama_kota;
													}
												}
												?></td>
												<td><b class="asterik">*</b></td>
											</tr>

											<tr>
												<td>Kecamatan Orang Tua</td>
												<td>:</td>
												<td><?php echo $value->kecamatan_3; ?></td>
												<td><b class="asterik">*</b></td>
											</tr>

											<tr>
												<td>Kelurahan Orang Tua</td>
												<td>:</td>
												<td><?php echo $value->kelurahan_3; ?></td>
												<td><b class="asterik">*</b></td>
											</tr>

											<tr>
												<td>No Telp/Hp Orang Tua</td>
												<td>:</td>
												<td><?php echo $value->no_telp_ortu; ?></td>
												<td><b class="asterik">*</b></td>
											</tr>

											<tr>
												<td>Kode Pos Orang Tua</td>
												<td>:</td>
												<td><?php echo $value->kode_pos_ortu; ?></td>
											</tr>

											<tr>
												<td>Pekerjaan Ayah</td>
												<td>:</td>
												<td><?php
												if($value->pekerjaan_ayah == '1'){
													echo "PNS/TNI/POLRI";
												}else if($value->pekerjaan_ayah == '2'){
													echo "Wiraswasta";
												}else if($value->pekerjaan_ayah == '3'){
													echo "Tukang";
												}else if($value->pekerjaan_ayah == '4'){
													echo "Buruh Tani/Petani";
												}
												?>
												</td>
												<td><b class="asterik">*</b></td>
											</tr>

											<?php if($value->pekerjaan_ayah == '1') { ?>
											<tr>
												<td>Keterangan PNS/TNI/POLRI</td>
												<td>:</td>
												<td><?php echo $value->ket_pns_tni_polri_ayah; ?></td>
											</tr>
											<?php }else if($value->pekerjaan_ayah == '2') { ?>

											<tr>
												<td>Keterangan Wiraswasta</td>
												<td>:</td>
												<td><?php echo $value->ket_wiraswasta_ayah; ?></td>
											</tr>
											<?php }else if($value->pekerjaan_ayah == '3') { ?>

											<tr>
												<td>Keterangan Tukang</td>
												<td>:</td>
												<td><?php echo $value->ket_tukang_ayah; ?></td>
											</tr>
											<?php } ?>

											<tr>
												<td>Pekerjaan Ibu</td>
												<td>:</td>
												<td><?php
												if($value->pekerjaan_ibu == 'PNS/TNI/POLRI'){
													echo "PNS/TNI/POLRI";
												}else if($value->pekerjaan_ibu == 'Wiraswasta'){
													echo "Wiraswasta";
												}else if($value->pekerjaan_ibu == 'Ibu Rumah Tangga'){
													echo "Ibu Rumah Tangga";
												}else if($value->pekerjaan_ibu == 'Buruh Tani/Petani'){
													echo "Buruh Tani/Petani";
												}
												?></td>
												<td><b class="asterik">*</b></td>
											</tr>

											<?php if($value->pekerjaan_ibu == 'PNS/TNI/POLRI') { ?>
											<tr>
												<td>Keterangan PNS/TNI/POLRI</td>
												<td>:</td>
												<td><?php echo $value->ket_pns_tni_polri_ibu; ?></td>
											</tr>
											<?php }else if($value->pekerjaan_ibu == 'Wiraswasta') { ?>
												<tr>
													<td>Keterangan Wiraswasta</td>
													<td>:</td>
													<td><?php echo $value->ket_wiraswasta_ibu; ?></td>
												</tr>
											<?php } ?>

											<tr>
												<td>Pendidikan Ayah</td>
												<td>:</td>
												<td><?php
													if($value->pendidikan_ayah == '1'){
														echo "> Sarjana";
													}else if($value->pendidikan_ayah == '2'){
														echo "SLTA/Sederajat";
													}else if($value->pendidikan_ayah == '3'){
														echo "SLTP/Sederajat";
													}else if($value->pendidikan_ayah == '4'){
														echo "SD/Tidak Sekolah";
													}
												?></td>
												<td><b class="asterik">*</b></td>
											</tr>

											<tr>
												<td>Pendidikan Ibu</td>
												<td>:</td>
												<td><?php echo $value->pendidikan_ibu; ?></td>
												<td><b class="asterik">*</b></td>
											</tr>

											<tr>
												<td>Penghasilan Ayah</td>
												<td>:</td>
												<td><?php
													if($value->penghasilan_ayah == '1'){
														echo "> 1.000.000";
													}else if($value->penghasilan_ayah == '2'){
														echo "751.000 s/d 1.000.000";
													}else if($value->penghasilan_ayah == '3'){
														echo "501.000 s/d 750.000";
													}else if($value->penghasilan_ayah == '4'){
														echo "< 500.000";
													}
												?></td>
												<td><b class="asterik">*</b></td>
											</tr>

											<tr>
												<td>Nominal Penghasilan Ayah</td>
												<td>:</td>
												<td><?php echo 'Rp '.number_format($value->nominal_peng_ayah); ?></td>
											</tr>

											<tr>
												<td>Penghasilan Ibu</td>
												<td>:</td>
												<td><?php
													if($value->penghasilan_ibu == '1'){
														echo "> 1.000.000";
													}else if($value->penghasilan_ibu == '2'){
														echo "751.000 s/d 1.000.000";
													}else if($value->penghasilan_ibu == '3'){
														echo "501.000 s/d 750.000";
													}else if($value->penghasilan_ibu == '4'){
														echo "< 500.000";
													}
												?></td>
												<td><b class="asterik">*</b></td>
											</tr>

											<tr>
												<td>Nominal Penghasilan Ibu</td>
												<td>:</td>
												<td><?php echo 'Rp '.number_format($value->nominal_peng_ibu); ?></td>
											</tr>

											<tr>
												<td>Jumlah Tanggungan</td>
												<td>:</td>
												<td><?php
													if($value->jumlah_saudara_kandung_tang_ortu == '1'){
														echo "< 3 Orang";
													}else if($value->jumlah_saudara_kandung_tang_ortu == '2'){
														echo "4 - 6 Orang";
													}else if($value->jumlah_saudara_kandung_tang_ortu == '3'){
														echo "7 - 8 Orang";
													}else if($value->jumlah_saudara_kandung_tang_ortu == '4'){
														echo "> 8 Orang";
													}
												?></td>
												<td><b class="asterik">*</b></td>
											</tr>
										</table>
									</div>

									<div class="tab-pane" id="edit">
										<form action="<?=base_url('C_mhs/direct3'); ?>" method="POST">
											<div class="form-group">
												<label>Nama Ayah <i class="asterik">*</i></label>
												<input class="form-control input" type="text" placeholder="Nama Ayah Anda" name="nama_ayah" required="required" value="<?php echo $value->nama_ayah; ?>">
											</div>

											<div class="form-group">
												<label>Status Almarhum Ayah</label>
												<br/>
												<?php if($value->almarhum == null || $value->almarhum == '0') { ?>
													<input id="checkbox1" type="checkbox" value="40" name="almarhum">
													<label for="checkbox1" class="input">
														Almarhum
													</label>
												<?php }else{ ?>
													<input id="checkbox1" type="checkbox" checked="checked" value="40" name="almarhum">
													<label for="checkbox1" class="input">
														Almarhum
													</label>
												<?php } ?>
											</div>

											<div class="form-group">
												<label>Nama Ibu <i class="asterik">*</i></label>
												<input class="form-control input" type="text" placeholder="Nama Ibu Anda" name="nama_ibu" required="required" value="<?php echo $value->nama_ibu; ?>">
											</div>

											<div class="form-group">
												<label>Status Almarhum Ibu</label>
												<br/>
												<?php if($value->almarhumah == null || $value->almarhumah == '0') { ?>
													<input type="checkbox" id="checkbox2" value="20" name="almarhumah">
													<label for="checkbox2" class="input">
														Almarhumah
													</label>
												<?php }else{ ?>
													<input type="checkbox" id="checkbox2" checked="checked" value="20" name="almarhumah">
													<label for="checkbox2" class="input">
														Almarhumah
													</label>
												<?php } ?>
											</div>

											<div class="form-group">
												<label>Alamat Orang Tua <i class="asterik">*</i></label>
												<textarea class="form-control input" type="text" name="alamat_ortu" placeholder="Alamat Ortu Anda" required="required"><?php echo $value->alamat_ortu; ?></textarea>
											</div>

											<div class="form-group">
												<label>RT Orang Tua <i class="asterik">*</i></label>
												<input class="form-control input" type="number" placeholder="Rukun Tetangga" name="rt_3" required="required" value="<?php echo $value->rt_3; ?>">
											</div>

											<div class="form-group">
												<label>RW Orang Tua <i class="asterik">*</i></label>
												<input class="form-control input" type="number" placeholder="Rukun Warga" name="rw_3" required="required" value="<?php echo $value->rw_3; ?>">
											</div>


											<div class="form-group">
												<label>Provinsi Orang Tua <i class="asterik">*</i></label>
												<select class="form-control input" required="required" name="asal_provinsi_ortu" id="provinsi2">
													<?php if($value->provinsi_ortu == null || $value->provinsi_ortu == '0') { ?>
													<option value="">-Pilih SalahSatu-</option>
													<?php
														//melakukan looping dari fungsi index di controller C_mhs
														foreach($propinsi as $data){
															echo "<option value='".$data->id_propinsi."'>".$data->nama_propinsi."</option>";
														}
													}else{
													?>
													<?php foreach ($propinsi as $x_prov) {
														if($value->provinsi_ortu == $x_prov->id_propinsi){
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
												<label>Kab/Kota Orang Tua <i class="asterik">*</i></label>
												<?php if($value->kab_kota_ortu == null || $value->kab_kota_ortu == '0') { ?>
													<select required="required" class="form-control input" name="kab_kota_ortu" id="kota2">
														<option value="">-Pilih SalahSatu-</option>
													</select>
													<div id="loading2">
														<img src="<?=base_url('assets/img/loading.gif'); ?>"><small>Loading..</small>
													</div>
												<?php }else{ ?>
													<select required="required" class="form-control input" name="kab_kota_ortu" id="kota2">
												<?php
													foreach ($kota as $x_kota) {
														if($value->kab_kota_ortu == $x_kota->id_kota) {
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
													<div id="loading2">
														<img src="<?=base_url('assets/img/loading.gif'); ?>"><small>Loading..</small>
													</div>
												<?php } ?>
											</div>

											<div class="form-group">
												<label>Kecamatan Orang Tua <i class="asterik">*</i></label>
												<input class="form-control input" type="text" placeholder="Kecamatan Anda" name="kecamatan_3" required="required" value="<?php echo $value->kecamatan_3; ?>">
											</div>

											<div class="form-group">
												<label>Kelurahan Orang Tua <i class="asterik">*</i></label>
												<input class="form-control input" type="text" placeholder="Kelurahan Anda" name="kelurahan_3" required="required" value="<?php echo $value->kelurahan_3; ?>">
											</div>

											<div class="form-group">
												<label>No Telp/Hp Orang Tua <i class="asterik">*</i></label>
												<input class="form-control input"  type="text" name="no_telp_ortu" required="required" placeholder="Contoh : 0883-2239-3343" value="<?php echo $value->no_telp_ortu; ?>">
											</div>

											<div class="form-group">
												<label>Kode Pos Orang Tua</label>
												<input class="form-control input"  type="text" name="kode_pos_ortu" placeholder="Kode Pos Ortu Anda" value="<?php echo $value->kode_pos_ortu; ?>">
											</div>

											<div class="form-group">
												<label>Pekerjaan Ayah <i class="asterik">*</i></label>
												<select class="form-control input" id="pekerjaan_ayah" onchange="proses()" required="required" name="pekerjaan_ayah">
													<?php if($value->pekerjaan_ayah == null || $value->pekerjaan_ayah == 0) { ?>
														<option value="">-Pilih SalahSatu-</option>
														<option value="4">Buruh Tani/Petani</option>
														<option value="1">PNS/TNI/POLRI</option>
														<option value="3">Tukang</option>
														<option value="2">Wiraswasta</option>
													<?php }else{ ?>
														<option value="<?php echo $value->pekerjaan_ayah; ?>">
															<?php
																if($value->pekerjaan_ayah == 1){
																	echo "PNS/TNI/POLRI";
																}else if($value->pekerjaan_ayah == 2) {
																	echo "Wiraswasta";
																}else if($value->pekerjaan_ayah == 3) {
																	echo "Tukang";
																}else if($value->pekerjaan_ayah == 4) {
																	echo "Buruh Tani/Petani";
																}
															?>
														</option>
														<option value="">--</option>
														<option value="4">Buruh Tani/Petani</option>
														<option value="1">PNS/TNI/POLRI</option>
														<option value="3">Tukang</option>
														<option value="2">Wiraswasta</option>
													<?php } ?>
												</select>
											</div>

											<div class="form-group">
												<?php if($value->pekerjaan_ayah == 1) { ?>
													<div id="keterangan_pns" style="display: block;">
														<label>Keterangan PNS/TNI/POLRI Ayah</label>
														<textarea class="form-control input" type="text" name="pns_tni_polri_ayah" placeholder="Keterangan PNS/TNI/POLRI Ayah"><?php echo $value->ket_pns_tni_polri_ayah; ?></textarea>
													</div>

													<div id="keterangan_wiraswasta" style="display: none;">
														<label>Keterangan Wiraswasta Ayah</label>
														<textarea  class="form-control input" type="text" name="wiraswasta_ayah" placeholder="Keterangan Wiraswasta Ayah"></textarea>
													</div>

													<div id="keterangan_tukang" style="display: none;">
														<label>Keterangan Tukang Ayah</label>
														<textarea class="form-control input" type="text" name="tukang_ayah" placeholder="Keterangan Tukang Ayah"></textarea>
													</div>
												<?php }else if($value->pekerjaan_ayah == 2){ ?>
													<div id="keterangan_pns" style="display: none;">
														<label>Keterangan PNS/TNI/POLRI Ayah</label>
														<textarea class="form-control input" type="text" name="pns_tni_polri_ayah" placeholder="Keterangan PNS/TNI/POLRI Ayah"></textarea>
													</div>

													<div id="keterangan_wiraswasta" style="display: block;">
														<label>Keterangan Wiraswasta Ayah</label>
														<textarea  class="form-control input" type="text" name="wiraswasta_ayah" placeholder="Keterangan Wiraswasta Ayah"><?php echo $value->ket_wiraswasta_ayah; ?></textarea>
													</div>

													<div id="keterangan_tukang" style="display: none;">
														<label>Keterangan Tukang Ayah</label>
														<textarea class="form-control input" type="text" name="tukang_ayah" placeholder="Keterangan Tukang Ayah"></textarea>
													</div>
												<?php }else if($value->pekerjaan_ayah == 3) { ?>
													<div id="keterangan_pns" style="display: none;">
														<label>Keterangan PNS/TNI/POLRI Ayah</label>
														<textarea class="form-control input" type="text" name="pns_tni_polri_ayah" placeholder="Keterangan PNS/TNI/POLRI Ayah"></textarea>
													</div>

													<div id="keterangan_wiraswasta" style="display: none;">
														<label>Keterangan Wiraswasta Ayah</label>
														<textarea  class="form-control input" type="text" name="wiraswasta_ayah" placeholder="Keterangan Wiraswasta Ayah"></textarea>
													</div>

													<div id="keterangan_tukang" style="display: block;">
														<label>Keterangan Tukang Ayah</label>
														<textarea class="form-control input" type="text" name="tukang_ayah" placeholder="Keterangan Tukang Ayah"><?php echo $value->ket_tukang_ayah; ?></textarea>
													</div>
												<?php }else{ ?>
													<div id="keterangan_pns" style="display: none;">
														<label>Keterangan PNS/TNI/POLRI Ayah</label>
														<textarea class="form-control input" type="text" name="pns_tni_polri_ayah" placeholder="Keterangan PNS/TNI/POLRI Ayah"></textarea>
													</div>

													<div id="keterangan_wiraswasta" style="display: none;">
														<label>Keterangan Wiraswasta Ayah</label>
														<textarea  class="form-control input" type="text" name="wiraswasta_ayah" placeholder="Keterangan Wiraswasta Ayah"></textarea>
													</div>

													<div id="keterangan_tukang" style="display: none;">
														<label>Keterangan Tukang Ayah</label>
														<textarea class="form-control input" type="text" name="tukang_ayah" placeholder="Keterangan Tukang Ayah"></textarea>
													</div>
												<?php } ?>
											</div>

											<div class="form-group">
												<label>Pekerjaan Ibu <i class="asterik">*</i></label>
												<select class="form-control input" id="pekerjaan_ibu" onchange="proses2()" required="required" name="pekerjaan_ibu">
													<?php if($value->pekerjaan_ibu == null) { ?>
														<option value="">-Pilih SalahSatu-</option>
														<option value="PNS/TNI/POLRI">PNS/TNI/POLRI</option>
														<option value="Wiraswasta">Wiraswasta</option>
														<option value="Ibu Rumah Tangga">Ibu Rumah Tangga</option>
														<option value="Buruh Tani/Petani">Buruh Tani/Petani</option>
													<?php }else{ ?>
														<option value="<?php echo $value->pekerjaan_ibu; ?>"><?php echo $value->pekerjaan_ibu; ?></option>
														<option value="">--</option>
														<option value="PNS/TNI/POLRI">PNS/TNI/POLRI</option>
														<option value="Wiraswasta">Wiraswasta</option>
														<option value="Ibu Rumah Tangga">Ibu Rumah Tangga</option>
														<option value="Buruh Tani/Petani">Buruh Tani/Petani</option>
													<?php } ?>
												</select>
											</div>

											<div class="form-group">
												<?php if($value->pekerjaan_ibu == 1) { ?>
													<div id="keterangan_pns2" style="display: block;">
														<label>Keterangan PNS/TNI/POLRI Ibu</label>
														<textarea class="form-control input" type="text" name="pns_tni_polri_ibu" placeholder="Keterangan PNS/TNI/POLRI Ibu"><?php echo $value->ket_pns_tni_polri_ibu; ?></textarea>
													</div>

													<div id="keterangan_wiraswasta2" style="display: none;">
														<label>Keterangan Wiraswasta Ibu</label>
														<textarea style="display: none;" id="keterangan_wiraswasta2"  class="form-control input" type="text" name="wiraswasta_ibu" placeholder="Keterangan Wiraswasta Ibu"></textarea>
													</div>
												<?php }else if($value->pekerjaan_ibu == 2){ ?>
													<div id="keterangan_pns2" style="display: none;">
														<label>Keterangan PNS/TNI/POLRI Ibu</label>
														<textarea class="form-control input" type="text" name="pns_tni_polri_ibu" placeholder="Keterangan PNS/TNI/POLRI Ibu"></textarea>
													</div>

													<div id="keterangan_wiraswasta2" style="display: block;">
														<label>Keterangan Wiraswasta Ibu</label>
														<textarea class="form-control input" type="text" name="wiraswasta_ibu" placeholder="Keterangan Wiraswasta Ibu"><?php echo $value->ket_wiraswasta_ibu; ?></textarea>
													</div>
												<?php }else{ ?>
													<div id="keterangan_pns2" style="display: none;">
														<label>Keterangan PNS/TNI/POLRI Ibu</label>
														<textarea class="form-control input" type="text" name="pns_tni_polri_ibu" placeholder="Keterangan PNS/TNI/POLRI Ibu"></textarea>
													</div>

													<div id="keterangan_wiraswasta2" style="display: none;">
														<label>Keterangan Wiraswasta Ibu</label>
														<textarea class="form-control input" type="text" name="wiraswasta_ibu" placeholder="Keterangan Wiraswasta Ibu"></textarea>
													</div>
												<?php } ?>
											</div>

											<div class="form-group">
												<label>Pendidikan Ayah <i class="asterik">*</i></label>
												<select class="form-control input" required="required" name="pendidikan_ayah">
													<?php if($value->pendidikan_ayah == null || $value->pendidikan_ayah == '0') { ?>
														<option value="">-Pilih SalahSatu-</option>
														<option value="3">SLTP/Sederajat</option>
														<option value="2">SLTA/Sederajat</option>
														<option value="4">SD/Tidak Sekolah</option>
														<option value="1">>Sarjana</option>
													<?php }else{ ?>
														<option value="<?php echo $value->pendidikan_ayah; ?>">
														<?php
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
														<option value="">--</option>
														<option value="3">SLTP/Sederajat</option>
														<option value="2">SLTA/Sederajat</option>
														<option value="4">SD/Tidak Sekolah</option>
														<option value="1">>Sarjana</option>
													<?php } ?>
												</select>
											</div>

											<div class="form-group">
												<label>Pendidikan Ibu <i class="asterik">*</i></label>
												<select required="required" name="pendidikan_ibu" class="form-control input">
													<?php if($value->pendidikan_ibu == null) { ?>
														<option value="">-Pilih SalahSatu-</option>
														<option value="> Sarjana">> Sarjana</option>
														<option value="SLTA/Sederajat">SLTA/Sederajat</option>
														<option value="SLTP/Sederajat">SLTP/Sederajat</option>
														<option value="SD/Tidak Sekolah">SD/Tidak Sekolah</option>
													<?php }else{ ?>
														<option value="<?php echo $value->pendidikan_ibu; ?>"><?php echo $value->pendidikan_ibu; ?></option>
														<option value="">--</option>
														<option value="> Sarjana">> Sarjana</option>
														<option value="SLTA/Sederajat">SLTA/Sederajat</option>
														<option value="SLTP/Sederajat">SLTP/Sederajat</option>
														<option value="SD/Tidak Sekolah">SD/Tidak Sekolah</option>
													<?php } ?>
												</select>
											</div>

											<div class="form-group">
												<label>Penghasilan Ayah <i class="asterik">*</i></label>
												<select class="form-control input" required="required" name="penghasilan_ayah">
													<?php if($value->penghasilan_ayah == null || $value->penghasilan_ayah == '0') {?>
														<option value="">-Pilih SalahSatu-</option>
														<option value="2">751.000 s/d 1.000.000</option>
														<option value="1">> 1.000.000</option>
														<option value="4">< 500.000</option>
														<option value="3">501.000 s/d 750.000</option>
													<?php }else{ ?>
														<option value="<?php echo $value->penghasilan_ayah; ?>">
															<?php
																if($value->penghasilan_ayah == '1'){
																	echo "> 1.000.000";
																}else if($value->penghasilan_ayah == '2'){
																	echo "751.000 s/d 1.000.000";
																}else if($value->penghasilan_ayah == '3'){
																	echo "501.000 s/d 750.000";
																}else if($value->penghasilan_ayah == '4'){
																	echo "< 500.000";
																}
															?>
														</option>
														<option value="">--</option>
														<option value="2">751.000 s/d 1.000.000</option>
														<option value="1">> 1.000.000</option>
														<option value="4">< 500.000</option>
														<option value="3">501.000 s/d 750.000</option>
													<?php } ?>
												</select>
											</div>

											<div class="form-group">
												<label>Nominal Penghasilan Ayah</label>
												<input class="form-control input" type="number" min="0" name="nominal_penghasilan_ayah" placeholder="Contoh : 1000000" value="<?php echo $value->nominal_peng_ayah; ?>">
											</div>

											<div class="form-group">
												<label>Penghasilan Ibu <i class="asterik">*</i></label>
												<select class="form-control input" required="required" name="penghasilan_ibu">
													<?php if($value->penghasilan_ibu == null || $value->penghasilan_ibu == '0') { ?>
														<option value="">-Pilih SalahSatu-</option>
														<option value="4">< 500.000</option>
														<option value="2">751.000 s/d 1.000.000</option>
														<option value="3">501.000 s/d 750.000</option>
														<option value="1">> 1.000.000</option>
													<?php }else{ ?>
														<option value="<?php echo $value->penghasilan_ibu; ?>">
														<?php
															if($value->penghasilan_ibu == '1'){
																echo "> 1.000.000";
															}else if($value->penghasilan_ibu == '2'){
																echo "751.000 s/d 1.000.000";
															}else if($value->penghasilan_ibu == '3'){
																echo "501.000 s/d 750.000";
															}else if($value->penghasilan_ibu == '4'){
																echo "< 500.000";
															}
														?>
														</option>
														<option value="">--</option>
														<option value="4">< 500.000</option>
														<option value="2">751.000 s/d 1.000.000</option>
														<option value="3">501.000 s/d 750.000</option>
														<option value="1">> 1.000.000</option>
													<?php } ?>
												</select>
											</div>

											<div class="form-group">
												<label>Nominal Penghasilan Ibu</label>
												<input class="form-control input" type="number" min="0" name="nominal_penghasilan_ibu" placeholder="Contoh : 1000000" value="<?php echo $value->nominal_peng_ibu; ?>">
											</div>

											<div class="form-group">
												<label>Jumlah Tanggungan <i class="asterik">*</i></label>
												<select class="form-control input" required="required" name="saudara_kandung">
													<?php if($value->jumlah_saudara_kandung_tang_ortu == null || $value->jumlah_saudara_kandung_tang_ortu == '0') { ?>
														<option value="">-Pilih SalahSatu-</option>
														<option value="2">4 - 6 Orang</option>
														<option value="1">< 3 Orang</option>
														<option value="4">> 8 Orang</option>
														<option value="3">7 - 8 Orang</option>
													<?php }else{ ?>
														<option value="<?php echo $value->jumlah_saudara_kandung_tang_ortu; ?>">
														<?php
															if($value->jumlah_saudara_kandung_tang_ortu == '1'){
																echo "< 3 Orang";
															}else if($value->jumlah_saudara_kandung_tang_ortu == '2'){
																echo "4 - 6 Orang";
															}else if($value->jumlah_saudara_kandung_tang_ortu == '3'){
																echo "7 - 8 Orang";
															}else if($value->jumlah_saudara_kandung_tang_ortu == '4'){
																echo "> 8 Orang";
															}
														?>
														</option>
														<option value="">--</option>
														<option value="2">4 - 6 Orang</option>
														<option value="1">< 3 Orang</option>
														<option value="4">> 8 Orang</option>
														<option value="3">7 - 8 Orang</option>
													<?php } ?>
												</select>
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
								<a href="<?=base_url('C_mhs/step2'); ?>" class="btn btn-primary">
									<i class="fa fa-check-circle-o"></i>
									&laquo; Tahap 2
								</a>
							</div>

							<div class="float-right">
								<a href="<?=base_url('C_mhs/step4'); ?>" class="btn btn-primary">
									<i class="fa fa-check-circle-o"></i>
									Tahap 4 &raquo;
								</a>
							</div>
						</div>
					</div> <!--End class="panel panel-primary"-->
				</div> <!--End class="panel group"-->
			</div>	<!--End class="row"-->
		</div> <!--End class="container col-md-8"-->
		<div class="col-md-12 panel-footer" style="background-color: #00a65a !important; width: 100%; left: 0px;">
			<div class="footer text-center" style="color:grey; font-size: 12px;">
				<?php $this->load->view('project_bidikmisi/footer/footer'); ?>
			</div>
		</div>
	</body>
</html>
