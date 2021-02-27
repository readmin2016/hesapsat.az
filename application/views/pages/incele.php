<?php $this->load->view('include/header')?>

<?php
$kullaniciadi = get_cookie('username');
$uyelist = $this->db->query("SELECT * FROM account WHERE kullanici_adi='$kullaniciadi'")->result();
foreach ($uyelist as $uye) {
	
}
foreach ($ilanDetal as $row) {
	

	foreach ($kullanicilar as $user) {
		if($user->user_id==$row->userid){
			$userid = $row->userid;
			$username = $user->kullanici_adi;
			$tarih=$user->data_account;
		}
	}

	$result = $this->process_model->user_ilan_control($userid);


	foreach ($anacategory as $cat) {
		if($row->ilan_anacategory==$cat->plt_id){

			$images = '<img src="'.base_url('assets/images/'.$cat->plt_icon).'" alt="instagram" style="width:32px; height:32px;margin-top:-5px;">';
		}
				
	}

	foreach ($anacategory as $anaCat) {
		if($row->ilan_anacategory==$anaCat->plt_id){
			$category_name = $anaCat->plt_name;
			$urlLink = $anaCat->plt_url.$row->hesap_kullanici_adi;
		}
	}
	foreach ($altcategory as $altCat) {
		if($row->ilan_altcategory==$altCat->value){
			$altcategory_name = $altCat->ish_name;

		}
		
	}

	foreach ($hesabicerik as $h_icerik) {
		if($row->hesap_icerik==$h_icerik->icerik_id){
			$hesapicerik = $h_icerik->icerik_name;
		}
	}

	foreach ($gorseller as $gorsel) {
		if($row->token==$gorsel->token){
			$img = $gorsel->resim;
		}
	}


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

	if($row->hesap_durum==0){
		$hesapDurum = 'Hayır';
	}else{
		$hesapDurum = 'Evet';
	}

	if($row->mavi_tik==0){
		$mavitik = 'Hayır';
	}else{
		$mavitik = 'Evet';
	}

	if($row->hesap_enge==0){
		$hesapEngel = 'Yok';
	}else{
		$hesapEngel = 'Var';
	}

	foreach ($altcategory as $altcat) {
		if($row->ilan_anacategory==$altcat->plt_id){
			if($row->ilan_altcategory==$altcat->value){
				$baslik = $altcat->ilan_basligi;
				$eski = "-";
				$yeni = $x_display;
				$ilanbasligi = str_replace($eski, $yeni, $baslik);
			}
		}
	}

	

	
}

?>


<div class="showSuccess" style="transform: translateY(-300%);transition: .2s;">
	<div class="alert alert-success" id="alertText" style="width:max-content">
		<i data-feather="check-circle" style="width:17px;margin-top:-4px"></i>
		<b>Başarılı</b>
		<span> ilan favori listenize başarıyla eklenmiştir</span>
	</div>
</div>
<div class="se-pre-con" id="se-pre-con"></div>

<div class="offcanvas-wrapper">
	<div class="col-12 bg-faded" style="padding:5px 0px 5px 0px">
		<div class="col-lg-10 offset-lg-1">
			<span class="text-muted align-middle fntw500 fltleft">
				<ol itemscope="" itemtype="http://schema.org/BreadcrumbList" style="list-style: none; padding:0px; margin:0px;">
				<li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem" style="display: inline;">
				<a itemprop="item" href="ilanlar">
				<span itemprop="name">İlanlar</span></a>
				<meta itemprop="position" content="1">
				</li>
				&gt;
				<li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem" style="display: inline;">
				<a itemprop="item" href="instagram">
				<span itemprop="name"><?=$category_name?></span></a>
				<meta itemprop="position" content="2">
				</li>
				&gt;
				<li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem" style="display: inline;">
				<a itemprop="item" href="instagram/satilik-hesap">
				<span itemprop="name"><?=$altcategory_name?></span></a>
				<meta itemprop="position" content="3">
				</li>
				&gt;
				<li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem" style="display: inline;">
				<a itemprop="item" href="instagram/satilik-hesap/satilik-71k-takipcili-instagram-hesabi-17761">
				<span itemprop="name">
					<?php
						if($row->ilan_basligi==Null){
							echo $ilanbasligi;
						}else{
							echo $row->ilan_basligi;
						}
					?>
				</span></a>
				<meta itemprop="position" content="4">
				</li>
				</ol>
			</span>
			<span class="text-muted text-sm fntw500 fltright" style="margin-top:3px;"><span data-toggle="tooltip" data-placement="bottom" title="" data-original-title="İlanın görüntülenme sayısı"><i style="width:13px;margin-top:-4px;" data-feather="eye"></i> <?=$row->bakis_sayi?></span> &nbsp;&nbsp;|&nbsp;&nbsp; <span data-toggle="tooltip" data-placement="bottom" title="" data-original-title="İlanı takip eden kişi sayısı"><i style="width:13px;color:#E91E63;margin-top:-4px" data-feather="heart"></i> 0</span></span>
		</div>
	</div>
	</div>
