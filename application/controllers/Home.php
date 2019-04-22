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

	//Update one item
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

	//Delete one item
	public function logout()
	{
		session_destroy();
        redirect('Home');
	}
}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */
