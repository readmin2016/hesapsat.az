<?php



class Settings extends CI_Controller{


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


	public function options()
	{
		$data['uyelist'] = $this->account_model->uye_list();
		$data['orders'] = $this->db->get('odeme_bildirim')->result();
		$this->load->view('settings/options',$data);
	}

	public function olustur()
	{
		$data['uyelist'] = $this->account_model->uye_list();
		$data['kampaniya'] = $this->db->get('kampaniya')->result();
		$data['orders'] = $this->db->get('odeme_bildirim')->result();
		$this->load->view('settings/olustur',$data);
	}

	public function address()
	{
		$data['uyelist'] = $this->account_model->uye_list();
		$data['sehirler'] =$this->process_model->sehirler();
		$data['orders'] = $this->db->get('odeme_bildirim')->result();
		$this->load->view('settings/address',$data);
	}

	public function ilanlarim()
	{
		$data['uyelist'] = $this->account_model->uye_list();
		$data['sehirler'] =$this->process_model->sehirler();
		$data['altcategory'] = $this->db->get('ishlem')->result();
		$data['orders'] = $this->db->get('odeme_bildirim')->result();
		
		$uyelist = $this->db->where(array('kullanici_adi'=>get_cookie('username')))->get('account')->result();
		foreach ($uyelist as $row) {
			$userid = $row->user_id;
		}
		$data['ilanlar'] =$this->db->order_by('ilan_id','DESC')->where(array('userid'=>$userid))->get('ilanlar')->result();
		$data['anacategory'] =$this->db->get('platform')->result();
		$data['orders'] = $this->db->get('odeme_bildirim')->result();
		$result = $this->process_model->ilanlarim_sayfa_control($userid);
		if($result==1){
			$this->load->view('settings/ilanlarim',$data);
		}else{
			redirect('settings');
		}
		
	}


	public function aldiklarim()
	{
		$data['uyelist'] = $this->account_model->uye_list();
		$data['sehirler'] =$this->process_model->sehirler();
		$data['altcategory'] = $this->db->get('ishlem')->result();
		$data['anacategory'] = $this->db->get('platform')->result();
		$data['ilanlar'] =$this->db->get('ilanlar')->result();
		$data['orders'] = $this->db->get('odeme_bildirim')->result();


		$this->load->view('settings/aldiklarim',$data);
		
	}

	public function satdiklarim()
	{
		$data['uyelist'] = $this->account_model->uye_list();
		$data['sehirler'] =$this->process_model->sehirler();
		$data['altcategory'] = $this->db->get('ishlem')->result();
		$data['anacategory'] = $this->db->get('platform')->result();
		$data['ilanlar'] =$this->db->get('ilanlar')->result();
		$data['orders'] = $this->db->get('odeme_bildirim')->result();


		$this->load->view('settings/satdiklarim',$data);
		
	}

	public function security()
	{
		$data['uyelist'] = $this->account_model->uye_list();
		$data['orders'] = $this->db->get('odeme_bildirim')->result();
		$this->load->view('settings/security',$data);
	}

	public function delaccount()
	{
		$data['uyelist'] = $this->account_model->uye_list();
		$data['orders'] = $this->db->get('odeme_bildirim')->result();
		$this->load->view('settings/delaccount',$data);
	}

	public function bank()
	{
		$data['uyelist'] = $this->account_model->uye_list();
		$data['orders'] = $this->db->get('odeme_bildirim')->result();
		$this->load->view('settings/bank',$data);
	}

	public function tconay()
	{
		$data['uyelist'] = $this->account_model->uye_list();
		$data['orders'] = $this->db->get('odeme_bildirim')->result();
		$this->load->view('settings/tconay',$data);
	}

	public function mantconay()
	{
		$data['uyelist'] = $this->account_model->uye_list();
		$data['orders'] = $this->db->get('odeme_bildirim')->result();
		$this->load->view('settings/mantconay',$data);
	}

