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
        <h5>Bizden <b>Duyurular</b></h5>
        <a href="<?=base_url('admin/our_notification')?>" id="newBtn" style=""><i data-feather="plus" class="iconFeather"></i> Yeni ekle</a>
      </div>
      <div class="card-body">
        <div class="row">
            <div class="col-md-4">
              <div class="card">
                <div class="card-header"><h5 style="font-weight:600"><i style="color:green" data-feather="check" class="iconFeather"></i> Eklenenler</h5></div>
                   <div class="list-group eklenenCard">
                      <?php
                        foreach ($our_notification as $row) {
                          $limit = mb_substr($row->d_icerik,0,150);
                          echo '<a href="'.base_url('admin/our_notification?duzenle='.$row->d_id).'" class="list-group-item list-group-item-action" title="Düzenle">
                                <div class="d-flex w-100 justify-content-between">
                                  <h5 class="mb-1">'.$row->d_baslik.'</h5>
                                </div>
                                <p>'.$limit.'...</p>
                                <small>'.alert_time($row->d_tarih).'</small>
                              </a>';
                        }
                      ?>
                    </div>
              </div>
            </div>


            <div class="col-md-8">
              <?php
                if(isset($_GET['duzenle'])){ 
                  $our_notification = $this->db->where(array('d_id'=>$_GET['duzenle']))->get('duyurular')->result();
                  foreach ($our_notification as $row) {}
                  ?>

                  <div class="card">
                    <div class="card-header"><h5 style="font-weight:600"><i data-feather="edit" class="iconFeather"></i> Düzenle</h5></div>
                    <div class="card-body">
                      <form action="<?=base_url('admin/update_ournotification')?>" method="post">
                          <div class="form-group">
                           <input type="text" name="konu_baslik" class="form-control" value="<?=$row->d_baslik?>" required="">
                           <input type="hidden" name="d_id" class="form-control" value="<?=$row->d_id?>" required="">
                          </div>
                          <div class="form-group">
                            <textarea name="texteditor" class="form-control" col="5" rows="5" required=""><?=$row->d_icerik?></textarea>
                          </div>
                          <div class="form-group">
                            <button class="btn btn-primary"><i data-feather="save" class="iconFeather"></i> Kaydet</button>
                            <a href="<?=base_url('admin/delete_ournotification?sil='.$row->d_id)?>" class="btn btn-danger"><i data-feather="trash" class="iconFeather"></i> Sil</a>
                          </div>
                      </form>     
                    </div>
                  </div>

              <?php  }else{ ?>

                <div class="card">
                  <div class="card-header"><h5 style="font-weight:600"><i data-feather="plus" class="iconFeather"></i> Yeni ekle</h5></div>
                  <div class="card-body">
                    <form action="<?=base_url('admin/create_ournotification')?>" method="post">
                        <div class="form-group">
                         <input type="text" name="konu_baslik" class="form-control" placeholder="Konu Başlık" required="">
                        </div>
                        <div class="form-group">
                          <textarea name="texteditor" class="form-control" col="5" rows="5" required=""></textarea>
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