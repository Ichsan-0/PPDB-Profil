<?php
class M_pengumuman extends CI_Model{

	function get_all_pengumuman(){
		$hsl=$this->db->query("SELECT *,DATE_FORMAT(tp.pengumuman_tanggal,'%d-%m-%Y') AS tanggal, tpe.pengguna_nama FROM tbl_pengumuman tp
		left join tbl_pengguna tpe on tp.pengumuman_author=tpe.pengguna_id");
		return $hsl;
	}
	function simpan_pengumuman($judul,$slug,$deskripsi,$tanggal,$file,$pengguna_id){
		$hsl=$this->db->query("INSERT INTO tbl_pengumuman(pengumuman_judul,pengumuman_deskripsi,pengumuman_author,pengumuman_slug,pengumuman_tanggal,pengumuman_file) 
		VALUES ('$judul','$deskripsi','$pengguna_id','$slug','$tanggal','$file')");
		return $hsl;
	}
	function update_pengumuman($pengumuman_id,$judul,$deskripsi,$slug,$tanggal,$pengguna_id,$file){
		$hsl=$this->db->query("UPDATE tbl_pengumuman SET pengumuman_judul='$judul',pengumuman_deskripsi='$deskripsi',pengumuman_slug='$slug',pengumuman_tanggal='$tanggal',pengumuman_author='$pengguna_id',pengumuman_file='$file' where pengumuman_id='$pengumuman_id'");
		return $hsl;
	}
	
	function hapus_pengumuman($pengumuman_id){
		$this->db->where('pengumuman_id', $pengumuman_id);
		$this->db->delete('tbl_pengumuman');
	}

	public function get_file_byid($id){
		$hsl = $this->db->query("SELECT * FROM tbl_pengumuman WHERE pengumuman_id='$id'");
		return $hsl->row();
	}

	function get_pengumuman_file($pengumuman_id) {
        $result = $this->db->select('pengumuman_file')->where('pengumuman_id', $pengumuman_id)->get('tbl_pengumuman')->row();
        return isset($result->pengumuman_file) ? $result->pengumuman_file : NULL;
    }

	//Front-end
	function get_pengumuman_home(){
		$hsl=$this->db->query("SELECT pengumuman_id,pengumuman_judul,pengumuman_deskripsi,DATE_FORMAT(pengumuman_tanggal,'%d/%m/%Y') AS tanggal,pengumuman_author FROM tbl_pengumuman ORDER BY pengumuman_id DESC limit 3");
		return $hsl;
	}

	function pengumuman(){
		$hsl=$this->db->query("SELECT *, DATE_FORMAT(pengumuman_tanggal,'%d/%m/%Y') AS tanggal FROM tbl_pengumuman ORDER BY pengumuman_id DESC");
		return $hsl;
	}
	function pengumuman_perpage($offset,$limit){
		$hsl=$this->db->query("SELECT *, DATE_FORMAT(pengumuman_tanggal,'%d/%m/%Y') AS tanggal FROM tbl_pengumuman ORDER BY pengumuman_id DESC limit $offset,$limit");
		return $hsl;
	}
	function get_pengumuman_by_kode($kode){
		$hsl = $this->db->query("SELECT *, DATE_FORMAT(tp.pengumuman_tanggal,'%d/%m/%Y') AS tanggal, tpe.pengguna_nama from tbl_pengumuman tp 
		left join tbl_pengguna tpe on tp.pengumuman_author=tpe.pengguna_id where pengumuman_id='$kode'");
		return $hsl;
	}
	function cari_pengumuman($keyword){
		$hsl=$this->db->query("SELECT *, DATE_FORMAT(pengumuman_tanggal,'%d/%m/%Y') AS tanggal FROM tbl_pengumuman WHERE pengumuman_judul LIKE '%$keyword%' LIMIT 5");
		return $hsl;
	}
}
