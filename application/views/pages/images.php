<?php $this->load->view('include/header')?>

<?php
	foreach ($uyelist as $row) {
		foreach ($ilan_liste as $ilanlist) {
			if($row->user_id==$ilanlist->userid){
				
			}
		}
	}
	$backurl = $_SERVER['HTTP_REFERER'];
?>

<div class="container">
	<div class="content margin-top-2x">
		<div class="checkout-steps hidden-xs-down">
			<a href="#" style="cursor:no-drop"><i data-feather="award" class="icon-award" style="margin-top:-3px;"></i> İşlem Tamam</a>
			<a class="active" href="#" style="cursor:no-drop"><span class="angle"></span><i data-feather="camera" class="icon-camera" style="margin-top:-3px;"></i> Görseller</a>
			<a  href="#" style="cursor:no-drop"><span class="step-indicator"></span><span class="angle"></span><i data-feather="file-text" class="icon-file-text" style="margin-top:-3px;"></i> Bilgiler</a>
		</div>
	</div>


	<div class="card margin-bottom-1x">
		<div class="card-header text-bold"><b><i data-feather="file-text"></i> İlan görselleri</b></div>
		<div class="card-body">
			<form action="<?php echo base_url('pages/upload')?>" class="dropzone" method="post">
				<input type="hidden" name="listingid" value="<?=$ilanlist->token?>">
				<input type="hidden" name="userid" value="<?=$row->user_id?>">
				<div class="dz-default dz-message">
					<span><i data-feather="upload" style="font-size:50px;"></i><br><br>
						Dosyalarınızı sürükleyip bırakın ya da bu alana tıklayın!
					</span>
				</div>
			</form>
		</div>
	</div>
	<a href="<?=$backurl.'/'.$ilanlist->token?>" id="btn" class="btn btn-secondary btn-rounded fltleft" style="margin-top:22px;"><i data-feather="chevrons-left"></i> Geri</a>

	<a href="<?php echo base_url('finish?1='.$ilanlist->token)?>" id="btn" class="btn btn-primary btn-rounded fltright" style="margin-top:22px;"><i class="icon-save"></i> Devam Et <i data-feather="chevron-right"></i></a>

	<div class="clearfix"></div>
</div>


<?php $this->load->view('include/footer')?>