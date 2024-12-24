<?php
class Agenda extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('m_agenda');
		$this->load->library('upload');
		$this->load->helper('download');
	}


	function index(){
		if($this->session->userdata('pengguna_level')=='1'){
			$this->data['data']=$this->m_agenda->get_all_agenda();
			
			$this->data['breadcrumb']  = 'Data Agenda Sekolah';
				
			$this->data['main_view']   = 'admin/v_agenda';
				
			$this->load->view('theme/admintemplate',$this->data);
		} else {
			redirect('login');
		}
	}

	function download(){
		$agenda_id = $this->uri->segment(4);
		$get_db = $this->m_agenda->get_file_byid($agenda_id);
		
		if ($get_db) {
			$file = $get_db->agenda_file;
			$path = './assets/agenda/' . $file;
	
			if (file_exists($path)) {
				$data = file_get_contents($path);
				force_download($file, $data);
			} else {
				echo 'File not found!';
			}
		} else {
			echo 'Record not found!';
		}
	}
	
	
	
	function simpan_agenda(){
		$config['upload_path'] = './assets/agenda/';
		$config['allowed_types'] = 'pdf|jpg|png|jpeg';
		$config['encrypt_name'] = TRUE;
		$this->upload->initialize($config);
		
		$pengguna_id = $this->session->userdata('pengguna_id');
		$nama_agenda = strip_tags($this->input->post('xnama_agenda'));
		$string   = preg_replace('/[^a-zA-Z0-9 \&%|{.}=,?!*()"-_+$@;<>\']/', '', $nama_agenda);
		$trim     = trim($string);
		$slug     = strtolower(str_replace(" ", "-", $trim));
		$deskripsi = $this->input->post('xdeskripsi');
		$mulai = date('Y-m-d', strtotime($this->input->post('xmulai')));
		$selesai = date('Y-m-d', strtotime($this->input->post('xselesai')));
		$tempat = $this->input->post('xtempat');
		$waktu = $this->input->post('xwaktu');
		$keterangan = $this->input->post('xketerangan');
	
		if (!empty($_FILES['fileagenda']['name'])) {
			if ($this->upload->do_upload('fileagenda')) {
				$gbr = $this->upload->data();
				$file = $gbr['file_name'];
			} else {
				echo "Upload Error: " . $this->upload->display_errors();
				$this->session->set_flashdata('msg', 'warning');
				redirect('admin/agenda');
				return; // Menghentikan eksekusi fungsi jika terjadi kesalahan upload
			}
		} else {
			$file = NULL; // Tidak ada file yang diunggah
		}
	
		$this->m_agenda->simpan_agenda($nama_agenda, $deskripsi, $mulai, $selesai, $tempat, $waktu, $keterangan, $file, $pengguna_id, $slug);
		echo $this->session->set_flashdata('msg', 'success');
		redirect('admin/agenda');
	}
	

	public function update_agenda(){
		$agenda_id = strip_tags($this->input->post('agenda_id'));
		$pengguna_id = $this->session->userdata('pengguna_id');
		$nama_agenda = strip_tags($this->input->post('xnama_agenda'));
		$string   = preg_replace('/[^a-zA-Z0-9 \&%|{.}=,?!*()"-_+$@;<>\']/', '', $nama_agenda);
		$trim     = trim($string);
		$slug     = strtolower(str_replace(" ", "-", $trim));
		$deskripsi = $this->input->post('xdeskripsi');
		$mulai = date('Y-m-d', strtotime($this->input->post('xmulai')));
		$selesai = date('Y-m-d', strtotime($this->input->post('xselesai')));
		$tempat = $this->input->post('xtempat');
		$waktu = $this->input->post('xwaktu');
		$keterangan = $this->input->post('xketerangan');
	
		$old_file = $this->m_agenda->get_agenda_file($agenda_id);
	
		$file = NULL;
	
		// Jika ada file baru diupload
		if (!empty($_FILES['agenda_file']['name'])) {
			$config['upload_path'] = './assets/agenda/';
			$config['allowed_types'] = 'pdf|jpg|png|jpeg';
			$config['encrypt_name'] = TRUE;
			$this->upload->initialize($config);
	
			if ($this->upload->do_upload('agenda_file')) {
				$gbr = $this->upload->data();
				$file = $gbr['file_name'];
	
				// Hapus file lama jika ada
				if (!empty($old_file)) {
					$old_file_path = './assets/agenda/' . $old_file;
					if (file_exists($old_file_path)) {
						unlink($old_file_path);
					}
				}
			} else {
				echo $this->upload->display_errors();
            	echo $this->session->set_flashdata('msg', 'warning');
				redirect('admin/agenda');
			}
		} else {
			// Jika tidak ada file baru diupload, tetap gunakan file lama
			$file = $old_file;
		}
	
		// Memanggil fungsi update_agenda dari model
		$this->m_agenda->update_agenda($agenda_id, $nama_agenda, $deskripsi, $mulai, $selesai, $tempat, $waktu, $keterangan, $file, $pengguna_id, $slug);
	
		echo $this->session->set_flashdata('msg', 'success');
		redirect('admin/agenda');
	}
	


	public function hapus_agenda() {
			// Ambil file yang akan dihapus
			$agenda_id = $this->input->post('agenda_id');
			$file_to_delete = $this->m_agenda->get_agenda_file($agenda_id);
		
			// Hapus file jika ada
			if (!empty($file_to_delete)) {
				$file_path = './assets/agenda/' . $file_to_delete;
				if (file_exists($file_path)) {
					unlink($file_path);
				}
			}
		
			// Hapus data dari database
			$this->m_agenda->hapus_agenda($agenda_id);
		
			// Redirect atau tampilkan pesan sukses
			echo $this->session->set_flashdata('msg', 'success');
			redirect('admin/agenda');
	}
		


}