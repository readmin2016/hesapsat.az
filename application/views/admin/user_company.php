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
        <i data-feather="award" class="iconFeather"></i>
        <h5>Üyelerden <b>Kampanyalar</b></h5>
      </div>
      <div class="card-body">
        <div class="row">

            <div class="table-responsive">
              <table id="table" class="table table-striped table-hover" style="font-size:14px;">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Konu Başlık</th>
                    <th scope="col">Açıklama</th>
                    <th scope="col">Paylaşan üye</th>
                    <th scope="col">Tarih</th>
                    <th scope="col"></th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                    foreach ($company_list as $com) {
                      foreach ($userlist as $user) {
                        # code...
                      
                      if($com->uploader_user_id==$user->user_id){
                        $titleLimit = mb_substr($com->konu_baslik,0,40);
                        $descLimit = mb_substr($com->icerik,0,50);
                        $uploader = explode(' ', $user->kullanici_adi);

                          if($com->durum >0){

                            echo '<tr>
                                  <td>1</td>
                                  <td>'.$titleLimit.'...</td>
                                  <td>'.$descLimit.'...</td>
                                  <td>'.$uploader[0].'</td>
                                  <td>'.$com->tarih.'</td>
                                  <td><a href="'.base_url('admin/company_duzenle?incele='.$com->com_id).'" class="btn btn-info"><i data-feather="edit" class="iconFeather-1"></i>Düzenle</a></td>
                                </tr>';

                          }else{

                            echo '<tr class="danger">
                                  <td>1</td>
                                  <td>'.$titleLimit.'...</td>
                                  <td>'.$descLimit.'...</td>
                                  <td>'.$uploader[0].'</td>
                                  <td>'.$com->tarih.'</td>
                                  <td><a href="'.base_url('admin/company_duzenle?incele='.$com->com_id).'" class="btn btn-warning"><i data-feather="eye" class="iconFeather-1"></i>İncele</a></td>
                                </tr>';

                          }
                          
                        }
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







<?php $this->load->view('admin/footer')?>