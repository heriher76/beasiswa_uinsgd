<!DOCTYPE html>
<html>
	<body>
		<div id="container">
			<div id="sidebar">
				<ul class="sidebar-nav">
					<?php 
						$reg = $this->session->userdata('reg');
						$nim = $this->session->userdata('nim');

						if($nim) {
					?>
						<li>
							<a href="<?=base_url('C_mhs/biodata'); ?>">Lihat Biodata</a>		
						</li>

						<li>
							<a href="<?=base_url('C_mhs/report_bidikmisi'); ?>">Report Bidikmisi</a>
						</li>

						<li>
							<a href="<?=base_url('C_login/logout'); ?>">Logout</a>
						</li>
					<?php }else if($reg == 0 || $reg == 1) { ?>
						<li>
							<a href="<?=base_url('C_mhs/biodata'); ?>">Lihat Biodata</a>		
						</li>

						<li>
							<a href="<?=base_url('assets/document/PANDUAN PENGGUNAAN BIDIKMISI UIN BANDUNG.pdf'); ?>">Panduan Bidikmisi</a>
						</li>

						<li>
							<a href="<?=base_url('C_mhs/change'); ?>">Ganti Password</a>
						</li>

						<li>
							<a href="<?=base_url('C_login/logout'); ?>">Logout</a>
						</li>
					<?php }else if($reg == 2) { ?>
						<li>
							<a href="<?=base_url('C_mhs/biodata'); ?>">Lihat Biodata</a>		
						</li>

						<li>
							<a href="<?=base_url('C_mhs/pengumuman'); ?>">Lihat Pengumuman</a>
						</li>

						<li>
							<a href="<?=base_url('C_mhs/cetak'); ?>">Cetak Formulir</a>
						</li>

						<li class="dropdown">
							<a class="dropdown-toggle" data-toggle="dropdown" href="#">Download Document</a>
							
							<ul class="dropdown-menu">
								<li>
									<a href="<?=base_url('assets/document/PANDUAN PENGGUNAAN BIDIKMISI UIN BANDUNG.pdf'); ?>">Panduan Bidikmisi</a>
								</li>
								
								<li>
									<?php foreach($data_document as $doc) { ?>
										<a href="<?=base_url().'assets/document/'.$doc->nama_document; ?>">Document Bidikmisi</a>
									<?php } ?>
								</li>

								<li>
									<?php foreach($data_document2 as $doc) { ?>
										<a href="<?=base_url().'assets/document/'.$doc->nama_document; ?>">Pengumuman Lulus Tahap 2 Bidikmisi</a>
									<?php } ?>
								</li>
							</ul>
						</li>

						<li>
							<a href="<?=base_url('C_mhs/change'); ?>">Ganti Password</a>
						</li>

						<li>
							<a href="<?=base_url('C_login/logout'); ?>">Logout</a>
						</li>
					<?php } ?>
				</ul>
			</div>
		
			<div id="page-content-container">
				<div class="container-fluid">
					<div class="row">
						<div class="col-lg-12">
							<a href="#menu" class="btn btn-default" id="menu">Menu</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>