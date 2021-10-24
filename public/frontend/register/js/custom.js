 
  function playVideo() { 
    $('#sample_video').trigger('play'); 
} 

  $( document ).ready(function() {
    $('#playbtn').click(function() {
        $('.videosection .cover').fadeOut('fast');
        $('.videosection .videoembed').show('fast');
    }); 
    });

    function playVideoPopup() { 
      $('#sample_videopopup').trigger('play'); 
  } 
$( document ).ready(function() {
      $('#playbtnpopup').click(function() {
          $('.videosection .cover').fadeOut('fast');
          $('.videosection .videoembed').show('fast');
      }); 

      
});

$(".locFrame-widget").click(function(){
	if($(this).find(".form-check-input").is(":checked")){
	$(this).find(".form-check-input").prop("checked",false);
	}else{
	$(this).find(".form-check-input").prop("checked",true);
	}
})

$(".borderedframe").click(function(){
	if($(this).find(".form-check-input").is(":checked")){
	$(this).find(".form-check-input").prop("checked",false);
	}else{
	$(this).find(".form-check-input").prop("checked",true);
	}
})

 google.maps.event.addDomListener(window, 'load', initializeadd2);
    function initializeadd2() {
      var input = document.getElementById('business_address_add2');
      var autocomplete = new google.maps.places.Autocomplete(input);
      autocomplete.addListener('place_changed', function () {
      var place = autocomplete.getPlace();
      // place variable will have all the information you are looking for.
      $('#lat').val(place.geometry['location'].lat());
      $('#long').val(place.geometry['location'].lng());
    });
  }
  $(".sign-up-email").on("blur",function(){
	  var email=$(this).val();
							 if(!validateEmail(email)){
								 $(".sign-up-email_error").text("Please Enter valid email Address");
                                $(this).focus();
							   return false							
 							}else{
								 $(".sign-up-email_error").text("");
							} 
  })
  
  
 $(".sign-up-form").submit(function(e) {
  e.preventDefault();
  
                           var address=$("#business_address_add2").val();

							 var str1 = address;
				             var str2 = "ny";
                             var str3='NY';
							 if(address !== ''){
								if((str1.indexOf(str2) != -1) || (str1.indexOf(str3) != -1)){
								
								}else{
                                $("#invalidlocation").modal("show");
							   $("#business_address_add2").val('');	
                                  return false;
                                     }
							 }
							
  
  
   var form = $(this);
    var url = form.attr('action');
    $.ajax({
           type: "POST",
           url: url,
		   dataType: "json",
           data: form.serialize(), 
           success: function(data)
           {
			   /* if(data.code==203){
			   $("#invalidlocation").modal("show");
			   } */
			   if(data.code==202){
				   $(".services_loc_text").text(data.msg);
				   $("#service_location_id").modal("show");
			   }
			   
			   if(data.code==201){
				   $('.email_popup_text').text(data.msg);
				   $("#sign-email_popup").modal('show');
				   
			   }
			   
			   if(data.code==200){
				   $("#sign_up_success").modal("show");
			   }
			   
			  
			  
           },error: function (e) {
			   console.log(e);
			   
              }
         });
 });	 
  
function validateEmail(email) {
   /* var regex = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\;
  if(regex.test(email)) {
    return false;
  }else{
    return true;
  
} */
 return true;
}
$(document).ready(function () {
						$('.phone_number').usPhoneFormat({
							format: '(xxx) xxx-xxxx',
						});
		});


// Cache selectors
var lastId,
    topMenu = $("#top-menu"),
    sideMenu = $("#sidescroller-menu"),
    //topMenuHeight = topMenu.outerHeight()+15,
    // All list items
    menuItems = topMenu.find("a"),
    menuItems1 = sideMenu.find("a"),
    // Anchors corresponding to menu items
    scrollItems = menuItems.map(function(){
      var item = $($(this).attr("href"));
      if (item.length) { return item; }
    });
    scrollItems1 = menuItems1.map(function(){
      var item = $($(this).attr("href"));
      if (item.length) { return item; }
    });

