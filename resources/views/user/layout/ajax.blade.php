<script>


$(".addLocationForm").submit(function(e){
	e.preventDefault();
    var form = $(this);
    var url = form.attr('action');
	var data_status=$("#business_address_add").data("address");
	
	$.ajax({
           type: "POST",
           url: url,
		   dataType: "json",
           data: form.serialize(),
          beforeSend: function() {
              $(".addLocationForm").find(".smlButton").find(".btn-green").prop('disabled', true);
                 },		   
           success: function(data)
           {
			    $(".addLocationForm").find(".smlButton").find(".btn-green").prop('disabled', false);
			   if(data.code==201){
				  $(".modal-body").find('form').before("<h4 class='error_message' style='color:red'>"+data.status+"</h4>");  
			   }else if(data.code == 204){
				   $("#invalidlocation").modal("show");
		           $("#business_address_add").val('');
				   
			   }else{
			  $(".modal-body").find('form').before("<h4 class='successfully' style='color:green'>"+data.status+"</h4>"); 
              setTimeout(function(){
				  location.reload();
				  
				  }, 2000);
				  
			   }
			 },error: function (e) {
				 $(".addLocationForm").find(".smlButton").find(".btn-green").prop('disabled', false);
			   console.log(e);
			   
              }
         });
	
});

/**************************************  filter functionality ***************************/

$(".filterForm").submit(function(e){
	e.preventDefault();
    var form = $(this);
    var url = form.attr('action');
	
	$.ajax({
           type: "POST",
           url: url,
		   dataType: "json",
           data: form.serialize(),
          beforeSend: function() {
         
                 },		   
           success: function(data)
           {
			    $(".provider_task_list").html(data.html);
				$("body").removeClass("openFilter");
			   apply_jobs();
			 },error: function (e) {
				
			   
              }
         });
	
	
});



/**********************  post task  functionality *****************/

$(".addLocationForm2").submit(function(e){
	e.preventDefault();
    var form = $(this);
    var url = form.attr('action');
	
	$.ajax({
           type: "POST",
           url: url,
		   dataType: "json",
           data: form.serialize(),
          beforeSend: function() {
              $(".addLocationForm").find(".smlButton").find(".btn-green").prop('disabled', true);
                 },		   
           success: function(data)
           {
			    $(".addLocationForm").find(".smlButton").find(".btn-green").prop('disabled', true);
				
			   if(data.code==201){
				  $(".modal-body").find('form').before("<h4 class='error_message' style='color:red'>"+data.status+"</h4>");  
			   }else if(data.code == 204){
				   $("#invalidlocation").modal("show");
		           $("#business_address_add").val('');
				   
			   }else{
			     update_adress_list();
				   $(".close").trigger("click");
			   }
			 
			 },error: function (e) {
				 $(".addLocationForm").find(".smlButton").find(".btn-green").prop('disabled', false);
			   console.log(e);
			   
              }
         });
});

/*********************************************/
function update_adress_list(){
	var url="{{ route('address-option')}}";
	$.ajax({
           type: "GET",
           url: url,
		   dataType: "json",
           success: function(data)
           {
			    $(".choose_address").html(data.html);
			 },error: function (e) {
				 
			   
              }
         });
		 
		 
}



$(".editLocationForm").submit(function(e){
	e.preventDefault();
    var form = $(this);
    var url = form.attr('action');
	
	$.ajax({
           type: "POST",
           url: url,
		   dataType: "json",
           data: form.serialize(), 
		    beforeSend: function() {
              $(".editLocationForm").find(".smlButton").find(".btn-green").prop('disabled', true);
                 },
           success: function(data)
           {
			    $(".editLocationForm").find(".smlButton").find(".btn-green").prop('disabled', true);
			   if(data.code==201){
				  $(".modal-body").find('form').before("<h4 class='error_message' style='color:red'>"+data.status+"</h4>");  
			   }else{
			  $(".modal-body").find('form').before("<h4 class='successfully' style='color:green'>"+data.status+"</h4>"); 
              setTimeout(function(){
				  location.reload();
				  
				  }, 3000);
				  
			   }
			 },error: function (e) {
				  $(".editLocationForm").find(".smlButton").find(".btn-green").prop('disabled', false);
			   console.log(e);
			   
              }
         });
});






