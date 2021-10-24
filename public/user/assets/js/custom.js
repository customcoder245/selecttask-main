function myFunction() {
    var element = document.getElementById("body");
    element.classList.toggle("openLeftNav");
  }

  function myFilters() {
    var element = document.getElementById("body");
    element.classList.toggle("openFilter");
  }

  function businessHours() {
    var element = document.getElementById("businessHours");
    element.classList.toggle("openbusinessHours");
  }

  function searchChatWidget() {
    var element = document.getElementById("searchChatWidget");
    element.classList.toggle("searchChatWidget");
  }

  $(window).scroll(function(){
    if ($(this).scrollTop() > 50) {
       $('#body').addClass('bodyScroll');
    } else {
       $('#body').removeClass('bodyScroll');
    }
});

 $(window).on('load', function () {
  
  $("body").fadeIn(500);
 
});

/*********************  update  generate  *************/
var j=1;
var cuurrent_tab=$(".progressSignup").data('current_tab');
if(cuurrent_tab != ''){
$(".rightPanel").hide();
$(".progressSignup li").removeClass("active");
$(".progressSignup li").each(function(){
	var tab_name=$(this).data('action');
	
	if(cuurrent_tab==tab_name){
		$(this).prevAll().addClass("completed");
		$(this).addClass("active");
		var current_arra=$(this).data("tab");
		$("."+current_arra).addClass('current_areaa');
		$("."+current_arra).show();
		$("."+current_arra).prev().prev().addClass('add_prev_class');
		//$(".add_prev_class").find('form').find('.tab_btn_submit').trigger('click');
	}
})

var lk=$(".progressSignup li.completed").length;
++lk;
j=lk;


}
var content = $('.progessWarSignup').find(".SignUp-step-5");
content.height(j*58);


$(function() {
$(".business_start_date").datepicker({
	format: 'dd/mm/yyyy ',
    autoclose: true,
	 endDate: '+0d'
    
 });
   });
   
   

$("#license_exp_date").datepicker({autoclose: true});
$("#license_exp_date_edit").datepicker({autoclose: true}); 
$("#completion_date").datepicker({autoclose: true}); 

$(".skipLink").click(function(){
	var tab_name=$(this).parent().data("tab");
	$("."+tab_name).find("form").find(".tab_btn_submit").trigger("click");
});
 
 
/************ transaction page filter **********************/

$('.date_picker_hotel_from').datepicker({
 //setDate: new Date(),
  format: 'dd/mm/yyyy',
  todayHighlight: true,
  autoclose: true,
 // startDate: '-0m',
  minDate: 0,
  onSelect: function(text, dt) {
    $('#end').datepicker('option', 'minDate', text);
  }
});

$('.date_picker_hotel_to').datepicker({
  //setDate: new Date(),
  format: 'dd/mm/yyyy',
  todayHighlight: true,
  autoclose: true,
  startDate: $('#start').val(),
  minDate: 0,

});

/**********************************/
 
 
 


function tab_btn_submit($this){
	var k=$(".progressSignup li.completed").length;
	console.log(k);
	++k;
	var j=k;
	

	var next_tab=$this.data('next');
	var current_tab=$this.data('current');
	 ++j;
    console.log(current_tab);	 
	 
	var content = $('.progessWarSignup').find(".SignUp-step-5");
	 content.height(j*58);
	$("."+current_tab+'_li').removeClass("active");
	$("."+current_tab+'_li').addClass("completed");
	$("."+next_tab+'_li').addClass("active");
	$(".rightPanel").hide();
	$("."+next_tab).show();
	

}
function previewFile(input){
        var file = $(".image_upload").get(0).files[0];
 
        if(file){
            var reader = new FileReader();
 
            reader.onload = function(){
                $(".profileImageWrap img").attr("src", reader.result);
            }
 
            reader.readAsDataURL(file);
        }
    }
	
$(".delete_address").click(function(e){
	e.preventDefault();
	var hrrr=$(this).attr("href");
	$(".popupBTns").find(".btn-danger").attr("href",hrrr);
	
});
	
	
$(document).ready(function () {
    $("#date1").datepicker({
        dateFormat: "dd-M-yy",
        minDate: 0,
        onSelect: function () {
            var dt2 = $('#date2');
            var startDate = $(this).datepicker('getDate');
            //add 30 days to selected date
            startDate.setDate(startDate.getDate() + 30);
            var minDate = $(this).datepicker('getDate');
            var dt2Date = dt2.datepicker('getDate');
            //difference in days. 86400 seconds in day, 1000 ms in second
            var dateDiff = (dt2Date - minDate)/(86400 * 1000);

            //dt2 not set or dt1 date is greater than dt2 date
            if (dt2Date == null || dateDiff < 0) {
                    dt2.datepicker('setDate', minDate);
            }
            //dt1 date is 30 days under dt2 date
            else if (dateDiff > 30){
                    dt2.datepicker('setDate', startDate);
            }
            //sets dt2 maxDate to the last day of 30 days window
            dt2.datepicker('option', 'maxDate', startDate);
            //first day which can be selected in dt2 is selected date in dt1
            dt2.datepicker('option', 'minDate', minDate);
        }
    });
    $('#date2').datepicker({
        dateFormat: "dd-M-yy",
        minDate: 0
    });
});
	
	
	 $(function () {

        $('.input-images-1').imageUploader();

        let preloaded = [
            {id: 1, src: 'https://picsum.photos/500/500?random=1'},
            {id: 2, src: 'https://picsum.photos/500/500?random=2'},
            {id: 3, src: 'https://picsum.photos/500/500?random=3'},
            {id: 4, src: 'https://picsum.photos/500/500?random=4'},
            {id: 5, src: 'https://picsum.photos/500/500?random=5'},
            {id: 6, src: 'https://picsum.photos/500/500?random=6'},
        ];

        $('.input-images-2').imageUploader({
            preloaded: preloaded,
            imagesInputName: 'photos',
            preloadedInputName: 'old'
        });

        $('.form').on('submit', function (event) {

            // Stop propagation
            //event.preventDefault();
            event.stopPropagation();

            // Get some vars
            let $form = $(this),
                $modal = $('.modal');

            // Set name and description
            $modal.find('#display-name span').text($form.find('input[id^="name"]').val());
            $modal.find('#display-description span').text($form.find('input[id^="description"]').val());

            // Get the input file
            let $inputImages = $form.find('input[name^="images"]');
            if (!$inputImages.length) {
                $inputImages = $form.find('input[name^="photos"]')
            }

            // Get the new files names
            let $fileNames = $('<ul>');
            for (let file of $inputImages.prop('files')) {
                $('<li>', {text: file.name}).appendTo($fileNames);
            }

            // Set the new files names
            $modal.find('#display-new-images').html($fileNames.html());

            // Get the preloaded inputs
            let $inputPreloaded = $form.find('input[name^="old"]');
            if ($inputPreloaded.length) {

                // Get the ids
                let $preloadedIds = $('<ul>');
                for (let iP of $inputPreloaded) {
                    $('<li>', {text: '#' + iP.value}).appendTo($preloadedIds);
                }

                // Show the preloadede info and set the list of ids
                $modal.find('#display-preloaded-images').show().html($preloadedIds.html());

            } else {

                // Hide the preloaded info
                $modal.find('#display-preloaded-images').hide();

            }

            // Show the modal
            $modal.css('visibility', 'visible');
        });

        // Input and label handler
        $('input').on('focus', function () {
            $(this).parent().find('label').addClass('active')
        }).on('blur', function () {
            if ($(this).val() == '') {
                $(this).parent().find('label').removeClass('active');
            }
        });

        // Sticky menu
        let $nav = $(".header").find('nav'),
            $header = $('header'),
            offset = 4 * parseFloat($('body').css('font-size')),
            scrollTop = $(this).scrollTop();

        // Initial verification
        setNav();

        // Bind scroll
        $(window).on('scroll', function () {
            scrollTop = $(this).scrollTop();
            // Update nav
            setNav();
        });

        function setNav() {
            if (scrollTop > $header.outerHeight()) {
                $nav.css({position: 'fixed', 'top': offset});
            } else {
                $nav.css({position: '', 'top': ''});
            }
        }
    });

