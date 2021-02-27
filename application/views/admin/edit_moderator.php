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
              <div class="card-header"><h5><i data-feather="file-text" class="iconFeather"></i> Moderatör listesi</h5></div>
              <div class="card-body">
                <table id="blogtable" class="table table-striped">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Moderatör logo</th>
                      <th>Moderatör adı</th>
                      <th>Moderatör vazifesi</th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                      foreach ($md_list as $md) {
                         echo '<tr>
                                <td>'.$md->md_id.'</td>';
                                if($md->md_logo==""){
                                  echo '<td>Resim yok</td>';
                                }else{
                                  echo '<td><img src="'.base_url('md_logo/'.$md->md_logo).'" width="50"></td>';
                                }
                        echo  '
                                <td>'.$md->md_name.'</td>
                                <td><a href="#" id="vazife" data-vazife="'.$md->md_vazife.'">'.$md->md_vazife.'</a></td>
                                <td width="110">
                                  <a href="#" class="btn btn-primary" onclick="edit_md('.$md->md_id.')" data-bs-toggle="modal" data-bs-target="#mdChange"><i data-feather="edit" class="iconFeather"></i></a>
                                  <a href="javascript::void" onclick="dlt_md('.$md->md_id.')" class="btn btn-danger"><i data-feather="trash" class="iconFeather"></i></a>
                                </td>
                              </tr>';
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
<div class="modal fade" id="mdChange" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><i data-feather="edit-2" style="margin-top:4px" class="iconFeather"></i> Moderatör düzenle</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
        <div class="modal-body">
        

        </div>
      </div>
    </div>
  </div>
</div>



<?php $this->load->view('admin/footer')?>