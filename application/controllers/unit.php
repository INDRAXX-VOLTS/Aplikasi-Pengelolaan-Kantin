<?php

class unit extends CI_Controller
{
    public function index()
    {
        $data['unit'] = $this->m_unit->tampil_data()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('unit', $data);
        $this->load->view('templates/footer');
    }

    public function tambah_aksi()
    {
        $unit = $this->input->post('unit');

        $data = array(
            'unit' => $unit,

        );

        $this->m_unit->input_data($data, 'tb_unit');
        redirect('unit/index');
    }

    public function hapus($id)
    {
        $where = array('id' => $id);
        $this->m_unit->hapus_data($where, 'tb_unit');
        redirect('unit/index');
    }

    public function hapus_data($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }

    public function edit_data7($id)
    {
        $where = array('id' => $id);
        $data['unit'] = $this->m_unit->edit_data($where, 'tb_unit')->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('edit_data7', $data);
        $this->load->view('templates/footer');
    }

    public function update()
    {
        $id = $this->input->post('id');
        $unit = $this->input->post('unit');

        $data = array(
            'unit' => $unit,

        );

        $where = array(
            'id' => $id
        );

        $this->m_unit->update_data($where, $data, 'tb_unit');
        redirect('unit/index');
    }
    public function search()
    {
        $keyword = $this->input->post('keyword');
        $data['unit'] = $this->m_unit->get_keyword($keyword);
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('unit', $data);
        $this->load->view('templates/footer');
    }
}