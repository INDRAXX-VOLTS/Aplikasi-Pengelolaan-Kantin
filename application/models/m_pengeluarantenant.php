<?php

class M_pengeluarantenant extends CI_Model
{
    public function tampil_data()
    {
        return $this->db->get('tb_pengeluarantenant');
    }

    public function input_data($data)
    {
        $this->db->insert('tb_pengeluarantenant', $data);
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


    public function get_by_date($tanggal)
    {
        $this->db->where('tanggal', $tanggal);
        return $this->db->get('tb_pengeluarantenant')->result();
    }

}