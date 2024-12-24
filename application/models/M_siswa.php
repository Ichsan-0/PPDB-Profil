<?php 
class M_siswa extends CI_Model{
	
	function get_all_siswa(){
		$hsl=$this->db->query("SELECT tbl_siswa.*,kelas_nama FROM tbl_siswa JOIN tbl_kelas ON siswa_kelas_id=kelas_id");
		return $hsl;
	}
	function get_all_kelas(){
		$data=$this->db->query("SELECT kelas_id,kelas_nama FROM tbl_kelas");
		return $data;
	}

	public function is_nisn_exists($nisn) {
		$this->db->where('nisn', $nisn);
		$query = $this->db->get('tbl_pendaftaran');
	
		return $query->num_rows() > 0;
	}
	
	public function is_username_exists($username) {
		$this->db->where('username', $username);
		$query = $this->db->get('tbl_pendaftaran');
	
		return $query->num_rows() > 0;
	}
	
	public function update_nomor_pendaftaran($id_siswa, $nomor_pendaftaran){
		$this->db->where('id', $id_siswa);
		$this->db->update('tbl_pendaftaran', array('no_pendaftaran' => $nomor_pendaftaran));
		return $this->db->affected_rows() > 0;
	}

	public function simpan_data($data_siswa) {
        // Simpan data ke dalam tabel 'pendaftaran'
        $this->db->insert('tbl_pendaftaran', $data_siswa);
        return $this->db->insert_id(); // Mengembalikan ID data yang baru saja disimpan
    }
	public function simpan_data_pengguna($data_pengguna) {
        // Simpan data ke dalam tabel 'pendaftaran'
        $this->db->insert('tbl_pengguna', $data_pengguna);
        return $this->db->insert_id(); // Mengembalikan ID data yang baru saja disimpan
    }
	function simpan_siswa($nis,$nama,$jenkel,$kelas,$photo){
		$hsl=$this->db->query("INSERT INTO tbl_siswa (siswa_nis,siswa_nama,siswa_jenkel,siswa_kelas_id,siswa_photo) VALUES ('$nis','$nama','$jenkel','$kelas','$photo')");
		return $hsl;
	}
	function simpan_siswa_tanpa_img($nis,$nama,$jenkel,$kelas){
		$hsl=$this->db->query("INSERT INTO tbl_siswa (siswa_nis,siswa_nama,siswa_jenkel,siswa_kelas_id) VALUES ('$nis','$nama','$jenkel','$kelas')");
		return $hsl;
	}

	function update_siswa($kode,$nis,$nama,$jenkel,$kelas,$photo){
		$hsl=$this->db->query("UPDATE tbl_siswa SET siswa_nis='$nis',siswa_nama='$nama',siswa_jenkel='$jenkel',siswa_kelas_id='$kelas',siswa_photo='$photo' WHERE siswa_id='$kode'");
		return $hsl;
	}
	function update_siswa_tanpa_img($kode,$nis,$nama,$jenkel,$kelas){
		$hsl=$this->db->query("UPDATE tbl_siswa SET siswa_nis='$nis',siswa_nama='$nama',siswa_jenkel='$jenkel',siswa_kelas_id='$kelas' WHERE siswa_id='$kode'");
		return $hsl;
	}
	function hapus_siswa($kode){
		$hsl=$this->db->query("DELETE FROM tbl_siswa WHERE siswa_id='$kode'");
		return $hsl;
	}

	function siswa(){
		$hsl=$this->db->query("SELECT tbl_siswa.*,kelas_nama FROM tbl_siswa JOIN tbl_kelas ON siswa_kelas_id=kelas_id");
		return $hsl;
	}
	function siswa_perpage($offset,$limit){
		$hsl=$this->db->query("SELECT tbl_siswa.*,kelas_nama FROM tbl_siswa JOIN tbl_kelas ON siswa_kelas_id=kelas_id limit $offset,$limit");
		return $hsl;
	}

}