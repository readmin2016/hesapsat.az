<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

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

	
	public function index()
	{
		$data['uyelist'] = $this->account_model->uye_list();
		$data['uyeler'] = $this->account_model->all_uyeler();
		$data['ilanlar'] = $this->db->order_by('ilan_id','DESC')->limit(1)->get('ilanlar')->result();
		$data['faq'] = $this->db->get('faq')->result();
		$data['website'] = $this->db->get('neden_biz')->result();
		$data['working'] = $this->db->get('options')->result();
		$data['blogs'] = $this->db->limit(4)->get('blog')->result();
		$data['anacategory'] = $this->db->get('platform')->result();
		$data['altcategory'] = $this->db->get('ishlem')->result();
		$data['orders'] = $this->db->get('odeme_bildirim')->result();
		$this->load->view('home',$data);
	}


	public function add_comment()
	{

			date_default_timezone_set('Europe/Istanbul');
			$username= 	$this->input->post('username');
			$blogid= 	$this->input->post('blogid');
			$mesaj	= $this->input->post('message');

			$data = array(
				'blog_id' =>$blogid,
				'kullaniciadi' =>$username,
				'yorum' =>$mesaj,
				'tarix'=>date('d.m.Y H:i:m')
			);

			$this->db->insert('yorumlar',$data);
			redirect($_SERVER['HTTP_REFERER'].'#comments');



	}




















}
