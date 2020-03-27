/* Scroll-indicator */
$(window).scroll(function() {
  var wintop = $(window).scrollTop(),
    docHeight = $(document).height(),
    winHeight = $(window).height();

  var scrolledprct = (wintop / (docHeight - winHeight)) * 100;
  var scrolled = (wintop / (docHeight - winHeight));

  if($(this).scrollTop() > 937) {
    $('#scroll-button').css({'opacity': scrolled});
    $('#scroll-button').css({'display': 'block'});
  } else {
    $('#scroll-button').css({'opacity': '0'});
    $('#scroll-button').css({'display': 'none'});
  }
  $(".scroll-line").css("width", scrolledprct + "%");
});

function scrollToTop() {
		$("html, body").animate({scrollTop : 0},700);
		return false;
	}

$(document).ready(function() {
  setTimeout(function() {
    $("body").addClass("loaded");
  }, 500);
});
