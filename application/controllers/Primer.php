<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Primer extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//Load Dependencies
		$this->load->model('model_dashboard');
		$this->load->model('model_post');
		$this->load->model('model_explorer');
	}

	// List all your items
	public function index()
	{
		$this->load->view('template/page_header');
		$this->load->view('dashboard');
		$this->load->view('template/modal_post');
		$this->load->view('template/modal_comment');
	}

	// Profil Dashboard
	public function profil()
	{
		$data['post'] = $this->model_dashboard->getAllPost();
		$this->load->view('template/page_header');
		$this->load->view('profil',$data);
		$this->load->view('template/modal_post');
		$this->load->view('template/modal_comment');
	}

	// Dashboard
	public function dashboard()
	{
		$data['post'] = $this->model_dashboard->getAllPost();
		$this->load->view('template/page_header');
		$this->load->view('dashboard',$data);
		$this->load->view('template/modal_post');
		$this->load->view('template/modal_comment');
	}

	//Upload post foto
	// public function postUpload(){

	// 	$config['upload_path']          =  './post/';
 //        $config['allowed_types']        =  'gif|jpeg|jpg|png';
 //        $config['max_size']             =  1000000000000;
 //        $config['max_width']            =  1920;
 //        $config['max_height']           =  1080;

 //        $upload_data = $this->upload->data(); 
 //  		$file_name =   $upload_data['file_name'];

 //        $this->load->library('upload', $config);
 //        $foto = $this->input->post('')
	// }

	//Upload post text
	public function postText(){

		$data = array(
			'username' => 'tama',
			'postText' => $this->input->post('title'),
			'caption' => $this->input->post('caption'),
			'tag' => $this->input->post('tag') 
		);

		$this->model_post->insertText($data);
	}
	public function explorer()
	{
		$data['post'] = $this->model_dashboard->getAllPost();
		$this->load->view('template/page_header');
		$this->load->view('explorer',$data);
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
