function myFunction() {
  /* Get the text field */
  var copyText = document.getElementById("myInput");

  /* Select the text field */
  copyText.select();
  copyText.setSelectionRange(0, 99999); /* For mobile devices */

  /* Copy the text inside the text field */
  document.execCommand("copy");

  /* Alert the copied text */
  // alert("Copied the text: " + copyText.value);
} 


$(function(){

	setTimeout(function(){
		$('.se-pre-con').fadeOut();
	},600);

$('.termTable table').addClass('table table-striped');
$('#cleen table').addClass('table table-bordered');

$('.container').css({'margin-top':'18px'})
$('.container .ilanlar').css({'margin-top':'0px'})

	$('a#a-disabled').on('click',function(e){
		e.preventDefault();
	})

	if($(window).width() < 960){
		$('.checkout-steps a').css({'cursor':'pointer'})
		$('.checkout-steps a:first').css({'cursor':'no-drop'})
	}

	$('.alert-close').click(function(){
		$(this).parent().fadeOut(300);
	})


	$('#paraInput').focusin(function(){
		$('#basic-addon1').css({'color':'var(--primaryColor)'})
	});

	$('#paraInput').focusout(function(){
		$('#basic-addon1').css({'color':'#888'})
	});


	$('#maincat').change(function(){
		$('#subcat option').first().attr('class', 0);
		var url = $('#url').val();
		var valValue = $(this).val();
		$.ajax({
			url:url+'pages/loadislem',
			method:'POST',
			data:{'valValue':valValue},
			success:function(response){
				$('#subcat').html(response);
			}
		})

	});



$('#parayatir-form').on('submit',function(e){
	e.preventDefault();
	var url = $('#url').val();
	var pay = $('input[name=yatacak]').val();
	var userid = $('input[name=userid]').val();

	var minNumber = 500;
	var maxNumber = 100

	var randomNumber = randomNumberFromRange(minNumber, maxNumber);

	function randomNumberFromRange(min,max)
	{
	    return Math.floor(Math.random()*(max-min+1)+min);
	}

	$.ajax({
		url:url+'payment/'+pay+'/'+randomNumber+'/'+userid,
		method:'POST',
		data:$('form').serialize(),
		success:function(){
			window.location.href=url+'payment/'+pay+'/'+randomNumber+'/'+userid;
		}
	})
});


$('#formRegister').on('submit', function(e){
	e.preventDefault();
	var url = $('#url').val();
	$.ajax({
		url:url+'pages/create_account',
		method:"POST",
		data:$('form').serialize(),
		success:function(response){
			if(response==1){
				location.reload();
			}else{
				$('.register').fadeIn(200).delay(2000).fadeOut();
				$('.register span').html(response);
			}
		}
	})
});

$('#formNeadLogin').on('submit', function(e){
	e.preventDefault();
	var url = $('#url').val();
	$.ajax({
		url:url+'pages/neadlogin',
		method:"POST",
		data:$('form').serialize(),
		success:function(response){
			if(response==1){
				window.location.href=url+'add-listing';
			}else{
				$('.nead').fadeIn(200).delay(2000).fadeOut();
				$('.nead span').html(response);
			}
		}
	})
});



$('#formLogin').on('submit', function(e){
	e.preventDefault();
	var url = $('#url').val();
	$.ajax({
		url:url+'pages/login',
		method:"POST",
		data:$('form').serialize(),
		success:function(response){
			if(response==1){
				location.reload();
			}else{
				$('.loginAlert').fadeIn(200).delay(2000).fadeOut();
				$('.loginAlert span').html(response);
			}
		}
	})
});




$('#sifredegissetform').on('submit', function(e){
	e.preventDefault();
	var url = $('#url').val();
	$.ajax({
		url:url+'settings/change_password',
		method:"POST",
		data:$('form').serialize(),
		success:function(response){
			if(response==1){
				$('.alert-success').fadeIn(200).delay(3000).fadeOut();
				setTimeout(function(){
					$('input').val('');
				},3000);
			}else{
				$('.alert-danger').fadeIn(200).delay(3000).fadeOut();
				$('.alert-danger span').html(response);
			}
		}
	})
});



$(document).on('change','#file-input', function(){
	var url = $('#url').val();
	var userid = $('#userid').val();
	var property = document.getElementById('file-input').files[0];
	var form_data = new FormData();
	form_data.append('file',property);

	$.ajax({
		url:url+'settings/add_profile_image/'+userid,
		method:'POST',
		cache: false,
        contentType: false,
        processData: false,
        data: form_data,  
		success:function(response){
			if(response==1){
				location.reload();
			}else{
				$('.alert-danger').fadeIn(200).delay(3000).fadeOut();
				$('.alert-danger span').html(response);
			}
		}
	})
});





$('#city').change(function(){
	var url = $('#url').val();
	var city = $(this).val();
	if(city==''){
		$('#district').html('<option value="0" class="0">Önce il seçiniz</option>');
	}else{

		$.ajax({
			url:url+'settings/select_district',
			method:'POST',
	        data: {'city':city},  
			success:function(response){
				$('#district').html(response);
			}
		})

	}
	
});



$('#updateayadd-form').on('submit', function(e){
	e.preventDefault();
	var url = $('#url').val();
	$.ajax({
		url:url+'settings/add_address',
		method:"POST",
		data:$('form').serialize(),
		success:function(response){
			if(response==1){
				location.reload();
			}else{
				$('.alert-danger').fadeIn(200).delay(3000).fadeOut();
				$('.alert-danger span').html(response);
			}
		}
	})
});



$('#emaildegissetform').on('submit', function(e){
	e.preventDefault();
	var url = $('#url').val();
	$.ajax({
		url:url+'settings/change_email',
		method:"POST",
		data:$('form').serialize(),
		success:function(response){
			if(response==1){
				location.reload();
			}else{
				$('.alert-danger').fadeIn(200).delay(3000).fadeOut();
				$('.alert-danger span').html(response);
			}
		}
	})
});



$('#phonedegissetform').on('submit', function(e){
	e.preventDefault();
	var url = $('#url').val();
	$.ajax({
		url:url+'settings/change_phone',
		method:"POST",
		data:$('form').serialize(),
		success:function(response){
			if(response==1){
				location.reload();
			}else{
				$('.alert-danger').fadeIn(200).delay(3000).fadeOut();
				$('.alert-danger span').html(response);
			}
		}
	})
});



$('#mailonaysetform').on('submit', function(e){
	e.preventDefault();
	var url = $('#url').val();
	$.ajax({
		url:url+'settings/emailonay',
		method:"POST",
		data:$('form').serialize(),
		success:function(response){
			$('.alert-success').fadeIn(200).delay(3000).fadeOut();
			$('.alert-success center').html(response);
		}
	})
});






$('.open_filter').click(function(){
	$('.hamburger').fadeIn();
	$('.mobileFilerBar').css({'transform':'translateX(0)'});
})

$('.hamburger').click(function(){
	$('.hamburger').fadeOut();
	$('.mobileFilerBar').css({'transform':'translateX(100%)'});
});

$('#closeFilterBar').click(function(){
	$('.hamburger').fadeOut();
	$('.mobileFilerBar').css({'transform':'translateX(100%)'});
})




$(document).on('change','#file-input1', function(){
	var url = $('#url').val();
	var userid = $('#userid').val();
	var property = document.getElementById('file-input1').files[0];
	var form_data = new FormData();
	form_data.append('file',property);

	$.ajax({
		url:url+'settings/tc_kimlik_upload/'+userid,
		method:'POST',
		cache: false,
        contentType: false,
        processData: false,
        data: form_data,  
		success:function(response){
			if(response==1){
				$('.alert-success').fadeIn(200).delay(3000).fadeOut();
			}else{
				$('.alert-danger').fadeIn(200).delay(3000).fadeOut();
				$('.alert-danger span').html(response);
			}
		}
	})
});



jQuery('.header').wrap('<div class="head-placeholder"></div>');
jQuery('.head-placeholder').height(jQuery('.header').outerHeight);

$(window).scroll(function(){
	if($(window).scrollTop() > 10){
		$('.header').addClass('scroll');
	}else{
		$('.header').removeClass('scroll');
	}
})





$('#webbcupdt-form').on('submit', function(e){
	e.preventDefault();
	var anacategory = $('#maincat').val();
	var altcategory = $('#subcat').val();
	var url = $('#url').val();

	if(anacategory=='' || altcategory==''){
		$('.alert-danger').fadeIn(300);

	}else{

		$.ajax({
			url:url+"info/"+anacategory+'/'+altcategory,
			method:'POST',
			data:{'anacategory':anacategory,'altcategory':altcategory},
			success:function(){
				window.location.href=url+"info/"+anacategory+'/'+altcategory;
			}
		})

	}

	
})



$('#addilan-form').on('submit',function(e){
	e.preventDefault();
	var url = $('#url').val();
	var anacategory = $('#maincat').val();
	var altcategory = $('#subcat').val();
	$.ajax({
		url:url+"pages/add_ilan",
		method:'POST',
		data:$('form').serialize(),
		success:function(response){
			if(response==1){
				window.location.href=url+"images/"+anacategory+'/'+altcategory+'/step2';
			}else{
				$('.ilan_hata').fadeIn();
				$('.ilan_hata center span').html(response);
				$('html,body').animate({'scrollTop':0});
			}
		}
	})
})


$('#odbildir-form').on('submit',function(e){
	e.preventDefault();
	var url = $('#url').val();
	$.ajax({
		url:url+"banka/send_odbildir",
		method:'POST',
		data:$('form').serialize(),
		beforeSend:function(){
			$('#odbildir-button').append('<span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span>');
		},
		success:function(response){
			if(response==1){
				$('.formSuccess').fadeIn();
				$('.formSuccess center').html('Form Başarıyla gönderildi');
				$('#odbildir-button span').remove();
				setTimeout(function(){
					location.href=url+"dashboard";
				},1500);
			}else{
			}
		}
	})
});



$('input[name=dltilan]').on('click',function(){
	var ilanID = $(this).val();
	$('#ilansil').show();
	$('#ilansil').attr('onclick','removeilan('+ilanID+')');
});








// $('input[name=socail_link]').change(function(){

// 	var pltName = $(this).val();
// 	var url = $('#url').val();
// 	if(pltName==0){
// 		window.location.href=url+"ilanlar";
// 	}else{
// 		window.location.href=url+"ilanlar?platform="+pltName;
// 	}


	
// });

// var data = document.location.search.substr(1);
// alert(data);



// $('input[name=istip]').change(function(){
// var dataObj = {};
//  var data = $(location).attr('href');
//  var test = document.location.search.substr(1)
//  var url = $('#url').val();
 

// 	var istip = $(this).val();
	
// 	if(istip==0){
// 		window.location.href=URL;
// 	}else{
// 		window.location.href = '&istip='+istip;
// 	}


	
// });























});


