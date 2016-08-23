// JavaScript Document
(function($) {
    $(function() {
        var $header = $('#top-head');
        $(window).scroll(function() {
            if ($(window).scrollTop() > 600) {
                $header.addClass('fixed');
            } else {
                $header.removeClass('fixed');
            }
        });
    });

    /*
    $(window).load(function() {
        function changeWidget() {
            var twFrame = $('iframe.twitter-timeline');
            if (twFrame.length > 0) {
                twFrame.contents()
                    .find('h1').text('すなすなのツイート')
                    .css('font-size','16px');
            } else {
                setTimeout(changeWidget, 500);
            }
        }
        changeWidget();
    });
    */

    $(function() {
      $('#nav-toggle').click(function(){
          $('header').toggleClass('open-nav');
      });
    });

    $(".question").on("click", function() {

  		var drop = $(this).find('.question-text');

  		drop.slideToggle()
  		.toggleClass("active");

	 });


})(jQuery);
