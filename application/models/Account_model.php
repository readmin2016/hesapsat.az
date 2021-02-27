<?php


class Account_model extends CI_Model{



public function createAccount($data)
{
	return $this->db->insert('account',$data);
}


public function account_email_control($email)
{
	$this->db->where('eposta',$email);
	$query = $this->db->get('account');
	if($query->num_rows() > 0){
		return true;
	}else{
		return false;
	}
}


public function account_phone_control($phone)
{
	$this->db->where('phone',$phone);
	$query = $this->db->get('account');
	if($query->num_rows() > 0){
		return true;
	}else{
		return false;
	}
}


public function login_control($kullanici_adi,$sifre)
{
	$this->db->where('kullanici_adi',$kullanici_adi);
	$this->db->where('password',$sifre);
	$query = $this->db->get('account');
	if($query->num_rows() > 0){
		return true;
	}else{
		return false;
	}
}

public function login_control_1($kullanici_adi_1,$sifre_1)
{
	$this->db->where('kullanici_adi',$kullanici_adi_1);
	$this->db->where('password',$sifre_1);
	$query = $this->db->get('account');
	if($query->num_rows() > 0){
		return true;
	}else{
		return false;
	}
}

public function pass_control($passnow)
{
	$this->db->where('password',$passnow);
	$query = $this->db->get('account');
	if($query->num_rows() > 0){
		return true;
	}else{
		return false;
	}
}


public function admin_k_adi($kullanici_adi)
{
	$this->db->where('admin_name',$kullanici_adi);
	$query = $this->db->get('admin');
	if($query->num_rows() > 0){
		return true;
	}else{
		return false;
	}
}



public function uye_list()
{
	return $this->db->where(array('kullanici_adi'=>get_cookie('username')))->get('account')->result();
}


public function all_uyeler()
{
	return $this->db->get('account')->result();
}








}







?>