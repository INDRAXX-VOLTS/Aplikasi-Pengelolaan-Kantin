<?php
class Tenant_model extends CI_Model
{
    public function get_all_tenant()
    {
        $query = $this->db->get('tb_tenant');
        return $query->result_array();
    }

}