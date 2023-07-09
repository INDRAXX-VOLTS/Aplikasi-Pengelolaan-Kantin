<?php 
class M_auth extends CI_Model
{
    public function cek_login()
    {
        $username = set_value('username');
        $password = set_value('password');
        $role_id = set_value('role_id');
        $is_active = set_value('is_active');

        $result = $this->db->where('username', $username)
            ->where('password', $password)
            ->where('role_id', $role_id)
            ->where('is_active', $is_active)
            ->limit(1)
            ->get('user');
        if ($result->num_rows() > 0) {
            return $result->row();
        } else {
            return false;
        }
    }
}

?>