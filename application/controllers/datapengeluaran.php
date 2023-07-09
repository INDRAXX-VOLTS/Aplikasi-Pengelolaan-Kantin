<?php

class datapengeluaran extends CI_Controller
{
    public function index()
    {

        $data['datapengeluaran'] = $this->m_pengeluaran->tampil_data()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('datapengeluaran', $data);
        $this->load->view('templates/footer');
    }

    public function tambah_aksi()
    {

        $tanggal = $this->input->post('tanggal');
        $tenant = $this->input->post('tenant');
        $total = $this->input->post('total');

        $data = array(
            'tanggal' => $tanggal,
            'tenant' => $tenant,
            'total' => $total,
        );

        $this->m_pengeluaran->input_data($data, 'tb_pengeluaran');
        redirect('datapengeluaran/index');
    }

    public function hapus($id)
    {
        $where = array('id' => $id);
        $this->m_pengeluaran->hapus_data($where, 'tb_pengeluaran');
        redirect('datapengeluaran/index');
    }

    public function hapus_data($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }

    public function edit_data4($id)
    {

        $where = array('id' => $id);
        $data['datapengeluaran'] = $this->m_pengeluaran->edit_data($where, 'tb_pengeluaran')->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('edit_data4', $data);
        $this->load->view('templates/footer');
    }

    public function update()
    {
        $id = $this->input->post('id');
        $tanggal = $this->input->post('tanggal');
        $tenant = $this->input->post('tenant');
        $total = $this->input->post('total');

        $data = array(
            'tanggal' => $tanggal,
            'tenant' => $tenant,
            'total' => $total,

        );

        $where = array(
            'id' => $id
        );


        $this->m_pengeluaran->update_data($where, $data, 'tb_pengeluaran');
        redirect('datapengeluaran/index');
    }
    public function search()
    {
        $keyword = $this->input->post('keyword');
        $data['datapengeluaran'] = $this->m_pengeluaran->get_keyword($keyword);
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('datapengeluaran', $data);
        $this->load->view('templates/footer');
    }
    public function print()
    {
        $data['datapengeluaran'] = $this->m_pengeluaran->tampil_data("tb_pengeluaran")->result();
        $this->load->view('print_datapengeluaran', $data);
    }
}