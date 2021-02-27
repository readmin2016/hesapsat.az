<?php

class Messages extends CI_Controller{


	public function __construct()
	{
		parent::__construct();
		$this->load->model('process_model');
		$this->load->model('account_model');
		$this->load->helper('cookie');
		$this->load->helper('menu');
		$this->load->helper('month');
		$this->load->library('user_agent');
	}



	public function chat($parametre)
	{
		$data['parametre'] = $parametre;
		$data['uyelist'] = $this->account_model->uye_list();
		$this->load->view('messages/chat',$data);
	}










}







?>