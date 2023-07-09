<?php

class M_datapenjualan extends CI_Model
{
    public function tampil_data()
    {
        return $this->db->get('tb_barang');
    }

    public function input_data($data)
    {
        $this->db->insert('tb_barang', $data);
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
        $this->db->from('tb_barang');
        $this->db->like('tanggal', $keyword);
        $this->db->or_like('nama_barang', $keyword);
        $this->db->or_like('harga_barang', $keyword);
        $this->db->or_like('qty', $keyword);
        $this->db->or_like('total', $keyword);
        return $this->db->get()->result();
    }
    public function get_harga_barang($nama_barang)
    {
        $this->db->select('harga_jual');
        $this->db->from('tb_databarang');
        $this->db->where('namaProduk', $nama_barang);
        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query->row();
        } else {
            return null;
        }
    }



}