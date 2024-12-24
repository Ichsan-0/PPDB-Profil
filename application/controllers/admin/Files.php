<?php
class Files extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('m_files');
		$this->load->model('m_pengguna');
		$this->load->library('upload');
		$this->load->helper('download');
	}


	function index(){
		
		if($this->session->userdata('pengguna_level')=='1'|| $this->session->userdata('pengguna_level') == '3'){
		
		$this->data['data']=$this->m_files->get_all_files();

		$this->data['kelas'] = $this->m_files->get_all_kelas();
        
        $this->data['breadcrumb']  = 'Data Download Files';
            
        $this->data['main_view']   = 'admin/v_files';
            
        $this->load->view('theme/admintemplate',$this->data);
		} else{
			redirect('login');
		}
	}


	public function download(){
		$id = $this->uri->segment(4);
		$get_db = $this->m_files->get_file_byid($id);
	
		if($get_db && $get_db->file_data !== null && $get_db->file_data !== ''){
			$file = $get_db->file_data;
			$path = './assets/files/'.$file;  // Perbaikan path
	
			if (file_exists($path)) {
				$data = file_get_contents($path);
				force_download($file, $data);
			} else {
				echo 'File not found!';
			}
		} else {
			echo 'Record not found or file is empty!';
		}
	}
	
	function simpan_file(){
				$config['upload_path'] = './assets/files/'; //path folder
	            $config['allowed_types'] = 'pdf|doc|docx|ppt|pptx|zip'; //type yang dapat diakses bisa anda sesuaikan
	            $config['encrypt_name'] = TRUE; //nama yang terupload nantinya

	            $this->upload->initialize($config);
	            if(!empty($_FILES['filefoto']['name']))
	            {
	                if ($this->upload->do_upload('filefoto'))
	                {
	                        $gbr = $this->upload->data();
	                        $file=$gbr['file_name'];
							$judul=strip_tags($this->input->post('xjudul'));
							$kelas_id=$this->input->post('kelas_id');
							$deskripsi=$this->input->post('xdeskripsi');
							$oleh=strip_tags($this->input->post('xoleh'));
	
							$this->m_files->simpan_file($judul,$kelas_id,$deskripsi,$oleh,$file);
							echo $this->session->set_flashdata('msg','success');
							redirect('admin/files');
					}else{
	                    echo $this->session->set_flashdata('msg','warning');
	                    redirect('admin/files');
	                }
	                 
	            }else{
					redirect('admin/files');
				}
				
	}
	
	function update_file(){
				
	            $config['upload_path'] = './assets/files/'; //path folder
	            $config['allowed_types'] = 'pdf|doc|docx|ppt|pptx|zip'; //type yang dapat diakses bisa anda sesuaikan
	            $config['encrypt_name'] = TRUE; //nama yang terupload nantinya

	            $this->upload->initialize($config);
	            if(!empty($_FILES['filefoto']['name']))
	            {
	                if ($this->upload->do_upload('filefoto'))
	                {
	                        $gbr = $this->upload->data();
	                        $file=$gbr['file_name'];
	                        $kode=$this->input->post('kode');
	                        $judul=strip_tags($this->input->post('xjudul'));
							$deskripsi=$this->input->post('xdeskripsi');
							$oleh=strip_tags($this->input->post('xoleh'));
							$data=$this->input->post('file');
							$path='./assets/files/'.$data;
							unlink($path);
							$this->m_files->update_file($kode,$judul,$deskripsi,$oleh,$file);
							echo $this->session->set_flashdata('msg','info');
							redirect('admin/files');
	                    
	                }else{
	                    echo $this->session->set_flashdata('msg','warning');
	                    redirect('admin/files');
	                }
	                
	            }else{
						$kode=$this->input->post('kode');
	                    $judul=strip_tags($this->input->post('xjudul'));
						$deskripsi=$this->input->post('xdeskripsi');
						$oleh=strip_tags($this->input->post('xoleh'));
						$this->m_files->update_file_tanpa_file($kode,$judul,$deskripsi,$oleh);
						echo $this->session->set_flashdata('msg','info');
						redirect('admin/files');
	            } 

	}

	function hapus_file(){
		$kode=$this->input->post('kode');
		$data=$this->input->post('file');
		$path='./assets/files/'.$data;
		unlink($path);
		$this->m_files->hapus_file($kode);
		echo $this->session->set_flashdata('msg','success-hapus');
		redirect('admin/files');
	}

}