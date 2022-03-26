<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Userabsen extends CI_Model{

    public function GetJadwalPelayananUser($user_nip){
        $data = $this->db->query("SELECT * from siemusik_jadwal WHERE jwl_nip_pelayan = '$user_nip' ORDER BY jwl_tanggal ASC");
		return $data->result();
    }

	public function GetNamaTeam1($tgl,$shift){
        $data = $this->db->query("SELECT (GROUP_CONCAT(SUBSTRING_INDEX(jwl_nama, ' ', 1) ORDER BY jwl_nama)) as jwl_team FROM siemusik_jadwal WHERE jwl_tanggal = '$tgl' AND jwl_shift = '$shift' AND (jwl_posisi = 'PEMUSIK' || jwl_posisi = 'PEMANDU')");
		return $data->result();
    }

	public function GetNamaTeam2($tgl,$shift){
        $data = $this->db->query("SELECT (GROUP_CONCAT(SUBSTRING_INDEX(jwl_nama, ' ', 1) ORDER BY jwl_nama)) as jwl_team FROM siemusik_jadwal WHERE jwl_tanggal = '$tgl' AND jwl_shift = '$shift' AND jwl_posisi = 'OPERATOR'");
		return $data->result();
    }

    public function GetDataPelayan($user_nip){
		$data = $this->db->query("SELECT usr_nip,usr_name,usr_email,pln_alamat,pln_dob,pln_posisi_pelayan,pln_instrumen FROM siemusik_users LEFT JOIN siemusik_pelayan ON siemusik_users.usr_nip = siemusik_pelayan.pln_nip WHERE siemusik_users.usr_nip ='$user_nip'");
		return $data->result();

	}

	public function GetJadwalPelayanAll(){
		$data = $this->db->query("SELECT * FROM siemusik_jadwal ORDER BY jwl_tanggal ASC");
		return $data->result();
	}

	public function GetJadwalLupaAbsen($tgl){
		$data = $this->db->query("SELECT * FROM siemusik_jadwal WHERE jwl_is_attend IS NULL AND jwl_tanggal <= '$tgl' ORDER BY jwl_tanggal ASC");
		return $data->result();
	}

	public function GetInformasiPelayanAll(){
		$data = $this->db->query("SELECT * FROM siemusik_users LEFT JOIN siemusik_pelayan on siemusik_users.usr_nip = siemusik_pelayan.pln_nip ORDER BY usr_name ASC");
		return $data->result();
	}


	// public function GetStatusAbsen($user_nip,$user_posisi,$tgl_pelayanan){
	// 	$data = $this->db->query("SELECT * FROM siemusik_jadwal WHERE jwl_nip_pelayan ='$user_nip' AND jwl_posisi='$user_posisi' AND jwl_tanggal ='$tgl_pelayanan' AND jwl_is_attend=''");
	// 	return $data->result();

	// }

	public function GetStatusAbsen($user_nip,$tgl_pelayanan){
		$data = $this->db->query("SELECT * FROM siemusik_jadwal WHERE jwl_nip_pelayan ='$user_nip'AND jwl_tanggal ='$tgl_pelayanan' AND jwl_is_attend IS NULL");
		return $data->result();

	}

	public function GetJadwalSisaUser($user_nip,$tgl_pelayanan){
		$data = $this->db->query("SELECT * FROM siemusik_jadwal WHERE jwl_nip_pelayan ='$user_nip'AND jwl_tanggal > '$tgl_pelayanan'");
		return $data->result();
	}

	public function GetJadwalHadirUser($user_nip,$tgl_pelayanan){
		$data = $this->db->query("SELECT * FROM siemusik_jadwal WHERE jwl_nip_pelayan ='$user_nip'AND jwl_tanggal <= '$tgl_pelayanan' AND jwl_is_attend = 'HADIR'");
		return $data->result();
	}

	public function GetJadwalTidakHadirUser($user_nip,$tgl_pelayanan){
		$data = $this->db->query("SELECT * FROM siemusik_jadwal WHERE jwl_nip_pelayan ='$user_nip'AND jwl_tanggal < '$tgl_pelayanan' AND jwl_is_attend IS NULL");
		return $data->result();
	}

	public function GetJadwalDigantikanUser($user_nip,$tgl_pelayanan){
		$data = $this->db->query("SELECT * FROM siemusik_jadwal WHERE jwl_nip_pelayan ='$user_nip'AND jwl_tanggal < '$tgl_pelayanan' AND jwl_is_attend = 'DIGANTIKAN'");
		return $data->result();
	}


	// public function UpdateAbsenPelayan($stamp,$user_nip,$user_posisi,$tgl_pelayanan){
	// 	$data = $this->db->query("UPDATE siemusik_jadwal SET jwl_is_attend='HADIR', jwl_status_absen='$stamp' WHERE jwl_nip_pelayan ='$user_nip' AND jwl_posisi='$user_posisi' AND jwl_tanggal ='$tgl_pelayanan'");
	// 	return $data;
	// }

	public function UpdateAbsenPelayan($stamp,$user_nip,$shift,$tgl_pelayanan){
		$data = $this->db->query("UPDATE siemusik_jadwal SET jwl_is_attend='HADIR', jwl_status_absen='$stamp' WHERE jwl_nip_pelayan ='$user_nip' AND jwl_shift ='$shift' AND jwl_tanggal ='$tgl_pelayanan'");
		return $data;
	}

	public function UpdateAbsenDigantikan($nip_digantikan,$nama_pengganti,$tgl,$shift,$alasan_diganti,$posisi){
		$data = $this->db->query("UPDATE siemusik_jadwal SET jwl_is_attend='DIGANTIKAN', jwl_pengganti='$nama_pengganti', jwl_alasan_diganti='$alasan_diganti' WHERE jwl_nip_pelayan ='$nip_digantikan' AND jwl_tanggal = '$tgl' AND jwl_shift ='$shift' AND jwl_posisi ='$posisi'");
		return $data;
	}

	public function UpdateLupaAbsen($tgl,$shift,$nip,$posisi){
		$data = $this->db->query("UPDATE siemusik_jadwal SET jwl_is_attend='HADIR' WHERE jwl_tanggal = '$tgl' AND jwl_shift ='$shift' AND jwl_nip_pelayan ='$nip' AND  jwl_posisi ='$posisi'");
		return $data;
	}

	public function InsertAbsenPengganti($data_insert){
        $this->db->insert("siemusik_jadwal",$data_insert);
        if($this->db->affected_rows() > 0)
        {
            $data['message'] = 'Success';
        }
        else
        {
            $data['message'] = 'Error';
        }
        return $data;
	}

		// if($this->db->affected_rows() > 0)
        // {
        //     $data['message'] = 'Success';
        // }
        // else
        // {
        //     $data['message'] = 'Error';
        // }
        // return $data;

	

    // public function getjadwalbycategory($kategori){
	// 	$data = $this->db->query("SELECT * from siemusik_jadwal WHERE jwl_posisi = '$kategori' ORDER BY jwl_tanggal ASC");
	// 	return $data->result();
	// }
}
?>