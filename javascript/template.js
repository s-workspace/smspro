$(function(){

  // 템플릿 등록

  // 다시쓰기
  $('#return_btn3').click(function(e){
    e.preventDefault();
    $('.rcs_text').val('');
    $('.msg_view_text > span').html('내용 미리보기');
    $('.t_byte b').html('0');
  });

  // 특수문자 레이어
  $('.sh_btn3').click(function(e){
    e.preventDefault();
    var top = $(this).offset().top + 45;
    $(this).toggleClass('on');
    $(this).parents('.btn_box li').siblings().find('.action_btn').removeClass('on');
    $('.sh_layer02').siblings('.dlayer').hide();
    $('.sh_layer02').toggle();
    $('.sh_layer02').css('top',top);
  });

  $('.sh_layer02 li').click(function(){
    var sh = $(this).html();
    var textLength = $('.rcs_text').val();
    
    if(textLength.length <= 90) {
      $('.rcs_text').val(textLength + sh);
      $('.msg_view_text > span').html(textLength + sh);
    }
    else alert("90자 이상 작성하실 수 없습니다.");

    byte3();
  });

  // 변수레이어
  $('.variable_btn3').click(function(e){
    e.preventDefault();
    var top = $(this).offset().top + 45;
    $(this).toggleClass('on');
    $(this).parents('.btn_box li').siblings().find('.action_btn').removeClass('on');
    $('.variable_layer02').siblings('.dlayer').hide();
    $('.variable_layer02').toggle();
    $('.variable_layer02').css('top',top);
  });

  $('.variable_layer02 li').click(function(){
    var variable = $(this).html();
    var textLength = $('.rcs_text').val();

    if(textLength.length <= 90) {
      $('.rcs_text').val(textLength + variable);
      $('.msg_view_text > span').html(textLength + variable); 
    }
    else alert("90자 이상 작성하실 수 없습니다.");
    
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

  // 배열선택
  $('.cell_tit .array i').click(function(){
    var target = $(this).hasClass('merge');
    $(this).addClass('on');
    $(this).siblings().removeClass('on');

    if (target === true) {
      $('.g_t').addClass("none");
      $('.cell_tit .box_two').addClass("none");
      $('.rcs_Wtitle span').html('');
    }
    else {
      $('.g_t').removeClass("none");
      $('.cell_tit .box_two').removeClass("none");
      $('#var_sel').val(0).is(":selected");
    }
  });

  array();
  function array () {
    $('.cell_contents tbody tr').each(function(index){
      $(this).attr('class',"line_" + index);
      $(document).on('click','.line_' + index + ' .array i', function(){
        var target = $(this).hasClass('merge');
    
        $(this).addClass('on');
        $(this).siblings().removeClass('on');
        if (target === true) {
          $(this).parents('tr').find('.cell_text_wrap .box_two').addClass('none');
          $('#line_' + index).find('.t_right').addClass('none');
        }
        else {
          $(this).parents('tr').find('.cell_text_wrap .box_two').removeClass('none');
          $('#line_' + index).find('.t_right').removeClass('none');
        } 
      });
    });
  }

  $('.cell_view').each(function(index){
    $(this).attr('id',"line_" + index);
  });
  
  // 텍스트 커스텀
  $(document).on('click','.cell_text_box', function(){
    $('.custom_box').hide();
    $(this).find('.custom_box').show();
  });

  $('html').click(function(e){
    if($(e.target).parents('.cell_text_box').length < 1) $('.custom_box').hide();
    if($(e.target).parents('.color_board').length < 1) {
      $('.color_board').addClass('none');
      $('.f_color').removeClass('on');
    }
  });

  $(document).on('click','.custom_box li', function(){
    var f_bold = $(this).hasClass('f_bold on');
    var t_align = $(this).hasClass('t_align');
    var f_size = $(this).hasClass('f_size');
    var f_color = $(this).hasClass('f_color');
    var f_colorOn = $(this).hasClass('f_color on');

    $(this).addClass('on');

    if (f_bold === true) $(this).removeClass('on');
    if (t_align === true) $(this).siblings('.t_align').removeClass('on');
    if (f_size === true) $(this).siblings('.f_size').removeClass('on');
    if (f_colorOn === true) {
      $(this).removeClass('on');
      $(this).parents('.custom_box').find('.color_board').toggleClass('none');
    }
    else if(f_color === true) $(this).parents('.custom_box').find('.color_board').toggleClass('none');
  });

  custom();
  function custom() {
    $('.custom_box').each(function(index){
      $(this).attr('id', "cus_" + index);
      $(document).on('click','#cus_' + index + ' li', function(){
        var f_bold = $('#cus_' + index + ' li').hasClass('f_bold on');
        var t_align_left = $('#cus_' + index + ' li').hasClass('t_align_left on');
        var t_align_right = $('#cus_' + index + ' li').hasClass('t_align_right on');
        var f_size14 = $('#cus_' + index + ' li').hasClass('f_size14 on');
        var f_size16 = $('#cus_' + index + ' li').hasClass('f_size16 on');
        var f_size18 = $('#cus_' + index + ' li').hasClass('f_size18 on');
  
        if (f_bold === true) $('#text_' + index).addClass('bold');
        else $('#text_' + index).removeClass('bold');
        if (t_align_left === true) $('#text_' + index).addClass('t_left');
        else $('#text_' + index).removeClass('t_left');
        if (t_align_right === true) $('#text_' + index).addClass('t_right');
        else $('#text_' + index).removeClass('t_right');
        if (f_size14 === true) $('#text_' + index).addClass('ft_14');
        else $('#text_' + index).removeClass('ft_14');
        if (f_size16 === true) $('#text_' + index).addClass('ft_16');
        else $('#text_' + index).removeClass('ft_16');
        if (f_size18 === true) $('#text_' + index).addClass('ft_18');
        else $('#text_' + index).removeClass('ft_18');
      });
    });
  }

  color();
  function color() {
    $('.color_board').each(function(index){
      $(this).attr('id', "color_" + index);
      $(document).on('click','#color_' + index + ' span', function(){
        var color = $(this).text();
        $('#text_' + index).css('color',color);
      });
    });
  }

  // 라인 생성
  line();
  function line() {
    $('.line_chk').each(function(index){
      $(this).attr('class', "line_chk line_" + index);
  
      $(document).on('click','.line_chk.line_' + index, function(){
        var checked = $('.line_' + index).is(":checked");
        if (checked == true) $('.cell_view#line_' + index).addClass('line');
        else $('.cell_view#line_' + index).removeClass('line');
      });
    });
  }

  // 셀 삭제
  remove();
  function remove() {
    $('.cell_contents tbody tr').each(function(index){
      $(document).on('click','.line_' + index + ' .cell_remove', function(){
        var count = $('.cell_contents tbody').children().length;

        $(this).parents('tr').remove();
        $('.cell_view#line_' + index).remove();
        if (count <= 10 ) $('.cell_add').removeClass('none');
      });
    });
  }

  // 셀 추가
  $('.cell_add').click(function(){
    var cell = $('.cell_contents tbody tr').last().html();
    var count = $('.cell_contents tbody').children().length;
    var text = $('.cell_view').last().html();
    
    $('.msg_view_text .btn_view').before('<div class="cell_view">' + text + '</div>');
    $('.cell_view').last().find('p').text('내용 입력');

    $('.cell_contents tbody').append('<tr>' + cell + '</tr>');
    if (count > 8 ) $('.cell_add').addClass('none');

    $('.cell_txt').each(function(index){
      $(this).attr('id',"cell_" + index);
    });
    $('.cell_view').each(function(index){
      $(this).attr('id',"line_" + index);
    });
    $('.custom_box').each(function(index){
      $(this).attr('id',"cus_" + index);
    });

    array();
    cellBox();
    line();
    remove();
    custom();
    color();
  });

  // 셀 입력
  $('.cell_txt').each(function(index){
    $(this).attr('id',"cell_" + index);
  });

  cellBox();
  function cellBox() {
    $('.cell_view p').each(function(index){
      $(this).attr('id',"text_" + index);
      
      $('#cell_' + index).on('keydown keyup', function(){
        var text = $('#cell_' + index).val();
        if (text.length > 0) $('#text_' + index).html(text);
        else $('#text_' + index).html('내용 입력');
      });

      $('.cell_txt').on('keydown keyup', function(){
        var totalByte = 0;
        
        $('.cell_txt').each(function(){
          var textLength = $(this).val();
          var saveText = "";
          for (var i = 0 ; i < textLength.length; i++) {
            var currentByte = textLength.charCodeAt(i);
            if (escape(currentByte).length >= 4) totalByte += 1;
            else totalByte++;
      
            if (totalByte <= 90) saveText += textLength.charAt(i);
          }
          textLength = totalByte;
          if (totalByte > 90) $(this).val(saveText);
        });
        if (totalByte > 90) alert("90자 이상 작성하실 수 없습니다.");
        else $('.msg_write .t_byte > b').html(totalByte);
      });
    });
  }

  // 템플릿 제목
  $("#rcs_tit").on('keydown keyup', function(){
    var rscTitle = $(this).val();
    if (rscTitle.length > 0) $('.rcs_Wtitle p').html(rscTitle);
    else $('.rcs_Wtitle p').html('제목 입력');
  });

  $("#var_sel").change(function(){
    var varText = $('#var_sel option:selected').html();
    var varNum = $('#var_sel option:selected').val();

    if (varNum == 0) $('.rcs_Wtitle span').html('');
    else $('.rcs_Wtitle span').html(varText);
  });

  // 템플릿 등록 글자수
  $('.rcs_text').on('keyup keydown', function (e) {
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
  }
  if (textLength == 0) {
    $('.msg_view_text > span').html("내용 미리보기");
    $('.rcs_text').val(saveText);
  }
  else {
    $('.msg_view_text > span').html(saveText);
    $('.rcs_text').val(saveText);
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
