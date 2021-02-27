<?php $this->load->view('include/header')?>

<?php

foreach ($blogs as $bg) {
  $blogid=$bg->bg_id;
}

$count = $this->db->where(array('blog_id'=>$blogid))->get('yorumlar'); 

?>

<div class="head_panel">
	<div class="container">
		<span style="color:#0da9ef"><a href="<?php echo base_url('blog')?>" style="color:#0da9ef" >Blog Yazıları </a> > <?=$bg->bg_title?></span>
	</div>
</div>

<div class="container">
	<div class="content margin-top-2x">
    

    <div class="row">
      <div class="col-xl-9 col-lg-8">
        <div class="single-post-meta">
           <div class="column">
              <div class="meta-link"><i class="icon-clock marek3"></i> <?=$bg->bg_tarih?></div>
            </div>
            <div class="column">
              <div class="meta-link"><i data-feather="eye" style="width:15px;"></i> <?=$bg->bakis?></div>
            <div class="meta-link"><a class="scroll-to" href="#comments"> | &nbsp;&nbsp;&nbsp;<i style="width:15px;" data-feather="message-square"></i> <?=$count->num_rows();?></a></div>
            </div>
        </div>
        <img src="<?=base_url('blogupload/'.$bg->bg_image)?>" style="width:100%">
        <h1 class="h2 padding-top-2x"><?=$bg->bg_title?></h1>
        <?=$bg->bg_desc?>

        <div class="single-post-footer">
          <div class="column">
            <div class="entry-share"><span class="text-muted">Yazıyı Paylaş:</span>
              <div class="share-links">
              <a style="color:#3b5998" class="social-button shape-circle sb-facebook" href="javascript:penac('https://www.facebook.com/sharer/sharer.php?u=https://hesapsat.net/sosyal-medya-hesaplarinda-en-etkili-takipci-arttirma-yontemleri/BID5/', 'Sosyal medya hesaplarında en etkili takipçi arttırma yöntemleri', 'toolbar=0, location=0, status=0, menubar=0, scrollbars=1, resizable=1, width=500, height=500')" data-toggle="tooltip" data-placement="top" title="" data-original-title="Facebookda Paylaş">
              <i class="fab fa-facebook"></i>
              </a>
              <a style="color:#00aced" class="social-button shape-circle sb-twitter" href="javascript:penac('https://twitter.com/intent/tweet?text=https://hesapsat.net/sosyal-medya-hesaplarinda-en-etkili-takipci-arttirma-yontemleri/BID5/', 'Sosyal medya hesaplarında en etkili takipçi arttırma yöntemleri', 'toolbar=0, location=0, status=0, menubar=0, scrollbars=1, resizable=1, width=500, height=500')" data-toggle="tooltip" data-placement="top" title="" data-original-title="Twitterda Paylaş">
              <i class="fab fa-twitter"></i>
              </a>
              <a style="color:#29a628" class="social-button shape-circle sb-whatsapp" href="javascript:penac('https://api.whatsapp.com/send?text=https://hesapsat.net/sosyal-medya-hesaplarinda-en-etkili-takipci-arttirma-yontemleri/BID5/', 'Sosyal medya hesaplarında en etkili takipçi arttırma yöntemleri', 'toolbar=0, location=0, status=0, menubar=0, scrollbars=1, resizable=1, width=500, height=500')" data-action="share/whatsapp/share" data-toggle="tooltip" data-placement="top" title="" data-original-title="Whatsappta Paylaş">
              <i class="fab fa-whatsapp"></i>
              </a>
              </div>
              </div>
          </div>
        </div>

        <div class="entry-navigation">

          <div class="column text-left"><a class="btn btn-outline-secondary btn-sm" href="instagram-mavi-tik-nedir-ve-mavi-tik-nasil-alinir/BID4/"><i class="icon-arrow-left"></i>&nbsp;Önceki</a></div> 

          <div class="column"><a class="btn btn-outline-secondary view-all" href="<?=base_url('blog')?>" data-toggle="tooltip" data-placement="top" title="" data-original-title="Tüm Yazılar"><i data-feather="menu" class="menu"></i></a></div>

          <div class="column text-right"><a class="btn btn-outline-secondary btn-sm" href="eski-tarihli-sosyal-medya-hesaplari-neden-daha-degerli/BID6/">Sonraki&nbsp;<i class="icon-arrow-right"></i></a></div>


        </div>



        <section id="comments" class="mt-4">
          <?php
            foreach ($comments as $com) {
              if($com->activation >0){

              echo '<div class="comment">
                    <div class="comment-author-ava">
                      <img class="d-block w-110 mx-auto img-thumbnail rounded-circle" src="https://hesapsat.net/img/default.png" alt="ofpof">
                    </div>

                    <div class="comment-body" style="padding: 13px 20px;">
                      <div class="comment-header">
                        <h4 class="comment-title"><b>'.$com->kullaniciadi.'</b> dedi ki: <span class="comment-meta fltright">'.blogtime($com->tarix).'</span></h4>
                      </div>
                      <p class="comment-text">
                        '.$com->yorum.'
                      </p>
                      <div class="comment-footer">
                        <div class="column">
                          <a class="btn btnsm btn-secondary" href="#" data-toggle="modal" data-target="#cvpyazblg0">
                            <i data-feather="edit-2" style="width: 12px;margin-top:-5px;"></i> Cevapla</a>
                        </div>
                      </div>
                    </div>
                  </div>';
            }
          }
          ?>
          


        </section>

        <!-- YORUM -->


        <div class="card" style="margin-top:20px;">
          <div class="card-header"><h4 id="yorumgir"><i class="icon-message-square mrek3"></i> Yorum, görüş veya soru girin</h4></div>
          <div class="card-body" style="padding-bottom:0px;">
          <form action="<?=base_url('home/add_comment')?>" method="post">
            <div class="row">
              <div class="col-12">
              <div class="form-group">
              <input type="text" placeholder="İsim" name="username" id="form-control" class="form-control form-control-rounded">
              </div>
              </div>
              </div>
              <div class="comment">
              <div class="comment-author-ava">
              <img class="d-block w-110 mx-auto img-thumbnail rounded-circle" src="https://hesapsat.net/img/default.png" alt="user">
              </div>
              <div class="comment-body" style="padding:0px;">
              <div class="comment-text">
              <div class="col-12">
              <div class="form-group">
              <textarea name="message" style="border:0px;" id="form-control" class="form-control form-control-rounded" rows="2" placeholder="Yorum, görüş veya sorunuzu giriniz."></textarea>
              </div>
              </div>
              <input type="hidden" name="commentid" value="0">
              <input type="hidden" name="blogid" value="<?=$bg->bg_id?>">
              </div>
              <div class="comment-footer" style="margin-top:-30px;">
              <div class="column">
              <button id="btn" class="btn btn-link btn-rounded" type="submit" style="margin-top:0px;"><i class="iconFeather" data-feather="mail"></i> Gönder</button>
              </div>
              </div>
              </div>
            </div>
          </form>
          </div>
          </div>

          

          
      </div>



      <div class="col-xl-3 col-lg-4">
        <div class="single-post-meta">
          <div class="column">
           <div class="meta-link"></div>
         </div>
          <div class="column">
            <div class="meta-link"></div>
            <div class="meta-link"></div>
          </div>
        </div>
        <div class="sidebar sidebar-offcanvas">
          <aside class="sidebar sidebar-offcanvas">

          <section class="widget widget-featured-posts">
            <h3 class="widget-title">En çok okunanlar</h3>
            <div class="entry">
              <div class="entry-thumb"><a href="hesap-alisverislerinde-en-sik-karsilasilan-dolandirici-tipleri/BID1/">
                <img src="https://hesapsat.net/img/blog/1/thumb.jpg" alt="Hesap alışverişlerinde en sık karşılaşılan dolandırıcı tipleri"></a>
              </div>
              <div class="entry-content" style="float:left;">
              <h4 class="entry-title">
              <a href="hesap-alisverislerinde-en-sik-karsilasilan-dolandirici-tipleri/BID1/">Hesap alışverişlerinde en sık      karşılaşılan dolandırıcı tipleri</a>
              </h4>
              <span class="entry-meta"><i data-feather="eye" style="width:15px;"></i> 49207 adet okunma..</span>
              </div>
            </div>
          </section>


          <section class="widget widget-featured-posts" style="background:none;min-height:auto;">
            <h3 class="widget-title">Önemli Yazılar</h3>
            <div class="entry">
              <div class="entry-thumb"><a href="hesap-alisverislerinde-en-sik-karsilasilan-dolandirici-tipleri/BID1/">
                <img src="https://hesapsat.net/img/blog/1/thumb.jpg" alt="Hesap alışverişlerinde en sık karşılaşılan dolandırıcı tipleri"></a>
              </div>
              <div class="entry-content" style="float:left;">
              <h4 class="entry-title">
              <a href="hesap-alisverislerinde-en-sik-karsilasilan-dolandirici-tipleri/BID1/">Hesap alışverişlerinde en sık      karşılaşılan dolandırıcı tipleri</a>
              </h4>
              <span class="entry-meta"><i data-feather="eye" style="width:15px;"></i> 49207 adet okunma..</span>
              </div>
            </div>
          </section>


          <section class="widget widget-featured-posts" style="background:none">
            <h3 class="widget-title">Popüler Etiketler</h3>
           <a href="hesap-alisverislerinde-en-sik-karsilasilan-dolandirici-tipleri/BID1/" class="tag" style="float:left;"># güvenli alışveriş</a>
          </section>

          </aside>


        </div>



      </div>
    </div>


	</div>
</div>


<?php $this->load->view('include/footer')?>