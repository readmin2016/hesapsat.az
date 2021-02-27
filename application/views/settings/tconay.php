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
				<div class="alert alert-primary margin-bottom-1x"><span class="alert-close" data-dismiss="alert"></span>
				Gireceğiniz bilgiler gizlilik politikamız gereği üçüncü şahıslarla kesinlikle paylaşılmaz ve şifrelenerek güvenli bir şekilde korunur. <b>Güvenli bir şekilde üyeliğinizi onaylayabilirsiniz.</b>
				</div>

				<div class="card margin-bottom-1x">
				<div class="card-header text-bold"><i data-feather="user-check"></i> Onaylı Üyelik 
				<span class="h6 fltright">
					<?php
						if($row->tc_kimlik==""){
							echo '<span style="color:red"><i data-feather="x"></i> ONAYLI DEĞİL</span>';
						}else{
							echo '<span style="color:#26d917"><i data-feather="check"></i> ONAYLI</span>';
						}
					?>
					
				</span></div>
				<div class="card-body">

				<form action="<?php echo base_url('settings/tconay_process')?>" method="post" id="updategour-form">
				<div class="form-group">
				<div id="updategour-result"></div>
				<div class="row">
				<div class="col-12">
				<div class="form-group">
				<label for="acowner">Adınız &amp; Soyadınız</label>
				<input id="acowner" name="name_surname" class="form-control form-control-rounded" type="text" placeholder="Adınız ve Soyadınız" value="<?=$row->name_surname?>">
				</div>
				</div>
				<div class="col-sm-6 col-12">
				<div class="form-group">
				<label for="dtar">Doğum Yılınız</label>
				<select id="dtar" name="dtar" class="form-control form-control-rounded">
				<option value="">Lütfen seçiniz</option>
				<?php
					if($row->dogum_yili==""){

						for ($i=1940; $i <= 2013; $i++) { 
							echo '<option value="'.$i.'">'.$i.'</option>';
						}

					}else{
						echo '<option selected disabled style="background:#f1f1f1" value="'.$row->dogum_yili.'">'.$row->dogum_yili.'</option>';
						for ($i=1940; $i <= 2013; $i++) { 
							echo '<option value="'.$i.'">'.$i.'</option>';
						}
						
					}
					
				?>
				</select>
				</div>
				</div>
				<div class="col-sm-6 col-12">
				<div class="form-group">
				<label for="tcid">TC Numaranız</label>
				<input id="tcid" name="tcid" class="form-control form-control-rounded" type="text" placeholder="TC Kimlik numaranız" value="<?=$row->tc_kimlik?>">
				</div>
				</div>
				</div>
				<div class="row">
				<div class="col-12 text-right">
				<button id="updategour-button" type="submit" class="btn btn-primary btn-rounded">
					<i data-feather="check-circle" class=""></i> Güncelle</button>
				</div>
				</div>
				</div>
				<input type="hidden" name="token" value="409f569dacab73dfc1c46fdeb268a830">
				<input type="hidden" name="tconay" value="0">
				<input type="hidden" name="userid" value="<?=$row->user_id?>">
				</form>
				</div>
				</div>
				
				<!-- END ROW -->
				
			</div>
		</div>
	</div>
</div>






<?php $this->load->view('include/footer')?>