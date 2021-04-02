<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Users_model extends CI_Model
{
    private $_table = "user";


    public function getLevel()
    {
        $this->db->like('level', 'user');
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

    public function delete($username)
    {
        $this-> _deletePhoto($username);
        return $this->db->delete($this->_table, array("username" => $username));
    }

    private function _deletePhoto($username)
    {
        $manage = $this->getByUsername($username);
        if ($manage->photo != "no_image.png") {
            $filename = explode(".", $manage->photo)[0];
            return array_map('unlink', glob(FCPATH."img/$filename.*"));
        }
    }
         
}
?>