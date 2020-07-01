<?php $this->load->view('project_bidikmisi/header/pimpinan/head'); ?>
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			<i class="fa fa-tachometer" aria-hidden="true"></i> Setting Akun Executive
		</h1>
	</section>

	<section class="content" style="height: 520px;">
		<div class="row">
			<div class="col-md-12">
				<div class="box">
					<div class="box-header">
						<h3 class="box-title">Akun Executive</h3>
					</div>

					<div class="box-body">
						<div class="col-md-4">
    						<form action="<?=base_url('Auth0/edit_executive'); ?>" method="POST">
    							<table class="table">
    							    <center>
										<h5>Edit Data Lengkap Executive</h5>
									</center>
									
									<div class="form-group">
									    <label>Nama Executive</label>
									    <input value="<?php echo $nama_lengkap; ?>" type="text" class="form-control" name="nama_lengkap" placeholder="Nama Anda" required="
    									required">
									</div>
    							</table>
    							
    							<button class="btn btn-primary" style="float:right;" type="submit">Simpan Nama</button>
    						</form>
						</div>
						
						<div class="col-md-4">
						    <form action="<?=base_url('Auth0/edit_executive'); ?>" method="POST">
    							<table class="table">
    							    <center>
    							        <h5>Edit Username Executive</h5>
    							    </center>
    							    
    								<div class="form-group">
									    <label>Username Executive</label>
									    <input type="text" class="form-control" name="username_executive" placeholder="Username Anda" required="
    									required">
									</div>
    							</table>
    							
    							<button class="btn btn-primary" style="float:right;" type="submit">Simpan Username</button>
    						</form>
						</div>
						
						<div class="col-md-4">
						    <form action="<?=base_url('Auth0/edit_executive'); ?>" method="POST">
    							<table class="table">
    							    <center>
										<h5>Edit Password Executive</h5>
									</center>
									
    							    <div class="form-group">
									    <label>Password Baru</label>
									    <input type="password" class="form-control" name="new_password" placeholder="Password Anda" required="
    									required">
									</div>
									
									<div class="form-group">
									    <label>Konfirmasi Password Baru</label>
									    <input type="password" class="form-control" name="confirm_new_password" placeholder="Konfirmasi Password Baru Anda" required="
    									required">
									</div>
    							</table>
    							
    							<button class="btn btn-primary" style="float:right;" type="submit">Simpan Password</button>
    						</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>
<!--end wrapper-->

<?php
$this->load->view('project_bidikmisi/footer/footer');
?>
</body>
</html>