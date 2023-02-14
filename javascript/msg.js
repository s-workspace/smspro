$(function(){

  // 전송단가 확인
  $('.unit_btn').click(function(){
    $('.unit_box').toggle('300');
  });
  
  // 수신번호 입력
  $('.rec_text textarea').click(function(){
    $('.rec_notice').remove();
  });

  // 다시쓰기
  $('#return_btn').click(function(e){
    e.preventDefault();
    $('#text_box').val('');
    $('.msg_write .t_byte b').html('0');
    $('.msg_view_text span').html('내용 미리보기');
    $('.image_preview a').remove();
    $('.btn_view').hide();
    $('.msg_title ').removeClass('on mms');
  });

  $('#return_btn2').click(function(e){
    e.preventDefault();
    $('.return_write #text_box2').val('');
    $('.return_write .msg_text').removeClass('lms mms');
    $('.return_write .msg_text').addClass('sms');
    $('.return_write .t_byte b').html('0');
    $('.t_byte > span').html('/90Byte');
  });

  // 버튼 추가
  $('.btn_upload > ul li').click(function(){
    $(this).addClass('this');
    $(this).siblings().removeClass('this');
    if ($(this).hasClass('btn-01')) {
      $('.add_btn.btn-01').removeClass('none');
      $('.btn_view .btn-01').show();
      
      $('.add_btn.btn-02').addClass('none');
      $('.add_btn.btn-03').addClass('none');
      $('.btn_view .btn-02').hide();
      $('.btn_view .btn-03').hide();
    }
    else if ($(this).hasClass('btn-02')) {
      $('.add_btn.btn-01').removeClass('none');
      $('.btn_view .btn-01').show();
      $('.add_btn.btn-02').removeClass('none');
      $('.btn_view .btn-02').show();
      
      $('.add_btn.btn-03').addClass('none');
      $('.btn_view .btn-03').hide();
    }
    else if ($(this).hasClass('btn-03')) {
      $('.add_btn.btn-01').removeClass('none');
      $('.btn_view .btn-01').show();
      $('.add_btn.btn-02').removeClass('none');
      $('.btn_view .btn-02').show();
      $('.add_btn.btn-03').removeClass('none');
      $('.btn_view .btn-03').show();
    }
    else {
      $('.add_btn').addClass('none');
      $('.btn_view button').hide();
    }
  });

  $('.btnName').on('keydown keyup', function(){
    $('.btnName').each(function(index){
      index ++;
      var btnName = $(this).val();
      if(btnName.length > 0) $('.btn_view .btn-0' + index).text(btnName);
      else $('.btn_view .btn-0' + index).text('버튼명');
    });
  });
  
  // 버튼 구분
  $('.add_btn').each(function(index){
    index ++;
    $('.add_btn.btn-0' + index + ' .url_sel').click(function(){
      $('.add_btn.btn-0' + index + ' .i_url').siblings('.sub_input').addClass('none');
      $('.add_btn.btn-0' + index + ' .i_url').removeClass('none')
    });

    $('.add_btn.btn-0' + index + ' .num_sel').click(function(){
      $('.add_btn.btn-0' + index + ' .i_num').siblings('.sub_input').addClass('none');
      $('.add_btn.btn-0' + index + ' .i_num').removeClass('none')
    });
  });

  // 특수문자 레이어
  $('.sh_btn2').click(function(e){
    e.preventDefault();
    var top = $(this).offset().top + 45;
    $(this).toggleClass('on');
    $(this).parents('.btn_box li').siblings().find('.action_btn').removeClass('on');
    $('.msg_write').find('.action_btn').removeClass('on');
    $('.sh_layer02').siblings('.dlayer').hide();
    $('.sh_layer02').toggle();
    $('.sh_layer02').css('top',top);
  });

  $('.sh_layer02 li').click(function(){
    var sh = $(this).html();
    var textLength = $('#text_box2').val();
    
    $('#text_box2').val(textLength + sh);
    byte2();
  });
  // 특수문자 레이어 끝

  // 변수 레이어
  $('.variable_btn2').click(function(e){
    e.preventDefault();
    var top = $(this).offset().top + 45;
    $(this).toggleClass('on');
    $(this).parents('.btn_box li').siblings().find('.action_btn').removeClass('on');
    $('.msg_write').find('.action_btn').removeClass('on');
    $('.variable_layer02').siblings('.dlayer').hide();
    $('.variable_layer02').toggle();
    $('.variable_layer02').css('top',top);
  });

  $('.variable_layer02 li').click(function(){
    var variable = $(this).html();
    var textLength = $('#text_box2').val();
    
    $('#text_box2').val(textLength + variable);
    byte2();
  });
  // 변수 레이어 끝

  // 변수 등록 가이드
  $('.VarGuide_btn').click(function(e){
    e.preventDefault();
    $('.layer_cover').show();
    $('.VarGuide_layer').fadeIn('300');
  });

  // 전송하기 레이어
  $('#send_btn').click(function(e){
    e.preventDefault();
    $('.layer_cover').show();
    $('.send_layer').fadeIn('300');
  });

  // 문자 불러오기 레이어
  $(".myMsg").on("click",function(e){
    e.preventDefault();
    $('.layer_cover').show();
    $("#myMsg_sms").fadeIn('300');
  });
  $('.my_msg_layer .layer_cancel').click(function(){
    $(".msgload").val("1").prop("selected", true);
  });

  $(".msgload").change(function(){
    var msgload = $(this).find("option:selected").val();
    if (msgload == 1) {
      $('.my_msg_layer').fadeOut();
      $('#myMsg_sms').fadeIn();
      $(".msgload").val("1").prop("selected", true);
    }
    else if (msgload == 2) {
      $('.my_msg_layer').fadeOut();
      $('#myMsg_lms').fadeIn();
      $(".msgload").val("2").prop("selected", true);
    }
    else if (msgload == 3) {
      $('.my_msg_layer').fadeOut();
      $('#myMsg_mms').fadeIn();
      $(".msgload").val("3").prop("selected", true);
    }
  });

  // 전송내역 불러오기 레이어
  $(".recMsg").on("click",function(e){
    e.preventDefault();
    $('.layer_cover').show();
    $("#myMsg_rec").fadeIn('300');
  });
  $('.my_msg_layer .layer_cancel').click(function(){
    $(".msgload_rec").val("1").prop("selected", true);
  });
  $(".msgload_rec").change(function(){
    var msgload_rec = $(this).find("option:selected").val();
    if (msgload_rec == 1) {
      $('.my_msg_layer').fadeOut();
      $('#myMsg_rec').fadeIn();
      $(".msgload_rec").val("1").prop("selected", true);
    }
    else if (msgload_rec == 2) {
      $('.my_msg_layer').fadeOut();
      $('#myMsgMMS_rec').fadeIn();
      $(".msgload_rec").val("2").prop("selected", true);
    }
  });

  // 메시지 작성
  $(window).on("resize scroll",function(){
    var log = $(".msg_con").height() + 80;
    var scrollTop = $(window).scrollTop();
    var offsetTop = $(".msg_box").offset().top;
    var offsetBottom = $(".msg_bottom").offset().top - log;
      if (scrollTop > offsetTop ) $(".msg_box").addClass("move");
      if (scrollTop > offsetBottom) {
        $(".msg_box").removeClass("move");
        $(".msg_box").addClass("bottom");
      }
      else {
        $(".msg_box").removeClass("bottom");
        $(".msg_box").addClass("move");
      }
      if ( scrollTop < 75 ) {
        $(".msg_box").removeClass("move");
        $(".msg_box").removeClass("bottom");
      }
  });

  // 대체문자 글자수
  $("#text_box2").on('keyup keydown', function (e) {
    var totalByte = 0;
    var textLength = $(this).val();
    var saveText = "";

    for (var i = 0 ; i < textLength.length; i++) {
      var currentByte = textLength.charCodeAt(i);
      if (escape(currentByte).length >= 4) totalByte += 2;
      else totalByte++;

      if (totalByte <= 2000) saveText += textLength.charAt(i);
    }
    textLength = totalByte;

    if(textLength >= 90) {
    $('.return_write .msg_text').removeClass("sms");
    $('.return_write .msg_text').addClass("lms");
    $('.return_write .msg_text.lms .t_byte > span').html('/2000Byte');
  } else {
    $('.return_write .msg_text').removeClass("lms");
    $('.return_write .msg_text').addClass("sms");
    $('.return_write .t_byte > span').html('/90Byte');
    $('.return_write .msg_text.mms .t_byte > span').html('/2000Byte');
  }
  if (textLength > 2000) {
    alert("2,000Byte 이상 작성하실 수 없습니다.");
    $(this).val(saveText);
  }
  else {
    $('.return_write .t_byte > b').html(textLength);
  }
  });

  function byte2() {
    var textLength = $('#text_box2').val();
    var totalByte = 0;
    var saveText = "";

    for (var i = 0 ; i < textLength.length; i++) {
      var currentByte = textLength.charCodeAt(i);
      if (escape(currentByte).length >= 4) totalByte += 2;
      else totalByte++;

      if (totalByte <= 2000) saveText += textLength.charAt(i);
    }
    textLength = totalByte;
    $('.return_write .t_byte > b').html(textLength);
  }
  // 메시지 작성 끝

  // 메시지 유형
  $("#msgSet01").change(function(){
    if ($(this).is(':checked')) {
      $(".reserve_con").hide();
      $(".ads01").show();
      $(".repeatSetLayer").hide();
      $(".text_box textarea").css("height","225px");
      $(".opt").prop('disabled', true);
      $(".opt").prop('checked', false);
      $("#sType_01").prop('checked', true);
      $(".msg_text").removeClass('typebox02');
      $(".msg_text").addClass('typebox01');
      $(".type01").removeClass('none');
    }
    else {
      $(".ads01").hide();
      $(".text_box textarea").css("height","100%");
      $(".opt").prop('disabled', false);
      $(".msg_text").removeClass('typebox01');
      $(".type01").addClass('none');
    } 
  });
  $("#msgSet03").change(function(){
    if ($(this).is(':checked')) $('.return_write').show();
    else $('.return_write').hide();
  });
  // 메시지 유형 끝

  // 전송 시간 선택
  $('#sType_01').change(function(){
    if ($(this).is(':checked'))
    $('input.opt').prop('checked', false);
    $(this).prop('checked', true);
    $(".reserve_con").hide();
    $(".repeatSetLayer").hide();
  });
  $('#sType_02').change(function(){
    if ($(this).is(':checked'))
    $('input.opt').prop('checked', false);
    $(this).prop('checked', true);
    $(".reserve_con").hide();
    $("#reserveLayer01").show();
    $(".repeatSetLayer").hide();
  });
  $('#sType_03').change(function(){
    if ($(this).is(':checked')) {
    $('input.opt').prop('checked', false);
    $(this).prop('checked', true);
    $(".reserve_con").hide();
    $("#reserveLayer02").show();
    $(".repeatSetLayer").show();
    }
  });

  // 반복예약 레이어
  $('#reserType01').change(function(){
    if ($(this).is(':checked'))
    $('input.opt02').prop('checked', false);
    $(this).prop('checked', true);
    $(".reserTypeCon").removeClass("on");
    $("#reserTypeCon01").addClass("on");
  });
  $('#reserType02').change(function(){
    if ($(this).is(':checked'))
    $('input.opt02').prop('checked', false);
    $(this).prop('checked', true);
    $(".reserTypeCon").removeClass("on");
    $("#reserTypeCon02").addClass("on");
  });
  $('#reserType03').change(function(){
    if ($(this).is(':checked'))
    $('input.opt02').prop('checked', false);
    $(this).prop('checked', true);
    $(".reserTypeCon").removeClass("on");
    $("#reserTypeCon03").addClass("on");
  });
  $('.repeatSetLayer_close').on("click",function(e){
    e.preventDefault();
    $(".repeatSetLayer").hide();
  });
  // 반복예약 레이어 끝
  
  // $('.send_time_wrap').ready(function(){
  //   var today = new Date().toISOString().slice(0, 10);
  //   var Currenttime = new Date().toISOString().slice(11, 16);
  //   document.getElementById('fromDate').value = today;
  //   document.getElementById('fromTime').value = Currenttime;
  //   document.getElementById('ReDate01').value = today;
  //   document.getElementById('ReDate02').value = today;
  //   document.getElementById('ReDate03').value = today;
  //   document.getElementById('ReTime01').value = Currenttime;
  //   document.getElementById('ReTime02').value = Currenttime;
  //   document.getElementById('ReTime03').value = Currenttime;
  // });
  // 전송 시간 선택 끝

  // 발신번호 선택
  $('#num_serach').on({
    'focus' : function() {
      $('.num_serach_list').show();
    },
    'blur' : function() {
      $('.num_serach_list').hide();
    }
  });

  $('.num_plus').click(function(){
    $(this).toggleClass("on");
    $(this).siblings().removeClass('on');
  });
  
  $("#all_num_btn").click(function(){
    $('.reply_num_con#often_num').removeClass('on');
    $('.reply_num_con#all_num').toggleClass("on");
  });
  
  $("#often_num_btn").click(function(){
    $('.reply_num_con#all_num').removeClass('on');
    $('.reply_num_con#often_num').toggleClass("on");
  });

  $(".num_list li.on").click(function(){
    $(this).siblings().removeClass("this");
    $(this).addClass("this");
  });

});

