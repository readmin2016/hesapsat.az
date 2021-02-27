<?php



class Popup extends CI_Controller{



	public function duyuru_popup($id)
	{
		$rows = $this->db->where(array('d_id'=>$id))->get('duyurular')->result();
		foreach ($rows as $row) {
			echo '<div class="modal-content">
			      <div class="modal-header">
			        <h5 class="modal-title" id="exampleModalLabel">
			        	<i data-feather="activity" class="iconactivity"></i>'.$row->d_baslik.'</h5>
			        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			      </div>
			      <div class="modal-body">
			      	'.$row->d_icerik.'
				  </div>
			      <div class="modal-footer">
			        <button data-bs-dismiss="modal" type="button" id="btn" class="btn btn-secondary btn-sm btn-rounded fltleft"><i data-feather="power" class="iconpower"></i> Kapat</button>
			      </div>
			    </div>';
		}
	}


	public function uyari_popup($id)
	{
		$rows = $this->db->where(array('uyari_id'=>$id))->get('uyarilar')->result();
		$read = $this->db->query("UPDATE uyarilar SET durum=1 WHERE uyari_id='$id'");
		foreach ($rows as $row) {
			echo '<div class="modal-content">
			      <div class="modal-header">
			        <h5 class="modal-title" id="exampleModalLabel">
			        	<i data-feather="alert-triangle" style="width:17px;margin-right:5px;margin-top:-3px;color:red" class="iconactivity"></i>'.$row->baslik.'</h5>
			        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			      </div>
			      <div class="modal-body">
			      	'.$row->icerik.'
				  </div>
			      <div class="modal-footer">
			        <button data-bs-dismiss="modal" type="button" id="btn" class="btn btn-secondary btn-sm btn-rounded fltleft"><i data-feather="power" class="iconpower"></i> Kapat</button>
			      </div>
			    </div>';
		}
	}



public function like()
{
	$like_id = $_GET['like'];
	$userid = $_GET['liker'];
	$this->db->query("UPDATE duyurular SET d_like=d_like+1, userid='$userid' WHERE d_id='$like_id'");
	redirect($_SERVER['HTTP_REFERER']);
}


public function unlike()
{
	$like_id = $_GET['like'];
	$userid = $_GET['liker'];
	$this->db->query("UPDATE duyurular SET d_unlike=d_unlike+1, userid='$userid' WHERE d_id='$like_id'");
	redirect($_SERVER['HTTP_REFERER']);
}


public function view_anacategory($upID)
{
	$rows = $this->db->where(array('plt_id'=>$upID))->get('platform')->result();
	foreach ($rows as $row) {
		echo '<div class="form-group">
			  <div class="input-group mb-3">
			  	<input type="hidden" name="upid" value="'.$row->plt_id.'">
				  <span class="input-group-text" id="basic-addon1"><i data-feather="share-2" style="width:14px;"></i></span>
				  <input type="text" name="anacategory" class="form-control" value="'.$row->plt_name.'" aria-describedby="basic-addon1">
				</div>

				<div class="input-group mb-3">
				  <span class="input-group-text" id="basic-addon1"><i data-feather="link" style="width:14px;"></i></span>
				  <input type="text" name="url" class="form-control" value="'.$row->plt_url.'" aria-describedby="basic-addon1">
				</div>
			</div>';
	}
}



public function view_altcategory($altID)
{
	$rows = $this->db->where(array('kat_id'=>$altID))->get('alt_kategoriya')->result();
	foreach ($rows as $row) {
		echo '<div class="form-group">
			  <div class="input-group mb-3">
			  	<input type="hidden" name="upid" value="'.$row->kat_id.'">
				  <span class="input-group-text" id="basic-addon1"><i class="fas fa-share-alt"></i></span>
				  <input type="text" name="anacategory" class="form-control" value="'.$row->kat_name.'" aria-describedby="basic-addon1">
				</div>
			</div>';
	}
}



























}











?>

<script>
	feather.replace();
</script>