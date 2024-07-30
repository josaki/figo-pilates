<!DOCTYPE html>
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="ja"><![endif]-->
<!--[if IE 7]><html class="no-js lt-ie9 lt-ie8" lang="ja"><![endif]-->
<!--[if IE 8]><html class="no-js lt-ie9" lang="ja"><![endif]-->
<!--[if gt IE 8]><!--><html class="no-js" lang="ja"><!--<![endif]-->
<head>
<meta charset="UTF-8">
<meta http-equiv="x-dns-prefetch-control" content="on">
<script>
  if(navigator.userAgent.match(/(iPhone|Android.*Mobile)/)) {
    document.head.insertAdjacentHTML('beforeend', '<meta name="viewport" content="width=device-width,initial-scale=1.0">');
  } else {
    document.head.insertAdjacentHTML('beforeend', '<meta name="viewport" content="width=1480,maximum-scale=2.0,user-scalable=1">');
  };
</script>
<meta name="format-detection" content="telephone=no">
<title><?php wp_title(); ?></title>
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-PR3HXPFV');</script>
<!-- End Google Tag Manager -->

<?php wp_head(); ?>
<?php include(TEMPLATEPATH . '/parts/common.php'); ?>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400..500&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
<link href="<?php echo get_template_directory_uri(); ?>/css/reset.css" rel="stylesheet">
<?php if ( is_page('studio') ): ?>
  <link href="<?php echo get_template_directory_uri(); ?><?php latest_cache('/css/plugin/slick.css'); ?>" rel="stylesheet">
<?php endif; ?>

<link href="<?php echo get_template_directory_uri(); ?><?php latest_cache('/css/common.css'); ?>" rel="stylesheet">
<link href="<?php echo get_template_directory_uri(); ?><?php latest_cache('/css/main.css'); ?>" rel="stylesheet">
<link href="<?php echo get_template_directory_uri(); ?><?php latest_cache('/css/megamenu-'.MEGAMENU_TYPE.'.css'); ?>" rel="stylesheet">
<link href="<?php echo get_template_directory_uri(); ?><?php latest_cache('/css/gnav-'.GNAV_TYPE.'.css'); ?>" rel="stylesheet">
<?php if ( is_single() ): ?>
  <link href="<?php echo get_template_directory_uri(); ?><?php latest_cache('/css/wysiwyg.css'); ?>" rel="stylesheet">
<?php endif ?>
<link rel="stylesheet" media="print" href="<?php echo get_template_directory_uri(); ?>/css/print.css">
<script>
  var agent = window.navigator.userAgent.toLowerCase();
  var ipad = agent.indexOf('ipad') > -1 || agent.indexOf('macintosh') > -1 && 'ontouchend' in document;
  if ( ipad == true ) {
    document.head.insertAdjacentHTML('beforeend', '<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?><?php latest_cache('/css/tablet.css'); ?>">');
  };
</script>
<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico" />
<link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/apple-touch-icon.png">
</head>

<body class="<?php echo $body_class; ?> clr-def bg_clr-body" id="top">

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PR3HXPFV"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<?php include(TEMPLATEPATH . '/parts/svgs.php'); ?>

<div id="loading" class="flx flx-ctr">
  <div class="layers">
    <div class="layer bg_clr-wht poa-bf"></div>
  </div>
  <div class="loading--cont por">
    <div class="logo flx flx-col flx-ctr">
      <div class="logo-mark por">
        <svg viewBox="<?php echo VB_LOGO_MARK_PARTS_01; ?>" class="logo_mark-top_lft clr-def"><use xlink:href="#logo_mark-top_lft"></use></svg>
        <svg viewBox="<?php echo VB_LOGO_MARK_PARTS_02; ?>" class="logo_mark-top_rgt clr-def"><use xlink:href="#logo_mark-top_rgt"></use></svg>
        <svg viewBox="<?php echo VB_LOGO_MARK_PARTS_02; ?>" class="logo_mark-btm_lft clr-def"><use xlink:href="#logo_mark-btm_lft"></use></svg>
        <svg viewBox="<?php echo VB_LOGO_MARK_PARTS_01; ?>" class="logo_mark-btm_rgt clr-def"><use xlink:href="#logo_mark-btm_rgt"></use></svg>
      </div>
      <div class="logo-txt por">
        <svg viewBox="<?php echo VB_LOGO_TXT; ?>" class="txt clr-def" width="254" height="27"><use xlink:href="#logo_txt"></use></svg>
        <svg viewBox="<?php echo VB_LOGO_A; ?>" class="logo-a clr-main" width="26" height="26"><use xlink:href="#logo-a"></use></svg>
      </div>
    </div>
  </div>
</div>

