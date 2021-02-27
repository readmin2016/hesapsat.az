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
        <h5><b>İletişim</b> Ayarları</h5>
      </div>
      <div class="card-body">
        <div class="row">
            <div class="col-md-6">
              <div class="card">
                <div class="card-header"><h5 style="font-weight:600"><i style="color:green" data-feather="check" class="iconFeather"></i> Ayarla</h5></div>
                   
                   <div class="card-body">
                    <?php
                      foreach ($contact as $cn) {
                        # code...
                      }
                      $result = $this->process_model->contact_control();
                      if($result==1){ ?>
                        

                        <form action="<?=base_url('admin/update_contactForm')?>" method="post">
                          <div class="form-group">
                            <label for="" style="font-weight:500"><i data-feather="phone" class="iconFeather"></i> Telefon</label>
                            <input type="number" name="phone" class="form-control" value="<?=$cn->contact_phone?>" required="">
                          </div>

                          <div class="form-group">
                            <label for="" style="font-weight:500"><i class="fab fa-whatsapp"></i> WhatsApp</label>
                            <input type="number" value="<?=$cn->contact_wp?>" name="whatsapp" class="form-control" required="">
                          </div>

                          <div class="form-group">
                            <label for="" style="font-weight:500"><i data-feather="mail" class="iconFeather"></i> E-mail</label>
                            <input type="email" name="email" value="<?=$cn->contact_email?>" class="form-control" required="">
                          </div>

                          <div class="form-group">
                            <label for="" style="font-weight:500">Aciklama</label>
                            <textarea name="aciklama" class="form-control" id="" cols="20" rows="10"><?=$cn->aciklama?></textarea>
                          </div>

                          <div class="form-group">
                            <button class="btn btn-primary"><i data-feather="refresh-ccw" class="iconFeather"></i> Düzenle</button>
                          </div>


                         </form>


                     <?php }else{ ?>


                        <form action="<?=base_url('admin/add_contactForm')?>" method="post">

                          <div class="form-group">
                            <label for="" style="font-weight:500"><i data-feather="phone" class="iconFeather"></i> Telefon</label>
                            <input type="number" name="phone" class="form-control" required="">
                          </div>

                          <div class="form-group">
                            <label for="" style="font-weight:500"><i class="fab fa-whatsapp"></i> WhatsApp</label>
                            <input type="number" name="whatsapp" class="form-control" required="">
                          </div>

                          <div class="form-group">
                            <label for="" style="font-weight:500"><i data-feather="mail" class="iconFeather"></i> E-mail</label>
                            <input type="email" name="email" class="form-control" required="">
                          </div>

                          <div class="form-group">
                            <label for="" style="font-weight:500">Aciklama</label>
                            <textarea name="aciklama" class="form-control" id="" cols="20" rows="10"></textarea>
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