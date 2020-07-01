<!DOCTYPE html>
<html>
	<head>
		<title>Bidikmisi - Uin Bandung</title>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
  		<meta name="viewport" content="width=device-width, initial-scale=1">

  		<!--icon logo uin bandung-->
  		<link rel="shortcut icon" href="<?php echo base_url('assets/img/logo-uin-bandung.png'); ?>">

  		<!--Bootstrap-->
		<link rel="stylesheet" href="<?=base_url('assets/bootstrap/bootstrap.css'); ?>">

  		<!-- Bootstrap 3.3.7 -->
  		<link rel="stylesheet" href="<?=base_url('assets/admin/bower_components/bootstrap/dist/css/bootstrap.min.css')?>">

  		

		<!--Style.css buatan sendiri-->
		<link rel="stylesheet" type="text/css" href="<?=base_url('assets/css/style_mhs.css'); ?>">
	</head>

	<!--Header-->
	<header>	
		<div class="container">
			<div class="row">
				<img src="<?=base_url('assets/img/logo-uin-bandung.png')?>">
				
				<div class="text-center mb-4">
					<h1>Penerimaan Beasiswa BidikMisi Universitas Islam Negeri Sunan Gunung Djati Bandung</h1>
				</div>

				<!--Navbar-->
				<div class="col-md-4">
					<div class="container-fluid">
						<nav class="navbar navbar-default" style="background-color: #009e0f; padding-left:10px; margin-top:30px; border: 0;">
							<ul class="nav navbar-nav">
								<li><a style="color:white;" href="<?=base_url('C_mhs/biodata'); ?>">Lihat Biodata</a></li>
								<li><a style="color:white;" href="#">Lihat Pengumuman</a></li>
								<li><a style="color:white; " href="<?=base_url('C_login/logout'); ?>">Keluar</a></li>
							</ul>
						</nav>
					</div>
				</div>
				<!--End Navbar-->
			</div>
		</div>
	</header>
	<!--End Header-->

	<div class="clear"></div>
</html>