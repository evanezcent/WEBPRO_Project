<?php

class Model_dashboard extends CI_Model{

    public function getCommentFromPost(){
        $query = $this->db->get('posting');
        return $query->result_array();
    }
}