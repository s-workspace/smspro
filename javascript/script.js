$(function(){

  $('input').on({
    'focus' : function() {
        $(this).addClass('focus');
    },
    'blur' : function() {
        $(this).removeClass('focus');
    }
  });

  // 체크박스
  $('.check_box label').click(function(){
    $(this).prev('.check_icon').toggleClass("on");
  });
  // 체크박스 끝
  
  // 회원가입
  $('#cer_req').click(function(e){
    e.preventDefault();
    $('.cer_chk').removeClass('none');
  });

  $('.member_type li').click(function(){
    $(this).addClass('this');
    $(this).siblings().removeClass('this');
  });

  $('.postal').change(function(){
    $('.postal_text').removeClass('none');
  });
  // 회원가입 끝
  
  // 약관동의 체크박스
  $("#sign_all").on("click",function(){
   var all_agree = $(this).is(":checked");
   if (all_agree == true) {
     $("#sign_agree01").prop("checked",true);
     $("#sign_agree02").prop("checked",true);
   }
   else {
     $("#sign_agree01").prop("checked",false);
     $("#sign_agree02").prop("checked",false);
   }
 });

 $("#sign_agree01").on("click",function(){
   var checked = $(this).is(":checked");
   if (checked == false) {
     $("#sign_all").prop("checked",false);
   }
 });
 $("#sign_agree02").on("click",function(){
   var checked = $(this).is(":checked");
   if (checked == false) {
     $("#sign_all").prop("checked",false);
   }
 });
 $("#sign_agree03").on("click",function(){
   var checked = $(this).is(":checked");
   if (checked == false) {
     $("#sign_all").prop("checked",false);
   }
 });
 $(".sign_agree").on("click",function(){
   var checked01 = $("#sign_agree01").is(":checked");
   var checked02 = $("#sign_agree02").is(":checked");
   if (checked01 == true && checked02 == true) {
     $("#sign_all").prop("checked",true);
   }
 });
 // 이용약관 체크박스 끝
 
 // 이용약관 레이어
 $("#termsType01_btn").click(function(e){
   e.preventDefault();
   $('.layer_cover').show();
   $("#termsType01").show();
 });
 $("#termsType02_btn").click(function(e){
   e.preventDefault();
   $('.layer_cover').show();
   $("#termsType02").show();
 });
 $("#termsType03_btn").click(function(e){
   e.preventDefault();
   $('.layer_cover').show();
   $("#termsType03").show();
 });
 $(".agree_cont_btn > a").click(function(e){
   e.preventDefault();
   $('.layer_cover').hide();
   $(".layer").hide();
 });
 // 이용약관 레이어 끝
 
 // 증빙서류
 $("#billDoc").change(function(){
   var $billDoc = $('#billDoc option:selected').val();
   if ($billDoc == 2) {
     $('#receipt').removeClass('none');
     $('#receipt_box').removeClass('none');
     $('#rec01').removeClass('none');
   }
   else {
      $('#receipt').addClass('none');
      $('#receipt_box').addClass('none');
      $('#rec01').addClass('none');
      $('#rec02').addClass('none');
   }
 });
 $("#receipt").change(function(){
   var $receipt = $('#receipt option:selected').val();
   if ($receipt == 1) {
     $('#rec01').removeClass('none');
     $('#rec02').addClass('none');
   }
   else if ($receipt == 2) {
     $('#rec02').removeClass('none');
     $('#rec01').addClass('none');
   }
 });
 $("#billDoc02").change(function(){
   var $billDoc02 = $('#billDoc02 option:selected').val();
   if ($billDoc02 == 1) {
     $('#receipt_box02').removeClass('none');
     $('#rec02-1').removeClass('none');
   }
   else {
      $('#receipt_box02').addClass('none');
      $('#rec02-1').addClass('none');
      $('#rec02-2').addClass('none');
   }
 });
 $("#receipt02").change(function(){
   var $receipt02 = $('#receipt02 option:selected').val();
   if ($receipt02 == 1) {
     $('#rec02-1').removeClass('none');
     $('#rec02-2').addClass('none');
   }
   else if ($receipt02 == 2) {
     $('#rec02-2').removeClass('none');
     $('#rec02-1').addClass('none');
   }
 });
 // 증빙서류 끝
 
 // 휴대폰 인증 레이어
 $('#hpAuthBt').click(function(e){
   e.preventDefault();
   $('.layer_wrap').removeClass('none');
   $('.hp_layer').removeClass('none');
 });
 // 휴대폰 인증 레이어 끝

  //  아이디/비밀번호 찾기
  $('.find_acc_type li').eq(0).click(function(){
      $('.type_B').addClass('none');
      $('.type_A').removeClass('none');
  });
  $('.find_acc_type li').eq(1).click(function(){
      $('.type_A').addClass('none');
      $('.type_B').removeClass('none');
  });
  $('.find_member_type li').eq(0).click(function(){
      $('.pw_tab').addClass('none');
      $('.find_pw_btn').addClass('none');
      $('.id_tab').removeClass('none');
      $('.find_id_btn').removeClass('none');
  });
  $('.find_member_type li').eq(1).click(function(){
    $('.id_tab').addClass('none');
    $('.find_id_btn').addClass('none');
      $('.pw_tab').removeClass('none');
      $('.find_pw_btn').removeClass('none');
  });
  
  // 자주묻는 질문
  $(".faq_box dt").click(function(){
    $(this).toggleClass("on");
    $(this).parent().siblings().find("dt").removeClass("on");
    $(this).next().slideToggle('300');
    $(this).parent().siblings().find('dt').next().slideUp('300');
  });

});
