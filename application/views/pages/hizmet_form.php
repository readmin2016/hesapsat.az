<?php
	foreach ($uyelist as $row) {}

?>


	
	<div class="alert alert-danger ilan_hata" style="display:none;border-radius:10px; margin-bottom:10px;">
			<span class="alert-close" data-dismiss="alert"></span>
			<center><b><i data-feather="alert-triangle"></i></b> <span></span></center>
		</div>

		<div class="row">
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
				<div class="card-header text-bold"><i data-feather="file-text"></i> İlan Bilgileri</div>
				<div class="card-body">
				<div class="row">
				<div class="col-sm-12">
					<div class="form-group">
						<label for="title">İlan Başlığınız</label>
						<input id="title" name="title" class="form-control form-control-rounded" type="text" maxlength="100" placeholder="Min 20, Max 100 karakter">
					</div>
				</div>
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
