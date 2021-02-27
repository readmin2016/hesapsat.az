<?php
	foreach ($uyelist as $row) {
		$userid = $row->user_id;
		$result = $this->process_model->ilanlarim_sayfa_control($userid);
	}
?>
<span class="open_filter">
	<i data-feather="chevrons-left"></i>
</span>
<div class="hamburger"></div>
<div class="mobileFilerBar">
    <div class="modal-content" style="border:none">
	      <div class="modal-header">
	        <h5 class="modal-title">İlan Filtrele</h5>
	        <button type="button" id="closeFilterBar" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
	      </div>
	      <div class="modal-body" style="padding:0;padding-top:5px;" >
	        	<div class="col-lg-3 hidden-mobile">
				<aside class="sidebar sidebar-offcanvas" style="padding:0px">
				<nav class="list-group" id="components-list">
				<aside class="user-info-wrapper">
				<div class="user-cover" style="background-image: url(<?=base_url('assets/images/userHeader.jpg')?>);">
				<div class="info-label"><i data-feather="star" class="icon-star" style="color:orange; margin-top:-3px;"></i> <b>0</b> işlem</div>
				</div>
				<div class="user-info">
				<div class="user-avatar" style="width:90px;">
				<div class="image-upload">
				<form action="actions/settings_.php" method="post" enctype="multipart/form-data">
				<input name="file" id="file-input" style="display:none" type="file" accept="image/*" >
				<input type="hidden" name="page" value="general">
				<input type="hidden" name="token" value="8aca1884d0f5c551b9c4f83e4898e3f0">
				<input type="hidden" name="step" value="12">
				</form>
				</div>
				<?php
					if($row->kullanici_resim==""){
						echo '<img src="https://hesapsat.net/img/default.png" alt="" style="width:100%; margin-top:-5px;">';
					}else{
						echo '<img src="'.base_url('user_profile/'.$row->kullanici_resim).'" alt="" style="width:100%; margin-top:-5px;">';
					}
				?>
				
				</div>
				<div class="user-data">
				<h5 style="margin-top:5px;"><?=get_cookie('username')?></h5>
				</div>
				</div>
				</aside>
				<nav class="list-group settings-list">
				<a class="list-group-item <?php echo active_link('settings')?>" href="<?php echo base_url('settings')?>">
					<i data-feather="camera" class="icon-camera"></i> Genel Bilgiler</a>

				<a class="list-group-item <?php echo active_link('settings/bank')?>" href="<?php echo base_url('settings/bank')?>">
					<i data-feather="dollar-sign" class="icon-dollar-sign"></i> Banka Hesaplarım</a>

				<a class="list-group-item <?php echo active_link('settings/ilanlarim')?>" href="<?php echo base_url('settings/ilanlarim')?>">
					<i data-feather="file-text" class="icon-dollar-sign"></i> İlanlarım</a>

				<?php
					if($row->kullanici_durum==1){
						echo '<a class="list-group-item '.active_link('settings/olustur').'" href="'.base_url('settings/olustur').'">
							<i data-feather="file-text" class="icon-dollar-sign"></i> Kampaniya yarat</a>';
					}else{

					}
				?>

				<a class="list-group-item <?php echo active_link('settings/ilanlarim')?>" href="<?php echo base_url('settings/ilanlarim')?>">
					<i data-feather="shopping-cart" class="icon-dollar-sign"></i> Aldıklarım</a>

				<a class="list-group-item <?php echo active_link('settings/address')?>" href="<?php echo base_url('settings/address')?>">
					<i data-feather="map-pin" class="icon-map-pin"></i> Adres Bilgilerim</a>

				<a class="list-group-item <?php echo active_link('settings/activation')?>" href="<?php echo base_url('settings/activation')?>">
					<i data-feather="smartphone" class="icon-smartphone"></i> SMS/Email Aktivasyon</a>

				<a class="list-group-item <?php echo active_link('settings/tconay')?>" href="<?php echo base_url('settings/tconay')?>">
					<i data-feather="user-check" class="icon-user-check"></i> Onaylı Üyelik</a>

				<a class="list-group-item <?php echo active_link('settings/mantconay')?>" href="<?php echo base_url('settings/mantconay')?>">
					<i data-feather="grid" class="icon-grid"></i> Resimli TC Onayı</a>

				<a class="list-group-item <?php echo active_link('settings/security')?>" href="<?php echo base_url('settings/security')?>">
					<i data-feather="shield" class="icon-shield"></i> Şifre Değiştir</a>

				<a class="list-group-item <?php echo active_link('settings/delaccount')?>" href="<?php echo base_url('settings/delaccount')?>">
					<i data-feather="user-x" class="icon-user-x"></i> Hesabımı Sil</a>
				</nav>
				</nav>
				</aside>
			</div>
	      </div>
    </div>
