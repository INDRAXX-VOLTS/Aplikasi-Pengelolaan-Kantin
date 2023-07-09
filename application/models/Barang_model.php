<?php
class Barang_model extends CI_Model
{
    public function get_all_barang()
    {
        $query = $this->db->get('tb_databarang');
        return $query->result_array();
    }


}