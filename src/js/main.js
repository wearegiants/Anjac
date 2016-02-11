// @codekit-prepend "site/default-ui.js"

function carouselSizing(){
  $(".carousel").royalSlider({
    //autoScaleSlider: true,
    //autoScaleSliderWidth: 800,
    //autoScaleSliderHeight: 400,
    imageScaleMode: 'fill',
    transitionType: 'fade',
    transitionSpeed: 2000,
    controlNavigation : 'none',
    autoPlay: {
      enabled: true,
      delay: 2000
    }
  });
}

function mobileMenu(){
	// Clone that thing
	var a = $('#header-navigation').html();
	var b = $('#mobile-menu_container').html(a);
	$('#mobile-menu_container a').removeClass('btn-nav').addClass('btn-mobile');
	$(".mobile-toggle").swap();
}

$(document).ready(function(){
	mobileMenu();
  carouselSizing();
});