<?php
$header_add_class = ' megamenu-'.MEGAMENU_TYPE;
if ( GNAV_SUB_SLIDE ) {
  $header_add_class .= ' slide_true';
} elseif ( NAV_SUB_ACOD ) {
  $header_add_class .= ' acod_true';
}
?>
<header class="header por poa-bf bg_clr-body-bf bdr_clr-body_lt-bf ts-fast ts-fast-bf op0-bf<?php echo $header_add_class; ?>">
  <div class="flx flx-btw-ctr">
    <h1 class="header--logo ts por"><a href="/"><img src="<?php echo get_template_directory_uri(); ?>/images/common/logo_blk-hor.svg" alt="<?php echo wp_title(); ?>" width="220"></a></h1>
    <nav class="header--nav flx flx-end-ctr flx-1">

      <?php
      /* ============================================================================

      MEGAMENU

      ============================================================================ */
      ?>
      <ul class="hnav_list smpc-none-flx flx-ctr-stt flx-tab-blc txt-ctr">
        <?php foreach ($nav_list as $nav_k => $nav_v): ?>
          <?php if ( $nav_v['header'] ): ?>
            <?php
            $nav_add_class = $nav_k;
            if ( $nav_v['sub_nav'] ){
              $nav_add_class .= ' has_sub';
            }
            $current = '';
            if ( is_page() && $detail_info['slug'] == $nav_k || $detail_info['post_type'] == $nav_k || is_front_page() && $nav_k == 'home' ) {
              $nav_add_class .= ' current';
              $current = '<span class="current_layer"><svg viewBox="'.VB_LOGO_A.'" class="clr-main op65 ts" width="50" height="53"><use xlink:href="#logo-a"></use></svg></span>';
            }
            ?>
            <li class="hnav_list--item hnav_list--item-<?php echo $nav_add_class; ?>">
              <?php
              $nav_tag_class = 'hnav_list--item_in flx flx-ctr flx-col por hov_area ts';
              $nav_target = '';

              // 矢印のスタイル指定のため出力数（en/jp）をclassで付与
              if ( $nav_v['sub_nav'] ) {
                if ( $nav_v['label-en'] && $nav_v['label-jp'] ) {
                  $nav_tag_class .= ' output-2';
                } else {
                  $nav_tag_class .= ' output-1';
                }
              }

              // スムーススクロールの場合
              if ( $nav_v['smooth'] ) {
                $nav_tag_class .= ' smooth';
                if ( $detail_info['slug'] == $nav_v['belong'] ) {
                  $nav_href = $nav_v['url'];
                } else {
                  $nav_href = home_url().'/'.$nav_v['belong'].'/'.$nav_v['url'];
                }
              }
              // 別ウィンドウの場合
              elseif( $nav_v['outlink'] ) {
                $nav_href = $nav_v['url'];
                $nav_target = ' target="_blank"';
              }
              // それ以外
              else {
                $nav_href = home_url().$nav_v['url'];
              }

              // 別ページの場合（同じウィンドウ）
              if ( $nav_v['other_page'] ) {
                $nav_tag_stt = '<a href="'.$nav_href.'" class="'.$nav_tag_class.'"'.$nav_target.'>';
                $nav_tag_end = '</a>';
              }
              // それ以外
              else {
                $nav_tag_stt = '<span class="'.$nav_tag_class.'">';
                $nav_tag_end = '</span>';
              }
              $nav_label = '<span class="label flx flx-col">';
              $ico_arrow = '';

              // sub_navがある場合矢印アイコンを付与
              if ( $nav_v['sub_nav']  ) {
                $ico_arrow = '<span class="ico ico-arrow ico-arrow-btm ts op65"></span>';
              }
              if ( $nav_v['label-en'] ) {
                $nav_label .= '<span class="txt fnt-en ls-200">'.$nav_v['label-en'].$ico_arrow.'</span>';
              }
              if ( $nav_v['label-jp'] ) {
                $nav_label .= '<span class="txt fnt-jp">'.$nav_v['label-jp'].$ico_arrow.'</span>';
              }
              $nav_label .= '</span>';
              if ( $nav_v['sub_nav'] && $nav_v['label-en'] && $nav_v['label-jp'] ) {
                $nav_label .= $ico_arrow;
              }

              // a or span 出力
              echo $nav_tag_stt.$nav_label.$current.$nav_tag_end;
              ?>
              <?php
              // sub_navがある場合
              if ( $nav_v['sub_nav'] ): ?>
                <div class="megamenu bg_clr-wht ts">
                  <?php
                  $inner_class = '';
                  if ( MEGAMENU_TYPE == '01' || MEGAMENU_TYPE == '02' ) {
                    $inner_class .= 'inner flx flx-stt';
                  }
                  if ( MEGAMENU_TYPE == '03' ) {
                    $inner_class .= 'inner inner-lg';
                  }
                  ?>
                  <div class="<?php echo $inner_class; ?>">
                    <?php if ( MEGAMENU_TYPE == '01' || MEGAMENU_TYPE == '02' ): ?>
                      <div class="megamenu_desc">
                        <?php if ( $nav_v['img_src'] ): ?>
                          <div class="img_area ofh por">
                            <div class="bg_img poa" style="background-image: url(<?php echo $nav_v['img_src']; ?>);"></div>
                          </div>
                        <?php endif ?>
                        <h3 class="ttl">
                          <a href="<?php echo $nav_href; ?>" class="flx flx-col flx-stt">
                            <?php if ( $nav_v['label-en'] ): ?>
                              <span class="fnt-en"><?php echo $nav_v['label-en']; ?></span>
                            <?php endif ?>
                            <?php if ( $nav_v['label-jp'] ): ?>
                              <span class="fnt-jp"><?php echo $nav_v['label-jp']; ?></span>
                            <?php endif ?>
                          </a>
                        </h3>
                        <?php if ( $nav_v['desc'] ): ?>
                          <div class="desc txt-lft"><p><?php echo $nav_v['desc']; ?></p></div>
                        <?php endif ?>
                        <?php
                        if ( MEGAMENU_TYPE == '01' ) {
                          $args = array(
                            'class' => 'btn-sm', 'hov_area' => false,
                            'label' => 'VIEW MORE',
                            'href' => $nav_href, 'target' => '',
                            'txt_clr' => 'def tbl-lft', 'txt_clr-hov' => 'wht',
                            'bg_clr' => 'wht', 'bg_clr-bf' => 'main',
                          );
                          get_template_part('/parts/btn-def', null, $args);
                        }
                        ?>
                      </div>
                    <?php endif ?>
                   <ul class="megamenu_list flx flx-1">
                      <?php foreach ($nav_v['sub_nav'] as $snav_k => $snav_v): ?>
                        <?php if ( $snav_k != 'parent' ): ?>
                          <li class="megamenu_list--item snav_list--item-<?php echo $snav_k; ?>">
                            <?php
                            $snav_tag_class = 'megamenu_list--item_in txt-ctr por';
                            $snav_target = '';
                            if ( MEGAMENU_TYPE == '02' ) {
                              $snav_img = '';
                            } else {
                              $snav_img = '<span class="img_area ofh por"><span class="bg_img poa" style="background-image: url('.$snav_v['img_src'].');"></span></span>';
                            }
                            $ico_outlink = '';
                            if ( $snav_v['smooth'] ) {
                              $snav_tag_class .= ' smooth';
                              if ( $detail_info['slug'] == $snav_v['belong'] ) {
                                $snav_href = $snav_v['url'];
                              } else {
                                $snav_href = home_url().'/'.$snav_v['belong'].'/'.$snav_v['url'];
                              }
                            } elseif( $snav_v['outlink'] ) {
                              $snav_href = $snav_v['url'];
                              $snav_target = ' target="_blank"';
                              $ico_outlink = '<span class="ico ico-outlink hov-bdr_clr-main-bf hov-bdr_clr-main-af"></span>';
                            } else {
                              $snav_href = home_url().$snav_v['url'];
                            }
                            if ( ( MEGAMENU_TYPE == '02' || MEGAMENU_TYPE == '04' ) && !$ico_outlink ) {
                              $ico_outlink = '<span class="ico ico-arrow ico-arrow-rgt ts"></span>';
                            }
                            if ( $snav_v['other_page'] ) {
                              $snav_tag_stt = '<a href="'.$snav_href.'" class="'.$snav_tag_class.'"'.$snav_target.'>';
                              $snav_tag_end = '</a>';
                            } else {
                              $snav_tag_stt = '<span class="'.$snav_tag_class.'">';
                              $snav_tag_end = '</span>';
                            }
                            $snav_label = '<span class="ttl flx flx-ctr"><span class="txt fnt-sm">'.$snav_v['label'].'</span>'.$ico_outlink.'</span>';
                            // a or span 出力
                            echo $snav_tag_stt.$snav_img.$snav_label.$snav_tag_end;
                            ?>
                          </li>
                        <?php endif ?>
                      <?php endforeach ?>
                    </ul>
                  </div>
                </div>
              <?php endif; ?>
            </li>
          <?php endif ?>
        <?php endforeach ?>
      </ul>

      <?php
      /* ============================================================================

      HEAD_BTN_LIST

      ============================================================================ */
      ?>
      <?php if ( is_array($head_btn_list) ): ?>
        <div class="head_btn_list head_btn_clm-<?php echo count($head_btn_list); ?> smpc-none-flx">
          <?php foreach ($head_btn_list as $head_btn_k => $head_btn_v): ?>
            <?php
            $args = array(
              'class' => 'btn-'.$head_btn_k, 'hov_area' => false,
              'label' => $head_btn_v['label-en'],
              'href' => $head_btn_v['url'], 'target' => '',
              'txt_clr' => 'main', 'txt_clr-hov' => 'wht', 'bg_clr' => 'main',
              'ico' => $head_btn_v['ico'],
            );
            get_template_part('/parts/btn-def', null, $args);
            ?>
          <?php endforeach ?>
        </div>
      <?php endif ?>

      <?php
      /* ============================================================================

      GNAV_BTN

      ============================================================================ */
      ?>
      <div class="gnav_btn gnav_btn-<?php echo GNAV_BTN_TYPE; ?> por flx flx-ctr bg_clr-body_lt-bf ts-bf">
        <div class="gnav_btn--in">
          <div class="gnav_btn--lines">
            <span class="bg_clr-def"></span><span class="bg_clr-def"></span><span class="bg_clr-def"></span>
          </div>
          <span class="gnav_btn--txt txt-ctr fnt-en por">
            <span class="open">MENU</span>
            <span class="close">CLOSE</span>
          </span>
        </div>
      </div>

      <?php
      /* ============================================================================

      GNAV

      ============================================================================ */
      ?>
      <?php
      $gnav_add_class = '';
      if ( is_array($head_btn_list) && GNAV_TYPE == '01' ) {
        $gnav_add_class .= ' pdg-head_btn';
      }
      ?>
      <div class="gnav gnav-<?php echo GNAV_TYPE.$gnav_add_class; ?> por ts">
        <div class="gnav--in ofh por poa-bf bg_clr-wht-bf">
          <div class="gnav--cont ofh">
            <h3 class="gnav--logo"><a href="/"><img src="<?php echo get_template_directory_uri(); ?>/images/common/logo-hor.svg" alt="<?php echo wp_title(); ?>" width="160"></a></h3>
            <ul class="gnav_list flx flx-col gnav_list-page">
              <?php foreach ($nav_list as $nav_k => $nav_v): ?>
                <?php if ( $nav_v['type'] == 'page' ): ?>
                  <?php
                  $nav_add_class = $nav_k;
                  if ( $nav_v['sub_nav'] ){
                    $nav_add_class .= ' has_sub';
                  }
                  $tap_area = '';
                  $current = '';
                  if ( is_page() && $detail_info['slug'] == $nav_k || $detail_info['post_type'] == $nav_k || is_front_page() && $nav_k == 'home' ) {
                    $nav_add_class .= ' current';
                    $current = '<span class="current_layer"><svg viewBox="'.VB_LOGO_A.'" class="flx clr-main op35 ts" width="50" height="53"><use xlink:href="#logo-a"></use></svg></span>';
                  }
                  ?>
                  <li class="gnav_list--item gnav_list--item-<?php echo $nav_add_class; ?>">
                    <?php
                    $nav_tag_class = 'gnav_list--item_in flx flx-col por hov-clr-main ts hov_area';
                    $nav_target = '';
                    $nav_img = '';
                    if ( $nav_v['img_src'] ) {
                      $nav_img = '<span class="img_area ofh por"><span class="bg_img poa" style="background-image: url('.$nav_v['img_src'].');"></span></span>';
                    }

                    // 矢印のスタイル指定のため出力数（en/jp）をclassで付与
                    if ( $nav_v['sub_nav'] ) {
                      if ( $nav_v['label-en'] && $nav_v['label-jp'] ) {
                        $nav_tag_class .= ' output-2';
                      } else {
                        $nav_tag_class .= ' output-1';
                      }
                    }

                    // スムーススクロールの場合
                    if ( $nav_v['smooth'] ) {
                      $nav_tag_class .= ' smooth';
                      if ( $detail_info['slug'] == $nav_v['belong'] ) {
                        $nav_href = $nav_v['url'];
                      } else {
                        $nav_href = home_url().'/'.$nav_v['belong'].'/'.$nav_v['url'];
                      }
                    }
                    // 別ウィンドウの場合
                    elseif( $nav_v['outlink'] ) {
                      $nav_href = $nav_v['url'];
                      $nav_target = ' target="_blank"';
                    }
                    // それ以外
                    else {
                      $nav_href = home_url().$nav_v['url'];
                    }

                    // 別ページの場合（同じウィンドウ）
                    if ( $nav_v['other_page'] ) {
                      $nav_tag_stt = '<a href="'.$nav_href.'" class="'.$nav_tag_class.'"'.$nav_target.'>';
                      $nav_tag_end = '</a>';
                    }
                    // それ以外
                    else {
                      $nav_tag_stt = '<span class="'.$nav_tag_class.'">';
                      $nav_tag_end = '</span>';
                    }
                    $nav_label = '<span class="label flx flx-col">';
                    $ico_arrow = '<span class="ico ico-arrow ico-arrow-rgt ts op65"></span>';

                    // sub_navがある場合矢印アイコンを付与
                    if ( $nav_v['sub_nav'] && GNAV_SUB_SLIDE ) {
                      $tap_area = '<div class="tap_area tap_area-next poa"></div>';
                    }
                    if ( $nav_v['label-en'] ) {
                      $nav_label .= '<span class="txt fnt-en">'.$nav_v['label-en'].'</span>';
                    }
                    if ( $nav_v['label-jp'] ) {
                      $nav_label .= '<span class="txt fnt-jp">'.$nav_v['label-jp'].'</span>';
                    }
                    $nav_label .= '</span>';
                    $nav_label .= $ico_arrow;

                    $acod_arrow = '';
                    if ( $nav_v['sub_nav'] && NAV_SUB_ACOD ) {
                      $acod_arrow = '<span class="acod_arrow ts flx flx-ctr"><span class="ico ico-arrow ico-arrow-btm ts op65"></span></span>';
                    }

                    // a or span 出力
                    echo $tap_area.$nav_tag_stt.$nav_img.$nav_label.$current.$nav_tag_end.$acod_arrow;
                    ?>
                    <?php
                    // sub_navがある場合
                    if ( $nav_v['sub_nav'] ): ?>
                      <div class="gnav_sub ts">
                        <?php if ( GNAV_SUB_SLIDE ): ?>
                          <div class="tap_area tap_area-prev por flx flx-stt-ctr">
                            <span class="ico ico-arrow ico-arrow-lft ts op65"></span>
                            <span class="label flx flx-col"><?php echo $nav_label; ?></span>
                          </div>
                        <?php endif ?>
                        <ul class="snav_list flx flx-col">
                          <?php foreach ($nav_v['sub_nav'] as $snav_k => $snav_v): ?>
                            <li class="snav_list--item snav_list--item-<?php echo $snav_k; ?>">
                              <?php
                              $snav_tag_class = 'snav_list--item_in flx flx-stt-ctr por';
                              $snav_target = '';
                              $snav_img = '';
                              if ( $snav_v['img_src'] ) {
                                $snav_img = '<span class="img_area ofh por"><span class="bg_img poa" style="background-image: url('.$snav_v['img_src'].');"></span></span>';
                              }
                              $ico_outlink = '';
                              if ( $snav_v['smooth'] ) {
                                $snav_tag_class .= ' smooth';
                                if ( $detail_info['slug'] == $snav_v['belong'] ) {
                                  $snav_href = $snav_v['url'];
                                } else {
                                  $snav_href = home_url().'/'.$snav_v['belong'].'/'.$snav_v['url'];
                                }
                              } elseif( $snav_v['outlink'] ) {
                                $snav_href = $snav_v['url'];
                                $snav_target = ' target="_blank"';
                                $ico_outlink = '<span class="ico ico-outlink hov-bdr_clr-main-bf hov-bdr_clr-main-af"></span>';
                              } else {
                                $snav_href = home_url().$snav_v['url'];
                              }
                              if ( !$ico_outlink ) {
                                $ico_outlink = $ico_arrow;
                              }
                              if ( $snav_v['other_page'] ) {
                                $snav_tag_stt = '<a href="'.$snav_href.'" class="'.$snav_tag_class.'"'.$snav_target.'>';
                                $snav_tag_end = '</a>';
                              } else {
                                $snav_tag_stt = '<span class="'.$snav_tag_class.'">';
                                $snav_tag_end = '</span>';
                              }
                              $snav_label = '<span class="ttl flx flx-stt-ctr"><span class="txt fnt-sm">'.$snav_v['label'].'</span>'.$ico_outlink.'</span>';
                              // a or span 出力
                              echo $snav_tag_stt.$snav_img.$snav_label.$snav_tag_end;
                              ?>
                            </li>
                          <?php endforeach ?>
                        </ul>
                      </div>
                    <?php endif; ?>
                  </li>
                <?php endif ?>
              <?php endforeach ?>
            </ul>
            <ul class="gnav_list flx flx-col gnav_list-comp">
              <?php foreach ($nav_list as $nav_k => $nav_v): ?>
                <?php if ( $nav_v['type'] == 'comp' ): ?>
                  <?php
                  $nav_add_class = $nav_k;
                  if ( $nav_v['sub_nav'] ){
                    $nav_add_class .= ' has_sub';
                  }
                  $tap_area = '';
                  $current = '';
                  if ( is_page() && $detail_info['slug'] == $nav_k || $detail_info['post_type'] == $nav_k || is_front_page() && $nav_k == 'home' ) {
                    $nav_add_class .= ' current';
                    $current = '<span class="current_layer"><svg viewBox="'.VB_LOGO_A.'" class="flx clr-main op35 ts" width="32" height="33"><use xlink:href="#logo-a"></use></svg></span>';
                  }
                  ?>
                  <li class="gnav_list--item gnav_list--item-<?php echo $nav_add_class; ?>">
                    <?php
                    $nav_tag_class = 'gnav_list--item_in flx flx-col por hov_area';
                    $nav_target = '';

                    // 矢印のスタイル指定のため出力数（en/jp）をclassで付与
                    if ( $nav_v['sub_nav'] ) {
                      if ( $nav_v['label-en'] && $nav_v['label-jp'] ) {
                        $nav_tag_class .= ' output-2';
                      } else {
                        $nav_tag_class .= ' output-1';
                      }
                    }

                    // スムーススクロールの場合
                    if ( $nav_v['smooth'] ) {
                      $nav_tag_class .= ' smooth';
                      if ( $detail_info['slug'] == $nav_v['belong'] ) {
                        $nav_href = $nav_v['url'];
                      } else {
                        $nav_href = home_url().'/'.$nav_v['belong'].'/'.$nav_v['url'];
                      }
                    }
                    // 別ウィンドウの場合
                    elseif( $nav_v['outlink'] ) {
                      $nav_href = $nav_v['url'];
                      $nav_target = ' target="_blank"';
                    }
                    // それ以外
                    else {
                      $nav_href = home_url().$nav_v['url'];
                    }

                    // 別ページの場合（同じウィンドウ）
                    if ( $nav_v['other_page'] ) {
                      $nav_tag_stt = '<a href="'.$nav_href.'" class="'.$nav_tag_class.'"'.$nav_target.'>';
                      $nav_tag_end = '</a>';
                    }
                    // それ以外
                    else {
                      $nav_tag_stt = '<span class="'.$nav_tag_class.'">';
                      $nav_tag_end = '</span>';
                    }
                    $nav_label = '<span class="label flx flx-col">';
                    $ico_arrow = '<span class="ico ico-arrow ico-arrow-rgt ts op65"></span>';

                    // sub_navがある場合矢印アイコンを付与
                    if ( $nav_v['sub_nav'] && GNAV_SUB_SLIDE ) {
                      $tap_area = '<div class="tap_area tap_area-next poa"></div>';
                    }
                    if ( $nav_v['label-en'] ) {
                      $nav_label .= '<span class="txt fnt-en">'.$nav_v['label-en'].'</span>';
                    }
                    if ( $nav_v['label-jp'] ) {
                      $nav_label .= '<span class="txt fnt-jp">'.$nav_v['label-jp'].'</span>';
                    }
                    $nav_label .= '</span>';
                    $nav_label .= $ico_arrow;

                    $acod_arrow = '';
                    if ( $nav_v['sub_nav'] && NAV_SUB_ACOD ) {
                      $acod_arrow = '<span class="acod_arrow ts flx flx-ctr"><span class="ico ico-arrow ico-arrow-btm ts op65"></span></span>';
                    }

                    // a or span 出力
                    echo $tap_area.$nav_tag_stt.$nav_label.$current.$nav_tag_end.$acod_arrow;
                    ?>
                    <?php
                    // sub_navがある場合
                    if ( $nav_v['sub_nav'] ): ?>
                      <div class="gnav_sub ts">
                        <?php if ( GNAV_SUB_SLIDE ): ?>
                          <div class="tap_area tap_area-prev por flx flx-stt-ctr">
                            <span class="ico ico-arrow ico-arrow-lft ts op65"></span>
                            <span class="label w-b"><?php echo $nav_label; ?></span>
                          </div>
                        <?php endif ?>
                        <ul class="snav_list flx flx-col">
                          <?php foreach ($nav_v['sub_nav'] as $snav_k => $snav_v): ?>
                            <li class="snav_list--item snav_list--item-<?php echo $snav_k; ?>">
                              <?php
                              $snav_tag_class = 'snav_list--item_in flx por';
                              $snav_target = '';
                              $snav_img = '<span class="img_area ofh por"><span class="bg_img poa" style="background-image: url('.$snav_v['img_src'].');"></span></span>';
                              $ico_outlink = '';
                              if ( $snav_v['smooth'] ) {
                                $snav_tag_class .= ' smooth';
                                if ( $detail_info['slug'] == $snav_v['belong'] ) {
                                  $snav_href = $snav_v['url'];
                                } else {
                                  $snav_href = home_url().'/'.$snav_v['belong'].'/'.$snav_v['url'];
                                }
                              } elseif( $snav_v['outlink'] ) {
                                $snav_href = $snav_v['url'];
                                $snav_target = ' target="_blank"';
                                $ico_outlink = '<span class="ico ico-outlink hov-bdr_clr-main-bf hov-bdr_clr-main-af"></span>';
                              } else {
                                $snav_href = home_url().$snav_v['url'];
                              }
                              if ( !$ico_outlink ) {
                                $ico_outlink = $ico_arrow;
                              }
                              if ( $snav_v['other_page'] ) {
                                $snav_tag_stt = '<a href="'.$snav_href.'" class="'.$snav_tag_class.'"'.$snav_target.'>';
                                $snav_tag_end = '</a>';
                              } else {
                                $snav_tag_stt = '<span class="'.$snav_tag_class.'">';
                                $snav_tag_end = '</span>';
                              }
                              $snav_label = '<span class="ttl flx flx-stt-ctr"><span class="txt fnt-sm">'.$snav_v['label'].'</span>'.$ico_outlink.'</span>';
                              // a or span 出力
                              echo $snav_tag_stt.$snav_img.$snav_label.$snav_tag_end;
                              ?>
                            </li>
                          <?php endforeach ?>
                        </ul>
                      </div>
                    <?php endif; ?>
                  </li>
                <?php endif ?>
              <?php endforeach ?>
            </ul>
            <ul class="sub_list flx">
              <?php foreach ($sub_list as $sub_k => $sub_v): ?>
                <?php
                $sub_tag_class = 'sublist--item_in por op65 hov-op100 ts';
                $sub_target = '';
                if ( $sub_v['smooth'] ) {
                  $sub_tag_class .= ' smooth';
                  if ( $detail_info['slug'] == $sub_v['belong'] ) {
                    $sub_href = $sub_v['url'];
                  } else {
                    $sub_href = home_url().'/'.$sub_v['belong'].'/'.$sub_v['url'];
                  }
                } elseif( $sub_v['outlink'] ) {
                  $sub_href = $snav_v['url'];
                  $sub_target = ' target="_blank"';
                } else {
                  $sub_href = home_url().$sub_v['url'];
                }
                if ( $sub_v['other_page'] ) {
                  $sub_tag_stt = '<a href="'.$sub_href.'" class="'.$sub_tag_class.'"'.$sub_target.'>';
                  $sub_tag_end = '</a>';
                } else {
                  $sub_tag_stt = '<span class="'.$sub_tag_class.'">';
                  $sub_tag_end = '</span>';
                }
                $sub_label = '';
                if ( $sub_v['label'] ) {
                  $sub_label .= '<span class="txt fnt-xxs fnt-'.$sub_v['fnt'].'">'.$sub_v['label'].'</span>';
                }
                ?>
                <li class="sub_list--item">
                  <?php echo $sub_tag_stt.$sub_label.$sub_tag_end; ?>
                </li>
              <?php endforeach ?>
            </ul>
            <?php if ( is_array($sns_list) ): ?>
              <div class="sns_area flx flx-stt-ctr">
                <h3 class="fnt-en fnt-xs">Follow us</h3>
                <ul class="sns_list flx flx-ctr">
                  <?php foreach ($sns_list as $sns_k => $sns_url): ?>
                    <li class="sns_list--item">
                      <a href="<?php echo $sns_url; ?>" target="_blank" rel="nofollow" class="flx flx-ctr">
                        <svg viewBox="<?php echo VB_SNS_ICO; ?>" class="clr-def hov-clr-<?php echo $sns_k; ?> op20 hov-op100 ts" width="24" height="24"><use xlink:href="#ico-<?php echo $sns_k; ?>"></use></svg>
                      </a>
                    </li>
                  <?php endforeach ?>
                </ul>
              </div>
            <?php endif ?>

            <?php include(TEMPLATEPATH . '/parts/bnr_list.php'); ?>

          </div>
        </div>
        <div class="gnav_layer poa poa-bf bg_clr-blk-bf op35-bf">
          <span class="bg_img poa poa-bf"></span>
        </div>
      </div>

    </nav>
  </div>
