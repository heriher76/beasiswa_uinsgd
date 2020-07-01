<?php
$kosong = null;
$data_kosong = 'Data Kosong';
?>
<html>
    <head>
    	<style type="text/css">
    	table, tr, td, th {
    		border: 1px solid black;
    	}
    	
    	.clear {
    	    clear: both;
    	}
    	
    	img {
    	    width : 130px; 
    	    height : 130px; 
    	    float: left;
            margin: 0px 10px 10px 40px;
            padding: 0px 0px 0px 0px;
    	}
    </style>
</head>
<?php

$filename = "".$title.".xls";
$no = 1;
header("Content-type: application/vnd-ms-excel");
header('Content-Disposition: attachment; filename="'.$filename.'"');
header("Pragma: no-cache");
header("Expires: 0");
 
?>
 
<body>
	<div style="font-family: 'Arial'; font-size: 18px;">
		<h3><b>REPORT DATA PROGRAM BIDIKMISI TAHUN <?php echo date('Y'); ?> UNIVERSITAS ISLAM NEGERI SUNAN GUNUNG DJATI BANDUNG <?php echo $title2; ?></b></h3>
	</div>

	<div class="col-md-12">
		<?php if($title2 == 'PER-ANGKATAN' || $title == 'Export Data Mahasiswa Per-Fakultas Report Bidikmisi') { ?>
   		<table>
   			<thead style="font-size: 15px;">
   				<tr>
	   				<th>No</th>
	   				<th>NIM</th>
	   				<th>Nama Mahasiswa</th>
	   				<th>Jenis Kelamin</th>
	   				<th>Fakultas</th>
	   				<th>Jurusan</th>
	   				<th>Angkatan</th>
	   				<th>IP Semester 1</th>
	   				<th>IP Semester 2</th>
	   				<th>IP Semester 3</th>
	   				<th>IP Semester 4</th>
	   				<th>IP Semester 5</th>
	   				<th>IP Semester 6</th>
	   				<th>IP Semester 7</th>
	   				<th>IP Semester 8</th>
	   				<th>IPK Semester 1</th>
	   				<th>IPK Semester 2</th>
	   				<th>IPK Semester 3</th>
	   				<th>IPK Semester 4</th>
	   				<th>IPK Semester 5</th>
	   				<th>IPK Semester 6</th>
	   				<th>IPK Semester 7</th>
   					<th>IPK Semester 8</th>
   				</tr>
   			</thead>

   			<tbody style="font-size: 14px;">
   				<?php foreach($user as $value) { ?>
   					<tr>
   						<td><?php echo $no++; ?></td>
   						<td><?php echo $value->nim; ?></td>
   						<td><?php echo $value->nama_mahasiswa; ?></td>
   						<td><?php echo $value->jenis_kelamin; ?></td>
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
						<td><?php echo $value->angkatan; ?></td>
						<td><?php echo $value->ip_s1; ?></td>
						<td><?php echo $value->ip_s2; ?></td>
						<td><?php echo $value->ip_s3; ?></td>
						<td><?php echo $value->ip_s4; ?></td>
						<td><?php echo $value->ip_s5; ?></td>
						<td><?php echo $value->ip_s6; ?></td>
						<td><?php echo $value->ip_s7; ?></td>
						<td><?php echo $value->ip_s8; ?></td>
						<td><?php echo $value->ip_k1; ?></td>
						<td><?php echo $value->ip_k2; ?></td>
						<td><?php echo $value->ip_k3; ?></td>
						<td><?php echo $value->ip_k4; ?></td>
						<td><?php echo $value->ip_k5; ?></td>
						<td><?php echo $value->ip_k6; ?></td>
						<td><?php echo $value->ip_k7; ?></td>
						<td><?php echo $value->ip_k8; ?></td>
   					</tr>
   				<?php } ?>
   			</tbody>
   		</table>
		<?php }else{ ?>
		 <table>
			<thead style="font-size: 15px;">
				<tr>
					<th>No</th>
					<th>No Pendaftaran</th>
					<th>Nama Mahasiswa</th>
					<th>Jenis Kelamin</th>
					<th>Tanggal Lahir</th>
					<th>Jalur Pendaftaran</th>
					<th>Fakultas</th>
					<th>Jurusan</th>
					<th>UKT</th>
					<!--th>Foto Mhs</th-->
					<th>Tempat Lahir</th>
					<th>Status Pernikahan</th>
					<th>Asal Provinsi Mhs</th>
					<th>Asal Kab/Kota Mhs</th>
					<th>No Telp Mhs</th>
					<th>Email</th>
					<th>Alamat Mhs</th>
					<th>Kecamatan Mhs</th>
					<th>Kelurahan Mhs</th>
					<th>RW Mhs</th>
					<th>RT Mhs</th>
					<th>Kode Pos Mhs</th>
					<th>Nama Ayah</th>
					<th>Nama Ibu</th>
					<th>Alamat Ortu</th>
					<th>Provinsi Ortu</th>
					<th>Kab/Kota Ortu</th>
					<th>Kecamatan Ortu</th>
					<th>Kelurahan Ortu</th>
					<th>RW Ortu</th>
					<th>RT Ortu</th>
					<th>Kode Pos Ortu</th>
					<th>No Telp Ortu</th>
					<th>Pekerjaan Ayah</th>
					<th>Keterangan Pekerjaan Ayah</th>
					<th>Pekerjaan Ibu</th>
					<th>Keterangan Pekerjaan Ibu</th>
					<th>Pendidikan Ayah</th>
					<th>Penghasilan Ayah</th>
					<th>Nominal Penghasilan Ayah</th>
					<th>Pendidikan Ibu</th>
					<th>Penghasilan Ibu</th>
					<th>Nominal Penghasilan Ibu</th>
					<th>Jumlah Saudara Kandung</th>
					<th>Luas Rumah</th>
					<th>PBB</th>
					<th>Rekening Listrik</th>
					<th>Kepemilikan Rumah</th>
					<th>Jenis Dinding Tempat Tinggal</th>
					<th>Fasilitas Toilet</th>
					<th>Sumber Penerangan</th>
					<th>Sumber Air</th>
					<th>Bahan Bakar Dapur</th>
					<th>Jarak Rumah Dari Pusat Kota</th>
					<th>Kondisi Jalan Menuju Rumah</th>
					<th>Mata Pencaharian Masyarakat Umum</th>
					<th>Alamat Sekolah</th>
					<th>Provinsi Sekolah</th>
					<th>Kab/Kota Sekolah</th>
					<th>Kecamatan Sekolah</th>
					<th>Kelurahan Sekolah</th>
					<th>RW Sekolah</th>
					<th>RT Sekolah</th>
					<th>Nama Sekolah</th>
					<th>Tahun Lulus</th>
					<th>Jurusan Sekolah</th>
					<th>Rerata Nilai UN</th>
					<th>Rerata Nilai Raport</th>
					<th>Prestasi Akademik</th>
					<th>Prestasi Non Akademik</th>
					<th>Mondok Pesantren</th>
					<th>Nama Ponpes</th>
					<th>Alamat Ponpes</th>
					<th>Provinsi Ponpes</th>
					<th>Kab/Kota Ponpes</th>
					<th>Kecamatan Ponpes</th>
					<th>Kelurahan Ponpes</th>
					<th>RW Ponpes</th>
					<th>RT Ponpes</th>
					<th>Kode Pos Ponpes</th>
					<th>Lama Belajar (Tahun)</th>
					<th>Kemampuan Bhs Arab</th>
					<th>Kemampuan Bhs Inggris</th>
					<th>Kemampuan Komputer</th>
					<!--th>Foto Rumah Depan</th>
					<th>Foto Rumah Kiri</th>
					<th>Foto Rumah Kanan</th>
					<th>Foto PBB</th>
					<th>Foto Rekening Listrik</th-->
					<th>Kartu Tes</th>
					<th>Formulir Pendaftaran</th>
					<th>Surat Keterangan Lulus</th>
					<th>Fotocopy Raport Semester</th>
					<th>Fotocopy Ijazah</th>
					<th>Fotocopy Nilai UAN</th>
					<th>Surat Keterangan Prestasi</th>
					<th>Surat Keterangan Penghasilan Ortu</th>
					<th>Fotocopy KK</th>
					<th>Fotocopy Rekening Listrik</th>
					<th>Fotocopy PBB</th>
					<th>Foto Rumah Tiga Sudut</th>
					<th>Status Verifikasi</th>
					<th>Skor</th>
					<th>Status Lulus</th>
					<th>Nama Rekening Mhs</th>
					<th>Nomor Rekening Mhs</th>
				</tr>
			</thead>
			
			<tbody style="font-size: 14px;">
				<?php foreach ($user as $value) { ?>
					<tr>
						<td><?php echo $no++; ?></td>
						<td><?php 
						if($value->no_pendaftaran == $kosong || $value->no_pendaftaran == '0'){
							echo $data_kosong;
						}else{
							echo $value->no_pendaftaran;
						}
						?></td>
						<td><?php  
						if($value->nama_mahasiswa == $kosong){
							echo $data_kosong;
						}else{
							echo $value->nama_mahasiswa;
						}
						?></td>
						<td><?php echo $value->jenis_kelamin; ?></td>
						<td><?php echo date("d/m/Y", strtotime($value->tanggal_lahir)); ?></td>
						<td><?php echo $value->jalur_pendaftaran; ?></td>
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
						<td><?php
						if($value->kategori == $kosong || $value->kategori == '0'){
							echo $data_kosong;
						}else{
							echo $value->kategori;
						}
						?></td>
						<!--td><img style="width: 130px; height: 130px;" src="<?php echo base_url(). 'assets/foto_mhs/'.$value->upload_foto; ?>"></td-->
						<td><?php echo $value->tempat_lahir; ?></td>
						<td><?php echo $value->status_pernikahan; ?></td>
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
						<td><?php echo $value->no_telp; ?></td>
						<td><?php echo $value->email; ?></td>
						<td><?php echo $value->alamat; ?></td>
						<td><?php echo $value->kecamatan_2; ?></td>
						<td><?php echo $value->kelurahan_2; ?></td>
						<td><?php echo $value->rw_2; ?></td>
						<td><?php echo $value->rt_2; ?></td>
						<td><?php echo $value->kode_pos; ?></td>
						<td><?php echo $value->nama_ayah; ?> 
						<?php 
						if($value->almarhum == '40'){
							echo "(Almarhum)";
						}else if($value->almarhum == null || $value->almarhum == '0'){
							echo "";
						}
						?></td>
						<td><?php echo $value->nama_ibu; ?> 
						<?php 
						if($value->almarhumah == '20'){
							echo "(Almarhumah)";
						}else if($value->almarhumah == null || $value->almarhumah == '0'){
							echo "";
						}
						?></td>
						<td><?php echo $value->alamat_ortu; ?></td>
						<td><?php 
						foreach ($provinsi as $x_prov) {
							if($value->provinsi_ortu == $x_prov->id_propinsi){
								echo $x_prov->nama_propinsi;
							}
						}
						?></td>
						<td><?php 
						foreach($kota as $x_kab_kota){
							if($value->kab_kota_ortu == $x_kab_kota->id_kota){
								echo $x_kab_kota->nama_kota;
							}
						}
						?></td>
						<td><?php echo $value->kecamatan_3; ?></td>
						<td><?php echo $value->kelurahan_3; ?></td>
						<td><?php echo $value->rw_3; ?></td>
						<td><?php echo $value->rt_3; ?></td>
						<td><?php echo $value->kode_pos_ortu; ?></td>
						<td><?php echo $value->no_telp_ortu; ?></td>
						<td><?php 
						if($value->pekerjaan_ayah == '1'){
							echo "PNS/TNI/POLRI";
							?>
							    <td><?php echo $value->ket_pns_tni_polri_ayah; ?></td>
							<?php		
						}else if($value->pekerjaan_ayah == '2'){
							echo "Wiraswasta";
							?>
								<td><?php echo $value->ket_wiraswasta_ayah; ?></td>
							<?php
						}else if($value->pekerjaan_ayah == '3'){
							echo "Tukang";
							?>
								<td><?php echo $value->ket_tukang_ayah; ?></td>
							<?php
						}else if($value->pekerjaan_ayah == '4'){
							echo "Buruh Tani/Petani";
							?>
							    <td><?php echo "-"; ?></td>
							 <?php   
						}else{
						    ?>
						        <td><?php echo "-"; ?></td>
						    <?php      
						}
						?></td>
						<td><?php 
						if($value->pekerjaan_ibu == 'PNS/TNI/POLRI'){
							echo "PNS/TNI/POLRI";
							?>	
								<td><?php echo $value->ket_pns_tni_polri_ibu; ?></td>
							<?php		
						}else if($value->pekerjaan_ibu == 'Wiraswasta'){
							echo "Wiraswasta";
							?>
								<td><?php echo $value->ket_wiraswasta_ibu; ?></td>
							<?php
						}else if($value->pekerjaan_ibu == 'Ibu Rumah Tangga'){
							echo "Ibu Rumah Tangga";
							?>
							    <td><?php echo "-"; ?></td>
							<?php
						}else if($value->pekerjaan_ibu == 'Buruh Tani/Petani'){
							echo "Buruh Tani/Petani";
							?>
							    <td><?php echo "-"; ?></td>
							<?php    
						}else{
						    ?>
						        <td><?php echo "-"; ?></td>
						    <?php      
						}
						?></td>
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
						<td><?php
						if($value->penghasilan_ayah == '1'){
							echo "Lebih dari 1.200.000";
						}else if($value->penghasilan_ayah == '2'){
							echo "1.000.001 - 1.200.000";
						}else if($value->penghasilan_ayah == '3'){
							echo "500.001 - 750.000";
						}else if($value->penghasilan_ayah == '4'){
							echo "Kurang dari 500.000";
						}else{
							echo "Data Tidak Ada";
						}
						?></td>
						<td><?php echo 'Rp '.number_format($value->nominal_peng_ayah); ?></td>
						<td><?php echo $value->pendidikan_ibu; ?></td>
						<td><?php
						if($value->penghasilan_ibu == '1'){
							echo "Lebih dari 1.200.000";
						}else if($value->penghasilan_ibu == '2'){
							echo "1.000.001 - 1.200.000";
						}else if($value->penghasilan_ibu == '3'){
							echo "500.001 - 750.000";
						}else if($value->penghasilan_ibu == '4'){
							echo "Kurang dari 500.000";
						}else{
							echo "Data Tidak Ada";
						}
						?></td>
						<td><?php echo 'Rp '.number_format($value->nominal_peng_ibu); ?></td>
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
						<td><?php echo $value->kepemilikan_rumah; ?></td>
						<td><?php echo $value->jenis_dinding; ?></td>
						<td><?php echo $value->fasilitas_jamban; ?></td>
						<td><?php echo $value->sumber_penerangan; ?></td>
						<td><?php echo $value->sumber_air; ?></td>
						<td><?php echo $value->bahan_bakar_dapur; ?></td>
						<td><?php echo $value->jarak, " ","Km"; ?></td>
						<td><?php echo $value->kondisi_jalan; ?></td>
						<td><?php echo $value->mata_pencaharian; ?></td>
						<td><?php echo $value->alamat_sekolah; ?></td>
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
    					<td><?php echo $value->kecamatan_5; ?></td>
						<td><?php echo $value->kelurahan_5; ?></td>
						<td><?php echo $value->rw_5; ?></td>
						<td><?php echo $value->rt_5; ?></td>
						<td><?php echo $value->nama_sekolah; ?></td>
						<td><?php echo $value->tahun_lulus; ?></td>
						<td><?php echo $value->jurusan_sekolah; ?></td>
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
						<?php
						    if($value->mondok == 'Ya'){
						?>    
        						<td><?php echo $value->mondok; ?></td>
        						<td><?php
        						if($value->nama_ponpes == null){
        							echo "-";
        						}else if($value->nama_ponpes != null){
        							echo $value->nama_ponpes;
        						}else{
        							echo "Data Tidak ada";
        						}
        						?></td>
        						<td><?php
								if($value->alamat_ponpes == null){
									echo "-";
								}else if($value->alamat_ponpes != null){
									echo $value->alamat_ponpes;
								}else{
									echo "Data Tidak ada";
								}
								?></td>
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
    							<td><?php echo $value->kecamatan_6; ?></td>
        						<td><?php echo $value->kelurahan_6; ?></td>
        						<td><?php echo $value->rw_6; ?></td>
        						<td><?php echo $value->rt_6; ?></td>
        						<td><?php echo $value->kode_pos_ponpes; ?></td>
        						<td><?php echo $value->lama_belajar; ?></td>
						<?php
						    }else if($value->mondok == 'Tidak' || $value->mondok == null){
						?>  
						        <td><?php echo $value->mondok; ?></td>
						        <td><?php
								if($value->nama_ponpes == null){
									echo "-";
								}else{
									echo "Data Tidak ada";
								}
								?></td>
								<td><?php
    							if($value->alamat_ponpes == null){
    								echo "-";
    							}else{
    								echo "Data Tidak ada";
    							}
    							?></td>
    							<td><?php 
    							if($value->prov_ponpes == '0' || $value->prov_ponpes == null){
    								echo "-";
    							}
    							?></td>
    							<td><?php 
								if($value->kab_kota_ponpes == '0' || $value->kab_kota_ponpes == null){
									echo "-";
								}
								?></td>
								<td><?php
								if($value->kecamatan_6 == null){
								    echo "-";
								}
								?></td>
								<td><?php
								if($value->kelurahan_6 == null){
								    echo "-";
								}
								?></td>
								<td><?php
								if($value->rw_6 == null){
								    echo "-";
								}
								?></td>
								<td><?php
								if($value->rt_6 == null){
								    echo "-";
								}
								?></td>
								<td><?php
    							if($value->kode_pos_ponpes == '0' || $value->kode_pos_ponpes == null){
    								echo "-";
    							}
    							?></td>
    							<td><?php
    							if($value->lama_belajar == '0' || $value->lama_belajar == null){
									echo "-";
								}
								?></td>
						<?php
						    }
						?>        
						<td><?php echo $value->kem_bhs_arab; ?></td>
						<td><?php echo $value->kem_bhs_inggris; ?></td>
						<td><?php echo $value->kem_komputer; ?></td>
						<!--td><img style="width: 130px; height: 130px;" src="<?=base_url().'assets/foto_dokumen/'.$value->upload_foto_rumah_depan; ?>"></td>
						<td><img style="width: 130px; height: 130px;" src="<?=base_url().'assets/foto_dokumen/'.$value->upload_foto_rumah_kiri; ?>"></td>
						<td><img style="width: 130px; height: 130px;" src="<?=base_url().'assets/foto_dokumen/'.$value->upload_foto_rumah_kanan; ?>"></td>
						<td><img style="width: 130px; height: 130px;" src="<?=base_url().'assets/foto_dokumen/'.$value->upload_foto_pbb; ?>"></td>
						<td><img style="width: 130px; height: 130px;" src="<?=base_url().'assets/foto_dokumen/'.$value->upload_foto_rek_listrik; ?>"></td-->
						<td><?php echo $value->kartu_tes; ?></td>
						<td><?php echo $value->formulir_pendaftaran; ?></td>
						<td><?php echo $value->surat_ket_lulus; ?></td>
						<td><?php echo $value->fotocopy_raport_semester; ?></td>
						<td><?php echo $value->fotocopy_ijazah; ?></td>
						<td><?php echo $value->fotocopy_nilai_uan; ?></td>
						<td><?php echo $value->surat_ket_prestasi; ?></td>
						<td><?php echo $value->surat_ket_peng_ortu; ?></td>
						<td><?php echo $value->fotocopy_kk; ?></td>
						<td><?php echo $value->fotocopy_rek_listrik; ?></td>
						<td><?php echo $value->fotocopy_pbb; ?></td>
						<td><?php echo $value->foto_rumah_tiga_sudut; ?></td>
						<td><?php 
						    if($value->reg == 2){
						        echo "Sudah Verifikasi";
						    }else{
						        echo "Belum Verifikasi";
						    }
						?></td>
						<td><?php
						if($value->skor == $kosong || $value->skor == '0'){
							echo $data_kosong;
						}else{
							echo $value->skor;
						} 
						?></td>
						<td><?php 
						if($value->getLulus == $kosong){
							echo $data_kosong;
						}else{
							echo $value->getLulus;
						} 
						?></td>
						<td><?php 
						if($value->nama_rekening == null){
						    echo "Data Tidak Ada";
						}else{
						    echo $value->nama_rekening;
						}
						?></td>
						<td><?php 
						if($value->rekening_mhs == null){
						    echo "Data Tidak Ada";
						}else{
						    echo $value->rekening_mhs;
						}
						?></td>
					</tr>
					<?php } ?>
				</tbody>
			</table>
		<?php } ?>	
	</div>
</body>