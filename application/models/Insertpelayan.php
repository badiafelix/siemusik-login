<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Insertpelayan extends CI_Model{

    public function input_pelayan($data_users, $data_pelayan){

        $this->db->insert("siemusik_users",$data_users);
        $this->db->insert("siemusik_pelayan",$data_pelayan);
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

    public function Update_rangkap_operator($nip){
      $data = $this->db->query("UPDATE siemusik_pelayan SET pln_is_operator='OPERATOR' WHERE pln_nip ='$nip'");
      return $data;
    }

    public function resetpassword($nip,$pass){
      $data = $this->db->query("UPDATE siemusik_users SET usr_password='$pass' WHERE usr_nip ='$nip'");
      return $data;
    }

    public function cekpasswordlama($nip){
      $data = $this->db->query("SELECT * FROM siemusik_users WHERE usr_nip ='$nip'");
      return $data->result();
    }

    public function cekurutannip(){
      $data = $this->db->query("SELECT COUNT(*) as usr_count from siemusik_users");
      return $data->result();
      }

    public function gantipassword($nip,$enc_passBaru){
      $data = $this->db->query("UPDATE siemusik_users SET usr_password='$enc_passBaru' WHERE usr_nip ='$nip'");
      return $data;
    }

}
?>