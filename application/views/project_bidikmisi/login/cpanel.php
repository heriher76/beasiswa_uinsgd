<!DOCTYPE html>
<html>
	<?php $this->load->view('project_bidikmisi/header/login/head_cpanel'); ?>
	<link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.no-icons.min.css" rel="stylesheet">
	<link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">

	<!-- crafted with love by Heri Hermawan, IF18 -->

	<style type="text/css">
		body {
		    height: 100%;
		    width: 100%;
		    margin: 0;
		    padding: 0;
		    position: relative;
		    background-image: url(<?=base_url('assets/img/bg3.jpg'); ?>);
		    background-size: cover;
		    background-repeat: no-repeat;
		    background-position: 0 0;
		    background-attachment: fixed;
		    -webkit-transition: background 2s ease-out;
			-moz-transition: background 2s ease-out;
			-o-transition: background 2s ease-out;
			transition: background 2s ease-out;
		}
		#fullPage {
		    position: absolute;
		    min-width: 100%;
		    min-height: 100%;
		    top: 0;
		    left: 0;
		    background-color: rgb(255, 255, 255);
		}
	</style>

	<body>
		<div class="user-login">

			<div class="col-md-12 col-xd-12 col-sm-12">
				<!--Form Login-->
				<br><br><br>
				<center><div style="height: 100vh; width: auto; max-width: 600px;">
					<div class="pnl panel panel-info">
						<div class="panel-ini panel-heading">
							<div id="img-uin-mhs" class="text-center">
								<img src="<?=base_url('assets/img/logo-resmi-kipk.jpeg'); ?>">
							</div>
						</div>

						<div class="panel-body">
							<div class="alert alert-success">
								<table class="table bordeles">

									<!--<tr>
										<td>Portal Login</td>
										<td>:</td>
										<td><b id="buka_portal_login"></b></td>
									</tr>
                                   -->


									<tr>
										<td>Pengumuman Tahap 1</td>
										<td>:</td>
										<td><b id="buka_pengumum">30 September 2020</b></td>
									</tr>

									<tr>
										<td>Pendaftaran Beasiswa KIP-K</td>
										<td>:</td>
										<td><b id="buka_pendaftaran"></b></td>
									</tr>
								</table>
	                            <p><b></b>Ketentuan (Username dan Password) Sistem Pendaftaran Beasiswa KIP-K</p>
								<p><b>1)</b> Gunakan NIM dan password SALAM untuk login ke website ini.</p>
								<p><b>2)</b> Khusus untuk mahasiswa angkatan 2019 dan 2020.</p>
							</div>

							<form autocomplete="off" accept-charset="UTF-8" role="form" action="<?=base_url('C_login/login'); ?>" method="POST" enctype="multipart/form-data">
								<fieldset>
									<div class="form-group text">
										<label><b>NIM</b></label>
										<input class="form-control" type="text" name="no_pendaftaran" placeholder="Ex : 1187050044" required="required" style="height: auto;">
									</div>

									<div class="form-group text">
										<label><b>Password</b></label>
										<div style="position: relative;">
											<input class="active form-control" type="password" value="" id="pass" name="password" placeholder="- - - - - - - - - -" required="required" style="height: auto;">
											<div class="show-button">
											    <span id="mybutton" onclick="change()"><i class="icon-eye-open" style="font-size: 20px;"></i></span>
												<!--input class="btn btn-info btn-sm" type="button" id="show" value="Show" onclick="ShowPassword()">
												<input class="btn btn-primary btn-sm" type="button" style="display: none;" id="hide" value="Hide" onclick="HidePassword()"-->
											</div>
										</div>
									</div>

									<div class="col-md-12 col-style">
										<div class="form-group captca">
											<?php echo $captcha; ?>
										</div>
									</div>
									<div class="col-md-12 col-xd-12 col-sm-12 col-xs-12 col-style">
										<button class="btn btn-success btn-block" type="submit"><i class="icon-plane"></i> Masuk</button>
										<a href="<?=base_url('C_login/register'); ?>" class="btn btn-primary btn-block"><i class="icon-plane"></i> Tidak punya akun SALAM? Daftar disini</a>
									</div>
									<!-- <div class="col-md-6 col-xd-6 col-sm-6 col-xs-6 col-style">
										<button class="btn btn-warning btn-block" type="reset"><i class="icon-cogs"></i> Kosongkan Formulir</button>
									</div> -->
								</fieldset>
							</form>
						</div>

						<div class="panel-footer" style="background-color: #00a65a !important;">
							<div class="footer text-center" style="color:grey; font-size: 12px;">
								<?php $this->load->view('project_bidikmisi/footer/footer'); ?>
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
				console.log(1);
				var banner1 = document.getElementById('adBanner1');
				banner1.src=imgs1[currentAd1]
				banner1.alt=alt1[currentAd1]
				currentAd1++;
			}
			window.setInterval("cycle1()",6000);

			// Set the date we're counting down to
			var buka_sistem = new Date("<?php echo $timer->tanggal_buka_sistem; ?>").getTime();
			var tutup_sistem = new Date("<?php echo $timer->tanggal_tutup_sistem; ?>").getTime();
			var buka_daftar = new Date("<?php echo $timer->tanggal_buka; ?>").getTime();
			var tutup_daftar = new Date("<?php echo $timer->tanggal_tutup; ?>").getTime();
            var buka_pengumuman = new Date("<?php echo $timer->tanggal_pengumuman; ?>").getTime();
            var tutup_pengumuman = new Date("<?php echo $timer->tanggal_tutup_pengumuman; ?>").getTime();
			// Update the count down every 1 second
			var x = setInterval(function() {

			  // Get todays date and time
			  var now = new Date().getTime();

			  // Find the distance between now and the count down date
			  var tanggal_buka_sistem = buka_sistem - now;
			  var tanggal_tutup_sistem = tutup_sistem - now;

			  // Time calculations for days, hours, minutes and seconds
			  var days = Math.floor(tanggal_buka_sistem / (1000 * 60 * 60 * 24));
			  var hours = Math.floor((tanggal_buka_sistem % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
			  var minutes = Math.floor((tanggal_buka_sistem % (1000 * 60 * 60)) / (1000 * 60));
			  var seconds = Math.floor((tanggal_buka_sistem % (1000 * 60)) / 1000);

			  var day = Math.floor(tanggal_tutup_sistem / (1000 * 60 * 60 * 24));
			  var hour = Math.floor((tanggal_tutup_sistem % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
			  var minute = Math.floor((tanggal_tutup_sistem % (1000 * 60 * 60)) / (1000 * 60));
			  var second = Math.floor((tanggal_tutup_sistem % (1000 * 60)) / 1000);

			  // If the count down is over, write some text
			  if (tanggal_buka_sistem > 0) {
			 	// Output the result in an element with id="buka_portal_login"
			  	document.getElementById("buka_portal_login").innerHTML = days + " Hari, " + hours + " Jam, " + minutes + " Menit, " + seconds + "Detik ";
			  }else if(tanggal_tutup_sistem < 0){
			  	clearInterval(x);
			    document.getElementById("buka_portal_login").innerHTML = "TUTUP";
			  }else{
			    clearInterval(x);
			    document.getElementById("buka_portal_login").innerHTML = "BUKA";
			 }
			}, 1000);

			// Update the count down every 1 second
			var y = setInterval(function() {

			  // Get todays date and time
			  var noww = new Date().getTime();

			  // Find the distance between noww and the count down date
			  var tanggal_buka_daftar = buka_daftar - noww;
			  var tanggal_tutup_daftar = tutup_daftar - noww;


			  // Time calculations for days, hours, minutes and seconds
			  var hari = Math.floor(tanggal_buka_daftar / (1000 * 60 * 60 * 24));
			  var jam = Math.floor((tanggal_buka_daftar % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
			  var menit = Math.floor((tanggal_buka_daftar % (1000 * 60 * 60)) / (1000 * 60));
			  var detik = Math.floor((tanggal_buka_daftar % (1000 * 60)) / 1000);


			  // If the count down is over, write some text
			  if (tanggal_buka_daftar > 0) {
			  	// Output the result in an element with id="buka_pendaftaran"
			  	document.getElementById("buka_pendaftaran").innerHTML = hari + " Hari, " + jam + " Jam, " + menit + " Menit, " + detik + " Detik ";
			  }else if(tanggal_tutup_daftar < 0){
			    clearInterval(y);
			    document.getElementById("buka_pendaftaran").innerHTML = "TUTUP";
			  }else{
			    clearInterval(x);
			    document.getElementById("buka_pendaftaran").innerHTML = "BUKA";
			 }
			}, 1000);


	// Update the count down every 1 second
			var y = setInterval(function() {

			  // Get todays date and time
			  var nowww = new Date().getTime();

			  // Find the distance between noww and the count down date
			  var tanggal_buka_pengumuman = buka_pengumuman - nowww;
			  var tanggal_tutup_pengumuman = tutup_pengumuman - nowww;


			  // Time calculations for days, hours, minutes and seconds
			  var hari = Math.floor(tanggal_buka_pengumuman / (1000 * 60 * 60 * 24));
			  var jam = Math.floor((tanggal_buka_pengumuman % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
			  var menit = Math.floor((tanggal_buka_pengumuman % (1000 * 60 * 60)) / (1000 * 60));
			  var detik = Math.floor((tanggal_buka_pengumuman % (1000 * 60)) / 1000);

			    	// Output the result in an element with id="buka_pendaftaran"
			  	document.getElementById("buka_pengumum").innerHTML = hari + " Hari, " + jam + " Jam, " + menit + " Menit, " + detik + " Detik ";
			  // If the count down is over, write some text
			  if (tanggal_buka_pengumuman > 0) {
			  	// Output the result in an element with id="buka_pendaftaran"
			  	document.getElementById("buka_pengumum").innerHTML = hari + " Hari, " + jam + " Jam, " + menit + " Menit, " + detik + " Detik ";
			  }else if(tanggal_tutup_pengumuman < 0){
			    clearInterval(y);
			    document.getElementById("buka_pengumum").innerHTML = "TUTUP";
			  }else{
			    clearInterval(x);
			    document.getElementById("buka_pengumum").innerHTML = "BUKA";
			 }


			}, 1000);

			/*Disable Klik Kanan*/
			//var message="KLIK KANAN DIMATIIN YA";

			///////////////////////////////////
/*
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
			*/
			/*end Disable Klik Kanan*/

			/*disable ctrl-U*/
		//	window.addEventListener("keydown",function(e){if(e.ctrlKey&&(e.which==65||e.which==66||e.which==67||e.which==73||e.which==80||e.which==83||e.which==85||e.which==86)){e.preventDefault()}});document.keypress=function(e){if(e.ctrlKey&&(e.which==65||e.which==66||e.which==67||e.which==73||e.which==80||e.which==83||e.which==85||e.which==86)){}return false}
			/*End disable ctrl-U*/
			$(document).ready(function () {
			    var img_array = [1, 2, 3, 4, 5],
			        newIndex = 0,
			        index = 0,
			        interval = 5000;
			    (function changeBg() {

		            // newIndex = Math.floor(Math.random() * 10) % img_array.length;
		            // index = (newIndex === index) ? newIndex -1 : newIndex;


		            index = (index + 1) % img_array.length;

			        $('body').css('backgroundImage', function () {
			            $('#fullPage').animate({
			                backgroundColor: 'transparent'
			            }, 1000, function () {
			                setTimeout(function () {
			                    $('#fullPage').animate({
			                        backgroundColor: 'rgb(255,255,255)'
			                    }, 1000);
			                }, 3000);
			            });
			            return 'url(<?=base_url('assets/img/bg'); ?>' + img_array[index] + '.jpg)';
			        });
			        setTimeout(changeBg, interval);
			    })();
			});
		</script>
	</body>
</html>
