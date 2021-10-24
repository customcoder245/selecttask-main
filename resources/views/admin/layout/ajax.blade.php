<script>
$(".action_status").change(function(){
	   var url="{{ route('profileinfoupdate')}}";
	   var data_id=$(this).data('id');
	   var data_status=$(this).val();
	   var $this=$(this);
	$.ajax({
           type: "GET",
           url: url,
		   dataType: "json",
		   data:{'id':data_id,'status':data_status},
           success: function(data)
           {
			   if(data.code==200){
				   if(data.status=="inactive"){
				   $this.parent().parent().find(".status_td").addClass('inactive');
				   }else{
					   $(".status_td").removeClass('inactive');
				   }
			    $this.parent().parent().find(".status_td").html(data.status);
			   }			 
			},error: function (e) {
				 
			   
              }
         });
	});
	
	$("#sortby").change(function(){
		var sort_name=$(this).val();
		var user_ids=$(".user_ids").val();
		var url='{{ route("customer/filter")}}';
		
		$.ajax({
           type: "GET",
           url: url,
		   dataType: "json",
		   data:{'user_id':user_ids,'sort_name':sort_name},
           success: function(data)
           {
                if(data.code==200){
					$(".custom_services_list").html(data.html);
				}            
 			 
			  
			},error: function (e) {
				 
			   
              }
         });
	});
	
	$("#sortby2").change(function(){
		var sort_name=$(this).val();
		var user_ids=$(".user_ids").val();
		var url='{{ route("sp/filter")}}';
		
		$.ajax({
           type: "GET",
           url: url,
		   dataType: "json",
		   data:{'user_id':user_ids,'sort_name':sort_name},
           success: function(data)
           {
                if(data.code==200){
					$(".sp_job_list").html(data.html);
				}            
 			 
			  
			},error: function (e) {
				 
			   
              }
         });
	});
	
	$(".admin_task_list_filter").submit(function(e){
        e.preventDefault();		
		var form=$(this);
		var url=$(this).attr('action');
        $.ajax({
           type: "POST",
           url: url,
		   dataType: "json",
           data: form.serialize(),
          beforeSend: function() {
              
                 },		   
           success: function(data)
           {
			   $(".boxBody_table").hide();
			    $(".filter_table").html(data.html);
				$("#example2").DataTable();
				
			 },error: function (e) {
				
			   console.log(e);
			   
              }
         });	
		 
		 
	});
	
$(".task_view_more").click(function(e){
	e.preventDefault();
	var url=$(this).attr("href");
	console.log(url);
	$.ajax({
           type: "GET",
           url: url,
		   dataType: "json",
		  success: function(data)
           {
			    $(".boxBody_table").hide();
			    $(".filter_table").html(data.html);
				$("#example2").DataTable();
				$('html, body').animate({
             scrollTop: $("#example2").offset().top
            }, 2000);
                           
 		  },error: function (e) {
				 
			   
              }
         });
})	
	
</script>