<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_utama extends CI_Model{
	//View data ServerSide
	var $table = 'mastermhs_new';
	var $coloumn_order = array('no_pendaftaran','nama_mahasiswa','jenis_kelamin','tanggal_lahir','tempat_lahir','email','kategori','skor','getLulus');
	var $column_search = array('no_pendaftaran','nama_mahasiswa','jenis_kelamin','tanggal_lahir','tempat_lahir','email','kategori','skor','getLulus');
	//var $order = array('no_pendaftaran' => 'asc');

	private function _get_datatables_query()
    {
         
        $this->db->from($this->table);
 
        $i = 0;
     
        foreach ($this->column_search as $item) // looping awal
        {
            if($_POST['search']['value']) // jika datatable mengirimkan pencarian dengan metode POST
            {
                 
                if($i===0) // looping awal
                {
                    $this->db->group_start(); 
                    $this->db->like($item, $_POST['search']['value']);
                }
                else
                {
                    $this->db->or_like($item, $_POST['search']['value']);
                }
 
                if(count($this->column_search) - 1 == $i) 
                    $this->db->group_end(); 
            }
            $i++;
        }
         
        /*if(isset($_POST['order'])) 
        {
            $this->db->order_by($this->column_order[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
        } 
        else if(isset($this->order))
        {
            $order = $this->order;
            $this->db->order_by(key($order), $order[key($order)]);
        }*/
    }

    function get_datatables()
    {
        $this->_get_datatables_query();
        if($_POST['length'] != -1)
        $this->db->limit($_POST['length'], $_POST['start']);
        $query = $this->db->get();
        return $query->result();
    }
 
    function count_filtered()
    {
        $this->_get_datatables_query();
        $query = $this->db->get();
        return $query->num_rows();
    }
 
    public function count_all()
    {
        $this->db->from($this->table);
        return $this->db->count_all_results();
    }
    //end View data ServerSide

	//function cek user admin/executive
	public function cek_user($data){
		$query = $this->db->get_where('master_utama', $data);
		return $query;
	}

	//function cek user no pendaftaran
	public function cek_user_mhs($data){
		$query = $this->db->get_where('mastermhs_new', $data);
		return $query;
	}

	//function cek jadwal
	public function jadwal(){
		$query= $this->db->query("SELECT * FROM jadwal");
		return $query;
	}
	//end function cek jadwal

	//function edit_data utama
	public function edit_data($id, $data){
		try{
			$this->db->where('id', $id)->update('master_utama', $data);
			return true;
		}catch(Exception $e){
			echo "System Error". $e->getMessage();
		}
	}

	//edit data mahasiswa
	public function edit_data_mahasiswa($no_pendaftaran, $data){
		try{
			$this->db->where('sha1(md5(sha1(md5(sha1(no_pendaftaran)))))', $no_pendaftaran)->update('mastermhs_new', $data);
			return true;
		}catch(Exception $e){
			echo "System Error". $e->getMessage();
		}
	}

	//function insert ke mastermhs_tmp_new
	public function insert_tmp_new($data){
		try{
			$this->db->insert('mastermhs_tmp_new', $data);
			return true;
		}catch(Exception $e){
			echo "System Error". $e->getMessage();
		}
	}

	//function getKolom
	public function getKolom($id_fakultas, $table){
		$this->db->where('id_fakultas', $id_fakultas);
		return $this->db->get($table)->row();
	}

	//function ganti password
	public function edit_data_jadwal($data){
		return $this->db->update('jadwal', $data);
	}

	//fungsi insert data mahasiswa manual
	public function insert_manual($data){
		try{
			$this->db->insert('mastermhs_new', $data);
			return true;
		}catch(Exception $e){
			echo "System Error". $e->getMessage();
		}
	}

	//fungsi getTabel byJurusan
	public function viewByJurusan($id_fakultas){
		$this->db->where('id_fakultas', $id_fakultas);
		$res = $this->db->get('jurusan')->result();
		return $res;
	}

	//function hapus data utama
	public function delete($id){
		$query = $this->db->query("DELETE FROM master_utama WHERE sha1(md5(sha1(md5(sha1(id)))))='$id'");
		return $query;
	}

	//function hapus data mahasiswa dari table tmp_new
	public function hapus($no_pendaftaran){
		$query = $this->db->query("DELETE FROM mastermhs_tmp_new WHERE sha1(md5(sha1(md5(sha1(no_pendaftaran)))))='$no_pendaftaran'");
		return $query;
	}

	//function ganti lulus jadi tidak lulus
	public function hapus_lulus($no_pendaftaran){
		$query = $this->db->query("UPDATE mastermhs_new SET getLulus = 'TIDAK LULUS' WHERE sha1(md5(sha1(md5(sha1(no_pendaftaran))))) = '$no_pendaftaran'");
		return $query;
	}

	//function view data kuota
	public function view_kuota(){
		return $this->db->get('kuota')->result();
	}

	//function update kuota
	public function update_kuota($id_fakultas, $kuota){
		$query = $this->db->query("UPDATE kuota SET kuota = '$kuota' WHERE id_fakultas = '$id_fakultas'");

		return $query;
	}

	//function update data kuota semua
	public function update_kuota_all($data){
		return $this->db->update('kuota', $data);
	}

	//function get table mastermhsnew ASC no pendaftaran
	public function getTable($ambil_th2){
		$res = $this->db->query("SELECT * FROM mastermhs_new WHERE reg > 0 and tahun = '$ambil_th2'");
		return $res->result();
	}
	
	public function getTable2($year){
		$res = $this->db->query("SELECT * FROM mastermhs_new WHERE reg > 0 and tahun = '$year'");
		return $res->result();
	}

	//function get table file pdf
	public function getTable_pdf($no_pendaftaran){
		$res = $this->db->query("SELECT no_pendaftaran, upload_foto_rumah_depan, upload_foto_rumah_kiri, upload_foto_rumah_kanan, upload_foto_pbb, upload_foto_rek_listrik FROM mastermhs_new WHERE no_pendaftaran='$no_pendaftaran'");
		return $res->result();
	}

	//function getDataMhs
	public function getData_mhs($no_pendaftaran){
		return $this->db->get_where('mastermhs_new', array('sha1(md5(sha1(md5(sha1(no_pendaftaran)))))' => $no_pendaftaran))->result();
	}

		//public function getWhere
	public function getWhere($no_pendaftaran){
		$res = $this->db->get_where('mastermhs_new', array('no_pendaftaran' => $no_pendaftaran));
		return $res->result();
	}

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

	//fungsi get table master_utama
	public function master_utama(){
		return $this->db->get('master_utama')->result();
	}

	//fungsi upload file excel
	public function upload_file($filename){
		$this->load->library('upload');

		$config['upload_path'] = './assets/data_excel/';
		$config['allowed_types'] = 'xlsx';
		$config['max_size'] = '2048';
		$config['overwrite'] = true;
		$config['file_name'] = $filename;

		$this->upload->initialize($config);
		if($this->upload->do_upload('file')){
			$return = array(
				'result' => 'success',
				'file' => $this->upload->data(),
				'error' => ''
			);
			return $return;
		}else{
			$return = array(
				'result' => 'failed',
				'file' => '',
				'error' => $this->upload->display_errors()
			);
			return $return;
		}
	}

	//fungsi insert multi batch
	public function insert_multiple($data){
		$this->db->insert_batch('mastermhs_new', $data);
	}

	//fungsi get data admin/kepala
	public function get_user(){
		return $this->db->get('master_utama');
	}

	//fungsi insert admin/kepala pimpinan
	public function insert_utama($data){
		try{
			$this->db->insert('master_utama', $data);
			return $this->db->insert_id();
		}catch(Exception $e){
			echo "System Error". $e->getMessage();
		}
	}

	//function change active status
	public function getChange_active($key){
		$data = array(
			'status_active' => 1
		);
		$this->db->where('md5(md5(md5(md5(md5(id)))))', $key);
		$this->db->update('master_utama', $data);

		return true;
	}

	//function tampil jml data peserta
	public function jml_peserta($ambil_th){
		$jml_peserta= $this->db->query("SELECT * FROM mastermhs_new where tahun= '$ambil_th'")->num_rows();
		return $jml_peserta;
	}

	public function jml_lulus($ambil_th){
		$jml_lulus= $this->db->query("SELECT * FROM mastermhs_new where getLulus='LULUS' and tahun= '$ambil_th' and reg=2");
		return $jml_lulus->num_rows();
	}
	
	public function jml_lulus2($ambil_th){
		$jml_lulus= $this->db->query("SELECT * FROM mastermhs_new where getLulus='LULUS' and tahun= '$ambil_th' and reg=3");
		return $jml_lulus->num_rows();
	}

	public function jml_tlulus($ambil_th){
		$jml_tlulus= $this->db->query("SELECT * FROM mastermhs_new where getLulus='TIDAK LULUS' and tahun= '$ambil_th'");
		return $jml_tlulus->num_rows();
	}

	public function jml_verifikasi($ambil_th){
		$jml_ver= $this->db->query("SELECT * FROM mastermhs_new where reg= '2' and tahun= '$ambil_th'");
		return $jml_ver->num_rows();
	}
	
	public function jml_pendaftar($ambil_th){
	    $jml_pendaf = $this->db->query("SELECT * FROM  mastermhs_new where reg >'0' and tahun= '$ambil_th'");
	    return $jml_pendaf->num_rows();
	}
	
	public function jml_pending($ambil_th){
	    $jml_pending = $this->db->query("SELECT * FROM  mastermhs_new where reg ='2' and getLulus = 'PENDING' and tahun= '$ambil_th'");
	    return $jml_pending->num_rows();
	}
	//end function tampil jml data peserta

	//function get grafik 
	public function get_gf1(){
	    $tahun = date('Y');
		$f1= $this->db->query("SELECT * FROM mastermhs_new where fakultas=10 and reg>0 and tahun = '$tahun'");
		return $f1->num_rows();
	}

	public function get_gf2(){
	    $tahun = date('Y');
		$f2= $this->db->query("SELECT * FROM mastermhs_new where fakultas=20 and reg>0 and tahun = '$tahun'");
		return $f2->num_rows();
	}

	public function get_gf3(){
	    $tahun = date('Y');
		$f3= $this->db->query("SELECT * FROM mastermhs_new where fakultas=30 and reg>0 and tahun = '$tahun'");
		return $f3->num_rows();
	}

	public function get_gf4(){
	    $tahun = date('Y');
		$f4= $this->db->query("SELECT * FROM mastermhs_new where fakultas=40 and reg>0 and tahun = '$tahun'");
		return $f4->num_rows();
	}

	public function get_gf5(){
	    $tahun = date('Y');
		$f5= $this->db->query("SELECT * FROM mastermhs_new where fakultas=50 and reg>0 and tahun = '$tahun'");
		return $f5->num_rows();
	}

	public function get_gf6(){
	    $tahun = date('Y');
		$f6= $this->db->query("SELECT * FROM mastermhs_new where fakultas=60 and reg>0 and tahun = '$tahun'");
		return $f6->num_rows();
	}

	public function get_gf7(){
	    $tahun = date('Y');
		$f7= $this->db->query("SELECT * FROM mastermhs_new where fakultas=70 and reg>0 and tahun = '$tahun'");
		return $f7->num_rows();
	}

	public function get_gf8(){
	    $tahun = date('Y');
		$f8= $this->db->query("SELECT * FROM mastermhs_new where fakultas=80 and reg>0 and tahun = '$tahun'");
		return $f8->num_rows();
	}
	
	public function get_gf9(){
	    $tahun = date('Y');
		$f8= $this->db->query("SELECT * FROM mastermhs_new where fakultas=9 and reg>0 and tahun = '$tahun'");
		return $f8->num_rows();
	}
	//end function get grafik

	public function report1($where1,$where2){
		$year = date('Y');
		$report1 = $this->db->query("SELECT * FROM mastermhs_new where almarhum = '$where1' and almarhumah = '$where2' and reg > 0 and tahun = '$year'");
		return $report1->result();
	}

	public function report2($para,$where){
		$year = date('Y');
		$report2 = $this->db->query("SELECT * FROM mastermhs_new where $para = '$where' and reg > 0 and tahun = '$year'");
		return $report2->result();
	}

	//fungsi getTabel byPropinsi
	public function viewByPropinsi($id_provinsi){
		$this->db->where('id_propinsi', $id_provinsi);
		$res = $this->db->get('kota')->result();
		return $res;
	}

	public function report4($provinsi,$kota){
		$year = date('Y');
		$report4 = $this->db->query("SELECT * FROM mastermhs_new where asal_provinsi LIKE '%$provinsi%' and asal_kab_kota LIKE '%$kota%' and reg > 0 and tahun = '$year'");
		return $report4->result();
	}

	//function sort monitoring
	public function sort_peserta($tahun){
		$query = $this->db->query("SELECT * FROM mastermhs_new where skor >= 60.000 and reg = 2 and tahun = '$tahun' ORDER by skor desc");
		return $query->result();
	}
	
	public function sort_peserta2($tahun){
	    $query = $this->db->query("SELECT * FROM mastermhs_new where skor < 60.000 and reg = 2 and tahun = '$tahun' ORDER by skor desc");
		return $query->result();
	}
	//function sort monitoring

	public function view_tmp($tahun){
		$report2 = $this->db->query("SELECT * FROM mastermhs_new WHERE reg=2 and getLulus='LULUS' and tahun = '$tahun' ");
		return $report2->result();
	}

	public function view_tmp_t2($tahun){
		$report2 = $this->db->query("SELECT * FROM mastermhs_new WHERE reg=3 and getLulus='LULUS' and tahun = '$tahun' ");
		return $report2->result();
	}

	public function view_tmp2($no_pendaftaran){
		$report2 = $this->db->query("SELECT * FROM mastermhs_new WHERE no_pendaftaran='$no_pendaftaran' AND getLulus='LULUS'");
		return $report2->num_rows();
	}

	public function cari_tmp($no_pendaftaran){
		$query =  $this->db->query("SELECT * FROM mastermhs_new WHERE sha1(md5(sha1(md5(sha1(no_pendaftaran))))) ='$no_pendaftaran'");
		return $query->result();
	}

	//function limit kuota
	public function panggil_kuota($fakultas){
		$query = $this->db->query("SELECT * FROM kuota where id_fakultas = '$fakultas'");
		return $query->row();
	}
	//end function limit kuota

	//fungsi update kuota
	public function tambah_kuota_tmp($fakultas){
		$query = $this->db->query("UPDATE kuota SET kuota = kuota+1 WHERE id_fakultas = '$fakultas'");
		return $query;
	}

	public function kurang_kuota($fakultas){
		$query = $this->db->query("UPDATE kuota SET kuota = kuota-1 WHERE id_fakultas = '$fakultas'");
		return $query;
	}
	//end update kuota
    
    //function ganti getLulus
	public function ganti_lulus($no_pendaftaran){
		$query = $this->db->query("UPDATE mastermhs_new SET reg=2, getLulus = 'LULUS' WHERE no_pendaftaran='$no_pendaftaran'");
		return $query;
	}
	
	//function ganti getLulus
	public function ganti_lulus_form($no_pendaftaran){
		$query = $this->db->query("UPDATE mastermhs_new SET getLulus = 'LULUS' WHERE no_pendaftaran='$no_pendaftaran'");
		return $query->result_array();
	}
	
	public function ganti_tlulus($no_pendaftaran){
	    $query = $this->db->query("UPDATE mastermhs_new SET getLulus = 'TIDAK LULUS' WHERE no_pendaftaran='$no_pendaftaran'");
		return $query;
	}
	
	public function ganti_tlulus_import(){
       $tahun = date('Y');
	    $query = $this->db->query("UPDATE mastermhs_new SET getLulus = 'TIDAK LULUS' WHERE reg=2 AND getLulus='PENDING'  AND tahun='.$tahun.'");
		return $query;
	}
	
	public function ganti_lulus_t2($no_pendaftaran){
	    $query = $this->db->query("UPDATE mastermhs_new SET reg=3, getLulus = 'LULUS' WHERE no_pendaftaran='$no_pendaftaran'");
	    return $query;
	}
	
	public function ganti_tlulus_t2(){
	    $query = $this->db->query("UPDATE mastermhs_new SET prioritas = 1 WHERE reg=2 AND getLulus='LULUS'");
	    return $query;
	}
	//end function ganti getLulus

	public function insert_tmp($no_pendaftaran){
		$query = $this->db->query("INSERT INTO mastermhs_tmp_new SELECT * FROM mastermhs_new where no_pendaftaran='$no_pendaftaran'");
		return $query;
	}

	//fungsi getWhere kolom default
	public function getKolom_default($no_pendaftaran){
		$this->db->where('no_pendaftaran', $no_pendaftaran);
		return $this->db->get('mastermhs_new')->row();
	}
	//end fungsi getWhere kolom default

	//fungsi getScoring
	public function getScoring_bersih($no_pendaftaran){
		$query = $this->db->query("UPDATE mastermhs_new SET skor = ROUND( (((((penghasilan_ayah+penghasilan_ibu)/2)+pendidikan_ayah+pekerjaan_ayah+jumlah_saudara_kandung_tang_ortu)*50)/16) + (((rerata_nilai_un+rerata_nilai_raport+prestasi_akademik+prestasi_non_akademik)*25)/16) + (((luas_rumah+pbb+rek_listrik_per_bulan)*25)/12),2) WHERE no_pendaftaran = '$no_pendaftaran'");

		return $query;
	}

	public function getScoring_ayah($no_pendaftaran){
		$query = $this->db->query("UPDATE mastermhs_new SET skor = ROUND(almarhum + (((rerata_nilai_un+rerata_nilai_raport+prestasi_akademik+prestasi_non_akademik)*25)/16) + (((luas_rumah+pbb+rek_listrik_per_bulan)*25)/12),2) WHERE no_pendaftaran = '$no_pendaftaran'");

		return $query;
	}

	public function getScoring_ibu($no_pendaftaran){
		$query = $this->db->query("UPDATE mastermhs_new SET skor = ROUND(almarhumah + (((rerata_nilai_un+rerata_nilai_raport+prestasi_akademik+prestasi_non_akademik)*25)/16) + (((luas_rumah+pbb+rek_listrik_per_bulan)*25)/12),2) WHERE no_pendaftaran = '$no_pendaftaran'");

		return $query;
	}

	public function getScoring_kotor($no_pendaftaran){
		$query = $this->db->query("UPDATE mastermhs_new SET skor = ROUND( (almarhum+almarhumah) + (((rerata_nilai_un+rerata_nilai_raport+prestasi_akademik+prestasi_non_akademik)*25)/16) + (((luas_rumah+pbb+rek_listrik_per_bulan)*25)/12),2) WHERE no_pendaftaran = '$no_pendaftaran'");

		return $query;
	}
		//end fungsi getScoring
		
	public function getbyfakultas($fk){
		$query = $this->db->query("SELECT * from mastermhs_new WHERE fakultas = '$fk'");
		return $query->result();
	}
	
	public function getbyjurusan($j){
		$query = $this->db->query("SELECT * from mastermhs_new WHERE jurusan = '$j'");
		return $query->result();
	}
	
	//function getTahun_lulus
	public function getTahun_lulus(){
		$query = $this->db->get('tahun_lulus');
		return $query;
	}

	//function insert tahun lulus
	public function insert_tahun_lulus($data){
		try{
			$this->db->insert('tahun_lulus', $data);
			return true;
		}catch(Exception $e){
			echo "System Error". $e->getMessage();
		}
	}

	//delete tahun lulus
	public function delete_tahun_lulus($id_tahun){
		$query = $this->db->query("DELETE FROM tahun_lulus WHERE sha1(md5(sha1(md5(sha1(id_tahun)))))='$id_tahun'");
		return $query;
	}
	
	
	public function report3($where){
		$report3 = $this->db->query("SELECT * from mastermhs_new where tahun='$where' and reg > 0");
		return $report3->result();
	}
	
	public function cek_database_mhs(){
		$cek = $this->db->get('mastermhs_new');
		return $cek->num_rows();
	}
	
	//function activity admin
	public function activity_admin($id,$nama,$ip,$ket){
	   return $this->db->query("Insert into master_utama_activity SET id_admin = '$id', nama_admin = '$nama' , keterangan = '$ket' , ip_address = '$ip', date_create = NOW()");
	}
	//end function activity admin

	//function hapus data mahasiswa dari table mastermhs_new permanen
	public function hapus_permanen_mhs($no_pendaftaran){
		$query = $this->db->query("DELETE FROM mastermhs_new WHERE sha1(md5(sha1(md5(sha1(no_pendaftaran)))))='$no_pendaftaran'");
		return $query;
	}

	//function hapus data mahasiswa dari table tmp_new permanen
	public function hapus_permanen_tmp($no_pendaftaran){
		$query = $this->db->query("DELETE FROM mastermhs_tmp_new WHERE sha1(md5(sha1(md5(sha1(no_pendaftaran)))))='$no_pendaftaran'");
		return $query;
	}

	//function get data peserta verifikasi
	public function get_verifikasi($ambil_th2){
		$res = $this->db->query("SELECT * FROM mastermhs_new WHERE reg = 2 and tahun = '$ambil_th2'");
		return $res->result();
	}
	
	//function cari data mastermhs_new
	public function getMhs($no_pendaftaran, $tahun){
	   $query =  $this->db->query("SELECT * FROM mastermhs_new WHERE no_pendaftaran = '$no_pendaftaran' AND tahun = '$tahun'");
	   return $query->num_rows();
	}
	
	//function insert ke mastermhs_new
	public function insert_new($data){
		$this->db->insert('mastermhs_new', $data);
	}
	
	//fungsi getDocument
	public function getDocument($id_document){
		$this->db->where('id_document', $id_document);
		return $this->db->get('document')->row();
	}
	
	//fungsi getData_document
	public function getData_document(){
		$query = $this->db->query("SELECT * FROM document WHERE id_document=1");
		return $query;
	}
	
	//fungsi getData_document
	public function getData_document2(){
		$query = $this->db->query("SELECT * FROM document WHERE id_document=2");
		return $query;
	}
	
	//function edit document
	public function edit_document($id_document, $data){
		try{
			$this->db->where('id_document', $id_document)->update('document', $data);
			return true;
		}catch(Exception $e){
			echo "System Error". $e->getMessage();
		}
	}
	
	//function get data peserta pending
	public function get_pending($ambil_th2){
		$res = $this->db->query("SELECT * FROM  mastermhs_new where reg ='2' and getLulus = 'PENDING' and tahun= '$ambil_th2'");
		return $res->result();
	}
	
	//function getperFAkultas
	public function report_per_fakultas($fakultas){
		$year = date('Y');
		$report_perFakultas = $this->db->query("SELECT * FROM mastermhs_new where fakultas LIKE '%$fakultas%' and reg > 0 and tahun = '$year'");
		return $report_perFakultas->result();
	}
	
	//function getperJurusan
	public function report_per_jurusan($jurusan){
		$year = date('Y');
		$report_perJurusan = $this->db->query("SELECT * FROM mastermhs_new where jurusan LIKE '%$jurusan%' and reg > 0 and tahun = '$year'");
		return $report_perJurusan->result();
	}
	
	//function getData Per-Kecamatan
	public function getData_kecamatan($kecamatan){
		$report3 = $this->db->query("SELECT * from mastermhs_new WHERE kecamatan_2 = '$kecamatan' and reg > 0");
		return $report3->result();
	}
	
	//function getData Per-Kelurahan
	public function getData_kelurahan($kelurahan){
		$report3 = $this->db->query("SELECT * from mastermhs_new WHERE kelurahan_2 = '$kelurahan' and reg > 0");
		return $report3->result();
	}
	
	//function view data mhs asc
	public function getAscData_kecamatan(){
	    $query = $this->db->query("SELECT * FROM mastermhs_new WHERE reg > 0 and tahun = NOW() ORDER BY kecamatan_2 DESC");
	    return $query->result();
	}
	
	//function view data mhs asc
	public function getAscData_kelurahan(){
	    $query = $this->db->query("SELECT * FROM mastermhs_new WHERE reg > 0 and tahun = NOW() ORDER BY kelurahan_2 DESC");
	    return $query->result();
	}

	public function edit_sr($control_id, $data){
		try{
			$this->db->where('control_id', $control_id)->update('mastermhs_control_report', $data);
			return true;
		}catch(Exception $e){
			echo "System Error". $e->getMessage();
		}
	}

	public function getTable_default($table){
		return $this->db->get($table);
	}

	public function cek_sudah_berkas(){
		$tahun = date('Y');
		$query = $this->db->query("SELECT * FROM mastermhs_new WHERE pemberkasan = 1 AND tahun = $tahun AND reg = 2");
		return $query;
	}

	public function cek_belum_berkas(){
		$tahun = date('Y');
		$query = $this->db->query("SELECT * FROM mastermhs_new WHERE pemberkasan = 0 AND tahun = $tahun AND reg = 2");
		return $query;
	}
	
	public function report_reg2($para,$where){
		$year = date('Y');
		$report2 = $this->db->query("SELECT * FROM mastermhs_new where $para = '$where' and reg = 2 and tahun = '$year'");
		return $report2->result();
	}
}?>