/************* post task function ************/
$(".post_task_submit").prop("disabled",true);
$(".customCheckbox").find("label").click(function(){
if($('#confirm_input').is(":checked")){
	$(".post_task_submit").prop("disabled",false);
}else{
	$(".post_task_submit").prop("disabled",true);
}	
})
$(".customCheckbox").find("input").click(function(){
if($('#confirm_input').is(":checked")){
	$(".post_task_submit").prop("disabled",false);
}else{
	$(".post_task_submit").prop("disabled",true);
}	
})



/*********************************************/

function load_services_location(){
	var arr_loc=[];
	if($(".location_array").val() !=''){
	arr_loc=$(".location_array").val();
	}
	$("form.addLocation").find(".squareRadio").find(".locationradio1").each(function(){
		var ids=$(this).data('id');
		if(arr_loc.indexOf(ids) != '-1'){
		$(this).prop('checked', true);
		}
	});
	
	/***********  load services ****************/
	
	var arr=[];
	if($(".services_array").val() !=''){
	arr=$(".services_array").val();
	}

	$("form.addServicesForm").find(".squareRadio").find(".servicesRadio1").each(function(){
		var ids=$(this).data('id');
		if(arr.indexOf(ids) != '-1'){
		$(this).prop('checked', true);
		}
	});
}

$(".addLocationModal").click(function(){
	var arr=[];
	if($(".location_array").val() !=''){
	arr=$(".location_array").val();
	}
	console.log(arr);
	$("form.addLocation").find(".squareRadio").find(".locationradio1").each(function(){
		
		
		var ids=$(this).data('id');
		
		
		if(arr.indexOf(ids) != '-1'){
		$(this).prop('checked', true);
		}
		var n=$.inArray(ids, arr);
		
		  if ($.inArray(ids, arr) > -1){
			  console.log("yes");
		  }
		if(n== true){
			
			$(this).find(".locationradio1").attr('disabled',true);
		}
		//$(this).find(".servicesRadio1").prop('checked', false);
	});
	//$("#servicesRadioAll").prop('checked', false);
});

$("#locationRadioAll").click(function(){
	if($(this).is(":checked")){
	$("form.addLocation").find(".squareRadio").find(".col-md-6").each(function(){
		$(this).find(".locationradio1").prop('checked', true);
	});
	}else{
		$("form.addLocation").find(".squareRadio").find(".col-md-6").each(function(){
		$(this).find(".locationradio1").prop('checked', false);
	});
	}
});


$(".insertlocation").click(function(e){
	e.preventDefault();
	var loc_arr=[];
	$(".location_array_list").html('');
	var loc_len=$(".location_array_list").find(".gridRow").length;
	$("form.addLocation").find(".squareRadio").find(".col-md-6").each(function(){
	  if($(this).find(".locationradio1").is(":checked")){
		  ++loc_len;
			var ids=$(this).find(".locationradio1").data('id');
			var name=$(this).find(".locationradio1").data('name');
			loc_arr.push(ids);
			var html_content='<div class="gridRow gridRowloc'+ids+'" data-id="'+ids+'" data-name="'+name+'"><div class="sNumber serialNumber"><div class="text-center">'+loc_len+'</div></div><div class="servicesColTable "><label class="grayLabel d-block d-md-none">Service</label><p class="mSemiBold">'+name+'</p></div><div class="Action text-right text-md-center w100"> <label class="grayLabel d-block d-md-none">Action</label><a href="#" class="text-primary underlinelink" data-toggle="modal" data-target="#deleteRowModal"><img src="/public/user/assets/images/dustbin.svg" alt=""></a></div> </div>';
		    $(".location_array_list").append(html_content);
	        }
	});
	
	$(".location_array").val(loc_arr);
	$(".addServicesForm").submit();
	delete_location();
	$(".close").trigger('click');
})
delete_location();
var row_id_loc=0;
var loc_ar=[];
function delete_location(){
	
	var ty='location';
  $(".location_array_list").find(".underlinelink").click(function(){
	var modell=$(this).data('target');
	 row_id_loc=$(this).parent().parent().data('id');
	 
	$(modell).attr('data-id',row_id_loc);
	$('#deleteRowModal').find(".btn-danger").attr('data-action',ty);
	$('#deleteRowModal').find(".btn-danger").attr('data-id',row_id_loc);
     });
	 
	 $(".btn-danger").click(function(e){
		
		e.preventDefault();
		 if(ty=="location"){
			 var loc_ar= $(".location_array").val();
			 var removeItem =row_id_loc;
			 if(typeof loc_ar !== 'undefined'){
			 loc_ar = jQuery.grep(loc_ar, function(value) {
			  return value != removeItem;
			    });
			 }
		   
			 
			
		   $(".location_array").val(loc_ar);
		   
		   
			 
	  $(".location_array_list").find(".gridRowloc"+row_id_loc).remove();
	 
	  var loc_arr=[];
	
		 $("form.addLocation").find(".squareRadio").find(".col-md-6").each(function(){
		var ids2=$(this).find(".locationradio1").data('id');
		if(row_id_loc==ids2){
			$(this).find(".locationradio1").prop('checked', false);
		}
		
		
		if($(this).find(".locationradio1").is(":checked")){
			var ids=$(this).find(".locationradio1").data('id');
			loc_arr.push(ids);
		}
		});
      //$(".location_array").val(loc_arr);
	  $(".addServicesForm").submit();
      $(".btn-cancel").trigger("click");
		 }
	})
	 
	 
	 
}


