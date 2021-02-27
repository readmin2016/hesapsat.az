<?php $this->load->view('admin/header')?>
<?php
error_reporting(0);
  foreach ($ilanduzenle as $row) {
  }
  foreach ($adminlist as $admin) {}

  foreach ($user as $users) {
    if($row->userid==$users->user_id){
      $eposta = $users->eposta;
      $username = $users->kullanici_adi;
    }
  }
  foreach ($anacategory as $anacat) {
    
  }
  

?>
<div class="content-wrapper">
<section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <?php
      $this->load->view('admin/counter')
    ?>

       <div class="card">
		  <div class="card-header">
		    <i data-feather="alert-circle" class="iconFeather"></i>
		    <h5>İlan Düzenleme</h5>
		  </div>

		  <div class="card-body">

        <div class="alert alert-danger ilan_hata" style="display:none;border-radius:10px; margin-bottom:10px;">
          <span class="alert-close" data-dismiss="alert"></span>
          <center><b><i data-feather="alert-triangle"></i></b> <span></span></center>
        </div>
		    
        <ul class="nav nav-tabs" id="myTab" role="tablist">
          <li class="nav-item" role="presentation">
            <a class="nav-link active" id="home-tab" data-bs-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true"><i data-feather="file-text" class="iconFeather"></i> Detay</a>
          </li>
          <li class="nav-item" role="presentation">
            <a class="nav-link" id="profile-tab" data-bs-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false"><i data-feather="camera" class="iconFeather"></i> Gorsel</a>
          </li>
        </ul>

