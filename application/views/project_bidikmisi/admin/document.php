<?php
$kosong = null;
$data_kosong = 'Data Kosong';
$this->load->view('project_bidikmisi/header/admin/header');
?>
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			<i class="fa fa-tachometer" aria-hidden="true"></i> Document Beasiswa KIP-K
		</h1>
	</section>

	<section class="content">
		<div class="row">
			<div class="col-md-6">
				<div class="box">
					<div class="box-header">
						<h3 class="box-title">Update Document</h3>
						<?php foreach($data_document as $value) { ?>
						    <p>Silahkan klik <a href="<?=base_url().'assets/document/'.$value->nama_document; ?>">Download</a> jika ingin melihat document yang sudah diUpload</p>
						<?php } ?>
					</div>

					<div class="box-body">
					    <p style="color:red;">Max Size 1 MB dan Format File docx atau doc</p>
						<form action="<?=base_url('Auth1/upload_document'); ?>" method="POST" enctype="multipart/form-data">
						    <div class="form-group">
						        <label>Upload Document</label>
						        <input type="file" name="document" required="required">
						    </div>

						    <div class="form-group">
						    	<label>Kadaluwarsa Document</label>
						    	<input class="form-control" value="<?php echo $value->year; ?>" type="number" name="year" required="required" placeholder="Masukan Tahun Kadaluarsa Document">
						    </div>

						    <button type="submit" class="btn btn-primary">Upload</button>
						</form>
					</div>

					</div>
				</div>

				<div class="col-md-6">
    				<div class="box">
    					<div class="box-header">
    						<h3 class="box-title">Update Document Tahap 2</h3>
    						<?php foreach($data_document2 as $value) { ?>
    						    <p>Silahkan klik <a href="<?=base_url().'assets/document/'.$value->nama_document; ?>">Download</a> jika ingin melihat document yang sudah diUpload</p>
    						<?php } ?>
    					</div>

    					<div class="box-body">
    					    <p style="color:red;">Max Size 3 MB dan Format File PDF</p>
    						<form action="<?=base_url('Auth1/upload_document2'); ?>" method="POST" enctype="multipart/form-data">
    						    <div class="form-group">
    						        <label>Upload Document Data Lulus Tahap 2</label>
    						        <input type="file" name="document2" required="required">
    						    </div>

    						    <div class="form-group">
    						    	<label>Kadaluwarsa Document</label>
    						    	<input class="form-control" value="<?php echo $value->year; ?>" type="number" name="year" required="required" placeholder="Masukan Tahun Kadaluarsa Document">
    						    </div>

    						    <button type="submit" class="btn btn-success">Upload</button>
    						</form>
    					</div>

    				</div>
				</div>
			</div>
		</section>
	</div>
	<!--end wrapper-->

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
