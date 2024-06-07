<div class="inner sect_pdg-sm">
  <?php if (have_posts()) : ?>
  <div class="fix_wrap flx flx-btw-stt flx-xspc-blc">
    <main class="main_column cont_vis">
      <div class="news_list flx flx-col">
        <?php
        while ( have_posts() ){
          the_post();
          get_template_part('parts/post-news');
        }
        ?>
      </div>
      <?php if(function_exists('wp_pagenavi')) { wp_pagenavi(); } ?>
    </main>
    <?php get_sidebar(); ?>
  </div>
  <?php else: ?>
    <p>記事はみつかりません。</p>
  <?php endif; ?>
</div>