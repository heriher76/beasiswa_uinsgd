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
			<?php echo $this->session->flashdata('direct7_success'); ?>
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

		    						<p>Silahkan klik tabs <b>Edit Data Keterampilan</b> dibawah, jika ada kesalahan/data anda belum diisi</p>
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
									<a href="<?=base_url('C_mhs/step6'); ?>" class="btn btnn">6</a> <span class="glyphicon glyphicon-arrow-right"></span>
									<a href="<?=base_url('C_mhs/step7'); ?>" class="btn btnn active activee">7</a> <span class="glyphicon glyphicon-arrow-right"></span>
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
										<a href="<?=base_url('C_mhs/step6'); ?>" class="btn btnn">6</a>
										<br><br><!-- <center><span class="glyphicon glyphicon-arrow-down"></center> -->
										<a href="<?=base_url('C_mhs/step7'); ?>" class="btn btnn active activee">7</a>
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
									<h3><span class="label label-default">Tahap 7 Data Keterampilan</span></h3>
									<br>
									<a class="btn btn-success" href="#edit" data-toggle="tab"><i class="glyphicon glyphicon-pencil"></i> Edit Data Keterampilan</a>
									<br><br>
									<ul class="nav nav-tabs" style="border: none;">
										<!-- <li><a href="#data" data-toggle="tab">Data Identitas Diri</a></li> -->
										<li></li>
									</ul>

									<div class="tab-content">
										<div class="tab-pane active" id="data">
										<?php foreach($data_diri as $value) { ?>
											<!--Keterampilan-->
											<table class="table">
											    <tr>
													<td>Kemampuan Baca Tulis Qur'an</td>
													<td>:</td>
													<td><?php echo $value->kem_btq; ?></td>
													<td><i class="asterik">*</i></td>
												</tr>
												<tr>
													<td>Kemampuan Bahasa Arab</td>
													<td>:</td>
													<td><?php echo $value->kem_bhs_arab; ?></td>
													<td><i class="asterik">*</i></td>
												</tr>

												<tr>
													<td>Kemampuan Bahasa Inggris</td>
													<td>:</td>
													<td><?php echo $value->kem_bhs_inggris; ?></td>
													<td><i class="asterik">*</i></td>
												</tr>

												<tr>
													<td>Kemampuan Komputer</td>
													<td>:</td>
													<td><?php echo $value->kem_komputer; ?></td>
													<td><i class="asterik">*</i></td>
												</tr>
											</table>
											<!--End Keterampilan-->
										</div> <!--End class="tab-pane active" id="data"-->

										<div class="tab-pane" id="edit">
											<form action="<?=base_url('C_mhs/direct7'); ?>" method="POST">
											    	<div class="form-group">
													<label>Kemampuan Baca Tulis Qur'an <i class="asterik">*</i></label>
													<select class="form-control input" required="required" name="kemampuan_btq">
														<?php if($value->kem_btq == null || $value->kem_btq == '0') { ?>
															<option value="">-Pilih SalahSatu-</option>
															<option value="Tidak Bisa">Tidak Bisa</option>
															<option value="Pasif">Pasif</option>
															<option value="Mahir">Mahir</option>
															<option value="Aktif">Aktif</option>
														<?php }else{ ?>
															<option value="<?php echo $value->kem_btq; ?>"><?php echo $value->kem_btq; ?></option>
															<option value="">--</option>
															<option value="Tidak Bisa">Tidak Bisa</option>
															<option value="Pasif">Pasif</option>
															<option value="Mahir">Mahir</option>
															<option value="Aktif">Aktif</option>
														<?php } ?>
													</select>
												</div>

												<div class="form-group">
													<label>Kemampuan Bahasa Arab <i class="asterik">*</i></label>
													<select class="form-control input" required="required" name="kemampuan_bahasa_arab">
														<?php if($value->kem_bhs_arab == null || $value->kem_bhs_arab == '0') { ?>
															<option value="">-Pilih SalahSatu-</option>
															<option value="Tidak Bisa">Tidak Bisa</option>
															<option value="Pasif">Pasif</option>
															<option value="Mahir">Mahir</option>
															<option value="Aktif">Aktif</option>
														<?php }else{ ?>
															<option value="<?php echo $value->kem_bhs_arab; ?>"><?php echo $value->kem_bhs_arab; ?></option>
															<option value="">--</option>
															<option value="Tidak Bisa">Tidak Bisa</option>
															<option value="Pasif">Pasif</option>
															<option value="Mahir">Mahir</option>
															<option value="Aktif">Aktif</option>
														<?php } ?>
													</select>
												</div>

												<div class="form-group">
													<label>Kemampuan Bahasa Inggris <i class="asterik">*</i></label>
													<select class="form-control input" required="required" name="kemampuan_bahasa_inggris">
														<?php if($value->kem_bhs_inggris == null || $value->kem_bhs_inggris == '0') { ?>
															<option value="">-Pilih SalahSatu-</option>
															<option value="Tidak Bisa">Tidak Bisa</option>
															<option value="Pasif">Pasif</option>
															<option value="Mahir">Mahir</option>
															<option value="Aktif">Aktif</option>
														<?php }else{ ?>
															<option value="<?php echo $value->kem_bhs_inggris?>"><?php echo $value->kem_bhs_inggris; ?></option>
															<option value="">--</option>
															<option value="Tidak Bisa">Tidak Bisa</option>
															<option value="Pasif">Pasif</option>
															<option value="Mahir">Mahir</option>
															<option value="Aktif">Aktif</option>
														<?php } ?>
													</select>
												</div>

												<div class="form-group">
													<label>Kemampuan Komputer <i class="asterik">*</i></label>
													<select class="form-control input" required="required" name="kemampuan_komputer">
														<?php if($value->kem_komputer == null || $value->kem_komputer == '0') { ?>
															<option value="">-Pilih SalahSatu-</option>
															<option value="Tidak Bisa">Tidak Bisa</option>
															<option value="Bisa">Bisa</option>
														<?php }else{ ?>
															<option value="<?php echo $value->kem_komputer; ?>"><?php echo $value->kem_komputer; ?></option>
															<option value="">--</option>
															<option value="Tidak Bisa">Tidak Bisa</option>
															<option value="Bisa">Bisa</option>
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
									<a href="<?=base_url('C_mhs/step6'); ?>" class="btn btn-primary">
										<i class="fa fa-check-circle-o"></i>
										&laquo; Tahap 6
									</a>
								</div>

								<div class="float-right">
									<a href="<?=base_url('C_mhs/step8'); ?>" class="btn btn-primary">
										<i class="fa fa-check-circle-o"></i>
										Tahap 8 &raquo;
									</a>
								</div>
							</div>
						</div> <!--End class="panel panel-primary"-->

					</div> <!--End class="panel-group"-->
				</div> <!--End class="row"-->
			</div> <!--End class="container col-md-8"-->
			<div class="col-md-12 panel-footer" style="background-color: #00a65a !important; width: 100%; left: 0px;">
			<div class="footer text-center" style="color:grey; font-size: 12px;">
				<?php $this->load->view('project_bidikmisi/footer/footer'); ?>
			</div>
		</div>
	</body>
</html>