function removeilan(ilan_id)
{
	var url = $('#url').val();
	Swal.fire({
	  title: 'Silmek istediğinizden eminmisiniz?',
	  icon: 'warning',
	  showCancelButton: true,
	  confirmButtonColor: '#3085d6',
	  cancelButtonColor: '#d33',
	  confirmButtonText: 'Evet',
	  cancelButtonText: 'Hayır'
	}).then((result) => {
	  if (result.isConfirmed) {
	    
	    $.ajax({
	      	url:url+"pages/removeIlan",
	      	method:'POST',
	      	data:{'ilan_id':ilan_id},
	      	success:function(){
	      		Swal.fire(
			      'İşlem Tamam',
			      'İlan silindi',
			      'success'
			    )
	      		setTimeout(function(){
	      			location.reload();
	      		},1500);
	      	}
	      })
	  }
	})
}


function dlt_ilan(id)
{
	var url = $('#url').val();
	Swal.fire({
	  title: 'Silmek istediğinizden eminmisiniz?',
	  icon: 'warning',
	  showCancelButton: true,
	  confirmButtonColor: '#3085d6',
	  cancelButtonColor: '#d33',
	  confirmButtonText: 'Evet',
	  cancelButtonText: 'Hayır'
	}).then((result) => {
	  if (result.isConfirmed) {
	    
	    $.ajax({
	      	url:url+"settings/deleteIlan",
	      	method:'POST',
	      	data:{'id':id},
	      	success:function(){
	      		Swal.fire(
			      'İşlem Tamam',
			      'İlan silindi',
			      'success'
			    )
	      		setTimeout(function(){
	      			location.reload();
	      		},1500);
	      	}
	      })
	  }
	})
}