$(".edit_address").click(function(e){
	e.preventDefault();
	var idd=$(this).data('id');
	var url='{{ url("/")}}/user/address/edit/'+idd;
	
		$.ajax({
           type: "GET",
           url: url,
		   dataType: "json",
		   
           success: function(data)
           {
			 $(".address_type_edit").val(data.data.address_type); 
             $(".address_edit").val(data.data.address); 
             $(".apartment_edit").val(data.data.apartment); 
			 $(".edit_id").val(data.data.id); 
			 },error: function (e) {
			   console.log(e);
			   
              }
         });
	
})
$(".email_notification2, .text_notification2, .checkbox_input").click(function(){
	var status='';
	if ($(this).is(':checked')) {
		status='on';
	}else{
		status='off';
	}
	var user_id='{{ Auth::user()->id }}';
	var url='{{ route("update-user-info")}}';
	var meta_key=$(this).data('key');
	$.ajax({
           type: "GET",
           url: url,
		   dataType: "json",
		   data:{user_id:user_id, meta_key:meta_key, meta_value:status},
           success: function(data)
           {
			   $(".alert-success").show();
			   $(".alert-success").html(data.message);

             setTimeout(function(){
				  $(".alert-success").hide();
				  }, 3000);

			   }
         });  

	
});
/**************  business information  save ***********************/

$(".business_information").submit(function(e){
	e.preventDefault();
    var form = $(this);
    var url = form.attr('action');
	 var sub_form=$(this).find(".tab_btn_submit");
	$.ajax({
           type: "POST",
           url: url,
		   dataType: "json",
           data: form.serialize(), 
		    beforeSend: function() {
              $(".business_information").find(".smlButton").find(".btn-green").prop('disabled', true);
                 },
           success: function(data)
           {
			   if(data.code==200){
			   tab_btn_submit(sub_form);
			   
			   }else if(data.code== 201){
				   
			   }
			  
			 },error: function (e) {
				  $(".business_information").find(".smlButton").find(".btn-green").prop('disabled', false);
			   console.log(e);
			   
              }
         });
});


/************************** category_location *********************/
$(".category_location_form, .payment_form, .profile_page, .business_license, .portfolio_status").submit(function(e){
	e.preventDefault();
    var form = $(this);
    var url = form.attr('action');
	 var sub_form=$(this).find(".tab_btn_submit");
	$.ajax({
           type: "POST",
           url: url,
		   dataType: "json",
           data: new FormData(this), 
		   processData: false,
           contentType: false,
		    beforeSend: function() {
              $(".category_location").find(".smlButton").find(".btn-green").prop('disabled', true);
                 },
           success: function(data)
           {
			   if(data.code==200){
			   tab_btn_submit(sub_form);
			   $(".ser_error").remove();
			   $(".loc_error").remove();
				
               if(data.action=="portfolio_status"){
				   window.location.href=data.action_url;
			   }				
				   
			   }else if(data.code== 201){
				   $(".ser_error").remove();
				   $(".loc_error").remove();
				   if(data.action=="service"){
					   $(".servicer_error").html('<p class="alert alert-danger ser_error">'+data.message+'</p>');
					  
				   }else if(data.action=="location"){
					    $(".location_error").html('<p class="alert alert-danger loc_error">'+data.message+'</p>');
					   
				   }
				   
			   }
			  
			 },error: function (e) {
				  $(".category_location").find(".smlButton").find(".btn-green").prop('disabled', false);
			   console.log(e);
			   
              }
         });
});
/****************  add payment card Api ******************/