$(function() {
  $("#inlineRadio4,.timePopup").on("click", function(e) {
    $(".openPopup").addClass("wide");
    e.stopPropagation()
  });
  $(document).on("click", function(e) {
    if ($(e.target).is("#inlineRadio4") === false) {
      $(".openPopup").removeClass("wide");
    }
  });
});
/*****************************************************/

$(".add_new_address").click(function(){
	$(".addLocationForm2").find('.form-group').find("select,input").val('');
	$("#business_address_add2").val('');
})



/**********************************************/

function checkValue(value,arr){
  var status = 'Not exist';
 
  for(var i=0; i<arr.length; i++){
    var name = arr[i];
    if(name == value){
      status = 'Exist';
      break;
    }
  }

  return status;
}
/************* add servicess list **************/
$(".addServicesModal").click(function(){
	var arr=[];
	if($(".services_array").val() !=''){
	arr=$(".services_array").val();
	}

	$("form.addServicesForm").find(".squareRadio").find(".servicesRadio1").each(function(){
		var ids=$(this).data('id');
		
		
		if(arr.indexOf(ids) != '-1'){
		$(this).prop('checked', true);
		}
		
		var n=$.inArray(ids, arr);
		
		  if ($.inArray(ids, arr) > -1){
			  console.log("yes");
		  }
		if(n== true){
			
			$(this).find(".servicesRadio1").attr('disabled',true);
		}
		//$(this).find(".servicesRadio1").prop('checked', false);
	});
	//$("#servicesRadioAll").prop('checked', false);
});

/*********  add all servicess  ***********/
$("#servicesRadioAll").click(function(){
	if($(this).is(":checked")){
	$("form.addServicesForm").find(".squareRadio").find(".col-md-6").each(function(){
		$(this).find(".servicesRadio1").prop('checked', true);
	});
	}else{
		$("form.addServicesForm").find(".squareRadio").find(".col-md-6").each(function(){
		$(this).find(".servicesRadio1").prop('checked', false);
	});
	}
});

$(".insertservices").click(function(e){
	e.preventDefault();
	var arr=[];
	if($(".services_array").val() !=''){
	//arr.push($(".services_array").val());
	}
	$(".servicescat_list").html('');
	var ser_len=$(".servicescat_list").find(".gridRow").length;
	
	$("form.addServicesForm").find(".squareRadio").find(".col-md-6").each(function(){
		
		if($(this).find(".servicesRadio1").is(":checked")){
			++ser_len;
			var ids=$(this).find(".servicesRadio1").data('id');
			var name=$(this).find(".servicesRadio1").data('name');
			arr.push(ids);
			var html_content='<div class="gridRow gridRow'+ids+'" data-id="'+ids+'" data-name="'+name+'"><div class="sNumber serialNumber"><div class="text-center">'+ser_len+'</div></div><div class="servicesColTable "><label class="grayLabel d-block d-md-none">Service</label><p class="mSemiBold">'+name+'</p></div><div class="Action text-right text-md-center w100"> <label class="grayLabel d-block d-md-none">Action</label><a href="#" class="text-primary underlinelink" data-toggle="modal" data-target="#deleteRowModal"><img src="/public/user/assets/images/dustbin.svg" alt=""></a></div> </div>';
		    $(".servicescat_list").append(html_content);
		}
		});
		
	$(".services_array").val(arr);
     $(".addServicesForm").submit();
	
	 delete_services();
	$(".close").trigger('click');
});
delete_services();
function delete_services(){
	var row_id=0;
	var st='services';
  $(".servicescat_list").find(".underlinelink").click(function(){
	var modell=$(this).data('target');
	 row_id=$(this).parent().parent().data('id');
	$(modell).attr('data-id',row_id);
	$('#deleteRowModal').find(".btn-danger").attr('data-id',row_id);
    $('#deleteRowModal').find(".btn-danger").attr('data-action',st);
	
	
  
	});
   $(".btn-danger").click(function(e){
	   e.preventDefault();
	   if(st=="services"){
		   var ser_arr=$(".services_array").val();
		 var removeItem =row_id;
		 
		  if(typeof ser_arr !== 'undefined'){
		   ser_arr = jQuery.grep(ser_arr, function(value) {
			  return value != removeItem;
			});
			
		  }
		   $(".services_array").val(ser_arr);
	  $(".servicescat_list").find(".gridRow"+row_id).remove();
	  var arr=[];
		
		 $("form.addServicesForm").find(".squareRadio").find(".col-md-6").each(function(){
		var ids2=$(this).find(".servicesRadio1").data('id');
		
		if(row_id==ids2){
			$(this).find(".servicesRadio1").prop('checked', false);
		}
		if($(this).find(".servicesRadio1").is(":checked")){
			var ids=$(this).find(".servicesRadio1").data('id');
			arr.push(ids);
		}
		});
		
      //$(".services_array").val(arr);
	  $(".addServicesForm").submit();
      $(".btn-cancel").trigger("click");
	   }
	})
}
card_payment_list();
function card_payment_list(){
	var url=$(".payment_card_list").data('url');
	$.ajax({
           type: "GET",
           url: url,
		   dataType: "json",
           
		    beforeSend: function() {
              $(this).find(".btn-green").prop('disabled', true);
                 },
           success: function(data)
           {
			   $(".payment_card_list").html(data.html);
			   if(data.status=="nodata"){
				   $(".no_data").show();
			   }else{
				   $(".no_data").hide();
			   }
			   
			    
			 },error: function (e) {
				
			  
			   
              }
         });
}
function edit_save_card(){
$(".payment_card_list").find(".edit_save_card").click(function(){
			
			var ids=$(this).data('id');
			var url=$(this).data('url');
		$.ajax({
			   type: "GET",
			   url: url,
			   dataType: "json",
			   data: {'id':ids},
				beforeSend: function() {
				  $(this).find(".btn-green").prop('disabled', true);
					 },
				   success: function(data)
				   {
					   console.log(data.id);
					  
					   var card_details2='XXXX XXXX XXXX  '+data.card_no;
					  $("#edit_id").val(data.id);
					  $("#edit_addess").val(data.address);
					  $("#edit_city").val(data.city);
					  $("#edit_state").val(data.state);
					  $("#edit_zip").val(data.postal_code);
					  $("#edit_card_number").prop("readonly", true);
					  $("#edit_card_number").val(card_details2);
					  $("#edit_exp").val(data.exp);
					  $("#edit_cvc").val(data.cvc);
					  $("#card_holder_name").val(data.card_hold_name);
					  
					 },error: function (e) {
						
					  }
			 });
		});
		var jk=1;
	$(".delete_payment_card").click(function(e){
		
		var model=$(this).data('target');
		var del_url=$(this).data('url');
		$(model).addClass("delete_"+jk);
		$(model).find('.btn-danger').attr('href',del_url);
		++jk;
	})	
	$(".btn-danger").click(function(e){
		e.preventDefault();
		var url=$(this).attr('href');
		$.ajax({
			   type: "GET",
			   url: url,
			  success: function(data)
				   {
					card_payment_list(); 
					//$("#deleteRowModal").modal("toggle");
					  $(".btn-cancel").trigger("click");
					 },error: function (e) {
						
					  }
			 });
	})	
	
	$(".payment_default").click(function(){
		var url=$(this).parent().find('input').data('ur');
		var id=$(this).parent().find('input').data('id');
		if($(this).is(":checked")){
			var def=1;
		}else{
			var def=0;
		}
		console.log(url);
		console.log(id);
		$.ajax({
			   type: "GET",
			   url: url,
			   data: {id:id},
			  success: function(data)
				   {
					card_payment_list(); 
					//$("#deleteRowModal").modal("toggle");
					  $(".btn-cancel").trigger("click");
					 },error: function (e) {
						
					  }
			 }); 
		
		
	})
	
}


		 $(document).ready(function () {
						$('#business_contact').usPhoneFormat({
							format: '(xxx) xxx-xxxx',
						});
						
						
		 });


			function cc_format(value) {
			  var v = value.replace(/\s+/g, '').replace(/[^0-9]/gi, '')
			  var matches = v.match(/\d{4,16}/g);
			  var match = matches && matches[0] || ''
			  var parts = []
			  for (i=0, len=match.length; i<len; i+=4) {
				parts.push(match.substring(i, i+4))
			  }
			  if (parts.length) {
				return parts.join(' ')
			  } else {
				return value
			  }
			}

			onload = function() {
			  $('.card_number').oninput = function() {
				  
				this.value = cc_format(this.value)
			  }
			}

		$('.card_number').keyup(function() {
			  var foo = $(this).val().split(" ").join(""); // remove hyphens
			  if (foo.length > 0) {
				foo = foo.match(new RegExp('.{1,4}', 'g')).join(" ");
			  }
			  $(this).val(foo);
		});

		$('.card_exp').keyup(function() {
			  var foo = $(this).val().split("/").join(""); // remove hyphens
			  if (foo.length > 0) {
				foo = foo.match(new RegExp('.{1,2}', 'g')).join("/");
			  }
			  $(this).val(foo);
		});
			$('.card_exp').focusout(function(){
				var data=$(this).val();
				var daym=data.split('/');
				console.log(daym);
				month=daym[0];
				year=daym[1];
				source_date = new Date(year,month);
				message='';
				if(year != source_date.getFullYear())
			{
			console.log( 'test');
			}
			})
	
