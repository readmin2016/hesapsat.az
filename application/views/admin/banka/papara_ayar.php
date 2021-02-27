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
		    <h5>Papara ayarları</h5>
		  </div>
		  <div class="card-body">
        <div class="row justify-content-md-center">
          <div class="col-md-6">
            <h4>Papara Numarası</h4>
            <?php
              $result = $this->process_model->odeme_control();
              foreach ($odeme as $row) {
                # code...
              }
              if($result==1){ ?>

                <form action="<?=base_url('banka/edit_odemeYontemi')?>" method="post">
                  <input type="hidden" name="payname" value="<?=$row->odeme_name?>">
                  <input type="hidden" name="odemeID" value="<?=$row->odeme_id?>">
                  <div class="form-group">
                    <div class="input-group mb-3">
                       <span class="input-group-text" id="basic-addon1"><i data-feather="credit-card" style="width:17px;"></i></span>
                       <input type="number" name="numara" class="form-control" value="<?=$row->odeme_numarasi?>"  aria-describedby="basic-addon1" required="">
                    </div>
                    <div class="form-group">
                      <label for="" style="font-style:500">Papara açıklama</label>
                      <textarea name="texteditor" style="display:none"><?=$row->odeme_aciklamasi?></textarea>
                    </div>
                    <div class="form-group">
                      <button class="btn btn-primary"><i data-feather="edit" class="iconFeather"></i> Düzenle</button>
                    </div>
                  </div>
                </form>

            <?php  }else{ ?>

              <form action="<?=base_url('banka/add_odemeYontemi')?>" method="post">
                <input type="hidden" name="payname" value="papara">
                <div class="form-group">
                  <div class="input-group mb-3">
                     <span class="input-group-text" id="basic-addon1"><i data-feather="credit-card" style="width:17px;"></i></span>
                     <input type="number" name="numara" class="form-control" placeholder="12546699"  aria-describedby="basic-addon1" required="">
                  </div>
                  <div class="form-group">
                    <label for="" style="font-style:500">Papara açıklama</label>
                    <textarea name="texteditor" style="display:none"></textarea>
                  </div>
                  <div class="form-group">
                    <button class="btn btn-primary"><i data-feather="save" class="iconFeather"></i> Kaydet</button>
                  </div>
                </div>
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