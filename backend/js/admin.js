


$(function(){
$( "#selectAble input[type=checkbox]" ).prop('disabled',true);

	$( "#selectAble input[type=checkbox]" ).click(function(){
		var tValue = $(this).val();
		var title = $(this).data('title');
		
		$(this).addClass('disabled');
		$('.dongu').append('<input type="hidden" id="extraInput" name="cat_name[]" value="'+title+'">');

		
	});





	$('#scat').change(function(){
		$('#btnAddCategory').fadeIn();
		$('#reset').fadeIn();
		$( "#selectAble input[type=checkbox]" ).prop('disabled',false);
	})

	$('#reset').click(function(){
		location.reload();
	})

	// $(document).on('click', '#reset', function () {
 //        $(this).closest('#extraInput').remove();
 //    });




$('.content').css('padding-top','15px');

$('#fileupload').on('change',function(){
	var fileText = $(this).val().match(/[\/\\]([\w\d\s\.\-\(\)]+)$/)[1];
	$('#file_text').html(fileText);
})



$('.uploadLogo').click(function(){
	$('#uploadLogo').click();
})

$('#uploadLogo').on('change',function(){
	var fileText = $(this).val().match(/[\/\\]([\w\d\s\.\-\(\)]+)$/)[1];
	$('#imageResult').html(fileText);
	$('#fade').fadeIn(300);
})




$('#formLogo').on('submit',function(e){
	e.preventDefault();
	var url = $('#url').val();
	$.ajax({
		url:url+"admin/uploadLogo",
		method:'POST',
		data:new FormData(this),
		contentType: false,
	    processData: false,
	    cache: false,
	    beforeSend:function(){
	    	$('.btn-primary').html('<span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span>');
	    },
		success:function(res){
			if(res==1){
				$('#alert-success').fadeIn().delay(3000).fadeOut();
				$('#alert-success center span').text('Seçmiş olduğunuz resim başarıyla yüklendi');
				$('.btn-primary').html('<i data-feather="save" class="iconFeather"></i>Kaydet');
				setTimeout(function(){
					location.reload();
				},3000)
			}else{
				$('#alert-danger center span').html(res)
			}
		}
	})
})






$('#formFacebook').on('submit',function(e){
	e.preventDefault();
	var url = $('#url').val();
	$.ajax({
		url:url+'admin/addFacebook',
		method:'POST',
		data:$('form').serialize(),
		success:function(res){
			if(res==1){
				location.reload();
			}
		}
	})
})
$('#refreshFacebook').on('submit',function(e){
	e.preventDefault();
	var url = $('#url').val();
	$.ajax({
		url:url+'admin/refreshFacebook',
		method:'POST',
		data:$('form').serialize(),
		success:function(res){
			if(res==1){
				location.reload();
			}
		}
	})
});

$('#formInstagram').on('submit',function(e){
	e.preventDefault();
	var url = $('#url').val();
	$.ajax({
		url:url+'admin/addInstagram',
		method:'POST',
		data:$('form').serialize(),
		success:function(res){
			if(res==1){
				location.reload();
			}
		}
	})
});

$('#refreshInstagram').on('submit',function(e){
	e.preventDefault();
	var url = $('#url').val();
	$.ajax({
		url:url+'admin/refreshInstagram',
		method:'POST',
		data:$('form').serialize(),
		success:function(res){
			if(res==1){
				location.reload();
			}
		}
	})
});







$('#formTwitter').on('submit',function(e){
	e.preventDefault();
	var url = $('#url').val();
	$.ajax({
		url:url+'admin/addTwitter',
		method:'POST',
		data:$('form').serialize(),
		success:function(res){
			if(res==1){
				location.reload();
			}
		}
	})
});


$('#refreshTwitter').on('submit',function(e){
	e.preventDefault();
	var url = $('#url').val();
	$.ajax({
		url:url+'admin/refreshTwitter',
		method:'POST',
		data:$('form').serialize(),
		success:function(res){
			if(res==1){
				location.reload();
			}
		}
	})
});


$('#formTiktok').on('submit',function(e){
	e.preventDefault();
	var url = $('#url').val();
	$.ajax({
		url:url+'admin/addTiktok',
		method:'POST',
		data:$('form').serialize(),
		success:function(res){
			if(res==1){
				location.reload();
			}
		}
	})
});


$('#refreshTiktok').on('submit',function(e){
	e.preventDefault();
	var url = $('#url').val();
	$.ajax({
		url:url+'admin/refreshTiktok',
		method:'POST',
		data:$('form').serialize(),
		success:function(res){
			if(res==1){
				location.reload();
			}
		}
	})
});


$('#formYoutube').on('submit',function(e){
	e.preventDefault();
	var url = $('#url').val();
	$.ajax({
		url:url+'admin/addYoutube',
		method:'POST',
		data:$('form').serialize(),
		success:function(res){
			if(res==1){
				location.reload();
			}
		}
	})
});


$('#refreshYoutube').on('submit',function(e){
	e.preventDefault();
	var url = $('#url').val();
	$.ajax({
		url:url+'admin/refreshYoutube',
		method:'POST',
		data:$('form').serialize(),
		success:function(res){
			if(res==1){
				location.reload();
			}
		}
	})
});



$('#createAdmin').on('submit',function(e){
	e.preventDefault();
	var url = $('#url').val();
	$.ajax({
		url:url+'admin/addAdmin',
		method:'POST',
		data:$('form').serialize(),
		beforeSend:function(){
			$('#createBtn').html('<span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span>');
		},
		success:function(response){
			if(response==1){
				$('#alert-success').fadeIn();
				$('#alert-success span').html('Başarıyla eklendi');
				$('#createBtn').html('<i data-feather="save" class="iconFeather"></i> Ekle');
				setTimeout(function(){
					window.location.href=url+"admin/list"
				},2500);
			}else{
				$('#alert-danger').fadeIn().delay(2000).fadeOut();
				$('#alert-danger span').html(response);
			}
		}
	})
})




$('#button-addon2').click(function(){
	 var html = '';
        html += '<div class="inputNewRow">';
        html += '<div class="input-group">';
        html += '<input type="text" name="terms[]" class="form-control" placeholder="V.I.P Avantajları">';
        html += '<span class="btn btn-danger button-delete" id="button-addon2"><i class="fa fa-trash" style="width:18px;"></i></span>';
        html += '<div class="input-group mb-3">';
        html += '</div>';
        html += '</div>';
		$('#extraTerms').append(html);

});

$(document).on('click', '.button-delete', function () {
        $(this).closest('.inputNewRow').remove();
    });




$('#updateilan-form').on('submit',function(e){
	e.preventDefault();
	var url = $('#url').val();
	var anacategory = $('#maincat').val();
	var altcategory = $('#subcat').val();
	$.ajax({
		url:url+"admin/update_ilan",
		method:'POST',
		data:$('form').serialize(),
		success:function(response){
			if(response==1){
				window.location.href=url+"admin/checkup";
			}else{
				$('.ilan_hata').fadeIn();
				$('.ilan_hata center span').html(response);
				$('html,body').animate({'scrollTop':0});
			}
		}
	})
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
				window.location.href=url+"admin/add_order?step=2";
			}else{
				$('.ilan_hata').fadeIn();
				$('.ilan_hata center span').html(response);
				$('html,body').animate({'scrollTop':0});
			}
		}
	})
});



