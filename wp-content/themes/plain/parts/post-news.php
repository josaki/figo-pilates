<?php
$link_flg = false;
$content = get_the_content();
$out_link = get_field('out_link');
$tax_name = get_post_type($post->ID).'_category';
$terms = get_the_terms( $post->ID, $tax_name );
if ( is_array($terms) ) {
  $the_term_slug = $terms[0]->slug;
  $the_term_name = $terms[0]->name;
  $the_term_link = get_term_link($terms[0]);
}
$blank = '';
// 外部リンクチェックがある場合
if ( $out_link ) {
  $link_flg = true;
  $out_link_url = get_field('out_link_url');
  $other_window = get_field('other_window');
  $permalink = $out_link_url;
  if ( !$permalink ) {
    $permalink = get_the_permalink();
  }
  if ( $other_window ) {
    $blank = ' target="_blank"';
  }
}
// 本文がない場合
elseif ( !$content ) {
  $permalink = 'javascript:void(0);';
}
// 外部リンクでない場合はWP詳細ページ
else {
  $link_flg = true;
  $permalink = get_the_permalink();
}
?>
<article class="post bg_clr-wht flx flx-stt-ctr flx-wrap-c ts<?php if( !$link_flg ){ echo ' no_hov'; } ?>">
  <p class="post--date fnt-en"><?php echo date('Y.m.d - D', strtotime($post->post_date)); ?></p>
  <?php if ( is_array($terms) ): ?>
    <div class="post--cats por"><a href="<?php echo $the_term_link; ?>" class="ts-fast"><?php echo $the_term_name; ?></a></div>
  <?php endif ?>
  <h2 class="post--ttl">
    <a href="<?php echo $permalink; ?>"<?php echo $blank; ?> class="post--link<?php if( $link_flg ){ echo ' hov-clr-main ts'; } ?>">
      <?php the_title(); ?>
      <?php if ( $link_flg ): ?>
        <span class="arrow_wrap">
          <span class="ico ico-arrow ico-arrow-rgt bg_clr-def-bf bg_clr-def-af op25"></span>
        </span>
      <?php endif ?>
    </a>
  </h2>
</article>