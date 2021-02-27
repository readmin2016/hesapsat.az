<?php $this->load->view('include/header')?>
<div class="se-pre-con" id="se-pre-con"></div>

  <div class="dc_content">
    <div class="dc_1">
      <h1><span>Sosyal Medya hesaplarını</span>
        <span>güvenle alın veya satın</span>
      </h1>
    </div>
    <div class="dc_1">
      <div class="container">
        ilansat.net; instagram, youtube, facebook, twitter ve tiktok gibi sosyal medya hesaplarının aracılık usulü ile transferlerinin gerçekleştirildiği, hem alıcının hem de satıcının korunduğu güvenilir bir pazar yeridir.
      </div>
    </div>
    <div class="dc_1">
      <div class="container">
        <form action="">
         <div class="formBox">
           <input type="text" placeholder="Ne aramistiz?">
           <button class="btn btn-warning dc-btn">Hadi ara</button>
         </div>
      </form>
      </div>
    </div>
  </div>

</section>

<section>
  <div class="container">
    <h2 id="consection"><span data-feather="heart" id="m-icon"></span><strong>Neden</strong> Ilansat.net?</h2>
    <div class="row">
      <?php
        foreach ($website as $w) {
          echo '<div class="col-md-4">
                  <span>'.$w->baslik.'</span>
                  <p>'.$w->icerik.'</p>
                </div>';
        }
      ?>

    </div>
    <hr>

    <div class="yt-video">
      <a href="">Tanitim videosu</a>
      <img src="https://hesapsat.net/img/tanitim.jpg" alt="">
    </div>
  </div>
</section>


<section>
  <div class="container">
    <h2 id="consection"><span data-feather="file-text" id="m-icon"></span> Sponsorlu<strong> Satıcılar</strong></h2>
    <div class="row">
      <?php
        foreach ($uyeler as $user) {
          $userid = $user->user_id;
          $resultIlan = $this->process_model->user_ilan_control($userid);



          foreach ($ilanlar as $ilan) {

            foreach ($altcategory as $altcat) {
                if($ilan->ilan_altcategory==$altcat->value){
                  $url = mb_strtolower($altcat->ish_name);
                  
                }
              }
              $find = array('I','ı');
              $replace = array('i','i');
              $url = strtolower(str_replace($find, $replace, $url));
              $param = str_replace(" ", "-", $url);
            
          
          if($user->kullanici_durum==1){

            echo '<div class="col-md-3">
                  <div class="elan-box">
                    <div class="box-body">';
                    if($resultIlan > 0){

                      echo '<span id="spn-success">'.$ilan->satis_fiyat.' TL</span>
                      <div class="boxProfile">
                        <div class="pr-image">';
                        if($user->kullanici_resim !==""){
                          echo '<img style="height:120px;" class="d-block w-150 mx-auto img-thumbnail rounded-circle mb-2" src="'.base_url('user_profile/'.$user->kullanici_resim).'">';
                        }else{
                          echo '<img class="d-block w-150 mx-auto img-thumbnail rounded-circle mb-2" src="'.base_url('assets/images/default.png').'">';
                        }
                        echo'</div>
                        <div class="pr-name">'.$user->kullanici_adi.'</div>
                        <div class="pr-desc">
                          <p>Satılık 122K takipçili Instagram Hesabı</p>
                          <a href="'.base_url('category/').$url.'/'.$param.'/'.$ilan->token.'">incele</a>
                        </div>
                     ';

                    }else{

                      echo '<span id="spn-success">*** TL</span>
                      <div class="boxProfile">
                        <div class="pr-image">';
                        if($user->kullanici_resim !==""){
                          echo '<img style="height:120px;" class="d-block w-150 mx-auto img-thumbnail rounded-circle mb-2" src="'.base_url('user_profile/'.$user->kullanici_resim).'">';
                        }else{
                          echo '<img class="d-block w-150 mx-auto img-thumbnail rounded-circle mb-2" src="'.base_url('assets/images/default.png').'">';
                        }
                        echo'</div>
                        <div class="pr-name">'.$user->kullanici_adi.'</div>
                        <div class="pr-desc">
                          <p>Uyenin su an aktif bir ilani bulunmamaktadir</p>
                          <a id="nodrop" href="javascript:void(0)" style="cursor:no-drop">incele</a>
                        </div>
                      ';
                    }

                  echo'</div>
                  </div>
                    <div class="box-footer">
                    <i data-feather="award" style="width:14px;margin-top:-3px"></i> V.I.P Üye</div>
                  </div>
                </div>';
          }
        }
        }
      ?>
    </div>
    <div class="more">
      <a href="" id="getMore">tüm İlanlara gözatın <i data-feather="list"></i></a>
    </div>
  </div>
</section>


<section>
  <div class="container">
    <h2 id="consection"><span data-feather="shopping-bag" id="m-icon"></span> <strong>Sıcağı sıcağına</strong> satılanlar</h2>
    <p id="titleText">Satılan hesapların fiyatları; hesabın aktiflik durumu, takipçi tipi, güvenilirlik durumu gibi bir çok faktöre bağlıdır. Bu nedenle fiyatlandırma için sadece takipçi sayısı değerlendirilmemelidir.
 Son 15 satış gösterilmektedir.</p>
    <div class="row">

      <div class="owl-carousel owl-theme">

        <div class="col-md-3" style="width: 100%">
          <div class="elan-box">
            <div class="box-body">
              <span id="spn-success"><i data-feather="check"></i> satildi</span>
              <div class="boxTitle">
                <span>116K Instagram hesabi</span>
                <span>232 TL</span>
              </div>
            </div>
            <div class="box-footer"><i class="fa fa-instagram"></i> instagram</div>
          </div>
        </div>

        <div class="col-md-3" style="width: 100%">
          <div class="elan-box">
            <div class="box-body">
              <span id="spn-success"><i data-feather="check"></i> satildi</span>
              <div class="boxTitle">
                <span>116K Instagram hesabi</span>
                <span>232 TL</span>
              </div>
            </div>
            <div class="box-footer"><i class="fa fa-instagram"></i> instagram</div>
          </div>
        </div>

        <div class="col-md-3" style="width: 100%">
          <div class="elan-box">
            <div class="box-body">
              <span id="spn-success"><i data-feather="check"></i> satildi</span>
              <div class="boxTitle">
                <span>116K Instagram hesabi</span>
                <span>232 TL</span>
              </div>
            </div>
            <div class="box-footer"><i class="fa fa-instagram"></i> instagram</div>
          </div>
        </div>

        <div class="col-md-3" style="width: 100%">
          <div class="elan-box">
            <div class="box-body">
              <span id="spn-success"><i data-feather="check"></i> satildi</span>
              <div class="boxTitle">
                <span>116K Instagram hesabi</span>
                <span>232 TL</span>
              </div>
            </div>
            <div class="box-footer"><i class="fa fa-instagram"></i> instagram</div>
          </div>
        </div>


    </div>
    </div>
  </div>
</section>

<section>
  <div class="container">
    <h2 id="consection"><span data-feather="settings" id="m-icon"></span> <strong>Nasıl</strong> çalışır?</h2>
    <p id="titleText">Hesap satın almak isteyen üyelerimiz için ilansat.net'in nasıl çalıştığını kısaca aşağıda anlatmaya çalıştık...</p>
    <div class="row">
      <?php
        foreach ($working as $opt) {
            echo '<div class="col-md-3 col-sm-6 text-center mb-30">
        <div class="nc1" style="background-image:url('.base_url('assets/images/'.$opt->op_gorsel).')"></div><br>
          <span class="h4 text-bold">'.$opt->op_baslik.'</span><br>
           <p class="text-muted text-lg margin-bottom-none">'.$opt->op_icerik.'</p>
      </div>';
        }
      ?>
    </div>
  </div>
</section>


<!-- BLOG YAZILARI -->
<section id="b-blog">
  <div class="container">
    <h2 id="consection"><span data-feather="file-text" id="m-icon"></span> <strong>Blog</strong> Yazılarımız?</h2>
    <div class="row">
      <?php
        foreach ($blogs as $bg) {
          $limitText = mb_substr($bg->bg_desc,0,150);
           echo '<div class="col-md-3">
                  <div class="card" style="">
                    <img class="card-img-top" style="height:150px;object-fit:cover" src="'.base_url('blogupload/'.$bg->bg_image).'" alt="">
                            <div class="card-body">
                              <h5 class="card-title">'.$bg->bg_title.'</h5>
                              <p>'.$limitText.'</p>
                              <a href="'.base_url('detay?devami='.$bg->bg_id).'" id="more-blog">devami >> </a>
                            </div>

                          <div class="gb-celafrix"></div>
                          
                            <div class="bg-bottom">
                              <span><i data-feather="eye"></i> '.$bg->bakis.'</span>
                              <span>|</span>
                              <span><i data-feather="message-square"></i> 0</span>
                            </div>
                  </div>
                </div>';
        }
      ?>

    </div>
    <div class="more">
      <a href="<?=base_url('blog')?>" id="getMore">tüm yazılarımıza gözatın <i data-feather="list"></i></a>
    </div>
  </div>
</section>

<!-- ODEME YONTEMLERI -->
<section>
  <div class="container pay">
    <h2 id="consection"><span data-feather="credit-card" id="m-icon"></span> <strong>Ödeme</strong> Yöntemlerimiz?</h2>
    <p id="titleText">Hem ilan satın alırken hem de satışını yaptığınız ilan için <strong>hesapsat.net cüzdanından para çekerken</strong> aşağıdaki ödeme/transfer seçeneklerini kullanabilirsiniz.</p>
    <div class="row" style="justify-content: center;">
      <div class="col-md-2">
        <div class="py-1"></div>
      </div>
      <div class="col-md-2">
        <div class="py-2"></div>
      </div> 
      <div class="col-md-2">
        <div class="py-3"></div>
      </div> 
      <div class="col-md-2">
        <div class="py-4"></div>
      </div> 
      <div class="col-md-2">
        <div class="py-5"></div>
      </div> 
      <div class="col-md-3">
        <div class="py-6"></div>
      </div> 
    </div>

    <h2 id="consection"><span data-feather="help-circle" id="m-icon"></span> <strong>SSS</strong> SIKÇA SORULAN SORULAR?</h2>

    <div class="row">
      <div class="col">
        <div class="accordion" id="accordionExample">
          <?php
        foreach ($faq as $row) {
          echo '<div class="accordion-item">
            <h2 class="accordion-header" id="headingOne">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne'.$row->faq_id.'" aria-expanded="false" aria-controls="collapseOne'.$row->faq_id.'">
                '.$row->faq_soru.'
              </button>
            </h2>
            <div id="collapseOne'.$row->faq_id.'" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                '.$row->faq_cevap.'
              </div>
            </div>
          </div>';
        }
      ?>

        </div>
      </div>
    </div>

  </div>
</section>


<section>
  <div class="container">
    <h2 id="consection"><span data-feather="activity" id="m-icon"></span> <strong>Hızlı</strong> Arama Listesi</h2>
    <div class="row">
      
    </div>
  </div>
</section>

<section>
  <div class="container">
    <div class="row">
      <div class="col-md-3">
        <span id="dcIcon"><i data-feather="users"></i></span>
        <strong>20.000+ </strong>Uye
        <p>Hesaplarını satan veya hesap arayan 20bin harika üye</p>
      </div>

      <div class="col-md-3">
        <span id="dcIcon"><i data-feather="file-text"></i></span>
        <strong>20.000+ </strong>İlan
        <p>Hesaplarını satan veya hesap arayan 20bin harika üye</p>
      </div>

      <div class="col-md-3">
        <span id="dcIcon"><i data-feather="activity"></i></span>
        <strong>20.000+ </strong>teklif
        <p>Hesaplarını satan veya hesap arayan 20bin harika üye</p>
      </div>

      <div class="col-md-3">
        <span id="dcIcon"><i data-feather="repeat"></i></span>
        <strong>785 </strong>transfer
        <p>Hesaplarını satan veya hesap arayan 20bin harika üye</p>
      </div>
    </div>
  </div>
</section>

<?php $this->load->view('include/footer')?>