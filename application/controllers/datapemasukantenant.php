<?php

class datapemasukantenant extends CI_Controller
{
    public function index()
    {
        $data['datapemasukantenant'] = $this->m_pemasukantenant->tampil_data()->result();
        $this->load->model('tenant_model');
        $data['data_tenant'] = $this->tenant_model->get_all_tenant();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('datapemasukantenant', $data);
        $this->load->view('templates/footer');
    }

    public function tambah_aksi()
    {
        $tanggal = $this->input->post('tanggal');
        $nama_tenant = $this->input->post('nama_tenant');
        $total_pemasukantenant = $this->input->post('total_pemasukantenant');

        $data = array(
            'tanggal' => $tanggal,
            'nama_tenant' => $nama_tenant,
            'total_pemasukantenant' => $total_pemasukantenant,
        );

        $this->m_pemasukantenant->input_data($data, 'tb_pemasukantenant');
        redirect('datapemasukantenant/index');
    }

    public function hapus($id)
    {
        $where = array('id' => $id);
        $this->m_pemasukantenant->hapus_data($where, 'tb_pemasukantenant');
        redirect('datapemasukantenant/index');
    }

    public function hapus_data($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }

    public function edit_data3($id)
    {
        $where = array('id' => $id);
        $data['datapemasukantenant'] = $this->m_pemasukantenant->edit_data($where, 'tb_pemasukantenant')->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('edit_data3', $data);
        $this->load->view('templates/footer');
    }

    public function update()
    {
        $id = $this->input->post('id');
        $tanggal = $this->input->post('tanggal');
        $nama_tenant = $this->input->post('nama_tenant');
        $total_pemasukantenant = $this->input->post('total_pemasukantenant');

        $data = array(
            'tanggal' => $tanggal,
            'nama_tenant' => $nama_tenant,
            'total_pemasukantenant' => $total_pemasukantenant
        );

        $where = array(
            'id' => $id
        );

        $this->m_pemasukantenant->update_data($where, $data, 'tb_pemasukantenant');
        redirect('datapemasukantenant/index');
    }
    public function search_by_date()
    {
        $tanggal = $this->input->post('tanggal');
        $data['datapemasukantenant'] = $this->m_pemasukantenant->get_by_date($tanggal);
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('datapemasukantenant', $data);
        $this->load->view('templates/footer');
    }

    public function print()
    {
        $data['datapemasukantenant'] = $this->m_pemasukantenant->tampil_data("tb_pemasukantenant")->result();
        $this->load->view('print_datapemasukantenant', $data);
    }
}