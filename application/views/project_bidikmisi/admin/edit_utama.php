<?php
	$this->load->view('project_bidikmisi/header/admin/header');
?>
		<div class="content-wrapper">
			<style type="text/css">
				.inputtan{
					font-size: 14px;
				}
			</style>
			<!-- Content Header (Page header) -->
			<section class="content-header">
				<h1>
					<i class="fa fa-tachometer" aria-hidden="true"></i> Data Utama
				</h1>
			</section>

			<section class="content" style="height: 520px;">
				<div class="row">
					<div class="col-md-12">
						<div class="box">
							<div class="box-header">
								<h3 class="box-title">Edit Data Utama <?php echo $nama_lengkap; ?></h3>
							</div>

							<div class="box-body">
								<div class="nav-tabs-custom">
									<ul class="nav nav-tabs">
										<li><a class="style-tabs" href="#edit-data-admin" data-toggle="tab">Edit Data Admin</a></li>
										<li><a class="style-tabs" href="#edit-username-admin" data-toggle="tab">Edit Username Admin</a></li>
										<li><a class="style-tabs" href="#edit-password-admin" data-toggle="tab">Edit Password Admin</a></li>
									</ul>

									<div class="col-md-12">
										<br/>
										<div class="tab-content">
											<!--Edit Data Admin-->
											<div class="tab-pane active" id="edit-data-admin">
												<form action="<?=base_url('Auth1/edit_utama_lengkap'); ?>" method="POST" enctype="multipart/form-data">
													<input type="hidden" value="<?php echo $id; ?>" name="id">
													<div class="form-group inputtan">
														<label>Nama Lengkap</label>
														<input type="text" value="<?php echo $nama_lengkap; ?>" required="required" class="form-control" name="nama_lengkap" placeholder="Nama Lengkap">
													</div>

													<div class="form-group inputtan">
														<label>Level</label>
														<select class="form-control" name="level" required="required">
															<?php if($level == 0){ ?>
															<option value="0">EXECUTIVE</option>
															<?php }else if($level == 1) { ?>
															<option value="1">ADMIN</option>
															<?php } ?>
															<option value="">--</option>
															<option value="0">EXECUTIVE</option>
															<option value="1">ADMIN</option>
														</select>
													</div>
													<button class="btn btn-primary" style="float:right;" type="submit">Simpan</button>
												</form>
											</div>
											<!--End Edit Data Admin-->

											<!--Edit Username Admin-->
											<div class="tab-pane" id="edit-username-admin">
												<form action="<?=base_url('Auth1/edit_utama_username'); ?>" method="POST">
													<input type="hidden" value="<?php echo $id; ?>" name="id">
													<div class="form-group inputtan">
														<label>Username</label>
														<input type="text" name="username" required="required" class="form-control" placeholder="Username">
													</div>
													<button class="btn btn-primary" style="float:right;" type="submit">Simpan</button>
												</form>
											</div>
											<!--End Edit Username Admin-->

											<!--Edit Password Admin-->
											<div class="tab-pane" id="edit-password-admin">
												<form action="<?=base_url('Auth1/edit_utama_password'); ?>" method="POST">
													<input type="hidden" value="<?php echo $id; ?>" name="id">
													<div class="form-group inputtan">
														<label>Password Baru</label>
														<input type="password" name="password" class="form-control" required="required" placeholder="Password Baru">
													</div>

													<div class="form-group inputtan">
														<label>Konfirmasi Password Baru</label>
														<input type="password" name="confirm_password" class="form-control" required="required" placeholder="Konfirmasi Password Baru">
													</div>
													<button class="btn btn-primary" style="float:right;" type="submit">Simpan</button>
												</form>
											</div>
											<!--End Edit Password Admin-->
										</div>
									</div>
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
