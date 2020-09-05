<?php
	$param0 = 'kartu_kipk';
	$param1 = 'rumah_depan';
	$param2 = 'rumah_kiri';
	$param3 = 'rumah_kanan';
	$param4 = 'rumah_dalam';
	$param5 = 'pbb';
	$param6 = 'rek_listrik';
	$param7 = 'ktp';
	$param8 = 'kk';
	$param9 = 'all_foto';
	$kosong = null;
	$data_kosong = 'Data Kosong';
	$this->load->view('project_bidikmisi/header/admin/header');
?>
	<div class="content-wrapper">
		<!-- Content Header (Page header) -->
		<section class="content-header">
			<h1>
				<i class="fa fa-tachometer" aria-hidden="true"></i> Data Pendaftar Untuk Verifikasi
			</h1>
		</section>

		<section class="content">
			<div class="row">
				<div class="col-md-12">
					<div class="box">
						<div class="box-header">
							<?php foreach ($user as $value) { ?>
							<h3 class="box-title">Data Pendaftar <?php echo $value->nama_mahasiswa; ?></h3>

						    <div class="alert alert-info text-center" style="color:#ffffff; font-size:16px;">
					            <p><b><?php echo $value->nama_mahasiswa; ?> Mendaftar Beasiswa KIP-K pada Hari/Tanggal </br><i><?php echo tgl_indonesia($value->registeredon); ?></i></b><p>
					        </div>

				            <?php if($value->getLulus == 'LULUS') { ?>
					            <div class="alert alert-success text-center" style="color:#ffffff; font-size:16px;">
					                <p><b><?php echo $value->nama_mahasiswa; ?> <?php if($value->reg == 2){echo "Sudah Verifikasi Data"; }else if($value->reg == 1 || $value->reg == 0) {echo "Belum Verifikasi Data"; }else if($value->reg == 3){echo "Telah LULUS Tahap 2 Program Bidikmisi"; } ?></b></p>
						            <b>Skor : <?php echo number_format($value->skor, 2); ?> dan Status Lulus : <u><?php echo $value->getLulus; ?></u></b>
						        </div>
					        <?php }else if($value->getLulus == 'TIDAK LULUS') { ?>
					            <div class="alert alert-danger text-center" style="color:#ffffff; font-size:16px;">
					                <p><b><?php echo $value->nama_mahasiswa; ?> <?php if($value->reg == 2){echo "Sudah Verifikasi Data"; }else if($value->reg == 1 || $value->reg == 0) {echo "Belum Verifikasi Data"; }?></b></p>
					                <b>Skor : <?php echo number_format($value->skor, 2); ?> dan Status Lulus : <i><?php echo $value->getLulus; ?></i></b>
					            </div>
					        <?php }else if($value->getLulus == 'PENDING') { ?>
					            <div class="alert alert-warning text-center" style="color:#ffffff; font-size:16px;">
					                <p><b><?php echo $value->nama_mahasiswa; ?> <?php if($value->reg == 2){echo "Sudah Verifikasi Data"; }else if($value->reg == 1 || $value->reg == 0) {echo "Belum Verifikasi Data"; }?></b></p>
					                <b>Skor : <?php echo number_format($value->skor, 2); ?> dan Status Lulus : <u><?php echo $value->getLulus; ?></u></b>
					            </div>
					        <?php } ?>

				            <a href="<?=base_url(). 'Auth1/getLulus_byAdmin/'.sha1(md5(sha1(md5(sha1($value->no_pendaftaran))))); ?>" onclick="javascript: return confirm('Anda yakin ingin Meluluskan bidikmisi untuk <?php echo $value->nama_mahasiswa; ?> ?')" class="btn btn-success">
				            <span class="glyphicon glyphicon-ok"></span>
				                Verifikasi
				            </a>

				            <a onclick="javascript: return confirm('Anda yakin ingin MentidakLuluskan bidikmisi untuk <?php echo $value->nama_mahasiswa; ?> ?')" href="<?=base_url().'Auth1/getTidakLulus_byAdmin/'.sha1(md5(sha1(md5(sha1($value->no_pendaftaran))))); ?>" class="btn btn-danger">
							<span class="glyphicon glyphicon-remove"></span>
								Verifikasi Tidak Lulus
							</a>
							<a class="btn btn-primary" data-toggle="modal" data-target="#berkas_diterima_oleh">Berkas Hardfile Sudah Diterima?</a>
							<form>
								<div id="berkas_diterima_oleh" class="modal fade" role="dialog">
									<div class="modal-dialog">
										<div class="modal-content">
											<div class="modal-header">
												<button type="button" class="close" data-dismiss="modal">&times;</button>
												<h4 class="modal-title">Masukkan Nama Penerima Berkas</h4>
											</div>

											<div class="modal-body">
												<input type="text" name="berkas_diterima_oleh" class="form-control" placeholder="Nama" required>
												<br>
												<button type="submit" class="btn btn-primary">Kirim</button>
											</div>

											<div class="modal-footer">
												<button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
											</div>
										</div>
									</div>
								</div>
							</form>
<!-- 
							<a class="btn btn-primary" target="_blank" href="<?=base_url().'Auth1/cetak_formulir_mhs/'.sha1(md5(sha1(md5(sha1($value->no_pendaftaran))))); ?>">
							<span class="glyphicon glyphicon-print"></span>
								Cetak Formulir Mahasiswa
							</a>

 -->							<!-- <a class="btn btn-info" target="_blank" href="<?=base_url('Admin/cetak_survey_validasi_all'); ?>">
							<span class="glyphicon glyphicon-print"></span>
								Cetak Lembar Validasi/Survey 2
							</a> -->
						</div>

						<div class="box-body">
							<div class="nav-tabs-custom">
								<ul class="nav nav-tabs">
									<li><a class="style-tabs" href="#data-dokumen-pendukung" data-toggle="tab">Data Dokumen Pendukung</a></li>
								</ul>

								<div class="col-md-12">
									<div class="tab-content">

										<!--Data Dokumen Pendukung-->
										<div class="tab-pane active" id="data-dokumen-pendukung">
											<table class="table">
												<h3>Data Dokumen</h3>

												<tr>
													<td>Foto Kartu Keluarga</td>
													<td>:</td>
													<td>
														<button class="btn btn-primary" data-toggle="modal" data-target="#view-foto-kk" type="submit">Lihat</button>
														<a target="_blank" href="<?=base_url().'Auth1/cetak_dokumen/'.sha1(md5(sha1(md5(sha1($value->no_pendaftaran))))).'/'.$param8; ?>" class="btn btn-warning">Cetak</a>
													</td>
												</tr>

												<tr>
													<td>Foto Penghasilan Ortu</td>
													<td>:</td>
													<td>
														<button class="btn btn-primary" data-toggle="modal" data-target="#view-foto-kipk" type="submit">Lihat</button>
														<a href="<?=base_url().'Auth1/cetak_dokumen/'.sha1(md5(sha1(md5(sha1($value->no_pendaftaran))))).'/'.$param0; ?>" target="_blank" class="btn btn-warning">Cetak</a>
													</td>
												</tr>

												<tr>
													<td>PBB (Luas Rumah, Pajak Bumi dan Bangunan Tahun Akhir )</td>
													<td>:</td>
													<td>
														<button class="btn btn-primary" data-toggle="modal" data-target="#view-foto-rumah-bagian-depan" type="submit">Lihat</button>
														<a href="<?=base_url().'Auth1/cetak_dokumen/'.sha1(md5(sha1(md5(sha1($value->no_pendaftaran))))).'/'.$param1; ?>" target="_blank" class="btn btn-warning">Cetak</a>
													</td>
												</tr>

												<tr>
													<td>Bukti Pembayaran Listrik</td>
													<td>:</td>
													<td>
														<button class="btn btn-primary" data-toggle="modal" data-target="#view-foto-rek-listrik" type="submit">Lihat</button>
														<a target="_blank" href="<?=base_url().'Auth1/cetak_dokumen/'.sha1(md5(sha1(md5(sha1($value->no_pendaftaran))))).'/'.$param6; ?>" class="btn btn-warning">Cetak</a>
													</td>
												</tr>

												<tr>
													<td>Ijazah</td>
													<td>:</td>
													<td>
														<button class="btn btn-primary" data-toggle="modal" data-target="#view-foto-rumah-bagian-kiri" type="submit">Lihat</button>
														<a target="_blank" href="<?=base_url().'Auth1/cetak_dokumen/'.sha1(md5(sha1(md5(sha1($value->no_pendaftaran))))).'/'.$param2; ?>" class="btn btn-warning">Cetak</a>
													</td>
												</tr>

												<tr>
													<td>Scan Raport</td>
													<td>:</td>
													<td>
														<button class="btn btn-primary" data-toggle="modal" data-target="#view-foto-rumah-bagian-kanan" type="submit">Lihat</button>
														<a target="_blank" href="<?=base_url().'Auth1/cetak_dokumen/'.sha1(md5(sha1(md5(sha1($value->no_pendaftaran))))).'/'.$param3; ?>" class="btn btn-warning">Cetak</a>
													</td>
												</tr>

												<tr>
													<td>Sertifikat Non Akademik Terbaik</td>
													<td>:</td>
													<td>
														<button class="btn btn-primary" data-toggle="modal" data-target="#view-foto-rumah-bagian-dalam" type="submit">Lihat</button>
														<a target="_blank" href="<?=base_url().'Auth1/cetak_dokumen/'.sha1(md5(sha1(md5(sha1($value->no_pendaftaran))))).'/'.$param4; ?>" class="btn btn-warning">Cetak</a>
													</td>
												</tr>

												<tr>
													<td>Sertifikat Akademik Terbaik</td>
													<td>:</td>
													<td>
														<button class="btn btn-primary" data-toggle="modal" data-target="#view-foto-pbb" type="submit">Lihat</button>
														<a target="_blank" href="<?=base_url().'Auth1/cetak_dokumen/'.sha1(md5(sha1(md5(sha1($value->no_pendaftaran))))).'/'.$param5; ?>" class="btn btn-warning">Cetak</a>
													</td>
												</tr>

												<tr>
													<td>Surat Keterangan Meninggal</td>
													<td>:</td>
													<td>
														<button class="btn btn-primary" data-toggle="modal" data-target="#view-foto-ktp" type="submit">Lihat</button>
														<a target="_blank" href="<?=base_url().'Auth1/cetak_dokumen/'.sha1(md5(sha1(md5(sha1($value->no_pendaftaran))))).'/'.$param7; ?>" class="btn btn-warning">Cetak</a>
													</td>
												</tr>
<!-- 
												<tr>
													<td>Semua Foto Dokumen</td>
													<td>:</td>
													<td>
														<button class="btn btn-primary" data-toggle="modal" data-target="#view-foto-semua" type="submit">Lihat</button>
														<a target="_blank" href="<?=base_url().'Auth1/cetak_dokumen/'.sha1(md5(sha1(md5(sha1($value->no_pendaftaran))))).'/'.$param9; ?>" class="btn btn-warning">Cetak</a>
													</td>
												</tr> -->
											</table>
										</div>
										<!--End Data Dokumen Pendukung-->

							<!--View Foto KIPK-->
							<div id="view-foto-kipk" class="modal fade" role="dialog">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal">&times;</button>
											<h4 class="modal-title">Foto Kartu KIP-K <?php echo $value->nama_mahasiswa; ?></h4>
										</div>

										<div class="modal-body">
											<?php if($value->upload_foto_kipk == null) { ?>
											<div class="embed-responsive embed-responsive-4by3">
												<img class="embed-responsive-item">
											</div>
											<?php }else{ ?>
											<div class="embed-responsive embed-responsive-4by3">
												<img class="embed-responsive-item" src="<?=base_url().'assets/foto_dokumen/'.$value->upload_foto_kipk; ?>">
											</div>
											<?php } ?>
										</div>

										<div class="modal-footer">
											<button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
										</div>
									</div>
								</div>
							</div>
							<!--End View Foto KIPK-->

							<!--View Foto Rumah Depan-->
							<div id="view-foto-rumah-bagian-depan" class="modal fade" role="dialog">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal">&times;</button>
											<h4 class="modal-title">Foto Rumah Bagian Depan <?php echo $value->nama_mahasiswa; ?></h4>
										</div>

										<div class="modal-body">
											<?php if($value->upload_foto_rumah_depan == null) { ?>
											<div class="embed-responsive embed-responsive-4by3">
												<img class="embed-responsive-item">
											</div>
											<?php }else{ ?>
											<div class="embed-responsive embed-responsive-4by3">
												<img class="embed-responsive-item" src="<?=base_url().'assets/foto_dokumen/'.$value->upload_foto_rumah_depan; ?>">
											</div>
											<?php } ?>
										</div>

										<div class="modal-footer">
											<button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
										</div>
									</div>
								</div>
							</div>
							<!--End View Foto Rumah Depan-->

							<!--View Foto Rumah Kiri-->
							<div id="view-foto-rumah-bagian-kiri" class="modal fade" role="dialog">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal">&times;</button>
											<h4 class="modal-title">Foto Rumah Bagian Kiri <?php echo $value->nama_mahasiswa; ?></h4>
										</div>

										<div class="modal-body">
											<?php if($value->upload_foto_rumah_kiri == null) { ?>
											<div class="embed-responsive embed-responsive-4by3">
												<img class="embed-responsive-item">
											</div>
											<?php }else{ ?>
											<div class="embed-responsive embed-responsive-4by3">
												<img class="embed-responsive-item" src="<?=base_url().'assets/foto_dokumen/'.$value->upload_foto_rumah_kiri; ?>">
											</div>
											<?php } ?>
										</div>

										<div class="modal-footer">
											<button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
										</div>
									</div>
								</div>
							</div>
							<!--End View Foto Rumah Kiri-->

							<!--View Foto Rumah Kanan-->
							<div id="view-foto-rumah-bagian-kanan" class="modal fade" role="dialog">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal">&times;</button>
											<h4 class="modal-title">Foto Rumah Bagian Kanan <?php echo $value->nama_mahasiswa; ?></h4>
										</div>

										<div class="modal-body">
											<?php if($value->upload_foto_rumah_kanan == null) { ?>
											<div class="embed-responsive embed-responsive-4by3">
												<img class="embed-responsive-item">
											</div>
											<?php }else{ ?>
											<div class="embed-responsive embed-responsive-4by3">
												<img class="embed-responsive-item" src="<?=base_url().'assets/foto_dokumen/'.$value->upload_foto_rumah_kanan; ?>">
											</div>
											<?php } ?>
										</div>

										<div class="modal-footer">
											<button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
										</div>
									</div>
								</div>
							</div>
							<!--End View Foto Rumah Kanan-->

							<!--View Foto Rumah Dalam-->
							<div id="view-foto-rumah-bagian-dalam" class="modal fade" role="dialog">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal">&times;</button>
											<h4 class="modal-title">Foto Rumah Bagian Dalam <?php echo $value->nama_mahasiswa; ?></h4>
										</div>

										<div class="modal-body">
											<?php if($value->upload_foto_rumah_dalam == null) { ?>
											<div class="embed-responsive embed-responsive-4by3">
												<img class="embed-responsive-item">
											</div>
											<?php }else{ ?>
											<div class="embed-responsive embed-responsive-4by3">
												<img class="embed-responsive-item" src="<?=base_url().'assets/foto_dokumen/'.$value->upload_foto_rumah_dalam; ?>">
											</div>
											<?php } ?>
										</div>

										<div class="modal-footer">
											<button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
										</div>
									</div>
								</div>
							</div>
							<!--End View Foto Rumah Dalam-->

							<!--View foto Pbb-->
							<div id="view-foto-pbb" class="modal fade" role="dialog">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal">&times;</button>
											<h4 class="modal-title">Foto PBB <?php echo $value->nama_mahasiswa; ?></h4>
										</div>

										<div class="modal-body">
											<?php if($value->upload_foto_pbb == null) { ?>
											<div class="embed-responsive embed-responsive-4by3">
												<img class="embed-responsive-item">
											</div>
											<?php }else{ ?>
											<div class="embed-responsive embed-responsive-4by3">
												<img class="embed-responsive-item" src="<?=base_url().'assets/foto_dokumen/'.$value->upload_foto_pbb; ?>">
											</div>
											<?php } ?>
										</div>

										<div class="modal-footer">
											<button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
										</div>
									</div>
								</div>
							</div>
							<!--End View foto Pbb-->

							<!--View Foto Rekening Listrik-->
							<div id="view-foto-rek-listrik" class="modal fade" role="dialog">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal">&times;</button>
											<h4 class="modal-title">Foto Rekening Listrik <?php echo $value->nama_mahasiswa; ?></h4>
										</div>

										<div class="modal-body">
											<?php if($value->upload_foto_rek_listrik == null) { ?>
											<div class="embed-responsive embed-responsive-4by3">
												<img class="embed-responsive-item">
											</div>
											<?php }else{ ?>
											<div class="embed-responsive embed-responsive-4by3">
												<embed class="embed-responsive-item" src="<?=base_url().'assets/foto_dokumen/'.$value->upload_foto_rek_listrik; ?>"></embed>
											</div>
											<?php } ?>
										</div>

										<div class="modal-footer">
											<button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
										</div>
									</div>
								</div>
							</div>
							<!--End View Foto Rekening Listrik-->

							<!--View foto KTP-->
							<div id="view-foto-ktp" class="modal fade" role="dialog">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal">&times;</button>
											<h4 class="modal-title">Foto KTP <?php echo $value->nama_mahasiswa; ?></h4>
										</div>

										<div class="modal-body">
											<?php if($value->upload_foto_ktp == null) { ?>
											<div class="embed-responsive embed-responsive-4by3">
												<img class="embed-responsive-item">
											</div>
											<?php }else{ ?>
											<div class="embed-responsive embed-responsive-4by3">
												<img class="embed-responsive-item" src="<?=base_url().'assets/foto_dokumen/'.$value->upload_foto_ktp; ?>">
											</div>
											<?php } ?>
										</div>

										<div class="modal-footer">
											<button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
										</div>
									</div>
								</div>
							</div>
							<!--End View foto ktp-->

							<!--View foto kartu keluarga-->
							<div id="view-foto-kk" class="modal fade" role="dialog">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal">&times;</button>
											<h4 class="modal-title">Foto Kartu Keluarga <?php echo $value->nama_mahasiswa; ?></h4>
										</div>

										<div class="modal-body">
											<?php if($value->upload_foto_kk == null) { ?>
											<div class="embed-responsive embed-responsive-4by3">
												<img class="embed-responsive-item">
											</div>
											<?php }else{ ?>
											<div class="embed-responsive embed-responsive-4by3">
												<img class="embed-responsive-item" src="<?=base_url().'assets/foto_dokumen/'.$value->upload_foto_kk; ?>">
											</div>
											<?php } ?>
										</div>

										<div class="modal-footer">
											<button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
										</div>
									</div>
								</div>
							</div>
							<!--End View foto kartu keluarga-->

							<!--View All Foto-->
							<div id="view-foto-semua" class="modal fade" role="dialog">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal">&times;</button>
											<h4 class="modal-title">Foto Semua Dokumen <?php echo $value->nama_mahasiswa; ?></h4>
										</div>

										<div class="modal-body">
											<label>Foto Rumah Bagian Depan</label>
											<?php if($value->upload_foto_rumah_depan == null) { ?>
											<div class="embed-responsive embed-responsive-4by3">
												<img class="embed-responsive-item">
											</div>
											<?php }else{ ?>
											<div class="embed-responsive embed-responsive-4by3">
												<img class="embed-responsive-item" src="<?=base_url().'assets/foto_dokumen/'.$value->upload_foto_rumah_depan; ?>">
											</div>
											<?php } ?>

											<br/>

											<label>Foto Rumah Bagian Kiri</label>
											<?php if($value->upload_foto_rumah_kiri == null) { ?>
											<div class="embed-responsive embed-responsive-4by3">
												<img class="embed-responsive-item">
											</div>
											<?php }else{ ?>
											<div class="embed-responsive embed-responsive-4by3">
												<img class="embed-responsive-item" src="<?=base_url().'assets/foto_dokumen/'.$value->upload_foto_rumah_kiri; ?>">
											</div>
											<?php } ?>

											<br/>

											<label>Foto Rumah Bagian Kanan</label>
											<?php if($value->upload_foto_rumah_kanan == null) { ?>
											<div class="embed-responsive embed-responsive-4by3">
												<img class="embed-responsive-item">
											</div>
											<?php }else{ ?>
											<div class="embed-responsive embed-responsive-4by3">
												<img class="embed-responsive-item" src="<?=base_url().'assets/foto_dokumen/'.$value->upload_foto_rumah_kanan; ?>">
											</div>
											<?php } ?>

											<br/>

											<label>Foto Rumah Bagian Dalam</label>
											<?php if($value->upload_foto_rumah_dalam == null) { ?>
											<div class="embed-responsive embed-responsive-4by3">
												<img class="embed-responsive-item">
											</div>
											<?php }else{ ?>
											<div class="embed-responsive embed-responsive-4by3">
												<img class="embed-responsive-item" src="<?=base_url().'assets/foto_dokumen/'.$value->upload_foto_rumah_dalam; ?>">
											</div>
											<?php } ?>

											<br/>

											<label>Foto PBB</label>
											<?php if($value->upload_foto_pbb == null) { ?>
											<div class="embed-responsive embed-responsive-4by3">
												<img class="embed-responsive-item">
											</div>
											<?php }else{ ?>
											<div class="embed-responsive embed-responsive-4by3">
												<img class="embed-responsive-item" src="<?=base_url().'assets/foto_dokumen/'.$value->upload_foto_pbb; ?>">
											</div>
											<?php } ?>

											<br/>

											<label>Foto Rekening Listrik</label>
											<?php if($value->upload_foto_rek_listrik == null) { ?>
											<div class="embed-responsive embed-responsive-4by3">
												<img class="embed-responsive-item">
											</div>
											<?php }else{ ?>
											<div class="embed-responsive embed-responsive-4by3">
												<embed class="embed-responsive-item" src="<?=base_url().'assets/foto_dokumen/'.$value->upload_foto_rek_listrik; ?>"></embed>
											</div>
											<?php } ?>

											<br/>

											<label>Foto KTP</label>
											<?php if($value->upload_foto_ktp == null) { ?>
											<div class="embed-responsive embed-responsive-4by3">
												<img class="embed-responsive-item">
											</div>
											<?php }else{ ?>
											<div class="embed-responsive embed-responsive-4by3">
												<img class="embed-responsive-item" src="<?=base_url().'assets/foto_dokumen/'.$value->upload_foto_ktp; ?>">
											</div>
											<?php } ?>

											<br/>

											<label>Foto Kartu Keluarga</label>
											<?php if($value->upload_foto_kk == null) { ?>
											<div class="embed-responsive embed-responsive-4by3">
												<img class="embed-responsive-item">
											</div>
											<?php }else{ ?>
											<div class="embed-responsive embed-responsive-4by3">
												<embed class="embed-responsive-item" src="<?=base_url().'assets/foto_dokumen/'.$value->upload_foto_kk; ?>"></embed>
											</div>
											<?php } ?>
										</div>

										<div class="modal-footer">
											<button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
										</div>
									</div>
								</div>
							</div>
							<!--End View All Foto-->
							<?php } ?>
						</div>
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
