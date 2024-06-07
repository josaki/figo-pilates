$(function(){

  /* video start
  *************************************************** */
    var $video = $('#video');
    function video_play() {
      $video.get(0).play();
    }
    video_play();

  /* スクロールでサイド固定にcurrent付与
  ********************************************** */
    var elemTop = [];
    function PositionCheck(){
      var headerH = $(".header").outerHeight(true);
      $(".campaign_list--item").each(function(i) {
        elemTop[i] =Math.round(parseInt($(this).offset().top-headerH));
      });
    }
    function ScrollAnime() {
      var scroll = Math.round($(window).scrollTop());
      var $nav_elem = $(".thumb_list--item");
      $nav_elem.removeClass('current');
      $loop_num = $(".campaign_list--item").length - 1;
      for (var i=0; i < $loop_num + 1; i++) {
        if ( i == 0 ) {
          if(scroll >= 0 && scroll < elemTop[1]) {
            $($nav_elem[0]).addClass('current');
          }
        }
        if ( i == $loop_num ) {
          if(scroll >= elemTop[i]) {
            $($nav_elem[$loop_num]).addClass('current');
          }
        } else {
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


  /* スクロールで文字移動
  ********************************************** */
    $(window).on('scroll',function(){

      /* --- スクロールテキスト --- */
      const $scr_txt = $('.scr_txt');
      $($scr_txt).each(function(){
        const scr = $(window).scrollTop(),
              win_h = $(window).height(),
              elem_top = $(this).offset().top,
              elem_w = $(this).outerWidth();
        mov_num = (scr - elem_top + elem_w) * 1 / 8;
        if (scr > elem_top - win_h){
          $(this).css( 'background-position', -mov_num + 'px 0' );
        }
      });
    });

});