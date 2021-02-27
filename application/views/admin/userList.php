<?php $this->load->view('admin/header')?>

<div class="content-wrapper">
<section class="content" style="margin-top:10px;">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <?php
      $this->load->view('admin/counter')
    ?>
        
        <div class="row">
          <div class="col-lg-12">
            <div class="card">
              <div class="card-header"><h5><i data-feather="file-text" class="iconFeather"></i> Üye düzenle</h5></div>
              <div class="card-body">
                <table id="blogtable" class="table table-striped">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Kullanici Adi</th>
                      <th>Prefix</th>
                      <th>Telefon Numarasi</th>
                      <th>E-mail Adresi</th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                      foreach ($user_list as $user) {
                        if($user->activation==1){

                          echo '<tr>
                                <td width="50">'.$user->user_id.'</td>
                                <td>'.$user->kullanici_adi.'</td>
                                <td>+'.$user->prefix.'</td>
                                <td>'.$user->phone.'</td>
                                <td>'.$user->eposta.'</td>
                                <td >

                                <a style="float:right" href="'.base_url('uyeler/deleteVipUser?delete='.$user->user_id).'" class="btn btn-danger"><i data-feather="trash" class="iconFeather"></i> <span>Sil</span></a>

                                <a style="float:right;margin-right:5px;" class="btn btn-warning" href="'.base_url('uyeler/active?succ='.$user->user_id).'"><i data-feather="unlock" class="iconFeather"></i>Aktif etmek</a>

                                </td>
                              </tr>';

                        }else{

                            echo '<tr>
                                  <td width="50">'.$user->user_id.'</td>
                                  <td>'.$user->kullanici_adi.'</td>
                                  <td>+'.$user->prefix.'</td>
                                  <td>'.$user->phone.'</td>
                                  <td>'.$user->eposta.'</td>
                                  <td>
                                  <a style="float:right;" class="btn btn-info" href="" onclick="edit_vip('.$user->user_id.')" data-bs-toggle="modal" data-bs-target="#userChange"><i data-feather="edit-2" class="iconFeather"></i>Düzenle</a></td>
                                </tr>';

                          }
                         
                          
                      }
                    ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>

      </div><!-- /.container-fluid -->
    </section>



</div>



<!-- Modal -->
<div class="modal fade" id="userChange" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><i data-feather="edit-2" style="margin-top:4px" class="iconFeather"></i> Üye düzenle</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
        <div class="modal-body">
          


        </div>
      </div>
    </div>
  </div>
</div>



<?php $this->load->view('admin/footer')?>