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
		    <i data-feather="share-2" class="iconFeather"></i>
		    <h5>Sosyal Media</h5>
		  </div>
		  <div class="card-body">
		    <div class="row">
            <div class="col-md-6">
              <div class="sosyalBox">

                <?php
                  $mediaControl = $this->db->where(array('media_name'=>'facebook'))->get('media')->result();
                  $result = $this->process_model->facebook_control();
                  foreach ($mediaControl as $media) {}
                  if($result==1){ ?>
                      <form id="refreshFacebook" method="post">
                        <div class="listItems">
                            <div class="dcItem list_icon">
                              <img src="<?=base_url('backend/images/')?>facebook.png" alt="">
                            </div>
                            <div class="dcItem list_url">
                              <input type="text" name="urlfacebook" class="form-control" value="<?=$media->media_url?>">
                              <input type="hidden" name="icon" class="form-control" value="fab fa-facebook-f">
                              <input type="hidden" name="medianame" class="form-control" value="facebook">
                              <input type="hidden" name="f_id" class="form-control" value="<?=$media->media_id?>">
                            </div>
                            <div class="dcItem list_btn">
                              <button class="btn btn-info"><i data-feather="refresh-ccw" class="iconFeather"></i> Yenile</button>
                            </div>
                        </div>
                      </form>

                 <?php }else{ ?>
                    <form id="formFacebook" method="post">
                      <div class="listItems">
                          <div class="dcItem list_icon">
                            <img src="<?=base_url('backend/images/')?>facebook.png" alt="">
                          </div>
                          <div class="dcItem list_url">
                            <input type="text" name="f_url" class="form-control" placeholder="http://">
                            <input type="hidden" name="f_icon" class="form-control" value="fab fa-facebook-f">
                            <input type="hidden" name="f_medianame" class="form-control" value="facebook">
                          </div>
                          <div class="dcItem list_btn">
                            <button class="btn btn-primary"><i data-feather="plus" class="iconFeather"></i> Ekle</button>
                          </div>
                      </div>
                    </form>
                 <?php }

                  
                ?>
                <!-- FACEBOOK -->



                <?php
                  $mediaControl = $this->db->where(array('media_name'=>'instagram'))->get('media')->result();
                  $result = $this->process_model->instagram_control();
                  foreach ($mediaControl as $media){}
                  if($result==1){ ?>

                      <form id="refreshInstagram" method="post">
                        <div class="listItems">
                          <div class="dcItem list_icon">
                            <img src="<?=base_url('backend/images/')?>instagram.png" alt="">
                          </div>
                          <div class="dcItem list_url">
                            <input type="text" name="urlinstagram" class="form-control" value="<?=$media->media_url?>">
                            <input type="hidden" name="icon" class="form-control" value="fab fa-instagram">
                            <input type="hidden" name="medianame" class="form-control" value="instagram">
                            <input type="hidden" name="id" class="form-control" value="<?=$media->media_id?>">
                          </div>
                          <div class="dcItem list_btn">
                            <button class="btn btn-info"><i data-feather="refresh-ccw" class="iconFeather"></i> Yenile</button>
                          </div>
                        </div>
                      </form>

                <?php  }else{ ?>

                    <form id="formInstagram" method="post">
                      <div class="listItems">
                        <div class="dcItem list_icon">
                          <img src="<?=base_url('backend/images/')?>instagram.png" alt="">
                        </div>
                        <div class="dcItem list_url">
                          <input type="text" name="in_url" class="form-control" placeholder="http://">
                          <input type="hidden" name="in_icon" class="form-control" value="fab fa-instagram">
                          <input type="hidden" name="in_medianame" class="form-control" value="instagram">
                        </div>
                        <div class="dcItem list_btn">
                          <button class="btn btn-primary"><i data-feather="plus" class="iconFeather"></i> Ekle</button>
                        </div>
                      </div>
                    </form>

                <?php  }
                  
                ?>
                <!-- instagram -->


                <?php
                  $mediaControl = $this->db->where(array('media_name'=>'twitter'))->get('media')->result();
                  $result = $this->process_model->twitter_control();
                  foreach ($mediaControl as $media) {}
                  if($result==1){ ?>

                      <form id="refreshTwitter" method="post">
                        <div class="listItems">
                          <div class="dcItem list_icon">
                            <img src="<?=base_url('backend/images/')?>twitter.png" alt="">
                          </div>
                          <div class="dcItem list_url">
                            <input type="text" name="urltwitter" class="form-control" value="<?=$media->media_url?>">
                            <input type="hidden" name="icon" class="form-control" value="fab fa-instagram">
                            <input type="hidden" name="medianame" class="form-control" value="instagram">
                            <input type="hidden" name="t_id" class="form-control" value="<?=$media->media_id?>">
                          </div>
                          <div class="dcItem list_btn">
                            <button class="btn btn-info"><i data-feather="refresh-ccw" class="iconFeather"></i> Yenile</button>
                          </div>
                        </div>
                      </form>

                 <?php }else{ ?>

                    <form id="formTwitter" method="post">
                      <div class="listItems">
                        <div class="dcItem list_icon">
                          <img src="<?=base_url('backend/images/')?>twitter.png" alt="">
                        </div>
                        <div class="dcItem list_url">
                          <input type="text" name="tw_url" class="form-control" placeholder="http://">
                          <input type="hidden" name="tw_icon" class="form-control" value="fab fa-twitter">
                          <input type="hidden" name="tw_medianame" class="form-control" value="twitter">
                        </div>
                        <div class="dcItem list_btn">
                          <button class="btn btn-primary"><i data-feather="plus" class="iconFeather"></i> Ekle</button>
                        </div>
                      </div>
                    </form>

                 <?php }
                ?>
                <!-- twitter -->


                <?php
                  $mediaControl = $this->db->where(array('media_name'=>'tiktok'))->get('media')->result();
                  $result = $this->process_model->tiktok_control();
                  foreach ($mediaControl as $media) {}
                  if($result==1){ ?>

                      <form id="refreshTiktok" method="post">
                        <div class="listItems">
                          <div class="dcItem list_icon">
                            <img src="<?=base_url('backend/images/')?>tiktok.png" alt="">
                          </div>
                          <div class="dcItem list_url">
                            <input type="text" name="urltiktok" class="form-control" value="<?=$media->media_url?>">
                            <input type="hidden" name="icon" class="form-control" value="fa fa-instagram">
                            <input type="hidden" name="medianame" class="form-control" value="instagram">
                            <input type="hidden" name="tt_id" class="form-control" value="<?=$media->media_id?>">
                          </div>
                          <div class="dcItem list_btn">
                            <button class="btn btn-info"><i data-feather="refresh-ccw" class="iconFeather"></i> Yenile</button>
                          </div>
                        </div>
                      </form>

                 <?php }else{ ?>

                    <form id="formTiktok" method="post">
                      <div class="listItems">
                        <div class="dcItem list_icon">
                          <img src="<?=base_url('backend/images/')?>tiktok.png" alt="">
                        </div>
                        <div class="dcItem list_url">
                          <input type="text" name="tt_url" class="form-control" placeholder="http://">
                          <input type="hidden" name="tt_icon" class="form-control" value="fa fa-bolt">
                          <input type="hidden" name="tt_medianame" class="form-control" value="tiktok">
                        </div>
                        <div class="dcItem list_btn">
                          <button class="btn btn-primary"><i data-feather="plus" class="iconFeather"></i> Ekle</button>
                        </div>
                      </div>
                    </form>

                 <?php }
                ?>
                <!-- tiktok -->


                <?php
                  $mediaControl = $this->db->where(array('media_name'=>'youtube'))->get('media')->result();
                  $result = $this->process_model->youtube_control();
                  foreach ($mediaControl as $media) {}
                  if($result==1){ ?>

                      <form id="refreshYoutube" method="post">
                        <div class="listItems">
                          <div class="dcItem list_icon">
                            <img src="<?=base_url('backend/images/')?>youtube.png" alt="">
                          </div>
                          <div class="dcItem list_url">
                            <input type="text" name="urlyoutube" class="form-control" value="<?=$media->media_url?>">
                            <input type="hidden" name="icon" class="form-control" value="fab fa-instagram">
                            <input type="hidden" name="medianame" class="form-control" value="instagram">
                            <input type="hidden" name="yt_id" class="form-control" value="<?=$media->media_id?>">
                          </div>
                          <div class="dcItem list_btn">
                            <button class="btn btn-info"><i data-feather="refresh-ccw" class="iconFeather"></i> Yenile</button>
                          </div>
                        </div>
                      </form>

                 <?php }else{ ?>

                    <form id="formYoutube" method="post">
                      <div class="listItems">
                        <div class="dcItem list_icon">
                          <img src="<?=base_url('backend/images/')?>youtube.png" alt="">
                        </div>
                        <div class="dcItem list_url">
                          <input type="text" name="url" class="form-control" placeholder="http://">
                          <input type="hidden" name="icon" class="form-control" value="fab fa-youtube">
                          <input type="hidden" name="medianame" class="form-control" value="youtube">
                        </div>
                        <div class="dcItem list_btn">
                          <button class="btn btn-primary"><i data-feather="plus" class="iconFeather"></i> Ekle</button>
                        </div>
                      </div>
                    </form>

                 <?php }
                ?>
                <!-- tiktok -->

              </div>
            </div>

            <div class="col-md-6">
              <div class="card">
                <div class="card-header"><h4><i data-feather="check"></i> Eklenenler</h4></div>
                <div class="card-body">
                  <ul class="list-group">
                    <?php
                      $medialist = $this->db->get('media')->result();
                      foreach ($medialist as $mdlist) {
                          echo '<li class="list-group-item dc-list">
                                  <i class="'.$mdlist->media_icon.'"></i>
                                  '.ucfirst($mdlist->media_name).'
                                  <a href="'.base_url('admin/dlt_media?sil='.$mdlist->media_id).'" class="btn btn-danger" style="float:right"><i data-feather="trash"></i></a>
                                </li>';
                      }
                    ?>
                  </ul>
                </div>
              </div>
            </div>

        </div>
		  </div>
		 
		</div>

      </div><!-- /.container-fluid -->
    </section>

</div>







<?php $this->load->view('admin/footer')?>