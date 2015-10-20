function closeMenu(event) {
		event.preventDefault();
		$('.navegador-container').removeClass('in');
		$('.backdrop-menu').animate({'opacity':0},'fast',function()
		{
			$(this).hide();	
		});
		$('.to-activate').removeClass('active')
		if (!$('.page-footer').hasClass('second-page')) {
			$('.page-footer').stop().fadeOut(250);
			
		};
}
function cambiarFondo()
{
	var origin = ['0% 0% 0px','0% 100% 0px','100% 0% 0px','100% 100% 0px','50% 50% 0px'];
	var option = [4,1,3,0,4,3,2,1,2,0];
	var rand = Math.ceil(Math.random()*10);
	
	if ($('.front').next().length > 0) {

		$('.front').removeClass('front').addClass('back').next('div').removeClass('back').addClass('front');
		
	}else
	{
		$('.front').removeClass('front').addClass('back');
		$('.carousel').children('div:first-child').addClass('front').removeClass('back')

	}
	$('.front').css({
			'transform-origin' : origin[option[rand]]
		});
}
if ($(window).width() > 991) {
	setInterval(cambiarFondo, 10000);
	
};
jQuery(document).ready(function($) {
	$('.parallax').parallax();
	$('.btn-menu').on('click', function(event) {
		event.preventDefault();
		$('.navegador-container').addClass('in');
		$('.backdrop-menu').show().animate({'opacity':1},'fast');
		$('.to-activate').addClass('active')
		if ($('.page-footer').hasClass('second-page')) {
			$('.page-footer').stop().fadeIn(500);
			
		};
	});
	$('.close-menu').on('click', closeMenu);
	$('.backdrop-menu').on('click', closeMenu);
	$(window).on('scroll', function(event) {
		$('.page-footer').stop().fadeOut(250,function() {
			if ($(window).scrollTop() <= 0 || $(window).scrollTop() == (parseInt($(document).height()) - parseInt($('.s4').height())+1)) {
				setTimeout(function() {
					$('.page-footer').stop().fadeIn(500);
				},2000)
				
			};
		});
	});
	$('.sendEmail').on('click', function(event) {
		event.preventDefault();
		var proceed = 1;
		dataPost = {
			'pais'    : $('.pais').val(),
			'nombre'  : $('.nombre').val(),
			'email'   : $('.email').val(),
			'msg'     : $('.msg').val(),
		};
		$('.form-validate').each(function(index, el) {
			if ($(el).val() == "") {
				Materialize.toast($(el).data('title'), 4000) 
				proceed = 0;
			}
		});
		//Utilizamos una expresion regular
	    var regex = /[\w-\.]{2,}@([\w-]{2,}\.)*([\w-]{2,}\.)[\w-]{2,4}/;
	    //Se utiliza la funcion test() nativa de JavaScript
	    if (!regex.test($('.email').val().trim()))
	    {
		  Materialize.toast($('.email').data('email-malo'), 4000) 
	      proceed = 0;
	    }
		if (proceed == 1) {
			$.ajax({
				//server
				//url: 'http://felipe.tecnographic.com.ve/enviar-email',
				//aqui
				url: 'http://localhost/felipe/public/enviar-email',
				type: 'POST',
				dataType: 'json',
				data: dataPost,
				beforeSend:function()
				{
					$('.form-validate').attr('disabled',true);
					$('.sendEmail').addClass('disabled')
					$('.preloader-wrapper').addClass('active');
				},
				success:function(response)
				{

					$('.form-validate').attr('disabled',false);
					$('.sendEmail').removeClass('disabled')
					$('.preloader-wrapper').removeClass('active')
					if (response.type == 'danger') {
						$.each(response.data, function(index, val) {
							  Materialize.toast(val, 6000) 
						});
					}else
					{
						Materialize.toast($('.sendEmail').data('success-msg'), 3000, 'rounded') 
					}
				}
			})
		};
	});
	$('.porta-item').on('click', function(event) {
		event.preventDefault();
		$('.porta-item.active').removeClass('active');
		$(this).addClass('active')
		$('.cont3').stop().fadeOut('fast', function() {
			$('.cont3').css('background-image','url('+$('.porta-item.active').data('src')+')').stop().fadeIn('fast');
		});
	});
});