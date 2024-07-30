<main>

  <!-- start btn_area -->
  <section class="btn_area bdr_clr-body_lt" id="btn_area" data-trigger>
    <div class="inner sect_pdg-sm">
      <p class="fnt-xxl txt-ctr txt-jus-lgsp btm40">FIGO ピラティス品川店へのご質問、ご意見などは<br class="lgsp-none">問い合わせフォームまたは公式LINEより承っております。</p>
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
          'href' => '#cf_form', 'target' => '',
          'txt_clr' => 'main', 'txt_clr-hov' => 'wht',
          'bg_clr' => 'main',
        );
        get_template_part('/parts/btn-def', null, $args);
        ?>
      </div>
    </div>
  </section>
  <!-- end btn_area -->


  <!-- start contact_bloc-form -->
  <section class="contact_bloc-form" id="contact_bloc-form" data-trigger>
    <div class="inner inner-sm">
      <div class="cf_form cf_form-input sect_pdg-sm" id="cf_form">
        <?php the_content(); ?>
      </div>
    </div>
  </section>
  <!-- end contact_bloc-form -->

</main>