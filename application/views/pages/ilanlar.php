<?php $this->load->view('include/header')?>
<div class="se-pre-con" id="se-pre-con"></div>


<div class="head_panel">
	<div class="offcanvas-wrapper">
		<div class="col-12 bg-faded" style="padding:5px 0px 5px 0px">
		<div class="col-lg-10 offset-lg-1">
		<span class="text-muted align-middle fntw500 fltleft">
		<ol itemscope="" itemtype="http://schema.org/BreadcrumbList" style="list-style: none; padding:0px; margin:0px;">
		<li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem" style="display: inline;">
		<a href="ilanlar">
		<span itemprop="name" style="font-size:17px;">İlanlar</span></a>
		<meta itemprop="position" content="1">
		</li>
		</ol>
		</span>
		</div>
		</div>
	</div>
</div>
<!-- MOBILE -->
<span class="open_filter">
	<i data-feather="filter"></i>
</span>
<div class="hamburger"></div>
<div class="mobileFilerBar">
    <div class="modal-content" style="border:none">
	      <div class="modal-header">
	        <h5 class="modal-title">İlan Filtrele</h5>
	        <button type="button" id="closeFilterBar" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
	      </div>
	      <div class="modal-body" >
	        <ul class="collapsible dc-collapsible">
				<li class="active">
		            <div class="collapsible-header"><i class="fa fa-search"></i> Hızlı Ara  <span class="material-icons" id="expand_more">expand_more</span></div>
		            <div class="collapsible-body filter_list">
		            	<a href=""><i class="fa fa-instagram"></i> Instagram hesap ilanlari</a>
				        <a href=""><i class="fa fa-youtube"></i> Youtube kanal ilanlari</a>
				        <a href=""><i class="fa fa-twitter"></i> Twitter hesap ilanlari</a>
				        <a href=""><i class="fa fa-facebook-f"></i> Facebook sayfa ilanlari</a>
				        <a href=""><i class="fa fa-twitter"></i> Tiktok hesap ilanlari</a>
		            </div>
		         </li>
		         <li>
		            <div class="collapsible-header">Platform Seçimi  <span class="material-icons" id="expand_more">expand_more</span></div>
		            <div class="collapsible-body">
		            	<ul id="filterRadio">
		            		<li><input name="socail_link" id="all" checked type="radio"><label for="all">Fark etmez (0)</label></li>
		            		<?php
		            		foreach ($ilanlar as $row) {
		            			$category = $row->ilan_anacategory;
		            			$count = $this->process_model->ilan_category_sayi($category);
		            		}
		            			foreach ($anacategory as $category) {
		            				echo '<li>
		            					<input name="socail_link" id="ins" type="radio">
		            					<label for="ins">'.$category->plt_name.' ('.$count.')</label>
		            				</li>';
		            			}
		            		?>
		            		
		            	</ul>
		            </div>
		         </li>
		         <li>
		            <div class="collapsible-header">İşlem tipini seçin  <span class="material-icons" id="expand_more">expand_more</span></div>
		            <div class="collapsible-body">
		            	<ul id="filterRadio">
		            		<li><input name="cat_name" id="all" checked type="radio"><label for="all">Fark etmez (0)</label></li>
		            		<li><input name="cat_name" id="01" type="radio"><label for="01">Satılık Hesap</label></li>
		            		<li><input name="cat_name" id="02" type="radio"><label for="02">Satılık Takipçi</label></li>
		            		<li><input name="cat_name" id="03" type="radio"><label for="03">Satılık Begeni</label></li>
		            		<li><input name="cat_name" id="04" type="radio"><label for="04">Satılık Yorum</label></li>
		            		<li><input name="cat_name" id="05" type="radio"><label for="05">Satılık İzleme</label></li>
		            		<li><input name="cat_name" id="06" type="radio"><label for="06">Reklam</label></li>
		            		<li><input name="cat_name" id="07" type="radio"><label for="07">Hizmet</label></li>
		            		<li><input name="cat_name" id="08" type="radio"><label for="08">Satılık Kullanıcı Adı</label></li>
		            	</ul>
		            </div>
		         </li>
		         <li>
		            <div class="collapsible-header">Anahtar Kelime  <span class="material-icons" id="expand_more">expand_more</span></div>
		            <div class="collapsible-body">
		            	<form action="">
		            		<div class="form-group">
		            			<input type="text" placeholder="Anahtar kelime" class="form-control">
		            			<button class="btn btn-search"><span class="material-icons">search</span></button>
		            		</div>
		            	</form>
		            </div>
		         </li>
		         <li>
		            <div class="collapsible-header">Fiyat Aralığı  <span class="material-icons" id="expand_more">expand_more</span></div>
		            <div class="collapsible-body">
		            	<form action="">
		            		<div class="form-group">
		            			<input type="number" value="0" max="0" style="width:45%;float:left" class="form-control">
		            			<input type="number" placeholder="Max" style="width:45%;float:right;" class="form-control">
		            			<button class="btn btn-search"><span class="material-icons">search</span></button>
		            		</div>
		            	</form>
		            </div>
		         </li>
			</ul>
	      </div>
    </div>
