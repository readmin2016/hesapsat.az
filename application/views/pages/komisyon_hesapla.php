<?php $this->load->view('include/header')?>

<?php
	
	foreach ($komisyon as $k_hesap) {
		$kdv = $k_hesap->km_start;
		$kdv1 = $k_hesap->komisyon;
		
	}

?>



<div class="container">
	<div class="content">
		<div class="text-center heightest">
		    <h1>Komisyon Hesaplama Aracı</h1>
		    <p>
			Hesapsat.net olarak 10TL den 100bin TL ye kadar değişen geniş yelpazeye sahip bir sektörde sabit komisyon oranlarını uygulamanın ciddi bir hata olduğunu gözlemledik ve dinamik fiyatlara, dinamik komisyon oranları anlayışıyla biz de komisyon oranlarımızı güncelledik. Ürün fiyat bandı yükseldikçe düşen bir uygulamaya geçtik ve <b>3%</b> ten <b>15%</b> e kadar dinamik oranları uygulamaya geçirdik. Aşağıdaki hesaplama aracını kullanarak komisyonlarımızı öğrenebilirsiniz.<br><br>
			<i class="icon-alert-triangle marek3"></i> Komisyon; <b>sadece satış yapmak isteyen üyelerimizden alınmakta olup</b>, hesap satın almak isteyen üyelerimizden ilan fiyatları dışında herhangi bir ilave ücret talep edilmemektedir.
			</p>


			<?php

				if(isset($_POST['hesapla'])){
					$fiyat = $_POST['komhesaplafiyat'];
					
					if($fiyat <= 200){
						$yuzde = '15';
						$hesapla = $fiyat+30;
						$tutar = 30;
						$toplam = ceil($hesapla);

						?>
							<div class="table-responsive" id="kombilgi">
								<table class="table table-bordered">
									<thead class="thead-inverse">
										<tr>
											<th>Komisyon Yüzdesi</th>
											<th>Minimum Komisyon</th>
											<th>Komisyon</th>
											<th>İlan fiyatı</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<th scope="row" class="text-lg"><?=$yuzde?>%</th>
											<td><?=$tutar?> TL</td>
											<td><?=$tutar?> TL</td>
											<td><b><?=$toplam?> TL</b></td>
										</tr>
									</tbody>
								</table>
							</div>
						<?php
					}
					elseif($fiyat <= 500){ 

						$yuzde = '15';
						$hesapla = $fiyat*$yuzde/100+$fiyat;
						$tutar = ceil($fiyat*$yuzde/100);
						$toplam = ceil($hesapla);

						?>
							<div class="table-responsive" id="kombilgi">
								<table class="table table-bordered">
									<thead class="thead-inverse">
										<tr>
											<th>Komisyon Yüzdesi</th>
											<th>Minimum Komisyon</th>
											<th>Komisyon</th>
											<th>İlan fiyatı</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<th scope="row" class="text-lg"><?=$yuzde?>%</th>
											<td>-TL</td>
											<td><?=$tutar?> TL</td>
											<td><b><?=$toplam?> TL</b></td>
										</tr>
									</tbody>
								</table>
							</div>
						<?php

					}elseif($fiyat <=600){
						$yuzde = '14';
						$hesapla = $fiyat*$yuzde/100+$fiyat;
						$tutar = ceil($fiyat*$yuzde/100);
						$toplam = ceil($hesapla);

						?>
							<div class="table-responsive" id="kombilgi">
								<table class="table table-bordered">
									<thead class="thead-inverse">
										<tr>
											<th>Komisyon Yüzdesi</th>
											<th>Minimum Komisyon</th>
											<th>Komisyon</th>
											<th>İlan fiyatı</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<th scope="row" class="text-lg"><?=$yuzde?>%</th>
											<td>-TL</td>
											<td><?=$tutar?> TL</td>
											<td><b><?=$toplam?> TL</b></td>
										</tr>
									</tbody>
								</table>
							</div>
						<?php


					}
					elseif($fiyat <=750){
						$yuzde = '13';
						$hesapla = $fiyat*$yuzde/100+$fiyat;
						$tutar = ceil($fiyat*$yuzde/100);
						$toplam = ceil($hesapla);

						?>
							<div class="table-responsive" id="kombilgi">
								<table class="table table-bordered">
									<thead class="thead-inverse">
										<tr>
											<th>Komisyon Yüzdesi</th>
											<th>Minimum Komisyon</th>
											<th>Komisyon</th>
											<th>İlan fiyatı</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<th scope="row" class="text-lg"><?=$yuzde?>%</th>
											<td>-TL</td>
											<td><?=$tutar?> TL</td>
											<td><b><?=$toplam?> TL</b></td>
										</tr>
									</tbody>
								</table>
							</div>
						<?php
					}
					elseif($fiyat <=900){
						$yuzde = '12';
						$hesapla = $fiyat*$yuzde/100+$fiyat;
						$tutar = ceil($fiyat*$yuzde/100);
						$toplam = ceil($hesapla);

						?>
							<div class="table-responsive" id="kombilgi">
								<table class="table table-bordered">
									<thead class="thead-inverse">
										<tr>
											<th>Komisyon Yüzdesi</th>
											<th>Minimum Komisyon</th>
											<th>Komisyon</th>
											<th>İlan fiyatı</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<th scope="row" class="text-lg"><?=$yuzde?>%</th>
											<td>-TL</td>
											<td><?=$tutar?> TL</td>
											<td><b><?=$toplam?> TL</b></td>
										</tr>
									</tbody>
								</table>
							</div>
						<?php
					}

					elseif($fiyat <=1000){
						$yuzde = '11';
						$hesapla = $fiyat*$yuzde/100+$fiyat;
						$tutar = ceil($fiyat*$yuzde/100);
						$toplam = ceil($hesapla);

						?>
							<div class="table-responsive" id="kombilgi">
								<table class="table table-bordered">
									<thead class="thead-inverse">
										<tr>
											<th>Komisyon Yüzdesi</th>
											<th>Minimum Komisyon</th>
											<th>Komisyon</th>
											<th>İlan fiyatı</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<th scope="row" class="text-lg"><?=$yuzde?>%</th>
											<td>-TL</td>
											<td><?=$tutar?> TL</td>
											<td><b><?=$toplam?> TL</b></td>
										</tr>
									</tbody>
								</table>
							</div>
						<?php
					}

					elseif($fiyat <=1500){
						$yuzde = '10';
						$hesapla = $fiyat*$yuzde/100+$fiyat;
						$tutar = ceil($fiyat*$yuzde/100);
						$toplam = ceil($hesapla);

						?>
							<div class="table-responsive" id="kombilgi">
								<table class="table table-bordered">
									<thead class="thead-inverse">
										<tr>
											<th>Komisyon Yüzdesi</th>
											<th>Minimum Komisyon</th>
											<th>Komisyon</th>
											<th>İlan fiyatı</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<th scope="row" class="text-lg"><?=$yuzde?>%</th>
											<td>-TL</td>
											<td><?=$tutar?> TL</td>
											<td><b><?=$toplam?> TL</b></td>
										</tr>
									</tbody>
								</table>
							</div>
						<?php
					}

					elseif($fiyat <=2000){
						$yuzde = '9';
						$hesapla = $fiyat*$yuzde/100+$fiyat;
						$tutar = ceil($fiyat*$yuzde/100);
						$toplam = ceil($hesapla);

						?>
							<div class="table-responsive" id="kombilgi">
								<table class="table table-bordered">
									<thead class="thead-inverse">
										<tr>
											<th>Komisyon Yüzdesi</th>
											<th>Minimum Komisyon</th>
											<th>Komisyon</th>
											<th>İlan fiyatı</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<th scope="row" class="text-lg"><?=$yuzde?>%</th>
											<td>-TL</td>
											<td><?=$tutar?> TL</td>
											<td><b><?=$toplam?> TL</b></td>
										</tr>
									</tbody>
								</table>
							</div>
						<?php
					}

					elseif($fiyat <=2500){
						$yuzde = '8';
						$hesapla = $fiyat*$yuzde/100+$fiyat;
						$tutar = ceil($fiyat*$yuzde/100);
						$toplam = ceil($hesapla);

						?>
							<div class="table-responsive" id="kombilgi">
								<table class="table table-bordered">
									<thead class="thead-inverse">
										<tr>
											<th>Komisyon Yüzdesi</th>
											<th>Minimum Komisyon</th>
											<th>Komisyon</th>
											<th>İlan fiyatı</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<th scope="row" class="text-lg"><?=$yuzde?>%</th>
											<td>-TL</td>
											<td><?=$tutar?> TL</td>
											<td><b><?=$toplam?> TL</b></td>
										</tr>
									</tbody>
								</table>
							</div>
						<?php
					}
					

					elseif($fiyat <=3000){
						$yuzde = '7';
						$hesapla = $fiyat*$yuzde/100+$fiyat;
						$tutar = ceil($fiyat*$yuzde/100);
						$toplam = ceil($hesapla);

						?>
							<div class="table-responsive" id="kombilgi">
								<table class="table table-bordered">
									<thead class="thead-inverse">
										<tr>
											<th>Komisyon Yüzdesi</th>
											<th>Minimum Komisyon</th>
											<th>Komisyon</th>
											<th>İlan fiyatı</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<th scope="row" class="text-lg"><?=$yuzde?>%</th>
											<td>-TL</td>
											<td><?=$tutar?> TL</td>
											<td><b><?=$toplam?> TL</b></td>
										</tr>
									</tbody>
								</table>
							</div>
						<?php
					}

					elseif($fiyat <=4000){
						$yuzde = '6';
						$hesapla = $fiyat*$yuzde/100+$fiyat;
						$tutar = ceil($fiyat*$yuzde/100);
						$toplam = ceil($hesapla);

						?>
							<div class="table-responsive" id="kombilgi">
								<table class="table table-bordered">
									<thead class="thead-inverse">
										<tr>
											<th>Komisyon Yüzdesi</th>
											<th>Minimum Komisyon</th>
											<th>Komisyon</th>
											<th>İlan fiyatı</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<th scope="row" class="text-lg"><?=$yuzde?>%</th>
											<td>-TL</td>
											<td><?=$tutar?> TL</td>
											<td><b><?=$toplam?> TL</b></td>
										</tr>
									</tbody>
								</table>
							</div>
						<?php
					}

					elseif($fiyat <=10000){
						$yuzde = '4';
						$hesapla = $fiyat*$yuzde/100+$fiyat;
						$tutar = ceil($fiyat*$yuzde/100);
						$toplam = ceil($hesapla);

						?>
							<div class="table-responsive" id="kombilgi">
								<table class="table table-bordered">
									<thead class="thead-inverse">
										<tr>
											<th>Komisyon Yüzdesi</th>
											<th>Minimum Komisyon</th>
											<th>Komisyon</th>
											<th>İlan fiyatı</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<th scope="row" class="text-lg"><?=$yuzde?>%</th>
											<td>-TL</td>
											<td><?=$tutar?> TL</td>
											<td><b><?=$toplam?> TL</b></td>
										</tr>
									</tbody>
								</table>
							</div>
						<?php
					}

					elseif($fiyat > 10000){
						$yuzde = '3';
						$hesapla = $fiyat*$yuzde/100+$fiyat;
						$tutar = ceil($fiyat*$yuzde/100);
						$toplam = ceil($hesapla);

						?>
							<div class="table-responsive" id="kombilgi">
								<table class="table table-bordered">
									<thead class="thead-inverse">
										<tr>
											<th>Komisyon Yüzdesi</th>
											<th>Minimum Komisyon</th>
											<th>Komisyon</th>
											<th>İlan fiyatı</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<th scope="row" class="text-lg"><?=$yuzde?>%</th>
											<td>-TL</td>
											<td><?=$tutar?> TL</td>
											<td><b><?=$toplam?> TL</b></td>
										</tr>
									</tbody>
								</table>
							</div>
						<?php
					}








					}else{

				}

			?>


			<div class="alert alert-primary alert-dismissible fade show margin-bottom-1x text-center">
				<form action="#kombilgi" method="post">
					<div class="row">
					<div class="col-sm-6">
					<div class="form-group margin-top-1x">
					<select id="altcat" name="altcat" class="form-control form-control-rounded">
						<option value="100" selected="">Kategori Seçiniz</option>
						<?php
							foreach ($kategori as $kom) {
								echo '<option value="'.$kom->plt_id.'">'.$kom->plt_name.'</option>';
							}
						?>
						
					</select>
					</div>
					</div>
					<div class="col-sm-6">
					<div class="form-group margin-top-1x">
					<input id="komhesaplafiyat" name="komhesaplafiyat" class="form-control form-control-rounded" type="number" placeholder="Komisyon eklenmemiş tutar - TL">
					</div>
					</div>
					</div>
					<button type="submit" id="btn" name="hesapla" class="btn-primary btn-rounded">
						<i data-feather="settings"></i> Hesapla</button>
				</form>
			</div>
	    </div>
	</div>
</div>




<?php $this->load->view('include/footer')?>