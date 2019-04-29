<?php

class Model_post extends CI_Model
{

  public function insertText($value)
  {
    $this->db->insert('posting', $value);
  }

  public function insertImg($data)
  {
    $this->db->insert('posting', $data);
  }
  public function updatePost($id)
  {
    $this->db->where('idPosting', $id);
    $data = array(
      'postText' => $this->input->post('post'),
      'caption' => $this->input->post('caption'),
      'tag' => $this->input->post('tag')
    );
    $this->db->update('posting', $data);
  }
  public function deletePost($id)
  {
    $this->db->where('idPosting', $id);
    $this->db->delete('posting');
  }
}
