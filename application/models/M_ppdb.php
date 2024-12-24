<?php
class M_ppdb extends CI_Model{

    public function get_all_pendaftar(){
        $query = $this->db->query("SELECT * from tbl_pendaftaran");
        return $query;
    }
    public function get_pendaftar_by_tahun($tahun_id){
        $query = $this->db->get_where('tbl_pendaftaran', array('id_tahun' => $tahun_id));
        return $query;
    }

    public function simpan_tahun($data) {
        $this->db->insert('tbl_tahun_ajaran', $data);
        return $this->db->insert_id();
    }
    public function count_tahun($id){
        $query = $this->db->query("SELECT COUNT(*) AS jumlah_tahun FROM tbl_pendaftaran WHERE id_tahun='$id'");
        return $query->row()->jumlah_tahun;
    }
    public function check_is_aktif(){
        $query = $this->db->query("SELECT * FROM tbl_tahun_ajaran WHERE is_aktif='Y'");
        return $query->num_rows() > 0;
    }

    public function hapus_tahun($id) {
        // Hapus data tahun ajaran berdasarkan id
        $this->db->where('id', $id);
        $this->db->delete('tbl_tahun_ajaran');
    }
    public function get_all_tahun(){
        $query = $this->db->query("select *,date_format(tt.tanggal_mulai, '%d-%m-%Y') AS tgl_mulai,
        date_format(tt.tanggal_akhir, '%d-%m-%Y') AS tgl_akhir, date_format(tt.jadwal_ujian, '%d-%m-%Y') AS tgl_ujian from tbl_tahun_ajaran tt");
        return $query;
    }
    public function get_tahun_by_id($id) {
        $this->db->select("id, is_aktif, tahun_ajaran, info_ppdb, DATE_FORMAT(tanggal_mulai, '%d-%m-%Y') AS tgl_mulai, DATE_FORMAT(tanggal_akhir, '%d-%m-%Y') AS tgl_akhir, DATE_FORMAT(jadwal_ujian, '%d-%m-%Y') AS tgl_ujian, biaya_pendaftaran");
        $this->db->from('tbl_tahun_ajaran');
        $this->db->where('id', $id);
        $query = $this->db->get();
        return $query->row();
    }
    
    
    public function update_tahun($id, $data) {
        $this->db->where('id', $id);
        $this->db->update('tbl_tahun_ajaran', $data);
    }
    public function get_detail_pendaftar($id){
        $query = $this->db->query("SELECT *, date_format(tp.tanggal_lahir, '%d-%m-%Y') AS tgl_lahir, CONCAT_WS(', ', tp.tempat_lahir, DATE_FORMAT(tp.tanggal_lahir, '%d-%M-%Y')) AS tempat_tanggal_lahir
        from tbl_pendaftaran tp WHERE tp.id=?", array($id));
        return $query->row(); // Menggunakan row() karena kita mengambil satu baris data
    }
    public function get_data_kelas(){
        $query = $this->db->query("SELECT * from tbl_kelas");
        return $query;
    }
    public function get_data_ortu($id){
        $query = $this->db->query("SELECT *, date_format(tor.tanggal_ayah, '%d-%m-%Y') AS tgl_ayah, 
        date_format(tor.tanggal_ibu, '%d-%m-%Y') AS tgl_ibu, date_format(tor.tanggal_wali, '%d-%m-%Y') AS tgl_wali from tbl_orang_tua tor 
        join tbl_pendaftaran tp on tor.id=tp.ortu_id 
        where tp.id=?", array($id));
        return $query->row();
    }
    public function get_data_pekerjaan(){
        $query = $this->db->query("SELECT * FROM tbl_pekerjaan");
        return $query->result_array();
    }
    public function update_status($id, $status) {
        // Lakukan update status berdasarkan id
        $data = array('status' => $status);
        $this->db->where('id', $id);
        return $this->db->update('tbl_pendaftaran', $data);
    }
    public function get_data_pendaftar($id){
        $query = $this->db->query("SELECT * FROM tbl_pendaftaran tp where tp.id=?", array($id));
        return $query->row();
    }
    
    public function hapus_data_ortu($ortu_id) {
        // Hapus data ortu berdasarkan id
        $this->db->where('id', $ortu_id);
        $this->db->delete('tbl_orang_tua');
    }
    
    public function hapus_data_peserta($id) {
        // Hapus data peserta berdasarkan id
        $this->db->where('id', $id);
        $this->db->delete('tbl_pendaftaran');
    }
    
    public function hapus_data_pengguna_by_id($pengguna_id) {
        // Hapus data pengguna berdasarkan ID
        $this->db->where('pengguna_id', $pengguna_id);
        $this->db->delete('tbl_pengguna');
    }

    public function get_data_formulir($id) {
        $sql = "SELECT tor.*, tp.nama, tp.nisn, tp.no_ktp, tp.no_kk, tp.nama_kk, tp.sekolah_asal, tp.status, 
        tp.kelas_id, tp.kewarganegaraan, date_format(tp.tanggal_lahir, '%d-%m-%Y') AS tanggal_lahir, tp.tempat_lahir, tp.alamat_ktp,
        tp.jk, tp.anak_ke, tp.jumlah_saudara, tp.agama, tp.cita_cita, tp.hobi, tp.email, tp.no_hp, tp.yang_biaya_sekolah, tp.no_pendaftaran,  CONCAT_WS(', ', tp.tempat_lahir, DATE_FORMAT(tp.tanggal_lahir, '%d-%M-%Y')) AS tempat_tanggal_lahir,
        tp.foto, tp.b_pendaftaran, tp.kk, tp.akte, tp.ijazah, tp.kip
        FROM tbl_pendaftaran tp
        JOIN tbl_orang_tua tor ON tp.ortu_id = tor.id
        JOIN tbl_pengguna tpe ON tpe.pengguna_status = tp.id
        WHERE tp.id = ? ";
        $query = $this->db->query($sql, array($id));
        if ($query->num_rows() > 0) {
            return $query->row(); // Use ->row() to get a single row as an object
        } else {
            return false;
        }

    }
    
    public function get_all_pekerjaan(){
        $query = $this->db->query("SELECT * FROM tbl_pekerjaan");
        return $query->result();
    }
    
}