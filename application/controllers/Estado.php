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
            'styles' => array(
                'vendor/datatables/dataTables.bootstrap4.min.css',
            ),
            'scripts' => array(
                'vendor/datatables/jquery.dataTables.min.js',
                'vendor/datatables/dataTables.bootstrap4.min.js',
                'vendor/datatables/app.js'
            ),
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
            'button' => 'Create',
            'action' => site_url('estado/create_action'),
            
            'estado_id' => set_value('estado_id'),
            'estado_nome' => set_value('estado_nome'),
            'estado_uf' => set_value('estado_uf')
        );

        $this->load->view('layout/header', $data);
        $this->load->view('layout/sidebar');
        $this->load->view('layout/navbar');
        $this->load->view('estado/estado_form');
        $this->load->view('layout/footer');
    }

    public function create_action()
    {
        $this->_rules();

        if($this->form_validation->run() === FALSE)
        {
            $this->create();
        }
        else
        {
            $data = array(
                'estado_nome' => $this->input->post('estado_nome'),
                'estado_uf' => strtoupper($this->input->post('estado_uf'))
            );

            $result = $this->estado_model->insert($data);

            if($result > 0)
            {
                $this->session->set_flashdata('sucesso', 'Dados salvos com sucesso!');
            }
            else
            {
                $this->session->set_flashdata('error', 'Erro ao salvar dados!');
            }
            redirect(site_url('estado'));
        }
    }

    public function update($id)
    {
        $row = $this->estado_model->get_by_id($id);

        if($row)
        {
            $data = array(
                'title' => 'Editar Estados',
                'button' => 'Update',
                'action' => site_url('estado/update_action'),

                'estado_id' => set_value('estado_id', $row->estado_id),
                'estado_nome' => set_value('estado_nome', $row->estado_nome),
                'estado_uf' => set_value('estado_uf', $row->estado_uf),
            );

            /*echo '<pre>';
            print_r($data);
            exit();*/

            $this->load->view('layout/header', $data);
            $this->load->view('layout/sidebar');
            $this->load->view('layout/navbar');
            $this->load->view('estado/estado_form');
            $this->load->view('layout/footer');        
        }
        else
        {
            $this->session->set_fleshdata('error', 'Erro ao atualizar dados');
            redirect(site_url('estado'));
        }
        
    }

    public function update_action()
    {
        $this->_rules();

        if($this->form_validation->run() == FALSE)
        {
            $this->update($this->input->post('estado_id', TRUE));
        }
        else
        {
            $data = array(
                'estado_nome' => $this->input->post('estado_nome'),
                'estado_uf' => strtoupper($this->input->post('estado_uf', TRUE))
            );

            /*echo '<pre>';
            print_r($data);
            exit();*/

            if($this->estado_model->update($this->input->post('estado_id', TRUE), $data))
            {
                $this->session->set_flashdata('error', 'Registro não alterado');
            }
            else
            {
                $this->session->set_flashdata('sucesso', 'Registro alterado com sucesso');
                
            }       
            redirect(site_url('estado'));

        }
    }

    public function delete($id)
    {
        $row = $this->estado_model->get_by_id($id);

        if($row)
        {
            $event = $this->estado_model->delete($id);

            if($event === FALSE)
            {
                $this->session->set_flashdata('error', 'Registro não foi exclúido!');
            }
            else
            {
                $this->session->set_flashdata('sucesso', 'Registro excluído com sucesso');
            }
        }
        else
        {
            $this->session->set_flashdata('error', 'Registro não foi exclúido!');
        }
        redirect(site_url('estado'));
    }

    public function _rules()
    {
        $this->form_validation->set_rules('estado_nome', '', 'trim|required|max_length[50]');
        $this->form_validation->set_rules('estado_uf', '', 'trim|required|exact_length[2]');

        $this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }
}