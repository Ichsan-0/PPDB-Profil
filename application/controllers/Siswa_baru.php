<?php
class Siswa_baru extends CI_Controller{
    
	function __construct(){
		parent::__construct();
		$this->load->model('m_video');
		$this->load->helper('download');
		$this->load->model('m_pengunjung');
		$this->load->model('m_siswa');
		$this->m_pengunjung->count_visitor();
	}
    
	function index(){
        
        $this->data['main_view']   = 'depan/v_siswa_baru';
        
		$this->data['data']=$this->m_video->get_all_video();
		$this->data['data']=$this->m_siswa->get_all_kelas();
        
		$this->load->view('theme/template',$this->data);
        
	}

	public function simpan() {
		// Ambil data dari formulir
		$data_siswa = array(
			'nama' => $this->input->post('nama'),
			'nisn' => $this->input->post('nisn'),
			'sekolah_asal' => $this->input->post('sekolah'),
			'alamat_ktp' => $this->input->post('alamat_ktp'),
			'username' => $this->input->post('username'),
			'password' => $this->input->post('password'),
		);
	
		// Check if NISN or username already exists
		if ($this->m_siswa->is_nisn_exists($data_siswa['nisn']) || $this->m_siswa->is_username_exists($data_siswa['username'])) {
			$response = array(
				'success' => false,
				'message' => 'NISN atau Username telah digunakan Sebelumnya.',
			);
			echo json_encode($response);
			return;
		} else {
			// Panggil model untuk menyimpan data
			$insert_id_siswa = $this->m_siswa->simpan_data($data_siswa);
	
			$id_siswa = $this->db->insert_id();
			$tahun_sekarang = date('Y');
			$nomor_pendaftaran = 'PPDB' . $tahun_sekarang . $data_siswa['nisn'] . $id_siswa;
			$this->m_siswa->update_nomor_pendaftaran($id_siswa, $nomor_pendaftaran);

			$data_pengguna = array(
				'pengguna_status' => $id_siswa,
				'pengguna_nama' => $this->input->post('nama'),
				'pengguna_username' => $this->input->post('username'),
				'pengguna_password' => md5($this->input->post('password')),
				'pengguna_level' => 2,
			);
	
			$insert_id_pengguna = $this->m_siswa->simpan_data_pengguna($data_pengguna);
	
			// Simpan data yang akan ditampilkan di modal dalam format JSON
			$response = array(
				'success' => true,
				'username' => $data_siswa['username'],
				'password' => $this->input->post('password'),
			);
	
			echo json_encode($response);
		}
	}
	
	
	

}
