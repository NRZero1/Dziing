<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Manage_model extends CI_Model
{
    private $_table = "user";


    public function getLevel()
    {
        $this->db->like('level', 'company');
        return $this->db->get($this->_table)->result();
    }

    public function getByUsername($username)
    {
        return $this->db->get_where($this->_table, ["username" => $username])->row();
    }

    public function getSearch()
    {
        $keyword = $this->input->get('keyword');

        $this->db->like('username', $keyword);
        $this->db->or_like('first_name', $keyword);
        $this->db->or_like('last_name', $keyword);
        $this->db->or_like('email', $keyword);
        
        return $this->db->get($this->_table)->result();
    }

    public function rules()
    {
        return [
            ['field' => 'first_name',
            'label' => 'First Name',
            'rules' => 'required'],

            ['field' => 'last_name',
            'label' => 'Last Name',
            'rules' => 'required'],
            
            ['field' => 'email',
            'label' => 'Email',
            'rules' => 'required'],

            ['field' => 'country',
            'label' => 'Country',
            'rules' => 'required'],

            ['field' => 'phone',
            'label' => 'Phone',
            'rules' => 'required'],

            ['field' => 'username',
            'label' => 'Username',
            'rules' => 'required'],

            ['field' => 'password',
            'label' => 'Password',
            'rules' => 'required']
        ];
    }

    public function save()
    {
        $post = $this->input->post();
        $this->first_name = $post["first_name"];
        $this->last_name  = $post["last_name"];
        $this->email      = $post["email"];
        $this->country    = $post["country"];
        $this->phone      = $post["phone"];
        $this->username   = $post["username"];
        $this->password   = md5($post["password"]);
        $this->level      = 'company';
        $this->photo      = $this->_uploadPhoto();
        return $this->db->insert($this->_table, $this);
    }
 
    private function _uploadPhoto()
    {
        $config['upload_path']          = './img/';
        $config['allowed_types']        = 'gif|jpg|jpeg|png';
        $config['file_name']            = $this->input->post('username');
        $config['overwrite']            = true;
        $config['max_size']             = 1024; // 1MB

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('photo')) {
            return $this->upload->data("file_name");
        }
        
        return "no_image.png";
    }

    public function update()
    {
        $post = $this->input->post();

        if (!empty($_FILES["photo"]["name"])) 
        {
            $this-> _deletePhoto($this->input->post('username'));
            $this->photo = $this->_uploadPhoto();
        } 
        else 
        {
            $this->photo = $post["old_image"];
        }
        $this->first_name = $post["first_name"];
        $this->last_name  = $post["last_name"];
        $this->email      = $post["email"];
        $this->country    = $post["country"];
        $this->phone      = $post["phone"];

        return $this->db->update($this->_table, $this, array('username' => $this->input->post('username')));
    }

    private function _deletePhoto($username)
    {
        $manage = $this->getByUsername($username);
        if ($manage->photo != "no_image.png") {
            $filename = explode(".", $manage->photo)[0];
            return array_map('unlink', glob(FCPATH."img/$filename.*"));
        }
    }

    public function delete($username)
    {
        $this-> _deletePhoto($username);
        return $this->db->delete($this->_table, array("username" => $username));
    }
         
}
?>