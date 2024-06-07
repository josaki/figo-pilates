<?php
//========================================================================
// 管理画面用favicon指定
//========================================================================
function admin_favicon() {
  echo '<link rel="shortcut icon" href="/wp-content/themes/plain/favicon.ico">';
}
add_action('admin_head', 'admin_favicon');


//========================================================================
// admin-style.cssを有効化
//========================================================================
function my_admin_style(){
  wp_enqueue_style( 'my_admin_style', get_template_directory_uri().'/admin-style.css' );
}
add_action( 'admin_enqueue_scripts', 'my_admin_style' );


//========================================================================
// 投稿画面（ビジュアル）にスタイル追加
//========================================================================
add_editor_style("/css/reset.css");
add_editor_style("/css/common.css");
add_editor_style("/css/wysiwyg.css");


//========================================================================
// MW WP FORM ビジュアルエディタ削除
//========================================================================
function visual_editor_off(){
  global $typenow;
  if( in_array( $typenow, array( 'page' ,'mw-wp-form' ) ) ){
    add_filter('user_can_richedit', 'off_visual_editor');
  }
}
function off_visual_editor(){
  return false;
}
add_action( 'load-post.php', 'visual_editor_off' );
add_action( 'load-post-new.php', 'visual_editor_off' );


//========================================================================
// サイドバーに固定ページを追加
//========================================================================
// function add_page_admin_menu() {
//   add_menu_page( '★ページ名★', '★ページ名★', 'read', 'post.php?post=★ページID★&action=edit');
// }
// add_action( 'admin_menu', 'add_page_admin_menu' );