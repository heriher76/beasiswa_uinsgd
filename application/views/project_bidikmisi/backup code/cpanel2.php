<!DOCTYPE html>
<html>
	<?php
		//load head
		$this->load->view('project_bidikmisi/header/head_cpanel2');
	?>
	<body>
		<script type="text/javascript">
			//Fitur Check Form
			function checkForm(x){
			  var value = x.value;
			  
			    //reqular expression to match required date format
			    re = /^\d{1,4}\-\d{1,2}\-\d{2}$/;

			    if(value != '' && !value.match(re)){
			      document.getElementById("format_tgl_lahir").style.display = "block";
			      document.getElementById('tgl_lahir').value = "";
			    }else{
			      document.getElementById('format_tgl_lahir').style.display = "none";
			      document.getElementById('tgl_lahir').value = '1';
			    }
			}
			//End Fitur Check Form
		</script>
		<!--Form Login-->
		<div class="container">
			<div class="col-md-12">
				<div class="row">
					<div id="box-login-mhs">
						<div class="text-center mb-4">
							<div id="img-uin">	
								<img src="<?=base_url('assets/img/logo-uin-bandung.png'); ?>">
							</div>
						</div>

						<div class="text-center mb-4">
							<div id="judul-login-mhs">
								<h1>Penerimaan Beasiswa BidikMisi Universitas Islam Negeri Sunan Gunung Djati Bandung</h1>
							</div>
						</div>
					
						<div class="text-center mb-4">
							<h3>Silahkan Masuk</h3>
						</div>

						<form action="<?=base_url('C_login/login'); ?>" method="POST">
							
							<div class="text-center mb-4">
								<div class="form-group">
									<div id="form-email">
										<input type="text" name="no_pendaftaran" placeholder="No Pendaftaran" required="">
										<span class="fa fa-key"></span>
									</div>
								</div>

								<div class="form-group">
									<div id="form-password">
										<input class="active" id="pswd" type="password" name="password" placeholder="Password" required="" onkeyup="checkForm(this); return false;">
										<span id="icon" class="glyphicon glyphicon-eye-close"></span><br>
										<input name="tgl_lahir" type="hidden" id="tgl_lahir">
										<div style="display: none;" id="format_tgl_lahir">
											<p style="color:white; text-align: center;">Contoh Password : 1998-12-23</p>
										</div>
									</div>
								</div>
							

								<div id="button-login-mhs">
									<button class="btn btn-primary" type="submit">Masuk</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		<!--End Form Login-->
		<div class="clear"></div>
	<?php
		//load footer
		$this->load->view('project_bidikmisi/footer/footer');
	?>
	</body>
</html>