function sp_previewFile(input){
        var file = $(".profile_image").get(0).files[0];
 
        if(file){
            var reader = new FileReader();
 
            reader.onload = function(){
                $(".profile_image_src").attr("src", reader.result);
            }
 
            reader.readAsDataURL(file);
        }
    }

function sp_cover_previewFile(input){
        var file = $(".cover_image").get(0).files[0];
 
        if(file){
            var reader = new FileReader();
 
            reader.onload = function(){
                
				$(".cover_image_src").css('background-image', 'url(' + reader.result + ')');
				$(".cover_image_src").addClass("has_cover_image_src");
            }
 
            reader.readAsDataURL(file);
        }
    }	
function license_imagee(input){
        var file = $(".license_image").get(0).files[0];
 
        if(file){
            var reader = new FileReader();
 
            reader.onload = function(){
                
				$(".license_imagee").css('background-image', 'url(' + reader.result + ')');
				$(".license_imagee").css('width','200px');
				$(".license_imagee").css('height','120px');
				$(".license_imagee").css('margin-right','2%');
            }
 
            reader.readAsDataURL(file);
        }
    }
	
function license_imagee_edit(input){
        var file = $(".editLicenseForm").find(".license_image").get(0).files[0];
 
        if(file){
            var reader = new FileReader();
 
            reader.onload = function(){
                
				$(".editLicenseForm").find(".license_imagee").css('background-image', 'url(' + reader.result + ')');
				$(".editLicenseForm").find(".license_imagee").css('width','200px');
				$(".editLicenseForm").find(".license_imagee").css('height','120px');
				$(".editLicenseForm").find(".license_imagee").css('margin-right','2%');
            }
 
            reader.readAsDataURL(file);
        }
    }	

/************************************    Business License info  ****************/
business_license_list();
function business_license_list(){
	var url=$(".business_license_list").data('url');
	$.ajax({
           type: "GET",
           url: url,
		   dataType: "json",
           
		    beforeSend: function() {
             
                 },
           success: function(data)
           {
			   
			   $(".business_license_list").html(data.html);
			  
			    
			 },error: function (e) {
				
			  
			   
              }
         });
}
/************************* edit license *********************/
function edit_business_license(){
 $(".editLicenceModal").click(function(){
	    var Form=$(".editLicenseForm"); 
		var ids=$(this).data('id');
		var url=$(this).data('url');
		$.ajax({
			   type: "GET",
			   url: url,
			   dataType: "json",
			   data: {'id':ids},
				beforeSend: function() {
				  //$(this).find(".btn-green").prop('disabled', true);
					 },
				   success: function(data)
				   {
					 Form.find(".bl_id").val(data.html.id);
					 Form.find("#license_title").val(data.html.license_title);
					 Form.find("#license_number").val(data.html.license_number);
					 Form.find("#issued_by").val(data.html.issued_by);
					 Form.find("#license_exp_date_edit").val(data.html.license_exp_date);
					 Form.find("#license_description").val(data.html.license_description);
					 Form.find("#license_description").val(data.html.license_description);
					 Form.find(".license_imagee").css('background-image', 'url(' + data.image_url+''+data.html.license_image + ')');
					 Form.find(".license_imagee").css('width','200px');
				     Form.find(".license_imagee").css('height','120px');
				     Form.find(".license_imagee").css('margin-right','2%');
					  
					 },error: function (e) {
						
					  }
			 });
 })
 
 	var jk=1;
	$(".delete_business_license").click(function(e){
		
		var model=$(this).data('target');
		var del_url=$(this).data('url');
		$(model).addClass("delete_"+jk);
		$(model).find('.btn-danger').attr('href',del_url);
		++jk;
	})	
	$(".btn-danger").click(function(e){
		e.preventDefault();
		var url=$(this).attr('href');
		$.ajax({
			   type: "GET",
			   url: url,
			  success: function(data)
				   {
					business_license_list(); 
					//$("#deleteRowModal").modal("toggle");
					  $(".btn-cancel").trigger("click");
					 },error: function (e) {
						
					  }
			 });
	})
 

}

/**********************  add portfolio **********************/

$(".portfolio_image").change(function(){
	 var file = $(this).get(0).files[0];
     
        if(file){
            var reader = new FileReader();
 
            reader.onload = function(){
				console.log(reader.result);
                $(".portfolio_image_src").find("img").attr("src", reader.result);
            }
 
            reader.readAsDataURL(file);
        }
})
/******************************  get portfolio list *************************/

portfolio_list();
function portfolio_list(){
	var url=$(".portfolio_list").data('url');
	$.ajax({
           type: "GET",
           url: url,
		   dataType: "json",
           
		    beforeSend: function() {
             
                 },
           success: function(data)
           {
			   console.log(data.status);
			   
			   
			   $(".portfolio_list").html(data.html);
			   if(data.status=="nodata"){
				   $(".no_data").show();
			   }else{
				   $(".no_data").hide();
			   }
			    
			 },error: function (e) {
				
			  
			   
              }
         });
}   

function edit_portfolio_fun(){
	$(".portfolio_edit_link").click(function(){
		$(".input-images-6").find(".image-uploader").remove();
		var Form=$(".editPortfolioForm"); 
		var ids=$(this).data('id');
		var url=$(this).data('url');
		$.ajax({
			   type: "GET",
			   url: url,
			   dataType: "json",
			   data: {'id':ids},
				beforeSend: function() {
				  //$(this).find(".btn-green").prop('disabled', true);
					 },
				   success: function(data)
				   {
					 Form.find(".p_id").val(data.html.id);
					 Form.find(".portfolio_title").val(data.html.portfolio_title);
					 Form.find(".p_location").val(data.html.location);
					 Form.find(".p_cost").val(data.html.cost);
					 Form.find(".p_completion_date").val(data.html.completion_date);
					 Form.find(".p_description").val(data.html.description);
					 let preloaded=[];
					 
					 var j=1;
					 var img=data.image_list;
					 
					 var base_url=$("body").data("url");
					var j=1; 
					$(".input-images-2").find(".uploaded").html('');
					 $.each(img, function(key, value) {
						  preloaded.push({id:data.image_path+key,src:data.image_path+key});
						 var htmll='<div class="Added-imageCol relative"><img src="'+data.image_path+key+'" alt=""><a href="#" class="deletePic centereditem"><img src="'+base_url+'/public/user/assets/images/cross.svg" alt=""></a></div>';
						 $(".portfolio_image_list").append(htmll)
						 ++j;
						 }); 
						 delete_image();
						 $('.input-images-6').imageUploader({
            preloaded: preloaded,
            imagesInputName: 'photos',
            preloadedInputName: 'old'
        });
					Form.find(".portfolio_image_edit_src").find("img").attr('src',  data.image_path+''+data.html.portfolio_image );
					 
					  
					 },error: function (e) {
						
					  }
			 });
	})
	
	
	
	var jk=1;
	$(".delete_portfolio").click(function(e){
		
		var model=$(this).data('target');
		var del_url=$(this).data('url');
		$(model).addClass("delete_"+jk);
		$(model).find('.btn-danger').attr('data-url',del_url);
		++jk;
	})	
	$(".btn-danger").click(function(e){
		e.preventDefault();
		var url=$(this).data('url');
		$.ajax({
			   type: "GET",
			   url: url,
			  success: function(data)
				   {
					portfolio_list();
					//$("#deleteRowModal").modal("toggle");
					  $(".btn-cancel").trigger("click");
					 },error: function (e) {
						
					  }
			 });
	})
	
	$(".view_all_portfolio").click(function(){
		var ids=$(this).data('id');
		var url=$(this).data('url');
		console.log(ids);
		$(".carousel-inner-image").html('');
		$(".carousel-indicators").html('');
		$(".port_title").html('');
		$(".port_date").html('');
		$(".port_loc").html('');
		$(".port_price").html('');
		$(".port_desc").html('');
		$.ajax({
			   type: "GET",
			   url: url,
			   dataType: "json",
			   data: {'id':ids},
				beforeSend: function() {
				  //$(this).find(".btn-green").prop('disabled', true);
					 },
				   success: function(data)
				   {
					 $(".port_title").html(data.html.title);
					 $(".port_date").html(data.html.completion_date);
					 $(".port_loc").html(data.html.location);
					 $(".port_price").html('$'+data.html.cost);
					 $(".port_desc").html(data.html.description);
					 var img=data.html.images;
					 $(".carousel-inner-image").html('');
					 $(".carousel-indicators").html('');
					 for ( var i = 0, l = img.length; i < l; i++ ) {
						 var cls='';
						 if(i==0){
							cls='active'; 
						 }
						 var html_first='<div class="carousel-item '+cls+'"><img src="'+img[i]+'" alt=""></div>';
						 var html_second="<li data-target='#carousel-custom' data-slide-to='"+i+"' class='active'><img src='"+img[i]+"' alt='' /></li>";
						 $(".carousel-inner-image").append(html_first);
						 $(".carousel-indicators").append(html_second);
					 }
					 
					 
					  
					 },error: function (e) {
						
					  }
			 });
		
	});
	
	
	
}

function delete_image(){
		$(".Added-imageCol").find(".deletePic").click(function(e){
			e.preventDefault();
			$(this).parent().remove();
		})
	}

$(document).ready(function() {
  $("#license_description").on('keyup', function() {
    var words = 0;

    if ((this.value.match(/\S+/g)) != null) {
      words = this.value.match(/\S+/g).length;
    }

    if (words > 200) {
      // Split the string on first 200 words and rejoin on spaces
      var trimmed = $(this).val().split(/\s+/, 200).join(" ");
      // Add a space at the end to make sure more typing creates new words
      $(this).val(trimmed + " ");
    }
    else {
      $('.license_description_count span').text(words);
      $('.license_description_count span').text(200-words);
    }
  });
});

$(document).ready(function() {
  $("#p_description").on('keyup', function() {
    var words = 0;

    if ((this.value.match(/\S+/g)) != null) {
      words = this.value.match(/\S+/g).length;
    }

    if (words > 200) {
      // Split the string on first 200 words and rejoin on spaces
      var trimmed = $(this).val().split(/\s+/, 200).join(" ");
      // Add a space at the end to make sure more typing creates new words
      $(this).val(trimmed + " ");
    }
    else {
      $('.p_description_count span').text(words);
      $('.p_description_count span').text(200-words);
    }
  });
});

$(".add_portfolio").click(function(){
	$(".input-images-1").find(".uploaded").html('');
	$(".input-images-1").find(".image-uploader").removeClass("has-files");
	
})

$(".add_new_lincense").click(function(){
	$(".license_imagee").css('background','none ');
	$(".license_imagee").css('width','0px ');
});

$("#date25").click(function(){
	$(this).parent().find("img").trigger("click");
})

$(".delete_time").click(function(e){
	e.preventDefault();
	$(this).parent().parent().parent().find("select").val('');
})

$(".newLicenceModal").click(function(){
	$(".license_imagee").css('background','none ');
	$(".license_imagee").css('width','0px ');
});

$(".viewlicenseModal").click(function(){
	var inmgg=$(this).attr('src');
	var  htmll='<div class="carousel-item active"><img src="'+inmgg+'"></div>';
	$(".viewlicenseModal_img").html(htmll);
});

$(".viewAllImagespost").click(function(){
	var url=$(this).data("url");
	var ids=$(this).data('id');
	$.ajax({
			   type: "GET",
			   url: url,
			   dataType: "json",
			   data: {'id':ids},
			   success: function(data)
				   {
                    if(data.code==200){
						$("#viewAllImagesModal").find(".carousel-inner").html(data.html);
					}else if(data.code==201){
						$(".rightClosebtn").trigger("click");
					}					  
					  
				   }
   });

});

$(".applynow_popup").click(function(){
	var user_id=$(this).data('user_id');
	var id=$(this).data('id');
	$(".applyJobModal").attr('data-id',id);
	
	$(".applyJobModal").attr('data-user_id',id);
	$(".class_user_id").val(user_id);
	$(".class_id").val(id);
	
})


function  apply_jobs(){
	$(".applynow_popup").click(function(){
	var user_id=$(this).data('user_id');
	var id=$(this).data('id');
	$(".applyJobModal").attr('data-id',id);
	
	$(".applyJobModal").attr('data-user_id',id);
	$(".class_user_id").val(user_id);
	$(".class_id").val(id);
	
})
}
/********************  about profile preview tab page ****************/

$(".aboutTabs2 li a").click(function(e){
	e.preventDefault();
	var tab_name=$(this).data("tab");
	$(".tab_area").hide();
	$("."+tab_name).show();
	$(".aboutTabs2 li").removeClass("active");
	$(this).parent().addClass("active");
	
});

$(".complete_task_button").click(function(){
	var user_idd=$(this).data("user_id");
	var task_ids=$(this).data('id');
	$("#markCompletedModal").find(".com_user_id").val(user_idd);
	$("#markCompletedModal").find(".com_task_id").val(task_ids);
	
});

/******************************   rating star *********************/

jQuery(document).ready(function () {
            $("#input-21f").rating({
                starCaptions: function (val) {
                    if (val < 3) {
                        return val;
                    } else {
                        return 'high';
                    }
                },
                starCaptionClasses: function (val) {
                    if (val < 3) {
                        return 'label label-danger';
                    } else {
                        return 'label label-success';
                    }
                },
                hoverOnClear: false
            });
            var $inp = $('#rating-input');

            $inp.rating({
                min: 0,
                max: 5,
                step: 1,
                size: 'lg',
                showClear: false
            });

            $('#btn-rating-input').on('click', function () {
                $inp.rating('refresh', {
                    showClear: true,
                    disabled: !$inp.attr('disabled')
                });
            });


            $('.btn-danger').on('click', function () {
                $("#kartik").rating('destroy');
            });

            $('.btn-success').on('click', function () {
                $("#kartik").rating('create');
            });

            $inp.on('rating.change', function () {
                alert($('#rating-input').val());
            });


            $('.rb-rating').rating({
                'showCaption': true,
                'stars': '3',
                'min': '0',
                'max': '3',
                'step': '1',
                'size': 'xs',
                'starCaptions': {0: 'status:nix', 1: 'status:wackelt', 2: 'status:geht', 3: 'status:laeuft'}
            });
            $("#input-21c").rating({
                min: 0, max: 8, step: 0.5, size: "xl", stars: "8"
            });
        });


/*******************  add review event *********************/

$(".add_review_button").click(function(){
	var user_id=$(this).data("user_id");
	var task_id=$(this).data('id');
	$(".rev_user_id").val(user_id);
	$(".rev_task_id").val(task_id);
	
});

/*************************  google adddress *****************/
const center = { lat:  40.730610, lng: -73.935242 };
const defaultBounds = {
    north: center.lat + 0.1,
    south: center.lat - 0.1,
    east: center.lng + 0.1,
    west: center.lng - 0.1,
  };

   const options = {
    bounds: defaultBounds,
    componentRestrictions: { country: "us" },
    fields: ["address_components", "geometry", "icon", "name"],
    strictBounds: false,
    types: ["establishment"],
  };
google.maps.event.addDomListener(window, 'load', initialize);
    function initialize() {
      var input = document.getElementById('business_address');
      var autocomplete = new google.maps.places.Autocomplete(input);
	  //autocomplete.setComponentRestrictions({ state: ["nyc"]  });
      autocomplete.addListener('place_changed', function () {
      var place = autocomplete.getPlace();
      // place variable will have all the information you are looking for.
      $('#lat').val(place.geometry['location'].lat());
      $('#long').val(place.geometry['location'].lng());
	  var addre=$("#business_address").val();
	  address_testing(addre,'business_address');
    });
  }
  google.maps.event.addDomListener(window, 'load', initializeadd);
    function initializeadd() {
      var input = document.getElementById('business_address_add');
      var autocomplete = new google.maps.places.Autocomplete(input);
	  //autocomplete.setComponentRestrictions({ state: ["nyc"]  });
      autocomplete.addListener('place_changed', function () {
      var place = autocomplete.getPlace();
      // place variable will have all the information you are looking for.
      $('#lat').val(place.geometry['location'].lat());
      $('#long').val(place.geometry['location'].lng());
	  var addre=$("#business_address_add").val();
	  address_testing(addre,'business_address_add');
    });
  }
  
