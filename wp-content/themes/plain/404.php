<?php get_header(); ?>

<main class="sect_pdg">
  <div class="inner txt-ctr">
    <p class="btm40">あなたがアクセスしようとしたページは削除されたかURLが変更されています。</p>
    <?php
    $args = array(
      'class' => 'tbl-ctr', 'hov_area' => false,
      'label' => 'トップページに戻る',
      'ico' => false,
      'href' => home_url(), 'target' => '',
      'txt_clr' => 'main', 'txt_clr-hov' => 'wht',
      'bg_clr' => 'main',
    );
    get_template_part('/parts/btn-def', null, $args);
    ?>
  </div>
</main>

<?php get_footer(); ?>