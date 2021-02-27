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
        <i data-feather="plus" class="iconFeather"></i>
        <h5>Yeni İlan Yükle</h5>
      </div>





      <?php
      foreach ($ilan_liste as $ilanlist) {
      }

      if(isset($_GET['step'])){ ?>

        <div class="card-body">
          <div class="content margin-top-2x">
            <div class="checkout-steps hidden-xs-down">
              <a href="#" style="cursor:no-drop"><i data-feather="award" class="icon-award" style="margin-top:-3px;"></i> İşlem Tamam</a>
              <a href="#" class="active" style="cursor:no-drop"><span class="angle"></span><i data-feather="camera" class="icon-camera" style="margin-top:-3px;"></i> Görseller</a>
              <a  href="#" style="cursor:no-drop"><span class="step-indicator"></span><span class="angle"></span><i data-feather="file-text" class="icon-file-text" style="margin-top:-3px;"></i> Bilgiler</a>
            </div>
          </div>
        </div>


        <div class="card margin-bottom-1x">
          <div class="card-header text-bold"><b><i data-feather="file-text"></i> İlan görselleri</b></div>
          <div class="card-body">
            <form action="<?php echo base_url('pages/upload')?>" class="dropzone" method="post">
              <input type="hidden" name="listingid" value="<?=$ilanlist->token?>">
              <input type="hidden" name="userid" value="22">
              <div class="dz-default dz-message">
                <span><i data-feather="upload" style="font-size:50px;"></i><br><br>
                  Dosyalarınızı sürükleyip bırakın ya da bu alana tıklayın!
                </span>
              </div>
            </form>

            <a href="<?php echo base_url('admin/finish?1='.$ilanlist->token)?>" id="btn" class="btn btn-primary btn-rounded fltright" style="margin-top:22px;width:max-content"><i class="icon-save"></i> Devam Et <i data-feather="chevron-right"></i></a>
          </div>

        </div>



        

        <div class="clearfix"></div>



      <?php }else{ ?>





      <div class="card-body" id="orderLabel">
        
          <div class="content margin-top-2x">
            <div class="checkout-steps hidden-xs-down">
              <a href="#" style="cursor:no-drop"><i data-feather="award" class="icon-award" style="margin-top:-3px;"></i> İşlem Tamam</a>
              <a href="#" style="cursor:no-drop"><span class="angle"></span><i data-feather="camera" class="icon-camera" style="margin-top:-3px;"></i> Görseller</a>
              <a class="active" href="#" style="cursor:no-drop"><span class="step-indicator"></span><span class="angle"></span><i data-feather="file-text" class="icon-file-text" style="margin-top:-3px;"></i> Bilgiler</a>
            </div>
          </div>

          <div class="row">
            <div class="col-md-12">

        <form action="<?php echo base_url('pages/add_ilan')?>" method="post" id="addilan-form">
        <?php

         if(isset($_POST['altcategory'])){
           $cat = $_POST['altcategory'];

            switch ($cat) {
              case '106':

                  $this->load->view('admin/form_1');
                break;

              case '107':
                  $this->load->view('admin/form_2');
                break;
              
              default: 

              
              $this->load->view('admin/form_3');
          
              
              break;
               
            }


         }

        ?>
        </form>



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