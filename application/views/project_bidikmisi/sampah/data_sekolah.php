<!DOCTYPE html>
<html>
	<body>
		<table border="1px">
			<tr>
				<td>No Pendaftaran</td>
				<td>Nama Mahasiswa</td>
				<td>Alamat Sekolah</td>
				<td>Provinsi Sekolah</td>
				<td>Kab/Kota Sekolah</td>
				<td>Nama Sekolah</td>
				<td>Tahun Lulus</td>
				<td>Jurusan Sekolah</td>
				<td>Rerata Nilai UN</td>
				<td>Rerata Nilai Raport</td>
				<td>Prestasi Akademik</td>
				<td>Prestasi Non Akademik</td>
			</tr>

			<?php foreach($user as $value) { ?>
			<tr>
				<td><?php echo $value->no_pendaftaran; ?></td>
				<td><?php echo $value->nama_mahasiswa; ?></td>
				<td><?php echo $value->alamat_sekolah;
					if($value->alamat_sekolah == null){
						echo "Data Tidak Ada";
					}
				?></td>
				<td><?php
					foreach($provinsi as $x_prov){
							if($value->prov_sekolah == $x_prov->id_propinsi){
								echo $x_prov->nama_propinsi;
							}
						}
						if($value->prov_sekolah == null || $value->prov_sekolah == '0'){
							echo "Data Tidak Ada";
						} 
				?></td>
				<td><?php 
						foreach($kota as $x_kota){
							if($value->kab_kota_sekolah == $x_kota->id_kota){
								echo $x_kota->nama_kota;
							}
						}
						if($value->kab_kota_sekolah == null || $value->kab_kota_sekolah == '0'){
							echo "Data Tidak Ada";
						}  
				?></td>
				<td><?php
					if($value->nama_sekolah == null){
						echo "Data Tidak Ada";
					}else{
						echo $value->nama_sekolah;
					}
				?></td>
				<td><?php
					if($value->tahun_lulus == null || $value->tahun_lulus == '0'){
						echo "Data Tidak Ada";
					}else{
						echo $value->tahun_lulus; 
					}
				?></td>
				<td><?php  
					if($value->jurusan_sekolah == null){
						echo "Data Tidak Ada";
					}else{
						echo $value->jurusan_sekolah;
					}
				?></td>
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
			</tr>
			<?php } ?>
		</table>
	</body>
</html>
<?php
	//load footer
	$this->load->view('project_bidikmisi/footer/footer');
?>