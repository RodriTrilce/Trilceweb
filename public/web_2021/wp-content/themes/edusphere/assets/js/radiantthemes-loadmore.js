jQuery(function ($) {
	$('.radiantthemes_loadmore').click(function () {
		var str = $("#style").val();
		var button = $(this),
			data = {
				'action': 'loadmore',
				'query': radiantthemes_loadmore_params.posts,
				'page': radiantthemes_loadmore_params.current_page,
				'style': str
			};
		$.ajax({
			url: radiantthemes_loadmore_params.ajaxurl,
			data: data,
			type: 'POST',
			beforeSend: function (xhr) {
				$('.t').show();
				button.html('<img src="/wp-content/themes/edusphere/assets/images/loder.svg">');
			},
			success: function (data) {
				if (data) {
					$('.t').hide();
					$(".rt_item").hide().append(data).fadeIn();
					button.text('load more').prev().after(data);
					radiantthemes_loadmore_params.current_page++;
					if (radiantthemes_loadmore_params.current_page == radiantthemes_loadmore_params.max_page)
						button.remove();
				} else {
					button.remove();
					$(".radiantthemes_loadmore_item").append("<p>No More Course to Display.</p>");
				}
			}
		});
	});
});