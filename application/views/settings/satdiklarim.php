<?php $this->load->view('include/header')?>

<?php
	foreach ($uyelist as $row) {
		
	}
?>


<div class="container">
	<div class="content" style="margin-top:15px;">
		<div class="row">
			<?php $this->load->view('settings/leftBar')?>

			<div class="col-lg-9 col-12 adress-list">
				<div class="alert alert-danger alert-dismissible fade show margin-bottom-1x">
					<center>
						<i data-feather="alert-triangle"></i>
					<b>ÖNEMLİ UYARI !</b> Hesap transferinin güvenle gerçekleştrilebilmesi için size telefon
					yoluyla ulaşacağız. Hesap transferiniz için moderatör atandıktan sonra moderatör iletişim
					bilgilerini görebileceksiniz.
					</center>
				</div>

				<div class="card margin-bottom-1x">
				
				<div class="card-header" style="background:var(--bs-primary);color:#fff"><b><i data-feather="activity" class=""></i> İşlemi devam edenler</b></div>
				<div class="card-body">
				<div class="alert alert-danger alert-dismissible fade show margin-bottom-1x" style="display:none">
					<center>
						<span></span>
					</center>
				</div>
				<form action="<?php echo base_url('settings/add_address')?>" method="post" id="updateayadd-form">
					<div id="updateayadd-result"></div>
					<div class="row">
						<div class="col-sm-12">
							<table class="table table-striped" id="listElantable">
								<thead class="table-dark">
									<tr>
										<th>Alici&Ilan</th>
										<th>Moderator</th>
									</tr>
								</thead>
								<tbody>
									<?php
									$query = $this->db->where('userid',$row->user_id)->get('odeme_bildirim')->result();

										foreach ($query as $order) {
											$encode = $order->form;
											$decode = json_decode($encode);

											if($order->userid==$row->user_id){
												$kullaniciAdi = $row->kullanici_adi;
												$phone = $row->phone;
											}


											foreach ($ilanlar as $ilanrow){
												if($ilanrow->token==$decode->orderToken){
													$num=$ilanrow->abone_sayi;

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
											if($ilanrow->ilan_altcategory==$altcat->value){
												$url = mb_strtolower($altcat->ish_name);
											}
										}
										$find = array('I','ı');
										$replace = array('i','i');
										$url = strtolower(str_replace($find, $replace, $url));
										$param = str_replace(" ", "-", $url);

											foreach ($altcategory as $altcat) {
												if($ilanrow->ilan_anacategory==$altcat->plt_id){
													if($ilanrow->ilan_altcategory==$altcat->value){
														$baslik = $altcat->ilan_basligi;
														$eski = "-";
														$yeni = $x_display;
														

														if($ilanrow->ilan_basligi==Null){
															$ilanbasligi = str_replace($eski, $yeni, $baslik);
														}else{
															$ilanbasligi = $ilanrow->ilan_basligi;
														}
													}
												}
											}
												}
											}


											if($order->onay_durum==0){

												echo '<tr>
														<td>
															<span>Alici: '.$kullaniciAdi.'</span>
															<br><br>
															<span><a target="_blank" href="'.base_url('category/').$url.'/'.$param.'/'.$decode->orderToken.'"><h5>'.$ilanbasligi.'</h5></a></span>
														</td>';
													if($order->aktif_moderator==0){

														echo'<td width="170" style="text-align:center">
															<span style="color:red">Beklemede</span>
														</td>
													</tr>';

													}else{

														echo'<td width="170" style="text-align:center">
															<span>Haktan Gurbilek</span>
															<br><br>
															<a style="font-size:unset" href="#" type="button" id="numara" data-tooltip="'.$phone.'" title="Tooltip on top" class="btn btn-outline-primary">
																<i style="width:15px;z-index:-1" data-feather="phone"></i>
															</a>
															<a style="font-size:unset" href="#" class="btn btn-outline-success">
																<i class="fab fa-whatsapp"></i>
															</a>
															<a style="font-size:unset" href="#" class="btn btn-outline-warning">
																<i style="width:15px;" data-feather="mail"></i>
															</a>
														</td>
													</tr>';

													}

													

											}else{

												
												
											}
										}
									?>
									
								</tbody>
							</table>
						</div>
					</div>
				</form>
				</div>
				</div>

				<div class="card margin-bottom-1x">
					<div class="card-header" style="background:var(--bs-success);color:#fff"><b><i data-feather="check-circle" class=""></i> İşlemi Tamamlanalar</b></div>
					<div class="card-body">
						<table class="table table-striped" id="listElantable">
							<tbody style="vertical-align:unset">
								<?php
								$query = $this->db->where('userid',$row->user_id)->get('odeme_bildirim')->result();
									foreach ($query as $order) {
										$encode = $order->form;
										$decode = json_decode($encode);

										if($order->userid==$row->user_id){
											$kullaniciAdi = $row->kullanici_adi;
											$phone = $row->phone;
										}


										if($order->onay_durum==1){

											echo '<tr>
													<td>
														<span>'.$decode->orderToken.'</span>
													</td>
													<td>
														<span><h5>Satilik 345K Instagram hesabi</h5></span>
													</td>
													<td width="100" style="text-align:center">
														<a style="font-size:unset" href="#" type="button" class="btn btn-outline-danger">
															<i style="width:15px;z-index:-1" data-feather="x"></i>
														</a>
													</td>
												</tr>';

										}else{

											
											
										}
									}
								?>
								
							</tbody>
						</table>
					</div>

				</div>
				<!-- END ROW -->
				
			</div>
		</div>
	</div>
</div>






<?php $this->load->view('include/footer')?>