<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Insertjadwal extends CI_Model {

	public function insert($data){
		$insert = $this->db->insert_batch('siemusik_jadwal', $data);
		if($insert){
			return true;
		}
	}

    public function inserthistoryupload($data_users){

        $this->db->insert("history_jadwal",$data_users);

        if($this->db->affected_rows() > 0)
        {
			$this->db->query("DELETE from siemusik_jadwal WHERE jwl_nip_pelayan = '' AND jwl_nama = ''");
            return true;
        }
    }

	// public function hapusjadwalkosong(){
	// 	$data = $this->db->query("DELETE from siemusik_jadwal WHERE jwl_nip_pelayan = '' AND jwl_nama = '' AND jwl_posisi= '' ");
	// 	return $data->result();
	// }

	public function gethistoryuploadjadwal(){
		$data = $this->db->query("SELECT * from history_jadwal ORDER BY hjdw_timestamp DESC");
		return $data->result();
	}

    public function getjadwallengkap(){
		$data = $this->db->query("SELECT * FROM siemusik_jadwal ORDER BY jwl_tanggal ASC");
		return $data->result();
	}

    public function getjadwalbycategory($kategori){
		$data = $this->db->query("SELECT * from siemusik_jadwal WHERE jwl_posisi = '$kategori' ORDER BY jwl_tanggal ASC");
		return $data->result();
	}

	public function getnamapelayanall(){
		$data = $this->db->query("SELECT usr_nip,usr_name,usr_username,pln_dob, pln_posisi_pelayan FROM siemusik_users LEFT JOIN siemusik_pelayan ON siemusik_users.usr_nip = siemusik_pelayan.pln_nip");
		return $data->result();

	}

    public function getnamapemandu(){
		$data = $this->db->query("SELECT usr_nip,usr_name,usr_username,pln_posisi_pelayan FROM siemusik_users LEFT JOIN siemusik_pelayan ON siemusik_users.usr_nip = siemusik_pelayan.pln_nip WHERE pln_posisi_pelayan = 'PEMANDU' ");
		return $data->result();

	}
    public function getnamapemusik(){
		$data = $this->db->query("SELECT usr_nip,usr_name,usr_username,pln_posisi_pelayan FROM siemusik_users LEFT JOIN siemusik_pelayan ON siemusik_users.usr_nip = siemusik_pelayan.pln_nip WHERE pln_posisi_pelayan = 'PEMUSIK' ");
		return $data->result();

	}
	public function getnamaoperator(){
		$data = $this->db->query("SELECT usr_nip,usr_name,usr_username,pln_posisi_pelayan FROM siemusik_users LEFT JOIN siemusik_pelayan ON siemusik_users.usr_nip = siemusik_pelayan.pln_nip WHERE pln_posisi_pelayan = 'OPERATOR' OR pln_is_operator = 'OPERATOR' ");
		return $data->result();

	}

}