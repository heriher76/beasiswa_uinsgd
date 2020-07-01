<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_mhs extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->model('M_mhs');
		if(empty($this->session->userdata('no_pendaftaran')) || !$this->session->userdata('no_pendaftaran')) {
			redirect('C_login');
		}
	}

	public function index(){
		$reg = $this->session->userdata('reg');
		
		if($reg == 0){
			$no_pendaftaran = $this->session->userdata('no_pendaftaran');
			$this->M_mhs->getRegOtomatis1($no_pendaftaran);

			$query_reg = $this->db->get_where('mastermhs_new', array(
				'no_pendaftaran' => $no_pendaftaran
			))->row();

			$sess_reg = array(
				'reg' => $query_reg->reg
			);

			$this->session->set_userdata($sess_reg);
			$this->load->view('project_bidikmisi/mahasiswa/upload_foto');
		}else if($reg == 1){
			$this->step1();
		}else if($reg == 2){
			$this->step2();
		}else if($reg == 3){
			$this->step3();
		}else if($reg == 4){
			$this->step4();
		}else if($reg == 5){
			$this->step5();
		}else if($reg == 6){
			$this->step6();
		}else if($reg == 7){
			$this->step7();
		}else if($reg == 8){
			$this->step8();
		}else if($reg == 9){
			$this->step9();
		}else if($reg == 10){
			$this->step10();
		}else{
			$this->session->sess_destroy();
			redirect('C_login');
		}
	}

	public function step1(){
		$reg = $this->session->userdata('reg');

		if($reg == 0){
			$this->biodata();
		}else if($reg == 1){
			$this->load->view('project_bidikmisi/mahasiswa/upload_foto');
		}else if($reg == 2){
			$this->step2();
		}else if($reg == 3){
			$this->step3();
		}else if($reg == 4){
			$this->step4();
		}else if($reg == 5){
			$this->step5();
		}else if($reg == 6){
			$this->step6();
		}else if($reg == 7){
			$this->step7();
		}else if($reg == 8){
			$this->step8();
		}else if($reg == 9){
			$this->step9();
		}else if($reg == 10){
			$this->step10();
		}else{
			$this->session->sess_destroy();
			redirect('C_login');
		}
	}

	public function step2(){
		$reg = $this->session->userdata('reg');

		if($reg == 0){
			$this->biodata();
		}else if($reg == 1){
			$this->step1();
		}else if($reg == 2){
			$data['propinsi'] = $this->M_mhs->propinsi();
			$this->load->view('project_bidikmisi/mahasiswa/identitas_diri', $data);
		}else if($reg == 3){
			$this->step3();
		}else if($reg == 4){
			$this->step4();
		}else if($reg == 5){
			$this->step5();
		}else if($reg == 6){
			$this->step6();
		}else if($reg == 7){
			$this->step7();
		}else if($reg == 8){
			$this->step8();
		}else if($reg == 9){
			$this->step9();
		}else if($reg == 10){
			$this->step10();
		}else{
			$this->session->sess_destroy();
			redirect('C_login');
		}
	}

	public function step3(){
		$reg = $this->session->userdata('reg');

		if($reg == 0){
			$this->biodata();
		}else if($reg == 1){
			$this->step1();
		}else if($reg == 2){
			$this->step2();
		}else if($reg == 3){
			$data['propinsi'] = $this->M_mhs->propinsi();
			$this->load->view('project_bidikmisi/mahasiswa/data_ortu', $data);
		}else if($reg == 4){
			$this->step4();
		}else if($reg == 5){
			$this->step5();
		}else if($reg == 6){
			$this->step6();
		}else if($reg == 7){
			$this->step7();
		}else if($reg == 8){
			$this->step8();
		}else if($reg == 9){
			$this->step9();
		}else if($reg == 10){
			$this->step10();
		}else{
			$this->session->sess_destroy();
			redirect('C_login');
		}
	}

	public function step4(){
		$reg = $this->session->userdata('reg');

		if($reg == 0){
			$this->biodata();
		}else if($reg == 1){
			$this->step1();
		}else if($reg == 2){
			$this->step2();
		}else if($reg == 3){
			$this->step3();
		}else if($reg == 4){
			$this->load->view('project_bidikmisi/mahasiswa/data_kondisi_rumah');
		}else if($reg == 5){
			$this->step5();
		}else if($reg == 6){
			$this->step6();
		}else if($reg == 7){
			$this->step7();
		}else if($reg == 8){
			$this->step8();
		}else if($reg == 9){
			$this->step9();
		}else if($reg == 10){
			$this->step10();
		}else{
			$this->session->sess_destroy();
			redirect('C_login');
		}
	}

	public function step5(){
		$reg = $this->session->userdata('reg');

		if($reg == 0){
			$this->biodata();
		}else if($reg == 1){
			$this->step1();
		}else if($reg == 2){
			$this->step2();
		}else if($reg == 3){
			$this->step3();
		}else if($reg == 4){
			$this->step4();
		}else if($reg == 5){
			$data['propinsi'] = $this->M_mhs->propinsi();
			$this->load->view('project_bidikmisi/mahasiswa/data_sekolah', $data);
		}else if($reg == 6){
			$this->step6();
		}else if($reg == 7){
			$this->step7();
		}else if($reg == 8){
			$this->step8();
		}else if($reg == 9){
			$this->step9();
		}else if($reg == 10){
			$this->step10();
		}else{
			$this->session->sess_destroy();
			redirect('C_login');
		}
	}

	public function step6(){
		$reg = $this->session->userdata('reg');

		if($reg == 0){
			$this->biodata();
		}else if($reg == 1){
			$this->step1();
		}else if($reg == 2){
			$this->step2();
		}else if($reg == 3){
			$this->step3();
		}else if($reg == 4){
			$this->step4();
		}else if($reg == 5){
			$this->step5();
		}else if($reg == 6){
			$data['propinsi'] = $this->M_mhs->propinsi();
			$this->load->view('project_bidikmisi/mahasiswa/data_pesantren', $data);
		}else if($reg == 7){
			$this->step7();
		}else if($reg == 8){
			$this->step8();
		}else if($reg == 9){
			$this->step9();
		}else if($reg == 10){
			$this->step10();
		}else{
			$this->session->sess_destroy();
			redirect('C_login');
		}
	}

	public function step7(){
		$reg = $this->session->userdata('reg');

		if($reg == 0){
			$this->biodata();
		}else if($reg == 1){
			$this->step1();
		}else if($reg == 2){
			$this->step2();
		}else if($reg == 3){
			$this->step3();
		}else if($reg == 4){
			$this->step4();
		}else if($reg == 5){
			$this->step5();
		}else if($reg == 6){
			$this->step6();
		}else if($reg == 7){
			$this->load->view('project_bidikmisi/mahasiswa/keterampilan');
		}else if($reg == 8){
			$this->step8();
		}else if($reg == 9){
			$this->step9();
		}else if($reg == 10){
			$this->step10();
		}else{
			$this->session->sess_destroy();
			redirect('C_login');
		}
	}

	public function step8(){
		$reg = $this->session->userdata('reg');

		if($reg == 0){
			$this->biodata();
		}else if($reg == 1){
			$this->step1();
		}else if($reg == 2){
			$this->step2();
		}else if($reg == 3){
			$this->step3();
		}else if($reg == 4){
			$this->step4();
		}else if($reg == 5){
			$this->step5();
		}else if($reg == 6){
			$this->step6();
		}else if($reg == 7){
			$this->step7();
		}else if($reg == 8){
			$this->load->view('project_bidikmisi/mahasiswa/upload_dokumen_pendukung');
		}else if($reg == 9){
			$this->step9();
		}else if($reg == 10){
			$this->step10();
		}else{
			$this->session->sess_destroy();
			redirect('C_login');
		}
	}

	public function step9(){
		$reg = $this->session->userdata('reg');

		if($reg == 0){
			$this->biodata();
		}else if($reg == 1){
			$this->step1();
		}else if($reg == 2){
			$this->step2();
		}else if($reg == 3){
			$this->step3();
		}else if($reg == 4){
			$this->step4();
		}else if($reg == 5){
			$this->step5();
		}else if($reg == 6){
			$this->step6();
		}else if($reg == 7){
			$this->step7();
		}else if($reg == 8){
			$this->step8();
		}else if($reg == 9){
			$no_pendaftaran = $this->session->userdata('no_pendaftaran');
			$data['user'] = $this->M_mhs->getData_login($no_pendaftaran)->result();

			$this->load->view('project_bidikmisi/mahasiswa/persyaratan_dokumen', $data);
		}else if($reg == 10){
			$this->step10();
		}else{
			$this->session->sess_destroy();
			redirect('C_login');
		}
	}

	public function step10(){
		$reg = $this->session->userdata('reg');

		if($reg == 0){
			$this->biodata();
		}else if($reg == 1){
			$this->step1();
		}else if($reg == 2){
			$this->step2();
		}else if($reg == 3){
			$this->step3();
		}else if($reg == 4){
			$this->step4();
		}else if($reg == 5){
			$this->step5();
		}else if($reg == 6){
			$this->step6();
		}else if($reg == 7){
			$this->step7();
		}else if($reg == 8){
			$this->step8();
		}else if($reg == 9){
			$this->step9();
		}else if($reg == 10){
			$no_pendaftaran = $this->session->userdata('no_pendaftaran');
			$data = array(
				'propinsi' => $this->M_mhs->propinsi(),
				'data' => $this->M_mhs->getData_login($no_pendaftaran)->result(),
				'data_kab_kota' => $this->M_mhs->kab_kota(),
				'fakultas' => $this->M_mhs->fakultas(),
				'jurusan' => $this->M_mhs->jurusan()
			);

			$this->load->view('project_bidikmisi/mahasiswa/view_sementara', $data);
		}else{
			$this->session->sess_destroy();
			redirect('C_login');
		}
	}

	//function listKota
	public function listKota(){
		//ambil data propinsi yang dikirim via ajax post
		$id_propinsi = $this->input->post('id_propinsi');

		$kota = $this->M_mhs->viewByPropinsi($id_propinsi);

		//Buat variabel untuk menampung tag - tag optionnya
		$lists = "<option value=''>Pilih SalahSatu</option>";
		foreach($kota as $data){
			$lists .= "<option value='".$data->id_kota."'>".$data->nama_kota."</option>"; //menambahkan tag option ke variabel lists
		}

		//memasukkan variabel lists tadi ke dalam array dengan nama indexnya list_kota
		$callback = array('list_kota' => $lists);

		echo json_encode($callback); //konversi variabel $callback menjadi JSON
	}

	//Function list jurusan
	public function listJurusan(){
		$id_fakultas = $this->input->post('id_fakultas');
		$jurusan = $this->M_mhs->viewByJurusan($id_fakultas);

		$lists = "<option value=''>Pilih SalahSatu</option>";
		foreach ($jurusan as $data) {
			$lists .= "<option value='".$data->id_jurusan."'>".$data->nama_jurusan."</option>";
		}

		$callback = array('list_jurusan' => $lists);

		echo json_encode($callback);
	}

	//function view biodata
	public function biodata(){
		$no_pendaftaran = $this->session->userdata('no_pendaftaran');

		$data_p['data'] = $this->M_mhs->getData_login($no_pendaftaran)->result();
		$this->load->view('project_bidikmisi/header/mahasiswa/header3_mhs', $data_p);

		$data_jurusan['jurusan'] = $this->M_mhs->jurusan();
		$this->load->view('project_bidikmisi/mahasiswa/navbar_mhs', $data_jurusan);
		
		$data['fakultas'] = $this->M_mhs->fakultas();
		$this->load->view('project_bidikmisi/mahasiswa/dashboard_mhs', $data);
	}

	//function view update data biodata
	public function update(){
		$no_pendaftaran 	= $this->session->userdata('no_pendaftaran');
		$nama_mahasiswa 	= $this->input->post('nama_lengkap');
		$jenis_kelamin 		= $this->input->post('jenis_kelamin');
		$tanggal_lahir 		= $this->input->post('tgl_lahir');
		$fakultas 			= $this->input->post('fakultas');
		$jurusan 			= $this->input->post('jurusan');
		$jalur_pendaftaran 	= $this->input->post('jalur_pendaftaran');
		$kategori			= $this->input->post('kategori');

		$data = [ 'nama_mahasiswa'	  => $nama_mahasiswa,
				  'jenis_kelamin' 	  => $jenis_kelamin,
				  'tanggal_lahir' 	  => $tanggal_lahir,
				  'pin'				  => $tanggal_lahir,
				  'jalur_pendaftaran' => $jalur_pendaftaran,
				  'fakultas'		  => $fakultas,
				  'jurusan' 		  => $jurusan,
				  'kategori' 		  => $kategori
		];
		$edit_data = $this->M_mhs->edit_data($no_pendaftaran, $data);
		$sess_fakultas = array(
			'fakultas' => $edit_data->fakultas
		);
		$this->session->set_userdata($sess_fakultas);

		$this->session->set_flashdata('message',
					'<div class="alert alert-success">
						<p>Data Anda Sudah di Update</p>
					</div>');
		$this->biodata();
	}

	//function update foto bidik misi
	public function direct1(){
		$reg = $this->session->userdata('reg');
		
		if($reg == 1){
			$no_pendaftaran = $this->session->userdata('no_pendaftaran');
			$foto = $this->M_mhs->getFoto($no_pendaftaran);

			$config['upload_path'] 	 = './assets/foto_mhs/';
			$config['allowed_types'] = 'png|jpg|jpeg|JPEG|PNG|JPG';
			$config['max_size'] 	 = 1024;

			$this->load->library('upload', $config);

			if(!$this->upload->do_upload('foto')){
					$error = array(
						'error' => $this->upload->display_errors()
					);
					$this->session->set_flashdata('direct_error', 
						'<div class="alert alert-warning">
							<p>Upload Foto Gagal, Silahkan Cek Kembali Ukuran dan Format File Foto Anda</p>
						</div>');
					$this->load->view('project_bidikmisi/mahasiswa/upload_foto', $error);
			}else{
				$file = $this->upload->data();
				//unlink('assets/foto_mhs/'.$foto->upload_foto);
				$data = ['upload_foto' => $file['file_name'], 'reg' => '2'];
				$this->M_mhs->edit_data($no_pendaftaran, $data);

				$query_reg = $this->db->get_where('mastermhs_new', array(
					'no_pendaftaran' => $no_pendaftaran
				))->row();

				$sess_reg = array(
					'reg' => $query_reg->reg
				);

				$this->session->set_userdata($sess_reg);
				
				$this->session->set_flashdata('direct_success', '
					<div class="alert alert-success">
						<p>Foto Berhasil diUpload</p>
					</div>');			

				$this->step2();
			}
		}else if($reg == 2){
			$this->step2();
		}else if($reg == 3){
			$this->step3();
		}else if($reg == 4){
			$this->step4();
		}else if($reg == 5){
			$this->step5();
		}else if($reg == 6){
			$this->step6();
		}else if($reg == 7){
			$this->step7();
		}else if($reg == 8){
			$this->step8();
		}else if($reg == 9){
			$this->step9();
		}else if($reg == 10){
			$this->step10();
		}else{
			$this->session->sess_destroy();
			redirect('C_login');
		}
	}
	//end function update foto bidik misi

	//function update identitas diri
	public function direct2(){
		$reg = $this->session->userdata('reg');

		if($reg == 1){
			$this->step1();
		}else if($reg == 2){
			$no_pendaftaran 	= $this->session->userdata('no_pendaftaran');
			$tempat_lahir 		= $this->input->post('tempat_lahir');
			$status_pernikahan 	= $this->input->post('status_pernikahan');
			$asal_provinsi 		= $this->input->post('asal_provinsi');
			$asal_kab_kota 		= $this->input->post('asal_kab_kota');
			$no_telp 			= $this->input->post('no_telp');
			$email 				= $this->input->post('email');
			$alamat 			= $this->input->post('alamat');
			$kode_pos 			= $this->input->post('kode_pos');

			$data = [ 'reg'					=> '3',
					  'tempat_lahir' 		=> $tempat_lahir,
					  'status_pernikahan' 	=> $status_pernikahan,
					  'asal_provinsi' 		=> $asal_provinsi,
					  'asal_kab_kota' 		=> $asal_kab_kota,
					  'no_telp' 			=> $no_telp,
					  'email' 				=> $email,
					  'alamat' 				=> $alamat,
					  'kode_pos' 			=> $kode_pos
			];
			$this->M_mhs->edit_data($no_pendaftaran, $data);

			$query_reg = $this->db->get_where('mastermhs_new', array(
				'no_pendaftaran' => $no_pendaftaran
			))->row();

			$sess_reg = array(
				'reg' => $query_reg->reg
			);

			$this->session->set_userdata($sess_reg);
			$this->session->set_flashdata('direct2_success',
				'<div class="alert alert-success">
					<p>Data Identitas Anda sudah Tersimpan, Silahkan Lanjut Ke tahap Selanjutnya</p>
				</div>');
			
			$this->step3();			
		}else if($reg == 3){
			$this->step3();
		}else if($reg == 4){
			$this->step4();
		}else if($reg == 5){
			$this->step5();
		}else if($reg == 6){
			$this->step6();
		}else if($reg == 7){
			$this->step7();
		}else if($reg == 8){
			$this->step8();
		}else if($reg == 9){
			$this->step9();
		}else if($reg == 10){
			$this->step10();
		}else{
			$this->session->sess_destroy();
			redirect('C_login');
		}
	}
	//End function update identitas diri

	//function update data ortu
	public function direct3(){
		$reg = $this->session->userdata('reg');

		if($reg == 1){
			$this->step1();
		}else if($reg == 2){
			$this->step2();
		}else if($reg == 3){
			$no_pendaftaran			= $this->session->userdata('no_pendaftaran');
			$nama_ayah 				= $this->input->post('nama_ayah');
			$almarhum 				= $this->input->post('almarhum');
			$nama_ibu 				= $this->input->post('nama_ibu');
			$almarhumah 			= $this->input->post('almarhumah');
			$alamat_ortu 			= $this->input->post('alamat_ortu');
			$prov_ortu 				= $this->input->post('asal_provinsi_ortu');
			$kab_kota_ortu 			= $this->input->post('kab_kota_ortu');
			$kode_pos_ortu 			= $this->input->post('kode_pos_ortu');
			$no_telp_ortu 			= $this->input->post('no_telp_ortu');
			$pekerjaan_ayah 		= $this->input->post('pekerjaan_ayah');
			$ket_pns_tni_polri_ayah = $this->input->post('pns_tni_polri_ayah');
			$ket_wiraswasta_ayah 	= $this->input->post('wiraswasta_ayah');
			$ket_tukang_ayah 		= $this->input->post('tukang_ayah');
			$pekerjaan_ibu 			= $this->input->post('pekerjaan_ibu');
			$ket_pns_tni_polri_ibu 	= $this->input->post('pns_tni_polri_ibu');
			$ket_wiraswasta_ibu 	= $this->input->post('wiraswasta_ibu');
			$pendidikan_ayah 		= $this->input->post('pendidikan_ayah');
			$pendidikan_ibu 		= $this->input->post('pendidikan_ibu');
			$penghasilan_ayah 		= $this->input->post('penghasilan_ayah');
			$nom_peng_ayah 			= $this->input->post('nominal_penghasilan_ayah');
			$penghasilan_ibu 		= $this->input->post('penghasilan_ibu');
			$nom_peng_ibu 			= $this->input->post('nominal_penghasilan_ibu');
			$saudara_kandung 		= $this->input->post('saudara_kandung');

			$data = [ 'reg' 							 => '4',
					  'nama_ayah' 						 => $nama_ayah,
					  'almarhum' 						 => $almarhum,
					  'nama_ibu' 						 => $nama_ibu,
					  'almarhumah' 						 => $almarhumah,
					  'alamat_ortu' 					 => $alamat_ortu,
					  'provinsi_ortu' 					 => $prov_ortu,
					  'kab_kota_ortu' 					 => $kab_kota_ortu,
					  'kode_pos_ortu' 					 => $kode_pos_ortu,
					  'no_telp_ortu' 					 => $no_telp_ortu,
					  'pekerjaan_ayah'					 => $pekerjaan_ayah,
					  'ket_pns_tni_polri_ayah' 			 => $ket_pns_tni_polri_ayah,
					  'ket_wiraswasta_ayah' 			 => $ket_wiraswasta_ayah,
					  'ket_tukang_ayah' 				 => $ket_tukang_ayah,
					  'pekerjaan_ibu' 					 => $pekerjaan_ibu,
					  'ket_pns_tni_polri_ibu' 			 => $ket_pns_tni_polri_ibu,
					  'pendidikan_ayah' 				 => $pendidikan_ayah,
					  'pendidikan_ibu' 					 => $pendidikan_ibu,
					  'penghasilan_ayah' 				 => $penghasilan_ayah,
					  'nominal_peng_ayah' 				 => $nom_peng_ayah,
					  'penghasilan_ibu' 				 => $penghasilan_ibu,
					  'nominal_peng_ibu' 				 => $nom_peng_ibu,
					  'jumlah_saudara_kandung_tang_ortu' => $saudara_kandung
			];
			$this->M_mhs->edit_data($no_pendaftaran, $data);
			$query_reg = $this->db->get_where('mastermhs_new', array(
				'no_pendaftaran' => $no_pendaftaran
			))->row();

			$sess_reg = array(
				'reg' => $query_reg->reg
			);

			$this->session->set_userdata($sess_reg);
			$this->session->set_flashdata('direct3_success',
				'<div class="alert alert-success">
					<p>Data Orang Tua Anda sudah Tersimpan, Silahkan Lanjut Ke tahap Selanjutnya</p>
				</div>');
			
			$this->step4();	
		}else if($reg == 4){
			$this->step4();
		}else if($reg == 5){
			$this->step5();
		}else if($reg == 6){
			$this->step6();
		}else if($reg == 7){
			$this->step7();
		}else if($reg == 8){
			$this->step8();
		}else if($reg == 9){
			$this->step9();
		}else if($reg == 10){
			$this->step10();
		}else{
			$this->session->sess_destroy();
			redirect('C_login');
		}
	}
	//End function update data ortu

	//function update data kondisi rumah
	public function direct4(){
		$reg = $this->session->userdata('reg');

		if($reg == 1){
			$this->step1();
		}else if($reg == 2){
			$this->step2();
		}else if($reg == 3){
			$this->step3();
		}else if($reg == 4){
			$no_pendaftaran = $this->session->userdata('no_pendaftaran');
			$luas_rumah 	= $this->input->post('luas_rumah');
			$pbb 			= $this->input->post('pbb');
			$rek_listrik 	= $this->input->post('rek_listrik_per_bulan');

			$data = [ 'reg'						=> '5',
					  'luas_rumah' 				=> $luas_rumah,
					  'pbb' 					=> $pbb,
					  'rek_listrik_per_bulan' 	=> $rek_listrik
			];

			$this->M_mhs->edit_data($no_pendaftaran, $data);
			$query_reg = $this->db->get_where('mastermhs_new', array(
				'no_pendaftaran' => $no_pendaftaran
			))->row();

			$sess_reg = array(
				'reg' => $query_reg->reg
			);

			$this->session->set_userdata($sess_reg);
			$this->session->set_flashdata('direct4_success',
				'<div class="alert alert-success">
					<p>Data Kondisi Rumah Anda sudah Tersimpan, Silahkan Lanjut Ke tahap Selanjutnya</p>
				</div>');
			
			$this->step5();	
		}else if($reg == 5){
			$this->step5();
		}else if($reg == 6){
			$this->step6();
		}else if($reg == 7){
			$this->step7();
		}else if($reg == 8){
			$this->step8();
		}else if($reg == 9){
			$this->step9();
		}else if($reg == 10){
			$this->step10();
		}else{
			$this->session->sess_destroy();
			redirect('C_login');
		}
	}
	//end function update data kondisi rumah

	//function update data sekolah
	public function direct5(){
		$reg = $this->session->userdata('reg');

		if($reg == 1){
			$this->step1();
		}else if($reg == 2){
			$this->step2();
		}else if($reg == 3){
			$this->step3();
		}else if($reg == 4){
			$this->step4();
		}else if($reg == 5){
			$no_pendaftaran 		= $this->session->userdata('no_pendaftaran');
			$alamat_sekolah 		= $this->input->post('alamat_sekolah');
			$prov_sekolah 			= $this->input->post('provinsi_sekolah');
			$kab_kota_sekolah		= $this->input->post('kab_kota_sekolah');
			$nama_sekolah 			= $this->input->post('nama_sekolah');
			$tahun_lulus 			= $this->input->post('tahun_lulus');
			$jurusan_sekolah 		= $this->input->post('jurusan_sekolah');
			$rerata_nilai_un 		= $this->input->post('rerata_nilai_un');
			$rerata_nilai_raport 	= $this->input->post('rerata_nilai_raport');
			$prestasi_akademik 		= $this->input->post('prestasi_akademik');
			$prestasi_non_akademik 	= $this->input->post('prestasi_non_akademik');

			$data = [ 'reg' 					=> '6',
					  'alamat_sekolah' 			=> $alamat_sekolah,
					  'prov_sekolah'			=> $prov_sekolah,
					  'kab_kota_sekolah' 		=> $kab_kota_sekolah,
					  'nama_sekolah' 			=> $nama_sekolah,
					  'tahun_lulus' 			=> $tahun_lulus,
					  'jurusan_sekolah' 		=> $jurusan_sekolah,
					  'rerata_nilai_un' 		=> $rerata_nilai_un,
					  'rerata_nilai_raport' 	=> $rerata_nilai_raport,
					  'prestasi_akademik' 		=> $prestasi_akademik,
					  'prestasi_non_akademik' 	=> $prestasi_non_akademik
			];
			$this->M_mhs->edit_data($no_pendaftaran, $data);
			$query_reg = $this->db->get_where('mastermhs_new', array(
				'no_pendaftaran' => $no_pendaftaran
			))->row();

			$sess_reg = array(
				'reg' => $query_reg->reg
			);

			$this->session->set_userdata($sess_reg);
			$this->session->set_flashdata('direct5_success',
				'<div class="alert alert-success">
					<p>Data Sekolah Anda sudah Tersimpan, Silahkan Lanjut Ke tahap Selanjutnya</p>
				</div>');
			
			$this->step6();	
		}else if($reg == 6){
			$this->step6();
		}else if($reg == 7){
			$this->step7();
		}else if($reg == 8){
			$this->step8();
		}else if($reg == 9){
			$this->step9();
		}else if($reg == 10){
			$this->step10();
		}else{
			$this->session->sess_destroy();
			redirect('C_login');
		}
	}
	//end function update data sekolah

	//function update data pesantren
	public function direct6(){
		$reg = $this->session->userdata('reg');

		if($reg == 1){
			$this->step1();
		}else if($reg == 2){
			$this->step2();
		}else if($reg == 3){
			$this->step3();
		}else if($reg == 4){
			$this->step4();
		}else if($reg == 5){
			$this->step5();
		}else if($reg == 6){
			$no_pendaftaran 	= $this->session->userdata('no_pendaftaran');
			$mondok 			= $this->input->post('mondok');
			$nama_ponpes 		= $this->input->post('nama_ponpes');
			$alamat_ponpes 		= $this->input->post('alamat_ponpes');
			$prov_ponpes 		= $this->input->post('provinsi_ponpes');
			$kab_kota_ponpes 	= $this->input->post('kab_kota_ponpes');
			$kode_pos_ponpes 	= $this->input->post('kode_pos_ponpes');
			$lama_belajar 		= $this->input->post('lama_belajar');

			$data = [ 'reg' 			=> '7',
					  'mondok' 			=> $mondok,
					  'nama_ponpes' 	=> $nama_ponpes,
					  'alamat_ponpes' 	=> $alamat_ponpes,
					  'prov_ponpes' 	=> $prov_ponpes,
					  'kab_kota_ponpes' => $kab_kota_ponpes,
					  'kode_pos_ponpes' => $kode_pos_ponpes,
					  'lama_belajar' 	=> $lama_belajar
			];
			$this->M_mhs->edit_data($no_pendaftaran, $data);
			$query_reg = $this->db->get_where('mastermhs_new', array(
				'no_pendaftaran' => $no_pendaftaran
			))->row();

			$sess_reg = array(
				'reg' => $query_reg->reg
			);

			$this->session->set_userdata($sess_reg);
			$this->session->set_flashdata('direct6_success',
				'<div class="alert alert-success">
					<p>Data Ponpes Anda sudah Tersimpan, Silahkan Lanjut Ke tahap Selanjutnya</p>
				</div>');
			
			$this->step7();	
		}else if($reg == 7){
			$this->step7();
		}else if($reg == 8){
			$this->step8();
		}else if($reg == 9){
			$this->step9();
		}else if($reg == 10){
			$this->step10();
		}else{
			$this->session->sess_destroy();
			redirect('C_login');
		}
	}
	//End function update data pesantren

	//function update keterampilan
	public function direct7(){
		$reg = $this->session->userdata('reg');

		if($reg == 1){
			$this->step1();
		}else if($reg == 2){
			$this->step2();
		}else if($reg == 3){
			$this->step3();
		}else if($reg == 4){
			$this->step4();
		}else if($reg == 5){
			$this->step5();
		}else if($reg == 6){
			$this->step6();
		}else if($reg == 7){
			$no_pendaftaran 	= $this->session->userdata('no_pendaftaran');
			$kem_bhs_arab 		= $this->input->post('kemampuan_bahasa_arab');
			$kem_bhs_inggris 	= $this->input->post('kemampuan_bahasa_inggris');
			$kem_komputer 		= $this->input->post('kemampuan_komputer');

			$data = [ 'reg' 			=> '8',
					  'kem_bhs_arab' 	=> $kem_bhs_arab,
					  'kem_bhs_inggris' => $kem_bhs_inggris,
					  'kem_komputer' 	=> $kem_komputer
			];
			$this->M_mhs->edit_data($no_pendaftaran, $data);
			$query_reg = $this->db->get_where('mastermhs_new', array(
				'no_pendaftaran' => $no_pendaftaran
			))->row();

			$sess_reg = array(
				'reg' => $query_reg->reg
			);

			$this->session->set_userdata($sess_reg);
			$this->session->set_flashdata('direct7_success',
				'<div class="alert alert-success">
					<p>Data Keterampilan Anda sudah Tersimpan, Silahkan Lanjut Ke tahap Selanjutnya</p>
				</div>');
			
			$this->step8();	
		}else if($reg == 8){
			$this->step8();
		}else if($reg == 9){
			$this->step9();
		}else if($reg == 10){
			$this->step10();
		}else{
			$this->session->sess_destroy();
			redirect('C_login');
		}	
	}
	//end function update keterampilan

	//function update foto dokumen pendukung
	public function direct8(){
		$reg = $this->session->userdata('reg');

		if($reg == 1){
			$this->step1();
		}else if($reg == 2){
			$this->step2();
		}else if($reg == 3){
			$this->step3();
		}else if($reg == 4){
			$this->step4();
		}else if($reg == 5){
			$this->step5();
		}else if($reg == 6){
			$this->step6();
		}else if($reg == 7){
			$this->step7();
		}else if($reg == 8){
			$no_pendaftaran = $this->session->userdata('no_pendaftaran');
			//$foto = $this->M_mhs->getFoto($no_pendaftaran);

			$config['upload_path'] = './assets/foto_dokumen/';
			$config['allowed_types'] = 'pdf|PDF';
			$config['max_size']	= 1024;

			$this->load->library('upload', $config);
			$this->upload->initialize($config);

			$error = array();
			$gambar = array();
			/*foreach($_FILES as $field_name => $file){
				if(!$this->upload->do_upload($field_name)){
					$error[] = $this->upload->display_errors();
				}else{
					$gambar0 = $this->upload->data();
					$gambar[] = $gambar0['file_name'];
				}
			}

			$result = $this->M_mhs->edit_image($no_pendaftaran, $gambar);
			$this->step8();*/

			foreach($_FILES as $field_name => $file){
				if(!$this->upload->do_upload($field_name)) {
					$error[] = $this->upload->display_errors();
					$this->session->set_flashdata('direct8_error', 
						'<div class="alert alert-warning">
							<p>Upload Foto Gagal, Silahkan Cek Kembali Ukuran dan Format File Foto Anda</p>
						</div>');
				}else{
					$gambar0 = $this->upload->data();
					$gambar[] = $gambar0['file_name'];

					$data = array(
						'reg' => '9'
					);
					$this->M_mhs->edit_data($no_pendaftaran, $data);
					$query_reg = $this->db->get_where('mastermhs_new', array(
						'no_pendaftaran' => $no_pendaftaran
					))->row();

					$sess_reg = array(
						'reg' => $query_reg->reg
					);

					$this->session->set_userdata($sess_reg);
					$this->session->set_flashdata('direct8_success', 
						'<div class="alert alert-success">
							<p>Foto Berhasil diUpload, Silahkan Lanjut Ke Tahap Selanjutnya</p>
						 </div>');

					/*$this->upload->do_upload('foto_rumah_depan');
					$file1 = $this->upload->data('file_name');
					unlink('assets/foto_dokumen/'.$foto->upload_foto_rumah_depan);

					$this->upload->do_upload('foto_rumah_kiri');
					$file2 = $this->upload->data('file_name');
					unlink('assets/foto_dokumen/'.$foto->upload_foto_rumah_kiri);

					$data = ['upload_foto_rumah_depan' => $file1,
							 'upload_foto_rumah_kiri' => $file2
					];
					$this->M_mhs->edit_data($no_pendaftaran, $data);
					$this->step8();*/
				}
			}
			
			if($this->session->userdata('reg') == 8){
				redirect('C_mhs/step8');
			}else if($this->session->userdata('reg') == 9){
				$this->M_mhs->edit_image($no_pendaftaran, $gambar);
				$this->step9();
			}else{
				redirect('C_login');
			}		
		}else if($reg == 9){
			$this->step9();
		}else if($reg == 10){
			$this->step10();
		}else{
			$this->session->sess_destroy();
			redirect('C_login');
		}	
	}
	//end function update foto dokumen pendukung

	//function update persyaratan dokumen
	public function direct9(){
		$reg = $this->session->userdata('reg');

		if($reg == 1){
			$this->step1();
		}else if($reg == 2){
			$this->step2();
		}else if($reg == 3){
			$this->step3();
		}else if($reg == 4){
			$this->step4();
		}else if($reg == 5){
			$this->step5();
		}else if($reg == 6){
			$this->step6();
		}else if($reg == 7){
			$this->step7();
		}else if($reg == 8){
			$this->step8();
		}else if($reg == 9){
			$no_pendaftaran 					= $this->session->userdata('no_pendaftaran');
			$kartu_tes 							= $this->input->post('kartu_tes');
			$formulir_pendaftaran 				= $this->input->post('formulir_pendaftaran');
			$skl_dari_kepsek 					= $this->input->post('skl_dari_kepsek');
			$raport_semester 					= $this->input->post('raport_semester');
			$ijazah_legalisir 					= $this->input->post('ijazah_legalisir');
			$fotocopy_nilai_ujian_un 			= $this->input->post('fotocopy_nilai_ujian_un');
			$keterangan_prestasi 				= $this->input->post('keterangan_prestasi');
			$keterangan_penghasilan_ortu_wali 	= $this->input->post('keterangan_penghasilan_ortu_wali');
			$fotocopy_kk 						= $this->input->post('fotocopy_kk');
			$fotocopy_rek 						= $this->input->post('fotocopy_rek');
			$fotocopy_bukti_pembayaran_pbb 		= $this->input->post('fotocopy_bukti_pembayaran_pbb');
			$data_foto_rumah 					= $this->input->post('data_foto_rumah');

			$data = [ 'reg' 						=> '10',
					  'kartu_tes' 					=> $kartu_tes,
					  'formulir_pendaftaran' 		=> $formulir_pendaftaran,
					  'surat_ket_lulus' 			=> $skl_dari_kepsek,
					  'fotocopy_raport_semester' 	=> $raport_semester,
					  'fotocopy_ijazah' 			=> $ijazah_legalisir,
					  'fotocopy_nilai_uan' 			=> $fotocopy_nilai_ujian_un,
					  'surat_ket_prestasi' 			=> $keterangan_prestasi,
					  'surat_ket_peng_ortu' 		=> $keterangan_penghasilan_ortu_wali,
					  'fotocopy_kk' 				=> $fotocopy_kk,
					  'fotocopy_rek_listrik' 		=> $fotocopy_rek,
					  'fotocopy_pbb' 				=> $fotocopy_bukti_pembayaran_pbb,
					  'foto_rumah_tiga_sudut' 		=> $data_foto_rumah
			];
			$this->M_mhs->edit_data($no_pendaftaran, $data);
			$query_reg = $this->db->get_where('mastermhs_new', array(
				'no_pendaftaran' => $no_pendaftaran
			))->row();

			$sess_reg = array(
				'reg' => $query_reg->reg
			);

			$this->session->set_userdata($sess_reg);
			$this->session->set_flashdata('direct9_success',
				'<div class="alert alert-success">
					<p>Data Persyaratan Dokumen Anda sudah Tersimpan</p>
				</div>');
			
			$this->step10();	
		}else if($reg == 10){
			$this->step10();
		}else{
			$this->session->sess_destroy();
			redirect('C_login');
		}	
	}
	//end function update persyaratan dokumen 

	//function update modal identitas diri
	public function update_modal1(){
		$no_pendaftaran 	= $this->session->userdata('no_pendaftaran');
		$foto  				= $this->M_mhs->getFoto($no_pendaftaran); 
		$nama_mahasiswa 	= $this->input->post('nama_lengkap');
		$jenis_kelamin 		= $this->input->post('jenis_kelamin');
		$tanggal_lahir 		= $this->input->post('tgl_lahir');
		$tempat_lahir		= $this->input->post('tempat_lahir');
		$status_pernikahan  = $this->input->post('status_pernikahan');
		$jalur_pendaftaran  = $this->input->post('jalur_pendaftaran');
		$kategori 			= $this->input->post('kategori');
		$fakultas 			= $this->input->post('fakultas');
		$jurusan 			= $this->input->post('jurusan');
		$asal_provinsi 		= $this->input->post('asal_provinsi');
		$asal_kab_kota 		= $this->input->post('asal_kab_kota');
		$no_telp 			= $this->input->post('no_telp');
		$email 				= $this->input->post('email');
		$alamat 			= $this->input->post('alamat');
		$kode_pos 			= $this->input->post('kode_pos');


		$config['upload_path'] = './assets/foto_mhs/';
		$config['allowed_types'] = 'png|jpg|jpeg|JPEG|JPG|PNG';
		$config['max_size'] = 4096;

		$this->load->library('upload', $config);

		if(!$this->upload->do_upload('foto')){
			$data = [ 'nama_mahasiswa' => $nama_mahasiswa,
					  'jenis_kelamin' => $jenis_kelamin,
					  'tanggal_lahir' => $tanggal_lahir,
					  'tempat_lahir' => $tempat_lahir,
					  'pin' => $tanggal_lahir,
					  'status_pernikahan' => $status_pernikahan,
					  'jalur_pendaftaran' => $jalur_pendaftaran,
					  'fakultas' => $fakultas,
					  'jurusan' => $jurusan,
					  'asal_provinsi' => $asal_provinsi,
					  'asal_kab_kota' => $asal_kab_kota,
					  'no_telp' => $no_telp,
					  'kategori' => $kategori,
					  'email' => $email,
					  'alamat' => $alamat,
					  'kode_pos' => $kode_pos
			];
			$edit_data = $this->M_mhs->edit_data($no_pendaftaran, $data);
			$sess_fakultas = array(
				'fakultas' => $edit_data->fakultas
			);
			$this->session->set_userdata($sess_fakultas);

			$this->session->set_flashdata('update1_successs', '
				<div class="alert alert-success">
					<p>Identitas Diri Berhasil diUpdate</p>
				</div>');

			redirect('C_mhs/step10');
		}else{
			$file = $this->upload->data();
			unlink('assets/foto_mhs/'.$foto->upload_foto);
			
			$data = [ 'upload_foto' => $file['file_name'],
					  'nama_mahasiswa' => $nama_mahasiswa,
					  'jenis_kelamin' => $jenis_kelamin,
					  'tanggal_lahir' => $tanggal_lahir,
					  'pin' => $tanggal_lahir,
					  'status_pernikahan' => $status_pernikahan,
					  'jalur_pendaftaran' => $jalur_pendaftaran,
					  'fakultas' => $fakultas,
					  'jurusan' => $jurusan,
					  'asal_provinsi' => $asal_provinsi,
					  'asal_kab_kota' => $asal_kab_kota,
					  'no_telp' => $no_telp,
					  'email' => $email,
					  'alamat' => $alamat,
					  'kode_pos' => $kode_pos
			];
			$this->M_mhs->edit_data($no_pendaftaran, $data);

			$this->session->set_flashdata('update1_success', '
				<div class="alert alert-success">
					<p>Identitas Diri Berhasil diUpdate</p>
				</div>');

			redirect('C_mhs/step10');	
		}
	}
	//end function update modal identitas diri

	//function update modal data ortu
	public function update_modal2(){
		$no_pendaftaran			= $this->session->userdata('no_pendaftaran');
		$nama_ayah 				= $this->input->post('nama_ayah');
		$almarhum 				= $this->input->post('almarhum');
		$nama_ibu 				= $this->input->post('nama_ibu');
		$almarhumah 			= $this->input->post('almarhumah');
		$alamat_ortu 			= $this->input->post('alamat_ortu');
		$prov_ortu 				= $this->input->post('asal_provinsi_ortu');
		$kab_kota_ortu 			= $this->input->post('kab_kota_ortu');
		$kode_pos_ortu 			= $this->input->post('kode_pos_ortu');
		$no_telp_ortu 			= $this->input->post('no_telp_ortu');
		$pekerjaan_ayah 		= $this->input->post('pekerjaan_ayah');
		$ket_pns_tni_polri_ayah = $this->input->post('pns_tni_polri_ayah');
		$ket_wiraswasta_ayah 	= $this->input->post('wiraswasta_ayah');
		$ket_tukang_ayah 		= $this->input->post('tukang_ayah');
		$pekerjaan_ibu 			= $this->input->post('pekerjaan_ibu');
		$ket_pns_tni_polri_ibu 	= $this->input->post('pns_tni_polri_ibu');
		$ket_wiraswasta_ibu 	= $this->input->post('wiraswasta_ibu');
		$pendidikan_ayah 		= $this->input->post('pendidikan_ayah');
		$pendidikan_ibu 		= $this->input->post('pendidikan_ibu');
		$penghasilan_ayah 		= $this->input->post('penghasilan_ayah');
		$nom_peng_ayah 			= $this->input->post('nominal_penghasilan_ayah');
		$penghasilan_ibu 		= $this->input->post('penghasilan_ibu');
		$nom_peng_ibu 			= $this->input->post('nominal_penghasilan_ibu');
		$saudara_kandung 		= $this->input->post('saudara_kandung');

		$data = [ 'nama_ayah' 						 => $nama_ayah,
				  'almarhum' 						 => $almarhum,
				  'nama_ibu' 						 => $nama_ibu,
				  'almarhumah' 						 => $almarhumah,
				  'alamat_ortu' 					 => $alamat_ortu,
				  'provinsi_ortu' 					 => $prov_ortu,
				  'kab_kota_ortu' 					 => $kab_kota_ortu,
				  'kode_pos_ortu' 					 => $kode_pos_ortu,
				  'no_telp_ortu' 					 => $no_telp_ortu,
				  'pekerjaan_ayah'					 => $pekerjaan_ayah,
				  'ket_pns_tni_polri_ayah' 			 => $ket_pns_tni_polri_ayah,
				  'ket_wiraswasta_ayah' 			 => $ket_wiraswasta_ayah,
				  'ket_tukang_ayah' 				 => $ket_tukang_ayah,
				  'pekerjaan_ibu' 					 => $pekerjaan_ibu,
				  'ket_pns_tni_polri_ibu' 			 => $ket_pns_tni_polri_ibu,
				  'pendidikan_ayah' 				 => $pendidikan_ayah,
				  'pendidikan_ibu' 					 => $pendidikan_ibu,
				  'penghasilan_ayah' 				 => $penghasilan_ayah,
				  'nominal_peng_ayah' 				 => $nom_peng_ayah,
				  'penghasilan_ibu' 				 => $penghasilan_ibu,
				  'nominal_peng_ibu' 				 => $nom_peng_ibu,
				  'jumlah_saudara_kandung_tang_ortu' => $saudara_kandung
		];
		$this->M_mhs->edit_data($no_pendaftaran, $data);

		$this->session->set_flashdata('update2_success', '
			<div class="alert alert-success">
				<p>Data Orang Tua Berhasil diUpdate</p>
			</div>');

		redirect('C_mhs/step10');	
	}
	//End function update modal data ortu

	//function update modal data kondisi rumah
	public function update_modal3(){
		$no_pendaftaran = $this->session->userdata('no_pendaftaran');
		$luas_rumah 	= $this->input->post('luas_rumah');
		$pbb 			= $this->input->post('pbb');
		$rek_listrik 	= $this->input->post('rek_listrik_per_bulan');

		$data = [ 'luas_rumah' 				=> $luas_rumah,
				  'pbb' 					=> $pbb,
				  'rek_listrik_per_bulan' 	=> $rek_listrik
		];
		$this->M_mhs->edit_data($no_pendaftaran, $data);

		$this->session->set_flashdata('update3_success', '
				<div class="alert alert-success">
					<p>Data Kondisi Rumah Berhasil diUpdate</p>
				</div>');

		redirect('C_mhs/step10');
	}
	//end function update modal data kondisi rumah

	//function update modal data sekolah
	public function update_modal4(){
		$no_pendaftaran 		= $this->session->userdata('no_pendaftaran');
		$alamat_sekolah 		= $this->input->post('alamat_sekolah');
		$prov_sekolah 			= $this->input->post('provinsi_sekolah');
		$kab_kota_sekolah		= $this->input->post('kab_kota_sekolah');
		$nama_sekolah 			= $this->input->post('nama_sekolah');
		$tahun_lulus 			= $this->input->post('tahun_lulus');
		$jurusan_sekolah 		= $this->input->post('jurusan_sekolah');
		$rerata_nilai_un 		= $this->input->post('rerata_nilai_un');
		$rerata_nilai_raport 	= $this->input->post('rerata_nilai_raport');
		$prestasi_akademik 		= $this->input->post('prestasi_akademik');
		$prestasi_non_akademik 	= $this->input->post('prestasi_non_akademik');

		$data = [ 'alamat_sekolah' 			=> $alamat_sekolah,
				  'prov_sekolah'			=> $prov_sekolah,
				  'kab_kota_sekolah' 		=> $kab_kota_sekolah,
				  'nama_sekolah' 			=> $nama_sekolah,
				  'tahun_lulus' 			=> $tahun_lulus,
				  'jurusan_sekolah' 		=> $jurusan_sekolah,
				  'rerata_nilai_un' 		=> $rerata_nilai_un,
				  'rerata_nilai_raport' 	=> $rerata_nilai_raport,
				  'prestasi_akademik' 		=> $prestasi_akademik,
				  'prestasi_non_akademik' 	=> $prestasi_non_akademik
		];
		$this->M_mhs->edit_data($no_pendaftaran, $data);
		$this->session->set_flashdata('update4_success', '
				<div class="alert alert-success">
					<p>Data Sekolah Berhasil diUpdate</p>
				</div>');

		redirect('C_mhs/step10');
	}
	//end function update modal data sekolah

	//function update modal data pesantren
	public function update_modal5(){
		$no_pendaftaran 	= $this->session->userdata('no_pendaftaran');
		$mondok 			= $this->input->post('mondok');
		$nama_ponpes 		= $this->input->post('nama_ponpes');
		$alamat_ponpes 		= $this->input->post('alamat_ponpes');
		$prov_ponpes 		= $this->input->post('provinsi_ponpes');
		$kab_kota_ponpes 	= $this->input->post('kab_kota_ponpes');
		$kode_pos_ponpes 	= $this->input->post('kode_pos_ponpes');
		$lama_belajar 		= $this->input->post('lama_belajar');

		$data = [ 'mondok' 			=> $mondok,
				  'nama_ponpes' 	=> $nama_ponpes,
				  'alamat_ponpes' 	=> $alamat_ponpes,
				  'prov_ponpes' 	=> $prov_ponpes,
				  'kab_kota_ponpes' => $kab_kota_ponpes,
				  'kode_pos_ponpes' => $kode_pos_ponpes,
				  'lama_belajar' 	=> $lama_belajar
		];
		$this->M_mhs->edit_data($no_pendaftaran, $data);

		$this->session->set_flashdata('update5_success', '
				<div class="alert alert-success">
					<p>Data Pesantren Berhasil diUpdate</p>
				</div>');

		redirect('C_mhs/step10');
	}
	//end function update modal data pesantren

	//function update modal data ketermapilan
	public function update_modal6(){
		$no_pendaftaran 	= $this->session->userdata('no_pendaftaran');
		$kem_bhs_arab 		= $this->input->post('kemampuan_bahasa_arab');
		$kem_bhs_inggris 	= $this->input->post('kemampuan_bahasa_inggris');
		$kem_komputer 		= $this->input->post('kemampuan_komputer');

		$data = [ 'kem_bhs_arab' 	=> $kem_bhs_arab,
				  'kem_bhs_inggris' => $kem_bhs_inggris,
				  'kem_komputer' 	=> $kem_komputer
		];
		$this->M_mhs->edit_data($no_pendaftaran, $data);
		$this->session->set_flashdata('update6_success', '
				<div class="alert alert-success">
					<p>Data Keterampilan Berhasil diUpdate</p>
				</div>');

		redirect('C_mhs/step10');
	}
	//end function update modal data ketermapilan

	//function update modal data dokumen pendukung
	public function update_modal7(){
		$no_pendaftaran = $this->session->userdata('no_pendaftaran');
		$foto = $this->M_mhs->getFoto($no_pendaftaran);
		//$ubah_foto = $this->input->post('ubah_foto');
		$ubah_foto_rumah_depan = $this->input->post('ubah_foto_rumah_depan');
		$ubah_foto_rumah_kiri = $this->input->post('ubah_foto_rumah_kiri');
		$ubah_foto_rumah_kanan = $this->input->post('ubah_foto_rumah_kanan');
		$ubah_foto_pbb = $this->input->post('ubah_foto_pbb');
		$ubah_foto_rek = $this->input->post('ubah_foto_rek');

		$config['upload_path'] = './assets/foto_dokumen/';
		$config['allowed_types'] = 'pdf|PDF';
		$config['max_size']	= 4096;

		$this->load->library('upload', $config);

		switch($ubah_foto_rumah_depan == 1){
			case 1 :
			{
				if(!$this->upload->do_upload('foto_rumah_depan')){
				$this->session->set_flashdata('update7_foto_rumah_depan_error', 
					'<div class="alert alert-warning">
						<p>Upload Foto Rumah Depan Gagal, Silahkan Cek Kembali Ukuran dan Format File Foto Anda</p>
					</div>' );
				}else{
					$file = $this->upload->data();
					unlink('assets/foto_dokumen/'.$foto->upload_foto_rumah_depan);

					$data = ['upload_foto_rumah_depan' => $file['file_name']];
					$this->M_mhs->edit_data($no_pendaftaran, $data);
					$this->session->set_flashdata('update7_foto_rumah_depan_success', '
						<div class="alert alert-success">
							<p>Data Foto Rumah Depan Berhasil diUpdate</p>
						</div>');
				}
			}
		}

		switch($ubah_foto_rumah_kiri == 2){
			case 2 :
			{
				if(!$this->upload->do_upload('foto_rumah_kiri')){
				$this->session->set_flashdata('update7_foto_rumah_kiri_error', 
					'<div class="alert alert-warning">
						<p>Upload Foto Rumah Kiri Gagal, Silahkan Cek Kembali Ukuran dan Format File Foto Anda</p>
					</div>' );
				}else{
					$file = $this->upload->data();
					unlink('assets/foto_dokumen/'.$foto->upload_foto_rumah_kiri);
					
					$data = ['upload_foto_rumah_kiri' => $file['file_name']];
					$this->M_mhs->edit_data($no_pendaftaran, $data);
					$this->session->set_flashdata('update7_foto_rumah_kiri_success', '
						<div class="alert alert-success">
							<p>Data Foto Rumah Kiri Berhasil diUpdate</p>
						</div>');
				}
			}
		}

		switch($ubah_foto_rumah_kanan == 3){
			case 3 : 
			{
				if(!$this->upload->do_upload('foto_rumah_kanan')){
				$this->session->set_flashdata('update7_foto_rumah_kanan_error', 
					'<div class="alert alert-warning">
						<p>Upload Foto Rumah Kanan Gagal, Silahkan Cek Kembali Ukuran dan Format File Foto Anda</p>
					</div>' );
				}else{
					$file = $this->upload->data();
					unlink('assets/foto_dokumen/'.$foto->upload_foto_rumah_kanan);
					
					$data = ['upload_foto_rumah_kanan' => $file['file_name']];
					$this->M_mhs->edit_data($no_pendaftaran, $data);
					$this->session->set_flashdata('update7_foto_rumah_kanan_success', '
						<div class="alert alert-success">
							<p>Data Foto Rumah Kanan Berhasil diUpdate</p>
						</div>');
				}
			}
		}

		switch($ubah_foto_pbb == 4){
			case 4 :
			{
				if(!$this->upload->do_upload('foto_pbb')){
				$this->session->set_flashdata('update7_foto_pbb_error', 
					'<div class="alert alert-warning">
						<p>Upload Foto PBB Gagal, Silahkan Cek Kembali Ukuran dan Format File Foto Anda</p>
					</div>' );
				}else{
					$file = $this->upload->data();
					unlink('assets/foto_dokumen/'.$foto->upload_foto_pbb);
					
					$data = ['upload_foto_pbb' => $file['file_name']];
					$this->M_mhs->edit_data($no_pendaftaran, $data);
					$this->session->set_flashdata('update7_foto_pbb_success', '
						<div class="alert alert-success">
							<p>Data Foto PBB Berhasil diUpdate</p>
						</div>');
				}
			}
		}

		switch($ubah_foto_rek == 5){
			case 5 :
			{
				if(!$this->upload->do_upload('foto_rek_listrik')){
				$this->session->set_flashdata('update7_foto_rek_listrik_error', 
					'<div class="alert alert-warning">
						<p>Upload Foto Rekening Listrik Gagal, Silahkan Cek Kembali Ukuran dan Format File Foto Anda</p>
					</div>' );
				}else{
					$file = $this->upload->data();
					unlink('assets/foto_dokumen/'.$foto->upload_foto_rek_listrik);
					
					$data = ['upload_foto_rek_listrik' => $file['file_name']];
					$this->M_mhs->edit_data($no_pendaftaran, $data);
					$this->session->set_flashdata('update7_foto_rek_listrik_success', '
						<div class="alert alert-success">
							<p>Data Foto Rekening Listrik Berhasil diUpdate</p>
						</div>');
				}
			}
		}
		redirect('C_mhs/step10');
	}
	//end function update modal data dokumen pendukung

	//function update modal data persyaratan dokumen
	public function update_modal8(){
		$no_pendaftaran 					= $this->session->userdata('no_pendaftaran');
		$kartu_tes 							= $this->input->post('kartu_tes');
		$formulir_pendaftaran 				= $this->input->post('formulir_pendaftaran');
		$skl_dari_kepsek 					= $this->input->post('skl_dari_kepsek');
		$raport_semester 					= $this->input->post('raport_semester');
		$ijazah_legalisir 					= $this->input->post('ijazah_legalisir');
		$fotocopy_nilai_ujian_un 			= $this->input->post('fotocopy_nilai_ujian_un');
		$keterangan_prestasi 				= $this->input->post('keterangan_prestasi');
		$keterangan_penghasilan_ortu_wali 	= $this->input->post('keterangan_penghasilan_ortu_wali');
		$fotocopy_kk 						= $this->input->post('fotocopy_kk');
		$fotocopy_rek 						= $this->input->post('fotocopy_rek');
		$fotocopy_bukti_pembayaran_pbb 		= $this->input->post('fotocopy_bukti_pembayaran_pbb');
		$data_foto_rumah 					= $this->input->post('data_foto_rumah');

		$data = [ 'kartu_tes' 					=> $kartu_tes,
				  'formulir_pendaftaran' 		=> $formulir_pendaftaran,
				  'surat_ket_lulus' 			=> $skl_dari_kepsek,
				  'fotocopy_raport_semester' 	=> $raport_semester,
				  'fotocopy_ijazah' 			=> $ijazah_legalisir,
				  'fotocopy_nilai_uan' 			=> $fotocopy_nilai_ujian_un,
				  'surat_ket_prestasi' 			=> $keterangan_prestasi,
				  'surat_ket_peng_ortu' 		=> $keterangan_penghasilan_ortu_wali,
				  'fotocopy_kk' 				=> $fotocopy_kk,
				  'fotocopy_rek_listrik' 		=> $fotocopy_rek,
				  'fotocopy_pbb' 				=> $fotocopy_bukti_pembayaran_pbb,
				  'foto_rumah_tiga_sudut' 		=> $data_foto_rumah
		];
		$this->M_mhs->edit_data($no_pendaftaran, $data);
		$this->session->set_flashdata('update8_success', '
						<div class="alert alert-success">
							<p>Data Persyaratan Dokumen Berhasil diUpdate</p>
						</div>');
		redirect('C_mhs/step10');
	}
	//end function update modal data persyaratan dokumen

	//function skoring/monitoring/perhitungan
	public function step11(){
		$no_pendaftaran = $this->session->userdata('no_pendaftaran');
		$fakultas = $this->session->userdata('fakultas');
		$kolom = $this->M_mhs->getKolom_default($no_pendaftaran);
		$kolom4 = $this->M_mhs->getKolom_default($no_pendaftaran);
		$kolom3 = $this->M_mhs->getKolom_default($no_pendaftaran);
		$this->M_mhs->update_kuota($fakultas);
		$almarhum = $kolom->almarhum;
		$almarhumah = $kolom4->almarhumah;
		$ukt = $kolom3->kategori;

		$kategori_ukt1 = "K1";
		$kategori_ukt2 = "K2";
		$kategori_ukt3 = "K3";
		$kategori_ukt4 = "K4";
		$kategori_ukt5 = "K5";
		$kategori_ukt6 = "K6";
		$kategori_ukt7 = "K7";
		$satu = 1;
		$nol = 0;
		$lulus = "LULUS";
		$tidak_lulus = "TIDAK LULUS";
		$ayah = 40;
		$ibu = 20;
		$default = 0;
		$skor = (float) 70.000;

		if(($almarhum == $ayah && $almarhumah == $ibu) && ($ukt == $kategori_ukt1 || $ukt == $kategori_ukt2 || $ukt == $kategori_ukt3 || $ukt == $kategori_ukt4)) {
			$this->M_mhs->getScoring_kotor($no_pendaftaran);
			$kolom2 = $this->M_mhs->getKolom_default($no_pendaftaran);
				
			if($kolom2->skor >= $skor){
				$data = ['getLulus' => $lulus,
						 'prioritas' => $satu
				];
				$this->M_mhs->edit_data($no_pendaftaran, $data);
			}else if($kolom2->skor < $skor){
				$data = ['getLulus' => $tidak_lulus,
						 'prioritas' => $nol
				];
				$this->M_mhs->edit_data($no_pendaftaran, $data);
			}else{
				echo "Error 405";
			}		
		}else if(($almarhum == $ayah) && ($ukt == $kategori_ukt1 || $ukt == $kategori_ukt2 || $ukt == $kategori_ukt3 || $ukt == $kategori_ukt4)){
			$this->M_mhs->getScoring_ayah($no_pendaftaran);
			$kolom2 = $this->M_mhs->getKolom_default($no_pendaftaran);

			if($kolom2->skor >= $skor){
				$data = ['getLulus' => $lulus,
						 'prioritas' => $satu
				];
				$this->M_mhs->edit_data($no_pendaftaran, $data);
			}else if($kolom2->skor < $skor){
				$data = ['getLulus' => $tidak_lulus,
						 'prioritas' => $nol
				];
				$this->M_mhs->edit_data($no_pendaftaran, $data);
			}else{
				echo "Error 405";
			}
		}else if(($almarhumah == $ibu) && ($ukt == $kategori_ukt1 || $ukt == $kategori_ukt2 || $ukt == $kategori_ukt3 || $ukt == $kategori_ukt4)){
			$this->M_mhs->getScoring_ibu($no_pendaftaran);
			$kolom2 = $this->M_mhs->getKolom_default($no_pendaftaran);
		
			if($kolom2->skor >= $skor){
				$data = ['getLulus' => $lulus,
						 'prioritas' => $satu
				];
				$this->M_mhs->edit_data($no_pendaftaran, $data);
			}else if($kolom2->skor < $skor){
				$data = ['getLulus' => $tidak_lulus,
						 'prioritas' => $nol
				];
				$this->M_mhs->edit_data($no_pendaftaran, $data);
			}else{
				echo "Error 405";
			}
		}else if(($almarhum == $default && $almarhumah == $default) && ($ukt == $kategori_ukt1 || $ukt == $kategori_ukt2 || $ukt == $kategori_ukt3 || $ukt == $kategori_ukt4)){
			$this->M_mhs->getScoring_bersih($no_pendaftaran);
			$kolom2 = $this->M_mhs->getKolom_default($no_pendaftaran);
		
			if($kolom2->skor >= $skor){
				$data = ['getLulus' => $lulus,
						 'prioritas' => $satu
				];
				$this->M_mhs->edit_data($no_pendaftaran, $data);
			}else if($kolom2->skor < $skor){
				$data = ['getLulus' => $tidak_lulus,
						 'prioritas' => $nol
				];
				$this->M_mhs->edit_data($no_pendaftaran, $data);
				$this->M_mhs->update_kuota();
			}else{
				echo "Error 405";
			}
		}else if(($almarhum == $ayah && $almarhumah == $ibu) && ($ukt == $kategori_ukt5 || $ukt == $kategori_ukt6 || $ukt == $kategori_ukt7)) {
			$this->M_mhs->getScoring_kotor($no_pendaftaran);
			$kolom2 = $this->M_mhs->getKolom_default($no_pendaftaran);
				
			if($kolom2->skor >= $skor){
				$data = ['getLulus' => $lulus,
						 'prioritas' => $nol
				];
				$this->M_mhs->edit_data($no_pendaftaran, $data);
			}else if($kolom2->skor < $skor){
				$data = ['getLulus' => $tidak_lulus,
						 'prioritas' => $nol
				];
				$this->M_mhs->edit_data($no_pendaftaran, $data);
			}else{
				echo "Error 405";
			}		
		}else if(($almarhum == $ayah) && ($ukt == $kategori_ukt5 || $ukt == $kategori_ukt6 || $ukt == $kategori_ukt7)){
			$this->M_mhs->getScoring_ayah($no_pendaftaran);
			$kolom2 = $this->M_mhs->getKolom_default($no_pendaftaran);

			if($kolom2->skor >= $skor){
				$data = ['getLulus' => $lulus,
						 'prioritas' => $nol
				];
				$this->M_mhs->edit_data($no_pendaftaran, $data);
			}else if($kolom2->skor < $skor){
				$data = ['getLulus' => $tidak_lulus];
				$this->M_mhs->edit_data($no_pendaftaran, $data);
			}else{
				echo "Error 405";
			}
		}else if(($almarhumah == $ibu) && ($ukt == $kategori_ukt5 || $ukt == $kategori_ukt6 || $ukt == $kategori_ukt7)){
			$this->M_mhs->getScoring_ibu($no_pendaftaran);
			$kolom2 = $this->M_mhs->getKolom_default($no_pendaftaran);
		
			if($kolom2->skor >= $skor){
				$data = ['getLulus' => $lulus,
						 'prioritas' => $nol
				];
				$this->M_mhs->edit_data($no_pendaftaran, $data);
			}else if($kolom2->skor < $skor){
				$data = ['getLulus' => $tidak_lulus,
						 'prioritas' => $nol
				];
				$this->M_mhs->edit_data($no_pendaftaran, $data);
			}else{
				echo "Error 405";
			}
		}else if(($almarhum == $default && $almarhumah == $default) && ($ukt == $kategori_ukt5 || $ukt == $kategori_ukt6 || $ukt == $kategori_ukt7)){
			$this->M_mhs->getScoring_bersih($no_pendaftaran);
			$kolom2 = $this->M_mhs->getKolom_default($no_pendaftaran);
		
			if($kolom2->skor >= $skor){
				$data = ['getLulus' => $lulus,
						 'prioritas' => $nol
				];
				$this->M_mhs->edit_data($no_pendaftaran, $data);
			}else if($kolom2->skor < $skor){
				$data = ['getLulus' => $tidak_lulus,
						 'prioritas' => $nol
				];
				$this->M_mhs->edit_data($no_pendaftaran, $data);
			}else{
				echo "Error 405";
			}
		}
		
		$this->session->set_flashdata('direct11_success', '
						<div class="alert alert-success">
							<p>Verifikasi Berhasil, Silahkan Tunggu Pengumuman Lulus/Tidak Lulus BidikMisi Anda</p>
						</div>');
		redirect('C_mhs/step10');
	}
	//end function skoring/monitoring/perhitungan
}
?>