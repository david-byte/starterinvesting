<?php
defined('BASEPATH') or exit('Ação não permitida');

class Cliente extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $data = array(
            'title' => 'Cliente'
        );
        $this->load->view('layout/header', $data);
        $this->load->view('cliente/index');
        $this->load->view('layout/footer');
    }
}
