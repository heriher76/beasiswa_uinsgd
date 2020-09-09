<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth1 extends CI_Controller{
	private $filename = "data_excel";
	private $filename2 = "data_excel2";
	private $filename3 = "data_excel3";
	private $filename_berkas = "data_berkas";
	
	public function __construct(){
		parent::__construct();
		$this->load->library('datatables');
		$this->load->model('M_utama');
		$this->load->model('M_admin');
		$this->load->helpers('tgl_indo');
		
		$id    = $this->session->userdata('id');
		$token = $this->session->userdata('tok');
		$level = $this->session->userdata('level');
		
		if( (empty($id) || empty($token) || empty($level)) && (!$id || $token != '92148cdd2167f9e05dfd99d0d54332d152c4581d5ba' || $level != 1) ){
			redirect('Login');
		}
	}

	public function index(){
		$this->dashboard();
	}

	public function dashboard(){
	    $ambil_th = date('Y');
		$data['kuota'] = $this->M_utama->view_kuota();
		$data['jml_peserta'] = $this->M_utama->jml_peserta($ambil_th);
		$data['jml_lulus'] = $this->M_utama->jml_lulus($ambil_th);
		$data['jml_tlulus'] = $this->M_utama->jml_tlulus($ambil_th);
		$data['jml_ver'] = $this->M_utama->jml_verifikasi($ambil_th);
		$data['jml_pendaf'] = $this->M_utama->jml_pendaftar($ambil_th);
		$data['jml_pending'] = $this->M_utama->jml_pending($ambil_th);
		$data['jml_lulus2'] = $this->M_utama->jml_lulus2($ambil_th);
		$data['f1']	= $this->M_utama->get_gf1();
		$data['f2'] = $this->M_utama->get_gf2();
		$data['f3'] = $this->M_utama->get_gf3();
		$data['f4'] = $this->M_utama->get_gf4();
		$data['f5'] = $this->M_utama->get_gf5();
		$data['f6'] = $this->M_utama->get_gf6();
		$data['f7'] = $this->M_utama->get_gf7();
		$data['f8'] = $this->M_utama->get_gf8();
		$data['f9'] = $this->M_utama->get_gf9();
		$data['jadwal'] = $this->M_utama->jadwal()->result();
		$data['sudah_berkas'] = $this->M_utama->cek_sudah_berkas()->num_rows();
		$data['belum_berkas'] = $this->M_utama->cek_belum_berkas()->num_rows();
		$this->load->view('project_bidikmisi/admin/dashboard',$data);
	}

	//function view halaman jadwal
	public function view7(){
		$data = array(
			'jadwal' => $this->M_utama->jadwal()->result()
		);
		$this->load->view('project_bidikmisi/admin/jadwal', $data);
	}
	//end function view halaman jadwal

	//function edit jadwal
	public function edit_jadwal(){
		$id_admin = $this->session->userdata('id');
	    $nama_admin = $this->session->userdata('nama_lengkap');
	    $ip = $this->input->ip_address();
	    $ket = 'Admin setting jadwal';

	    $tgl_buka_sistem = $this->input->post('tgl_buka_sistem');
	    $tgl_tutup_sistem = $this->input->post('tgl_tutup_sistem');
		$tgl_buka = $this->input->post('tgl_buka');
		$tgl_tutup = $this->input->post('tgl_tutup');
		$tgl_pengumuman = $this->input->post('tgl_pengumuman');
		$tgl_tutup_pengumuman = $this->input->post('tgl_tutup_pengumuman');
		$check_ukt = $this->input->post('check_ukt');

		$data = [
			'tanggal_buka_sistem' => $tgl_buka_sistem,
			'tanggal_tutup_sistem' => $tgl_tutup_sistem,
			'tanggal_buka' => $tgl_buka,
			'tanggal_tutup' => $tgl_tutup,
			'tanggal_pengumuman' => $tgl_pengumuman,
			'tanggal_tutup_pengumuman' => $tgl_tutup_pengumuman,
			'check_ukt' => $check_ukt
		];
		$this->M_utama->edit_data_jadwal($data);
		$this->M_utama->activity_admin($id_admin,$nama_admin,$ip,$ket);
		$this->session->set_flashdata('msg','<script>alert("Jadwal Sudah di Setting"); </script>');
		echo $this->session->flashdata('msg');
		$this->view7();
	}
	//end function edit jadwal

	//Function list jurusan
	public function listJurusan(){
		$id_fakultas = $this->input->post('id_fakultas');
		$jurusan = $this->M_utama->viewByJurusan($id_fakultas);

		$lists = "<option value=''>-Pilih SalahSatu-</option>";
		foreach ($jurusan as $data) {
			$lists .= "<option value='".$data->id_jurusan."'>".$data->nama_jurusan."</option>";
		}

		$callback = array('list_jurusan' => $lists);

		echo json_encode($callback);
	}

	//view data pendaftar
	public function view1(){
	    $ambil_th2 = date('Y');
		$data = array(
			'user' => $this->M_utama->getTable($ambil_th2),
			'provinsi' => $this->M_utama->propinsi(),
			'kota' => $this->M_utama->kab_kota(),
			'fakultas' => $this->M_utama->fakultas(),
			'jurusan' => $this->M_utama->jurusan(),
			'param' => 'no_tukar'
		);

		$this->load->view('project_bidikmisi/admin/data_pendaftar5', $data);
	}

	//View data ServerSide
	function get_data_user()
    {
        $list = $this->M_utama->get_datatables();
        $data = array();
        $no = $_POST['start'];
        foreach ($list as $field) {
            $no++;
            $row = array();
            $row[] = $no;
            $row[] = $field->no_pendaftaran;
            $row[] = $field->nama_mahasiswa;
            $row[] = $field->jenis_kelamin;
            $row[] = date_indo($field->tanggal_lahir);
            $row[] = $field->tempat_lahir;
            $row[] = $field->email;
            $row[] = $field->kategori;
            $row[] = $field->skor;
            $row[] = $field->getLulus;
            $row[] = $field->tahun;
 
            $data[] = $row;
        }
 
        $output = array(
            "draw" => $_POST['draw'],
            "recordsTotal" => $this->M_utama->count_all(),
            "recordsFiltered" => $this->M_utama->count_filtered(),
            "data" => $data,
        );
        //output dalam format JSON
        echo json_encode($output);
    }
    //end View data ServerSide

	//function form untuk pengecekan form data excel
	public function form(){
		$data = array();

		if(isset($_POST['preview'])){	
			$upload = $this->M_utama->upload_file($this->filename);
			if($upload['result'] == 'success'){
				include APPPATH.'third_party/PHPExcel/PHPExcel.php';

				$excelreader = new PHPExcel_Reader_Excel2007();
				$loadexcel = $excelreader->load('assets/data_excel/'.$this->filename.'.xlsx');
				$sheet = $loadexcel->getActiveSheet()->toArray(null, true, true ,true);
				$data['sheet'] = $sheet;
			}else{
				$data['upload_error'] = $upload['error'];
			}
		}else if(isset($_POST['preview2'])){
		    $upload = $this->M_utama->upload_file($this->filename2);
		    if($upload['result'] == 'success'){
		        include APPPATH.'third_party/PHPExcel/PHPExcel.php';
		        
		        $excelreader = new PHPExcel_Reader_Excel2007();
				$loadexcel = $excelreader->load('assets/data_excel/'.$this->filename2.'.xlsx');
				$sheet = $loadexcel->getActiveSheet()->toArray(null, true, true ,true);
				$data['sheet'] = $sheet;
		    }else{
				$data['upload_error'] = $upload['error'];
			}
		}else if(isset($_POST['preview_berkas'])){
			$upload = $this->M_utama->upload_file($this->filename_berkas);
		    if($upload['result'] == 'success'){
		        include APPPATH.'third_party/PHPExcel/PHPExcel.php';
		        
		        $excelreader = new PHPExcel_Reader_Excel2007();
				$loadexcel = $excelreader->load('assets/data_excel/'.$this->filename_berkas.'.xlsx');
				$sheet = $loadexcel->getActiveSheet()->toArray(null, true, true ,true);
				$data['sheet'] = $sheet;
		    }else{
				$data['upload_error'] = $upload['error'];
			}
		}
		$this->load->view('project_bidikmisi/admin/form_import', $data);
	}
	//end function form untuk pengecekan form data excel

	//function import data excel
	public function import(){
	    $id_admin = $this->session->userdata('id');
	    $nama = $this->session->userdata('nama_lengkap');
	    $ip = $this->input->ip_address();
	    $ket = 'Admin insert excel';
	    $ket2 = 'Admin Import Data Lulus Tahap 1';
		$ket3 = 'Admin Import Data Lulus Tahap 2';
		$ket_berkas = 'Admin Import Data Pemberkasan';
		include APPPATH.'third_party/PHPExcel/PHPExcel.php';
		
		$excelreader = new PHPExcel_Reader_Excel2007();

		if(isset($_POST['import'])){
    		$loadexcel = $excelreader->load('assets/data_excel/'.$this->filename.'.xlsx');
    		$sheet = $loadexcel->getActiveSheet()->toArray(null, true, true, true);
    		$data = [];
    
    		$numrow = 1;
    		foreach($sheet as $row){
    			$tgl_lahir = strtotime(PHPExcel_Style_NumberFormat::toFormattedString($row['D'], 'YYYY-MM-DD' ));
    			$new_tgl_lahir = date('Y-m-d', $tgl_lahir);
				
				$no_pendaftaran = $row['A'];
				$cek_user = $this->db->get_where('mastermhs_new', array('no_pendaftaran' => $no_pendaftaran));
				if($cek_user->num_rows() == 1){
					foreach($cek_user->result() as $value){
						$nomor = $value->no_pendaftaran;
					}
					$this->session->set_flashdata('msg_ada', '<script>alert("No Pendaftaran '.$nomor.' Sudah Ada, Silahkan Cek kembali di Data Peserta"); </script>');
					redirect('Auth1');
					die;
				}else{
					if($numrow > 1){
						array_push($data, [
							'no_pendaftaran' => $row['A'],
							'nama_mahasiswa' => $row['B'],
							'jenis_kelamin' => $row['C'],
							'pin' => sha1(md5(sha1(md5(sha1($new_tgl_lahir))))),
							'tanggal_lahir' => $new_tgl_lahir,
							'jalur_pendaftaran' => $row['E'],
							'fakultas' => $row['F'],
							'jurusan' => $row['G'],
							'kategori' => $row['H'],
							'tahun' => date('Y')
						]);
					}
					$numrow++;
				}
    		}
    		$this->session->set_flashdata('msg', '<script>alert("Data Berhasil di Import"); </script>');
			$this->M_utama->insert_multiple($data);
    		$this->M_utama->activity_admin($id_admin,$nama,$ip,$ket);
    		echo $this->session->flashdata('msg');
		}else if(isset($_POST['import2'])){
		    $loadexcel = $excelreader->load('assets/data_excel/'.$this->filename2.'.xlsx');
    		$sheet = $loadexcel->getActiveSheet()->toArray(null, true, true, true);
    
    		foreach($sheet as $row){
                $this->M_utama->ganti_lulus($row['A']);
    		}
    		$this->session->set_flashdata('msg', '<script>alert("Data Berhasil di Import"); </script>');
    		$this->M_utama->ganti_tlulus_import();
    		$this->M_utama->activity_admin($id_admin,$nama,$ip,$ket2);
    		echo $this->session->flashdata('msg');
		}else if(isset($_POST['import3'])){
		    $loadexcel = $excelreader->load('assets/data_excel/'.$this->filename3.'.xlsx');
    		$sheet = $loadexcel->getActiveSheet()->toArray(null, true, true, true);
    
    		foreach($sheet as $row){
                $this->M_utama->ganti_lulus_t2($row['A']);
    		}
    		$this->session->set_flashdata('msg', '<script>alert("Data Berhasil di Import"); </script>');
    		$this->M_utama->ganti_tlulus_t2();
    		$this->M_utama->ganti_tlulus_import();
    		$this->M_utama->activity_admin($id_admin,$nama,$ip,$ket3);
    		echo $this->session->flashdata('msg');
		}else if(isset($_POST['import_berkas'])){
			$loadexcel = $excelreader->load('assets/data_excel/'.$this->filename_berkas.'.xlsx');
    		$sheet = $loadexcel->getActiveSheet()->toArray(null, true, true, true);
			$data = array(
				'pemberkasan' => 1
			);
    		foreach($sheet as $row){
                $this->M_utama->edit_data_mahasiswa(sha1(md5(sha1(md5(sha1($row['A']))))), $data);
    		}
    		$this->session->set_flashdata('msg', '<script>alert("Data Berhasil di Import"); </script>');
    		$this->M_utama->ganti_tlulus_t2();
    		$this->M_utama->ganti_tlulus_import();
    		$this->M_utama->activity_admin($id_admin,$nama,$ip,$ket_berkas);
    		echo $this->session->flashdata('msg');
		}	
		$this->index();
	}
	//End function import data excel

	//function form2 untuk insert data manual
	public function form2(){
		$data = array(
			'jurusan' => $this->M_utama->jurusan(),
			'fakultas' => $this->M_utama->fakultas()
		);
		$this->load->view('project_bidikmisi/admin/form2', $data);
	}
	//end function form2 untuk insert data manual
	
	//function form3 untuk insert data lulus tahap 2
	public function form3(){
	    $data = array();

		if(isset($_POST['preview3'])){	
			$upload = $this->M_utama->upload_file($this->filename3);
			if($upload['result'] == 'success'){
				include APPPATH.'third_party/PHPExcel/PHPExcel.php';

				$excelreader = new PHPExcel_Reader_Excel2007();
				$loadexcel = $excelreader->load('assets/data_excel/'.$this->filename3.'.xlsx');
				$sheet = $loadexcel->getActiveSheet()->toArray(null, true, true ,true);
				$data['sheet'] = $sheet;
			}else{
				$data['upload_error'] = $upload['error'];
			}
		}
		$this->load->view('project_bidikmisi/admin/form_import2', $data);
	}
	//end function form3 untuk insert data lulus tahap 2

	//function insert_manual
	public function insert_manual(){
	    $id_admin = $this->session->userdata('id');
	    $nama = $this->session->userdata('nama_lengkap');
	    $ip = $this->input->ip_address();
	    $ket = 'Admin insert manual' ;
		$no_pendaftaran 	= $this->input->post('no_pendaftaran');
		$nama_mahasiswa 	= $this->input->post('nama_mahasiswa');
		$jenis_kelamin 		= $this->input->post('jenis_kelamin');
		$tanggal_lahir 		= $this->input->post('tgl_lahir');
		$jalur_pendaftaran 	= $this->input->post('jalur_pendaftaran');
		$fakultas 			= $this->input->post('fakultas');
		$jurusan 			= $this->input->post('jurusan');
		$kategori 			= $this->input->post('kategori');

		$this->session->set_flashdata('message','<script>alert("No Pendaftaran Sudah ada di database");</script>');
		$data_cek = array(
			'no_pendaftaran' => $no_pendaftaran
		);
		$result = $this->M_utama->cek_user_mhs($data_cek);
		if($result->num_rows() == 1){
			echo $this->session->flashdata('message');
			$this->form2();
		}else{
			$data = [
				'no_pendaftaran' 	=> $no_pendaftaran,
				'nama_mahasiswa' 	=> $nama_mahasiswa,
				'jenis_kelamin' 	=> $jenis_kelamin,
				'pin' 				=> sha1(md5(sha1(md5(sha1($tanggal_lahir))))),
				'tanggal_lahir' 	=> $tanggal_lahir,
				'jalur_pendaftaran' => $jalur_pendaftaran,
				'fakultas' 			=> $fakultas,
				'jurusan' 			=> $jurusan,
				'kategori' 			=> $kategori,
				'tahun' 			=> date('Y')
			];

			$this->M_utama->insert_manual($data);
			$this->M_utama->activity_admin($id_admin,$nama,$ip,$ket);
			$this->session->set_flashdata('msg','<script>alert("Data Berhasil ditambahkan");</script>');
			echo $this->session->flashdata('msg');
			$this->form2();
		}
	}
	//end function insert_manual

	//function view data admin
	public function view2(){
		$data = array(
			'data' => $this->M_utama->master_utama()
		); 
		$this->load->view('project_bidikmisi/admin/tambah_data_utama', $data);
	}
	//end function view data admin

	//function view edit utama
	public function edit($id){
		$utama = $this->db->get_where('master_utama', array('sha1(md5(sha1(md5(sha1(id)))))' => $id))->row();
		$data = array(
			'id' => $utama->id,
			'nama_lengkap' => $utama->nama_lengkap,
			'level' => $utama->level,
		);
		$this->load->view('project_bidikmisi/admin/edit_utama', $data);
	}
	//End function view edit utama

	//function edit utama
	public function edit_utama_lengkap(){
		$id 		= $this->input->post('id');
		$id2 		= sha1(md5(sha1(md5(sha1($id)))));
		$nama 		= $this->input->post('nama_lengkap');
		$level 		= $this->input->post('level');
		
		$this->session->set_flashdata('msg','<script>alert("Data Lengkap Berhasil diUpdate"); </script>');
		$data = [
			'nama_lengkap' => $nama,
			'level' => $level
		];
		$this->M_utama->edit_data($id, $data);
		$query_session = $this->db->get_where('master_utama', array('sha1(md5(sha1(md5(sha1(id)))))' => $id2))->row();
		$sess_utama = array(
			'id' 			=> $query_session->id,
			'nama_lengkap' 	=> $query_session->nama_lengkap,
			'level' 		=> $query_session->level
		);
		$this->session->set_userdata($sess_utama);
	    
	    $id_admin 	= $this->session->userdata('id');
	    $nama_admin = $this->session->userdata('nama_lengkap');
	    $ip 		= $this->input->ip_address();
	    $ket 		= 'edit data lengkap akun admin';

		$this->M_utama->activity_admin($id_admin,$nama_admin,$ip,$ket);

		echo $this->session->flashdata('msg');
		$this->edit($id2);
	}

	public function edit_utama_username(){
		$id_admin 			= $this->session->userdata('id');
	    $nama_admin 		= $this->session->userdata('nama_lengkap');
	    $ip 				= $this->input->ip_address();
	    $ket 				= 'edit data username admin';
	    $id 				= $this->input->post('id');
	    $id2 				= sha1(md5(sha1(md5(sha1($id)))));
		$username 			= $this->input->post('username');
		$enkrip_username 	= sha1(md5(sha1(md5(sha1($username)))));

		$cek = array(
			'username' => $enkrip_username
		);

		$cek_user = $this->M_utama->cek_user($cek);
		$this->session->set_flashdata('sama', '<script>alert("Data Gagal Edit, Username Sudah Ada, Silahkan ganti dengan yang lain"); </script>');
		$this->session->set_flashdata('msg','<script>alert("Data Username Berhasil diUpdate"); </script>');

		if($cek_user->num_rows() == 1){
			echo $this->session->flashdata('sama');
		}else{
			$data = [
				'username' => $enkrip_username
			];
			$this->M_utama->edit_data($id, $data);
			$this->M_utama->activity_admin($id_admin,$nama_admin,$ip,$ket);
			echo $this->session->flashdata('msg');
		}
		$this->edit($id2);
	}

	public function edit_utama_password(){
		$id_admin = $this->session->userdata('id');
	    $nama_admin = $this->session->userdata('nama_lengkap');
	    $ip = $this->input->ip_address();
	    $ket = 'edit data password admin';
	    $id = $this->input->post('id');
		$password = $this->input->post('password');
		$confirm_password = $this->input->post('confirm_password');

		$this->session->set_flashdata('msg','<script>alert("Data Password Berhasil diUpdate"); </script>');
		$data = [
			'pin' => sha1(md5(sha1(md5(sha1($confirm_password)))))
		];
		$this->M_utama->edit_data($id, $data);
		$this->M_utama->activity_admin($id_admin,$nama_admin,$ip,$ket);
		echo $this->session->flashdata('msg');
		$id2 = sha1(md5(sha1(md5(sha1($id)))));
		$this->edit($id2);
	}
	//end function edit utama

	//function hapus data utama
	public function delete($id){
	    $id_admin = $this->session->userdata('id');
	    $nama_admin = $this->session->userdata('nama_lengkap');
	    $ip = $this->input->ip_address();
	    $ket = 'hapus akun admin';
		$this->M_utama->delete($id);
		$this->M_utama->activity_admin($id_admin,$nama_admin,$ip,$ket);
		$this->view2();
	}
	//end function hapus data utama

	//function tambah data admin/kepala pimpinan
	public function insert_utama(){
	    $id_admin 			= $this->session->userdata('id');
	    $nama_admin 		= $this->session->userdata('nama_lengkap');
	    $ip 				= $this->input->ip_address();
	    $ket 				= 'tambah akun admin/executive';
		$username 			= $this->input->post('username');
		$enkrip_username 	= sha1(md5(sha1(md5(sha1($username)))));
		$password 			= $this->input->post('password');
		$confirm_password 	= $this->input->post('confirm_password');
		$nama 				= $this->input->post('nama_lengkap');
		$level 				= $this->input->post('level');

		$cek = array(
			'username' => $enkrip_username
		);
		$cek_user = $this->M_utama->cek_user($cek);

		$this->session->set_flashdata('gagal', '<script>alert("Data Gagal Input, Password Tidak Sama, Silahkan input Ulang"); </script>');
		$this->session->set_flashdata('berhasil', '<script>alert("Data Berhasil ditambahkan"); </script>');
		$this->session->set_flashdata('sama', '<script>alert("Data Gagal Input, Username Sudah Ada, Silahkan ganti dengan yang lain"); </script>');
		if($cek_user->num_rows() == 1){
			echo $this->session->flashdata('sama');
		}else if($password != $confirm_password){
			echo $this->session->flashdata('gagal');
		}else{
			$data = [
				'username' => sha1(md5(sha1(md5(sha1($username))))),
				'pin' => sha1(md5(sha1(md5(sha1($confirm_password))))),
				'nama_lengkap' => $nama,
				'level' => $level
			];
			$this->M_utama->insert_utama($data);
			$this->M_utama->activity_admin($id_admin,$nama_admin,$ip,$ket);
			echo $this->session->flashdata('berhasil');
		}
		$this->view2();
	}
	//end function tambah data admin/kepala pimpinan

	//fungsi edit password
	public function password(){
		$id 				= $this->session->userdata('id');
		$new_pass 			= $this->input->post('new_password');
		$confirm_new_pass 	= $this->input->post('confirm_new_password');

		$this->session->set_flashdata('gagal_ganti', '<script>alert("Password Tidak Sama, Silahkan Input Ulang"); </script>');
		$this->session->set_flashdata('berhasil_ganti', '<script>alert("Password Berhasil diganti"); </script>');

		if($new_pass != $confirm_new_pass){
			echo $this->session->flashdata('gagal_ganti');
			$this->view3();
		}else{
			$data = array(
				'pin' => sha1(md5(sha1(md5(sha1($confirm_new_pass)))))
			);
			$this->M_utama->edit_data($id, $data);
			echo $this->session->flashdata('berhasil_ganti');
			$this->view3();
		}
	}
	//end fungsi edit password

	//fungsi view data kuota
	public function view4(){
		$data['kuota'] = $this->M_utama->view_kuota();
		$this->load->view('project_bidikmisi/admin/data_kuota', $data);
	}
	//end fungsi view data kuota

	//function edit kuota ushuluddin
	public function edit_kuota_ushuluddin(){
	    $id_admin = $this->session->userdata('id');
	    $nama_admin = $this->session->userdata('nama_lengkap');
	    $ip = $this->input->ip_address();
	    $ket = 'edit kuota ushuludin';
		$id_fakultas = $this->input->post('id_fakultas');
		$kuota 		 = $this->input->post('ushuluddin');

		$this->M_utama->update_kuota($id_fakultas, $kuota);
		$this->M_utama->activity_admin($id_admin,$nama_admin,$ip,$ket);
		$this->session->set_flashdata("berhasil", "<script>alert('Data Kuota USHLUDDIN Berhasil di Update'); </script>");
		echo $this->session->flashdata("berhasil");
		$this->view4();
	}
	//end function edit kuota ushuluddin

	//function edit kuota tarbiyah
	public function edit_kuota_tarbiyah(){
	    $id_admin = $this->session->userdata('id');
	    $nama_admin = $this->session->userdata('nama_lengkap');
	    $ip = $this->input->ip_address();
	    $ket = 'edit kuota tarbiyah';
		$id_fakultas = $this->input->post('id_fakultas');
		$kuota 		 = $this->input->post('tarbiyah');

		$this->M_utama->update_kuota($id_fakultas, $kuota);
		$this->M_utama->activity_admin($id_admin,$nama_admin,$ip,$ket);
		$this->session->set_flashdata("berhasil", "<script>alert('Data Kuota TARBIYAH Berhasil di Update'); </script>");
		echo $this->session->flashdata("berhasil");
		$this->view4();
	}
	//end function edit kuota tarbiyah

	//function edit kuota syarkum
	public function edit_kuota_syarkum(){
	    $id_admin = $this->session->userdata('id');
	    $nama_admin = $this->session->userdata('nama_lengkap');
	    $ip = $this->input->ip_address();
	    $ket = 'edit kuota syarkum';
		$id_fakultas = $this->input->post('id_fakultas');
		$kuota 		 = $this->input->post('syarkum');

		$this->M_utama->update_kuota($id_fakultas, $kuota);
		$this->M_utama->activity_admin($id_admin,$nama_admin,$ip,$ket);
		$this->session->set_flashdata("berhasil", "<script>alert('Data Kuota SYARKUM Berhasil di Update'); </script>");
		echo $this->session->flashdata("berhasil");
		$this->view4();
	}
	//end function edit kuota syarkum

	//function edit kuota dakom
	public function edit_kuota_dakom(){
	    $id_admin = $this->session->userdata('id');
	    $nama_admin = $this->session->userdata('nama_lengkap');
	    $ip = $this->input->ip_address();
	    $ket = 'edit kuota dakom';
		$id_fakultas = $this->input->post('id_fakultas');
		$kuota 		 = $this->input->post('dakom');

		$this->M_utama->update_kuota($id_fakultas, $kuota);
		$this->M_utama->activity_admin($id_admin,$nama_admin,$ip,$ket);
		$this->session->set_flashdata("berhasil", "<script>alert('Data Kuota DAKWAH DAN KOMUNIKASI Berhasil di Update'); </script>");
		echo $this->session->flashdata("berhasil");
		$this->view4();
	}
	//end function edit kuota dakom

	//function edit kuota adhum
	public function edit_kuota_adhum(){
	    $id_admin = $this->session->userdata('id');
	    $nama_admin = $this->session->userdata('nama_lengkap');
	    $ip = $this->input->ip_address();
	    $ket = 'edit kuota adhum';
		$id_fakultas = $this->input->post('id_fakultas');
		$kuota 		 = $this->input->post('adhum');

		$this->M_utama->update_kuota($id_fakultas, $kuota);
		$this->M_utama->activity_admin($id_admin,$nama_admin,$ip,$ket);
		$this->session->set_flashdata("berhasil", "<script>alert('Data Kuota ADAB DAN HUMANIORA Berhasil di Update'); </script>");
		echo $this->session->flashdata("berhasil");
		$this->view4();
	}
	//end function edit kuota adhum

	//function edit kuota psikologi
	public function edit_kuota_psikologi(){
	    $id_admin = $this->session->userdata('id');
	    $nama_admin = $this->session->userdata('nama_lengkap');
	    $ip = $this->input->ip_address();
	    $ket = 'edit kuota psikolog';
		$id_fakultas = $this->input->post('id_fakultas');
		$kuota 		 = $this->input->post('psikologi');

		$this->M_utama->update_kuota($id_fakultas, $kuota);
		$this->M_utama->activity_admin($id_admin,$nama_admin,$ip,$ket);
		$this->session->set_flashdata("berhasil", "<script>alert('Data Kuota PSIKOLOGI Berhasil di Update'); </script>");
		echo $this->session->flashdata("berhasil");
		$this->view4();
	}
	//end function edit kuota psikologi

	//function edit kuota sainstek
	public function edit_kuota_sainstek(){
		$id_admin = $this->session->userdata('id');
	    $nama_admin = $this->session->userdata('nama_lengkap');
	    $ip = $this->input->ip_address();
	    $ket = 'edit kuota saintek';
		$id_fakultas = $this->input->post('id_fakultas');
		$kuota 		 = $this->input->post('sainstek');

		$this->M_utama->update_kuota($id_fakultas, $kuota);
		$this->M_utama->activity_admin($id_admin,$nama_admin,$ip,$ket);
		$this->session->set_flashdata("berhasil", "<script>alert('Data Kuota SAINSTEK Berhasil di Update'); </script>");
		echo $this->session->flashdata("berhasil");
		$this->view4();
	}
	//end function edit kuota sainstek

	//function edit kuota fisip
	public function edit_kuota_fisip(){
		$id_admin = $this->session->userdata('id');
	    $nama_admin = $this->session->userdata('nama_lengkap');
	    $ip = $this->input->ip_address();
	    $ket = 'edit kuota fisip';
		$id_fakultas = $this->input->post('id_fakultas');
		$kuota 		 = $this->input->post('fisip');

		$this->M_utama->update_kuota($id_fakultas, $kuota);
		$this->M_utama->activity_admin($id_admin,$nama_admin,$ip,$ket);
		$this->session->set_flashdata("berhasil", "<script>alert('Data Kuota FISIP Berhasil di Update'); </script>");
		echo $this->session->flashdata("berhasil");
		$this->view4();
	}
	//end function edit kuota fisip

	//function edit kuota All
	public function edit_kuota_all(){
		$id_admin = $this->session->userdata('id');
	    $nama_admin = $this->session->userdata('nama_lengkap');
	    $ip = $this->input->ip_address();
	    $ket = 'edit kuota semua fakultas';
		$kuota = $this->input->post('all');


		$data = [
			'kuota' => $kuota
		];

		$this->M_utama->update_kuota_all($data);
		$this->M_utama->activity_admin($id_admin,$nama_admin,$ip,$ket);
		$this->session->set_flashdata("berhasil", "<script>alert('Semua Data Kuota Berhasil di Update'); </script>");
		echo $this->session->flashdata("berhasil");
		$this->view4();
	}
	//end function edit kuota All

	//function edit kuota ekonomi dan bisnis islam
	public function edit_kuota_ekonomi(){
		$id_admin = $this->session->userdata('id');
	    $nama_admin = $this->session->userdata('nama_lengkap');
	    $ip = $this->input->ip_address();
		$ket = 'edit kuota ekonomi dan bisnis islam';
		$id_fakultas = $this->input->post('id_fakultas');
		$kuota = $this->input->post('ekonomi');


		$data = [
			'kuota' => $kuota
		];

		$this->M_utama->update_kuota($id_fakultas, $kuota);
		$this->M_utama->activity_admin($id_admin,$nama_admin,$ip,$ket);
		$this->session->set_flashdata("berhasil", "<script>alert('Data Kuota Ekonomi dan Bisnis Islam Berhasil di Update'); </script>");
		echo $this->session->flashdata("berhasil");
		$this->view4();
	}
	//end function edit kuota ekonomi dan bisnis islam

	//function view detail pendaftar
	public function view5($no_pendaftaran){
		$data = array(
			'user' =>  $this->M_utama->getData_mhs($no_pendaftaran),
			'provinsi' => $this->M_utama->propinsi(),
			'kota' => $this->M_utama->kab_kota(),
			'fakultas' => $this->M_utama->fakultas(),
			'jurusan' => $this->M_utama->jurusan()
		);

		$this->load->view('project_bidikmisi/admin/detail_pendaftar', $data);
	}
	//end function view detail pendaftar

	//function view edit data mahasiswa
	public function view6($no_pendaftaran){
		$data = array(
			'user' =>  $this->M_utama->getData_mhs($no_pendaftaran),
			'fakultas' => $this->M_utama->fakultas(),
			'jurusan' => $this->M_utama->jurusan()
		);
		$this->load->view('project_bidikmisi/admin/edit_pendaftar', $data);
	}
	//end function view edit data mahasiswa

	//function edit data pendaftar admin rahasia
	public function edit_pendaftar(){
	    $id_admin = $this->session->userdata('id');
	    $nama_admin = $this->session->userdata('nama_lengkap');
	    $ip = $this->input->ip_address();
	    $ket = 'edit data pendaftar';
		$no_pendaftaran 		= $this->input->post('no_pendaftaran');
		$enkrip_no_pendaftaran 	= sha1(md5(sha1(md5(sha1($no_pendaftaran)))));
		$fakultas               = $this->input->post('fakultas');
		$jurusan                = $this->input->post('jurusan');
		$almarhum 				= $this->input->post('almarhum');
		$almarhumah 			= $this->input->post('almarhumah');
		$pekerjaan_ayah 		= $this->input->post('pekerjaan_ayah');
		$pendidikan_ayah 		= $this->input->post('pendidikan_ayah');
		$penghasilan_ayah 		= $this->input->post('penghasilan_ayah');
		$penghasilan_ibu 		= $this->input->post('penghasilan_ibu');
		$tanggungan_ortu 		= $this->input->post('saudara_kandung');
		$luas_rumah 			= $this->input->post('luas_rumah');
		$pbb 					= $this->input->post('pbb');
		$rek_listrik 			= $this->input->post('rek_listrik_per_bulan');
		$rerata_nilai_un 		= $this->input->post('rerata_nilai_un');
		$rerata_nilai_raport 	= $this->input->post('rerata_nilai_raport');
		$prestasi_akademik 		= $this->input->post('prestasi_akademik');
		$prestasi_non_akademik 	= $this->input->post('prestasi_non_akademik');
		$skor = 60.00;

		$data = [
		    'fakultas'                          => $fakultas,
		    'jurusan'                           => $jurusan,
			'almarhum' 							=> $almarhum,
			'almarhumah' 						=> $almarhumah,
			'pekerjaan_ayah' 					=> $pekerjaan_ayah,
			'pendidikan_ayah'			 		=> $pendidikan_ayah,
			'penghasilan_ayah'					=> $penghasilan_ayah,
			'penghasilan_ibu' 					=> $penghasilan_ibu,
			'jumlah_saudara_kandung_tang_ortu' 	=> $tanggungan_ortu,
			'luas_rumah'						=> $luas_rumah, 
			'pbb' 								=> $pbb,
			'rek_listrik_per_bulan' 			=> $rek_listrik,
			'rerata_nilai_un' 					=> $rerata_nilai_un,
			'rerata_nilai_raport' 				=> $rerata_nilai_raport,
			'prestasi_akademik' 				=> $prestasi_akademik,
			'prestasi_non_akademik' 			=> $prestasi_non_akademik
		];

	    $this->session->set_flashdata('msg','<script>alert("Data Mahasiswa Berhasil diUpdate"); </script>');
		$this->M_utama->edit_data_mahasiswa($enkrip_no_pendaftaran, $data);

		$kolom = $this->M_utama->getKolom_default($no_pendaftaran);
		$kolom4 = $this->M_utama->getKolom_default($no_pendaftaran);
		$almarhum = $kolom->almarhum;
		$almarhumah = $kolom4->almarhumah;

		$satu = 1;
		$nol = 0;
		$pending = "PENDING";
		$ayah = 40;
		$ibu = 20;
		$default = 0;
		$skor = (float) 60.000;

		//jika almarhum dan almarhumah di ceklis 
		if($almarhum == $ayah && $almarhumah == $ibu) {
			$this->M_utama->getScoring_kotor($no_pendaftaran);
			$kolom2 = $this->M_utama->getKolom_default($no_pendaftaran);
				
			if($kolom2->skor >= $skor){
				$data = ['getLulus' => $pending];
				$this->M_utama->edit_data_mahasiswa($enkrip_no_pendaftaran, $data);
			}else if($kolom2->skor < $skor){
				$data = ['getLulus' => $pending];
				$this->M_utama->edit_data_mahasiswa($enkrip_no_pendaftaran, $data);
			}else{
				echo "Error 405";
			}
		//jika almarhum di ceklis		
		}else if($almarhum == $ayah){
			$this->M_utama->getScoring_ayah($no_pendaftaran);
			$kolom2 = $this->M_utama->getKolom_default($no_pendaftaran);

			if($kolom2->skor >= $skor){
				$data = ['getLulus' => $pending];
				$this->M_utama->edit_data_mahasiswa($enkrip_no_pendaftaran, $data);
			}else if($kolom2->skor < $skor){
				$data = ['getLulus' => $pending];
				$this->M_utama->edit_data_mahasiswa($enkrip_no_pendaftaran, $data);
			}else{
				echo "Error 405";
			}
		//jika almarhumah di ceklis 
		}else if($almarhumah == $ibu){
			$this->M_utama->getScoring_ibu($no_pendaftaran);
			$kolom2 = $this->M_utama->getKolom_default($no_pendaftaran);
		
			if($kolom2->skor >= $skor){
				$data = ['getLulus' => $pending];
				$this->M_utama->edit_data_mahasiswa($enkrip_no_pendaftaran, $data);
			}else if($kolom2->skor < $skor){
				$data = ['getLulus' => $pending];
				$this->M_utama->edit_data_mahasiswa($enkrip_no_pendaftaran, $data);
			}else{
				echo "Error 405";
			}
		//jika almarhum/almarhumah TIDAK di ceklis	
		}else if($almarhum == $default && $almarhumah == $default){
			$this->M_utama->getScoring_bersih($no_pendaftaran);
			$kolom2 = $this->M_utama->getKolom_default($no_pendaftaran);
		
			if($kolom2->skor >= $skor){
				$data = ['getLulus' => $pending];
				$this->M_utama->edit_data_mahasiswa($enkrip_no_pendaftaran, $data);
			}else if($kolom2->skor < $skor){
				$data = ['getLulus' => $pending];
				$this->M_utama->edit_data_mahasiswa($enkrip_no_pendaftaran, $data);
			}else{
				echo "Error 405";
			}	
		}
		
        $this->M_utama->activity_admin($id_admin,$nama_admin,$ip,$ket);
        echo $this->session->flashdata('msg');
		echo "<script>window.close();</script>";
	}
	//end function edit data pendaftar admin rahasia

	//verifikasi berkas peserta lolos tahap 1
	public function verifikasi_berkas(){
		$data = array(
			'user' =>  $this->M_utama->verifikasi_berkas(),
			'provinsi' => $this->M_utama->propinsi(),
			'kota' => $this->M_utama->kab_kota(),
			'fakultas' => $this->M_utama->fakultas(),
			'jurusan' => $this->M_utama->jurusan(),
			'para' => 't1',
			'parameter_judul' => 'Verifikasi Berkas'
		);
		$this->load->view('project_bidikmisi/admin/verifikasi_berkas', $data);
	}

	//function view detail pendaftar untuk verifikasi
	public function verifikasi_berkas_detail($no_pendaftaran){
		$data = array(
			'user' =>  $this->M_utama->getData_mhs($no_pendaftaran),
			'provinsi' => $this->M_utama->propinsi(),
			'kota' => $this->M_utama->kab_kota(),
			'fakultas' => $this->M_utama->fakultas(),
			'jurusan' => $this->M_utama->jurusan()
		);

		$this->load->view('project_bidikmisi/admin/verifikasi_berkas_detail', $data);
	}

	//report ortu masih ada
	public function v_report_ortu(){
		$where1= 0;
		$where2= 0;
		$data = array(
			'user' =>  $this->M_utama->report1($where1,$where2),
			'provinsi' => $this->M_utama->propinsi(),
			'kota' => $this->M_utama->kab_kota(),
			'fakultas' => $this->M_utama->fakultas(),
			'jurusan' => $this->M_utama->jurusan(),
			'parameter_judul' => 'Orang Tua yang Masih Ada'
		);
		$this->load->view('project_bidikmisi/admin/data_pendaftar', $data);
	}

	//report ortu meninggal
	public function v_report_ortum(){
		$where1= 40;
		$where2= 20;
		$data = array(
			'user' =>  $this->M_utama->report1($where1,$where2),
			'provinsi' => $this->M_utama->propinsi(),
			'kota' => $this->M_utama->kab_kota(),
			'fakultas' => $this->M_utama->fakultas(),
			'jurusan' => $this->M_utama->jurusan(),
			'parameter_judul' => 'Orang Tua Almarhum dan Almarhumah'
		);
		$this->load->view('project_bidikmisi/admin/data_pendaftar', $data);
	}

	//report ayah meninggal
	public function v_report_almarhum(){
		$where1= 40;
		$where2= 0;
		$data = array(
			'user' =>  $this->M_utama->report1($where1,$where2),
			'provinsi' => $this->M_utama->propinsi(),
			'kota' => $this->M_utama->kab_kota(),
			'fakultas' => $this->M_utama->fakultas(),
			'jurusan' => $this->M_utama->jurusan(),
			'parameter_judul' => 'Orang Tua Almarhum'
		);
		$this->load->view('project_bidikmisi/admin/data_pendaftar', $data);
	}

	//report ibu meninggal
	public function v_report_almarhumah(){
		$where1= 0;
		$where2= 20;
		$data = array(
			'user' =>  $this->M_utama->report1($where1,$where2),
			'provinsi' => $this->M_utama->propinsi(),
			'kota' => $this->M_utama->kab_kota(),
			'fakultas' => $this->M_utama->fakultas(),
			'jurusan' => $this->M_utama->jurusan(),
			'parameter_judul' => 'Orang Tua Almarhumah'
		);
		$this->load->view('project_bidikmisi/admin/data_pendaftar', $data);
	}

	//report pernah pasantren
	public function v_report_mondok(){
		$para= 'mondok';
		$where= 'Ya';
		$data = array(
			'user' =>  $this->M_utama->report2($para,$where),
			'provinsi' => $this->M_utama->propinsi(),
			'kota' => $this->M_utama->kab_kota(),
			'fakultas' => $this->M_utama->fakultas(),
			'jurusan' => $this->M_utama->jurusan(),
			'parameter_judul' => 'Pernah Pesantren'
		);
		$this->load->view('project_bidikmisi/admin/data_pendaftar', $data);
	}

	//report tidak pernah pasantren
	public function v_report_blm_mondok(){
		$para= 'mondok';
		$where= 'Tidak';
		$data = array(
			'user' =>  $this->M_utama->report2($para,$where),
			'provinsi' => $this->M_utama->propinsi(),
			'kota' => $this->M_utama->kab_kota(),
			'fakultas' => $this->M_utama->fakultas(),
			'jurusan' => $this->M_utama->jurusan(),
			'parameter_judul' => 'Tidak Pernah Pesantren'
		);
		$this->load->view('project_bidikmisi/admin/data_pendaftar', $data);
	}

	//report peserta lulus
	public function v_report_lulus(){
	    $tahun = date('Y');
		$data = array(
			'user' =>  $this->M_utama->view_tmp($tahun),
			'provinsi' => $this->M_utama->propinsi(),
			'kota' => $this->M_utama->kab_kota(),
			'fakultas' => $this->M_utama->fakultas(),
			'jurusan' => $this->M_utama->jurusan(),
			'para' => 't1',
			'judul' => 'Tahap 1'
		);
		$this->load->view('project_bidikmisi/admin/data_pendaftar3', $data);
	}

	public function v_report_lulus2(){
	    $tahun = date('Y');
		$data = array(
			'user' =>  $this->M_utama->view_tmp_t2($tahun),
			'provinsi' => $this->M_utama->propinsi(),
			'kota' => $this->M_utama->kab_kota(),
			'fakultas' => $this->M_utama->fakultas(),
			'jurusan' => $this->M_utama->jurusan(),
			'para' => '',
			'judul' => 'Tahap 2'
		);
		$this->load->view('project_bidikmisi/admin/data_pendaftar3', $data);
	}

	//report peserta tidak lulus
	public function v_report_tdk_lulus(){
		$para= 'getLulus';
		$where= 'TIDAK LULUS';
		$data = array(
			'user' =>  $this->M_utama->report2($para,$where),
			'provinsi' => $this->M_utama->propinsi(),
			'kota' => $this->M_utama->kab_kota(),
			'fakultas' => $this->M_utama->fakultas(),
			'jurusan' => $this->M_utama->jurusan(),
			'parameter_judul' => 'Tidak Lulus'
		);
		$this->load->view('project_bidikmisi/admin/data_pendaftar', $data);
	}

	public function v_report_provinsi(){
		$year = date('Y');
		$data = array(
			'user' => $this->M_utama->getTable2($year),
			'provinsi' => $this->M_utama->propinsi(),
			'kota' => $this->M_utama->kab_kota(),
			'fakultas' => $this->M_utama->fakultas(),
			'jurusan' => $this->M_utama->jurusan(),
			'parameter_judul' => 'Per-Wilayah Provinsi dan Kab/Kota'
		);

		$this->load->view('project_bidikmisi/admin/data_pendaftar2', $data);
	}

	//function listKota
	public function listprovinsi(){
		//ambil data propinsi yang dikirim via ajax post
		$id_propinsi = $this->input->post('id_propinsi');

		$kota = $this->M_utama->viewByPropinsi($id_propinsi);

		//Buat variabel untuk menampung tag - tag optionnya
		$lists = "<option value=''>Pilih SalahSatu</option>";
		foreach($kota as $data){
			$lists .= "<option value='".$data->id_kota."'>".$data->nama_kota."</option>"; //menambahkan tag option ke variabel lists
		}

		//memasukkan variabel lists tadi ke dalam array dengan nama indexnya list_kota
		$callback = array('list_kota' => $lists);

		echo json_encode($callback); //konversi variabel $callback menjadi JSON
	}

	public function v_report_provinsi2(){
		$provinsi = $this->input->post('provinsi');
		$kota = $this->input->post('kota');

		$data = array(
			'user' => $this->M_utama->report4($provinsi,$kota),
			'provinsi' => $this->M_utama->propinsi(),
			'kota' => $this->M_utama->kab_kota(),
			'fakultas' => $this->M_utama->fakultas(),
			'jurusan' => $this->M_utama->jurusan(),
			'parameter_judul' => 'Per-Wilayah Provinsi dan Kab/Kota'
		);

		$this->load->view('project_bidikmisi/admin/data_pendaftar2', $data);
	}

	//monitoring getLulus
	public function monitoring_getLulus(){
		$id_admin = $this->session->userdata('id');
	    $nama_admin = $this->session->userdata('nama_lengkap');
	    $ip = $this->input->ip_address();
	    $ket = 'admin mengvalidasi kelulusan dengan kuota';
		$tahun = date('Y');
		$ini_skor = $this->M_admin->getSkor()->row();
		
	    $this->session->set_flashdata('msg','<script>alert("Validasi Kelulusan Berhasil"); </script>');
	    $this->session->set_flashdata('msg_gagal','<script>alert("Data Mahasiswa Sudah Ada"); </script>');
		$this->session->set_flashdata('msg_gagal1','<script>alert("Kuota Ushuludin Sudah Habis"); </script>');
		$this->session->set_flashdata('msg_gagal2','<script>alert("Kuota Tarbiyah Sudah Habis"); </script>');
		$this->session->set_flashdata('msg_gagal3','<script>alert("Kuota Syarkum Sudah Habis"); </script>');
		$this->session->set_flashdata('msg_gagal4','<script>alert("Kuota Dakom Sudah Habis"); </script>');
		$this->session->set_flashdata('msg_gagal5','<script>alert("Kuota Adhum Sudah Habis"); </script>');
		$this->session->set_flashdata('msg_gagal6','<script>alert("Kuota Psikologi Sudah Habis"); </script>');
		$this->session->set_flashdata('msg_gagal7','<script>alert("Kuota Saintek Sudah Habis"); </script>');
		$this->session->set_flashdata('msg_gagal8','<script>alert("Kuota Fisip Sudah Habis"); </script>');
		$this->session->set_flashdata('msg_lulus','<script>alert("Validasi Kelulusan berhasil"); </script>');
		
		if($ini_skor->skor == 0.000){
			$this->session->set_flashdata('set','<script>alert("Silahkan Setting Terlebih Dahulu Skor Minimal Kelulusan");</script>');
			redirect('Auth1/form_kelulusan');
		}else{
			// ganti getLulus desc ke atas
			$sort = $this->M_utama->sort_peserta($tahun, $ini_skor->skor);
			foreach ($sort as $value) {
				// $this->M_utama->ganti_lulus($value->no_pendaftaran);
				if($value->fakultas != 0){
					$cari = $this->M_utama->panggil_kuota($value->fakultas);
				}
				$cari2 = $this->M_utama->view_tmp2($value->no_pendaftaran);
				if ($cari2 == 0) {
					if($cari->kuota > 0){
						$this->M_utama->kurang_kuota($value->fakultas);	
						$this->M_utama->ganti_lulus($value->no_pendaftaran);
						//$this->M_utama->insert_tmp($value->no_pendaftaran);
					}else if($cari->kuota == 0){
						if($cari->id_fakultas == 10){
							echo $this->session->flashdata('msg_gagal1');
						}else if($cari->id_fakultas == 20){
							echo $this->session->flashdata('msg_gagal2');
						}else if($cari->id_fakultas == 30){
							echo $this->session->flashdata('msg_gagal3');
						}else if($cari->id_fakultas == 40){
							echo $this->session->flashdata('msg_gagal4');
						}else if($cari->id_fakultas == 50){
							echo $this->session->flashdata('msg_gagal5');
						}else if($cari->id_fakultas == 60){
							echo $this->session->flashdata('msg_gagal6');
						}else if($cari->id_fakultas == 70){
							echo $this->session->flashdata('msg_gagal7');
						}else if($cari->id_fakultas == 80){
							echo $this->session->flashdata('msg_gagal8');
						}
						$this->M_utama->ganti_tlulus($value->no_pendaftaran);
					}
				}else if($cari2 == 1){
					echo $this->session->flashdata('msg_gagal');
				}
			}// end getLulus desc ke atas

			// getLulus desc ke bawah
			$sort2 = $this->M_utama->sort_peserta2($tahun, $ini_skor->skor);
			foreach ($sort2 as $value2){
				$this->M_utama->ganti_tlulus($value2->no_pendaftaran);
			}
			// end getLulus Skor ke Bawah
			$this->M_utama->activity_admin($id_admin,$nama_admin,$ip,$ket);
			echo $this->session->flashdata('msg');
			$this->form_kelulusan();	
		}
	    // $id_admin = $this->session->userdata('id');
	    // $nama_admin = $this->session->userdata('nama_lengkap');
	    // $ip = $this->input->ip_address();
	    // $ket = 'admin mengvalidasi kelulusan';
	    // $tahun = date('Y');
	    // $this->session->set_flashdata('msg','<script>alert("Validasi Kelulusan Berhasil"); </script>');
	    // $this->session->set_flashdata('msg_gagal','<script>alert("Data Mahasiswa Sudah Ada"); </script>');
		// $this->session->set_flashdata('msg_gagal1','<script>alert("Kuota Ushuludin Sudah Habis"); </script>');
		// $this->session->set_flashdata('msg_gagal2','<script>alert("Kuota Tarbiyah Sudah Habis"); </script>');
		// $this->session->set_flashdata('msg_gagal3','<script>alert("Kuota Syarkum Sudah Habis"); </script>');
		// $this->session->set_flashdata('msg_gagal4','<script>alert("Kuota Dakom Sudah Habis"); </script>');
		// $this->session->set_flashdata('msg_gagal5','<script>alert("Kuota Adhum Sudah Habis"); </script>');
		// $this->session->set_flashdata('msg_gagal6','<script>alert("Kuota Psikologi Sudah Habis"); </script>');
		// $this->session->set_flashdata('msg_gagal7','<script>alert("Kuota Saintek Sudah Habis"); </script>');
		// $this->session->set_flashdata('msg_gagal8','<script>alert("Kuota Fisip Sudah Habis"); </script>');
		// $this->session->set_flashdata('msg_lulus','<script>alert("Validasi Kelulusan berhasil"); </script>');
		// // ganti getLulus Skor 60 ke atas
		// $sort = $this->M_utama->sort_peserta($tahun);
		// foreach ($sort as $value) {
		// 	$cari = $this->M_utama->panggil_kuota($value->fakultas);
		// 	$cari2 = $this->M_utama->view_tmp2($value->no_pendaftaran);
		// 	if ($cari2 == 0) {
        //         if($cari->kuota > 0){	
		// 			$this->M_utama->kurang_kuota($value->fakultas);
		// 			$this->M_utama->ganti_lulus($value->no_pendaftaran);
		// 			//$this->M_utama->insert_tmp($value->no_pendaftaran);
        //         }else if($cari->kuota == 0){
        //             if($cari->id_fakultas == 10){
        //                 echo $this->session->flashdata('msg_gagal1');
        //             }else if($cari->id_fakultas == 20){
        //                 echo $this->session->flashdata('msg_gagal2');
        //             }else if($cari->id_fakultas == 30){
        //                 echo $this->session->flashdata('msg_gagal3');
        //             }else if($cari->id_fakultas == 40){
        //                 echo $this->session->flashdata('msg_gagal4');
        //             }else if($cari->id_fakultas == 50){
        //                 echo $this->session->flashdata('msg_gagal5');
        //             }else if($cari->id_fakultas == 60){
        //                 echo $this->session->flashdata('msg_gagal6');
        //             }else if($cari->id_fakultas == 70){
        //                 echo $this->session->flashdata('msg_gagal7');
        //             }else if($cari->id_fakultas == 80){
        //                 echo $this->session->flashdata('msg_gagal8');
        //             }
        //             $this->M_utama->ganti_tlulus($value->no_pendaftaran);
        //         }
        //         echo $this->session->flashdata('msg');
		// 	}else if($cari2 == 1){
		// 	    echo $this->session->flashdata('msg_gagal');
		// 	}
		// }// end getLulus Skor 60 ke atas
		// // getLulus Skor 60 ke bawah
		// $sort2 = $this->M_utama->sort_peserta2($tahun);
		// foreach ($sort2 as $value2){
		//     $this->M_utama->ganti_tlulus($value2->no_pendaftaran);
		// }
		// // end getLulus Skor 70 ke Bawah
		// $this->M_utama->activity_admin($id_admin,$nama_admin,$ip,$ket);
		// $this->v_report_lulus();	
	}
	//end monitoring getLulus	

	//monitoring getLulus tanpa kuota
	public function monitoring_getLulus2(){
		$id_admin = $this->session->userdata('id');
	    $nama_admin = $this->session->userdata('nama_lengkap');
	    $ip = $this->input->ip_address();
	    $ket = 'admin mengvalidasi kelulusan tanpa kuota';
		$tahun = date('Y');
		$ini_skor = $this->M_admin->getSkor()->row();
		
	    $this->session->set_flashdata('msg','<script>alert("Validasi Kelulusan Berhasil"); </script>');
	    $this->session->set_flashdata('msg_gagal','<script>alert("Data Mahasiswa Sudah Ada"); </script>');
		
		if($ini_skor->skor == 0.000){
			$this->session->set_flashdata('set','<script>alert("Silahkan Setting Terlebih Dahulu Skor Minimal Kelulusan");</script>');
			redirect('Auth1/form_kelulusan');
		}else{
			// ganti getLulus desc ke atas
			$sort = $this->M_utama->sort_peserta($tahun, $ini_skor->skor);
			foreach ($sort as $value) {
				// $this->M_utama->ganti_lulus($value->no_pendaftaran);
				$cari2 = $this->M_utama->view_tmp2($value->no_pendaftaran);
				if ($cari2 == 0) {
					$this->M_utama->ganti_lulus($value->no_pendaftaran);
					//$this->M_utama->insert_tmp($value->no_pendaftaran);
					// $this->M_utama->ganti_tlulus($value->no_pendaftaran);
				}else if($cari2 == 1){
					echo $this->session->flashdata('msg_gagal');
				}
			}// end getLulus desc ke atas

			// getLulus desc ke bawah
			$sort2 = $this->M_utama->sort_peserta2($tahun, $ini_skor->skor);
			foreach ($sort2 as $value2){
				$this->M_utama->ganti_tlulus($value2->no_pendaftaran);
			}
			// end getLulus Skor ke Bawah
			$this->M_utama->activity_admin($id_admin,$nama_admin,$ip,$ket);
			echo $this->session->flashdata('msg');
			$this->form_kelulusan();	
		}
	    // $id_admin = $this->session->userdata('id');
	    // $nama_admin = $this->session->userdata('nama_lengkap');
	    // $ip = $this->input->ip_address();
	    // $ket = 'admin mengvalidasi kelulusan';
	    // $tahun = date('Y');
	    // $this->session->set_flashdata('msg','<script>alert("Validasi Kelulusan Berhasil"); </script>');
	    // $this->session->set_flashdata('msg_gagal','<script>alert("Data Mahasiswa Sudah Ada"); </script>');
		// $this->session->set_flashdata('msg_gagal1','<script>alert("Kuota Ushuludin Sudah Habis"); </script>');
		// $this->session->set_flashdata('msg_gagal2','<script>alert("Kuota Tarbiyah Sudah Habis"); </script>');
		// $this->session->set_flashdata('msg_gagal3','<script>alert("Kuota Syarkum Sudah Habis"); </script>');
		// $this->session->set_flashdata('msg_gagal4','<script>alert("Kuota Dakom Sudah Habis"); </script>');
		// $this->session->set_flashdata('msg_gagal5','<script>alert("Kuota Adhum Sudah Habis"); </script>');
		// $this->session->set_flashdata('msg_gagal6','<script>alert("Kuota Psikologi Sudah Habis"); </script>');
		// $this->session->set_flashdata('msg_gagal7','<script>alert("Kuota Saintek Sudah Habis"); </script>');
		// $this->session->set_flashdata('msg_gagal8','<script>alert("Kuota Fisip Sudah Habis"); </script>');
		// $this->session->set_flashdata('msg_lulus','<script>alert("Validasi Kelulusan berhasil"); </script>');
		// // ganti getLulus Skor 60 ke atas
		// $sort = $this->M_utama->sort_peserta($tahun);
		// foreach ($sort as $value) {
		// 	$cari = $this->M_utama->panggil_kuota($value->fakultas);
		// 	$cari2 = $this->M_utama->view_tmp2($value->no_pendaftaran);
		// 	if ($cari2 == 0) {
        //         if($cari->kuota > 0){	
		// 			$this->M_utama->kurang_kuota($value->fakultas);
		// 			$this->M_utama->ganti_lulus($value->no_pendaftaran);
		// 			//$this->M_utama->insert_tmp($value->no_pendaftaran);
        //         }else if($cari->kuota == 0){
        //             if($cari->id_fakultas == 10){
        //                 echo $this->session->flashdata('msg_gagal1');
        //             }else if($cari->id_fakultas == 20){
        //                 echo $this->session->flashdata('msg_gagal2');
        //             }else if($cari->id_fakultas == 30){
        //                 echo $this->session->flashdata('msg_gagal3');
        //             }else if($cari->id_fakultas == 40){
        //                 echo $this->session->flashdata('msg_gagal4');
        //             }else if($cari->id_fakultas == 50){
        //                 echo $this->session->flashdata('msg_gagal5');
        //             }else if($cari->id_fakultas == 60){
        //                 echo $this->session->flashdata('msg_gagal6');
        //             }else if($cari->id_fakultas == 70){
        //                 echo $this->session->flashdata('msg_gagal7');
        //             }else if($cari->id_fakultas == 80){
        //                 echo $this->session->flashdata('msg_gagal8');
        //             }
        //             $this->M_utama->ganti_tlulus($value->no_pendaftaran);
        //         }
        //         echo $this->session->flashdata('msg');
		// 	}else if($cari2 == 1){
		// 	    echo $this->session->flashdata('msg_gagal');
		// 	}
		// }// end getLulus Skor 60 ke atas
		// // getLulus Skor 60 ke bawah
		// $sort2 = $this->M_utama->sort_peserta2($tahun);
		// foreach ($sort2 as $value2){
		//     $this->M_utama->ganti_tlulus($value2->no_pendaftaran);
		// }
		// // end getLulus Skor 70 ke Bawah
		// $this->M_utama->activity_admin($id_admin,$nama_admin,$ip,$ket);
		// $this->v_report_lulus();	
	}
	//end monitoring getLulus tanpa kuota	

	//function delete mahasiswa dan update kuota
	public function updelete_tmp($no_pendaftaran){
	    $id_admin = $this->session->userdata('id');
	    $nama_admin = $this->session->userdata('nama_lengkap');
	    $ip = $this->input->ip_address();
	    $ket = 'mahasiswa lulus di hapus admin';

		$this->M_utama->hapus_lulus($no_pendaftaran);
		
		$cari3 = $this->M_utama->cari_tmp($no_pendaftaran);
		foreach ($cari3 as $key){
			$this->M_utama->tambah_kuota_tmp($key->fakultas);
		}
		
		$this->M_utama->activity_admin($id_admin,$nama_admin,$ip,$ket);
		$this->v_report_lulus();
	}
	//function delete mahasiswa dan update kuota

	
	//function cetak laporan
	public function v_cetak_laporan(){
		$data = array(
		    'data_kecamatan' => $this->M_utama->getAscData_kecamatan(),
		    'data_kelurahan' => $this->M_utama->getAscData_kelurahan(),
			'provinsi' => $this->M_utama->propinsi(),
			'kota' => $this->M_utama->kab_kota(),
			'fakultas' => $this->M_utama->fakultas(),
			'jurusan' => $this->M_utama->jurusan()
		);
		$this->load->view('project_bidikmisi/admin/form_cetak_laporan', $data);
	}

	public function cetak_report(){
	    $id_admin = $this->session->userdata('id');
	    $nama_admin = $this->session->userdata('nama_lengkap');
	    $ip = $this->input->ip_address();
	    $ket = 'admin mencetak laporan';
	    $r = $this->input->post('cetak');

		if($r == 'yatimpiatu'){
			$where1= 40;
			$where2= 20;
			$data = array(
				'user' =>  $this->M_utama->report1($where1,$where2),
				'provinsi' => $this->M_utama->propinsi(),
				'kota' => $this->M_utama->kab_kota(),
				'fakultas' => $this->M_utama->fakultas(),
				'jurusan' => $this->M_utama->jurusan(),
				'title' => 'YATIM PIATU'
			);
			$this->M_utama->activity_admin($id_admin,$nama_admin,$ip,$ket);
			$this->load->view('project_bidikmisi/admin/catak_laporan', $data);
		}

		else if ($r == 'masihada') {
			$where1= 0;
			$where2= 0;
			$data = array(
				'user' =>  $this->M_utama->report1($where1,$where2),
				'provinsi' => $this->M_utama->propinsi(),
				'kota' => $this->M_utama->kab_kota(),
				'fakultas' => $this->M_utama->fakultas(),
				'jurusan' => $this->M_utama->jurusan(),
				'title' => 'ORANG TUA MASIH ADA'
			);
			$this->M_utama->activity_admin($id_admin,$nama_admin,$ip,$ket);
			$this->load->view('project_bidikmisi/admin/catak_laporan', $data);
		}

		else if ($r == 'yatim') {
			$where1= 40;
			$where2= 0;
			$data = array(
				'user' =>  $this->M_utama->report1($where1,$where2),
				'provinsi' => $this->M_utama->propinsi(),
				'kota' => $this->M_utama->kab_kota(),
				'fakultas' => $this->M_utama->fakultas(),
				'jurusan' => $this->M_utama->jurusan(),
				'title' => 'YATIM'
			);
			$this->M_utama->activity_admin($id_admin,$nama_admin,$ip,$ket);
			$this->load->view('project_bidikmisi/admin/catak_laporan', $data);
		}

		else if ($r == 'piatu') {
			$where1= 0;
			$where2= 20;
			$data = array(
				'user' =>  $this->M_utama->report1($where1,$where2),
				'provinsi' => $this->M_utama->propinsi(),
				'kota' => $this->M_utama->kab_kota(),
				'fakultas' => $this->M_utama->fakultas(),
				'jurusan' => $this->M_utama->jurusan(),
				'title' => 'PIATU'
			);
			$this->M_utama->activity_admin($id_admin,$nama_admin,$ip,$ket);
			$this->load->view('project_bidikmisi/admin/catak_laporan', $data);
		}

		else if ($r == 'lulus') {
			$para= 'getLulus';
			$where= 'LULUS';
			$data = array(
				'user' =>  $this->M_utama->report2($para,$where),
				'provinsi' => $this->M_utama->propinsi(),
				'kota' => $this->M_utama->kab_kota(),
				'fakultas' => $this->M_utama->fakultas(),
				'jurusan' => $this->M_utama->jurusan(),
				'title' => 'LULUS'
			);
			$this->M_utama->activity_admin($id_admin,$nama_admin,$ip,$ket);
			$this->load->view('project_bidikmisi/admin/catak_laporan', $data);
		}

		else if ($r == 'tlulus') {
			$para= 'getLulus';
			$where= 'TIDAK LULUS';
			$data = array(
				'user' =>  $this->M_utama->report2($para,$where),
				'provinsi' => $this->M_utama->propinsi(),
				'kota' => $this->M_utama->kab_kota(),
				'fakultas' => $this->M_utama->fakultas(),
				'jurusan' => $this->M_utama->jurusan(),
				'title' => 'TIDAK LULUS'
			);
			$this->M_utama->activity_admin($id_admin,$nama_admin,$ip,$ket);
			$this->load->view('project_bidikmisi/admin/catak_laporan', $data);
		}

		else if ($r == 'pasantren') {
			$para= 'mondok';
			$where= 'Ya';
			$data = array(
				'user' =>  $this->M_utama->report2($para,$where),
				'provinsi' => $this->M_utama->propinsi(),
				'kota' => $this->M_utama->kab_kota(),
				'fakultas' => $this->M_utama->fakultas(),
				'jurusan' => $this->M_utama->jurusan(),
				'cetak' => 'PernahPasantren',
				'title' => 'PERNAH PESANTREN'
			);
			$this->M_utama->activity_admin($id_admin,$nama_admin,$ip,$ket);
			$this->load->view('project_bidikmisi/admin/catak_laporan', $data);
		}

		else if ($r == 'tpasantren') {
			$para= 'mondok';
			$where= 'tidak';
			$data = array(
				'user' =>  $this->M_utama->report2($para,$where),
				'provinsi' => $this->M_utama->propinsi(),
				'kota' => $this->M_utama->kab_kota(),
				'fakultas' => $this->M_utama->fakultas(),
				'jurusan' => $this->M_utama->jurusan(),
				'title' => 'TIDAK PERNAH PESANTREN'
			);
			$this->M_utama->activity_admin($id_admin,$nama_admin,$ip,$ket);
			$this->load->view('project_bidikmisi/admin/catak_laporan', $data);
		}

		else if ($r == 'sudah_pemberkasan') {
			$para= 'pemberkasan';
			$where= 1;
			$data = array(
				'user' =>  $this->M_utama->report_reg2($para,$where),
				'provinsi' => $this->M_utama->propinsi(),
				'kota' => $this->M_utama->kab_kota(),
				'fakultas' => $this->M_utama->fakultas(),
				'jurusan' => $this->M_utama->jurusan(),
				'title' => 'SUDAH PEMBERKASAN'
			);
			$this->M_utama->activity_admin($id_admin,$nama_admin,$ip,$ket);
			$this->load->view('project_bidikmisi/admin/catak_laporan', $data);
		}

		else if ($r == 'belum_pemberkasan') {
			$para= 'pemberkasan';
			$where= 0;
			$data = array(
				'user' =>  $this->M_utama->report_reg2($para,$where),
				'provinsi' => $this->M_utama->propinsi(),
				'kota' => $this->M_utama->kab_kota(),
				'fakultas' => $this->M_utama->fakultas(),
				'jurusan' => $this->M_utama->jurusan(),
				'title' => 'BELUM PEMBERKASAN'
			);
			$this->M_utama->activity_admin($id_admin,$nama_admin,$ip,$ket);
			$this->load->view('project_bidikmisi/admin/catak_laporan', $data);
		}
	}

	public function cetak_daerah(){
	    $id_admin = $this->session->userdata('id');
	    $nama_admin = $this->session->userdata('nama_lengkap');
	    $ip = $this->input->ip_address();
	    $ket = 'admin mencetak laporan';
		$provinsi = $this->input->post('provinsi');
		$kota = $this->input->post('kota');

		$data = array(
			'user' => $this->M_utama->report4($provinsi,$kota),
			'provinsi' => $this->M_utama->propinsi(),
			'kota' => $this->M_utama->kab_kota(),
			'fakultas' => $this->M_utama->fakultas(),
			'jurusan' => $this->M_utama->jurusan()
		);
        $this->M_utama->activity_admin($id_admin,$nama_admin,$ip,$ket);
		$this->load->view('project_bidikmisi/admin/catak_laporan', $data);
	}

	public function cetak_fk(){
	    $id_admin = $this->session->userdata('id');
	    $nama_admin = $this->session->userdata('nama_lengkap');
	    $ip = $this->input->ip_address();
	    $ket = 'admin mencetak laporan';
		$fk = $this->input->post('fakultas');

		$data = array(
			'user' => $this->M_utama->getbyfakultas($fk),
			'provinsi' => $this->M_utama->propinsi(),
			'kota' => $this->M_utama->kab_kota(),
			'fakultas' => $this->M_utama->fakultas(),
			'jurusan' => $this->M_utama->jurusan()
		);
        $this->M_utama->activity_admin($id_admin,$nama_admin,$ip,$ket);
		$this->load->view('project_bidikmisi/admin/catak_laporan', $data);
	}
	
	public function cetak_j(){
	    $id_admin = $this->session->userdata('id');
	    $nama_admin = $this->session->userdata('nama_lengkap');
	    $ip = $this->input->ip_address();
	    $ket = 'admin mencetak laporan per-jurusan';
		$j = $this->input->post('jurusan');

		$data = array(
			'user' => $this->M_utama->getbyjurusan($j),
			'provinsi' => $this->M_utama->propinsi(),
			'kota' => $this->M_utama->kab_kota(),
			'fakultas' => $this->M_utama->fakultas(),
			'jurusan' => $this->M_utama->jurusan()
		);
        $this->M_utama->activity_admin($id_admin,$nama_admin,$ip,$ket);
		$this->load->view('project_bidikmisi/admin/catak_laporan', $data);
	}
	
	public function cetak_th(){
        $id_admin = $this->session->userdata('id');
	    $nama_admin = $this->session->userdata('nama_lengkap');
	    $ip = $this->input->ip_address();
	    $ket = 'admin mencetak laporan';
  	    $tahun = $this->input->post('tahun');
  	    
  	    $data = array(
  		'user' =>  $this->M_utama->report3($tahun),
  		'provinsi' => $this->M_utama->propinsi(),
  		'kota' => $this->M_utama->kab_kota(),
  		'fakultas' => $this->M_utama->fakultas(),
  		'jurusan' => $this->M_utama->jurusan()
  	);
  	$this->M_utama->activity_admin($id_admin,$nama_admin,$ip,$ket);
  	$this->load->view('project_bidikmisi/admin/catak_laporan', $data);
  }
	//function cetak laporan
	
	//view tahun lulus
	public function view11(){
		$data = array(
			'tahun' => $this->M_utama->getTahun_lulus()->result(),
			'data_report' => $this->M_utama->getTable_default('mastermhs_control_report')->result(),
		);
		$this->load->view('project_bidikmisi/admin/setting_tahun_lulus', $data);
	}

	//function setting tahun lulus & report Bidikmisi semester mahasiswa
	public function settsr(){
	    $id_admin = $this->session->userdata('id');
	    $nama_admin = $this->session->userdata('nama_lengkap');
	    $ip = $this->input->ip_address();
	    $ket = 'admin input tahun lulus sekolah';
	    $ket2 = 'admin setting semester report bidikmisi mahasiswa';

		$tahun_lulus = $this->input->post('tahun_lulus');
		$sr = $this->input->post('sr');

		if($tahun_lulus){
			$data = [
				'tahun_lulus' => $tahun_lulus
			];

			$this->M_utama->insert_tahun_lulus($data);
			$this->M_utama->activity_admin($id_admin,$nama_admin,$ip,$ket);
			$this->session->set_flashdata('berhasil_tahun','<script>alert("Tambah Tahun Lulus Berhasil"); </script>');
			echo $this->session->flashdata('berhasil_tahun');
		}else if($sr){
			$control_id = $this->input->post('control_id');
			$data = [
				'command' => $sr
			];
			$this->M_utama->edit_sr($control_id, $data);
			$this->M_utama->activity_admin($id_admin,$nama_admin,$ip,$ket2);
			$this->session->set_flashdata('berhasil_sr','<script>alert("Setting Report Semester Berhasil"); </script>');
			echo $this->session->flashdata('berhasil_sr');
		}
		$this->view11();
	}
	
	//function view reset password mhs
	public function view12(){
		$this->load->view('project_bidikmisi/admin/reset_password_mhs');
	}

	//reset password mahasiswa
	public function reset_password_mhs(){
	    $id_admin = $this->session->userdata('id');
	    $nama_admin = $this->session->userdata('nama_lengkap');
	    $ip = $this->input->ip_address();
	    $ket = 'admin reset password pendaftar';
		$no_pendaftaran = $this->input->post('no_pendaftaran');
		$password_baru = $this->input->post('password_baru');
		$confirm = $this->input->post('confirm_password');

		$data = array(
			'no_pendaftaran' => $no_pendaftaran
		);  
		$cek_user_mhs = $this->M_utama->cek_user_mhs($data);

		if($cek_user_mhs->num_rows() == 1){
			if($password_baru != $confirm){
				$this->session->set_flashdata('tidak_sama','<script>alert("Password Tidak Sama, Silahkan input Ulang");</script>');
				echo $this->session->flashdata('tidak_sama');
			}else{
				$data = [
					'pin' => sha1(md5(sha1(md5(sha1($confirm)))))
				];

				$this->M_utama->edit_data_mahasiswa(sha1(md5(sha1(md5(sha1($no_pendaftaran))))), $data);
				$this->session->set_flashdata('sama', '<script>alert("Password Berhasil di Reset");</script>');
				echo $this->session->flashdata('sama');
			}
		}else{
			$this->session->set_flashdata('user_kosong','<script>alert("Gagal Reset Password, No Pendaftaran Tidak Ada, Silahkan Cek Kembali No Pendaftaran Mahasiswa"); </script>');
			echo $this->session->flashdata('user_kosong');
		}
		$this->M_utama->activity_admin($id_admin,$nama_admin,$ip,$ket);
		$this->view12();
	}

	//function delete tahun_lulus
	public function delete_tahun_lulus($id_tahun){
	    $id_admin = $this->session->userdata('id');
	    $nama_admin = $this->session->userdata('nama_lengkap');
	    $ip = $this->input->ip_address();
	    $ket = 'admin hapus tahun lulus sekolah';
		$this->M_utama->delete_tahun_lulus($id_tahun);
		$this->M_utama->activity_admin($id_admin,$nama_admin,$ip,$ket);
		$this->session->set_flashdata('delete_berhasil','<script>alert("Delete Tahun Lulus Berhasil"); </script>');
		echo $this->session->flashdata('delete_berhasil');
		$this->view11();
	}
    
    //function backup data peserta	
	public function view10(){
		$this->load->view('project_bidikmisi/admin/backup_peserta');
	}

	public function backup(){
	    $id_admin = $this->session->userdata('id');
	    $nama_admin = $this->session->userdata('nama_lengkap');
	    $ip = $this->input->ip_address();
	    $ket = 'admin mengbackup database';
		$this->load->dbutil();
		$prefs = array(     
			'format'      => 'zip',             
			'filename'    => 'bidikmisi.sql'
		);
	  	
	  	$backup = $this->dbutil->backup($prefs); 
      	$db_name = date("d-m-Y") .'.zip'; //NAMAFILENYA
      	$save = 'pathtobkfolder/'.$db_name;
      	$this->load->helper('file');
      	write_file($save, $backup); 
      	$this->load->helper('download');
      	force_download($db_name, $backup);
      	$this->M_utama->activity_admin($id_admin,$nama_admin,$ip,$ket);

      	redirect('Auth1/view10');
    }
      
  	public function v_report_tahunan(){
	    $ambil_th3 = date('Y');
	  	$data = array(
	  		'user' =>  $this->M_utama->getTable($ambil_th3),
	  		'provinsi' => $this->M_utama->propinsi(),
	  		'kota' => $this->M_utama->kab_kota(),
	  		'fakultas' => $this->M_utama->fakultas(),
	  		'jurusan' => $this->M_utama->jurusan(),
	  		'parameter_judul' => 'Per-Tahun'
	  	);
	  	$this->load->view('project_bidikmisi/admin/data_pendaftar4', $data);
	}

  	public function v_report_tahunan2(){
	  	$tahun = $this->input->post('tahun');
	  	$data = array(
	  		'user' =>  $this->M_utama->report3($tahun),
	  		'provinsi' => $this->M_utama->propinsi(),
	  		'kota' => $this->M_utama->kab_kota(),
	  		'fakultas' => $this->M_utama->fakultas(),
	  		'jurusan' => $this->M_utama->jurusan(),
	  		'parameter_judul' => 'Per-Tahun'
	  	);
	  	$this->load->view('project_bidikmisi/admin/data_pendaftar4', $data);
	}
  
    //get data PMB
    public function getAPI(){
        $id_admin = $this->session->userdata('id');
	    $nama_admin = $this->session->userdata('nama_lengkap');
	    $ip = $this->input->ip_address();
		$ket = 'admin insert data pmb';
		$ket2 = 'admin gagal insert data pmb';
	    $date_tahun = date('Y');
	    
	    $stream_opts = [
            "ssl" => [
                "verify_peer"=>false,
                "verify_peer_name"=>false,
            ]
        ];  
		$json_data_user = file_get_contents("https://pmb-api.uinsgd.ac.id/url/Api/Daftar/Users/getUser/PMBUIN/tahun", false, stream_context_create($stream_opts));
		$data_user = json_decode($json_data_user, true);
		return print_r($data_user);
		$this->session->set_flashdata('berhasil_tambah_pmb','<script>alert("Data PMB Berhasil ditambahkan"); </script>');
		$this->session->set_flashdata('gagal_tambah_pmb','<script>alert("Data PMB Gagal ditambahkan"); </script>');
		
		$array_baru = array();
		if($data_user != NULL){
			foreach($data_user['data'] as $baru){
				if($baru['verifikasi'] == 'SUDAH' || $baru['verifikasi'] == 'SUDAH VERIFIKASI'){
					$cari_mhs = $this->M_utama->getMhs($baru['nomor_peserta'], $date_tahun);
					if($cari_mhs == 0){
						$array_baru[] = array(
							'no_pendaftaran' => $baru['nomor_peserta'],
							'tanggal_lahir' => $baru['tgl_lhr'],
							'pin' => sha1(md5(sha1(md5(sha1($baru['tgl_lhr']))))),
							'tahun' => date('Y')
						);
					}    
				}
			}
			$this->M_utama->insert_multiple($array_baru);
			echo $this->session->flashdata('berhasil_tambah_pmb');
			$this->M_utama->activity_admin($id_admin,$nama_admin,$ip,$ket);
		}else{
			echo $this->session->flashdata('gagal_tambah_pmb');
			$this->M_utama->activity_admin($id_admin,$nama_admin,$ip,$ket2);
		}
		
		/*
		if($array_baru == TRUE){
		    $this->M_utama->insert_multiple($array_baru);
			echo $this->session->flashdata('berhasil_tambah_pmb');
			$this->M_utama->activity_admin($id_admin,$nama_admin,$ip,$ket);
		}else if($array_baru == FALSE){
			echo $this->session->flashdata('gagal_tambah_pmb');
			$this->M_utama->activity_admin($id_admin,$nama_admin,$ip,$ket);
		}*/
		$this->view10();
	}
	
	//cetak dokumen pendukung
	public function cetak_dokumen($no_pendaftaran, $param){
	    $id_admin = $this->session->userdata('id');
	    $nama_admin = $this->session->userdata('nama_lengkap');
	    $ip = $this->input->ip_address();
	    $ket = 'admin cetak dokumen pendukung';
	    $this->M_utama->activity_admin($id_admin,$nama_admin,$ip,$ket);
		$data = array(
			'data_mhs' => $this->M_utama->getData_mhs($no_pendaftaran),
			'param' => $param
		);
		$this->M_utama->activity_admin($id_admin,$nama_admin,$ip,$ket);
		$this->load->view('project_bidikmisi/admin/cetak_dokumen', $data);
	}

	//view data server side
	public function view13(){
		$this->load->view('project_bidikmisi/admin/data_server_side');
	}

	//hapus data di data peserta
	public function delete_permanen($no_pendaftaran){
		$id_admin = $this->session->userdata('id');
	    $nama_admin = $this->session->userdata('nama_lengkap');
	    $ip = $this->input->ip_address();
	    $ket = 'admin hapus data mahasiswa secara permanen';
		$this->M_utama->hapus_permanen_mhs($no_pendaftaran);
		$search_tmp = $this->M_utama->view_tmp2($no_pendaftaran);
		if($search_tmp == 1){
			$this->M_utama->hapus_permanen_tmp($no_pendaftaran);
		}
		$this->M_utama->activity_admin($id_admin,$nama_admin,$ip,$ket);
		$this->view1();
	}

	//view data peserta verifikasi
	public function v_report_verifikasi(){
		$ambil_th2 = date('Y');
		$data = array(
			'user' => $this->M_utama->get_verifikasi($ambil_th2),
			'provinsi' => $this->M_utama->propinsi(),
			'kota' => $this->M_utama->kab_kota(),
			'fakultas' => $this->M_utama->fakultas(),
			'jurusan' => $this->M_utama->jurusan(),
			'parameter_judul' => 'Terverifikasi'
		);

		$this->load->view('project_bidikmisi/admin/data_pendaftar', $data);
	}
	
	//view tentang website
	public function about(){
		$this->load->view('project_bidikmisi/about/about');
	}
	
	//view upload document bidikmisi
	public function view14(){
	    $data = array(
	        'data_document' => $this->M_utama->getData_document()->result(),
	        'data_document2' => $this->M_utama->getData_document2()->result()
	    );
	    $this->load->view('project_bidikmisi/admin/document', $data);
	}
	
	//function upload_document bidikmisi
	public function upload_document(){
	    $id_admin = $this->session->userdata('id');
	    $nama_admin = $this->session->userdata('nama_lengkap');
	    $ip = $this->input->ip_address();
	    $ket = 'admin upload dokumen bidikmisi';
	    $ket2 = 'Admin upload dokumen Tahap 2 bidikmisi';
	    $year = $this->input->post('year');
		
		$config['upload_path'] 		= './assets/document/';
		$config['allowed_types'] 	= 'docx|doc';
		$config['max_size']			= 1024;

		$this->load->library('upload', $config);
		
		$id_document = $this->session->userdata('id_document');
		$get_document = $this->M_utama->getDocument($id_document);
		
		if(!$this->upload->do_upload('document')){
		    $this->session->set_flashdata('upload_document_gagal', '<script>alert("Upload Document Gagal, Silahkan Cek Kembali Ukuran dan Format File Document Anda"); </script>' );
		    echo $this->session->flashdata('upload_document_gagal');
		}else{
			$file = $this->upload->data();
			unlink('assets/document/'.$get_document->nama_document);

			$data = ['nama_document' => $file['file_name'], 'year' => $year];
			$this->M_utama->edit_document($id_document, $data);
			$this->M_utama->activity_admin($id_admin,$nama_admin,$ip,$ket);
			$this->session->set_flashdata('update_document_berhasil', '<script>alert("Data document Berhasil diUpdate"); </script>');
			echo $this->session->flashdata('update_document_berhasil');
		}
		$this->view14();
	}
	
	//document tahap 2 upload
	public function upload_document2(){
	    $id_admin = $this->session->userdata('id');
	    $nama_admin = $this->session->userdata('nama_lengkap');
	    $ip = $this->input->ip_address();
	    $ket2 = 'Admin upload dokumen Tahap 2 bidikmisi';
	    $year = $this->input->post('year');
	    
        $config['upload_path'] 		= './assets/document/';
		$config['allowed_types'] 	= 'PDF|pdf';
		$config['max_size']			= 3072;

		$this->load->library('upload', $config);
		
		$id_document2 = $this->session->userdata('id_document2');
		$get_document2 = $this->M_utama->getDocument($id_document2);
		
	    if(!$this->upload->do_upload('document2')){
		    $this->session->set_flashdata('upload_document_gagal', '<script>alert("Upload Document Gagal, Silahkan Cek Kembali Ukuran dan Format File Document Anda"); </script>' );
		    echo $this->session->flashdata('upload_document_gagal');
		}else{
			$file = $this->upload->data();
			unlink('assets/document/'.$get_document2->nama_document);

			$data = ['nama_document' => $file['file_name'], 'year' => $year];
			$this->M_utama->edit_document($id_document2, $data);
			$this->M_utama->activity_admin($id_admin,$nama_admin,$ip,$ket2);
			$this->session->set_flashdata('update_document_berhasil', '<script>alert("Data document Berhasil diUpdate"); </script>');
			echo $this->session->flashdata('update_document_berhasil');
		}
		$this->view14();
	}
	
	public function cetak_formulir_mhs($no_pendaftaran){
		$data = array(
			'data' =>  $this->M_utama->getData_mhs($no_pendaftaran),
			'propinsi' => $this->M_utama->propinsi(),
			'data_kab_kota' => $this->M_utama->kab_kota(),
			'fakultas' => $this->M_utama->fakultas(),
			'jurusan' => $this->M_utama->jurusan()
		);

		$this->load->view('project_bidikmisi/admin/cetak_formulir', $data);
	}
	
	public function reset_reg($no_pendaftaran){
	    $id_admin = $this->session->userdata('id');
	    $nama_admin = $this->session->userdata('nama_lengkap');
	    $ip = $this->input->ip_address();
	    $ket = 'Admin Reset Registrasi akun Mahasiswa';
	    
	    $data = [
	       'reg' => 0
	    ];
		$this->M_utama->edit_data_mahasiswa($no_pendaftaran, $data);
		$this->M_utama->activity_admin($id_admin,$nama_admin,$ip,$ket);
		$this->session->set_flashdata('berhasil','<script>alert("Reset Registrasi Berhasil"); </script>');
		echo $this->session->flashdata('berhasil');
		$this->view5($no_pendaftaran);
	}
	
	//view data peserta pending
	public function v_report_pending(){
		$ambil_th2 = date('Y');
		$data = array(
			'user' => $this->M_utama->get_pending($ambil_th2),
			'provinsi' => $this->M_utama->propinsi(),
			'kota' => $this->M_utama->kab_kota(),
			'fakultas' => $this->M_utama->fakultas(),
			'jurusan' => $this->M_utama->jurusan(),
			'parameter_judul' => 'Pending'
		);

		$this->load->view('project_bidikmisi/admin/data_pendaftar', $data);
	}
	
	//view report per-fakultas
	public function v_report_fakultas(){
		$year = date('Y');
		$data = array(
			'user' => $this->M_utama->getTable2($year),
			'provinsi' => $this->M_utama->propinsi(),
			'kota' => $this->M_utama->kab_kota(),
			'fakultas' => $this->M_utama->fakultas(),
			'jurusan' => $this->M_utama->jurusan(),
			'parameter_judul' => 'Per-Fakultas'
		);

		$this->load->view('project_bidikmisi/admin/data_pendaftar6', $data);
	}
	
	//view report per-fakultas2
	public function v_report_fakultas2(){
        $fakultas = $this->input->post('fakultas');
        
		$data = array(
			'user' => $this->M_utama->report_per_fakultas($fakultas),
			'provinsi' => $this->M_utama->propinsi(),
			'kota' => $this->M_utama->kab_kota(),
			'fakultas' => $this->M_utama->fakultas(),
			'jurusan' => $this->M_utama->jurusan(),
			'parameter_judul' => 'Per-Fakultas'
		);

		$this->load->view('project_bidikmisi/admin/data_pendaftar6', $data);
	}
	
	//view report per-jurusan
	public function v_report_jurusan(){
		$year = date('Y');
		$data = array(
			'user' => $this->M_utama->getTable2($year),
			'provinsi' => $this->M_utama->propinsi(),
			'kota' => $this->M_utama->kab_kota(),
			'fakultas' => $this->M_utama->fakultas(),
			'jurusan' => $this->M_utama->jurusan(),
			'parameter_judul' => 'Per-Jurusan'
		);

		$this->load->view('project_bidikmisi/admin/data_pendaftar7', $data);
	}
	
	//view report per-jurusan2
	public function v_report_jurusan2(){
        $jurusan = $this->input->post('jurusan');
        
		$data = array(
			'user' => $this->M_utama->report_per_jurusan($jurusan),
			'provinsi' => $this->M_utama->propinsi(),
			'kota' => $this->M_utama->kab_kota(),
			'fakultas' => $this->M_utama->fakultas(),
			'jurusan' => $this->M_utama->jurusan(),
			'parameter_judul' => 'Per-Jurusan'
		);

		$this->load->view('project_bidikmisi/admin/data_pendaftar7', $data);
	}
	
	//edit data mahasiswa (meluluskan oleh admin)
	public function getLulus_byAdmin($no_pendaftaran){
	    $id_admin = $this->session->userdata('id');
	    $nama_admin = $this->session->userdata('nama_lengkap');
	    $ip = $this->input->ip_address();
		$ket = 'Admin Meluluskan Mahasiswa';
		$ini_skor = $this->M_admin->getSkor()->row();
	    
	    $this->session->set_flashdata('lulus','<script>alert("Validasi Skor Lulus Berhasil");</script>');
	    $data = [
	       'skor' => $ini_skor->skor,
	       'getLulus' => 'LULUS'   
	   ];
	    $this->M_utama->edit_data_mahasiswa($no_pendaftaran, $data);
	    $this->M_utama->activity_admin($id_admin, $nama_admin, $ip, $ket);
	    echo $this->session->flashdata('lulus');
	    $this->view5($no_pendaftaran);
	}
	
	//edit data mahasiswa (TIDAK diluluskan oleh admin)
	public function getTidakLulus_byAdmin($no_pendaftaran){
	    $id_admin = $this->session->userdata('id');
	    $nama_admin = $this->session->userdata('nama_lengkap');
	    $ip = $this->input->ip_address();
	    $ket = 'Admin MentidakLuluskan Mahasiswa';
	    
	    $this->session->set_flashdata('tidak_lulus','<script>alert("Validasi Skor Tidak Lulus Berhasil");</script>');
	    $data = [
	       'skor' => 0.000,
	       'getLulus' => 'TIDAK LULUS'   
	   ];
	    $this->M_utama->edit_data_mahasiswa($no_pendaftaran, $data);
	    $this->M_utama->activity_admin($id_admin, $nama_admin, $ip, $ket);
	    echo $this->session->flashdata('tidak_lulus');
	    $this->view5($no_pendaftaran);
	}
	
	//export excel data peserta
	public function export_excel(){
	    $id_admin = $this->session->userdata('id');
	    $nama_admin = $this->session->userdata('nama_lengkap');
	    $ip = $this->input->ip_address();
	    $param = $this->input->post('export');
	    
	    if($param == 'data_peserta'){
    	    $ambil_th2 = date('Y');
    	    $ket = 'Admin Export Excel Data Peserta';
    		$data = array(
    			'user' => $this->M_utama->getTable($ambil_th2),
    			'provinsi' => $this->M_utama->propinsi(),
    			'kota' => $this->M_utama->kab_kota(),
    			'fakultas' => $this->M_utama->fakultas(),
    			'jurusan' => $this->M_utama->jurusan(),
    			'title' => "Export Data Peserta Bidikmisi",
    			'title2' => ""
    		);
    		$this->M_utama->activity_admin($id_admin, $nama_admin, $ip, $ket);
	    }else if($param == 'data_peserta_lulus'){
	        $tahun = date('Y');
	        $ket = 'Admin Export Excel Data Peserta Lulus';
		    $data = array(
    			'user' =>  $this->M_utama->view_tmp($tahun),
    			'provinsi' => $this->M_utama->propinsi(),
    			'kota' => $this->M_utama->kab_kota(),
    			'fakultas' => $this->M_utama->fakultas(),
    			'jurusan' => $this->M_utama->jurusan(),
    			'title' => "Export Data Peserta Lulus Bidikmisi",
    			'title2' => "LULUS"
    		);
    		$this->M_utama->activity_admin($id_admin, $nama_admin, $ip, $ket);
	    }else if($param == 'data_peserta_tdk_lulus'){
	        $para= 'getLulus';
    		$where= 'TIDAK LULUS';
    		$ket = 'Admin Export Excel Data Peserta Tidak Lulus';
    		$data = array(
    			'user' =>  $this->M_utama->report2($para,$where),
    			'provinsi' => $this->M_utama->propinsi(),
    			'kota' => $this->M_utama->kab_kota(),
    			'fakultas' => $this->M_utama->fakultas(),
    			'jurusan' => $this->M_utama->jurusan(),
    			'title' => "Export Data Peserta Tidak Lulus Bidikmisi",
    			'title2' => "TIDAK LULUS"
    		);
    		$this->M_utama->activity_admin($id_admin, $nama_admin, $ip, $ket);
	    }else if($param == 'data_peserta_verifikasi'){
	        $ambil_th2 = date('Y');
	        $ket = 'Admin Export Excel Data Peserta Verifikasi';
    		$data = array(
    			'user' => $this->M_utama->get_verifikasi($ambil_th2),
    			'provinsi' => $this->M_utama->propinsi(),
    			'kota' => $this->M_utama->kab_kota(),
    			'fakultas' => $this->M_utama->fakultas(),
    			'jurusan' => $this->M_utama->jurusan(),
    			'title' => "Export Data Peserta Verifikasi Bidikmisi",
    			'title2' => "VERIFIKASI"
    		);
    		$this->M_utama->activity_admin($id_admin, $nama_admin, $ip, $ket);
	    }else if($param == 'data_peserta_pending'){
	        $ambil_th2 = date('Y');
	        $ket = 'Admin Export Excel Data Peserta Pending';
    		$data = array(
    			'user' => $this->M_utama->get_pending($ambil_th2),
    			'provinsi' => $this->M_utama->propinsi(),
    			'kota' => $this->M_utama->kab_kota(),
    			'fakultas' => $this->M_utama->fakultas(),
    			'jurusan' => $this->M_utama->jurusan(),
    			'title' => "Export Data Peserta Pending Bidikmisi",
    			'title2' => "PENDING"
    		);
    		$this->M_utama->activity_admin($id_admin, $nama_admin, $ip, $ket);
	    }else if($param == 'data_peserta_ortumeninggal'){
	        $where1= 40;
    		$where2= 20;
    		$ket = 'Admin Export Excel Data Peserta Orang Tua Meninggal';
    		$data = array(
    			'user' =>  $this->M_utama->report1($where1,$where2),
    			'provinsi' => $this->M_utama->propinsi(),
    			'kota' => $this->M_utama->kab_kota(),
    			'fakultas' => $this->M_utama->fakultas(),
    			'jurusan' => $this->M_utama->jurusan(),
    			'title' => "Export Data Peserta Orang Tua Meninggal Bidikmisi",
    			'title2' => "ORANG TUA MENINGGAL"
    		);
    		$this->M_utama->activity_admin($id_admin, $nama_admin, $ip, $ket);
	    }else if($param == 'data_peserta_ortumasihada'){
	        $where1= 0;
    		$where2= 0;
    		$ket = 'Admin Export Excel Data Peserta Orang Tua Masih Ada';
    		$data = array(
    			'user' =>  $this->M_utama->report1($where1,$where2),
    			'provinsi' => $this->M_utama->propinsi(),
    			'kota' => $this->M_utama->kab_kota(),
    			'fakultas' => $this->M_utama->fakultas(),
    			'jurusan' => $this->M_utama->jurusan(),
    			'title' => "Export Data Peserta Orang Tua Masih Ada Bidikmisi",
    			'title2' => "ORANG TUA MASIH ADA"
    		);
    		$this->M_utama->activity_admin($id_admin, $nama_admin, $ip, $ket);
	    }else if($param == 'data_peserta_ayahmeninggal'){
	        $where1= 40;
    		$where2= 0;
    		$ket = 'Admin Export Excel Data Peserta Ayah Meninggal';
    		$data = array(
    			'user' =>  $this->M_utama->report1($where1,$where2),
    			'provinsi' => $this->M_utama->propinsi(),
    			'kota' => $this->M_utama->kab_kota(),
    			'fakultas' => $this->M_utama->fakultas(),
    			'jurusan' => $this->M_utama->jurusan(),
    			'title' => "Export Data Peserta Ayah Meninggal Bidikmisi",
    			'title2' => "AYAH MENINGGAL"
    		);
    		$this->M_utama->activity_admin($id_admin, $nama_admin, $ip, $ket);
	    }else if($param == 'data_peserta_ibumeninggal'){
	        $where1= 0;
    		$where2= 20;
    		$ket = 'Admin Export Excel Data Peserta Ibu Meninggal';
    		$data = array(
    			'user' =>  $this->M_utama->report1($where1,$where2),
    			'provinsi' => $this->M_utama->propinsi(),
    			'kota' => $this->M_utama->kab_kota(),
    			'fakultas' => $this->M_utama->fakultas(),
    			'jurusan' => $this->M_utama->jurusan(),
    			'title' => "Export Data Peserta Ibu Meninggal Bidikmisi",
    			'title2' => "IBU MENINGGAL"
    		);
    		$this->M_utama->activity_admin($id_admin, $nama_admin, $ip, $ket);
	    }else if($param == 'data_peserta_psantren'){
	        $para= 'mondok';
    		$where= 'Ya';
    		$ket = 'Admin Export Excel Data Peserta Pernah Pesantren';
    		$data = array(
    			'user' =>  $this->M_utama->report2($para,$where),
    			'provinsi' => $this->M_utama->propinsi(),
    			'kota' => $this->M_utama->kab_kota(),
    			'fakultas' => $this->M_utama->fakultas(),
    			'jurusan' => $this->M_utama->jurusan(),
    			'title' => "Export Data Peserta Pernah Pesantren Bidikmisi",
    			'title2' => "PERNAH PESANTREN"
    		);
    		$this->M_utama->activity_admin($id_admin, $nama_admin, $ip, $ket);
	    }else if($param == 'data_peserta_tdkpsantren'){
	        $para= 'mondok';
    		$where= 'Tidak';
    		$ket = 'Admin Export Excel Data Peserta Tidak Pernah Pesantren';
    		$data = array(
    			'user' =>  $this->M_utama->report2($para,$where),
    			'provinsi' => $this->M_utama->propinsi(),
    			'kota' => $this->M_utama->kab_kota(),
    			'fakultas' => $this->M_utama->fakultas(),
    			'jurusan' => $this->M_utama->jurusan(),
    			'title' => "Export Data Peserta Tidak Pernah Pesantren Bidikmisi",
    			'title2' => "TIDAK PERNAH PESANTREN"
    		);
    		$this->M_utama->activity_admin($id_admin, $nama_admin, $ip, $ket);
	    }else if($param == 'data_peserta_sudah_pemberkasan'){
	        $para= 'pemberkasan';
    		$where= 1;
    		$ket = 'Admin Export Excel Data Peserta Sudah Pemberkasan';
    		$data = array(
    			'user' =>  $this->M_utama->report_reg2($para,$where),
    			'provinsi' => $this->M_utama->propinsi(),
    			'kota' => $this->M_utama->kab_kota(),
    			'fakultas' => $this->M_utama->fakultas(),
    			'jurusan' => $this->M_utama->jurusan(),
    			'title' => "Export Data Peserta Sudah Pemberkasan Bidikmisi",
    			'title2' => "SUDAH PEMBERKASAN"
    		);
    		$this->M_utama->activity_admin($id_admin, $nama_admin, $ip, $ket);
	    }else if($param == 'data_peserta_belum_pemberkasan'){
	        $para = 'pemberkasan';
    		$where = 0;
    		$ket = 'Admin Export Excel Data Peserta Belum Pemberkasan';
    		$data = array(
    			'user' =>  $this->M_utama->report_reg2($para,$where),
    			'provinsi' => $this->M_utama->propinsi(),
    			'kota' => $this->M_utama->kab_kota(),
    			'fakultas' => $this->M_utama->fakultas(),
    			'jurusan' => $this->M_utama->jurusan(),
    			'title' => "Export Data Peserta Belum Pemberkasan Bidikmisi",
    			'title2' => "BELUM PEMBERKASAN"
    		);
    		$this->M_utama->activity_admin($id_admin, $nama_admin, $ip, $ket);
	    }
		$this->load->view('project_bidikmisi/admin/export_excel', $data);
	}
	
	public function export_excel2(){
	    $id_admin = $this->session->userdata('id');
	    $nama_admin = $this->session->userdata('nama_lengkap');
	    $ip = $this->input->ip_address();
	    $ket = 'Admin Export Excel Data Peserta Per-Fakultas';
		$fk = $this->input->post('fakultas');

		$data = array(
			'user' => $this->M_utama->getbyfakultas($fk),
			'provinsi' => $this->M_utama->propinsi(),
			'kota' => $this->M_utama->kab_kota(),
			'fakultas' => $this->M_utama->fakultas(),
			'jurusan' => $this->M_utama->jurusan(),
			'title' => "Export Data Peserta Per-Fakultas Bidikmisi",
    		'title2' => "PER-FAKULTAS"
		);
        $this->M_utama->activity_admin($id_admin,$nama_admin,$ip,$ket);
		$this->load->view('project_bidikmisi/admin/export_excel', $data);
	}
	
	public function export_excel3(){
	    $id_admin = $this->session->userdata('id');
	    $nama_admin = $this->session->userdata('nama_lengkap');
	    $ip = $this->input->ip_address();
	    $ket = 'Admin Export Excel Data Peserta Per-Jurusan';
		$j = $this->input->post('jurusan');

		$data = array(
			'user' => $this->M_utama->getbyjurusan($j),
			'provinsi' => $this->M_utama->propinsi(),
			'kota' => $this->M_utama->kab_kota(),
			'fakultas' => $this->M_utama->fakultas(),
			'jurusan' => $this->M_utama->jurusan(),
			'title' => "Export Data Peserta Per-Jurusan Bidikmisi",
    		'title2' => "PER-JURUSAN"
		);
        $this->M_utama->activity_admin($id_admin,$nama_admin,$ip,$ket);
		$this->load->view('project_bidikmisi/admin/export_excel', $data);
	}
	
	public function export_excel4(){
	    $id_admin = $this->session->userdata('id');
	    $nama_admin = $this->session->userdata('nama_lengkap');
	    $ip = $this->input->ip_address();
	    $ket = 'Admin Export Excel Data Peserta Per-Tahun';
  	    $tahun = $this->input->post('tahun');
  	    
  	    $data = array(
      		'user' =>  $this->M_utama->report3($tahun),
      		'provinsi' => $this->M_utama->propinsi(),
      		'kota' => $this->M_utama->kab_kota(),
      		'fakultas' => $this->M_utama->fakultas(),
      		'jurusan' => $this->M_utama->jurusan(),
      		'title' => "Export Data Peserta Per-Tahun Bidikmisi",
    		'title2' => "PER-TAHUN"
      	);
      	$this->M_utama->activity_admin($id_admin,$nama_admin,$ip,$ket);
      	$this->load->view('project_bidikmisi/admin/export_excel', $data);
	}
	
	public function export_excel5(){
	    $id_admin = $this->session->userdata('id');
	    $nama_admin = $this->session->userdata('nama_lengkap');
	    $ip = $this->input->ip_address();
	    $ket = 'Admin Export Excel Data Peserta Per-Kecamatan';
  	    $kecamatan = $this->input->post('kecamatan');
  	    
  	    $data = array(
      		'user' =>  $this->M_utama->getData_kecamatan($kecamatan),
      		'provinsi' => $this->M_utama->propinsi(),
      		'kota' => $this->M_utama->kab_kota(),
      		'fakultas' => $this->M_utama->fakultas(),
      		'jurusan' => $this->M_utama->jurusan(),
      		'title' => "Export Data Peserta Per-Kecamatan Bidikmisi",
    		'title2' => "PER-KECAMATAN"
      	);
      	$this->M_utama->activity_admin($id_admin,$nama_admin,$ip,$ket);
      	$this->load->view('project_bidikmisi/admin/export_excel', $data);
	}
	
	public function export_excel6(){
	    $id_admin = $this->session->userdata('id');
	    $nama_admin = $this->session->userdata('nama_lengkap');
	    $ip = $this->input->ip_address();
	    $ket = 'Admin Export Excel Data Peserta Per-Kelurahan';
  	    $kelurahan = $this->input->post('kelurahan');
  	    
  	    $data = array(
      		'user' =>  $this->M_utama->getData_kelurahan($kelurahan),
      		'provinsi' => $this->M_utama->propinsi(),
      		'kota' => $this->M_utama->kab_kota(),
      		'fakultas' => $this->M_utama->fakultas(),
      		'jurusan' => $this->M_utama->jurusan(),
      		'title' => "Export Data Peserta Per-Kelurahan Bidikmisi",
    		'title2' => "PER-KELURAHAN"
      	);
      	$this->M_utama->activity_admin($id_admin,$nama_admin,$ip,$ket);
      	$this->load->view('project_bidikmisi/admin/export_excel', $data);
	}

	public function form_kelulusan(){
		$this->load->view('project_bidikmisi/admin/form_kelulusan');
	}

	//report peserta sudah pemberkasan
	public function v_report_sdh_pemberkasan(){
		$year = date('Y');
		$data = array(
			'user' =>  $this->M_utama->cek_sudah_berkas()->result(),
			'provinsi' => $this->M_utama->propinsi(),
			'kota' => $this->M_utama->kab_kota(),
			'fakultas' => $this->M_utama->fakultas(),
			'jurusan' => $this->M_utama->jurusan(),
			'parameter_judul' => 'Sudah Pemberkasan'
		);
		$this->load->view('project_bidikmisi/admin/data_pendaftar', $data);
	}

	//report peserta belum pemberkasan
	public function v_report_blm_pemberkasan(){
		$year = date('Y');
		$data = array(
			'user' =>  $this->M_utama->cek_belum_berkas()->result(),
			'provinsi' => $this->M_utama->propinsi(),
			'kota' => $this->M_utama->kab_kota(),
			'fakultas' => $this->M_utama->fakultas(),
			'jurusan' => $this->M_utama->jurusan(),
			'parameter_judul' => 'Belum Pemberkasan'
		);
		$this->load->view('project_bidikmisi/admin/data_pendaftar', $data);
	}

	public function berkasDiterimaOleh($no_pendaftaran){
	    $data = [
	       'berkas_sudah_diterima_oleh' => $this->input->post('berkas_sudah_diterima_oleh')
	    ];
		$this->M_utama->edit_data_mahasiswa($no_pendaftaran, $data);
		$this->session->set_flashdata('berhasil','<script>alert("Update Penerima Berkas Berhasil"); </script>');
		echo $this->session->flashdata('berhasil');
		$this->view5($no_pendaftaran);
	}
}?>
