<!DOCTYPE html>
<html>
	<?php
		//load head
		$this->load->view('project_bidikmisi/header/login/head_cpanel');
	?>
	<body>
		<script type="text/javascript">
			//alert otomatis ilang
			window.setTimeout(function() { $(".alert-info").fadeTo(500, 0).slideUp(500, function(){ $(this).remove(); }); }, 15000);
			
			//Fitur Check Form
			/*function checkForm(x){
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
			}*/
			//End Fitur Check Form
		</script>


		<style type="text/css">
			.clear{
				clear: both;
			}

			.image{
				text-align: center;
			}

			.judul{
				text-align: center;
				font-size: 20px;
			}

			.alertin{
			    top:0px;
				position: absolute;
				opacity:0.8;
			}

			.alertin2{
			    top:90px;
				position: absolute;
				opacity:0.8;
			}

			.marginaja{
				position: absolute;
				top:180px;
				opacity:0.8;
			}
		</style>
		<!--Form Login-->
		<div class="limiter">
			<div class="container-login100">
				<div class="wrap-login100 p-l-85 p-r-85 p-t-25 p-b-25">
					
					<!--Kumpulan Alert-->
					<div class="alert alert-info alertin col-md-offset-11 col-md-7">
						<a href="" class="close" data-dismiss="alert" aria-label="close">&times;</a>
						<p><span class="glyphicon glyphicon-info-sign"></span>&nbsp;&nbsp;<b>Gunakan Nomor Pendaftaran Untuk mendaftar beasiswa bidikmisi.</b></p>
					</div>

					<div class="alert alert-info alertin2 col-md-offset-11 col-md-7">
						<a href="" class="close" data-dismiss="alert" aria-label="close">&times;</a>
						<p><span class="glyphicon glyphicon-info-sign"></span>&nbsp;&nbsp;<b>Gunakan Nim dan Password Simak Untuk Report Prestasi Bidikmisi.</b></p>
					</div>

					<div class="alert alert-info marginaja col-md-offset-11 col-md-7">
						<a href="" class="close" data-dismiss="alert" aria-label="close">&times;</a>
						<p><span class="glyphicon glyphicon-info-sign"></span>&nbsp;&nbsp;<b>Jika Password Masih menggunakan tanggal lahir anda, Silahkan inputkan seperti dibawah ini</b></p>
						<p><b>Format Password : YYYY-MM-DD</b></p>
						<p><b>Contoh Password : 1998-12-06</b></p>
					</div>
					<!--End Kumpulan Alert-->

					<form autocomplete="off" class="login100-form validate-form flex-sb flex-w" action="<?=base_url('C_login/login'); ?>" method="POST" enctype="multipart/form-data">
						<div class="login100-form-title p-b-12">
							<div class="image">
								<img src="<?=base_url('assets/img/logo-uin-bandung.png'); ?>" width="100px">
							</div>
						</div>

						<div class="login100-form-title p-b-32">
							<div class="judul">
								<b>Pendaftaran Beasiswa BidikMisi Universitas Islam Negeri Sunan Gunung Djati Bandung</b>
							</div>
						</div>

						<span class="txt1 p-b-11">
							No Pendaftaran atau Nim
						</span>
						<div class="wrap-input100 validate-input m-b-20" data-validate = "No Pendaftaran tidak boleh kosong">
							<span class="btn-show-pass">
								<i class="fa fa-key"></i>
							</span>
							<input class="form-control" type="text" name="no_pendaftaran" placeholder="ex : CBT-1810368297 OR 1810368297" required="required">
							<span class="focus-input100"></span>
						</div>
						
						<span class="txt1 p-b-11">
							Password
						</span>
						<div class="wrap-input100 validate-input m-b-12" data-validate = "Password tidak boleh kosong">
							<!--input name="tgl_lahir" type="hidden" id="tgl_lahir"-->
							<span class="btn-show-pass">
								<i class="fa fa-eye"></i>
							</span>
							<input class="form-control" required="required" type="password" name="password" placeholder="ex : YYYY-MM-DD OR 1998-02-06" onkeyup="checkForm(this); return false;">
							<span class="focus-input100"></span>
						</div>
							<!--div style="display: none;" id="format_tgl_lahir">
								<p>Jika Password Masih menggunakan tanggal lahir anda, Silahkan inputkan seperti dibawah ini</p>
								<p>Format Password : YYYY-MM-DD</p>
								<p>Contoh Password : 1998-02-06</p>
							</div-->

						<div class="form-group">
							<?php echo $captcha; ?>	
						</div>
						
						<div class="flex-sb-m w-full p-t-10"></div>

						<div class="container-login100-form-btn">
							<button class="login100-form-btn" type="submit">
								LOGIN
							</button>
						</div>
					</form>
				</div>

				

				<div class="flex-sb-m w-full p-t-10"></div>
				<?php
					//load footer
					$this->load->view('project_bidikmisi/footer/footer');
				?>
			</div>
		</div>
		<!--End Form Login-->
		<script type="text/javascript">
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