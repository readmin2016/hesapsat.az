<?php
	$this->load->view('include/header');

?>


<div class="container">
	<div class="row">
		<div class="col-md-6 offset-md-3 col-sm-8 offset-sm-2">
			<div class="dcb-register">
				<h3><b>Türkiye'nin en güvenli sosyal medya hesapları pazaryerine hoşgeldin</b></h3>
				<p>Hesapsat.net platformuna kayıt olarak <a href="">Kullanıcı sözleşmesini</a> okuduğunuzu ve kabul ettiğinizi onaylamış olursunuz. Kullanıcı sözleşmesine ulaşmak için <a href="">tıklayınız</a></p>
				<div style="display:none" class="alert alert-danger register">
					<center>
					<i data-feather="alert-triangle" style="margin-top:-3px;"></i> 
					<span></span>
					</center>
				</div>
				<form id="formRegister" action="<?php echo base_url('pages/create_account')?>" method="post">
					<div class="form-group">
						<span id="formIcon"><i data-feather="user"></i></span>
						<input type="text" name="kullanici_adi" class="form-control" placeholder="Kullanıcı adı" required="" style="padding-left:35px;">
					</div>
					<div class="form-group">
						<span id="formIcon"><i data-feather="mail"></i></span>
						<input type="text" name="eposta" class="form-control" placeholder="E-mail adresi" required="" style="padding-left:35px;">
					</div>

						<div class="form-group">
                          <div class="row">
                            <div class="col-md-4">
                              <div class="input-group">
                                 <span class="input-group-text" id="basicaddon1"><i data-feather="globe" style="width: 17px;"></i></span>
                                <select name="prefix" class="form-select" id="inputGroupSelect01">
                                  <option selected>Choose...</option>
                                  <?php
                                    echo prefix();
                                  ?>
                                </select>
                              </div>

                            </div>
                            <div class="col-md-8">
                              <div class="input-group">
                                 <span class="input-group-text" id="basicaddon1"><i data-feather="phone" style="width: 17px;"></i></span>
                                <input type="text" name="phone" class="form-control" placeholder="Cep Telefonu" aria-label="Username" aria-describedby="basic-addon1" required="">
                              </div>
                            </div>
                          </div>
                        </div>

					<div class="form-group">
						<span id="formIcon"><i data-feather="lock"></i></span>
						<input type="password" name="password" class="form-control" placeholder="Şifre" required="" style="padding-left:35px;">
					</div>
					<div class="form-group">
						<button class="btn btn-primary"><i data-feather="user-plus"></i> Kayıt ol</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>	




<?php 
	
	$this->load->view('include/footer');

?>