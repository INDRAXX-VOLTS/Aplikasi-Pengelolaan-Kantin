<?php

class datauser extends CI_Controller
{
    public function index()
    {
        $data['datauser'] = $this->m_user->tampil_data()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('datauser', $data);
        $this->load->view('templates/footer');
    }

    public function tambah_aksi()
    {
        $username = $this->input->post('username');

        $data = array(
            'username' => $username,
        );

        $this->m_user->input_data($data, 'tb_user');
        redirect('datauser/index');
    }

    public function hapus($id)
    {
        $where = array('id' => $id);
        $this->m_user->hapus_data($where, 'tb_user');
        redirect('datauser/index');
    }

    public function hapus_data($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }

    public function edit_data($id)
    {
        $where = array('id' => $id);
        $data['datauser'] = $this->m_user->edit_data($where, 'tb_user')->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('edit_data', $data);
        $this->load->view('templates/footer');
    }

    public function update()
    {
        $id = $this->input->post('id');
        $username = $this->input->post('username');

        $data = array(
            'username' => $username,

        );

        $where = array(
            'id' => $id
        );

        $this->m_user->update_data($where, $data, 'tb_user');
        redirect('datauser/index');
    }
    public function search()
    {
        $keyword = $this->input->post('keyword');
        $data['datauser'] = $this->m_user->get_keyword($keyword);
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('datauser', $data);
        $this->load->view('templates/footer');
    }
}