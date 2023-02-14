$(function(){
   // 제목 입력
   $('#msg_tit_input').on('keyup keydown', function(){
      var text = $(this).val();
      var msgTitle = $(this).val();
      
      if (text == 0) $('.msg_title').removeClass('on');
      else $('.msg_title').addClass('on');

      $('.msg_title').html(msgTitle);
   });

   // 글자수 세기
   $("#text_box").on('keyup keydown', function (e) {
     var totalByte = 0;
     var textLength = $(this).val();
     var saveText = "";
 
     for (var i = 0 ; i < textLength.length; i++) {
       var currentByte = textLength.charCodeAt(i);
       if (escape(currentByte).length >= 4) totalByte += 1;
       else totalByte++;
 
       if (totalByte <= 1300) saveText += textLength.charAt(i);
     }
     textLength = totalByte;
   if (textLength > 1300) {
     alert("1,300자 이상 작성하실 수 없습니다.");
     $(this).val(saveText);
   }
   else {
     $('.msg_write .t_byte > b').html(textLength);
   }
 
   if (textLength == 0) {
     $('.msg_view_text > span').html("내용 미리보기");
   }
   else {
     $('.msg_view_text > span').html(saveText);
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
 
       if (totalByte <= 1300) saveText += textLength.charAt(i);
 
       if (totalByte > 1300) {
          alert("1,300자 이상 작성하실 수 없습니다.");
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
       $('.msg_view_text > span').html(textLength + variable); 
       byte();
     });
 })