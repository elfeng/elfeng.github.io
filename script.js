$(document).ready(function(){

	$('.thumbnail').hover(
		function(){
			$(this).find('.caption').fadeIn(250);
		},
		function(){
			$(this).find('.caption').fadeOut(205);
		}
  );
  
  jQuery('.skillbar').each(function(){
		jQuery(this).find('.skillbar-bar').animate({
			width:jQuery(this).attr('data-percent')
		},6000);
	});
  
  var contactform =  document.getElementById('contactForm');
    contactform.setAttribute('action', '//formspree.io/' + 'eleanor52' + '@' + 'live' + '.' + 'ca');
  
});	