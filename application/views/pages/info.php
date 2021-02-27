<?php $this->load->view('include/header')?>

<?php
	foreach ($uyelist as $row) {}

?>

<div class="container">
	<div class="content margin-top-2x">
		<div class="checkout-steps hidden-xs-down">
			<a href="#" style="cursor:no-drop"><i data-feather="award" class="icon-award" style="margin-top:-3px;"></i> İşlem Tamam</a>
			<a href="#" style="cursor:no-drop"><span class="angle"></span><i data-feather="camera" class="icon-camera" style="margin-top:-3px;"></i> Görseller</a>
			<a class="active" href="#" style="cursor:no-drop"><span class="step-indicator"></span><span class="angle"></span><i data-feather="file-text" class="icon-file-text" style="margin-top:-3px;"></i> Bilgiler</a>
		</div>
	</div>
	<form action="<?php echo base_url('pages/add_ilan')?>" method="post" id="addilan-form">
	<?php

	$cat = $altcategory;

		switch ($cat) {
			case '106':
				$this->load->view('pages/hizmet_form');
				break;
			
			case '107':
				$this->load->view('pages/satilik_form');
				break;

			default:
				$this->load->view('pages/form');
			break;
		}

		
	?>
	</form>
</div>




<?php $this->load->view('include/footer')?>