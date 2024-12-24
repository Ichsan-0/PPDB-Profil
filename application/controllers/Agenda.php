<?php
class Agenda extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('m_agenda');
		$this->load->model('m_pengunjung');
		$this->m_pengunjung->count_visitor();
	}
	function index(){
		$jum=$this->m_agenda->agenda();
        $page=$this->uri->segment(3);
        if(!$page):
            $offset = 0;
        else:
            $offset = $page;
        endif;
        $limit=7;
        $config['base_url'] = base_url() . 'agenda/index/';
            $config['total_rows'] = $jum->num_rows();
            $config['per_page'] = $limit;
            $config['uri_segment'] = 3;
						//Tambahan untuk styling
	          $config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
	          $config['full_tag_close']   = '</ul></nav></div>';
	          $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
	          $config['num_tag_close']    = '</span></li>';
	          $config['cur_tag_open']     = '<li class="page-item"><span class="page-link">';
	          $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
	          $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
	          $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
	          $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
	          $config['prev_tagl_close']  = '</span>Next</li>';
	          $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
	          $config['first_tagl_close'] = '</span></li>';
	          $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
	          $config['last_tagl_close']  = '</span></li>';
            $config['first_link'] = 'Awal';
            $config['last_link'] = 'Akhir';
            $config['next_link'] = 'Next >>';
            $config['prev_link'] = '<< Prev';
            $this->pagination->initialize($config);
            $this->data['page'] =$this->pagination->create_links();
		      $this->data['data']=$this->m_agenda->agenda_perpage($offset,$limit);
        
            $this->data['main_view']   = 'depan/v_agenda';
        
            $this->load->view('theme/template',$this->data);
        
		      
	}

	function detail($slugs){
        
		$slug=htmlspecialchars($slugs,ENT_QUOTES);
		$query = $this->db->get_where('tbl_agenda', array('agenda_slug' => $slug));
		if($query->num_rows() > 0){
			$b=$query->row_array();
			$kode=$b['agenda_id'];
			$data=$this->m_agenda->get_agenda_by_kode($kode);
			$row=$data->row_array();
			$this->data['id']=$row['agenda_id'];
			$this->data['agenda_nama']=$row['agenda_nama'];
			$this->data['tanggal']=$row['tanggal'];
			$this->data['agenda_deskripsi'] =$row['agenda_deskripsi'];
			$this->data['mulai']=$row['mulai'];
			$this->data['selesai']=$row['selesai'];
			$this->data['agenda_tempat']=$row['agenda_tempat'];
			$this->data['agenda_waktu']=$row['agenda_waktu'];
            $this->data['agenda_keterangan']=$row['agenda_keterangan'];
			$this->data['agenda_file']=$row['agenda_file'];
			$this->data['agenda_author']=$row['agenda_author'];
			$this->data['agenda_slug']=$row['agenda_slug'];
			$this->data['pengguna_nama']=$row['pengguna_nama'];
			$this->data['populer']=$this->db->query("SELECT *,DATE_FORMAT(agenda_mulai,'%d/%m/%Y') AS mulai FROM tbl_agenda ORDER BY agenda_id DESC LIMIT 4");
			
            $this->data['main_view']   = 'depan/v_agenda_detail';
        
            $this->load->view('theme/template',$this->data);
            
		}else{
			redirect('artikel');
		}
	}

	function search(){
        $keyword=str_replace("'", "", htmlspecialchars($this->input->get('keyword',TRUE),ENT_QUOTES));
        $query=$this->m_agenda->cari_agenda($keyword);
				if($query->num_rows() > 0){
                    
					$this->data['data']=$query;
					$this->data['populer']=$this->db->query("SELECT *,DATE_FORMAT(agenda_mulai,'%d/%m/%Y') AS mulai FROM tbl_agenda ORDER BY agenda_id DESC LIMIT 4");
                    
                    $this->data['main_view']   = 'depan/v_agenda';
        
             $this->load->view('theme/template',$this->data);
                    
          
                    
	 		 }else{
                    
				 echo $this->session->set_flashdata('msg','<div class="alert alert-danger">Tidak dapat menemukan agenda dengan kata kunci <b>'.$keyword.'</b></div>');
				 redirect('agenda');
                    
			 }
    }

}
