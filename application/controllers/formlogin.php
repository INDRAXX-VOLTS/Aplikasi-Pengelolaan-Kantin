<?php 
class Formlogin extends CI_Controller
{
    public function index()
    {
        $data['title'] = "formlogin";
        $this->load->view('formlogin', $data);
    }
}