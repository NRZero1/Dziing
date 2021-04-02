<?php
 defined('BASEPATH') OR exit('No direct script access allowed');
 
 class Simple_login {
 
     public function __construct() {
         $this->CI =& get_instance();
     }

     public function login($username, $password) {
         
         //cek username dan password
         $query = $this->CI->db->get_where('user',array('username'=>$username,'password' => md5($password)));
 
         if($query->num_rows() == 1) {
             //ambil data user berdasar username
             $row  = $this->CI->db->query('SELECT username FROM user where username = "'.$username.'"');
             $admin     = $row->row();
             $id   = $admin->username;
 
             //set session user
             $this->CI->session->set_userdata('username', $username);
             $this->CI->session->set_userdata('id_login', uniqid(rand()));
             $this->CI->session->set_userdata('id', $id);
 
             //redirect ke halaman dashboard
             redirect(site_url('homepagelog'));
         }else{
 
             //jika tidak ada, set notifikasi dalam flashdata.
             $this->CI->session->set_flashdata('Success','Username or password unmatched please try again ');
 
             //redirect ke halaman login
             redirect(site_url('homepage'));
         }
          return false;
      }
     
     /**
      * Cek session login, jika tidak ada, set notifikasi dalam flashdata, lalu dialihkan ke halaman
      * login
      */
     public function cek_login() {
 
         //cek session username
         if($this->CI->session->userdata('username') == '') {
 
             //set notifikasi
             $this->CI->session->set_flashdata('Success','Login failed');
 
             //alihkan ke halaman login
             redirect(site_url('homepage'));
         }
     }
 
     /**
      * Hapus session, lalu set notifikasi kemudian di alihkan
      * ke halaman login
      */
     public function logout() {
         $this->CI->session->unset_userdata('username');
         $this->CI->session->unset_userdata('id_login');
         $this->CI->session->unset_userdata('id');
         $this->CI->session->set_flashdata('Success','Logging Out');
         redirect(site_url('homepage'));
     }
 }