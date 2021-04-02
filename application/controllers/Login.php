<?php

defined('BASEPATH') OR exit('No direct script access allowed');


class Login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("login_model");
    }

    public function index()
    {
        $this->load->view("homepage.php");
        //jika form login disubmit
        if($this->input->post())
        {
            if($this->login_model->doLogin())
            {
                if($_SESSION['level'] == 'admin')
                {
                    redirect(site_url('admin'));
                }
                if($_SESSION['level'] == 'user')
                {
                    redirect(site_url('user'));
                }
                if($_SESSION['level'] == 'company')
                {
                    redirect(site_url('company'));
                }
            }
            else
            {
                echo "Login Failed!";
            }
        } 
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect(site_url('login'));
    }
}
?>