</div>

<!-- ELAN DETAIL LIST -->
<div class="container">
	<div class="row">
		<div class="col-md-9 col-12">
			<div class="h1" style="margin-bottom:20px;">
				<!-- <img src="https://hesapsat.net/img/instagram.png" data-toggle="tooltip" title="" alt="Instagram" data-original-title="Instagram" style="margin-top:-5px;"> -->
				<?=$images?>
				<?php
					if($row->ilan_altcategory==106){
						echo $row->ilan_basligi;
					}else{
						echo $ilanbasligi;
					}
				?>
				<br>
				<br>
			</div>

			<?php
				if($row->ilan_altcategory==106){ ?>

					<!-- ISECRIK -->

			<?php	}else{ ?>

			<div class="card">
   				<div class="card-body bg-faded" style="padding-bottom:10px;">
   					<div class="row">
   						<div class="col-sm-6">
   							<div class="row" style="margin:0px;">
						           <div style="width:130px; margin-bottom:10px;"><i data-feather="at-sign" style="width:15px;margin-top:-3px;"></i> Hesap adı</div>
						           <div style="margin-bottom:10px;">
						            : <span class="text-bold">
						                <a rel="nofollow" href="<?=$urlLink?>" target="_blank"><?=$row->hesap_kullanici_adi?></a>
						             </span>
						       </div>
						   </div>
   						</div>

   						<div class="col-sm-6">
   							<div class="row" style="margin:0px;">
						           <div style="width:130px; margin-bottom:10px;"><i data-feather="users" style="width:15px;margin-top:-3px;"></i> Takipçi</div>
						           <div style="margin-bottom:10px;">
						            : <span class="text-bold">
						                <?=$row->abone_sayi?> (<?=$x_display?>)
						             </span>
						       </div>
						   </div>
   						</div>

   						<div class="col-sm-6">
   							<div class="row" style="margin:0px;">
						           <div style="width:130px; margin-bottom:10px;"><i data-feather="list" style="width:15px;margin-top:-3px;"></i>  Kategori</div>
						           <div style="margin-bottom:10px;">
						            : <span class="text-bold">
						                <?=$hesapicerik?>
						             </span>
						       </div>
						   </div>
   						</div>

   						<div class="col-sm-6">
   							<div class="row" style="margin:0px;">
						           <div style="width:130px; margin-bottom:10px;"><i data-feather="send" style="width:15px;margin-top:-3px;"></i>  Gönderi</div>
						           <div style="margin-bottom:10px;">
						            : <span class="text-bold">
						                <?=$row->gonderi_sayi?>
						             </span>
						       </div>
						   </div>
   						</div>

   						<div class="col-sm-6">
   							<div class="row" style="margin:0px;">
						           <div style="width:130px; margin-bottom:10px;"><i data-feather="home" style="width:15px;margin-top:-3px;"></i>  İşletme mi?</div>
						           <div style="margin-bottom:10px;">
						            : <span class="text-bold">
						                <?=$hesapDurum?>
						             </span>
						       </div>
						   </div>
   						</div>

   						<div class="col-sm-6">
   							<div class="row" style="margin:0px;">
						           <div style="width:130px; margin-bottom:10px;"><i data-feather="check-circle" style="width:15px;margin-top:-3px;"></i>  Mavi tikli mi?</div>
						           <div style="margin-bottom:10px;">
						            : <span class="text-bold">
						                <?=$mavitik?>
						             </span>
						       </div>
						   </div>
   						</div>

   						<div class="col-sm-6">
   							<div class="row" style="margin:0px;">
						           <div style="width:130px; margin-bottom:10px;"><i data-feather="calendar" style="width:15px;margin-top:-3px;"></i> Açılış yılı</div>
						           <div style="margin-bottom:10px;">
						            : <span class="text-bold">
						                <?=$row->hesap_acilis_yil?>
						             </span>
						       </div>
						   </div>
   						</div>

   						<div class="col-sm-6">
   							<div class="row" style="margin:0px;">
						           <div style="width:130px; margin-bottom:10px;"><i data-feather="alert-circle" style="width:15px;margin-top:-3px;"></i>  Engel var mı?</div>
						           <div style="margin-bottom:10px;">
						            : <span class="text-bold">
						                <?=$hesapEngel?>
						             </span>
						       </div>
						   </div>
   						</div>

   						<div class="col-sm-6">
   							<div class="row" style="margin:0px;">
						           <div style="width:130px; margin-bottom:10px;"><i data-feather="mail" style="width:15px;margin-top:-3px;"></i>  İlk mail</div>
						           <div style="margin-bottom:10px;">
						            : 
						            <?php
						            	if($row->ilk_mail==1){
						            		echo '<span class="text-bold" style="color:#43d9a3 !important">
						            	<i data-feather="check-circle" style="width:15px;margin-top:-3px;"></i>
						                Var
						             </span>';
						            	}else{
						            		echo '<span class="text-bold" style="color:#d95f43 !important">
						            	<i data-feather="x" style="width:15px;margin-top:-3px;"></i>
						                Yok
						             </span>';
						            	}
						            ?>
						            
						       </div>
						   </div>
   						</div>

   						<div class="col-sm-6">
   							<div class="row" style="margin:0px;">
						           <div style="width:130px; margin-bottom:10px;"><i data-feather="mail" style="width:15px;margin-top:-3px;"></i> Revert maili</div>
						           <div style="margin-bottom:10px;">
						            : 
						            <?php
						            	if($row->revert_mail==1){
						            		echo '<span class="text-bold" style="color:#43d9a3 !important">
						            	<i data-feather="check-circle" style="width:15px;margin-top:-3px;"></i>
						                Var
						             </span>';
						            	}else{
						            		echo '<span class="text-bold" style="color:#d95f43 !important">
						            	<i data-feather="x" style="width:15px;margin-top:-3px;"></i>
						                Yok
						             </span>';
						            	}
						            ?>
						       </div>
						   </div>
   						</div>

   						<div class="col-sm-6">
   							<div class="row" style="margin:0px;">
							<a data-bs-toggle="modal" data-bs-target="#ilkmail" style="cursor:pointer;color:#0da9ef"><i data-feather="alert-circle" style="width:15px;margin-top:-4px;"></i> İlk mail ve revert maili nedir?</a>
							</div>
   						</div>


   					</div>	
	   			</div>
			</div>

			<div class="row" style="margin-top:24px;">
				<div class="col-sm-6">
					<label class="text-sm"><i data-feather="user-check" style="width:13px;margin-top:-4px"></i> Bot olmayan takipçi yüzdesi</label>
					<div class="progress margin-bottom-1x">
						<?php
							if($row->org_takipci < 20){
								$bg_color = 'bg-danger';
							}elseif($row->org_takipci < 50){
								$bg_color = 'bg-warning';
							}else{
								$bg_color = 'bg-success';
							}
						?>
					<div class="progress-bar progress-bar-striped <?=$bg_color?>" role="progressbar" style="width: <?=$row->org_takipci?>; min-width:80px;" aria-valuenow="<?=$row->org_takipci?>" aria-valuemin="0" aria-valuemax="100"><span class="text-bold text-shadow"><?=$row->org_takipci?> - <?=$x_display?></span></div>
					</div>
				</div>

				<div class="col-sm-6">
					<label class="text-sm"><i data-feather="activity" style="width:13px;margin-top:-4px"></i> Hesap aktifliği</label>
					<div class="progress margin-bottom-1x">
					<div class="progress-bar progress-bar-striped bg-danger" role="progressbar" style="width: 17%; min-width:100px;" aria-valuenow="17" aria-valuemin="0" aria-valuemax="100">
						<span class="text-shadow text-bold">Düşük aktiflik!</span></div>
					</div>
				</div>

				<div class="col-sm-6">
					<label class="text-sm"><i data-feather="pie-chart" style="width:13px;margin-top:-4px"></i> Türk takipçi yüzdesi</label>
					<div class="progress margin-bottom-1x">
						<?php
							if($row->turk_takipci < 20){
								$bg_color = 'bg-danger';
							}elseif($row->turk_takipci < 50){
								$bg_color = 'bg-warning';
							}else{
								$bg_color = 'bg-success';
							}
						?>
					<div class="progress-bar progress-bar-striped <?=$bg_color?>" role="progressbar" style="width: <?=$row->turk_takipci?>; min-width:80px;" aria-valuenow="<?=$row->turk_takipci?>" aria-valuemin="0" aria-valuemax="100">
						<span class="text-bold text-shadow"><?=$row->turk_takipci?> - <?=$x_display?></span></div>
					</div>
				</div>

				<div class="col-sm-6">
					<label class="text-sm"><i data-feather="users" style="width:13px;margin-top:-4px"></i> Kadın takipçi yüzdesi</label>
					<div class="progress margin-bottom-1x">
						<?php
							if($row->kadin_takipci < 20){
								$bg_color = 'bg-danger';
							}elseif($row->kadin_takipci < 50){
								$bg_color = 'bg-warning';
							}else{
								$bg_color = 'bg-success';
							}
						?>
					<div class="progress-bar progress-bar-striped <?=$bg_color?>" role="progressbar" style="width: <?=$row->kadin_takipci?>; min-width:80px;" aria-valuenow="<?=$row->kadin_takipci?>" aria-valuemin="0" aria-valuemax="100"><span class="text-bold text-shadow"><?=$row->kadin_takipci?> - <?=$x_display?></span></div>
					</div>
				</div>

				<div class="col-12">
				<i class="text-muted"><i data-feather="info" style="width:18px;margin-top:-4px;"></i> İlanda verilen bilgiler, ilan sahipleri tarafından girilmiş bilgilerdir. Transfer sırasında bu verileri kontrol edebilirsiniz. <b>Bot olmayan takipçi; aktif takipçi demek değildir!</b> Gönderisi olmayan veya gizli hesaplarda aktiflik tespit edilememektedir. </i>
				</div>

			</div>

		<?php	
			}
		?>


