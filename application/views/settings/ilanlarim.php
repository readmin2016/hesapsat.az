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
					<i data-feather="alert-triangle"></i>
					<b>Satış işlemi gerçekleştirmiş</b> üyelerimiz adına fatura kesebilmemiz için aşağıdaki bilgilerin doldurulması gerekmektedir. Diğer üyelerimizin bu alanları doldurmasına gerek yoktur.
				</div>

				<div class="card margin-bottom-1x">
				<div class="card-header"><b><i data-feather="file-text" class=""></i> İlanlarım</b></div>
				<div class="card-body">
				<div class="alert alert-danger alert-dismissible fade show margin-bottom-1x" style="display:none">
					<center>
						<span></span>
					</center>
				</div>
				<form action="<?php echo base_url('settings/add_address')?>" method="post" id="updateayadd-form">
					<div id="updateayadd-result"></div>
					<div class="row">
						<div class="col-sm-12">
							<table class="table table-striped" id="listElantable" style="font-size:12px;">
								<thead>
									<tr>
										<th style="border:0px;">#</th>
										<th style="border:0px;">Durum</th>
										<th style="border:0px;">Hesap Adi</th>
										<th style="border:0px;">İlan başlığı</th>
										<th style="border:0px;">Kategori</th>
										<th class="hidden-on-mobile-just" style="border:0px;">Tarih</th>
										<th><a href="javascript:void(0)" id="ilansil" ><i data-feather="trash"></i> Sil</a></th>
									</tr>
								</thead>
								<tbody>
									<?php
										foreach ($ilanlar as $row) {
											foreach ($anacategory as $cat) {
												if($row->ilan_anacategory==$cat->plt_id){
													$kategori = $cat->plt_name;
												}
											}
											foreach ($altcategory as $altcat) {
												if($row->ilan_altcategory==$altcat->value){
													$url = mb_strtolower($altcat->ish_name);
													
												}
											}
											$find = array('I','ı');
											$replace = array('i','i');
											$url = strtolower(str_replace($find, $replace, $url));
											$param = str_replace(" ", "-", $url);
											if($row->activation==0){

												echo '<tr style="background:#ffd4d4">
														<td>
															<input type="radio" value="'.$row->ilan_id.'" name="dltilan" id="dltilan">
														</td>
														<td style="color:#bb0707;font-size:14px">
															<i data-feather="eye" style="width:15px;"></i>
															Bakılıyor
														</td>
														<td>'.$row->hesap_kullanici_adi.'</td>
														<td>'.$row->ilan_basligi.'</td>
														<td>'.$kategori.'</td>
														<td>'.$row->yuklenme_tarih.'</td>
														<td></td>
														
													</tr>';

											}else{

												echo '<tr>
														<td style="font-size:14px;color:green">
															<i data-feather="check" style="width:15px;"></i>
															Yayında
														</td>
														<td>'.$row->hesap_kullanici_adi.'</td>
														<td>'.$row->ilan_basligi.'</td>
														<td>'.$kategori.'</td>
														<td>'.$row->yuklenme_tarih.'</td>
														<td style="padding-bottom:5px;" class="text-right">
															<button id="btn_primary" class="btn btn-outline-primary btn-rounded dropdown-toggle" style="margin-bottom:0px; margin-top:-2px;" type="button" data-bs-toggle="dropdown" aria-expanded="false"><i data-feather="settings"></i> <span class="hidden-sm-down">İşlem</span></button>
															<div class="dropdown-menu" x-placement="top-start" style="position: absolute; transform: translate3d(0px, 44px, 0px); top: 0px; left: 0px; will-change: transform;">

																<a class="dropdown-item" data-toggle="modal" data-target="#hareket1" style="cursor:pointer;"><i data-feather="edit" style="margin-top:-3px;"></i> Düzenle</a>


																<div class="dropdown-divider"></div>
																<a href="'.base_url('category/').$url.'/'.$param.'/'.$row->token.'" class="dropdown-item" style="cursor:pointer;"><i data-feather="log-in" style="margin-top:-3px;"></i> İlanı gör</a>
																<div class="dropdown-divider"></div>
																
																<a href="javascript::void" onclick="dlt_ilan('.$row->ilan_id.')" class="dropdown-item" style="color:#f44336; cursor:pointer;"><i data-feather="x-circle" style="margin-top:-3px;"></i> İlanı Sil</a>
															</div>
														</td>
													</tr>';
											}
										}
									?>
									
								</tbody>
							</table>
						</div>
					</div>
				</form>
				</div>
				</div>
				<!-- END ROW -->
				
			</div>
		</div>
	</div>
</div>






<?php $this->load->view('include/footer')?>