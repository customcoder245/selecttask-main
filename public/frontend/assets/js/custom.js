$(".step-btn").click(function(){
	var next_step=$(this).data("next");
	if(next_step=="step2"){
		if($(".select_cat").val() ==''){
			  $("#postTaskModal").modal('show');
			  return false;
		}
		if($('body').hasClass('services_window')){
			$("#taskPostspmodel").modal('show');
			  return false;
		}
		
	}
	if(next_step=="step3"){
     var ids=0;
		if($("#business_address_add2").val() == ""){
           
           

			$("#taskPostModal").modal('show');
			  return false;
		}else{
               
             
                  var address=$("#business_address_add2").val();

							 var str1 = address;
				             var str2 = "ny";
                             var str3='NY';
								if((str1.indexOf(str2) != -1) || (str1.indexOf(str3) != -1)){
								
								}else{
                                $("#invalidlocation").modal("show");
							   $("#business_address_add2").val('');	
                              return false;
                                     }

        

          }
        console.log(ids);
         if(ids==1){
              return false;
          }

	}
	if(next_step=="complete"){
		console.log(next_step);
		if($(this).data('status')=="NO"){
			$("#postTaskloginModal").modal('show');
			return false;
		}else{
			$(".frontend_form_post").submit();
		}
	}
	
	$(".postTaskSection").hide();
	$("."+next_step).show();
	
	 $('html, body').animate({
        scrollTop: $("."+next_step).offset().top
    }, 2000);
});	

$("#invalidlocation").find("a").click(function(){
$(".postTaskSection").hide();
$(".step2").show();
})
function validateEmail(email) {
   var regex = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
  if(regex.test(email)) {
    return true;
  }else{
    return false;
  
}
}
$(".form-group").find("input[type=email]").after('<p class="sign-up-email_error"></p>');
/* $(".form-group").find("input[type=email]").on("blur",function(){
	 var email=$(this).val();
	 
	if(!validateEmail(email)){
		
								 $(".sign-up-email_error").text("Please Enter valid email Address");
                                
							   return false							
 							}else{
								
								 $(".sign-up-email_error").text("");
							} 
}) */



$("#agreeTextCheck").click(function(){
	if($(this).is(":checked")){
		$(".register_now").prop("disabled",false);
	}else{
		$(".register_now").prop("disabled",true);
	}
});

$("#agreeTextChecksp").click(function(){
	if($(this).is(":checked")){
		$(".register_now").prop("disabled",false);
	}else{
		$(".register_now").prop("disabled",true);
	}
});
 

$(".divFun").click(function(){
		
	var toption=$(this).val();
	$(".selectt").hide(1000);
	$("."+toption).show(1000);
})


$(".get_start_btn").click(function(e){
	e.preventDefault();
	if($("body").hasClass("customer_window")){
		
		$("#getstartmodelcustomer").modal("show");
	}else if($("body").hasClass("services_window")){
		$("#getstartmodelsp").modal("show");
	}else{
		$("#getstartmodel").modal('show');
	}
});




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
  
  

$(".user_type_cus").on('change',function(){
	if($(this).val()=="customer"){
		$(".subtitle_text").text('Sign up to start hearing from service providers.');
	}else if($(this).val()=="service_provider"){
		$(".subtitle_text").text('Sign up to start hearing from Customers.');
	}else{
      $(".subtitle_text").text('');
     }
	
});





/********************************/  


$(document).ready(function () {
						$('#r_phone').usPhoneFormat({
							format: '(xxx) xxx-xxxx',
						});
		});
		
		$(document).ready(function () {
						$('#sp_phone').usPhoneFormat({
							format: '(xxx) xxx-xxxx',
						});
		});
		$(document).ready(function () {
						$('#phone_number').usPhoneFormat({
							format: '(xxx) xxx-xxxx',
						});
		});$(document).ready(function () {
						$('#phone_numbersp').usPhoneFormat({
							format: '(xxx) xxx-xxxx',
						});
		});
		
      $(document).ready(function () {
						$('#phone_numbercustomer').usPhoneFormat({
							format: '(xxx) xxx-xxxx',
						});
		});
		
		$(document).ready(function () {
						$('.phone_number').usPhoneFormat({
							format: '(xxx) xxx-xxxx',
						});
		});




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



