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
</style>
	<body>
		<div class="notif notifikasi col-md-offset-8">
			<?php
				echo $this->session->flashdata('message');
				echo $this->session->flashdata('direct10_success');
			?>
		</div>

		<div class="notif notifikasi col-md-offset-8">
			<?php echo $this->session->flashdata('direct_error'); ?>
		</div>

		<div class="notif notifikasi col-md-offset-10">
			<?php echo $this->session->flashdata('direct_success'); ?>
		</div>

		<div class="container col-md-8">
			<!--Halaman Untuk Report Beasiswa-->
			<div class="row">
				<?php if(false) { ?>
					<!-- $this->session->userdata('nim') != NULL -->
				<div class="row">
					<div class="panel-group">
						<?php foreach($data as $value) { ?>
						<div class="alert alert-warning alert-dismissible col-md-offset-1" role="alert">
						  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
							<b>Assalamu'alaikum, <?php echo $value->nama_mahasiswa; ?> selamat datang</b>
							<br><br>
					  		<strong>Perhatian!</strong>
					  		<div class="penting">
    							<p>Tanda Asterik (*) Wajib diisi</p>
    						</div>
								<p>Silahkan untuk mengedit Biodata Mahasiswa dengan mengklik tabs <b>Edit Mahasiswa</b> di Biodata Mahasiswa jika biodata mahasiswa anda masih kosong atau ada perubahan data</p>
								<!-- <p>Silahkan klik <b>Report Bidikmisi</b> pada menu bidikmisi, untuk melaporkan prestasi semester anda saat ini.</p> -->
						</div>
						<br>
						<!--End Rule-->

						<br/>

						<!--Biodata mahasiswa-->
						<div class="panel panel-success col-md-offset-1">
							<div class="panel-heading">
								<div id="judul-biodata">
									<h2><b>Biodata Mahasiswa</b></h2>
								</div>
							</div>

							<div class="panel-body">
								<ul class="nav nav-tabs">
									<li><a href="#data-mhs" data-toggle="tab">Data Mahasiswa</a></li>
									<li><a href="#edit-mhs" data-toggle="tab">Edit Mahasiswa</a></li>
								</ul>

								<div class="tab-content">
									<div class="tab-pane active" id="data-mhs">
										<table class="table">
											<tr>
												<td>Nim</td>
												<td>:</td>
												<td><?php echo $value->nim; ?></td>
												<td><b style="color:red;">*</b></td>
											</tr>

											<tr>
												<td>Nama Lengkap</td>
												<td>:</td>
												<td><?php echo $value->nama_mahasiswa; ?></td>
												<td><b style="color:red;">*</b></td>
											</tr>

											<tr>
												<td>Jenis Kelamin</td>
												<td>:</td>
												<td><?php echo $value->jenis_kelamin; ?></td>
												<td><b style="color:red;">*</b></td>
											</tr>

											<tr>
												<td>Fakultas</td>
												<td>:</td>
												<td><?php
														if($value->fakultas == '0' || $value->fakultas == null){
															echo "";
														}

														foreach($fakultas as $x_fak){
															if($value->fakultas == $x_fak->id_fakultas){
																echo $x_fak->nama_fakultas;
															}
														}
												?></td>
												<td><b style="color:red;">*</b></td>
											</tr>

											<tr>
												<td>Jurusan</td>
												<td>:</td>
												<td><?php
													if($value->jurusan == '0' || $value->jurusan == null){
														echo "";
													}

													foreach($jurusan as $x_jur){
														if($value->jurusan == $x_jur->id_jurusan){
															echo $x_jur->nama_jurusan;
														}
													}
												?></td>
												<td><b style="color:red;">*</b></td>
											</tr>

											<tr>
												<td>No Hp</td>
												<td>:</td>
												<td><?php if(isset($value->no_hp)) { echo $value->no_hp; } ?></td>
												<td><b style="color:red;">*</b></td>
											</tr>

											<tr>
												<td>Angkatan</td>
												<td>:</td>
												<td>
												<?php if($value->tahun == 0000) { ?>
												<?php echo '-'; ?>
												<?php }else if($value->tahun != NULL) { ?>
												<?php echo $value->tahun; ?>
												<?php } ?>
												</td>
												<td><b style="color:red;">*</b></td>
											</tr>
										</table>
									</div> <!-- End class="tab-pane" id="data-mhs"-->

									<div class="tab-pane" id="edit-mhs">
										<form action="<?=base_url('C_mhs/update'); ?>" method="POST">
											<br/>
											<input type="hidden" placeholder="Nim" name="nim" required="required" class="form-control" value="<?php echo $this->session->userdata('nim'); ?>">

											<div class="form-group">
												<label>Nama Lengkap</label>
												<input type="text" placeholder="Nama Lengkap Anda" name="nama_lengkap" class="form-control" required="required" value="<?php echo $value->nama_mahasiswa; ?>">
											</div>

											<div class="form-group">
												<label>Jenis Kelamin</label>
												<?php if($value->jenis_kelamin == NULL) { ?>
												<select name="jenis_kelamin" required="required" class="form-control">
													<option value="">-Pilih Jenis Kelamin-</option>
													<option value="Laki - Laki">Laki - Laki</option>
													<option value="Perempuan">Perempuan</option>
												</select>
												<?php }else if($value->jenis_kelamin != NULL) { ?>
												<select name="jenis_kelamin" required="required" class="form-control">
													<option value="<?php echo $value->jenis_kelamin; ?>"><?php echo $value->jenis_kelamin; ?></option>
													<option value="">--</option>
													<option value="Laki - Laki">Laki - Laki</option>
													<option value="Perempuan">Perempuan</option>
												</select>
												<?php } ?>
											</div>

											<div class="form-group">
												<label>Fakultas</label>
												<select class="form-control" required="required" name="fakultas" id="fakultas">
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
													<select class="form-control" required="required" name="jurusan" id="jurusan">
														<option value="">-Pilih SalahSatu-</option>
													</select>
													<div id="loading5">
														<img src="<?=base_url('assets/img/loading.gif'); ?>"><small>Loading..</small>
													</div>
												<?php }else{ ?>
													<select required="required" class="form-control" name="jurusan" id="jurusan">
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
													<div id="loading5">
														<img src="<?=base_url('assets/img/loading.gif'); ?>"><small>Loading..</small>
													</div>
												<?php } ?>
											</div>

											<div class="form-group">
												<label>No Hp</label>
												<input type="number" placeholder="Nomor Handphone" required="required" class="form-control" name="no_hp" value="<?php if(isset($value->no_hp)) { echo $value->no_hp; } ?>">
											</div>

											<div class="form-group">
												<label>Angkatan</label>
												<input disabled type="number" placeholder="example : 2015 Or 2016" required="required" class="form-control" name="angkatan" value="<?php if($value->tahun == 0000) {}else if($value->tahun != NULL) {echo $value->tahun; }?>">
											</div>

											<div class="text-right">
												<button type="submit" class="btn btn-primary">
												<span class="glyphicon glyphicon-ok"></span>
													Simpan
												</button>
											</div>
										</form>
									</div> <!--End class="tab-pane" id="edit-mhs"-->
								</div> <!--End class="tab-content"-->
							</div> <!-- End class="panel-body"-->

							<!--End Biodata mahasiswa-->
						</div> <!-- End class="panel panel-info"-->
					</div> <!-- End class="panel group"-->
				</div> <!-- End class="row"-->
				<?php } ?>
				<!--End Halaman Untuk Report Beasiswa-->

				<?php }else if($this->session->userdata('no_pendaftaran') != NULL) { ?>
				<!--Halaman Untuk Pendaftaran Beasiswa-->
				<div class="row">
					<div class="panel-group">
						<br>
							<?php foreach($data as $value) { ?>
									<div class="alert alert-warning alert-dismissible col-md-offset-1" role="alert">
									  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
										<?php if($value->reg == 2) { ?>
											<?php 
											if(!empty($value->berkas_sudah_diterima_oleh)) { ?>
												<h3>Alhamdulillah, berkas sudah berhasil diterima oleh <b> : <?php echo $value->berkas_sudah_diterima_oleh; ?></b>, mohon ditunggu pengumuman berikutnya.</h3>
											<?php 
											} else if(!empty($value->bukti_berkas_dikirim)) { ?>
												<h3>Terimakasih sudah mengirimkan berkas, mohon ditunggu pengumuman berikutnya.</h3>
										  		<img class="img-responsive" src="<?php echo base_url(). 'assets/bukti_pemberkasan/'.$value->bukti_berkas_dikirim; ?>">
										  		<br>
										  		<p style="color: red;">Jika ingin mengubah foto bukti pengiriman, silahkan upload ulang bukti dibawah ini.</p>
										  		<form method="POST" action="<?=base_url('C_mhs/buktiPemberkasan'); ?>" enctype="multipart/form-data">
											  		<input type="file" name="bukti_berkas_dikirim">
											  		<br>
											  		<button type="submit" class="btn btn-success">Simpan Bukti</button>
											  	</form>
										  	<?php } else { ?>
										  		<h3 style="color: red;">Wajib Diperhatikan!</h3>
												<h2>Seluruh berkas persyaratan HVS ukuran F4 (Folio) dan dimasukkan dalam <b>amplop berwarna sesuai fakultas masing-masing, pada pojok kanan atas ditulis Program KIP Kuliah Angkatan Tahun 2019, NAMA, NIM, Jurusan, dan Fakultas</b> dikirimkan ke Bagian Kemahasiswaan dan Alumni Gedung O. Djauharudin lantai 4 UIN Sunan Gunung Djati Bandung Jl. A.H. Nasution No. 105 Cibiru Bandung.</h2>  	
											  	<h3 style="color: red;">Jika berkas sudah dikirim, silahkan input foto bukti pengiriman dibawah ini.</h3>
											  	<form method="POST" action="<?=base_url('C_mhs/buktiPemberkasan'); ?>" enctype="multipart/form-data">
											  		<input type="file" name="bukti_berkas_dikirim">
											  		<br>
											  		<button type="submit" class="btn btn-success">Simpan Bukti</button>
											  	</form>
											<?php } ?>
										  <?php } else { ?>
										<b>Assalamu'alaikum, <?php echo $value->nama_mahasiswa; ?> selamat datang</b>
										<br><br>
									  <strong>Perhatian!</strong>
									  <div class="penting">
				    							<p>Tanda Asterik (*) Wajib diisi</p>
				    						</div>
												<p>Akan ada <b style="color: red;">11 tahap</b> yang harus diisi oleh pendaftar Beasiswa KIP-K dan pada setiap tahap akan ada RULE/Peraturan dalam pengisian data Beasiswa KIP-K.
												</p>

												<p>Silahkan cek kembali biodata pendaftar dan <b style="color: red;">Tanda Asterik (*) Wajib diisi</b>, jika masih ada kekeliruan dengan biodata pendaftar, anda dapat mengeditnya dengan mengklik tombol Edit dibawah dan mengisi ulang kembali data. jika sudah yakin dengan biodata pendaftar yang sudah ada, silahkan untuk klik tombol <a class="btn btn-info" href="#" type="submit">Lanjut &raquo;</a> </p>
										<?php } ?>
									</div>
									<br>
									<!--End Rule-->
						<div class="panel panel-success col-md-offset-1">
							<div class="panel-heading">
								<h3><span class="label label-default">Biodata Pendaftar</span></h3>

							</div>

							<div class="panel-body">
								<br>
								<?php
									$reg = $this->session->userdata('reg');

									if($reg == 0 || $reg == 1){
								?>
								<a class="btn btn-success" href="#edit-pendaftar" data-toggle="tab"><i class="glyphicon glyphicon-pencil"></i> Edit Data Orang Tua</a>
								<br><br>
								<?php } ?>
								<ul class="nav nav-tabs" style="border: none;">
									<!-- <li><a href="#data" data-toggle="tab">Data Identitas Diri</a></li> -->
									<li></li>
								</ul>

								<div class="tab-content">
									<div class="tab-pane active" id="data-pendaftar">
										<!--Biodata pendaftar-->
										<table class="table">
											<tr>
												<td>No Pendaftaran </td>
												<td>:</td>
												<td><?php echo $value->no_pendaftaran; ?></td>
												<td><b style="color:red;">*</b></td>
											</tr>

											<tr>
												<td>Nama Lengkap</td>
												<td>:</td>
												<td><?php echo $value->nama_mahasiswa; ?></td>
												<td><b style="color:red;">*</b></td>
											</tr>

											<tr>
												<td>Jenis Kelamin</td>
												<td>:</td>
												<td><?php echo $value->jenis_kelamin; ?></td>
												<td><b style="color:red;">*</b></td>
											</tr>

											<tr>
												<td>Tanggal Lahir</td>
												<td>:</td>
												<td><?php echo date_indo($value->tanggal_lahir); ?></td>
												<td><b style="color:red;">*</b></td>
											</tr>

											<tr>
												<td>Jalur Pendaftaran</td>
												<td>:</td>
												<td><?php echo $value->jalur_pendaftaran; ?></td>
												<td><b style="color:red;">*</b></td>
											</tr>

											<tr>
												<td>Fakultas</td>
												<td>:</td>
												<td><?php
														if($value->fakultas == '0' || $value->fakultas == null){
															echo "";
														}

														foreach($fakultas as $x_fak){
															if($value->fakultas == $x_fak->id_fakultas){
																echo $x_fak->nama_fakultas;
															}
														}
												?></td>
												<td><b style="color:red;">*</b></td>
											</tr>

											<tr>
												<td>Jurusan</td>
												<td>:</td>
												<td><?php
													if($value->jurusan == '0' || $value->jurusan == null){
														echo "";
													}

													foreach($jurusan as $x_jur){
														if($value->jurusan == $x_jur->id_jurusan){
															echo $x_jur->nama_jurusan;
														}
													}
												?></td>
												<td><b style="color:red;">*</b></td>
											</tr>

											<tr>
												<td>Kategori UKT</td>
												<td>:</td>
												<td><?php echo $value->kategori; ?></td>
												<td><b style="color:red;">*</b></td>
											</tr>
										</table>
										<!--End Biodata pendaftar-->
									</div> <!--End Class="tab-pane" id="data-pendaftar"-->

									<div class="tab-pane" id="edit-pendaftar">
										<br/>
										<form action="<?=base_url('C_mhs/update'); ?>" method="POST">
											<div class="form-group">
												<label>Nama Lengkap</label>
												<input class="form-control" type="text" name="nama_lengkap" placeholder="Nama Lengkap Anda" value="<?php echo $value->nama_mahasiswa; ?>" required="required">
											</div>

											<div class="form-group">
												<label>Jenis Kelamin</label>
												<select name="jenis_kelamin" class="form-control" required="required">
													<?php if($value->jenis_kelamin == null) { ?>
														<option value="">-Pilih SalahSatu-</option>
														<option value="Laki - Laki">Laki - Laki</option>
														<option value="Perempuan">Perempuan</option>
													<?php }else{ ?>
														<option value="<?php echo $value->jenis_kelamin; ?>"><?php echo $value->jenis_kelamin; ?></option>
														<option value="">--</option>
														<option value="Laki - Laki">Laki - Laki</option>
														<option value="Perempuan">Perempuan</option>
													<?php } ?>
												</select>
											</div>

											<div class="date">
												<label for="tanggal">Tanggal Lahir</label>
												<input required="required" class="form-control tanggal" type="text" name="tgl_lahir" placeholder="contoh : 2000-12-30" value="<?php echo $value->tanggal_lahir; ?>">
											</div>

											<br/>

											<div class="form-group">
												<label>Jalur Pendaftaran</label>
												<select name="jalur_pendaftaran" class="form-control" required="required">
													<?php if($value->jalur_pendaftaran == null) { ?>
														<option value="">-Pilih SalahSatu-</option>
														<option value="MANDIRI-TERTULIS">MANDIRI-TERTULIS</option>
														<option value="SNMPTN">SNMPTN</option>
														<option value="MANDIRI-PRESTASI">MANDIRI-PRESTASI</option>
														<option value="SPAN-PTKIN">SPAN-PTKIN</option>
														<option value="UM-PTKIN">UM-PTKIN</option>
														<option value="SBMPTN">SBMPTN</option>
													<?php }else{ ?>
														<option value="<?php echo $value->jalur_pendaftaran; ?>"><?php echo $value->jalur_pendaftaran; ?></option>
														<option value="">--</option>
														<option value="MANDIRI-TERTULIS">MANDIRI-TERTULIS</option>
														<option value="SNMPTN">SNMPTN</option>
														<option value="MANDIRI-PRESTASI">MANDIRI-PRESTASI</option>
														<option value="SPAN-PTKIN">SPAN-PTKIN</option>
														<option value="UM-PTKIN">UM-PTKIN</option>
														<option value="SBMPTN">SBMPTN</option>
													<?php } ?>
												</select>
											</div>

											<div class="form-group">
												<label>Fakultas</label>
												<select class="form-control" required="required" name="fakultas" id="fakultas">
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
													<select class="form-control" required="required" name="jurusan" id="jurusan">
														<option value="">-Pilih SalahSatu-</option>
													</select>
													<div id="loading5">
														<img src="<?=base_url('assets/img/loading.gif'); ?>"><small>Loading..</small>
													</div>
												<?php }else{ ?>
													<select required="required" class="form-control" name="jurusan" id="jurusan">
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
													<div id="loading5">
														<img src="<?=base_url('assets/img/loading.gif'); ?>"><small>Loading..</small>
													</div>
												<?php } ?>
											</div>

											<div class="form-group">
												<label>Kategori UKT</label>
												<select name="kategori" class="form-control" required="required">
													<?php if($value->kategori == null) { ?>
														<option value="">-Pilih SalahSatu-</option>
														<option value="K1">K1</option>
														<option value="K2">K2</option>
														<option value="K3">K3</option>
														<option value="K4">K4</option>
														<option value="K5">K5</option>
														<option value="K6">K6</option>
														<option value="K7">K7</option>
													<?php }else{ ?>
														<option value="<?php echo $value->kategori; ?>"><?php echo $value->kategori; ?></option>
														<option value="">--</option>
														<option value="K1">K1</option>
														<option value="K2">K2</option>
														<option value="K3">K3</option>
														<option value="K4">K4</option>
														<option value="K5">K5</option>
														<option value="K6">K6</option>
														<option value="K7">K7</option>
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
									</div> <!-- End class="tab-pane" id="edit-pendaftar"-->
								</div> <!--End class="tab-content"-->
							</div> <!--End class="panel-body"-->

							<?php if($reg == 0 || $reg == 1) { ?>
							<div class="panel-footer">
								<div class="text-right">
									<a class="btn btn-primary" href="<?=base_url('C_mhs')?>" type="submit">Lanjut &raquo;</a>
								</div>
							</div>
							<?php } ?>
						</div> <!-- End class="panel panel-info"-->
					</div> <!--End class="panel-group"-->
				</div> <!--End class="row"-->
					<?php } ?>
				<?php } ?>
				<!--End Halaman Untuk Pendaftaran Beasiswa-->

				<!--Footer-->
				<!--End Footer-->
			</div> <!-- End class="row"-->
		</div> <!--End class="container"-->
		<div class="col-md-12 panel-footer" style="background-color: #00a65a !important; width: 100%; left: 0px;">
			<div class="footer text-center" style="color:grey; font-size: 12px;">
				<?php $this->load->view('project_bidikmisi/footer/footer'); ?>
			</div>
		</div>
	</body>
</html>
