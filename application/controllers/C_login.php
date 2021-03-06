<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_login extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('M_mhs');
	}

	public function index(){
		$data = array(
			'captcha' => $this->recaptcha->getWidget(),
			'script_captcha' => $this->recaptcha->getScriptTag(),
			'timer' => $this->M_mhs->timer()
		);
		$this->load->view('project_bidikmisi/login/cpanel', $data);
	}

	public function register(){
		$data = array(
			'captcha' => $this->recaptcha->getWidget(),
			'script_captcha' => $this->recaptcha->getScriptTag(),
			'timer' => $this->M_mhs->timer()
		);
		$this->load->view('project_bidikmisi/login/register', $data);
	}

	public function cpanel(){
		$this->load->view('project_bidikmisi/login/cpanel_utama');
	}

	private function httpPost($url, $data)
	{
		$ch = curl_init();

		curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		$server_output = curl_exec($ch);

		curl_close ($ch);

		return json_decode($server_output, true);
	}

	public function login(){
		$no_pendaftaran = $this->input->post('no_pendaftaran');
		$password = $this->input->post('password');
		$recaptcha = $this->input->post('g-recaptcha-response');
	    $response = $this->recaptcha->verifyResponse($recaptcha);

	    date_default_timezone_set('Asia/Jakarta');
	    $tgl_sekarang = date('Y-m-d H:i:s');
	    $jadwal = $this->M_mhs->jadwal();
	    foreach($jadwal->result() as $value){
	        $sess['buka_sistem'] = $value->tanggal_buka_sistem;
	        $sess['tutup_sistem'] = $value->tanggal_tutup_sistem;
	        $sess['buka'] = $value->tanggal_buka;
	    	$sess['tutup'] = $value->tanggal_tutup;
	    	$sess['pengumuman'] = $value->tanggal_pengumuman;
	    	$sess['check_ukt'] = $value->check_ukt;

	    	$this->session->set_userdata($sess);
	    }
	    $jadwal_buka = $this->session->userdata('buka_sistem');
	    $jadwal_tutup = $this->session->userdata('tutup_sistem');
	    $check_ukt = $this->session->userdata('check_ukt');

	    if($tgl_sekarang < $jadwal_buka){
	      	$this->session->set_flashdata('belum_buka','<script>alert("Portal Beasiswa KIP-K Uin Bandung Belum Buka"); </script>');
	      	echo $this->session->flashdata('belum_buka');
	      	$this->index();
	    }else if($tgl_sekarang > $jadwal_tutup){
					$this->session->set_flashdata('tutup','<script>alert("Portal Beasiswa KIP-K Uin Bandung Sudah Tutup"); </script>');
	      	echo $this->session->flashdata('tutup');
	      	$this->index();
			}else if($tgl_sekarang >= $jadwal_buka && $tgl_sekarang <= $jadwal_tutup){
					//cek apakah sudah bayar ukt atau belum tapi lihat dulu settingan web nya
					if($check_ukt == 1) {
						$arrContextOptions=array(
							"ssl"=>array(
								"verify_peer"=>false,
								"verify_peer_name"=>false,
							)
						);
						$wskey = 'Y9SdptijlddozZo_3D';
						$getUKT = file_get_contents("http://keuangan.uinsgd.ac.id/b2b/SPP/status/nim/".$no_pendaftaran."?wskey=".$wskey, false, stream_context_create($arrContextOptions));
						$decodedUKT = json_decode($getUKT, true);

						if ($decodedUKT['status'] != false) {
							if($decodedUKT['data']['ket_lunas'] == 'BELUM LUNAS') {
								$this->session->set_flashdata('tutup','<script>alert("Anda tidak bisa login ke dalam web ini. Karena belum membayar UKT."); </script>');
								echo $this->session->flashdata('tutup');
								return $this->index();
							}
						}
					}
					//login mahasiswa
			        // $arrContextOptions=array(
			        //     "ssl"=>array(
			        //         "verify_peer"=>false,
			        //         "verify_peer_name"=>false,
			        //     )
			        // );
					$dataLogin = [
						'username' => $no_pendaftaran,
						'password' => $password
					];
					$url_login_salam = 'https://api.uinsgd.ac.id/salam/Auth/Login';
					$login = $this->httpPost($url_login_salam, $dataLogin);
					if (substr($no_pendaftaran,0,1) != '1') { //belum diedit
						//jika mhs tidak punya nim dan login akun yg CBT//THZ//dll
						$login = TRUE;
					}
	        // $login = file_get_contents("https://simak.uinsgd.ac.id/portal/serviceres/services/service.php?username=".$no_pendaftaran."&password=".$password."&api=1234", false, stream_context_create($arrContextOptions));

	        $login_mhs = $this->db->get_where('mastermhs_new',array(
	    			'no_pendaftaran' => $no_pendaftaran,
	    			'pin' => sha1(md5(sha1(md5(sha1($password)))))
	    		))->row();
					// if($login_mhs == true) { die('true'); } else { die('false'); }
	    		$this->session->set_flashdata('msg','<script>alert("Login Gagal, Silahkan input ulang No Pendaftaran atau Nim, Password, dan Recaptcha"); </script>');
	    		$this->session->set_flashdata('gagal', '<script>alert("Anda Tidak Diizinkan Masuk Sistem Beasiswa KIP-K"); </script>;');
	    		$this->session->set_flashdata('gagal2', '<script>alert("Login Tidak Valid"); </script>');

					if($login['status'] == 1 && ($response['success'] == TRUE) && isset($login_mhs)){ // && $login_mhs->tahun == date('Y')
	          $sess_mhs = array(
	              'reg'               => $login_mhs->reg,
	              'no_pendaftaran'    => $login_mhs->no_pendaftaran,
	              'fakultas'          => $login_mhs->fakultas,
	              'foto'              => $login_mhs->upload_foto,
	              'token'             => $login['data']['token'],
	              'nim'             	=> $login['data']['username']
	          );

	          $this->session->set_userdata($sess_mhs);
	          $reg = $this->session->userdata('reg');

	          if($reg == 0){
	              redirect('C_mhs/biodata');
	          }else if($reg == 1){
	              redirect('C_mhs');
	          }else if($reg == 2 || $reg == 3){
	              redirect('C_mhs/biodata');
	          }else{
	              redirect('C_login');
	          }
					} else if($login['status'] == 1 && ($response['success'] == TRUE) && !isset($login_mhs)) {
						date_default_timezone_set('Asia/Jakarta');
						$time = date('Y-m-d H:i:s');
						$ip_address = $this->input->ip_address();

						if (substr($no_pendaftaran,0,3) == 119) { //belum diedit
							$tahunnya = 2019;
						}else if (substr($no_pendaftaran,0,3) == 120){
							$tahunnya = 2020;
						}else{
							echo $this->session->flashdata('gagal2');
							return $this->index();
						}
						$data = [
								'reg' => 0,
								'no_pendaftaran' => $no_pendaftaran,
								'nim' => $no_pendaftaran,
			    			'pin' => sha1(md5(sha1(md5(sha1($password))))),
								'nama_mahasiswa' => $login['data']['first_name'],
								'email' => $login['data']['email'],
								'registeredon' => $time,
								'ip_address' => $ip_address,
								'tahun' => $tahunnya
						];
						$this->M_mhs->insertNewMhs($no_pendaftaran,$data);
						$this->session->set_userdata($data);
						redirect('C_mhs/biodata');
					}else if($login_mhs == FALSE || $login == FALSE || !isset($response['success']) || $response['success'] <> TRUE){
						echo $this->session->flashdata('msg');
						$this->index();
					}else if($response['success'] == TRUE && $login_mhs == TRUE) {
						$sess_mhs = array(
	              'reg'               => $login_mhs->reg,
	              'no_pendaftaran'    => $login_mhs->no_pendaftaran,
	              'fakultas'          => $login_mhs->fakultas,
	              'foto'              => $login_mhs->upload_foto,
	              'nim'             	=> $login_mhs->nim,
								'token'							=> $login_mhs->pin
	          );

	          $this->session->set_userdata($sess_mhs);
	          $reg = $this->session->userdata('reg');

	          if($reg == 0){
	              redirect('C_mhs/biodata');
	          }else if($reg == 1){
	              redirect('C_mhs');
	          }else if($reg == 2 || $reg == 3){
	              redirect('C_mhs/biodata');
	          }else{
	              redirect('C_login');
	          }
					}else if($login_mhs == FALSE){ // && $login_mhs->tahun != date('Y')
						echo $this->session->flashdata('gagal');
						$this->index();
					}else{
						echo $this->session->flashdata('gagal2');
						$this->index();
					}
					// else if($login_mhs == TRUE) {
	        //   $session = array(
	        //       'nim'       => $no_pendaftaran,
	        //       'token'     => '77400cmmsadmfAkdieO03Adkjd009ADk22dkd'
	        //   );
	        //   $this->session->set_userdata($session);
	        //   $nim = $this->session->userdata('nim');
	        //   $ip_address = $this->input->ip_address();
	        //   $cek_nim = $this->M_mhs->getData_login_nim($nim)->num_rows();
	        //   if($cek_nim == 0){
	        //       date_default_timezone_set('Asia/Jakarta');
	        //       $time = date('Y-m-d H:i:s');
					//
	        //       $data = [
	        //           'nim' => $nim,
	        //           'created_at' => $time,
	        //           'ip_address' => $ip_address
	        //       ];
	        //       $this->M_mhs->insert_data_nim($data);
	        //   }
					//
	        //   redirect('C_mhs/biodata');
			}
	}

	public function registerPostData()
	{
			$no_pendaftaran = $this->input->post('no_pendaftaran');
			$password = $this->input->post('password');
			$recaptcha = $this->input->post('g-recaptcha-response');
	    	$response = $this->recaptcha->verifyResponse($recaptcha);

	    	$this->session->set_flashdata('gagal2', '<script>alert("Anda tidak diperkenankan register KIP-K"); </script>');

	  //   	if (substr($no_pendaftaran,0,3) != 119 || substr($no_pendaftaran,0,3) != 120) { 
			// 	echo $this->session->flashdata('gagal2');
			// 	return $this->index();
			// }

			$checkMhs = $this->db->get_where('mastermhs_new',array(
				'no_pendaftaran' => $no_pendaftaran
			))->row();

			if ($checkMhs == true) {
				$this->session->set_flashdata('tutup','<script>alert("Maaf Anda Sudah Pernah Mendaftar Akun KIP-K !"); </script>');
				echo $this->session->flashdata('tutup');
				return $this->index();
			}

	    date_default_timezone_set('Asia/Jakarta');
	    $tgl_sekarang = date('Y-m-d H:i:s');
	    $jadwal = $this->M_mhs->jadwal();
	    foreach($jadwal->result() as $value){
	        $sess['buka_sistem'] = $value->tanggal_buka_sistem;
	        $sess['tutup_sistem'] = $value->tanggal_tutup_sistem;
	        $sess['buka'] = $value->tanggal_buka;
	    	$sess['tutup'] = $value->tanggal_tutup;
	    	$sess['pengumuman'] = $value->tanggal_pengumuman;

	    	$this->session->set_userdata($sess);
	    }
	    $jadwal_buka = $this->session->userdata('buka_sistem');
	    $jadwal_tutup = $this->session->userdata('tutup_sistem');

	    if($tgl_sekarang < $jadwal_buka){
	      	$this->session->set_flashdata('belum_buka','<script>alert("Portal Beasiswa KIP-K Uin Bandung Belum Buka"); </script>');
	      	echo $this->session->flashdata('belum_buka');
	      	$this->index();
	    }else if($tgl_sekarang > $jadwal_tutup){
					$this->session->set_flashdata('tutup','<script>alert("Portal Beasiswa KIP-K Uin Bandung Sudah Tutup"); </script>');
	      	echo $this->session->flashdata('tutup');
	      	$this->index();
			}else if($tgl_sekarang >= $jadwal_buka && $tgl_sekarang <= $jadwal_tutup){
					date_default_timezone_set('Asia/Jakarta');
					$time = date('Y-m-d H:i:s');
					$ip_address = $this->input->ip_address();

					$data = [
							'reg' => 0,
							'no_pendaftaran' => $no_pendaftaran,
							'nim' => 0,
							'pin' => sha1(md5(sha1(md5(sha1($password))))),
							'nama_mahasiswa' => $this->input->post('nama_mahasiswa'),
							'email' => $this->input->post('email'),
							'registeredon' => $time,
							'ip_address' => $ip_address,
							'tahun' => date('Y')
					];
					$this->M_mhs->insertNewMhs($no_pendaftaran,$data);
					$this->session->set_userdata($data);
					$this->session->set_flashdata('tutup','<script>alert("Register berhasil! Silahkan Login"); </script>');
	      	echo $this->session->flashdata('tutup');
					$this->index();
			}
	}

	public function logout(){
		$this->session->unset_userdata('reg');
		$this->session->unset_userdata('no_pendaftaran');
    	$this->session->unset_userdata('nim');
		$this->session->unset_userdata('foto');
		$this->session->unset_userdata('foto_rumah_depan');
		$this->session->unset_userdata('foto_rumah_kiri');
		$this->session->unset_userdata('foto_rumah_kanan');
		$this->session->unset_userdata('foto_pbb');
		$this->session->unset_userdata('foto_rek_listrik');
		$this->session->unset_userdata('token');
		$this->session->unset_userdata('buka');
		$this->session->unset_userdata('tutup');
    	$this->session->unset_userdata('buka_sistem');
    	$this->session->unset_userdata('tutup_sistem');
		$this->session->unset_userdata('tutup_pengumuman');
		redirect('C_login');
	}
}
?>
