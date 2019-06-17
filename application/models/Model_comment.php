<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Model_comment extends CI_Model
{

    public function getCommentFromPost($id)
    {
        $this->db->where('idPosting', $id);        
        $query = $this->db->get('comment');
        return $query->result_array();
    }
    public function insertComment($data)
    {
        $this->db->insert('comment',$data);
    }
}
