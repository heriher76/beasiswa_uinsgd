<?php
	$this->load->view('project_bidikmisi/header/mahasiswa/header');
?>
<!DOCTYPE html>
<html>
	<body>
		<div class="container col-md-8">
			<div class="row">
				<div class="panel panel-info col-md-offset-1">
					<div class="panel-heading">
						<h3>Pengumuman Kelulusan Bidikmisi Tahun <?php echo date('Y'); ?></h3>
					</div>

					<div class="panel-body">
						<?php
							date_default_timezone_set('Asia/Jakarta');
	   						$tgl_sekarang = date('Y-m-d H:i:s');
	   						$tgl_pengumuman = $this->session->userdata('pengumuman');
	   						$tgl_tutup_pengumuman = $this->session->userdata('tutup_pengumuman');
							if($tgl_tutup_pengumuman >= $tgl_sekarang && $tgl_pengumuman <= $tgl_sekarang){
						?>
							<div style="background-color:#4682B4; padding:10px; color:white;">
								<h4>Data Mahasiswa Pendaftar</h4>
							</div>
						<center>	
							<?php foreach($data as $value) { ?>
								<?php if($value->getLulus == 'TIDAK LULUS' && $value->reg == 2) { ?>
									<table class="table">
										<tr>
											<td>No Pendaftaran</td>
											<td>:</td>
											<td><?php echo $value->no_pendaftaran; ?></td>
										</tr>

										<tr>
											<td>Nama Mahasiswa</td>
											<td>:</td>
											<td><?php echo $value->nama_mahasiswa; ?></td>
										</tr>

										<tr>
											<td>Fakultas</td>
											<td>:</td>
											<td><?php
												foreach($fakultas as $x_fak){
														if($value->fakultas == $x_fak->id_fakultas){
															echo $x_fak->nama_fakultas;
														}
													} 
											?></td>
										</tr>

										<tr>
											<td>Jurusan</td>
											<td>:</td>
											<td><?php 
											foreach($jurusan as $x_jur){
													if($value->jurusan == $x_jur->id_jurusan){
														echo $x_jur->nama_jurusan;
													}
												} 
											?></td>
										</tr>
									</table>
								<div style="background-color: red; padding:10px; color:white;">
									<p>
									    <?php foreach($data_pengumuman as $value) {
									       echo $value->pengumuman_tidak_lulus;
									    } ?>
									</p>
									<!--<p>Anda dinyatakan <u><b><?php echo $value->getLulus; ?></b></u> dalam program Bidikmisi Universitas Islam Negeri Sunan Gunung Djati Bandung Tahun <?php echo date('Y'); ?></p>-->
								 <!--   <p>-->
									<!--    Assalamu’alaikum. Wr. Wb.<br/>-->
         <!--                               Berdasarkan hasil seleksi administrasi calon penerima beasiswa Bidikmisi Tahun Akademik 2019/2020 pada tanggal 20 September 2019, dengan ini kami tetapkan mahasiswa yang Lolos Tahap I (daftar terlampir). Selanjutnya Bagi yang lolos Tahap I akan dilaksanakan seleksi Tahap II yaitu Visitasi atau Survey ke alamat calon penerima beasiswa Bidikmisi.-->
         <!--                               Bagi yang tidak lolos Tahap I dipersilahkan untuk daftar penyesuaian UKIT di <a target="_blank" href="https://penyesuaianukt.uinsgd.ac.id">https://penyesuaianukt.uinsgd.ac.id</a> dari tanggal, 1 s.d 10 Oktober 2019.-->
         <!--                               Demikian agar menjadi maklum.<br/>-->
         <!--                               Wassalamu’alaikum Wr. Wb.-->
         <!--                           </p>-->
								</div>
								<?php }else if($value->getLulus == 'LULUS' && $value->reg == 2) { ?>
									<table class="table">
										<tr>
											<td>No Pendaftaran</td>
											<td>:</td>
											<td><?php echo $value->no_pendaftaran; ?></td>
										</tr>

										<tr>
											<td>Nama Mahasiswa</td>
											<td>:</td>
											<td><?php echo $value->nama_mahasiswa; ?></td>
										</tr>

										<tr>
											<td>Fakultas</td>
											<td>:</td>
											<td><?php
												foreach($fakultas as $x_fak){
														if($value->fakultas == $x_fak->id_fakultas){
															echo $x_fak->nama_fakultas;
														}
													} 
											?></td>
										</tr>

										<tr>
											<td>Jurusan</td>
											<td>:</td>
											<td><?php 
											foreach($jurusan as $x_jur){
													if($value->jurusan == $x_jur->id_jurusan){
														echo $x_jur->nama_jurusan;
													}
												} 
											?></td>
										</tr>
									</table>

								<?php if($value->prioritas == 1) { ?>
									<div style="background-color: orange; padding:10px; color:white;">
										<p>Maaf, Anda hanya dinyatakan <u><b><?php echo $value->getLulus; ?></b></u> dalam Tahap 1 program Bidikmisi Universitas Islam Negeri Sunan Gunung Djati Bandung Tahun <?php echo date('Y'); ?>, Namun pada Tahap 2 Anda dinyatakan <u><b>TIDAK LULUS</b></u>.
										Pengumuman Bidikmisi Akan Ditutup Pada Hari/Tanggal <b><u><?php echo tgl_indonesia($tgl_tutup_pengumuman); ?></u></b>
										</p>
									</div>
								<?php }else{ ?>
									<div style="background-color: #00FF00; padding:10px; color:black;">
										<p>
										    <?php foreach($data_pengumuman as $value) {
										       echo $value->pengumuman_lulus;
										    } ?>
										</p>
										<!--<p>Selamat, Anda dinyatakan <u><b><?php echo $value->getLulus; ?></b></u> dalam Tahap 1 program Bidikmisi Universitas Islam Negeri Sunan Gunung Djati Bandung Tahun <?php echo date('Y'); ?>,-->
										<!--Tahap Selanjutnya Adalah Tahap 2 yaitu Visitasi atau Survey ke Rumah Alamat Calon Penerima Beasiswa Bidikmisi.-->
										<!--Pengumuman Bidikmisi Akan Ditutup Pada Hari/Tanggal <b><u><?php echo tgl_indonesia($tgl_tutup_pengumuman); ?></u></b>-->
										<!--</p>-->
										<!--<p>-->
										<!--    Assalamu’alaikum. Wr. Wb.<br/>-->
          <!--                                  Berdasarkan hasil seleksi administrasi calon penerima beasiswa Bidikmisi Tahun Akademik 2019/2020 pada tanggal 20 September 2019, dengan ini kami tetapkan mahasiswa yang Lolos Tahap I (daftar terlampir). Selanjutnya Bagi yang lolos Tahap I akan dilaksanakan seleksi Tahap II yaitu Visitasi atau Survey ke alamat calon penerima beasiswa Bidikmisi.-->
          <!--                                  Bagi yang tidak lolos Tahap I dipersilahkan untuk daftar penyesuaian UKIT di <a target="_blank" href="https://penyesuaianukt.uinsgd.ac.id">https://penyesuaianukt.uinsgd.ac.id</a> dari tanggal, 1 s.d 10 Oktober 2019.-->
          <!--                                  Demikian agar menjadi maklum.<br/>-->
          <!--                                  Wassalamu’alaikum Wr. Wb.-->
          <!--                              </p>-->
									</div>
								<?php } ?>
							</center>
								<?php }else if($value->getLulus == 'PENDING' && $value->reg == 2) { ?>
									<table class="table">
										<tr>
											<td>No Pendaftaran</td>
											<td>:</td>
											<td><?php echo $value->no_pendaftaran; ?></td>
										</tr>

										<tr>
											<td>Nama Mahasiswa</td>
											<td>:</td>
											<td><?php echo $value->nama_mahasiswa; ?></td>
										</tr>

										<tr>
											<td>Fakultas</td>
											<td>:</td>
											<td><?php
												foreach($fakultas as $x_fak){
														if($value->fakultas == $x_fak->id_fakultas){
															echo $x_fak->nama_fakultas;
														}
													} 
											?></td>
										</tr>

										<tr>
											<td>Jurusan</td>
											<td>:</td>
											<td><?php 
											foreach($jurusan as $x_jur){
													if($value->jurusan == $x_jur->id_jurusan){
														echo $x_jur->nama_jurusan;
													}
												} 
											?></td>
										</tr>
									</table>
								
									<div style="background-color: #BF9000; padding:10px; color:white;">
										<p>Status Bidikmisi anda masih dinyatakan <u><b><?php echo $value->getLulus; ?></b></u> Silahkan hubungi bagian kemahasiswaan Universitas Islam Negeri Sunan Gunung Djati Bandung.</p>
									</div>
								<?php }else if($value->getLulus == 'LULUS' && $value->reg == 3) { ?>
								    <table class="table">
										<tr>
											<td>No Pendaftaran</td>
											<td>:</td>
											<td><?php echo $value->no_pendaftaran; ?></td>
										</tr>

										<tr>
											<td>Nama Mahasiswa</td>
											<td>:</td>
											<td><?php echo $value->nama_mahasiswa; ?></td>
										</tr>

										<tr>
											<td>Fakultas</td>
											<td>:</td>
											<td><?php
												foreach($fakultas as $x_fak){
														if($value->fakultas == $x_fak->id_fakultas){
															echo $x_fak->nama_fakultas;
														}
													} 
											?></td>
										</tr>

										<tr>
											<td>Jurusan</td>
											<td>:</td>
											<td><?php 
											foreach($jurusan as $x_jur){
													if($value->jurusan == $x_jur->id_jurusan){
														echo $x_jur->nama_jurusan;
													}
												} 
											?></td>
										</tr>
									</table>
								    
								    <div style="background-color: green; padding:10px; color:white;">
									    <p>
										    <?php foreach($data_pengumuman as $value) {
										       echo $value->pengumuman_lulus2;
										    } ?>
										</p>
									    <!--<p>Selamat, Anda dinyatakan <u><b><?php echo $value->getLulus; ?></b></u> dalam Tahap 2 program Bidikmisi Universitas Islam Negeri Sunan Gunung Djati Bandung Tahun <?php echo date('Y'); ?>,-->
									    <!--Pengumuman Bidikmisi Akan Ditutup Pada Hari/Tanggal <b><u><?php echo tgl_indonesia($tgl_tutup_pengumuman); ?></u></b>-->
									    <!--</p>-->
								    </div>
								<?php } ?>
							<?php } ?>
						<center>
						<?php } else if($tgl_sekarang < $tgl_pengumuman){ ?>
								<div class="alert alert-warning">
									<p>Hasil Kelulusan Bidikmisi Anda Belum Keluar, Akan Keluar pada Hari/Tanggal <br/><b><?php echo tgl_indonesia($tgl_pengumuman); ?></b></p>
								</div>
						<?php }else if($tgl_sekarang > $tgl_tutup_pengumuman){ ?>
						        <div class="alert alert-warning">
						            <p>Pengumuman Bidikmisi UIN SGD Bandung Telah di <b><u>TUTUP</u></b></p>
						        </div>
						<?php } ?>
						</center>
					</div> <!--End class="panel-body"-->
				</div> <!--End class="panel panel-info"-->

				<div class="text-center">
				<?php
					//load footer
					$this->load->view('project_bidikmisi/footer/footer');
				?>
				</div>
			</div> <!--End class="row"-->
		</div> <!--End class="container col-md-8"-->		
	</body>
</html>