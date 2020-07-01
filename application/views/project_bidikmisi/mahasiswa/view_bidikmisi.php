<?php
	$this->load->view('project_bidikmisi/header/mahasiswa/header3_mhs.php');
	$this->load->view('project_bidikmisi/mahasiswa/navbar2_mhs');
?>	
<!DOCTYPE html>
<html>
	<body>
		<div class="notif" style="text-align: center;">
			<?php
				echo $this->session->flashdata('direct10_success');
			?>
		</div>
	</body>
</html>
<div style="text-align: center;">
	<?php
		$this->load->view('project_bidikmisi/footer/footer');
	?>	
</div>