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
<div class="join_wrap find_wrap">
   <div class="join_box">
      <a href="../index.php"><svg xmlns="http://www.w3.org/2000/svg" height="20" width="20"><path d="m12 15-5-5 5-5 1.062 1.062L9.125 10l3.937 3.938Z"/></svg>홈으로</a>
      <h1>아이디/비밀번호 찾기</h1>
      <p>아이디나 비밀번호를 찾을 수 없는 경우 고객센터로 문의해 주세요.</p>
      <div class="join_member">
         <div class="member_type">
            <ul class="find_member_type">
               <li class="this">
                  <span>아이디 찾기</span>
               </li>
               <li>
                  <span>비밀번호 찾기</span>
               </li>
            </ul>
            <h1>회원유형</h1>
            <ul class="find_acc_type">
               <li class="this">
                  <span>개인회원</span>
               </li>
               <li>
                  <span>사업자회원</span>
               </li>
            </ul>
         </div>
         <div class="id_tab">
            <div class="join_member type_A">
               <i>
                  <h1>가입자 이름</h1>
                  <input type="text" name="" placeholder="이름을 입력해 주세요.">
               </i>
               <i>
                  <h1>생년월일</h1>
                  <input type="text" name="" placeholder="생년월일 6자리를 입력해 주세요.">
               </i>
               <i>
                  <h1>휴대폰 번호</h1>
                  <input type="text" name="" placeholder="- 구분없이 입력해 주세요.">
               </i>
            </div>
            <div class="join_member type_B none">
               <i>
                  <h1>대표자명</h1>
                  <input type="text" name="" placeholder="이름을 입력해 주세요.">
               </i>
               <i>
                  <h1>사업자등록번호</h1>
                  <input type="text" name="" placeholder="- 구분없이 입력해 주세요.">
               </i>
               <i>
                  <h1>휴대폰 번호</h1>
                  <input type="text" name="" placeholder="- 구분없이 입력해 주세요.">
               </i>
            </div>
         </div>
         <div class="pw_tab none">
            <div class="join_member type_A">
               <i>
                  <h1>아이디</h1>
                  <input type="text" name="" placeholder="아이디를 입력해 주세요.">
               </i>
               <i>
                  <h1>가입자 이름</h1>
                  <input type="text" name="" placeholder="이름을 입력해 주세요.">
               </i>
               <i>
                  <h1>생년월일</h1>
                  <input type="text" name="" placeholder="생년월일 6자리를 입력해 주세요.">
               </i>
               <i>
                  <h1></h1>
                  <div class="pw_chk_box">
                     <span><input type="radio" id="temp3" name="recv_type" value="email"><label for="temp3"><strong>E-mail로 받기</strong></label></span>
                     <span><input type="radio" id="temp4" name="recv_type" value="hp"><label for="temp4"><strong>휴대폰으로 받기</strong></label></span>
                  </div>
               </i>
            </div>
            <div class="join_member type_B none">
               <i>
                  <h1>아이디</h1>
                  <input type="text" name="" placeholder="아이디를 입력해 주세요.">
               </i>
               <i>
                  <h1>대표자명</h1>
                  <input type="text" name="" placeholder="이름을 입력해 주세요.">
               </i>
               <i>
                  <h1>사업자등록번호</h1>
                  <input type="text" name="" placeholder="- 구분없이 입력해 주세요.">
               </i>
               <i>
                  <h1></h1>
                  <div class="pw_chk_box">
                     <span><input type="radio" id="temp1" name="recv_type" value="email"><label for="temp1"><strong>E-mail로 받기</strong></label></span>
                     <span><input type="radio" id="temp2" name="recv_type" value="hp"><label for="temp2"><strong>휴대폰으로 받기</strong></label></span>
                  </div>
               </i>
            </div>
         </div>
      </div>
      <div class="join_btn">
         <a href="" class="find_id_btn">아이디 찾기</a>
         <a href="" class="find_pw_btn none">비밀번호 찾기</a>
         <a href="login.php">취소</a>
      </div>
   </div>
   <div class="join_copy">
      Copyright ⓒ SMSPRO. All rights Reserved.
   </div>
</div>
</body>
</html>