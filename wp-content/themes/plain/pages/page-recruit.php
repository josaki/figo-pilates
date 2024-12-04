<main>

  <!-- start job -->
  <section class="job" id="job" data-trigger>
    <div class="inner sect_pdg-sm">
      <h2 class="sect_ttl txt-ctr fade_in-top btm32">
        <span class="fnt-en clr-main btm8">JOB TYPE</span>
        <span class="fnt-jp">募集職種</span>
      </h2>
      <div class="txts fade_in-top anm_del200 txt-ctr txt-jus-tab flx-1 btm64">
        <p>FIGOグループでは<strong>FIGOパーソナルトレーニング</strong>、<br class="tab-none">FIGOピラティスの店舗にて<strong>パーソナルトレーナー、ピラティスインストラクター、受付清掃スタッフなどを募集</strong>しております。<br>勤務先と募集職種は下記の通りです。ご興味のある方は各店舗のコンタクトページよりお気軽にお問い合わせください。</p>
      </div>
      <?php
      $job_arr = array(
        'personal-shinagawa' => array(
          'ttl' => 'パーソナル品川店',
          'sub_ttl' => false,
          'jobs' => array(
            '常勤パーソナルトレーナー',
            'フリーパーソナルトレーナー',
          ),
          'btn_txt' => false,
          'btn_url' => 'https://figo-personal.com',
          'btn_target' => '_blank',
        ),
        'pilates-shinagawa' => array(
          'ttl' => 'ピラティス品川店',
          'sub_ttl' => false,
          'jobs' => array(
            'ピラティスインストラクター',
            'フリーピラティスインストラクター',
          ),
          'btn_txt' => '問い合わせる',
          'btn_url' => home_url().'/contact/',
          'btn_target' => false,
        ),
        'personal-kosugi' => array(
          'ttl' => 'パーソナル武蔵小杉店',
          'sub_ttl' => false,
          'jobs' => array(
            '常勤パーソナルトレーナー',
            'フリーパーソナルトレーナー',
          ),
          'btn_txt' => false,
          'btn_url' => 'https://kosugi.figo-personal.com/',
          'btn_target' => '_blank',
        ),
        'personal-azamino' => array(
          'ttl' => 'パーソナルあざみ野店',
          'sub_ttl' => false,
          'jobs' => array(
            '常勤パーソナルトレーナー',
            'フリーパーソナルトレーナー',
          ),
          'btn_txt' => false,
          'btn_url' => 'https://azamino.figo-personal.com/',
          'btn_target' => '_blank',
        ),
        'personal-ichigao' => array(
          'ttl' => 'パーソナル市が尾店',
          'sub_ttl' => '2024年オープン予定',
          'jobs' => array(
            '常勤パーソナルトレーナー',
            'フリーパーソナルトレーナー',
          ),
          'btn_txt' => false,
          'btn_url' => false,
          'btn_target' => '_blank',
        ),
        'personal-figo24' => array(
          'ttl' => '24Hマシンジム宮前店',
          'sub_ttl' => false,
          'jobs' => array(
            '受付清掃スタッフ',
          ),
          'btn_txt' => false,
          'btn_url' => 'https://figo24.com/',
          'btn_target' => '_blank',
        ),
      );
      ?>
      <ul class="job_list clm clm-3">
        <?php $job_i=0;foreach ($job_arr as $job_k => $job_v): $job_i++; ?>
          <li class="job_list--item job_list--item-<?php echo $job_k; ?> por hov_area bg_clr-wht fade_in-lft anm_del<?php echo $job_i*100; ?>">
            <div class="img_area">
              <picture class="bdr_img por bdr_clr-body_lt-bf">
                <source srcset="<?php echo get_template_directory_uri(); ?>/images/recruit/shop_img-<?php echo $job_k; ?>.jpg 1x, <?php echo get_template_directory_uri(); ?>/images/recruit/shop_img-<?php echo $job_k; ?>@2x.jpg 2x" type="image/jpeg">
                <img src="<?php echo get_template_directory_uri(); ?>/images/recruit/shop_img-<?php echo $job_k; ?>.jpg" alt="<?php echo $job_v['ttl']; ?>" width="422" height="280" loading="lazy">
              </picture>
            </div>
            <div class="txt_area">
              <hgroup class="fnt-en por">
                <?php if ( $job_v['sub_ttl'] ): ?>
                  <h4 class="sub_ttl por tbl-ctr fnt-xxs clr-wht poa-bf bg_clr-body_dk-bf bg_clr-body_dk-af w-m lh-10"><?php echo $job_v['sub_ttl']; ?></h4>
                <?php endif ?>
                <h3 class="head5 txt-ctr btm8"><?php echo $job_v['ttl']; ?></h3>
              </hgroup>
              <ul class="tbl-ctr list list-disc">
                <?php foreach ($job_v['jobs'] as $job_item): ?>
                  <li><?php echo $job_item; ?></li>
                <?php endforeach ?>
              </ul>
              <?php
              if ( $job_v['btn_url'] ){
                if ( $job_v['btn_txt'] ) {
                  $btn_label = $job_v['btn_txt'];
                } else {
                  $btn_label = $job_v['ttl'].'を見る';
                }
                if ( $job_v['btn_target'] ) {
                  $btn_target = $job_v['btn_target'];
                } else {
                  $btn_target = false;
                }
                $args = array(
                  'class' => 'tbl-ctr btn-sm', 'hov_area' => true,
                  'label' => $btn_label,
                  'ico' => false,
                  'href' => $job_v['btn_url'], 'target' => $btn_target,
                  'txt_clr' => 'main', 'txt_clr-hov' => 'wht',
                  'bg_clr' => 'main',
                );
                get_template_part('/parts/btn-def', null, $args);
              }
              ?>
            </div>
          </li>
        <?php endforeach ?>
      </ul>
    </div>
  </section>
  <!-- end job -->
  
</main>