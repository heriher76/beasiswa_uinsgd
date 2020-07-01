<!DOCTYPE html>
<html>
	<head>
		<?php foreach ($data as $value) { ?>
		<title>Formulir Pendaftaran - <?php echo $param; ?> - <?php echo $value->no_pendaftaran; ?> Beasiswa KIP-K Tahun <?php echo date('Y'); ?></title>
		<?php } ?>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
  		<meta name="viewport" content="width=device-width, initial-scale=1">

  		<!--icon logo uin bandung-->
  		<link rel="shortcut icon" href="<?php echo base_url('assets/img/logo-uin.ico'); ?>">

  		<!--Bootstrap-->
		<link rel="stylesheet" href="<?=base_url('assets/bootstrap/bootstrap.css'); ?>">

		<!--include datepicker bootstrap.css-->
		<link rel="stylesheet" href="<?=base_url('assets/admin/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css'); ?>">

  		<!-- Bootstrap 3.3.7 -->
  		<link rel="stylesheet" href="<?=base_url('assets/admin/bower_components/bootstrap/dist/css/bootstrap.min.css')?>">

  		<!--Smart Wizard css-->
  		<link rel="stylesheet" href="<?=base_url('assets/smart/css/smart_wizard.css'); ?>">

  		<link rel="stylesheet" href="<?=base_url('assets/smart/css/smart_wizard_theme_dots.css'); ?>">
  		<!--End Smart Wizard css-->

		<!--Style.css buatan sendiri-->
		<link rel="stylesheet" type="text/css" href="<?=base_url('assets/css/style_mhs.css'); ?>">
	</head>
</html>