</header>

<div class="fix_bnrs flx flx-col">
  <div class="fix_bnr fix_bnr-campaign por ofh flx flx-col flx-ctr-stt poa-bf bg_clr-wht-bf op90-bf hov-op100-bf ts-bf ts">
    <?php
    if ( is_home() || is_front_page() ){
      $campaign_href = '#campaign';
    } else {
      $campaign_href = home_url().'#campaign';
    }
    ?>
    <h3 class="ttl lh-10"><a href="<?php echo $campaign_href; ?>" class="smooth poa-bf zi1-bf"><span class="fnt-sm">実施中の</span><span class="fnt-xl dot_txt clr-sub w-m"><span>キ</span><span>ャ</span><span>ン</span><span>ペ</span><span>ー</span><span>ン</span></span></a></h3>
    <p>
      <picture>
        <source srcset="<?php echo get_template_directory_uri(); ?>/images/common/bnr_scr_txt-campaign.png 1x, <?php echo get_template_directory_uri(); ?>/images/common/bnr_scr_txt-campaign@2x.png 2x" type="image/jpeg">
        <img src="<?php echo get_template_directory_uri(); ?>/images/common/bnr_scr_txt-campaign.png" alt="Figo pilates campaign" width="124" height="23" loading="lazy">
      </picture>
    </p>
    <div class="svg_area poa-bf bg_clr-body_lt-bf op45-bf flx flx-ctr ts-bf">
      <svg viewBox="<?php echo VB_ICO; ?>" class="clr-wht" width="56" height="56"><use xlink:href="#ico-megaphone"></use></svg>
      <img src="<?php echo get_template_directory_uri(); ?>/images/common/cir_txt-campaign.svg" alt="Figo pilates campaign" width="118" height="118" loading="lazy" class="spin-rev">
    </div>
    <div class="lines poa poa-bf poa-af bdr_clr-body_lt bdr_clr-body_lt-bf bdr_clr-body_lt-af"></div>
  </div>
  <div class="fix_bnr fix_bnr-trial por ofh flx flx-col flx-ctr-stt poa-bf bg_clr-wht-bf op90-bf hov-op100-bf ts-bf ts">
    <h3 class="ttl lh-10"><a href="<?php echo home_url(); ?>/trial/" class="smooth poa-bf zi1-bf"><span class="fnt-xl dot_txt clr-main w-m"><span>初</span><span>回</span><span>体</span><span>験</span><span>予</span><span>約</span></span><span class="fnt-sm fnt-en"> 1,000円</span></a></h3>
    <p>
      <picture>
        <source srcset="<?php echo get_template_directory_uri(); ?>/images/common/bnr_scr_txt-trial.png 1x, <?php echo get_template_directory_uri(); ?>/images/common/bnr_scr_txt-trial@2x.png 2x" type="image/jpeg">
        <img src="<?php echo get_template_directory_uri(); ?>/images/common/bnr_scr_txt-trial.png" alt="Figo pilates trial" width="124" height="23" loading="lazy">
      </picture>
    </p>
    <div class="svg_area poa-bf bg_clr-body_lt-bf op45-bf flx flx-ctr ts-bf">
      <svg viewBox="<?php echo VB_ICO; ?>" class="clr-wht" width="56" height="56"><use xlink:href="#ico-pilates"></use></svg>
      <img src="<?php echo get_template_directory_uri(); ?>/images/common/cir_txt-trial.svg" alt="Figo pilates trial" width="118" height="118" loading="lazy" class="spin-rev">
    </div>
    <div class="lines poa poa-bf poa-af bdr_clr-body_lt bdr_clr-body_lt-bf bdr_clr-body_lt-af"></div>
  </div>
