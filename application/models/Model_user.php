<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_user extends CI_Model {

	public function findUser($data) {
        
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
    public function editUser($data,$user)
    {
    	$this->db->where('username', $user);
    	$this->db->update('user', $data);
    }

}

/* End of file User.php */
/* Location: ./application/models/User.php */