<?php get_header(); ?>

<?php
// STUDIO
// ==================================================
if( is_page('studio') ) {
  include(TEMPLATEPATH . '/pages/page-studio.php');

// PROGRAM
// ==================================================
} elseif( is_page('program') ) {
  include(TEMPLATEPATH . '/pages/page-program.php');

// PRICE
// ==================================================
} elseif( is_page('price') ) {
  include(TEMPLATEPATH . '/pages/page-price.php');

// FAQ
// ==================================================
} elseif( is_page('faq') ) {
  include(TEMPLATEPATH . '/pages/page-faq.php');

// RECRUIT
// ==================================================
} elseif( is_page('recruit') ) {
  include(TEMPLATEPATH . '/pages/page-recruit.php');

// TRIAL
// ==================================================
} elseif( is_page('trial') ) {
  include(TEMPLATEPATH . '/pages/page-trial.php');

// CONTACT
// ==================================================
} elseif( is_page('contact') ) {
  include(TEMPLATEPATH . '/pages/page-contact.php');

// PRIVACY
// ==================================================
} elseif( is_page('privacy') ) {
  include(TEMPLATEPATH . '/pages/page-privacy.php');

} ?>

<?php get_footer(); ?>