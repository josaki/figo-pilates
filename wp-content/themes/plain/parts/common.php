<?php
/* ##############################################################################

    nav_lst

############################################################################## */

/* nav_list
*************************************************** */
  $nav_list = array(
    'home' => array(
      'type' => 'page',
      'label-jp' => 'ホーム', 'label-en' => 'HOME',
      'desc' => false,
      'header' => true,  'footer' => true,
      'url' => '/', 'other_page' => true, 'outlink' => false, 'smooth' => false,
      'img_src' => 'https://placehold.jp/32/4c5162/ffffff/320x180.png?text=dummy',
      'sub_nav' => false,
    ),
    'studio' => array(
      'type' => 'comp',
      'label-jp' => 'スタジオ', 'label-en' => 'STUDIO',
      'desc' => false,
      'header' => true, 'footer' => true,
      'url' => '/studio/', 'other_page' => true, 'outlink' => false, 'smooth' => false,
      'img_src' => 'https://placehold.jp/32/4c5162/ffffff/320x180.png?text=dummy',
      'sub_nav' => '',
    ),
    'program' => array(
      'type' => 'page',
      'label-jp' => 'プログラム', 'label-en' => 'PROGRAM',
      'desc' => false,
      'header' => true, 'footer' => true,
      'url' => '/program/', 'other_page' => true, 'outlink' => false, 'smooth' => false,
      'img_src' => 'https://placehold.jp/32/4c5162/ffffff/320x180.png?text=dummy',
      'sub_nav' => '',
    ),
    'price' => array(
      'type' => 'page',
      'label-jp' => '料金', 'label-en' => 'PRICE',
      'desc' => false,
      'header' => true, 'footer' => true,
      'url' => '/price/', 'other_page' => true, 'outlink' => false, 'smooth' => false,
      'img_src' => 'https://placehold.jp/32/4c5162/ffffff/320x180.png?text=dummy',
      'sub_nav' => '',
    ),
    'faq' => array(
      'type' => 'page',
      'label-jp' => 'よくある質問', 'label-en' => 'FAQ',
      'desc' => false,
      'header' => true, 'footer' => true,
      'url' => '/faq/', 'other_page' => true, 'outlink' => false, 'smooth' => false,
      'img_src' => 'https://placehold.jp/32/4c5162/ffffff/320x180.png?text=dummy',
      'sub_nav' => '',
    ),
    'recruit' => array(
      'type' => 'comp',
      'label-jp' => '採用情報', 'label-en' => 'RECRUIT',
      'desc' => false,
      'header' => true, 'footer' => true,
      'url' => '/recruit/', 'other_page' => true, 'outlink' => false, 'smooth' => false,
      'img_src' => 'https://placehold.jp/32/4c5162/ffffff/320x180.png?text=dummy',
      'sub_nav' => '',
    ),
    'schedule' => array(
      'type' => 'comp',
      'label-jp' => 'スケジュール', 'label-en' => 'SCHEDULE',
      'desc' => false,
      'header' => true, 'footer' => true,
      'url' => SCHEDULE_URL, 'other_page' => true, 'outlink' => true, 'smooth' => false,
      'img_src' => 'https://placehold.jp/32/4c5162/ffffff/320x180.png?text=dummy',
      'sub_nav' => '',
    ),
    'news' => array(
      'type' => 'comp',
      'label-jp' => 'お知らせ', 'label-en' => 'NEWS',
      'desc' => false,
      'header' => false, 'footer' => true,
      'url' => '/news/', 'other_page' => true, 'outlink' => false, 'smooth' => false,
      'img_src' => 'https://placehold.jp/32/4c5162/ffffff/320x180.png?text=dummy',
      'sub_nav' => false,
    ),
  );

/* head_btn_list
*************************************************** */
  $head_btn_list = '';
  $head_btn_list = array(
    'contact' => array(
      'ico' => 'mail', 'label-jp' => 'お問い合わせ', 'label-en' => 'CONTACT',
      'url' => home_url().'/contact/', 'other_page' => true, 'outlink' => false, 'smooth' => false,
      'clr' => 'wht', 'bg_clr' => 'main',
    ),
  );

/* sub_list
*************************************************** */
  $sub_list = array(
    'privacy' => array(
      'label' => 'プライバシーポリシー', 'fnt' => 'jp',
      'url' => '/privacy/', 'other_page' => true, 'outlink' => false,
      'smooth' => false, 'belong' => false,
    ),
  );


/* ##############################################################################

    SNS_LIST

############################################################################## */
  $sns_list = '';
  if ( LINE_URL || INSTA_URL || X_URL || TIKTOK_URL || PIN_URL || FB_URL ) {
    $sns_list = array();
  }
  if ( LINE_URL ) {
    $sns_list['line'] = LINE_URL;
  }
  if ( INSTA_URL ) {
    $sns_list['insta'] = INSTA_URL;
  }
  if ( YT_URL ) {
    $sns_list['yt'] = YT_URL;
  }
  if ( X_URL ) {
    $sns_list['x'] = X_URL;
  }
  if ( TIKTOK_URL ) {
    $sns_list['tiktok'] = TIKTOK_URL;
  }
  if ( PIN_URL ) {
    $sns_list['pin'] = PIN_URL;
  }
  if ( FB_URL ) {
    $sns_list['fb'] = FB_URL;
  }


/* ##############################################################################

    情報を $detail_info に配列として入れ込む

############################################################################## */
$gqo = get_queried_object();
$info_id = '';
$info_title = '';
$info_slug = '';
$info_taxonomy = '';
$info_parent = '';
$info_parent_slug = '';
$info_template = '';

