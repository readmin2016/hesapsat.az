<?php



class Uyeler extends CI_Controller{


	public function __construct()
	{
		parent::__construct();
		$this->load->helper('menu');
		$this->load->helper('file');
		$this->load->model('process_model');
		$this->load->model('account_model');
		$this->load->helper('month');
	}

	public function add_terms()
	{
		$baslik = $_POST['konu_baslik'];
		$terms = $_POST['texteditor'];
		$data = array(
			'baslik' =>$baslik,
			'term' =>$terms
		);
		$this->db->insert('vipuye_sartlari',$data);
		redirect($_SERVER['HTTP_REFERER']);

	}

	public function edit_terms()
	{
		$baslik = $_POST['konu_baslik'];
		$terms = $_POST['texteditor'];
		$data = array(
			'baslik' =>$baslik,
			'term' =>$terms
		);
		$this->db->update('vipuye_sartlari',$data);
		redirect($_SERVER['HTTP_REFERER']);

	}
	public function removePopup()
	{
		$this->db->where(array('vip_id'=>$_GET['remove']))->delete('vipuye_sartlari');
		redirect($_SERVER['HTTP_REFERER']);
	}


	//**************************************************


	public function add_price()
	{
		$price = $_POST['price'];
		$data = array('price'=>$price);
		$this->db->insert('vip_price',$data);
		redirect($_SERVER['HTTP_REFERER']);
	}

	public function edit_price()
	{
		$price = $_POST['price'];
		$data = array('price'=>$price);
		$this->db->update('vip_price',$data);
		redirect($_SERVER['HTTP_REFERER']);
	}

	public function removePrice()
	{
		$this->db->where(array('p_id'=>$_GET['remove']))->delete('vip_price');
		redirect($_SERVER['HTTP_REFERER']);
	}





