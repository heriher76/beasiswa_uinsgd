<?php
$kosong = null;
$data_kosong = 'Data Kosong';
$this->load->view('project_bidikmisi/header/admin/header');
?>
<!--include chart.min.js-->
<script src="<?=base_url('assets/adminlte/plugins/chartjs/Chart.bundle.js'); ?>"></script>

<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			<i class="fa fa-tachometer" aria-hidden="true"></i> Daftar Report Beasiswa KIP-K
		</h1>
	</section>

	<section class="content">
		<div class="row">
			<div class="col-md-12">
				<div class="box">
					<div class="box-header">
						<h3 class="box-title">Data Mahasiswa Report</h3>
					</div>

					<div class="box-body">
						<table id="mytable" class="table table-responsive table-bordered table-striped" style="width:100%;">
							<thead style="font-size: 15px;">
								<tr>
									<th>No</th>
									<th>Nim</th>
									<th>Nama Mahasiswa</th>
									<th>Jenis Kelamin</th>
									<th>Angkatan</th>
									<th>Action</th>
								</tr>
							</thead>

							<tfoot style="font-size: 15px;">
								<tr>
									<th>No</th>
									<th>Nim</th>
									<th>Nama Mahasiswa</th>
									<th>Jenis Kelamin</th>
									<th>Angkatan</th>
									<th>Action</th>
								</tr>
							</tfoot>
						</table>
					</div>

					</div>
				</div>
			</div>

			<div class="row">
				<!--Ushuludin-->
				<div class="col-md-6">
					<div class="box">
						<div class="box-header">
							<h3 class="box-title">Grafik Rata - rata IPK Fakultas Ushuludin</h3>
						</div>

						<div class="box-body">
							<canvas id="myChart_avgu"></canvas>
							<script type="text/javascript">
								var ctx = document.getElementById("myChart_avgu");
								var myChart = new Chart(ctx, {
									type: 'bar',
									data: {
										labels: ["SEMESTER 1", "SEMESTER 2", "SEMESTER 3", "SEMESTER 4", "SEMESTER 5", "SEMESTER 6","SEMESTER 7","SEMESTER 8"],
										datasets: [{
											label: 'Grafik Rata - rata IPK',
											data: [
											<?php foreach($ip_k1_avgu as $k1) {
												echo $k1->ip_k1;
											}?>,
											<?php foreach($ip_k2_avgu as $k2) {
												echo $k2->ip_k2;
											}?>,
											<?php foreach($ip_k3_avgu as $k3) {
												echo $k3->ip_k3;
											}?>,
											<?php foreach($ip_k4_avgu as $k4) {
												echo $k4->ip_k4;
											}?>,
											<?php foreach($ip_k5_avgu as $k5) {
												echo $k5->ip_k5;
											}?>,
											<?php foreach($ip_k6_avgu as $k6) {
												echo $k6->ip_k6;
											}?>,
											<?php foreach($ip_k7_avgu as $k7) {
												echo $k7->ip_k7;
											}?>,
											<?php foreach($ip_k8_avgu as $k8) {
												echo $k8->ip_k8;
											}?>],
											backgroundColor: [
											'rgba(255, 99, 132, 0.2)',
											'rgba(0, 255, 0, 0.2)',
											'rgba(150,75,0, 0.2)',
											'rgba(75, 192, 192, 0.2)',
											'rgba(153, 102, 255, 0.2)',
											'rgba(192,	192,192, 0.2)',
											'rgba(255,215,0, 0.2)',
											'rgba(255,127,0, 0.2)'
											],
											borderColor: [
											'rgba(255,99,132,1)',
											'rgba(0, 255, 0, 1)',
											'rgba(150,75,0, 1)',
											'rgba(75, 192, 192, 1)',
											'rgba(153, 102, 255, 1)',
											'rgba(192,	192,192, 1)',
											'rgba(255,215,0, 1)',
											'rgba(255,127,0, 1)'
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
				<!--End Ushuludin-->

				<!--Tarbiyah dan Keguruan-->
				<div class="col-md-6">
					<div class="box">
						<div class="box-header">
							<h3 class="box-title">Grafik Rata - rata IPK Fakultas Tarbiyah dan Keguruan</h3>
						</div>

						<div class="box-body">
							<canvas id="myChart_avgt"></canvas>
							<script type="text/javascript">
								var ctx = document.getElementById("myChart_avgt");
								var myChart = new Chart(ctx, {
									type: 'bar',
									data: {
										labels: ["SEMESTER 1", "SEMESTER 2", "SEMESTER 3", "SEMESTER 4", "SEMESTER 5", "SEMESTER 6","SEMESTER 7","SEMESTER 8"],
										datasets: [{
											label: 'Grafik Rata - rata IPK',
											data: [
											<?php foreach($ip_k1_avgt as $k1) {
												echo $k1->ip_k1;
											}?>,
											<?php foreach($ip_k2_avgt as $k2) {
												echo $k2->ip_k2;
											}?>,
											<?php foreach($ip_k3_avgt as $k3) {
												echo $k3->ip_k3;
											}?>,
											<?php foreach($ip_k4_avgt as $k4) {
												echo $k4->ip_k4;
											}?>,
											<?php foreach($ip_k5_avgt as $k5) {
												echo $k5->ip_k5;
											}?>,
											<?php foreach($ip_k6_avgt as $k6) {
												echo $k6->ip_k6;
											}?>,
											<?php foreach($ip_k7_avgt as $k7) {
												echo $k7->ip_k7;
											}?>,
											<?php foreach($ip_k8_avgt as $k8) {
												echo $k8->ip_k8;
											}?>],
											backgroundColor: [
											'rgba(255, 99, 132, 0.2)',
											'rgba(0, 255, 0, 0.2)',
											'rgba(150,75,0, 0.2)',
											'rgba(75, 192, 192, 0.2)',
											'rgba(153, 102, 255, 0.2)',
											'rgba(192,	192,192, 0.2)',
											'rgba(255,215,0, 0.2)',
											'rgba(255,127,0, 0.2)'
											],
											borderColor: [
											'rgba(255,99,132,1)',
											'rgba(0, 255, 0, 1)',
											'rgba(150,75,0, 1)',
											'rgba(75, 192, 192, 1)',
											'rgba(153, 102, 255, 1)',
											'rgba(192,	192,192, 1)',
											'rgba(255,215,0, 1)',
											'rgba(255,127,0, 1)'
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
				<!--End Tarbiyah dan Keguruan-->

				<!--Syariah dan Hukum-->
				<div class="col-md-6">
					<div class="box">
						<div class="box-header">
							<h3 class="box-title">Grafik Rata - rata IPK Fakultas Syariah dan Hukum</h3>
						</div>

						<div class="box-body">
							<canvas id="myChart_avgs"></canvas>
							<script type="text/javascript">
								var ctx = document.getElementById("myChart_avgs");
								var myChart = new Chart(ctx, {
									type: 'bar',
									data: {
										labels: ["SEMESTER 1", "SEMESTER 2", "SEMESTER 3", "SEMESTER 4", "SEMESTER 5", "SEMESTER 6","SEMESTER 7","SEMESTER 8"],
										datasets: [{
											label: 'Grafik Rata - rata IPK',
											data: [
											<?php foreach($ip_k1_avgs as $k1) {
												echo $k1->ip_k1;
											}?>,
											<?php foreach($ip_k2_avgs as $k2) {
												echo $k2->ip_k2;
											}?>,
											<?php foreach($ip_k3_avgs as $k3) {
												echo $k3->ip_k3;
											}?>,
											<?php foreach($ip_k4_avgs as $k4) {
												echo $k4->ip_k4;
											}?>,
											<?php foreach($ip_k5_avgs as $k5) {
												echo $k5->ip_k5;
											}?>,
											<?php foreach($ip_k6_avgs as $k6) {
												echo $k6->ip_k6;
											}?>,
											<?php foreach($ip_k7_avgs as $k7) {
												echo $k7->ip_k7;
											}?>,
											<?php foreach($ip_k8_avgs as $k8) {
												echo $k8->ip_k8;
											}?>],
											backgroundColor: [
											'rgba(255, 99, 132, 0.2)',
											'rgba(0, 255, 0, 0.2)',
											'rgba(150,75,0, 0.2)',
											'rgba(75, 192, 192, 0.2)',
											'rgba(153, 102, 255, 0.2)',
											'rgba(192,	192,192, 0.2)',
											'rgba(255,215,0, 0.2)',
											'rgba(255,127,0, 0.2)'
											],
											borderColor: [
											'rgba(255,99,132,1)',
											'rgba(0, 255, 0, 1)',
											'rgba(150,75,0, 1)',
											'rgba(75, 192, 192, 1)',
											'rgba(153, 102, 255, 1)',
											'rgba(192,	192,192, 1)',
											'rgba(255,215,0, 1)',
											'rgba(255,127,0, 1)'
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
				<!--End Syariah dan Hukum-->

				<!--Dakwah dan Komunikasi-->
				<div class="col-md-6">
					<div class="box">
						<div class="box-header">
							<h3 class="box-title">Grafik Rata - rata IPK Fakultas Dakwah dan Komunikasi</h3>
						</div>

						<div class="box-body">
							<canvas id="myChart_avgd"></canvas>
							<script type="text/javascript">
								var ctx = document.getElementById("myChart_avgd");
								var myChart = new Chart(ctx, {
									type: 'bar',
									data: {
										labels: ["SEMESTER 1", "SEMESTER 2", "SEMESTER 3", "SEMESTER 4", "SEMESTER 5", "SEMESTER 6","SEMESTER 7","SEMESTER 8"],
										datasets: [{
											label: 'Grafik Rata - rata IPK',
											data: [
											<?php foreach($ip_k1_avgd as $k1) {
												echo $k1->ip_k1;
											}?>,
											<?php foreach($ip_k2_avgd as $k2) {
												echo $k2->ip_k2;
											}?>,
											<?php foreach($ip_k3_avgd as $k3) {
												echo $k3->ip_k3;
											}?>,
											<?php foreach($ip_k4_avgd as $k4) {
												echo $k4->ip_k4;
											}?>,
											<?php foreach($ip_k5_avgd as $k5) {
												echo $k5->ip_k5;
											}?>,
											<?php foreach($ip_k6_avgd as $k6) {
												echo $k6->ip_k6;
											}?>,
											<?php foreach($ip_k7_avgd as $k7) {
												echo $k7->ip_k7;
											}?>,
											<?php foreach($ip_k8_avgd as $k8) {
												echo $k8->ip_k8;
											}?>],
											backgroundColor: [
											'rgba(255, 99, 132, 0.2)',
											'rgba(0, 255, 0, 0.2)',
											'rgba(150,75,0, 0.2)',
											'rgba(75, 192, 192, 0.2)',
											'rgba(153, 102, 255, 0.2)',
											'rgba(192,	192,192, 0.2)',
											'rgba(255,215,0, 0.2)',
											'rgba(255,127,0, 0.2)'
											],
											borderColor: [
											'rgba(255,99,132,1)',
											'rgba(0, 255, 0, 1)',
											'rgba(150,75,0, 1)',
											'rgba(75, 192, 192, 1)',
											'rgba(153, 102, 255, 1)',
											'rgba(192,	192,192, 1)',
											'rgba(255,215,0, 1)',
											'rgba(255,127,0, 1)'
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
				<!--End Dakwah dan Komunikasi-->

				<!--Adab dan Humaniora-->
				<div class="col-md-6">
					<div class="box">
						<div class="box-header">
							<h3 class="box-title">Grafik Rata - rata IPK Fakultas Adab dan Humaniora</h3>
						</div>

						<div class="box-body">
							<canvas id="myChart_avga"></canvas>
							<script type="text/javascript">
								var ctx = document.getElementById("myChart_avga");
								var myChart = new Chart(ctx, {
									type: 'bar',
									data: {
										labels: ["SEMESTER 1", "SEMESTER 2", "SEMESTER 3", "SEMESTER 4", "SEMESTER 5", "SEMESTER 6","SEMESTER 7","SEMESTER 8"],
										datasets: [{
											label: 'Grafik Rata - rata IPK',
											data: [
											<?php foreach($ip_k1_avga as $k1) {
												echo $k1->ip_k1;
											}?>,
											<?php foreach($ip_k2_avga as $k2) {
												echo $k2->ip_k2;
											}?>,
											<?php foreach($ip_k3_avga as $k3) {
												echo $k3->ip_k3;
											}?>,
											<?php foreach($ip_k4_avga as $k4) {
												echo $k4->ip_k4;
											}?>,
											<?php foreach($ip_k5_avga as $k5) {
												echo $k5->ip_k5;
											}?>,
											<?php foreach($ip_k6_avga as $k6) {
												echo $k6->ip_k6;
											}?>,
											<?php foreach($ip_k7_avga as $k7) {
												echo $k7->ip_k7;
											}?>,
											<?php foreach($ip_k8_avga as $k8) {
												echo $k8->ip_k8;
											}?>],
											backgroundColor: [
											'rgba(255, 99, 132, 0.2)',
											'rgba(0, 255, 0, 0.2)',
											'rgba(150,75,0, 0.2)',
											'rgba(75, 192, 192, 0.2)',
											'rgba(153, 102, 255, 0.2)',
											'rgba(192,	192,192, 0.2)',
											'rgba(255,215,0, 0.2)',
											'rgba(255,127,0, 0.2)'
											],
											borderColor: [
											'rgba(255,99,132,1)',
											'rgba(0, 255, 0, 1)',
											'rgba(150,75,0, 1)',
											'rgba(75, 192, 192, 1)',
											'rgba(153, 102, 255, 1)',
											'rgba(192,	192,192, 1)',
											'rgba(255,215,0, 1)',
											'rgba(255,127,0, 1)'
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
				<!--End Adab dan Humaniora-->

				<!--Psikologi-->
				<div class="col-md-6">
					<div class="box">
						<div class="box-header">
							<h3 class="box-title">Grafik Rata - rata IPK Fakultas Psikologi</h3>
						</div>

						<div class="box-body">
							<canvas id="myChart_avgp"></canvas>
							<script type="text/javascript">
								var ctx = document.getElementById("myChart_avgp");
								var myChart = new Chart(ctx, {
									type: 'bar',
									data: {
										labels: ["SEMESTER 1", "SEMESTER 2", "SEMESTER 3", "SEMESTER 4", "SEMESTER 5", "SEMESTER 6","SEMESTER 7","SEMESTER 8"],
										datasets: [{
											label: 'Grafik Rata - rata IPK',
											data: [
											<?php foreach($ip_k1_avgp as $k1) {
												echo $k1->ip_k1;
											}?>,
											<?php foreach($ip_k2_avgp as $k2) {
												echo $k2->ip_k2;
											}?>,
											<?php foreach($ip_k3_avgp as $k3) {
												echo $k3->ip_k3;
											}?>,
											<?php foreach($ip_k4_avgp as $k4) {
												echo $k4->ip_k4;
											}?>,
											<?php foreach($ip_k5_avgp as $k5) {
												echo $k5->ip_k5;
											}?>,
											<?php foreach($ip_k6_avgp as $k6) {
												echo $k6->ip_k6;
											}?>,
											<?php foreach($ip_k7_avgp as $k7) {
												echo $k7->ip_k7;
											}?>,
											<?php foreach($ip_k8_avgp as $k8) {
												echo $k8->ip_k8;
											}?>],
											backgroundColor: [
											'rgba(255, 99, 132, 0.2)',
											'rgba(0, 255, 0, 0.2)',
											'rgba(150,75,0, 0.2)',
											'rgba(75, 192, 192, 0.2)',
											'rgba(153, 102, 255, 0.2)',
											'rgba(192,	192,192, 0.2)',
											'rgba(255,215,0, 0.2)',
											'rgba(255,127,0, 0.2)'
											],
											borderColor: [
											'rgba(255,99,132,1)',
											'rgba(0, 255, 0, 1)',
											'rgba(150,75,0, 1)',
											'rgba(75, 192, 192, 1)',
											'rgba(153, 102, 255, 1)',
											'rgba(192,	192,192, 1)',
											'rgba(255,215,0, 1)',
											'rgba(255,127,0, 1)'
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
				<!--End Psikologi-->

				<!--Sains dan Teknologi-->
				<div class="col-md-6">
					<div class="box">
						<div class="box-header">
							<h3 class="box-title">Grafik Rata - rata IPK Fakultas Sains dan Teknologi</h3>
						</div>

						<div class="box-body">
							<canvas id="myChart_avgsa"></canvas>
							<script type="text/javascript">
								var ctx = document.getElementById("myChart_avgsa");
								var myChart = new Chart(ctx, {
									type: 'bar',
									data: {
										labels: ["SEMESTER 1", "SEMESTER 2", "SEMESTER 3", "SEMESTER 4", "SEMESTER 5", "SEMESTER 6","SEMESTER 7","SEMESTER 8"],
										datasets: [{
											label: 'Grafik Rata - rata IPK',
											data: [
											<?php foreach($ip_k1_avgsa as $k1) {
												echo $k1->ip_k1;
											}?>,
											<?php foreach($ip_k2_avgsa as $k2) {
												echo $k2->ip_k2;
											}?>,
											<?php foreach($ip_k3_avgsa as $k3) {
												echo $k3->ip_k3;
											}?>,
											<?php foreach($ip_k4_avgsa as $k4) {
												echo $k4->ip_k4;
											}?>,
											<?php foreach($ip_k5_avgsa as $k5) {
												echo $k5->ip_k5;
											}?>,
											<?php foreach($ip_k6_avgsa as $k6) {
												echo $k6->ip_k6;
											}?>,
											<?php foreach($ip_k7_avgsa as $k7) {
												echo $k7->ip_k7;
											}?>,
											<?php foreach($ip_k8_avgsa as $k8) {
												echo $k8->ip_k8;
											}?>],
											backgroundColor: [
											'rgba(255, 99, 132, 0.2)',
											'rgba(0, 255, 0, 0.2)',
											'rgba(150,75,0, 0.2)',
											'rgba(75, 192, 192, 0.2)',
											'rgba(153, 102, 255, 0.2)',
											'rgba(192,	192,192, 0.2)',
											'rgba(255,215,0, 0.2)',
											'rgba(255,127,0, 0.2)'
											],
											borderColor: [
											'rgba(255,99,132,1)',
											'rgba(0, 255, 0, 1)',
											'rgba(150,75,0, 1)',
											'rgba(75, 192, 192, 1)',
											'rgba(153, 102, 255, 1)',
											'rgba(192,	192,192, 1)',
											'rgba(255,215,0, 1)',
											'rgba(255,127,0, 1)'
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
				<!--End Sains dan Teknologi-->

				<!--Ilmu Sosial dan Ilmu Politik-->
				<div class="col-md-6">
					<div class="box">
						<div class="box-header">
							<h3 class="box-title">Grafik Rata - rata IPK Fakultas Ilmu Sosial dan Ilmu Politik</h3>
						</div>

						<div class="box-body">
							<canvas id="myChart_avgf"></canvas>
							<script type="text/javascript">
								var ctx = document.getElementById("myChart_avgf");
								var myChart = new Chart(ctx, {
									type: 'bar',
									data: {
										labels: ["SEMESTER 1", "SEMESTER 2", "SEMESTER 3", "SEMESTER 4", "SEMESTER 5", "SEMESTER 6","SEMESTER 7","SEMESTER 8"],
										datasets: [{
											label: 'Grafik Rata - rata IPK',
											data: [
											<?php foreach($ip_k1_avgf as $k1) {
												echo $k1->ip_k1;
											}?>,
											<?php foreach($ip_k2_avgf as $k2) {
												echo $k2->ip_k2;
											}?>,
											<?php foreach($ip_k3_avgf as $k3) {
												echo $k3->ip_k3;
											}?>,
											<?php foreach($ip_k4_avgf as $k4) {
												echo $k4->ip_k4;
											}?>,
											<?php foreach($ip_k5_avgf as $k5) {
												echo $k5->ip_k5;
											}?>,
											<?php foreach($ip_k6_avgf as $k6) {
												echo $k6->ip_k6;
											}?>,
											<?php foreach($ip_k7_avgf as $k7) {
												echo $k7->ip_k7;
											}?>,
											<?php foreach($ip_k8_avgf as $k8) {
												echo $k8->ip_k8;
											}?>],
											backgroundColor: [
											'rgba(255, 99, 132, 0.2)',
											'rgba(0, 255, 0, 0.2)',
											'rgba(150,75,0, 0.2)',
											'rgba(75, 192, 192, 0.2)',
											'rgba(153, 102, 255, 0.2)',
											'rgba(192,	192,192, 0.2)',
											'rgba(255,215,0, 0.2)',
											'rgba(255,127,0, 0.2)'
											],
											borderColor: [
											'rgba(255,99,132,1)',
											'rgba(0, 255, 0, 1)',
											'rgba(150,75,0, 1)',
											'rgba(75, 192, 192, 1)',
											'rgba(153, 102, 255, 1)',
											'rgba(192,	192,192, 1)',
											'rgba(255,215,0, 1)',
											'rgba(255,127,0, 1)'
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
				<!--End Ilmu Sosial dan Ilmu Politik-->
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
