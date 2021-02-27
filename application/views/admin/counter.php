<?php
$ilansayi = $this->process_model->ilan_sayi();
$blogsayi = $this->process_model->blog_sayi();
$kullanicisayi = $this->process_model->kullanici_sayi();
$moderator = $this->process_model->moderator_sayi();
?>
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3><?=$ilansayi?></h3>

                <p>İlan sayı</p>
              </div>
              <div class="icon">
                <i data-feather="file-plus"></i>
              </div>
              <a href="<?=base_url('admin_checkup')?>" class="small-box-footer">Detaylı 
                <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3><?=$blogsayi?></h3>

                <p>Blog sayı</p>
              </div>
              <div class="icon">
                <i data-feather="book-open"></i>
              </div>
              <a href="<?=base_url('admin/edit_blog')?>" class="small-box-footer">Detaylı <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3><?=$kullanicisayi?></h3>

                <p>Kullanıcı sayı</p>
              </div>
              <div class="icon">
                <i data-feather="users"></i>
              </div>
              <a href="<?=base_url('admin/userList')?>" class="small-box-footer">Detaylı 
                <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3><?=$moderator?></h3>

                <p>VIP Üyeler</p>
              </div>
              <div class="icon">
                <i data-feather="user-check"></i>
              </div>
              <a href="<?=base_url('admin/edit_moderator')?>" class="small-box-footer">Detaylı <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->
      </section>