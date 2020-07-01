<?php
    date_default_timezone_set('Asia/Jakarta');
    $thn_sekarang = date('Y');
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Sistem Informasi Beasiswa KIP-K - UIN SGD Bandung</title>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
  		<meta name="viewport" content="width=device-width, initial-scale=1">

  		<!--icon logo uin bandung-->
  		<link rel="shortcut icon" href="<?php echo base_url('assets/img/logo-uin.ico'); ?>">
        <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">

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

	<header>
		<div class="container-fluid">
			<div class="row">
				<div class="float-left button-date">
					<?php 
						date_default_timezone_set('Asia/Jakarta');
						$tgl = date('d/m/Y H:i');
						//echo $tgl; 
					?>
				</div>

				<div class="col-md-offset-9">
					<div class="header-button">
						<nav>
							<ul>
								<li>
									<a target="_blank" href="https://beasiswa.uinsgd.ac.id/assets/document/panduan aplikasi bidikmisi.pdf"><b>Panduan Penggunaan</b></a>
									
									<span>|</span>

									<a href="<?=base_url('C_login/logout'); ?>"><b>Keluar</b></a>
								</li>
							</ul>
						</nav>
					</div>
				</div>
			</div>
		</div>
	</header>

	<div class="header-bd col-md-12 col-xd-12">	
        <br>
		<div class="container col-md-12 col-xd-12">
			<div class="row col-sm-4 col-md-4 col-xd-4" align="center">
				<img align="center" class="img-responsive" width="50%" src="<?=base_url('assets/img/logo-resmi-kipk.jpeg')?>">
            </div>
				<div class="row col-sm-4 col-md-8 col-xd-8" >
				<font face="calibri"  align="center"><h2><b>Sistem Informasi Beasiswa KIP-K<br><u>Universitas Islam Negeri Sunan Gunung Djati Bandung</u></b></h2></font>
			</div>
		</div>
	</div>
    <br>
    <div class="container-fluid col-md-3">
        <br>
		<div class="row">
			<div class="panel panel-success col-md-offset-2 hidden-xs">
				<div class="panel-heading"><center><h4><b>Menu Pendaftar</b></h4></center></div>
				<div class="panel-body navbar-default navbar-teal">
					<div class="navbar-header">
    				    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <!-- <a class="navbar-brand" href="#">Assalamu'alaikum</a> -->
    				</div>

    				<div id="navbar" class="collapse navbar-collapse">
                        <?php foreach($data_diri as $value) { ?>
                            <?php if($value->upload_foto == NULL){ ?>
                                <div class="circle-avatar" style="background-image:url(<?php echo base_url(). 'assets/img/dummy-man.png' ?>)"></div>
                                <?php } else{ ?>
                                <div class="circle-avatar" style="background-image:url(<?php echo base_url(). 'assets/foto_mhs/'.$value->upload_foto; ?>)"></div>
                            <?php } ?>
                            <br>
                            <center><h4><?php echo $value->nama_mahasiswa ?></h4></center>
                        <?php } ?>
    				    <ul class="nav navbar-nav" style="padding: 0px;">
    				        <?php
    				            $reg = $this->session->userdata('reg');
                                $nim = $this->session->userdata('nim');

                                if($nim){
                            ?>
    				            <li><a href="<?=base_url('C_mhs/biodata'); ?>">
                                <span class="glyphicon glyphicon-user"></span>  
                                    Biodata
                                </a></li>

                                <li><a href="<?=base_url('C_mhs/report_bidikmisi'); ?>"><span class="glyphicon glyphicon-exclamation-sign"></span>
                                    Report Bidikmisi
                                </a></li>
                            <?php  
                               }else if($reg == 0 || $reg == 1){
    				        ?>
        						<li><a href="<?=base_url('C_mhs/biodata'); ?>">
        						<span class="glyphicon glyphicon-user"></span>	
        							Biodata
        						</a></li>
        
        					
    						<?php }else if($reg == 2 || $reg == 3){ ?>
        						<li><a href="<?=base_url('C_mhs/biodata'); ?>">
        						<span class="glyphicon glyphicon-user"></span>	
        							Biodata
        						</a></li>
        						
        						<li><a href="<?=base_url('C_mhs/pengumuman'); ?>">
    							<span class="glyphicon glyphicon-bullhorn"></span>	
    								Pengumuman
    							</a></li>
    							
    							<li>
									<a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-print"></span> Cetak <span class="caret"></span></a></a>
									<ul class="dropdown-menu">
										<li>
											<a target="_blank" href="<?=base_url().'C_mhs/cetak/formulir'; ?>">Formulir Pendaftaran</a>
										</li>

										<li>
											<a target="_blank" href="<?=base_url().'C_mhs/cetak/surat_pernyataan'; ?>">Surat Pernyataan</a>
										</li>

										<li>
											<a target="_blank" href="<?=base_url().'C_mhs/cetak/dokumen'; ?>">Dokumen Pendukung</a>
										</li>

										<li>
											<a target="_blank" href="<?=base_url().'C_mhs/cetak/formulir_ceklis'; ?>">Formulir Ceklis</a>
										</li>
									</ul>
								</li>
    							
    							<li class="dropdown">
                        			<a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-download-alt"></span> Download Document
                        			<span class="caret"></span></a>
                        			<ul class="dropdown-menu">
                        				<?php foreach($data_document as $doc) { ?>
                                        <li>
                                            <?php if($doc->year == $thn_sekarang) { ?>
            							        <a href="<?=base_url().'assets/document/'.$doc->nama_document; ?>">
        								            Document Bidikmisi
        							     	   </a>
                                            <?php }else if($doc->year != $thn_sekarang) { ?>
                                                <a href="#">Document Bidikmisi Sudah EXPIRED</a>
                                            <?php } ?>
        								</li>
                                        <?php } ?>

                                        <?php foreach($data_document2 as $doc) { ?>
                                        <li>
                                            <?php if($doc->year == $thn_sekarang) { ?>
            							        <a href="<?=base_url().'assets/document/'.$doc->nama_document; ?>">
        								            Pengumuman Lulus Tahap 2 Bidikmisi
        								        </a>
                                            <?php }else if($doc->year != $thn_sekarang) { ?>
                                                <a href="#">Pengumuman Bidikmisi Tahap 2 Sudah EXPIRED</a>
                                            <?php } ?>
        								</li>
                                        <?php } ?>
                        			</ul>
                        		</li>
        
        					
        						
    						<?php } ?>
    							<li>
                                    <a href="<?=base_url('C_mhs/change'); ?>">
        						      <span class="glyphicon glyphicon-lock"></span>
        							Ganti Password
            						</a>
                                </li>
        						
        						<li>
                                    <a target="_blank" href="https://beasiswa.uinsgd.ac.id/assets/document/panduan aplikasi bidikmisi.pdf">
        						      <span class="glyphicon glyphicon-book"></span>
        							Panduan Penggunaan
            						</a>
                                </li>
        						
        						<li>
                                    <a target="_blank" href="https://beasiswa.uinsgd.ac.id">
        						      <i class="icon-bullhorn"></i>	
        							Pusat Informasi
            						</a>
                                </li>
        						
        						<li>	
                                    <a href="<?=base_url('C_login/logout'); ?>">
        						      <i class="icon-exclamation-sign"></i>
        							Keluar
            						</a>
                                </li>
    					  </ul>
    				</div> <!--End class="navbar-collapse"-->
				</div> <!--End class="panel-body"-->
			</div> <!--End class="panel-primary"-->

            <!-- Panel Mobile -->
            <div class="panel panel-success col-md-offset-2 hidden-sm visible-xs">
                <div class="panel-heading"><center><h4><b>Menu Pendaftar</b></h4></center></div>
                <div class="panel-body navbar-default navbar-teal">

                    <div id="navbar">
                        <?php foreach($data_diri as $value) { ?>
                            <?php if($value->upload_foto == NULL){ ?>
                                <div class="circle-avatar" style="background-image:url(<?php echo base_url(). 'assets/img/dummy-man.png' ?>)"></div>
                                <?php } else{ ?>
                                <div class="circle-avatar" style="background-image:url(<?php echo base_url(). 'assets/foto_mhs/'.$value->upload_foto; ?>)"></div>
                            <?php } ?>
                            <br>
                            <center><h4><?php echo $value->nama_mahasiswa ?></h4></center>
                        <?php } ?>
                        <ul class="nav navbar-nav" style="padding: 0px;">
                            <center>
                            <?php
                                $reg = $this->session->userdata('reg');
                                $nim = $this->session->userdata('nim');

                                if($nim){
                            ?>
                                <li><a href="<?=base_url('C_mhs/biodata'); ?>">
                                <span class="glyphicon glyphicon-user"></span>  
                                    Biodata
                                </a></li>
                                <br>
                                <li><a href="<?=base_url('C_mhs/report_bidikmisi'); ?>"><span class="glyphicon glyphicon-exclamation-sign"></span>
                                    Report Bidikmisi
                                </a></li>
                            <?php  
                               }else if($reg == 0 || $reg == 1){
                            ?>
                                <li>
                                    <a href="<?=base_url('C_mhs/biodata'); ?>">
                                    <span class="glyphicon glyphicon-user"></span>  
                                        Biodata
                                    </a>
                                </li>
        
                            
                            <?php }else if($reg == 2 || $reg == 3){ ?>
                                <li>
                                    <a href="<?=base_url('C_mhs/biodata'); ?>">
                                    <span class="glyphicon glyphicon-user"></span>  
                                        Biodata
                                    </a>
                                </li>
                                <br>
                                <li>
                                    <a href="<?=base_url('C_mhs/pengumuman'); ?>">
                                    <span class="glyphicon glyphicon-bullhorn"></span>  
                                        Pengumuman
                                    </a>
                                </li>
                                <br>
                                <li>
                                    <a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-print"></span> Cetak <span class="caret"></span></a></a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a target="_blank" href="<?=base_url().'C_mhs/cetak/formulir'; ?>">Formulir Pendaftaran</a>
                                        </li>

                                        <li>
                                            <a target="_blank" href="<?=base_url().'C_mhs/cetak/surat_pernyataan'; ?>">Surat Pernyataan</a>
                                        </li>

                                        <li>
                                            <a target="_blank" href="<?=base_url().'C_mhs/cetak/dokumen'; ?>">Dokumen Pendukung</a>
                                        </li>

                                        <li>
                                            <a target="_blank" href="<?=base_url().'C_mhs/cetak/formulir_ceklis'; ?>">Formulir Ceklis</a>
                                        </li>
                                    </ul>
                                </li>
                                <br>
                                <li class="dropdown">
                                    <a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-download-alt"></span> Download Document
                                    <span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <?php foreach($data_document as $doc) { ?>
                                        <li>
                                            <?php if($doc->year == $thn_sekarang) { ?>
                                                <a href="<?=base_url().'assets/document/'.$doc->nama_document; ?>">
                                                    Document Bidikmisi
                                               </a>
                                            <?php }else if($doc->year != $thn_sekarang) { ?>
                                                <a href="#">Document Bidikmisi Sudah EXPIRED</a>
                                            <?php } ?>
                                        </li>
                                        <?php } ?>

                                        <?php foreach($data_document2 as $doc) { ?>
                                        <li>
                                            <?php if($doc->year == $thn_sekarang) { ?>
                                                <a href="<?=base_url().'assets/document/'.$doc->nama_document; ?>">
                                                    Pengumuman Lulus Tahap 2 Bidikmisi
                                                </a>
                                            <?php }else if($doc->year != $thn_sekarang) { ?>
                                                <a href="#">Pengumuman Bidikmisi Tahap 2 Sudah EXPIRED</a>
                                            <?php } ?>
                                        </li>
                                        <?php } ?>
                                    </ul>
                                </li>
        
                            
                                
                            <?php } ?>
                                <br>
                                <li>
                                    <a href="<?=base_url('C_mhs/change'); ?>">
                                      <span class="glyphicon glyphicon-lock"></span>
                                    Ganti Password
                                    </a>
                                </li>
                                <br>
                                <li>
                                    <a target="_blank" href="https://beasiswa.uinsgd.ac.id/assets/document/panduan aplikasi bidikmisi.pdf">
                                      <span class="glyphicon glyphicon-book"></span>
                                    Panduan Penggunaan
                                    </a>
                                </li>
                                <br>
                                <li>
                                    <a target="_blank" href="https://beasiswa.uinsgd.ac.id">
                                      <i class="icon-bullhorn"></i> 
                                    Pusat Informasi
                                    </a>
                                </li>
                                <br>
                                <li>    
                                    <a href="<?=base_url('C_login/logout'); ?>">
                                      <i class="icon-exclamation-sign"></i>
                                    Keluar
                                    </a>
                                </li>
                            </center>
                          </ul>
                    </div> <!--End class="navbar-collapse"-->
                </div> <!--End class="panel-body"-->
            </div> <!--End Panel in Mobile-->

		</div> <!--End class="row"-->
	</div> <!--End class="container-fluid"-->
</html>