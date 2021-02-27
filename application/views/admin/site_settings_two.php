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
		    <i data-feather="settings" class="iconFeather"></i>
		    <h5><b>Nasıl</b> çalışır</h5>
		  </div>
		  <div class="card-body">
		    <div class="row">
            <div class="col-md-4">
              <div class="card">
                <div class="card-header"><h5 style="font-weight:600"><i style="color:green" data-feather="check" class="iconFeather"></i> Eklenenler</h5></div>
                   <div class="list-group eklenenCard">
                    <?php
                      foreach ($listeopt as $list) {
                         echo '<a href="'.base_url('admin/site_settings_two?duzenle='.$list->op_id).'" class="list-group-item list-group-item-action title="Düzenle">
                            <span class="img" style="display:block;text-align: center;margin-bottom:10px">
                              <img src="'.base_url('assets/images/'.$list->op_gorsel).'" width="100" alt="">
                            </span>
                            <div class="d-flex w-100 justify-content-between">
                              <h5 class="mb-1">'.$list->op_baslik.'</h5>
                            </div>
                            <p class="mb-1">'.$list->op_icerik.'</p>
                          </a>';
                      }
                    ?>
                      

                    </div>
              </div>
            </div>
            <div class="col-md-8">
              <?php
                if(isset($_GET['duzenle'])){ ?>

                  <div class="card">
                    <div class="card-header"><h5 style="font-weight:600"><i data-feather="edit" class="iconFeather"></i> Düzenle</h5></div>
                    <div class="card-body">
                      <form action="<?=base_url('admin/refreshOptionPost')?>" method="post" enctype="multipart/form-data">
                          <div class="form-group">
                           <input type="text" name="baslik" class="form-control" value="<?=$list->op_baslik?>">
                           <input type="hidden" name="post_id" class="form-control" value="<?=$list->op_id?>">
                          </div>
                          <div class="form-group">
                            <input type="file" id="fileupload" name="fileimage" class="form-control">
                            <label for="fileupload" id="up_btn"><i data-feather="camera"></i><br> Görseli değiş <br>
                              <span id="file_text" style="font-weight:normal">198x195</span></label>
                              <?php
                                if($list->op_gorsel==""){
                                  echo '';
                                }else{
                                  echo '<img class="gorsel" src="'.base_url('assets/images/'.$list->op_gorsel).'" width="100" alt="">';
                                }
                              ?>
                           </div>
                          <div class="form-group">
                            <textarea name="icerik" required="" class="form-control" col="5" rows="5" placeholder="İçerik yaz"><?=$list->op_icerik?></textarea>
                          </div>
                          <div class="form-group">
                            <button class="btn btn-primary"><i data-feather="save" class="iconFeather"></i> Kaydet</button>
                            <a href="<?=base_url('admin/optPostDelete?sil='.$list->op_id)?>" class="btn btn-danger"><i data-feather="trash" class="iconFeather"></i> Sil</a>
                          </div>
                      </form>     
                    </div>
                  </div>

               <?php }else{ ?>

              
              <div class="card">
                <div class="card-header"><h5 style="font-weight:600"><i data-feather="plus" class="iconFeather"></i> Yeni ekle</h5></div>
                <div class="card-body">
                  <form action="<?=base_url('admin/addOptionPost')?>" method="post" enctype="multipart/form-data">
                      <div class="form-group">
                       <input type="text" name="baslik" class="form-control" placeholder="Başlık">
                      </div>
                      <div class="form-group">
                        <input type="file" id="fileupload" name="file" class="form-control" required="">
                        <label for="fileupload" id="up_btn"><i data-feather="camera"></i><br> Görsel ekle <br>
                          <span id="file_text" style="font-weight:normal">198x195</span></label>

                       </div>
                      <div class="form-group">
                        <textarea name="icerik" class="form-control" col="5" rows="5" placeholder="İçerik yaz"></textarea>
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