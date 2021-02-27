<?php $this->load->view('include/header')?>
<?php
	foreach ($uyelist as $row) {
	}
?>
<div class="container">
	<div class="content" style="margin-top:15px;">
		<div class="row">
			<?php $this->load->view('settings/leftBar')?>

			<div class="col-lg-9 col-12">

				<div class="row">
					<div class="col-md-12">
						<div class="card">
							<div class="card-header"><h5>Yeni Kampaniya Olustur</h5></div>
							<div class="card-body">
								<form action="<?=base_url('settings/addKampaniya')?>" method="post">
									<div class="form-group">
										<label for="">Kampaniya basligi</label>
										<input type="text" name="baslik" class="form-control">
									</div>

									<div class="form-group">
										<label for="">Icerik ekle</label>
										<textarea name="texteditor" id="viedittext" style="display:none;"></textarea>
									</div>

									<div class="form-group">
										<button class="btnprimary"><i data-feather="share-2" style="width:15px;margin-top:-2px;"></i> Paylaş</button>
									</div>
									<input type="hidden" name="userid" value="<?=$row->user_id?>">
								</form>
							</div>
						</div>
					</div>
				</div>

				<div class="row mt-3">
					<div class="col-md-12">
						<table class="table kom-list" style="font-size:13px;">
							<thead class="table-dark">
								<tr>
									<th>#</th>
									<th>#</th>
									<th>#</th>
									<th>#</th>
									<th>#</th>
								</tr>
							</thead>
							<tbody >
								
								<?php

									foreach ($kampaniya as $kom) {
										$baslik = mb_substr($kom->baslik,0,50);
										$icerik = mb_substr($kom->icerik,0,40);
										if($kom->durum==0){

											echo '<tr>
												<td><span style="color:red">Bakiliyor</span></td>
												<td>'.$baslik.'...</td>
												<td>'.strip_tags($icerik).'...</td>
												<td>'.$kom->data.'</td>
												<td>
													<a href="" class="btn btn-outline-primary"><i data-feather="edit" style="width:15px;"></i></a>
													<a href="" class="btn btn-outline-danger"><i data-feather="trash" style="width:15px;"></i></a>
												</td>
											</tr>';

										}else{

											echo '<tr>
												<td><span style="color:green">Yayında</span></td>
												<td>'.$baslik.'...</td>
												<td>'.strip_tags($icerik).'...</td>
												<td>'.$kom->data.'</td>
												<td>
													<a href="" class="btn btn-outline-primary"><i data-feather="edit" style="width:15px;"></i></a>
													<a href="" class="btn btn-outline-danger"><i data-feather="trash" style="width:15px;"></i></a>
												</td>
											</tr>';

										}
										
									}

								?>
							</tbody>	
						</table>
					</div>
				</div>

			</div>
		</div>
	</div>
</div>






<?php $this->load->view('include/footer')?>