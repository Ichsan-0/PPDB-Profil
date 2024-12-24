<?php
class Upload extends CI_Controller{
	function __construct(){
		parent::__construct();
	
		$this->load->model('m_pendaftar');
        $this->load->library('upload');
	}
    
	function index() {
        if ($this->session->userdata('pengguna_level') == 2) {
            // Mendapatkan nama pengguna dari session
            $pengguna_status = $this->session->userdata('pengguna_status');
            $query_result = $this->m_pendaftar->get_data_peserta($pengguna_status);
    
            // Memasukkan data peserta ke dalam variabel
            $this->data['data_peserta'] = $query_result->row();
            // Mendapatkan data formulir
            $this->data['file_data'] = $this->m_pendaftar->get_file_data($pengguna_status);
            $tahun_ajaran_result = $this->m_pendaftar->get_tahun_ajaran($pengguna_status);
            // Mengambil baris pertama dari hasil tahun ajaran
            $tahun = $tahun_ajaran_result->row();
    
            // Set data untuk view
            $this->data['breadcrumb'] = 'Upload Data';
            $this->data['main_view'] = 'pendaftar/v_upload';
            $this->data['tahun'] = $tahun; //
    
            // Menampilkan view dengan template
            $this->load->view('theme/pendaftartemplate', $this->data);
        } else {
            // Jika bukan pendaftar, redirect ke halaman login
            redirect('login');
        }
    }
    
    public function simpan_upload() 
    {
        $allowed_types = 'gif|jpg|png|jpeg|bmp';
        $upload_path = './assets/berkas/';
        $encrypt_name = TRUE;
        $max_size = 1024; // 1 MB

        $input_files = array('foto', 'b_pendaftaran', 'kk', 'akte', 'ijazah', 'kip');

        // Mendapatkan pengguna_id dari sesi
        $pengguna_status = $this->session->userdata('pengguna_status');

        foreach ($input_files as $input_file){
            if(!empty($_FILES[$input_file]['name'])) {
                $config['upload_path'] = $upload_path;
                $config['allowed_types'] = $allowed_types;
                $config['encrypt_name'] = $encrypt_name;
                $config['max_size'] = $max_size; // batasan ukuran file

                $this->upload->initialize($config);
                if ($this->upload->do_upload($input_file)) {
                    $file_data = $this->upload->data();
    
                    // Lakukan operasi lain sesuai kebutuhan, seperti kompresi gambar, dll.
    
                    // Periksa apakah sudah ada file di tbl_pendaftaran
                    $field_name = $input_file; // field di tbl_pendaftaran yang menyimpan nama file
    
                    $existing_file = $this->m_pendaftar->get_existing_file($pengguna_status, $field_name);
    
                    if ($existing_file) {
                        // Hapus file lama dari server
                        $this->delete_old_file($existing_file[$field_name]);
                    }
    
                    // Update atau simpan nama file di tbl_pendaftaran
                    $this->m_pendaftar->update_pendaftaran_file($pengguna_status, $field_name, $file_data['file_name']);
                } else {
                    // Jika upload gagal, tampilkan pesan kesalahan
                    echo $this->session->set_flashdata('msg', 'warning');
                    redirect('pendaftar/upload');
                }
            }
        }
    
        // Tampilkan pesan sukses dan redirect ke halaman yang sesuai
        echo $this->session->set_flashdata('msg', 'success');
        redirect('pendaftar/upload');
    }

    private function delete_old_file($filename)
    {
        $file_path = './assets/berkas/' . $filename;

        if (file_exists($file_path)) {
            unlink($file_path);
        }
    }
	
}