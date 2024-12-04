<?php include(TEMPLATEPATH . '/parts/common.php'); ?>
<?php get_header(); ?>

<main>

  <!-- start hero -->
  <section class="hero por poa-bf ofh" id="hero">
    <div class="logo">
      <img src="<?php echo get_template_directory_uri(); ?>/images/common/logo_wht-hor.svg" alt="FIGO PILATES">
    </div>
    <div class="video_wrap por poa-bf bg_clr-blk-bf op25-bf poa-af bg_clr-main-af op20-af">
      <video muted="" playsinline="" loop="" preload="" poster="★パス★/poster.jpg" id="video">
        <source type="video/mp4" src="<?php echo get_template_directory_uri(); ?>/movie/topmovie.mp4">
      </video>
    </div>
  </section>
  <!-- end hero -->

  <!-- start home_news -->
  <section class="home_news bdr_clr-body_lt ofh" id="home_news" data-trigger>
    <div class="inner sect_pdg-sm">
      <?php
      $news_query = new WP_Query( array(
        'post_type' => 'news',
        'posts_per_page' => 3,
      ));
      ?>
      <h2 class="sect_ttl btm56 fade_in">
        <span class="fnt-en clr-main btm8">NEWS</span>
        <span class="fnt-jp">お知らせ</span>
      </h2>
      <div class="posts posts-home_news news_list flx flx-col flx-1 fade_in anm_del200">
        <?php if ($news_query) : ?>
        <?php while ( $news_query->have_posts() ): $news_query->the_post(); ?>
          <?php include(TEMPLATEPATH . '/parts/post-news.php'); ?>
        <?php endwhile; wp_reset_postdata(); ?>
        <?php else: ?>
          <p class="no_post">現在お知らせはありません。</p>
        <?php endif; ?>
      </div>
      <?php
      $args = array(
        'class' => 'tbl-lft anm_del400', 'hov_area' => false,
        'label' => 'お知らせ一覧',
        'ico' => false,
        'href' => home_url().'/news', 'target' => '',
        'txt_clr' => 'main', 'txt_clr-hov' => 'wht',
        'bg_clr' => 'main',
      );
      get_template_part('/parts/btn-def', null, $args);
      ?>
    </div>
  </section>
  <!-- end home_news -->

  <!-- start concept -->
  <section class="concept por ofh" id="concept" data-trigger>
    <div class="inner sect_pdg por">
      <div class="img_area poa">
        <picture class="img img-lft bdr_img fade_in-lft anm_del400">
          <source srcset="<?php echo get_template_directory_uri(); ?>/images/concept_img-lft.jpg 1x, <?php echo get_template_directory_uri(); ?>/images/concept_img-lft@2x.jpg 2x" type="image/jpeg">
          <img src="<?php echo get_template_directory_uri(); ?>/images/concept_img-lft.jpg" alt="コンセプトイメージ 01" width="382" height="548" loading="lazy">
        </picture>
        <picture class="img img-rgt_01 bdr_img fade_in-rgt anm_del400">
          <source srcset="<?php echo get_template_directory_uri(); ?>/images/concept_img-rgt_01.jpg 1x, <?php echo get_template_directory_uri(); ?>/images/concept_img-rgt_01@2x.jpg 2x" type="image/jpeg">
          <img src="<?php echo get_template_directory_uri(); ?>/images/concept_img-rgt_01.jpg" alt="コンセプトイメージ 02" width="320" height="460" loading="lazy">
        </picture>
        <picture class="img img-rgt_02 bdr_img fade_in-lft anm_del400">
          <source srcset="<?php echo get_template_directory_uri(); ?>/images/concept_img-rgt_02.jpg 1x, <?php echo get_template_directory_uri(); ?>/images/concept_img-rgt_02@2x.jpg 2x" type="image/jpeg">
          <img src="<?php echo get_template_directory_uri(); ?>/images/concept_img-rgt_02.jpg" alt="コンセプトイメージ 02" width="268" height="374" loading="lazy">
        </picture>
      </div>
      <h2 class="sect_ttl txt-ctr btm56 fade_in-top">
        <span class="fnt-en clr-main btm8">CONCEPT</span>
        <span class="fnt-jp">FIGO pilatesについて</span>
      </h2>
      <div class="mgn_txts txt-ctr txt-jus-lgsp fnt-lg fade_in-top anm_del200">
        <p>FIGO pilatesはパーソナルジムが母体の<br class="lgsp-none"><strong>男女どちらでも通えるマシンピラティススタジオ</strong>です。<br>リフォーマーを使用したレッスンは、<strong>少人数制のセミパーソナル式</strong>。<br class="lgsp-none">トレーナーが一人一人きめ細やかにサポートしフォームの習得に注力します。</p>
        <p>「ストレス解放」「歪み矯正」「ポジションニュートラル」「姿勢改善」などの<br class="lgsp-none">ピラティスの基本的な効果にプラスしボディメイク、ダイエットのプロフェッショナル達が<br class="lgsp-none">「食事指導」「筋量アップ」などのメニューもご提供。<br>痩せやすい身体、太りにくい身体、美しい身体、使える身体、動ける身体。<br class="lgsp-none"><strong>お客様の身体づくりを中からも外からも多角的にサポート</strong>いたします。</p>
        <p>ご入会された全ての方は、パーソナルジムトレーナーによる食事アドバイスと<br class="lgsp-none">30分マンツーマントレーニングが1回無料で受講できます。</p>
        <p>現在品川店をオープンしており、店舗拡大予定。<br class="lgsp-none">品川店は青物横丁駅すぐです。<br>近隣の品川シーサイド、大井町、鮫洲エリアなどの方にご利用いただいております。</p>
      </div>
    </div>
    <div class="scr_txt op15"></div>
  </section>
  <!-- end concept -->

  <!-- start campaign -->
  <section class="campaign ofh" id="campaign" data-trigger>
    <div class="inner inner-lg sect_pdg">
      <div class="fix_wrap flx flx-btw-stt flx-smpc-blc">
        <aside class="side_column">
          <div class="side_column--in">
            <h2 class="sect_ttl btm48 fade_in-lft">
              <span class="fnt-en clr-main btm8">CAMPAIGN</span>
              <span class="fnt-jp">キャンペーン</span>
            </h2>
            <ul class="thumb_list fade_in-lft anm_del200 smpc-none">
              <li class="thumb_list--item por ofh">
                <div class="num fnt-en w-m ls-50 bg_clr-body lh-10 clr-body_dk ts">01</div>
                <h3 class="fnt-xl lh-16"><a href="#campaign_list--item-great_deal" class="clr-wht smooth poa-bf zi1-bf">今だけ！<br>入会金無料、月会費は永年お得！</a></h3>
                <picture class="poa">
                  <source srcset="<?php echo get_template_directory_uri(); ?>/images/campaign-great_deal-img.jpg 1x, <?php echo get_template_directory_uri(); ?>/images/campaign-great_deal-img@2x.jpg 2x" type="image/jpeg">
                  <img src="<?php echo get_template_directory_uri(); ?>/images/campaign-great_deal-img.jpg" alt="今だけ！入会金無料、月会費は永年お得！" width="280" height="373" loading="lazy" class="ofc ts">
                </picture>
                <div class="bg poa poa-bf bg_clr-main-bf poa-af bg_clr-body_dk-af op0-bf op80-af ts-bf ts-af"></div>
              </li>
            </ul>
          </div>
        </aside>
        <main class="main_column">
          <ul class="campaign_list">
            <li class="campaign_list--item campaign_list--item-great_deal por fade_in-lft anm_del300" id="campaign_list--item-great_deal">
              <div class="num_area flx flx-ctr poa-bf bg_img-bf spin-bf bg_clr-body_lt-af">
                <p class="num fnt-en clr-body_lt ls-0 lh-10">01</p>
              </div>
              <div class="campaign_cont bg_clr-wht">
                <div class="img__hgroup flx flx-btw-end flx-rev flx-lgsp-blc btm32">
                  <div class="campaign_img">
                    <picture class="bdr_img">
                      <source srcset="<?php echo get_template_directory_uri(); ?>/images/campaign-great_deal-img.jpg 1x, <?php echo get_template_directory_uri(); ?>/images/campaign-great_deal-img@2x.jpg 2x" type="image/jpeg">
                      <img src="<?php echo get_template_directory_uri(); ?>/images/campaign-great_deal-img.jpg" alt="今だけ！入会金無料、月会費は永年お得！" width="280" height="373" loading="lazy">
                    </picture>
                  </div>
                  <hgroup>
                    <h3 class="head1 lh-16 btm24">今だけ!<br>入会金<span class="clr-main">無料</span>、<br class="lgsp-show">月会費は<span class="clr-main">永年お得</span>！</h3>
                    <h4 class="head5 lh-18 por poa-bf bg_clr-body_lt-bf op20-bf">只今、オープニングキャンペーン実施中！<br><strong>入会金19800円が無料</strong>に加え、<br class="sp-none">先着100名限定で<strong>月会費を550円～2200円永年割引</strong>！<svg viewBox="<?php echo VB_LOGO_A; ?>" class="clr-def op25" width="24" height="24"><use xlink:href="#logo-a"></use></svg></h4>
                  </hgroup>
                </div>
                <div class="plan_img txt-ctr btm32">
                  <picture>
                    <source media="(max-width: 768px)" srcset="<?php echo get_template_directory_uri(); ?>/images/campaign-great_deal-plans-sp.png" type="image/png">
                    <source media="(min-width: 769px)" srcset="<?php echo get_template_directory_uri(); ?>/images/campaign-great_deal-plans-pc.png" type="image/png">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/campaign-great_deal-plans-pc.png" alt="プラン画像" width="864" height="197" loading="lazy">
                  </picture>
                </div>
                <?php
                $args = array(
                  'class' => 'tbl-ctr btm32', 'hov_area' => false,
                  'label' => '価格の詳細はこちら',
                  'ico' => false,
                  'href' => home_url().'/price', 'target' => '',
                  'txt_clr' => 'main', 'txt_clr-hov' => 'wht',
                  'bg_clr' => 'main',
                );
                get_template_part('/parts/btn-def', null, $args);
                ?>
                <div class="other_txt tbl-ctr por poa-bf bdr_clr-body_lt bg_clr-body_lt-bf op15-bf btm16">
                  <p class="lh-18 txt-ctr txt-jus-tab fnt-sm">パーソナルトレーニングと<strong>自由に組み合わせられる更にお得なプラン</strong>もご用意しております。<br class="lgsp-none">詳しくは店舗スタッフまでお問い合わせください。</p>
                </div>
                <ul class="attn_list tbl-ctr op65 fnt-xxs">
                  <li class="attn_list--item">将来的に原価向上等のやむを得ない事情で値上げ等を行った場合、割引額を調整させて頂く場合がございます。予めご了承ください。</li>
                </ul>
              </div>
            </li>
          </ul>
        </main>
      </div>
    </div>
  </section>
  <!-- end campaign -->

  <div class="program__price flx">

    <!-- start program -->
    <section class="program hov_area flx flx-stt-end ofh por" id="program" data-trigger>
      <div class="img_area ofh poa poa-bf bg_clr-main_dk-bf op0-bf hov-op35-bf ts-slow-bf">
        <picture class="poa">
          <source srcset="<?php echo get_template_directory_uri(); ?>/images/program_img.jpg 1x, <?php echo get_template_directory_uri(); ?>/images/program_img@2x.jpg 2x" type="image/jpeg">
          <img src="<?php echo get_template_directory_uri(); ?>/images/program_img.jpg" alt="プログラム" width="1060" height="800" loading="lazy" class="poa ofc ts-slow">
        </picture>
      </div>
      <div class="txt_area">
        <h2 class="sect_ttl clr-wht btm32 fade_in-lft anm_del400">
          <span class="fnt-en btm8">PROGRAM</span>
          <span class="fnt-jp">プログラム</span>
        </h2>
        <p class="clr-wht btm40 fade_in-lft anm_del400">ピラティスの基本効果に加え、食事指導や筋量アップをサポートし、<br class="sp-none">ストレス解消と美しい身体づくりを実現するお客様一人一人のプログラムを提案いたします。</p>
        <?php
        $args = array(
          'class' => 'tbl-lft fade_in-lft anm_del400', 'hov_area' => true,
          'label' => '詳しく見る',
          'ico' => false,
          'href' => home_url().'/program', 'target' => '',
          'txt_clr' => 'wht', 'txt_clr-hov' => 'main',
          'bg_clr' => 'wht',
        );
        get_template_part('/parts/btn-def', null, $args);
        ?>
      </div>
    </section>
    <!-- end program -->

    <!-- start price -->
    <section class="price hov_area flx flx-stt-end ofh por" id="price" data-trigger>
      <div class="img_area ofh poa poa-bf bg_clr-main_dk-bf op0-bf hov-op35-bf ts-slow-bf">
        <picture class="poa">
          <source srcset="<?php echo get_template_directory_uri(); ?>/images/price_img.jpg 1x, <?php echo get_template_directory_uri(); ?>/images/price_img@2x.jpg 2x" type="image/jpeg">
          <img src="<?php echo get_template_directory_uri(); ?>/images/price_img.jpg" alt="料金について" width="1060" height="800" loading="lazy" class="poa ofc ts-slow">
        </picture>
      </div>
      <div class="txt_area">
        <h2 class="sect_ttl clr-wht btm32 fade_in-lft anm_del400">
          <span class="fnt-en btm8">PRICE</span>
          <span class="fnt-jp">料金について</span>
        </h2>
        <p class="clr-wht btm40 fade_in-lft anm_del400">FIGO pilatesはお客様に合わせたプランを提供しています。<br>各種料金プランや実施中キャンペーンなど詳しい情報はこちらからご確認ください。</p>
        <?php
        $args = array(
          'class' => 'tbl-lft fade_in-lft anm_del400', 'hov_area' => true,
          'label' => '詳しく見る',
          'ico' => false,
          'href' => home_url().'/price', 'target' => '',
          'txt_clr' => 'wht', 'txt_clr-hov' => 'main',
          'bg_clr' => 'wht',
        );
        get_template_part('/parts/btn-def', null, $args);
        ?>
      </div>
    </section>
    <!-- end price -->

  </div>

  <?php include(TEMPLATEPATH . '/parts/sect-schedule.php'); ?>

  <!-- start mv -->
  <section class="mv" id="mv" data-trigger>
    <div class="inner por btm80">
      <div class="img_area flx flx-ctr flx-col">
        <picture class="mv_img fade_in-top">
          <source srcset="<?php echo get_template_directory_uri(); ?>/images/mv_img.webp 1x, <?php echo get_template_directory_uri(); ?>/images/mv_img@2x.webp 2x" type="image/jpeg">
          <img src="<?php echo get_template_directory_uri(); ?>/images/mv_img.webp" alt="MISSION VALUE" width="1009" height="960" loading="lazy">
        </picture>
      </div>
      <div class="mv_txts flx flx-col">
        <div class="mv_txt mv_txt-mission flx flx-col flx-ctr-stt fade_in-rgt anm_del100">
          <h4 class="sub_ttl por fnt-en clr-wht"><span class="txt">MISSION</span><span class="line"></span></h4>
          <h3 class="ttl clr-main">全ての人の健康と<br>ウェルビーイングの向上</h3>
          <p class="txt">を店舗の使命・存在意義と考え、<br>各スタッフは「熱意」「誠意」「多様性」を持って<br>お客様へサービスを提供致します。</p>
        </div>
        <div class="mv_txt mv_txt-vision flx flx-col fade_in-rgt anm_del300">
          <h4 class="sub_ttl por fnt-en clr-wht"><span class="txt">VISION</span><span class="line"></span></h4>
          <h3 class="ttl clr-main">地域社会の健康に貢献し、<br>通う事が習慣となるクラブ</h3>
          <p class="txt">が私たちの目指す将来的な理想像です。</p>
        </div>
      </div>
    </div>
    <div class="mv_msg flx flx-col flx-ctr fade_in-top anm_del600">
      <ul class="mv_msg_list txt-ctr">
        <li class="mv_msg_list--item por poa-bf bg_clr-wht-bf">
          <small>FIGOには、</small><span class="clr-main">いつもあなたを見守る</span><small>スタッフがいます。</small>
        </li>
        <li class="mv_msg_list--item por poa-bf bg_clr-wht-bf">
          <small>FIGOには、</small><span class="clr-main">あなたの変化を一緒に喜ぶ</span><small>スタッフがいます。</small>
        </li>
        <li class="mv_msg_list--item por poa-bf bg_clr-wht-bf">
          <small>FIGOには、</small><span class="clr-main">あなたの目標に共に向き合う</span><small>スタッフがいます。</small>
        </li>
      </ul>
    </div>
  </section>
  <!-- end mv -->

  <!-- start recruit -->
  <section class="recruit bdr_clr-body_lt por ofh" id="recruit" data-trigger>
    <div class="inner inner-lg sect_pdg-sm flx flx-rev flx-xspc-blc">
      <div class="img_area por flx-1 fade_in-lft anm_del300">
        <div class="scr_imgs">
          <div class="bg_img poa"></div>
        </div>
      </div>
      <div class="txt_area">
        <h2 class="sect_ttl btm48 fade_in-lft">
          <span class="fnt-en clr-main btm8">RECRUIT</span>
          <span class="fnt-jp">採用情報</span>
        </h2>
        <div class="mgn_txts btm40 fade_in-lft anm_del200">
          <p>パーソナルトレーナーやピラティスインストラクター、受付スタッフなど、<br class="sp-none">FIGO pilatesでは新しい仲間を募集しています。</p>
          <p>興味のある方はぜひご確認ください。<br class="sp-none">皆様からのご応募を心よりお待ちしております。</p>
        </div>
        <?php
        $args = array(
          'class' => 'tbl-lft fade_in-lft anm_del400', 'hov_area' => false,
          'label' => '詳しく見る',
          'ico' => false,
          'href' => home_url().'/recruit', 'target' => '',
          'txt_clr' => 'main', 'txt_clr-hov' => 'wht',
          'bg_clr' => 'main',
        );
        get_template_part('/parts/btn-def', null, $args);
        ?>
      </div>
    </div>
    <svg viewBox="<?php echo VB_LOGO_MARK; ?>" class="logo-mark clr-wht" width="575" height="1045"><use xlink:href="#logo-mark"></use></svg>
  </section>
  <!-- end recruit -->

  <!-- start insta -->
  <section class="insta por sect_pdg ofh" id="insta" data-trigger>
    <div class="inner inner-lg por flx flx">
      <div class="txt_area hov_area flx flx-col flx-ctr poa-bf bg_clr-body_dk-bf op85-bf hov-op95-bf ts-bf">
        <h2 class="ttl flx flx-col flx-ctr">
          <img src="<?php echo get_template_directory_uri(); ?>/images/logo_mark-insta.svg" alt="Instagram" width="64" height="64" class="logo_mark-insta">
          <img src="<?php echo get_template_directory_uri(); ?>/images/logo-insta.svg" alt="Instagram" width="158" height="44" class="logo_txt-insta">
        </h2>
        <?php
        $args = array(
          'class' => 'lgsp-none', 'hov_area' => true,
          'label' => 'FOLLOW ME',
          'ico' => false,
          'href' => INSTA_URL, 'target' => '_blank',
          'txt_clr' => 'wht', 'txt_clr-hov' => 'body_dk',
          'bg_clr' => 'wht',
        );
        get_template_part('/parts/btn-def', null, $args);
        ?>
      </div>
    </div>
    <div class="frame_wrap por">
      <iframe src="https://snapwidget.com/embed/1068347" class="poa snapwidget-widget" allowtransparency="true" frameborder="0" scrolling="no" title="figo-pilates" loading="lazy"></iframe>
    </div>
  </section>
  <!-- end insta -->

</main>

<?php get_footer(); ?>