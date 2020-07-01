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
				<td>Mondok</td>
				<td>Nama Ponpes</td>
				<td>Alamat Ponpes</td>
				<td>Provinsi Ponpes</td>
				<td>Kab/Kota Ponpes</td>
				<td>Lama Belajar</td>
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
				<?php 
					if($value->mondok == 'Ya'){
					?>
						<td><?php echo $value->mondok; ?></td>
						<td><?php echo $value->nama_ponpes; ?></td>
						<td><?php echo $value->alamat_ponpes; ?></td>
						<td><?php
							foreach($provinsi as $x_prov){
									if($value->prov_ponpes == $x_prov->id_propinsi){
										echo $x_prov->nama_propinsi;
									}
								} 
						?></td>
						<td><?php 
								foreach($kota as $x_kota){
									if($value->kab_kota_ponpes == $x_kota->id_kota){
										echo $x_kota->nama_kota;
									}
								} 
						?></td>
						<td><?php echo $value->lama_belajar; ?>&nbsp;Tahun</td>	
					<?php }else if($value->mondok == 'Tidak'){
					?>
						<td><?php echo $value->mondok; ?></td>
						<td><?php echo "-"; ?></td>
						<td><?php echo "-"; ?></td>
						<td><?php echo "-"; ?></td>
						<td><?php echo "-"; ?></td>
						<td><?php echo "-"; ?>&nbsp; Tahun</td>
					<?php }else{ ?>
						<td><?php echo "Data Tidak Ada"; ?></td>
						<td><?php echo "Data Tidak Ada"; ?></td>
						<td><?php echo "Data Tidak Ada"; ?></td>
						<td><?php echo "Data Tidak Ada"; ?></td>
						<td><?php echo "Data Tidak Ada"; ?></td>
						<td><?php echo "Data Tidak Ada"; ?></td>
					<?php } ?>	
			</tr>
			<?php } ?>
		</table>
	</body>
</html>
<?php
	//load footer
	$this->load->view('project_bidikmisi/footer/footer');
?>