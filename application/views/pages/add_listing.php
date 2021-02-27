<?php $this->load->view('include/header')?>




<div class="container">
	<div class="content margin-top-2x">
		<div class="checkout-steps hidden-xs-down">
			<a href="#" style="cursor:no-drop"><i data-feather="award" class="icon-award" style="margin-top:-3px;"></i> İşlem Tamam</a>
			<a href="#" style="cursor:no-drop"><span class="angle"></span><i data-feather="camera" class="icon-camera" style="margin-top:-3px;"></i> Görseller</a>
			<a class="active" href="#" style="cursor:no-drop"><span class="step-indicator"></span><span class="angle"></span><i data-feather="file-text" class="icon-file-text" style="margin-top:-3px;"></i> Bilgiler</a>
		</div>
	</div>
	<?php

		if(isset($_POST['ucretsizgo'])){ ?>
			<div class="alert alert-danger" style="display:none;border-radius:10px; margin-bottom:10px;"><span class="alert-close" 	data-dismiss="alert"></span>
				<center><b><i data-feather="alert-triangle"></i> Hata!</b> Lütfen geçerli ana 	kategori ve alt kategori seçimi yapınız!</center>
			</div>

			<div class="row">
				<div class="col-12 margin-bottom-2x">
					<form action="javascript::void" method="post" id="webbcupdt-form">
						<div id="webbcupdt-result"></div>
							<div class="alert alert-primary alert-dismissible fade show">
							<div class="row">
								<div class="col-sm-5">
									<div class="form-group">
										<label for="maincat">Platform Seçiniz</label>
										<select id="maincat" name="mcat" class="form-control form-control-rounded">
											<option value="">Platform Seçiniz</option>
											<?php
												foreach ($platform_list as $row) {
													echo '<option value="'.$row->plt_id.'">'.$row->plt_name.'</option>';
												}
											?>
										</select>
									</div>
								</div>

								<div class="col-sm-5">
									<div class="form-group">
										<label for="subcat">İşlem Seçiniz</label>
										<select id="subcat" name="scat" class="form-control form-control-rounded">
											<option value="" >İşlem seçiniz</option>
										</select>
									</div>
								</div>
								<div class="col-sm-2">
								<button id="webbcupdt-button" type="submit" class="btn btn-primary btn-rounded" style="margin-top:29px; width:100%;padding:8px;background:#0da9ef"><i data-feather="save"></i> Devam <i data-feather="chevron-right" class="icon-chevron-right"></i></button>
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>


			<div class="alert alert-danger alert-dismissible fade show margin-bottom-1x">
				<span class="alert-close" data-dismiss="alert"></span>
				<i data-feather="alert-triangle" style="margin-top:-3px;"></i> <strong>Uyarılar</strong><br>
				1. İlan detayında iletişim bilgilerini paylaşmak<br>
				2. Alıcıları site dışından alışverişe çekmeye çalışmak ve ısrarla wp den görüşmeye çağırmak<br>
				3. Hesabı hesapsat üzerinden satılmasına rağmen hesap bilgilerini moderatöre iletmemek<br>
				4. İlanını güncel tutmamak yasaktır<br><br>
				Bu kurallara uymayan üyelerimize; ya siteden süresiz uzaklaştırma ya da para cezası uygulanır.
			</div>


		<?php }else{ ?>


		<h3><i data-feather="user" class="icon-user marek4"></i> Üyelik Paketleri</h3>
		<p>Size uygun olan paketi alın, satışlarınızı ve kazancınızı <b>%50 ye varan</b>  oranlarla artırın...</p>
		<br>
		<br>
		<div class="card-deck">
			<div class="card margin-bottom-1x">
				<div class="card-header"><h1 class="text-center"><b>0 ₺</b> <span class="text-sm text-muted">/ ay</span></h1></div>
				<div class="card-body">
					<p class="card-text" style="line-height:35px;">
						<i data-feather="x" class="icon-x text-danger marek3"></i> <del class="text-muted"> Anasayfa sponsorlu satıcılar alanında tanıtım</del><br>
						<i data-feather="x"  class="icon-x text-danger marek3"></i> <del class="text-muted"> Aynı anda olmadan sınırsız kampanya yayınlama hakkı</del><br>
						<i data-feather="check"  class="icon-check text-success marek3"></i> Gelen mesajları email ile bilgilendirme<br>
						<i data-feather="x"  class="icon-x text-danger marek3"></i> <del class="text-muted"> İlanlar anında yayında, onaylanma süreci yok</del><br>
						<i data-feather="x"  class="icon-x text-danger marek3"></i> <del class="text-muted"> İlan detayında telefon/webadresi paylaşılabilir</del><br>
						<i data-feather="x"  class="icon-x text-danger marek3"></i> <del class="text-muted"> İlan detayında yer alan profilde V.I.P üye ikonu</del>
					</p>
					<form action="<?php echo base_url('add-listing')?>" method="post">
						<input type="hidden" name="ucretsizgo" value="1">
						<center><button type="submit" class="btn btn-sm btn-secondary"><b>Ücretsiz Devam Et &gt;&gt;</b></button></center>
					</form>
				</div>
			</div>

			<div class="card margin-bottom-1x">
				<div class="card-header"><h1 class="text-center"><b>99 ₺</b> <span class="text-sm text-muted">/ ay</span></h1></div>
				<div class="card-body">
					<p class="card-text" style="line-height:35px;">
						<i data-feather="check" class="icon-check text-success marek3"></i> Anasayfa sponsorlu satıcılar alanında tanıtım<br>
						<i data-feather="check" class="icon-check text-success marek3"></i> Toplam 5 adet kampanya yayınlama hakkı<br>
						<i data-feather="check" class="icon-check text-success marek3"></i> Gelen mesajları SMS ile bilgilendirme<br>
						<i data-feather="check" class="icon-check text-success marek3"></i> İlanlar anında yayında, onaylanma süreci yok<br>
						<i data-feather="check" class="icon-check text-success marek3"></i> İlan detayında telefon/webadresi paylaşılabilir<br>
						<i data-feather="check" class="icon-check text-success marek3"></i> İlan detayında yer alan profilde V.I.P üye ikonu
						</p>
					<center>
						<button onclick="location.href='payment/M2';" class="btn btn-success"><b><i data-feather="award"></i> Hemen V.I.P Ol</b></button>
					</center>
				</div>
			</div>

		</div>
			
	<?php	}



	?>
	


</div>


<?php $this->load->view('include/footer')?>