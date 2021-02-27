<?php $this->load->view('include/header')?>




<div class="container">
	<div class="content" style="margin-top:15px;">
		<div class="row">
			<?php $this->load->view('settings/leftBar')?>

			<div class="col-lg-9 col-12 adress-list">
				<div class="alert alert-primary alert-dismissible fade show margin-bottom-1x">
					<h4 style="margin-bottom:10px;"><b>
						<i data-feather="check-circle" class=""></i> Cüzdanınızdaki parayı çekeceğiniz ödeme hesapları</b></h4>
					Hesapsat.net cüzdanınızda bulunan parayı aşağıda listelenmiş sağlayıcılardan herhangi birine çekim talebi oluşturarak alabilirsiniz. Yanlış veya eksik girilmesi durumunda doğabilecek tüm olumsuzluklardan üyenin kendisi sorumludur!
				</div>

				<div class="card margin-bottom-1x" id="pay-selection">
					<div class="card-header"><b><i data-feather="plus" class="icon-plus"></i> Yeni bir ödeme yöntemi ekle</b></div>
					<div class="card-body">
					<div style="float:left; margin:5px;">
					<center>
					<a href="settings/bank/bank/#digode">
					<img class="d-block mx-auto img-thumbnail mb-1" src="https://hesapsat.net/img/payment/bank_l.jpg">
					<b>Banka</b>
					</a></center>
					</div>
					<div style="float:left; margin:5px;">
					<center>
					<a href="settings/bank/ininal/#digode">
					<img class="d-block mx-auto img-thumbnail mb-1" src="https://hesapsat.net/img/payment/ininal_l.jpg">
					<b>İninal</b>
					</a></center>
					</div>
					<div style="float:left; margin:5px;">
						<center>
						<a href="settings/bank/papara/#digode">
							<img class="d-block mx-auto img-thumbnail mb-1" src="https://hesapsat.net/img/payment/papara_l.jpg">
							<b>Papara</b>
						</a>
						</center>
					</div>

					</div>
				</div>
				
				<!-- END ROW -->
				
			</div>
		</div>
	</div>
</div>






<?php $this->load->view('include/footer')?>