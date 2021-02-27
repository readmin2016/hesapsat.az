<?php


class Process_model extends CI_Model{



	public function platformlists()
	{
		return $this->db->get('platform')->result();
	}

	public function ishlemlist($where)
	{
		return $this->db->where($where)->get('ishlem')->result();
	}

	public function sehirler()
	{
		return $this->db->get('sehir')->result();
	}

	public function giris_control($username,$pass)
	{
		$this->db->where('admin_name',$username);
		$this->db->where('admin_sifre',$pass);
		$query = $this->db->get('admin');
		if($query->num_rows()>0){
			return 1;
		}else{
			return 0;
		}

	}


	public function md_giris_control($mdusername,$mdpass)
	{
		$this->db->where('md_name',$mdusername);
		$this->db->where('md_sifre',$mdpass);
		$query = $this->db->get('moderator');
		if($query->num_rows()>0){
			return 1;
		}else{
			return 0;
		}

	}

	public function aldiklarim($userID)
	{
		$this->db->where('userid',$userID);
		$query = $this->db->get('odeme_bildirim');
		if($query->num_rows()>0){
			return 1;
		}else{
			return 0;
		}

	}

	public function satdiklarim($satanID)
	{
		$this->db->where('satan',$satanID);
		$query = $this->db->get('odeme_bildirim');
		if($query->num_rows()>0){
			return 1;
		}else{
			return 0;
		}

	}


	public function satdiklarim_count($userID)
	{
		$this->db->where('userid',$userID);
		return $this->db->get('odeme_bildirim');
		

	}


	public function facebook_control()
	{
		$this->db->where('media_name','facebook');
		$query = $this->db->get('media');
		if($query->num_rows()>0){
			return 1;
		}else{
			return 0;
		}

	}

	public function instagram_control()
	{
		$this->db->where('media_name','instagram');
		$query = $this->db->get('media');
		if($query->num_rows()>0){
			return 1;
		}else{
			return 0;
		}

	}

	public function twitter_control()
	{
		$this->db->where('media_name','twitter');
		$query = $this->db->get('media');
		if($query->num_rows()>0){
			return 1;
		}else{
			return 0;
		}

	}


	public function tiktok_control()
	{
		$this->db->where('media_name','tiktok');
		$query = $this->db->get('media');
		if($query->num_rows()>0){
			return 1;
		}else{
			return 0;
		}

	}

	public function youtube_control()
	{
		$this->db->where('media_name','youtube');
		$query = $this->db->get('media');
		if($query->num_rows()>0){
			return 1;
		}else{
			return 0;
		}

	}


	public function contact_control()
	{
		$query = $this->db->get('contac_form');
		if($query->num_rows()>0){
			return 1;
		}else{
			return 0;
		}

	}



	public function seo_control()
	{
		$query = $this->db->get('seo');
		if($query->num_rows()>0){
			return 1;
		}else{
			return 0;
		}

	}


	public function duyuru_control()
	{
		$query = $this->db->get('duyurular');
		if($query->num_rows()>0){
			return 1;
		}else{
			return 0;
		}

	}


	public function useruyari_control($userid)
	{	
		$this->db->where('user_id',$userid);
		$query = $this->db->get('uyarilar');
		if($query->num_rows()>0){
			return 1;
		}else{
			return 0;
		}

	}




	public function like_control($userid)
	{	
		$this->db->where('userid',$userid);
		$query = $this->db->get('duyurular');
		if($query->num_rows()>0){
			return 1;
		}else{
			return 0;
		}

	}


	public function vip_popup_control()
	{	
		$query = $this->db->get('vipuye_sartlari');
		if($query->num_rows()>0){
			return 1;
		}else{
			return 0;
		}

	}


	public function vip_price_control()
	{	
		$query = $this->db->get('vip_price');
		if($query->num_rows()>0){
			return 1;
		}else{
			return 0;
		}

	}


	public function bakiye_control()
	{	
		$query = $this->db->get('bakiye');
		if($query->num_rows()>0){
			return 1;
		}else{
			return 0;
		}

	}


