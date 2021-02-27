<?php



class Admin extends CI_Controller{



	public function __construct()
	{
		parent::__construct();
		$this->load->helper('menu');
		$this->load->helper('file');
		$this->load->model('process_model');
		$this->load->model('account_model');
		$this->load->helper('month');
		$this->load->helper('cookie');
	}


	public function index()
	{
		$this->load->view('admin/login');
	}

	public function girisyap()
	{
		//if($_POST['yonetici']==1){
		
			$username= $this->input->post('username');
			$pass= md5($this->input->post('password'));
			$result = $this->process_model->giris_control($username,$pass);
			if($result==1){
				if(isset($_POST['remember'])){
					set_cookie('admin',$username,60*60*24);
				}else{
					set_cookie('admin',$username,60*60);
				}
				redirect(base_url('admin/dashboard'));
			}else{
				echo 'Kullanıcı adı ve ya Şifre doğru diğil';
			}

		// }else{

		// 	$mdusername= $_POST['username'];
		// 	$mdpass= md5($_POST['password']);
		// 	$result_md = $this->process_model->md_giris_control($mdusername,$mdpass);
		// 	if($result_md==1){
		// 		if(isset($_POST['remember'])){
		// 			set_cookie('admin',$mdusername,60*60*24);
		// 		}else{
		// 			set_cookie('admin',$mdusername,60*60);
		// 		}
		// 		redirect(base_url('admin/dashboard'));
		// 	}else{
		// 		echo 'Kullanıcı adı ve ya Şifre doğru diğil';
		// 	}

		// }
		
		
	}

	public function cikis_yap()
	{
		delete_cookie('admin');
		redirect($_SERVER['HTTP_REFERER']);
	}

	public function dashboard()
	{
		if(get_cookie('admin')){
			$this->load->view('admin/dashboard');
		}else{
			redirect(base_url('admin'));
		}
		
	}


	public function end()
	{
		$token =$_GET['1'];
		$where = array(
        	'token'=>$token
        );
        $datafinishinsert = array(
        	'activation'=>0
        );
        $finis = $this->db->where($where)->update('ilanlar',$datafinishinsert);

		$this->load->view('admin/end',$datafinishinsert);
        
	}

	public function add_order()
	{
		$data['platform_list'] = $this->db->get('platform')->result();
		$data['altcategory'] = $this->db->get('ishlem')->result();
		$data['ilan_liste'] = $this->db->get('ilanlar')->result();
		$data['yuzde'] = $this->db->get('takipci_orani')->result();
		$data['hesab_icerik'] = $this->db->get('hesab_icerik')->result();
		$data['images'] = $this->db->get('resimler')->result();
		$data['hesab_yili'] = $this->db->get('hesab_acilis')->result();
		$data['user'] = $this->db->get('account')->result();
		$data['adminlist'] = $this->db->where(array('admin_name'=>get_cookie('admin')))->get('admin')->result();

		if(get_cookie('admin')){
			$this->load->view('admin/add_order',$data);
		}else{
			redirect(base_url('admin'));
		}
		
	}

	public function form()
	{
		$data['platform_list'] = $this->db->get('platform')->result();
		$data['altcategory'] = $this->db->get('ishlem')->result();
		$data['ilan_liste'] = $this->db->get('ilanlar')->result();
		$data['yuzde'] = $this->db->get('takipci_orani')->result();
		$data['hesab_icerik'] = $this->db->get('hesab_icerik')->result();
		$data['images'] = $this->db->get('resimler')->result();
		$data['hesab_yili'] = $this->db->get('hesab_acilis')->result();
		$data['user'] = $this->db->get('account')->result();
		$data['adminlist'] = $this->db->where(array('admin_name'=>get_cookie('admin')))->get('admin')->result();

		if(get_cookie('admin')){
			$this->load->view('admin/form',$data);
		}else{
			redirect(base_url('admin'));
		}
		
	}


	public function form_1()
	{
		$data['platform_list'] = $this->db->get('platform')->result();
		$data['altcategory'] = $this->db->get('ishlem')->result();
		$data['ilan_liste'] = $this->db->get('ilanlar')->result();
		$data['yuzde'] = $this->db->get('takipci_orani')->result();
		$data['hesab_icerik'] = $this->db->get('hesab_icerik')->result();
		$data['images'] = $this->db->get('resimler')->result();
		$data['hesab_yili'] = $this->db->get('hesab_acilis')->result();
		$data['user'] = $this->db->get('account')->result();
		$data['adminlist'] = $this->db->where(array('admin_name'=>get_cookie('admin')))->get('admin')->result();

		if(get_cookie('admin')){
			$this->load->view('admin/form_1',$data);
		}else{
			redirect(base_url('admin'));
		}
		
	}


	public function form_2()
	{
		$data['platform_list'] = $this->db->get('platform')->result();
		$data['altcategory'] = $this->db->get('ishlem')->result();
		$data['ilan_liste'] = $this->db->get('ilanlar')->result();
		$data['yuzde'] = $this->db->get('takipci_orani')->result();
		$data['hesab_icerik'] = $this->db->get('hesab_icerik')->result();
		$data['images'] = $this->db->get('resimler')->result();
		$data['hesab_yili'] = $this->db->get('hesab_acilis')->result();
		$data['user'] = $this->db->get('account')->result();
		$data['adminlist'] = $this->db->where(array('admin_name'=>get_cookie('admin')))->get('admin')->result();

		if(get_cookie('admin')){
			$this->load->view('admin/form_2',$data);
		}else{
			redirect(base_url('admin'));
		}
		
	}

	public function form_3()
	{
		$data['platform_list'] = $this->db->get('platform')->result();
		$data['altcategory'] = $this->db->get('ishlem')->result();
		$data['ilan_liste'] = $this->db->get('ilanlar')->result();
		$data['yuzde'] = $this->db->get('takipci_orani')->result();
		$data['hesab_icerik'] = $this->db->get('hesab_icerik')->result();
		$data['images'] = $this->db->get('resimler')->result();
		$data['hesab_yili'] = $this->db->get('hesab_acilis')->result();
		$data['user'] = $this->db->get('account')->result();
		$data['adminlist'] = $this->db->where(array('admin_name'=>get_cookie('admin')))->get('admin')->result();

		if(get_cookie('admin')){
			$this->load->view('admin/form_3',$data);
		}else{
			redirect(base_url('admin'));
		}
		
	}

	// PAGES

	public function add_blog()
	{
		if(get_cookie('admin')){
			$this->load->view('admin/add_blog');
		}else{
			redirect(base_url('admin'));
		}
		
	}

	public function edit_blog()
	{
		//$file_location = APPPATH . "views/pages/ramil.php";
		//$mypage = touch($file_location);
		$header = '<?php $this->load->view("include/header")?>';

		$icerik = '<div class="container"><div class="content"></div></div>';


		$footer = '<?php $this->load->view("include/footer")?>';
		//write_file($file_location,$header,'a');
		//write_file($file_location,$icerik,"a");
		//write_file($file_location,$footer,'a');

		$data['bloglist'] = $this->db->get('blog')->result();
		if(get_cookie('admin')){
			$this->load->view('admin/edit_blog',$data);
		}else{
			redirect(base_url('admin'));
		}
		
	}

	public function checkup()
	{
		$data['ilan_liste'] = $this->db->get('ilanlar')->result();
		$data['user'] = $this->db->get('account')->result();
		$data['anacategory'] = $this->db->get('platform')->result();
		$data['altcategory'] = $this->db->get('ishlem')->result();
		if(get_cookie('admin')){
			$this->load->view('admin/checkup',$data);
		}else{
			redirect(base_url('admin'));
		}
		
	}

