<section>
  <?php
  $contact = $this->db->get('contac_form')->result();
  foreach ($contact as $cn) {
    # code...
  }
  ?>
  <div class="dc-footer">
    <div class="footer_header">
      
      <div class="socialLinks">
        <?php
          $medialist = $this->db->get('media')->result();
          foreach ($medialist as $mdlist) {
            echo '<a href="'.$mdlist->media_url.'" target="_blok"><i class="'.$mdlist->media_icon.'"></i></a>';
          }
        ?>
      </div>
    </div>

    <div class="container" >
      <div class="row">
        <div class="col-lg-3 col-6 col-footer">
          <div class="ft-header"><span data-feather="map-pin" id="f-icon"></span>&nbsp; Iletisim</div>
          <?php
            $result = $this->process_model->contact_control();
            if($result==1){
              echo '<a href=""><i data-feather="phone"></i> '.$cn->contact_phone.'</a>
                   <a href=""><i class="fab fa-whatsapp"></i> '.$cn->contact_wp.'</a>
                   <a href=""><i data-feather="mail"></i> '.$cn->contact_email.'</a>';
            }else{
              echo '';
            }
          ?>
          <div class="ft-footer">© 2021 DCB</div>
        </div>

        <div class="col-lg-3 col-6 col-footer">
          <div class="ft-header"><span data-feather="heart" id="f-icon"></span>&nbsp; İlansat</div>
          <a href="<?php echo base_url('about-us')?>"><i class="fa fa-caret-right"></i> Hakkımızda</a>
          <a href="<?php echo base_url('terms-conditions')?>"><i class="fa fa-caret-right"></i> Kullanıcı sözleşmesi</a>
          <a href="<?php echo base_url('privacy-policy')?>"><i class="fa fa-caret-right"></i> Gizlilik Politikası</a>
          <a href="<?php echo base_url('contact')?>"><i class="fa fa-caret-right"></i> Bize ulaşın</a>
          <a href="<?php echo base_url('faq')?>"><i class="fa fa-caret-right"></i> Sıkça Sorulan Sorular</a>
        </div>

        <div class="col-lg-3 col-sm-6 col-xs-12 col-footer">
          <div class="ft-header"><span data-feather="hash" id="f-icon"></span>&nbsp; Hesap satış İlanları</div>
          <a href=""><i class="fab fa-instagram"></i> Instagram hesap ilanlari</a>
          <a href=""><i class="fab fa-youtube"></i> Youtube kanal ilanlari</a>
          <a href=""><i class="fab fa-twitter"></i> Twitter hesap ilanlari</a>
          <a href=""><i class="fab fa-facebook-f"></i> Facebook sayfa ilanlari</a>
          <a href=""><i class="fas fa-bolt"></i> Tiktok hesap ilanlari</a>
        </div>

        <div class="col-lg-3 col-sm-6 col-xs-12 col-footer">
          <div class="ft-header"><span data-feather="users" id="f-icon"></span>&nbsp; Takipçi İlanları</div>
          <a href=""><i class="fab fa-instagram"></i> Instagram hesap ilanlari</a>
          <a href=""><i class="fab fa-youtube"></i> Youtube kanal ilanlari</a>
          <a href=""><i class="fab fa-twitter"></i> Twitter hesap ilanlari</a>
          <a href=""><i class="fab fa-facebook-f"></i> Facebook sayfa ilanlari</a>
          <a href=""><i class="fas fa-bolt"></i> Tiktok hesap ilanlari</a>
        </div>

      </div>

      <div class="seprator"></div>

      <div id="yasal">
        <?php
            $result = $this->process_model->contact_control();
            if($result==1){
              echo '<i data-feather="alert-triangle" class="iconFeather"></i><b>Yasal Sorumluluk</b>'.$cn->aciklama;
            }else{
              echo '';
            }
          ?>
      </div>
    </div>
  </div>
</section>




<script
        src="https://code.jquery.com/jquery-3.5.1.min.js"
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
        crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script src="<?php echo base_url('assets/')?>js/main.js"></script>
    <script src="<?php echo base_url('assets/')?>js/dropzone.js"></script>
    <script src="<?php echo base_url('assets/')?>js/photoswipe.min.js"></script>
    <script src="<?php echo base_url('assets/')?>js/photoswipe-ui-default.min.js"></script>
    <script src="<?php echo base_url('assets/')?>js/owl.carousel.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>