google.maps.event.addDomListener(window, 'load', initializeadd);
    function initializeadd() {
      var input = document.getElementById('business_address_add');
      var autocomplete = new google.maps.places.Autocomplete(input);
	  //autocomplete.setComponentRestrictions({ state: ["nyc"]  });
      autocomplete.addListener('place_changed', function () {
      var place = autocomplete.getPlace();
      // place variable will have all the information you are looking for.
      $('#lat').val(place.geometry['location'].lat());
      $('#long').val(place.geometry['location'].lng());
	  var addre=$("#business_address_add").val();
	  address_testing(addre,'business_address_add');
    });
  }
  google.maps.event.addDomListener(window, 'load', initializeadd2);
    function initializeadd2() {
      var input = document.getElementById('business_address_add2');
      var autocomplete = new google.maps.places.Autocomplete(input);
	  //autocomplete.setComponentRestrictions({ state: ["nyc"]  });
      autocomplete.addListener('place_changed', function () {
      var place = autocomplete.getPlace();
      // place variable will have all the information you are looking for.
      $('#lat').val(place.geometry['location'].lat());
      $('#long').val(place.geometry['location'].lng());
	  var addre=$("#business_address_add2").val();
	  //address_testing(addre,'business_address_add2');
    });
  }
  google.maps.event.addDomListener(window, 'load', initializeaddedit);
    function initializeaddedit() {
      var input = document.getElementById('business_address_edit');
      var autocomplete = new google.maps.places.Autocomplete(input);
	  //autocomplete.setComponentRestrictions({ state: ["nyc"]  });
      autocomplete.addListener('place_changed', function () {
      var place = autocomplete.getPlace();
      // place variable will have all the information you are looking for.
      $('#lat').val(place.geometry['location'].lat());
      $('#long').val(place.geometry['location'].lng());
	  var addre=$("#business_address_edit").val();
	  address_testing(addre,'business_address_edit');
    });
  }
  google.maps.event.addDomListener(window, 'load', initializeaddprovider);
    function initializeaddprovider() {
      var input = document.getElementById('provider-company-info-address');
      var autocomplete = new google.maps.places.Autocomplete(input);
	  //autocomplete.setComponentRestrictions({ state: ["nyc"]  });
      autocomplete.addListener('place_changed', function () {
      var place = autocomplete.getPlace();
      // place variable will have all the information you are looking for.
      $('#lat').val(place.geometry['location'].lat());
      $('#long').val(place.geometry['location'].lng());
	  var addre=$("#provider-company-info-address").val();
	  address_testing(addre,'provider-company-info-address');
    });
  }
  google.maps.event.addDomListener(window, 'load', initializeaddaddnewcard);
    function initializeaddaddnewcard() {
      var input = document.getElementById('add_new_card_addresss');
      var autocomplete = new google.maps.places.Autocomplete(input);
	 // autocomplete.setComponentRestrictions({ state: ["nyc"]  });
      autocomplete.addListener('place_changed', function () {
      var place = autocomplete.getPlace();
      // place variable will have all the information you are looking for.
      $('#lat').val(place.geometry['location'].lat());
      $('#long').val(place.geometry['location'].lng());
	  var addre=$("#add_new_card_addresss").val();
	  address_testing(addre,'add_new_card_addresss');
    });
  }
  google.maps.event.addDomListener(window, 'load', initializeaddedit_addess);
    function initializeaddedit_addess() {
      var input = document.getElementById('edit_addess');
      var autocomplete = new google.maps.places.Autocomplete(input);
	  //autocomplete.setComponentRestrictions({ state: ["nyc"]  });
      autocomplete.addListener('place_changed', function () {
      var place = autocomplete.getPlace();
      // place variable will have all the information you are looking for.
      $('#lat').val(place.geometry['location'].lat());
      $('#long').val(place.geometry['location'].lng());
	    var addre=$("#edit_addess").val();
	  address_testing(addre,'edit_addess');
    });
  }
  
  
  /********************************   Address Testing  ****************/
  
  $("#provider-company-info-address").on('paste',function(){
	  var addd=$(this).val();
	   var addd1='';
	  setTimeout(function(){ 
	   addd1=$("#provider-company-info-address").val();
	   address_testing(addd1,'provider-company-info-address');
	  }, 1000);
	  
	  
	})
	$("#edit_addess").on('paste',function(){
	  var addd=$(this).val();
	   var addd1='';
	  setTimeout(function(){ 
	   addd1=$("#edit_addess").val();
	   address_testing(addd1,'edit_addess');
	  }, 1000);
	  
	  address_testing(addd,'edit_addess');
	})
	
	$("#add_new_card_addresss").on('paste',function(){
	    var addd1='';
	  setTimeout(function(){ 
	   addd1=$("#add_new_card_addresss").val();
	   address_testing(addd1,'add_new_card_addresss');
	  }, 1000);
	})
	
	$("#business_address_edit").on('paste',function(){
	  var addd1='';
	  setTimeout(function(){ 
	   addd1=$("#business_address_edit").val();
	   address_testing(addd1,'business_address_edit');
	  }, 1000);
	})
	
	/* $("#business_address_add2").on('paste',function(){
	  var addd1='';
	  setTimeout(function(){ 
	   addd1=$("#business_address_add2").val();
	   address_testing(addd1,'business_address_add2');
	  }, 1000);
	}) */
	 $("#business_address_add").on('paste',function(){
	  var addd=$(this);
	   var addd1='';
	  setTimeout(function(){ 
	   addd1=$("#business_address_add").val();
	   address_testing(addd1,'business_address_add');
	  }, 1000);
	  
	 
	 
	}) 
	$("#business_address").on('paste',function(){
	    var addd1='';
	  setTimeout(function(){ 
	   addd1=$("#business_address").val();
	   address_testing(addd1,'business_address');
	  }, 1000);
	})
	
	
  
  function address_testing(address,event_po){
	  var url=$("body").data("url");
	  $.ajax({
			   type: "GET",
			   url: url+'/address-test',
			   dataType: "json",
			   data: {'address':address},
			     beforeSend: function() {
					 if(event_po=="business_address"){
                  $(".btn-green-shadow").prop("disabled",true);
					 }
				 },		
			   success: function(data)
				   {
					   
                   		if(data.code==201){
							
							if("business_address_add" == event_po){
								
								$("#business_address_add").attr("data-address",'1');
							}else{
								 if(event_po=="business_address"){
                             $(".btn-green-shadow").prop("disabled",false);
					           }
								
							$("#invalidlocation").modal("show");
							$("#"+event_po).val('');
							return false;
							}
						}else if(data.code==200){
								if(event_po=="business_address"){
                             $(".btn-green-shadow").prop("disabled",false);
					           }
							if("business_address_add" == event_po){
								
								$("#business_address_add").attr("data-address",'0');
							}
						}			  
					  
				   }
   });
  }
  
  
  
  
  
 /*********** time format  **************/