<!-- TABMENU -->
			<ul class="nav nav-tabs" id="myTab" role="tablist" style="margin-top:24px;">
			  <li class="nav-item" role="presentation">
			    <a class="nav-link active" id="home-tab" data-bs-toggle="tab" href="#detal" role="tab" aria-controls="home" aria-selected="true">
			    	<i data-feather="file-text" style="width:17px;margin-top:-4px;"></i>
			    	Detay
				</a>
			  </li>
			  <?php
			  	$token=$row->token;
			  	$resultImg = $this->process_model->resim_control($token);
			  	if($resultImg==1){
			  		echo '<li class="nav-item" role="presentation">
					    <a class="nav-link" id="profile-tab" data-bs-toggle="tab" href="#gorsel" role="tab" aria-controls="profile" aria-selected="false">
					    	<i data-feather="film" style="width:17px;margin-top: -4px;"></i>
					    	Görsel
					    </a>
					  </li>';
			  	}else{}
			  ?>
			  
			  <?php
			  	if($result > 1){
			  		echo '<li class="nav-item" role="presentation">
			    <a class="nav-link" id="profile-tab" data-bs-toggle="tab" href="#ilanlarim" role="tab" aria-controls="profile" aria-selected="false">
			    	<i data-feather="award" style="width:17px;margin-top: -4px;"></i>
			    	Diger ilanlar
			    </a>
			  </li>';
			  	}else{

			  	}
			  ?>
			</ul>

			<div style="padding:10px;" class="tab-content" id="myTabContent">
			  <div class="tab-pane fade show active" id="detal" role="tabpanel" aria-labelledby="home-tab">
			  	<?=$row->detay_bilgi?>
			  </div>
			  <div style="padding:10px;" class="tab-pane fade" id="gorsel" role="tabpanel" aria-labelledby="profile-tab">
			  	<img src="<?=base_url('uploads/'.$img)?>" alt="" width="80">
			  </div>


			  <div style="padding:10px;" class="tab-pane fade" id="ilanlarim" role="tabpanel" aria-labelledby="profile-tab">
			  	
			  	<div class="row">
			  		<?php
			  			$myOrders = $this->db->where(array('userid'=>$userid))->get('ilanlar')->result();
			  			foreach ($myOrders as $ilan) {
			  				foreach ($anacategory as $anaCat) {
								if($ilan->ilan_anacategory==$anaCat->plt_id){
									$category_name = $anaCat->plt_name;
								}
							}

							$num=$ilan->abone_sayi;

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
								if($ilan->ilan_anacategory==$altcat->plt_id){
									if($ilan->ilan_altcategory==$altcat->value){
										$baslik = $altcat->ilan_basligi;
										$eski = "-";
										$yeni = $x_display;
										$ilan_basligi = str_replace($eski, $yeni, $baslik);
									}
								}
							}


					
			  				
			  				if($ilan->activation > 0){
			  					echo '<div class="col-md-3 col-12" style="text-align: left;">
								  		<div class="product-card mb-30" style="padding:0px;">
										<div style="font-size:15px;padding:2px 10px; border-radius:0px 8px 8px 0px; background-color:#F1592A; margin-top:7px; display: inline-block">
										  <span class="text-bold text-shadow" style="color:#fafafa">'.$ilan->satis_fiyat.'TL</span>
										</div>
										<div class="text-center" style="height:65px; overflow:hidden; margin-top:5px; margin-bottom:5px; padding:5px;">
										  <span class="product-title h3">';

										  if($ilan->ilan_altcategory==106){
												echo $ilan->ilan_basligi;
											}else{
												echo $ilan_basligi;
											}

										  echo '</span>
										</div>
										<div class="product-buttons">
										  <a href="instagram/satilik-kullanici-adi/satilik-instagram-kullanici-adi-cringeturkiiye-17458" id="btn-sm">İncele</a>
										</div>
										<hr style="margin:0;padding:0;">
										<div class="text-white text-sm text-center" style="padding:5px; background-color:#606975; border-radius:0px 0px 5px 5px"><i class="icon-instagram marek3"></i> '.$category_name.' </div>
										</div>
								  	</div>';
			  				}

			  			}
			  			
			  		?>
			  	</div>


			  </div>


			</div>

			<!-- BLOG -->
			<div class="row" style="margin-top:50px;">
				<?php
					foreach ($blog as $b_row) {
						echo '<div class="col-md-4 col-12">
								<div class="card">
									<img src="'.base_url('blogupload/'.$b_row->bg_image).'" alt="" style="height:165px;object-fit:cover">
									<div class="card-body textCenter">
										<div class="h5 card-title"><a href="instagram-hesabi-almadan-once-dikkat-etmeniz-ve-mutlaka-okumaniz-gereken-bilgiler/BID10/" target="_blank">'.$b_row->bg_title.'</a>
										</div>
										<hr>
										<br>
										<p class="card-text">
										<i style="width:17px;margin-top:-3px;" data-feather="eye" class="eye"></i> '.$b_row->bakis.' &nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp; 
										<i style="width:17px;margin-top:-3px;" data-feather="message-square" class="message-square"></i> 9</p>
									</div>
								</div>
							</div>';
					}
				?>
				
			<!-- BLOG -->
				<div class="col-md-8 col-12">
					<div class="alert alert-primary alert-dismissible fade show margin-bottom-1x"><span class="alert-close" data-dismiss="alert"></span>
					<span class="h5"><i data-feather="alert-triangle" style="width:25px"></i> Lütfen güvenli alışveriş için yukarıda bulunan <span class="text-bold">SATIN AL</span> butonuna tıklayarak hesabı satın alınız.</span> Hesabı, hesapsat.net aracılığı ile satın almanız durumunda; yatırdığınız ücret; siz hesabı devralana kadar hesapsat.net tarafından güvenle korunur.
					</div>

					<div class="product-card product-list margin-bottom-1x">
					<div class="product-info text-left">
					<span class="h3">Ilansat.net aracılık hizmeti nasıl işliyor?</span>
					<div>İddalıyız! Her ayrıntıyı sizin için ince eleyip sık dokuyoruz. Piyasadaki güvenilir tek hesap transfer aracılık hizmetini sizlere sunmak için canla başla çalışıyoruz. Sizin için neler yaptığımıza göz gezdirmek ister misiniz?</div>
					<div class="text-right" style="margin-top:8px;"><a href="#" data-bs-toggle="modal" data-bs-target="#aracilik">Aracılık hizmeti nasıl işliyor &gt;</a></div>
					</div>
					</div>

				</div>


			</div>

			<!-- YORUM -->

			<!-- <div class="card margin-bottom-1x">
			<div class="card-header"><span class="h4" id="yorumgir"><i style="width: 20px;" data-feather="message-square"></i> Yorum, görüş veya soru girin</span></div>
			<div class="card-body" style="padding-bottom:0px;">
			<div class="comment">
			<div class="comment-author-ava">
			<img class="d-block w-110 mx-auto img-thumbnail rounded-circle" src="https://hesapsat.net/img/default.png" alt="raliyev">
			</div>

			<form action="<?=base_url('home/add_comment')?>" name="form" method="post" id="yorgon-form">
				<div class="comment-body" style="padding:0px;">
				<div class="comment-header" style="padding:10px 20px 0px 20px;">
				<div class="h4 comment-title">raliyev <span class="comment-meta fltright">Hemen şimdi</span></div>
				</div>
				<div class="comment-text">
				<div id="yorgon-result"></div>
				<div class="row">
				<div class="col-12">
				<div class="form-group">
				<textarea name="message" style="border:0px;" class="form-control form-control-rounded" rows="1" placeholder="Yorum, görüş veya sorunuzu giriniz."></textarea>
				</div>
				</div>
				</div>
					<input type="hidden" name="token" value="688773fd3a554b96b573b28fdfb88c17">
					<input type="hidden" name="ilanid" value="<?=$row->ilan_id?>">
					<input type="hidden" name="userid" value="<?=$uye->user_id?>">
					<input type="hidden" name="username" value="<?=get_cookie('username')?>">
				</div>
				<div class="comment-footer" style="margin-top:-30px;">
				<div class="column">
				<button id="yorgon-button" class="btn btn-link btn-rounded" type="submit"><i data-feather="mail"></i> Gönder</button>
				</div>
				</div>
				</div>
			</form>

			</div>
			</div>
			</div> -->



	</div>



		<!-- LEFTBAR -->

		<div class="col-md-3 col-12">
			<button onclick="location.href='<?=base_url('payment/'.$row->satis_fiyat.'/'.$row->token.'/'.$row->userid)?>'" class="btn btn-lg btn-rounded btn-success" style="width:100%;margin-bottom:15px; margin-top:-8px;"><span class="text-lg marek3">Satın Al</span> <span class="text-bold" style="font-size:23px;">[ <?=$row->satis_fiyat?> TL ]</span> </button>


			<div class="card">
			<div class="card-body" style="padding-left:0px; padding-right:0px;">
			<div class="d-block mx-auto" style="border-radius:50%; width:160px; height:160px; padding:10px; background-color:#F8FBFE">
			<div class="d-block mx-auto" style="border-radius:50%; width:140px; height:140px; padding:10px; background-color:#EFF5FD">
			<div class="d-block mx-auto" style="border-radius:50%; width:120px; height:120px; padding:10px; background-color:#E3EFFC">
			<img class="d-block w-150 mx-auto rounded-circle" src="https://hesapsat.net/img/default.png" alt="ismail12">
			</div>
			</div>
			</div>
			<div class="h5 text-center"><span class="text-bold"><?=$username?> <span class="text-muted text-sm"></span></span></div>
			<div style="margin-bottom:10px;" class="text-center">
			<div style="display:inline-block; margin:0 auto;">
			<div style="background: url('img/puanbg1.png') no-repeat; width:120px; height:20px; float:left; margin-top:5px; ">
			<div style="background: url('img/puanbg2.png') no-repeat; width:0px; height:20px; min-width:0px; max-width:120px; float:left;"></div>
			</div>
			<br>
			<div style="margin-top:15px;">
			<span><span class="text-bold text-lg">0</span> <span class="text-sm">Puan</span> <span class="text-muted text-sm">(<span class="text-bold">0</span> işlem)</span></span>
			</div>
			</div>
			</div>
			<div class="col-12">
			<div class="row">
			<div class="col-12">
			<button class="btn btn-outline-primary btn-rounded" data-bs-toggle="modal" data-bs-target="#msggonder" style="width:100%;font-weight:500"><i data-feather="message-square"></i> Mesaj Gönder</button>
			</div>
			</div>
			</div>
			<hr class="margin-top-1x margin-bottom-1x">
			<div style="padding:5px 15px;">
			<div class="text-muted fltleft" style="font-size:15px;">
			<i data-feather="activity" style="width: 15px;margin-top:-4px"></i> Aktivite
			</div>
			<div class="fltright fntw500" style="font-size:15px;">
			<span class="text-bold">4</span> saat önce </div>
			</div>
			<br>
			<div style="padding:5px 15px;">
			<div class="text-muted fltleft" style="font-size:15px;">
			<i data-feather="calendar" style="width: 15px;margin-top:-4px"></i> Üyelik
			</div>
			<div class="fltright fntw500" style="font-size:15px;" >
				<?php
					$data = explode(" ", str_replace("."," ", $tarih));
				?>
			<?=$data[1]?> <span class="text-bold"><?=$data[2]?></span>
			</div>
			</div>
			<div class="clearfix"></div>
			<hr class="margin-top-1x margin-bottom-1x">
			<div class="col-12 text-muted text-sm" data-bs-toggle="modal" data-bs-target="#bildir" style="cursor:pointer"><i data-feather="alert-triangle"></i> Bu üyeyi şikayet etmek ve bize raporlamak için <span class="text-bold">lütfen tıklayın</span></div>


			</div>
			</div>
			<br>
			<div class="row">
				<div class="col-12" style="margin-bottom:8px">
					<input class="form-control form-control-rounded form-control-sm" type="text" value="<?=$_SERVER['REQUEST_URI']?>" id="myInput">
				</div>
				<div class="col-12" style="margin-bottom:8px">
					<button class="btn btn-sm btn-rounded btn-outline-info" style="margin-top:0px; width:100%" onclick="myFunction()"><i style="width:15px;margin-top:-3px;margin-right:6px;" data-feather="copy"></i> Kopyala</button>
				</div>
				<div class="col-12" style="margin-bottom:8px">
					<?php
						if(get_cookie('bookmark['.$row->ilan_id.']')){?>

							<button  onclick="removeBookmark('<?=$row->ilan_id?>')"  id="removeBook" class="btn btn-sm btn-rounded btn-outline-danger" style="margin-top:0px; width:100%;background:#dc3545;color:#fff"><i style="width:15px;margin-top:-3px;margin-right:6px;" data-feather="eye-off"></i> Favorilerden çıkart</button>
							
					<?php	}else{ ?>

						<button onclick="addBookmark('<?=$row->ilan_id?>')"  id="addBook" class="btn btn-sm btn-rounded btn-outline-danger" style="margin-top:0px; width:100%"><i style="width:15px;margin-top:-3px;margin-right:6px;" data-feather="heart"></i> Favorilerine ekle</button>
							
					<?php	}
					?>
				</div>
			</div>
			<div class="row">
				<div class="col-12">
					<div class="leftBanner">
						<iframe src="<?=base_url('banner_left/index.html')?>" frameborder="0"></iframe>
					</div>
				</div>
			</div>

		</div>


	
