<?php
class M_agenda extends CI_Model{

	function get_all_agenda(){
		$hsl=$this->db->query("SELECT tbl_agenda.*,DATE_FORMAT(agenda_tanggal,'%d/%m/%Y') AS tanggal, date_format(agenda_mulai, '%d-%m-%Y') AS tanggal_mulai, date_format(agenda_selesai, '%d-%m-%Y') AS tanggal_selesai FROM tbl_agenda ORDER BY agenda_id DESC");
		return $hsl;
	}
	function simpan_agenda($nama_agenda,$deskripsi,$mulai,$selesai,$tempat,$waktu,$keterangan,$file,$pengguna_id,$slug){
		$author=$this->session->userdata('nama');
		$hsl=$this->db->query("INSERT INTO tbl_agenda(agenda_nama,agenda_deskripsi,agenda_mulai,agenda_selesai,agenda_tempat,agenda_waktu,agenda_keterangan,agenda_file,agenda_author,agenda_slug) VALUES ('$nama_agenda','$deskripsi','$mulai','$selesai','$tempat','$waktu','$keterangan','$file','$pengguna_id','$slug')");
		return $hsl;
	}
	function get_file_byid($agenda_id){
		$hsl = $this->db->query("SELECT * FROM tbl_agenda WHERE agenda_id='$agenda_id'");
		return $hsl->row(); // Mengembalikan satu baris data sebagai objek
	}	
	function get_agenda_file($agenda_id) {
        $result = $this->db->select('agenda_file')->where('agenda_id', $agenda_id)->get('tbl_agenda')->row();
        return isset($result->agenda_file) ? $result->agenda_file : NULL;
    }
	function update_agenda($agenda_id,$nama_agenda,$deskripsi,$mulai,$selesai,$tempat,$waktu,$keterangan,$file,$pengguna_id,$slug){
		$author=$this->session->userdata('nama');
		$hsl=$this->db->query("UPDATE tbl_agenda SET agenda_nama='$nama_agenda',agenda_deskripsi='$deskripsi',agenda_mulai='$mulai',agenda_selesai='$selesai',agenda_tempat='$tempat',agenda_waktu='$waktu',agenda_keterangan='$keterangan',agenda_author='$author',agenda_file='$file',agenda_author='$pengguna_id',agenda_slug='$slug' where agenda_id='$agenda_id'");
		return $hsl;
	}
	function hapus_agenda($agenda_id) {
		$this->db->where('agenda_id', $agenda_id);
		$this->db->delete('tbl_agenda');
	}

	//front-end
	function get_agenda_home(){
		$hsl=$this->db->query("SELECT tbl_agenda.*,DATE_FORMAT(agenda_tanggal,'%d/%m/%Y') AS tanggal FROM tbl_agenda ORDER BY agenda_id DESC limit 3");
		return $hsl;
	}
	function agenda(){
		$hsl=$this->db->query("SELECT tbl_agenda.*,DATE_FORMAT(agenda_tanggal,'%d/%m/%Y') AS tanggal FROM tbl_agenda ORDER BY agenda_id DESC");
		return $hsl;
	}
	function agenda_perpage($offset,$limit){
		$hsl=$this->db->query("SELECT tbl_agenda.*,DATE_FORMAT(agenda_tanggal,'%d/%m/%Y') AS tanggal FROM tbl_agenda ORDER BY agenda_id DESC limit $offset,$limit");
		return $hsl;
	}

	function get_agenda_by_kode($kode){
		$hsl=$this->db->query("SELECT ta.*, tp.pengguna_nama, DATE_FORMAT(ta.agenda_tanggal,'%d/%m/%Y') AS tanggal,
		DATE_FORMAT(ta.agenda_mulai,'%d/%m/%Y') AS mulai, DATE_FORMAT(ta.agenda_selesai,'%d/%m/%Y') AS selesai
		FROM tbl_agenda ta left JOIN tbl_pengguna tp ON ta.agenda_author=tp.pengguna_id where agenda_id='$kode'");
		return $hsl;
	}

	function cari_agenda($keyword){
		$hsl=$this->db->query("SELECT tbl_agenda.*,DATE_FORMAT(agenda_tanggal,'%d/%m/%Y') AS tanggal, date_format(agenda_mulai, '%d-%m-%Y') AS tanggal_mulai, date_format(agenda_selesai, '%d-%m-%Y') AS tanggal_selesai FROM tbl_agenda WHERE agenda_nama LIKE '%$keyword%' LIMIT 5");
		return $hsl;
	}

} 