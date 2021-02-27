<?php $this->load->view('admin/header')?>

<div class="content-wrapper">
<section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <?php
          $this->load->view('admin/counter')
        ?>

        <div class="row">
          <div class="col-md-8">
            <div class="card">
              <div class="card-header"><h5><i data-feather="framer" class="iconFeather"></i> Site Logosunu Değiş</h5></div>
              <div class="card-body">
                <div id="alert-danger">
                  <center>
                    <i data-feather="alert-triangle"></i>&nbsp;
                    <span></span>
                  </center>
                </div>
                <div id="alert-success">
                  <center>
                    <i data-feather="check"></i>&nbsp;
                    <span></span>
                  </center>
                </div>
                <form method="post" id="formLogo" enctype="multipart/form-data">
                  <div class="form-group">
                    <input type="radio" id="click1" class="inputRadio" name="logo" value="0"> 
                    <label for="click1" style="font-weight:500; cursor:pointer">Admin için logo</label>
                  </div>
                  <div class="form-group">
                    <input type="radio" id="click2" class="inputRadio" name="logo" value="1" checked> 
                    <label for="click2" style="font-weight:500; cursor:pointer">Site için logo</label>
                  </div>
                  <div class="form-group">
                    <span class="uploadLogo">Resim seçin</span>
                    <input type="file" name="file" id="uploadLogo" style="display:none">&nbsp;
                    <small id="imageResult"></small>
                    <small style="display:block;">Logonuz 320 piksele 80 pikselden büyük olmamalıdır, aksi takdirde giriş ekranında yeniden boyutlandırılır</small>
                  </div>
                  <div class="form-group" id="fade">
                    <button class="btn btn-primary">
                      <i data-feather="save" class="iconFeather"></i>Kaydet</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card">
              <div class="card-body">
                <div id="alert-danger">
                  <center>
                    <i data-feather="alert-triangle"></i>&nbsp;
                    <span></span>
                  </center>
                </div>
                <div id="alert-success">
                  <center>
                    <i data-feather="check"></i>&nbsp;
                    <span></span>
                  </center>
                </div>
                <div class="card">
                  <div class="card-header"><h4>Admin Panel Logosu</h4></div>
                  <div class="card-body">
                  <?php
                  $logo = $this->db->order_by('logo_id','DESC')->where(array('logo_position'=>0))->limit(1)->get('logo')->result();
                  foreach ($logo as $logo) {
                    if($logo->logo_position==0){
                      if($logo->logo==""){

                      }else{
                        echo '<div class="logoListAdmin">
                              <img src="'.base_url('logo/'.$logo->logo).'">
                              
                          </div>';
                      }
                    }
                  }
                ?>
                </div>
                </div>

                <div class="card">
                  <div class="card-header"><h4>Website Logosu</h4></div>
                  <div class="card-body">
                  <?php
                  $logo = $this->db->order_by('logo_id','DESC')->where(array('logo_position'=>1))->limit(1)->get('logo')->result();
                  foreach ($logo as $logo) {
                    if($logo->logo_position==1){
                      if($logo->logo==""){

                      }else{
                        echo '<div class="logoListAdmin">
                              <img src="'.base_url('logo/'.$logo->logo).'">
                          </div>';
                      }
                    }
                  }
                ?>
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