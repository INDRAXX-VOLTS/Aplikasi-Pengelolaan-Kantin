<?php

class datatransaksi extends CI_Controller
{
    public function index()
    {
        $data['datatransaksi'] = $this->m_datatransaksi->tampil_data()->result();
        $this->load->model('tenant_model');
        $data['data_tenant'] = $this->tenant_model->get_all_tenant();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('datatransaksi', $data);
        $this->load->view('templates/footer');
    }

    public function tambah_aksi()
    {
        $kodeProduk = $this->input->post('kodeProduk');
        $namaProduk = $this->input->post('namaProduk');
        $harga_jual = $this->input->post('harga_jual');
        $tanggal = $this->input->post('tanggal');
        $total = intval($this->input->post('total'));
        $dibayar = intval($this->input->post('dibayar'));
        $kembali = $dibayar - $total;


        $data = array(
            'kodeProduk' => $kodeProduk,
            'namaProduk' => $namaProduk,
            'harga_jual' => $harga_jual,
            'tanggal' => $tanggal,
            'total' => $total,
            'dibayar' => $dibayar,
            'kembali' => $kembali,
        );

        $this->m_datatransaksi->input_data($data, 'tb_transaksi');
        redirect('datatransaksi/index');
    }

    public function hapus($id)
    {
        $where = array('id' => $id);
        $this->m_datatransaksi->hapus_data($where, 'tb_transaksi');
        redirect('datatransaksi/index');
    }

    public function hapus_data($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }

    public function edit_data12($id)
    {
        $where = array('id' => $id);
        $data['datatransaksi'] = $this->m_datatransaksi->edit_data($where, 'tb_transaksi')->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('edit_data12', $data);
        $this->load->view('templates/footer');
    }

    public function update()
    {
        $id = $this->input->post('id');
        $kodeProduk = $this->input->post('kodeProduk');
        $namaProduk = $this->input->post('namaProduk');
        $harga_jual = $this->input->post('harga_jual');
        $tanggal = $this->input->post('tanggal');
        $total = $this->input->post('total');
        $dibayar = $this->input->post('dibayar');
        $kembali = $this->input->post('kembali');

        $data = array(
            'kodeProduk' => $kodeProduk,
            'namaProduk' => $namaProduk,
            'harga_jual' => $harga_jual,
            'tanggal' => $tanggal,
            'total' => $total,
            'dibayar' => $dibayar,
            'kembali' => $kembali
        );

        $where = array(
            'id' => $id
        );

        $this->m_datatransaksi->update_data($where, $data, 'tb_transaksi');
        redirect('datatransaksi/index');
    }

    public function print()
    {
        $data['datatransaksi'] = $this->m_datatransaksi->tampil_data("tb_transaksi")->result();
        $this->load->view('print_datatransaksi', $data);
    }

    public function detail($id)
    {
        $this->load->model('m_datatransaksi');
        $detail = $this->m_datatransaksi->detail_data($id);
        $data['detail'] = $detail;
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('detail', $data);
        $this->load->view('templates/footer');
    }
}

    