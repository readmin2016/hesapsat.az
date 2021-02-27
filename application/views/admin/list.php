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
        <i data-feather="user-plus" class="iconFeather"></i>
        <h5>Kullanıcılar</h5>
      </div>
      <div class="card-body">
              <table id="table" class="table">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Admin Kullanıcı Adı</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                    foreach ($admin_listesi as $row) {
                      echo '<tr>
                            <td width="50">'.$row->admin_id.'</td>
                            <td>'.$row->admin_name.'</td>
                            <td width="100">
                              <a href="'.base_url('admin/deleteAdmin?sil='.$row->admin_id).'" class="btn btn-danger"><i data-feather="trash" class="iconFeather"></i> Sil</a>
                            </td>
                          </tr>';
                    }
                  ?>
                  
                </tbody>
              </table>
              

      </div>
     
    </div>

      </div><!-- /.container-fluid -->
    </section>

</div>







<?php $this->load->view('admin/footer')?>