<?php
	$this->load->view('project_bidikmisi/header/mahasiswa/header');
?>
<!DOCTYPE html>
<html>
<style type="text/css">
	.main-footer {
		font-size: 15px;
		margin-top: 0px;
	}
	.btnn {
		border-radius:50%;
	}
</style>
	<body>
		<div class="notif notifikasi col-md-offset-8">
			<?php echo $this->session->flashdata('direct_error'); ?>
		</div>

		<div class="notif notifikasi col-md-offset-10">
			<?php echo $this->session->flashdata('direct_success'); ?>
		</div>

		<div class="container col-md-8">
			<br>
			<div class="row">
				<div class="panel-group col-md-offset-1">

					<div class="alert alert-warning alert-dismissible" role="alert">
					  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					  <strong>Perhatian!</strong>
					  <div class="penting">
						<p>Maksimal Ukuran Foto 100 Kb</p>
						<p>Format Foto : JPG, JPEG, dan PNG</p>
						<p>Foto Harus Resmi</p>
					  </div>

					  <p>Jika ingin ganti fotonya, silahkan klik tombol telusuri/browse</p>
					  <p>Jika sudah Upload Silahkan klik Tombol Lanjut</p>
					</div>

					<br/>

					<div class="panel panel-success">
						<div class="panel-heading hidden-xs">
							<!--Sidebar-->
							<center>
							<a href="<?=base_url('C_mhs'); ?>" class="btn btnn active activee">1</a> <span class="glyphicon glyphicon-arrow-right"></span>
							<a href="<?=base_url('C_mhs/step2'); ?>" class="btn btnn">2</a> <span class="glyphicon glyphicon-arrow-right"></span>
							<a href="<?=base_url('C_mhs/step3'); ?>" class="btn btnn">3</a> <span class="glyphicon glyphicon-arrow-right"></span>
							<a href="<?=base_url('C_mhs/step4'); ?>" class="btn btnn">4</a> <span class="glyphicon glyphicon-arrow-right"></span>
							<a href="<?=base_url('C_mhs/step5'); ?>" class="btn btnn">5</a> <span class="glyphicon glyphicon-arrow-right"></span>
							<a href="<?=base_url('C_mhs/step6'); ?>" class="btn btnn">6</a> <span class="glyphicon glyphicon-arrow-right"></span>
							<a href="<?=base_url('C_mhs/step7'); ?>" class="btn btnn">7</a> <span class="glyphicon glyphicon-arrow-right"></span>
							<a href="<?=base_url('C_mhs/step8'); ?>" class="btn btnn">8</a> <span class="glyphicon glyphicon-arrow-right"></span>
							<a href="<?=base_url('C_mhs/step9'); ?>" class="btn btnn">9</a> <span class="glyphicon glyphicon-arrow-right"></span>
							<a href="<?=base_url('C_mhs/step10'); ?>" class="btn btnn">10</a> <span class="glyphicon glyphicon-arrow-right"></span>
							<a href="<?=base_url('C_mhs/step11'); ?>" class="btn btnn">11</a>
							</center>
							<!--End Sidebar-->
						</div>

						<div class="panel-body">
							<div class="col-xs-2 hidden-sm hidden-md hidden-lg" style="outline: 2px solid #CCC; outline-offset: 1px; padding-left: 8px;">
								<br>
								<a href="<?=base_url('C_mhs'); ?>" class="btn btnn active activee">1</a></span>
								<br><br><!-- <center><span class="glyphicon glyphicon-arrow-down"></center> -->
								<a href="<?=base_url('C_mhs/step2'); ?>" class="btn btnn">2</a>
								<br><br><!-- <center><span class="glyphicon glyphicon-arrow-down"></center> -->
								<a href="<?=base_url('C_mhs/step3'); ?>" class="btn btnn">3</a>
								<br><br><!-- <center><span class="glyphicon glyphicon-arrow-down"></center> -->
								<a href="<?=base_url('C_mhs/step4'); ?>" class="btn btnn">4</a>
								<br><br><!-- <center><span class="glyphicon glyphicon-arrow-down"></center> -->
								<a href="<?=base_url('C_mhs/step5'); ?>" class="btn btnn">5</a>
								<br><br><!-- <center><span class="glyphicon glyphicon-arrow-down"></center> -->
								<a href="<?=base_url('C_mhs/step6'); ?>" class="btn btnn">6</a>
								<br><br><!-- <center><span class="glyphicon glyphicon-arrow-down"></center> -->
								<a href="<?=base_url('C_mhs/step7'); ?>" class="btn btnn">7</a>
								<br><br><!-- <center><span class="glyphicon glyphicon-arrow-down"></center> -->
								<a href="<?=base_url('C_mhs/step8'); ?>" class="btn btnn">8</a>
								<br><br><!-- <center><span class="glyphicon glyphicon-arrow-down"></center> -->
								<a href="<?=base_url('C_mhs/step9'); ?>" class="btn btnn">9</a>
								<br><br><!-- <center><span class="glyphicon glyphicon-arrow-down"></center> -->
								<a href="<?=base_url('C_mhs/step10'); ?>" class="btn btnn">10</a>
								<br><br><!-- <center><span class="glyphicon glyphicon-arrow-down"></center> -->
								<a href="<?=base_url('C_mhs/step11'); ?>" class="btn btnn">11</a>
								<br><br>
							</div>
							<div class="col-xs-10 col-md-12">
								<h3><span class="label label-default">Tahap 1 Upload Foto</span></h3>
								<form action="<?=base_url('C_mhs/direct1'); ?>" method="POST" enctype="multipart/form-data">
									<!--Upload Foto-->
									<div class="form-group">
										<center>
										<?php foreach($data_diri as $value) { ?>
										<tr>
											<td>

												<div class="img-upload-foto">
												    <?php if($value->upload_foto == NULL){ ?>
												        <h3>Anda Belum Upload Foto</h3><br>
												    <?php } else{ ?>
													<img src="<?php echo base_url(). 'assets/foto_mhs/'.$value->upload_foto; ?>">
												    <?php } ?>

												</div>
											</td>
										</tr>
										<?php } ?>
											<div id="input-foto">
												<input type="file" name="foto" required="required">
											</div>
										</center>
									</div>

									<!--button-->
									<div class="text-center">
										<button type="submit" class="btn btn-success">
										<span class="glyphicon glyphicon-ok"></span>
											Simpan
										</button>
									</div>
									<!--End button-->
								</form>
								<!--End Upload Foto-->
							</div>
						</div> <!--End class="panel-body"-->
                        <?php if($value->upload_foto != NULL){ ?>
						<div class="panel-footer text-right">
							<a href="<?=base_url('C_mhs/step2'); ?>" class="btn btn-primary">Tahap 2 &raquo;</a>
						</div>
					  <?php } else{ ?>
					  <div class="panel-footer text-right">
							<a href="#" class="btn btn-danger">Upload foto terlebih dahulu</a>
						</div>
						  <?php }?>
					</div> <!-- End class="panel panel-success"-->

					<div class="clear"></div>

				</div> <!--End class="panel panel group"-->

			</div> <!--End class="row"-->

		</div> <!--End class="container col-md-8"-->
		<div class="col-md-12 panel-footer" style="background-color: #00a65a !important; width: 100%; left: 0px;">
			<div class="footer text-center" style="color:grey; font-size: 12px;">
				<?php $this->load->view('project_bidikmisi/footer/footer'); ?>
			</div>
		</div>
	</body>
</html>
