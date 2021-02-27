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
		    <i data-feather="heart" class="iconFeather"></i>
		    <h5><b>Neden</b> ilansat.net</h5>
		  </div>
		  <div class="card-body">
		    <div class="row">
            <div class="col-md-4">
              <div class="card">
                <div class="card-header"><h5 style="font-weight:600"><i style="color:green" data-feather="check" class="iconFeather"></i> Eklenenler</h5></div>
                   <div class="list-group eklenenCard">
                    <?php
                      foreach ($liste as $list) {
                        echo '<form action="'.base_url('admin/site_settings_one/duzenle').'" method="post">
                          <button name="duzenle" class="list-group-item list-group-item-action" title="Düzenle">
                            <input name="id" value="'.$list->id.'" type="hidden">
                            <div class="d-flex w-100 justify-content-between">
                              <h5 class="mb-1">'.$list->baslik.'</h5>
                            </div>
                            <p class="mb-1">'.$list->icerik.'</p>
                          </button>
                          </form>';
                      }
                    ?>
                    </div>
              </div>
            </div>
            <div class="col-md-8">
              <?php

                if(isset($_POST['duzenle'])){ 
                    $rows = $this->db->where(array('id'=>$_POST['id']))->get('neden_biz')->result();
                    foreach ($rows as $row) {
                      # code...
                    }
                   ?>
                  
                  <div class="card">
                    <div class="card-header"><h5 style="font-weight:600"><i data-feather="edit" class="iconFeather"></i> Düzenle</h5></div>
                    <div class="card-body">
                      <form action="<?=base_url('admin/post_refresh')?>" method="post">
                        <input type="hidden" name="id" value="<?=$row->id?>"> 
                          <div class="form-group">
                           <input type="text" name="baslik" class="form-control" value="<?=$row->baslik?>" required>
                          </div>
                          <div class="form-group">
                            <textarea name="icerik" class="form-control" col="5" rows="5" required placeholder="İçerik yaz"><?=$row->icerik?></textarea>
                          </div>
                          <div class="form-group">
                            <button class="btn btn-primary"><i data-feather="save" class="iconFeather"></i> Kaydet</button>
                            <a href="<?=base_url('admin/post_delete?sil='.$row->id)?>" class="btn btn-danger"><i data-feather="trash" class="iconFeather"></i> Sil</a>
                          </div>
                      </form>     
                    </div>
                  </div>


              <?php  }else{ ?>

                  <div class="card">
                    <div class="card-header"><h5 style="font-weight:600"><i data-feather="plus" class="iconFeather"></i> Yeni ekle</h5></div>
                    <div class="card-body">
                      <form action="<?=base_url('admin/addPost')?>" method="post">
                          <div class="form-group">
                           <input type="text" name="baslik" class="form-control" placeholder="Başlık" required>
                          </div>
                          <div class="form-group">
                            <textarea name="icerik" class="form-control" col="5" rows="5" required placeholder="İçerik yaz"></textarea>
                          </div>
                          <div class="form-group">
                            <button class="btn btn-primary"><i data-feather="save" class="iconFeather"></i> Ekle</button>
                          </div>
                      </form>     
                    </div>
                  </div>

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