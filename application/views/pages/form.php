<?php
	foreach ($uyelist as $row) {}

?>
	<?php
		foreach ($anacategories as $anacat) {
			foreach ($altcategories as $altcat) {

			}
			if($anacategory==$anacat->plt_id){
					echo '<h5 style="font-size:18px;font-family:Raleway" class="margin-bottom-1x"><b><i data-feather="instagram"></i> '.$anacat->plt_name.' <i data-feather="chevrons-right"></i> '.$altcat->ish_name.' </b> kategorisinde ilan oluşturuyorsunuz...</h5>';
				}
			
		}
	?>

	<?php

		// $yazi = 'Satılık - takipçili Instagram Hesabı';
		// $eski = '-';
		// $say = '135K';
		//  echo str_replace($eski, $say, $yazi);
	?>

	<div class="alert alert-danger ilan_hata" style="display:none;border-radius:10px; margin-bottom:10px;">
		<span class="alert-close" data-dismiss="alert"></span>
		<center><b><i data-feather="alert-triangle"></i></b> <span></span></center>
	</div>

	<div class="row">
		<div class="col-12 margin-bottom-1x">
			<?php
				if($anacategory==10){
					if($altcat->value==100){ ?>


				<div class="card">
					<div class="card-header text-bold">
						<i data-feather="mail"></i>
						Eposta Bilgileri
					</div>
					<div class="card-body">
						<div class="egedanger margin-bottom-1x" style="margin:0px;">
							<div class="egedangeralt">
								<b><i data-feather="alert-triangle"></i> UYARI:</b> Yanlış bilgi veren satıcılar anında <u>banlanacaktır!</u>
								<br><i class="icon-info marek3"></i> Eğer hesabınıza <u>hiç mail eklenmediyse</u> ilk epostayı ve revert mailini <b>VERİLECEK</b> olarak işaretleyin
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
								<label for="kureposta"><b>Orjinal (ilk)</b> Eposta (<a style="color:#38c;" data-bs-toggle="modal" data-bs-target="#kurucuinfo"> Bu ne demek, tıkla! </a>)</label>
								<select id="kureposta" name="kureposta" class="form-control form-control-rounded">
								<option value="">Lütfen Seçiniz</option>
								<option value="1">Verilecek</option>
								<option value="2">Verilmeyecek</option>
								</select>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
								<label for="gereposta"><b>Revert</b> Maili (<a style="color:#38c;" data-bs-toggle="modal" data-bs-target="#revertinfo"> Bu ne demek, tıkla! </a>)</label>
								<select id="gereposta" name="gereposta" class="form-control form-control-rounded">
								<option value="">Lütfen Seçiniz</option>
								<option value="1">Verilecek</option>
								<option value="2">Verilmeyecek</option>
								</select>
								</div>
							</div>
						</div>
					</div>
				</div>

						
				<?php	}
				}
			?>
		</div>
		<div class="col-12 margin-bottom-1x">

			<div class="card">
			<div class="card-header text-bold"><i data-feather="pie-chart"></i> İstatistiksel Bilgiler</div>
			<div class="card-body">
			<div class="row">
			<div class="col-sm-6">
			<div class="form-group">
			<label for="ortakipci"><b>Organik</b> takipçi oranı</label>
			<select id="ortakipci" name="ortakipci" class="form-control form-control-rounded">
				<option value="">Lütfen Seçiniz</option>
				<?php
					foreach ($yuzde as $yuzde1) {
						echo '<option value="'.$yuzde1->oran_yuzde.'">'.$yuzde1->oran_yuzde.'</option>';
					}
				?>
			</select>
			</div>
			</div>
			<div class="col-sm-6">
			<div class="form-group">
			<label for="turktakipci"><b>Türk</b> takipçi oranı</label>
			<select id="turktakipci" name="turktakipci" class="form-control form-control-rounded">
				<option value="">Lütfen Seçiniz</option>
				<?php
					foreach ($yuzde as $yuzde2) {
						echo '<option value="'.$yuzde2->oran_yuzde.'">'.$yuzde2->oran_yuzde.'</option>';
					}
				?>
			</select>
			</div>
			</div>
			<div class="col-sm-6">
			<div class="form-group">
			<label for="kadintakipci"><b>Kadın</b> takipçi oranı</label>
			<select id="kadintakipci" name="kadintakipci" class="form-control form-control-rounded">
				<option value="">Lütfen Seçiniz</option>
				<?php
					foreach ($yuzde as $yuzde3) {
						echo '<option value="'.$yuzde3->oran_yuzde.'">'.$yuzde3->oran_yuzde.'</option>';
					}
				?>
			</select>
			</div>
			</div>
			<div class="col-sm-6">
			<div class="form-group">
			<label for="hicerik">Hesap içeriği?</label>
			<select id="hcerik" name="hesapicerik" class="form-control form-control-rounded">
				<option value="">Lütfen Seçiniz</option>
				<?php
					foreach ($hesab_icerik as $icerik) {
						echo '<option value="'.$icerik->icerik_id.'">'.$icerik->icerik_name.'</option>';
					}
				?>
			</select>
			</div>
			</div>
			</div>
			</div>
			</div>
		</div>


		<div class="col-12 margin-bottom-1x">
			<div class="card">
			<div class="card-header text-bold"><i data-feather="activity"></i> Hesap Bilgileri</div>
			<div class="card-body">
			<div class="row">
			<div class="col-sm-6">
			<div class="form-group">
			<label for="hname">Hesap kullanıcı adı</label>
			<input id="hname" name="hesapname" class="form-control" type="text" placeholder="@Hesap kullanıcı adı">
			</div>
			</div>
			<div class="col-sm-6">
			<div class="form-group">
			<label for="yact">Hesap açılış yılı?</label>
			<select id="yact" name="acilis_yili" class="form-control">
				<option value="">Lütfen Seçiniz</option>
				<?php
					foreach ($hesab_yili as $h_yil) {
						echo '<option value="'.$h_yil->yil.'">'.$h_yil->yil.'</option>';
					}
				?>
				
			</select>
			</div>
			</div>
			<div class="col-sm-6">
			<div class="form-group">
			<label for="taksay">Takipçi/Abone sayısı</label>
			<input id="taksay" name="takipcisay" class="form-control form-control-rounded" type="number" placeholder="Takipçi/Abone sayısı">
			</div>
			</div>
			<div class="col-sm-6">
			<div class="form-group">
			<label for="gonsay">Gönderi sayısı</label>
			<input id="gonsay" name="goderisay" class="form-control form-control-rounded" type="number" placeholder="Toplam gönderi sayısı">
			</div>
			</div>
			<div class="col-sm-6">
			<div class="form-group">
			<label for="mavitiklimi">Mavi Tikli mi?</label>
			<select id="mavitiklimi" name="mavitiklimi" class="form-control form-control-rounded">
			<option value="">Lütfen Seçiniz</option>
			<option value="1">Evet</option>
			<option value="0">Hayır</option>
			</select>
			</div>
			</div>
			<div class="col-sm-6">
			<div class="form-group">
			<label for="isletmemi">İşletme hesabı mı?</label>
			<select id="isletmemi" name="isletmemi" class="form-control form-control-rounded">
			<option value="">Lütfen Seçiniz</option>
			<option value="1">Evet</option>
			<option value="0">Hayır</option>
			</select>
			</div>
			</div>
			<div class="col-sm-6">
			<div class="form-group">
			<label for="engelvarmi">Hesapta engel var mı?</label>
			<select id="engelvarmi" name="engelvarmi" class="form-control form-control-rounded">
			<option value="">Lütfen Seçiniz</option>
			<option value="1">Evet</option>
			<option value="2">Hayır</option>
			</select>
			</div>
			</div>
			<div class="col-sm-6">
			<div class="form-group">
			<label for="engeller">Varsa engeller neler?</label>
			<input id="engeller" name="engeller" class="form-control form-control-rounded" type="text" placeholder="Hesaptaki tüm engelleri yazınız">
			</div>
			</div>
			</div>
			</div>
			</div>
		</div>


		<div class="col-12 margin-bottom-1x">
			<div class="card">
			<div class="card-header text-bold"><i data-feather="tag"></i> Teklif Bilgileri</div>
			<div class="card-body">
			<div class="row">
			<div class="col-sm-6">
			<div class="form-group margin-top-1x">
			<label for="bidaccept"><b><i data-feather="zap"></i> Teklife açık mı?</b></label>
			<select id="bidaccept" name="teklife_acik" class="form-control form-control-rounded">
			<option value="1" selected="">Teklife Açık</option>
			<option value="2">Teklife Kapalı</option>
			</select>
			</div>
			</div>
			<div class="col-sm-6">
			<div class="form-group margin-top-1x">
			<label for="minbidprice"><b><i data-feather="dollar-sign"></i> Minimum teklif tutarı - TL</b></label>
			<input id="minbidprice" name="teklif_tutari" class="form-control form-control-rounded" type="number" placeholder="Min teklif tutarı">
			</div>
			</div>
			</div>
			</div>
			</div>
		</div>



		<div class="col-12 margin-bottom-1x">
			<div class="card">
			<div class="card-header text-bold"><i class="icon-file-text marek3"></i> İlan Bilgileri</div>
			<div class="card-body">
			<div class="row">
			<div class="col-sm-12">
			<div class="egedanger">
			<div class="egedangeralt">
			<b><i data-feather="alert-triangle"></i> Lütfen elinize geçmesini istediğiniz tutarı giriniz!</b> <br>
			<span class="text-sm">Komisyon sistem tarafından otomatik hesaplanacak ve sizin girdiğiniz fiyata eklenerek ilan yayına alınacaktır. Satış işleminden sonra aşağıda girdiğiniz tutarın tamamı cüzdanınıza aktarılacaktır.</span> Komisyon hesaplama aracı için 
			<a href="<?php echo base_url('komisyon-hesapla')?>" style="font-size:16px;font-family:Raleway;color:var(--primaryColor)" target="_blank">tıklayınız</a>
			<div class="form-group row col-md-6 col-12 margin-top-1x">
			<label for="price"><b>Satış Fiyatı - TL</b></label>
			<input id="price" name="price" class="form-control form-control-rounded" type="number" placeholder="Satış fiyatını giriniz">
			</div>
			</div>
			</div>
			</div>
			<div class="col-12 margin-bottom-1x">
			<div class="form-group">
			<label for="detail">Detay bilgi</label>
			<textarea id="detail" name="detail" rows="10" class="form-control form-control-rounded"></textarea>
			</div>
			</div>
			</div>
			</div>
			</div>
		</div>

	</div>

	<input type="hidden" name="userid" value="<?=$row->user_id?>">
	<input type="hidden" id="maincat" name="anacategory" value="<?=$anacategory?>">
	<input type="hidden" id="subcat" name="altcategory" value="<?=$altcategory?>">


	<button id="webbasic-button" type="submit" class="btn btn-primary fltright" style="margin-top:22px;">
		<i data-feather="save"></i> Kaydet ve Devam Et <i data-feather="chevron-right"></i>
	</button>
	<div class="clearfix"></div>
	
	<!-- Modal -->
