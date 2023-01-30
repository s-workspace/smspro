<!DOCTYPE html>
<html lang="en">
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
<script src="../javascript/script.js"></script>
<body>
<div class="join_wrap login_wrap">
   <div class="copy_logo">
      <a href="../index.html"><img src="../images/common/copy_logo.png" alt=""></a>
   </div>
   <dl>
      <dd>로그인 정보</dd>
      <dd>회원 정보</dd>
      <dd class="this">가입완료</dd>
   </dl>
   <div class="login_box">
      <a href="../index.php"><svg xmlns="http://www.w3.org/2000/svg" height="20" width="20"><path d="m12 15-5-5 5-5 1.062 1.062L9.125 10l3.937 3.938Z"/></svg>홈으로</a>
      <h1>회원가입 완료</h1>
      <p>로그인 후 서비스를 이용하실 수 있습니다.</p>
      <div class="login_input">
         <i>
            <span>로그인 ID</span>
            <input type="text" name="user_id" placeholder="아이디 입력">
         </i>
         <i>
            <span>비밀번호</span>
            <input type="password" name="user_pw" placeholder="비밀번호 입력">
         </i>
         <i class="security_text_box">
            <span>보안문자</span>
            <input type="text" name="security_text" placeholder="보안문자 입력">
            <div class="security_text">
               <img src="../images/security/spam_protect_img.png" alt="">
            </div>
         </i>
      </div>
      <div class="login_mid">
         <i>
            <div class="check_box">
               <input type="checkbox" id="saveID">
               <div class="check_icon">
                  <svg xmlns="http://www.w3.org/2000/svg" height="20" width="20"><path d="m8.333 11.604 5.084-5.083q.229-.229.531-.229.302 0 .531.229.229.229.229.531 0 .302-.229.531l-5.625 5.625q-.229.23-.531.23-.302 0-.531-.23l-2.271-2.27q-.229-.23-.229-.532 0-.302.229-.531.229-.229.531-.229.302 0 .531.229Z"/></svg>
               </div>
               <label for="saveID">아이디 기억하기</label>
            </div>
            <div class="check_box">
               <input type="checkbox" id="chkSC">
               <div class="check_icon">
                  <svg xmlns="http://www.w3.org/2000/svg" height="20" width="20"><path d="m8.333 11.604 5.084-5.083q.229-.229.531-.229.302 0 .531.229.229.229.229.531 0 .302-.229.531l-5.625 5.625q-.229.23-.531.23-.302 0-.531-.23l-2.271-2.27q-.229-.23-.229-.532 0-.302.229-.531.229-.229.531-.229.302 0 .531.229Z"/></svg>
               </div>
               <label for="chkSC">보안 접속</label>
            </div>
         </i>
         <div class="login_btn">
            <a href="msg.php">로그인</a>
         </div>
      </div>
      <div class="login_bottom">
         <span>가입정보가 기억나지 않나요? <a href="find_account.php">아이디/비밀번호 찾기</a></span>
         <ul>
            <li><a href="policy_use.php" target="_blank">이용약관</a></li>
            <li><a href="policy_privacy.php" target="_blank">개인정보취급방침</a></li>
         </ul>
      </div>
   </div>
   <div class="join_copy">
      Copyright ⓒ SMSPRO. All rights Reserved.
   </div>
</div>
</body>
</html>