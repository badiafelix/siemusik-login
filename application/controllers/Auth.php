<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller 
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function index()
    {
        //$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('username', 'Username', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');
        if($this->form_validation->run() == false)
        {
            $data['title'] = 'HALAMAN LOGIN';
            $this->load->view('templates/auth_header', $data);
            $this->load->view('auth/login');
            $this->load->view('templates/auth_footer');
        }
        else
        {
            $this->login();
        }
    }

    private function login()
    {
        //$email = $this->input->post('email');
        $username = strtoupper($this->input->post('username'));
        $password = $this->input->post('password');

        //$user = $this->db->get_where('siemusik_users', ['usr_email' => $email])->row_array();  //query pake builder CI
        $user = $this->db->get_where('siemusik_users', ['usr_username' => $username])->row_array();  //query pake builder CI
        
        if($user)
        {   //jika user active
            if($user['usr_is_active'] == 1)
            {
                //cek password
                if(password_verify($password, $user['usr_password']))
                {
                    $data=[
                        'nip' => $user['usr_nip'],
                        'nama' => $user['usr_name'],
                        'email' => $user['usr_email'],
                        'username' => $user['usr_username'],
                        'role_id' => $user['usr_role']
                    ];
                    //var_dump($data);
                    $this->session->set_userdata($data);
                    if($user['usr_role'] == 1)
                    {
                        $this->bridge();
                    }
                    else
                    {
                        redirect('user');
                    }
                    
                }
                else
                {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                    salah password!
                    </div>'); 
                    redirect('auth'); 
                }
            }
            else
            {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                user belum diaktivasi!
                </div>'); 
                redirect('auth'); 
            }
        }
        else
        {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
            user belum terdaftar!
            </div>'); 
            redirect('auth');
        }
    }

    public function bridge()
    {
        $data['title'] = 'HALAMAN LOGIN';
        $this->load->view('templates/auth_header', $data);
        $this->load->view('auth/bridge');
        $this->load->view('templates/auth_footer');
    }

    public function registration()
    {
        $this->form_validation->set_rules('name', 'Name', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[siemusik_users.usr_email]', [
            'is_unique' => 'email sudah teregistrasi!'
        ]);

        $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[3]|matches[password2]',[
            'matches' => 'Password dont match !!',
            'min_length' => 'Password to short !!'
        ]);
        $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');
        
        if($this->form_validation->run() == false)
        {
            $data['title'] = 'SIE MUSIK REGISTRASI';
            $this->load->view('templates/auth_header', $data);
            $this->load->view('auth/registration');
            $this->load->view('templates/auth_footer');
        }
        else
        {
            $data = [
                'usr_name' => htmlspecialchars($this->input->post('name', true)),
                'usr_email' => htmlspecialchars($this->input->post('email', true)),
                'usr_password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
                'usr_role' => 2,
                'usr_is_active' => TRUE 
            ];

            $this->db->insert('siemusik_users', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Akun berhasil dibuat!
          </div>'); 
            redirect('auth');
        }
    
    }


    public function logout()
    {
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('role_id');
        $this->session->unset_userdata('nama');
        $this->session->unset_userdata('nip');
        $this->session->unset_userdata('username');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Berhasil logout!
          </div>'); 
        redirect('auth');

    }
}