<div class="modal fade" id="kurucuinfo" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><i data-feather="mail" style="width:19px;margin-top:-3px"></i> Orjinal (ilk) eposta nasıl tespit edilir</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="egedanger">
			<div class="egedangeralt">
				<b><i data-feather="alert-triangle" style="width:18px;margin-top:-3px;"></i> UYARI:</b> Bu bilgiyi yanlış girmeniz durumunda ceza alırsınız!
			</div>
		</div>
		Orjinal (ilk) eposta, instagram hesabı açılırken kullanılan ilk eposta adresidir. Instagrama giriş yaptıktan sonra; <b>Ayarlar</b> >> <b>Güvenlik</b> >> <b>Verilerine Eriş</b> >> Önceki e-posta adresleri alanında yer alan en alttaki eposta adresidir. Bu eposta adresinin de transferi önem arz etmektedir. Eğer bu epostayı aktarmayacaksanız YOK seçeneğini seçiniz
		<br>
		<br>
		<img src="https://hesapsat.net/img/kurucuu.jpg" alt="">
		<br>
		<br>

      </div>
      <div class="modal-footer">
        <button id="btn" type="button" class="btn btn-secondary" data-bs-dismiss="modal">
        	<i data-feather="power" style="width:18px;margin-top:-3px;"></i> Kapat</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal revertinfo-->
