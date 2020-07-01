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
				<td>Foto Bagian Depan</td>
				<td>Foto Bagian Kiri</td>
				<td>Foto Bagian Kanan</td>
				<td>Foto PBB</td>
				<td>Foto Rekening Listrik</td>
				<td>Semua Foto</td>
			</tr>

			<?php foreach ($user as $value) { ?>
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
					if($value->upload_foto_rumah_depan == null){
						echo "Data Tidak Ada";
					}else{
					?>
						<a href="<?=base_url().'assets/foto_dokumen/'.$value->upload_foto_rumah_depan; ?>" target="_blank">Lihat</a>
					<?php	
					}
				?></td>
				<td><?php
					if($value->upload_foto_rumah_kiri == null){
						echo "Data Tidak Ada";
					}else{
					?>
						<a href="<?=base_url().'assets/foto_dokumen/'.$value->upload_foto_rumah_kiri; ?>" target="_blank">Lihat</a>
					<?php	
					}
				?></td>
				<td><?php
					if($value->upload_foto_rumah_kanan == null){
						echo "Data Tidak Ada";
					}else{
					?>
						<a href="<?=base_url().'assets/foto_dokumen/'.$value->upload_foto_rumah_kanan; ?>" target="_blank">Lihat</a>
					<?php	
					}
				?></td>
				<td><?php
					if($value->upload_foto_pbb == null){
						echo "Data Tidak Ada";
					}else{
					?>
						<a href="<?=base_url().'assets/foto_dokumen/'.$value->upload_foto_pbb; ?>" target="_blank">Lihat</a>
					<?php	
					}
				?></td>
				<td><?php
					if($value->upload_foto_rek_listrik == null){
						echo "Data Tidak Ada";
					}else{
					?>
						<a href="<?=base_url().'assets/foto_dokumen/'.$value->upload_foto_rek_listrik; ?>" target="_blank">Lihat</a>
					<?php	
					}
				?></td>
				<td><?php
					$depan = $value->upload_foto_rumah_depan;
					$kiri = $value->upload_foto_rumah_kiri;
					$kanan = $value->upload_foto_rumah_kanan;
					$pbb = $value->upload_foto_pbb;
					$rek = $value->upload_foto_rek_listrik;
					if($depan == $kosong && $kiri == $kosong && $kanan == $kosong && $pbb == $kosong && $rek == $kosong){
						echo "Data Tidak Ada";
					}else{
					?>
						<a href="<?php echo base_url()."Auth0/view6_1/".$value->no_pendaftaran; ?>" target="_blank">Lihat</a>
					<?php
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