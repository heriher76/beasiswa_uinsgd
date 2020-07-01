<?php
	$this->load->view('project_bidikmisi/header/admin/header');
?>
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			Insert Data Excel
		</h1>
	</section>

	<section class="content">
		<div class="row">
			<div class="col-md-8">
				<div class="box">
					<div class="box-header">
						<h3 class="box-title">Form Insert Data Excel</h3>
						<a href="<?=base_url('assets/format_excel/format_excel_insert_data_mhs.rar'); ?>">  Download Format Excel Untuk Insert Data</a>
					</div>
					<div class="box-body">
						<form method="POST" action="<?=base_url('Auth1/form'); ?>" enctype="multipart/form-data">
							<div class="form-group">
								<input type="file" name="file"/>
							</div>
							<button type="submit" class="btn btn-primary" name="preview">Preview Data Insert</button>
						</form>
					</div>

					<?php
					if(isset($_POST['preview'])){
						if(isset($upload_error)){
							echo "<div style='color: red;'>".$upload_error."</div>";
							echo "</div>";
							echo "</div>";
							echo "</div>";
							echo "</section>";
							echo "</div>";
							$this->load->view('project_bidikmisi/footer/footer');
							die;
						}

						echo "<form method='POST' action='".base_url('Auth1/import')."' enctype='multipart/form-data'>";
						echo "<div class='alert alert-danger' style='text-align:center;' id='kosong'> Semua Data Belum Terisi, Ada <span id='jumlah_kosong'></span> Data yang belum terisi.
						</div>";
						echo "<table class='table table-bordered table-striped' style='margin-bottom:10px;'>
						<tr>
							<th style='text-align:center;' colspan='8'>PREVIEW DATA MAHASISWA</th>
						</tr>

						<tr>
							<th>No Pendaftaran</th>
							<th>Nama Mahasiswa</th>
							<th>Jenis Kelamin</th>
							<th>Tanggal Lahir</th>
							<th>Jalur Pendaftaran</th>
							<th>Fakultas</th>
							<th>Jurusan</th>
							<th>Kategori UKT</th>
						</tr>";

						$numrow = 1;
						$kosong = 0;

						foreach($sheet as $row){
							$no_pendaftaran = $row['A'];
							$nama_mahasiswa = $row['B'];
							$jenis_kelamin = $row['C'];
							$tgl_lahir = strtotime(PHPExcel_Style_NumberFormat::toFormattedString($row['D'], 'YYYY-MM-DD' ));
							$new_tgl_lahir = date('Y-m-d', $tgl_lahir);
							$jalur_pendaftaran = $row['E'];
							$fakultas = $row['F'];
							$jurusan = $row['G'];
							$kategori = $row['H'];

							if(empty($no_pendaftaran) && empty($nama_mahasiswa) && empty($jenis_kelamin) && empty($tgl_lahir) && empty($jalur_pendaftaran) && empty($fakultas) && empty($jurusan) && empty($kategori))
								continue;

							if($numrow > 1){
								$no_pendaftaran_td = ( ! empty($no_pendaftaran))? "" : " style='background: red;'";
								$nama_mahasiswa_td = ( ! empty($nama_mahasiswa))? "" : " style='background: red;'";
								$jenis_kelamin_td = ( ! empty($jenis_kelamin))? "" : " style='background: red;'";
								$tgl_lahir_td = (! empty($tgl_lahir))? "" : " style='background: red;'";
								$jalur_pendaftaran_td = ( ! empty($jalur_pendaftaran))? "" : " style='background: red;'";
								$fakultas_td = ( ! empty($fakultas))? "" : " style='background: red;'";
								$jurusan_td = ( ! empty($jurusan))? "" : " style='background: red;'";
								$kategori_td = ( ! empty($kategori))? "" : " style='background: red;'";

								if(empty($no_pendaftaran) or empty($nama_mahasiswa) or empty($jenis_kelamin) or empty($tgl_lahir) or empty($jalur_pendaftaran) or empty($fakultas) or empty($jurusan) or empty($kategori)) {
									$kosong++;
								}

								echo "<tr>";
									echo "<td".$no_pendaftaran_td.">".$no_pendaftaran."</td>";
									echo "<td".$nama_mahasiswa_td.">".$nama_mahasiswa."</td>";
									echo "<td".$jenis_kelamin_td.">".$jenis_kelamin."</td>";
									echo "<td".$tgl_lahir_td.">".$new_tgl_lahir."</td>";
									echo "<td".$jalur_pendaftaran_td.">".$jalur_pendaftaran."</td>";
									echo "<td".$fakultas_td.">".$fakultas."</td>";
									echo "<td".$jurusan_td.">".$jurusan."</td>";
									echo "<td".$kategori_td.">".$kategori."</td>";
								echo "</tr>";
							}
							$numrow++;
						}
						echo "</table>";

						if($kosong > 1 || $kosong == 1){
							?>
							<script>
								$(document).ready(function(){
									$('#jumlah_kosong').html('<?php echo $kosong; ?>');
									$('#kosong').show();
								});
							</script>
							<?php
						}else{
							?>
							<script>
								$(document).ready(function(){
									$('#kosong').hide();
								});
							</script>
							<?php
							echo "<hr>";

							echo "<div class='col-md-offset-8'>";
							echo "<button class='btn btn-primary' style='margin-bottom:10px; margin-right:10px;' type='submit' name='import'>Import Insert Data</button>";
							echo "<a class='btn btn-default' style='margin-bottom:10px;' href='".base_url("Auth1/form")."'>Batal</a>";
							echo "</div>";
						}
						echo "</form>";
					}
					?>
				</div>
			</div>

			<div class="col-md-4">
				<div class="box">
					<div class="box-header">
						<h3 class="box-title">Form Import Data Lulus Tahap 1</h3>
						<a href="<?=base_url('assets/format_excel/format_excel_insert_data_lulus_bidikmisi.rar'); ?>">  Download Format Excel Untuk Data Lulus</a>
					</div>
					<div class="box-body">
						<form method="POST" action="<?=base_url('Auth1/form'); ?>" enctype="multipart/form-data">
							<div class="form-group">
								<input type="file" name="file"/>
							</div>
							<button type="submit" class="btn btn-danger" name="preview2">Preview Data Lulus</button>
						</form>
					</div>

					<?php
					if(isset($_POST['preview2'])){
						if(isset($upload_error)){
							echo "<div style='color: red;'>".$upload_error."</div>";
							echo "</div>";
							echo "</div>";
							echo "</div>";
							echo "</section>";
							echo "</div>";
							$this->load->view('project_bidikmisi/footer/footer');
							die;
						}

						echo "<form method='POST' action='".base_url('Auth1/import')."' enctype='multipart/form-data'>";
						echo "<div class='alert alert-danger' style='text-align:center;' id='kosong'> Semua Data Belum Terisi, Ada <span id='jumlah_kosong'></span> Data yang belum terisi.
						</div>";
						echo "<table class='table table-bordered table-striped' style='margin-bottom:10px;'>
						<tr>
							<th style='text-align:center;' colspan='2'>PREVIEW DATA MAHASISWA</th>
						</tr>

						<tr>
							<th>No Pendaftaran</th>
						</tr>";

						$numrow = 1;
						$kosong = 0;

						foreach($sheet as $row){
							$no_pendaftaran = $row['A'];

							if(empty($no_pendaftaran))
								continue;

							if($numrow > 1){
								$no_pendaftaran_td = ( ! empty($no_pendaftaran))? "" : " style='background: red;'";

								if(empty($no_pendaftaran)) {
									$kosong++;
								}

								echo "<tr>";
									echo "<td".$no_pendaftaran_td.">".$no_pendaftaran."</td>";
								echo "</tr>";
							}
							$numrow++;
						}
						echo "</table>";

						if($kosong > 1 || $kosong == 1){
							?>
							<script>
								$(document).ready(function(){
									$('#jumlah_kosong').html('<?php echo $kosong; ?>');
									$('#kosong').show();
								});
							</script>
							<?php
						}else{
							?>
							<script>
								$(document).ready(function(){
									$('#kosong').hide();
								});
							</script>
							<?php
							echo "<hr>";

							echo "<div class='col-md-offset-5'>";
							echo "<button class='btn btn-danger' style='margin-bottom:10px; margin-right:10px;' type='submit' name='import2'>Import Data Lulus</button>";
							echo "<a class='btn btn-default' style='margin-bottom:10px;' href='".base_url("Auth1/form")."'>Batal</a>";
							echo "</div>";
						}
						echo "</form>";
					}
					?>
				</div>
			</div>

			<div class="col-md-6">
				<div class="box">
					<div class="box-header">
						<h3 class="box-title">Form Import Data Pemberkasan</h3>
						<a href="<?=base_url('assets/format_excel/format_excel_insert_data_berkas.rar'); ?>">  Download Format Excel Untuk Data Pemberkasan</a>
					</div>
					<div class="box-body">
						<form method="POST" action="<?=base_url('Auth1/form'); ?>" enctype="multipart/form-data">
							<div class="form-group">
								<input type="file" name="file"/>
							</div>
							<button type="submit" class="btn btn-success" name="preview_berkas">Preview Data Berkas</button>
						</form>
					</div>

					<?php
					if(isset($_POST['preview_berkas'])){
						if(isset($upload_error)){
							echo "<div style='color: red;'>".$upload_error."</div>";
							echo "</div>";
							echo "</div>";
							echo "</div>";
							echo "</section>";
							echo "</div>";
							$this->load->view('project_bidikmisi/footer/footer');
							die;
						}

						echo "<form method='POST' action='".base_url('Auth1/import')."' enctype='multipart/form-data'>";
						echo "<div class='alert alert-danger' style='text-align:center;' id='kosong'> Semua Data Belum Terisi, Ada <span id='jumlah_kosong'></span> Data yang belum terisi.
						</div>";
						echo "<table class='table table-bordered table-striped' style='margin-bottom:10px;'>
						<tr>
							<th style='text-align:center;' colspan='2'>PREVIEW DATA MAHASISWA</th>
						</tr>

						<tr>
							<th>No Pendaftaran</th>
						</tr>";

						$numrow = 1;
						$kosong = 0;

						foreach($sheet as $row){
							$no_pendaftaran = $row['A'];

							if(empty($no_pendaftaran))
								continue;

							if($numrow > 1){
								$no_pendaftaran_td = ( ! empty($no_pendaftaran))? "" : " style='background: red;'";

								if(empty($no_pendaftaran)) {
									$kosong++;
								}

								echo "<tr>";
									echo "<td".$no_pendaftaran_td.">".$no_pendaftaran."</td>";
								echo "</tr>";
							}
							$numrow++;
						}
						echo "</table>";

						if($kosong > 1 || $kosong == 1){
							?>
							<script>
								$(document).ready(function(){
									$('#jumlah_kosong').html('<?php echo $kosong; ?>');
									$('#kosong').show();
								});
							</script>
							<?php
						}else{
							?>
							<script>
								$(document).ready(function(){
									$('#kosong').hide();
								});
							</script>
							<?php
							echo "<hr>";

							echo "<div class='col-md-offset-5'>";
							echo "<button class='btn btn-success' style='margin-bottom:10px; margin-right:10px;' type='submit' name='import_berkas'>Import Data Berkas</button>";
							echo "<a class='btn btn-default' style='margin-bottom:10px;' href='".base_url("Auth1/form")."'>Batal</a>";
							echo "</div>";
						}
						echo "</form>";
					}
					?>
				</div>
			</div>
		</div>
	</section>
</div>
<!--end wrapper-->
<div class="col-md-12 panel-footer" style="background-color: #00a65a !important; width: 100%; left: 0px;">
	<div class="footer text-center" style="color:grey; font-size: 12px;">
		<?php $this->load->view('project_bidikmisi/footer/footer'); ?>
	</div>
</div>

<style type="text/css">
	.main-footer {
		background-color: #00a65a !important; left: 0px;
		padding: 0 !important;
	}
</style>
</body>
</html>
