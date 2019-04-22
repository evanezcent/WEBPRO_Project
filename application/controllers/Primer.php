<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Primer extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//Load Dependencies
		$this->load->model('model_dashboard');
		$this->load->model('model_post');
		$this->load->model('model_user');

	}

	// List all your items
	public function index()
	{
		if (isset($_SESSION['success'])){
			$user = $this->model_user->loadUser();
			$data['posting'] = $this->model_dashboard->getAllPost();
			$this->load->view('template/page_header',$user);
			$this->load->view('dashboard',$data);
			$this->load->view('template/modal_post');
			$this->load->view('template/modal_comment');
		}
		else{
			redirect('Home','refresh');
		}
		
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
	// public function dashboard()
	// {
	// 	$data['posting'] = $this->model_dashboard->getAllPost();
	// 	$this->load->view('template/page_header');
	// 	$this->load->view('dashboard',$data);
	// 	$this->load->view('template/modal_post');
	// 	$this->load->view('template/modal_comment');
	// }

	// Upload post foto
	public function do_upload(){

		$config['upload_path']          =  './post/';
        $config['allowed_types']        =  'gif|jpeg|jpg|png';
        $config['max_size']             =  1000000000000;
        $config['max_width']            =  5000;
        $config['max_height']           =  5000;
        
  		$this->load->library('upload', $config);

  		$this->upload->do_upload('file');
        $data = $this->upload->data();
        $file = $data['file_name'];
  		echo $file;

  		$data = array(
			'username' => 'tama',
			'caption' => $this->input->post('caption'),
			'postFoto' => $file
		);

        // $this->session->set_flashdata('upload_data', $upload['file_name']);
        $this->model_post->insertImg($data);
        redirect('primer','refresh');
        
	}

	//Upload post text
	public function postText(){

		$data = array(
			'username' => 'tama',
			'postText' => $this->input->post('title'),
			'caption' => $this->input->post('caption'),
			'tag' => $this->input->post('tag') 
		);

		$this->model_post->insertText($data);
		redirect('primer','refresh');
	}
	public function explorer()
	{
		$this->load->view('template/page_header');
		$this->load->view('explorer');
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
