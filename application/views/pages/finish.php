<?php $this->load->view('include/header')?>

<?php
	foreach ($uyelist as $row) {}

?>

<div class="container">
	<div class="content margin-top-2x">
		<div class="checkout-steps hidden-xs-down">
			<a  class="active" href="#" style="cursor:no-drop"><i data-feather="award" class="icon-award" style="margin-top:-3px;"></i> İşlem Tamam</a>
			<a href="#" style="cursor:no-drop"><span class="angle"></span><i data-feather="camera" class="icon-camera" style="margin-top:-3px;"></i> Görseller</a>
			<a href="#" style="cursor:no-drop"><span class="step-indicator"></span><span class="angle"></span><i data-feather="file-text" class="icon-file-text" style="margin-top:-3px;"></i> Bilgiler</a>
		</div>
	</div>


	<div class="text-center heightest" style="margin-top:50px;text-align:center">
			<h2 class="text-center">
				<i data-feather="check-circle" class="icon-check-circle" style="margin-bottom:10px; color:green;"></i> <br> İşleminiz başarıyla gerçekleştirildi...
			</h2>
			<div style="padding: 20px; margin-bottom: 5px; margin-top: 5px; text-align:center; font-size:16px;">
				Ilaniniz onayimiza gonderildi.Yogunluk durumuna gore en gec 1 saat icerisinde ilaniniz kntrol edilecek ve her hangi bir uygunsuzluk tesbit edilmemesi durumunda yayina alinacakdir. Umariz hesabinizi en kisa surede bizim de katkilarimizla satarsiniz. Ilaniniz ile ilgili tum gelismeleri
				<b style="color:var(--primaryColor)">Profil > Ilanlarim </b> sayfasindan takib ede bilirsiniz
				<br><br><br>
				<p style="font-size:21px;">Her türlü konuda soru ve sorunlarınız için iletişim sayfasından bize 7/24 ulaşabilirsiniz.</p><br><br>
			</div>
		</div>
	



</div>




<?php $this->load->view('include/footer')?>