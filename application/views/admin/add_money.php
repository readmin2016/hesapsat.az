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
        <i data-feather="credit-card" class="iconFeather"></i>
        <h5>Bakiye ekleme</h5>
      </div>
      <div class="card-body">
        <div class="row justify-content-md-center">


            <div class="col-md-7">
              <?php

              $result = $this->process_model->bakiye_control();
              foreach ($bakiye as $row) {
                # code...
              }
                if($result==1){ ?>

                  <div class="card">
                    <div class="card-header"><h5 style="font-weight:600"><i data-feather="edit" class="iconFeather"></i> Düzenle</h5></div>
                    <div class="card-body">
                        
                    </div>
                  </div>

              <?php  }else{ ?>

                <div class="card">
                  <div class="card-header"><h5 style="font-weight:600"><i data-feather="plus" class="iconFeather"></i> Bakiye ekle</h5></div>
                  <div class="card-body">
                    <form action="<?=base_url('#')?>" method="post">
                        <div class="input-group mb-3">
                          <span class="input-group-text" id="basic-addon1"><i data-feather="user" style="width: 15px"></i></span>
                          <select class="form-select" id="inputGroupSelect01" required>
                            <option value="" selected>Bir Kullanıcı seç</option>
                            <?php
                              foreach ($user_list as $u_list) {
                                echo '<option value="'.$u_list->user_id.'">'.$u_list->kullanici_adi.'</option>';
                              }
                            ?>
                          </select>
                        </div>
                        <div class="input-group mb-3">
                          <span class="input-group-text" id="basic-addon1"><i data-feather="credit-card" style="width: 15px"></i></span>
                          <input type="number" class="form-control" placeholder="Bakiye" aria-describedby="basic-addon1">
                        </div>

                        <div class="form-group">
                          <button class="btn btn-primary"><i data-feather="save" class="iconFeather"></i> Yatır</button>
                        </div>
                    </form>     
                  </div>
                </div>

              <?php  }
              ?>
              
            </div>


        </div>
      </div>
     
    </div>

      </div><!-- /.container-fluid -->
    </section>

</div>







<?php $this->load->view('admin/footer')?>