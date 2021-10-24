<script>

$(".sign_up").submit(function(e) {

    e.preventDefault();

    var form = $(this);
    var url = form.attr('action');
    
    $.ajax({
           type: "POST",
           url: url,
		   dataType: "json",
		    beforeSend: function(){
				 $(".loader_image").show();
				 form.find("button").hide();
			   },
           data: form.serialize(), 
           success: function(data)
           {
			    $(".loader_image").hide();
				 form.find("button").show();
			   if(data.code==201){
				  $(".sign_up").find(".popupCustomTitle").after("<h4 class='error_message' style='color:red'>"+data.message+"</h4>");  
			   }else{
			  $(".sign_up").find(".popupCustomTitle").after("<h4 class='successfully' style='color:green'>"+data.message+"</h4>"); 
              setTimeout(function(){
				  location.reload();
				  
				  }, 1000);
				  
			   }
				  
			   
			  
			  
           },error: function (e) {
			   $(".loader_image").hide();
				 form.find("button").show();
              }
         });

    
});

$(".custom_login").submit(function(e){
	e.preventDefault();
	var form = $(this);
    var url = form.attr('action');
	 $.ajax({
           type: "POST",
           url: url,
		   dataType: "json",
		   beforeSend: function(){
				 $(".loader_image").show();
				 form.find("button").hide();
			   },
           data: form.serialize(), 
           success: function(data)
           {
			   $(".loader_image").hide();
				 form.find("button").show();
			    $(".login_message").html('');
			   if(data.code==200){
				   if(form.hasClass("active")){
				   location.reload();
				   }else{
				   $(".frontend_form_post").submit();
				   }
			   }else if(data.code==201){
				   $(".login_message").html('<p class="alert alert-danger">'+data.message+' </p>');
			   }
			   
			 },error: function (e) {
			 $(".loader_image").hide();
				 form.find("button").show();
			   
              }
         });

})	


$(".service_provider_login").submit(function(e){
	e.preventDefault();
	var form = $(this);
    var url = form.attr('action');
	 $.ajax({
           type: "POST",
           url: url,
		   dataType: "json",
		    beforeSend: function(){
				 $(".loader_image").show();
				 form.find("button").hide();
			   },
           data: form.serialize(), 
           success: function(data)
           {
			   
			   $(".loader_image").hide();
				 form.find("button").show();
			    $(".login_message").html('');
			   if(data.code==200){
				   location.reload();
			   }else if(data.code==201){
				   $(".login_message").html('<p class="alert alert-danger">'+data.message+' </p>');
			   }
			   
			 },error: function (e) {
			   $(".loader_image").hide();
				 form.find("button").show();
			   
              }
         });

})	






$(".custom_register").submit(function(e){
	e.preventDefault();
	var form = $(this);
    var url = form.attr('action');
	 $.ajax({
           type: "POST",
           url: url,
		   dataType: "json",
		    beforeSend: function(){
				 $(".loader_image").show();
				 form.find("button").hide();
			   },
           data: form.serialize(), 
           success: function(data)
           {
			    $(".loader_image").hide();
				 form.find("button").show();
			    $(".login_message").html('');
			   if(data.code==200){
				    if(form.hasClass("active")){
				   location.reload();
				   }else{
				   $(".frontend_form_post").submit();
				   }
			   }else if(data.code==201){
				   $(".register_message").html('<p class="alert alert-danger">'+data.message+' </p>');
			   }
			   
			 },error: function (e) {
			   $(".loader_image").hide();
				 form.find("button").show();
			   
              }
         });
});

/*************  Help center Customer **************/
$(".help_customer").submit(function(e){
	e.preventDefault();
	var form = $(this);
    var url = form.attr('action');
	 $.ajax({
           type: "POST",
           url: url,
		   dataType: "json",
		    beforeSend: function(){
				 $(".loader_image").show();
				 form.find("button").hide();
			   },
           data: form.serialize(), 
           success: function(data)
           {
			   if(data.code==200){
				$("#help_customer_popup").modal("show");
			   form.find(".form-control").val("");
			   form.find("textarea").val("");
			    form.find("button").show();
			   }
				
			 },error: function (e) {
			   $(".loader_image").hide();
				
			   
              }
         });
});

/***********************   Help Center  Support **********************/

$(".help_profession").submit(function(e){
	e.preventDefault();
	var form = $(this);
    var url = form.attr('action');
	 $.ajax({
           type: "POST",
           url: url,
		   dataType: "json",
		    beforeSend: function(){
				 $(".loader_image").show();
				 form.find("button").hide();
			   },
           data: form.serialize(), 
           success: function(data)
           {
			   if(data.code==200){
				   $("#help_customer_popup").modal("show");
			   form.find(".form-control").val("");
			   form.find("textarea").val("");
			    form.find("button").show();
			   }
			 },error: function (e) {
			   $(".loader_image").hide();
				
			   
              }
         });
});



