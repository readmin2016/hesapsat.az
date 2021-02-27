<div class="container">
	<?php
	$payments = $this->db->where(array('pay_name'=>$_GET['pay']))->get('payment')->result();
		foreach ($payments as $row) {
			$hesap = 0;
			if($row->komisyon==0){
				$price = $pay+$hesap;
			}else{
				$hesap = $row->komisyon*$pay/100+1;
				$price = $pay+$hesap;
			}
		}
		foreach ($uyelist as $user) {
			$userid = $user->user_id;
		}
	?>
	
	<div class="content" style="margin-top:20px">
		<div class="row">
			<div class="col-lg-9 margin-bottom-1x" style="padding-left:10px; padding-right:10px;">
				<div class="card">
					<div class="card-header">
					<h6><i data-feather="pocket" style="margin-top:-1px;"></i> Papara cüzdan ile ödeme yapıyorsunuz...</h6>
					</div>
					<div class="card-body">
					Aşağıdaki papara numaramıza <u>açıklama alanına</u> <b style="font-weight:600; color:red"><?=$pay?></b> yazarak hesap özetinde belirtilen toplam tutarı yatırabilirsiniz. <u class="text-lg" style="font-weight:600">Ücreti gönderdikten sonra</u> aşağıdaki <b>Ödeme Bildirim Formu</b> nu doldurarak bize gönderiniz. Ödeme yapmadan formu doldurmayın!
					<br><br>
					<div class="card">
					<div class="card-header bg-info text-white">Papara Numaramız</div>
					<div class="card-body">
					<h2 class="text-center">1311489378</h2>
					</div>
					</div>
					<br>
					<a id="bildirim"></a>
					<div style="padding:5px 15px 15px 15px; background-color:#fafafa; margin-top:10px; border:1px dashed #c0c0c0; border-radius:5px;">
					<div class="alert alert-success formSuccess" style="margin-top:15px;display:none">
						<center>
							
						</center>
					</div>
					<h3 style="margin:10px;">Ödeme Bildirim formu</h3>
					<form action="javascript:void(0);" name="form" id="odbildir-form">
					<div class="col-md-12">
					<div id="odbildir-result"></div>
					<div class="form-group">
					 <input class="form-control form-control-rounded" type="text" name="adsoyad" placeholder="Transfer yapan kişinin bilgisi" required="" style="color:#777;font-size:15px;">
					</div>
					<input type="hidden" name="bankbil" value="0">
					<button id="odbildir-button" type="submit" class="btn btn-success btn-sm btn-rounded" style="background:#55e386;border-color:#55e386;">
						<i data-feather="check-circle" style="width:15px;"></i> Ödemeyi Yaptım &nbsp;</button>
					</div>
					</div>
						<input type="hidden" name="fiyat" value="<?=$pay?>">
						<input type="hidden" name="kesilecek" value="<?=floor($hesap) ?>">
						<input type="hidden" name="beklenen" value="<?=$price?>">
						<input type="hidden" name="bank_select" value="Papara-1311489378">
						<input type="hidden" name="userid" value="<?=$userid?>">
						<input type="hidden" name="orderToken" value="<?=$token;?>">
						<input type="hidden" name="satici" value="<?=$satici;?>">
					</form>
					</div>
                </div>
			</div>


			<div class="col-lg-3 margin-bottom-1x" style="padding-left:10px; padding-right:10px;">
				<a href="<?=$_SERVER['HTTP_REFERER']?>" class="btn btn-sm btn-rounded btn-primary" style="width:100%; margin-top:0px; border-radius:5px;">&lt;&lt; Ödeme Yöntemleri</a>

				<div class="stickyy" style="margin-top:15px;">
				<div class="card">
				<div class="card-header"><span class="text-lg fntw600">Hesap Özeti</span></div>
				<div class="card-body" style="padding-bottom:0px;">
				<section class="widget widget-order-summary" style="margin-bottom:0px;">
				<table class="table">
				<tbody>
				<tr>
				<td><i data-feather="tag" style="margin-top:-2px;width:15px;"></i> Fiyat:</td>
				<td class="text-medium"><?=$pay?> TL</td>
				</tr>
				<tr>
				<td><i data-feather="home" style="margin-top:-2px;width:15px;"></i> Banka:</td>
				<td class="text-medium"><?=floor($hesap) ?> TL</td>
				</tr>
				<tr>
				<td class="text-lg fntw600"><i class="icon-plus" style="margin-top:-2px;"></i> </td>
				<td class="text-lg fntw600"><?=floor($price) ?> TL</td>
				</tr>
				</tbody>
				</table>
				</section>
				</div>
				<div class="card-footer text-muted"></div>
				</div>
				</div>
				
			</div>


		</div>


	</div>
</div>		