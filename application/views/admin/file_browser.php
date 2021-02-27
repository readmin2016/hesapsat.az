<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="https://cdn.ckeditor.com/4.15.1/standard/ckeditor.js"></script>
<script>
  $(document).ready(function(){

   var funcNum = <?php echo $_GET['CKEditorFuncNum'].';'?>
   $('#fileExplorer').on('click','img',function(){
      var fileUrl = $(this).attr('title');
      window.opener.CKEDITOR.tools.callFunction(funcNum,fileUrl);
      window.close();
   }).hover(function(){
    $(this).css('cursor','pointer');
   })


  })
</script>
<style>
	
.thumbnail {
    width: 150px;
    height: 150px;
    border-radius: 10px;
    box-shadow: 0 0 15px #999;
    overflow: hidden;
    display: inline-block;
    margin-right: 10px;
}
.thumbnail:hover{
	box-shadow: none;
	transition:.2s;
}
img {
    width: 100%;
    height: 150px;
    object-fit: cover;
}

</style>
<div id="fileExplorer">
<?php

 foreach ($fileList as $filename) { ?>

 	<div class="thumbnail">
 		<img src="<?php echo base_url().$filename?>" title="<?php echo base_url().$filename?>"  width="200" height="200">
 	</div>

 	
<?php }

?>
</div>