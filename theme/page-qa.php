<?php /* Template Name: Q and A */ ?>
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
        <img src="<?php /*bloginfo('template_directory');*/ ?>/dist/img/btn-head.png" alt="" class="btn-white">
        <img src="<?php /*bloginfo('template_directory');*/ ?>/dist/img/btn-head-blue.png" alt="" class="btn-blue">
      </a-->

    </header><!-- headerここまで -->

  <!-- wrapper -->
  <div class="contents-wrapper">
    <section class="qa_wrap clearfix">
    <h2 class="main_title font-L">Q&amp;A</h2>
      <section class="qa_menu clearfix">
        <div class="drop_active"><a href="#qa1" class="qa_menu_text">会員登録・ログイン・退会について<img src="<?php bloginfo('template_directory'); ?>/dist/img/q_a_img/yazirusi.png" width="21" height="39" alt=""/></a></div>
        <div class="response_drop"><a href="#qa2" class="qa_menu_text">取引全般について<img src="<?php bloginfo('template_directory'); ?>/dist/img/q_a_img/yazirusi.png" width="21" height="39" alt=""/></a></div>
        <div class="response_drop"><a href="#qa3" class="qa_menu_text">借りて側のFAQ<img src="<?php bloginfo('template_directory'); ?>/dist/img/q_a_img/yazirusi.png" width="21" height="39" alt=""/></a></div>
        <div class="response_drop"><a href="#qa4" class="qa_menu_text">オーナー側のFAQ<img src="<?php bloginfo('template_directory'); ?>/dist/img/q_a_img/yazirusi.png" width="21" height="39" alt=""/></a></div>
      </section>
      <div class="section_wrap clearfix">
        <div id="qa1" class="menu_title"><p>会員登録・ログイン・退会について</p></div>
        <div class="question clearfix">
          <div class="question_title_box clearfix">
            <span>Q</span><p class="question_title font_L">会員登録は無料ですか？</p>
            <div class="accordionbox clearfix">
              <p class="accordion_icon"><span></span><span></span></p>
            </div>
          </div>
          <div class="question_text">
            <p>会員登録や、カメラの登録は無料です。</p>
            <p>※プラットフォーム手数料として、オーナーの皆さまからは、サービス利用料としてレンタル料の10％を負担していただきます。詳細は、特定商取引法の表示をご覧ください。</p>
          </div>
        </div>
        <div class="question clearfix">
          <div class="question_title_box clearfix">
            <span>Q</span><p class="question_title font_L">メールアドレスでの登録ができない</p>
            <div class="accordionbox clearfix">
              <p class="accordion_icon"><span></span><span></span></p>
            </div>
          </div>
          <div class="question_text">
            <p>「このメールアドレスは登録済です」と表示される場合、ご利用のメールアドレスは、すでにTake's Oneに登録されています。メールアドレスを登録されたアカウントへのログインをお願いいたします。</p>
            <p>※Take's Oneは、人同士の信頼関係を重視したサービスとなります。そのため、お一人様１アカウントの原則を設けております。ご理解いただきますようお願いいたします。</p>
            <p>なお、パスワードがご不明な場合は、以下の手順で再設定が可能となっております。</p>
            <p>【パスワードの再設定方法】</p>
            <p>1. ログイントップページから[ログイン]＞[メールアドレスでログイン]を選択</p>
            <p>2. メールアドレスログインページにて[パスワードをお忘れの場合]を選択し、該当のメールアドレス宛にパスワード再設定用のメールを送信</p>
            <p>3. 該当のメールアドレスに届いたメール内の[パスワードを再設定]を選択し、パスワード設定ページで新規パスワードを登録</p>
          </div>
        </div>
        <div class="question clearfix">
          <div class="question_title_box clearfix">
            <span>Q</span><p class="question_title font_L">Facebookでの登録ができない</p>
            <div class="accordionbox clearfix">
              <p class="accordion_icon"><span></span><span></span></p>
            </div>
          </div>
          <div class="question_text">
            <p>Facebookのアプリを最新版へアップデートしてから再度お試しください。なお、すでにTake's Oneに登録されているFacebookアカウントでの新規登録はできません。ご登録済のアカウントへのログインをお願いいたします。</p>
            <p>※Take's Oneは、人同士の信頼関係を重視したサービスとなります。そのため、お一人様１アカウントの原則を設けております。ご理解いただきますようお願いいたします。</p>
          </div>
        </div>
        <div class="question clearfix">
          <div class="question_title_box clearfix">
            <span>Q</span><p class="question_title font_L">メールが届かない</p>
            <div class="accordionbox clearfix">
              <p class="accordion_icon"><span></span><span></span></p>
            </div>
          </div>
          <div class="question_text">
            <p>メールの受信設定をご確認ください。ドメイン指定または、アドレスによる指定受信設定をされている場合には、お客様の元にメールが届きません。</p>
            <p>Take's Oneからお送りするメールのドメインは、[@takesone.co.jp]となっております。お手数ではございますが、[@takesone.co.jp]からのメールを許可していただくか、URL付きメールを受信できる設定になっているかをご確認ください。</p>
          </div>
        </div>
        <div class="question clearfix">
          <div class="question_title_box clearfix">
            <span>Q</span><p class="question_title font_L">ログインができない</p>
            <div class="accordionbox clearfix">
              <p class="accordion_icon"><span></span><span></span></p>
            </div>
          </div>
          <div class="question_text">
            <p>「メールアドレスかパスワードが違います」と表示される場合、ご入力内容にお間違いがございます。お手数ですが、ご入力内容をお確かめのうえ、再度お試しください。</p>
            <p>また、Facebookアカウントを使用したログインができない場合、FacebookからTake’s Oneとの連携が解除されていないかをご確認ください。</p>
            <p>なお、パスワードがご不明な場合は、以下の手順で再設定が可能となっております。</p>
            <p>【パスワードの再設定方法】</p>
            <p>1. ログイントップページから[ログイン]＞[メールアドレスでログイン]を選択</p>
            <p>2. メールアドレスログインページにて[パスワードをお忘れの場合]を選択し、該当のメールアドレス宛にパスワード再設定用のメールを送信</p>
            <p>3. 該当のメールアドレスに届いたメール内の[パスワードを再設定]を選択し、パスワード設定ページに新規パスワードを登録</p>
          </div>
        </div>
        <div class="question clearfix">
          <div class="question_title_box clearfix">
            <span>Q</span><p class="question_title font_L">パスワードを忘れてしまった</p>
            <div class="accordionbox clearfix">
              <p class="accordion_icon"><span></span><span></span></p>
            </div>
          </div>
          <div class="question_text">
            <p>なお、パスワードがご不明な場合は、以下の手順で再設定が可能となっております。</p>
            <p>【パスワードの再設定方法】</p>
            <p>1. ログイントップページからメールアドレスでログインを選択</p>
            <p>2. メールアドレスログインページにて「パスワードをお忘れの場合」を選択し、該当のメールアドレス宛にパスワード再設定用のメールを送信</p>
            <p>3. 該当のメールアドレスに届いたメール内の「パスワードを再設定」を選択し、パスワード設定ページに新規パスワードを登録</p>
          </div>
        </div>
        <div class="question clearfix">
          <div class="question_title_box clearfix">
            <span>Q</span><p class="question_title font_L">機種変更時にデータを引継ぎしたい</p>
            <div class="accordionbox clearfix">
              <p class="accordion_icon"><span></span><span></span></p>
            </div>
          </div>
          <div class="question_text">
            <p>機種変更の際にデータ引継ぎを行うためには、Take's Oneにご登録の［メールアドレス / パスワード］ か [Facebookアカウント] が必要となります。以前の端末で使っていたログイン方法を、新しい端末へ移行をお願いいたします。</p>
            <p>※ご登録情報をお忘れになりますと、データを引き継いでご利用いただくことができませんのでご注意ください。</p>
          </div>
        </div>
        <div class="question clearfix">
          <div class="question_title_box clearfix">
            <span>Q</span><p class="question_title font_L">会員情報を変更したい</p>
            <div class="accordionbox clearfix">
              <p class="accordion_icon"><span></span><span></span></p>
            </div>
          </div>
          <div class="question_text">
            <p>プロフィール情報は、[マイページ]＞[プロフィール情報]＞[編集]から編集することが可能です。</p>
          </div>
        </div>
        <div class="question clearfix">
          <div class="question_title_box clearfix">
            <span>Q</span><p class="question_title font_L">退会したい</p>
            <div class="accordionbox clearfix">
              <p class="accordion_icon"><span></span><span></span></p>
            </div>
          </div>
          <div class="question_text">
            <p>退会をご希望のお客様は、こちらからお問い合わせください。</p>
            <p>※確定した予約がある場合や、未受取金がある場合は退会をすることができません。</p>
          </div>
        </div>
        <div class="question clearfix">
          <div class="question_title_box clearfix">
            <span>Q</span><p class="question_title font_L">受け取り金が残っている場合は退会できないのか</p>
            <div class="accordionbox clearfix">
              <p class="accordion_icon"><span></span><span></span></p>
            </div>
          </div>
          <div class="question_text">
            <p>口座振込は、銀行口座間違いなどで振込が完了できない場合があり、退会すると口座の確認ができなくなります。そのため、受取金の振込が完了するまでは退会ができません。</p>
          </div>
        </div>

        <div id="qa2" class="menu_title"><p>取引全般について</p></div>
        <div class="question clearfix">
          <div class="question_title_box clearfix">
            <span>Q</span><p class="question_title font_L">プラットフォーム手数料はいくらかですか？</p>
            <div class="accordionbox clearfix">
              <p class="accordion_icon"><span></span><span></span></p>
            </div>
          </div>
          <div class="question_text">
            <p>ベータ版では、現在、手数料をいただいておりません。サービスリリース後、プラットフォーム利用料として、レンタル料金の10%をオーナーの皆さまからいただく予定です。</p>
          </div>
        </div>
        <div class="question clearfix">
          <div class="question_title_box clearfix">
            <span>Q</span><p class="question_title font_L">受け渡しはどのように行いますか?</p>
            <div class="accordionbox clearfix">
              <p class="accordion_icon"><span></span><span></span></p>
            </div>
          </div>
          <div class="question_text">
            <p>２つの方法を想定しております。ひとつは郵送による受け渡し、もうひとつは現地による受け渡しです。受け渡し方法についてはユーザー様とオーナー様との話し合いで決めていただきます。</p>
          </div>
        </div>
        <div class="question clearfix">
          <div class="question_title_box clearfix">
            <span>Q</span><p class="question_title font_L">受け渡しに遅れてしまう時</p>
            <div class="accordionbox clearfix">
              <p class="accordion_icon"><span></span><span></span></p>
            </div>
          </div>
          <div class="question_text">
            <p>郵送会社による遅れ、また自然災害による遅れについてはオーナー様からの料金の返却は考えておりません。オーナー様のご都合で遅れる場合、ユーザーは残りの日数分の料金をし払い継続して借りていただくか、キャンセルをしていただき着払いにて返却をして頂きます。</p>
          </div>
        </div>
        <div class="question clearfix">
          <div class="question_title_box clearfix">
            <span>Q</span><p class="question_title font_L">商品がユーザー様届かなかった場合</p>
            <div class="accordionbox clearfix">
              <p class="accordion_icon"><span></span><span></span></p>
            </div>
          </div>
          <div class="question_text">
            <p>通知＞予約詳細から運営側に返却日までに連絡していただきサービス料金を払い戻しいたします。</p>
          </div>
        </div>
        <div class="question clearfix">
          <div class="question_title_box clearfix">
            <span>Q</span><p class="question_title font_L">キャンセルしたい場合</p>
            <div class="accordionbox clearfix">
              <p class="accordion_icon"><span></span><span></span></p>
            </div>
          </div>
          <div class="question_text">
            <p>通知＞予約詳細からキャンセルボタンを押してください</p>
          </div>
        </div>
        <div class="question clearfix">
          <div class="question_title_box clearfix">
            <span>Q</span><p class="question_title font_L">直前にキャンセルをした場合の対応</p>
            <div class="accordionbox clearfix">
              <p class="accordion_icon"><span></span><span></span></p>
            </div>
          </div>
          <div class="question_text">
            <p>もしすでにオーナー様が発送されていた場合レンタルの一日の料金を支払ってもらいます。</p>
            <p>またキャンセル料金が設定されていた場合、それプラスキャンセル料を払っていただきます。</p>
          </div>
        </div>
        <div class="question clearfix">
          <div class="question_title_box clearfix">
            <span>Q</span><p class="question_title font_L">カメラが届く日/返却日</p>
            <div class="accordionbox clearfix">
              <p class="accordion_icon"><span></span><span></span></p>
            </div>
          </div>
          <div class="question_text">
            <p>郵送の場合一日前には届けるようにしてもらっています。また返却も利用期間の次の日の午前中までには発送をしてもらいます。手渡しの場合においてもレンタル開始日もしくは一日前に借りていただく、返却も手渡しの場合はレンタル期間の次の日の午前中までには返却していただきます。<br></p>
            <p>配送番号は、控えておいてください。</p>
          </div>
        </div>
        <div class="question clearfix">
          <div class="question_title_box clearfix">
            <span>Q</span><p class="question_title font_L">送料の負担について</p>
            <div class="accordionbox clearfix">
              <p class="accordion_icon"><span></span><span></span></p>
            </div>
          </div>
          <div class="question_text">
            <p>送料に関しては、オーナーが商品登録時に送料をどちらが負担するか決められるようになっています。種類としてはオーナー全額負担、オーナーとユーザーで折半、もしくはユーザーが全額負担の3つです。</p>
          </div>
        </div>
        <div class="question clearfix">
          <div class="question_title_box clearfix">
            <span>Q</span><p class="question_title font_L">手渡しでのお金のやり取りについて</p>
            <div class="accordionbox clearfix">
              <p class="accordion_icon"><span></span><span></span></p>
            </div>
          </div>
          <div class="question_text">
            <p>当サービスでは原則そのようなやり取りを禁止しております。万が一の場合は運営側に連絡してください。</p>
          </div>
        </div>

        <div id="qa3" class="menu_title"><p>借りて側のFAQ</p></div>
        <div class="question clearfix">
          <div class="question_title_box clearfix">
            <span>Q</span><p class="question_title font_L">身分証明書を登録する理由は何ですか?</p>
            <div class="accordionbox clearfix">
              <p class="accordion_icon"><span></span><span></span></p>
            </div>
          </div>
          <div class="question_text">
            <p>Take’s Oneでは互いに信頼できるサービスを考えております。そのためユーザーの身分を証明していただくために登録させていただいてます。また保険に入ってもらって頂く時も身分証明書が必要なため何卒よろしくお願いします。</p>
          </div>
        </div>
        <div class="question clearfix">
          <div class="question_title_box clearfix">
            <span>Q</span><p class="question_title font_L">利用時間の延長はできますでしょうか？</p>
            <div class="accordionbox clearfix">
              <p class="accordion_icon"><span></span><span></span></p>
            </div>
          </div>
          <div class="question_text">
            <p>原則することはできません。お手数ですが、新しく契約をお願い致します。</p>
          </div>
        </div>
        <div class="question clearfix">
          <div class="question_title_box clearfix">
            <span>Q</span><p class="question_title font_L">故障をしてしまった。どうすればいいですか?</p>
            <div class="accordionbox clearfix">
              <p class="accordion_icon"><span></span><span></span></p>
            </div>
          </div>
          <div class="question_text">
            <p>返却日の2日前までに、故障をしてしまった旨を運営にご連絡ください。オーナーへの通達や、保険会社との連絡で、必要な料金を計算いたします。その後、料金の支払いのメッセージをお送りします。</p>
          </div>
        </div>
        <div class="question clearfix">
          <div class="question_title_box clearfix">
            <span>Q</span><p class="question_title font_L">借りたカメラを海外に持っていくことは可能でしょうか?</p>
            <div class="accordionbox clearfix">
              <p class="accordion_icon"><span></span><span></span></p>
            </div>
          </div>
          <div class="question_text">
            <p>原則海外に持っていくことを認めてはおりません。</p>
          </div>
        </div>
        <div class="question clearfix">
          <div class="question_title_box clearfix">
            <span>Q</span><p class="question_title font_L">当日キャンセルした場合のキャンセル料金はどうなるでしょうか?(保険料など)</p>
            <div class="accordionbox clearfix">
              <p class="accordion_icon"><span></span><span></span></p>
            </div>
          </div>
          <div class="question_text">

          </div>
        </div>

        <div id="qa4" class="menu_title"><p>オーナー側のFAQ</p></div>
        <div class="question clearfix">
          <div class="question_title_box clearfix">
            <span>Q</span><p class="question_title font_L">オーナーになるためには</p>
            <div class="accordionbox clearfix">
              <p class="accordion_icon"><span></span><span></span></p>
            </div>
          </div>
          <div class="question_text">
            <p>アプリからマイページ>機材を貸し出す　を押していただき、そこで必要な情報を入力していただき登録ボタンを押すと、出品していただくことができます。</p>
          </div>
        </div>
        <div class="question clearfix">
          <div class="question_title_box clearfix">
            <span>Q</span><p class="question_title font_L">登録するときの注意点はありますか?</p>
            <div class="accordionbox clearfix">
              <p class="accordion_icon"><span></span><span></span></p>
            </div>
          </div>
          <div class="question_text">
            <p>何かあった時のためにデポジットを持っておくことを推奨しております。付属する製品など細かい情報をのせることでよりユーザー側に貸しやすくなると考えております。また正確な情報を入れていただけなかった場合保険が下りない場合がございます。</p>
          </div>
        </div>
        <div class="question clearfix">
          <div class="question_title_box clearfix">
            <span>Q</span><p class="question_title font_L">料金はどうやっていつ振り込まれますか?</p>
            <div class="accordionbox clearfix">
              <p class="accordion_icon"><span></span><span></span></p>
            </div>
          </div>
          <div class="question_text">
            <p>登録していただいた口座へ振り込みます。月末締めの翌月末払いを致します。1000円未満の場合は次回の支払いに繰り延べさせていただきます。それまでには口座情報の入力を済ませておいてください。</p>
          </div>
        </div>
        <div class="question clearfix">
          <div class="question_title_box clearfix">
            <span>Q</span><p class="question_title font_L">貸していたカメラが壊されてしまった場合はどうなりますか?</p>
            <div class="accordionbox clearfix">
              <p class="accordion_icon"><span></span><span></span></p>
            </div>
          </div>
          <div class="question_text">
            <p>ユーザー様側から運営に連絡をいただき、オーナー様には運営側から故障してしまったことを通知します。その後、保険会社と相談しいくら払ってもらうか、保険がいくら降りるかを通知致します。また故障時の賠償金についてですが、原則その時の時価を考えて払うことになっております。</p>
          </div>
        </div>
        <div class="question clearfix">
          <div class="question_title_box clearfix">
            <span>Q</span><p class="question_title font_L">デポジット料金はどのように設定すればいいですか?</p>
            <div class="accordionbox clearfix">
              <p class="accordion_icon"><span></span><span></span></p>
            </div>
          </div>
          <div class="question_text">
            <p>デポジット料金はとして購入金額(時価金額どっちらか)の2割ほどを推奨しておりますが、価格の設定に関してはご自由に設定していただけます。</p>
          </div>
        </div>
        <div class="question clearfix">
          <div class="question_title_box clearfix">
            <span>Q</span><p class="question_title font_L">料金の設定はどのようにすればいいですか?</p>
            <div class="accordionbox clearfix">
              <p class="accordion_icon"><span></span><span></span></p>
            </div>
          </div>
          <div class="question_text">
            <p>1日にあたりの料金価格としては購入金額(時価金額どっちか)の3.5%程を推奨しておりますが、価格の設定に関してはご自由に設定していただけます。</p>
          </div>
        </div>
    </section>

  </div>
</div>
</div>

<?php get_footer(); ?>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/dist/js/qa.js"></script>
</body>
</html>
