<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth0 extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('M_utama');
		$this->load->helpers('tgl_indo');
		
		$id    = $this->session->userdata('id');
		$token = $this->session->userdata('tok');
		$level = $this->session->userdata('level');
		
		if( (empty($id) || empty($token) || empty($level) ) && (!$id || $token != '92148cdd2167f9e05dfd99d0d54332d152c4581d5ba' || $level != 0) ) {
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
		$data['f1']	= $this->M_utama->get_gf1();
		$data['f2'] = $this->M_utama->get_gf2();
		$data['f3'] = $this->M_utama->get_gf3();
		$data['f4'] = $this->M_utama->get_gf4();
		$data['f5'] = $this->M_utama->get_gf5();
		$data['f6'] = $this->M_utama->get_gf6();
		$data['f7'] = $this->M_utama->get_gf7();
		$data['f8'] = $this->M_utama->get_gf8();
		$data['jadwal'] = $this->M_utama->jadwal()->result();
		$data['sudah_berkas'] = $this->M_utama->cek_sudah_berkas()->num_rows();
		$data['belum_berkas'] = $this->M_utama->cek_belum_berkas()->num_rows();
		$this->load->view('project_bidikmisi/pimpinan/dashboard',$data);
	}

	//function view data identitas diri pendaftar
	public function view1(){
		$ambil_th2 = date('Y');
		$data = array(
			'user' => $this->M_utama->getTable($ambil_th2),
			'provinsi' => $this->M_utama->propinsi(),
			'kota' => $this->M_utama->kab_kota(),
			'fakultas' => $this->M_utama->fakultas(),
			'jurusan' => $this->M_utama->jurusan(),
			'parameter_judul' => 'pendaftar bidikmisi'
		);

		$this->load->view('project_bidikmisi/pimpinan/data_pendaftar', $data);
	}
	//end function view data identitas diri pendaftar

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

	//function view detail pendaftar
	public function view2($no_pendaftaran){
		$data = array(
			'user' =>  $this->M_utama->getData_mhs($no_pendaftaran),
			'provinsi' => $this->M_utama->propinsi(),
			'kota' => $this->M_utama->kab_kota(),
			'fakultas' => $this->M_utama->fakultas(),
			'jurusan' => $this->M_utama->jurusan()
		);

		$this->load->view('project_bidikmisi/pimpinan/detail_pendaftar', $data);
	}
	//end function view detail pendaftar

	//function view data dokumen pendukung
	public function view3($no_pendaftaran){
		$data['foto'] = $this->M_utama->getTable_pdf($no_pendaftaran);
		$this->load->view('project_bidikmisi/pimpinan/dokumen', $data); 
	}
	//end function view data dokumen pendukung

	//function view ganti password
	public function view4(){
	    $id = $this->session->userdata('id');
	    $utama = $this->db->get_where('master_utama', array('id' => $id))->row();
		$data = array(
			'id' => $utama->id,
			'nama_lengkap' => $utama->nama_lengkap,
			'level' => $utama->level,
		);
		$this->load->view('project_bidikmisi/pimpinan/edit_akun', $data);
	}
	//end function view ganti password

	//function view detail pendaftar
	public function view5($no_pendaftaran){
		$data = array(
			'user' =>  $this->M_utama->getData_mhs($no_pendaftaran),
			'provinsi' => $this->M_utama->propinsi(),
			'kota' => $this->M_utama->kab_kota(),
			'fakultas' => $this->M_utama->fakultas(),
			'jurusan' => $this->M_utama->jurusan()
		);

		$this->load->view('project_bidikmisi/pimpinan/detail_pendaftar', $data);
	}
	//end function view detail pendaftar

	//view data server side
	public function view6(){
		$this->load->view('project_bidikmisi/pimpinan/data_server_side');
	}

	//function edit akun
	public function edit_executive(){
	    $id_admin      = $this->session->userdata('id');
	    $nama_admin    = $this->session->userdata('nama_lengkap');
	    $ip            = $this->input->ip_address();
	    $ket           = 'executive ganti nama';
	    $ket2          = 'executive ganti username';
	    $ket3          = 'executive ganti password';
	    
	    
	    if($this->input->post('nama_lengkap')){
	        $nama = $this->input->post('nama_lengkap');
	        
	        $this->session->set_flashdata('berhasil_ganti','<script>alert("Nama Berhasil diganti");</script>');
	        
	        $data = array(
	           'nama_lengkap' => $nama   
	        );
	        $this->M_utama->edit_data($id_admin, $data);
	        $this->M_utama->activity_admin($id_admin,$nama_admin,$ip,$ket);
	        $query_session = $this->db->get_where('master_utama', array('id' => $id_admin))->row();
		    $sess_utama = array(
			    'nama_lengkap' 	=> $query_session->nama_lengkap
		    );
		    $this->session->set_userdata($sess_utama);
	        echo $this->session->flashdata('berhasil_ganti');
	    }else if($this->input->post('username_executive')){
	        $username 			= $this->input->post('username_executive');
	        $enkrip_username 	= sha1(md5(sha1(md5(sha1($username)))));

	        $this->session->set_flashdata('sama', '<script>alert("Data Gagal Edit, Username Sudah Ada, Silahkan ganti dengan yang lain"); </script>');
	        $this->session->set_flashdata('berhasil_ganti','<script>alert("Username Berhasil diganti"); </script>');
	        
	        $cek = array(
				'username' => $enkrip_username
			);
	        $cek_user = $this->M_utama->cek_user($cek);

	        if($cek_user->num_rows() == 1){
	        	echo $this->session->flashdata('sama');
	        }else{
		        $data = array(
		            'username' => sha1(md5(sha1(md5(sha1($username)))))
		        );
		        $this->M_utama->edit_data($id_admin, $data);
		        $this->M_utama->activity_admin($id_admin, $nama_admin, $ip, $ket2);
		        echo $this->session->flashdata('berhasil_ganti');
	        }
	    }else if($this->input->post('new_password')){
	        $new_pass 			= $this->input->post('new_password');
    		$confirm_new_pass 	= $this->input->post('confirm_new_password');
    
    		$this->session->set_flashdata('gagal_ganti', '<script>alert("Password Tidak Sama, Silahkan Input Ulang"); </script>');
    		$this->session->set_flashdata('berhasil_ganti', '<script>alert("Password Berhasil diganti"); </script>');
    
    		if($new_pass != $confirm_new_pass){
    			echo $this->session->flashdata('gagal_ganti');
    		}else{
    			$data = array(
    				'pin' => sha1(md5(sha1(md5(sha1($confirm_new_pass)))))
    			);
    			$this->M_utama->edit_data($id_admin, $data);
    			$this->M_utama->activity_admin($id_admin,$nama_admin,$ip,$ket3);
    			echo $this->session->flashdata('berhasil_ganti');
    		}   
	    }
		$this->view4();
	}
	//end function edit akun
	
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
			'parameter_judul' => 'Kedua Orang Tua Masih Ada'
		);
		$this->load->view('project_bidikmisi/pimpinan/data_pendaftar', $data);
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
			'parameter_judul' => 'Kedua Orang Tua Meninggal'
		);
		$this->load->view('project_bidikmisi/pimpinan/data_pendaftar', $data);
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
			'parameter_judul' => 'Ayah Meninggal'
		);
		$this->load->view('project_bidikmisi/pimpinan/data_pendaftar', $data);
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
			'parameter_judul' => 'Ibu Meninggal'
		);
		$this->load->view('project_bidikmisi/pimpinan/data_pendaftar', $data);
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
		$this->load->view('project_bidikmisi/pimpinan/data_pendaftar', $data);
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
		$this->load->view('project_bidikmisi/pimpinan/data_pendaftar', $data);
	}

	//report peserta lulus
	public function v_report_lulus(){
		$year = date('Y');
		$data = array(
			'user' =>  $this->M_utama->view_tmp($year),
			'provinsi' => $this->M_utama->propinsi(),
			'kota' => $this->M_utama->kab_kota(),
			'fakultas' => $this->M_utama->fakultas(),
			'jurusan' => $this->M_utama->jurusan(),
			'parameter_judul' => 'Lulus Tahap 1'
		);
		$this->load->view('project_bidikmisi/pimpinan/data_pendaftar', $data);
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
			'parameter_judul' => 'Lulus Tahap 2'
		);
		$this->load->view('project_bidikmisi/pimpinan/data_pendaftar', $data);
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
		$this->load->view('project_bidikmisi/pimpinan/data_pendaftar', $data);
	}

	public function v_report_provinsi(){
        $ambil_th2 = date('Y');
		$data = array(
			'user' => $this->M_utama->getTable($ambil_th2),
			'provinsi' => $this->M_utama->propinsi(),
			'kota' => $this->M_utama->kab_kota(),
			'fakultas' => $this->M_utama->fakultas(),
			'jurusan' => $this->M_utama->jurusan(),
			'parameter_judul' => 'Per-Provinsi dan Kab/Kota'
		);

		$this->load->view('project_bidikmisi/pimpinan/data_pendaftar2', $data);
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
			'parameter_judul' => 'Per-Provinsi dan Kab/Kota'
		);

		$this->load->view('project_bidikmisi/pimpinan/data_pendaftar2', $data);
	}
	
	public function v_report_tahunan(){
	    $ambil_th2 = date('Y');
		$data = array(
			'user' =>  $this->M_utama->getTable($ambil_th2),
			'provinsi' => $this->M_utama->propinsi(),
			'kota' => $this->M_utama->kab_kota(),
			'fakultas' => $this->M_utama->fakultas(),
			'jurusan' => $this->M_utama->jurusan(),
			'parameter_judul' => 'Per-Tahun'
		);
		$this->load->view('project_bidikmisi/pimpinan/data_pendaftar3', $data);
	}

	public function v_report_tahunan2(){
		$tahun = $this->input->post('tahun');
		$data = array(
			'user' =>  $this->M_utama->report3($tahun),
			'provinsi' => $this->M_utama->propinsi(),
			'kota' => $this->M_utama->kab_kota(),
			'fakultas' => $this->M_utama->fakultas(),
			'jurusan' => $this->M_utama->jurusan()
		);
		$this->load->view('project_bidikmisi/pimpinan/data_pendaftar3', $data);
	}
	
	//function cetak laporan
	public function v_cetak_laporan(){
		$data = array(
			'provinsi' => $this->M_utama->propinsi(),
			'kota' => $this->M_utama->kab_kota(),
			'fakultas' => $this->M_utama->fakultas()
		);
		$this->load->view('project_bidikmisi/pimpinan/form_cetak_laporan', $data);
	}

	public function cetak_report(){
	    $id_admin = $this->session->userdata('id');
	    $nama_admin = $this->session->userdata('nama_lengkap');
	    $ip = $this->input->ip_address();
	    $ket = 'executive cetak laporan';
	    $r = $this->input->post('cetak');

		if($r == 'yatimpiatu'){
			$where1= 40;
			$where2= 20;
			$data = array(
				'user' =>  $this->M_utama->report1($where1,$where2),
				'provinsi' => $this->M_utama->propinsi(),
				'kota' => $this->M_utama->kab_kota(),
				'fakultas' => $this->M_utama->fakultas(),
				'jurusan' => $this->M_utama->jurusan()
			);
			$this->M_utama->activity_admin($id_admin,$nama_admin,$ip,$ket);
			$this->load->view('project_bidikmisi/pimpinan/catak_laporan', $data);
		}

		else if ($r == 'masihada') {
			$where1= 0;
			$where2= 0;
			$data = array(
				'user' =>  $this->M_utama->report1($where1,$where2),
				'provinsi' => $this->M_utama->propinsi(),
				'kota' => $this->M_utama->kab_kota(),
				'fakultas' => $this->M_utama->fakultas(),
				'jurusan' => $this->M_utama->jurusan()
			);
			$this->M_utama->activity_admin($id_admin,$nama_admin,$ip,$ket);
			$this->load->view('project_bidikmisi/pimpinan/catak_laporan', $data);
		}

		else if ($r == 'yatim') {
			$where1= 40;
			$where2= 0;
			$data = array(
				'user' =>  $this->M_utama->report1($where1,$where2),
				'provinsi' => $this->M_utama->propinsi(),
				'kota' => $this->M_utama->kab_kota(),
				'fakultas' => $this->M_utama->fakultas(),
				'jurusan' => $this->M_utama->jurusan()
			);
			$this->M_utama->activity_admin($id_admin,$nama_admin,$ip,$ket);
			$this->load->view('project_bidikmisi/pimpinan/catak_laporan', $data);
		}

		else if ($r == 'piatu') {
			$where1= 0;
			$where2= 20;
			$data = array(
				'user' =>  $this->M_utama->report1($where1,$where2),
				'provinsi' => $this->M_utama->propinsi(),
				'kota' => $this->M_utama->kab_kota(),
				'fakultas' => $this->M_utama->fakultas(),
				'jurusan' => $this->M_utama->jurusan()
			);
			$this->M_utama->activity_admin($id_admin,$nama_admin,$ip,$ket);
			$this->load->view('project_bidikmisi/pimpinan/catak_laporan', $data);
		}

		else if ($r == 'lulus') {
			$para= 'getLulus';
			$where= 'LULUS';
			$data = array(
				'user' =>  $this->M_utama->report2($para,$where),
				'provinsi' => $this->M_utama->propinsi(),
				'kota' => $this->M_utama->kab_kota(),
				'fakultas' => $this->M_utama->fakultas(),
				'jurusan' => $this->M_utama->jurusan()
			);
			$this->M_utama->activity_admin($id_admin,$nama_admin,$ip,$ket);
			$this->load->view('project_bidikmisi/pimpinan/catak_laporan', $data);
		}

		else if ($r == 'tlulus') {
			$para= 'getLulus';
			$where= 'TIDAK LULUS';
			$data = array(
				'user' =>  $this->M_utama->report2($para,$where),
				'provinsi' => $this->M_utama->propinsi(),
				'kota' => $this->M_utama->kab_kota(),
				'fakultas' => $this->M_utama->fakultas(),
				'jurusan' => $this->M_utama->jurusan()
			);
			$this->M_utama->activity_admin($id_admin,$nama_admin,$ip,$ket);
			$this->load->view('project_bidikmisi/pimpinan/catak_laporan', $data);
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
				'cetak' => 'PernahPasantren'
			);
			$this->M_utama->activity_admin($id_admin,$nama_admin,$ip,$ket);
			$this->load->view('project_bidikmisi/pimpinan/catak_laporan', $data);
		}

		else if ($r == 'tpasantren') {
			$para= 'mondok';
			$where= 'tidak';
			$data = array(
				'user' =>  $this->M_utama->report2($para,$where),
				'provinsi' => $this->M_utama->propinsi(),
				'kota' => $this->M_utama->kab_kota(),
				'fakultas' => $this->M_utama->fakultas(),
				'jurusan' => $this->M_utama->jurusan()
			);
			$this->M_utama->activity_admin($id_admin,$nama_admin,$ip,$ket);
			$this->load->view('project_bidikmisi/pimpinan/catak_laporan', $data);
		}
	}

	public function cetak_daerah(){
	    $id_admin = $this->session->userdata('id');
	    $nama_admin = $this->session->userdata('nama_lengkap');
	    $ip = $this->input->ip_address();
	    $ket = 'executive cetak laporan';
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
		$this->load->view('project_bidikmisi/pimpinan/catak_laporan', $data);
	}

	public function cetak_fk(){
	    $id_admin = $this->session->userdata('id');
	    $nama_admin = $this->session->userdata('nama_lengkap');
	    $ip = $this->input->ip_address();
	    $ket = 'executive cetak laporan';
		$fk = $this->input->post('fakultas');

		$data = array(
			'user' => $this->M_utama->getbyfakultas($fk),
			'provinsi' => $this->M_utama->propinsi(),
			'kota' => $this->M_utama->kab_kota(),
			'fakultas' => $this->M_utama->fakultas(),
			'jurusan' => $this->M_utama->jurusan()
		);
        $this->M_utama->activity_admin($id_admin,$nama_admin,$ip,$ket);
		$this->load->view('project_bidikmisi/pimpinan/catak_laporan', $data);
	}
	
	public function cetak_th(){
        $id_admin = $this->session->userdata('id');
	    $nama_admin = $this->session->userdata('nama_lengkap');
	    $ip = $this->input->ip_address();
	    $ket = 'executive cetak laporan';
		$tahun = $this->input->post('tahun');
		$data = array(
			'user' =>  $this->M_utama->report3($tahun),
			'provinsi' => $this->M_utama->propinsi(),
			'kota' => $this->M_utama->kab_kota(),
			'fakultas' => $this->M_utama->fakultas(),
			'jurusan' => $this->M_utama->jurusan()
		);
		$this->M_utama->activity_admin($id_admin,$nama_admin,$ip,$ket);
		$this->load->view('project_bidikmisi/pimpinan/catak_laporan', $data);
	}
	//function cetak laporan
	
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

		$this->load->view('project_bidikmisi/pimpinan/data_pendaftar', $data);
	}
	
	//view tentang website executive
	public function about(){
	    $this->load->view('project_bidikmisi/about/about2');
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

		$this->load->view('project_bidikmisi/pimpinan/data_pendaftar', $data);
	}

	//ceklis pemberkasan
	public function berkas($no_pendaftaran){
		$data_mhs = $this->M_utama->getData_mhs($no_pendaftaran);
		foreach($data_mhs as $value){
			$reg = $value->reg;
			$pemberkasan = $value->pemberkasan;
		}

		if($pemberkasan == 0 && $reg == 2){
			$data = [
				'pemberkasan' => 1
			];
			$this->M_utama->edit_data_mahasiswa($no_pendaftaran, $data);
			$this->session->set_flashdata('status', '<script>alert("Data Berhasil di Update"); </script>');
		}else if($pemberkasan == 1 && $reg == 2){
			$data = [
				'pemberkasan' => 0
			];
			$this->M_utama->edit_data_mahasiswa($no_pendaftaran, $data);
			$this->session->set_flashdata('status', '<script>alert("Data Berhasil di Update"); </script>');
		}else{
			$this->session->set_flashdata('status', '<script>alert("Data Belum di Verifikasi"); </script>');
		}
		
		redirect('Auth0/view1');
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
		$this->load->view('project_bidikmisi/pimpinan/data_pendaftar', $data);
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
		$this->load->view('project_bidikmisi/pimpinan/data_pendaftar', $data);
	}
}?>