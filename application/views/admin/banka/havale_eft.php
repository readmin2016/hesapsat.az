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
		    <h5>Havale/EFT ayarları</h5>
		  </div>
		  <div class="card-body">
        <div class="row justify-content-md-start">
          <div class="col-md-6">
            
              <form action="<?=base_url('banka/add_havale')?>" method="post" enctype="multipart/form-data">
                <input type="hidden" name="payname" value="ininal">
                <div class="form-group">
                  <div class="input-group mb-3">
                     <span class="input-group-text" id="basic-addon1"><i class="fas fa-university"></i></span>
                     <input type="text" name="bank_name" class="form-control" placeholder="Banka adı"  aria-describedby="basic-addon1" required="">
                  </div>

                  <div class="input-group mb-3">
                     <span class="input-group-text" id="basic-addon1"><i data-feather="credit-card" style="width:17px;"></i></span>
                     <input type="number" name="kart_numarasi" class="form-control" placeholder="Kart Numarası"  aria-describedby="basic-addon1" required="">
                  </div>

                  <div class="input-group mb-3">
                     <span class="input-group-text" id="basic-addon1"><i data-feather="user" style="width:17px;"></i></span>
                     <input type="text" name="kart_sahibi" class="form-control" placeholder="Kart Sahibi"  aria-describedby="basic-addon1" required="">
                  </div>
                </div>

                  <div class="form-group">
                    <label for="" style="font-weight:500">Bnanka logosu</label>
                    <input type="file" name="file" class="form-control">
                  </div>


                  <div class="form-group">
                    <label for="" style="font-weight:500">Açıklama</label>
                    <textarea name="texteditor" style="display:none"></textarea>
                  </div>
                  <div class="form-group">
                    <button class="btn btn-primary"><i data-feather="save" class="iconFeather"></i> Kaydet</button>
                  </div>
                </div>
              </form>

              <div class="col-md-6">
                 <div class="row">
                   
                    <?php
                       foreach ($havale_isleri as $row) { ?>
                        <div class="col-md-6">
                        <div class="card">
                         <div id="imageHeader" class="card-header" style="background-image:url(<?=base_url('assets/images/bank/'.$row->bank_image)?>)"></div>
                         <div class="card-body">
                           <h4 class="card-title"><b><?=$row->banka_name?></b></h4>
                           <br>              
                            <?=$row->user_name?>
                            <br>
                            <small>TR <?=$row->kart_number?></small>
                            <a href="<?=base_url('banka/deleteCard/'.$row->eft_id)?>" class="btn btn-danger" style="padding:3px;margin-top:10px;"><i data-feather="trash" class="iconFeather"></i> Hesabı sil</a>
                         </div>
                       </div>
                       </div>
                        
                  <?php }
                    ?>
                   
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