<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ilansat.net</title>
  <link rel="stylesheet" href="<?php echo base_url('assets/')?>css/style.css?v=5">
  <link rel="stylesheet" href="<?php echo base_url('assets/')?>css/bootstrap.css">
  <link rel="stylesheet" href="<?php echo base_url('assets/')?>css/photoswipe.css">
  <link rel="stylesheet" href="<?php echo base_url('assets/')?>css/richtext.min.css">
<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
 -->
  <link rel="stylesheet" href="<?php echo base_url('themes/')?>plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="<?php echo base_url('assets/')?>css/dropzone.css">
  <link rel="stylesheet" href="<?php echo base_url('assets/')?>css/responsive.css?v=11">
  <link rel="stylesheet" href="<?php echo base_url('assets/')?>css/owl.carousel.min.css">
  <link rel="stylesheet" href="<?php echo base_url('assets/')?>css/owl.theme.default.css">
  <link rel="stylesheet" href="//cdn.materialdesignicons.com/5.4.55/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />

</head>
<body>

<section>
  <input type="hidden" id="url" value="<?php echo base_url()?>"> 


<?php
  $sessionID = $this->session->userdata('sessionID');
  if(!isset($sessionID) or $sessionID=="" or empty($sessionID)){
    $chars='qazxswedcvfrtgbnhyujmkiolp1234567890QAZXSWEDCVFRTGBNHYUJMKIOLP';
    $max=25;
    $size=strlen($chars)-1;
    $session=null;
    while ($max--)
      $session.=$chars[rand(0,$size)];
      $newdata = array(
        'sessionID'   =>$session,
        'logged_in'   =>TRUE
      );
    $this->session->set_userdata($newdata);
  }

?>


<?php

