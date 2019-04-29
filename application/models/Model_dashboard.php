<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Model_dashboard extends CI_Model
{

    public function getAllPost()
    {
        $query = $this->db->get('posting');
        return $query->result_array();
    }
    public function loadUser()
    {
        $query = $this->db->get('user');
        return $query->result_array();
    }
}
