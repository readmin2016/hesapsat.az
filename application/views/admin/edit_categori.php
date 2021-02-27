<?php $this->load->view('admin/header')?>

<div class="content-wrapper">
<section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <?php
          $this->load->view('admin/counter')
        ?>

        <i></i>
      <aside>
        <div class="row">
          <div class="col-lg-6">
            <div class="card">
              <div class="card-header"><h5>Ana Kategori</h5></div>
                <div class="card-body">
                <table class=table>
                  <tr>
                    <th>#</th>
                    <th>Ana Kategori Adı</th>
                    <th></th>
                  </tr>
                  <?php
                  $color='';
                    foreach ($anacategory as $row) {
                      
                      if($color=='#f9f9f9'){
                        $color = '#fff';
                      }else{
                        $color = '#f9f9f9';
                      }

                      echo '<tr style="background-color:'.$color.'">
                            <td>'.$row->plt_id.'</td>
                            <td>'.$row->plt_name.'</td>
                            <td>
                            <a style="float:right;margin-right:3px" data-bs-toggle="modal" data-bs-target="#editCategory" href="javascript::void" onclick="updateCategory('.$row->plt_id.')" class="btn btn-primary"><i style="width:16px;" data-feather="edit"></i></a>

                              <a style="float:right;margin-right:3px" href="javascript::void" onclick="dltCategory('.$row->plt_id.')" class="btn btn-danger"><i style="width:16px;" data-feather="trash"></i></a>
                            </td>
                          </tr>';
                    }
                  ?>
                </table>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="card">
              <div class="card-header"><h5>Alt Kategori</h5>
                <a href="" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#addNew" style="float:right;"><i data-feather="plus" class="iconFeather"></i> Yeni</a>
              </div>
                <div class="card-body">
                <table class=table>
                  <tr>
                    <th>#</th>
                    <th>Ana Kategori Adı</th>
                    <th></th>
                  </tr>
                  <?php
                  $color='';
                    foreach ($altcategory as $row) {
                      
                      if($color=='#f9f9f9'){
                        $color = '#fff';
                      }else{
                        $color = '#f9f9f9';
                      }

                      echo '<tr style="background-color:'.$color.'">
                            <td>'.$row->kat_id.'</td>
                            <td>'.$row->kat_name.'</td>
                            <td>
                            <a style="float:right;margin-right:3px" data-bs-toggle="modal" data-bs-target="#editAltCategory" href="javascript::void" onclick="updateAltCategory('.$row->kat_id.')" class="btn btn-primary"><i style="width:16px;" data-feather="edit"></i></a>

                              <a style="float:right;margin-right:3px" href="javascript::void" onclick="dltAltCategory('.$row->kat_id.')" class="btn btn-danger"><i style="width:16px;" data-feather="trash"></i></a>
                            </td>
                          </tr>';
                    }
                  ?>
                </table>
              </div>
            </div>
          </div>
        </div>
      </aside>



      </div><!-- /.container-fluid -->
    </section>

</div>


<!-- Modal -->
<div class="modal fade" id="editCategory" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <form action="<?=base_url('admin/updateCategory')?>" method="post">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Kategoride düzenlemesi</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          ...
        </div>
        <div class="modal-footer">
          <button class="btn btn-primary"><i data-feather="save" class="iconFeather"></i> Kaydet</button>
        </div>
      </form>
    </div>
  </div>
</div>


<!-- Modal -->
<div class="modal fade" id="editAltCategory" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <form action="<?=base_url('admin/updateAltCategory')?>" method="post">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Kategoride düzenlemesi</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          ...
        </div>
        <div class="modal-footer">
          <button class="btn btn-primary"><i data-feather="save" class="iconFeather"></i> Kaydet</button>
        </div>
      </form>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="addNew" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Alt Kategori oluştur</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="<?=base_url('admin/addAltcategory')?>" method="post">
            <div class="form-group">
              <input type="text" name="alt_cat_name" placeholder="Alt Kategori adi" class="form-control">
            </div>
            <div class="form-group">
              <button class="btn btn-primary"><i data-feather="save" class="iconFeather"></i> Ekle</button>
            </div>
          </form>
        </div>
    </div>
  </div>
</div>


<?php $this->load->view('admin/footer')?>