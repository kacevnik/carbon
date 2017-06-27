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

	$("#lightSlider").lightSlider({
        item: 1,
        speed: 400, //ms'
        auto: true,
        loop: true,
        slideEndAnimation: true,
        pause: 5000,
        pauseOnHover: true,
        controls: true,
        prevHtml: '<i class="fa fa-angle-left"></i>',
        nextHtml: '<i class="fa fa-angle-right"></i>'
    });

   $('.row_project_item a').each(function(index ,value){
   		$(this).css({'background-image': 'url('+$(this).find("img").attr("src")+')'})
   });

   $('.row_project_item a').hover(function(){
   		$('.row_project_item a').not(this).stop().animate({'background-size': '100%', 'background-position-x': '0', 'background-position-y': '0'},100);
   		$(this).stop().animate({'background-size': '120%', 'background-position-x': '-30px', 'background-position-y': '-30px'},100);
   });

   $('.row_project').mouseleave(function(){
   		$('.row_project_item a').stop().animate({'background-size': '100%', 'background-position-x': '0', 'background-position-y': '0'},100);
   });


   $('#top-nav li .sub-menu li').hover(function(){
      $('#top-nav li .sub-menu li .sub-menu').each(function(index ,value){
        $(this).css({'left': $(this).parent().parent().width()+'px'});
        $(this).offset({top: $(this).parent().parent().offset().top});
     });
   });


});