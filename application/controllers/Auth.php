<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Class Auth
 * @property Ion_auth|Ion_auth_model $ion_auth        The ION Auth spark
 * @property CI_Form_validation      $form_validation The form validation library
 */
class Auth extends CI_Controller
{
public function index()
{

	$this->load->view('login/index');
}

public function auth()
{

	$identity = $this->security->xss_clean($this->input->post('email'));
	$password = $this->security->xss_clean($this->input->post('password'));;
	$remember = FALSE; // remember the user

	if ($this->ion_auth->login($identity, $password, $remember)) {
		redirect('home');
	} else {
		$this->session->set_flashdata('error', 'Verifique seu e-mail ou senha');
		redirect('login');
	}
}

public function logout()
{
	$this->ion_auth->logout();
	redirect('login');
}

}