$('#addKomisyon').on('submit',function(e){
	e.preventDefault();
	var url = $('#url').val();
	$.ajax({
		url:url+"admin/add_ilanKomisyon",
		method:'POST',
		data:$('form').serialize(),
		success:function(response){
			if(response==1){
				$('#alert-success').fadeIn();
				$('#alert-success center').html('Başarıyla eklendi');
				setTimeout(function(){
					location.reload();
				},1500);
			}else{
				
			}
		}
	})
})




$('#addCategory_form').on('submit',function(e){
	e.preventDefault();
	var url = $('#url').val();
	$.ajax({
		url:url+"admin/addCategory",
		method:'POST',
		data:new FormData(this),
		cache:false,
		processData:false,
		contentType:false,
		beforeSend:function(){
			$('#btn_addCat').html('<span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span>');
		},
		success:function(resp){
			if(resp==1){
				$('#alert-success').fadeIn();
				$('#alert-success').html('Başarıyla eklendi');
				setTimeout(function(){
					location.reload();
				},1500)
			}
		}
	})
})


$('#add-altcategory').on('submit',function(e){
	e.preventDefault();
	var url = $('#url').val();
	$.ajax({
		url:url+"admin/addSubcategori",
		method:'POST',
		data:$('form').serialize(),
		beforeSend:function(){
			$('#btnAddCategory').html('<span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span>');
		},
		success:function(resp){
			if(resp==1){
				$('.altSuccess').fadeIn();
				$('.altSuccess').html('Başarıyla eklendi');
				setTimeout(function(){
					location.reload();
				},1500)
			}
		}
	})
})



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

})








                            
                            
                          




});


function editBlog(bdID){
	var url = $('#url').val();
	$.ajax({
		url:url+'admin/editBlogPage/'+bdID,
		mothod:'POST',
		data:{'bdID':bdID},
		success:function(res){
			$('.modal-body').html(res);
		}
	})
}


function dlt_blog(dlt_id){
	var url = $('#url').val();
	Swal.fire({
		  title: 'Silmek istiyormusunuz?',
		  icon: 'warning',
		  showCancelButton: true,
		  confirmButtonColor: '#3085d6',
		  cancelButtonColor: '#d33',
		  confirmButtonText: 'Evet!',
		  cancelButtonText: 'Hayır!'
		}).then((result) => {
		  if (result.isConfirmed) {
		    $.ajax({
				url:url+'admin/delete_blog/'+dlt_id,
				mothod:'POST',
				data:{'dlt_id':dlt_id},
				success:function(res){
					location.reload();
				}
			});
		  }
		})
	
}



