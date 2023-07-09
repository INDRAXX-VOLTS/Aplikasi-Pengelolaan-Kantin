<?php

class databarang extends CI_Controller
{
    public function index()
    {
        $data['databarang'] = $this->m_databarang->tampil_data()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('databarang', $data);
        $this->load->view('templates/footer');
    }

    public function tambah_aksi()
    {
        $namaProduk = $this->input->post('namaProduk');
        $kodeProduk = $this->input->post('kodeProduk');
        $kategori = $this->input->post('kategori');
        $unit = $this->input->post('unit');
        $stok = $this->input->post('stok');
        $harga_jual = $this->input->post('harga_jual');


        $data = array(
            'namaProduk' => $namaProduk,
            'kodeProduk' => $kodeProduk,
            'kategori' => $kategori,
            'unit' => $unit,
            'stok' => $stok,
            'harga_jual' => $harga_jual,
        );

        $this->m_databarang->input_data($data, 'tb_databarang');
        redirect('databarang/index');
    }

    public function hapus($id)
    {
        $where = array('id' => $id);
        $this->m_databarang->hapus_data($where, 'tb_databarang');
        redirect('databarang/index');
    }

    public function hapus_data($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }

    public function edit_data8($id)
    {
        $where = array('id' => $id);
        $data['databarang'] = $this->m_databarang->edit_data($where, 'tb_databarang')->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('edit_data8', $data);
        $this->load->view('templates/footer');
    }

    public function update()
    {
        $id = $this->input->post('id');
        $namaProduk = $this->input->post('namaProduk');
        $kategori = $this->input->post('kategori');
        $unit = $this->input->post('unit');
        $stok = $this->input->post('stok');
        $harga_jual = $this->input->post('harga_jual');

        $data = array(
            'namaProduk' => $namaProduk,
            'kategori' => $kategori,
            'unit' => $unit,
            'stok' => $stok,
            'harga_jual' => $harga_jual,

        );

        $where = array(
            'id' => $id
        );

        $this->m_databarang->update_data($where, $data, 'tb_databarang');
        redirect('databarang/index');
    }
    public function search()
    {
        $keyword = $this->input->post('keyword');
        $data['databarang'] = $this->m_databarang->get_keyword($keyword);
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('databarang', $data);
        $this->load->view('templates/footer');
    }

}

