<?php

class M_databarang extends CI_Model
{
    public function tampil_data()
    {
        return $this->db->get('tb_databarang');
    }

    public function input_data($data)
    {
        $this->db->insert('tb_databarang', $data);
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
        $this->db->from('tb_databarang');
        $this->db->like('nama_barang', $keyword);
        $this->db->or_like('kategori', $keyword);
        $this->db->or_like('unit', $keyword);
        $this->db->or_like('stok', $keyword);
        $this->db->or_like('harga_jual', $keyword);
        return $this->db->get()->result();
    }

    function join($table, $tbljoin, $join)
    {
        $this->db->join($tbljoin, $join);
        return $this->db->get($table);
    }
}