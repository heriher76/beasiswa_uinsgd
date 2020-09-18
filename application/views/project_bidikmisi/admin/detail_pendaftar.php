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
				<i class="fa fa-tachometer" aria-hidden="true"></i> Data Pendaftar
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

						    <a href="<?=base_url().'Auth1/reset_reg/'.sha1(md5(sha1(md5(sha1($value->no_pendaftaran))))); ?>" onclick="javascript: return confirm('Anda yakin ingin reset registrasi data untuk <?php echo $value->nama_mahasiswa; ?> ?')" class="btn btn-warning">
						    <span class="glyphicon glyphicon-cog"></span>
						        Reset Registrasi
						    </a>

				            <a href="<?=base_url(). 'Auth1/getLulus_byAdmin/'.sha1(md5(sha1(md5(sha1($value->no_pendaftaran))))); ?>" onclick="javascript: return confirm('Anda yakin ingin Meluluskan bidikmisi untuk <?php echo $value->nama_mahasiswa; ?> ?')" class="btn btn-success">
				            <span class="glyphicon glyphicon-ok"></span>
				                Validasi Lulus
				            </a>

				            <a onclick="javascript: return confirm('Anda yakin ingin MentidakLuluskan bidikmisi untuk <?php echo $value->nama_mahasiswa; ?> ?')" href="<?=base_url().'Auth1/getTidakLulus_byAdmin/'.sha1(md5(sha1(md5(sha1($value->no_pendaftaran))))); ?>" class="btn btn-danger">
							<span class="glyphicon glyphicon-remove"></span>
								Validasi Tidak Lulus
							</a>

							<a class="btn btn-primary" target="_blank" href="<?=base_url().'Auth1/cetak_formulir_mhs/'.sha1(md5(sha1(md5(sha1($value->no_pendaftaran))))); ?>">
							<span class="glyphicon glyphicon-print"></span>
								Cetak Formulir Mahasiswa
							</a>
							<?php if(!empty($value->berkas_sudah_diterima_oleh)) {?>
								<a style="pointer-events: none;" href="#" class="btn btn-default">&#9745; Berkas Sudah Diterima oleh: <?php echo $value->berkas_sudah_diterima_oleh; ?></a>
							<?php } else { ?>
							<a class="btn btn-success" data-toggle="modal" data-target="#berkas_diterima_oleh">Lihat Bukti Pengiriman Berkas</a>

							<form action="<?=base_url().'Auth1/berkasDiterimaOleh/'.sha1(md5(sha1(md5(sha1($value->no_pendaftaran))))); ?>" method="POST">
								<div id="berkas_diterima_oleh" class="modal fade" role="dialog">
									<div class="modal-dialog">
										<div class="modal-content">
											<div class="modal-header">
												<button type="button" class="close" data-dismiss="modal">&times;</button>
												<h4 class="modal-title">Bukti Pengiriman Berkas</h4>
											</div>

											<div class="modal-body">
												<img class="img-responsive" style="width: auto;" src="<?php echo base_url(). 'assets/bukti_pemberkasan/'.$value->bukti_berkas_dikirim; ?>">
												<label>Masukkan Nama Penerima Berkas</label>
												<input type="text" name="berkas_sudah_diterima_oleh" class="form-control" placeholder="Nama" required>
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
							<?php } ?>
							<!-- <a class="btn btn-info" target="_blank" href="<?=base_url('Admin/cetak_survey_validasi_all'); ?>">
							<span class="glyphicon glyphicon-print"></span>
								Cetak Lembar Validasi/Survey 2
							</a> -->
						</div>

						<div class="box-body">
							<div class="nav-tabs-custom">
								<ul class="nav nav-tabs">
									<li><a class="style-tabs" href="#identitas-diri" data-toggle="tab">Identitas Diri</a></li>
									<li><a class="style-tabs" href="#data-orang-tua" data-toggle="tab">Data Orang Tua</a></li>
									<li><a class="style-tabs" href="#data-kondisi-rumah" data-toggle="tab">Data Kondisi Rumah</a></li>
									<li><a class="style-tabs" href="#data-sekolah" data-toggle="tab">Data Sekolah</a></li>
									<li><a class="style-tabs" href="#data-pesantren" data-toggle="tab">Data Pesantren</a></li>
									<li><a class="style-tabs" href="#data-keterampilan" data-toggle="tab">Data Keterampilan</a></li>
									<li><a class="style-tabs" href="#data-dokumen-pendukung" data-toggle="tab">Data Dokumen Pendukung</a></li>
									<li><a class="style-tabs" href="#data-peryaratan-dokumen" data-toggle="tab">Data Persyaratan Dokumen</a></li>
									<li><a class="style-tabs" href="#data-kipk" data-toggle="tab">Data KIP-K</a></li>
								</ul>

								<div class="col-md-12">
									<div class="tab-content">
										<!--Identitas Diri-->
										<div class="tab-pane active" id="identitas-diri">
											<table class="table">
												<h3>I. Identitas Diri</h3>
												<tr>
													<td><img style="width: 130px; height: 130px;" src="<?php echo base_url(). 'assets/foto_mhs/'.$value->upload_foto; ?>"></td>
												</tr>

				                                <tr>
				                                    <td>No Pendaftaran</td>
				                                    <td>:</td>
				                                    <td><?php echo $value->no_pendaftaran; ?></td>
				                                </tr>

				                                <tr>
				                                    <td>NIK</td>
				                                    <td>:</td>
				                                    <td><?php echo $value->nik; ?></td>
				                                </tr>

												<tr>
													<td>Nama Lengkap</td>
													<td>:</td>
													<td><?php echo $value->nama_mahasiswa; ?></td>
												</tr>

												<tr>
													<td>Jenis Kelamin</td>
													<td>:</td>
													<td><?php echo $value->jenis_kelamin; ?></td>
												</tr>

												<tr>
													<td>Tempat Lahir</td>
													<td>:</td>
													<td><?php echo $value->tempat_lahir; ?></td>
												</tr>

												<tr>
													<td>Tanggal Lahir</td>
													<td>:</td>
													<td><?php echo date_indo($value->tanggal_lahir); ?></td>
												</tr>

												<tr>
													<td>Jalur Pendaftaran</td>
													<td>:</td>
													<td><?php echo $value->jalur_pendaftaran; ?></td>
												</tr>

												<tr>
													<td>Kategori UKT</td>
													<td>:</td>
													<td><?php echo $value->kategori; ?></td>
												</tr>

												<tr>
													<td>Fakultas</td>
													<td>:</td>
													<td><?php
													if($value->fakultas == '0' || $value->fakultas == null){
														echo "-";
													}

													foreach($fakultas as $x_fak){
														if($value->fakultas == $x_fak->id_fakultas){
															echo $x_fak->nama_fakultas;
														}
													}
													?></td>
												</tr>

												<tr>
													<td>Jurusan</td>
													<td>:</td>
													<td><?php
													if($value->jurusan == '0' || $value->jurusan == null){
														echo "-";
													}

													foreach($jurusan as $x_jur){
														if($value->jurusan == $x_jur->id_jurusan){
															echo $x_jur->nama_jurusan;
														}
													}
													?></td>
												</tr>

												<tr>
													<td>Status Pernikahan</td>
													<td>:</td>
													<td><?php echo $value->status_pernikahan; ?></td>
												</tr>

												<tr>
													<td>Asal Provinsi</td>
													<td>:</td>
													<td><?php
													if($value->asal_provinsi == '0' || $value->asal_provinsi == null){
														echo "-";
													}

													foreach ($provinsi as $x_prov) {
														if($value->asal_provinsi == $x_prov->id_propinsi){
															echo $x_prov->nama_propinsi;
														}
													}
													?></td>
												</tr>

												<tr>
													<td>Asal Kab/Kota</td>
													<td>:</td>
													<td><?php
													if($value->asal_kab_kota == '0' || $value->asal_kab_kota == null){
														echo "-";
													}

													foreach($kota as $x_kab_kota){
														if($value->asal_kab_kota == $x_kab_kota->id_kota){
															echo $x_kab_kota->nama_kota;
														}
													}
													?></td>
												</tr>

												<tr>
													<td>No Telp</td>
													<td>:</td>
													<td><?php echo $value->no_telp; ?></td>
												</tr>

												<tr>
													<td>Email</td>
													<td>:</td>
													<td><?php echo $value->email; ?></td>
												</tr>

												<tr>
													<td>Alamat</td>
													<td>:</td>
													<td><?php echo $value->alamat; ?></td>
												</tr>

												<tr>
													<td>Kecamatan</td>
													<td>:</td>
													<td><?php echo $value->kecamatan_2; ?></td>
												</tr>

												<tr>
													<td>Kelurahan</td>
													<td>:</td>
													<td><?php echo $value->kelurahan_2; ?></td>
												</tr>

												<tr>
													<td>RT</td>
													<td>:</td>
													<td><?php echo $value->rt_2; ?></td>
												</tr>

												<tr>
													<td>RW</td>
													<td>:</td>
													<td><?php echo $value->rw_2; ?></td>
												</tr>

												<tr>
													<td>Kode Pos</td>
													<td>:</td>
													<td><?php echo $value->kode_pos; ?></td>
												</tr>

				                                <tr>
				                                    <td>Angkatan</td>
				                                    <td>:</td>
				                                    <td><?php echo $value->tahun; ?></td>
				                                </tr>

				                                <?php if($value->tahun == date('Y')){ ?>
				                                <tr>
				                                    <td>IPK</td>
				                                    <td>:</td>
				                                    <td><?php echo $value->ipk; ?></td>
				                                </tr>
				                            	<?php }else{ ?>
				                            	<tr>
				                                    <td>Nilai Rata-rata Raport</td>
				                                    <td>:</td>
				                                    <td><?php echo $value->niai_rata_rata_raport; ?></td>
				                                </tr>
				                            	<?php } ?>
				                            </table>
										</div>
										<!--End Identitas Diri-->

										<!--Data Ortu-->
										<div class="tab-pane" id="data-orang-tua">
											<table class="table">
												<h3>II. Data Orang Tua</h3>
												<tr>
													<td>Nama Ayah</td>
													<td>:</td>
													<td><?php echo $value->nama_ayah; ?>
													<?php
													if($value->almarhum == '40'){
														echo "(Almarhum)";
													}else if($value->almarhum == null || $value->almarhum == '0'){
														echo "";
													}else{
														echo "(Data Tidak Ada)";
													}
													?></td>
												</tr>

												<tr>
													<td>Nama Ibu</td>
													<td>:</td>
													<td><?php echo $value->nama_ibu; ?>
													<?php
													if($value->almarhumah == '20'){
														echo "(Almarhumah)";
													}else if($value->almarhumah == null || $value->almarhumah == '0'){
														echo "";
													}else{
														echo "(Data Tidak Ada)";
													}
													?></td>
												</tr>

												<tr>
													<td>Alamat Ortu</td>
													<td>:</td>
													<td><?php echo $value->alamat_ortu; ?></td>
												</tr>

												<tr>
													<td>Kecamatan Ortu</td>
													<td>:</td>
													<td><?php echo $value->kecamatan_3; ?></td>
												</tr>

												<tr>
													<td>Kelurahan Ortu</td>
													<td>:</td>
													<td><?php echo $value->kelurahan_3; ?></td>
												</tr>

												<tr>
													<td>RT Ortu</td>
													<td>:</td>
													<td><?php echo $value->rt_3; ?></td>
												</tr>

												<tr>
													<td>RW Ortu</td>
													<td>:</td>
													<td><?php echo $value->rw_3; ?></td>
												</tr>

												<tr>
													<td>Provinsi Ortu</td>
													<td>:</td>
													<td><?php
													foreach ($provinsi as $x_prov) {
														if($value->provinsi_ortu == $x_prov->id_propinsi){
															echo $x_prov->nama_propinsi;
														}
													}
													?></td>
												</tr>

												<tr>
													<td>Kab/Kota Ortu</td>
													<td>:</td>
													<td><?php
													foreach($kota as $x_kab_kota){
														if($value->kab_kota_ortu == $x_kab_kota->id_kota){
															echo $x_kab_kota->nama_kota;
														}
													}
													?></td>
												</tr>

												<tr>
													<td>No Telp/Hp Ortu</td>
													<td>:</td>
													<td><?php echo $value->no_telp_ortu; ?></td>
												</tr>

												<tr>
													<td>Kode Pos Ortu</td>
													<td>:</td>
													<td><?php echo $value->kode_pos_ortu; ?></td>
												</tr>

												<tr>
													<td>Pekerjaan Ayah</td>
													<td>:</td>
													<td><?php
													if($value->pekerjaan_ayah == '1'){
														echo "PNS/TNI/POLRI";
														?>
														<tr>
															<td>Keterangan PNS/TNI/POLRI</td>
															<td>:</td>
															<td><?php echo $value->ket_pns_tni_polri_ayah; ?></td>
														</tr>
														<?php
													}else if($value->pekerjaan_ayah == '2'){
														echo "Wiraswasta";
														?>
														<tr>
															<td>Keterangan Wiraswasta</td>
															<td>:</td>
															<td><?php echo $value->ket_wiraswasta_ayah; ?></td>
														</tr>
														<?php
													}else if($value->pekerjaan_ayah == '3'){
														echo "Tukang";
														?>
														<tr>
															<td>Keterangan Tukang</td>
															<td>:</td>
															<td><?php echo $value->ket_tukang_ayah; ?></td>
														</tr>
														<?php
													}else if($value->pekerjaan_ayah == '4'){
														echo "Buruh Tani/Petani";
													}else{
														echo "Data Tidak Ada";
													}

													?></td>
												</tr>

												<tr>
													<td>Pekerjaan Ibu</td>
													<td>:</td>
													<td><?php
													if($value->pekerjaan_ibu == 'PNS/TNI/POLRI'){
														echo "PNS/TNI/POLRI";
														?>
														<tr>
															<td>Keterangan PNS/TNI/POLRI</td>
															<td>:</td>
															<td><?php echo $value->ket_pns_tni_polri_ibu; ?></td>
														</tr>
														<?php
													}else if($value->pekerjaan_ibu == 'Wiraswasta'){
														echo "Wiraswasta";
														?>
														<tr>
															<td>Keterangan Wiraswasta</td>
															<td>:</td>
															<td><?php echo $value->ket_wiraswasta_ibu; ?></td>
														</tr>
														<?php
													}else if($value->pekerjaan_ibu == 'Ibu Rumah Tangga'){
														echo "Ibu Rumah Tangga";
													}else if($value->pekerjaan_ibu == 'Buruh Tani/Petani'){
														echo "Buruh Tani/Petani";
													}else{
														echo "Data Tidak Ada";
													}

													?></td>
												</tr>

												<tr>
													<td>Pendidikan Ayah</td>
													<td>:</td>
													<td><?php
													if($value->pendidikan_ayah == '1'){
														echo "Lebih dari Sarjana";
													}else if($value->pendidikan_ayah == '2'){
														echo "SLTA/Sederajat";
													}else if($value->pendidikan_ayah == '3'){
														echo "SLTP/Sederajat";
													}else if($value->pendidikan_ayah == '4'){
														echo "SD/Tidak Tamat SD";
													}else{
														echo "Data Tidak Ada";
													}
													?></td>
												</tr>

												<tr>
													<td>Pendidikan Ibu</td>
													<td>:</td>
													<td><?php echo $value->pendidikan_ibu; ?></td>
												</tr>

												<tr>
													<td>Penghasilan Ayah</td>
													<td>:</td>
													<td><?php
													if($value->penghasilan_ayah == '1'){
														echo "Lebih dari 1.000.000";
													}else if($value->penghasilan_ayah == '2'){
														echo "751.000 - 1.000.000";
													}else if($value->penghasilan_ayah == '3'){
														echo "500.001 - 750.000";
													}else if($value->penghasilan_ayah == '4'){
														echo "Kurang dari 500.000";
													}else{
														echo "Data Tidak Ada";
													}
													?></td>
												</tr>

												<tr>
													<td>Nominal Penghasilan Ayah</td>
													<td>:</td>
													<td><?php echo 'Rp '.number_format($value->nominal_peng_ayah); ?></td>
												</tr>

												<tr>
													<td>Penghasilan Ibu</td>
													<td>:</td>
													<td><?php
													if($value->penghasilan_ibu == '1'){
														echo "Lebih dari 1.000.000";
													}else if($value->penghasilan_ibu == '2'){
														echo "751.000 - 1.000.000";
													}else if($value->penghasilan_ibu == '3'){
														echo "500.001 - 750.000";
													}else if($value->penghasilan_ibu == '4'){
														echo "Kurang dari 500.000";
													}else{
														echo "Data Tidak Ada";
													}
													?></td>
												</tr>

												<tr>
													<td>Nominal Penghasilan Ibu</td>
													<td>:</td>
													<td><?php echo 'Rp '.number_format($value->nominal_peng_ibu); ?></td>
												</tr>

												<tr>
													<td>Jumlah Tanggungan</td>
													<td>:</td>
													<td><?php
													if($value->jumlah_saudara_kandung_tang_ortu == '1'){
														echo "Kurang dari 5 Orang";
													}else if($value->jumlah_saudara_kandung_tang_ortu == '2'){
														echo "5 - 6 Orang";
													}else if($value->jumlah_saudara_kandung_tang_ortu == '3'){
														echo "7 - 8 Orang";
													}else if($value->jumlah_saudara_kandung_tang_ortu == '4'){
														echo "Lebih dari 8 Orang";
													}else{
														echo "Data Tidak Ada";
													}
													?></td>
												</tr>
											</table>
										</div>
										<!--End Data Ortu-->

										<!--Data Kondisi Rumah-->
										<div class="tab-pane" id="data-kondisi-rumah">
											<table class="table">
												<h3>III. Data Kondisi Rumah</h3>

												<tr>
											<td>Luas Rumah</td>
											<td>:</td>
											<td><?php
												if($value->luas_rumah == '1'){
													echo "> 120 Meter Persegi";
												}else if($value->luas_rumah == '2'){
													echo "81 - 120 Meter Persegi";
												}else if($value->luas_rumah == '3'){
													echo "41 - 80 Meter Persegi";
												}else if($value->luas_rumah == '4'){
													echo "< 40 Meter Persegi atau Tidak Memiliki Rumah";
												}
											?></td>
											<td><b class="asterik">*</b></td>
										</tr>

										<tr>
											<td>Pajak Bumi Bangunan</td>
											<td>:</td>
											<td><?php
												if($value->pbb == '1'){
													echo "> 100.000";
												}else if($value->pbb == '2'){
													echo "76.000 - 100.000";
												}else if($value->pbb == '3'){
													echo "26.000 - 75.000";
												}else if($value->pbb == '4'){
													echo "< 25.000";
												}
											?></td>
											<td><b class="asterik">*</b></td>
										</tr>

										<tr>
											<td>Rekening Listrik/Bulan</td>
											<td>:</td>
											<td><?php
												if($value->rek_listrik_per_bulan == '1'){
													echo "> 100.000";
												}else if($value->rek_listrik_per_bulan == '2'){
													echo "76.000 - 100.000";
												}else if($value->rek_listrik_per_bulan == '3'){
													echo "26.000 - 75.000";
												}else if($value->rek_listrik_per_bulan == '4'){
													echo "< 25.000";
												}
											?></td>
											<td><b class="asterik">*</b></td>
										</tr>

										<tr>
											<td>Kepemilikan Rumah</td>
											<td>:</td>
											<td><?php echo $value->kepemilikan_rumah; ?></td>
											<td><b class="asterik">*</b></td>
										</tr>

										<tr>
											<td>Jenis Dinding Tempat Tinggal</td>
											<td>:</td>
											<td><?php echo $value->jenis_dinding; ?></td>
											<td><b class="asterik">*</b></td>
										</tr>

										<tr>
											<td>Fasilitas Toilet</td>
											<td>:</td>
											<td><?php echo $value->fasilitas_jamban; ?></td>
											<td><b class="asterik">*</b></td>
										</tr>

										<tr>
											<td>Sumber Penerangan</td>
											<td>:</td>
											<td><?php echo $value->sumber_penerangan; ?></td>
											<td><b class="asterik">*</b></td>
										</tr>

										<tr>
											<td>Sumber Air</td>
											<td>:</td>
											<td><?php echo $value->sumber_air; ?></td>
											<td><b class="asterik">*</b></td>
										</tr>

										<tr>
											<td>Bahan Bakar Dapur</td>
											<td>:</td>
											<td><?php echo $value->bahan_bakar_dapur; ?></td>
											<td><b class="asterik">*</b></td>
										</tr>

										<tr>
											<td>Jarak Rumah dari Pusat Kota/Kabupaten</td>
											<td>:</td>
											<td><?php echo $value->jarak; ?> KM</td>
											<td><b class="asterik">*</b></td>
										</tr>

										<tr>
											<td>Kondisi Jalan Menuju Rumah</td>
											<td>:</td>
											<td><?php echo $value->kondisi_jalan; ?></td>
											<td><b class="asterik">*</b></td>
										</tr>

										<tr>
											<td>Mata Pencaharian Setempat Pada Umumnya</td>
											<td>:</td>
											<td><?php echo $value->mata_pencaharian; ?></td>
											<td><b class="asterik">*</b></td>
										</tr>

											</table>
										</div>
										<!--End Data Kondisi Rumah-->

										<!--Data Sekolah-->
										<div class="tab-pane" id="data-sekolah">
											<table class="table">
												<h3>IV. Data Sekolah</h3>

												<tr>
													<td>Alamat Sekolah</td>
													<td>:</td>
													<td><?php echo $value->alamat_sekolah; ?></td>
												</tr>

												<tr>
													<td>Kecamatan Sekolah</td>
													<td>:</td>
													<td><?php echo $value->kecamatan_5; ?></td>
												</tr>

												<tr>
													<td>Kelurahan Sekolah</td>
													<td>:</td>
													<td><?php echo $value->kelurahan_5; ?></td>
												</tr>

												<tr>
													<td>RT Sekolah</td>
													<td>:</td>
													<td><?php echo $value->rt_5; ?></td>
												</tr>

												<tr>
													<td>RW Sekolah</td>
													<td>:</td>
													<td><?php echo $value->rw_5; ?></td>
												</tr>

												<tr>
													<td>Provinsi Sekolah</td>
													<td>:</td>
													<td><?php
													if($value->prov_sekolah == '0' || $value->prov_sekolah == null){
														echo "-";
													}

													foreach ($provinsi as $x_prov) {
														if($value->prov_sekolah == $x_prov->id_propinsi){
															echo $x_prov->nama_propinsi;
														}
													}
													?></td>
												</tr>

												<tr>
													<td>Kab/Kota Sekolah</td>
													<td>:</td>
													<td><?php
													if($value->kab_kota_sekolah == '0' || $value->kab_kota_sekolah == null){
														echo "-";
													}

													foreach($kota as $x_kab_kota){
														if($value->kab_kota_sekolah == $x_kab_kota->id_kota){
															echo $x_kab_kota->nama_kota;
														}
													}
													?></td>
												</tr>

												<tr>
													<td>Nama Sekolah</td>
													<td>:</td>
													<td><?php echo $value->nama_sekolah; ?></td>
												</tr>

												<tr>
													<td>Tahun Lulus</td>
													<td>:</td>
													<td><?php echo $value->tahun_lulus; ?></td>
												</tr>

												<tr>
													<td>Jurusan Sekolah</td>
													<td>:</td>
													<td><?php echo $value->jurusan_sekolah; ?></td>
												</tr>

												<tr>
													<td>Rerata Nilai UN</td>
													<td>:</td>
													<td><?php
													if($value->rerata_nilai_un == '1'){
														echo "Kurang dari 7.00";
													}else if($value->rerata_nilai_un == '2'){
														echo "7.00 - 8.00";
													}else if($value->rerata_nilai_un == '3'){
														echo "8.10 - 9.00";
													}else if($value->rerata_nilai_un == '4'){
														echo "Lebih dari 9.00";
													}else{
														echo "Data Tidak Ada";
													}
													?></td>
												</tr>

												<tr>
													<td>Rerata Nilai Raport</td>
													<td>:</td>
													<td><?php
													if($value->rerata_nilai_raport == '1'){
														echo "Kurang dari 7.00";
													}else if($value->rerata_nilai_raport == '2'){
														echo "7.00 - 8.00";
													}else if($value->rerata_nilai_raport == '3'){
														echo "8.10 - 9.00";
													}else if($value->rerata_nilai_raport == '4'){
														echo "Lebih dari 9.00";
													}else{
														echo "Data Tidak Ada";
													}
													?></td>
												</tr>

												<tr>
													<td>Prestasi Akademik</td>
													<td>:</td>
													<td><?php
													if($value->prestasi_akademik == '0'){
														echo "Tidak Ada";
													}else if($value->prestasi_akademik == '1'){
														echo "Tingkat Lokal";
													}else if($value->prestasi_akademik == '2'){
														echo "Tingkat Regional";
													}else if($value->prestasi_akademik == '3'){
														echo "Tingkat Nasional";
													}else if($value->prestasi_akademik == '4'){
														echo "Tingkat Internasional";
													}else{
														echo "Data Tidak Ada";
													}
													?></td>
												</tr>

												<tr>
													<td>Keterangan Prestasi Akademik</td>
													<td>:</td>
													<td><?php echo $value->ket_prestasi_akademik; ?></td>
												</tr>

												<tr>
													<td>Prestasi Non Akademik</td>
													<td>:</td>
													<td><?php
													if($value->prestasi_non_akademik == '0'){
														echo "Tidak Ada";
													}else if($value->prestasi_non_akademik == '1'){
														echo "Tingkat Lokal";
													}else if($value->prestasi_non_akademik == '2'){
														echo "Tingkat Regional";
													}else if($value->prestasi_non_akademik == '3'){
														echo "Tingkat Nasional";
													}else if($value->prestasi_non_akademik == '4'){
														echo "Tingkat Internasional";
													}else{
														echo "Data Tidak Ada";
													}
													?></td>
												</tr>

												<tr>
													<td>Keterangan Prestasi Non Akademik</td>
													<td>:</td>
													<td><?php echo $value->ket_prestasi_non_akademik; ?></td>
												</tr>
											</table>
										</div>
										<!--End Data Sekolah-->

										<!--Data Pesantren-->
										<div class="tab-pane" id="data-pesantren">
											<table class="table">
												<h3>V. Data Pesantren</h3>

												<?php
												if($value->mondok == "Ya"){
													?>
													<tr>
														<td>Pernah Mondok</td>
														<td>:</td>
														<td><?php echo $value->mondok; ?></td>
													</tr>

													<tr>
														<td>Nama Ponpes</td>
														<td>:</td>
														<td><?php
														if($value->nama_ponpes == null){
															echo "-";
														}else if($value->nama_ponpes != null){
															echo $value->nama_ponpes;
														}else{
															echo "Data Tidak ada";
														}
														?></td>
													</tr>

													<tr>
														<td>Alamat Ponpes</td>
														<td>:</td>
														<td><?php
														if($value->alamat_ponpes == null){
															echo "-";
														}else if($value->alamat_ponpes != null){
															echo $value->alamat_ponpes;
														}else{
															echo "Data Tidak ada";
														}
														?></td>
													</tr>

				    								<tr>
				    									<td>Kecamatan Ponpes</td>
				    									<td>:</td>
				    									<td><?php echo $value->kecamatan_6; ?></td>
				    								</tr>

				    								<tr>
				    									<td>Kelurahan Ponpes</td>
				    									<td>:</td>
				    									<td><?php echo $value->kelurahan_6; ?></td>
				    								</tr>

				    								<tr>
				    									<td>RT Ponpes</td>
				    									<td>:</td>
				    									<td><?php echo $value->rt_6; ?></td>
				    								</tr>

				    								<tr>
				    									<td>RW Ponpes</td>
				    									<td>:</td>
				    									<td><?php echo $value->rw_6; ?></td>
				    								</tr>

													<tr>
														<td>Provinsi Ponpes</td>
														<td>:</td>
														<td><?php
														if($value->prov_ponpes == '0' || $value->prov_ponpes == null){
															echo "-";
														}

														foreach ($provinsi as $x_prov) {
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
															echo "-";
														}

														foreach($kota as $x_kab_kota){
															if($value->kab_kota_ponpes == $x_kab_kota->id_kota){
																echo $x_kab_kota->nama_kota;
															}
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
													</tr>

													<tr>
														<td>Nama Ponpes</td>
														<td>:</td>
														<td><?php
														if($value->nama_ponpes == null){
															echo "-";
														}else{
															echo "Data Tidak ada";
														}
														?></td>
													</tr>

													<tr>
														<td>Alamat Ponpes</td>
														<td>:</td>
														<td><?php
														if($value->alamat_ponpes == null){
															echo "-";
														}else{
															echo "Data Tidak ada";
														}
														?></td>
													</tr>

													<tr>
														<td>Provinsi Ponpes</td>
														<td>:</td>
														<td><?php
														if($value->prov_ponpes == '0' || $value->prov_ponpes == null){
															echo "-";
														}
														?></td>
													</tr>

													<tr>
														<td>Kab/Kota Ponpes</td>
														<td>:</td>
														<td><?php
														if($value->kab_kota_ponpes == '0' || $value->kab_kota_ponpes == null){
															echo "-";
														}
														?></td>
													</tr>

													<tr>
														<td>Kode Pos Ponpes</td>
														<td>:</td>
														<td><?php
														if($value->kode_pos_ponpes == '0' || $value->kode_pos_ponpes == null){
															echo "-";
														}
														?></td>
													</tr>

													<tr>
														<td>Lama Belajar</td>
														<td>:</td>
														<td><?php
														if($value->lama_belajar == '0' || $value->lama_belajar == null){
															echo "-";
														}
														?> &nbsp;&nbsp;Tahun</td>
													</tr>
												<?php }else{ ?>
												    <tr>
														<td>Pernah Mondok</td>
														<td>:</td>
														<td><?php echo $value->mondok; ?></td>
													</tr>

													<tr>
														<td>Nama Ponpes</td>
														<td>:</td>
														<td><?php
														if($value->nama_ponpes == null){
															echo "-";
														}else{
															echo "Data Tidak ada";
														}
														?></td>
													</tr>

													<tr>
														<td>Alamat Ponpes</td>
														<td>:</td>
														<td><?php
														if($value->alamat_ponpes == null){
															echo "-";
														}else{
															echo "Data Tidak ada";
														}
														?></td>
													</tr>

													<tr>
														<td>Provinsi Ponpes</td>
														<td>:</td>
														<td><?php
														if($value->prov_ponpes == '0' || $value->prov_ponpes == null){
															echo "-";
														}
														?></td>
													</tr>

													<tr>
														<td>Kab/Kota Ponpes</td>
														<td>:</td>
														<td><?php
														if($value->kab_kota_ponpes == '0' || $value->kab_kota_ponpes == null){
															echo "-";
														}
														?></td>
													</tr>

													<tr>
														<td>Kode Pos Ponpes</td>
														<td>:</td>
														<td><?php
														if($value->kode_pos_ponpes == '0' || $value->kode_pos_ponpes == null){
															echo "-";
														}
														?></td>
													</tr>

													<tr>
														<td>Lama Belajar</td>
														<td>:</td>
														<td><?php
														if($value->lama_belajar == '0' || $value->lama_belajar == null){
															echo "-";
														}
														?> &nbsp;&nbsp;Tahun</td>
													</tr>
												<?php } ?>
											</table>
										</div>
										<!--End Data Pesantren-->

										<!--Data Keterampilan-->
										<div class="tab-pane" id="data-keterampilan">
											<table class="table">
												<h3>VI. Data Keterampilan</h3>

												<tr>
													<td>Kemampuan Bahasa Arab</td>
													<td>:</td>
													<td><?php echo $value->kem_bhs_arab; ?></td>
												</tr>

												<tr>
													<td>Kemampuan Bahasa Inggris</td>
													<td>:</td>
													<td><?php echo $value->kem_bhs_inggris; ?></td>
												</tr>

												<tr>
													<td>Kemampuan Komputer</td>
													<td>:</td>
													<td><?php echo $value->kem_komputer; ?></td>
												</tr>
											</table>
										</div>
										<!--End Data Keterampilan-->

										<!--Data KIPK-->
										<div class="tab-pane" id="data-kipk">
											<table class="table">
												<h3>IX. Data KIP</h3>

												<tr>
													<td>Jenis KIP-K</td>
													<td>:</td>
													<td><?php echo $value->jenis_kipk; ?></td>
												</tr>

												<tr>
													<td>Nomor KIP-K</td>
													<td>:</td>
													<td><?php echo $value->nomor_kipk; ?></td>
												</tr>

											</table>
										</div>
										<!--End Data KIPK-->

										<!--Data Dokumen Pendukung-->
										<div class="tab-pane" id="data-dokumen-pendukung">
											<table class="table">
												<h3>VII. Data Dokumen Pendukung</h3>

												<tr>
													<td>Foto Kartu KIP-K</td>
													<td>:</td>
													<td>
														<button class="btn btn-primary" data-toggle="modal" data-target="#view-foto-kipk" type="submit">Lihat</button>
														<a href="<?=base_url().'Auth1/cetak_dokumen/'.sha1(md5(sha1(md5(sha1($value->no_pendaftaran))))).'/'.$param0; ?>" target="_blank" class="btn btn-warning">Cetak</a>
													</td>
												</tr>

												<tr>
													<td>Foto Rumah Bagian Depan</td>
													<td>:</td>
													<td>
														<button class="btn btn-primary" data-toggle="modal" data-target="#view-foto-rumah-bagian-depan" type="submit">Lihat</button>
														<a href="<?=base_url().'Auth1/cetak_dokumen/'.sha1(md5(sha1(md5(sha1($value->no_pendaftaran))))).'/'.$param1; ?>" target="_blank" class="btn btn-warning">Cetak</a>
													</td>
												</tr>

												<tr>
													<td>Foto Rumah Bagian Kiri</td>
													<td>:</td>
													<td>
														<button class="btn btn-primary" data-toggle="modal" data-target="#view-foto-rumah-bagian-kiri" type="submit">Lihat</button>
														<a target="_blank" href="<?=base_url().'Auth1/cetak_dokumen/'.sha1(md5(sha1(md5(sha1($value->no_pendaftaran))))).'/'.$param2; ?>" class="btn btn-warning">Cetak</a>
													</td>
												</tr>

												<tr>
													<td>Foto Rumah Bagian Kanan</td>
													<td>:</td>
													<td>
														<button class="btn btn-primary" data-toggle="modal" data-target="#view-foto-rumah-bagian-kanan" type="submit">Lihat</button>
														<a target="_blank" href="<?=base_url().'Auth1/cetak_dokumen/'.sha1(md5(sha1(md5(sha1($value->no_pendaftaran))))).'/'.$param3; ?>" class="btn btn-warning">Cetak</a>
													</td>
												</tr>

												<tr>
													<td>Foto Rumah Bagian Dalam</td>
													<td>:</td>
													<td>
														<button class="btn btn-primary" data-toggle="modal" data-target="#view-foto-rumah-bagian-dalam" type="submit">Lihat</button>
														<a target="_blank" href="<?=base_url().'Auth1/cetak_dokumen/'.sha1(md5(sha1(md5(sha1($value->no_pendaftaran))))).'/'.$param4; ?>" class="btn btn-warning">Cetak</a>
													</td>
												</tr>

												<tr>
													<td>Foto PBB</td>
													<td>:</td>
													<td>
														<button class="btn btn-primary" data-toggle="modal" data-target="#view-foto-pbb" type="submit">Lihat</button>
														<a target="_blank" href="<?=base_url().'Auth1/cetak_dokumen/'.sha1(md5(sha1(md5(sha1($value->no_pendaftaran))))).'/'.$param5; ?>" class="btn btn-warning">Cetak</a>
													</td>
												</tr>

												<tr>
													<td>Foto Rekening Listrik</td>
													<td>:</td>
													<td>
														<button class="btn btn-primary" data-toggle="modal" data-target="#view-foto-rek-listrik" type="submit">Lihat</button>
														<a target="_blank" href="<?=base_url().'Auth1/cetak_dokumen/'.sha1(md5(sha1(md5(sha1($value->no_pendaftaran))))).'/'.$param6; ?>" class="btn btn-warning">Cetak</a>
													</td>
												</tr>

												<tr>
													<td>Foto KTP</td>
													<td>:</td>
													<td>
														<button class="btn btn-primary" data-toggle="modal" data-target="#view-foto-ktp" type="submit">Lihat</button>
														<a target="_blank" href="<?=base_url().'Auth1/cetak_dokumen/'.sha1(md5(sha1(md5(sha1($value->no_pendaftaran))))).'/'.$param7; ?>" class="btn btn-warning">Cetak</a>
													</td>
												</tr>

												<tr>
													<td>Foto Kartu Keluarga</td>
													<td>:</td>
													<td>
														<button class="btn btn-primary" data-toggle="modal" data-target="#view-foto-kk" type="submit">Lihat</button>
														<a target="_blank" href="<?=base_url().'Auth1/cetak_dokumen/'.sha1(md5(sha1(md5(sha1($value->no_pendaftaran))))).'/'.$param8; ?>" class="btn btn-warning">Cetak</a>
													</td>
												</tr>

												<tr>
										<td>Fakta Integritas</td>
										<td>:</td>
										<td><a href="<?php echo base_url(). 'assets/foto_dokumen/'.$value->upload_fakta_integritas; ?>" class="btn btn-primary">Lihat</a></td>
									</tr>

									<tr>
										<td>Surat Keterangan Pemilik Rumah</td>
										<td>:</td>
										<td><a href="<?php echo base_url(). 'assets/foto_dokumen/'.$value->upload_surat_keterangan_kepemilikan_rumah; ?>" class="btn btn-primary">Lihat</a></td>
									</tr>

									<tr>
										<td>Surat Pernyataan Kebenaran Data</td>
										<td>:</td>
										<td><a href="<?php echo base_url(). 'assets/foto_dokumen/'.$value->upload_surat_pernyataan_kebenaran_data; ?>" class="btn btn-primary">Lihat</a></td>
									</tr>

									<tr>
										<td>Surat Pernyataan KIPK</td>
										<td>:</td>
										<td><a href="<?php echo base_url(). 'assets/foto_dokumen/'.$value->upload_surat_pernyataan_kipk; ?>" class="btn btn-primary">Lihat</a></td>
									</tr>

												<tr>
													<td>Semua Foto Dokumen</td>
													<td>:</td>
													<td>
														<button class="btn btn-primary" data-toggle="modal" data-target="#view-foto-semua" type="submit">Lihat</button>
														<a target="_blank" href="<?=base_url().'Auth1/cetak_dokumen/'.sha1(md5(sha1(md5(sha1($value->no_pendaftaran))))).'/'.$param9; ?>" class="btn btn-warning">Cetak</a>
													</td>
												</tr>
											</table>
										</div>
										<!--End Data Dokumen Pendukung-->

										<!--Data Persyaratan Dokumen-->
										<div class="tab-pane" id="data-peryaratan-dokumen">
											<table class="table">
												<h3>VIII. Data Persyaratan Dokumen</h3>

												<tr>
													<td>Kartu Indonesia Pintar Kuliah</td>
													<td>:</td>
													<td><?php echo $value->upload_foto_kipk; ?></td>
												</tr>

												<tr>
													<td>Kartu Peserta Jalur <?php echo $value->jalur_pendaftaran.' '.date('Y'); ?></td>
													<td>:</td>
													<td><?php echo $value->kartu_tes; ?></td>
												</tr>

												<tr>
													<td>Formulir Pedaftaran Bidik Misi yang telah diisi</td>
													<td>:</td>
													<td><?php echo $value->formulir_pendaftaran; ?></td>
												</tr>

												<tr>
													<td>Surat Keterangan Lulus dari Kepela Sekolah</td>
													<td>:</td>
													<td><?php echo $value->surat_ket_lulus; ?></td>
												</tr>

												<!--
												<tr>
													<td>Fotocopy Raport Semester 1-6 yang dilegalisir Kepala Sekolah</td>
													<td>:</td>
													<td><?php echo $value->fotocopy_raport_semester; ?></td>
												</tr>
                                                -->
												<tr>
													<td>Fotocopy Ijazah yang dilegalisir Kepala Sekolah</td>
													<td>:</td>
													<td><?php echo $value->fotocopy_ijazah; ?></td>
												</tr>

												<tr>
													<td>Fotocopy Nilai Ujian Akhir Nasional yang dilegalisir Kepala Sekolah</td>
													<td>:</td>
													<td><?php echo $value->fotocopy_nilai_uan; ?></td>
												</tr>

												<tr>
													<td>Surat Keterangan Prestasi dan Bukti Pendukung Prestasi yang dilegalisir Kepala Sekolah</td>
													<td>:</td>
													<td><?php echo $value->surat_ket_prestasi; ?></td>
												</tr>

												<tr>
													<td>Surat Keterangan Penghasilan Ortu/Wali atau Surat Keterangan Tidak Mampu yang dikeluarkan Kepala Desa/Dusun/Instansi/Tokoh Masyarakat</td>
													<td>:</td>
													<td><?php echo $value->surat_ket_peng_ortu; ?></td>
												</tr>

												<tr>
													<td>Fotocopy Kartu Keluarga atau Surat Keterangan Susunan Keluarga</td>
													<td>:</td>
													<td><?php echo $value->fotocopy_kk; ?></td>
												</tr>

												<tr>
													<td>Fotocopy Rekening Listrik Bulan Terakhir (bila tersedia listrik)</td>
													<td>:</td>
													<td><?php echo $value->fotocopy_rek_listrik; ?></td>
												</tr>

												<tr>
													<td>Fotocopy Bukti Pembayaran PBB Tahun Terakhir</td>
													<td>:</td>
													<td><?php echo $value->fotocopy_pbb; ?></td>
												</tr>

												<tr>
													<td>Melengkapi data foto rumah dari 3(tiga) sudut</td>
													<td>:</td>
													<td><?php echo $value->foto_rumah_tiga_sudut; ?></td>
												</tr>
											</table>
										</div>
										<!--End Data Persyaratan Dokumen-->
									</div>
								</div>
							</div>

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
