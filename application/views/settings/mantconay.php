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
				<div class="alert alert-primary margin-bottom-1x"><span class="alert-close" data-dismiss="alert"></span>
					<h3>Resimli TC onayını hangi üyelerimiz yapmalıdır:</h3>
					1. Daha önce <b>kendisine ait</b> banka hesabına çekim <u>yapmamış</u> ve kendisine ait banka hesabı dışındaki platformlara (Papara, İninal, fastPay) çekim talebi oluşturmak isteyen <b>SATIŞ İŞLEMİ YAPMIŞ OLAN ÜYELERİMİZİN</b> resimli TC doğrulamasını gerçekleştirmesi gerekmektedir.<br><br>
					2. Daha önce kendisine ait banka hesabına çekim talebinde bulunmuş ve ödeme almış satıcıların ve çekim taleplerini kendisine ait banka hesabına yapacak satış işlemi yapmış üyelerimizin bu onayı yapmasına gerek yoktur.<br><br>
					3. Yüklediğiniz fotoğraf onay işleminden sonra sistem tarafından otomatik olarak silinmekte ve kesinlikle kaydedilmemektedir.
				</div>

				<div class="card margin-bottom-1x" id="restcon">
				<div class="card-header"><b><i data-feather="grid" class="iconmarek3"></i> Resimli TC Onayı </b><span class="h6 fltright"><span style="color:red"><i data-feather="x" class="icon-x marek3"></i> <b>ONAYLI DEĞİL</b></span></span></div>
				<div class="card-body">
				<div class="row">
				<div class="col-md-6 col-12">
				<img src="https://hesapsat.net/img/kimlik.jpg" style="width:100%" title="Kimlik">
				</div>
				<div class="col-md-6 col-12">
				Lütfen örnek resimde belirtildiği şekilde <b>resim içeren</b> kimliğinizle birlikte fotoğraf yükleyin. <br><br>
				<b><i data-feather="alert-triangle" class="icon-alert-triangle"></i> UYARILAR!</b><br>
				1. Göderilen resim özçekim (selfie) şeklinde olmalıdır. <br>
				2. Göndereceğiniz fotoğrafta kimliğinizin ön yüzü ile sizin yüzünüz yer almalıdır<br>
				3. Göndereceğiniz fotoğraftaki kimlik bilgileri okunabilir olmalıdır<br>
				4. Örnek resimde <b>HESAPSAT</b> yazısı altındaki <b>01.01.2020</b> tarihini, fotoğrafı sisteme yüklediğiniz tarih olarak giriniz<br><br>
				<div class="alert alert-success" style="display:none">
					<span data-feather="check-circle"></span>
						Resim gönderildi;
				</div>
				<form action="" method="post" id="kimlik_upp" enctype="multipart/form-data">
					<input name="dosya" id="file-input1" style="display:none" type="file" accept="image/*">
					<input type="hidden" name="token" value="409f569dacab73dfc1c46fdeb268a830">
					<input type="hidden" name="userid" id="userid" value="<?=$row->user_id?>">
				</form>
				<label for="file-input1">
				<span class="btn btn-primary" style="cursor:pointer"><i data-feather="upload"></i>&nbsp; Fotoğrafı Yükle</span>
				</label>
				</div>
				</div>
				</div>
				</div>
				
				<!-- END ROW -->
				
			</div>
		</div>
	</div>
</div>






<?php $this->load->view('include/footer')?>