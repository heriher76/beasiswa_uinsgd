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
				<td>Nama Ayah</td>
				<td>Nama Ibu</td>
				<td>Alamat Ortu</td>
				<td>Provinsi Ortu</td>
				<td>Kab/Kota Ortu</td>
				<td>Kode Pos Ortu</td>
				<td>No Telp/Hp Ortu</td>
				<td>Pekerjaan Ayah</td>
				<td>Pekerjaan Ibu</td>
				<td>Pendidikan Ayah</td>
				<td>Pendidikan Ibu</td>
				<td>Penghasilan Ayah</td>
				<td>Nominal Penghasilan Ayah</td>
				<td>Penghasilan Ibu</td>
				<td>Nominal Penghasilan Ibu</td>
				<td>Tanggungan Ortu</td>
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
					if($value->nama_ayah != null){
						echo $value->nama_ayah;
						if($value->almarhum == '40'){
							echo "&nbsp;&nbsp;(Almarhum)";
						}else{
							echo "";
						}
					}else{
						echo "Data Tidak Ada";
					}
				?></td>
				<td><?php
					if($value->nama_ibu != null){
						echo $value->nama_ibu;
						if($value->almarhumah == '20'){
							echo "&nbsp;&nbsp;(Almarhumah)";
						}else{
							echo "";
						}
					}else{
						echo "Data Tidak Ada";
					}
				?></td>
				<td><?php  
					if($value->alamat_ortu == null){
						echo "Data Tidak Ada";
					}else{
						echo $value->alamat_ortu;
					}
				?></td>
				<td><?php
					foreach($provinsi as $x_prov){
							if($value->provinsi_ortu == $x_prov->id_propinsi){
								echo $x_prov->nama_propinsi;
							}
						}
						if($value->provinsi_ortu == null || $value->provinsi_ortu == '0'){
							echo "Data Tidak Ada";
						} 
				?></td>
				<td><?php 
						foreach($kota as $x_kota){
							if($value->kab_kota_ortu == $x_kota->id_kota){
								echo $x_kota->nama_kota;
							}
						}
						if($value->kab_kota_ortu == null || $value->kab_kota_ortu == '0'){
							echo "Data Tidak Ada";
						}  
				?></td>
				<td><?php 
					if($value->kode_pos_ortu == null || $value->kode_pos_ortu == '0'){
						echo "Data Tidak Ada";
					}else{
						echo $value->kode_pos_ortu; 
					}
				?></td>
				<td><?php 
					if($value->no_telp_ortu == null || $value->no_telp_ortu == '0'){
						echo "Data Tidak Ada";
					}else{
						echo $value->no_telp_ortu;
					}
				?></td>
				<td><?php 
					if($value->pekerjaan_ayah == '1'){
						echo "PNS/TNI/POLRI";
					?>	
					<?php		
					}else if($value->pekerjaan_ayah == '2'){
						echo "Wiraswasta";
					?>
					<?php
					}else if($value->pekerjaan_ayah == '3'){
						echo "Tukang";
					?>
					<?php
					}else if($value->pekerjaan_ayah == '4'){
						echo "Buruh Tani/Petani";
					}else{
						echo "Data Tidak Ada";
					}
					?></td>
				<td><?php 
					if($value->pekerjaan_ibu == 'PNS/TNI/POLRI'){
						echo "PNS/TNI/POLRI";
					?>	
					<?php		
					}else if($value->pekerjaan_ibu == 'Wiraswasta'){
						echo "Wiraswasta";
					?>
					<?php
					}else if($value->pekerjaan_ibu == 'Ibu Rumah Tangga'){
						echo "Ibu Rumah Tangga";
					}else if($value->pekerjaan_ibu == 'Buruh Tani/Petani'){
						echo "Buruh Tani/Petani";
					}else{
						echo "Data Tidak Ada";
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
					}else{
						echo "Data Tidak Ada";
					}
				?></td>
				<td><?php  
					if($value->pendidikan_ibu == null || $value->pendidikan_ibu == '0'){
						echo "Data Tidak Ada";
					}else{
						echo $value->pendidikan_ibu;
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
			</tr>
			<?php } ?>
		</table>
	</body>
</html>
<?php
	//load footer
	$this->load->view('project_bidikmisi/footer/footer');
?>