<?php include(TEMPLATEPATH . '/parts/common.php'); ?>

<?php if ( is_page('faq') ): ?>

  <div class="btn-fix_btm ofh xspc-show bg_clr-body_dk poa-bf bg_clr-main-bf clr-wht txt-ctr ts ts-bf">
    <?php
    if ( is_page('faq') ) {
      $btn_txt = '<span class="w-m">質問一覧を<span class="open_txt">見る</span><span class="close_txt">閉じる</span></span>';
    }
    ?>
    <p class="flx flx-ctr"><?php echo $btn_txt; ?></p>
  </div>

<?php endif; ?>

<footer class="footer bg_clr-wht bdr_clr-body_lt por">
  <nav class="footer--nav">
    <?php include(TEMPLATEPATH . '/parts/bnr_list.php'); ?>
    <div class="access bdr_clr-body_lt">
      <hgroup class="ttl__btn flx flx-btw-ctr bdr_clr-body_lt">
        <div class="ttl flx flx-stt-end flx-sp-blc">
          <h3 class="head2 w-m lh-10 fnt-en ls-150">ACCESS</h3>
          <p class="txt w-m lh-10">アクセス</p>
        </div>
        <?php
        $args = array(
          'class' => 'btn-sm', 'hov_area' => false,
          'label' => 'GOOGLE MAP',
          'ico' => false,
          'href' => MAP_URL, 'target' => '_blank',
          'txt_clr' => 'main', 'txt_clr-hov' => 'wht',
          'bg_clr' => 'main',
        );
        get_template_part('/parts/btn-def', null, $args);
        ?>
      </hgroup>
      <div class="access_list__map flx flx-btw-ctr flx-rev flx-sp-blc">
        <img src="<?php echo get_template_directory_uri(); ?>/images/common/map-shinagawa.svg" width="286" height="286" alt="マップ" class="map_img">
        <ul class="access_list fnt-sm lh-18 flx-1">
          <li class="access_list--item flx flx-stt bdr_clr-body_lt">
            <div class="svg_ico"><svg viewBox="<?php echo VB_ICO; ?>" class="clr-body_dk" width="40" height="40"><use xlink:href="#ico-map"></use></svg></div>
            <p>〒<?php echo ZIP_TXT; ?><br><?php echo ADD_TXT; ?></p>
          </li>
          <li class="access_list--item flx flx-stt bdr_clr-body_lt">
            <div class="svg_ico"><svg viewBox="<?php echo VB_ICO; ?>" class="clr-body_dk" width="40" height="40"><use xlink:href="#ico-walk"></use></svg></div>
            <p>青物横丁駅 徒歩2分<br>品川シーサイド駅 徒歩8分<br>大井町駅 徒歩12分<br>鮫洲駅 徒歩5分</p>
          </li>
          <li class="access_list--item flx flx-stt-ctr bdr_clr-body_lt">
            <div class="svg_ico"><svg viewBox="<?php echo VB_ICO; ?>" class="clr-body_dk" width="40" height="40"><use xlink:href="#ico-bicycle"></use></svg></div>
            <p>駐輪場あり</p>
          </li>
        </ul>
      </div>
    </div>
    <div class="info_area flx flx-btw-end flx-sp-blc">
      <h3 class="logo flx flx-col flx-ctr">
        <img src="<?php echo get_template_directory_uri(); ?>/images/common/logo_blk-ver.svg" alt="<?php echo wp_title(); ?>" width="160" height="138" loading="lazy">
        <span class="w-m lh-10"><?php echo C_NAME; ?></span>
      </h3>
      <div class="sns_area flx flx-end-ctr">
        <h4 class="fnt-en ls-300">Follow us</h4>
        <ul class="sns_list flx flx-ctr">
          <?php foreach ($sns_list as $sns_k => $sns_url): ?>
            <li class="sns_list--item">
              <a href="<?php echo $sns_url; ?>" target="_blank" rel="nofollow" class="flx flx-ctr">
                <svg viewBox="<?php echo VB_SNS_ICO; ?>" class="clr-def hov-clr-<?php echo $sns_k; ?> op50 hov-op100 ts" width="24" height="24"><use xlink:href="#ico-<?php echo $sns_k; ?>"></use></svg>
              </a>
            </li>
          <?php endforeach ?>
        </ul>
      </div>
    </div>
  </nav>
  <div class="sublist__copy bg_clr-body_dk flx flx-btw-ctr flx-rev flx-lgsp-blc">
    <ul class="sub_list flx lh-10">
      <?php foreach ($sub_list as $sub_k => $sub_v): ?>
        <?php
        $sub_tag_class = 'sublist--item_in clr-wht por op90 hov-op100 ts';
        $sub_target = '';
        if ( $sub_v['smooth'] ) {
          $sub_tag_class .= ' smooth';
          if ( $detail_info['slug'] == $sub_v['belong'] ) {
            $sub_href = $sub_v['url'];
          } else {
            $sub_href = home_url().'/'.$sub_v['belong'].'/'.$sub_v['url'];
          }
        } elseif( $sub_v['outlink'] ) {
          $sub_href = $snav_v['url'];
          $sub_target = ' target="_blank"';
        } else {
          $sub_href = home_url().$sub_v['url'];
        }
        if ( $sub_v['other_page'] ) {
          $sub_tag_stt = '<a href="'.$sub_href.'" class="'.$sub_tag_class.'"'.$sub_target.'>';
          $sub_tag_end = '</a>';
        } else {
          $sub_tag_stt = '<span class="'.$sub_tag_class.'">';
          $sub_tag_end = '</span>';
        }
        $sub_label = '';
        if ( $sub_v['label'] ) {
          $sub_label .= '<span class="txt fnt-xxs fnt-'.$sub_v['fnt'].'">'.$sub_v['label'].'</span>';
        }
        ?>
        <li class="sub_list--item">
          <?php echo $sub_tag_stt.$sub_label.$sub_tag_end; ?>
        </li>
      <?php endforeach ?>
    </ul>
    <p class="footer--copyright fnt-en clr-wht txt-ctr-lgsp lh-10">
      <span class="fnt-xxs lh-14">&copy; <?php echo COPY_YEAR.' '.COPY_NAME; ?> All Rights Reserved.</span>
      <span class="recaptcha_txt fnt-maxs lh-14 ls-50">This site is protected by reCAPTCHA and <br class="sp-show">the Google <a href="https://policies.google.com/privacy" target="_blank" class="clr-wht">Privacy Policy</a> and <a href="https://policies.google.com/terms" target="_blank" class="clr-wht">Terms of Service</a> apply.</span>
    </p>
  </div>
</footer>

</div>
<!-- /.wrapper -->

<?php
// ページごとの分岐などもして全てのJSをmain_js.phpの中で書く。
include(TEMPLATEPATH . '/js/main_js.php'); ?>

<?php wp_footer(); ?>

</body>
</html>