<script src="https://unpkg.com/feather-icons"></script>
<script>
  $('.owl-carousel').owlCarousel({
    margin:10,
    loop:true,
    items:4,
    responsiveClass:true,
    responsive:{
        0:{
            items:1,
            nav:false
        },
        600:{
            items:3,
            nav:false
        },
        1000:{
            items:4,
            nav:true,
            loop:false
        }
    }
})
</script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.collapsible');
    var instances = M.Collapsible.init(elems, options);
  });

  // Or with jQuery

  $(document).ready(function(){
    $('.collapsible').collapsible();
  });

  
  feather.replace();
</script>

<!-- <script src="https://cdn.ckeditor.com/4.15.1/standard/ckeditor.js"></script>
<script>
        CKEDITOR.replace( 'texteditor',{
          height:150,
          // filebrowserUploadUrl:'<?php echo base_url('admin/upload')?>',
          // filebrowserBrowseUrl:'<?php echo base_url('admin/file_browser')?>'
        });

</script> -->
<script src="<?php echo base_url('assets/')?>js/jquery.richtext.min.js"></script>
<script>
  $('#viedittext').richText({

  // text formatting
  bold: true,
  italic: true,
  underline: true,

  // text alignment
  leftAlign: true,
  centerAlign: true,
  rightAlign: true,
  justify: true,

  // lists
  ol: true,
  ul: true,

  // title
  heading: true,

  // fonts
  fonts: true,
  fontList: [
      "Arial", 
      "Arial Black", 
      "Comic Sans MS", 
      "Courier New", 
      "Geneva", 
      "Georgia", 
      "Helvetica", 
      "Impact", 
      "Lucida Console", 
      "Tahoma", 
      "Times New Roman",
      "Verdana"
  ],
  fontColor: true,
  fontSize: false,

  // uploads
  imageUpload: false,
  fileUpload: false,

  // media
  videoEmbed: false,

  // link
  urls: true,

  // tables
  table: true,

  // code
  removeStyles: false,
  code: false,

  // colors
  colors: [],

  // dropdowns
  fileHTML: '',
  imageHTML: '',

  // translations
  translations: {
      'title': 'Title',
      'white': 'White',
      'black': 'Black',
      'brown': 'Brown',
      'beige': 'Beige',
      'darkBlue': 'Dark Blue',
      'blue': 'Blue',
      'lightBlue': 'Light Blue',
      'darkRed': 'Dark Red',
      'red': 'Red',
      'darkGreen': 'Dark Green',
      'green': 'Green',
      'purple': 'Purple',
      'darkTurquois': 'Dark Turquois',
      'turquois': 'Turquois',
      'darkOrange': 'Dark Orange',
      'orange': 'Orange',
      'yellow': 'Yellow',
      'imageURL': 'Image URL',
      'fileURL': 'File URL',
      'linkText': 'Link text',
      'url': 'URL',
      'size': 'Size',
      'responsive': 'Responsive',
      'text': 'Text',
      'openIn': 'Open in',
      'sameTab': 'Same tab',
      'newTab': 'New tab',
      'align': 'Align',
      'left': 'Left',
      'center': 'Center',
      'right': 'Right',
      'rows': 'Rows',
      'columns': 'Columns',
      'add': 'Add',
      'pleaseEnterURL': 'Please enter an URL',
      'videoURLnotSupported': 'Video URL not supported',
      'pleaseSelectImage': 'Please select an image',
      'pleaseSelectFile': 'Please select a file',
      'bold': 'Bold',
      'italic': 'Italic',
      'underline': 'Underline',
      'alignLeft': 'Align left',
      'alignCenter': 'Align centered',
      'alignRight': 'Align right',
      'addOrderedList': 'Add ordered list',
      'addUnorderedList': 'Add unordered list',
      'addHeading': 'Add Heading/title',
      'addFont': 'Add font',
      'addFontColor': 'Add font color',
      'addFontSize' : 'Add font size',
      'addImage': 'Add image',
      'addVideo': 'Add video',
      'addFile': 'Add file',
      'addURL': 'Add URL',
      'addTable': 'Add table',
      'removeStyles': 'Remove styles',
      'code': 'Show HTML code',
      'undo': 'Undo',
      'redo': 'Redo',
      'close': 'Close'
  },
            
  // privacy
  youtubeCookies: false,
  
  // developer settings
  useSingleQuotes: false,
  height: 0,
  heightPercentage: 0,
  id: "",
  class: "",
  useParagraph: false,
  maxlength: 0,
  callback: undefined

});
</script>

</body>
</html>