</div>

</div>


	<!-- ilk mail Modal -->
<div class="modal fade" id="ilkmail" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><i data-feather="mail" style="width:19px;margin-top:-3px"></i> Orijinal (ilk) email ve revert maili nedir?</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
		<p>
			<b>Orijinal (ilk) eposta</b> : instagram hesabı açılırken kullanılan ilk eposta adresidir. Instagram için bu eposta önem arz etmesine rağmen ilk eposta ile hesabın geri alınması özellikle de kod ekranında çıkmıyorsa o kadar da kolay değildir. Günümüzde ilk epostası olan hesap bulmak çok zor, bulunan hesaplar da çok pahalıdır.
		</p>
		<p>
			<b>Revert emaili</b> (kurucu mail) : Uzun süre aralıksız (min 30 gün) hesap üzerinde onaylı olarak kullanılmış eposta adresidir. Bazı methodlarla çok kısa sürede değiştirilebilmektedir. Revert mailinin hesapla birlikte alıcıya transfer edilmesi hesap güvenliği açısından önem arz etmektedir. Revert maili olmayan hesapların alınması büyük risk teşkil eder.
		</p>

      </div>
      <div class="modal-footer">
        <button id="btn" type="button" class="btn btn-secondary" data-bs-dismiss="modal">
        	<i data-feather="power" style="width:18px;margin-top:-3px;"></i> Kapat</button>
      </div>
    </div>
  </div>
