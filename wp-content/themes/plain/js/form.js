$(function(){

  /* kana & zip
  *************************************************** */
    setTimeout(function(){
      $.fn.autoKana('#namae', '#kana', {
        katakana : true
      });
      $('#zip').keyup(function(event){
        AjaxZip3.zip2addr(this,'','add','add');
      })
    },1000);

  /* スマホ時テンキー
  *************************************************** */
    $('#tel').on('focus', function () {
      $(this).attr('inputmode', 'tel');
    });

  /* アルファベット先頭大文字OFF、スペルミス修正OFF
  *************************************************** */
    $('input,textarea').each(function(){
      $(this).attr('autocapitalize', 'off').attr('spellcheck','false');
    });

  /* enterで送信させない
  *************************************************** */
    document.onkeydown = function (event){
      if( event.target.tagName == 'INPUT' && event.keyCode == 13 ){
        return false;
      }
    }

  /* validation check
  *************************************************** */
    const recuired_target = '[aria-required="true"],input[type="radio"]';
    const header_mgn = $('.header').height() + 32;

    $(recuired_target).each(function (e) {
      $this = $(this);
      $this_id = $this.attr('id');
      $custom = '';
      if ( $this_id == 'email' ) {
        $custom = ',custom[email]';
      } else if ( $this_id == 'url') {
        $custom = ',custom[url]';
      } else if ( $this_id == 'tel') {
        $custom = ',custom[phone]';
      }
      $this_add_class = 'validate[required'+$custom+']';
      $(this).addClass($this_add_class);
    });
    $("#cf_form form").validationEngine({
      promptPosition: "bottomLeft",
      focusFirstField: false,
      scrollOffset: header_mgn,
    });

  /* confirm_area set
  *************************************************** */
    $('.input_area .form_list').clone(true).insertBefore('.confirm_area .cf_form--btns');
    $('.confirm_area .form_list .wpcf7-form-control').each(function(){
      $this_id = $(this).attr('id');
      $(this).after('<span class="confirm_'+$this_id+'"></span>');
      $(this).remove();
    });

  /* confirmエリア クローン
  *************************************************** */
    var val; // 入力内容取得用
    var id; // id取得用 変数
    var radio; // ラジオボタン値取得用 変数
    var check; // チェックボックス値取得用 変数
    var type; // input要素のtype属性値取得用（ラジオボタンであるかどうか判別のため）

    const form_pos = $('#cf_form').offset().top - header_mgn;

    // ラジオ・チェック初期値の取得
    $("[type='checkbox']:checked,[type='radio']:checked").each(function (index) {
      checked = $(this).val();
      id = $(this).parents("[id]").attr("id");
      $(".confirm_" + id).text(checked);
    });

    //入力欄の内容が変わった際の処理　入力した内容が確認画面へ登録される
    $(".input_area input,.input_area select,.input_area textarea").change(function () {
      val = $(this).val();
      type = $(this).attr("type");
      if (type == "radio") {
        radio = $(this).val();
        id = $(this).parents("[id]").attr("id");
        $(".confirm_" + id).text(radio);
      }
      else if (type == "checkbox") {
        check = $(this).val();
        id = $(this).parents("[id]").attr("id");
        var check = $('#'+id+' input:checked').map(function () {
          return $(this).val();
        }).get().join(",");
        $(".confirm_" + id).text(check);
      }
      else {
        id = $(this).attr("id");
        $(".confirm_" + id).text(val);
        if ( id == 'zip' ) {
          add_val = $('#add').val();
          $(".confirm_add").text(add_val);
        }
      }
    })

    $('#cf_form').addClass('cf_form-input');

    //確認ボタンを押した際の処理　入力画面を非表示・確認画面を表示
    $(document).on('click','.btn-confirm', function () {
      $('.cf_form form').validationEngine('validate');
      if ( !$('.formErrorContent').length ) {
        $('#cf_form').removeClass('cf_form-input cf_form-complete');
        $('#cf_form').addClass('cf_form-confirm');
        $(".input_area").hide();
        $(".confirm_area").show();
        $('body,html').animate({scrollTop:form_pos}, 400, 'swing');
      }
    })

    //戻るボタンを押した際の処理　入力画面を表示・確認画面を非表示
    $(document).on('click','.btn-back', function () {
      $('#cf_form').removeClass('cf_form-confirm cf_form-complete');
      $('#cf_form').addClass('cf_form-input');
      $(".input_area").show();
      $(".confirm_area").hide();
      $('body,html').animate({scrollTop:form_pos}, 400, 'swing');
    })

    //送信ボタンを押した際の処理　サンクス（完了）画面を表示・確認画面を非表示
    $(document).on('click','.btn-send', function () {
      $('#cf_form').removeClass('cf_form-input cf_form-confirm');
      $('#cf_form').addClass('cf_form-complete');
      $(".thanks_area").fadeIn(2000);
      $(".confirm_area").hide();
      $('body,html').animate({scrollTop:form_pos}, 400, 'swing');
    })

    // func - radioチェック
    function radio_check() {
      var $checked_radio_count = $('.input_area input[type="radio"]:checked').length;
      var $radio_count = $('.input_area .wpcf7-list-item.first input[type="radio"]').closest('.wpcf7-list-item.first').length;
      if( $checked_radio_count != $radio_count ){
        $radio_check = false;
      } else {
        $radio_check = true;
      }
      return $radio_check;
    }

    // func - 未入力など漏れがある場合は無効化
    function form_disabled() {
      $('#cf_form').removeClass('cf_form-confirm cf_form-complete');
      $('#cf_form').addClass('cf_form-input');
    }

    function varidate_radio_flag() {
      let flag = true;
      $(recuired_target).each(function (e) {
        if ($(recuired_target).eq(e).val() === "") {
          flag = false;
        }
      });
      radio_check();
      if ( !$radio_check ) {
        flag = false;
      }
      if (!flag) {
        form_disabled();
      }
    }

    //必須項目の内容が変わった際の処理
    $(recuired_target).on('keydown keyup keypress change', function () {
      varidate_radio_flag();
    });

    $('input[type="radio"]').change(function(){
      varidate_radio_flag();
    });

  /* optgroup & hr
  *************************************************** */
    var found_optgroup = $('option:contains("optgroup-")');
    if ( found_optgroup.length ) {
      $.each(found_optgroup, function(value) {
        //remove optgroup prefix
        var updated = $(this).val().replace("optgroup-","");
        //replace items with optgroup tag
        var replaced = $(this).replaceWith('<optgroup label="'+ updated +'">');
      });
      var found_endoptgroup = $('option:contains("endoptgroup")');
        $.each(found_endoptgroup, function(value) {
        //replace items with </optgroup> tag
        var replaced = $(this).replaceWith('</optgroup>');
      });
    }
    var found_hr = $('option:contains("<hr>")');
    if ( found_hr.length ) {
      $.each(found_hr, function(value) {
        //remove optgroup prefix
        var updated = $(this).val().replace("<hr>","");
        //replace items with optgroup tag
        var replaced = $(this).replaceWith('<hr>');
      });
    }

})