<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Order extends CI_Controller {

	public function index()
	{
		$this->load->view('for_user/pemesanan_tiket');
	}

}

/* End of file Order.php */
/* Location: ./application/controllers/Order.php */