<div class="tab-content" id="myTabContent">
  <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
    <form action="<?php echo base_url('admin/update_ilan')?>" method="post" id="updateilan-form">
   
    <div class="row" style="margin-top:10px;">
      <?php
      if($row->ilan_altcategory==106 ||$row->ilan_altcategory==107){ 

      }else{ ?>

    <div class="col-12 margin-bottom-1x">
      <?php
        if($row->ilan_anacategory==10){ ?>

      
      <div class="card">
        <div class="card-header">
          <i data-feather="mail" class="iconFeather"></i>
            Eposta Bilgileri
        </div>
        <div class="card-body">
          <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                <label for="kureposta"><b>Orjinal (ilk)</b> Eposta </label>
                <select id="kureposta" name="kureposta" class="form-control form-control-rounded">
                <option value="">Lütfen Seçiniz</option>
                  <?php
                    if($row->ilk_mail==1){
                      echo '<option value="1" selected>Verilecek</option>
                            <option value="2">Verilmeyecek</option>';
                    }else{
                      echo '<option value="1">Verilecek</option>
                            <option value="2" selected>Verilmeyecek</option>';
                    }
                  ?>
                </select>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                <label for="gereposta"><b>Revert</b> Maili </label>
                <select id="gereposta" name="gereposta" class="form-control form-control-rounded">
                <option value="">Lütfen Seçiniz</option>
                  <?php
                  if($row->revert_mail==1){
                    echo '<option value="1" selected>Verilecek</option>
                          <option value="2">Verilmeyecek</option>';
                  }else{
                    echo '<option value="1">Verilecek</option>
                          <option value="2" selected>Verilmeyecek</option>';
                  }
                ?>
                </select>
                </div>
              </div>
            </div>
        </div>
      </div>

      <?php } 
      ?>

      <div class="card">
      <div class="card-header text-bold"><i data-feather="pie-chart" class="iconFeather"></i> İstatistiksel Bilgiler</div>
      <div class="card-body">
      <div class="row">
      <div class="col-sm-6">
      <div class="form-group">
      <label for="ortakipci"><b>Organik</b> takipçi oranı</label>
      <select id="ortakipci" name="ortakipci" class="form-control form-control-rounded">
        <option value="">Lütfen Seçiniz</option>
        <?php
          foreach ($yuzde as $yuzde1) {
            if($row->org_takipci==$yuzde1->oran_yuzde){
              echo '<option value="'.$yuzde1->oran_yuzde.'" selected>'.$yuzde1->oran_yuzde.'</option>';
            }else{
              echo '<option value="'.$yuzde1->oran_yuzde.'">'.$yuzde1->oran_yuzde.'</option>';
            }
            
          }
        ?>
      </select>
      </div>
      </div>
      <div class="col-sm-6">
      <div class="form-group">
      <label for="turktakipci"><b>Türk</b> takipçi oranı</label>
      <select id="turktakipci" name="turktakipci" class="form-control form-control-rounded">
        <option value="">Lütfen Seçiniz</option>
        <?php
          foreach ($yuzde as $yuzde2) {
            if($row->turk_takipci==$yuzde2->oran_yuzde){
              echo '<option value="'.$yuzde2->oran_yuzde.'" selected>'.$yuzde2->oran_yuzde.'</option>';
            }else{
              echo '<option value="'.$yuzde2->oran_yuzde.'">'.$yuzde2->oran_yuzde.'</option>';
            }
            
          }
        ?>
      </select>
      </div>
      </div>
      <div class="col-sm-6">
      <div class="form-group">
      <label for="kadintakipci"><b>Kadın</b> takipçi oranı</label>
      <select id="kadintakipci" name="kadintakipci" class="form-control form-control-rounded">
        <option value="">Lütfen Seçiniz</option>
        <?php
          foreach ($yuzde as $yuzde3) {
            if($row->kadin_takipci==$yuzde3->oran_yuzde){
              echo '<option value="'.$yuzde3->oran_yuzde.'" selected>'.$yuzde3->oran_yuzde.'</option>';
            }else{
              echo '<option value="'.$yuzde3->oran_yuzde.'">'.$yuzde3->oran_yuzde.'</option>';
            }
            
          }
        ?>
      </select>
      </div>
      </div>
      <div class="col-sm-6">
      <div class="form-group">
      <label for="hicerik">Hesap içeriği?</label>
      <select id="hcerik" name="hesapicerik" class="form-control form-control-rounded">
        <option value="">Lütfen Seçiniz</option>
        <?php
          foreach ($hesab_icerik as $icerik) {
            if($row->hesap_icerik==$icerik->icerik_id){
              echo '<option value="'.$icerik->icerik_id.'" selected>'.$icerik->icerik_name.'</option>';
            }else{
              echo '<option value="'.$icerik->icerik_id.'">'.$icerik->icerik_name.'</option>';
            }
            
          }
        ?>
      </select>
      </div>
      </div>
      </div>
      </div>
      </div>
    </div>


    <div class="col-12 margin-bottom-1x">
      <div class="card">
      <div class="card-header text-bold"><i data-feather="activity" class="iconFeather"></i> Hesap Bilgileri</div>
      <div class="card-body">
      <div class="row">
      <div class="col-sm-6">
      <div class="form-group">
      <label for="hname">Hesap kullanıcı adı</label>
      <input id="hname" name="hesapname" class="form-control" type="text" value="<?=$row->hesap_kullanici_adi?>" placeholder="@Hesap kullanıcı adı">
      </div>
      </div>
      <div class="col-sm-6">
      <div class="form-group">
      <label for="yact">Hesap açılış yılı?</label>
      <select id="yact" name="acilis_yili" class="form-control">
        <option value="">Lütfen Seçiniz</option>
        <?php
          foreach ($hesab_yili as $h_yil) {
            if($row->hesap_acilis_yil==$h_yil->yil){
              echo '<option  value="'.$h_yil->yil.'" selected>'.$h_yil->yil.'</option>';
            }else{
              echo '<option value="'.$h_yil->yil.'">'.$h_yil->yil.'</option>';
            }
            
          }
        ?>
        
      </select>
      </div>
      </div>
      <div class="col-sm-6">
      <div class="form-group">
      <label for="taksay">Takipçi/Abone sayısı</label>
      <input id="taksay" name="takipcisay" class="form-control form-control-rounded" type="number" value="<?=$row->abone_sayi?>" placeholder="Takipçi/Abone sayısı">
      </div>
      </div>
      <div class="col-sm-6">
      <div class="form-group">
      <label for="gonsay">Gönderi sayısı</label>
      <input id="gonsay" name="goderisay" value="<?=$row->gonderi_sayi?>" class="form-control form-control-rounded" type="number" placeholder="Toplam gönderi sayısı">
      </div>
      </div>
      <div class="col-sm-6">
      <div class="form-group">
      <label for="mavitiklimi">Mavi Tikli mi?</label>
      <select id="mavitiklimi" name="mavitiklimi" class="form-control form-control-rounded">
      <option value="">Lütfen Seçiniz</option>
      <?php
        if($row->mavi_tik >0){
          echo '<option value="1" selected>Evet</option>';
          echo '<option value="0">Hayır</option>';
        }else{
          echo '<option value="1">Evet</option>';
          echo '<option value="0" selected>Hayır</option>';
        }
      ?>
      </select>
      </div>
      </div>
      <div class="col-sm-6">
      <div class="form-group">
      <label for="isletmemi">İşletme hesabı mı?</label>
      <select id="isletmemi" name="isletmemi" class="form-control form-control-rounded">
      <option value="">Lütfen Seçiniz</option>
      <?php
        if($row->hesap_durum >0){
          echo '<option value="1" selected>Evet</option>';
          echo '<option value="0" >Hayır</option>';
        }else{
          echo '<option value="1" >Evet</option>';
          echo '<option value="0" selected>Hayır</option>';
        }
      ?>
      </select>
      </div>
      </div>
      <div class="col-sm-6">
      <div class="form-group">
      <label for="engelvarmi">Hesapta engel var mı?</label>
      <select id="engelvarmi" name="engelvarmi" class="form-control form-control-rounded">
      <option value="">Lütfen Seçiniz</option>
      <?php
        if($row->hesap_engel >0){
          echo '<option value="1" selected>Evet</option>';
          echo '<option value="0">Hayır</option>';
        }else{
          echo '<option value="1">Evet</option>';
          echo '<option value="0" selected>Hayır</option>';
        }
      ?>
      </select>
      </div>
      </div>
      <div class="col-sm-6">
      <div class="form-group">
      <label for="engeller">Varsa engeller neler?</label>
      <input id="engeller" name="engeller" value="<?=$row->engel_icerik?>" class="form-control form-control-rounded" type="text" placeholder="Hesaptaki tüm engelleri yazınız">
      </div>
      </div>
      </div>
      </div>
      </div>
    </div>

    <?php  
  }
   ?>

    <?php
      if($row->ilan_altcategory==107){ ?>
        <div class="col-12 margin-bottom-1x">
        <div class="card">
          <div class="card-header text-bold"><i data-feather="activity" class="iconFeather"></i> Hesap Bilgileri</div>
          <div class="card-body">
            <div class="row">
              <div class="col-sm-6">
                <div class="form-group">
                  <label for="hname">Hesap kullanıcı adı</label>
                  <input id="hname" name="hesapname" class="form-control" type="text" value="<?=$row->hesap_kullanici_adi?>" placeholder="@Hesap kullanıcı adı">
                </div>
              </div>
            </div>
          </div>
        </div>
        </div>

    <?php  }else{

      }
    ?>

    <br>
    <div class="col-12 margin-bottom-1x">
      <div class="card">
      <div class="card-header text-bold"><i data-feather="tag" class="iconFeather"></i> Teklif Bilgileri</div>
      <div class="card-body">
      <div class="row">
      <div class="col-sm-6">
      <div class="form-group margin-top-1x">
      <label for="bidaccept"><b><i data-feather="zap" class="iconFeather"></i> Teklife açık mı?</b></label>
      <select id="bidaccept" name="teklife_acik" class="form-control form-control-rounded">
      <?php
        if($row->teklif < 2){
          echo '<option value="1" selected>Teklife Açık</option>';
          echo '<option value="2">Teklife Kapalı</option>';
        }else{
          echo '<option value="2" selected>Teklife Kapalı</option>';
          echo '<option value="1" >Teklife Açık</option>';
        }
      ?>
      </select>
      </div>
      </div>
      <div class="col-sm-6">
      <div class="form-group margin-top-1x">
      <label for="minbidprice"><b><i data-feather="dollar-sign" class="iconFeather"></i> Minimum teklif tutarı - TL</b></label>
      <input id="minbidprice" name="teklif_tutari" value="<?=$row->teklif_tutar?>" class="form-control form-control-rounded" type="number" placeholder="Min teklif tutarı">
      </div>
      </div>
      </div>
      </div>
      </div>
    </div>



    <div class="col-12 margin-bottom-1x">
      <div class="card">
      <div class="card-header text-bold"><i data-feather="file-text" class="iconFeather"></i> İlan Bilgileri</div>
      <div class="card-body">
      <div class="row">
      <div class="col-sm-12">
      <div class="egedanger">
      <div class="egedangeralt">
      <?php
        if($row->ilan_altcategory==106 || $row->ilan_altcategory==107){
            echo '<div class="col-sm-12">
          <div class="form-group">
            <label for="title">İlan Başlığınız</label>
            <input id="title" name="title" class="form-control form-control-rounded" type="text" maxlength="100" value="'.$row->ilan_basligi.'">
          </div>
        </div>';
        }else{

        }
      ?>
      <div class="form-group row col-md-6 col-12 margin-top-1x">
      <label for="price"><b>Satış Fiyatı - TL</b></label>
      <input id="price" name="price" value="<?=$row->satis_fiyat?>" class="form-control form-control-rounded" type="number" placeholder="Satış fiyatını giriniz">
      </div>
      </div>
      </div>
      </div>
      <div class="col-12 margin-bottom-1x">
      <div class="form-group">
      <label for="detail">Detay bilgi</label>
      <textarea id="detail" name="detail" rows="10" class="form-control form-control-rounded"><?=strip_tags($row->detay_bilgi)?></textarea>
      </div>

      <input type="hidden" name="ilanID" value="<?=$row->ilan_id?>">
      <input type="hidden" name="anacategory" value="<?=$row->ilan_anacategory?>">
      <input type="hidden" name="altcategory" value="<?=$row->ilan_altcategory?>">
      <input type="hidden" name="eposta" value="<?=$eposta?>">
      <input type="hidden" name="username" value="<?=$username?>">

      <div class="form-group">
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
          <button class="btn btn-primary"><i data-feather="save" class="iconFeather"></i> Kaydet</button>
        </div>
      </div>  
      </div>
      </div>
      </div>
      </div>
    </div>

    </div>
    </form>
  </div>




  <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab" style="margin-top:15px;">
    <form action="<?php echo base_url('pages/upload')?>" class="dropzone" method="post">
        <input type="hidden" name="listingid" value="<?=$row->token?>">
        <div class="dz-default dz-message">
          <span><i data-feather="upload" style="font-size:50px;"></i><br><br>
            Dosyalarınızı sürükleyip bırakın ya da bu alana tıklayın!
          </span>
        </div>
    </form>
    <br>
    <br>
    <?php
      foreach ($images as $img) {
  //<a href="" class="btns-success"><i data-feather="image"></i></a>
        if($row->token==$img->token){
          echo '<figure class="figure" style="width:190px;margin-right:10px">
            <img src="'.base_url('uploads/'.$img->resim).'" class="figure-img img-fluid rounded" width="190">
            <figcaption class="figure-caption">
            
            <a href="'.base_url('pages/dlt_image/'.$img->resim_id).'" class="btns-danger"><i data-feather="trash"></i></a>
            
            </figcaption>
          </figure>';
        }else{

        }
      }

    ?>

    
     
  </div>

</div>




		  </div>
		 
		</div>

      </div><!-- /.container-fluid -->
    </section>

</div>






<?php $this->load->view('admin/footer')?>