$(".add_payment_card, .edit_payment_card").submit(function(e){
	e.preventDefault();
    var form = $(this);
	 form.find(".btn-green").prop('disabled', true);
	var d_date=form.find(".edit_exp").val();
	
	var d_2e=d_date.split("/");
	
	 console.log(d_2e[0]);
	Stripe.setPublishableKey('pk_test_51GwbedCc07NNKuuNKciRiftSTgTO1JSfNuaFXblVm98hnWs708buc1iRGFbdDWVZk1otBdwbUh5pFcvKVOMa5YHC00D3pYTVGT');
	 Stripe.createToken({
                    number: form.find('.edit_card_number').val(),
                    cvc: form.find('.edit_cvc').val(),
                    exp_month: d_2e[0],
                    exp_year: d_2e[1]
                }, stripeRes);
				var tk='';
	function stripeRes(status, response) {
            if (response.error) {
                $('.error')
                    .removeClass('hide')
                    .find('.alert')
                    .text(response.error.message);
            } else {
                var token = response['id'];
                $(".stripeToken").remove();;
				$(".edit_cvc").append('<input tyep="text" name="stripeToken" value="'+token+'">');
               
            }
        }
		tk=$(".stripeToken").val();
		console.log(tk);
	 var url = form.attr('action');
	 var sub_form=$(this).find(".btn-green");
	 form.find(".loader_image").show();
	 form.find(".btn-green").hide();
	 setTimeout(function(){
	 $.ajax({
           type: "POST",
           url: url,
		   dataType: "json",
           data: form.serialize(), 
		    beforeSend: function() {
				form.find(".btn-green").hide();
				form.find(".loader_image").show();
              form.find(".btn-green").prop('disabled', true);
                 },
           success: function(data)
           {
			   form.find(".btn-green").show();
			   form.find(".loader_image").hide();
			    form.find(".btn-green").prop('disabled', false);
			   if(data.code==200){
				   form.find('.row').before('<div class="alert alert-success" role="alert">'+data.message+'</div>');
			   card_payment_list();
			   $(".form-control").val('');
			   setTimeout(function(){
				  $(".alert-success").remove();
				  }, 3000);
				  if(data.action=="add"){
			   $('#addnewModal').modal('toggle');
				  }else if(data.action=="edit"){
					  $('#editpaymentModal').modal('toggle');
				  }
			   }else{
				   form.find('.row').before('<div class="alert alert-danger" role="alert">'+data.message+'</div>');
				   $(this).find(".btn-green").prop('disabled', false);
				     setTimeout(function(){
				  $(".alert-danger").remove();
				  }, 3000);
			   }
			  
			 },error: function (e) {
				 $(this).find(".btn-green").prop('disabled', false);
			   console.log(e);
			   
              }
         });
	  }, 3000);
})




/***********************************  add license form *******************/

$(".addLicenseForm").submit(function(e){
	e.preventDefault();
	var form = $(this);
	 var url = form.attr('action');
	 var sub_form=$(this).find(".btn-green");
	 $.ajax({
           type: "POST",
           url: url,
		   dataType: "json",
           data: new FormData(this), 
		   processData: false,
           contentType: false,
		    beforeSend: function() {
              $(".addLicenseForm").find(".smlButton").find(".btn-green").prop('disabled', true);
                 },
           success: function(data)
           {
			   $(".form-control").val('');
			   $(".license_image").val('');
			   business_license_list();
			   $(".close").trigger('click');
			   $(".addLicenseForm").find(".smlButton").find(".btn-green").prop('disabled', false);
		   },error: function (e) {
				 $(".addLicenseForm").find(".smlButton").find(".btn-green").prop('disabled', false);
			   console.log(e);
			   
              }
	 });
});

/************************  edit license form *******************************/

$(".editLicenseForm").submit(function(e){
	e.preventDefault();
	var form = $(this);
	 var url = form.attr('action');
	 var sub_form=$(this).find(".btn-green");
	 $.ajax({
           type: "POST",
           url: url,
		   dataType: "json",
           data: new FormData(this), 
		   processData: false,
           contentType: false,
		    beforeSend: function() {
              $(".editLicenseForm").find(".smlButton").find(".btn-green").prop('disabled', true);
                 },
           success: function(data)
           {
			   $(".form-control").val('');
			   $(".license_image").val('');
			   business_license_list();
			   $(".close").trigger('click');
			    $(".editLicenseForm").find(".smlButton").find(".btn-green").prop('disabled', false);
		   },error: function (e) {
				 $(this).find(".btn-green").prop('disabled', false);
			   console.log(e);
			   
              }
	 });
});

