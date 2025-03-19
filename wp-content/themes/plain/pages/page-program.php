<main>

  <!-- start lesson -->
  <section class="lesson" id="lesson" data-trigger>
    <div class="inner inner-lg sect_pdg-sm pdg_no-btm">
      <?php
      $lesson_arr = array(
        'basic' => array(
          'label' => 'Basic',
          'desc' => 'ピラティスの動きの基礎の習得と体の土台作りを目的とするクラス。基本的な呼吸法・動きを丁寧に説明しながら実践していき、姿勢の改善やコアの安定を目指します。',
          'url' => 'https://coubic.com/figo4/4908220#pageContent',
        ),
        'basic_power' => array(
          'label' => 'BasicPower',
          'desc' => 'ピラティスの動きの基礎の習得と体の土台作りを目的とするクラス。基本的な呼吸法・動きを丁寧に説明しながら実践していくと共に、運動強度を上げ、身体をたくさん動かしていきます。',
          'url' => 'https://coubic.com/figo4/3143605#pageContent',
        ),
        'hip_leg' => array(
          'label' => 'Hip&Leg',
          'desc' => 'お尻と脚のエクササイズを集中的に働きかけるクラスです。',
          'url' => 'https://coubic.com/figo4/2479736#pageContent',
        ),
        'waist' => array(
          'label' => 'Waist',
          'desc' => '腹部の引き締めと体幹の強化を目的としたエクササイズ中心に働きかけるクラスです。',
          'url' => 'https://coubic.com/figo4/3745516#pageContent',
        ),
        'back_arm' => array(
          'label' => 'Back&Arm',
          'desc' => '背中と腕のエクササイズを中心に働きかけるクラスです。肩こりの解消などにも効果的です。',
          'url' => 'https://coubic.com/figo4/4154621#pageContent',
        ),
        'relax_stretch' => array(
          'label' => 'Relax&Stretch',
          'desc' => 'ストレッチ種目を中心に体の柔軟性を高め、自律神経の安定などを目的とするクラスです',
          'url' => 'https://coubic.com/figo4/3536262#pageContent',
        ),
      );
      ?>
      <ul class="lesson_list clm clm-3 clm-2-xspc clm-1-sp">
        <?php $lesson_i = 0; foreach ($lesson_arr as $lesson_k => $lesson_v): $lesson_i++; ?>
          <li class="lesson_list--item flx flx-col fade_in-lft anm_del<?php echo $lesson_i*100; ?>">
            <div class="img_area btm16 tbl-ctr">
              <picture class="bdr_img bdr_clr-body_lt">
                <source srcset="<?php echo get_template_directory_uri(); ?>/images/program/program_img-<?php echo $lesson_k; ?>.jpg 1x, <?php echo get_template_directory_uri(); ?>/images/program/program_img-<?php echo $lesson_k; ?>@2x.jpg 2x" type="image/jpeg">
                <img src="<?php echo get_template_directory_uri(); ?>/images/program/program_img-<?php echo $lesson_k; ?>.jpg" alt="<?php echo $lesson_v['label']; ?>" width="442" height="265" loading="lazy">
              </picture>
            </div>
            <h3 class="head3 fnt-en txt-ctr btm8"><?php echo $lesson_v['label']; ?></h3>
            <div class="mgn_txts btm24">
              <p><?php echo $lesson_v['desc']; ?></p>
            </div>
            <?php
            $args = array(
              'class' => 'btn-sm tbl-ctr', 'hov_area' => false,
              'label' => $lesson_v['label'].'を予約する',
              'ico' => false,
              'href' => $lesson_v['url'], 'target' => '_blank',
              'txt_clr' => 'main', 'txt_clr-hov' => 'wht',
              'bg_clr' => 'main',
            );
            get_template_part('/parts/btn-def', null, $args);
            ?>
          </li>
        <?php endforeach ?>
      </ul>
    </div>
  </section>
  <!-- end lesson -->

  <?php include(TEMPLATEPATH . '/parts/sect-schedule.php'); ?>

</main>