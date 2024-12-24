<?php
class Kategori extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('m_kategori');
		$this->load->library('upload');
	}


	function index(){
		
		if($this->session->userdata('pengguna_level')=='1'|| $this->session->userdata('pengguna_level') == '3'){
		$this->data['data']=$this->m_kategori->get_all_kategori();
        
        $this->data['breadcrumb']  = 'Data Kategori Berita';
            
        $this->data['main_view']   = 'admin/v_kategori';
            
        $this->load->view('theme/admintemplate',$this->data);
		} else {
			redirect('login');
		}
	}

	function simpan_kategori(){
		$kategori=strip_tags($this->input->post('xkategori'));
		$this->m_kategori->simpan_kategori($kategori);
		echo $this->session->set_flashdata('msg','success');
		redirect('admin/kategori');
	}

	function update_kategori(){
		$kode=strip_tags($this->input->post('kode'));
		$kategori=strip_tags($this->input->post('xkategori'));
		$this->m_kategori->update_kategori($kode,$kategori);
		echo $this->session->set_flashdata('msg','info');
		redirect('admin/kategori');
	}
	function hapus_kategori(){
		$kode=strip_tags($this->input->post('kode'));
		$this->m_kategori->hapus_kategori($kode);
		echo $this->session->set_flashdata('msg','success-hapus');
		redirect('admin/kategori');
	}

}
