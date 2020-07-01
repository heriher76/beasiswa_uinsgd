<?php $this->load->view('project_bidikmisi/header/admin/header'); ?>
<!--include chart.min.js-->
<script src="<?=base_url('assets/adminlte/plugins/chartjs/Chart.bundle.js'); ?>"></script>
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			<i class="fa" aria-hidden="true"></i> Dashboard
			<!-- <small>Control panel</small> -->
		</h1>
	</section>

	<section class="content">
		<div class="row">
			<div class="col-md-4">
				<!-- small box -->
				<div class="small-box bg-aqua">
					<div class="inner">
						<h3><?php echo $jml_peserta; ?></h3>
						<p>Jumlah Peserta</p>
					</div>
					<div class="icon">
						<i class="ion ion-ios-people"></i>
					</div><!-- ./col -->
					<a href="<?=base_url('Auth1/view13'); ?>" class="small-box-footer">Info Selengkapnya <i class="fa fa-arrow-circle-right"></i></a>
				</div>
			</div>
			<div class="col-md-4">
				<!-- small box -->
				<div class="small-box bg-purple">
					<div class="inner">
						<h3><?php echo $jml_pending; ?></sup></h3>
						<p>Pendaftar Pending</p>
					</div>
					<div class="icon">
						<i class="ion ion-android-alarm-clock"></i>
					</div><!-- ./col -->
					<a href="<?=base_url('Auth1/v_report_pending'); ?>" class="small-box-footer">Info Selengkapnya <i class="fa fa-arrow-circle-right"></i></a>
				</div>
			</div>
			<div class="col-md-4">
				<!-- small box -->
				<div class="small-box bg-blue">
					<div class="inner">
						<h3><?php echo $jml_pendaf; ?></sup></h3>
						<p>Pendaftar Beasiswa</p>
					</div>
					<div class="icon">
						<i class="ion ion-person-add"></i>
					</div><!-- ./col -->
					<a href="<?=base_url('Auth1/view1'); ?>" class="small-box-footer">Info Selengkapnya <i class="fa fa-arrow-circle-right"></i></a>
				</div>
			</div>
			<div class="col-md-4">
				<!-- small box -->
				<div class="small-box bg-green">
					<div class="inner">
						<h3><?php echo $sudah_berkas; ?></sup></h3>
						<p>Pendaftar Sudah Pemberkasan</p>
					</div>
					<div class="icon">
						<i class="ion ion-ios-paper"></i>
					</div><!-- ./col -->
					<a href="<?=base_url('Auth1/v_report_sdh_pemberkasan'); ?>" class="small-box-footer">Info Selengkapnya <i class="fa fa-arrow-circle-right"></i></a>
				</div>
			</div>
			<div class="col-md-4">
				<!-- small box -->
				<div class="small-box bg-green">
					<div class="inner">
						<h3><?php echo $jml_lulus; ?></sup></h3>
						<p>Pendaftar Lulus Tahap 1</p>
					</div>
					<div class="icon">
						<i class="ion ion-load-a"></i>
					</div><!-- ./col -->
					<a href="<?=base_url('Auth1/v_report_lulus'); ?>" class="small-box-footer">Info Selengkapnya <i class="fa fa-arrow-circle-right"></i></a>
				</div>
			</div>
			<div class="col-md-4">
				<!-- small box -->
				<div class="small-box bg-purple">
					<div class="inner">
						<h3><?php echo $jml_lulus2; ?></sup></h3>
						<p>Pendaftar Lulus Tahap 2</p>
					</div>
					<div class="icon">
						<i class="ion ion-happy"></i>
					</div><!-- ./col -->
					<a href="<?=base_url('Auth1/v_report_lulus2'); ?>" class="small-box-footer">Info Selengkapnya <i class="fa fa-arrow-circle-right"></i></a>
				</div>
			</div>
			<div class="col-md-4">
				<!-- small box -->
				<div class="small-box bg-yellow">
					<div class="inner">
						<h3><?php echo $belum_berkas; ?></sup></h3>
						<p>Pendaftar Belum Pemberkasan</p>
					</div>
					<div class="icon">
						<i class="ion ion-android-cancel"></i>
					</div><!-- ./col -->
					<a href="<?=base_url('Auth1/v_report_blm_pemberkasan'); ?>" class="small-box-footer">Info Selengkapnya <i class="fa fa-arrow-circle-right"></i></a>
				</div>
			</div>
			<div class="col-md-4">
				<!-- small box -->
				<div class="small-box bg-yellow">
					<div class="inner">
						<h3><?php echo $jml_ver; ?></sup></h3>
						<p>Pendaftar Verifikasi</p>
					</div>
					<div class="icon">
						<i class="ion ion-checkmark"></i>
					</div><!-- ./col -->
					<a href="<?=base_url('Auth1/v_report_verifikasi'); ?>" class="small-box-footer">Info Selengkapnya <i class="fa fa-arrow-circle-right"></i></a>
				</div>
			</div>
			<div class="col-md-4">
				<!-- small box -->
				<div class="small-box bg-red">
					<div class="inner">
						<h3><?php echo $jml_tlulus; ?></sup></h3>
						<p>Pendaftar Tidak Lulus</p>
					</div>
					<div class="icon">
						<i class="ion ion-sad"></i>
					</div><!-- ./col -->
					<a href="<?=base_url('Auth1/v_report_tdk_lulus'); ?>" class="small-box-footer">Info Selengkapnya <i class="fa fa-arrow-circle-right"></i></a>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-md-6">
				<div class="box md-3">
					<div class="box-body">
						<h3>Jadwal Beasiswa KIP-K</h3>

						<div class="box md-3">
							<div class="box-body">
								<div class="inner">
									<?php foreach($jadwal as $value) { ?>
									<h4>Hari/Tanggal Buka Sistem Beasiswa KIP-K</sup></h4>
									<p><?php echo tgl_indonesia($value->tanggal_buka_sistem); ?></p>
								</div>
							</div>
						</div>
						<div class="box md-3">
							<div class="box-body">
								<div class="inner">
									<h4>Hari/Tanggal Tutup Sistem Beasiswa KIP-K</sup></h4>
									<p><?php echo tgl_indonesia($value->tanggal_tutup_sistem); ?></p>
								</div>
							</div>
						</div>
						<div class="box md-3">
							<div class="box-body">
								<div class="inner">
									<h4>Hari/Tanggal Buka Pendaftaran Beasiswa KIP-K</sup></h4>
									<p><?php echo tgl_indonesia($value->tanggal_buka); ?></p>
								</div>
							</div>
						</div>
						<div class="box md-3">
							<div class="box-body">
								<div class="inner">
									<h4>Hari/Tanggal Tutup Pendaftaran Beasiswa KIP-K</sup></h4>
									<p><?php echo tgl_indonesia($value->tanggal_tutup); ?></p>
								</div>
							</div>
						</div>
						<div class="box md-3">
							<div class="box-body">
								<div class="inner">
									<h4>Hari/Tanggal Pengumuman Kelulusan Beasiswa KIP-K</sup></h4>
									<p><?php echo tgl_indonesia($value->tanggal_pengumuman); ?></p>
								</div>
							</div>
						</div>
						<div class="box md-3">
							<div class="box-body">
								<div class="inner">
									<h4>Hari/Tanggal Tutup Pengumuman Kelulusan Beasiswa KIP-K</sup></h4>
									<p><?php echo tgl_indonesia($value->tanggal_tutup_pengumuman); ?></p>
									<?php } ?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>


			<div class="col-sm-6">
				<div class="box">
					<div class="box-header">
						<h3 class="box-title">Kuota Per-Fakultas untuk Pendaftar Lulus</h3>
					</div>
					<div class="box-body">
						<table class="table table-bordered">
							<thead>
								<tr>
									<th>No</th>
									<th>Fakultas</th>
									<th>Kuota</th>
								</tr>
							</thead>
							<tbody>
								<?php
								$no = 1;
								foreach($kuota as $value) {
									?>
									<tr>
										<td><?php echo $no++; ?></td>
										<td><?php echo $value->fakultas; ?></td>
										<td><?php echo $value->kuota; ?></td>
										<?php } ?>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-sm-12">
					<div class="box">
						<div class="box-header">
							<h3 class="box-title">Grafik Beasiswa KIP-K Tahun <?php echo date('Y'); ?></h3>
						</div>
						<div class="box-body">
							<canvas id="myChart"></canvas>
							<script type="text/javascript">
								var ctx = document.getElementById("myChart");
								var myChart = new Chart(ctx, {
									type: 'bar',
									data: {
										labels: ["USHULUDDIN", "TARBIYAH DAN KEGURUAN", "SYARIAH DAN HUKUM", "DAKWAH DAN KOMUNIKASI", "ADAB DAN HUMANIORA", "PSIKOLOGI","SAINS DAN TEKNOLOGI","ILMU SOSIAL DAN ILMU POLITIK","EKONOMI DAN BISNIS ISLAM"],
										datasets: [{
											label: 'Pendaftar Beasiswa KIP-K',
											data: [
											<?php echo $f1;?>,
											<?php echo $f2;?>,
											<?php echo $f3;?>,
											<?php echo $f4;?>,
											<?php echo $f5;?>,
											<?php echo $f6;?>,
											<?php echo $f7;?>,
											<?php echo $f8;?>,
											<?php echo $f9;?>
											],
											backgroundColor: [
											'rgba(255, 99, 132, 0.2)',
											'rgba(0, 255, 0, 0.2)',
											'rgba(150,75,0, 0.2)',
											'rgba(75, 192, 192, 0.2)',
											'rgba(153, 102, 255, 0.2)',
											'rgba(192,	192,192, 0.2)',
											'rgba(255,215,0, 0.2)',
											'rgba(255,127,0, 0.2)',
											],
											borderColor: [
											'rgba(255,99,132,1)',
											'rgba(0, 255, 0, 1)',
											'rgba(150,75,0, 1)',
											'rgba(75, 192, 192, 1)',
											'rgba(153, 102, 255, 1)',
											'rgba(192,	192,192, 1)',
											'rgba(255,215,0, 1)',
											'rgba(255,127,0, 1)',
											'rgba(255,127,0, 1)',
											],
											borderWidth: 1
										}]
									},
									options: {
										scales: {
											yAxes: [{
												ticks: {
													beginAtZero: true
												}
											}]
										}
									}
								});

							</script>
						</div>
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
