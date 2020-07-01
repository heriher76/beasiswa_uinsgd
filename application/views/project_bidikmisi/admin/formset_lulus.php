<?php
    $kosong = null;
    $data_kosong = 'Data Kosong';
    $this->load->view('project_bidikmisi/header/admin/header');
    echo $this->session->flashdata('skor_update');
?>
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			<i class="fa fa-tachometer" aria-hidden="true"></i> Setting Kelulusan Skor Tahap 1
		</h1>
	</section>

	<section class="content">
		<div class="row">
			<div class="col-md-12">
				<div class="box">
					<div class="box-header">
						<h3 class="box-title">Setting Kelulusan Skor</h3>
					</div>

					<div class="box-body">
						<form action="<?=base_url('Admin/v_set_kel'); ?>" method="POST">
							<div class="error">
								<p>Pada Form ini, Admin dapat menentukan SKOR kelulusan Beasiswa KIP-K tahap 1.</p>
								<?php foreach($data_skor as $value) { ?>
								<p>Skor Minimum Lulus Saat ini adalah <b><?php echo number_format($value->skor, 2); ?></b></p>
							</div>

                            <div class="form-group">
                                <label>Skor Tahap 1</label>
                                <input type="number" value="<?php echo $value->skor; ?>" class="form-control" placeholder="Masukkan Skor Kelulusan Tahap 1" required="required" name="skor">
                            </div>
                            <?php } ?>

                            <button type="submit" class="btn btn-primary" style="float:right;">Simpan</button>
                        </form>
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
