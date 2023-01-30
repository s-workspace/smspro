$(function(){

  // 템플릿 등록

  // 다시쓰기
  $('#return_btn3').click(function(e){
    e.preventDefault();
    $('.rcs_text').val('');
    $('.t_byte b').html('0');
  });

  // 특수문자 레이어
  $('.sh_btn3').click(function(e){
    e.preventDefault();
    var top = $(this).offset().top + 45;
    $(this).toggleClass('on');
    $(this).parents('.btn_box li').siblings().find('.action_btn').removeClass('on');
    $('.msg_write').find('.action_btn').removeClass('on');
    $('.sh_layer03').siblings('.dlayer').hide();
    $('.sh_layer03').toggle();
    $('.sh_layer03').css('top',top);
  });

  $('.sh_layer03 li').click(function(){
    var sh = $(this).html();
    var textLength = $('.rcs_text').val();
    
    $('.rcs_text').val(textLength + sh);
    $('.msg_view_text > span').html(textLength + sh);
    byte3();
  });

  // 변수레이어
  $('.variable_btn3').click(function(e){
    e.preventDefault();
    var top = $(this).offset().top + 45;
    $(this).toggleClass('on');
    $(this).parents('.btn_box li').siblings().find('.action_btn').removeClass('on');
    $('.msg_write').find('.action_btn').removeClass('on');
    $('.variable_layer03').siblings('.dlayer').hide();
    $('.variable_layer03').toggle();
    $('.variable_layer03').css('top',top);
  });

  $('.variable_layer03 li').click(function(){
    var variable = $(this).html();
    var textLength = $('.rcs_text').val();
    
    $('.rcs_text').val(textLength + variable);
    $('.msg_view_text > span').html(textLength + variable); 
    byte3();
  });

  // 타이틀 유형
  $('.title_sel ul li').click(function(e){
    var title = $(e.target).index();
    var cnt = $('.title_sel ul li');
    for (let i = 0; i <= cnt.length; i++) {
      if (title === i) {
        $('#rcs_title').removeClass();
        $('#rcs_title').addClass("n0" + i);
      }
    }
  });

  $(".array i").click(function(){
    $(this).addClass('on');
    $(this).siblings().removeClass('on');
  });

  $('.cell_text_box').click(function(){
    $('.custom_box').hide();
    $(this).find('.custom_box').show();
  });
  $('html').click(function(e){
    if($(e.target).parents('.cell_text_box').length < 1) $('.custom_box').hide();
  });

  $('.custom_box li').click(function(){
    $(this).toggleClass('on');
  });

  // 템플릿 등록 글자수
  $(".rcs_text").on('keyup keydown', function (e) {
    var totalByte = 0;
    var textLength = $(this).val();
    var textView = $(this).val();
    var saveText = "";

    for (var i = 0 ; i < textLength.length; i++) {
      var currentByte = textLength.charCodeAt(i);
      if (escape(currentByte).length >= 4) totalByte += 1;
      else totalByte++;

      if (totalByte <= 90) saveText += textLength.charAt(i);
    }
    textLength = totalByte;
   
  if (textLength > 90) {
    alert("90자 이상 작성하실 수 없습니다.");
    $(this).val(saveText);
  }
  else {
    $('.msg_write .t_byte > b').html(textLength);
    $('.return_write .t_byte > b').html(textLength);
  }
  if (textLength == 0) {
    $('.msg_view_text > span').html("내용 미리보기");
    $('.rcs_text').val(saveText);
  }
  else {
    $('.msg_view_text > span').html(textView);
    $('.rcs_text').val(saveText);
  }
  });

  $(".cell_text").on('keyup keydown', function (e) {
    var totalByte = 0;
    var textLength = $(this).val();
    var textView = $(this).val();
    var saveText = "";

    for (var i = 0 ; i < textLength.length; i++) {
      var currentByte = textLength.charCodeAt(i);
      if (escape(currentByte).length >= 4) totalByte += 1;
      else totalByte++;

      if (totalByte <= 90) saveText += textLength.charAt(i);
    }
    textLength = totalByte;
   
  if (textLength > 90) {
    alert("90자 이상 작성하실 수 없습니다.");
    $(this).val(saveText);
  }
  else {
    $('.msg_write .t_byte > b').html(textLength);
    $('.return_write .t_byte > b').html(textLength);
  }
  if (textLength == 0) {
    $('.msg_view_text > span').html("내용 미리보기");
    $('.cell_text').val(saveText);
  }
  else {
    $('.msg_view_text > span').html(textView);
    $('.cell_text').val(saveText);
  }
  });

  function byte3() {
    var textLength = $('.rcs_text').val();
    var totalByte = 0;
    var saveText = "";

    for (var i = 0 ; i < textLength.length; i++) {
      var currentByte = textLength.charCodeAt(i);
      if (escape(currentByte).length >= 4) totalByte += 1;
      else totalByte++;

      if (totalByte <= 90) saveText += textLength.charAt(i);
    }
    textLength = totalByte;
    $('.msg_write .t_byte > b').html(textLength);
  }
  
});
