<?php
	foreach ($adminlist as $row) {}

?>

<div class="alert alert-danger ilan_hata" style="display:none;border-radius:10px; margin-bottom:10px;">
		<span class="alert-close" data-dismiss="alert"></span>
		<center><b><i data-feather="alert-triangle"></i></b> <span></span></center>
	</div>

	<div class="row">
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

	<input type="hidden" name="userid" value="<?=$row->admin_id?>">
	<input type="hidden" id="maincat" name="anacategory" value="<?=$_POST['anacategory']?>">
	<input type="hidden" id="subcat" name="altcategory" value="<?=$_POST['altcategory']?>">

	<button id="webbasic-button" type="submit" class="btn btn-primary fltright" style="margin-top:22px;">
		<i data-feather="save"></i> Kaydet ve Devam Et <i data-feather="chevron-right"></i>
	</button>
	<div class="clearfix"></div>