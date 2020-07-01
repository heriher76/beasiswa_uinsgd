<?php
	$reg = $this->session->userdata('reg');
	
	if($reg != 10){
		$this->session->sess_destroy();
		redirect('C_login');
	}
?>
<!DOCTYPE html>
<html>
	<body>
		<?php
			echo $this->session->flashdata('direct9_success');
		?>

		<a href="<?=base_url('C_login/logout'); ?>">Logout</a>
		<button data-toggle="modal" data-target="#edit" type="submit">Edit Identitas Diri</button>
		
		<form>
			<table>
				<?php foreach($data as $value) { ?>
				
				<!--Identitas Diri-->
				<tr>
					<td><h2>Identitas Diri</h2></td>
				</tr>

				<tr>
					<td><img style="width: 130px; height: 130px;" src="<?php echo base_url(). 'assets/foto_mhs/'.$value->upload_foto; ?>"></td>
				</tr>

				<tr>
					<td>Nama Lengkap</td>
					<td>:</td>
					<td><?php echo $value->nama_mahasiswa; ?></td>
				</tr>

				<tr>
					<td>Jenis Kelamin</td>
					<td>:</td>
					<td><?php echo $value->jenis_kelamin; ?></td>
				</tr>

				<tr>
					<td>Tempat Lahir</td>
					<td>:</td>
					<td><?php echo $value->tempat_lahir; ?></td>
				</tr>

				<tr>
					<td>Tanggal Lahir</td>
					<td>:</td>
					<td><?php echo $value->tanggal_lahir; ?></td>
				</tr>

				<tr>
					<td>Status Pernikahan</td>
					<td>:</td>
					<td><?php echo $value->status_pernikahan; ?></td>
				</tr>

				<tr>
					<td>Asal Provinsi</td>
					<td>:</td>
					<td><?php 
							
							/*if($value->asal_provinsi == '100'){
								echo "D.K.I JAKARTA";
							}else if($value->asal_provinsi == '101'){
								echo "JAWA BARAT";
							}else if($value->asal_provinsi == '102'){
								echo "JAWA TENGAH";
							}else if($value->asal_provinsi == '103'){
								echo "D.I. YOGYAKARTA";
							}else if($value->asal_provinsi == '104'){
								echo "JAWA TIMUR";
							}else if($value->asal_provinsi == '105'){
								echo "ACEH";
							}else if($value->asal_provinsi == '106'){
								echo "SUMATERA UTARA";
							}else if($value->asal_provinsi == '107'){
								echo "SUMATERA BARAT";
							}else if($value->asal_provinsi == '108'){
								echo "RIAU";
							}else if($value->asal_provinsi == '109'){
								echo "JAMBI";
							}else if($value->asal_provinsi == '110'){
								echo "SUMATERA SELATAN";
							}else if($value->asal_provinsi == '111'){
								echo "LAMPUNG";
							}else if($value->asal_provinsi == '112'){
								echo "KALIMANTAN BARAT";
							}else if($value->asal_provinsi == '113'){
								echo "KALIMANTAN TENGAH";
							}else if($value->asal_provinsi == '114'){
								echo "KALIMANTAN SELATAN";
							}else if($value->asal_provinsi == '115'){
								echo "KALIMANTAN TIMUR";
							}else if($value->asal_provinsi == '116'){
								echo "SULAWESI UTARA";
							}else if($value->asal_provinsi == '117'){
								echo "SULAWESI TENGAH";
							}else if($value->asal_provinsi == '118'){
								echo "SULAWESI SELATAN";
							}else if($value->asal_provinsi == '119'){
								echo "SULAWESI TENGGARA";
							}else if($value->asal_provinsi == '120'){
								echo "MALUKU";
							}else if($value->asal_provinsi == '121'){
								echo "BALI";
							}else if($value->asal_provinsi == '122'){
								echo "NUSA TENGGARA BARAT";
							}else if($value->asal_provinsi == '123'){
								echo "NUSA TENGGARA TIMUR";
							}else if($value->asal_provinsi == '124'){
								echo "PAPUA";
							}else if($value->asal_provinsi == '125'){
								echo "BENGKULU";
							}else if($value->asal_provinsi == '126'){
								echo "MALUKU UTARA";
							}else if($value->asal_provinsi == '127'){
								echo "BANTEN";
							}else if($value->asal_provinsi == '128'){
								echo "BANGKA BELITUNG";
							}else if($value->asal_provinsi == '129'){
								echo "GORONTALO";
							}else if($value->asal_provinsi == '130'){
								echo "KEPULAUAN RIAU";
							}else if($value->asal_provinsi == '131'){
								echo "PAPUA BARAT";
							}else if($value->asal_provinsi == '132'){
								echo "SULAWESI BARAT";
							}else if($value->asal_provinsi == '133'){
								echo "KALIMANTAN UTARA";
							}else if($value->asal_provinsi == '134'){
								echo "LUAR NEGERI";
							}else{
								echo "Tidak Valid";
							}*/	
						?></td>
				</tr>

				<tr>
					<td>Asal Kab/Kota</td>
					<td>:</td>
					<td><?php 
							if($value->asal_kab_kota == '200'){
								echo "KAB. KEPULAUAN SERIBU";
							}else if($value->asal_kab_kota == '201'){
								echo "KOTA JAKARTA PUSAT";
							}else if($value->asal_kab_kota == '202'){
								echo "KOTA JAKARTA UTARA";
							}else if($value->asal_kab_kota == '203'){
								echo "KOTA JAKARTA BARAT";
							}else if($value->asal_kab_kota == '204'){
								echo "KOTA JAKARTA SELATAN";
							}else if($value->asal_kab_kota == '205'){
								echo "KOTA JAKARTA TIMUR";
							}else if($value->asal_kab_kota == '206'){
								echo "KAB. BOGOR";
							}else if($value->asal_kab_kota == '207'){
								echo "KAB. SUKABUMI";
							}else if($value->asal_kab_kota == '208'){
								echo "KAB. CIANJUR";
							}else if($value->asal_kab_kota == '209'){
								echo "KAB. BANDUNG";
							}else if($value->asal_kab_kota == '210'){
								echo "KAB. SUMEDANG";
							}else if($value->asal_kab_kota == '211'){
								echo "KAB. GARUT";
							}else if($value->asal_kab_kota == '212'){
								echo "KAB. TASIKMALAYA";
							}else if($value->asal_kab_kota == '213'){
								echo "KAB. CIAMIS";
							}else if($value->asal_kab_kota == '214'){
								echo "KAB. KUNINGAN";
							}else if($value->asal_kab_kota == '215'){
								echo "KAB. MAJALENGKA";
							}else if($value->asal_kab_kota == '216'){
								echo "KAB. CIREBON";
							}else if($value->asal_kab_kota == '217'){
								echo "KAB. INDRAMAYU";
							}else if($value->asal_kab_kota == '218'){
								echo "KAB. SUBANG";
							}else if($value->asal_kab_kota == '219'){
								echo "KAB. PURWAKARTA";
							}else if($value->asal_kab_kota == '220'){
								echo "KAB. KARAWANG";
							}else if($value->asal_kab_kota == '221'){
								echo "KAB. BEKASI";
							}else if($value->asal_kab_kota == '222'){
								echo "KAB. BANDUNG BARAT";
							}else if($value->asal_kab_kota == '223'){
								echo "KAB. PANGANDARAN";
							}else if($value->asal_kab_kota == '224'){
								echo "KOTA BANDUNG";
							}else if($value->asal_kab_kota == '225'){
								echo "KOTA BOGOR";
							}else if($value->asal_kab_kota == '226'){
								echo "KOTA SUKABUMI";
							}else if($value->asal_kab_kota == '227'){
								echo "KOTA CIREBON";
							}else if($value->asal_kab_kota == '228'){
								echo "KOTA BEKASI";
							}else if($value->asal_kab_kota == '229'){
								echo "KOTA DEPOK";
							}else if($value->asal_kab_kota == '230'){
								echo "KOTA CIMAHI";
							}else if($value->asal_kab_kota == '231'){
								echo "KOTA TASIKMALAYA";
							}else if($value->asal_kab_kota == '232'){
								echo "KOTA BANJAR";
							}else if($value->asal_kab_kota == '233'){
								echo "KAB. CILACAP";
							}else if($value->asal_kab_kota == '234'){
								echo "KAB. BANYUMAS";
							}else if($value->asal_kab_kota == '235'){
								echo "KAB. PURBALINGGA";
							}else if($value->asal_kab_kota == '236'){
								echo "KAB. BANJARNEGARA";
							}else if($value->asal_kab_kota == '237'){
								echo "KAB. KEBUMEN";
							}else if($value->asal_kab_kota == '238'){
								echo "KAB. PURWOREJO";
							}else if($value->asal_kab_kota == '239'){
								echo "KAB. WONOSOBO";
							}else if($value->asal_kab_kota == '240'){
								echo "KAB. MAGELANG";
							}else if($value->asal_kab_kota == '241'){
								echo "KAB. BOYOLALI";
							}else if($value->asal_kab_kota == '242'){
								echo "KAB. KLATEN";
							}else if($value->asal_kab_kota == '243'){
								echo "KAB. SUKOHARJO";
							}else if($value->asal_kab_kota == '244'){
								echo "KAB. WONOGIRI";
							}else if($value->asal_kab_kota == '245'){
								echo "KAB. KARANGANYAR";
							}else if($value->asal_kab_kota == '246'){
								echo "KAB. SRAGEN";
							}else if($value->asal_kab_kota == '247'){
								echo "KAB. GROBOGAN";
							}else if($value->asal_kab_kota == '248'){
								echo "KAB. BLORA";
							}else if($value->asal_kab_kota == '249'){
								echo "KAB. REMBANG";
							}else if($value->asal_kab_kota == '250'){
								echo "KAB. PATI";
							}else if($value->asal_kab_kota == '251'){
								echo "KAB. KUDUS";
							}else if($value->asal_kab_kota == '252'){
								echo "KAB. JEPARA";
							}else if($value->asal_kab_kota == '253'){
								echo "KAB. DEMAK";
							}else if($value->asal_kab_kota == '254'){
								echo "KAB. SEMARANG";
							}else if($value->asal_kab_kota == '255'){
								echo "KAB. TEMANGGUNG";
							}else if($value->asal_kab_kota == '256'){
								echo "KAB. KENDAL";
							}else if($value->asal_kab_kota == '257'){
								echo "KAB. BATANG";
							}else if($value->asal_kab_kota == '258'){
								echo "KAB. PEKALONGAN";
							}else if($value->asal_kab_kota == '259'){
								echo "KAB. PEMALANG";
							}else if($value->asal_kab_kota == '260'){
								echo "KAB. TEGAL";
							}else if($value->asal_kab_kota == '261'){
								echo "KAB. BREBES";
							}else if($value->asal_kab_kota == '262'){
								echo "KOTA MAGELANG";
							}else if($value->asal_kab_kota == '263'){
								echo "KOTA SURAKARTA";
							}else if($value->asal_kab_kota == '264'){
								echo "KOTA SALATIGA";
							}else if($value->asal_kab_kota == '265'){
								echo "KOTA SEMARANG";
							}else if($value->asal_kab_kota == '266'){
								echo "KOTA PEKALONGAN";
							}else if($value->asal_kab_kota == '267'){
								echo "KOTA TEGAL";
							}else if($value->asal_kab_kota == '268'){
								echo "KAB. BANTUL";
							}else if($value->asal_kab_kota == '269'){
								echo "KAB. SLEMAN";
							}else if($value->asal_kab_kota == '270'){
								echo "KAB. GUNUNG KIDUL";
							}else if($value->asal_kab_kota == '271'){
								echo "KAB. KULON PROGO";
							}else if($value->asal_kab_kota == '272'){
								echo "KOTA YOGYAKARTA";
							}else if($value->asal_kab_kota == '273'){
								echo "KAB. GRESIK";
							}else if($value->asal_kab_kota == '274'){
								echo "KAB. SIDOARJO";
							}else if($value->asal_kab_kota == '275'){
								echo "KAB. MOJOKERTO";
							}else if($value->asal_kab_kota == '276'){
								echo "KAB. JOMBANG";
							}else if($value->asal_kab_kota == '277'){
								echo "KAB. BOJONEGORO";
							}else if($value->asal_kab_kota == '278'){
								echo "KAB. TUBAN";
							}else if($value->asal_kab_kota == '279'){
								echo "KAB. LAMONGAN";
							}else if($value->asal_kab_kota == '280'){
								echo "KAB. MADIUN";
							}else if($value->asal_kab_kota == '281'){
								echo "KAB. NGAWI";
							}else if($value->asal_kab_kota == '282'){
								echo "KAB. MAGETAN";
							}else if($value->asal_kab_kota == '283'){
								echo "KAB. PONOROGO";
							}else if($value->asal_kab_kota == '284'){
								echo "KAB. PACITAN";
							}else if($value->asal_kab_kota == '285'){
								echo "KAB. KEDIRI";
							}else if($value->asal_kab_kota == '286'){
								echo "KAB. NGANJUK";
							}else if($value->asal_kab_kota == '287'){
								echo "KAB. BLITAR";
							}else if($value->asal_kab_kota == '288'){
								echo "KAB. TULUNGAGUNG";
							}else if($value->asal_kab_kota == '289'){
								echo "KAB. TRENGGALEK";
							}else if($value->asal_kab_kota == '290'){
								echo "KAB. MALANG";
							}else if($value->asal_kab_kota == '291'){
								echo "KAB. PASURUAN";
							}else if($value->asal_kab_kota == '292'){
								echo "KAB. PROBOLINGGO";
							}else if($value->asal_kab_kota == '293'){
								echo "KAB. LUMAJANG";
							}else if($value->asal_kab_kota == '294'){
								echo "KAB. BONDOWOSO";
							}else if($value->asal_kab_kota == '295'){
								echo "KAB. SITUBONDO";
							}else if($value->asal_kab_kota == '296'){
								echo "KAB. JEMBER";
							}else if($value->asal_kab_kota == '297'){
								echo "KAB. BANYUWANGI";
							}else if($value->asal_kab_kota == '298'){
								echo "KAB. PAMEKASAN";
							}else if($value->asal_kab_kota == '299'){
								echo "KAB. SAMPANG";
							}else if($value->asal_kab_kota == '300'){
								echo "KAB. SUMENEP";
							}else if($value->asal_kab_kota == '301'){
								echo "KAB. BANGKALAN";
							}else if($value->asal_kab_kota == '302'){
								echo "KOTA SURABAYA";
							}else if($value->asal_kab_kota == '303'){
								echo "KOTA MALANG";
							}else if($value->asal_kab_kota == '304'){
								echo "KOTA MADIUN";
							}else if($value->asal_kab_kota == '305'){
								echo "KOTA KEDIRI";
							}else if($value->asal_kab_kota == '306'){
								echo "KOTA MOJOKERTO";
							}else if($value->asal_kab_kota == '307'){
								echo "KOTA BLITAR";
							}else if($value->asal_kab_kota == '308'){
								echo "KOTA PASURUAN";
							}else if($value->asal_kab_kota == '309'){
								echo "KOTA PROBOLINGGO";
							}else if($value->asal_kab_kota == '310'){
								echo "KOTA BATU";
							}else if($value->asal_kab_kota == '311'){
								echo "KAB. ACEH BESAR";
							}else if($value->asal_kab_kota == '312'){
								echo "KAB. PIDIE";
							}else if($value->asal_kab_kota == '313'){
								echo "KAB. ACEH UTARA";
							}else if($value->asal_kab_kota == '314'){
								echo "KAB. ACEH TIMUR";
							}else if($value->asal_kab_kota == '315'){
								echo "KAB. ACEH TENGAH";
							}else if($value->asal_kab_kota == '316'){
								echo "KAB. ACEH BARAT";
							}else if($value->asal_kab_kota == '317'){
								echo "KAB. ACEH SELATAN";
							}else if($value->asal_kab_kota == '318'){
								echo "KAB. ACEH TENGGARA";
							}else if($value->asal_kab_kota == '319'){
								echo "KAB. SIMEULUE";
							}else if($value->asal_kab_kota == '320'){
								echo "KAB. BIREUEN";
							}else if($value->asal_kab_kota == '321'){
								echo "KAB. ACEH SINGKIL";
							}else if($value->asal_kab_kota == '322'){
								echo "KAB. ACEH TAMIANG";
							}else if($value->asal_kab_kota == '323'){
								echo "KAB. NAGAN RAYA";
							}else if($value->asal_kab_kota == '324'){
								echo "KAB. ACEH JAYA";
							}else if($value->asal_kab_kota == '325'){
								echo "KAB. ACEH BARAT DAYA";
							}else if($value->asal_kab_kota == '326'){
								echo "KAB. GAYO LUES";
							}else if($value->asal_kab_kota == '327'){
								echo "KAB. BENER MERIAH";
							}else if($value->asal_kab_kota == '328'){
								echo "KAB. PIDIE JAYA";
							}else if($value->asal_kab_kota == '329'){
								echo "KOTA SABANG";
							}else if($value->asal_kab_kota == '330'){
								echo "KOTA BANDA ACEH";
							}else if($value->asal_kab_kota == '331'){
								echo "KOTA LHOKSEUMAWE";
							}else if($value->asal_kab_kota == '332'){
								echo "KOTA LANGSA";
							}else if($value->asal_kab_kota == '333'){
								echo "KOTA SUBULUSSALAM";
							}else if($value->asal_kab_kota == '334'){
								echo "KAB. DELI SERDANG";
							}else if($value->asal_kab_kota == '335'){
								echo "KAB. LANGKAT";
							}else if($value->asal_kab_kota == '336'){
								echo "KAB. KARO";
							}else if($value->asal_kab_kota == '337'){
								echo "KAB. SIMALUNGUN";
							}else if($value->asal_kab_kota == '338'){
								echo "KAB. DAIRI";
							}else if($value->asal_kab_kota == '339'){
								echo "KAB. ASAHAN";
							}else if($value->asal_kab_kota == '340'){
								echo "KAB. LABUHAN BATU";
							}else if($value->asal_kab_kota == '341'){
								echo "KAB. TAPANULI UTARA";
							}else if($value->asal_kab_kota == '342'){
								echo "KAB. TAPANULI TENGAH";
							}else if($value->asal_kab_kota == '343'){
								echo "KAB. TAPANULI SELATAN";
							}else if($value->asal_kab_kota == '344'){
								echo "KAB. NIAS";
							}else if($value->asal_kab_kota == '345'){
								echo "KAB. MANDAILING NATAL";
							}else if($value->asal_kab_kota == '346'){
								echo "KAB. TOBA SAMOSIR";
							}else if($value->asal_kab_kota == '347'){
								echo "KAB. NIAS SELATAN";
							}else if($value->asal_kab_kota == '348'){
								echo "KAB. PAK PAK BHARAT";
							}else if($value->asal_kab_kota == '349'){
								echo "KAB. HUMBANG HASUDUTAN";
							}else if($value->asal_kab_kota == '350'){
								echo "KAB. SAMOSIR";
							}else if($value->asal_kab_kota == '351'){
								echo "KAB. SERDANG BEDAGAI";
							}else if($value->asal_kab_kota == '352'){
								echo "KAB. BATUBARA";
							}else if($value->asal_kab_kota == '353'){
								echo "KAB. PADANG LAWAS UTARA";
							}else if($value->asal_kab_kota == '354'){
								echo "KAB. PADANG LAWAS";
							}else if($value->asal_kab_kota == '355'){
								echo "KAB. LABUHAN BATU UTARA";
							}else if($value->asal_kab_kota == '356'){
								echo "KAB. LABUHAN BATU SELATAN";
							}else if($value->asal_kab_kota == '357'){
								echo "KAB. NIAS BARAT";
							}else if($value->asal_kab_kota == '358'){
								echo "KAB. NIAS UTARA";
							}else if($value->asal_kab_kota == '359'){
								echo "KOTA MEDAN";
							}else if($value->asal_kab_kota == '360'){
								echo "KOTA BINJAI";
							}else if($value->asal_kab_kota == '361'){
								echo "KOTA TEBING TINGGI";
							}else if($value->asal_kab_kota == '362'){
								echo "KOTA PEMATANG SIANTAR";
							}else if($value->asal_kab_kota == '363'){
								echo "KOTA TANJUNG BALAI";
							}else if($value->asal_kab_kota == '364'){
								echo "KOTA SIBOLGA";
							}else if($value->asal_kab_kota == '365'){
								echo "KOTA PADANG SIDIMPUAN";
							}else if($value->asal_kab_kota == '366'){
								echo "KOTA GUNUNGSITOLI";
							}else if($value->asal_kab_kota == '367'){
								echo "KAB. AGAM";
							}else if($value->asal_kab_kota == '368'){
								echo "KAB. PASAMAN";
							}else if($value->asal_kab_kota == '369'){
								echo "KAB. LIMA PULUH KOTO";
							}else if($value->asal_kab_kota == '370'){
								echo "KAB. SOLOK";
							}else if($value->asal_kab_kota == '371'){
								echo "KAB. PADANG PARIAMAN";
							}else if($value->asal_kab_kota == '372'){
								echo "KAB. PESISIR SELATAN";
							}else if($value->asal_kab_kota == '373'){
								echo "KAB. TANAH DATAR";
							}else if($value->asal_kab_kota == '374'){
								echo "KAB. SIJUNJUNG";
							}else if($value->asal_kab_kota == '375'){
								echo "KAB. KEPULAUAN MENTAWAI";
							}else if($value->asal_kab_kota == '376'){
								echo "KAB. SOLOK SELATAN";
							}else if($value->asal_kab_kota == '377'){
								echo "KAB. DHARMASRAYA";
							}else if($value->asal_kab_kota == '378'){
								echo "KAB. PASAMAN BARAT";
							}else if($value->asal_kab_kota == '379'){
								echo "KOTA BUKITTINGGI";
							}else if($value->asal_kab_kota == '380'){
								echo "KOTA PADANG";
							}else if($value->asal_kab_kota == '381'){
								echo "KOTA PADANG PANJANG";
							}else if($value->asal_kab_kota == '382'){
								echo "KOTA SAWAH LUNTO";
							}else if($value->asal_kab_kota == '383'){
								echo "KOTA SOLOK";
							}else if($value->asal_kab_kota == '384'){
								echo "KOTA PAYAKUMBUH";
							}else if($value->asal_kab_kota == '385'){
								echo "KOTA PARIAMAN";
							}else if($value->asal_kab_kota == '386'){
								echo "KAB. KAMPAR";
							}else if($value->asal_kab_kota == '387'){
								echo "KAB. BENGKALIS";
							}else if($value->asal_kab_kota == '388'){
								echo "KAB. INDRAGIRI HULU";
							}else if($value->asal_kab_kota == '389'){
								echo "KAB. INDRAGIRI HILIR";
							}else if($value->asal_kab_kota == '390'){
								echo "KAB. PELALAWAN";
							}else if($value->asal_kab_kota == '391'){
								echo "KAB. ROKAN HULU";
							}else if($value->asal_kab_kota == '392'){
								echo "KAB. ROKAN HILIR";
							}else if($value->asal_kab_kota == '393'){
								echo "KAB. SIAK";
							}else if($value->asal_kab_kota == '394'){
								echo "KAB. KUANTAN SINGINGI";
							}else if($value->asal_kab_kota == '395'){
								echo "KAB. KEPULAUAN MERANTI";
							}else if($value->asal_kab_kota == '396'){
								echo "KOTA PEKANBARU";
							}else if($value->asal_kab_kota == '397'){
								echo "KOTA DUMAI";
							}else if($value->asal_kab_kota == '398'){
								echo "KAB. BATANG HARI";
							}else if($value->asal_kab_kota == '399'){
								echo "KAB. BUNGO";
							}else if($value->asal_kab_kota == '400'){
								echo "KAB. SAROLANGUN";
							}else if($value->asal_kab_kota == '401'){
								echo "KAB. TANJUNG JABUNG BARAT";
							}else if($value->asal_kab_kota == '402'){
								echo "KAB. KERINCI";
							}else if($value->asal_kab_kota == '403'){
								echo "KAB. TEBO";
							}else if($value->asal_kab_kota == '404'){
								echo "KAB. MUARO JAMBI";
							}else if($value->asal_kab_kota == '405'){
								echo "KAB. TANJUNG JABUNG TIMUR";
							}else if($value->asal_kab_kota == '406'){
								echo "KAB. MERANGINT";
							}else if($value->asal_kab_kota == '407'){
								echo "KOTA JAMBI";
							}else if($value->asal_kab_kota == '408'){
								echo "KOTA SUNGAI PENUH";
							}else if($value->asal_kab_kota == '409'){
								echo "KAB. MUSI BANYU ASIN";
							}else if($value->asal_kab_kota == '410'){
								echo "KAB. OGAN KOMERING ILIR";
							}else if($value->asal_kab_kota == '411'){
								echo "KAB. OGAN KOMERING ULU";
							}else if($value->asal_kab_kota == '412'){
								echo "KAB. MUARA ENIM";
							}else if($value->asal_kab_kota == '413'){
								echo "KAB. LAHAT";
							}else if($value->asal_kab_kota == '414'){
								echo "KAB. MUSI RAWAS";
							}else if($value->asal_kab_kota == '415'){
								echo "KAB. BANYUASIN";
							}else if($value->asal_kab_kota == '416'){
								echo "KAB. OGAN KOMERING ULU TIMUR";
							}else if($value->asal_kab_kota == '417'){
								echo "KAB. OGAN KOMERING ULU SELATAN";
							}else if($value->asal_kab_kota == '418'){
								echo "KAB. OGAN ILIR";
							}else if($value->asal_kab_kota == '419'){
								echo "KAB. EMPAT LAWANG";
							}else if($value->asal_kab_kota == '420'){
								echo "KAB. PENUKAL ABAB LEMTANG ILIR";
							}else if($value->asal_kab_kota == '421'){
								echo "KAB. MUSI RAWAS UTARA";
							}else if($value->asal_kab_kota == '422'){
								echo "KOTA PALEMBANG";
							}else if($value->asal_kab_kota == '423'){
								echo "KOTA PRABUMULIH";
							}else if($value->asal_kab_kota == '424'){
								echo "KOTA LUBUK LINGGAU";
							}else if($value->asal_kab_kota == '425'){
								echo "KOTA PAGAR ALAM";
							}else if($value->asal_kab_kota == '426'){
								echo "KAB. LAMPUNG SELATAN";
							}else if($value->asal_kab_kota == '427'){
								echo "KAB. LAMPUNG TENGAH";
							}else if($value->asal_kab_kota == '428'){
								echo "KAB. LAMPUNG UTARA";
							}else if($value->asal_kab_kota == '429'){
								echo "KAB. LAMPUNG BARAT";
							}else if($value->asal_kab_kota == '430'){
								echo "KAB. TULANG BAWANG";
							}else if($value->asal_kab_kota == '431'){
								echo "KAB. TANGGAMUS";
							}else if($value->asal_kab_kota == '432'){
								echo "KAB. LAMPUNG TIMUR";
							}else if($value->asal_kab_kota == '433'){
								echo "KAB. WAY KANAN";
							}else if($value->asal_kab_kota == '434'){
								echo "KAB. PESAWARAN";
							}else if($value->asal_kab_kota == '435'){
								echo "KAB. PRINGSEWU";
							}else if($value->asal_kab_kota == '436'){
								echo "KAB. MESUJI";
							}else if($value->asal_kab_kota == '437'){
								echo "KAB. TULANG BAWANG BARAT";
							}else if($value->asal_kab_kota == '438'){
								echo "KAB. PESISIR BARAT";
							}else if($value->asal_kab_kota == '439'){
								echo "KOTA BANDAR LAMPUNG";
							}else if($value->asal_kab_kota == '440'){
								echo "KOTA METRO";
							}else if($value->asal_kab_kota == '441'){
								echo "KAB. SAMBAS";
							}else if($value->asal_kab_kota == '442'){
								echo "KAB. MEMPAWAH";
							}else if($value->asal_kab_kota == '443'){
								echo "KAB. SANGGAU";
							}else if($value->asal_kab_kota == '444'){
								echo "KAB. SINTANG";
							}else if($value->asal_kab_kota == '445'){
								echo "KAB. KAPUAS HULU";
							}else if($value->asal_kab_kota == '446'){
								echo "KAB. KETAPANG";
							}else if($value->asal_kab_kota == '447'){
								echo "KAB. BENGKAYANG";
							}else if($value->asal_kab_kota == '448'){
								echo "KAB. LANDAK";
							}else if($value->asal_kab_kota == '449'){
								echo "KAB. SEKADAU";
							}else if($value->asal_kab_kota == '450'){
								echo "KAB. MELAWI";
							}else if($value->asal_kab_kota == '451'){
								echo "KAB. KAYONG UTARA";
							}else if($value->asal_kab_kota == '452'){
								echo "KAB. KUBURAYA";
							}else if($value->asal_kab_kota == '453'){
								echo "KOTA PONTIANAK";
							}else if($value->asal_kab_kota == '454'){
								echo "KOTA SINGKAWANG";
							}else if($value->asal_kab_kota == '455'){
								echo "KAB. KAPUAS";
							}else if($value->asal_kab_kota == '456'){
								echo "KAB. BARITO SELATAN";
							}else if($value->asal_kab_kota == '457'){
								echo "KAB. BARITO UTARA";
							}else if($value->asal_kab_kota == '458'){
								echo "KAB. KOTAWARINGIN TIMUR";
							}else if($value->asal_kab_kota == '459'){
								echo "KAB. KOTAWARINGIN BARAT";
							}else if($value->asal_kab_kota == '460'){
								echo "KAB. KATINGAN";
							}else if($value->asal_kab_kota == '461'){
								echo "KAB. SERUYAN";
							}else if($value->asal_kab_kota == '462'){
								echo "KAB. SUKAMARA";
							}else if($value->asal_kab_kota == '463'){
								echo "KAB. LAMANDAU";
							}else if($value->asal_kab_kota == '464'){
								echo "KAB. GUNUNG MAS";
							}else if($value->asal_kab_kota == '465'){
								echo "KAB. PULANG PISAU";
							}else if($value->asal_kab_kota == '466'){
								echo "KAB. MURUNG RAYA";
							}else if($value->asal_kab_kota == '467'){
								echo "KAB. BARITO TIMUR";
							}else if($value->asal_kab_kota == '468'){
								echo "KOTA PALANGKA RAYA";
							}else if($value->asal_kab_kota == '469'){
								echo "KAB. BANJAR";
							}else if($value->asal_kab_kota == '470'){
								echo "KAB. TANAH LAUT";
							}else if($value->asal_kab_kota == '471'){
								echo "KAB. BARITO KUALA";
							}else if($value->asal_kab_kota == '472'){
								echo "KAB. TAPIN";
							}else if($value->asal_kab_kota == '473'){
								echo "KAB. HULU SUNGAI SELATAN";
							}else if($value->asal_kab_kota == '474'){
								echo "KAB. HULU SUNGAI TENGAH";
							}else if($value->asal_kab_kota == '475'){
								echo "KAB. HULU SUNGAI UTARA";
							}else if($value->asal_kab_kota == '476'){
								echo "KAB. TABALONG";
							}else if($value->asal_kab_kota == '477'){
								echo "KAB. KOTA BARU";
							}else if($value->asal_kab_kota == '478'){
								echo "KAB. BALANGAN";
							}else if($value->asal_kab_kota == '479'){
								echo "KAB. TANAH BUMBU";
							}else if($value->asal_kab_kota == '480'){
								echo "KOTA BANJARMASIN";
							}else if($value->asal_kab_kota == '481'){
								echo "KOTA BANJARBARU";
							}else if($value->asal_kab_kota == '482'){
								echo "KAB. PASER";
							}else if($value->asal_kab_kota == '483'){
								echo "KAB. KUTAI KARTANEGARA";
							}else if($value->asal_kab_kota == '484'){
								echo "KAB. BERAU";
							}else if($value->asal_kab_kota == '485'){
								echo "KAB. KUTAI BARAT";
							}else if($value->asal_kab_kota == '486'){
								echo "KAB. KUTAI TIMUR";
							}else if($value->asal_kab_kota == '487'){
								echo "KAB. PENAJAM PASER UTARA";
							}else if($value->asal_kab_kota == '488'){
								echo "KAB. MAHAKAM ULU";
							}else if($value->asal_kab_kota == '489'){
								echo "KOTA SAMARINDA";
							}else if($value->asal_kab_kota == '490'){
								echo "KOTA BALIKPAPAN";
							}else if($value->asal_kab_kota == '491'){
								echo "KOTA BONTANG";
							}else if($value->asal_kab_kota == '492'){
								echo "KAB. BOLAANG MONGONDAW";
							}else if($value->asal_kab_kota == '493'){
								echo "KAB. MINAHASA";
							}else if($value->asal_kab_kota == '494'){
								echo "KAB. KEP. SANGIHE";
							}else if($value->asal_kab_kota == '495'){
								echo "KAB. KEPULAUAN TALAUD";
							}else if($value->asal_kab_kota == '496'){
								echo "KAB. MINAHASA SELATAN";
							}else if($value->asal_kab_kota == '497'){
								echo "KAB. MINAHASA UTARA";
							}else if($value->asal_kab_kota == '498'){
								echo "KAB. BOLAANG MONGONDOW UTARA";
							}else if($value->asal_kab_kota == '499'){
								echo "KAB. KEPULAUAN SITARO";
							}else if($value->asal_kab_kota == '500'){
								echo "KAB. MINAHASA TENGGARA";
							}else if($value->asal_kab_kota == '501'){
								echo "KAB. BOLAANG MONGONDAW TIMUR";
							}else if($value->asal_kab_kota == '502'){
								echo "KAB. BOLAANG MONGONDAW SELATAN";
							}else if($value->asal_kab_kota == '503'){
								echo "KOTA MANADO";
							}else if($value->asal_kab_kota == '504'){
								echo "KOTA BITUNG";
							}else if($value->asal_kab_kota == '505'){
								echo "KOTA TOMOHON";
							}else if($value->asal_kab_kota == '506'){
								echo "KOTA KOTAMOBAGU";
							}else if($value->asal_kab_kota == '507'){
								echo "KAB. BANGGAI KEPULAUAN";
							}else if($value->asal_kab_kota == '508'){
								echo "KAB. DONGGALA";
							}else if($value->asal_kab_kota == '509'){
								echo "KAB. POSO";
							}else if($value->asal_kab_kota == '510'){
								echo "KAB. BANGGAI";
							}else if($value->asal_kab_kota == '511'){
								echo "KAB. BUOL";
							}else if($value->asal_kab_kota == '512'){
								echo "KAB. TOLITOLI";
							}else if($value->asal_kab_kota == '513'){
								echo "KAB. MOROWALI";
							}else if($value->asal_kab_kota == '514'){
								echo "KAB. PARIGI MOUTONG";
							}else if($value->asal_kab_kota == '515'){
								echo "KAB. TOJO UNA-UNA";
							}else if($value->asal_kab_kota == '516'){
								echo "KAB. SIGI";
							}else if($value->asal_kab_kota == '517'){
								echo "KAB. BANGGAI LAUT";
							}else if($value->asal_kab_kota == '518'){
								echo "KAB. MOROWALI UTARA";
							}else if($value->asal_kab_kota == '519'){
								echo "KOTA PALU";
							}else if($value->asal_kab_kota == '520'){
								echo "KAB. MAROS";
							}else if($value->asal_kab_kota == '521'){
								echo "KAB. PANGKAJENE KEPULAUAN";
							}else if($value->asal_kab_kota == '522'){
								echo "KAB. GOWA";
							}else if($value->asal_kab_kota == '523'){
								echo "KAB. TAKALAR";
							}else if($value->asal_kab_kota == '524'){
								echo "KAB. JENEPONTO";
							}else if($value->asal_kab_kota == '525'){
								echo "KAB. BARRU";
							}else if($value->asal_kab_kota == '526'){
								echo "KAB. BONE";
							}else if($value->asal_kab_kota == '527'){
								echo "KAB. WAJO";
							}else if($value->asal_kab_kota == '528'){
								echo "KAB. SOPPENG";
							}else if($value->asal_kab_kota == '529'){
								echo "KAB. BANTAENG";
							}else if($value->asal_kab_kota == '530'){
								echo "KAB. BULUKUMBA";
							}else if($value->asal_kab_kota == '531'){
								echo "KAB. SINJAI";
							}else if($value->asal_kab_kota == '532'){
								echo "KAB. KEPULAUAN SELAYAR";
							}else if($value->asal_kab_kota == '533'){
								echo "KAB. PINRANG";
							}else if($value->asal_kab_kota == '534'){
								echo "KAB. SIDENRENG RAPPANG";
							}else if($value->asal_kab_kota == '535'){
								echo "KAB. ENREKANG";
							}else if($value->asal_kab_kota == '536'){
								echo "KAB. LUWU";
							}else if($value->asal_kab_kota == '537'){
								echo "KAB. TANA TORAJA";
							}else if($value->asal_kab_kota == '538'){
								echo "KAB. LUWU UTARA";
							}else if($value->asal_kab_kota == '539'){
								echo "KAB. LUWU TIMUR";
							}else if($value->asal_kab_kota == '540'){
								echo "KAB. TORAJA UTARA";
							}else if($value->asal_kab_kota == '541'){
								echo "KOTA MAKASSAR";
							}else if($value->asal_kab_kota == '542'){
								echo "KOTA PARE-PARE";
							}else if($value->asal_kab_kota == '543'){
								echo "KOTA PALOPO";
							}else if($value->asal_kab_kota == '544'){
								echo "KAB. KONAWE";
							}else if($value->asal_kab_kota == '545'){
								echo "KAB. MUNA";
							}else if($value->asal_kab_kota == '546'){
								echo "KAB. BUTON";
							}else if($value->asal_kab_kota == '547'){
								echo "KAB. KOLAKA";
							}else if($value->asal_kab_kota == '548'){
								echo "KAB. KONAWE SELATAN";
							}else if($value->asal_kab_kota == '549'){
								echo "KAB. WAKATOBI";
							}else if($value->asal_kab_kota == '550'){
								echo "KAB. BOMBANA";
							}else if($value->asal_kab_kota == '551'){
								echo "KAB. KOLAKA UTARA";
							}else if($value->asal_kab_kota == '552'){
								echo "KAB. KONAWE UTARA";
							}else if($value->asal_kab_kota == '553'){
								echo "KAB. BUTON UTARA";
							}else if($value->asal_kab_kota == '554'){
								echo "KAB. KOLAKA TIMUR";
							}else if($value->asal_kab_kota == '555'){
								echo "KAB. KONAWE KEPULAUAN";
							}else if($value->asal_kab_kota == '556'){
								echo "KAB. MUNA BARAT";
							}else if($value->asal_kab_kota == '557'){
								echo "KAB. BUTON SELATAN";
							}else if($value->asal_kab_kota == '558'){
								echo "KAB. BUTON TENGAH";
							}else if($value->asal_kab_kota == '559'){
								echo "KOTA KENDARI";
							}else if($value->asal_kab_kota == '560'){
								echo "KOTA BAUBAU";
							}else if($value->asal_kab_kota == '561'){
								echo "KAB. MALUKU TENGAH";
							}else if($value->asal_kab_kota == '562'){
								echo "KAB. MALUKU TENGGARA";
							}else if($value->asal_kab_kota == '563'){
								echo "KAB. BURU";
							}else if($value->asal_kab_kota == '564'){
								echo "KAB. MALUKU TENGGARA BARAT";
							}else if($value->asal_kab_kota == '565'){
								echo "KAB. SERAM BAGIAN BARAT";
							}else if($value->asal_kab_kota == '566'){
								echo "KAB. SERAM BAGIAN TIMUR";
							}else if($value->asal_kab_kota == '567'){
								echo "KAB. KEPULAUAN ARU";
							}else if($value->asal_kab_kota == '568'){
								echo "KAB. MALUKU BARAT DAYA";
							}else if($value->asal_kab_kota == '569'){
								echo "KAB. BURU SELATAN";
							}else if($value->asal_kab_kota == '570'){
								echo "KOTA AMBON";
							}else if($value->asal_kab_kota == '571'){
								echo "KOTA TUAL";
							}else if($value->asal_kab_kota == '572'){
								echo "KAB. BULELENG";
							}else if($value->asal_kab_kota == '573'){
								echo "KAB. JEMBRANA";
							}else if($value->asal_kab_kota == '574'){
								echo "KAB. TABANAN";
							}else if($value->asal_kab_kota == '575'){
								echo "KAB. BADUNG";
							}else if($value->asal_kab_kota == '576'){
								echo "KAB. GIANYAR";
							}else if($value->asal_kab_kota == '577'){
								echo "KAB. KLUNGKUNG";
							}else if($value->asal_kab_kota == '578'){
								echo "KAB. BANGLI";
							}else if($value->asal_kab_kota == '579'){
								echo "KAB. KARANG ASEM";
							}else if($value->asal_kab_kota == '580'){
								echo "KOTA DENPASAR";
							}else if($value->asal_kab_kota == '581'){
								echo "KAB. LOMBOK BARAT";
							}else if($value->asal_kab_kota == '582'){
								echo "KAB. LOMBOK TENGAH";
							}else if($value->asal_kab_kota == '583'){
								echo "KAB. LOMBOK TIMUR";
							}else if($value->asal_kab_kota == '584'){
								echo "KAB. SUMBAWA";
							}else if($value->asal_kab_kota == '585'){
								echo "KAB. DOMPU";
							}else if($value->asal_kab_kota == '586'){
								echo "KAB. BIMA";
							}else if($value->asal_kab_kota == '587'){
								echo "KAB. SUMBAWA BARAT";
							}else if($value->asal_kab_kota == '588'){
								echo "KAB. LOMBOK UTARA";
							}else if($value->asal_kab_kota == '589'){
								echo "KOTA MATARAM";
							}else if($value->asal_kab_kota == '590'){
								echo "KOTA BIMA";
							}else if($value->asal_kab_kota == '591'){
								echo "KAB. KUPANG";
							}else if($value->asal_kab_kota == '592'){
								echo "KAB. TIMOR TENGAH SELATAN";
							}else if($value->asal_kab_kota == '593'){
								echo "KAB. TIMOR TENGAH UTARA";
							}else if($value->asal_kab_kota == '594'){
								echo "KAB. BELU";
							}else if($value->asal_kab_kota == '595'){
								echo "KAB. ALOR";
							}else if($value->asal_kab_kota == '596'){
								echo "KAB. FLORES TIMUR";
							}else if($value->asal_kab_kota == '597'){
								echo "KAB. SIKKA";
							}else if($value->asal_kab_kota == '598'){
								echo "KAB. ENDE";
							}else if($value->asal_kab_kota == '599'){
								echo "KAB. NGADA";
							}else if($value->asal_kab_kota == '600'){
								echo "KAB. MANGGARAI";
							}else if($value->asal_kab_kota == '601'){
								echo "KAB. SUMBA TIMUR";
							}else if($value->asal_kab_kota == '602'){
								echo "KAB. SUMBA BARAT";
							}else if($value->asal_kab_kota == '603'){
								echo "KAB. LEMBATA";
							}else if($value->asal_kab_kota == '604'){
								echo "KAB. ROTE-NDAO";
							}else if($value->asal_kab_kota == '605'){
								echo "KAB. MANGGARAI BARAT";
							}else if($value->asal_kab_kota == '606'){
								echo "KAB. NAGAKEO";
							}else if($value->asal_kab_kota == '607'){
								echo "KAB. SUMBA TENGAH";
							}else if($value->asal_kab_kota == '608'){
								echo "KAB. SUMBA BARAT DAYA";
							}else if($value->asal_kab_kota == '609'){
								echo "KAB. MANGGARAI TIMUR";
							}else if($value->asal_kab_kota == '610'){
								echo "KAB. SABU RAIJUA";
							}else if($value->asal_kab_kota == '611'){
								echo "KAB. MALAKA";
							}else if($value->asal_kab_kota == '612'){
								echo "KOTA KUPANG";
							}else if($value->asal_kab_kota == '613'){
								echo "KOTA KUPANG";
							}else if($value->asal_kab_kota == '614'){
								echo "KAB. BIAK NUMFOR";
							}else if($value->asal_kab_kota == '615'){
								echo "KAB. KEPULAUAN YAPEN";
							}else if($value->asal_kab_kota == '616'){
								echo "KAB. MERAUKE";
							}else if($value->asal_kab_kota == '617'){
								echo "KAB. JAYA WIJAYA";
							}else if($value->asal_kab_kota == '618'){
								echo "KAB. NABIRE";
							}else if($value->asal_kab_kota == '619'){
								echo "KAB. PANIAI";
							}else if($value->asal_kab_kota == '620'){
								echo "KAB. PUNCAK JAYA";
							}else if($value->asal_kab_kota == '621'){
								echo "KAB. MIMIKA";
							}else if($value->asal_kab_kota == '622'){
								echo "KAB. BOVEN DIGOEL";
							}else if($value->asal_kab_kota == '623'){
								echo "KAB. MAPPI";
							}else if($value->asal_kab_kota == '624'){
								echo "KAB. ASMAT";
							}else if($value->asal_kab_kota == '625'){
								echo "KAB. YAHUKIMO";
							}else if($value->asal_kab_kota == '626'){
								echo "KAB. PEGUNUNGAN BINTANG";
							}else if($value->asal_kab_kota == '627'){
								echo "KAB. TOLIKARA";
							}else if($value->asal_kab_kota == '628'){
								echo "KAB. SARMI";
							}else if($value->asal_kab_kota == '629'){
								echo "KAB. KEEROM";
							}else if($value->asal_kab_kota == '630'){
								echo "KAB. WAROPEN";
							}else if($value->asal_kab_kota == '631'){
								echo "KAB. SUPIORI";
							}else if($value->asal_kab_kota == '632'){
								echo "KAB. MEMBERAMO RAYA";
							}else if($value->asal_kab_kota == '633'){
								echo "KAB. NDUGA";
							}else if($value->asal_kab_kota == '634'){
								echo "KAB. LANNY JAYA";
							}else if($value->asal_kab_kota == '635'){
								echo "KAB. MEMBRAMO TENGAH";
							}else if($value->asal_kab_kota == '636'){
								echo "KAB. YALIMO";
							}else if($value->asal_kab_kota == '637'){
								echo "KAB. PUNCAK";
							}else if($value->asal_kab_kota == '638'){
								echo "KAB. DOGIYAI";
							}else if($value->asal_kab_kota == '639'){
								echo "KAB. DEIYAI";
							}else if($value->asal_kab_kota == '640'){
								echo "KAB. INTAN JAYA";
							}else if($value->asal_kab_kota == '641'){
								echo "KOTA JAYAPURA";
							}else if($value->asal_kab_kota == '642'){
								echo "KAB. BENGKULU UTARA";
							}else if($value->asal_kab_kota == '643'){
								echo "KAB. REJANG LEBONG";
							}else if($value->asal_kab_kota == '644'){
								echo "KAB. BENGKULU SELATAN";
							}else if($value->asal_kab_kota == '645'){
								echo "KAB. MUKO-MUKO";
							}else if($value->asal_kab_kota == '646'){
								echo "KAB. KEPAHIANG";
							}else if($value->asal_kab_kota == '647'){
								echo "KAB. LEBONG";
							}else if($value->asal_kab_kota == '648'){
								echo "KAB. KAUR";
							}else if($value->asal_kab_kota == '649'){
								echo "KAB. SELUMA";
							}else if($value->asal_kab_kota == '650'){
								echo "KAB. BENGKULU TENGAH";
							}else if($value->asal_kab_kota == '651'){
								echo "KOTA BENGKULU";
							}else if($value->asal_kab_kota == '652'){
								echo "KAB. PULAU TALIABU";
							}else if($value->asal_kab_kota == '653'){
								echo "KAB. HALMAHERA TENGAH";
							}else if($value->asal_kab_kota == '654'){
								echo "KAB. HALMAHERA BARAT";
							}else if($value->asal_kab_kota == '655'){
								echo "KAB. HALMAHERA UTARA";
							}else if($value->asal_kab_kota == '656'){
								echo "KAB. HALMAHERA SELATAN";
							}else if($value->asal_kab_kota == '657'){
								echo "KAB. HALMAHERA TIMUR";
							}else if($value->asal_kab_kota == '658'){
								echo "KAB. KEPULAUAN SULA";
							}else if($value->asal_kab_kota == '659'){
								echo "KAB. KEPULAUAN MOROTAI";
							}else if($value->asal_kab_kota == '660'){
								echo "KOTA TERNATE";
							}else if($value->asal_kab_kota == '661'){
								echo "KOTA TIDORE KEPULAUAN";
							}else if($value->asal_kab_kota == '662'){
								echo "KAB. PANDEGLANG";
							}else if($value->asal_kab_kota == '663'){
								echo "KAB. LEBAK";
							}else if($value->asal_kab_kota == '664'){
								echo "KAB. TANGERANG";
							}else if($value->asal_kab_kota == '665'){
								echo "KAB. SERANG";
							}else if($value->asal_kab_kota == '666'){
								echo "KOTA CILEGON";
							}else if($value->asal_kab_kota == '667'){
								echo "KOTA TANGERANG";
							}else if($value->asal_kab_kota == '668'){
								echo "KOTA SERANG";
							}else if($value->asal_kab_kota == '669'){
								echo "KOTA TANGERANG SELATAN";
							}else if($value->asal_kab_kota == '670'){
								echo "KAB. BANGKA";
							}else if($value->asal_kab_kota == '671'){
								echo "KAB. BELITUNG";
							}else if($value->asal_kab_kota == '672'){
								echo "KAB. BANGKA TENGAH";
							}else if($value->asal_kab_kota == '673'){
								echo "KAB. BANGKA BARAT";
							}else if($value->asal_kab_kota == '674'){
								echo "KAB. BANGKA SELATAN";
							}else if($value->asal_kab_kota == '675'){
								echo "KAB. BELITUNG TIMUR";
							}else if($value->asal_kab_kota == '676'){
								echo "KOTA PANGKALPINANG";
							}else if($value->asal_kab_kota == '677'){
								echo "KAB. BOALEMO";
							}else if($value->asal_kab_kota == '678'){
								echo "KAB. GORONTALO";
							}else if($value->asal_kab_kota == '679'){
								echo "KAB. POHUWATO";
							}else if($value->asal_kab_kota == '680'){
								echo "KAB. BONE BOLANGO";
							}else if($value->asal_kab_kota == '681'){
								echo "KAB. GORONTALO UTARA";
							}else if($value->asal_kab_kota == '682'){
								echo "KOTA GORONTALO";
							}else if($value->asal_kab_kota == '683'){
								echo "KAB. BINTAN";
							}else if($value->asal_kab_kota == '684'){
								echo "KAB. KARIMUN";
							}else if($value->asal_kab_kota == '685'){
								echo "KAB. NATUNA";
							}else if($value->asal_kab_kota == '686'){
								echo "KAB. LINGGA";
							}else if($value->asal_kab_kota == '687'){
								echo "KAB. KEPULAUAN ANAMBAS";
							}else if($value->asal_kab_kota == '688'){
								echo "KOTA BATAM";
							}else if($value->asal_kab_kota == '689'){
								echo "KOTA TANJUNGPINANG";
							}else if($value->asal_kab_kota == '690'){
								echo "KAB. FAK-FAK";
							}else if($value->asal_kab_kota == '691'){
								echo "KAB. KAIMANA";
							}else if($value->asal_kab_kota == '692'){
								echo "KAB. TELUK WONDAMA";
							}else if($value->asal_kab_kota == '693'){
								echo "KAB. TELUK BINTUNI";
							}else if($value->asal_kab_kota == '694'){
								echo "KAB. MANOKWARI";
							}else if($value->asal_kab_kota == '695'){
								echo "KAB. SORONG SELATAN";
							}else if($value->asal_kab_kota == '696'){
								echo "KAB. SORONG";
							}else if($value->asal_kab_kota == '697'){
								echo "KAB. RAJA AMPAT";
							}else if($value->asal_kab_kota == '698'){
								echo "KAB. TAMBRAUW";
							}else if($value->asal_kab_kota == '699'){
								echo "KAB. MAYBRAT";
							}else if($value->asal_kab_kota == '700'){
								echo "KAB. PEGUNUNGAN ARFAK";
							}else if($value->asal_kab_kota == '701'){
								echo "KAB. MANOKWARI SELATAN";
							}else if($value->asal_kab_kota == '702'){
								echo "KOTA SORONG";
							}else if($value->asal_kab_kota == '703'){
								echo "KAB. MAMUJU";
							}else if($value->asal_kab_kota == '704'){
								echo "KAB. MAMUJU UTARA";
							}else if($value->asal_kab_kota == '705'){
								echo "KAB. POLEWALI MANDAR";
							}else if($value->asal_kab_kota == '706'){
								echo "KAB. MAMASA";
							}else if($value->asal_kab_kota == '707'){
								echo "KAB. MAJENE";
							}else if($value->asal_kab_kota == '708'){
								echo "KAB. MAMUJU TENGAH";
							}else if($value->asal_kab_kota == '709'){
								echo "KAB. MALINAU";
							}else if($value->asal_kab_kota == '710'){
								echo "KAB. BULONGAN";
							}else if($value->asal_kab_kota == '711'){
								echo "KAB. TANA TIDUNG";
							}else if($value->asal_kab_kota == '712'){
								echo "KAB. NUNUKAN";
							}else if($value->asal_kab_kota == '713'){
								echo "KOTA TARAKAN";
							}else if($value->asal_kab_kota == '714'){
								echo "BELANDA";
							}else if($value->asal_kab_kota == '715'){
								echo "JAPAN";
							}else if($value->asal_kab_kota == '716'){
								echo "MESIR";
							}else if($value->asal_kab_kota == '717'){
								echo "MALAYSIA";
							}else if($value->asal_kab_kota == '718'){
								echo "MYANMAR";
							}else if($value->asal_kab_kota == '719'){
								echo "FILIPINA";
							}else if($value->asal_kab_kota == '720'){
								echo "RUSIA";
							}else if($value->asal_kab_kota == '721'){
								echo "ARAB SAUDI";
							}else if($value->asal_kab_kota == '722'){
								echo "SERBIA";
							}else if($value->asal_kab_kota == '723'){
								echo "SINGAPURA";
							}else if($value->asal_kab_kota == '724'){
								echo "SYRIA";
							}else if($value->asal_kab_kota == '725'){
								echo "THAILAND";
							}else if($value->asal_kab_kota == '726'){
								echo "AUSTRALIA";
							}else if($value->asal_kab_kota == '727'){
								echo "TIMOR LESTE";
							}else if($value->asal_kab_kota == '728'){
								echo "PAKISTAN";
							}else{
								echo "Tidak Valid";
							}	
						?></td>
				</tr>

				<tr>
					<td>No Telp</td>
					<td>:</td>
					<td><?php echo $value->no_telp; ?></td>
				</tr>

				<tr>
					<td>Email</td>
					<td>:</td>
					<td><?php echo $value->email; ?></td>
				</tr>

				<tr>
					<td>Alamat</td>
					<td>:</td>
					<td><?php echo $value->alamat; ?></td>
				</tr>

				<tr>
					<td>Kode Pos</td>
					<td>:</td>
					<td><?php echo $value->kode_pos; ?></td>
				</tr>
				<!--End Identitas Diri-->

				<!--Data Ortu-->
				<tr>
					<td><h2>Data Orang Tua</h2></td>
				</tr>

				<tr>
					<td>Nama Ayah</td>
					<td>:</td>
					<td><?php echo $value->nama_ayah; ?> 
					<?php 
							if($value->almarhum == '40'){
								echo "(Almarhum)";
							}else if($value->almarhum == null || $value->almarhum == '0'){
								echo "";
							}else{
								echo "(Data Tidak Ada)";
							}
					?></td>
				</tr>

				<tr>
					<td>Nama Ibu</td>
					<td>:</td>
					<td><?php echo $value->nama_ibu; ?> 
					<?php 
							if($value->almarhumah == '20'){
								echo "(Almarhumah)";
							}else if($value->almarhumah == null || $value->almarhumah == '0'){
								echo "";
							}else{
								echo "(Data Tidak Ada)";
							}
					?></td>
				</tr>

				<tr>
					<td>Provinsi Ortu</td>
					<td>:</td>
					<td><?php 
							if($value->provinsi_ortu == '100'){
								echo "D.K.I JAKARTA";
							}else if($value->provinsi_ortu == '101'){
								echo "JAWA BARAT";
							}else if($value->provinsi_ortu == '102'){
								echo "JAWA TENGAH";
							}else if($value->provinsi_ortu == '103'){
								echo "D.I. YOGYAKARTA";
							}else if($value->provinsi_ortu == '104'){
								echo "JAWA TIMUR";
							}else if($value->provinsi_ortu == '105'){
								echo "ACEH";
							}else if($value->provinsi_ortu == '106'){
								echo "SUMATERA UTARA";
							}else if($value->provinsi_ortu == '107'){
								echo "SUMATERA BARAT";
							}else if($value->provinsi_ortu == '108'){
								echo "RIAU";
							}else if($value->provinsi_ortu == '109'){
								echo "JAMBI";
							}else if($value->provinsi_ortu == '110'){
								echo "SUMATERA SELATAN";
							}else if($value->provinsi_ortu == '111'){
								echo "LAMPUNG";
							}else if($value->provinsi_ortu == '112'){
								echo "KALIMANTAN BARAT";
							}else if($value->provinsi_ortu == '113'){
								echo "KALIMANTAN TENGAH";
							}else if($value->provinsi_ortu == '114'){
								echo "KALIMANTAN SELATAN";
							}else if($value->provinsi_ortu == '115'){
								echo "KALIMANTAN TIMUR";
							}else if($value->provinsi_ortu == '116'){
								echo "SULAWESI UTARA";
							}else if($value->provinsi_ortu == '117'){
								echo "SULAWESI TENGAH";
							}else if($value->provinsi_ortu == '118'){
								echo "SULAWESI SELATAN";
							}else if($value->provinsi_ortu == '119'){
								echo "SULAWESI TENGGARA";
							}else if($value->provinsi_ortu == '120'){
								echo "MALUKU";
							}else if($value->provinsi_ortu == '121'){
								echo "BALI";
							}else if($value->provinsi_ortu == '122'){
								echo "NUSA TENGGARA BARAT";
							}else if($value->provinsi_ortu == '123'){
								echo "NUSA TENGGARA TIMUR";
							}else if($value->provinsi_ortu == '124'){
								echo "PAPUA";
							}else if($value->provinsi_ortu == '125'){
								echo "BENGKULU";
							}else if($value->provinsi_ortu == '126'){
								echo "MALUKU UTARA";
							}else if($value->provinsi_ortu == '127'){
								echo "BANTEN";
							}else if($value->provinsi_ortu == '128'){
								echo "BANGKA BELITUNG";
							}else if($value->provinsi_ortu == '129'){
								echo "GORONTALO";
							}else if($value->provinsi_ortu == '130'){
								echo "KEPULAUAN RIAU";
							}else if($value->provinsi_ortu == '131'){
								echo "PAPUA BARAT";
							}else if($value->provinsi_ortu == '132'){
								echo "SULAWESI BARAT";
							}else if($value->provinsi_ortu == '133'){
								echo "KALIMANTAN UTARA";
							}else if($value->provinsi_ortu == '134'){
								echo "LUAR NEGERI";
							}else{
								echo "Tidak Valid";
							}	
						?></td>
				</tr>

				<tr>
					<td>Kab/Kota Ortu</td>
					<td>:</td>
					<td><?php 
							if($value->kab_kota_ortu == '200'){
								echo "KAB. KEPULAUAN SERIBU";
							}else if($value->kab_kota_ortu == '201'){
								echo "KOTA JAKARTA PUSAT";
							}else if($value->kab_kota_ortu == '202'){
								echo "KOTA JAKARTA UTARA";
							}else if($value->kab_kota_ortu == '203'){
								echo "KOTA JAKARTA BARAT";
							}else if($value->kab_kota_ortu == '204'){
								echo "KOTA JAKARTA SELATAN";
							}else if($value->kab_kota_ortu == '205'){
								echo "KOTA JAKARTA TIMUR";
							}else if($value->kab_kota_ortu == '206'){
								echo "KAB. BOGOR";
							}else if($value->kab_kota_ortu == '207'){
								echo "KAB. SUKABUMI";
							}else if($value->kab_kota_ortu == '208'){
								echo "KAB. CIANJUR";
							}else if($value->kab_kota_ortu == '209'){
								echo "KAB. BANDUNG";
							}else if($value->kab_kota_ortu == '210'){
								echo "KAB. SUMEDANG";
							}else if($value->kab_kota_ortu == '211'){
								echo "KAB. GARUT";
							}else if($value->kab_kota_ortu == '212'){
								echo "KAB. TASIKMALAYA";
							}else if($value->kab_kota_ortu == '213'){
								echo "KAB. CIAMIS";
							}else if($value->kab_kota_ortu == '214'){
								echo "KAB. KUNINGAN";
							}else if($value->kab_kota_ortu == '215'){
								echo "KAB. MAJALENGKA";
							}else if($value->kab_kota_ortu == '216'){
								echo "KAB. CIREBON";
							}else if($value->kab_kota_ortu == '217'){
								echo "KAB. INDRAMAYU";
							}else if($value->kab_kota_ortu == '218'){
								echo "KAB. SUBANG";
							}else if($value->kab_kota_ortu == '219'){
								echo "KAB. PURWAKARTA";
							}else if($value->kab_kota_ortu == '220'){
								echo "KAB. KARAWANG";
							}else if($value->kab_kota_ortu == '221'){
								echo "KAB. BEKASI";
							}else if($value->kab_kota_ortu == '222'){
								echo "KAB. BANDUNG BARAT";
							}else if($value->kab_kota_ortu == '223'){
								echo "KAB. PANGANDARAN";
							}else if($value->kab_kota_ortu == '224'){
								echo "KOTA BANDUNG";
							}else if($value->kab_kota_ortu == '225'){
								echo "KOTA BOGOR";
							}else if($value->kab_kota_ortu == '226'){
								echo "KOTA SUKABUMI";
							}else if($value->kab_kota_ortu == '227'){
								echo "KOTA CIREBON";
							}else if($value->kab_kota_ortu == '228'){
								echo "KOTA BEKASI";
							}else if($value->kab_kota_ortu == '229'){
								echo "KOTA DEPOK";
							}else if($value->kab_kota_ortu == '230'){
								echo "KOTA CIMAHI";
							}else if($value->kab_kota_ortu == '231'){
								echo "KOTA TASIKMALAYA";
							}else if($value->kab_kota_ortu == '232'){
								echo "KOTA BANJAR";
							}else if($value->kab_kota_ortu == '233'){
								echo "KAB. CILACAP";
							}else if($value->kab_kota_ortu == '234'){
								echo "KAB. BANYUMAS";
							}else if($value->kab_kota_ortu == '235'){
								echo "KAB. PURBALINGGA";
							}else if($value->kab_kota_ortu == '236'){
								echo "KAB. BANJARNEGARA";
							}else if($value->kab_kota_ortu == '237'){
								echo "KAB. KEBUMEN";
							}else if($value->kab_kota_ortu == '238'){
								echo "KAB. PURWOREJO";
							}else if($value->kab_kota_ortu == '239'){
								echo "KAB. WONOSOBO";
							}else if($value->kab_kota_ortu == '240'){
								echo "KAB. MAGELANG";
							}else if($value->kab_kota_ortu == '241'){
								echo "KAB. BOYOLALI";
							}else if($value->kab_kota_ortu == '242'){
								echo "KAB. KLATEN";
							}else if($value->kab_kota_ortu == '243'){
								echo "KAB. SUKOHARJO";
							}else if($value->kab_kota_ortu == '244'){
								echo "KAB. WONOGIRI";
							}else if($value->kab_kota_ortu == '245'){
								echo "KAB. KARANGANYAR";
							}else if($value->kab_kota_ortu == '246'){
								echo "KAB. SRAGEN";
							}else if($value->kab_kota_ortu == '247'){
								echo "KAB. GROBOGAN";
							}else if($value->kab_kota_ortu == '248'){
								echo "KAB. BLORA";
							}else if($value->kab_kota_ortu == '249'){
								echo "KAB. REMBANG";
							}else if($value->kab_kota_ortu == '250'){
								echo "KAB. PATI";
							}else if($value->kab_kota_ortu == '251'){
								echo "KAB. KUDUS";
							}else if($value->kab_kota_ortu == '252'){
								echo "KAB. JEPARA";
							}else if($value->kab_kota_ortu == '253'){
								echo "KAB. DEMAK";
							}else if($value->kab_kota_ortu == '254'){
								echo "KAB. SEMARANG";
							}else if($value->kab_kota_ortu == '255'){
								echo "KAB. TEMANGGUNG";
							}else if($value->kab_kota_ortu == '256'){
								echo "KAB. KENDAL";
							}else if($value->kab_kota_ortu == '257'){
								echo "KAB. BATANG";
							}else if($value->kab_kota_ortu == '258'){
								echo "KAB. PEKALONGAN";
							}else if($value->kab_kota_ortu == '259'){
								echo "KAB. PEMALANG";
							}else if($value->kab_kota_ortu == '260'){
								echo "KAB. TEGAL";
							}else if($value->kab_kota_ortu == '261'){
								echo "KAB. BREBES";
							}else if($value->kab_kota_ortu == '262'){
								echo "KOTA MAGELANG";
							}else if($value->kab_kota_ortu == '263'){
								echo "KOTA SURAKARTA";
							}else if($value->kab_kota_ortu == '264'){
								echo "KOTA SALATIGA";
							}else if($value->kab_kota_ortu == '265'){
								echo "KOTA SEMARANG";
							}else if($value->kab_kota_ortu == '266'){
								echo "KOTA PEKALONGAN";
							}else if($value->kab_kota_ortu == '267'){
								echo "KOTA TEGAL";
							}else if($value->kab_kota_ortu == '268'){
								echo "KAB. BANTUL";
							}else if($value->kab_kota_ortu == '269'){
								echo "KAB. SLEMAN";
							}else if($value->kab_kota_ortu == '270'){
								echo "KAB. GUNUNG KIDUL";
							}else if($value->kab_kota_ortu == '271'){
								echo "KAB. KULON PROGO";
							}else if($value->kab_kota_ortu == '272'){
								echo "KOTA YOGYAKARTA";
							}else if($value->kab_kota_ortu == '273'){
								echo "KAB. GRESIK";
							}else if($value->kab_kota_ortu == '274'){
								echo "KAB. SIDOARJO";
							}else if($value->kab_kota_ortu == '275'){
								echo "KAB. MOJOKERTO";
							}else if($value->kab_kota_ortu == '276'){
								echo "KAB. JOMBANG";
							}else if($value->kab_kota_ortu == '277'){
								echo "KAB. BOJONEGORO";
							}else if($value->kab_kota_ortu == '278'){
								echo "KAB. TUBAN";
							}else if($value->kab_kota_ortu == '279'){
								echo "KAB. LAMONGAN";
							}else if($value->kab_kota_ortu == '280'){
								echo "KAB. MADIUN";
							}else if($value->kab_kota_ortu == '281'){
								echo "KAB. NGAWI";
							}else if($value->kab_kota_ortu == '282'){
								echo "KAB. MAGETAN";
							}else if($value->kab_kota_ortu == '283'){
								echo "KAB. PONOROGO";
							}else if($value->kab_kota_ortu == '284'){
								echo "KAB. PACITAN";
							}else if($value->kab_kota_ortu == '285'){
								echo "KAB. KEDIRI";
							}else if($value->kab_kota_ortu == '286'){
								echo "KAB. NGANJUK";
							}else if($value->kab_kota_ortu == '287'){
								echo "KAB. BLITAR";
							}else if($value->kab_kota_ortu == '288'){
								echo "KAB. TULUNGAGUNG";
							}else if($value->kab_kota_ortu == '289'){
								echo "KAB. TRENGGALEK";
							}else if($value->kab_kota_ortu == '290'){
								echo "KAB. MALANG";
							}else if($value->kab_kota_ortu == '291'){
								echo "KAB. PASURUAN";
							}else if($value->kab_kota_ortu == '292'){
								echo "KAB. PROBOLINGGO";
							}else if($value->kab_kota_ortu == '293'){
								echo "KAB. LUMAJANG";
							}else if($value->kab_kota_ortu == '294'){
								echo "KAB. BONDOWOSO";
							}else if($value->kab_kota_ortu == '295'){
								echo "KAB. SITUBONDO";
							}else if($value->kab_kota_ortu == '296'){
								echo "KAB. JEMBER";
							}else if($value->kab_kota_ortu == '297'){
								echo "KAB. BANYUWANGI";
							}else if($value->kab_kota_ortu == '298'){
								echo "KAB. PAMEKASAN";
							}else if($value->kab_kota_ortu == '299'){
								echo "KAB. SAMPANG";
							}else if($value->kab_kota_ortu == '300'){
								echo "KAB. SUMENEP";
							}else if($value->kab_kota_ortu == '301'){
								echo "KAB. BANGKALAN";
							}else if($value->kab_kota_ortu == '302'){
								echo "KOTA SURABAYA";
							}else if($value->kab_kota_ortu == '303'){
								echo "KOTA MALANG";
							}else if($value->kab_kota_ortu == '304'){
								echo "KOTA MADIUN";
							}else if($value->kab_kota_ortu == '305'){
								echo "KOTA KEDIRI";
							}else if($value->kab_kota_ortu == '306'){
								echo "KOTA MOJOKERTO";
							}else if($value->kab_kota_ortu == '307'){
								echo "KOTA BLITAR";
							}else if($value->kab_kota_ortu == '308'){
								echo "KOTA PASURUAN";
							}else if($value->kab_kota_ortu == '309'){
								echo "KOTA PROBOLINGGO";
							}else if($value->kab_kota_ortu == '310'){
								echo "KOTA BATU";
							}else if($value->kab_kota_ortu == '311'){
								echo "KAB. ACEH BESAR";
							}else if($value->kab_kota_ortu == '312'){
								echo "KAB. PIDIE";
							}else if($value->kab_kota_ortu == '313'){
								echo "KAB. ACEH UTARA";
							}else if($value->kab_kota_ortu == '314'){
								echo "KAB. ACEH TIMUR";
							}else if($value->kab_kota_ortu == '315'){
								echo "KAB. ACEH TENGAH";
							}else if($value->kab_kota_ortu == '316'){
								echo "KAB. ACEH BARAT";
							}else if($value->kab_kota_ortu == '317'){
								echo "KAB. ACEH SELATAN";
							}else if($value->kab_kota_ortu == '318'){
								echo "KAB. ACEH TENGGARA";
							}else if($value->kab_kota_ortu == '319'){
								echo "KAB. SIMEULUE";
							}else if($value->kab_kota_ortu == '320'){
								echo "KAB. BIREUEN";
							}else if($value->kab_kota_ortu == '321'){
								echo "KAB. ACEH SINGKIL";
							}else if($value->kab_kota_ortu == '322'){
								echo "KAB. ACEH TAMIANG";
							}else if($value->kab_kota_ortu == '323'){
								echo "KAB. NAGAN RAYA";
							}else if($value->kab_kota_ortu == '324'){
								echo "KAB. ACEH JAYA";
							}else if($value->kab_kota_ortu == '325'){
								echo "KAB. ACEH BARAT DAYA";
							}else if($value->kab_kota_ortu == '326'){
								echo "KAB. GAYO LUES";
							}else if($value->kab_kota_ortu == '327'){
								echo "KAB. BENER MERIAH";
							}else if($value->kab_kota_ortu == '328'){
								echo "KAB. PIDIE JAYA";
							}else if($value->kab_kota_ortu == '329'){
								echo "KOTA SABANG";
							}else if($value->kab_kota_ortu == '330'){
								echo "KOTA BANDA ACEH";
							}else if($value->kab_kota_ortu == '331'){
								echo "KOTA LHOKSEUMAWE";
							}else if($value->kab_kota_ortu == '332'){
								echo "KOTA LANGSA";
							}else if($value->kab_kota_ortu == '333'){
								echo "KOTA SUBULUSSALAM";
							}else if($value->kab_kota_ortu == '334'){
								echo "KAB. DELI SERDANG";
							}else if($value->kab_kota_ortu == '335'){
								echo "KAB. LANGKAT";
							}else if($value->kab_kota_ortu == '336'){
								echo "KAB. KARO";
							}else if($value->kab_kota_ortu == '337'){
								echo "KAB. SIMALUNGUN";
							}else if($value->kab_kota_ortu == '338'){
								echo "KAB. DAIRI";
							}else if($value->kab_kota_ortu == '339'){
								echo "KAB. ASAHAN";
							}else if($value->kab_kota_ortu == '340'){
								echo "KAB. LABUHAN BATU";
							}else if($value->kab_kota_ortu == '341'){
								echo "KAB. TAPANULI UTARA";
							}else if($value->kab_kota_ortu == '342'){
								echo "KAB. TAPANULI TENGAH";
							}else if($value->kab_kota_ortu == '343'){
								echo "KAB. TAPANULI SELATAN";
							}else if($value->kab_kota_ortu == '344'){
								echo "KAB. NIAS";
							}else if($value->kab_kota_ortu == '345'){
								echo "KAB. MANDAILING NATAL";
							}else if($value->kab_kota_ortu == '346'){
								echo "KAB. TOBA SAMOSIR";
							}else if($value->kab_kota_ortu == '347'){
								echo "KAB. NIAS SELATAN";
							}else if($value->kab_kota_ortu == '348'){
								echo "KAB. PAK PAK BHARAT";
							}else if($value->kab_kota_ortu == '349'){
								echo "KAB. HUMBANG HASUDUTAN";
							}else if($value->kab_kota_ortu == '350'){
								echo "KAB. SAMOSIR";
							}else if($value->kab_kota_ortu == '351'){
								echo "KAB. SERDANG BEDAGAI";
							}else if($value->kab_kota_ortu == '352'){
								echo "KAB. BATUBARA";
							}else if($value->kab_kota_ortu == '353'){
								echo "KAB. PADANG LAWAS UTARA";
							}else if($value->kab_kota_ortu == '354'){
								echo "KAB. PADANG LAWAS";
							}else if($value->kab_kota_ortu == '355'){
								echo "KAB. LABUHAN BATU UTARA";
							}else if($value->kab_kota_ortu == '356'){
								echo "KAB. LABUHAN BATU SELATAN";
							}else if($value->kab_kota_ortu == '357'){
								echo "KAB. NIAS BARAT";
							}else if($value->kab_kota_ortu == '358'){
								echo "KAB. NIAS UTARA";
							}else if($value->kab_kota_ortu == '359'){
								echo "KOTA MEDAN";
							}else if($value->kab_kota_ortu == '360'){
								echo "KOTA BINJAI";
							}else if($value->kab_kota_ortu == '361'){
								echo "KOTA TEBING TINGGI";
							}else if($value->kab_kota_ortu == '362'){
								echo "KOTA PEMATANG SIANTAR";
							}else if($value->kab_kota_ortu == '363'){
								echo "KOTA TANJUNG BALAI";
							}else if($value->kab_kota_ortu == '364'){
								echo "KOTA SIBOLGA";
							}else if($value->kab_kota_ortu == '365'){
								echo "KOTA PADANG SIDIMPUAN";
							}else if($value->kab_kota_ortu == '366'){
								echo "KOTA GUNUNGSITOLI";
							}else if($value->kab_kota_ortu == '367'){
								echo "KAB. AGAM";
							}else if($value->kab_kota_ortu == '368'){
								echo "KAB. PASAMAN";
							}else if($value->kab_kota_ortu == '369'){
								echo "KAB. LIMA PULUH KOTO";
							}else if($value->kab_kota_ortu == '370'){
								echo "KAB. SOLOK";
							}else if($value->kab_kota_ortu == '371'){
								echo "KAB. PADANG PARIAMAN";
							}else if($value->kab_kota_ortu == '372'){
								echo "KAB. PESISIR SELATAN";
							}else if($value->kab_kota_ortu == '373'){
								echo "KAB. TANAH DATAR";
							}else if($value->kab_kota_ortu == '374'){
								echo "KAB. SIJUNJUNG";
							}else if($value->kab_kota_ortu == '375'){
								echo "KAB. KEPULAUAN MENTAWAI";
							}else if($value->kab_kota_ortu == '376'){
								echo "KAB. SOLOK SELATAN";
							}else if($value->kab_kota_ortu == '377'){
								echo "KAB. DHARMASRAYA";
							}else if($value->kab_kota_ortu == '378'){
								echo "KAB. PASAMAN BARAT";
							}else if($value->kab_kota_ortu == '379'){
								echo "KOTA BUKITTINGGI";
							}else if($value->kab_kota_ortu == '380'){
								echo "KOTA PADANG";
							}else if($value->kab_kota_ortu == '381'){
								echo "KOTA PADANG PANJANG";
							}else if($value->kab_kota_ortu == '382'){
								echo "KOTA SAWAH LUNTO";
							}else if($value->kab_kota_ortu == '383'){
								echo "KOTA SOLOK";
							}else if($value->kab_kota_ortu == '384'){
								echo "KOTA PAYAKUMBUH";
							}else if($value->kab_kota_ortu == '385'){
								echo "KOTA PARIAMAN";
							}else if($value->kab_kota_ortu == '386'){
								echo "KAB. KAMPAR";
							}else if($value->kab_kota_ortu == '387'){
								echo "KAB. BENGKALIS";
							}else if($value->kab_kota_ortu == '388'){
								echo "KAB. INDRAGIRI HULU";
							}else if($value->kab_kota_ortu == '389'){
								echo "KAB. INDRAGIRI HILIR";
							}else if($value->kab_kota_ortu == '390'){
								echo "KAB. PELALAWAN";
							}else if($value->kab_kota_ortu == '391'){
								echo "KAB. ROKAN HULU";
							}else if($value->kab_kota_ortu == '392'){
								echo "KAB. ROKAN HILIR";
							}else if($value->kab_kota_ortu == '393'){
								echo "KAB. SIAK";
							}else if($value->kab_kota_ortu == '394'){
								echo "KAB. KUANTAN SINGINGI";
							}else if($value->kab_kota_ortu == '395'){
								echo "KAB. KEPULAUAN MERANTI";
							}else if($value->kab_kota_ortu == '396'){
								echo "KOTA PEKANBARU";
							}else if($value->kab_kota_ortu == '397'){
								echo "KOTA DUMAI";
							}else if($value->kab_kota_ortu == '398'){
								echo "KAB. BATANG HARI";
							}else if($value->kab_kota_ortu == '399'){
								echo "KAB. BUNGO";
							}else if($value->kab_kota_ortu == '400'){
								echo "KAB. SAROLANGUN";
							}else if($value->kab_kota_ortu == '401'){
								echo "KAB. TANJUNG JABUNG BARAT";
							}else if($value->kab_kota_ortu == '402'){
								echo "KAB. KERINCI";
							}else if($value->kab_kota_ortu == '403'){
								echo "KAB. TEBO";
							}else if($value->kab_kota_ortu == '404'){
								echo "KAB. MUARO JAMBI";
							}else if($value->kab_kota_ortu == '405'){
								echo "KAB. TANJUNG JABUNG TIMUR";
							}else if($value->kab_kota_ortu == '406'){
								echo "KAB. MERANGINT";
							}else if($value->kab_kota_ortu == '407'){
								echo "KOTA JAMBI";
							}else if($value->kab_kota_ortu == '408'){
								echo "KOTA SUNGAI PENUH";
							}else if($value->kab_kota_ortu == '409'){
								echo "KAB. MUSI BANYU ASIN";
							}else if($value->kab_kota_ortu == '410'){
								echo "KAB. OGAN KOMERING ILIR";
							}else if($value->kab_kota_ortu == '411'){
								echo "KAB. OGAN KOMERING ULU";
							}else if($value->kab_kota_ortu == '412'){
								echo "KAB. MUARA ENIM";
							}else if($value->kab_kota_ortu == '413'){
								echo "KAB. LAHAT";
							}else if($value->kab_kota_ortu == '414'){
								echo "KAB. MUSI RAWAS";
							}else if($value->kab_kota_ortu == '415'){
								echo "KAB. BANYUASIN";
							}else if($value->kab_kota_ortu == '416'){
								echo "KAB. OGAN KOMERING ULU TIMUR";
							}else if($value->kab_kota_ortu == '417'){
								echo "KAB. OGAN KOMERING ULU SELATAN";
							}else if($value->kab_kota_ortu == '418'){
								echo "KAB. OGAN ILIR";
							}else if($value->kab_kota_ortu == '419'){
								echo "KAB. EMPAT LAWANG";
							}else if($value->kab_kota_ortu == '420'){
								echo "KAB. PENUKAL ABAB LEMTANG ILIR";
							}else if($value->kab_kota_ortu == '421'){
								echo "KAB. MUSI RAWAS UTARA";
							}else if($value->kab_kota_ortu == '422'){
								echo "KOTA PALEMBANG";
							}else if($value->kab_kota_ortu == '423'){
								echo "KOTA PRABUMULIH";
							}else if($value->kab_kota_ortu == '424'){
								echo "KOTA LUBUK LINGGAU";
							}else if($value->kab_kota_ortu == '425'){
								echo "KOTA PAGAR ALAM";
							}else if($value->kab_kota_ortu == '426'){
								echo "KAB. LAMPUNG SELATAN";
							}else if($value->kab_kota_ortu == '427'){
								echo "KAB. LAMPUNG TENGAH";
							}else if($value->kab_kota_ortu == '428'){
								echo "KAB. LAMPUNG UTARA";
							}else if($value->kab_kota_ortu == '429'){
								echo "KAB. LAMPUNG BARAT";
							}else if($value->kab_kota_ortu == '430'){
								echo "KAB. TULANG BAWANG";
							}else if($value->kab_kota_ortu == '431'){
								echo "KAB. TANGGAMUS";
							}else if($value->kab_kota_ortu == '432'){
								echo "KAB. LAMPUNG TIMUR";
							}else if($value->kab_kota_ortu == '433'){
								echo "KAB. WAY KANAN";
							}else if($value->kab_kota_ortu == '434'){
								echo "KAB. PESAWARAN";
							}else if($value->kab_kota_ortu == '435'){
								echo "KAB. PRINGSEWU";
							}else if($value->kab_kota_ortu == '436'){
								echo "KAB. MESUJI";
							}else if($value->kab_kota_ortu == '437'){
								echo "KAB. TULANG BAWANG BARAT";
							}else if($value->kab_kota_ortu == '438'){
								echo "KAB. PESISIR BARAT";
							}else if($value->kab_kota_ortu == '439'){
								echo "KOTA BANDAR LAMPUNG";
							}else if($value->kab_kota_ortu == '440'){
								echo "KOTA METRO";
							}else if($value->kab_kota_ortu == '441'){
								echo "KAB. SAMBAS";
							}else if($value->kab_kota_ortu == '442'){
								echo "KAB. MEMPAWAH";
							}else if($value->kab_kota_ortu == '443'){
								echo "KAB. SANGGAU";
							}else if($value->kab_kota_ortu == '444'){
								echo "KAB. SINTANG";
							}else if($value->kab_kota_ortu == '445'){
								echo "KAB. KAPUAS HULU";
							}else if($value->kab_kota_ortu == '446'){
								echo "KAB. KETAPANG";
							}else if($value->kab_kota_ortu == '447'){
								echo "KAB. BENGKAYANG";
							}else if($value->kab_kota_ortu == '448'){
								echo "KAB. LANDAK";
							}else if($value->kab_kota_ortu == '449'){
								echo "KAB. SEKADAU";
							}else if($value->kab_kota_ortu == '450'){
								echo "KAB. MELAWI";
							}else if($value->kab_kota_ortu == '451'){
								echo "KAB. KAYONG UTARA";
							}else if($value->kab_kota_ortu == '452'){
								echo "KAB. KUBURAYA";
							}else if($value->kab_kota_ortu == '453'){
								echo "KOTA PONTIANAK";
							}else if($value->kab_kota_ortu == '454'){
								echo "KOTA SINGKAWANG";
							}else if($value->kab_kota_ortu == '455'){
								echo "KAB. KAPUAS";
							}else if($value->kab_kota_ortu == '456'){
								echo "KAB. BARITO SELATAN";
							}else if($value->kab_kota_ortu == '457'){
								echo "KAB. BARITO UTARA";
							}else if($value->kab_kota_ortu == '458'){
								echo "KAB. KOTAWARINGIN TIMUR";
							}else if($value->kab_kota_ortu == '459'){
								echo "KAB. KOTAWARINGIN BARAT";
							}else if($value->kab_kota_ortu == '460'){
								echo "KAB. KATINGAN";
							}else if($value->kab_kota_ortu == '461'){
								echo "KAB. SERUYAN";
							}else if($value->kab_kota_ortu == '462'){
								echo "KAB. SUKAMARA";
							}else if($value->kab_kota_ortu == '463'){
								echo "KAB. LAMANDAU";
							}else if($value->kab_kota_ortu == '464'){
								echo "KAB. GUNUNG MAS";
							}else if($value->kab_kota_ortu == '465'){
								echo "KAB. PULANG PISAU";
							}else if($value->kab_kota_ortu == '466'){
								echo "KAB. MURUNG RAYA";
							}else if($value->kab_kota_ortu == '467'){
								echo "KAB. BARITO TIMUR";
							}else if($value->kab_kota_ortu == '468'){
								echo "KOTA PALANGKA RAYA";
							}else if($value->kab_kota_ortu == '469'){
								echo "KAB. BANJAR";
							}else if($value->kab_kota_ortu == '470'){
								echo "KAB. TANAH LAUT";
							}else if($value->kab_kota_ortu == '471'){
								echo "KAB. BARITO KUALA";
							}else if($value->kab_kota_ortu == '472'){
								echo "KAB. TAPIN";
							}else if($value->kab_kota_ortu == '473'){
								echo "KAB. HULU SUNGAI SELATAN";
							}else if($value->kab_kota_ortu == '474'){
								echo "KAB. HULU SUNGAI TENGAH";
							}else if($value->kab_kota_ortu == '475'){
								echo "KAB. HULU SUNGAI UTARA";
							}else if($value->kab_kota_ortu == '476'){
								echo "KAB. TABALONG";
							}else if($value->kab_kota_ortu == '477'){
								echo "KAB. KOTA BARU";
							}else if($value->kab_kota_ortu == '478'){
								echo "KAB. BALANGAN";
							}else if($value->kab_kota_ortu == '479'){
								echo "KAB. TANAH BUMBU";
							}else if($value->kab_kota_ortu == '480'){
								echo "KOTA BANJARMASIN";
							}else if($value->kab_kota_ortu == '481'){
								echo "KOTA BANJARBARU";
							}else if($value->kab_kota_ortu == '482'){
								echo "KAB. PASER";
							}else if($value->kab_kota_ortu == '483'){
								echo "KAB. KUTAI KARTANEGARA";
							}else if($value->kab_kota_ortu == '484'){
								echo "KAB. BERAU";
							}else if($value->kab_kota_ortu == '485'){
								echo "KAB. KUTAI BARAT";
							}else if($value->kab_kota_ortu == '486'){
								echo "KAB. KUTAI TIMUR";
							}else if($value->kab_kota_ortu == '487'){
								echo "KAB. PENAJAM PASER UTARA";
							}else if($value->kab_kota_ortu == '488'){
								echo "KAB. MAHAKAM ULU";
							}else if($value->kab_kota_ortu == '489'){
								echo "KOTA SAMARINDA";
							}else if($value->kab_kota_ortu == '490'){
								echo "KOTA BALIKPAPAN";
							}else if($value->kab_kota_ortu == '491'){
								echo "KOTA BONTANG";
							}else if($value->kab_kota_ortu == '492'){
								echo "KAB. BOLAANG MONGONDAW";
							}else if($value->kab_kota_ortu == '493'){
								echo "KAB. MINAHASA";
							}else if($value->kab_kota_ortu == '494'){
								echo "KAB. KEP. SANGIHE";
							}else if($value->kab_kota_ortu == '495'){
								echo "KAB. KEPULAUAN TALAUD";
							}else if($value->kab_kota_ortu == '496'){
								echo "KAB. MINAHASA SELATAN";
							}else if($value->kab_kota_ortu == '497'){
								echo "KAB. MINAHASA UTARA";
							}else if($value->kab_kota_ortu == '498'){
								echo "KAB. BOLAANG MONGONDOW UTARA";
							}else if($value->kab_kota_ortu == '499'){
								echo "KAB. KEPULAUAN SITARO";
							}else if($value->kab_kota_ortu == '500'){
								echo "KAB. MINAHASA TENGGARA";
							}else if($value->kab_kota_ortu == '501'){
								echo "KAB. BOLAANG MONGONDAW TIMUR";
							}else if($value->kab_kota_ortu == '502'){
								echo "KAB. BOLAANG MONGONDAW SELATAN";
							}else if($value->kab_kota_ortu == '503'){
								echo "KOTA MANADO";
							}else if($value->kab_kota_ortu == '504'){
								echo "KOTA BITUNG";
							}else if($value->kab_kota_ortu == '505'){
								echo "KOTA TOMOHON";
							}else if($value->kab_kota_ortu == '506'){
								echo "KOTA KOTAMOBAGU";
							}else if($value->kab_kota_ortu == '507'){
								echo "KAB. BANGGAI KEPULAUAN";
							}else if($value->kab_kota_ortu == '508'){
								echo "KAB. DONGGALA";
							}else if($value->kab_kota_ortu == '509'){
								echo "KAB. POSO";
							}else if($value->kab_kota_ortu == '510'){
								echo "KAB. BANGGAI";
							}else if($value->kab_kota_ortu == '511'){
								echo "KAB. BUOL";
							}else if($value->kab_kota_ortu == '512'){
								echo "KAB. TOLITOLI";
							}else if($value->kab_kota_ortu == '513'){
								echo "KAB. MOROWALI";
							}else if($value->kab_kota_ortu == '514'){
								echo "KAB. PARIGI MOUTONG";
							}else if($value->kab_kota_ortu == '515'){
								echo "KAB. TOJO UNA-UNA";
							}else if($value->kab_kota_ortu == '516'){
								echo "KAB. SIGI";
							}else if($value->kab_kota_ortu == '517'){
								echo "KAB. BANGGAI LAUT";
							}else if($value->kab_kota_ortu == '518'){
								echo "KAB. MOROWALI UTARA";
							}else if($value->kab_kota_ortu == '519'){
								echo "KOTA PALU";
							}else if($value->kab_kota_ortu == '520'){
								echo "KAB. MAROS";
							}else if($value->kab_kota_ortu == '521'){
								echo "KAB. PANGKAJENE KEPULAUAN";
							}else if($value->kab_kota_ortu == '522'){
								echo "KAB. GOWA";
							}else if($value->kab_kota_ortu == '523'){
								echo "KAB. TAKALAR";
							}else if($value->kab_kota_ortu == '524'){
								echo "KAB. JENEPONTO";
							}else if($value->kab_kota_ortu == '525'){
								echo "KAB. BARRU";
							}else if($value->kab_kota_ortu == '526'){
								echo "KAB. BONE";
							}else if($value->kab_kota_ortu == '527'){
								echo "KAB. WAJO";
							}else if($value->kab_kota_ortu == '528'){
								echo "KAB. SOPPENG";
							}else if($value->kab_kota_ortu == '529'){
								echo "KAB. BANTAENG";
							}else if($value->kab_kota_ortu == '530'){
								echo "KAB. BULUKUMBA";
							}else if($value->kab_kota_ortu == '531'){
								echo "KAB. SINJAI";
							}else if($value->kab_kota_ortu == '532'){
								echo "KAB. KEPULAUAN SELAYAR";
							}else if($value->kab_kota_ortu == '533'){
								echo "KAB. PINRANG";
							}else if($value->kab_kota_ortu == '534'){
								echo "KAB. SIDENRENG RAPPANG";
							}else if($value->kab_kota_ortu == '535'){
								echo "KAB. ENREKANG";
							}else if($value->kab_kota_ortu == '536'){
								echo "KAB. LUWU";
							}else if($value->kab_kota_ortu == '537'){
								echo "KAB. TANA TORAJA";
							}else if($value->kab_kota_ortu == '538'){
								echo "KAB. LUWU UTARA";
							}else if($value->kab_kota_ortu == '539'){
								echo "KAB. LUWU TIMUR";
							}else if($value->kab_kota_ortu == '540'){
								echo "KAB. TORAJA UTARA";
							}else if($value->kab_kota_ortu == '541'){
								echo "KOTA MAKASSAR";
							}else if($value->kab_kota_ortu == '542'){
								echo "KOTA PARE-PARE";
							}else if($value->kab_kota_ortu == '543'){
								echo "KOTA PALOPO";
							}else if($value->kab_kota_ortu == '544'){
								echo "KAB. KONAWE";
							}else if($value->kab_kota_ortu == '545'){
								echo "KAB. MUNA";
							}else if($value->kab_kota_ortu == '546'){
								echo "KAB. BUTON";
							}else if($value->kab_kota_ortu == '547'){
								echo "KAB. KOLAKA";
							}else if($value->kab_kota_ortu == '548'){
								echo "KAB. KONAWE SELATAN";
							}else if($value->kab_kota_ortu == '549'){
								echo "KAB. WAKATOBI";
							}else if($value->kab_kota_ortu == '550'){
								echo "KAB. BOMBANA";
							}else if($value->kab_kota_ortu == '551'){
								echo "KAB. KOLAKA UTARA";
							}else if($value->kab_kota_ortu == '552'){
								echo "KAB. KONAWE UTARA";
							}else if($value->kab_kota_ortu == '553'){
								echo "KAB. BUTON UTARA";
							}else if($value->kab_kota_ortu == '554'){
								echo "KAB. KOLAKA TIMUR";
							}else if($value->kab_kota_ortu == '555'){
								echo "KAB. KONAWE KEPULAUAN";
							}else if($value->kab_kota_ortu == '556'){
								echo "KAB. MUNA BARAT";
							}else if($value->kab_kota_ortu == '557'){
								echo "KAB. BUTON SELATAN";
							}else if($value->kab_kota_ortu == '558'){
								echo "KAB. BUTON TENGAH";
							}else if($value->kab_kota_ortu == '559'){
								echo "KOTA KENDARI";
							}else if($value->kab_kota_ortu == '560'){
								echo "KOTA BAUBAU";
							}else if($value->kab_kota_ortu == '561'){
								echo "KAB. MALUKU TENGAH";
							}else if($value->kab_kota_ortu == '562'){
								echo "KAB. MALUKU TENGGARA";
							}else if($value->kab_kota_ortu == '563'){
								echo "KAB. BURU";
							}else if($value->kab_kota_ortu == '564'){
								echo "KAB. MALUKU TENGGARA BARAT";
							}else if($value->kab_kota_ortu == '565'){
								echo "KAB. SERAM BAGIAN BARAT";
							}else if($value->kab_kota_ortu == '566'){
								echo "KAB. SERAM BAGIAN TIMUR";
							}else if($value->kab_kota_ortu == '567'){
								echo "KAB. KEPULAUAN ARU";
							}else if($value->kab_kota_ortu == '568'){
								echo "KAB. MALUKU BARAT DAYA";
							}else if($value->kab_kota_ortu == '569'){
								echo "KAB. BURU SELATAN";
							}else if($value->kab_kota_ortu == '570'){
								echo "KOTA AMBON";
							}else if($value->kab_kota_ortu == '571'){
								echo "KOTA TUAL";
							}else if($value->kab_kota_ortu == '572'){
								echo "KAB. BULELENG";
							}else if($value->kab_kota_ortu == '573'){
								echo "KAB. JEMBRANA";
							}else if($value->kab_kota_ortu == '574'){
								echo "KAB. TABANAN";
							}else if($value->kab_kota_ortu == '575'){
								echo "KAB. BADUNG";
							}else if($value->kab_kota_ortu == '576'){
								echo "KAB. GIANYAR";
							}else if($value->kab_kota_ortu == '577'){
								echo "KAB. KLUNGKUNG";
							}else if($value->kab_kota_ortu == '578'){
								echo "KAB. BANGLI";
							}else if($value->kab_kota_ortu == '579'){
								echo "KAB. KARANG ASEM";
							}else if($value->kab_kota_ortu == '580'){
								echo "KOTA DENPASAR";
							}else if($value->kab_kota_ortu == '581'){
								echo "KAB. LOMBOK BARAT";
							}else if($value->kab_kota_ortu == '582'){
								echo "KAB. LOMBOK TENGAH";
							}else if($value->kab_kota_ortu == '583'){
								echo "KAB. LOMBOK TIMUR";
							}else if($value->kab_kota_ortu == '584'){
								echo "KAB. SUMBAWA";
							}else if($value->kab_kota_ortu == '585'){
								echo "KAB. DOMPU";
							}else if($value->kab_kota_ortu == '586'){
								echo "KAB. BIMA";
							}else if($value->kab_kota_ortu == '587'){
								echo "KAB. SUMBAWA BARAT";
							}else if($value->kab_kota_ortu == '588'){
								echo "KAB. LOMBOK UTARA";
							}else if($value->kab_kota_ortu == '589'){
								echo "KOTA MATARAM";
							}else if($value->kab_kota_ortu == '590'){
								echo "KOTA BIMA";
							}else if($value->kab_kota_ortu == '591'){
								echo "KAB. KUPANG";
							}else if($value->kab_kota_ortu == '592'){
								echo "KAB. TIMOR TENGAH SELATAN";
							}else if($value->kab_kota_ortu == '593'){
								echo "KAB. TIMOR TENGAH UTARA";
							}else if($value->kab_kota_ortu == '594'){
								echo "KAB. BELU";
							}else if($value->kab_kota_ortu == '595'){
								echo "KAB. ALOR";
							}else if($value->kab_kota_ortu == '596'){
								echo "KAB. FLORES TIMUR";
							}else if($value->kab_kota_ortu == '597'){
								echo "KAB. SIKKA";
							}else if($value->kab_kota_ortu == '598'){
								echo "KAB. ENDE";
							}else if($value->kab_kota_ortu == '599'){
								echo "KAB. NGADA";
							}else if($value->kab_kota_ortu == '600'){
								echo "KAB. MANGGARAI";
							}else if($value->kab_kota_ortu == '601'){
								echo "KAB. SUMBA TIMUR";
							}else if($value->kab_kota_ortu == '602'){
								echo "KAB. SUMBA BARAT";
							}else if($value->kab_kota_ortu == '603'){
								echo "KAB. LEMBATA";
							}else if($value->kab_kota_ortu == '604'){
								echo "KAB. ROTE-NDAO";
							}else if($value->kab_kota_ortu == '605'){
								echo "KAB. MANGGARAI BARAT";
							}else if($value->kab_kota_ortu == '606'){
								echo "KAB. NAGAKEO";
							}else if($value->kab_kota_ortu == '607'){
								echo "KAB. SUMBA TENGAH";
							}else if($value->kab_kota_ortu == '608'){
								echo "KAB. SUMBA BARAT DAYA";
							}else if($value->kab_kota_ortu == '609'){
								echo "KAB. MANGGARAI TIMUR";
							}else if($value->kab_kota_ortu == '610'){
								echo "KAB. SABU RAIJUA";
							}else if($value->kab_kota_ortu == '611'){
								echo "KAB. MALAKA";
							}else if($value->kab_kota_ortu == '612'){
								echo "KOTA KUPANG";
							}else if($value->kab_kota_ortu == '613'){
								echo "KOTA KUPANG";
							}else if($value->kab_kota_ortu == '614'){
								echo "KAB. BIAK NUMFOR";
							}else if($value->kab_kota_ortu == '615'){
								echo "KAB. KEPULAUAN YAPEN";
							}else if($value->kab_kota_ortu == '616'){
								echo "KAB. MERAUKE";
							}else if($value->kab_kota_ortu == '617'){
								echo "KAB. JAYA WIJAYA";
							}else if($value->kab_kota_ortu == '618'){
								echo "KAB. NABIRE";
							}else if($value->kab_kota_ortu == '619'){
								echo "KAB. PANIAI";
							}else if($value->kab_kota_ortu == '620'){
								echo "KAB. PUNCAK JAYA";
							}else if($value->kab_kota_ortu == '621'){
								echo "KAB. MIMIKA";
							}else if($value->kab_kota_ortu == '622'){
								echo "KAB. BOVEN DIGOEL";
							}else if($value->kab_kota_ortu == '623'){
								echo "KAB. MAPPI";
							}else if($value->kab_kota_ortu == '624'){
								echo "KAB. ASMAT";
							}else if($value->kab_kota_ortu == '625'){
								echo "KAB. YAHUKIMO";
							}else if($value->kab_kota_ortu == '626'){
								echo "KAB. PEGUNUNGAN BINTANG";
							}else if($value->kab_kota_ortu == '627'){
								echo "KAB. TOLIKARA";
							}else if($value->kab_kota_ortu == '628'){
								echo "KAB. SARMI";
							}else if($value->kab_kota_ortu == '629'){
								echo "KAB. KEEROM";
							}else if($value->kab_kota_ortu == '630'){
								echo "KAB. WAROPEN";
							}else if($value->kab_kota_ortu == '631'){
								echo "KAB. SUPIORI";
							}else if($value->kab_kota_ortu == '632'){
								echo "KAB. MEMBERAMO RAYA";
							}else if($value->kab_kota_ortu == '633'){
								echo "KAB. NDUGA";
							}else if($value->kab_kota_ortu == '634'){
								echo "KAB. LANNY JAYA";
							}else if($value->kab_kota_ortu == '635'){
								echo "KAB. MEMBRAMO TENGAH";
							}else if($value->kab_kota_ortu == '636'){
								echo "KAB. YALIMO";
							}else if($value->kab_kota_ortu == '637'){
								echo "KAB. PUNCAK";
							}else if($value->kab_kota_ortu == '638'){
								echo "KAB. DOGIYAI";
							}else if($value->kab_kota_ortu == '639'){
								echo "KAB. DEIYAI";
							}else if($value->kab_kota_ortu == '640'){
								echo "KAB. INTAN JAYA";
							}else if($value->kab_kota_ortu == '641'){
								echo "KOTA JAYAPURA";
							}else if($value->kab_kota_ortu == '642'){
								echo "KAB. BENGKULU UTARA";
							}else if($value->kab_kota_ortu == '643'){
								echo "KAB. REJANG LEBONG";
							}else if($value->kab_kota_ortu == '644'){
								echo "KAB. BENGKULU SELATAN";
							}else if($value->kab_kota_ortu == '645'){
								echo "KAB. MUKO-MUKO";
							}else if($value->kab_kota_ortu == '646'){
								echo "KAB. KEPAHIANG";
							}else if($value->kab_kota_ortu == '647'){
								echo "KAB. LEBONG";
							}else if($value->kab_kota_ortu == '648'){
								echo "KAB. KAUR";
							}else if($value->kab_kota_ortu == '649'){
								echo "KAB. SELUMA";
							}else if($value->kab_kota_ortu == '650'){
								echo "KAB. BENGKULU TENGAH";
							}else if($value->kab_kota_ortu == '651'){
								echo "KOTA BENGKULU";
							}else if($value->kab_kota_ortu == '652'){
								echo "KAB. PULAU TALIABU";
							}else if($value->kab_kota_ortu == '653'){
								echo "KAB. HALMAHERA TENGAH";
							}else if($value->kab_kota_ortu == '654'){
								echo "KAB. HALMAHERA BARAT";
							}else if($value->kab_kota_ortu == '655'){
								echo "KAB. HALMAHERA UTARA";
							}else if($value->kab_kota_ortu == '656'){
								echo "KAB. HALMAHERA SELATAN";
							}else if($value->kab_kota_ortu == '657'){
								echo "KAB. HALMAHERA TIMUR";
							}else if($value->kab_kota_ortu == '658'){
								echo "KAB. KEPULAUAN SULA";
							}else if($value->kab_kota_ortu == '659'){
								echo "KAB. KEPULAUAN MOROTAI";
							}else if($value->kab_kota_ortu == '660'){
								echo "KOTA TERNATE";
							}else if($value->kab_kota_ortu == '661'){
								echo "KOTA TIDORE KEPULAUAN";
							}else if($value->kab_kota_ortu == '662'){
								echo "KAB. PANDEGLANG";
							}else if($value->kab_kota_ortu == '663'){
								echo "KAB. LEBAK";
							}else if($value->kab_kota_ortu == '664'){
								echo "KAB. TANGERANG";
							}else if($value->kab_kota_ortu == '665'){
								echo "KAB. SERANG";
							}else if($value->kab_kota_ortu == '666'){
								echo "KOTA CILEGON";
							}else if($value->kab_kota_ortu == '667'){
								echo "KOTA TANGERANG";
							}else if($value->kab_kota_ortu == '668'){
								echo "KOTA SERANG";
							}else if($value->kab_kota_ortu == '669'){
								echo "KOTA TANGERANG SELATAN";
							}else if($value->kab_kota_ortu == '670'){
								echo "KAB. BANGKA";
							}else if($value->kab_kota_ortu == '671'){
								echo "KAB. BELITUNG";
							}else if($value->kab_kota_ortu == '672'){
								echo "KAB. BANGKA TENGAH";
							}else if($value->kab_kota_ortu == '673'){
								echo "KAB. BANGKA BARAT";
							}else if($value->kab_kota_ortu == '674'){
								echo "KAB. BANGKA SELATAN";
							}else if($value->kab_kota_ortu == '675'){
								echo "KAB. BELITUNG TIMUR";
							}else if($value->kab_kota_ortu == '676'){
								echo "KOTA PANGKALPINANG";
							}else if($value->kab_kota_ortu == '677'){
								echo "KAB. BOALEMO";
							}else if($value->kab_kota_ortu == '678'){
								echo "KAB. GORONTALO";
							}else if($value->kab_kota_ortu == '679'){
								echo "KAB. POHUWATO";
							}else if($value->kab_kota_ortu == '680'){
								echo "KAB. BONE BOLANGO";
							}else if($value->kab_kota_ortu == '681'){
								echo "KAB. GORONTALO UTARA";
							}else if($value->kab_kota_ortu == '682'){
								echo "KOTA GORONTALO";
							}else if($value->kab_kota_ortu == '683'){
								echo "KAB. BINTAN";
							}else if($value->kab_kota_ortu == '684'){
								echo "KAB. KARIMUN";
							}else if($value->kab_kota_ortu == '685'){
								echo "KAB. NATUNA";
							}else if($value->kab_kota_ortu == '686'){
								echo "KAB. LINGGA";
							}else if($value->kab_kota_ortu == '687'){
								echo "KAB. KEPULAUAN ANAMBAS";
							}else if($value->kab_kota_ortu == '688'){
								echo "KOTA BATAM";
							}else if($value->kab_kota_ortu == '689'){
								echo "KOTA TANJUNGPINANG";
							}else if($value->kab_kota_ortu == '690'){
								echo "KAB. FAK-FAK";
							}else if($value->kab_kota_ortu == '691'){
								echo "KAB. KAIMANA";
							}else if($value->kab_kota_ortu == '692'){
								echo "KAB. TELUK WONDAMA";
							}else if($value->kab_kota_ortu == '693'){
								echo "KAB. TELUK BINTUNI";
							}else if($value->kab_kota_ortu == '694'){
								echo "KAB. MANOKWARI";
							}else if($value->kab_kota_ortu == '695'){
								echo "KAB. SORONG SELATAN";
							}else if($value->kab_kota_ortu == '696'){
								echo "KAB. SORONG";
							}else if($value->kab_kota_ortu == '697'){
								echo "KAB. RAJA AMPAT";
							}else if($value->kab_kota_ortu == '698'){
								echo "KAB. TAMBRAUW";
							}else if($value->kab_kota_ortu == '699'){
								echo "KAB. MAYBRAT";
							}else if($value->kab_kota_ortu == '700'){
								echo "KAB. PEGUNUNGAN ARFAK";
							}else if($value->kab_kota_ortu == '701'){
								echo "KAB. MANOKWARI SELATAN";
							}else if($value->kab_kota_ortu == '702'){
								echo "KOTA SORONG";
							}else if($value->kab_kota_ortu == '703'){
								echo "KAB. MAMUJU";
							}else if($value->kab_kota_ortu == '704'){
								echo "KAB. MAMUJU UTARA";
							}else if($value->kab_kota_ortu == '705'){
								echo "KAB. POLEWALI MANDAR";
							}else if($value->kab_kota_ortu == '706'){
								echo "KAB. MAMASA";
							}else if($value->kab_kota_ortu == '707'){
								echo "KAB. MAJENE";
							}else if($value->kab_kota_ortu == '708'){
								echo "KAB. MAMUJU TENGAH";
							}else if($value->kab_kota_ortu == '709'){
								echo "KAB. MALINAU";
							}else if($value->kab_kota_ortu == '710'){
								echo "KAB. BULONGAN";
							}else if($value->kab_kota_ortu == '711'){
								echo "KAB. TANA TIDUNG";
							}else if($value->kab_kota_ortu == '712'){
								echo "KAB. NUNUKAN";
							}else if($value->kab_kota_ortu == '713'){
								echo "KOTA TARAKAN";
							}else if($value->kab_kota_ortu == '714'){
								echo "BELANDA";
							}else if($value->kab_kota_ortu == '715'){
								echo "JAPAN";
							}else if($value->kab_kota_ortu == '716'){
								echo "MESIR";
							}else if($value->kab_kota_ortu == '717'){
								echo "MALAYSIA";
							}else if($value->kab_kota_ortu == '718'){
								echo "MYANMAR";
							}else if($value->kab_kota_ortu == '719'){
								echo "FILIPINA";
							}else if($value->kab_kota_ortu == '720'){
								echo "RUSIA";
							}else if($value->kab_kota_ortu == '721'){
								echo "ARAB SAUDI";
							}else if($value->kab_kota_ortu == '722'){
								echo "SERBIA";
							}else if($value->kab_kota_ortu == '723'){
								echo "SINGAPURA";
							}else if($value->kab_kota_ortu == '724'){
								echo "SYRIA";
							}else if($value->kab_kota_ortu == '725'){
								echo "THAILAND";
							}else if($value->kab_kota_ortu == '726'){
								echo "AUSTRALIA";
							}else if($value->kab_kota_ortu == '727'){
								echo "TIMOR LESTE";
							}else if($value->kab_kota_ortu == '728'){
								echo "PAKISTAN";
							}else{
								echo "Tidak Valid";
							}	
						?></td>
				</tr>

				<tr>
					<td>No Telp/Hp Ortu</td>
					<td>:</td>
					<td><?php echo $value->no_telp_ortu; ?></td>
				</tr>

				<tr>
					<td>Kode Pos Ortu</td>
					<td>:</td>
					<td><?php echo $value->kode_pos_ortu; ?></td>
				</tr>

				<tr>
					<td>Pekerjaan Ayah</td>
					<td>:</td>
					<td><?php 
						if($value->pekerjaan_ayah == '1'){
							echo "PNS/TNI/POLRI";
						}else if($value->pekerjaan_ayah == '2'){
							echo "Wiraswasta";
						}else if($value->pekerjaan_ayah == '3'){
							echo "Tukang";
						}else if($value->pekerjaan_ayah == '4'){
							echo "Buruh Tani/Petani";
						}else{
							echo "Data Tidak Ada";
						}

						?></td>
				</tr>

				<tr>
					<td>Pekerjaan Ibu</td>
					<td>:</td>
					<td><?php echo $value->pekerjaan_ibu; ?></td>
				</tr>

				<tr>
					<td>Pendidikan Ayah</td>
					<td>:</td>
					<td><?php 
						if($value->pendidikan_ayah == '1'){
							echo "Lebih dari Sarjana";
						}else if($value->pendidikan_ayah == '2'){
							echo "SLTA/Sederajat";
						}else if($value->pendidikan_ayah == '3'){
							echo "SLTP/Sederajat";
						}else if($value->pendidikan_ayah == '4'){
							echo "SD/Tidak Tamat SD";
						}else{
							echo "Data Tidak Ada";
						}
					?></td>
				</tr>

				<tr>
					<td>Pendidikan Ibu</td>
					<td>:</td>
					<td><?php echo $value->pendidikan_ibu; ?></td>
				</tr>

				<tr>
					<td>Penghasilan Ayah</td>
					<td>:</td>
					<td><?php
						if($value->penghasilan_ayah == '1'){
							echo "Lebih dari 1.200.000";
						}else if($value->penghasilan_ayah == '2'){
							echo "1.000.001 - 1.200.000";
						}else if($value->penghasilan_ayah == '3'){
							echo "500.001 - 750.000";
						}else if($value->penghasilan_ayah == '4'){
							echo "Kurang dari 500.000";
						}else{
							echo "Data Tidak Ada";
						}
					?></td>
				</tr>

				<tr>
					<td>Nominal Penghasilan Ayah</td>
					<td>:</td>
					<td><?php echo 'Rp '.number_format($value->nominal_peng_ayah); ?></td>
				</tr>

				<tr>
					<td>Penghasilan Ibu</td>
					<td>:</td>
					<td><?php
						if($value->penghasilan_ibu == '1'){
							echo "Lebih dari 1.200.000";
						}else if($value->penghasilan_ibu == '2'){
							echo "1.000.001 - 1.200.000";
						}else if($value->penghasilan_ibu == '3'){
							echo "500.001 - 750.000";
						}else if($value->penghasilan_ibu == '4'){
							echo "Kurang dari 500.000";
						}else{
							echo "Data Tidak Ada";
						}
					?></td>
				</tr>

				<tr>
					<td>Nominal Penghasilan Ibu</td>
					<td>:</td>
					<td><?php echo 'Rp '.number_format($value->nominal_peng_ibu); ?></td>
				</tr>

				<tr>
					<td>Jumlah Tanggungan</td>
					<td>:</td>
					<td><?php 
						if($value->jumlah_saudara_kandung_tang_ortu == '1'){
							echo "Kurang dari 5 Orang";
						}else if($value->jumlah_saudara_kandung_tang_ortu == '2'){
							echo "5 - 6 Orang";
						}else if($value->jumlah_saudara_kandung_tang_ortu == '3'){
							echo "7 - 8 Orang";
						}else if($value->jumlah_saudara_kandung_tang_ortu == '4'){
							echo "Lebih dari 8 Orang";
						}else{
							echo "Data Tidak Ada";
						}
					?></td>
				</tr>
				<!--End Data Ortu-->

				<!--Data Rumah-->
				<tr>
					<td><h2>Data Kondisi Rumah</h2></td>
				</tr>

				<tr>
					<td>Luas Rumah</td>
					<td>:</td>
					<td><?php 
						if($value->luas_rumah == '1'){
							echo "Lebih dari 120 M Persegi";
						}else if($value->luas_rumah == '2'){
							echo "81 - 120 M Persegi";
						}else if($value->luas_rumah == '3'){
							echo "41 - 80 M Persegi";
						}else if($value->luas_rumah == '4'){
							echo "Kurang dari 40 M Persegi";
						}else{
							echo "Data Tidak Ada";
						}
					?></td>
				</tr>

				<tr>
					<td>Pajak Bumi Bangunan</td>
					<td>:</td>
					<td><?php
						if($value->pbb == '1'){
							echo "Lebih dari 100.000";
						}else if($value->pbb == '2'){
							echo "75.001 - 100.000";
						}else if($value->pbb == '3'){
							echo "25.001 - 75.000";
						}else if($value->pbb == '4'){
							echo "Kurang dari 25.001";
						}else{
							echo "Data tidak Ada";
						}
					?></td>
				</tr>

				<tr>
					<td>Rekening Listrik/Bulan</td>
					<td>:</td>
					<td><?php
						if($value->rek_listrik_per_bulan == '1'){
							echo "Lebih dari 100.000";
						}else if($value->rek_listrik_per_bulan == '2'){
							echo "75.001 - 100.000";
						}else if($value->rek_listrik_per_bulan == '3'){
							echo "25.001 - 75.000";
						}else if($value->rek_listrik_per_bulan == '4'){
							echo "Kurang dari 25.000";
						}else{
							echo "Data Tidak ada";
						}
					?></td>
				</tr>
				<!--End Data Rumah-->

				<!--Data Sekolah-->
				<tr>
					<td><h2>Data Sekolah</h2></td>
				</tr>

				<tr>
					<td>Alamat Sekolah</td>
					<td>:</td>
					<td><?php echo $value->alamat_sekolah; ?></td>
				</tr>

				<tr>
					<td>Provinsi Sekolah</td>
					<td>:</td>
					<td><?php 
							if($value->prov_sekolah == '100'){
								echo "D.K.I JAKARTA";
							}else if($value->prov_sekolah == '101'){
								echo "JAWA BARAT";
							}else if($value->prov_sekolah == '102'){
								echo "JAWA TENGAH";
							}else if($value->prov_sekolah == '103'){
								echo "D.I. YOGYAKARTA";
							}else if($value->prov_sekolah == '104'){
								echo "JAWA TIMUR";
							}else if($value->prov_sekolah == '105'){
								echo "ACEH";
							}else if($value->prov_sekolah == '106'){
								echo "SUMATERA UTARA";
							}else if($value->prov_sekolah == '107'){
								echo "SUMATERA BARAT";
							}else if($value->prov_sekolah == '108'){
								echo "RIAU";
							}else if($value->prov_sekolah == '109'){
								echo "JAMBI";
							}else if($value->prov_sekolah == '110'){
								echo "SUMATERA SELATAN";
							}else if($value->prov_sekolah == '111'){
								echo "LAMPUNG";
							}else if($value->prov_sekolah == '112'){
								echo "KALIMANTAN BARAT";
							}else if($value->prov_sekolah == '113'){
								echo "KALIMANTAN TENGAH";
							}else if($value->prov_sekolah == '114'){
								echo "KALIMANTAN SELATAN";
							}else if($value->prov_sekolah == '115'){
								echo "KALIMANTAN TIMUR";
							}else if($value->prov_sekolah == '116'){
								echo "SULAWESI UTARA";
							}else if($value->prov_sekolah == '117'){
								echo "SULAWESI TENGAH";
							}else if($value->prov_sekolah == '118'){
								echo "SULAWESI SELATAN";
							}else if($value->prov_sekolah == '119'){
								echo "SULAWESI TENGGARA";
							}else if($value->prov_sekolah == '120'){
								echo "MALUKU";
							}else if($value->prov_sekolah == '121'){
								echo "BALI";
							}else if($value->prov_sekolah == '122'){
								echo "NUSA TENGGARA BARAT";
							}else if($value->prov_sekolah == '123'){
								echo "NUSA TENGGARA TIMUR";
							}else if($value->prov_sekolah == '124'){
								echo "PAPUA";
							}else if($value->prov_sekolah == '125'){
								echo "BENGKULU";
							}else if($value->prov_sekolah == '126'){
								echo "MALUKU UTARA";
							}else if($value->prov_sekolah == '127'){
								echo "BANTEN";
							}else if($value->prov_sekolah == '128'){
								echo "BANGKA BELITUNG";
							}else if($value->prov_sekolah == '129'){
								echo "GORONTALO";
							}else if($value->prov_sekolah == '130'){
								echo "KEPULAUAN RIAU";
							}else if($value->prov_sekolah == '131'){
								echo "PAPUA BARAT";
							}else if($value->prov_sekolah == '132'){
								echo "SULAWESI BARAT";
							}else if($value->prov_sekolah == '133'){
								echo "KALIMANTAN UTARA";
							}else if($value->prov_sekolah == '134'){
								echo "LUAR NEGERI";
							}else{
								echo "Tidak Valid";
							}	
						?></td>
				</tr>

				<tr>
					<td>Kab/Kota Sekolah</td>
					<td>:</td>
					<td><?php 
							if($value->kab_kota_sekolah == '200'){
								echo "KAB. KEPULAUAN SERIBU";
							}else if($value->kab_kota_sekolah == '201'){
								echo "KOTA JAKARTA PUSAT";
							}else if($value->kab_kota_sekolah == '202'){
								echo "KOTA JAKARTA UTARA";
							}else if($value->kab_kota_sekolah == '203'){
								echo "KOTA JAKARTA BARAT";
							}else if($value->kab_kota_sekolah == '204'){
								echo "KOTA JAKARTA SELATAN";
							}else if($value->kab_kota_sekolah == '205'){
								echo "KOTA JAKARTA TIMUR";
							}else if($value->kab_kota_sekolah == '206'){
								echo "KAB. BOGOR";
							}else if($value->kab_kota_sekolah == '207'){
								echo "KAB. SUKABUMI";
							}else if($value->kab_kota_sekolah == '208'){
								echo "KAB. CIANJUR";
							}else if($value->kab_kota_sekolah == '209'){
								echo "KAB. BANDUNG";
							}else if($value->kab_kota_sekolah == '210'){
								echo "KAB. SUMEDANG";
							}else if($value->kab_kota_sekolah == '211'){
								echo "KAB. GARUT";
							}else if($value->kab_kota_sekolah == '212'){
								echo "KAB. TASIKMALAYA";
							}else if($value->kab_kota_sekolah == '213'){
								echo "KAB. CIAMIS";
							}else if($value->kab_kota_sekolah == '214'){
								echo "KAB. KUNINGAN";
							}else if($value->kab_kota_sekolah == '215'){
								echo "KAB. MAJALENGKA";
							}else if($value->kab_kota_sekolah == '216'){
								echo "KAB. CIREBON";
							}else if($value->kab_kota_sekolah == '217'){
								echo "KAB. INDRAMAYU";
							}else if($value->kab_kota_sekolah == '218'){
								echo "KAB. SUBANG";
							}else if($value->kab_kota_sekolah == '219'){
								echo "KAB. PURWAKARTA";
							}else if($value->kab_kota_sekolah == '220'){
								echo "KAB. KARAWANG";
							}else if($value->kab_kota_sekolah == '221'){
								echo "KAB. BEKASI";
							}else if($value->kab_kota_sekolah == '222'){
								echo "KAB. BANDUNG BARAT";
							}else if($value->kab_kota_sekolah == '223'){
								echo "KAB. PANGANDARAN";
							}else if($value->kab_kota_sekolah == '224'){
								echo "KOTA BANDUNG";
							}else if($value->kab_kota_sekolah == '225'){
								echo "KOTA BOGOR";
							}else if($value->kab_kota_sekolah == '226'){
								echo "KOTA SUKABUMI";
							}else if($value->kab_kota_sekolah == '227'){
								echo "KOTA CIREBON";
							}else if($value->kab_kota_sekolah == '228'){
								echo "KOTA BEKASI";
							}else if($value->kab_kota_sekolah == '229'){
								echo "KOTA DEPOK";
							}else if($value->kab_kota_sekolah == '230'){
								echo "KOTA CIMAHI";
							}else if($value->kab_kota_sekolah == '231'){
								echo "KOTA TASIKMALAYA";
							}else if($value->kab_kota_sekolah == '232'){
								echo "KOTA BANJAR";
							}else if($value->kab_kota_sekolah == '233'){
								echo "KAB. CILACAP";
							}else if($value->kab_kota_sekolah == '234'){
								echo "KAB. BANYUMAS";
							}else if($value->kab_kota_sekolah == '235'){
								echo "KAB. PURBALINGGA";
							}else if($value->kab_kota_sekolah == '236'){
								echo "KAB. BANJARNEGARA";
							}else if($value->kab_kota_sekolah == '237'){
								echo "KAB. KEBUMEN";
							}else if($value->kab_kota_sekolah == '238'){
								echo "KAB. PURWOREJO";
							}else if($value->kab_kota_sekolah == '239'){
								echo "KAB. WONOSOBO";
							}else if($value->kab_kota_sekolah == '240'){
								echo "KAB. MAGELANG";
							}else if($value->kab_kota_sekolah == '241'){
								echo "KAB. BOYOLALI";
							}else if($value->kab_kota_sekolah == '242'){
								echo "KAB. KLATEN";
							}else if($value->kab_kota_sekolah == '243'){
								echo "KAB. SUKOHARJO";
							}else if($value->kab_kota_sekolah == '244'){
								echo "KAB. WONOGIRI";
							}else if($value->kab_kota_sekolah == '245'){
								echo "KAB. KARANGANYAR";
							}else if($value->kab_kota_sekolah == '246'){
								echo "KAB. SRAGEN";
							}else if($value->kab_kota_sekolah == '247'){
								echo "KAB. GROBOGAN";
							}else if($value->kab_kota_sekolah == '248'){
								echo "KAB. BLORA";
							}else if($value->kab_kota_sekolah == '249'){
								echo "KAB. REMBANG";
							}else if($value->kab_kota_sekolah == '250'){
								echo "KAB. PATI";
							}else if($value->kab_kota_sekolah == '251'){
								echo "KAB. KUDUS";
							}else if($value->kab_kota_sekolah == '252'){
								echo "KAB. JEPARA";
							}else if($value->kab_kota_sekolah == '253'){
								echo "KAB. DEMAK";
							}else if($value->kab_kota_sekolah == '254'){
								echo "KAB. SEMARANG";
							}else if($value->kab_kota_sekolah == '255'){
								echo "KAB. TEMANGGUNG";
							}else if($value->kab_kota_sekolah == '256'){
								echo "KAB. KENDAL";
							}else if($value->kab_kota_sekolah == '257'){
								echo "KAB. BATANG";
							}else if($value->kab_kota_sekolah == '258'){
								echo "KAB. PEKALONGAN";
							}else if($value->kab_kota_sekolah == '259'){
								echo "KAB. PEMALANG";
							}else if($value->kab_kota_sekolah == '260'){
								echo "KAB. TEGAL";
							}else if($value->kab_kota_sekolah == '261'){
								echo "KAB. BREBES";
							}else if($value->kab_kota_sekolah == '262'){
								echo "KOTA MAGELANG";
							}else if($value->kab_kota_sekolah == '263'){
								echo "KOTA SURAKARTA";
							}else if($value->kab_kota_sekolah == '264'){
								echo "KOTA SALATIGA";
							}else if($value->kab_kota_sekolah == '265'){
								echo "KOTA SEMARANG";
							}else if($value->kab_kota_sekolah == '266'){
								echo "KOTA PEKALONGAN";
							}else if($value->kab_kota_sekolah == '267'){
								echo "KOTA TEGAL";
							}else if($value->kab_kota_sekolah == '268'){
								echo "KAB. BANTUL";
							}else if($value->kab_kota_sekolah == '269'){
								echo "KAB. SLEMAN";
							}else if($value->kab_kota_sekolah == '270'){
								echo "KAB. GUNUNG KIDUL";
							}else if($value->kab_kota_sekolah == '271'){
								echo "KAB. KULON PROGO";
							}else if($value->kab_kota_sekolah == '272'){
								echo "KOTA YOGYAKARTA";
							}else if($value->kab_kota_sekolah == '273'){
								echo "KAB. GRESIK";
							}else if($value->kab_kota_sekolah == '274'){
								echo "KAB. SIDOARJO";
							}else if($value->kab_kota_sekolah == '275'){
								echo "KAB. MOJOKERTO";
							}else if($value->kab_kota_sekolah == '276'){
								echo "KAB. JOMBANG";
							}else if($value->kab_kota_sekolah == '277'){
								echo "KAB. BOJONEGORO";
							}else if($value->kab_kota_sekolah == '278'){
								echo "KAB. TUBAN";
							}else if($value->kab_kota_sekolah == '279'){
								echo "KAB. LAMONGAN";
							}else if($value->kab_kota_sekolah == '280'){
								echo "KAB. MADIUN";
							}else if($value->kab_kota_sekolah == '281'){
								echo "KAB. NGAWI";
							}else if($value->kab_kota_sekolah == '282'){
								echo "KAB. MAGETAN";
							}else if($value->kab_kota_sekolah == '283'){
								echo "KAB. PONOROGO";
							}else if($value->kab_kota_sekolah == '284'){
								echo "KAB. PACITAN";
							}else if($value->kab_kota_sekolah == '285'){
								echo "KAB. KEDIRI";
							}else if($value->kab_kota_sekolah == '286'){
								echo "KAB. NGANJUK";
							}else if($value->kab_kota_sekolah == '287'){
								echo "KAB. BLITAR";
							}else if($value->kab_kota_sekolah == '288'){
								echo "KAB. TULUNGAGUNG";
							}else if($value->kab_kota_sekolah == '289'){
								echo "KAB. TRENGGALEK";
							}else if($value->kab_kota_sekolah == '290'){
								echo "KAB. MALANG";
							}else if($value->kab_kota_sekolah == '291'){
								echo "KAB. PASURUAN";
							}else if($value->kab_kota_sekolah == '292'){
								echo "KAB. PROBOLINGGO";
							}else if($value->kab_kota_sekolah == '293'){
								echo "KAB. LUMAJANG";
							}else if($value->kab_kota_sekolah == '294'){
								echo "KAB. BONDOWOSO";
							}else if($value->kab_kota_sekolah == '295'){
								echo "KAB. SITUBONDO";
							}else if($value->kab_kota_sekolah == '296'){
								echo "KAB. JEMBER";
							}else if($value->kab_kota_sekolah == '297'){
								echo "KAB. BANYUWANGI";
							}else if($value->kab_kota_sekolah == '298'){
								echo "KAB. PAMEKASAN";
							}else if($value->kab_kota_sekolah == '299'){
								echo "KAB. SAMPANG";
							}else if($value->kab_kota_sekolah == '300'){
								echo "KAB. SUMENEP";
							}else if($value->kab_kota_sekolah == '301'){
								echo "KAB. BANGKALAN";
							}else if($value->kab_kota_sekolah == '302'){
								echo "KOTA SURABAYA";
							}else if($value->kab_kota_sekolah == '303'){
								echo "KOTA MALANG";
							}else if($value->kab_kota_sekolah == '304'){
								echo "KOTA MADIUN";
							}else if($value->kab_kota_sekolah == '305'){
								echo "KOTA KEDIRI";
							}else if($value->kab_kota_sekolah == '306'){
								echo "KOTA MOJOKERTO";
							}else if($value->kab_kota_sekolah == '307'){
								echo "KOTA BLITAR";
							}else if($value->kab_kota_sekolah == '308'){
								echo "KOTA PASURUAN";
							}else if($value->kab_kota_sekolah == '309'){
								echo "KOTA PROBOLINGGO";
							}else if($value->kab_kota_sekolah == '310'){
								echo "KOTA BATU";
							}else if($value->kab_kota_sekolah == '311'){
								echo "KAB. ACEH BESAR";
							}else if($value->kab_kota_sekolah == '312'){
								echo "KAB. PIDIE";
							}else if($value->kab_kota_sekolah == '313'){
								echo "KAB. ACEH UTARA";
							}else if($value->kab_kota_sekolah == '314'){
								echo "KAB. ACEH TIMUR";
							}else if($value->kab_kota_sekolah == '315'){
								echo "KAB. ACEH TENGAH";
							}else if($value->kab_kota_sekolah == '316'){
								echo "KAB. ACEH BARAT";
							}else if($value->kab_kota_sekolah == '317'){
								echo "KAB. ACEH SELATAN";
							}else if($value->kab_kota_sekolah == '318'){
								echo "KAB. ACEH TENGGARA";
							}else if($value->kab_kota_sekolah == '319'){
								echo "KAB. SIMEULUE";
							}else if($value->kab_kota_sekolah == '320'){
								echo "KAB. BIREUEN";
							}else if($value->kab_kota_sekolah == '321'){
								echo "KAB. ACEH SINGKIL";
							}else if($value->kab_kota_sekolah == '322'){
								echo "KAB. ACEH TAMIANG";
							}else if($value->kab_kota_sekolah == '323'){
								echo "KAB. NAGAN RAYA";
							}else if($value->kab_kota_sekolah == '324'){
								echo "KAB. ACEH JAYA";
							}else if($value->kab_kota_sekolah == '325'){
								echo "KAB. ACEH BARAT DAYA";
							}else if($value->kab_kota_sekolah == '326'){
								echo "KAB. GAYO LUES";
							}else if($value->kab_kota_sekolah == '327'){
								echo "KAB. BENER MERIAH";
							}else if($value->kab_kota_sekolah == '328'){
								echo "KAB. PIDIE JAYA";
							}else if($value->kab_kota_sekolah == '329'){
								echo "KOTA SABANG";
							}else if($value->kab_kota_sekolah == '330'){
								echo "KOTA BANDA ACEH";
							}else if($value->kab_kota_sekolah == '331'){
								echo "KOTA LHOKSEUMAWE";
							}else if($value->kab_kota_sekolah == '332'){
								echo "KOTA LANGSA";
							}else if($value->kab_kota_sekolah == '333'){
								echo "KOTA SUBULUSSALAM";
							}else if($value->kab_kota_sekolah == '334'){
								echo "KAB. DELI SERDANG";
							}else if($value->kab_kota_sekolah == '335'){
								echo "KAB. LANGKAT";
							}else if($value->kab_kota_sekolah == '336'){
								echo "KAB. KARO";
							}else if($value->kab_kota_sekolah == '337'){
								echo "KAB. SIMALUNGUN";
							}else if($value->kab_kota_sekolah == '338'){
								echo "KAB. DAIRI";
							}else if($value->kab_kota_sekolah == '339'){
								echo "KAB. ASAHAN";
							}else if($value->kab_kota_sekolah == '340'){
								echo "KAB. LABUHAN BATU";
							}else if($value->kab_kota_sekolah == '341'){
								echo "KAB. TAPANULI UTARA";
							}else if($value->kab_kota_sekolah == '342'){
								echo "KAB. TAPANULI TENGAH";
							}else if($value->kab_kota_sekolah == '343'){
								echo "KAB. TAPANULI SELATAN";
							}else if($value->kab_kota_sekolah == '344'){
								echo "KAB. NIAS";
							}else if($value->kab_kota_sekolah == '345'){
								echo "KAB. MANDAILING NATAL";
							}else if($value->kab_kota_sekolah == '346'){
								echo "KAB. TOBA SAMOSIR";
							}else if($value->kab_kota_sekolah == '347'){
								echo "KAB. NIAS SELATAN";
							}else if($value->kab_kota_sekolah == '348'){
								echo "KAB. PAK PAK BHARAT";
							}else if($value->kab_kota_sekolah == '349'){
								echo "KAB. HUMBANG HASUDUTAN";
							}else if($value->kab_kota_sekolah == '350'){
								echo "KAB. SAMOSIR";
							}else if($value->kab_kota_sekolah == '351'){
								echo "KAB. SERDANG BEDAGAI";
							}else if($value->kab_kota_sekolah == '352'){
								echo "KAB. BATUBARA";
							}else if($value->kab_kota_sekolah == '353'){
								echo "KAB. PADANG LAWAS UTARA";
							}else if($value->kab_kota_sekolah == '354'){
								echo "KAB. PADANG LAWAS";
							}else if($value->kab_kota_sekolah == '355'){
								echo "KAB. LABUHAN BATU UTARA";
							}else if($value->kab_kota_sekolah == '356'){
								echo "KAB. LABUHAN BATU SELATAN";
							}else if($value->kab_kota_sekolah == '357'){
								echo "KAB. NIAS BARAT";
							}else if($value->kab_kota_sekolah == '358'){
								echo "KAB. NIAS UTARA";
							}else if($value->kab_kota_sekolah == '359'){
								echo "KOTA MEDAN";
							}else if($value->kab_kota_sekolah == '360'){
								echo "KOTA BINJAI";
							}else if($value->kab_kota_sekolah == '361'){
								echo "KOTA TEBING TINGGI";
							}else if($value->kab_kota_sekolah == '362'){
								echo "KOTA PEMATANG SIANTAR";
							}else if($value->kab_kota_sekolah == '363'){
								echo "KOTA TANJUNG BALAI";
							}else if($value->kab_kota_sekolah == '364'){
								echo "KOTA SIBOLGA";
							}else if($value->kab_kota_sekolah == '365'){
								echo "KOTA PADANG SIDIMPUAN";
							}else if($value->kab_kota_sekolah == '366'){
								echo "KOTA GUNUNGSITOLI";
							}else if($value->kab_kota_sekolah == '367'){
								echo "KAB. AGAM";
							}else if($value->kab_kota_sekolah == '368'){
								echo "KAB. PASAMAN";
							}else if($value->kab_kota_sekolah == '369'){
								echo "KAB. LIMA PULUH KOTO";
							}else if($value->kab_kota_sekolah == '370'){
								echo "KAB. SOLOK";
							}else if($value->kab_kota_sekolah == '371'){
								echo "KAB. PADANG PARIAMAN";
							}else if($value->kab_kota_sekolah == '372'){
								echo "KAB. PESISIR SELATAN";
							}else if($value->kab_kota_sekolah == '373'){
								echo "KAB. TANAH DATAR";
							}else if($value->kab_kota_sekolah == '374'){
								echo "KAB. SIJUNJUNG";
							}else if($value->kab_kota_sekolah == '375'){
								echo "KAB. KEPULAUAN MENTAWAI";
							}else if($value->kab_kota_sekolah == '376'){
								echo "KAB. SOLOK SELATAN";
							}else if($value->kab_kota_sekolah == '377'){
								echo "KAB. DHARMASRAYA";
							}else if($value->kab_kota_sekolah == '378'){
								echo "KAB. PASAMAN BARAT";
							}else if($value->kab_kota_sekolah == '379'){
								echo "KOTA BUKITTINGGI";
							}else if($value->kab_kota_sekolah == '380'){
								echo "KOTA PADANG";
							}else if($value->kab_kota_sekolah == '381'){
								echo "KOTA PADANG PANJANG";
							}else if($value->kab_kota_sekolah == '382'){
								echo "KOTA SAWAH LUNTO";
							}else if($value->kab_kota_sekolah == '383'){
								echo "KOTA SOLOK";
							}else if($value->kab_kota_sekolah == '384'){
								echo "KOTA PAYAKUMBUH";
							}else if($value->kab_kota_sekolah == '385'){
								echo "KOTA PARIAMAN";
							}else if($value->kab_kota_sekolah == '386'){
								echo "KAB. KAMPAR";
							}else if($value->kab_kota_sekolah == '387'){
								echo "KAB. BENGKALIS";
							}else if($value->kab_kota_sekolah == '388'){
								echo "KAB. INDRAGIRI HULU";
							}else if($value->kab_kota_sekolah == '389'){
								echo "KAB. INDRAGIRI HILIR";
							}else if($value->kab_kota_sekolah == '390'){
								echo "KAB. PELALAWAN";
							}else if($value->kab_kota_sekolah == '391'){
								echo "KAB. ROKAN HULU";
							}else if($value->kab_kota_sekolah == '392'){
								echo "KAB. ROKAN HILIR";
							}else if($value->kab_kota_sekolah == '393'){
								echo "KAB. SIAK";
							}else if($value->kab_kota_sekolah == '394'){
								echo "KAB. KUANTAN SINGINGI";
							}else if($value->kab_kota_sekolah == '395'){
								echo "KAB. KEPULAUAN MERANTI";
							}else if($value->kab_kota_sekolah == '396'){
								echo "KOTA PEKANBARU";
							}else if($value->kab_kota_sekolah == '397'){
								echo "KOTA DUMAI";
							}else if($value->kab_kota_sekolah == '398'){
								echo "KAB. BATANG HARI";
							}else if($value->kab_kota_sekolah == '399'){
								echo "KAB. BUNGO";
							}else if($value->kab_kota_sekolah == '400'){
								echo "KAB. SAROLANGUN";
							}else if($value->kab_kota_sekolah == '401'){
								echo "KAB. TANJUNG JABUNG BARAT";
							}else if($value->kab_kota_sekolah == '402'){
								echo "KAB. KERINCI";
							}else if($value->kab_kota_sekolah == '403'){
								echo "KAB. TEBO";
							}else if($value->kab_kota_sekolah == '404'){
								echo "KAB. MUARO JAMBI";
							}else if($value->kab_kota_sekolah == '405'){
								echo "KAB. TANJUNG JABUNG TIMUR";
							}else if($value->kab_kota_sekolah == '406'){
								echo "KAB. MERANGINT";
							}else if($value->kab_kota_sekolah == '407'){
								echo "KOTA JAMBI";
							}else if($value->kab_kota_sekolah == '408'){
								echo "KOTA SUNGAI PENUH";
							}else if($value->kab_kota_sekolah == '409'){
								echo "KAB. MUSI BANYU ASIN";
							}else if($value->kab_kota_sekolah == '410'){
								echo "KAB. OGAN KOMERING ILIR";
							}else if($value->kab_kota_sekolah == '411'){
								echo "KAB. OGAN KOMERING ULU";
							}else if($value->kab_kota_sekolah == '412'){
								echo "KAB. MUARA ENIM";
							}else if($value->kab_kota_sekolah == '413'){
								echo "KAB. LAHAT";
							}else if($value->kab_kota_sekolah == '414'){
								echo "KAB. MUSI RAWAS";
							}else if($value->kab_kota_sekolah == '415'){
								echo "KAB. BANYUASIN";
							}else if($value->kab_kota_sekolah == '416'){
								echo "KAB. OGAN KOMERING ULU TIMUR";
							}else if($value->kab_kota_sekolah == '417'){
								echo "KAB. OGAN KOMERING ULU SELATAN";
							}else if($value->kab_kota_sekolah == '418'){
								echo "KAB. OGAN ILIR";
							}else if($value->kab_kota_sekolah == '419'){
								echo "KAB. EMPAT LAWANG";
							}else if($value->kab_kota_sekolah == '420'){
								echo "KAB. PENUKAL ABAB LEMTANG ILIR";
							}else if($value->kab_kota_sekolah == '421'){
								echo "KAB. MUSI RAWAS UTARA";
							}else if($value->kab_kota_sekolah == '422'){
								echo "KOTA PALEMBANG";
							}else if($value->kab_kota_sekolah == '423'){
								echo "KOTA PRABUMULIH";
							}else if($value->kab_kota_sekolah == '424'){
								echo "KOTA LUBUK LINGGAU";
							}else if($value->kab_kota_sekolah == '425'){
								echo "KOTA PAGAR ALAM";
							}else if($value->kab_kota_sekolah == '426'){
								echo "KAB. LAMPUNG SELATAN";
							}else if($value->kab_kota_sekolah == '427'){
								echo "KAB. LAMPUNG TENGAH";
							}else if($value->kab_kota_sekolah == '428'){
								echo "KAB. LAMPUNG UTARA";
							}else if($value->kab_kota_sekolah == '429'){
								echo "KAB. LAMPUNG BARAT";
							}else if($value->kab_kota_sekolah == '430'){
								echo "KAB. TULANG BAWANG";
							}else if($value->kab_kota_sekolah == '431'){
								echo "KAB. TANGGAMUS";
							}else if($value->kab_kota_sekolah == '432'){
								echo "KAB. LAMPUNG TIMUR";
							}else if($value->kab_kota_sekolah == '433'){
								echo "KAB. WAY KANAN";
							}else if($value->kab_kota_sekolah == '434'){
								echo "KAB. PESAWARAN";
							}else if($value->kab_kota_sekolah == '435'){
								echo "KAB. PRINGSEWU";
							}else if($value->kab_kota_sekolah == '436'){
								echo "KAB. MESUJI";
							}else if($value->kab_kota_sekolah == '437'){
								echo "KAB. TULANG BAWANG BARAT";
							}else if($value->kab_kota_sekolah == '438'){
								echo "KAB. PESISIR BARAT";
							}else if($value->kab_kota_sekolah == '439'){
								echo "KOTA BANDAR LAMPUNG";
							}else if($value->kab_kota_sekolah == '440'){
								echo "KOTA METRO";
							}else if($value->kab_kota_sekolah == '441'){
								echo "KAB. SAMBAS";
							}else if($value->kab_kota_sekolah == '442'){
								echo "KAB. MEMPAWAH";
							}else if($value->kab_kota_sekolah == '443'){
								echo "KAB. SANGGAU";
							}else if($value->kab_kota_sekolah == '444'){
								echo "KAB. SINTANG";
							}else if($value->kab_kota_sekolah == '445'){
								echo "KAB. KAPUAS HULU";
							}else if($value->kab_kota_sekolah == '446'){
								echo "KAB. KETAPANG";
							}else if($value->kab_kota_sekolah == '447'){
								echo "KAB. BENGKAYANG";
							}else if($value->kab_kota_sekolah == '448'){
								echo "KAB. LANDAK";
							}else if($value->kab_kota_sekolah == '449'){
								echo "KAB. SEKADAU";
							}else if($value->kab_kota_sekolah == '450'){
								echo "KAB. MELAWI";
							}else if($value->kab_kota_sekolah == '451'){
								echo "KAB. KAYONG UTARA";
							}else if($value->kab_kota_sekolah == '452'){
								echo "KAB. KUBURAYA";
							}else if($value->kab_kota_sekolah == '453'){
								echo "KOTA PONTIANAK";
							}else if($value->kab_kota_sekolah == '454'){
								echo "KOTA SINGKAWANG";
							}else if($value->kab_kota_sekolah == '455'){
								echo "KAB. KAPUAS";
							}else if($value->kab_kota_sekolah == '456'){
								echo "KAB. BARITO SELATAN";
							}else if($value->kab_kota_sekolah == '457'){
								echo "KAB. BARITO UTARA";
							}else if($value->kab_kota_sekolah == '458'){
								echo "KAB. KOTAWARINGIN TIMUR";
							}else if($value->kab_kota_sekolah == '459'){
								echo "KAB. KOTAWARINGIN BARAT";
							}else if($value->kab_kota_sekolah == '460'){
								echo "KAB. KATINGAN";
							}else if($value->kab_kota_sekolah == '461'){
								echo "KAB. SERUYAN";
							}else if($value->kab_kota_sekolah == '462'){
								echo "KAB. SUKAMARA";
							}else if($value->kab_kota_sekolah == '463'){
								echo "KAB. LAMANDAU";
							}else if($value->kab_kota_sekolah == '464'){
								echo "KAB. GUNUNG MAS";
							}else if($value->kab_kota_sekolah == '465'){
								echo "KAB. PULANG PISAU";
							}else if($value->kab_kota_sekolah == '466'){
								echo "KAB. MURUNG RAYA";
							}else if($value->kab_kota_sekolah == '467'){
								echo "KAB. BARITO TIMUR";
							}else if($value->kab_kota_sekolah == '468'){
								echo "KOTA PALANGKA RAYA";
							}else if($value->kab_kota_sekolah == '469'){
								echo "KAB. BANJAR";
							}else if($value->kab_kota_sekolah == '470'){
								echo "KAB. TANAH LAUT";
							}else if($value->kab_kota_sekolah == '471'){
								echo "KAB. BARITO KUALA";
							}else if($value->kab_kota_sekolah == '472'){
								echo "KAB. TAPIN";
							}else if($value->kab_kota_sekolah == '473'){
								echo "KAB. HULU SUNGAI SELATAN";
							}else if($value->kab_kota_sekolah == '474'){
								echo "KAB. HULU SUNGAI TENGAH";
							}else if($value->kab_kota_sekolah == '475'){
								echo "KAB. HULU SUNGAI UTARA";
							}else if($value->kab_kota_sekolah == '476'){
								echo "KAB. TABALONG";
							}else if($value->kab_kota_sekolah == '477'){
								echo "KAB. KOTA BARU";
							}else if($value->kab_kota_sekolah == '478'){
								echo "KAB. BALANGAN";
							}else if($value->kab_kota_sekolah == '479'){
								echo "KAB. TANAH BUMBU";
							}else if($value->kab_kota_sekolah == '480'){
								echo "KOTA BANJARMASIN";
							}else if($value->kab_kota_sekolah == '481'){
								echo "KOTA BANJARBARU";
							}else if($value->kab_kota_sekolah == '482'){
								echo "KAB. PASER";
							}else if($value->kab_kota_sekolah == '483'){
								echo "KAB. KUTAI KARTANEGARA";
							}else if($value->kab_kota_sekolah == '484'){
								echo "KAB. BERAU";
							}else if($value->kab_kota_sekolah == '485'){
								echo "KAB. KUTAI BARAT";
							}else if($value->kab_kota_sekolah == '486'){
								echo "KAB. KUTAI TIMUR";
							}else if($value->kab_kota_sekolah == '487'){
								echo "KAB. PENAJAM PASER UTARA";
							}else if($value->kab_kota_sekolah == '488'){
								echo "KAB. MAHAKAM ULU";
							}else if($value->kab_kota_sekolah == '489'){
								echo "KOTA SAMARINDA";
							}else if($value->kab_kota_sekolah == '490'){
								echo "KOTA BALIKPAPAN";
							}else if($value->kab_kota_sekolah == '491'){
								echo "KOTA BONTANG";
							}else if($value->kab_kota_sekolah == '492'){
								echo "KAB. BOLAANG MONGONDAW";
							}else if($value->kab_kota_sekolah == '493'){
								echo "KAB. MINAHASA";
							}else if($value->kab_kota_sekolah == '494'){
								echo "KAB. KEP. SANGIHE";
							}else if($value->kab_kota_sekolah == '495'){
								echo "KAB. KEPULAUAN TALAUD";
							}else if($value->kab_kota_sekolah == '496'){
								echo "KAB. MINAHASA SELATAN";
							}else if($value->kab_kota_sekolah == '497'){
								echo "KAB. MINAHASA UTARA";
							}else if($value->kab_kota_sekolah == '498'){
								echo "KAB. BOLAANG MONGONDOW UTARA";
							}else if($value->kab_kota_sekolah == '499'){
								echo "KAB. KEPULAUAN SITARO";
							}else if($value->kab_kota_sekolah == '500'){
								echo "KAB. MINAHASA TENGGARA";
							}else if($value->kab_kota_sekolah == '501'){
								echo "KAB. BOLAANG MONGONDAW TIMUR";
							}else if($value->kab_kota_sekolah == '502'){
								echo "KAB. BOLAANG MONGONDAW SELATAN";
							}else if($value->kab_kota_sekolah == '503'){
								echo "KOTA MANADO";
							}else if($value->kab_kota_sekolah == '504'){
								echo "KOTA BITUNG";
							}else if($value->kab_kota_sekolah == '505'){
								echo "KOTA TOMOHON";
							}else if($value->kab_kota_sekolah == '506'){
								echo "KOTA KOTAMOBAGU";
							}else if($value->kab_kota_sekolah == '507'){
								echo "KAB. BANGGAI KEPULAUAN";
							}else if($value->kab_kota_sekolah == '508'){
								echo "KAB. DONGGALA";
							}else if($value->kab_kota_sekolah == '509'){
								echo "KAB. POSO";
							}else if($value->kab_kota_sekolah == '510'){
								echo "KAB. BANGGAI";
							}else if($value->kab_kota_sekolah == '511'){
								echo "KAB. BUOL";
							}else if($value->kab_kota_sekolah == '512'){
								echo "KAB. TOLITOLI";
							}else if($value->kab_kota_sekolah == '513'){
								echo "KAB. MOROWALI";
							}else if($value->kab_kota_sekolah == '514'){
								echo "KAB. PARIGI MOUTONG";
							}else if($value->kab_kota_sekolah == '515'){
								echo "KAB. TOJO UNA-UNA";
							}else if($value->kab_kota_sekolah == '516'){
								echo "KAB. SIGI";
							}else if($value->kab_kota_sekolah == '517'){
								echo "KAB. BANGGAI LAUT";
							}else if($value->kab_kota_sekolah == '518'){
								echo "KAB. MOROWALI UTARA";
							}else if($value->kab_kota_sekolah == '519'){
								echo "KOTA PALU";
							}else if($value->kab_kota_sekolah == '520'){
								echo "KAB. MAROS";
							}else if($value->kab_kota_sekolah == '521'){
								echo "KAB. PANGKAJENE KEPULAUAN";
							}else if($value->kab_kota_sekolah == '522'){
								echo "KAB. GOWA";
							}else if($value->kab_kota_sekolah == '523'){
								echo "KAB. TAKALAR";
							}else if($value->kab_kota_sekolah == '524'){
								echo "KAB. JENEPONTO";
							}else if($value->kab_kota_sekolah == '525'){
								echo "KAB. BARRU";
							}else if($value->kab_kota_sekolah == '526'){
								echo "KAB. BONE";
							}else if($value->kab_kota_sekolah == '527'){
								echo "KAB. WAJO";
							}else if($value->kab_kota_sekolah == '528'){
								echo "KAB. SOPPENG";
							}else if($value->kab_kota_sekolah == '529'){
								echo "KAB. BANTAENG";
							}else if($value->kab_kota_sekolah == '530'){
								echo "KAB. BULUKUMBA";
							}else if($value->kab_kota_sekolah == '531'){
								echo "KAB. SINJAI";
							}else if($value->kab_kota_sekolah == '532'){
								echo "KAB. KEPULAUAN SELAYAR";
							}else if($value->kab_kota_sekolah == '533'){
								echo "KAB. PINRANG";
							}else if($value->kab_kota_sekolah == '534'){
								echo "KAB. SIDENRENG RAPPANG";
							}else if($value->kab_kota_sekolah == '535'){
								echo "KAB. ENREKANG";
							}else if($value->kab_kota_sekolah == '536'){
								echo "KAB. LUWU";
							}else if($value->kab_kota_sekolah == '537'){
								echo "KAB. TANA TORAJA";
							}else if($value->kab_kota_sekolah == '538'){
								echo "KAB. LUWU UTARA";
							}else if($value->kab_kota_sekolah == '539'){
								echo "KAB. LUWU TIMUR";
							}else if($value->kab_kota_sekolah == '540'){
								echo "KAB. TORAJA UTARA";
							}else if($value->kab_kota_sekolah == '541'){
								echo "KOTA MAKASSAR";
							}else if($value->kab_kota_sekolah == '542'){
								echo "KOTA PARE-PARE";
							}else if($value->kab_kota_sekolah == '543'){
								echo "KOTA PALOPO";
							}else if($value->kab_kota_sekolah == '544'){
								echo "KAB. KONAWE";
							}else if($value->kab_kota_sekolah == '545'){
								echo "KAB. MUNA";
							}else if($value->kab_kota_sekolah == '546'){
								echo "KAB. BUTON";
							}else if($value->kab_kota_sekolah == '547'){
								echo "KAB. KOLAKA";
							}else if($value->kab_kota_sekolah == '548'){
								echo "KAB. KONAWE SELATAN";
							}else if($value->kab_kota_sekolah == '549'){
								echo "KAB. WAKATOBI";
							}else if($value->kab_kota_sekolah == '550'){
								echo "KAB. BOMBANA";
							}else if($value->kab_kota_sekolah == '551'){
								echo "KAB. KOLAKA UTARA";
							}else if($value->kab_kota_sekolah == '552'){
								echo "KAB. KONAWE UTARA";
							}else if($value->kab_kota_sekolah == '553'){
								echo "KAB. BUTON UTARA";
							}else if($value->kab_kota_sekolah == '554'){
								echo "KAB. KOLAKA TIMUR";
							}else if($value->kab_kota_sekolah == '555'){
								echo "KAB. KONAWE KEPULAUAN";
							}else if($value->kab_kota_sekolah == '556'){
								echo "KAB. MUNA BARAT";
							}else if($value->kab_kota_sekolah == '557'){
								echo "KAB. BUTON SELATAN";
							}else if($value->kab_kota_sekolah == '558'){
								echo "KAB. BUTON TENGAH";
							}else if($value->kab_kota_sekolah == '559'){
								echo "KOTA KENDARI";
							}else if($value->kab_kota_sekolah == '560'){
								echo "KOTA BAUBAU";
							}else if($value->kab_kota_sekolah == '561'){
								echo "KAB. MALUKU TENGAH";
							}else if($value->kab_kota_sekolah == '562'){
								echo "KAB. MALUKU TENGGARA";
							}else if($value->kab_kota_sekolah == '563'){
								echo "KAB. BURU";
							}else if($value->kab_kota_sekolah == '564'){
								echo "KAB. MALUKU TENGGARA BARAT";
							}else if($value->kab_kota_sekolah == '565'){
								echo "KAB. SERAM BAGIAN BARAT";
							}else if($value->kab_kota_sekolah == '566'){
								echo "KAB. SERAM BAGIAN TIMUR";
							}else if($value->kab_kota_sekolah == '567'){
								echo "KAB. KEPULAUAN ARU";
							}else if($value->kab_kota_sekolah == '568'){
								echo "KAB. MALUKU BARAT DAYA";
							}else if($value->kab_kota_sekolah == '569'){
								echo "KAB. BURU SELATAN";
							}else if($value->kab_kota_sekolah == '570'){
								echo "KOTA AMBON";
							}else if($value->kab_kota_sekolah == '571'){
								echo "KOTA TUAL";
							}else if($value->kab_kota_sekolah == '572'){
								echo "KAB. BULELENG";
							}else if($value->kab_kota_sekolah == '573'){
								echo "KAB. JEMBRANA";
							}else if($value->kab_kota_sekolah == '574'){
								echo "KAB. TABANAN";
							}else if($value->kab_kota_sekolah == '575'){
								echo "KAB. BADUNG";
							}else if($value->kab_kota_sekolah == '576'){
								echo "KAB. GIANYAR";
							}else if($value->kab_kota_sekolah == '577'){
								echo "KAB. KLUNGKUNG";
							}else if($value->kab_kota_sekolah == '578'){
								echo "KAB. BANGLI";
							}else if($value->kab_kota_sekolah == '579'){
								echo "KAB. KARANG ASEM";
							}else if($value->kab_kota_sekolah == '580'){
								echo "KOTA DENPASAR";
							}else if($value->kab_kota_sekolah == '581'){
								echo "KAB. LOMBOK BARAT";
							}else if($value->kab_kota_sekolah == '582'){
								echo "KAB. LOMBOK TENGAH";
							}else if($value->kab_kota_sekolah == '583'){
								echo "KAB. LOMBOK TIMUR";
							}else if($value->kab_kota_sekolah == '584'){
								echo "KAB. SUMBAWA";
							}else if($value->kab_kota_sekolah == '585'){
								echo "KAB. DOMPU";
							}else if($value->kab_kota_sekolah == '586'){
								echo "KAB. BIMA";
							}else if($value->kab_kota_sekolah == '587'){
								echo "KAB. SUMBAWA BARAT";
							}else if($value->kab_kota_sekolah == '588'){
								echo "KAB. LOMBOK UTARA";
							}else if($value->kab_kota_sekolah == '589'){
								echo "KOTA MATARAM";
							}else if($value->kab_kota_sekolah == '590'){
								echo "KOTA BIMA";
							}else if($value->kab_kota_sekolah == '591'){
								echo "KAB. KUPANG";
							}else if($value->kab_kota_sekolah == '592'){
								echo "KAB. TIMOR TENGAH SELATAN";
							}else if($value->kab_kota_sekolah == '593'){
								echo "KAB. TIMOR TENGAH UTARA";
							}else if($value->kab_kota_sekolah == '594'){
								echo "KAB. BELU";
							}else if($value->kab_kota_sekolah == '595'){
								echo "KAB. ALOR";
							}else if($value->kab_kota_sekolah == '596'){
								echo "KAB. FLORES TIMUR";
							}else if($value->kab_kota_sekolah == '597'){
								echo "KAB. SIKKA";
							}else if($value->kab_kota_sekolah == '598'){
								echo "KAB. ENDE";
							}else if($value->kab_kota_sekolah == '599'){
								echo "KAB. NGADA";
							}else if($value->kab_kota_sekolah == '600'){
								echo "KAB. MANGGARAI";
							}else if($value->kab_kota_sekolah == '601'){
								echo "KAB. SUMBA TIMUR";
							}else if($value->kab_kota_sekolah == '602'){
								echo "KAB. SUMBA BARAT";
							}else if($value->kab_kota_sekolah == '603'){
								echo "KAB. LEMBATA";
							}else if($value->kab_kota_sekolah == '604'){
								echo "KAB. ROTE-NDAO";
							}else if($value->kab_kota_sekolah == '605'){
								echo "KAB. MANGGARAI BARAT";
							}else if($value->kab_kota_sekolah == '606'){
								echo "KAB. NAGAKEO";
							}else if($value->kab_kota_sekolah == '607'){
								echo "KAB. SUMBA TENGAH";
							}else if($value->kab_kota_sekolah == '608'){
								echo "KAB. SUMBA BARAT DAYA";
							}else if($value->kab_kota_sekolah == '609'){
								echo "KAB. MANGGARAI TIMUR";
							}else if($value->kab_kota_sekolah == '610'){
								echo "KAB. SABU RAIJUA";
							}else if($value->kab_kota_sekolah == '611'){
								echo "KAB. MALAKA";
							}else if($value->kab_kota_sekolah == '612'){
								echo "KOTA KUPANG";
							}else if($value->kab_kota_sekolah == '613'){
								echo "KOTA KUPANG";
							}else if($value->kab_kota_sekolah == '614'){
								echo "KAB. BIAK NUMFOR";
							}else if($value->kab_kota_sekolah == '615'){
								echo "KAB. KEPULAUAN YAPEN";
							}else if($value->kab_kota_sekolah == '616'){
								echo "KAB. MERAUKE";
							}else if($value->kab_kota_sekolah == '617'){
								echo "KAB. JAYA WIJAYA";
							}else if($value->kab_kota_sekolah == '618'){
								echo "KAB. NABIRE";
							}else if($value->kab_kota_sekolah == '619'){
								echo "KAB. PANIAI";
							}else if($value->kab_kota_sekolah == '620'){
								echo "KAB. PUNCAK JAYA";
							}else if($value->kab_kota_sekolah == '621'){
								echo "KAB. MIMIKA";
							}else if($value->kab_kota_sekolah == '622'){
								echo "KAB. BOVEN DIGOEL";
							}else if($value->kab_kota_sekolah == '623'){
								echo "KAB. MAPPI";
							}else if($value->kab_kota_sekolah == '624'){
								echo "KAB. ASMAT";
							}else if($value->kab_kota_sekolah == '625'){
								echo "KAB. YAHUKIMO";
							}else if($value->kab_kota_sekolah == '626'){
								echo "KAB. PEGUNUNGAN BINTANG";
							}else if($value->kab_kota_sekolah == '627'){
								echo "KAB. TOLIKARA";
							}else if($value->kab_kota_sekolah == '628'){
								echo "KAB. SARMI";
							}else if($value->kab_kota_sekolah == '629'){
								echo "KAB. KEEROM";
							}else if($value->kab_kota_sekolah == '630'){
								echo "KAB. WAROPEN";
							}else if($value->kab_kota_sekolah == '631'){
								echo "KAB. SUPIORI";
							}else if($value->kab_kota_sekolah == '632'){
								echo "KAB. MEMBERAMO RAYA";
							}else if($value->kab_kota_sekolah == '633'){
								echo "KAB. NDUGA";
							}else if($value->kab_kota_sekolah == '634'){
								echo "KAB. LANNY JAYA";
							}else if($value->kab_kota_sekolah == '635'){
								echo "KAB. MEMBRAMO TENGAH";
							}else if($value->kab_kota_sekolah == '636'){
								echo "KAB. YALIMO";
							}else if($value->kab_kota_sekolah == '637'){
								echo "KAB. PUNCAK";
							}else if($value->kab_kota_sekolah == '638'){
								echo "KAB. DOGIYAI";
							}else if($value->kab_kota_sekolah == '639'){
								echo "KAB. DEIYAI";
							}else if($value->kab_kota_sekolah == '640'){
								echo "KAB. INTAN JAYA";
							}else if($value->kab_kota_sekolah == '641'){
								echo "KOTA JAYAPURA";
							}else if($value->kab_kota_sekolah == '642'){
								echo "KAB. BENGKULU UTARA";
							}else if($value->kab_kota_sekolah == '643'){
								echo "KAB. REJANG LEBONG";
							}else if($value->kab_kota_sekolah == '644'){
								echo "KAB. BENGKULU SELATAN";
							}else if($value->kab_kota_sekolah == '645'){
								echo "KAB. MUKO-MUKO";
							}else if($value->kab_kota_sekolah == '646'){
								echo "KAB. KEPAHIANG";
							}else if($value->kab_kota_sekolah == '647'){
								echo "KAB. LEBONG";
							}else if($value->kab_kota_sekolah == '648'){
								echo "KAB. KAUR";
							}else if($value->kab_kota_sekolah == '649'){
								echo "KAB. SELUMA";
							}else if($value->kab_kota_sekolah == '650'){
								echo "KAB. BENGKULU TENGAH";
							}else if($value->kab_kota_sekolah == '651'){
								echo "KOTA BENGKULU";
							}else if($value->kab_kota_sekolah == '652'){
								echo "KAB. PULAU TALIABU";
							}else if($value->kab_kota_sekolah == '653'){
								echo "KAB. HALMAHERA TENGAH";
							}else if($value->kab_kota_sekolah == '654'){
								echo "KAB. HALMAHERA BARAT";
							}else if($value->kab_kota_sekolah == '655'){
								echo "KAB. HALMAHERA UTARA";
							}else if($value->kab_kota_sekolah == '656'){
								echo "KAB. HALMAHERA SELATAN";
							}else if($value->kab_kota_sekolah == '657'){
								echo "KAB. HALMAHERA TIMUR";
							}else if($value->kab_kota_sekolah == '658'){
								echo "KAB. KEPULAUAN SULA";
							}else if($value->kab_kota_sekolah == '659'){
								echo "KAB. KEPULAUAN MOROTAI";
							}else if($value->kab_kota_sekolah == '660'){
								echo "KOTA TERNATE";
							}else if($value->kab_kota_sekolah == '661'){
								echo "KOTA TIDORE KEPULAUAN";
							}else if($value->kab_kota_sekolah == '662'){
								echo "KAB. PANDEGLANG";
							}else if($value->kab_kota_sekolah == '663'){
								echo "KAB. LEBAK";
							}else if($value->kab_kota_sekolah == '664'){
								echo "KAB. TANGERANG";
							}else if($value->kab_kota_sekolah == '665'){
								echo "KAB. SERANG";
							}else if($value->kab_kota_sekolah == '666'){
								echo "KOTA CILEGON";
							}else if($value->kab_kota_sekolah == '667'){
								echo "KOTA TANGERANG";
							}else if($value->kab_kota_sekolah == '668'){
								echo "KOTA SERANG";
							}else if($value->kab_kota_sekolah == '669'){
								echo "KOTA TANGERANG SELATAN";
							}else if($value->kab_kota_sekolah == '670'){
								echo "KAB. BANGKA";
							}else if($value->kab_kota_sekolah == '671'){
								echo "KAB. BELITUNG";
							}else if($value->kab_kota_sekolah == '672'){
								echo "KAB. BANGKA TENGAH";
							}else if($value->kab_kota_sekolah == '673'){
								echo "KAB. BANGKA BARAT";
							}else if($value->kab_kota_sekolah == '674'){
								echo "KAB. BANGKA SELATAN";
							}else if($value->kab_kota_sekolah == '675'){
								echo "KAB. BELITUNG TIMUR";
							}else if($value->kab_kota_sekolah == '676'){
								echo "KOTA PANGKALPINANG";
							}else if($value->kab_kota_sekolah == '677'){
								echo "KAB. BOALEMO";
							}else if($value->kab_kota_sekolah == '678'){
								echo "KAB. GORONTALO";
							}else if($value->kab_kota_sekolah == '679'){
								echo "KAB. POHUWATO";
							}else if($value->kab_kota_sekolah == '680'){
								echo "KAB. BONE BOLANGO";
							}else if($value->kab_kota_sekolah == '681'){
								echo "KAB. GORONTALO UTARA";
							}else if($value->kab_kota_sekolah == '682'){
								echo "KOTA GORONTALO";
							}else if($value->kab_kota_sekolah == '683'){
								echo "KAB. BINTAN";
							}else if($value->kab_kota_sekolah == '684'){
								echo "KAB. KARIMUN";
							}else if($value->kab_kota_sekolah == '685'){
								echo "KAB. NATUNA";
							}else if($value->kab_kota_sekolah == '686'){
								echo "KAB. LINGGA";
							}else if($value->kab_kota_sekolah == '687'){
								echo "KAB. KEPULAUAN ANAMBAS";
							}else if($value->kab_kota_sekolah == '688'){
								echo "KOTA BATAM";
							}else if($value->kab_kota_sekolah == '689'){
								echo "KOTA TANJUNGPINANG";
							}else if($value->kab_kota_sekolah == '690'){
								echo "KAB. FAK-FAK";
							}else if($value->kab_kota_sekolah == '691'){
								echo "KAB. KAIMANA";
							}else if($value->kab_kota_sekolah == '692'){
								echo "KAB. TELUK WONDAMA";
							}else if($value->kab_kota_sekolah == '693'){
								echo "KAB. TELUK BINTUNI";
							}else if($value->kab_kota_sekolah == '694'){
								echo "KAB. MANOKWARI";
							}else if($value->kab_kota_sekolah == '695'){
								echo "KAB. SORONG SELATAN";
							}else if($value->kab_kota_sekolah == '696'){
								echo "KAB. SORONG";
							}else if($value->kab_kota_sekolah == '697'){
								echo "KAB. RAJA AMPAT";
							}else if($value->kab_kota_sekolah == '698'){
								echo "KAB. TAMBRAUW";
							}else if($value->kab_kota_sekolah == '699'){
								echo "KAB. MAYBRAT";
							}else if($value->kab_kota_sekolah == '700'){
								echo "KAB. PEGUNUNGAN ARFAK";
							}else if($value->kab_kota_sekolah == '701'){
								echo "KAB. MANOKWARI SELATAN";
							}else if($value->kab_kota_sekolah == '702'){
								echo "KOTA SORONG";
							}else if($value->kab_kota_sekolah == '703'){
								echo "KAB. MAMUJU";
							}else if($value->kab_kota_sekolah == '704'){
								echo "KAB. MAMUJU UTARA";
							}else if($value->kab_kota_sekolah == '705'){
								echo "KAB. POLEWALI MANDAR";
							}else if($value->kab_kota_sekolah == '706'){
								echo "KAB. MAMASA";
							}else if($value->kab_kota_sekolah == '707'){
								echo "KAB. MAJENE";
							}else if($value->kab_kota_sekolah == '708'){
								echo "KAB. MAMUJU TENGAH";
							}else if($value->kab_kota_sekolah == '709'){
								echo "KAB. MALINAU";
							}else if($value->kab_kota_sekolah == '710'){
								echo "KAB. BULONGAN";
							}else if($value->kab_kota_sekolah == '711'){
								echo "KAB. TANA TIDUNG";
							}else if($value->kab_kota_sekolah == '712'){
								echo "KAB. NUNUKAN";
							}else if($value->kab_kota_sekolah == '713'){
								echo "KOTA TARAKAN";
							}else if($value->kab_kota_sekolah == '714'){
								echo "BELANDA";
							}else if($value->kab_kota_sekolah == '715'){
								echo "JAPAN";
							}else if($value->kab_kota_sekolah == '716'){
								echo "MESIR";
							}else if($value->kab_kota_sekolah == '717'){
								echo "MALAYSIA";
							}else if($value->kab_kota_sekolah == '718'){
								echo "MYANMAR";
							}else if($value->kab_kota_sekolah == '719'){
								echo "FILIPINA";
							}else if($value->kab_kota_sekolah == '720'){
								echo "RUSIA";
							}else if($value->kab_kota_sekolah == '721'){
								echo "ARAB SAUDI";
							}else if($value->kab_kota_sekolah == '722'){
								echo "SERBIA";
							}else if($value->kab_kota_sekolah == '723'){
								echo "SINGAPURA";
							}else if($value->kab_kota_sekolah == '724'){
								echo "SYRIA";
							}else if($value->kab_kota_sekolah == '725'){
								echo "THAILAND";
							}else if($value->kab_kota_sekolah == '726'){
								echo "AUSTRALIA";
							}else if($value->kab_kota_sekolah == '727'){
								echo "TIMOR LESTE";
							}else if($value->kab_kota_sekolah == '728'){
								echo "PAKISTAN";
							}else{
								echo "Tidak Valid";
							}	
						?></td>
				</tr>

				<tr>
					<td>Nama Sekolah</td>
					<td>:</td>
					<td><?php echo $value->nama_sekolah; ?></td>
				</tr>

				<tr>
					<td>Tahun Lulus</td>
					<td>:</td>
					<td><?php echo $value->tahun_lulus; ?></td>
				</tr>

				<tr>
					<td>Jurusan Sekolah</td>
					<td>:</td>
					<td><?php echo $value->jurusan_sekolah; ?></td>
				</tr>

				<tr>
					<td>Rerata Nilai UN</td>
					<td>:</td>
					<td><?php 
						if($value->rerata_nilai_un == '1'){
							echo "Kurang dari 7.00";
						}else if($value->rerata_nilai_un == '2'){
							echo "7.00 - 8.00";
						}else if($value->rerata_nilai_un == '3'){
							echo "8.01 - 9.00";
						}else if($value->rerata_nilai_un == '4'){
							echo "Lebih dari 9.00";
						}else{
							echo "Data Tidak Ada";
						}
					?></td>
				</tr>

				<tr>
					<td>Rerata Nilai Raport</td>
					<td>:</td>
					<td><?php 
						if($value->rerata_nilai_raport == '1'){
							echo "Kurang dari 7.00";
						}else if($value->rerata_nilai_raport == '2'){
							echo "7.00 - 8.00";
						}else if($value->rerata_nilai_raport == '3'){
							echo "8.01 - 9.00";
						}else if($value->rerata_nilai_raport == '4'){
							echo "Lebih dari 9.00";
						}else{
							echo "Data Tidak Ada";
						}
					?></td>
				</tr>

				<tr>
					<td>Prestasi Akademik</td>
					<td>:</td>
					<td><?php
						if($value->prestasi_akademik == '0'){
							echo "Tidak Ada";
						}else if($value->prestasi_akademik == '1'){
							echo "Tingkat Lokal";
						}else if($value->prestasi_akademik == '2'){
							echo "Tingkat Regional";
						}else if($value->prestasi_akademik == '3'){
							echo "Tingkat Nasional";
						}else if($value->prestasi_akademik == '4'){
							echo "Tingkat Internasional";
						}else{
							echo "Data Tidak Ada";
						}
					?></td>
				</tr>

				<tr>
					<td>Prestasi Non Akademik</td>
					<td>:</td>
					<td><?php
						if($value->prestasi_non_akademik == '0'){
							echo "Tidak Ada";
						}else if($value->prestasi_non_akademik == '1'){
							echo "Tingkat Lokal";
						}else if($value->prestasi_non_akademik == '2'){
							echo "Tingkat Regional";
						}else if($value->prestasi_non_akademik == '3'){
							echo "Tingkat Nasional";
						}else if($value->prestasi_non_akademik == '4'){
							echo "Tingkat Internasional";
						}else{
							echo "Data Tidak Ada";
						}
					?></td>
				</tr>

				<!--End Data Sekolah-->

				<!--Data Pesantren-->
				<tr>
					<td><h2>Data Pesantren</h2></td>
				</tr>

				<tr>
					<td>Pernah Mondok</td>
					<td>:</td>
					<td><?php echo $value->mondok; ?></td>
				</tr>

				<tr>
					<td>Nama Ponpes</td>
					<td>:</td>
					<td><?php
						if($value->nama_ponpes == null){
							echo "-";
						}else if($value->nama_ponpes != null){
							echo $value->nama_ponpes;
						}else{
							echo "Data Tidak ada";
						}
					?></td>
				</tr>

				<tr>
					<td>Alamat Ponpes</td>
					<td>:</td>
					<td><?php
						if($value->alamat_ponpes == null){
							echo "-";
						}else if($value->alamat_ponpes != null){
							echo $value->alamat_ponpes;
						}else{
							echo "Data Tidak ada";
						}
					?></td>
				</tr>

				<tr>
					<td>Provinsi Ponpes</td>
					<td>:</td>
					<td><?php 
							if($value->prov_ponpes == '100'){
								echo "D.K.I JAKARTA";
							}else if($value->prov_ponpes == '101'){
								echo "JAWA BARAT";
							}else if($value->prov_ponpes == '102'){
								echo "JAWA TENGAH";
							}else if($value->prov_ponpes == '103'){
								echo "D.I. YOGYAKARTA";
							}else if($value->prov_ponpes == '104'){
								echo "JAWA TIMUR";
							}else if($value->prov_ponpes == '105'){
								echo "ACEH";
							}else if($value->prov_ponpes == '106'){
								echo "SUMATERA UTARA";
							}else if($value->prov_ponpes == '107'){
								echo "SUMATERA BARAT";
							}else if($value->prov_ponpes == '108'){
								echo "RIAU";
							}else if($value->prov_ponpes == '109'){
								echo "JAMBI";
							}else if($value->prov_ponpes == '110'){
								echo "SUMATERA SELATAN";
							}else if($value->prov_ponpes == '111'){
								echo "LAMPUNG";
							}else if($value->prov_ponpes == '112'){
								echo "KALIMANTAN BARAT";
							}else if($value->prov_ponpes == '113'){
								echo "KALIMANTAN TENGAH";
							}else if($value->prov_ponpes == '114'){
								echo "KALIMANTAN SELATAN";
							}else if($value->prov_ponpes == '115'){
								echo "KALIMANTAN TIMUR";
							}else if($value->prov_ponpes == '116'){
								echo "SULAWESI UTARA";
							}else if($value->prov_ponpes == '117'){
								echo "SULAWESI TENGAH";
							}else if($value->prov_ponpes == '118'){
								echo "SULAWESI SELATAN";
							}else if($value->prov_ponpes == '119'){
								echo "SULAWESI TENGGARA";
							}else if($value->prov_ponpes == '120'){
								echo "MALUKU";
							}else if($value->prov_ponpes == '121'){
								echo "BALI";
							}else if($value->prov_ponpes == '122'){
								echo "NUSA TENGGARA BARAT";
							}else if($value->prov_ponpes == '123'){
								echo "NUSA TENGGARA TIMUR";
							}else if($value->prov_ponpes == '124'){
								echo "PAPUA";
							}else if($value->prov_ponpes == '125'){
								echo "BENGKULU";
							}else if($value->prov_ponpes == '126'){
								echo "MALUKU UTARA";
							}else if($value->prov_ponpes == '127'){
								echo "BANTEN";
							}else if($value->prov_ponpes == '128'){
								echo "BANGKA BELITUNG";
							}else if($value->prov_ponpes == '129'){
								echo "GORONTALO";
							}else if($value->prov_ponpes == '130'){
								echo "KEPULAUAN RIAU";
							}else if($value->prov_ponpes == '131'){
								echo "PAPUA BARAT";
							}else if($value->prov_ponpes == '132'){
								echo "SULAWESI BARAT";
							}else if($value->prov_ponpes == '133'){
								echo "KALIMANTAN UTARA";
							}else if($value->prov_ponpes == '134'){
								echo "LUAR NEGERI";
							}else if($value->prov_ponpes == '0'){
								echo "-";
							}
						?></td>
				</tr>

				<tr>
					<td>Kab/Kota Ponpes</td>
					<td>:</td>
					<td><?php 
							if($value->kab_kota_ponpes == '200'){
								echo "KAB. KEPULAUAN SERIBU";
							}else if($value->kab_kota_ponpes == '201'){
								echo "KOTA JAKARTA PUSAT";
							}else if($value->kab_kota_ponpes == '202'){
								echo "KOTA JAKARTA UTARA";
							}else if($value->kab_kota_ponpes == '203'){
								echo "KOTA JAKARTA BARAT";
							}else if($value->kab_kota_ponpes == '204'){
								echo "KOTA JAKARTA SELATAN";
							}else if($value->kab_kota_ponpes == '205'){
								echo "KOTA JAKARTA TIMUR";
							}else if($value->kab_kota_ponpes == '206'){
								echo "KAB. BOGOR";
							}else if($value->kab_kota_ponpes == '207'){
								echo "KAB. SUKABUMI";
							}else if($value->kab_kota_ponpes == '208'){
								echo "KAB. CIANJUR";
							}else if($value->kab_kota_ponpes == '209'){
								echo "KAB. BANDUNG";
							}else if($value->kab_kota_ponpes == '210'){
								echo "KAB. SUMEDANG";
							}else if($value->kab_kota_ponpes == '211'){
								echo "KAB. GARUT";
							}else if($value->kab_kota_ponpes == '212'){
								echo "KAB. TASIKMALAYA";
							}else if($value->kab_kota_ponpes == '213'){
								echo "KAB. CIAMIS";
							}else if($value->kab_kota_ponpes == '214'){
								echo "KAB. KUNINGAN";
							}else if($value->kab_kota_ponpes == '215'){
								echo "KAB. MAJALENGKA";
							}else if($value->kab_kota_ponpes == '216'){
								echo "KAB. CIREBON";
							}else if($value->kab_kota_ponpes == '217'){
								echo "KAB. INDRAMAYU";
							}else if($value->kab_kota_ponpes == '218'){
								echo "KAB. SUBANG";
							}else if($value->kab_kota_ponpes == '219'){
								echo "KAB. PURWAKARTA";
							}else if($value->kab_kota_ponpes == '220'){
								echo "KAB. KARAWANG";
							}else if($value->kab_kota_ponpes == '221'){
								echo "KAB. BEKASI";
							}else if($value->kab_kota_ponpes == '222'){
								echo "KAB. BANDUNG BARAT";
							}else if($value->kab_kota_ponpes == '223'){
								echo "KAB. PANGANDARAN";
							}else if($value->kab_kota_ponpes == '224'){
								echo "KOTA BANDUNG";
							}else if($value->kab_kota_ponpes == '225'){
								echo "KOTA BOGOR";
							}else if($value->kab_kota_ponpes == '226'){
								echo "KOTA SUKABUMI";
							}else if($value->kab_kota_ponpes == '227'){
								echo "KOTA CIREBON";
							}else if($value->kab_kota_ponpes == '228'){
								echo "KOTA BEKASI";
							}else if($value->kab_kota_ponpes == '229'){
								echo "KOTA DEPOK";
							}else if($value->kab_kota_ponpes == '230'){
								echo "KOTA CIMAHI";
							}else if($value->kab_kota_ponpes == '231'){
								echo "KOTA TASIKMALAYA";
							}else if($value->kab_kota_ponpes == '232'){
								echo "KOTA BANJAR";
							}else if($value->kab_kota_ponpes == '233'){
								echo "KAB. CILACAP";
							}else if($value->kab_kota_ponpes == '234'){
								echo "KAB. BANYUMAS";
							}else if($value->kab_kota_ponpes == '235'){
								echo "KAB. PURBALINGGA";
							}else if($value->kab_kota_ponpes == '236'){
								echo "KAB. BANJARNEGARA";
							}else if($value->kab_kota_ponpes == '237'){
								echo "KAB. KEBUMEN";
							}else if($value->kab_kota_ponpes == '238'){
								echo "KAB. PURWOREJO";
							}else if($value->kab_kota_ponpes == '239'){
								echo "KAB. WONOSOBO";
							}else if($value->kab_kota_ponpes == '240'){
								echo "KAB. MAGELANG";
							}else if($value->kab_kota_ponpes == '241'){
								echo "KAB. BOYOLALI";
							}else if($value->kab_kota_ponpes == '242'){
								echo "KAB. KLATEN";
							}else if($value->kab_kota_ponpes == '243'){
								echo "KAB. SUKOHARJO";
							}else if($value->kab_kota_ponpes == '244'){
								echo "KAB. WONOGIRI";
							}else if($value->kab_kota_ponpes == '245'){
								echo "KAB. KARANGANYAR";
							}else if($value->kab_kota_ponpes == '246'){
								echo "KAB. SRAGEN";
							}else if($value->kab_kota_ponpes == '247'){
								echo "KAB. GROBOGAN";
							}else if($value->kab_kota_ponpes == '248'){
								echo "KAB. BLORA";
							}else if($value->kab_kota_ponpes == '249'){
								echo "KAB. REMBANG";
							}else if($value->kab_kota_ponpes == '250'){
								echo "KAB. PATI";
							}else if($value->kab_kota_ponpes == '251'){
								echo "KAB. KUDUS";
							}else if($value->kab_kota_ponpes == '252'){
								echo "KAB. JEPARA";
							}else if($value->kab_kota_ponpes == '253'){
								echo "KAB. DEMAK";
							}else if($value->kab_kota_ponpes == '254'){
								echo "KAB. SEMARANG";
							}else if($value->kab_kota_ponpes == '255'){
								echo "KAB. TEMANGGUNG";
							}else if($value->kab_kota_ponpes == '256'){
								echo "KAB. KENDAL";
							}else if($value->kab_kota_ponpes == '257'){
								echo "KAB. BATANG";
							}else if($value->kab_kota_ponpes == '258'){
								echo "KAB. PEKALONGAN";
							}else if($value->kab_kota_ponpes == '259'){
								echo "KAB. PEMALANG";
							}else if($value->kab_kota_ponpes == '260'){
								echo "KAB. TEGAL";
							}else if($value->kab_kota_ponpes == '261'){
								echo "KAB. BREBES";
							}else if($value->kab_kota_ponpes == '262'){
								echo "KOTA MAGELANG";
							}else if($value->kab_kota_ponpes == '263'){
								echo "KOTA SURAKARTA";
							}else if($value->kab_kota_ponpes == '264'){
								echo "KOTA SALATIGA";
							}else if($value->kab_kota_ponpes == '265'){
								echo "KOTA SEMARANG";
							}else if($value->kab_kota_ponpes == '266'){
								echo "KOTA PEKALONGAN";
							}else if($value->kab_kota_ponpes == '267'){
								echo "KOTA TEGAL";
							}else if($value->kab_kota_ponpes == '268'){
								echo "KAB. BANTUL";
							}else if($value->kab_kota_ponpes == '269'){
								echo "KAB. SLEMAN";
							}else if($value->kab_kota_ponpes == '270'){
								echo "KAB. GUNUNG KIDUL";
							}else if($value->kab_kota_ponpes == '271'){
								echo "KAB. KULON PROGO";
							}else if($value->kab_kota_ponpes == '272'){
								echo "KOTA YOGYAKARTA";
							}else if($value->kab_kota_ponpes == '273'){
								echo "KAB. GRESIK";
							}else if($value->kab_kota_ponpes == '274'){
								echo "KAB. SIDOARJO";
							}else if($value->kab_kota_ponpes == '275'){
								echo "KAB. MOJOKERTO";
							}else if($value->kab_kota_ponpes == '276'){
								echo "KAB. JOMBANG";
							}else if($value->kab_kota_ponpes == '277'){
								echo "KAB. BOJONEGORO";
							}else if($value->kab_kota_ponpes == '278'){
								echo "KAB. TUBAN";
							}else if($value->kab_kota_ponpes == '279'){
								echo "KAB. LAMONGAN";
							}else if($value->kab_kota_ponpes == '280'){
								echo "KAB. MADIUN";
							}else if($value->kab_kota_ponpes == '281'){
								echo "KAB. NGAWI";
							}else if($value->kab_kota_ponpes == '282'){
								echo "KAB. MAGETAN";
							}else if($value->kab_kota_ponpes == '283'){
								echo "KAB. PONOROGO";
							}else if($value->kab_kota_ponpes == '284'){
								echo "KAB. PACITAN";
							}else if($value->kab_kota_ponpes == '285'){
								echo "KAB. KEDIRI";
							}else if($value->kab_kota_ponpes == '286'){
								echo "KAB. NGANJUK";
							}else if($value->kab_kota_ponpes == '287'){
								echo "KAB. BLITAR";
							}else if($value->kab_kota_ponpes == '288'){
								echo "KAB. TULUNGAGUNG";
							}else if($value->kab_kota_ponpes == '289'){
								echo "KAB. TRENGGALEK";
							}else if($value->kab_kota_ponpes == '290'){
								echo "KAB. MALANG";
							}else if($value->kab_kota_ponpes == '291'){
								echo "KAB. PASURUAN";
							}else if($value->kab_kota_ponpes == '292'){
								echo "KAB. PROBOLINGGO";
							}else if($value->kab_kota_ponpes == '293'){
								echo "KAB. LUMAJANG";
							}else if($value->kab_kota_ponpes == '294'){
								echo "KAB. BONDOWOSO";
							}else if($value->kab_kota_ponpes == '295'){
								echo "KAB. SITUBONDO";
							}else if($value->kab_kota_ponpes == '296'){
								echo "KAB. JEMBER";
							}else if($value->kab_kota_ponpes == '297'){
								echo "KAB. BANYUWANGI";
							}else if($value->kab_kota_ponpes == '298'){
								echo "KAB. PAMEKASAN";
							}else if($value->kab_kota_ponpes == '299'){
								echo "KAB. SAMPANG";
							}else if($value->kab_kota_ponpes == '300'){
								echo "KAB. SUMENEP";
							}else if($value->kab_kota_ponpes == '301'){
								echo "KAB. BANGKALAN";
							}else if($value->kab_kota_ponpes == '302'){
								echo "KOTA SURABAYA";
							}else if($value->kab_kota_ponpes == '303'){
								echo "KOTA MALANG";
							}else if($value->kab_kota_ponpes == '304'){
								echo "KOTA MADIUN";
							}else if($value->kab_kota_ponpes == '305'){
								echo "KOTA KEDIRI";
							}else if($value->kab_kota_ponpes == '306'){
								echo "KOTA MOJOKERTO";
							}else if($value->kab_kota_ponpes == '307'){
								echo "KOTA BLITAR";
							}else if($value->kab_kota_ponpes == '308'){
								echo "KOTA PASURUAN";
							}else if($value->kab_kota_ponpes == '309'){
								echo "KOTA PROBOLINGGO";
							}else if($value->kab_kota_ponpes == '310'){
								echo "KOTA BATU";
							}else if($value->kab_kota_ponpes == '311'){
								echo "KAB. ACEH BESAR";
							}else if($value->kab_kota_ponpes == '312'){
								echo "KAB. PIDIE";
							}else if($value->kab_kota_ponpes == '313'){
								echo "KAB. ACEH UTARA";
							}else if($value->kab_kota_ponpes == '314'){
								echo "KAB. ACEH TIMUR";
							}else if($value->kab_kota_ponpes == '315'){
								echo "KAB. ACEH TENGAH";
							}else if($value->kab_kota_ponpes == '316'){
								echo "KAB. ACEH BARAT";
							}else if($value->kab_kota_ponpes == '317'){
								echo "KAB. ACEH SELATAN";
							}else if($value->kab_kota_ponpes == '318'){
								echo "KAB. ACEH TENGGARA";
							}else if($value->kab_kota_ponpes == '319'){
								echo "KAB. SIMEULUE";
							}else if($value->kab_kota_ponpes == '320'){
								echo "KAB. BIREUEN";
							}else if($value->kab_kota_ponpes == '321'){
								echo "KAB. ACEH SINGKIL";
							}else if($value->kab_kota_ponpes == '322'){
								echo "KAB. ACEH TAMIANG";
							}else if($value->kab_kota_ponpes == '323'){
								echo "KAB. NAGAN RAYA";
							}else if($value->kab_kota_ponpes == '324'){
								echo "KAB. ACEH JAYA";
							}else if($value->kab_kota_ponpes == '325'){
								echo "KAB. ACEH BARAT DAYA";
							}else if($value->kab_kota_ponpes == '326'){
								echo "KAB. GAYO LUES";
							}else if($value->kab_kota_ponpes == '327'){
								echo "KAB. BENER MERIAH";
							}else if($value->kab_kota_ponpes == '328'){
								echo "KAB. PIDIE JAYA";
							}else if($value->kab_kota_ponpes == '329'){
								echo "KOTA SABANG";
							}else if($value->kab_kota_ponpes == '330'){
								echo "KOTA BANDA ACEH";
							}else if($value->kab_kota_ponpes == '331'){
								echo "KOTA LHOKSEUMAWE";
							}else if($value->kab_kota_ponpes == '332'){
								echo "KOTA LANGSA";
							}else if($value->kab_kota_ponpes == '333'){
								echo "KOTA SUBULUSSALAM";
							}else if($value->kab_kota_ponpes == '334'){
								echo "KAB. DELI SERDANG";
							}else if($value->kab_kota_ponpes == '335'){
								echo "KAB. LANGKAT";
							}else if($value->kab_kota_ponpes == '336'){
								echo "KAB. KARO";
							}else if($value->kab_kota_ponpes == '337'){
								echo "KAB. SIMALUNGUN";
							}else if($value->kab_kota_ponpes == '338'){
								echo "KAB. DAIRI";
							}else if($value->kab_kota_ponpes == '339'){
								echo "KAB. ASAHAN";
							}else if($value->kab_kota_ponpes == '340'){
								echo "KAB. LABUHAN BATU";
							}else if($value->kab_kota_ponpes == '341'){
								echo "KAB. TAPANULI UTARA";
							}else if($value->kab_kota_ponpes == '342'){
								echo "KAB. TAPANULI TENGAH";
							}else if($value->kab_kota_ponpes == '343'){
								echo "KAB. TAPANULI SELATAN";
							}else if($value->kab_kota_ponpes == '344'){
								echo "KAB. NIAS";
							}else if($value->kab_kota_ponpes == '345'){
								echo "KAB. MANDAILING NATAL";
							}else if($value->kab_kota_ponpes == '346'){
								echo "KAB. TOBA SAMOSIR";
							}else if($value->kab_kota_ponpes == '347'){
								echo "KAB. NIAS SELATAN";
							}else if($value->kab_kota_ponpes == '348'){
								echo "KAB. PAK PAK BHARAT";
							}else if($value->kab_kota_ponpes == '349'){
								echo "KAB. HUMBANG HASUDUTAN";
							}else if($value->kab_kota_ponpes == '350'){
								echo "KAB. SAMOSIR";
							}else if($value->kab_kota_ponpes == '351'){
								echo "KAB. SERDANG BEDAGAI";
							}else if($value->kab_kota_ponpes == '352'){
								echo "KAB. BATUBARA";
							}else if($value->kab_kota_ponpes == '353'){
								echo "KAB. PADANG LAWAS UTARA";
							}else if($value->kab_kota_ponpes == '354'){
								echo "KAB. PADANG LAWAS";
							}else if($value->kab_kota_ponpes == '355'){
								echo "KAB. LABUHAN BATU UTARA";
							}else if($value->kab_kota_ponpes == '356'){
								echo "KAB. LABUHAN BATU SELATAN";
							}else if($value->kab_kota_ponpes == '357'){
								echo "KAB. NIAS BARAT";
							}else if($value->kab_kota_ponpes == '358'){
								echo "KAB. NIAS UTARA";
							}else if($value->kab_kota_ponpes == '359'){
								echo "KOTA MEDAN";
							}else if($value->kab_kota_ponpes == '360'){
								echo "KOTA BINJAI";
							}else if($value->kab_kota_ponpes == '361'){
								echo "KOTA TEBING TINGGI";
							}else if($value->kab_kota_ponpes == '362'){
								echo "KOTA PEMATANG SIANTAR";
							}else if($value->kab_kota_ponpes == '363'){
								echo "KOTA TANJUNG BALAI";
							}else if($value->kab_kota_ponpes == '364'){
								echo "KOTA SIBOLGA";
							}else if($value->kab_kota_ponpes == '365'){
								echo "KOTA PADANG SIDIMPUAN";
							}else if($value->kab_kota_ponpes == '366'){
								echo "KOTA GUNUNGSITOLI";
							}else if($value->kab_kota_ponpes == '367'){
								echo "KAB. AGAM";
							}else if($value->kab_kota_ponpes == '368'){
								echo "KAB. PASAMAN";
							}else if($value->kab_kota_ponpes == '369'){
								echo "KAB. LIMA PULUH KOTO";
							}else if($value->kab_kota_ponpes == '370'){
								echo "KAB. SOLOK";
							}else if($value->kab_kota_ponpes == '371'){
								echo "KAB. PADANG PARIAMAN";
							}else if($value->kab_kota_ponpes == '372'){
								echo "KAB. PESISIR SELATAN";
							}else if($value->kab_kota_ponpes == '373'){
								echo "KAB. TANAH DATAR";
							}else if($value->kab_kota_ponpes == '374'){
								echo "KAB. SIJUNJUNG";
							}else if($value->kab_kota_ponpes == '375'){
								echo "KAB. KEPULAUAN MENTAWAI";
							}else if($value->kab_kota_ponpes == '376'){
								echo "KAB. SOLOK SELATAN";
							}else if($value->kab_kota_ponpes == '377'){
								echo "KAB. DHARMASRAYA";
							}else if($value->kab_kota_ponpes == '378'){
								echo "KAB. PASAMAN BARAT";
							}else if($value->kab_kota_ponpes == '379'){
								echo "KOTA BUKITTINGGI";
							}else if($value->kab_kota_ponpes == '380'){
								echo "KOTA PADANG";
							}else if($value->kab_kota_ponpes == '381'){
								echo "KOTA PADANG PANJANG";
							}else if($value->kab_kota_ponpes == '382'){
								echo "KOTA SAWAH LUNTO";
							}else if($value->kab_kota_ponpes == '383'){
								echo "KOTA SOLOK";
							}else if($value->kab_kota_ponpes == '384'){
								echo "KOTA PAYAKUMBUH";
							}else if($value->kab_kota_ponpes == '385'){
								echo "KOTA PARIAMAN";
							}else if($value->kab_kota_ponpes == '386'){
								echo "KAB. KAMPAR";
							}else if($value->kab_kota_ponpes == '387'){
								echo "KAB. BENGKALIS";
							}else if($value->kab_kota_ponpes == '388'){
								echo "KAB. INDRAGIRI HULU";
							}else if($value->kab_kota_ponpes == '389'){
								echo "KAB. INDRAGIRI HILIR";
							}else if($value->kab_kota_ponpes == '390'){
								echo "KAB. PELALAWAN";
							}else if($value->kab_kota_ponpes == '391'){
								echo "KAB. ROKAN HULU";
							}else if($value->kab_kota_ponpes == '392'){
								echo "KAB. ROKAN HILIR";
							}else if($value->kab_kota_ponpes == '393'){
								echo "KAB. SIAK";
							}else if($value->kab_kota_ponpes == '394'){
								echo "KAB. KUANTAN SINGINGI";
							}else if($value->kab_kota_ponpes == '395'){
								echo "KAB. KEPULAUAN MERANTI";
							}else if($value->kab_kota_ponpes == '396'){
								echo "KOTA PEKANBARU";
							}else if($value->kab_kota_ponpes == '397'){
								echo "KOTA DUMAI";
							}else if($value->kab_kota_ponpes == '398'){
								echo "KAB. BATANG HARI";
							}else if($value->kab_kota_ponpes == '399'){
								echo "KAB. BUNGO";
							}else if($value->kab_kota_ponpes == '400'){
								echo "KAB. SAROLANGUN";
							}else if($value->kab_kota_ponpes == '401'){
								echo "KAB. TANJUNG JABUNG BARAT";
							}else if($value->kab_kota_ponpes == '402'){
								echo "KAB. KERINCI";
							}else if($value->kab_kota_ponpes == '403'){
								echo "KAB. TEBO";
							}else if($value->kab_kota_ponpes == '404'){
								echo "KAB. MUARO JAMBI";
							}else if($value->kab_kota_ponpes == '405'){
								echo "KAB. TANJUNG JABUNG TIMUR";
							}else if($value->kab_kota_ponpes == '406'){
								echo "KAB. MERANGINT";
							}else if($value->kab_kota_ponpes == '407'){
								echo "KOTA JAMBI";
							}else if($value->kab_kota_ponpes == '408'){
								echo "KOTA SUNGAI PENUH";
							}else if($value->kab_kota_ponpes == '409'){
								echo "KAB. MUSI BANYU ASIN";
							}else if($value->kab_kota_ponpes == '410'){
								echo "KAB. OGAN KOMERING ILIR";
							}else if($value->kab_kota_ponpes == '411'){
								echo "KAB. OGAN KOMERING ULU";
							}else if($value->kab_kota_ponpes == '412'){
								echo "KAB. MUARA ENIM";
							}else if($value->kab_kota_ponpes == '413'){
								echo "KAB. LAHAT";
							}else if($value->kab_kota_ponpes == '414'){
								echo "KAB. MUSI RAWAS";
							}else if($value->kab_kota_ponpes == '415'){
								echo "KAB. BANYUASIN";
							}else if($value->kab_kota_ponpes == '416'){
								echo "KAB. OGAN KOMERING ULU TIMUR";
							}else if($value->kab_kota_ponpes == '417'){
								echo "KAB. OGAN KOMERING ULU SELATAN";
							}else if($value->kab_kota_ponpes == '418'){
								echo "KAB. OGAN ILIR";
							}else if($value->kab_kota_ponpes == '419'){
								echo "KAB. EMPAT LAWANG";
							}else if($value->kab_kota_ponpes == '420'){
								echo "KAB. PENUKAL ABAB LEMTANG ILIR";
							}else if($value->kab_kota_ponpes == '421'){
								echo "KAB. MUSI RAWAS UTARA";
							}else if($value->kab_kota_ponpes == '422'){
								echo "KOTA PALEMBANG";
							}else if($value->kab_kota_ponpes == '423'){
								echo "KOTA PRABUMULIH";
							}else if($value->kab_kota_ponpes == '424'){
								echo "KOTA LUBUK LINGGAU";
							}else if($value->kab_kota_ponpes == '425'){
								echo "KOTA PAGAR ALAM";
							}else if($value->kab_kota_ponpes == '426'){
								echo "KAB. LAMPUNG SELATAN";
							}else if($value->kab_kota_ponpes == '427'){
								echo "KAB. LAMPUNG TENGAH";
							}else if($value->kab_kota_ponpes == '428'){
								echo "KAB. LAMPUNG UTARA";
							}else if($value->kab_kota_ponpes == '429'){
								echo "KAB. LAMPUNG BARAT";
							}else if($value->kab_kota_ponpes == '430'){
								echo "KAB. TULANG BAWANG";
							}else if($value->kab_kota_ponpes == '431'){
								echo "KAB. TANGGAMUS";
							}else if($value->kab_kota_ponpes == '432'){
								echo "KAB. LAMPUNG TIMUR";
							}else if($value->kab_kota_ponpes == '433'){
								echo "KAB. WAY KANAN";
							}else if($value->kab_kota_ponpes == '434'){
								echo "KAB. PESAWARAN";
							}else if($value->kab_kota_ponpes == '435'){
								echo "KAB. PRINGSEWU";
							}else if($value->kab_kota_ponpes == '436'){
								echo "KAB. MESUJI";
							}else if($value->kab_kota_ponpes == '437'){
								echo "KAB. TULANG BAWANG BARAT";
							}else if($value->kab_kota_ponpes == '438'){
								echo "KAB. PESISIR BARAT";
							}else if($value->kab_kota_ponpes == '439'){
								echo "KOTA BANDAR LAMPUNG";
							}else if($value->kab_kota_ponpes == '440'){
								echo "KOTA METRO";
							}else if($value->kab_kota_ponpes == '441'){
								echo "KAB. SAMBAS";
							}else if($value->kab_kota_ponpes == '442'){
								echo "KAB. MEMPAWAH";
							}else if($value->kab_kota_ponpes == '443'){
								echo "KAB. SANGGAU";
							}else if($value->kab_kota_ponpes == '444'){
								echo "KAB. SINTANG";
							}else if($value->kab_kota_ponpes == '445'){
								echo "KAB. KAPUAS HULU";
							}else if($value->kab_kota_ponpes == '446'){
								echo "KAB. KETAPANG";
							}else if($value->kab_kota_ponpes == '447'){
								echo "KAB. BENGKAYANG";
							}else if($value->kab_kota_ponpes == '448'){
								echo "KAB. LANDAK";
							}else if($value->kab_kota_ponpes == '449'){
								echo "KAB. SEKADAU";
							}else if($value->kab_kota_ponpes == '450'){
								echo "KAB. MELAWI";
							}else if($value->kab_kota_ponpes == '451'){
								echo "KAB. KAYONG UTARA";
							}else if($value->kab_kota_ponpes == '452'){
								echo "KAB. KUBURAYA";
							}else if($value->kab_kota_ponpes == '453'){
								echo "KOTA PONTIANAK";
							}else if($value->kab_kota_ponpes == '454'){
								echo "KOTA SINGKAWANG";
							}else if($value->kab_kota_ponpes == '455'){
								echo "KAB. KAPUAS";
							}else if($value->kab_kota_ponpes == '456'){
								echo "KAB. BARITO SELATAN";
							}else if($value->kab_kota_ponpes == '457'){
								echo "KAB. BARITO UTARA";
							}else if($value->kab_kota_ponpes == '458'){
								echo "KAB. KOTAWARINGIN TIMUR";
							}else if($value->kab_kota_ponpes == '459'){
								echo "KAB. KOTAWARINGIN BARAT";
							}else if($value->kab_kota_ponpes == '460'){
								echo "KAB. KATINGAN";
							}else if($value->kab_kota_ponpes == '461'){
								echo "KAB. SERUYAN";
							}else if($value->kab_kota_ponpes == '462'){
								echo "KAB. SUKAMARA";
							}else if($value->kab_kota_ponpes == '463'){
								echo "KAB. LAMANDAU";
							}else if($value->kab_kota_ponpes == '464'){
								echo "KAB. GUNUNG MAS";
							}else if($value->kab_kota_ponpes == '465'){
								echo "KAB. PULANG PISAU";
							}else if($value->kab_kota_ponpes == '466'){
								echo "KAB. MURUNG RAYA";
							}else if($value->kab_kota_ponpes == '467'){
								echo "KAB. BARITO TIMUR";
							}else if($value->kab_kota_ponpes == '468'){
								echo "KOTA PALANGKA RAYA";
							}else if($value->kab_kota_ponpes == '469'){
								echo "KAB. BANJAR";
							}else if($value->kab_kota_ponpes == '470'){
								echo "KAB. TANAH LAUT";
							}else if($value->kab_kota_ponpes == '471'){
								echo "KAB. BARITO KUALA";
							}else if($value->kab_kota_ponpes == '472'){
								echo "KAB. TAPIN";
							}else if($value->kab_kota_ponpes == '473'){
								echo "KAB. HULU SUNGAI SELATAN";
							}else if($value->kab_kota_ponpes == '474'){
								echo "KAB. HULU SUNGAI TENGAH";
							}else if($value->kab_kota_ponpes == '475'){
								echo "KAB. HULU SUNGAI UTARA";
							}else if($value->kab_kota_ponpes == '476'){
								echo "KAB. TABALONG";
							}else if($value->kab_kota_ponpes == '477'){
								echo "KAB. KOTA BARU";
							}else if($value->kab_kota_ponpes == '478'){
								echo "KAB. BALANGAN";
							}else if($value->kab_kota_ponpes == '479'){
								echo "KAB. TANAH BUMBU";
							}else if($value->kab_kota_ponpes == '480'){
								echo "KOTA BANJARMASIN";
							}else if($value->kab_kota_ponpes == '481'){
								echo "KOTA BANJARBARU";
							}else if($value->kab_kota_ponpes == '482'){
								echo "KAB. PASER";
							}else if($value->kab_kota_ponpes == '483'){
								echo "KAB. KUTAI KARTANEGARA";
							}else if($value->kab_kota_ponpes == '484'){
								echo "KAB. BERAU";
							}else if($value->kab_kota_ponpes == '485'){
								echo "KAB. KUTAI BARAT";
							}else if($value->kab_kota_ponpes == '486'){
								echo "KAB. KUTAI TIMUR";
							}else if($value->kab_kota_ponpes == '487'){
								echo "KAB. PENAJAM PASER UTARA";
							}else if($value->kab_kota_ponpes == '488'){
								echo "KAB. MAHAKAM ULU";
							}else if($value->kab_kota_ponpes == '489'){
								echo "KOTA SAMARINDA";
							}else if($value->kab_kota_ponpes == '490'){
								echo "KOTA BALIKPAPAN";
							}else if($value->kab_kota_ponpes == '491'){
								echo "KOTA BONTANG";
							}else if($value->kab_kota_ponpes == '492'){
								echo "KAB. BOLAANG MONGONDAW";
							}else if($value->kab_kota_ponpes == '493'){
								echo "KAB. MINAHASA";
							}else if($value->kab_kota_ponpes == '494'){
								echo "KAB. KEP. SANGIHE";
							}else if($value->kab_kota_ponpes == '495'){
								echo "KAB. KEPULAUAN TALAUD";
							}else if($value->kab_kota_ponpes == '496'){
								echo "KAB. MINAHASA SELATAN";
							}else if($value->kab_kota_ponpes == '497'){
								echo "KAB. MINAHASA UTARA";
							}else if($value->kab_kota_ponpes == '498'){
								echo "KAB. BOLAANG MONGONDOW UTARA";
							}else if($value->kab_kota_ponpes == '499'){
								echo "KAB. KEPULAUAN SITARO";
							}else if($value->kab_kota_ponpes == '500'){
								echo "KAB. MINAHASA TENGGARA";
							}else if($value->kab_kota_ponpes == '501'){
								echo "KAB. BOLAANG MONGONDAW TIMUR";
							}else if($value->kab_kota_ponpes == '502'){
								echo "KAB. BOLAANG MONGONDAW SELATAN";
							}else if($value->kab_kota_ponpes == '503'){
								echo "KOTA MANADO";
							}else if($value->kab_kota_ponpes == '504'){
								echo "KOTA BITUNG";
							}else if($value->kab_kota_ponpes == '505'){
								echo "KOTA TOMOHON";
							}else if($value->kab_kota_ponpes == '506'){
								echo "KOTA KOTAMOBAGU";
							}else if($value->kab_kota_ponpes == '507'){
								echo "KAB. BANGGAI KEPULAUAN";
							}else if($value->kab_kota_ponpes == '508'){
								echo "KAB. DONGGALA";
							}else if($value->kab_kota_ponpes == '509'){
								echo "KAB. POSO";
							}else if($value->kab_kota_ponpes == '510'){
								echo "KAB. BANGGAI";
							}else if($value->kab_kota_ponpes == '511'){
								echo "KAB. BUOL";
							}else if($value->kab_kota_ponpes == '512'){
								echo "KAB. TOLITOLI";
							}else if($value->kab_kota_ponpes == '513'){
								echo "KAB. MOROWALI";
							}else if($value->kab_kota_ponpes == '514'){
								echo "KAB. PARIGI MOUTONG";
							}else if($value->kab_kota_ponpes == '515'){
								echo "KAB. TOJO UNA-UNA";
							}else if($value->kab_kota_ponpes == '516'){
								echo "KAB. SIGI";
							}else if($value->kab_kota_ponpes == '517'){
								echo "KAB. BANGGAI LAUT";
							}else if($value->kab_kota_ponpes == '518'){
								echo "KAB. MOROWALI UTARA";
							}else if($value->kab_kota_ponpes == '519'){
								echo "KOTA PALU";
							}else if($value->kab_kota_ponpes == '520'){
								echo "KAB. MAROS";
							}else if($value->kab_kota_ponpes == '521'){
								echo "KAB. PANGKAJENE KEPULAUAN";
							}else if($value->kab_kota_ponpes == '522'){
								echo "KAB. GOWA";
							}else if($value->kab_kota_ponpes == '523'){
								echo "KAB. TAKALAR";
							}else if($value->kab_kota_ponpes == '524'){
								echo "KAB. JENEPONTO";
							}else if($value->kab_kota_ponpes == '525'){
								echo "KAB. BARRU";
							}else if($value->kab_kota_ponpes == '526'){
								echo "KAB. BONE";
							}else if($value->kab_kota_ponpes == '527'){
								echo "KAB. WAJO";
							}else if($value->kab_kota_ponpes == '528'){
								echo "KAB. SOPPENG";
							}else if($value->kab_kota_ponpes == '529'){
								echo "KAB. BANTAENG";
							}else if($value->kab_kota_ponpes == '530'){
								echo "KAB. BULUKUMBA";
							}else if($value->kab_kota_ponpes == '531'){
								echo "KAB. SINJAI";
							}else if($value->kab_kota_ponpes == '532'){
								echo "KAB. KEPULAUAN SELAYAR";
							}else if($value->kab_kota_ponpes == '533'){
								echo "KAB. PINRANG";
							}else if($value->kab_kota_ponpes == '534'){
								echo "KAB. SIDENRENG RAPPANG";
							}else if($value->kab_kota_ponpes == '535'){
								echo "KAB. ENREKANG";
							}else if($value->kab_kota_ponpes == '536'){
								echo "KAB. LUWU";
							}else if($value->kab_kota_ponpes == '537'){
								echo "KAB. TANA TORAJA";
							}else if($value->kab_kota_ponpes == '538'){
								echo "KAB. LUWU UTARA";
							}else if($value->kab_kota_ponpes == '539'){
								echo "KAB. LUWU TIMUR";
							}else if($value->kab_kota_ponpes == '540'){
								echo "KAB. TORAJA UTARA";
							}else if($value->kab_kota_ponpes == '541'){
								echo "KOTA MAKASSAR";
							}else if($value->kab_kota_ponpes == '542'){
								echo "KOTA PARE-PARE";
							}else if($value->kab_kota_ponpes == '543'){
								echo "KOTA PALOPO";
							}else if($value->kab_kota_ponpes == '544'){
								echo "KAB. KONAWE";
							}else if($value->kab_kota_ponpes == '545'){
								echo "KAB. MUNA";
							}else if($value->kab_kota_ponpes == '546'){
								echo "KAB. BUTON";
							}else if($value->kab_kota_ponpes == '547'){
								echo "KAB. KOLAKA";
							}else if($value->kab_kota_ponpes == '548'){
								echo "KAB. KONAWE SELATAN";
							}else if($value->kab_kota_ponpes == '549'){
								echo "KAB. WAKATOBI";
							}else if($value->kab_kota_ponpes == '550'){
								echo "KAB. BOMBANA";
							}else if($value->kab_kota_ponpes == '551'){
								echo "KAB. KOLAKA UTARA";
							}else if($value->kab_kota_ponpes == '552'){
								echo "KAB. KONAWE UTARA";
							}else if($value->kab_kota_ponpes == '553'){
								echo "KAB. BUTON UTARA";
							}else if($value->kab_kota_ponpes == '554'){
								echo "KAB. KOLAKA TIMUR";
							}else if($value->kab_kota_ponpes == '555'){
								echo "KAB. KONAWE KEPULAUAN";
							}else if($value->kab_kota_ponpes == '556'){
								echo "KAB. MUNA BARAT";
							}else if($value->kab_kota_ponpes == '557'){
								echo "KAB. BUTON SELATAN";
							}else if($value->kab_kota_ponpes == '558'){
								echo "KAB. BUTON TENGAH";
							}else if($value->kab_kota_ponpes == '559'){
								echo "KOTA KENDARI";
							}else if($value->kab_kota_ponpes == '560'){
								echo "KOTA BAUBAU";
							}else if($value->kab_kota_ponpes == '561'){
								echo "KAB. MALUKU TENGAH";
							}else if($value->kab_kota_ponpes == '562'){
								echo "KAB. MALUKU TENGGARA";
							}else if($value->kab_kota_ponpes == '563'){
								echo "KAB. BURU";
							}else if($value->kab_kota_ponpes == '564'){
								echo "KAB. MALUKU TENGGARA BARAT";
							}else if($value->kab_kota_ponpes == '565'){
								echo "KAB. SERAM BAGIAN BARAT";
							}else if($value->kab_kota_ponpes == '566'){
								echo "KAB. SERAM BAGIAN TIMUR";
							}else if($value->kab_kota_ponpes == '567'){
								echo "KAB. KEPULAUAN ARU";
							}else if($value->kab_kota_ponpes == '568'){
								echo "KAB. MALUKU BARAT DAYA";
							}else if($value->kab_kota_ponpes == '569'){
								echo "KAB. BURU SELATAN";
							}else if($value->kab_kota_ponpes == '570'){
								echo "KOTA AMBON";
							}else if($value->kab_kota_ponpes == '571'){
								echo "KOTA TUAL";
							}else if($value->kab_kota_ponpes == '572'){
								echo "KAB. BULELENG";
							}else if($value->kab_kota_ponpes == '573'){
								echo "KAB. JEMBRANA";
							}else if($value->kab_kota_ponpes == '574'){
								echo "KAB. TABANAN";
							}else if($value->kab_kota_ponpes == '575'){
								echo "KAB. BADUNG";
							}else if($value->kab_kota_ponpes == '576'){
								echo "KAB. GIANYAR";
							}else if($value->kab_kota_ponpes == '577'){
								echo "KAB. KLUNGKUNG";
							}else if($value->kab_kota_ponpes == '578'){
								echo "KAB. BANGLI";
							}else if($value->kab_kota_ponpes == '579'){
								echo "KAB. KARANG ASEM";
							}else if($value->kab_kota_ponpes == '580'){
								echo "KOTA DENPASAR";
							}else if($value->kab_kota_ponpes == '581'){
								echo "KAB. LOMBOK BARAT";
							}else if($value->kab_kota_ponpes == '582'){
								echo "KAB. LOMBOK TENGAH";
							}else if($value->kab_kota_ponpes == '583'){
								echo "KAB. LOMBOK TIMUR";
							}else if($value->kab_kota_ponpes == '584'){
								echo "KAB. SUMBAWA";
							}else if($value->kab_kota_ponpes == '585'){
								echo "KAB. DOMPU";
							}else if($value->kab_kota_ponpes == '586'){
								echo "KAB. BIMA";
							}else if($value->kab_kota_ponpes == '587'){
								echo "KAB. SUMBAWA BARAT";
							}else if($value->kab_kota_ponpes == '588'){
								echo "KAB. LOMBOK UTARA";
							}else if($value->kab_kota_ponpes == '589'){
								echo "KOTA MATARAM";
							}else if($value->kab_kota_ponpes == '590'){
								echo "KOTA BIMA";
							}else if($value->kab_kota_ponpes == '591'){
								echo "KAB. KUPANG";
							}else if($value->kab_kota_ponpes == '592'){
								echo "KAB. TIMOR TENGAH SELATAN";
							}else if($value->kab_kota_ponpes == '593'){
								echo "KAB. TIMOR TENGAH UTARA";
							}else if($value->kab_kota_ponpes == '594'){
								echo "KAB. BELU";
							}else if($value->kab_kota_ponpes == '595'){
								echo "KAB. ALOR";
							}else if($value->kab_kota_ponpes == '596'){
								echo "KAB. FLORES TIMUR";
							}else if($value->kab_kota_ponpes == '597'){
								echo "KAB. SIKKA";
							}else if($value->kab_kota_ponpes == '598'){
								echo "KAB. ENDE";
							}else if($value->kab_kota_ponpes == '599'){
								echo "KAB. NGADA";
							}else if($value->kab_kota_ponpes == '600'){
								echo "KAB. MANGGARAI";
							}else if($value->kab_kota_ponpes == '601'){
								echo "KAB. SUMBA TIMUR";
							}else if($value->kab_kota_ponpes == '602'){
								echo "KAB. SUMBA BARAT";
							}else if($value->kab_kota_ponpes == '603'){
								echo "KAB. LEMBATA";
							}else if($value->kab_kota_ponpes == '604'){
								echo "KAB. ROTE-NDAO";
							}else if($value->kab_kota_ponpes == '605'){
								echo "KAB. MANGGARAI BARAT";
							}else if($value->kab_kota_ponpes == '606'){
								echo "KAB. NAGAKEO";
							}else if($value->kab_kota_ponpes == '607'){
								echo "KAB. SUMBA TENGAH";
							}else if($value->kab_kota_ponpes == '608'){
								echo "KAB. SUMBA BARAT DAYA";
							}else if($value->kab_kota_ponpes == '609'){
								echo "KAB. MANGGARAI TIMUR";
							}else if($value->kab_kota_ponpes == '610'){
								echo "KAB. SABU RAIJUA";
							}else if($value->kab_kota_ponpes == '611'){
								echo "KAB. MALAKA";
							}else if($value->kab_kota_ponpes == '612'){
								echo "KOTA KUPANG";
							}else if($value->kab_kota_ponpes == '613'){
								echo "KOTA KUPANG";
							}else if($value->kab_kota_ponpes == '614'){
								echo "KAB. BIAK NUMFOR";
							}else if($value->kab_kota_ponpes == '615'){
								echo "KAB. KEPULAUAN YAPEN";
							}else if($value->kab_kota_ponpes == '616'){
								echo "KAB. MERAUKE";
							}else if($value->kab_kota_ponpes == '617'){
								echo "KAB. JAYA WIJAYA";
							}else if($value->kab_kota_ponpes == '618'){
								echo "KAB. NABIRE";
							}else if($value->kab_kota_ponpes == '619'){
								echo "KAB. PANIAI";
							}else if($value->kab_kota_ponpes == '620'){
								echo "KAB. PUNCAK JAYA";
							}else if($value->kab_kota_ponpes == '621'){
								echo "KAB. MIMIKA";
							}else if($value->kab_kota_ponpes == '622'){
								echo "KAB. BOVEN DIGOEL";
							}else if($value->kab_kota_ponpes == '623'){
								echo "KAB. MAPPI";
							}else if($value->kab_kota_ponpes == '624'){
								echo "KAB. ASMAT";
							}else if($value->kab_kota_ponpes == '625'){
								echo "KAB. YAHUKIMO";
							}else if($value->kab_kota_ponpes == '626'){
								echo "KAB. PEGUNUNGAN BINTANG";
							}else if($value->kab_kota_ponpes == '627'){
								echo "KAB. TOLIKARA";
							}else if($value->kab_kota_ponpes == '628'){
								echo "KAB. SARMI";
							}else if($value->kab_kota_ponpes == '629'){
								echo "KAB. KEEROM";
							}else if($value->kab_kota_ponpes == '630'){
								echo "KAB. WAROPEN";
							}else if($value->kab_kota_ponpes == '631'){
								echo "KAB. SUPIORI";
							}else if($value->kab_kota_ponpes == '632'){
								echo "KAB. MEMBERAMO RAYA";
							}else if($value->kab_kota_ponpes == '633'){
								echo "KAB. NDUGA";
							}else if($value->kab_kota_ponpes == '634'){
								echo "KAB. LANNY JAYA";
							}else if($value->kab_kota_ponpes == '635'){
								echo "KAB. MEMBRAMO TENGAH";
							}else if($value->kab_kota_ponpes == '636'){
								echo "KAB. YALIMO";
							}else if($value->kab_kota_ponpes == '637'){
								echo "KAB. PUNCAK";
							}else if($value->kab_kota_ponpes == '638'){
								echo "KAB. DOGIYAI";
							}else if($value->kab_kota_ponpes == '639'){
								echo "KAB. DEIYAI";
							}else if($value->kab_kota_ponpes == '640'){
								echo "KAB. INTAN JAYA";
							}else if($value->kab_kota_ponpes == '641'){
								echo "KOTA JAYAPURA";
							}else if($value->kab_kota_ponpes == '642'){
								echo "KAB. BENGKULU UTARA";
							}else if($value->kab_kota_ponpes == '643'){
								echo "KAB. REJANG LEBONG";
							}else if($value->kab_kota_ponpes == '644'){
								echo "KAB. BENGKULU SELATAN";
							}else if($value->kab_kota_ponpes == '645'){
								echo "KAB. MUKO-MUKO";
							}else if($value->kab_kota_ponpes == '646'){
								echo "KAB. KEPAHIANG";
							}else if($value->kab_kota_ponpes == '647'){
								echo "KAB. LEBONG";
							}else if($value->kab_kota_ponpes == '648'){
								echo "KAB. KAUR";
							}else if($value->kab_kota_ponpes == '649'){
								echo "KAB. SELUMA";
							}else if($value->kab_kota_ponpes == '650'){
								echo "KAB. BENGKULU TENGAH";
							}else if($value->kab_kota_ponpes == '651'){
								echo "KOTA BENGKULU";
							}else if($value->kab_kota_ponpes == '652'){
								echo "KAB. PULAU TALIABU";
							}else if($value->kab_kota_ponpes == '653'){
								echo "KAB. HALMAHERA TENGAH";
							}else if($value->kab_kota_ponpes == '654'){
								echo "KAB. HALMAHERA BARAT";
							}else if($value->kab_kota_ponpes == '655'){
								echo "KAB. HALMAHERA UTARA";
							}else if($value->kab_kota_ponpes == '656'){
								echo "KAB. HALMAHERA SELATAN";
							}else if($value->kab_kota_ponpes == '657'){
								echo "KAB. HALMAHERA TIMUR";
							}else if($value->kab_kota_ponpes == '658'){
								echo "KAB. KEPULAUAN SULA";
							}else if($value->kab_kota_ponpes == '659'){
								echo "KAB. KEPULAUAN MOROTAI";
							}else if($value->kab_kota_ponpes == '660'){
								echo "KOTA TERNATE";
							}else if($value->kab_kota_ponpes == '661'){
								echo "KOTA TIDORE KEPULAUAN";
							}else if($value->kab_kota_ponpes == '662'){
								echo "KAB. PANDEGLANG";
							}else if($value->kab_kota_ponpes == '663'){
								echo "KAB. LEBAK";
							}else if($value->kab_kota_ponpes == '664'){
								echo "KAB. TANGERANG";
							}else if($value->kab_kota_ponpes == '665'){
								echo "KAB. SERANG";
							}else if($value->kab_kota_ponpes == '666'){
								echo "KOTA CILEGON";
							}else if($value->kab_kota_ponpes == '667'){
								echo "KOTA TANGERANG";
							}else if($value->kab_kota_ponpes == '668'){
								echo "KOTA SERANG";
							}else if($value->kab_kota_ponpes == '669'){
								echo "KOTA TANGERANG SELATAN";
							}else if($value->kab_kota_ponpes == '670'){
								echo "KAB. BANGKA";
							}else if($value->kab_kota_ponpes == '671'){
								echo "KAB. BELITUNG";
							}else if($value->kab_kota_ponpes == '672'){
								echo "KAB. BANGKA TENGAH";
							}else if($value->kab_kota_ponpes == '673'){
								echo "KAB. BANGKA BARAT";
							}else if($value->kab_kota_ponpes == '674'){
								echo "KAB. BANGKA SELATAN";
							}else if($value->kab_kota_ponpes == '675'){
								echo "KAB. BELITUNG TIMUR";
							}else if($value->kab_kota_ponpes == '676'){
								echo "KOTA PANGKALPINANG";
							}else if($value->kab_kota_ponpes == '677'){
								echo "KAB. BOALEMO";
							}else if($value->kab_kota_ponpes == '678'){
								echo "KAB. GORONTALO";
							}else if($value->kab_kota_ponpes == '679'){
								echo "KAB. POHUWATO";
							}else if($value->kab_kota_ponpes == '680'){
								echo "KAB. BONE BOLANGO";
							}else if($value->kab_kota_ponpes == '681'){
								echo "KAB. GORONTALO UTARA";
							}else if($value->kab_kota_ponpes == '682'){
								echo "KOTA GORONTALO";
							}else if($value->kab_kota_ponpes == '683'){
								echo "KAB. BINTAN";
							}else if($value->kab_kota_ponpes == '684'){
								echo "KAB. KARIMUN";
							}else if($value->kab_kota_ponpes == '685'){
								echo "KAB. NATUNA";
							}else if($value->kab_kota_ponpes == '686'){
								echo "KAB. LINGGA";
							}else if($value->kab_kota_ponpes == '687'){
								echo "KAB. KEPULAUAN ANAMBAS";
							}else if($value->kab_kota_ponpes == '688'){
								echo "KOTA BATAM";
							}else if($value->kab_kota_ponpes == '689'){
								echo "KOTA TANJUNGPINANG";
							}else if($value->kab_kota_ponpes == '690'){
								echo "KAB. FAK-FAK";
							}else if($value->kab_kota_ponpes == '691'){
								echo "KAB. KAIMANA";
							}else if($value->kab_kota_ponpes == '692'){
								echo "KAB. TELUK WONDAMA";
							}else if($value->kab_kota_ponpes == '693'){
								echo "KAB. TELUK BINTUNI";
							}else if($value->kab_kota_ponpes == '694'){
								echo "KAB. MANOKWARI";
							}else if($value->kab_kota_ponpes == '695'){
								echo "KAB. SORONG SELATAN";
							}else if($value->kab_kota_ponpes == '696'){
								echo "KAB. SORONG";
							}else if($value->kab_kota_ponpes == '697'){
								echo "KAB. RAJA AMPAT";
							}else if($value->kab_kota_ponpes == '698'){
								echo "KAB. TAMBRAUW";
							}else if($value->kab_kota_ponpes == '699'){
								echo "KAB. MAYBRAT";
							}else if($value->kab_kota_ponpes == '700'){
								echo "KAB. PEGUNUNGAN ARFAK";
							}else if($value->kab_kota_ponpes == '701'){
								echo "KAB. MANOKWARI SELATAN";
							}else if($value->kab_kota_ponpes == '702'){
								echo "KOTA SORONG";
							}else if($value->kab_kota_ponpes == '703'){
								echo "KAB. MAMUJU";
							}else if($value->kab_kota_ponpes == '704'){
								echo "KAB. MAMUJU UTARA";
							}else if($value->kab_kota_ponpes == '705'){
								echo "KAB. POLEWALI MANDAR";
							}else if($value->kab_kota_ponpes == '706'){
								echo "KAB. MAMASA";
							}else if($value->kab_kota_ponpes == '707'){
								echo "KAB. MAJENE";
							}else if($value->kab_kota_ponpes == '708'){
								echo "KAB. MAMUJU TENGAH";
							}else if($value->kab_kota_ponpes == '709'){
								echo "KAB. MALINAU";
							}else if($value->kab_kota_ponpes == '710'){
								echo "KAB. BULONGAN";
							}else if($value->kab_kota_ponpes == '711'){
								echo "KAB. TANA TIDUNG";
							}else if($value->kab_kota_ponpes == '712'){
								echo "KAB. NUNUKAN";
							}else if($value->kab_kota_ponpes == '713'){
								echo "KOTA TARAKAN";
							}else if($value->kab_kota_ponpes == '714'){
								echo "BELANDA";
							}else if($value->kab_kota_ponpes == '715'){
								echo "JAPAN";
							}else if($value->kab_kota_ponpes == '716'){
								echo "MESIR";
							}else if($value->kab_kota_ponpes == '717'){
								echo "MALAYSIA";
							}else if($value->kab_kota_ponpes == '718'){
								echo "MYANMAR";
							}else if($value->kab_kota_ponpes == '719'){
								echo "FILIPINA";
							}else if($value->kab_kota_ponpes == '720'){
								echo "RUSIA";
							}else if($value->kab_kota_ponpes == '721'){
								echo "ARAB SAUDI";
							}else if($value->kab_kota_ponpes == '722'){
								echo "SERBIA";
							}else if($value->kab_kota_ponpes == '723'){
								echo "SINGAPURA";
							}else if($value->kab_kota_ponpes == '724'){
								echo "SYRIA";
							}else if($value->kab_kota_ponpes == '725'){
								echo "THAILAND";
							}else if($value->kab_kota_ponpes == '726'){
								echo "AUSTRALIA";
							}else if($value->kab_kota_ponpes == '727'){
								echo "TIMOR LESTE";
							}else if($value->kab_kota_ponpes == '728'){
								echo "PAKISTAN";
							}else if($value->kab_kota_ponpes == '0'){
								echo "-";
							}	
						?></td>
				</tr>
				<!--End Data Pesantren-->

				<!--Keterampilan-->
				<tr>
					<td><h2>Keterampilan</h2></td>
				</tr>

				<tr>
					<td>Kemampuan Bahasa Arab</td>
					<td>:</td>
					<td><?php echo $value->kem_bhs_arab; ?></td>
				</tr>

				<tr>
					<td>Kemampuan Bahasa Inggris</td>
					<td>:</td>
					<td><?php echo $value->kem_bhs_inggris; ?></td>
				</tr>

				<tr>
					<td>Kemampuan Komputer</td>
					<td>:</td>
					<td><?php echo $value->kem_komputer; ?></td>
				</tr>

				<!--End Keterampilan-->
				
				<!--Dokumen Pendukung-->
				<tr>
					<td><h2>Dokumen Pendukung</h2></td>	
				</tr>

				<tr>
					<td>Foto Rumah Bagian Depan</td>
					<td>:</td>
					<td><a href="<?=base_url().'assets/foto_dokumen/'.$value->upload_foto_rumah_depan; ?>" target="_blank">Show</a></td>
				</tr>

				<tr>
					<td>Foto Rumah Bagian Kiri</td>
					<td>:</td>
					<td><a href="<?=base_url().'assets/foto_dokumen/'.$value->upload_foto_rumah_kiri; ?>" target="_blank">Show</a></td>
				</tr>

				<tr>
					<td>Foto Rumah Bagian Kanan</td>
					<td>:</td>
					<td><a href="<?=base_url().'assets/foto_dokumen/'.$value->upload_foto_rumah_kanan; ?>" target="_blank">Show</a></td>
				</tr>

				<tr>
					<td>Foto PBB</td>
					<td>:</td>
					<td><a href="<?=base_url().'assets/foto_dokumen/'.$value->upload_foto_pbb; ?>" target="_blank">Show</a></td>
				</tr>

				<tr>
					<td>Foto Rekening Listrik</td>
					<td>:</td>
					<td><a href="<?=base_url().'assets/foto_dokumen/'.$value->upload_foto_rek_listrik; ?>" target="_blank">Show</a></td>
				</tr>
				<!--End Dokumen Pendukung-->
				
				<!--Persyaratan Dokumen-->
				<tr>
					<td><h2>Persyaratan Dokumen</h2></td>
				</tr>

				<tr>
					<td>Kartu Peserta Jalur <?php echo $value->jalur_pendaftaran.' '.date('Y'); ?></td>
					<td>:</td>
					<td><?php echo $value->kartu_tes; ?></td>
				</tr>

				<tr>
					<td>Formulir Pedaftaran Bidik Misi yang telah diisi</td>
					<td>:</td>
					<td><?php echo $value->formulir_pendaftaran; ?></td>
				</tr>

				<tr>
					<td>Surat Keterangan Lulus dari Kepela Sekolah</td>
					<td>:</td>
					<td><?php echo $value->surat_ket_lulus; ?></td>
				</tr>

				<tr>
					<td>Fotocpy Raport Semester 1-6 yang dilegalisir Kepala Sekolah</td>
					<td>:</td>
					<td><?php echo $value->fotocopy_raport_semester; ?></td>
				</tr>

				<tr>
					<td>Fotocopy Ijazah yang dilegalisir Kepala Sekolah</td>
					<td>:</td>
					<td><?php echo $value->fotocopy_ijazah; ?></td>
				</tr>

				<tr>
					<td>Fotocopy Nilai Ujian Akhir Nasional yang dilegalisir Kepala Sekolah</td>
					<td>:</td>
					<td><?php echo $value->fotocopy_nilai_uan; ?></td>
				</tr>

				<tr>
					<td>Surat Keterangan Prestasi dan Bukti Pendukung Prestasi yang dilegalisir Kepala Sekolah</td>
					<td>:</td>
					<td><?php echo $value->surat_ket_prestasi; ?></td>
				</tr>

				<tr>
					<td>Surat Keterangan Penghasilan Ortu/Wali atau Surat Keterangan Tidak Mampu yang dikeluarkan Kepala Desa/Dusun/Instansi/Tokoh Masyarakat</td>
					<td>:</td>
					<td><?php echo $value->surat_ket_peng_ortu; ?></td>
				</tr>

				<tr>
					<td>Fotocopy Kartu Keluarga atau Surat Keterangan Susunan Keluarga</td>
					<td>:</td>
					<td><?php echo $value->fotocopy_kk; ?></td>
				</tr>

				<tr>
					<td>Fotocopy Rekening Listrik Bulan Terakhir (bila tersedia listrik)</td>
					<td>:</td>
					<td><?php echo $value->fotocopy_rek_listrik; ?></td>
				</tr>

				<tr>
					<td>Fotocopy Bukti Pembayaran PBB Tahun Terakhir</td>
					<td>:</td>
					<td><?php echo $value->fotocopy_pbb; ?></td>
				</tr>

				<tr>
					<td>Melengkapi data foto rumah dari 3(tiga) sudut</td>
					<td>:</td>
					<td><?php echo $value->foto_rumah_tiga_sudut; ?></td>
				</tr>
				<!--End Persyaratan Dokumen-->
				<?php } ?>
			</table>

			<br>

			<tr>
				<td><button type="submit">Verifikasi</button></td>
			</tr>
		</form>

		<!--Modal Edit Identitas Diri-->
		<?php foreach ($data as $modal_value) { ?>
		<form action="" method="POST">
			<div id="edit" class="modal fade" role="dialog">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal">&times;</button>
							<h4 class="modal-title">Edit Identitas Diri</h4>
						</div>

						
						<div class="modal-body">
							<div class="form-group">
								<label>Nama Lengkap</label>
								<input class="form-control" type="text" name="nama_lengkap" placeholder="Nama Lengkap Anda" required="required" value="<?php echo $modal_value->nama_mahasiswa; ?>">
							</div>

							<div class="form-group">
								<label>Upload Foto</label>
								<input type="file" name="foto" required="required">
							</div>

							<div class="form-group">
								<label>Jenis Kelamin</label>
									<select name="jenis_kelamin" class="form-control" required="required">
										<option value="">-Pilih SalahSatu-</option>
										<option value="Laki - Laki">Laki - Laki</option>
										<option value="Perempuan">Perempuan</option>
									</select>
							</div>

							<div class="input-group date" data-provide="datepicker">
								<label>Tanggal Lahir</label>
									<input value="<?php echo $modal_value->tanggal_lahir; ?>" required="required" class="form-control" type="text" id="tanggal" name="tgl_lahir" placeholder="Tanggal Lahir Anda">
							</div>

							<br>

							<div class="form-group">
								<label>Status Pernikahan</label>
									<select name="status_pernikahan" class="form-control" required="required">
										<option value="">-Pilih SalahSatu-</option>
										<option value="Menikah">Menikah</option>
										<option value="Belum Menikah">Belum Menikah</option>
									</select>
							</div>

							<div class="form-group">
								<label>Asal Provinsi</label>
								<select class="form-control" name="asal_provinsi" id="provinsi6" required="required">
									<option value="">-Pilih SalahSatu</option>
									<?php
										foreach($propinsi as $data){
											echo "<option value='".$data->id_propinsi."'>".$data->nama_propinsi."</option>";
										}
									?>
								</select>
							</div>

							<div class="form-group">
								<label>Asal Kab/Kota</label>
								<select class="form-control" required="required" name="asal_kab_kota" id="kota6">
									<option value="">-Pilih SalahSatu-</option>
								</select>
								<div id="loading6">
									<img src="<?=base_url('assets/img/loading.gif'); ?>"><small>Loading..</small>
								</div>
							</div>

							<div class="form-group">
								<label>No Telp</label>
								<input class="form-control" type="text" name="no_telp" value="<?php echo $modal_value->no_telp; ?>" required="required" placeholder="contoh : 0881-0093-3388">
							</div>

							<div class="form-group">
								<label>Email</label>
								<input type="email" class="form-control" name="email" value="<?php echo $modal_value->email; ?>" required="required" placholder="Email Anda">
							</div>

							<div class="form-group">
								<label>Alamat</label>
								<input type="text" class="form-control" name="alamat" value="<?php echo $modal_value->alamat; ?>" required="required" placeholder="Alamat Anda">
							</div>

							<div class="form-group">
								<label>Kode Pos</label>
								<input type="text" class="form-control" name="kode_pos" required="required" placeholder="Kode Pos Anda" value="<?php echo $modal_value->kode_pos; ?>">
							</div>
						</div>


						<div class="modal-footer">
							<button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
							<button type="submit" class="btn btn-primary">Simpan</button>
						</div>
					</div>
				</div>
			</div>
		</form>
		<?php } ?>
		<!--End Modal Edit Identitas Diri-->
	</body>
</html>

<?php
	$this->load->view('project_bidikmisi/footer/footer');
?>