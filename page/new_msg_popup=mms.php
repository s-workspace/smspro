<!DOCTYPE html>
<html lang="en" style="min-width:440px; max-width:440px;">
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
      $("#text_box").on('keyup keydown', function (e) {
         var totalByte = 0;
         var textLength = $(this).val();
         var textView = $(this).val();
         var saveText = "";
     
         for (var i = 0 ; i < textLength.length; i++) {
           var currentByte = textLength.charCodeAt(i);
           if (escape(currentByte).length >= 4) totalByte += 2;
           else totalByte++;
     
           if (totalByte <= 2000) saveText += textLength.charAt(i);
         }
         textLength = totalByte;
       if (textLength > 2000) {
         alert("2000Byte 이상 작성하실 수 없습니다.");
         $(this).val(saveText);
       }
       else $('.t_byte > b').html(textLength);
       });
   });
</script>
<body style="min-width:440px; max-width:440px;">
   <div class="popup_wrap">
      <div class="popup_title">
         <h1>신규 메시지 등록</h1>
      </div>
      <div class="popup_content">
         <div class="msg_wrap">
            <div class="msg_content msg_write">
               <div class="msg_wbox">
                  <div class="msg_table">
                     <i>
                        <div class="msg_tit">
                           <input type="text" placeholder="메시지 제목 입력" maxlength="10" class="">
                        </div>
                        <div class="msg_text mms">
                           <textarea name="" id="text_box" placeholder="내용 입력"></textarea>
                           <div class="t_byte">
                              <b>0</b><span>/2000Byte</span><h1 class="msg_t3">MMS 이미지</h1></h1>
                           </div>
                        </div>
                        <div class="img_box">
                           <ul>
                              <li></li>
                              <li></li>
                              <li></li>
                           </ul>
                        </div>
                     </i>
                  </div>
               </div>
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