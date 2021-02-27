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
        <a class="active" href="#" style="cursor:no-drop"><span class="angle"></span><i data-feather="file-text" style="margin-top:-3px;"></i> Moderatör yetkisi</a>
        <a href="#" style="cursor:no-drop"><span class="step-indicator"></span><span class="angle"></span><i data-feather="user-plus" style="margin-top:-3px;"></i>&nbsp; Moderatör bilgileri</a>
        </div>

        <form id="mf_form_1" action="<?=base_url('admin/authority')?>" method="post">
        <div class="row">
          <div class="col-lg-12">
            <div class="card">
              <div class="card-header"><h5><i data-feather="users" class="iconFeather"></i> Moderatör yetkisi</h5></div>
              <div class="card-body">
                 <?php
                  foreach ($mdStep as $md) {
                   
                  }
                 ?>
                 <input type="hidden" name="mdID" value="<?=$md->md_id?>">
                 <div class="row">
                  <?php
                    foreach ($mdYetki as $yt) { ?>

                      <div class="col-md-4">
                       <div class="form-group">
                          <input type="checkbox" name="authority[]" value="<?=$yt->md_yetki_id?>" id="extracheckBox">
                          <span for=""><?=$yt->yetki_name?></span>
                        </div>
                     </div>
                      
                  <?php  }
                  ?>

                   <div class="form-group" style="margin-top:20px;">
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <button class="btn btn-primary"><i data-feather="save" class="iconFeather"></i> Kaydet ve Devam et</button>
                  </div>
                  </div>
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