</div>


	<!-- sikayet Modal -->
<div class="modal fade" id="bildir" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><i data-feather="alert-triangle" style="width:19px;margin-top:-3px"></i> Üyeyi bize bildirin!</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
		<?php
			if(get_cookie('username')){ ?>

				<form action="<?=base_url('pages/sikayet_et')?>" method="post" enctype="multipart/form-data">
					<div class="egeprimary">
						<div class="egeprimaryalt">
							Lütfen üye hakkındaki şikayetinizi aşağıdaki kutucuğa detaylı bir şekilde yazınız. Elinizde kanıtlarınız varsa dosya ekleme bölümünden bu kanıtları da yükleyiniz.
						</div>
					</div>

					<div id="result1"></div>
					<div class="row">

						<div class="col-12">
							<div class="form-group">
								<textarea name="message" class="form-control form-control-rounded" rows="5" placeholder="Üye hakkındaki şikayetinizi giriniz!"></textarea>
							</div>
						</div>

						<div class="col-12">
							<button id="sendbutton1" class="btn btn-primary btn-sm btn-rounded fltright" type="submit" style="margin-top:0px;"><i class="icon-mail"></i> Gönder</button>

							<label for="file-input1" style="float:right; margin-top:-8px;" data-toggle="tooltip" data-placement="top" title="" data-original-title="Dosya Ekle">
								<div class="btn btn-outline-secondary btn-sm btn-rounded fltright"><i style="width:15px;" data-feather="paperclip"></i></div>
							</label>
						</div>

						<input name="file" id="file-input1" style="display:none" type="file" accept="image/jpeg,image/png,image/gif">
						<input type="hidden" name="listingid" value="19216">
						<input type="hidden" name="sikayetedilen" value="<?=$uye->user_id?>">
						
					</div>

				</form>

			<?php }else{ ?>

				<div class="egedanger">
					<div class="egedangeralt">
						<span class="text-bold"><i data-feather="alert-triangle"></i> UYARI:</span> Üye hakkında bildirimde bulunmak için giriş yapmanız gerekmektedir. Lütfen giriş yaptıktan sonra tekrar deneyiniz!
					</div>
				</div>

		<?php	}
		?>
      </div>
      <div class="modal-footer">
        <button id="btn" type="button" class="btn btn-secondary" data-bs-dismiss="modal">
        	<i data-feather="power" style="width:18px;margin-top:-3px;"></i> Kapat</button>
      </div>
    </div>
  </div>
