<?php 
	$kosong = null;
?>
<!DOCTYPE html>
<html>
	<body>
		<table border="1px">
			<tr>
				<td>No Pendaftaran</td>
				<td>Nama Mahasiswa</td>
				<td>Luas Rumah</td>
				<td>PBB</td>
				<td>Rekening Listrik</td>
			</tr>

			<?php foreach($user as $value) { ?>
			<tr>
				<td><?php 
					if($value->no_pendaftaran == $kosong || $value->no_pendaftaran == '0'){
						echo "Data Tidak Ada";
					}else{
						echo $value->no_pendaftaran;
					}
				?></td>
				<td><?php  
					if($value->nama_mahasiswa == $kosong){
						echo "Data Tidak Ada";
					}else{
						echo $value->nama_mahasiswa;
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
			</tr>
			<?php } ?>
		</table>
	</body>
</html>
<?php
	//load footer
	$this->load->view('project_bidikmisi/footer/footer');
?>