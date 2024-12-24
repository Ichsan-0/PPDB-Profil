<?php
class Formulir extends CI_Controller{
	function __construct(){
		parent::__construct();
	
		$this->load->model('m_pendaftar');
        $this->load->model('m_siswa');
	}
    
	function index() {
        if ($this->session->userdata('pengguna_level') == 2) {

            // Mengambil id pengguna dari session
            $pengguna_status = $this->session->userdata('pengguna_status');
            
            // Mendapatkan data peserta dari model
            $query_result = $this->m_pendaftar->get_data_peserta($pengguna_status);
    
            // Memasukkan data peserta ke dalam variabel
            $this->data['data_peserta'] = $query_result->row();
            $this->data['kelas']=$this->m_siswa->get_all_kelas();
    
            // Set data untuk view
            $this->data['breadcrumb'] = 'Formulir';
            $this->data['main_view'] = 'pendaftar/v_data_diri';
    
            // Menampilkan view dengan template
            $this->load->view('theme/pendaftartemplate', $this->data);
        } else {
            // Jika bukan pendaftar, redirect ke halaman login
            redirect('login');
        }
    }

    public function simpan_diri() {
        $pengguna_status = $this->session->userdata('pengguna_status');
        $tanggal_daftar = date('Y-m-d');
    
        // Ambil id_tahun berdasarkan tanggal_daftar
        $tahun_ajaran = $this->m_pendaftar->get_tahun_ajaran_by_date($tanggal_daftar);
    
        if ($tahun_ajaran) {
            $id_tahun = $tahun_ajaran['id'];
        } else {
            $response = array(
                'success' => false,
                'error' => 'Tahun ajaran tidak ditemukan untuk tanggal pendaftaran ini.'
            );
            echo json_encode($response);
            return;
        }
    
        $data = array(
            'nama' => $this->input->post('nama'),
            'nisn' => $this->input->post('nisn'),
            'no_ktp' => $this->input->post('no_ktp'),
            'no_kk' => $this->input->post('no_kk'),
            'nama_kk' => $this->input->post('nama_kk'),
            'sekolah_asal' => $this->input->post('sekolah_asal'),
            'kelas_id' => $this->input->post('kelas_id'),
            'kewarganegaraan' => $this->input->post('kewarganegaraan'),
            'tempat_lahir' => $this->input->post('tempat_lahir'),
            'tanggal_lahir' => date('Y-m-d', strtotime($this->input->post('tanggal_lahir'))),
            'alamat_ktp' => $this->input->post('alamat_ktp'),
            'jk' => $this->input->post('jk'),
            'anak_ke' => $this->input->post('anak_ke'),
            'jumlah_saudara' => $this->input->post('jumlah_saudara'),
            'agama' => $this->input->post('agama'),
            'cita_cita' => $this->input->post('cita_cita'),
            'hobi' => $this->input->post('hobi'),
            'email' => $this->input->post('email'),
            'no_hp' => $this->input->post('no_hp'),
            'yang_biaya_sekolah' => $this->input->post('yang_biaya_sekolah'),
            'tanggal_daftar' => $tanggal_daftar,
            'id_tahun' => $id_tahun // Tambahkan id_tahun yang diperoleh dari tabel tahun ajaran
        );
    
        $simpan_data = $this->m_pendaftar->update_formulir($pengguna_status, $data);
    
        if ($simpan_data) {
            $response = array(
                'success' => true,
            );
        } else {
            $response = array(
                'success' => false,
                'error' => 'Gagal menyimpan data.',
            );
        }
    
        echo json_encode($response);
    }
    
    

	function alamat() {
        if ($this->session->userdata('pengguna_level') == 2) {

            // Mengambil id pengguna dari session
            $pengguna_status = $this->session->userdata('pengguna_status');
            
            // Mendapatkan data peserta dari model
            $query_result = $this->m_pendaftar->get_data_alamat($pengguna_status);
    
            // Memasukkan data peserta ke dalam variabel
            $this->data['data_peserta'] = $query_result->row();
    
            // Set data untuk view
            $this->data['breadcrumb'] = 'Alamat';
            $this->data['main_view'] = 'pendaftar/v_data_alamat';
    
            // Menampilkan view dengan template
            $this->load->view('theme/pendaftartemplate', $this->data);
        } else {
            // Jika bukan pendaftar, redirect ke halaman login
            redirect('login');
        }

    }

