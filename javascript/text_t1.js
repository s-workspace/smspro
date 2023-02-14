$(function(){
  // 글자수 세기
  $("#text_box").on('keyup keydown', function (e) {
    var totalByte = 0;
    var textLength = $(this).val();
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
    $('#text_box2').val(saveText);
  }
  else {
    $('.msg_view_text > span').html(saveText);
    $('#text_box2').val(saveText);
  }
  });

  function byte() {
    var textLength = $('#text_box').val();
    var totalByte = 0;
    var saveText = "";

    for (var i = 0 ; i < textLength.length; i++) {
      var currentByte = textLength.charCodeAt(i);
      if (escape(currentByte).length >= 4) totalByte += 1;
      else totalByte++;

      if (totalByte <= 90) saveText += textLength.charAt(i);

      if (totalByte > 90) {
         alert("90Byte 이상 작성하실 수 없습니다.");
         $(this).val(saveText);
       }
    }
    textLength = totalByte;
    $('.msg_write .t_byte > b').html(textLength);
  }

   // 특수문자 레이어
   $('.sh_btn').click(function(e){
      e.preventDefault();
      var top = $(this).offset().top + 45;
      $(this).toggleClass('on');
      $(this).parents('.btn_box li').siblings().find('.action_btn').removeClass('on');
      $('.return_write').find('.action_btn').removeClass('on');
      $('.sh_layer01').siblings('.dlayer').hide();
      $('.sh_layer01').toggle();
      $('.sh_layer01').css('top',top);
    });
  
    $('.sh_layer01 li').click(function(){
      var sh = $(this).html();
      var textLength = $('#text_box').val();
      
      $('#text_box').val(textLength + sh);
      $('#text_box2').val(textLength + sh);
      $('.msg_view_text > span').html(textLength + sh);
      byte();
   });

   // 변수 레이어
   $('.variable_btn').click(function(e){
      e.preventDefault();
      var top = $(this).offset().top + 45;
      $(this).toggleClass('on');
      $(this).parents('.btn_box li').siblings().find('.action_btn').removeClass('on');
      $('.return_write').find('.action_btn').removeClass('on');
      $('.variable_layer01').siblings('.dlayer').hide();
      $('.variable_layer01').toggle();
      $('.variable_layer01').css('top',top);
    });
  
    $('.variable_layer01 li').click(function(){
      var variable = $(this).html();
      var textLength = $('#text_box').val();
      
      $('#text_box').val(textLength + variable);
      $('#text_box2').val(textLength + variable);
      $('.msg_view_text > span').html(textLength + variable); 
      byte();
    });
})