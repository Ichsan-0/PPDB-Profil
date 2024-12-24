<?php
class Dashboard extends CI_Controller{
	function __construct(){
		parent::__construct();
	
		$this->load->model('m_pendaftar');
	}
    
	function index() {
        if ($this->session->userdata('pengguna_level') == 2) {
    
            // Mengambil status pengguna dari session
            $pengguna_status = $this->session->userdata('pengguna_status');
            // Mengambil nama pengguna dari model berdasarkan status pengguna
            $this->data['nama'] = $this->m_pendaftar->get_peserta_nama($pengguna_status);
            // Mengambil tahun ajaran berdasarkan status pengguna
            $tahun_ajaran_result = $this->m_pendaftar->get_tahun_ajaran($pengguna_status);
            // Mengambil baris pertama dari hasil tahun ajaran
            $tahun = $tahun_ajaran_result->row();
            $this->data['brosur']=$this->m_pendaftar->get_brosur_pendidikan();
            // Mengatur data untuk view
            $this->data['breadcrumb'] = 'Dashboard';
            $this->data['main_view'] = 'pendaftar/v_dashboard';
            $this->data['tahun'] = $tahun; // Menambahkan variabel tahun ke data
    
            // Menampilkan view dengan template
            $this->load->view('theme/pendaftartemplate', $this->data);
        } else {
            // Jika bukan pendaftar, redirect ke halaman login
            redirect('login');
        }
    }
    
	
}