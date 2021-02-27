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
				<div class="margin-bottom-1x activation-list">
				<div class="card">
					<?php
						if($row->phone_onay==0){ ?>

						<div class="card-header"><span class="text-lg fntw600 rdcl" style="color:red">
							<i data-feather="alert-triangle" class="icon-" style="margin-top:-4px; color:red"></i>
							Cep telefonu onaylı değilsiniz!</span>
						</div>
						<div class="card-body">
							<b><?=$row->phone?></b> numaralı telefon ile kayıt oldunuz. Lütfen cep telefonu numaranızı doğru girdiğinizden emin olduktan sonra talepte bulununuz. <a data-bs-toggle="modal" data-bs-target="#teldegis" style="cursor:pointer">Telefon numaranızı değiştirmek için tıklayınız</a>
							<br><br>
							<form action="javascript:void(0);" name="form" id="kodgonderset-form">
								<div id="kodgonderset-result"></div>
								<button id="kodgonderset-button" class="btn btn-rounded btn-outline-primary" style="width:100%">
									<i data-feather="send" class="icon-send"></i> Telefonumu Doğrula</button>
								<input type="hidden" name="token" value="e6894121ea0a394cf23be24959cbfbd3">
								<input type="hidden" name="step" value="7">
							</form>
						</div>

					<?php }else{ ?>

						<div class="card-header"><span class="text-lg fntw600 rdcl" style="color:#4caf50">
							<i data-feather="check-square" class="icon-" style="margin-top:-4px; color:#4caf50"></i>
							Cep telefonu onaylısınız!</span>
						</div>
						<div class="card-body">
							<div class="row">
								<div class="col-md-2 col-3">
									<img src="<?php echo base_url('assets/')?>images/cepok.png" alt="">
								</div>
								<div class="col-md-10 col-9">
									<b><?=$row->phone?></b> numaralı cep telefonunuz <b>ilansat</b> tarafından başarıyla doğrulanmıştır. Doğrulanmış cep telefonu numaralarının değiştirilebilmesi için destek talebi oluşturmanız gerekmektedir. Gerekli incelemelerden sonra telefon numaranız değiştirilecektir. <br><br><br>
									<form action="" name="form" method="post">
									<div class="custom-control custom-checkbox">
									<input class="custom-control-input" name="hiddenphone" type="checkbox" id="ex-check-1">
									<label class="custom-control-label" for="ex-check-1"><b>VIP üye dahi olsam telefon numaram kimseye gösterilmesin!</b></label>
									</div>
									<input type="hidden" name="token" value="36b6586cffbec31c0d5ac1313c805c24">
									<input type="hidden" name="step" value="15">
									</form>
								</div>
							</div>
						</div>

					<?php }
					?>
					
				</div>
				</div>

				<div class="margin-bottom-1x activation-list">
					<div class="card">
						<?php
							if($row->eposta_onay==0){ ?>

						<div class="card-header"><span class="text-lg fntw600 rdcl" style="color:red">
							<i data-feather="alert-triangle" class="icon-alert-triangle" style="margin-top:-4px;color:red"></i> E-mail onaylı değilsiniz!</span>
						</div>
						<div class="card-body">
							Üye olurken belirtmiş olduğunuz <b><?=$row->eposta?></b> email adresine onaylamanız için bir link gönderdik. Lütfen e-mailinizi kontrol ediniz ve bu linke tıklayınız. Gönderilen e-mail Gelen Kutusunda yer almıyorsa lütfen Spam klasörünü de kontrol ediniz. Eğer e-mail spam klasöründe yer alıyorsa "Spam değil" olarak işaretleyip gelen kutunuza taşıyınız. <a data-bs-toggle="modal" data-bs-target="#emaildegis" style="cursor:pointer">Email adresinizi değiştirmek için tıklayınız</a>
							<br><br>

							<?php }else{ ?>

						<div class="card-header"><span class="text-lg fntw600 rdcl" style="color:#4caf50">
							<i data-feather="check-square" class="icon-alert-triangle" style="margin-top:-4px;color:#4caf50"></i> E-mail onaylısınız!</span>
						</div>
						<div class="card-body">
							<div class="row">
								<div class="col-md-2 col-3">
									<img src="<?php echo base_url('assets/')?>images/mailok.png" alt="">
								</div>
								<div class="col-md-10 col-9">
									<b><?=$row->eposta?></b> email adresiniz <b>ilansat</b> tarafından başarıyla doğrulanmıştır. Doğrulanmış email adreslerinin değiştirilebilmesi için destek talebi oluşturmanız gerekmektedir. Gerekli incelemelerden sonra email adresiniz değiştirilecektir.
									<br><br>
								</div>
							</div>
						<?php	}
						?>
						
						<div class="alert alert-success sucessEmail" style="display:none">
							<span><i data-feather="shield"></i></span>
							<center>
								
							</center>
						</div>
						<form action="<?php echo base_url('settings/emailonay')?>" method="post" name="form" id="mailonaysetform">
							<div id="mailonayset-result"></div>
							<?php
								if($row->eposta_onay==0){ ?>

								<div>
									<button id="mailonayset-button" class="btn btn-outline-primary btn-rounded" type="submit" style="width:100%">
									<i data-feather="send" class="icon-send"></i> <span class="hidden-xs-down">Aktivasyon</span> Kodu Gönder</button>
								</div>

							<?php	}else{ ?>

							<?php }
							?>
							
							<input type="hidden" name="token" value="e6894121ea0a394cf23be24959cbfbd3">
							<input type="hidden" name="username" value="<?=$row->kullanici_adi?>">
							<input type="hidden" name="email" value="<?=$row->eposta?>">
							<input type="hidden" name="userid" value="<?=$row->user_id?>">
						</form>
						</div>
					</div>
				</div>
				
				<!-- END ROW -->

				<!-- Modal Email -->
				<div class="modal fade" id="emaildegis" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
				  <div class="modal-dialog">
				    <div class="modal-content">
				      <div class="modal-header">
				        <h5 class="modal-title" id="exampleModalLabel">Email adresini değiştir</h5>
				        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				      </div>
				      <div class="modal-body">
				      	<div class="alert alert-danger alert-dismissible fade show margin-bottom-1x" style="display:none">
						<center>
							<i data-feather="alert-triangle"></i>
							<span></span>
						</center>
					</div>
				        <form action="javascript:void(0);" name="form" id="emaildegissetform">
						<div id="emaildegisset-result"></div>
						<div class="row">
						<div class="col-8">
						<div class="form-group" style="position:relative;">
						<input name="e_mail" class="form-control ozel form-control-sm" type="email" placeholder="Email adresi" required=""><span class="input-group-addon"><i data-feather="mail" class="iconmail"></i></span>
						</div>
						</div>
						<div class="col-4">
						<button id="emaildegisset-button" class="btn btn-primary btn-sm" type="submit" >
							<i data-feather="refresh-ccw" class="icon-refresh-ccw"></i> <span class="hidden-xs-down">Gönder</span></button>
						</div>
						</div>
						<input type="hidden" name="token" value="642f6bdbaee4ad719cb58d66604ddefb">
						<input type="hidden" name="user_id" value="<?=$row->user_id?>">
						</form>
				      </div>
				      <div class="modal-footer">
				        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
				        	<i data-feather="power" class="icon-power"></i>KAPAT</button>
				      </div>
				    </div>
				  </div>
				</div>


				<!-- Modal Phone -->
				<div class="modal fade" id="teldegis" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
				  <div class="modal-dialog">
				    <div class="modal-content">
				      <div class="modal-header">
				        <h5 class="modal-title" id="exampleModalLabel">Telefon numaranı değiştir</h5>
				        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				      </div>
				      <div class="modal-body">
				      	<div class="alert alert-danger alert-dismissible fade show margin-bottom-1x" style="display:none">
						<center>
							<i data-feather="alert-triangle"></i>
							<span></span>
						</center>
					</div>
				        <form action="javascript:void(0);" name="form" id="phonedegissetform">
						<div id="emaildegisset-result"></div>
						<div class="row">
						<div class="col-8">
						<div class="form-group" style="position:relative;">
						<input name="phone" class="form-control ozel form-control-sm" type="text" placeholder="Telefon numarası" required=""><span class="input-group-addon"><i data-feather="smartphone" class="iconmail"></i></span>
						</div>
						</div>
						<div class="col-4">
						<button id="emaildegisset-button" class="btn btn-primary btn-sm" type="submit" >
							<i data-feather="refresh-ccw" class="icon-refresh-ccw"></i> <span class="hidden-xs-down">Gönder</span></button>
						</div>
						</div>
						<input type="hidden" name="token" value="642f6bdbaee4ad719cb58d66604ddefb">
						<input type="hidden" name="user_id" value="<?=$row->user_id?>">
						</form>
				      </div>
				      <div class="modal-footer">
				        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
				        	<i data-feather="power" class="icon-power"></i>KAPAT</button>
				      </div>
				    </div>
				  </div>
				</div>
				
			</div>
		</div>
	</div>
</div>






<?php $this->load->view('include/footer')?>