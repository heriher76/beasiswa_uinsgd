<!DOCTYPE html>
<html>
	<head>
		<title>Sistem Informasi Beasiswa KIP-K - UIN SGD Bandung</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
  		<link rel="shortcut icon" href="<?php echo base_url('assets/img/logo-uin.ico'); ?>">

  		<!-- Bootstrap 3.3.7 -->
		<link rel="stylesheet" href="<?=base_url('assets/admin/bower_components/bootstrap/dist/css/bootstrap.min.css'); ?>">
		
		<!-- Font Awesome -->
		<link rel="stylesheet" href="<?=base_url('assets/admin/bower_components/font-awesome/css/font-awesome.min.css'); ?>">

		<!--Style.css-->
		<link rel="stylesheet" href="<?=base_url('assets/css/style_cpanel.css'); ?>">

		<!--Captcha-->
		<?php echo $script_captcha; ?>

		<style type="text/css">
			@media(max-width:375px){
				html, body{
				    overflow-x:hidden;
					max-width: 100%;
				}
			}

			@media(min-width:1400px){
				html, body{
					overflow-y: hidden;
				}
			}
		</style>
	</head>
</html>