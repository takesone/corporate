// JavaScript Document

$(function () {
	var browserWidth = $(window).width();

	$(".question").on("click", function() {

		var drop = $(this).find('.question_text');

		drop.slideToggle()
		.toggleClass("active");

	});


	$(".drop_active").on("click", function() {

		if(browserWidth >= 960){

		}

		var drop = $('.response_drop');

		drop.slideToggle()
		.toggleClass("active");

	});

	$(window).on('load resize', function(){
		browserWidth = $(window).width();

		if (browserWidth >= 960){

			$('.response_drop').slideDown();

		}else{

			$('.response_drop').slideUp();

		}

	});



	$(".question").on("click", function() {
		// activeが存在する場合

var plus = $(this).find('.accordion_icon');

		if ($(plus).hasClass('active')) {
			// activeを削除
			$(plus).removeClass('active');
		}
		else {
			// activeを追加
			$(plus).addClass('active');
		}

	});

});
