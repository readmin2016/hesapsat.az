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
				<div class="alert alert-primary alert-dismissible fade show margin-bottom-1x">
					<b>Satış işlemi gerçekleştirmiş</b> üyelerimiz adına fatura kesebilmemiz için aşağıdaki bilgilerin doldurulması gerekmektedir. Diğer üyelerimizin bu alanları doldurmasına gerek yoktur.
				</div>

				<div class="card margin-bottom-1x">
				<div class="card-header"><b><i data-feather="map-pin" class=""></i> Adres Bigileri</b></div>
				<div class="card-body">
				<div class="alert alert-danger alert-dismissible fade show margin-bottom-1x" style="display:none">
					<center>
						<span></span>
					</center>
				</div>
				<form action="<?php echo base_url('settings/add_address')?>" method="post" id="updateayadd-form">
					<div id="updateayadd-result"></div>
					<div class="row">
						<div class="col-sm-6 col-12">
							<div class="form-group">
								<label for="city">Şehir</label>
								<select id="city" name="city" class="form-control form-control-rounded">
								<option value="" selected="">Lütfen Seçiniz</option>
									<?php
										foreach ($sehirler as $il) {
											if($row->sehir==$il->sehir_id){
												echo '<option value="'.$il->sehir_id.'" selected>'.$il->sehir_name.'</option>';
											}else{
												echo '<option value="'.$il->sehir_id.'">'.$il->sehir_name.'</option>';
											}
											
										}
									?>
								</select>
							</div>
						</div>
						<div class="col-sm-6 col-12">
							<div class="form-group">
								<label for="district">İlçe</label>
								<select id="district" name="district" class="form-control form-control-rounded">
									<?php
										$ilcelist = $this->db->where(array('sehirID'=>$row->sehir))->get('ilceler')->result();
										if($row->ilce==""){
											echo '<option value="" class="0">Önce il seçiniz</option>';
										}else{

											foreach ($ilcelist as $ilce) {
												if($ilce->ilce_id==$row->ilce){
													echo '<option value="'.$ilce->ilce_id.'" selected>'.$ilce->ilce_name.'</option>';
												}else{
													echo '<option value="'.$ilce->ilce_id.'">'.$ilce->ilce_name.'</option>';
												}
												
											}

										}
										
									?>
								</select>
							</div>
						</div>
						<div class="col-12">
							<div class="form-group">
								<label for="det">Açık Adresiniz</label>
								<textarea id="det" name="address" value="sdsad" class="form-control form-control-rounded" rows="5" placeholder="Açık adresinizi giriniz" ><?=$row->address?></textarea>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-12 text-right">
							<button id="updateayadd-button" type="submit" class="btn btn-primary btn-rounded">
							<i data-feather="check-circle" class=""></i> Güncelle</button>
						</div>
					</div>
					<input type="hidden" name="token" value="8aca1884d0f5c551b9c4f83e4898e3f0">
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