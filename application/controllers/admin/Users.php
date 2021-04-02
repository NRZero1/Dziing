<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("admin/users_model");
    }

    public function index()
    {
        $data["users"] = $this->users_model->getLevel();
        $this->load->view("admin/users/data_users", $data);
    }

    public function search()
    {
        $data["users"] = $this->users_model->getSearch();
        $this->load->view("admin/users/data_users", $data);
    }

    public function delete($username=null)
    {
        if (!isset($username)) show_404();
        
        if ($this->users_model->delete($username)) {
            redirect(site_url('admin/users'));
        }
    }

}
?>