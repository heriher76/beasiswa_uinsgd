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
			//cek pondok
			function cek_pondok(){
				  var kode = document.getElementById('mondok').checked;
				  var elems = document.getElementsByClassName('list_pondok');
				  if ( kode == false ) {
				      for(var i = 0; i < elems.length; i++) {
				          elems[i].style.backgroundColor = "#DCDCDC";
				          elems[i].disabled = true;
				          elems[i].required = false;
				      }
				  } else {
				      for(var i = 0; i < elems.length; i++) {
				          elems[i].style.backgroundColor = '#FFFFFF';
				          elems[i].disabled = false;
				          elems[i].required = true;
				      	}
				  	}
				}
			//End cek pondok
		</script>

		<div class="notif notifikasi col-md-offset-8">
			<?php echo $this->session->flashdata('direct6_success'); ?>
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

    						<p>Jika anda Pernah/Tidak PERNAH mondok di Pesantren silahkan isi data pesantren klik tabs <b>Edit Data Pesantren</b> dan Pilih YA di inputan Pernah Mondok, jika anda TIDAK PERNAH mondok di pesantren pilih TIDAK di inputan Pernah Mondok.</p>
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
							<a href="<?=base_url('C_mhs/step5'); ?>" class="btn btnn">5</a> <span class="glyphicon glyphicon-arrow-right"></span>
							<a href="<?=base_url('C_mhs/step6'); ?>" class="btn btnn active activee">6</a> <span class="glyphicon glyphicon-arrow-right"></span>
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
								<a href="<?=base_url('C_mhs/step5'); ?>" class="btn btnn">5</a>
								<br><br><!-- <center><span class="glyphicon glyphicon-arrow-down"></center> -->
								<a href="<?=base_url('C_mhs/step6'); ?>" class="btn btnn active activee">6</a>
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
							<h3><span class="label label-default">Tahap 6 Data Pesantren</span></h3>
								<br>
								<a class="btn btn-success" href="#edit" data-toggle="tab"><i class="glyphicon glyphicon-pencil"></i> Edit Data Pesantren</a>
								<br><br>
								<ul class="nav nav-tabs" style="border: none;">
									<!-- <li><a href="#data" data-toggle="tab">Data Identitas Diri</a></li> -->
									<li></li>
								</ul>

							<div class="tab-content">
								<div class="tab-pane active" id="data">
									<!--Data Pesantren-->
									<table class="table">
									<?php foreach($data_diri as $value) { ?>
										<?php
											if($value->mondok == "Ya"){
											?>
											<tr>
												<td>Pernah Mondok</td>
												<td>:</td>
												<td><?php echo $value->mondok; ?></td>
												<td><i class="asterik">*</i></td>
											</tr>

											<tr>
												<td>Nama Ponpes</td>
												<td>:</td>
												<td><?php
													if($value->nama_ponpes == null){
														echo "";
													}else if($value->nama_ponpes != null){
														echo $value->nama_ponpes;
													}
												?></td>
											</tr>

											<tr>
												<td>Alamat Ponpes</td>
												<td>:</td>
												<td><?php
													if($value->alamat_ponpes == null){
														echo "";
													}else if($value->alamat_ponpes != null){
														echo $value->alamat_ponpes;
													}
												?></td>
											</tr>

											<tr>
												<td>RT Ponpes</td>
												<td>:</td>
												<td><?php
													if($value->rt_6 == null){
														echo "";
													}else if($value->rt_6 != null){
														echo $value->rt_6;
													}
												?></td>
											</tr>

											<tr>
												<td>RW Ponpes</td>
												<td>:</td>
												<td><?php
													if($value->rw_6 == null){
														echo "";
													}else if($value->rw_6 != null){
														echo $value->rw_6;
													}
												?></td>
											</tr>

											<tr>
												<td>Provinsi Ponpes</td>
												<td>:</td>
												<td><?php
														if($value->prov_ponpes == '0' || $value->prov_ponpes == null){
																echo "";
															}

													foreach ($propinsi as $x_prov) {
															if($value->prov_ponpes == $x_prov->id_propinsi){
																echo $x_prov->nama_propinsi;
															}
														}
													?></td>
											</tr>

											<tr>
												<td>Kab/Kota Ponpes</td>
												<td>:</td>
												<td><?php
														if($value->kab_kota_ponpes == '0' || $value->kab_kota_ponpes == null){
															echo "";
														}

														foreach($kota as $x_kab_kota){
															if($value->kab_kota_ponpes == $x_kab_kota->id_kota){
																echo $x_kab_kota->nama_kota;
															}
														}
													?></td>
											</tr>

											<tr>
												<td>Kecamatan Ponpes</td>
												<td>:</td>
												<td><?php
													if($value->kecamatan_6 == null){
														echo "";
													}else if($value->kecamatan_6 != null){
														echo $value->kecamatan_6;
													}
												?></td>
											</tr>

											<tr>
												<td>Kelurahan Ponpes</td>
												<td>:</td>
												<td><?php
													if($value->kelurahan_6 == null){
														echo "";
													}else if($value->kelurahan_6 != null){
														echo $value->kelurahan_6;
													}
												?></td>
											</tr>

											<tr>
												<td>Kode Pos Ponpes</td>
												<td>:</td>
												<td><?php echo $value->kode_pos_ponpes; ?></td>
											</tr>

											<tr>
												<td>Lama Belajar</td>
												<td>:</td>
												<td><?php echo $value->lama_belajar; ?> Tahun</td>
											</tr>
										<?php }else if($value->mondok == "Tidak") { ?>
											<tr>
												<td>Pernah Mondok</td>
												<td>:</td>
												<td><?php echo $value->mondok; ?></td>
												<td><i class="asterik">*</i></td>
											</tr>

											<tr>
												<td>Nama Ponpes</td>
												<td>:</td>
												<td><?php
													if($value->nama_ponpes == null){
														echo "";
													}
												?></td>
											</tr>

											<tr>
												<td>Alamat Ponpes</td>
												<td>:</td>
												<td><?php
													if($value->alamat_ponpes == null){
														echo "";
													}
												?></td>
											</tr>

											<tr>
												<td>RT Ponpes</td>
												<td>:</td>
												<td><?php
													if($value->rt_6 == null){
														echo "";
													}
												?></td>
											</tr>

											<tr>
												<td>RW Ponpes</td>
												<td>:</td>
												<td><?php
													if($value->rw_6 == null){
														echo "";
													}
												?></td>
											</tr>

											<tr>
												<td>Kelurahan Ponpes</td>
												<td>:</td>
												<td><?php
													if($value->kelurahan_6 == null){
														echo "";
													}
												?></td>
											</tr>

											<tr>
												<td>Kecamatan Ponpes</td>
												<td>:</td>
												<td><?php
													if($value->kecamatan_6 == null){
														echo "";
													}
												?></td>
											</tr>

											<tr>
												<td>Provinsi Ponpes</td>
												<td>:</td>
												<td><?php
														if($value->prov_ponpes == '0' || $value->prov_ponpes == null){
																echo "";
															}
													?></td>
											</tr>

											<tr>
												<td>Kab/Kota Ponpes</td>
												<td>:</td>
												<td><?php
														if($value->kab_kota_ponpes == '0' || $value->kab_kota_ponpes == null){
															echo "";
														}
													?></td>
											</tr>

											<tr>
												<td>Kode Pos Ponpes</td>
												<td>:</td>
												<td><?php
													if($value->kode_pos_ponpes == '0' || $value->kode_pos_ponpes == null){
														echo "";
													}
												?></td>
											</tr>

											<tr>
												<td>Lama Belajar</td>
												<td>:</td>
												<td><?php
													if($value->lama_belajar == '0' || $value->lama_belajar == null){
														echo "";
													}
												?></td>
											</tr>
										<?php }else{ ?>
											<tr>
												<td>Pernah Mondok</td>
												<td>:</td>
												<td><?php echo ""; ?></td>
												<td><i class="asterik">*</i></td>
											</tr>

											<tr>
												<td>Nama Ponpes</td>
												<td>:</td>
												<td><?php echo ""; ?></td>
											</tr>

											<tr>
												<td>Alamat Ponpes</td>
												<td>:</td>
												<td><?php echo ""; ?></td>
											</tr>

											<tr>
												<td>RT Ponpes</td>
												<td>:</td>
												<td><?php echo ""; ?></td>
											</tr>

											<tr>
												<td>RW Ponpes</td>
												<td>:</td>
												<td><?php echo ""; ?></td>
											</tr>

											<tr>
												<td>Kelurahan Ponpes</td>
												<td>:</td>
												<td><?php echo ""; ?></td>
											</tr>

											<tr>
												<td>Kecamatan Ponpes</td>
												<td>:</td>
												<td><?php echo ""; ?></td>
											</tr>

											<tr>
												<td>Provinsi Ponpes</td>
												<td>:</td>
												<td><?php echo ""; ?></td>
											</tr>

											<tr>
												<td>Kab/Kota Ponpes</td>
												<td>:</td>
												<td><?php echo ""; ?></td>
											</tr>

											<tr>
												<td>Kode Pos Ponpes</td>
												<td>:</td>
												<td><?php echo ""; ?></td>
											</tr>

											<tr>
												<td>Lama Belajar</td>
												<td>:</td>
												<td><?php echo ""; ?></td>
											</tr>
										<?php } ?>
									</table>
									<!--End Data Pesantren-->
								</div> <!--End class="tab-pane active" id="data"-->

								<div class="tab-pane" id="edit">
									<form action="<?=base_url('C_mhs/direct6'); ?>" method="POST">
										<?php if($value->mondok == 'Ya') { ?>
											<div class="form-group">
												<label>Pernah Mondok ? <i class="asterik">*</i></label>
												<br/>
												<input style=" cursor: pointer;" class="input" type="radio" value="<?php echo $value->mondok;?>" checked="checked" required="required" name="mondok" id="mondok" onclick="cek_pondok()">
												<label>Ya</label>&nbsp;&nbsp;
												<input style=" cursor: pointer;" id="mondok" class="input" required="required" value="Tidak" onclick="cek_pondok()" type="radio" name="mondok">
												<label>Tidak</label>
											</div>

											<div class="form-group">
												<label>Nama Ponpes <i class="asterik">*</i></label>
												<input class="form-control input list_pondok"  type="text" name="nama_ponpes" required="required" placeholder="Nama Ponpes Anda" value="<?php echo $value->nama_ponpes;?>">
											</div>

											<div class="form-group">
												<label>Alamat Ponpes <i class="asterik">*</i></label>
												<textarea class="form-control input list_pondok" type="text" name="alamat_ponpes" placeholder="Alamat Ponpes Anda" required="required"><?php echo $value->alamat_ponpes; ?></textarea>
											</div>

											<div class="form-group">
												<label>RT Ponpes <i class="asterik">*</i></label>
												<input class="form-control input list_pondok"  type="number" name="rt_6" required="required" placeholder="Rukun Tetangga Ponpes Anda" value="<?php echo $value->rt_6; ?>">
											</div>

											<div class="form-group">
												<label>RW Ponpes <i class="asterik">*</i></label>
												<input class="form-control input list_pondok"  type="number" name="rw_6" required="required" placeholder="Rukun Warga Ponpes Anda" value="<?php echo $value->rw_6; ?>">
											</div>

											<div class="form-group">
												<label>Provinsi Ponpes <i class="asterik">*</i></label>
												<select class="form-control input list_pondok" required="required" id="provinsi4" name="provinsi_ponpes">
													<?php
													if($value->prov_ponpes == null || $value->prov_ponpes == '0') { ?>
														<option value="">-Pilih SalahSatu-</option>
														<?php
															//melakukan looping dari fungsi index di controller C_mhs
															foreach($propinsi as $data){
																echo "<option value='".$data->id_propinsi."'>".$data->nama_propinsi."</option>";
															}
														}else{
														?>
														<?php foreach ($propinsi as $x_prov) {
															if($value->prov_ponpes == $x_prov->id_propinsi){
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
												<label>Kab/Kota Ponpes <i class="asterik">*</i></label>
												<?php if($value->kab_kota_ponpes == null || $value->kab_kota_ponpes == '0') { ?>
													<select class="form-control input list_pondok" required="required" id="kota4" name="kab_kota_ponpes">
														<option value="">-Pilih SalahSatu-</option>
													</select>

													<div id="loading4">
														<img src="<?=base_url('assets/img/loading.gif'); ?>"><small>Loading..</small>
													</div>
												<?php }else{ ?>
													<select class="form-control input list_pondok" required="required" name="kab_kota_ponpes" id="kota4">
												<?php
													foreach ($kota as $x_kota) {
														if($value->kab_kota_ponpes == $x_kota->id_kota) {
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
													<div id="loading4">
														<img src="<?=base_url('assets/img/loading.gif'); ?>"><small>Loading..</small>
													</div>
												<?php } ?>
											</div>

											<div class="form-group">
												<label>Kecamatan Ponpes <i class="asterik">*</i></label>
												<input class="form-control input list_pondok"  type="text" name="kecamatan_6" required="required" placeholder="Kecamatan Ponpes Anda" value="<?php echo $value->kecamatan_6; ?>">
											</div>

											<div class="form-group">
												<label>Kelurahan Ponpes <i class="asterik">*</i></label>
												<input class="form-control input list_pondok"  type="text" name="kelurahan_6" required="required" placeholder="Kelurahan Ponpes Anda" value="<?php echo $value->kelurahan_6; ?>">
											</div>

											<div class="form-group">
												<label>Kode Pos Ponpes</label>
												<input class="form-control input list_pondok" type="text" name="kode_pos_ponpes" placeholder="Kode Pos Ponpes Anda" value="<?php echo $value->kode_pos_ponpes; ?>">
											</div>

											<div class="form-group">
												<label>Lama Belajar <i class="asterik">*</i></label>
												<input class="form-control input list_pondok" type="number" name="lama_belajar" placeholder="Berapa Tahun" required="required" value="<?php echo $value->lama_belajar; ?>">
											</div>
										<?php }else if($value->mondok == 'Tidak') { ?>
											<div class="form-group">
												<label>Pernah Mondok ? <i class="asterik">*</i></label>
												<br/>
												<input style=" cursor: pointer;" class="input" type="radio" value="Ya" required="required" name="mondok" id="mondok" onclick="cek_pondok()">
												<label>Ya</label>&nbsp;&nbsp;
												<input style=" cursor: pointer;" id="mondok" class="input" value="<?php echo $value->mondok;?>" required="required" onclick="cek_pondok()" checked="checked" type="radio" name="mondok">
												<label>Tidak</label>
											</div>

											<div class="form-group">
												<label>Nama Ponpes <i class="asterik">*</i></label>
												<input class="form-control input list_pondok" type="text" disabled="disabled" name="nama_ponpes" required="required" placeholder="Nama Ponpes Anda">
											</div>

											<div class="form-group">
												<label>Alamat Ponpes <i class="asterik">*</i></label>
												<textarea class="form-control input list_pondok" type="text" disabled="disabled" name="alamat_ponpes" placeholder="Alamat Ponpes Anda" required="required"></textarea>
											</div>

											<div class="form-group">
												<label>RT Ponpes <i class="asterik">*</i></label>
												<input class="form-control input list_pondok"  type="number" disabled="disabled" name="rt_6" required="required" placeholder="Rukun Tetangga Ponpes Anda">
											</div>

											<div class="form-group">
												<label>RW Ponpes <i class="asterik">*</i></label>
												<input class="form-control input list_pondok"  type="number" disabled="disabled" name="rw_6" required="required" placeholder="Rukun Warga Ponpes Anda">
											</div>

											<div class="form-group">
												<label>Provinsi Ponpes <i class="asterik">*</i></label>
												<select class="form-control input list_pondok" required="required" id="provinsi4" disabled="disabled" name="provinsi_ponpes">
													<?php
													if($value->prov_ponpes == null || $value->prov_ponpes == '0') { ?>
														<option value="">-Pilih SalahSatu-</option>
														<?php
															//melakukan looping dari fungsi index di controller C_mhs
															foreach($propinsi as $data){
																echo "<option value='".$data->id_propinsi."'>".$data->nama_propinsi."</option>";
															}
														}else{
														?>
														<?php foreach ($propinsi as $x_prov) {
															if($value->prov_ponpes == $x_prov->id_propinsi){
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
												<label>Kab/Kota Ponpes <i class="asterik">*</i></label>
												<?php if($value->kab_kota_ponpes == null || $value->kab_kota_ponpes == '0') { ?>
													<select class="form-control input list_pondok" required="required" id="kota4" disabled="disabled" name="kab_kota_ponpes">
														<option value="">-Pilih SalahSatu-</option>
													</select>

													<div id="loading4">
														<img src="<?=base_url('assets/img/loading.gif'); ?>"><small>Loading..</small>
													</div>
												<?php }else{ ?>
													<select class="form-control input list_pondok" required="required" disabled="disabled" name="kab_kota_ponpes" id="kota4">
												<?php
													foreach ($kota as $x_kota) {
														if($value->kab_kota_ponpes == $x_kota->id_kota) {
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
													<div id="loading4">
														<img src="<?=base_url('assets/img/loading.gif'); ?>"><small>Loading..</small>
													</div>
												<?php } ?>
											</div>

											<div class="form-group">
												<label>Kecamatan Ponpes <i class="asterik">*</i></label>
												<input class="form-control input list_pondok"  type="text" disabled="disabled" name="kecamatan_6" required="required" placeholder="Kecamatan Ponpes Anda">
											</div>

											<div class="form-group">
												<label>Kelurahan Ponpes <i class="asterik">*</i></label>
												<input class="form-control input list_pondok"  type="text" disabled="disabled" name="kelurahan_6" required="required" placeholder="Kelurahan Ponpes Anda">
											</div>

											<div class="form-group">
												<label>Kode Pos Ponpes</label>
												<input class="form-control input list_pondok" type="text" disabled="disabled" name="kode_pos_ponpes" placeholder="Kode Pos Ponpes Anda">
											</div>

											<div class="form-group">
												<label>Lama Belajar <i class="asterik">*</i></label>
												<input class="form-control input list_pondok" type="number" disabled="disabled" name="lama_belajar" placeholder="Berapa Tahun" required="required">
											</div>
										<?php }else{ ?>
											<div class="form-group">
												<label>Pernah Mondok ? <i class="asterik">*</i></label>
												<br/>
												<input style=" cursor: pointer;" class="input" type="radio" value="Ya" required="required" name="mondok" id="mondok" onclick="cek_pondok()">
												<label>Ya</label>&nbsp;&nbsp;
												<input style=" cursor: pointer;" id="mondok" class="input" value="Tidak" required="required" onclick="cek_pondok()" type="radio" name="mondok">
												<label>Tidak</label>
											</div>

											<div class="form-group">
												<label>Nama Ponpes <i class="asterik">*</i></label>
												<input class="form-control input list_pondok" type="text" name="nama_ponpes" required="required" placeholder="Nama Ponpes Anda">
											</div>

											<div class="form-group">
												<label>Alamat Ponpes <i class="asterik">*</i></label>
												<textarea class="form-control input list_pondok" type="text" name="alamat_ponpes" placeholder="Alamat Ponpes Anda" required="required"></textarea>
											</div>

											<div class="form-group">
												<label>RT Ponpes <i class="asterik">*</i></label>
												<input class="form-control input list_pondok"  type="number" name="rt_6" required="required" placeholder="Rukun Tetangga Ponpes Anda">
											</div>

											<div class="form-group">
												<label>RW Ponpes <i class="asterik">*</i></label>
												<input class="form-control input list_pondok"  type="number" name="rw_6" required="required" placeholder="Rukun Warga Ponpes Anda">
											</div>

											<div class="form-group">
												<label>Provinsi Ponpes <i class="asterik">*</i></label>
												<select class="form-control input list_pondok" required="required" id="provinsi4" name="provinsi_ponpes">
													<?php
													if($value->prov_ponpes == null || $value->prov_ponpes == '0') { ?>
														<option value="">-Pilih SalahSatu-</option>
														<?php
															//melakukan looping dari fungsi index di controller C_mhs
															foreach($propinsi as $data){
																echo "<option value='".$data->id_propinsi."'>".$data->nama_propinsi."</option>";
															}
														}else{
														?>
														<?php foreach ($propinsi as $x_prov) {
															if($value->prov_ponpes == $x_prov->id_propinsi){
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
												<label>Kab/Kota Ponpes <i class="asterik">*</i></label>
												<?php if($value->kab_kota_ponpes == null || $value->kab_kota_ponpes == '0') { ?>
													<select class="form-control input list_pondok" required="required" id="kota4" name="kab_kota_ponpes">
														<option value="">-Pilih SalahSatu-</option>
													</select>

													<div id="loading4">
														<img src="<?=base_url('assets/img/loading.gif'); ?>"><small>Loading..</small>
													</div>
												<?php }else{ ?>
													<select class="form-control input list_pondok" required="required" name="kab_kota_ponpes" id="kota4">
												<?php
													foreach ($kota as $x_kota) {
														if($value->kab_kota_ponpes == $x_kota->id_kota) {
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
													<div id="loading4">
														<img src="<?=base_url('assets/img/loading.gif'); ?>"><small>Loading..</small>
													</div>
												<?php } ?>
											</div>

											<div class="form-group">
												<label>Kecamatan Ponpes <i class="asterik">*</i></label>
												<input class="form-control input list_pondok"  type="text" name="kecamatan_6" required="required" placeholder="Kecamatan Ponpes Anda">
											</div>

											<div class="form-group">
												<label>Kelurahan Ponpes <i class="asterik">*</i></label>
												<input class="form-control input list_pondok"  type="text" name="kelurahan_6" required="required" placeholder="Kelurahan Ponpes Anda">
											</div>

											<div class="form-group">
												<label>Kode Pos Ponpes</label>
												<input class="form-control input list_pondok" type="text" name="kode_pos_ponpes" placeholder="Kode Pos Ponpes Anda">
											</div>

											<div class="form-group">
												<label>Lama Belajar <i class="asterik">*</i></label>
												<input class="form-control input list_pondok" type="number" name="lama_belajar" placeholder="Berapa Tahun" required="required">
											</div>
										<?php } ?>

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
								<a href="<?=base_url('C_mhs/step5'); ?>" class="btn btn-primary">
									<i class="fa fa-check-circle-o"></i>
									&laquo; Tahap 5
								</a>
							</div>

							<div class="float-right">
								<a href="<?=base_url('C_mhs/step7'); ?>" class="btn btn-primary">
									<i class="fa fa-check-circle-o"></i>
									Tahap 7 &raquo;
								</a>
							</div>
						</div>
					</div> <!--End class="panel panel-primary"-->

				</div> <!--End class="panel group"-->
			</div> <!--End class="row"-->
		</div> <!--End id="container col-md-8"-->
		<div class="col-md-12 panel-footer" style="background-color: #00a65a !important; width: 100%; left: 0px;">
			<div class="footer text-center" style="color:grey; font-size: 12px;">
				<?php $this->load->view('project_bidikmisi/footer/footer'); ?>
			</div>
		</div>
	</body>
</html>
