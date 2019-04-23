<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_user extends CI_Model {

	public function findUser() {
        $data = array(
            "username" => $this->input->post('your_name'),
            "password" => $this->input->post('your_pass')
        );

        $this->db->where($data);
        $result = $this->db->get('user');
        return $result->result_array();
    }

    public function loadUser()
    {
    	return $this->db->get('user')->result_array();
    }

    public function register($data)
    {
    	$this->db->insert('user', $data);
    }

}

/* End of file User.php */
/* Location: ./application/models/User.php */