</div>
<!--END MOBILE -->

<form id="searchform" action="<?=base_url('ilanlar')?>" method="get">
<div class="container ilanlar">
	<div class="row">
		<div class="col-md-3" id="win_filter">
			<ul class="collapsible dc-collapsible">
				<li class="active">
		            <div class="collapsible-header"><i class="fa fa-search"></i> Hızlı Ara  <span class="material-icons" id="expand_more">expand_more</span></div>
		            <div class="collapsible-body filter_list">
		            	<a href=""><i class="icon-dcb" data-feather="instagram"></i> Instagram hesap ilanlari</a>
				        <a href=""><i class="icon-dcb" data-feather="youtube"></i> Youtube kanal ilanlari</a>
				        <a href=""><i class="icon-dcb" data-feather="twitter"></i> Twitter hesap ilanlari</a>
				        <a href=""><i class="icon-dcb" data-feather="facebook"></i> Facebook sayfa ilanlari</a>
				        <a href=""><i class="icon-dcb" data-feather="zap"></i> Tiktok hesap ilanlari</a>
		            </div>
		         </li>
		         <li>
		            <div class="collapsible-header">
		            	<?php
		            		if(isset($_GET['platform'])){
		            			$plt = $_GET['platform'];
		            			switch ($plt) {
		            				case '0':
		            					redirect(base_url('ilanlar'));
		            					break;
		            				
		            				default:
		            					echo '<i data-feather="check-circle" style="width:17px;color:#38c;margin-top:-3px"></i>';
		            					break;
		            			}

		            		}else{

		            		}
		            	?>
		            	Platform Seçimi  
		            	<span class="material-icons" id="expand_more">expand_more</span>
		            </div>
		            <div class="collapsible-body">
		            	<ul id="filterRadio">
		            		
		            		<?php
		            		foreach ($ilanlar as $row) {
		            			$all = $this->process_model->ilan_sayi();
		            		}
		            		echo '<li>
		            				<input name="platform" value="0" id="tum" checked type="radio" onchange="this.form.submit()">
		            				<label for="tum">Fark etmez ('.$all.')</label>
		            			</li>';
		            			foreach ($anacategory as $category) {
		            				$category_say = $category->plt_id;
		            				$count = $this->process_model->ilan_category_sayi($category_say);
		            				if($category->plt_id==@$_GET['platform']){
		            					echo '<li>
			            					<input name="platform" checked value="'.$category->plt_id.'" id="'.$category->plt_id.'" type="radio" onchange="this.form.submit()">
			            					<label for="'.$category->plt_id.'">'.$category->plt_name.' ('.$count.')</label>
			            				</li>';
		            				}else{
		            					echo '<li>
			            					<input name="platform" value="'.$category->plt_id.'" id="'.$category->plt_id.'" type="radio" onchange="this.form.submit()">
			            					<label for="'.$category->plt_id.'">'.$category->plt_name.' ('.$count.')</label>
			            				</li>';
		            				}
		            				
		            			}
		            		?>
		            	</ul>
		            </div>
		         </li>

		         <?php
		         	if(@$_GET['platform']){ ?>

		         		<li>
				            <div class="collapsible-header"> 
				            	<?php
			         				if(@$_GET['istip']){
			         					echo '<i data-feather="check-circle" style="width:17px;color:#38c;margin-top:-3px"></i>';
			         				}else{
			         					
			         				}
			         			?>
				            	İşlem tipini seçin  <span class="material-icons" id="expand_more">expand_more</span></div>
				            <div class="collapsible-body">
				            	<ul id="filterRadio">
				            		<?php
				            		echo '<li>
		            						<input name="istip" id="hspp" onchange="this.form.submit()" checked type="radio" value="0">
		            						<label for="hspp">Fark etmez</label>
		            					</li>';
				            			foreach ($altcategory as $alt_cat) {
				            				if($alt_cat->plt_id==@$_GET['platform']){
				            					if($alt_cat->value==@$_GET['istip']){
				            					echo '<li>
					            						<input checked name="istip" id="'.$alt_cat->ish_id.'" value="'.$alt_cat->value.'" type="radio" onchange="this.form.submit()">
					            						<label for="'.$alt_cat->ish_id.'">'.$alt_cat->ish_name.'</label>
					            					</li>';
					            				}else{
					            					echo '<li>
					            						<input name="istip" id="'.$alt_cat->ish_id.'" value="'.$alt_cat->value.'" type="radio" onchange="this.form.submit()">
					            						<label for="'.$alt_cat->ish_id.'">'.$alt_cat->ish_name.'</label>
					            					</li>';
					            				}
				            				}
				            				
				            			}
				            		?>
				            	</ul>
				            </div>
				         </li>

		         	<?php }else{

		         	}
		         ?>
		         

		         <li>
		            <div class="collapsible-header">
		            	<?php
		            		if(@$_GET['skeyword']){
								echo '<i data-feather="check-circle" style="width:17px;color:#38c;margin-top:-3px"></i>';
		            		}else{

		            		}
		            	?>
		            	Anahtar Kelime  <span class="material-icons" id="expand_more">expand_more</span></div>
		            <div class="collapsible-body">
		            	<form action="">
		            		<div class="form-group">
		            			<?php
		            				if(@$_GET['skeyword']){
		            					echo '<input type="text" name="skeyword" value="'.@$_GET['skeyword'].'" class="form-control">';
		            				}else{
		            					echo '<input type="text" name="skeyword" placeholder="Anahtar kelime" class="form-control">';
		            				}
		            			?>
		            			
		            			<button class="btn btn-search" type="submit"><span class="material-icons">search</span></button>
		            		</div>
		            	</form>
		            </div>
		         </li>
		         <li>
		            <div class="collapsible-header">Fiyat Aralığı  <span class="material-icons" id="expand_more">expand_more</span></div>
		            <div class="collapsible-body">
		            	<form action="">
		            		<div class="form-group">
		            			<input type="number" value="0" max="0" style="width:45%;float:left" class="form-control">
		            			<input type="number" placeholder="Max" style="width:45%;float:right;" class="form-control">
		            			<button class="btn btn-search"><span class="material-icons">search</span></button>
		            		</div>
		            	</form>
		            </div>
		         </li>
			</ul>
		</div>
	</form>





		<!-- LISET -->

		<div class="col-md-9">
			
			<?php

				if(@$_GET['platform']){

					$category= @$_GET['platform'];
					$alt_category= @$_GET['istip'];
				 	$result = $this->process_model->ilan_control($category,$alt_category);

				 	if($result==1){ ?>
				 		
				 		<div class="listBanner">
							<iframe src="<?php echo base_url('htmlbanner/index.html')?>" frameborder="0"></iframe>
						</div>
				 		<div class="countHeader">
							<?php
								$ilan_count = $this->db->get('ilanlar');
							?>
							<b><i data-feather="file-text"></i> Toplam <?=$ilan_count->num_rows()?> ilan</b>
							<div class="filter">
								<div class="dropdown">
								<?php
									if(@$_GET['ch']){

										echo ' <button class="btn btn-primary dropdown-toggle" type="button" id="" data-bs-toggle="dropdown" aria-expanded="false">
											<i class="checkCircle" data-feather="check-circle"></i>
											    SIRALA 
											  </button>';

									}else{

										echo ' <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
										    SIRALA 
										  </button>';

									}
								?>
								 
								  <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton" style="margin-left:-95px">
								    <li>
								    	<?php 
								  			if(@$_GET['ch']==1){
								    			echo '<a id="disabled" class="dropdown-item" onclick="">
								    					<i class="checkCircle" data-feather="check-circle"></i> En yeni ilan üstte</a>';
								  			}else{ ?>
								    			<a class="dropdown-item" onclick="location.href='<?=$_SERVER['REQUEST_URI']?>&ch=1'" href="#">En yeni ilan üstte</a></li>
								  			<?php }
								    	?>
								    </li>
								    <li>
								    	<?php 
								  			if(@$_GET['ch']==2){
								    			echo '<a id="disabled" class="dropdown-item" onclick="">
								    					<i class="checkCircle" data-feather="check-circle"></i> En güncel ilan üstte</a>';
								  			}else{ ?>
								    			<a class="dropdown-item" onclick="location.href='<?=$_SERVER['REQUEST_URI']?>&ch=2'" href="#">En güncel ilan üstte</a></li>
								  			<?php }
								    	?>
								    </li>
								    <li>
								    	<?php 
								  			if(@$_GET['ch']==3){
								    			echo '<a id="disabled" class="dropdown-item" onclick="">
								    					<i class="checkCircle" data-feather="check-circle"></i> En düşük fiyat üstte</a>';
								  			}else{ ?>
								    			<a class="dropdown-item" onclick="location.href='<?=$_SERVER['REQUEST_URI']?>&ch=3'" href="#">En düşük fiyat üstte</a></li>
								  			<?php }
								    	?>
								    </li>
								    <li>
								    	<?php 
								  			if(@$_GET['ch']==4){
								    			echo '<a id="disabled" class="dropdown-item" onclick="">
								    					<i class="checkCircle" data-feather="check-circle"></i> En yüksek fiyat üstte</a>';
								  			}else{ ?>
								    			<a class="dropdown-item" onclick="location.href='<?=$_SERVER['REQUEST_URI']?>&ch=4'" href="#">En yüksek fiyat üstte</a></li>
								  			<?php }
								    	?>
								    </li>
								    <li>
								    	<?php 
								  			if(@$_GET['ch']==5){
								    			echo '<a id="disabled" class="dropdown-item" onclick="">
								    					<i class="checkCircle" data-feather="check-circle"></i> En düşük takipçi üstte</a>';
								  			}else{ ?>
								    			<a class="dropdown-item" onclick="location.href='<?=$_SERVER['REQUEST_URI']?>&ch=5'" href="#">En düşük takipçi üstte</a></li>
								  			<?php }
								    	?>
								    </li>
								    <li>
								    	<?php 
								  			if(@$_GET['ch']==6){
								    			echo '<a id="disabled" class="dropdown-item" onclick="">
								    					<i class="checkCircle" data-feather="check-circle"></i> En yüksek takipçi üstte</a>';
								  			}else{ ?>
								    			<a class="dropdown-item" onclick="location.href='<?=$_SERVER['REQUEST_URI']?>&ch=6'" href="#">En yüksek takipçi üstte</a></li>
								  			<?php }
								    	?>
								    </li>
								  </ul>
								</div>
							</div>		
						</div>
				 		
				 	<?php }else{

				 		echo '<div class="h4"><i data-feather="alert-triangle" style="margin-top:-5px;"></i> Üzgünüz!</div>
				 		 Aradığınız kriterlerde bir ilan bulamadık.';
				 	}

				}else{ ?>

						<div class="listBanner">
							<iframe src="<?php echo base_url('htmlbanner/index.html')?>" frameborder="0"></iframe>
						</div>
				 		<div class="countHeader">
							<?php
								$ilan_count = $this->db->get('ilanlar');
							?>
							<b><i data-feather="file-text"></i> Toplam <?=$ilan_count->num_rows()?> ilan</b>
							<div class="filter">
								<div class="dropdown">
								  <?php
									if(@$_GET['ch']){

										echo ' <button class="btn btn-primary dropdown-toggle" type="button" id="" data-bs-toggle="dropdown" aria-expanded="false">
											<i class="checkCircle" data-feather="check-circle"></i>
											    SIRALA 
											  </button>';

									}else{

										echo ' <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
										    SIRALA 
										  </button>';

									}
								?>
								  <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton" style="margin-left:-95px">
								    <li>
								    	<?php 
								  			if(@$_GET['ch']==1){
								    			echo '<a id="disabled" class="dropdown-item" onclick="">
								    					<i class="checkCircle" data-feather="check-circle"></i> En yeni ilan üstte</a>';
								  			}else{ ?>
								    			<a class="dropdown-item" onclick="location.href='?ch=1'" href="#">En yeni ilan üstte</a>
								  			<?php }
								    	?>
								    </li>
								    <li>
								    	<?php 
								  			if(@$_GET['ch']==2){
								    			echo '<a id="disabled" class="dropdown-item" onclick="">
								    					<i class="checkCircle" data-feather="check-circle"></i> En güncel ilan üstte</a>';
								  			}else{ ?>
								    			<a class="dropdown-item" onclick="location.href='?ch=2'" href="#">En güncel ilan üstte</a>
								  			<?php }
								    	?>
								    </li>
								    <li>
								    	<?php 
								  			if(@$_GET['ch']==3){
								    			echo '<a id="disabled" class="dropdown-item" onclick="">
								    					<i class="checkCircle" data-feather="check-circle"></i> En düşük fiyat üstte</a>';
								  			}else{ ?>
								    			<a class="dropdown-item" onclick="location.href='?ch=3'" href="#">En düşük fiyat üstte</a>
								  			<?php }
								    	?>
								    </li>
								    <li>
								    	<?php 
								  			if(@$_GET['ch']==4){
								    			echo '<a id="disabled" class="dropdown-item" onclick="">
								    					<i class="checkCircle" data-feather="check-circle"></i> En yüksek fiyat üstte</a>';
								  			}else{ ?>
								    			<a class="dropdown-item" onclick="location.href='?ch=4'" href="#">En yüksek fiyat üstte</a>
								  			<?php }
								    	?>
								    </li>
								    <li>
								    	<?php 
								  			if(@$_GET['ch']==5){
								    			echo '<a id="disabled" class="dropdown-item" onclick="">
								    					<i class="checkCircle" data-feather="check-circle"></i> En düşük takipçi üstte</a>';
								  			}else{ ?>
								    			<a class="dropdown-item" onclick="location.href='?ch=5'" href="#">En düşük takipçi üstte</a>
								  			<?php }
								    	?>
								    </li>
								    <li>
								    	<?php 
								  			if(@$_GET['ch']==6){
								    			echo '<a id="disabled" class="dropdown-item" onclick="">
								    					<i class="checkCircle" data-feather="check-circle"></i> En yüksek takipçi üstte</a>';
								  			}else{ ?>
								    			<a class="dropdown-item" onclick="location.href='?ch=6'" href="#">En yüksek takipçi üstte</a>
								  			<?php }
								    	?>
								    </li>
								  </ul>
								</div>
							</div>		
						</div>

				<?php }



					


			?>

			<ul id="liste">

				<?php
				$color='';
					if(@$_GET['platform']){
						$ilanlar = $this->db->where(array('ilan_anacategory'=>$_GET['platform'],'ilan_altcategory'=>$_GET['istip']))->get('ilanlar')->result();
					}else{
						
					}
					foreach ($ilanlar as $row) {
						foreach ($hesabicerik as $h_icerik) {
							if($row->hesap_icerik==$h_icerik->icerik_id){
								$hespName=$h_icerik->icerik_name;
							}
						}
						foreach ($kullanicilar as $user) {
							if($row->userid==$user->user_id){
								$username=explode(' ', $user->kullanici_adi);

							}
						}
						foreach ($anacategory as $cat) {
							if($row->ilan_anacategory==$cat->plt_id){

								$images = '<img src="'.base_url('assets/images/'.$cat->plt_icon).'" alt="instagram" style="width:32px; height:32px;">';
							}
							
						}

						if($color=='#87ceeb1f'){
							$color='#fbfbfb';
						}else{
							$color='#87ceeb1f';
						}
						$num=$row->abone_sayi;

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

					foreach ($altcategory as $altcat) {
						if($row->ilan_altcategory==$altcat->value){
							$url = mb_strtolower($altcat->ish_name);
						}
					}
					$find = array('I','ı');
					$replace = array('i','i');
					$url = strtolower(str_replace($find, $replace, $url));
					$param = str_replace(" ", "-", $url);

						foreach ($altcategory as $altcat) {
							if($row->ilan_anacategory==$altcat->plt_id){
								if($row->ilan_altcategory==$altcat->value){
									$baslik = $altcat->ilan_basligi;
									$eski = "-";
									$yeni = $x_display;
									

									if($row->ilan_basligi==Null){
										$ilanbasligi = str_replace($eski, $yeni, $baslik);
									}else{
										$ilanbasligi = $row->ilan_basligi;
									}
								}
							}
						}

					foreach ($anacategory as $cat) {
					 if($row->ilan_anacategory==$cat->plt_id){

					 		if($row->activation > 0){
					 			$url = strtolower($cat->plt_name);
									echo '<li style="background:'.$color.'">
										<a href="'.base_url('category/').$url.'/'.$param.'/'.$row->token.'">
											<div class="il-list">';
												if($this->agent->is_mobile()){

												}else{
													echo '<div class="list-icon">'.$images.'</div>
												<span id="takibci">'.$x_display.'</span>';
												}
												echo'<div class="list-content">
													<h4>
													<div class="badge-pill">
														<i data-feather="chevrons-up"></i>
													</div>
													 '.$ilanbasligi.'
													</h4>

													<span>
													<i data-feather="user-check" id="ic-1"></i>
													 '.$username[0].' 
													 </span>
													 <span class="hidden-sm-down">&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;</span> 

													<span>
													<i data-feather="users" id="ic-1"></i>
													 '.$row->org_takipci . ' Organik 
													</span>
													<span class="hidden-sm-down">&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;</span>

													<span><i data-feather="globe" id="ic-1"></i>
													'.$row->turk_takipci.' Türk 
													</span>
													<span class="hidden-sm-down">&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;</span>

													<span><i data-feather="crosshair" id="ic-1"></i> '.@$hespName.'</span>
												</div>
												<div class="list-fiyat">
													<span>'.$row->satis_fiyat.'TL</span>
												</div>
											</div>
										</a>
									</li>';
					 		}

						}
							
						}
					}
				?>
			</ul>

		</div>
	</div>
</div>


<?php $this->load->view('include/footer')?>