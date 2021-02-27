<?php $this->load->view('admin/header')?>

<div class="content-wrapper">
<section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <?php
          $this->load->view('admin/counter')
        ?>

        
      <aside>
        <div class="card">
          <div class="card-header">
            <h5><i data-feather="edit-2" class="iconFeather"></i> Kategori ekle</h5>
          </div>
          <div class="card-body">
            <div class="row">
              <div class="col-lg-6">
                <div id="alert-success">
                  <center>
                    
                  </center>
                </div>
                <div class="card">
                  <div class="card-body">
                    <form action="<?=base_url('admin/addCategory')?>" method="post" enctype="multipart/form-data" id="addCategory_form">
                      <div class="form-group">
                        <label for="">Ana kategori ekle</label>
                        <input type="text" name="anacategory" autocomplete="off" class="form-control" placeholder="Kategori başlığı" required>
                      </div>
                      <div class="form-group">
                        <label for="">Icon ekle</label>
                        <input type="file" name="file" class="form-control"  required>
                      </div>
                      <div class="form-group">
                        <button class="btn btn-primary" id="btn_addCat"><i data-feather="save" class="iconFeather"></i> Ekle</button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
              <div class="col-lg-6">
                <div id="alert-success" class='altSuccess'> 
                  <center>
                    
                  </center>
                </div>
                <div class="card">
                  <form action="<?=base_url('admin/addSubcategori')?>" method="post" id="add-altcategory">
                  <div class="card-body">
                    <div class="form-group">
                      <label for="">Aan akategori seç</label>
                      <select name="scat" id="scat" class="form-control">
                        <option value="">Seçim yapın</option>
                        <?php
                          foreach ($anacategory as $row) {
                            echo '<option value="'.$row->plt_id.'">'.$row->plt_name.'</option>';
                          }
                        ?>
                      </select>
                    </div>
                    <div class="form-group" id="selectAble">
                      <?php
                        foreach ($altcategory as $list) {
                             echo '<input type="checkbox"  id="altcat" name="altcat[]" value="'.$list->cat_value.'" data-title="'.$list->kat_name.'">
                          <label for="" style="font-weight:500">'.$list->kat_name.'</label>
                          <br>';
                        }
                      ?>
                    </div>
                    <div class="dongu">
                      
                    </div>
                    <div class="form-group">
                      <button id="btnAddCategory" style="display:none" class="btn btn-primary"><i data-feather="save" class="iconFeather"></i> Ekle</button>
                      <a href="#" id="reset" style="display:none" class="btn btn-danger"><i data-feather="refresh-ccw" class="iconFeather"></i> Yenile</a>
                    </div>
                  </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </aside>



      </div><!-- /.container-fluid -->
    </section>

</div>







<?php $this->load->view('admin/footer')?>