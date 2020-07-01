<?php
	$this->load->view('project_bidikmisi/header/admin/header');
	$data_kosong = NULL;
	$kosong = NULL;
?>
<!--include chart.min.js-->
<script src="<?=base_url('assets/adminlte/plugins/chartjs/Chart.bundle.js'); ?>"></script>
	<div class="content-wrapper">
	<!-- Content Header (Page header) -->
		<section class="content-header">
			<h1>
				<i class="fa fa-tachometer" aria-hidden="true"></i> Data Report Beasiswa KIP-K
			</h1>
		</section>

		<section class="content">
			<div class="row">
				<div class="col-md-12">
					<div class="box">
						<?php foreach($data_report_nim as $value) { ?>
						<div class="box-header">
							<h3 class="box-title">Data Report <?php echo $value->nama_mahasiswa; ?></h3>
						</div>

						<div class="box-body">
							<div class="nav-tabs-custom">
								<ul class="nav nav-tabs">
									<li><a href="#view-data" data-toggle="tab">View Data</a></li>
									<li><a href="#edit-data" data-toggle="tab">Edit Data</a></li>
								</ul>

								<div class="tab-content">
									<!--Tab View Data-->
									<div class="tab-pane active" id="view-data">
										<table class="table">
											<tr>
												<td>Nama</td>
												<td>:</td>
												<td><?php echo $value->nama_mahasiswa; ?></td>
											</tr>

											<tr>
												<td>Jenis Kelamin</td>
												<td>:</td>
												<td><?php echo $value->jenis_kelamin; ?></td>
											</tr>

											<tr>
												<td>Fakultas</td>
												<td>:</td>
												<td><?php
												foreach($fakultas as $x_fak){
													if($value->fakultas == $x_fak->id_fakultas){
														echo $x_fak->nama_fakultas;
													}
												}
												if($value->fakultas == $kosong || $value->fakultas == '0'){
													echo $data_kosong;
												}
												?></td>
											</tr>

											<tr>
												<td>Jurusan</td>
												<td>:</td>
												<td><?php
												foreach($jurusan as $x_jur){
													if($value->jurusan == $x_jur->id_jurusan){
														echo $x_jur->nama_jurusan;
													}
												}
												if($value->jurusan == $kosong || $value->jurusan == '0'){
													echo $data_kosong;
												}
												?></td>
											</tr>

											<tr>
												<td>Angkatan</td>
												<td>:</td>
												<td><?php echo $value->angkatan; ?></td>
											</tr>
										</table>

										<!--Box View Data-->
										<div class="nav-tabs-custom">
											<ul class="nav nav-tabs">
												<li><a href="#view-semester1" data-toggle="tab">Semester 1</a></li>
												<li><a href="#view-semester2" data-toggle="tab">Semester 2</a></li>
												<li><a href="#view-semester3" data-toggle="tab">Semester 3</a></li>
												<li><a href="#view-semester4" data-toggle="tab">Semester 4</a></li>
												<li><a href="#view-semester5" data-toggle="tab">Semester 5</a></li>
												<li><a href="#view-semester6" data-toggle="tab">Semester 6</a></li>
												<li><a href="#view-semester7" data-toggle="tab">Semester 7</a></li>
												<li><a href="#view-semester8" data-toggle="tab">Semester 8</a></li>
											</ul>

											<div class="tab-content">
												<!--View Semester 1-->
												<div class="tab-pane active" id="view-semester1">
													<table class="table">
														<tr>
															<td>Kontrak SKS Semester 1</td>
															<td>:</td>
															<td><?php echo $value->sks1; ?></td>
														</tr>

														<tr>
															<td>Total Nilai SKS Semester 1</td>
															<td>:</td>
															<td><?php echo $value->t_sks1; ?></td>
														</tr>

														<tr>
															<td>IP Semester 1</td>
															<td>:</td>
															<td><?php echo $value->ip_s1; ?></td>
														</tr>

														<tr>
															<td>IPK Semester 1</td>
															<td>:</td>
															<td><?php echo $value->ip_k1; ?></td>
														</tr>

														<tr>
															<td>Transkrip Nilai Semester 1</td>
															<td>:</td>
															<td><?php
																if($value->transkrip_nilai1 != NULL){
															?>
																<a target="_blank" class="btn btn-success" href="<?=base_url().'assets/transkrip_nilai/'.$value->transkrip_nilai1; ?>">Transkrip Semester 1</a>
															<?php }else if($value->transkrip_nilai1 == NULL) { ?>
																<p><?php echo $value->nama_mahasiswa; ?> Belum Upload Transkrip Nilai Semester 1</p>
															<?php } ?></td>
														</tr>
													</table>
												</div>
												<!--End View Semester 1-->

												<!--View Semester 2-->
												<div class="tab-pane" id="view-semester2">
													<table class="table">
														<tr>
															<td>Kontrak SKS Semester 2</td>
															<td>:</td>
															<td><?php echo $value->sks2; ?></td>
														</tr>

														<tr>
															<td>Total Nilai SKS Semester 2</td>
															<td>:</td>
															<td><?php echo $value->t_sks2; ?></td>
														</tr>

														<tr>
															<td>IP Semester 2</td>
															<td>:</td>
															<td><?php echo $value->ip_s2; ?></td>
														</tr>

														<tr>
															<td>IPK Semester 2</td>
															<td>:</td>
															<td><?php echo $value->ip_k2; ?></td>
														</tr>

														<tr>
															<td>Transkrip Nilai Semester 2</td>
															<td>:</td>
															<td><?php
																if($value->transkrip_nilai2 != NULL){
															?>
																<a target="_blank" class="btn btn-success" href="<?=base_url().'assets/transkrip_nilai/'.$value->transkrip_nilai2; ?>">Transkrip Semester 2</a>
															<?php }else if($value->transkrip_nilai2 == NULL) { ?>
																<p><?php echo $value->nama_mahasiswa; ?> Belum Upload Transkrip Nilai Semester 2</p>
															<?php } ?></td>
														</tr>
													</table>
												</div>
												<!--End View Semester 2-->

												<!--View Semester 3-->
												<div class="tab-pane" id="view-semester3">
													<table class="table">
														<tr>
															<td>Kontrak SKS Semester 3</td>
															<td>:</td>
															<td><?php echo $value->sks3; ?></td>
														</tr>

														<tr>
															<td>Total Nilai SKS Semester 3</td>
															<td>:</td>
															<td><?php echo $value->t_sks3; ?></td>
														</tr>

														<tr>
															<td>IP Semester 3</td>
															<td>:</td>
															<td><?php echo $value->ip_s3; ?></td>
														</tr>

														<tr>
															<td>IPK Semester 3</td>
															<td>:</td>
															<td><?php echo $value->ip_k3; ?></td>
														</tr>

														<tr>
															<td>Transkrip Nilai Semester 3</td>
															<td>:</td>
															<td><?php
																if($value->transkrip_nilai3 != NULL){
															?>
																<a target="_blank" class="btn btn-success" href="<?=base_url().'assets/transkrip_nilai/'.$value->transkrip_nilai3; ?>">Transkrip Semester 3</a>
															<?php }else if($value->transkrip_nilai3 == NULL) { ?>
																<p><?php echo $value->nama_mahasiswa; ?> Belum Upload Transkrip Nilai Semester 3</p>
															<?php } ?></td>
														</tr>
													</table>
												</div>
												<!--End View Semester 3-->

												<!--View Semester 4-->
												<div class="tab-pane" id="view-semester4">
													<table class="table">
														<tr>
															<td>Kontrak SKS Semester 4</td>
															<td>:</td>
															<td><?php echo $value->sks4; ?></td>
														</tr>

														<tr>
															<td>Total Nilai SKS Semester 4</td>
															<td>:</td>
															<td><?php echo $value->t_sks4; ?></td>
														</tr>

														<tr>
															<td>IP Semester 4</td>
															<td>:</td>
															<td><?php echo $value->ip_s4; ?></td>
														</tr>

														<tr>
															<td>IPK Semester 4</td>
															<td>:</td>
															<td><?php echo $value->ip_k4; ?></td>
														</tr>

														<tr>
															<td>Transkrip Nilai Semester 4</td>
															<td>:</td>
															<td><?php
																if($value->transkrip_nilai4 != NULL){
															?>
																<a target="_blank" class="btn btn-success" href="<?=base_url().'assets/transkrip_nilai/'.$value->transkrip_nilai4; ?>">Transkrip Semester 4</a>
															<?php }else if($value->transkrip_nilai4 == NULL) { ?>
																<p><?php echo $value->nama_mahasiswa; ?> Belum Upload Transkrip Nilai Semester 4</p>
															<?php } ?></td>
														</tr>
													</table>
												</div>
												<!--End View Semester 4-->

												<!--View Semester 5-->
												<div class="tab-pane" id="view-semester5">
													<table class="table">
														<tr>
															<td>Kontrak SKS Semester 5</td>
															<td>:</td>
															<td><?php echo $value->sks5; ?></td>
														</tr>

														<tr>
															<td>Total Nilai SKS Semester 5</td>
															<td>:</td>
															<td><?php echo $value->t_sks5; ?></td>
														</tr>

														<tr>
															<td>IP Semester 5</td>
															<td>:</td>
															<td><?php echo $value->ip_s5; ?></td>
														</tr>

														<tr>
															<td>IPK Semester 5</td>
															<td>:</td>
															<td><?php echo $value->ip_k5; ?></td>
														</tr>

														<tr>
															<td>Transkrip Nilai Semester 5</td>
															<td>:</td>
															<td><?php
																if($value->transkrip_nilai5 != NULL){
															?>
																<a target="_blank" class="btn btn-success" href="<?=base_url().'assets/transkrip_nilai/'.$value->transkrip_nilai5; ?>">Transkrip Semester 5</a>
															<?php }else if($value->transkrip_nilai5 == NULL) { ?>
																<p><?php echo $value->nama_mahasiswa; ?> Belum Upload Transkrip Nilai Semester 5</p>
															<?php } ?></td>
														</tr>
													</table>
												</div>
												<!--End View Semester 5-->

												<!--View Semester 6-->
												<div class="tab-pane" id="view-semester6">
													<table class="table">
														<tr>
															<td>Kontrak SKS Semester 6</td>
															<td>:</td>
															<td><?php echo $value->sks6; ?></td>
														</tr>

														<tr>
															<td>Total Nilai SKS Semester 6</td>
															<td>:</td>
															<td><?php echo $value->t_sks6; ?></td>
														</tr>

														<tr>
															<td>IP Semester 6</td>
															<td>:</td>
															<td><?php echo $value->ip_s6; ?></td>
														</tr>

														<tr>
															<td>IPK Semester 6</td>
															<td>:</td>
															<td><?php echo $value->ip_k6; ?></td>
														</tr>

														<tr>
															<td>Transkrip Nilai Semester 6</td>
															<td>:</td>
															<td><?php
																if($value->transkrip_nilai6 != NULL){
															?>
																<a target="_blank" class="btn btn-success" href="<?=base_url().'assets/transkrip_nilai/'.$value->transkrip_nilai6; ?>">Transkrip Semester 6</a>
															<?php }else if($value->transkrip_nilai6 == NULL) { ?>
																<p><?php echo $value->nama_mahasiswa; ?> Belum Upload Transkrip Nilai Semester 6</p>
															<?php } ?></td>
														</tr>
													</table>
												</div>
												<!--End View Semester 6-->

												<!--View Semester 7-->
												<div class="tab-pane" id="view-semester7">
													<table class="table">
														<tr>
															<td>Kontrak SKS Semester 7</td>
															<td>:</td>
															<td><?php echo $value->sks7; ?></td>
														</tr>

														<tr>
															<td>Total Nilai SKS Semester 7</td>
															<td>:</td>
															<td><?php echo $value->t_sks7; ?></td>
														</tr>

														<tr>
															<td>IP Semester 7</td>
															<td>:</td>
															<td><?php echo $value->ip_s7; ?></td>
														</tr>

														<tr>
															<td>IPK Semester 7</td>
															<td>:</td>
															<td><?php echo $value->ip_k7; ?></td>
														</tr>

														<tr>
															<td>Transkrip Nilai Semester 7</td>
															<td>:</td>
															<td><?php
																if($value->transkrip_nilai7 != NULL){
															?>
																<a target="_blank" class="btn btn-success" href="<?=base_url().'assets/transkrip_nilai/'.$value->transkrip_nilai7; ?>">Transkrip Semester 7</a>
															<?php }else if($value->transkrip_nilai7 == NULL) { ?>
																<p><?php echo $value->nama_mahasiswa; ?> Belum Upload Transkrip Nilai Semester 7</p>
															<?php } ?></td>
														</tr>
													</table>
												</div>
												<!--End View Semester 7-->

												<!--View Semester 8-->
												<div class="tab-pane" id="view-semester8">
													<table class="table">
														<tr>
															<td>Kontrak SKS Semester 8</td>
															<td>:</td>
															<td><?php echo $value->sks8; ?></td>
														</tr>

														<tr>
															<td>Total Nilai SKS Semester 8</td>
															<td>:</td>
															<td><?php echo $value->t_sks8; ?></td>
														</tr>

														<tr>
															<td>IP Semester 8</td>
															<td>:</td>
															<td><?php echo $value->ip_s8; ?></td>
														</tr>

														<tr>
															<td>IPK Semester 8</td>
															<td>:</td>
															<td><?php echo $value->ip_k8; ?></td>
														</tr>

														<tr>
															<td>Transkrip Nilai Semester 8</td>
															<td>:</td>
															<td><?php
																if($value->transkrip_nilai8 != NULL){
															?>
																<a target="_blank" class="btn btn-success" href="<?=base_url().'assets/transkrip_nilai/'.$value->transkrip_nilai8; ?>">Transkrip Semester 8</a>
															<?php }else if($value->transkrip_nilai8 == NULL) { ?>
																<p><?php echo $value->nama_mahasiswa; ?> Belum Upload Transkrip Nilai Semester 8</p>
															<?php } ?></td>
														</tr>
													</table>
												</div>
												<!--End View Semester 8-->
											</div>
										</div>
										<!--End Box View Data-->

										<!--Grafik IPK-->
										<div class="box">
											<div class="box-header">
												<h3 class="box-title">Grafik IPK <?php echo $value->nama_mahasiswa; ?></h3>
											</div>

											<canvas id="myChart"></canvas>
											<script type="text/javascript">
												var ctx = document.getElementById("myChart");
												var myChart = new Chart(ctx, {
													type: 'line',
													data: {
														labels: ["SEMESTER 1", "SEMESTER 2", "SEMESTER 3", "SEMESTER 4", "SEMESTER 5", "SEMESTER 6","SEMESTER 7","SEMESTER 8"],
														datasets: [{
															label: 'Report Bidikmisi',
															data: [
															<?php foreach($ip_k1 as $k1) {
																echo $k1->ip_k1;
															}?>,
															<?php foreach($ip_k2 as $k2) {
																echo $k2->ip_k2;
															}?>,
															<?php foreach($ip_k3 as $k3) {
																echo $k3->ip_k3;
															}?>,
															<?php foreach($ip_k4 as $k4) {
																echo $k4->ip_k4;
															}?>,
															<?php foreach($ip_k5 as $k5) {
																echo $k5->ip_k5;
															}?>,
															<?php foreach($ip_k6 as $k6) {
																echo $k6->ip_k6;
															}?>,
															<?php foreach($ip_k7 as $k7) {
																echo $k7->ip_k7;
															}?>,
															<?php foreach($ip_k8 as $k8) {
																echo $k8->ip_k8;
															}?>],
															backgroundColor: [
															'rgba(255, 99, 132, 0.2)',
															/*'rgba(0, 255, 0, 0.2)',
															'rgba(150,75,0, 0.2)',
															'rgba(75, 192, 192, 0.2)',
															'rgba(153, 102, 255, 0.2)',
															'rgba(192,	192,192, 0.2)',
															'rgba(255,215,0, 0.2)',
															'rgba(255,127,0, 0.2)'*/
															],
															borderColor: [
															'rgba(255,99,132,1)',
															/*'rgba(0, 255, 0, 1)',
															'rgba(150,75,0, 1)',
															'rgba(75, 192, 192, 1)',
															'rgba(153, 102, 255, 1)',
															'rgba(192,	192,192, 1)',
															'rgba(255,215,0, 1)',
															'rgba(255,127,0, 1)'*/
															],
															borderWidth: 1
														}]
													},
													options: {
														scales: {
															yAxes: [{
																ticks: {
																	beginAtZero: true
																}
															}]
														}
													}
												});

											</script>
										</div>
										<!--End Grafik IPK-->
									</div>
									<!--End Tab View Data-->

									<!--Tab Edit Data-->
									<div class="tab-pane" id="edit-data">
										<form action="<?=base_url('Auth1/update_mhs'); ?>" method="POST">
											<input type="hidden" name="nim" value="<?php echo $value->nim; ?>">
											<input type="hidden" name="edit_mhs" value="1">
											<div class="form-group">
												<label>Nama Mahasiswa</label>
												<input placeholder="Nama Mahasiswa" value="<?php echo $value->nama_mahasiswa; ?>" type="text" required="required" name="nama_mahasiswa" class="form-control">
											</div>

											<div class="form-group">
												<label>Jenis Kelamin</label>
												<select name="jenis_kelamin" required="required" class="form-control">
													<option value="<?php echo $value->jenis_kelamin; ?>"><?php echo $value->jenis_kelamin?></option>
													<option value="">--</option>
													<option value="Laki - Laki">Laki - Laki</option>
													<option value="Perempuan">Perempuan</option>
												</select>
											</div>

											<div class="form-group">
												<label>Fakultas</label>
												<select class="form-control" required="required" name="fakultas" id="fakultas4">
													<?php if($value->fakultas == null || $value->jurusan == '0') { ?>
													<option value="">-Pilih SalahSatu-</option>
														<?php
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
												<label>Angkatan</label>
												<input type="number" value="<?php echo $value->angkatan; ?>" required="required" placeholder="ex : 2015 OR 2016" class="form-control" name="angkatan">
											</div>
											<button type="submit" class="btn btn-primary" style="float:right;">Simpan</button>
										</form>

                                        <br/>
                                        <br/>

										<div class="nav-tabs-custom">
											<ul class="nav nav-tabs">
												<li><a href="#data-semester1" data-toggle="tab">Semester 1</a></li>
												<li><a href="#data-semester2" data-toggle="tab">Semester 2</a></li>
												<li><a href="#data-semester3" data-toggle="tab">Semester 3</a></li>
												<li><a href="#data-semester4" data-toggle="tab">Semester 4</a></li>
												<li><a href="#data-semester5" data-toggle="tab">Semester 5</a></li>
												<li><a href="#data-semester6" data-toggle="tab">Semester 6</a></li>
												<li><a href="#data-semester7" data-toggle="tab">Semester 7</a></li>
												<li><a href="#data-semester8" data-toggle="tab">Semester 8</a></li>
											</ul>

											<div class="tab-content">
												<!--Tab Panel Semester 1-->
												<div class="tab-pane active" id="data-semester1">
													<form action="<?=base_url('Auth1/update_mhs'); ?>" method="POST" enctype="multipart/form-data">
														<input name="nim" type="hidden" value="<?php echo $value->nim; ?>">
														<div class="col-md-12">
															<div class="form-group">
																<h4>Report Semester 1 <?php echo $value->nama_mahasiswa; ?></h4>
																<input id="semester1" type="checkbox" name="semester1" value="1">
																<i><label for="semester1">Ceklis, Jika Ingin Edit Report Semester 1</label></i>
															</div>

															<div class="form-group">
																<label>Kontrak SKS Semester 1</label>
																<input type="number" placeholder="Kontrak SKS Semester 1" class="form-control" name="sks1" value="<?php echo $value->sks1; ?>" required="required">
															</div>

															<div class="form-group">
																<label>Total Nilai SKS Semester 1</label>
																<input type="number" placeholder="Total Nilai SKS Semester 1" class="form-control" name="t_sks1" value="<?php echo $value->t_sks1; ?>" required="required">
															</div>

															<div class="form-group">
																<label>IP Semester 1</label>
																<br/>
																<b><?php echo $value->ip_s1; ?></b>
															</div>

															<div class="form-group">
																<label>IPK Semester 1</label>
																<br/>
																<b><?php echo $value->ip_k1; ?></b>
															</div>

															<div class="form-group">
																<label>Transkrip Semester 1</label>
																<br/>
																<input id="tranksrip_semester1" type="checkbox" name="edit_transkrip_semester1" value="1">
																<i><label for="tranksrip_semester1">Ceklis, Jika Ingin Ubah/Upload Tranksrip Nilai Semester 1</label></i>
																<input type="file" name="transkrip_nilai1">
															</div>

															<div class="col-md-6">
																<?php
																	if($value->transkrip_nilai1 != NULL){
																?>
																	<a target="_blank" class="btn btn-success" href="<?=base_url().'assets/transkrip_nilai/'.$value->transkrip_nilai1; ?>">Transkrip Semester 1</a>
																<?php }else if($value->transkrip_nilai1 == NULL) { ?>
																	<p><?php echo $value->nama_mahasiswa; ?> Belum Upload Transkrip Nilai Semester 1</p>
																<?php } ?>
															</div>

															<div class="col-md-6 col-md-offset-9">
																<button type="submit" class="btn btn-primary">Simpan Data Semester 1</button>
															</div>
														</div>
													</form>
												</div>
												<!--End Tab Panel Semester 1-->

												<!--Tab Panel Semester 2-->
												<div class="tab-pane" id="data-semester2">
													<form action="<?=base_url('Auth1/update_mhs'); ?>" method="POST" enctype="multipart/form-data">
														<input name="nim" type="hidden" value="<?php echo $value->nim; ?>">
														<div class="col-md-12">
															<div class="form-group">
																<h4>Report Semester 2 <?php echo $value->nama_mahasiswa; ?></h4>
																<input id="semester2" type="checkbox" name="semester2" value="2">
																<i><label for="semester2">Ceklis, Jika Ingin Edit Report Semester 2</label></i>
															</div>

															<div class="form-group">
																<label>Kontrak SKS Semester 2</label>
																<input type="number" placeholder="Kontrak SKS Semester 2" class="form-control" name="sks2" value="<?php echo $value->sks2; ?>" required="required">
															</div>

															<div class="form-group">
																<label>Total Nilai SKS Semester 2</label>
																<input type="number" placeholder="Total Nilai SKS Semester 2" class="form-control" name="t_sks2" value="<?php echo $value->t_sks2; ?>" required="required">
															</div>

															<div class="form-group">
																<label>IP Semester 2</label>
																<br/>
																<b><?php echo $value->ip_s2; ?></b>
															</div>

															<div class="form-group">
																<label>IPK Semester 2</label>
																<br/>
																<b><?php echo $value->ip_k2; ?></b>
															</div>

															<div class="form-group">
																<label>Transkrip Semester 2</label>
																<br/>
																<input id="tranksrip_semester2" type="checkbox" name="edit_transkrip_semester2" value="2">
																<i><label for="tranksrip_semester2">Ceklis, Jika Ingin Ubah/Upload Tranksrip Nilai Semester 2</label></i>
																<input type="file" name="transkrip_nilai2">
															</div>

															<div class="col-md-6">
																<?php
																	if($value->transkrip_nilai2 != NULL){
																?>
																	<a target="_blank" class="btn btn-success" href="<?=base_url().'assets/transkrip_nilai/'.$value->transkrip_nilai2; ?>">Transkrip Semester 2</a>
																<?php }else if($value->transkrip_nilai2 == NULL) { ?>
																	<p><?php echo $value->nama_mahasiswa; ?> Belum Upload Transkrip Nilai Semester 2</p>
																<?php } ?>
															</div>

															<div class="col-md-6 col-md-offset-9">
																<button type="submit" class="btn btn-primary">Simpan Data Semester 2</button>
															</div>
														</div>
													</form>
												</div>
												<!--End Tab Panel Semester 2-->

												<!--Tab Panel Semester 3-->
												<div class="tab-pane" id="data-semester3">
													<form action="<?=base_url('Auth1/update_mhs'); ?>" method="POST" enctype="multipart/form-data">
														<input name="nim" type="hidden" value="<?php echo $value->nim; ?>">
														<div class="col-md-12">
															<div class="form-group">
																<h4>Report Semester 3 <?php echo $value->nama_mahasiswa; ?></h4>
																<input id="semester3" type="checkbox" name="semester3" value="3">
																<i><label for="semester3">Ceklis, Jika Ingin Edit Report Semester 3</label></i>
															</div>

															<div class="form-group">
																<label>Kontrak SKS Semester 3</label>
																<input type="number" placeholder="Kontrak SKS Semester 3" class="form-control" name="sks3" value="<?php echo $value->sks3; ?>" required="required">
															</div>

															<div class="form-group">
																<label>Total Nilai SKS Semester 3</label>
																<input type="number" placeholder="Total Nilai SKS Semester 3" class="form-control" name="t_sks3" value="<?php echo $value->t_sks3; ?>" required="required">
															</div>

															<div class="form-group">
																<label>IP Semester 3</label>
																<br/>
																<b><?php echo $value->ip_s3; ?></b>
															</div>

															<div class="form-group">
																<label>IPK Semester 3</label>
																<br/>
																<b><?php echo $value->ip_k3; ?></b>
															</div>

															<div class="form-group">
																<label>Transkrip Semester 3</label>
																<br/>
																<input id="tranksrip_semester3" type="checkbox" name="edit_transkrip_semester3" value="3">
																<i><label for="tranksrip_semester3">Ceklis, Jika Ingin Ubah/Upload Tranksrip Nilai Semester 3</label></i>
																<input type="file" name="transkrip_nilai3">
															</div>

															<div class="col-md-6">
																<?php
																	if($value->transkrip_nilai3 != NULL){
																?>
																	<a target="_blank" class="btn btn-success" href="<?=base_url().'assets/transkrip_nilai/'.$value->transkrip_nilai3; ?>">Transkrip Semester 3</a>
																<?php }else if($value->transkrip_nilai3 == NULL) { ?>
																	<p><?php echo $value->nama_mahasiswa; ?> Belum Upload Transkrip Nilai Semester 3</p>
																<?php } ?>
															</div>

															<div class="col-md-6 col-md-offset-9">
																<button type="submit" class="btn btn-primary">Simpan Data Semester 3</button>
															</div>
														</div>
													</form>
												</div>
												<!--End Tab Panel Semester 3-->

												<!--Tab Panel Semester 4-->
												<div class="tab-pane" id="data-semester4">
													<form action="<?=base_url('Auth1/update_mhs'); ?>" method="POST" enctype="multipart/form-data">
														<input name="nim" type="hidden" value="<?php echo $value->nim; ?>">
														<div class="col-md-12">
															<div class="form-group">
																<h4>Report Semester 4 <?php echo $value->nama_mahasiswa; ?></h4>
																<input id="semester4" type="checkbox" name="semester4" value="4">
																<i><label for="semester4">Ceklis, Jika Ingin Edit Report Semester 4</label></i>
															</div>

															<div class="form-group">
																<label>Kontrak SKS Semester 4</label>
																<input type="number" placeholder="Kontrak SKS Semester 4" class="form-control" name="sks4" value="<?php echo $value->sks4; ?>" required="required">
															</div>

															<div class="form-group">
																<label>Total Nilai SKS Semester 4</label>
																<input type="number" placeholder="Total Nilai SKS Semester 4" class="form-control" name="t_sks4" value="<?php echo $value->t_sks4; ?>" required="required">
															</div>

															<div class="form-group">
																<label>IP Semester 4</label>
																<br/>
																<b><?php echo $value->ip_s4; ?></b>
															</div>

															<div class="form-group">
																<label>IPK Semester 4</label>
																<br/>
																<b><?php echo $value->ip_k4; ?></b>
															</div>

															<div class="form-group">
																<label>Transkrip Semester 4</label>
																<br/>
																<input id="tranksrip_semester4" type="checkbox" name="edit_transkrip_semester4" value="4">
																<i><label for="tranksrip_semester4">Ceklis, Jika Ingin Ubah/Upload Tranksrip Nilai Semester 4</label></i>
																<input type="file" name="transkrip_nilai4">
															</div>

															<div class="col-md-6">
																<?php
																	if($value->transkrip_nilai4 != NULL){
																?>
																	<a target="_blank" class="btn btn-success" href="<?=base_url().'assets/transkrip_nilai/'.$value->transkrip_nilai4; ?>">Transkrip Semester 4</a>
																<?php }else if($value->transkrip_nilai4 == NULL) { ?>
																	<p><?php echo $value->nama_mahasiswa; ?> Belum Upload Transkrip Nilai Semester 4</p>
																<?php } ?>
															</div>

															<div class="col-md-6 col-md-offset-9">
																<button type="submit" class="btn btn-primary">Simpan Data Semester 4</button>
															</div>
														</div>
													</form>
												</div>
												<!-- End Tab Panel Semester 4-->

												<!--Tab Panel Semester 5-->
												<div class="tab-pane" id="data-semester5">
													<form action="<?=base_url('Auth1/update_mhs'); ?>" method="POST" enctype="multipart/form-data">
														<input name="nim" type="hidden" value="<?php echo $value->nim; ?>">
														<div class="col-md-12">
															<div class="form-group">
																<h4>Report Semester 5 <?php echo $value->nama_mahasiswa; ?></h4>
																<input id="semester5" type="checkbox" name="semester5" value="5">
																<i><label for="semester5">Ceklis, Jika Ingin Edit Report Semester 5</label></i>
															</div>

															<div class="form-group">
																<label>Kontrak SKS Semester 5</label>
																<input type="number" placeholder="Kontrak SKS Semester 5" class="form-control" name="sks5" value="<?php echo $value->sks5; ?>" required="required">
															</div>

															<div class="form-group">
																<label>Total Nilai SKS Semester 5</label>
																<input type="number" placeholder="Total Nilai SKS Semester 5" class="form-control" name="t_sks5" value="<?php echo $value->t_sks5; ?>" required="required">
															</div>

															<div class="form-group">
																<label>IP Semester 5</label>
																<br/>
																<b><?php echo $value->ip_s5; ?></b>
															</div>

															<div class="form-group">
																<label>IPK Semester 5</label>
																<br/>
																<b><?php echo $value->ip_k5; ?></b>
															</div>

															<div class="form-group">
																<label>Transkrip Semester 5</label>
																<br/>
																<input id="tranksrip_semester5" type="checkbox" name="edit_transkrip_semester5" value="5">
																<i><label for="tranksrip_semester5">Ceklis, Jika Ingin Ubah/Upload Tranksrip Nilai Semester 5</label></i>
																<input type="file" name="transkrip_nilai5">
															</div>

															<div class="col-md-6">
																<?php
																	if($value->transkrip_nilai5 != NULL){
																?>
																	<a target="_blank" class="btn btn-success" href="<?=base_url().'assets/transkrip_nilai/'.$value->transkrip_nilai5; ?>">Transkrip Semester 5</a>
																<?php }else if($value->transkrip_nilai5 == NULL) { ?>
																	<p><?php echo $value->nama_mahasiswa; ?> Belum Upload Transkrip Nilai Semester 5</p>
																<?php } ?>
															</div>

															<div class="col-md-6 col-md-offset-9">
																<button type="submit" class="btn btn-primary">Simpan Data Semester 5</button>
															</div>
														</div>
													</form>
												</div>
												<!-- End Tab Panel Semester 5-->

												<!--Tab Panel Semester 6-->
												<div class="tab-pane" id="data-semester6">
													<form action="<?=base_url('Auth1/update_mhs'); ?>" method="POST" enctype="multipart/form-data">
														<input name="nim" type="hidden" value="<?php echo $value->nim; ?>">
														<div class="col-md-12">
															<div class="form-group">
																<h4>Report Semester 6 <?php echo $value->nama_mahasiswa; ?></h4>
																<input id="semester6" type="checkbox" name="semester6" value="6">
																<i><label for="semester6">Ceklis, Jika Ingin Edit Report Semester 6</label></i>
															</div>

															<div class="form-group">
																<label>Kontrak SKS Semester 6</label>
																<input type="number" placeholder="Kontrak SKS Semester 6" class="form-control" name="sks6" value="<?php echo $value->sks6; ?>" required="required">
															</div>

															<div class="form-group">
																<label>Total Nilai SKS Semester 6</label>
																<input type="number" placeholder="Total Nilai SKS Semester 6" class="form-control" name="t_sks6" value="<?php echo $value->t_sks6; ?>" required="required">
															</div>

															<div class="form-group">
																<label>IP Semester 6</label>
																<br/>
																<b><?php echo $value->ip_s6; ?></b>
															</div>

															<div class="form-group">
																<label>IPK Semester 6</label>
																<br/>
																<b><?php echo $value->ip_k6; ?></b>
															</div>

															<div class="form-group">
																<label>Transkrip Semester 6</label>
																<br/>
																<input id="tranksrip_semester6" type="checkbox" name="edit_transkrip_semester6" value="6">
																<i><label for="tranksrip_semester6">Ceklis, Jika Ingin Ubah/Upload Tranksrip Nilai Semester 6</label></i>
																<input type="file" name="transkrip_nilai6">
															</div>

															<div class="col-md-6">
																<?php
																	if($value->transkrip_nilai6 != NULL){
																?>
																	<a target="_blank" class="btn btn-success" href="<?=base_url().'assets/transkrip_nilai/'.$value->transkrip_nilai6; ?>">Transkrip Semester 6</a>
																<?php }else if($value->transkrip_nilai6 == NULL) { ?>
																	<p><?php echo $value->nama_mahasiswa; ?> Belum Upload Transkrip Nilai Semester 6</p>
																<?php } ?>
															</div>

															<div class="col-md-6 col-md-offset-9">
																<button type="submit" class="btn btn-primary">Simpan Data Semester 6</button>
															</div>
														</div>
													</form>
												</div>
												<!-- End Tab Panel Semester 6-->

												<!--Tab Panel Semester 7-->
												<div class="tab-pane" id="data-semester7">
													<form action="<?=base_url('Auth1/update_mhs'); ?>" method="POST" enctype="multipart/form-data">
														<input name="nim" type="hidden" value="<?php echo $value->nim; ?>">
														<div class="col-md-12">
															<div class="form-group">
																<h4>Report Semester 7 <?php echo $value->nama_mahasiswa; ?></h4>
																<input id="semester7" type="checkbox" name="semester7" value="7">
																<i><label for="semester7">Ceklis, Jika Ingin Edit Report Semester 7</label></i>
															</div>

															<div class="form-group">
																<label>Kontrak SKS Semester 7</label>
																<input type="number" placeholder="Kontrak SKS Semester 7" class="form-control" name="sks7" value="<?php echo $value->sks7; ?>" required="required">
															</div>

															<div class="form-group">
																<label>Total Nilai SKS Semester 7</label>
																<input type="number" placeholder="Total Nilai SKS Semester 7" class="form-control" name="t_sks7" value="<?php echo $value->t_sks7; ?>" required="required">
															</div>

															<div class="form-group">
																<label>IP Semester 7</label>
																<br/>
																<b><?php echo $value->ip_s7; ?></b>
															</div>

															<div class="form-group">
																<label>IPK Semester 7</label>
																<br/>
																<b><?php echo $value->ip_k7; ?></b>
															</div>

															<div class="form-group">
																<label>Transkrip Semester 7</label>
																<br/>
																<input id="tranksrip_semester7" type="checkbox" name="edit_transkrip_semester7" value="7">
																<i><label for="tranksrip_semester7">Ceklis, Jika Ingin Ubah/Upload Tranksrip Nilai Semester 7</label></i>
																<input type="file" name="transkrip_nilai7">
															</div>

															<div class="col-md-6">
																<?php
																	if($value->transkrip_nilai7 != NULL){
																?>
																	<a target="_blank" class="btn btn-success" href="<?=base_url().'assets/transkrip_nilai/'.$value->transkrip_nilai7; ?>">Transkrip Semester 7</a>
																<?php }else if($value->transkrip_nilai7 == NULL) { ?>
																	<p><?php echo $value->nama_mahasiswa; ?> Belum Upload Transkrip Nilai Semester 7</p>
																<?php } ?>
															</div>

															<div class="col-md-6 col-md-offset-9">
																<button type="submit" class="btn btn-primary">Simpan Data Semester 7</button>
															</div>
														</div>
													</form>
												</div>
												<!-- End Tab Panel Semester 7-->

												<!--Tab Panel Semester 8-->
												<div class="tab-pane" id="data-semester8">
													<form action="<?=base_url('Auth1/update_mhs'); ?>" method="POST" enctype="multipart/form-data">
														<input name="nim" type="hidden" value="<?php echo $value->nim; ?>">
														<div class="col-md-12">
															<div class="form-group">
																<h4>Report Semester 8 <?php echo $value->nama_mahasiswa; ?></h4>
																<input id="semester8" type="checkbox" name="semester8" value="8">
																<i><label for="semester8">Ceklis, Jika Ingin Edit Report Semester 8</label></i>
															</div>

															<div class="form-group">
																<label>Kontrak SKS Semester 8</label>
																<input type="number" placeholder="Kontrak SKS Semester 8" class="form-control" name="sks8" value="<?php echo $value->sks8; ?>" required="required">
															</div>

															<div class="form-group">
																<label>Total Nilai SKS Semester 8</label>
																<input type="number" placeholder="Total Nilai SKS Semester 8" class="form-control" name="t_sks8" value="<?php echo $value->t_sks8; ?>" required="required">
															</div>

															<div class="form-group">
																<label>IP Semester 8</label>
																<br/>
																<b><?php echo $value->ip_s8; ?></b>
															</div>

															<div class="form-group">
																<label>IPK Semester 8</label>
																<br/>
																<b><?php echo $value->ip_k8; ?></b>
															</div>

															<div class="form-group">
																<label>Transkrip Semester 8</label>
																<br/>
																<input id="tranksrip_semester8" type="checkbox" name="edit_transkrip_semester8" value="8">
																<i><label for="tranksrip_semester8">Ceklis, Jika Ingin Ubah/Upload Tranksrip Nilai Semester 8</label></i>
																<input type="file" name="transkrip_nilai8">
															</div>

															<div class="col-md-6">
																<?php
																	if($value->transkrip_nilai8 != NULL){
																?>
																	<a target="_blank" class="btn btn-success" href="<?=base_url().'assets/transkrip_nilai/'.$value->transkrip_nilai8; ?>">Transkrip Semester 8</a>
																<?php }else if($value->transkrip_nilai8 == NULL) { ?>
																	<p><?php echo $value->nama_mahasiswa; ?> Belum Upload Transkrip Nilai Semester 8</p>
																<?php } ?>
															</div>

															<div class="col-md-6 col-md-offset-9">
																<button type="submit" class="btn btn-primary">Simpan Data Semester 8</button>
															</div>
														</div>
													</form>
												</div>
												<!-- End Tab Panel Semester 8-->

											</div>
										</div>
										<!--End Box Edit Data-->
									</div>
									<!--End Tab Edit Data-->
								</div>

							</div> <!--End class="nav-tabs-custom"-->
						</div> <!--End class="box-body"-->
						<?php } ?>
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
	</body>
</html>
