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
        <i data-feather="globe" class="iconFeather"></i>
        <h5><b>SEO</b> Araçları</h5>
        <a href="<?=base_url('admin/seo')?>" id="newBtn" style=""><i data-feather="plus" class="iconFeather"></i> Yeni ekle</a>
      </div>
      <div class="card-body">
        <div class="row">
            <div class="col-md-6">
              <div class="card">
                <div class="card-header"><h5 style="font-weight:600"><i style="color:green" data-feather="check" class="iconFeather"></i> Ayarla</h5></div>
                   
                   <div class="card-body">

                    <?php
                      foreach ($seos as $seo) {
                        # code...
                      }
                      $result = $this->process_model->seo_control();
                      if($result==1){ ?>

                        <form action="<?=base_url('admin/refresh_seo')?>" method="post">

                          <div class="form-group">
                            <label for="" style="font-weight:500">Dil</label>
                            <select name="lang" class="form-control" id="dc_select">
                              <option value="Turkish" selected>Türkçe</option>
                            </select>
                          </div>

                          <div class="form-group">
                            <label for="" style="font-weight:500">Site Adı</label>
                            <input type="text" name="site_name" class="form-control" value="<?=$seo->site_adi?>">
                          </div>

                          <div class="form-group">
                            <label for="" style="font-weight:500">Ana Sayfa Adı</label>
                            <input type="text" name="page_name" class="form-control" value="<?=$seo->sayfa_adi?>">
                          </div>

                          <div class="form-group">
                            <label for="" style="font-weight:500">Site Açıklaması</label>
                            <input type="text" name="description" class="form-control" value="<?=$seo->aciklama?>">
                          </div>

                          <div class="form-group">
                            <label for="" style="font-weight:500">Anahtar kelimeler</label>
                            <textarea name="seo_key" class="form-control" id="" cols="20" rows="10"><?=$seo->seo_key?></textarea>
                          </div>

                          <div class="form-group">
                            <button class="btn btn-primary"><i data-feather="edit" class="iconFeather"></i> Düzenle</button>
                          </div>

                         </form>

                    <?php  }else{ ?>

                      <form action="<?=base_url('admin/add_seo')?>" method="post">

                        <div class="form-group">
                          <label for="" style="font-weight:500">Dil</label>
                          <select name="lang" class="form-control" id="dc_select">
                            <option value="Turkish" selected>Türkçe</option>
                          </select>
                        </div>

                        <div class="form-group">
                          <label for="" style="font-weight:500">Site Adı</label>
                          <input type="text" name="site_name" class="form-control" placeholder="ilansat.net">
                        </div>

                        <div class="form-group">
                          <label for="" style="font-weight:500">Ana Sayfa Adı</label>
                          <input type="text" name="page_name" class="form-control" placeholder="ana sayfa adı - ilansat.net">
                        </div>

                        <div class="form-group">
                          <label for="" style="font-weight:500">Site Açıklaması</label>
                          <input type="text" name="description" class="form-control" placeholder="Hesapların satılması">
                        </div>

                        <div class="form-group">
                          <label for="" style="font-weight:500">Anahtar kelimeler</label>
                          <textarea name="seo_key" class="form-control" id="" cols="20" rows="10"></textarea>
                        </div>

                        <div class="form-group">
                          <button class="btn btn-primary"><i data-feather="save" class="iconFeather"></i> Ekle</button>
                        </div>

                       </form>

                    <?php  }
                    ?>

                     
                   </div>

              </div>
            </div>


            <div class="col-md-8">
              
              
            </div>


        </div>
      </div>
     
    </div>

      </div><!-- /.container-fluid -->
    </section>

</div>







<?php $this->load->view('admin/footer')?>