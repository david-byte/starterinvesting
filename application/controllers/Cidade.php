<?php
defined('BASEPATH') or exit('Ação não permitida');

class Cidade extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('cidade_model');
    }

    public function index()
    {
        $data = array(
            'title' => 'Cidade',            
            'cidades' => $this->cidade_model->get_all()
        );

        /*echo '<pre>';
        print_r($data['cidades']);
        exit();*/

        $this->load->view('layout/header', $data);
        $this->load->view('layout/sidebar');
        $this->load->view('layout/navbar');
        $this->load->view('cidade/cidade_list');
        $this->load->view('layout/footer');
    }

    public function create()
    {
        $this->load->model('estado_model');
        $rowuf = $this->estado_model->get_all();


        $data = array(
            'title' => 'Cadastrar nova Cidade',
            'button' => 'Create',
            'action' => site_url('cidade/create_action'),
            'ruf_data' => $rowuf,
    
            
            'cidade_id' => set_value('cidade_id'),
            'cidade_nome' => set_value('cidade_nome'),
            'fk_uf' => set_value('fk_uf')
           
        );

       /* echo '<pre>';
        print_r($data);
        exit();*/
              
        $this->load->view('layout/header', $data);
        $this->load->view('layout/sidebar');
        $this->load->view('layout/navbar');
        $this->load->view('cidade/cidade_form');
        $this->load->view('layout/footer');
    }

    public function create_action()
    {
        $this->_rules();
        
        if($this->form_validation->run() == FALSE)
        {
            $this->create();
        }
        else
        {
            $data = array(
                'cidade_nome' => $this->input->post('cidade_nome', TRUE),
                'fk_estado_id' => strtoupper($this->input->post('fk_estado_id', TRUE))

            );

            /*echo '<pre>';
            print_r($data);
            exit();*/

           // $data = $this->security->xss_clean($data);
          //  $data = html_escape($data);

            $result = $this->cidade_model->insert($data);

            if($result > 0)
            {
                $this->session->set_flashdata('sucesso', 'Dados salvos com sucesso');
            }
            else{
                $this->session->set_fleshadata('error', 'Erro ao salvar dados!');
            }
            redirect(site_url('cidade'));
        }
        
    }

    public function _rules()
    {
        $this->form_validation->set_rules('cidade_nome', '', 'trim|required|max_length[100]');
    }
}

