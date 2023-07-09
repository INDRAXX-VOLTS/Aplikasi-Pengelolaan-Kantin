<?php

class laporan2 extends CI_Controller
{
    public function index()
    {
        $this->load->model('m_laporan');
        $data['laporan'] = $this->m_laporan->tampil_data()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar3');
        $this->load->view('laporan', $data);
        $this->load->view('templates/footer');
    }

    public function tambah_aksi()
    {
        $tanggal = $this->input->post('tanggal');
        $total_datapenjualan = $this->input->post('total_datapenjualan');
        $total_pemasukantenant = $this->input->post('total_pemasukantenant');
        $total_datapengeluaran = $this->input->post('total_datapengeluaran');


        $data = array(
            'tanggal' => $tanggal,
            'total_datapenjualan' => $total_datapenjualan,
            'total_pemasukantenant' => $total_pemasukantenant,
            'total_datapengeluaran' => $total_datapengeluaran,

        );

        $this->m_laporan->input_data($data, 'tb_laporan');
        redirect('laporan/index');
    }

    public function hapus($id)
    {
        $where = array('id' => $id);
        $this->m_laporan->hapus_data($where, 'tb_laporan');
        redirect('laporan/index');
    }

    public function hapus_data($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }

    public function edit_data9($id)
    {
        $where = array('id' => $id);
        $data['laporan'] = $this->m_laporan->edit_data($where, 'tb_laporan')->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar3');
        $this->load->view('edit_data9', $data);
        $this->load->view('templates/footer');
    }

    public function update()
    {
        $id = $this->input->post('id');
        $tanggal = $this->input->post('tanggal');
        $total_datapenjualan = $this->input->post('total_datapenjualan');
        $total_pemasukantenant = $this->input->post('total_pemasukantenant');
        $total_datapengeluaran = $this->input->post('total_datapengeluaran');


        $data = array(
            'tanggal' => $tanggal,
            'total_datapenjualan' => $total_datapenjualan,
            'total_pemasukantenant' => $total_pemasukantenant,
            'total_datapengeluaran' => $total_datapengeluaran,


        );

        $where = array(
            'id' => $id
        );

        $this->m_laporan->update_data($where, $data, 'tb_laporan');
        redirect('laporan/index');
    }
    public function search()
    {
        $keyword = $this->input->post('keyword');
        $data['laporan'] = $this->m_laporan->get_keyword($keyword);
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar3');
        $this->load->view('laporan', $data);
        $this->load->view('templates/footer');
    }
    public function print()
    {
        $data['laporan'] = $this->m_laporan->tampil_data("tb_laporan")->result();
        $this->load->view('print_laporan', $data);
    }
}