function dlt_md(md_id){
	var url = $('#url').val();
	Swal.fire({
		  title: 'Silmek istiyormusunuz?',
		  icon: 'warning',
		  showCancelButton: true,
		  confirmButtonColor: '#3085d6',
		  cancelButtonColor: '#d33',
		  confirmButtonText: 'Evet!',
		  cancelButtonText: 'Hayır!'
		}).then((result) => {
		  if (result.isConfirmed) {
		    $.ajax({
				url:url+'admin/delete_moderator/'+md_id,
				mothod:'POST',
				data:{'md_id':md_id},
				success:function(res){
					location.reload();
				}
			});
		  }
		})
	
}


function edit_md(mdID){
	var url = $('#url').val();
	$.ajax({
		url:url+'admin/editModerator/'+mdID,
		mothod:'POST',
		data:{'mdID':mdID},
		success:function(res){
			$('.modal-body').html(res);
		}
	})
}


function edit_vip(vipID){
	var url = $('#url').val();
	$.ajax({
		url:url+'uyeler/edit_vipUye/'+vipID,
		mothod:'POST',
		data:{'vipID':vipID},
		success:function(res){
			$('.modal-body').html(res);
		}
	})
}


$('#formRegister').on('submit', function(e){
	e.preventDefault();
	var url = $('#url').val();
	$.ajax({
		url:url+'pages/create_account',
		method:"POST",
		data:$('form').serialize(),
		beforeSend:function(){
			$('.btn-primary span').html('<span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span>');
		},
		success:function(response){
			if(response==1){
				window.location.href=url+"admin/userList";
			}else{
				$('#alert-danger').fadeIn().delay(2000).fadeOut();
				$('#alert-danger').html(response);
				$('.btn-primary span').html('KAYIT ET');
			}
		}
	})
});


$('#formRegisterVip').on('submit', function(e){
	e.preventDefault();
	var url = $('#url').val();
	$.ajax({
		url:url+'uyeler/create_vip_account',
		method:"POST",
		data:$('form').serialize(),
		beforeSend:function(){
			$('.btn-primary span').html('<span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span>');
		},
		success:function(response){
			if(response==1){
				window.location.href=url+"admin/vipList";
			}else{
				$('#alert-danger').fadeIn().delay(2000).fadeOut();
				$('#alert-danger').html(response);
				$('.btn-primary span').html('KAYIT ET');
			}
		}
	})
});


function ilanDetay(ilanID)
{
	var url = $('#url').val();
	$.ajax({
		url:url+"popup/inceleDetay",
		method:'POST',
		data:{'ilanID':ilanID},
		success:function(resp){
			$('.modal-body').html(resp);
		}
	})
}


function dltCategory(dltID){
	var url = $('#url').val();
	Swal.fire({
		  title: 'Silmek istiyormusunuz?',
		  icon: 'warning',
		  showCancelButton: true,
		  confirmButtonColor: '#3085d6',
		  cancelButtonColor: '#d33',
		  confirmButtonText: 'Evet!',
		  cancelButtonText: 'Hayır!'
		}).then((result) => {
		  if (result.isConfirmed) {
		    $.ajax({
				url:url+'admin/deleteCategory/'+dltID,
				mothod:'POST',
				data:{'dltID':dltID},
				success:function(res){
					location.reload();
				}
			});
		  }
		})
	
}


function dltAltCategory(dltID){
	var url = $('#url').val();
	Swal.fire({
		  title: 'Silmek istiyormusunuz?',
		  icon: 'warning',
		  showCancelButton: true,
		  confirmButtonColor: '#3085d6',
		  cancelButtonColor: '#d33',
		  confirmButtonText: 'Evet!',
		  cancelButtonText: 'Hayır!'
		}).then((result) => {
		  if (result.isConfirmed) {
		    $.ajax({
				url:url+'admin/deleteAltCategory/'+dltID,
				mothod:'POST',
				data:{'dltID':dltID},
				success:function(res){
					location.reload();
				}
			});
		  }
		})
	
}





function updateCategory(upID){
	var url = $('#url').val();
	$.ajax({
		url:url+'popup/view_anacategory/'+upID,
		mothod:'POST',
		data:{'upID':upID},
		success:function(res){
			$('.modal-body').html(res);
		}
	});
	
}


function updateAltCategory(altID){
	var url = $('#url').val();
	$.ajax({
		url:url+'popup/view_altcategory/'+altID,
		mothod:'POST',
		data:{'altID':altID},
		success:function(res){
			$('.modal-body').html(res);
		}
	});
	
}