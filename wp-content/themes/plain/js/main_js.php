<?php
/* ★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★

    外部読み込みは上部で分岐する

★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★ */
?>

<?php
/* common
*************************************************** */ ?>
<script src="<?php echo get_template_directory_uri(); ?><?php latest_cache('/js/body_min.js'); ?>" defer></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/plugin/ScrollTrigger.min.js" defer></script>
<script src="<?php echo get_template_directory_uri(); ?><?php latest_cache('/js/common.js'); ?>" defer></script>


<?php if ( is_home() || is_front_page() ): ?>
  <script src="<?php echo get_template_directory_uri(); ?><?php latest_cache('/js/home.js'); ?>" defer></script>
<?php endif; ?>


<?php if ( is_page('studio') ): ?>
  <script src="<?php echo get_template_directory_uri(); ?>/js/plugin/slick.min.js" defer></script>
  <script src="<?php echo get_template_directory_uri(); ?><?php latest_cache('/js/studio.js'); ?>" defer></script>
<?php endif; ?>

<?php if ( is_page('faq') ): ?>
  <script src="<?php echo get_template_directory_uri(); ?><?php latest_cache('/js/faq.js'); ?>" defer></script>
<?php endif ?>

<?php if ( is_page('contact') ): ?>
  <script src="<?php echo get_template_directory_uri(); ?>/js/plugin/ajaxzip3.js" defer></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/plugin/autoKana.js" defer></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/plugin/jquery.validationEngine-ja.js" defer></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/plugin/jquery.validationEngine.min.js" defer></script>
  <script src="<?php echo get_template_directory_uri(); ?><?php latest_cache('/js/form.js'); ?>" defer></script>
<?php endif ?>

<?php
/* archive & single
*************************************************** */
if( is_archive() || is_tax() || is_single() ): ?>
  <script src="<?php echo get_template_directory_uri(); ?><?php latest_cache('/js/arc_single.js'); ?>" defer></script>
  <?php if ( is_single() ): ?>
    <script src="<?php echo get_template_directory_uri(); ?><?php latest_cache('/js/single.js'); ?>" defer></script>
  <?php endif ?>
<?php endif; ?>

<?php
/* sticky
*************************************************** */
if( is_home() || is_front_page() || is_archive() || is_tax() || is_single() || is_page('faq') ): ?>
  <script src="<?php echo get_template_directory_uri(); ?>/js/plugin/sticky-sidebar.min.js" defer></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/plugin/ResizeSensor.js" defer></script>
  <script src="<?php echo get_template_directory_uri(); ?><?php latest_cache('/js/sticky_sidebar.js'); ?>" defer></script>
<?php endif; ?>
