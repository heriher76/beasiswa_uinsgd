<?php
	$this->load->view('project_bidikmisi/header/admin/header');
	echo $this->session->flashdata('berhasil');
?>
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			Setting Tahun Lulus SMA/SMK/MA, Setting Semester Report, & Setting Pengumuman Kelulusan
		</h1>
	</section>

	<section class="content">
		<div class="row">
			<div class="col-md-12">
				<div class="box">
					<div class="box-header">
						<div class="col-md-6">
							<h3 class="box-title">
								<button data-target="#insert-tahun-lulus" data-toggle="modal" class="btn btn-primary" type="submit">
									<i class="glyphicon glyphicon-plus-sign"></i>
									Tambah Tahun Lulus
								</button>
							</h3>
						</div>

						<div class="col-md-6">
							<h3 class="box-title">
								<b>Setting Report</b>
							</h3>
						</div>
					</div>

					<form action="<?=base_url('Auth1/settsr'); ?>" method="POST">
						<div id="insert-tahun-lulus" class="modal fade">
							<div class="modal-dialog">
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal">&times;</button>
										<h4 class="modal-title">Tambah Tahun Lulus Mahasiswa</h4>
									</div>

									<div class="modal-body">
										<div class="form-group">
											<label>Tahun Lulus</label>
											<input type="number" required="required" class="form-control" name="tahun_lulus" placeholder="masukan tahun lulus">
										</div>
									</div>

									<div class="modal-footer">
										<button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
										<button type="submit" class="btn btn-primary">Simpan</button>
									</div>
								</div>
							</div>
						</div>
					</form>

					<div class="box-body">
						<div class="col-md-6">

							<table id="tahun" class="display table table-responsive table-bordered table-striped" style="width:100%;">
								<thead>
									<tr>
										<th>No</th>
										<th>Tahun Lulus</th>
										<th>Aksi</th>
									</tr>
								</thead>

								<tbody>
									<?php
										$no = 1;
										foreach($tahun as $value) {
									?>
									<tr>
										<td><?php echo $no++; ?></td>
										<td><?php echo $value->tahun_lulus; ?></td>
										<td>
											<a href="<?=base_url().'Auth1/delete_tahun_lulus/'.sha1(md5(sha1(md5(sha1($value->id_tahun))))); ?>" class="btn btn-danger" onclick="javascript: return confirm('Anda yakin hapus data ?')">
												<span class="glyphicon glyphicon-erase"></span>
												Hapus
											</a>
										</td>
									</tr>
									<?php } ?>
								</tbody>

								<tfoot>
									<tr>
										<th>No</th>
										<th>Tahun Lulus</th>
										<th>Aksi</th>
									</tr>
								</tfoot>
							</table>
						</div>

						<div class="col-md-6">
							<form action="<?=base_url('Auth1/settsr'); ?>" method="POST">
								<?php foreach($data_report as $value) { ?>
								<input type="hidden" value="<?php echo $value->control_id; ?>" name="control_id">
								<div class="form-group">
									<label>Semester Report</label>
									<select name="sr" required="required" class="form-control">
										<option value="<?php echo $value->control_id?>"><?php echo $value->command; ?></option>
										<option value="">--</option>
										<option value="SEMESTER GANJIL">SEMESTER GANJIL</option>
										<option value="SEMESTER GENAP">SEMESTER GENAP</option>
										<option value="TUTUP">TUTUP</option>
									</select>
								</div>
								<?php } ?>

								<button style="float: right;" type="submit" class="btn btn-primary">
								<span class="glyphicon glyphicon-ok"></span>
									Simpan Setting Report
								</button>
							</form>
						</div>

    					<div class="col-md-6">
    					    <h4>Setting Pengumuman Kelulusan</h4>
    						<form action="<?=base_url('Admin/set_kelulusan'); ?>" method="POST">
    							<?php foreach($data_report as $value) { ?>
    							<input type="hidden" value="<?php echo $value->control_id; ?>" name="control_id">
    							<div class="form-group">
    							    <label>Pengumuman Untuk yang Lolos Tahap 1</label>
    							    <textarea type="text" name="pengumuman_lulus" required="required" class="form-control"><?php echo $value->pengumuman_lulus; ?></textarea>
    							</div>

    							<div class="form-group">
    							    <label>Pengumuman Untuk yang Lolos Tahap 2</label>
    							    <textarea type="text" name="pengumuman_lulus2" required="required" class="form-control"><?php echo $value->pengumuman_lulus2; ?></textarea>
    							</div>

    							<div class="form-group">
    							    <label>Pengumuman Untuk yang Tidak Lolos Tahap 1</label>
    							    <textarea type="text" name="pengumuman_tidak_lulus" required="required" class="form-control"><?php echo $value->pengumuman_tidak_lulus; ?></textarea>
    							</div>
    							<?php } ?>

    							<button style="float: right;" type="submit" class="btn btn-primary">
    							<span class="glyphicon glyphicon-ok"></span>
    								Simpan Setting Kelulusan
    							</button>
    						</form>
    					</div>

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
