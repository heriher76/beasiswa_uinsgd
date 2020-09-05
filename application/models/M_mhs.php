<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class M_mhs extends CI_Model{
		//function set getTable default
		public function getTable_default($table){
			return $this->db->get($table);
		}

		//fungsi getWhere
		public function getWhere($table,$where){
			$res = $this->db->get_where($table,$where);
			return $res->result_array();
		}

		//fungsi get
		public function getTable($table){
			$res = $this->db->get($table);
			return $res->result_array();
		}

		//function cek jadwal
		public function jadwal(){
			$query = $this->db->query("SELECT * FROM jadwal");
			return $query;
		}

		public function jadwal_tutup(){
			$query = $this->db->query("SELECT tanggal_tutup FROM jadwal");
			return $query;
		}
		//end function cek jadwal

		//reg session proses otomatis
		public function regSession($no_pendaftaran){
			return $this->db->get_where('mastermhs_new', array('no_pendaftaran' => $no_pendaftaran))->row();
		}

		//data login mhs
		public function getData_login($no_pendaftaran){
			return $this->db->get_where('mastermhs_new', array('no_pendaftaran' => $no_pendaftaran));
		}

		public function getData_login_nim($nim){
			return $this->db->get_where('mastermhs_report', array('nim' => $nim));
		}

		//update reg == 1
		public function getReg1($no_pendaftaran){
			$query = $this->db->query("UPDATE mastermhs_new SET reg=1 WHERE no_pendaftaran='$no_pendaftaran'");

			return $query;
		}

		//update reg == 2
		public function getReg2($no_pendaftaran){
			$query = $this->db->query("UPDATE mastermhs_new SET reg=2 WHERE no_pendaftaran='$no_pendaftaran'");

			return $query;
		}

		//fungsi getFoto
		public function getFoto($no_pendaftaran){
			$this->db->where('no_pendaftaran', $no_pendaftaran);
			return $this->db->get('mastermhs_new')->row();
		}
		//End fungsi getFoto

		//function edit data
		public function edit_data($no_pendaftaran, $data){
			try{
				$this->db->where('no_pendaftaran', $no_pendaftaran)->update('mastermhs_new', $data);
				return true;
			}catch(Exception $e){
				echo "System Error". $e->getMessage();
			}
		}
		//End function edit data

		//function insert data nim
		public function insert_data_nim($data){
			try{
				$this->db->insert('mastermhs_report', $data);
				return true;
			}catch(Exception $e){
				echo "System Error". $e->getMessage();
			}
		}

		//function update data nim
		public function update_data_nim($nim, $data){
			try{
				$this->db->where('nim', $nim)->update('mastermhs_report', $data);
				return true;
			}catch(Exception $e){
				echo "System Error". $e->getMessage();
			}
		}

		//fungsi edit banyak foto
		public function edit_image($no_pendaftaran, $gambar){
			$data = array(
				'upload_foto_rumah_depan' => $gambar[0],
				'upload_foto_rumah_kiri' => $gambar[1],
				'upload_foto_rumah_kanan' => $gambar[2],
				'upload_foto_pbb' => $gambar[3],
				'upload_foto_rek_listrik' => $gambar[4]
			);
			$this->db->where('no_pendaftaran', $no_pendaftaran);
			return $this->db->update('mastermhs_new', $data);
		}
		//end fungsi edit banyak foto

		//create new master mhs new
		public function insertNewMhs($no_pendaftaran, $data)
		{
			return $this->db->insert('mastermhs_new', $data);
		}

		//fungsi update kuota
		public function update_kuota($fakultas){
			$query = $this->db->query("UPDATE kuota SET kuota = kuota-1 WHERE id_fakultas = '$fakultas'");

			return $query;
		}
		//end fungsi update kuota

		//fungsi get table propinsi
		public function propinsi(){
			return $this->db->get('propinsi')->result();
		}

		//fungsi get table kab/kota
		public function kab_kota(){
			return $this->db->get('kota')->result();
		}

		//fungsi get table fakultas
		public function fakultas(){
			return $this->db->get('fakultas')->result();
		}

		//fungsi get table jurusan
		public function jurusan(){
			return $this->db->get('jurusan')->result();
		}

		//fungsi getTabel byPropinsi
		public function viewByPropinsi($id_provinsi){
			$this->db->where('id_propinsi', $id_provinsi);
			$res = $this->db->get('kota')->result();
			return $res;
		}

		//fungsi getTabel byJurusan
		public function viewByJurusan($id_fakultas){
			$this->db->where('id_fakultas', $id_fakultas);
			$res = $this->db->get('jurusan')->result();
			return $res;
		}

		//fungsi getScoring
		public function getScoring_bersih($no_pendaftaran){
			$query = $this->db->query("UPDATE mastermhs_new SET skor = ROUND( (((((penghasilan_ayah+penghasilan_ibu)/2)+pendidikan_ayah+pekerjaan_ayah+jumlah_saudara_kandung_tang_ortu)*50)/16) + (((rerata_nilai_un+rerata_nilai_raport+prestasi_akademik+prestasi_non_akademik)*25)/16) + (((luas_rumah+pbb+rek_listrik_per_bulan)*25)/12),2), registeredon = NOW() WHERE no_pendaftaran = '$no_pendaftaran'");

			return $query;
		}

		public function getScoring_ayah($no_pendaftaran){
			$query = $this->db->query("UPDATE mastermhs_new SET skor = ROUND(almarhum + (((rerata_nilai_un+rerata_nilai_raport+prestasi_akademik+prestasi_non_akademik)*25)/16) + (((luas_rumah+pbb+rek_listrik_per_bulan)*25)/12),2), registeredon = NOW() WHERE no_pendaftaran = '$no_pendaftaran'");

			return $query;
		}

		public function getScoring_ibu($no_pendaftaran){
			$query = $this->db->query("UPDATE mastermhs_new SET skor = ROUND(almarhumah + (((rerata_nilai_un+rerata_nilai_raport+prestasi_akademik+prestasi_non_akademik)*25)/16) + (((luas_rumah+pbb+rek_listrik_per_bulan)*25)/12),2), registeredon = NOW() WHERE no_pendaftaran = '$no_pendaftaran'");

			return $query;
		}

		public function getScoring_kotor($no_pendaftaran){
			$query = $this->db->query("UPDATE mastermhs_new SET skor = ROUND( (almarhum+almarhumah) + (((rerata_nilai_un+rerata_nilai_raport+prestasi_akademik+prestasi_non_akademik)*25)/16) + (((luas_rumah+pbb+rek_listrik_per_bulan)*25)/12),2), registeredon = NOW() WHERE no_pendaftaran = '$no_pendaftaran'");

			return $query;
		}
		//end fungsi getScoring

		//fungsi getWhere kolom default
		public function getKolom_default($no_pendaftaran){
			$this->db->where('no_pendaftaran', $no_pendaftaran);
			return $this->db->get('mastermhs_new')->row();
		}
		//end fungsi getWhere kolom default

	    //funtion get tabel tahun lulus secara ascending
		public function getTahun_lulus(){
			$res = $this->db->query("SELECT * FROM tahun_lulus ORDER BY tahun_lulus ASC");
			return $res->result();
		}

	    //function view data document bidikmisi
	    public function getDocument_bidikmisi(){
	        $query = $this->db->query("SELECT * FROM document WHERE id_document=1");
		    return $query;
	    }

	    public function getDocument_bidikmisi2(){
	        $query = $this->db->query("SELECT * FROM document WHERE id_document=2");
		    return $query;
	    }

	    public function getRow_report($nim){
			$this->db->where('nim', $nim);
			return $this->db->get('mastermhs_report')->row();
		}

		//function report bidikmisi
		public function getData_ipk1($nim){
			return $this->db->query("UPDATE mastermhs_report SET ip_k1 = t_sks1/sks1 WHERE nim='$nim'");
		}

		public function getData_ipk2($nim){
			return $this->db->query("UPDATE mastermhs_report SET ip_k2 = (t_sks1+t_sks2)/(sks1+sks2) WHERE nim='$nim'");
		}

		public function getData_ipk3($nim){
			return $this->db->query("UPDATE mastermhs_report SET ip_k3 = (t_sks1+t_sks2+t_sks3)/(sks1+sks2+sks3) WHERE nim='$nim'");
		}

		public function getData_ipk4($nim){
			return $this->db->query("UPDATE mastermhs_report SET ip_k4 = (t_sks1+t_sks2+t_sks3+t_sks4)/(sks1+sks2+sks3+sks4) WHERE nim='$nim'");
		}

		public function getData_ipk5($nim){
			return $this->db->query("UPDATE mastermhs_report SET ip_k5 = (t_sks1+t_sks2+t_sks3+t_sks4+t_sks5)/(sks1+sks2+sks3+sks4+sks5) WHERE nim='$nim'");
		}

		public function getData_ipk6($nim){
			return $this->db->query("UPDATE mastermhs_report SET ip_k6 = (t_sks1+t_sks2+t_sks3+t_sks4+t_sks5+t_sks6)/(sks1+sks2+sks3+sks4+sks5+sks6) WHERE nim='$nim'");
		}

		public function getData_ipk7($nim){
			return $this->db->query("UPDATE mastermhs_report SET ip_k7 = (t_sks1+t_sks2+t_sks3+t_sks4+t_sks5+t_sks6+t_sks7)/(sks1+sks2+sks3+sks4+sks5+sks6+sks7) WHERE nim='$nim'");
		}

		public function getData_ipk8($nim){
			return $this->db->query("UPDATE mastermhs_report SET ip_k8 = (t_sks1+t_sks2+t_sks3+t_sks4+t_sks5+t_sks6+t_sks7+t_sks8)/(sks1+sks2+sks3+sks4+sks5+sks6+sks7+sks8) WHERE nim='$nim'");
		}
		//end function report bidikmisi

		public function timer(){
			$this->db->select('*');
			$this->db->from('jadwal');
			$query = $this->db->get();

			if($query->num_rows() > 0){
				return $query->row();
			}
		}
	}
?>
