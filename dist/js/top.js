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

   //sp-400以下タブ切り替え
   $(function() {
    var w = $(window).width();
    var x = 414;
    if (w <= x) {
      $(function(){
        $('#step2-tab h2').click(function() {
          var index = $('#step2-tab h2').index(this);
          $('#triangle-a2').css('display','none');
          $('#triangle-a2').eq(index).css('display','block');
          $('#triangle-b2').css('display','block');
          $('#triangle-b2').eq(index).css('display','none');
          $('#step-text-2 p').css('display','none');
          $('#step-text-2 p').eq(index).css('display','block');
          // $('#step2-tab h2').removeClass('select');
          //
          // $(this).addClass('select');
        });

        $('#step3-tab h2').click(function() {
          var index = $('#step3-tab h2').index(this);
          $('#triangle-a3').css('display','none');
          $('#triangle-a3').eq(index).css('display','block');
          $('#triangle-b3').css('display','block');
          $('#triangle-b3').eq(index).css('display','none');
          $('#step-text-3 p').css('display','none');
          $('#step-text-3 p').eq(index).css('display','block');
        });

        $('#step5-tab h2').click(function() {
          var index = $('#step5-tab h2').index(this);
          $('#triangle-a5').css('display','none');
          $('#triangle-a5').eq(index).css('display','block');
          $('#triangle-b5').css('display','block');
          $('#triangle-b5').eq(index).css('display','none');
          $('#step-text-5 p').css('display','none');
          $('#step-text-5 p').eq(index).css('display','block');
        });

        $('#step6-tab h2').click(function() {
          var index = $('#step6-tab h2').index(this);
          $('#triangle-a6').css('display','none');
          $('#triangle-a6').eq(index).css('display','block');
          $('#triangle-b6').css('display','block');
          $('#triangle-b6').eq(index).css('display','none');
          $('#step-text-6 p').css('display','none');
          $('#step-text-6 p').eq(index).css('display','block');
        });
      });
    }
});

// $('.triangle-accent').css('display','none');
//
// $('.triangle-accent').eq(index).css('display','block');
//
// $('.triangle-base').css('display','block');
//
// $('.triangle-base').eq(index).css('display','none');

// $('.tab h2').removeClass('select');
//
// $(this).addClass('select');


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
