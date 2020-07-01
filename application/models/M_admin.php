<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Admin extends CI_Model{
	//function report bidikmisi
	public function getTable_where_report($nim){
		$query = $this->db->get_where('mastermhs_report', array('nim' => $nim));
		return $query;
	}

	public function edit_report($nim, $data){
		try{
			$this->db->where('nim', $nim)->update('mastermhs_report', $data);
			return true;
		}catch(Exception $e){
			echo "System Error". $e->getMessage();
		}
	}

	function json_data_report(){
    	$token = sha1(md5(sha1(md5(sha1("jjhdDjewi1092389!@#")))));
    	$token2 = sha1(md5(sha1(md5(sha1("hyytiie21399$39!jjsdf")))));
    	
    	$this->datatables->select('nim,nama_mahasiswa,jenis_kelamin,angkatan');
    	$this->datatables->from('mastermhs_report');
    	$this->datatables->add_column('view','<a class="btn btn-info" href="data_mhs_report/$1/'.$token.'/'.$token2.'" ><span class="glyphicon glyphicon-user"></span> View</a> <a class="btn btn-danger" onclick="return hapus_data()" href="delete_mhs/$1/'.$token.'/'.$token2.'"><span class="glyphicon glyphicon-erase"></span> Delete</a>','nim');
    	return $this->datatables->generate();
    }

	public function getRow_report($nim){
		$this->db->where('nim', $nim);
		return $this->db->get('mastermhs_report')->row();
	}

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

	public function get_gf_report1($nim){
		$ip_k1 = $this->db->query("SELECT ip_k1 FROM mastermhs_report WHERE nim='$nim'");
		return $ip_k1->result();
	}

	public function get_gf_report2($nim){
		$ip_k2 = $this->db->query("SELECT ip_k2 FROM mastermhs_report WHERE nim='$nim'");
		return $ip_k2->result();
	}

	public function get_gf_report3($nim){
		$ip_k3 = $this->db->query("SELECT ip_k3 FROM mastermhs_report WHERE nim='$nim'");
		return $ip_k3->result();
	}

	public function get_gf_report4($nim){
		$ip_k4 = $this->db->query("SELECT ip_k4 FROM mastermhs_report WHERE nim='$nim'");
		return $ip_k4->result();
	}

	public function get_gf_report5($nim){
		$ip_k5 = $this->db->query("SELECT ip_k5 FROM mastermhs_report WHERE nim='$nim'");
		return $ip_k5->result();
	}

	public function get_gf_report6($nim){
		$ip_k6 = $this->db->query("SELECT ip_k6 FROM mastermhs_report WHERE nim='$nim'");
		return $ip_k6->result();
	}

	public function get_gf_report7($nim){
		$ip_k7 = $this->db->query("SELECT ip_k7 FROM mastermhs_report WHERE nim='$nim'");
		return $ip_k7->result();
	}

	public function get_gf_report8($nim){
		$ip_k8 = $this->db->query("SELECT ip_k8 FROM mastermhs_report WHERE nim='$nim'");
		return $ip_k8->result();
	}

	//Ushuluddin
	public function get_avgu_gf1(){
		$ip_k1 = $this->db->query("SELECT ROUND(AVG(ip_k1),2) AS ip_k1 FROM mastermhs_report where fakultas='10'");
		return $ip_k1->result();
	}

	public function get_avgu_gf2(){
		$ip_k2 = $this->db->query("SELECT ROUND(AVG(ip_k2),2) AS ip_k2 FROM mastermhs_report where fakultas='10'");
		return $ip_k2->result();
	}

	public function get_avgu_gf3(){
		$ip_k3 = $this->db->query("SELECT ROUND(AVG(ip_k3),2) AS ip_k3 FROM mastermhs_report where fakultas='10'");
		return $ip_k3->result();
	}

	public function get_avgu_gf4(){
		$ip_k4 = $this->db->query("SELECT ROUND(AVG(ip_k4),2) AS ip_k4 FROM mastermhs_report where fakultas='10'");
		return $ip_k4->result();
	}

	public function get_avgu_gf5(){
		$ip_k5 = $this->db->query("SELECT ROUND(AVG(ip_k5),2) AS ip_k5 FROM mastermhs_report where fakultas='10'");
		return $ip_k5->result();
	}

	public function get_avgu_gf6(){
		$ip_k6 = $this->db->query("SELECT ROUND(AVG(ip_k6),2) AS ip_k6 FROM mastermhs_report where fakultas='10'");
		return $ip_k6->result();
	}

	public function get_avgu_gf7(){
		$ip_k7 = $this->db->query("SELECT ROUND(AVG(ip_k7),2) AS ip_k7 FROM mastermhs_report where fakultas='10'");
		return $ip_k7->result();
	}

	public function get_avgu_gf8(){
		$ip_k8 = $this->db->query("SELECT ROUND(AVG(ip_k8),2) AS ip_k8 FROM mastermhs_report where fakultas='10'");
		return $ip_k8->result();
	}
	//End Ushuluddin

	//Tarbiyah dan keguruan
	public function get_avgt_gf1(){
		$ip_k1 = $this->db->query("SELECT ROUND(AVG(ip_k1),2) AS ip_k1 FROM mastermhs_report where fakultas='20'");
		return $ip_k1->result();
	}

	public function get_avgt_gf2(){
		$ip_k2 = $this->db->query("SELECT ROUND(AVG(ip_k2),2) AS ip_k2 FROM mastermhs_report where fakultas='20'");
		return $ip_k2->result();
	}

	public function get_avgt_gf3(){
		$ip_k3 = $this->db->query("SELECT ROUND(AVG(ip_k3),2) AS ip_k3 FROM mastermhs_report where fakultas='20'");
		return $ip_k3->result();
	}

	public function get_avgt_gf4(){
		$ip_k4 = $this->db->query("SELECT ROUND(AVG(ip_k4),2) AS ip_k4 FROM mastermhs_report where fakultas='20'");
		return $ip_k4->result();
	}

	public function get_avgt_gf5(){
		$ip_k5 = $this->db->query("SELECT ROUND(AVG(ip_k5),2) AS ip_k5 FROM mastermhs_report where fakultas='20'");
		return $ip_k5->result();
	}

	public function get_avgt_gf6(){
		$ip_k6 = $this->db->query("SELECT ROUND(AVG(ip_k6),2) AS ip_k6 FROM mastermhs_report where fakultas='20'");
		return $ip_k6->result();
	}

	public function get_avgt_gf7(){
		$ip_k7 = $this->db->query("SELECT ROUND(AVG(ip_k7),2) AS ip_k7 FROM mastermhs_report where fakultas='20'");
		return $ip_k7->result();
	}

	public function get_avgt_gf8(){
		$ip_k8 = $this->db->query("SELECT ROUND(AVG(ip_k8),2) AS ip_k8 FROM mastermhs_report where fakultas='30'");
		return $ip_k8->result();
	}
	//End Tarbiyah dan keguruan

	//Syarkum
	public function get_avgs_gf1(){
		$ip_k1 = $this->db->query("SELECT ROUND(AVG(ip_k1),2) AS ip_k1 FROM mastermhs_report where fakultas='30'");
		return $ip_k1->result();
	}

	public function get_avgs_gf2(){
		$ip_k2 = $this->db->query("SELECT ROUND(AVG(ip_k2),2) AS ip_k2 FROM mastermhs_report where fakultas='30'");
		return $ip_k2->result();
	}

	public function get_avgs_gf3(){
		$ip_k3 = $this->db->query("SELECT ROUND(AVG(ip_k3),2) AS ip_k3 FROM mastermhs_report where fakultas='30'");
		return $ip_k3->result();
	}

	public function get_avgs_gf4(){
		$ip_k4 = $this->db->query("SELECT ROUND(AVG(ip_k4),2) AS ip_k4 FROM mastermhs_report where fakultas='30'");
		return $ip_k4->result();
	}

	public function get_avgs_gf5(){
		$ip_k5 = $this->db->query("SELECT ROUND(AVG(ip_k5),2) AS ip_k5 FROM mastermhs_report where fakultas='30'");
		return $ip_k5->result();
	}

	public function get_avgs_gf6(){
		$ip_k6 = $this->db->query("SELECT ROUND(AVG(ip_k6),2) AS ip_k6 FROM mastermhs_report where fakultas='30'");
		return $ip_k6->result();
	}

	public function get_avgs_gf7(){
		$ip_k7 = $this->db->query("SELECT ROUND(AVG(ip_k7),2) AS ip_k7 FROM mastermhs_report where fakultas='30'");
		return $ip_k7->result();
	}

	public function get_avgs_gf8(){
		$ip_k8 = $this->db->query("SELECT ROUND(AVG(ip_k8),2) AS ip_k8 FROM mastermhs_report where fakultas='30'");
		return $ip_k8->result();
	}
	//End Syarkum

	//Dakom
	public function get_avgd_gf1(){
		$ip_k1 = $this->db->query("SELECT ROUND(AVG(ip_k1),2) AS ip_k1 FROM mastermhs_report where fakultas='40'");
		return $ip_k1->result();
	}

	public function get_avgd_gf2(){
		$ip_k2 = $this->db->query("SELECT ROUND(AVG(ip_k2),2) AS ip_k2 FROM mastermhs_report where fakultas='40'");
		return $ip_k2->result();
	}

	public function get_avgd_gf3(){
		$ip_k3 = $this->db->query("SELECT ROUND(AVG(ip_k3),2) AS ip_k3 FROM mastermhs_report where fakultas='40'");
		return $ip_k3->result();
	}

	public function get_avgd_gf4(){
		$ip_k4 = $this->db->query("SELECT ROUND(AVG(ip_k4),2) AS ip_k4 FROM mastermhs_report where fakultas='40'");
		return $ip_k4->result();
	}

	public function get_avgd_gf5(){
		$ip_k5 = $this->db->query("SELECT ROUND(AVG(ip_k5),2) AS ip_k5 FROM mastermhs_report where fakultas='40'");
		return $ip_k5->result();
	}

	public function get_avgd_gf6(){
		$ip_k6 = $this->db->query("SELECT ROUND(AVG(ip_k6),2) AS ip_k6 FROM mastermhs_report where fakultas='40'");
		return $ip_k6->result();
	}

	public function get_avgd_gf7(){
		$ip_k7 = $this->db->query("SELECT ROUND(AVG(ip_k7),2) AS ip_k7 FROM mastermhs_report where fakultas='40'");
		return $ip_k7->result();
	}

	public function get_avgd_gf8(){
		$ip_k8 = $this->db->query("SELECT ROUND(AVG(ip_k8),2) AS ip_k8 FROM mastermhs_report where fakultas='50'");
		return $ip_k8->result();
	}
	//End Dakom

	//Adhum
	public function get_avga_gf1(){
		$ip_k1 = $this->db->query("SELECT ROUND(AVG(ip_k1),2) AS ip_k1 FROM mastermhs_report where fakultas='50'");
		return $ip_k1->result();
	}

	public function get_avga_gf2(){
		$ip_k2 = $this->db->query("SELECT ROUND(AVG(ip_k2),2) AS ip_k2 FROM mastermhs_report where fakultas='50'");
		return $ip_k2->result();
	}

	public function get_avga_gf3(){
		$ip_k3 = $this->db->query("SELECT ROUND(AVG(ip_k3),2) AS ip_k3 FROM mastermhs_report where fakultas='50'");
		return $ip_k3->result();
	}

	public function get_avga_gf4(){
		$ip_k4 = $this->db->query("SELECT ROUND(AVG(ip_k4),2) AS ip_k4 FROM mastermhs_report where fakultas='50'");
		return $ip_k4->result();
	}

	public function get_avga_gf5(){
		$ip_k5 = $this->db->query("SELECT ROUND(AVG(ip_k5),2) AS ip_k5 FROM mastermhs_report where fakultas='50'");
		return $ip_k5->result();
	}

	public function get_avga_gf6(){
		$ip_k6 = $this->db->query("SELECT ROUND(AVG(ip_k6),2) AS ip_k6 FROM mastermhs_report where fakultas='50'");
		return $ip_k6->result();
	}

	public function get_avga_gf7(){
		$ip_k7 = $this->db->query("SELECT ROUND(AVG(ip_k7),2) AS ip_k7 FROM mastermhs_report where fakultas='50'");
		return $ip_k7->result();
	}

	public function get_avga_gf8(){
		$ip_k8 = $this->db->query("SELECT ROUND(AVG(ip_k8),2) AS ip_k8 FROM mastermhs_report where fakultas='50'");
		return $ip_k8->result();
	}
	//End Adhum

	//Psikologi
	public function get_avgp_gf1(){
		$ip_k1 = $this->db->query("SELECT ROUND(AVG(ip_k1),2) AS ip_k1 FROM mastermhs_report where fakultas='60'");
		return $ip_k1->result();
	}

	public function get_avgp_gf2(){
		$ip_k2 = $this->db->query("SELECT ROUND(AVG(ip_k2),2) AS ip_k2 FROM mastermhs_report where fakultas='60'");
		return $ip_k2->result();
	}

	public function get_avgp_gf3(){
		$ip_k3 = $this->db->query("SELECT ROUND(AVG(ip_k3),2) AS ip_k3 FROM mastermhs_report where fakultas='60'");
		return $ip_k3->result();
	}

	public function get_avgp_gf4(){
		$ip_k4 = $this->db->query("SELECT ROUND(AVG(ip_k4),2) AS ip_k4 FROM mastermhs_report where fakultas='60'");
		return $ip_k4->result();
	}

	public function get_avgp_gf5(){
		$ip_k5 = $this->db->query("SELECT ROUND(AVG(ip_k5),2) AS ip_k5 FROM mastermhs_report where fakultas='60'");
		return $ip_k5->result();
	}

	public function get_avgp_gf6(){
		$ip_k6 = $this->db->query("SELECT ROUND(AVG(ip_k6),2) AS ip_k6 FROM mastermhs_report where fakultas='60'");
		return $ip_k6->result();
	}

	public function get_avgp_gf7(){
		$ip_k7 = $this->db->query("SELECT ROUND(AVG(ip_k7),2) AS ip_k7 FROM mastermhs_report where fakultas='60'");
		return $ip_k7->result();
	}

	public function get_avgp_gf8(){
		$ip_k8 = $this->db->query("SELECT ROUND(AVG(ip_k8),2) AS ip_k8 FROM mastermhs_report where fakultas='60'");
		return $ip_k8->result();
	}
	//End Psikologi

	//Saintek
	public function get_avgsa_gf1(){
		$ip_k1 = $this->db->query("SELECT ROUND(AVG(ip_k1),2) AS ip_k1 FROM mastermhs_report where fakultas='70'");
		return $ip_k1->result();
	}

	public function get_avgsa_gf2(){
		$ip_k2 = $this->db->query("SELECT ROUND(AVG(ip_k2),2) AS ip_k2 FROM mastermhs_report where fakultas='70'");
		return $ip_k2->result();
	}

	public function get_avgsa_gf3(){
		$ip_k3 = $this->db->query("SELECT ROUND(AVG(ip_k3),2) AS ip_k3 FROM mastermhs_report where fakultas='70'");
		return $ip_k3->result();
	}

	public function get_avgsa_gf4(){
		$ip_k4 = $this->db->query("SELECT ROUND(AVG(ip_k4),2) AS ip_k4 FROM mastermhs_report where fakultas='70'");
		return $ip_k4->result();
	}

	public function get_avgsa_gf5(){
		$ip_k5 = $this->db->query("SELECT ROUND(AVG(ip_k5),2) AS ip_k5 FROM mastermhs_report where fakultas='70'");
		return $ip_k5->result();
	}

	public function get_avgsa_gf6(){
		$ip_k6 = $this->db->query("SELECT ROUND(AVG(ip_k6),2) AS ip_k6 FROM mastermhs_report where fakultas='70'");
		return $ip_k6->result();
	}

	public function get_avgsa_gf7(){
		$ip_k7 = $this->db->query("SELECT ROUND(AVG(ip_k7),2) AS ip_k7 FROM mastermhs_report where fakultas='70'");
		return $ip_k7->result();
	}

	public function get_avgsa_gf8(){
		$ip_k8 = $this->db->query("SELECT ROUND(AVG(ip_k8),2) AS ip_k8 FROM mastermhs_report where fakultas='70'");
		return $ip_k8->result();
	}
	//End Saintek

	//Fisip
	public function get_avgf_gf1(){
		$ip_k1 = $this->db->query("SELECT ROUND(AVG(ip_k1),2) AS ip_k1 FROM mastermhs_report where fakultas='80'");
		return $ip_k1->result();
	}

	public function get_avgf_gf2(){
		$ip_k2 = $this->db->query("SELECT ROUND(AVG(ip_k2),2) AS ip_k2 FROM mastermhs_report where fakultas='80'");
		return $ip_k2->result();
	}

	public function get_avgf_gf3(){
		$ip_k3 = $this->db->query("SELECT ROUND(AVG(ip_k3),2) AS ip_k3 FROM mastermhs_report where fakultas='80'");
		return $ip_k3->result();
	}

	public function get_avgf_gf4(){
		$ip_k4 = $this->db->query("SELECT ROUND(AVG(ip_k4),2) AS ip_k4 FROM mastermhs_report where fakultas='80'");
		return $ip_k4->result();
	}

	public function get_avgf_gf5(){
		$ip_k5 = $this->db->query("SELECT ROUND(AVG(ip_k5),2) AS ip_k5 FROM mastermhs_report where fakultas='80'");
		return $ip_k5->result();
	}

	public function get_avgf_gf6(){
		$ip_k6 = $this->db->query("SELECT ROUND(AVG(ip_k6),2) AS ip_k6 FROM mastermhs_report where fakultas='80'");
		return $ip_k6->result();
	}

	public function get_avgf_gf7(){
		$ip_k7 = $this->db->query("SELECT ROUND(AVG(ip_k7),2) AS ip_k7 FROM mastermhs_report where fakultas='80'");
		return $ip_k7->result();
	}

	public function get_avgf_gf8(){
		$ip_k8 = $this->db->query("SELECT ROUND(AVG(ip_k8),2) AS ip_k8 FROM mastermhs_report where fakultas='80'");
		return $ip_k8->result();
	}
	//End Fisip
	//end function report bidikmisi

	//function view data report bidikmisi
	public function getBidikmisi_report($param){
	    $query = $this->db->query("SELECT * FROM mastermhs_report WHERE angkatan = '$param' or fakultas = '$param' ORDER BY nim ASC");
	    return $query->result();
	}

	//function update skor
	public function updateSkor($data){
		$this->db->where('control_id', 1);
		return $this->db->update('mastermhs_control_report', $data);
	}

	//function getSkor database
	public function getSkor(){
		$this->db->where('control_id', 1);
		return $this->db->get('mastermhs_control_report');
	}
	
	//function sort peserta verifikasi
	public function get_verifikasi(){
	    $tahun = date('Y');
	    $query = $this->db->query("SELECT no_pendaftaran, getLulus FROM mastermhs_new WHERE reg = 2 AND tahun = '$tahun'");
	    return $query;
	}
	
	public function get_update_verifikasi($no_pendaftaran){
	    $query = $this->db->query("UPDATE mastermhs_new SET getLulus = 'PENDING' WHERE no_pendaftaran = '$no_pendaftaran'");
	    return $query;
	}
	
	public function set_pengumuman($id, $data){
	    return $this->db->update('mastermhs_control_report', $data, array('control_id' => $id));
	}
}