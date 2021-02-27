<?php $this->load->view('include/header')?>

<?php


	$uri = @$_GET['pay'];
	switch ($uri) {
		case 'papara':
			$this->load->view('pages/papara');
			break;

		case 'ininal':
			$this->load->view('pages/ininal');
			break;

		case 'bank_transfer':
			$this->load->view('pages/bank_transfer');
			break;
		
		default: 



?>
			


<div class="container">
	<div class="content">
		<div class="table-responsive shopping-cart margin-top-1x margin-bottom-2x">
		<table class="table table-striped" id="table-striped">
			<thead class="thead-inverse" id="thead-inverse">
				<tr>
					<th>Ödeme Yöntemi</th>
					<th class="text-left hidden-on-mobile-just">Tutarlar</th>
					<th class="text-center hidden-on-mobile-just">Cüzdan</th>
					<th class="text-center hidden-on-mobile-just">Toplam</th>
					<th></th>
				</tr>
			</thead>
			<tbody>
				<?php
					foreach ($payments as $row) {
						$hesap = 0;
						if($row->komisyon==0){
							$price = $pay+$hesap;
						}else{
							$hesap = $row->komisyon*$pay/100+1;
							$price = $pay+$hesap;
						}
						
						echo '<tr>
								<td>
									<div class="product-item"><a class="product-thumb" href="#"><img src="'.base_url('assets/images/bank/'.$row->image).'" style="max-height:80px; max-width:80px; border-radius:10px; border:1px solid #dadada" alt="cc_l"></a>
										<div class="product-info">
											<h3>'.$row->title.'</h3>
											<span><em>Komisyon:</em> '.$row->komisyon.'% + 1TL</span>
											<span class="hidden-sm-up"><em>Ödenecek:</em> <b>'.$price.'TL </b></span>
										</div>
									</div>
								</td>


								<td class="text-left hidden-on-mobile-just">
									<div style="float:left; width:130px"><span class="hidden-sm-down">Temel</span> Ücret</div>
									<div style="float:left; font-weight:500">: '.$pay.'TL </div>
									<div class="clear-fix"></div><br>
									<div style="float:left; width:130px">Banka <span class="hidden-sm-down">Kesintisi</span></div>
									<div style="float:left; font-weight:500">: '.floor($hesap).'TL </div>
									<div class="clear-fix"></div><br>
								</td>
								<td class="text-center hidden-on-mobile-just text-danger">
								-
								</td>
								<td class="text-center hidden-on-mobile-just"><b>'.floor($price).'TL </b></td>
								<td class="text-right">
									<a href="?pay='.$row->pay_name.'" class="btn btn-primary btn-sm"><span class="hidden-sm-down">Seç ve </span> Öde <i data-feather="chevrons-right"></i></a>
								</td>
							</tr>';
					}
				?>
			


			
			</tbody>
		</table>
		
		</div>
	</div>
</div>


<?php
	break;
}


	

?>


<?php $this->load->view('include/footer')?>