<?php $this->load->view('include/header')?>


<div class="container">
	<div class="content" style="margin-top:30px;">
		<div class="row">
			<div class="col-lg-3 listing-nav">
				<div class="list-group">
					<aside class="ilanlist">
						<h5><i data-feather="award"></i>Ilanlarim</h5>
					</aside>
				  	<a href="#" class="list-group-item list-group-item-action active" aria-current="true">
				  		<i data-feather=activity></i>
				    Yayinda olan ilanlarim
				    <span class="badge rounded-pill bg-light bg-right">1</span>
				  </a>
				  <a href="#" class="list-group-item list-group-item-action " tabindex="-1" aria-disabled="true">
				  	<i data-feather="eye-off"></i>
				  	Pasif ilanlarim <span class="badge rounded-pill bg-primary bg-right"k">1</span></a>
				</div>
			</div>
		</div>
	</div>
</div>


<?php $this->load->view('include/footer')?>