	public function order_ilan()
	{
		if(get_cookie('admin')){
			$this->load->view('admin/order_ilan');
		}else{
			redirect(base_url('admin'));
		}
		
	}

	public function add_categori()
	{
		$data['anacategory'] = $this->db->get('platform')->result();
		$data['altcategory'] = $this->db->get('alt_kategoriya')->result();
		if(get_cookie('admin')){
			$this->load->view('admin/add_categori',$data);
		}else{
			redirect(base_url('admin'));
		}
		
	}


	public function edit_categori()
	{
		$data['anacategory'] = $this->db->get('platform')->result();
		$data['altcategory'] = $this->db->get('alt_kategoriya')->result();
		if(get_cookie('admin')){
			$this->load->view('admin/edit_categori',$data);
		}else{
			redirect(base_url('admin'));
		}
		
	}

	public function add_moderator()
	{
		if(get_cookie('admin')){
			$this->load->view('admin/add_moderator');
		}else{
			redirect(base_url('admin'));
		}
		
	}

	public function company_duzenle()
	{	
		$id = $_GET['incele'];
		$data['company_list'] = $this->db->where(array('com_id'=>$id))->get('user_company_notification')->result();
		if(get_cookie('admin')){
			$this->load->view('admin/company_duzenle',$data);
		}else{
			redirect(base_url('admin'));
		}

	}

	public function seo()
	{
		$data['seos'] = $this->db->get('seo')->result();
		if(get_cookie('admin')){
			$this->load->view('admin/seo',$data);
		}else{
			redirect(base_url('admin'));
		}
		
	}


	public function list()
	{
		$data['admin_listesi'] = $this->db->get('admin')->result();
		if(get_cookie('admin')){
			$this->load->view('admin/list',$data);
		}else{
			redirect(base_url('admin'));
		}
		
	}

	public function contact_form()
	{
		$data['contact'] = $this->db->get('contac_form')->result();
		if(get_cookie('admin')){
			$this->load->view('admin/contact_form',$data);
		}else{
			redirect(base_url('admin'));
		}
		
	}

	public function our_notification()
	{
		$data['our_notification'] = $this->db->get('duyurular')->result();
		if(get_cookie('admin')){
			$this->load->view('admin/our_notification',$data);
		}else{
			redirect(base_url('admin'));
		}
		
	}


	public function notification()
	{
		$data['notification'] = $this->db->get('bildirimler')->result();
		if(get_cookie('admin')){
			$this->load->view('admin/notification',$data);
		}else{
			redirect(base_url('admin'));
		}
		
	}



	public function edit_moderator()
	{
		$data['md_list'] = $this->db->get('moderator')->result();
		$data['mdYetki'] = $this->db->get('md_yetkiler')->result();
		if(get_cookie('admin')){
			$this->load->view('admin/edit_moderator',$data);
		}else{
			redirect(base_url('admin'));
		}
		
	}


	public function ilan_komisyon()
	{
		$data['komisyon'] = $this->db->get('komisyon')->result();
		if(get_cookie('admin')){
			$this->load->view('admin/ilan_komisyon',$data);
		}else{
			redirect(base_url('admin'));
		}
		
	}



	public function site_settings_one()
	{
		$data['liste'] = $this->db->get('neden_biz')->result();
		if(get_cookie('admin')){
			$this->load->view('admin/site_settings_one',$data);
		}else{
			redirect(base_url('admin'));
		}
		
	}

	public function site_settings_two()
	{
		$data['listeopt'] = $this->db->get('options')->result();
		if(get_cookie('admin')){
			$this->load->view('admin/site_settings_two',$data);
		}else{
			redirect(base_url('admin'));
		}
		
	}

	public function change_logo()
	{
		if(get_cookie('admin')){
			$this->load->view('admin/change_logo');
		}else{
			redirect(base_url('admin'));
		}
		
	}

	public function create_admin()
	{
		if(get_cookie('admin')){
			$this->load->view('admin/create_admin');
		}else{
			redirect(base_url('admin'));
		}
		
	}
	
	public function faq()
	{
		$data['faqlist'] = $this->db->get('faq')->result();
		if(get_cookie('admin')){
			$this->load->view('admin/faq',$data);
		}else{
			redirect(base_url('admin'));
		}
		
	}

	public function media()
	{
		if(get_cookie('admin')){
			$this->load->view('admin/media');
		}else{
			redirect(base_url('admin'));
		}
		
	}


	public function step()
	{
		echo $md_token = $this->session->mdsession;
		$data['mdStep'] = $this->db->where(array('md_token'=>$md_token))->get('moderator')->result();
		$data['mdYetki'] = $this->db->get('md_yetkiler')->result();
		if(get_cookie('admin')){
			$this->load->view('admin/step',$data);
		}else{
			redirect(base_url('admin'));
		}
		
	}

	public function finish()
	{
		echo $md_token = $this->session->mdsession;
		$data['mdStep'] = $this->db->where(array('md_token'=>$md_token))->get('moderator')->result();
		$data['vazifeler'] = $this->db->get('moderator_vazife')->result();
		if(get_cookie('admin')){
			$this->load->view('admin/finish',$data);
		}else{
			redirect(base_url('admin'));
		}
		
	}


	public function user_company()
	{

		$data['company_list'] = $this->db->get('user_company_notification')->result();
		$data['userlist'] = $this->db->get('account')->result();
		if(get_cookie('admin')){
			$this->load->view('admin/user_company',$data);
		}else{
			redirect(base_url('admin'));
		}
		
	}


	public function vip_popup()
	{
		$data['vip_popupList'] = $this->db->get('vipuye_sartlari')->result();
		if(get_cookie('admin')){
			$this->load->view('admin/vip_popup',$data);
		}else{
			redirect(base_url('admin'));
		}
		
	}


	public function price_addion()
	{
		$data['price_list'] = $this->db->get('vip_price')->result();
		if(get_cookie('admin')){
			$this->load->view('admin/price_addion',$data);
		}else{
			redirect(base_url('admin'));
		}
		
	}

	public function addVip()
	{
		if(get_cookie('admin')){
			$this->load->view('admin/addVip');
		}else{
			redirect(base_url('admin'));
		}
		
	}

	public function vipList()
	{
		$data['vip_list'] = $this->db->where(array('kullanici_durum'=>1))->get('account')->result();
		if(get_cookie('admin')){
			$this->load->view('admin/vipList',$data);
		}else{
			redirect(base_url('admin'));
		}
		
	}

	public function addUser()
	{
		if(get_cookie('admin')){
			$this->load->view('admin/addUser');
		}else{
			redirect(base_url('admin'));
		}
		
	}

	public function user_notification()
	{
		$data['uyari_list'] = $this->db->get('uyarilar')->result();
		$data['userList'] = $this->db->get('account')->result();
		if(get_cookie('admin')){
			$this->load->view('admin/user_notification',$data);
		}else{
			redirect(base_url('admin'));
		}
		
	}

	public function userList()
	{
		$data['user_list'] = $this->db->where(array('kullanici_durum'=>0))->get('account')->result();
		if(get_cookie('admin')){
			$this->load->view('admin/userList',$data);
		}else{
			redirect(base_url('admin'));
		}
		
	}

	public function add_money()
	{
		$data['bakiye'] = $this->db->get('bakiye')->result();
		$data['user_list'] = $this->db->get('account')->result();
		if(get_cookie('admin')){
			$this->load->view('admin/add_money',$data);
		}else{
			redirect(base_url('admin'));
		}
		
	}

