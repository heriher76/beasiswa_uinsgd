<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('M_utama');
	}

	public function index(){
		$this->load->view('project_bidikmisi/login/cpanel_utama');
	}

	//function aksid login
	public function login(){
		$usme = $this->input->post('usme');
		$pass  = $this->input->post('pass');
		$level = $this->input->post('level');
		$angka1 = 1;
		$angka0 = 0;

		$data = array(
			'username' => sha1(md5(sha1(md5(sha1($usme))))),
			'pin' => sha1(md5(sha1(md5(sha1($pass))))),
			'level' => $level
		);
		$result = $this->M_utama->cek_user($data);
		$document = $this->M_utama->getData_document();
		$document2 = $this->M_utama->getData_document2();


		$this->session->set_flashdata("gagal_login", "<script>alert('Username atau Password Salah, dan Cek ulang Kembali Level Anda'); </script>");
		$this->session->set_flashdata("gagal_akses", "<script>alert('Anda Tidak Memiliki Hak akses ke Halaman ini'); </script>");

		if($result->num_rows() == 1){
			foreach($result->result() as $sess){
				$sess_data['id'] = $sess->id;
				$sess_data['tok'] = '92148cdd2167f9e05dfd99d0d54332d152c4581d5ba';
				$sess_data['level'] = $sess->level;
				$sess_data['nama_lengkap'] = $sess->nama_lengkap;
				
				$this->session->set_userdata($sess_data);
			}
			
			foreach($document->result() as $sess_doc){
			    $sess_document['id_document'] = $sess_doc->id_document;
			    
			    $this->session->set_userdata($sess_document);
			}
			
			foreach($document2->result() as $sess_doc){
			    $sess_document2['id_document2'] = $sess_doc->id_document;
			    
			    $this->session->set_userdata($sess_document2);
			}

			$level = $this->session->userdata('level');

			if($result && $level == $angka1){
				redirect('Auth1');
			}else if($result && $level == $angka0){
				redirect('Auth0');
			}
		}
		else{
			echo $this->session->userdata('gagal_login');
			$this->index();
		}	
	}
	//end function aksi login

	//function logout
	public function logout(){
		$this->session->unset_userdata('id');
		$this->session->unset_userdata('tok');
		$this->session->unset_userdata('level');
		$this->session->unset_userdata('nama_lengkap');
		$this->session->unset_userdata('id_document');
		redirect('Login');
	}
	//end function logout
}
?>