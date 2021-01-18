<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Estado extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
        $this->load->model('estado_model');
        $this->load->library(['ion_auth']);	
		
		if(!$this->ion_auth->logged_in())
		{
			redirect('auth/login', 'refresh');
		}
	}

	public function index()
	{
        $data = array(
            'title' => 'Estados',
            'estados' => $this->estado_model->get_all()
        );

        $this->load->view('layout/header', $data);
        $this->load->view('layout/sidebar');
        $this->load->view('layout/navbar');
        $this->load->view('estado/estado_list');
        $this->load->view('layout/footer');
    }

    public function create()
    {
        $data = array(
            'title' => 'Cadastrar Estados',
        );

        $this->load->view('layout/header', $data);
        $this->load->view('layout/sidebar');
        $this->load->view('layout/navbar');
        $this->load->view('estado/estado_form');
        $this->load->view('layout/footer');
    }
}