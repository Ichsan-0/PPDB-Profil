<?php
class M_login extends CI_Model{

    public function cek_login($username, $password) {
        $this->db->where('pengguna_username', $username);
        $this->db->where('pengguna_password', md5($password));
        $query = $this->db->get('tbl_pengguna');

        return $query->row();
    }

}
