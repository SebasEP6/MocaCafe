$(document).ready(function () {
	$('#prev').click(function () {

	});

	$('#next').click(function () {
		var size = $('#s-header').find('.pic').size();
		$('#s-header').find('.pic').each(function (index, value) {
			setTimeout(function () {
					if ($(value).hasClass('s-active'))
				{
					if ((index + 1) < size)
					{
						$($('.s-header').find('.pic').get(index+1)).fadeIn();
						$($('.s-header').find('.pic').get(index+1)).addClass('s-active');
						return false;
					}
					else
					{
						$($('.s-header').find('.pic').get(0)).fadeIn();
						$($('.s-header').find('.pic').get(0)).addClass('s-active');
						return false;
					}

					$(value).fadeOut();
					$(value).removeClass('s-active');
				}
			}, 5000);
		});
	});
});