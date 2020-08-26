<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	   
    public function index()
	{
		if(isset($_SESSION['user_id'])){
			redirect('admin/Dashboard');
		}
		$data= []; 
		if(isset($_SESSION['error'])){
		//	die($_SESSION('error'));
			$data['error'] = $_SESSION['error'];
		}
		else {
			$data['error'] = "NO_ERROR";
		}

		$this->load->view('adminpanel/loginview',$data);
	}

	function login_post(){
        if(isset($_POST)){	
			$email = $_POST['email'];
			$password = $_POST['password'];

			$query = $this->db->query("SELECT * FROM `backendusers` WHERE `username` = '$email' AND `password` = '$password'");
			if($query->num_rows()){
				// credentials are valid
				$result=$query->result_array();
				print_r($result);
				$this->session->set_userdata('user_id',$result[0]['uid']);
				redirect('admin/Dashboard');
			}
			else 
			{
				$this->session->set_flashdata('error','Invalid Credentials');
				redirect('admin/Login'); 
			}
		} 
}
	function logout(){
		session_destroy();
		redirect('admin/login');
	}

}