</div>
<!--END MOBILE -->

<?php
	
	if($this->agent->is_mobile()){

	}else{ 
?>



<div class="col-lg-3 hidden-mobile">
	<aside class="sidebar sidebar-offcanvas" style="padding:0px">
	<nav class="list-group" id="components-list">
	<aside class="user-info-wrapper">
	<div class="user-cover" style="background-image: url(<?=base_url('assets/images/userHeader.jpg')?>);">
	<div class="info-label"><i data-feather="star" class="icon-star" style="color:orange; margin-top:-3px;"></i> <b>0</b> işlem</div>
	</div>
	<div class="user-info">
	<div class="user-avatar" style="width:90px;">
	<div class="image-upload">
	<form action="actions/settings_.php" method="post" enctype="multipart/form-data">
	<input name="file" id="file-input" style="display:none" type="file" accept="image/*" >
	<input type="hidden" name="page" value="general">
	<input type="hidden" name="token" value="8aca1884d0f5c551b9c4f83e4898e3f0">
	<input type="hidden" name="step" value="12">
	</form>
	</div>
	<?php
		if($row->kullanici_resim==""){
			echo '<img src="https://hesapsat.net/img/default.png" alt="" style="width:100%; margin-top:-5px;">';
		}else{
			echo '<img src="'.base_url('user_profile/'.$row->kullanici_resim).'" alt="" style="width:100%; margin-top:-5px;">';
		}
	?>
	
	</div>
	<div class="user-data">
	<h5 style="margin-top:5px;"><?=get_cookie('username')?></h5>
	</div>
	</div>
	</aside>
	<nav class="list-group settings-list">
	<a class="list-group-item <?php echo active_link('settings')?>" href="<?php echo base_url('settings')?>">
		<i data-feather="camera" class="icon-camera"></i> Genel Bilgiler</a>

	<a class="list-group-item <?php echo active_link('settings/bank')?>" href="<?php echo base_url('settings/bank')?>">
		<i data-feather="dollar-sign" class="icon-dollar-sign"></i> Banka Hesaplarım</a>

	<?php
		if($result==1){ ?>

		<a class="list-group-item <?php echo active_link('settings/ilanlarim')?>" href="<?php echo base_url('settings/ilanlarim')?>">
		<i data-feather="file-text" class="icon-dollar-sign"></i> İlanlarım</a>

	<?php }else{

		}
	?>

	<?php
		$userID = $row->user_id;
		$resultAldiklarim = $this->process_model->aldiklarim($userID);
		if($resultAldiklarim==1){

			echo '<a class="list-group-item '.active_link('settings/aldiklarim').'" href="'.base_url('settings/aldiklarim').'">
		<i data-feather="shopping-cart" class="icon-dollar-sign"></i> Aldıklarım</a>';

		}else{

		}
	?>

	<?php
		if($row->kullanici_durum==1){
			echo '<a class="list-group-item '.active_link('settings/olustur').'" href="'.base_url('settings/olustur').'">
				<i data-feather="award" class="icon-dollar-sign"></i> Kampaniya oluştur</a>';
		}else{

		}
	?>

	<a class="list-group-item <?php echo active_link('settings/address')?>" href="<?php echo base_url('settings/address')?>">
		<i data-feather="map-pin" class="icon-map-pin"></i> Adres Bilgilerim</a>

	<a class="list-group-item <?php echo active_link('settings/activation')?>" href="<?php echo base_url('settings/activation')?>">
		<i data-feather="smartphone" class="icon-smartphone"></i> SMS/Email Aktivasyon</a>

	<a class="list-group-item <?php echo active_link('settings/tconay')?>" href="<?php echo base_url('settings/tconay')?>">
		<i data-feather="user-check" class="icon-user-check"></i> Onaylı Üyelik</a>

	<a class="list-group-item <?php echo active_link('settings/mantconay')?>" href="<?php echo base_url('settings/mantconay')?>">
		<i data-feather="grid" class="icon-grid"></i> Resimli TC Onayı</a>

	<a class="list-group-item <?php echo active_link('settings/security')?>" href="<?php echo base_url('settings/security')?>">
		<i data-feather="shield" class="icon-shield"></i> Şifre Değiştir</a>

	<a class="list-group-item <?php echo active_link('settings/delaccount')?>" href="<?php echo base_url('settings/delaccount')?>">
		<i data-feather="user-x" class="icon-user-x"></i> Hesabımı Sil</a>
	</nav>
	</nav>
	</aside>
</div>

<?php	}


?>