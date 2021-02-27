<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {

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

	
	public function about_us()
	{
		$data['uyelist'] = $this->account_model->uye_list();
		$data['pages'] = $this->db->where(array('page_id'=>1))->get('sayfalar')->result();
		$data['orders'] = $this->db->get('odeme_bildirim')->result();
		$this->load->view('pages/about_us',$data);
	}


	public function incele()
	{
		error_reporting(0);
		$data['uyelist'] = $this->account_model->uye_list();

		$data['kullanicilar'] = $this->db->get('account')->result();
		$data['ilanlar'] = $this->db->get('ilanlar')->result();
		$data['hesabicerik'] = $this->db->get('hesab_icerik')->result();
		$data['anacategory'] = $this->db->get('platform')->result();
		$data['altcategory'] = $this->db->get('ishlem')->result();
		$data['orders'] = $this->db->get('odeme_bildirim')->result();

		$url = $_SERVER['REQUEST_URI'];
		$find = array('I','ı','/');
		$replace = array('i','i',' ');
		$url = strtolower(str_replace($find, $replace, $url));
		$param = str_replace(" ", " ", $url);
		$tokens = explode(" ", $param);
		$token= $tokens[5];

		$bakis = $this->db->query("UPDATE ilanlar SET bakis_sayi=bakis_sayi+1 WHERE token='$token'");
		$data['ilanDetal'] = $this->db->where(array('token'=>$token))->get('ilanlar')->result();
		$data['gorseller'] = $this->db->get('resimler')->result();
		$data['blog'] = $this->db->order_by('bg_id','DESC')->limit(1)->get('blog')->result();
		$this->load->view('pages/incele',$data);
	}


	public function papara()
	{
		$data['uyelist'] = $this->account_model->uye_list();
		$data['pages'] = $this->db->where(array('page_id'=>1))->get('sayfalar')->result();
		$data['orders'] = $this->db->get('odeme_bildirim')->result();

		$this->load->view('pages/papara',$data);
	}

	public function ininal()
	{
		$data['uyelist'] = $this->account_model->uye_list();
		$data['pages'] = $this->db->where(array('page_id'=>1))->get('sayfalar')->result();
		$data['orders'] = $this->db->get('odeme_bildirim')->result();
		
		$this->load->view('pages/ininal',$data);
	}

	public function bank_transfer()
	{
		$data['uyelist'] = $this->account_model->uye_list();
		$data['havale'] = $this->db->get('havale_eft')->result();	
		$this->load->view('pages/bank_transfer',$data);
		$data['orders'] = $this->db->get('odeme_bildirim')->result();
	}



	public function searchfolder()
	{
		
		echo @$_GET['ch'];
	}


	public function ilanlar()
	{
		$data['uyelist'] = $this->account_model->uye_list();
		$data['kullanicilar'] = $this->db->get('account')->result();
		$data['ilanlar'] = $this->db->get('ilanlar')->result();
		$data['hesabicerik'] = $this->db->get('hesab_icerik')->result();
		$data['anacategory'] = $this->db->get('platform')->result();
		$data['altcategory'] = $this->db->get('ishlem')->result();
		$data['ishlemler'] = $this->db->get('alt_kategoriya')->result();
		$data['orders'] = $this->db->get('odeme_bildirim')->result();
		$this->load->view('pages/ilanlar',$data);

	}

	public function mylistings()
	{
		$data['uyelist'] = $this->account_model->uye_list();
		$data['orders'] = $this->db->get('odeme_bildirim')->result();
		$this->load->view('pages/mylistings',$data);
	}

	public function myfollows()
	{
		$data['uyelist'] = $this->account_model->uye_list();
		$data['ilanlist'] = $this->db->get('ilanlar')->result();
		$data['anacategory'] = $this->db->get('platform')->result();
		$data['altcategory'] = $this->db->get('ishlem')->result();
		$data['orders'] = $this->db->get('odeme_bildirim')->result();


		if(get_cookie('bookmark[]')){
			$this->load->view('pages/myfollows',$data);
		}else{
			redirect(base_url());
		}
		
	}


	public function register()
	{
		if(get_cookie('username')){
			redirect(base_url());
		}else{
			$data['uyelist'] = $this->account_model->uye_list();
			$data['orders'] = $this->db->get('odeme_bildirim')->result();
			$this->load->view('pages/register',$data);
		}
		
	}

	public function contact()
	{
		$data['uyelist'] = $this->account_model->uye_list();
		$data['orders'] = $this->db->get('odeme_bildirim')->result();
		$this->load->view('pages/contact',$data);
	}

	public function faq()
	{
		$data['uyelist'] = $this->account_model->uye_list();
		$data['faq'] = $this->db->get('faq')->result();
		$data['orders'] = $this->db->get('odeme_bildirim')->result();
		$this->load->view('pages/faq',$data);
	}

	public function terms_conditions()
	{
		$data['uyelist'] = $this->account_model->uye_list();
		$data['pages'] = $this->db->where(array('page_id'=>2))->get('sayfalar')->result();
		$data['orders'] = $this->db->get('odeme_bildirim')->result();
		$this->load->view('pages/terms_conditions',$data);
	}

	public function privacy_policy()
	{
		$data['uyelist'] = $this->account_model->uye_list();
		$data['pages'] = $this->db->where(array('page_id'=>3))->get('sayfalar')->result();
		$data['orders'] = $this->db->get('odeme_bildirim')->result();
		$this->load->view('pages/privacy_policy',$data);
	}

	public function blog()
	{
		$data['uyelist'] = $this->account_model->uye_list();
		$data['blogs'] = $this->db->get('blog')->result();
		$data['blogslimit'] = $this->db->limit(4)->get('blog')->result();
		$data['orders'] = $this->db->get('odeme_bildirim')->result();
		$this->load->view('pages/blog',$data);
	}



	public function payment($pay,$token,$satici)
	{
		if(get_cookie('username')){
			
			$data['uyelist'] = $this->account_model->uye_list();
			$data['payments'] = $this->db->get('payment')->result();
			$data['havale'] = $this->db->get('havale_eft')->result();
			$data['orders'] = $this->db->get('odeme_bildirim')->result();
			$data['pay']=$pay;
			$data['token']=$token;
			$data['satici']=$satici;
			$this->load->view('pages/payment',$data);
		}else{
			redirect(base_url());
		}
		
	}




	public function nead_login()
	{
		if(get_cookie('username')){
			redirect(base_url());
		}else{
			
			$data['uyelist'] = $this->account_model->uye_list();
			$data['orders'] = $this->db->get('odeme_bildirim')->result();
			$this->load->view('pages/nead_login',$data);
		}
		
	}

	public function detay()
	{
		$id = $_GET['devami'];
		$data['uyelist'] = $this->account_model->uye_list();
		$data['blogs'] = $this->db->where(array('bg_id'=>$_GET['devami']))->get('blog')->result();
		$data['orders'] = $this->db->get('odeme_bildirim')->result();
		$this->db->query("UPDATE blog SET bakis=bakis+1 WHERE bg_id='$id'");

		$data['comments'] = $this->db->get('yorumlar')->result();
		$this->load->view('pages/detay',$data);
	}


	public function dashboard()
	{
		$data['uyelist'] = $this->account_model->uye_list();
		$data['duyuru'] = $this->db->get('duyurular')->result();
		$data['uyari'] = $this->db->get('uyarilar')->result();
		$data['orders'] = $this->db->get('odeme_bildirim')->result();
		$this->load->view('pages/dashboard',$data);
	}

	public function wallet()
	{
		$data['uyelist'] = $this->account_model->uye_list();
		$data['orders'] = $this->db->get('odeme_bildirim')->result();
		$this->load->view('pages/wallet',$data);
	}

	public function info($anacategory,$altcategory)
	{
		$data['uyelist'] = $this->account_model->uye_list();
		$data['anacategories'] = $this->db->where(array('plt_id'=>$anacategory))->get('platform')->result();
		$data['altcategories'] = $this->db->where(array('value'=>$altcategory))->get('ishlem')->result();
		$data['yuzde'] = $this->db->get('takipci_orani')->result();
		$data['hesab_icerik'] = $this->db->get('hesab_icerik')->result();
		$data['hesab_yili'] = $this->db->order_by('yil_id','DESC')->get('hesab_acilis')->result();
		$data['anacategory'] = $anacategory;
		$data['altcategory'] = $altcategory;
		$data['orders'] = $this->db->get('odeme_bildirim')->result();


		$this->load->view('pages/info',$data);
	}



	public function images($anacategory,$altcategory)
	{
		$data['uyelist'] = $this->account_model->uye_list();
		$data['anacategory'] = $anacategory;
		$data['altcategory'] = $altcategory;
		$data['ilan_liste'] = $this->db->get('ilanlar')->result();
		$data['orders'] = $this->db->get('odeme_bildirim')->result();

		$this->load->view('pages/images',$data);
	}


	// public function doping($anacategory,$altcategory)
	// {
	// 	$data['uyelist'] = $this->account_model->uye_list();
	// 	$data['anacategory'] = $anacategory;
	// 	$data['altcategory'] = $altcategory;
	// 	$data['orders'] = $this->db->get('odeme_bildirim')->result();

	// 	$this->load->view('pages/doping',$data);
	// }





	public function warning($param)
	{
		if(get_cookie('warning')){
			$data['uyelist'] = $this->account_model->uye_list();
			$data['orders'] = $this->db->get('odeme_bildirim')->result();
			$this->load->view('pages/warning',$data);
		}else{
			redirect(base_url());
		}
		
		
	}




	public function add_listing()
	{
		if(get_cookie('username')){

			$data['platform_list'] = $this->process_model->platformlists();
			$data['uyelist'] = $this->account_model->uye_list();
			$data['orders'] = $this->db->get('odeme_bildirim')->result();
			$this->load->view('pages/add_listing',$data);

		}else{
			redirect(base_url('nead-login'));
		}
		
	}



	public function komisyon_hesapla()
	{
		if(get_cookie('username')){

			$data['platform_list'] = $this->process_model->platformlists();
			$data['uyelist'] = $this->account_model->uye_list();
			$data['kategori'] = $this->db->get('platform')->result();
			$data['komisyon'] = $this->db->get('komisyon')->result();
			$data['orders'] = $this->db->get('odeme_bildirim')->result();
			$this->load->view('pages/komisyon_hesapla',$data);

		}else{
			redirect(base_url('nead-login'));
		}
		
	}

	


	
// ILSEMLER


	public function loadislem()
	{
		$scat = $_POST['valValue'];
		$where =array('plt_id'=>$scat);
		$rows = $this->process_model->ishlemlist($where);
		echo '<option value="" class="0">İşlem seçiniz</option>';
		foreach ($rows as $row) {
			echo '<option class="'.$scat.'" value="'.$row->value.'">'.$row->ish_name.'</option>';
		}
		
	}



	public function create_account()
	{
		sleep(2);
		date_default_timezone_set('Europe/Istanbul');
		$data = array(
			'kullanici_adi'  =>$this->input->post('kullanici_adi'),
			'eposta'  =>$this->input->post('eposta'),
			'phone'  =>$this->input->post('phone'),
			'prefix'  =>$this->input->post('prefix'),
			'password'  =>md5($this->input->post('password')),
			'kullanici_durum' =>0,
			'upload_limit' =>1,
			'data_account' =>turkcetarih_formati('d.F.Y'),
			'data_account_en' =>date('d.F.Y H:i:s'),
		);
		$email = $this->input->post('eposta');
		$phone = $this->input->post('phone');

		$resultEmail = $this->account_model->account_email_control($email);
		$resultPhone = $this->account_model->account_phone_control($phone);
		if($resultEmail==true){
			echo 'Bu email adresi daha once kullanilmaktadir!';
		}elseif($resultPhone==true){
			echo 'Bu telefon numarasi daha once kullanilmaktadir!';
		}else{
			$create = $this->account_model->createAccount($data);
			if($create){
				$this->input->set_cookie('username', $this->input->post('kullanici_adi'), 60*60*24);
				echo 1;
			}
		}

		
	}



	



	public function login()
	{
		$kullanici_adi = $this->input->post('user_name');
		$sifre = md5($this->input->post('password'));
		$result = $this->account_model->login_control($kullanici_adi,$sifre);
		if($result==1){
			if(isset($_POST['remember'])){
				$this->input->set_cookie('username', $this->input->post('user_name'), 60*60*24);
				echo 1;
			}else{
				$this->input->set_cookie('username', $this->input->post('user_name'), 60*60);
				echo 1;
			}

		}else{
			echo 'Kullanıcı adı ve ya Şifre hatalı';
			
		}

	}



	public function neadlogin()
	{
		$kullanici_adi = $this->input->post('kullanici_adi_1');
		$sifre = md5($this->input->post('password_1'));
		$result = $this->account_model->login_control($kullanici_adi, $sifre);
		if($result==1){
			if(isset($_POST['remember'])){
				$this->input->set_cookie('username', $this->input->post('kullanici_adi_1'), 60*60*24);
				echo 1;
			}else{
				$this->input->set_cookie('username', $this->input->post('kullanici_adi_1'), 60*60);
				echo 1;
			}
		}else{
			echo 'Kullanıcı adı ve ya Şifre hatalı';
			
		}

	}


	public function logout()
	{
		delete_cookie('username');
		redirect(base_url());
	}







	public function add_ilan()
	{
		date_default_timezone_set('Europe/Istanbul');
		$anacat = $this->db->get('platform')->result();
		$altcat = $this->db->get('ishlem')->result();

		

		$userid = $this->input->post('userid');
		$anacategory = $this->input->post('anacategory');
		$altcategory = $this->input->post('altcategory');
		$title =$this->input->post('title');
		$ortakipci = $this->input->post('ortakipci');
		$turktakipci = $this->input->post('turktakipci');
		$kadintakipci = $this->input->post('kadintakipci');
		$hesapicerik = $this->input->post('hesapicerik');
		$hesapname = $this->input->post('hesapname');
		$acilis_yili = $this->input->post('acilis_yili');
		$takipcisay = $this->input->post('takipcisay');
		$goderisay = $this->input->post('goderisay');
		$mavitiklimi = $this->input->post('mavitiklimi');
		$isletmemi = $this->input->post('isletmemi');
		$engelvarmi = $this->input->post('engelvarmi');
		$engeller = $this->input->post('engeller');
		$teklife_acik = $this->input->post('teklife_acik');
		$teklif_tutari = $this->input->post('teklif_tutari');
		$price = $this->input->post('price');
		$detail = $this->input->post('detail');
		$ilk_mail = $this->input->post('kureposta');
		$revert_mail = $this->input->post('gereposta');
		$tarih = date('d.m.Y');
		$tokken = rand(11111111,99999999);

		

		$cat = $altcategory;
		$num=$takipcisay;

		if($num>1000) {

	        $x = round($num);
	        $x_number_format = number_format($x);
	        $x_array = explode(',', $x_number_format);
	        $x_parts = array('k', 'm', 'b', 't');
	        $x_count_parts = count($x_array) - 1;
	        $x_display = $x;
	        $x_display = $x_array[0] . ((int) $x_array[1][0] !== 0 ? '.' . $x_array[1][0] : '');
	        $x_display .= $x_parts[$x_count_parts - 1];

		  }elseif($num==0){
		  	$x_display ="-";
		  }
		  else{
		  	$x_display = $num;
		  }

		switch ($cat) {
			case '106':
			
				if($title ==""){
					echo '<b>Hata!</b> Lütfen ilan başlığınızı minimum 20 karakter olacak şekilde girin!';
				}	
				elseif(!is_numeric($price) || $price==""){
					echo '<b>Hata!</b> Lütfen satış fiyatını giriniz!';
				}elseif(strlen($detail) < 50 || $detail==""){
					echo '<b>Hata!</b> Lütfen ilanınızla ilgili en fazla 50 karakterlik bilgi veriniz!';
				}else{

					$data = array(
						'userid' => $userid,
						'ilan_anacategory' => $anacategory,
						'ilan_altcategory' =>$altcategory,
						'ilan_basligi' =>$title,
						'teklif' => $teklife_acik,
						'teklif_tutar' => $teklif_tutari,
						'satis_fiyat' => $price,
						'detay_bilgi' => nl2br($detail),
						'token' => $tokken,
						'yuklenme_tarih' => $tarih

					);

					$insert = $this->db->insert('ilanlar',$data);
					if($insert){
						echo 1;
					}

				}

			

			break;

			case '107':

					if($hesapname==""){
						echo '<b>Hata!</b> Lütfen hesap kullanıcı adını girin!';
					}elseif($title ==""){
						echo '<b>Hata!</b> Lütfen ilan başlığınızı minimum 20 karakter olacak şekilde girin!';
					}	
					elseif(!is_numeric($price) || $price==""){
						echo '<b>Hata!</b> Lütfen satış fiyatını giriniz!';
					}elseif(strlen($detail) < 50 || $detail==""){
						echo '<b>Hata!</b> Lütfen ilanınızla ilgili en fazla 50 karakterlik bilgi veriniz!';
					}else{

						$data = array(
							'userid' => $userid,
							'ilan_anacategory' => $anacategory,
							'ilan_altcategory' =>$altcategory,
							'hesap_kullanici_adi' => $hesapname,
							'ilan_basligi' =>$title,
							'teklif' => $teklife_acik,
							'teklif_tutar' => $teklif_tutari,
							'satis_fiyat' => $price,
							'detay_bilgi' => nl2br($detail),
							'token' => $tokken,
							'yuklenme_tarih' => $tarih

						);

						$insert = $this->db->insert('ilanlar',$data);
						if($insert){
							echo 1;
						}

					}

			break;
			
			default:

			if(is_numeric($ortakipci) || $ortakipci==""){
				echo '<b>Hata!</b> Lütfen organik takipçi oranını girin!';
			}elseif($turktakipci==""){
				echo '<b>Hata!</b> Lütfen Türk takipçi oranını girin!';
			}elseif($kadintakipci==""){
				echo '<b>Hata!</b> Lütfen kadın takipçi oranını girin!';
			}elseif($hesapicerik==""){
				echo '<b>Hata!</b> Lütfen hesap içeriğini girin!';
			}elseif($hesapname==""){
				echo '<b>Hata!</b> Lütfen hesap kullanıcı adını girin!';
			}elseif($acilis_yili==""){
				echo '<b>Hata!</b> Lütfen hesap açılış yılını girin!';
			}elseif(!is_numeric($takipcisay) || $takipcisay==""){
				echo '<b>Hata!</b> Lütfen takipçi sayısını girin!';
			}elseif($engelvarmi==1){
				echo '<b>Hata!</b> Lütfen hesaptaki engel durumunu ve varsa engelleri belirtin!';
			}elseif(!is_numeric($price) || $price==""){
				echo '<b>Hata!</b> Lütfen satış fiyatını giriniz!';
			}elseif(strlen($detail) < 10 || $detail==""){
				echo '<b>Hata!</b> Lütfen ilanınızla ilgili en fazla 50 karakterlik bilgi veriniz!';
			}else{



				$data = array(
					'userid' => $userid,
					'ilan_anacategory' => $anacategory,
					'ilan_altcategory' =>$altcategory,
					'ilk_mail'			=> $ilk_mail,
					'ilan_basligi'		=>Null,
					'revert_mail'		=> $revert_mail,
					'org_takipci' => $ortakipci,
					'kadin_takipci' => $kadintakipci,
					'turk_takipci' => $turktakipci,
					'hesap_icerik' => $hesapicerik,
					'hesap_kullanici_adi' => $hesapname,
					'hesap_acilis_yil' => $acilis_yili,
					'abone_sayi' => $takipcisay,
					'gonderi_sayi' => $goderisay,
					'mavi_tik' => $mavitiklimi,
					'hesap_durum' => $isletmemi,
					'hesap_engel' => $engelvarmi,
					'engel_icerik' => $engeller,
					'teklif' => $teklife_acik,
					'teklif_tutar' => $teklif_tutari,
					'satis_fiyat' => $price,
					'detay_bilgi' => nl2br($detail),
					'token' => $tokken,
					'yuklenme_tarih' => $tarih

				);

				$insert = $this->db->insert('ilanlar',$data);
				if($insert){
					echo 1;
				}
				



			}
				
			break;
		}

		


		

	}


	public function removeIlan()
	{
		$ilanid = $_POST['ilan_id'];
		$this->db->where('ilan_id',$ilanid)->delete('ilanlar');
	}



	public function upload()
	{
		$config['upload_path']          = 'uploads/';
        $config['allowed_types']        = 'gif|jpg|png|jpeg';
        $config['file_name']			= $_FILES['file']['name'];

        $userid = $this->input->post('userid');
        $listingid = $this->input->post('listingid');

        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload('file'))
        {
                $error = array('error' => $this->upload->display_errors());

        }
        else
        {
                $data = $this->upload->data();
                $dataimageinsert = array(
                	'token'=>$listingid,
                	'resim'=>$data['file_name'],
                	'home_screen' =>1
                );

                
                $insert = $this->db->insert('resimler',$dataimageinsert);

                
        }
	}


	public function dlt_image($resimID)
	{
		echo $resimID;
		$this->db->where(array('resim_id'=>$resimID))->delete('resimler');
		redirect($_SERVER['HTTP_REFERER']);
	}



	public function finish()
	{
		$token =$_GET['1'];
		$where = array(
        	'token'=>$token
        );
        $datafinishinsert = array(
        	'activation'=>0
        );
        $finis = $this->db->where($where)->update('ilanlar',$datafinishinsert);
        $data['uyelist'] = $this->account_model->uye_list();
        $this->load->view('pages/finish',$data);


		// $this->input->set_cookie('finish',$token,15);
		// if(get_cookie('finish')){
		// 	;
        	
		// }else{
		// 	redirect(base_url());
		// }
        
	}



	public function sikayet_et()
	{
		sleep(2);
		date_default_timezone_set('Europe/Istanbul');

		$config['upload_path'] = 'sikayetForm/';
		$config['allowed_types'] = 'jpg|png|jpeg';

		$this->load->library('upload',$config);

		

			if(! $this->upload->do_upload('file')){

				$data = array(
					'sikayet_edilen' =>$this->input->post('sikayetedilen'),
					'sikayet_eden' =>get_cookie('username'),
					'mesaj' => $this->input->post('message'),
					'data' =>date('d.m.Y')
				);

				$this->db->insert('sikayetler',$data);
				redirect($_SERVER['HTTP_REFERER']);

			}else{
				$dataFIle = $this->upload->data();

				$data = array(
					'sikayet_edilen' =>$this->input->post('sikayetedilen'),
					'sikayet_eden' =>get_cookie('username'),
					'media' => $_FILES['file']['name'],
					'mesaj' => $this->input->post('message'),
					'data' =>date('d.m.Y')
				);

				$this->db->insert('sikayetler',$data);
				redirect($_SERVER['HTTP_REFERER']);
			}

		

		
	}



	public function ilan_takip()
	{
		$bookid = $_POST['id'];
		$sessionFavori = array('favoriler'=>$bookid);
		$this->session->set_userdata($sessionFavori);

		set_cookie('bookmark['.$bookid.']',$bookid,60*60*24);
		set_cookie('bookmark',$bookid,60*60*24);

		$data = array('ilan_id'=>$bookid,'session_user'=>$this->session->sessionID);
		$this->db->insert('myfollows',$data);

		redirect($_SERVER['HTTP_REFERER']);
		
		
	}

	public function ilan_takip_birak()
	{
		if(isset($_POST['id'])){
			$bookid = $_POST['id'];
		}else{
			$bookid = $_GET['sil'];
		}
		
		
		if(isset($_GET['sil'])){

			$this->session->unset_userdata('favoriler');
			$rows = $this->db->get('myfollows')->result();
			foreach ($rows as $row) {
				if($row->session_user==$this->session->sessionID){
					$this->db->where('ilan_id',$bookid)->where('session_user',$this->session->sessionID)->delete('myfollows');
				}
			}
			delete_cookie('bookmark['.$bookid.']');
			delete_cookie('bookmark');

			redirect($_SERVER['HTTP_REFERER']);

		}else{

			$this->session->unset_userdata('favoriler');
			$rows = $this->db->get('myfollows')->result();
			foreach ($rows as $row) {
				if($row->session_user==$this->session->sessionID){
					$this->db->where('ilan_id',$bookid)->where('session_user',$this->session->sessionID)->delete('myfollows');
				}
			}
			delete_cookie('bookmark['.$bookid.']');
			delete_cookie('bookmark');
		}
		
	}


	public function show_delete_follow()
	{
		
	    $id = $_POST['ilanID'];
	    $rows = $this->db->where('ilan_id',$id)->get('ilanlar')->result();
	    $anacategory = $this->db->get('platform')->result();
		$altcategory = $this->db->get('ishlem')->result();
	    foreach ($rows as $row) {

			$id = $row->ilan_id;

			$num=$row->abone_sayi;

			if($num>1000) {

			        $x = round($num);
			        $x_number_format = number_format($x);
			        $x_array = explode(',', $x_number_format);
			        $x_parts = array('K', 'M', 'B', 'T');
			        $x_count_parts = count($x_array) - 1;
			        $x_display = $x;
			        $x_display = $x_array[0] . ((int) $x_array[1][0] !== 0 ? '.' . $x_array[1][0] : '');
			        $x_display .= $x_parts[$x_count_parts - 1];

			  }elseif($num==0){
			  	$x_display ="-";
			  }
			  else{
			  	$x_display = $num;
			  }

			foreach ($altcategory as $altcat) {
				if($row->ilan_anacategory==$altcat->plt_id){
					if($row->ilan_altcategory==$altcat->value){
						$baslik = $altcat->ilan_basligi;
						$eski = "-";
						$yeni = $x_display;
						$ilan_basligi = str_replace($eski, $yeni, $baslik);
						if($row->ilan_basligi==Null){
							$ilan_basligi;
						}else{
							$ilan_basligi = $row->ilan_basligi;
						}
					}
				}
			}


			echo '<div class="modal-body">
		        <center>
		        	<h4><b>'.$row->token.'</b> ID nolu ve <b>'.$ilan_basligi.'</b> başlıklı ilanı takip etmeyi bırakacaksınız. Emin misiniz?</h4>
		        </center>
		    </div>
		    <div class="modal-footer" style="display:block;">
		    	
		      	<div class="row">
		      		<div class="col-md-6"><button type="button" class="btn btn-light myStyleLight" data-bs-dismiss="modal">
		      			<i data-feather="power" style="width:15px;margin-top:-3px;"></i> Vazgec</button></div>
		      		<div class="col-md-6 text-right "><a href="'.base_url('pages/ilan_takip_birak?sil='.$row->ilan_id).'" class="btn btn-danger myStyleDanger">
		      			<i data-feather="x-circle" style="width:15px;margin-top:-3px;"></i> Takibi bırak</a></div>
		      	</div>
		    </div>';


		}

	    

	}












}
