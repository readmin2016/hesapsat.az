<?php $this->load->view('include/header')?>


<div class="head_panel">
	<div class="row justify-content-md-center">
		<div class="col-md-10">
			<span class="material-icons home">home</span>
		    <span><a href="<?php echo base_url()?>">Ana Sayfa </a> > Bize Ulaşın</span>
		</div>
	</div> 
</div>

<div class="container">
	<div class="content margin-top-2x">
		
		<div class="row">
			<div class="col-md-4">
				<div class="card">
					<div class="card-header"><h5>Müşteri Hizmetleri</h5></div>
					<div class="card-body">
						<ul class="list-icon">
							<li> <i data-feather="mail" style="width:16px;margin-top:-2px;"></i> <a class="navi-link" href="mailto:destek@hesapsat.net">destek@ilansat.net</a></li>
							<li> <i data-feather="phone" style="width:16px;margin-top:-2px;"></i> +90 850 888 0537</li>
							<li> <i data-feather="phone" style="width:16px;margin-top:-2px;"></i> +90 538 300 3737</li>
							<li> <i data-feather="message-circle" style="width:16px;margin-top:-2px;color:green"></i> +90 538 300 3737</li>
						</ul>
					</div>
				</div>				
			</div>

			<div class="col-md-4">
				<div class="card">
					<div class="card-header"><h5>Şirket Bilgileri</h5></div>
					<div class="card-body">
						<ul class="list-icon">
							<li> <i data-feather="award" style="width:16px;margin-top:-2px;"></i> Ticari Ünvan: <b>MIYEC Web Teknolojileri</b></li>
							<li> <i data-feather="home" style="width:16px;margin-top:-2px;"></i> Vergi Dairesi: <b>Etimesgut</b></li>
							<li> <i data-feather="at-sign" style="width:16px;margin-top:-2px;"></i> Vergi Kimlik No: <b>1960421993</b></li>
						</ul>
					</div>
				</div>				
			</div>

			<div class="col-md-4">
				<div class="card">
					<div class="card-header"><h5>Adres Bilgileri</h5></div>
					<div class="card-body">
						<ul class="list-icon">
							<li> <i data-feather="map-pin" style="width:16px;margin-top:-2px;"></i> Atakent mahallesi, 804 cadde, K5 Adası A24 6/9 20, 06796 Etimesgut/Ankara</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		
		<hr class="margin-top-2x">
		<!-- MAPS -->
		<div class="row">
			<div class="col-md-8 col-12 offset-md-2">
				<div class="card mb-30">
					<div class="google-map" style="height: 250px;">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3058.524710195606!2d32.60440021487924!3d39.9520198916953!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14d33bf78527b86f%3A0x235c562778bc0f35!2sMIYEC%20Web%20Teknolojileri!5e0!3m2!1str!2str!4v1567225307697!5m2!1str!2str" style="border:0;" allowfullscreen="" height="250" frameborder="0"></iframe>
					</div>
					<div class="card-body">
						<ul class="list-icon">
							<li> <i class="fa fa-map"></i> Atakent mahallesi, 804 cadde, K5 Adası A24 6/9 20, 06796 Etimesgut/Ankara</li>
							<li> <i class="fa fa-exclamation"></i> <b>Önemli Bilgi:</b> Ofisimizi ziyaret etmeden önce lütfen randevu alınız!</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


<?php $this->load->view('include/footer')?>