	public function ilan_duzenle($ilanID)
	{
		$data['ilanduzenle'] = $this->db->where(array('ilan_id'=>$ilanID))->get('ilanlar')->result();
		$data['yuzde'] = $this->db->get('takipci_orani')->result();
		$data['anacategory'] = $this->db->get('platform')->result();
		$data['hesab_icerik'] = $this->db->get('hesab_icerik')->result();
		$data['images'] = $this->db->get('resimler')->result();
		$data['hesab_yili'] = $this->db->get('hesab_acilis')->result();
		$data['user'] = $this->db->get('account')->result();
		$data['adminlist'] = $this->db->where(array('admin_name'=>get_cookie('admin')))->get('admin')->result();

		if(get_cookie('admin')){
			$this->load->view('admin/ilan_duzenle',$data);
		}else{
			redirect(base_url('admin'));
		}
		
	}


	public function editPage()
	{
		$data['pages'] = $this->db->get('pages')->result();
		if(get_cookie('admin')){
			$this->load->view('admin/editPage',$data);
		}else{
			redirect(base_url('admin'));
		}
	}



// if($num>1000) {

//         $x = round($num);
//         $x_number_format = number_format($x);
//         $x_array = explode(',', $x_number_format);
//         $x_parts = array('k', 'm', 'b', 't');
//         $x_count_parts = count($x_array) - 1;
//         $x_display = $x;
//         $x_display = $x_array[0] . ((int) $x_array[1][0] !== 0 ? '.' . $x_array[1][0] : '');
//         $x_display .= $x_parts[$x_count_parts - 1];

//         return $x_display;

//   }

//   return $num;


// ========================================================================================================
// =
// =
// =
// =
// =
// =========================================================================================================



