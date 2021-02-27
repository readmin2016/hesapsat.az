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
		    <i data-feather="shopping-bag" class="iconFeather"></i>
		    <h5>Satılan ilanlar</h5>
		  </div>
		  <div class="card-body">
		    <table class="table">
          <thead>
            <tr>
              <th scope="col" width="80">#</th>
              <th scope="col">@Hesap adı</th>
              <th scope="col">Kategorisi</th>
              <th scope="col">Abone sayı</th>
              <th scope="col">Fiyatı</th>
              <th scope="col">Tarih</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th>1</th>
              <td>Mark</td>
              <td>Otto</td>
              <td>Otto</td>
              <td>Otto</td>
              <td>Otto</td>
            </tr>
          </tbody>
        </table>
		  </div>
		 
		</div>

      </div><!-- /.container-fluid -->
    </section>

</div>







<?php $this->load->view('admin/footer')?>