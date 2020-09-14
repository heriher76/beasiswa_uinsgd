<?php
	$this->load->view('project_bidikmisi/header/admin/header');
?>
	<div class="content-wrapper">
		<!-- Content Header (Page header) -->
		<section class="content-header">
			<h1>
				Setting Jadwal Beasiswa KIP-K <?php echo date('Y'); ?>
			</h1>
		</section>

		<section class="content">
			<div class="row">
				<div class="col-md-12">
					<div class="box">
						<div class="box-header">
							<h3 class="box-title">Form Setting Jadwal</h3>
						</div>
						<div class="box-body">
							<form action="<?=base_url('Auth1/edit_jadwal'); ?>" method="POST" autocomplete="off">
								<?php foreach($jadwal as $value) { ?>
								<div class="col-md-6">
									<div class="form-group input-append date form_datetime">
										<label>Tanggal Buka Sistem Beasiswa KIP-K</label>
										<input placeholder="Example : 2015-12-05 13:30:34" type="text" class="form-control" name="tgl_buka_sistem" required="required" value="<?php echo $value->tanggal_buka_sistem; ?>">
										<span class="add-on"><i class="icon-th"></i></span>
									</div>

									<div class="form-group input-append date form_datetime">
										<label>Tanggal Tutup Sistem Beasiswa KIP-K</label>
										<input placeholder="Example : 2015-12-05 13:30:34" type="text" class="form-control" name="tgl_tutup_sistem" required="required" value="<?php echo $value->tanggal_tutup_sistem; ?>">
										<span class="add-on"><i class="icon-th"></i></span>
									</div>

									<div class="form-group input-append date form_datetime">
										<label>Tanggal Buka Pendaftaran Beasiswa KIP-K</label>
										<input placeholder="Example : 2015-12-05 13:30:34" type="text" class="form-control" name="tgl_buka" required="required" value="<?php echo $value->tanggal_buka; ?>">
										<span class="add-on"><i class="icon-th"></i></span>
									</div>

									<div class="form-group">
										<label>Aktifkan Pengecekan UKT ketika Login/Register?</label>
										<select name="check_ukt" class="form-control">
											<option value="1" <?php if($value->check_ukt == 1) echo 'selected'; ?>>Ya</option>
											<option value="0" <?php if($value->check_ukt == 0) echo 'selected'; ?>>Tidak</option>
										</select>
										<span class="add-on"><i class="icon-th"></i></span>
									</div>
								</div>

								<div class="col-md-6">
									<div class="form-group input-append date form_datetime">
										<label>Tanggal Tutup Pendaftaran Beasiswa KIP-K</label>
										<input placeholder="Example : 2015-12-05 13:30:34" type="text" class="form-control" name="tgl_tutup" required="required" value="<?php echo $value->tanggal_tutup; ?>">
										<span class="add-on"><i class="icon-th"></i></span>
									</div>

									<div class="form-group input-append date form_datetime">
										<label>Tanggal Pengumuman Beasiswa KIP-K</label>
										<input placeholder="Example : 2015-12-05 13:30:34" type="text" class="form-control" name="tgl_pengumuman" required="required" value="<?php echo $value->tanggal_pengumuman; ?>">
										<span class="add-on"><i class="icon-th"></i></span>
									</div>

									<div class="form-group input-append date form_datetime">
										<label>Tanggal Tutup Pengumuman Beasiswa KIP-K</label>
										<input placeholder="Example : 2015-12-05 13:30:35" type="text" class="form-control" name="tgl_tutup_pengumuman" required="required" value="<?php echo $value->tanggal_tutup_pengumuman; ?>">
										<span class="add-on"><i class="icon-th"></i></span>
									</div>

									<div class="form-group input-append date form_datetime">
										<label>Tanggal Terakhir Pemberkasan</label>
										<input placeholder="Example : 2015-12-05 13:30:35" type="text" class="form-control" name="terakhir_pemberkasan" required="required" value="<?php echo $value->terakhir_pemberkasan; ?>">
										<span class="add-on"><i class="icon-th"></i></span>
									</div>
								</div>
								<?php } ?>

								<button style="float: right;" type="submit" class="btn btn-primary">Simpan</button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</section>
	</div>
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
