jQuery(document).ready(function ($) {		
	$('.header_left').append('<div class="bottom_line"></div>');
	$('.bottom_line').width($('.top-menu >.current-menu-item').width()-20+'px');

	$('.top-menu >.menu-item').hover(function(){
		var a = $(this).offset();
		var t = $('.top-menu').offset();
		$('.bottom_line').stop().animate({'width': $(this).width()-20+'px', 'left': a.left-t.left}, 100);
	});

	$('.top-menu').mouseleave(function(){
		var c = $('.top-menu >.current-menu-item').width()-20+'px';
		var a = $('.top-menu >.current-menu-item').offset();
		var t = $('.top-menu').offset();
		$('.bottom_line').stop().animate({width: c, left: a.left-t.left}, 100);
	});
	
});