$(function() {
	$('#images > div').each(function() {
		var $cfs = $(this);
		$cfs.carouFredSel({
			direction: 'up',
			circular: false,
			infinite: false,
			auto: false,
			scroll: {queue: 'last'},
			items: {visible: 1,width: 292,height: 292}
		});
		$cfs.hover(
			function() {$cfs.trigger('next');},
			function() {$cfs.trigger('prev');}
		);
	});
});

$(document).ready(function() {
	$(".fancybox-thumb").fancybox({
		prevEffect	: 'none',
		nextEffect	: 'none',
		showNavArrows : 'true',
		helpers	: {
			title	: {type: 'outside'},
			thumbs	: {width: 50,height: 50}
		}
	});
	$('ul.nav li.dropdown').hover(function() {$(this).find('.dropdown-menu').stop(true, true).delay(100).fadeIn(400);}, 
		function() {$(this).find('.dropdown-menu').stop(true, true).delay(100).fadeOut(400);});
	$('.open-modal').click(function(){$('#modal-zakaz').modal('show');});
	$("#tel").mask("+7 (999) 999-9999");
//Back To Top	
	var offset = 300,
		offset_opacity = 1200,
		scroll_top_duration = 700,
		$back_to_top = $('.cd-top');
	$(window).scroll(function(){
		( $(this).scrollTop() > offset ) ? $back_to_top.addClass('cd-is-visible') : $back_to_top.removeClass('cd-is-visible cd-fade-out');
		if( $(this).scrollTop() > offset_opacity ) {$back_to_top.addClass('cd-fade-out');}
	});
	$back_to_top.on('click', function(event){
		event.preventDefault();
		$('body,html').animate({scrollTop: 0 ,}, scroll_top_duration);
	});
});