/* --- トップページ --- */
if ( is_home() || is_front_page() ){
  $info_slug = '/';
  $info_template = 'home';
}

/* --- 固定ページ --- */
elseif ( is_page() ) {
  $info_id = $gqo->ID;
  $info_title = $gqo->post_title;
  $info_slug = $gqo->post_name;
  $info_parent = $gqo->post_parent;
  $info_parent_slug = get_post($info_parent)->post_name;
  $info_template = 'page';
}

/* --- 作者ページ --- */
elseif ( is_author() ) {
  $info_id = $gqo->ID;
  $info_title = $gqo->display_name;
  $info_slug = $gqo->user_nicename;
  $info_template = 'author';
}

/* --- アーカイブページ --- */
elseif ( is_archive() ) {
  // カテゴリ & タクソノミーの場合
  if ( is_category() || is_tax() ) {
    $taxonomy = get_query_var('taxonomy');
    $post_type = get_taxonomy($taxonomy)->object_type[0];
    $info_id = $gqo->term_id;
    $info_title = $gqo->name;
    $info_slug = $gqo->slug;
    $info_taxonomy = $gqo->taxonomy;
    if ( !$info_taxonomy ) {
      $info_taxonomy = 'category';
    }
    if ( is_category() ) {
      $info_parent = $gqo->category_parent;
    } elseif ( is_tax() ){
      $info_parent = $gqo->parent;
    }
  } else {
    $info_title = $gqo->label;
    $info_slug = $gqo->name;
  }
  // 日付けアーカイブの場合
  if ( is_date() ) {
    $year = get_query_var('year');
    $monthnum = get_query_var('monthnum');
    $day = get_query_var('day');
    if ( is_month() ) {
      $datettl = $year.'年'.$monthnum.'月';
    } elseif ( is_year() ) {
      $datettl = $year.'年';
    } else {
      $datettl = $year.'年'.$monthnum.'月'.$day.'日';
    }
    $info_title = $datettl;
  }
  $info_template = 'archive';
}

/* --- 投稿詳細ページ --- */
elseif ( is_single() ) {
  $info_id = $gqo->ID;
  $info_title = $gqo->post_title;
  $info_slug = $gqo->post_name;
  $info_template = 'single';
}

/* --- 404ページ --- */
elseif ( is_404() ){
  $info_title = '404 not found';
  $info_slug = '404';
  $info_template = '404';
}

/* --- 検索結果ページ --- */
elseif ( is_search() ){
  $info_title = '検索結果';
  $info_template = 'search';
}

/* --- 情報の入れ込み --- */
$detail_info = array(
  'title' => $info_title,
  'id' => $info_id,
  'slug' => $info_slug,
  'post_type' => $post_type,
  'taxonomy' => $info_taxonomy,
  'parent' => $info_parent,
  'parent_slug' => $info_parent_slug,
  'template' => $info_template,
);


/* ##############################################################################

    bodyにclass付与

############################################################################## */

/* --- トップページ --- */
if ( is_home() || is_front_page() ){
  $body_class = 'home';
}

/* --- 固定ページ --- */
elseif ( is_page() ) {
  if ( is_subpage() ) {
    $body_class = 'subpage '.$detail_info['template'].' '.$detail_info['template'].'-'.$detail_info['parent_slug'].' '.$detail_info['template'].'-'.$detail_info['slug'];
  } else {
    $body_class = 'subpage '.$detail_info['template'].' '.$detail_info['template'].'-'.$detail_info['slug'];
  }
}

/* --- 作者ページ --- */
elseif ( is_author() ) {
  $body_class = 'subpage '.$detail_info['template'].' '.$detail_info['template'].'-'.$detail_info['post_type'].' '.$detail_info['template'].'-'.$detail_info['post_type'].'-'.$detail_info['id'];
}

/* --- アーカイブページ --- */
elseif ( is_archive() ) {
  if ( is_category() || is_tax() ) {
    $body_class = 'subpage post_type-'.$detail_info['post_type'].' '.$detail_info['template'].' '.$detail_info['template'].'-'.$detail_info['post_type'].' '.$detail_info['taxonomy'].' '.$detail_info['taxonomy'].'-'.$detail_info['slug'];
  } elseif ( is_date() ) {
    if ( is_month() ) {
      $datenum = $year.$monthnum;
    } elseif ( is_year() ) {
      $datenum = $year;
    } else {
      $datenum = $year.$monthnum.$day;
    }
    $body_class = 'subpage post_type-'.$detail_info['post_type'].' '.$detail_info['template'].' '.$detail_info['template'].'-'.$detail_info['post_type'].' date-'.$datenum;
  } else {
    $body_class = 'subpage post_type-'.$detail_info['post_type'].' '.$detail_info['template'].' '.$detail_info['template'].'-'.$detail_info['post_type'];
  }
}

/* --- 投稿詳細ページ --- */
elseif ( is_single() ) {
  $body_class = 'subpage post_type-'.$detail_info['post_type'].' '.$detail_info['template'].' '.$detail_info['template'].'-'.$detail_info['post_type'].' '.$detail_info['template'].'-'.$detail_info['post_type'].'-'.$detail_info['id'];
}

/* --- 404ページ --- */
elseif ( is_404() ) {
  $body_class = 'subpage page-'.$detail_info['template'];
}

/* --- 検索 --- */
else {
  $body_class = 'subpage '.$detail_info['template'];
}

/* --- OS - win --- */
$user_agent = getenv('HTTP_USER_AGENT');
if ( strpos($user_agent,'Windows') !== false ) {
  $body_class .= ' win';
}

?>