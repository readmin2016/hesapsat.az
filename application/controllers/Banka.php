<?php





class Banka extends CI_Controller{


	public function __construct()
	{
		parent::__construct();
		$this->load->helper('menu');
		$this->load->helper('file');
		$this->load->model('process_model');
		$this->load->model('account_model');
		$this->load->helper('month');
		$this->load->helper('cookie');
	}


	public function papara_ayar()
	{
		$data['odeme']= $this->db->get('odeme_yontemi')->result();
		
		if(get_cookie('admin')){
			$this->load->view('admin/banka/papara_ayar',$data);
		}else{
			redirect(base_url('admin'));
		}
		
	}

	public function ininal_ayar()
	{
		$data['odeme']= $this->db->get('odeme_yontemi')->result();

		if(get_cookie('admin')){
			$this->load->view('admin/banka/ininal_ayar',$data);
		}else{
			redirect(base_url('admin'));
		}
		
	}


	public function odeme_bildirim()
	{
		$data['odeme']= $this->db->get('odeme_yontemi')->result();

		if(get_cookie('admin')){
			$this->load->view('admin/banka/odeme_bildirim',$data);
		}else{
			redirect(base_url('admin'));
		}
		
	}


	public function havale_eft()
	{
		$data['odeme']= $this->db->get('odeme_yontemi')->result();
		$data['havale_isleri']= $this->db->get('havale_eft')->result();

		if(get_cookie('admin')){
			$this->load->view('admin/banka/havale_eft',$data);
		}else{
			redirect(base_url('admin'));
		}
		
	}

	public function papara_komisyon()
	{
		$data['odeme']= $this->db->get('odeme_yontemi')->result();

		if(get_cookie('admin')){
			$this->load->view('admin/banka/papara_komisyon',$data);
		}else{
			redirect(base_url('admin'));
		}
		
	}

	public function kredi_kart_komisyon()
	{
		$data['odeme']= $this->db->get('odeme_yontemi')->result();

		if(get_cookie('admin')){
			$this->load->view('admin/banka/kredi_kart_komisyon',$data);
		}else{
			redirect(base_url('admin'));
		}
		
	}

	public function ininal_komisyon()
	{
		$data['odeme']= $this->db->get('odeme_yontemi')->result();

		if(get_cookie('admin')){
			$this->load->view('admin/banka/ininal_komisyon',$data);
		}else{
			redirect(base_url('admin'));
		}
		
	}

	public function eft_komisyon()
	{
		$data['odeme']= $this->db->get('odeme_yontemi')->result();

		if(get_cookie('admin')){
			$this->load->view('admin/banka/eft_komisyon',$data);
		}else{
			redirect(base_url('admin'));
		}
		
	}


	public function add_odemeYontemi()
	{
		$numara = $this->input->post('numara');
		$payname = $this->input->post('payname');
		$aciklama = $this->input->post('texteditor');

		$data = array(
			'odeme_numarasi' =>$numara,
			'odeme_aciklamasi' =>$aciklama,
			'odeme_name'=>$payname
		);
		$this->db->insert('odeme_yontemi',$data);
		redirect($_SERVER['HTTP_REFERER']);
	}

	public function edit_odemeYontemi()
	{
		$numara = $this->input->post('numara');
		$payname = $this->input->post('payname');
		$aciklama = $this->input->post('texteditor');

		$where = array('odeme_id'=>$_POST['odemeID']);

		$data = array(
			'odeme_numarasi' =>$numara,
			'odeme_aciklamasi' =>$aciklama,
			'odeme_name'=>$payname
		);
		$this->db->where($where)->update('odeme_yontemi',$data);
		redirect($_SERVER['HTTP_REFERER']);
	}


	public function add_havale()
	{
		$config['upload_path'] = 'assets/images/bank/';
		$config['allowed_types'] = "jpg|png|jpeg";

		$this->load->library('upload',$config);

		$bank_name = $this->input->post('bank_name');
		$kart_numarasi = $this->input->post('kart_numarasi');
		$kart_sahibi = $this->input->post('kart_sahibi');
		$aciklama = $this->input->post('texteditor');

		if(!$this->upload->do_upload('file')){
			echo 'Banka için logo seçiniz';
		}else{
			$data = array(
				'banka_name' 	=>$bank_name,
				'kart_number' 	=>$kart_numarasi,
				'user_name' 	=>$kart_sahibi,
				'aciklama' 		=>$aciklama,
				'bank_image' 	=>$_FILES['file']['name']
			);

			$this->db->insert('havale_eft',$data);
			redirect($_SERVER['HTTP_REFERER']);

		}

		
	}


	public function komisyon()
	{
		$komisyon = $this->input->post('komisyon');


		$where = array('pay_id'=>$_POST['bankid']);

		$data = array(
			'komisyon' =>$komisyon
		);
		$this->db->where($where)->update('payment',$data);
		redirect($_SERVER['HTTP_REFERER']);
	}


	public function deleteCard($eftID)
	{
		$this->db->where(array('eft_id'=>$eftID))->delete('havale_eft');
		redirect($_SERVER['HTTP_REFERER']);
	}

	// public function json()
	// {
	// 	$query= $this->db->query("SELECT * FROM odeme_bildirim")->result();

	// 	foreach ($query as $row) {
	// 		$encode = $row->form;
	// 		$decode = json_decode($encode);
			
	// 		echo $decode->bank_info;
	// 	}

		
	// }

	public function send_odbildir()
	{
		sleep(3);
		$adsoyad = $_POST['adsoyad'];
		@$bank_select = $_POST['bank_select'];
		$userid = $_POST['userid'];
		$fiyat = $_POST['fiyat'];
		$kesilecek = $_POST['kesilecek'];
		$beklenen = $_POST['beklenen'];
		$order_token = $_POST['orderToken'];
		$satici = $_POST['satici'];

		$json = array(
			'ad_soyad'=>$adsoyad,
			'bank_info' =>$bank_select,
			'fiyat'	=>$fiyat,
			'kesilecek' =>$kesilecek,
			'beklenen' =>$beklenen,
			'orderToken'=>$order_token,
			
			
		);

		$data = array(
			'form'=>json_encode($json),
			'userid'=>$userid,
			'onay_durum'=>0,
			'satan'    =>$satici
		);

		echo $this->db->insert('odeme_bildirim',$data);

	}
















}
















?>