/**********************************  add portfolio ******************/
$(".addPortfolioForm").submit(function(e){
	e.preventDefault();
	var form = $(this);
	 var url = form.attr('action');
	 var sub_form=$(this).find(".btn-green");
	 $.ajax({
           type: "POST",
           url: url,
		   dataType: "json",
           data: new FormData(this), 
		   processData: false,
           contentType: false,
		    beforeSend: function() {
              $(".addPortfolioForm").find(".smlButton").find(".btn-green").prop('disabled', true);
                 },
           success: function(data)
           {
			   $(".form-control").val('');
			   
			   portfolio_list();
			   $(".close").trigger('click');
			   $(".addPortfolioForm").find(".smlButton").find(".btn-green").prop('disabled', false);
		   },error: function (e) {
				 $(".addPortfolioForm").find(".smlButton").find(".btn-green").prop('disabled', false);
			   console.log(e);
			   
              }
	 });
})

/****************  edit portfolio ****************************/

$(".editPortfolioForm").submit(function(e){
	e.preventDefault();
	var form = $(this);
	 var url = form.attr('action');
	 var sub_form=$(this).find(".btn-green");
	 $.ajax({
           type: "POST",
           url: url,
		   dataType: "json",
           data: new FormData(this), 
		   processData: false,
           contentType: false,
		    beforeSend: function() {
              $(".editPortfolioForm").find(".smlButton").find(".btn-green").prop('disabled', true);
                 },
           success: function(data)
           {
			   $(".form-control").val('');
			   
			   portfolio_list();
			   $(".close").trigger('click');
			   $(".editPortfolioForm").find(".smlButton").find(".btn-green").prop('disabled', false);
		   },error: function (e) {
				 $(".editPortfolioForm").find(".smlButton").find(".btn-green").prop('disabled', false);
			   console.log(e);
			   
              }
	 });
})
        
 /*********  Appy post****************/  

	$("#applyJobModal").find("form").submit(function(e){
		e.preventDefault();
		var form = $(this);
		 var url = form.attr('action');
		  $.ajax({
           type: "POST",
           url: url,
		   dataType: "json",
           data: new FormData(this), 
		   processData: false,
           contentType: false,
		    beforeSend: function() {
              $(".loader_image").show();
			  $(".applyJobModal").hide();
			  $(this).find(".modal-body").find("button").prop('disabled', true);
                 },
           success: function(data)
           {
			   $(".loader_image").hide();
			   $(".applyJobModal").show();
			   if(data.code==200){
				   $(this).find(".modal-body").find('.message').before("<div class='alert alert-success'>"+data.message+"</div>")
				   setTimeout(function(){
				     window.location.href=data.action;
					 }, 400);
				}else{
				   
			   }
			   $(this).find("button").prop('disabled', false);
			  
		   },error: function (e) {
				 $(this).find("button").prop('disabled', false);
			   
              }
	 });
	});


/********************************  Asign  job **************/

$(".assign_button").click(function(e){
	e.preventDefault();
	var task_id=$(this).data('id');
	var user_id=$(this).data('user_id');
	var url="{{ route('assign-job')}}";
	 $(".assign_button").addClass("disabledLink");
	  $.ajax({
           type: "GET",
           url: url,
		   dataType: "json",
           data: {'task_id':task_id,'user_id':user_id}, 
		  
		    beforeSend: function() {
              $(this).addClass("disabledLink");  
			
                 },
           success: function(data)
           {
			   if(data.code==200){
				   $(this).parent().parent().find(".message_area").html("<div class='alert alert-success'>"+data.message+"</div>");
				
				setTimeout(function(){
				   location.reload();
				   }, 3000);
				}else{
				   $(".assign_button").removeClass("disabledLink");  
			   }
			   $(this).find("button").prop('disabled', false);
			  
		   },error: function (e) {
				$(".assign_button").removeClass("disabledLink"); 
			   
              }
	 });
	
})

