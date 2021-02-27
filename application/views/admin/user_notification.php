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
        <i data-feather="bell" class="iconFeather"></i>
        <h5>Üye uyarıları</h5>
        <a href="<?=base_url('admin/user_notification')?>" id="newBtn" style=""><i data-feather="plus" class="iconFeather"></i> Yeni ekle</a>
      </div>
      <div class="card-body">
        <div class="row">
            <div class="col-md-4">
              <div class="card">
                <div class="card-header"><h5 style="font-weight:600"><i style="color:green" data-feather="check" class="iconFeather"></i> Eklenenler</h5></div>
                   <div class="list-group eklenenCard">
                      <?php
                        foreach ($uyari_list as $row) {
                          $limit = mb_substr($row->icerik,0,150);
                          echo '<a href="'.base_url('admin/user_notification?duzenle='.$row->uyari_id).'" class="list-group-item list-group-item-action" title="Düzenle">
                                <div class="d-flex w-100 justify-content-between">
                                  <h5 class="mb-1">'.$row->baslik.'</h5>
                                </div>
                                <p>'.$limit.'</p>
                                <small>'.alert_time($row->tarih).'</small>
                              </a>';
                        }
                      ?>
                    </div>
              </div>
            </div>


            <div class="col-md-8">
              <?php
                if(isset($_GET['duzenle'])){
                  $notification = $this->db->where(array('uyari_id'=>$_GET['duzenle']))->get('uyarilar')->result();
                  foreach ($notification as $row) {}
                 ?>

                  <div class="card">
                    <div class="card-header"><h5 style="font-weight:600"><i data-feather="edit" class="iconFeather"></i> Düzenle</h5></div>
                    <div class="card-body">
                      <form action="<?=base_url('uyeler/update_notification')?>" method="post">
                          <div class="form-group">
                            <select name="kullanici" class="form-control" id="dc_select" required>
                              <option value="" slected>Kullanıcı seç</option>
                              <option value="all" >Tüm kullanıcılara</option>
                              <?php
                                foreach ($userList as $user) {
                                  if($user->user_id == $row->user_id){
                                    echo '<option selected value="'.$user->user_id.'">'.$user->kullanici_adi.'</option>';
                                  }else{
                                    echo '<option value="'.$user->user_id.'">'.$user->kullanici_adi.'</option>';
                                  }
                                  
                                }
                              ?>
                            </select>
                          </div>
                          <div class="form-group">
                           <input type="text" name="konu_baslik" class="form-control" value="<?=$row->baslik?>" required="">
                           <input type="hidden" name="id" class="form-control" value="<?=$row->uyari_id?>" required="">
                          </div>
                          <div class="form-group">
                            <textarea style="display:none" name="texteditor" class="form-control" col="5" rows="5" required=""><?=$row->icerik?></textarea>
                          </div>
                          <div class="form-group">
                            <button class="btn btn-primary"><i data-feather="save" class="iconFeather"></i> Kaydet</button>
                            <a href="<?=base_url('uyeler/delete_notification?sil='.$row->uyari_id)?>" class="btn btn-danger"><i data-feather="trash" class="iconFeather"></i> Sil</a>
                          </div>
                      </form>     
                    </div>
                  </div>

              <?php  }else{ ?>

                <div class="card">
                  <div class="card-header"><h5 style="font-weight:600"><i data-feather="plus" class="iconFeather"></i> Yeni ekle</h5></div>
                  <div class="card-body">
                    <form action="<?=base_url('uyeler/create_notification')?>" method="post">
                          <div class="form-group">
                            <select name="kullanici" class="form-control" id="dc_select">
                              <option value="" slected>Kullanıcı seç</option>
                              <option value="all" >Tüm kullanıcılara</option>
                              <?php
                                foreach ($userList as $user) {
                                  echo '<option value="'.$user->user_id.'">'.$user->kullanici_adi.'</option>';
                                }
                              ?>
                            </select>
                          </div>
                        <div class="form-group">
                         <input type="text" name="konu_baslik" class="form-control" placeholder="Konu Başlık" required="">
                        </div>
                        <div class="form-group">
                          <textarea style="display:none" name="texteditor" class="form-control" col="5" rows="5" required=""></textarea>
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