// 이미지 업로드
var sel_files = [];

$(document).ready(function() {
    $("#input_imgs").on("change", handleImgFileSelect);
}); 

function fileUploadAction() {
    $("#input_imgs").trigger('click');
}

function handleImgFileSelect(e) {

    // 이미지 정보들을 초기화
    sel_files = [];
    $(".image_preview").empty();

    var files = e.target.files;
    var filesArr = Array.prototype.slice.call(files);

    var index = 0;
    filesArr.forEach(function(f) {
        if(!f.type.match("image.*")) {
            alert("확장자는 이미지 확장자만 가능합니다.");
            return;
        }
        sel_files.push(f);
        var reader = new FileReader();
        reader.onload = function(e) {
            var html = "<a href=\"javascript:void(0);\" onclick=\"deleteImageAction("+index+")\" id=\"img_id_"+index+"\"><img src=\"" + e.target.result + "\" data-file='"+f.name+"' class='selProductFile'></a>";
            $(".image_preview").css('display','flex');
            $(".image_preview").append(html);
            $(".msg_text").addClass('mms');
            $('.msg_title').addClass('mms');
            $('.msg_text.mms .t_byte > span').html('/2000Byte');
            index++;
        }
        reader.readAsDataURL(f);
    });
}

function deleteImageAction(index) {
    var imgData = $('.image_preview a').length;
    
    sel_files.splice(index, 1);

    var img_id = "#img_id_" + index;
    $(img_id).remove(); 
    $(".msg_text").removeClass('mms');
    $(".msg_title").removeClass('mms');
  }

function fileUploadAction() {
    $("#input_imgs").trigger('click');
}
// 이미지 업로드 끝