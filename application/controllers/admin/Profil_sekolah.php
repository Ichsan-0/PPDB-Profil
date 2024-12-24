<?php
class Profil_sekolah extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->model('m_data_sekolah');
        $this->load->library('upload');
        $this->load->library('form_validation');
    }

    public function index() {
        if ($this->session->userdata('pengguna_level') == '1') {
            $data_sekolah = $this->m_data_sekolah->get_data_by_id(1); // Sambutan ID = 1
            $this->data['data_sekolah'] = $data_sekolah;
            $this->data['breadcrumb'] = 'Kata Sambutan Kepala Sekolah';
            $this->data['main_view'] = 'admin/v_sambutan';
            $this->load->view('theme/admintemplate', $this->data);
        } else {
            redirect('login');
        }
    }

    public function visi_misi() {
        if ($this->session->userdata('pengguna_level') == '1') {
            $data_sekolah = $this->m_data_sekolah->get_data_by_id(2); // Visi Misi ID = 2
            $this->data['data_sekolah'] = $data_sekolah;
            $this->data['breadcrumb'] = 'Visi & Misi';
            $this->data['main_view'] = 'admin/v_visi_misi';
            $this->load->view('theme/admintemplate', $this->data);
        } else {
            redirect('login');
        }
    }
    public function struktur() {
        if ($this->session->userdata('pengguna_level') == '1') {
            $data_sekolah = $this->m_data_sekolah->get_data_by_id(3); // Struktur ID = 3
            $this->data['data_sekolah'] = $data_sekolah;
            $this->data['breadcrumb'] = 'Struktur Organisasi';
            $this->data['main_view'] = 'admin/v_struktur';
            $this->load->view('theme/admintemplate', $this->data);
        } else {
            redirect('login');
        }
    }

    private function handle_edit($id, $success_message, $redirect_url) {
        if ($this->session->userdata('pengguna_level') != '1') {
            redirect('login');
        }

        if ($this->input->server('REQUEST_METHOD') == 'POST') {
            // Validasi form
            $this->form_validation->set_rules('isi_tulisan', 'Isi Tulisan', 'required');

            if ($this->form_validation->run() == TRUE) {
                $data = array(
                    'isi_tulisan' => $this->input->post('isi_tulisan', FALSE),
                    'tanggal' => date('Y-m-d H:i:s') // Menambahkan timestamp
                );

                // Cek apakah ada file baru yang diunggah
                if ($_FILES['file_foto']['error'] !== UPLOAD_ERR_NO_FILE && $_FILES['file_foto']['size'] > 0) {
                    $config['upload_path'] = './style/img/';
                    $config['allowed_types'] = 'jpg|jpeg|png';
                    $config['max_size'] = 2048; // 2MB

                    $this->upload->initialize($config);

                    if ($this->upload->do_upload('file_foto')) {  // Pastikan nama input file sesuai
                        $upload_data = $this->upload->data();
                        $data['file_foto'] = $upload_data['file_name'];

                        // Hapus file lama jika ada
                        $old_file = $this->m_data_sekolah->get_current_file_by_id($id);
                        if (!empty($old_file) && file_exists('./style/img/' . $old_file)) {
                            unlink('./style/img/' . $old_file);
                        }

                        // Set flashdata sukses
                        $this->session->set_flashdata('success', $success_message);
                    } else {
                        // Set flashdata error
                        $this->session->set_flashdata('error', $this->upload->display_errors());
                        redirect($redirect_url);
                    }
                } else {
                    // Set flashdata sukses jika tidak ada file baru yang diunggah
                    $this->session->set_flashdata('success', $success_message);
                }

                $this->m_data_sekolah->update_data_by_id($id, $data);
                redirect($redirect_url);
            }
        }

        redirect($redirect_url);
    }

    public function edit_sambutan() {
        $this->handle_edit(1, 'Sambutan kepala sekolah berhasil diperbarui', 'admin/profil_sekolah');
    }

    public function edit_visi() {
        $this->handle_edit(2, 'Visi dan misi berhasil diperbarui', 'admin/profil_sekolah/visi_misi');
    }
    public function edit_struktur() {
        $this->handle_edit(3, 'Struktur organisasi berhasil diperbarui', 'admin/profil_sekolah/struktur');
    }
}
