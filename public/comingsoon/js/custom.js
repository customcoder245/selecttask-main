 
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

let countDown = new Date('Oct 31, 2021 00:00:00').getTime(),
    x = setInterval(function() {

      let now = new Date().getTime(),
        distance = countDown - now;
        document.getElementById('days').innerText = Math.floor(distance / (day)),
        document.getElementById('hours').innerText = Math.floor((distance % (day)) / (hour)),
        document.getElementById('minutes').innerText = Math.floor((distance % (hour)) / (minute)),
        document.getElementById('seconds').innerText = Math.floor((distance % (minute)) / second);
      
    }, second)

    



