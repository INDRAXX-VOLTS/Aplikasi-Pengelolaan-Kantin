<?php

class kategori extends CI_Controller
{
    public function index()
    {
        $data['kategori'] = $this->m_kategori->tampil_data()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('kategori', $data);
        $this->load->view('templates/footer');
    }

    public function tambah_aksi()
    {
        $kategori = $this->input->post('kategori');

        $data = array(
            'kategori' => $kategori,

        );

        $this->m_kategori->input_data($data, 'tb_kategori');
        redirect('kategori/index');
    }

    public function hapus($id)
    {
        $where = array('id' => $id);
        $this->m_kategori->hapus_data($where, 'tb_kategori');
        redirect('kategori/index');
    }

    public function hapus_data($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }

    public function edit_data6($id)
    {
        $where = array('id' => $id);
        $data['kategori'] = $this->m_kategori->edit_data($where, 'tb_kategori')->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('edit_data6', $data);
        $this->load->view('templates/footer');
    }

    public function update()
    {
        $id = $this->input->post('id');
        $kategori = $this->input->post('kategori');

        $data = array(
            'kategori' => $kategori,

        );

        $where = array(
            'id' => $id
        );

        $this->m_kategori->update_data($where, $data, 'tb_kategori');
        redirect('kategori/index');
    }
    public function search()
    {
        $keyword = $this->input->post('keyword');
        $data['kategori'] = $this->m_kategori->get_keyword($keyword);
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('kategori', $data);
        $this->load->view('templates/footer');
    }
}
