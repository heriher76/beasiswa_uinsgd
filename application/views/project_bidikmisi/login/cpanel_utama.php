<!DOCTYPE html>
<html>
	<?php $this->load->view('project_bidikmisi/header/login/head_login'); ?>

	<body style="background-image: url(<?=base_url('assets/img/bg3.jpg'); ?>);background-size: cover;background-repeat: no-repeat;background-position: 0 0;background-attachment: fixed;">
		<div class="user-login">
			<div class="row">

				<!--Form Login-->
				<div class="col-md-12 col-xd-12 col-sm-12">
					<br><br><br>
					<center><div class="pnl panel panel-success" style="height: 100%; width: auto; max-width: 600px;">
						<div class="panel-ini panel-heading">
							<div class="text-center" id="img-uin">
								<img src="<?=base_url('assets/img/logo-resmi-kipk.jpeg'); ?>">
								<h3>Login Administrator</h3>
							</div>
						</div>

						<div class="panel-body">
							<div class="alert alert-info">
								<p><b>*)</b> Halaman Login Administrator/Executive KIP-K UIN SGD Bandung</p>
								<p><b>*)</b> Gunakan akun username dan password yang telah dibuat oleh aplikasi KIP-K UIN SGD Bandung</p>
								<p><b>*)</b> Jangan Lupa Untuk Pilih LEVEL Masuk Sebagai Administrator/Executive</p>
							</div>

							<form autocomplete="off" accept-charset="UTF-8" role="form" action="<?=base_url('Login/login'); ?>" method="POST" enctype="multipart/form-data">
								<fieldset>
									<div class="form-group text">
										<label>Username</label>
										<input class="form-control" type="text" name="usme" placeholder="Username" required="required">
									</div>

									<div class="form-group text">
										<label>Password</label>
										<input class="form-control" class="active" id="pswd" type="password" name="pass" placeholder="Password" required="required">
									</div>

									<div class="form-group text">
										<select name="level" class="form-control" required="required">
											<option value="">-Pilih Level-</option>
											<option value="1">ADMINISTRATOR</option>
											<option value="0">EXECUTIVE</option>
										</select>
									</div>

									<button class="btn btn-lg btn-success btn-block" type="submit">Masuk</button>
								</fieldset>
							</form>
						</div>

						<div class="panel-footer" style="background-color: #00a65a !important;">
							<div class="text-center footer" style="color:grey; font-size: 12px;">
							<?php
								//load footer
								$this->load->view('project_bidikmisi/footer/footer');
							?>
							</div>
						</div>
					</div>
				</div></center>
				<!--End Form Login-->
			</div>
		</div>

		<script type="text/javascript">
			//bg movement
			var imgs1 = new Array("<?=base_url('assets/img/bg-uin.jpg'); ?>","<?=base_url('assets/img/ini-uin-2.jpg'); ?>","<?=base_url('assets/img/ini-uin.JPG'); ?>","<?=base_url('assets/img/bg2.jpg'); ?>");
				var lnks1 = new Array("","","","");
				var alt1 = new Array("","","","");
				var currentAd1 = 0;
				var imgCt1 = 4;

				function cycle1() {
					if (currentAd1 == imgCt1) {
						currentAd1 = 0;
					}

					var banner1 = document.getElementById('adBanner1');
					var link1 = document.getElementById('adLink1');
					banner1.src=imgs1[currentAd1]
					banner1.alt=alt1[currentAd1]
					document.getElementById('adLink1').href=lnks1[currentAd1]
					currentAd1++;
				}
				window.setInterval("cycle1()",6000);

			/*Disable Klik Kanan*/
			//var message="KLIK KANAN DIMATIIN YA";

			///////////////////////////////////

			function clickIE4(){
				if (event.button==2){
					alert(message);
					return false;
				}
			}

			function clickNS4(e){
			if (document.layers||document.getElementById&&!document.all){
				if (e.which==2||e.which==3){
					alert(message);
					return false;
					}
				}
			}

			if (document.layers){
			document.captureEvents(Event.MOUSEDOWN);
			document.onmousedown=clickNS4;
			}else if (document.all&&!document.getElementById){
				document.onmousedown=clickIE4;
			}

			document.oncontextmenu=new Function("return false");
			/*end Disable Klik Kanan*/

			/*disable ctrl-U*/
			window.addEventListener("keydown",function(e){if(e.ctrlKey&&(e.which==65||e.which==66||e.which==67||e.which==73||e.which==80||e.which==83||e.which==85||e.which==86)){e.preventDefault()}});document.keypress=function(e){if(e.ctrlKey&&(e.which==65||e.which==66||e.which==67||e.which==73||e.which==80||e.which==83||e.which==85||e.which==86)){}return false}
			/*End disable ctrl-U*/
		</script>

	</body>
</html>
