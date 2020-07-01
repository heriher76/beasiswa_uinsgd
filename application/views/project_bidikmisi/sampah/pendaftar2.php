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
					document.getElementById("keterangan_pns").style.position = "relative";
					document.getElementById("keterangan_pns").style.left = "350px";
				}else if(keterangan=="2"){
					document.getElementById("keterangan_pns").style.display = "none";
					document.getElementById("keterangan_tukang").style.display = "none";
					document.getElementById("keterangan_wiraswasta").style.display = "block";
					document.getElementById("keterangan_wiraswasta").style.position = "relative";
					document.getElementById("keterangan_wiraswasta").style.left = "350px";
				}else if(keterangan=="3"){
					document.getElementById("keterangan_pns").style.display = "none";
					document.getElementById("keterangan_wiraswasta").style.display = "none";
					document.getElementById("keterangan_tukang").style.display = "block";
					document.getElementById("keterangan_tukang").style.position = "relative";
					document.getElementById("keterangan_tukang").style.left = "350px";
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
					document.getElementById("keterangan_pns2").style.position = "relative";
					document.getElementById("keterangan_pns2").style.left = "350px";
				}else if(keterangan=="Wiraswasta"){
					document.getElementById("keterangan_pns2").style.display = "none";
					document.getElementById("keterangan_wiraswasta2").style.display = "block";
					document.getElementById("keterangan_wiraswasta2").style.position = "relative";
					document.getElementById("keterangan_wiraswasta2").style.left = "350px";
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

			function validateForm() {
			    var x = document.forms["myForms"]["foto"].value;
			    if (x == "") {
			        alert("foto must be filled out");
			        return false;
			    }
			}
		</script>

		<div class="container">
			<div class="row">
				<div class="wrapper">
					<form action="<?=base_url('C_mhs/update_bidim'); ?>" onsubmit="return validateForm(this)" id="formID" role="form" name="myForm" method="POST" accept-charset="utf-8">
					<!--Progress-->
					<section>
						<div id="smartwizard">
							<ul>
								<li><a style="font-size: 13px;" href="#step-1">Tahap 1<br/><small>Upload Foto</small></a></li>
								<li><a style="font-size: 13px;" href="#step-2">Tahap 2<br/><small>Identitas Diri</small></a></li>
								<li><a style="font-size: 13px;" href="#step-3">Tahap 3<br/><small>Data Ortu</small></a></li>
								<li><a style="font-size: 13px;" href="#step-4">Tahap 4<br/><small>Data Kondisi Rumah</small></a></li>
								<li><a style="font-size: 13px;" href="#step-5">Tahap 5<br/><small>Data Sekolah</small></a></li>
								<li><a style="font-size: 13px;" href="#step-6">Tahap 6<br/><small>Data Pesantren</small></a></li>
								<li><a style="font-size: 13px;" href="#step-7">Tahap 7<br/><small>Keterampilan</small></a></li>
								<li><a style="font-size: 13px;" href="#step-8">Tahap 8<br/><small>Persyaratan Dokumen</small></a></li>
								<li><a style="font-size: 13px;" href="#step-9">Tahap 9<br/><small>Upload Dokumen Pendukung</small></a></li>
								<li><a style="font-size: 13px;" href="#step-10">Tahap 10<br/><small>Pilih Jadwal Verifikasi</small></a></li>
							</ul>

							<div>
								<div id="step-1">
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
										<div class="form-group">
										<center>
											<fieldset>
											<div id="input-foto">
												<input type="file" name="foto" required="required">
											</div>
											</fieldset>
										</center>
										</div>

										<div class="text-center mb-4">
											<div id="aturan">
												<p>*Maks Foto 1 MB</p>
												<p>*Format Foto : JPG, JPEG, dan PNG</p>
												<p>*Foto Harus Resmi</p>
											</div>
										</div>

										<hr style="height: 5px;" color="#073763">
									</div>
									<!--End Upload Foto-->

									<div class="clear"></div>

									<!--button Simpan-->
									<div id="button-all">
										<button class="btn btn-success" id="submit_simpan" style="margin-right:20px; " value="Simpan" type="submit">
										<i class="fa fa-check-circle-o"></i>
											Simpan
										</button>
									</div>
									<!--End button Simpan-->

									<div class="clear"></div>	
								</div>

								<div id="step-2">
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
													<tr class="form-group">
														<td style="color: red;">Tempat Lahir :</td>
														
														<td><input class="form-control" style="font-family:'Arial';font-size:13px;" type="text" placeholder="Tempat Lahir Anda" name="tempat_lahir" required="required"></td>
													</tr>

													<tr class="form-group">
														<td style="color: red;">Status Pernikahan :</td>
														<td><select class="form-control" style=" font-size: 13px; font-family:'Arial';" required="required" name="status_pernikahan">
															<option value="">-Pilih SalahSatu-</option>
															<option value="Menikah">Menikah</option>
															<option value="Belum Menikah">Belum Menikah</option>
														</select></td>
													</tr>

													<tr class="form-group">
														<td style="color: red;">Asal Provinsi :</td>
														<td><select class="form-control" style=" font-family: 'Arial'; font-size: 13px; " required="required" name="asal_provinsi" id="provinsi">
															<option value="">-Pilih SalahSatu-</option>
															<?php
																//melakukan looping dari fungsi index di controller C_mhs
																foreach($propinsi as $data){
																	echo "<option value='".$data->id_propinsi."'>".$data->nama_propinsi."</option>";
																}
															?>
														</select></td>
													</tr>

													<tr class="form-group">
														<td style="color: red;">Asal Kab/Kota :</td>
														<td>
															<select style="font-family: 'Arial'; font-size: 13px; " required="required" class="form-control" name="asal_kab_kota" id="kota">
															<option value="">-Pilih SalahSatu-</option>
															</select>
															<div id="loading">
																<img src="<?=base_url('assets/img/loading.gif'); ?>"><small>Loading..</small>
															</div>
														</td>
													</tr>

													<tr class="form-group">
														<td style="color: red;">No Telp/Hp :</td>
														<td><input class="form-control" style="font-family:'Arial';font-size:13px;" type="text" placeholder="Contoh : 0882-2233-8832" name="no_telp" required="required"></td>
													</tr>

													<tr class="form-group">
														<td style="color: red;">Email :</td>
														<td><input class="form-control" style="font-family:'Arial';font-size:13px;" type="email" placeholder="Email Anda" name="email" required="required"></td>
													</tr>

													<tr class="form-group">
														<td style="color: red;">Alamat :</td>
														<td><textarea class="form-control" style="font-size: 13px; font-family: 'Arial';" type="text" name="alamat" placeholder="Alamat Anda" required="required"></textarea></td>
													</tr>

													<tr class="form-group">
														<td style="color: red;">Kode Pos Alamat Anda :</td>
														<td><input class="form-control" style="font-family:'Arial';font-size:13px;" type="text" placeholder="Kode Pos Alamat Anda" name="kode_pos" required="required"></td>
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

								<div id="step-3">
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
													<tr class="form-group">
														<td>Nama Ayah : </td>
														<td>
															<input class="form-control" style="font-family:'Arial';font-size:13px;" type="text" placeholder="Nama Ayah Anda" name="nama_ayah" required="required">
															<td><i style="color:red;">*</i></td>
															<td><input type="checkbox" value="40" name="almarhum">Almarhum</td>
														</td>
													</tr>

													<tr class="form-group">
														<td>Nama Ibu :</td>
														<td>
															<input class="form-control" style="font-family:'Arial';font-size:13px;" type="text" placeholder="Nama Ibu Anda" name="nama_ibu" required="required">
															<td><i style="color:red;">*</i></td>
															<td><input type="checkbox" value="40" name="almarhum">Almarhumah</td>
														</td>
													</tr>

													<tr class="form-group">
														<td>Alamat Ortu :</td>
														<td>
															<textarea class="form-control" style="font-size: 13px; font-family: 'Arial';" type="text" name="alamat_ortu" placeholder="Alamat Ortu Anda" required="required"></textarea>
															<td><i style="color:red;">*</i></td>
															<td></td>
														</td>
													</tr>

													<tr class="form-group">
														<td>Provinsi Ortu :</td>
														<td>
															<select class="form-control" style="font-size: 13px; font-family: 'Arial';" required="required" name="asal_provinsi_ortu" id="provinsi2">
																<option value="">-Pilih SalahSatu-</option>
																<?php
																//melakukan looping dari fungsi index di controller C_mhs
																foreach($propinsi as $data){
																	echo "<option value='".$data->id_propinsi."'>".$data->nama_propinsi."</option>";
																}
															?>
															</select>
															<td><i style="color:red;">*</i></td>
															<td></td>
														</td>
													</tr>

													<tr class="form-group">
														<td>Kab/Kota Ortu :</td>
														<td>
															<select class="form-control" style="font-family: 'Arial'; font-size: 13px; " required="required" name="kab_kota_ortu" id="kota2">
																<option value="">-Pilih SalahSatu-</option>
															</select>
															<div id="loading2">
																<img src="<?=base_url('assets/img/loading.gif'); ?>"><small>Loading..</small>
															</div>
															<td><i style="color:red;">*</i></td>
															<td></td>
														</td>
													</tr>

													<tr class="form-group">
														<td>Kode Pos Ortu :</td>
														<td>
															<input class="form-control" style="font-family:'Arial';font-size:13px;"  type="text" name="kode_pos_ortu" placeholder="Kode Pos Ortu Anda">
															<td></td>
															<td></td>
														</td>
													</tr>

													<tr class="form-group">
														<td>No Telp/Hp Ortu :</td>
														<td>
															<input class="form-control" style="font-family:'Arial';font-size:13px;"  type="text" name="no_telp_ortu" required="required" placeholder="Contoh : 0883-2239-3343">
															<td><i style="color:red;">*</i></td>
															<td></td>
														</td>
													</tr>

													<tr class="form-group">
														<td>Pekerjaan Ayah :</td>
														<td>
															<select class="form-control" id="pekerjaan_ayah" onchange="proses()" style="font-family: 'Arial'; font-size: 13px; " required="required" name="pekerjaan_ayah">
																<option value="">-Pilih SalahSatu-</option>
																<option value="1">PNS/TNI/POLRI</option>
																<option value="2">Wiraswasta</option>
																<option value="3">Tukang</option>
																<option value="4">Buruh Tani/Petani</option>
															</select>
															<td><i style="color:red;">*</i></td>
															<td></td>
														</td>
													</tr>

													<tr id="keterangan_pns" class="form-group" style="display: none;">
														<td>Keterangan PNS/TNI/POLRI :</td>
														<td>
															<textarea class="form-control" style="font-size: 13px; font-family: 'Arial';" type="text" name="pns_tni_polri_ayah" placeholder="Keterangan PNS/TNI/POLRI Ayah"></textarea>
															<td></td>
															<td></td>
														</td>
													</tr>

													<tr class="form-group" id="keterangan_wiraswasta" style="display: none;">
														<td>Keterangan Wiraswasta :</td>
														<td>
															<textarea class="form-control" style="font-size: 13px; font-family: 'Arial';" type="text" name="wiraswasta_ayah" placeholder="Keterangan Wiraswasta Ayah"></textarea>
															<td></td>
															<td></td>
														</td>
													</tr>

													<tr id="keterangan_tukang" class="form-group" style="display: none;">
														<td>Keterangan Tukang :</td>
														<td>
															<textarea class="form-control" style=" font-size:13px;font-family: 'Arial';" type="text" name="tukang_ayah" placeholder="Keterangan Tukang Ayah"></textarea>
															<td></td>
															<td></td>
														</td>
													</tr>

													<tr class="form-group">
														<td>Pekerjaan Ibu :</td>
														<td>
															<select class="form-control" id="pekerjaan_ibu" onchange="proses2()" style="font-family:'Arial';font-size: 13px; " required="required" name="pekerjaan_ibu">
																<option value="">-Pilih SalahSatu-</option>
																<option value="PNS/TNI/POLRI">PNS/TNI/POLRI</option>
																<option value="Wiraswasta">Wiraswasta</option>
																<option value="Ibu Rumah Tangga">Ibu Rumah Tangga</option>
																<option value="Buruh Tani/Petani">Buruh Tani/Petani</option>
															</select>
															<td><i style="color:red;">*</i></td>
															<td></td>
														</td>
													</tr>

													<tr class="form-group" id="keterangan_pns2" style="display: none;">
														<td>Keterangan PNS/TNI/POLRI :</td>
														<td>
															<textarea class="form-control" style="font-size: 13px; font-family: 'Arial';" type="text" name="pns_tni_polri_ibu" placeholder="Keterangan PNS/TNI/POLRI Ibu"></textarea>
															<td></td>
															<td></td>
														</td>
													</tr>

													<tr id="keterangan_wiraswasta2" class="form-group" style="display: none;">
														<td>Keterangan Wiraswasta :</td>
														<td>
															<textarea class="form-control" style="font-size: 13px; font-family: 'Arial';" type="text" name="wiraswasta_ibu" placeholder="Keterangan Wiraswasta Ibu"></textarea>
															<td></td>
															<td></td>
														</td>
													</tr>


													<tr class="form-group">
														<td>Pendidikan Ayah :</td>
														<td>
															<select class="form-control" style="font-family:'Arial' ; font-size: 13px; " required="required" name="pendidikan_ayah">
																<option value="">-Pilih SalahSatu-</option>
																<option value="1">>Sarjana</option>
																<option value="2">SLTA/Sederajat</option>
																<option value="3">SLTP/Sederajat</option>
																<option value="4">SD/Tidak Sekolah</option>
															</select>
															<td><i style="color:red;">*</i></td>
															<td></td>
														</td>
													</tr>

													<tr class="form-group">
														<td>Pendidikan Ibu :</td>
														<td>
															<select style="font-family: 'Arial'; font-size: 13px; " required="required" name="pendidikan_ibu" class="form-control">
																<option value="">-Pilih SalahSatu-</option>
																<option value=">Sarjana">>Sarjana</option>
																<option value="SLTA/Sederajat">SLTA/Sederajat</option>
																<option value="SLTP/Sederajat">SLTP/Sederajat</option>
																<option value="SD/Tidak Sekolah">SD/Tidak Sekolah</option>
															</select>
															<td><i style="color:red;">*</i></td>
															<td></td>
														</td>
													</tr>

													<tr class="form-group">
														<td>Penghasilan Ayah :</td>
														<td>
															<select class="form-control" style="font-family: 'Arial'; font-size: 13px; " required="required" name="penghasilan_ayah">
																<option value="">-Pilih SalahSatu-</option>
																<option value="1">1.001.000 s/d 1.200.000</option>
																<option value="2">751.000 s/d 1.000.000</option>
																<option value="3">501.000 s/d 750.000</option>
																<option value="4">< 500.000</option>
															</select>
															<td><i style="color:red;">*</i></td>
															<td></td>
														</td>
													</tr>

													<tr class="form-group">
														<td>Nominal Penghasilan Ayah :</td>
														<td>
															<input class="form-control" style="font-family:'Arial';font-size:13px;" type="number" min="0" name="nominal_penghasilan_ayah" placeholder="Contoh : 1000000">
														</td>
														<td></td>
														<td></td>
													</tr>

													<tr class="form-group">
														<td>Penghasilan Ibu :</td>
														<td>
															<select class="form-control" style="font-family: 'Arial'; font-size: 13px;" required="required" name="penghasilan_ibu">
																<option value="">-Pilih SalahSatu-</option>
																<option value="1">1.001.000 s/d 1.200.000</option>
																<option value="2">751.000 s/d 1.000.000</option>
																<option value="3">501.000 s/d 750.000</option>
																<option value="4">< 500.000</option>
															</select>
															<td><i style="color:red;">*</i></td>
															<td></td>
														</td>
													</tr>

													<tr class="form-group">
														<td>Nominal Penghasilan Ibu :</td>
														<td>
															<input class="form-control" style="font-family:'Arial';font-size:13px;" type="number" min="0" name="nominal_penghasilan_ibu" placeholder="Contoh : 1000000">
														</td>
														<td></td>
														<td></td>
													</tr>

													<tr class="form-group">
														<td>Jumlah Saudara Kandung masih dalam tanggungan Ortu :</td>
														<td>
															<select class="form-control" style="font-family: 'Arial'; font-size: 13px; " required="required" name="saudara_kandung">
																<option value="">-Pilih SalahSatu-</option>
																<option value="1">< 3 Orang</option>
																<option value="2">4 - 6 Orang</option>
																<option value="3">7 - 8 Orang</option>
																<option value="4">> 8 Orang</option>
															</select>
															<td><i style="color:red;">*</i></td>
															<td></td>
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

								<div id="step-4">
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
													<tr class="form-group">
														<td>Luas Rumah :</td>
														<td>
															<select class="form-control" style="font-family: 'Arial'; font-size: 13px; " required="required" name="luas_rumah">
																<option value="">-Pilih SalahSatu-</option>
																<option value="1">> 120 Meter Persegi</option>
																<option value="2">81 - 120 Meter Persegi</option>
																<option value="3">41 - 80 Meter Persegi</option>
																<option value="4">< 40 Meter Persegi</option>
															</select>
															<td><i style="color:red;">*</i></td>
														</td>
													</tr>

													<tr class="form-group">
														<td>Pajak Bumi Bangunan (PBB) Pertahun :</td>
														<td>
															<select class="form-control" style="font-family: 'Arial'; font-size: 13px; " required="required" name="asal_provinsi_ortu">
																<option value="">-Pilih SalahSatu-</option>
																<option value="1">> 100.000</option>
																<option value="2">76.000 - 100.000</option>
																<option value="3">26.000 - 75.000</option>
																<option value="4">< 25.000</option>
															</select>
															<td><i style="color:red;">*</i></td>
														</td>
													</tr>

													<tr class="form-group">
														<td>Rekening Listrik Perbulan :</td>
														<td>
															<select class="form-control" style="font-family: 'Arial'; font-size: 13px; " required="required" name="asal_provinsi_ortu">
																<option value="">-Pilih SalahSatu-</option>
																<option value="1">> 100.000</option>
																<option value="2">76.000 - 100.000</option>
																<option value="3">26.000 - 75.000</option>
																<option value="4">< 25.000</option>
															</select>
															<td><i style="color:red;">*</i></td>
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

								<div id="step-5">
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
												<table class="table">					
													<tr class="form-group">
														<td>Alamat Sekolah :</td>
														<td>
															<textarea class="form-control" style=" font-size: 13px; font-family: 'Arial';" type="text" name="alamat_sekolah" placeholder="Alamat Sekolah Anda" required="required"></textarea>
															<td><i style="color:red;">*</i></td>
														</td>
													</tr>

													<tr class="form-group">
														<td>Provinsi Sekolah :</td>
														<td>
															<select class="form-control" style="font-family: 'Arial'; font-size: 13px; " required="required" name="provinsi_sekolah" id="provinsi3">
															<option value="">-Pilih SalahSatu-</option>
																<?php
																//melakukan looping dari fungsi index di controller C_mhs
																foreach($propinsi as $data){
																	echo "<option value='".$data->id_propinsi."'>".$data->nama_propinsi."</option>";
																}
															?>
															</select>
															<td><i style="color:red;">*</i></td>
														</td>
													</tr>

													<tr class="form-group">
														<td>Kab/Kota Sekolah :</td>
														<td>
															<select class="form-control" style="font-family: 'Arial'; font-size: 13px; " required="required" name="kab_kota_sekolah" id="kota3">
															<option value="">-Pilih SalahSatu-</option>
															</select>
															<div id="loading3">
																<img src="<?=base_url('assets/img/loading.gif'); ?>"><small>Loading..</small>
															</div>
															<td><i style="color:red;">*</i></td>
														</td>
													</tr>

													<tr class="form-group">
														<td>Nama Sekolah :</td>
														<td>
															<textarea class="form-control" style=" font-size: 13px; font-family: 'Arial';" type="text" name="nama_sekolah" placeholder="Nama Sekolah Anda" required="required"></textarea>
															<td><i style="color:red;">*</i></td>
														</td>
													</tr>

													<tr class="form-group">
														<td>Tahun Lulus :</td>
														<td>
															<select class="form-control" style="font-family: 'Arial'; font-size: 13px; " required="required" name="tahun_lulus">
															<option value="">-Pilih SalahSatu-</option>
															<option value="2018">2018</option>
															<option value="2019">2019</option>
															</select>
															<td><i style="color:red;">*</i></td>
														</td>
													</tr>

													<tr class="form-group">
														<td>Jurusan di Sekolah :</td>
														<td>
															<select class="form-control" style="font-family: 'Arial'; font-size: 13px; " required="required" name="jurusan_sekolah">
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
															<td><i style="color:red;">*</i></td>
														</td>
													</tr>

													<tr class="form-group">
														<td>Rerata Nilai UN :</td>
														<td>
															<select class="form-control" style="font-family: 'Arial'; font-size: 13px; " required="required" name="rerata_nilai_un">
															<option value="">-Pilih SalahSatu-</option>
															<option value="1">< 7.00</option>
															<option value="2">7.00 - 8.00</option>
															<option value="3">8.10 - 9.00</option>
															<option value="4">> 9.00</option>
															</select>
															<td><i style="color:red;">*</i></td>
														</td>
													</tr>

													<tr class="form-group">
														<td>Rerata Nilai Raport Sekolah :</td>
														<td>
															<select class="form-control" style="font-family:'Arial'; font-size: 13px; " required="required" name="rerata_nilai_raport">
															<option value="">-Pilih SalahSatu-</option>
															<option value="1">< 7.00</option>
															<option value="2">7.00 - 8.00</option>
															<option value="3">8.10 - 9.00</option>
															<option value="4">> 9.00</option>
															</select>
															<td><i style="color:red;">*</i></td>
														</td>
													</tr>	

													<tr class="form-group">
														<td>Prestasi Akademik Terbaik :</td>
														<td>
															<select class="form-control" style="font-family: 'Arial'; font-size: 13px;" required="required" name="prestasi_akademik">
															<option value="">-Pilih SalahSatu-</option>
															<option value="0">Tidak Ada Prestasi</option>
															<option value="1">Tingkat Lokal</option>
															<option value="2">Tingkat Regional</option>
															<option value="3">Tingkat Nasional</option>
															<option value="4">Tingkat Internasional</option>
															</select>
															<td><i style="color:red;">*</i></td>
														</td>
													</tr>

													<tr class="form-group">
														<td>Prestasi Non Akademik Terbaik :</td>
														<td>
															<select class="form-control" style=" font-size: 13px; font-family: 'Arial';" required="required" name="prestasi_non_akademik">
															<option value="">-Pilih SalahSatu-</option>
															<option value="0">Tidak Ada Prestasi</option>
															<option value="1">Tingkat Lokal</option>
															<option value="2">Tingkat Regional</option>
															<option value="3">Tingkat Nasional</option>
															<option value="4">Tingkat Internasional</option>
															</select>
															<td><i style="color:red;">*</i></td>
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

								<div id="step-6">
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
													<tr class="form-group">
														<td><p style="float: right;">Pernah Modok :</p></td>
														<td>
															<div style="margin-left: 135px;">
																<input style=" cursor: pointer;" type="radio" name="mondok" id="mondok" onclick="cek_pondok()">Ya
																&nbsp;&nbsp;&nbsp;
																<input style=" cursor: pointer;" id="mondok" onclick="cek_pondok()" type="radio" name="mondok">Tidak
															</div>
														</td>
														<td></td>
														<td></td>
													</tr>

													<tr class="form-group">
														<td><p style="float: right;">Nama Ponpes :</p></td>
														<td>
															<input style="width:350px; float:right; font-family:'Arial';font-size:13px;" class="form-control list_pondok"  type="text" name="nama_ponpes" required="required" placeholder="Nama Ponpes Anda">
															<td><i style="color:red;">*</i></td>
															<td></td>
														</td>
													</tr>

													<tr class="form-group">
														<td><p style="float: right;">Alamat Ponpes :</p></td>
														<td>
															<textarea class="form-control list_pondok" style="float:right; font-size: 13px; font-family: 'Arial'; width:350px;" type="text" name="alamat_ponpes" placeholder="Alamat Ponpes Anda" required="required"></textarea>
															<td><i style="color:red;">*</i></td>
															<td></td>
														</td>
													</tr>

													<tr class="form-group">
														<td><p style="float: right;">Provinsi Ponpes :</p></td>
														<td>
															<select class="form-control list_pondok" style="float:right; font-family:'Arial';  width:350px; font-size: 13px; " required="required" id="provinsi4" name="provinsi_ponpes">
															<option value="">-Pilih SalahSatu-</option>
															<?php
																//melakukan looping dari fungsi index di controller C_mhs
																foreach($propinsi as $data){
																	echo "<option value='".$data->id_propinsi."'>".$data->nama_propinsi."</option>";
																}
															?>
															</select>
															<td><i style="color:red;">*</i></td>
															<td></td>
														</td>
													</tr>

													<tr class="form-group">
														<td><p style="float: right;">Kota Ponpes :</p></td>
														<td>
															<select class="form-control list_pondok" style="float:right; font-family: 'Arial'; width:350px; font-size: 13px; " required="required" id="kota4" name="kota_ponpes">
															<option value="">-Pilih SalahSatu-</option>
															</select>
															<div id="loading4" style="margin-left: 250px;">
																<img src="<?=base_url('assets/img/loading.gif'); ?>"><small>Loading..</small>
															</div>
															<td><i style="color:red;">*</i></td>
															<td></td>
														</td>
													</tr>

													<tr class="form-group">
														<td><p style="float: right;">Kode Pos Ponpes :</p></td>
														<td>
															<input class="form-control list_pondok" style="float:right; font-family:'Arial'; width:350px;font-size:13px;" type="text" name="kode_pos_ponpes" placeholder="Kode Pos Ponpes Anda">
														</td>
														<td></td>
														<td></td>
													</tr>

													<tr class="form-group">
														<td><p style="float: right;">Lama Belajar :</p></td>
														<td>
															<input class="form-control list_pondok" style="float:right; width:350px; font-family:'Arial';font-size:13px;" type="number" name="lama_belajar" placeholder="Lama Belajar">
															<td style="position: relative; right:30px;">Tahun</td>
															<td><i style="color:red; position: relative; right:60px;">*</i></td>
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

								<div id="step-7">
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
													<tr class="form-group">
														<td>Kemampuan Bahasa Arab :</td>
														<td>
															<select class="form-control" style="font-family: 'Arial'; font-size: 13px; " required="required" name="kemampuan_bahasa_arab">
															<option value="">-Pilih SalahSatu-</option>
															<option value="Tidak Bisa">Tidak Bisa</option>
															<option value="Pasif">Pasif</option>
															<option value="Mahir">Mahir</option>
															<option value="Aktif">Aktif</option>
															</select>
															<td><i style="color:red;">*</i></td>
														</td>
													</tr>	

													<tr class="form-group">
														<td>Kemampuan Bahasa Inggris :</td>
														<td>
															<select class="form-control" style="font-family: 'Arial'; font-size: 13px; " required="required" name="kemampuan_bahasa_inggris">
															<option value="">-Pilih SalahSatu-</option>
															<option value="Tidak Bisa">Tidak Bisa</option>
															<option value="Pasif">Pasif</option>
															<option value="Mahir">Mahir</option>
															<option value="Aktif">Aktif</option>
															</select>
															<td><i style="color:red;">*</i></td>
														</td>
													</tr>

													<tr class="form-group">
														<td>Kemampuan Komputer</td>
														<td>
															<select class="form-control" style="font-family: 'Arial'; font-size: 13px; " required="required" name="kemampuan_komputer">
															<option value="">-Pilih SalahSatu-</option>
															<option value="Tidak Bisa">Tidak Bisa</option>
															<option value="Bisa">Bisa</option>
															</select>
															<td><i style="color:red;">*</i></td>
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

								<div id="step-8">
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
													<tr class="form-group">
														<td><p style="width:540px;">Kartu Tes Pendaftaran Jalur UM-PTKIN :</p></td>
														<td>
															<select class="form-control" style="font-family: 'Arial'; font-size: 13px; " required="required" name="kartu_tes">
															<option value="">-Pilih SalahSatu-</option>
															<option value="ADA">ADA</option>
															<option value="TIDAK ADA">TIDAK ADA</option>
															</select>
															<td><i style="color:red;">*</i></td>
														</td>
													</tr>

													<tr class="form-group">
														<td><p style="width: 584px;">Formulir Pendaftaran Bidik Misi yang telah diisi :</p></td>
														<td>
															<select class="form-control" style="font-family: 'Arial'; font-size: 13px; " required="required" name="formulir_pendaftaran">
															<option value="">-Pilih SalahSatu-</option>
															<option value="ADA">ADA</option>
															<option value="TIDAK ADA">TIDAK ADA</option>
															</select>
															<td><i style="color:red;">*</i></td>
														</td>
													</tr>

													<tr class="form-group">
														<td><p style="width:568px;">Surat Keterangan Lulus dari Kepala Sekolah :</p></td>
														<td>
															<select class="form-control" style="font-family: 'Arial'; font-size: 13px; " required="required" name="formulir_pendaftaran">
															<option value="">-Pilih SalahSatu-</option>
															<option value="ADA">ADA</option>
															<option value="TIDAK ADA">TIDAK ADA</option>
															</select>
															<td><i style="color:red;">*</i></td>
														</td>
													</tr>

													<tr class="form-group">
														<td><p style="width:680px;">Fotocopy Raport Semester 1-6 yang dilegalisir Kepala Sekolah :</p></td>
														<td>
															<select class="form-control" style="font-family: 'Arial'; font-size: 13px; " required="required" name="raport_semester">
															<option value="">-Pilih SalahSatu-</option>
															<option value="ADA">ADA</option>
															<option value="TIDAK ADA">TIDAK ADA</option>
															</select>
															<td><i style="color:red;">*</i></td>
														</td>
													</tr>

													<tr class="form-group">
														<td><p style="width:584px;">Fotocopy Ijazah yang diligalisir Kepala Sekolah :</p></td>
														<td>
															<select class="form-control" style="font-family:'Arial'; font-size: 13px; " required="required" name="ijazah_legalisir">
															<option value="">-Pilih SalahSatu-</option>
															<option value="ADA">ADA</option>
															<option value="TIDAK ADA">TIDAK ADA</option>
															</select>
															<td><i style="color:red;">*</i></td>
														</td>
													</tr>

													<tr class="form-group">
														<td><p style="width:705px;">Fotocopy Nilai Ujian Akhir Nasional yang dilegalisir Kepala Sekolah :</p></td>
														<td>
															<select class="form-control" style="font-family: 'Arial'; font-size: 13px; " required="required" name="fotocopy_nilai_ujian_un">
															<option value="">-Pilih SalahSatu-</option>
															<option value="ADA">ADA</option>
															<option value="TIDAK ADA">TIDAK ADA</option>
															</select>
															<td><i style="color:red;">*</i></td>
														</td>
													</tr>

													<tr class="form-group">
														<td><p style="width: 400px; float: left; margin-left:132px;">Surat Keterangan Prestasi dan Bukti Pendukung Prestasi yang dilegalisir Kepala Sekolah :</p></td>
														<td>
															<select class="form-control" style="font-family: 'Arial'; font-size: 13px; " required="required" name="keterangan_prestasi">
															<option value="">-Pilih SalahSatu-</option>
															<option value="ADA">ADA</option>
															<option value="TIDAK ADA">TIDAK ADA</option>
															</select>
															<td><i style="color:red;">*</i></td>
														</td>
													</tr>

													<tr class="form-group">
														<td><p style="width: 400px; float: left; margin-left:134px;">Surat Keterangan Penghasilan Ortu/Wali atau Surat Keterangan Tidak Mampu yang dikeluarkan Kepala Desa/Dusun/Instansi/Tokoh Masyarakat :</p></td>
														<td>
															<select class="form-control" style="font-family: 'Arial'; font-size: 13px; " required="required" name="keterangan_penghasilan_ortu_wali">
															<option value="">-Pilih SalahSatu-</option>
															<option value="ADA">ADA</option>
															<option value="TIDAK ADA">TIDAK ADA</option>
															</select>
															<td><i style="color:red;">*</i></td>
														</td>
													</tr>

													<tr class="form-group">
														<td><p style="width: 700px;">Fotocopy Kartu Keluarga atau Surat Keterangan Susunan Keluarga :</p></td>
														<td>
															<select class="form-control" style="font-family: 'Arial'; font-size: 13px; " required="required" name="fotocopy_kk">
															<option value="">-Pilih SalahSatu-</option>
															<option value="ADA">ADA</option>
															<option value="TIDAK ADA">TIDAK ADA</option>
															</select>
															<td><i style="color:red;">*</i></td>
														</td>
													</tr>

													<tr class="form-group">
														<td><p style="width: 660px;">Fotocopy Rekening Listrik Bulan Terakhir (bila tersedia listrik) :</p></td>
														<td>
															<select class="form-control" style="font-family: 'Arial'; font-size: 13px; " required="required" name="fotocopy_rek">
															<option value="">-Pilih SalahSatu-</option>
															<option value="ADA">ADA</option>
															<option value="TIDAK ADA">TIDAK ADA</option>
															</select>
															<td><i style="color:red;">*</i></td>
														</td>
													</tr>

													<tr class="form-group">
														<td><p style="width: 580px;">Fotocopy Bukti Pembayaran PBB Tahun Terakhir :</p></td>
														<td>
															<select class="form-control" style="font-family: 'Arial'; font-size: 13px; " required="required" name="fotocopy_bukti_pembayaran_pbb">
															<option value="">-Pilih SalahSatu-</option>
															<option value="ADA">ADA</option>
															<option value="TIDAK ADA">TIDAK ADA</option>
															</select>
															<td><i style="color:red;">*</i></td>
														</td>
													</tr>

													<tr class="form-group">
														<td><p style="width: 560px;">Melengkapi data foto rumah dari 3(tiga) sudut :</p></td>
														<td>
															<select class="form-control" style="font-family: 'Arial'; font-size: 13px; " required="required" name="data_foto_rumah">
															<option value="">-Pilih SalahSatu-</option>
															<option value="ADA">ADA</option>
															<option value="TIDAK ADA">TIDAK ADA</option>
															</select>
															<td><i style="color:red;">*</i></td>
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

								<div id="step-9">
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

								<div id="step-10">
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
								

								<div class="clear"></div>
								<div class="wizard-buttons">
				                    <button type="button" class="btn btn-previous">Previous</button>
				                    <button type="button" class="btn btn-next">Next</button>
				                </div>
							</div>
						</div>
					</section>
					<!--End Progress-->
				</form>
				</div>
			</div>
		</div>
	
		<div class="clear"></div>

		<?php
			//load footer
			$this->load->view('project_bidikmisi/footer/footer');
		?>
	</body>
</html>