<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function __construct()
 	{
 		parent::__construct();
 		//Do your magic here
 		$this->load->library('session');
		if($this->session->userdata('logged_in')){
			$sess_data = $this->session->userdata('logged_in');
		}else{
			redirect('home/login','refresh');
		}
 	}
	public function index()
	{
		$this->load->view('for_user/home');
	}
	public function login()
	{
		$this->load->view('for_user/home_login');
		
	}
	public function information()
	{
		$this->load->view('for_user/information_login');
	}
	public function profile()
	{
		$this->load->view('for_user/profile_login');
	}
	public function history()
	{
		$this->load->view('for_user/history_login');
	}
	public function notification()
	{
		$this->load->view('for_user/notification_login');
	}
	public function payment()
	{
		$this->load->view('for_user/payment_login');
	}


}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */