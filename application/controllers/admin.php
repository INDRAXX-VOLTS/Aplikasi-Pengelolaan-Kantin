<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function dashboard()
	{
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('dashboard');
		$this->load->view('templates/footer');

	}
	public function data_penjualan()
	{
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('data_penjualan');
		$this->load->view('templates/footer');

	}
	public function data_pemasukantenant()
	{
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('data_pemasukantenant');
		$this->load->view('templates/footer');
	}
	public function data_pengeluaran()
	{
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('data_pengeluaran');
		$this->load->view('templates/footer');
	}
	public function data_tenant()
	{
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('data_tenant');
		$this->load->view('templates/footer');
	}
	public function data_user()
	{
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('data_user');
		$this->load->view('templates/footer');
	}
	public function data_kategori()
	{
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('data_kategori');
		$this->load->view('templates/footer');
	}
	public function data_unit()
	{
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('data_unit');
		$this->load->view('templates/footer');
	}
	public function data_barang()
	{
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('data_barang');
		$this->load->view('templates/footer');
	}
	public function laporan()
	{
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('laporan');
		$this->load->view('templates/footer');
	}
}
