<?php $this->load->view('include/header')?>


<div class="head_panel">
	<div class="container">
		<span class="material-icons home">home</span>
		<span><a href="<?php echo base_url()?>">Ana Sayfa </a> > Kullanıcı Sözleşmesi</span>
	</div>
</div>

<div class="container">
<div class="content margin-top-2x">
		
<div class="card" style="font-size:16px;">
<div class="card-body" style="padding:30px;">
<h2 class="text-center" style="margin-top:0"><i class="pe-7s-news-paper" style="font-size:60px;"></i><br> Kullanıcı Sözleşmesi</h2>
<div class="row">
<div class="col-sm-12" align="justify" id="cleen">
	<?php
		foreach ($pages as $page) {
			echo $page->icerik;
		}
	?>

</div>
</div>
</div>
</div>

	</div>
</div>


<?php $this->load->view('include/footer')?>