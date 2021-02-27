<?php 


function active_link($path, $className = 'active')
{
    $CI         =& get_instance();
    $uri_string = $CI->uri->uri_string();

    // Home is usually at / && has 0 total segments
    if ($path === '/' && ($CI->uri->total_segments() === 0)) {
        $ret_val = 'active';
    } else {
        $ret_val = ($uri_string === $path) ? $className : '';
    }

    return $ret_val;

}


	function mytime($tarih){
		date_default_timezone_set('Europe/Istanbul');
		$time_ego = strtotime($tarih);
		$current_time = time();
		$time_dif = $current_time - $time_ego;
		
		$seconds = $time_dif;

		$minute = round($seconds /60);
		$saat = round($seconds /3600);
		$gun = round($seconds /86400);
		$hafta = round($seconds /604800);
		$ay = round($seconds /2629440);
		$yil = round($seconds /31553280);

		if($seconds <= 60)
		{
			return "Artık beraberiz";
		}

		elseif($minute <= 60)
		{
			if($minute == 1)
			{
				return "Beraberlik süremiz <b> : $minute</b> dakika";
				
			}else{
				return "Beraberlik süremiz <b> : $minute</b> dakika";
			}
		}

		elseif($saat <= 24){
			if($saat == 1){
				return "Beraberlik süremiz <b> : $saat</b> saat";
			}else{
				return "Beraberlik süremiz <b> : $saat</b> saat";
			}
		}

		elseif($gun <= 7){
			if($gun == 1){

			}else{
				return "Beraberlik süremiz <b> : $gun</b> gün";
			}
		}
		elseif($hafta <= 4.3){
			if($hafta==1){
				return "Beraberlik süremiz <b> : $hafta</b> hafta ";
			}else{
				return "Beraberlik süremiz <b> : $hafta</b> hafta ";
			}
		}
		elseif($ay <= 12){
			if($ay==1){
				return "Beraberlik süremiz <b> : $ay</b> ay ";
			}else{
				return "Beraberlik süremiz <b> : $ay</b> ay ";
			}
		}
		else{

			if($yil==1){
				return "Beraberlik süremiz <b> : $yil</b> yil ";
			}else{
				return "Beraberlik süremiz <b> : $yil</b> yil ";
			}
		}

	}





function alert_time($tarih){
		date_default_timezone_set('Europe/Istanbul');
		$time_ego = strtotime($tarih);
		$current_time = time();
		$time_dif = $current_time - $time_ego;
		
		$seconds = $time_dif;

		$minute = round($seconds /60);
		$saat = round($seconds /3600);
		$gun = round($seconds /86400);
		$hafta = round($seconds /604800);
		$ay = round($seconds /2629440);
		$yil = round($seconds /31553280);

		if($seconds <= 60)
		{
			return "Şuan";
		}

		elseif($minute <= 60)
		{
			if($minute == 1)
			{
				return "<b> $minute</b> dakika önce";
				
			}else{
				return "<b>  $minute</b> dakika önce";
			}
		}

		elseif($saat <= 24){
			if($saat == 1){
				return "<b>  $saat</b> saat önce";
			}else{
				return "<b>  $saat</b> saat önce";
			}
		}

		elseif($gun <= 7){
			if($gun == 1){

			}else{
				return "<b>  $gun</b> gün önce";
			}
		}
		elseif($hafta <= 4.3){
			if($hafta==1){
				return "<b>  $hafta</b> hafta önce ";
			}else{
				return "<b>  $hafta</b> hafta önce ";
			}
		}
		elseif($ay <= 12){
			if($ay==1){
				return "<b> $ay</b> ay önce";
			}else{
				return "<b>  $ay</b> ay önce";
			}
		}
		else{

			if($yil==1){
				return "<b>  $yil</b> yil önce";
			}else{
				return "<b>  $yil</b> yil önce";
			}
		}

	}




	function blogtime($tarih){
		date_default_timezone_set('Europe/Istanbul');
		$time_ego = strtotime($tarih);
		$current_time = time();
		$time_dif = $current_time - $time_ego;
		
		$seconds = $time_dif;

		$minute = round($seconds /60);
		$saat = round($seconds /3600);
		$gun = round($seconds /86400);
		$hafta = round($seconds /604800);
		$ay = round($seconds /2629440);
		$yil = round($seconds /31553280);

		if($seconds <= 60)
		{
			return "Şuan";
		}

		elseif($minute <= 60)
		{
			if($minute == 1)
			{
				return "<b>$minute</b> dakika";
				
			}else{
				return "<b>$minute</b> dakika";
			}
		}

		elseif($saat <= 24){
			if($saat == 1){
				return " <b>$saat</b> saat";
			}else{
				return " <b>$saat</b> saat";
			}
		}

		elseif($gun <= 7){
			if($gun == 1){

			}else{
				return " <b> $gun</b> gün";
			}
		}
		elseif($hafta <= 4.3){
			if($hafta==1){
				return "<b> $hafta</b> hafta ";
			}else{
				return " <b> $hafta</b> hafta ";
			}
		}
		elseif($ay <= 12){
			if($ay==1){
				return " <b> $ay</b> ay ";
			}else{
				return " <b> $ay</b> ay ";
			}
		}
		else{

			if($yil==1){
				return " <b>$yil</b> yil ";
			}else{
				return " <b> $yil</b> yil ";
			}
		}

	}


?>