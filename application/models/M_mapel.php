<?php
class M_mapel extends CI_Model{

	function get_all_mapel(){
		$hsl=$this->db->query("SELECT * FROM tbl_mapel ORDER BY id_mapel DESC");
		return $hsl;
	}

	function get_all_kelas(){
		$hsl=$this->db->query("SELECT * FROM tbl_kelas");
		return $hsl;
	}
    
	function simpan_mapel($mapel,$keterangan){
		$hsl=$this->db->query("insert into tbl_mapel(nama_mapel,keterangan_mapel) values ('$mapel','$keterangan')");
		return $hsl;
	}
    
	function simpan_kelas($kelas, $keterangank){
		$hsl = $this->db->query("insert into tbl_kelas(kelas_nama, keterangan) values ('$kelas','$keterangank')");
		return $hsl;
	}
	function get_tulisan_by_kode($kode){
		$hsl=$this->db->query("SELECT tbl_tulisan.*,DATE_FORMAT(tulisan_tanggal,'%d/%m/%Y') AS tanggal FROM tbl_tulisan where tulisan_id='$kode'");
		return $hsl;
	}
	function update_mapel($kode,$mapel,$keterangan){
		$hsl=$this->db->query("update tbl_mapel set nama_mapel='$mapel',keterangan_mapel='$keterangan' where id_mapel='$kode'");
		return $hsl;
	}

	function update_kelas($id, $kelas, $keterangank){
		$data=$this->db->query("update tbl_kelas set kelas_nama='$kelas', keterangan='$keterangank' where kelas_id='$id'");
		return $data;
	}

	function hapus_mapel($kode){
		$hsl=$this->db->query("delete from tbl_mapel where id_mapel='$kode'");
		return $hsl;
	}
	 function hapus_kelas($kode){
		$data = $this->db->query("delete from tbl_kelas where kelas_id='$kode'");
		return $data;
	 }

}