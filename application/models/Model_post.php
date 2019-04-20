<?php

class Model_post extends CI_Model{

    public function insertText($value){
    	$this->db->insert('posting', $value);
    	redirect('primer/dashboard','refresh');
    }
}