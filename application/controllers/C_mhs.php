<?php defined('BASEPATH') OR exit('No direct script access allowed');

class C_mhs extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->model('M_mhs');
		$this->load->helpers('tgl_indo');

		$no_pendaftaran = $this->session->userdata('no_pendaftaran');
		$token = $this->session->userdata('token');
		$nim = $this->session->userdata('nim');
// die($no_pendaftaran);
		if((empty($no_pendaftaran) && empty($token)) || (empty($nim) && empty($token))) {
			redirect('C_login');
		}
	}

	public function index(){
		$reg = $this->session->userdata('reg');
		$buka = $this->session->userdata('buka');
		$tutup = $this->session->userdata('tutup');

		date_default_timezone_set('Asia/Jakarta');
        $sekarang = date('Y-m-d H:i:s');

		if($reg == 2){
			redirect('C_mhs/biodata');
		}else if($sekarang >= $buka && $sekarang <= $tutup){
			$no_pendaftaran = $this->session->userdata('no_pendaftaran');
			$data['data_diri'] = $this->M_mhs->getData_login($no_pendaftaran)->result();
			$this->load->view('project_bidikmisi/mahasiswa/upload_foto', $data);
		}else if($buka < $sekarang){
			$this->session->set_flashdata('belum_buka','<script>alert("Pendaftaran Beasiswa KIP-K Uin Bandung Tidak dibuka"); </script>');
        	echo $this->session->flashdata('belum_buka');
        	$this->biodata();
		}else if($tutup > $sekarang){
			$this->session->set_flashdata('tutup','<script>alert("Pendaftaran Beasiswa KIP-K Uin Bandung Sudah Tutup"); </script>');
        	echo $this->session->flashdata('tutup');
        	$this->biodata();
		}
	}

	public function step2(){
		$token = $this->session->userdata('token');
		$reg = $this->session->userdata('reg');
		$buka = $this->session->userdata('buka');
		$tutup = $this->session->userdata('tutup');
		$nim = $this->session->userdata('nim');
		// date_default_timezone_set('Asia/Jakarta');
		// if (date('m') > 8)
		// 	$semesterNya = date('Y').'1';
		// else
		// 	$semesterNya = (date('Y')-1).'2';
		//
		// die($getKHS);


		date_default_timezone_set('Asia/Jakarta');
    $sekarang = date('Y-m-d H:i:s');

		if($reg == 2){
			redirect('C_mhs/biodata');
		}else if($sekarang >= $buka && $sekarang <= $tutup){
			$no_pendaftaran = $this->session->userdata('no_pendaftaran');

			$data = array(
				'data_diri' => $this->M_mhs->getData_login($no_pendaftaran)->result(),
				'propinsi' => $this->M_mhs->propinsi(),
				'kota' => $this->M_mhs->kab_kota()
			);

			$this->load->view('project_bidikmisi/mahasiswa/identitas_diri', $data);
		}else if($buka < $sekarang){
			$this->session->set_flashdata('belum_buka','<script>alert("Pendaftaran Beasiswa KIP-K Uin Bandung Tidak dibuka"); </script>');
        	echo $this->session->flashdata('belum_buka');
        	$this->biodata();
		}else if($tutup > $sekarang){
			$this->session->set_flashdata('tutup','<script>alert("Pendaftaran Beasiswa KIP-K Uin Bandung Sudah Tutup"); </script>');
        	echo $this->session->flashdata('tutup');
        	$this->biodata();
		}
	}

	public function step3(){
		$reg = $this->session->userdata('reg');
		$buka = $this->session->userdata('buka');
		$tutup = $this->session->userdata('tutup');

		date_default_timezone_set('Asia/Jakarta');
        $sekarang = date('Y-m-d H:i:s');

		if($reg == 2){
			redirect('C_mhs/biodata');
		}else if($sekarang >= $buka && $sekarang <= $tutup){
			$no_pendaftaran = $this->session->userdata('no_pendaftaran');

			$data = array (
				'data_diri' => $this->M_mhs->getData_login($no_pendaftaran)->result(),
				'propinsi' => $this->M_mhs->propinsi(),
				'kota' => $this->M_mhs->kab_kota()
			);
			$this->load->view('project_bidikmisi/mahasiswa/data_ortu', $data);
		}else if($buka < $sekarang){
			$this->session->set_flashdata('belum_buka','<script>alert("Pendaftaran Beasiswa KIP-K Uin Bandung Tidak dibuka"); </script>');
        	echo $this->session->flashdata('belum_buka');
        	$this->biodata();
		}else if($tutup > $sekarang){
			$this->session->set_flashdata('tutup','<script>alert("Pendaftaran Beasiswa KIP-K Uin Bandung Sudah Tutup"); </script>');
        	echo $this->session->flashdata('tutup');
        	$this->biodata();
		}
	}

	public function step4(){
		$reg = $this->session->userdata('reg');
		$buka = $this->session->userdata('buka');
		$tutup = $this->session->userdata('tutup');

		date_default_timezone_set('Asia/Jakarta');
        $sekarang = date('Y-m-d H:i:s');

		if($reg == 2){
			redirect('C_mhs/biodata');
		}else if($sekarang >= $buka && $sekarang <= $tutup){
			$no_pendaftaran = $this->session->userdata('no_pendaftaran');

			$data = array (
				'data_diri' => $this->M_mhs->getData_login($no_pendaftaran)->result(),
			);
			$this->load->view('project_bidikmisi/mahasiswa/data_kondisi_rumah', $data);
		}else if($buka < $sekarang){
			$this->session->set_flashdata('belum_buka','<script>alert("Pendaftaran Beasiswa KIP-K Uin Bandung Tidak dibuka"); </script>');
        	echo $this->session->flashdata('belum_buka');
        	$this->biodata();
		}else if($tutup > $sekarang){
			$this->session->set_flashdata('tutup','<script>alert("Pendaftaran Beasiswa KIP-K Uin Bandung Sudah Tutup"); </script>');
        	echo $this->session->flashdata('tutup');
        	$this->biodata();
		}
	}

	public function step5(){
		$reg = $this->session->userdata('reg');
		$buka = $this->session->userdata('buka');
		$tutup = $this->session->userdata('tutup');

		date_default_timezone_set('Asia/Jakarta');
        $sekarang = date('Y-m-d H:i:s');

		if($reg == 2){
			redirect('C_mhs/biodata');
		}else if($sekarang >= $buka && $sekarang <= $tutup){
			$no_pendaftaran = $this->session->userdata('no_pendaftaran');

			$data = array(
				'data_diri' => $this->M_mhs->getData_login($no_pendaftaran)->result(),
				'propinsi' => $this->M_mhs->propinsi(),
				'kota' => $this->M_mhs->kab_kota(),
				'tahun_lulus' => $this->M_mhs->getTahun_lulus()
			);
			$this->load->view('project_bidikmisi/mahasiswa/data_sekolah', $data);
		}else if($buka < $sekarang){
			$this->session->set_flashdata('belum_buka','<script>alert("Pendaftaran Beasiswa KIP-K Uin Bandung Tidak dibuka"); </script>');
        	echo $this->session->flashdata('belum_buka');
        	$this->biodata();
		}else if($tutup > $sekarang){
			$this->session->set_flashdata('tutup','<script>alert("Pendaftaran Beasiswa KIP-K Uin Bandung Sudah Tutup"); </script>');
        	echo $this->session->flashdata('tutup');
        	$this->biodata();
		}
	}

	public function step6(){
		$reg = $this->session->userdata('reg');
		$buka = $this->session->userdata('buka');
		$tutup = $this->session->userdata('tutup');

		date_default_timezone_set('Asia/Jakarta');
        $sekarang = date('Y-m-d H:i:s');

		if($reg == 2){
			redirect('C_mhs/biodata');
		}else if($sekarang >= $buka && $sekarang <= $tutup){
			$no_pendaftaran = $this->session->userdata('no_pendaftaran');

			$data = array(
				'data_diri' => $this->M_mhs->getData_login($no_pendaftaran)->result(),
				'propinsi' => $this->M_mhs->propinsi(),
				'kota' => $this->M_mhs->kab_kota()
			);
			$this->load->view('project_bidikmisi/mahasiswa/data_pesantren', $data);
		}else if($buka < $sekarang){
			$this->session->set_flashdata('belum_buka','<script>alert("Pendaftaran Beasiswa KIP-K Uin Bandung Tidak dibuka"); </script>');
        	echo $this->session->flashdata('belum_buka');
        	$this->biodata();
		}else if($tutup > $sekarang){
			$this->session->set_flashdata('tutup','<script>alert("Pendaftaran Beasiswa KIP-K Uin Bandung Sudah Tutup"); </script>');
        	echo $this->session->flashdata('tutup');
        	$this->biodata();
		}
	}

	public function step7(){
		$reg = $this->session->userdata('reg');
		$buka = $this->session->userdata('buka');
		$tutup = $this->session->userdata('tutup');

		date_default_timezone_set('Asia/Jakarta');
        $sekarang = date('Y-m-d H:i:s');

		if($reg == 2){
			redirect('C_mhs/biodata');
		}else if($sekarang >= $buka && $sekarang <= $tutup){
			$no_pendaftaran = $this->session->userdata('no_pendaftaran');

			$data = array(
				'data_diri' => $this->M_mhs->getData_login($no_pendaftaran)->result(),
			);
			$this->load->view('project_bidikmisi/mahasiswa/keterampilan', $data);
		}else if($buka < $sekarang){
			$this->session->set_flashdata('belum_buka','<script>alert("Pendaftaran Beasiswa KIP-K Uin Bandung Tidak dibuka"); </script>');
        	echo $this->session->flashdata('belum_buka');
        	$this->biodata();
		}else if($tutup > $sekarang){
			$this->session->set_flashdata('tutup','<script>alert("Pendaftaran Beasiswa KIP-K Uin Bandung Sudah Tutup"); </script>');
        	echo $this->session->flashdata('tutup');
        	$this->biodata();
		}
	}

	public function step8(){
	    $reg = $this->session->userdata('reg');
		$buka = $this->session->userdata('buka');
		$tutup = $this->session->userdata('tutup');

		date_default_timezone_set('Asia/Jakarta');
        $sekarang = date('Y-m-d H:i:s');

		if($reg == 2){
			redirect('C_mhs/biodata');
		}else if($sekarang >= $buka && $sekarang <= $tutup){
			$no_pendaftaran = $this->session->userdata('no_pendaftaran');

			$data = array(
				'data_diri' => $this->M_mhs->getData_login($no_pendaftaran)->result(),
			);
			$this->load->view('project_bidikmisi/mahasiswa/data_kipk', $data);
		}else if($buka < $sekarang){
			$this->session->set_flashdata('belum_buka','<script>alert("Pendaftaran Beasiswa KIP-K Uin Bandung Tidak dibuka"); </script>');
        	echo $this->session->flashdata('belum_buka');
        	$this->biodata();
		}else if($tutup > $sekarang){
			$this->session->set_flashdata('tutup','<script>alert("Pendaftaran Beasiswa KIP-K Uin Bandung Sudah Tutup"); </script>');
        	echo $this->session->flashdata('tutup');
        	$this->biodata();
		}
	}

	public function step9(){
	    $reg = $this->session->userdata('reg');
		$buka = $this->session->userdata('buka');
		$tutup = $this->session->userdata('tutup');

		date_default_timezone_set('Asia/Jakarta');
        $sekarang = date('Y-m-d H:i:s');

		if($reg == 2){
			redirect('C_mhs/biodata');
		}else if($sekarang >= $buka && $sekarang <= $tutup){
			$no_pendaftaran = $this->session->userdata('no_pendaftaran');
			$data_login = $this->M_mhs->getData_login($no_pendaftaran);
	        foreach($data_login->result() as $value){
				$sess_foto_dokumen['foto_kipk']			= $value->upload_foto_kipk;
				$sess_foto_dokumen['foto_ktp']			= $value->upload_foto_ktp;
				$sess_foto_dokumen['foto_kk']			= $value->upload_foto_kk;
	        	$sess_foto_dokumen['foto_rumah_depan']	= $value->upload_foto_rumah_depan;
	        	$sess_foto_dokumen['foto_rumah_kiri'] 	= $value->upload_foto_rumah_kiri;
				$sess_foto_dokumen['foto_rumah_kanan'] 	= $value->upload_foto_rumah_kanan;
				$sess_foto_dokumen['foto_rumah_dalam'] 	= $value->upload_foto_rumah_dalam;
	        	$sess_foto_dokumen['foto_pbb'] 			= $value->upload_foto_pbb;
	        	$sess_foto_dokumen['foto_rek_listrik'] 	= $value->upload_foto_rek_listrik;

	        	$this->session->set_userdata($sess_foto_dokumen);
	        }

			$data = array(
				'data_diri' => $this->M_mhs->getData_login($no_pendaftaran)->result(),
			);
			$this->load->view('project_bidikmisi/mahasiswa/upload_dokumen_pendukung', $data);
		}else if($buka < $sekarang){
			$this->session->set_flashdata('belum_buka','<script>alert("Pendaftaran Beasiswa KIP-K Uin Bandung Tidak dibuka"); </script>');
        	echo $this->session->flashdata('belum_buka');
        	$this->biodata();
		}else if($tutup > $sekarang){
			$this->session->set_flashdata('tutup','<script>alert("Pendaftaran Beasiswa KIP-K Uin Bandung Sudah Tutup"); </script>');
        	echo $this->session->flashdata('tutup');
        	$this->biodata();
		}
	}

	public function step10(){
		$reg = $this->session->userdata('reg');
		$buka = $this->session->userdata('buka');
		$tutup = $this->session->userdata('tutup');

		date_default_timezone_set('Asia/Jakarta');
        $sekarang = date('Y-m-d H:i:s');

		if($reg == 2){
			redirect('C_mhs/biodata');
		}else if($sekarang >= $buka && $sekarang <= $tutup){
			$no_pendaftaran = $this->session->userdata('no_pendaftaran');

			$data = array(
				'data_diri' => $this->M_mhs->getData_login($no_pendaftaran)->result()
			);
			$this->load->view('project_bidikmisi/mahasiswa/persyaratan_dokumen', $data);
		}else if($buka < $sekarang){
			$this->session->set_flashdata('belum_buka','<script>alert("Pendaftaran Beasiswa KIP-K Uin Bandung Tidak dibuka"); </script>');
        	echo $this->session->flashdata('belum_buka');
        	$this->biodata();
		}else if($tutup > $sekarang){
			$this->session->set_flashdata('tutup','<script>alert("Pendaftaran Beasiswa KIP-K Uin Bandung Sudah Tutup"); </script>');
        	echo $this->session->flashdata('tutup');
        	$this->biodata();
		}
	}


	//view halaman sementara untuk verifikasi data
	public function step11(){
		$reg = $this->session->userdata('reg');
		$buka = $this->session->userdata('buka');
		$tutup = $this->session->userdata('tutup');

		date_default_timezone_set('Asia/Jakarta');
        $sekarang = date('Y-m-d H:i:s');

		if($reg == 2){
			redirect('C_mhs/biodata');
		}else if($sekarang >= $buka && $sekarang <= $tutup){
			$no_pendaftaran = $this->session->userdata('no_pendaftaran');
			$data = array(
				'propinsi' => $this->M_mhs->propinsi(),
				'data' => $this->M_mhs->getData_login($no_pendaftaran)->result(),
				'data_diri' => $this->M_mhs->getData_login($no_pendaftaran)->result(),
				'data_kab_kota' => $this->M_mhs->kab_kota(),
				'fakultas' => $this->M_mhs->fakultas(),
				'jurusan' => $this->M_mhs->jurusan()
			);

			$this->load->view('project_bidikmisi/mahasiswa/view_sementara', $data);
		}else if($buka < $sekarang){
			$this->session->set_flashdata('belum_buka','<script>alert("Pendaftaran Beasiswa KIP-K Uin Bandung Tidak dibuka"); </script>');
        	echo $this->session->flashdata('belum_buka');
        	$this->biodata();
		}else if($tutup > $sekarang){
			$this->session->set_flashdata('tutup','<script>alert("Pendaftaran Beasiswa KIP-K Uin Bandung Sudah Tutup"); </script>');
        	echo $this->session->flashdata('tutup');
        	$this->biodata();
		}
	}

	//function skoring/monitoring/perhitungan
	public function step12(){
		$reg = $this->session->userdata('reg');
		$buka = $this->session->userdata('buka');
		$tutup = $this->session->userdata('tutup');

		date_default_timezone_set('Asia/Jakarta');
        $sekarang = date('Y-m-d H:i:s');

		if($reg == 2){
			redirect('C_mhs/biodata');
		}else if($sekarang >= $buka && $sekarang <= $tutup){
			$no_pendaftaran = $this->session->userdata('no_pendaftaran');
			$ip = $this->input->ip_address();
	    	$tahun = date('Y');
			$kolom = $this->M_mhs->getKolom_default($no_pendaftaran);
			$kolom4 = $this->M_mhs->getKolom_default($no_pendaftaran);
			$almarhum = $kolom->almarhum;
			$almarhumah = $kolom4->almarhumah;

			$this->M_mhs->getReg2($no_pendaftaran);
			$query_reg = $this->db->get_where('mastermhs_new', array(
				'no_pendaftaran' => $no_pendaftaran
			))->row();
			$sess_reg = array(
				'reg' => $query_reg->reg
			);
			$this->session->set_userdata($sess_reg);

			$satu = 1;
			$nol = 0;
			$pending = "PENDING";
			$ayah = 40;
			$ibu = 20;
			$default = 0;
			$skor = (float) 60.000;

			//jika almarhum dan almarhumah di ceklis
			if($almarhum == $ayah && $almarhumah == $ibu) {
				$this->M_mhs->getScoring_kotor($no_pendaftaran);
				$kolom2 = $this->M_mhs->getKolom_default($no_pendaftaran);

				if($kolom2->skor >= $skor){
					$data = ['getLulus' => $pending,
							 'ip_address' => $ip,
							 'tahun' => $tahun
					];
					$this->M_mhs->edit_data($no_pendaftaran, $data);
				}else if($kolom2->skor < $skor){
					$data = ['getLulus' => $pending,
							 'ip_address' => $ip,
							 'tahun' => $tahun
					];
					$this->M_mhs->edit_data($no_pendaftaran, $data);
				}else{
					echo "Error 405";
				}
			//jika almarhum di ceklis
			}else if($almarhum == $ayah){
				$this->M_mhs->getScoring_ayah($no_pendaftaran);
				$kolom2 = $this->M_mhs->getKolom_default($no_pendaftaran);

				if($kolom2->skor >= $skor){
					$data = ['getLulus' => $pending,
							 'ip_address' => $ip,
							 'tahun' => $tahun
					];
					$this->M_mhs->edit_data($no_pendaftaran, $data);
				}else if($kolom2->skor < $skor){
					$data = ['getLulus' => $pending,
							 'ip_address' => $ip,
							 'tahun' => $tahun
					];
					$this->M_mhs->edit_data($no_pendaftaran, $data);
				}else{
					echo "Error 405";
				}
			//jika almarhumah di ceklis
			}else if($almarhumah == $ibu){
				$this->M_mhs->getScoring_ibu($no_pendaftaran);
				$kolom2 = $this->M_mhs->getKolom_default($no_pendaftaran);

				if($kolom2->skor >= $skor){
					$data = ['getLulus' => $pending,
							 'ip_address' => $ip,
							 'tahun' => $tahun
					];
					$this->M_mhs->edit_data($no_pendaftaran, $data);
				}else if($kolom2->skor < $skor){
					$data = ['getLulus' => $pending,
							 'ip_address' => $ip,
							 'tahun' => $tahun
					];
					$this->M_mhs->edit_data($no_pendaftaran, $data);
				}else{
					echo "Error 405";
				}
			//jika almarhum/almarhumah TIDAK di ceklis
			}else if($almarhum == $default && $almarhumah == $default){
				$this->M_mhs->getScoring_bersih($no_pendaftaran);
				$kolom2 = $this->M_mhs->getKolom_default($no_pendaftaran);

				if($kolom2->skor >= $skor){
					$data = ['getLulus' => $pending,
							 'ip_address' => $ip,
							 'tahun' => $tahun
					];
					$this->M_mhs->edit_data($no_pendaftaran, $data);
				}else if($kolom2->skor < $skor){
					$data = ['getLulus' => $pending,
							 'ip_address' => $ip,
							 'tahun' => $tahun
					];
					$this->M_mhs->edit_data($no_pendaftaran, $data);
				}else{
					echo "Error 405";
				}
			}

			$this->session->set_flashdata('direct10_success', '
							<div class="alert alert-success">
								<p>Verifikasi Berhasil, Silahkan Tunggu Pengumuman Lulus/Tidak Lulus</p>
								<h4>Seluruh berkas persyaratan HVS ukuran F4 (Folio) dan dimasukkan dalam amplop berwarna sesuai fakultas masing-masing, pada pojok kanan atas ditulis Program KIP Kuliah Angkatan Tahun 2019, NAMA, NIM, Jurusan, dan Fakultas dikirimkan ke Bagian Kemahasiswaan dan Alumni Gedung O. Djauharudin lantai 4 UIN Sunan Gunung Djati Bandung Jl. A.H. Nasution No. 105 Cibiru Bandung.</h4>
							</div>');
			redirect('C_mhs/biodata');
		}else if($buka < $sekarang){
			$this->session->set_flashdata('belum_buka','<script>alert("Pendaftaran Beasiswa KIP-K Uin Bandung Tidak dibuka"); </script>');
        	echo $this->session->flashdata('belum_buka');
        	$this->biodata();
		}else if($tutup > $sekarang){
			$this->session->set_flashdata('tutup','<script>alert("Pendaftaran Beasiswa KIP-K Uin Bandung Sudah Tutup"); </script>');
        	echo $this->session->flashdata('tutup');
        	$this->biodata();
		}
	}
	//end function skoring/monitoring/perhitungan

	//view halaman cetak
	public function cetak($param){
		$reg = $this->session->userdata('reg');
		$no_pendaftaran = $this->session->userdata('no_pendaftaran');
		$data = array(
			'propinsi' => $this->M_mhs->propinsi(),
			'data' => $this->M_mhs->getData_login($no_pendaftaran)->result(),
			'data_kab_kota' => $this->M_mhs->kab_kota(),
			'fakultas' => $this->M_mhs->fakultas(),
			'jurusan' => $this->M_mhs->jurusan(),
			'param' => $param
		);

		if($reg == 0 || $reg == 1){
			redirect('C_mhs/biodata');
		}else if($param == 'formulir'){
			$this->load->view('project_bidikmisi/mahasiswa/cetak_formulir', $data);
		}else if($param == 'surat_pernyataan'){
			$this->load->view('project_bidikmisi/mahasiswa/cetak_pernyataan', $data);
		}else if($param == 'dokumen'){
			$this->load->view('project_bidikmisi/mahasiswa/cetak_dokumen', $data);
		}else if($param == 'formulir_ceklis'){
			$this->load->view('project_bidikmisi/mahasiswa/cetak_formulir_ceklis', $data);
		}
	}

	//view halaman pengumuman bidikMisi
	public function pengumuman(){
		$reg = $this->session->userdata('reg');

		if($reg == 0 || $reg == 1){
			redirect('C_mhs/biodata');
		}
		$no_pendaftaran = $this->session->userdata('no_pendaftaran');
		date_default_timezone_set('Asia/Jakarta');
        $tgl_sekarang = date('Y-m-d H:i:s');
        $jadwal = $this->M_mhs->jadwal();
        foreach($jadwal->result() as $value){
        	$sess['pengumuman'] = $value->tanggal_pengumuman;
            $sess['tutup_pengumuman'] = $value->tanggal_tutup_pengumuman;

        	$this->session->set_userdata($sess);
        }
		$data = array(
			'data' => $this->M_mhs->getData_login($no_pendaftaran)->result(),
			'jadwal' => $this->M_mhs->jadwal()->result(),
			'fakultas' => $this->M_mhs->fakultas(),
			'jurusan' => $this->M_mhs->jurusan(),
			'data_document' => $this->M_mhs->getDocument_bidikmisi()->result(),
			'data_document2' => $this->M_mhs->getDocument_bidikmisi2()->result(),
			'data_pengumuman' => $this->M_mhs->getTable_default('mastermhs_control_report')->result()
		);
		$this->load->view('project_bidikmisi/mahasiswa/pengumuman', $data);
	}

	//function insert_rek
	public function insert_rek(){
		$no_pendaftaran = $this->session->userdata('no_pendaftaran');
		$nama_rekening = $this->input->post('nama_rekening');
		$rek_mhs = $this->input->post('rekening_mhs');

		$data = [
		    'nama_rekening' => $nama_rekening,
			'rekening_mhs' => $rek_mhs
		];

		$this->M_mhs->edit_data($no_pendaftaran, $data);
		$this->session->set_flashdata('msg_berhasil',
						'<div class="alert alert-info">
							<p>Rekening Berhasil di Masukan</p>
						</div>');
		$this->pengumuman();
	}

	//view ganti password
	public function change(){
	    $data = array(
	        'data_document' => $this->M_mhs->getDocument_bidikmisi()->result(),
					'data_document2' => $this->M_mhs->getDocument_bidikmisi2()->result()
	    );
			$no_pendaftaran = $this->session->userdata('no_pendaftaran');
			$data['data_diri'] = $this->M_mhs->getData_login($no_pendaftaran)->result();
		$this->load->view('project_bidikmisi/mahasiswa/ganti_password', $data);
	}

	//function ganti password
	public function change_password(){
		$no_pendaftaran = $this->session->userdata('no_pendaftaran');
		$pass_baru = $this->input->post('password_baru');
		$confirm_pass_baru = $this->input->post('konfirmasi_password_baru');

		$this->session->set_flashdata('gagal_ganti', '<script>alert("Password Tidak Sama, Silahkan Input Ulang"); </script>');
		$this->session->set_flashdata('berhasil_ganti', '<script>alert("Password Berhasil diganti"); </script>');

		if($pass_baru != $confirm_pass_baru){
			echo $this->session->flashdata('gagal_ganti');
		}else if($pass_baru == $confirm_pass_baru){
			$data = [
				'pin' => sha1(md5(sha1(md5(sha1($confirm_pass_baru)))))
			];
			$this->M_mhs->edit_data($no_pendaftaran, $data);
			echo $this->session->flashdata('berhasil_ganti');
		}
		$this->change();
	}

	//function listKota
	public function listKota(){
		//ambil data propinsi yang dikirim via ajax post
		$id_propinsi = $this->input->post('id_propinsi');

		$kota = $this->M_mhs->viewByPropinsi($id_propinsi);

		//Buat variabel untuk menampung tag - tag optionnya
		$lists = "<option value=''>-Pilih SalahSatu-</option>";
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

		$lists = "<option value=''>-Pilih SalahSatu-</option>";
		foreach ($jurusan as $data) {
			$lists .= "<option value='".$data->id_jurusan."'>".$data->nama_jurusan."</option>";
		}

		$callback = array('list_jurusan' => $lists);

		echo json_encode($callback);
	}

	//function view biodata
	public function biodata(){
		$no_pendaftaran = $this->session->userdata('no_pendaftaran');
		$nim = $this->session->userdata('nim');
		$data = array(
			'data' => $this->M_mhs->getData_login($no_pendaftaran)->result(),
			'data_nim' => $this->M_mhs->getData_login_nim($nim)->result(),
			'data_diri' => $this->M_mhs->getData_login($no_pendaftaran)->result(),
			'jurusan' => $this->M_mhs->jurusan(),
			'fakultas' => $this->M_mhs->fakultas(),
			'data_document' => $this->M_mhs->getDocument_bidikmisi()->result(),
			'data_document2' => $this->M_mhs->getDocument_bidikmisi2()->result(),
			'timer' => $this->M_mhs->timer()
		);
		$this->load->view('project_bidikmisi/mahasiswa/dashboard_mhs', $data);
	}

	//function view update data biodata
	public function update(){
		$no_pendaftaran = $this->session->userdata('no_pendaftaran');
		$nim = $this->session->userdata('nim');
		$buka = $this->session->userdata('buka');
		$tutup = $this->session->userdata('tutup');

		date_default_timezone_set('Asia/Jakarta');
        $time = date('Y-m-d H:i:s');

		if($no_pendaftaran != NULL){
		    if( $time < $buka|| $time > $tutup){
    		    $this->session->set_flashdata('message_2','<script>alert("Maaf anda Tidak Bisa Edit Pendaftar");</script>');
    		    echo $this->session->flashdata('message_2');
    		}else{
    			$nama_mahasiswa 	= $this->input->post('nama_lengkap');
    			$jenis_kelamin 		= $this->input->post('jenis_kelamin');
    			$tanggal_lahir 		= $this->input->post('tgl_lahir');
    			$fakultas 			= $this->input->post('fakultas');
    			$jurusan 			= $this->input->post('jurusan');
    			$no_hp 			= $this->input->post('no_hp');
    			$jalur_pendaftaran 	= $this->input->post('jalur_pendaftaran');
    			$kategori			= $this->input->post('kategori');

    			$data = [ 'nama_mahasiswa'	  => $nama_mahasiswa,
					  'jenis_kelamin' 	  => $jenis_kelamin,
					  'tanggal_lahir' 	  => $tanggal_lahir,
					  'jalur_pendaftaran' => $jalur_pendaftaran,
					  'fakultas'		  => $fakultas,
					  'jurusan' 		  => $jurusan,
					  'kategori' 		  => $kategori,
						'no_hp' 				=> $no_hp
    			];
    			$edit_data = $this->M_mhs->edit_data($no_pendaftaran, $data);
    			$query_fak = $this->db->get_where('mastermhs_new', array(
    					'no_pendaftaran' => $no_pendaftaran
    				))->row();

					$this->M_mhs->getReg1($no_pendaftaran);
					$login_mhs = $this->db->get_where('mastermhs_new',array(
	    			'no_pendaftaran' => $no_pendaftaran
	    		))->row();
					$sess_reg = array(
							'reg' => $login_mhs->reg
					);
					$this->session->set_userdata($sess_reg);

    			$sess_fakultas = array(
    				'fakultas' => $query_fak->fakultas
    			);
    			$this->session->set_userdata($sess_fakultas);
    		}
			}
		// else if($nim != NULL){
		// 	$nim 			= $this->input->post('nim');
		// 	$nama_mahasiswa = $this->input->post('nama_lengkap');
		// 	$jenis_kelamin 	= $this->input->post('jenis_kelamin');
		// 	$fakultas 		= $this->input->post('fakultas');
		// 	$jurusan 		= $this->input->post('jurusan');
		// 	$no_hp 			= $this->input->post('no_hp');
		// 	$angkatan 		= $this->input->post('angkatan');
		// 	$ip_address 	= $this->input->ip_address();
		//
		// 	$data = [
		// 		'nama_mahasiswa' => $nama_mahasiswa,
		// 		'jenis_kelamin' => $jenis_kelamin,
		// 		'fakultas' => $fakultas,
		// 		'jurusan' => $jurusan,
		// 		'no_hp' => $no_hp,
		// 		'angkatan' => $angkatan,
		// 		'updated_at' => $time,
		// 		'ip_address' => $ip_address
		// 	];
		// 	$insert_data = $this->M_mhs->update_data_nim($nim, $data);
		// 	$this->M_mhs->getReg1($no_pendaftaran);
		// 	$sess_reg = array(
		// 			'reg' => $login_mhs->reg
		// 	);
		// 	$this->session->set_userdata($sess_reg);
		// }
    	$this->session->set_flashdata('message',
    	                    '<div class="alert alert-success">
    							<p>Data Anda Sudah di Update</p>
    						</div>');
		$this->biodata();
	}

	//function update foto bidik misi
	public function direct1(){
		$reg = $this->session->userdata('reg');
		$buka = $this->session->userdata('buka');
		$tutup = $this->session->userdata('tutup');

		date_default_timezone_set('Asia/Jakarta');
        $sekarang = date('Y-m-d H:i:s');

		if($reg == 2){
			redirect('C_mhs/biodata');
		}else if($sekarang >= $buka && $sekarang <= $tutup){
			$no_pendaftaran = $this->session->userdata('no_pendaftaran');
			$sess_foto 		= $this->session->userdata('foto');
			$foto 			= $this->M_mhs->getFoto($no_pendaftaran);

			if($sess_foto == null){
				$config['upload_path'] 	 = './assets/foto_mhs/';
				$config['allowed_types'] = 'png|jpg|jpeg|JPEG|PNG|JPG';
				$config['max_size'] 	 = 100;

				$this->load->library('upload', $config);

				if(!$this->upload->do_upload('foto')){
						$error = array(
							'error' => $this->upload->display_errors(),
							'data_diri' => $this->M_mhs->getData_login($no_pendaftaran)->result()
						);
						$this->session->set_flashdata('direct_error',
							'<div class="alert alert-warning">
								<p>Upload Foto Gagal, Silahkan Cek Kembali Ukuran dan Format File Foto Anda</p>
							</div>');
						$this->load->view('project_bidikmisi/mahasiswa/upload_foto', $error);
				}else{
					$file = $this->upload->data();
					//unlink('assets/foto_mhs/'.$foto->upload_foto);
					$data = ['upload_foto' => $file['file_name']];
					$this->M_mhs->edit_data($no_pendaftaran, $data);

					$query_foto = $this->db->get_where('mastermhs_new', array(
						'no_pendaftaran' => $no_pendaftaran
					))->row();

					$sess_reg = array(
						'foto' => $query_foto->upload_foto
					);

					$this->session->set_userdata($sess_reg);

					$this->session->set_flashdata('direct_success', '
						<div class="alert alert-success">
							<p>Foto Berhasil diUpload</p>
						</div>');

					redirect('C_mhs');
				}
			}else if($sess_foto != null){
				$config['upload_path'] 	 = './assets/foto_mhs/';
				$config['allowed_types'] = 'png|jpg|jpeg|JPEG|PNG|JPG';
				$config['max_size'] 	 = 1024;

				$this->load->library('upload', $config);

				if(!$this->upload->do_upload('foto')){
						$error = array(
							'error' => $this->upload->display_errors(),
							'data_diri' => $this->M_mhs->getData_login($no_pendaftaran)->result()
						);
						$this->session->set_flashdata('direct_error',
							'<div class="alert alert-warning">
								<p>Upload Foto Gagal, Silahkan Cek Kembali Ukuran dan Format File Foto Anda</p>
							</div>');
						$this->load->view('project_bidikmisi/mahasiswa/upload_foto', $error);
				}else{
					$file = $this->upload->data();
					unlink('assets/foto_mhs/'.$foto->upload_foto);
					$data = ['upload_foto' => $file['file_name']];
					$this->M_mhs->edit_data($no_pendaftaran, $data);

					$query_foto = $this->db->get_where('mastermhs_new', array(
						'no_pendaftaran' => $no_pendaftaran
					))->row();

					$sess_reg = array(
						'foto' => $query_foto->upload_foto
					);

					$this->session->set_userdata($sess_reg);

					$this->session->set_flashdata('direct_success', '
						<div class="alert alert-success">
							<p>Foto Berhasil diUpload</p>
						</div>');

					redirect('C_mhs');
				}
			}
		}else if($buka < $sekarang){
			$this->session->set_flashdata('belum_buka','<script>alert("Pendaftaran Beasiswa KIP-K Uin Bandung Tidak dibuka"); </script>');
        	echo $this->session->flashdata('belum_buka');
        	$this->biodata();
		}else if($tutup > $sekarang){
			$this->session->set_flashdata('tutup','<script>alert("Pendaftaran Beasiswa KIP-K Uin Bandung Sudah Tutup"); </script>');
        	echo $this->session->flashdata('tutup');
        	$this->biodata();
		}
	}
	//end function update foto bidik misi

	//function update identitas diri
	public function direct2(){
		$reg = $this->session->userdata('reg');
		$buka = $this->session->userdata('buka');
		$tutup = $this->session->userdata('tutup');

		date_default_timezone_set('Asia/Jakarta');
        $sekarang = date('Y-m-d H:i:s');

		if($reg == 2){
			redirect('C_mhs/biodata');
		}else if($sekarang >= $buka && $sekarang <= $tutup){
			$no_pendaftaran 	= $this->session->userdata('no_pendaftaran');
			$nik 				= $this->input->post('nik');
			$tempat_lahir 		= $this->input->post('tempat_lahir');
			$status_pernikahan 	= $this->input->post('status_pernikahan');
			$asal_provinsi 		= $this->input->post('asal_provinsi');
			$asal_kab_kota 		= $this->input->post('asal_kab_kota');
			$no_telp 			= $this->input->post('no_telp');
			$email 				= $this->input->post('email');
			$alamat 			= $this->input->post('alamat');
			$rt 				= $this->input->post('rt_2');
			$rw 				= $this->input->post('rw_2');
			$kelurahan			= $this->input->post('kelurahan_2');
			$kecamatan			= $this->input->post('kecamatan_2');
			$kode_pos 			= $this->input->post('kode_pos');
			$ipk 			= $this->input->post('ipk');
			$nilai_rata_rata_raport 			= $this->input->post('nilai_rata_rata_raport');

			$data = [ 'nik'			 		=> $nik,
					  'tempat_lahir' 		=> $tempat_lahir,
					  'status_pernikahan' 	=> $status_pernikahan,
					  'asal_provinsi' 		=> $asal_provinsi,
					  'asal_kab_kota' 		=> $asal_kab_kota,
					  'no_telp' 			=> $no_telp,
					  'email' 				=> $email,
					  'alamat' 				=> $alamat,
					  'rt_2'				=> $rt,
					  'rw_2'				=> $rw,
					  'kelurahan_2' 		=> $kelurahan,
					  'kecamatan_2'			=> $kecamatan,
					  'kode_pos' 			=> $kode_pos,
					  'ipk' 				=> $ipk,
					  'nilai_rata_rata_raport' => $nilai_rata_rata_raport
			];
			$this->M_mhs->edit_data($no_pendaftaran, $data);
			//upload foto
			$foto = $this->M_mhs->getFoto($no_pendaftaran);
			$ubah_foto_kartu_rencana_studi		 	= $this->input->post('ubah_foto_kartu_rencana_studi');

			$config['upload_path'] 		= './assets/foto_dokumen/';
			$config['allowed_types'] 	= 'png|jpg|jpeg|JPEG|PNG|JPG|PDF';
			$config['max_size']			= 3100;

			$this->load->library('upload', $config);

			if($ubah_foto_kartu_rencana_studi != null ){
				switch($ubah_foto_kartu_rencana_studi){
					case 0 :
					{
						if(!$this->upload->do_upload('foto_kartu_rencana_studi')){
						$this->session->set_flashdata('upload_foto_kartu_rencana_studi_error',
							'<div class="alert alert-warning">
								<p>Upload Foto Kartu Rencana Studi Gagal, Silahkan Cek Kembali Ukuran dan Format File Foto Anda</p>
							</div>' );
						}else{
							$file = $this->upload->data();
							//unlink('assets/foto_dokumen/'.$foto->upload_foto_kartu_rencana_studi);

							$data = ['upload_foto_kartu_rencana_studi' => $file['file_name']];
							$this->M_mhs->edit_data($no_pendaftaran, $data);
							$this->session->set_flashdata('upload_foto_kartu_rencana_studi_success', '
								<div class="alert alert-success">
									<p>Data Foto Kartu Rencana Studi Berhasil diUpdate</p>
								</div>');
						}
					}
				}
			}

			$ubah_foto_kartu_rencana_studi		 	= $this->input->post('ubah_foto_kartu_rencana_studi');
			$this->session->set_flashdata('direct2_success',
				'<div class="alert alert-success">
					<p>Data Identitas Anda sudah Tersimpan, Silahkan Lanjut Ke tahap Selanjutnya</p>
				</div>');

			$this->step2();
		}else if($buka < $sekarang){
			$this->session->set_flashdata('belum_buka','<script>alert("Pendaftaran Beasiswa KIP-K Uin Bandung Tidak dibuka"); </script>');
        	echo $this->session->flashdata('belum_buka');
        	$this->biodata();
		}else if($tutup > $sekarang){
			$this->session->set_flashdata('tutup','<script>alert("Pendaftaran Beasiswa KIP-K Uin Bandung Sudah Tutup"); </script>');
        	echo $this->session->flashdata('tutup');
        	$this->biodata();
		}
	}
	//End function update identitas diri

	//function update data ortu
	public function direct3(){
		$reg = $this->session->userdata('reg');
		$buka = $this->session->userdata('buka');
		$tutup = $this->session->userdata('tutup');

		date_default_timezone_set('Asia/Jakarta');
        $sekarang = date('Y-m-d H:i:s');

		if($reg == 2){
			redirect('C_mhs/biodata');
		}else if($sekarang >= $buka && $sekarang <= $tutup){
			$no_pendaftaran			= $this->session->userdata('no_pendaftaran');
			$nama_ayah 				= $this->input->post('nama_ayah');
			$almarhum 				= $this->input->post('almarhum');
			$nama_ibu 				= $this->input->post('nama_ibu');
			$almarhumah 			= $this->input->post('almarhumah');
			$alamat_ortu 			= $this->input->post('alamat_ortu');
			$rt						= $this->input->post('rt_3');
			$rw 					= $this->input->post('rw_3');
			$kelurahan 				= $this->input->post('kelurahan_3');
			$kecamatan 				= $this->input->post('kecamatan_3');
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
					  'rt_3' 							 => $rt,
					  'rw_3' 							 => $rw,
					  'kelurahan_3' 					 => $kelurahan,
					  'kecamatan_3' 					 => $kecamatan,
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
					  'ket_wiraswasta_ibu' 				 => $ket_wiraswasta_ibu,
					  'pendidikan_ayah' 				 => $pendidikan_ayah,
					  'pendidikan_ibu' 					 => $pendidikan_ibu,
					  'penghasilan_ayah' 				 => $penghasilan_ayah,
					  'nominal_peng_ayah' 				 => $nom_peng_ayah,
					  'penghasilan_ibu' 				 => $penghasilan_ibu,
					  'nominal_peng_ibu' 				 => $nom_peng_ibu,
					  'jumlah_saudara_kandung_tang_ortu' => $saudara_kandung
			];
			$this->M_mhs->edit_data($no_pendaftaran, $data);
			//upload foto
			$sess_foto_ktp_ayah 	= $this->session->userdata('foto_ktp_ayah');
			$sess_foto_ktp_ibu 	= $this->session->userdata('foto_ktp_ibu');
			$sess_foto_surat_keterangan_penghasilan_ortu 	= $this->session->userdata('foto_surat_keterangan_penghasilan_ortu');

			$foto = $this->M_mhs->getFoto($no_pendaftaran);

			$ubah_foto_ktp_ayah		 	= $this->input->post('ubah_foto_ktp_ayah');
			$ubah_foto_ktp_ibu		 	= $this->input->post('ubah_foto_ktp_ibu');
			$ubah_foto_surat_keterangan_penghasilan_ortu		 	= $this->input->post('ubah_foto_surat_keterangan_penghasilan_ortu');

			$config['upload_path'] 		= './assets/foto_dokumen/';
			$config['allowed_types'] 	= 'png|jpg|jpeg|JPEG|PNG|JPG';
			$config['max_size']			= 1100;

			$this->load->library('upload', $config);

			if($ubah_foto_ktp_ayah != null ){
				switch($ubah_foto_ktp_ayah){
					case 0 :
					{
						if(!$this->upload->do_upload('foto_ktp_ayah')){
						$this->session->set_flashdata('upload_foto_ktp_ayah_error',
							'<div class="alert alert-warning">
								<p>Upload Foto KTP Ayah Gagal, Silahkan Cek Kembali Ukuran dan Format File Foto Anda</p>
							</div>' );
						}else{
							$file = $this->upload->data();
							//unlink('assets/foto_dokumen/'.$foto->upload_foto_ktp_ayah);

							$data = ['upload_foto_ktp_ayah' => $file['file_name']];
							$this->M_mhs->edit_data($no_pendaftaran, $data);
							$this->session->set_flashdata('upload_foto_ktp_ayah_success', '
								<div class="alert alert-success">
									<p>Data Foto KTP Ayah Berhasil diUpdate</p>
								</div>');
						}
					}
				}
			}

			if($ubah_foto_ktp_ibu != null ){
				switch($ubah_foto_ktp_ibu == 1){
					case 1 :
					{
						if(!$this->upload->do_upload('foto_ktp_ibu')){
						$this->session->set_flashdata('upload_foto_ktp_ibu_error',
							'<div class="alert alert-warning">
								<p>Upload Foto KTP Ibu Gagal, Silahkan Cek Kembali Ukuran dan Format File Foto Anda</p>
							</div>' );
						}else{
							$file = $this->upload->data();
							//unlink('assets/foto_dokumen/'.$foto->upload_foto_ktp_ibu);

							$data = ['upload_foto_ktp_ibu' => $file['file_name']];
							$this->M_mhs->edit_data($no_pendaftaran, $data);
							$this->session->set_flashdata('upload_foto_ktp_ibu_success', '
								<div class="alert alert-success">
									<p>Data Foto KTP Ibu Berhasil diUpdate</p>
								</div>');
						}
					}
				}
			}

			if($sess_foto_surat_keterangan_penghasilan_ortu == null ){
				switch($ubah_foto_surat_keterangan_penghasilan_ortu == 2){
					case 2 :
					{
						if(!$this->upload->do_upload('foto_surat_keterangan_penghasilan_ortu')){
						$this->session->set_flashdata('upload_foto_surat_keterangan_penghasilan_ortu_error',
							'<div class="alert alert-warning">
								<p>Upload Foto Keterangan Penghasilan Gagal, Silahkan Cek Kembali Ukuran dan Format File Foto Anda</p>
							</div>' );
						}else{
							$file = $this->upload->data();
							//unlink('assets/foto_dokumen/'.$foto->upload_foto_surat_keterangan_penghasilan_ortu);

							$data = ['upload_foto_surat_keterangan_penghasilan_ortu' => $file['file_name']];
							$this->M_mhs->edit_data($no_pendaftaran, $data);
							$this->session->set_flashdata('upload_foto_surat_keterangan_penghasilan_ortu_success', '
								<div class="alert alert-success">
									<p>Data Foto Keterangan Penghasilan Berhasil diUpdate</p>
								</div>');
						}
					}
				}
			}

			//end upload foto

			$this->session->set_flashdata('direct3_success',
				'<div class="alert alert-success">
					<p>Data Orang Tua Anda sudah Tersimpan, Silahkan Lanjut Ke tahap Selanjutnya</p>
				</div>');

			$this->step3();
		}else if($buka < $sekarang){
			$this->session->set_flashdata('belum_buka','<script>alert("Pendaftaran Beasiswa KIP-K Uin Bandung Tidak dibuka"); </script>');
        	echo $this->session->flashdata('belum_buka');
        	$this->biodata();
		}else if($tutup > $sekarang){
			$this->session->set_flashdata('tutup','<script>alert("Pendaftaran Beasiswa KIP-K Uin Bandung Sudah Tutup"); </script>');
        	echo $this->session->flashdata('tutup');
        	$this->biodata();
		}
	}
	//End function update data ortu

	//function update data kondisi rumah
	public function direct4(){
		$reg = $this->session->userdata('reg');
		$buka = $this->session->userdata('buka');
		$tutup = $this->session->userdata('tutup');

		date_default_timezone_set('Asia/Jakarta');
        $sekarang = date('Y-m-d H:i:s');

		if($reg == 2){
			redirect('C_mhs/biodata');
		}else if($sekarang >= $buka && $sekarang <= $tutup){
			$no_pendaftaran 	= $this->session->userdata('no_pendaftaran');
			$luas_rumah 		= $this->input->post('luas_rumah');
			$pbb 				= $this->input->post('pbb');
			$rek_listrik 		= $this->input->post('rek_listrik_per_bulan');
			$kepemilikan_rumah 	= $this->input->post('kepemilikan_rumah');
			$jenis_dinding 		= $this->input->post('jenis_dinding');
			$fasilitas_jamban 	= $this->input->post('fasilitas_jamban');
			$sumber_penerangan	= $this->input->post('sumber_penerangan');
			$sumber_air 		= $this->input->post('sumber_air');
			$bahan_bakar_dapur 	= $this->input->post('bahan_bakar_dapur');
			$jarak 				= $this->input->post('jarak');
			$kondisi_jalan 		= $this->input->post('kondisi_jalan');
			$mata_pencaharian 	= $this->input->post('mata_pencaharian');

			$data = [ 'luas_rumah' 				=> $luas_rumah,
					  'pbb' 					=> $pbb,
					  'rek_listrik_per_bulan' 	=> $rek_listrik,
					  'kepemilikan_rumah' 		=> $kepemilikan_rumah,
					  'jenis_dinding' 			=> $jenis_dinding,
					  'fasilitas_jamban' 		=> $fasilitas_jamban,
					  'sumber_penerangan' 		=> $sumber_penerangan,
					  'sumber_air' 				=> $sumber_air,
					  'bahan_bakar_dapur' 		=> $bahan_bakar_dapur,
					  'jarak' 					=> $jarak,
					  'kondisi_jalan' 			=> $kondisi_jalan,
					  'mata_pencaharian' 		=> $mata_pencaharian
			];

			$this->M_mhs->edit_data($no_pendaftaran, $data);
			
			$sess_surat_keterangan_kepemilikan_rumah 	= $this->session->userdata('surat_keterangan_kepemilikan_rumah');

			$foto = $this->M_mhs->getFoto($no_pendaftaran);

			$ubah_surat_keterangan_kepemilikan_rumah		 	= $this->input->post('ubah_surat_keterangan_kepemilikan_rumah');
			
			$config['upload_path'] 		= './assets/foto_dokumen/';
			$config['allowed_types'] 	= 'png|jpg|jpeg|JPEG|PNG|JPG|PDF';
			$config['max_size']			= 1100;

			$this->load->library('upload', $config);

			if($ubah_surat_keterangan_kepemilikan_rumah != null ){
				switch($ubah_surat_keterangan_kepemilikan_rumah){
					case 3 :
					{
						if(!$this->upload->do_upload('surat_keterangan_kepemilikan_rumah')){
						$this->session->set_flashdata('upload_surat_keterangan_kepemilikan_rumah_error',
							'<div class="alert alert-warning">
								<p>Upload Surat Keterangan Kepemilikan Rumah Gagal, Silahkan Cek Kembali Ukuran dan Format File Anda</p>
							</div>' );
						}else{
							$file = $this->upload->data();
							//unlink('assets/foto_dokumen/'.$foto->upload_surat_keterangan_kepemilikan_rumah);

							$data = ['upload_surat_keterangan_kepemilikan_rumah' => $file['file_name']];
							$this->M_mhs->edit_data($no_pendaftaran, $data);
							$this->session->set_flashdata('upload_surat_keterangan_kepemilikan_rumah_success', '
								<div class="alert alert-success">
									<p>Data Surat Keterangan Kepemilikan Rumah Berhasil diUpdate</p>
								</div>');
						}
					}
				}
			}

			$this->session->set_flashdata('direct4_success',
				'<div class="alert alert-success">
					<p>Data Kondisi Rumah Anda sudah Tersimpan, Silahkan Lanjut Ke tahap Selanjutnya</p>
				</div>');

			$this->step4();
		}else if($buka < $sekarang){
			$this->session->set_flashdata('belum_buka','<script>alert("Pendaftaran Beasiswa KIP-K Uin Bandung Tidak dibuka"); </script>');
        	echo $this->session->flashdata('belum_buka');
        	$this->biodata();
		}else if($tutup > $sekarang){
			$this->session->set_flashdata('tutup','<script>alert("Pendaftaran Beasiswa KIP-K Uin Bandung Sudah Tutup"); </script>');
        	echo $this->session->flashdata('tutup');
        	$this->biodata();
		}
	}
	//end function update data kondisi rumah

	//function update data sekolah
	public function direct5(){
		$reg = $this->session->userdata('reg');
		$buka = $this->session->userdata('buka');
		$tutup = $this->session->userdata('tutup');

		date_default_timezone_set('Asia/Jakarta');
        $sekarang = date('Y-m-d H:i:s');

		if($reg == 2){
			redirect('C_mhs/biodata');
		}else if($sekarang >= $buka && $sekarang <= $tutup){
			$no_pendaftaran 			= $this->session->userdata('no_pendaftaran');
			$alamat_sekolah 			= $this->input->post('alamat_sekolah');
			$rt_5						= $this->input->post('rt_5');
			$rw_5						= $this->input->post('rw_5');
			$kelurahan_5				= $this->input->post('kelurahan_5');
			$kecamatan_5				= $this->input->post('kecamatan_5');
			$prov_sekolah 				= $this->input->post('provinsi_sekolah');
			$kab_kota_sekolah			= $this->input->post('kab_kota_sekolah');
			$nama_sekolah 				= $this->input->post('nama_sekolah');
			$tahun_lulus 				= $this->input->post('tahun_lulus');
			$jurusan_sekolah 			= $this->input->post('jurusan_sekolah');
			$rerata_nilai_un 			= $this->input->post('rerata_nilai_un');
			$rerata_nilai_raport 		= $this->input->post('rerata_nilai_raport');
			$prestasi_akademik 			= $this->input->post('prestasi_akademik');
			$prestasi_non_akademik 		= $this->input->post('prestasi_non_akademik');
			$ket_prestasi_akademik  	= $this->input->post('ket_prestasi_akademik');
			$ket_prestasi_non_akademik  = $this->input->post('ket_prestasi_non_akademik');

			$data = [ 'alamat_sekolah' 				=> $alamat_sekolah,
					  'rt_5' 						=> $rt_5,
					  'rw_5' 						=> $rw_5,
					  'kelurahan_5' 				=> $kelurahan_5,
					  'kecamatan_5' 				=> $kecamatan_5,
					  'prov_sekolah'				=> $prov_sekolah,
					  'kab_kota_sekolah' 			=> $kab_kota_sekolah,
					  'nama_sekolah' 				=> $nama_sekolah,
					  'tahun_lulus' 				=> $tahun_lulus,
					  'jurusan_sekolah' 			=> $jurusan_sekolah,
					  'rerata_nilai_un' 			=> $rerata_nilai_un,
					  'rerata_nilai_raport' 		=> $rerata_nilai_raport,
					  'prestasi_akademik' 			=> $prestasi_akademik,
					  'prestasi_non_akademik' 		=> $prestasi_non_akademik,
					  'ket_prestasi_akademik'		=> $ket_prestasi_akademik,
					  'ket_prestasi_non_akademik'   => $ket_prestasi_non_akademik
			];
			$this->M_mhs->edit_data($no_pendaftaran, $data);
			$this->session->set_flashdata('direct5_success',
				'<div class="alert alert-success">
					<p>Data Sekolah Anda sudah Tersimpan, Silahkan Lanjut Ke tahap Selanjutnya</p>
				</div>');

			$this->step5();
		}else if($buka < $sekarang){
			$this->session->set_flashdata('belum_buka','<script>alert("Pendaftaran Beasiswa KIP-K Uin Bandung Tidak dibuka"); </script>');
        	echo $this->session->flashdata('belum_buka');
        	$this->biodata();
		}else if($tutup > $sekarang){
			$this->session->set_flashdata('tutup','<script>alert("Pendaftaran Beasiswa KIP-K Uin Bandung Sudah Tutup"); </script>');
        	echo $this->session->flashdata('tutup');
        	$this->biodata();
		}
	}
	//end function update data sekolah

	//function update data pesantren
	public function direct6(){
		$reg = $this->session->userdata('reg');
		$buka = $this->session->userdata('buka');
		$tutup = $this->session->userdata('tutup');

		date_default_timezone_set('Asia/Jakarta');
        $sekarang = date('Y-m-d H:i:s');

		if($reg == 2){
			redirect('C_mhs/biodata');
		}else if($sekarang >= $buka && $sekarang <= $tutup){
			$no_pendaftaran 	= $this->session->userdata('no_pendaftaran');
			$mondok 			= $this->input->post('mondok');
			$nama_ponpes 		= $this->input->post('nama_ponpes');
			$alamat_ponpes 		= $this->input->post('alamat_ponpes');
			$rt_6 				= $this->input->post('rt_6');
			$rw_6 				= $this->input->post('rw_6');
			$kelurahan_6 		= $this->input->post('kelurahan_6');
			$kecamatan_6 		= $this->input->post('kecamatan_6');
			$prov_ponpes 		= $this->input->post('provinsi_ponpes');
			$kab_kota_ponpes 	= $this->input->post('kab_kota_ponpes');
			$kode_pos_ponpes 	= $this->input->post('kode_pos_ponpes');
			$lama_belajar 		= $this->input->post('lama_belajar');

			$data = [ 'mondok' 			=> $mondok,
					  'nama_ponpes' 	=> $nama_ponpes,
					  'alamat_ponpes' 	=> $alamat_ponpes,
					  'rt_6'			=> $rt_6,
					  'rw_6'			=> $rw_6,
					  'kelurahan_6'		=> $kelurahan_6,
					  'kecamatan_6'		=> $kecamatan_6,
					  'prov_ponpes' 	=> $prov_ponpes,
					  'kab_kota_ponpes' => $kab_kota_ponpes,
					  'kode_pos_ponpes' => $kode_pos_ponpes,
					  'lama_belajar' 	=> $lama_belajar
			];
			$this->M_mhs->edit_data($no_pendaftaran, $data);
			$this->session->set_flashdata('direct6_success',
				'<div class="alert alert-success">
					<p>Data Ponpes Anda sudah Tersimpan, Silahkan Lanjut Ke tahap Selanjutnya</p>
				</div>');

			$this->step6();
		}else if($buka < $sekarang){
			$this->session->set_flashdata('belum_buka','<script>alert("Pendaftaran Beasiswa KIP-K Uin Bandung Tidak dibuka"); </script>');
        	echo $this->session->flashdata('belum_buka');
        	$this->biodata();
		}else if($tutup > $sekarang){
			$this->session->set_flashdata('tutup','<script>alert("Pendaftaran Beasiswa KIP-K Uin Bandung Sudah Tutup"); </script>');
        	echo $this->session->flashdata('tutup');
        	$this->biodata();
		}
	}
	//End function update data pesantren

	//function update keterampilan
	public function direct7(){
		$reg = $this->session->userdata('reg');
		$buka = $this->session->userdata('buka');
		$tutup = $this->session->userdata('tutup');

		date_default_timezone_set('Asia/Jakarta');
        $sekarang = date('Y-m-d H:i:s');

		if($reg == 2){
			redirect('C_mhs/biodata');
		}else if($sekarang >= $buka && $sekarang <= $tutup){
			$no_pendaftaran 	= $this->session->userdata('no_pendaftaran');
			$kem_bhs_arab 		= $this->input->post('kemampuan_bahasa_arab');
			$kem_bhs_inggris 	= $this->input->post('kemampuan_bahasa_inggris');
			$kem_komputer 		= $this->input->post('kemampuan_komputer');
			$kem_btq 	    	= $this->input->post('kemampuan_btq');

			$data = ['kem_bhs_arab' 	=> $kem_bhs_arab,
					  'kem_bhs_inggris' => $kem_bhs_inggris,
					  'kem_komputer' 	=> $kem_komputer,
					  'kem_btq' 	=> $kem_btq
			];
			$this->M_mhs->edit_data($no_pendaftaran, $data);
			$this->session->set_flashdata('direct7_success',
				'<div class="alert alert-success">
					<p>Data Keterampilan Anda sudah Tersimpan, Silahkan Lanjut Ke tahap Selanjutnya</p>
				</div>');

			$this->step7();
		}else if($buka < $sekarang){
			$this->session->set_flashdata('belum_buka','<script>alert("Pendaftaran Beasiswa KIP-K Uin Bandung Tidak dibuka"); </script>');
        	echo $this->session->flashdata('belum_buka');
        	$this->biodata();
		}else if($tutup > $sekarang){
			$this->session->set_flashdata('tutup','<script>alert("Pendaftaran Beasiswa KIP-K Uin Bandung Sudah Tutup"); </script>');
        	echo $this->session->flashdata('tutup');
        	$this->biodata();
		}
	}
	//end function update keterampilan

	//function update kipk
	public function direct8(){
		$reg = $this->session->userdata('reg');
		$buka = $this->session->userdata('buka');
		$tutup = $this->session->userdata('tutup');

		date_default_timezone_set('Asia/Jakarta');
        $sekarang = date('Y-m-d H:i:s');

		if($reg == 2){
			redirect('C_mhs/biodata');
		}else if($sekarang >= $buka && $sekarang <= $tutup){
			$no_pendaftaran 	= $this->session->userdata('no_pendaftaran');
			$jenis_kipk 		= $this->input->post('jenis_kipk');
			$nomor_kipk 	= $this->input->post('nomor_kipk');
			$punya_kipk 	= $this->input->post('punya_kipk');

			$data = [
					  'punya_kipk'	=> $punya_kipk,
					  'jenis_kipk' 	=> $jenis_kipk,
					  'nomor_kipk' => $nomor_kipk
			];
			$this->M_mhs->edit_data($no_pendaftaran, $data);
			$this->session->set_flashdata('direct8_success',
				'<div class="alert alert-success">
					<p>Data KIPK Anda sudah Tersimpan, Silahkan Lanjut Ke tahap Selanjutnya</p>
				</div>');

			$this->step8();
		}else if($buka < $sekarang){
			$this->session->set_flashdata('belum_buka','<script>alert("Pendaftaran Beasiswa KIP-K Uin Bandung Tidak dibuka"); </script>');
        	echo $this->session->flashdata('belum_buka');
        	$this->biodata();
		}else if($tutup > $sekarang){
			$this->session->set_flashdata('tutup','<script>alert("Pendaftaran Beasiswa KIP-K Uin Bandung Sudah Tutup"); </script>');
        	echo $this->session->flashdata('tutup');
        	$this->biodata();
		}
	}
	//end function update kipk

    //function update dokumen pendukung
	public function direct9(){
		$reg = $this->session->userdata('reg');
		$buka = $this->session->userdata('buka');
		$tutup = $this->session->userdata('tutup');

		date_default_timezone_set('Asia/Jakarta');
        $sekarang = date('Y-m-d H:i:s');

		if($reg == 2){
			redirect('C_mhs/biodata');
		}else if($sekarang >= $buka && $sekarang <= $tutup){
			$no_pendaftaran 		= $this->session->userdata('no_pendaftaran');
			$sess_foto_kipk 		= $this->session->userdata('foto_kipk');
			$sess_foto_ktp 			= $this->session->userdata('foto_ktp');
			$sess_foto_kk 			= $this->session->userdata('foto_kk');
			$sess_foto_rumah_depan 	= $this->session->userdata('foto_rumah_depan');
			$sess_foto_rumah_kiri 	= $this->session->userdata('foto_rumah_kiri');
			$sess_foto_rumah_kanan 	= $this->session->userdata('foto_rumah_kanan');
			$sess_foto_rumah_dalam 	= $this->session->userdata('foto_rumah_dalam');
			$sess_foto_pbb 			= $this->session->userdata('foto_pbb');
			$sess_foto_rek_listrik 	= $this->session->userdata('foto_rek_listrik');
			$sess_surat_keterangan 	= $this->session->userdata('surat_keterangan_pemilik_rumah');
			$sess_surat_pernyataan_kebenaran_data 	= $this->session->userdata('surat_pernyataan_kebenaran_data');
			$sess_surat_pernyataan_kipk 	= $this->session->userdata('surat_pernyataan_kipk');
			$sess_fakta_integritas 	= $this->session->userdata('fakta_integritas');
			$sess_scan_raport 	= $this->session->userdata('scan_raport');

			$foto = $this->M_mhs->getFoto($no_pendaftaran);

			$ubah_foto_kipk 		= $this->input->post('ubah_foto_kipk');
			$ubah_foto_ktp 			= $this->input->post('ubah_foto_ktp');
			$ubah_foto_kk 			= $this->input->post('ubah_foto_kk');
			$ubah_foto_rumah_depan 	= $this->input->post('ubah_foto_rumah_depan');
			$ubah_foto_rumah_kiri 	= $this->input->post('ubah_foto_rumah_kiri');
			$ubah_foto_rumah_kanan 	= $this->input->post('ubah_foto_rumah_kanan');
			$ubah_foto_rumah_dalam 	= $this->input->post('ubah_foto_rumah_dalam');
			$ubah_foto_pbb 			= $this->input->post('ubah_foto_pbb');
			$ubah_foto_rek		 	= $this->input->post('ubah_foto_rek');
			$ubah_surat_keterangan		 	= $this->input->post('ubah_surat_keterangan_kepemilikan_rumah');
			$ubah_surat_pernyataan_kebenaran_data		 	= $this->input->post('ubah_surat_pernyataan_kebenaran_data');
			$ubah_surat_pernyataan_kipk		 	= $this->input->post('ubah_surat_pernyataan_kipk');
			$ubah_fakta_integritas		 	= $this->input->post('ubah_fakta_integritas');
			$ubah_scan_raport		 	= $this->input->post('ubah_scan_raport');

			$config['upload_path'] 		= './assets/foto_dokumen/';
			$config['allowed_types'] 	= 'png|jpg|jpeg|JPEG|PNG|JPG|pdf|PDF';
			$config['max_size']			= 10100;

			$this->load->library('upload', $config);

			//upload KTP dan KK
			if($sess_foto_ktp == null ){
				switch($ubah_foto_ktp == 1){
					case 1 :
					{
						if(!$this->upload->do_upload('foto_ktp')){
						$this->session->set_flashdata('update8_foto_ktp_error',
							'<div class="alert alert-warning">
								<p>Upload Foto KTP Gagal, Silahkan Cek Kembali Ukuran dan Format File Foto Anda</p>
							</div>' );
						}else{
							$file = $this->upload->data();
							//unlink('assets/foto_dokumen/'.$foto->upload_foto_ktp);

							$data = ['upload_foto_ktp' => $file['file_name']];
							$this->M_mhs->edit_data($no_pendaftaran, $data);
							$this->session->set_flashdata('update8_foto_ktp_success', '
								<div class="alert alert-success">
									<p>Data Foto KTP Berhasil diUpdate</p>
								</div>');
						}
					}
				}
			}

			if($sess_foto_kk == null ){
				switch($ubah_foto_kk == 2){
					case 2 :
					{
						if(!$this->upload->do_upload('foto_kk')){
						$this->session->set_flashdata('update8_foto_kk_error',
							'<div class="alert alert-warning">
								<p>Upload Foto Kartu Keluarga Gagal, Silahkan Cek Kembali Ukuran dan Format File Foto Anda</p>
							</div>' );
						}else{
							$file = $this->upload->data();
							//unlink('assets/foto_dokumen/'.$foto->upload_foto_kk);

							$data = ['upload_foto_kk' => $file['file_name']];
							$this->M_mhs->edit_data($no_pendaftaran, $data);
							$this->session->set_flashdata('update8_foto_kk_success', '
								<div class="alert alert-success">
									<p>Data Foto Kartu Keluarga Berhasil diUpdate</p>
								</div>');
						}
					}
				}
			}
			//End upload KTP dan KK

			//upload foto rumah depan dan kiri
			if($sess_foto_rumah_depan == null ){
				switch($ubah_foto_rumah_depan == 3){
					case 3 :
					{
						if(!$this->upload->do_upload('foto_rumah_depan')){
						$this->session->set_flashdata('update8_foto_rumah_depan_error',
							'<div class="alert alert-warning">
								<p>Upload Foto Rumah Depan Gagal, Silahkan Cek Kembali Ukuran dan Format File Foto Anda</p>
							</div>' );
						}else{
							$file = $this->upload->data();
							//unlink('assets/foto_dokumen/'.$foto->upload_foto_rumah_depan);

							$data = ['upload_foto_rumah_depan' => $file['file_name']];
							$this->M_mhs->edit_data($no_pendaftaran, $data);
							$this->session->set_flashdata('update8_foto_rumah_depan_success', '
								<div class="alert alert-success">
									<p>Data Foto Rumah Depan Berhasil diUpdate</p>
								</div>');
						}
					}
				}
			}

			if($sess_foto_rumah_kiri == null ){
				switch($ubah_foto_rumah_kiri == 4){
					case 4 :
					{
						if(!$this->upload->do_upload('foto_rumah_kiri')){
						$this->session->set_flashdata('update8_foto_rumah_kiri_error',
							'<div class="alert alert-warning">
								<p>Upload Foto Rumah Kiri Gagal, Silahkan Cek Kembali Ukuran dan Format File Foto Anda</p>
							</div>' );
						}else{
							$file = $this->upload->data();
							//unlink('assets/foto_dokumen/'.$foto->upload_foto_rumah_kiri);

							$data = ['upload_foto_rumah_kiri' => $file['file_name']];
							$this->M_mhs->edit_data($no_pendaftaran, $data);
							$this->session->set_flashdata('update7_foto_rumah_kiri_success', '
								<div class="alert alert-success">
									<p>Data Foto Rumah Kiri Berhasil diUpdate</p>
								</div>');
						}
					}
				}
			}
			//end upload foto rumah depan dan kiri

			//upload foto rumah kanan dan bagian dalam
			if($sess_foto_rumah_kanan == null ){
				switch($ubah_foto_rumah_kanan == 5){
					case 5 :
					{
						if(!$this->upload->do_upload('foto_rumah_kanan')){
						$this->session->set_flashdata('update8_foto_rumah_kanan_error',
							'<div class="alert alert-warning">
								<p>Upload Foto Rumah Kanan Gagal, Silahkan Cek Kembali Ukuran dan Format File Foto Anda</p>
							</div>' );
						}else{
							$file = $this->upload->data();
							//unlink('assets/foto_dokumen/'.$foto->upload_foto_rumah_kanan);

							$data = ['upload_foto_rumah_kanan' => $file['file_name']];
							$this->M_mhs->edit_data($no_pendaftaran, $data);
							$this->session->set_flashdata('update8_foto_rumah_kanan_success', '
								<div class="alert alert-success">
									<p>Data Foto Rumah Kanan Berhasil diUpdate</p>
								</div>');
						}
					}
				}
			}

			if($sess_foto_rumah_dalam == null ){
				switch($ubah_foto_rumah_dalam == 6){
					case 6 :
					{
						if(!$this->upload->do_upload('foto_rumah_dalam')){
						$this->session->set_flashdata('update8_foto_rumah_dalam_error',
							'<div class="alert alert-warning">
								<p>Upload Foto Rumah Bagian Dalam Gagal, Silahkan Cek Kembali Ukuran dan Format File Foto Anda</p>
							</div>' );
						}else{
							$file = $this->upload->data();
							//unlink('assets/foto_dokumen/'.$foto->upload_foto_rumah_dalam);

							$data = ['upload_foto_rumah_dalam' => $file['file_name']];
							$this->M_mhs->edit_data($no_pendaftaran, $data);
							$this->session->set_flashdata('update8_foto_rumah_dalam_success', '
								<div class="alert alert-success">
									<p>Data Foto Rumah Bagian Dalam dalam Berhasil diUpdate</p>
								</div>');
						}
					}
				}
			}
			//End upload foto rumah kanan dan bagian dalam

			//upload foto pbb, kipk dan rekening listrik
			if($sess_foto_pbb == null ){
				switch($ubah_foto_pbb == 7){
					case 7 :
					{
						if(!$this->upload->do_upload('foto_pbb')){
						$this->session->set_flashdata('update8_foto_pbb_error',
							'<div class="alert alert-warning">
								<p>Upload Foto PBB Gagal, Silahkan Cek Kembali Ukuran dan Format File Foto Anda</p>
							</div>' );
						}else{
							$file = $this->upload->data();
							//unlink('assets/foto_dokumen/'.$foto->upload_foto_pbb);

							$data = ['upload_foto_pbb' => $file['file_name']];
							$this->M_mhs->edit_data($no_pendaftaran, $data);
							$this->session->set_flashdata('update8_foto_pbb_success', '
								<div class="alert alert-success">
									<p>Data Foto PBB Berhasil diUpdate</p>
								</div>');
						}
					}
				}
			}

			if($sess_foto_rek_listrik == null ){
				switch($ubah_foto_rek == 8){
					case 8 :
					{
						if(!$this->upload->do_upload('foto_rek_listrik')){
						$this->session->set_flashdata('update8_foto_rek_listrik_error',
							'<div class="alert alert-warning">
								<p>Upload Foto Rekening Listrik Gagal, Silahkan Cek Kembali Ukuran dan Format File Foto Anda</p>
							</div>' );
						}else{
							$file = $this->upload->data();
							//unlink('assets/foto_dokumen/'.$foto->upload_foto_rek_listrik);

							$data = ['upload_foto_rek_listrik' => $file['file_name']];
							$this->M_mhs->edit_data($no_pendaftaran, $data);
							$this->session->set_flashdata('update8_foto_rek_listrik_success', '
								<div class="alert alert-success">
									<p>Data Foto Rekening Listrik Berhasil diUpdate</p>
								</div>');
						}
					}
				}
			}

			if($sess_foto_kipk == null ){
				switch($ubah_foto_kipk == 9){
					case 9 :
					{
						if(!$this->upload->do_upload('foto_kipk')){
						$this->session->set_flashdata('update8_foto_kipk_error',
							'<div class="alert alert-warning">
								<p>Upload Foto KIP-K Gagal, Silahkan Cek Kembali Ukuran dan Format File Foto Anda</p>
							</div>' );
						}else{
							$file = $this->upload->data();
							//unlink('assets/foto_dokumen/'.$foto->upload_foto_rek_listrik);

							$data = ['upload_foto_kipk' => $file['file_name']];
							$this->M_mhs->edit_data($no_pendaftaran, $data);
							$this->session->set_flashdata('update8_foto_kipk_success', '
								<div class="alert alert-success">
									<p>Data Foto KIP-K Berhasil diUpdate</p>
								</div>');
						}
					}
				}
			}
			//end upload foto pbb, kipk dan rekening listrik

			//upload dokumen baru
			if($sess_surat_keterangan == null){
				switch($ubah_surat_keterangan == 10){
					case 10 :
					{
						if(!$this->upload->do_upload('surat_keterangan_kepemilikan_rumah')){
						$this->session->set_flashdata('update8_surat_keterangan_error',
							'<div class="alert alert-warning">
								<p>Upload Surat Keterangan Pemilik Rumah Gagal, Silahkan Cek Kembali Ukuran dan Format File PDF Anda</p>
							</div>' );
						}else{
							$file = $this->upload->data();
							// unlink('assets/dokumen_pdf/'.$foto->upload_surat_keterangan);

							$data = ['upload_surat_keterangan_kepemilikan_rumah' => $file['file_name']];
							$this->M_mhs->edit_data($no_pendaftaran, $data);
							$this->session->set_flashdata('update8_surat_keterangan_success', '
								<div class="alert alert-success">
									<p>Data Surat Keterangan Kepemilikan Rumah Berhasil diUpdate</p>
								</div>');
						}
					}
				}
			}

			if($sess_surat_pernyataan_kebenaran_data == null){
				switch($ubah_surat_pernyataan_kebenaran_data == 11){
					case 11 :
					{
						if(!$this->upload->do_upload('surat_pernyataan_kebenaran_data')){
						$this->session->set_flashdata('update8_surat_pernyataan_kebenaran_data_error',
							'<div class="alert alert-warning">
								<p>Upload Surat Pernyataan Kebenaran Data Gagal, Silahkan Cek Kembali Ukuran dan Format File PDF Anda</p>
							</div>' );
						}else{
							$file = $this->upload->data();
							// unlink('assets/dokumen_pdf/'.$foto->upload_surat_pernyataan_kebenaran_data);

							$data = ['upload_surat_pernyataan_kebenaran_data' => $file['file_name']];
							$this->M_mhs->edit_data($no_pendaftaran, $data);
							$this->session->set_flashdata('update8_surat_pernyataan_kebenaran_data_success', '
								<div class="alert alert-success">
									<p>Data Surat Pernyataan Kebenaran Data Berhasil diUpdate</p>
								</div>');
						}
					}
				}
			}

			if($sess_fakta_integritas == null){
				switch($ubah_fakta_integritas == 12){
					case 12 :
					{
						if(!$this->upload->do_upload('fakta_integritas')){
						$this->session->set_flashdata('update8_fakta_integritas_error',
							'<div class="alert alert-warning">
								<p>Upload Fakta Integritas Error, Silahkan Cek Kembali Ukuran dan Format File PDF Anda</p>
							</div>' );
						}else{
							$file = $this->upload->data();
							// unlink('assets/dokumen_pdf/'.$foto->upload_fakta_integritas);

							$data = ['upload_fakta_integritas' => $file['file_name']];
							$this->M_mhs->edit_data($no_pendaftaran, $data);
							$this->session->set_flashdata('update8_fakta_integritas_success', '
								<div class="alert alert-success">
									<p>Data Fakta Integritas Berhasil diUpdate</p>
								</div>');
						}
					}
				}
			}

			if($sess_scan_raport == null){
				switch($ubah_scan_raport == 13){
					case 13 :
					{
						if(!$this->upload->do_upload('scan_raport')){
						$this->session->set_flashdata('update8_scan_raport_error',
							'<div class="alert alert-warning">
								<p>Upload Scan Raport Gagal, Silahkan Cek Kembali Ukuran dan Format File PDF Anda</p>
							</div>' );
						}else{
							$file = $this->upload->data();
							// unlink('assets/dokumen_pdf/'.$foto->upload_scan_raport);

							$data = ['upload_scan_raport' => $file['file_name']];
							$this->M_mhs->edit_data($no_pendaftaran, $data);
							$this->session->set_flashdata('update8_scan_raport_success', '
								<div class="alert alert-success">
									<p>Data Scan Raport Berhasil diUpdate</p>
								</div>');
						}
					}
				}
			}

			if($sess_surat_pernyataan_kipk == null){
				switch($ubah_surat_pernyataan_kipk == 14){
					case 14 :
					{
						if(!$this->upload->do_upload('surat_pernyataan_kipk')){
						$this->session->set_flashdata('update8_surat_pernyataan_kipk_error',
							'<div class="alert alert-warning">
								<p>Upload Surat Pernyataan KIP-K Gagal, Silahkan Cek Kembali Ukuran dan Format File Surat Pernyataan Anda</p>
							</div>' );
						}else{
							$file = $this->upload->data();
							// unlink('assets/dokumen_pdf/'.$foto->upload_surat_pernyataan_kipk);

							$data = ['upload_surat_pernyataan_kipk' => $file['file_name']];
							$this->M_mhs->edit_data($no_pendaftaran, $data);
							$this->session->set_flashdata('update8_surat_pernyataan_kipk_success', '
								<div class="alert alert-success">
									<p>Data Surat Pernyataan KIP-K Berhasil diUpdate</p>
								</div>');
						}
					}
				}
			}
			//end upload dokumen baru

			//update upload foto ktp dan kk
			if($sess_foto_ktp != null ){
				switch($ubah_foto_ktp == 1){
					case 1 :
					{
						if(!$this->upload->do_upload('foto_ktp')){
						$this->session->set_flashdata('update8_foto_ktp_error',
							'<div class="alert alert-warning">
								<p>Upload Foto KTP Gagal, Silahkan Cek Kembali Ukuran dan Format File Foto Anda</p>
							</div>' );
						}else{
							$file = $this->upload->data();
							unlink('assets/foto_dokumen/'.$foto->upload_foto_ktp);

							$data = ['upload_foto_ktp' => $file['file_name']];
							$this->M_mhs->edit_data($no_pendaftaran, $data);
							$this->session->set_flashdata('update8_foto_ktp_success', '
								<div class="alert alert-success">
									<p>Data Foto KTP Berhasil diUpdate</p>
								</div>');
						}
					}
				}
			}

			if($sess_foto_kk != null ){
				switch($ubah_foto_kk == 2){
					case 2 :
					{
						if(!$this->upload->do_upload('foto_kk')){
						$this->session->set_flashdata('update8_foto_kk_error',
							'<div class="alert alert-warning">
								<p>Upload Foto Kartu Keluarga Gagal, Silahkan Cek Kembali Ukuran dan Format File Foto Anda</p>
							</div>' );
						}else{
							$file = $this->upload->data();
							unlink('assets/foto_dokumen/'.$foto->upload_foto_kk);

							$data = ['upload_foto_kk' => $file['file_name']];
							$this->M_mhs->edit_data($no_pendaftaran, $data);
							$this->session->set_flashdata('update8_foto_kk_success', '
								<div class="alert alert-success">
									<p>Data Foto Kartu Keluarga Berhasil diUpdate</p>
								</div>');
						}
					}
				}
			}
			//end update upload foto ktp dan kk

			//update upload foto rumah depan dan kiri
			if($sess_foto_rumah_depan != null){
				switch($ubah_foto_rumah_depan == 3){
					case 3 :
					{
						if(!$this->upload->do_upload('foto_rumah_depan')){
						$this->session->set_flashdata('update8_foto_rumah_depan_error',
							'<div class="alert alert-warning">
								<p>Upload Foto Rumah Depan Gagal, Silahkan Cek Kembali Ukuran dan Format File Foto Anda</p>
							</div>' );
						}else{
							$file = $this->upload->data();
							unlink('assets/foto_dokumen/'.$foto->upload_foto_rumah_depan);

							$data = ['upload_foto_rumah_depan' => $file['file_name']];
							$this->M_mhs->edit_data($no_pendaftaran, $data);
							$this->session->set_flashdata('update8_foto_rumah_depan_success', '
								<div class="alert alert-success">
									<p>Data Foto Rumah Depan Berhasil diUpdate</p>
								</div>');
						}
					}
				}
			}

			if($sess_foto_rumah_kiri != null){
				switch($ubah_foto_rumah_kiri == 4){
					case 4 :
					{
						if(!$this->upload->do_upload('foto_rumah_kiri')){
						$this->session->set_flashdata('update8_foto_rumah_kiri_error',
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
			}
			//end update upload foto rumah depan dan kiri

			//update upload foto rumah kanan dan bagian dalam
			if($sess_foto_rumah_kanan != null){
				switch($ubah_foto_rumah_kanan == 5){
					case 5 :
					{
						if(!$this->upload->do_upload('foto_rumah_kanan')){
						$this->session->set_flashdata('update8_foto_rumah_kanan_error',
							'<div class="alert alert-warning">
								<p>Upload Foto Rumah Kanan Gagal, Silahkan Cek Kembali Ukuran dan Format File Foto Anda</p>
							</div>' );
						}else{
							$file = $this->upload->data();
							unlink('assets/foto_dokumen/'.$foto->upload_foto_rumah_kanan);

							$data = ['upload_foto_rumah_kanan' => $file['file_name']];
							$this->M_mhs->edit_data($no_pendaftaran, $data);
							$this->session->set_flashdata('update8_foto_rumah_kanan_success', '
								<div class="alert alert-success">
									<p>Data Foto Rumah Kanan Berhasil diUpdate</p>
								</div>');
						}
					}
				}
			}

			if($sess_foto_rumah_dalam != null ){
				switch($ubah_foto_rumah_dalam == 6){
					case 6 :
					{
						if(!$this->upload->do_upload('foto_rumah_dalam')){
						$this->session->set_flashdata('update8_foto_rumah_dalam_error',
							'<div class="alert alert-warning">
								<p>Upload Foto Rumah Bagian Dalam Gagal, Silahkan Cek Kembali Ukuran dan Format File Foto Anda</p>
							</div>' );
						}else{
							$file = $this->upload->data();
							unlink('assets/foto_dokumen/'.$foto->upload_foto_rumah_dalam);

							$data = ['upload_foto_rumah_dalam' => $file['file_name']];
							$this->M_mhs->edit_data($no_pendaftaran, $data);
							$this->session->set_flashdata('update8_foto_rumah_dalam_success', '
								<div class="alert alert-success">
									<p>Data Foto Rumah Bagian Dalam dalam Berhasil diUpdate</p>
								</div>');
						}
					}
				}
			}
			//end update upload foto rumah kanan dan bagian dalam

			//update upload foto pbb, kipk dan rekening listrik
			if($sess_foto_pbb != null){
				switch($ubah_foto_pbb == 7){
					case 7 :
					{
						if(!$this->upload->do_upload('foto_pbb')){
						$this->session->set_flashdata('update8_foto_pbb_error',
							'<div class="alert alert-warning">
								<p>Upload Foto PBB Gagal, Silahkan Cek Kembali Ukuran dan Format File Foto Anda</p>
							</div>' );
						}else{
							$file = $this->upload->data();
							unlink('assets/foto_dokumen/'.$foto->upload_foto_pbb);

							$data = ['upload_foto_pbb' => $file['file_name']];
							$this->M_mhs->edit_data($no_pendaftaran, $data);
							$this->session->set_flashdata('update8_foto_pbb_success', '
								<div class="alert alert-success">
									<p>Data Foto PBB Berhasil diUpdate</p>
								</div>');
						}
					}
				}
			}

			if($sess_foto_rek_listrik != null){
				switch($ubah_foto_rek == 8){
					case 8 :
					{
						if(!$this->upload->do_upload('foto_rek_listrik')){
						$this->session->set_flashdata('update8_foto_rek_listrik_error',
							'<div class="alert alert-warning">
								<p>Upload Foto Rekening Listrik Gagal, Silahkan Cek Kembali Ukuran dan Format File Foto Anda</p>
							</div>' );
						}else{
							$file = $this->upload->data();
							unlink('assets/foto_dokumen/'.$foto->upload_foto_rek_listrik);

							$data = ['upload_foto_rek_listrik' => $file['file_name']];
							$this->M_mhs->edit_data($no_pendaftaran, $data);
							$this->session->set_flashdata('update8_foto_rek_listrik_success', '
								<div class="alert alert-success">
									<p>Data Foto Rekening Listrik Berhasil diUpdate</p>
								</div>');
						}
					}
				}
			}

			if($sess_foto_kipk != null){
				switch($ubah_foto_kipk == 9){
					case 9 :
					{
						if(!$this->upload->do_upload('foto_kipk')){
						$this->session->set_flashdata('update8_foto_kipk_error',
							'<div class="alert alert-warning">
								<p>Upload Foto KIP-K Gagal, Silahkan Cek Kembali Ukuran dan Format File Foto Anda</p>
							</div>' );
						}else{
							$file = $this->upload->data();
							unlink('assets/foto_dokumen/'.$foto->upload_foto_kipk);

							$data = ['upload_foto_kipk' => $file['file_name']];
							$this->M_mhs->edit_data($no_pendaftaran, $data);
							$this->session->set_flashdata('update8_foto_kipk_success', '
								<div class="alert alert-success">
									<p>Data Foto KIP-K Berhasil diUpdate</p>
								</div>');
						}
					}
				}
			}
			//end update upload foto pbb, kipk dan rekening listrik

			//update dokumen yang baru
			if($sess_surat_keterangan != null){
				switch($ubah_surat_keterangan == 10){
					case 10 :
					{
						if(!$this->upload->do_upload('surat_keterangan')){
						$this->session->set_flashdata('update8_surat_keterangan_error',
							'<div class="alert alert-warning">
								<p>Upload Surat Keterangan Pemilik Rumah Gagal, Silahkan Cek Kembali Ukuran dan Format File PDF Anda</p>
							</div>' );
						}else{
							$file = $this->upload->data();
							unlink('assets/dokumen_pdf/'.$foto->upload_surat_keterangan);

							$data = ['upload_surat_keterangan' => $file['file_name']];
							$this->M_mhs->edit_data($no_pendaftaran, $data);
							$this->session->set_flashdata('update8_surat_keterangan_success', '
								<div class="alert alert-success">
									<p>Data Surat Keterangan Pemilik Rumah Berhasil diUpdate</p>
								</div>');
						}
					}
				}
			}

			if($sess_surat_pernyataan_kebenaran_data != null){
				switch($ubah_surat_pernyataan_kebenaran_data == 11){
					case 11 :
					{
						if(!$this->upload->do_upload('surat_pernyataan_kebenaran_data')){
						$this->session->set_flashdata('update8_surat_pernyataan_kebenaran_data_error',
							'<div class="alert alert-warning">
								<p>Upload Surat Pernyataan Kebenaran Data Gagal, Silahkan Cek Kembali Ukuran dan Format File PDF Anda</p>
							</div>' );
						}else{
							$file = $this->upload->data();
							unlink('assets/dokumen_pdf/'.$foto->upload_surat_pernyataan_kebenaran_data);

							$data = ['upload_surat_pernyataan_kebenaran_data' => $file['file_name']];
							$this->M_mhs->edit_data($no_pendaftaran, $data);
							$this->session->set_flashdata('update8_surat_pernyataan_kebenaran_data_success', '
								<div class="alert alert-success">
									<p>Data Surat Pernyataan Kebenaran Data Berhasil diUpdate</p>
								</div>');
						}
					}
				}
			}

			if($sess_fakta_integritas != null){
				switch($ubah_fakta_integritas == 12){
					case 12 :
					{
						if(!$this->upload->do_upload('fakta_integritas')){
						$this->session->set_flashdata('update8_fakta_integritas_error',
							'<div class="alert alert-warning">
								<p>Upload Fakta Integritas Error, Silahkan Cek Kembali Ukuran dan Format File PDF Anda</p>
							</div>' );
						}else{
							$file = $this->upload->data();
							unlink('assets/dokumen_pdf/'.$foto->upload_fakta_integritas);

							$data = ['upload_fakta_integritas' => $file['file_name']];
							$this->M_mhs->edit_data($no_pendaftaran, $data);
							$this->session->set_flashdata('update8_fakta_integritas_success', '
								<div class="alert alert-success">
									<p>Data Fakta Integritas Berhasil diUpdate</p>
								</div>');
						}
					}
				}
			}

			if($sess_scan_raport != null){
				switch($ubah_scan_raport == 13){
					case 13 :
					{
						if(!$this->upload->do_upload('scan_raport')){
						$this->session->set_flashdata('update8_scan_raport_error',
							'<div class="alert alert-warning">
								<p>Upload Scan Raport Gagal, Silahkan Cek Kembali Ukuran dan Format File PDF Anda</p>
							</div>' );
						}else{
							$file = $this->upload->data();
							unlink('assets/dokumen_pdf/'.$foto->upload_scan_raport);

							$data = ['upload_scan_raport' => $file['file_name']];
							$this->M_mhs->edit_data($no_pendaftaran, $data);
							$this->session->set_flashdata('update8_scan_raport_success', '
								<div class="alert alert-success">
									<p>Data Scan Raport Berhasil diUpdate</p>
								</div>');
						}
					}
				}
			}

			if($sess_surat_pernyataan_kipk != null){
				switch($ubah_surat_pernyataan_kipk == 14){
					case 14 :
					{
						if(!$this->upload->do_upload('surat_pernyataan_kipk')){
						$this->session->set_flashdata('update8_surat_pernyataan_kipk_error',
							'<div class="alert alert-warning">
								<p>Upload Surat Pernyataan KIP-K Gagal, Silahkan Cek Kembali Ukuran dan Format File Surat Pernyataan Anda</p>
							</div>' );
						}else{
							$file = $this->upload->data();
							unlink('assets/dokumen_pdf/'.$foto->upload_surat_pernyataan_kipk);

							$data = ['upload_surat_pernyataan_kipk' => $file['file_name']];
							$this->M_mhs->edit_data($no_pendaftaran, $data);
							$this->session->set_flashdata('update8_surat_pernyataan_kipk_success', '
								<div class="alert alert-success">
									<p>Data Surat Pernyataan KIP-K Berhasil diUpdate</p>
								</div>');
						}
					}
				}
			}
			//end update dokumen baru

			redirect('C_mhs/step9');
		}else if($buka < $sekarang){
			$this->session->set_flashdata('belum_buka','<script>alert("Pendaftaran Beasiswa KIP-K Uin Bandung Tidak dibuka"); </script>');
        	echo $this->session->flashdata('belum_buka');
        	$this->biodata();
		}else if($tutup > $sekarang){
			$this->session->set_flashdata('tutup','<script>alert("Pendaftaran Beasiswa KIP-K Uin Bandung Sudah Tutup"); </script>');
        	echo $this->session->flashdata('tutup');
        	$this->biodata();
		}
	}
	//end function update dokumen pendukung

	//function update persyaratan dokumen
	public function direct10(){
		$reg = $this->session->userdata('reg');
		$buka = $this->session->userdata('buka');
		$tutup = $this->session->userdata('tutup');

		date_default_timezone_set('Asia/Jakarta');
        $sekarang = date('Y-m-d H:i:s');

		if($reg == 2){
			redirect('C_mhs/biodata');
		}else if($sekarang >= $buka && $sekarang <= $tutup){
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
			$this->session->set_flashdata('direct9_success',
				'<div class="alert alert-success">
	            <p>Data Persyaratan Dokumen Anda sudah Tersimpan, Silahkan Lanjut ke Tahap Selanjutnya</p>
				</div>');

			$this->step10();
		}else if($buka < $sekarang){
			$this->session->set_flashdata('belum_buka','<script>alert("Pendaftaran Beasiswa KIP-K Uin Bandung Tidak dibuka"); </script>');
        	echo $this->session->flashdata('belum_buka');
        	$this->biodata();
		}else if($tutup > $sekarang){
			$this->session->set_flashdata('tutup','<script>alert("Pendaftaran Beasiswa KIP-K Uin Bandung Sudah Tutup"); </script>');
        	echo $this->session->flashdata('tutup');
        	$this->biodata();
		}
	}
	//end function update persyaratan dokumen

	//function view report prestasi
	public function report_bidikmisi(){
		$nim = $this->session->userdata('nim');
		$data = array(
			'data_nim' => $this->M_mhs->getData_login_nim($nim)->result(),
			'command_report' => $this->M_mhs->getTable_default('mastermhs_control_report')->result()
		);
		$this->load->view('project_bidikmisi/mahasiswa/report_prestasi', $data);
	}
	//end function view report prestasi

	//function report bidikmisi
	public function report(){
		$ip_address = $this->input->ip_address();
		date_default_timezone_set('Asia/Jakarta');
        $time = date('Y-m-d H:i:s');
        $nim = $this->input->post('nim');
        $over = $this->input->post('over_transkrip');
        $row_report = $this->M_mhs->getRow_report($nim);

        $config['upload_path'] 		= './assets/transkrip_nilai/';
		$config['allowed_types'] 	= 'PDF|pdf';
		$config['max_size']			= 150;

		$this->load->library('upload', $config);

		$sks1   = $this->input->post('sks_1');
		$t_sks1 = $this->input->post('total_sks_1');
		$sks2   = $this->input->post('sks_2');
		$t_sks2 = $this->input->post('total_sks_2');
		$sks3   = $this->input->post('sks_3');
		$t_sks3 = $this->input->post('total_sks_3');
		$sks4   = $this->input->post('sks_4');
		$t_sks4 = $this->input->post('total_sks_4');
		$sks5   = $this->input->post('sks_5');
		$t_sks5 = $this->input->post('total_sks_5');
		$sks6   = $this->input->post('sks_6');
		$t_sks6 = $this->input->post('total_sks_6');
		$sks7   = $this->input->post('sks_7');
		$t_sks7 = $this->input->post('total_sks_7');
		$sks8   = $this->input->post('sks_8');
		$t_sks8 = $this->input->post('total_sks_8');

		//kondisi report semester 1
		if($t_sks1 && $sks1){
			$ip_s1 = $t_sks1/$sks1;
			$data = [
				'sks1' => $sks1,
				't_sks1' => $t_sks1,
				'ip_s1' => $ip_s1,
				'updated_at' => $time
			];
			$this->M_mhs->update_data_nim($nim, $data);

			if($over == 1){
				if(!$this->upload->do_upload('transkrip_nilai_1')){
				$this->session->set_flashdata('gagal_tranksrip_nilai_1',
					'<div class="alert alert-warning">
						<p>Upload Transkrip Nilai Gagal, Silahkan Cek Kembali Ukuran dan Format File Transkrip Anda</p>
					</div>' );
				}else{
					$file = $this->upload->data();
					if($row_report->transkrip_nilai1 != NULL){
						unlink('assets/transkrip_nilai/'.$row_report->transkrip_nilai1);
					}

					$data_transkrip = ['transkrip_nilai1' => $file['file_name']];
					$this->M_mhs->update_data_nim($nim, $data_transkrip);
				}
			}
			$this->M_mhs->getData_ipk1($nim);

			if($row_report->ip_k2 != 0.00){
				$this->M_mhs->getData_ipk2($nim);
			}

			if($row_report->ip_k3 != 0.00){
				$this->M_mhs->getData_ipk3($nim);
			}

			if($row_report->ip_k4 != 0.00){
				$this->M_mhs->getData_ipk4($nim);
			}

			if($row_report->ip_k5 != 0.00){
				$this->M_mhs->getData_ipk5($nim);
			}

			if($row_report->ip_k6 != 0.00){
				$this->M_mhs->getData_ipk6($nim);
			}

			if($row_report->ip_k7 != 0.00){
				$this->M_mhs->getData_ipk7($nim);
			}

			if($row_report->ip_k8 != 0.00){
				$this->M_mhs->getData_ipk8($nim);
			}
			$this->session->set_flashdata('berhasil_semester_1', '
						<div class="alert alert-success">
							<p>Report Semester 1 Berhasil</p>
						</div>');
		//end kondisi report semester 1

		//kondisi report semester 2
		}else if($t_sks2 && $sks2){
			$ip_s2 = $t_sks2/$sks2;
			$data = [
				'sks2' => $sks2,
				't_sks2' => $t_sks2,
				'ip_s2' => $ip_s2,
				'updated_at' => $time
			];
			$this->M_mhs->update_data_nim($nim, $data);

			if($over == 1){
				if(!$this->upload->do_upload('transkrip_nilai_2')){
				$this->session->set_flashdata('gagal_tranksrip_nilai_2',
					'<div class="alert alert-warning">
						<p>Upload Transkrip Nilai Gagal, Silahkan Cek Kembali Ukuran dan Format File Transkrip Anda</p>
					</div>' );
				}else{
					$file = $this->upload->data();
					if($row_report->transkrip_nilai2 != NULL){
						unlink('assets/transkrip_nilai/'.$row_report->transkrip_nilai2);
					}

					$data_transkrip = ['transkrip_nilai2' => $file['file_name']];
					$this->M_mhs->update_data_nim($nim, $data_transkrip);
				}
			}
			$this->M_mhs->getData_ipk2($nim);
			if($row_report->ip_k3 != 0.00){
				$this->M_mhs->getData_ipk3($nim);
			}

			if($row_report->ip_k4 != 0.00){
				$this->M_mhs->getData_ipk4($nim);
			}

			if($row_report->ip_k5 != 0.00){
				$this->M_mhs->getData_ipk5($nim);
			}

			if($row_report->ip_k6 != 0.00){
				$this->M_mhs->getData_ipk6($nim);
			}

			if($row_report->ip_k7 != 0.00){
				$this->M_mhs->getData_ipk7($nim);
			}

			if($row_report->ip_k8 != 0.00){
				$this->M_mhs->getData_ipk8($nim);
			}
			$this->session->set_flashdata('berhasil_semester_2', '
						<div class="alert alert-success">
							<p>Report Semester 2 Berhasil</p>
						</div>');
		//end kondisi report semester 2

		//kondisi report semester 3
		}else if($t_sks3 && $sks3){
			$ip_s3 = $t_sks3/$sks3;
			$data = [
				'sks3' => $sks3,
				't_sks3' => $t_sks3,
				'ip_s3' => $ip_s3,
				'updated_at' => $time
			];
			$this->M_mhs->update_data_nim($nim, $data);

			if($over == 1){
				if(!$this->upload->do_upload('transkrip_nilai_3')){
				$this->session->set_flashdata('gagal_tranksrip_nilai_3',
					'<div class="alert alert-warning">
						<p>Upload Transkrip Nilai Gagal, Silahkan Cek Kembali Ukuran dan Format File Transkrip Anda</p>
					</div>' );
				}else{
					$file = $this->upload->data();
					if($row_report->transkrip_nilai3 != NULL){
						unlink('assets/transkrip_nilai/'.$row_report->transkrip_nilai3);
					}

					$data_transkrip = ['transkrip_nilai3' => $file['file_name']];
					$this->M_mhs->update_data_nim($nim, $data_transkrip);
				}
			}
			$this->M_mhs->getData_ipk3($nim);
			if($row_report->ip_k4 != 0.00){
				$this->M_mhs->getData_ipk4($nim);
			}

			if($row_report->ip_k5 != 0.00){
				$this->M_mhs->getData_ipk5($nim);
			}

			if($row_report->ip_k6 != 0.00){
				$this->M_mhs->getData_ipk6($nim);
			}

			if($row_report->ip_k7 != 0.00){
				$this->M_mhs->getData_ipk7($nim);
			}

			if($row_report->ip_k8 != 0.00){
				$this->M_mhs->getData_ipk8($nim);
			}
			$this->session->set_flashdata('berhasil_semester_3', '
						<div class="alert alert-success">
							<p>Report Semester 3 Berhasil</p>
						</div>');
		//end kondisi report semester 3

		//kondisi report semester 4
		}else if($t_sks4 && $sks4){
			$ip_s4 = $t_sks4/$sks4;
			$data = [
				'sks4' => $sks4,
				't_sks4' => $t_sks4,
				'ip_s4' => $ip_s4,
				'updated_at' => $time
			];
			$this->M_mhs->update_data_nim($nim, $data);

			if($over == 1){
				if(!$this->upload->do_upload('transkrip_nilai_4')){
				$this->session->set_flashdata('gagal_tranksrip_nilai_4',
					'<div class="alert alert-warning">
						<p>Upload Transkrip Nilai Gagal, Silahkan Cek Kembali Ukuran dan Format File Transkrip Anda</p>
					</div>' );
				}else{
					$file = $this->upload->data();
					if($row_report->transkrip_nilai4 != NULL){
						unlink('assets/transkrip_nilai/'.$row_report->transkrip_nilai4);
					}

					$data_transkrip = ['transkrip_nilai4' => $file['file_name']];
					$this->M_mhs->update_data_nim($nim, $data_transkrip);
				}
			}
			$this->M_mhs->getData_ipk4($nim);
			if($row_report->ip_k5 != 0.00){
				$this->M_mhs->getData_ipk5($nim);
			}

			if($row_report->ip_k6 != 0.00){
				$this->M_mhs->getData_ipk6($nim);
			}

			if($row_report->ip_k7 != 0.00){
				$this->M_mhs->getData_ipk7($nim);
			}

			if($row_report->ip_k8 != 0.00){
				$this->M_mhs->getData_ipk8($nim);
			}
			$this->session->set_flashdata('berhasil_semester_4', '
						<div class="alert alert-success">
							<p>Report Semester 4 Berhasil</p>
						</div>');
		//end kondisi report semester 4

		//kondisi report semester 5
		}else if($t_sks5 && $sks5){
			$ip_s5 = $t_sks5/$sks5;
			$data = [
				'sks5' => $sks5,
				't_sks5' => $t_sks5,
				'ip_s5' => $ip_s5,
				'updated_at' => $time
			];
			$this->M_mhs->update_data_nim($nim, $data);

			if($over == 1){
				if(!$this->upload->do_upload('transkrip_nilai_5')){
				$this->session->set_flashdata('gagal_tranksrip_nilai_5',
					'<div class="alert alert-warning">
						<p>Upload Transkrip Nilai Gagal, Silahkan Cek Kembali Ukuran dan Format File Transkrip Anda</p>
					</div>' );
				}else{
					$file = $this->upload->data();
					if($row_report->transkrip_nilai5 != NULL){
						unlink('assets/transkrip_nilai/'.$row_report->transkrip_nilai5);
					}

					$data_transkrip = ['transkrip_nilai5' => $file['file_name']];
					$this->M_mhs->update_data_nim($nim, $data_transkrip);
				}
			}
			$this->M_mhs->getData_ipk5($nim);
			if($row_report->ip_k6 != 0.00){
				$this->M_mhs->getData_ipk6($nim);
			}

			if($row_report->ip_k7 != 0.00){
				$this->M_mhs->getData_ipk7($nim);
			}

			if($row_report->ip_k8 != 0.00){
				$this->M_mhs->getData_ipk8($nim);
			}
			$this->session->set_flashdata('berhasil_semester_5', '
						<div class="alert alert-success">
							<p>Report Semester 5 Berhasil</p>
						</div>');
		//end kondisi report semester 5

		//kondisi report semester 6
		}else if($t_sks6 && $sks6){
			$ip_s6 = $t_sks6/$sks6;
			$data = [
				'sks5' => $sks6,
				't_sks5' => $t_sks6,
				'ip_s5' => $ip_s6,
				'updated_at' => $time
			];
			$this->M_mhs->update_data_nim($nim, $data);

			if($over == 1){
				if(!$this->upload->do_upload('transkrip_nilai_6')){
				$this->session->set_flashdata('gagal_tranksrip_nilai_6',
					'<div class="alert alert-warning">
						<p>Upload Transkrip Nilai Gagal, Silahkan Cek Kembali Ukuran dan Format File Transkrip Anda</p>
					</div>' );
				}else{
					$file = $this->upload->data();
					if($row_report->transkrip_nilai6 != NULL){
						unlink('assets/transkrip_nilai/'.$row_report->transkrip_nilai6);
					}

					$data_transkrip = ['transkrip_nilai6' => $file['file_name']];
					$this->M_mhs->update_data_nim($nim, $data_transkrip);
				}
			}
			$this->M_mhs->getData_ipk6($nim);
			if($row_report->ip_k7 != 0.00){
				$this->M_mhs->getData_ipk7($nim);
			}

			if($row_report->ip_k8 != 0.00){
				$this->M_mhs->getData_ipk8($nim);
			}
			$this->session->set_flashdata('berhasil_semester_6', '
						<div class="alert alert-success">
							<p>Report Semester 6 Berhasil</p>
						</div>');
		//end kondisi report semester 6

		//kondisi report semester 7
		}else if($t_sks7 && $sks7){
			$ip_s7 = $t_sks7/$sks7;
			$data = [
				'sks7' => $sks7,
				't_sks7' => $t_sks7,
				'ip_s7' => $ip_s7,
				'updated_at' => $time
			];
			$this->M_mhs->update_data_nim($nim, $data);

			if($over == 1){
				if(!$this->upload->do_upload('transkrip_nilai_7')){
				$this->session->set_flashdata('gagal_tranksrip_nilai_7',
					'<div class="alert alert-warning">
						<p>Upload Transkrip Nilai Gagal, Silahkan Cek Kembali Ukuran dan Format File Transkrip Anda</p>
					</div>' );
				}else{
					$file = $this->upload->data();
					if($row_report->transkrip_nilai7 != NULL){
						unlink('assets/transkrip_nilai/'.$row_report->transkrip_nilai7);
					}

					$data_transkrip = ['transkrip_nilai7' => $file['file_name']];
					$this->M_mhs->update_data_nim($nim, $data_transkrip);
				}
			}
			$this->M_mhs->getData_ipk7($nim);
			if($row_report->ip_k8 != 0.00){
				$this->M_mhs->getData_ipk8($nim);
			}
			$this->session->set_flashdata('berhasil_semester_7', '
						<div class="alert alert-success">
							<p>Report Semester 7 Berhasil</p>
						</div>');
		//end kondisi report semester 7

		//kondisi report semester 8
		}else if($t_sks8 && $sks8){
			$ip_s8 = $t_sks8/$sks8;
			$data = [
				'sks8' => $sks8,
				't_sks8' => $t_sks8,
				'ip_s8' => $ip_s8,
				'updated_at' => $time
			];
			$this->M_mhs->update_data_nim($nim, $data);

			if($over == 1){
				if(!$this->upload->do_upload('transkrip_nilai_8')){
				$this->session->set_flashdata('gagal_tranksrip_nilai_8',
					'<div class="alert alert-warning">
						<p>Upload Transkrip Nilai Gagal, Silahkan Cek Kembali Ukuran dan Format File Transkrip Anda</p>
					</div>' );
				}else{
					$file = $this->upload->data();
					if($row_report->transkrip_nilai8 != NULL){
						unlink('assets/transkrip_nilai/'.$row_report->transkrip_nilai8);
					}

					$data_transkrip = ['transkrip_nilai8' => $file['file_name']];
					$this->M_mhs->update_data_nim($nim, $data_transkrip);
				}
			}
			$this->M_mhs->getData_ipk8($nim);
			$this->session->set_flashdata('berhasil_semester_8', '
						<div class="alert alert-success">
							<p>Report Semester 8 Berhasil</p>
						</div>');
		//end kondisi report semester 8
		}

		redirect('C_mhs/report_bidikmisi');
	}
	//end function report bidikmisi
}?>
