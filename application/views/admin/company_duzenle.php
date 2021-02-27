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
        <i data-feather="award" class="iconFeather"></i>
        <h5>Kampanya Düzenleme</h5>
      </div>
      <div class="card-body">
        <div class="row">
          <?php

            foreach ($company_list as $row) {
               if($row->durum > 0){ ?>

                  <form action="<?=base_url('admin/company_update')?>" method="post">
                    <div class="form-group">
                      <label for="" style="font-weight:500">Konu Başlığı</label>
                      <input type="text" name="konu_baslik" value="<?=$row->konu_baslik?>" class="form-control">
                      <input type="hidden" name="id" value="<?=$row->com_id?>" class="form-control">
                    </div>
                    <div class="form-group">
                      <label for="" style="font-weight:500">İçerik</label>
                      <textarea name="texteditor" style="display:none;resize:none"><?=$row->icerik?></textarea>
                    </div>
                    <div class="form-group">
                      <button class="btn btn-primary"><i data-feather="save" class="iconFeather"></i>Düzenle ve Kaydet</button>
                      <a href="<?=base_url('admin/company_delete?sil='.$row->com_id)?>" class="btn btn-danger"><i data-feather="trash" class="iconFeather"></i> Sil</a>
                    </div>
                  </form>

              <?php }else{ ?>
                  <form action="<?=base_url('admin/company_onay')?>" method="post">
                    <div class="form-group">
                      <label for="" style="font-weight:500">Konu Başlığı</label>
                      <input type="text" name="konu_baslik" value="<?=$row->konu_baslik?>" class="form-control">
                      <input type="hidden" name="id" value="<?=$row->com_id?>" class="form-control">
                    </div>
                    <div class="form-group">
                      <label for="" style="font-weight:500">İçerik</label>
                      <textarea name="texteditor" style="display:none;resize:none"><?=$row->icerik?></textarea>
                    </div>
                    <div class="form-group">
                      <button class="btn btn-success"><i data-feather="check" class="iconFeather"></i> Onayla</button>
                      <a href="<?=base_url('admin/company_delete?sil='.$row->com_id)?>" class="btn btn-danger"><i data-feather="trash" class="iconFeather"></i> Sil</a>
                    </div>
                  </form>
              <?php }
            }

          ?>

        </div>
      </div>
     
    </div>

      </div><!-- /.container-fluid -->
    </section>

</div>







<?php $this->load->view('admin/footer')?>