// Bind click handler to menu items
// so we can get a fancy scroll animation
menuItems.click(function(e){
  var href = $(this).attr("href"),
      offsetTop = href === "#" ? 0 : $(href).offset().top+1;
  $('html, body').stop().animate({ 
      scrollTop: offsetTop
  }, 300);
  e.preventDefault();
});
menuItems1.click(function(e){
  var href = $(this).attr("href"),
      offsetTop = href === "#" ? 0 : $(href).offset().top+1;
  $('html, body').stop().animate({ 
      scrollTop: offsetTop
  }, 300);
  e.preventDefault();
});

// Bind to scroll
$(window).scroll(function(){
   // Get container scroll position
   var fromTop = $(this).scrollTop();
   
   // Get id of current scroll item
   var cur = scrollItems.map(function(){
     if ($(this).offset().top < fromTop)
       return this;
   });
   // Get the id of the current element
   cur = cur[cur.length-1];
   var id = cur && cur.length ? cur[0].id : "";
   
   if (lastId !== id) {
       lastId = id;
       // Set/remove active class
       menuItems
         .parent().removeClass("active")
         .end().filter("[href='#"+id+"']").parent().addClass("active");
   }    
   if (lastId !== id) {
    lastId = id;
    // Set/remove active class
    menuItems1
      .parent().removeClass("active")
      .end().filter("[href='#"+id+"']").parent().addClass("active");
}                      
});

function sticky_relocate() {
  var window_top = $(window).scrollTop();
  var footer_top = $(".site-footer").offset().top;
  var div_top = $('#sticky-anchor').offset().top;
  var div_height = $("#top-menu").height();
  
  var padding = 20;  // tweak here or get from margins etc
  
  if (window_top + div_height > footer_top - padding)
      $('#top-menu').css({top: (window_top + div_height - footer_top + padding) * -1})
  else if (window_top > div_top) {
      $('#top-menu').addClass('stick');
      $('#top-menu').css({top: 0})
  } else {
      $('#top-menu').removeClass('stick');
  }
}

$(function () {
  $(window).scroll(sticky_relocate);
  sticky_relocate();
});

/*-----*/
function sticky_relocate_fun() {
  var windowTop = $(window).scrollTop();
  var footerTop = $("#scrollingBottomPoint").offset().top;
  var divTop = $('#sticky-anchor-fun').offset().top;
  var divHeight = $("#sidescroller").height();
  
  var marginTop = 20;  // tweak here or get from margins etc
  
  if (windowTop + divHeight > footerTop - marginTop)
      $('#sidescroller').css({top: (windowTop + divHeight - footerTop + marginTop) * -1})
  else if (windowTop > divTop) {
      $('#sidescroller').addClass('stick');
      $('#sidescroller').css({top: 0})
  } else {
      $('#sidescroller').removeClass('stick');
  }
}

$(function () {
  $(window).scroll(sticky_relocate_fun);
  sticky_relocate_fun();
});

const second = 1000,
      minute = second * 60,
      hour = minute * 60,
      day = hour * 24;

let countDown = new Date('Aug 9, 2021 00:00:00').getTime(),
    x = setInterval(function() {

      let now = new Date().getTime(),
        distance = countDown - now;
        document.getElementById('days').innerText = Math.floor(distance / (day)),
        document.getElementById('hours').innerText = Math.floor((distance % (day)) / (hour)),
        document.getElementById('minutes').innerText = Math.floor((distance % (hour)) / (minute)),
        document.getElementById('seconds').innerText = Math.floor((distance % (minute)) / second);
      
    }, second)


    $(document).on("change", "input[type='checkbox']", function () {
      $(this).parent()[this.checked ? "addClass" : "removeClass"]("checked");
    });
    

    



