<!DOCTYPE html>
<html>
	<body>
	<!--Header-->
		<div class="container-fluid">
			<div class="row">
			    <nav class="navbar navbar-default">
    				<div class="navbar-header">
    				    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#">Menu Bidikmisi</a>
    				</div>
    				
    				<div id="navbar" class="collapse navbar-collapse">
    				    <ul class="nav navbar-nav">
    				        <?php
    				            $reg = $this->session->userdata('reg');
                                $nim = $this->session->userdata('nim');

                                if($nim){
                            ?>
    				            <li><a class="active" href="<?=base_url('C_mhs/biodata'); ?>">
                                <span class="glyphicon glyphicon-user"></span>  
                                    Lihat Biodata
                                </a></li>

                                <li><a href="<?=base_url('C_mhs/report_bidikmisi'); ?>"><span class="glyphicon glyphicon-exclamation-sign"></span>
                                    Report Bidikmisi
                                </a></li>
        
                                <li><a href="<?=base_url('C_login/logout'); ?>">
                                <span class="glyphicon glyphicon-log-out"></span>
                                    Logout
                                </a></li>
                            <?php  
                               }else if($reg == 0 || $reg == 1){
    				        ?>
        						<li><a class="active" href="<?=base_url('C_mhs/biodata'); ?>">
        						<span class="glyphicon glyphicon-user"></span>	
        							Lihat Biodata
        						</a></li>
        						
        						<li><a href="<?=base_url('assets/document/PANDUAN PENGGUNAAN BIDIKMISI UIN BANDUNG.pdf'); ?>">
        						    <span class="glyphicon glyphicon-download-alt"></span>
        						    Panduan Bidikmisi
        						</a></li>
        
        						<li><a href="<?=base_url('C_mhs/change'); ?>">
        						<span class="glyphicon glyphicon-lock"></span>	
        							Ganti Password
        						</a></li>
        
        						<li><a href="<?=base_url('C_login/logout'); ?>">
        						<span class="glyphicon glyphicon-log-out"></span>
        							Logout
        						</a></li>
    						<?php }else if($reg == 2){ ?>
        						<li><a class="active" href="<?=base_url('C_mhs/biodata'); ?>">
        						<span class="glyphicon glyphicon-user"></span>	
        							Lihat Biodata
        						</a></li>
        						
        						<li><a href="<?=base_url('C_mhs/pengumuman'); ?>">
    							<span class="glyphicon glyphicon-bullhorn"></span>	
    								Lihat Pengumuman
    							</a></li>
    							
    							<li><a target="_blank" href="<?=base_url('C_mhs/cetak'); ?>">
    							<span class="glyphicon glyphicon-print"></span>
    							    Cetak Formulir
    							</a></li>
    							
    							<li class="dropdown">
                        			<a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-download-alt"></span> Download Document
                        			<span class="caret"></span></a>
                        			<ul class="dropdown-menu">
                        				<li><a href="<?=base_url('assets/document/PANDUAN PENGGUNAAN BIDIKMISI UIN BANDUNG.pdf'); ?>">
                						    Panduan Bidikmisi
                						</a></li>
                        				<li><?php foreach($data_document as $doc) { ?>
            							<a href="<?=base_url().'assets/document/'.$doc->nama_document; ?>">
        								    Document Bidikmisi
        								</a>
        								<?php } ?></li>
                        				<li><?php foreach($data_document2 as $doc) { ?>
            							<a href="<?=base_url().'assets/document/'.$doc->nama_document; ?>">
        								    Pengumuman Lulus Tahap 2 Bidikmisi
        								</a>
        								<?php } ?></li>
                        			</ul>
                        		</li>
        
        						<li><a href="<?=base_url('C_mhs/change'); ?>">
        						<span class="glyphicon glyphicon-lock"></span>	
        							Ganti Password
        						</a></li>
        
        						<li><a href="<?=base_url('C_login/logout'); ?>">
        						<span class="glyphicon glyphicon-log-out"></span>
        							Logout
        						</a></li>
    						<?php } ?>
    					  </ul>
    				</div>
				</nav>
			</div>
		</div>
		<!--End Header-->
	</body>
</html>