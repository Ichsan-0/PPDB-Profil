<?php
class Login extends CI_Controller{
    function __construct(){
        parent:: __construct();
        $this->load->model('m_login');
    }
    function index(){
        
        $this->load->view('depan/v_login');
        
    }
    
    public function auth() {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
    
        $user = $this->m_login->cek_login($username, $password);
        if ($user) {
            $userdata = array(
                'pengguna_id' => $user->pengguna_id,
                'pengguna_nama' => $user->$pengguna_nama,
                'pengguna_username' => $user->pengguna_username,
                'pengguna_status' => $user->pengguna_status,
                'pengguna_level' => $user->pengguna_level,
                'logged_in' => TRUE
            );
    
            $this->session->set_userdata($userdata);
    
            // Redirect sesuai level pengguna
            if ($user->pengguna_level == 1 || $user->pengguna_level == 3) {

                redirect('admin/dashboard');
            } elseif ($user->pengguna_level == 2) {
                redirect('pendaftar/dashboard');
            } else {
                redirect('login');
            }
        } else {
            // Jika login gagal, set pesan flash dan redirect ke halaman login
            $this->session->set_flashdata('msg', '<div class="alert alert-danger" role="alert"><button type="button" class="close" data-dismiss="alert"><span class="fa fa-close"></span></button> Username atau Password Salah</div>');
            redirect('login');
        }
    }
    
    

    function logout(){
        $this->session->sess_destroy();
        redirect('login');
    }
}
