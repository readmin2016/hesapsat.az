<?php $this->load->view('include/header')?>
<?php
	foreach ($uyelist as $row) {
	}
?>
<div class="container">
	<div class="content" style="margin-top:15px;">
		<div class="row">
			<?php $this->load->view('settings/leftBar')?>

			<div class="col-lg-9 col-12">
				<div class="row">
					<div class="col-sm-6 col-12">
						<div class="card mb-3">
							<div class="card-header text-lg"><b><i data-feather="award" class=""></i> Üyelik Tipi</b></div>
							<?php
								if($row->kullanici_durum==1){ ?>

									<div class="card-body text-center">
										<h4 class="card-title" style="margin-bottom:0px;">VIP Üye</h4>
									</div>

							<?php	}else{ ?>

								<div class="card-body text-center">
									<h4 class="card-title" style="margin-bottom:0px;">Standart Üye</h4>
								</div>
								<div class="card-footer">
									<a href="#" id="vip-uye" data-bs-toggle="modal" data-bs-target="#vipozellik" class="text-shadow">V.I.P Üyelikte neler var &gt;&gt;</a>
								</div>

							<?php	}
							?>
							
						</div>
					</div>	
					<div class="col-sm-6 col-12">
						<div class="card mb-3">
						<div class="card-header text-lg"><b><i data-feather="calendar" class=""></i> Üyelik Tarihi</b></div>
						<div class="card-body text-center">
						<h4 class="card-title" style="margin-bottom:0px;"><?=$row->data_account?></h4>
						</div>
						<div class="card-footer">
						<i data-feather="heart" class="icon-heart marek3 text-danger"></i>
							<?php echo mytime($row->data_account_en)?> 
						</div>
						</div>
					</div>	
				</div>
				<!-- END ROW -->
				<section class="bg-faded padding-top-1x padding-bottom-1x margin-bottom-1x text-center">
				<span class="h3 margin-bottom-1x"><i data-feather="camera"></i> Profil Fotoğrafı</span><br><br>
				<div class="clearfix"></div>
				<div class="alert alert-danger alert-dismissible fade show margin-bottom-1x" style="display:none">
					<i data-feather="alert-triangle" class="iconalerttriangle"></i> <span></span>
				</div>
				<?php
					if($row->kullanici_resim==""){
						echo '<img style="width:250px; height:250px;" class="d-block mx-auto img-thumbnail rounded-circle mb-3" src="https://hesapsat.net/img/default.png" alt="">';
					}else{
						echo '<img style="width:250px; height:250px;" class="d-block mx-auto img-thumbnail rounded-circle mb-3" src="'.base_url('user_profile/'.$row->kullanici_resim).'" alt="">';
					}
				?>
				<form action="" method="get" id="formImage" enctype="multipart/form-data">
					<div class="custom-file col-8">
						<input class="custom-file-input" type="file" id="file-input" accept="image/*">
						<label class="custom-file-label" for="file-input">Resim Seçin...</label>
					</div>
					<input type="hidden" name="page" value="general">
					<input type="hidden" name="token" value="8aca1884d0f5c551b9c4f83e4898e3f0">
					<input type="hidden" id="userid" name="userID" value="<?=$row->user_id?>">
				</form>
				</section>
			</div>
		</div>
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
		<button  class="btn btn-success"><i class="icon-zap"></i> Hemen V.I.P Ol <b class="h5 text-white text-shadow text-bold">[ <?=$price->price?> TL ]</b></button>
	</center>
	</div>
	<div class="modal-footer">
	<button data-bs-dismiss="modal" type="button" id="btn" class="btn btn-secondary btn-sm btn-rounded fltleft"><i data-feather="power" class="iconpower"></i> Kapat</button>
	</div>
	</div>
  </div>
</div>



<?php $this->load->view('include/footer')?>