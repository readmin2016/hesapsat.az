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
        <i data-feather="help-circle" class="iconFeather"></i>
        <h5><b>SSS</b> Sorulan Sorular</h5>
        <a href="<?=base_url('admin/faq')?>" id="newBtn" style=""><i data-feather="plus" class="iconFeather"></i> Yeni ekle</a>
      </div>
      <div class="card-body">
        <div class="row">
            <div class="col-md-4">
              <div class="card">
                <div class="card-header"><h5 style="font-weight:600"><i style="color:green" data-feather="check" class="iconFeather"></i> Eklenenler</h5></div>
                   <div class="list-group eklenenCard">
                      <?php
                        foreach ($faqlist as $row) {
                          $limit = mb_substr($row->faq_cevap,0,150);
                          echo '<a href="'.base_url('admin/faq?duzenle='.$row->faq_id).'" class="list-group-item list-group-item-action" title="Düzenle">
                                <div class="d-flex w-100 justify-content-between">
                                  <h5 class="mb-1">'.$row->faq_soru.'</h5>
                                </div>
                                <p>'.$limit.'</p>
                              </a>';
                        }
                      ?>
                    </div>
              </div>
            </div>


            <div class="col-md-8">
              <?php
                if(isset($_GET['duzenle'])){ 
                  $faqlist = $this->db->where(array('faq_id'=>$_GET['duzenle']))->get('faq')->result();
                  foreach ($faqlist as $row) {
                    # code...
                  }
                  ?>

                  <div class="card">
                    <div class="card-header"><h5 style="font-weight:600"><i data-feather="edit" class="iconFeather"></i> Düzenle</h5></div>
                    <div class="card-body">
                      <form action="<?=base_url('admin/updateSSS')?>" method="post">
                          <div class="form-group">
                           <input type="text" name="soru_baslik" class="form-control" value="<?=$row->faq_soru?>" required="">
                           <input type="hidden" name="faqid" class="form-control" value="<?=$row->faq_id?>" required="">
                          </div>
                          <div class="form-group">
                            <textarea name="texteditor" class="form-control" col="5" rows="5" required=""><?=$row->faq_cevap?></textarea>
                          </div>
                          <div class="form-group">
                            <button class="btn btn-primary"><i data-feather="save" class="iconFeather"></i> Kaydet</button>
                            <a href="<?=base_url('admin/faq_delete?sil='.$row->faq_id)?>" class="btn btn-danger"><i data-feather="trash" class="iconFeather"></i> Sil</a>
                          </div>
                      </form>     
                    </div>
                  </div>

              <?php  }else{ ?>

                <div class="card">
                  <div class="card-header"><h5 style="font-weight:600"><i data-feather="plus" class="iconFeather"></i> Yeni ekle</h5></div>
                  <div class="card-body">
                    <form action="<?=base_url('admin/addSSS')?>" method="post">
                        <div class="form-group">
                         <input type="text" name="soru_baslik" class="form-control" placeholder="Soru Başlık" required="">
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