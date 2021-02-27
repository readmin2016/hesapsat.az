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
		    <i data-feather="activity" class="iconFeather"></i>
		    <h5>Havale/EFT komisyon ayarları</h5>
		  </div>
		  <div class="card-body">
        <div class="row justify-content-md-center">
          <div class="col-md-6">
            <?php
              $rows = $this->db->where(array('pay_id'=>2))->get('payment')->result();
              foreach ($rows as $p) {
                # code...
              }
            ?>
            
            <h4>Havale/EFT için komisyon belirleyin</h4>
            <br>
              <form action="<?=base_url('banka/komisyon')?>" method="post">
                <input type="hidden" name="payname" value="papara">
                <div class="form-group">
                  <div class="input-group mb-3">
                     <span class="input-group-text" id="basic-addon1"><i data-feather="activity" style="width:17px;"></i></span>
                     <input type="text" name="komisyon" class="form-control" value="<?=$p->komisyon?>" placeholder="3%"  aria-describedby="basic-addon1" required="">
                  </div>
                </div>
                  <div class="form-group">
                    <button class="btn btn-primary"><i data-feather="save" class="iconFeather"></i> Kaydet</button>
                  </div>
                  <input type="hidden" name="bankid" class="form-control" value="<?=$p->pay_id?>">
                
              </form>

            
          </div>
        </div>
		  </div>
		 
		</div>

      </div><!-- /.container-fluid -->
    </section>

</div>




<?php $this->load->view('admin/footer')?>