</div>

<div class="wrapper">

<?php if(!is_home()): ?>

  <!-- start page_head -->
  <div class="page_head por">
    <div class="inner por">
      <h2 class="page_ttl btm32">
        <?php
        if ( is_single() ) {
          $page_ttl_jp = esc_html( get_post_type_object(get_post_type())->label );
        } else {
          $page_ttl_jp = $detail_info['title'];
        }
        ?>
        <span class="page_ttl-jp"><?php echo $page_ttl_jp; ?></span>
        <?php
        if ( is_tax() || is_archive() || is_single() ){
          $page_ttl_en = $detail_info['post_type'];
        } else {
          $page_ttl_en = $detail_info['slug'];
        }
        $page_ttl_en = str_replace(array('-', '_',), ' ', $page_ttl_en);
        ?>
        <span class="page_ttl-en w-r op40 clr-body_lt"><?php echo $page_ttl_en; ?></span>
      </h2>
      <!-- start breadcrumb - パンくず -->
      <?php
      if ( function_exists('yoast_breadcrumb') ) {
        yoast_breadcrumb( '<div id="breadcrumbs" class="btm80 fnt-xxs">','</div>' );
      }
      ?>
      <!-- end breadcrumb - パンくず -->
    </div>
    <div class="img_area ofh por poa-bf">
      <div class="bg_img poa"></div>
    </div>
  </div>
  <!-- end page_head -->

<?php endif; ?>

