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
		    <h5>İlan komisyon ayarları</h5>
		  </div>
		  <div class="card-body">
        <div class="row justify-content-md-center">
          <div class="col-md-6">
            <div id="alert-success">
              <center>
                
              </center>
            </div>
            
            <?php
              $result = $this->process_model->komisyon_control();
              foreach ($komisyon as $row) {
                # code...
              }
              if($result==1){ ?>

                <h4>İlanlar için komisyon ayarları</h4>
                <br>
                  <form action="<?=base_url('banka/update_ilanKomisyon')?>" id="addKomisyon" method="post">
                    <input type="hidden" name="komid" value="<?=$row->kom_id?>">
                    <div class="form-group">
                      <div class="input-group mb-3">
                         <span class="input-group-text" id="basic-addon1"><i data-feather="activity" style="width:17px;"></i></span>
                         <input type="number" name="start_komisyon" class="form-control" value="<?=$row->km_start?>" placeholder="3%"  aria-describedby="basic-addon1" required="">
                      </div>
                      <div class="input-group mb-3">
                         <span class="input-group-text" id="basic-addon1"><i data-feather="activity" style="width:17px;"></i></span>
                         <input type="number" name="end_komisyon" value="<?=$row->komisyon?>" class="form-control" placeholder="15%"  aria-describedby="basic-addon1" required="">
                      </div>
                      <div class="form-group">
                        <button class="btn btn-primary"><i data-feather="save" class="iconFeather"></i> Deyişikliği kaydet</button>
                      </div>
                    </div>
                  </form>

            <?php  }else{ ?>

            <h4>İlanlar için komisyon belirleyin</h4>
            <br>
              <form action="<?=base_url('banka/add_ilanKomisyon')?>" id="addKomisyon" method="post">
                <input type="hidden" name="payname" value="papara">
                <div class="form-group">
                  <div class="input-group mb-3">
                     <span class="input-group-text" id="basic-addon1"><i data-feather="activity" style="width:17px;"></i></span>
                     <input type="number" name="start_komisyon" class="form-control" placeholder="3%"  aria-describedby="basic-addon1" required="">
                  </div>
                  <div class="input-group mb-3">
                     <span class="input-group-text" id="basic-addon1"><i data-feather="activity" style="width:17px;"></i></span>
                     <input type="number" name="end_komisyon" class="form-control" placeholder="15%"  aria-describedby="basic-addon1" required="">
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