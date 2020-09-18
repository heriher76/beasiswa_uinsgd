<!DOCTYPE html>
<html>
<title>Executive Beasiswa KIP-K - Uin Bandung</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="shortcut icon" href="<?php echo base_url('assets/img/logo-uin.ico'); ?>">

<!-- Bootstrap 3.3.4 -->
<link href="<?php echo base_url(); ?>assets/adminlte/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />    
<!-- FontAwesome 4.3.0 -->
<link href="<?php echo base_url(); ?>assets/adminlte/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
<!-- Ionicons 2.0.0 -->
<link href="<?=base_url('assets/admin/bower_components/Ionicons/css/ionicons.min.css'); ?>" rel="stylesheet" type="text/css" />
<!-- Theme style -->
<link href="<?php echo base_url(); ?>assets/adminlte/dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
<!--datatables-->
<link rel="stylesheet" type="text/css" href="<?=base_url('assets/t/d/css/dataTables.bootstrap.min.css'); ?>">
<link rel="stylesheet" type="text/css" href="<?=base_url('assets/row/css/rowReorder.dataTables.min.css'); ?>">
<link rel="stylesheet" type="text/css" href="<?=base_url('assets/responsive/css/responsive.dataTables.min.css'); ?>">


    <!-- AdminLTE Skins. Choose a skin from the css/skins 
     folder instead of downloading all of them to reduce the load. -->
     <link href="<?php echo base_url(); ?>assets/adminlte/dist/css/skins/_all-skins.min.css" rel="stylesheet" type="text/css" />
     <style>
     .error{
      color:red;
      font-weight: normal;
    }
  </style>
  <!-- jQuery 2.1.4 -->
  <script src="<?php echo base_url(); ?>assets/adminlte/js/jQuery-2.1.4.min.js"></script>
  <script type="text/javascript">
    var baseURL = "<?php echo base_url(); ?>";
  </script>

</head>
<!-- <body class="sidebar-mini skin-black-light"> -->
  <body class="skin-green sidebar-mini">
    <div class="wrapper">

      <header class="main-header">
        <!-- Logo -->
        <a href="<?php echo base_url('Auth0/dashboard'); ?>" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><b>EX</b>VE</span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><b>EXECUTIVE</b></span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button"></a>
          <a class="navbar-brand" href="#">Beasiswa KIP-K UIN BANDUNG</a>
          <div class="navbar-custom-menu">
              <ul class="nav navbar-nav">
                <li>
                    <a href="<?=base_url('Login/logout'); ?>"><span class="glyphicon glyphicon-log-out"></span>  Logout</a>
                  </li>
              </ul>
            </div>
        </nav>
      </header>
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <div class="user-panel">
            <div class="pull-left image">
              <img src="<?php echo base_url('assets/img/logo-uin-bandung.png'); ?>" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
				<p><?php echo $this->session->userdata('nama_lengkap'); ?></p>
				<a href="#"><i class="fa fa-circle text-success"></i> Online</a>
			</div>
          </div>
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header">MENU EXECUTIVE</li>
            <li class="treeview">
              <a href="<?=base_url('Auth0/dashboard'); ?>">
                <i class="fa fa-dashboard"></i> <span>Dashboard</span>
              </a>
            </li>

            <li class="treeview">
              <a href="<?=base_url('Auth0/view4'); ?>">
                  <i class="fa fa-users"></i> <span>Setting Akun</span>
              </a>
            </li>

           <li class="treeview">
              <a href="#"><i class="fa  fa-list-ul fa-lg"></i> Data Pendaftar<span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span></a>
              <ul class="treeview-menu">
                <li><a href="<?=base_url('Auth0/view6'); ?>"><i class="fa fa-circle-o"></i>Data Seluruh Peserta</a></li>
                <li><a href="<?=base_url('Auth0/view1'); ?>"><i class="fa fa-circle-o"></i>Data Peserta</a></li>
                <li><a href="<?=base_url('Auth0/v_report_lulus'); ?>"><i class="fa fa-circle-o"></i>Data Peserta Lulus Tahap 1</a></li>
                <li><a href="<?=base_url('Auth0/v_report_lulus2'); ?>"><i class="fa fa-circle-o"></i>Data Peserta Lulus Tahap 2</a></li>
                <li><a href="<?=base_url('Auth0/v_report_tdk_lulus'); ?>"><i class="fa fa-circle-o"></i>Data Peserta Tidak Lulus</a></li>
                <li><a href="<?=base_url('Auth0/v_report_verifikasi'); ?>"><i class="fa fa-circle-o"></i>Data Peserta Verifikasi</a></li>
                <li><a href="<?=base_url('Auth0/v_report_sdh_pemberkasan'); ?>"><i class="fa fa-circle-o"></i>Data Sudah Pemberkasan</a></li>
                <li><a href="<?=base_url('Auth0/v_report_blm_pemberkasan'); ?>"><i class="fa fa-circle-o"></i>Data Belum Pemberkasan</a></li>
                <li><a href="<?=base_url('Auth0/v_report_pending'); ?>"><i class="fa fa-circle-o"></i>Data Peserta Pending</a></li>
                <li><a href="<?=base_url('Auth0/v_report_ortum'); ?>"><i class="fa fa-circle-o"></i>Data Orang Tua Meninggal</a></li>
                <li><a href="<?=base_url('Auth0/v_report_ortu'); ?>"><i class="fa fa-circle-o"></i>Data Orang Tua Masih Ada</a></li>
                <li><a href="<?=base_url('Auth0/v_report_almarhum'); ?>"><i class="fa fa-circle-o"></i>Data Ayah Meninggal</a></li>
                <li><a href="<?=base_url('Auth0/v_report_almarhumah'); ?>"><i class="fa fa-circle-o"></i>Data Ibu Meninggal</a></li>
                <li><a href="<?=base_url('Auth0/v_report_provinsi'); ?>"><i class="fa fa-circle-o"></i>Data Per-Wilayah</a></li>
                <li><a href="<?=base_url('Auth0/v_report_mondok'); ?>"><i class="fa fa-circle-o"></i>Data Pernah Pesantren</a></li>
                <li><a href="<?=base_url('Auth0/v_report_blm_mondok'); ?>"><i class="fa fa-circle-o"></i>Data Tidak Pernah Pesantren</a></li>
                <li><a href="<?=base_url('Auth0/v_report_tahunan'); ?>"><i class="fa fa-circle-o"></i>Data Tahunan</a></li>
              </ul>
            </li>

            <li class="treeview">
              <a href="<?=base_url('Auth0/v_cetak_laporan'); ?>">
                <i class="fa  fa-print"></i> <span>Cetak Laporan</span></i>
              </a>
            </li>
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>