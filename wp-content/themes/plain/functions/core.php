<?php
//========================================================================
// 管理バー非表示
//========================================================================
show_admin_bar( false );


//========================================================================
// アイキャッチを使用可能に
//========================================================================
add_theme_support('post-thumbnails');


//========================================================================
// WP絵文字用のjavascriptとcssを削除
//========================================================================
remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'wp_print_styles', 'print_emoji_styles' );

//========================================================================
// ゴミ箱記事の自動削除機能を停止
//========================================================================
function disable_scheduled_delete() {
 remove_action( 'wp_scheduled_delete', 'wp_scheduled_delete' );
}
add_action( 'init', 'disable_scheduled_delete' );

//========================================================================
// カスタム画像サイズ
//========================================================================
// add_image_size('heroimage', 1170, 9999, false);

//========================================================================
// 文字変更
//========================================================================
function custom_gettext( $translated, $text, $domain ) {
  $custom_translates = array(
    'default' => array(
      'ユーザー名またはメールアドレス' => 'ユーザー名',
    )
  );
  if ( isset( $custom_translates[$domain][$translated] ) ) {
    $translated = $custom_translates[$domain][$translated];
  }
  return $translated;
}
add_filter( 'gettext', 'custom_gettext', 10, 3 );


//========================================================================
// カスタム投稿
//========================================================================

add_action('admin_menu', function () {
  remove_menu_page('edit.php');
});

$custom_posts = array(

  /* =======================================

  カスタム投稿を追加する場合は、boostnoteで
  「カスタム投稿を追加する」
  で検索！

  ======================================== */

  // お知らせ
  'news' => array(
    'name' => 'news',
    'label' => 'お知らせ',
    'supports' => array('title','editor'),
    'default_ttl' => 'お知らせのタイトルを入力してください',
    'taxonomy' => array(
      'news_category' => array(
        'tax_name' => 'news_category',
        'tax_label' => 'カテゴリ',
        'tax_default_term' => 'お知らせ',
      ),
    ),
  ),


);

foreach ($custom_posts as $custom_post) {

  // 投稿を作成
  register_post_type(
    $custom_post['name'], //投稿タイプ名
    array(
      'label' => $custom_post['label'], // ラベル名
      'hierarchical' => false,
      'public' => true,
      'query_var' => false,
      'menu_position' => 5,
      'has_archive' => true,
      'supports' => $custom_post['supports'] // supports設定
    )
  );

  // taxonomy（カテゴリ）があれば
  if ( $custom_post['taxonomy'] != "" ) {

    // カテゴリの数だけループ
    foreach ($custom_post['taxonomy'] as $custom_taxonomy) {

      $taxonomy_path = '';
      if ( count($custom_post['taxonomy']) == 1 ) {
        // カテゴリ用のURLを作成
        add_rewrite_rule($custom_post['name'].'/([^/]+)/?$', 'index.php?'.$custom_taxonomy['tax_name'].'=$matches[1]', 'top');
        add_rewrite_rule($custom_post['name'].'/([^/]+)/page/?([0-9]{1,})/?$', 'index.php?'.$custom_taxonomy['tax_name'].'=$matches[1]&paged=$matches[2]', 'top');
      } else {
        // 「投稿タイプ名_」をのぞいた文字列を取得
        $taxonomy_path = str_replace($custom_post['name'].'_', '', $custom_taxonomy['tax_name']);
        // カテゴリ用のURLを作成
        add_rewrite_rule($custom_post['name'].'/'.$taxonomy_path.'/([^/]+)/?$', 'index.php?'.$custom_taxonomy['tax_name'].'=$matches[1]', 'top');
        add_rewrite_rule($custom_post['name'].'/'.$taxonomy_path.'/([^/]+)/page/?([0-9]{1,})/?$', 'index.php?'.$custom_taxonomy['tax_name'].'=$matches[1]&paged=$matches[2]', 'top');
      }

      if ( $taxonomy_path != '' ) {
        // 取得した文字列があれば、urlのrewrite用にスラッシュを追加
        $taxonomy_path = '/'.$taxonomy_path;
      }
      // カスタムタクソノミーを定義
      register_taxonomy(
        $custom_taxonomy['tax_name'], // タクソノミー名
        $custom_post['name'], // 投稿タイプ名
        array(
          'label' => $custom_taxonomy['tax_label'], // タクソノミーのラベル
          'hierarchical' => true,
          'rewrite' => array(
            'slug' => '/'.$custom_post['name'].$taxonomy_path, // カテゴリURLの指定
            'hierarchical' => true
          )
        )
      );

      // カスタム投稿タイプで、カテゴリ未選択時にデフォルトで「未分類」を設定
      add_action( 'publish_'.$custom_post['name'], function() use ($custom_taxonomy) {
        global $wpdb;
        global $post_ID;
        $curTerm = wp_get_object_terms($post_ID, $custom_taxonomy['tax_name']);
        if (0 == count($curTerm)) {
          $defaultTerm = array($custom_taxonomy['tax_default_term']);
          wp_set_object_terms($post_ID, $defaultTerm,$custom_taxonomy['tax_name'] );
        }
      });

      // カスタムタクソノミーの詳細ページに出る文言を変更
      add_action( 'init', function() use ($custom_taxonomy) {
        global $wp_taxonomies;
        $labels_cat = $wp_taxonomies[$custom_taxonomy['tax_name']]->labels;
        $labels_cat->name = $custom_taxonomy['tax_label'];
        $labels_cat->add_new_item = $custom_taxonomy['tax_label'].'を追加';
        $labels_cat->edit_item = $custom_taxonomy['tax_label'].'の編集';
        $labels_cat->all_items = $custom_taxonomy['tax_label'].'一覧';
        $labels_cat->search_items = $custom_taxonomy['tax_label'].'を検索';
        $labels_cat->not_found = $custom_taxonomy['tax_label'].'が見つかりませんでした';
      } );

      // 日本語カテゴリの場合idに自動変換用セット
      add_action( 'create_'.$custom_taxonomy['tax_name'], 'post_taxonomy_auto_slug', 10 );

    }
  }

  // // 投稿時のタイトルを変更
  add_filter( 'enter_title_here', function() use ($custom_post) {
    $screen = get_current_screen();
    global $title;
    if ( $screen->post_type == $custom_post['name'] ) {
      $title = $custom_post['default_ttl'];
    }
    return $title;
  } );

}

// 日本語カテゴリの場合idに自動変換
function post_taxonomy_auto_slug( $term_id ) {
  $tax = str_replace( 'create_', '', current_filter() );
  $term = get_term( $term_id, $tax );
  if ( preg_match( '/(%[0-9a-f]{2})+/', $term->slug ) ) {
    $args = array(
      'slug' => $term->taxonomy . '-' . $term->term_id
    );
    wp_update_term( $term_id, $tax, $args );
  }
}