<?php

class Model_post extends CI_Model{

    public function insertText($value){
    	$this->db->insert('posting', $value);
    }

    public function insertImg($data)
    {
    	$this->db->insert('posting',$data);
    }
}