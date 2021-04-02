<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model
{
	private $_table = "user";
	public function doLogin()
	{
		$post = $this->input->post();
		$user = $this->db->get_where($this->_table, ["username" => $post["username"]])->row();
		$arrdata = array(
			'username' => $user->username,
			'level' => $user->level,
			'photo' => $user->photo
		);

		$this->session->set_userdata($arrdata);
		if($user)
		{
			$isPasswordTrue = ((md5($post["password"])) == $user->password);
			$isAdmin = $user->level == 'admin';
			$isUser = $user->level == 'user';
			$isCompany = $user->level == 'company';
		}

		if($isPasswordTrue && $isUser){
			$this->session->set_userdata(['user_logged' => $user]);
			if(!empty($post["remember"])) {
				setcookie ("loginUsername", $post["username"], time()+ (10 * 365 * 24 * 60 * 60));
				setcookie ("loginPass", $post["password"], time()+ (10 * 365 * 24 * 60 * 60));
			}
			else
			{
				setcookie ("loginUsername","");
				setcookie ("loginPass","");
			}
			return true;
		}

		if($isPasswordTrue && $isAdmin){
			$this->session->set_userdata(['user_logged' => $user]);
			if(!empty($post["remember"])) {
				setcookie ("loginUsername", $post["username"], time()+ (10 * 365 * 24 * 60 * 60));
				setcookie ("loginPass", $post["password"], time()+ (10 * 365 * 24 * 60 * 60));
			}
			else
			{
				setcookie ("loginUsername","");
				setcookie ("loginPass","");
			}
			return true;
		}

		if($isPasswordTrue && $isCompany){
			$this->session->set_userdata(['user_logged' => $user]);
			if(!empty($post["remember"])) {
				setcookie ("loginUsername", $post["username"], time()+ (10 * 365 * 24 * 60 * 60));
				setcookie ("loginPass", $post["password"], time()+ (10 * 365 * 24 * 60 * 60));
			}
			else
			{
				setcookie ("loginUsername","");
				setcookie ("loginPass","");
			}
			return true;
		}
		return false;
	}

	public function isNotLogin(){
		return $this->session->userdata('user_logged') === null;
	}
}
?>