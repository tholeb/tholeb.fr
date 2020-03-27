/* Scroll-indicator */
$(window).scroll(function() {
  var wintop = $(window).scrollTop(),
    docHeight = $(document).height(),
    winHeight = $(window).height();

  var scrolledprct = (wintop / (docHeight - winHeight)) * 100;
  var scrolled = (wintop / (docHeight - winHeight));

  $('#scroll-button').css({'opacity': scrolled});
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
