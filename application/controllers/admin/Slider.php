<?php
class Slider extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('m_album');
		$this->load->model('m_galeri');
		$this->load->model('m_pengguna');
		$this->load->library('upload');
	}


	function index(){

		if($this->session->userdata('pengguna_level')=='1'){
			$this->data['data']=$this->m_galeri->get_all_slider();
			$this->data['brosur']=$this->m_galeri->get_brosur();
			$this->data['biaya']=$this->m_galeri->get_biaya();
			$this->data['breadcrumb2']  = 'Brosur Pendaftaran';
			$this->data['breadcrumb3']  = 'Brosur Biaya Pendidikan';
			$this->data['breadcrumb']  = 'Data / File Slider Halaman depan User';
				
			$this->data['main_view']   = 'admin/v_slider';
				
			$this->load->view('theme/admintemplate',$this->data);
		} else{
			redirect('login');
		}
			
	}

	function ganti_brosur() {
		// Upload file
		$config['upload_path'] = './assets/images/'; // Change the path according to your requirement
		$config['allowed_types'] = 'pdf|jpg|jpeg|png'; // Add more file types if necessary
		$config['max_size'] = 10240; // Set the maximum file size in kilobytes
		$config['overwrite'] = TRUE; // Overwrite existing file if exists
		$this->upload->initialize($config);
	
		if ($this->upload->do_upload('filebrosur')) {
			// If upload is successful, get file name and save to database
			$data = array('upload_data' => $this->upload->data());
			$file_name = $data['upload_data']['file_name'];
	
			// Call model to update database
			$this->m_galeri->update_brosur($file_name);
			redirect('admin/slider');
		} else {
			// Redirect to the same page
			redirect('admin/slider');
		}
	}
	function ganti_biaya() {
		// Upload file
		$config['upload_path'] = './assets/images/'; // Change the path according to your requirement
		$config['allowed_types'] = 'pdf|jpg|jpeg|png'; // Add more file types if necessary
		$config['max_size'] = 10240; // Set the maximum file size in kilobytes
		$config['overwrite'] = TRUE; // Overwrite existing file if exists
		$this->upload->initialize($config);
	
		if ($this->upload->do_upload('filebiaya')) {
			// If upload is successful, get file name and save to database
			$data = array('upload_data' => $this->upload->data());
			$file_name = $data['upload_data']['file_name'];
	
			// Call model to update database
			$this->m_galeri->update_biaya($file_name);
			redirect('admin/slider');
		} else {
			// Redirect to the same page
			redirect('admin/slider');
		}
	}
	
	
	function simpan_slider(){
				$config['upload_path'] = './assets/images/'; //path folder
	            $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
	            $config['encrypt_name'] = TRUE; //nama yang terupload nantinya

	            $this->upload->initialize($config);
	            if(!empty($_FILES['filefoto']['name']))
	            {
	                if ($this->upload->do_upload('filefoto'))
	                {
	                        $gbr = $this->upload->data();
	                        //Compress Image
	                        $config['image_library']='gd2';
	                        $config['source_image']='./assets/images/'.$gbr['file_name'];
	                        $config['create_thumb']= FALSE;
	                        $config['maintain_ratio']= FALSE;
	                        $config['quality']= '60%';
	                        $config['width']= 500;
	                        $config['height']= 400;
	                        $config['new_image']= './assets/images/'.$gbr['file_name'];
	                        $this->load->library('image_lib', $config);
	                        $this->image_lib->resize();

	                        $gambar=$gbr['file_name'];
	                        $judul=strip_tags($this->input->post('xjudul'));
							$deskripsi=$this->input->post('xdeskripsi');
							$kode=$this->session->userdata('idadmin');
							$user=$this->m_pengguna->get_pengguna_login($kode);
							$p=$user->row_array();
							$user_id=$p['pengguna_id'];
							$user_nama=$p['pengguna_nama'];
							$this->m_galeri->simpan_slider($judul,$gambar,$user_id,$deskripsi);
							echo $this->session->set_flashdata('msg','success');
							redirect('admin/slider');
					}else{
	                    echo $this->session->set_flashdata('msg','warning');
	                    redirect('admin/slider');
	                }
	                 
	            }else{
					redirect('admin/slider');
				}
				
	}
	
	function update_slider(){
				
	            $config['upload_path'] = './assets/images/'; //path folder
	            $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
	            $config['encrypt_name'] = TRUE; //nama yang terupload nantinya

	            $this->upload->initialize($config);
	            if(!empty($_FILES['filefoto']['name']))
	            {
	                if ($this->upload->do_upload('filefoto'))
	                {
	                        $gbr = $this->upload->data();
	                        //Compress Image
	                        $config['source_image']='./assets/images/'.$gbr['file_name'];
	                        $config['create_thumb']= FALSE;
	                        $config['maintain_ratio']= FALSE;
	                        $config['quality']= '60%';
	                        $config['width']= 500;
	                        $config['height']= 400;
	                        $config['new_image']= './assets/images/'.$gbr['file_name'];
	                        $this->load->library('image_lib', $config);
	                        $this->image_lib->resize();

	                        $gambar=$gbr['file_name'];
	                        $id=$this->input->post('id');
	                        $judul=strip_tags($this->input->post('xjudul'));
							$deskripsi=$this->input->post('xdeskripsi');
							$images=$this->input->post('gambar');
							$path='./assets/images/'.$images;
							if (file_exists($path) && is_writable($path)) {
								unlink($path);
								echo 'Gambar lama telah dihapus!';
							} else {
								echo 'Tidak dapat menghapus gambar lama.';
							}
							$kode=$this->session->userdata('idadmin');
							$user=$this->m_pengguna->get_pengguna_login($kode);
							$p=$user->row_array();
							$user_id=$p['pengguna_id'];
							$user_nama=$p['pengguna_nama'];
							$this->m_galeri->update_slider($id,$judul,$user_id,$gambar,$deskripsi);
							echo $this->session->set_flashdata('msg','info');
							redirect('admin/slider');
	                    
	                }else{
	                    echo $this->session->set_flashdata('msg','warning');
	                    redirect('admin/slider');
	                }
	                
	            }else{
							$id=$this->input->post('id');
	                        $judul=strip_tags($this->input->post('xjudul'));
							$deskripsi=$this->input->post('xdeskripsi');
							$kode=$this->session->userdata('idadmin');
							$user=$this->m_pengguna->get_pengguna_login($kode);
							$p=$user->row_array();
							$user_id=$p['pengguna_id'];
							$user_nama=$p['pengguna_nama'];
							$this->m_galeri->update_slider_tanpa_img($id,$judul,$user_id,$deskripsi);
							echo $this->session->set_flashdata('msg','info');
							redirect('admin/slider');
	            } 

	}

	function hapus_slider(){
		$id=$this->input->post('id');
		$gambar=$this->input->post('gambar');
		$judul=$this->input->post('judul');
		$deskripsi=$this->input->post('deskripsi');
		$path='./assets/images/'.$gambar;
		unlink($path);
		$this->m_galeri->hapus_slider($id);
		echo $this->session->set_flashdata('msg','success-hapus');
		redirect('admin/slider');
	}

}