<?php

defined('BASEPATH') OR exit('No direct script access allowed');

use \Mpdf\Mpdf;

class Ppdb extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('m_ppdb');
		$this->load->library('upload');
	}


	public function index(){
        if($this->session->userdata('pengguna_level') == '1' || $this->session->userdata('pengguna_level') == '3'){
            $selected_tahun = $this->input->get('tahun_ajaran');
            $this->data['selected_tahun'] = $selected_tahun;
            $this->data['tahun'] = $this->m_ppdb->get_all_tahun();
    
            if ($selected_tahun) {
                $this->data['data'] = $this->m_ppdb->get_pendaftar_by_tahun($selected_tahun);
            } else {
                $this->data['data'] = $this->m_ppdb->get_all_pendaftar();
            }
            
            $this->data['breadcrumb'] = 'Data Pendaftar';
            $this->data['main_view'] = 'admin/v_ppdb';
            
            $this->load->view('theme/admintemplate', $this->data);
        } else {
            redirect('login');
        }
    }

    function tahun_ajaran(){
        if($this->session->userdata('pengguna_level')=='1'){
        $this->data['data']=$this->m_ppdb->get_all_tahun();
        $this->data['is_aktif'] = $this->m_ppdb->check_is_aktif();
        $this->data['breadcrumb']  = 'Tahun Ajaran';
        $this->data['main_view']   = 'admin/tahun_ajaran/v_tahun';
            
        $this->load->view('theme/admintemplate',$this->data);
        } else{
            redirect('login');
        }
    }

    public function add_tahun(){
        $this->data['breadcrumb']  = 'Tambah Tahun Ajaran';
        $this->data['main_view']   = 'admin/tahun_ajaran/v_add_tahun';
            
        $this->load->view('theme/admintemplate',$this->data);
    }

    public function simpan_tahun(){
        $tahun_ajaran = $this->input->post('tahun_ajaran');
        $info_ppdb = $this->input->post('info_ppdb');
        $tanggal_mulai = date('Y-m-d', strtotime($this->input->post('tanggal_mulai')));
        $tanggal_akhir = date('Y-m-d', strtotime($this->input->post('tanggal_akhir')));
        $jadwal_ujian = date('Y-m-d', strtotime($this->input->post('jadwal_ujian')));
        $biaya_pendaftaran = $this->input->post('biaya_pendaftaran');
        $is_aktif = $this->input->post('is_aktif');

        $data = array(
            'tahun_ajaran' => $tahun_ajaran,
            'info_ppdb' => $info_ppdb,
            'tanggal_mulai' => $tanggal_mulai,
            'tanggal_akhir' => $tanggal_akhir,
            'jadwal_ujian' => $jadwal_ujian,
            'biaya_pendaftaran' => $biaya_pendaftaran,
            'is_aktif' => $is_aktif,
        );

        $this->m_ppdb->simpan_tahun($data);
        $this->session->set_flashdata('success', 'Tahun ajaran berhasil ditambahkan');
        redirect('admin/ppdb/tahun_ajaran');
    }

    public function hapus_tahun() {
        if ($this->session->userdata('pengguna_level') == '1') {
            $id = $this->input->post('id'); // Mengambil ID dari POST data
            if ($id) {
                $jumlah_tahun = $this->m_ppdb->count_tahun($id);
                if ($jumlah_tahun == 0) {
                    $this->m_ppdb->hapus_tahun($id);
                    $this->session->set_flashdata('success', 'Tahun ajaran berhasil dihapus');
                } else {
                    $this->session->set_flashdata('error', 'Tidak dapat menghapus tahun ajaran karena terdapat data pendaftar didalamnya.');
                }
            } else {
                $this->session->set_flashdata('error', 'ID tahun ajaran tidak ditemukan.');
            }
            redirect('admin/ppdb/tahun_ajaran');
        } else {
            redirect('login');
        }
    }
    
    
    public function edit_tahun($id) {
        if ($this->session->userdata('pengguna_level') == '1') {
            $this->data['tahun'] = $this->m_ppdb->get_tahun_by_id($id);
            $this->data['breadcrumb']  = 'Edit Tahun Ajaran';
            $this->data['main_view']   = 'admin/tahun_ajaran/v_edit_tahun';
    
            $this->load->view('theme/admintemplate', $this->data);
        } else {
            redirect('login');
        }
    }
    
    // Menyimpan perubahan tahun ajaran
    public function update_tahun() {
        if ($this->session->userdata('pengguna_level') == '1') {
            $id = $this->input->post('id');
            $tahun_ajaran = $this->input->post('tahun_ajaran');
            $info_ppdb = $this->input->post('info_ppdb');
            $tanggal_mulai = date('Y-m-d', strtotime($this->input->post('tanggal_mulai')));
            $tanggal_akhir = date('Y-m-d', strtotime($this->input->post('tanggal_akhir')));
            $jadwal_ujian = date('Y-m-d', strtotime($this->input->post('jadwal_ujian')));
            $biaya_pendaftaran = $this->input->post('biaya_pendaftaran');
            $is_aktif = $this->input->post('is_aktif');
    
            $data = array(
                'tahun_ajaran' => $tahun_ajaran,
                'info_ppdb'    => $info_ppdb,
                'tanggal_mulai' => $tanggal_mulai,
                'tanggal_akhir' => $tanggal_akhir,
                'jadwal_ujian' => $jadwal_ujian,
                'biaya_pendaftaran' => $biaya_pendaftaran,
                'is_aktif' => $is_aktif
            );
    
            $this->m_ppdb->update_tahun($id, $data);
            $this->session->set_flashdata('success', 'Tahun ajaran berhasil diperbarui');
            redirect('admin/ppdb/tahun_ajaran');
        } else {
            redirect('login');
        }
    }

	public function detail($id) {
        // Periksa apakah pengguna memiliki hak akses (level 1)
        if ($this->session->userdata('pengguna_level') == '1'|| $this->session->userdata('pengguna_level') == '3') {
            // Panggil model untuk mendapatkan data pendaftar berdasarkan $id
            $data['data_peserta'] = $this->m_ppdb->get_detail_pendaftar($id);
			$data['kelas']=$this->m_ppdb->get_data_kelas();

            // Set breadcrumb
            $data['breadcrumb'] = 'Data Pendaftar Detail';

            // Set view yang akan digunakan
            $data['main_view'] = 'admin/ppdb_detail/v_data_diri';

            // Load view dengan menggunakan template admin
            $this->load->view('theme/admintemplate', $data);
        } else {
            // Jika pengguna tidak memiliki hak akses, redirect ke halaman login
            redirect('login');
        }
    }
	
	public function detail_alamat($id) {
        // Periksa apakah pengguna memiliki hak akses (level 1)
        if ($this->session->userdata('pengguna_level') == '1'|| $this->session->userdata('pengguna_level') == '3') {
            // Panggil model untuk mendapatkan data pendaftar berdasarkan $id
            $data['data_peserta'] = $this->m_ppdb->get_detail_pendaftar($id);

            // Set breadcrumb
            $data['breadcrumb'] = 'Data Pendaftar Detail';

            // Set view yang akan digunakan
            $data['main_view'] = 'admin/ppdb_detail/v_data_alamat';

            // Load view dengan menggunakan template admin
            $this->load->view('theme/admintemplate', $data);
        } else {
            // Jika pengguna tidak memiliki hak akses, redirect ke halaman login
            redirect('login');
        }
    }
	public function detail_ortu($id) {
        // Periksa apakah pengguna memiliki hak akses (level 1)
        if ($this->session->userdata('pengguna_level') == '1'|| $this->session->userdata('pengguna_level') == '3') {
            // Panggil model untuk mendapatkan data pendaftar berdasarkan $id
            $data['data_peserta'] = $this->m_ppdb->get_detail_pendaftar($id);
			$data['data_ortu'] = $this->m_ppdb->get_data_ortu($id);
			$data['kerja']=$this->m_ppdb->get_data_pekerjaan();

            // Set breadcrumb
            $data['breadcrumb'] = 'Data Pendaftar Detail';

            // Set view yang akan digunakan
            $data['main_view'] = 'admin/ppdb_detail/v_data_ortu';

            // Load view dengan menggunakan template admin
            $this->load->view('theme/admintemplate', $data);
        } else {
            // Jika pengguna tidak memiliki hak akses, redirect ke halaman login
            redirect('login');
        }
    }
	public function detail_wali($id) {
        // Periksa apakah pengguna memiliki hak akses (level 1)
        if ($this->session->userdata('pengguna_level') == '1'|| $this->session->userdata('pengguna_level') == '3') {
            // Panggil model untuk mendapatkan data pendaftar berdasarkan $id
            $data['data_peserta'] = $this->m_ppdb->get_detail_pendaftar($id);
			$data['data_ortu'] = $this->m_ppdb->get_data_ortu($id);
			$data['kerja']=$this->m_ppdb->get_data_pekerjaan();

            // Set breadcrumb
            $data['breadcrumb'] = 'Data Pendaftar Detail';

            // Set view yang akan digunakan
            $data['main_view'] = 'admin/ppdb_detail/v_data_wali';

            // Load view dengan menggunakan template admin
            $this->load->view('theme/admintemplate', $data);
        } else {
            // Jika pengguna tidak memiliki hak akses, redirect ke halaman login
            redirect('login');
        }
    }
	public function detail_berkas($id) {
        // Periksa apakah pengguna memiliki hak akses (level 1)
        if ($this->session->userdata('pengguna_level') == '1'|| $this->session->userdata('pengguna_level') == '3') {
            // Panggil model untuk mendapatkan data pendaftar berdasarkan $id
            $data['data_peserta'] = $this->m_ppdb->get_detail_pendaftar($id);
			$data['data_ortu'] = $this->m_ppdb->get_data_ortu($id);
			$data['kerja']=$this->m_ppdb->get_data_pekerjaan();

            // Set breadcrumb
            $data['breadcrumb'] = 'Data Pendaftar Detail';

            // Set view yang akan digunakan
            $data['main_view'] = 'admin/ppdb_detail/v_data_berkas';

            // Load view dengan menggunakan template admin
            $this->load->view('theme/admintemplate', $data);
        } else {
            // Jika pengguna tidak memiliki hak akses, redirect ke halaman login
            redirect('login');
        }
    }
	public function konfirmasi($id) {
        // Periksa apakah pengguna memiliki hak akses (level 1)
        if ($this->session->userdata('pengguna_level') == '1'|| $this->session->userdata('pengguna_level') == '3') {
            // Panggil model untuk mendapatkan data pendaftar berdasarkan $id
            $data['data_peserta'] = $this->m_ppdb->get_detail_pendaftar($id);
            // Set breadcrumb
            $data['breadcrumb'] = 'Data Pendaftar Detail';

            // Set view yang akan digunakan
            $data['main_view'] = 'admin/ppdb_detail/v_konfirmasi';

            // Load view dengan menggunakan template admin
            $this->load->view('theme/admintemplate', $data);
        } else {
            // Jika pengguna tidak memiliki hak akses, redirect ke halaman login
            redirect('login');
        }
    }

	public function simpan_status() {
		// Periksa apakah pengguna memiliki hak akses (level 1)
		if ($this->session->userdata('pengguna_level') == '1'|| $this->session->userdata('pengguna_level') == '3') {
			// Ambil data dari formulir
			$status = $this->input->post('status');
			$id = $this->input->post('id'); // Ubah menjadi 'id'
	
			// Panggil model untuk menyimpan status
			$result = $this->m_ppdb->update_status($id, $status);
	
			// Redirect kembali ke halaman sebelumnya
			if ($result) {
				redirect($this->agent->referrer());
			} else {
				// Jika gagal, tampilkan pesan error atau redirect ke halaman tertentu
				// Misalnya: redirect('admin/ppdb');
			}
		} else {
			// Jika pengguna tidak memiliki hak akses, redirect ke halaman login
			redirect('login');
		}
	}

    public function hapus_pendaftar() {
        // Periksa apakah pengguna memiliki hak akses (level 1)
        if ($this->session->userdata('pengguna_level') == '1'|| $this->session->userdata('pengguna_level') == '3') {
            // Ambil data dari formulir
            $id = $this->input->post('id');
    
            // Periksa data peserta
            $data_peserta = $this->m_ppdb->get_data_pendaftar($id);
    
            if (!empty($data_peserta)) {
                // Hapus data ortu jika ortu_id tidak null
                if ($data_peserta->ortu_id != null) {
                    $this->m_ppdb->hapus_data_ortu($data_peserta->ortu_id);
                }
    
                $this->hapus_berkas($data_peserta);
    
                // Hapus data pengguna by id
                if (isset($data_peserta->id)) {
                    $this->m_ppdb->hapus_data_pengguna_by_id($data_peserta->id);
                }
    
                // Hapus data peserta
                $this->m_ppdb->hapus_data_peserta($id);
    
                // Set pesan sukses di session
                $this->session->set_flashdata('success_message', 'Data peserta berhasil dihapus.');
            } else {
                $this->session->set_flashdata('error_message', 'Data peserta tidak ditemukan.');
            }
    
            // Redirect ke halaman sebelumnya atau halaman lain jika diperlukan
            redirect($_SERVER['HTTP_REFERER']);
        } else {
            // Jika pengguna tidak memiliki hak akses, redirect ke halaman login
            redirect('login');
        }
    }
    
    
    
    
    public function hapus_berkas($data_peserta) {
        // Jenis berkas yang akan dihapus
        $jenis_berkas = array('foto', 'b_pendaftaran', 'kk', 'akte', 'ijazah', 'kip');
    
        // Iterasi dan hapus berkas
        foreach ($jenis_berkas as $jenis) {
            // Pengecekan apakah properti 'foto' ada dalam objek $data_peserta dan tidak null
            if (property_exists($data_peserta, $jenis) && $data_peserta->$jenis !== null) {
                $nama_berkas = $data_peserta->$jenis;
    
                // Hapus berkas di direktori tertentu
                $file_path = './assets/berkas/' . $nama_berkas;
                if (file_exists($file_path)) {
                    unlink($file_path);
                }
            }
        }
    }
    
    public function cetak($id) {
        // Mengambil nama pengguna dari session
        if ($this->session->userdata('pengguna_level') == '1'|| $this->session->userdata('pengguna_level') == '3') {
            // Memanggil model untuk mendapatkan data formulir
            $data_peserta = $this->m_ppdb->get_data_formulir($id);
            $this->data['pekerjaan'] = $this->m_ppdb->get_all_pekerjaan(); 
            if($data_peserta){
                // Inisialisasi objek mPDF
                
                $mpdf = new Mpdf();
    
                // Set top margin (adjust the value as needed)
                $mpdf->SetMargins(5, 10, 10, 30);
    
                // HTML untuk formulir
                $html = $this->load->view('pendaftar/v_cetak_formulir', array('data_peserta' => $data_peserta, 'pekerjaan' => $this->data['pekerjaan']), true);
    
                // Menulis HTML ke mPDF
                $mpdf->WriteHTML($html);
    
                // Menentukan judul file PDF
                $filename = "Formulir" . str_replace(' ', '_', $data_peserta->nama) . ".pdf";
    
                // Output PDF ke browser dengan judul file yang ditentukan
                $mpdf->Output($filename, 'D');
            } else {
                // Handle the case where student data is not found
                echo 'Student data not found';
            }
        } else {
            // Jika pengguna tidak memiliki hak akses, redirect ke halaman login
            redirect('login');
        }
    }
    

    
    
}