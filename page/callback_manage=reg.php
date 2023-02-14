<!DOCTYPE html>
<html lang="en" style="min-width:595px; max-width:595px;">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="icon" href="../favicon.ico">
   <link rel="stylesheet" href="../css/reset.css">
   <link rel="stylesheet" href="../css/common.css">
   <link rel="stylesheet" href="../css/SUIT.css">
   <title>문자프로 - 메시지 통합 플랫폼</title>
</head>
<script src="https://code.jquery.com/jquery-1.11.3.js"></script>
<script>
   $(function(){
   $(".cb_tab span").on("click",function(){
      $(this).find("input").prop("checked",true);
      $(this).siblings().find("input").prop("checked",false);
      $(this).addClass("on");
      $(this).siblings().removeClass("on");
   });
   $(".cb_tab span").eq(0).on("click",function(){
      $(".cb_box").hide();
      $("#cb_type01").show();
   });
   $(".cb_tab span").eq(1).on("click",function(){
      $(".cb_box").hide();
      $("#cb_type02").show();
   });
   });
</script>
<body style="min-width:595px; max-width:595px;">
   <div class="popup_wrap">
      <div class="popup_title02">
         <h1>발신번호 등록 안내</h1>
         <span>전기통신사업법 제 82조에 의거 2015. 10. 16부터 <b>등록된 발신번호만 문자전송이 가능</b>합니다.</span>
      </div>
      <div class="cb_content">
         <div class="cb_tab">
            <span class="on"><input type="radio" id="methodH" name="method" value="H" checked="checked"></span>
            <span><input type="radio" id="methodD" name="method" value="D"></span>
         </div>
         <div class="cb_box" id="cb_type01">
            <img src="../images/popup/callback01_step.gif" alt="">
            <div class="cb_con">
               <div class="cb_input_box">
                  <input type="text" name="tel1" maxlength="3">-<input type="text" name="tel2" maxlength="4">-<input type="text" name="tel3" maxlength="4">
                  <input type="button" name="" value="등록요청 하기">
               </div>
               <p>* 등록요청 완료 후 반드시 <b>통신가입증명원을 접수</b>해야 사용가능합니다.</p>
            </div>
            <p><img src="../images/popup/tel_num.gif" alt=""></p>
         </div>
         <div class="cb_box" id="cb_type02" style="display:none;">
            <img src="../images/popup/callback02_step.gif" alt="">
            <div class="cb_con">
               <div class="cb_input_box">
                  <input type="text" name="tel1" maxlength="4">-<input type="text" name="tel2" maxlength="4">
                  <input type="button" name="" value="등록요청 하기">
               </div>
               <p>* 등록요청 완료 후 반드시 <b>통신가입증명원을 접수</b>해야 사용가능합니다.</p>
            </div>
            <p><img src="../images/popup/tel_num.gif" alt=""></p>
         </div>
      </div>
   </div>
</body>
</html>