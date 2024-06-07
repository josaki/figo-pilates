<?php include(TEMPLATEPATH . '/parts/common.php'); ?>

<?php if ( $post_type == 'news' ): ?>
  <div class="search_btn fnt-bold flx flx-stt-ctr">
    <div class="search_btn--plus por poa-bf bg_clr-def-bf"><span class="line bg_clr-main ts-fast"></span><span class="line bg_clr-main ts-fast"></span></div>
    お知らせを絞り込む
  </div>
<?php endif ?>

<aside class="side_column ts-fast">
  <div class="side_column--in">

    <?php
    // BLOG
    // ==================================================
    if( $post_type == 'blog' ){
      include(TEMPLATEPATH . '/sidebars/sidebar-blog.php');

    // NEWS
    // ==================================================
    } elseif ( $post_type == 'news' ) {
      include(TEMPLATEPATH . '/sidebars/sidebar-news.php');

    // FAQ
    // ==================================================
    } elseif ( is_page('faq') ) {
      include(TEMPLATEPATH . '/sidebars/sidebar-faq.php');
    } ?>

  </div>
</aside>