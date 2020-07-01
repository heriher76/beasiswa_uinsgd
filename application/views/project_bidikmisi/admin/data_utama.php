<?php
	$this->load->view('project_bidikmisi/header/admin/head');
	$this->load->view('project_bidikmisi/admin/navbar');
	$this->load->view('project_bidikmisi/admin/sidebar');
?>
<!DOCTYPE html>
<html>
	<body>
		<button data-toggle="modal" data-target="#view-tambah-data-utama" type="submit">Tambah Data Admin/Executive</button>
		<form action="<?=base_url('Auth1/insert_utama'); ?>" method="POST">
			<div id="view-tambah-data-utama" class="modal fade" role="dialog">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal">&times;</button>
							<h4 class="modal-title">Tambah Data Admin/Executive</h4>
						</div>

						<div class="modal-body">
							<div class="form-group">
								<label>Nama Lengkap</label>
								<input type="text" required="required" class="form-control" name="nama_lengkap" placeholder="Nama Lengkap">
							</div>

							<div class="form-group">
								<label>Username</label>
								<input type="text" name="username" required="required" class="form-control" placeholder="Username">
							</div>

							<div class="form-group">
								<label>Password</label>
								<input type="text" name="password" class="form-control" required="required" placeholder="password">
							</div>

							<div class="form-group">
								<label>Level</label>
								<select class="form-control" name="level" required="required">
									<option value="">-Pilih SalahSatu-</option>
									<option value="0">EXECUTIVE</option>
									<option value="1">ADMIN</option>
								</select>
							</div>
						</div>

						<div class="modal-footer">
							<button type="submit" class="btn btn-primary">Tambah</button>
							<button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
						</div>
					</div>
				</div>
			</div>
		</form>

		<table class="table">
			<tr>
				<td>Nama Lengkap</td>
				<td>Level</td>
				<td>Action</td>
			</tr>

			<?php foreach($data as $value) { ?>
			<tr>
				<td><?php echo $value->nama_lengkap; ?></td>
				<td><?php
					if($value->level == 1) {
						echo "ADMIN";
					}else if($value->level == 0){
						echo "EXECUTIVE";
					}
				?></td>
				<td>
					<a href="<?=base_url().'Auth1/edit/'.$value->id; ?>">Edit</a>
					<a href="<?=base_url().'Auth1/delete/'.$value->id; ?>">Hapus</a>
				</td>
			</tr>
			<?php } ?>
		</table>
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
