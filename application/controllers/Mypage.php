<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class mypage extends CI_Controller 
{
	public function index()
	{
		$this->load->view('mycss');
		$this->load->view('myjs');
		$this->load->view('mypage_view2');
	}

}
