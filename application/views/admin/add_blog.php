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
		    <i data-feather="book-open" class="iconFeather"></i>
		    <h5>Blog</h5>
		  </div>
		  <div class="card-body">
		    <form action="<?php echo base_url('admin/create_blog')?>" method="post" enctype="multipart/form-data">

		     <div class="form-group">
		     	<input type="text" name="baslik" class="form-control" placeholder="Blog için başlık">
		     </div>

		     <div class="form-group">
		     	<input type="file" id="fileupload" name="file" class="form-control">
		     	<label for="fileupload" id="up_btn"><i data-feather="camera"></i><br> Görsel ekle <br>
		     		<span id="file_text" style="font-weight:normal">file name</span></label>

		     </div>

		     <div class="form-group">
			  	<textarea name="texteditor" id="" class="form-control"></textarea>
			  </div>

			  <div class="form-group">
			  	<button id="btn" class="btn btn-primary">
			  		<i data-feather="save" class="iconFeather"></i>
			  		KAYDET
			  	</button>
          <br>
          <br>
          <input type="checkbox" name="onemli" value="1">
          Önemli Yazı
			  </div>
			</form>

		  </div>
		 
		</div>

      </div><!-- /.container-fluid -->
    </section>

</div>







<?php $this->load->view('admin/footer')?>