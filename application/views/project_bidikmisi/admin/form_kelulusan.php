<?php
	$this->load->view('project_bidikmisi/header/admin/header');
	echo $this->session->flashdata('berhasil_verifikasi');
?>
	<div class="content-wrapper">
		<!-- Content Header (Page header) -->
		<section class="content-header">
			<h1>
				Validasi Kelulusan Beasiswa KIP-K <?php echo date('Y'); ?>
			</h1>
		</section>

		<section class="content">
			<div class="row">
				<div class="col-md-12">
					<div class="box">
						<div class="box-header">
							<h3 class="box-title">Form Validasi Kelulusan</h3>

						</div>

						<div class="box-body">
							<div class="error">
								<p>Pada Menu ini Admin Dapat mengklik salah satu tombol yang ada di form untuk melakukan validasi kelulusan tahap 1 Beasiswa KIP-K secara otomatis.</p>
								<p>Jika ingin menggunakan tombol sebelah kiri diwajibkan untuk setting terlebih dahulu kuota fakultas dan setting skor minimal tahap 1 pada menu setting kuota dan setting skor kelulusan tahap 1</p>
								<p>Jika ingin menggunakan tombol sebelah kanan maka tidak perlu untuk mensetting kuota fakultas, hanya cukup setting skor saja pada menu setting skor kelulusan tahap 1.</p>
							    <p>Jika Ingin mensetting ulang kelulusan menjadi PENDING silahkan untuk mengklik tombol yang berwarna kuning</p>
							</div>

							<div class="col-md-6">
								<h3>Validasi Kelulusan Tahap 1 (By Kuota)</h3>
								<a href="<?=base_url('Auth1/monitoring_getLulus'); ?>" class="btn btn-primary" onclick="javascript: return confirm('Anda yakin ingin melakukan validasi (By Kuota) ?')">Validasi Kelulusan</a>&nbsp;&nbsp;
							</div>

							<div class="col-md-6">
								<h3>Validasi Kelulusan Tahap 1 (Tanpa Kuota)</h3>
								<a href="<?=base_url('Auth1/monitoring_getLulus2'); ?>" class="btn btn-success" onclick="javascript: return confirm('Anda yakin ingin melakukan validasi (Tanpa Kuota) ?')">Validasi Kelulusan</a>&nbsp;&nbsp;
							</div>

							<div class="col-md-6">
								<h3>Validasi Pending Tahap 1</h3>
								<a href="<?=base_url('Admin/set_pending'); ?>" class="btn btn-warning" onclick="javascript: return confirm('Anda yakin ingin melakukan Validasi Pending ?')">Validasi Pending</a>&nbsp;&nbsp;
							</div>
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
