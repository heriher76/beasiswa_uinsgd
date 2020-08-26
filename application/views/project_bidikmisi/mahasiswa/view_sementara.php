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
				          /*elems[i].style.backgroundColor = "#DCDCDC";
				          elems[i].disabled = true;
				          elems[i].required = false;*/
				          elems[i].style.display = "none";
				          elems[i].disabled = true;
				          elems[i].required = false;
				      }
				  } else {
				  	for(var i = 0; i < elems.length; i++) {
				          /*elems[i].style.backgroundColor = '#FFFFFF';
				          elems[i].disabled = false;
				          elems[i].required = true;*/
				          elems[i].style.display = "block";
				          elems[i].disabled = false;
				          elems[i].required = true;
				      }
				  }
				}
			//End cek pondok
		</script>

		<div class="container col-md-8">
			<br>
			<div class="row">
				<div class="panel group col-md-offset-1">
					<div class="alert alert-warning alert-dismissible" role="alert">
					  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					  <strong>Perhatian!</strong>
					  <div class="penting">
								<p>Silahkan Cek Kembali data yang telah anda masukan.</p>
							</div>

							<p>Jika anda sudah yakin dengan data yang telah dimasukan, silahkan klik tombol VERIFIKASI di bagian paling bawah Website</p>
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
							<a href="<?=base_url('C_mhs/step10'); ?>" class="btn btnn">10</a> <span class="glyphicon glyphicon-arrow-right"></span>
							<a href="<?=base_url('C_mhs/step11'); ?>" class="btn btnn active activee">11</a>
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
								<a href="<?=base_url('C_mhs/step10'); ?>" class="btn btnn">10</a>
								<br><br><!-- <center><span class="glyphicon glyphicon-arrow-down"></center> -->
								<a href="<?=base_url('C_mhs/step11'); ?>" class="btn btnn active activee">11</a>
								<br><br>
							</div>
							<div class="col-xs-10 col-md-12">
							<h3><span class="label label-default">Tahap 11 Verifikasi Data</span></h3>
									<br>
								<?php foreach($data as $value) { ?>
								<!--Identitas Diri-->
								<div id="identitas-diri">
									<h2><b>I. Identitas Diri</b></h2>
								</div>

								<tr>
									<td><img style="width: 130px; height: 130px;" src="<?php echo base_url(). 'assets/foto_mhs/'.$value->upload_foto; ?>"></td>
								</tr>

								<br/>
								<br/>

								<table class="table">
									<tr>
										<td>Nama Lengkap</td>
										<td>:</td>
										<td><?php echo $value->nama_mahasiswa; ?></td>
									</tr>

                  <tr>
										<td>NIK</td>
										<td>:</td>
										<td><?php echo $value->nik; ?></td>
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

										foreach ($propinsi as $x_prov) {
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

										foreach($data_kab_kota as $x_kab_kota){
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
										<td>Kode Pos</td>
										<td>:</td>
										<td><?php echo $value->kode_pos; ?></td>
									</tr>
									<!--End Identitas Diri-->
								</table>

								<!--Data Ortu-->
								<div id="data-ortu">
									<h2><b>II. Data Orang Tua</b></h2>
								</div>

								<table class="table">
									<tr>
										<td>Nama Ayah</td>
										<td>:</td>
										<td><?php echo $value->nama_ayah; ?>
										<?php
										if($value->almarhum == '40'){
											echo "(Almarhum)";
										}else if($value->almarhum == null || $value->almarhum == '0'){
											echo "";
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
										foreach ($propinsi as $x_prov) {
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
										foreach($data_kab_kota as $x_kab_kota){
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
								<!--End Data Ortu-->

								<!--Data Rumah-->
								<div id="data-kondisi-rumah">
									<h2><b>III. Data Kondisi Rumah</b></h2>
								</div>

								<table class="table">
									<tr>
										<td>Luas Rumah</td>
										<td>:</td>
										<td><?php
										if($value->luas_rumah == '1'){
											echo "Lebih dari 120 M Persegi";
										}else if($value->luas_rumah == '2'){
											echo "81 - 120 M Persegi";
										}else if($value->luas_rumah == '3'){
											echo "41 - 80 M Persegi";
										}else if($value->luas_rumah == '4'){
											echo "Kurang dari 40 M Persegi";
										}else{
											echo "Data Tidak Ada";
										}
										?></td>
									</tr>

									<tr>
										<td>Pajak Bumi Bangunan</td>
										<td>:</td>
										<td><?php
										if($value->pbb == '1'){
											echo "Lebih dari 100.000";
										}else if($value->pbb == '2'){
											echo "76.000 - 100.000";
										}else if($value->pbb == '3'){
											echo "26.000 - 75.000";
										}else if($value->pbb == '4'){
											echo "Kurang dari 25.000";
										}else{
											echo "Data tidak Ada";
										}
										?></td>
									</tr>

									<tr>
										<td>Rekening Listrik/Bulan</td>
										<td>:</td>
										<td><?php
										if($value->rek_listrik_per_bulan == '1'){
											echo "Lebih dari 100.000";
										}else if($value->rek_listrik_per_bulan == '2'){
											echo "76.000 - 100.000";
										}else if($value->rek_listrik_per_bulan == '3'){
											echo "26.000 - 75.000";
										}else if($value->rek_listrik_per_bulan == '4'){
											echo "Kurang dari 25.000";
										}else{
											echo "Data Tidak ada";
										}
										?></td>
									</tr>
								</table>
								<!--End Data Rumah-->

								<!--Data Sekolah-->
								<div id="data-sekolah">
									<h2><b>IV. Data Sekolah</b></h2>
								</div>

								<table class="table">
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

										foreach ($propinsi as $x_prov) {
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

										foreach($data_kab_kota as $x_kab_kota){
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
								<!--End Data Sekolah-->

								<!--Data Pesantren-->
								<div id="data-pesantren">
									<h2><b>V. Data Pesantren</b></h2>
								</div>

								<table class="table">
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
	    									<td><?php
	    										if($value->kecamatan_6 == null){
	    											echo "";
	    										}else if($value->kecamatan_6 != null){
	    											echo $value->kecamatan_6;
	    										}
	    									?></td>
	    								</tr>

	    								<tr>
	    									<td>Kelurahan Ponpes</td>
	    									<td>:</td>
	    									<td><?php
	    										if($value->kelurahan_6 == null){
	    											echo "";
	    										}else if($value->kelurahan_6 != null){
	    											echo $value->kelurahan_6;
	    										}
	    									?></td>
	    								</tr>

										<tr>
	    									<td>RT Ponpes</td>
	    									<td>:</td>
	    									<td><?php
	    										if($value->rt_6 == null){
	    											echo "";
	    										}else if($value->rt_6 != null){
	    											echo $value->rt_6;
	    										}
	    									?></td>
	    								</tr>

	    								<tr>
	    									<td>RW Ponpes</td>
	    									<td>:</td>
	    									<td><?php
	    										if($value->rw_6 == null){
	    											echo "";
	    										}else if($value->rw_6 != null){
	    											echo $value->rw_6;
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

											foreach ($propinsi as $x_prov) {
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

											foreach($data_kab_kota as $x_kab_kota){
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
									<?php }else if($value->mondok == "Tidak" || $value->mondok == null) { ?>
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
	    									<td>RT Ponpes</td>
	    									<td>:</td>
	    									<td><?php
	    										if($value->rt_6 == null){
	    											echo "";
	    										}
	    									?></td>
	    								</tr>

	    								<tr>
	    									<td>RW Ponpes</td>
	    									<td>:</td>
	    									<td><?php
	    										if($value->rw_6 == null){
	    											echo "";
	    										}
	    									?></td>
	    								</tr>

	    								<tr>
	    									<td>Kelurahan Ponpes</td>
	    									<td>:</td>
	    									<td><?php
	    										if($value->kelurahan_6 == null){
	    											echo "";
	    										}
	    									?></td>
	    								</tr>

	    								<tr>
	    									<td>Kecamatan Ponpes</td>
	    									<td>:</td>
	    									<td><?php
	    										if($value->kecamatan_6 == null){
	    											echo "";
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
									<?php }?>
								</table>
								<!--End Data Pesantren-->

								<!--Keterampilan-->
								<div id="keterampilan">
									<h2><b>VI. Keterampilan</b></h2>
								</div>

								<table class="table">
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
								<!--End Keterampilan-->

                <!--Data KIP-K-->
                <div id="kipk">
                  <h2><b>VII. Data KIP-K</b></h2>
                </div>

                <table class="table">
                  <tr>
                    <td>Jenis Kartu</td>
                    <td>:</td>
                    <td><?php echo $value->jenis_kipk; ?></td>
                  </tr>

                  <tr>
                    <td>Nomor Kartu</td>
                    <td>:</td>
                    <td><?php echo $value->nomor_kipk; ?></td>
                  </tr>
                </table>
                <!--End Data KIP-K-->

								<!--Dokumen Pendukung-->
								<div id="upload-dokumen-pendukung">
									<h2><b>VIII. Dokumen Pendukung</b></h2>
								</div>

								<table class="table">
                  <tr>
										<td>Foto Kartu KIP</td>
										<td>:</td>
										<td><button class="btn btn-primary" data-toggle="modal" data-target="#view-foto-kipk" type="submit">Lihat</button></td>
									</tr>

                  <tr>
										<td>Foto Rumah Bagian Depan</td>
										<td>:</td>
										<td><button class="btn btn-primary" data-toggle="modal" data-target="#view-foto-rumah-bagian-depan" type="submit">Lihat</button></td>
									</tr>

									<tr>
										<td>Foto Rumah Bagian Kiri</td>
										<td>:</td>
										<td><button class="btn btn-primary" data-toggle="modal" data-target="#view-foto-rumah-bagian-kiri" type="submit">Lihat</button></td>
									</tr>

									<tr>
										<td>Foto Rumah Bagian Kanan</td>
										<td>:</td>
										<td><button class="btn btn-primary" data-toggle="modal" data-target="#view-foto-rumah-bagian-kanan" type="submit">Lihat</button></td>
									</tr>

									<tr>
										<td>Foto Rumah Bagian Dalam</td>
										<td>:</td>
										<td><button class="btn btn-primary" data-toggle="modal" data-target="#view-foto-rumah-bagian-dalam" type="submit">Lihat</button></td>
									</tr>

									<tr>
										<td>Foto KTP</td>
										<td>:</td>
										<td><button class="btn btn-primary" data-toggle="modal" data-target="#view-foto-ktp" type="submit">Lihat</button></td>
									</tr>

									<tr>
										<td>Foto Kartu Keluarga</td>
										<td>:</td>
										<td><button class="btn btn-primary" data-toggle="modal" data-target="#view-foto-kk" type="submit">Lihat</button></td>
									</tr>

									<tr>
										<td>Foto PBB</td>
										<td>:</td>
										<td><button class="btn btn-primary" data-toggle="modal" data-target="#view-foto-pbb" type="submit">Lihat</button></td>
									</tr>

									<tr>
										<td>Foto Rekening Listrik</td>
										<td>:</td>
										<td><button class="btn btn-primary" data-toggle="modal" data-target="#view-foto-rek-listrik" type="submit">Lihat</button></td>
									</tr>

									<tr>
										<td>Semua Foto Dokumen</td>
										<td>:</td>
										<td><button class="btn btn-primary" data-toggle="modal" data-target="#view-foto-semua" type="submit">Lihat</button></td>
									</tr>
								</table>
								<!--End Dokumen Pendukung-->

								<!--Persyaratan Dokumen-->
								<div id="persyaratan-dokumen">
									<h2><b>IX. Persyaratan Dokumen</b></h2>
								</div>

								<table class="table">
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
									<!--End Persyaratan Dokumen-->
								<?php } ?>
							</table>
						</div> <!--End class="panel-body"-->

						<div class="panel-footer padding-mack">
							<div class="float-left">
								<a href="<?=base_url('C_mhs/step9'); ?>" class="btn btn-primary">
									<i class="fa fa-check-circle-o"></i>
									&laquo; Tahap 10
								</a>
							</div>

							<div class="float-right">
								<button class="btn btn-success" data-toggle="modal" data-target="#confirm" type="submit">
								<i class="glyphicon glyphicon-ok"></i>
									Verifikasi
								</button>
							</div>
						</div>
					</div> <!--End class="panel panel-primary"-->
        </div>
				</div> <!--End class="panel group"-->
			</div> <!--End class="row"-->
		</div> <!--End class="container col-md-8"-->
		<div class="col-md-12 panel-footer" style="background-color: #00a65a !important; width: 100%; left: 0px;">
			<div class="footer text-center" style="color:grey; font-size: 12px;">
				<?php $this->load->view('project_bidikmisi/footer/footer'); ?>
			</div>
		</div>

		<!--Modal Confirm Verifikasi-->
		<div class="modal fade" id="confirm" role="dialog">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h4 class="modal-title">Peringatan</h4>
					</div>
						<div class="modal-body">
                    <p>Jika saudara <b><?php echo $value->nama_mahasiswa; ?></b> sudah <b>yakin</b> dengan data yang telah dimasukan, silahkan klik tombol <b>Ya</b>

                    </div>
					<form role="form" method="POST" action="<?=base_url('C_mhs/step12'); ?>">
						<div class="modal-footer">
							<button type="submit" class="btn btn-primary">Ya</button>
							<button type="button" class="btn btn-default" data-dismiss="modal">Tidak</button>
						</div>
					</form>
				</div>
			</div>
		</div>
		<!--End Modal Confirm Verifikasi-->

    <!--View Foto KIP-K-->
		<div id="view-foto-kipk" class="modal fade" role="dialog">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h4 class="modal-title">Foto Kartu KIP <?php echo $value->upload_foto_kipk; ?></h4>
					</div>

					<div class="modal-body">
						<div class="embed-responsive embed-responsive-4by3">
							<img class="embed-responsive-item" src="<?=base_url().'assets/foto_dokumen/'.$value->upload_foto_kipk; ?>">
						</div>
					</div>

					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
					</div>
				</div>
			</div>
		</div>
		<!--End View Foto KIP-K-->

		<!--View Foto Rumah Depan-->
		<div id="view-foto-rumah-bagian-depan" class="modal fade" role="dialog">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h4 class="modal-title">Foto Rumah Bagian Depan <?php echo $value->nama_mahasiswa; ?></h4>
					</div>

					<div class="modal-body">
						<div class="embed-responsive embed-responsive-4by3">
							<img class="embed-responsive-item" src="<?=base_url().'assets/foto_dokumen/'.$value->upload_foto_rumah_depan; ?>">
						</div>
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
						<div class="embed-responsive embed-responsive-4by3">
							<img class="embed-responsive-item" src="<?=base_url().'assets/foto_dokumen/'.$value->upload_foto_rumah_kiri; ?>">
						</div>
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
						<div class="embed-responsive embed-responsive-4by3">
							<img class="embed-responsive-item" src="<?=base_url().'assets/foto_dokumen/'.$value->upload_foto_rumah_kanan; ?>">
						</div>
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
						<div class="embed-responsive embed-responsive-4by3">
							<img class="embed-responsive-item" src="<?=base_url().'assets/foto_dokumen/'.$value->upload_foto_rumah_dalam; ?>">
						</div>
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
						<div class="embed-responsive embed-responsive-4by3">
							<img class="embed-responsive-item" src="<?=base_url().'assets/foto_dokumen/'.$value->upload_foto_pbb; ?>">
						</div>
					</div>

					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
					</div>
				</div>
			</div>
		</div>
		<!--End View foto Pbb-->

		<!--View foto KTP-->
		<div id="view-foto-ktp" class="modal fade" role="dialog">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h4 class="modal-title">Foto KTP <?php echo $value->nama_mahasiswa; ?></h4>
					</div>

					<div class="modal-body">
						<div class="embed-responsive embed-responsive-4by3">
							<img class="embed-responsive-item" src="<?=base_url().'assets/foto_dokumen/'.$value->upload_foto_ktp; ?>">
						</div>
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
						<div class="embed-responsive embed-responsive-4by3">
							<img class="embed-responsive-item" src="<?=base_url().'assets/foto_dokumen/'.$value->upload_foto_kk; ?>">
						</div>
					</div>

					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
					</div>
				</div>
			</div>
		</div>
		<!--End View foto kartu keluarga-->

		<!--View Foto Rekening Listrik-->
		<div id="view-foto-rek-listrik" class="modal fade" role="dialog">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h4 class="modal-title">Foto Rekening Listrik <?php echo $value->nama_mahasiswa; ?></h4>
					</div>

					<div class="modal-body">
						<div class="embed-responsive embed-responsive-4by3">
							<img class="embed-responsive-item" src="<?=base_url().'assets/foto_dokumen/'.$value->upload_foto_rek_listrik; ?>">
						</div>
					</div>

					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
					</div>
				</div>
			</div>
		</div>
		<!--End View Foto Rekening Listrik-->

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
						<div class="embed-responsive embed-responsive-4by3">
							<img class="embed-responsive-item" src="<?=base_url().'assets/foto_dokumen/'.$value->upload_foto_rumah_depan; ?>">
						</div>

						<br/>

						<label>Foto Rumah Bagian Kiri</label>
						<div class="embed-responsive embed-responsive-4by3">
							<img class="embed-responsive-item" src="<?=base_url().'assets/foto_dokumen/'.$value->upload_foto_rumah_kiri; ?>">
						</div>

						<br/>

						<label>Foto Rumah Bagian Kanan</label>
						<div class="embed-responsive embed-responsive-4by3">
							<img class="embed-responsive-item" src="<?=base_url().'assets/foto_dokumen/'.$value->upload_foto_rumah_kanan; ?>">
						</div>

						<br/>

						<label>Foto Rumah Bagian Dalam</label>
						<div class="embed-responsive embed-responsive-4by3">
							<img class="embed-responsive-item" src="<?=base_url().'assets/foto_dokumen/'.$value->upload_foto_rumah_dalam; ?>">
						</div>

						<br/>

						<label>Foto PBB</label>
						<div class="embed-responsive embed-responsive-4by3">
							<img class="embed-responsive-item" src="<?=base_url().'assets/foto_dokumen/'.$value->upload_foto_pbb; ?>">
						</div>

						<br/>

						<label>Foto KTP</label>
						<div class="embed-responsive embed-responsive-4by3">
							<img class="embed-responsive-item" src="<?=base_url().'assets/foto_dokumen/'.$value->upload_foto_ktp; ?>">
						</div>

						<br/>

						<label>Foto Kartu Keluarga</label>
						<div class="embed-responsive embed-responsive-4by3">
							<img class="embed-responsive-item" src="<?=base_url().'assets/foto_dokumen/'.$value->upload_foto_kk; ?>">
						</div>

						<br/>

						<label>Foto Rekening Listrik</label>
						<div class="embed-responsive embed-responsive-4by3">
							<img class="embed-responsive-item" src="<?=base_url().'assets/foto_dokumen/'.$value->upload_foto_rek_listrik; ?>">
						</div>
					</div>

					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
					</div>
				</div>
			</div>
		</div>
		<!--End View All Foto-->

	</body>
</html>
