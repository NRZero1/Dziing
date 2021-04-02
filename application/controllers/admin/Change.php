<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Change extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model("change_model");
	}
	public function index()
	{
		$data["change"] = $this->change_model->getByUsername();
		$this->load->view("admin/change_password_page", $data);
	}
	public function update()
	{
		$username = $this->input->post('username');
		if (!isset($username)) redirect('change');

		$change = $this->change_model;
		$validation = $this->form_validation;
		$validation->set_rules($change->rules());
		if ($validation->run())
		{
			$change->update();
			$this->session->set_flashdata('success', 'Successful');
		}
		$data["change"] = $change->getByUsername($username);
		if (!$data["change"]) show_404();

		$this->load->view("admin/change_password_page", $data);
	}
}
?>