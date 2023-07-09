<?php

class datarekening extends CI_Controller
{
    public function index()
    {
        $data['datarekening'] = $this->m_datarekening->tampil_data()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('datarekening', $data);
        $this->load->view('templates/footer');
    }

    public function tambah_aksi()
    {
        $nama_bank = $this->input->post('nama_bank');
        $no_rekening = $this->input->post('no_rekening');
        $nama_pemilik = $this->input->post('nama_pemilik');

        $data = array(
            'nama_bank' => $nama_bank,
            'no_rekening' => $no_rekening,
            'nama_pemilik' => $nama_pemilik,
        );

        $this->m_datarekening->input_data($data, 'tb_rekening');
        redirect('datarekening/index');
    }

    public function hapus($id)
    {
        $where = array('id' => $id);
        $this->m_datarekening->hapus_data($where, 'tb_rekening');
        redirect('datarekening/index');
    }

    public function hapus_data($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }

    public function edit_data10($id)
    {
        $where = array('id' => $id);
        $data['datarekening'] = $this->m_datarekening->edit_data($where, 'tb_rekening')->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('edit_data10', $data);
        $this->load->view('templates/footer');
    }

    public function update()
    {
        $id = $this->input->post('id');
        $nama_bank = $this->input->post('nama_bank');
        $no_rekening = $this->input->post('no_rekening');
        $nama_pemilik = $this->input->post('nama_pemilik');

        $data = array(
            'nama_bank' => $nama_bank,
            'no_rekening' => $no_rekening,
            'nama_pemilik' => $nama_pemilik,

        );

        $where = array(
            'id' => $id
        );

        $this->m_datarekening->update_data($where, $data, 'tb_rekening');
        redirect('datarekening/index');
    }
    public function search()
    {
        $keyword = $this->input->post('keyword');
        $data['datarekening'] = $this->m_datarekening->get_keyword($keyword);
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('datarekening', $data);
        $this->load->view('templates/footer');
    }
}