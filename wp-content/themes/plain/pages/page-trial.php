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
          <h2 class="head3 btm16 txt-ctr-smpc">FIGOピラティスでは<br class="sp-none"><strong class="clr-main">1000円<small>（税込）</small>で体験レッスンを受講</strong>できます。<br>ピラティスソックスとミネラルウォーターのプレゼント付き。</h2>
          <p>初回体験をご希望の方は注意事項をご確認し、スケジュール表をご確認のうえ、LINEまたはお問い合わせフォームよりご連絡ください。<br>体験は初回のみ受講可能です。2回目以降の体験は出来かねますのでご了承ください。</p>
        </div>
      </div>
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
      <div class="btn_list flx flx-btw-ctr flx-xspc-blc">
        <?php
        $args = array(
          'class' => 'btn-line', 'hov_area' => false,
          'label' => '公式LINEから<br>体験レッスンを予約する',
          'ico' => 'line',
          'href' => LINE_URL, 'target' => '_blank',
          'txt_clr' => 'line', 'txt_clr-hov' => 'wht',
          'bg_clr' => 'line',
        );
        get_template_part('/parts/btn-def', null, $args);
        ?>
        <?php
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