<?php $this->load->view('include/header')?>


<div class="head_panel">
	<div class="container">
		<span class="material-icons home">home</span>
		<span><a href="<?php echo base_url()?>">Ana Sayfa </a> > Sıkça Sorulan Sorular</span>
	</div>
</div>

<div class="container">
	<div class="content margin-top-2x">
    <ul class="collapsible">
      <?php
        foreach ($faq as $row) {
          echo '<li>
                  <div class="collapsible-header">'.$row->faq_soru.' <span class="material-icons" id="expand_more">expand_more</span></div>
                  <div class="collapsible-body"><span>'.$row->faq_cevap.'</span></div>
                </li>';
        }
      ?>
    </ul>
	</div>
</div>


<?php $this->load->view('include/footer')?>