function incele(id)
{
	var url = $('#url').val();
	$.ajax({
		url:url+"popup/duyuru_popup/"+id,
		method:'POST',
		data:{'id':id},
		success:function(res){
			$('.modal-dialog').html(res);
		}
	})
}


function viewUyari(id)
{
	var url = $('#url').val();
	$.ajax({
		url:url+"popup/uyari_popup/"+id,
		method:'POST',
		data:{'id':id},
		success:function(res){
			$('.modal-dialog').html(res);
		}
	})
}


function addBookmark(id){
	var url = $('#url').val();
	$.ajax({
		url:url+"pages/ilan_takip",
		method:'POST',
		data:{'id':id},
		success:function(){
			$('#addBook').css({'background':'#dc3545','color':'#fff'});
			$('#addBook').text('Favorilerden çıkart');
			
			setTimeout(function(){
				$('.showSuccess').css({'transform': 'translateY(0%)'});
			},1500);

			setTimeout(function(){
				location.reload();

			},3500);

		}
	})
}

function removeBookmark(id){
	var url = $('#url').val();
	$.ajax({
		url:url+"pages/ilan_takip_birak",
		method:'POST',
		data:{'id':id},
		success:function(){
			$('#removeBook').css({'background':'#fff','color':'#dc3545'});
			$('#removeBook').text('Favorilerden çıkartılıyor...');
			
			setTimeout(function(){
				$('.showSuccess').css({'transform': 'translateY(0%)'});
				$('#alertText span').text('ilan favori listenizden başarıyla çıkartıldı');
			},1500);

			setTimeout(function(){
				location.reload();

			},3500);

		}
	})
}


function ilanbirak(ilanID){
	var url = $('#url').val();
	$.ajax({
		url:url+"pages/show_delete_follow",
		method:'POST',
		data:{'ilanID':ilanID},
		success:function(res){
			$('.modalcontent').html(res);
		}
	})
}
// messages/chat

$(function(){
	$('#msettings').click(function(){
		$('.messages-settings').slideToggle();
	});

	$('#note').focusin(function(){
		$('.messages-settings').css({'display':'none'});
	})
})