	public function activation()
	{
		$data['uyelist'] = $this->account_model->uye_list();
		$data['orders'] = $this->db->get('odeme_bildirim')->result();
		$this->load->view('settings/activation',$data);
	}




// ISLEMLER


	public function change_password()
	{
		$passnow = md5($this->input->post('passnow'));
		$passnew = md5($this->input->post('passnew'));
		$userID = $this->input->post('userid');

		$result = $this->account_model->pass_control($passnow);

		if($result==1){

			echo $this->db->query("UPDATE account SET password='$passnew' WHERE user_id='$userID'");

		}else{
			echo 'Mevcud <b>Şifre</b> Yanlıstır';
		}

	}



	public function add_profile_image($userid)
	{
		$config['upload_path']          = 'user_profile/';
        $config['allowed_types']        = 'jpg';

        $image = $_FILES['file']['name'];
        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload('file'))
        {
               echo 'Dogru format digil';
        }
        else
        {
            echo $this->db->query("UPDATE account SET kullanici_resim='$image' WHERE user_id='$userid'");          
        }
	}



	public function select_district()
	{
		$rows = $this->db->where(array('sehirID'=>$_POST['city']))->get('ilceler')->result();
		foreach ($rows as $row) {
			echo '<option value="'.$row->ilce_id.'">'.$row->ilce_name.'</option>';
		}
	}


	public function add_address()
	{
		$city = $this->input->post('city');
		$district = $this->input->post('district');
		$address = $this->input->post('address');
		$userid = $this->input->post('userid');

		if($city==""){
			echo 'Lütfen şehir giriniz';
		}elseif($district==""){
			echo 'Lütfen ilçe giriniz';
		}elseif($address==""){
			echo 'Lütfen adres giriniz';
		}else{

			$where = array(
			'user_id'=>$userid
			);
			$data = array(
				'sehir'	=>$city,
				'ilce'	=>$district,
				'address'	=>$address,
			);

			echo $this->db->where($where)->update('account',$data);

		}


		
	}





	public function tconay_process()
	{

		$name_surname = strtoupper($this->input->post('name_surname'));
		$dtar =$this->input->post('dtar');
		$tcid =$this->input->post('tcid');
		$userid =$this->input->post('userid');

		$name = explode(" ", $name_surname);
		$surname = explode(" ", $name_surname);

		$client = new SoapClient("https://tckimlik.nvi.gov.tr/Service/KPSPublic.asmx?WSDL");
		try {
		    $result = $client->TCKimlikNoDogrula([
		        'TCKimlikNo' => $tcid,
		        'Ad' => $name[0],
		        'Soyad' => $surname[1],
		        'DogumYili' => $dtar
		    ]);
		    if ($result->TCKimlikNoDogrulaResult) {
		        
		    	$where = array(
		    		'user_id'=>$userid
		    	);
		    	$data = array(
		    		'name_surname' 	=>$name_surname,
		    		'dogum_yili'	=>$dtar,
		    		'tc_kimlik'		=>$tcid
		    	);
		    	echo $this->db->where($where)->update('account',$data);

		    } else {
		        echo 'T.C. Kimlik Numarası Hatalı';
		    }
		} catch (Exception $e) {
		    echo $e->faultstring;
		}

	}



	public function change_email()
	{
		$userID = $this->input->post('user_id');
		$email = $this->input->post('e_mail');
		$where = array('user_id'=>$userID);
		$data = array('eposta'=>$email);
		$result = $this->account_model->account_email_control($email);
		if($result==1){
			echo 'Bu <b>E-mail adresi</b> daha önce kullanılmıştır';
		}else{

			if($email==""){
				echo 'E-posta adresinizi yazın';
			}else{
				echo $this->db->where($where)->update('account',$data);
			}

		}
		
	}


	public function change_phone()
	{
		$userID = $this->input->post('user_id');
		$phone = $this->input->post('phone');
		$where = array('user_id'=>$userID);
		$data = array('phone'=>$phone);
		$result = $this->account_model->account_phone_control($phone);
		if($result==1){

			echo 'Bu <b>Telefon numarası</b> daha önce kullanılmıştır';

		}else{
			if($phone==""){
				echo 'Telefon numaranızı yazın';
			}else{
				echo $this->db->where($where)->update('account',$data);
			}
			
		}

		
	}


	public function eposta_activation()
	{
		$userID = $_GET['userPost'];
		$where = array('user_id'=>$userID);
		$data = array('eposta_onay'=>1);
		$param = rand(1,10000);
		set_cookie('warning',$param, 15);
		$this->db->where($where)->update('account',$data);
		redirect(base_url('warning/'.$param));
	}



	public function emailonay()
	{
		$this->load->library('phpmailer_lib');
		$mail =$this->phpmailer_lib->load();

		$email =$this->input->post('email');
		$userid =$this->input->post('userid');
		$username = $this->input->post('username');
		$url = base_url('settings/eposta_activation?userPost='.$userid);


		$mail->isSMTP();                                           
		$mail->Host       = 'smtp.hostinger.com';  
		$mail->SMTPKeepAlive = true;                 			 
		$mail->SMTPAuth   = true;                                  
		$mail->Username   = 'info@goldbazar.az';                     
		$mail->Password   = '9wJDE!Ze&FZ;';                               
		$mail->SMTPSecure = 'tls';                                  
		$mail->Port       = 587; 

		$mail->setFrom('info@goldbazar.az', 'Ilansat.net');
		$mail->addAddress($email, 'Ilansat');
		$mail->IsHTML(true);

		$mail->Subject = 'Aramiza hosgeldin ' . $username;
		$mail->Body = '

		<div id="mail_container" style="width:100%;background:#fff;position:relative;">
			
			<div id="mail_content" style="padding-left:10px;padding-right:10px;">
				<p>Merhaba <b>'.$username.'</b></p>

				<p>Tebrik ederiz. üyelik kaydınız başarıyla gerçekleşmiştir</p>

				<p>Ilansat.net sisteminin tüm avantajlarından ve kampanyalarından faydalanabilmek için aşağıda belirtilen link-e tıklayarak hesabınızı aktif hale getirmeniz gerekmektedir.</p>

				<p>Link <a href="'.$url.'">Bu adrese klik ederek E-mail adresinizi aktiv edin</a></p>

				<p>E-mail aktivasyonunu gerçekleştirmemiş üyelerimize hiç bir bildirimin gönderilmeyecek olmasının yanı sıra, üyelerimiz; kampanya ve belirli dönemlerde düzenlenen yarışmalar sonunda dağıtılacak olan hediyeleri kazanma hakkına da sahip olamayacaklardır.
				</p>

				<p>Saygılarımızla</p>
				<p>Ilansat.net</p>

			</div>
				
		</div>';

		$mail->CharSet = 'UTF-8';

		$mail->send();
		echo 'Onay Linki Eposta adresinize gönderildi';


	}



	public function tc_kimlik_upload($userid)
	{
		$config['upload_path']          = 'user_profile/';
        $config['allowed_types']        = 'jpg';

        $image = $_FILES['file']['name'];
        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload('file'))
        {
               echo 'Dogru format digil';
        }
        else
        {
            echo $this->db->query("UPDATE account SET kimlik_resim='$image' WHERE user_id='$userid'");          
        }
	}



	public function deleteIlan()
	{
		$this->db->where(array('ilan_id'=>$_POST['id']))->delete('ilanlar');
	}




	public function addKampaniya()
	{
		date_default_timezone_set('Asia/Baku');
		$baslik = ucfirst($this->input->post('baslik'));
		$icerik = $this->input->post('texteditor');
		$userid = $this->input->post('userid');

		$data=array(
			'user_id' =>$userid,
			'baslik' =>$baslik,
			'icerik' =>$icerik,
			'data' =>date('d.m.Y H:i')
		);

		$this->db->insert('kampaniya', $data);
		redirect($_SERVER['HTTP_REFERER']);
	}



















}






?>