<?php $this->load->view('include/header')?>
<?php

foreach ($uyelist as $row) {
		$userid = $row->user_id;
	}

?>

<div class="container">
	<div class="content" style="margin-top:15px;">
			<div class="row">
				<div class="col-lg-9">
					<div class="row">
						<div class="col-6">
								<div class="card ">
									<div class="card-header text-center"><span class="text-lg fntw600"><i data-feather="credit-card" class="icon-check-circle"></i> Portman</span></div>
									<div class="card-body text-center">
									<h3 class="fntw600" style="margin:0px;color:#444">0 Azn</h3>
									</div>
									<div class="card-footer" style="padding:10px">
									<div class="fltright">
									<button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#parayatir" style="margin:0px; height:25px; padding:2px 7px 0px 7px;line-height:0px;">
									<i data-feather="upload" class="iconyatir"></i> <span class="hidden-xs-down">Pul köçürd</span>
									</button>
									</div>
								 </div>
							</div>
							<!-- Modal -->
							<div class="modal fade" id="parayatir" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
							  <div class="modal-dialog">
							    <div class="modal-content">
							      <div class="modal-header">
							        <h5 class="modal-title" id="exampleModalLabel">Hesabınıza pul yükləyin</h5>
							        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
							      </div>
							      <div class="modal-body">
										<p>Yüklemek istediğiniz tutarı girerek Para Yatır butonuna basınız. Bir sonraki aşamada hesap bakiyenize <b>kredi kartı</b>, <b>EFT/Havale</b>, <b>İninal</b>, <b>Papara</b> veya <b>Skrill</b> ile yükleme yapabilirsiniz.</p>
										<hr><br>
										<form action="javascript::void" name="form" method="post" id="parayatir-form">
										<div id="parayatir-result"></div>
										<div class="row">
										<div class="col-sm-8 col-7">
										<div class="form-group" style="position:relative;">
											
											<input name="yatacak" style="padding-left:35px;" class="form-control" type="number" id="paraInput" placeholder="Tutar" required="">
											<span id="basic-addon1" style="color: #888;">TL</span>
										</div>
										</div>
										<div class="col-sm-4 col-5">
										<button id="parayatir-button" class="btn btn-primary" type="submit" style="margin-top:0px; width:100%"><i data-feather="upload" id="upload"></i> Yatır</button>
										</div>
										</div>
										<input type="hidden" name="userid" value="<?=$userid?>">
										</form>
									</div>
							      <div class="modal-footer">
							      	<button id="btn" data-bs-dismiss="modal" type="button" class="btn btn-secondary btn-sm btn-rounded fltleft btn-kapat"><i data-feather="power"></i> Bağla</button>
							      </div>
							    </div>
							  </div>
							</div>
						</div>
					<div class="col-6">
						<div class="card">
							<div class="card-header text-center"><span class="text-lg fntw600"><i data-feather="lock" class="icon-lock"></i> Bulut</span></div>
							<div class="card-body text-center">
							<h3 class="text-muted" style="margin:0px;">0 Azn</h3>
							</div>
							<div class="card-footer text-muted" data-container="body" data-toggle="popover" data-placement="bottom" data-trigger="hover" title="" data-content="Henüz bir işleminiz bulunmamaktadır!" data-original-title="Havuz İşlemleri">İşlemler <i data-feather="arrow-down-circle" class="icon-arrow"></i></div>
						</div>
					</div>


				</div>
				<div class="margin-top-2x">
					<div class="table-responsive" id="wallet">
						<table class="table table-striped">
							<thead class="thead-inverse">
								<tr>
									<th class="table-dark">İşlem Tarihi</th>
									<th class="table-dark">Yapılan İşlem</th>
									<th class="text-right table-dark" style="min-width:99px;">Tutar</th>
								</tr>
								</thead>
								<tbody>
								<tr>
									<td colspan="4">Herhangi bir işleminiz bulunmamaktadır!</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
				
			</div>
			<div class="col-lg-3">
				<div class="alert alert-primary alert-dismissible fade show margin-bottom-1x" style="padding:20px 10px;">
				<div class="text-center"><i data-feather="alert-triangle" id="iconalerttriangle" style="font-size:45px;"></i></div><br>
				<i data-feather="arrow-right-circle"></i> Hafta içi ve iş günü <b>16:30 a kadar</b> yapılan çekim talepleri aynı gün gerçekleştirilir.<br><br>
				<i data-feather="arrow-right-circle"></i> Hafta içi 16:30 dan sonra, hafta sonu ve resmi tatil günlerinde yapılan çekim talepleri <b>sonraki ilk iş gününde</b> gerçekleştirilir.<br><br>
				<i data-feather="arrow-right-circle"></i> Havuz hesabındaki para için çekim talebi oluşturulamaz.<br>
				</div>
			</div>
		</div>
	</div>
</div>




<?php $this->load->view('include/footer')?>