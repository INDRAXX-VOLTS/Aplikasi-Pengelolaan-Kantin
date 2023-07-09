<?php

class M_laporan extends CI_Model
{
    public function tampil_data()
    {
        return $this->db->get('tb_laporan');
    }

    public function input_data($data)
    {
        $this->db->insert('tb_laporan', $data);
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
        $this->db->from('tb_laporan');
        $this->db->like('tanggal', $keyword);
        $this->db->like('total_datapenjualan', $keyword);
        $this->db->or_like('total_pemasukantenant', $keyword);
        $this->db->or_like('total_datapengeluaran', $keyword);
        return $this->db->get()->result();
    }

    function join($table, $tbljoin, $join)
    {
        $this->db->join($tbljoin, $join);
        return $this->db->get($table);
    }
}