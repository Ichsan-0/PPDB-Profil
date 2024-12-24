<?php
class About extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->model('m_pengunjung');
        $this->load->model('m_data_sekolah');
        $this->m_pengunjung->count_visitor();
    }

    public function sambutan() {
        $this->load_data(1, 'Sambutan Kepala Sekolah', 'depan/v_sambutan');
    }

    public function visi_misi() {
        $this->load_data(2, 'Visi & Misi', 'depan/v_visi_misi');
    }

    public function struktur() {
        $this->load_data(3, 'Struktur Organisasi', 'depan/v_struktur');
    }

    private function load_data($id, $breadcrumb, $view) {
        $this->data['main_view'] = $view;
        $this->data['profil_sekolah'] = $this->m_data_sekolah->get_data_by_id($id);
        $this->data['breadcrumb'] = $breadcrumb;
        $this->load->view('theme/template', $this->data);
    }
}
