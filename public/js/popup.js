$(function()
{
	$('a.poplight').on('click', function(e)
	{
		e.preventDefault(); 

		var popID = $(this).attr('rel');

		$('#'+popID).fadeIn().css('width', '1000px');
		$('a.close').fadeIn();

		var popMargTop = ($('#' + popID).height() + 80) / 2;
		var popMargLeft = ($('#' + popID).width() + 80) / 2;

		$('#' + popID).css({'margin-top' : -popMargTop, 'margin-left' : -popMargLeft});

		$('body').append('<div id="fade"></div>');
		$('#fade').css({'filter' : 'alpha(opacity=80)'}).fadeIn();
	});

	$('body').on('click', 'a.close, #fade', function(e) { 			
		e.preventDefault();
		$('#fade, .popup_block').fadeOut(function()
		{
			$('#fade').remove();
			$('a.close').fadeOut();
		});
	});
});