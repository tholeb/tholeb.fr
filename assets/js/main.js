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

/* Resize images */

$(document).ready(function() {
  $('.resize_large').each(function() {
      var maxWidth = 500; // Max width for the image
      var maxHeight = 500;    // Max height for the image
      var ratio = 0;  // Used for aspect ratio
      var width = $(this).width();    // Current image width
      var height = $(this).height();  // Current image height

      // Check if the current width is larger than the max
      if(width > maxWidth){
          ratio = maxWidth / width;   // get ratio for scaling image
          $(this).css("width", maxWidth); // Set new width
          $(this).css("height", height * ratio);  // Scale height based on ratio
          height = height * ratio;    // Reset height to match scaled image
          width = width * ratio;    // Reset width to match scaled image
      }

      // Check if current height is larger than max
      if(height > maxHeight){
          ratio = maxHeight / height; // get ratio for scaling image
          $(this).css("height", maxHeight);   // Set new height
          $(this).css("width", width * ratio);    // Scale width based on ratio
          width = width * ratio;    // Reset width to match scaled image
          height = height * ratio;    // Reset height to match scaled image
      }
  });
});

$(document).ready(function() {
  $('.resize_small').each(function() {
      var maxWidth = 300; // Max width for the image
      var maxHeight = 300;    // Max height for the image
      var ratio = 0;  // Used for aspect ratio
      var width = $(this).width();    // Current image width
      var height = $(this).height();  // Current image height

      // Check if the current width is larger than the max
      if(width > maxWidth){
          ratio = maxWidth / width;   // get ratio for scaling image
          $(this).css("width", maxWidth); // Set new width
          $(this).css("height", height * ratio);  // Scale height based on ratio
          height = height * ratio;    // Reset height to match scaled image
          width = width * ratio;    // Reset width to match scaled image
      }

      // Check if current height is larger than max
      if(height > maxHeight){
          ratio = maxHeight / height; // get ratio for scaling image
          $(this).css("height", maxHeight);   // Set new height
          $(this).css("width", width * ratio);    // Scale width based on ratio
          width = width * ratio;    // Reset width to match scaled image
          height = height * ratio;    // Reset height to match scaled image
      }
  });
});
