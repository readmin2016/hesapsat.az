<?php $this->load->view('admin/header')?>

<div class="content-wrapper">
<section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <?php
            $this->load->view('admin/counter')
          ?>

       <div class="card">
      <div class="card-header">
        <i data-feather="user-plus" class="iconFeather"></i>
        <h5>Admin oluştur</h5>
      </div>
      <div class="card-body">
        <div class="row justify-content-md-center">

              
              <div class="col-md-5" style="">
                <div id="alert-danger" role="alert">
                    <i data-feather="alert-triangle"></i>
                    <span></span>
                </div>
                <div id="alert-success" role="alert">
                  <i data-feather="check" ></i>
                  <span></span>
                </div>
                  <form action="<?=base_url('admin/addAdmin')?>" id="createAdmin" method="post">
                    <div class="form-group">
                      <label for="" style="font-weight:500"><i data-feather="user" class="iconFeather"></i> Admin Kullanici Adi</label>
                      <input type="text" name="k_adi" class="form-control" required oninvalid="this.setCustomValidity('Admin kullanıcı adı yazın')" oninput="this.setCustomValidity('')">
                    </div>
                    <div class="form-group">
                      <label for="" style="font-weight:500"><i data-feather="lock" class="iconFeather"></i> Şifre</label>
                      <input type="password" name="pass" class="form-control" required oninvalid="this.setCustomValidity('Şifre yazın')" oninput="this.setCustomValidity('')">
                    </div>
                    <div class="form-group">
                      <button class="btn btn-primary" id="createBtn">
                        <i data-feather="save" class="iconFeather"></i> Ekle
                      </button>
                    </div>
                  </form>
              </div>

        </div>
      </div>
     
    </div>

      </div><!-- /.container-fluid -->
    </section>

</div>







<?php $this->load->view('admin/footer')?>