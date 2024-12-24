<?php
class Home extends CI_Controller{
    
	function __construct(){
        
		parent::__construct();
		$this->load->model('m_tulisan');
		$this->load->model('m_galeri');
		$this->load->model('m_pengumuman');
		$this->load->model('m_agenda');
		$this->load->model('m_files');
		$this->load->model('m_pengunjung');
		$this->m_pengunjung->count_visitor();
        
	}
    
	function index(){
        
            $this->data['main_view']   = 'depan/home';
        
			$this->data['berita']=$this->m_tulisan->get_berita_home();
			$this->data['pengumuman']=$this->m_pengumuman->get_pengumuman_home();
			$this->data['agenda']=$this->m_agenda->get_agenda_home();
			$this->data['slider']=$this->m_galeri->get_all_slider();
			$this->data['tot_guru']=$this->db->get('tbl_guru')->num_rows();
			$this->data['tot_files']=$this->db->get('tbl_files')->num_rows();
			$this->data['tot_agenda']=$this->db->get('tbl_agenda')->num_rows();
			
			$this->data['brosur']=$this->m_galeri->get_brosur();
        
			$this->load->view('theme/template',$this->data);
	}

}