/*********************************************************************/


$(".service_provider_register").submit(function(e){
	e.preventDefault();
	var form = $(this);
    var url = form.attr('action');
	 $.ajax({
           type: "POST",
           url: url,
		   dataType: "json",
		    beforeSend: function(){
				 $(".loader_image").show();
				 form.find("button").hide();
			   },
           data: form.serialize(), 
           success: function(data)
           {
			   
			   $(".loader_image").hide();
				 form.find("button").show();
			    $(".login_message").html('');
			   if(data.code==200){
				   window.location.href = '{{ route("signups")}}';
				    
			   }else if(data.code==201){
				   $(".register_message").html('<p class="alert alert-danger">'+data.message+' </p>');
			   }
			   
			 },error: function (e) {
			   $(".loader_image").hide();
				 form.find("button").show();
			   
              }
         });
})




$(".continue_sp").click(function(e){
	
	
	var url='{{ route("logout-custom")}}';
	
	$.ajax({
           type: "GET",
           url: url,
		   dataType: "json",
          
           success: function(data)
           {
			   
			   $(".custom_login").addClass("active");
			   $(".custom_register").addClass("active");;
			   $("#postTaskloginModal").modal('show');
			   $("#signUp_4").trigger("click");
			   $("#signUp_4").prop("checked",true);
			   
			 },error: function (e) {
			  
			   
              }
         });
			
})


$(".continue_customer").click(function(){
	var url='{{ route("logout-custom")}}';
	
	$.ajax({
           type: "GET",
           url: url,
		   dataType: "json",
          
           success: function(data)
           {
			   $("#getstartmodel").modal('show');
			   
			   
			 },error: function (e) {
			   console.log(e);
			   
              }
         });
	
});



 $(".frontend_form_post").submit(function(e){
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
           success: function(data)
           {
			    if(data.code==200){
					window.location.href = data.action;
				}
			   
			 },error: function (e) {
			   console.log(e);
			   
              }
         });

 })
 
 $(".google_redirect").click(function(e){
	 e.preventDefault();
	 var action_url=$(this).attr('href');
	console.log(action_url);
	 var phone_no=$("#phone_number").val();
	 var user_type_google=$(this).parent().parent().parent().parent().find(".user_type_google").val();
	 console.log(user_type_google);
	 if(user_type_google == ""){
		$(".user_type_google").after("<p class='alert alert-danger google_user_type'>Please Select User Type  </p>"); 
	   return false;
	   
	 }
	 $(".google_user_type").remove();
	 
	 
	 if(phone_no==""){
		 $("#phone_number").after("<p class='alert alert-danger google_phone_error'>Phone Number Required</p>");
	 return false;
	 }
	 $(".google_phone_error").remove();
	 var enable_mesage=0;
	 if($("#enableTextMessage2").is(":checked")){
		 enable_mesage=1;
	 }
	 var url='{{ route("save_session")}}';
	  $.ajax({
           type: "GET",
           url: url,
		   dataType: "json",
           data:{phone_no:phone_no,enable_mesage:enable_mesage,user_type:user_type_google} ,
            	 
           success: function(data)
           {
			   
			   location.href = action_url;
			   
			 },error: function (e) {
			   console.log(e);
			   
              }
         });

	 
	 
 });
 
  $(".facebook_signup").click(function(e){
	 e.preventDefault();
	 var user_type_google=$(".user_type_google").val();
	 var phone_number=$(".phone_number").val();
	 if(user_type_google==""){
		 $(".user_type_google").after("<p class='alert alert-danger google_user_type'>Please Select User Type  </p>"); 
	   return false;
	 }
	 
	 if(phone_number==""){
		 $("#phone_number").after("<p class='alert alert-danger google_phone_error'>Phone Number Required</p>");
	 return false;
	 }
	 
	 
	 $(".google_user_type").remove();
	 
	  $(".google_phone_error").remove();
	  if((user_type_google !=="") && (phone_number !=="")){
		$(".facebook_signup_form").submit(); 
	 }
	  
	
	 
	 
 }); 
 $(".facebook_signup_form").submit(function(e){
	  e.preventDefault();
	  var action_url='{{ route("auth/facebook")}}';
	  var form = $(this);
	  var url='{{ route("save_session")}}';
	  $.ajax({
           type: "GET",
           url: url,
		   dataType: "json",
           data:form.serialize() ,
            	 
           success: function(data)
           {
			   
			   location.href = action_url;
			   
			 },error: function (e) {
			   console.log(e);
			   
              }
         });

	  
	  
	  
	  
	  
 })
 
 
 
 
</script>