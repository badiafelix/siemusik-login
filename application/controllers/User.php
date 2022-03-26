<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller 
{
    public function __construct(){
		parent::__construct();
        date_default_timezone_set("Asia/Bangkok");
        if($this->session->userdata('nip') == ''){
            redirect('auth');
        }
        
	}

    public function index()
    {
        $data['title'] = 'Dashboard';
        $data['user'] = $this->db->get_where('siemusik_users', ['usr_email' => $this->session->userdata('email')])->row_array(); 
        $data['user']['nickname'] = str_replace("."," ",$this->session->userdata('username')); 
        
        $this->load->model('userabsen');
        $user_nip = $this->session->userdata('nip');
        $tgl_sekarang = (string)date("Y-m-d");
        $data['jadwalUser'] = $this->userabsen->GetJadwalPelayananUser($user_nip);
        $data['jadwalSisa'] = count($this->userabsen->GetJadwalSisaUser($user_nip,$tgl_sekarang));  
        $data['jadwalHadir'] = count($this->userabsen->GetJadwalHadirUser($user_nip,$tgl_sekarang));        
        $data['jadwalTidakHadir'] = count($this->userabsen->GetJadwalTidakHadirUser($user_nip,$tgl_sekarang));  
        $data['jadwalDigantikan'] = count($this->userabsen->GetJadwalDigantikanUser($user_nip,$tgl_sekarang));  

        $data['statusAbsen'] = $this->userabsen->GetStatusAbsen($user_nip,$tgl_sekarang);

        if(count($data['statusAbsen']) >0)
        {
            $jam_jadwal = $data['statusAbsen'][0]->jwl_shift;  //jam dari jadwal
            $jam_sekarang = date('H:i'); //jam current dari server
                        
            if (strtotime($jam_sekarang) > strtotime($jam_jadwal)) 
            {
                $data['user']['is_absen'] = TRUE;
            }
            else
            {
                $data['user']['is_absen'] = FALSE;
            }
        }
        else
        {
            $data['user']['is_absen'] = FALSE;
        }

        //var_dump( $tgl_sekarang);

        if($this->isMobileDevice())
        {
            $data['user']['is_mobile'] = TRUE;
            $this->load->view('templates/topbarmobile', $data);
            $this->load->view('user/indexmobile', $data);
        }
        else{
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('user/index', $data);
            $this->load->view('templates/footer');
        }
    }

    public function profilsaya()
    {
        $data['title'] = 'Profil Saya';

        $this->load->model('userabsen');
        $user_nip = $this->session->userdata('nip');
        $data['user'] = $this->userabsen->GetDataPelayan($user_nip);
        $data['user']['nickname'] = str_replace("."," ",$this->session->userdata('username')); 
        $tgl_pelayanan = (string)date("Y-m-d");

        // $user_posisi = $data['user'][0]->pln_posisi_pelayan;
        // $jam_pelayanan = '07.00';

        if($this->isMobileDevice())
        {
            $data['user']['is_mobile'] = TRUE;
            $this->load->view('templates/topbarmobile', $data);
            $this->load->view('user/profilsayamobile', $data);
        }
        else
        {
            $data['user']['is_mobile'] = FALSE;
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('user/profilsaya', $data);
            $this->load->view('templates/footer');
        }
    }

    // public function index()
    // {
    //     $data['title'] = 'Profil Saya';

    //     $this->load->model('userabsen');
    //     $user_nip = $this->session->userdata('nip');
    //     $data['user'] = $this->userabsen->GetDataPelayan($user_nip);
    //     $data['user']['nickname'] = str_replace("."," ",$this->session->userdata('username')); 
    //     $tgl_pelayanan = (string)date("Y-m-d");

    //     $user_posisi = $data['user'][0]->pln_posisi_pelayan;
    //     $jam_pelayanan = '07.00';
    //     //$data['statusAbsen'] = $this->userabsen->GetStatusAbsen($user_nip,$user_posisi,$tgl_pelayanan);
    //     $data['statusAbsen'] = $this->userabsen->GetStatusAbsen($user_nip,$tgl_pelayanan);

    //     if(count($data['statusAbsen']) >0)
    //     {
    //         $jam_jadwal = $data['statusAbsen'][0]->jwl_shift;  //jam dari jadwal
    //         $jam_sekarang = date('H:i'); //jam current dari server
                        
    //         if (strtotime($jam_sekarang) > strtotime($jam_jadwal)) 
    //         {
    //             $data['user']['is_absen'] = TRUE;
    //         }
    //         else
    //         {
    //             $data['user']['is_absen'] = FALSE;
    //         }
    //     }
    //     else
    //     {
    //         $data['user']['is_absen'] = FALSE;
    //     }


    //     if($this->isMobileDevice())
    //     {
    //         $data['user']['is_mobile'] = TRUE;
    //         $this->load->view('templates/topbarmobile', $data);
    //         $this->load->view('user/dashboardmobile', $data);
    //     }
    //     else
    //     {
    //         $data['user']['is_mobile'] = FALSE;
    //         $this->load->view('templates/header', $data);
    //         $this->load->view('templates/sidebar', $data);
    //         $this->load->view('templates/topbar', $data);
    //         $this->load->view('user/index', $data);
    //         $this->load->view('templates/footer');
    //         //var_dump($data['user']['is_mobile']);
    //     }


    //     // $this->load->view('templates/header', $data);
    //     // $this->load->view('templates/sidebar', $data);
    //     // $this->load->view('templates/topbar', $data);
    //     // $this->load->view('user/index', $data);
    //     // $this->load->view('templates/footer');
    // }

    public function isMobileDevice()
    {
        return preg_match("/(android|avantgo|blackberry|bolt|boost|cricket|docomo
        |fone|hiptop|mini|mobi|palm|phone|pie|tablet|up\.browser|up\.link|webos|wos)/i"
        , $_SERVER["HTTP_USER_AGENT"]);
    }

    public function absensipelayan()
    {
        $this->load->model('userabsen');
        $user_nip = $this->session->userdata('nip');
        $data['user'] = $this->userabsen->GetDataPelayan($user_nip);

        $user_posisi = $data['user'][0]->pln_posisi_pelayan;
        $tgl_pelayanan = (string)date("Y-m-d");

        $initial = strstr($this->session->userdata('username'), '.', true);
        $stamp = "USER." . $initial;
        //$rtn = $this->userabsen->UpdateAbsenPelayan($stamp,$user_nip,$user_posisi,$tgl_pelayanan);

        $data['statusAbsen'] = $this->userabsen->GetStatusAbsen($user_nip,$tgl_pelayanan);
        $shift = $data['statusAbsen'][0]->jwl_shift;
        $rtn = $this->userabsen->UpdateAbsenPelayan($stamp,$user_nip,$shift,$tgl_pelayanan);
        //var_dump($rtn);

        if($rtn == TRUE)
        {
            $res['status'] = "SUCCESS";
            $res['message'] = "Terima Kasih Atas Pelayanannya.";
        }
        else{
            $res['status'] = "ERROR";
            $res['message'] = "Gagal absen silahkan hubungi pengurus !";
        }
        echo json_encode($res);
    }

    public function jadwal()
    {
        $data['title'] = 'Jadwal Pelayanan';
        $data['user'] = $this->db->get_where('siemusik_users', ['usr_email' => $this->session->userdata('email')])->row_array(); 
        $data['user']['nickname'] = str_replace("."," ",$this->session->userdata('username')); 
        
        $this->load->model('userabsen');
        $user_nip = $this->session->userdata('nip');
        $data['jadwalUser'] = $this->userabsen->GetJadwalPelayananUser($user_nip);
        //var_dump($data['jadwalUser'][1]-> jwl_posisi);

        $data_length = count($data['jadwalUser']);

        for($i=0 ; $i<$data_length ; $i++)
        {
            $tgl = $data['jadwalUser'][$i]->jwl_tanggal;
            $shift = $data['jadwalUser'][$i]->jwl_shift;
            $posisi = $data['jadwalUser'][$i]->jwl_posisi;
            if($posisi == 'PEMUSIK' || $posisi == 'PEMANDU') 
            {
                $team = $this->userabsen->GetNamaTeam1($tgl,$shift);
            }
            else if($posisi == 'OPERATOR') 
            {
                $team = $this->userabsen->GetNamaTeam2($tgl,$shift);
            }

            $data['jadwalUser'][$i]->jwl_team = $team[0]->jwl_team;

        }

        if($this->isMobileDevice())
        {
            $data['user']['is_mobile'] = TRUE;
            $this->load->view('templates/topbarmobile', $data);
            $this->load->view('user/jadwalmobile', $data);
        }
        else{
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('user/jadwal', $data);
            $this->load->view('templates/footer');
        }

        #$this->load->view('user/index', $data);
    }

    public function riwayatabsen()
    {
        $data['title'] = 'Riwayat Absen';
        $data['user'] = $this->db->get_where('siemusik_users', ['usr_email' => $this->session->userdata('email')])->row_array(); 
        $data['user']['nickname'] = str_replace("."," ",$this->session->userdata('username')); 
        
        $this->load->model('userabsen');
        $user_nip = $this->session->userdata('nip');
        $data['jadwalUser'] = $this->userabsen->GetJadwalPelayananUser($user_nip);

        if($this->isMobileDevice())
        {
            $data['user']['is_mobile'] = TRUE;
            $this->load->view('templates/topbarmobile', $data);
            $this->load->view('user/riwayatabsenmobile', $data);
        }
        else{

            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('user/riwayatabsen', $data);
            $this->load->view('templates/footer');
        }

    }


    public function gantipassword()
    {
        $data['title'] = 'Ganti Password';
        $data['user'] = $this->db->get_where('siemusik_users', ['usr_email' => $this->session->userdata('email')])->row_array(); 
        $data['user']['nickname'] = str_replace("."," ",$this->session->userdata('username')); 
        //echo 'selamat datang '. $data['user']['usr_name'];

        if($this->isMobileDevice())
        {
            $data['user']['is_mobile'] = TRUE;
            $this->load->view('templates/topbarmobile', $data);
            $this->load->view('user/gantipasswordmobile', $data);
        }
        else{
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('user/gantipassword', $data);
            $this->load->view('templates/footer');
        }


    }

    public function updategantipassword()
    {
        $nip = $this->session->userdata('nip');
        //$passLama = password_hash($this->input->post('passLama'), PASSWORD_DEFAULT);
        $passLama = $this->input->post('passLama');
        $passBaru = $this->input->post('passBaru');

        $this->load->model('insertpelayan');
        $cek= $this->insertpelayan->cekpasswordlama($nip);

        if(password_verify($passLama,$cek[0]->usr_password))
        {
            $enc_passBaru = password_hash($passBaru, PASSWORD_DEFAULT);
            $data = $this->insertpelayan->gantipassword($nip,$enc_passBaru);
            if($data == TRUE)
            {
                $res['status'] = "SUCCESS";
                $res['message'] = "Berhasil Reset Password !";
        
            }
            else
            {
                $res['status'] = "ERROR" ;
                $res['message'] = "Gagal Reset Password !";
            }
        }
        else
        {
            $res['status'] = "ERROR" ;
            $res['message'] = "Password Lama Salah!";
        }

        
        echo json_encode($res);

    }


    
}