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
				<td>Kartu Peserta Tahun <?php echo date('Y'); ?></td>
				<td>Formulir Pedaftaran Bidik Misi yang telah diisi</td>
				<td>Surat Keterangan Lulus dari Kepela Sekolah</td>
				<td>Fotocopy Raport Semester 1-6 yang dilegalisir Kepala Sekolah</td>
				<td>Fotocopy Ijazah yang dilegalisir Kepala Sekolah</td>
				<td>Fotocopy Nilai Ujian Akhir Nasional yang dilegalisir Kepala Sekolah</td>
				<td>Surat Keterangan Prestasi dan Bukti Pendukung Prestasi yang dilegalisir Kepala Sekolah</td>
				<td>Surat Keterangan Penghasilan Ortu/Wali atau Surat Keterangan Tidak Mampu yang dikeluarkan Kepala Desa/Dusun/Instansi/Tokoh Masyarakat</td>
				<td>Fotocopy Kartu Keluarga atau Surat Keterangan Susunan Keluarga</td>
				<td>Fotocopy Rekening Listrik Bulan Terakhir (bila tersedia listrik)</td>
				<td>Fotocopy Bukti Pembayaran PBB Tahun Terakhir</td>
				<td>Melengkapi data foto rumah dari 3(tiga) sudut</td>
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
					if($value->kartu_tes == $kosong){
						echo "Data Tidak Ada";
					}else{
						echo $value->kartu_tes;
					}
				?></td>
				<td><?php 
					if($value->formulir_pendaftaran == $kosong){
						echo "Data Tidak Ada";
					}else{
						echo $value->formulir_pendaftaran;
					}
				?></td>
				<td><?php
					if($value->surat_ket_lulus == $kosong){
						echo "Data Tidak Ada";
					}else{
						echo $value->surat_ket_lulus;
					}
				?></td>
				<td><?php
					if($value->fotocopy_raport_semester == $kosong){
						echo "Data Tidak Ada";
					}else{
						echo $value->fotocopy_raport_semester;
					}
				?></td>
				<td><?php
					if($value->fotocopy_ijazah == $kosong){
						echo "Data Tidak Ada";
					}else{
						echo $value->fotocopy_ijazah;
					}
				?></td>
				<td><?php
					if($value->fotocopy_nilai_uan == $kosong){
						echo "Data Tidak Ada";
					}else{
						echo $value->fotocopy_nilai_uan;
					}
				?></td>
				<td><?php
					if($value->surat_ket_prestasi == $kosong){
						echo "Data Tidak Ada";
					}else{
						echo $value->surat_ket_prestasi;
					}
				?></td>
				<td><?php
					if($value->surat_ket_peng_ortu == $kosong){
						echo "Data Tidak Ada";
					}else{
						echo $value->surat_ket_peng_ortu;
					}
				?></td>
				<td><?php
					if($value->fotocopy_kk == $kosong){
						echo "Data Tidak Ada";
					}else{
						echo $value->fotocopy_kk;
					}
				?></td>
				<td><?php
					if($value->fotocopy_rek_listrik == $kosong){
						echo "Data Tidak Ada";
					}else{
						echo $value->fotocopy_rek_listrik;
					}
				?></td>
				<td><?php
					if($value->fotocopy_pbb == $kosong){
						echo "Data Tidak Ada";
					}else{
						echo $value->fotocopy_pbb;
					}
				?></td>
				<td><?php
					if($value->foto_rumah_tiga_sudut == $kosong){
						echo "Data Tidak Ada";
					}else{
						echo $value->foto_rumah_tiga_sudut;
					}
				?></td>
			</tr>
			<?php } ?>
		</table>
	</body>
</html>