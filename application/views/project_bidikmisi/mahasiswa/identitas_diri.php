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
			<?php echo $this->session->flashdata('direct2_success'); ?>
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

						<p>Silahkan isi data identitas diri anda, jika ada kesalahan/belum terisi silahkan klik tabs <b>Edit Identitas Diri</b> dibawah.</p>
						<p>Jika sudah diisi Silahkan klik Tombol Lanjut</p>
					</div>

					<br/>

					<div class="panel panel-success">
						<div class="panel-heading hidden-xs">
							<!--Sidebar-->
							<center>
							<a href="<?=base_url('C_mhs'); ?>" class="btn btnn">1</a> <span class="glyphicon glyphicon-arrow-right"></span>
							<a href="<?=base_url('C_mhs/step2'); ?>" class="btn btnn active activee">2</a> <span class="glyphicon glyphicon-arrow-right"></span>
							<a href="<?=base_url('C_mhs/step3'); ?>" class="btn btnn">3</a> <span class="glyphicon glyphicon-arrow-right"></span>
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
								<a href="<?=base_url('C_mhs/step2'); ?>" class="btn btnn active activee">2</a>
								<br><br><!-- <center><span class="glyphicon glyphicon-arrow-down"></center> -->
								<a href="<?=base_url('C_mhs/step3'); ?>" class="btn btnn">3</a>
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
							<h3><span class="label label-default">Tahap 2 Identitas Diri</span></h3>
							<br>
							<a class="btn btn-success" href="#edit" data-toggle="tab"><i class="glyphicon glyphicon-pencil"></i> Edit Identitas Diri</a>
							<br><br>
							<ul class="nav nav-tabs" style="border: none;">
								<!-- <li><a href="#data" data-toggle="tab">Data Identitas Diri</a></li> -->
								<li></li>
							</ul>

							<div class="tab-content">
								<div class="tab-pane active" id="data">
									<!--Identitas Diri-->
									<?php foreach ($data_diri as $value) { ?>


									<table class="table">
										<tr>
											<td>NIK</td>
											<td>:</td>
											<td><?php echo $value->nik; ?></td>
											<td><b class="asterik">*</b></td>
										</tr>

										<tr>
											<td>Tempat Lahir</td>
											<td>:</td>
											<td><?php echo $value->tempat_lahir; ?></td>
											<td><b class="asterik">*</b></td>
										</tr>

										<tr>
											<td>Status Pernikahan</td>
											<td>:</td>
											<td><?php echo $value->status_pernikahan; ?></td>
											<td><b class="asterik">*</b></td>
										</tr>

										<tr>
											<td>Asal Provinsi</td>
											<td>:</td>
											<td><?php
													foreach ($propinsi as $x_prov) {
														if($value->asal_provinsi == $x_prov->id_propinsi){
															echo $x_prov->nama_propinsi;
														}
													}
											?></td>
											<td><b class="asterik">*</b></td>
										</tr>

										<tr>
											<td>Asal Kab/Kota</td>
											<td>:</td>
											<td><?php
													foreach ($kota as $x_kota) {
														if($value->asal_kab_kota == $x_kota->id_kota){
															echo $x_kota->nama_kota;
														}
													}
											?></td>
											<td><b class="asterik">*</b></td>
										</tr>

										<tr>
											<td>No Telp/Hp</td>
											<td>:</td>
											<td><?php echo $value->no_telp; ?></td>
											<td><b class="asterik">*</b></td>
										</tr>

										<tr>
											<td>E-mail</td>
											<td>:</td>
											<td><?php echo $value->email; ?></td>
											<td><b class="asterik">*</b></td>
										</tr>

										<tr>
											<td>Alamat</td>
											<td>:</td>
											<td><?php echo $value->alamat; ?></td>
											<td><b class="asterik">*</b></td>
										</tr>

										<tr>
											<td>RT</td>
											<td>:</td>
											<td><?php echo $value->rt_2; ?></td>
											<td><b class="asterik">*</b></td>
										</tr>

										<tr>
											<td>RW</td>
											<td>:</td>
											<td><?php echo $value->rw_2; ?></td>
											<td><b class="asterik">*</b></td>
										</tr>

										<tr>
											<td>Kecamatan</td>
											<td>:</td>
											<td><?php echo $value->kecamatan_2; ?></td>
											<td><b class="asterik">*</b></td>
										</tr>

										<tr>
											<td>Kelurahan</td>
											<td>:</td>
											<td><?php echo $value->kelurahan_2; ?></td>
											<td><b class="asterik">*</b></td>
										</tr>

										<tr>
											<td>Kode Pos Alamat Anda</td>
											<td>:</td>
											<td><?php echo $value->kode_pos; ?></td>
											<td><b class="asterik">*</b></td>
										</tr>
									</table>
									<!--End Identitas Diri-->
								</div>

								<div class="tab-pane" id="edit">
									<form action="<?=base_url('C_mhs/direct2'); ?>" method="POST">
										<div class="form-group">
											<label>NIK <b class="asterik">*</b></label>
											<input class="form-control input" type="text" placeholder="NIK" name="nik" required="required" value="<?php echo $value->nik; ?>">
										</div>

										<div class="form-group">
											<label>Tempat Lahir <b class="asterik">*</b></label>
											<input class="form-control input" type="text" placeholder="Tempat Lahir Anda" name="tempat_lahir" required="required" value="<?php echo $value->tempat_lahir; ?>">
										</div>

										<div class="form-group">
											<label>Status Pernikahan <b class="asterik">*</b></label>
											<select class="form-control input" required="required" name="status_pernikahan">
												<?php if($value->status_pernikahan == null) { ?>
													<option value="">-Pilih SalahSatu-</option>
													<option value="Menikah">Menikah</option>
													<option value="Belum Menikah">Belum Menikah</option>
												<?php }else{ ?>
													<option value="<?php echo $value->status_pernikahan; ?>"><?php echo $value->status_pernikahan; ?></option>
													<option value="">--</option>
													<option value="Menikah">Menikah</option>
													<option value="Belum Menikah">Belum Menikah</option>
												<?php } ?>
											</select>
										</div>

										<div class="form-group">
											<label>Asal Provinsi <b class="asterik">*</b></label>
											<select class="form-control input" required="required" name="asal_provinsi" id="provinsi">
												<?php if($value->asal_provinsi == null || $value->asal_provinsi == '0') { ?>
												<option value="">-Pilih SalahSatu-</option>
												<?php
													//melakukan looping dari fungsi index di controller C_mhs
													foreach($propinsi as $data){
														echo "<option value='".$data->id_propinsi."'>".$data->nama_propinsi."</option>";
													}
												}else{
												?>
												<?php foreach ($propinsi as $x_prov) {
													if($value->asal_provinsi == $x_prov->id_propinsi){
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
											<label>Asal Kab/Kota <b class="asterik">*</b></label>
											<?php if($value->asal_kab_kota == null || $value->asal_kab_kota == '0') { ?>
												<select required="required" class="form-control input" name="asal_kab_kota" id="kota">
													<option value="">-Pilih SalahSatu-</option>
												</select>
												<div id="loading">
													<img src="<?=base_url('assets/img/loading.gif'); ?>"><small>Loading..</small>
												</div>
											<?php }else{ ?>
												<select required="required" class="form-control input" name="asal_kab_kota" id="kota">
											<?php
												foreach ($kota as $x_kota) {
													if($value->asal_kab_kota == $x_kota->id_kota) {
											?>
													<option value="<?php echo $x_kota->id_kota; ?>">
													<?php
																echo $x_kota->nama_kota;
															}
														}
													?>
													</option>
													<option>--</option>
												</select>
												<div id="loading">
													<img src="<?=base_url('assets/img/loading.gif'); ?>"><small>Loading..</small>
												</div>
											<?php } ?>
										</div>

										<div class="form-group">
											<label>No Telp/Hp <b class="asterik">*</b></label>
											<input class="form-control input" type="text" placeholder="Contoh : 0882-2233-8832" name="no_telp" required="required" value="<?php echo $value->no_telp; ?>">
										</div>

										<div class="form-group">
											<label>E-Mail <b class="asterik">*</b></label>
											<input class="form-control input" type="email" placeholder="Email Anda" name="email" required="required" value="<?php echo $value->email; ?>">
										</div>

										<div class="form-group">
											<label>Alamat <b class="asterik">*</b></label>
											<textarea class="form-control input" type="text" name="alamat" placeholder="Alamat Anda" required="required"><?php echo $value->alamat; ?></textarea>
										</div>

										<div class="form-group">
											<label>RT <b class="asterik">*</b></label>
											<input class="form-control input" type="number" placeholder="Rukun Tetangga" name="rt_2" required="required" value="<?php echo $value->rt_2; ?>">
										</div>

										<div class="form-group">
											<label>RW <b class="asterik">*</b></label>
											<input class="form-control input" type="number" placeholder="Rukun Warga" name="rw_2" required="required" value="<?php echo $value->rw_2; ?>">
										</div>

										<div class="form-group">
											<label>Kecamatan <b class="asterik">*</b></label>
											<input class="form-control input" type="text" placeholder="Kecamatan Alamat Anda" name="kecamatan_2" required="required" value="<?php echo $value->kecamatan_2; ?>">
										</div>

										<div class="form-group">
											<label>Kelurahan <b class="asterik">*</b></label>
											<input class="form-control input" type="text" placeholder="Kelurahan Anda" name="kelurahan_2" required="required" value="<?php echo $value->kelurahan_2; ?>">
										</div>

										<div class="form-group">
											<label>Kode Pos Alamat Anda <b class="asterik">*</b></label>
											<input class="form-control input" type="text" placeholder="Kode Pos Alamat Anda" name="kode_pos" required="required" value="<?php echo $value->kode_pos; ?>">
										</div>

										<div class="text-center">
											<button type="submit" class="btn btn-success">
											<span class="glyphicon glyphicon-ok"></span>
												Simpan
											</button>
										</div>
									</form>
								</div>
								<?php } ?>
							</div> <!--End class="tab-content"-->
							</div>
						</div> <!--End class="panel-body"-->

						<div class="panel-footer padding-mack">
							<div class="float-left">
								<a href="<?=base_url('C_mhs'); ?>" class="btn btn-primary">
									<i class="fa fa-check-circle-o"></i>
									&laquo; Tahap 1
								</a>
							</div>

							<div class="float-right">
								<a href="<?=base_url('C_mhs/step3'); ?>" class="btn btn-primary">
									<i class="fa fa-check-circle-o"></i>
									Tahap 3 &raquo;
								</a>
							</div>
						</div>
					</div> <!--End Class="panel panel-primary"-->

				</div> <!--End class="panel panel-group"-->
			</div> <!--End class="row"-->
		</div> <!--End class="container col-md-8"-->
		<div class="col-md-12 panel-footer" style="background-color: #00a65a !important; width: 100%; left: 0px;">
			<div class="footer text-center" style="color:grey; font-size: 12px;">
				<?php $this->load->view('project_bidikmisi/footer/footer'); ?>
			</div>
		</div>
	</body>
</html>
