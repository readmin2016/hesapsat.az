<?php $this->load->view('include/header')?>

<?php
	foreach ($uyelist as $row) {
	}
?>


<div class="container">
	<div class="content" style="margin-top:15px;">
		<div class="row">
			<?php $this->load->view('settings/leftBar')?>

			<div class="col-lg-9 col-12 adress-list">
				<div class="alert alert-primary alert-dismissible fade show margin-bottom-1x">
					<i data-feather="alert-triangle" class="icon-alert-triangle"></i> Şifreniz minimum <b>6 karakterden</b> oluşmalıdır. Sizi zorunlu tutmuyoruz fakat şifrenizde rakam ve büyük-küçük harf kombinasyonlarını kullanmanızı şiddetle tavsiye ederiz. Güvenliğiniz açısından kolay tahmin edilebilecek bir kombinasyon belirlemeyiniz.
				</div>

				<div class="card margin-bottom-1x">
				<div class="card-header"><b><i data-feather="shield" class="icon-shield marek3"></i> Şifre Değiştir</b></div>
				<div class="card-body">
				<div class="alert alert-success alert-dismissible fade show margin-bottom-1x" style="display:none">
					<i data-feather="check" class="icon-alert-triangle"></i> <b>Şifreniz başarıyla yenilenmiştir</b>
				</div>
				<div class="alert alert-danger alert-dismissible fade show margin-bottom-1x" style="display:none">
					<i data-feather="alert-triangle" class="icon-alert-triangle"></i> <span></span>
				</div>
				<form action="<?php echo base_url('settings/change_password')?>" method="post" id="sifredegissetform">
				<div id="sifredegisset-result"></div>
				<div class="form-group">
				<label for="myPassword3">Mevcut Şifre</label>
				<input name="passnow" class="form-control form-control-rounded" type="password" id="myPassword3" placeholder="Mevcut Şifre">
				</div>
				<div class="form-group">
				<label for="myPassword1">Yeni Şifre</label>
				<input name="passnew" class="form-control form-control-rounded" type="password" id="myPassword1" placeholder="Yeni Şifre">
				</div>
				<div class="col-12">
				<div class="text-right">
				<button id="sifredegisset-button" class="btn btn-primary btn-rounded fltright">
					<i data-feather="refresh-ccw" class="icon-refresh-ccw"></i> Değiştir
				</button>
				</div>
				</div>
				<input type="hidden" name="token" value="409f569dacab73dfc1c46fdeb268a830">
				<input type="hidden" name="userid" value="<?=$row->user_id?>">
				</form>
				</div>
				</div>

				
				<!-- END ROW -->
				
			</div>
		</div>
	</div>
</div>






<?php $this->load->view('include/footer')?>