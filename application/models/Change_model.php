<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Change_model extends CI_Model
{
private $_table = "user";
 public function getByUsername()
 {
 $username = $_SESSION['username'];
 return $this->db->get_where($this->_table, ["username" => $username])->row();
 }
 public function rules()
 {
 return [
 ['field' => 'new_pass',
 'label' => 'New Password',
 'rules' => 'required'],

 ['field' => 'confirm_pass',
 'label' => 'Confirm Password',
 'rules' => 'required']
 ];
 }
 public function update()
 {
 $post = $this->input->post();

 $pass = $post["new_pass"];
 $confirm = $post["confirm_pass"];

 if($pass==$confirm)
 {
 $this->password = md5($post["confirm_pass"]);
return $this->db->update($this->_table, $this, array('username' => $this->input->post('username')));
 }

 }
}
