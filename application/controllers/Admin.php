<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->library('datatables');
		$this->load->model('M_admin');
		$this->load->model('M_utama');
		$this->load->helpers('tgl_indo');
		
		$id    = $this->session->userdata('id');
		$token = $this->session->userdata('tok');
		$level = $this->session->userdata('level');
		
		if( (empty($id) || empty($token) || empty($level)) && (!$id || $token != '92148cdd2167f9e05dfd99d0d54332d152c4581d5ba' || $level != 1) ){
			redirect('Login');
		}
	}

	public function index(){
		redirect('Login');
	}

	//fitur yang berhubungan dengan report bidikmisi prestasi
	function json_data_report(){
		header('Content-Type: application/json');
		echo $this->M_admin->json_data_report();
	}

	public function data_report(){
		$data = array(
			//ushuluddin
			'ip_k1_avgu' => $this->M_admin->get_avgu_gf1(),
			'ip_k2_avgu' => $this->M_admin->get_avgu_gf2(),
			'ip_k3_avgu' => $this->M_admin->get_avgu_gf3(),
			'ip_k4_avgu' => $this->M_admin->get_avgu_gf4(),
			'ip_k5_avgu' => $this->M_admin->get_avgu_gf5(),
			'ip_k6_avgu' => $this->M_admin->get_avgu_gf6(),
			'ip_k7_avgu' => $this->M_admin->get_avgu_gf7(),
			'ip_k8_avgu' => $this->M_admin->get_avgu_gf8(),
			//End ushuluddin

			//tarbiyah
			'ip_k1_avgt' => $this->M_admin->get_avgt_gf1(),
			'ip_k2_avgt' => $this->M_admin->get_avgt_gf2(),
			'ip_k3_avgt' => $this->M_admin->get_avgt_gf3(),
			'ip_k4_avgt' => $this->M_admin->get_avgt_gf4(),
			'ip_k5_avgt' => $this->M_admin->get_avgt_gf5(),
			'ip_k6_avgt' => $this->M_admin->get_avgt_gf6(),
			'ip_k7_avgt' => $this->M_admin->get_avgt_gf7(),
			'ip_k8_avgt' => $this->M_admin->get_avgt_gf8(),
			//End tarbiyah

			//syarkum
			'ip_k1_avgs' => $this->M_admin->get_avgs_gf1(),
			'ip_k2_avgs' => $this->M_admin->get_avgs_gf2(),
			'ip_k3_avgs' => $this->M_admin->get_avgs_gf3(),
			'ip_k4_avgs' => $this->M_admin->get_avgs_gf4(),
			'ip_k5_avgs' => $this->M_admin->get_avgs_gf5(),
			'ip_k6_avgs' => $this->M_admin->get_avgs_gf6(),
			'ip_k7_avgs' => $this->M_admin->get_avgs_gf7(),
			'ip_k8_avgs' => $this->M_admin->get_avgs_gf8(),
			//End syarkum

			//dakom
			'ip_k1_avgd' => $this->M_admin->get_avgd_gf1(),
			'ip_k2_avgd' => $this->M_admin->get_avgd_gf2(),
			'ip_k3_avgd' => $this->M_admin->get_avgd_gf3(),
			'ip_k4_avgd' => $this->M_admin->get_avgd_gf4(),
			'ip_k5_avgd' => $this->M_admin->get_avgd_gf5(),
			'ip_k6_avgd' => $this->M_admin->get_avgd_gf6(),
			'ip_k7_avgd' => $this->M_admin->get_avgd_gf7(),
			'ip_k8_avgd' => $this->M_admin->get_avgd_gf8(),
			//End dakom

			//adhum
			'ip_k1_avga' => $this->M_admin->get_avga_gf1(),
			'ip_k2_avga' => $this->M_admin->get_avga_gf2(),
			'ip_k3_avga' => $this->M_admin->get_avga_gf3(),
			'ip_k4_avga' => $this->M_admin->get_avga_gf4(),
			'ip_k5_avga' => $this->M_admin->get_avga_gf5(),
			'ip_k6_avga' => $this->M_admin->get_avga_gf6(),
			'ip_k7_avga' => $this->M_admin->get_avga_gf7(),
			'ip_k8_avga' => $this->M_admin->get_avga_gf8(),
			//End adhum

			//psikologi
			'ip_k1_avgp' => $this->M_admin->get_avgp_gf1(),
			'ip_k2_avgp' => $this->M_admin->get_avgp_gf2(),
			'ip_k3_avgp' => $this->M_admin->get_avgp_gf3(),
			'ip_k4_avgp' => $this->M_admin->get_avgp_gf4(),
			'ip_k5_avgp' => $this->M_admin->get_avgp_gf5(),
			'ip_k6_avgp' => $this->M_admin->get_avgp_gf6(),
			'ip_k7_avgp' => $this->M_admin->get_avgp_gf7(),
			'ip_k8_avgp' => $this->M_admin->get_avgp_gf8(),
			//End psikologi

			//saintek
			'ip_k1_avgsa' => $this->M_admin->get_avgsa_gf1(),
			'ip_k2_avgsa' => $this->M_admin->get_avgsa_gf2(),
			'ip_k3_avgsa' => $this->M_admin->get_avgsa_gf3(),
			'ip_k4_avgsa' => $this->M_admin->get_avgsa_gf4(),
			'ip_k5_avgsa' => $this->M_admin->get_avgsa_gf5(),
			'ip_k6_avgsa' => $this->M_admin->get_avgsa_gf6(),
			'ip_k7_avgsa' => $this->M_admin->get_avgsa_gf7(),
			'ip_k8_avgsa' => $this->M_admin->get_avgsa_gf8(),
			//End saintek

			//fisip
			'ip_k1_avgf' => $this->M_admin->get_avgf_gf1(),
			'ip_k2_avgf' => $this->M_admin->get_avgf_gf2(),
			'ip_k3_avgf' => $this->M_admin->get_avgf_gf3(),
			'ip_k4_avgf' => $this->M_admin->get_avgf_gf4(),
			'ip_k5_avgf' => $this->M_admin->get_avgf_gf5(),
			'ip_k6_avgf' => $this->M_admin->get_avgf_gf6(),
			'ip_k7_avgf' => $this->M_admin->get_avgf_gf7(),
			'ip_k8_avgf' => $this->M_admin->get_avgf_gf8()
			//End fisip
		);
	    $this->load->view('project_bidikmisi/admin/data_nim', $data);
	}

	public function data_mhs_report($nim, $token, $token2){
		$crypt_token = sha1(md5(sha1(md5(sha1("jjhdDjewi1092389!@#")))));
		$crypt2_token2 = sha1(md5(sha1(md5(sha1("hyytiie21399$39!jjsdf")))));
		
		if($token2 == $crypt2_token2 && $token == $crypt_token){
			$data = array(
				'data_report_nim' => $this->M_admin->getTable_where_report($nim)->result(),
				'fakultas' => $this->M_utama->fakultas(),
				'jurusan' => $this->M_utama->jurusan(),
				'ip_k1' => $this->M_admin->get_gf_report1($nim),
				'ip_k2' => $this->M_admin->get_gf_report2($nim),
				'ip_k3' => $this->M_admin->get_gf_report3($nim),
				'ip_k4' => $this->M_admin->get_gf_report4($nim),
				'ip_k5' => $this->M_admin->get_gf_report5($nim),
				'ip_k6' => $this->M_admin->get_gf_report6($nim),
				'ip_k7' => $this->M_admin->get_gf_report7($nim),
				'ip_k8' => $this->M_admin->get_gf_report8($nim)
			);
			$this->load->view('project_bidikmisi/admin/data_mhs_report', $data);
		}else{
			$this->session->set_flashdata('no_mercy','<script>alert("Maaf, Anda Tidak Diizinkan Akses Halaman Ini");</script>');
			echo $this->session->flashdata('no_mercy');
			redirect('Admin/data_report');
		}
	}

	public function update_mhs(){
		//Activity Admin
		$id_admin = $this->session->userdata('id');
	    $nama_admin = $this->session->userdata('nama_lengkap');
	    $ip = $this->input->ip_address();
	    $ket = 'Admin Edit Data Mahasiswa Report';
	    $ket_s1 = 'Admin Edit Data Report Semester 1';
	    $ket_s2 = 'Admin Edit Data Report Semester 2';
	    $ket_s3 = 'Admin Edit Data Report Semester 3';
	    $ket_s4 = 'Admin Edit Data Report Semester 4';
	    $ket_s5 = 'Admin Edit Data Report Semester 5';
	    $ket_s6 = 'Admin Edit Data Report Semester 6';
	    $ket_s7 = 'Admin Edit Data Report Semester 7';
	    $ket_s8 = 'Admin Edit Data Report Semester 8';
	    //End Activity Admin

	    $config['upload_path'] 		= './assets/transkrip_nilai/';
		$config['allowed_types'] 	= 'PDF|pdf';
		$config['max_size']			= 150;

		$this->load->library('upload', $config);

		$nim = $this->input->post('nim');
		$edit_mhs = $this->input->post('edit_mhs');
		$row = $this->M_admin->getRow_report($nim);
		
		$semester1 					= $this->input->post('semester1');
		$edit_transkrip_semester1 	= $this->input->post('edit_transkrip_semester1');

		$semester2 					= $this->input->post('semester2');
		$edit_transkrip_semester2 	= $this->input->post('edit_transkrip_semester2');
		
		$semester3 					= $this->input->post('semester3');
		$edit_transkrip_semester3 	= $this->input->post('edit_transkrip_semester3');

		$semester4 					= $this->input->post('semester4');
		$edit_transkrip_semester4 	= $this->input->post('edit_transkrip_semester4');

		$semester5 					= $this->input->post('semester5');
		$edit_transkrip_semester5 	= $this->input->post('edit_transkrip_semester5');

		$semester6 					= $this->input->post('semester6');
		$edit_transkrip_semester6 	= $this->input->post('edit_transkrip_semester6');

		$semester7 					= $this->input->post('semester7');
		$edit_transkrip_semester7 	= $this->input->post('edit_transkrip_semester7');

		$semester8 					= $this->input->post('semester8');
		$edit_transkrip_semester8 	= $this->input->post('edit_transkrip_semester8');

		if($edit_mhs == 1){
			$nama_mahasiswa = $this->input->post('nama_mahasiswa');
			$jenis_kelamin 	= $this->input->post('jenis_kelamin');
			$fakultas 		= $this->input->post('fakultas');
			$jurusan 		= $this->input->post('jurusan');
			$angkatan 		= $this->input->post('angkatan');

			$edit_data_mhs = array(
				'nama_mahasiswa' => $nama_mahasiswa,
				'jenis_kelamin' => $jenis_kelamin,
				'fakultas' => $fakultas,
				'jurusan' => $jurusan,
				'angkatan' => $angkatan
			);
			$this->M_admin->edit_report($nim, $edit_data_mhs);
			$this->M_utama->activity_admin($id_admin,$nama_admin,$ip,$ket);
			$this->session->set_flashdata('update_data_mhs','<script>alert("Data Mahasiswa Berhasil diUpdate"); </script>');
			echo $this->session->flashdata('update_data_mhs');
		}else if($semester1 == 1){
			$sks1 		= $this->input->post('sks1');
			$t_sks1 	= $this->input->post('t_sks1');
			$ip_s1 		= $t_sks1/$sks1;

			$data_semester1 = array(
				'sks1' => $sks1,
				't_sks1' => $t_sks1,
				'ip_s1' => $ip_s1
			);

			if($edit_transkrip_semester1 == 1){
				if(!$this->upload->do_upload('transkrip_nilai1')){
					$this->session->set_flashdata('gagal_tranksrip_nilai1','<script>alert("Upload Transkrip Nilai Gagal, Silahkan Cek Kembali Ukuran dan Format File Transkrip Anda");</script>' );
					echo $this->session->flashdata('gagal_tranksrip_nilai1');
				}else{
					$file = $this->upload->data();
					if($row->transkrip_nilai1 != NULL){
						unlink('assets/transkrip_nilai/'.$row->transkrip_nilai1);
					}	
					
					$data_transkrip1 = ['transkrip_nilai1' => $file['file_name']];
					$this->M_admin->edit_report($nim, $data_transkrip1);
				}
			}

			$this->M_admin->edit_report($nim, $data_semester1);
			$this->M_admin->getData_ipk1($nim);

			if($row->ip_k2 != 0.00){
				$this->M_admin->getData_ipk2($nim);
			}

			if($row->ip_k3 != 0.00){
				$this->M_admin->getData_ipk3($nim);
			}

			if($row->ip_k4 != 0.00){
				$this->M_admin->getData_ipk4($nim);
			}

			if($row->ip_k5 != 0.00){
				$this->M_admin->getData_ipk5($nim);
			}

			if($row->ip_k6 != 0.00){
				$this->M_admin->getData_ipk6($nim);
			}

			if($row->ip_k7 != 0.00){
				$this->M_admin->getData_ipk7($nim);
			}

			if($row->ip_k8 != 0.00){
				$this->M_admin->getData_ipk8($nim);
			}

			$this->M_utama->activity_admin($id_admin,$nama_admin,$ip,$ket_s1);

			$this->session->set_flashdata('semester1_notif','<script>alert("Semester 1 Berhasil diUpdate");</script>');
			echo $this->session->flashdata('semester1_notif');
		}else if($semester2 == 2){
			$sks2 		= $this->input->post('sks2');
			$t_sks2 	= $this->input->post('t_sks2');
			$ip_s2 		= $t_sks2/$sks2;

			$data_semester2 = array(
				'sks2' => $sks2,
				't_sks2' => $t_sks2,
				'ip_s2' => $ip_s2
			);

			if($edit_transkrip_semester2 == 2){
				if(!$this->upload->do_upload('transkrip_nilai2')){
					$this->session->set_flashdata('gagal_tranksrip_nilai2','<script>alert("Upload Transkrip Nilai Gagal, Silahkan Cek Kembali Ukuran dan Format File Transkrip Anda");</script>' );
					echo $this->session->flashdata('gagal_tranksrip_nilai2');
				}else{
					$file = $this->upload->data();
					if($row->transkrip_nilai2 != NULL){
						unlink('assets/transkrip_nilai/'.$row->transkrip_nilai2);
					}	
					
					$data_transkrip2 = ['transkrip_nilai2' => $file['file_name']];
					$this->M_admin->edit_report($nim, $data_transkrip2);
				}
			}

			$this->M_admin->edit_report($nim, $data_semester2);
			$this->M_admin->getData_ipk2($nim);

			if($row->ip_k3 != 0.00){
				$this->M_admin->getData_ipk3($nim);
			}

			if($row->ip_k4 != 0.00){
				$this->M_admin->getData_ipk4($nim);
			}

			if($row->ip_k5 != 0.00){
				$this->M_admin->getData_ipk5($nim);
			}

			if($row->ip_k6 != 0.00){
				$this->M_admin->getData_ipk6($nim);
			}
			
			if($row->ip_k7 != 0.00){
				$this->M_admin->getData_ipk7($nim);
			}

			if($row->ip_k8 != 0.00){
				$this->M_admin->getData_ipk8($nim);
			}

			$this->M_utama->activity_admin($id_admin,$nama_admin,$ip,$ket_s2);

			$this->session->set_flashdata('semester2_notif','<script>alert("Semester 2 Berhasil diUpdate");</script>');
			echo $this->session->flashdata('semester2_notif');
		}else if($semester3 == 3){
			$sks3 		= $this->input->post('sks3');
			$t_sks3 	= $this->input->post('t_sks3');
			$ip_s3 		= $t_sks3/$sks3;

			$data_semester3 = array(
				'sks3' => $sks3,
				't_sks3' => $t_sks3,
				'ip_s3' => $ip_s3
			);

			if($edit_transkrip_semester3 == 3){
				if(!$this->upload->do_upload('transkrip_nilai3')){
					$this->session->set_flashdata('gagal_tranksrip_nilai3','<script>alert("Upload Transkrip Nilai Gagal, Silahkan Cek Kembali Ukuran dan Format File Transkrip Anda");</script>' );
					echo $this->session->flashdata('gagal_tranksrip_nilai3');
				}else{
					$file = $this->upload->data();
					if($row->transkrip_nilai3 != NULL){
						unlink('assets/transkrip_nilai/'.$row->transkrip_nilai3);
					}	
					
					$data_transkrip3 = ['transkrip_nilai3' => $file['file_name']];
					$this->M_admin->edit_report($nim, $data_transkrip3);
				}
			}

			$this->M_admin->edit_report($nim, $data_semester3);
			$this->M_admin->getData_ipk3($nim);

			if($row->ip_k4 != 0.00){
				$this->M_admin->getData_ipk4($nim);
			}

			if($row->ip_k5 != 0.00){
				$this->M_admin->getData_ipk5($nim);
			}

			if($row->ip_k6 != 0.00){
				$this->M_admin->getData_ipk6($nim);
			}
			
			if($row->ip_k7 != 0.00){
				$this->M_admin->getData_ipk7($nim);
			}

			if($row->ip_k8 != 0.00){
				$this->M_admin->getData_ipk8($nim);
			}

			$this->M_utama->activity_admin($id_admin,$nama_admin,$ip,$ket_s3);

			$this->session->set_flashdata('semester3_notif','<script>alert("Semester 3 Berhasil diUpdate");</script>');
			echo $this->session->flashdata('semester3_notif');
		}else if($semester4 == 4){
			$sks4 		= $this->input->post('sks4');
			$t_sks4 	= $this->input->post('t_sks4');
			$ip_s4 		= $t_sks4/$sks4;

			$data_semester4 = array(
				'sks4' => $sks4,
				't_sks4' => $t_sks4,
				'ip_s4' => $ip_s4
			);

			if($edit_transkrip_semester4 == 4){
				if(!$this->upload->do_upload('transkrip_nilai4')){
					$this->session->set_flashdata('gagal_tranksrip_nilai4','<script>alert("Upload Transkrip Nilai Gagal, Silahkan Cek Kembali Ukuran dan Format File Transkrip Anda");</script>' );
					echo $this->session->flashdata('gagal_tranksrip_nilai4');
				}else{
					$file = $this->upload->data();
					if($row->transkrip_nilai4 != NULL){
						unlink('assets/transkrip_nilai/'.$row->transkrip_nilai4);
					}	
					
					$data_transkrip4 = ['transkrip_nilai4' => $file['file_name']];
					$this->M_admin->edit_report($nim, $data_transkrip4);
				}
			}

			$this->M_admin->edit_report($nim, $data_semester4);
			$this->M_admin->getData_ipk4($nim);

			if($row->ip_k5 != 0.00){
				$this->M_admin->getData_ipk5($nim);
			}

			if($row->ip_k6 != 0.00){
				$this->M_admin->getData_ipk6($nim);
			}
			
			if($row->ip_k7 != 0.00){
				$this->M_admin->getData_ipk7($nim);
			}

			if($row->ip_k8 != 0.00){
				$this->M_admin->getData_ipk8($nim);
			}

			$this->M_utama->activity_admin($id_admin,$nama_admin,$ip,$ket_s4);

			$this->session->set_flashdata('semester4_notif','<script>alert("Semester 4 Berhasil diUpdate");</script>');
			echo $this->session->flashdata('semester4_notif');
		}else if($semester5 == 5){
			$sks5 		= $this->input->post('sks5');
			$t_sks5 	= $this->input->post('t_sks5');
			$ip_s5 		= $t_sks5/$sks5;

			$data_semester5 = array(
				'sks5' => $sks5,
				't_sks5' => $t_sks5,
				'ip_s5' => $ip_s5
			);

			if($edit_transkrip_semester5 == 5){
				if(!$this->upload->do_upload('transkrip_nilai5')){
					$this->session->set_flashdata('gagal_tranksrip_nilai5','<script>alert("Upload Transkrip Nilai Gagal, Silahkan Cek Kembali Ukuran dan Format File Transkrip Anda");</script>' );
					echo $this->session->flashdata('gagal_tranksrip_nilai5');
				}else{
					$file = $this->upload->data();
					if($row->transkrip_nilai5 != NULL){
						unlink('assets/transkrip_nilai/'.$row->transkrip_nilai5);
					}	
					
					$data_transkrip5 = ['transkrip_nilai5' => $file['file_name']];
					$this->M_admin->edit_report($nim, $data_transkrip5);
				}
			}

			$this->M_admin->edit_report($nim, $data_semester5);
			$this->M_admin->getData_ipk5($nim);

			if($row->ip_k6 != 0.00){
				$this->M_admin->getData_ipk6($nim);
			}
			
			if($row->ip_k7 != 0.00){
				$this->M_admin->getData_ipk7($nim);
			}

			if($row->ip_k8 != 0.00){
				$this->M_admin->getData_ipk8($nim);
			}

			$this->M_utama->activity_admin($id_admin,$nama_admin,$ip,$ket_s5);

			$this->session->set_flashdata('semester5_notif','<script>alert("Semester 5 Berhasil diUpdate");</script>');
			echo $this->session->flashdata('semester5_notif');
		}else if($semester6 == 6){
			$sks6 		= $this->input->post('sks6');
			$t_sks6 	= $this->input->post('t_sks6');
			$ip_s6 		= $t_sks6/$sks6;

			$data_semester6 = array(
				'sks6' => $sks6,
				't_sks6' => $t_sks6,
				'ip_s6' => $ip_s6
			);

			if($edit_transkrip_semester6 == 6){
				if(!$this->upload->do_upload('transkrip_nilai6')){
					$this->session->set_flashdata('gagal_tranksrip_nilai6','<script>alert("Upload Transkrip Nilai Gagal, Silahkan Cek Kembali Ukuran dan Format File Transkrip Anda");</script>' );
					echo $this->session->flashdata('gagal_tranksrip_nilai6');
				}else{
					$file = $this->upload->data();
					if($row->transkrip_nilai6 != NULL){
						unlink('assets/transkrip_nilai/'.$row->transkrip_nilai6);
					}	
					
					$data_transkrip6 = ['transkrip_nilai6' => $file['file_name']];
					$this->M_admin->edit_report($nim, $data_transkrip6);
				}
			}

			$this->M_admin->edit_report($nim, $data_semester6);
			$this->M_admin->getData_ipk6($nim);
			
			if($row->ip_k7 != 0.00){
				$this->M_admin->getData_ipk7($nim);
			}

			if($row->ip_k8 != 0.00){
				$this->M_admin->getData_ipk8($nim);
			}

			$this->M_utama->activity_admin($id_admin,$nama_admin,$ip,$ket_s6);

			$this->session->set_flashdata('semester6_notif','<script>alert("Semester 6 Berhasil diUpdate");</script>');
			echo $this->session->flashdata('semester6_notif');
		}else if($semester7 == 7){
			$sks7 		= $this->input->post('sks7');
			$t_sks7 	= $this->input->post('t_sks7');
			$ip_s7 		= $t_sks7/$sks7;

			$data_semester7 = array(
				'sks7' => $sks7,
				't_sks7' => $t_sks7,
				'ip_s7' => $ip_s7
			);

			if($edit_transkrip_semester7 == 7){
				if(!$this->upload->do_upload('transkrip_nilai7')){
					$this->session->set_flashdata('gagal_tranksrip_nilai7','<script>alert("Upload Transkrip Nilai Gagal, Silahkan Cek Kembali Ukuran dan Format File Transkrip Anda");</script>' );
					echo $this->session->flashdata('gagal_tranksrip_nilai7');
				}else{
					$file = $this->upload->data();
					if($row->transkrip_nilai7 != NULL){
						unlink('assets/transkrip_nilai/'.$row->transkrip_nilai7);
					}	
					
					$data_transkrip7 = ['transkrip_nilai7' => $file['file_name']];
					$this->M_admin->edit_report($nim, $data_transkrip7);
				}
			}

			$this->M_admin->edit_report($nim, $data_semester7);
			$this->M_admin->getData_ipk7($nim);

			if($row->ip_k8 != 0.00){
				$this->M_admin->getData_ipk8($nim);
			}

			$this->M_utama->activity_admin($id_admin,$nama_admin,$ip,$ket_s7);

			$this->session->set_flashdata('semester7_notif','<script>alert("Semester 7 Berhasil diUpdate");</script>');
			echo $this->session->flashdata('semester7_notif');
		}else if($semester8 == 8){
			$sks8 		= $this->input->post('sks8');
			$t_sks8 	= $this->input->post('t_sks8');
			$ip_s8 		= $t_sks8/$sks8;

			$data_semester8 = array(
				'sks8' => $sks8,
				't_sks8' => $t_sks8,
				'ip_s8' => $ip_s8
			);

			if($edit_transkrip_semester8 == 8){
				if(!$this->upload->do_upload('transkrip_nilai8')){
					$this->session->set_flashdata('gagal_tranksrip_nilai8','<script>alert("Upload Transkrip Nilai Gagal, Silahkan Cek Kembali Ukuran dan Format File Transkrip Anda");</script>' );
					echo $this->session->flashdata('gagal_tranksrip_nilai8');
				}else{
					$file = $this->upload->data();
					if($row->transkrip_nilai8 != NULL){
						unlink('assets/transkrip_nilai/'.$row->transkrip_nilai8);
					}	
					
					$data_transkrip8 = ['transkrip_nilai8' => $file['file_name']];
					$this->M_admin->edit_report($nim, $data_transkrip8);
				}
			}

			$this->M_admin->edit_report($nim, $data_semester8);
			$this->M_admin->getData_ipk8($nim);

			$this->M_utama->activity_admin($id_admin,$nama_admin,$ip,$ket_s8);

			$this->session->set_flashdata('semester8_notif','<script>alert("Semester 8 Berhasil diUpdate");</script>');
			echo $this->session->flashdata('semester8_notif');
		}
		$this->view15();
	}

	public function delete_mhs($nim, $token, $token2){
		$crypt_token = sha1(md5(sha1(md5(sha1("jjhdDjewi1092389!@#")))));
		$crypt2_token2 = sha1(md5(sha1(md5(sha1("hyytiie21399$39!jjsdf")))));
		$row = $this->M_admin->getRow_report($nim);

    	if($token == $crypt_token && $token2 == $crypt2_token2){
    		if($row->transkrip_nilai1 != NULL){
    			unlink('assets/transkrip_nilai/'.$row->transkrip_nilai1);
    		}

    		if($row->transkrip_nilai2 != NULL){
    			unlink('assets/transkrip_nilai/'.$row->transkrip_nilai2);
    		}

    		if($row->transkrip_nilai3 != NULL){
    			unlink('assets/transkrip_nilai/'.$row->transkrip_nilai3);
    		}

    		if($row->transkrip_nilai4 != NULL){
    			unlink('assets/transkrip_nilai/'.$row->transkrip_nilai4);
    		}

    		if($row->transkrip_nilai5 != NULL){
    			unlink('assets/transkrip_nilai/'.$row->transkrip_nilai5);
    		}

    		if($row->transkrip_nilai6 != NULL){
    			unlink('assets/transkrip_nilai/'.$row->transkrip_nilai6);
    		}

    		if($row->transkrip_nilai7 != NULL){
    			unlink('assets/transkrip_nilai/'.$row->transkrip_nilai7);
    		}

    		if($row->transkrip_nilai8 != NULL){
    			unlink('assets/transkrip_nilai/'.$row->transkrip_nilai8);
    		}

			$this->db->where('nim', $nim);
			$this->db->delete('mastermhs_report');
			$this->session->set_flashdata('hapus_berhasil','<script>alert("Hapus Data Berhasil");</script>');
			echo $this->session->flashdata('hapus_berhasil');
		}else if($token != $crypt_token || $token != $crypt2_token2){
			$this->session->set_flashdata('hapus_gagal','<script>alert("Hapus Data gagal, Anda Tidak Diizinkan Hapus Data");</script>');
			echo $this->session->flashdata('hapus_gagal');
		}
		$this->view15();
	}

	public function excel1(){
	    $id_admin = $this->session->userdata('id');
	    $nama_admin = $this->session->userdata('nama_lengkap');
	    $ip = $this->input->ip_address();
	    $ket = 'Admin Export Excel Report Bidikmisi Per-Angkatan';
  	    $angkatan = $this->input->post('angkatan');
  	    $data = array(
      		'user' =>  $this->M_admin->getBidikmisi_report($angkatan),
      		'fakultas' => $this->M_utama->fakultas(),
      		'jurusan' => $this->M_utama->jurusan(),
      		'title' => "Export Data Mahasiswa Per-Angkatan Report Bidikmisi",
    		'title2' => "PER-ANGKATAN"
      	);
      	$this->M_utama->activity_admin($id_admin,$nama_admin,$ip,$ket);
      	$this->load->view('project_bidikmisi/admin/export_excel', $data);
	}

	public function excel2(){
	    $id_admin = $this->session->userdata('id');
	    $nama_admin = $this->session->userdata('nama_lengkap');
	    $ip = $this->input->ip_address();
	    $ket = 'Admin Export Excel Report Bidikmisi Per-Fakultas';
  	    $fakultas = $this->input->post('fakultas');
  	    $data = array(
      		'user' =>  $this->M_admin->getBidikmisi_report($fakultas),
      		'fakultas' => $this->M_utama->fakultas(),
      		'jurusan' => $this->M_utama->jurusan(),
      		'title' => "Export Data Mahasiswa Per-Fakultas Report Bidikmisi",
    		'title2' => "PER-FAKULTAS"
      	);
      	$this->M_utama->activity_admin($id_admin,$nama_admin,$ip,$ket);
      	$this->load->view('project_bidikmisi/admin/export_excel', $data);
	}
	//End fitur yang berhubungan dengan report bidikmisi prestasi

	//fitur yang berhubungan dengan change/tukar user mahasiswa dengan yang lain
	public function data_tukar($no_pendaftaran){
		$sess = $this->db->get_where('mastermhs_new',array(
    			'sha1(md5(sha1(md5(sha1(no_pendaftaran)))))' => $no_pendaftaran,
    		))->row();

		$get_mhs = $this->M_utama->getData_mhs($no_pendaftaran);
		foreach($get_mhs as $value){
			$getLulus = $value->getLulus;
		}

		if($getLulus == 'LULUS'){
			$ambil_th2 = date('Y');
			$data = array(
				'user' => $this->M_utama->getTable($ambil_th2),
				'provinsi' => $this->M_utama->propinsi(),
				'kota' => $this->M_utama->kab_kota(),
				'fakultas' => $this->M_utama->fakultas(),
				'jurusan' => $this->M_utama->jurusan(),
				'param' => 'tukar'
			);
			$sess_array = array(
				'np' => $sess->no_pendaftaran
			);
			$this->session->set_userdata($sess_array);
			$this->load->view('project_bidikmisi/admin/data_pendaftar5', $data);
		}else if($getLulus == 'TIDAK LULUS' || $getLulus == 'PENDING'){
			$this->session->set_flashdata('gagal_tukar','<script>alert("Data yang ingin ditukar HARUS sudah LULUS");</script>');
			redirect('Auth1/view1');
		}
	}

	public function cancel_change(){
		$this->session->unset_userdata('np');
		redirect('Auth1/view1');
	}

	public function change($no_pendaftaran){
		$data_mhs_tukar = $this->session->userdata('np');
		$data_mhs_tukar_enkrip = sha1(md5(sha1(md5(sha1($data_mhs_tukar)))));
		$getData_mhs 	= $this->M_utama->getData_mhs($no_pendaftaran);

		//data yang lulus
		$data_change = $this->M_utama->getWhere($data_mhs_tukar);
		foreach($data_change as $value){
			$nomor_tukar 	 = $value->no_pendaftaran;
			$fak_tukar 	 	 = $value->fakultas;
			$year_tukar  	 = $value->tahun;
			$get_lulus_tukar = $value->getLulus;
		}

		//data yang tidak lulus
		foreach($getData_mhs as $value){
			$nomor_change 	  = $value->no_pendaftaran;
			$fak_change   	  = $value->fakultas;
			$year_change  	  = $value->tahun;
			$get_lulus_change = $value->getLulus;
		}

		if($fak_tukar != $fak_change || $year_tukar != $year_change || $get_lulus_change == 'LULUS' || $get_lulus_change == 'PENDING'){
			$this->session->set_flashdata('gagal_tukar_verifikasi','<script>alert("Fakultas, Angkatan Tidak Sama, dan data yang dipilih harus yang TIDAK LULUS");</script>');
			echo $this->session->flashdata('gagal_tukar_verifikasi');
			$this->data_tukar($data_mhs_tukar_enkrip);
		}else if($fak_tukar == $fak_change && $year_tukar == $year_change){
			$enkrip_tukar  = sha1(md5(sha1(md5(sha1($nomor_tukar)))));
			$enkrip_change = sha1(md5(sha1(md5(sha1($nomor_change)))));

			$data_tukar_menukar = [
				'getLulus' => 'TIDAK LULUS',
				'skor' => 0.000,
				'updated_at' => date('Y-m-d H:i:s')
			];
			$this->M_utama->edit_data_mahasiswa($enkrip_tukar, $data_tukar_menukar);

			$data_change_menchange = [
				'getLulus' => 'LULUS',
				'skor' => 60.000,
				'updated_at' => date('Y-m-d H:i:s')
			];
			$this->M_utama->edit_data_mahasiswa($enkrip_change, $data_change_menchange);
			$this->session->set_flashdata('berhasil_tukar', '<script>alert("Data Telah Berhasil ditukar");</script>');
			$this->session->unset_userdata('np');
			redirect('Auth1/view1');
		}else{
			$this->session->set_flashdata('gagal_change','<script>alert("Error 404");</script>');
			redirect('Auth1/view1');
		}
	}
	//End fitur yang berhubungan dengan change/tukar user mahasiswa dengan yang lain

	public function v_set_kel(){
		$skor = $this->input->post('skor');

		if($skor != NULL){
			$data = [
				'skor' => $skor
			];
			$this->M_admin->updateSkor($data);
			$this->session->set_flashdata('skor_update','<script>alert("Skor Berhasil diUpdate");</script>');
			redirect('Admin/v_set_kel');
		}else{
			$data = array(
				'data_skor' => $this->M_admin->getSkor()->result()
			);
			$this->load->view('project_bidikmisi/admin/formset_lulus', $data);
		}
	}

	public function cetak_survey_validasi($no_pendaftaran){
		$data = array(
			'data' =>  $this->M_utama->getData_mhs($no_pendaftaran),
			'jurusan' => $this->M_utama->getTable_default('jurusan')->result(),
			'fakultas' => $this->M_utama->getTable_default('fakultas')->result(),
		);
		$this->load->view('project_bidikmisi/admin/cetak_survey_validasi', $data);
	}

	public function cetak_survey_validasi_all(){
		$tahun = date('Y');
		$data = array(
			'data' =>  $this->M_utama->view_tmp($tahun),
			'jurusan' => $this->M_utama->getTable_default('jurusan')->result(),
			'fakultas' => $this->M_utama->getTable_default('fakultas')->result(),
		);
		$this->load->view('project_bidikmisi/admin/cetak_survey_validasi', $data);
	}
	
	public function set_pending(){
	    $id_admin = $this->session->userdata('id');
	    $nama_admin = $this->session->userdata('nama_lengkap');
	    $ip = $this->input->ip_address();
	    $ket = 'Admin Setting Ulang semua data menjadi PENDING';
	    
	    $data = $this->M_admin->get_verifikasi()->result();
	    foreach($data as $value){
	        if($value->getLulus == "LULUS" || $value->getLulus == "TIDAK LULUS"){
	            $this->M_admin->get_update_verifikasi($value->no_pendaftaran);   
	        }
	    }
	    $this->M_utama->activity_admin($id_admin,$nama_admin,$ip,$ket);
	    $this->session->set_flashdata('berhasil_verifikasi', '<script>alert("Data Telah Berhasil disetting ulang menjadi PENDING");</script>');
	    redirect('Auth1/form_kelulusan');
	}
	
	public function set_kelulusan(){
        $id = $this->input->post('control_id');
        $pengumuman_lulus = $this->input->post('pengumuman_lulus');
        $pengumuman_lulus2 = $this->input->post('pengumuman_lulus2');
        $pengumuman_tidak_lulus = $this->input->post('pengumuman_tidak_lulus');
        
        $id_admin = $this->session->userdata('id');
	    $nama_admin = $this->session->userdata('nama_lengkap');
	    $ip = $this->input->ip_address();
	    $ket = 'Admin Setting Pengumuman Kelulusan';
        
        $data = array(
            'pengumuman_lulus' => $pengumuman_lulus,
            'pengumuman_lulus2' => $pengumuman_lulus2,
            'pengumuman_tidak_lulus' => $pengumuman_tidak_lulus
        );
        
        $this->M_admin->set_pengumuman($id, $data);
        $this->M_utama->activity_admin($id_admin,$nama_admin,$ip,$ket);
	    $this->session->set_flashdata('berhasil', '<script>alert("Data Telah Berhasil diupdate");</script>');
	    redirect('Auth1/view11');
	}
}?>