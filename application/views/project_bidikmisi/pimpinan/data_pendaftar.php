<?php
	//load head
$kosong = null;
$data_kosong = 'Data Kosong';
$this->load->view('project_bidikmisi/header/pimpinan/head');
echo $this->session->flashdata('status');
?>
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			<i class="fa fa-tachometer" aria-hidden="true"></i> Daftar Peserta
		</h1>
	</section>

	<section class="content">
		<div class="row">
			<div class="col-md-12">
				<div class="box">
					<div class="box-header">
						<h3 class="box-title">Data Peserta <?php echo $parameter_judul; ?></h3>
					</div>
					
					<div class="box-body">
						<table id="pendaftar" class="table table-bordered table-striped">
							<thead style="font-size: 15px;">
								<tr>
									<th>No</th>
									<th>No Pendaftaran</th>
									<th>Nama</th>
									<th>Fakultas</th>
									<th>Jurusan</th>
									<th>Skor</th>
									<th>Status</th>
									<th>Aksi</th>
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
										<td>
											<a class="btn btn-primary btn-sm col-md-12" href="<?=base_url().'Auth0/view5/'.sha1(md5(sha1(md5(sha1($value->no_pendaftaran))))); ?>">
												<span class="glyphicon glyphicon-user"></span>
												Lihat
											</a>
											
											<?php if($parameter_judul == 'pendaftar bidikmisi') { ?>
												<?php if($value->pemberkasan == 0) { ?>
												<a class="btn btn-warning btn-sm col-md-12" onclick="javascript: return confirm('Anda yakin ingin merubah menjadi sudah pemberkasan ?')" href="<?=base_url().'Auth0/berkas/'.sha1(md5(sha1(md5(sha1($value->no_pendaftaran))))); ?>">
													<span class="glyphicon glyphicon-remove"></span>
													Belum Pemberkasan
												</a>
												<?php }else if($value->pemberkasan) { ?>
												<a class="btn btn-success btn-sm col-md-12" onclick="javascript: return confirm('Anda yakin ingin merubah menjadi belum pemberkasan ?')" href="<?=base_url().'Auth0/berkas/'.sha1(md5(sha1(md5(sha1($value->no_pendaftaran))))); ?>">
													<span class="glyphicon glyphicon-ok"></span>
													Sudah Pemberkasan
												</a>
												<?php } ?>
											<?php } ?>
										</td>
									</tr>
									<?php } ?>
								</tbody>

								<tfoot style="font-size: 15px;">
									<tr>
										<th>No</th>
										<th>No Pendaftaran</th>
										<th>Nama</th>
										<th>Fakultas</th>
										<th>Jurusan</th>
										<th>Skor</th>
										<th>Status</th>
										<th>Aksi</th>
									</tr>
								</tfoot>
							</table>
						</div>

					</div>
				</div>
			</div>
		</section>
	</div>
	<!--end wrapper-->

	<?php
	//load footer
	$this->load->view('project_bidikmisi/footer/footer');
	?>
</body>
</html>