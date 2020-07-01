<?php
	$this->load->view('project_bidikmisi/header/mahasiswa/header2_mhs');
	echo "<script language='JavaScript' type='text/javascript'>window.print();</script>";
     $thn_sekarang = date('Y');// pendefinisian tanggal awal
    $thn_sesudah = date('Y', strtotime('+1 years', strtotime($thn_sekarang)));
?>

<!DOCTYPE html>
<html>
	<body>
		<div class="container-fluid">
			<div class="row">
			    <img src="<?php echo base_url('assets/img/Logo UIN Bandung.png'); ?>" style=" margin-left:50px; margin-top:10px; width:90px; height:90px; float:left">

                <div style="font-family: 'Arial'; font-size: 14px; margin-left:20px; text-align: center;">
                    <h5><b style="line-height:1.5;">KEMENTERIAN AGAMA REPUBLIK INDONESIA<br>
                        UNIVERSITAS ISLAM NEGERI SUNAN GUNUNG DJATI BANDUNG
                    </b><br>
                Jalan A.H. Nasution No. 105 Cibiru Bandung 40614<br>
                Telp. (022) 7800525 Fax. (022) 7802844<br>
                Website : <b>www.uinsgd.ac.id</b>, email: <b>info@uinsgd.ac.id</b>
                </h5>

                </div>
                <hr>
				<div style="font-family: 'Arial'; font-size: 5px; margin-left:0px; text-align: center;">
					<h4><b style="line-height:1.5;">DOKUMEN FORMULIR PENDAFTARAN PROGRAM BIDIKMISI <br>TAHUN AKADEMIK <?php echo $thn_sekarang; ?>/<?php echo $thn_sesudah; ?></h4>
				</div>
				<div class="clear"></div>
				<?php foreach($data as $value) { ?>
			
				<div class="" style="margin-top:-75px;">
										
				        <div style="font-size:12px;">
    						<table class="table" border="0">
								<tr>
									<td><b>I. IDENTITAS DIRI</b></td>
                        <td colspan="2" width="350px"></td>
								</tr>

								<tr>
									<?php if ($value->upload_foto == NULL) { ?>
                                       <td colspan="3"><img style="width: 90px; height: 120px;" src="https://bidikmisi.uinsgd.ac.id/assets/foto_mhs/'.$value->upload_foto; ?>"></td>
                                   <?php } else { ?>
                                    <td colspan="3"><img style="width: 90px; height: 120px;" src="https://bidikmisi.uinsgd.ac.id/assets/foto_mhs/<?php $value->upload_foto; ?>"></td>
                                    <?php } ?>
								</tr>

    							<tr>
    								<td>No Pendaftaran</td>
    								<td>:</td>
    								<td><?php echo $value->no_pendaftaran; ?></td>
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
    								<td>Kode Pos</td>
    								<td>:</td>
    								<td><?php echo $value->kode_pos; ?></td>
    							</tr>
    							<!--End Identitas Diri-->
    						
    						<br/>

    						<!--Data Ortu-->
    						
								<tr>
									<td colspan="3"><b>II. DATA ORANG TUA</b></td>
								</tr>

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
    						
    						<!--End Data Ortu-->

    						<br/>
    
    						<!--Data Rumah-->
    						
								<tr>
									<td colspan="3"><b>III. DATA KONDISI RUMAH</b></td>
								</tr>

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

								<tr>
									<td>Kepemilikan Rumah</td>
									<td>:</td>
									<td><?php echo $value->kepemilikan_rumah; ?></td>
								</tr>

								<tr>
									<td>Jenis Dinding Tempat Tinggal</td>
									<td>:</td>
									<td><?php echo $value->jenis_dinding; ?></td>
								</tr>

								<tr>
									<td>Fasilitas Toilet</td>
									<td>:</td>
									<td><?php echo $value->fasilitas_jamban; ?></td>
								</tr>

								<tr>
									<td>Sumber Penerangan</td>
									<td>:</td>
									<td><?php echo $value->sumber_penerangan; ?></td>
								</tr>

								<tr>
									<td>Sumber Air</td>
									<td>:</td>
									<td><?php echo $value->sumber_air; ?></td>
								</tr>

								<tr>
									<td>Bahan Bakar Dapur</td>
									<td>:</td>
									<td><?php echo $value->bahan_bakar_dapur; ?></td>
								</tr>

								<tr>
									<td>Jarak Rumah dari Pusat Kota/Kabupaten</td>
									<td>:</td>
									<td><?php echo $value->jarak; ?> KM</td>
								</tr>

								<tr>
									<td>Kondisi Jalan Menuju Rumah</td>
									<td>:</td>
									<td><?php echo $value->kondisi_jalan; ?></td>
								</tr>

								<tr>
									<td>Mata Pencaharian Setempat Pada Umumnya</td>
									<td>:</td>
									<td><?php echo $value->mata_pencaharian; ?></td>
								</tr>
    						
    						<!--End Data Rumah-->

    						<br/>
    
    						<!--Data Sekolah-->
    						
								<tr>
									<td colspan="3"><b>IV. DATA SEKOLAH</b></td>
								</tr>

    							<tr>
    								<td>Alamat Sekolah</td>
    								<td>:</td>
    								<td><?php echo $value->alamat_sekolah; ?></td>
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
    						
    						<!--End Data Sekolah-->

    						<br/>
    
    						<!--Data Pesantren>
    						<tr>
    							<td><b>V. DATA PESANTREN</b></td>
    						</tr>
    						<table class="table-buat">
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
    							<?php }?>
    						</table>
    						<End Data Pesantren-->

    						<br/>
    
    						<!--Keterampilan-->
    						
								<tr>
									<td colspan="3"><b>V. DATA KETERAMPILAN</b></td>
								</tr>
                                    <tr>
                                    <td>Kemampuan Baca Tulis Qur'an</td>
                                    <td>:</td>
                                    <td><?php echo $value->kem_btq; ?></td>
                                </tr>
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

    						<br/>
    
    						<!--Persyaratan Dokumen>
    						<tr>
    							<td><b>VII. PERSYARATAN DOKUMEN</b></td>
    						</tr>
    						
    						<table class="table-buat">
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
    
    							<tr>
    								<td>Fotocopy Raport Semester 1-6 yang dilegalisir Kepala Sekolah</td>
    								<td>:</td>
    								<td><?php echo $value->fotocopy_raport_semester; ?></td>
    							</tr>
    
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
						<End Persyaratan Dokumen-->
					</div>
					
					
					
					<div>
						<p>
                   			Dengan ini saya menyatakan dengan penuh kesadaran untuk taat dan patuh terhadap ketentuan umum dan khusus Bidikmisi, menjunjung tinggi kehormatan pribadi, keluarga dan asal sekolah dengan mengisi segala informasi sebenar-benarnya. Saya bersedia dikenai sanksi apabila melanggar ketentuan dan memberikan informasi yang tidak benar.
                		</p>
                	</div>

				

					<div style="float:right">
                        <p>Yang Membuat Pernyataan,</p>
                        <p style="padding-bottom:45px; padding-top:50px; padding-left:90px;">materai 6000</p>
                        <p>(...................................................................)</p>
                    </div>
				
				<?php } ?>
			</div>
		</div>
	</body>
</html>