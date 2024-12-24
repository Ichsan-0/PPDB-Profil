<?php 
class M_files extends CI_Model{

	function get_all_files(){
		$hsl=$this->db->query("SELECT tf.*, DATE_FORMAT(tf.file_tanggal,'%d/%m/%Y') AS tanggal, tk.kelas_id,tk.kelas_nama FROM tbl_files tf LEFT JOIN tbl_kelas tk ON tf.file_kelas=tk.kelas_id ORDER BY tf.file_id DESC");
		return $hsl;
	}
	function get_all_kelas(){
		$data=$this->db->query("SELECT kelas_id,kelas_nama FROM tbl_kelas");
		return $data;
	}
	function simpan_file($judul,$kelas_id,$deskripsi,$oleh,$file){
		$hsl=$this->db->query("INSERT INTO tbl_files(file_judul,file_kelas, file_deskripsi,file_oleh,file_data) VALUES ('$judul','$kelas_id','$deskripsi','$oleh','$file')");
		return $hsl;
	}
	function update_file($kode,$judul,$deskripsi,$oleh,$file){
		$hsl=$this->db->query("UPDATE tbl_files SET file_judul='$judul',file_deskripsi='$deskripsi',file_oleh='$oleh',file_data='$file' WHERE file_id='$kode'");
		return $hsl;
	}
	function update_file_tanpa_file($kode,$judul,$deskripsi,$oleh){
		$hsl=$this->db->query("UPDATE tbl_files SET file_judul='$judul',file_deskripsi='$deskripsi',file_oleh='$oleh' WHERE file_id='$kode'");
		return $hsl;
	}
	function hapus_file($kode){
		$hsl=$this->db->query("DELETE FROM tbl_files WHERE file_id='$kode'");
		return $hsl;
	}

	public function get_file_byid($id){
		$hsl = $this->db->query("SELECT * FROM tbl_files WHERE file_id='$id'");
		return $hsl->row();
	}

	//Front-end
	function get_files_home(){
		$hsl=$this->db->query("SELECT file_id,file_judul,file_deskripsi,DATE_FORMAT(file_tanggal,'%d/%m/%Y') AS tanggal,file_oleh,file_download,file_data FROM tbl_files ORDER BY file_id DESC limit 7");
		return $hsl;
	}
	
}