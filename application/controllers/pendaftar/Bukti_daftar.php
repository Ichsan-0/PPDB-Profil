<?php

defined('BASEPATH') OR exit('No direct script access allowed');

use \Mpdf\Mpdf;

class Bukti_daftar extends CI_Controller{
    function __construct(){
        parent::__construct();

        $this->load->model('m_pendaftar');
    }
    
    function index() {
        if ($this->session->userdata('pengguna_level') == 2) {
    
            // Mengambil nama pengguna dari session
            $pengguna_status = $this->session->userdata('pengguna_status');
            $query_result = $this->m_pendaftar->get_data_peserta($pengguna_status);
    
            // Memasukkan data peserta ke dalam variabel
            $this->data['data_peserta'] = $query_result->row();
            $this->data['foto'] = $this->m_pendaftar->get_peserta_foto($pengguna_status);
            // Set data untuk view
            $this->data['breadcrumb'] = 'Bukti Daftar';
            $this->data['main_view'] = 'pendaftar/v_bukti_daftar';
    
            // Menampilkan view dengan template
            $this->load->view('theme/pendaftartemplate', $this->data);
        } else {
            // Jika bukan pendaftar, redirect ke halaman login
            redirect('login');
        }
    }

    public function cetak() {
    // Mengambil nama pengguna dari session
    $pengguna_status = $this->session->userdata('pengguna_status');
    $query_result = $this->m_pendaftar->get_data_formulir($pengguna_status);
    $tahun_ajaran_result = $this->m_pendaftar->get_tahun_ajaran($pengguna_status);
    // Memasukkan data peserta dan tahun ajaran ke dalam variabel
    $data_peserta = $query_result->row();
    $tahun_ajaran = $tahun_ajaran_result->row();

    // Get all pekerjaan data
    $this->data['pekerjaan'] = $this->m_pendaftar->get_all_pekerjaan()->result(); // Use ->result() to get an array of objects

    // Load the HTML content
    $html = $this->load->view('pendaftar/v_cetak_formulir', array('data_peserta' => $data_peserta, 'tahun_ajaran' => $tahun_ajaran, 'pekerjaan' => $this->data['pekerjaan']), true);
    //echo $html;
    //exit();
    // Inisialisasi objek mPDF
    $mpdf = new \Mpdf\Mpdf(['mode' => 'utf-8', 'format' => 'A4']);

    // Set margin
    $mpdf->SetMargins(5, 10, 3, 3);

    // Write HTML to mPDF
    $mpdf->WriteHTML($html);

    // Menentukan judul file PDF
    $filename = "Formulir_" . str_replace(' ', '_', $data_peserta->nama) . ".pdf";

    // Output PDF ke browser dengan judul file yang ditentukan
    $mpdf->Output($filename, \Mpdf\Output\Destination::INLINE);
}

    
}