/**************************   date picker *****************/

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
	

/******************************/

$('.input-images-1').imageUploader();

        let preloaded = [
            {id: 1, src: 'https://picsum.photos/500/500?random=1'},
            {id: 2, src: 'https://picsum.photos/500/500?random=2'},
            {id: 3, src: 'https://picsum.photos/500/500?random=3'},
            {id: 4, src: 'https://picsum.photos/500/500?random=4'},
            {id: 5, src: 'https://picsum.photos/500/500?random=5'},
            {id: 6, src: 'https://picsum.photos/500/500?random=6'},
        ];


/*********************************/


$("#checkinput").click(function(){
	if($(this).is(":checked")){
		$(".step5-btn").prop("disabled",false);
	}else{
		$(".step5-btn").prop("disabled",true);
	}
	
});


   
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

      $(".navbar-toggler").click(function(){
        $(".site-header").toggleClass("openMenuMob");
      });
});

    

   // Init WOW.js and get instance
//wow = new WOW({
 //  boxClass: 'wow', // default
   //animateClass: 'animated', // default
  // offset: 100, // default
  // mobile: true, // default
  // live: true // default
  
 //})
 //wow.init();
 
 $(function () {
  $('.footer-item h5').click(function () {
      $(this).toggleClass('active');
      $(this).siblings('.footer-nav').slideToggle('fast')
  })
})

const $dropdown = $(".dropdown");
const $dropdownToggle = $(".dropdown-toggle");
const $dropdownMenu = $(".dropdown-menu");
const showClass = "show";

$(window).on("load resize", function() {
  if (this.matchMedia("(min-width: 768px)").matches) {
    $dropdown.hover(
      function() {
        const $this = $(this);
        $this.addClass(showClass);
        $this.find($dropdownToggle).attr("aria-expanded", "true");
        $this.find($dropdownMenu).addClass(showClass);
      },
      function() {
        const $this = $(this);
        $this.removeClass(showClass);
        $this.find($dropdownToggle).attr("aria-expanded", "false");
        $this.find($dropdownMenu).removeClass(showClass);
      }
    );
  } else {
    $dropdown.off("mouseenter mouseleave");
  }
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

$("#term_policy").click(function(){
	if($(this).is(":checked")){
		$(".siginup_btn").prop("disabled",false);
	}else{
		$(".siginup_btn").prop("disabled",true);
	}
	
});


/*-----*/
function sticky_relocate_fun() {
  var windowTop = $(window).scrollTop();
  var footerTop = $("#scrollingBottomPoint").offset().top;
  var divTop = $('#sticky-anchor').offset().top;
  var divHeight = $("#sidescroller-menu").height();
  
  var marginTop = 20;  // tweak here or get from margins etc
  
  if (windowTop + divHeight > footerTop - marginTop)
      $('#sidescroller-menu').css({top: (windowTop + divHeight - footerTop + marginTop) * -1})
  else if (windowTop > divTop) {
      $('#sidescroller-menu').addClass('stick');
      $('#sidescroller-menu').css({top: 0})
  } else {
      $('#sidescroller-menu').removeClass('stick');
  }
}

$(function () {
  $(window).scroll(sticky_relocate_fun);
  sticky_relocate_fun();
});

if (document.documentElement.clientWidth < 767) {
  $('.collapse').on('shown.bs.collapse', function(e) {
    var $card = $(this).closest('.cmsContent-section, .servicesLinks, .otherLinks');
    $('html,body').animate({
      scrollTop: $card.offset().top
    }, 500);
  });  
}

 $(document).ready(function () {
						$('#business_contact').usPhoneFormat({
							format: '(xxx) xxx-xxxx',
						});
						
						
		 });
		 
