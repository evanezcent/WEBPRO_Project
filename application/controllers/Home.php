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
		$data = array(
            "username" => $this->input->post('your_name'),
            "password" => $this->input->post('your_pass')
        );

		$user = $this->model_user->findUser($data);
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
		$user = $this->model_user->findUser($data);
		if ($user != NULL){
			$this->session->set_userdata('success', $user[0]['username']);
            redirect('Primer','refresh');
		}
		else{
			$this->session->set_flashdata('falselogin','nodata');
            redirect('Home','refresh');
		}
	}
	
	public function do_upload()
	{
		$uname = $this->input->post('user');
		$config['upload_path']          =  './profil/';
        $config['allowed_types']        =  'gif|jpeg|jpg|png';
        $config['max_size']             =  1000000000000;
        $config['max_width']            =  5000;
        $config['max_height']           =  5000;
        
  		$this->load->library('upload', $config);

  		$this->upload->do_upload('profil');
        $data = $this->upload->data();
        $file = $data['file_name'];

  		$data = array(
			'nama' => $this->input->post('nama'),
			'bio' => $this->input->post('bio'),
			'fotoProfil' => $file
		);
		$this->model_user->editUser($data,$uname);
		redirect('primer/apperance','refresh');
	}

	public function logout()
	{
		session_destroy();
        redirect('Home');
	}
}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */
