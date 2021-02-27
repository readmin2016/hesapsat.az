<?php $this->load->view('admin/header')?>

<div class="content-wrapper">
<section class="content" style="margin-top:10px;">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <?php
          $this->load->view('admin/counter')
        ?>


        <div class="checkout-steps hidden-xs-down">
        <a href="#" style="cursor:no-drop"><i data-feather="award" style="margin-top:-3px;"></i> Moderatör vazifesi</a>
        <a href="#" style="cursor:no-drop"><span class="angle"></span><i data-feather="file-text" style="margin-top:-3px;"></i> Moderatör yetkisi</a>
        <a class="active" href="#" style="cursor:no-drop"><span class="step-indicator"></span><span class="angle"></span><i data-feather="user-plus" style="margin-top:-3px;"></i>&nbsp; Moderatör bilgileri</a>
        </div>

        <form id="mf_form_1" action="<?=base_url('admin/add_md')?>" method="post" enctype="multipart/form-data">
        <div class="row">
          <div class="col-lg-12">
            <div class="card">
              <div class="card-header"><h5><i data-feather="users" class="iconFeather"></i> Moderatör bilgileri</h5></div>
              <div class="card-body">
                
                <div class="form-group">
                  <input type="file" id="fileupload" name="file" class="form-control">
                  <label for="fileupload" id="up_btn"><i data-feather="camera"></i><br> Logo ekle <br>
                    <span id="file_text" style="font-weight:normal">...</span></label>

                 </div>
                <div class="form-group">
                  <input type="text" name="md_name" class="form-control" placeholder="Kullanıcı adı" required="" oninvalid="this.setCustomValidity('Geçerli bir kullanici adı yazın')" oninput="this.setCustomValidity('')">
                </div>
                <div class="form-group">
                  <input type="password" name="md_sifre" class="form-control" placeholder="Kullanıcı şifre" required="" oninvalid="this.setCustomValidity('Şifreni girin')" oninput="this.setCustomValidity('')">
                </div>
                <div class="form-group">
                  <input type="hidden" name="md_token" value="<?php echo rand(1111,9878)?>">
                </div>
                <div class="form-group">
                  <button class="btn btn-primary"><i data-feather="save" class="iconFeather"></i> Kaydet ve Devam et</button>
                </div>
              </div>
            </div>
          </div>
        </div>
          
        </form>

      </div><!-- /.container-fluid -->
    </section>



</div>







<?php $this->load->view('admin/footer')?>