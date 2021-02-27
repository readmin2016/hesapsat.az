<?php $this->load->view('include/header')?>
<?php
	foreach ($uyelist as $row) {
		$userid = $row->user_id;
	}
	foreach ($uyari as $uyari) {
		if($row->user_id==$uyari->user_id){
			$id = $uyari->uyari_id;
		}
	}
	$uyari_count = $this->process_model->useruyari_count($userid);
?>

<div class="container">
	<div class="content">
	
		<div class="heightest">
			<div class="row">
				<div class="col-md-3 col-6">
					<div class="card margin-bottom-1x border-danger">
						<div class="card-header text-center bg-danger text-white"><span class="text-lg fntw600">
							<i data-feather="alert-triangle"></i> Xəbərlər</span>
						</div>
						<div class="card-body text-center">
							<?php
								if($uyari_count==0){
									echo '<h3 class="fntw600" style="margin:0px;">0</h3>';
								}else{
									echo '<h3 class="fntw600" style="margin:0px;">'.$uyari_count.'</h3>
										<a href="#" onclick="viewUyari('.$id.')" id="viewAlert" data-bs-toggle="modal" data-bs-target="#viewUyari"> Görüntüle <i data-feather="chevrons-right" style="width:15px;"></i></a>';
								}
							?>
							
						</div>
					</div>
				</div>

				<div class="col-md-3 col-6">
					<div class="card margin-bottom-1x">
					<div class="card-header text-center"><span class="text-lg fntw600"><i data-feather="dollar-sign"></i> Portmanat</span>
					</div>
						<div class="card-body text-center">
							<h3 class="fntw600" style="margin:0px;">0 Azn</h3>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-6">
					<div class="card margin-bottom-1x">
						<div class="card-header text-center"><span class="text-lg fntw600"><i data-feather="shopping-cart"></i> Aldıqlarım</span></div>
						<div class="card-body text-center">
							<?php
							error_reporting(0);
								$query= $this->db->query("SELECT * FROM odeme_bildirim WHERE userid='$userid'")->result();
								foreach ($query as $order) {
									$encode = $order->form;
									$decode = json_decode($encode);
								}
								
								if($userid==$order->userid){

									$count = $this->db->where('userid',$userid)->where('onay_durum',0)->get('odeme_bildirim');
									echo '<h3 class="fntw600" style="margin:0px;">'.$count->num_rows().'</h3>';
								}else{

									echo '<h3 class="fntw600" style="margin:0px;">0</h3>';
								}
								
							?>
							
						</div>
					</div>
				</div>
				<div class="col-md-3 col-6">
					<div class="card margin-bottom-1x">
						<div class="card-header text-center"><span class="text-lg fntw600"><i data-feather="tag"></i> Satdıqlarım</span></div>
						<div class="card-body text-center">
							<?php
								$userID = $row->user_id;
								$countSatilan = $this->db->query("SELECT * FROM odeme_bildirim WHERE satan='$userID'");
								echo '<h3 class="fntw600" style="margin:0px;">'. $countSatilan->num_rows().'</h3>';

							?>
							
						</div>
					</div>
				</div>
				<!-- =======
				start col-sm-6 col-12
				======= -->

				<div class="col-sm-6 col-12">
					<div class="card mb-3">
						<div class="card-header text-lg"><b><i data-feather="award" class="icon-award marek3"></i> Qeydiyyat Tipi</b></div>
						<div class="card-body text-center">
						 <h4 class="card-title text- text-shadow" style="margin-bottom:0px;">
						 	<?php
						 		if($row->kullanici_durum==0){
						 			echo 'Standart Üye';
						 		}else{
						 			echo 'V.I.P Üye';
						 		}
						 	?>
						 </h4>
						</div>
						<div class="card-footer">
							<a href="#" data-toggle="modal" data-bs-toggle="modal" data-bs-target="#vipozellik" class="text-shadow">V.I.P Qeydiyyatda nələr var &gt;&gt;</a>
						</div>
					</div>
					<!-- Modal -->
					<div class="modal fade" id="vipozellik" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
					  <div class="modal-dialog modal-lg">
					    <div class="modal-content">
						<div class="modal-header">
						<h4 class="modal-title">V.I.P Avantajları</h4>
						<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
						</div>
						<?php
							$terms = $this->db->get('vipuye_sartlari')->result();
							$prices = $this->db->get('vip_price')->result();
							foreach ($prices as $price) {
								# code...
							}
							foreach ($terms as $term) {
								# code...
							}
						?>
						<div class="modal-body">
						<blockquote class="blockquote-reverse">
						<p><?=$term->baslik?></p>
						<cite>Ilansat.net</cite>
						</blockquote>
						<div class="table-responsive termTable">
						<!-- <table class="table table-striped"> -->
						<?=$term->term?>
						</div>
						<center>
							<form action="javascript:void(0)" method="post" id="parayatir-form">
							<input type="hidden" name="yatacak" value="<?=$price->price?>">
							<button  class="btn btn-success"><i class="icon-zap"></i> İndi V.I.P Ol <b class="h5 text-white text-shadow text-bold">[ <?=$price->price?> Azn ]</b></button>
							</form>
						</center>
						</div>
						<div class="modal-footer">
						<button data-bs-dismiss="modal" type="button" id="btn" class="btn btn-secondary btn-sm btn-rounded fltleft"><i data-feather="power" class="iconpower"></i> Bagla</button>
						</div>
						</div>
					  </div>
					</div>
				</div>
				<div class="col-sm-6 col-12">
					<div class="card mb-3">
						<div class="card-header text-lg"><b><i data-feather="calendar" class="icon-calendar marek3"></i> Qeydiyyat Tarixi</b></div>
						<div class="card-body text-center">
							<h4 class="card-title" style="margin-bottom:0px;"><?=$row->data_account?></h4>
						</div>
						<div class="card-footer">
							<i data-feather="heart" class="icon-heart marek3 text-danger"></i><?=mytime($row->data_account_en)?>
						</div>
					</div>
				</div>

				<!-- =======
				start col-sm-6
				======= -->

					<?php
						$result = $this->process_model->duyuru_control();
						if($result==1){
							echo '<div class="col-sm-6">
							<section class="bg-faded padding-top-1x padding-bottom-1x margin-bottom-1x">
								<div class="h3 text-center" style="margin-bottom:5px;">
									<i data-feather="bell" class="iconbell"></i> Bizdən <span class="text-bold">Xəbərlər</span></div><br>
								<div class="clearfix"></div>';
							foreach ($duyuru as $d_row) {
							$icerik = mb_substr($d_row->d_icerik,0,180);
					
					 		?>

								<div class="list-group">
									<div class="list-group-item flex-column align-items-start bg-faded" href="#" style="border:0px;">
										<div class="d-flex w-100 justify-content-between">
											<h5 class="text-shadow">
												<i class="icon-activity marek3"></i>
												<?=$d_row->d_baslik?>
											</h5>
											<small class="opacity-60"><?=alert_time($d_row->d_tarih)?></small>
										</div>
											<p><?=$icerik?></p>
											<a href="#" onclick="incele(<?=$d_row->d_id?>)" data-bs-toggle="modal" data-bs-target="#haberdetay0"  class="text-bold">Davamı...</a>
										<div class="fltright">

											<?php
												$userid=$row->user_id;
												$result = $this->process_model->like_control($userid);
												if($result==1){ ?>

											<a href="#" id="a-disabled"><i class="text-success" data-feather="thumbs-up"></i></a><span class="text-sm text-muted">(<?=$d_row->d_like?>)</span> &nbsp; | &nbsp;
											<a href="#" id="a-disabled"><i class="text-danger" data-feather="thumbs-down"></i></a><span class="text-sm text-muted">(<?=$d_row->d_unlike?>)</span>

												<?php }else{ ?>


											<a href="<?=base_url('popup/like?like='.$d_row->d_id.'&liker='.$row->user_id)?>"><i class="text-success" data-feather="thumbs-up"></i></a><span class="text-sm text-muted">(<?=$d_row->d_like?>)</span> &nbsp; | &nbsp;
											<a href="<?=base_url('popup/unlike?like='.$d_row->d_id.'&liker='.$row->user_id)?>"><i class="text-danger" data-feather="thumbs-down"></i></a><span class="text-sm text-muted">(<?=$d_row->d_unlike?>)</span>


												<?php }
											?>
											

										</div>
									</div>

								</div>
							<?php 
						}
						echo '<!-- Modal -->
								<div class="modal fade" id="haberdetay0" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
								  <div class="modal-dialog modal-lg">
								    
								  </div>
								</div>

							</section>
						</div>';

					}else{

					}
				
				?>

				

				<div class="col-sm-6">
					<section class="bg-faded padding-top-1x padding-bottom-1x margin-bottom-1x">
					<div class="h3 text-center" style="margin-bottom:5px;"><i data-feather="award" class="iconaward"></i> İstifadəçi <span class="text-bold">Kampaniyası</span></div><br>
					<div class="clearfix"></div>
					
						<div class="list-group">
						<div class="list-group-item flex-column align-items-start bg-faded" href="#" style="border:0px;">
						<div class="d-flex w-100 justify-content-between">
						<h5> Çekiliş Sponsorluğu İle 3 K Takipçi kısa süreliğine indirimde</h5>
						<small class="opacity-60"><b>3</b> gün önce</small>
						</div>
						<p>Türk Gerçek' Çekiliş ile Takipçi Hizmetidir.
						%100 Türk Organik Takipçilerdir
						Büyük sayfalarda yapılan çekilişler aracılığıyla hesabınıza %100 Türk ve gerçek takipçi gönderili..</p>
						<a href="#" data-toggle="modal" data-target="#kampdetay0" class="text-bold">Davamı...</a>
						<div class="fltright">
						<a href="https://hesapsat.net/14193/" rel="nofollow" target="_blank"> <i data-feather="globe"></i>Ətraflı bax... </a>
						</div>
						</div>
						<hr>
						</div>
					</section>
				</div>
				<div class="col-sm-6">
					<section class="bg-faded padding-top-1x padding-bottom-1x margin-bottom-1x text-center">
					<span class="h3 margin-bottom-1x"><i data-feather="database" class="icondatabase"></i> Filtr olan <span class="text-bold">elanlar</span></span><br><br>
					<div class="clearfix"></div>
					<a href="ilanlar" class="btn btn-primary btn-rounded btn-sm">Bütün elanlar &gt;&gt;</a>
					</section>
				</div>
				<div class="col-sm-6">
					<section class="bg-faded padding-top-1x padding-bottom-1x margin-bottom-1x text-center">
					<span class="h3 margin-bottom-1x"><i data-feather="database" class="icondatabase"></i> Son yüklənən <span class="text-bold">elanlar</span></span><br><br>
					<div class="clearfix"></div>
					<div id="dashboardrefresh"> 
						<div class="col-12" style="margin-bottom:5px;">
							<div style="float:left;" title="Satılık 8K takipçili Instagram Hesabı">
							<i data-feather="instagram" class="iconinstagram marek3"></i> <a href="instagram/satilik-hesap/satilik-8k-takipcili-instagram-hesabi-16815">Satılık 8K takipçili Instagram Hesabı</a>
							</div>
							<div style="float:right;">
							<span class="text-muted text-sm">49 dakika önce</span>
							</div>
							<div class="clearfix"></div>
						</div>
						<hr>

					</div>
					<a href="ilanlar" class="btn btn-primary btn-rounded btn-sm">Bütün elanlar &gt;&gt;</a>
					</section>
				</div>

			</div>
		</div>

	</div>
</div>


<!-- Modal -->
<div class="modal fade" id="viewUyari" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">

  </div>
</div>


<?php $this->load->view('include/footer')?>