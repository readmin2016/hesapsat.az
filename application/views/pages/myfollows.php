<?php $this->load->view('include/header')?>


<div class="container">
	<div class="content" style="margin-top:30px;">
		<div class="row">
			<div class="heightest row">
				<div class="col-lg-10 offset-lg-1">
					<div class="card margin-bottom-1x">
						<div class="card-header">
							<span class="text-lg fntw500"><i data-feather="heart" style="margin-top:-3px"></i> Takip ettiğim ilanlar</span>
						</div>
						<div class="card-body" style="padding:0px;">
							<table class="table table-hover dcb" style="margin:0px;">
								<thead>
									<tr>
										<th style="border:0px;">Durum</th>
										<th style="border:0px;">Başlık</th>
										<th style="border:0px;text-align:center">
											<span id="feather-tooltip" title="İlanın görüntülenme sayısı"><i data-feather="eye" data-toggle="tooltip" data-placement="top" ></i></span>
										</th>
										<th class="hidden-on-mobile-just" style="border:0px;text-align:center">
											<span id="feather-tooltip" title="İlanı takip eden kişi sayısı"><i data-feather="heart" data-toggle="tooltip" data-placement="top" title="" ></i></span></th>
										<th  class="hidden-on-mobile-just" style="border:0px;text-align:center">
											<span id="feather-tooltip" title="İlana verilen teklif sayısı"><i data-feather="bookmark" data-bs-toggle="tooltip" data-placement="top" title="" ></i></span></th>
										<th style="border:0px;" class="text-right">İşlem</th>
									</tr>
								</thead>

								<tbody>
									<?php
										foreach ($ilanlist as $row) {
											foreach ($uyelist as $us) {
												if($row->userid==$us->user_id){
													$user = $us->kullanici_adi;
												}
											}

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
										

										foreach ($altcategory as $altcat) {
											if($row->ilan_altcategory==$altcat->value){
												$url = mb_strtolower($altcat->ish_name);
											}
										}
										$find = array('I','ı');
										$replace = array('i','i');
										$url = strtolower(str_replace($find, $replace, $url));
										$param = str_replace(" ", "-", $url);

										foreach ($anacategory as $cat) {
					 						if($row->ilan_anacategory==$cat->plt_id){
					 							$url = strtolower($cat->plt_name);
					 						}
					 					}

										if(get_cookie('bookmark['.$row->ilan_id.']')==$row->ilan_id){
										$say = $row->ilan_id;
										$count = $this->process_model->follow_sayi($say);


										echo '<tr>
										<td style="padding-bottom:5px;">
											<span class="text-success">Yayında</span>
										</td>
										<td style="padding-bottom:5px;"><a href="'.base_url('category/').$url.'/'.$param.'/'.$row->token.'" data-toggle="tooltip" data-placement="top" title="" data-original-title="">'.$ilan_basligi.'</a></td>
										<td style="padding-bottom:5px;text-align:center">'.$row->bakis_sayi.'</td>
										<td  class="hidden-on-mobile-just" style="padding-bottom:5px;text-align:center">
											'.$count.'
										</td>

										<td class="hidden-on-mobile-just" style="padding-bottom:5px;text-align:center">1</td>

										<td style="padding-bottom:5px;" class="text-right">
											<button class="btn btn-outline-primary btn-rounded dropdown-toggle" style="margin-bottom:0px; margin-top:-2px;" type="button" data-bs-toggle="dropdown" aria-expanded="false"><i data-feather="settings"></i> <span class="hidden-sm-down">İşlem</span></button>

											<div class="dropdown-menu" x-placement="top-start" style="position: absolute; transform: translate3d(0px, 44px, 0px); top: 0px; left: 0px; will-change: transform;">

												<a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#hareket1" style="cursor:pointer;"><i data-feather="activity" style="margin-top:-3px;"></i> İlan hareketleri</a>


												<div class="dropdown-divider"></div>
												<a href="'.base_url('category/').$url.'/'.$param.'/'.$row->token.'" class="dropdown-item" style="cursor:pointer;"><i data-feather="log-in" style="margin-top:-3px;"></i> İlana Git</a>
												<div class="dropdown-divider"></div>

												<a href="'.base_url('messages/chat/'.$user).'" class="dropdown-item" style="cursor:pointer;"><i data-feather="mail" style="margin-top:-3px;"></i>Mesaj Gönder</a>
												<div class="dropdown-divider"></div>

												<a class="dropdown-item" onclick="ilanbirak('.$id.')" data-bs-toggle="modal" data-bs-target="#ilansil1" style="color:#f44336; cursor:pointer;"><i data-feather="x-circle" style="margin-top:-3px;"></i> Takibi bırak</a>
											</div>
										</td>
									</tr>';

									}


									}

									?>
									
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>



<div class="modal fade" id="ilansil1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><i data-feather="x-circle" style="width:15px;margin-top:-3px;"></i> Takibi bırak</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modalcontent">
      	
      </div>
    </div>
  </div>
</div>



<div class="modal fade" id="hareket1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><i data-feather="activity" style="width:15px;margin-top:-3px;"></i> İlan hareketleri</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      		<table class="table table-hover">
      			<thead>
      				<tr>
      					<th style="border-color: #ddd;">#</th>
      					<th style="border-color: #ddd;">Tarih</th>
      					<th style="border-color: #ddd;">İşlem</th>
      				</tr>
      			</thead>
      			<tbody>
      				<tr>
      					<td>212332</td>
      					<td>4 Gun once</td>
      					<td>lorem kjhghoijkljlkjlkjhkiugik</td>
      				</tr>
      			</tbody>
      		</table>
      </div>
      <div class="modal-footer">
      	<button class="btn btn-light myStyleLight" data-bs-dismiss="modal"><i data-feather="power" style="width:15px;margin-top:-3px;"></i> Kapat</button>
      </div>
    </div>
  </div>
</div>



<?php $this->load->view('include/footer')?>