<?php


class Model_explorer extends CI_Model
{
	public function getAllPost(){
		$query = $this->db->get('posting');
		return $query->result_array();
	}

	public function getAllComment(){
		$query = $this->db->get('comment');
		return $query->result_array();
	}

//	public function getNotesCount($post[''] =  $this->getAllPost(), )
}
