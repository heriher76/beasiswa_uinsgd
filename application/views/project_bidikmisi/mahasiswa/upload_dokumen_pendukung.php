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
			<?php echo $this->session->flashdata('update8_foto_kipk_error'); ?>
			<?php echo $this->session->flashdata('update8_foto_kipk_success'); ?>
			<?php echo $this->session->flashdata('update8_foto_ktp_error'); ?>
			<?php echo $this->session->flashdata('update8_foto_ktp_success'); ?>
			<?php echo $this->session->flashdata('update8_foto_kk_error'); ?>
			<?php echo $this->session->flashdata('update8_foto_kk_success'); ?>
			<?php echo $this->session->flashdata('update8_foto_rumah_depan_error'); ?>
			<?php echo $this->session->flashdata('update8_foto_rumah_depan_success'); ?>
			<?php echo $this->session->flashdata('update8_foto_rumah_kiri_error'); ?>
			<?php echo $this->session->flashdata('update8_foto_rumah_kiri_success'); ?>
			<?php echo $this->session->flashdata('update8_foto_rumah_kanan_error'); ?>
			<?php echo $this->session->flashdata('update8_foto_rumah_kanan_success'); ?>
			<?php echo $this->session->flashdata('update8_foto_rumah_dalam_error'); ?>
			<?php echo $this->session->flashdata('update8_foto_rumah_dalam_success'); ?>
			<?php echo $this->session->flashdata('update8_foto_pbb_error'); ?>
			<?php echo $this->session->flashdata('update8_foto_pbb_success'); ?>
			<?php echo $this->session->flashdata('update8_foto_rek_listrik_error'); ?>
			<?php echo $this->session->flashdata('update8_foto_rek_listrik_success'); ?>
			<?php echo $this->session->flashdata('update8_surat_keterangan_error'); ?>
			<?php echo $this->session->flashdata('update8_surat_keterangan_success'); ?>
			<?php echo $this->session->flashdata('update8_surat_pernyataan_kebenaran_data_error'); ?>
			<?php echo $this->session->flashdata('update8_surat_pernyataan_kebenaran_data_success'); ?>
			<?php echo $this->session->flashdata('update8_surat_pernyataan_kipk_error'); ?>
			<?php echo $this->session->flashdata('update8_surat_pernyataan_kipk_success'); ?>
			<?php echo $this->session->flashdata('update8_fakta_integritas_error'); ?>
			<?php echo $this->session->flashdata('update8_fakta_integritas_success'); ?>
			<?php echo $this->session->flashdata('update8_scan_raport_error'); ?>
			<?php echo $this->session->flashdata('update8_scan_raport_success'); ?>
		</div>

		<div class="container col-md-8">
			<br>
			<div class="row">
				<div class="panel group col-md-offset-1">

					<div class="alert alert-warning alert-dismissible" role="alert">
					  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					  <strong>Perhatian!</strong>
					  <div class="penting">
								<p>Maksimal Ukuran Foto 1 MB</p>
								<p>Format Foto : JPG, JPEG, dan PNG</p>
								<p>Tanda Asterik (*) Wajib diisi</p>
								<p>1. Download Template Surat Keterangan Pemilik Rumah <a href="<?=base_url('assets/document/pendukung/Surat Keterangan Kepemilikan Rumah.docx'); ?>" target="_blank">Disini</a></p>
								<p>2. Download Template Surat Fakta Integritas <a href="<?=base_url('assets/document/pendukung/PAKTA INTEGRITAS PENERIMA KIP KULIAH.docx'); ?>" target="_blank">Disini</a></p>
								<p>3. Download Template Surat Pernyataan Kebenaran Data <a href="<?=base_url('assets/document/pendukung/SURAT PERNYATAAN KEBENARAN DATA.docx'); ?>" target="_blank">Disini</a></p>
								<p>4. Download Template Surat Pernyataan KIPK <a href="<?=base_url('assets/document/pendukung/SURAT PERNYATAAN KIP-K.docx'); ?>" target="_blank">Disini</a></p>
								<p>Upload Surat Keterangan Pemilik Rumah, Surat Pernyataan KIPK, Surat Pernyataan Kebenaran Data dan Fakta Integritas (format PDF).</p>
							</div>

							<p>Jika ingin ganti fotonya, silahkan klik tabs <b>Edit Dokumen Pendukung</b> dan ceklis terlebih dahulu kotak sebelah kiri disamping kata <b>Ceklis</b>. setelah itu kemudian pilih file yang ingin di upload dan jangan lupa klik tombol simpan.</p>
							<p>Jika sudah Upload Silahkan klik Tombol Lanjut</p>
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
							<a href="<?=base_url('C_mhs/step7'); ?>" class="btn btnn">7</a> <span class="glyphicon glyphicon-arrow-right"></span>
							<a href="<?=base_url('C_mhs/step8'); ?>" class="btn btnn">8</a> <span class="glyphicon glyphicon-arrow-right"></span>
							<a href="<?=base_url('C_mhs/step9'); ?>" class="btn btnn active activee">9</a> <span class="glyphicon glyphicon-arrow-right"></span>
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
								<a href="<?=base_url('C_mhs/step7'); ?>" class="btn btnn">7</a>
								<br><br><!-- <center><span class="glyphicon glyphicon-arrow-down"></center> -->
								<a href="<?=base_url('C_mhs/step8'); ?>" class="btn btnn">8</a>
								<br><br><!-- <center><span class="glyphicon glyphicon-arrow-down"></center> -->
								<a href="<?=base_url('C_mhs/step9'); ?>" class="btn btnn active activee">9</a>
								<br><br><!-- <center><span class="glyphicon glyphicon-arrow-down"></center> -->
								<a href="<?=base_url('C_mhs/step10'); ?>" class="btn btnn">10</a>
								<br><br><!-- <center><span class="glyphicon glyphicon-arrow-down"></center> -->
								<a href="<?=base_url('C_mhs/step11'); ?>" class="btn btnn">11</a>
								<br><br>
							</div>
							<div class="col-xs-10 col-md-12">
							<h3><span class="label label-default">Tahap 9 Dokumen Pendukung</span></h3>
									<br>
									<a class="btn btn-success" href="#edit" data-toggle="tab"><i class="glyphicon glyphicon-pencil"></i> Edit Data Dokumen Pendukung</a>
									<br><br>
									<ul class="nav nav-tabs" style="border: none;">
										<!-- <li><a href="#data" data-toggle="tab">Data Identitas Diri</a></li> -->
										<li></li>
									</ul>

							<div class="tab-content">
								<div class="tab-pane active" id="data">
									<?php
										$sess_foto_kipk 			= $this->session->userdata('foto_kipk');
										$sess_foto_ktp 				= $this->session->userdata('foto_ktp');
										$sess_foto_kk 				= $this->session->userdata('foto_kk');
										$sess_foto_rumah_depan 		= $this->session->userdata('foto_rumah_depan');
										$sess_foto_rumah_kiri 		= $this->session->userdata('foto_rumah_kiri');
										$sess_foto_rumah_kanan 		= $this->session->userdata('foto_rumah_kanan');
										$sess_foto_rumah_dalam 		= $this->session->userdata('foto_rumah_dalam');
										$sess_foto_pbb 				= $this->session->userdata('foto_pbb');
										$sess_foto_rek_listrik 		= $this->session->userdata('foto_rek_listrik');
										$sess_surat_keterangan 		= $this->session->userdata('surat_keterangan');
										$sess_surat_pernyataan 		= $this->session->userdata('surat_pernyataan_kebenaran_data');
										$sess_fakta_integritas 		= $this->session->userdata('fakta_integritas');
										$sess_scan_raport 		= $this->session->userdata('scan_raport');

										foreach($data_diri as $value) {
									?>
									<table class="table">
										<!--KIPK-K-->
										<?php if($sess_foto_kipk == null) { ?>
										<tr>
											<td>Foto KIP-K</td>
											<td>:</td>
											<td></td>
											<td><i class="asterik"></i></td>
										</tr>
										<?php } ?>

										<?php if($sess_foto_kipk != null) { ?>
										<tr>
											<td>Foto KIP-K</td>
											<td>:</td>
											<td><img style="height: 150px;" src="<?php echo base_url(). 'assets/foto_dokumen/'.$value->upload_foto_kipk; ?>"></td>
												<td><i class="asterik">*</i></td>
										</tr>
										<?php } ?>
										<!--end KIPK-K-->

										<!--KTP-->
										<?php if($sess_foto_ktp == null) { ?>
										<tr>
											<td>Foto KTP</td>
											<td>:</td>
											<td></td>
											<td><i class="asterik">*</i></td>
										</tr>
										<?php } ?>

										<?php if($sess_foto_ktp != null) { ?>
										<tr>
											<td>Foto KTP</td>
											<td>:</td>
											<td><img style="height: 150px;" src="<?php echo base_url(). 'assets/foto_dokumen/'.$value->upload_foto_ktp; ?>"></td>
												<td><i class="asterik">*</i></td>
										</tr>
										<?php } ?>
										<!--end KTP-->

										<!--KK-->
										<?php if($sess_foto_kk == null) { ?>
										<tr>
											<td>Foto Kartu Keluarga</td>
											<td>:</td>
											<td></td>
											<td><i class="asterik">*</i></td>
										</tr>
										<?php } ?>

										<?php if($sess_foto_kk != null) { ?>
										<tr>
											<td>Foto Kartu Keluarga</td>
											<td>:</td>
											<td><img style="height: 150px;" src="<?php echo base_url(). 'assets/foto_dokumen/'.$value->upload_foto_kk; ?>"></td>
												<td><i class="asterik">*</i></td>
										</tr>
										<?php } ?>
										<!--end KK-->

										<!--Rumah depan-->
										<?php if($sess_foto_rumah_depan == null) { ?>
										<tr>
											<td>Foto Rumah Bagian Depan</td>
											<td>:</td>
											<td></td>
											<td><i class="asterik">*</i></td>
										</tr>
										<?php } ?>

										<?php if($sess_foto_rumah_depan != null) { ?>
										<tr>
											<td>Foto Rumah Bagian Depan</td>
											<td>:</td>
											<td><img style="height: 150px;" src="<?php echo base_url(). 'assets/foto_dokumen/'.$value->upload_foto_rumah_depan; ?>"></td>
												<td><i class="asterik">*</i></td>
										</tr>
										<?php } ?>
										<!--end Rumah depan-->

										<!--Rumah kiri-->
										<?php if($sess_foto_rumah_kiri == null) { ?>
										<tr>
											<td>Foto Rumah Bagian Kiri</td>
											<td>:</td>
											<td></td>
											<td><i class="asterik">*</i></td>
										</tr>
										<?php } ?>

										<?php if($sess_foto_rumah_kiri != null) { ?>
										<tr>
											<td>Foto Rumah Bagian Kiri</td>
											<td>:</td>
											<td><img style="height: 150px;" src="<?php echo base_url(). 'assets/foto_dokumen/'.$value->upload_foto_rumah_kiri; ?>"></td>
												<td><i class="asterik">*</i></td>
										</tr>
										<?php } ?>
										<!--end Rumah kiri-->

										<!--Rumah Kanan-->
										<?php if($sess_foto_rumah_kanan == null) { ?>
										<tr>
											<td>Foto Rumah Bagian Kanan</td>
											<td>:</td>
											<td></td>
											<td><i class="asterik">*</i></td>
										</tr>
										<?php } ?>

										<?php if($sess_foto_rumah_kanan != null) { ?>
										<tr>
											<td>Foto Rumah Bagian Kanan</td>
											<td>:</td>
											<td><img style="height: 150px;" src="<?php echo base_url(). 'assets/foto_dokumen/'.$value->upload_foto_rumah_kanan; ?>"></td>
												<td><i class="asterik">*</i></td>
										</tr>
										<?php } ?>
										<!--end Rumah Kanan-->

										<!--Rumah Dalam-->
										<?php if($sess_foto_rumah_dalam == null) { ?>
										<tr>
											<td>Foto Rumah Bagian Dalam</td>
											<td>:</td>
											<td></td>
											<td><i class="asterik">*</i></td>
										</tr>
										<?php } ?>

										<?php if($sess_foto_rumah_dalam != null) { ?>
										<tr>
											<td>Foto Rumah Bagian Dalam</td>
											<td>:</td>
											<td><img style="height: 150px;" src="<?php echo base_url(). 'assets/foto_dokumen/'.$value->upload_foto_rumah_dalam; ?>"></td>
												<td><i class="asterik">*</i></td>
										</tr>
										<?php } ?>
										<!--end Rumah Dalam-->

										<!--foto pbb-->
										<?php if($sess_foto_pbb == null) { ?>
										<tr>
											<td>Foto PBB</td>
											<td>:</td>
											<td></td>
											<td><i class="asterik">*</i></td>
										</tr>
										<?php } ?>

										<?php if($sess_foto_pbb != null) { ?>
										<tr>
											<td>Foto PBB</td>
											<td>:</td>
											<td><img style="height: 150px;" src="<?php echo base_url(). 'assets/foto_dokumen/'.$value->upload_foto_pbb; ?>"></td>
											<td><i class="asterik">*</i></td>
										</tr>
										<?php } ?>
										<!--end foto pbb-->

										<!--Foto rekening listrik-->
										<?php if($sess_foto_rek_listrik == null) { ?>
										<tr>
											<td>Foto Rekening Listrik</td>
											<td>:</td>
											<td></td>
											<td><i class="asterik">*</i></td>
										</tr>
										<?php } ?>

										<?php if($sess_foto_rek_listrik != null) { ?>
										<tr>
											<td>Foto Rekening Listrik</td>
											<td>:</td>
											<td><img style="height: 150px;" src="<?php echo base_url(). 'assets/foto_dokumen/'.$value->upload_foto_rek_listrik; ?>"></td>
												<td><i class="asterik">*</i></td>
										</tr>
										<?php } ?>
										<!--end Foto rekening listrik-->

										<!--Upload Surat Keterangan-->
										<?php if(!isset($value->upload_surat_keterangan_kepemilikan_rumah)) { ?>
										<tr>
											<td>Upload Surat Keterangan Pemilik Rumah (PDF)</td>
											<td>:</td>
											<td></td>
											<td><i class="asterik">*</i></td>
										</tr>
										<?php } ?>

										<?php if(isset($value->upload_surat_keterangan_kepemilikan_rumah)) { ?>
										<tr>
											<td>Upload Surat Keterangan Pemilik Rumah (PDF)</td>
											<td>:</td>
											<td>
												<iframe src="<?php echo base_url(). 'assets/foto_dokumen/'.$value->upload_surat_keterangan_kepemilikan_rumah; ?>" style="height:250px;"></iframe>
											</td>
												<td><i class="asterik">*</i></td>
										</tr>
										<?php } ?>
										<!--end Upload Surat Keterangan-->

										<!--Upload Surat Pertanyaan-->
										<?php if(!isset($value->upload_surat_pernyataan_kebenaran_data)) { ?>
										<tr>
											<td>Upload Surat Pernyataan Kebenaran Data (PDF)</td>
											<td>:</td>
											<td></td>
											<td><i class="asterik">*</i></td>
										</tr>
										<?php } ?>

										<?php if(isset($value->upload_surat_pernyataan_kebenaran_data)) { ?>
										<tr>
											<td>Upload Surat Pernyataan Kebenaran Data (PDF)</td>
											<td>:</td>
											<td>
											<iframe src="<?php echo base_url(). 'assets/foto_dokumen/'.$value->upload_surat_pernyataan_kebenaran_data; ?>" style="height:250px;"></iframe>
											</td>
												<td><i class="asterik">*</i></td>
										</tr>
										<?php } ?>
										<!--end Upload Surat Pertanyaan-->

										<!--Upload Surat Pertanyaan-->
										<?php if(!isset($value->upload_surat_pernyataan_kipk)) { ?>
										<tr>
											<td>Upload Surat Pernyataan KIP-K (PDF)</td>
											<td>:</td>
											<td></td>
											<td><i class="asterik">*</i></td>
										</tr>
										<?php } ?>

										<?php if(isset($value->upload_surat_pernyataan_kipk)) { ?>
										<tr>
											<td>Upload Surat Pernyataan KIP-K (PDF)</td>
											<td>:</td>
											<td>
												<iframe src="<?php echo base_url(). 'assets/foto_dokumen/'.$value->upload_surat_pernyataan_kipk; ?>" style="height:250px;"></iframe>
											</td>
												<td><i class="asterik">*</i></td>
										</tr>
										<?php } ?>
										<!--end Upload Surat Pertanyaan-->

										<!--Upload Fakta Integritas-->
										<?php if(!isset($value->upload_fakta_integritas)) { ?>
										<tr>
											<td>Upload Fakta Integritas (PDF)</td>
											<td>:</td>
											<td></td>
											<td><i class="asterik">*</i></td>
										</tr>
										<?php } ?>

										<?php if(isset($value->upload_fakta_integritas)) { ?>
										<tr>
											<td>Upload Fakta Integritas (PDF)</td>
											<td>:</td>
											<td>
												<iframe src="<?php echo base_url(). 'assets/foto_dokumen/'.$value->upload_fakta_integritas; ?>" style="height:250px;"></iframe>
											</td>
												<td><i class="asterik">*</i></td>
										</tr>
										<?php } ?>
										<!--end Upload Fakta Integritas-->

										<!--Upload Scan Raport-->
										<?php if(!isset($value->upload_scan_raport) && $value->tahun == date('Y')) { ?>
										<tr>
											<td>Upload Scan Raport (PDF)</td>
											<td>:</td>
											<td></td>
											<td><i class="asterik">*</i></td>
										</tr>
										<?php } ?>

										<?php if(isset($value->upload_scan_raport) && $value->tahun == date('Y')) { ?>
										<tr>
											<td>Upload Scan Raport (PDF)</td>
											<td>:</td>
											<td>
												<iframe src="<?php echo base_url(). 'assets/foto_dokumen/'.$value->upload_scan_raport; ?>" style="height:250px;"></iframe>
											</td>
												<td><i class="asterik">*</i></td>
										</tr>
										<?php } ?>
										<!--end Upload Scan Raport-->
										<?php } ?>
									</table>
									<!--End Upload Dokumen Pendukung-->
								</div> <!--End class="tab-pane active" id="data"-->

								<div class="tab-pane" id="edit">
									<form action="<?=base_url('C_mhs/direct9'); ?>" method="POST" enctype="multipart/form-data">
										<div class="col-md-6">

											<div class="form-group">
												<label>Foto KTP</label>
												<br/>
												<input type="checkbox" name="ubah_foto_ktp" value="1">&nbsp;&nbsp;Ceklis, Jika Ingin mengubah Foto KTP
												<input type="file" class="form-control" name="foto_ktp">
											</div>

											<div class="form-group">
												<label>Foto Kartu Keluarga</label>
												<br/>
												<input type="checkbox" name="ubah_foto_kk" value="2">&nbsp;&nbsp;Ceklis, Jika Ingin mengubah Foto Kartu Keluarga
												<input type="file" class="form-control" name="foto_kk">
											</div>

											<div class="form-group">
												<label>Foto Rumah Bagian Depan</label>
												<br/>
												<input type="checkbox" name="ubah_foto_rumah_depan" value="3">&nbsp;&nbsp;Ceklis, Jika Ingin mengubah Foto Rumah Bagian Depan
												<input type="file" class="form-control" name="foto_rumah_depan">
											</div>

											<div class="form-group">
												<label>Foto Rumah Bagian Kiri</label>
												<br/>
												<input type="checkbox" name="ubah_foto_rumah_kiri" value="4">&nbsp;&nbsp;Ceklis, Jika Ingin mengubah Foto Rumah Bagian Kiri
												<input type="file" class="form-control" name="foto_rumah_kiri">
											</div>

											<div class="form-group">
												<label>Surat Keterangan Pemilik Rumah (PDF)</label>
												<br/>
												<input type="checkbox" name="ubah_surat_keterangan_kepemilikan_rumah" value="10">&nbsp;&nbsp;Ceklis, Jika Ingin mengubah Surat Keterangan Pemilik Rumah
												<input type="file" class="form-control" name="surat_keterangan_kepemilikan_rumah">
											</div>

											<div class="form-group">
												<label>Surat Pernyataan Kebenaran Data (PDF)</label>
												<br/>
												<input type="checkbox" name="ubah_surat_pernyataan_kebenaran_data" value="11">&nbsp;&nbsp;Ceklis, Jika Ingin mengubah Surat Pernyataan Kebenaran Data
												<input type="file" class="form-control" name="surat_pernyataan_kebenaran_data">
											</div>

											<div class="form-group">
												<label>Fakta Integritas (PDF)</label>
												<br/>
												<input type="checkbox" name="ubah_fakta_integritas" value="12">&nbsp;&nbsp;Ceklis, Jika Ingin mengubah Fakta Integritas
												<input type="file" class="form-control" name="fakta_integritas">
											</div>

										</div>

										<div class="col-md-6">
											<div class="form-group">
												<label>Foto Rumah Bagian Kanan</label>
												<br/>
												<input type="checkbox" name="ubah_foto_rumah_kanan" value="5">&nbsp;&nbsp;Ceklis, Jika Ingin mengubah Foto Rumah Bagian Kanan
												<input type="file" class="form-control" name="foto_rumah_kanan">
											</div>

											<div class="form-group">
												<label>Foto Rumah Bagian Dalam</label>
												<br/>
												<input type="checkbox" name="ubah_foto_rumah_dalam" value="6">&nbsp;&nbsp;Ceklis, Jika Ingin mengubah Foto Rumah Bagian Dalam
												<input type="file" class="form-control" name="foto_rumah_dalam">
											</div>

											<div class="form-group">
												<label>Foto PBB</label>
												<br/>
												<input type="checkbox" name="ubah_foto_pbb" value="7">&nbsp;&nbsp;Ceklis, Jika Ingin mengubah Foto PBB
												<input type="file" class="form-control" name="foto_pbb">
											</div>

											<div class="form-group">
												<label>Foto Rekening Listrik</label>
												<br/>
												<input type="checkbox" name="ubah_foto_rek" value="8">&nbsp;&nbsp;Ceklis, Jika Ingin mengubah Foto Rekening Listrik
												<input type="file" class="form-control" name="foto_rek_listrik">
											</div>

											<div class="form-group">
												<label>Foto KIP-K</label>
												<br/>
												<input type="checkbox" name="ubah_foto_kipk" value="9">&nbsp;&nbsp;Ceklis, Jika Ingin mengubah Foto KIP-K
												<input type="file" class="form-control" name="foto_kipk">
											</div>

											<?php foreach ($data_diri as $item) { if($item->tahun == date('Y')) { ?>
											<div class="form-group">
												<label>Upload Scan Raport</label>
												<br/>
												<input type="checkbox" name="ubah_scan_raport" value="13">&nbsp;&nbsp;Ceklis, Jika Ingin mengubah File Scan Raport
												<input type="file" class="form-control" name="scan_raport">
											</div>
											<?php } } ?>


											<div class="form-group">
												<label>Surat Pernyataan KIP-K (PDF)</label>
												<br/>
												<input type="checkbox" name="ubah_surat_pernyataan_kipk" value="14">&nbsp;&nbsp;Ceklis, Jika Ingin mengubah Surat Pernyataan KIP-K
												<input type="file" class="form-control" name="surat_pernyataan_kipk">
											</div>

										</div>

										<div class="col-md-12 text-center">
											<br>
											<button type="submit" class="btn btn-success">
											<span class="glyphicon glyphicon-ok"></span>
												Simpan
											</button>
										</div>
									</form>
								</div> <!--End class="tab-pane" id="edit"-->
							</div> <!--End class="tab-content"-->
						</div>
						</div> <!--End class="panel-body"-->

						<div class="panel-footer padding-mack">
							<div class="float-left">
								<a href="<?=base_url('C_mhs/step8'); ?>" class="btn btn-primary">
									<i class="fa fa-check-circle-o"></i>
									&laquo; Tahap 8
								</a>
							</div>

							<div class="float-right">
								<a href="<?=base_url('C_mhs/step10'); ?>" class="btn btn-primary">
									<i class="fa fa-check-circle-o"></i>
									Tahap 10 &raquo;
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
