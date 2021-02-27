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
        <h5><b>Üye</b> </h5>
      </div>
      <div class="card-body">
        <div class="row justify-content-md-center">


            <div class="col-md-8">
                <div class="card">
                  <div class="card-header"><h5 style="font-weight:600"><i data-feather="plus" class="iconFeather"></i> Üye ekle</h5></div>
                  <div class="card-body">
                    <div id="alert-danger">
                      
                    </div>
                    <form action="" id="formRegister" method="post">
                        <div class="form-group">
                          <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1"><i data-feather="user" style="width: 17px;"></i></span>
                            <input type="text" name="kullanici_adi" class="form-control" placeholder="Kullanıcı adı" aria-label="Username" aria-describedby="basic-addon1" required="">
                          </div>
                        </div>

                        <div class="form-group">
                          <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1"><i data-feather="mail" style="width: 17px;"></i></span>
                            <input type="text" name="eposta" class="form-control" placeholder="E-mail adresi" aria-label="Username" aria-describedby="basic-addon1" required="">
                          </div>
                        </div>

                        <div class="form-group">
                          <div class="row">
                            <div class="col-md-4">
                              <div class="input-group">
                                 <span class="input-group-text" id="basic-addon1"><i data-feather="globe" style="width: 17px;"></i></span>
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
                                 <span class="input-group-text" id="basic-addon1"><i data-feather="phone" style="width: 17px;"></i></span>
                                <input type="text" name="phone" class="form-control" placeholder="Cep Telefonu" aria-label="Username" aria-describedby="basic-addon1" required="">
                              </div>
                            </div>
                          </div>
                        </div>

                        <div class="form-group">
                          <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1"><i data-feather="lock" style="width: 17px;"></i></span>
                            <input type="password" name="password" class="form-control" placeholder="Şifre" aria-describedby="basic-addon1" required="">
                          </div>
                        </div>

                        <div class="form-group">
                          <button class="btn btn-primary"><i data-feather="user-plus" class="iconFeather"></i> <span>KAYIT ET</span></button>
                        </div>
                    </form>     
                  </div>
                </div>
              
            </div>


        </div>
      </div>
     
    </div>

      </div><!-- /.container-fluid -->
    </section>

</div>







<?php $this->load->view('admin/footer')?>