<!DOCTYPE html>
<html>
	<?php
		//load header
		$this->load->view('project_bidikmisi/header/mahasiswa/header_mhs');
	?>
	
	<body>
		<script type="text/javascript">
			//check keterangan
			function proses(){
				var keterangan=document.getElementById("pekerjaan_ayah").value;

				if(keterangan=="1"){
					document.getElementById("keterangan_tukang").style.display = "none";
					document.getElementById("keterangan_wiraswasta").style.display = "none";
					document.getElementById("keterangan_pns").style.display = "block";
				}else if(keterangan=="2"){
					document.getElementById("keterangan_pns").style.display = "none";
					document.getElementById("keterangan_tukang").style.display = "none";
					document.getElementById("keterangan_wiraswasta").style.display = "block";
				}else if(keterangan=="3"){
					document.getElementById("keterangan_pns").style.display = "none";
					document.getElementById("keterangan_wiraswasta").style.display = "none";
					document.getElementById("keterangan_tukang").style.display = "block";
				}else{
					document.getElementById("keterangan_pns").style.display = "none";
					document.getElementById("keterangan_wiraswasta").style.display = "none";
					document.getElementById("keterangan_tukang").style.display = "none";
				}
			}

			function proses2(){
				var keterangan=document.getElementById("pekerjaan_ibu").value;

				if(keterangan=="PNS/TNI/POLRI"){
					document.getElementById("keterangan_wiraswasta2").style.display = "none";
					document.getElementById("keterangan_pns2").style.display = "block";
				}else if(keterangan=="Wiraswasta"){
					document.getElementById("keterangan_pns2").style.display = "none";
					document.getElementById("keterangan_wiraswasta2").style.display = "block";
				}else{
					document.getElementById("keterangan_pns2").style.display = "none";
					document.getElementById("keterangan_wiraswasta2").style.display = "none";
				}
			}
			//End check keterangan

			//cek pondok
			function cek_pondok(){
				  var kode = document.getElementById('mondok').checked;
				  var elems = document.getElementsByClassName('list_pondok');
				  if ( kode == false ) {
				      for(var i = 0; i < elems.length; i++) {
				          elems[i].style.backgroundColor = "#DCDCDC";
				          elems[i].disabled = true; 
				          elems[i].required = false;
				      }
				  } else {
				      for(var i = 0; i < elems.length; i++) {
				          elems[i].style.backgroundColor = '#FFFFFF';
				          elems[i].disabled = false;
				          elems[i].required = true; 
				      	}
				  	}
				}
			//End cek pondok
		</script>

		<div class="container">
			<div class="row">
				<div class="wrapper">
					<form action="C_mhs/update" method="POST">
					<!--Progress-->
					<section id="wizard">
						<div id="">
							<div class="navbar navbar-default">
								<div class="col-md-12">
									<div class="container-fluid">
										<ul class="nav navbar-nav">
											<li><a style="font-size: 13px;" href="#tab1" data-toggle="tab"><p>Tahap 1</p>Upload Foto</a></li>
											<li><a style="font-size: 13px;" href="#tab2" data-toggle="tab"><p>Tahap 2</p> Identitas Diri</a></li>
											<li><a style="font-size: 13px;" href="#tab3" data-toggle="tab"><p>Tahap 3</p>Data Ortu</a></li>
											<li><a style="font-size: 13px;" href="#tab4" data-toggle="tab"><p>Tahap 4</p>Data Kondisi Rumah</a></li>
											<li><a style="font-size: 13px;" href="#tab5" data-toggle="tab"><p>Tahap 5</p>Data Sekolah</a></li>
											<li><a style="font-size: 13px;" href="#tab6" data-toggle="tab"><p>Tahap 6</p>Data Pesantren</a></li>
											<li><a style="font-size: 13px;" href="#tab7" data-toggle="tab"><p>Tahap 7</p>Keterampilan</a></li>
											<li><a style="font-size: 13px;" href="#tab8" data-toggle="tab"><p>Tahap 8</p>Persyaratan Dokumen</a></li>
											<li><a style="font-size: 13px;" href="#tab9" data-toggle="tab"><p>Tahap 9</p>Upload Dokumen Pendukung</a></li>
											<li><a style="font-size: 13px;" href="#tab10" data-toggle="tab"><p>Tahap 10</p>Pilih Jadwal Verifikasi</a></li>
										</ul>
									</div>
								</div>
							</div>

							<!--div id="bar" class="progress">
	                      		<div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;"></div>
	                    	</div-->

							<div class="tab-content">
								<div class="tab-pane" id="tab1">
									<!--Upload Foto-->
									<div class="text-center mb-4">
										<div class="col-md-12">
											<div id="judul-upload-foto">
												<h2><b>Upload Foto</b></h2>
												<hr style="height: 5px;" color="#073763">
											</div>
										</div>
									</div>

									<div class="col-md-12">
										<center>
											<div id="input-foto">
												<input type="file" name="foto" required="required">
											</div>
										</center>

										<div class="text-center mb-4">
											<div id="aturan">
												<p>*Maks Foto 650 KB</p>
												<p>*Format Foto : JPG, JPEG, dan PNG</p>
												<p>*Foto Harus Resmi</p>
												<p>*Contoh Format nama file : Nopendaftaran_Nama</p>
											</div>
										</div>

										<hr style="height: 5px;" color="#073763">
									</div>
									<!--End Upload Foto-->

									<div class="clear"></div>

									<!--button Simpan-->
									<div id="button-all">
										<button class="btn btn-success" style="margin-right:20px; " href="" type="submit">
										<i class="fa fa-check-circle-o"></i>
											Simpan
										</button>
									</div>
									<!--End button Simpan-->

									<div class="clear"></div>	
								</div>

								<div class="tab-pane" id="tab2">
									<!--Identitas Diri-->
									<div class="text-center mb-4">
										<div class="col-md-12">
											<div id="identitas-diri">
												<h2><b>Identitas Diri</b></h2>
												<hr style="height:5px;" color="#073763">
											</div>
										</div>
									</div>

									<div class="col-md-12">
										<div class="text-center mb-4">
											<div class="table-responsive">
												<table class="table">
													<tr>
														<td style="color: red;">Tempat Lahir</td>
														<td>:</td>
														<td><input style="font-family:'Arial';font-size:13px;padding:5px 10px 5px 10px;border: 3px solid #aaa;" type="text" placeholder="Tempat Lahir Anda" name="tempat_lahir" required="required"></td>
													</tr>

													<tr>
														<td style="color: red;">Status Pernikahan</td>
														<td>:</td>
														<td><select style="border: 3px solid #aaa; padding: 5px 63px 5px 5px; font-size: 13px; " required="required" name="status_pernikahan">
															<option value="">-Pilih SalahSatu-</option>
															<option value="Menikah">Menikah</option>
															<option value="Belum Menikah">Belum Menikah</option>
														</select></td>
													</tr>

													<tr>
														<td style="color: red;">Asal Provinsi</td>
														<td>:</td>
														<td><select style="border: 3px solid #aaa; padding: 5px 63px 5px 5px; font-size: 13px; " required="required" name="asal_provinsi">
															<option value="">-Pilih SalahSatu-</option>
														</select></td>
													</tr>

													<tr>
														<td style="color: red;">Asal Kab/Kota</td>
														<td>:</td>
														<td><select style="border: 3px solid #aaa; padding: 5px 63px 5px 5px; font-size: 13px; " required="required" name="asal_kab_kota">
															<option value="">-Pilih SalahSatu-</option>
														</select></td>
													</tr>

													<tr>
														<td style="color: red;">No Telp/Hp</td>
														<td>:</td>
														<td><input style="font-family:'Arial';font-size:13px;padding:5px 10px 5px 10px;border: 3px solid #aaa;" type="text" placeholder="Contoh : 0882-2233-8832" name="no_telp" required="required"></td>
													</tr>

													<tr>
														<td style="color: red;">Email</td>
														<td>:</td>
														<td><input style="font-family:'Arial';font-size:13px;padding:5px 10px 5px 10px;border: 3px solid #aaa;" type="email" placeholder="Email Anda" name="email" required="required"></td>
													</tr>

													<tr>
														<td style="color: red;">Alamat</td>
														<td>:</td>
														<td><textarea style="border:3px solid #aaa;padding:5px 24px 25px 5px; font-size: 13px; font-family: 'Arial';" type="text" name="alamat" placeholder="Alamat Anda" required="required"></textarea></td>
													</tr>

													<tr>
														<td style="color: red;">Kode Pos Alamat Anda</td>
														<td>:</td>
														<td><input style="font-family:'Arial';font-size:13px;padding:5px 10px 5px 10px;border: 3px solid #aaa;" type="text" placeholder="Kode Pos Alamat Anda" name="kode_pos" required="required"></td>
													</tr>
												</table>
											</div>

											<hr style="height:5px;" color="#073763">
										</div>

										<!--button Simpan-->
										<div id="button-all">
											<button class="btn btn-success" style="margin-right:20px; " href="" type="submit">
											<i class="fa fa-check-circle-o"></i>
												Simpan
											</button>
										</div>
										<!--End button Simpan-->
									</div>
									<!--End Identitas Diri-->
								</div>

								<div class="clear"></div>

								<div class="tab-pane" id="tab3">
									<!--Data Ortu-->
									<div class="text-center mb-4">
										<div class="col-md-12">
											<div id="data-ortu">
												<h2><b>Data Orang Tua</b></h2>
												<hr style="height:5px;" color="#073763">
											</div>
											
											<div class="alert alert-info">
												<p>Keterangan</p>
												<p>-----------------</p>
												<p>Tanda (*) Harus Diisi</p>
												<p>Jika Orang Tua Anda Meninggal Silahkan Ceklis Bagian Kanan Pengisian Nama Ayah dan Nama Ibu.</p>
												<p>Jika Sudah Mengisi Silahkan Klik Tombol Simpan</p>
											</div>
										</div>
									</div>

									<div class="col-md-12">
										<div class="text-center mb-4">
											<div class="table-responsive">
												<table class="table">
													<tr>
														<td>Nama Ayah</td>
														<td>:</td>
														<td>
															<input style="font-family:'Arial';font-size:13px;padding:5px 10px 5px 10px;border: 3px solid #aaa; margin-left: 80px;" type="text" placeholder="Nama Ayah Anda" name="nama_ayah" required="required">
															<i style="color:red;">*</i>
															<input type="checkbox" value="40" name="almarhum">Almarhum
														</td>
													</tr>

													<tr>
														<td>Nama Ibu</td>
														<td>:</td>
														<td>
															<input style="font-family:'Arial';font-size:13px;padding:5px 10px 5px 10px;border: 3px solid #aaa; margin-left: 95px;" type="text" placeholder="Nama Ibu Anda" name="nama_ibu" required="required">
															<i style="color:red;">*</i>
															<input value="20" type="checkbox" name="almarhumah">Almarhumah
														</td>
													</tr>

													<tr>
														<td>Alamat Ortu</td>
														<td>:</td>
														<td>
															<textarea style="border:3px solid #aaa;padding:5px 24px 25px 5px; font-size: 13px; font-family: 'Arial';" type="text" name="alamat_ortu" placeholder="Alamat Ortu Anda" required="required"></textarea>
															<i style="color:red;">*</i>
														</td>
													</tr>

													<tr>
														<td>Provinsi Ortu</td>
														<td>:</td>
														<td>
															<select style="border: 3px solid #aaa; padding: 5px 63px 5px 5px; font-size: 13px; " required="required" name="asal_provinsi_ortu">
																<option value="">-Pilih SalahSatu-</option>
															</select>
															<i style="color:red;">*</i>
														</td>
													</tr>

													<tr>
														<td>Kab/Kota Ortu</td>
														<td>:</td>
														<td>
															<select style="border: 3px solid #aaa; padding: 5px 63px 5px 5px; font-size: 13px; " required="required" name="kab_kota_ortu">
																<option value="">-Pilih SalahSatu-</option>
															</select>
															<i style="color:red;">*</i>
														</td>
													</tr>

													<tr>
														<td>Kode Pos Ortu</td>
														<td>:</td>
														<td>
															<input style="font-family:'Arial';font-size:13px;padding:5px 10px 5px 10px;border: 3px solid #aaa; margin-right: 10px;"  type="text" name="kode_pos_ortu" placeholder="Kode Pos Ortu Anda">
														</td>
													</tr>

													<tr>
														<td>No Telp/Hp Ortu</td>
														<td>:</td>
														<td>
															<input style="font-family:'Arial';font-size:13px;padding:5px 10px 5px 10px;border: 3px solid #aaa;"  type="text" name="no_telp_ortu" required="required" placeholder="Contoh : 0883-2239-3343">
															<i style="color:red;">*</i>
														</td>
													</tr>

													<tr>
														<td>Pekerjaan Ayah</td>
														<td>:</td>
														<td>
															<select id="pekerjaan_ayah" onchange="proses()" style="border: 3px solid #aaa; padding: 5px 59px 5px 5px; font-size: 13px; " required="required" name="pekerjaan_ayah">
																<option value="">-Pilih SalahSatu-</option>
																<option value="1">PNS/TNI/POLRI</option>
																<option value="2">Wiraswasta</option>
																<option value="3">Tukang</option>
																<option value="4">Buruh Tani/Petani</option>
															</select>
															<i style="color:red;">*</i>
														</td>
													</tr>

													<tr id="keterangan_pns" style="display: none; position: relative; left: 293px;">
														<td>Keterangan PNS/TNI/POLRI</td>
														<td>:</td>
														<td>
															<textarea style="border:3px solid #aaa;padding:5px 26px 25px 5px; margin-right: 12px; font-size: 13px; font-family: 'Arial';" type="text" name="pns_tni_polri_ayah" placeholder="Keterangan PNS/TNI/POLRI Ayah"></textarea>
														</td>
													</tr>

													<tr id="keterangan_wiraswasta" style="display: none; position: relative; left: 306px;">
														<td>Keterangan Wiraswasta</td>
														<td>:</td>
														<td>
															<textarea style="border:3px solid #aaa;padding:5px 26px 25px 5px; margin-right: 12px; font-size: 13px; font-family: 'Arial';" type="text" name="wiraswasta_ayah" placeholder="Keterangan Wiraswasta Ayah"></textarea>
														</td>
													</tr>

													<tr id="keterangan_tukang" style="display: none; position: relative; left: 318px;">
														<td>Keterangan Tukang</td>
														<td>:</td>
														<td>
															<textarea style="border:3px solid #aaa;padding:5px 26px 25px 5px; margin-right: 12px; font-size: 13px; font-family: 'Arial';" type="text" name="tukang_ayah" placeholder="Keterangan Tukang Ayah"></textarea>
														</td>
													</tr>

													<tr>
														<td>Pekerjaan Ibu</td>
														<td>:</td>
														<td>
															<select id="pekerjaan_ibu" onchange="proses2()" style="border: 3px solid #aaa; padding: 5px 49px 5px 5px; font-size: 13px; " required="required" name="pekerjaan_ibu">
																<option value="">-Pilih SalahSatu-</option>
																<option value="PNS/TNI/POLRI">PNS/TNI/POLRI</option>
																<option value="Wiraswasta">Wiraswasta</option>
																<option value="Ibu Rumah Tangga">Ibu Rumah Tangga</option>
																<option value="Buruh Tani/Petani">Buruh Tani/Petani</option>
															</select>
															<i style="color:red;">*</i>
														</td>
													</tr>

													<tr id="keterangan_pns2" style="display: none; position: relative; left: 293px;">
														<td>Keterangan PNS/TNI/POLRI</td>
														<td>:</td>
														<td>
															<textarea style="border:3px solid #aaa;padding:5px 26px 25px 5px; font-size: 13px; font-family: 'Arial'; margin-right: 12px;" type="text" name="pns_tni_polri_ibu" placeholder="Keterangan PNS/TNI/POLRI Ibu"></textarea>
														</td>
													</tr>

													<tr id="keterangan_wiraswasta2" style="display: none; position: relative; left: 306px;">
														<td>Keterangan Wiraswasta</td>
														<td>:</td>
														<td>
															<textarea style="border:3px solid #aaa;padding:5px 26px 25px 5px; margin-right: 12px; font-size: 13px; font-family: 'Arial';" type="text" name="wiraswasta_ibu" placeholder="Keterangan Wiraswasta Ibu"></textarea>
														</td>
													</tr>


													<tr>
														<td>Pendidikan Ayah</td>
														<td>:</td>
														<td>
															<select style="border: 3px solid #aaa; padding: 5px 55px 5px 5px; font-size: 13px; " required="required" name="pendidikan_ayah">
																<option value="">-Pilih SalahSatu-</option>
																<option value="1">>Sarjana</option>
																<option value="2">SLTA/Sederajat</option>
																<option value="3">SLTP/Sederajat</option>
																<option value="4">SD/Tidak Sekolah</option>
															</select>
															<i style="color:red;">*</i>
														</td>
													</tr>

													<tr>
														<td>Pendidikan Ibu</td>
														<td>:</td>
														<td>
															<select style="border: 3px solid #aaa; padding: 5px 54px 5px 5px; font-size: 13px; " required="required" name="pendidikan_ibu">
																<option value="">-Pilih SalahSatu-</option>
																<option value=">Sarjana">>Sarjana</option>
																<option value="SLTA/Sederajat">SLTA/Sederajat</option>
																<option value="SLTP/Sederajat">SLTP/Sederajat</option>
																<option value="SD/Tidak Sekolah">SD/Tidak Sekolah</option>
															</select>
															<i style="color:red;">*</i>
														</td>
													</tr>

													<tr>
														<td>Penghasilan Ayah</td>
														<td>:</td>
														<td>
															<select style="border: 3px solid #aaa; padding: 5px 18px 5px 5px; font-size: 13px; " required="required" name="penghasilan_ayah">
																<option value="">-Pilih SalahSatu-</option>
																<option value="1">1.001.000 s/d 1.200.000</option>
																<option value="2">751.000 s/d 1.000.000</option>
																<option value="3">501.000 s/d 750.000</option>
																<option value="4">< 500.000</option>
															</select>
															<i style="color:red;">*</i>
														</td>
													</tr>

													<tr>
														<td>Nominal Penghasilan Ayah</td>
														<td>:</td>
														<td>
															<input style="font-family:'Arial';font-size:13px;padding:5px 7px 5px 10px;border: 3px solid #aaa; margin-right: 11px;" type="number" min="0" name="nominal_penghasilan_ayah" placeholder="Contoh : 1000000">
														</td>
													</tr>

													<tr>
														<td>Penghasilan Ibu</td>
														<td>:</td>
														<td>
															<select style="border: 3px solid #aaa; padding: 5px 17px 5px 5px; font-size: 13px;" required="required" name="penghasilan_ibu">
																<option value="">-Pilih SalahSatu-</option>
																<option value="1">1.001.000 s/d 1.200.000</option>
																<option value="2">751.000 s/d 1.000.000</option>
																<option value="3">501.000 s/d 750.000</option>
																<option value="4">< 500.000</option>
															</select>
															<i style="color:red;">*</i>
														</td>
													</tr>

													<tr>
														<td>Nominal Penghasilan Ibu</td>
														<td>:</td>
														<td>
															<input style="font-family:'Arial';font-size:13px;padding:5px 7px 5px 10px;border: 3px solid #aaa; margin-right: 11px;" type="number" min="0" name="nominal_penghasilan_ibu" placeholder="Contoh : 1000000">
														</td>
													</tr>

													<tr>
														<td>Jumlah Saudara Kandung masih dalam tanggungan Ortu</td>
														<td>:</td>
														<td>
															<select style="border: 3px solid #aaa; padding: 5px 63px 5px 5px; font-size: 13px; " required="required" name="saudara_kandung">
																<option value="">-Pilih SalahSatu-</option>
																<option value="1">< 3 Orang</option>
																<option value="2">4 - 6 Orang</option>
																<option value="3">7 - 8 Orang</option>
																<option value="4">> 8 Orang</option>
															</select>
															<i style="color:red;">*</i>
														</td>
													</tr>

												</table>
											</div>

											<hr style="height:5px;" color="#073763">
										</div>

										<!--button Simpan-->
										<div id="button-all">
											<button class="btn btn-success" style="margin-right:20px; " href="" type="submit">
											<i class="fa fa-check-circle-o"></i>
												Simpan
											</button>
										</div>
										<!--End button Simpan-->
									</div>
									<!--End Data Ortu-->
								</div>

								<div class="clear"></div>

								<div class="tab-pane" id="tab4">
									<!--Data Kondisi Rumah-->
									<div class="text-center mb-4">
										<div class="col-md-12">
											<div id="data-kondisi-rumah">
												<h2><b>Data Kondisi Rumah</b></h2>
												<hr style="height:5px;" color="#073763">
											</div>
										</div>
									</div>

									<div class="col-md-12">
										<div class="text-center mb-4">
											<div class="table-responsive">
												<table class="table">
													<tr>
														<td>Luas Rumah</td>
														<td>:</td>
														<td>
															<select style="border: 3px solid #aaa; padding: 5px 33px 5px 5px; font-size: 13px; " required="required" name="luas_rumah">
																<option value="">-Pilih SalahSatu-</option>
																<option value="1">> 120 Meter Persegi</option>
																<option value="2">81 - 120 Meter Persegi</option>
																<option value="3">41 - 80 Meter Persegi</option>
																<option value="4">< 40 Meter Persegi</option>
															</select>
															<i style="color:red;">*</i>
														</td>
													</tr>

													<tr>
														<td>Pajak Bumi Bangunan (PBB) Pertahun</td>
														<td>:</td>
														<td>
															<select style="border: 3px solid #aaa; padding: 5px 68px 5px 5px; font-size: 13px; " required="required" name="asal_provinsi_ortu">
																<option value="">-Pilih SalahSatu-</option>
																<option value="1">> 100.000</option>
																<option value="2">76.000 - 100.000</option>
																<option value="3">26.000 - 75.000</option>
																<option value="4">< 25.000</option>
															</select>
															<i style="color:red;">*</i>
														</td>
													</tr>

													<tr>
														<td>Rekening Listrik Perbulan</td>
														<td>:</td>
														<td>
															<select style="border: 3px solid #aaa; padding: 5px 68px 5px 5px; font-size: 13px; " required="required" name="asal_provinsi_ortu">
																<option value="">-Pilih SalahSatu-</option>
																<option value="1">> 100.000</option>
																<option value="2">76.000 - 100.000</option>
																<option value="3">26.000 - 75.000</option>
																<option value="4">< 25.000</option>
															</select>
															<i style="color:red;">*</i>
														</td>
													</tr>

												</table>
											</div>

											<hr style="height:5px;" color="#073763">
										</div>

										<!--button Simpan-->
										<div id="button-all">
											<button class="btn btn-success" style="margin-right:20px; " href="" type="submit">
											<i class="fa fa-check-circle-o"></i>
												Simpan
											</button>
										</div>
										<!--End button Simpan-->
									</div>
									<!--End Data Kondisi Rumah-->
								</div>

								<div class="clear"></div>

								<div class="tab-pane" id="tab5">
									<!--Data Sekolah-->
									<div class="text-center mb-4">
										<div class="col-md-12">
											<div id="data-sekolah">
												<h2><b>Data Sekolah</b></h2>
												<hr style="height:5px;" color="#073763">
											</div>
										</div>
									</div>

									<div class="col-md-12">
										<div class="text-center mb-4">
											<div class="table-responsive">
												<table class="table">					<tr>
														<td>Alamat Sekolah</td>
														<td>:</td>
														<td>
															<textarea style="border:3px solid #aaa;padding:5px 24px 25px 5px; font-size: 13px; font-family: 'Arial';" type="text" name="alamat_sekolah" placeholder="Alamat Sekolah Anda" required="required"></textarea>
															<i style="color:red;">*</i>
														</td>
													</tr>

													<tr>
														<td>Provinsi Sekolah</td>
														<td>:</td>
														<td>
															<select style="border: 3px solid #aaa; padding: 5px 63px 5px 5px; font-size: 13px; " required="required" name="provinsi_sekolah">
															<option value="">-Pilih SalahSatu-</option>
															</select>
															<i style="color:red;">*</i>
														</td>
													</tr>

													<tr>
														<td>Kab/Kota Sekolah</td>
														<td>:</td>
														<td>
															<select style="border: 3px solid #aaa; padding: 5px 63px 5px 5px; font-size: 13px; " required="required" name="kab_kota_sekolah">
															<option value="">-Pilih SalahSatu-</option>
															</select>
															<i style="color:red;">*</i>
														</td>
													</tr>

													<tr>
														<td>Nama Sekolah</td>
														<td>:</td>
														<td>
															<textarea style="border:3px solid #aaa;padding:5px 24px 25px 5px; font-size: 13px; font-family: 'Arial';" type="text" name="nama_sekolah" placeholder="Nama Sekolah Anda" required="required"></textarea>
															<i style="color:red;">*</i>
														</td>
													</tr>

													<tr>
														<td>Tahun Lulus</td>
														<td>:</td>
														<td>
															<select style="border: 3px solid #aaa; padding: 5px 63px 5px 5px; font-size: 13px; " required="required" name="tahun_lulus">
															<option value="">-Pilih SalahSatu-</option>
															<option value="2018">2018</option>
															<option value="2019">2019</option>
															</select>
															<i style="color:red;">*</i>
														</td>
													</tr>

													<tr>
														<td>Jurusan di Sekolah</td>
														<td>:</td>
														<td>
															<select style="border: 3px solid #aaa; padding: 5px 63px 5px 5px; font-size: 13px; " required="required" name="jurusan_sekolah">
															<option value="">-Pilih SalahSatu-</option>
															<option value="IPA">IPA</option>
															<option value="IPS">IPS</option>
															<option value="Bahasa">Bahasa</option>
															<option value="Teknik">Teknik</option>
															<option value="Pertanian">Pertanian</option>
															<option value="Ekonomi">Ekonomi</option>
															<option value="Seni">Seni</option>
															<option value="Pariwisata">Pariwisata</option>
															<option value="Agama">Agama</option>
															<option value="Lain - Lain">Lain - Lain</option>
															</select>
															<i style="color:red;">*</i>
														</td>
													</tr>

													<tr>
														<td>Rerata Nilai UN</td>
														<td>:</td>
														<td>
															<select style="border: 3px solid #aaa; padding: 5px 63px 5px 5px; font-size: 13px; " required="required" name="rerata_nilai_un">
															<option value="">-Pilih SalahSatu-</option>
															<option value="1">< 7.00</option>
															<option value="2">7.00 - 8.00</option>
															<option value="3">8.10 - 9.00</option>
															<option value="4">> 9.00</option>
															</select>
															<i style="color:red;">*</i>
														</td>
													</tr>

													<tr>
														<td>Rerata Nilai Raport Sekolah</td>
														<td>:</td>
														<td>
															<select style="border: 3px solid #aaa; padding: 5px 63px 5px 5px; font-size: 13px; " required="required" name="rerata_nilai_raport">
															<option value="">-Pilih SalahSatu-</option>
															<option value="1">< 7.00</option>
															<option value="2">7.00 - 8.00</option>
															<option value="3">8.10 - 9.00</option>
															<option value="4">> 9.00</option>
															</select>
															<i style="color:red;">*</i>
														</td>
													</tr>	

													<tr>
														<td>Prestasi Akademik Terbaik</td>
														<td>:</td>
														<td>
															<select style="border: 3px solid #aaa; padding: 5px 40px 5px 5px; font-size: 13px; margin-left: 2px;" required="required" name="prestasi_akademik">
															<option value="">-Pilih SalahSatu-</option>
															<option value="0">Tidak Ada Prestasi</option>
															<option value="1">Tingkat Lokal</option>
															<option value="2">Tingkat Regional</option>
															<option value="3">Tingkat Nasional</option>
															<option value="4">Tingkat Internasional</option>
															</select>
															<i style="color:red;">*</i>
														</td>
													</tr>

													<tr>
														<td>Prestasi Non Akademik Terbaik</td>
														<td>:</td>
														<td>
															<select style="border: 3px solid #aaa; padding: 5px 40px 5px 5px; font-size: 13px; margin-left: 2px;" required="required" name="prestasi_non_akademik">
															<option value="">-Pilih SalahSatu-</option>
															<option value="0">Tidak Ada Prestasi</option>
															<option value="1">Tingkat Lokal</option>
															<option value="2">Tingkat Regional</option>
															<option value="3">Tingkat Nasional</option>
															<option value="4">Tingkat Internasional</option>
															</select>
															<i style="color:red;">*</i>
														</td>
													</tr>								
												</table>
											</div>

											<hr style="height:5px;" color="#073763">
										</div>
										
										<!--button Simpan-->
										<div id="button-all">
											<button class="btn btn-success" style="margin-right:20px; " href="" type="submit">
											<i class="fa fa-check-circle-o"></i>
												Simpan
											</button>
										</div>
										<!--End button Simpan-->
									</div>
									<!--End Data Sekolah-->
								</div>

								<div class="clear"></div>

								<div class="tab-pane" id="tab6">
									<!--Data Pesantren-->
									<div class="text-center mb-4">
										<div class="col-md-12">
											<div id="data-pesantren">
												<h2><b>Data Pesantren</b></h2>
												<hr style="height:5px;" color="#073763">
											</div>
										</div>
									</div>

									<div class="col-md-12">
										<div class="text-center mb-4">
											<div class="table-responsive">
												<table class="table">
													<tr>
														<td>Pernah Modok</td>
														<td>:</td>
														<td>
															<input style="cursor: pointer;" type="radio" name="mondok" id="mondok" onclick="cek_pondok()">Ya
															&nbsp;&nbsp;&nbsp;
															<input style="cursor: pointer;" id="mondok" onclick="cek_pondok()" type="radio" name="mondok">Tidak
														</td>
													</tr>

													<tr>
														<td>Nama Ponpes</td>
														<td>:</td>
														<td>
															<input style="font-family:'Arial';font-size:13px;padding:5px 10px 5px 10px;border: 3px solid #aaa;"  type="text" name="nama_ponpes" required="required" placeholder="Nama Ponpes Anda" class="list_pondok">
															<i style="color:red;">*</i>
														</td>
													</tr>

													<tr>
														<td>Alamat Ponpes</td>
														<td>:</td>
														<td>
															<textarea style="border:3px solid #aaa;padding:5px 24px 25px 5px; font-size: 13px; font-family: 'Arial';" type="text" name="alamat_ponpes" placeholder="Alamat Ponpes Anda" required="required" class="list_pondok"></textarea>
															<i style="color:red;">*</i>
														</td>
													</tr>

													<tr>
														<td>Provinsi Ponpes</td>
														<td>:</td>
														<td>
															<select style="border: 3px solid #aaa; padding: 5px 63px 5px 5px; font-size: 13px; " required="required" class="list_pondok" name="provinsi_ponpes">
															<option value="">-Pilih SalahSatu-</option>
															</select>
															<i style="color:red;">*</i>
														</td>
													</tr>

													<tr>
														<td>Kota Ponpes</td>
														<td>:</td>
														<td>
															<select class="list_pondok" style="border: 3px solid #aaa; padding: 5px 63px 5px 5px; font-size: 13px; " required="required" name="kota_ponpes">
															<option value="">-Pilih SalahSatu-</option>
															</select>
															<i style="color:red;">*</i>
														</td>
													</tr>

													<tr>
														<td>Kode Pos Ponpes</td>
														<td>:</td>
														<td>
															<input class="list_pondok" style="font-family:'Arial';font-size:13px;padding:5px 10px 5px 10px;border: 3px solid #aaa; margin-right: 10px;"  type="text" name="kode_pos_ponpes" placeholder="Kode Pos Ponpes Anda">
														</td>
													</tr>

													<tr>
														<td>Lama Belajar</td>
														<td>:</td>
														<td>
															<input class="list_pondok" style="font-family:'Arial';font-size:13px;padding:5px 10px 5px 10px;border: 3px solid #aaa; margin-left: 45px;"  type="number" name="lama_belajar" min="0" placeholder="Lama Belajar">&nbsp;&nbsp;Tahun
															<i style="color:red;">*</i>
														</td>
													</tr>	
												</table>
											</div>

											<hr style="height:5px;" color="#073763">
										</div>

										<!--button Simpan-->
										<div id="button-all">
											<button class="btn btn-success" style="margin-right:20px; " href="" type="submit">
											<i class="fa fa-check-circle-o"></i>
												Simpan
											</button>
										</div>
										<!--End button Simpan-->
									</div>
									<!--End Data Pesantren-->
								</div>

								<div class="clear"></div>

								<div class="tab-pane" id="tab7">
									<!--Keterampilan-->
									<div class="text-center mb-4">
										<div class="col-md-12">
											<div id="keterampilan">
												<h2><b>Keterampilan</b></h2>
												<hr style="height:5px;" color="#073763">
											</div>
										</div>
									</div>

									<div class="col-md-12">
										<div class="text-center mb-4">
											<div class="table-responsive">
												<table class="table">
													<tr>
														<td>Kemampuan Bahasa Arab</td>
														<td>:</td>
														<td>
															<select style="border: 3px solid #aaa; padding: 5px 63px 5px 5px; font-size: 13px; " required="required" name="kemampuan_bahasa_arab">
															<option value="">-Pilih SalahSatu-</option>
															<option value="Tidak Bisa">Tidak Bisa</option>
															<option value="Pasif">Pasif</option>
															<option value="Mahir">Mahir</option>
															<option value="Aktif">Aktif</option>
															</select>
															<i style="color:red;">*</i>
														</td>
													</tr>	

													<tr>
														<td>Kemampuan Bahasa Inggris</td>
														<td>:</td>
														<td>
															<select style="border: 3px solid #aaa; padding: 5px 63px 5px 5px; font-size: 13px; " required="required" name="kemampuan_bahasa_inggris">
															<option value="">-Pilih SalahSatu-</option>
															<option value="Tidak Bisa">Tidak Bisa</option>
															<option value="Pasif">Pasif</option>
															<option value="Mahir">Mahir</option>
															<option value="Aktif">Aktif</option>
															</select>
															<i style="color:red;">*</i>
														</td>
													</tr>

													<tr>
														<td>Kemampuan Komputer</td>
														<td>:</td>
														<td>
															<select style="border: 3px solid #aaa; padding: 5px 63px 5px 5px; font-size: 13px; " required="required" name="kemampuan_komputer">
															<option value="">-Pilih SalahSatu-</option>
															<option value="Tidak Bisa">Tidak Bisa</option>
															<option value="Bisa">Bisa</option>
															</select>
															<i style="color:red;">*</i>
														</td>
													</tr>					
												</table>
											</div>

											<hr style="height:5px;" color="#073763">
										</div>

										<!--button Simpan-->
										<div id="button-all">
											<button class="btn btn-success" style="margin-right:20px; " href="" type="submit">
											<i class="fa fa-check-circle-o"></i>
												Simpan
											</button>
										</div>
										<!--End button Simpan-->				
									</div>
									<!--End Keterampilan-->
								</div>

								<div class="clear"></div>

								<div class="tab-pane" id="tab8">
									<!--Persyaratan Dokumen-->
									<div class="text-center mb-4">
										<div class="col-md-12">
											<div id="persyaratan-dokumen">
												<h2><b>Persyaratan Dokumen</b></h2>
												<hr style="height:5px;" color="#073763">
											</div>
										</div>
									</div>

									<div class="col-md-12">
										<div class="text-center mb-4">
											<div class="table-responsive">
												<table class="table">
													<tr>
														<td>Kartu Tes Pendaftaran Jalur UM-PTKIN</td>
														<td>:</td>
														<td>
															<select style="border: 3px solid #aaa; padding: 5px 63px 5px 5px; font-size: 13px; " required="required" name="kartu_tes">
															<option value="">-Pilih SalahSatu-</option>
															<option value="ADA">ADA</option>
															<option value="TIDAK ADA">TIDAK ADA</option>
															</select>
															<i style="color:red;">*</i>
														</td>
													</tr>

													<tr>
														<td>Formulir Pendaftaran Bidik Misi yang telah diisi</td>
														<td>:</td>
														<td>
															<select style="border: 3px solid #aaa; padding: 5px 63px 5px 5px; font-size: 13px; " required="required" name="formulir_pendaftaran">
															<option value="">-Pilih SalahSatu-</option>
															<option value="ADA">ADA</option>
															<option value="TIDAK ADA">TIDAK ADA</option>
															</select>
															<i style="color:red;">*</i>
														</td>
													</tr>

													<tr>
														<td>Surat Keterangan Lulus dari Kepala Sekolah</td>
														<td>:</td>
														<td>
															<select style="border: 3px solid #aaa; padding: 5px 63px 5px 5px; font-size: 13px; " required="required" name="formulir_pendaftaran">
															<option value="">-Pilih SalahSatu-</option>
															<option value="ADA">ADA</option>
															<option value="TIDAK ADA">TIDAK ADA</option>
															</select>
															<i style="color:red;">*</i>
														</td>
													</tr>

													<tr>
														<td>Fotocopy Raport Semester 1-6 yang dilegalisir Kepala Sekolah</td>
														<td>:</td>
														<td>
															<select style="border: 3px solid #aaa; padding: 5px 63px 5px 5px; font-size: 13px; " required="required" name="raport_semester">
															<option value="">-Pilih SalahSatu-</option>
															<option value="ADA">ADA</option>
															<option value="TIDAK ADA">TIDAK ADA</option>
															</select>
															<i style="color:red;">*</i>
														</td>
													</tr>

													<tr>
														<td>Fotocopy Ijazah yang diligalisir Kepala Sekolah</td>
														<td>:</td>
														<td>
															<select style="border: 3px solid #aaa; padding: 5px 63px 5px 5px; font-size: 13px; " required="required" name="ijazah_legalisir">
															<option value="">-Pilih SalahSatu-</option>
															<option value="ADA">ADA</option>
															<option value="TIDAK ADA">TIDAK ADA</option>
															</select>
															<i style="color:red;">*</i>
														</td>
													</tr>

													<tr>
														<td>Fotocopy Nilai Ujian Akhir Nasional yang dilegalisir Kepala Sekolah</td>
														<td>:</td>
														<td>
															<select style="border: 3px solid #aaa; padding: 5px 63px 5px 5px; font-size: 13px; " required="required" name="fotocopy_nilai_ujian_un">
															<option value="">-Pilih SalahSatu-</option>
															<option value="ADA">ADA</option>
															<option value="TIDAK ADA">TIDAK ADA</option>
															</select>
															<i style="color:red;">*</i>
														</td>
													</tr>

													<tr>
														<td>Surat Keterangan Prestasi dan Bukti Pendukung Prestasi yang dilegalisir Kepala Sekolah</td>
														<td>:</td>
														<td>
															<select style="border: 3px solid #aaa; padding: 5px 63px 5px 5px; font-size: 13px; " required="required" name="keterangan_prestasi">
															<option value="">-Pilih SalahSatu-</option>
															<option value="ADA">ADA</option>
															<option value="TIDAK ADA">TIDAK ADA</option>
															</select>
															<i style="color:red;">*</i>
														</td>
													</tr>

													<tr>
														<td>Surat Keterangan Penghasilan Ortu/Wali atau Surat Keterangan Tidak Mampu yang dikeluarkan Kepala Desa/Dusun/Instansi/Tokoh Masyarakat</td>
														<td>:</td>
														<td>
															<select style="border: 3px solid #aaa; padding: 5px 63px 5px 5px; font-size: 13px; " required="required" name="keterangan_penghasilan_ortu_wali">
															<option value="">-Pilih SalahSatu-</option>
															<option value="ADA">ADA</option>
															<option value="TIDAK ADA">TIDAK ADA</option>
															</select>
															<i style="color:red;">*</i>
														</td>
													</tr>

													<tr>
														<td>Fotocopy Kartu Keluarga atau Surat Keterangan Susunan Keluarga</td>
														<td>:</td>
														<td>
															<select style="border: 3px solid #aaa; padding: 5px 63px 5px 5px; font-size: 13px; " required="required" name="fotocopy_kk">
															<option value="">-Pilih SalahSatu-</option>
															<option value="ADA">ADA</option>
															<option value="TIDAK ADA">TIDAK ADA</option>
															</select>
															<i style="color:red;">*</i>
														</td>
													</tr>

													<tr>
														<td>Fotocopy Rekening Listrik Bulan Terakhir (bila tersedia listrik)</td>
														<td>:</td>
														<td>
															<select style="border: 3px solid #aaa; padding: 5px 63px 5px 5px; font-size: 13px; " required="required" name="fotocopy_rek">
															<option value="">-Pilih SalahSatu-</option>
															<option value="ADA">ADA</option>
															<option value="TIDAK ADA">TIDAK ADA</option>
															</select>
															<i style="color:red;">*</i>
														</td>
													</tr>

													<tr>
														<td>Fotocopy Bukti Pembayaran PBB Tahun Terakhir</td>
														<td>:</td>
														<td>
															<select style="border: 3px solid #aaa; padding: 5px 63px 5px 5px; font-size: 13px; " required="required" name="fotocopy_bukti_pembayaran_pbb">
															<option value="">-Pilih SalahSatu-</option>
															<option value="ADA">ADA</option>
															<option value="TIDAK ADA">TIDAK ADA</option>
															</select>
															<i style="color:red;">*</i>
														</td>
													</tr>

													<tr>
														<td>Melengkapi data foto rumah dari 3(tiga) sudut</td>
														<td>:</td>
														<td>
															<select style="border: 3px solid #aaa; padding: 5px 63px 5px 5px; font-size: 13px; " required="required" name="data_foto_rumah">
															<option value="">-Pilih SalahSatu-</option>
															<option value="ADA">ADA</option>
															<option value="TIDAK ADA">TIDAK ADA</option>
															</select>
															<i style="color:red;">*</i>
														</td>
													</tr>
												</table>
											</div>
										
											<hr style="height:5px;" color="#073763">
										</div>

										<!--button Simpan-->
										<div id="button-all">
											<button class="btn btn-success" style="margin-right:20px; " href="" type="submit">
											<i class="fa fa-check-circle-o"></i>
												Simpan
											</button>
										</div>
										<!--End button Simpan-->
									</div>
									<!--End Persyaratan Dokumen-->
								</div>

								<div class="clear"></div>

								<div class="tab-pane" id="tab9">
									<!--Upload Dokumen Pendukung-->
									<div class="text-center mb-4">
										<div class="col-md-12">
											<div id="upload-dokumen-pendukung">
												<h2><b>Upload Dokumen Pendukung</b></h2>
												<hr style="height:5px;" color="#073763">
											</div>

											<div class="alert alert-info">
												<p>Keterangan</p>
												<p>-----------------</p>
												<p>Maksimal Foto 1 MB</p>
												<p>Format Foto : JPG, JPEG, atau PNG</p>
												<p>Contoh Format nama file : nama_FotoBagianKanan</p>
												<p>Contoh Format nama file : nama_FotoBagianKiri</p>
												<p>Contoh Format nama file : nama_FotoPBB</p>
												<p>Contoh Format nama file : nama_FotoRekListrik</p>
											</div>
										</div>
									</div>

									<div class="col-md-12">
										<div class="text-center mb-4">
											<div class="table-responsive">
												<table class="table">
													<tr>
														<td>Foto Rumah Bagian Depan</td>
														<td>:</td>
														<td><input type="file" name="rumah_bagian_depan" required="required"></td>
													</tr>

													<tr>
														<td>Foto Rumah Bagian Samping Kiri</td>
														<td>:</td>
														<td><input type="file" name="rumah_bagian_kiri" required="required"></td>
													</tr>

													<tr>
														<td>Foto Rumah Bagian Kanan</td>
														<td>:</td>
														<td><input type="file" name="rumah_bagian_kanan" required="required"></td>
													</tr>

													<tr>
														<td>Foto PBB Tahun Terakhir</td>
														<td>:</td>
														<td><input type="file" name="pbb_tahun_terakhir"required="required"></td>
													</tr>

													<tr>
														<td>Foto Rekening Listrik</td>
														<td>:</td>
														<td><input type="file" name="rek_listrik"></td>
													</tr>
												</table>
											</div>

											<hr style="height:5px;" color="#073763">
										</div>

										<!--button Simpan-->
										<div id="button-all">
											<button class="btn btn-success" style="margin-right:20px; " href="" type="submit">
											<i class="fa fa-check-circle-o"></i>
												Simpan
											</button>
										</div>
										<!--End button Simpan-->
									</div>
									<!--End Upload Dokumen Pendukung-->
								</div>

								<div class="clear"></div>

								<div class="tab-pane" id="tab10">
									<!--Pilih Jadwal Verifikasi-->
									<div class="text-center mb-4">
										<div class="col-md-12">
											<div id="pilih-jadwal">
												<h2><b>Pilih Jadwal Verifikasi</b></h2>
												<hr style="height:5px;" color="#073763">
											</div>

											<div class="alert alert-info">
												<p>Keterangan</p>
												<p>-----------------</p>
												<p>Silahkan Pilih Jadwal Verifikasi</p>
											</div>
										</div>
									</div>
									<!--End Pilih Jadwal Verifikasi-->
								</div>								

								<!--ul class="pager wizard">
									<li class="previous first" style="display:none;"><a href="#">First</a></li>

									<li class="previous"><a href="#">Previous</a></li>

									<li class="next last" style="display:none;"><a href="#">Last</a></li>
								
							  		<li class="next"><a href="#">Next</a></li>
								</ul-->

								<!--Button Next and Previous-->
								<div id="button-all">
									<a class="btn btn-info" href="#">&laquo; Kembali
									</a>

									<a class="btn btn-info" href="#">Lanjut &raquo;
									</a>
								</div>
								<!--End Button Next and Previous-->
								
								<div class="clear"></div>
							</div>
						</div>
					</section>
					<!--End Progress-->
				</form>
				</div>
			</div>
		</div>

		<script type="text/javascript">
			$(document).ready(function(){
            
            // Toolbar extra buttons
            var btnFinish = $('<button></button>').text('Finish')
                                            .attr('id','btn-finish')
                                             .addClass('btn btn-info')
                                             .on('click', function(){ 
                                                    
                                                });
            var btnCancel = $('<button></button>').text('Cancel')
                                             .addClass('btn btn-danger')
                                             .on('click', function(){ 
                                                    $('#smartwizard').smartWizard("reset");  
                                                });                         
            
            
            
            // Smart Wizard
            $('#smartwizard').smartWizard({ 
                    selected: 0, 
                    theme: 'dots',
                    transitionEffect:'fade',
                    toolbarSettings: {toolbarPosition: 'bottom',
                                      toolbarExtraButtons: [btnFinish, btnCancel]
                                    },
                    anchorSettings: {
                                markDoneStep: true, // add done css
                                markAllPreviousStepsAsDone: true, // When a step selected by url hash, all previous steps are marked done
                                removeDoneStepOnNavigateBack: true, // While navigate back done step after active step will be cleared
                                enableAnchorOnDoneStep: true // Enable/Disable the done steps navigation
                            }
                 });
            
            $("#btn-finish").addClass('disabled');
             $("#smartwizard").on("showStep", function(e, anchorObject, stepNumber, stepDirection, stepPosition) {
                   //alert("You are on step "+stepNumber+" now");
                   if(stepPosition == 'first'){
                       $("#prev-btn").addClass('disabled');
                       $("#btn-finish").addClass('disabled');
                   }else if(stepPosition == 'final'){
                       $("#next-btn").addClass('disabled');
                       $("#btn-finish").removeClass('disabled');
                   }else{
                       $("#prev-btn").removeClass('disabled');
                       $("#next-btn").removeClass('disabled');
                       $("#btn-finish").addClass('disabled');
                   }
                });                               
            
        });
		</script>
	
		<div class="clear"></div>

		<?php
			//load footer
			$this->load->view('project_bidikmisi/footer/footer');
		?>
	</body>
</html>