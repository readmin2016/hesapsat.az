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
		    <i data-feather="alert-circle" class="iconFeather"></i>
		    <h5>Onay bekleyen ilanlar</h5>
		  </div>
		  <div class="card-body">
		    <table id="table" class="table">
          <thead>
            <tr>
              <th scope="col" width="80">#</th>
              <th scope="col">Ilan yukleyen</th>
              <th scope="col">@Hesap adı</th>
              <th scope="col">Ana Kategorisi</th>
              <th scope="col">Alt Kategorisi</th>
              <th scope="col">Tarih</th>
              <th scope="col">İncele</th>
            </tr>
          </thead>
          <tbody>
            <?php
              foreach ($ilan_liste as $row) {
                foreach ($user as $user_row) {
                  if($user_row->user_id==$row->userid){
                    $username= $user_row->kullanici_adi;
                  }
                }
                foreach ($anacategory as $a_cat) {
                  if($a_cat->plt_id==$row->ilan_anacategory){
                    $a_category = $a_cat->plt_name;
                  }
                }
                foreach ($altcategory as $alt_cat) {
                  if($alt_cat->value==$row->ilan_altcategory){
                    $alt_category = $alt_cat->ish_name;
                  }
                }

                if($row->activation==0){

                  echo '<tr style="background:#ff000026;color: #990d0d;">
                        <th>'.$row->ilan_id.'</th>
                        <td>'.$username.'</td>
                        <td>'.$row->hesap_kullanici_adi.'</td>
                        <td>'.$a_category.'</td>
                        <td>'.$alt_category.'</td>
                        <td>'.$row->yuklenme_tarih.'</td>
                        <td>

                        <a href="'.base_url('admin/onayla/'.$row->ilan_id).'" style="margin-right:3px" class="btn btn-success">
                        <i data-feather="check" class="iconFeather"></i> Onayla</a>

                        <a href="'.base_url('admin/redd/'.$row->ilan_id).'" style="margin-right:3px" class="btn btn-danger">
                        <i data-feather="x" class="iconFeather"></i> Reddet</a>

                        <a href="'.base_url('admin/ilan_duzenle/'.$row->ilan_id).'" style="margin-right:3px" class="btn btn-primary">
                        <i data-feather="edit" class="iconFeather"></i>İlanı gör</a>

                        </td>
                      </tr>';

                }else{

                  echo '<tr>
                        <th>'.$row->ilan_id.'</th>
                        <td>'.$username.'</td>
                        <td>'.$row->hesap_kullanici_adi.'</td>
                        <td>'.$a_category.'</td>
                        <td>'.$alt_category.'</td>
                        <td>'.$row->yuklenme_tarih.'</td>
                        <td>';

                          if($row->ilan_durum>0){
                            echo '<a href="'.base_url('admin/ilan_aktif/'.$row->ilan_id).'" title="Yayından kaldır" style="margin-right:3px" class="btn btn-success">
                        <i data-feather="unlock" class="iconFeather"></i>Yayına al</a>';
                          }else{
                            echo '<a href="'.base_url('admin/ilan_pasif/'.$row->ilan_id).'" title="Yayından kaldır" style="margin-right:3px" class="btn btn-danger">
                        <i data-feather="lock" class="iconFeather"></i>Kaldır</a>';
                          }

                        echo '<a href="'.base_url('admin/ilan_duzenle/'.$row->ilan_id).'" style="margin-right:3px" class="btn btn-primary">
                        <i data-feather="edit" class="iconFeather"></i>İncele</a>

                        </td>
                      </tr>';
                }
              }
            ?>
            
          </tbody>
        </table>
		  </div>
		 
		</div>

      </div><!-- /.container-fluid -->
    </section>

</div>



<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        

      </div>
      <div class="modal-footer">
        <a href="" type="button" class="btn btn-danger" data-bs-dismiss="modal">Sil</a>
        <button type="button" class="btn btn-primary">Onayla</button>
      </div>
    </div>
  </div>
</div>




<?php $this->load->view('admin/footer')?>