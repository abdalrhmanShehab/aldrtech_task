$(document).ready(function(){
	$('.featured ul li').click(function(){
		$(this).addClass('active').siblings().removeClass('active');
		if ($(this).data('class') === 'all'){
			$('.shuf').css('opacity', 1);
		}else{
			$('.shuf').css('opacity', '0.2');
			$($(this).data('class')).parent().css('opacity', 1);
		}
	});


	$('.clients img').click(function(){
		$(this).addClass('activepar').siblings().removeClass('activepar');
		if ($(this).data('class') === 'activepar'){
			$('.par').css('display', 'block');
		}else{
			$('.par').css('display', 'none');
			$($(this).data('class')).parent().css('display', 'block');
		}
	});
});