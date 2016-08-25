// JavaScript Document

$(function () {
	var browserWidth = $(window).width();
	
		$(".drop_active").on("click", function() {
				
				if(browserWidth >= 960){
			
				return false;
			
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
		
});