<?php $this->load->view('project_bidikmisi/header/admin/header'); ?>
		<div class="content-wrapper">
			<section class="content-header">
				<h1>
					<i class="fa" aria-hidden="true"></i> Tentang Administrator
				</h1>
			</section>

			<section class="content">
				<div class="row">
					<div class="col-md-12">
						<div class="box">
							<div class="box-header">
								<h3 class="box-title">Administrator Guide</h3>
							</div>

							<div class="box-body">
								<h4>Halaman ini menjelaskan tentang penggunaan setiap fitur administrator</h4>
								<div class="col-md-6">
									<p><u>1. Menu Dashboard</u></p>
									<p>Pada menu dashboard admin dapat melihat jumlah peserta keseluruhan sampai peserta terverifikasi, admin juga dapat melihat jadwal pembukaan, penutupan, dan pengumuman yang disetting oleh admin selain itu admin juga dapat melihat kuota per-fakultas untuk pendaftar yang lulus, dihalaman dashboard juga admin dapat melihat grafik bidikmisi per-fakultas</p>
									<p><u>2. Menu Setting Bidikmisi</u></p>
									<p>Pada Menu setting bidikmisi ada beberapa sub-menu, yaitu sebagai berikut</p>
									<p>2.1 Insert Data Manual</p>
									<p>Pada Insert data Manual, admin dapat menambahkan data secara satu-persatu, dimulai dengan nomor pendaftaran sampai ke kategori UKT, dan jika nomor pendaftaran mahasiswa sudah ada, maka akan keluar notifikasi "No Pendaftaran sudah ada di database" dan jika data berhasil ditambah maka akan keluar notifikasi "DAta Berhasil ditambahkan"</p>
									<p>2.2 Insert Data Excel</p>
									<p>Pada insert data excel, admin dapat menambahkan data secara sekaligus, dimulai dengan nomor pendaftaran sampai ke kategori UKT, untuk lebih jelasnya silahkan download format excel di halaman tersebut, maka akan ada guide khusus dari insert data excel tersebut.</p>
									<p>2.3 Setting Jadwal</p>
									<p>Pada setting jadwal, admin dapat mengatur jadwal kapan dibuka dan ditutupnya sistem bidikmisi untuk mahasiswa, dan admin juga dapat mengatur kapan pengumuman akan ditampilkan dihalaman mahasiswa</p>
									<p>2.4 Setting Kuota</p>
									<p>Pada setting kuota, admin dapat mengatur berapa banyak kuota bidikmisi per-fakultas</p>
									<p>2.5 Setting Tahun Lulus</p>
									<p>Pada setting tahun lulus, admin dapat mengatur tahun lulus sekolah untuk mahasiswa</p>
									<p>2.6 Setting Document Bidikmisi</p>
									<p>Pada setting document, admin dapat melakukan penguploadan untuk document bidikmisi</p>
									<p>2.7 Reset Password Mahasiswa</p>
									<p>Pada halaman reset password mahasiswa, admin dapat mengatur password mahasiswa dan meresetnya jika mahasiswa tersebut lupa dengan passwordnya</p>
									<p>2.8 Ambil Data PMB/Backup data</p>
									<p>Pada halaman ini, admin dapat mengambil data PMB ataupun membackup data yang sudah ada</p>
								</div>

								<div class="col-md-6">
									<p><u>3. Menu Data Admin</u></p>
									<p>Pada menu data admin, admin dapat menambah/mengurangi akun administrator/executive pada sistem bidikmisi</p>
									<p><u>4. Menu Data Pendaftar</u></p>
									<p>Pada menu data pendaftar ada beberapa sub-menu yaitu sebagai berikut : </p>
									<p>4.1 Data Seluruh Peserta</p>
									<p>Pada menu data seluruh peserta, admin dapat melihat keseluruhan data peserta yang ada pada database dan mensearch data sesuai kolom yang ada</p>
									<p>4.2 Data Peserta</p>
									<p>Pada menu ini, admin dapat melihat mahasiswa yang daftar pada sistem bidikmisi, dan admin juga dapat mengedit data bidikmisi dari si mahasiswa tersebut</p>
									<p>4.3 Data Peserta Lulus</p>
									<p>Pada menu ini, admin dapat melihat siapa saja yang layak untuk mendapatkan beasiswa bidikmisi, dengan menekan tombol VALIDASI KELULUSAN, admin dapat mensorting data mahasiswa yang ada di menu data peserta dan kuota bidikmisi pun akan berkurang sesuai dengan kuota yang telah diinputkan oleh administrator.</p>
									<p>4.4 Data Peserta Tidak Lulus</p>
									<p>Pada menu ini, admin dapat melihat peserta yang tidak lulus, setelah tombol validasi kelulusan ditekan.</p>
									<p>4.5 Data Peserta Verifikasi</p>
									<p>pada menu ini, admin dapat melihat peserta yang sudah verifikasi data mereka secara online.</p>
									<p>4.6 Data Orang Tua Meninggal </p>
									<p>Pada menu ini, admin dapat melihat peserta yang kedua orang tuanya sudah almarhum dan almarhumah</p>
									<p>4.7 Data Orang Tua Masih ada </p>
									<p>Pada menu ini, admin dapat melihat peserta yang kedua orang tuanya Masih ada</p>
									<p>4.8 Data Ayah Meninggal </p>
									<p>Pada menu ini, admin dapat melihat peserta yang ayahnya sudah almarhum</p>
									<p>4.9 Data Ibu Meninggal </p>
									<p>Pada menu ini, admin dapat melihat peserta yang ibunya almarhumah</p>
									<p>4.10 Data Per-wilayah </p>
									<p>Pada menu ini, admin dapat melihat peserta yang sesuai provinsi dan kab/kota mahasiswa</p>
									<p>4.11 Data Pernah Pesantren </p>
									<p>Pada menu ini, admin dapat melihat peserta yang Pernah Pesantren</p>
									<p>4.12 Data Tidak Pernah Pesantren </p>
									<p>Pada menu ini, admin dapat melihat peserta yang Tidak Pernah Pesantren</p>
									<p>4.13 Data Tahunan </p>
									<p>Pada menu ini, admin dapat melihat peserta sesuai dengan tahun yang diinputkan</p>
									<p><u>5. Cetak Laporan</u></p>
									<p>Pada menu ini, admin dapat mencetak laporan sesuai kebutuhan seperti print data kedua orang tua meninggal sampai ke data per-fakultasnya</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
		</div>
		<?php $this->load->view('project_bidikmisi/footer/footer'); ?>
	</body>
</html>