<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class form extends CI_Controller 
{
	public function __construct()
	{
        parent::__construct();
		$this->load->model('member_model');
	}

	public function index()
	{
		$data['query']=$this->member_model->selectmember();
		//echo '<pre>';print_r($data);echo '</pre>';

		$this->load->view('mycss');
		$this->load->view('myjs');
		//$this->load->view('myform');
		//$this->load->view('form_view',$data);
		$this->load->view('myform_img');
	}

	public function post_form()
	{
		$this->member_model->addmember();

	}

	public function edit($member_id)
	{
		$data['query']=$this->member_model->read($member_id);
		//echo '<pre>';print_r($data);echo '</pre>';

		$this->load->view('mycss');
		$this->load->view('myjs');
		$this->load->view('myform_edit',$data);
	}
	public function post_edit($member_id)
	{
		$this->member_model->editmember($member_id);

		$data['query']=$this->member_model->selectmember();
		//echo '<pre>';print_r($data);echo '</pre>';

		$this->load->view('mycss');
		$this->load->view('myjs');
		$this->load->view('myform');
		$this->load->view('form_view',$data);
	}

	public function del($member_id)
	{
		$data['query']=$this->member_model->delete($member_id);

		$data['query']=$this->member_model->selectmember();
		//echo '<pre>';print_r($data);echo '</pre>';

		$this->load->view('mycss');
		$this->load->view('myjs');
		$this->load->view('myform');
		$this->load->view('form_view',$data);
	}

	public function post_form_img()
	{
		$this->member_model->addmember_img();
		redirect('','refresh');
	
	}
}
?>