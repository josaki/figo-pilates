<main>

  <?php
  $studio_arr = array(
    'shinagawa' => array(
      'label-en' => 'PILATES SHINAGAWA',
      'label-jp' => 'FIGO ピラティス品川',
      'zip' => ZIP_TXT,
      'add' => ADD_TXT,
      'walk' => '青物横丁駅 徒歩2分<br>品川シーサイド駅 徒歩8分<br>大井町駅 徒歩12分<br>鮫洲駅 徒歩5分',
      'bicycle' => '駐輪場あり',
      'tel_link' => TEL_LINK,
      'tel_txt' => TEL_TXT,
      'insta_id' => 'figopilates',
      'insta_url' => INSTA_URL,
      'map_url' => MAP_URL,
    ),
  );
  ?>

  <?php foreach ($studio_arr as $studio_k => $studio_v): ?>

    <!-- start studio-shinagawa -->
    <section class="studio studio-<?php echo $studio_k; ?> bdr_clr-body_lt sect_pdg-sm ofh" id="studio-<?php echo $studio_k; ?>" data-trigger>
      <div class="studio--in por">
        <div class="inner">
          <div class="img_area fade_in-rgt">
            <picture class="img-exterior poa bdr_img poa-bf bdr_clr-body_lt-bf">
              <source media="(max-width: 560px)" srcset="<?php echo get_template_directory_uri(); ?>/images/studio/<?php echo $studio_k; ?>-exterior_img-sp.jpg" type="image/jpeg">
              <source media="(min-width: 561px)" srcset="<?php echo get_template_directory_uri(); ?>/images/studio/<?php echo $studio_k; ?>-exterior_img-pc.jpg" type="image/jpeg">
              <img src="<?php echo get_template_directory_uri(); ?>/images/studio/<?php echo $studio_k; ?>-exterior_img-pc.jpg" alt="外観" width="1024" height="684" loading="lazy" class="ofc">
            </picture>
            <picture class="img-interior poa bdr_img poa-bf bdr_clr-body_lt-bf">
              <source media="(max-width: 560px)" srcset="<?php echo get_template_directory_uri(); ?>/images/studio/<?php echo $studio_k; ?>-interior_img-sp.jpg" type="image/jpeg">
              <source media="(min-width: 561px)" srcset="<?php echo get_template_directory_uri(); ?>/images/studio/<?php echo $studio_k; ?>-interior_img-pc.jpg" type="image/jpeg">
              <img src="<?php echo get_template_directory_uri(); ?>/images/studio/<?php echo $studio_k; ?>-interior_img-pc.jpg" alt="内観" width="1024" height="684" loading="lazy" class="ofc">
            </picture>
          </div>
          <div class="txt_area fade_in-top anm_del200">
            <h2 class="sect_ttl btm32 fade_in">
              <span class="fnt-en clr-main btm8"><?php echo $studio_v['label-en']; ?></span>
              <span class="fnt-jp"><?php echo $studio_v['label-jp']; ?></span>
            </h2>
            
            <div class="map_area por poa-bf bg_clr-wht-bf op40-bf btm16">
              <img src="<?php echo get_template_directory_uri(); ?>/images/common/map-<?php echo $studio_k; ?>.svg" width="286" height="286" alt="マップ">
            </div>
            <ul class="access_list lh-18 flx-1 btm32">
              <li class="access_list--item access_list--item-zip__add flx flx-stt bdr_clr-body_lt">
                <div class="svg_ico"><svg viewBox="<?php echo VB_ICO; ?>" class="clr-body_dk" width="40" height="40"><use xlink:href="#ico-map"></use></svg></div>
                <p>〒<?php echo $studio_v['zip']; ?><br><?php echo $studio_v['add']; ?></p>
              </li>
              <?php if ( $studio_v['walk'] ): ?>
                <li class="access_list--item access_list--item-walk flx flx-stt bdr_clr-body_lt">
                  <div class="svg_ico"><svg viewBox="<?php echo VB_ICO; ?>" class="clr-body_dk" width="40" height="40"><use xlink:href="#ico-walk"></use></svg></div>
                  <p><?php echo $studio_v['walk']; ?></p>
                </li>
              <?php endif ?>
              <?php if ( $studio_v['bicycle'] ): ?>
                <li class="access_list--item access_list--item-bicycle flx flx-stt-ctr bdr_clr-body_lt">
                  <div class="svg_ico"><svg viewBox="<?php echo VB_ICO; ?>" class="clr-body_dk" width="40" height="40"><use xlink:href="#ico-bicycle"></use></svg></div>
                  <p><?php echo $studio_v['bicycle']; ?></p>
                </li>
              <?php endif; ?>
              <?php if ( $studio_v['tel_txt'] ): ?>
                <li class="access_list--item access_list--item-tel flx flx-stt-ctr bdr_clr-body_lt">
                  <div class="svg_ico"><svg viewBox="<?php echo VB_ICO; ?>" class="ico-tel clr-body_dk" width="40" height="40"><use xlink:href="#ico-tel"></use></svg></div>
                  <p class="fnt-en"><a href="tel:<?php echo $studio_v['tel_link']; ?>"><?php echo $studio_v['tel_txt']; ?></a></p>
                </li>
              <?php endif; ?>
              <?php if ( $studio_v['insta_id'] ): ?>
                <li class="access_list--item access_list--item-insta flx flx-stt-ctr bdr_clr-body_lt">
                  <div class="svg_ico"><svg viewBox="<?php echo VB_SNS_ICO; ?>" class="ico-insta clr-body_dk" width="40" height="40"><use xlink:href="#ico-insta"></use></svg></div>
                  <p class="fnt-en"><a href="<?php echo $studio_v['insta_url']; ?>" class="flx flx-stt-ctr" target="_blank">@<?php echo $studio_v['insta_id']; ?><span class="ico ico-outlink"></span></a></p>
                </li>
              <?php endif ?>
            </ul>
            <?php
            if ( $studio_v['map_url'] ) {
              $args = array(
                'class' => 'tbl-lft', 'hov_area' => false,
                'label' => 'GOOGLE MAP',
                'href' => MAP_URL, 'target' => '_blank',
                'txt_clr' => 'main', 'txt_clr-hov' => 'wht',
                'bg_clr' => 'main',
              );
              get_template_part('/parts/btn-def', null, $args);
            }
            ?>
          </div>
        </div>
      </div>
    </section>
    <!-- end studio-shinagawa -->

  <?php endforeach ?>

</main>