<?php
$kosong = null;
$data_kosong = 'Data Kosong';
echo "<script language='JavaScript' type='text/javascript'>window.print();</script>";
foreach($data_mhs as $value) {
?>
<!DOCTYPE html>
<html>
	<head>
		<link rel="shortcut icon" href="<?php echo base_url('assets/img/logo-uin-bandung.png'); ?>">
		<?php if($param == 'rumah_depan') { ?>
		<title>Cetak Dokumen Rumah Depan <?php echo $value->no_pendaftaran; ?> Beasiswa KIP-K Tahun <?php echo date('Y'); ?></title>
		<?php }else if($param == 'kartu_kipk') { ?>
		<title>Cetak Dokumen Kartu KIP-K <?php echo $value->no_pendaftaran; ?> Beasiswa KIP-K Tahun <?php echo date('Y'); ?></title>
		<?php }else if($param == 'rumah_kiri') { ?>
		<title>Cetak Dokumen Rumah Kiri <?php echo $value->no_pendaftaran; ?> Beasiswa KIP-K Tahun <?php echo date('Y'); ?></title>
		<?php }else if($param == 'rumah_kanan') { ?>
		<title>Cetak Dokumen Rumah Kanan <?php echo $value->no_pendaftaran; ?> Beasiswa KIP-K Tahun <?php echo date('Y'); ?></title>
		<?php }else if($param == 'rumah_dalam') { ?>
		<title>Cetak Dokumen Rumah Dalam <?php echo $value->no_pendaftaran; ?> Beasiswa KIP-K Tahun <?php echo date('Y'); ?></title>
		<?php }else if($param == 'pbb') { ?>
		<title>Cetak Dokumen PBB <?php echo $value->no_pendaftaran; ?> Beasiswa KIP-K Tahun <?php echo date('Y'); ?></title>
		<?php }else if($param == 'rek_listrik') { ?>
		<title>Cetak Dokumen Rekening Listrik <?php echo $value->no_pendaftaran; ?> Beasiswa KIP-K Tahun <?php echo date('Y'); ?></title>
		<?php }else if($param == 'ktp') { ?>
		<title>Cetak Dokumen KTP <?php echo $value->no_pendaftaran; ?> Beasiswa KIP-K Tahun <?php echo date('Y'); ?></title>
		<?php }else if($param == 'kk') { ?>
		<title>Cetak Dokumen Kartu Keluarga <?php echo $value->no_pendaftaran; ?> Beasiswa KIP-K Tahun <?php echo date('Y'); ?></title>
		<?php }else if($param == 'all_foto') { ?>
		<title>Cetak Semua Dokumen <?php echo $value->no_pendaftaran; ?> Beasiswa KIP-K Tahun <?php echo date('Y'); ?></title>
		<?php } ?>
	</head>

	<body>
		<?php if($param == 'rumah_depan') { ?>
		<h3>Rumah Bagian Depan <?php echo $value->nama_mahasiswa; ?></h3>
		<img style="width:1000px;" src="<?=base_url().'assets/foto_dokumen/'.$value->upload_foto_rumah_depan; ?>">
		<?php }else if($param == 'rumah_kiri') { ?>
		<h3>Rumah Bagian Kiri <?php echo $value->nama_mahasiswa; ?></h3>
		<img style="width:1000px;" src="<?=base_url().'assets/foto_dokumen/'.$value->upload_foto_rumah_kiri; ?>">
		<?php }else if($param == 'kartu_kipk') { ?>
		<h3>Kartu KIP-K <?php echo $value->nama_mahasiswa; ?></h3>
		<img style="width:1000px;" src="<?=base_url().'assets/foto_dokumen/'.$value->upload_foto_kipk; ?>">
		<?php }else if($param == 'rumah_kanan') { ?>
		<h3>Rumah Bagian Kanan <?php echo $value->nama_mahasiswa; ?></h3>
		<img style="width:1000px;" src="<?=base_url().'assets/foto_dokumen/'.$value->upload_foto_rumah_kanan; ?>">
		<?php }else if($param == 'rumah_dalam'){?>
		<h3>Rumah Bagian Dalam <?php echo $value->nama_mahasiswa; ?></h3>
		<img style="width:1000px;" src="<?=base_url().'assets/foto_dokumen/'.$value->upload_foto_rumah_dalam; ?>">
		<?php }else if($param == 'pbb') { ?>
		<h3>Pajak Bumi Bangunan (PBB) <?php echo $value->nama_mahasiswa; ?></h3>
		<img style="width:1000px;" src="<?=base_url().'assets/foto_dokumen/'.$value->upload_foto_pbb; ?>">
		<?php }else if($param == 'rek_listrik') { ?>
		<h3>Rekening Listrik <?php echo $value->nama_mahasiswa; ?></h3>
		<img style="width:1000px;" src="<?=base_url().'assets/foto_dokumen/'.$value->upload_foto_rek_listrik; ?>">
		<?php }else if($param == 'ktp') { ?>
		<h3>KTP <?php echo $value->nama_mahasiswa; ?></h3>
		<img style="width:1000px;" src="<?=base_url().'assets/foto_dokumen/'.$value->upload_foto_ktp; ?>">
		<?php }else if($param == 'kk') { ?>
		<h3>Kartu Keluarga <?php echo $value->nama_mahasiswa; ?></h3>
		<img style="width:1000px;" src="<?=base_url().'assets/foto_dokumen/'.$value->upload_foto_kk; ?>">
		<?php }else if($param == 'all_foto') { ?>
		<h3>Semua Dokumen <?php echo $value->nama_mahasiswa; ?></h3>
		<img style="width:1000px;" src="<?=base_url().'assets/foto_dokumen/'.$value->upload_foto_rumah_depan; ?>">
		<br/>
		<br/>
		<img style="width:1000px;" src="<?=base_url().'assets/foto_dokumen/'.$value->upload_foto_rumah_kiri; ?>">
		<br/>
		<br/>
		<img style="width:1000px;" src="<?=base_url().'assets/foto_dokumen/'.$value->upload_foto_rumah_kanan; ?>">
		<br/>
		<br/>
		<img style="width:1000px;" src="<?=base_url().'assets/foto_dokumen/'.$value->upload_foto_rumah_dalam; ?>">
		<br/>
		<br/>
		<img style="width:1000px;" src="<?=base_url().'assets/foto_dokumen/'.$value->upload_foto_pbb; ?>">
		<br/>
		<br/>
		<img style="width:1000px;" src="<?=base_url().'assets/foto_dokumen/'.$value->upload_foto_rek_listrik; ?>">
		<br/>
		<br/>
		<img style="width:1000px;" src="<?=base_url().'assets/foto_dokumen/'.$value->upload_foto_ktp; ?>">
		<br/>
		<br/>
		<img style="width:1000px;" src="<?=base_url().'assets/foto_dokumen/'.$value->upload_foto_kk; ?>">
		<?php }else{ ?>
		<h1>Data Kosong</h1>
		<?php } ?>
	</body>
	<?php } ?>
</html>