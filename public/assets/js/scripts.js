
 $(document).ready(function () {
						$('#business_contact').usPhoneFormat({
							format: '(xxx) xxx-xxxx',
						});
						
						
		 });


$(".form-con").click(function(){
	if($(this).is(":checked")){
		$(this).val(1);
	}else{
		$(this).val(0);
	}
})

    (function($) {
    "use strict";

    // Add active state to sidbar nav links
    var path = window.location.href; // because the 'href' property of the DOM element is the absolute path
        $("#layoutSidenav_nav .sb-sidenav a.nav-link").each(function() {
            if (this.href === path) {
                $(this).addClass("active");
            }
        });

    // Toggle the side navigation
    $("#sidebarToggle").on("click", function(e) {
        
        $("body").toggleClass("sb-sidenav-toggled");
    });
	


   $(function() {
$("#inputFrom").datepicker({
        todayBtn:  1,
        autoclose: true,
    }).on('changeDate', function (selected) {
        var minDate = new Date(selected.date.valueOf());
        $('#inputTo').datepicker('setStartDate', minDate);
    });
	
	 $("#inputTo").datepicker()
        .on('changeDate', function (selected) {
            var maxDate = new Date(selected.date.valueOf());
            $('#inputFrom').datepicker('setEndDate', maxDate);
        });

	
   });
   
	
	
    $(".dropdown-menu a").click(function(e){
        e.preventDefault()
        var selText = $(this).text();
        $(this).parents('.btn-group').find('.dropdown-toggle').html(selText+' <span class="caret"></span>');
    });
	
	function createOptions(number) {
  var options = [], _options;

  for (var i = 0; i < number; i++) {
    var option = '<option value="' + i + '">Option ' + i + '</option>';
    options.push(option);
  }

  _options = options.join('');
  
  $('#number')[0].innerHTML = _options;
  $('#number-multiple')[0].innerHTML = _options;

  $('#number2')[0].innerHTML = _options;
  $('#number2-multiple')[0].innerHTML = _options;
}

var mySelect = $('#first-disabled2');

createOptions(4000);

$('#special').on('click', function () {
  mySelect.find('option:selected').prop('disabled', true);
  mySelect.selectpicker('refresh');
});

$('#special2').on('click', function () {
  mySelect.find('option:disabled').prop('disabled', false);
  mySelect.selectpicker('refresh');
});

$('#basic2').selectpicker({
  liveSearch: true,
  maxOptions: 1
});



})(jQuery);




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
	
		