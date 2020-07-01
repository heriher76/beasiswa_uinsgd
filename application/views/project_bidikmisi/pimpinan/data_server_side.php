<?php 
$kosong = null;
$data_kosong = 'Data Kosong';
$this->load->view('project_bidikmisi/header/pimpinan/head');
?>
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			<i class="fa fa-tachometer" aria-hidden="true"></i> Daftar Seluruh Peserta
		</h1>
	</section>

	<section class="content">
		<div class="row">
			<div class="col-md-12">
				<div class="box">
					<div class="box-header">
						<h3 class="box-title">Data Peserta</h3>
					</div>
					
					<div class="box-body">
						<table id="data_server_side2" class="display table table-responsive table-bordered table-stripped">
							<thead style="font-size: 15px;">
								<tr>
									<th>No</th>
									<th>No Pendaftaran</th>
									<th>Nama</th>
									<th>Jenis Kelamin</th>
									<th>Tanggal Lahir</th>
									<th>Tempat Lahir</th>
									<th>E-mail</th>
									<th>UKT</th>
									<th>Skor</th>
									<th>Status</th>
								</tr>
							</thead>  

							<tbody style="font-size: 14px;">
							</tbody>

							<tfoot style="font-size: 15px;">
								<tr>
									<th>No</th>
									<th>No Pendaftaran</th>
									<th>Nama</th>
									<th>Jenis Kelamin</th>
									<th>Tanggal Lahir</th>
									<th>Tempat Lahir</th>
									<th>E-mail</th>
									<th>UKT</th>
									<th>Skor</th>
									<th>Status</th>
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