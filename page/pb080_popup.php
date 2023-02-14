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
<body style="min-width:440px; max-width:440px;">
   <div class="popup_wrap">
      <div class="popup_title">
         <h1>공용 080 서비스 신청</h1>
      </div>
      <div class="popup_content">
         <div class="pb080_wrap">
            <i>
               <span>아이디</span>
               <input type="text" id="Join_id" name="Join_id" value="admin" readonly="">
            </i>
            <i>
               <span>신청자</span>
               <input type="text" id="Join_per" name="Join_per" value="" placeholder="신청자 성함을 입력해 주세요.">
            </i>
            <i>
               <span>연락처</span>
               <input type="text" id="Join_num" name="Join_num" value="" placeholder="연락처를 입력해 주세요.">
            </i>
            <i>
               <b>신청 완료 후 고객센터로 연락주셔야 080번호 사용이 가능합니다.</b>
            </i>
            <i>
               <strong>주의사항</strong>
               <ul>
                  <li>- 신청 후 1일 이내 연락 없을 시 자동취소 됩니다. (토요일, 공휴일 제외)</li>
                  <li>- 반드시 '문자프로'에서 전송하여야 수신거부 적용됩니다.</li>
                  <li>- 전송 가능시간 : 08시 이후 21시 이전</li>
                  <li>- 사행성게임, 성인, 불법 대출광고, 의약품 등은 사용 불가합니다.</li>
                  <li>- 수신거부 등록은 전송 후 3일 이내 등록건만 가능합니다.</li>
               </ul>
            </i>
         </div>
         <div class="pop_btn">
           <input type="button" value="공용 080 서비스 신청하기">
           <input type="button" value="취소" onclick="window.close();">
         </div>
      </div>
   </div>
</body>
</html>