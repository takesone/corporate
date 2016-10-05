<?php /* Template Name: Top */ ?>
<!doctype html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/dist/css/html5reset-1.6.1.css">
  <link rel="stylesheet" type="text/css" href="http://mplus-fonts.sourceforge.jp/webfonts/basic_latin/mplus_webfonts.css">
  <link rel="stylesheet" type="text/css" href="http://mplus-fonts.sourceforge.jp/webfonts/general-j/mplus_webfonts.css">
  <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/dist/css/swiper.min.css">
  <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/dist/css/lity.min.css">
  <!-- <link rel="stylesheet" type="text/css" href="css/style.css"> -->
  <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/dist/css/style.css">
  <title>Take's One</title>
</head>

<body>
  <!-- top -->
  <div class="top">
    <!-- header -->
    <header id="top-head">
      <!-- webサイトメニュー -->
      <p class="headmenu-logo"><a href="/"><img src="<?php bloginfo('template_directory'); ?>/dist/img/menu_logo.png" alt="Take's One" height="40"></a></p>

      <div id="nav-toggle">
        <div>
          <span></span> <span></span> <span></span>
        </div>
      </div><!--#navToggleここまで-->

      <nav class="head-nav">
        <ul>
          <li><a href="/about/">ABOUT</a></li>
          <li><a href="/qa/">Q&amp;A</a></li>
          <!--li><a href="#">CAMPANY</a></li-->
          <!--li><a href="#">NEWS</a></li-->
          <!--li><a href="#">BLOG</a></li-->
          <!--li>
            <a href="#" class="pc-none">
              <p>カメラ掲載はこちら</p>
            </a>
          </li-->
        </ul>
      </nav>

      <!--a href="#" class="top-btn">
        <img src="<?php bloginfo('template_directory'); ?>/dist/img/btn-head.png" alt="" class="btn-white">
        <img src="<?php bloginfo('template_directory'); ?>/dist/img/btn-head-blue.png" alt="" class="btn-blue">
      </a-->

    </header><!-- headerここまで -->

    <!-- top動画 -->
    <div class="top-bgv-wrap">
      <div class="yt-video">
        <div id="player" class="yt-video"></div>
      </div>
    </div><!--top動画ここまで -->

    <div class="top-head-content">
      <div class="">
        <!-- Toplogo -->
        <h1 class="top-logo"><img src="<?php bloginfo('template_directory'); ?>/dist/img/top_logo.png" alt="Take's One"></h1>
        <!--<h1 class="logo"><img src="<?php bloginfo('template_directory'); ?>/dist/img/top_logo.png" alt="Take's One"></h1> -->
        <p class="font-L">気軽に誰でも撮影機材をシェアできるサービス</p>
        <!-- playBtn -->
        <div class="btn-play-wrap">
          <a href="//www.youtube.com/watch?v=7SN21Ma65hQ" class="btn-play" data-lity="data-lity">PLAY</a>
        </div>
        <!-- appBtn -->
        <!--div class="btn-app-wrap">
          <a href="#" class="btn-app"><img src="<?php bloginfo('template_directory'); ?>/dist/img/appBtn.png" alt="app"></a>
          <a href="#" class="btn-app google"><img src="<?php bloginfo('template_directory'); ?>/dist/img/google-play-badge.png" alt="googleplay"></a>
        </div-->
        <div class="btn-app-wrap">
          <span class="btn-app"><img src="<?php bloginfo('template_directory'); ?>/dist/img/comming.png" alt="app"></span>
          <span class="btn-app google"><img src="<?php bloginfo('template_directory'); ?>/dist/img/comming2.png" alt="googleplay"></span>
        </div>
      </div>
    </div>

  </div><!-- Topここまで -->

  <!-- wrapper -->
  <div class="contents-wrapper">
    <!-- news設定 -->
    <section class="news-wrap">
      <h2 class="title">NEWS</h2>
      <div class="news-list-box">
        <ul class="news-list">
          <?php /*
          $args = array( 'posts_per_page' => 10, 'order'=> 'ASC', 'orderby' => 'title', 'post_type' => 'news' );
          $postslist = get_posts( $args );
          foreach ( $postslist as $post ) :
            setup_postdata( $post ); ?>
            <li class="news-item">
              <a href="#">
                <time class="date" datetime="2016-07-21"><?php the_date(); ?></time>
                <span class="list-title"><?php the_title(); ?>   </span>
              </a>
            </li>
          <?php
          endforeach;
          wp_reset_postdata();*/
          ?>
          <li class="news-item">
            <!--a href="#"-->
              <time class="date" datetime="2016-09-24">2016年09月24日</time>
              <span class="list-title">ランディングページを公開しました</span>
            <!--/a-->
          </li>
        </ul>
      </div>
    </section><!-- newsここまで -->

    <!-- service設定 -->
    <section class="service-wrap">
      <div class="section-wrap">
        <div class="service-left">
          <h2 class="title">Take’s Oneとは</h2>
          <p>
            機材を使わずに、家に置いたままになってしまっている人や、いろんな機材を試してみたいけど撮影機材が高くて買えない、などの悩みを持つユーザーの為の、<br>
            いつでも、どこでも、気軽に撮影機材を持つユーザー同士で、機材の貸し借りができるサービスです。
          </p>
        </div>
        <div class="service-img">
          <img src="<?php bloginfo('template_directory'); ?>/dist/img/iphone.png" alt="iphone" width="189" height="382">
          <img src="<?php bloginfo('template_directory'); ?>/dist/img/android.png" alt="android" width="198" height="384">
        </div>
      </div>
    </section><!-- serviceここまで -->

    <section class="step-wrap">

      <h2 class="title">サービスの特徴</h2>
      <div class="section-wrap">
        <div class="step-content-wrap">
          <div class="step font-L">
            <img src="<?php bloginfo('template_directory'); ?>/dist/img/step1_icon.svg" alt="" width="160" height="160">
            <h3>誰でも貸し借り可能</h3>
            <p>誰でも、たった1分で簡単に機材の登録が可能です。</p>
          </div>
          <div class="step font-L">
            <img src="<?php bloginfo('template_directory'); ?>/dist/img/step2_icon.svg" alt="" width="160" height="160">
            <h3>シーンに合わせて</h3>
            <p>撮りたいシーンからシーンによって機材をレコメンドします。</p>
          </div>
          <div class="step font-L">
            <img src="<?php bloginfo('template_directory'); ?>/dist/img/step3_icon.svg" alt="" width="160" height="160">
            <h3>安心の実名登録</h3>
            <p>本人確認に基づき承認を行う為、安心してご利用いただけます。</p>
          </div>
          <div class="step font-L">
            <img src="<?php bloginfo('template_directory'); ?>/dist/img/step4_icon.svg" alt="" width="160" height="160">
            <h3>安心安全の保証</h3>
            <p>もしも、機材が故障した際も保障制度を整備しています。</p>
          </div>
        </div>
      </div>
      <div class="btn-wrap">
        <button class="button btn-more"><a href="/about/">Take’s Oneについて詳しく見る</a></button>
      </div>
    </section>

    <section class="info-wrap">

      <div class="section-wrap">
        <h2 class="title">画面イメージ</h2>
        <p>
          Take’s Oneのアプリのイメージを紹介します。<br>
          アプリはIOS、Android両対応です。
        </p>
      </div>
      <!-- Swiper -->
      <div class="swiper-container">
        <img src="<?php bloginfo('template_directory'); ?>/dist/img/slide_show_iphone.png" alt="" class="bg-iphone">

        <div class="swiper-wrapper">
          <div class="swiper-slide"><img src="<?php bloginfo('template_directory'); ?>/dist/img/sw3.jpg" alt=""/></div>
          <div class="swiper-slide"><img src="<?php bloginfo('template_directory'); ?>/dist/img/sw2.jpg" alt=""/></div>
          <div class="swiper-slide"><img src="<?php bloginfo('template_directory'); ?>/dist/img/sw1.png" alt=""/></div>
          <div class="swiper-slide"><img src="<?php bloginfo('template_directory'); ?>/dist/img/sw4.jpg" alt=""/></div>
          <div class="swiper-slide"><img src="<?php bloginfo('template_directory'); ?>/dist/img/sw5.png" alt=""/></div>
          <div class="swiper-slide"><img src="<?php bloginfo('template_directory'); ?>/dist/img/sw3.jpg" alt=""/></div>
          <div class="swiper-slide"><img src="<?php bloginfo('template_directory'); ?>/dist/img/sw2.jpg" alt=""/></div>
          <div class="swiper-slide"><img src="<?php bloginfo('template_directory'); ?>/dist/img/sw1.png" alt=""/></div>
          <div class="swiper-slide"><img src="<?php bloginfo('template_directory'); ?>/dist/img/sw4.jpg" alt=""/></div>
          <div class="swiper-slide"><img src="<?php bloginfo('template_directory'); ?>/dist/img/sw5.png" alt=""/></div>
        </div>

        <!-- Add Pagination -->
        <div class="swiper-pagination"></div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
      </div>

    </section>

    <section class="top-qa-wrap">

      <h2 class="title">Q&amp;A</h2>
      <div class="section-wrap">
        <div class="question">
          <span>Q</span><p class="question-title font-L">会員登録は無料ですか？</p>
          <p class="question-text">
            会員登録やカメラの登録は、無料です。<br>
            ※プラットフォーム手数料として、オーナーは使用料の10％を負担いただきます。詳細は、特定商取引法の表示等をご覧ください。
          </p>
        </div>
        <div class="question">
          <span>Q</span><p class="question-title font-L">アプリのリリースはいつ頃の予定ですか？</p>
          <p class="question-text">
            2017年1月頃を予定しております。詳細は随時、<a href="https://twitter.com/takes_one_" target="_blank">Twitter</a>や、NEWSにてお知らせいたします。
          </p>
        </div>
        <div class="question">
          <span>Q</span><p class="question-title font-L">機材の掲載に関して</p>
          <p class="question-text">
            機材は誰でも登録可能です。<br>
            デジタル一眼レフカメラ、ビデオカメラなどの本体を始め、ストロボ、三脚、スチールなど周辺機器なども登録できます。<br>
            また料金はオーナー様が設定していただけます。
          </p>
        </div>
        <div class="question">
          <span>Q</span><p class="question-title font-L">商品の受渡しに関して</p>
          <p class="question-text">
            ２つの方法を想定しております。ひとつは郵送による受け渡し、もうひとつは現地による受け渡しです。受け渡し方法についてはユーザー様とオーナー様との話し合いで決めていただきます。
          </p>
        </div>
      </div>
      <div class="btn-wrap">
        <button class="button"><a href="/qa/">もっと詳しく</a></button>
      </div>

    </section>

    <!--section class="blog-wrap">

      <h2 class="title">タイトルタイトルタイトル</h2>
      <div class="section-wrap">
        <div class="blog-contents-wrap clearfix">
          <a href="#" class="blog-content">
            <img src="<?php bloginfo('template_directory'); ?>/dist/img/blog_img1.png" alt="" width="323" height="189">
            <p>
              <time datetime="2016-07-21">2016年07月21日</time><br>
              サービスの説明文がここに入ります。サービスの説明文がここに入ります。サービスの説明文がここに入ります。
            </p>
          </a>
          <a href="#" class="blog-content">
            <img src="<?php bloginfo('template_directory'); ?>/dist/img/blog_img2.png" alt="" width="323" height="189">
            <p>
              <time datetime="2016-07-21">2016年07月21日</time><br>
              サービスの説明文がここに入ります。サービスの説明文がここに入ります。サービスの説明文がここに入ります。
            </p>
          </a>
          <a href="#" class="blog-content">
            <img src="<?php bloginfo('template_directory'); ?>/dist/img/blog_img1.png" alt="" width="323" height="189">
            <p>
              <time datetime="2016-07-21">2016年07月21日</time><br>
              サービスの説明文がここに入ります。サービスの説明文がここに入ります。サービスの説明文がここに入ります。
            </p>
          </a>
        </div>
      </div>
      <div class="btn-wrap">
        <button class="button"><a href="#">もっと詳しく</a></button>
      </div>

    </section-->

    <div class="sns-wrpa">
      <div class="section-wrap">
        <div class="sns-contents-wrap clearfix">
          <div class="fb-page" data-href="https://www.facebook.com/Takes-One-530999983768461/" data-tabs="timeline" data-width="500" data-height="400" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true" style="border:none;overflow:scroll;"><blockquote cite="https://www.facebook.com/Takes-One-530999983768461/" class="fb-xfbml-parse-ignore"></blockquote></div>
          <div id="fb-root"></div>
          <script>(function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s); js.id = id;
            js.src = "//connect.facebook.net/ja_JP/sdk.js#xfbml=1&version=v2.7";
            fjs.parentNode.insertBefore(js, fjs);
          }(document, 'script', 'facebook-jssdk'));</script>
          <!--
          <div class="facebook p60">
          <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FTakes-One-530999983768461%2F&tabs=timeline&width=350&height=400&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" data-width="200" width="350" height="400" style="border:none;overflow:hidden;" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
        </div>
      -->
      <div class="twitter">
        <a width="500" height="400" class="twitter-timeline" href="https://twitter.com/takes_one_">Tweets by takes_one_</a>
        <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
        <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
      </div>
    </div>
  </div>
</div>
</div>

<?php get_footer(); ?>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/dist/js/swiper.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/dist/js/lity.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/dist/js/top.js"></script>
<script>
var swiper = new Swiper('.swiper-container', {
  pagination: '.swiper-pagination',
  slidesPerView: 5,
  paginationClickable: true,
  loop: true,
  setWrapperSize: true,
  paginationClickable: true,
  nextButton: '.swiper-button-next',
  prevButton: '.swiper-button-prev',
  spaceBetween: 30
});
$(window).resize(function(){
  var ww = $(window).width()
  if (ww>=1280) swiper.params.slidesPerView = 7;
  if (ww<=960) swiper.params.slidesPerView = 3;
  if (ww<=480) swiper.params.slidesPerView = 1;
  if (swiper) {
    swiper.update()
  }
})
$(window).trigger('resize')
</script>
</body>
</html>
