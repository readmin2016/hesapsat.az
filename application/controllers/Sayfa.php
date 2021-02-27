<?php



class Sayfa extends CI_Controller{



	public function __construct()
	{
		parent::__construct();
	}



	// PAGES

	public function add_blog()
	{
		$this->load->view('add_blog');
	}














}








?>