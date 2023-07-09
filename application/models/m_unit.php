<?php

class M_unit extends CI_Model
{
    public function tampil_data()
    {
        return $this->db->get('tb_unit');
    }

    public function input_data($data)
    {
        $this->db->insert('tb_unit', $data);
    }

    public function hapus_data($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }

    public function edit_data($where, $table)
    {
        return $this->db->get_where($table, $where);
    }

    public function update_data($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }
    public function get_keyword($keyword)
    {
        $this->db->select('*');
        $this->db->from('tb_unit');
        $this->db->like('unit', $keyword);
        return $this->db->get()->result();
    }
}