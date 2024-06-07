$(function(){

  /* btnクリック
  ********************************************** */
    $(document).on('click','.btn-fix_btm',function(){
      $('.side_column').toggleClass('is_show');
      $(this).toggleClass('close');
      $('.header').toggleClass('is_hide');
    });

  /* クリック処理
  ********************************************** */
    $side_faq_ul = $('.side--faq_item ul');
    $side_faq_item = $('.side--faq_item');
    $('.side--faq_item > a').on('click',function(){
      if ( !$(this).closest('li').hasClass('active') ) {
        $side_faq_ul.stop().slideUp(400);
        $(this).siblings('ul').stop().slideToggle(400);
        $side_faq_item.stop().removeClass('active');
        $(this).closest('li').stop().toggleClass('active');
      }
    });
    $('.side--faq_item li a').on('click',function(){
      $('.side_column').removeClass('is_show');
      $('.btn-fix_btm').removeClass('close');
      $('.header').removeClass('is_hide');
    });
    $('.side--faq_item .btn-tgl').on('click',function(){
      if ( !$(this).closest('li').hasClass('active') ) {
        $side_faq_ul.stop().slideUp(400);
        $side_faq_item.stop().removeClass('active');
      }
      $(this).siblings('ul').stop().slideToggle(400);
      $(this).closest('li').stop().toggleClass('active');
    });

  /* スクロールでサイド固定にcurrent付与
  ********************************************** */
    var elemTop = [];
    function PositionCheck(){
      var headerH = $(".header").outerHeight(true);
      // 切り替えたい要素の共通class
      $(".pref_sect").each(function(i) {
        elemTop[i] =Math.round(parseInt($(this).offset().top-headerH));
      });
    }
    function ScrollAnime() {
      var scroll = Math.round($(window).scrollTop());
      var $nav_elem = $(".ct_list--item"); // ナビのclass名
      $nav_elem.removeClass('current');
      $loop_num = $(".pref_sect").length;
      for (var i = $loop_num - 1; i >= 0; i--) {
        if ( i == 0 ) {
          if(scroll >= 0 && scroll < elemTop[1]) {
            $($nav_elem[0]).addClass('current');
          }
        }
        else if ( i == $loop_num ) {
          if(scroll >= elemTop[$loop_num]) {
            $($nav_elem[$loop_num]).addClass('current');
          }
        }
        else {
          if(scroll >= elemTop[i] && scroll < elemTop[i+1]) {
           $($nav_elem[i]).addClass('current');
          }
        }
      }
    }
    $(window).scroll(function () {
      PositionCheck();
      ScrollAnime();
    });
    $(window).on('load', function () {
      PositionCheck();
      ScrollAnime();
    });
    $(window).resize(function() {
      PositionCheck()
    });

});
