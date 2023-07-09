<?php

class datapengeluarantenant extends CI_Controller
{
    public function index()
    {
        $data['datapengeluarantenant'] = $this->m_pengeluarantenant->tampil_data()->result();
        $this->load->model('tenant_model');
        $data['data_tenant'] = $this->tenant_model->get_all_tenant();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('datapengeluarantenant', $data);
        $this->load->view('templates/footer');
    }

    public function tambah_aksi()
    {
        $tanggal = $this->input->post('tanggal');
        $nama_tenant = $this->input->post('nama_tenant');
        $total_pengeluarantenant = $this->input->post('total_pengeluarantenant');

        $data = array(
            'tanggal' => $tanggal,
            'nama_tenant' => $nama_tenant,
            'total_pengeluarantenant' => $total_pengeluarantenant,
        );

        $this->m_pengeluarantenant->input_data($data, 'tb_pengeluarantenant');
        redirect('datapengeluarantenant/index');
    }

    public function hapus($id)
    {
        $where = array('id' => $id);
        $this->m_pengeluarantenant->hapus_data($where, 'tb_pengeluarantenant');
        redirect('datapengeluarantenant/index');
    }

    public function hapus_data($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }

    public function edit_data11($id)
    {
        $where = array('id' => $id);
        $data['datapengeluarantenant'] = $this->m_pengeluarantenant->edit_data($where, 'tb_pengeluarantenant')->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('edit_data11', $data);
        $this->load->view('templates/footer');
    }

    public function update()
    {
        $id = $this->input->post('id');
        $tanggal = $this->input->post('tanggal');
        $nama_tenant = $this->input->post('nama_tenant');
        $total_pengeluarantenant = $this->input->post('total_pengeluarantenant');

        $data = array(
            'tanggal' => $tanggal,
            'nama_tenant' => $nama_tenant,
            'total_pengeluarantenant' => $total_pengeluarantenant
        );

        $where = array(
            'id' => $id
        );

        $this->m_pengeluarantenant->update_data($where, $data, 'tb_pengeluarantenant');
        redirect('datapengeluarantenant/index');
    }
    public function search_by_date()
    {
        $tanggal = $this->input->post('tanggal');
        $data['datapengeluarantenant'] = $this->m_pengeluarantenant->get_by_date($tanggal);
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('datapengeluarantenant', $data);
        $this->load->view('templates/footer');
    }

    public function print()
    {
        $data['datapengeluarantenant'] = $this->m_pengeluarantenant->tampil_data("tb_pengeluarantenant")->result();
        $this->load->view('print_datapengeluarantenant', $data);
    }
}