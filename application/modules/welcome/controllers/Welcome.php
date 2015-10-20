<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends MY_Controller
{
	public function index()
	{
		$this->load->model('welcome_model');
		$this->load->view('welcome_message');
	}
}