	public function odeme_control()
	{	
		$this->db->where('odeme_name','papara');
		$query = $this->db->get('odeme_yontemi');
		if($query->num_rows()>0){
			return 1;
		}else{
			return 0;
		}

	}

	public function odeme_ininal_control()
	{	
		$this->db->where('odeme_name','ininal');
		$query = $this->db->get('odeme_yontemi');
		if($query->num_rows()>0){
			return 1;
		}else{
			return 0;
		}

	}


	public function odeme_havale_control()
	{	
		$this->db->where('odeme_name','havale');
		$query = $this->db->get('odeme_yontemi');
		if($query->num_rows()>0){
			return 1;
		}else{
			return 0;
		}

	}


	public function komisyon_control()
	{	
		$query = $this->db->get('komisyon');
		if($query->num_rows()>0){
			return 1;
		}else{
			return 0;
		}

	}

	public function sayfa_control($where)
	{	
		$query = $this->db->where('sayfa_id',$where);
		$query = $this->db->get('sayfalar');
		if($query->num_rows()>0){
			return 1;
		}else{
			return 0;
		}

	}


	public function ilanlarim_sayfa_control($userid)
	{	
		$query = $this->db->where('userid',$userid);
		$query = $this->db->get('ilanlar');
		if($query->num_rows()>0){
			return 1;
		}else{
			return 0;
		}

	}

	public function resim_control($token)
	{	
		$query = $this->db->where('token',$token);
		$query = $this->db->get('resimler');
		if($query->num_rows()>0){
			return 1;
		}else{
			return 0;
		}

	}

	public function ilan_control($category,$alt_category)
	{	
		$this->db->where('ilan_anacategory',$category);
		$this->db->where('ilan_altcategory',$alt_category);
		$query = $this->db->get('ilanlar');
		if($query->num_rows()>0){
			return 1;
		}else{
			return 0;
		}

	}

	public function ilan_alt_control($alt_category)
	{	
		$this->db->where('ilan_altcategory',$alt_category);
		$query = $this->db->get('ilanlar');
		if($query->num_rows()>0){
			return 1;
		}else{
			return 0;
		}

	}


	public function ilancontrol()
	{	
		$query = $this->db->get('ilanlar');
		if($query->num_rows()>0){
			return 1;
		}else{
			return 0;
		}

	}




	public function useruyari_count($userid)
	{	
		
		$this->db->select('*');
		$this->db->from('uyarilar');
		$this->db->where('user_id',$userid);
		$this->db->where('durum',0);
		return $this->db->count_all_results();

	}




	public function onay_control()
	{
		$this->db->select('*');
		$this->db->from('ilanlar');
		$this->db->where('activation',0);
		return $this->db->count_all_results();

	}

	public function uye_kampaniya_control()
	{
		$this->db->select('*');
		$this->db->from('user_company_notification');
		$this->db->where('durum',0);
		return $this->db->count_all_results();

	}


	public function ilan_sayi()
	{
		$this->db->select('*');
		$this->db->from('ilanlar');
		return $this->db->count_all_results();

	}

	public function ilan_category_sayi($category)
	{

		$this->db->select('*');
		$this->db->from('ilanlar');
		$this->db->where('ilan_anacategory',$category);
		return $this->db->count_all_results();

	}

	public function blog_sayi()
	{
		$this->db->select('*');
		$this->db->from('blog');
		return $this->db->count_all_results();

	}

	public function kullanici_sayi()
	{
		$this->db->select('*');
		$this->db->from('account');
		return $this->db->count_all_results();

	}

	public function moderator_sayi()
	{
		$this->db->select('*');
		$this->db->from('moderator');
		return $this->db->count_all_results();

	}

	public function user_ilan_control($userid)
	{	
		$this->db->select('*');
		$this->db->from('ilanlar');
		$this->db->where('userid',$userid);
		return $this->db->count_all_results();

	}

	public function follow_sayi($say)
	{

		$this->db->select('*');
		$this->db->from('myfollows');
		$this->db->where('ilan_id',$say);
		return $this->db->count_all_results();

	}



	public function mdUser($where)
	{
		return $this->db->where(array('md_name'=>$where))->get('moderator')->result();
	}


	
















}















?>