<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Primer extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//Load Dependencies
		$this->load->library('form_validation');
		$this->load->library('session');

	}

	// List all your items
	public function index()
	{
		$this->load->view('template/page_header');
		$this->load->view('dashboard');
		$this->load->view('template/modal_post');
<<<<<<< HEAD
		$this->load->view('template/modal_comment');
=======
>>>>>>> test
	}

	public function blogprofil()
	{
		$this->load->view('template/page_header');
		$this->load->view('blog_profil');
		$this->load->view('template/modal_post');
	}

	// Add a new item
	public function add()
	{

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