$(".markCompletedModalForm").submit(function(e){
	e.preventDefault();
    var form = $(this);
    var url = form.attr('action');
	
	$.ajax({
           type: "POST",
           url: url,
		   dataType: "json",
           data: form.serialize(),
          beforeSend: function() {
              $(".markCompletedModalForm").find(".btn-green-outline").prop('disabled', true);
                 },		   
           success: function(data)
           {
			   if(data.code==200){
				   $(".markCompletedModalForm").find(".mb-3").html("<p class='alert alert-success'>"+data.message+"</p>");
			   setTimeout(function(){
				   location.reload();
				   }, 3000);
			   
			   }else if(data.code==201){
				     $(".markCompletedModalForm").find(".mb-3").html("<p class='alert alert-danger'>"+data.message+"</p>");
			   setTimeout(function(){
				   location.reload();
				   }, 3000);
			   }
			    
			    $(".markCompletedModalForm").find(".btn-green-outline").prop('disabled', true);
			 },error: function (e) {
				 $(".markCompletedModalForm").find(".btn-green-outline").prop('disabled', false);
			   
			   
              }
         });
});


$(".addRatingForm").submit(function(e){
	e.preventDefault();
    var form = $(this);
    var url = form.attr('action');
	
	$.ajax({
           type: "POST",
           url: url,
		   dataType: "json",
           data: form.serialize(),
          beforeSend: function() {
              $(".addRatingForm").find(".btn-green-outline").prop('disabled', true);
                 },		   
           success: function(data)
           {
			   if(data.code==200){
				    $(".addRatingForm").find(".btn-green-outline").before("<div class='alert alert-success'>"+data.message+"</div>");
			     setTimeout(function(){
				   location.reload();
				   }, 3000);
			   
			   }
			   
			   
			    
			    $(".addRatingForm").find(".btn-green-outline").prop('disabled', true);
			 },error: function (e) {
				 $(".addRatingForm").find(".btn-green-outline").prop('disabled', false);
			   
			   
              }
         });
});

/*********************  add services *****************************/

$(".addServicesForm").submit(function(e){
	e.preventDefault();
    var form = $(this);
    var url = form.attr('action');
	
	$.ajax({
           type: "POST",
           url: url,
		   dataType: "json",
           data: form.serialize(),
          beforeSend: function() {
              
                 },		   
           success: function(data)
           {
			  },error: function (e) {
				 
			   
			   
              }
         });
});

/**********************  deactivate account **********************/
$(".deactivate_account_form").submit(function(e){
	e.preventDefault();
    var form = $(this);
    var url = form.attr('action');
	
	$.ajax({
           type: "POST",
           url: url,
		   dataType: "json",
           data: form.serialize(),
          beforeSend: function() {
              $(".deactivate_account_form").find(".btn-green-shadow").prop("disabled",true);
                 },		   
           success: function(data)
           {
			   if(data.code==200){
				   $(".logoutLink a").trigger("click");
			   }
			   
			  },error: function (e) {
				  $(".deactivate_account_form").find(".btn-green-shadow").prop("disabled",false);
			   
			   
              }
         });
});


 $(".filterOptions").find(".submenuLinks").find("a").click(function(){
	 var data_week=$(this).data('week');
	 console.log(data_week);
	 
	  var url = '{{ route("provider-trans") }}';
	  if(typeof data_week !== "undefined"){
		  var test=$(this).text();
		  $(".monthly_filter").text(test);
	 $.ajax({
           type: "GET",
           url: url,
		   dataType: "json",
           data: {day:data_week},	   
           success: function(data)
           {
			   $(".filterr_row").html(data.html);
			  pagination_custom();
			   $("#from").val(data.date.to+' - '+data.date.from);
			   
			   
			   
			  },error: function (e) {
				  $(".deactivate_account_form").find(".btn-green-shadow").prop("disabled",false);
			   
			   
              }
         });
	  }
	 
 })
 
 
 
 $("#to").change(function(){
	 if(($(this).val() !=="") && $("#from").val() !==""){
		 var to=$(this).val();
		 var from=$("#from").val();
		  var url = '{{ route("provider-trans") }}';
		   
	 $.ajax({
           type: "GET",
           url: url,
		   dataType: "json",
           data: {to:to,from:from},	   
           success: function(data)
           {
			   $(".filterr_row").html(data.html);
			   pagination_custom();
			  
			  },error: function (e) {
				  $(".deactivate_account_form").find(".btn-green-shadow").prop("disabled",false);
			   
			   
              }
         });
	 
		 
		 
	 }else if($("#from").val()==""){
		 alert("Please select from date");
	 }
 })

$("#provider-company-info-address").onfocusout(function(){
	console.log($(this).val());
});


</script>