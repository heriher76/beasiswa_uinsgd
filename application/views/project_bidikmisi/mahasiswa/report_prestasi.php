<?php
	$this->load->view('project_bidikmisi/header/mahasiswa/header');
?>
<!DOCTYPE html>
<html>
	<body>
		<div class="notif notifikasi col-md-offset-9">
			<?php
				echo $this->session->flashdata('berhasil_semester_1');
				echo $this->session->flashdata('gagal_tranksrip_nilai_1');
				echo $this->session->flashdata('berhasil_semester_2');
				echo $this->session->flashdata('gagal_tranksrip_nilai_2');
				echo $this->session->flashdata('berhasil_semester_3');
				echo $this->session->flashdata('gagal_tranksrip_nilai_3');
				echo $this->session->flashdata('berhasil_semester_4');
				echo $this->session->flashdata('gagal_tranksrip_nilai_4');
				echo $this->session->flashdata('berhasil_semester_5');
				echo $this->session->flashdata('gagal_tranksrip_nilai_5');
				echo $this->session->flashdata('berhasil_semester_6');
				echo $this->session->flashdata('gagal_tranksrip_nilai_6');
				echo $this->session->flashdata('berhasil_semester_7');
				echo $this->session->flashdata('gagal_tranksrip_nilai_7');
				echo $this->session->flashdata('berhasil_semester_8');
				echo $this->session->flashdata('gagal_tranksrip_nilai_8');
			?>
		</div>

		<div class="container col-md-8">
			<div class="row">
				<div class="panel panel-info col-md-offset-1">
					<div class="panel-heading">
						<h3>Report Beasiswa KIP-K</h3>
					</div>

					<div class="panel-body">
						<ul class="nav nav-tabs">
							<?php foreach($command_report as $value) { ?>
								<?php if($value->command == 'SEMESTER GANJIL') { ?>
									<li><a class="style-tabs" href="#semester-1" data-toggle="tab">Semester 1</a></li>
									<li><a class="style-tabs" href="#semester-3" data-toggle="tab">Semester 3</a></li>
									<li><a class="style-tabs" href="#semester-5" data-toggle="tab">Semester 5</a></li>
									<li><a class="style-tabs" href="#semester-7" data-toggle="tab">Semester 7</a></li>
								<?php }else if($value->command == 'SEMESTER GENAP') { ?>
									<li><a class="style-tabs" href="#semester-2" data-toggle="tab">Semester 2</a></li>
									<li><a class="style-tabs" href="#semester-4" data-toggle="tab">Semester 4</a></li>
									<li><a class="style-tabs" href="#semester-6" data-toggle="tab">Semester 6</a></li>
									<li><a class="style-tabs" href="#semester-8" data-toggle="tab">Semester 8</a></li>
								<?php } ?>
							<?php } ?>
						</ul>


						<div class="tab-content">
							<!--Halaman Tab Semester 1-->
							<div class="tab-pane" id="semester-1">
								<div class="text-center">
									<h2>Report Semester 1</h2>
									<div class="alert alert-danger">
										<b>Maximal Size Trankrip Nilai : 150 Kb & Format Transkrip Nilai : .PDF</b>
									</div>
								</div>

								<?php foreach ($data_nim as $value) { ?>
								<ul class="nav nav-tabs">
									<li><a class="style-tabs" href="#lihat-1" data-toggle="tab">Data Report Semester 1</a></li>
									<li><a class="style-tabs" href="#update-1" data-toggle="tab">Update Report Semester 1</a></li>
								</ul>

								<div class="tab-content">
									<div class="tab-pane active" id="lihat-1">
										<table class="table">
											<tr class="form-group">
												<td><b>IP Semester 1</b></td>
												<td>:</td>
												<td><?php echo $value->ip_s1; ?></td>
											</tr>

											<tr class="form-group">
												<td><b>IPK Semester 1</b></td>
												<td>:</td>
												<td><?php echo $value->ip_k1; ?></td>
											</tr>

											<tr class="form-group">
												<td><b>Transkrip Nilai Semester 1</b></td>
												<td>:</td>
												<td><?php
														if($value->transkrip_nilai1 != NULL){
													?>
														<a target="_blank" class="btn btn-success" href="<?=base_url().'assets/transkrip_nilai/'.$value->transkrip_nilai1; ?>">Transkrip Semester 1</a>
													<?php }else if($value->transkrip_nilai1 == NULL) { ?>
														<p>Anda Belum Upload Transkrip Nilai</p>
													<?php } ?>
												</td>
											</tr>
										</table>
									</div>

									<div class="tab-pane" id="update-1">
										<br/>
										<form action="<?=base_url('C_mhs/report'); ?>" method="POST" enctype="multipart/form-data">
											<input type="hidden" value="<?php echo $value->nim; ?>" name="nim">
											<div class="form-group">
												<label>Jumlah SKS Semester 1 (yang diambil)</label>
												<input class="form-control" type="number" name="sks_1" required="required" placeholder="SKS Semester 1" value="<?php echo $value->sks1; ?>">
											</div>

											<div class="form-group">
												<label>Jumlah Total Nilai SKS Semester 1</label>
												<input class="form-control" type="number" name="total_sks_1" required="required" placeholder="Total Nilai SKS Semester 1" value="<?php echo $value->t_sks1; ?>">
											</div>

											<div class="form-group">
												<input id="ceklis1" type="checkbox" name="over_transkrip" value="1">
												<label for="ceklis1" class="asterik">Ceklis, Jika ingin menambahkan/mengganti transkrip nilai anda.</label>
												<br/>
												<label>Upload Transkrip Nilai Semester 1</label>
												<input class="form-control" type="file" name="transkrip_nilai_1">
											</div>
											<button style="float: right;" class="btn btn-primary" type="submit">Simpan</button>
										</form>
									</div>
								</div>
								<?php } ?>
							</div>
							<!--End Halaman Tab Semester 1-->

							<!--Halaman Tab Semester 2-->
							<div class="tab-pane" id="semester-2">
								<div class="text-center">
									<h2>Report Semester 2</h2>
									<div class="alert alert-danger">
										<b>Maximal Size Trankrip Nilai : 150 Kb & Format Transkrip Nilai : .PDF</b>
									</div>
								</div>

								<?php foreach ($data_nim as $value) { ?>
								<ul class="nav nav-tabs">
									<li><a class="style-tabs" href="#lihat-2" data-toggle="tab">Data Report Semester 2</a></li>
									<li><a class="style-tabs" href="#update-2" data-toggle="tab">Update Report Semester 2</a></li>
								</ul>

								<div class="tab-content">
									<div class="tab-pane active" id="lihat-2">
										<table class="table">
											<tr class="form-group">
												<td><b>IP Semester 2</b></td>
												<td>:</td>
												<td><?php echo $value->ip_s2; ?></td>
											</tr>

											<tr class="form-group">
												<td><b>IPK Semester 2</b></td>
												<td>:</td>
												<td><?php echo $value->ip_k2; ?></td>
											</tr>

											<tr class="form-group">
												<td><b>Transkrip Nilai Semester 2</b></td>
												<td>:</td>
												<td>
													<?php
														if($value->transkrip_nilai2 != NULL){
													?>
														<a target="_blank" class="btn btn-success" href="<?=base_url().'assets/transkrip_nilai/'.$value->transkrip_nilai2; ?>">Transkrip Semester 2</a>
													<?php }else if($value->transkrip_nilai2 == NULL) { ?>
														<p>Anda Belum Upload Transkrip Nilai</p>
													<?php } ?>
												</td>
											</tr>
										</table>
									</div>

									<div class="tab-pane" id="update-2">
										<br/>
										<form action="<?=base_url('C_mhs/report'); ?>" method="POST" enctype="multipart/form-data">
											<input type="hidden" value="<?php echo $value->nim; ?>" name="nim">
											<div class="form-group">
												<label>Jumlah SKS Semester 2 (yang diambil)</label>
												<input class="form-control" type="number" name="sks_2" required="required" placeholder="SKS Semester 2" value="<?php echo $value->sks2; ?>">
											</div>

											<div class="form-group">
												<label>Jumlah Total Nilai SKS Semester 2</label>
												<input class="form-control" type="number" name="total_sks_2" required="required" placeholder="Total Nilai SKS Semester 2" value="<?php echo $value->t_sks2; ?>">
											</div>

											<div class="form-group">
												<input id="ceklis2" type="checkbox" name="over_transkrip" value="1">
												<label for="ceklis2" class="asterik">Ceklis, Jika ingin menambahkan/mengganti transkrip nilai anda.</label>
												<br/>
												<label>Upload Transkrip Nilai Semester 2</label>
												<input class="form-control" type="file" name="transkrip_nilai_2">
											</div>
											<button style="float: right;" class="btn btn-primary" type="submit">Simpan</button>
										</form>
									</div>
								</div>
								<?php } ?>
							</div>
							<!--End Halaman Tab Semester 2-->

							<!--Halaman Tab Semester 3-->
							<div class="tab-pane" id="semester-3">
								<div class="text-center">
									<h2>Report Semester 3</h2>
									<div class="alert alert-danger">
										<b>Maximal Size Trankrip Nilai : 150 Kb & Format Transkrip Nilai : .PDF</b>
									</div>
								</div>

								<?php foreach ($data_nim as $value) { ?>
								<ul class="nav nav-tabs">
									<li><a class="style-tabs" href="#lihat-3" data-toggle="tab">Data Report Semester 3</a></li>
									<li><a class="style-tabs" href="#update-3" data-toggle="tab">Update Report Semester 3</a></li>
								</ul>

								<div class="tab-content">
									<div class="tab-pane active" id="lihat-3">
										<table class="table">
											<tr class="form-group">
												<td><b>IP Semester 3</b></td>
												<td>:</td>
												<td><?php echo $value->ip_s3; ?></td>
											</tr>

											<tr class="form-group">
												<td><b>IPK Semester 3</b></td>
												<td>:</td>
												<td><?php echo $value->ip_k3; ?></td>
											</tr>

											<tr class="form-group">
												<td><b>Transkrip Nilai Semester 3</b></td>
												<td>:</td>
												<td>
													<?php
														if($value->transkrip_nilai3 != NULL){
													?>
														<a class="btn btn-success" target="_blank" href="<?=base_url().'assets/transkrip_nilai/'.$value->transkrip_nilai3; ?>">Transkrip Semester 3</a>
													<?php }else if($value->transkrip_nilai3 == NULL) { ?>
														<p>Anda Belum Upload Transkrip Nilai</p>
													<?php } ?>
												</td>
											</tr>
										</table>
									</div>

									<div class="tab-pane" id="update-3">
										<br/>
										<form action="<?=base_url('C_mhs/report'); ?>" method="POST" enctype="multipart/form-data">
											<input type="hidden" value="<?php echo $value->nim; ?>" name="nim">
											<div class="form-group">
												<label>Jumlah SKS Semester 3 (yang diambil)</label>
												<input class="form-control" type="number" name="sks_3" required="required" placeholder="SKS Semester 3" value="<?php echo $value->sks3; ?>">
											</div>

											<div class="form-group">
												<label>Jumlah Total Nilai SKS Semester 3</label>
												<input class="form-control" type="number" name="total_sks_3" required="required" placeholder="Total Nilai SKS Semester 3" value="<?php echo $value->t_sks3; ?>">
											</div>

											<div class="form-group">
												<input id="ceklis3" type="checkbox" name="over_transkrip" value="1">
												<label for="ceklis3" class="asterik">Ceklis, Jika ingin menambahkan/mengganti transkrip nilai anda.</label>
												<br/>
												<label>Upload Transkrip Nilai Semester 3</label>
												<input class="form-control" type="file" name="transkrip_nilai_3">
											</div>
											<button style="float: right;" class="btn btn-primary" type="submit">Simpan</button>
										</form>
									</div>
								</div>
								<?php } ?>
							</div>
							<!--End Halaman Tab Semester 3-->

							<!--Halaman Tab Semester 4-->
							<div class="tab-pane" id="semester-4">
								<div class="text-center">
									<h2>Report Semester 4</h2>
									<div class="alert alert-danger">
										<b>Maximal Size Trankrip Nilai : 150 Kb & Format Transkrip Nilai : .PDF</b>
									</div>
								</div>

								<?php foreach ($data_nim as $value) { ?>
								<ul class="nav nav-tabs">
									<li><a class="style-tabs" href="#lihat-4" data-toggle="tab">Data Report Semester 4</a></li>
									<li><a class="style-tabs" href="#update-4" data-toggle="tab">Update Report Semester 4</a></li>
								</ul>

								<div class="tab-content">
									<div class="tab-pane active" id="lihat-4">
										<table class="table">
											<tr class="form-group">
												<td><b>IP Semester 4</b></td>
												<td>:</td>
												<td><?php echo $value->ip_s4; ?></td>
											</tr>

											<tr class="form-group">
												<td><b>IPK Semester 4</b></td>
												<td>:</td>
												<td><?php echo $value->ip_k4; ?></td>
											</tr>

											<tr class="form-group">
												<td><b>Transkrip Nilai Semester 4</b></td>
												<td>:</td>
												<td>
													<?php
														if($value->transkrip_nilai4 != NULL){
													?>
														<a class="btn btn-success" target="_blank" href="<?=base_url().'assets/transkrip_nilai/'.$value->transkrip_nilai4; ?>">Transkrip Semester 4</a>
													<?php }else if($value->transkrip_nilai4 == NULL) { ?>
														<p>Anda Belum Upload Transkrip Nilai</p>
													<?php } ?>
												</td>
											</tr>
										</table>
									</div>

									<div class="tab-pane" id="update-4">
										<br/>
										<form action="<?=base_url('C_mhs/report'); ?>" method="POST" enctype="multipart/form-data">
											<input type="hidden" value="<?php echo $value->nim; ?>" name="nim">
											<div class="form-group">
												<label>Jumlah SKS Semester 4 (yang diambil)</label>
												<input class="form-control" type="number" name="sks_4" required="required" placeholder="SKS Semester 4" value="<?php echo $value->sks4; ?>">
											</div>

											<div class="form-group">
												<label>Jumlah Total Nilai SKS Semester 4</label>
												<input class="form-control" type="number" name="total_sks_4" required="required" placeholder="Total Nilai SKS Semester 4" value="<?php echo $value->t_sks4; ?>">
											</div>

											<div class="form-group">
												<input id="ceklis4" type="checkbox" name="over_transkrip" value="1">
												<label for="ceklis4" class="asterik">Ceklis, Jika ingin menambahkan/mengganti transkrip nilai anda.</label>
												<br/>
												<label>Upload Transkrip Nilai Semester 4</label>
												<input class="form-control" type="file" name="transkrip_nilai_4">
											</div>
											<button style="float: right;" class="btn btn-primary" type="submit">Simpan</button>
										</form>
									</div>
								</div>
								<?php } ?>
							</div>
							<!--End Halaman Tab Semester 4-->

							<!--Halaman Tab Semester 5-->
							<div class="tab-pane" id="semester-5">
								<div class="text-center">
									<h2>Report Semester 5</h2>
									<div class="alert alert-danger">
										<b>Maximal Size Trankrip Nilai : 150 Kb & Format Transkrip Nilai : .PDF</b>
									</div>
								</div>

								<?php foreach ($data_nim as $value) { ?>
								<ul class="nav nav-tabs">
									<li><a class="style-tabs" href="#lihat-5" data-toggle="tab">Data Report Semester 5</a></li>
									<li><a class="style-tabs" href="#update-5" data-toggle="tab">Update Report Semester 5</a></li>
								</ul>

								<div class="tab-content">
									<div class="tab-pane active" id="lihat-5">
										<table class="table">
											<tr class="form-group">
												<td><b>IP Semester 5</b></td>
												<td>:</td>
												<td><?php echo $value->ip_s5; ?></td>
											</tr>

											<tr class="form-group">
												<td><b>IPK Semester 5</b></td>
												<td>:</td>
												<td><?php echo $value->ip_k5; ?></td>
											</tr>

											<tr class="form-group">
												<td><b>Transkrip Nilai Semester 5</b></td>
												<td>:</td>
												<td>
													<?php
														if($value->transkrip_nilai5 != NULL){
													?>
														<a class="btn btn-success" target="_blank" href="<?=base_url().'assets/transkrip_nilai/'.$value->transkrip_nilai5; ?>">Transkrip Semester 5</a>
													<?php }else if($value->transkrip_nilai5 == NULL) { ?>
														<p>Anda Belum Upload Transkrip Nilai</p>
													<?php } ?>
												</td>
											</tr>
										</table>
									</div>

									<div class="tab-pane" id="update-5">
										<br/>
										<form action="<?=base_url('C_mhs/report'); ?>" method="POST" enctype="multipart/form-data">
											<input type="hidden" value="<?php echo $value->nim; ?>" name="nim">
											<div class="form-group">
												<label>Jumlah SKS Semester 5 (yang diambil)</label>
												<input class="form-control" type="number" name="sks_5" required="required" placeholder="SKS Semester 5" value="<?php echo $value->sks5; ?>">
											</div>

											<div class="form-group">
												<label>Jumlah Total Nilai SKS Semester 5</label>
												<input class="form-control" type="number" name="total_sks_5" required="required" placeholder="Total Nilai SKS Semester 5" value="<?php echo $value->t_sks5; ?>">
											</div>

											<div class="form-group">
												<input id="ceklis5" type="checkbox" name="over_transkrip" value="1">
												<label for="ceklis5" class="asterik">Ceklis, Jika ingin menambahkan/mengganti transkrip nilai anda.</label>
												<br/>
												<label>Upload Transkrip Nilai Semester 5</label>
												<input class="form-control" type="file" name="transkrip_nilai_5">
											</div>
											<button style="float: right;" class="btn btn-primary" type="submit">Simpan</button>
										</form>
									</div>
								</div>
								<?php } ?>
							</div>
							<!--End Halaman Tab Semester 5-->

							<!--Halaman Tab Semester 6-->
							<div class="tab-pane" id="semester-6">
								<div class="text-center">
									<h2>Report Semester 6</h2>
									<div class="alert alert-danger">
										<b>Maximal Size Trankrip Nilai : 150 Kb & Format Transkrip Nilai : .PDF</b>
									</div>
								</div>

								<?php foreach ($data_nim as $value) { ?>
								<ul class="nav nav-tabs">
									<li><a class="style-tabs" href="#lihat-6" data-toggle="tab">Data Report Semester 6</a></li>
									<li><a class="style-tabs" href="#update-6" data-toggle="tab">Update Report Semester 6</a></li>
								</ul>

								<div class="tab-content">
									<div class="tab-pane active" id="lihat-6">
										<table class="table">
											<tr class="form-group">
												<td><b>IP Semester 6</b></td>
												<td>:</td>
												<td><?php echo $value->ip_s6; ?></td>
											</tr>

											<tr class="form-group">
												<td><b>IPK Semester 6</b></td>
												<td>:</td>
												<td><?php echo $value->ip_k6; ?></td>
											</tr>

											<tr class="form-group">
												<td><b>Transkrip Nilai Semester 6</b></td>
												<td>:</td>
												<td>
													<?php
														if($value->transkrip_nilai6 != NULL){
													?>
														<a class="btn btn-success" target="_blank" href="<?=base_url().'assets/transkrip_nilai/'.$value->transkrip_nilai6; ?>">Transkrip Semester 6</a>
													<?php }else if($value->transkrip_nilai6 == NULL) { ?>
														<p>Anda Belum Upload Transkrip Nilai</p>
													<?php } ?>
												</td>
											</tr>
										</table>
									</div>

									<div class="tab-pane" id="update-6">
										<br/>
										<form action="<?=base_url('C_mhs/report'); ?>" method="POST" enctype="multipart/form-data">
											<input type="hidden" value="<?php echo $value->nim; ?>" name="nim">
											<div class="form-group">
												<label>Jumlah SKS Semester 6 (yang diambil)</label>
												<input class="form-control" type="number" name="sks_6" required="required" placeholder="SKS Semester 6" value="<?php echo $value->sks6; ?>">
											</div>

											<div class="form-group">
												<label>Jumlah Total Nilai SKS Semester 6</label>
												<input class="form-control" type="number" name="total_sks_6" required="required" placeholder="Total Nilai SKS Semester 6" value="<?php echo $value->t_sks6; ?>">
											</div>

											<div class="form-group">
												<input id="ceklis6" type="checkbox" name="over_transkrip" value="1">
												<label for="ceklis6" class="asterik">Ceklis, Jika ingin menambahkan/mengganti transkrip nilai anda.</label>
												<br/>
												<label>Upload Transkrip Nilai Semester 6</label>
												<input class="form-control" type="file" name="transkrip_nilai_6">
											</div>
											<button style="float: right;" class="btn btn-primary" type="submit">Simpan</button>
										</form>
									</div>
								</div>
								<?php } ?>
							</div>
							<!--End Halaman Tab Semester 6-->

							<!--Halaman Tab Semester 7-->
							<div class="tab-pane" id="semester-7">
								<div class="text-center">
									<h2>Report Semester 7</h2>
									<div class="alert alert-danger">
										<b>Maximal Size Trankrip Nilai : 150 Kb & Format Transkrip Nilai : .PDF</b>
									</div>
								</div>

								<?php foreach ($data_nim as $value) { ?>
								<ul class="nav nav-tabs">
									<li><a class="style-tabs" href="#lihat-7" data-toggle="tab">Data Report Semester 7</a></li>
									<li><a class="style-tabs" href="#update-7" data-toggle="tab">Update Report Semester 7</a></li>
								</ul>

								<div class="tab-content">
									<div class="tab-pane active" id="lihat-7">
										<table class="table">
											<tr class="form-group">
												<td><b>IP Semester 7</b></td>
												<td>:</td>
												<td><?php echo $value->ip_s7; ?></td>
											</tr>

											<tr class="form-group">
												<td><b>IPK Semester 7</b></td>
												<td>:</td>
												<td><?php echo $value->ip_k7; ?></td>
											</tr>

											<tr class="form-group">
												<td><b>Transkrip Nilai Semester 7</b></td>
												<td>:</td>
												<td>
													<?php
														if($value->transkrip_nilai7 != NULL){
													?>
														<a class="btn btn-success" target="_blank" href="<?=base_url().'assets/transkrip_nilai/'.$value->transkrip_nilai7; ?>">Transkrip Semester 7</a>
													<?php }else if($value->transkrip_nilai7 == NULL) { ?>
														<p>Anda Belum Upload Transkrip Nilai</p>
													<?php } ?>
												</td>
											</tr>
										</table>
									</div>

									<div class="tab-pane" id="update-7">
										<br/>
										<form action="<?=base_url('C_mhs/report'); ?>" method="POST" enctype="multipart/form-data">
											<input type="hidden" value="<?php echo $value->nim; ?>" name="nim">
											<div class="form-group">
												<label>Jumlah SKS Semester 7 (yang diambil)</label>
												<input class="form-control" type="number" name="sks_7" required="required" placeholder="SKS Semester 7" value="<?php echo $value->sks7; ?>">
											</div>

											<div class="form-group">
												<label>Jumlah Total Nilai SKS Semester 7</label>
												<input class="form-control" type="number" name="total_sks_7" required="required" placeholder="Total Nilai SKS Semester 7" value="<?php echo $value->t_sks7; ?>">
											</div>

											<div class="form-group">
												<input id="ceklis7" type="checkbox" name="over_transkrip" value="1">
												<label for="ceklis7" class="asterik">Ceklis, Jika ingin menambahkan/mengganti transkrip nilai anda.</label>
												<br/>
												<label>Upload Transkrip Nilai Semester 7</label>
												<input class="form-control" type="file" name="transkrip_nilai_7">
											</div>
											<button style="float: right;" class="btn btn-primary" type="submit">Simpan</button>
										</form>
									</div>
								</div>
								<?php } ?>
							</div>
							<!--End Halaman Tab Semester 7-->

							<!--Halaman Tab Semester 8-->
							<div class="tab-pane" id="semester-8">
								<div class="text-center">
									<h2>Report Semester 8</h2>
									<div class="alert alert-danger">
										<b>Maximal Size Trankrip Nilai : 150 Kb & Format Transkrip Nilai : .PDF</b>
									</div>
								</div>

								<?php foreach ($data_nim as $value) { ?>
								<ul class="nav nav-tabs">
									<li><a class="style-tabs" href="#lihat-8" data-toggle="tab">Data Report Semester 8</a></li>
									<li><a class="style-tabs" href="#update-8" data-toggle="tab">Update Report Semester 8</a></li>
								</ul>

								<div class="tab-content">
									<div class="tab-pane active" id="lihat-8">
										<table class="table">
											<tr class="form-group">
												<td><b>IP Semester 8</b></td>
												<td>:</td>
												<td><?php echo $value->ip_s8; ?></td>
											</tr>

											<tr class="form-group">
												<td><b>IPK Semester 8</b></td>
												<td>:</td>
												<td><?php echo $value->ip_k8; ?></td>
											</tr>

											<tr class="form-group">
												<td><b>Transkrip Nilai Semester 8</b></td>
												<td>:</td>
												<td>
													<?php
														if($value->transkrip_nilai8 != NULL){
													?>
														<a class="btn btn-success" target="_blank" href="<?=base_url().'assets/transkrip_nilai/'.$value->transkrip_nilai8; ?>">Transkrip Semester 8</a>
													<?php }else if($value->transkrip_nilai8 == NULL) { ?>
														<p>Anda Belum Upload Transkrip Nilai</p>
													<?php } ?>
												</td>
											</tr>
										</table>
									</div>

									<div class="tab-pane" id="update-8">
										<br/>
										<form action="<?=base_url('C_mhs/report'); ?>" method="POST" enctype="multipart/form-data">
											<input type="hidden" value="<?php echo $value->nim; ?>" name="nim">
											<div class="form-group">
												<label>Jumlah SKS Semester 8 (yang diambil)</label>
												<input class="form-control" type="number" name="sks_8" required="required" placeholder="SKS Semester 8" value="<?php echo $value->sks8; ?>">
											</div>

											<div class="form-group">
												<label>Jumlah Total Nilai SKS Semester 8</label>
												<input class="form-control" type="number" name="total_sks_8" required="required" placeholder="Total Nilai SKS Semester 8" value="<?php echo $value->t_sks8; ?>">
											</div>

											<div class="form-group">
												<input id="ceklis8" type="checkbox" name="over_transkrip" value="1">
												<label for="ceklis8" class="asterik">Ceklis, Jika ingin menambahkan/mengganti transkrip nilai anda.</label>
												<br/>
												<label>Upload Transkrip Nilai Semester 8</label>
												<input class="form-control" type="file" name="transkrip_nilai_8">
											</div>
											<button style="float: right;" class="btn btn-primary" type="submit">Simpan</button>
										</form>
									</div>
								</div>
								<?php } ?>
							</div>
							<!--End Halaman Tab Semester 8-->
						</div> <!-- End class="tab-content"-->
					</div> <!--End class="panel-body"-->
				</div> <!--End class="panel panel-info"-->

				<div class="text-center">
					<?php
						//load footer
						$this->load->view('project_bidikmisi/footer/footer');
					?>
				</div>
			</div> <!--End class="row"-->
		</div> <!--End class="container col-md-8"-->
	</body>
</html>