</div>


	<!-- Mesaj gonderme Modal -->
<div class="modal fade" id="msggonder" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><i data-feather="mail" style="width:19px;margin-top:-3px"></i> Satıcıya mesaj gönderin</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
		<?php
			if(get_cookie('username')){ ?>

				<form action="<?=base_url('pages/sendMsg')?>" method="post" enctype="multipart/form-data">
					<div class="egeprimary">
						<div class="egeprimaryalt">
							Hesap alışverişinin güvenli bir şekilde gerçekleştirilmesi ve dolandırıcılık olayların önüne geçilebilmesi için hesapsat.net dışında bir işlem yapmayınız!
						</div>
					</div>

					<div id="result1"></div>
					<div class="row">

						<div class="col-12">
							<div class="form-group">
								<textarea name="message" class="form-control form-control-rounded" rows="5" placeholder="Mesajınızı giriniz!"></textarea>
							</div>
						</div>

						<div class="col-12">
							<button id="sendbutton1" class="btn btn-primary btn-sm btn-rounded fltright" type="submit" style="margin-top:0px;"><i class="icon-mail"></i> Gönder</button>

							<label for="file-input1" style="float:right; margin-top:-8px;" data-toggle="tooltip" data-placement="top" title="" data-original-title="Dosya Ekle">
								<div class="btn btn-outline-secondary btn-sm btn-rounded fltright"><i style="width:15px;" data-feather="paperclip"></i></div>
							</label>
						</div>

						<input name="file" id="file-input1" style="display:none" type="file" accept="image/jpeg,image/png,image/gif">
						<input type="hidden" name="listingid" value="19216">
						<input type="hidden" name="sikayetedilen" value="<?=$uye->user_id?>">
						
					</div>

				</form>

			<?php }else{ ?>

				<div class="egedanger">
					<div class="egedangeralt">
						<span class="text-bold"><i data-feather="alert-triangle"></i> UYARI:</span> Üye hakkında bildirimde bulunmak için giriş yapmanız gerekmektedir. Lütfen giriş yaptıktan sonra tekrar deneyiniz!
					</div>
				</div>

		<?php	}
		?>
      </div>
      <div class="modal-footer">
        <button id="btn" type="button" class="btn btn-secondary" data-bs-dismiss="modal">
        	<i data-feather="power" style="width:18px;margin-top:-3px;"></i> Kapat</button>
      </div>
    </div>
  </div>
</div>



<!-- Modal -->
<div class="modal fade" id="aracilik" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><i data-feather="award" style="width:19px;margin-top:-4px;"></i> Aracılık hizmetimiz</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-light" data-bs-dismiss="modal"><i data-feather="power" style="width:17px;margin-top:-4px;"></i>  Kapat</button>
      </div>
    </div>
  </div>
</div>




<?php $this->load->view('include/footer')?>