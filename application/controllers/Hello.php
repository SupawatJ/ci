<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class hello extends CI_Controller 
{
	public function index()
	{
		$this->load->view('hello_view');
	}

	public function index2()
	{
		$this->load->view('index2_view');
	}
}
