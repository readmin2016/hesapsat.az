<?php $this->load->view('include/header')?>


<div class="container">
	<div class="content margin-top-2x">
		
    <div class="row">
      <div class="col-md-5 col-sm-6 col-12 margin-top-1x">
        <div class="card">
          <div class="card-header"><h3><i class="icon-unlock" data-feather="unlock"></i> Hadi giriş yap</h3></div>
            <div class="card-body">
              <div style="display:none" class="alert alert-danger nead">
                <center>
                <i data-feather="alert-triangle" style="margin-top:-3px;"></i> 
                <span></span>
                </center>
              </div>
              <form action="" method="post" id="formNeadLogin">
                  <div id="login1-result" style="margin-bottom:10px; margin-left:-5px; margin-right:-5px;"></div>
                    <div class="form-group">
                      <i class="form-icon-lock" data-feather='user'></i>
                      <input name="kullanici_adi_1" class="form-control" type="text" id="extra-input" value="" placeholder="Kullanıcı adı" required="" style="padding-left:35px;">
                    </div>
                    <div class="form-group">
                      <i class="form-icon-lock" data-feather='lock'></i>
                      <input name="password_1" class="form-control" type="password" id="extra-input" value="" placeholder="Şifre" required="" style="padding-left:35px;">
                    </div>
                    <div class="d-flex flex-wrap justify-content-between">
                      <div class="custom-control custom-checkbox">
                          <input name="remember" class="custom-control-input" type="checkbox" id="remember_me" checked="">
                          <label class="custom-control-label" for="remember_me" >Beni hatırla</label>
                      </div>
                    </div>
                    <div class="text-center text-sm-right">
                       <button id="login-button" class="btn btn-sm btn-primary margin-bottom-none"><i class="icon-unlock" data-feather="unlock"></i> Giriş Yap</button>
                    </div>
                    <hr style="margin:10px 0px;">

                  <a id="navi-link" data-bs-toggle="modal" data-bs-target="#forgerPass" style="cursor:pointer">Şifreni mi unuttun?</a>
              </form>
            </div>

            <!-- Modal -->
          <div class="modal fade" id="forgerPass" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-sm">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Şifre Sıfırlama</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <form action="javascript:void(0);" name="form" id="sifreunut-form">
                    <div id="sifreunut-result"></div>
                    <div class="form-group">
                    <input name="usrname" class="form-control" type="text" placeholder="Kullanıcı adı" required="" style="padding-left:35px"><span class="input-group-addon"><i data-feather="user-check" class="forget-icon"></i></span>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                    <input class="custom-control-input" type="radio" id="forget_input" name="stiphead" value="1" checked="">
                    <label class="custom-control-label" for="kurfaretmzhead"><i class="icon-phone"></i> Telefon ile sıfırla</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                    <input class="custom-control-input" type="radio" id="forget_input" name="stiphead" value="2">
                    <label class="custom-control-label" for="kurfaretmzhead1"><i class="icon-mail"></i> Email ile sıfırla</label>
                    </div>
                    <div class="text-center text-sm-right">
                    <button id="btn" class="btn btn-sm btn-primary btn-rounded margin-bottom-none" type="submit">
                      <i data-feather="refresh-cw" class="iconrefresh"></i> Şifremi Sıfırla</button>
                    </div>
                    <input type="hidden" name="step" value="1">
                  </form>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>

<!-- REGISTER -->

    <div class="col-md-1 hidden-sm-down"></div>
    <div class="col-sm-6 col-12 margin-top-1x">
      <h3 class="margin-bottom-1x">Üye değil misin?</h3>
      <p>Sadece 30 saniyeni ayırarak Türkiye'nin <b>en güvenilir</b> sosyal medya hesap pazaryerine kayıt olabilirsin...</p>
      <div style="display:none" class="alert alert-danger register">
        <center>
        <i data-feather="alert-triangle" style="margin-top:-3px;"></i> 
        <span></span>
        </center>
      </div>
      <form action="javascript:void(0)" method="post" id="formRegister">
        <div id="register1-result" style="margin-bottom:10px; margin-left:-5px; margin-right:-5px;"></div>
        <div class="form-group">
          <i class="form-icon-lock" data-feather='user'></i>
          <input name="kullanici_adi" id="extra-input" class="form-control" type="text" placeholder="Kullanıcı adı" required="" style="padding-left:35px;">
        </div>
        <div class="form-group">
          <i class="form-icon-lock" data-feather='at-sign'></i>
         <input name="eposta" id="extra-input" class="form-control" type="email" placeholder="E-mail adresi" required="" style="padding-left:35px;">
        </div>
        <div class="form-group">
          <div class="row">
            <div class="col-md-4">
              <div class="input-group">
                 <span class="input-group-text" id="basicaddon2"><i data-feather="globe" style="width: 17px;"></i></span>
                <select name="prefix" class="form-select" id="inputGroupSelect02">
                  <option selected>Choose...</option>
                  <?php
                    echo prefix();
                  ?>
                </select>
              </div>
            </div>
            <div class="col-md-8">
                <i class="form-icon-lock" data-feather='phone'></i>
                <input name="phone" id="extra-input" class="form-control" type="number" placeholder="Cep Telefonu" required="" style="padding-left:35px;">
            </div>
          </div>
        </div>
        <div class="form-group">
          <i class="form-icon-lock" data-feather='lock'></i>
          <input name="password" id="extra-input" class="form-control" type="password" id="myPassword" placeholder="Şifre" style="padding-left:35px !important;" autocomplete="new-password">
        </div>
        <br>
        <div class="text-center text-sm-right">
          <button id="register1-button" class="btn btn-sm btn-primary margin-bottom-none" type="submit"><i class="icon-unlock" data-feather="user-plus"></i> Kayıt Ol</button>
        </div>
        <input type="hidden" name="sozlesme" value="1">
        <input type="hidden" name="linkpage" value="/add-listing//">
        <input type="hidden" name="loginsecure" value="318d680c8abaaf702abb49d4e8762290">
      </form>
    </div>
</div>

	</div>
</div>


<?php $this->load->view('include/footer')?>