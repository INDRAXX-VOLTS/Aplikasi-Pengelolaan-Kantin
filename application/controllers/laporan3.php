<?php

class laporan3 extends CI_Controller
{
    public function index()
    {
        $this->load->model('m_laporan');
        $data['laporan'] = $this->m_laporan->tampil_data()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar2');
        $this->load->view('laporan3', $data);
        $this->load->view('templates/footer');
    }
}