if($this->agent->is_mobile()){ ?>



<div class="header">
    <div class="logo">LOGO</div>
    <div class="main_menu">
      <ul>
        <li>
          <a href="<?php echo base_url('ilanlar')?>">
            <span><i data-feather="list" class="material-icons" id=""></i></span>
            <span>İlanlar</span>
          </a>
        </li>
        
        <?php
          if(get_cookie('username')){ ?>

            <li>
              <a href="<?php echo base_url('messages/chat')?>">
                <span><i class="material-icons" data-feather="message-square" id=""></i> <b class="badge badge-primary">0</b></span>
                <span>Mesaj</span>
              </a>
            </li>

        <?php  }else{ ?>

          <li>
            <a href="<?php echo base_url('register')?>">
              <span><i class="material-icons" data-feather="user-plus"></i></span>
              <span>Üye Ol</span>
            </a>
          </li>

        <?php  }
        ?>
        
        <?php

          if(get_cookie('username')){ 
            foreach ($uyelist as $row) {
              $userid = $row->user_id;
              $uyarilar = $this->db->where(array('user_id'=>$row->user_id))->get('uyarilar')->result();
              $uyari_count = $this->process_model->useruyari_count($userid);
              foreach ($uyarilar as $uyari) {
                
              }
            } 
          ?>

            <li>
              <a href="javascript::void">
                <span><i class="material-icons" data-feather="user-check"></i></span>
                <span>Profil</span>
              </a>
              <div class="login_dropdown">
                <ul class="toolbar-dropdown">
                  <li class="sub-menu-user" style="cursor:default">
                    <div class="user-ava">
                      <?php
                        if($row->kullanici_resim==""){
                          echo '<img src="https://hesapsat.net/img/default.png" alt="" style="width:100%; margin-top:0px;">';
                        }else{
                          echo '<img src="'.base_url('user_profile/'.$row->kullanici_resim).'" alt="" style="width: 100%;
                                                                                                            margin-top: 0px;
                                                                                                            height: 50px;
                                                                                                            object-fit: cover;">';
                        }
                      ?>
                    </div>
                    <div class="user-info">
                      <span class="user-name h6"><?=get_cookie('username')?></span>
                      <span class="text-sm text-muted">
                      Toplam <b class="text-bold">0</b> işlem
                      </span>
                    </div>
                  </li>
                  <li class="sub-menu-separator"></li>
                  <li>
                    <a href="<?php echo base_url('add-listing')?>">
                      <i data-feather="file-plus" class="material-icons" id=""></i>
                      İlan ekle
                    </a>
                  </li>
                  <li class="sub-menu-separator"></li>
                   <!-- <li class="hidden-sm-up"><a href="add-listing/" title=""><i class="icon-file-plus"></i> İlan Ekle</a></li>
                  <li class="hidden-sm-up sub-menu-separator"></li> -->
                  <li><a href="<?php echo base_url('dashboard')?>" title=""><i class="icon-airplay" data-feather="airplay"></i> Panelim</a></li>
                  <li><a href="<?php echo base_url('wallet')?>" title=""><i class="icon-dollar-sign" data-feather="dollar-sign"></i> Hesap Bakiyem</a></li>
                  <li><a href="<?php echo base_url('settings')?>" title=""><i class="icon-settings" data-feather="settings"></i> Hesap Ayarlarım</a></li>
                  <li><a href="<?php echo base_url('messages/chat/ilansat')?>" title=""><i class="icon-compass" data-feather="compass"></i> Destek Talebi</a></li>
                  <li class="sub-menu-separator"></li>
                  <li><a href="<?php echo base_url('pages/logout')?>" title=""> <i class="icon-power" data-feather="power"></i>Güvenli Çıkış</a></li>
                </ul>
              </div>
            </li>

        <?php  }else{ ?>

          <li>
            <a href="javascript::void">
              <span><i data-feather="unlock" class="material-icons" id=""></i></span>
              <span>Giriş</span>
            </a>
            <div class="login_dropdown">
              <span class="material-icons lock_open">lock_open</span>
              <h4>Giriş Yap</h4>
              <hr>
              <div style="display:none" class="alert alert-danger loginAlert">
                <center>
                <i data-feather="alert-triangle" style="margin-top:-3px;"></i> 
                <span></span>
                </center>
              </div>
              <form id="formLogin" action="<?php echo base_url('pages/login')?>" method="post">
                <input type="text" name="kullanici_adi" required="" placeholder="Kullanıcı adı">
                <input type="password" name="password" required="" placeholder="Şifre">
                <input type="checkbox" checked="checked" name="remember" id="remember" />
                <label for="remember">Beni Hatırla</label>
                <div class="entry_box">
                  <button  class="btn btn-login">
                    <span><i data-feather="unlock" class="btn-icon" id=""></i></span>
                  gİrİş yap</button>
                </div>
                <hr>
                <a href="" id="forget_pass">Şifreni mi unuttun?</a>
              </form>
            </div>
          </li>

        <?php  }

        ?>
      </ul>
    </div>
</div>





<?php }else{ ?>
 
<div class="header">
    <div class="logo">LOGO</div>
    <div class="main_menu">
      <ul>
       <!--  <li>
          <a href="<?php echo base_url()?>">
            <span><i data-feather="home" class="material-icons" id=""></i></span>
            <span>Ana sayfa</span>
          </a>
        </li> -->
        <li>
          <a href="<?php echo base_url('ilanlar')?>">
            <span><i data-feather="list" class="material-icons" id=""></i></span>
            <span>İlanlar</span>
          </a>
        </li>
        <li>
          <a href="<?php echo base_url('add-listing')?>">
            <span><i data-feather="file-plus" class="material-icons" id=""></i></span>
            <span>İlan ekle</span>
          </a>
        </li>
        <li>
          <a href="<?php echo base_url('blog')?>">
            <span><i data-feather="book-open" class="material-icons" id=""></i></span>
            <span>Blog</span>
          </a>
        </li>
        
        <?php
          if(get_cookie('username')){ ?>

            <li>
              <a href="<?php echo base_url('messages/chat/ilansat')?>">
                <span><i class="material-icons" data-feather="message-square" id=""></i> <b class="badge badge-primary">0</b></span>
                <span>Mesaj</span>
              </a>
            </li>

        <?php  }else{ ?>

          <li>
            <a href="<?php echo base_url('register')?>">
              <span><i class="material-icons" data-feather="user-plus"></i></span>
              <span>Üye Ol</span>
            </a>
          </li>

        <?php  }
        ?>
        
        <?php

          if(get_cookie('username')){ 
            foreach ($uyelist as $row) {
              $userid = $row->user_id;
              $uyarilar = $this->db->where(array('user_id'=>$row->user_id))->get('uyarilar')->result();
              $uyari_count = $this->process_model->useruyari_count($userid);
              $resultUyari = $this->process_model->useruyari_control($userid);
              foreach ($uyarilar as $uyari) {
                
              }
              $result = $this->process_model->ilanlarim_sayfa_control($userid);
            } 
          ?>

            <li>
              <a href="javascript::void">
                <span><i class="material-icons" data-feather="user-check"></i></span>
                <span>Profil</span>
              </a>
              <div class="login_dropdown">
                <ul class="toolbar-dropdown">
                  <li class="sub-menu-user" style="cursor:default">
                    <div class="user-ava">
                      <?php
                        if($row->kullanici_resim==""){
                          echo '<img src="https://hesapsat.net/img/default.png" alt="" style="width:100%; margin-top:0px;">';
                        }else{
                          echo '<img src="'.base_url('user_profile/'.$row->kullanici_resim).'" alt="" style="width: 100%;
                                                                                                            margin-top: 0px;
                                                                                                            height: 50px;
                                                                                                            object-fit: cover;">';
                        }
                      ?>
                    </div>
                    <div class="user-info">
                      <span class="user-name h6"><?=get_cookie('username')?></span>
                      <span class="text-sm text-muted">
                      Toplam <b class="text-bold">0</b> işlem
                      </span>
                    </div>
                  </li>
                  <li class="sub-menu-separator"></li>
                   <!-- <li class="hidden-sm-up"><a href="add-listing/" title=""><i class="icon-file-plus"></i> İlan Ekle</a></li>
                  <li class="hidden-sm-up sub-menu-separator"></li> -->
                  <li>
                    <a href="<?php echo base_url('dashboard')?>" title=""><i class="icon-airplay" data-feather="airplay"></i> Panelim</a>
                  </li>
                  <?php
                  if($resultUyari==1){

                    if($uyari->durum > 0){

                    }else{
                      echo '<li>
                          <a href="" title="" onclick="viewUyari('.$uyari->uyari_id.')" data-bs-toggle="modal" data-bs-target="#viewUyari"><i  data-feather="bell"></i> Uyarı 
                          <span class="uyari-alert">'.$uyari_count.'</span></a>
                        </li>';
                    }

                  }else{

                  }
                    
                  ?>

                  <?php
                    if($result==1){ ?>

                      <li>
                        <a href="<?php echo base_url('settings/ilanlarim')?>" title=""><i class="icon-dollar-sign" data-feather="file-text"></i> İlanlarım</a>
                      </li>

                  <?php  }else{ 

                    }
                  ?>

                  <?php
                    $userID = $row->user_id;
                    $orderCount = $this->process_model->aldiklarim($userID);
                    $count = $this->db->where('userid',$userID)->where('onay_durum',0)->get('odeme_bildirim');
                    if($orderCount==1){
                      if($count->num_rows() > 0){
                      echo '<li>
                            <a href="'.base_url('settings/aldiklarim').'" title="">
                              <i class="icon-dollar-sign" data-feather="shopping-cart"></i> 
                              Aldıklarım ('.$count->num_rows().')</a>
                          </li>';
                        }else{
                          echo '<li>
                            <a href="'.base_url('settings/aldiklarim').'" title="">
                              <i class="icon-dollar-sign" data-feather="shopping-cart"></i> 
                              Aldıklarım </a>
                          </li>';
                        }
                    }else{
                      
                    }
                  ?>


                  <?php
                    error_reporting(0);
                    foreach ($orders as $order) {
                     // $satanID = $order->satan
                      if($order->satan==$userID){
                         $satanID = $order->satan;
                      }
                    }
                    $orderCount = $this->process_model->satdiklarim($satanID);
                    $count = $this->db->where('satan',$satanID)->where('onay_durum',0)->get('odeme_bildirim');
                    if($orderCount==1){
                      if($count->num_rows() > 0){
                      echo '<li>
                            <a href="'.base_url('settings/satdiklarim').'" title="">
                              <i class="icon-dollar-sign" data-feather="shopping-cart"></i> 
                              Satdıqlarım ('.$count->num_rows().')</a>
                          </li>';
                        }else{
                          echo '<li>
                            <a href="'.base_url('settings/satdiklarim').'" title="">
                              <i class="icon-dollar-sign" data-feather="shopping-cart"></i> 
                              Satdıqlarım </a>
                          </li>';
                        }
                    }else{
                      
                    }
                  ?>
                  

                  <li>
                    <a href="<?php echo base_url('wallet')?>" title=""><i class="icon-dollar-sign" data-feather="dollar-sign"></i> Hesap Bakiyem</a>
                  </li>
                  <li>
                    <a href="<?php echo base_url('settings')?>" title=""><i class="icon-settings" data-feather="settings"></i> Hesap Ayarlarım</a>
                  </li>
                  <?php
                    if(get_cookie('bookmark[]')){
                      echo '<li>
                        <a href="'.base_url('pages/myfollows').'" title=""><i class="icon-settings" data-feather="heart"></i> Favori İlanlarım ('.count(get_cookie('bookmark')).')</a>
                      </li>';

                    }else{
                      
                    }
                  ?>

                  <!-- <li>
                        <a href="<?php echo base_url('pages/myfollows')?>" title=""><i class="icon-settings" data-feather="heart"></i> Favori İlanlarım ()</a>
                      </li> -->
                  <li>
                    <a href="<?php echo base_url('messages/chat')?>" title=""><i class="icon-compass" data-feather="compass"></i> Destek Talebi</a>
                  </li>
                  <li class="sub-menu-separator"></li>
                  <li>
                    <a href="<?php echo base_url('pages/logout')?>" title=""> <i class="icon-power" data-feather="power"></i>Güvenli Çıkış</a>
                  </li>
                </ul>
              </div>
            </li>

        <?php  }else{ ?>

          <li>
            <a href="javascript::void">
              <span><i data-feather="unlock" class="material-icons" id=""></i></span>
              <span>Giriş</span>
            </a>
            <div class="login_dropdown">
              <span class="material-icons lock_open">lock_open</span>
              <h4>Giriş Yap</h4>
              <hr>
              <div style="display:none" class="alert alert-danger loginAlert">
                <center>
                <i data-feather="alert-triangle" style="margin-top:-3px;"></i> 
                <span></span>
                </center>
              </div>
              <form id="formLogin" action="<?php echo base_url('pages/login')?>" method="post">
                <input type="text" name="user_name" required="" placeholder="Kullanıcı adı">
                <input type="password" name="password" required="" placeholder="Şifre">
                <input type="checkbox" name="remember" id="remember" checked>
                <label for="remember">Beni Hatırla</label>
                <div class="entry_box">
                  <button class="btn btn-login" id="login_1">
                    <span><i data-feather="unlock" class="btn-icon" id=""></i></span>
                  gİrİş yap</button>
                </div>
                <hr>
                <a href="" id="forget_pass">Şifreni mi unuttun?</a>
              </form>
            </div>
          </li>

        <?php  }

        ?>
      </ul>
    </div>
  </div>

<!-- Modal -->
<div class="modal fade" id="viewUyari" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">

  </div>
</div>

<?php }

?>

