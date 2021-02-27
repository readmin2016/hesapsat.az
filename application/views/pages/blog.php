<?php $this->load->view('include/header')?>


<div class="head_panel">
	<div class="container">
		<span class="material-icons home">home</span>
		<span><a href="<?php echo base_url()?>">Ana Sayfa </a> > Blog Yazıları</span>
	</div>
</div>

<div class="container">
	<div class="content margin-top-2x">
		<div class="row">

<div class="col-xl-9 col-lg-8">

	<?php

		foreach ($blogs as $bg) {
			$limitText = mb_substr($bg->bg_desc,0,250);
			echo '<article class="row">
					<div class="col-md-3" style="margin-top:0px;">
						<ul class="post-meta">
							<li><i style="width:15px;margin-top:-3px" data-feather="clock"></i> '.$bg->bg_tarih.'</li>
							<li><i style="width:15px;margin-top:-3px" data-feather="eye"></i> <b>'.$bg->bakis.'</b> okunma</li>
							<li><i style="width:15px;margin-top:-3px" data-feather="message-square"></i> <b>9</b> Yorum</li>
						</ul>
					</div>
					<div class="col-md-9 blog-post">
						<a class="post-thumb" href="'.base_url('detay?devami='.$bg->bg_id).'">
							<img src="'.base_url('blogupload/'.$bg->bg_image).'" alt="">
						</a>
						<h3 class="post-title"><a href="'.base_url('detay?devami='.$bg->bg_id).'">'.$bg->bg_title.'</a></h3>
						<p>'.$limitText.'<br>
						<a href="'.base_url('detay?devami='.$bg->bg_id).'" class="text-medium">Devamını Oku...</a></p>
					</div>
				</article>';
		}

	?>
	

</div>

<div class="col-xl-3 col-lg-4 bg-faded padding-top-1x padding-bottom-1x">
<!-- <button class="sidebar-toggle position-left" data-toggle="modal" data-target="#modalBlogSidebar"><i class="icon-layout"></i></button> -->
	<aside class="sidebar sidebar-offcanvas">

		<section class="widget widget-featured-posts">
			<h3 class="widget-title">En çok okunanlar</h3>
			<?php
				foreach ($blogslimit as $bgLimit) {
					echo '<div class="entry">
							<div class="entry-thumb"><a href=""><img style="width:55px;height:55px;object-fit:cover" src="'.base_url('blogupload/'.$bgLimit->bg_image).'" alt=""></a></div>
							<div class="entry-content" style="float:left;">
								<h4 class="entry-title">
									<a href="">'.$bgLimit->bg_title.'</a>
								</h4>
								<span class="entry-meta"><i class="icon-eye marek2"></i> 48878 adet okunma..</span>
							</div>
						</div>';
				}
			?>
			

		</section>

		<section class="widget widget-featured-posts" style="background:none;min-height:auto">
			<h3 class="widget-title">Önemli Yazılar</h3>

			<?php
				foreach ($blogslimit as $bgLimit) {
					if($bgLimit->bg_durum>0){
						echo '<div class="entry">
							<div class="entry-thumb"><a href=""><img style="width:55px;height:55px;object-fit:cover" src="'.base_url('blogupload/'.$bgLimit->bg_image).'" alt=""></a></div>
							<div class="entry-content" style="float:left;">
								<h4 class="entry-title">
									<a href="">'.$bgLimit->bg_title.'</a>
								</h4>
								<span class="entry-meta"><i class="icon-eye marek2"></i> 48878 adet okunma..</span>
							</div>
						</div>';
					}
					
				}
			?>
		</section>

		<hr><br>

		<section class="promo-box" style="background-image: url(https://images.hindustantimes.com/rf/image_size_640x362/HT/p2/2016/02/16/Pictures/_09baa5ea-d48b-11e5-b369-6a1e536aef0c.jpg); border-radius:5px;">
			<span class="overlay-dark" style="opacity: .8; border-radius:5px;"></span>
			<div class="promo-box-content text-center padding-top-2x padding-bottom-2x">
				<h3 class="text-bold text-light text-shadow">hesapsat.net<br>bu işin uzmanı...</h3>
				<h4 class="text-light text-thin text-shadow">Güvenilir aracılık sistemimiz sayesinde güvenle hesap alın veya satın!</h4><a class="btn btn-sm btn-primary" href="ilanlar"><i class="icon-search"></i> Göz at</a>
			</div>
		</section>
	</aside>
</div>



</div>
	</div>
</div>


<?php $this->load->view('include/footer')?>