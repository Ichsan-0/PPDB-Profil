<?php
class Dashboard extends CI_Controller{
	function __construct(){
		parent::__construct();
		
		$this->load->model('m_pengunjung');
	}
    
	function index(){
        
		if ($this->session->userdata('pengguna_level') == '1' || $this->session->userdata('pengguna_level') == '3') {
            
			$this->data['visitor'] = $this->m_pengunjung->statistik_pengujung();
            
			$this->data['ppdb'] = $this->m_pengunjung->jumlah_pendaftar();
            
			$this->data['agenda'] = $this->m_pengunjung->jumlah_agenda();
			$this->data['agenda_bulan'] = $this->m_pengunjung->agenda_bulan_ini();
			$this->data['pengumuman'] = $this->m_pengunjung->jumlah_pengumuman(); 
			$this->data['pengumuman_bulan'] = $this->m_pengunjung->pengumuman_bulan_ini(); 
			$this->data['berita'] =$this->m_pengunjung->jumlah_berita();  
			$this->data['breadcrumb']  = 'Dashboard';
            
            $this->data['main_view']   = 'admin/v_dashboard';
            
			$this->load->view('theme/admintemplate',$this->data);
            
		}else{
			redirect('login');
		}
	
	}
	
}