    public function simpan_alamat(){
        $pengguna_status = $this->session->userdata('pengguna_status');
        $data = array(
            'status_tt' => $this->input->post('status_tt'),
            'rt'    => $this->input->post('rt'),
            'rw'    => $this->input->post('rw'),
            'desa'  => $this->input->post('desa'),
            'kecamatan' => $this->input->post('kecamatan'),
            'kabupaten_kota' => $this->input->post('kabupaten_kota'),
            'provinsi' => $this->input->post('provinsi'),
            'kode_pos' => $this->input->post('kode_pos'),
            'transportasi' => $this->input->post('transportasi'),
            'jarak'    => $this->input->post('jarak'),
            'waktu_tempuh' => $this->input->post('waktu_tempuh'),
        );

        $simpan_data = $this->m_pendaftar->update_formulir($pengguna_status, $data);

        if ($simpan_data) {
            $response = array(
                'success' => true,
            );
        } else {
            $response = array(
                'success' => false,
                'error' => 'Gagal menyimpan data.',
            );
        }
        
        echo json_encode($response);
    }

    function data_ortu() {
        if ($this->session->userdata('pengguna_level') == 2) {

            // Mengambil id pengguna dari session
            $pengguna_status = $this->session->userdata('pengguna_status');
            
            // Mendapatkan data peserta dari model
            $query_ortu = $this->m_pendaftar->get_data_ortu($pengguna_status);
            $query_pendaftar = $this->m_pendaftar->get_data_peserta($pengguna_status);
    
            // Memasukkan data peserta ke dalam variabel
            $this->data['data_ortu'] = $query_ortu->row();
            $this->data['data_peserta'] = $query_pendaftar->row();
            $this->data['kelas']=$this->m_siswa->get_all_kelas();
            $this->data['pekerjaan'] = $this->m_pendaftar->get_all_pekerjaan();
    
            // Set data untuk view
            $this->data['breadcrumb'] = 'Data Orang Tua';
            $this->data['main_view'] = 'pendaftar/v_data_ortu';
    
            // Menampilkan view dengan template
            $this->load->view('theme/pendaftartemplate', $this->data);
        } else {
            // Jika bukan pendaftar, redirect ke halaman login
            redirect('login');
        }
    }

    public function simpan_ortu() {
        $pengguna_status = $this->session->userdata('pengguna_status');

        $data = array(
            'nama_ayah' => $this->input->post('nama_ayah'),
            'status_ayah' => $this->input->post('status_ayah'),
            'nik_ayah' => $this->input->post('nik_ayah'),
            'tinggal_ayah' => $this->input->post('tinggal_ayah'),
            'tempat_ayah' => $this->input->post('tempat_ayah'),
            'tanggal_ayah' => date('Y-m-d', strtotime($this->input->post('tanggal_ayah'))),
            'pendidikan_ayah' => $this->input->post('pendidikan_ayah'),
            'pekerjaan_ayah_id' => $this->input->post('pekerjaan_ayah_id'),
            'penghasilan_ayah' => $this->input->post('penghasilan_ayah'),
            'no_hp_ayah' => $this->input->post('no_hp_ayah'),
            'nama_ibu' => $this->input->post('nama_ibu'),
            'status_ibu' => $this->input->post('status_ibu'),
            'nik_ibu' => $this->input->post('nik_ibu'),
            'tinggal_ibu' => $this->input->post('tinggal_ibu'),
            'tempat_ibu' => $this->input->post('tempat_ibu'),
            'tanggal_ibu' => date('Y-m-d', strtotime($this->input->post('tanggal_ibu'))),
            'pendidikan_ibu' => $this->input->post('pendidikan_ibu'),
            'pekerjaan_ibu_id' => $this->input->post('pekerjaan_ibu_id'),
            'penghasilan_ibu' => $this->input->post('penghasilan_ibu'),
            'no_hp_ibu' => $this->input->post('no_hp_ibu'),
        );
        // Check if ortu_id exists for the current pengguna_status
        $cek_data = $this->m_pendaftar->check_ortu($pengguna_status);

         if ($cek_data && !is_null($cek_data['ortu_id'])) {
        // Data already exists, update it
            $update_data = $this->m_pendaftar->update_data_ortu($pengguna_status, $data);
            if ($update_ortu) {
                $response = array('success' => true);
                
            } else {
                $response = array('success' => false, 'error' => 'Gagal mengupdate data ortu.');
            }
        } else {
            // Data doesn't exist, create it
            $simpan_data = $this->m_pendaftar->create_ortu_data($data);
            if ($simpan_data) {
                // Data successfully created, now update tbl_pendaftaran field ortu_id
                $update_ortu_id = $this->m_pendaftar->update_ortu_id($pengguna_status, $simpan_data);
    
                if ($update_ortu_id) {
                    // Update successful
                    $response = array('success' => true);
                } else {
                    // Update failed
                    $response = array('success' => false, 'error' => 'Gagal mengupdate ortu_id pada tbl_pendaftaran.');
                }
            } else {
                // Data creation failed
                $response = array('success' => false, 'error' => 'Gagal menyimpan data.');
            }
        }
    
        echo json_encode($response);
    } 

