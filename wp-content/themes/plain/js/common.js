$(function(){

  $body = $('body');

  /* ページ遷移
  ********************************************** */
    $(document).on('click','a:not([href^="#"]):not([target]):not([href^="tel:"]):not(.no_link):not([href^="javascript:void(0)"])', function(e){
      e.preventDefault();
      url = $(this).attr('href');
      if (url !== '') {
        $body.removeClass('mov_in');
        setTimeout(function(){
          window.location = url;
        }, 800);
      }
      return false;
    });
    window.onpageshow = function(event) {
      if (event.persisted) {
         window.location.reload();
      }
    };

  /* telタグ例外処理
  ********************************************** */
    var ua = navigator.userAgent;
    if(ua.indexOf('iPhone') < 0 && ua.indexOf('Android') < 0){
      $('a[href ^= "tel:"]').each(function(){
        $this = $(this);
        if ( $this.hasClass('flx') ) {
          $this.css({'pointerEvents':'none'}).removeAttr('onclick');
        } else {
          $this.css({'pointerEvents':'none','display':'inline-block'}).removeAttr('onclick');
        }
      });
    }

  /* スムーススクロール
  ********************************************** */
    $('a.smooth[href^="#"]').on('click',function(){
      var speed = 400;
      var href= $(this).attr('href');
      var target = $(href == '#' || href == '' ? 'html' : href);
      var mgn = $(this).data('mgn');
      if ( mgn == 'head' ) {
        $mgn_head = $('.header').height();
      } else {
        $mgn_head = 0;
      }
      var position = target.offset().top - $mgn_head;
      $('body,html').animate({scrollTop:position}, speed, 'swing');
      return false;
    });

  /* scrollでclass付与
  ********************************************** */
    $(window).on('scroll',function(){
      scroll_top = $(this).scrollTop();
      if ( $('body').hasClass('home') ) {
        $scroll_num = $('.hero').height() - 96;
      } else {
        $scroll_num = 10;
      }
      if (scroll_top > $scroll_num) {
        $body.addClass('scrolled');
      } else {
        $body.removeClass('scrolled');
      }
    });

  /* 最下部までスクロールでclass付与
  ********************************************** */
    $(window).on("scroll", function() {
      scrollHeight = $(document).height();
      scrollPosition = $(window).height() + $(window).scrollTop();
      if ( (scrollHeight - scrollPosition) / scrollHeight <= 0.05) {
        $body.addClass('scrolled_limit');
      } else {
        $body.removeClass('scrolled_limit');
      }
    });

  /* scroll trigger
  ********************************************** */
    const trigger = new ScrollTrigger.default();
    trigger.add('[data-trigger]', {
      once: true,
      offset: {
        element: {
          x: 0,
          y: function(trigger, rect, direction) {
            return 0.1
          }
        },
        viewport: {
          x: 0,
          y: function(trigger, frame, direction) {
            return trigger.visible ? 0 : 0.1
          }
        }
      },
      toggle: {
        class: {
          in: 'visible',
          out: ['invisible', 'extraClassToToggleWhenHidden']
        },
        callback: {
          in: null,
          visible: null,
          out: function(trigger) {
            return new Promise( function (resolve, reject) {
              setTimeout(resolve, 10)
            })
          }
        }
      },
    });

  /* gnav_btnクリックでheaderにactive付与
  ********************************************** */
    $('.gnav_btn').on('click',function(){
      $(this).closest('header').toggleClass('active');
    });

  /* tap_area functions
  ********************************************** */
    $('.tap_area-next').on('click',function(){
      $(this).siblings('.gnav_sub').addClass('is_show');
      $(this).closest('.gnav','.gnav_list--item.has_sub').addClass('sub_show');
    });
    $('.tap_area-prev').on('click',function(){
      $(this).closest('.gnav_sub').removeClass('is_show');
      $(this).closest('.gnav','.gnav_list--item.has_sub').removeClass('sub_show');
    });
    $(document).on("touchstart", start_check);
    $(document).on("touchmove", move_check);
    $(document).on("touchend", end_check);
    var movY,movX, posY, posX;
    function start_check(event) {
      posY = getY(event);
      posX = getX(event);
      movY = '';
      movX = '';
      msgY = '';
      msgX = '';
    }
    function move_check(event) {
      if (posX - getX(event) > 70) {
        movX = "lft";
      }
      else if (posX - getX(event) < -70) {
        movX = "rgt";
      }
      if (posY - getY(event) > 70) {
        movY = "top";
      }
      else if (posY - getY(event) < -70) {
        movY = "btm";
      }
    }
    function end_check(event) {
      if ( $('.gnav').hasClass('sub_show') ) {
        if (movX == "rgt") {
          $('.gnav_sub').removeClass('is_show');
          $('.gnav').removeClass('sub_show');
          $('.gnav_list--item.has_sub').removeClass('sub_show');
        }
      }
    }
    function getY(event) {
      return (event.originalEvent.touches[0].pageY);
    }
    function getX(event) {
      return (event.originalEvent.touches[0].pageX);
    }

  /* acod_arrow
  ********************************************** */
    $(document).on('click','.acod_arrow',function(){
      $(this).closest('.gnav_list--item').toggleClass('sub_show');
      $(this).siblings('.gnav_sub').slideToggle(400);
    });



  /* tablet
  ********************************************** */
    //if ( ipad == true  ) {
      // <?php // メガメニューのあるナビのaタグを無効化 ?>
      // $('.gnav_list--item.has_sub .gnav_list--item_txt a').attr('href','javascript:void(0);')
      // <?php // ipad用のメガメニュー表示classの削除を関数化 ?>
      // function class_remove() {
      //   $('.gnav_list--item').removeClass('is_show');
      // }
      // $('.gnav_list--item.has_sub').on('touchstart',function(){
      //   class_remove();
      //   $(this,'.gnav_sub').addClass('is_show');
      // });
      // $(document).on('touchstart',function(event) {
      //   if( !$(event.target).closest('.gnav_list--item').length ) {
      //     class_remove();
      //   }
      // });
    //}

})