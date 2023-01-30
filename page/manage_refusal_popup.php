<!DOCTYPE html>
<html lang="en" style="min-width:340px; max-width:340px;">
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
      $('.refusal_popup textarea').click(function(){
         $(this).parent().addClass('on');
      });
   });
</script>
<body style="min-width:340px; max-width:340px;">
   <div class="popup_wrap">
      <div class="popup_title">
         <h1>수신거부 목록 추가</h1>
      </div>
      <div class="popup_content">
         <div class="refusal_popup">
            <textarea name=""></textarea>
            <div class="refusal_popup_bottom">
               <span>총 인원 <b>0</b> 명</span>
               <a href="#">인원확인</a>
            </div>
         </div>
         <div class="pop_btn">
           <input type="button" value="저장하기">
           <input type="button" value="취소" onclick="window.close();">
         </div>
      </div>
   </div>
</body>
</html>