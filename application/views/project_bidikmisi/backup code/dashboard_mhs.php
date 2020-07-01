<?php
	$this->load->view('project_bidikmisi/header/mahasiswa/header3_mhs');
	$this->load->view('project_bidikmisi/mahasiswa/navbar_mhs');
?>
<!DOCTYPE html>
<html>
	<body>
		<div class="notif notifikasi col-md-offset-8">
			<?php 
				echo $this->session->flashdata('message');
				echo $this->session->flashdata('direct10_success');
			?>
		</div>

		<div class="container">
			<div class="">
				<div class="row">
					
					<?php foreach($data as $value) { ?>
					<!--Rule-->
					<div class="col-md-6">
						<div class="col-md-12" style="text-align: center;">	
							<div id="salam">
								<b>Assalamu'alaikum, Selamat Datang <?php echo $value->nama_mahasiswa; ?></b>
							</div>

							<div class="clear"></div>

							<h3><u>RULE Penggunaan Website BidikMisi.</u></h3>
 							
							<p>Akan ada 10 tahap yang harus diisi oleh pendaftar bidikmisi tahun <?php echo date('Y'); ?> dan pada setiap tahap akan ada RULE/Peraturan dalam pengisian data bidikmisi. 
							</p>
							 
							<p>Silahkan Cek Kembali Biodata Pendaftar dan <b style="color: red;">Tanda Asterik (*) Wajib diisi</b>, jika masih ada kekeliruan dengan biodata pendaftar, anda dapat mengeditnya dengan mengklik tombol Edit dibawah dan mengisi ulang kembali data. jika sudah yakin dengan biodata pendaftar yang sudah ada, silahkan untuk klik tombol Lanjut. </p>
						</div>
					</div>
					<!--End Rule-->

					<!--Biodata pendaftar-->
					<div class="col-md-6">
						<div class="col-md-6 col-md-offset-1">			
							<div id="judul-biodata">
								<h2><u><b>Biodata Pendaftar</b></u></h2>
							</div>
						</div>
									
						<div class="col-md-offset-1 col-md-12">
							<div class="">
								<table class="">
									<tr style="line-height: 1.5;">
										<td><b style="color:red;">*&nbsp;</b>No Pendaftaran </td>
										<td>&nbsp;&nbsp;:</td>
										<td>&nbsp;&nbsp;<?php echo $value->no_pendaftaran; ?></td>
									</tr>

									<tr style="line-height: 1.5;">
										<td><b style="color:red;">*&nbsp;</b>Nama Lengkap</td>
										<td>&nbsp;&nbsp;:</td>
										<td>&nbsp;&nbsp;<?php echo $value->nama_mahasiswa; ?></td>
									</tr>

									<tr style="line-height: 1.5;">
										<td><b style="color:red;">*&nbsp;</b>Jenis Kelamin</td>
										<td>&nbsp;&nbsp;:</td>
										<td>&nbsp;&nbsp;<?php echo $value->jenis_kelamin; ?></td>
									</tr>

									<tr style="line-height: 1.5;">
										<td><b style="color:red;">*&nbsp;</b>Tanggal Lahir</td>
										<td>&nbsp;&nbsp;:</td>
										<td>&nbsp;&nbsp;<?php echo date_indo($value->tanggal_lahir); ?></td>
									</tr>

									<tr style="line-height: 1.5;">
										<td><b style="color:red;">*&nbsp;</b>Jalur Pendaftaran</td>
										<td>&nbsp;&nbsp;:</td>
										<td>&nbsp;&nbsp;<?php echo $value->jalur_pendaftaran; ?></td>
									</tr>

									<tr style="line-height: 1.5;">
										<td><b style="color:red;">*&nbsp;</b>Fakultas</td>
										<td>&nbsp;&nbsp;:</td>
										<td>&nbsp;&nbsp;<?php 
												if($value->fakultas == '0' || $value->fakultas == null){
													echo "";
												}

												foreach($fakultas as $x_fak){
													if($value->fakultas == $x_fak->id_fakultas){
														echo $x_fak->nama_fakultas;
													}
												}
										?></td>
									</tr>

									<tr style="line-height: 1.5;">
										<td><b style="color:red;">*&nbsp;</b>Jurusan</td>
										<td>&nbsp;&nbsp;:</td>
										<td>&nbsp;&nbsp;<?php
											if($value->jurusan == '0' || $value->jurusan == null){
												echo "";
											}

											foreach($jurusan as $x_jur){
												if($value->jurusan == $x_jur->id_jurusan){
													echo $x_jur->nama_jurusan;
												}
											}
										?></td>
									</tr>

									<tr style="line-height: 1.5;">
										<td><b style="color:red;">*&nbsp;</b>Kategori UKT</td>
										<td>&nbsp;&nbsp;:</td>
										<td>&nbsp;&nbsp;<?php echo $value->kategori; ?></td>
									</tr>
								</table>
							</div>
						</div>
					</div>
					<!--End Biodata pendaftar-->
				</div>

				<div class="clear"></div>

				<!--button-->
				<div class="button-all" style="margin-top: 40px;">
					<div class="col-md-4 col-md-offset-8">
						<?php
							$reg = $this->session->userdata('reg');

							if($reg == 0 || $reg == 1){
						?>
							<button class="btn btn-primary" data-toggle="modal" data-target="#edit" style="margin-right:20px; " type="submit">
							<i class="glyphicon glyphicon-edit"></i>
								Edit
							</button>
							<a class="btn btn-info" href="<?=base_url('C_mhs')?>" type="submit">Lanjut &raquo;</a>
						<?php } ?>
					</div>
				</div>
				<!--End button-->

				<div class="clear"></div>

				<!--Modal Edit-->
				<form action="<?=base_url('C_mhs/update'); ?>" method="POST">
					<div id="edit" class="modal fade" role="dialog">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal">&times;</button>
									<h4 class="modal-title">Edit Data</h4>
								</div>

								<div class="modal-body">
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
								</div>

								<div class="modal-footer">
									<button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
									<button type="submit" class="btn btn-primary">Simpan</button>
								</div>
							</div>
						</div>
					</div>
				</form>
				<?php } ?>
				<!--End Modal Edit-->
			</div>
		</div>
	</body>

	<div style="text-align: center;">
		<?php
			//load footer
			$this->load->view('project_bidikmisi/footer/footer');
		?>
	</div>
</html>