	public function create_vip_account()
	{
		sleep(2);
		date_default_timezone_set('Europe/Istanbul');
		$data = array(
			'kullanici_adi'  =>$this->input->post('kullanici_adi'),
			'eposta'  =>$this->input->post('eposta'),
			'phone'  =>$this->input->post('phone'),
			'prefix'  =>$this->input->post('prefix'),
			'password'  =>md5($this->input->post('password')),
			'kullanici_durum' =>1,
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




	public function refreshAccount()
	{
		$kullanici_adi 	= $this->input->post('kullanici_adi');
		$eposta 	= $this->input->post('eposta');
		$prefix 	= $this->input->post('prefix');
		$phone 	= $this->input->post('phone');
		$adress 	= $this->input->post('adress');
		$userid 	= $this->input->post('userid');

		$where = array('user_id'=>$userid);
		$data = array(
			'kullanici_adi' =>$kullanici_adi,
			'eposta' =>$eposta,
			'prefix' =>$prefix,
			'phone' =>$phone,
			'address' =>$adress
		);

		$this->db->where($where)->update('account',$data);
		redirect($_SERVER['HTTP_REFERER']);
	}




	public function edit_vipUye($vipID)
	{
		$vip_list = $this->db->where(array('user_id'=>$vipID))->get('account')->result();
		foreach ($vip_list as $row) {
			# code...
		}
		if($row->kullanici_durum==0){

			echo '<div class="row">
			<div class="col-md-12">
                <div class="card">
                  <div class="card-header"><h5 style="font-weight:600"><i data-feather="user-check" class="iconFeather"></i>Standart Üye</h5></div>
                  <div class="card-body">
                    <form action="'.base_url('uyeler/refreshAccount').'" method="post">
                    <input type="hidden" name="userid" class="form-control" value="'.$row->user_id.'">
                        <div class="form-group">
                          <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1"><i data-feather="user" style="width: 17px;"></i></span>
                            <input type="text" name="kullanici_adi" class="form-control" value="'.$row->kullanici_adi.'" aria-label="Username" aria-describedby="basic-addon1" required="">
                          </div>
                        </div>

                        <div class="form-group">
                          <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1"><i data-feather="mail" style="width: 17px;"></i></span>
                            <input type="text" name="eposta" class="form-control" value="'.$row->eposta.'" required="">
                          </div>
                        </div>

                        <div class="form-group">
                          <div class="row">
                            <div class="col-md-4">
                              <div class="input-group">
                                 <span class="input-group-text" id="basic-addon1"><i data-feather="globe" style="width: 17px;"></i></span>
                                <select name="prefix" class="form-select" id="inputGroupSelect01">
                                  <option selected>Choose...</option>';
                                  echo prefix();
                                echo'</select>
                              </div>

                            </div>
                            <div class="col-md-8">
                              <div class="input-group">
                                 <span class="input-group-text" id="basic-addon1"><i data-feather="phone" style="width: 17px;"></i></span>
                                <input type="text" name="phone" class="form-control" value="'.$row->phone.'" aria-label="Username" aria-describedby="basic-addon1" required="">
                              </div>
                            </div>
                          </div>
                        </div>

                        <div class="form-group">
                          <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1"><i data-feather="map-pin" style="width: 17px;"></i></span>
                            <input type="text" name="adress" class="form-control" placeholder="Adres" value="'.$row->adress.'" >
                          </div>
                        </div>

                        <div class="form-group">
                          <button class="btn btn-primary"><i data-feather="edit" class="iconFeather"></i> <span>Düzenle</span></button>

                          <a href="'.base_url('uyeler/addVIP/'.$row->user_id).'" class="btn btn-success"><i class="fas fa-gem" style="font-size: 13px;"></i> <span>Üyeni V.I.P yap</span></a>

                          <a href="'.base_url('uyeler/uye_banlama?deactive='.$row->user_id).'" class="btn btn-warning"><i data-feather="lock" class="iconFeather"></i> <span>Üyeni Banla</span></a>

                          <a href="'.base_url('uyeler/deleteVipUser?delete='.$row->user_id).'" class="btn btn-danger"><i data-feather="trash" class="iconFeather"></i> <span>Üyeni Sil</span></a>
                        </div>
                    </form>     
                  </div>
                </div>
              
            </div>
            </div>';

            // STANDART USER

		}else{

			// VIP USER

			echo '<div class="row">
			<div class="col-md-12">
                <div class="card">
                  <div class="card-header"><h5 style="font-weight:600"><i data-feather="user-check" class="iconFeather"></i>V.I.P üye</h5></div>
                  <div class="card-body">
                    <form action="'.base_url('uyeler/refreshAccount').'" method="post">
                    <input type="hidden" name="userid" class="form-control" value="'.$row->user_id.'">
                        <div class="form-group">
                          <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1"><i data-feather="user" style="width: 17px;"></i></span>
                            <input type="text" name="kullanici_adi" class="form-control" value="'.$row->kullanici_adi.'" aria-label="Username" aria-describedby="basic-addon1" required="">
                          </div>
                        </div>

                        <div class="form-group">
                          <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1"><i data-feather="mail" style="width: 17px;"></i></span>
                            <input type="text" name="eposta" class="form-control" value="'.$row->eposta.'" required="">
                          </div>
                        </div>

                        <div class="form-group">
                          <div class="row">
                            <div class="col-md-4">
                              <div class="input-group">
                                 <span class="input-group-text" id="basic-addon1"><i data-feather="globe" style="width: 17px;"></i></span>
                                <select name="prefix" class="form-select" id="inputGroupSelect01">
                                  <option selected>Choose...</option>';
                                  echo prefix();
                                echo'</select>
                              </div>

                            </div>
                            <div class="col-md-8">
                              <div class="input-group">
                                 <span class="input-group-text" id="basic-addon1"><i data-feather="phone" style="width: 17px;"></i></span>
                                <input type="text" name="phone" class="form-control" value="'.$row->phone.'" aria-label="Username" aria-describedby="basic-addon1" required="">
                              </div>
                            </div>
                          </div>
                        </div>

                        <div class="form-group">
                          <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1"><i data-feather="map-pin" style="width: 17px;"></i></span>
                            <input type="text" name="adress" class="form-control" placeholder="Adres" value="'.$row->adress.'" >
                          </div>
                        </div>

                        <div class="form-group">
                          <button class="btn btn-primary"><i data-feather="edit" class="iconFeather"></i> <span>Düzenle</span></button>
                          <a href="'.base_url('uyeler/uye_banlama?deactive='.$row->user_id).'" class="btn btn-warning"><i data-feather="lock" class="iconFeather"></i> <span>VIP Üyeni Banla</span></a>

                          <a href="'.base_url('uyeler/removeVIP/'.$row->user_id).'" class="btn btn-success"><i data-feather="user" class="iconFeather"></i> <span>Standart üye yap</span></a>

                          <a href="'.base_url('uyeler/deleteVipUser?delete='.$row->user_id).'" class="btn btn-danger"><i data-feather="trash" class="iconFeather"></i> <span>VIP Üyeni Sil</span></a>
                        </div>
                    </form>     
                  </div>
                </div>
              
            </div>
            </div>';

		}
		
	}



	public function uye_banlama()
	{
		$data = array('activation'=>1);
		$this->db->where(array('user_id'=>$_GET['deactive']))->update('account',$data);
		redirect($_SERVER['HTTP_REFERER']);
	}

	public function active()
	{
		$data = array('activation'=>0);
		$this->db->where(array('user_id'=>$_GET['succ']))->update('account',$data);
		redirect($_SERVER['HTTP_REFERER']);
	}

	public function deleteVipUser()
	{
		$this->db->where(array('user_id'=>$_GET['delete']))->delete('account');
		redirect($_SERVER['HTTP_REFERER']);
	}





	public function create_notification()
		{
			date_default_timezone_set('Europe/Istanbul');
			$konu_baslik = $this->input->post('konu_baslik');
			$texteditor = $this->input->post('texteditor');
			$userid = $this->input->post('kullanici');

			$data = array(
				'user_id'	=> $userid,
				'baslik'	=> $konu_baslik,
				'icerik'	=> $texteditor,
				'tarih'	=> date('d.F.Y H:i:s')
			);
			$this->db->insert('uyarilar',$data);
			redirect($_SERVER['HTTP_REFERER']);
		}


	public function update_notification()
		{
			$konu_baslik = $this->input->post('konu_baslik');
			$texteditor = $this->input->post('texteditor');
			$id = $this->input->post('id');

			$where = array('uyari_id'=>$id);

			$data = array(
				'baslik'	=> $konu_baslik,
				'icerik'	=> $texteditor
			);
			$this->db->where($where)->update('uyarilar',$data);
			redirect($_SERVER['HTTP_REFERER']);
		}

	public function delete_notification()
		{
			$where = array('uyari_id'=>$_GET['sil']);

			$this->db->where($where)->delete('uyarilar');
			redirect(base_url('admin/user_notification'));
		}


	public function addVIP($id)
	{
		$where = array('user_id'=>$id);

			$data = array(
				'kullanici_durum'=>1
			);
			$this->db->where($where)->update('account',$data);
			redirect($_SERVER['HTTP_REFERER']);
	}

	public function removeVIP($id)
	{
		$where = array('user_id'=>$id);

			$data = array(
				'kullanici_durum'=>0
			);
			$this->db->where($where)->update('account',$data);
			redirect($_SERVER['HTTP_REFERER']);
	}



}








?>
<script>
	feather.replace();
</script>