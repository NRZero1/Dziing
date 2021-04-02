<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Profile_model extends CI_Model
{
	private $_table = "user";

	public function getByUsername()
	{
		$username = $_SESSION['username'];
		return $this->db->get_where($this->_table, ["username" => $username])->row();
	}
}
?>