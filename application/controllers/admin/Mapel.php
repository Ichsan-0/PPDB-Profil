<?php
class Mapel extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('m_mapel');
	}


	function index(){
        
		if($this->session->userdata('pengguna_level')=='1'|| $this->session->userdata('pengguna_level') == '3'){
		$this->data['mapel']=$this->m_mapel->get_all_mapel();
		$this->data['kelas']=$this->m_mapel->get_all_kelas();
        
        $this->data['breadcrumb']  = 'Data Kelas & Mapel';
            
        $this->data['main_view']   = 'admin/v_mapel';
            
        $this->load->view('theme/admintemplate',$this->data);
		} else {
			redirect('login');
		}
        
	}

	function simpan_mapel(){
        
		$mapel=strip_tags($this->input->post('namamapel'));
        
        $keterangan=strip_tags($this->input->post('keterangan'));
        
		$this->m_mapel->simpan_mapel($mapel,$keterangan);
        
		echo $this->session->set_flashdata('msg','success');
        
		redirect('admin/mapel');
        
	}

	function simpan_kelas(){
		$kelas=$this->input->post('namakelas');
		$keterangank = $this->input->post('keterangank');
		$this->m_mapel->simpan_kelas($kelas, $keterangank);
		redirect('admin/mapel');
	}

	function update_mapel(){
        
		$kode=strip_tags($this->input->post('kode'));
		$mapel=strip_tags($this->input->post('namamapel'));
        $keterangan=strip_tags($this->input->post('keterangan'));
		$this->m_mapel->update_mapel($kode,$mapel,$keterangan);
		echo $this->session->set_flashdata('msg','info');
		redirect('admin/mapel');
        
	}
    function update_kelas(){
		$id=$this->input->post('kode');
		$kelas=$this->input->post('namakelas');
		$keterangank = $this->input->post('keterangank');
		$this->m_mapel->update_kelas($id, $kelas, $keterangank);
		redirect('admin/mapel');
	}
	function hapus_mapel(){
		$kode=strip_tags($this->input->post('kode'));
		$this->m_mapel->hapus_mapel($kode);
		echo $this->session->set_flashdata('msg','success-hapus');
		redirect('admin/mapel');
	}

	function hapus_kelas(){
		$kode = $this->input->post('kode');
		$this->m_mapel->hapus_kelas($kode);
		redirect('admin/mapel');
	}

}
