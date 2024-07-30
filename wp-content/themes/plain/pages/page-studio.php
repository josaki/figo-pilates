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
      'line_link' => LINE_URL,
      'insta_id' => 'figopilates',
      'insta_url' => INSTA_URL,
      'map_url' => MAP_URL,
      'staff_label' => '品川店スタッフ',
      'staff' => array(
        'jurina' => array(
          'name' => 'JURINA',
          'qual' => array(
            'Twothreeピラティスアカデミー リフォーマー資格',
            'NESTA認定　ダイエットビューティースペシャリスト',
          ),
          'cmnt' => 'ピラティスを通じて、皆さんが健康でバランスの取れた身体を手に入れるお手伝いをしています。個々のニーズや目標に合わせたプログラムを提供し、正しい姿勢と呼吸法を重視しています。一緒に健康な身体と心を育みましょう！',
        ),
      ),
    ),
  );
  ?>

  <?php foreach ($studio_arr as $studio_k => $studio_v): ?>

    <!-- start studio-shinagawa -->
    <section class="studio studio-<?php echo $studio_k; ?> bdr_clr-body_lt sect_pdg-sm ofh" id="studio-<?php echo $studio_k; ?>" data-trigger>
      <div class="studio--in por">
        <h2 class="sect_ttl txt-ctr btm56 fade_in">
          <span class="fnt-en clr-main btm8"><?php echo $studio_v['label-en']; ?></span>
          <span class="fnt-jp"><?php echo $studio_v['label-jp']; ?></span>
        </h2>
        <div class="img_area flx fade_in-rgt">
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
        <div class="inner">
          <div class="txt_area fade_in-top anm_del200 flx">
            <div class="map_area por poa-bf bg_clr-wht-bf op40-bf">
              <img src="<?php echo get_template_directory_uri(); ?>/images/common/map-<?php echo $studio_k; ?>.svg" width="340" height="340" alt="マップ">
            </div>
            <div class="info flx-1 flx flx-col">
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
                <?php if ( $studio_v['line_link'] ): ?>
                  <li class="access_list--item access_list--item-tel flx flx-stt-ctr bdr_clr-body_lt">
                    <div class="svg_ico"><svg viewBox="<?php echo VB_ICO; ?>" class="ico-line clr-body_dk" width="40" height="40"><use xlink:href="#ico-line"></use></svg></div>
                    <p class="fnt-en"><a href="<?php echo $studio_v['line_link']; ?>" class="flx flx-stt-ctr ts hov-clr-line" target="_blank" rel="nofollow">公式LINE<span class="ico ico-outlink"></span></a></p>
                  </li>
                <?php endif; ?>
                <?php if ( $studio_v['insta_id'] ): ?>
                  <li class="access_list--item access_list--item-insta flx flx-stt-ctr bdr_clr-body_lt">
                    <div class="svg_ico"><svg viewBox="<?php echo VB_SNS_ICO; ?>" class="ico-insta clr-body_dk" width="40" height="40"><use xlink:href="#ico-insta"></use></svg></div>
                    <p class="fnt-en"><a href="<?php echo $studio_v['insta_url']; ?>" class="flx flx-stt-ctr ts hov-clr-insta" target="_blank">@<?php echo $studio_v['insta_id']; ?><span class="ico ico-outlink"></span></a></p>
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
        <div class="inner inner-lg">
          <?php if ( is_array($studio_v['staff']) ): ?>
            <div class="fix_wrap staff_area flx flx-btw-stt flx-xspc-blc">
              <aside class="side_column">
                <div class="side_column--in">
                  <h2 class="sect_ttl txt-ctr-xspc fade_in">
                    <span class="fnt-en clr-main btm8">STAFF</span>
                    <span class="fnt-jp"><?php echo $studio_v['staff_label']; ?></span>
                  </h2>
                </div>
              </aside>
              <main class="main_column">
                <ul class="staff_list clm clm-2 clm-1-lgsp fade_in">
                  <?php foreach ($studio_v['staff'] as $staff_k => $staff_v): ?>
                    <li class="staff_list--item bg_clr-wht">
                      <div class="img_area">
                        <picture class="bdr_img">
                          <source srcset="<?php echo get_template_directory_uri(); ?>/images/studio/staff_img-<?php echo $staff_k; ?>.jpg 1x, <?php echo get_template_directory_uri(); ?>/images/studio/staff_img-<?php echo $staff_k; ?>@2x.jpg 2x" type="image/jpeg">
                          <img src="<?php echo get_template_directory_uri(); ?>/images/studio/staff_img-<?php echo $staff_k; ?>.jpg" alt="<?php echo $staff_v['name']; ?>" width="500" height="354" loading="lazy">
                        </picture>
                      </div>
                      <div class="txt_area flx flx-col">
                        <h3 class="head2 name lh-10 fnt-en clr-main txt-ctr"><?php echo $staff_v['name']; ?></h3>
                        <?php if ( is_array($staff_v['qual']) ): ?>
                          <ul class="qual_list">
                            <?php foreach ($staff_v['qual'] as $qual_v): ?>
                              <li class="qual_list--item w-m bdr_clr-body_lt lh-16"><?php echo $qual_v; ?></li>
                            <?php endforeach ?>
                          </ul>
                        <?php endif ?>
                        <?php if ( $staff_v['cmnt'] ): ?>
                          <p class="cmnt fnt-sm lh-18"><?php echo $staff_v['cmnt']; ?></p>
                        <?php endif ?>
                      </div>
                    </li>
                  <?php endforeach ?>
                </ul>
              </main>
            </div>
          <?php endif ?>
        </div>
      </div>
    </section>
    <!-- end studio-shinagawa -->

  <?php endforeach ?>

</main>