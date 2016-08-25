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
