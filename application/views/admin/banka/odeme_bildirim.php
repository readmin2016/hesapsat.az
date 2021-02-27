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
		    <i data-feather="bell" class="iconFeather"></i>
		    <h5>Ödeme Bildirim Formu</h5>
		  </div>
		  <div class="card-body">
		    <table id="table" class="table">
          <thead>
            <tr>
              <th scope="col">İlan alan</th>
              <th scope="col">@Hesap adı</th>
              <th scope="col">Banka bilgileri</th>
              <th scope="col">Fiyat</th>
              <th scope="col">Komisyon</th>
              <th scope="col">Tutar</th>
              <th scope="col">Tarih</th>
            </tr>
            
          </thead>
          <tbody>
            <?php
            $query = $this->db->get('odeme_bildirim')->result();
            $ilan_liste = $this->db->get('ilanlar')->result();
            foreach ($query as $order) {
              $encode = $order->form;
              $decode = json_decode($encode);
              foreach ($user as $user_row) {
                  
              }

                foreach ($ilan_liste as $row) {
                  if($decode->orderToken==$row->token){
                    $hesap_adi = $row->hesap_kullanici_adi;
                  }
                }
              
              if($order->onay_durum > 0){

              }else{

                echo '<tr>
                        <td>'.$decode->ad_soyad.'</td>
                        <td>'.$hesap_adi.'</td>
                        <td>'.$decode->bank_info.'</td>
                        <td style="text-align:center">'.$decode->fiyat.' TL</td>
                        <td style="text-align:center">'.$decode->kesilecek.' %</td>
                        <td style="text-align:center">'.$decode->beklenen.' TL</td>
                        <td>s</td>
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