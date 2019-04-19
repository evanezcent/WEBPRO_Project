<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Primer extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//Load Dependencies
		$this->load->model('model_dashboard');

	}

	// List all your items
	public function index()
	{
		$this->load->view('template/page_header');
		$this->load->view('dashboard');
		$this->load->view('template/modal_post');
		$this->load->view('template/modal_comment');
	}

	public function blogprofil()
	{
		$this->load->view('template/page_header');
		$this->load->view('blog_profil');
		$this->load->view('template/modal_post');
	}

	// Add a new item
	public function dashboard()
	{
		$data['post'] = $this->model_dashboard->getAllPost();
		$this->load->view('template/page_header');
		$this->load->view('dashboard',$data);
		$this->load->view('template/modal_post');
		$this->load->view('template/modal_comment');
	}

	//Update one item
	public function update( $id = NULL )
	{

	}

	//Delete one item
	public function delete( $id = NULL )
	{

	}
}

/* End of file primer.php */
/* Location: ./application/controllers/primer.php */
