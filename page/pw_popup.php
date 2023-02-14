<!DOCTYPE html>
<html lang="en" style="min-width:400px; max-width:400px;">
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
<body style="min-width:400px; max-width:400px;">
   <div class="popup_container">
      <div class="popup_wrap">
         <div class="popup_title">
            <h1>비밀번호 변경</h1>
         </div>
         <div class="popup_content">
            <div class="pw_change_wrap">
               <i>
                  <span>현재 비밀번호</span>
                  <input type="password" id="user_pw" name="user_pw" value="" placeholder="현재 비밀번호를 입력해 주세요." title="비밀번호" tabindex="1" maxlength="20">
               </i>
               <i>
                  <span>신규 비밀번호</span>
                  <input type="password" id="new_pw" name="new_pw" placeholder="영문 및 숫자 또는 특수문자 조합 (8~20자)" title="비밀번호" tabindex="2" maxlength="20">
               </i>
               <i>
                  <span>신규 비밀번호 확인</span>
                  <input type="password" id="new_pwck" name="new_pwck" placeholder="신규 비밀번호를 재입력해 주세요." title="비밀번호" tabindex="2" maxlength="20">
               </i>
            </div>
         </div>
         <div class="pop_btn">
           <input type="button" value="비밀번호 변경">
           <input type="button" value="취소" onclick="window.close();">
         </div>
      </div>
   </div>
</body>
</html>
