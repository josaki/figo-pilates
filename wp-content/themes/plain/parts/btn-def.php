<?php
if ( $args['hov_area'] ){
  $stt_tag = 'span';
  $end_tag = 'span';
} else {
  $stt_tag = 'a href="'.$args['href'].'"';
  $end_tag = 'a';
}
$target = '';
if ( $args['target'] ) {
  $target = ' target="_'.$args['target'].'" rel="nofollow"';
}
?>
<div class="btn btn-def hov_area fade_in <?php echo $args['class']; ?>">
  <<?php echo $stt_tag; ?> class="btn--in ofh flx flx-ctr por clr-<?php echo $args['txt_clr']; ?> hov-clr-<?php echo $args['txt_clr-hov']; ?>"<?php echo $target; ?>>
    <span class="txt w-m ts flx flx-ctr fnt-en">
      <?php if ( $args['ico'] ): ?>
        <svg viewBox="<?php echo VB_ICO; ?>" class="clr-<?php echo $args['txt_clr']; ?> hov-clr-<?php echo $args['txt_clr-hov']; ?> ts" width="18" height="18"><use xlink:href="#ico-<?php echo $args['ico']; ?>"></use></svg>
      <?php endif ?>
      <?php echo $args['label']; ?>
      <?php if ( $args['target'] ): ?>
        <span class="ico ico-outlink ts-bf ts-af bdr_clr-<?php echo $args['txt_clr']; ?>-bf bdr_clr-<?php echo $args['txt_clr']; ?>-af hov-bdr_clr-<?php echo $args['txt_clr-hov']; ?>-bf hov-bdr_clr-<?php echo $args['txt_clr-hov']; ?>-af "></span>
      <?php endif ?>
    </span>
    <span class="bg op10-bf poa-bf bg_clr-<?php echo $args['bg_clr']; ?>-bf bg_clr-<?php echo $args['bg_clr']; ?>-af ts-af">
      <span class="line line-top clr-<?php echo $args['txt_clr']; ?> hov-clr-<?php echo $args['txt_clr-hov']; ?> poa ts"></span>
      <span class="line line-btm clr-<?php echo $args['txt_clr']; ?> hov-clr-<?php echo $args['txt_clr-hov']; ?> poa ts"></span>
    </span>
  </<?php echo $end_tag; ?>>
</div>

<?php if ( $args['hov_area'] ): ?>
  <a href="<?php echo $args['href']; ?>" class="poa zi1"<?php echo $target; ?>></a>
<?php endif; ?>