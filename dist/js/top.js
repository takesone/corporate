// JavaScript Document
//header-menu部分
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
    twitterタイトル部分
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

    //sp-menu部分
    $(function() {
      $('#nav-toggle').click(function(){
          $('header').toggleClass('open-nav');
      });
    });

    //Q&Aドロップダウン
    $(".question").on("click", function() {
  		var drop = $(this).find('.question-text');
  		drop.slideToggle()
  		.toggleClass("active");
	 });

})(jQuery);

//top動画部分
var tag = document.createElement('script');
tag.src = "https://www.youtube.com/iframe_api";
var firstScriptTag = document.getElementsByTagName('script')[0];
firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

var player;
function onYouTubeIframeAPIReady() {
  player = new YT.Player('player', {
    videoId: 'xvE7ztEbDjU',
    wmode: 'transparent',
    loop: '1',
    playerVars:{
      'loop': '1',
      'rel': '0',
      'playlist': 'xvE7ztEbDjU',
      'showinfo': '0',
      'controls': '0',
      'modestbranding':'0',
      'autoplay': '1',
      'disablekb': '1'
    },
    events: {
      'onReady': onPlayerReady,
      'onStateChange': onPlayerStateChange
    }
  });
}
function onPlayerReady(event) {
  event.target.mute();
}
function onPlayerStateChange(event) {
}
