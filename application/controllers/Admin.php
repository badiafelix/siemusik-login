<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller 
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
        // if($this->session->userdata('nip') == ''){
        //     var_dump("tidak bisa masuk");
        // }

        $data['title'] = 'Dashboard Admin';
        $data['user'] = $this->db->get_where('siemusik_users', ['usr_email' => $this->session->userdata('email')])->row_array(); 
        $data['user']['nickname'] = str_replace("."," ",$this->session->userdata('username')); 

        $this->load->model('getdashboard');
        $data['dash_semua'] = $this->getdashboard->getJumlahSemua();
        $data['dash_pemandu'] = $this->getdashboard->getJumlahPemandu();
        $data['dash_pemusik'] = $this->getdashboard->getJumlahPemusik();
        $data['dash_operator'] = $this->getdashboard->getJumlahOperator();

        //hitung persentase seluruh pelayan
        $total_pelayan_all = $this->getdashboard->getJumlahDataSemua()[0]->jumlah; //total jadwal
        $total_pelayan_all_hadir = $this->getdashboard->getJumlahHadirSemua()[0]->jumlah; //total jadwal hadir
        if($total_pelayan_all != 0){        //ngejaga supaya tidak dibagi 0 kalau data kosong
            $percentage_pelayan_all = round(((int)$total_pelayan_all_hadir/(int)$total_pelayan_all)*100);
        }
        else
        {
            $percentage_pelayan_all = 0;
        }

        //hitung persentase pemandu
        $total_pemandu = $this->getdashboard->getJumlahJwlPemandu()[0]->jumlah; //total jadwal
        $total_pemandu_hadir = $this->getdashboard->getJumlahJwlHadirPemandu()[0]->jumlah; //total jadwal hadir
        if($total_pemandu != 0){        //ngejaga supaya tidak dibagi 0 kalau data kosong
            $percentage_pemandu = round(((int)$total_pemandu_hadir/(int)$total_pemandu)*100);
        }
        else
        {
            $percentage_pemandu = 0;
        }

        //hitung persentase pemusik
        $total_pemusik = $this->getdashboard->getJumlahJwlPemusik()[0]->jumlah; //total jadwal
        $total_pemusik_hadir = $this->getdashboard->getJumlahJwlHadirPemusik()[0]->jumlah; //total jadwal hadir
        if($total_pemusik != 0){        //ngejaga supaya tidak dibagi 0 kalau data kosong
            $percentage_pemusik = round(((int)$total_pemusik_hadir/(int)$total_pemusik)*100);
        }
        else
        {
            $percentage_pemusik = 0;
        }

        //hitung persentase operator
        $total_operator = $this->getdashboard->getJumlahJwlOperator()[0]->jumlah; //total jadwal
        $total_operator_hadir = $this->getdashboard->getJumlahJwlHadirOperator()[0]->jumlah; //total jadwal hadir
        if($total_operator != 0){
            $percentage_operator = round(((int)$total_operator_hadir/(int)$total_operator)*100);
        }
        else
        {
            $percentage_operator = 0;
        }

        //hitung persentase digantikan
        $total_digantikan_all = $this->getdashboard->getJumlahJwlHadirOperator()[0]->jumlah; //total jadwal hadir
        if($total_pelayan_all != 0){
            $percentage_digantikan = round(((int)$total_digantikan_all/(int)$total_pelayan_all)*100);
        }
        else
        {
            $percentage_digantikan = 0;
        }
        
        

        $data['dash_hadir_all'] = $percentage_pelayan_all;
        $data['dash_hadir_pemandu'] = $percentage_pemandu;
        $data['dash_hadir_pemusik'] = $percentage_pemusik;
        $data['dash_hadir_operator'] = $percentage_operator;
        $data['dash_hadir_digantikan'] = $percentage_digantikan;

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebaradmin', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/dashboardadmin', $data);
        $this->load->view('templates/footer');
    }

    public function informasipelayan()
    {
        $data['title'] = 'Informasi Pelayan';
        $data['user'] = $this->db->get_where('siemusik_users', ['usr_email' => $this->session->userdata('email')])->row_array(); 
        $data['user']['nickname'] = str_replace("."," ",$this->session->userdata('username')); 

        //var_dump($data['user']['nickname']);
        $this->load->model('userabsen');
        $data['InformasiAll'] = $this->userabsen->GetInformasiPelayanAll();
        //var_dump($data['InformasiAll']);

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebaradmin', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/informasipelayan', $data);
        $this->load->view('templates/footer');
    }


    //Menu untuk admin
    public function pendaftaranpelayan()
    {
        $data['title'] = 'Pendaftaran Pelayan';
        $data['user'] = $this->db->get_where('siemusik_users', ['usr_email' => $this->session->userdata('email')])->row_array(); 
        $data['user']['nickname'] = str_replace("."," ",$this->session->userdata('username')); 

        //var_dump($data['user']['nickname']);

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebaradmin', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/pendaftaranpelayan', $data);
        $this->load->view('templates/footer');
    }

    public function unggahjadwal()
    {
        $data['title'] = 'Unggah Jadwal Pemandu/Pemusik/Operator';
        $data['user'] = $this->db->get_where('siemusik_users', ['usr_email' => $this->session->userdata('email')])->row_array(); 
        $data['user']['nickname'] = str_replace("."," ",$this->session->userdata('username')); 

        $this->load->model('insertjadwal');
        $data['historyJadwal'] = $this->insertjadwal->gethistoryuploadjadwal();
        //var_dump($data['historyJadwal']);

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebaradmin', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/unggahjadwal', $data);
        $this->load->view('templates/footer');
    }

    public function insertpelayanbaru()
    {
        //var_dump("masuk sini");
        $nama = htmlspecialchars(strtoupper($this->input->post('nama')));
        $usernameDepan = htmlspecialchars(strtoupper($this->input->post('usernameDepan')));
        $usernameBelakang = htmlspecialchars(strtoupper($this->input->post('usernameBelakang')));
        $username = $usernameDepan . "." . $usernameBelakang;
        $email = strtoupper($this->input->post('email'));
        $alamat = htmlspecialchars(strtoupper($this->input->post('alamat')));
        $gender = strtoupper($this->input->post('gender'));
        $sektor = strtoupper($this->input->post('sektor'));
        $posisi = strtoupper($this->input->post('posisi'));
        $instrumen = strtoupper($this->input->post('instrumen'));
        $isoperator = strtoupper($this->input->post('isoperator'));
        
        //untuk ambil nama depan + marga
        // $string = $nama;

        // $strTmp = explode(" ",$string);
        // $namaDepan = $strTmp[0];

        // $last_word_start = strrpos($string, ' ') + 1; 
        // $marga = substr($string, $last_word_start); 
        // $username = $namaDepan . "." .$marga;
        
        //untuk hash default password
        if((int)$this->input->post('tgl') < 10)
        {
            $tgl = "0" . $this->input->post('tgl');
        }
        else
        {
            $tgl = $this->input->post('tgl');
        }
        $pass = $tgl . $this->input->post('bulan') . $this->input->post('tahun');
        $dob = $tgl . "/" . $this->input->post('bulan') . "/" . $this->input->post('tahun');

        $this->load->model('insertpelayan');
        $cek = $this->insertpelayan->cekurutannip();
        $cek = (int)$cek[0]->usr_count;
        //$cek = 302;
        $urutan = $cek+1;

        $angka1 = "";
        $angka2 = "";
        $angka3 = "";

        // Angka pertama
        if($posisi == "PEMANDU")
        {
            $angka1 = '1';
        }
        else if($posisi == "PEMUSIK")
        {
            $angka1 = '2';
        }
        else
        {
            $angka1 = '3';
        }

        //angka kedua
        if($gender == "PRIA")
        {
            $angka2 = '1';
        }
        else{
            $angka2 = '2';
        }

        //angka ketiga
        if($urutan <= 99)
        {
            if($urutan <= 9 )
            {
                $angka3 = '00' . $urutan;
            }
            else if($urutan > 9 ){
                $angka3 = '0' . $urutan;
            }
        }
        else
        {
            $angka3 = $urutan;
        }

        $nip = $angka1.$angka2.$angka3;
        //var_dump($nip);

        
        // $random = rand(100,999);
        // $random =(string)$random;
    
        // $nip = $this->input->post('tahun') . $this->input->post('bulan') . $tgl . $random;

        $data_pelayan = array(
            'pln_nip' => $nip,
            'pln_alamat' => $alamat,
            'pln_gender' => $gender,
            'pln_sektor' => $sektor,
            'pln_dob' => $dob,
            'pln_posisi_pelayan' => $posisi,
            'pln_instrumen' => $instrumen
        );

        $data_users = array(
            'usr_id' => NULL,
            'usr_nip' => $nip,
            'usr_name' => $nama,
            'usr_email' => $email,
            'usr_username' => $username,
            'usr_password' => password_hash($pass, PASSWORD_DEFAULT), //ini harus diubah 
            'usr_role' => 2,
            'usr_is_active' => TRUE
        );

        $this->load->model('insertpelayan');
        //$data = $this->insertpelayan->input_pelayan($data_pelayan);
        $data = $this->insertpelayan->input_pelayan($data_users,$data_pelayan);

        if($data['message'] == "Success")
        {
            if($isoperator == 'ON')
            {
                $data2 = $this->insertpelayan->Update_rangkap_operator($nip);
            }
            $res['status'] = "SUCCESS";
	        $res['message'] = "Berhasil Insert data baru !";
    
        }
        else
        {
            $res['status'] = "ERROR";
	        $res['message'] = "Gagal insert data baru !";
        }

       
    
        echo json_encode($res);

    }
    
    
    public function jadwalpelayan()
    {
        $data['title'] = 'Jadwal Pelayan';
        $data['user'] = $this->db->get_where('siemusik_users', ['usr_email' => $this->session->userdata('email')])->row_array(); 
        $data['user']['nickname'] = str_replace("."," ",$this->session->userdata('username')); 
  
        $kategori = htmlspecialchars(strtoupper($this->input->post('kategoriPelayan')));
        $this->load->model('insertjadwal');
        if($kategori == "ALL"){
            $data['kategori'] = 'Keseluruhan';
            $data['jadwalPelayan'] = $this->insertjadwal->getjadwallengkap();
        }
        else
        {
            $data['kategori'] = $this->input->post('kategoriPelayan');
            $data['jadwalPelayan'] = $this->insertjadwal->getjadwalbycategory($kategori);
        }
        //var_dump($kategori, $data['jadwalPelayan']);
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebaradmin', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/jadwalpelayan', $data);
        $this->load->view('templates/footer');

    }

    public function gantijadwal()
    {
        $data['title'] = 'Ganti Jadwal Pelayan';
        $data['user'] = $this->db->get_where('siemusik_users', ['usr_email' => $this->session->userdata('email')])->row_array(); 
        $data['user']['nickname'] = str_replace("."," ",$this->session->userdata('username')); 
        //echo 'selamat datang '. $data['user']['usr_name'];

        $this->load->model('insertjadwal');
        $data['jadwalLengkap'] = $this->insertjadwal->getjadwallengkap();
        $data['jdwldatalength'] = count($this->insertjadwal->getjadwallengkap());

        $data['daftarpemandu'] = $this->insertjadwal->getnamapemandu();
        $data['daftarpemusik'] = $this->insertjadwal->getnamapemusik();
        $data['daftaroperator'] = $this->insertjadwal->getnamaoperator();

        //var_dump($data['jadwalLengkap'],$data['daftarpemandu'],$data['daftarpemusik']);

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebaradmin', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/gantijadwal', $data);
        $this->load->view('templates/footer');

        #$this->load->view('user/index', $data);
    }

    public function insertgantijadwal()
    {
        $nama_digantikan = $this->input->post('nama');
        $nip_digantikan = $this->input->post('nip');;

        $split = explode("/",$this->input->post('pengganti'));

        $nama_pengganti = $split[0];
        $nip_pengganti = $split[1];
        
        $tgl = $this->input->post('tgl');
        $shift = $this->input->post('shift');
        $posisi = $this->input->post('posisi');
        $alasan_diganti = $this->input->post('alasan_diganti');

        $this->load->model('userabsen');
        $data['updateDiganti'] = $this->userabsen->UpdateAbsenDigantikan($nip_digantikan,$nama_pengganti,$tgl,$shift,$alasan_diganti,$posisi);

        $data_insert = array(
            'jwl_id' => NULL,
            'jwl_nip_penggungah' => 'Admin',
            'jwl_periode' => 'Admin',
            'jwl_nip_pelayan' => $nip_pengganti,
            'jwl_nama' => $nama_pengganti,
            'jwl_posisi' => $posisi,
            'jwl_shift' => $shift, //ini harus diubah 
            'jwl_tanggal' => $tgl,
            'jwl_is_attend' => '',
            'jwl_pengganti' => '',
            'jwl_alasan_diganti' => '',
            'jwl_status_absen' => ''
        );

        //var_dump($data_insert);

        $data2 = $this->userabsen->InsertAbsenPengganti($data_insert);

        if($data2['message'] == "Success")
        {
            $res['status'] = "SUCCESS";
	        $res['message'] = "Berhasil Insert data baru !";
    
        }
        else
        {
            $res['status'] = "ERROR";
	        $res['message'] = "Gagal insert data baru !";
        }
        
        echo json_encode($res);
    }

    public function lupaabsen()
    {
        $data['title'] = 'Lupa Absen';
        $data['user'] = $this->db->get_where('siemusik_users', ['usr_email' => $this->session->userdata('email')])->row_array(); 
        $data['user']['nickname'] = str_replace("."," ",$this->session->userdata('username')); 
        //echo 'selamat datang '. $data['user']['usr_name'];

        $tgl = date("Y-m-d");
        $this->load->model('userabsen');
        $data['jadwalAll'] = $this->userabsen->GetJadwalLupaAbsen($tgl);
        $data['jdwldatalength'] = count($this->userabsen->GetJadwalLupaAbsen($tgl));

        //var_dump($data['jadwalAll']);

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebaradmin', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/lupaabsen', $data);
        $this->load->view('templates/footer');

        #$this->load->view('user/index', $data);

        // foreach ($data as $users) 
        // {
        //     echo "Nama : ".$users['usr_name']."<br/>";
        //     echo "email : ".$users['usr_email']."<hr/>";
        // }
    }

    public function updatelupaabsen()
    {
        $nama = $this->input->post('nama');
        $tgl = $this->input->post('tgl');
        $shift = $this->input->post('shift');
        $nip = $this->input->post('nip');
        $posisi = $this->input->post('posisi');

        $this->load->model('userabsen');
        $data['updateDiganti'] = $this->userabsen->UpdateLupaAbsen($tgl,$shift,$nip,$posisi);
        //var_dump($data['updateDiganti']);

        if($data['updateDiganti'] == TRUE)
        {
             $res['status'] = "SUCCESS";
	         $res['message'] = "Berhasil Update absen " . $nama;
    
        }
        else
        {
            $res['status'] = "ERROR";
	        $res['message'] = "Gagal insert data baru !";
        }
        
        echo json_encode($res);
    }


    public function riwayatabsenall()
    {
        $data['title'] = 'Riwayat Absen';
        $data['user'] = $this->db->get_where('siemusik_users', ['usr_email' => $this->session->userdata('email')])->row_array(); 
        $data['user']['nickname'] = str_replace("."," ",$this->session->userdata('username')); 
        //echo 'selamat datang '. $data['user']['usr_name'];

        $this->load->model('userabsen');
        $data['jadwalAll'] = $this->userabsen->GetJadwalPelayanAll();

        //var_dump($data['jadwalAll']);

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebaradmin', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/riwayatabsenall', $data);
        $this->load->view('templates/footer');

        #$this->load->view('user/index', $data);

        // foreach ($data as $users) 
        // {
        //     echo "Nama : ".$users['usr_name']."<br/>";
        //     echo "email : ".$users['usr_email']."<hr/>";
        // }
    }


    public function resetpassword()
    {
        $data['title'] = 'Reset Password';
        $data['user'] = $this->db->get_where('siemusik_users', ['usr_email' => $this->session->userdata('email')])->row_array(); 
        $data['user']['nickname'] = str_replace("."," ",$this->session->userdata('username')); 
        $this->load->model('insertjadwal');
        $data['daftarpelayan'] = $this->insertjadwal->getnamapelayanall();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebaradmin', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/resetpassword', $data);
        $this->load->view('templates/footer');


    }

    public function updateresetpassword()
    {
        $value = explode(".",$this->input->post('value'));
        $nip = $value[0] ;
        $dob = str_replace("/","",$value[1]) ;
        $pass = password_hash($dob, PASSWORD_DEFAULT);
  
        $this->load->model('insertpelayan');
        $data = $this->insertpelayan->resetpassword($nip,$pass);

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
        
        echo json_encode($res);
    }
    
}