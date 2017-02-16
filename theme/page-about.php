<?php /* Template Name: About */ ?>
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
  <meta property="og:title" content="Take's One">
  <meta property="og:type" content="website">
  <meta property="og:url" content="http://www.takesone.jp/">
  <meta property="og:image" content="<?php bloginfo('template_directory'); ?>/dist/img/takesone.png">
  <meta property="og:site_name" content="Take's One">
  <meta property="og:description" content="気軽に誰でも撮影機材をシェアできるサービス">
  <meta property="og:locale" content="ja_JP">
  <meta property="fb:app_id" content="1186906494700728">
  <meta name="twitter:card" content="summary">
  <meta name="twitter:site" content="@takes_one_">
</head>

<body class="excepting_top">
    <!-- header -->
    <header class="head-common fixed">
      <!-- webサイトメニュー -->
      <p class="headmenu-logo"><a href="/"><img src="<?php bloginfo('template_directory'); ?>/dist/img/menu_logo.png" alt="Take's One" height="40"></a></p>

      <div id="nav-toggle">
        <div>
          <span></span> <span></span> <span></span>
        </div>
      </div><!--#navToggle END-->

      <nav class="head-nav">
        <ul>
          <li><a href="/about/">ABOUT</a></li>
          <li><a href="/qa/">Q&amp;A</a></li>
          <!--li><a href="#">CAMPANY</a></li>
          <li><a href="#">NEWS</a></li>
          <li><a href="#">BLOG</a></li>
          <li>
            <a href="#" class="pc-none">
              <p>カメラ掲載はこちら</p>
            </a>
          </li-->
        </ul>
      </nav>

      <!--a href="#" class="top-btn">
        <img src="dist/img/btn-head.png" alt="" class="btn-white">
        <img src="dist/img/btn-head-blue.png" alt="" class="btn-blue">
      </a-->

    </header><!-- headerここまで -->

  <!-- wrapper -->
  <div class="contents-wrapper">
    <!-- news設定 -->
	<section class="about">
        <section class="about_header">
            <h1 class="title">Take’s Oneが目指す世界</h1>
            <p class="subtitle">誰もが気軽に撮影機材を通じて繋がれるプラットフォームを作る</p>
        </section>
		<section class="about_content about_bg_1">
    	<div class="about_text_box">
        <h2 class="about_text_title">Take’s Oneの目的</h2>
        <p class="about_text">現在日本でも、SNSなどの普及により写真を共有する事や、いい画質で写真を残すことに対しての需要はあるのに、撮影機材を手にするにはかなりの壁があります、そういった人たちがこのサービスを使い気軽に貸借りができる場所を作っていきたい。また、すでに撮影機材を持っている人にも満足出来るサービスとして提供していきたいと考えています。</p>
      </div>
		</section>
		<section class="about_content about_bg_2 clearfix">
   		<div class="about_text_box">
        <h2 class="about_text_right about_text_title">Take’s Oneの背景</h2>
        <p class="about_text_right about_text">昨今、スマートフォンの画質が上がったこともあり、撮影機材の出荷台数が減っていてカメラ業界が危機にある。そういった話をよく耳にします。しかし私たちはそういう捉え方をしていません。出荷台数が減っているのは、単に撮影機材が市場にある程度満たされているのだと考えています。世界ではカメラを、個人でいいカメラを所有しながらも使用していない現状が起こっている声をいただきスタートしたのがきっかけです。</p>
      </div>
		</section>
		<section class="about_content about_bg_3">
    	<div class="about_text_box">
        <h2 class="about_text_title">Take’s Oneが目指す未来</h2>
        <p class="about_text">
            現在、撮影機材の出荷台数が減っていると言われている中、個人で機材を所有していながら使用していない現状や、出荷台数の低下による機材費の高騰などにより、機材を購入したいが予算がなかったり、一人当たりに機材を所有する量に限りがあるなど。様々な課題があります。<br>
            そんな課題を解決するために、私たちはシェアリングエコノミーというビジネスを通じて誰でも、どこでも借りたい機材を貸し借りできるプラットフォームを提供いたします。
        </p>
			</div>
		</section>
	</section>

  </div>
</div>
</div>

<?php get_footer(); ?>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
</body>
</html>
