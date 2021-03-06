<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Front extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
	$q = "SELECT * FROM matka INNER JOIN (SELECT MAX(matkaid) as id FROM matka GROUP BY userid) last_updates ON last_updates.id = matka.matkaid";	 
	$query = $this->db->query($q);
	$data['query'] = $query;
	$chart = "SELECT * FROM chart";
	$result = $this->db->query($chart);
	$data['chart'] = $result; 
	$this->load->view('frontend/newfront',$data);
	}
	function login_post(){
        if(isset($_POST)){	
			$email = $_POST['user'];
			$password = $_POST['password'];

			$query = $this->db->query("SELECT * FROM `users` WHERE `user_name` = '$email' AND `password` = '$password'");
			if($query->num_rows()){
				// credentials are valid
				$result=$query->result_array();
			
				$this->session->set_userdata('userid',$result[0]['userid']);
				$this->session->set_userdata('username',$result[0]['user_name']);
				
				redirect('front/successfulLogin');
			}
			else 
			{
				$this->session->set_flashdata('error','Invalid Credentials');
				redirect('Front'); 
			}
		} 
}

public function successfulLogin(){
	if(isset($_SESSION['userid'])){
	
		$this->load->view('frontend/userdashboard');
	
	}	
	else {
		redirect('front');
	}
   
}

public function newMatkaRate(){
		
	$this->form_validation->set_rules('morning', 'Morning', 'required');
	$this->form_validation->set_rules('evening', 'Evening', 'required');
	$this->form_validation->set_rules('night', 'Night', 'required');
	if ($this->form_validation->run() == FALSE)
	{
		$this->load->view('userdashboard');
	}
	else {
		$userid = $this->session->userdata['userid'];
		$username = $_SESSION['username'];
		$morning = $_POST['morning'];
		$evening = $_POST['evening'];
		$night = $_POST['night'];
		$start_time = $_POST['start_time'];
		$end_time = $_POST['end_time'];
		$date = $_POST['date'];	

		$data = array(
			'userid' => $userid,
			'username'=>$username,
			'morning' => $morning,
			'evening' => $evening,
			'night'	=> $night,
			'start_time' => $start_time,
			'end_time'=>$end_time,
			'date'=> $date,
		);

		$result = $this->db->insert('matka', $data);
		$this->session->set_flashdata('item','Data saved successfully');
		$this->load->view('frontend/userdashboard');
	
		}

	}

	
	public function do_upload()
	{
		$file_name = time() . "." . pathinfo($_FILES['file']['userfile'], PATHINFO_EXTENSION);

			$config['upload_path']          = realpath(APPPATH . '../uploads');
			$config['allowed_types']        = 'gif|jpg|png|pdf';
			$config['max_size']             = 100;
			$config['max_width']            = 1024;
			$config['max_height']           = 768;

			$this->load->library('upload', $config);

			if ( ! $this->upload->do_upload('userfile'))
			{
					$error = array('error' => $this->upload->display_errors());

					$this->load->view('frontend/chart', $error);
			}
			else
			{
					$data = array('upload_data' => $this->upload->data());
					$username =  $_SESSION['username'];
					$userid = $this->session->userdata('userid');
					$data = ['username'=>$username,
							'userid'=>$userid,
							'filename'=>$file_name

				];
					$this->db->insert('chart',$data);
					$this->load->view('frontend/chart', $data);
			}
	}

	public function chart(){
		
		if(isset($_SESSION['userid'])){
	
			$this->load->view('frontend/chart');
		
		}	
		else {
			redirect('front');
		}
	}
}

