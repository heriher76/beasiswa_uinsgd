<?php
$kosong = null;
$data_kosong = 'Data Kosong';
echo "<script language='JavaScript' type='text/javascript'>window.print();</script>";
?>
<!DOCTYPE html>
<html>
<head>
		<title>Cetak Laporan Peserta BidikMisi Tahun <?php echo date('Y'); ?></title>
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
<link rel="shortcut icon" href="<?php echo base_url('assets/img/logo-uin-bandung.png'); ?>">
</head>
<body>
	<div class="container-fluid">
		<div class="row">
		    <img src="<?php echo base_url('assets/img/Logo UIN Bandung.png'); ?>" alt="User Image" style="float:left;">
			<div style="font-family: 'Arial'; font-size: 18px;">
				<h3><b>LAPORAN DATA PESERTA <?php echo $title; ?> PROGRAM BIDIKMISI TAHUN <?php echo date('Y'); ?> UNIVERSITAS ISLAM NEGERI SUNAN GUNUNG DJATI BANDUNG</b></h3>
			</div>
			<div class="clear"></div>
			<br>
			<div class="col-md-12">
					<table class="table table-bordered table-striped table-hover">
						<thead style="font-size: 15px;">
							<tr>
								<th>No</th>
								<th>No Pendaftaran</th>
								<th>Nama Mahasiswa</th>
								<th>Ayah</th>
								<th>Ibu</th>
								<th>Fakultas</th>
								<th>Jurusan</th>
								<th>UKT</th>
								<th>Skor</th>
								<th>Status</th>
							</tr>
						</thead>  

						<tbody style="font-size: 14px;">
							<?php 
							$no = 1;
							foreach ($user as $value) { 
								?>
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
									<td><?php
									if($value->almarhum == '40'){
										echo "Almarhum";
									}else{
										echo "Masih Hidup";
									}
									?></td>
									<td><?php
									if($value->almarhumah == '20'){
										echo "Almarhumah";
									}else{
										echo "Masih Hidup";
									}
									?></td>
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
								</tr>
								<?php } ?>
							</tbody>  
					</table>
				</div>
			</div>
		</div>
	</body>
	</html>