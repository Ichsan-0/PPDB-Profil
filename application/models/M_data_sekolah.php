<?php
class M_data_sekolah extends CI_Model{

	public function get_all_data() {
        $query = $this->db->get('data_sekolah');
        return $query->result_array();
    }

    public function update_data_sekolah($data) {
        foreach ($data as $key => $value) {
            $this->db->where('key', $key);
            $this->db->update('data_sekolah', array('content' => $value));
        }
    }
    public function get_data_by_id($id) {
        $this->db->where('id', $id);
        $query = $this->db->get('profil_sekolah');
        return $query->row_array();
    }

    public function update_data_by_id($id, $data) {
        $this->db->where('id', $id);
        $this->db->update('profil_sekolah', $data);
    }

    public function get_current_file_by_id($id) {
        $this->db->select('file_foto');
        $this->db->where('id', $id);
        $query = $this->db->get('profil_sekolah');
        $result = $query->row_array();
        return isset($result['file_foto']) ? $result['file_foto'] : null;
    }
}

