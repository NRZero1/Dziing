<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model("profile_model");
	}
	public function index()
	{
		$data["profile"] = $this->profile_model->getByUsername();
		if($_SESSION['level'] == 'admin')
		{
			$this->load->view("admin\profile_page", $data);
		}
		if($_SESSION['level'] == 'user')
		{
			$this->load->view("profile_page", $data);
		}
		if($_SESSION['level'] == 'company')
		{
			$this->load->view("company\profile_page", $data);
		}
	}
}
?>