<?php
	$this->load->view('project_bidikmisi/header/admin/header');
?>
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			Insert Data Excel Data Lulus
		</h1>
	</section>

	<section class="content">
		<div class="row">
			<div class="col-md-12">
				<div class="box">
					<div class="box-header">
						<h3 class="box-title">Form Import Data Lulus Tahap 2</h3>
						<a href="<?=base_url('assets/format_excel/format_excel_insert_data_lulus_bidikmisi.rar'); ?>">  Download Format Excel Untuk Data Lulus</a>
					</div>
					<div class="box-body">
						<form method="POST" action="<?=base_url('Auth1/form3'); ?>" enctype="multipart/form-data">
							<div class="form-group">
								<input type="file" name="file"/>
							</div>
							<button type="submit" class="btn btn-success" name="preview3">Preview Data Lulus</button>
						</form>
					</div>

					<?php
					if(isset($_POST['preview3'])){
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

							echo "<div class='col-md-offset-8'>";
							echo "<button class='btn btn-success' style='margin-bottom:10px; margin-right:10px;' type='submit' name='import3'>Import Data Lulus</button>";
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
