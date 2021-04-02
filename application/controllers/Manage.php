<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Manage extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        
        $this->load->library(array('form_validation'));
        $this->load->helper(array('url','form'));
        $this->load->model("manage_model");
    }


    public function index()
    {
       $this->form_validation->set_rules('first_name', 'First Name','required');
       $this->form_validation->set_rules('last_name', 'Last Name','required');
       $this->form_validation->set_rules('email','EMAIL','required');
       $this->form_validation->set_rules('country','Country','required');
       $this->form_validation->set_rules('phone','Phone','required');
       $this->form_validation->set_rules('username', 'Username','required');
       $this->form_validation->set_rules('password','Password','required');
       
         if($this->form_validation->run() == FALSE) {
             $this->load->view('manage');
         }else{
 
            $data['first_name']   =    $this->input->post('first_name');
            $data['last_name'] =    $this->input->post('last_name');
            $data['email']  =    $this->input->post('email');
            $data['country']  =    $this->input->post('country');
            $data['username']  =    $this->input->post('username');
            $data['password'] =    md5($this->input->post('password'));
            $data['level'] = 'user';
            $data['country']  =    $this->input->post('country');
            $data['phone']  =    $this->input->post('phone');
            $data['photo']  =    $this->photo = $this->_uploadPhoto();

            
             $this->manage_model->daftar($data);
             
             $pesan['message'] =    "Successfully Registered";
             
             $this->load->view('success',$pesan);
    }
    
    
    }
private function _uploadPhoto()
 {
 $config['upload_path'] = './img/';
 $config['allowed_types'] = 'gif|jpg|jpeg|png';
 $config['file_name'] = $this->input->post('username');
 $config['overwrite'] = true;
 $config['max_size'] = 1024; // 1MB
 $this->load->library('upload', $config);
 if ($this->upload->do_upload('photo')) {
 return $this->upload->data("file_name");
 }
 return "no_image.png";
 }
}
?>