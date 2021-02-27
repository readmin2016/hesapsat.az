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
        <h5><b>V.I.P</b> Fiyat</h5>
      </div>
      <div class="card-body">
        <div class="row justify-content-md-center">


            <div class="col-md-8">
              <?php

              $result = $this->process_model->vip_price_control();
              foreach ($price_list as $row) {
                # code...
              }
                if($result==1){ ?>

                  <div class="card">
                    <div class="card-header"><h5 style="font-weight:600"><i data-feather="edit" class="iconFeather"></i> Düzenle</h5></div>
                    <div class="card-body">
                      <form action="<?=base_url('uyeler/edit_price')?>" method="post">
                        <div class="form-group">
                         <input type="number" name="price" class="form-control" value="<?=$row->price?>" required="">
                        </div>
                        <div class="form-group">
                          <button class="btn btn-primary"><i data-feather="save" class="iconFeather"></i> Düzenle</button>
                          <a href="<?=base_url('uyeler/removePrice?remove='.$row->p_id)?>" class="btn btn-danger"><i data-feather="trash" class="iconFeather"></i> Sil ve yeniden oluştur</a>
                        </div>
                    </form>    
                    </div>
                  </div>

              <?php  }else{ ?>

                <div class="card">
                  <div class="card-header"><h5 style="font-weight:600"><i data-feather="plus" class="iconFeather"></i> Yeni Fiyat ekle</h5></div>
                  <div class="card-body">
                    <form action="<?=base_url('uyeler/add_price')?>" method="post">
                        <div class="form-group">
                         <input type="number" name="price" class="form-control" placeholder="99 TL" required="">
                        </div>
                        <div class="form-group" id="extraTerms"></div>
                        <div class="form-group">
                          <button class="btn btn-primary"><i data-feather="save" class="iconFeather"></i> Ekle</button>
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