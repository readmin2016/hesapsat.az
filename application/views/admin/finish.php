<?php $this->load->view('admin/header')?>

<div class="content-wrapper">
<section class="content" style="margin-top:10px;">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <?php
      $this->load->view('admin/counter')
    ?>


        <div class="checkout-steps hidden-xs-down">
        <a class="active" href="#" style="cursor:no-drop"><i data-feather="award" style="margin-top:-3px;"></i> Moderatör vazifesi</a>
        <a  href="#" style="cursor:no-drop"><span class="angle"></span><i data-feather="file-text" style="margin-top:-3px;"></i> Moderatör yetkisi</a>
        <a href="#" style="cursor:no-drop"><span class="step-indicator"></span><span class="angle"></span><i data-feather="user-plus" style="margin-top:-3px;"></i>&nbsp; Moderatör bilgileri</a>
        </div>

        <form id="mf_form_1" action="<?=base_url('admin/process_end')?>" method="post">
        <div class="row">
          <div class="col-lg-12">
            <div class="card">
              <div class="card-header"><h5><i data-feather="users" class="iconFeather"></i> Moderatör vazifesi</h5></div>
              <div class="card-body">
                 <?php
                  foreach ($mdStep as $md) {
                   
                  }
                                   ?>
                 <input type="hidden" name="mdID" value="<?=$md->md_id?>">
                 <div class="row">
                  <?php
                    foreach ($vazifeler as $vz) { ?>
                    <div class="col-md-3">
                      <div class="form-group">
                        <input type="radio" name="vazife" value="<?=$vz->vz_name?>" id="extracheckBox" checked>
                        <span for=""><?=$vz->vz_name?></span>
                      </div>
                    </div>
                 <?php }

                  ?>
                  
                   <div class="form-group" style="margin-top:20px;">
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <button class="btn btn-primary"><i data-feather="save" class="iconFeather"></i> Kaydet ve Bitir</button>
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