<?php
class M_pendaftar extends CI_Model{

	public function get_peserta_nama($pengguna){
        $query = $this->db->query("SELECT * FROM tbl_pendaftaran tp JOIN tbl_pengguna tpe ON tpe.pengguna_status = tp.id WHERE tpe.pengguna_status = ?", array($pengguna));

        if ($query->num_rows() > 0) {
            return $query->row()->nama;
        } else {
            return null;
        }
    }

    public function get_data_peserta($pengguna_status) {
        $query = $this->db->query("SELECT tp.nama, tp.nisn, tp.no_ktp, tp.no_kk, tp.nama_kk, tp.sekolah_asal, tp.ortu_id, tp.status,
                                   tp.kelas_id, tp.kewarganegaraan, date_format(tp.tanggal_lahir, '%d-%m-%Y') AS tanggal_lahir, tp.tempat_lahir, tp.alamat_ktp,
                                   tp.jk, tp.anak_ke, tp.jumlah_saudara, tp.agama, tp.cita_cita, tp.hobi, tp.email, tp.no_hp, tp.yang_biaya_sekolah, tp.no_pendaftaran,  CONCAT_WS(', ', tp.tempat_lahir, DATE_FORMAT(tp.tanggal_lahir, '%d-%M-%Y')) AS tempat_tanggal_lahir
                                   FROM tbl_pendaftaran tp
                                   JOIN tbl_pengguna tpe ON tpe.pengguna_status = tp.id
                                   WHERE tpe.pengguna_status = ?", array($pengguna_status));
        return $query;
    }
    
    public function get_data_alamat($pengguna_status) {
        $query = $this->db->query("SELECT *
                                   FROM tbl_pendaftaran tp
                                   JOIN tbl_pengguna tpe ON tpe.pengguna_status = tp.id
                                   WHERE tpe.pengguna_status = ?", array($pengguna_status));
        return $query;
    }
    public function get_all_pekerjaan(){
        $query = $this->db->query("SELECT * from tbl_pekerjaan");
        return $query;
    }

    public function get_data_ortu($pengguna_status){
        $query = $this->db->query("SELECT *,  date_format(tor.tanggal_ayah, '%d-%m-%Y') AS tanggal_ayh, date_format(tor.tanggal_ibu, '%d-%m-%Y') AS tanggal_ib, date_format(tor.tanggal_wali, '%d-%m-%Y') AS tanggal_wl
        FROM tbl_orang_tua tor join tbl_pendaftaran tp on tor.id=tp.ortu_id join tbl_pengguna tpe on tp.id=tpe.pengguna_status
        WHERE tpe.pengguna_status = ?", array($pengguna_status));
        return $query;
    }

    public function update_formulir($pengguna_status, $data) {

        // Kondisi WHERE menggunakan JOIN dengan klausa ON
        $this->db->where('tpe.id', $pengguna_status);
        $this->db->join('tbl_pengguna tp', 'tpe.id = tp.pengguna_status', 'inner');
    
        // Update data di tabel tbl_pendaftaran
        $this->db->update('tbl_pendaftaran tpe', $data);
        
        return $this->db->affected_rows() > 0;
    }

    public function update_ortu_id($pengguna_status, $ortu_id) {
    
        // Kondisi WHERE menggunakan JOIN dengan klausa ON
        $this->db->where('tpe.id', $pengguna_status);
        $this->db->join('tbl_pengguna tp', 'tp.pengguna_status = tpe.id', 'inner');
    
        // Update data di tabel tbl_pendaftaran
        $this->db->update('tbl_pendaftaran tpe', array('ortu_id' => $ortu_id));

    return $this->db->affected_rows() > 0;
    }

    public function check_ortu($pengguna_status){
        $query = $this->db->select('ortu_id')
        ->from('tbl_pendaftaran')
        ->join('tbl_pengguna', 'tbl_pendaftaran.id = tbl_pengguna.pengguna_status', 'inner')
        ->where('tbl_pengguna.pengguna_status', $pengguna_status)
        ->get();

        if ($query->num_rows() > 0) {
            return $query->row_array();
        } else {
            return null;
        }
    }

    public function create_ortu_data($data) {
       // Insert data into tbl_orang_tua
        $this->db->insert('tbl_orang_tua', $data);

        // Get the last inserted ID (ortu_id)
        $ortu_id = $this->db->insert_id();

        return $ortu_id;
    }

    public function update_data_ortu($pengguna_status, $data) {
        // Check if ortu_id exists for the given pengguna_id
        $ortu_id_data = $this->check_ortu($pengguna_status);
    
        if ($ortu_id_data) {
            $ortu_id = $ortu_id_data['ortu_id'];
    
            // Update data in tbl_orang_tua
            $this->db->where('id', $ortu_id);
            $this->db->update('tbl_orang_tua', $data);
    
            return $this->db->affected_rows() > 0;
        } else {
            // No existing ortu_id, create new data
            $this->db->insert('tbl_orang_tua', $data);
    
            // Get the last inserted ID (ortu_id)
            $ortu_id = $this->db->insert_id();
    
            // Update tbl_pendaftaran with the new ortu_id
            $this->update_ortu_id($pengguna_status, $ortu_id);
    
            return $ortu_id;
        }
    }
    
    public function get_existing_file($pengguna_status, $field_name)
    {
        $this->db->select($field_name);
        $this->db->where('id', $pengguna_status);
        $query = $this->db->get('tbl_pendaftaran');

        return $query->row_array();
    }

    public function update_pendaftaran_file($pengguna_status, $field_name, $file_name)
    {
        $data = array(
            $field_name => $file_name,
        );

        $this->db->where('id', $pengguna_status);
        $this->db->update('tbl_pendaftaran', $data);
    }
    
    public function get_file_data($pengguna_status)
    {
        $this->db->select('foto, b_pendaftaran, kk, akte, ijazah, kip');
        $this->db->where('id', $pengguna_status);
        $query = $this->db->get('tbl_pendaftaran');

        return $query->row_array();
    }
    
    public function get_peserta_foto($pengguna_status)
    {
        $this->db->select('foto');
        $this->db->where('id', $pengguna_status);
        $query = $this->db->get('tbl_pendaftaran');

        $result = $query->row_array();

        // Check if 'foto' key exists in the result array
        return isset($result['foto']) ? $result['foto'] : null;
    }

    public function get_data_formulir($pengguna_status) {
        $query = $this->db->query("SELECT tor.*, tp.nama, tp.nisn, tp.no_ktp, tp.no_kk, tp.nama_kk, tp.sekolah_asal, tp.status, 
                                   tp.kelas_id, tp.kewarganegaraan, date_format(tp.tanggal_lahir, '%d-%m-%Y') AS tanggal_lahir, tp.tempat_lahir, tp.alamat_ktp,
                                   tp.jk, tp.anak_ke, tp.jumlah_saudara, tp.agama, tp.cita_cita, tp.hobi, tp.email, tp.no_hp, tp.yang_biaya_sekolah, tp.no_pendaftaran,  CONCAT_WS(', ', tp.tempat_lahir, DATE_FORMAT(tp.tanggal_lahir, '%d-%M-%Y')) AS tempat_tanggal_lahir,
                                   tp.foto, tp.b_pendaftaran, tp.kk, tp.akte, tp.ijazah, tp.kip
                                   FROM tbl_pendaftaran tp
                                   JOIN tbl_orang_tua tor ON tp.ortu_id = tor.id
                                   JOIN tbl_pengguna tpe ON tpe.pengguna_status = tp.id
                                   WHERE tp.id = ?", array($pengguna_status));
        return $query;
    }
    public function get_tahun_ajaran_by_date($tanggal_daftar) {
        $this->db->select('id');
        $this->db->from('tbl_tahun_ajaran');
        $this->db->group_start();
        $this->db->where('tanggal_mulai <=', $tanggal_daftar);
        $this->db->where('jadwal_ujian >=', $tanggal_daftar);
        $this->db->group_end();
        $this->db->or_where('is_aktif', 'Y');
        $query = $this->db->get();
    
        if ($query->num_rows() > 0) {
            return $query->row_array();
        } else {
            return false;
        }
    }
    
    public function get_tahun_ajaran($pengguna_status){
        $query = $this->db->query("SELECT *,  date_format(tt.jadwal_ujian, '%d-%m-%Y') AS ujian from tbl_pendaftaran tp join tbl_tahun_ajaran tt on tp.id_tahun=tt.id where tp.id =?", array($pengguna_status));
        return $query;
    }

    function get_brosur_pendidikan(){
		$data = $this->db->query("SELECT * from tbl_slider where stat=3");
		return $data->result_array();
	}

}