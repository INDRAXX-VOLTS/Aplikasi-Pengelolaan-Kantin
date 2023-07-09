<?php

class datatenant extends CI_Controller
{
    public function index()
    {

        $data['datatenant'] = $this->m_tenant->tampil_data()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('datatenant', $data);
        $this->load->view('templates/footer');
    }

    public function tambah_aksi()
    {

        $nama = $this->input->post('nama');
        $keterangan = $this->input->post('keterangan');

        $data = array(
            'nama' => $nama,
            'keterangan' => $keterangan,
        );

        $this->m_tenant->input_data($data, 'tb_tenant');
        redirect('datatenant/index');
    }

    public function hapus($id)
    {

        $where = array('id' => $id);
        $this->m_tenant->hapus_data($where, 'tb_tenant');
        redirect('datatenant/index');
    }

    public function hapus_data($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }

    public function edit_data5($id)
    {

        $where = array('id' => $id);
        $data['datatenant'] = $this->m_tenant->edit_data($where, 'tb_tenant')->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('edit_data5', $data);
        $this->load->view('templates/footer');
    }

    public function update()
    {
        $id = $this->input->post('id');
        $nama = $this->input->post('nama');
        $keterangan = $this->input->post('keterangan');


        $data = array(
            'nama' => $nama,
            'keterangan' => $keterangan,

        );

        $where = array(
            'id' => $id
        );

        $this->m_tenant->update_data($where, $data, 'tb_tenant');
        redirect('datatenant/index');
    }
    public function search()
    {
        $keyword = $this->input->post('keyword');
        $data['datatenant'] = $this->m_tenant->get_keyword($keyword);
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('datatenant', $data);
        $this->load->view('templates/footer');
    }
}