    function data_wali() {
        if ($this->session->userdata('pengguna_level') == 2) {

            // Mengambil id pengguna dari session
            $pengguna_status = $this->session->userdata('pengguna_status');
            
            // Mendapatkan data peserta dari model
            $query_ortu = $this->m_pendaftar->get_data_ortu($pengguna_status);
            $query_pendaftar = $this->m_pendaftar->get_data_peserta($pengguna_status);
    
            // Memasukkan data peserta ke dalam variabel
            $this->data['data_ortu'] = $query_ortu->row();
            $this->data['data_peserta'] = $query_pendaftar->row();
            $this->data['kelas']=$this->m_siswa->get_all_kelas();
            $this->data['pekerjaan'] = $this->m_pendaftar->get_all_pekerjaan();
    
            // Set data untuk view
            $this->data['breadcrumb'] = 'Data Wali Siswa';
            $this->data['main_view'] = 'pendaftar/v_data_wali';
    
            // Menampilkan view dengan template
            $this->load->view('theme/pendaftartemplate', $this->data);
        } else {
            // Jika bukan pendaftar, redirect ke halaman login
            redirect('login');
        }
    }

    public function simpan_wali() {
        $pengguna_status = $this->session->userdata('pengguna_status');

        $data_wali = array(
            'nama_wali' => $this->input->post('nama_wali'),
            'status_wali' => $this->input->post('status_wali'),
            'nik_wali' => $this->input->post('nik_wali'),
            'tinggal_wali' => $this->input->post('tinggal_wali'),
            'tempat_wali' => $this->input->post('tempat_wali'),
            'tanggal_wali' => date('Y-m-d', strtotime($this->input->post('tanggal_wali'))),
            'pendidikan_wali' => $this->input->post('pendidikan_wali'),
            'pekerjaan_wali_id' => $this->input->post('pekerjaan_wali_id'),
            'penghasilan_wali' => $this->input->post('penghasilan_wali'),
            'no_hp_wali' => $this->input->post('no_hp_wali'),
        );
        // Check if ortu_id exists for the current pengguna_status
        $cek_data = $this->m_pendaftar->check_ortu($pengguna_status);

         if ($cek_data && !is_null($cek_data['ortu_id'])) {
        // Data already exists, update it
            $update_data = $this->m_pendaftar->update_data_ortu($pengguna_status, $data_wali);
            if ($update_ortu) {
                $response = array('success' => true);
                
            } else {
                $response = array('success' => false, 'error' => 'Gagal mengupdate data ortu.');
            }
        } else {
            // Data doesn't exist, create it
            $simpan_data = $this->m_pendaftar->create_ortu_data($data_wali);
            if ($simpan_data) {
                // Data successfully created, now update tbl_pendaftaran field ortu_id
                $update_ortu_id = $this->m_pendaftar->update_ortu_id($pengguna_status, $simpan_data);
    
                if ($update_ortu_id) {
                    // Update successful
                    $response = array('success' => true);
                } else {
                    // Update failed
                    $response = array('success' => false, 'error' => 'Gagal mengupdate ortu_id pada tbl_pendaftaran.');
                }
            } else {
                // Data creation failed
                $response = array('success' => false, 'error' => 'Gagal menyimpan data.');
            }
        }
    
        echo json_encode($response);
    } 
}

