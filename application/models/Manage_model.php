<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Manage_model extends CI_Model
{

     function daftar($data)
    {
        $this->db->insert('user',$data);
    }      
}
?>