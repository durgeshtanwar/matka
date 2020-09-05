<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    
    public function index()
	{
		if(isset($_SESSION['user_id'])){
			$data = array(
				'title'=>'Dashboard'
			);
			$this->load->view('adminpanel/dashboard',$data);
		}
		else{
			redirect('admin/login');
		}
	
	}

	public function newUser(){
		
		$this->form_validation->set_rules('username', 'Username', 'required|min_length[5]|callback_username_check');
		$this->form_validation->set_rules('password', 'Password', 'required');
		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('adminpanel/dashboard');
		}
		else {
			$username = $_POST['username'];
			$password = $_POST['password'];
			$address = $_POST['address'];
			$phone = $_POST['phone'];
			$status = $_POST['status'];	

			$data = array(
				'user_name' => $username,
				'password' => $password,
				'address' => $address,
				'phone'	=> $phone,
				'status' => $status
			);

			$result = $this->db->insert('users', $data);
			$this->session->set_flashdata('item','User Created Successfully');
			$this->load->view('adminpanel/dashboard');
		
		}

	}

	public function username_check($str){

		$query = $this->db->query("SELECT `userid` FROM `users` WHERE `user_name`= '$str'" );
		if($query->num_rows()){
			$this->form_validation->set_message('username_check', 'The {field} you chose already exists please use different username');
                        return FALSE;
		}
		else {
			return TRUE;
		}
	}
}