var geocoder;
      var map;
      var address = "new york city";
      function initMap() {
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 8,
          center: {lat: -34.397, lng: 150.644}
        });
        geocoder = new google.maps.Geocoder();
        codeAddress(geocoder, map);
      }

      function codeAddress(geocoder, map) {
        geocoder.geocode({'address': address}, function(results, status) {
          if (status === 'OK') {
            map.setCenter(results[0].geometry.location);
            var marker = new google.maps.Marker({
              map: map,
              position: results[0].geometry.location
            });
          } else {
            alert('Geocode was not successful for the following reason: ' + status);
          }
        });
      }
	  
/**************** set the order   *********************/

 $(".submenuLinks2 a").click(function(){
	if($(this).data('order')=="newest"){
		$(function() {
			  $(".provider_task_list .form-group").sort(sort_li).appendTo('.provider_task_list');
			  function sort_li(a, b) {
				return ($(b).data('position')) > ($(a).data('position')) ? 1 : -1;
			  }
			});
	}else if($(this).data('order')=="oldest"){
		$(function() {
			  $(".provider_task_list .form-group").sort(sort_li).appendTo('.provider_task_list');
			  function sort_li(a, b) {
				return ($(b).data('position')) < ($(a).data('position')) ? 1 : -1;
			  }
			});
	} 
 });	


$(".cancellink").click(function(e){
	e.preventDefault();
	$("body").removeClass("openFilter");
}); 

/***************************   save notification data ******************/
/* $(".toggle, .text_notification").click(function(){
	var meta_key=$(this).data('key');
	var user_id=$(".user_ids").val();
	var action_url=$(".action_url").val();
	
	var toggle_data='';
	if($(this).is(':checked')){
	toggle_data=1;
	}else{
	 toggle_data=0;	
	}
	$.ajax({
			   type: "GET",
			   url: action_url,
			   dataType: "json",
			   data: {'meta_value':toggle_data,'meta_key':meta_key,'user_id':user_id},
			   success: function(data)
				   {
                    if(data.code==200){
						
					}else if(data.code==201){
						
					}					  
					  
				   }
   });
	
	
});
 */
 $("#toggle1").click(function(){
	 if($(".text_notification").is(":checked")){
		 return true;
	 }else{
		 alert("Please check the text messages Before Proceed");
		 return false;
	 }
 })
 
 $(".text_notification").click(function(){
	 if($(this).is(":checked")){
		 
	 }else{
		$("#toggle1").prop("checked",false); 
	 }
 })
 
 $(".text_notification").click(function(){
	 if($(this).is(":checked")){
		 
	 }else{
		$("#toggle222").prop("checked",false); 
	 }
 })
 
  $("#toggle222").click(function(){
	 if($(".text_notification").is(":checked")){
		 return true;
	 }else{
		 alert("Please check the text messages Before Proceed");
		 return false;
	 }
 })
 
 $("#toggle3").click(function(){
	 if($(this).is(":checked")){
		 $(this).val("on");
	 }else{
		 $(this).val(" ");
	 }
	 })
	 
	 $(".text_notification, #toggle2").click(function(){
		if($(this).is(":checked")){
		 $(this).val("on");
	 }else{
		 $(this).val(" ");
	 } 
	 });
 
/**********************  service provider action ************/


$('#example3').dataTable( {
  "initComplete": function(settings, json) {
    $(".action_status").change(function(){
		console.log($(this).val());
	});
  }
} );

/*****************************/
 $(".submenuLinks3 a").click(function(){
	 
	if($(this).data('order')=="newest"){
		$(function() {
			  $(".filterr_row .gridRow").sort(sort_li).appendTo('.filterr_row');
			  function sort_li(a, b) {
				return ($(b).data('position')) > ($(a).data('position')) ? 1 : -1;
			  }
			});
	}else if($(this).data('order')=="oldest"){
		$(function() {
			 $(".filterr_row .gridRow").sort(sort_li).appendTo('.filterr_row');
			  function sort_li(a, b) {
				return ($(b).data('position')) < ($(a).data('position')) ? 1 : -1;
			  }
			});
	} 
 });
 
 /******************************************/
/* $(function() {
    $( "#from" ).datepicker({
      changeMonth: true,
      numberOfMonths: 1,
      onClose: function( selectedDate ) {
        $( "#to" ).datepicker( "option", "minDate", selectedDate );
      }
    });
    $( "#to" ).datepicker({
      defaultDate: "+1w",
      changeMonth: true,
      numberOfMonths: 1,
      onClose: function( selectedDate ) {
        $( "#from" ).datepicker( "option", "maxDate", selectedDate );
      }
    });
  }); */
  $('#from').daterangepicker();

  
  
/******************     pagination   note    ******************/

//Pagination
pagination_custom();
function pagination_custom(){
pageSize = 10;
incremSlide = 5;
startPage = 0;
numberPage = 0;
$("#pagin").html('');
var pageCount =  $(".line-content").length / pageSize;
var totalSlidepPage = Math.floor(pageCount / incremSlide);
    
for(var i = 0 ; i<pageCount;i++){
    $("#pagin").append('<li><a href="#">'+(i+1)+'</a></li> ');
    if(i>pageSize){
       $("#pagin li").eq(i).hide();
    }
}

$(".line-content").each(function(){
	$(this).addClass("active-li");
})
var prev = $("<li/>").addClass("prev").html("Prev").click(function(){
   startPage-=5;
   incremSlide-=5;
   numberPage--;
   slide();
});

prev.hide();

var next = $("<li/>").addClass("next").html("Next").click(function(){
   startPage+=5;
   incremSlide+=5;
   numberPage++;
   slide();
});
if(pageCount>0){
$("#pagin").prepend(prev).append(next);
}
$("#pagin li").first().find("a").addClass("current");

slide = function(sens){
   $("#pagin li").hide();
   
   for(t=startPage;t<incremSlide;t++){
     $("#pagin li").eq(t+1).show();
   }
   if(startPage == 0){
     next.show();
	 next.addClass("active-li");
     prev.hide();
	 prev.removeClass("active-li");
   }else if(numberPage == totalSlidepPage ){
     next.hide();
	 next.removeClass("active-li");
	  prev.addClass("active-li");
     prev.show();
   }else{
     next.show();
	 next.addClass("active-li");
	  prev.addClass("active-li");
     prev.show();
   }
   
    
}

showPage = function(page) {
	  $(".line-content").hide();
	  $(".line-content").each(function(n) {
	      if (n >= pageSize * (page - 1) && n < pageSize * page){
	          $(this).show();
		  $(this).addClass('active-li');
		  }else{
			   $(this).removeClass('active-li');
		  }
	  });        
}
    
showPage(1);
$("#pagin li a").eq(0).addClass("current");

$("#pagin li a").click(function() {
	 $("#pagin li a").removeClass("current");
	 $(this).addClass("current");
	 showPage(parseInt($(this).text()));
});
}
 

