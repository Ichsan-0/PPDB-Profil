<?php
class M_galeri extends CI_Model{

	function get_all_galeri(){
		$hsl=$this->db->query("SELECT tbl_galeri.*,DATE_FORMAT(galeri_tanggal,'%d/%m/%Y') AS tanggal,album_nama FROM tbl_galeri join tbl_album on galeri_album_id=album_id ORDER BY galeri_id DESC");
		return $hsl;
	}
	function get_all_slider(){
		$data=$this->db->query("SELECT ts.id as id,ts.judul as judul,ts.gambar as gambar,DATE_FORMAT(ts.tanggal,'%d/%m/%Y') AS tanggal, ts.deskripsi as deskripsi from tbl_slider ts where stat=1");
		return $data;
	}

	function get_brosur(){
		$data = $this->db->query("SELECT * from tbl_slider where stat=2");
		return $data->result_array();
	}

	function get_biaya(){
		$data = $this->db->query("SELECT * from tbl_slider where stat=3");
		return $data->result_array();
	}

	// Function to update brosur file in database
	public function update_brosur($file_name) {
		// You need to adjust the table name and column names according to your database structure
		$query = $this->db->get_where('tbl_slider', array('stat' => 2));
		$row = $query->row();
		$old_file_name = $row->gambar;
	
		// Delete the old file
		if (!empty($old_file_name)) {
			$old_file_path = './assets/images/' . $old_file_name; // Adjust the path according to your file location
			if (file_exists($old_file_path)) {
				unlink($old_file_path); // Delete the old file
			}
		}
		$data = array(
			'gambar' => $file_name,
			// You can add more fields if needed, for example: 'tanggal_upload' => date('Y-m-d H:i:s')
		);
	
		// Set the condition to update the entry where 'stat' is equal to 2
		$this->db->where('stat', 2); // Adjust the condition according to your requirement
	
		// Execute the update query
		$this->db->update('tbl_slider', $data);
	
		// Get the old file name
		
	}
	
	public function update_biaya($file_name) {
		// You need to adjust the table name and column names according to your database structure
		$query = $this->db->get_where('tbl_slider', array('stat' => 3));
		$row = $query->row();
		$old_file_name = $row->gambar;
	
		// Delete the old file
		if (!empty($old_file_name)) {
			$old_file_path = './assets/images/' . $old_file_name; // Adjust the path according to your file location
			if (file_exists($old_file_path)) {
				unlink($old_file_path); // Delete the old file
			}
		}
		$data = array(
			'gambar' => $file_name,
			// You can add more fields if needed, for example: 'tanggal_upload' => date('Y-m-d H:i:s')
		);
	
		// Set the condition to update the entry where 'stat' is equal to 2
		$this->db->where('stat', 3); // Adjust the condition according to your requirement
	
		// Execute the update query
		$this->db->update('tbl_slider', $data);
	
		// Get the old file name
		
	}
	
	

	function simpan_galeri($judul,$album,$user_id,$user_nama,$gambar){
		$this->db->trans_start();
            $this->db->query("insert into tbl_galeri(galeri_judul,galeri_album_id,galeri_pengguna_id,galeri_author,galeri_gambar) values ('$judul','$album','$user_id','$user_nama','$gambar')");
            $this->db->query("update tbl_album set album_count=album_count+1 where album_id='$album'");
        $this->db->trans_complete();
        if($this->db->trans_status()==true)
        return true;
        else
        return false;
	}
	
	function simpan_slider($judul,$gambar,$user_id,$deskripsi){
		$hsl=$this->db->query("INSERT INTO tbl_slider(judul,gambar,pengguna_id,deskripsi) VALUES ('$judul','$gambar','$user_id','$deskripsi')");
		return $hsl;
	}
	function update_galeri($galeri_id,$judul,$album,$user_id,$user_nama,$gambar){
		$hsl=$this->db->query("update tbl_galeri set galeri_judul='$judul',galeri_album_id='$album',galeri_pengguna_id='$user_id',galeri_author='$user_nama',galeri_gambar='$gambar' where galeri_id='$galeri_id'");
		return $hsl;
	}
	function update_slider($id,$judul,$user_id,$gambar,$deskripsi){
		$data=$this->db->query("update tbl_slider set judul='$judul',pengguna_id='$user_id',gambar='$gambar',deskripsi='$deskripsi' where id='$id'");
		return $data;
	}
	function update_galeri_tanpa_img($galeri_id,$judul,$album,$user_id,$user_nama){
		$hsl=$this->db->query("update tbl_galeri set galeri_judul='$judul',galeri_album_id='$album',galeri_pengguna_id='$user_id',galeri_author='$user_nama' where galeri_id='$galeri_id'");
		return $hsl;
	}
	function update_slider_tanpa_img($id,$judul,$user_id,$deskripsi){
		$data=$this->db->query("update tbl_slider set judul='$judul',pengguna_id='$user_id',deskripsi='$deskripsi' where id='$id'");
		return $data;
	}
	function hapus_galeri($kode,$album){
		$this->db->trans_start();
            $this->db->query("delete from tbl_galeri where galeri_id='$kode'");
            $this->db->query("update tbl_album set album_count=album_count-1 where album_id='$album'");
        $this->db->trans_complete();
        if($this->db->trans_status()==true)
        return true;
        else
        return false;
	}

	public function hapus_slider($id){
		$data=$this->db->query("delete from tbl_slider where id='$id'");
		return $data;
	}

	//Front-End
	function get_galeri_home(){
		$hsl=$this->db->query("SELECT tbl_galeri.*,DATE_FORMAT(galeri_tanggal,'%d/%m/%Y') AS tanggal,album_nama FROM tbl_galeri join tbl_album on galeri_album_id=album_id ORDER BY galeri_id DESC limit 4");
		return $hsl;
	}

	function get_galeri_by_album_id($idalbum){
		$hsl=$this->db->query("SELECT tbl_galeri.*,DATE_FORMAT(galeri_tanggal,'%d/%m/%Y') AS tanggal,album_nama FROM tbl_galeri join tbl_album on galeri_album_id=album_id where galeri_album_id='$idalbum' ORDER BY galeri_id DESC");
		return $hsl;
	}
	

}