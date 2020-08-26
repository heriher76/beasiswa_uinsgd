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
			<?php echo $this->session->flashdata('direct10_success'); ?>
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

	    						<p>Silahkan klik tabs <b>Edit Data Persyaratan Dokumen</b> dibawah, jika ada kesalahan/data anda belum diisi</p>
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
								<a href="<?=base_url('C_mhs/step7'); ?>" class="btn btnn">7</a> <span class="glyphicon glyphicon-arrow-right"></span>
								<a href="<?=base_url('C_mhs/step8'); ?>" class="btn btnn">8</a> <span class="glyphicon glyphicon-arrow-right"></span>
								<a href="<?=base_url('C_mhs/step9'); ?>" class="btn btnn">9</a> <span class="glyphicon glyphicon-arrow-right"></span>
								<a href="<?=base_url('C_mhs/step10'); ?>" class="btn btnn active activee">10</a> <span class="glyphicon glyphicon-arrow-right"></span>
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
									<a href="<?=base_url('C_mhs/step9'); ?>" class="btn btnn">9</a>
									<br><br><!-- <center><span class="glyphicon glyphicon-arrow-down"></center> -->
									<a href="<?=base_url('C_mhs/step10'); ?>" class="btn btnn active activee">10</a>
									<br><br><!-- <center><span class="glyphicon glyphicon-arrow-down"></center> -->
									<a href="<?=base_url('C_mhs/step11'); ?>" class="btn btnn">11</a>
									<br><br>
								</div>
								<div class="col-xs-10 col-md-12">
								<h3><span class="label label-default">Tahap 10 Dokumen Persyaratan</span></h3>
									<br>
									<a class="btn btn-success" href="#edit" data-toggle="tab"><i class="glyphicon glyphicon-pencil"></i> Edit Data Dokumen Persyaratan</a>
									<br><br>
									<ul class="nav nav-tabs" style="border: none;">
										<!-- <li><a href="#data" data-toggle="tab">Data Identitas Diri</a></li> -->
										<li></li>
									</ul>

								<div class="tab-content">
									<div class="tab-pane active" id="data">
										<?php foreach($data_diri as $value) { ?>
										<table class="table">
											<?php if($value->tahun == date('Y')) { ?>
											<tr>
												<!-- <td>Kartu Peserta Jalur echo $value->jalur_pendaftaran.' '.date('Y'); </td> -->
												<td>Kartu Tes Pendaftaran UIN Sunan Gunung Djati Bandung (SNMPTN, SPAN-PTKIN, SBMPTN, UM-PTKIN, & Mandiri)</td>
												<td>:</td>
												<td><?php echo $value->kartu_tes; ?></td>
												<td><i class="asterik">*</i></td>
											</tr>
											<?php } ?>

											<tr>
												<td>Formulir Pendaftaran Beasiswa KIP-K yang telah diisi</td>
												<td>:</td>
												<td><?php echo $value->formulir_pendaftaran; ?></td>
												<td><i class="asterik">*</i></td>
											</tr>

											<?php if($value->tahun == date('Y')) { ?>
											<tr>
												<td>Surat Keterangan Lulus dari Kepala Sekolah</td>
												<td>:</td>
												<td><?php echo $value->surat_ket_lulus; ?></td>
												<td><i class="asterik">*</i></td>
											</tr>

											<!--
											<tr>
												<td>Fotocopy Raport Semester 1-6 yang dilegalisir Kepala Sekolah</td>
												<td>:</td>
												<td><?php echo $value->fotocopy_raport_semester; ?></td>
												<td><i class="asterik">*</i></td>
											</tr>
                                            -->
											<tr>
												<td>Fotocopy Ijazah yang dilegalisir Kepala Sekolah</td>
												<td>:</td>
												<td><?php echo $value->fotocopy_ijazah; ?></td>
												<td><i class="asterik">*</i></td>
											</tr>

											<tr>
												<td>Fotocopy Nilai Ujian Akhir Nasional yang dilegalisir Kepala Sekolah</td>
												<td>:</td>
												<td><?php echo $value->fotocopy_nilai_uan; ?></td>
												<td><i class="asterik">*</i></td>
											</tr>

											<tr>
												<td>Surat Keterangan Prestasi dan Bukti Pendukung Prestasi yang dilegalisir Kepala Sekolah</td>
												<td>:</td>
												<td><?php echo $value->surat_ket_prestasi; ?></td>
												<td><i class="asterik">*</i></td>
											</tr>
											<?php } ?>

											<tr>
												<td>Surat Keterangan Penghasilan Ortu/Wali atau Surat Keterangan Tidak Mampu yang dikeluarkan Kepala Desa/Dusun/Instansi/Tokoh Masyarakat</td>
												<td>:</td>
												<td><?php echo $value->surat_ket_peng_ortu; ?></td>
												<td><i class="asterik">*</i></td>
											</tr>

											<tr>
												<td>Fotocopy Kartu Keluarga atau Surat Keterangan Susunan Keluarga</td>
												<td>:</td>
												<td><?php echo $value->fotocopy_kk; ?></td>
												<td><i class="asterik">*</i></td>
											</tr>

											<tr>
												<td>Fotocopy Rekening Listrik Bulan Terakhir (bila tersedia listrik)</td>
												<td>:</td>
												<td><?php echo $value->fotocopy_rek_listrik; ?></td>
												<td><i class="asterik">*</i></td>
											</tr>

											<tr>
												<td>Fotocopy Bukti Pembayaran PBB Tahun Terakhir</td>
												<td>:</td>
												<td><?php echo $value->fotocopy_pbb; ?></td>
												<td><i class="asterik">*</i></td>
											</tr>

											<tr>
												<td>Melengkapi data foto rumah dari 4 (empat) sudut</td>
												<td>:</td>
												<td><?php echo $value->foto_rumah_tiga_sudut; ?></td>
												<td><i class="asterik">*</i></td>
											</tr>
										</table>
										<!--End Persyaratan Dokumen-->
									</div> <!--End class="tab-pane active" id="data"-->

									<div class="tab-pane" id="edit">
										<form action="<?=base_url('C_mhs/direct10'); ?>" method="POST">
											<?php foreach($data_diri as $value) { ?>
											<?php if($value->tahun == date('Y')) { ?>
											<div class="form-group">
												<label class="input"><!-- Kartu Tes Pendaftaran Jalur echo $value->jalur_pendaftaran; --> Kartu Tes Pendaftaran UIN Sunan Gunung Djati Bandung (SNMPTN, SPAN-PTKIN, SBMPTN, UM-PTKIN, & Mandiri) <i class="asterik">*</i></label>
												<select class="form-control input" required="required" name="kartu_tes">
													<?php if($value->kartu_tes == null) {?>
														<option value="">-Pilih SalahSatu-</option>
														<option value="ADA">ADA</option>
														<option value="TIDAK ADA">TIDAK ADA</option>
													<?php }else{ ?>
														<option value="<?php echo $value->kartu_tes; ?>"><?php echo $value->kartu_tes; ?></option>
														<option value="">--</option>
														<option value="ADA">ADA</option>
														<option value="TIDAK ADA">TIDAK ADA</option>
													<?php } ?>
												</select>
											</div>
											<?php }  ?>
											<div class="form-group">
												<label class="input">Formulir Pendaftaran Bidik Misi yang telah diisi <i class="asterik">*</i></label>
												<select class="form-control input" required="required" name="formulir_pendaftaran">
													<?php if($value->formulir_pendaftaran == null) { ?>
														<option value="">-Pilih SalahSatu-</option>
														<option value="ADA">ADA</option>
														<option value="TIDAK ADA">TIDAK ADA</option>
													<?php }else{ ?>
														<option value="<?php echo $value->formulir_pendaftaran; ?>"><?php echo $value->formulir_pendaftaran; ?></option>
														<option value="">--</option>
														<option value="ADA">ADA</option>
														<option value="TIDAK ADA">TIDAK ADA</option>
													<?php } ?>
												</select>
											</div>
											<?php if($value->tahun == date('Y')) { ?>
											<div class="form-group">
												<label class="input">Surat Keterangan Lulus dari Kepala Sekolah <i class="asterik">*</i></label>
												<select class="form-control input" required="required" name="skl_dari_kepsek">
													<?php if($value->surat_ket_lulus == null) { ?>
														<option value="">-Pilih SalahSatu-</option>
														<option value="ADA">ADA</option>
														<option value="TIDAK ADA">TIDAK ADA</option>
													<?php }else{ ?>
														<option value="<?php echo $value->surat_ket_lulus; ?>"><?php echo $value->surat_ket_lulus; ?></option>
														<option value="">--</option>
														<option value="ADA">ADA</option>
														<option value="TIDAK ADA">TIDAK ADA</option>
													<?php } ?>
												</select>
											</div>

											<!--
											<div class="form-group">
												<label class="input">Fotocopy Raport Semester 1-6 yang dilegalisir Kepala Sekolah <i class="asterik">*</i></label>
												<select class="form-control input" required="required" name="raport_semester">
													<?php if($value->fotocopy_raport_semester == null) { ?>
														<option value="">-Pilih SalahSatu-</option>
														<option value="ADA">ADA</option>
														<option value="TIDAK ADA">TIDAK ADA</option>
													<?php }else{ ?>
														<option value="<?php echo $value->fotocopy_raport_semester; ?>"><?php echo $value->fotocopy_raport_semester; ?></option>
														<option value="">--</option>
														<option value="ADA">ADA</option>
														<option value="TIDAK ADA">TIDAK ADA</option>
													<?php } ?>
												</select>
											</div>
                                            -->
											<div class="form-group">
												<label class="input">Fotocopy Ijazah yang diligalisir Kepala Sekolah <i class="asterik">*</i></label>
												<select class="form-control input" required="required" name="ijazah_legalisir">
													<?php if($value->fotocopy_ijazah == null) { ?>
														<option value="">-Pilih SalahSatu-</option>
														<option value="ADA">ADA</option>
														<option value="TIDAK ADA">TIDAK ADA</option>
													<?php }else{ ?>
														<option value="<?php echo $value->fotocopy_ijazah; ?>"><?php echo $value->fotocopy_ijazah; ?></option>
														<option value="">--</option>
														<option value="ADA">ADA</option>
														<option value="TIDAK ADA">TIDAK ADA</option>
													<?php } ?>
												</select>
											</div>

											<div class="form-group">
												<label class="input">Fotocopy Nilai Ujian Akhir Nasional yang dilegalisir Kepala Sekolah <i class="asterik">*</i></label>
												<select class="form-control input" required="required" name="fotocopy_nilai_ujian_un">
													<?php if($value->fotocopy_nilai_uan == null) { ?>
														<option value="">-Pilih SalahSatu-</option>
														<option value="ADA">ADA</option>
														<option value="TIDAK ADA">TIDAK ADA</option>
													<?php }else{ ?>
														<option value="<?php echo $value->fotocopy_nilai_uan; ?>"><?php echo $value->fotocopy_nilai_uan; ?></option>
														<option value="">--</option>
														<option value="ADA">ADA</option>
														<option value="TIDAK ADA">TIDAK ADA</option>
													<?php } ?>
												</select>
											</div>

											<div class="form-group">
												<label class="input">Surat Keterangan Prestasi dan Bukti Pendukung Prestasi yang dilegalisir Kepala Sekolah <i class="asterik">*</i></label>
												<select class="form-control input" required="required" name="keterangan_prestasi">
													<?php if($value->surat_ket_prestasi == null) { ?>
														<option value="">-Pilih SalahSatu-</option>
														<option value="ADA">ADA</option>
														<option value="TIDAK ADA">TIDAK ADA</option>
													<?php }else{ ?>
														<option value="<?php echo $value->surat_ket_prestasi; ?>"><?php echo $value->surat_ket_prestasi; ?></option>
														<option value="">--</option>
														<option value="ADA">ADA</option>
														<option value="TIDAK ADA">TIDAK ADA</option>
													<?php } ?>
												</select>
											</div>
											<?php } ?>
											<div class="form-group">
												<label class="input">Surat Keterangan Penghasilan Ortu/Wali atau Surat Keterangan Tidak Mampu yang dikeluarkan Kepala Desa/Dusun/Instansi/Tokoh Masyarakat <i class="asterik">*</i></label>
												<select class="form-control input" required="required" name="keterangan_penghasilan_ortu_wali">
													<?php if($value->surat_ket_peng_ortu == null) { ?>
														<option value="">-Pilih SalahSatu-</option>
														<option value="ADA">ADA</option>
														<option value="TIDAK ADA">TIDAK ADA</option>
													<?php }else{ ?>
														<option value="<?php echo $value->surat_ket_peng_ortu; ?>"><?php echo $value->surat_ket_peng_ortu; ?></option>
														<option value="">--</option>
														<option value="ADA">ADA</option>
														<option value="TIDAK ADA">TIDAK ADA</option>
													<?php } ?>
												</select>
											</div>

											<div class="form-group">
												<label class="input">Fotocopy Kartu Keluarga atau Surat Keterangan Susunan Keluarga <i class="asterik">*</i></label>
												<select class="form-control input" required="required" name="fotocopy_kk">
													<?php if($value->fotocopy_kk == null) { ?>
														<option value="">-Pilih SalahSatu-</option>
														<option value="ADA">ADA</option>
														<option value="TIDAK ADA">TIDAK ADA</option>
													<?php }else{ ?>
														<option value="<?php echo $value->fotocopy_kk; ?>"><?php echo $value->fotocopy_kk; ?></option>
														<option value="">--</option>
														<option value="ADA">ADA</option>
														<option value="TIDAK ADA">TIDAK ADA</option>
													<?php } ?>
												</select>
											</div>

											<div class="form-group">
												<label class="input">Fotocopy Rekening Listrik Bulan Terakhir (bila tersedia listrik) <i class="asterik">*</i></label>
												<select class="form-control input" required="required" name="fotocopy_rek">
													<?php if($value->fotocopy_rek_listrik == null) { ?>
														<option value="">-Pilih SalahSatu-</option>
														<option value="ADA">ADA</option>
														<option value="TIDAK ADA">TIDAK ADA</option>
													<?php }else{ ?>
														<option value="<?php echo $value->fotocopy_rek_listrik; ?>"><?php echo $value->fotocopy_rek_listrik; ?></option>
														<option value="">--</option>
														<option value="ADA">ADA</option>
														<option value="TIDAK ADA">TIDAK ADA</option>
													<?php } ?>
												</select>
											</div>

											<div class="form-group">
												<label class="input">Fotocopy Bukti Pembayaran PBB Tahun Terakhir <i class="asterik">*</i></label>
												<select class="form-control input" required="required" name="fotocopy_bukti_pembayaran_pbb">
													<?php if($value->fotocopy_pbb == null) { ?>
														<option value="">-Pilih SalahSatu-</option>
														<option value="ADA">ADA</option>
														<option value="TIDAK ADA">TIDAK ADA</option>
													<?php }else{ ?>
														<option value="<?php echo $value->fotocopy_pbb; ?>"><?php echo $value->fotocopy_pbb; ?></option>
														<option value="">--</option>
														<option value="ADA">ADA</option>
														<option value="TIDAK ADA">TIDAK ADA</option>
													<?php } ?>
												</select>
											</div>

											<div class="form-group">
												<label class="input">Melengkapi data foto rumah dari 3(tiga) sudut <i class="asterik">*</i></label>
												<select class="form-control input" required="required" name="data_foto_rumah">
													<?php if($value->foto_rumah_tiga_sudut == null) { ?>
														<option value="">-Pilih SalahSatu-</option>
														<option value="ADA">ADA</option>
														<option value="TIDAK ADA">TIDAK ADA</option>
													<?php }else{ ?>
														<option value="<?php echo $value->foto_rumah_tiga_sudut; ?>"><?php echo $value->foto_rumah_tiga_sudut; ?></option>
														<option value="">--</option>
														<option value="ADA">ADA</option>
														<option value="TIDAK ADA">TIDAK ADA</option>
													<?php } ?>
												</select>
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
								<a href="<?=base_url('C_mhs/step9'); ?>" class="btn btn-primary">
									<i class="fa fa-check-circle-o"></i>
									&laquo; Tahap 9
								</a>
							</div>

							<div class="float-right">
								<a href="<?=base_url('C_mhs/step11'); ?>" class="btn btn-primary">
									<i class="fa fa-check-circle-o"></i>
									Tahap 11 &raquo;
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
