$(document).ready(function () {
	$('#featured').easyAccordion({ 
			autoStart: true, 
			slideInterval: 3000,
			slideNum:false	
	});

	$('#menu-page-menu li').hover(function(e) {
		e.preventDefault();
		$(this).find('ul:first').css({visibility: 'visible', display: 'none'}).slideDown(200);
	}, function() {
		$(this).find('ul:first').slideUp(200);
	});

	$('.tab-content:not(:first)').hide();
	$('.tabs li a').click(function() {
		$('.tabs li a').removeClass('active');
		$(this).addClass('active');
		var contentId = $(this).attr('href');
		$('.tab-content').hide();
		$(contentId).fadeIn();
		return false;
	});
	
	// $('#accordion-2').easyAccordion({ 
	// 		autoStart: false	
	// });
	
	// $('#accordion-3').easyAccordion({ 
	// 		autoStart: true,
	// 		slideInterval: 5000,
	// 		slideNum:false	
	// }); 
	
	// $('#accordion-4').easyAccordion({ 
	// 		autoStart: false,
	// 		slideInterval: 5000
	// }); 
});