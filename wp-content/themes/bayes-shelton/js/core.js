function toTop() {
  $("html, body").animate({ scrollTop: 0 }, "slow");
  return false;
}

$(document).ready(function() {

$('.contact-btn').click(function() {
  $('#contact-box').addClass('show-contact');
});

$('.search-btn').click(function() {
  $('#search-box').addClass('show-search');
  $('#search-box input').focus();
});

$('.close-me').click(function() {
  $('#contact-box').removeClass('show-contact');
  $('#search-box').removeClass('show-search');
  $('#search-box input').val('');
});

// media query event handler
if (matchMedia) {
	var mq = window.matchMedia("(min-width: 500px)");
	mq.addListener(WidthChange);
	WidthChange(mq);
}

// media query change
function WidthChange(mq) {

	if (mq.matches) {

 
    $('.header').waypoint('sticky');
    	if ($('body').hasClass('plain') === true) {
    		$.stellar({
  				horizontalOffset: 0,
  				verticalOffset: 0
});
    	} else {

    		$.stellar({
  				horizontalOffset: 0,
  				verticalOffset: 310
});
		$('#header').outerHeight($(window).outerHeight())
	}
		$('.some-area').waypoint(function(direction) {
			
   $(this).toggleClass('show')

   if ($(this).hasClass('gh')) {
   $('.progress-bar').each(function() {
     var test = $(this).find('.texter').text()
   
        $(this).animate({width: test  + "%" }, 1500)
        });
   } else {

	


   }
}, { offset: $(window).outerHeight() });


	}
	else {
		$('.header').addClass('stuck');
			$('.progress-bar').each(function() {
     var test = $(this).find('.texter').text()
   
        $(this).animate({width: test  + "%" }, 1500)
        
        
     
});
	}


}



});