<div class="modal fade" id="revertinfo" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><i data-feather="mail" style="width:19px;margin-top:-3px"></i> Revert maili nedir</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="egedanger">
			<div class="egedangeralt">
				<b><i data-feather="alert-triangle" style="width:18px;margin-top:-3px;"></i> UYARI:</b> Bu bilgiyi yanlış girmeniz durumunda ceza alırsınız!
			</div>
		</div>
		<p>
			Revert emaili; uzun süre aralıksız (min 30 gün) hesap üzerinde onaylı olarak kullanılmış eposta adresidir. Bazı methodlarla çok kısa sürede değiştirilebilmektedir. Hesapta yaptığınız değişiklikler (telefon, epsota değişikliği v.b.) sonucu instagram tarafından güncel eposta adresine gönderilen bildirim emailinde yer alan "Bu işlemi ben yapmadın hesabımı güvene al" linkine tıklayarak hesabın kurtarılması sonucu profil bilgilerinde çıkan eposta adresidir. 
		</p>

      </div>
      <div class="modal-footer">
        <button type="button" id="btn" class="btn btn-secondary" data-bs-dismiss="modal">
        	<i data-feather="power" style="width:18px;margin-top:-3px;"></i> Kapat</button>
      </div>
    </div>
  </div>
</div>