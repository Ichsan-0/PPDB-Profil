<?php
class Pengumuman extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('m_pengumuman');
		$this->load->library('upload');
		$this->load->helper('download');
	}


	function index(){
        
		if($this->session->userdata('pengguna_level')=='1'){
		$this->data['data']=$this->m_pengumuman->get_all_pengumuman();      
		
        
        $this->data['breadcrumb']  = 'Data Pengumuman Sekolah';
            
        $this->data['main_view']   = 'admin/v_pengumuman';
            
        $this->load->view('theme/admintemplate',$this->data);
		} else {
			redirect('login');
		}
	}

	public function download(){
		$id = $this->uri->segment(4);
		$get_db = $this->m_pengumuman->get_file_byid($id);
	
		if($get_db && $get_db->pengumuman_file !== null && $get_db->pengumuman_file !== ''){
			$file = $get_db->pengumuman_file;
			$path = './assets/pengumuman/'.$file;  // Perbaikan path
	
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
	

	function simpan_pengumuman(){
		$config['upload_path'] = './assets/pengumuman/';
		$config['allowed_types'] = 'pdf|jpg|png|jpeg';
		$config['encrypt_name'] = TRUE;
		$this->upload->initialize($config);

		$pengguna_id = $this->session->userdata('pengguna_id');
		$judul=strip_tags($this->input->post('xjudul'));
		$string   = preg_replace('/[^a-zA-Z0-9 \&%|{.}=,?!*()"-_+$@;<>\']/', '', $judul);
		$trim     = trim($string);
		$slug     = strtolower(str_replace(" ", "-", $trim));
		$deskripsi= $this->input->post('xdeskripsi');
		$tanggal = date('Y-m-d', strtotime($this->input->post('xtanggal')));

		if (!empty($_FILES['filepengumuman']['name'])) {
			if ($this->upload->do_upload('filepengumuman')) {
				$gbr = $this->upload->data();
				$file = $gbr['file_name'];
			} else {
				echo "Upload Error: " . $this->upload->display_errors();
				$this->session->set_flashdata('msg', 'warning');
				redirect('admin/pengumuman');
				return; // Menghentikan eksekusi fungsi jika terjadi kesalahan upload
			}
		} else {
			$file = NULL; // Tidak ada file yang diunggah
		}
	

		$this->m_pengumuman->simpan_pengumuman($judul,$slug,$deskripsi,$tanggal,$file,$pengguna_id);
		echo $this->session->set_flashdata('msg','success');
		redirect('admin/pengumuman');
	}

	function update_pengumuman(){
		$pengumuman_id=strip_tags($this->input->post('pengumuman_id'));
		$pengguna_id = $this->session->userdata('pengguna_id');
		$judul=strip_tags($this->input->post('xjudul'));
		$string   = preg_replace('/[^a-zA-Z0-9 \&%|{.}=,?!*()"-_+$@;<>\']/', '', $judul);
		$trim     = trim($string);
		$slug     = strtolower(str_replace(" ", "-", $trim));
		$deskripsi=$this->input->post('xdeskripsi');
		$tanggal = date('Y-m-d', strtotime($this->input->post('xtanggal')));

		$old_file = $this->m_pengumuman->get_pengumuman_file($pengumuman_id);
	
		$file = NULL;
		// Jika ada file baru diupload
		if (!empty($_FILES['filepengumuman']['name'])) {
			$config['upload_path'] = './assets/pengumuman/';
			$config['allowed_types'] = 'pdf|jpg|png|jpeg';
			$config['encrypt_name'] = TRUE;
			$this->upload->initialize($config);
	
			if ($this->upload->do_upload('filepengumuman')) {
				$gbr = $this->upload->data();
				$file = $gbr['file_name'];
	
				// Hapus file lama jika ada
				if (!empty($old_file)) {
					$old_file_path = './assets/pengumuman/' . $old_file;
					if (file_exists($old_file_path)) {
						unlink($old_file_path);
					}
				}
			} else {
				echo $this->upload->display_errors();
            	echo $this->session->set_flashdata('msg', 'warning');
				redirect('admin/pengumuman');
			}
		} else {
			// Jika tidak ada file baru diupload, tetap gunakan file lama
			$file = $old_file;
		}

		$this->m_pengumuman->update_pengumuman($pengumuman_id,$judul,$deskripsi,$slug,$tanggal,$pengguna_id,$file);
		echo $this->session->set_flashdata('msg','info');
		redirect('admin/pengumuman');
	}

	public function hapus_pengumuman() {
			// Ambil file yang akan dihapus
			$pengumuman_id = $this->input->post('pengumuman_id');
			$file_to_delete = $this->m_pengumuman->get_pengumuman_file($pengumuman_id);
		
			// Hapus file jika ada
			if (!empty($file_to_delete)) {
				$file_path = './assets/pengumuman/' . $file_to_delete;
				if (file_exists($file_path)) {
					unlink($file_path);
				}
			}
		
			// Hapus data dari database
			$this->m_pengumuman->hapus_pengumuman($pengumuman_id);
		
			// Redirect atau tampilkan pesan sukses
			echo $this->session->set_flashdata('msg', 'success');
			redirect('admin/pengumuman');
	}
		

}