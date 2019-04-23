<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//Load Dependencies
		$this->load->model('model_user');

	}

	// List all your items
	public function index()
	{	
		$this->load->view('homepage');
	}

	// Add a new item
	public function login()
	{
		$this->load->view('loginpage');
	}

	//Login
	public function userlogin()
	{
		$user = $this->model_user->findUser();
		if ($user != NULL){
			$this->session->set_userdata('success', $user[0]['username']);
            redirect('Primer','refresh');
		}
		else{
			$this->session->set_flashdata('falselogin','nodata');
            redirect('Primer','refresh');
		}
	}

	public function userRegister()
	{
		$data = array(
			'email'=> $this->input->post('email'),
			'username'=> $this->input->post('username'),
			'password'=> $this->input->post('psw')
		);

		$this->model_user->register($data);

		// setelah register lanjut ke dashboard
		$user = $this->model_user->findUser();
		if ($user != NULL){
			$this->session->set_userdata('success', $user[0]['username']);
            redirect('Primer','refresh');
		}
		else{
			$this->session->set_flashdata('falselogin','nodata');
            redirect('Home','refresh');
		}
	}
	//Delete one item
	public function logout()
	{
		session_destroy();
        redirect('Home');
	}
}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */
