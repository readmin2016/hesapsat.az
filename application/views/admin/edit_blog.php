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
		    <i data-feather="file-text" class="iconFeather"></i>
		    <h5>Blog Liste</h5>
		  </div>
		  <div class="card-body">
        <div class="table-responsive">
		    <table class="table align-middle table-striped" id="blogtable">
          <thead>
            <tr>
              <th scope="col" width="100">#</th>
              <th scope="col">Başlık</th>
              <th scope="col">Resim</th>
              <th scope="col"></th>
            </tr>
          </thead>
          <tbody>
            <?php
              foreach ($bloglist as $row) {
                $limit = mb_substr($row->bg_title,0,50);
                echo '<tr>
                      <th>'.$row->bg_id.'</th>
                      <td>'.$limit.'...</td>
                      <td><img src="'.base_url('blogupload/'.$row->bg_image).'" width="50"></td>
                      <td width="130">
                          <a href="#" class="btn btn-primary" data-bs-toggle="modal" onclick="editBlog('.$row->bg_id.')" data-bs-target="#editBlog">
                          <i data-feather="edit" class="iconFeather"></i></a>
                          <a href="javascript::void" onclick="dlt_blog('.$row->bg_id.')" class="btn btn-danger"><i data-feather="trash" class="iconFeather"></i></a></td>
                    </tr>';
              }
            ?>
            
          </tbody>
        </table>
      </div>
		  </div>
		 
		</div>

      </div><!-- /.container-fluid -->
  </section>

</div>



<!-- Modal -->
<div class="modal fade" id="editBlog" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><i data-feather="book-open" class=""></i>&nbsp; Blog düzenleme</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

      </div>
    </div>
  </div>
</div>



<?php $this->load->view('admin/footer')?>