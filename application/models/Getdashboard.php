<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Getdashboard extends CI_Model {

    // query untuk card
    public function getJumlahSemua(){
		$data = $this->db->query("SELECT COUNT(pln_posisi_pelayan) AS jumlah FROM siemusik_pelayan");
		return $data->result();
	}

    public function getJumlahPemandu(){
		$data = $this->db->query("SELECT COUNT(pln_posisi_pelayan) AS jumlah FROM siemusik_pelayan WHERE pln_posisi_pelayan = 'PEMANDU'");
		return $data->result();
	}

    public function getJumlahPemusik(){
		$data = $this->db->query("SELECT COUNT(pln_posisi_pelayan) AS jumlah FROM siemusik_pelayan WHERE pln_posisi_pelayan = 'PEMUSIK'");
		return $data->result();
	}

    public function getJumlahOperator(){
		$data = $this->db->query("SELECT COUNT(pln_posisi_pelayan) AS jumlah FROM siemusik_pelayan WHERE pln_posisi_pelayan = 'OPERATOR' OR pln_is_operator = 'OPERATOR'");
		return $data->result();
	}

    // query untuk side bar
    //untuk semua
    public function getJumlahDataSemua(){
		$data = $this->db->query("SELECT COUNT(jwl_is_attend) AS jumlah FROM siemusik_jadwal");
		return $data->result();
	}
    public function getJumlahHadirSemua(){
		$data = $this->db->query("SELECT COUNT(jwl_is_attend) AS jumlah FROM siemusik_jadwal WHERE jwl_is_attend = 'HADIR'");
		return $data->result();
	}
    //untuk pemandu

    public function getJumlahJwlPemandu(){
		$data = $this->db->query("SELECT COUNT(jwl_is_attend) AS jumlah FROM siemusik_jadwal WHERE jwl_posisi = 'PEMANDU'");
		return $data->result();
	}

    public function getJumlahJwlHadirPemandu(){
		$data = $this->db->query("SELECT COUNT(jwl_is_attend) AS jumlah FROM siemusik_jadwal WHERE jwl_is_attend = 'HADIR' AND jwl_posisi = 'PEMANDU'");
		return $data->result();
	}
    //untuk pemusik
    public function getJumlahJwlPemusik(){
		$data = $this->db->query("SELECT COUNT(jwl_is_attend) AS jumlah FROM siemusik_jadwal WHERE jwl_posisi = 'PEMUSIK'");
		return $data->result();
	}

    public function getJumlahJwlHadirPemusik(){
		$data = $this->db->query("SELECT COUNT(jwl_is_attend) AS jumlah FROM siemusik_jadwal WHERE jwl_is_attend = 'HADIR' AND jwl_posisi = 'PEMUSIK'");
		return $data->result();
	}
    //untuk operator
    public function getJumlahJwlOperator(){
		$data = $this->db->query("SELECT COUNT(jwl_is_attend) AS jumlah FROM siemusik_jadwal WHERE jwl_posisi = 'OPERATOR'");
		return $data->result();
	}

    public function getJumlahJwlHadirOperator(){
		$data = $this->db->query("SELECT COUNT(jwl_is_attend) AS jumlah FROM siemusik_jadwal WHERE jwl_is_attend = 'HADIR' AND jwl_posisi = 'OPERATOR'");
		return $data->result();
	}

    public function getJumlahDigantikan(){
		$data = $this->db->query("SELECT COUNT(jwl_is_attend) AS jumlah FROM siemusik_jadwal WHERE jwl_is_attend = 'HADIR' AND jwl_posisi = 'DIGANTIKAN'");
		return $data->result();
	}




}