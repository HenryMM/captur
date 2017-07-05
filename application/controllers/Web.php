<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Web extends CI_Controller {


	public function index()
	{
		$this->load->view('index');
	}



	public function canton($canton_id)
	{
		$this->load->view('canton');
	}
}
