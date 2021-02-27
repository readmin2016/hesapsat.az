<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Admin Panel</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url('themes/')?>plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="<?php echo base_url('backend/')?>css/admin.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Ionicons -->


  <link rel="stylesheet" href="sweetalert2/dist/sweetalert2.min.css">
  <link rel="stylesheet" href="<?php echo base_url('assets/')?>css/dropzone.css">

  <link rel="stylesheet" href="<?php echo base_url('themes/')?>plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url('themes/')?>dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="<?php echo base_url('themes/')?>plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?php echo base_url('themes/')?>plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="<?php echo base_url('themes/')?>plugins/summernote/summernote-bs4.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>

<?php
  error_reporting(0);
  $uyari = $this->process_model->uye_kampaniya_control();

  
?>

<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
<input type="hidden" id="url" value="<?=base_url()?>">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index3.html" class="nav-link">Ana sayfa</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-comments"></i>
          <span class="badge badge-danger navbar-badge">3</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  John Pierce
                  <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">I got your message bro</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Nora Silvester
                  <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">The subject goes here</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
        </div>
      </li>
      <!-- Notifications Dropdown Menu -->

    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->


    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <?php
            $logo = $this->db->order_by('logo_id','DESC')->where(array('logo_position'=>0))->limit(1)->get('logo')->result();
            foreach ($logo as $logo) {
              if($logo->logo_position==0){
                if($logo->logo==""){

                }else{
                  echo '<img src="'.base_url('logo/'.$logo->logo).'" style=" width:40px;height:40px;border-radius:50%" alt="User Image">';
                }
              }
            }
          ?>
          
        </div>
        <div class="info">
          <a href="#" style="font-size:13px;margin-top:5px" class="d-block"><?=get_cookie('admin')?></a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview ">
            <a href="<?php echo base_url('admin/dashboard')?>" class="nav-link <?=active_link('admin/dashboard')?>">
              <i data-feather="home"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>

          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i data-feather="layout"></i>
              <p>
                Sayfa ekle
              </p>
              <i class="fas fa-angle-left right"></i>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/mailbox/mailbox.html" class="nav-link">
                  <i data-feather="plus"></i>
                  <p>Ekle</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?=base_url('admin/editPage')?>" class="nav-link">
                  <i data-feather="edit"></i>
                  <p>Düzenle</p>
                </a>
              </li>
            </ul>
          </li>
          <?php
            if($yetki_md==1){

            }else{ ?>

          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i data-feather="book-open"></i>
              <p>
                Blog ekle
              </p>
              <i class="fas fa-angle-left right"></i>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo base_url('admin/view_comment')?>" class="nav-link">
                  <i data-feather="message-square"></i>
                  <p>Gelen yorumlar (1)</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url('admin/add_blog')?>" class="nav-link">
                  <i data-feather="plus"></i>
                  <p>Ekle</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url('admin/edit_blog')?>" class="nav-link">
                  <i data-feather="edit"></i>
                  <p>Düzenle</p>
                </a>
              </li>
            </ul>
          </li>

          <?php  }
          ?>

          <li class="nav-item">
            <a href="pages/calendar.html" class="nav-link">
              <i data-feather="plus"></i>
              <p>
                İlan ekle
              </p>
              <i class="fas fa-angle-left right"></i>
            </a>
            <ul class="nav nav-treeview">
              <!-- <li class="nav-item">
                <a href="pages/mailbox/mailbox.html" class="nav-link">
                  <i data-feather="file"></i>
                  <p>Tüm ilanlar</p>
                </a>
              </li> -->
              
              <li class="nav-item">
                <a href="<?=base_url('admin/add_order')?>" class="nav-link">
                  <i data-feather="plus"></i>
                  <p>Ekle</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?=base_url('admin/checkup')?>" class="nav-link">
                  <i data-feather="edit"></i>
                  <p>Düzenle</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?=base_url('admin/ilan_komisyon')?>" class="nav-link">
                  <i data-feather="activity"></i>
                  <p>İlan komisyon belirleme</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item has-treeview">
            <a href="<?php echo base_url('admin/checkup')?>" class="nav-link <?=active_link('admin/checkup')?>">
              <i data-feather="alert-circle" style="color:red"></i>
              <p>
                Onay bekleyen ilanlar
              </p>
              &nbsp;
              
                <?php
                  if($this->process_model->onay_control()==0){
                    echo '<span></span>';
                  }else{
                    echo '<span class="badge badge-danger">
                      '.$this->process_model->onay_control().'
                        </span>';
                  }
                ?>
              
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="<?php echo base_url('banka/odeme_bildirim')?>" class="nav-link <?=active_link('banka/odeme_bildirim')?>">
              <i data-feather="bell"></i>
              <p>
                Ödeme Bildirim
              </p>
              &nbsp;
              
                <?php
                  // if($this->process_model->onay_control()==0){
                  //   echo '<span></span>';
                  // }else{
                  //   echo '<span class="badge badge-danger">
                  //     '.$this->process_model->onay_control().'
                  //       </span>';
                  // }
                ?>
              
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="<?=base_url('admin/order_ilan')?>" class="nav-link <?=active_link('admin/order_ilan')?>">
              <i data-feather="check-square"></i>
              <p>
                Satılan ilanlar
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link <?=active_link('admin/add_categori')?> <?=active_link('admin/edit_categori')?>">
              <i data-feather="file-plus"></i>
              <p>
                Kategori ekle
              </p>
              <i class="fas fa-angle-left right"></i>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?=base_url('admin/add_categori')?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Ekle</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?=base_url('admin/edit_categori')?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Düzenle</p>
                </a>
              </li>
            </ul>
          </li>
          
          <!-- <li class="nav-item">
            <a href="pages/gallery.html" class="nav-link <?=active_link('admin/add_moderator')?> <?=active_link('admin/edit_moderator')?>">
              <i data-feather="user-plus"></i>
              <p>
                Moderator ekle
              </p>
              <i class="fas fa-angle-left right"></i>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?=base_url('admin/add_moderator')?>" class="nav-link ">
                  <i data-feather="chevron-right"></i>
                  <p>Ekle</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?=base_url('admin/edit_moderator')?>" class="nav-link">
                  <i data-feather="chevron-right"></i>
                  <p>Düzenle</p>
                </a>
              </li>
            </ul>
          </li> -->

          <li class="nav-item has-treeview">
            <a href="#" class="nav-link <?=active_link('banka/kredi_kart_komisyon')?> 
            <?=active_link('banka/papara_ayar')?>
            <?=active_link('banka/papara_komisyon')?> <?=active_link('banka/ininal_ayar')?> <?=active_link('banka/ininal_komisyon')?> <?=active_link('banka/havale_eft')?> <?=active_link('banka/eft_komisyon')?>">
              <i data-feather="credit-card"></i>
              <p>
                Banka ayarları
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/mailbox/mailbox.html" class="nav-link">
                  <i data-feather="chevron-right"></i>
                  <p>Sanal pos ayarları</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?=base_url('banka/kredi_kart_komisyon')?>" class="nav-link">
                  <i data-feather="chevron-right"></i>
                  <p>Kredi kartı komisyon ayarları</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?=base_url('banka/papara_ayar')?>" class="nav-link">
                  <i data-feather="chevron-right"></i>
                  <p>Papara ayarları</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?=base_url('banka/papara_komisyon')?>" class="nav-link">
                  <i data-feather="chevron-right"></i>
                  <p>Papara komisyon ayarları</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?=base_url('banka/ininal_ayar')?>" class="nav-link">
                  <i data-feather="chevron-right"></i>
                  <p>İninal ayarları</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?=base_url('banka/ininal_komisyon')?>" class="nav-link">
                  <i data-feather="chevron-right"></i>
                  <p>İninal komisyon ayarları</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?=base_url('banka/havale_eft')?>" class="nav-link">
                  <i data-feather="chevron-right"></i>
                  <p>Havale/EFT ayarları</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?=base_url('banka/eft_komisyon')?>" class="nav-link">
                  <i data-feather="chevron-right"></i>
                  <p>Havale/EFT komisyon ayarları</p>
                </a>
              </li>
            </ul>
          </li>

          <!-- <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i data-feather="mail"></i>
              <p>
                Posta kutusu
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/mailbox/mailbox.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Gelen kutusu</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/mailbox/compose.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Giden kutusu</p>
                </a>
              </li>
            </ul>
          </li> -->

          <li class="nav-item has-treeview">
            <a href="javascript:void(0)" class="nav-link <?=active_link('admin/addUser')?>
            <?=active_link('admin/user_notification')?> <?=active_link('admin/add_money')?>
             <?=active_link('admin/userList')?>">
              <i data-feather="users"></i>
              <p>
                Üye ayarları
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?=base_url('admin/addUser')?>" class="nav-link">
                  <i data-feather="chevron-right"></i>
                  <p>Üye Ekle</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?=base_url('admin/user_notification')?>" class="nav-link">
                  <i data-feather="chevron-right"></i>
                  <p>Üye uyarıları</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?=base_url('admin/user_activation')?>" class="nav-link">
                  <i data-feather="chevron-right"></i>
                  <p>Üye onay</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?=base_url('admin/add_money')?>" class="nav-link">
                  <i data-feather="chevron-right"></i>
                  <p>Bakiye ekle</p>
                </a>
              </li>
              <!-- <li class="nav-item">
                <a href="pages/mailbox/compose.html" class="nav-link">
                  <i data-feather="chevron-right"></i>
                  <p>Banlama</p>
                </a>
              </li> -->
              <li class="nav-item">
                <a href="<?=base_url('admin/userList')?>" class="nav-link">
                  <i data-feather="chevron-right"></i>
                  <p>Düzenleme</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item has-treeview">
            <a href="javascript:void(0)" class="nav-link <?=active_link('admin/vip_popup')?> <?=active_link('admin/addVip')?>
            <?=active_link('admin/vipList')?> <?=active_link('admin/price_addion')?>">
              <i data-feather="users" style="color:#11fb11;"></i>
              <p>
                Vip üye ayarları
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?=base_url('admin/addVip')?>" class="nav-link">
                  <i data-feather="chevron-right"></i>
                  <p>Vip üye ekle</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?=base_url('admin/vipList')?>" class="nav-link">
                  <i data-feather="chevron-right"></i>
                  <p>Vip üye düzenle</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?=base_url('admin/vip_popup')?>" class="nav-link">
                  <i data-feather="chevron-right"></i>
                  <p>Vip popup</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?=base_url('admin/price_addion')?>" class="nav-link">
                  <i data-feather="chevron-right"></i>
                  <p>Vip Üye Fiyat Düzenleme</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item has-treeview">
            <a href="#" class="nav-link <?=base_url('admin/site_settings_two')?> <?=active_link('admin/faq')?> <?=active_link('admin/site_settings_one')?> <?=active_link('admin/change_logo')?> <?=active_link('admin/media')?>">
              <i data-feather="tool"></i>
              <p>
                Site ayarları
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview ">
              <li class="nav-item">
                <a href="<?=base_url('admin/media')?>" class="nav-link">
                  <i data-feather="airplay"></i>
                  <p>Sosial media ayarları</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?=base_url('admin/site_settings_two')?>" class="nav-link">
                  <i data-feather="settings"></i>
                  <p>Nasıl çalışır</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?=base_url('admin/site_settings_one')?>" class="nav-link">
                  <i data-feather="heart"></i>
                  <p>Neden ilansat</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?=base_url('admin/faq')?>" class="nav-link">
                  <i data-feather="help-circle"></i>
                  <p>Soru/Cevap</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?=base_url('admin/change_logo')?>" class="nav-link">
                  <i data-feather="framer"></i>
                  <p>Logo değiştir</p>
                </a>
              </li>
            </ul>
          </li>
          
          <li class="nav-item has-treeview">
            <a href="lavascript:void(0)" class="nav-link <?=active_link('admin/our_notification')?> 
            <?=active_link('admin/notification')?> <?=active_link('admin/user_company')?> <?=active_link('admin/seo')?> <?=active_link('admin/contact_form')?> <?=active_link('admin/create_admin')?>">
              <i data-feather="settings"></i>
              <p>
                Ayarlar
                <?php
                  if($uyari==0){
                    echo '';
                  }else{
                    echo '<span class="badge badge-danger" style="margin-left:10px;">'.$uyari.'</span>';
                  }
                ?>
                
                <i class="fas fa-angle-left right" style="position:absolute;right:16px;"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?=base_url('admin/create_admin')?>" class="nav-link">
                  <i data-feather="chevron-right"></i>
                  <p>Admin ekle</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/mailbox/mailbox.html" class="nav-link">
                  <i data-feather="chevron-right"></i>
                  <p>Admin Liste</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?=base_url('admin/contact_form')?>" class="nav-link">
                  <i data-feather="chevron-right"></i>
                  <p>İletişim ayarları</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?=base_url('admin/seo')?>" class="nav-link">
                  <i data-feather="chevron-right"></i>
                  <p>SEO araçları</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?=base_url('admin/notification')?>" class="nav-link">
                  <i data-feather="chevron-right"></i>
                  <p>Bildirim gönder</p>
                </a>
              </li>
              <!-- <li class="nav-item">
                <a href="" class="nav-link">
                  <i data-feather="chevron-right"></i>
                  <p>Duyuru gönder</p>
                </a>
              </li> -->
              <li class="nav-item">
                <a href="<?=base_url('admin/our_notification')?>" class="nav-link">
                  <i data-feather="chevron-right"></i>
                  <p>Bizden duyurular</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?=base_url('admin/user_company')?>" class="nav-link">
                  <i data-feather="chevron-right"></i>
                  <p>Üyelerden kampaniyalar</p>
                  <?php
                    if($uyari==0){
                      echo '';
                    }else{
                      echo '<span class="badge badge-danger" style="margin-left:10px;">'.$uyari.'</span>';
                    }
                  ?>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="<?=base_url('admin/cikis_yap')?>" class="nav-link">
              <i data-feather="log-out"></i>
              <p>
                Çıkış
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
          </li>
          
        </ul>
      </nav>
      <div class="bosluk"></div>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>