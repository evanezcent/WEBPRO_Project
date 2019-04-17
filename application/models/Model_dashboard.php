<?php

class Model_dashboard extends CI_Model{

    public function getAllPost(){
        $query = $this->db->get('posting');
        return $query->result_array();
    }
}