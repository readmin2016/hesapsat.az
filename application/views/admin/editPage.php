<?php $this->load->view('admin/header')?>

<div class="content-wrapper">
<section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <?php
      $this->load->view('admin/counter')
    ?>

       <div class="row">
         <div class="col-md-4">
           <div class="card">
             <div class="card-header">
               <h4><i data-feather="file-text" class=""></i> Sayfalar</h4>
             </div>
                <div class="list-group">
                  <?php
                    foreach ($pages as $row) {
                     echo '<a href="?page='.$row->page_id.'" class="list-group-item list-group-item-action">
                            <i data-feather="chevron-right" class="iconFeather"></i>
                            '.$row->page_name.'
                            </a>';
                    }
                  ?>
                </div>
           </div>
         </div>

         <div class="col-md-8">

          <?php

            if(isset($_GET['page'])){ 
              $where = $_GET['page'];
              $rows = $this->db->where(array('page_id'=>$_GET['page']))->get('pages')->result();
              $pagess = $this->db->where(array('page_id'=>$_GET['page']))->get('sayfalar')->result();
              foreach ($rows as $row) {
                # code...
              }
              foreach ($pagess as $page) {
                # code...
              }
              $result = $this->process_model->sayfa_control($where);
              if($result==1){ ?>

                <div class="card">
                  <div class="card-header">
                    <i data-feather="edit" class="iconFeather"></i>
                    <h5>Sayfa Düzenleme</h5>
                  </div>
                  <div class="card-body">
                    <form action="<?php echo base_url('admin/updatePage')?>" method="post">

                      <h5><b><?=$row->page_name?></b> seçildi</h5>
                      <br>
                       <div class="form-group">
                        <input type="text" name="mapiframe" class="form-control" value="<?=$page->iframe?>" placeholder="Google Haritanın <iframe> kodunu yapıştırın">
                       </div>

                      <div class="form-group">
                        <textarea  style="display:none" name="texteditor" id="editor" class="form-control"><?=$page->icerik?></textarea>
                      </div>
                      <input type="hidden" name="pagename" value="<?=$row->page_name?>">
                      <input type="hidden" name="pageid" value="<?=$page->page_id?>">
                      <div class="form-group">
                        <button id="btn" class="btn btn-primary">
                          <i data-feather="save" class="iconFeather"></i>
                          KAYDET
                        </button>
                      </div>
                    </form>

                  </div>
               </div>

            <?php  }else{ ?>

              <div class="card">
                  <div class="card-header">
                    <i data-feather="edit" class="iconFeather"></i>
                    <h5>Sayfa Düzenleme</h5>
                  </div>
                  <div class="card-body">
                    <form action="<?php echo base_url('admin/addPageContent')?>" method="post">
                      <h5><b><?=$row->page_name?></b> seçildi</h5>
                       <div class="form-group">
                        <input type="text" name="iframe" class="form-control" placeholder="Google Haritanın <iframe> kodunu yapıştırın">
                       </div>

                      <div class="form-group">
                        <textarea style="display:none" name="texteditor" id="" class="form-control"></textarea>
                      </div>
                      <input type="hidden" name="pageid" value="<?=$_GET['page']?>">

                      <div class="form-group">
                        <button id="btn" class="btn btn-primary">
                          <i data-feather="save" class="iconFeather"></i>
                          KAYDET
                        </button>
                      </div>
                    </form>

                  </div>
               </div>


            <?php  }
            ?>

              

          <?php  }else{ ?>


              


          <?php  }

          ?>

           


         </div>
       </div>

      </div><!-- /.container-fluid -->
    </section>

</div>







<?php $this->load->view('admin/footer')?>