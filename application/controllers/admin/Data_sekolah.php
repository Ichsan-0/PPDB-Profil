<?php
class Data_sekolah extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->model('m_data_sekolah');
        $this->load->library('upload');
        $this->load->library('form_validation');
    }

    public function index() {
        if ($this->session->userdata('pengguna_level') == '1') {
            $this->data['breadcrumb'] = 'Data Sekolah';
            $this->data['main_view'] = 'admin/v_data_sekolah';
            $this->load->view('theme/admintemplate', $this->data);
        } else {
            redirect('login');
        }
    }

    public function edit() {
        if ($this->session->userdata('pengguna_level') != '1') {
            redirect('login');
        }
    
        $fields_key = array(
            'nama_sekolah', 'situs_web', 'nomor_telepon', 'email', 'alamat', 'deskripsi', 
            'gmaps', 'instagram', 'facebook', 'twitter', 'youtube', 
            'nama_bank', 'no_rekening', 'nama_pemilik'
        );
    
        $data = array();
        foreach ($fields_key as $key) {
            $data[$key] = $this->input->post($key);
        }
    
        // Cek apakah ada file baru yang diunggah untuk logo sekolah
        if ($_FILES['school_logo']['error'] !== UPLOAD_ERR_NO_FILE && $_FILES['school_logo']['size'] > 0) {
            $config['upload_path'] = './style/img/';
            $config['allowed_types'] = 'jpg|jpeg|png';
            $config['max_size'] = 2048; // 2MB
    
            $this->upload->initialize($config);
    
            if ($this->upload->do_upload('school_logo')) {
                $upload_data = $this->upload->data();
                $data['school_logo'] = $upload_data['file_name'];
    
                // Hapus file lama jika ada
                $old_logo = get_settings('school_logo');
                if (!empty($old_logo) && file_exists('./style/img/' . $old_logo)) {
                    unlink('./style/img/' . $old_logo);
                }
            } else {
                // Set flashdata error
                $this->session->set_flashdata('error', $this->upload->display_errors());
                redirect('admin/data_sekolah');
            }
        }
    
        // Cek apakah ada file baru yang diunggah untuk kop surat
        if ($_FILES['kop_surat']['error'] !== UPLOAD_ERR_NO_FILE && $_FILES['kop_surat']['size'] > 0) {
            $config['upload_path'] = './style/img/';
            $config['allowed_types'] = 'jpg|jpeg|png';
            $config['max_size'] = 2048; // 2MB
    
            $this->upload->initialize($config);
    
            if ($this->upload->do_upload('kop_surat')) {
                $upload_data = $this->upload->data();
                $data['kop_surat'] = $upload_data['file_name'];
    
                // Hapus file lama jika ada
                $old_kop_surat = get_settings('kop_surat');
                if (!empty($old_kop_surat) && file_exists('./style/img/' . $old_kop_surat)) {
                    unlink('./style/img/' . $old_kop_surat);
                }
            } else {
                // Set flashdata error
                $this->session->set_flashdata('error', $this->upload->display_errors());
                redirect('admin/data_sekolah');
            }
        }
    
        // Update data sekolah hanya jika ada perubahan
        if (!empty($data)) {
            $this->m_data_sekolah->update_data_sekolah($data);
            $this->session->set_flashdata('success', 'Data sekolah berhasil diperbarui');
        }
    
        redirect('admin/data_sekolah');
    }
    
    
    
}
