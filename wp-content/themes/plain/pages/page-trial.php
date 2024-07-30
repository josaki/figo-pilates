<main>

  <!-- start trial -->
  <section class="trial" id="trial">
    <div class="inner sect_pdg-sm pdg_no-btm">
      <div class="lr_bloc flx-smpc-blc">
        <div class="img_area">
          <picture class="por bdr_img bdr_clr-body_lt-bf">
            <source srcset="<?php echo get_template_directory_uri(); ?>/images/trial/trial_img.jpg 1x, <?php echo get_template_directory_uri(); ?>/images/trial/trial_img@2x.jpg 2x" type="image/jpeg">
            <img src="<?php echo get_template_directory_uri(); ?>/images/trial/trial_img.jpg" alt="FIGOピラティスについて" width="540" height="334" loading="lazy">
          </picture>
        </div>
        <div class="txt_area">
          <h2 class="head3 btm16 txt-ctr-smpc">FIGOピラティスでは<br class="sp-none"><strong class="clr-main">1,000円<small>（税込）</small>で体験レッスンを受講</strong>できます。<br>ピラティスソックスとミネラルウォーターのプレゼント付き。</h2>
          <p>初回体験は2種類の方法でご予約頂けます。<br>体験は初回のみ受講可能です。2回目以降の体験は出来かねますのでご了承ください。<br>体験料の1,000円<small>（税込）</small>は当日ご入会された場合はご返金させて頂きます。</p>
        </div>
      </div>
      <ul class="payment_area flx flx-lgsp-blc btm40 v2">
        <li class="trial_payment trial_payment-easy suggest bdr_clr-sub2 flx-1 flx flx-smpc-blc bg_clr-wht por hov_area ts-fast">
          <div class="suggest_badge badge_show bg_clr-sub2 clr-wht flx flx-ctr flx-col w-m fnt-xxs bdr_clr-body">
            <div class="fukidashi flx flx-ctr"><span class="bg_clr-wht"></span><span class="bg_clr-wht"></span><span class="bg_clr-wht"></span></div>
            <p>おすすめ</p>
          </div>
          <div class="txt_area flx-1">
            <hgroup class="flx flx-col flx-ctr txt-ctr btm16">
              <p class="num fnt-en lh-10 ls-50 flx flx-ctr clr-body_dk w-l por poa-bf poa-af bg_clr-wht-bf bdr_clr-sub2-bf bg_clr-wht-af">01</p>
              <h3 class="head5 lh-16 w-m por"><span class="clr-sub2">かんたん予約</span>から<br>予約確定</h3>
            </hgroup>
            <p class="lh-18 btm8">かんたん予約の体験用webチケット（1,000円）を購入し、そのままご希望のクラス・日時を選んでご予約＆確定。</p>
            <ul class="attn_list fnt-xs op65">
              <li class="attn_list--item">かんたん予約のアカウントをお持ちでない方はご登録が必要ですが、入力項目が少なくすぐに登録できます。</li>
            </ul>
          </div>
          <div class="method bdr_clr-body_lt txt-ctr flx flx-col">
            <h3 class="ttl por poa-bf bg_clr-body_lt-bf op25-bf w-m fnt-xxs btm8"><span class="op65">お支払い方法</span></h3>
            <p class="w-m">クレジットカード</p>
            <ul class="credit_list flx flx-ctr">
              <li class="credit_list--item"><img src="<?php echo get_template_directory_uri(); ?>/images/price/pay_ico-visa.svg" alt="visa" width="40" height="40" loading="lazy"></li>
              <li class="credit_list--item"><img src="<?php echo get_template_directory_uri(); ?>/images/price/pay_ico-master.svg" alt="master" width="40" height="40" loading="lazy"></li>
              <li class="credit_list--item"><img src="<?php echo get_template_directory_uri(); ?>/images/price/pay_ico-amex.svg" alt="amex" width="40" height="40" loading="lazy"></li>
              <li class="credit_list--item"><img src="<?php echo get_template_directory_uri(); ?>/images/price/pay_ico-jcb.svg" alt="jcb" width="40" height="40" loading="lazy"></li>
              <li class="credit_list--item"><img src="<?php echo get_template_directory_uri(); ?>/images/price/pay_ico-diners.svg" alt="diners" width="40" height="40" loading="lazy"></li>
              <li class="credit_list--item"><img src="<?php echo get_template_directory_uri(); ?>/images/price/pay_ico-discover.svg" alt="discover" width="40" height="40" loading="lazy"></li>
            </ul>
            <?php
            $args = array(
              'class' => 'btn-sm', 'hov_area' => true,
              'label' => 'かんたん予約',
              'ico' => false,
              'href' => RESERVATION_URL, 'target' => '_blank',
              'txt_clr' => 'sub2', 'txt_clr-hov' => 'wht',
              'bg_clr' => 'sub2',
            );
            get_template_part('/parts/btn-def', null, $args);
            ?>
          </div>
        </li>
        <li class="trial_payment trial_payment-line_form bdr_clr-main flx-1 flx flx-smpc-blc bg_clr-wht por hov_area ts-fast">
          <div class="txt_area flx-1">
            <hgroup class="flx flx-col flx-ctr txt-ctr btm16">
              <p class="num fnt-en lh-10 ls-50 flx flx-ctr clr-body_dk w-l por poa-bf poa-af bg_clr-wht-bf bdr_clr-main-bf bg_clr-wht-af">02</p>
              <h3 class="head5 lh-16 w-m por"><span class="clr-line">LINE</span>または<span class="clr-main">問い合わせフォーム</span><br>からお問い合わせ</h3>
            </hgroup>
            <p class="lh-18 btm8">最初にスケジュールページからご希望のクラス・日時をご確認いただき、LINEまたはお問い合わせフォームから体験ご希望の旨をご連絡ください。空きがありスタッフから確定の返信があった時点でご予約確定となります。</p>
            <ul class="attn_list fnt-xs clr-red">
              <li class="attn_list--item">1,000円（税込）ご来店時に決済いただきます。現金はご利用いただけません。</li>
            </ul>
          </div>
          <div class="method bdr_clr-body_lt txt-ctr flx flx-col">
            <h3 class="ttl por poa-bf bg_clr-body_lt-bf op25-bf w-m fnt-xxs btm8"><span class="op65">お支払い方法</span></h3>
            <p class="w-m">PayPayのみ</p>
            <picture class="por tbl-ctr">
              <img src="<?php echo get_template_directory_uri(); ?>/images/price/pay_ico-paypay.svg" alt="paypay" width="140" height="40" loading="lazy" class="poa ofc">
            </picture>
            <?php
            $args = array(
              'class' => 'btn-sm', 'hov_area' => true,
              'label' => '問い合わせる',
              'ico' => false,
              'href' => home_url().'/contact/', 'target' => '',
              'txt_clr' => 'main', 'txt_clr-hov' => 'wht',
              'bg_clr' => 'main',
            );
            get_template_part('/parts/btn-def', null, $args);
            ?>
          </div>
        </li>
      </ul>
      <div class="attn_area bdr_clr-body_lt tbl-ctr por btm64">
        <h3 class="ttl fnt-xl tbl-ctr bg_clr-body w-m"><span class="op50">注意事項</span></h3>
        <ul class="check_list btm24 tbl-ctr">
          <li class="check_list--item bdr_clr-body_lt-bf bdr_clr-main-af"><p class="fnt-xl">体験レッスン当日はスポーツウェア、タオルを必ずお持ちください。</p></li>
          <li class="check_list--item bdr_clr-body_lt-bf bdr_clr-main-af"><p class="fnt-xl">レッスン開始20分前にご来店ください。<br>お着替えや設備説明などを済ませ、開始時間ちょうどからレッスンをスタートします。</p></li>
          <li class="check_list--item bdr_clr-body_lt-bf bdr_clr-main-af"><p class="fnt-xl">レッスン終了後は着替えやレッスン内容、プランのご案内などを行うため、<br class="lgsp-none">レッスン終了後人数によって30分から60分ほどお時間を頂戴しております。</p></li>
          <li class="check_list--item bdr_clr-body_lt-bf bdr_clr-main-af"><p class="fnt-xl">体験レッスンは、実際にご入会を検討されている方のみに受講いただいております。<br>遠方にお住まいの方、入会の意志がない方は、ご遠慮いただけますようお願いいたします。</p></li>
          <li class="check_list--item bdr_clr-body_lt-bf bdr_clr-main-af"><p class="fnt-xl">同業者の方の調査目的での受講、暴力団等反社会的勢力に属されている方の利用は固くお断りします。</p></li>
        </ul>
        <ul class="attn_list fnt-xs op65 tbl-ctr">
          <li class="attn_list--item">上記事項ならびに利用規約に反する事項が発覚した場合は、その場でスタジオのご利用をお断りし、適切な処置を取らせていただきます。</li>
        </ul>
      </div>
      <div class="btn_list btn_list-rsv flx flx-btw-ctr flx-smpc-blc">
        <?php
        $args = array(
          'class' => 'btn-reservation badge_show', 'hov_area' => false,
          'label' => 'かんたん予約システムで<br>体験レッスンを予約＆確定する',
          'ico' => 'pilates',
          'href' => RESERVATION_URL, 'target' => '_blank',
          'txt_clr' => 'sub2', 'txt_clr-hov' => 'wht',
          'bg_clr' => 'sub2',
        );
        get_template_part('/parts/btn-def', null, $args);

        $args = array(
          'class' => 'btn-line', 'hov_area' => false,
          'label' => '公式LINEから<br>体験レッスンを申し込む',
          'ico' => 'line',
          'href' => LINE_URL, 'target' => '_blank',
          'txt_clr' => 'line', 'txt_clr-hov' => 'wht',
          'bg_clr' => 'line',
        );
        get_template_part('/parts/btn-def', null, $args);

        $args = array(
          'class' => 'btn-contact', 'hov_area' => false,
          'ico' => 'mail',
          'label' => 'お問い合わせフォームから<br>体験レッスン予約をする',
          'href' => home_url().'/contact/', 'target' => '',
          'txt_clr' => 'main', 'txt_clr-hov' => 'wht',
          'bg_clr' => 'main',
        );
        get_template_part('/parts/btn-def', null, $args);
        ?>
      </div>
    </div>
  </section>
  <!-- end trial -->

  <?php include(TEMPLATEPATH . '/parts/sect-schedule.php'); ?>
  
</main>