	public function upload()
	{
		$config['upload_path']          = 'blogupload/';
        $config['allowed_types']        = '*';
        $config['encrypt_name']        = TRUE;

        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload('upload'))
        {
                echo json_encode (array('error' => $this->upload->display_errors()));

        }
        else
        {		
        		$upload_data = $this->upload->data();
                echo json_encode(array('file_name' => $upload_data['file_name']));

        }
	}




	public function file_browser()
	{
		$data['fileList'] = glob('blogupload/*');
		$this->load->view('admin/file_browser',$data);
	}




	// BLOG PROGRAMMING

	public function create_blog()
	{

		date_default_timezone_set('Europe/Istanbul');
		$config['upload_path']          = 'blogupload/';
        $config['allowed_types']        = 'jpg|png|jpeg';

        $baslik = $this->input->post('baslik');
        $icerik = $this->input->post('texteditor');

        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload('file'))
        {
                $error = array('error' => $this->upload->display_errors());

        }
        else
        {
                $data = array('upload_data' => $this->upload->data());
                if(isset($_POST['onemli'])){

                	$dataarray = array(
                	'bg_title' 	=> $baslik,
                	'bg_image' 	=> $_FILES['file']['name'],
                	'bg_desc' 	=> $icerik,
                	'bg_tarih'	=> turkcetarih_formati('d.F.Y'),
                	'bg_durum' => $_POST['onemli']
                );

                $insert = $this->db->insert('blog',$dataarray);
                redirect(base_url('admin/edit_blog'));

                }else{

                	$dataarray = array(
                	'bg_title' 	=> $baslik,
                	'bg_image' 	=> $_FILES['file']['name'],
                	'bg_desc' 	=> $icerik,
                	'bg_tarih'	=> turkcetarih_formati('d.F.Y')
                );

                $insert = $this->db->insert('blog',$dataarray);
                redirect(base_url('admin/edit_blog'));

                }
                


        }


	}



	public function editing_blog()
	{

		date_default_timezone_set('Europe/Istanbul');
		$config['upload_path']          = 'blogupload/';
        $config['allowed_types']        = 'jpg|png|jpeg';

        $baslik = $this->input->post('baslik');
        $icerik = $this->input->post('texteditor');
        $id = $this->input->post('id');

        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload('file'))
        {
                $error = array('error' => $this->upload->display_errors());
                $where = array('bg_id'=>$id);
                if(isset($_POST['onemli'])){
                 	$dataarray = array(
                	'bg_title' 	=> $baslik,
                	'bg_desc' 	=> $icerik,
                	'bg_durum'	=> $_POST['onemli']
                );
                 }else{
                 	$dataarray = array(
                	'bg_title' 	=> $baslik,
                	'bg_desc' 	=> $icerik,
                	'bg_durum'	=>0
                );
                 	
                 }

                $insert = $this->db->where($where)->update('blog',$dataarray);
                redirect(base_url('admin/edit_blog'));

        }
        else
        {
                $data = array('upload_data' => $this->upload->data());

                $where = array('bg_id'=>$id);
                 if(isset($_POST['onemli'])){
                 	$dataarray = array(
                	'bg_title' 	=> $baslik,
                	'bg_image' 	=> $_FILES['file']['name'],
                	'bg_desc' 	=> $icerik,
                	'bg_durum'	=> $_POST['onemli']
                );
                 }else{
                 	$dataarray = array(
                	'bg_title' 	=> $baslik,
                	'bg_image' 	=> $_FILES['file']['name'],
                	'bg_desc' 	=> $icerik,
                	'bg_durum'	=>0
                );

                 }
                

                $insert = $this->db->where($where)->update('blog',$dataarray);
                redirect(base_url('admin/edit_blog'));


        }


	}


	public function delete_blog($dlt_id)
	{
		$where = array('bg_id'=>$dlt_id);
		echo $this->db->where($where)->delete('blog');
	}


	public function editBlogPage($bdID)
	{
		$blogupdate = $this->db->where(array('bg_id'=>$bdID))->get('blog')->result();
		foreach ($blogupdate as $row) {
			echo '<div class="card-body">
					<div class="card">';
					if($row->bg_image==""){

					}else{
						echo '<img src="'.base_url('blogupload/'.$row->bg_image).'">';
					}
					echo'</div>
				  <form action="'.base_url('admin/editing_blog').'" method="post" enctype="multipart/form-data">
				 	 <input type="hidden" value="'.$row->bg_id.'" name="id">
				    <div class="form-group">
				    	<label style="font-weight:500">Blog başlığı</label>
				    	<input type="text" name="baslik" value="'.$row->bg_title.'" class="form-control">
				    </div>
				    <div class="form-group">
				     	<input type="file" id="fileupload" name="file" class="form-control">
				     	<label for="fileupload" id="up_btn"><i data-feather="camera"></i><br>Yeni görsel ekle <br>
				     		<span id="file_text" style="font-weight:normal"></span></label>

				     </div>
				    <div class="form-group">
				    	<textarea name="texteditor">'.$row->bg_desc.'</textarea>
				    </div>

				     <div class="form-group">
				    	<button class="btn btn-primary"><i data-feather="refresh-ccw" class="iconFeather"></i>Yenile</button>
				    </div>
				    <br>
		          <br>';
		          if($row->bg_durum > 0){
		          	echo '<input type="checkbox" checked name="onemli" value="1">';
		          }else{
		          	echo '<input type="checkbox" name="onemli" value="1">';
		          }
		          echo ' Önemli Yazı

				  </form>
				</div>';
		}

		?>
		<script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>
		<script src="https://cdn.ckeditor.com/4.15.1/standard/ckeditor.js"></script>
		<script>
			$(function(){
				$('#fileupload').on('change',function(){
					var fileText = $(this).val().match(/[\/\\]([\w\d\s\.\-\(\)]+)$/)[1];
					$('#file_text').html(fileText);
				})
			})
		</script>		
		<script>
		        CKEDITOR.replace( 'texteditor',{
		          height:300,
		          filebrowserUploadUrl:'<?php echo base_url('admin/upload')?>',
		          filebrowserBrowseUrl:'<?php echo base_url('admin/file_browser')?>'
		        });

		</script>
		<script>
		    feather.replace()
		</script>

		<?php
	}

	// BLOG PROGRAMMING



	//MODERATOT PROGRAMMING

	public function add_md()
	{
		$config['upload_path']          = 'md_logo/';
        $config['allowed_types']        = 'jpg|png|jpeg';

        $baslik = $this->input->post('baslik');
        $icerik = $this->input->post('texteditor');

        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload('file'))
        {
            $error = array('error' => $this->upload->display_errors());
            $kullaniciadi 	= $this->input->post('md_name');
			$sifre 	= $this->input->post('md_sifre');
			$md_token 	= $this->input->post('md_token');
			$data = array(
				'md_name' 	=>$kullaniciadi,
				'md_sifre' 	=>md5($sifre),
				'md_token' 	=>$md_token,
				'md_logo' 	=>$_FILES['file']['name']
			);
			$sessionMD = array('mdsession'=>$md_token);
			$this->session->set_userdata($sessionMD);
			$this->db->insert('moderator',$data);
			redirect(base_url('admin/step/2'));
        }
        else
        {
            $data = array('upload_data' => $this->upload->data());

            $kullaniciadi 	= $this->input->post('md_name');
			$sifre 	= $this->input->post('md_sifre');
			$md_token 	= $this->input->post('md_token');
			$data = array(
				'md_name' 	=>$kullaniciadi,
				'md_sifre' 	=>$sifre,
				'md_token' 	=>$md_token,
				'md_logo' 	=>$_FILES['file']['name']
			);
			$sessionMD = array('mdsession'=>$md_token);
			$this->session->set_userdata($sessionMD);
			$this->db->insert('moderator',$data);
			redirect(base_url('admin/step/2'));
        }


		
	}


	public function authority()
	{
		$yetki 	= $this->input->post('authority');
		$md_id 	= $this->input->post('mdID');
	 	$count = count($this->input->post('authority'));
		for ($i=0; $i < $count; $i++) { 
			$data = array(
				'yetkiler' 	=>$yetki[$i],
				'mdID' 	=>$md_id,
			);

			$this->db->insert('moderator_yetkileri',$data);
		}
		
			redirect(base_url('admin/finish'));
		
	}


	public function process_end()
	{
		$vazife 	= $this->input->post('vazife');
		$md_id 	= $this->input->post('mdID');
	 	$where = array(
	 		'md_id'=>$md_id,
	 	);
		$data = array(
			'md_vazife' 	   	=>$vazife,
			'md_activation' 	=>1,
		);

		$this->db->where($where)->update('moderator',$data);
	
		redirect(base_url('admin/edit_moderator'));
		
	}

	public function delete_moderator($md_id)
	{
		$where = array('md_id'=>$md_id);
		$this->db->where($where)->delete('moderator');
	}


	public function yetkilendir()
	{
		$yetki 	= $this->input->post('authority');
		$userid 	= $this->input->post('userid');
	 	echo $count = count($this->input->post('authority'));
		for ($i=0; $i < $count; $i++) { 
			$data = array(
				'yetkiler' 	=>$yetki[$i],
				'mdID'=>$userid
			);

			$this->db->insert('moderator_yetkileri',$data);
		}
		
			redirect($_SERVER['HTTP_REFERER']);
		
	}


	public function editModerator($mdID)
	{
		$sessionMDID = array('userID'=>$mdID);
		$this->session->set_userdata($sessionMDID);
		$moderator = $this->db->where(array('md_id'=>$mdID))->get('moderator')->result();
		$vazifeler =$this->db->get('moderator_vazife')->result();
		$mdYetki = $this->db->get('md_yetkiler')->result();
		$yetkiler = $this->db->where(array('mdID'=>$mdID))->get('moderator_yetkileri')->result();
				
		
		echo '<ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
              <a class="nav-link active" id="home-tab" data-bs-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Moderator bilgilerie</a>
            </li>
            <li class="nav-item" role="presentation">
              <a class="nav-link" id="profile-tab" data-bs-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Moderator yetkileri</a>
            </li>
          </ul>';
			foreach ($moderator as $row) {

				echo '<div class="tab-content" id="myTabContent">
					  <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
					    <form action="'.base_url('admin/bilgi_deyis').'" method="post" enctype="multipart/form-data">
					      <div class="row" style="margin-top:15px;">
					        <div class="col-md-6">
					          <div class="form-group">
					            <input type="text" name="md_name" class="form-control" value="'.$row->md_name.'">
					            <input type="hidden" name="userid" class="form-control" value="'.$mdID.'">
					          </div>
					          <div class="form-group">
					            <select name="vazife" id="" class="form-control">';
					            foreach ($vazifeler as $vz) {
					            	if($row->md_vazife==$vz->vz_name){
					            		echo '<option value="'.$vz->vz_name.'" selected>'.$vz->vz_name.'</option>';
					            		
					            		}else{
					            		
					            			echo '<option value="'.$vz->vz_name.'">'.$vz->vz_name.'</option>';
					            		
					            		}
					            	}

					              echo'
					            </select>
					          </div>
					          <div class="form-group">
					            <button class="btn btn-primary"><i data-feather="save" class="iconFeather"></i> Değişikliyi kaydet</button>
					          </div>
					        </div>
					        <div class="col-md-6">
					          <div class="form-group">
					            <input type="file" id="fileupload" name="file" class="form-control">
					            <label for="fileupload" id="up_btn" style="margin-top:0"><i data-feather="camera"></i><br> Logo ekle <br>
					              <span id="file_text" style="font-weight:normal">...</span></label>
					           </div>
					        </div>
					      </div>
					    </form>
					</div>';
				}

				echo '<div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
				    <form action="'.base_url('admin/yetkilendir').'" method="post">
				    <input type="hidden" name="userid" class="form-control" value="'.$mdID.'">
				     <div class="row" style="margin-top:15px;">
						<div class="col-md-8">
							<div class="card">
								<div class="card-header"><h5>Yeniden yetkilentirin</h5></div>
								<div class="card-body">';
								foreach ($mdYetki as $yt) {

								    echo '<div class="col-md-12">
								           <div class="form-group">
								              <input type="checkbox" name="authority[]" value="'.$yt->md_yetki_id.'" id="extracheckBox">
								              <span for="" style="font-size:15px;">'.$yt->yetki_name.'</span>
								            </div>
								         </div>';

							    }

					    echo '
								</div>
							</div>
						</div>
						
						<div class="col-md-4">

						<div class="card">
								<div class="card-header"><h5>Seçilen yetkiler</h5></div>
								<div class="card-body">';
								foreach ($mdYetki as $yt) {

								    foreach ($yetkiler as $key) {
										if($key->yetkiler==$yt->md_yetki_id){
											echo '<div class="col-md-12" >
								           <div class="form-group" id="secilen">
								              
								            </div>
								         </div>';
										}
									}

							    }

					    echo '
								</div>
							</div>

						</div>
						
				   
				   </div>
				    <div class="form-group">
				      <button class="btn btn-primary"><i data-feather="save" class="iconFeather"></i> Değişikliyi kaydet</button>
				    </div>
				    </form>
				</div>';








		?>
		<script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>
		<script>
			$(function(){
				$('#fileupload').on('change',function(){
					var fileText = $(this).val().match(/[\/\\]([\w\d\s\.\-\(\)]+)$/)[1];
					$('#file_text').html(fileText);
				})
			})

			function load()
			{
				var url = $('#url').val();
				$.ajax({
					url:url+'admin/loadYetki',
					success:function(res){
						$('#secilen').html(res);
					}
				})
			}

			setInterval('load();',1500);

			function dltYetki(id)
			{	
				var url = $('#url').val();
				
				$.ajax({
					url:url+'admin/dltYetki/'+id,
					method:'POST',
					data:{'id':id},
					success:function(){
						$(this).hide();
					}
				})	
			}
		</script>
		<script>
		    feather.replace()
		</script>

		<?php
	}


	public function loadYetki()
	{
		$mdYetki = $this->db->get('md_yetkiler')->result();
		$yetkiler = $this->db->where(array('mdID'=>$this->session->userID))->get('moderator_yetkileri')->result();
		foreach ($mdYetki as $yt) {
		    foreach ($yetkiler as $key) {
				if($key->yetkiler==$yt->md_yetki_id){
					echo '<div class="col-md-12" >
		           <div class="form-group" id="secilen">
		              <span for="" id="selected" style="font-size:15px;">'.$yt->yetki_name.' 
		              	<span id="delete_yetki" onclick="dltYetki('.$key->yetki_id.')"><i data-feather="x"></i></span>
		              </span>
		            </div>
		         </div>';
				}
			}

	    }
	    ?>
	    <script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>
	    <script>
		    feather.replace()
		</script>


	    <?php
	}


	public function dltYetki($id)
	{
		$where = array('yetki_id'=>$id);
		$this->db->where($where)->delete('moderator_yetkileri');
	}


	public function bilgi_deyis()
	{

		$config['upload_path']          = 'md_logo/';
        $config['allowed_types']        = 'jpg|png|jpeg';

        $md_name = $this->input->post('md_name');
        $vazife = $this->input->post('vazife');
        $id = $this->input->post('userid');

        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload('file'))
        {
                $error = array('error' => $this->upload->display_errors());
                $where = array('md_id'=>$id);
                $dataarray = array(
                	'md_name' 		=> $md_name,
                	'md_vazife' 	=> $vazife,
                );

                $this->db->where($where)->update('moderator',$dataarray);
                redirect($_SERVER['HTTP_REFERER']);

        }
        else
        {
                $data = array('upload_data' => $this->upload->data());
                $where = array('md_id'=>$id);
                $dataarray = array(
                	'md_name' 		=> $md_name,
                	'md_vazife' 	=> $vazife,
                	'md_logo'		=> $_FILES['file']['name']
                );

                $this->db->where($where)->update('moderator',$dataarray);
                redirect($_SERVER['HTTP_REFERER']);
        }

	}


	//MODERATOT PROGRAMMING



	//SITE AYARLARI

	public function addPost()
	{
		$baslik =$this->input->post('baslik');
		$icerik =$this->input->post('icerik');

		$data=array(
			'baslik'=>ucfirst($baslik),
			'icerik'=>ucfirst($icerik)
		);
		$this->db->insert('neden_biz',$data);
		redirect($_SERVER['HTTP_REFERER']);
	}


	public function post_refresh()
	{
		$id = $this->input->post('id');
		$baslik = $this->input->post('baslik');
		$icerik = $this->input->post('icerik');

		$where = array('id'=>$id);
		$data = array(
			'baslik' => $baslik,
			'icerik' => $icerik
		);
		$this->db->where($where)->update('neden_biz',$data);
		redirect(base_url('admin/site_settings_one'));

	}

	public function post_delete()
	{
		$id = $_GET['sil'];
		$where = array('id'=>$id);
		$this->db->where($where)->delete('neden_biz');
		redirect(base_url('admin/site_settings_one'));

	}


	//Nasil Calisir

	public function addOptionPost()
	{
		$baslik =$this->input->post('baslik');
		$icerik =$this->input->post('icerik');

		$config['upload_path'] = 'assets/images/';
		$config['allowed_types'] = 'jpg|png|gif|jpeg';

		$this->load->library('upload', $config);

		if(! $this->upload->do_upload('file')){

			$data=array(
				'op_baslik'=>ucfirst($baslik),
				'op_icerik'=>ucfirst($icerik)
			);
			$this->db->insert('options',$data);
			redirect($_SERVER['HTTP_REFERER']);

		}else{
			$data_upload = $this->upload->data();
			$data=array(
				'op_baslik'=>ucfirst($baslik),
				'op_icerik'=>ucfirst($icerik),
				'op_gorsel' =>$_FILES['file']['name']
			);
			$this->db->insert('options',$data);
			redirect($_SERVER['HTTP_REFERER']);

		}

		
	}



	public function refreshOptionPost()
	{
		$baslik =$this->input->post('baslik');
		$icerik =$this->input->post('icerik');
		$post_id = $this->input->post('post_id');

		$config['upload_path'] = 'assets/images/';
		$config['allowed_types'] = 'jpg|png|gif|jpeg';

		$this->load->library('upload', $config);

		if(! $this->upload->do_upload('fileimage')){

			

				$where = array('op_id'=>$post_id);
				$data=array(
					'op_baslik'=>ucfirst($baslik),
					'op_icerik'=>ucfirst($icerik),
				);
				$this->db->where($where)->update('options',$data);
				redirect(base_url('admin/site_settings_two'));
				

		}else{


				$where = array('op_id'=>$post_id);
				$data_upload = $this->upload->data();
				$data=array(
					'op_baslik'=>ucfirst($baslik),
					'op_icerik'=>ucfirst($icerik),
					'op_gorsel' =>$_FILES['fileimage']['name']
				);
			$this->db->where($where)->update('options',$data);
			redirect(base_url('admin/site_settings_two'));

			
			

		}

		
	}


	public function optPostDelete()
	{
		$where = array('op_id'=>$_GET['sil']);
		$this->db->where($where)->delete('options');
		redirect(base_url('admin/site_settings_two'));
	}

	//end Nasil Calisir

	//LOGO ADD

	public function uploadLogo()
	{
		sleep(3);
		$config['upload_path'] = 'logo/';
		$config['allowed_types'] = 'jpg|png|jpeg';
        // $config['max_width']            = 100;
        // $config['max_height']           = 100;

        $this->load->library('upload',$config);
        if(! $this->upload->do_upload('file'))
        {
        	echo '<b>HATA!</b> Lütfen görsel seçerken Formatına ve boyutuna dikkat edin';
        }
        else
        {
        	$data_upload = $this->upload->data();
        	$data = array(
        		'logo_position'=>$_POST['logo'],
        		'logo'	=> $_FILES['file']['name']
        	);
        	$this->db->insert('logo',$data);
        	echo 1;
        }
	}

	//LOGO ADD


	//Sosyal Media ayarlari


		public function addFacebook()
		{
			$url = $this->input->post('f_url');
			$icon = $this->input->post('f_icon');
			$medianame = $this->input->post('f_medianame');

			$data = array(
				'media_icon' =>$icon,
				'media_url' =>$url,
				'media_name' =>$medianame
			);
			echo $this->db->insert('media',$data);
		}

		public function refreshFacebook()
		{
			$url = $this->input->post('urlfacebook');
			$id = $this->input->post('f_id');
			$where = array(
				'media_id'=>$id
			);

			$data = array(
				'media_url' => $url
			);
			echo $this->db->where($where)->update('media',$data);
		}


		public function addInstagram()
		{
			$url = $this->input->post('in_url');
			$icon = $this->input->post('in_icon');
			$medianame = $this->input->post('in_medianame');

			$data = array(
				'media_icon' =>$icon,
				'media_url' =>$url,
				'media_name' =>$medianame
			);
			echo $this->db->insert('media',$data);
		}

		public function refreshInstagram()
		{
			$url = $this->input->post('urlinstagram');
			$id = $this->input->post('id');
			$where = array(
				'media_id'=>$id
			);

			$data = array(
				'media_url' =>$url,
			);
			echo $this->db->where($where)->update('media',$data);
		}


		public function addTwitter()
		{
			$url = $this->input->post('tw_url');
			$icon = $this->input->post('tw_icon');
			$medianame = $this->input->post('tw_medianame');

			$data = array(
				'media_icon' =>$icon,
				'media_url' =>$url,
				'media_name' =>$medianame
			);
			echo $this->db->insert('media',$data);
		}

		public function refreshTwitter()
		{
			$url = $this->input->post('urltwitter');
			$id = $this->input->post('t_id');
			$where = array(
				'media_id'=>$id
			);

			$data = array(
				'media_url' =>$url,
			);
			echo $this->db->where($where)->update('media',$data);
		}



		public function addTiktok()
		{
			$url = $this->input->post('tt_url');
			$icon = $this->input->post('tt_icon');
			$medianame = $this->input->post('tt_medianame');

			$data = array(
				'media_icon' =>$icon,
				'media_url' =>$url,
				'media_name' =>$medianame
			);
			echo $this->db->insert('media',$data);
		}


		public function refreshTiktok()
		{
			$url = $this->input->post('urltiktok');
			$id = $this->input->post('tt_id');
			$where = array(
				'media_id'=>$id
			);

			$data = array(
				'media_url' =>$url,
			);
			echo $this->db->where($where)->update('media',$data);
		}


		public function addYoutube()
		{
			$url = $this->input->post('url');
			$icon = $this->input->post('icon');
			$medianame = $this->input->post('medianame');

			$data = array(
				'media_icon' =>$icon,
				'media_url' =>$url,
				'media_name' =>$medianame
			);
			echo $this->db->insert('media',$data);
		}


		public function refreshYoutube()
		{
			$url = $this->input->post('urlyoutube');
			$id = $this->input->post('yt_id');
			$where = array(
				'media_id'=>$id
			);

			$data = array(
				'media_url' =>$url,
			);
			echo $this->db->where($where)->update('media',$data);
		}

		public function dlt_media()
		{
			$where = array('media_id'=>$_GET['sil']);
			$this->db->where($where)->delete('media');
			redirect($_SERVER['HTTP_REFERER']);
		}


	//Sosyal Media ayarlari




	//SSS Sorulan sorular


		public function addSSS()
		{
			$soru = $this->input->post('soru_baslik');
			$cevap = $this->input->post('texteditor');
			$data = array(
				'faq_soru'=>$soru,
				'faq_cevap'=>$cevap
			);
			$this->db->insert('faq',$data);
			redirect($_SERVER['HTTP_REFERER']);
		}

		public function updateSSS()
		{
			$soru = $this->input->post('soru_baslik');
			$cevap = $this->input->post('texteditor');
			$id = $this->input->post('faqid');
			$where = array('faq_id'=>$id);
			$data = array(
				'faq_soru'=>$soru,
				'faq_cevap'=>$cevap
			);
			$this->db->where($where)->update('faq',$data);
			redirect($_SERVER['HTTP_REFERER']);
		}


		public function faq_delete()
		{
			$id = $_GET['sil'];
			$where = array('faq_id'=>$id);
			$this->db->where($where)->delete('faq');
			redirect($_SERVER['HTTP_REFERER']);
		}


	//SSS Sorulan sorular

	//SITE AYARLARI




	//AYARLAR

		public function add_contactForm()
		{
			$phone =	$this->input->post('phone');
			$whatsapp =	$this->input->post('whatsapp');
			$email =	$this->input->post('email');
			$aciklama =	$this->input->post('aciklama');

			$data = array(
				'contact_phone' 	=> $phone,
				'contact_wp' 	=> $whatsapp,
				'contact_email' 	=> $email,
				'aciklama' 	=> $aciklama
			);

			$this->db->insert('contac_form',$data);
			redirect($_SERVER['HTTP_REFERER']);
		}

		public function update_contactForm()
		{
			$phone =	$this->input->post('phone');
			$whatsapp =	$this->input->post('whatsapp');
			$email =	$this->input->post('email');
			$aciklama =	$this->input->post('aciklama');

			$data = array(
				'contact_phone' 	=> $phone,
				'contact_wp' 	=> $whatsapp,
				'contact_email' 	=> $email,
				'aciklama' 	=> $aciklama
			);

			$this->db->update('contac_form',$data);
			redirect($_SERVER['HTTP_REFERER']);
		}

		// END CONTACT PROGRAMMING


		public function add_seo()
		{
			$lang = $this->input->post('lang');
			$site_name = $this->input->post('site_name');
			$page_name = $this->input->post('page_name');
			$description = $this->input->post('description');
			$seo_key = $this->input->post('seo_key');

			$data = array(
				'dil' => $lang,
				'site_adi' => $site_name,
				'sayfa_adi' => $page_name,
				'aciklama' => $description,
				'seo_key' => $seo_key
			);
			$this->db->insert('seo',$data);
			redirect($_SERVER['HTTP_REFERER']);
		}

		public function refresh_seo()
		{
			$lang = $this->input->post('lang');
			$site_name = $this->input->post('site_name');
			$page_name = $this->input->post('page_name');
			$description = $this->input->post('description');
			$seo_key = $this->input->post('seo_key');

			$data = array(
				'dil' => $lang,
				'site_adi' => $site_name,
				'sayfa_adi' => $page_name,
				'aciklama' => $description,
				'seo_key' => $seo_key
			);
			$this->db->update('seo',$data);
			redirect($_SERVER['HTTP_REFERER']);
		}

		// END SEO PROGRAMMING

		public function create_notification()
		{
			date_default_timezone_set('Europe/Istanbul');
			$konu_baslik = $this->input->post('konu_baslik');
			$texteditor = $this->input->post('texteditor');

			$data = array(
				'b_baslik'	=> $konu_baslik,
				'b_icerik'	=> $texteditor,
				'b_tarih'	=> date('d.F.Y H:i:s')
			);
			$this->db->insert('bildirimler',$data);
			redirect($_SERVER['HTTP_REFERER']);
		}


		public function update_notification()
		{
			$konu_baslik = $this->input->post('konu_baslik');
			$texteditor = $this->input->post('texteditor');
			$b_id = $this->input->post('b_id');

			$where = array('b_id'=>$b_id);

			$data = array(
				'b_baslik'	=> $konu_baslik,
				'b_icerik'	=> $texteditor
			);
			$this->db->where($where)->update('bildirimler',$data);
			redirect($_SERVER['HTTP_REFERER']);
		}

		public function delete_notification()
		{
			$where = array('b_id'=>$_GET['sil']);

			$this->db->where($where)->delete('bildirimler');
			redirect(base_url('admin/notification'));
		}



		

		// END BILDIRIMLER


		public function create_ournotification()
		{
			date_default_timezone_set('Europe/Istanbul');
			$konu_baslik = $this->input->post('konu_baslik');
			$texteditor = $this->input->post('texteditor');

			$data = array(
				'd_baslik'	=> $konu_baslik,
				'd_icerik'	=> $texteditor,
				'd_tarih'	=> date('d.F.Y H:i:s')
			);
			$this->db->insert('duyurular',$data);
			redirect($_SERVER['HTTP_REFERER']);
		}


		public function update_ournotification()
		{
			$konu_baslik = $this->input->post('konu_baslik');
			$texteditor = $this->input->post('texteditor');
			$d_id = $this->input->post('d_id');

			$where = array('d_id'=>$d_id);

			$data = array(
				'd_baslik'	=> $konu_baslik,
				'd_icerik'	=> $texteditor
			);
			$this->db->where($where)->update('duyurular',$data);
			redirect($_SERVER['HTTP_REFERER']);
		}

		public function delete_ournotification()
		{
			$where = array('d_id'=>$_GET['sil']);

			$this->db->where($where)->delete('duyurular');
			redirect(base_url('admin/our_notification'));
		}

		// END BIZDEN DUYURULAR



		public function company_onay()
		{
			$konubaslik = $this->input->post('konu_baslik');
			$icerik = $this->input->post('texteditor');
			$id = $this->input->post('id');
			$where = array('com_id'=>$id);
			$data = array(
				'konu_baslik'=>$konubaslik,
				'icerik'=>$icerik,
				'durum'=>1
			);
			$this->db->where($where)->update('user_company_notification',$data);
			redirect(base_url('admin/user_company'));
		}


		public function company_update()
		{
			$konubaslik = $this->input->post('konu_baslik');
			$icerik = $this->input->post('texteditor');
			$id = $this->input->post('id');
			$where = array('com_id'=>$id);
			$data = array(
				'konu_baslik'=>$konubaslik,
				'icerik'=>$icerik
			);
			$this->db->where($where)->update('user_company_notification',$data);
			redirect(base_url('admin/user_company'));
		}

		public function company_delete()
		{
			$id = $_GET['sil'];
			$where = array('com_id'=>$id);
			$this->db->where($where)->delete('user_company_notification');
			redirect(base_url('admin/user_company'));

		}


		// END UYELERDEN KAMPANIYALAR


		public function addAdmin()
		{
			sleep(3);
			$kullanici_adi = $this->input->post('k_adi');
			$sifre = md5($this->input->post('pass'));
			$result = $this->account_model->admin_k_adi($kullanici_adi);
			if($result==1){
				echo 'Bu kullanıcı daha önce kullanlımıştır';
			}else{
				$data = array(
					'admin_name' =>$kullanici_adi,
					'admin_sifre' =>$sifre,
				);
				echo $this->db->insert('admin',$data);
			}
			
		}

		public function deleteAdmin()
		{
			$id = $_GET['sil'];
			$where = array('admin_id'=>$id);

			$this->db->where($where)->delete('admin');
			redirect($_SERVER['HTTP_REFERER']);

			
		}

	//AYARLAR




	public function update_ilan()
	{

		date_default_timezone_set('Europe/Istanbul');

		$userid = $this->input->post('userid');
		$anacategory = $this->input->post('anacategory');
		$altcategory = $this->input->post('altcategory');
		$title =$this->input->post('title');
		$ortakipci = $this->input->post('ortakipci');
		$turktakipci = $this->input->post('turktakipci');
		$kadintakipci = $this->input->post('kadintakipci');
		$hesapicerik = $this->input->post('hesapicerik');
		$hesapname = $this->input->post('hesapname');
		$acilis_yili = $this->input->post('acilis_yili');
		$takipcisay = $this->input->post('takipcisay');
		$goderisay = $this->input->post('goderisay');
		$mavitiklimi = $this->input->post('mavitiklimi');
		$isletmemi = $this->input->post('isletmemi');
		$engelvarmi = $this->input->post('engelvarmi');
		$engeller = $this->input->post('engeller');
		$teklife_acik = $this->input->post('teklife_acik');
		$teklif_tutari = $this->input->post('teklif_tutari');
		$price = $this->input->post('price');
		$detail = $this->input->post('detail');
		$ilk_mail = $this->input->post('kureposta');
		$revert_mail = $this->input->post('gereposta');
		$tarih = date('d.m.Y H:i:s');

		$userEmail = $_POST['eposta'];
		$username = $_POST['username'];


		$cat = $altcategory;

		switch ($cat) {
			case '106':
			
				if($title ==""){
					echo '<b>Hata!</b> Lütfen ilan başlığınızı minimum 20 karakter olacak şekilde girin!';
				}	
				elseif(!is_numeric($price) || $price==""){
					echo '<b>Hata!</b> Lütfen satış fiyatını giriniz!';
				}elseif(strlen($detail) < 50 || $detail==""){
					echo '<b>Hata!</b> Lütfen ilanınızla ilgili en fazla 50 karakterlik bilgi veriniz!';
				}else{

					$ilanID = $_POST['ilanID'];
						$where = array('ilan_id'=>$ilanID);

					$data = array(
						'ilan_anacategory' => $anacategory,
						'ilan_altcategory' =>$altcategory,
						'ilan_basligi' =>$title,
						'teklif' => $teklife_acik,
						'teklif_tutar' => $teklif_tutari,
						'satis_fiyat' => $price,
						'detay_bilgi' => nl2br($detail),

					);

					$update = $this->db->where($where)->update('ilanlar',$data);
					if($update){
						echo 1;
					}

				}

			

			break;

			case '107':

					if($hesapname==""){
						echo '<b>Hata!</b> Lütfen hesap kullanıcı adını girin!';
					}elseif($title ==""){
						echo '<b>Hata!</b> Lütfen ilan başlığınızı minimum 20 karakter olacak şekilde girin!';
					}	
					elseif(!is_numeric($price) || $price==""){
						echo '<b>Hata!</b> Lütfen satış fiyatını giriniz!';
					}elseif(strlen($detail) < 50 || $detail==""){
						echo '<b>Hata!</b> Lütfen ilanınızla ilgili en fazla 50 karakterlik bilgi veriniz!';
					}else{

						$ilanID = $_POST['ilanID'];
						$where = array('ilan_id'=>$ilanID);

						$data = array(
							'ilan_anacategory' => $anacategory,
							'ilan_altcategory' =>$altcategory,
							'hesap_kullanici_adi' => $hesapname,
							'ilan_basligi' =>$title,
							'teklif' => $teklife_acik,
							'teklif_tutar' => $teklif_tutari,
							'satis_fiyat' => $price,
							'detay_bilgi' => nl2br($detail),

						);

						$update = $this->db->where($where)->update('ilanlar',$data);
						if($update){
							echo 1;
						}

					}

			break;

			default:

			if(is_numeric($ortakipci) || $ortakipci==""){
				echo '<b>Hata!</b> Lütfen organik takipçi oranını girin!';
			}elseif($turktakipci==""){
				echo '<b>Hata!</b> Lütfen Türk takipçi oranını girin!';
			}elseif($kadintakipci==""){
				echo '<b>Hata!</b> Lütfen kadın takipçi oranını girin!';
			}elseif($hesapicerik==""){
				echo '<b>Hata!</b> Lütfen hesap içeriğini girin!';
			}elseif($hesapname==""){
				echo '<b>Hata!</b> Lütfen hesap kullanıcı adını girin!';
			}elseif($acilis_yili==""){
				echo '<b>Hata!</b> Lütfen hesap açılış yılını girin!';
			}elseif(!is_numeric($takipcisay) || $takipcisay==""){
				echo '<b>Hata!</b> Lütfen takipçi sayısını girin!';
			}elseif($engelvarmi==1){
				echo '<b>Hata!</b> Lütfen hesaptaki engel durumunu ve varsa engelleri belirtin!';
			}elseif(!is_numeric($price) || $price==""){
				echo '<b>Hata!</b> Lütfen satış fiyatını giriniz!';
			}elseif(strlen($detail) < 50 || $detail==""){
				echo '<b>Hata!</b> Lütfen ilanınızla ilgili en fazla 50 karakterlik bilgi veriniz!';
			}else{

				$ilanID = $_POST['ilanID'];
				$where = array('ilan_id'=>$ilanID);

				$data = array(
					'ilan_anacategory' => $anacategory,
					'ilan_altcategory' =>$altcategory,
					'org_takipci' => $ortakipci,
					'ilk_mail'			=> $ilk_mail,
					'revert_mail'		=> $revert_mail,
					'kadin_takipci' => $kadintakipci,
					'turk_takipci' => $turktakipci,
					'hesap_icerik' => $hesapicerik,
					'hesap_kullanici_adi' => $hesapname,
					'hesap_acilis_yil' => $acilis_yili,
					'abone_sayi' => $takipcisay,
					'gonderi_sayi' => $goderisay,
					'mavi_tik' => $mavitiklimi,
					'hesap_durum' => $isletmemi,
					'hesap_engel' => $engelvarmi,
					'engel_icerik' => $engeller,
					'teklif' => $teklife_acik,
					'teklif_tutar' => $teklif_tutari,
					'satis_fiyat' => $price,
					'detay_bilgi' => nl2br($detail),

				);


				// $mail->isSMTP();                                           
				// $mail->Host       = 'smtp.hostinger.com';  
				// $mail->SMTPKeepAlive = true;                 			 
				// $mail->SMTPAuth   = true;                                  
				// $mail->Username   = 'info@goldbazar.az';                     
				// $mail->Password   = '9wJDE!Ze&FZ;';                               
				// $mail->SMTPSecure = 'tls';                                  
				// $mail->Port       = 587; 

				// $mail->setFrom('info@goldbazar.az', 'Ilansat.net');
				// $mail->addAddress($userEmail, 'Ilansat');
				// $mail->IsHTML(true);

				// $mail->Subject = 'Onay Mesajı ' . $username;
				// $mail->Body = '

				// <div id="mail_container" style="width:100%;background:#fff;position:relative;">
					
				// 	<div id="mail_content" style="padding-left:10px;padding-right:10px;">
				// 		<p>Merhaba <b>'.$username.'</b></p>

				// 		<p>Tebrik ederiz. üyelik kaydınız başarıyla gerçekleşmiştir</p>

				// 		<p>Ilansat.net sisteminin tüm avantajlarından ve kampanyalarından faydalanabilmek için aşağıda belirtilen link-e tıklayarak hesabınızı aktif hale getirmeniz gerekmektedir.</p>

				// 		<p>E-mail aktivasyonunu gerçekleştirmemiş üyelerimize hiç bir bildirimin gönderilmeyecek olmasının yanı sıra, üyelerimiz; kampanya ve belirli dönemlerde düzenlenen yarışmalar sonunda dağıtılacak olan hediyeleri kazanma hakkına da sahip olamayacaklardır.
				// 		</p>

				// 		<p>Saygılarımızla</p>
				// 		<p>Ilansat.net</p>

				// 	</div>
						
				// </div>';

				// $mail->CharSet = 'UTF-8';

				// $mail->send();


				echo $update = $this->db->where($where)->update('ilanlar',$data);
				
				



			}
			break;

		}


		

	}


	public function onayla($onayID)
	{
		$where = array('ilan_id'=>$onayID);
		$data = array('activation'=>1);
		$this->db->where($where)->update('ilanlar',$data);
		redirect($_SERVER['HTTP_REFERER']);
	}

	public function ilan_pasif($pasifID)
	{
		$where = array('ilan_id'=>$pasifID);
		$data = array('ilan_durum'=>1);
		$this->db->where($where)->update('ilanlar',$data);
		redirect($_SERVER['HTTP_REFERER']);
	}

	public function ilan_aktif($aktifID)
	{
		$where = array('ilan_id'=>$aktifID);
		$data = array('ilan_durum'=>0);
		$this->db->where($where)->update('ilanlar',$data);
		redirect($_SERVER['HTTP_REFERER']);
	}



	public function addCategory()
	{
		sleep(1.5);
		$anacategory = ucfirst($this->input->post('anacategory'));
		$config['upload_path'] = 'assets/images/';
		$config['allowed_types'] = 'jpg|png|jpeg|';

		$this->load->library('upload',$config);
		if(! $this->upload->do_upload('file')){
			echo "Doğru format seçin";
		}else{
			$data = array(
				'plt_name'=>$anacategory,
				'plt_icon'=>$_FILES['file']['name']
			);
			echo $this->db->insert('platform',$data);
		}
		
	}

	public function updateCategory()
	{
		$anacategory = ucfirst($this->input->post('anacategory'));
		$upid = $_POST['upid'];
		$link = $_POST['url'];
		$where = array(
			'plt_id'=>$upid
		);
		$data = array(
			'plt_name' =>$anacategory,
			'plt_url' =>$link
		);
		$this->db->where($where)->update('platform',$data);
		redirect($_SERVER['HTTP_REFERER']);
	}

	public function deleteCategory($dltID)
	{
		$where = array(
			'plt_id'=>$dltID
		);
		echo $this->db->where($where)->delete('platform');
	}




	public function addSubcategori()
	{
		sleep(2);
		$scat = $_POST['scat'];
		$altcat = $_POST['altcat'];
		$cat_name = $_POST['cat_name'];
		$count = count($_POST['altcat']);
		for ($i=0; $i < $count; $i++) { 
				
			$data = array(
				'plt_id'=>$scat,
				'value' =>$altcat[$i],
				'ish_name' =>$cat_name[$i]
			);
			$this->db->insert('ishlem',$data);
		}
		echo 1;
	}



	public function updateAltCategory()
	{
		$anacategory = ucfirst($this->input->post('anacategory'));
		$upid = $_POST['upid'];
		$where = array(
			'kat_id'=>$upid
		);
		$data = array(
			'kat_name' =>$anacategory
		);
		$this->db->where($where)->update('alt_kategoriya',$data);
		redirect($_SERVER['HTTP_REFERER']);
	}


	public function deleteAltCategory($dltID)
	{
		$where = array(
			'kat_id'=>$dltID
		);
		echo $this->db->where($where)->delete('alt_kategoriya');
	}


	public function addAltcategory()
	{
		$alt_cat_name = $_POST['alt_cat_name'];
		$value = rand(110,999);
		$data=array(
			'kat_name'=>$alt_cat_name,
			'cat_value'=>$value
		);
		$this->db->insert('alt_kategoriya',$data);
		redirect($_SERVER['HTTP_REFERER']);
	}




	public function add_ilanKomisyon()
	{
		$start = $_POST['start_komisyon'];
		$end = $_POST['end_komisyon'];

		$data = array(
			'km_start' =>$start,
			'komisyon' =>$end,
		);
		echo $this->db->insert('komisyon',$data);
	}

	public function update_ilanKomisyon()
	{
		$start = $_POST['start_komisyon'];
		$end = $_POST['end_komisyon'];

		$where = array('kom_id'=>$_POST['komid']);

		$data = array(
			'km_start' =>$start,
			'komisyon' =>$end,
		);
		$this->db->where($where)->update('komisyon',$data);
		redirect($_SERVER['HTTP_REFERER']);
	}





	public function updatePage()
	{
		$mapiframe  = $this->input->post('mapiframe');
		$texteditor = $this->input->post('texteditor');
		$pagename = $this->input->post('pagename');
		$page_id = $this->input->post('pageid');

		$where = array(
			'page_id'=>$page_id
		);
		$data = array(
			'icerik'=>$texteditor
		);

		$this->db->where($where)->update('sayfalar',$data);
		redirect($_SERVER['HTTP_REFERER']);
	}


	public function addPageContent()
	{
		$mapiframe  = $this->input->post('mapiframe');
		$texteditor = $this->input->post('texteditor');
		$pagename = $this->input->post('pagename');
		$page_id = $this->input->post('pageid');

		$data = array(
			'iframe'=>$mapiframe,
			'icerik'=>$texteditor,
			'page_id'=>$page_id
		);

		$this->db->insert('sayfalar',$data);
		redirect($_SERVER['HTTP_REFERER']);
	}








}








?>
