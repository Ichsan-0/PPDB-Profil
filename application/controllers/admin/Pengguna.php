<?php
class Pengguna extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('m_pengguna');
		$this->load->library('upload');
	}


	function index(){
		
		if($this->session->userdata('pengguna_level')=='1'){
		$kode=$this->session->userdata('idadmin');
        
		$this->data['user']=$this->m_pengguna->get_pengguna_login($kode);
		$this->data['data']=$this->m_pengguna->get_all_pengguna();
        $this->data['breadcrumb']  = 'Data Account User';
            
        $this->data['main_view']   = 'admin/v_pengguna';
            
        $this->load->view('theme/admintemplate',$this->data);
		} else{
			redirect('login');
		}
		
	}

	function simpan_pengguna(){
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
	                        $config['width']= 300;
	                        $config['height']= 300;
	                        $config['new_image']= './assets/images/'.$gbr['file_name'];
	                        $this->load->library('image_lib', $config);
	                        $this->image_lib->resize();

	                        $gambar=$gbr['file_name'];
	                        $nama=$this->input->post('xnama');
	                        $jenkel=$this->input->post('xjenkel');
	                        $username=$this->input->post('xusername');
	                        $password=$this->input->post('xpassword');
                            $konfirm_password=$this->input->post('xpassword2');
                            $email=$this->input->post('xemail');
                            $nohp=$this->input->post('xkontak');
							$level=$this->input->post('xlevel');
     						if ($password <> $konfirm_password) {
     							echo $this->session->set_flashdata('msg','error');
	               				redirect('admin/pengguna');
     						}else{
	               				$this->m_pengguna->simpan_pengguna($nama,$jenkel,$username,$password,$email,$nohp,$level,$gambar);
	                    		echo $this->session->set_flashdata('msg','success');
	               				redirect('admin/pengguna');
	               				
	               			}
	                    
	                }else{
	                    echo $this->session->set_flashdata('msg','warning');
	                    redirect('admin/pengguna');
	                }
	                 
	            }else{
	            	$nama=$this->input->post('xnama');
	                $jenkel=$this->input->post('xjenkel');
	                $username=$this->input->post('xusername');
	                $password=$this->input->post('xpassword');
                    $konfirm_password=$this->input->post('xpassword2');
                    $email=$this->input->post('xemail');
                    $nohp=$this->input->post('xkontak');
					$level=$this->input->post('xlevel');
	            	if ($password <> $konfirm_password) {
     					echo $this->session->set_flashdata('msg','error');
	               		redirect('admin/pengguna');
     				}else{
	               		$this->m_pengguna->simpan_pengguna_tanpa_gambar($nama,$jenkel,$username,$password,$email,$nohp,$level);
	                    echo $this->session->set_flashdata('msg','success');
	               		redirect('admin/pengguna');
	               	}
	            } 

	}

	function update_pengguna() {
		$config['upload_path'] = './assets/images/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg|bmp';
		$config['encrypt_name'] = TRUE;
	
		$this->upload->initialize($config);
	
		$kode = $this->input->post('kode');
		$nama = $this->input->post('xnama');
		$jenkel = $this->input->post('xjenkel');
		$username = $this->input->post('xusername');
		$password = $this->input->post('xpassword');
		$konfirm_password = $this->input->post('xpassword2');
		$email = $this->input->post('xemail');
		$nohp = $this->input->post('xkontak');
		$level = $this->input->post('xlevel');
	
		// Menghapus gambar lama jika ada gambar baru diupload
		$old_image = $this->m_pengguna->get_user_image($kode);
		if (!empty($_FILES['filefoto']['name'])) {
			$this->delete_old_image($old_image);
		}
	
		if (!empty($_FILES['filefoto']['name']) && $this->upload->do_upload('filefoto')) {
			$gbr = $this->upload->data();
			$gambar = $gbr['file_name'];
	
			// Compress Image
			$this->compress_image($gambar);
	
			// Update dengan password
			if (empty($password) && empty($konfirm_password)) {
				$this->m_pengguna->update_pengguna_tanpa_pass($kode, $nama, $jenkel, $username, $password, $email, $nohp, $level, $gambar);
			}
			// Update dengan password baru
			elseif ($password === $konfirm_password) {
				$this->m_pengguna->update_pengguna($kode, $nama, $jenkel, $username, $password, $email, $nohp, $level, $gambar);
			} else {
				echo $this->session->set_flashdata('msg', 'error');
				redirect('admin/pengguna');
			}
			redirect('admin/pengguna');
		} else {
			// Update tanpa gambar
			if (empty($password) && empty($konfirm_password)) {
				$this->m_pengguna->update_pengguna_tanpa_pass_dan_gambar($kode, $nama, $jenkel, $username, $password, $email, $nohp, $level);
			}
			// Update dengan password baru tanpa gambar
			elseif ($password === $konfirm_password) {
				$this->m_pengguna->update_pengguna_tanpa_gambar($kode, $nama, $jenkel, $username, $password, $email, $nohp, $level);
			} else {
				echo $this->session->set_flashdata('msg', 'error');
				redirect('admin/pengguna');
			}
			redirect('admin/pengguna');
		}
	}
	function compress_image($gambar) {
		$config['image_library'] = 'gd2';
		$config['source_image'] = './assets/images/' . $gambar;
		$config['create_thumb'] = FALSE;
		$config['maintain_ratio'] = FALSE;
		$config['quality'] = '60%';
		$config['width'] = 300;
		$config['height'] = 300;
		$config['new_image'] = './assets/images/' . $gambar;
	
		$this->load->library('image_lib', $config);
		$this->image_lib->resize();
	}	
	
	// Fungsi untuk menghapus gambar lama
	function delete_old_image($gambar) {
		$image_path = './assets/images/' . $gambar;
		if (file_exists($image_path)) {
			unlink($image_path);
		}
	}
	

	function hapus_pengguna(){
		$kode = $this->input->post('kode'); // Get user ID from the POST request
	
		// Get the user's image filename
		$user_image = $this->m_pengguna->get_user_image($kode);
	
		// Delete the user's image from the server
		$this->delete_old_image($user_image);
	
		// Delete the user from the database
		$this->m_pengguna->hapus_pengguna($kode);
	
		echo $this->session->set_flashdata('msg', 'success');
		redirect('admin/pengguna');
	}
	



}