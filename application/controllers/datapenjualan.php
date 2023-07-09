<?php

class datapenjualan extends CI_Controller
{
    public function index()
    {

        $this->load->model('m_datapenjualan');
        $data['datapenjualan'] = $this->m_datapenjualan->tampil_data()->result();
        $this->load->model('Barang_model');
        $data['data_barang'] = $this->Barang_model->get_all_barang();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('datapenjualan', $data);
        $this->load->view('templates/footer');
    }
    public function get_harga_jual()
{
    $nama_barang = $this->input->post('nama_barang');

    $this->load->model('M_datapenjualan');
    $harga_barang = $this->M_datapenjualan->get_harga_barang($nama_barang);

    if ($harga_barang) {
        echo json_encode($harga_barang);
    } else {
        echo json_encode(array('harga_jual' => 'Harga tidak tersedia'));
    }
    }



    public function tambah_aksi()
    {

        $tanggal = $this->input->post('tanggal');
        $nama_barang = $this->input->post('nama_barang');
        $harga_barang = $this->input->post('harga_barang');
        $qty = $this->input->post('qty');


        $data = [
            'tanggal' => $tanggal,
            'nama_barang' => $nama_barang,
            'harga_barang' => $harga_barang,
            'qty' => $qty,

        ];

        $this->m_datapenjualan->input_data($data, 'tb_barang');
        redirect('datapenjualan/index');
    }

    public function hapus($id)
    {
        $where = array('id' => $id);
        $this->m_datapenjualan->hapus_data($where, 'tb_barang');
        redirect('datapenjualan/index');
    }

    public function hapus_data($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }

    public function edit_data($id)
    {
        $this->load->model('Barang_model');
        $data['data_barang'] = $this->Barang_model->get_all_barang();
        $where = array('id' => $id);
        $data['datapenjualan'] = $this->m_datapenjualan->edit_data($where, 'tb_barang')->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('edit_data', $data);
        $this->load->view('templates/footer');
    }

    public function update()
    {
        $id = $this->input->post('id');
        $tanggal = $this->input->post('tanggal');
        $nama_barang = $this->input->post('nama_barang');
        $harga_barang = $this->input->post('harga_barang');
        $qty = $this->input->post('qty');
        $total = $this->input->post('total');

        $data = array(
            'tanggal' => $tanggal,
            'nama_barang' => $nama_barang,
            'harga_barang' => $harga_barang,
            'qty' => $qty,
            'total' => $total

        );

        $where = array(
            'id' => $id
        );


        $this->m_datapenjualan->update_data($where, $data, 'tb_barang');
        redirect('datapenjualan/index');
    }
    public function search()
    {
        $keyword = $this->input->post('keyword');
        $data['datapenjualan'] = $this->m_datapenjualan->get_keyword($keyword);
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('datapenjualan', $data);
        $this->load->view('templates/footer');
    }
    public function print()
    {
        $data['datapenjualan'] = $this->m_datapenjualan->tampil_data("tb_barang")->result();
        $this->load->view('print_datapenjualan', $data);
    }



}
