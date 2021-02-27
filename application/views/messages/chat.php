<?php $this->load->view('include/header')?>




<div class="container">
	<div class="content" style="margin-top:15px;">
		<div class="row">
		<div class="col-xl-3 col-lg-4 hidden-on-mobile">
			<br>
			<aside class="sidebar sidebar-offcanvas" style="padding:0px">
			<button id="toast" style="display:none;" data-toast="" data-toast-position="topCenter" data-toast-type="success" data-toast-icon="icon-check-circle" data-toast-title="Başarılı" data-toast-message="Mesaj Ayarlarınız başarıyla güncellenmiştir."></button>

			<nav class="list-group msgheigmob" id="components-list" style="margin-top:-22px;">
			<a class="list-group-item" href="message/hesapsat/" style="background: rgb(242, 243, 245) none repeat scroll 0% 0%; border-radius: 0px !important;">
				<img class="d-block img-thumbnail rounded-circle fltleft" src="img/logo/logo_sml.png" style="width:60px; height:60px; margin-right:15px;">
			<div style="margin-top:10px;">
				<span style="color:#555;"><b>Admin</b></span>
				<br>
				<span class="text-xs text-success" style="margin-top:5px;"><i data-feather="activity" style="width:14px;margin-right:3px;margin-top:-3px;"></i>07:00 - 23:00</span>
			</div>
			<div class="clearfix"></div>
			</a>

			<a class="list-group-item" href="message/ukaya/" style="background: rgb(255, 255, 255) none repeat scroll 0% 0%; border-radius: 0px !important;" onmouseout="if (!window.__cfRLUnblockHandlers) return false; this.style.background='#fff';" onmouseover="if (!window.__cfRLUnblockHandlers) return false; this.style.background='#f2f3f5';">
			<img class="d-block img-thumbnail rounded-circle fltleft" src="img/logo/logo_sml.png" style="width:60px; height:60px; margin-right:15px;">
			<div style="margin-top:10px;">
			<span style="color:#555;"><b>Moderatör</b></span>
			<br>
			<span class="text-xs text-success" style="margin-top:5px;"><i class="icon-activity"></i>10:00 - 01:00</span>
			</div>
			<div class="clearfix"></div>
			</a>
			</nav>
			</aside>
		</div>

		<div class="col-lg-9 order-md-2">
			<div class="msgstic">
				<div class="clearfix"></div>
			</div>

			<div id="messageslist"> 
				<div class="msgareaheig msgyaial" id="div1">
					<center>

						<img class="d-block img-thumbnail rounded-circle" src="<?=base_url('assets/images/logodcb.png')?>" alt="hesapsat" style="width:100%; min-width:150px; max-width:150px;">
						<br>
						<b class="text-lg"><?php echo $parametre ?></b> kullanıcı adlı üye ile herhangi bir mesajlaşmanız bulunmamaktadır. Aşağıdaki yazı alanını kullanarak ilk mesajı sen gönderebilirsin.
					</center>
				</div>
				<script>
						$('#div1').scrollTop($('#div1')[0].scrollHeight);
				</script>
			</div>

			<div class="sticky msgsticyaz" style="padding:5px 2px 0px 2px; margin:0px;">

				<div class="card messages-settings">
					<div class="card-header"><h5 style="margin:0;">Mesaj Ayarları</h5></div>
					<div class="card-body">
						<div class="custom-control custom-checkbox">
							<input name="picshow1" class="custom-control-input" type="checkbox" id="ex-check-1" checked="">
							<label class="custom-control-label" for="ex-check-1">Gönderdiğim resim dosyaları mesaj alanında galeri olarak gösterilsin</label>
						</div>

						<div class="custom-control custom-checkbox">
							<input name="picshow2" class="custom-control-input" type="checkbox" id="ex-check-2" checked="">
							<label class="custom-control-label" for="ex-check-2">Bana gönderilen resim dosyaları mesaj alanında galeri olarak gösterilsin</label>
						</div>

						<div class="custom-control custom-checkbox">
							<input name="picshow3" class="custom-control-input" type="checkbox" id="ex-check-3">
							<label class="custom-control-label" for="ex-check-3">Enter tuşuna basıldığında mesaj otomatik gönderilsin</label>
						</div>

						<div class="custom-control custom-checkbox">
							<input name="picshow4" class="custom-control-input" type="checkbox" id="ex-check-4" checked="">
							<label class="custom-control-label" for="ex-check-4">Bana mesaj gönderildiğinde Email ve SMS (V.I.P) ile bildirim gönderilsin</label>
						</div>

						<div class="custom-control custom-checkbox">
							<input name="picshow5" class="custom-control-input" type="checkbox" id="ex-check-5" checked="">
							<label class="custom-control-label" for="ex-check-5">Chat anında email bildirimi gönderilmesin</label>
						</div>

						<div class="row mt-3">
							<div class="col-12 text-left">
								<button class="btnprimary"><i data-feather="save" style="width:13px; margin-top:-4px;"></i> Kaydet</button>
							</div>
						</div>

					</div>	
				</div>

				<form id="uploadForm" enctype="multipart/form-data" class="input-group form-group text-muted" method="post">
					<span class="input-group-btn">
						<button style="float:right" id="sendbutton" class="sendbutton" type="submit"><i data-feather="send" class="send" style="width:18px;"></i>
						</button>

						<label for="file-input" style="float:right; margin-top:15px; margin-right:10px;" data-toggle="tooltip" data-placement="top" title="" data-original-title="Dosya Ekle">
							<div>
								<div id="paperclip">
									<i data-feather="paperclip" class="icon-paperclip" style="width:16px; margin-top:-3px;"></i>
									<span id="fsize" data-toggle="tooltip" data-placement="top" title="" data-original-title="Yüklenecek dosya sayısı" class="badge badge-success badge-pill" style="padding:3px 6px 5px 6px; float:right; margin-left:3px;"></span>
								</div>
							</div>

						</label>

						<!-- <div id="memoji" style="float:right; margin-top:12px; margin-right:5px; cursor:pointer;" data-toggle="tooltip" data-placement="top" title="" data-original-title="Emoji Listesi">
							<span style="font-size:16px;">😃</span>
						</div> -->

						<div id="msettings" style="float:right; margin-top:14px; margin-right:10px; cursor:pointer;" data-toggle="tooltip" data-placement="top" title="" data-original-title="Mesaj Gönderim ve Bildirim Ayarları">
							<i data-feather="settings" style="width:16px; margin-top:-4px;"></i>
						</div>
					</span>

					<textarea id="note" name="message" class="form-control form-control-rounded" placeholder="Mesaj Gönder" rows="1" style="padding: 11px 185px 11px 9px; max-height: 300px !important; min-height: 46px; overflow: hidden; overflow-wrap: break-word; resize: none; height: 46px;"></textarea>


					<input name="file[]" id="file-input" style="display:none" type="file" multiple="multiple">
					<input type="hidden" name="token" value="b76bf948448da0cebb82c2ee4dd1ea59">
					<input type="hidden" name="receiverid" value="1">
					<input type="hidden" name="step" value="1">
				</form>
			</div>


		</div>

	</div>

	</div>
</div>




<?php $this->load->view('include/footer')?>